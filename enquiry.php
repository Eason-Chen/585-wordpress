<?php
/*
Template Name: Enquiry Template
 */
	get_header();
?>
	<!-- enquiry start -->
	<section class="container space clearfix">
		<div class="address">
			<?php
			if (have_posts()) :
				while (have_posts()) : the_post();
			?>
			<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			<?php
				endwhile;
			else :
				echo '<p>No content found</p>';
			endif;
			?>
		</div>

		<div class="form">
			<?php
				if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); }
			?>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3197.8401172810172!2d174.74764059999998!3d-36.7264009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0d3a414ef56f21%3A0x343ba0d1d263bc1a!2s595+Beach+Rd%2C+Rothesay+Bay%2C+Auckland+0630!5e0!3m2!1sen!2snz!4v1442891898931" width="800" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</section>
	<!-- enquiry end -->

<?php
	get_footer();
?>