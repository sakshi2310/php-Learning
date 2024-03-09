<?php get_header(); ?>

<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<title>YOM - Multipurpose HTML Theme</title>


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
				<section class="page-heading wow fadeIn" data-wow-duration="1.5s" style="background-image: url(<?php echo get_template_directory_uri(); ?>/yom/files/images/01-heading.jpg)">
					<div class="container">
						<div class="page-name">
							<h1>Our <?php the_title(); ?></h1>
							<span>Lovely layout of heading</span>
						</div>
					</div>
				</section>

				<section class="call-to-action-1">
					<div class="container">
						<h4>Around 2,100 new user this month on YOM</h4>
						<p class="col-md-10 col-md-offset-1"><?php the_content(); ?></p>
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

				<section class="clients">
					<div class="container">
						<div class="section-heading">
							<h2>Our Clients</h2>
							<div class="section-dec"></div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-12">
							<div class="client-item">
								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/yom/files/images/01-client.png" alt=""></a>
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-12">
							<div class="client-item">
								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/yom/files/images/02-client.png" alt=""></a>
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-12">
							<div class="client-item">
								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/yom/files/images/03-client.png" alt=""></a>
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-12">
							<div class="client-item">
								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/yom/files/images/04-client.png" alt=""></a>
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-12">
							<div class="client-item">
								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/yom/files/images/05-client.png" alt=""></a>
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-12">
							<div class="client-item">
								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/yom/files/images/06-client.png" alt=""></a>
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-12">
							<div class="client-item">
								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/yom/files/images/07-client.png" alt=""></a>
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-12">
							<div class="client-item">
								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/yom/files/images/08-client.png" alt=""></a>
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-12">
							<div class="client-item">
								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/yom/files/images/09-client.png" alt=""></a>
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-12">
							<div class="client-item">
								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/yom/files/images/10-client.png" alt=""></a>
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-12">
							<div class="client-item">
								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/yom/files/images/11-client.png" alt=""></a>
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-12">
							<div class="client-item">
								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/yom/files/images/12-client.png" alt=""></a>
							</div>
						</div>
					</div>
				</section>
				<?php get_footer(); ?>
	</div>


	

	<script type="text/javascript" src="files/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="files/js/bootstrap.min.js"></script>
	<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script src="files/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="files/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

	<script type="text/javascript" src="files/js/plugins.js"></script>
	<script type="text/javascript" src="files/js/custom.js"></script>

</body>

</html>