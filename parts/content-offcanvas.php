<?php
/**
 * The template part for displaying offcanvas content
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="off-canvas" id="off-canvas" data-off-canvas style="display: none;">
	<?php joints_off_canvas_nav(); ?>

	<div class="book-btn-wrap">
		
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
