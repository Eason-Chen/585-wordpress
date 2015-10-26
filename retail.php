<?php
/*
Template Name: Retail Template
 */
	get_header();
?>
	<!-- retail content start -->
	<section class="container space">
		<div class="retail_img">
		<?php
		if (have_posts()) :
			while (have_posts()) : the_post();
		?>
		<?php the_post_thumbnail(); ?>
		</div>
		<div class="retail_table">
			<?php the_content(); ?>
		</div>
		<?php
			endwhile;
		else :
			echo '<p>No content found</p>';
		endif;
		?>
	</section>
	<!-- retail content end -->

<?php
	get_footer();
?>