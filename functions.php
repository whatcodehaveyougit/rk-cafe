<?php

add_action( 'wp_enqueue_scripts', 'twentytwentyfour_child_scripts' );
function twentytwentyfour_child_scripts() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'parent-style' ) );


	wp_enqueue_style( 'parcel', get_stylesheet_directory_uri() . '/dist/styles/style.css', array(), '1.0' );
	wp_enqueue_script( 'parcel-js', get_stylesheet_directory_uri() . '/dist/scripts/scripts.js', array(), '1.0', true );
}

add_filter('the_content', 'do_shortcode');


function custom_acf_shortcode($atts = []) {
	// Extract shortcode attributes
	$atts = shortcode_atts([], $atts);

	// Retrieve the ACF field value for featured_section_1_title
	$featured_section_1_title = get_field('featured_section_1_title');
	$featured_section_1_text = get_field('featured_section_1_text');
	$monday_to_friday_hours = get_field('monday_to_friday_opening_times');
	$sat_and_sun_hours = get_field('saturday_and_sunday_opening_times');

	// Use output buffering to capture the template content
	ob_start();
	$template_path = get_stylesheet_directory() . '/templates/shortcodes/custom-acf-block.php';
	if (file_exists($template_path)) {
			// Make variables available in the template
			include $template_path;
	} else {
			echo '<p>Template not found.</p>';
	}

	return ob_get_clean();
}
add_shortcode('custom_acf_block', 'custom_acf_shortcode');