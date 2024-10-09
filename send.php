<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
if(isset($_POST["send"]))
{
    $mail=new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "divyanshuraj020@gmail.com";
    $mail->Password = "twtg onol xemb kkdz";
    $mail->SMTPSecure = "ssl";
    $mail->Port = 465;
    $mail->setFrom($_POST["email"]);
    $mail->addAddress("dverma235@rku.ac.in");
    $mail->isHTML(true);
    $mail->Subject = $_POST["subject"];
    $mail->Body = $_POST["message"];
    $mail->send();
     header("Location: contact.php");
    echo "Mail send successfully";
}
?>  