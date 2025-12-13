<?php
include("../db/config.php");
$email=$_POST['email'];
$password=$_POST['password'];
$encode=md5($password);
$view_sql="SELECT * FROM std_info WHERE   email='$email' AND password='$encode'";
$result=mysqli_query($myconnect,$view_sql);

$count=mysqli_num_rows($result);

if($count==1)
{
    echo 'login successfull';
}
else
{
    echo' wrong user or password <br> <a href="../view/login.php">Please try again</a>';
}
?>