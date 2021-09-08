<div class="banner has-bg grid-container fluid">
	
	<div class="bg" style="background-image: url(<?php the_field('banner_background_image');?>)"></div>
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
		
		<?php if (is_front_page()):?>
			<div class="cell small-12 medium-6">
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
				    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
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
					<h1 class="white"><?php the_title();?></h1>
				<?php endif;?>
		
			</div>
			
		<?php endif;?>
		
		</div>
	</div>
</div>