<?php
// copying and pasting this in it's entirity will import all supercolin-modules as guttenberg blocks
// !! You'll also have to have the field group for the module block imported !!


// Example of registering 2 or more blocks in your functions.php file

/**
 * ACF Init / ACF Register Blocks
 */
add_action('acf/init', 'supercolin_acf_init');
function supercolin_acf_init() {

	// check function exists
	if( function_exists('acf_register_block') ) {
		// Adding guttenberg blocks
		

		// register the header splash image block
		acf_register_block(array(
			'name'				=> 'header-splash-image',
			'title'				=> __('Header Splash Image'),
			'description'		=> __('A custom full-width splash image with overlayed title.'),
			'render_callback'	=> 'supercolin_acf_block_render_callback',
			'category'			=> 'layout',
			'icon'				=> 'format-image',
			'keywords'			=> array( 'full-width', 'image' ),
		));

		// register the asymmetric-splash-grid block
		acf_register_block(array(
			'name'				=> 'asymmetric-splash-grid',
			'title'				=> __('Asymmetric Splash Grid'),
			'description'		=> __('A custom repeater block with images or not, layout blocks to the left, right, full-width or a double row that will have an image on the right.'),
			'render_callback'	=> 'supercolin_acf_block_render_callback',
			'category'			=> 'layout',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'layout', 'rounded corners', 'text', 'images', 'repeater' ),
		));

		// register the vertical-ticker block
		acf_register_block(array(
			'name'				=> 'vertical-ticker',
			'title'				=> __('Vertical Ticker'),
			'description'		=> __('A custom ticker that displays multiple phrases in an order.'),
			'render_callback'	=> 'supercolin_acf_block_render_callback',
			'category'			=> 'widget',
			'icon'				=> 'dashicons-tagcloud',
			'keywords'			=> array( 'full-width', 'catch phrase', 'javascript' ),
		));

		
	}
}

function supercolin_acf_block_render_callback( $block ) {
	$slug = str_replace('acf/', '', $block['name']);
	
	if( file_exists( get_theme_file_path("/template-parts/supercolin-modules/{$slug}/wp-acf__{$slug}.php") ) ) {
		include( get_theme_file_path("/template-parts/supercolin-modules/{$slug}/wp-acf__{$slug}.php") );
	}
}
