<?php
//Template Name: Contact Us
get_header(); ?>

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
                                        <h5 data-animation="fadeInDown" data-delay=".4s">WELCOME</h5>
                                         <h2 data-animation="fadeInUp" data-delay=".4s"><?php the_title();?> Page</h2>
                                        <p data-animation="fadeInUp" data-delay=".6s">
                                        <?php the_content();?>
                                        Curabitur nec laoreet nulla. Mauris aliquam malesuada nibh, sodales ullamp sapien imperdiet vel. Vestibulum fringilla purus metus.
                                        </p>
                                        <br>
                                            <?php echo do_shortcode('[contact-form]'); ?>                                        
                                        
                                         <!-- <div class="slider-btn mt-30">                                          
                                            <a data-animation="fadeInLeft" data-delay=".8s" href="services.html" class="btn ss-btn mr-15">Read More</a>
                                            <a data-animation="fadeInRight" data-delay=".8s" href="<?php //echo site_url()."/contact-us"; ?>" class="btn ss-btn active">Contact Us</a>
                                        </div> -->
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
