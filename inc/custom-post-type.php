<?php

function register_custom_post_types() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'testimonials', 'Post Type General Name', 'wp_luxury' ),
        'singular_name'       => _x( 'testimonials', 'Post Type Singular Name', 'wp_luxury' ),
        'menu_name'           => __( 'testimonials', 'wp_luxury' ),
        'parent_item_colon'   => __( 'Parent testimonials', 'wp_luxury' ),
        'all_items'           => __( 'All testimonials', 'wp_luxury' ),
        'view_item'           => __( 'View testimonials', 'wp_luxury' ),
        'add_new_item'        => __( 'Add New testimonials', 'wp_luxury' ),
        'add_new'             => __( 'Add New', 'wp_luxury' ),
        'edit_item'           => __( 'Edit testimonials', 'wp_luxury' ),
        'update_item'         => __( 'Update testimonials', 'wp_luxury' ),
        'search_items'        => __( 'Search testimonials', 'wp_luxury' ),
        'not_found'           => __( 'Not Found', 'wp_luxury' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'wp_luxury' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'testimonials', 'wp_luxury' ),
        'description'         => __( 'Pictures and Text', 'wp_luxury' ),
        'labels'              => $labels,
        'menu_icon'   => 'dashicons-products',
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title' ,'editor', 'thumbnail','customfields', 'page-attributes' ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A nonhierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'testimonials', $args );
 
}

 
// add_action( 'init', 'testimonials_post_type', 0 );


add_action('add_meta_boxes', 'designation_box');

function designation_box() {

	add_meta_box(

		'designation_box',

		__('Additional Information ', 'wp_luxury'),
		'designation_box_content',
		'testimonials'
	);

}

function designation_box_content($post) {

	wp_nonce_field( plugin_basename(__FILE__), 'designation_meta_box_content_nonce');
	?> <label for="designation_box_detail">Designation</label>
	 <input type="textarea" id= "designation_box_detail" name="designation" value="<?php echo esc_attr( get_post_meta( $post->ID, 'designation', true ) ); ?>" >
<?php }



add_action ('save_post', 'add_designation_meta_box_save');
function add_designation_meta_box_save($post_id) {

    if(isset($_POST['designation_meta_box_content_nonce'])){

        if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return;
        if (!wp_verify_nonce($_POST['designation_meta_box_content_nonce'], plugin_basename(__FILE__)))
            return;
        if('page' == $_POST['post_type']){
            if(!current_user_can('edit_page', $post_id))
                return;
        }else{
            if(!current_user_can('edit_post', $post_id))
                return;
        }
            $designation= $_POST['designation'];
            update_post_meta($post_id, 'designation', $designation);
           
    }
        
}




 

add_action('init', 'register_custom_post_types', 0);


// add_action( 'init', 'experts_post_type', 0 );


add_action('add_meta_boxes', 'add_meta_boxs');

function add_meta_boxs() {

	add_meta_box(

		'add_meta_boxs',
		__('Person', 'wp_luxury'),
		'add_meta_boxs_content',
		'experts'
	);

}

function add_meta_boxs_content($post) {
// echo '<pre>';    print_r($post);exit;

	wp_nonce_field( plugin_basename(__FILE__), 'add_meta_boxs_content_nonce');
    ?>
	 <label for="add_meta_boxs_detail">Post of the person</label>
	 <input type="text" id= "add_meta_boxs_detail" name="post_of_the_person" value="<?php echo esc_attr( get_post_meta( $post->ID, 'post_of_the_person', true ) ); ?>">
	 <label for="add_meta_boxs_num">Phone Number</label>
	 <input type="text" id= "add_meta_boxs_num" name="phone_number" value="<?php echo esc_attr( get_post_meta( $post->ID, 'phone_number', true ) ); ?>">
     <label for="add_meta_boxs_mail">Email</label>
     <input type="text" id= "add_meta_boxs_mail" name="email_id" value="<?php echo esc_attr( get_post_meta( $post->ID, 'email_id', true ) ); ?>">
	
<?php }


add_action ('save_post', 'add_meta_boxs_save');
function add_meta_boxs_save($post_id) {

  if(isset($_POST['add_meta_boxs_content_nonce'])){

    if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
            return;
        if (!wp_verify_nonce($_POST['add_meta_boxs_content_nonce'], plugin_basename(__FILE__)))
            return;
        if('page' == $_POST['post_type']){
            if(!current_user_can('edit_page', $post_id))
                return;
        }else{
            if(!current_user_can('edit_post', $post_id))
                return;
        }
            $post_of_the_person = $_POST['post_of_the_person'];
            update_post_meta($post_id, 'post_of_the_person', $post_of_the_person);
            $phone_number = $_POST['phone_number'];
            update_post_meta($post_id, 'phone_number', $phone_number);
            $email_id = $_POST['email_id'];
            update_post_meta($post_id, 'email_id', $email_id);
            

    }
	
}



function luxury_custom_post_types_rewrite_flush()
{

    register_custom_post_types();

    flush_rewrite_rules();
}

register_activation_hook(__FILE__, 'luxury_custom_post_types_rewrite_flush');

