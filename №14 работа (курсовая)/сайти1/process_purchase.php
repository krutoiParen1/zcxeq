<?php
require_once("db_connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $first_name = $_POST["first_name"];
  $last_name = $_POST["last_name"];
  $phone_number = $_POST["phone_number"];
  $email = $_POST["email"];
  $tariff_id = $_POST["tariff_id"];

  // Вставляем данные пользователя и тарифа в базу данных
  $insert_user_query = "INSERT INTO users (first_name, last_name, phone_number, email) VALUES ('$first_name', '$last_name', '$phone_number', '$email')";
  $conn->query($insert_user_query);

  $user_id = $conn->insert_id; // Получаем ID пользователя, которого мы только что добавили

  $access_key = uniqid(); // Генерируем уникальный ключ доступа (вы можете использовать другой метод)

  $insert_access_key_query = "INSERT INTO access_keys (user_id, tariff_id, access_key) VALUES ($user_id, $tariff_id, '$access_key')";
  $conn->query($insert_access_key_query);

  // Закрываем соединение с базой данных
  $conn->close();

  // Оповещение пользователя об успешной покупке
  echo "Спасибо за покупку! Ваш ключ доступа: " . $access_key;
}
