<?php get_header(); ?>

<?php /*

Cosas que he visto que te faltan y otros consejos:
-He reestructurado un poco los archivos (puesto los extras en assets), es una convención bastante común
-Siempre que vincules un archivo (img, js, css...) que esté dentro del theme utiliza <?php echo get_template_directory_uri(); ?>
-He tenido que modificar un poco el CSS del menú
- He añadido unos <meta> básicos en el header: https://www.wpdoctor.es/que-es-open-graph/
-Te falta un enlace a la página de inicio en el logotipo. Se pone con <?php echo get_bloginfo('url');?>
-Te faltan enlaces a los post (los usuarios suelen clickar imagenes o texto también). Se pone con <?php echo get_the_permalink();?>
-Los meses, tienes que forzar que salgan en minúsculas con css, puesto que php solo lo saca capitalizado.
-Vigila qué pasa con los títulos largos y las imágenes de otras proporciones.
-Para el favicon utiliza esta página: http://realfavicongenerator.net/

*/ ?>

<?php
$home_args = array (
  'post_count' => 6,
); 
$home_query = new WP_Query( $home_args );
$post_counter = 0;
?>

<main class="main">
  
  <?php if($home_query->have_posts()) { ?>
    <?php while ($home_query->have_posts()) { $home_query->the_post(); $post_counter++; ?>

      <?php if($post_counter == 1) { /* Usar solo en el último post */ ?>
        <div class="current-post">
          <div class="post">
            <div class="img-post">
              <img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php echo get_the_title();?>">
            </div>
            <div class="text-post">
              <div class="title-more">
                <h1 class="title-post"><?php echo get_the_title();?></h1>
                <a href="<?php echo get_the_permalink();?>">+</a>
              </div>
              <p class="body-post"><?php echo get_the_excerpt();?></p>
            </div>
          </div>
          <div class="date">
            <div  class="date-reverse">
              <p><strong><?php echo get_the_date('n'); ?></strong>.<?php echo get_the_date('M'); ?></p>
              <p class="small"><?php echo get_the_date('Y'); ?></p>
            </div>
          </div>
        </div>

      <?php }else{ /* usar en los siguientes post */ ?>

        <?php if($post_counter == 2) { /* Abrir div solo antes del 2do post */ ?>
          <div class="grid-post">
        <?php } ?>
        
        <!-- start item-grid -->
        <div class="item-grid">
          <div class="img-text-post">
            <div class="img-post">
              <img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php echo get_the_title();?>">
            </div>
            <div>
              <p class="text-post-grid"><?php echo get_the_title();?></p>
            </div>
          </div>

          <div class="date-grid">
            <div  class="date-reverse">
              <p><strong><?php echo get_the_date('n'); ?></strong>.<?php echo get_the_date('M'); ?></p>
              <p class="small"><?php echo get_the_date('Y'); ?></p>
            </div>
          </div>
        </div>
        <!-- end item-grid -->
        
        <?php if($post_counter == 7) { /* Cerrar div solo despues del 7º post */ ?>
          </div>
        <?php } ?>

      <?php } /* end bloque grid */ ?>
    <?php } /* end while */ ?>

  <?php }else{ /* Si no hay post que mostar debería salir algun mensaje de advertencia */ ?>
    
  <?php } ?>

</main>
<?php get_footer(); ?>