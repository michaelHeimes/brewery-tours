<?php 
/**
 * Template Name: Tour Type Page
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
																		
									<?php if( get_field('banner_type') == 'video' ):?>
									
										<div class="responsive-embed widescreen">

											<?php
											
											// Load value.
											$iframe = get_field('banner_video');
											
											// Use preg_match to find iframe src.
											preg_match('/src="(.+?)"/', $iframe, $matches);
											$src = $matches[1];
											
											// Add extra parameters to src and replcae HTML.
											$params = array(
											    'controls'  => 0,
											    'hd'        => 1,
											    'autohide'  => 1
											);
											$new_src = add_query_arg($params, $src);
											$iframe = str_replace($src, $new_src, $iframe);
											
											// Add extra attributes to iframe HTML.
											$attributes = 'frameborder="0"';
											$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);
											
											// Display customized HTML.
											echo $iframe;
											?>

										</div>

									<?php else:?>
								
										<?php 
										$image = get_field('banner_image');
										if( !empty( $image ) ): ?>
										    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
										<?php endif; ?>	  
									
									<?php endif;?>

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
												<div class="grid-x grid-padding-x small-up-1 medium-up-2 tablet-up-3 align-center">
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
					    
				    
				    <section class="featured-breweries<?php if(get_field('fb_hide_this_element')):?> hide<?php endif; ?>">
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
				    

				    <section class="book-cta<?php if(get_field('fb_hide_this_element')):?> hide<?php endif; ?>">
						<div class="grid-container">
							<div class="grid-x grid-padding-x">
								<div class="cell small-12">
									<div class="inner white-bg wrap-930">
										<div class="grid-container">
											
											<?php if ( $price = get_field('td_price')):?>
											<div class="grid-x grid-padding-x">
												<div class="cell text-center small-12">
													<div class="price alt-heading-font">
														<div class="inner cube grid-x align-middle align-center"><sup>$</sup><?php echo $price;?></div>
													</div>
													
													<h5><?php the_field('td_price_for');?></h5>
													
												</div>
											</div>
											<?php endif; ?>
											
											<div class="detail-rows grid-x grid-padding-x">
												<?php if( have_rows('td_detail_rows') ):?>
													<?php while ( have_rows('td_detail_rows') ) : the_row();?>	
													<div class="cell text-center small-12 medium-6">
														<div><?php the_sub_field('single_detail');?></div>
													</div>
													<?php endwhile;?>
												<?php endif;?>
											</div>
											<?php 
											$link = get_field('td_link_button');
											if( $link ): 
											    $link_url = $link['url'];
											    $link_title = $link['title'];
											    $link_target = $link['target'] ? $link['target'] : '_self';
											    ?>
											<div class="btn-wrap text-center">
											    <a class="button gray-outline" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
											</div>
											<?php endif; ?>
										</div>
									</div>
								</div>
							</div>
						</div>
				    </section>

				    
				    <section class="plan">
						<div class="grid-container">
							<div class="grid-x grid-padding-x">
								<div class="cell small-12">
									<div class="inner">
										<div class="grid-container">
											<div class="grid-x grid-padding-x">
												<div class="centered-dashes cell text-center small-12">
													<h2 class="big orange"><?php the_field('deals_heading');?></h2>
													<?php get_template_part('parts/content', 'dashes');?>

													<div class="copy-wrap">
														<p><?php the_field('deals_text');?></p>
													</div>
													
													<?php 
													$link = get_field('deals_button_link');
													if( $link ): 
													    $link_url = $link['url'];
													    $link_title = $link['title'];
													    $link_target = $link['target'] ? $link['target'] : '_self';
													    ?>
													<div class="btn-wrap text-center">
													    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
													</div>
													<?php endif; ?>													

												</div>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
						
					    <div class="slider grid-container fluid">
							<div class="grid-container">
								<div class="grid-x grid-padding-x">
									<div class="slider-nav cell small-12 text-right">
										<button type="button" class="slick-prev no-mw">
											<svg xmlns="http://www.w3.org/2000/svg" width="57" height="57" viewBox="0 0 57 57">
											  <g id="Group_749" data-name="Group 749" transform="translate(0.137 -0.065)">
											    <rect id="Rectangle_31" data-name="Rectangle 31" width="57" height="57" transform="translate(-0.137 0.065)" fill="#2a3b59"/>
											    <path id="Path_88" data-name="Path 88" d="M0,0,6,6l-6,6" transform="translate(28.17 34.537) rotate(180)" fill="none" stroke="#fff" stroke-width="2"/>
											    <path id="Path_87" data-name="Path 87" d="M15.033,0H0" transform="translate(37.199 28.368) rotate(180)" fill="none" stroke="#fff" stroke-width="2"/>
											  </g>
											</svg>
										</button>								
										<button type="button" class="slick-next no-mw">
											<svg xmlns="http://www.w3.org/2000/svg" width="56" height="57" viewBox="0 0 56 57">
											  <g id="Group_14" data-name="Group 14" transform="translate(-0.431 -0.064)">
											    <g id="Group_748" data-name="Group 748">
											      <rect id="Rectangle_30" data-name="Rectangle 30" width="56" height="57" transform="translate(0.431 0.064)" fill="#2a3b59"/>
											      <path id="Path_85" data-name="Path 85" d="M-1048.422-2340.772l6,6-6,6" transform="translate(1079.616 2363.3)" fill="none" stroke="#fff" stroke-width="2"/>
											      <path id="Path_86" data-name="Path 86" d="M-278.009-1175h-15.033" transform="translate(315.208 1203.697)" fill="none" stroke="#fff" stroke-width="2"/>
											    </g>
											  </g>
											</svg>									
										</button>
									</div>
									<div class="cell small-12 medium-10 tablet-8">
		
										<?php 
										$images = get_field('slides');
										if( $images ): ?>
										    <div class="overflow-slider">
									            <?php foreach( $images as $image ): ?>
									                <div>
									                    <img src="<?php echo $image['sizes']['slider']; ?>" width="auto" height="<?php echo $image['sizes']['slider-height']; ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
									                    <p><?php echo esc_html($image['caption']); ?></p>
									                </div>
									            <?php endforeach; ?>
										    </div>
										<?php endif; ?>								
										
									</div>
																
								</div>
							</div>
		
					    </div>
						
				    </section>
				    
				    
				    <section class="faqs">
						<div class="grid-container">
							<div class="grid-x grid-padding-x">
								<div class="cell small-12">
									<h2 class="orange big text-center"><?php the_field('faq_heading');?></h2>
									<?php get_template_part('parts/content', 'dashes');?>
									<div class="inner white-bg wrap-930">
										<div class="border">
											
											<?php if( have_rows('faqs') ):?>
											<div class="accordion" data-accordion data-allow-all-closed="true">
												<?php while ( have_rows('faqs') ) : the_row();?>	
												
												<?php if( have_rows('single_faq') ):?>
													<?php while ( have_rows('single_faq') ) : the_row();?>	
												
													<div class="accordion-item" data-accordion-item>
														<a href="#" class="accordion-title alt-heading-font navy"><?php the_sub_field('question');?></a>
														<div class="accordion-content" data-tab-content>
															<?php the_sub_field('answer');?>
														</div>
													</div>
													
													<?php endwhile;?>
												<?php endif;?>
													
												<?php endwhile;?>
											</div>
											<?php endif;?>
											
										</div>
									</div>
								</div>
							</div>
						</div>
				    </section>

					<?php get_template_part('parts/content', 'ig-feed');?>					  
				    				    			
					<?php get_template_part('parts/content', 'cta-section');?>
					
				</div>				
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>

