<?php 
/* 
Template Name: Portfolio page
*/
?>
<?php get_header(); ?>
	<!--main_nav end-->
</header>
    <section class="portfolio_sec filter-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="portfolio_innr">
                        <h2><span>Portfolio</span></h2>
                        <p>Get Ideas. Get Inspired.</p>
                        <div class="portfolio_descp">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                        
						<div class="filter-container isotopeFilters3">
							<ul class="filter">
								<li class="active"><a href="#" data-filter="*">All</a></li>
								<?php
								$tax_terms = get_terms('portfolio_category', array('hide_empty' => false));
								foreach($tax_terms as $tax_term){
									$tax_term->name = str_replace('/','', $tax_term->name);
								?>
									<li><a href="#" data-filter=".<?=strtolower(str_replace(' ','',$tax_term->name));?>" onclick="return false;"><?= $tax_term->name ?></a></li>
								<?php
								}
								?>
							</ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio_sec end -->
    <section class="portfolio-section port-col">
        <div class="container">
            <div class="row">
                <div class="isotopeContainer3">

					



					<?php
						$type = 'portfolio';
						$args=array(
						  'post_type' => $type,
						  'post_status' => 'publish'
						  );

						$my_query = null;
						$my_query = new WP_Query($args);
						if( $my_query->have_posts() ) {
							$i=1;
						  while ($my_query->have_posts()) : $my_query->the_post();
						  
						  //print_r($post);
						 // print_r(get_the_category());
						
						
						$category = get_the_terms( $post->ID, 'portfolio_category' );
						
						foreach ( $category as $cat){
							$category_link = get_category_link($cat->term_id );
							$catname = $cat->name;
							$catname = str_replace('/','', $catname);
						
							}
						  ?>
						<div class="col-sm-6 isotopeSelector <?=strtolower(str_replace(' ','',$catname));?>">

						  



                        <article class="wow fadeInLeftBig animated" data-wow-delay="300ms" data-wow-duration="1000ms">
                            <figure>
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio/portfolio1.jpg" alt="">
                                <div class="portfolio_cstm_img">
                                    <div class="display-table">
                                        <div class="display-table-cell"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/play_thumb.svg">
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-background">
                                    <div class="inner">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/play_thumb.svg">
                                        <h3><?= the_title();?></h3>
                                        <h5><?= the_content();?></h5>
                                    </div>
                                </div>
                                <div class="overlay">
                                    <div class="inner-overlay">
                                        <div class="inner-overlay-content with-icons">
                                            <a title="First Image" class="fancybox-pop" rel="portfolio-1" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio/portfolio1.jpg"></a>
                                            <a title="Second Image" class="fancybox-pop" style="display: none" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio/portfolio4.jpg" rel="portfolio-1"></a>
                                            <a title="Third Image" class="fancybox-pop" style="display: none" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio/portfolio3.jpg" rel="portfolio-1"></a>

                                        </div>
                                    </div>
                                </div>
                            </figure>

                        </article>
                    </div>






							<?php
						  $i++;
						  endwhile;
						}
						wp_reset_query();  // Restore global post data stomped by the_post().

						
						?>




                    <!-- <div class="col-sm-6 isotopeSelector birthday">
                        <article class="wow fadeInLeftBig animated" data-wow-delay="300ms" data-wow-duration="1000ms">
                            <figure>
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio/portfolio1.jpg" alt="">
                                <div class="portfolio_cstm_img">
                                    <div class="display-table">
                                        <div class="display-table-cell"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/play_thumb.svg">
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-background">
                                    <div class="inner">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/play_thumb.svg">
                                        <h3>VideoGreeting</h3>
                                        <h5>Happy Holidays and Happy New Year!</h5>
                                    </div>
                                </div>
                                <div class="overlay">
                                    <div class="inner-overlay">
                                        <div class="inner-overlay-content with-icons">
                                            <a title="First Image" class="fancybox-pop" rel="portfolio-1" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio/portfolio1.jpg"></a>
                                            <a title="Second Image" class="fancybox-pop" style="display: none" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio/portfolio4.jpg" rel="portfolio-1"></a>
                                            <a title="Third Image" class="fancybox-pop" style="display: none" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio/portfolio3.jpg" rel="portfolio-1"></a>

                                        </div>
                                    </div>
                                </div>
                            </figure>

                        </article>
                    </div>
                    <div class="col-sm-6 isotopeSelector business">
                        <article class="wow fadeInLeftBig animated" data-wow-delay="500ms" data-wow-duration="1000ms">
                            <figure>
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio/portfolio3.jpg" alt="">
                                <div class="portfolio_cstm_img">
                                    <div class="display-table">
                                        <div class="display-table-cell"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/play_thumb.svg">
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-background">
                                    <div class="inner">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/play_thumb.svg">
                                        <h3>VideoGreeting</h3>
                                        <h5>Happy Holidays and Happy New Year!</h5>
                                    </div>
                                </div>
                                <div class="overlay">
                                    <div class="inner-overlay">
                                        <div class="inner-overlay-content with-icons">
                                            <a title="First Image" class="fancybox-pop" rel="portfolio-24" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio/portfolio3.jpg"></a>
                                            <a title="Second Image" class="fancybox-pop" style="display: none" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio/portfolio1.jpg" rel="portfolio-24"></a>
                                            <a title="Third Image" class="fancybox-pop" style="display: none" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio/portfolio5.jpg" rel="portfolio-24"></a>

                                        </div>
                                    </div>
                                </div>
                            </figure>

                        </article>
                    </div>

                    <div class="col-sm-6 isotopeSelector others business">
                        <article class="wow fadeInRightBig animated"data-wow-delay="600ms" data-wow-duration="1000ms" >
                            <figure>
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio/portfolio4.jpg" alt="">
                                <div class="portfolio_cstm_img">
                                    <div class="display-table">
                                        <div class="display-table-cell"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/play_thumb.svg">
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-background">
                                    <div class="inner">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/play_thumb.svg">
                                        <h3>VideoGreeting</h3>
                                        <h5>Happy Holidays and Happy New Year!</h5>
                                    </div>
                                </div>
                                <div class="overlay">
                                    <div class="inner-overlay">
                                        <div class="inner-overlay-content with-icons">
                                            <a title="First Image" class="fancybox-pop" rel="portfolio-25" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio/portfolio4.jpg"></a>
                                            <a title="Second Image" class="fancybox-pop" style="display: none" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio/portfolio2.jpg" rel="portfolio-25"></a>
                                            <a title="Third Image" class="fancybox-pop" style="display: none" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio/portfolio6.jpg" rel="portfolio-25"></a>

                                        </div>
                                    </div>
                                </div>
                            </figure>

                        </article>
                    </div>

                    <div class="col-sm-6 isotopeSelector wedding bar">
                        <article class="wow fadeInRightBig animated" data-wow-delay="400ms" data-wow-duration="1000ms">
                            <figure>
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio/portfolio2.jpg" alt="">
                                <div class="portfolio_cstm_img">
                                    <div class="display-table">
                                        <div class="display-table-cell"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/play_thumb.svg">
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-background">
                                    <div class="inner">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/play_thumb.svg">
                                        <h3>VideoGreeting</h3>
                                        <h5>Happy Holidays and Happy New Year!</h5>
                                    </div>
                                </div>
                                <div class="overlay">
                                    <div class="inner-overlay">
                                        <div class="inner-overlay-content with-icons">
                                            <a title="First Image" class="fancybox-pop" rel="portfolio-2" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio/portfolio2.jpg"></a>
                                            <a title="Second Image" class="fancybox-pop" style="display: none" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio/portfolio3.jpg" rel="portfolio-2"></a>
                                            <a title="Third Image" class="fancybox-pop" style="display: none" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio/portfolio6.jpg" rel="portfolio-2"></a>

                                        </div>
                                    </div>
                                </div>
                            </figure>

                        </article>
                    </div>

                    <div class="col-sm-6 isotopeSelector tribute">
                        <article class="wow fadeInLeftBig animated" data-wow-delay="500ms" data-wow-duration="1000ms">
                            <figure>
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio/portfolio3.jpg" alt="">
                                <div class="portfolio_cstm_img">
                                    <div class="display-table">
                                        <div class="display-table-cell"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/play_thumb.svg">
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-background">
                                    <div class="inner">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/play_thumb.svg">
                                        <h3>VideoGreeting</h3>
                                        <h5>Happy Holidays and Happy New Year!</h5>
                                    </div>
                                </div>
                                <div class="overlay">
                                    <div class="inner-overlay">
                                        <div class="inner-overlay-content with-icons">
                                            <a title="First Image" class="fancybox-pop" rel="portfolio-24" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio/portfolio3.jpg"></a>
                                            <a title="Second Image" class="fancybox-pop" style="display: none" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio/portfolio1.jpg" rel="portfolio-24"></a>
                                            <a title="Third Image" class="fancybox-pop" style="display: none" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio/portfolio5.jpg" rel="portfolio-24"></a>

                                        </div>
                                    </div>
                                </div>
                            </figure>

                        </article>
                    </div>

                    <div class="col-sm-6 isotopeSelector others tribute">
                        <article class="wow fadeInRightBig animated"data-wow-delay="600ms" data-wow-duration="1000ms" >
                            <figure>
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio/portfolio4.jpg" alt="">
                                <div class="portfolio_cstm_img">
                                    <div class="display-table">
                                        <div class="display-table-cell"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/play_thumb.svg">
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-background">
                                    <div class="inner">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/play_thumb.svg">
                                        <h3>VideoGreeting</h3>
                                        <h5>Happy Holidays and Happy New Year!</h5>
                                    </div>
                                </div>
                                <div class="overlay">
                                    <div class="inner-overlay">
                                        <div class="inner-overlay-content with-icons">
                                            <a title="First Image" class="fancybox-pop" rel="portfolio-25" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio/portfolio4.jpg"></a>
                                            <a title="Second Image" class="fancybox-pop" style="display: none" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio/portfolio2.jpg" rel="portfolio-25"></a>
                                            <a title="Third Image" class="fancybox-pop" style="display: none" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio/portfolio6.jpg" rel="portfolio-25"></a>

                                        </div>
                                    </div>
                                </div>
                            </figure>

                        </article>
                    </div>

                    <div class="col-sm-6 isotopeSelector others wedding">
                        <article class="wow fadeInLeftBig animated" data-wow-delay="700ms" data-wow-duration="1000ms">
                            <figure>
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio/portfolio5.jpg" alt="">
                                <div class="portfolio_cstm_img">
                                    <div class="display-table">
                                        <div class="display-table-cell"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/play_thumb.svg">
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-background">
                                    <div class="inner">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/play_thumb.svg">
                                        <h3>VideoGreeting</h3>
                                        <h5>Happy Holidays and Happy New Year!</h5>
                                    </div>
                                </div>
                                <div class="overlay">
                                    <div class="inner-overlay">
                                        <div class="inner-overlay-content with-icons">
                                            <a title="First Image" class="fancybox-pop" rel="portfolio-26" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio/portfolio5.jpg"></a>
                                            <a title="Second Image" class="fancybox-pop" style="display: none" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio/portfolio1.jpg" rel="portfolio-26"></a>
                                            <a title="Third Image" class="fancybox-pop" style="display: none" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio/portfolio4.jpg" rel="portfolio-26"></a>

                                        </div>
                                    </div>
                                </div>
                            </figure>

                        </article>
                    </div>

                    <div class="col-sm-6 isotopeSelector birthday tribute">
                        <article class="wow fadeInRightBig animated" data-wow-delay="800ms" data-wow-duration="1000ms">
                            <figure>
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio/portfolio6.jpg" alt="">
                                <div class="portfolio_cstm_img">
                                    <div class="display-table">
                                        <div class="display-table-cell"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/play_thumb.svg">
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-background">
                                    <div class="inner">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/play_thumb.svg">
                                        <h3>VideoGreeting</h3>
                                        <h5>Happy Holidays and Happy New Year!</h5>
                                    </div>
                                </div>
                                <div class="overlay">
                                    <div class="inner-overlay">
                                        <div class="inner-overlay-content with-icons">
                                            <a title="First Image" class="fancybox-pop" rel="portfolio-27" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio/portfolio6.jpg"></a>
                                            <a title="Second Image" class="fancybox-pop" style="display: none" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio/portfolio5.jpg" rel="portfolio-27"></a>
                                            <a title="Third Image" class="fancybox-pop" style="display: none" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio/portfolio3.jpg" rel="portfolio-27"></a>

                                        </div>
                                    </div>
                                </div>
                            </figure>

                        </article>
                    </div> -->



                </div>
            </div>
        </div>
    </section>


  



	

<?php get_footer(); ?>

    <script>
        wow = new WOW({
            boxClass: 'wow', // default
            animateClass: 'animated', // default
            offset: 0, // default
            mobile: false, // default
            live: true // default
        })
        wow.init();
    </script>

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



    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/isotope.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.fancybox.pack.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/main.js"></script>

