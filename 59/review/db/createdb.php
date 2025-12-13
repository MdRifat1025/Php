<?php
$user="root";
$password="";
$host="localhost";
$sql="CREATE DATABASE  customer";
$connect=mysqli_connect($host,$user,$password);

$result=mysqli_query($connect,$sql);
if($result==TRUE)
{
    echo "customer database created";
}
else
{
   echo "customerdatabase not created"; 
}
?>