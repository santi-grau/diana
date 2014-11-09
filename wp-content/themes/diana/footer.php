        </div>

    <?php $query = new WP_Query( 'post_type=about&posts_per_page=-1&order=DESC' ); ?>
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <div class="modal about-box" id="aboutModal" onclick="closeModal()">
            <div class="box">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png" width="165" height="45">
                <p class="justify"><?php the_field('texto') ?></p>
            </div>
        </div>
    <?php endwhile; // end of the loop. ?>


    <?php $query = new WP_Query( 'post_type=contact&posts_per_page=-1&order=DESC' ); ?>
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <div class="modal contact-box" id="contactModal" onclick="closeModal()">
            <div class="box">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png" width="165" height="45">
                <p><?php the_field('informacion') ?></p>
                <ul class="social-icons">
                    <li><a class="social fb" href="http://<?php the_field('facebook') ?>" target="_blank"></a></li>
                    <li><a class="social tw" href="http://<?php the_field('twitter') ?>" target="_blank"></a></li>
                    <li><a class="social vimeo" href="http://<?php the_field('vimeo') ?>" target="_blank"></a></li>
                    <li><a class="social ig" href="http://<?php the_field('instagram') ?>" target="_blank"></a></li>
                </ul>
            </div>
        </div>
    <?php endwhile; // end of the loop. ?>

        <footer>
            DIANA BADA OTERO | <a>HELLO@DIANA-BADA.COM</a> | 93 319 83 94 · 610 90 00 24 | LEPANT 264, 3A 08013 BARCELONA (SPAIN)
        </footer>
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/js/plugins.js"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/js/isotope.js"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/js/project.js"></script>

        <script>
          window.fbAsyncInit = function() {
            FB.init({
              appId      : '1495891790678492',
              xfbml      : true,
              version    : 'v2.2'
            });
          };

          (function(d, s, id){
             var js, fjs = d.getElementsByTagName(s)[0];
             if (d.getElementById(id)) {return;}
             js = d.createElement(s); js.id = id;
             js.src = "//connect.facebook.net/en_US/sdk.js";
             fjs.parentNode.insertBefore(js, fjs);
           }(document, 'script', 'facebook-jssdk'));
        </script>

        <script type="text/javascript" async src="//assets.pinterest.com/js/pinit.js"></script>

        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>

         <?php wp_footer(); ?> 
    </body>
</html>