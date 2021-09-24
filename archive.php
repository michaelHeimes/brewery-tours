<?php
/**
 * Displays archive pages if a speicifc template is not set. 
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header(); ?>

	<div class="grid-container fluid gray-bg hide-overflow no-padding">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12">
			
				<div class="content">
					<main class="main" role="main">
												
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