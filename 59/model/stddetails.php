<?php
include("../db/config.php");
$sql="SELECT * FROM std_info";
$stddetails=mysqli_query($myconnect,$sql);
echo '<table border="2px" width="100%"><tr><th> ID </th><th> Name</th><th> Email </th><th>Password </th><tr>';
while($row=mysqli_fetch_array($stddetails))
{
    $id=$row['std_id'];
    $name=$row['name'];
    $email=$row['email'];
    $password=$row['password'];
    echo'<tr><td>'.$id.'</td><td>'.$name.'</td><td>'.$email.'</td><td>'.$password.'</td></tr>';
}
?>
</table>