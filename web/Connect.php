<?php 
$S_Name = 'mysql-db'; 
$U_Name = "myuser";
$Password = "mypassword";
$Db_name = "mydatabase"; 

$conn = new mysqli($S_Name, $U_Name, $Password, $Db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>