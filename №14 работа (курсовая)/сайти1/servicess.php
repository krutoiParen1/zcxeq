<!DOCTYPE html>
<html>

<head>
  <title>Тарифы "Теле 3"</title>
  <link rel="shortcut icon" href="./img/logo1.png" type="image/x-icon" />
  <link rel="stylesheet" href="./css/styles.css">
  <link rel="stylesheet" type="text/css" href="./css/servicess.css">

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

  <h1>Тарифы "Теле 3"</h1>
  <!-- Модальное окно для заполнения данных -->
  <div id="purchaseModal" class="modal">
    <div class="modal-content">
      <span class="close" id="closeModal">&times;</span>
      <h2>Заполните данные</h2>
      <form id="purchaseForm" action="process_purchase.php" method="post">
        <input type="text" name="first_name" placeholder="Имя" required>
        <input type="text" name="last_name" placeholder="Фамилия" required>
        <input type="number" name="phone_number" placeholder="Номер телефона" required>
        <input type="email" name="email" placeholder="Адрес электронной почты" required>
        <input type="hidden" name="tariff_id" id="selectedTariffId">
        <button type="submit">Подтвердить</button>
      </form>
      <div id="accessKeyInfo" style="display: none;">
        <h3>Ваш ключ доступа:</h3>
        <p id="accessKey"></p>
      </div>
    </div>
  </div>



  <div class="tariffs">
    <?php
    require_once("db_connection.php");

    // Запрос для получения информации о тарифах
    $tariff_query = "SELECT id, name, description, price FROM tariffs";
    $result = $conn->query($tariff_query);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo '<div class="tariff">';
        echo '<h2>' . $row["name"] . '</h2>';
        echo '<p>' . $row["description"] . '</p>';
        echo '<p>Стоимость: ' . $row["price"] . ' рублей в месяц</p>';
        echo '<a class="purchase-button" data-tariff-id="' . $row["id"] . '" href="#">Приобрести</a>';
        echo '</div>';
      }
    }

    $conn->close();
    ?>
  </div>
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

<script src="./javascript/purchase.js"></script>
<script>
  // Обработчик события для отправки формы
  document.getElementById("purchaseForm").addEventListener("submit", function(event) {
    event.preventDefault();
    var tariffId = document.getElementById("selectedTariffId").value;

    var formData = new FormData(this);

    // Отправляем данные формы на сервер для обработки
    fetch("process_purchase.php", {
        method: "POST",
        body: formData,
      })
      .then(response => response.text())
      .then(data => {
        // Отображаем ключ доступа на странице
        alert(data); // или используйте другой способ отображения, например, вставка в DOM элемент
        document.getElementById("purchaseModal").style.display = "none"; // Закрываем модальное окно
      })
      .catch(error => {
        console.error(error);
      });
  });
</script>

</html>