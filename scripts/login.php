<?php
include('../database/dbconnect.php');
$stmt = $pdo->prepare("SELECT * FROM students WHERE regnumber = ?");
$stmt->execute([$_POST['regnumber']]);
$user = $stmt->fetch();

if ($user && password_verify($_POST['pass'], $user['pass']))
{
    $_SESSION['loggedin'] = true;
    echo json_encode(array('success'=>true,'data'=>$user));
} else {
    echo json_encode(array('success'=>false));
}