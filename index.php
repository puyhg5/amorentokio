<?php get_header(); ?>

<div class="index">

	<?php if(have_posts()) { ?>
		<?php while(have_posts()) { the_post(); ?>
	
			<section class="index--section">
				<h2 class="index--title"><?php the_title();?></h2>
				<?php the_content();?>
			</section>

		<?php } ?>
	<?php }else{ ?>

	<?php } ?>

</div>

<?php get_footer(); ?>