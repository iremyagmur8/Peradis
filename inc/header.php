<?php error_reporting(0);  ?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="<?=  $meta[$url]['desc']; ?>">
  <link rel="icon" href="/assets/images/favicon/favicon2.png" >
  <title><?=  $meta[$url]['title']; ?></title>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&family=Roboto:wght@400;700&display=swap">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
  <link rel="stylesheet" href="/assets/css/libraries.css">
  <?php include './lib/style.php'; ?>
</head>

<div class="wrapper">


    <!-- =========================
        Header
    =========================== -->
    <header class="header header-layout1">
      <div class="header-topbar">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="d-flex align-items-center justify-content-between mt-10">
                <ul class="contact__list d-flex flex-wrap align-items-center list-unstyled mb-0">
               
                <li><a href="<?= translator('covid-19 information', 'path'); ?>" ><i class="fas fa-exclamation-circle"></i><span>&nbsp;<?= translator('covid-19 information', 'header'); ?></span></a></li>
                  <li>
                    <i class="icon-phone"></i>
                    <ul class="m-0 p-0">
                      <li  class="m-0 p-0">
                      <a href="tel:+02128435363"  class="m-0 p-0">0212 843 53 63 </a>
                      </li>
                      <li  class="m-0 p-0">   <a href="tel:+05428435313" >0542 843 53 13</a></li>
                    </ul>
                  </li>
                  <li>
                    <i class="icon-location"></i><a href="https://yandex.com.tr/harita/-/CCUiVVd20C">Başakşehir / Mall Of İstanbul</a>
                  </li>
                  <li>
                  <i class="icon-clock"></i><a href="<?=translator('contact','path')?>"><?= translator('monday - saturday: 10:00  - 20:00', 'header'); ?></a>
                  </li>
                </ul><!-- /.contact__list -->
                <div class="d-flex">
                <div class="mr-3 imp-price"><a href="<?= $main_root  . seourl('implant') ?>"><i class="fas fa-exclamation-circle"></i><span>&nbsp;<?=translator('LEARN 2021 IMPLANT PRICES','header')?></span></a></div>

                  <ul class="social-icons list-unstyled mb-0 mr-30">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://www.instagram.com/peradis.mallofistanbul/?hl=tr"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  </ul>
                  <!-- /.social-icons -->
                  <?php if($lang == 'tr') {?>
                  <div class="dropdown lang-dropdown">
                    <button class="dropdown-toggle lang-dropdown-toggle" id="langDropdown" data-toggle="dropdown">
                     
                      <a href="/"><img src="/assets/images/flags/tr.png" alt="tr" width="35" height="23"> <span><?php echo translator('tr'); ?></span></a>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="langDropdown" style="padding:10px !important">
                      <a class="dropdown-item" href="#">
                      <a href="/en"><img src="/assets/images/flags/en.png" alt="en" width="35" height="23"> <span><?= translator('en'); ?></span></a>
                      </a>
                      <a href="/ru"><img src="/assets/images/flags/ru.png" alt="ru" width="35" height="35"> <span><?= translator('ru'); ?></span></a>
                      </a>
                    </div>
                  </div>
                  <?php } elseif($lang == 'en') { ?>
                    <div class="dropdown lang-dropdown">
                    <button class="dropdown-toggle lang-dropdown-toggle" id="langDropdown" data-toggle="dropdown">
                     
                      <a href="/en"><img src="/assets/images/flags/en.png" alt="en" width="35" height="23"> <span><?php echo translator('en'); ?></span></a>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="langDropdown" style="padding:10px !important">
                      <a class="dropdown-item" href="#">
                      <a href="/"><img src="/assets/images/flags/tr.png" alt="tr" width="35" height="23"> <span><?= translator('tr'); ?></span></a>
                      </a>
                      <a href="/ru"><img src="/assets/images/flags/ru.png" alt="ru" width="35" height="35"> <span><?= translator('ru'); ?></span></a>
                      </a>
                    </div>
                  </div>
                  <?php } elseif($lang == 'ru') { ?>
                    <div class="dropdown lang-dropdown">
                    <button class="dropdown-toggle lang-dropdown-toggle" id="langDropdown" data-toggle="dropdown">
                     
                      <a href="/ru"><img src="/assets/images/flags/ru.png" alt="ru" width="35" height="35"> <span><?php echo translator('ru'); ?></span></a>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="langDropdown" style="padding:10px !important">
                      <a class="dropdown-item" href="#">
                      <a href="/"><img src="/assets/images/flags/tr.png" alt="tr" width="35" height="23"> <span><?= translator('tr'); ?></span></a>
                      </a>
                      <a href="/en"><img src="/assets/images/flags/en.png" alt="en" width="35" height="23"> <span><?= translator('en'); ?></span></a>
                      </a>
                    
                    </div>
                  </div>
                    <?php }?>
                </div>
              </div>
            </div><!-- /.col-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.header-top -->
      
