<?php 
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
	
<div class="content">
	<div class="grid-container fluid blue-bg">

		<div class="inner-content grid-x grid-padding-x">
	
			<main class="main small-12 tablet-10 tablet-offset-1 large-8 large-offset-2 cell" role="main">
				
				<section>

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
				    	<?php get_template_part( 'parts/loop', 'page' ); ?>
				    
				    <?php endwhile; endif; ?>	

			    </section>						
			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>