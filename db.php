<?php
require_once("connection.php");
$query = <<<eof
    LOAD DATA INFILE 'monster.csv'
     INTO TABLE jobs
     FIELDS TERMINATED BY ','
     IGNORE 1 ROWS;
eof;

$conn->query($query);
$conn -> close();
?>