<?php
require_once("db_connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $description = $_POST["description"];
  $price = $_POST["price"];

  $insert_query = "INSERT INTO tariffs (name, description, price) VALUES ('$name', '$description', $price)";

  if ($conn->query($insert_query) === TRUE) {
    header("Location: admin.php"); // Перенаправление на административную страницу
    exit;
  }
}

$conn->close();
