<?php 

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

                <header class="site-header">
                    <div id="main-header" class="main-header header-sticky">
                        <div class="inner-header clearfix">
                            <div class="logo">
                                <a href="index-2.html">YOM</a>
                            </div>
                            <div class="header-right-toggle pull-right hidden-md hidden-lg">
                                <a href="javascript:void(0)" class="side-menu-button"><i class="fa fa-bars"></i></a>
                            </div>
                            <nav class="main-navigation pull-right hidden-xs hidden-sm">
                                <ul>
                                    <?php wp_nav_menu(array('header'=>'primary_menu')); ?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </header>
            </div>
        </div>
    </div>
  

   

</body>
</html>