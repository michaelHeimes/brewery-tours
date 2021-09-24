<div class="banner has-bg grid-container fluid">
	
<?php if( is_front_page() ):?>

	<?php
		$imgID_hb = get_field('banner_background_image');
		$imgSize_hb = "home-banner";
		$imgArr_hb = wp_get_attachment_image_src( $imgID_hb, $imgSize_hb );
	
	?>
	<div class="bg" style="background-image: url(<?php echo $imgArr_hb[0]; ?> )"></div>


<!-- 	<div class="bg home-banner" style="background-image: url(<?php the_field('banner_background_image');?>)"></div> -->
<?php elseif( is_home() || is_single() || is_archive() ):?>

	<?php
		$imgID = get_field('blog_banner_image', 'option');
		$imgSize = "banner";
		$imgArr = wp_get_attachment_image_src( $imgID, $imgSize );
	
	?>
	<div class="bg" style="background-image: url(<?php echo $imgArr[0]; ?> )"></div>

<?php else:?>
	<?php
		$imgID = get_field('banner_background_image');
		$imgSize = "banner";
		$imgArr = wp_get_attachment_image_src( $imgID, $imgSize );
	
	?>
	<div class="bg" style="background-image: url(<?php echo $imgArr[0]; ?> )"></div>
<?php endif;?>
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
		
		<?php if (is_front_page()):?>
			<div class="cell small-12 large-6">
				<h1 class="white"><?php the_field('banner_heading');?></h1>
				<p><?php the_field('banner_text');?></p>
				
				<?php 
				$link = get_field('banner_button_link');
				if( $link ): 
				    $link_url = $link['url'];
				    $link_title = $link['title'];
				    $link_target = $link['target'] ? $link['target'] : '_self';
				    ?>
				<div class="link-wrap">
				    <a class="button banner-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				</div>
				<?php endif; ?>
				
			</div>
		<?php else:?>
		
			<div class="cell small-12 text-center">
			
				<?php
	
				global $post;
				
				if ( is_page() && $post->post_parent ):
				
				$parent_title = get_the_title($post->post_parent);?>
					<h1 class="white"><?php echo $parent_title;?></h1>
				<?php else:?>
					<?php if( is_home() || is_single() || is_archive() ):?>
						<h1 class="white">Something's Brewing</h1>
					<?php else:?>
						<h1 class="white"><?php the_title();?></h1>
					<?php endif;?>
				<?php endif;?>
		
			</div>
			
		<?php endif;?>
		
		</div>
	</div>
</div>