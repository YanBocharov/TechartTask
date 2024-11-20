<?php

// Параметры подключения
$servername = "localhost:8889";
$username = "root"; 
$password = "123456azz"; 
$dbname = "TechartDB";

// Создаем соединение
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Проверяем соединение
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";
mysqli_close($conn);

?>