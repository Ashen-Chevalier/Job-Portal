<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "jobs";

$conn=new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}
$query = <<<eof
    LOAD DATA INFILE 'monster.csv'
     INTO TABLE jobs
     FIELDS TERMINATED BY ','
     IGNORE 1 ROWS;
eof;

$conn->query($query);
$conn -> close();


?>