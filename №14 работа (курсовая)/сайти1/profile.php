<!DOCTYPE html>
<html>

<head>
  <title>Личный кабинет</title>
  <link rel="shortcut icon" href="./img/logo1.png" type="image/x-icon" />
  <link rel="stylesheet" href="./css/profile.css">
  <script src="./javascript/jquery-3.7.1.js"></script>
  <script src="https://lidrekon.ru/slep/js/uhpv-full.min.js"></script>
</head>

<body>

  <a id="specialButton" href="#">
    <img src="https://lidrekon.ru/images/special.png" alt="ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ" title="ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ" />
  </a>

  <div class="container">
    <h1>Добро пожаловать в Личный кабинет</h1>
    <div class="login-form">
      <h2>Вход</h2>
      <form action="login.php" method="post">
        <input type="text" name="login" placeholder="Логин" required>
        <input type="password" name="password" placeholder="Пароль" required>
        <button type="submit">Войти</button>
      </form>
      <a class="back" href="index.html">Вернутся назад</a>
    </div>
    <div class="register-form">
      <h2>Регистрация</h2>
      <form action="register.php" method="post">
        <input type="text" name="first_name" placeholder="Имя" required>
        <input type="text" name="last_name" placeholder="Фамилия" required>
        <input type="email" name="email" placeholder="Адрес электронной почты" required>
        <input type="text" name="login" placeholder="Логин" required>
        <input type="password" name="password" placeholder="Пароль" required>
        <button type="submit">Зарегистрироваться</button>
      </form>
      <a class="back" href="index.html">Вернутся назад</a>
    </div>
  </div>
</body>

</html>