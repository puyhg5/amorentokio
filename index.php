<?php get_header(); ?>

<div class="page-post">
  <?php get_sidebar(); ?>

  <div class="current-post">
    <?php if (have_posts()) { ?>
      <?php while (have_posts()) { the_post(); ?>
          <div class="last-post-img-date">
            <div class="general-img-post">
              <a href="<?php echo get_term_link($term,'category');?>">
                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
              </a>
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
      <div class="general-content"><?php the_content();?></div>
    <?php } ?>
  </div>

</div>

<?php get_footer(); ?>
