<?php
$servername = "localhost"; 
$username = "root";
$password = ""; 
$dbname = "Baxa";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

$conn->close();
?>