<?php 

// Template Name: blog
// echo get_template_directory_uri();

 ?>

 <!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<title>YOM- Multipurpose HTML Theme</title>


	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/yom/files/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/yom/files/css/animate.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/yom/files/css/simple-line-icons.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/yom/files/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/yom/files/css/style.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/yom/files/rs-plugin/css/settings.css">

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->

</head>
<body>

	
	<div class="sidebar-menu-container" id="sidebar-menu-container">

		<div class="sidebar-menu-push">

			<div class="sidebar-menu-overlay"></div>

			<div class="sidebar-menu-inner">

				<?php get_header(); ?>

				<div class="slider">
					<div class="fullwidthbanner-container">
						<div class="fullwidthbanner">
							<ul>

								<?php 

								$args = array('post_type'=>'slider');

								$query = new WP_Query($args);

								while($query->have_posts())
								{
									$query->the_post();


								 ?>
								<li class="first-slide" data-transition="fade" data-slotamount="10" data-masterspeed="300">
									<?php the_post_thumbnail(); ?>
									<div class="tp-caption first-line lft tp-resizeme start" data-x="center" data-hoffset="0" data-y="250" data-speed="1000" data-start="200" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0"><?php the_title(); ?></div>
									<div class="tp-caption second-line lfb tp-resizeme start" data-x="center" data-hoffset="0" data-y="340" data-speed="1000" data-start="800" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0"><?php the_content(); ?></div>
									<div class="tp-caption slider-btn sfb tp-resizeme start" data-x="center" data-hoffset="0" data-y="510" data-speed="1000" data-start="2200" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0"><a href="#" class="btn btn-slider">Discover More</a></div>
								</li>
								<?php } ?>
								
							</ul>
						</div>
					</div>
				</div>
				
				

				<section class="services green">
					<div class="container">
						<div class="section-heading">
							<h2>What We Offer</h2>
							<div class="section-dec"></div>
						</div>
						<div class="service-item col-md-4">
							<span><i class="fa fa-support"></i></span>
							<div class="tittle"><h3>Stylish Design</h3></div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nam numquam voluptates cumque inventore, quibusdam corporis consequatur amet.</p>
						</div>
						<div class="service-item col-md-4">
							<span><i class="fa fa-cogs"></i></span>
							<div class="tittle"><h3>Fully Responsive</h3></div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nam numquam voluptates cumque inventore, quibusdam corporis consequatur amet.</p>
						</div>
						<div class="service-item col-md-4">
							<span><i class="fa fa-eye"></i></span>
							<div class="tittle"><h3>Retina Ready</h3></div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nam numquam voluptates cumque inventore, quibusdam corporis consequatur amet.</p>
						</div>
					</div>
				</section>
				
				
				<section class="call-to-action-1">
					<div class="container">
						<h4>Over 3000 people already downloaded YOM</h4>
						<p class="col-md-10 col-md-offset-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat quod voluptate consequuntur ad quasi, dolores obcaecati ex aliquid, dolor provident accusamus omnis dolorum ipsam. Voluptatem ipsum expedita, corporis facilis laborum asperiores nostrum! Amet porro numquam ratione temporibus quia dolorem sint lorem voluptates quasi mollitia.</p>
						<div class="buttons">
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="border-btn"><a href="#">Learn More</a></div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="btn-black"><a href="#">Buy This Theme</a></div>
							</div>
						</div>
					</div>	
				</section>
				

				<section class="call-to-action-2">
					<div class="container">
					<div class="left-text hidden-xs">
						<h4>To know about this theme read this</h4>
						<p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi ut explicabo magni sapiente.</em><br><br>Inventore at quia, vel in repellendus, cumque dolorem autem ad quidem mollitia porro blanditiis atque rerum debitis eveniet nostrum aliquam. Sint aperiam expedita sapiente amet officia quis perspiciatis adipisci, iure dolorem esse exercitationem!</p>
					</div>
						<div class="right-image hidden-xs"></div>
					</div>
				</section>

				<section class="portfolio">
					<div class="container">
						<div class="section-heading-white">
							<h2>Recent Photos</h2>
							<div class="section-dec"></div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div id="owl-portfolio" class="owl-carousel owl-theme">
									<?php 
								

									while(have_posts()){ 

											the_post();

										?>
										<div class="item">
								  		<figure>
				      
				        					<?php the_post_thumbnail(); ?>
				        					<figcaption>
				            					<h3><?php the_title(); ?></h3>
				            					<p><?php the_content(); ?></p>
				        					</figcaption>
				    					</figure>								    
				    				</div>
				    			<?php } ?>
								</div>
							</div>
						</div>
						<div class="owl-navigation">
						  <a class="btn prev fa fa-angle-left"></a>
						  <a class="btn next fa fa-angle-right"></a>
						  <a href="work-3columns.html" class="go-to">Go to portfolio</a>
						</div>
					</div>
				</section>

				<section class="testimonials">
					<div class="container">
						<div class="section-heading">
							<h2>What Others saying</h2>
							<div class="section-dec"></div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div id="owl-demo" class="owl-carousel owl-theme">
									<div class="item">
								  		<div class="testimonials-post">
								  			<span class="fa fa-quote-left"></span>
								  			<p>“ At vero eos et accusamus et iusto odio dignissimos ducimus qui molestias excepturi blanditis ”</p>
								  			<h6>Ramshad Imeri - <em>India,Malappura</em></h6>
								  		</div>
								    </div>
								    <div class="item">
								  		<div class="testimonials-post">
								  			<span class="fa fa-quote-left"></span>
								  			<p>“ At vero eos et accusamus et iusto odio dignissimos ducimus qui molestias excepturi blanditis ”</p>
								  			<h6>Akhil Luis - <em>India, Calicut</em></h6>
								  		</div>
								    </div>
								    <div class="item">
								  		<div class="testimonials-post">
								  			<span class="fa fa-quote-left"></span>
								  			<p>“ At vero eos et accusamus et iusto odio dignissimos ducimus qui molestias excepturi blanditis ”</p>
								  			<h6>Ramkumar - <em>Munnar, Kerala</em></h6>
								  		</div>
								    </div>
								    <div class="item">
								  		<div class="testimonials-post">
								  			<span class="fa fa-quote-left"></span>
								  			<p>“ At vero eos et accusamus et iusto odio dignissimos ducimus qui molestias excepturi blanditis ”</p>
								  			<h6>Sajit OB - <em>Berlin, Germany</em></h6>
								  		</div>
								    </div>
								    <div class="item">
								  		<div class="testimonials-post">
								  			<span class="fa fa-quote-left"></span>
								  			<p>“ At vero eos et accusamus et iusto odio dignissimos ducimus qui molestias excepturi blanditis ”</p>
								  			<h6>Anithamol Benny - <em>Thodupuzha, Kottayam</em></h6>
								  		</div>
								    </div>
								    <div class="item">
								  		<div class="testimonials-post">
								  			<span class="fa fa-quote-left"></span>
								  			<p>“ At vero eos et accusamus et iusto odio dignissimos ducimus qui molestias excepturi blanditis ”</p>
								  			<h6>Sreejith Rajan - <em>India, Alappuzha</em></h6>
								  		</div>
								    </div>
								    <div class="item">
								  		<div class="testimonials-post">
								  			<span class="fa fa-quote-left"></span>
								  			<p>“ At vero eos et accusamus et iusto odio dignissimos ducimus qui molestias excepturi blanditis ”</p>
								  			<h6>Aneeshkumar - <em>Kakkanad ,Cochin</em></h6>
								  		</div>
								    </div>
								    <div class="item">
								  		<div class="testimonials-post">
								  			<span class="fa fa-quote-left"></span>
								  			<p>“ At vero eos et accusamus et iusto odio dignissimos ducimus qui molestias excepturi blanditis ”</p>
								  			<h6>Rohit Sarma - <em>Gurgaon, India</em></h6>
								  		</div>
								    </div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="call-to-action-3">
					<div class="container">
						<div class="col-md-12">
							<h4 class="col-md-10 col-sm-8">Read your lastest newsletters, we have an offer for you!</h4>
							<div class="btn-black col-md-2 col-sm-4"><a href="#">Take it now</a></div>
						</div>
					</div>
				</section>

				<section class="blog-posts">
					<div class="container">
						<div class="section-heading">
							<h2>Latest Posts</h2>
							<div class="section-dec"></div>
						</div>
						<?php $args = array('post_type'=>'photo');

								$loop = new WP_Query($args);

								while($loop->have_posts())
								{
									$loop->the_post();
								 ?>
								
						<div class="blog-item">
							<div class="col-md-4">
								<a href="blog-single.html"><?php the_post_thumbnail(); ?></a>
								<h3><a href="blog-single.html"><?php the_title(); ?></a></h3>
								<span><a href="#"></a> / <a href="#">6 June 2015</a> / <a href="#">Uncategorized</a></span>
								<p><?php the_content(); ?></p>
								<div class="read-more">
									<a href="<?php the_permalink(69); ?>">Read more</a>
								</div>
							</div>
						</div>
						<?php } ?>
						
					</div>
				</section>
          <div class="spacing"></div>
        </div>

        <?php get_footer(); ?>
     </div>


	

	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/yom/files/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/yom/files/js/bootstrap.min.js"></script>
	<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script src="<?php echo get_template_directory_uri(); ?>/yom/files/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/yom/files/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/yom/files/js/plugins.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/yom/files/js/custom.js"></script>

</body>
</html>