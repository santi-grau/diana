<?php
/* Template Name: Project */
?>
<?php get_header(); ?>

<header class="header-projects">
	<div class="header-box clearfix">
	    <a id="logo" href="/" class="clearfix">
	        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png" width="165" height="45">
	        <h2>PHOTO PRODUCTION <br/>ART DIRECTION <br/>& DESIGN</h2>
	    </a>
	    <nav>
	        <ul>
	            <li><a href="javascript:void(0)" class="menuitem active">see all projects</a></li>
	            <li><a href="javascript:void(0)" class="menuitem" onclick="modal('aboutModal')">about</a></li>
	            <li><a href="javascript:void(0)" class="menuitem" onclick="modal('contactModal')">contact</a></li>
	        </ul>
	    </nav>
	    <a id="main-title" href="javascript:void(0)" onclick="modaltoggle()">CIVIT · FALL/WINTER 14-15</a>
	</div>
</header>

<div id="main">

<div class="content project clearfix">
	<img class="project-item" src="<?php bloginfo('stylesheet_directory'); ?>/img/project-1.jpg" width="449" height="692">
	<span href="javascript:void(0)" class="like"></span>
	<img class="project-item" src="<?php bloginfo('stylesheet_directory'); ?>/img/project-2.jpg" width="462" height="692">
	<span href="javascript:void(0)" class="like"></span>
	<p class="project-info">PHOTOGRAPHY: RAUL RUZ | STYLISM: MONICA ZAFRA | MAKE-UP&HAIR: JOSE SEQUI</p>
	<img class="project-item" src="<?php bloginfo('stylesheet_directory'); ?>/img/project-3.jpg" width="462" height="647">
	<span href="javascript:void(0)" class="like"></span>
	<img class="project-item" src="<?php bloginfo('stylesheet_directory'); ?>/img/project-4.jpg" width="447" height="676">
	<span href="javascript:void(0)" class="like"></span>
	<img class="project-item" src="<?php bloginfo('stylesheet_directory'); ?>/img/project-5.jpg"  width="1200" height="706">
	<span href="javascript:void(0)" class="like"></span>
	<img class="project-item" src="<?php bloginfo('stylesheet_directory'); ?>/img/project-6.jpg" width="1200" height="523">
	<span href="javascript:void(0)" class="like"></span>
	<iframe class="project-item" src="//player.vimeo.com/video/83851337" width="805" height="452" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
</div>


<?php get_footer(); ?>