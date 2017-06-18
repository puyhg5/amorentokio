<?php get_header(); ?>

<div class="section-contact">
  <?php if (have_posts()) { ?>
    <?php while (have_posts()) { the_post(); ?>
      <div class="text-contact">
        <h3 class="title-page"><span class="underline"><?php echo substr(get_the_title(), 0, 1);?></span><?php echo substr(get_the_title(), 1);?></h3>
        <?php the_content();?>
      </div>
      <div class="photo-contact">
        <?php if(has_post_thumbnail()){ ?>
          <img class="img-contact" src="<?php echo get_the_post_thumbnail_url();?>" alt="Photo Contact">
        <?php }else{ ?>
          <img class="img-contact" src="<?php echo get_template_directory_uri(); ?>/assets/img/img-post/img1.png" alt="Photo Contact">
        <?php } ?>
      </div>
    <?php } ?>    
  <?php } ?>
</div>

<?php get_footer(); ?>
