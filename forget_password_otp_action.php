<?php
include_once("guest_header.php");

if (isset($_POST['btn'])) {
    
    if (isset($_POST['otp'], $_SESSION['forgot_em'])) {
        $otp = $_POST['otp'];
        $em = $_SESSION['forgot_em'];
        $token = $_SESSION['forgot_token'];

        $q = "SELECT * FROM token WHERE email='$email' AND token='$token'";
        $result = mysqli_query($con, $q);
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
            if ($otp == $row['otp']) { 
                header("Location: new_password.php");
                exit;
            } else {
                setcookie('error', "Incorrect OTP", time() + 2, "/");
                header("Location: forgot_password_otp.php");
                exit;
            }
        } else {
            setcookie('error', "Invalid token or email", time() + 2, "/");
            header("Location: forgot_password_otp.php");
            exit;
        }
    } else {
     
        setcookie('error', "Missing OTP or email", time() + 2, "/");
        header("Location: forgot_password_otp.php");
        exit;
    }
}
?>
