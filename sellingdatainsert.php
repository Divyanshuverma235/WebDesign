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
    $coursename = $_POST['coursename'];
    $courseprice = $_POST['courseprice'];

    $q = mysqli_query($con, "INSERT INTO selling (fullname, email, coursename, courseprice) VALUES ('$fullname', '$email', '$coursename' ,'$courseprice')");

    if ($q) {
        header('Location: course-inner.php');
    } else {
        echo "Error inserting row: " . mysqli_error($con);
    }
}
?>