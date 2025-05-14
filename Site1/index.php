<?php
  session_start();
  
  require_once('php/func.php');

  if(isset($_GET['action'])) {
    if(!isset($_SESSION['user'])) {
      header('Location: php/login.php');
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
        header("Location: index.php");
        die;
    }
    // login();
}

if (isset($_POST['subscribe'])){
  if(addOrder()){
    header("Location: page/Office.php");
    die;
  }
} 
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="ru"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​Dreadlocks &amp;amp; Weave Spa, ​Hair Services, About Salon, ​To book and for exact pricing please call us at 123-456-7868, mission, Why Us?, Visit Us, Contact Us">
    <meta name="description" content="">
    <title>Главная</title>
    
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
<link rel="stylesheet" href="css/index.css" media="screen">
    <meta name="generator" content="Nicepage 6.9.2, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700">
    
    
    
    
    
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/f17715ae-4b19-37d7-af5e-aa8bac2a9376.jpg",
		"sameAs": []
}</script>
    <meta name="theme-color" content="#80b4ff">
    <meta property="og:title" content="Главная">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-path-to-root="./" data-include-products="false" class="u-body u-overlap u-overlap-contrast u-xl-mode" data-lang="ru">
    <header class="u-align-center-sm u-align-center-xs u-clearfix u-header" id="sec-bdaf"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="index.php" class="u-image u-logo u-image-1" data-image-width="1925" data-image-height="2160">
          <img src="images/f17715ae-4b19-37d7-af5e-aa8bac2a9376.jpg" class="u-logo-image u-logo-image-1">
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
            <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-grey-90 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-grey-90 u-text-hover-custom-color-3" href="index.php" style="padding: 10px 0px;">Главная</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-grey-90 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-grey-90 u-text-hover-custom-color-3" href="page/Portfolio.php" style="padding: 10px 0px;">Портофлио</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-grey-90 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-grey-90 u-text-hover-custom-color-3" href="page/Reviews.php" style="padding: 10px 0px;">Отзывы</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-grey-90 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-grey-90 u-text-hover-custom-color-3" href="page/AboutUs.php" style="padding: 10px 0px;">О нас</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-grey-90 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-grey-90 u-text-hover-custom-color-3" href="page/Contacts.php" style="padding: 10px 0px;">Контакты</a>
