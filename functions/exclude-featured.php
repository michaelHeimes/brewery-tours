<?php
function exclude_single_posts_home($query) {
  if ($query->is_home() && $query->is_main_query() && !is_admin()) {

    $featured_post = get_field('featured_post', 'option');  
	
    $query->set('post__not_in', array($featured_post[0]->ID));
  }
}

add_action('pre_get_posts', 'exclude_single_posts_home');