<?php
$servername = "localhost";
$username = "root";
$password = "Power20032005.";
$dbname = "mysql";

// Создаем соединение с базой данных
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверяем соединение
if ($conn->connect_error) {
    die("Ошибка соединения: " . $conn->connect_error);
}

// Выполняем запрос к базе данных
$sql = "SELECT * FROM ваша_таблица";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Выводим данные из таблицы
    while($row = $result->fetch_assoc()) {
        echo "Имя: " . $row["имя"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "0 результатов";
}

// Закрываем соединение
$conn->close();
?>


