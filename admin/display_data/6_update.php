<?php
 $con =mysqli_connect("localhost","root" ,"", "hotel");
 if (isset($_POST["submit"])){
  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $password= $_POST['password'];
//   if (!is_dir("uploads")) {
//    mkdir("uploads");
// }

// $p_name = $_FILES['s_photo']['name'];
// $p_t_name = $_FILES['s_photo']['tmp_name'];
// $p_folder = "uploads/" . $p_name;

// Move uploaded file to 'uploads' directory
// if (move_uploaded_file($p_t_name, $p_folder)) {
 $q=mysqli_query($con, "UPDATE ahr SET fullname='$fullname', email='$email', password='$password' WHERE fullname='$fullname'");
 if($q){
    header(  'location:6_display.php');
 }
else
 {
    echo "update error";
 }
}

?>