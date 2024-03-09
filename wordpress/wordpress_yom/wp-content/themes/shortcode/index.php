09:45 AM 14-10-202309:50 AM 14-10-2023<?php 

echo do_shortcode('[helloworld]');

wp_nav_menu(array('theme_location'=>'header'));


// while(have_posts())
// {
// 	the_post();

// 	the_title();
// 	the_content();
// 	the_post_thumbnail();
// 	echo get_the_term_list($post->ID,'work-cat','Categories:',',',',');
// }


 ?>

 <?php

 $image = array('post_type'=>'slider');
 $loop = new WP_Query($image);

  if ($loop->have_posts() ) : 

  	?>
 <?php while ($loop->have_posts() ) : $loop->the_post(); ?>
 	<h1><?php the_title(); ?></h1>
<?php echo get_the_term_list( $post->ID,'work-cat', 'Categories : ', ', ', '');
 ?>
 <?php 
 echo get_the_term_list( $post->ID, 'work-tag', 'Tags : ', ', ', '' ); 
  ?>

 <?php endwhile; ?>
<?php endif; ?>

<?php if ( is_active_sidebar( 'blog-sidebar' ) ) { ?>
 <ul id="sidebar">
 <?php dynamic_sidebar('blog-sidebar'); ?>
 </ul>
<?php } ?>