<?php if(isset($_SESSION['user'])) : ?>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-grey-90 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-grey-90 u-text-hover-custom-color-3 open-order" href="#" style="padding: 10px 0px;">Записаться</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-grey-90 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-grey-90 u-text-hover-custom-color-3" href="page/Office.php" style="padding: 10px 0px;">Личный кабинет</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-grey-90 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-grey-90 u-text-hover-custom-color-3" href="php/logout.php" style="padding: 10px 0px;">Выйти</a>
<?php else : ?>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-grey-90 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-grey-90 u-text-hover-custom-color-3 open-popup" href="#" style="padding: 10px 0px;">Войти</a>
<?php endif; ?>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-align-center u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php">Главная</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="page/Портфолио.php">Портофлио</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="page/Отзывы.php">Отзывы</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="page/О-нас.php">О нас</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="page/Контакты.php">Контакты</a>
<?php if(isset($_SESSION['user'])) : ?>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link open-order" href="#">Записаться</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="php/Кабинет.php">Личный кабинет</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="php/logout.php">Выход</a>
<?php else : ?>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link open-popup" href="#">Войти</a>
<?php endif; ?>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div>
    </header>
    <section class="skrollable skrollable-between u-align-left u-clearfix u-image u-shading u-section-1" id="carousel_c16d" src="" data-image-width="2624" data-image-height="3280">
      <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-custom-font u-heading-font u-text u-text-custom-color-1 u-text-1">В самом центре города</p>
        <h2 class="u-align-center u-custom-font u-font-oswald u-text u-text-white u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1750" data-animation-delay="500">Студия художественной татуировки</h2>
        <a href="Главная.html#carousel_72a4" class="u-border-none u-btn u-button-style u-custom-color-2 u-custom-font u-font-oswald u-hover-custom-color-3 u-text-hover-black u-btn-1">записаться </a>
      </div>
    </section>
    <section class="u-black u-clearfix u-section-2" id="carousel_4695">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-group-1">
          <div class="u-container-layout u-valign-middle u-container-layout-1">
            <h2 class="u-text u-text-default u-text-1">О Тату</h2>
            <p class="u-text u-text-2"> Интересно, что в некоторых культурах татуировки использовались не только как украшение или символ, но и как способ идентификации принадлежности к определенным группам или сообществам. Например, у некоторых племен в древности татуировки могли служить как своего рода паспорт, указывая на принадлежность к определенной территории или группе людей. Это отражает уникальное и многогранное значение татуировок в различных культурах и обществах.</p>
            <a href="#" class="u-active-white u-border-2 u-border-palette-2-base u-btn u-btn-round u-button-style u-hover-white u-palette-2-base u-radius-5 u-btn-1" style="display: none;">Learn More</a>
          </div>
        </div>
        <div class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-layout-grid u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-align-left u-container-style u-list-item u-palette-2-base u-radius-10 u-repeater-item u-shape-round u-list-item-1" data-animation-name="customAnimationIn" data-animation-duration="1750" data-animation-delay="250">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2"><span class="u-align-left u-icon u-icon-circle u-text-white u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 95.333 95.332" style=""><use xlink:href="#svg-a13b"></use></svg><svg class="u-svg-content" viewBox="0 0 95.333 95.332" x="0px" y="0px" id="svg-a13b" style="enable-background:new 0 0 95.333 95.332;"><g><g><path d="M30.512,43.939c-2.348-0.676-4.696-1.019-6.98-1.019c-3.527,0-6.47,0.806-8.752,1.793    c2.2-8.054,7.485-21.951,18.013-23.516c0.975-0.145,1.774-0.85,2.04-1.799l2.301-8.23c0.194-0.696,0.079-1.441-0.318-2.045    s-1.035-1.007-1.75-1.105c-0.777-0.106-1.569-0.16-2.354-0.16c-12.637,0-25.152,13.19-30.433,32.076    c-3.1,11.08-4.009,27.738,3.627,38.223c4.273,5.867,10.507,9,18.529,9.313c0.033,0.001,0.065,0.002,0.098,0.002    c9.898,0,18.675-6.666,21.345-16.209c1.595-5.705,0.874-11.688-2.032-16.851C40.971,49.307,36.236,45.586,30.512,43.939z"></path><path d="M92.471,54.413c-2.875-5.106-7.61-8.827-13.334-10.474c-2.348-0.676-4.696-1.019-6.979-1.019    c-3.527,0-6.471,0.806-8.753,1.793c2.2-8.054,7.485-21.951,18.014-23.516c0.975-0.145,1.773-0.85,2.04-1.799l2.301-8.23    c0.194-0.696,0.079-1.441-0.318-2.045c-0.396-0.604-1.034-1.007-1.75-1.105c-0.776-0.106-1.568-0.16-2.354-0.16    c-12.637,0-25.152,13.19-30.434,32.076c-3.099,11.08-4.008,27.738,3.629,38.225c4.272,5.866,10.507,9,18.528,9.312    c0.033,0.001,0.065,0.002,0.099,0.002c9.897,0,18.675-6.666,21.345-16.209C96.098,65.559,95.376,59.575,92.471,54.413z"></path>
