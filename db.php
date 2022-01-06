<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "jobs";

$conn=new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

if (($handle = fopen("monster.csv", "r")) !== FALSE){
    while(($row = fgetcsv($handle)) !== FALSE){
        $conn->query('INSERT INTO jobs (posts,companys, place, experience) VALUES ("'.$row[0].'","'.$row[1].'", "'.$row[2].'", "'.$row[3].'")');
    }
    fclose($handle);
}
$conn -> close();

?>