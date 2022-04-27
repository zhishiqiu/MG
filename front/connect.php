<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "MG";

$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn){
    echo "connection failed ";
}

?>