<footer>
        <div class="top_ftr">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1000ms">
                        <div class="ftr_sec1">
							<div class="navigation">
							<?php wp_nav_menu( array( 'menu' => 'footer-menu', 'container' => 'none', 'container_class' => 'menu-footer','theme_location' => 'primary'));?>
							</div>


                        </div>
                      
                        <div class="ftr_sec2">
                            <div class="ftr_logo">
                                <a href="<?php  echo esc_url( home_url( '/' ) ); ?>" title="">
									<!-- <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ftr_logo.png" alt="ftr_logo"> -->
									<img src="<?php echo get_option_tree('footer_site_logo');?>" alt="ftr_logo">
                                </a>
                            </div>

                            <ul>
                                <li><a href="<?php echo get_option_tree('facebook');?>" target="_blank" title="facebook"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="<?php echo get_option_tree('twitter'); ?>" title="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="<?php echo get_option_tree('google_plus'); ?>" title="googleplus" target="_blank"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li><a href="<?php echo get_option_tree('vine'); ?>" title="vine" target="_blank"><i class="fa fa-vine"></i>
</a>
                                </li>
                                <li><a href="<?php echo get_option_tree('you_tube'); ?>" title="you tube" target="_blank"><i class="fa fa-youtube-play"></i>

</a>
                                </li>
                            </ul>
                            <ul class="ftr_cntct">
								
								<?php echo get_option_tree('contact_numbers_details'); ?>
                             <!-- <li>Tel: <a href="tel:077-77-778-7878">077-77-778-7878</a></li>
                             <li>Cel: <a href="tel:08-88-888-8888">08-88-888-8888</a></li> -->   
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="btm_ftr">
         <div class="container">
          <div class="row">
            <div class="col-sm-12 wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1000ms">
             <div class="copyright">

				<?php echo get_option_tree('footerline'); ?>


              <ul>
                <li>Copyright &copy; <?php echo date('Y');?></li>  
                <li><a href="mailto:<?php echo get_option_tree('mailto');?>" title=""><?php echo get_option_tree('mailto');?></a></li>
                <li><?php echo get_option_tree('rights'); ?></li>  
              </ul>     
             </div>
             <div class="cpyrght_rght">
                <p>Made by <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/im.png" alt="im"></p> 
             </div>   
            </div>  
          </div>     
         </div>    
        </div>
    </footer>
	<?php wp_footer(); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/wow.min.js"></script>
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/animate.min.css" rel="stylesheet" type="text/css">
     <script>
    wow = new WOW(
                      {
                      boxClass:     'wow',      // default
                      animateClass: 'animated', // default
                      offset:       0,          // default
                      mobile:       false,       // default
                      live:         true        // default
                    }
                    )
                    wow.init();
    </script>
    <script type="text/javascript">
        $(window).on('scroll', function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 70) {
                $("body").addClass("fixed-header-on") && $(".main_nav_innr").addClass("object-visible")
            } else {
                $("body").removeClass("fixed-header-on") && $(".main_nav_innr").removeClass("object-visible");
            }
        });
    </script>
    <script>
        jQuery(function($) {
			//Preloader
			var preloader = $('.preloader');
			$(window).load(function(){
				preloader.remove();
			});
		});
    </script>
</body>

</html>