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
		
	}
}

function supercolin_acf_block_render_callback( $block ) {
	$slug = str_replace('acf/', '', $block['name']);
	
	if( file_exists( get_theme_file_path("/template-parts/supercolin-modules/{$slug}/wp-acf__{$slug}.php") ) ) {
		include( get_theme_file_path("/template-parts/supercolin-modules/{$slug}/wp-acf__{$slug}.php") );
	}
}










// ignore, backup code at the moment, will be deleted soon

// /**
//  * ACF Init / ACF Register Blocks
//  */
// add_action('acf/init', 'my_acf_init');
// function my_acf_init() {
	
// 	// check function exists
// 	if( function_exists('acf_register_block') ) {
		
// 		// register the header splash image block
// 		acf_register_block(array(
// 			'name'				=> 'header-splash-image',
// 			'title'				=> __('Header Splash Image'),
// 			'description'		=> __('A custom header block.'),
// 			'render_callback'	=> 'super_acf_block_render_callback',
// 			'category'			=> 'formatting',
// 			'icon'				=> 'admin-comments',
// 			'keywords'			=> array( 'splash', 'quote' ),
// 		));

// 		// register the header splash image block
// 		acf_register_block(array(
// 			'name'				=> 'header-splash-image',
// 			'title'				=> __('Header Splash Image'),
// 			'description'		=> __('A custom header block.'),
// 			'render_callback'	=> 'super_acf_block_render_callback',
// 			'category'			=> 'formatting',
// 			'icon'				=> 'admin-comments',
// 			'keywords'			=> array( 'splash', 'quote' ),
//         ));


// 	}
// }

// // This function will render all of the module blocks and is also required in your functions.php
// function super_acf_block_render_callback( $block ) {

// 	$slug = str_replace('acf/', '', $block['name']);
	
// 	if( file_exists( get_theme_file_path("/template-parts/modules/{$slug}/wp-acf__{$slug}.php") ) ) {
// 		include( get_theme_file_path("/template-parts/modules/{$slug}/wp-acf__{$slug}.php") );
// 	}
// }







