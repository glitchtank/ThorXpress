<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package apppage
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function apppage_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'apppage_body_classes' );

/**
 * Custom excerpt more
 */
function apppage_custom_excerpt_more( $link ) {
	if ( is_admin() ) {
		return $link;
	}
	return '&hellip; ';
}
add_filter( 'excerpt_more', 'apppage_custom_excerpt_more' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function apppage_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', bloginfo( 'pingback_url' ), '">';
	}
}
add_action( 'wp_head', 'apppage_pingback_header' );

function apppage_light_get_image_src( $image_id, $size = 'full' ) {
	$img_attr = wp_get_attachment_image_src( intval( $image_id ), $size );
	if ( ! empty( $img_attr[0] ) ) {
		return $img_attr[0];
	}
}


require_once( trailingslashit( get_template_directory() ) . 'customizer-button/button/class-customize.php' );



/* Theme information Page */ 
function apppage_load_custom_wp_admin_style( $hook ) {
    if ( 'appearance_page_about-apppage' !== $hook ) {
        return;
    }
    wp_enqueue_style( 'apppage-custom-admin-css', get_template_directory_uri() . '/css/admin.css');
}
add_action( 'admin_enqueue_scripts', 'apppage_load_custom_wp_admin_style' );


add_action( 'admin_menu', 'apppage_register_backend' );
function apppage_register_backend() {
	add_theme_page( __('About Apppage', 'apppage'), __('Apppage', 'apppage'), 'edit_theme_options', 'about-apppage.php', 'apppage_backend');
}

function apppage_backend(){ ?>
<div class="themepage-wrapper">
	<div class="headings-wrapper">
		<h2><?php echo __( 'apppage Informaton And Support', 'apppage')?></h2>
		<h3><?php echo __( 'If you cant find a solution, feel free to email me at Email@vilhodesign.com', 'apppage')?></h3>
	</div>
	<div class="themepage-left">
		<div class="help-box-wrapper">
			<a href="https://wordpress.org/support/" class="help-box" target="_blank">
				<?php echo __( 'General WordPress Support', 'apppage')?> 
			</a>
		</div>
		<div class="help-box-wrapper">
			<a href="http://vilhodesign.com/contact/" class="help-box" target="_blank">
				<?php echo __( 'AppPage Theme Support', 'apppage')?> 
				<span><?php echo __( 'Email@vilhodesign.com', 'apppage')?></span>
			</a>
		</div>
		<div class="help-box-wrapper">
			<a href="http://vilhodesign.com/themes/apppage/" class="help-box" target="_blank">
				<?php echo __( 'AppPage Theme Demo', 'apppage')?>	 
			</a>
		</div>
		<div class="help-box-wrapper">
			<a href="http://vilhodesign.com/themes/apppage/" class="help-box" target="_blank">
				<?php echo __( 'AppPage Premium', 'apppage')?> 
			</a>
		</div>
	</div>
</div>
<?php }


