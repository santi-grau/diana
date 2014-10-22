<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/normalize.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <script src="<?php bloginfo('stylesheet_directory'); ?>/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <header>
        	<div id="logo">
        		<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logoDB.gif" width="165" height="45">
        		<h2>PHOTO PRODUCTION <br/>ART DIRECTION <br/>& DESIGN</h2>
        	</div>
        	<nav>
        		<ul>
        			<li><a href="javascript:void(0)" class="active">see all projects</a></li>
        			<li><a href="javascript:void(0)" onclick="aboutbox()">about</a></li>
        			<li><a href="javascript:void(0)">contact</a></li>
        		</ul>
        	</nav>
        	<h3 id="main-title">all projects</h3>
        </header>

        <div id="main">
        	<div class="isotope">
        		<div class="item">
        			<a href="javascript:void(0)"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/home-1.jpg"></a>
        		</div>
        		<div class="item">
        			<a href="javascript:void(0)"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/home-2.jpg"></a>
        		</div>
        		<div class="item">
        			<a href="javascript:void(0)"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/home-3.jpg"></a>
        		</div>
        		<div class="item w2">
        			<a href="javascript:void(0)"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/home-4.jpg"></a>
        		</div>
        		<div class="item w3">
        			<a href="javascript:void(0)"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/home-5.jpg"></a>
        		</div>
        	</div>
        </div>

        <div id="about">
        	<a class="shader" href="javascript:void(0)" onclick="aboutbox()"></a>
        	<div class="about-box">
        		<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logoDB-t.png" width="165" height="45">
        		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In interdum dolor in risus mattis lobortis at a nulla. Fusce tincidunt mauris sit amet ante consequat, vitae maximus neque pulvinar. Suspendisse sed elit id nibh molestie dignissim. Suspendisse ac libero metus.</p>
        	</div>
        </div>

        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/js/plugins.js"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/js/isotope.js"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