</g>
</g></svg></span>
                <p class="u-align-left u-text u-text-3">Мой опыт работы с тату-мастером был сказочным! Она обладает невероятным талантом и мастерством. Она создала для меня уникальную татуировку, которая является искусством на моей коже. Я получил не только красивую татуировку, но и незабываемый опыт, который я буду помнить на всю жизнь.</p>
                <h5 class="u-align-left u-text u-text-4">Никита</h5>
              </div>
            </div>
            <div class="u-container-align-left u-container-style u-list-item u-palette-2-base u-radius-10 u-repeater-item u-shape-round u-list-item-2" data-animation-name="customAnimationIn" data-animation-duration="1750" data-animation-delay="250">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"><span class="u-align-left u-icon u-icon-circle u-text-white u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 351.128 351.128" style=""><use xlink:href="#svg-c1b6"></use></svg><svg class="u-svg-content" viewBox="0 0 351.128 351.128" x="0px" y="0px" id="svg-c1b6" style="enable-background:new 0 0 351.128 351.128;"><g><path d="M72.326,147.33c4.284-26.928,37.944-55.692,64.26-56.304c1.836,0,3.672-0.612,4.896-1.836   c1.224-0.612,2.448-1.224,3.06-3.06c9.18-17.136,4.284-30.6-11.016-41.616c-17.748-12.852-45.9,0-59.976,11.628   C38.054,85.518,1.946,136.313,3.782,184.662c-6.12,32.437-4.896,67.32,4.284,96.084c6.12,18.36,23.868,27.54,42.228,28.764   c18.36,1.225,56.304,6.732,72.828-4.283c16.524-11.017,17.748-32.437,19.584-50.796c1.836-20.196,7.344-58.141-9.792-74.053   C115.778,165.078,66.818,181.602,72.326,147.33z"></path><path d="M274.286,147.33c4.284-26.928,37.943-55.692,64.26-56.304c1.836,0,3.672-0.612,4.896-1.836   c1.225-0.612,2.448-1.224,3.061-3.06c9.18-17.136,4.284-30.6-11.016-41.616c-17.748-12.852-45.9,0-59.977,11.628   c-35.496,29.376-71.604,80.172-69.768,128.52c-6.12,32.437-4.896,67.32,4.283,96.084c6.12,18.36,23.868,27.54,42.229,28.764   c18.36,1.225,56.304,6.732,72.828-4.283c16.523-11.017,17.748-32.437,19.584-50.796c1.836-20.196,7.344-58.141-9.792-74.053   C317.738,165.078,268.166,181.602,274.286,147.33z"></path>
</g></svg></span>
                <p class="u-align-left u-text u-text-5">Я очень довольна работой тату-мастера! Он внимательно выслушал мои пожелания и создал прекрасный дизайн, полностью соответствующий моим ожиданиям. Процесс татуировки был безболезненным и профессиональным. Результат превзошел все мои ожидания, и я теперь горжусь своей новой татуировкой!</p>
                <h5 class="u-align-left u-text u-text-6">Кристина</h5>
              </div>
            </div>
            <div class="u-container-align-left u-container-style u-list-item u-palette-2-base u-radius-10 u-repeater-item u-shape-round u-list-item-3" data-animation-name="customAnimationIn" data-animation-duration="1750" data-animation-delay="250">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4"><span class="u-align-left u-icon u-icon-circle u-text-white u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 351.128 351.128" style=""><use xlink:href="#svg-c1b6"></use></svg><svg class="u-svg-content" viewBox="0 0 351.128 351.128" x="0px" y="0px" id="svg-c1b6" style="enable-background:new 0 0 351.128 351.128;"><g><path d="M72.326,147.33c4.284-26.928,37.944-55.692,64.26-56.304c1.836,0,3.672-0.612,4.896-1.836   c1.224-0.612,2.448-1.224,3.06-3.06c9.18-17.136,4.284-30.6-11.016-41.616c-17.748-12.852-45.9,0-59.976,11.628   C38.054,85.518,1.946,136.313,3.782,184.662c-6.12,32.437-4.896,67.32,4.284,96.084c6.12,18.36,23.868,27.54,42.228,28.764   c18.36,1.225,56.304,6.732,72.828-4.283c16.524-11.017,17.748-32.437,19.584-50.796c1.836-20.196,7.344-58.141-9.792-74.053   C115.778,165.078,66.818,181.602,72.326,147.33z"></path><path d="M274.286,147.33c4.284-26.928,37.943-55.692,64.26-56.304c1.836,0,3.672-0.612,4.896-1.836   c1.225-0.612,2.448-1.224,3.061-3.06c9.18-17.136,4.284-30.6-11.016-41.616c-17.748-12.852-45.9,0-59.977,11.628   c-35.496,29.376-71.604,80.172-69.768,128.52c-6.12,32.437-4.896,67.32,4.283,96.084c6.12,18.36,23.868,27.54,42.229,28.764   c18.36,1.225,56.304,6.732,72.828-4.283c16.523-11.017,17.748-32.437,19.584-50.796c1.836-20.196,7.344-58.141-9.792-74.053   C317.738,165.078,268.166,181.602,274.286,147.33z"></path>
