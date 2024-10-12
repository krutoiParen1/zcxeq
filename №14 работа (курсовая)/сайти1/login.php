<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $login = $_POST["login"];
  $password = $_POST["password"];

  $conn = new mysqli("localhost", "root", "mysql", "tele3_bd");

  if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
  }

  $query = "SELECT * FROM site_users WHERE login = '$login'";
  $result = $conn->query($query);

  if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row["password"])) {
      $_SESSION["user_id"] = $row["id"];
      header("Location: dashboard.php");
    } else {
      echo "Неправильный пароль.";
    }
  } else {
    echo "Пользователь с таким логином не существует.";
  }

  $conn->close();
}
