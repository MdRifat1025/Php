<?php
include("../db/config.php");
$address=$_POST['address'];

$sql= "INSERT INTO    cus_info(address) VALUES('$address')";
$insert_result=mysqli_query($myconnect,$sql);
    if ($insert_result)
    {
        //echo 'student info added';
        header("location:../view/cusdetails.php");
    }
else
{ 
    echo 'student info not added';
}
?>