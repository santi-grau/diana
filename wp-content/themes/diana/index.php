<?php
/* Template Name: Home */
?>
<?php get_header(); ?>

<div class="content isotope clearfix">
	<?php $query = new WP_Query( 'post_type=portfolio&posts_per_page=-1&order=DESC' ); ?>
	<?php while ( $query->have_posts() ) : $query->the_post(); ?>
		  	<div class="grid-sizer"></div>
			<a href="<?php the_permalink(); ?>" class="item">
				<img src="<?php the_field('imagen_destacada'); ?>">
				<div class="item-info-box">
					<div class="item-info-shader"></div>
					<div class="item-info">
					<?php the_title() ?><br>
					<span href="javascript:void(0)" class="like home-like"></span>
					</div>
				</div>
			</a>
	<?php endwhile; // end of the loop. ?>
</div>

<?php get_footer(); ?>