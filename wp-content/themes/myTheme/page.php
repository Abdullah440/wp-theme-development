<?php get_header(); ?>

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
      
        <!-- main-area -->
        <main>
            
            <!-- search-popup -->
		<div class="modal fade bs-example-modal-lg search-bg popup1" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content search-popup">
					<div class="text-center">
						<a href="#" class="close2" data-dismiss="modal" aria-label="Close">× close</a>
					</div>
					<div class="row search-outer">
						<div class="col-md-11"><input type="text" placeholder="Search for products..." /></div>
						<div class="col-md-1 text-right"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
					</div>
				</div>
			</div>
		</div>
		<!-- /search-popup -->
            <!-- slider-area -->
            <section id="home" class="slider-area slider-four fix p-relative">
               
                <div class="slider-active">
				<div class="single-slider slider-bg d-flex align-items-center" style="background: url(<?=bloginfo('template_directory');?>/img/slider/slider_img_bg.png) no-repeat; background-position: right top;">
                        <div class="container">
                           <div class="row justify-content-center pt-50">
                                <div class="col-lg-7 col-md-7">
                                    <div class="slider-content s-slider-content mt-150">
                                        <h5 data-animation="fadeInDown" data-delay=".4s">WELCOME </h5>
                                         <h2 data-animation="fadeInUp" data-delay=".4s"><?php the_title();?> Page</h2>
                                        <p data-animation="fadeInUp" data-delay=".6s">
                                        <?php the_content();?>
                                        Curabitur nec laoreet nulla. Mauris aliquam malesuada nibh, sodales ullamp sapien imperdiet vel. Vestibulum fringilla purus metus.
                                        </p>
                                        
                                         <div class="slider-btn mt-30">                                          
                                            <a data-animation="fadeInLeft" data-delay=".8s" href="services.html" class="btn ss-btn mr-15">Read More</a>
                                            <a data-animation="fadeInRight" data-delay=".8s" href="services.html" class="btn ss-btn active">Contact Us</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5">
                                    <div class="slider-img" data-animation="fadeInUp" data-delay=".4s">
                                   <img src="<?=bloginfo('template_directory')?>/img/slider/slider_img05.png" alt="slider_img05">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    </div>
                    
               
            </section>
            <!-- slider-area-end --

<?php get_footer(); ?>
