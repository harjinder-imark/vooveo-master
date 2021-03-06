<?php 
/* 
Template Name: B2C page
*/
?>
<?php get_header(); ?>

	<div class="banner story_banner">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/contact_banner.jpg" alt="contact_banner">
        <div class="bnr_overlay"></div>
        <div class="container b2b_txt">
            <div class="b2b_info">
                <div class="b2b_tp wow flipInY" data-wow-delay="800ms" data-wow-duration="1000ms">
					<svg xmlns="http://www.w3.org/2000/svg" width="346px" height="308px" viewBox="0 0 376.48 377.616" x="0" y="0">
						<g><ellipse fill="none" stroke="#fff" stroke-width="2" stroke-miterlimit="10" stroke-dasharray="9.0356,7.0277" cx="191.234" cy="190" rx="175.667" ry="172" /></g>
                    </svg>
					<div class="b2b_txt_innr">
                        <div class="display-table-cell">
                            <h2><?php echo get_field( "btoc", 2 ); ?></h2>
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/b2c_smile.png" alt="b2c_smile">
                        </div>
                    </div>
                </div>
                <!--b2b_tp end-->
                <div class="b2b_rght wow fadeInRightBig" data-wow-delay="800ms" data-wow-duration="1000ms">
                    <h2><?php echo get_field( "b2c_heading", 2 ); ?></h2>
                    <p><?php echo get_field( "b2c_description", 2 ); ?></p>
                </div>
            </div>
        </div>
	</div>
	<!-- story_banner end -->
</header>


