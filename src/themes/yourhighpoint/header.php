<!DOCTYPE html>
<!--#if expr="$HTTP_COOKIE=/fonts\-loaded\=true/" -->
<html <?php language_attributes(); ?> class="fonts-loaded">
<!--#else -->
<html <?php language_attributes(); ?>>
<!--#endif -->
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php bloginfo('name'); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:900|Open+Sans:400,600,700&display=swap" rel="stylesheet">
    <!--<script src="https://kit.fontawesome.com/61d303198f.js" crossorigin="anonymous"></script>-->
    <script type="text/javascript"> (function() { var css = document.createElement('link'); css.href = 'https://use.fontawesome.com/releases/v5.1.0/css/all.css'; css.rel = 'stylesheet'; css.type = 'text/css'; document.getElementsByTagName('head')[0].appendChild(css); })(); </script>


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php get_template_part('partials/header/main-nav'); ?>