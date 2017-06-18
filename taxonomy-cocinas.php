<?php get_header(); ?>

<?php
$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
$fi_args = array (
  'posts_per_page' => 1,
  'paged' => $paged,
  'post_type'  => 'receta',
  'tax_query'  => array(
    array(
      'taxonomy' => 'cocinas',
      'field'    => 'term_id',
      'terms'    => array( get_queried_object()->term_id ),
    ),
  ),
); 
$fiq = new WP_Query( $fi_args );
$term = get_term(get_queried_object()->term_id, 'cocinas');
?>

<div class="section-subcategory">

  <div class="name-subcat">
    <div class="container-icon icon-sub">
      <img class="icon-cat" src="<?php echo get_template_directory_uri(); ?>/assets/img/desayunos.svg" alt="Icono Categoría">
    </div>
    <h3 class="title-page"><span class="underline"><?php echo substr($term->name,0,1);?></span><?php echo substr($term->name,1);?></h3>
  </div>

  <?php if($fiq->have_posts()) { ?>
    <div class="grid-subcategorias">
      <?php while ($fiq->have_posts()) { $fiq->the_post(); ?>
        <div class="subcategoria">
          <div class="img-date">
            <div class="container-img-subcategory">
              <a href="<?php echo get_term_link($term,'category');?>">
                <?php if(has_post_thumbnail($post)){ ?>
                  <img class="img-receta" src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                <?php }else{ /* Último post no tiene imagen */ ?>
                  <img class="img-receta" src="<?php echo get_template_directory_uri(); ?>/assets/img/img-post/img1.png" alt="">
                <?php } ?>
              </a>
            </div>
            <p class="date-post"><strong><?php echo get_the_date('n'); ?></strong>.<?php echo get_the_date('M'); ?> <?php echo get_the_date('Y'); ?></p>
          </div>
          <p class="text-subcat"><a href="<?php echo get_term_link($term,'category');?>"><?php echo get_the_title();?></a></p>
        </div>
      <?php } ?>
    </div>
  <?php }else{ /* Si no hay post en este tipo de cocina */ ?>
    // No hay recetas clasificadas con este tipo de cocina
  <?php } ?>

  <?php
  $big = 999999999; // need an unlikely integer
  $paglinks = paginate_links( array(
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $fiq->max_num_pages,
    'show_all' => true,
    'prev_next' => false,
    'type' => 'array',
  ) );
  ?>
  <?php if($paglinks){ ?>
    <p class="list-subcat">
      <?php foreach ($paglinks as $pl) {?>
        <?php echo $pl;?>.
      <?php } ?>
    </p>
  <?php } ?>
</div>

<?php get_footer(); ?>