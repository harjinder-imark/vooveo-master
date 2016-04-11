<?php 
/* 
Template Name: How It works page
*/
?>
<?php get_header();?>



</header>
    <div class="banner story_banner">
        <img src="<?= get_field('banner_image');?>" alt="story_banner">
        <div class="bnr_overlay"></div>
        <div class="story_txt wow flipInY" data-wow-delay="500ms" data-wow-duration="1000ms">
			<div class="stry_info">
                <div class="display-table">
                    <div class="display-table-cell">
                        <h2><?= get_field('heading');?></h2>
						<p><?= get_field('short_description');?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- story_banner end -->
    <section class="wrks_tp">
     <div class="container">
      <div class="row">
       <div class="col-sm-12 wow fadeInUp animated"  data-wow-delay="700ms" data-wow-duration="1000ms">  
         <h2><?= get_field('page_heading');?></h2>  
         <p><?= get_field('page_description');?></p>  
       </div>
      </div>
     </div>     
    </section><!--wrks_tp end--> 




	<section class="wrk_process">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="wrk_process_innr">
						<h3 class="wow fadeInLeft animated"  data-wow-delay="800ms" data-wow-duration="1000ms">5<span><?= get_field('step_section_heading');?></span></h3>
						
						<ul>

							<?php
						$type = 'steps';
						$args=array(
						  'post_type' => $type,
						  'post_status' => 'publish',
						  'order'=>'ASC'
						  );

						$my_query = null;
						$my_query = new WP_Query($args);
						if( $my_query->have_posts() ) {
							$i=1;
							$datadelay = 300;
						  while ($my_query->have_posts()) : $my_query->the_post(); ?>
							<li class="wow fadeInDown animated" data-wow-delay="<?=$datadelay?>ms" data-wow-duration="1000ms">
								<div class="wrk_stp">
									<div class="wrkin">
										<?php the_post_thumbnail();?>
										<!-- <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/free_consult.png" alt="free_consult"> -->
										<h4><?= the_title();?></h4>
									</div>
									<?= the_content();?>
								</div>
							</li>
							<?php
						  $i++;
							$datadelay= $datadelay+100;
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
    
	<section class="abt_main">
        <div class="container">
			<div class="abt_us wow fadeInUp animated" data-wow-duration="1000ms" data-wow-delay="650ms">
				<?php echo get_field("about_us_section", 27);?>
            </div>
        </div>
    </section>

   	<?php get_footer();?>