 <?php
    /**
     * The header for our theme
     *
     * This is the template that displays all of the <head> section and everything up until <div id="content">
     *
     * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
     *
     * @package WP_luxury
     */

    ?>
    <!doctype html>
<html <?php language_attributes(); ?>>
  <head>
     <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="https://gmpg.org/xfn/11">


        <?php wp_head(); ?>
    </head>

<body>

        
        <!--================Top Header Area =================-->
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
          <a class="navbar-brand" href="http://localhost/luxury/home/"><img src="<?php echo wp_get_attachment_url(get_theme_mod ('custom_logo'));  ?>"></a>
          
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <?php
                wp_nav_menu( array(
                    'theme_location' => 'Primary Menu',
                    'menu_id'        => 'primary-menu',
                    'container'      => false,
                    'depth'          => 2,
                    'menu_class'     => 'navbar-nav ml-auto',
                    'walker'         => new Bootstrap_NavWalker(),
                    'fallback_cb'    => 'Bootstrap_NavWalker::fallback',
                 ) );
            ?>
  </div>
    </div>
</nav>