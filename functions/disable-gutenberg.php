<?php

// Disable Gutenberg
// add_filter( 'use_block_editor_for_post', '__return_false' );

// Disable Gutenberg Post Type
add_filter('use_block_editor_for_post_type', 'prefix_disable_gutenberg', 10, 2);
function prefix_disable_gutenberg($current_status, $post_type)
{
    if ($post_type === 'page') return false;
    return $current_status;
}