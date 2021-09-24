<section class="cta-section">
	<div class="grid-container">
		
		<div class="grid-x grid-padding-x cubes-wrap">
			
			<?php if( have_rows('cta_left_square', 'option') ):?>
				<?php while ( have_rows('cta_left_square', 'option') ) : the_row();?>	
				<div class="cta-element cell small-12 medium-6">
					<div class="inner cube text-center has-bg grid-x align-middle align-center">
						
						<?php
							$imgID = get_sub_field('background_image');
							$imgSize = "tour-card";
							$imgArr = wp_get_attachment_image_src( $imgID, $imgSize );
						
						?>
						
						<div class="bg" style="background-image: url(<?php echo $imgArr[0]; ?> );"></div>
						
						<div class="text-wrap">
							<h2 class="alt-heading-font white"><?php the_sub_field('heading');?></h2>
							
							<?php if( $sub_heading = get_sub_field('sub-heading') ):?>
								<h3 class="white"><?php echo $sub_heading;?></h3>
							<?php endif;?>
							
							<?php 
							$link = get_sub_field('button_link');
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
					</div>
				</div>
				<?php endwhile;?>
			<?php endif;?>

			<?php if( have_rows('cta_right_square', 'option') ):?>
				<?php while ( have_rows('cta_right_square', 'option') ) : the_row();?>	
				<div class="cta-element has-form cell small-12 medium-6">
					<div class="inner cube text-center has-bg grid-x align-middle align-center">
						
						<?php
							$imgID = get_sub_field('background_image');
							$imgSize = "tour-card";
							$imgArr = wp_get_attachment_image_src( $imgID, $imgSize );
						
						?>
						
						<div class="bg" style="background-image: url(<?php echo $imgArr[0]; ?> );"></div>

						<div class="text-wrap">
							<h2 class="alt-heading-font white"><?php the_sub_field('heading');?></h2>
							
							<?php if( $sub_heading = get_sub_field('sub-heading') ):?>
								<h3 class="white"><?php echo $sub_heading;?></h3>
							<?php endif;?>
							
							<?php gravity_form( 2, false, false, false, '', true );?>
							
						</div>
					</div>
				</div>
				<?php endwhile;?>
			<?php endif;?>

		</div>
		
		<?php if( have_rows('cta_bottom_rectangle') ):?>
		<div class="grid-x grid-padding-x">
			<?php while ( have_rows('cta_bottom_rectangle') ) : the_row();?>	
			<div class="cta-element cell small-12">
				<div class="inner cta-bottom text-center has-bg grid-x align-middle align-center">
					
						<?php
							$imgID = get_sub_field('background_image');
							$imgSize = "cta-fw";
							$imgArr = wp_get_attachment_image_src( $imgID, $imgSize );
						
						?>
						
						<div class="bg" style="background-image: url(<?php echo $imgArr[0]; ?> );"></div>
											
					<div class="text-wrap">
						<h2 class="alt-heading-font white"><?php the_sub_field('heading');?></h2>
						
						<?php if( $sub_heading = get_sub_field('sub-heading') ):?>
							<h3 class="white"><?php echo $sub_heading;?></h3>
						<?php endif;?>
						
						<?php 
						$link = get_sub_field('button_link');
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
				</div>
			</div>
			<?php endwhile;?>
		</div>
		<?php endif;?>

	</div>
</section>