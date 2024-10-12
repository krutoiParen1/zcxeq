<!DOCTYPE html>
<html lang="ru">

<head>
  <title>Личный кабинет</title>
  <link rel="shortcut icon" href="./img/logo1.png" type="image/x-icon" />
  <link rel="stylesheet" href="./css/styles.css">
  <link rel="stylesheet" href="./css/dashboard.css">

  <script src="./javascript/jquery-3.7.1.js"></script>
  <script src="https://lidrekon.ru/slep/js/uhpv-full.min.js"></script>
</head>

<body>

  <a id="specialButton" href="#">
    <img src="https://lidrekon.ru/images/special.png" alt="ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ" title="ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ" />
  </a>

  <header class="menu">
    <div class="menu__top">
      <div class="menu__inner">
        <a class="menu__logo logo" href="./index.html">
          <img src="./img/logo.png" alt="logo" class="logo" />
        </a>
        <nav class="menu__nav">
          <ul class="menu__nav-list">
            <li class="menu__nav-item">
              <a class="menu-item" href="./index.html">Главная</a>
            </li>
            <li class="menu__nav-item">
              <a class="menu-item" href="./html/about.html">О нас</a>
            </li>
            <li class="menu__nav-item">
              <a class="menu-item" href="servicess.php">Услуги</a>
            </li>
          </ul>
        </nav>
        <ul class="menu__nav-list1">
          <li class="menu__nav-profile">
            <a class="menu-item1" href="dashboard.php"><img class="lichniy" src="./img/lichniy.png" alt="login/register" /></a>
          </li>
        </ul>
      </div>
    </div>
  </header>

  <div class="container">
    <h1>Добро пожаловать в Личный кабинет</h1>

    <!-- Форма для ввода кода тарифа -->
    <div class="code-form">
      <h2>Введите код тарифа</h2>
      <form action="process_code.php" method="post">
        <input type="text" name="code" placeholder="Код тарифа" required>
        <button type="submit">Подтвердить</button>
      </form>
    </div>

    <!-- Отображение информации о выбранном тарифе -->
    <div class="tariff-info">
      <h2>Выбранный тариф</h2>
      <?php

      session_start();
      if (!isset($_SESSION["user_id"])) {
        header("Location: profile.php");
        exit;
      }
      if (isset($_SESSION["tariff_id"])) {
        $tariff_id = $_SESSION["tariff_id"];

        $conn = new mysqli("localhost", "root", "mysql", "tele3_bd");

        if ($conn->connect_error) {
          die("Ошибка подключения: " . $conn->connect_error);
        }


        $query = "SELECT * FROM tariffs WHERE id = $tariff_id";
        $result = $conn->query($query);

        if ($result->num_rows == 1) {
          $row = $result->fetch_assoc();
          echo "<h3>{$row["name"]}</h3>";
          echo "<p>{$row["description"]}</p>";
          echo "<p>Цена: {$row["price"]}</p>";
        }

        $conn->close();
      }
      ?>
    </div>

    <form action="logout.php" method="post">
      <button type="submit" name="logout">Выйти</button>
    </form>
  </div>
  <footer class="footer">
    <div class="form">
      <div class="footer__text">
        <div class="footer__text1">
          <p style="margin-top: 15px">&copy; 2023 Сотовый оператор</p>
        </div>
      </div>
      <div class="footer__text">
        <div class="footer__text1">
          <b>Контакты</b>
          <p><a href="tel:88000808080">+7 (800) 080 80-80</a></p>
          <p><a href="">qqqq@gmail.com</a></p>
        </div>
      </div>
      <div class="footer__text">
        <div class="footer__text1">
          <b>Адрес</b>
          <p>ул. Тихоокеанская, 132, Хабаровск,</p>
          <p>Хабаровский край, 680042</p>
        </div>
      </div>
      <div class="footer__text">
        <div class="footer__text1">
          <b>Реквизиты</b>
          <p>ООО «Теле 3»</p>
          <p>ИНН: 7841054159</p>
          <p>КПП: 784101001</p>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>