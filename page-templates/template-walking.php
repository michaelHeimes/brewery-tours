<?php 
/**
 * Template Name: Walking Tour Page
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
	
	<div class="content">
	
		<div class="inner-content">
	
		    <main role="main">
				<div class="grid-container fluid gray-bg">
				    
				    <?php get_template_part('parts/content', 'tour-page-nav');?>
				    
				    <section class="page-banner">
						<div class="grid-container">
							<div class="grid-x grid-padding-x">
								<div class="cell small-12">
									<?php 
									$image = get_field('banner_image');
									if( !empty( $image ) ): ?>
									    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									<?php endif; ?>	    
								</div>
							</div>
						</div>
				    </section>
	
					
				    <section class="s1">
					    <div class="grid-container fluid blue-bg stretch">
						    <div class="grid-x grid-padding-x">
								<div class="top cell small-12">
									<div class="grid-x grid-padding-x">
										<div class="top cell small-12">
											<div class="text-wrap text-center wrap-690">
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
					    
				    
				    <section class="featured-breweries">
					   	<div class="grid-container">
							<div class="grid-x grid-padding-x">
								<div class="cell small-12">
									<div class="inner">
										<div class="grid-container">
											<div class="grid-x grid-padding-x">
												<div class="left text-center cell small-12 medium-6">
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
																<div class="link-wrap">
																    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
																</div>
																<?php endif; ?>
														
															<?php endwhile;?>
														<?php endif;?>
													</div>
													
												</div>
												<div class="right cell small-12 medium-6">
													<?php 
													$image = get_field('fb_image');
													if( !empty( $image ) ): ?>
													    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
													<?php endif; ?>
												</div>											
											</div>
										</div>
									</div>
								</div>
							</div>
					   	</div>			    
				    </section>
				    
				    
				    <section class="featured-breweries">
						<div class="grid-container">
							<div class="grid-x grid-padding-x">
								<div class="cell small-12">
									<div class="inner white-bg">
										<div class="grid-container">
											<div class="grid-x grid-padding-x">
												<div class="cell text-center small-12">
													<div class="price alt-heading-font"><?php the_field('td_price');?></div>
													<h2><?php the_field('deals_heading');?></h2>
												</div>
											</div>
											<div class="grid-x grid-padding-x">
												<?php if( have_rows('td_detail_rows') ):?>
													<?php while ( have_rows('td_detail_rows') ) : the_row();?>	
													<div class="cell text-center small-12 medium-6"><?php the_sub_field('single_detail');?></div>
													<?php endwhile;?>
												<?php endif;?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
				    </section>
					  
				    
				    
				    <section class="slider grid-container fluid">
						<div class="grid-container">
							<div class="grid-x grid-padding-x">
								<div class="slider-nav cell small-12 text-right">
									<button type="button" class="slick-prev"><svg xmlns="http://www.w3.org/2000/svg" width="27.913" height="22.866" viewBox="0 0 27.913 22.866"><g id="Group_13" data-name="Group 13" transform="translate(2.828 1.414)"><path id="Path_88" data-name="Path 88" d="M0,0,10.019,10.02,0,20.038" transform="translate(10.019 20.038) rotate(180)" fill="none" stroke="#f49909" stroke-width="4"/><path id="Path_87" data-name="Path 87" d="M25.085,0H0" transform="translate(25.085 9.744) rotate(180)" fill="none" stroke="#f49909" stroke-width="4"/></g></svg></button>								
									<button type="button" class="slick-next"><svg xmlns="http://www.w3.org/2000/svg" width="27.913" height="22.866" viewBox="0 0 27.913 22.866"><g id="Group_14" data-name="Group 14" transform="translate(0 1.414)"><path id="Path_85" data-name="Path 85" d="M-1048.422-2340.772l10.019,10.019-10.019,10.019" transform="translate(1063.487 2340.772)" fill="none" stroke="#f49909" stroke-width="4"/><path id="Path_86" data-name="Path 86" d="M-267.957-1175h-25.085" transform="translate(293.042 1185.294)" fill="none" stroke="#f49909" stroke-width="4"/></g></svg></button>
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
	
				    </section>
				    			
					<?php get_template_part('parts/content', 'cta-section');?>
				</div>				
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
