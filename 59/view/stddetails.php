<?php
include("../db/config.php");
$sql="SELECT * FROM std_info";
$stddetails=mysqli_query($myconnect,$sql);
echo '<table border="2px" width="100%"><tr><th> ID </th><th> Name</th><th> Email </th><th>Password </th><th colspan="2">Action </th><tr>';
while($row=mysqli_fetch_array($stddetails))
{
    $id=$row['std_id'];
    $name=$row['name'];
    $email=$row['email'];
    $password=$row['password'];
    echo'<tr><td>'.$id.'</td><td>'.$name.'</td><td>'.$email.'</td><td>'.$password.'</td>
    <td> <a href="../view/edit.php? id='.$id.'"> Edit</a></td>
    
    <td><a href="../model/delete.php? id='.$id.'" onclick="return window.confirm()";> Delete</a></td>    
    </tr>';
}
?>
</table>