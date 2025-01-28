<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
use time;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST['send'])){


    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'mustafadurur01832@gmail.com';
    $mail->Password = 'dkattuechzvtyscx';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('mustafadurur01832@gmail.com');
    $mail->addAddress("juandavidgutierrezgarcia@gmail.com");
    $mail->isHTML(true);
    
    $mail->Subject = $_POST["name"];
    $mail->Body = "Naam: " . $_POST["name"] . "<br>" .
              "Telefoonnummer: " . $_POST["phone"] . "<br>" .
              "Email: " . $_POST["email"] . "<br>" .
              "Bericht: ". "<br>" . $_POST["message"];

    $mail->send();
    echo"<script>alert('Email is verstuurd!');</script>";
    header("Location: index.php");



}

?>