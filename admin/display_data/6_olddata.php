<?php
session_start();
if(isset($_SESSION['username']))
{
    echo "Welcome" . $_SESSION['username'];
?>
<form action="6_logout.php" method="post">
    <input type="submit" name="submit" value="LogOut">
</form>
<!DOCTYPE html>
<html>
    <?php
    $fullname =$_GET['fullname'];
    $con =mysqli_connect("localhost","root" ,"", "project");
    $ans =mysqli_query($con, "select * from btech where fullname = '$fullname'");
$row =mysqli_fetch_array($ans);
    ?>
<head>
 <title>Registration Form</title>
 <style>
 body{
 background-color: #f2f2f2;
 font-family: Arial, sans-serif;
 }
 </style>
</head>
<body>
<h2>modify details</h2>
<form action="6_update.php" method="post" enctype="multipart/form-data">
 <input type="hidden" name="fullname" value="<?php echo $row['fullname']; ?>">
 <br>
  Full name:
 <input type="text" name="fullname" value="<?php echo $row['fullname']; ?>">
 <br>
 email:
 <input type="email" name="email" value="<?php echo $row['email']; ?>">
 <br>
 password:
 <input type="password" name="password" value="<?php echo $row['password']; ?>">
 <br>
 
 <br><br>
 <input type="submit" name="submit" value="update">

</form>
</body>
</html>
<?php
}
else{
    header('location:index.php');
}
?>