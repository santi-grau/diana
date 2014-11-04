<?php get_header(); ?>

<div class="content project clearfix">
<?php if( have_rows('galeria') ):
	    while ( have_rows('galeria') ) : the_row(); ?>
	        <img class="project-item" src="<?php the_sub_field('imagen'); ?>">
	 	<?php  endwhile;
endif; ?>
</div>

<?php get_footer(); ?>