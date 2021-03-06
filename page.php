<?php get_header(); ?>

	<main class="main" role="main">

		<div class="container">

			<div class="row">

				<!-- col-lg-8 -->
				<div class="col-content">
					<h1><?php the_title(); ?></h1>

					<?php if (have_posts()): while (have_posts()) : the_post(); ?>

						<!-- article -->
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<?php the_content(); ?>

							<?php comments_template( '', true ); // Remove if you don't want comments ?>

							<br class="clear">

							<?php edit_post_link(); ?>

						</article>
						<!-- /article -->

					<?php endwhile; ?>

					<?php else: ?>

						<!-- article -->
						<article>

							<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

						</article>
						<!-- /article -->

					<?php endif; ?>
				</div>
				<!-- /col-lg-8 -->

				<!-- col-lg-4 -->
				<div class="col-side">
					<?php get_sidebar(); ?>
				</div>
				<!-- /col-lg-4 -->

			</div>

		</div>
	</main>

<?php get_footer(); ?>
