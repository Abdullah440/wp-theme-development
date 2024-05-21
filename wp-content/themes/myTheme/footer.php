        <!-- footer -->
        <?php
        $email = get_field('email', 'option');
        $email2 = get_field('email_2', 'option');
        $phone1 = get_field('phone_1', 'option');
        $phone2 = get_field('phone_2', 'option');
        $instagram = get_field('instagram', 'option');
        $facebook = get_field('facebook', 'option');
        $twitter = get_field('twitter', 'option');
        $address = get_field('address', 'option');
        $footer_text = get_field('footer_text', 'option');
        ?>
        <footer class="footer-bg footer-p">
            <div class="footer-top-heiding pt-70 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="section-title">        
                                <h2> Get Update<br> From Newsletter</h2>
                               
                            </div>
                        </div>
                         <div class="col-xl-6 col-lg-6">
                             <div class="newslater-area">
                                <form name="ajax-form" id="contact-form4" action="#" method="post" class="contact-form newslater">
                               <div class="form-group">
                                  <input class="form-control" id="email2" name="email" type="email" placeholder="Email Address..." value="" required=""> 
                                  <button type="submit" class="btn btn-custom" id="send2">Subscribe Now</button>
                               </div>
                               <!-- /Form-email -->	
                            </form>
                             </div>
                            
                        </div>
                    </div>
                </div>
            
            </div>
             <div class="footer-top pb-40">
                <div class="container">
                    <div class="row justify-content-between">
                        
                          <div class="col-xl-3 col-lg-3 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title mb-45">
                                   <img src="<?=bloginfo('template_directory')?>/img/logo/f_logo.png" alt="img">
                                </div>
                                <div class="footer-link">
                                    <?php echo $footer_text; ?>
                                </div>
                                <div class="f-contact mt-30">
                                    <ul>
                                
                                    <li>
                                        <i class="icon fal fa-map-marker-check"></i>
                                        <span><?php echo $address; ?></span>
                                    </li>
                                    
                                </ul>
                                    
                                    </div>
                               
                              
                            </div>
                        </div>
						<div class="col-xl-3 col-lg-3 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title">
                                    <h2>Our Links</h2>
                                </div>
                                <div class="footer-link">
                                <?php
                                        wp_nav_menu(
                                            array(
                                                'theme_location' => 'footer-menu',
                                                )
                                        )
                                        ?>
                                    <!-- <ul>                                        
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about.html"> About Us</a></li>
                                        <li><a href="services.html"> Services </a></li>
                                        <li><a href="#">Term</a></li>
                                        <li><a href="blog.html">Blog </a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="#">Support</a></li>
                                        <li><a href="#">Privercy</a></li>
                                        <li><a href="contact.html"> Contact Us</a></li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-sm-6">
                            
                            <div class="footer-widget mb-30">
                                 <div class="f-widget-title">
                                    <h2>Get In Touch</h2>
                                </div>
                               <div class="f-contact">
                                    <ul>
                                    <li>
                                        <i class="icon fal fa-phone"></i>
                                        <span><?php echo $phone1; ?><br><?php echo $phone2; ?></span>
                                    </li>
                                   <li><i class="icon fal fa-envelope"></i>
                                        <span>
                                            <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                                       <br>
                                       <a href="mailto:<?php echo $email2; ?>"><?php echo $email2; ?></a>
                                       </span>
                                    </li>
                                    
                                    
                                </ul>
                                    
                                    </div>
                            </div>
                        </div>  
                       <div class="col-xl-3 col-lg-3 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title">
                                    <h2>Our Gallery</h2>
                                </div>
                                <div class="f-insta">
                                    <ul>
                                        <li><a href="img/instagram/f-galler-01.png" class="popup-image"><img src="<?=bloginfo('template_directory')?>/img/instagram/f-galler-01.png" alt="img"></a></li>
                                       <li><a href="img/instagram/f-galler-02.png" class="popup-image"><img src="<?=bloginfo('template_directory')?>/img/instagram/f-galler-02.png" alt="img"></a></li>
                                        <li><a href="img/instagram/f-galler-03.png" class="popup-image"><img src="<?=bloginfo('template_directory')?>/img/instagram/f-galler-03.png" alt="img"></a></li>
                                        <li><a href="img/instagram/f-galler-04.png" class="popup-image"><img src="<?=bloginfo('template_directory')?>/img/instagram/f-galler-04.png" alt="img"></a></li>
                                      
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>  
                      
                        
                    </div>
                </div>
            </div>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">                         
                              Copyright © <?php echo date("Y");?> Capatel All rights reserved.  
                        </div>
                        <div class="col-lg-6 text-right text-xl-right">                       
                            <ul>
                                <li><a href="#">Privercy</a></li>
                                <li><a href="#">Term &amp; Conditions</a></li>
                                <li><a href="#">Legal</a></li>
                                <li> <span class="footer-social">                                    
                                    <a href="<?php echo $facebook; ?>"><i class="fab fa-facebook-f"></i></a>
                                    <a href="<?php echo $twitter; ?>"><i class="fab fa-twitter"></i></a>
                                    <a href="<?php echo $instagram; ?>"><i class="fab fa-instagram"></i></a>
                                </span></li>
                            </ul>                 
                        </div>
                        
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-end -->


		<!-- JS here -->
        <script src="<?php echo get_template_directory_uri();?>/js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/popper.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/slick.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/ajax-form.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/paroller.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/wow.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/js_isotope.pkgd.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/imagesloaded.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/parallax.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/jquery.waypoints.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/jquery.counterup.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/jquery.scrollUp.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/jquery.meanmenu.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/parallax-scroll.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/jquery.magnific-popup.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/element-in-view.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>
        <?php wp_footer(); ?>
    </body>
</html>