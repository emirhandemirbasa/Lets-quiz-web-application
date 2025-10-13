<?php
header('Content-Type: application/json; charset=utf-8');

require '../../Models/connection.php';

$sql = "SELECT * FROM quiz_bilgileri";
$stmt = mysqli_prepare($baglanti, $sql);
mysqli_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

$quizes = [];
while ($row = mysqli_fetch_assoc($result)) {
    $quizes[] = $row;
}

mysqli_stmt_close($stmt);
mysqli_close($baglanti);

echo json_encode($quizes);
?>
