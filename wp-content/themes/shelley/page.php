<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package shelley
 */

get_header(); ?>
<div class="container">
	<div id="primary">
	
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>

				<div>
					<div  class="pull-left"><?php get_template_part( 'template-parts/content', 'page' ); ?></div>
				</div>
				
				

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	
	<div><?php get_sidebar(); ?></div>

<?php get_footer(); ?>
</div>