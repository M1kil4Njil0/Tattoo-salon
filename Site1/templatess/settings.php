<?php 

    session_start();

    require_once '../php/func.php';

    $id = (int)([$_SESSION['user']['id']]);
    $sql = "SELECT * FROM users WHERE id = ?";
    $query = $pdo->prepare($sql);
    $query->execute([$_SESSION['user']['id']]);
    $user = $query->fetch();
    
?>
<link rel="stylesheet" href="../css/style.css" media="screen">

<div class="setting_popup-bg">
  <div class="setting_popup">
    <div class="container">
      <img class="close-popup" src="../images/close.png" alt="icon">
      <input type="checkbox" id="check">
      <div class="login form">
        <header>Настройка профиля</header>
        <form action="" method="POST" enctype="multipart/form-data">
          <input type="text" name="username" value="<?=$user['username'] ?>">
          <input type="email" name="email" placeholder="Почта" value="<?=$user['email'] ?>">
          <input type="file" name="img_user" placeholder="Изменить изображение" value="<?=$user['img_user'] ?>">
          <input type="password" name="password" placeholder="Пароль">
          <input type="submit" name="save" class="button" value="Сохранить">
        </form>
      </div>
    </div>
  </div>
</div>

<script src="../js/jquery-3.4.1.min.js"></script>
<script class="u-script" type="text/javascript" src="../js/nicepage.js" defer=""></script>
<script src="../js/setting.js"></script>