<section class="process_sec">
	<div class="container">
		<div class="process_innr">
			<div class="process_lft">
				<div class="process_step">
					<?php echo get_field('process_section');?>
					<?php echo get_field('creation_section');?>
					<!-- <h2>The Process</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    
					<h2>Creation</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing </p>
					
					<span class='lines top'></span><span class='lines right'></span><span class='lines bottom'></span><span class='lines left'></span> -->
				</div>
			</div>
            <div class="process_rght">
				<div class="display-table">
					<div class="display-table-cell">
						<h1>How <br> <span>the Videos are created</span></h1>
						<div class="process_rght_innr wow zoomIn animated" data-wow-delay="300ms" data-wow-duration="1000ms">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/video_cstmr.jpg" alt="video_cstmr">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--process_sec end-->




    <section class="differencial_sec btm_57">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="drntial_innr">
						<h2 class="wow fadeInUp animated" ><span><?php echo get_field('differencial_title');?></span></h2>
                        <p class="wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1000ms"><?php echo get_field('differencial_description');?></p>
						 <ul>
						 <?php
						 $args=array(
						  'category_name'=>'blog',
						  'post_status' => 'publish',
						  'posts_per_page'=>'6',
						  'order'=>'DESC'
						  );

							$my_query = null;
							$my_query = new WP_Query($args);
							if( $my_query->have_posts() ) {
								while ($my_query->have_posts()) : $my_query->the_post(); ?>
									<li class="srvc1 wow fadeInDown animated" data-wow-delay="300ms" data-wow-duration="1000ms">
										<a href="#" title="">
											<div class="dfrntial_service">
												<span class="line"></span>
												<span class="img_sec"></span>
												<h4><?php the_title();?></h4>
												<?php the_content();?>
											</div>
										</a>
									</li>
						<?php
						  endwhile;
						}
						wp_reset_query();  // Restore global post data stomped by the_post().
						?>
						</ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--differencial_sec end-->






    <section class="client_video_sec business_cstmr">
        <div class="container">
        <div class="row">
           
            <div class="aln_tp_innr">
                 <div class="cstmr_packages wow zoomIn animated" data-wow-delay="300ms" data-wow-duration="1000ms">
                  <h3>Our Offers and Packages</h3>    
                  <table>
                    <tbody>  
                    <tr class="active">
                     <td><h4>Price</h4></td>
                     <td><span>$1200</span></td>  
                     <td><span>$500</span></td>  
                     <td><span>$1200</span> </td>   
                    </tr>
                    <tr>
                     <td><h4>Duration</h4></td>
                     <td><span>$1200</span></td>  
                     <td><span>$500</span></td>  
                     <td><span>$1200</span> </td>   
                    </tr> 
                    <tr>
                     <td><h4>HD</h4></td>
                     <td><span>$1200</span></td>  
                     <td><span>$500</span></td>  
                     <td><span>$1200</span> </td>   
                    </tr> 
                    <tr>
                     <td><h4>Shoot</h4></td>
                     <td><span>$1200</span></td>  
                     <td><span>$500</span></td>  
                     <td><span>$1200</span> </td>   
                    </tr>  
                    </tbody>
                    <tfoot>
                    <tr>
                     <td></td>
                     <td></td>  
                     <td></td>  
                     <td></td>   
                    </tr>
                    </tfoot>  
                  </table>     
                      
                 </div>
                        <div class="client_video">
                            <h3 class="wow fadeInLeftBig animated" data-wow-delay="300ms" data-wow-duration="1000ms">Featured Client Videos</h3>
                            <div class="client_video_main effect-apollo wow zoomIn animated" data-wow-delay="300ms" data-wow-duration="1200ms">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/video_thumb_img3.png" alt="video_thumb3">
                                <div class="client_ovrly">

                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <a href="#" title=""><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/play_thumb.svg" alt="play_thumb"> </a>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <!--client_video_main end-->
                            <div class="client_video_main effect-apollo wow zoomIn animated" data-wow-delay="300ms" data-wow-duration="1400ms">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/video_thumb_img4.png" alt="video_thumb4">
                                <div class="client_ovrly">

                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <a href="#" title=""><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/play_thumb.svg" alt="play_thumb"> </a>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <!--client_video_main end-->
                            <a href="portfolio.html" title="" class="seeall">See All <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                 
            </div>
            <!--client_video end-->
            <div class="client_quote_form qt_form ">
                <div class="contact_form_main wow fadeInRightBig  animated" data-wow-delay="300ms" data-wow-duration="1400ms">
                    <h2>Get a Quote</h2>
                    <p>
                        <label>Name*</label>
                        <input type="text" placeholder="First Name" class="sml">
                        <input type="text" placeholder="Last Name" class="sml">
                    </p>

                    <p>
                        <label>Email*</label>
                        <input type="email" placeholder="Enter your email address">
                    </p>

                    <p>
                        <label>Phone*</label>
                        <input type="text" placeholder="Enter your phone number">
                    </p>
                    <p>
                        <label>Occation*</label>
                        <input type="text">

                    </p>
                    <p>
                        <label>Best way to reach you?</label>
                    </p>
                    <div class="radio_list">

                        <label class="lt_0" for="phone">
                            <input type="radio" checked="" id="phone" value="email" name="active" checked>
                            <span class="circle"></span>Phone
                        </label>
                        <label for="email">
                            <input type="radio" id="email" value="email" name="active">
                            <span class="circle"></span>Email
                        </label>
                    </div>

                    <p>
                        <label>Tell us about your need*</label>
                        <textarea></textarea>
                    </p>
                    <p>
                        <label>How did you find us?*</label>
                        <input type="text">
                    </p>

                    <a href="#" title="">Get A Quote</a>

                </div>
            </div>
        </div>
            </div>    
    </section>
    <section class="b2b_client">
        <div class="container wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1000ms">
            <h2>Our past Clients and Projects</h2>
            <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
            <div class="b2b_client_slider">
                <div id="owl-demo" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="b2b_pro_img">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/b2b_slider1.png" alt="b2b_slider1">
                        </div>
                    </div>
                    <div class="item">
                        <div class="b2b_pro_img">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/b2b_slider2.png" alt="b2b_slider2">
                        </div>
                    </div>
                    <div class="item">
                        <div class="b2b_pro_img">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/b2b_slider3.png" alt="b2b_slider3">
                        </div>
                    </div>
                    <div class="item">
                        <div class="b2b_pro_img">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/b2b_slider4.png" alt="b2b_slider4">
                        </div>
                    </div>
                    <div class="item">
                        <div class="b2b_pro_img">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/b2b_slider5.png" alt="b2b_slider5">
                        </div>
                    </div>
                    <div class="item">
                        <div class="b2b_pro_img">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/b2b_slider6.png" alt="b2b_slider6">
                        </div>
                    </div>
                    <div class="item">
                        <div class="b2b_pro_img">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/b2b_slider7.png" alt="b2b_slider7">
                        </div>
                    </div>
                    <div class="item">
                        <div class="b2b_pro_img">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/b2b_slider6.png" alt="b2b_slider6">
                        </div>
                    </div>
                    <div class="item">
                        <div class="b2b_pro_img">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/b2b_slider5.png" alt="b2b_slider5">
                        </div>
                    </div>
                    <div class="item">
                        <div class="b2b_pro_img">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/b2b_slider4.png" alt="b2b_slider4">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--b2b_client end-->
    <section class="b2b_testimonial">
        <div class="container">
            <div class="b2b_testi_innr">
                <h2>Testimonials</h2>
                <ul>
                    <li>
                        <div class="rst wow fadeInDown animated" data-wow-delay="300ms" data-wow-duration="1000ms">
                            <div class="testi_img">
                                <img alt="client" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/client.png">
                            </div>
                            <div class="testi_sec1">

                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
                                <h5>- John Doe</h5>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="rst wow fadeInDown animated" data-wow-delay="400ms" data-wow-duration="1000ms">
                            <div class="testi_img">
                                <img alt="client1" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/client1.png">
                            </div>
                            <div class="testi_sec1">

                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
                                <h5>- Shine Lee</h5>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="rst wow fadeInUp animated" data-wow-delay="500ms" data-wow-duration="1000ms">
                            <div class="testi_img">
                                <img alt="client2" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/client2.png">
                            </div>
                            <div class="testi_sec1">

                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
                                <h5>- Lisa Jose</h5>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="rst wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1000ms">
                            <div class="testi_img">
                                <img alt="client3" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/client3.png">
                            </div>
                            <div class="testi_sec1">

                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
                                <h5>- Jordan Mark</h5>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
	</section>
    

<?php get_footer();?> 