<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eduardo</title>
</head>
<body>
<div id="form">
    <!-- ====== Форма добавления новых объявлений ======-->
    <form action="save.php" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" required>

        <label for="category">Category</label>
        <select name="category" required>
            <option value="cars">cars</option>
            <option value="dogs">dogs</option>
            <option value="games">games</option>
            <option value="phones">phones</option>
            <option value="others">others</option>
        </select>
        <label for="title">Title</label>
        <input type="text" name="title" required>

        <label for="description">Description</label>
        <textarea rows="10" name="description"></textarea>

        <input type="submit" value="Save">
    </form>
</div>

<!-- ====== Таблица объявлений ======-->
<div id="table">
    <table>
        <thead>
        <th>Category</th>
        <th>Title</th>
        <th>Email</th>
        <th>Description</th>
        </thead>
        <tbody>
        <?php
        $db_host = "db";
        $db_user = "root";
        $db_password = "helloworld";
        $db_name = "web";

        // Подключаемся к БД
        $connection = new mysqli($db_host, $db_user, $db_password, $db_name);

        // Проверка соединения
        if ($connection->connect_error) {
            die("Error: " . $connection->connect_error);
        }

        // Отображение объявлений
        $result = $connection->query("SELECT * FROM web.ad");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['category'] . "</td>";
            echo "<td>" . $row['title'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['description'] . "</td>";
            echo "</tr>";
        }

        $connection->close();
        ?>
        </tbody>
    </table>
</div>
</body>
</html>