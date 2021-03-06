<?php
/**
 * Fuctions for register Post Type Sevice
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 *
 * @package Cambodia_Portal
 */

function cam_portal_setup_service_post(){
    $labels = array(
        'name'               => _x( 'Administrative Sevices', 'post type general name', 'cam-portal' ),
		'singular_name'      => _x( 'Service', 'post type singular name', 'cam-portal' ),
		'menu_name'          => _x( 'Administrative Sevices', 'admin menu', 'cam-portal' ),
		'name_admin_bar'     => _x( 'Service', 'add new on admin bar', 'cam-portal' ),
		'add_new'            => _x( 'Add New', 'Service', 'cam-portal' ),
		'add_new_item'       => __( 'Add New Service', 'cam-portal' ),
		'new_item'           => __( 'New Service', 'cam-portal' ),
		'edit_item'          => __( 'Edit Service', 'cam-portal' ),
		'view_item'          => __( 'View Service', 'cam-portal' ),
		'all_items'          => __( 'All Sevices', 'cam-portal' ),
		'search_items'       => __( 'Search Administrative Sevices', 'cam-portal' ),
		'parent_item_colon'  => __( 'Parent Administrative Sevices:', 'cam-portal' ),
		'not_found'          => __( 'No Administrative Sevices found.', 'cam-portal' ),
		'not_found_in_trash' => __( 'No Administrative Sevices found in Trash.', 'cam-portal' )
    );
    $args = array(
        'labels'        => $labels,
        'public'        => true,
        'has_archive'   => true,
        'rewrite'       => array('slug' => 'service', 'with_front' => false),
		'menu_position' => 4,
		'supports'       => array('title'),
        'menu_icon'     => 'dashicons-book'
    );
    register_post_type('service', $args);
}
add_action ('init', 'cam_portal_setup_service_post');



