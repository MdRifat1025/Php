<?php
$user="root";
$password="";
$host="localhost";
$sql="CREATE DATABASE  batch59";
$connect=mysqli_connect($host,$user,$password);

$result=mysqli_query($connect,$sql);
if($result==TRUE)
{
    echo "batch59 database created";
}
else
{
   echo "batch59 database not created"; 
}
?>