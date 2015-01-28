<?php get_header(); ?>

<div class="content project clearfix">
    <?php while(the_flexible_field("galeria")): ?>
		<?php if(get_row_layout() == "imagen"): ?>
			
			<?php 
            $image = get_sub_field('imagen');
            $image_attributes = wp_get_attachment_image_src( $image, 'large' ); 
            ?>
            <img class="project-item" src="<?php echo $image_attributes[0]; ?>" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>">
			<span class="like" onclick="shareModalProject(this)"></span>
			<div class="modal" onclick="closeModal()" style="display:block">
					<div class="box share-btn">
					<p>Social</p>
					<div class="fb-like" data-action="like" data-share="false" data-width="450" data-show-faces="false" data-href="<?php the_permalink() ?>" data-layout="button"></div>
					<a href="//www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark"  data-pin-color="red"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_20.png" /></a>
					<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink() ?>" style="width:54px;">Tweet</a>
				</div>
			</div>
		
		<?php elseif(get_row_layout() == "vimeo"): ?>

			<iframe class="project-item" src="//player.vimeo.com/video/<?php the_sub_field('vimeo') ?>" width="805" height="452" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

		<?php endif; ?>
	<?php endwhile; ?>

    <p class="project-info"><?php the_field('informacion_del_proyecto') ?></p>
</div>

<?php get_footer(); ?>

<script type="text/javascript">
	$('nav ul li a').removeClass('active');
</script>