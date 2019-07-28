<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kateva
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page">
	<a class="sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'kateva' ); ?></a>

  <div class="container-fluid top-bar" >
    <div class="container">
     <header id="masthead" class="site-header sticky-top">
         <div class="social-media row">
          <div class="col text-right">
            <a href="https://www.linkedin.com/in/calevans/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="social-media-icons"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://twitter.com/CalEvans" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="social-media-icons"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg></a>&nbsp;&nbsp;&nbsp;&nbsp;
            <span class="search-icon"><img src="/wp-content/uploads/search.png" class="search-btn"></span>
          </div>
        </div>
        <nav class="navbar navbar-expand-lg">
            <?php
            the_custom_logo();
            if ( is_front_page() && is_home() ) :
              ?>
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand"><?php bloginfo( 'name' ); ?></a></h1>
              <?php
                else :
              ?>
               <div class="d-flex">
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
              <?php
                endif;
                $kateva_description = get_bloginfo( 'description', 'display' );
                if ( $kateva_description || is_customize_preview() ) :
              ?>
                <p class="site-description"><?php echo $kateva_description; /* WPCS: xss ok. */ ?></p>
            <?php endif; ?>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false" aria-label="Toggle Navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          </div><!-- navbar -->
            <div id="site-navigation" class="collapse navbar-collapse d-flex" id="navbarSupportedContent">
            <?php esc_html_e( '', 'kateva' ); ?>
             <?php

              wp_nav_menu( 
                [ 
                  'theme_location' => 'primary_menu',
                  'container'       => false,
                  'menu_id'         => 'bb4-primary-menu',
                  'menu_class'      => 'ml-auto navbar-nav',
                ] 
              );
              ?>
              </div><!-- site-navigation -->
            
          </nav><!-- #site-navigation -->
          

      </header><!-- #masthead -->
      <div id="search-box" class="search-box text-right mt-2">
          <form role="search" method="get" class="search-form" action="http://calevans.local/">
              <label>
                <span class="screen-reader-text">Search for:</span>
                <input type="search" class="search-field" placeholder="Search …" value="" name="s">
              </label>
                <input type="submit" class="search-submit" value="GO" style="color:white;">
		        </form>
        </div><!-- search-box -->
    </div><!-- container -->
  </div><!-- container-fluid -->
  
  <div id="page-contents" class="container">
       <div id="columns" class="row">

