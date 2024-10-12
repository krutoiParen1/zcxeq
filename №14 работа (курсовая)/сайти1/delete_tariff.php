<?php
require_once("db_connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["tariff_name"];

  $delete_query = "DELETE FROM tariffs WHERE name = '$name'";

  if ($conn->query($delete_query) === TRUE) {
    header("Location: admin.php"); // Перенаправление на административную страницу
    exit;
  }
}

$conn->close();
