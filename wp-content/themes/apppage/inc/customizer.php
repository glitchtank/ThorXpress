<?php
/**
 * apppage Theme Customizer.
 *
 * @package apppage
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function apppage_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
    $wp_customize->get_section('header_image')->title = __( 'Header', 'apppage' );
    $wp_customize->get_section('colors')->title = __( 'Background Color', 'apppage' );
    
    $wp_customize->add_panel( 'theme_options' ,
        array(
            'title'       => esc_html__( 'Theme Options', 'apppage' ),
            'description' => ''
            )
        );

    $wp_customize->add_setting( 'header_title_color', array(
        'default'           => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
        ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_title_color', array(
        'label'       => __( 'Header Title Color', 'apppage' ),
        'section'     => 'header_image',
        'priority' => 1,
        'settings'    => 'header_title_color',
        ) ) );

    $wp_customize->add_setting( 'left_button_text', array(
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        ) );

    $wp_customize->add_control( 'left_button_text', array(
        'label'    => __( "Left Button Text", 'apppage' ),
        'section'  => 'header_image',
        'type'     => 'text',
        'description' => __( 'For example: Left Button', 'apppage' ),

        'priority' => 1,
        ) );
    $wp_customize->add_setting( 'left_button_link', array(
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
        ) );

    $wp_customize->add_control( 'left_button_link', array(
        'label'    => __( "Left Button Link URL", 'apppage' ),
        'section'  => 'header_image',
        'description' => __( 'For example: Http://google.com/', 'apppage' ),
        'type'     => 'text',
        'priority' => 1,
        ) );



    $wp_customize->add_setting( 'right_button_text', array(
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        ) );

    $wp_customize->add_control( 'right_button_text', array(
        'label'    => __( "Right Button Text", 'apppage' ),
        'section'  => 'header_image',
        'type'     => 'text',
        'description' => __( 'For example: right Button', 'apppage' ),

        'priority' => 1,
        ) );
    $wp_customize->add_setting( 'right_button_link', array(
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
        ) );

    $wp_customize->add_control( 'right_button_link', array(
        'label'    => __( "Right Button Link URL", 'apppage' ),
        'section'  => 'header_image',
        'description' => __( 'For example: Http://google.com/', 'apppage' ),
        'type'     => 'text',
        'priority' => 1,
        ) );





    $wp_customize->add_setting( 'header_button_color', array(
        'default'           => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
        ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_button_color', array(
        'label'       => __( 'Buttons Color', 'apppage' ),
        'section'     => 'header_image',
        'priority' => 1,
        'settings'    => 'header_button_color',
        ) ) );


    $wp_customize->add_setting( 'header_widget_titles', array(
        'default'           => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
        ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_widget_titles', array(
        'label'       => __( 'Left Widget Headline Color', 'apppage' ),
        'section'     => 'header_image',
        'priority' => 1,
        'settings'    => 'header_widget_titles',
        ) ) );

    $wp_customize->add_setting( 'header_widget_text', array(
        'default'           => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
        ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_widget_text', array(
        'label'       => __( 'Left Widget Text Color', 'apppage' ),
        'section'     => 'header_image',
        'priority' => 1,
        'settings'    => 'header_widget_text',
        ) ) );
    $wp_customize->add_setting( 'header_widget_link', array(
        'default'           => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
        ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_widget_link', array(
        'label'       => __( 'Left Widget Link Color', 'apppage' ),
        'section'     => 'header_image',
        'priority' => 1,
        'settings'    => 'header_widget_link',
        ) ) );







    $wp_customize->add_setting( 'header_bg_color', array(
        'default'           => '#1b1b1b',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
        ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_bg_color', array(
        'label'       => __( 'Header Background Color', 'apppage' ),
        'description' => __( 'Applied to header background.', 'apppage' ),
        'section'     => 'header_image',
        'settings'    => 'header_bg_color',
        ) ) );
    $wp_customize->add_control( 'header_textcolor', array(
        'label'    => __( 'Header Text Color', 'apppage' ),
        'section'  => 'head_options',
        ) );
   




    // Social Media Settings
    $wp_customize->add_section( 'apppage_navigation' ,
        array(
            'title'      => esc_html__('Navigation', 'apppage'),
            'priority'   => 1,
            ) 
        );

    $wp_customize->add_setting(
        'apppage_facebook',
        array(
            'default'     => '',
            'description' => __( 'Enter your social media link(URL. Icons will not show if left blank.', 'apppage' ),
                'sanitize_callback' => 'esc_url_raw'
                )
        );
    $wp_customize->add_setting(
        'apppage_twitter',
        array(
            'default'     => '',
            'sanitize_callback' => 'esc_url_raw'
            )
        );
    $wp_customize->add_setting(
        'apppage_instagram',
        array(
            'default'     => '',
            'sanitize_callback' => 'esc_url_raw'
            )
        );
    $wp_customize->add_setting(
        'apppage_pinterest',
        array(
            'default'     => '',
            'sanitize_callback' => 'esc_url_raw'
            )
        );
    $wp_customize->add_setting(
        'apppage_tumblr',
        array(
            'default'     => '',
            'sanitize_callback' => 'esc_url_raw'
            )
        );
    $wp_customize->add_setting(
        'apppage_bloglovin',
        array(
            'default'     => '',
            'sanitize_callback' => 'esc_url_raw'
            )
        );
    $wp_customize->add_setting(
        'apppage_google',
        array(
            'default'     => '',
            'sanitize_callback' => 'esc_url_raw'
            )
        );
    $wp_customize->add_setting(
        'apppage_youtube',
        array(
            'default'     => '',
            'sanitize_callback' => 'esc_url_raw'
            )
        );
    $wp_customize->add_setting(
        'apppage_soundcloud',
        array(
            'default'     => '',
            'sanitize_callback' => 'esc_url_raw'
            )
        );
    $wp_customize->add_setting(
        'apppage_vimeo',
        array(
            'default'     => '',
            'sanitize_callback' => 'esc_url_raw'
            )
        );
    $wp_customize->add_setting(
        'apppage_linkedin',
        array(
            'default'     => '',
            'sanitize_callback' => 'esc_url_raw'
            )
        );
    $wp_customize->add_setting(
        'apppage_rss',
        array(
            'default'     => '',
            'sanitize_callback' => 'esc_url_raw'
            )
        );



    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'apppage_facebook',
            array(
                'label'      => esc_html__('Facebook', 'apppage'),
                'section'    => 'apppage_navigation',
                'description' => __( 'Enter your social media link(URL). Icons will not show if left blank. For example http://facebook.com/user/', 'apppage' ),
                'settings'   => 'apppage_facebook',
                'type'       => 'text',
                'priority'   => 99
                )
            )
        );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'apppage_twitter',
            array(
                'label'      => esc_html__('Twitter', 'apppage'),
                'section'    => 'apppage_navigation',
                'description' => __( 'Enter your social media link(URL). Icons will not show if left blank. For example http://facebook.com/user/', 'apppage' ),
                'settings'   => 'apppage_twitter',
                'type'       => 'text',
                'priority'   => 99
                )
            )
        );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'apppage_instagram',
            array(
                'label'      => esc_html__('Instagram', 'apppage'),
                'section'    => 'apppage_navigation',
                'description' => __( 'Enter your social media link(URL). Icons will not show if left blank. For example http://facebook.com/user/', 'apppage' ),
                'settings'   => 'apppage_instagram',
                'type'       => 'text',
                'priority'   => 99
                )
            )
        );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'apppage_pinterest',
            array(
                'label'      => esc_html__('Pinterest', 'apppage'),
                'section'    => 'apppage_navigation',
                'description' => __( 'Enter your social media link(URL). Icons will not show if left blank. For example http://facebook.com/user/', 'apppage' ),
                'settings'   => 'apppage_pinterest',
                'type'       => 'text',
                'priority'   => 99
                )
            )
        );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'apppage_bloglovin',
            array(
                'label'      => esc_html__('Bloglovin', 'apppage'),
                'section'    => 'apppage_navigation',
                'description' => __( 'Enter your social media link(URL). Icons will not show if left blank. For example http://facebook.com/user/', 'apppage' ),
                'settings'   => 'apppage_bloglovin',
                'type'       => 'text',
                'priority'   => 99
                )
            )
        );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'apppage_google',
            array(
                'label'      => esc_html__('Google Plus', 'apppage'),
                'section'    => 'apppage_navigation',
                'description' => __( 'Enter your social media link(URL). Icons will not show if left blank. For example http://facebook.com/user/', 'apppage' ),
                'settings'   => 'apppage_google',
                'type'       => 'text',
                'priority'   => 99
                )
            )
        );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'apppage_tumblr',
            array(
                'label'      => esc_html__('Tumblr', 'apppage'),
                'section'    => 'apppage_navigation',
                'description' => __( 'Enter your social media link(URL). Icons will not show if left blank. For example http://facebook.com/user/', 'apppage' ),
                'settings'   => 'apppage_tumblr',
                'type'       => 'text',
                'priority'   => 99
                )
            )
        );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'apppage_youtube',
            array(
                'label'      => esc_html__('Youtube', 'apppage'),
                'section'    => 'apppage_navigation',
                'description' => __( 'Enter your social media link(URL). Icons will not show if left blank. For example http://facebook.com/user/', 'apppage' ),
                'settings'   => 'apppage_youtube',
                'type'       => 'text',
                'priority'   => 99
                )
            )
        );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'apppage_soundcloud',
            array(
                'label'      => esc_html__('Soundcloud', 'apppage'),
                'section'    => 'apppage_navigation',
                'description' => __( 'Enter your social media link(URL). Icons will not show if left blank. For example http://facebook.com/user/', 'apppage' ),
                'settings'   => 'apppage_soundcloud',
                'type'       => 'text',
                'priority'   => 99
                )
            )
        );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'apppage_vimeo',
            array(
                'label'      => esc_html__('Vimeo', 'apppage'),
                'section'    => 'apppage_navigation',
                'description' => __( 'Enter your social media link(URL). Icons will not show if left blank. For example http://facebook.com/user/', 'apppage' ),
                'settings'   => 'apppage_vimeo',
                'type'       => 'text',
                'priority'   => 99
                )
            )
        );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'apppage_linkedin',
            array(
                'label'      => esc_html__('Linkedin', 'apppage'),
                'section'    => 'apppage_navigation',
                'description' => __( 'Enter your social media link(URL). Icons will not show if left blank. For example http://facebook.com/user/', 'apppage' ),
                'settings'   => 'apppage_linkedin',
                'type'       => 'text',
                'priority'   => 99
                )
            )
        );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'apppage_rss',
            array(
                'label'      => esc_html__('Rss', 'apppage'),
                'section'    => 'apppage_navigation',
                'description' => __( 'Enter your social media link(URL). Icons will not show if left blank. For example http://facebook.com/user/', 'apppage' ),
                'settings'   => 'apppage_rss',
                'type'       => 'text',
                'priority'   => 99
                )
            )
        );


    // Social Media Settings




}
add_action( 'customize_register', 'apppage_customize_register' );

function apppage_sanitize_checkbox( $input ){
    if ( $input == 1 || $input == 'true' || $input === true ) {
        return 1;
    } else {
        return 0;
    }
}

function apppage_sanitize_number( $number, $setting ) {
    $number = absint( $number );
    return ( $number ? $number : $setting->default );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function apppage_customize_preview_js() {
	wp_enqueue_script( 'apppage_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'apppage_customize_preview_js' );

/**
 * Load customizer style
 */
