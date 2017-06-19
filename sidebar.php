<?php
$terms = get_terms( array(
    'taxonomy' => 'category',
    'hide_empty' => false,
));
?>

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
  <?php if (function_exists('wpp_get_mostpopular')) { ?>
    <?php wpp_get_mostpopular(array('limit' => 3)); ?>
  <?php }else{ ?>
    Es necesario instalar plugin <a href="https://es.wordpress.org/plugins/contact-form-7/">Contact Form 7</a>
  <?php } ?>

</aside>