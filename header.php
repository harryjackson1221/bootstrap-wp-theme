<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>

<body id="page-top" <?php body_class(); ?>>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
      </button>
      <div class="navbar-collapse collapse" id="navbarResponsive" data-toggle="false">

        <?php wp_nav_menu( 
          array(
            'theme_location'    => 'primary-menu',
            'depth'             => 2,
            'container'         => '',
            'container_class'   => '',
            'container_id'      => 'navbarResponsive',
            'menu_class'        => 'ml-auto navbar-nav',
            'classes'           => 'nav-item',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker()
          ) ); 
        ?>

      </div>
    </div>
  
      </div>
    </div>
  </nav>