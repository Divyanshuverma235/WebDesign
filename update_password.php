<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "hotel";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"]; 
    $new_password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    
    if ($new_password !== $confirm_password) {
        echo "Passwords do not match. Please try again.";
    } else {
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
        
        $sql = "UPDATE ahr SET password = '$new_password' WHERE email = '$email'";
        
        if ($conn->query($sql) === TRUE) {
            echo "Password updated successfully.";
        } else {
            echo "Error updating password: " . $conn->error;
        }
    }
}

$conn->close();
?>