<nav class="navbar navbar-expand-lg sticky-navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= translator('home', 'path'); ?>">
      <img src="/assets/images/logo/logo-yedek.jpeg" class="logo-light d-none d-lg-block" alt="logo" width="108" height="85">
      <img src="/assets/images/logo/logo-yedek.jpeg" class="logo-dark d-lg-none d-block" alt="logo"  width="70" height="55">
    </a>
    <button class="navbar-toggler" type="button">
      <span class="menu-lines"><span></span></span>
    </button>
    <div class="collapse navbar-collapse" id="mainNavigation">
      <ul class="navbar-nav ml-auto">
        <li class="nav__item ">
        <a href="<?= translator('home', 'path'); ?>"  class="nav__item-link <?php if($url == '/') echo 'active' ?>"><?= translator('home', 'header'); ?></a>
        </li><!-- /.nav-item -->
        <li class="nav__item">
          <a href="<?= translator('about', 'path'); ?>" class="nav__item-link <?php if($url == '/hakkimizda') echo 'active' ?>"><?= translator('about', 'header'); ?></a>
        </li>
        <li class="nav__item">
          <a href="<?= translator('implant', 'path'); ?>" class="nav__item-link <?php if($url == $main_root . seourl('implant')) echo 'active' ?>"><?= translator('implant', 'header'); ?></a>
        </li>
        <li class="nav__item">
          <a href="<?= translator('smile design', 'path'); ?>" class="nav__item-link <?php if($url == $main_root . seourl('gulus-tasarimi')) echo 'active' ?>"><?= translator('smile design', 'header'); ?></a>
        </li>
        <li class="nav__item">
          <a href="<?= translator('our-team', 'path'); ?>" class="nav__item-link <?php if($url == '/hekimlerimiz') echo 'active' ?>" ><?= translator('our-team', 'header'); ?></a>
        </li><!-- /.nav-item -->
        <li class="nav__item">
          <a href="<?= translator('gallery', 'path'); ?>" class="nav__item-link <?php if($url == '/galeri') echo 'active' ?>" ><?= translator('gallery', 'header'); ?></a>
        </li><!-- /.nav-item -->
        <li class="nav__item">
          <a href="<?= translator('contact', 'path'); ?>" class="nav__item-link <?php if($url == '/iletisim') echo 'active' ?>"><?= translator('contact', 'header'); ?></a>
        </li><!-- /.nav-item -->
        <li class="nav__item d-lg-none d-block">
          <a href="<?= translator('our-services', 'path'); ?>" class="nav__item-link"><?= translator('our services', 'header'); ?></a>
        </li><!-- /.nav-item -->
        <li class="nav__item">
          <?php if($lang == 'tr') {?>
                  <div class="dropdown lang-dropdown d-lg-none d-block ml-3">
                    <button class="dropdown-toggle lang-dropdown-toggle" id="langDropdown" data-toggle="dropdown">
                     
                      <a href="/"><img src="/assets/images/flags/tr.png" alt="tr" width="35" height="23"> <span><?php echo translator('tr'); ?></span></a>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="langDropdown">
                      <a class="dropdown-item" href="#">
                      <a href="/en"><img src="/assets/images/flags/en.png" alt="en"> <span><?= translator('en'); ?></span></a>
                      </a>
                      <a href="/ru"><img src="/assets/images/flags/ru.png" alt="ru"> <span><?= translator('ru'); ?></span></a>
                      </a>
                    </div>
                  </div>
                  <?php } elseif($lang == 'en') { ?>
                    <div class="dropdown lang-dropdown d-lg-none d-block ml-3">
                    <button class="dropdown-toggle lang-dropdown-toggle" id="langDropdown" data-toggle="dropdown">
                     
                      <a href="/en"><img src="/assets/images/flags/en.png" alt="en" width="35" height="23"> <span><?php echo translator('en'); ?></span></a>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="langDropdown">
                      <a class="dropdown-item" href="#">
                      <a href="/"><img src="/assets/images/flags/tr.png" alt="tr" width="35" height="23"> <span><?= translator('tr'); ?></span></a>
                      </a>
                      <a href="/ru"><img src="/assets/images/flags/ru.png" alt="ru" width="35" height="23"> <span><?= translator('ru'); ?></span></a>
                      </a>
                    </div>
                  </div>
                  <?php } else { ?>
                    <div class="dropdown lang-dropdown d-lg-none d-block ml-3">
                    <button class="dropdown-toggle lang-dropdown-toggle" id="langDropdown" data-toggle="dropdown">
                     
                      <a href="/ru"><img src="/assets/images/flags/ru.png" alt="ru" width="35" height="23"> <span><?php echo translator('ru'); ?></span></a>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="langDropdown">
                      <a class="dropdown-item" href="#">
                      <a href="/"><img src="/assets/images/flags/tr.png" alt="tr" width="35" height="23"> <span><?= translator('tr'); ?></span></a>
                      </a>
                      <a href="/en"><img src="/assets/images/flags/en.png" alt="en" width="35" height="23"> <span><?= translator('en'); ?></span></a>
                      </a>
                    </div>
                    <?php }?>
        </li>
      </ul><!-- /.navbar-nav -->
      <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
    </div><!-- /.navbar-collapse -->
    <div class="d-none d-xl-flex align-items-center position-relative ml-30">
      <div class="miniPopup-departments-trigger">
        <span class="menu-lines" id="miniPopup-departments-trigger-icon"><span></span></span>
        <a href="<?= translator('our-services', 'path'); ?>"><?=translator('our services','header')?></a>
      </div>
      <ul id="miniPopup-departments" class="miniPopup miniPopup-departments dropdown-menu">
      <li class="nav__item">
          <a href="<?= $main_root  . translator('20-years-of-tooth-extraction', 'link') ?>"class="nav__item-link"><?=translator('20 years of tooth extraction','header')?></a>
        </li><!-- /.nav-item -->
        <li class="nav__item">
          <a href="<?= $main_root  . translator('jaw-cyst-operation', 'link') ?>"class="nav__item-link"><?=translator('jaw cyst operation','header')?></a>
        </li><!-- /.nav-item -->
        <li class="nav__item">
          <a href="<?=$main_root  . translator('teeth-whitening','link') ?>" class="nav__item-link"><?=translator('teeth whitening','header')?></a>
        </li><!-- /.nav-item -->
        <li class="nav__item">
          <a href="<?= $main_root . translator('dental-prosthesis', 'link') ?>" class="nav__item-link"><?=translator('dental prosthesis','header')?></a>
        </li><!-- /.nav-item -->
        <li class="nav__item">
          <a href="<?= $main_root . translator('bruksizm', 'link') ?>" class="nav__item-link"><?=translator('bruksizm','header')?></a>
        </li><!-- /.nav-item -->
        <li class="nav__item">
          <a href="<?= $main_root  . translator('endodontics', 'link') ?>" class="nav__item-link"><?=translator('endodontics','header')?></a>
        </li><!-- /.nav-item -->
        <li class="nav__item">
          <a href="<?= $main_root  . translator('cosmetic-dentistry', 'link') ?>" class="nav__item-link"><?=translator('cosmetic dentistry','header')?></a>
        </li><!-- /.nav-item -->
        <li class="nav__item">
          <a href="<?= $main_root  .  translator('bonding', 'link') ?>" class="nav__item-link"><?=translator('cosmetic teeth bonding','header')?></a>
        </li><!-- /.nav-item -->
        <li class="nav__item">
          <a href="<?= $main_root  . translator('conservative-dentistry', 'link') ?>" class="nav__item-link"><?=translator('conservative dentistry','header')?></a>
        </li><!-- /.nav-item -->
        <li class="nav__item">
          <a href="<?= $main_root  . translator('orthodontics', 'link') ?>" class="nav__item-link"><?=translator('orthodontics','header')?></a>
        </li><!-- /.nav-item -->
        <li class="nav__item">
          <a href="<?= $main_root  . translator('radiography', 'link') ?>"class="nav__item-link"><?=translator('radiography','header')?></a>
        </li><!-- /.nav-item -->
        <li class="nav__item">
          <a href="<?= $main_root  . translator('pedodontics', 'link')?>"class="nav__item-link"><?=translator('pedodontics','header')?></a>
        </li><!-- /.nav-item -->
        <li class="nav__item">
          <a href="<?= $main_root  . translator('periodontology', 'link') ?>" class="nav__item-link"><?=translator('periodontology','header')?></a>
        </li><!-- /.nav-item -->
        <li class="nav__item">
          <a href="<?= $main_root  . translator('porcelain-laminates', 'link') ?>" class="nav__item-link"><?=translator('porcelain laminates','header')?></a>
        </li><!-- /.nav-item -->
      </ul> <!-- /.miniPopup-departments -->
      <a href="<?= $main_root  . translator('appointment', 'link') ?>" class="btn btn__primary btn__rounded ml-20">
        <i class="icon-calendar"></i>
        <span><?=translator('Online Appointment','header')?></span>
      </a>
    </div>
  </div><!-- /.container -->
</nav><!-- /.navabr -->
    </header><!-- /.Header -->

    
    