<?php
include("../db/config.php");
$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql_update="UPDATE std_info SET name='$name', email='$email', password='$password' WHERE std_id='$id'";
$update_result=mysqli_query($myconnect,$sql_update);
if($update_result)
{
    header("location:../view/stddetails.php");
}
else
{
    echo 'Student inf not updated';
}
?>