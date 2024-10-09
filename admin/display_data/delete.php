<?php
$fullname =$_GET['fullname'];
$con =mysqli_connect("localhost","root" ,"", "project");
$q=mysqli_query($con, "delete from btech where fullname='$fullname'" );
if($q){
    header(  'location:6_display.php');
 }
else
 {
    echo "update error";
 }
?>