</g></svg></span>
                <p class="u-align-left u-text u-text-7">Я хотела сделать татуировку, которая выразила бы мою индивидуальность, и тату-мастер превзошла все мои ожидания! Она создала невероятно красивый и детализированный рисунок, полностью отражающий мою личность. Я безмерно благодарна ей за её талант и профессионализм.</p>
                <h5 class="u-align-left u-text u-text-8"> Маша</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-black u-clearfix u-valign-top u-section-3" id="carousel_bdc9">
      <div class="u-black u-expanded-width u-shape u-shape-rectangle u-shape-1"></div>
      <div class="u-align-center u-container-style u-group u-shape-rectangle u-group-1">
        <div class="u-container-layout u-valign-middle-md u-valign-middle-sm u-valign-middle-xs">
          <h2 class="u-align-center u-text u-text-1">Пример работ</h2>
        </div>
      </div>
      <div class="u-gallery u-layout-grid u-lightbox u-show-text-on-hover u-gallery-1">
        <div class="u-gallery-inner u-gallery-inner-1">
          <div class="u-effect-fade u-effect-hover-zoom u-gallery-item u-shape-rectangle">
            <div class="u-back-slide" data-image-width="872" data-image-height="872">
              <img class="u-back-image u-expanded" src="images/image1.png">
            </div>
            <div class="u-over-slide u-shading u-over-slide-1"></div>
          </div>
          <div class="u-effect-fade u-effect-hover-zoom u-gallery-item u-shape-rectangle">
            <div class="u-back-slide" data-image-width="872" data-image-height="872">
              <img class="u-back-image u-expanded" src="images/image2.png">
            </div>
            <div class="u-over-slide u-shading u-over-slide-2"></div>
          </div>
          <div class="u-effect-fade u-effect-hover-zoom u-gallery-item u-shape-rectangle">
            <div class="u-back-slide" data-image-width="872" data-image-height="872">
              <img class="u-back-image u-expanded" src="images/image7.png">
            </div>
            <div class="u-over-slide u-shading u-over-slide-3"></div>
          </div>
          <div class="u-effect-fade u-effect-hover-zoom u-gallery-item u-shape-rectangle">
            <div class="u-back-slide" data-image-width="872" data-image-height="872">
              <img class="u-back-image u-expanded" src="images/image4.png">
            </div>
            <div class="u-over-slide u-shading u-over-slide-4"></div>
          </div>
          <div class="u-effect-fade u-effect-hover-zoom u-gallery-item u-shape-rectangle">
            <div class="u-back-slide" data-image-width="872" data-image-height="872">
              <img class="u-back-image u-expanded" src="images/image5.png">
            </div>
            <div class="u-over-slide u-shading u-over-slide-5"></div>
          </div>
          <div class="u-effect-fade u-effect-hover-zoom u-gallery-item u-shape-rectangle">
            <div class="u-back-slide" data-image-width="872" data-image-height="872">
              <img class="u-back-image u-expanded" src="images/image6.png">
            </div>
            <div class="u-over-slide u-shading u-over-slide-6"></div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-black u-clearfix u-section-4" id="carousel_ad1d">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-center u-container-style u-image u-layout-cell u-right-cell u-size-30 u-image-1" data-image-width="960" data-image-height="1280">
                <div class="u-container-layout u-container-layout-1"></div>
              </div>
              <div class="u-align-right u-container-align-right u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <h4 class="u-align-right u-text u-text-custom-color-2 u-text-default u-text-1">кто я такая?</h4>
                  <p class="u-align-right u-text u-text-2">Ульяна – начинающий тату-мастер, чье вдохновение и творческий потенциал делают её многообещающим художником в мире татуировок. Её стиль отличается уникальным сочетанием традиционных и современных техник, что придает её работам особый шарм. </p>
                  <div class="u-align-right u-border-1 u-border-grey-dark-1 u-line u-line-horizontal u-line-1"></div>
                  <h4 class="u-align-right u-text u-text-custom-color-2 u-text-default u-text-3">Что я делаю?</h4>
                  <p class="u-align-right u-text u-text-4"> Я специализируюсь на создании искусственных рисунков на коже клиентов с помощью инъекции красящего вещества под поверхность кожи. Я работаю с различными инструментами и техниками, чтобы создать уникальные и персонализированные татуировки в соответствии с пожеланиями клиентов. </p>
                  <div class="u-align-right u-border-1 u-border-grey-dark-1 u-line u-line-horizontal u-line-2"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-black u-clearfix u-valign-middle-xs u-section-5" id="carousel_74c8">
      <div class="u-custom-color-1 u-shape u-shape-rectangle u-shape-1"></div>
      <div class="data-layout-selected u-clearfix u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-container-style u-layout-cell u-size-30-lg u-size-30-xl u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-1">
              <div class="u-container-layout u-container-layout-1">
                <h2 class="u-align-left u-text u-text-1">Почему именно я </h2>
                <p class="u-align-left u-text u-text-2"> Я специализируюсь на создании искусственных рисунков на коже клиентов с помощью инъекции красящего вещества под поверхность кожи.</p>
                <p class="u-align-left u-text u-text-3"> Я работаю с различными инструментами и техниками, чтобы создать уникальные и персонализированные татуировки в соответствии с пожеланиями клиентов.</p>
              </div>
            </div>
            <div class="u-container-style u-layout-cell u-size-30-lg u-size-30-xl u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-2">
              <div class="u-container-layout u-container-layout-2">
                <img class="u-expanded-width-lg u-expanded-width-xl u-image u-image-default u-image-1" src="images/bfa58c15-fd77-f52e-94e7-443d7f3d5aec.jpg" alt="" data-image-width="874" data-image-height="917">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="skrollable u-clearfix u-image u-shading u-section-7" id="carousel_72a4" data-image-width="1618" data-image-height="1080">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="data-layout-selected u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-27-xl u-size-29-lg u-size-29-md u-size-29-sm u-size-29-xs u-layout-cell-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                <div class="u-container-layout u-container-layout-1">
                  <h2 class="u-text u-text-1">Связаться с нами</h2>
                  <div class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-list u-list-1">
                    <div class="u-repeater u-repeater-1">
                      <div class="u-container-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                          <h5 class="u-align-left u-text u-text-2"><span class="u-file-icon u-icon u-text-custom-color-2 u-icon-1"><img src="images/1082334-eecf9bd0.png" alt=""></span>&nbsp;Позвоните нам
                          </h5>
                          <p class="u-align-left u-text u-text-3">8 (950) 646-03-76</p>
                        </div>
                      </div>
                      <div class="u-container-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                          <h5 class="u-align-left u-text u-text-4"><span class="u-file-icon u-icon u-text-custom-color-2 u-icon-2"><img src="images/205d33fb-71c4-40dc-a07f-7a1273e85973-e6f7a941.png" alt=""></span>&nbsp;Локация
                          </h5>
                          <p class="u-align-left u-text u-text-5"> Вязовская улица, д. 15, кв 45</p>
                        </div>
                      </div>
                      <div class="u-container-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
                          <h5 class="u-align-left u-text u-text-6"><span class="u-file-icon u-icon u-text-custom-color-2 u-icon-3"><img src="images/2791568-cf39c9e5.png" alt=""></span>&nbsp;Часы
                          </h5>
                          <p class="u-align-left u-text u-text-7">Пн-пт: 09:00-20:00. Сб-Вс: Выходной</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-right-cell u-size-31-lg u-size-31-md u-size-31-sm u-size-31-xs u-size-33-xl u-layout-cell-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                <div class="u-container-layout u-valign-middle u-container-layout-5">
                  <div class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-form u-form-1">
                    <form onsubmit="location.reload();" action="" method="POST" class="u-clearfix u-form-spacing-30 u-form-vertical u-inner-form" style="padding: 10px">
                      <input type="hidden" name="orders_cons">
                      <div class="u-form-email u-form-group u-form-partition-factor-2">
                        <label for="email-319a" class="u-label u-text-body-alt-color u-label-1">Почта</label>
                        <input type="email" placeholder="Введите адрес электронной почты" id="email-319a" name="email" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle" required="" >
                      </div>
                      <div class="u-form-group u-form-name u-form-partition-factor-2">
                        <label for="name-319a" class="u-label u-text-body-alt-color u-label-2">Имя</label>
                        <input type="text" placeholder="Введите имя" id="name-319a" name="name" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle" required="" >
                      </div>
                      <div class="u-form-address u-form-group u-form-group-3">
                        <label for="address-452f" class="u-label u-text-body-alt-color u-label-3">Адрес</label>
                        <input type="text" placeholder="Введите адрес" id="address-452f" name="address" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle" required="" >
                      </div>
                      <div class="u-form-group u-form-message">
                        <label for="message-319a" class="u-label u-text-body-alt-color u-label-4">Комментарий</label>
                        <textarea placeholder="Введите свой комментарий" rows="4" cols="50" id="message-319a" name="message" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle" required=""></textarea>
                      </div>
                      <div class="u-form-checkbox u-form-group u-form-group-5">
                        <input type="checkbox" id="checkbox-1b91" name="checkbox" value="On" class="u-field-input" required="required">
                        <label for="checkbox-1b91" class="u-field-label"> Нажимая кнопку «Получить консультацию», я даю свое согласие на обработку моих персональных данных, в соответствии с Федеральным законом от 27.07.2006 года №152-ФЗ «О персональных данных», на условиях и для целей, определенных в Согласии на обработку персональных данных&nbsp;*</label>
                      </div>
                      <div class="u-align-left u-form-group">
                        <button type="submit" class="u-active-white u-border-none u-btn u-btn-round u-button-style u-custom-color-2 u-hover-white u-radius-10 u-btn-1" >Записаться</button>
                      </div>
                    </form>
                    <?
                      if(isset($_POST['orders_cons'])){
                        $sql = "INSERT INTO `orders_cons`(name, email, address, message) VALUES (?, ?, ?, ?)";
                        $query = $pdo->prepare($sql);
                        $query->execute([
                          $_POST['name'],
                          $_POST['email'],
                          $_POST['address'],
                          $_POST['message'],
                        ]);

                        exit;
                      }
                    ?>
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
        <a href="index.php" class="u-image u-logo u-image-1" style="margin: 0 50px 0 0;" data-image-width="1925" data-image-height="2160">
          <img src="images/f17715ae-4b19-37d7-af5e-aa8bac2a9376.jpg" class="u-logo-image u-logo-image-1">
        </a>
        <ul class="ul_menu">
          <li class="li_menu"><a href="index.php" class="u-active-none u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-no-bottom u-border-white u-btn u-btn-rectangle u-button-style u-hover-none u-none u-btn-1">Главная </a></li>
          <li class="li_menu"><a href="page/Portfolio.php" class="u-active-none u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-no-bottom u-border-white u-btn u-btn-rectangle u-button-style u-hover-none u-none u-btn-2">Портфолио </a></li>
          <li class="li_menu"><a href="page/Contacts.php" class="u-active-none u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-no-bottom u-border-white u-btn u-btn-rectangle u-button-style u-hover-none u-none u-btn-3">Контакты </a></li>
        </ul>
        <ul>
          <li class="li_menu"><a href="page/Reviews.php" class="u-active-none u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-no-bottom u-border-white u-btn u-btn-rectangle u-button-style u-hover-none u-none u-btn-3">Отзывы </a></li>
          <li class="li_menu"><a href="page/AboutUs.php" class="u-active-none u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-no-bottom u-border-white u-btn u-btn-rectangle u-button-style u-hover-none u-none u-btn-3">О-нас </a></li>
          <li class="li_menu"><a href="page/Certificates.php" class="u-active-none u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-no-bottom u-border-white u-btn u-btn-rectangle u-button-style u-hover-none u-none u-btn-3">Сертификаты</a></li>
        </ul>
      </div>
      </div>
    </footer>
    <?php
    include('templatess/login.php');
    ?>
    <?php
      include('templatess/order.php');
      if(isset($_SESSION['order_error'])){
        include('templatess/error.php');
        unset($_SESSION['order_error']);
      }
    ?>
  </body>
</html>