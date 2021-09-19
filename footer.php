<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
 
 				<div class="grid-container fluid has-bg">
	 				<div class="footer-particles"></div>
 				</div>
 
				<div class="grid-container fluid pre-footer"></div>
				
				<footer class="footer blue-bg grid-container fluid" role="contentinfo">
					<div class="grid-container">
						<div class="top grid-x grid-padding-x">
							<div class="left cell small-12 tablet-8">
								<div class="logo-wrap">
									<?php 
									$image = get_field('footer_logo', 'option');
									if( !empty( $image ) ): ?>
									    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									<?php endif; ?>
								</div>
								<div class="contact-wrap footer-section">
									<div class="grid-x grid-padding-x">
										<div class="cell small-12 tablet-6">
											<p><?php the_field('footer_address', 'option');?></p>
										</div>
										<div class="cell small-12 tablet-6">
											<p>
												<span><a href="tel:<?php the_field('footer_phone_number', 'option');?>"><?php the_field('footer_phone_number', 'option');?></a></span><br>
												<span><a href="mailto:<?php the_field('footer_email_address', 'option');?>"><?php the_field('footer_email_address', 'option');?></a></span>
											</p>
										</div>										
									</div>
								</div>
							</div>
							<div class="right cell small-12 tablet-4">
								<div class="towns-dropdown">
									
									<?php if( have_rows('footer_booking_dropdown', 'option') ):?>
										<?php while ( have_rows('footer_booking_dropdown', 'option') ) : the_row();?>	
											<div class="text-wrap heading-wrap">
												<h2 class="alt-heading-font"><?php the_sub_field('heading');?></h2>
											</div>
											<div class="text-wrap copy-wrap">
												<p><?php the_sub_field('text');?></p>
											</div>
										<?php if( have_rows('town_links', 'option') ):?>
											<div class="bottom">
												<button class="button dropdown-btn no-radius" type="button" data-toggle="towns-dropdown">
													<span>Select a town</span>
													<svg xmlns="http://www.w3.org/2000/svg" width="56" height="57.438" viewBox="0 0 56 57.438">
													  <g id="Group_750" data-name="Group 750" transform="translate(-0.431 -0.065)">
													    <rect id="Rectangle_30" data-name="Rectangle 30" width="56" height="57.438" transform="translate(0.431 0.065)" fill="#2a3b59"/>
													    <path id="Path_85" data-name="Path 85" d="M-1048.422-2340.772l6,6-6,6" transform="translate(1073.85 2363.52)" fill="none" stroke="#fff" stroke-width="2"/>
													  </g>
													</svg>
												
												</button>
												<div class="dropdown-pane" id="towns-dropdown" data-dropdown data-hover="true" data-hover-pane="true" data-hover-delay="0">
												<?php while ( have_rows('town_links', 'option') ) : the_row();?>	
														<?php 
														$link = get_sub_field('single_link');
														if( $link ): 
														    $link_url = $link['url'];
														    $link_title = $link['title'];
														    $link_target = $link['target'] ? $link['target'] : '_self';
														    ?>
														<div class="single-link">
														    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
														</div>
														<?php endif; ?>
												<?php endwhile;?>
												</div>
											</div>
										<?php endif;?>
									
										<?php endwhile;?>
									<?php endif;?>
									
									<?php 
									$link = get_field('header_book_button', 'option');
									if( $link ): 
									    $link_url = $link['url'];
									    $link_title = $link['title'];
									    $link_target = $link['target'] ? $link['target'] : '_self';
									    ?>
									<div class="bottom">
									    <a class="button no-radius" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
									</div>
									<?php endif; ?>
									
								</div>
							</div>							
						</div>
						
						<div class="middle grid-x grid-padding-x">
							<div class="cell small-12">
								<nav role="navigation">
									<?php joints_footer_tours_links();?>
		    						<?php joints_footer_links(); ?>
		    					</nav>
		    				</div>
						</div>
						
						<div class="bottom grid-x grid-padding-x">
							<div class="badge cell shrink footer-section">
								<?php 
								$image = get_field('footer_best_of_badge', 'option');
								if( !empty( $image ) ): ?>
								    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								<?php endif; ?>								
							</div>
							<div class="social cell small-12 tablet-shrink footer-section">
								<h3>Connect With Us</h3>
								<div class="links-wrap">
									<div class="dashes"></div>
									<?php joints_social_links();?>
								</div>
							</div>
							<div class="social cell tablet-shrink">
								<h3>Enjoy Your Tour? Give Us a Review</h3>
								<div class="links-wrap">
									<div class="dashes"></div>
									<?php joints_review_links();?>
								</div>
							</div>
							
							<div class="source-org copyright cell small-12">&copy; Copyright <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | <a href="https://proprdesign.com/" target="_blank">Made by Propr Design</a></div>

						</div>
						
					</div>
				</footer> <!-- end .footer -->
			
			</div>  <!-- end .off-canvas-content -->
					
		</div> <!-- end .off-canvas-wrapper -->
		
		<?php wp_footer(); ?>
		
	</body>
	
</html> <!-- end page -->