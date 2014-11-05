<?php get_header(); ?>

<div class="content project clearfix">
    <?php if( have_rows('galeria') ):
        while ( have_rows('galeria') ) : the_row(); 
            $image = get_sub_field('imagen');
            $image_attributes = wp_get_attachment_image_src( $image, 'full' ); ?>
            <img class="project-item" src="<?php echo $image_attributes[0]; ?>" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>">
        <?php  endwhile;
    endif; ?>
    <p class="project-info"><?php the_field('informacion_del_proyecto') ?></p>
</div>

<?php get_footer(); ?>