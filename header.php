<!doctype html>
   <!--[if lt IE 10]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php
        if( ( is_home() || is_front_page() ) ) {
            echo get_bloginfo('name');
            } else {
            echo get_bloginfo('name') . ' - ';?><?php wp_title('');
        }?>
        </title>

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- Icons & Favicons -->
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<link href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png" rel="apple-touch-icon" />
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
		 <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">


        <!--[if lt IE 10]>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/library/css/styleie.css" />
	 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
  <script src="//s3.amazonaws.com/nwapi/nwmatcher/nwmatcher-1.2.5-min.js"></script>
  <script src="//html5base.googlecode.com/svn-history/r38/trunk/js/selectivizr-1.0.3b.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
<![endif]-->

		<?php wp_head(); ?>

		<!-- Drop Google Analytics here -->
		<!-- end analytics -->

	</head>

	<body <?php body_class(); ?>>
	    <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>
		<div class="off-canvas-wrap" data-offcanvas>
			<div class="inner-wrap">
				<div id="container">
					<header class="header" role="banner">
							
						 <!-- This navs will be applied to the topbar, above all content 
							  To see additional nav styles, visit the /partials directory -->
						 <?php // get_template_part( 'partials/nav', 'top-offcanvas' ); ?>
								 
						<div id="inner-header" class="row">
							<div class="large-12 medium-12 columns">
							</div>
							
							 <!-- This navs will be applied to the main, under the logo 
								  To see additional nav styles, visit the /partials directory -->

                            <!--[if lt IE 10]>

                            <![endif]-->
								  
							 <?php get_template_part( 'partials/nav', 'main-offcanvas' ); ?>

                            <!--

                            <button id="accessible">&#63;</button>

                            <div id="modal" aria-hidden="true" aria-labelledby="modalTitle" aria-describedby="modalDescription" role="dialog">
                                <div id="modalDescription" class="screen-reader-text">
                                Beginning of dialog window. Escape will cancel and close the window.
                                </div>
                                <h1 id="modalTitle">Accessibility Tips</h1>

                                <?php joints_main_nav(); ?>

                                <button id="modalCloseButton" class="modalCloseButton" title="Close Accessibility Tips"><span id="cancel">Close</span></button>

                            </div>
                            <div id="modalOverlay" tabindex="-1"></div>

                            -->

                            <button href="#" class="scrollToTop"></button>
                            <span id="scrollAlert">Back to Top</span>

						</div> <!-- end #inner-header -->

					</header> <!-- end .header -->
