<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <!-- <title>Dev-theme</title> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/web/css/rsp.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/web/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/web/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>">
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Exo:100,300,400,700" rel="stylesheet">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url') ?>/web/js/jquery.slides.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url') ?>/web/js/bootstrap.min.js"></script>
    <!-- Nicescroll JavaScript -->
    <script src="<?php bloginfo('template_url') ?>/web/js/jquery.nicescroll.min.js"></script>
    <script>
    $( document ).ready(function() {
      $(function(){
        $("#slideshow").slidesjs({
          height: 260,
          navigation:false
        });
      });
    });
    </script>
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="principal container">
      <header>
        <div id="logo">
          <div class="col-md-5 row title col-xs-12">
            <?php if ( is_front_page() && is_home() ) : ?>
  						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
  					<?php else : ?>
  						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
  					<?php endif;
            $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?>
              <span><?php echo $description; ?></span>
            <?php endif; ?>
          </div>
          <!-- <div class="clearfix"></div> -->
          <div class="col-md-7 row  col-xs-12">
            <nav>
              <?php  wp_nav_menu(
                  array(
                    'container' => false,
                    'items_wrap' =>'<ul id="menu-top">%3$s</ul>',
                    'theme_location' => 'menu'
                  ));
                ?>
            </nav>
          </div>
        </div>
      </header>
