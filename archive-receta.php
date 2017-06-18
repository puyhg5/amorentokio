<?php get_header(); ?>
<?php
$terms = get_terms( array(
    'taxonomy' => 'cocinas',
    'hide_empty' => false,
));
?>

<div class="section-recetas">
  <?php if ($terms) { ?>
    <h3 class="title-page"><span class="underline">r</span>ecetas</h3>
    <div class="grid-recetas">
      <?php foreach ( $terms as $term ) { ?>
        <?php
          $fi_args = array (
            'posts_per_page' => 1,
            'post_type'  => 'receta',
            'tax_query'  => array(
              array(
                'taxonomy' => 'cocinas',
                'field'    => 'term_id',
                'terms'    => array( $term->term_id ),
              ),
            ),
          ); 
          $fiq = new WP_Query( $fi_args );
        ?>
        <div class="receta-cat">
            <?php if($fiq->have_posts()) { ?>
              <?php while ($fiq->have_posts()) { $fiq->the_post(); ?>
                <div class="container-img-receta">
                  <a href="<?php echo get_term_link($term,'category');?>">
                    <?php if(has_post_thumbnail($post)){ ?>
                      <img class="img-receta" src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                    <?php }else{ /* Último post no tiene imagen */ ?>
                      <img class="img-receta" src="<?php echo get_template_directory_uri(); ?>/assets/img/img-post/img1.png" alt="">
                    <?php } ?>
                  </a>
                </div>
              <?php } /* end while */ ?>
            <?php }else{ /* No hay recetas con este term */ ?>
            <?php } ?>
          <div class="text-cat-receta">
            <p class="name-cat"><a href="<?php echo get_term_link($term,'category');?>">
              <strong><?php echo substr($term->name, 0, 1);?></strong><?php echo substr($term->name, 1);?>
            </a></p>
            <div class="container-icon">
              <img class="icon-cat" src="<?php echo get_template_directory_uri(); ?>/assets/img/desayunos.svg" alt="Icono Categoría">
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  <?php }else{ /* Si no hay terms que mostar */ ?>
    // No hay cocinas que mostrar
  <?php } ?>
</div>

<?php get_footer(); ?>