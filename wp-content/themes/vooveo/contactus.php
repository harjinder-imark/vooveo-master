<?php 
/* 
Template Name: Contact page
*/
?>
<?php get_header();?>
<!--main_nav end-->

    </header>
    <div class="banner story_banner">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/contact_banner.jpg" alt="contact_banner">
        <div class="bnr_overlay"></div>
        <div class="story_txt wow flipInY" data-wow-delay="500ms" data-wow-duration="1000ms">

            <div class="contact_info">

                <svg xmlns="http://www.w3.org/2000/svg" width="376.48px" height="377.616px" viewBox="0 0 376.48 377.616">
                    <g>

                        <ellipse fill="none" stroke="#aac5d2" stroke-width="2" stroke-miterlimit="10" stroke-dasharray="9.0356,7.0277" cx="191.234" cy="190" rx="175.667" ry="172" />
                    </g>
                </svg>


                <div class="contact_dot">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <h2>CONTACT US</h2>
                            <h2>REQUEST A QUOTE</h2>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- story_banner end -->
    <section class="contact_form_sec">
        <div class="container">
            <div class="row">
                <div class="col-sm-12" >
                    <div class="contact_anim wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1200ms">
                    <h2>What’s Your VideoStory?</h2>
                    <h3>We know your story is worth telling  <span>|</span>  We know you have a party/event budget   <span>|</span>  We know you want to save time</h3>
                    <p>Let us know your story and a friendly production team member will assist you to identify the best VideoStory options to meet your needs.</p>
                    <p>The following form is meant to provide us with initial information to provide you general consultation and cost for your project. </p>
                    <p>Please provide as much information as possible. </p>
                    </div>    
                    <div class="contact_form_main wow fadeInLeftBig animated" data-wow-delay="300ms" data-wow-duration="1000ms">
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
                            <label>I am a*</label>
                            <select>
                                <option>Select</option>
                                <option>Female</option>
                                <option>Male</option>
                            </select>
                        </p>
                        <a href="#" class="qt" title="">Get A Quote</a>
                    </div>

                </div>
            </div>
        </div>

    </section>




   	<?php get_footer();?>