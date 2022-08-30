<?php
include('../database/dbconnect.php');
$data = [
    'regnumber' => $_POST['regnumber'],
    'verificationcode' => $_POST['verificationcode']
];
$stmt = $pdo->prepare("SELECT * FROM students WHERE regnumber = :regnumber AND verificationcode = :verificationcode");
$stmt->execute($data);
$user = $stmt->fetch();

if ($user) {
    $sql = "UPDATE students SET active=true WHERE regnumber = :regnumber AND verificationcode = :verificationcode";
    $pdo->prepare($sql)->execute($data);
    echo json_encode(array('success' => true));
} else {
    echo json_encode(array('success' => false));
}
