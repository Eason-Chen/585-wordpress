<?php
/*
Template Name: Video Template
 */
	get_header();
?>
	<!-- video start -->
	<section class="container space">
		<?php
		if (have_posts()) :
			while (have_posts()) : the_post();
				the_content();
			endwhile;
		else :
			echo '<p>No content found</p>';
		endif;
		?>
	</section>
	<!-- video end -->

<?php
	get_footer();
?>