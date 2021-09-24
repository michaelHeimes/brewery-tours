<?php
	
// Adding WP Functions & Theme Support
function joints_theme_support() {

	// Add WP Thumbnail Support
	add_theme_support( 'post-thumbnails' );
	
	// Default thumbnail size
	set_post_thumbnail_size(233, 233, true);
	
	// Add custom Image Sizes
		add_image_size( 'nav-dropdown', 280, 174, true );	
		add_image_size( 'home-banner', 1400, 812, true );	
		add_image_size( 'banner', 1400, 337, true );
		add_image_size( 'tour-card', 613, 613, true );
		add_image_size( 'featured-blog', 473, 473, true );
		add_image_size( 'blog-archive', 233, 233, true );
		add_image_size( 'featured-breweries', 576, 373, true );
		add_image_size( 'book-badge-cta', 851, 499, true );
		add_image_size( 'landing-plan', 940, 570, true );
		add_image_size( 'slider', 9999, 501, false);
		add_image_size( 'page-banner', 1266, 560, true );
		add_image_size( 'cta-fw', 1266, 593, true );

	// Add RSS Support
	add_theme_support( 'automatic-feed-links' );
	
	// Add Support for WP Controlled Title Tag
	add_theme_support( 'title-tag' );
	
	// Add HTML5 Support
	add_theme_support( 'html5', 
	         array( 
	         	'comment-list', 
	         	'comment-form', 
	         	'search-form', 
	         ) 
	);
	
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	) );
	
	// Adding post format support
	 add_theme_support( 'post-formats',
		array(
			'aside',             // title less blurb
			'gallery',           // gallery of images
			'link',              // quick link to other site
			'image',             // an image
			'quote',             // a quick quote
			'status',            // a Facebook like status update
			'video',             // video
			'audio',             // audio
			'chat'               // chat transcript
		)
	); 
	
	// Set the maximum allowed width for any content in the theme, like oEmbeds and images added to posts.
	$GLOBALS['content_width'] = apply_filters( 'joints_theme_support', 1200 );	
	
} /* end theme support */

add_action( 'after_setup_theme', 'joints_theme_support' );