<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fit_vmu";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");
?> 