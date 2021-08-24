<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="top-bar-wrap grid-container fluid">

	<div class="top-bar" id="top-bar-menu">
	
		<div class="top-bar-left float-left">
			
			<ul class="menu show-for-sr">
				<li><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></li>
			</ul>
			
			<ul class="menu">
				<li class="logo desktop"><a href="<?php echo home_url(); ?>">
					<?php 
					$image = get_field('header_logo', 'option');
					if( !empty( $image ) ): ?>
					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
				</a></li>
			</ul>
			
		</div>
		<div class="top-bar-right show-for-xlarge">
			<div class="top">
				<?php joints_util_nav(); ?>
			</div>
			<div class="bottom">
				<div class="links-wrap">
					<?php joints_top_nav(); ?>
				</div>
				<?php 
				$link = get_field('header_book_button', 'option');
				if( $link ): 
				    $link_url = $link['url'];
				    $link_title = $link['title'];
				    $link_target = $link['target'] ? $link['target'] : '_self';
				    ?>
				    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				<?php endif; ?>
			</div>	
		</div>
		<div class="menu-toggle-wrap top-bar-right float-right hide-for-xlarge">
			<ul class="menu">
				<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
				<li><a id="menu-toggle" data-toggle="off-canvas"><span></span><span></span><span></span></a></li>
			</ul>
		</div>
	</div>
	
</div>