<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php bloginfo('sitename'); ?></title>
    <meta name="viewport" content="width=device-width">
    <link rel="icon" type="image/png" href="img/favicon.ico" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/font-awesome/css/font-awesome.min.css">
    <?php wp_head(); ?>
  </head>
  <body>
    <header class="header">
      <a href="<?php bloginfo('url'); ?>" class="logo">
        <img class="img-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-amor-en-tokio.svg" alt="Amor en Tokio">
      </a>
      <ul class="nav">
        <li><a class="nav-item-link desktop-item-nav" href="<?php bloginfo('url'); ?>">inicio </a></li>
        <li><a class="nav-item-link desktop-item-nav" href="<?php bloginfo('url'); ?>/receta">recetas </a></li>
        <li><a class="nav-item-link desktop-item-nav" href="<?php bloginfo('url'); ?>/about">sobre mí </a></li>
        <li><a class="nav-item-link desktop-item-nav" href="<?php bloginfo('url'); ?>/contact">contacto </a></li>
        <li>
          <button type="button" name"search-button" class="nav-item-link desktop-item-nav search-item-nav">
            <i class="fa fa-search" aria-hidden="true"></i>
          </button>
          <input class="search-input-desktop" type="text" name="input-search-desktop" placeholder="search">
        </li>
      </ul>
      <button type="button" name="button-nav" class="btn-nav">
        <img src="img/burguer-menu.svg" alt="Menu navegación">
      </button>
    </header>
    <nav class="mobile-nav-cover">
      <ul class="mobile-nav">
        <li><a class="nav-item-link mobile-item-nav" href="index.html"> inicio</a></li>
        <li><a class="nav-item-link mobile-item-nav" href="recetas.html"> recetas</a></li>
        <li><a class="nav-item-link mobile-item-nav" href="about.html"> sobre mí</a></li>
        <li><a class="nav-item-link mobile-item-nav" href="contact.html"> contacto</a></li>
      </ul>
      <div class="search-item-mobile">
        <i class="fa fa-search" aria-hidden="true"></i>
        <input class="search-input-mobile" type="text" name="input-search-mobile" placeholder="buscar">
      </div>
    </nav>

    <main class="general-page">