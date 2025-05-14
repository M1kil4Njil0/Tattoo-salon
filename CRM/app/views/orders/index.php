<?php

$title = 'Orders_cons list';
ob_start(); 
?>

<h1>Лист Консультаций</h1>
<a href="/<?= APP_BASE_PATH ?>/orders/create" class="btn btn-success">Записать пользователя</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Имя пользователя</th>
            <th scope="col">Дата</th>
            <th scope="col">Время</th>
            <th scope="col">Действия</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($orders as $order): ?>
        <tr>
            <td><?php echo $order['id_orders']; ?></td>
            <td><?php echo $order['username']; ?></td>
            <td><?php echo $order['date']; ?></td>
            <td><?php echo $order['time']; ?></td>
        
            <td>
                <a href="/<?= APP_BASE_PATH ?>/orders/edit/<?php echo $order['id_orders']; ?>" class="btn btn-primary">Редактировать</a>
                <a href="/<?= APP_BASE_PATH ?>/orders/delete/<?php echo $order['id_orders']; ?>" class="btn btn-danger">Закрыть</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<?php $content = ob_get_clean(); 

include 'app/views/layout.php';
?>