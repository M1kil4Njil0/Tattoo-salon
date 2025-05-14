<link rel="stylesheet" href="../css/style.css" media="screen">

<div class="popup-bg">
  <div class="popup">
    <div class="container">
      <img class="close-popup" src="../images/close.png" alt="icon">
      <input type="checkbox" id="check">
      <div class="login form">
        <header>Логин</header>
        <form action="" method="POST">
          <input type="text" name="username" placeholder="Логин">
          <input type="password" name="password" placeholder="Пароль">
          <input type="submit" name="auth" class="button" value="Войти">
        </form>
        <div class="signup">
          <span class="signup">Нет аккаунта?
            <label for="check">Зарегистрироваться</label>
          </span>
        </div>
      </div>
      <div class="registration form">
        <header>Регистрация</header>
        <form action="" method="POST" id="register_form">
          <input type="hidden" name="register" value="">
          <input type="text" name="username" placeholder="Введите логин">
          <input type="password" name="password" placeholder="Введите пароль">
          <input type="password" name="confirm_password" placeholder="Подтвердите пароль">
          <input type="submit" name="register" class="button" value="Зарегистрироваться">
        </form>
        <div class="signup">
          <span class="signup">Имеется аккаунт?
            <label for="check">Авторизироваться</label>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script> -->
<script src="../js/jquery-3.4.1.min.js"></script>
<script class="u-script" type="text/javascript" src="../js/nicepage.js" defer=""></script>
<script src="../js/login.js"></script>
<script src="../js/loginForm.js"></script>