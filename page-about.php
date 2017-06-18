<?php get_header(); ?>
<div class="section-about">
  <?php if (have_posts()) { ?>
    <?php while (have_posts()) { the_post(); ?>
      <div class="photo-about">
        <?php if(has_post_thumbnail()){ ?>
          <img class="img-about" src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php get_the_title();?>">
        <?php }else{ ?>
          <img class="img-about" src="<?php echo get_template_directory_uri(); ?>/assets/img/img-post/img1.png" alt="<?php get_the_title();?>">
        <?php } ?>
      </div>
      <div class="text-about">
        <h3 class="title-page"><span class="underline"><?php echo substr(get_the_title(), 0, 1);?></span><?php echo substr(get_the_title(), 1);?></h3>
        <?php the_content();?>
      </div>
    <?php } ?>    
  <?php } ?>
</div>
<?php get_footer(); ?>
