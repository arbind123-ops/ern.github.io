<?php
/**
 * Luxury Wp Theme Customizer
 *
 * @package Luxury_Wp
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function luxury_wp_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'luxury_wp_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'luxury_wp_customize_partial_blogdescription',
		) );
	}


	  $wp_customize->add_panel( 'static_home_page' , array(
        'title'     => 'Static Front Page','wp_luxury',
        'priority'   => '1',
    ) );

	   $wp_customize->add_section( 'banner_section' , array(
        'title'     => 'Banner section','wp_luxury',
        'panel'    => 'static_home_page',
        'priority'   => '1',
    
    ));
     $wp_customize->add_setting('banner_title', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_control($wp_customize,'banner_title', array(
        'label' => __('Title','wp_luxury'),
        'section' => ('banner_section'),
        'setting' => ('banner_title'),
        'type' => ('text'),
        'priority => ',
    )));

     $wp_customize->add_setting('banner_subtitle', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_control($wp_customize,'banner_subtitle', array(
        'label' => __('Title','wp_luxury'),
        'section' => ('banner_section'),
        'setting' => ('banner_subtitle'),
        'type' => ('textarea'),
        'priority => ',
    )));

     $wp_customize->add_setting('banner_subtitle', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_control($wp_customize,'banner_subtitle', array(
        'label' => __('Title','wp_luxury'),
        'section' => ('banner_section'),
        'setting' => ('banner_subtitle'),
        'type' => ('textarea'),
        'priority => ',
    )));

    
    $wp_customize->add_setting( 'banner_section_image' , array(
        'default'     => get_template_directory_uri().'/img/banner-bg.png',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_control( $wp_customize, 'banner_section_image', array(
        'label'      => __( 'Image', 'wp_luxury' ),
        'section'    => 'banner_section',
        'settings'   => 'banner_section_image',
        'priority   => 1',
    ) ) );
    $wp_customize->add_setting( 'plane_image' , array(
        'default'     => get_template_directory_uri().'/img/upperx.png',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_control( $wp_customize, 'plane_image', array(
        'label'      => __( 'Plane Image', 'wp_luxury' ),
        'section'    => 'banner_section',
        'settings'   => 'plane__image',
        'priority   => 1',
    ) ) );

    /** destination and Offers Section

	**/

	 $wp_customize->add_section( 'destination_section' , array(
        'title'     => 'Destination Section','wp_luxury',
        'panel'    => 'static_home_page',
        'priority'   => '1',
    
    ));

	 $wp_customize->add_setting('destination_title', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_control($wp_customize,'destination_title', array(
        'label' => __('destination Title','wp_luxury'),
        'section' => ('destination_section'),
        'setting' => ('destination_title'),
        'type' => ('text'),
        'priority => ',
    )));

     $wp_customize->add_setting('destination_subtitle', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_control($wp_customize,'destination_subtitle', array(
        'label' => __('SubTitle','wp_luxury'),
        'section' => ('destination_section'),
        'setting' => ('destination_subtitle'),
        'type' => ('text'),
        'priority => ',
    )));

     	
    
    Kirki::add_field( 'destination_area', [
    'type'        => 'repeater',
    'label'       => esc_attr__( 'Your account service area', 'wp_luxury' ),
    'section'     => 'destination_section',
    'priority'    => 10,
    'row_label' => [
        'type'  => 'field',
        'value' => esc_html__( 'Post ', 'wp_luxury' ),
        'field' => 'account',
    ],
    'settings'    => 'my_repeater_setting1',
    'fields' => [

        'img' => [

    	'type'        => 'image',
        // 'settings'    => 'radio-image',
        'label'       => esc_attr__( 'Add icon for the post', 'wp_luxury' ),
        'default'	=> '',

        ],
        'title' => [
            'type'        => 'text',
            'label'       => esc_html__( 'Location Name', 'wp_luxury' ),
            'description' => esc_html__( 'Lorem Ipsum is simply dummy text of the printing', 'wp_luxury' ),
            ],
        'subtitle' => [
            'type'        => 'text',
            'label'       => esc_html__( 'Nation', 'wp_luxury' ),
            'description' => esc_html__( 'Lorem Ipsum is simply dummy text of the printing', 'wp_luxury' ),
    ],
],
    
    
] );

         $wp_customize->add_section( 'offer_section' , array(
        'title'     => 'Offer Section','wp_luxury',
        'panel'    => 'static_home_page',
        'priority'   => '1',
    
    ));

     $wp_customize->add_setting('offer_title', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_control($wp_customize,'offer_title', array(
        'label' => __('offer Title','wp_luxury'),
        'section' => ('offer_section'),
        'setting' => ('offer_title'),
        'type' => ('text'),
        'priority => ',
    )));

     $wp_customize->add_setting('offer_subtitle', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_control($wp_customize,'offer_subtitle', array(
        'label' => __('SubTitle','wp_luxury'),
        'section' => ('offer_section'),
        'setting' => ('offer_subtitle'),
        'type' => ('text'),
        'priority => ',
    )));

 Kirki::add_field( 'offer_area', [
    'type'        => 'repeater',
    'label'       => esc_attr__( 'Your account service area', 'wp_luxury' ),
    'section'     => 'offer_section',
    'priority'    => 10,
    'row_label' => [
        'type'  => 'field',
        'value' => esc_html__( 'Post ', 'wp_luxury' ),
        'field' => 'account',
    ],
    'settings'    => 'my_repeater_setting2',
    'fields' => [

        'img' => [

        'type'        => 'image',
        // 'settings'    => 'radio-image',
        'label'       => esc_attr__( 'Add image for the post', 'wp_luxury' ),
        'default'   => '',

        ],
        'title' => [
            'type'        => 'text',
            'label'       => esc_html__( 'Title of Place', 'wp_luxury' ),
            'description' => esc_html__( 'Lorem Ipsum is simply dummy text of the printing', 'wp_luxury' ),
            ],
        'subtitle' => [
            'type'        => 'text',
            'label'       => esc_html__( 'Number Of Days', 'wp_luxury' ),
            'description' => esc_html__( 'Lorem Ipsum is simply dummy text of the printing', 'wp_luxury' ),
    ],
],
    
    
] );




     $wp_customize->add_section( 'blog_section' , array(
        'title'     => 'Blog Section','wp_luxury',
        'panel'    => 'static_home_page',
        'priority'   => '1',
    
    ));


    $wp_customize->add_setting('blog_title', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_control($wp_customize,'blog_title', array(
        'label' => __('Title','wp_luxury'),
        'section' => ('blog_section'),
        'setting' => ('blog_title'),
        'type' => ('text'),
        'priority => ',
    )));
     $wp_customize->add_setting('blog_subtitle', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_control($wp_customize,'blog_subtitle', array(
        'label' => __('SubTitle','wp_luxury'),
        'section' => ('blog_section'),
        'setting' => ('blog_subtitle'),
        'type' => ('text'),
        'priority => ',
    )));

     $wp_customize->add_setting('blog_subdescription', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_control($wp_customize,'blog_subdescription', array(
        'label' => __('Sub Description','wp_luxury'),
        'section' => ('blog_section'),
        'setting' => ('blog_subdescription'),
        'type' => ('text'),
        'priority => ',
    )));





    /*** about-us ***/

     $wp_customize->add_section('about_us_section', array(
        'title' => 'About Us Section','wp_luxury',
        'panel' => 'static_home_page',
        'priority => 1',
    ));

     $wp_customize->add_setting('about_title', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_control($wp_customize,'about_title', array(
        'label' => __('Title','wp_luxury'),
        'section' => ('about_us_section'),
        'setting' => ('about_title'),
        'type' => ('text'),
        'priority => ',
    )));



