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
                                         <h2 data-animation="fadeInUp" data-delay=".4s">We Provide Solar Energy Source</h2>
                                        <p data-animation="fadeInUp" data-delay=".6s">Curabitur nec laoreet nulla. Mauris aliquam malesuada nibh, sodales ullamp sapien imperdiet vel. Vestibulum fringilla purus metus.</p>
                                        
                                         <div class="slider-btn mt-30">                                          
                                            <a href="services.html" class="btn ss-btn mr-15">Read More</a>
                                             <a href="services.html" class="btn ss-btn active">Contact Us</a>
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
            <!-- slider-area-end -->
             <!-- about-area -->
            <section id="about" class="about-area about-p pt-120 pb-130 p-relative" style="background: url(<?=bloginfo('template_directory');?>/img/bg/aliment-right.png) no-repeat; background-position: right center;">
                <div class="container">
                    <div class="row align-items-center">
                         <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="s-about-img p-relative" >
                                <img src="<?=bloginfo('template_directory')?>/img/features/about_img.png" alt="img">    
                            </div>
                          <div class="about-text second-about">
                                    <span>50 </span>
                              Years of Experience
                                </div>
                        </div>
                        
					<div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="about-content s-about-content pl-30">
                                <div class="about-title second-title pb-25">  
                                    <h5>ABOUT US</h5>
                                    <h2>What’s Our Resources Story</h2>
                                </div>
                                
                                <p>Praesent fringilla lorem tincidunt, commodo erat sit amet, eleifend neque. Etiam nec vestibulum turpis, quis tempus elit. Sed tempus elit porttitor odio gravida, sed maximus turpis mattis. Vivamus at urna ut libero ornare congue.</p>
                                  <ul class="progress-outer  mt-30">
                                    <li>
                                        <div class="progress-box">
                                            <div class="progress blue">
                                            <span class="progress-left">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <span class="progress-right">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <div class="progress-value">20MI</div>
                                        </div>
                                            <h4>Project Done</h4>
                                        </div>
                                    </li>
                                  <li>
                                        <div class="progress-box">
                                            <div class="progress blue">
                                            <span class="progress-left">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <span class="progress-right">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <div class="progress-value">30MI</div>
                                        </div>
                                            <h4>Wrokers work</h4>
                                        </div>
                                    </li>
                                </ul>
                           
                               
                      
                            </div>
                        </div>
                     
                    </div>
                </div>
            </section>
            <!-- about-area-end -->
             <!-- services-three-area -->
            <section id="services-08" class="services-08 pb-120 p-relative" style="background: url(<?=bloginfo('template_directory');?>/img/bg/aliment-left.png) no-repeat; background-position: left center;">
                <div class="container">
                    <div class="row">   
                        <div class="col-lg-12">
                            <div class="section-title center-align mb-50 text-center">
                                 <h5>OUR SERVICES</h5>  
                                <h2>
                                   What We Offer
                                </h2>
                             
                            </div>
                           
                        </div>
                         
                    </div>
                    <div class="row services-08-item--wrapper mt-0">
                            <div class="col-lg-4 col-md-4">
                                <div class="services-08-item">
                                    <div class="services-08-thumb">
                                     <i class="flaticon flaticon-customer-support"></i>
                                    </div>
                                    <div class="services-08-content">
                                        <h3><a href="services-detail.html"> Technical Services</a> </h3>
                                        <p>Donec vestibulum arcu a arcu scelerisque, quis dignissim turpis semper onec tortor mi, volutpat a iaculis sit amet.</p>
                                    </div>
                                </div>
                            </div>
                              <div class="col-lg-4 col-md-4">
                                <div class="services-08-item">
                                    <div class="services-08-thumb">
                                     <i class="flaticon flaticon-solar-panel"></i>
                                    </div>
                                    <div class="services-08-content">
                                        <h3><a href="services-detail.html"> Energy Panels</a></h3>
                                        <p>Donec vestibulum arcu a arcu scelerisque, quis dignissim turpis semper onec tortor mi, volutpat a iaculis sit amet.</p>
                                    </div>
                                </div>
                            </div>
                              <div class="col-lg-4 col-md-4">
                                <div class="services-08-item">
                                    <div class="services-08-thumb">
                                      <i class="flaticon flaticon-wind-energy"></i>
                                    </div>
                                    <div class="services-08-content">
                                        <h3><a href="services-detail.html">Wind Generators</a></h3>
                                        <p>Donec vestibulum arcu a arcu scelerisque, quis dignissim turpis semper onec tortor mi, volutpat a iaculis sit amet.</p>
                                    </div>
                                </div>
                            </div>
                        
                       
                        </div>
                    
                    <div class="row services-08-item--wrapper mt-0">
                             <div class="col-lg-4 col-md-4">
                                <div class="services-08-item">
                                    <div class="services-08-thumb">
                                      <i class="flaticon flaticon-eco-home"></i>
                                    </div>
                                    <div class="services-08-content">
                                        <h3><a href="services-detail.html">Solar As A Service</a></h3>
                                        <p>Donec vestibulum arcu a arcu scelerisque, quis dignissim turpis semper onec tortor mi, volutpat a iaculis sit amet.</p>
                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-4 col-md-4">
                                <div class="services-08-item">
                                    <div class="services-08-thumb">
                                     <i class="flaticon flaticon-charging-station"></i>
                                    </div>
                                    <div class="services-08-content">
                                        <h3><a href="services-detail.html"> Solar PV Systems</a></h3>
                                        <p>Donec vestibulum arcu a arcu scelerisque, quis dignissim turpis semper onec tortor mi, volutpat a iaculis sit amet.</p>
                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-4 col-md-4">
                                <div class="services-08-item">
                                    <div class="services-08-thumb">
                                      <i class="flaticon flaticon-clipboard"></i>
                                    </div>
                                    <div class="services-08-content">
                                        <h3><a href="services-detail.html">Inspection Checklist</a></h3>
                                        <p>Donec vestibulum arcu a arcu scelerisque, quis dignissim turpis semper onec tortor mi, volutpat a iaculis sit amet.</p>
                                    </div>
                                </div>
                            </div>
                       
                        </div>
					
                     
                    </div>
            </section>
           <!-- services-three-area -->
           
            
             <!-- counter-area -->
            <div class="counter-area p-relative pt-80 pb-80" style="background: url(<?=bloginfo('template_directory');?>/img/bg/counter-bg.png) repeat-x;">
                <div class="container">
               
                     <div class="row">
                          <div class="col-lg-4 col-md-12 col-sm-12">
                              <div class="section-title">                                 
                                  <h5>COUNTER</h5>
                                <h2>
                                  Fun Facts
                                </h2>
                               
                            </div>
                          </div>
                          <div class="col-lg-8 col-md-12 col-sm-12">
                              <div class="row text-center">
                                  <div class="col-lg-3 col-md-6 col-sm-12">
                                     <div class="single-counter wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                         <div class="icon">
                                             <img src="<?=bloginfo('template_directory')?>/img/icon/cn-iocn01.png" alt="img">
                                         </div>

                                        <div class="counter p-relative">
                                            <span class="count">784</span>                             
                                            <p>Happy Clients</p>
                                        </div>

                                    </div>
                                </div>
                              <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="single-counter wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                         <div class="icon">
                                             <img src="<?=bloginfo('template_directory')?>/img/icon/cn-iocn02.png" alt="img">
                                         </div>
                                        <div class="counter p-relative">
                                            <span class="count">987</span>     
                                            <p>Happy Clients</p>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="single-counter wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                        <div class="icon">
                                            <img src="<?=bloginfo('template_directory')?>/img/icon/cn-iocn03.png" alt="img">
                                         </div>

                                        <div class="counter p-relative">
                                           <span class="count">974</span>
                                              <p>Employees</p>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="single-counter wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                         <div class="icon">
                                           <img src="<?=bloginfo('template_directory')?>/img/icon/cn-iocn04.png" alt="img">
                                         </div>

                                        <div class="counter p-relative">
                                            <span class="count">687</span> 
                                        <p>Annual Turnover</p>
                                        </div>
                                    </div>
                                </div>
                              </div>
                                
                          </div>
                       
                         
                    </div>
                </div>
            </div>
            <!-- counter-area-end -->	
            
            <!-- gallery-area -->
            <section id="work" class="pt-40 pb-70" style="background: url(<?=bloginfo('template_directory');?>/img/bg/aliment-right2.png) no-repeat; background-position: right center;">
                <div class="container">   
                    <div class="row">   
                        <div class="col-lg-12">
                            <div class="section-title center-align mb-50 text-center">
                                 <h5>PROJECTS DONE</h5>  
                                <h2>
                                   Our Portfolio
                                </h2>
                             
                            </div>
                           
                        </div>
                         
                    </div>
					<div class="portfolio ">
               
                       <div class="row align-items-center mb-50 text-center">                          
                            <div class="col-lg-12">
                                 <div class="my-masonry">
                            <div class="button-group filter-button-group ">
                                <button class="active" data-filter="*">All Projects</button>
								 <button data-filter=".seo">Solar Energy</button>
								<button data-filter=".marketing">Wind Energy</button>	
								<button data-filter=".website">Hydropower Plants</button>
								
							</div>
                        </div>
                            </div>
                        </div>

                <div class="grid col3">
                    
				   	<div class="grid-item website">     
                   
                        <a href="projects-detail.html">
                            <figure class="gallery-image">
                              <img src="<?=bloginfo('template_directory')?>/img/gallery/protfolio-img01.png" alt="img" class="img">      
                                <figcaption>
                                    <h4>Hydropower 01</h4>
                                </figcaption>
                            </figure>
                          </a>
                           
                    </div>
					<div class="grid-item seo">
                          <a href="projects-detail.html">
                            <figure class="gallery-image">
                              <img src="<?=bloginfo('template_directory')?>/img/gallery/protfolio-img02.png" alt="img" class="img">      
                                <figcaption>
                                    <h4>Solar Energy 01</h4>
                                </figcaption>
                            </figure>
                          </a>
                         
                           
                    </div>
                     <div class="grid-item marketing smm">
                       <a href="projects-detail.html">
                            <figure class="gallery-image">
                              <img src="<?=bloginfo('template_directory')?>/img/gallery/protfolio-img03.png" alt="img" class="img">      
                                <figcaption>
                                    <h4>Wind Energy01</h4>
                                </figcaption>
                            </figure>
                          </a>
                   
                    </div>
                     	<div class="grid-item website">    
                             <a href="projects-detail.html">
                            <figure class="gallery-image">
                              <img src="<?=bloginfo('template_directory')?>/img/gallery/protfolio-img04.png" alt="img" class="img">      
                                <figcaption>
                                    <h4>Hydropower 02</h4>
                                </figcaption>
                            </figure>
                          </a>
                     
                           
                    </div>
					<div class="grid-item seo smm">
                          <a href="projects-detail.html">
                            <figure class="gallery-image">
                              <img src="<?=bloginfo('template_directory')?>/img/gallery/protfolio-img05.png" alt="img" class="img">      
                                <figcaption>
                                    <h4>Solar Energy 02</h4>
                                </figcaption>
                            </figure>
                          </a>
                         
                           
                    </div>
                     <div class="grid-item marketing">
                            <a href="projects-detail.html">
                            <figure class="gallery-image">
                              <img src="<?=bloginfo('template_directory')?>/img/gallery/protfolio-img06.png" alt="img" class="img">      
                                <figcaption>
                                    <h4>Wind Energy02</h4>
                                </figcaption>
                            </figure>
                          </a>
                    </div>
                  
                                     
                    </div>

        </div>
                </div>
            </section>
             <!-- gallery-area-end -->
            <!-- pricing-area -->
            <section id="pricing" class="pricing-area pb-60" style="background: url(<?=bloginfo('template_directory');?>/img/bg/aliment-left.png) no-repeat; background-position: left center;">
                <div class="container"> 
                    <div class="row">
                         <div class="col-lg-12 p-relative">
                            <div class="section-title center-align mb-30 text-center">
                                 <h5>PRICING PLAN</h5>
                                <h2>
                                   Choose Your Plan
                                </h2>
                               
                            </div>
                             <nav class="pricing-tab mb-30">
                                    <span class="monthly_tab_title">Monthly</span>
                                    <span class="pricing-tab-switcher"></span>
                                    <span class="annual_tab_title">Annual</span>
                                 </nav>
                           
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                          <div class="pricing-box pricing-box2 mb-60">
                                <div class="pricing-head text-center">   
                                    <h3>Starter</h3>  
                                      <div class="price-count pricing-amount">
                                           <div class="monthly_price">
                                              <h2>$9</h2>
                                              <span class="subscription"> Per Month </span>
                                           </div>
                                            <div class="annual_price">
                                              <h2>$99</h2>
                                              <span class="subscription"> Per Annual </span>
                                           </div>
                                     </div>
                                     <p>Nulla scelerisque elit aliquet, <br>volutpat lorem ac.</p>
                                    <hr>
                                </div>

                                <div class="pricing-body mt-20 mb-30">
                                   <ul>
                                      <li>Pack Of 5 Bottles</li>
                                       <li>Free Delivery Service</li>
                                        <li>Free Water Fillter Cleaning</li>
                                         <li>Re-Water Filling Service</li>
                                         <li>24X7 Support</li>
                                    </ul>
                                </div>             

                                <div class="pricing-btn text-center">
                                   <a href="shop-details.html" class="btn ss-btn">Gets Started</a>
                                     <p>*Free Trial 14 Days</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                             <div class="pricing-box pricing-box2 active mb-60">
                                    <div class="pricing-head text-center">   
                                        <h3>Professional</h3>  
                                        <div class="price-count pricing-amount">
                                       
                                           <div class="monthly_price">
                                              <h2>$18</h2>
                                              <span class="subscription"> Per Month </span>
                                           </div>
                                            <div class="annual_price">
                                              <h2>$120</h2>
                                              <span class="subscription"> Per Annual </span>
                                           </div>
                                        </div>
                                         <p>Nulla scelerisque elit aliquet, <br>volutpat lorem ac.</p>
                                        <hr>
                                    </div>

                                    <div class="pricing-body mt-20 mb-30">
                                       <ul>
                                          <li>Pack Of 5 Bottles</li>
                                            <li>Free Delivery Service</li>
                                            <li>Free Water Fillter Cleaning</li>
                                             <li>Re-Water Filling Service</li>
                                             <li>24X7 Support</li>
                                        </ul>
                                    </div>             

                                    <div class="pricing-btn text-center">
                                       <a href="shop-details.html" class="btn ss-btn">Gets Started</a>
                                        <p>*Free Trial 14 Days</p>
                                    </div>
                                </div>
                      
                        </div>
                         <div class="col-lg-4 col-md-4">
                             <div class="pricing-box pricing-box2 mb-60">
                                    <div class="pricing-head text-center">   
                                        <h3>Enterprise</h3>  
                                          <div class="price-count pricing-amount">
                                           <div class="monthly_price">
                                              <h2>$49</h2>
                                              <span class="subscription"> Per Month </span>
                                           </div>
                                            <div class="annual_price">
                                              <h2>$399</h2>
                                              <span class="subscription"> Per Annual </span>
                                           </div>
                                     </div> 
                                        <p>Nulla scelerisque elit aliquet, <br>volutpat lorem ac.</p>
                                        <hr>
                                    </div>

                                    <div class="pricing-body mt-20 mb-30 ">
                                       <ul>
                                             <li>Pack Of 5 Bottles</li>
                                            <li>Free Delivery Service</li>
                                            <li>Free Water Fillter Cleaning</li>
                                             <li>Re-Water Filling Service</li>
                                             <li>24X7 Support</li>
                                        </ul>
                                    </div>             

                                    <div class="pricing-btn text-center">
                                       <a href="shop-details.html" class="btn ss-btn">Gets Started</a>
                                        <p>*Free Trial 14 Days</p>
                                    </div>
                                </div>
                             
                           
                        </div>
                    </div>
                </div>
            </section>
            <!-- pricing-area-end -->
              <!-- video-area -->
            <section id="video" class="video-area about-p p-relative" style="background-color: #010f2e;">
                <div class="container">
                     <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="s-video-wrap" style="background-image:url(<?=bloginfo('template_directory');?>/img/bg/video-img.png)">
                                <div class="s-video-content">
                                    <a href="https://www.youtube.com/watch?v=7e90gBu4pas" class="popup-video mb-50"><img src="<?=bloginfo('template_directory')?>/img/bg/play-button.png" alt="circle_right"></a>
                                   
                                </div>
                            </div>
                        </div>
                         <div class="col-lg-6 p-relative pl-70">
                            <div class="section-title">
                                 <H5>WORK FLOW</H5>
                                <h2>
                                 How We Work
                                </h2>
                            </div>
                             
                             <div class="row how-box-contaniner">
                                <div class="col-lg-6 mt-30">
                                    <div class="how-box">
                                        <h5>01</h5>
                                        <h3>Peak Shaving</h3>
                                        <p>Nullam porttitorer, condimentum pharetra, tellus sapien malesuada quampulvinar efficitur justo.</p>
                                    </div>
                                 </div>
                                   <div class="col-lg-6 mt-30">
                                    <div class="how-box">
                                        <h5>02</h5>
                                        <h3>Demand Response</h3>
                                        <p>Nullam porttitorer, condimentum pharetra, tellus sapien malesuada quampulvinar efficitur justo.</p>
                                    </div>
                                 </div>
                                   <div class="col-lg-6 mt-30">
                                    <div class="how-box">
                                        <h5>03</h5>
                                        <h3>Load Shifting</h3>
                                        <p>Nullam porttitorer, condimentum pharetra, tellus sapien malesuada quampulvinar efficitur justo.</p>
                                    </div>
                                 </div>
                                   <div class="col-lg-6 mt-30">
                                    <div class="how-box">
                                        <h5>04</h5>
                                        <h3>Renewable</h3>
                                        <p>Nullam porttitorer, condimentum pharetra, tellus sapien malesuada quampulvinar efficitur justo.</p>
                                    </div>
                                 </div>
                                
                             </div>
                           
                        </div>
                    </div>
                </div>
            </section>
            <!-- video-area-end -->
             <!-- team-area -->
            <section id="team" class="team-area2 pt-120 pb-100" style="background: url(<?=bloginfo('template_directory');?>/img/bg/aliment-right3.png) no-repeat; background-position: right center;">            
                <div class="container">  
                 
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-md-12">
                             <div class="section-title mb-50 text-center">
                                    <h5>OUR TEAM</h5>
                                    <h2>Our Working Expertise</h2>      
                                   
                                </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="single-team mb-30 ">
                                <div class="team-thumb">
                                  <div class="brd">
                                        <img src="<?=bloginfo('template_directory')?>/img/team/team_img01.png" alt="img">
                                    </div>
                                    <div class="social align-items-center">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-behance"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h4><a href="team-details.html">Nashid Martin</a></h4>
                                    <span>Founder</span>
                                  
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-team mb-30 ">
                                <div class="team-thumb">
                                    <div class="brd">
                                         <img src="<?=bloginfo('template_directory')?>/img/team/team_img02.png" alt="img">
                                    </div>
                                    <div class="social align-items-center">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-behance"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h4><a href="team-details.html">Konne Backfi</a></h4>
                                    <span>CEO</span>
                                 
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-team mb-30 ">
                                <div class="team-thumb">
                                     <div class="brd">
                                         <img src="<?=bloginfo('template_directory')?>/img/team/team_img03.png" alt="img">
                                    </div>
                                    <div class="social align-items-center">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-behance"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h4><a href="team-details.html">Hackson Willi</a></h4>
                                    <span>Developer</span>
                                   
                                </div>
                            </div>
                        </div>						
                       <div class="col-lg-3 col-md-6">
                            <div class="single-team mb-30 ">
                                <div class="team-thumb">
                                  <div class="brd">
                                        <img src="<?=bloginfo('template_directory')?>/img/team/team_img04.png" alt="img">
                                    </div>
                                    <div class="social align-items-center">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-behance"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h4><a href="team-details.html">Dekhina Pike</a></h4>
                                    <span>Founder</span>
                                  
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                        </div>
                    
                    </div>
                    
                </div>
            </section>
            <!-- team-area-end -->   
            
            
            
              <!-- testimonial-area -->
            <section class="testimonial-area pb-90" style="background: url(<?=bloginfo('template_directory');?>/img/bg/aliment-left2.png) no-repeat; background-position: left center;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title center-align mb-35 text-center">
                                 <h5> Feedback </h5>  
                                <h2>
                                  Our Testimonials
                                </h2>
                             
                            </div>
                           
                        </div>
                        
                        <div class="col-lg-12">
                            <div class="testimonial-active">
                                <div class="single-testimonial">
                                    <p>Praesent nec elit imperdiet, tincidunt ex at, malesuada lectus. Praesent cursus diam risus, non accumsan neque fermentum eget. Maecenas vel aliquam enim aliquam aliquet finibus nisl.</p>
                                    <div class="testi-author">
                                        <img src="<?=bloginfo('template_directory')?>/img/testimonial/testi_avatar.png" alt="img">
                                        <div class="ta-info">
                                            <h6>Margie R. Robinson</h6>
                                            <span>Web Developer</span>
                                        </div>
                                    </div>
                                    <div class="qt-img">
                                    <img src="<?=bloginfo('template_directory')?>/img/testimonial/qt-icon.png" alt="img">
                                    </div>
                                </div>
                                <div class="single-testimonial">
                                   <p>Praesent nec elit imperdiet, tincidunt ex at, malesuada lectus. Praesent cursus diam risus, non accumsan neque fermentum eget. Maecenas vel aliquam enim aliquam aliquet finibus nisl.</p>
                                    <div class="testi-author">
                                        <img src="<?=bloginfo('template_directory')?>/img/testimonial/testi_avatar.png" alt="img">
                                        <div class="ta-info">
                                            <h6>Margie R. Robinson</h6>
                                            <span>Web Developer</span>
                                        </div>
                                    </div>
                                     <div class="qt-img">
                                    <img src="<?=bloginfo('template_directory')?>/img/testimonial/qt-icon.png" alt="img">
                                    </div>
                                </div>
                               <div class="single-testimonial">
                                   <p>Praesent nec elit imperdiet, tincidunt ex at, malesuada lectus. Praesent cursus diam risus, non accumsan neque fermentum eget. Maecenas vel aliquam enim aliquam aliquet finibus nisl.</p>
                                    <div class="testi-author">
                                        <img src="<?=bloginfo('template_directory')?>/img/testimonial/testi_avatar.png" alt="img">
                                        <div class="ta-info">
                                            <h6>Margie R. Robinson</h6>
                                            <span>Web Developer</span>
                                        </div>
                                    </div>
                                     <div class="qt-img">
                                    <img src="<?=bloginfo('template_directory')?>/img/testimonial/qt-icon.png" alt="img">
                                    </div>
                                </div>
                                <div class="single-testimonial">
                                  <p>Praesent nec elit imperdiet, tincidunt ex at, malesuada lectus. Praesent cursus diam risus, non accumsan neque fermentum eget. Maecenas vel aliquam enim aliquam aliquet finibus nisl.</p>
                                    <div class="testi-author">
                                        <img src="<?=bloginfo('template_directory')?>/img/testimonial/testi_avatar.png" alt="img">
                                        <div class="ta-info">
                                            <h6>Margie R. Robinson</h6>
                                            <span>Web Developer</span>
                                        </div>
                                    </div>
                                     <div class="qt-img">
                                    <img src="<?=bloginfo('template_directory')?>/img/testimonial/qt-icon.png" alt="img">
                                    </div>
                                </div>
                                <div class="single-testimonial">
                                   <p>Praesent nec elit imperdiet, tincidunt ex at, malesuada lectus. Praesent cursus diam risus, non accumsan neque fermentum eget. Maecenas vel aliquam enim aliquam aliquet finibus nisl.</p>
                                    <div class="testi-author">
                                        <img src="<?=bloginfo('template_directory')?>/img/testimonial/testi_avatar.png" alt="img">
                                        <div class="ta-info">
                                            <h6>Margie R. Robinson</h6>
                                            <span>Web Developer</span>
                                        </div>
                                    </div>
                                     <div class="qt-img">
                                    <img src="<?=bloginfo('template_directory')?>/img/testimonial/qt-icon.png" alt="img">
                                    </div>
                                </div>
                                <div class="single-testimonial">
                                   <p>Praesent nec elit imperdiet, tincidunt ex at, malesuada lectus. Praesent cursus diam risus, non accumsan neque fermentum eget. Maecenas vel aliquam enim aliquam aliquet finibus nisl.</p>
                                    <div class="testi-author">
                                        <img src="<?=bloginfo('template_directory')?>/img/testimonial/testi_avatar.png" alt="img">
                                        <div class="ta-info">
                                            <h6>Margie R. Robinson</h6>
                                            <span>Web Developer</span>
                                        </div>
                                    </div>
                                     <div class="qt-img">
                                    <img src="<?=bloginfo('template_directory')?>/img/testimonial/qt-icon.png" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->
            
            <!-- features-area -->
            <section id="graph" class="features-area pt-80 pb-80"  style="background:url('<?=bloginfo('template_directory');?>/img/bg/cat-bg.png'); background-size: cover;">
                <div class="container">
          
                    <div class="row align-items-center">
                        
                        <div class="col-lg-12 col-md-12">
                            <div class="section-title cta-title text-center mb-30"> 
                            
                                 <h5>CALL TO ACTION</h5>     
                                <h2>Providing Value To Clients Through<br>Product & Innovation.</h2>
                            </div>
                            
                        
                        </div>
                        <div class="col-lg-12 col-md-12 text-center">
                            <a href="contact.html" class="btn ss-btn">Contact Us Now</a>
                        </div>
                        
                       
						
                    </div>
                    
                </div>
            </section>
            <!-- features-area-end -->
            
                        
              <!-- blog-area -->
            <section id="blog" class="blog-area  p-relative pt-120 pb-120 fix" style="background: url(<?=bloginfo('template_directory');?>/img/bg/aliment-right4.png) no-repeat; background-position: right center;">
                <div class="container">
                    <div class="row align-items-center"> 
                        <div class="col-lg-12">
                            <div class="section-title center-align mb-50 text-center">
                                  <h5>OUR TEAM</h5>
                                    <h2> Latest Blog & News</h2>     
                               
                            </div>
                           
                        </div>
                    </div>
                    <div class="row">
                       <div class="col-lg-6 col-md-12">
                            <div class="single-post2 mb-30">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="blog-thumb2">
                                            <a href="blog-details.html"><img src="<?=bloginfo('template_directory')?>/img/blog/inner_b1.jpg" alt="img"></a>

                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8">
                                      <div class="blog-content2">     
                                                 <h4><a href="blog-details.html">Cras et dictum nisl nulla vitae auctor diam</a></h4>     
                                                    <div class="b-meta">
                                                <div class="b-meta">
                                                     <div class="meta-info">
                                                        <ul>
                                                            <li><i class="fal fa-user"></i> Admin</li>
                                                            <li><i class="fal fa-calendar-alt"></i> 24th March 2021</li>
                                                        </ul>
                                                    </div>
                                            </div>
                                            </div>
                                                    <p>Suspendisse vulputate nibh eget eros darde rhoncus, id scelerisque libero reade aluam. Integer ullamcorper, ex ac ultrices pharetra.</p>
                                        </div>
                                    </div>

                                </div>
                                
                            </div>
                        </div>
                          <div class="col-lg-6 col-md-12">
                            <div class="single-post2 mb-30">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="blog-thumb2">
                                            <a href="blog-details.html"><img src="<?=bloginfo('template_directory')?>/img/blog/inner_b2.jpg" alt="img"></a>

                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8">
                                        <div class="blog-content2">     
                                                 <h4><a href="blog-details.html">Cras et dictum nisl nulla vitae auctor diam</a></h4>    
                                                    <div class="b-meta">
                                                     <div class="meta-info">
                                                        <ul>
                                                            <li><i class="fal fa-user"></i> Admin</li>
                                                            <li><i class="fal fa-calendar-alt"></i> 24th March 2021</li>
                                                        </ul>
                                                    </div>
                                            </div>
                                                    <p>Suspendisse vulputate nibh eget eros darde rhoncus, id scelerisque libero reade aluam. Integer ullamcorper, ex ac ultrices pharetra.</p>
                                        </div>
                                    </div>

                                </div>
                                
                            </div>
                        </div>
                         <div class="col-lg-6 col-md-12">
                            <div class="single-post2 mb-30">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="blog-thumb2">
                                            <a href="blog-details.html"><img src="<?=bloginfo('template_directory')?>/img/blog/inner_b3.jpg" alt="img"></a>

                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8">
                                        <div class="blog-content2">     
                                                 <h4><a href="blog-details.html">Cras et dictum nisl nulla vitae auctor diam</a></h4>    
                                                    <div class="b-meta">
                                               <div class="b-meta">
                                                     <div class="meta-info">
                                                        <ul>
                                                            <li><i class="fal fa-user"></i> Admin</li>
                                                            <li><i class="fal fa-calendar-alt"></i> 24th March 2021</li>
                                                        </ul>
                                                    </div>
                                            </div>
                                            </div>
                                                 <p>Suspendisse vulputate nibh eget eros darde rhoncus, id scelerisque libero reade aluam. Integer ullamcorper, ex ac ultrices pharetra.</p>
                                        </div>
                                    </div>

                                </div>
                                
                            </div>
                        </div>
                         <div class="col-lg-6 col-md-12">
                            <div class="single-post2 mb-30">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="blog-thumb2">
                                            <a href="blog-details.html"><img src="<?=bloginfo('template_directory')?>/img/blog/inner_b4.jpg" alt="img"></a>

                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8">
                                       <div class="blog-content2">     
                                                 <h4><a href="blog-details.html">Cras et dictum nisl nulla vitae auctor diam</a></h4>    
                                                    <div class="b-meta">
                                                  <div class="b-meta">
                                               <div class="b-meta">
                                                     <div class="meta-info">
                                                        <ul>
                                                            <li><i class="fal fa-user"></i> Admin</li>
                                                            <li><i class="fal fa-calendar-alt"></i> 24th March 2021</li>
                                                        </ul>
                                                    </div>
                                            </div>
                                            </div>
                                            </div>
                                             <p>Suspendisse vulputate nibh eget eros darde rhoncus, id scelerisque libero reade aluam. Integer ullamcorper, ex ac ultrices pharetra.</p>
                                        </div>
                                    </div>

                                </div>
                                
                            </div>
                        </div>
                    <div class="col-lg-12 col-md-12 text-center">
                            <a href="blog.html" class="btn ss-btn">View All News</a>
                        </div>
                        
                    </div>
                </div>
            </section>
            <!-- blog-area-end -->
              <!-- brand-area -->
            <div class="brand-area pt-60 pb-60">
                <div class="container">
                    <div class="row brand-active">
                        <div class="col-xl-2">
                            <div class="single-brand">
                                 <img src="<?=bloginfo('template_directory')?>/img/brand/b-logo1.png" alt="img">
                            </div>
                        </div>
                       <div class="col-xl-2">
                            <div class="single-brand">
                                     <img src="<?=bloginfo('template_directory')?>/img/brand/b-logo2.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                  <img src="<?=bloginfo('template_directory')?>/img/brand/b-logo3.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                  <img src="<?=bloginfo('template_directory')?>/img/brand/b-logo4.png" alt="img">
                            </div>
                        </div>
                         <div class="col-xl-2">
                            <div class="single-brand">
                                 <img src="<?=bloginfo('template_directory')?>/img/brand/b-logo5.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                 <img src="<?=bloginfo('template_directory')?>/img/brand/b-logo6.png" alt="img">
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->
			
         
        </main>
        <!-- main-area-end -->
        <?php
            get_footer();
        ?>