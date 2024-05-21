<!doctype html>
<html class="no-js" lang="zxx">
<?php
        $email = get_field('email', 'option');
        $email2 = get_field('email_2', 'option');
        $phone1 = get_field('phone_1', 'option');
        $phone2 = get_field('phone_2', 'option');
        $instagram = get_field('instagram', 'option');
        $facebook = get_field('facebook', 'option');
        $twitter = get_field('twitter', 'option');
        $linkedin = get_field('linkedin', 'option');
        $address = get_field('address', 'option');
        $footer_text = get_field('footer_text', 'option');
        ?>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>WP Custom Theme Development</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="<?=bloginfo('template_directory');?>/img/favicon.ico">
        <?php wp_head(); ?>
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
                        <div class="col-lg-8 col-md-8 d-none  d-md-block">
                            <div class="header-cta">
                                <ul>                                   
                                    <li>
                                        <i class="fas fa-envelope"></i>
                                      
                                        <span><?=$email?></span>
                                        <!-- <span>abc@gmail.com</span> -->
                                    </li>
                                     <li>
                                      <i class="far fa-map-marker-alt"></i>
                                        <span><?=$address?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                         <div class="col-lg-4 col-md-6 d-none d-lg-block">
                             <div class="header-social text-right">
                            <span>
                                <a href="<?php echo $facebook; ?>" title="Facebook"><i class="fab fa-facebook"></i></a>
                                <a href="<?php echo $twitter; ?>" title="Twitter"><i class="fab fa-twitter"></i></a>
                                <a href="<?php echo $linkedin;?>" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>  
                                                             
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
                                    <nav id="mobile-menu">
                                        <?php
                                        wp_nav_menu(
                                            array(
                                                'theme_location' => 'primary-menu',
                                                )
                                        )?>
                                    </nav>
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

                <!-- offcanvas-area -->
                <div class="offcanvas-menu">
                <span class="menu-close"><i class="fas fa-times"></i></span>
              <form role="search" method="get" id="searchform"   class="searchform" action="http://wordpress.zcube.in/xconsulta/">
                                <input type="text" name="s" id="search" value="" placeholder="Search"  />
                                <button><i class="fa fa-search"></i></button>
                            </form>

                    
                    <div id="cssmenu3" class="menu-one-page-menu-container">
                        <ul id="menu-one-page-menu-2" class="menu">
                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="index.html">Home</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="about.html">About Us</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="services.html">Services</a></li>
                             <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="pricing.html">Pricing </a></li>
                             <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="team.html">Team </a></li>
                             
                             <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="projects.html">Gallery Study</a></li>
                             <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="blog.html">Blog</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>  
                    
                    <div id="cssmenu2" class="menu-one-page-menu-container">
                        <ul id="menu-one-page-menu-1" class="menu">
                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#home"><span>+8 12 3456897</span></a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#howitwork"><span>info@example.com</span></a></li>
                        </ul>
                    </div>                
            </div>
            <div class="offcanvas-overly"></div>
                 <!-- offcanvas-end -->
                 <?php
                 global $bannerImage;
                 if (has_post_thumbnail()) {
                    $bannerImage = wp_get_attachment_image_src(get_post_thumbnail_id())[0];
                } else {
                    $bannerImage = get_template_directory_uri()."/img/testimonial/test-bg.png";
                    }
                 ?>