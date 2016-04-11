<?php 
/* 
Template Name: Home
*/
?>
<?php get_header();?>
	<!--main_nav end-->
	<div class="banner">
		<div data-ride="carousel" class="carousel slide" id="myCarousel">
			<!-- Indicators -->
            <div class="carousel-inner" role="listbox">
				<div class="item active" style="    margin-bottom: -35px;">
					<!-- <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/banner.jpg" alt="banner"> -->
					<!-- <iframe width="1920" height="550" src="https://www.youtube.com/embed/E8MiYYKz9m8?autoplay=1&cc_load_policy=1&rel=0&modestbranding=1&autohide=1&showinfo=0&controls=0" frameborder="0" allowfullscreen></iframe>  -->
					<?php echo get_field('video_frame');?>
                    <div class="caption">
						<h1 class="animated fadeInLeftBig"><?php echo get_field('slider_title');?></h1>
                        <p class="animated fadeInRightBig"><?php echo get_field('slider_description');?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!--banner end-->
</header>

<section class="business_consumer">
	<div class="container">
		<ul class="nav nav-tabs" role="tablist">
			<li role="presentation" class="active">
				<div class="active_brdr_tp">
                <svg xmlns="http://www.w3.org/2000/svg" width="375px" height="208px" viewBox="0 0 374.418 208">
                <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" stroke-dasharray="8,7" d="M11,193.5 C11,97.126,89.127,19,185.5,19S360,97.126,360,193.5" />
                </svg>
				</div>
                <div class="active_brdr_btm">
					<svg xmlns="http://www.w3.org/2000/svg" width="375px" height="208px" viewBox="0 0 378.104 204">
                    <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" stroke-dasharray="8,7" d="M362.104,17 c0,96.374-78.127,174.5-174.5,174.5S13.104,113.374,13.104,17" />
                    </svg>
				</div>
                <a href="#home" aria-controls="home" role="tab" data-toggle="tab">
                        <div class="tp_sec_innr">
                            <div class="display-table-cell">
                                <h2><?php echo $value = get_field( "btob" ); ?></h2>
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/briefcase.png" alt="briefcase">
                            </div>
                        </div>
                    </a>
                </li>
                <li role="presentation">
                    <div class="active_brdr_tp">
                        <svg xmlns="http://www.w3.org/2000/svg" width="375px" height="208px" viewBox="0 0 374.418 208">
                            <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" stroke-dasharray="8,7" d="M11,193.5 C11,97.126,89.127,19,185.5,19S360,97.126,360,193.5" />
                        </svg>
                    </div>
                    <div class="active_brdr_btm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="375px" height="208px" viewBox="0 0 378.104 204">
                            <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" stroke-dasharray="8,7" d="M362.104,17 c0,96.374-78.127,174.5-174.5,174.5S13.104,113.374,13.104,17" />
                        </svg>
                    </div>
                    <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
                        <div class="tp_sec_innr">
                            <div class="display-table-cell">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/noun.png" alt="noun">
                                <h2><?php echo $value = get_field( "btoc" ); ?></h2>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
            
			
			
			<div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home">
                    <div class="business_tab_descp wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1000ms">

                        <h2><?php echo get_field( "b2b_heading" ); ?></h2>
                        <?php $img_b2b_array =  get_field("b2b_image");?>
                        <img src="<?= $img_b2b_array['url'];?>" >

						
                        <p><?php echo get_field( "b2b_description" ); ?></p>
                        <a href="<?php echo get_field( "b2b_url" ); ?>" title="">Know More</a>
                    </div>
                </div>

                <div role="tabpanel" class="tab-pane" id="profile">
                    <div class="business_tab_descp wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1000ms">
                        <h2><?php echo get_field( "b2c_heading" ); ?></h2>
						<?php $img_b2c_array =  get_field("b2c_image");?>
                        <img src="<?= $img_b2c_array['url'];?>" >
                        <p><?= get_field("b2c_description");?></p>
                        <a href="<?= get_field("b2c_url");?>" title="">Know More</a>
                    </div>
                </div>

            </div>








        </div>
    </section>
    <section class="differencial_sec">
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

							<!-- <p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></p> -->
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

    <section class="about_descp">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="signup_sec wow fadeInUp animated" data-wow-delay="650ms" data-wow-duration="1000ms">
                        <h2><?php echo get_field('newsletter_title');?></h2>
                        <p><?php echo get_field('newsletter_description');?></p>
                        
	<div id="mc_embed_signup">
	<form action="//vooveo.us3.list-manage.com/subscribe/post?u=772c7eec14edd92ed72759f16&amp;id=e034048fcb" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
		<div id="mc_embed_signup_scroll">
		
	
	<div class="mc-field-group">
		
		<input type="text" value="" name="NAME" class="required" id="mce-NAME"  placeholder="Name">
	</div>
	<div class="mc-field-group">
		
		<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL"  placeholder="Email">
	</div>
		<div id="mce-responses" class="clear">
			<div class="response" id="mce-error-response" style="display:none"></div>
			<div class="response" id="mce-success-response" style="display:none"></div>
		</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
		<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_772c7eec14edd92ed72759f16_e034048fcb" tabindex="-1" value=""></div>
		<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
		</div>
	</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[2]='NAME';ftypes[2]='text';fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->

                    </div>
                    <!--signup_sec end-->
                    <div class="testimonial wow fadeInUp animated" data-wow-delay="650ms" data-wow-duration="1000ms">
                        <h2>Testimonials</h2>
                        <div class="testi_bx">
                            <div id="tcb-testimonial-carousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->

							


                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">

									<?php
						$type = 'testimonials';
						$args=array(
						  'post_type' => $type,
						  'post_status' => 'publish'
						  );

						$my_query = null;
						$my_query = new WP_Query($args);
						if( $my_query->have_posts() ) {
							$i=1;
						  while ($my_query->have_posts()) : $my_query->the_post(); ?>

							<div class="item <?php if($i==1){ echo "active";}?>">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="rst">
                                                    <div class="testi_img">
                                                        <!-- <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/client.png" alt="client"> -->
														<?php the_post_thumbnail();?>
                                                    </div>
                                                    <div class="testi_sec1">

                                                        <?php the_content();?>
                                                        <h5>-<?php the_title();?></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--item end-->
							<?php
						  $i++;
						  endwhile;
						}
						wp_reset_query();  // Restore global post data stomped by the_post().

						
						?>



                                  



                                </div>
                            </div>
                        </div>
                    </div>
                    <!--testimonial end-->
                </div>
            </div>
        </div>
    </section>
    <!--about_descp end -->
    <section class="client_sec">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="client_sec_innr wow fadeInUp animated" data-wow-delay="500ms" data-wow-duration="1000ms">
                        <h2><span><?php echo get_field('clients_title');?></span></h2>
                        <p><?php echo get_field('clients_description');?></p>

						<ul>
						<?php
						$type = 'client';
						$args=array(
						  'post_type' => $type,
						  'post_status' => 'publish'
						  /*,
						  'posts_per_page' => -1,
						  'caller_get_posts'=> 1*/
						  );

						$my_query = null;
						$my_query = new WP_Query($args);
						if( $my_query->have_posts() ) {
						  while ($my_query->have_posts()) : $my_query->the_post(); ?>

							<li class="wow fadeInDown animated" data-wow-delay="100ms" data-wow-duration="1000ms">
                                <a href="#" title="">
                                    <div class="display-table">
                                        <div class="display-table-cell">
										
										
										<?php the_post_thumbnail();?>


                                        </div>
                                    </div>
                                </a>
                            </li>


							<!-- <p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></p> -->
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
    <!-- client_sec end -->


	<?php get_footer();?>



    