<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';
include('../database/dbconnect.php');
$stmt = $pdo->prepare("SELECT * FROM students WHERE regnumber=?");
$stmt->execute([$_POST['regnumber']]);
if ($stmt->rowCount() > 0) {
    echo json_encode(array('success' => false, 'error' => 'user exists'));
} else {
    $data = [
        'email' => $_POST['email'],
        'regnumber' => $_POST['regnumber'],
        'name' => $_POST['name'],
        'surname' => $_POST['surname'],
        'password' => md5($_POST['password']),
        'verificationcode' => md5(uniqid(rand())),
        'active' => false
    ];

    $sql = "INSERT INTO students (email,regnumber,name,surname,password,verificationcode,active) VALUES (:email,:regnumber,:name,:surname,:password,:verificationcode,:active)";

    try {
        $stmt = $pdo->prepare($sql)->execute($data);
        if ($stmt == true) {
            $code = base64_encode($data['verificationcode']);
            $email = $data['email'];
            $message =
                '<h3 style="font-weight: normal;">hello ' . $data["name"] . ' ' . $data["surname"] . '</h3>
            <h3 style="font-weight: normal;">Welcome to Elearn</h3>
            <h3 style="font-weight: normal;">Your Verification Code is</h3>
            <div
              style="
                background: rgb(34, 193, 195);
                background: linear-gradient(
                  90deg,
                  rgba(34, 193, 195, 1) 0%,
                  rgba(253, 187, 45, 1) 100%
                );
                padding-right: 10px;
                padding-left: 10px;
                border-radius: 10px;
                width: fit-content;
              "
            >
              <h1>' . $code . '</h1>
            </div>';
            $subject = "Confirm Registration";
            $mail = send_mail($email, $message, $subject);
            echo json_encode(array('success' => true, 'mail' => $mail));
        }
    } catch (PDOException $ex) {
        echo json_encode(array('success' => false, 'error' => $ex->getMessage()));
    }
}


function send_mail($email, $message, $subject)
{
    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug  = 0;
        $mail->isSMTP();
        $mail->SMTPSecure = "tls";
        $mail->Host       = 'smtp-mail.outlook.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'pixelcreativesolutions@outlook.com';
        $mail->Password   = '4Pixel_Creative';
        $mail->Port       = 587;
        $mail->setFrom('pixelcreativesolutions@outlook.com', 'Elearn');
        $mail->addAddress($email);
        $mail->addReplyTo('pixelcreativesolutions@outlook.com', 'Elearn');
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $message;
        $mail->send();
        return 'Message has been sent';
    } catch (Exception $e) {
        return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
