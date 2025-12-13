<?php
include("../db/config.php");
$id=$_GET['id'];
$sql_delete="DELETE FROM std_info WHERE std_id='$id'";
$result_delete=mysqli_query($myconnect,$sql_delete);
if($result_delete)
{
    header("location:../view/stddetails.php");
}
else
{
    echo 'data not deleted';
}
?>