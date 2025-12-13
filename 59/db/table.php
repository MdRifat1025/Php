<?php
include("config.php");

$tbl_info= "CREATE TABLE IF NOT EXISTS std_info (
    std_id INT (10) AUTO_INCREMENT NOT NULL ,
    PRIMARY KEY(std_id),
    name VARCHAR (50) NOT NULL,
    email VARCHAR (50) NOT NULL,
    password VARCHAR (20) NOT NULL
)";
$result_stdinfotbl=mysqli_query($myconnect,$tbl_info);
    if ($result_stdinfotbl)
    {
        echo' Student table created <br>';
    }
else {
    echo' Student  table not created';
}
// marks table
$tbl_marks="CREATE TABLE IF NOT EXISTS marks(
std_id INT (10) NOT NULL,
subj_code INT (7) NOT NULL,
marks INT (3) NOT NULL,
FOREIGN KEY (std_id) REFERENCES std_info(std_id)
)";

$result_marks=mysqli_query($myconnect,$tbl_marks);
    if ($result_marks)
    {
        echo' Marks table created';
    }
else {
    echo' Marks  table not created';
}

?>