<?php 

  session_start();

    
?>
<link rel="stylesheet" href="css/style.css" media="screen">

<div class="order_popup-bg">
  <div class="order_popup">
    <div class="container">
      <img class="close-popup" src="images/close.png" alt="icon">
      <input type="checkbox" id="check">
      <div class="login form">
        <header>Запись на сеанс</header>
        <form action="" method="POST">
          <input type="date" name="date">
          <input type="time" name="time">
          <input type="submit" name="subscribe" class="button" value="Записаться">
        </form>
      </div>
    </div>
  </div>
</div>

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/order.js"></script>