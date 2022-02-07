<?php
require_once("connection.php");
if(isset($_POST['submit'])){
    $email = $conn->real_escape_string($_POST['email']);
    $pass = $conn->real_escape_string($_POST['pass']);

    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$pass'";
    $result = $conn->query($query);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
            session_start();
            $_SESSION['id_user'] = $row['name'];
        }
    } 
}
header("Location: index.php"); 
?>