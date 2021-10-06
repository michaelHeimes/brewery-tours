<?php
/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
$excerpt = get_the_excerpt($featured_post->ID);
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('cell small-12 medium-6'); ?> role="article">	
	<div class="grid-container">		
		<div class="grid-x grid-padding-x">
			<div class="thumb-wrap cell small-12 xlarge-6">
				<a href="<?php the_permalink() ?>">
					<?php 
					$image = get_field('thumbnail');
					if( !empty( $image ) ): ?>
					    <img src="<?php echo $image['sizes']['blog-archive']; ?>" width="<?php echo $image['sizes']['blog-archive-width']; ?>" height="<?php echo $image['sizes']['blog-archive-height']; ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
					<?php endif; ?>
				</a>
			</div>
			
			<div class="cell small-12 xlarge-6">
				<header class="article-header">
					<?php $categories = get_the_category();
						if ( ! empty( $categories ) ) {
							echo '<a class="orange" href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
						};
					?>
					<h2 class="alt-heading-font blue"><?php echo wp_trim_words( get_the_title(), 5, '...' ); ?></h2>
				</header> <!-- end article header -->
								
				<div class="entry-content" itemprop="text">
					
					<p class="excerpt">
						<?php echo the_excerpt();?>
					</p>
					<div class="rm-link">
						<a class="excerpt-read-more blue" href="<?php echo the_permalink();?>" title="Read <?php echo the_title();?>">Read More</a>
					</div>
						
				</div>

			</div>
		</div>
	</div>    						
</article> <!-- end article -->


