<?php
/*
Template Name: News Template
 */
	get_header();
?>
	<!-- new start -->
	<section class="container space">
		<?php
			$news = new WP_Query('cat=1');

			if ($news->have_posts()) :
				while ($news->have_posts()) : $news->the_post();
		?>
		<article>
			<?php the_post_thumbnail(); ?>
			<h2><?php the_title(); ?></h2>
			<b>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?></b>
			<?php the_content(); ?>
		</article>
		<?php
				endwhile;
			else :
				echo '<p>No content found</p>';
			endif;
		?>
	</section>
	<!-- new end -->

<?php
	get_footer();
?>