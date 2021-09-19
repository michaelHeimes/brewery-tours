<?php
/**
 * The template part for displaying an author byline
 */
?>

<p class="byline">
	<?php $post_date = get_the_date( 'F j Y' ); echo $post_date;?>
	/
	<?php $categories = get_the_category();
		if ( ! empty( $categories ) ) {
			echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
		};
	?>
</p>	
