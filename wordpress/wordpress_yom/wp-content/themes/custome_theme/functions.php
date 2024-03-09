<?php 

register_nav_menus(

	array('header'=>'primary_header'),
	array('footer'=>'primary_footer')

);

// add_theme_support('post-thumbnails');
function custome_slider() {
	register_post_type('slider',
		array(
			'labels'      => array(
				'name'          => 'sliders',
				'singular_name' => 'slider',
			),
				'public'      => true,
				'has_archive' => true,
				'supports'=>array('title','editor','thumbnail')
		)
	);
}
add_action('init', 'custome_slider');
add_theme_support('post-thumbnails');

function custome_blog() {
	register_post_type('blog',
		array(
			'labels'      => array(
				'name'          => 'blogs',
				'singular_name' => 'blog',
			),
				'public'      => true,
				'has_archive' => true,
				'supports'=>array('title','editor','thumbnail')
		)
	);
}

add_action('init', 'custome_blog');
add_theme_support('post-thumbnails');


function custome_product()
{
	register_post_type('product',
		array(
			'labels'=>array(
				'name'=>'products',
				'singular_name'=>'product'
			),
			'public'=>true,
			'has_archive'=>true,
			'supports'=>array('title','editor','thumbnail')
		)
	);
}
add_action('init','custome_product');
add_theme_support('post-thumbnails');
// function wporg_custom_post_type() {
// 	register_post_type('myproduct',
// 		array(
// 			'labels'      => array(
// 				'name'          => 'Products',
// 				'singular_name' => 'Product',
// 			),
// 				'public'      => true,
// 				'has_archive' => true,
// 		)
// 	);
// }
// add_action('init', 'wporg_custom_post_type');


// function wporg_custom_post_blog() {
// 	register_post_type('blog',
// 		array(
// 			'labels'      => array(
// 				'name'          => 'Blogs',
// 				'singular_name' => 'Blog',
// 			),
// 				'public'      => true,
// 				'has_archive' => true,
// 		)
// 	);
// }
// add_action('init', 'wporg_custom_post_blog');


function short_code_create()
{
	return '<h1>this is shortcode</h1>';
}
add_shortcode('create_shortcode','short_code_create');









 ?>