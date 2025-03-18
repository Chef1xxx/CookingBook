<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <?php
    session_start();
    $users = [
        [
            'login' => 'ivan',
            'name' => 'Иван',
            'password' => '12345'
        ],
        [
            'login' => 'petr',
            'name' => 'Петр',
            'password' => '54321'
        ]
    ];

    $login = $_POST['login'] ?? '';
    $password = $_POST['password'] ?? '';

    $authenticated = false;

    foreach ($users as $user) {
        if ($user['login'] === $login && $user['password'] === $password) {
            $_SESSION['user_name'] = $user['name'];
            $authenticated = true;
            break;
        }
    }

    if ($authenticated) {
        header('Location: index.php');
        exit();
    } else {
         echo "Неверный логин или пароль!";
    }
    ?>
    <div class="login">
        <h1></h1>
        <form method="post">
            <label>Логин</label>
            <input type="text" name="login">
            <label>Пароль</label>
            <input type="text" name="password">
            <input type="submit" value="Вход">
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>