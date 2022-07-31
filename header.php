<?php

/*
*contains header
*/


?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="description" content="Nordic is a free Bootstrap HTML Template" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Add site Favicon -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" type="image/x-icon">
    <link rel="icon" href=" <?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" type="image/x-icon">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" />
    <!-- Stylesheets -->

    
    <?php wp_head();?>
</head>

<body <?php body_class(); ?>>
    <div class="page-wrapper">
        <!-- Header Area Start -->
        <header class="bb-header-area bb-main-header">
            <div class="header-upper">
                <div class="container">
                    <div class="inner-container">
                        <div class="logo-box">
                            <div class="logo">
                            <a  href="<?php echo get_home_url(); ?>" id="logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" class="img-responsive" alt="" title="">
                            </a>
                            </div>
                        </div>
                        <div class="nav-outer clearfix">
                            <!-- Main Menu -->
                            <nav class="bb-main-menu navbar-expand-md">
                                <div class="navbar-header">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           </button>
                                </div>
                                <!-- <div class="navbar-collapse show collapse clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="current"><a href="index.html">Promotional Products</a></li>
                                        <li><a href="about.html">What We Do</a></li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="portfolio.html">Portfolio</a></li>
                                        <li><a href="blog.html">Bear Blog</a></li>
                                        <li><a href="cares.html">Branding Bear Cares</a></li>
                                    </ul>
                                </div> -->
                              
                                <?php wp_nav_menu( array(
                                    'container_class'      => 'navbar-collapse show collapse clearfix',
                                    'container_id'         => 'navbarSupportedContent',
                                    'menu_class'           => 'navigation clearfix',
                                    'fallback_cb'          => 'wp_page_menu',
                                    'theme_location'       => 'main_menu',
                                    ) ); ?>
                               
                                
                            </nav>
                        </div>
                        <!-- Outer Box -->
                        <div class="bb-outer-box">
                            <a href="#">Let’s Talk</a>
                            <div class="mobile-nav-toggler"><i class="icofont-navigation-menu"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu  -->
            <div class="bb-mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><i class="icofont-close-line"></i></div>
                <nav class="menu-box">
                    <div class="nav-logo">
                        <a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" title=""></a>
                    </div>
                    <div class="menu-outer">
                    </div>
                </nav>
            </div>
            <!-- End Mobile Menu -->
        </header>
        <!-- Header Area End -->