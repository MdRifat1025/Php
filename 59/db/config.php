<?php
$host="localhost";
$dbname="batch59";
$user="root";
$password="";
$myconnect=mysqli_connect($host,$user, $password, $dbname);
if($myconnect==TRUE)
{
   echo "database connected" ;
}
else
{
    echo mysqli_connect_error();
}
?>