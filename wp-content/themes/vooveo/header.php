<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>


<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>


   


    <link rel="icon" type="image/x-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicon.png">
    <!-- <title>:: Vooveo - Home ::</title> -->
    <!-- Bootstrap -->
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,900italic,900,800,800italic,700italic,700,600italic,600,500italic,500,400italic,300,200italic,200,100,100italic,300italic' rel='stylesheet' type='text/css'>
 
</head>



<body>

	<!--preloader-->
    <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i>
    </div>
    <!--preloader-->
    <header>
        <div class="main_nav">

            <div class="main_nav_innr">
                <div class="container">
                    <div class="logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="logo">
							<!-- <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png"> -->
							<img src="<?php echo get_option_tree('site_logo');?>">
                        </a>
                    </div>
                    <!--logo end-->
                    <div class="navigation">
						<?php wp_nav_menu( array( 'menu' => 'header-menu', 'container' => 'none', 'container_class' => 'menu-header','theme_location' => 'primary'));?>
                    </div>
                </div>
            </div>
        </div>
        


