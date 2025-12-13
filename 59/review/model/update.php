<?php
include("../db/config.php");
$id=$_POST['id'];
$address=$_POST['address'];

$sql_update="UPDATE cus_info SET address='$address' WHERE cus_id='$id'";
$update_result=mysqli_query($myconnect,$sql_update);
if($update_result)
{
    header("location:../view/cusdetails.php");
}
else
{
    echo 'Customer inf not updated';
}
?>