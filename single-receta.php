<?php get_header(); ?>

<div class="page-post">

  <?php get_sidebar(); ?>

  <?php if (have_posts()) { ?>
    <?php while (have_posts()) { the_post(); ?>
      <div class="current-post">
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
      </div>
    <?php } /* end while */ ?>
  <?php }else{ /* Si no hay post que mostar debería salir algun mensaje de advertencia */ ?>
    
  <?php } ?>

</div>

<?php get_footer(); ?>
