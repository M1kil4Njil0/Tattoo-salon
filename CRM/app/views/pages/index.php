<?php

$title = 'Pages';
ob_start(); 
?>

  <h1 class="mb-4">Страницы</h1>
  <a href="/<?= APP_BASE_PATH ?>/pages/create" class="btn btn-success">Создать страницу</a>
    <table class="table">
    <thead>
        <tr>
        <th>ID</th>
        <th>Название</th>
        <th>Путь</th>
        <th>Роли</th>
        <th>Действия</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($pages as $page): ?>
        <tr>
        <td><?= $page['id'] ?></td>
        <td><?= $page['title'] ?></td>
        <td><?= $page['slug'] ?></td>
        <td><?= $page['role'] ?></td>
        <td>
            <a href="/<?= APP_BASE_PATH ?>/pages/edit/<?= $page['id'] ?>" class="btn btn-sm btn-outline-primary">Редактировать</a>
            <form method="POST" action="/<?= APP_BASE_PATH ?>/pages/delete/<?= $page['id'] ?>" class="d-inline-block">
            <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Вы уверены?')">Удалить</button>
            </form>
        </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    </table>



<?php $content = ob_get_clean(); 

include 'app/views/layout.php';
?>