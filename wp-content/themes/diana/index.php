<?php
/* Template Name: Home */
?>
<?php get_header(); ?>

<div class="content isotope clearfix">
	<?php $query = new WP_Query( 'post_type=portfolio&posts_per_page=-1&order=DESC' ); ?>
	<?php while ( $query->have_posts() ) : $query->the_post(); ?>
		  	<div class="grid-sizer"></div>
			
				<div class="item">
					<a href="<?php the_permalink(); ?>"><img src="<?php the_field('imagen_destacada'); ?>"></a>
					<div class="item-info-box">
						<a class="shader-link" href="<?php the_permalink(); ?>"><div class="item-info-shader"></div></a>
						<div class="item-info">
							<a href="<?php the_permalink(); ?>"><?php the_title() ?><br></a>
							<span href="javascript:void(0)" class="like home-like" onclick="shareModal()"></span>
						</div>
					</div>
				</div>
				<div class="modal share-box" onclick="closeModal()">
					<div class="addthis_sharing_toolbox box"></div>
				</div>
			
	<?php endwhile; // end of the loop. ?>
</div>

<?php get_footer(); ?>