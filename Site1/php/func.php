<?php

require_once 'config.php';

function registerUser(): bool {
    global $pdo;

    $created_at = date('Y-m-d H:i:s');
    $login = !empty($_POST['username']) ? trim($_POST['username']) : '';
    $pass = !empty($_POST['password']) ? trim($_POST['password']) : '';
    $confirm_password = trim($_POST['confirm_password']);

    if (empty($login) || empty($pass) || empty($confirm_password)) {
        $_SESSION['errors'] = 'Поля логин/пароль обязательны';
        return false;
    }

    $res = $pdo->prepare('SELECT COUNT(*) FROM users WHERE username = ?');
    $res->execute([$login]);
    if ($res->fetchColumn()) {
        $_SESSION['errors'] = 'Данный логин уже используется';
        return false;
    }

    if($pass !== $confirm_password){
        $_SESSION['errors'] = 'Пароли не совпадают';
        return false;
    }
    
    $pass = password_hash($pass, PASSWORD_DEFAULT);
    $res = $pdo->prepare('INSERT INTO users(username, password, created_at) VALUES(?, ?, ?)');
    $res->execute([$login, $pass, $created_at]);

    if ($res) {
        $_SESSION['success'] = 'Успешная регистрация!';
        return true;
    } else {
        $_SESSION['errors'] = 'Ошибка регистрации!';
        return false;
    }
}

function loginUser(): bool {
    global $pdo;

    $login = !empty($_POST['username']) ? trim($_POST['username']) : '';
    $pass = !empty($_POST['password']) ? trim($_POST['password']) : '';

    if (empty($login) || empty($pass)) {
        $_SESSION['errors'] = 'Поля логин/пароль обязательны';
        return false;
    }

    $res = $pdo->prepare('SELECT * FROM users WHERE username = ?');
    $res->execute([$login]);
    
    if (!$user = $res->fetch()) {
        $_SESSION['errors'] = 'Неправильный логин или пароль';
        return false;
    }

    if (!password_verify($pass, $user['password'])) {
        $_SESSION['errors'] = 'Неправильный логин или пароль';
        return false;
    } else {
        $_SESSION['success'] = 'Успешная авторизация!';
        $_SESSION['user']['username'] = $user['username'];
        $_SESSION['user']['id'] = $user['id'];
        return true;
    }
}

function saveSetting(): bool{
    global $pdo;
    $login = $_POST['username'];
    $email = $_POST['email'];
    $params = [
        ':username' => $login,
        ':email' => $email,
        ':id' => $_SESSION['user']['id']
    ];
    
    if ($_POST['password'] !== '') {
        $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $params[':password'] = $pass;
    }

    if($_FILES['img_user']['name'] != ''){
        $imgPath = '../images/profile/'.$_FILES['img_user']['name'];
        move_uploaded_file($_FILES['img_user']['tmp_name'], $imgPath);
        $params[':img_user'] = $imgPath;
    }


    $sql = "UPDATE `users` SET username=:username, " . (isset($pass) ? 'password=:password, ' : '') . "email=:email " . (isset($imgPath) ? ', img_user=:img_user ' : '') . "WHERE id=:id";
    $query = $pdo->prepare($sql);
    return $query->execute($params);

}

function addOrder(): bool{
    global $pdo;

    $res = $pdo->prepare('SELECT COUNT(*) FROM orders WHERE date = ? AND time = ?');

    $res->execute([$_POST['date'], $_POST['time']]);
    if (!$res->fetchColumn()) {
        $query = $pdo -> prepare('INSERT INTO orders SET id_users = ?, date = ?, time = ?');
        $query->execute([
            $_SESSION['user']['id'],
            $_POST['date'],
            $_POST['time'],
        ]);
        return true;
    }
    else {
        $_SESSION['order_error'] = "На данное время нельзя записаться";
        return false;
    }
}

function deleteOrder(){
    global $pdo;
    
    $sql = "DELETE FROM orders WHERE id_users = ?";
    $query = $pdo->prepare($sql);
    if($query->execute([$_SESSION['user']['id']])) return true;
    return false;
}

function getOrders() {
    global $pdo;

    $sql = 'SELECT id_orders, orders.id_users, username, date, time FROM users INNER JOIN orders on users.id = orders.id_users WHERE id = ? ORDER BY time DESC';
    $res = $pdo->prepare($sql);
    $res->execute([$_SESSION['user']['id']]);
    return $res->fetchAll();
}

function getUsers() {
    global $pdo;

    $sql = 'SELECT * FROM users WHERE id = ?';
    $res = $pdo->prepare($sql);
    $res->execute([$_SESSION['user']['id']]);
    return $res->fetchAll();
}

function getReviews(){
    global $pdo;

    $sql = 'SELECT * FROM reviews';
    $res = $pdo->query($sql);
    return $res->fetchAll();
}