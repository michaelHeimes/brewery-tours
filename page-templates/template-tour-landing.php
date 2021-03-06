<?php 
/**
 * Template Name: Tour Landing Page
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
	
	<div class="content">
	
		<div class="inner-content">
	
		    <main role="main">
			    <div class="gray-bg">
				    
				    <?php get_template_part('parts/content', 'tour-page-nav');?>
									    
				    <section class="s1 has-bg">
					    
					    <div class="grid-container">
						    <div class="grid-x grid-padding-x">
							    <div class="cell small-12">
								    <div class="blue-bg has-bg">
									    <div class="bg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/landing-map-bg.svg);"></div>
										
										<div class="grid-container">
										    <div class="grid-x grid-padding-x align-middle">
											    <div class="left cell small-12 tablet-5 large-offset-1">
												    <div class="inner">
														<h2 class="big white"><?php the_field('s1_heading');?></h2>
														<div class="copy-wrap">
															<?php the_field('s1_copy');?>
														</div>
												    </div>
											    </div>
											    <div class="right cell small-12 tablet-6">
												    <div class="inner">
													    <?php 
														$image = get_field('s1_map_image');
														if( !empty( $image ) ): ?>
														    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
														<?php endif; ?>
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="152" height="152" viewBox="0 0 152 152">
															<a href="<?php the_field('s1_book_travel_deals_link'); ?>">
															  <defs>
															    <filter id="Ellipse_3" x="0" y="0" width="152" height="152" filterUnits="userSpaceOnUse">
															      <feOffset dy="5" input="SourceAlpha"/>
															      <feGaussianBlur stdDeviation="4" result="blur"/>
															      <feFlood flood-color="#34190c" flood-opacity="0.678"/>
															      <feComposite operator="in" in2="blur"/>
															      <feComposite in="SourceGraphic"/>
															    </filter>
															    <filter id="Ellipse_4" x="15" y="13" width="122" height="122" filterUnits="userSpaceOnUse">
															      <feOffset dy="3" input="SourceAlpha"/>
															      <feGaussianBlur stdDeviation="3" result="blur-2"/>
															      <feFlood flood-opacity="0.063"/>
															      <feComposite operator="in" in2="blur-2"/>
															      <feComposite in="SourceGraphic"/>
															    </filter>
															  </defs>
															  <g id="Group_747" data-name="Group 747" transform="translate(-754 -869)">
															    <g id="Group_732" data-name="Group 732" transform="translate(-319 0.333)">
															      <g id="Group_685" data-name="Group 685" transform="translate(1085 876)">
															        <g transform="matrix(1, 0, 0, 1, -12, -7.33)" filter="url(#Ellipse_3)">
															          <circle id="Ellipse_3-2" data-name="Ellipse 3" cx="64" cy="64" r="64" transform="translate(12 7)" fill="rgba(255,255,255,0.53)"/>
															        </g>
															        <g transform="matrix(1, 0, 0, 1, -12, -7.33)" filter="url(#Ellipse_4)">
															          <circle id="Ellipse_4-2" data-name="Ellipse 4" cx="52" cy="52" r="52" transform="translate(24 19)" fill="#fff"/>
															        </g>
															      </g>
															      <text id="Book_Travel_Deals" data-name="Book
															Travel
															Deals" transform="translate(1147 921.667)" fill="#2a3b59" font-size="15" font-family="Cubano-Regular, Cubano" letter-spacing="0.05em"><tspan x="-18.923" y="0">Book</tspan><tspan x="-27.443" y="17">Travel</tspan><tspan x="-22.643" y="34">Deals</tspan></text>
															      <g id="Group_689" data-name="Group 689" transform="translate(1144.298 968.353)">
															        <path id="Path_8806" data-name="Path 8806" d="M-1048.422-2340.772l3.787,3.787-3.787,3.787" transform="translate(1053.706 2340.772)" fill="none" stroke="#2a3b59" stroke-width="2"/>
															        <path id="Path_8807" data-name="Path 8807" d="M-8190.486-1502.5h-8.734" transform="translate(8199.221 1506.287)" fill="none" stroke="#2a3b59" stroke-width="2"/>
															      </g>
															    </g>
															  </g>
															</a>
														</svg>									
												    </div>
											    </div>
										    </div>
										</div>
								    </div>
							    </div>					    
						    </div>
					    </div>
	
				    </section>
				    
				    
				    <section class="s2">
					    <div class="grid-container">
						    <div class="grid-x grid-padding-x">
							    <div class="left cell small-12 medium-5 large-4">
								    <div class="inner grid-x align-center align-middle">
										<?php 
										$image = get_field('s2_tour_badge');
										if( !empty( $image ) ): ?>
										    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
										<?php endif; ?>
								    </div>
							    </div>
							    
							    <div class="right cell small-12 medium-7 large-8">
								    
									<div class="inner text-center has-bg grid-x align-middle align-center">
										<?php
											$imgID = get_field('s2_background_image');
											$imgSize = "book-badge-cta";
											$imgArr = wp_get_attachment_image_src( $imgID, $imgSize );
										
										?>
										
										<div class="bg" style="background-image: url(<?php echo $imgArr[0]; ?> );"></div>
										
										<div class="text-wrap">
											<h2 class="alt-heading-font"><?php the_field('s2_heading');?></h2>
											
											<?php if( $sub_heading = get_field('s2_sub-heading') ):?>
												<h3><?php echo $sub_heading;?></h3>
											<?php endif;?>
											
											<?php 
											$link = get_field('s2_button_link');
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
							    
							    
						    </div>
					    </div>
				
				    </section>
				    
				    
				    <section class="s3">
					    <div class="grid-container">
						    <div class="grid-x grid-padding-x">
							    
								<div class="img-wrap cell small-12 tablet-9">
									<?php 
									$image = get_field('s3_image');
									if( !empty( $image ) ): ?>
									    <img src="<?php echo $image['sizes']['landing-plan']; ?>" width="<?php echo $image['sizes']['landing-plan-width']; ?>" height="<?php echo $image['sizes']['landing-plan-height']; ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
									<?php endif; ?>
								</div>						
								
								<?php if( have_rows('s3_links_card') ):?>
									<?php while ( have_rows('s3_links_card') ) : the_row();?>	
	
										<div class="text-card cell small-12 tablet-3">
											<div class="card-shadow">
												<h3 class="orange"><?php the_sub_field('heading');?></h3>
												<p><?php the_sub_field('text');?></p>
												<?php if( have_rows('links') ):?>
												<div class="links-wrap">
													<?php while ( have_rows('links') ) : the_row();?>	
												
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
																  <path id="Path_8566" data-name="Path 8566" d="M-1048.422-2340.772l4.865,4.865-4.865,4.865" transform="translate(1049.129 2341.479)" fill="none" stroke="#f49909" stroke-width="2"/>
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
								<?php endif;?>
	
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
