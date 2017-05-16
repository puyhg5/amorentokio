<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php bloginfo('sitename'); ?></title>
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <!-- Social Sharing -->
    <meta name="twitter:card" content="summary"> 
    <meta name="twitter:site" content="@"> 
    <meta name="twitter:title" content="<?php wp_title(); ?>"> 
    <meta name="twitter:creator" content="@">
    <?php if (is_single()) { ?>  
      <meta property="og:url" content="<?php the_permalink() ?>">  
      <meta property="og:title" content="<?php single_post_title(''); ?>">  
      <meta property="og:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>">  
      <meta property="og:type" content="article">  
    <?php } else { ?>  
      <meta property="og:site_name" content="<?php bloginfo('name'); ?>">  
      <meta property="og:description" content="<?php bloginfo('description'); ?>">  
      <meta property="og:type" content="website">  
    <?php } ?>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" />
    
    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  
  </head>
  <?php wp_head(); ?>
  <body <?php body_class(); ?>>
    <header class="header">
      <div class="center-header">
        <div class="logo">
          <img class= "logo-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/Logotipo_AmorEnTokio.png" alt="Logotipo Amor en Tokio">
        </div>
        <nav>
          <?php if (has_nav_menu('menutop')) { /* Solo mostrar menu si este se ha creado en el admin */ ?>
            <?php wp_nav_menu(array('theme_location'=>'menutop', 'container'=>false, 'menu_class'=>'list-nav', 'after'=>'<span class="line">___</span>'));?>

            <?php /* Para añadir el search creo otro <ul> ya que es lo más sencillo */ ?>
            <ul class="list-nav">
              <li class="nav-items"><a href="#"><i class="fa fa-search" aria-hidden="true"></i> <span class="line">___</span></a></li>
            </ul>
          <?php } ?>
        </nav>
      </div>
    </header>