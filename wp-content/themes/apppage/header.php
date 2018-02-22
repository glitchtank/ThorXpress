<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package apppage
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'apppage' ); ?></a>
		<header id="masthead" class="site-header" role="banner">
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<div class="top-nav container">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
						<span class="m_menu_icon"></span>
						<span class="m_menu_icon"></span>
						<span class="m_menu_icon"></span>
					</button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

					<div id="top-search">
						<a href="#"><i class="fa fa-search"></i></a>
					</div>
					<div class="show-search">
						<?php get_search_form(); ?>
					</div>
					<div id="top-social">
						<?php if(get_theme_mod('apppage_facebook')) : ?><a href="<?php echo esc_url(get_theme_mod('apppage_facebook')); ?>" target="_blank"><i class="fa fa-facebook"></i></a><?php endif; ?>
						<?php if(get_theme_mod('apppage_twitter')) : ?><a href="<?php echo esc_url(get_theme_mod('apppage_twitter')); ?>" target="_blank"><i class="fa fa-twitter"></i></a><?php endif; ?>
						<?php if(get_theme_mod('apppage_instagram')) : ?><a href="<?php echo esc_url(get_theme_mod('apppage_instagram')); ?>" target="_blank"><i class="fa fa-instagram"></i></a><?php endif; ?>
						<?php if(get_theme_mod('apppage_pinterest')) : ?><a href="<?php echo esc_url(get_theme_mod('apppage_pinterest')); ?>" target="_blank"><i class="fa fa-pinterest"></i></a><?php endif; ?>
						<?php if(get_theme_mod('apppage_bloglovin')) : ?><a href="<?php echo esc_url(get_theme_mod('apppage_bloglovin')); ?>" target="_blank"><i class="fa fa-heart"></i></a><?php endif; ?>
						<?php if(get_theme_mod('apppage_google')) : ?><a href="<?php echo esc_url(get_theme_mod('apppage_google')); ?>" target="_blank"><i class="fa fa-google-plus"></i></a><?php endif; ?>
						<?php if(get_theme_mod('apppage_tumblr')) : ?><a href="<?php echo esc_url(get_theme_mod('apppage_tumblr')); ?>.tumblr.com/" target="_blank"><i class="fa fa-tumblr"></i></a><?php endif; ?>
						<?php if(get_theme_mod('apppage_youtube')) : ?><a href="<?php echo esc_url(get_theme_mod('apppage_youtube')); ?>" target="_blank"><i class="fa fa-youtube-play"></i></a><?php endif; ?>
						<?php if(get_theme_mod('apppage_dribbble')) : ?><a href="<?php echo esc_url(get_theme_mod('apppage_dribbble')); ?>" target="_blank"><i class="fa fa-dribbble"></i></a><?php endif; ?>
						<?php if(get_theme_mod('apppage_soundcloud')) : ?><a href="<?php echo esc_url(get_theme_mod('apppage_soundcloud')); ?>" target="_blank"><i class="fa fa-soundcloud"></i></a><?php endif; ?>
						<?php if(get_theme_mod('apppage_vimeo')) : ?><a href="<?php echo esc_url(get_theme_mod('apppage_vimeo')); ?>" target="_blank"><i class="fa fa-vimeo-square"></i></a><?php endif; ?>
						<?php if(get_theme_mod('apppage_linkedin')) : ?><a href="<?php echo esc_url(get_theme_mod('apppage_linkedin')); ?>" target="_blank"><i class="fa fa-linkedin"></i></a><?php endif; ?>
						<?php if(get_theme_mod('apppage_rss')) : ?><a href="<?php echo esc_url(get_theme_mod('apppage_rss')); ?>" target="_blank"><i class="fa fa-rss"></i></a><?php endif; ?>
					</div>
				</div>
			</nav><!-- #site-navigation -->

				<!-- Header start -->
				<div class="container">
					<div class="header-container">
						<?php if ( is_active_sidebar( 'header_widget_right')  ) : ?>
							<div class="header-image">
								<?php dynamic_sidebar( 'header_widget_right' ); ?>
							</div>
						<?php endif; ?>
						<div class="header-content">
							<div class="site-branding">
								<?php
								if ( has_custom_logo() ) {
									apppage_the_custom_logo();
								}?>
								<span class="site-title title-header-typo">
									<?php bloginfo( 'name' ); ?>
								</span>

								<?php if ( get_theme_mod( 'left_button_text') || get_theme_mod( 'right_button_text')  ) : ?>
								<?php endif; ?>
								<?php if (get_theme_mod('left_button_text') ) : ?>
									<a class="header-button left-header-button-typo" href="<?php if (get_theme_mod('left_button_text') ) : ?><?php echo esc_url(get_theme_mod('left_button_link')) ?><?php endif; ?>">
										<?php if (get_theme_mod('left_button_text') ) : ?><?php echo esc_html(get_theme_mod('left_button_text')) ?><?php endif; ?>
									</a>
								<?php endif; ?>

								<?php if (get_theme_mod('right_button_text') ) : ?>
									<a class="header-button-text right-header-button-typo" href="<?php if (get_theme_mod('right_button_text') ) : ?><?php echo esc_url(get_theme_mod('right_button_link')) ?><?php endif; ?>">
										<?php if (get_theme_mod('right_button_text') ) : ?><?php echo esc_html(get_theme_mod('right_button_text')) ?><?php endif; ?>
									</a>
								<?php endif; ?>

							</span>
						</div>
					</div>

				</div>
			</div>
			<!-- Header End -->

</header><!-- #masthead -->

	<!-- Top widgets -->
	<?php if ( is_active_sidebar( 'top_widget_left') || is_active_sidebar( 'top_widget_fullwidth') || is_active_sidebar( 'top_widget_middle') ||  is_active_sidebar( 'top_widget_right')  ) : ?>
		<div class="container"> 
			<div class="row">
				<div class="top-widget-wrapper">
					<?php if ( is_active_sidebar( 'top_widget_left') || is_active_sidebar( 'top_widget_middle') ||  is_active_sidebar( 'top_widget_right')  ) : ?>
						<div class="top-widget-grid">
							<?php if ( is_active_sidebar( 'top_widget_left')  ) : ?>
								<div class="top-widget-single left-widget-top">
									<?php dynamic_sidebar( 'top_widget_left' ); ?>
								</div>
							<?php endif; ?>


							<?php if ( is_active_sidebar( 'top_widget_middle')  ) : ?>
								<div class="top-widget-single middle-widget-top">
									<?php dynamic_sidebar( 'top_widget_middle' ); ?>
								</div>
							<?php endif; ?>

							<?php if ( is_active_sidebar( 'top_widget_right')  ) : ?>
								<div class="top-widget-single right-widget-top">
									<?php dynamic_sidebar( 'top_widget_right' ); ?>
								</div>
							<?php endif; ?>
						</div>



					<?php endif; ?>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<!-- / Top widgets -->
<div id="content" class="site-content">
