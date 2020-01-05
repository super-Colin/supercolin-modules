<?php
// Use this code to register the module block in functions.php


// register the asymmetric-splash-grid block
acf_register_block(array(
	'name'				=> 'asymmetric-splash-grid',
	'title'				=> __('Asymmetric Splash Grid'),
	'description'		=> __('A custom block.'),
	'render_callback'	=> 'super_acf_block_render_callback',
	'category'			=> 'formatting',
	'icon'				=> 'admin-comments',
	'keywords'			=> array( 'splash', 'quote' ),
));