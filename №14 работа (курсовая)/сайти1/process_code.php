<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $code = $_POST["code"];
  $conn = new mysqli("localhost", "root", "mysql", "tele3_bd");

  if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
  }
  $query = "SELECT * FROM access_keys WHERE access_key = '$code'";
  $result = $conn->query($query);

  if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $tariff_id = $row["tariff_id"];
    $_SESSION["tariff_id"] = $tariff_id;
    header("Location: dashboard.php");
    exit;
  } else {
    echo "Неправильный код тарифа.";
  }
  $conn->close();
}
