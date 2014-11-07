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
				<div class="modal share-box" onclick="closeModal()" style="display:block">
					<!-- Go to www.addthis.com/dashboard to customize your tools -->
					<div class="box share-btn">
						<p>Social</p>
						<div class="fb-like" data-action="like" data-share="false" data-width="450" data-show-faces="false" data-href="<?php the_permalink() ?>" data-layout="button"></div>
						<a href="//www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark"  data-pin-color="red"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_20.png" /></a>
						<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink ?>" style="width:54px;">Tweet</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
						<!-- Please call pinit.js only once per page -->
						<script type="text/javascript" async src="//assets.pinterest.com/js/pinit.js"></script>
					</div>
				</div>
			
	<?php endwhile; // end of the loop. ?>
</div>

<?php get_footer(); ?>