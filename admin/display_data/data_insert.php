<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $con = mysqli_connect("localhost", "root", "", "hotel");
    
    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
    
    // Collect form data
    $fullname = mysqli_real_escape_string($con, $_POST['fullname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    
    // Insert data into database
    $query = "INSERT INTO ahr (fullname, email, password) VALUES ('$fullname', '$email', '$password')";
    if (mysqli_query($con, $query)) {
        header('Location: 6_display.php');
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
    
    // Close connection
    mysqli_close($con);
}
?>
