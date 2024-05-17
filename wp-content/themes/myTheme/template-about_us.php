<?php
//Template Name: About Us
get_header();
?>
<style>
    .breadcrumb-area{
        margin-top: 90px;
    }
    .flip-card-front img{
        width: 100%;
        height: 100%;
    }
</style>
<?php
$args = array(
    'post_type' => 'team_members',
    'posts_per_page' => -1 // Fetch all posts, you can set a specific number if needed
);
$team_members_query = new WP_Query($args);
global $bannerImage;

?>
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
            <!-- breadcrumb-area -->
            <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(<?=$bannerImage?>)">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-lg-12">
                            <div class="breadcrumb-wrap text-left">
                                <div class="breadcrumb-title">
                                    <h2>About Us</h2>    
                                    <div class="breadcrumb-wrap">
                              
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">About</li>
                                    </ol>
                                </nav>
                            </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->
        <!-- about-area -->
            <section id="about" class="about-area about-p pt-120 pb-135 p-relative" style="background: url(<?=bloginfo('template_directory');?>/img/bg/aliment-right.png) no-repeat; background-position: right center;">
                <div class="container">
                    <div class="row align-items-center">
                         <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="s-about-img p-relative" >
                                <img src="<?=bloginfo('template_directory');?>/img/features/about_img.png" alt="img">    
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
                            <a href="<?php echo site_url().'/contact-us';?>" class="btn ss-btn">Contact Us Now</a>
                        </div>
                        
                       
						
                    </div>
                    
                </div>
            </section>
            <!-- features-area-end -->
            
            
             <!-- team-area -->
            <section id="team" class="team-area pt-120 pb-90 p-relative" style="background: url(<?=bloginfo('template_directory');?>/img/bg/aliment-right3.png) no-repeat; background-position: right center;">     
                <div class="container">   
                    <div class="row">   
                        
                        <div class="col-lg-12">
                            <div class="section-title center-align mb-50 text-center">
                                 <h5>OUR TEAM</h5>
                                <h2>
                                  Our Working Expertise
                                </h2>
                               
                            </div>
                           
                        </div>
                         
                    </div>
                    <div class="row">
                        <?php if ($team_members_query->have_posts()) {
                              while ($team_members_query->have_posts()) {
                                $team_members_query->the_post();
                                $socialMedia = get_field('social_media');
                                $fb_URL = $socialMedia['facebook_profile_url']['url'];
                                $twitter_URL = $socialMedia['twitter_profile_url']['url'];
                                $youtube_URL = $socialMedia['youtube_channel_url']['url'];
                            ?>
                        <div class="col-lg-4 col-md-6">
                              <div class="flip-card mb-30">
                              <div class="flip-card-inner">
                                <div class="flip-card-front">
                                   <?php 
                                   if (has_post_thumbnail()) {
                                    $thumbnail_url = wp_get_attachment_image_src(get_post_thumbnail_id())[0];
                                    echo '<img src="' . esc_url($thumbnail_url) . '" alt="img">';
                                } else {
                                    echo '<img src="' . get_template_directory_uri() . '/img/team/team_img01.png" alt="img">';
                                }
                                   ?>
                                </div>
                                <div class="flip-card-back">
                                  <div class="mt-120">
                                        <h4><a href="team-details.html"><?php echo get_field('member_name'); ?></a></h4>
                                        <span><?php echo get_field('designation'); ?></span>
                                      <div class="social">
                                            <a href="<?php echo $fb_URL;?>"><i class="fab fa-facebook"></i></a>
                                            <a href="<?php echo $twitter_URL;?>"><i class="fab fa-twitter"></i></a>
                                            <a href="<?php echo $youtube_URL;?>"><i class="fab fa-youtube"></i></a>                            
                                      </div>
                                    </div>
                                </div>
                              </div>
                            </div> 
                        </div>  
                            <?php 
                                  }
                                  wp_reset_postdata();
                                } else {
                                    // No posts found
                                    echo '<p>No team members found.</p>';
                                }?>

                        
                    </div>
                </div>
            </section>
            <!-- team-area-end --> 
            
              <!-- testimonial-area -->
            <section class="testimonial-area pb-100" style="background: url(<?=bloginfo('template_directory');?>/img/bg/aliment-left2.png) no-repeat; background-position: left center;">
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
                                        <img src="<?=bloginfo('template_directory');?>/img/testimonial/testi_avatar.png" alt="img">
                                        <div class="ta-info">
                                            <h6>Margie R. Robinson</h6>
                                            <span>Web Developer</span>
                                        </div>
                                    </div>
                                    <div class="qt-img">
                                    <img src="<?=bloginfo('template_directory');?>/img/testimonial/qt-icon.png" alt="img">
                                    </div>
                                </div>
                                <div class="single-testimonial">
                                   <p>Praesent nec elit imperdiet, tincidunt ex at, malesuada lectus. Praesent cursus diam risus, non accumsan neque fermentum eget. Maecenas vel aliquam enim aliquam aliquet finibus nisl.</p>
                                    <div class="testi-author">
                                        <img src="<?=bloginfo('template_directory');?>/img/testimonial/testi_avatar.png" alt="img">
                                        <div class="ta-info">
                                            <h6>Margie R. Robinson</h6>
                                            <span>Web Developer</span>
                                        </div>
                                    </div>
                                     <div class="qt-img">
                                    <img src="<?=bloginfo('template_directory');?>/img/testimonial/qt-icon.png" alt="img">
                                    </div>
                                </div>
                               <div class="single-testimonial">
                                   <p>Praesent nec elit imperdiet, tincidunt ex at, malesuada lectus. Praesent cursus diam risus, non accumsan neque fermentum eget. Maecenas vel aliquam enim aliquam aliquet finibus nisl.</p>
                                    <div class="testi-author">
                                        <img src="<?=bloginfo('template_directory');?>/img/testimonial/testi_avatar.png" alt="img">
                                        <div class="ta-info">
                                            <h6>Margie R. Robinson</h6>
                                            <span>Web Developer</span>
                                        </div>
                                    </div>
                                     <div class="qt-img">
                                    <img src="<?=bloginfo('template_directory');?>/img/testimonial/qt-icon.png" alt="img">
                                    </div>
                                </div>
                                <div class="single-testimonial">
                                  <p>Praesent nec elit imperdiet, tincidunt ex at, malesuada lectus. Praesent cursus diam risus, non accumsan neque fermentum eget. Maecenas vel aliquam enim aliquam aliquet finibus nisl.</p>
                                    <div class="testi-author">
                                        <img src="<?=bloginfo('template_directory');?>/img/testimonial/testi_avatar.png" alt="img">
                                        <div class="ta-info">
                                            <h6>Margie R. Robinson</h6>
                                            <span>Web Developer</span>
                                        </div>
                                    </div>
                                     <div class="qt-img">
                                    <img src="<?=bloginfo('template_directory');?>/img/testimonial/qt-icon.png" alt="img">
                                    </div>
                                </div>
                                <div class="single-testimonial">
                                   <p>Praesent nec elit imperdiet, tincidunt ex at, malesuada lectus. Praesent cursus diam risus, non accumsan neque fermentum eget. Maecenas vel aliquam enim aliquam aliquet finibus nisl.</p>
                                    <div class="testi-author">
                                        <img src="<?=bloginfo('template_directory');?>/img/testimonial/testi_avatar.png" alt="img">
                                        <div class="ta-info">
                                            <h6>Margie R. Robinson</h6>
                                            <span>Web Developer</span>
                                        </div>
                                    </div>
                                     <div class="qt-img">
                                    <img src="<?=bloginfo('template_directory');?>/img/testimonial/qt-icon.png" alt="img">
                                    </div>
                                </div>
                                <div class="single-testimonial">
                                   <p>Praesent nec elit imperdiet, tincidunt ex at, malesuada lectus. Praesent cursus diam risus, non accumsan neque fermentum eget. Maecenas vel aliquam enim aliquam aliquet finibus nisl.</p>
                                    <div class="testi-author">
                                        <img src="<?=bloginfo('template_directory');?>/img/testimonial/testi_avatar.png" alt="img">
                                        <div class="ta-info">
                                            <h6>Margie R. Robinson</h6>
                                            <span>Web Developer</span>
                                        </div>
                                    </div>
                                     <div class="qt-img">
                                    <img src="<?=bloginfo('template_directory');?>/img/testimonial/qt-icon.png" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->
         
        </main>
        <!-- main-area-end -->


<?php get_footer(); ?>