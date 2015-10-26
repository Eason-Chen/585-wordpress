<?php
	// resousreces support
	function retail_css(){
		wp_enqueue_style('style', get_stylesheet_uri());
	}
	add_action('wp_enqueue_scripts', 'retail_css');

	// theme setup
	function retail_setup(){
		// navgation menu
		register_nav_menus(
			array(
				'primary' => __('Retail Menu')
			)
		);
		// add featured image support
		add_theme_support('post-thumbnails');
		add_image_size('new-thumbnail', 1140, 288, true);
	}
	add_action('after_setup_theme', 'retail_setup');

	// remove the gallery
	//add_filter( 'use_default_gallery_style', '__return_false' );

	// remove the logo in the admin
	function annointed_admin_bar_remove() {
        global $wp_admin_bar;
        /* Remove their stuff */
        $wp_admin_bar->remove_menu('wp-logo');
	}
	add_action('wp_before_admin_bar_render', 'annointed_admin_bar_remove', 0);

	function remove_screen_options(){ return false;}
	    add_filter('screen_options_show_screen', 'remove_screen_options');

	    add_filter( 'contextual_help', 'wpse50723_remove_help', 999, 3 );

	    function wpse50723_remove_help($old_help, $screen_id, $screen){
	    $screen->remove_help_tabs();
	    return $old_help;
	}

	function example_remove_dashboard_widgets() {
	    // Globalize the metaboxes array, this holds all the widgets for wp-admin
	    global $wp_meta_boxes;

	    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);

	    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);

	    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);

	    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);

	    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);

	    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);

	    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);

	    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	}
	add_action('wp_dashboard_setup', 'example_remove_dashboard_widgets' );

	function change_footer_admin () {return '';}
	add_filter('admin_footer_text', 'change_footer_admin', 9999);
	function change_footer_version() {return '';}
	add_filter( 'update_footer', 'change_footer_version', 9999);

	// change the backend logo
	add_filter('login_headerurl', create_function(false,"return get_bloginfo( 'siteurl' );"));
	add_filter('login_headertitle', create_function(false,"return get_bloginfo( 'description' );"));
?>