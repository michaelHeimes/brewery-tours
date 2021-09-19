<?php

add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {
	    
        acf_register_block_type(array(
            'name'              => 'bold-centered-text',
            'title'             => __('Bold Centered Text'),
            'description'       => __('A custom Bold Centered Text block.'),
            'render_template'   => 'parts/blocks/bold-centered-text.php',
            'category'          => 'layout',
            'icon'              => 'editor-bold',
            'keywords'          => array( 'large', 'colored', 'copy', 'text' ),
        ));


        acf_register_block_type(array(
            'name'              => 'large-blue-copy',
            'title'             => __('Large Blue Copy'),
            'description'       => __('A custom Large Blue Copy block.'),
            'render_template'   => 'parts/blocks/large-blue-copy.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'large', 'blue', 'copy', 'text' ),
        ));
        
    }
}