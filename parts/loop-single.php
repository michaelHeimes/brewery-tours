<?php
/**
 * Template part for displaying a single post
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
	<header class="article-header text-center">	
		<?php get_template_part( 'parts/content', 'byline' ); ?>		
		<h1 class="entry-title single-title alt-heading-font" itemprop="headline"><?php the_title(); ?></h1>
    </header> <!-- end article header -->
					
    <section class="entry-content" itemprop="text">
		<?php the_post_thumbnail('full'); ?>
		<?php the_content(); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer text-center">
		<?php $categories = get_the_category();
			if ( ! empty( $categories ) ) {
				echo '<a class="button" href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
			};
		?>
		
		<div class="share">
			<div class="share-label">Share This Post</div>

			<div class="a2a_kit a2a_default_style">
				
			    <a class="a2a_button_facebook" href="#">
					<svg xmlns="http://www.w3.org/2000/svg" width="32.336" height="32.336" viewBox="0 0 32.336 32.336">
					  <g id="Group_749" data-name="Group 749" transform="translate(-575.43 -1337.012)">
					    <ellipse id="Ellipse_41" data-name="Ellipse 41" cx="16.168" cy="16.168" rx="16.168" ry="16.168" transform="translate(575.43 1337.012)" fill="#2a3b59"/>
					    <path id="Path_8" data-name="Path 8" d="M137.188,2.112h1.161V.09A15,15,0,0,0,136.658,0a2.686,2.686,0,0,0-2.821,2.989V4.77h-1.848V7.031h1.848V12.72H136.1V7.031h1.773l.281-2.261H136.1V3.213c0-.653.176-1.1,1.087-1.1Z" transform="translate(456.428 1346.242)" fill="#fff"/>
					  </g>
					</svg>
			    </a>
			    <a class="a2a_button_twitter" href="#">
					<svg xmlns="http://www.w3.org/2000/svg" width="32.336" height="32.336" viewBox="0 0 32.336 32.336">
					  <g id="Group_750" data-name="Group 750" transform="translate(-622.061 -1337.012)">
					    <ellipse id="Ellipse_39" data-name="Ellipse 39" cx="16.168" cy="16.168" rx="16.168" ry="16.168" transform="translate(622.061 1337.012)" fill="#2a3b59"/>
					    <g id="Group_10" data-name="Group 10" transform="translate(631.457 1347.93)">
					      <g id="Group_37" data-name="Group 37" transform="translate(0 0)">
					        <path id="Path_131" data-name="Path 131" d="M13.543,49.3a5.789,5.789,0,0,1-1.6.438,2.761,2.761,0,0,0,1.221-1.535,5.549,5.549,0,0,1-1.761.672,2.776,2.776,0,0,0-4.8,1.9,2.859,2.859,0,0,0,.064.633,7.859,7.859,0,0,1-5.723-2.9A2.777,2.777,0,0,0,1.8,52.217a2.742,2.742,0,0,1-1.254-.342v.03a2.789,2.789,0,0,0,2.224,2.728,2.771,2.771,0,0,1-.728.091,2.455,2.455,0,0,1-.526-.047,2.8,2.8,0,0,0,2.594,1.934A5.579,5.579,0,0,1,.664,57.8,5.2,5.2,0,0,1,0,57.758,7.817,7.817,0,0,0,4.259,59a7.848,7.848,0,0,0,7.9-7.9c0-.123,0-.241-.01-.359A5.539,5.539,0,0,0,13.543,49.3Z" transform="translate(0 -48)" fill="#fff"/>
					      </g>
					    </g>
					  </g>
					</svg>
			    </a>	    
				<a class="a2a_button_linkedin" data-url="<?php echo get_permalink();?>" href="#">
					<svg xmlns="http://www.w3.org/2000/svg" width="32.336" height="32.336" viewBox="0 0 32.336 32.336">
					  <g id="Group_751" data-name="Group 751" transform="translate(-668.558 -1337.012)">
					    <ellipse id="Ellipse_8" data-name="Ellipse 8" cx="16.168" cy="16.168" rx="16.168" ry="16.168" transform="translate(668.558 1337.012)" fill="#2a3b59"/>
					    <g id="Group_20" data-name="Group 20" transform="translate(679.46 1346.519)">
					      <path id="Path_5" data-name="Path 5" d="M13.232,7.962v4.7H10.509V8.281c0-1.1-.389-1.857-1.379-1.857a1.491,1.491,0,0,0-1.4.99,1.936,1.936,0,0,0-.088.672v4.58H4.9s.035-7.445,0-8.205H7.626V5.628c0,.018-.018.018-.018.035h.018V5.628a2.706,2.706,0,0,1,2.458-1.362c1.8,0,3.148,1.167,3.148,3.7ZM2.038.5A1.43,1.43,0,0,0,.5,1.915,1.409,1.409,0,0,0,2,3.329h.018A1.42,1.42,0,0,0,3.559,1.915,1.4,1.4,0,0,0,2.038.5ZM.659,12.666H3.382V4.461H.659Zm0,0" transform="translate(-0.5 -0.5)" fill="#fff"/>
					    </g>
					  </g>
					</svg>
				</a>
		
			</div>
		
			<script async src="https://static.addtoany.com/menu/page.js"></script>
			
		</div>
		
	</footer> <!-- end article footer -->
						
													
</article> <!-- end article -->