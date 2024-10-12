<?php
$server = "localhost";
$username = "root";
$password = "mysql";
$database = "tele3_bd";

$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
  die("Ошибка подключения к базе данных: " . $conn->connect_error);
}
