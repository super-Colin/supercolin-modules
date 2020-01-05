<?php

// Use this code to register the module block by adding to your functions.php

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

?>