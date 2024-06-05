<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Доска объявлений</title>
</head>
<body>
<h2>Добавить объявление</h2>
<form action="submit.php" method="post">
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br>

    <label for="title">Заголовок объявления:</label><br>
    <input type="text" id="title" name="title" required><br>

    <label for="text">Текст объявления:</label><br>
    <textarea id="text" name="text" rows="4" required></textarea><br>

    <label for="category">Категория:</label><br>
    <input type="text" id="category" name="category" required><br><br>

    <input type="submit" value="Добавить">
</form>
</body>
</html>

<?php
