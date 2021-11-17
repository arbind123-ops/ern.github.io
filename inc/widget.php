<?php 
function luxury_widgets_init() {
 
    register_sidebar( array(
        'name' => __( 'Quick Links', 'luxury' ),
        'id' => 'quick',
        'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'luxury' ),
        
        'before_title' => '<h5 class="widget-title">',
        'after_title' => '</h5>',
    ) );
 
    register_sidebar( array(
        'name' =>__( 'Contact Us', 'luxury'),
        'id' => 'contact',
        'description' => __( 'Appears on the static front page template', 'luxury' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h5 class="widget-title">',
        'after_title' => '</h5>',
    ) );

    register_sidebar( array(
        'name' =>__( 'About Us', 'luxury'),
        'id' => 'about',
        'description' => __( 'Appears on the static front page template', 'luxury' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' =>__( 'Copyright', 'luxury'),
        'id' => 'copy',
        'description' => __( 'Appears on the static front page template', 'luxury' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

      register_sidebar( array(
        'name' =>__( 'Social Sites', 'luxury'),
        'id' => 'social',
        'description' => __( 'Appears on the static front page template', 'luxury' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );


    }
 
add_action( 'widgets_init', 'luxury_widgets_init' );