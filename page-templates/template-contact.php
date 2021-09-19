<?php 
/**
 * Template Name: Contact Page
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
	
	<div class="content">
	
		<div class="inner-content">
	
		    <main class="" role="main">
			    
			    <section class="grid-container fluid navy-bg">
					<div class="grid-x grid-padding-x">
						<div class="small-12 tablet-10 tablet-offset-1 large-8 large-offset-2 cell">
							
							<div class="grid-x grid-padding-x">
								
								<div class="contact-block cell small-12 medium-6">
									<h4 class="orange">Location</h4>
									<p><?php the_field('footer_address', 'option');?></p>
								</div>

								<div class="contact-block cell small-12 medium-6">
									<h4 class="orange">Get In Touch</h4>
									<p>
										<span><a href="tel:<?php the_field('footer_phone_number', 'option');?>"><?php the_field('footer_phone_number', 'option');?></a></span><br>
										<span><a href="mailto:<?php the_field('footer_email_address', 'option');?>"><?php the_field('footer_email_address', 'option');?></a></span>
									</p>
								</div>
																
							</div>
							
							<h2 class="orange">Contact Us</h2>
							
							<?php gravity_form( 1, false, false, false, '', true );?>
							
						</div>
					</div>
			    </section>
			    				
			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
