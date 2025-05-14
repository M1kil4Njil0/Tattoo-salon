<?php

$title = 'Лист консультаций';
ob_start(); 
?>

<h1>Лист Консультаций</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Имя пользователя</th>
            <th scope="col">Почта</th>
            <th scope="col">Адрес</th>
            <th scope="col">Сообщение</th>
            <th scope="col">Действия</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($cons as $con): ?>
        <tr>
            <td><?php echo $con['id_orderscons']; ?></td>
            <td><?php echo $con['name']; ?></td>
            <td><?php echo $con['email']; ?></td>
            <td><?php echo $con['address']; ?></td>
            <td><?php echo $con['message']; ?></td>
        
            <td>
                <a href="/<?= APP_BASE_PATH ?>/orders_cons/delete/<?= $con['id_orderscons'] ?>" class="btn btn-danger">Закрыть</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<?php $content = ob_get_clean(); 

include 'app/views/layout.php';
?>