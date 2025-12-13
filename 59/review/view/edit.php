<?php
include("../db/config.php");
$id=$_GET['id'];
$sql_edit="SELECT * FROM cus_info WHERE cus_id='$id'";
$edit_result=mysqli_query($myconnect,$sql_edit);
while($row=mysqli_fetch_array($edit_result))
{
    $id=$row['cus_id'];
    $address=$row['address'];
    
}
echo'<form id="" method="POST" action="../model/update.php">
Customer id<input type="number" name="id"value='.$id.' readonly><br>
Customer address<input type="text" name="address" value='.$address.' ><br>

<input type="Submit" Value="Update customer info">
';
?>