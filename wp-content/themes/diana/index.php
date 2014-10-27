<?php
/* Template Name: Home */
?>
<?php get_header(); ?>

<header class="clearfix">
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
    <a id="main-title" href="javascript:void(0)" onclick="modaltoggle()">all projects</a>
</header>

<div id="main">

<div class="content clearfix">
	<a href="project" class="item c3" style="background:url(<?php bloginfo('stylesheet_directory'); ?>/img/home-1.jpg) no-repeat center center">
		<div class="item-info-box">
			<div class="item-info-shader"></div>
			<div class="item-info">
			CIVIT F/W 14-15<br/>BY RAUL RUIZ<br>
			<span href="javascript:void(0)" class="like home-like"></span>
			</div>
		</div>
	</a>
	<a href="project" class="item c3" style="background:url(<?php bloginfo('stylesheet_directory'); ?>/img/home-2.jpg) no-repeat center center">
		<div class="item-info-box">
			<div class="item-info-shader"></div>
			<div class="item-info">
			CIVIT F/W 14-15<br/>BY RAUL RUIZ<br>
			<span href="javascript:void(0)" class="like home-like"></span>
			</div>
		</div>
	</a>
	<a href="project" class="item c3 last" style="background:url(<?php bloginfo('stylesheet_directory'); ?>/img/home-3.jpg) no-repeat center center">
		<div class="item-info-box">
			<div class="item-info-shader"></div>
			<div class="item-info">
			CIVIT F/W 14-15<br/>BY RAUL RUIZ<br>
			<span href="javascript:void(0)" class="like home-like"></span>
			</div>
		</div>
	</a>
	<a href="project" class="item c2" style="background:url(<?php bloginfo('stylesheet_directory'); ?>/img/home-4.jpg) no-repeat center center">
		<div class="item-info-box">
			<div class="item-info-shader"></div>
			<div class="item-info">
			CIVIT F/W 14-15<br/>BY RAUL RUIZ<br>
			<span href="javascript:void(0)" class="like home-like"></span>
			</div>
		</div>
	</a>
	<a href="project" class="item c3 last" style="background:url(<?php bloginfo('stylesheet_directory'); ?>/img/home-5.jpg) no-repeat center center">
		<div class="item-info-box">
			<div class="item-info-shader"></div>
			<div class="item-info">
			CIVIT F/W 14-15<br/>BY RAUL RUIZ<br>
			<span href="javascript:void(0)" class="like home-like"></span>
			</div>
		</div>
	</a>
</div>

<?php get_footer(); ?>