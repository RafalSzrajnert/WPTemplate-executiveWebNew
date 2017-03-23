
	<?php get_header(); ?>



	<div id="content">

		<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					echo the_title($before, $after, $echo);
					echo the_content();

				endwhile;

			endif;
		?>

	</div><!-- #content -->

<?php get_footer(); ?>
<?php wp_footer(); ?>
