<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package potato_theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		   <?php if (is_single() || is_page() || is_archive()) { wp_title('',true); } else { bloginfo('description'); } ?> <?php if(is_front_page()){  } else { echo '-'; } ?> <?php bloginfo('name'); ?>
	</title>

	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/css/animate.css"/>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

	<meta name="description" content="This is where you put the keyword rich description for the website you are doing" />
	<meta name="keywords" content="Keywords for SEO capabilities">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper">
			<div id="content">

				<div class="header">
					<div class="top-menu">
			            <div class="container">
			            	<?php
				                  if (has_nav_menu('secondary')) :
				                    wp_nav_menu(array('theme_location' => 'secondary', 'menu_class' => 'hidden-xs secondary-navigation nav navbar-nav', 'menu_id' => 'top-navbar'));
				                  endif;
				            ?>
				            <div class="search-container hidden-xs">
					         	<div class="col-xs-12 search-col">
									<div id="sb-search" class="sb-search">
										<form action="<?php bloginfo('siteurl'); ?>" id="searchform" method="get">
											<input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="s" id="s"/>
											<input class="sb-search-submit" type="submit" value="" value="Search" id="searchsubmit" />
										</form>
									</div>
								</div>
							</div>
			            </div>		
			        </div>
						<div class="container">

							<div class="col-xs-2 col-sm-1 col-md-2">
								<div class="logo-container">
									<a href="<?php echo esc_url(home_url('/')); ?>"><img class="logo-full" class="img-responsive" src="<?php echo bloginfo('template_directory'); ?>/images/logo-full.png" /></a>
								</div>
							</div>

							<div class="col-xs-10 col-sm-11 hidden-md hidden-lg">

								<div class="navbar-header">
					              
					              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					                <span>Menu</span>
					              </button>

					              	<!-- <div class="search-container hidden-sm hidden-md hidden-lg">
					            		<div class="col-xs-12">
											<div id="sb-search" class="sb-search">
												<form action="<?php bloginfo('siteurl'); ?>" id="searchform" method="get">
													<input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="s" id="s"/>
											        <input class="sb-search-submit" type="submit" value="" value="Search" id="searchsubmit" />
													<span class="sb-icon-search"><i class="fa fa-search"></i></span>
												</form>
											</div>
										</div>
									</div> -->


					            </div>

				        	</div>

				            <div class="collapse navbar-collapse">
				            
					            	<!--<div class="search-container hidden-xs">
					            		<div class="col-xs-12 search-col">
											<div id="sb-search" class="sb-search">
												<form action="<?php bloginfo('siteurl'); ?>" id="searchform" method="get">
													<span class="sb-icon-search" onclick="togglesearch()"><i class="fa fa-search"></i></span>
												</form>
											</div>
										</div>
									</div>

									 <div id="header-search-popup" class="flow-hide header-search-box">
									 	<form action="<?php bloginfo('siteurl'); ?>" id="searchform" method="get">
											<input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="s" id="s"/>
											<input class="sb-search-submit" type="submit" value="" value="Search" id="searchsubmit" />
										</form>
									</div>-->



				            	<!--desktop and tablet menu -->
								<?php
				                  if (has_nav_menu('primary')) :
				                    wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'hidden-xs menu-navigation nav navbar-nav', 'menu_id' => 'full-navbar'));
				                  endif;
				                ?>

								<!--mobile menu-->
								<?php
				                  if (has_nav_menu('primary')) :
				                    wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'hidden-sm hidden-md hidden-lg menu-navigation nav navbar-nav', 'menu_id' => 'mobile-navbar'));
				                  endif;
				                ?>

				                <!--mobile menu secondary-->
								<?php
				                  if (has_nav_menu('secondary')) :
				                    wp_nav_menu(array('theme_location' => 'secondary', 'menu_class' => 'hidden-sm hidden-md hidden-lg menu-navigation nav navbar-nav secondary-navigation secondary-mobile', 'menu_id' => 'mobile-navbar'));
				                  endif;
				                ?>

				                <!--<a id="smoothdown" class="btn-border-orange subscription-button fleft hidden-xs" href="#">SUBSCRIBE</a>-->

				            </div>

				        </div> <!-- contain header -->
				</div> <!-- end of header -->