<?php
  session_start();
  
  require_once('../php/func.php');

  if(isset($_GET['action'])) {
    if(!isset($_SESSION['user'])) {
      header('Location: ../php/login.php');
      exit;
    }
  }

  if (isset($_POST['register'])){
    echo json_encode(registerUser(), JSON_UNESCAPED_UNICODE);
    die;
    // die;
  }

if (isset($_POST['auth'])){
    if (loginUser()){
        header("Location: AboutUs.php");
        die;
    }
    // login();
    
}
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="ru"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="О нас">
    <meta name="description" content="">
    <title>О нас</title>
    <link rel="stylesheet" href="../css/nicepage.css" media="screen">
<link rel="stylesheet" href="../css/AboutUs.css" media="screen">
    <script class="u-script" type="text/javascript" src=" ../js/jquery.js" defer=""></script>
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
    <meta property="og:title" content="О нас">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="ru"><header class="u-align-center-sm u-align-center-xs u-clearfix u-header bg-color" id="sec-bdaf"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="../index.php" class="u-image u-logo u-image-1" data-image-width="1925" data-image-height="2160">
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
            <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-grey-90 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-grey-90 u-text-hover-custom-color-3" href="../index.php" style="padding: 10px 0px;">Главная</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-grey-90 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-grey-90 u-text-hover-custom-color-3" href="Portfolio.php" style="padding: 10px 0px;">Портофлио</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-grey-90 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-grey-90 u-text-hover-custom-color-3" href="Reviews.php" style="padding: 10px 0px; color: ##1a1a1a;">Отзывы</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-grey-90 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-grey-90 u-text-hover-custom-color-3" href="AboutUs.php" style="padding: 10px 0px;">О нас</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-grey-90 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-grey-90 u-text-hover-custom-color-3" href="Contacts.php" style="padding: 10px 0px;">Контакты</a>
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
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../index.php">Главная</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Portfolio.php">Портофлио</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Reviews.php">Отзывы</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="AboutUs.php">О нас</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contacts.php">Контакты</a>
<?php if(isset($_SESSION['user'])) : ?>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Office.php">Личный кабинет</a>
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
    <section class="u-black u-clearfix u-section-1 flex" id="carousel_f898">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="data-layout-selected u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-size-30 u-size-60-md">
                <div class="u-layout-col">
                  <div class="u-align-left u-container-align-center-sm u-container-align-center-xs u-container-style u-layout-cell u-right-cell u-size-60 u-layout-cell-1">
                    <div class="u-container-layout u-container-layout-1">
                      <h2 class="u-text u-text-1">О нас</h2>
                      <p class="u-align-center-sm u-align-center-xs u-text u-text-2">Я предлагаю широкий спектр услуг в области татуировки. Независимо от того, нужна ли вам небольшая идея или полное покрытие тела, я готова воплотить ваши мечты в реальность. Я использую только высококачественные материалы и следую строгим стандартам гигиены, чтобы обеспечить безопасность и комфорт своих клиентов.</p>
                      <p class="u-align-center-sm u-align-center-xs u-text u-text-2">Я понимаю, что каждый клиент уникален. Поэтому я стараюсь работать с каждым из них индивидуально, чтобы воплотить их уникальные идеи в татуировке. Я тщательно слушаю пожелания и предлагю консультации, чтобы помочь своим клиентам принять правильное решение.</p>
                      <p class="u-align-center-sm u-align-center-xs u-text u-text-2">Я надеюсь, что моя информация о нас поможет вам узнать больше обо мне и услугах. Я с нетерпением жду возможности работать с вами и создать незабываемую татуировку!</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-size-30 u-size-60-md">
                <div class="u-layout-col">
                  <div class="u-size-30">
                    <div class="u-layout-row">
                      <div class="u-container-align-center u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                        <div class="u-container-layout u-valign-middle u-container-layout-2">
                          <img class="u-image u-image-round u-radius u-image-1" data-image-width="1280" data-image-height="854" data-animation-name="customAnimationIn" data-animation-duration="2000" src="../images/image1.png">
                        </div>
                      </div>
                      <div class="u-container-align-center u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-3">
                        <div class="u-container-layout u-valign-middle u-container-layout-3">
                          <img class="u-image u-image-round u-radius u-image-2" data-image-width="1280" data-image-height="854" data-animation-name="customAnimationIn" data-animation-duration="2000" src="../images/image2.png">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="u-size-30">
                    <div class="u-layout-row">
                      <div class="u-container-align-center u-container-style u-layout-cell u-size-30 u-layout-cell-4">
                        <div class="u-container-layout u-container-layout-4">
                          <img class="u-image u-image-round u-radius u-image-3" data-image-width="1439" data-image-height="2160" data-animation-name="customAnimationIn" data-animation-duration="2000" src="../images/G5oy3PRNKjk.jpg">
                        </div>
                      </div>
                      <div class="u-container-align-center u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-5">
                        <div class="u-container-layout u-valign-middle u-container-layout-5">
                          <img class="u-image u-image-round u-radius u-image-4" data-image-width="1620" data-image-height="2160" data-animation-name="customAnimationIn" data-animation-duration="2000" src="../images/EDL_53cUurc.jpg">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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
        include('../templatess/loginAgain.php');
      ?>
  
</body></html>