function apppage_customizer_load_css(){
    wp_enqueue_style( 'apppage-customizer', get_template_directory_uri() . '/css/customizer.css' );
}
add_action('customize_controls_print_styles', 'apppage_customizer_load_css');



if(! function_exists('apppage_custom_css_changes' ) ):
function apppage_custom_css_changes(){
    ?>

    <style type="text/css">

    .top-widget-single { background: <?php echo esc_attr(get_theme_mod( 'topwidgets_bg_color')); ?>; }
    .header-container{ padding-top: <?php echo esc_attr(get_theme_mod( 'header_top_padding')); ?>px; }
    .header-container{ padding-bottom: <?php echo esc_attr(get_theme_mod( 'header_bottom_padding')); ?>px; }
    .header-widgets h3 { color: <?php echo esc_attr(get_theme_mod( 'header_widget_titles')); ?>; }
    .header-widgets, .header-widgets p, .header-widgets li, .header-widgets table td, .header-widgets table th, .header-widgets   { color: <?php echo esc_attr(get_theme_mod( 'header_widget_text')); ?>; }
    .header-widgets a, .header-widgets a, .header-widgets .menu li a { color: <?php echo esc_attr(get_theme_mod( 'header_widget_link')); ?>; }
    header#masthead { background-color: <?php echo esc_attr(get_theme_mod( 'header_bg_color')); ?>; }
    .site-title{ color: <?php echo esc_attr(get_theme_mod( 'header_title_color')); ?>; }
    p.site-description{ color: <?php echo esc_attr(get_theme_mod( 'header_tagline_color')); ?>; }
    .button-divider{ background-color: <?php echo esc_attr(get_theme_mod( 'header_button_divider_color')); ?>; }
    .header-button{ border-color: <?php echo esc_attr(get_theme_mod( 'header_button_color')); ?>; }
    .header-button, .header-button-text{ color: <?php echo esc_attr(get_theme_mod( 'header_button_color')); ?>; }
    .header-button-text:after { background: <?php echo esc_attr(get_theme_mod( 'header_button_color')); ?>; }
    #site-navigation .menu li, #site-navigation .menu .sub-menu, #site-navigation .menu .children, nav#site-navigation{ background: <?php echo esc_attr(get_theme_mod( 'navigation_background_color')); ?>; }
    #site-navigation .menu li a, #site-navigation .menu li a:hover, #site-navigation .menu li a:active, #site-navigation .menu > li.menu-item-has-children > a:after, #site-navigation ul.menu ul a, #site-navigation .menu ul ul a, #site-navigation ul.menu ul a:hover, #site-navigation .menu ul ul a:hover, div#top-search a, div#top-search a:hover { color: <?php echo esc_attr(get_theme_mod( 'navigation_link_color')); ?>; }
    .m_menu_icon { background-color: <?php echo esc_attr(get_theme_mod( 'navigation_link_color')); ?>; }
    #top-social a, #top-social a:hover, #top-social a:active, #top-social a:focus, #top-social a:visited{ color: <?php echo esc_attr(get_theme_mod( 'navigation_social_link_color')); ?>; }  
    .top-widgets h1, .top-widgets h2, .top-widgets h3, .top-widgets h4, .top-widgets h5, .top-widgets h6 { color: <?php echo esc_attr(get_theme_mod( 'topwidgets_headline_color')); ?>; }
    .top-widgets p, .top-widgets, .top-widgets li, .top-widgets ol, .top-widgets cite{ color: <?php echo esc_attr(get_theme_mod( 'topwidgets_text_color')); ?>; }
    .top-widget-fullwidth h3:after{ background: <?php echo esc_attr(get_theme_mod( 'topwidgets_headline_color')); ?>; }
    .top-widgets ul li a, .top-widgets a, .top-widgets a:hover, .top-widgets a:visited, .top-widgets a:focus, .top-widgets a:active, .top-widgets ol li a, .top-widgets li a, .top-widgets .menu li a, .top-widgets .menu li a:hover, .top-widgets .menu li a:active, .top-widgets .menu li a:focus{ color: <?php echo esc_attr(get_theme_mod( 'topwidgets_link_color')); ?>; }
    .blog-feed-category a{ color: <?php echo esc_attr(get_theme_mod( 'blogpage_category_color')); ?>; }
    .blog h2.entry-title a, .nav-previous a, .nav-next a { color: <?php echo esc_attr(get_theme_mod( 'blogpage_headline_color')); ?>; }
    .blog-feed-post-wrapper .blog-feed-meta * { color: <?php echo esc_attr(get_theme_mod( 'blogpage_date_color')); ?>; }
    .blog-feed-post-wrapper p { color: <?php echo esc_attr(get_theme_mod( 'blogpage_text_color')); ?>; }
    .blog .entry-more a { color: <?php echo esc_attr(get_theme_mod( 'blogpage_button_color')); ?>; }
    .blog .entry-more a { border-color: <?php echo esc_attr(get_theme_mod( 'blogpage_button_color')); ?>; }
    .blog .entry-more a:hover { background: <?php echo esc_attr(get_theme_mod( 'blogpage_button_color')); ?>; }
    .blog .entry-more a:hover { border-color: <?php echo esc_attr(get_theme_mod( 'blogpage_button_color')); ?>; }
    .blog #primary article.post { border-color: <?php echo esc_attr(get_theme_mod( 'blogpage_border_color')); ?>; }
    .single-post .comment-metadata time, .page .comment-metadata time, .single-post time.entry-date.published, .page time.entry-date.published, .single-post .posted-on a, .page .posted-on a { color: <?php echo esc_attr(get_theme_mod( 'postpage_date')); ?>; }
    .single-post #main th, .page #main th, .single-post .entry-cate a h2.entry-title, .single-post h1.entry-title, .page h2.entry-title, .page h1.entry-title, .single-post #main h1, .single-post #main h2, .single-post #main h3, .single-post #main h4, .single-post #main h5, .single-post #main h6, .page #main h1, .page #main h2, .page #main h3, .page #main h4, .page #main h5, .page #main h6 { color: <?php echo esc_attr(get_theme_mod( 'postpage_headline')); ?>; }
    .comments-title:after{ background: <?php echo esc_attr(get_theme_mod( 'postpage_headline')); ?>; }
    .post #main .nav-next a:before, .single-post #main .nav-previous a:before, .page #main .nav-previous a:before, .single-post #main .nav-next a:before, .single-post #main a, .page #main a{ color: <?php echo esc_attr(get_theme_mod( 'postpage_link')); ?>; }
    .page #main, .page #main p, .page #main th,.page .comment-form label, .single-post #main, .single-post #main p, .single-post #main th,.single-post .comment-form label, .single-post .comment-author .fn, .page .comment-author .fn   { color: <?php echo esc_attr(get_theme_mod( 'postpage_text')); ?>; }
    .single-post .comment-form input.submit, .page .comment-form input.submit { border-color: <?php echo esc_attr(get_theme_mod( 'postpage_button')); ?>; }
    .single-post .comment-form input.submit, .page .comment-form input.submit { color: <?php echo esc_attr(get_theme_mod( 'postpage_button')); ?>; }
    .single-post .comment-form input.submit:hover, .page .comment-form input.submit:hover { background-color: <?php echo esc_attr(get_theme_mod( 'postpage_button')); ?>; }
    .single-post #main .entry-cate a, .page #main .entry-cate a { color: <?php echo esc_attr(get_theme_mod( 'postpage_category')); ?>; }
    .single-post .comment-content, .page .comment-content, .single-post .navigation.post-navigation, .page .navigation.post-navigation, .single-post #main td, .page #main td,  .single-post #main th, .page #main th, .page #main input[type="url"], .single-post #main input[type="url"],.page #main input[type="text"], .single-post #main input[type="text"],.page #main input[type="email"], .single-post #main input[type="email"], .page #main textarea, .single-post textarea { border-color: <?php echo esc_attr(get_theme_mod( 'postpage_border')); ?>; }
    .top-widget-wrapper{ border-color: <?php echo esc_attr(get_theme_mod( 'topwidgets_border_color')); ?>; }
    .footer-widgets-wrapper{ background: <?php echo esc_attr(get_theme_mod( 'footer_background')); ?>; }
    .footer-widgets-wrapper h1, .footer-widgets-wrapper h2,  .footer-widgets-wrapper h3,  .footer-widgets-wrapper h4,  .footer-widgets-wrapper h5,  .footer-widgets-wrapper h6 { color: <?php echo esc_attr(get_theme_mod( 'footer_headline')); ?>; }
    .footer-widget-single, .footer-widget-single p, .footer-widgets-wrapper p, .footer-widgets-wrapper { color: <?php echo esc_attr(get_theme_mod( 'footer_text')); ?>; }
    .footer-widgets-wrapper  ul li a, .footer-widgets-wrapper li a,.footer-widgets-wrapper a,.footer-widgets-wrapper a:hover,.footer-widgets-wrapper a:active,.footer-widgets-wrapper a:focus, .footer-widget-single a, .footer-widget-single a:hover, .footer-widget-single a:active{ color: <?php echo esc_attr(get_theme_mod( 'footer_link')); ?>; }
    .footer-widget-single h3, .footer-widgets .search-form input.search-field { border-color: <?php echo esc_attr(get_theme_mod( 'footer_border')); ?>; }
    footer .site-info { background: <?php echo esc_attr(get_theme_mod( 'footer_copyright_background')); ?>; }
    footer .site-info { color: <?php echo esc_attr(get_theme_mod( 'footer_copyright_text')); ?>; }
    .readmore-btn { color: <?php echo esc_attr(get_theme_mod( 'blogpage_link_color')); ?>; }
    .readmore-btn { border-color: <?php echo esc_attr(get_theme_mod( 'blogpage_link_color')); ?>; }
    .blog-feed-post-wrapper, .blog .nav-previous a,.blog .nav-next a { background: <?php echo esc_attr(get_theme_mod( 'blogpage_background_color')); ?>; }
    .single-post main#main, .page main#main, .error404 main#main, .search-no-results main#main { background: <?php echo esc_attr(get_theme_mod( 'postpage_bg')); ?>; }

}   
</style>
<?php }
add_action( 'wp_head', 'apppage_custom_css_changes' );
endif;
