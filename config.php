<?php
$con = mysqli_connect("localhost", "root", "", "project");

// Check connection
if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
} else {
    //echo "Database Connected Successfully";
}

if(isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $q = mysqli_query($con, "INSERT INTO Btech (fullname, email, password) VALUES ('$fullname', '$email', '$password')");

    if ($q) {
        header('Location: login1.php');
    } else {
        echo "Error inserting row: " . mysqli_error($con);
    }
}
?>