<?php 
/* 
Template Name: Pricing page
*/
?>
<?php get_header(); ?>
	<!--main_nav end-->

	<div class="banner story_banner pricing_banner">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/pricing_banner.jpg" alt="pricing_banner">
        <div class="bnr_overlay"></div>
        <div class="story_txt wow flipInY" data-wow-delay="500ms" data-wow-duration="1000ms">

            <div class="contact_info">

                <svg xmlns="http://www.w3.org/2000/svg" width="376.48px" height="377.616px" viewBox="0 0 376.48 377.616">
                    <g>

                        <ellipse fill="none" stroke="#aac5d2" stroke-width="2" stroke-miterlimit="10" stroke-dasharray="9.0356,7.0277" cx="191.234" cy="190" rx="175.667" ry="172" />
                    </g>
                </svg>

               
                    <div class="display-table">
                        <div class="display-table-cell">
                            <?php echo get_field("page_header");?>
                        </div>
                    </div>
            
            </div>

        </div>
    </div>

</header>


    <!-- story_banner end -->
    <section class="wrks_tp">
        <div class="container">

			



            <div class="row">
                <div class="col-sm-12 wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1000ms">
                    <?php echo get_field("page_title");?>
                    <?php echo get_field("description");?>
                </div>
            </div>
            
			
			<div class="row">
             <div class="col-sm-12">
              
			  
			  <ul class="price_type">

				<?php
						$type = 'pricingandpackages';
						$args=array(
						  'post_type' => $type,
						  'post_status' => 'publish'
						  );

						$my_query = null;
						$my_query = new WP_Query($args);
						if( $my_query->have_posts() ) {
							$i=1;
						  while ($my_query->have_posts()) : $my_query->the_post(); ?>

						<li class="wow fadeInLeftBig animated" data-wow-delay="800ms" data-wow-duration="1000ms">
						 <div class="price_bx">
							<h4><?php the_title();?></h4> 
							<?php the_content();?>
						 </div>    
						</li> 

							<?php
						  $i++;
						  endwhile;
						}
						wp_reset_query();  // Restore global post data stomped by the_post().

						
						?>


                
              </ul>
			  



             </div>    
            </div>
        </div>
    </section>
    <!--wrks_tp end-->
    <section class="unlimited_package">
     <div class="container">
      <div class="row">
        <div class="col-sm-12 wow fadeInUp animated" data-wow-delay="500ms" data-wow-duration="1000ms">

			<?php echo get_field("unlimited_packages_section");?>
         
        </div>  
      </div>     
     </div>    
    </section>
    <section class="abt_main">
        <div class="container">
            <div class="abt_us wow fadeInUp animated" data-wow-duration="1000ms" data-wow-delay="650ms">
				<?php echo get_field("about_us_section");?>
                
            </div>
        </div>
    </section>
<?php get_footer();?>

    <script type="text/javascript">
		$(document).ready(function(){
			 $("body").addClass("fixed-header-on") && $(".main_nav_innr").addClass("object-visible");
		});

        $(window).on('scroll', function () {
            var scroll = $(window).scrollTop();
            if (scroll >= 70) {
                $("body").addClass("fixed-header-on") && $(".main_nav_innr").addClass("object-visible")
            } else {
                $("body").addClass("fixed-header-on") && $(".main_nav_innr").addClass("object-visible")
            }
        });
    </script>

