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

                
                <footer class="footer">
      <div class="three spacing"></div>
      <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h1>
            <a href="index.html">
             YOM
            </a>
          </h1>
          <p>©2015 Yom. All rights reserved.</p>
          <div class="spacing"></div>
          <ul class="socials">
            <li>
              <a href="http://facebook.com">
                <i class="fa fa-facebook"></i>
              </a>
            </li>
            <li>
              <a href="http://twitter.com">
                <i class="fa fa-twitter"></i>
              </a>
            </li>
            <li>
              <a href="http://dribbble.com">
                <i class="fa fa-dribbble"></i>
              </a>
            </li>
            <li>
              <a href="http://tumblr.com">
                <i class="fa fa-tumblr"></i>
              </a>
            </li>
          </ul>
          <div class="spacing"></div>
        </div>
        <div class="col-md-3">
          <div class="spacing"></div>
          <div class="links">
            <h4>Some pages</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">View some works here</a></li>
              <li><a href="#">Follow our blog</a></li>
              <li><a href="#">Contact us</a></li>
              <li><a href="#">Our services</a></li>
            </ul>
          </div>
          <div class="spacing"></div>
        </div>
        <div class="col-md-3">
          <div class="spacing"></div>
          <div class="links">
            <h4>Recent posts</h4>
            <ul>
              <!-- <li><a href="#">Hello World!</a></li>
              <li><a href="#">This is the post title here</a></li>
              <li><a href="#">Our happy day</a></li>
              <li><a href="#">The first works done</a></li>
              <li><a href="#">The cats and dogs</a></li> -->
              <?php wp_nav_menu(array('footer'=>'primary_footer
              ')); ?>
            </ul>
          </div>
          <div class="spacing"></div>
        </div>
        <div class="col-md-3">
          <div class="spacing"></div>
          <h4>Email updats</h4>
          <p>We want to share our latest trends, news and insights with you.</p>
          <form>
            <input class="email-address" placeholder="Your email address" type="text">
            <input class="button boxed small" type="submit">
          </form>
          <div class="spacing"></div>
        </div>
      </div>
      </div>
      <div class="two spacing"></div>
    </footer>
                
                <a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>

            </div>

        </div>

        <nav class="sidebar-menu slide-from-left">
            <div class="nano">
                <div class="content">
                    <nav class="responsive-menu">
                        <ul>
                            <li><a href="index-2.html">Home</a></li>
                            <li class="menu-item-has-children"><a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="clients.html">Clients</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog.html">Blog Classic</a></li>
                                    <li><a href="blog-grid.html">Blog Grid</a></li>
                                    <li><a href="blog-single.html">Single Post</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html">About</a></li>
                            <li class="menu-item-has-children"><a href="#">Works</a>
                                <ul class="sub-menu">
                                    <li><a href="work-3columns.html">Three Columns</a></li>
                                    <li><a href="work-4columns.html">Four Columns</a></li>
                                    <li><a href="single-project.html">Single Project</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </nav>

    </div>


    

   

</body>
</html>