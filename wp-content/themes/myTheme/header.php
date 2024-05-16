<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>WP Custom Theme Development</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/animate.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/magnific-popup.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/font-flaticon/flaticon.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/dripicons.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/slick.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/meanmenu.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/default.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/responsive.css">
    </head>
    <body>
     <!-- header -->
        <header class="header-area header-three">  
            <div class="header-top second-header d-none d-md-block">
                <div class="container">
                    <div class="row align-items-center">                                              
                        <div class="col-lg-6 col-md-8 d-none  d-md-block">
                            <div class="header-cta">
                                <ul>                                   
                                    <li>
                                        <i class="fas fa-envelope"></i>
                                      
                                        <span>info@example.com</span>
                                    </li>
                                     <li>
                                      <i class="far fa-map-marker-alt"></i>
                                        <span>12/7 Aabot, Poor Street, Mumbai</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                         <div class="col-lg-6 col-md-6 d-none d-lg-block">
                             <div class="header-social text-right">
                            <span>
                                <a href="#" title="Facebook"><i class="fab fa-facebook"></i></a>
                                <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                                <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>                               
                               </span>                    
                               <!--  /social media icon redux -->                               
                        </div>
                        </div>
                         
                    </div>
                </div>
            </div>
			 <div id="header-sticky" class="menu-area">
                <div class="container">
                    <div class="second-menu">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.html"><img src="<?=bloginfo('template_directory')?>/img/logo/logo.png" alt="logo"></a>
                                </div>
                            </div>
                           <div class="col-xl-7 col-lg-7">
                              
                                <div class="main-menu text-right text-xl-right">
                                    <?php
                                    wp_nav_menu(
                                        array(
                                            'theme_location' => 'primary-menu',
                                            'menu_class' => 'nav-bar'
                                            )
                                    )?>
                                </div>
                            </div>   
                             <div class="col-xl-1 col-lg-1 text-center d-none d-lg-block mt-15 mb-15">
                                <a href="contact.html" class="menu-tigger"><i class="fal fa-search"></i></a>
                            </div>
                            <div class="col-xl-2 col-lg-2 text-right d-none d-lg-block mt-15 mb-15">
                                <a href="contact.html" class="btn ss-btn">Get A Quote</a>
                            </div>
                          
                            
                                <div class="col-12">
                                    <div class="mobile-menu"></div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-end -->