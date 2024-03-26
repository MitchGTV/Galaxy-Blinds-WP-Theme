<?php
	// Add RSS links to <head> section
	add_theme_support( 'automatic-feed-links' );

	// Load jQuery
    function register_my_scripts(){
        wp_deregister_script('jquery');
        wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"), false);
        wp_enqueue_script('jquery');
    }
    add_action('wp_enqueue_script','register_my_scripts');

	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');

    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }

    add_filter( 'shortcode_atts_wpcf7', 'custom_shortcode_atts_wpcf7_filter', 10, 3 );
    function custom_shortcode_atts_wpcf7_filter( $out, $pairs, $atts ) {
        $my_attr = 'subject-title';

        if ( isset( $atts[$my_attr] ) ) {
            $out[$my_attr] = $atts[$my_attr];
        }

        return $out;
    }

    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );

