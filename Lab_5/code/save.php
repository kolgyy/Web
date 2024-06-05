<?php
$db_host = "db";
$db_user = "root";
$db_password = "helloworld";
$db_name = "web";

// Подключаемся к БД
$mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);
if ($mysqli->connect_error) {
    die("Error: " . $mysqli->connect_error);
}

// Получаем информацию
$email = $_POST['email'];
$category = $_POST['category'];
$title = $_POST['title'];
$description = $_POST['description'];

// Запись данных
$stmt = $mysqli->prepare("INSERT INTO web.ad (email, category, title, description) VALUES (?, ?, ?, ?)");

$stmt->bind_param("ssss", $email, $category, $title, $description);
$stmt->execute();

$stmt->close();
$mysqli->close();

header("Location: index.php");
exit;