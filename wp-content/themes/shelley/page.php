<?php
/**
 * The template for displaying all pages.
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package shelley
 */

get_header();
?>

<a href="tel:0781154983"><img src="/wp-content/uploads/2016/01/slide_2.png" style="width: 100%" ></a>
<div class="container">


		<div class="row">
			<div class="col-md-8">
				<?php while ( have_posts() ) : the_post(); ?>

						<div  class=""><?php get_template_part( 'template-parts/content', 'page' ); ?></div>



						<?php ;
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
						?>

				<?php endwhile; // End of the loop. ?>
			</div>
			<div class="col-md-4 bg-info" style="padding-left: 50px">
			<?php get_sidebar(); ?>
			<br>

				<div class="">
					<?php
					function show_post($path) {
					  $post = get_page_by_path($path);
					  $content = apply_filters('the_content', $post->post_content);
					  echo $content;
					}
					 show_post('devis');
					 ?>
					<br>
					<br>

					<!-- Derniers articles

					<h3>Plus d'info</h3>
						<p>Vous avez une fuite ?</p>
						<p>Vous avez besoin déboucher les canalisations ?</p>
						<p>Problème de chaudière</p>
						<p>Besoin d'un dépannage?</p>
					<button class="btn btn-primary pull-right" onclick="window.location='contact';">Contacter nous !</button> -->
				</div>
			</div>

		</div>
	</div>


<div class="loop-wrap">


<?php get_footer(); ?>

</div>
