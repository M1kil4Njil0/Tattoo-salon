<?php

$title = 'Create user';
ob_start(); 
?>
<h1>Создать пользователя</h1>

<form method="POST" action="/<?= APP_BASE_PATH ?>/users/store">
  <div class="mb-3">
    <label for="username" class="form-label">Имя пользователя</label>
    <input type="text" class="form-control" id="username" name="username" required>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Почта</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Пароль</label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>
  <div class="mb-3">
    <label for="confirm_password" class="form-label">Подтвердить пароль</label>
    <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
  </div>
  <button type="submit" class="btn btn-primary">Создать пользователя</button>
</form>



<?php $content = ob_get_clean(); 

include 'app/views/layout.php';
?>