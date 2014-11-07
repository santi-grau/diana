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
        <?php wp_head(); ?> 
    </head>
    <body>
        <!-- Go to www.addthis.com/dashboard to customize your tools -->
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-545c049a09e8e2ae" async="async"></script>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <header class="home-header">
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
                <a id="main-title" href="javascript:void(0)" onclick="modaltoggle()"><?php the_title() ?></a>
            </div>
        </header>

        <div id="main">