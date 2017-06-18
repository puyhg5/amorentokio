<?php get_header(); ?>

<?php
$home_args = array (
  'post_count' => 6,
); 
$home_query = new WP_Query( $home_args );
$post_counter = 0;
?>

<div class="index-page">
  <?php if($home_query->have_posts()) { ?>
    <?php while ($home_query->have_posts()) { $home_query->the_post(); $post_counter++; ?>

      <?php if($post_counter == 1) { /* Usar solo en el último post */ ?>

        <div class="general-last-post">
          <div class="last-post-img-date">
            <div class="general-img-post">
              <a href="<?php echo get_the_permalink();?>">
                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php echo get_the_title();?>">
              </a>
            </div>
            <div class="general-date">
              <div  class="general-date-reverse">
                <p><strong><?php echo get_the_date('n'); ?></strong>.<?php echo get_the_date('M'); ?>&nbsp;</p>
                <p class="small"><?php echo get_the_date('Y'); ?></p>
              </div>
            </div>
          </div>
          <div class="general-text-post">
            <div class="general-title-more">
              <h1 class="general-title-post"><?php echo get_the_title();?></h1>
              <a href="<?php echo get_the_permalink();?>">+</a>
            </div>
            <p class="general-body-post"><?php echo get_the_excerpt();?></p>
          </div>
        </div>

      <?php }else{ /* usar en los siguientes post */ ?>
        
        <?php if($post_counter == 2) { /* Abrir div solo antes del 2do post */ ?>
          <div class="general-grid-post">
        <?php } ?>

          <div class="item-grid-post">
            <div class="item-post-img-date">
              <div class="item-post-img">
                <a href="<?php echo get_the_permalink();?>">
                  <img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php echo get_the_title();?>">
                </a>
              </div>
              <div class="item-post-date">
                <div class="item-post-date-reverse">
                  <p><strong><?php echo get_the_date('n'); ?></strong>.<?php echo get_the_date('M'); ?>&nbsp;</p>
                  <p class="small"><?php echo get_the_date('Y'); ?></p>
                </div>
              </div>
            </div>
            <a href="<?php echo get_the_permalink();?>" class="item-post-title"><?php echo get_the_title();?></a>
          </div>

        <?php if($post_counter == 7) { /* Cerrar div solo despues del 7º post */ ?>
          </div>
        <?php } ?>

      <?php } /* end bloque grid */ ?>
    <?php } /* end while */ ?>
  <?php }else{ /* Si no hay post que mostar debería salir algun mensaje de advertencia */ ?>
    // No hay post que mostrar. Por favor regitre algún post
  <?php } ?>

</div>
    
<?php get_footer(); ?>