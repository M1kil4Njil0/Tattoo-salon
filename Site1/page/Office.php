<?php
  session_start();
  
  require_once('../php/func.php');

  if(!isset($_SESSION['user'])) {
    header('Location: index.php');
    exit;
  }

  if(isset($_POST['save'])){
    if(saveSetting()){
      header("Location: Office.php");
      die;
    }
  }

  if(isset($_POST['delete'])) {
    if(deleteOrder()){
      header('Location: Office.php');
      die;
    }
  }

  $orders = getOrders();
  $users = getUsers();
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="ru"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​&nbsp;Welcome Message">
    <meta name="description" content="">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="../css/nicepage.css" media="screen">
<link rel="stylesheet" href="../css/Office.css" media="screen">
    <script class="u-script" type="text/javascript" src="../js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 6.9.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/f17715ae-4b19-37d7-af5e-aa8bac2a9376.jpg",
		"sameAs": []
}</script>
    <meta name="theme-color" content="#80b4ff">
    <meta property="og:title" content="Страница 1">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-path-to-root="./" data-include-products="false" class="u-body u-overlap u-overlap-contrast u-overlap-transparent u-xl-mode" data-lang="ru"><header class="u-align-center-sm u-align-center-xs u-clearfix u-header u-sticky u-sticky-0d12" id="sec-bdaf"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="#" class="u-image u-logo u-image-1" data-image-width="1925" data-image-height="2160">
          <img src="../images/f17715ae-4b19-37d7-af5e-aa8bac2a9376.jpg" class="u-logo-image u-logo-image-1">
        </a>
        <div class="u-hidden-xs u-social-icons u-spacing-20 u-social-icons-1">
          <a class="u-social-url" target="_blank" data-type="VK" title="VK" href="https://vk.com/lilpeep1996185"><span class="u-icon u-social-icon u-social-vk u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-27f3"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-27f3"><circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M88.2,80.7l-9.8,0.1c0,0-2.1,0.4-4.9-1.5c-3.7-2.5-7.2-9.1-9.9-8.2C60.9,72,61,77.9,61,77.9s0,1.3-0.6,1.9
      c-0.7,0.7-2,0.9-2,0.9H54c0,0-9.7,0.6-18.3-8.3c-9.3-9.7-17.6-29-17.6-29s-0.5-1.3,0-1.9c0.6-0.7,2.2-0.7,2.2-0.7l10.5-0.1
      c0,0,1,0.2,1.7,0.7c0.6,0.4,0.9,1.2,0.9,1.2s1.7,4.3,4,8.2c4.4,7.6,6.4,9.3,7.9,8.4c2.2-1.2,1.5-10.7,1.5-10.7s0-3.5-1.1-5
      c-0.9-1.2-2.5-1.5-3.3-1.6c-0.6-0.1,0.4-1.5,1.6-2.1c1.9-0.9,5.2-1,9.2-0.9c3.1,0,4,0.2,5.2,0.5c3.6,0.9,2.4,4.3,2.4,12.4
      c0,2.6-0.5,6.3,1.4,7.5c0.8,0.5,2.8,0.1,7.7-8.3c2.3-4,4.1-8.6,4.1-8.6s0.4-0.8,1-1.2s1.4-0.3,1.4-0.3l11.1-0.1c0,0,3.3-0.4,3.9,1.1
      c0.6,1.6-1.2,5.3-5.8,11.3c-7.4,9.9-8.3,9-2.1,14.7c5.9,5.5,7.1,8.1,7.3,8.5C93.4,80.4,88.2,80.7,88.2,80.7z"></path></svg></span>
          </a>
          <a class="u-social-url" target="_blank" data-type="Telegram" title="Telegram" href="https://t.me/tatoo250"><span class="u-icon u-social-icon u-social-telegram u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-8fd4"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-8fd4"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M18.4,53.2l64.7-24.9c3-1.1,5.6,0.7,4.7,5.3l0,0l-11,51.8c-0.8,3.7-3,4.6-6.1,2.8L53.9,75.8l-8.1,7.8
	c-0.9,0.9-1.7,1.6-3.4,1.6l1.2-17l31.1-28c1.4-1.2-0.3-1.9-2.1-0.7L34.2,63.7l-16.6-5.2C14,57.4,14,54.9,18.4,53.2L18.4,53.2z"></path></svg></span>
          </a>
        </div>
        <nav class="u-align-left u-menu u-menu-one-level u-offcanvas u-menu-1" data-responsive-from="MD">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
            <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link" href="#">
              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 302 302" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-8a8f"></use></svg>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-8a8f" x="0px" y="0px" viewBox="0 0 302 302" style="enable-background:new 0 0 302 302;" xml:space="preserve" class="u-svg-content"><g><rect y="36" width="302" height="30"></rect><rect y="236" width="302" height="30"></rect><rect y="136" width="302" height="30"></rect>
