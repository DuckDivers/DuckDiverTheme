<?php
	// Loads child theme textdomain
	load_child_theme_textdomain( CURRENT_THEME, CHILD_DIR . '/languages' );

	/*/Load Custom Font
function load_fonts() {
            wp_register_style('GoogleFonts', '//fonts.googleapis.com/css?family=Cinzel+Decorative');        
			wp_enqueue_style('GoogleFonts');
        }
    add_action('wp_print_styles', 'load_fonts');
  
// Remove Cherry Styles from Cherry Options to Pages
	add_action ('init', 'duck_remove_options', 15);
	function duck_remove_options(){
	remove_action('wp_head', 'options_typography_styles'); }*/

// Loads custom scripts.
	require_once( 'custom-js.php' );
	require_once ('theme-shortcodes.php');
	require_once(CHILD_DIR . '/parallax-slider/php/parallax-slider-video-meta.php');
	require_once('wp_bootstrap_navwalker.php');	 //Register Custom Nav Walker
// Remove Cherry Plugin Google Map API
	add_action ('wp_print_scripts', 'duck_remove_googlemapapis');
	function duck_remove_googlemapapis(){
	wp_dequeue_script('googlemapapis'); 
	}
	
?>