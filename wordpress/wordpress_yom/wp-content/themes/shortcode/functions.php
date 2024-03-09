<?php 

function hello_shortcode()
{
	return '<h1>hello world</h1>';
}
add_action('init','custome_shortcode');

function custome_shortcode()
{
	add_shortcode('helloworld','hello_shortcode');
}

function nav_menu()
{
	register_nav_menus(array('header'=>'primary_menu'));
}
add_action('after_setup_theme','nav_menu');


function my_work_cat_taxonomy() {
 $args = array(
 'label' => __('Work Category'),
 'hierarchical' => true
 );
 register_taxonomy( 'work-cat', 'slider', $args );
}
add_action( 'init', 'my_work_cat_taxonomy');



function create_slider_post_type() {
 register_post_type( 'slider',
 array(
 'labels' => array( 
 'name' => __( 'Sliders' ),
 'singular_name' => __( 'Slider' )
 ),
 'public' => true,
 'has_archive' => true
 )
 );
}
add_action( 'init', 'create_slider_post_type');

function my_work_tag_taxonomy() {
 $args = array(
 'label' => __( 'Work Tags'),
 'hierarchical' => false
 );
 register_taxonomy( 'work-tag', 'slider', $args );
}
add_action( 'init', 'my_work_tag_taxonomy');


function yom_theme_sidebar() {
 register_sidebar( 
        array(
        'name' => 'Main Sidebar',
        'id' => 'blog-sidebar',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '<	/h2>',
        ) 
    );
}
add_action( 'widgets_init', 'yom_theme_sidebar');



 ?>