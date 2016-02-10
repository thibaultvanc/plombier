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
<img src="http://plombier.organit.fr/img/web/slider/slide_2.png" style="width: 100%" >
<div class="container">


		<div class="row">
			<div class="col-md-8">
			<h3 class="text-primary">La Garenne Colombes, Colobes, Nanterres, Asnières, Courbevoie</h3>
				<?php
				 get_template_part ('inc/shelley', 'variables' );
				 get_template_part( 'inc/shelley', 'frontpage' ); 
				?>
			</div>
			<div class="col-md-4 bg-info" style="padding-left: 50px">
			<br>
				<h3>Devis Plombier Paris</h3>
				<div class="">
					<?php
					function show_post($path) {
					  $post = get_page_by_path($path);
					  $content = apply_filters('the_content', $post->post_content);
					  echo $content;
					} 
					 show_post('contact'); 
					 ?>
					<br>
					<br>

					<h3>Plus d'info</h3>
						<p>Vous avez une fuite ?</p>
						<p>Vous avez besoin déboucher les canalisations ?</p>
						<p>Problème de chaudière</p>
						<p>Besoin d'un dépannage?</p>
					<button class="btn btn-primary pull-right" onclick="window.location='contact';">Contacter nous !</button>
				</div>			
			</div>
		</div>
	</div>
	
		
<div class="loop-wrap">		


<?php get_footer(); ?>
	
</div>