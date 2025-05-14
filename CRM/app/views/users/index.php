<?php

$title = 'User list';
ob_start(); 
?>

<h1>Лист пользователей</h1>
<a href="/<?= APP_BASE_PATH ?>/users/create" class="btn btn-success">Создать пользователя</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Имя пользователя</th>
            <th scope="col">Почта</th>
            <th scope="col">Админ</th>
            <th scope="col">Роль</th>
            <th scope="col">Активен</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?php echo $user['id']; ?></td>
            <td><?php echo $user['username']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td><?php echo $user['is_admin'] ? 'Yes' : 'No'; ?></td>
            <td><?php echo $user['role']; ?></td>
            <td><?php echo $user['is_active'] ? 'Yes' : 'No'; ?></td>
        
            <td>
                <a href="/<?= APP_BASE_PATH ?>/users/edit/<?php echo $user['id']; ?>" class="btn btn-primary">Редактировать</a>
                <a href="/<?= APP_BASE_PATH ?>/users/delete/<?php echo $user['id']; ?>" class="btn btn-danger">Удалить</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<?php $content = ob_get_clean(); 

include 'app/views/layout.php';
?>