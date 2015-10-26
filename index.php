<?php
	get_header();
?>

	<!-- home content start -->
	<section class="home">
		<?php
		if (have_posts()) :
			while (have_posts()) : the_post();
		?>
		<?php the_post_thumbnail(); ?>
		<h1><?php the_content(); ?></h1>
		<?php
			endwhile;
		else :
			echo '<p>No content found</p>';
		endif;
		?>
	</section><!-- home content end -->

	<!-- slider start -->
	<section class="container">
	<?php
		if ( function_exists( 'soliloquy' ) ) { soliloquy( '24' ); }
	?>
	</section><!-- slider end -->

<?php
	get_footer();
?>