<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $first_name = $_POST["first_name"];
  $last_name = $_POST["last_name"];
  $email = $_POST["email"];
  $login = $_POST["login"];
  $password = $_POST["password"];

  $conn = new mysqli("localhost", "root", "mysql", "tele3_bd");

  if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
  }

  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  $query = "INSERT INTO site_users (first_name, last_name, email, login, password) VALUES ('$first_name', '$last_name', '$email', '$login', '$hashed_password')";

  if ($conn->query($query) === TRUE) {
    session_start();
    $_SESSION["user_id"] = $conn->insert_id;
    header("Location: dashboard.php");
  } else {
    echo "Ошибка при регистрации: " . $conn->error;
  }

  $conn->close();
}
