<?php
header("Content-Type: application/json; charset=utf-8");
require '../../Models/connection.php';

// JSON body al
$data = json_decode(file_get_contents("php://input"), true);
$quizID = $data["id"] ?? null;

if (!$quizID) {
    echo json_encode(["error" => "Eksik ID"], JSON_UNESCAPED_UNICODE);
    exit;
}

// 🔍 Hem quiz hem soruları getiriyoruz
$sql = "SELECT qb.id, qb.quiz_adi, qb.quiz_aciklama, qb.quiz_tipi, qb.quiz_sayisi,
               tq.quiz_id, tq.quiz_soru, tq.chose1, tq.chose2, tq.chose3, tq.chose4, tq.dogru_cevap
        FROM quiz_bilgileri qb
        INNER JOIN test_quiz AS tq ON tq.quiz_id = qb.id
        WHERE qb.id = ?";

$stmt = mysqli_prepare($baglanti, $sql);
mysqli_stmt_bind_param($stmt, "i", $quizID);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

// Eğer kayıt yoksa boş dön
if (mysqli_num_rows($result) === 0) {
    echo json_encode(["error" => "Bu ID'ye ait quiz bulunamadı."], JSON_UNESCAPED_UNICODE);
    exit;
}

// 🔄 Veriyi uygun formatta gruplayalım
$quizData = null;
$sorular = [];

while ($row = mysqli_fetch_assoc($result)) {
    if ($quizData === null) {
        $quizData = [
            "quiz_id" => $row["id"],
            "quiz_adi" => $row["quiz_adi"],
            "quiz_aciklama" => $row["quiz_aciklama"],
            "quiz_tipi" => $row["quiz_tipi"],
            "quiz_sayisi" => $row["quiz_sayisi"],
        ];
    }

    $sorular[] = [
        "soru_metni" => $row["quiz_soru"],
        "siklar" => [
            $row["chose1"],
            $row["chose2"],
            $row["chose3"],
            $row["chose4"]
        ],
        "dogru" => $row["dogru_cevap"]
    ];
}

$quizData["sorular"] = $sorular;

// JSON çıktısı
echo json_encode($quizData, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
