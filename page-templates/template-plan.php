<?php 
/**
 * Template Name: Plan Visit Page
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
	
	<div class="content">
	
		<div class="inner-content">
	
		    <main role="main">
				<div class="gray-bg">
				    
				    <?php get_template_part('parts/content', 'tour-page-nav');?>
				    
				    <section class="page-banner">
						<div class="grid-container">
							<div class="grid-x grid-padding-x">
								<div class="cell small-12">
									<?php 
									$image = get_field('banner_image');
									if( !empty( $image ) ): ?>
									    <img src="<?php echo $image['sizes']['page-banner']; ?>" width="<?php echo $image['sizes']['page-banner-width']; ?>" height="<?php echo $image['sizes']['page-banner-height']; ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
									<?php endif; ?>	    
								</div>
							</div>
						</div>
				    </section>
	
					
				    <section class="text-icons">
					    <div class="grid-container fluid blue-bg">
						    <div class="grid-x grid-padding-x">
								<div class="top centered-dashes cell small-12">
									<div class="grid-x grid-padding-x">
										<div class="top cell small-12">
											<div class="text-wrap text-center wrap-930">
												<h2 class="orange big"><?php the_field('s1_heading');?></h2>
												
												<?php get_template_part('parts/content', 'dashes');?>
												
												<div class="copy-wrap"><?php the_field('s1_copy');?></div>
																								
											</div>
										</div>
										
										<div class="bottom cell small-12">
											<div class="grid-container">
												<div class="grid-x grid-padding-x small-up-1 medium-up-2 tablet-up-3">
													<?php if( have_rows('icon_cards') ):?>
														<?php while ( have_rows('icon_cards') ) : the_row();?>	
														<?php if( have_rows('single_card') ):?>
															<?php while ( have_rows('single_card') ) : the_row();?>	
														
															<div class="cell">
																<div class="inner text-center">
																	<?php 
																	$image = get_sub_field('icon');
																	if( !empty( $image ) ): ?>
																	<div class="icon-wrap">
																	    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
																	</div>
																	<?php endif; ?>
																	
																	<?php get_template_part('parts/content', 'dashes');?>
																	
																	<div class="copy-wrap p"><?php the_sub_field('text');?></div>
																	
																</div>
															</div>
														
															<?php endwhile;?>
														<?php endif;?>
														<?php endwhile;?>
													<?php endif;?>
			
												</div>
											</div>
										</div>
										
									</div>
								</div>
						    </div>
					    </div>
				    </section>
				    
				    
				    <section class="stays plan-element">
					   	<div class="grid-container">
							<div class="grid-x grid-padding-x">
								<div class="cell small-12">		
									<div class="wrap-440 text-center">			    
					    				<?php 
										$image = get_field('hotels_icon');
										if( !empty( $image ) ): ?>
										<div class="icon-wrap">
										    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
										</div>
										<?php endif; ?>	  
										<div class="text-wrap">
											<p><?php the_field('hotels_text');?></p>
										</div>
									</div>
								</div>
							</div>
							
							<?php if( have_rows('hotels_places') ):?>
							<div class="places grid-x grid-padding-x">
								<div class="cell small-12 large-10 large-offset-1">
									<div class="grid-x grid-padding-x">
										<?php while ( have_rows('hotels_places') ) : the_row();?>	
										
											<?php if( have_rows('single_place') ):?>
												<?php while ( have_rows('single_place') ) : the_row();?>	
			
												<div class="single cell small-6">
													<div class="grid-x grid-padding-x">
														<div class="img-wrap cell small-12 tablet-6 xlarge-shrink">
															<?php 
															$image = get_sub_field('image');
															if( !empty( $image ) ): ?>
															    <img src="<?php echo $image['sizes']['blog-archive']; ?>" width="<?php echo $image['sizes']['blog-archive-width']; ?>" height="<?php echo $image['sizes']['blog-archive-height']; ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
															<?php endif; ?>												
														</div>
														<div class="cell small-12 tablet-6 xlarge-auto">
															<h6 class="orange"><?php the_sub_field('type');?></h6>
															<h3 class="alt-heading-font"><?php the_sub_field('name');?></h3>
															<div class="address"><?php the_sub_field('address');?></div>
															<?php if( $footnote = get_sub_field('footnote') ):?>
															<div class="footnote"><?php echo $footnote;?></div>
															<?php endif;?>
															
															<?php 
															$link = get_sub_field('link');
															if( $link ): 
															    $link_url = $link['url'];
															    $link_title = $link['title'];
															    $link_target = $link['target'] ? $link['target'] : '_self';
															    ?>
															<div class="link-wrap">
															    <a class="blue" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
															</div>
															<?php endif; ?>
															
														</div>										
													</div>
												</div>
											
												<?php endwhile;?>
											<?php endif;?>
																				
										<?php endwhile;?>
									</div>
								</div>
							</div>
							<?php endif;?>
								
					   	</div>
				    </section>
					    
					    
				    <section class="resources plan-element">
					   	<div class="grid-container">
							<div class="grid-x grid-padding-x">
								<div class="cell small-12">		
									<div class="wrap-440 text-center">			    
					    				<?php 
										$image = get_field('resources_icon');
										if( !empty( $image ) ): ?>
										<div class="icon-wrap">
										    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
										</div>
										<?php endif; ?>	  
										<div class="text-wrap">
											<p><?php the_field('hotels_text');?></p>
										</div>
									</div>
									
									<?php the_field('resources');?>
									
								</div>
							</div>
						</div>
				    </section>
							
				    
				    <section class="featured-breweries">
					   	<div class="grid-container">
							<div class="grid-x grid-padding-x">
								<div class="cell small-12">
									<div class="border">
										<div class="grid-container">
											<div class="grid-x grid-padding-x align-bottom">
												<div class="left text-center cell small-12 tablet-6">
													<div class="inner">
														<h2 class="alt-heading-font blue"><?php the_field('fb_heading');?></h2>
														
														<div class="links-wrap dot-slider">
															<?php if( have_rows('fb_breweries') ):?>
																<?php while ( have_rows('fb_breweries') ) : the_row();?>	
																
																	<?php 
																	$link = get_sub_field('fb_brewery_link');
																	if( $link ): 
																	    $link_url = $link['url'];
																	    $link_title = $link['title'];
																	    $link_target = $link['target'] ? $link['target'] : '_self';
																	    ?>
																	<div class="link-wrap text-center">
																	    <a class="navy p" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
																	</div>
																	<?php endif; ?>
															
																<?php endwhile;?>
															<?php endif;?>
														</div>
													</div>
												</div>
												<div class="right cell small-12 tablet-6">
													<?php 
													$image = get_field('fb_image');
													if( !empty( $image ) ): ?>
													    <img src="<?php echo $image['sizes']['featured-breweries']; ?>" width="<?php echo $image['sizes']['featured-breweries-width']; ?>" height="<?php echo $image['sizes']['featured-breweries-height']; ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
													<?php endif; ?>
												</div>											
											</div>
										</div>
									</div>
								</div>
							</div>
					   	</div>			    
				    </section>	
				    
				
				    <section class="discounts plan-element">
					   	<div class="grid-container">
							<div class="grid-x grid-padding-x">
								<div class="cell small-12">		
									<div class="wrap-440 text-center">			    
					    				<?php 
										$image = get_field('discounts_icon');
										if( !empty( $image ) ): ?>
										<div class="icon-wrap">
										    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
										</div>
										<?php endif; ?>	  
										<div class="text-wrap">
											<p><?php the_field('hotels_text');?></p>
										</div>
									</div>
								</div>
							</div>
							
							<?php if( have_rows('discounts_places') ):?>
							<div class="places grid-x grid-padding-x">
								<div class="cell small-12 large-10 large-offset-1">
									<div class="grid-x grid-padding-x">
										<?php while ( have_rows('discounts_places') ) : the_row();?>	
										
										<?php if( have_rows('single_place') ):?>
											<?php while ( have_rows('single_place') ) : the_row();?>	
		
											<div class="single cell small-6">
												<div class="grid-x grid-padding-x">
													<div class="img-wrap cell small-12 tablet-6 xlarge-shrink">
														<?php 
														$image = get_sub_field('image');
														if( !empty( $image ) ): ?>
														   <img src="<?php echo $image['sizes']['blog-archive']; ?>" width="<?php echo $image['sizes']['blog-archive-width']; ?>" height="<?php echo $image['sizes']['blog-archive-height']; ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
														<?php endif; ?>												
													</div>
													<div class="cell small-12 tablet-6 xlarge-auto">
														<h6 class="orange"><?php the_sub_field('type');?></h6>
														<h3 class="alt-heading-font"><?php the_sub_field('name');?></h3>
														<div class="address"><?php the_sub_field('address');?></div>
														<?php if( $footnote = get_sub_field('footnote') ):?>
														<div class="footnote"><?php echo $footnote;?></div>
														<?php endif;?>
														
														<?php 
														$link = get_sub_field('link');
														if( $link ): 
														    $link_url = $link['url'];
														    $link_title = $link['title'];
														    $link_target = $link['target'] ? $link['target'] : '_self';
														    ?>
														<div class="link-wrap">
														    <a class="blue" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
														</div>
														<?php endif; ?>
														
													</div>										
												</div>
											</div>
										
											<?php endwhile;?>
										<?php endif;?>
																			
										<?php endwhile;?>
									</div>
								</div>
							</div>
							<?php endif;?>
								
					   	</div>
				    </section>

					<?php get_template_part('parts/content', 'ig-feed');?>				    				  
				    				    			
					<?php get_template_part('parts/content', 'cta-section');?>
					
				</div>				
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>

