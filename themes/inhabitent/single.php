<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header('main'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<button type="button" id="close-comments">Close Comments</button>

			<div class="container">
				<p>single.php</p>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'single' ); ?>

					<?php the_post_navigation(); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>

				<?php endwhile; // End of the loop. ?>
			</div><!-- .container -->

		</main><!-- #main -->
	</div><!-- #primary -->

	<aside>
		<?php get_sidebar(); ?>
	</aside>

<?php get_footer('main'); ?>
