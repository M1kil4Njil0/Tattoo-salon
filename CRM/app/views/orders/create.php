<?php

$title = 'Create orders';
ob_start(); 
?>
<h1>Создать запись</h1>

<form method="POST" action="/<?= APP_BASE_PATH ?>/orders/store">
  <div class="mb-3">
    <label for="id_users" class="form-label">Номер пользователя</label>
    <input type="nubmer" class="form-control" id="id_users" name="id_users" required>
  </div>
  <div class="mb-3">
    <label for="date" class="form-label">Дата</label>
    <input type="date" class="form-control" id="date" name="date" required>
  </div>
  <div class="mb-3">
    <label for="time" class="form-label">Время</label>
    <input type="time" class="form-control" id="time" name="time" required>
  </div>
  <button type="submit" class="btn btn-primary">Создать запись</button>
</form>



<?php $content = ob_get_clean(); 

include 'app/views/layout.php';
?>