<?php
$servername = "localhost";
$username = "root";
$password = "shreyaa19";
$dbname = "renzicle_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("Connection Failed". $conn->connect_error);
}

?>