<?php
$servername = "localhost";
$username = "root";
$password = "";
$database ="temple";

$conn = mysqli_connect($servername, $username, $password, $database);

if($conn == false){
    dir('Error: Cannot connect');
}


?>