<?php

$title = 'Edit order';
ob_start(); 
?>
<h1 class="mb-4">Редактировать сеанса</h1>

<form method="POST" action="/<?= APP_BASE_PATH ?>/orders/update/<?php echo $order['id_orders']; ?>">
  <input type="hidden" name="id_orders" value="<?= $order['id_orders'] ?>">
  <div class="mb-3">
    <label for="date" class="form-label">Дата</label>
    <input type="date" class="form-control" id="date" name="date" value="<?php echo $order['date']; ?>" required>
  </div>
  <div class="mb-3">
    <label for="time" class="form-label">Время</label>
    <input type="time" class="form-control" id="time" name="time" value="<?php echo $order['time']; ?>" required>
  </div>
  <button type="submit" class="btn btn-primary">Сохранить изминения</button>
</form>




<?php $content = ob_get_clean(); 

include 'app/views/layout.php';
?>