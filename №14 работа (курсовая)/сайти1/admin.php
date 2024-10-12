<!DOCTYPE html>
<html>

<head>
	<title>Административная страница</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f3f3f3;
			margin: 0;
			padding: 20px;
		}

		h1 {
			background-color: #333;
			color: #fff;
			padding: 10px;
			text-align: center;
		}

		h2 {
			margin-top: 20px;
		}

		form {
			background-color: #fff;
			padding: 20px;
			margin: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
		}

		input[type="text"],
		textarea,
		select {
			width: 99%;
			padding: 10px;
			margin: 5px 0;
			border: 1px solid #ccc;
			border-radius: 5px;
		}

		input[type="submit"] {
			background-color: #333;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}

		select {
			padding: 10px;
		}
	</style>
</head>

<body>
	<h1>Административная страница</h1>

	<!-- Форма для добавления тарифа -->
	<h2>Добавить тариф</h2>
	<form action="add_tariff.php" method="post">
		Название: <input type="text" name="name" required><br>
		Описание: <textarea name="description" rows="4" cols="50" required></textarea><br>
		Цена: <input type="text" name="price" required><br>
		<input type="submit" value="Добавить">
	</form>

	<!-- Форма для удаления тарифа -->
	<h2>Удалить тариф</h2>
	<form action="delete_tariff.php" method="post">
		Название:
		<select name="tariff_name">
			<?php
			require_once("db_connection.php");

			// Запрос для получения всех имен тарифов
			$tariff_query = "SELECT name FROM tariffs";
			$result = $conn->query($tariff_query);

			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					echo "<option value='" . $row["name"] . "'>" . $row["name"] . "</option>";
				}
			}

			$conn->close();
			?>
		</select>
		<input type="submit" value="Удалить">
	</form>

</body>

</html>