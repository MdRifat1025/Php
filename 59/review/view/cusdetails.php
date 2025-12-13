<?php
include("../db/config.php");
$sql="SELECT * FROM cus_info";
$cusdetails=mysqli_query($myconnect,$sql);
echo'<a href="signup.php"> Add customer</a><br>';
echo '<table border="2px" width="100%"><tr><th> ID </th><th> Address</th><th>Action </th><tr>';
while($row=mysqli_fetch_array($cusdetails))
{
    $id=$row['cus_id'];
    $name=$row['address'];
    
    echo'<tr><td>'.$id.'</td><td>'.$name.'</td>
    <td> <a href="../view/edit.php? id='.$id.'"> Edit</a></td>
    
    <td><a href="../model/delete.php? id='.$id.'" onclick="return window.confirm()";> Delete</a></td>    
    </tr>';
}
echo'</table>';

?>
