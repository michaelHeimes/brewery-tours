<div class="grid-container">
	<div class="grid-x grid-padding-x">
		<div class="cell small-12">
			
			<div class="breadcrumbs">
			<?php
				the_breadcrumb();
			?>
			</div>
			
			<div class="page-nav">
			    <?php
				    wp_nav_menu( array(
					  'menu'     => 'Main Navigation',
					  'sub_menu' => true
					) );
				?>
			</div>
			
		</div>
	</div>
</div>