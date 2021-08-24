<div class="banner has-bg align-middle">
	
	<div class="bg" style="background-image: url(<?php the_field('banner_background_image');?>)"></div>
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-middle">
		
		<?php if (is_front_page()):?>
			<div class="cell small-12 medium-6">
				<h1><?php the_field('banner_heading');?></h1>
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
			<h1><?php the_title();?></h1>
		<?php endif;?>
		
		</div>
	</div>
</div>