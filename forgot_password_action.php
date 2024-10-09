<?php
include "guest_header.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST['btn'])) {
    $em = mysqli_real_escape_string($con, $_POST['email']);

    $q = "SELECT * FROM btech WHERE email='$em'";
    $result = mysqli_query($con, $q);

    if ($result && mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $name = $row[0];
        $q1 = "SELECT * FROM token WHERE email='$em'";
        $result1 = mysqli_query($con, $q1);

        if ($result1 && mysqli_num_rows($result1) == 0) {
            date_default_timezone_set("Asia/Kolkata");
            $s_time = date("Y-m-d G:i:s");

            // Generate OTP and token
            $token = hash('sha512', $s_time);
            $otp = mt_rand(100000, 999999);

            // Insert OTP and token into the database
            $ins_token = "INSERT INTO token VALUES ('','$em','$s_time','$token',$otp)";
            if (mysqli_query($con, $ins_token)) {
                $mail = new PHPMailer();
                try {
                    // SMTP configuration
                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'divyanshuraj020@gmail.com'; // Update with your email
                    $mail->Password = 'twtg onol xemb kkdz'; // Update with your password
                    $mail->SMTPSecure = 'ssl';
                    $mail->Port = 465;

                    // Set email content
                    $mail->setFrom('divyanshuraj020@gmail.com', 'Divyanshu raj'); // Update with your name and email
                    $mail->addAddress($em, $name);
                    $mail->isHTML(true);
                    $mail->Subject = 'Password Reset';
                    $mail->Body = 'Your OTP to reset your account password is ' . $otp;

                    // Send the email
                    if ($mail->send()) {
                        setcookie("success", "OTP to reset your password is sent to your registered email address", time() + 2, "/");
                        header("Location: Forgot_password_otp.php");
                        exit;
                    } else {
                        setcookie("error", "Error in sending OTP. Please try again later.", time() + 2, "/");
                    }
                } catch (Exception $e) {
                    setcookie("error", "Email sending failed. Error: {$mail->ErrorInfo}", time() + 2, "/");
                }
            } else {
                setcookie("error", "Error in generating OTP. Please try again later.", time() + 2, "/");
            }
        } else {
            setcookie('error', "OTP for resetting password is already sent to your registered email address. New OTP will be generated if the old one expires", time() + 2, "/");
        }
    } else {
        setcookie('error', 'Email id is not registered', time() + 2, "/");
    }
    header("Location: Forgot_password.php");
    exit;
}
?>
