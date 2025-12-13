<?php
include("../db/config.php");
$id=$_GET['id'];
$sql_edit="SELECT * FROM std_info WHERE std_id='$id'";
$edit_result=mysqli_query($myconnect,$sql_edit);
while($row=mysqli_fetch_array($edit_result))
{
    $id=$row['std_id'];
    $name=$row['name'];
    $email=$row['email'];
    $password=$row['password'];
    echo $name;
}
echo'<form id="" method="POST" action="../model/update.php">
student id<input type="number" name="id"value='.$id.' readonly><br>
student Name<input type="text" name="name" value='.$name.' ><br>
student email<input type="email"  name="email" value='.$email.' ><br>
student password<input type="password" name="password" value='.$password.' ><br>
<input type="Submit" Value="Update student info">
';
?>