Kirki::add_field( 'about_us', [
    'type'        => 'dropdown-pages',
    'settings'    => 'my_setting4',
    'label'       => esc_html__( 'This is the label', 'kirki' ),
    'section'     => 'about_us_section',
    'default'     => 42,
    'priority'    => 10,

] );

$wp_customize->add_setting( 'first_about_image' , array(
        'default'     => get_template_directory_uri().'/img/a.jpg',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_control( $wp_customize, 'first_about_image', array(
        'label'      => __( 'Image', 'wp_luxury' ),
        'section'    => 'about_us_section',
        'settings'   => 'first_about_image',
        'priority   => 1',
    ) ) );

     $wp_customize->add_setting( 'second_about_image' , array(
        'default'     => get_template_directory_uri().'/img/277.png',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_control( $wp_customize, 'second_about_image', array(
        'label'      => __( 'Image', 'wp_luxury' ),
        'section'    => 'about_us_section',
        'settings'   => 'second_about_image',
        'priority   => 1',
    ) ) );

$wp_customize->add_section( 'insta_section' , array(
        'title'     => 'Instagram Section','wp_luxury',
        'panel'    => 'static_home_page',
        'priority'   => '1',
    
    ));


    $wp_customize->add_setting('insta_title', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_control($wp_customize,'insta_title', array(
        'label' => __('Title','wp_luxury'),
        'section' => ('insta_section'),
        'setting' => ('insta_title'),
        'type' => ('text'),
        'priority => ',
    )));
     $wp_customize->add_setting('insta_subtitle', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_control($wp_customize,'insta_subtitle', array(
        'label' => __('SubTitle','wp_luxury'),
        'section' => ('insta_section'),
        'setting' => ('insta_subtitle'),
        'type' => ('text'),
        'priority => ',
    )));

     $wp_customize->add_setting( 'first_insta_image' , array(
        'default'     => get_template_directory_uri().'/img/mustangjeep-2.png',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_control( $wp_customize, 'first_insta_image', array(
        'label'      => __( 'Image', 'wp_luxury' ),
        'section'    => 'insta_section',
        'settings'   => 'first_insta_image',
        'priority   => 1',
    ) ) );

     $wp_customize->add_setting( 'second_insta_image' , array(
        'default'     => get_template_directory_uri().'/img/post-6.png',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_control( $wp_customize, 'second_insta_image', array(
        'label'      => __( 'Image', 'wp_luxury' ),
        'section'    => 'insta_section',
        'settings'   => 'second_insta_image',
        'priority   => 1',
    ) ) );

     $wp_customize->add_setting( 'third_insta_image' , array(
        'default'     => get_template_directory_uri().'/img/post4.png',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_control( $wp_customize, 'third_insta_image', array(
        'label'      => __( 'Image', 'wp_luxury' ),
        'section'    => 'insta_section',
        'settings'   => 'third_insta_image',
        'priority   => 1',
    ) ) );


 $wp_customize->add_section( 'why_choose_us_section' , array(
        'title'     => 'Why choose us Section','wp_luxury',
        'panel'    => 'static_home_page',
        'priority'   => '1',
    
    ));


    $wp_customize->add_setting('why_choose_us_title', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_control($wp_customize,'why_choose_us_title', array(
        'label' => __('Title','wp_luxury'),
        'section' => ('why_choose_us_section'),
        'setting' => ('why_choose_us_title'),
        'type' => ('text'),
        'priority => ',
    )));
     $wp_customize->add_setting('why_choose_us_subtitle', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_control($wp_customize,'why_choose_us_subtitle', array(
        'label' => __('Subtitle','wp_luxury'),
        'section' => ('why_choose_us_section'),
        'setting' => ('why_choose_us_subtitle'),
        'type' => ('text'),
        'priority => ',
    )));

    Kirki::add_field( 'chooseus_area', [
    'type'        => 'repeater',
    'label'       => esc_attr__( 'Your account service area', 'wp_luxury' ),
    'section'     => 'why_choose_us_section',
    'priority'    => 10,
    'row_label' => [
        'type'  => 'field',
        'value' => esc_html__( 'Post ', 'wp_luxury' ),
        'field' => 'luxury',
    ],
    'settings'    => 'my_repeater_setting5',
    'fields' => [

      
        'title' => [
            'type'        => 'text',
            'label'       => esc_html__( 'Title', 'wp_luxury' ),
            'description' => esc_html__( 'Lorem Ipsum is simply dummy text of the printing', 'wp_luxury' ),
            ],
        'subtitle' => [
            'type'        => 'textarea',
            'label'       => esc_html__( 'SubTitle', 'wp_luxury' ),
            'description' => esc_html__( 'Lorem Ipsum is simply dummy text of the printing', 'wp_luxury' ),
    ],
],
    
    
] );

$wp_customize->add_section( 'testimonial_section' , array(
        'title'     => 'Testimonial Section','wp_luxury',
        'panel'    => 'static_home_page',
        'priority'   => '1',
    
    ));


    $wp_customize->add_setting('testimonial_title', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_control($wp_customize,'testimonial_title', array(
        'label' => __('Title','wp_luxury'),
        'section' => ('testimonial_section'),
        'setting' => ('testimonial_title'),
        'type' => ('text'),
        'priority => ',
    )));

     $wp_customize->add_setting('testimonial_subtitle', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_control($wp_customize,'testimonial_subtitle', array(
        'label' => __('Subtitle','wp_luxury'),
        'section' => ('testimonial_section'),
        'setting' => ('testimonial_subtitle'),
        'type' => ('textarea'),
        'priority => ',
    )));

    $wp_customize->add_setting( 'first_testi_image' , array(
        'default'     => get_template_directory_uri().'/img/7.png',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_control( $wp_customize, 'first_testi_image', array(
        'label'      => __( 'Image', 'wp_luxury' ),
        'section'    => 'testimonial_section',
        'settings'   => 'first_testi_image',
        'priority   => 1',
    ) ) );

     $wp_customize->add_setting( 'second_testi_image' , array(
        'default'     => get_template_directory_uri().'/img/8.png',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_control( $wp_customize, 'second_testi_image', array(
        'label'      => __( 'Image', 'wp_luxury' ),
        'section'    => 'testimonial_section',
        'settings'   => 'second_testi_image',
        'priority   => 1',
    ) ) );


    $wp_customize->add_section( 'subscribe_section' , array(
        'title'     => 'Subscribe Section','wp_luxury',
        'panel'    => 'static_home_page',
        'priority'   => '1',
    
    ));

    $wp_customize->add_setting('subscribe_title', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_control($wp_customize,'subscribe_title', array(
        'label' => __('Title','wp_luxury'),
        'section' => ('subscribe_section'),
        'setting' => ('subscribe_title'),
        'type' => ('textarea'),
        'priority => ',
    )));

    $wp_customize->add_setting( 'subscribe_button_title' , array(
        'default'     => 'Contact Us',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_control( $wp_customize, 'subscribe_button_title', array(
        'label'      => __( 'Subscribe Title', 'wp_accounting' ),
        'section'    => 'subscribe_section',
        'settings'   => 'subscribe_button_title',
        'priority   => 3',
    ) ) );
    $wp_customize->add_setting( 'subscribe_button_link' , array(
        'default'     => 'contact-us',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_control( $wp_customize, 'subscribe_button_link', array(
        'label'      => __( 'Subscribe Button Link', 'wp_accounting' ),
        'section'    => 'subscribe_section',
        'settings'   => 'subscribe_button_link',
        'priority   => 4',
    ) ) );



$wp_customize->add_setting('contactform_title', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_control($wp_customize,'contactform_title', array(
        'label' => __('Shortcode for Contact Form','wp_luxury'),
        'section' => ('subscribe_section'),
        'setting' => ('contactform_title'),
        'type' => ('text'),
        'priority => 1',

    )));




     




    
    















	}
	add_action( 'customize_register', 'luxury_wp_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function luxury_wp_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function luxury_wp_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function luxury_wp_customize_preview_js() {
	wp_enqueue_script( 'luxury_wp-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'luxury_wp_customize_preview_js' );
