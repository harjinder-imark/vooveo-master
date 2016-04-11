<?php 
/* 
Template Name: Home page
*/
?>
<?php get_header();?>
	

	<!--main_nav end-->
        <div class="banner">
            <div data-ride="carousel" class="carousel slide" id="myCarousel">
                <!-- Indicators -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/banner.jpg" alt="banner">
                        <div class="caption">
                            <h1 class="animated fadeInLeftBig">VOOVEO</h1>
                            <p class="animated fadeInRightBig">Told by you. Created by us.</p>
                            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services"><i class="fa fa-play"></i></a>
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
                                <h2>B2C</h2>
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
                                <h2>B2B</h2>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
            
			
			
			<div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home">
                    <div class="business_tab_descp wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1000ms">
                        <h2><?php echo get_field('title'); ?></h2>
						<?php $img_array = get_field('image');?>
						<img src="<?= $img_array['url'];?>" alt="bouquet">
                        <p><?php echo get_field('description'); ?></p>
                        <a href="<?php echo get_field('link'); ?>" title="">Know More</a>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="profile">
                    <div class="business_tab_descp wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1000ms">
                        <h2>Business to Business</h2>
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/bouquet.jpg" alt="bouquet">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC.</p>
                        <a href="b2b.html" title="">Know More</a>
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
                        <h2 class="wow fadeInUp animated" ><span>Differencial</span></h2>
                        <p class="wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1000ms">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                        <ul>
                            <li class="srvc1 wow fadeInDown animated" data-wow-delay="300ms" data-wow-duration="1000ms">
                                <a href="#" title="">
                                    <div class="dfrntial_service">
                                        <span class="line"></span>
                                        <span class="img_sec"></span>
                                        <h4>Lorem Ipsum</h4>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden...</p>
                                    </div>
                                </a>
                            </li>
                            <li class="srvc2 wow fadeInDown animated" data-wow-delay="450ms" data-wow-duration="1000ms">
                                <a href="#" title="">
                                    <div class="dfrntial_service">
                                        <span class="line"></span>
                                        <span class="img_sec"></span>
                                        <h4>Lorem Ipsum</h4>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden...</p>
                                    </div>
                                </a>
                            </li>
                            <li class="srvc3 wow fadeInDown animated" data-wow-delay="550ms" data-wow-duration="1000ms">
                                <a href="#" title="">
                                    <div class="dfrntial_service">
                                        <span class="line"></span>
                                        <span class="img_sec"></span>
                                        <h4>Lorem Ipsum</h4>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden...</p>
                                    </div>
                                </a>
                            </li>
                            <li class="srvc4 wow fadeInUp animated" data-wow-delay="650ms" data-wow-duration="1000ms">
                                <a href="#" title="">
                                    <div class="dfrntial_service">
                                        <span class="line"></span>
                                        <span class="img_sec"></span>
                                        <h4>Lorem Ipsum</h4>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden...</p>
                                    </div>
                                </a>
                            </li>
                            <li class="srvc5 wow fadeInUp animated" data-wow-delay="750ms" data-wow-duration="1000ms">
                                <a href="#" title="">
                                    <div class="dfrntial_service">
                                        <span class="line"></span>
                                        <span class="img_sec"></span>
                                        <h4>Lorem Ipsum</h4>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden...</p>
                                    </div>
                                </a>
                            </li>
                            <li class="srvc6 wow fadeInUp animated" data-wow-delay="850ms" data-wow-duration="1000ms">
                                <a href="#" title="">
                                    <div class="dfrntial_service">
                                        <span class="line"></span>
                                        <span class="img_sec"></span>
                                        <h4>Lorem Ipsum</h4>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden...</p>
                                    </div>
                                </a>
                            </li>

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
                        <h2>Signup to our Newsletter</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                        <form>
                            <input type="text" placeholder="Name">
                            <input type="email" placeholder="Email">
                            <button>SignUp</button>
                        </form>
                    </div>
                    <!--signup_sec end-->
                    <div class="testimonial wow fadeInUp animated" data-wow-delay="650ms" data-wow-duration="1000ms">
                        <h2>Testimonials</h2>
                        <div class="testi_bx">
                            <div id="tcb-testimonial-carousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="rst">
                                                    <div class="testi_img">
                                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/client.png" alt="client">
                                                    </div>
                                                    <div class="testi_sec1">

                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                        <h5>-John Doe</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--item end-->
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="rst">
                                                    <div class="testi_img">
                                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/client.png" alt="client">
                                                    </div>
                                                    <div class="testi_sec1">

                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                        <h5>-Danny</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="rst">
                                                    <div class="testi_img">
                                                        <img src="images/client.png" alt="client">
                                                    </div>
                                                    <div class="testi_sec1">

                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                        <h5>-John Doe</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--item end-->
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="rst">
                                                    <div class="testi_img">
                                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/client.png" alt="client">
                                                    </div>
                                                    <div class="testi_sec1">

                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                        <h5>-Danny</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                        <h2><span>Our past Clients and Projects</span></h2>
                        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                        <ul>
                            <li class="wow fadeInDown animated" data-wow-delay="100ms" data-wow-duration="1000ms">
                                <a href="#" title="">
                                    <div class="display-table">
                                        <div class="display-table-cell"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/brnd1.png" alt="brnd1">
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="wow fadeInDown animated" data-wow-delay="200ms" data-wow-duration="1000ms">
                                <a href="#" title="">
                                    <div class="display-table">
                                        <div class="display-table-cell"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/brnd2.png" alt="brnd2">
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="wow fadeInDown animated" data-wow-delay="300ms" data-wow-duration="1000ms">
                                <a href="#" title="">
                                    <div class="display-table">
                                        <div class="display-table-cell"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/brnd3.png" alt="brnd3">
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="wow fadeInDown animated" data-wow-delay="400ms" data-wow-duration="1000ms">
                                <a href="#" title="">
                                    <div class="display-table">
                                        <div class="display-table-cell"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/brnd4.png" alt="brnd4">
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="wow fadeInLeft animated" data-wow-delay="500ms" data-wow-duration="1000ms">
                                <a href="#" title="">
                                    <div class="display-table">
                                        <div class="display-table-cell"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/brnd5.png" alt="brnd5">
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="wow fadeInLeft animated" data-wow-delay="600ms" data-wow-duration="1000ms">
                                <a href="#" title="">
                                    <div class="display-table">
                                        <div class="display-table-cell"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/brnd6.png" alt="brnd6">
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="wow fadeInRight animated" data-wow-delay="700ms" data-wow-duration="1000ms">
                                <a href="#" title="">
                                    <div class="display-table">
                                        <div class="display-table-cell"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/brnd7.png" alt="brnd7">
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="wow fadeInRight animated" data-wow-delay="800ms" data-wow-duration="1000ms">
                                <a href="#" title="">
                                    <div class="display-table">
                                        <div class="display-table-cell"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/brnd8.png" alt="brnd8">
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="wow fadeInUp animated" data-wow-delay="900ms" data-wow-duration="1000ms">
                                <a href="#" title="">
                                    <div class="display-table">
                                        <div class="display-table-cell"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/brnd9.png" alt="brnd9">
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="wow fadeInUp animated" data-wow-delay="1000ms" data-wow-duration="1000ms">
                                <a href="#" title="">
                                    <div class="display-table">
                                        <div class="display-table-cell"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/brnd10.png" alt="brnd10">
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="wow fadeInUp animated" data-wow-delay="1100ms" data-wow-duration="1000ms">
                                <a href="#" title="">
                                    <div class="display-table">
                                        <div class="display-table-cell"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/brnd11.png" alt="brnd11">
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="wow fadeInUp animated" data-wow-delay="1200ms" data-wow-duration="1000ms">
                                <a href="#" title="">
                                    <div class="display-table">
                                        <div class="display-table-cell"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/brnd12.png" alt="brnd12">
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- client_sec end -->


	<?php get_footer();?>



    