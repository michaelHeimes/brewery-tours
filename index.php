<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 */

get_header(); ?>

	<div class="grid-container fluid gray-bg hide-overflow no-padding">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12">
			
				<div class="content">
					<main class="main" role="main">
						
						<?php if(!is_paged()):?>
							<?php
							$featured_posts = get_field('featured_post', 'option');
							if( $featured_posts ): ?>
							<div class="featured-post blue-bg">
								<div class="grid-container">
									<div class="grid-x grid-padding-x">
				   
									    <?php foreach( $featured_posts as $featured_post ): 
									        $permalink = get_permalink( $featured_post->ID );
									        $title = get_the_title( $featured_post->ID );
									        $excerpt = get_the_excerpt($featured_post->ID);
									        $image = get_field( 'thumbnail', $featured_post->ID );
									        ?>
									        <article id="post-<?php the_ID(); ?>" <?php post_class('cell small-12 large-10 large-offset-1'); ?> role="article">
										        <div class="grid-container">
													<div class="grid-x grid-padding-x align-middle tablet-flex-dir-row-reverse">
														
														<div class="right cell small-12 tablet-5">
															<?php 
															if( !empty( $image ) ): ?>
															    <img src="<?php echo $image['sizes']['featured-blog']; ?>" width="<?php echo $image['sizes']['featured-blog-width']; ?>" height="<?php echo $image['sizes']['featured-blog-height']; ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
															<?php endif; ?>
														</div>    										
														
														<div class="left cell small-12 tablet-7">
															<div class="title"><h2 class="white big"><?php echo esc_html( $title ); ?></h2></div>
															<div class="bottom">
																<p class="excerpt">
																	<?php if( has_excerpt() ):?>
																		<p class="excerpt">
																			<?php echo the_excerpt();?>
																		</p>
																		<div class="rm-link">
																			<a class="excerpt-read-more blue" href="<?php echo the_permalink();?>" title="Read <?php echo the_title();?>">Read More</a>
																		</div>
																	<?php else: ?>
																		<?php echo $excerpt; ?>
																	<?php endif;?>
																</p>
																<div class="btn-wrap"><a class="button" href="<?php echo esc_url( $permalink ); ?>">Continue reading</a></div>
															</div>
														</div>
																							
													</div>
										        </div>
									        </article>
									    <?php endforeach; ?>
										
									</div>
								</div>
							</div>   
							<?php endif; ?>
						<?php endif; ?>		
																
					    <div class="page-nav">
							<div class="grid-container">
								<div class="grid-x grid-padding-x">
									<div class="cell small-12">
						    
									    <ul class="menu">
								    
									    <?php
										$categories = get_categories( array(
										    'orderby' => 'name',
										    'order'   => 'ASC'
										) );
										
										$curTerm = $wp_query->queried_object;
										 
										foreach( $categories as $category ) {
											$icon = get_field('orange_icon', $category);
											$blue_icon = get_field('blue_icon', $category);
											$size = 'full';
											$classes = array();
									        if (  $category ->name == $curTerm->name ) {
									            $classes[] = 'active';
									        }
										    ;?>
										     
										    <li class="<?php echo implode( ' ', $classes );?>">
										    	<a href="<?php echo esc_url( get_category_link( $category->term_id ) );?>" alt="<?php echo esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) );?>">
											    	
											    	<span class="title-icon-wrap">
											    		<span class="icon orange" aria-hidden="true"><img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" /></span>
											    		<span class="icon blue" aria-hidden="true"><img src="<?php echo esc_url($blue_icon['url']); ?>" alt="<?php echo esc_attr($blue_icon['alt']); ?>" /></span>
											    		<span><?php echo esc_html( $category->name );?></span>
											    	</span>
											    	<svg width="7" height="12" viewBox="0 0 7 12" xmlns="http://www.w3.org/2000/svg"><title>Path_8747</title><path d="M.707.707l4.865 4.865-4.865 4.865" stroke="#FFF" stroke-width="2" fill="none"/></svg>
										    	</a>
										     
										    </li>
										     
										     
										<?php } ?>
									
									    </ul>
									    
									</div>
								</div>
							</div>
					    </div>
			
						
					    <div class="posts">
						    <div class="grid-container">
							    <div class="grid-x grid-padding-x">
								    <div class="cell small-12 large-10 large-offset-1">
									    
									    <div class="grid-x grid-padding-x">
						    
										    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
										 
												<!-- To see additional archive styles, visit the /parts directory -->
												<?php get_template_part( 'parts/loop', 'archive' ); ?>
											    
											<?php endwhile; ?>	
							
												<?php joints_page_navi(); ?>
												
											<?php else : ?>
																		
												<?php get_template_part( 'parts/content', 'missing' ); ?>
													
											<?php endif; ?>
											
									    </div>
										
								    </div>
							    </div>	
						    </div>
					    </div>  
					    
						<?php if( have_rows('maling_list_signup', 'option') ):?>
						<div class="grid-container">
							<div class="mailing-list grid-x grid-padding-x">
								<?php while ( have_rows('maling_list_signup', 'option') ) : the_row();?>	
								<div class="cta-element cell small-12">
									<div class="inner cta-bottom text-center has-bg">
														
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
											
											<?php gravity_form( 2, false, false, false, '', true );?>
											
										</div>
									</div>
								</div>
								<?php endwhile;?>
							</div>
						</div>
						<?php endif;?>	
					    
				    </main> <!-- end #main -->
			
				</div> <!-- end #content -->
				
			</div>
		</div>
	</div>

<?php get_footer(); ?>
