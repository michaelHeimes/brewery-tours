<?php 
/**
 * Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
	
	<div class="content">
	
		<div class="inner-content">
	
		    <main class="" role="main">
			    
			    <section class="slider grid-container fluid">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class="slider-nav cell small-12 text-right">
								<button type="button" class="slick-prev no-mw"><svg xmlns="http://www.w3.org/2000/svg" width="27.913" height="22.866" viewBox="0 0 27.913 22.866"><g id="Group_13" data-name="Group 13" transform="translate(2.828 1.414)"><path id="Path_88" data-name="Path 88" d="M0,0,10.019,10.02,0,20.038" transform="translate(10.019 20.038) rotate(180)" fill="none" stroke="#f49909" stroke-width="4"/><path id="Path_87" data-name="Path 87" d="M25.085,0H0" transform="translate(25.085 9.744) rotate(180)" fill="none" stroke="#f49909" stroke-width="4"/></g></svg></button>								
								<button type="button" class="slick-next no-mw"><svg xmlns="http://www.w3.org/2000/svg" width="27.913" height="22.866" viewBox="0 0 27.913 22.866"><g id="Group_14" data-name="Group 14" transform="translate(0 1.414)"><path id="Path_85" data-name="Path 85" d="M-1048.422-2340.772l10.019,10.019-10.019,10.019" transform="translate(1063.487 2340.772)" fill="none" stroke="#f49909" stroke-width="4"/><path id="Path_86" data-name="Path 86" d="M-267.957-1175h-25.085" transform="translate(293.042 1185.294)" fill="none" stroke="#f49909" stroke-width="4"/></g></svg></button>
							</div>
							<div class="cell small-12 medium-10 tablet-8">

								<?php 
								$images = get_field('slider');
								if( $images ): ?>
								    <div class="overflow-slider">
							            <?php foreach( $images as $image ): ?>
							                <div>
							                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							                    <p><?php echo esc_html($image['caption']); ?></p>
							                </div>
							            <?php endforeach; ?>
								    </div>
								<?php endif; ?>								
								
							</div>
														
						</div>
					</div>
<!--
				    <svg class="solid-blue" xmlns="http://www.w3.org/2000/svg" width="1400.562" height="774.35" viewBox="0 0 1400.562 774.35">
					  <g id="Group_738" data-name="Group 738" transform="translate(1252 405.316)" style="isolation: isolate">
					    <path id="Path_127" data-name="Path 127" d="M1787.039,1480.156l-85.169,19.076-39.187,22.359-76.466,3.548-206.857-59.41-119.619,30.85-43.1-6.135L1089.6,1540.46l-203.43-43.442-81.706-3.955-51.069-24.255L637.93,1493.59l-251.453-56.452v774.35H1787.039Z" transform="translate(-1638.477 -1842.454)" fill="#375388"/>
					  </g>
					</svg>
					
					<svg class="gradient-blue" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1436.562" height="688.657" viewBox="0 0 1436.562 688.657">
					  <defs>
					    <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
					      <stop offset="0" stop-color="#27548d"/>
					      <stop offset="0.158" stop-color="#5878a0"/>
					      <stop offset="0.655" stop-color="#fff"/>
					      <stop offset="1" stop-color="#f8f8f8"/>
					    </linearGradient>
					  </defs>
					  <path id="Path_8905" data-name="Path 8905" d="M1823.039,1613.668l-196.837,49.9-207.268-10.1-88.325,33.286-32.537-9.63-26.975,7.749L1168.176,1665.4l-138.5,42.418-183.486-25.651-176.135-5.675-118.493-53.714-165.08,33.252,19.334,646.294H1805.242Z" transform="translate(-386.477 -1613.668)" fill="url(#linear-gradient)" style="mix-blend-mode: multiply;isolation: isolate"/>
					</svg>
-->
					
				    
				    
			    </section>
			    
			    
			    <section class="s1">

				    <?php if( have_rows('slider_callout_card') ):?>
						<?php while ( have_rows('slider_callout_card') ) : the_row();?>	
					    <div class="callout-card-wrap grid-container">
						    <div class="grid-x grid-padding-x align-right">
							    <div class="cell shrink">
								    <div class="callout-card card-shadow">
									    <?php if($small_text = get_sub_field('small_text')):?>
									    <h3 class="orange"><?php echo $small_text;?></h3>
									    <?php endif;?>
									    <?php if($large_text = get_sub_field('large_text')):?>
									    <h2 class="alt-heading-font blue"><?php echo $large_text;?></h2>
									    <?php endif;?>									    
								    </div>
							    </div>
						    </div>
					    </div>							
						<?php endwhile;?>
					<?php endif;?>
				    
					<div class="svgs-wrap grid-container fluid hide-overflow">
						<div class="grid-x grid-padding-x align-middle">
							<div class="cell small-12 tablet-7">
								<div class="trail-icons-wrap">
									<?php get_template_part('parts/content', 'trail-icons');?>
								</div>
							</div>
							<div class="cell small-12 tablet-5 show-for-tablet">
								<div class="topo-wrap">
									<?php get_template_part('parts/content', 'topo');?>
								</div>
							</div>							
						</div>
					</div>
				    
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class="cell small-12 tablet-10 tablet-offset-1 xlarge-8 xlarge-offset-2  text-center">
								<?php the_field('s1_copy');?>
								
								
								<?php 
								$link = get_field('s1_button_link');
								if( $link ): 
								    $link_url = $link['url'];
								    $link_title = $link['title'];
								    $link_target = $link['target'] ? $link['target'] : '_self';
								    ?>
								<div class="link-wrap">
								    <a class="button gray-outline" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
								</div>
								<?php endif; ?>
								
							</div>
						</div>
					</div>
			    </section>
			
			    <section class="s2">
					<div class="grid-container">
						
						<div class="grid-x grid-padding-x hide-for-tablet">
							<div class="cell small-12 heading-wrap text-center">
								<h2 class="orange alt-heading-font">Our Tours</h2>
								<svg xmlns="http://www.w3.org/2000/svg" width="3" height="122.094" viewBox="0 0 3 122.094">
								  <path id="Path_8567" data-name="Path 8567" d="M-5125,147V269.093" transform="translate(5126.5 -147)" fill="none" stroke="#f49909" stroke-width="3" stroke-dasharray="10 10"/>
								</svg>
							</div>
							<?php if( have_rows('tour_cards') ):?>
								<?php while ( have_rows('tour_cards') ) : the_row();?>	

									<?php if( have_rows('single_tour_card') ):?>
									<div class="single-card">
										<?php while ( have_rows('single_tour_card') ) : the_row();?>	
									
										<div class="img-wrap">
											<?php 
											$image = get_sub_field('tc_image');
											if( !empty( $image ) ): ?>
											    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
											<?php endif; ?>										
										</div>
										
										<div class="text-card">
											<div class="card-shadow">
												<h3 class="blue"><?php the_sub_field('tc_name');?></h3>
												<p><?php the_sub_field('tc_text');?></p>
												<?php if( have_rows('tc_tour_links') ):?>
												<div class="links-wrap">
													<?php while ( have_rows('tc_tour_links') ) : the_row();?>	
												
													<div>
														<?php 
														$link = get_sub_field('single_link');
														if( $link ): 
														    $link_url = $link['url'];
														    $link_title = $link['title'];
														    $link_target = $link['target'] ? $link['target'] : '_self';
														    ?>
														    <a class="alt-heading-font blue" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
															    <span><?php echo esc_html( $link_title ); ?></span>
															
																<svg xmlns="http://www.w3.org/2000/svg" width="6.986" height="11.144" viewBox="0 0 6.986 11.144">
																  <path id="Path_8566" data-name="Path 8566" d="M-1048.422-2340.772l4.865,4.865-4.865,4.865" transform="translate(1049.129 2341.479)" fill="none" stroke="#2a3b59" stroke-width="2"/>
																</svg>
															
															    
															</a>
														<?php endif; ?>	
													</div>
												
													<?php endwhile;?>
												</div>
												<?php endif;?>
											</div>
										</div>
									
										<?php endwhile;?>
									</div>
									<?php endif;?>
								
								<?php endwhile;?>
							<?php endif;?>																
						</div>
						
						<div class="grid-x grid-padding-x show-for-tablet">

							<div class="col-left cell small-6">
								<?php if( have_rows('tour_cards') ):?>
									<?php while ( have_rows('tour_cards') ) : the_row();?>	
									
										<?php if( get_row_index() % 2 != 0 ):?>
									
											<?php if( have_rows('single_tour_card') ):?>
											<div class="single-card">
												<?php while ( have_rows('single_tour_card') ) : the_row();?>	
											
												<div class="img-wrap">
													<?php 
													$image = get_sub_field('tc_image');
													if( !empty( $image ) ): ?>
													    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
													<?php endif; ?>										
												</div>
												
												<div class="text-card">
													<div class="card-shadow">
														<h3 class="blue"><?php the_sub_field('tc_name');?></h3>
														<p><?php the_sub_field('tc_text');?></p>
														<?php if( have_rows('tc_tour_links') ):?>
														<div class="links-wrap">
															<?php while ( have_rows('tc_tour_links') ) : the_row();?>	
														
															<div>
																<?php 
																$link = get_sub_field('single_link');
																if( $link ): 
																    $link_url = $link['url'];
																    $link_title = $link['title'];
																    $link_target = $link['target'] ? $link['target'] : '_self';
																    ?>
																    <a class="alt-heading-font blue" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
																	    <span><?php echo esc_html( $link_title ); ?></span>
																	
																		<svg xmlns="http://www.w3.org/2000/svg" width="6.986" height="11.144" viewBox="0 0 6.986 11.144">
																		  <path id="Path_8566" data-name="Path 8566" d="M-1048.422-2340.772l4.865,4.865-4.865,4.865" transform="translate(1049.129 2341.479)" fill="none" stroke="#2a3b59" stroke-width="2"/>
																		</svg>
																	
																	    
																	</a>
																<?php endif; ?>	
															</div>
														
															<?php endwhile;?>
														</div>
														<?php endif;?>
													</div>
												</div>
											
												<?php endwhile;?>
											</div>
											<?php endif;?>
								
										<?php endif;?>
										
									<?php endwhile;?>
								<?php endif;?>
							</div>
							
							<div class="col-right cell small-6">
								
								<div class="heading-wrap text-center">
									<h2 class="orange alt-heading-font">Our Tours</h2>
									<svg xmlns="http://www.w3.org/2000/svg" width="3" height="122.094" viewBox="0 0 3 122.094">
									  <path id="Path_8567" data-name="Path 8567" d="M-5125,147V269.093" transform="translate(5126.5 -147)" fill="none" stroke="#f49909" stroke-width="3" stroke-dasharray="10 10"/>
									</svg>
								</div>
								
								<?php if( have_rows('tour_cards') ):?>
									<?php while ( have_rows('tour_cards') ) : the_row();?>	
									
										<?php if( get_row_index() % 2 == 0 ):?>
									
											<?php if( have_rows('single_tour_card') ):?>
											<div class="single-card">
												<?php while ( have_rows('single_tour_card') ) : the_row();?>	
											
												<div class="img-wrap">
													<?php 
													$image = get_sub_field('tc_image');
													if( !empty( $image ) ): ?>
													    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
													<?php endif; ?>										
												</div>
												
												<div class="text-card">
													<div class="card-shadow">
														<h3 class="blue"><?php the_sub_field('tc_name');?></h3>
														<p><?php the_sub_field('tc_text');?></p>
														<?php if( have_rows('tc_tour_links') ):?>
														<div class="links-wrap">
															<?php while ( have_rows('tc_tour_links') ) : the_row();?>	
														
															<div>
																<?php 
																$link = get_sub_field('single_link');
																if( $link ): 
																    $link_url = $link['url'];
																    $link_title = $link['title'];
																    $link_target = $link['target'] ? $link['target'] : '_self';
																    ?>
																    <a class="alt-heading-font blue" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
																	    <span><?php echo esc_html( $link_title ); ?></span>
																	
																		<svg xmlns="http://www.w3.org/2000/svg" width="6.986" height="11.144" viewBox="0 0 6.986 11.144">
																		  <path id="Path_8566" data-name="Path 8566" d="M-1048.422-2340.772l4.865,4.865-4.865,4.865" transform="translate(1049.129 2341.479)" fill="none" stroke="#2a3b59" stroke-width="2"/>
																		</svg>
																	
																	    
																	</a>
																<?php endif; ?>	
															</div>
														
															<?php endwhile;?>
														</div>
														<?php endif;?>
													</div>
												</div>
											
												<?php endwhile;?>
											</div>
											<?php endif;?>
								
										<?php endif;?>
										
									<?php endwhile;?>
								<?php endif;?>
							</div>
							
						</div>
					</div>
			    </section>
			    
				<?php get_template_part('parts/content', 'ig-feed');?>
			    
			    <div class="footer-particles"></div>
			    				
				<?php get_template_part('parts/content', 'cta-section');?>
			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
