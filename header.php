<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
  <title>
    <?php echo get_bloginfo( 'name' ) . " " . get_bloginfo( 'description' )  ?>
  </title>
  <meta name="description" content="<?php echo get_bloginfo( 'description' )  ?>"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>     
  <header>
    <div class="container">
      <?php get_template_part('branding'); ?>
    </div>
    <!-- <?php wp_nav_menu( array('menu' => 'main-menu' )); ?> -->
  </header>