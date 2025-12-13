<?php
include("../db/config.php");
$id=$_GET['id'];
$sql_delete="DELETE FROM cus_info WHERE cus_id='$id'";
$result_delete=mysqli_query($myconnect,$sql_delete);
if($result_delete)
{
    header("location:../view/cusdetails.php");
}
else
{
    echo 'data not deleted';
}
?>