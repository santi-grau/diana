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
							<span class="like home-like" onclick="shareModal(this)"></span>
						</div>
					</div>
					<div class="modal share-box" onclick="closeModal()" style="display:block">
						<div class="box share-btn">
							<p>Social</p>
							<div class="fb-like" data-action="like" data-share="false" data-width="450" data-show-faces="false" data-href="<?php the_permalink() ?>" data-layout="button"></div>
							<a href="//www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark"  data-pin-color="red"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_20.png" /></a>
							<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink ?>" style="width:54px;">Tweet</a>					
						</div>
					</div>
				</div>
			
	<?php endwhile; // end of the loop. ?>
</div>

<?php get_footer(); ?>