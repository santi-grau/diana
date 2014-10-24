<?php
/* Template Name: Project */
?>
<?php get_header(); ?>

<header>
    <a id="logo" href="/">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png" width="165" height="45">
        <h2>PHOTO PRODUCTION <br/>ART DIRECTION <br/>& DESIGN</h2>
    </a>
    <nav>
        <ul>
            <li><a href="javascript:void(0)" class="active">see all projects</a></li>
            <li><a href="javascript:void(0)" onclick="aboutbox()">about</a></li>
            <li><a href="javascript:void(0)" onclick="contactbox()">contact</a></li>
        </ul>
    </nav>
    <a id="main-title" href="javascript:void(0)" onclick="modaltoggle()">CIVIT · FALL/WINTER 14-15</a>
</header>

<div id="main">

<div class="isotope project">
	<a href="javascript:void(0)" class="item c1" style="background:url(<?php bloginfo('stylesheet_directory'); ?>/img/project-1.jpg) no-repeat center center">
		<span href="javascript:void(0)" class="like"></span>
	</a>
	<a href="javascript:void(0)" class="item c1" style="background:url(<?php bloginfo('stylesheet_directory'); ?>/img/project-2.jpg) no-repeat center center">
		<span href="javascript:void(0)" class="like"></span>
	</a>
	<p class="item">PHOTOGRAPHY: RAUL RUZ | STYLISM: MONICA ZAFRA | MAKE-UP&HAIR: JOSE SEQUI</p>
	<a href="javascript:void(0)" class="item c1" style="background:url(<?php bloginfo('stylesheet_directory'); ?>/img/project-3.jpg) no-repeat center center">
		<span href="javascript:void(0)" class="like"></span>
	</a>
	<a href="javascript:void(0)" class="item c1" style="background:url(<?php bloginfo('stylesheet_directory'); ?>/img/project-4.jpg) no-repeat center center">
		<span href="javascript:void(0)" class="like"></span>
	</a>
</div>

<?php get_footer(); ?>