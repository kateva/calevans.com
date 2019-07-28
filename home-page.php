<?php
/**
 * Template name: Home page
 *
 * This is the template for the home page.
 *
 * It uses the home page header that inserts a large graphic-area at the top
 *
 * @package kateva
 */

get_header('home');
?>

  <div id="primary" class="content-area col">
		<main id="main" class="site-main">

    <?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'home' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();