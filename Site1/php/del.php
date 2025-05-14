<?php
    require_once 'func.php';
    session_start();

    $id = (int)($_GET['id']);
    $sql = "DELETE FROM orders WHERE id_orders = ?";
    $query = $pdo->prepare($sql);
    $access = $query->execute([$id]);

    if ($access) {
        header('Location: Кабинет.php');
        exit;
    }
?>