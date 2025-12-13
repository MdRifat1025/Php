<?php
include("../db/config.php");
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$encode=md5($password);
$sql= "INSERT INTO    std_info(name, email, password) VALUES('$name', '$email', '$encode')";
$insert_result=mysqli_query($myconnect,$sql);
    if ($insert_result)
    {
        //echo 'student info added';
        header("location:../model/stddetails.php");
    }
else
{ 
    echo 'student info not added';
}

?>