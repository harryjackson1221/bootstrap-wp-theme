
<!-- Begin Footer -->
    <footer>
      <div class="container">
        <p>&copy; 2017 <?php bloginfo( 'name' ); ?>. All Rights Reserved.</p>
        <?php wp_nav_menu( 
          array(
            'theme_location'    => 'footer-menu',
            'depth'             => 1,
            'container'         => 'div',
            'container_class'   => 'container',
            'container_id'      => '',
            'menu_class'        => 'list-inline',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker()
          ) ); 
        ?>
        
      </div>
    </footer>

  </body>
<?php wp_footer(); ?>
</html>