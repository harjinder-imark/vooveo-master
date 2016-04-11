<?php 
/* 
Template Name: Our Story page
*/
?>

<?php get_header();?>
        <!--main_nav end-->
    </header>
    <div class="banner story_banner">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/story_banner.jpg" alt="story_banner">
        <div class="bnr_overlay"></div>
        <div class="story_txt wow flipInY" data-wow-delay="500ms" data-wow-duration="1000ms">

            <div class="stry_info">
                <div class="display-table">
                    <div class="display-table-cell">
                        <h2>Our Story</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- story_banner end -->
    <section class="story_descp">
        <div class="container">
            <div class="story_descp_tp">
                <div class="story_descp_innr wow fadeInUp animated" data-wow-duration="1000ms" data-wow-delay="700ms">
                    <h2>A picture is worth a thousand words, but a collection of pictures tells a story.</h2>
                    <p>Our expertise in multimedia production and storytelling can encompass all your life’s defining moments. And our creative juices are already flowing to start producing and developing an innovative, artistically compelling and meaningful story.</p>
                </div>
            </div>
            <div class="story_descp_btm wow fadeInUp animated" data-wow-duration="1000ms" data-wow-delay="300ms">
                <img src="images/author_img.png" alt="author_img">
                <p>If you are like me, you probably live in a world where you capture instant, static snapshots and active video clips of moments with family and friends. The many photos, videos, and images documenting moments of laughter and spontaneity, important milestones, and enchanting discoveries are often instantly shared on social networks . . . to be commented on or "liked," and more often they're now archived on your phone, computer, or in the cloud . . . never to be seen and relived again. But now, these long-ignored photos and videos can be put together to tell a story.</p>
                <p>In preparation for a milestone birthday party, I had the idea to curate all of my content and produce a video presentation to show at my party to share memories with my family and friends — the VideoStory was born.
                </p>
                <p>If your world consists of constant “selfies” and pictures of your family and friends, our world consists of constant imagination, creativity, and artistic storytelling to make your photos and videos come alive. By using your content to document, share, and tell an original VideoStory, we strive to capture a story that you will be proud to share with others.</p>
                <h4>Believe me, your story is worth telling. What’s your VideoStory?</h4>
                <h4>-Michael P. McKinney <span>(VOOVEO, Founder)</span></h4>
            </div>
        </div>
        </div>
    </section>
    <!--story_descp end-->
    <section class="abt_main">
        <div class="container">
            <div class="abt_us wow fadeInUp animated" data-wow-duration="1000ms" data-wow-delay="650ms">
                <h2><span>Want to Know more about Us?</span></h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <div class="abt_btn">
                    <a href="portfolio.html" title="" class="wtch">Watch VideoStories</a>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer();?>