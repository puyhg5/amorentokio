<?php get_header(); ?>

<?php
$terms = get_terms( array(
    'taxonomy' => 'category',
    'hide_empty' => false,
));
?>

<div class="page-post">

  <aside class="sidebar">
    <p><strong>01. B</strong>ienvenido</p>
    <div class="container-img-welcome">
      <img class="img-welcome" src="<?php echo get_template_directory_uri(); ?>/assets/img/img-post/img1.png" alt="">
    </div>
    <p><strong>02. C</strong>ategorías</p>

    <ul class="list-categories">

      <?php foreach ( $terms as $term ) { ?>
        <?php if($term->term_id == 1) continue; //No mostrar categoría ?>
          <li>
            <a href="<?php echo get_term_link($term,'category');?>">
              <strong><?php echo substr($term->name, 0, 1);?></strong><?php echo substr($term->name, 1);?>
            </a> <img class="line" src="<?php echo get_template_directory_uri(); ?>/assets/img/line.svg" alt="">
          </li>
      <?php } ?>
    </ul>

    <p><strong>03. M</strong>ás populares</p>
    <?php if (function_exists('wpp_get_mostpopular')) wpp_get_mostpopular(array('limit' => 3)); ?>

  </aside>

  <div class="current-post">
    <?php if (have_posts()) { ?>
      <?php while (have_posts()) { the_post(); ?>
          <div class="last-post-img-date">
            <div class="general-img-post">
              <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
            </div>
            <div class="general-date">
              <div class="general-date-reverse">
                <p><strong><?php echo get_the_date('n'); ?></strong>.<?php echo get_the_date('M'); ?>&nbsp;</p>
                <p class="small"><?php echo get_the_date('Y'); ?></p>
              </div>
            </div>
          </div>

          <div class="general-content"><?php the_content(); ?></div>
      <?php } /* end while */ ?>
    <?php }else{ /* Si no hay post que mostar debería salir algun mensaje de advertencia */ ?>
      <div class="general-content">
        Ups!
      </div>
    <?php } ?>
  </div>

</div>

<?php get_footer(); ?>
