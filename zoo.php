<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            justify-content: center;
        }

        h2{
            justify-content: center;
            text-align: center;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 20px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
            border-color: none;
            border-radius: 20px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: gray;
            color: white;
        }
    </style>
</head>
<body>
<?php
$host = 'localhost'; 
$db_user = '2631595336';
$db_password = 'vfHP4&V4+IvJQ';
$db_name = 'mareninova_anastasiya';

// $mysqli = new mysqli($host, $db_user, $db_password, $db_name);
// if ($mysqli->connect_error) {
//     die('Ошибка подключения (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
// }
// echo 'Соединение установлено... ' . $mysqli->host_info;
// $mysqli->close();
?> 

<h2>Форма регистрации</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="login">Логин:</label>
    <input type="text" name="login" required>
    <br>
    <label for="password">Пароль:</label>
    <input type="password" name="password" required>
    <br>
    <label for="phone_number">Номер телефона:</label>
    <input type="text" name="phone_number" required>
    <br>
    <input type="submit" value="Зарегистрироваться">
    <?php echo $registrationMessage; ?>
</form>


<!-- 
<?php if (!empty($users)) : ?>
    <h2>Список зарегистрированных пользователей</h2>
    <table>
        <tr>
            <th>ФИО</th>
            <th>Номер телефона</th>
            <th>Email</th>
        </tr>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?php echo $user[0]; ?></td>
                <td><?php echo $user[1]; ?></td>
                <td><?php echo $user[2]; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?> -->

</body>
</html>
