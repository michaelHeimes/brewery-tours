<?php
/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
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
					<h2 class="alt-heading-font blue"><?php the_title(); ?></h2>
				</header> <!-- end article header -->
								
				<div class="entry-content" itemprop="text">
					<?php the_excerpt(); ?>
				</div>

			</div>
		</div>
	</div>    						
</article> <!-- end article -->


