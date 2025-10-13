<?php
    $json = file_get_contents('php://input');
    $quiz = json_decode($json, true);
    
    $InsertedID = addQuiz($quiz["ad"],$quiz["aciklama"],$quiz["quizTip"],$quiz["quizSayisi"]);
    if($quiz["quizTip"] == "test"){
        foreach ($quiz["sorular"] as $index => $soru) {
            testQuiz($InsertedID,$soru["soru"],$soru["siklar"][0],$soru["siklar"]
            [1],$soru["siklar"][2],$soru["siklar"][3],$soru["dogruSik"]);
        }
    }



    function addQuiz($quizAdi,$quizDesc,$quizTip,$quizCount){
        require '../../Models/connection.php';
        $sql = "INSERT INTO quiz_bilgileri(quiz_adi,quiz_aciklama,quiz_tipi,quiz_sayisi) VALUES (?,?,?,?)";
        $stmt = mysqli_prepare($baglanti,$sql);
        mysqli_stmt_bind_param($stmt,"sssi",$quizAdi,$quizDesc,$quizTip,$quizCount);
        mysqli_stmt_execute($stmt);
        $insertID = mysqli_insert_id($baglanti);
        mysqli_stmt_close($stmt);
        mysqli_close($baglanti);
        return $insertID;
    }

    function testQuiz($insertID,$quiz_soru,$chose1,$chose2,$chose3,$chose4,$dogruC){
        require '../../Models/connection.php';
        $sql = "INSERT INTO test_quiz(quiz_id,quiz_soru,chose1,chose2,chose3,chose4,dogru_cevap) VALUES (?,?,?,?,?,?,?)";
        $stmt = mysqli_prepare($baglanti,$sql);
        mysqli_stmt_bind_param($stmt,"isssssi",$insertID,$quiz_soru,$chose1,$chose2,$chose3,$chose4,$dogruC);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        mysqli_close($baglanti);
    }
?>