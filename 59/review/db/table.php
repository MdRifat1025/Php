<?php
include("config.php");

$tbl_info= "CREATE TABLE IF NOT EXISTS cus_info (
    cus_id INT (10) AUTO_INCREMENT NOT NULL ,
    PRIMARY KEY(cus_id),
    address VARCHAR (50) NOT NULL
   
)";
$result_stdinfotbl=mysqli_query($myconnect,$tbl_info);
    if ($result_stdinfotbl)
    {
        echo' Customer info table created <br>';
    }
else {
    echo' Customer info  table not created';
}


?>