<?php

// Use this code to register the module block by adding to your functions.php

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

