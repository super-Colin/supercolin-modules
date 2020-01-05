<?php
// Use this code to register the module block in functions.php


// register the asymmetric-splash-grid block
acf_register_block(array(
	'name'				=> 'asymmetric-splash-grid',
	'title'				=> __('Asymmetric Splash Grid'),
	'description'		=> __('A custom repeater block with images or not, layout blocks to the left, right, full-width or a double row that will have an image on the right.'),
	'render_callback'	=> 'supercolin_acf_block_render_callback',
	'category'			=> 'layout',
	'icon'				=> 'format-chat',
	'keywords'			=> array( 'layout', 'rounded corners', 'text', 'images', 'repeater' ),
));