</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-grey-90 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-grey-90 u-text-hover-custom-color-3"
                href="../index.php" style="padding: 10px 0px;">Главная</a>
            </li>
            <li class="u-nav-item"><a
                class="u-border-2 u-border-active-palette-1-base u-border-grey-90 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-grey-90 u-text-hover-custom-color-3"
                href="Portfolio.php" style="padding: 10px 0px;">Портофлио</a>
            </li>
            <li class="u-nav-item"><a
                class="u-border-2 u-border-active-palette-1-base u-border-grey-90 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-grey-90 u-text-hover-custom-color-3"
                href="Reviews.php" style="padding: 10px 0px;">Отзывы</a>
            </li>
            <li class="u-nav-item"><a
                class="u-border-2 u-border-active-palette-1-base u-border-grey-90 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-grey-90 u-text-hover-custom-color-3"
                href="AboutUs.php" style="padding: 10px 0px;">О нас</a>
            </li>
            <li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-grey-90 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-grey-90 u-text-hover-custom-color-3"href="Contacts.php" style="padding: 10px 0px;">Контакты</a>
            <?php if(isset($_SESSION['user'])) : ?>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-grey-90 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-grey-90 u-text-hover-custom-color-3" href="Office.php" style="padding: 10px 0px;">Личный кабинет</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-grey-90 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-grey-90 u-text-hover-custom-color-3" href="../php/logout.php" style="padding: 10px 0px;">Выйти</a>
<?php else : ?>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-grey-90 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-grey-90 u-text-hover-custom-color-3 open-popup" href="#" style="padding: 10px 0px;">Войти</a>
<?php endif; ?>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-align-center u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Главная.php">Главная</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Портфолио.php">Портофлио</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Отзывы.php">Отзывы</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Контакты.php">Контакты</a>
<?php if(isset($_SESSION['user'])) : ?>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="">Личный кабинет</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../php/logout.php">Выход</a>
<?php else : ?>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link open-popup" href="#">Войти</a>
<?php endif; ?>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-grey-80 u-section-1 flex" id="carousel_8730">
      <div class="u-align-center u-container-style u-expanded-width u-group u-shape-rectangle u-group-1">
        <div class="u-container-layout u-container-layout-1">
          <div class="custom-expanded u-custom-color-1 u-shape u-shape-rectangle u-shape-1"></div>
          <div class="custom-expanded u-custom-color-1 u-shape u-shape-rectangle u-shape-2"></div>
          <a class="u-text u-text-default u-text-1 open-setting" href="#">Настроить профиль </a>
          <?php foreach($users as $user): ?>
          <h2 class="u-text u-text-2"><img class="circle u-image u-image-contain u-image-default u-preserve-proportions u-image-1" src="<?= $user['img_user'] ?>" alt="" data-image-width="50" data-image-height="50"><?=$user['username']?></h2>
          <?php endforeach; ?>
          <div class="orders">
            <?php foreach($orders as $order): ?>
            <p class="orders_text" style="margin-top: 20px; margin-bottom: 0px">Номер сеанса: <?=$order['id_orders']?></p>
            <p class="orders_text" style="margin: 0;">Имя: <?=$order['username']?></p>
            <p class="orders_text" style="margin: 0;">Время: <?=$order['date']?> <?=$order['time'] ?></p>
            <form action="" method="POST">
              <input type="submit" name="delete" value="Отменить запись" class="orders_text button">
            </form>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>
    
    
    
    <footer class="u-align-center-md u-align-center-sm u-align-center-xs u-clearfix u-footer u-grey-80" id="sec-1fad"><div class="u-clearfix u-sheet u-sheet-1">
      <div class="menu">
        <a href="../index.php" class="u-image u-logo u-image-1" style="margin: 0 50px 0 0;" data-image-width="1925" data-image-height="2160">
          <img src="../images/f17715ae-4b19-37d7-af5e-aa8bac2a9376.jpg" class="u-logo-image u-logo-image-1">
        </a>
        <ul class="ul_menu">
          <li class="li_menu"><a href="../index.php" class="u-active-none u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-btn u-btn-rectangle u-button-style u-hover-none u-none u-btn-1">Главная </a></li>
          <li class="li_menu"><a href="../page/Portfolio.php" class="u-active-none u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-btn u-btn-rectangle u-button-style u-hover-none u-none u-btn-2">Портфолио </a></li>
          <li class="li_menu"><a href="../page/Contacts.php" class="u-active-none u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-btn u-btn-rectangle u-button-style u-hover-none u-none u-btn-3">Контакты </a></li>
        </ul>
        <ul>
          <li class="li_menu"><a href="../page/Reviews.php" class="u-active-none u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-btn u-btn-rectangle u-button-style u-hover-none u-none u-btn-3">Отзывы </a></li>
          <li class="li_menu"><a href="../page/AboutUs.php" class="u-active-none u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-btn u-btn-rectangle u-button-style u-hover-none u-none u-btn-3">О-нас </a></li>
          <li class="li_menu"><a href="../page/Certificates.php" class="u-active-none u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-btn u-btn-rectangle u-button-style u-hover-none u-none u-btn-3">Сертификаты </a></li>
        </ul>
      </div>
      </div>
    </footer>

      <?php
        include('../templatess/settings.php');
      ?>
  
</body></html>