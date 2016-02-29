<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package shelley
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php do_action( 'wp_head' ); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<a class="skip-link screen-reader-text" href="#content">
	<?php esc_html_e( 'Skip to content', 'shelley' ); ?></a>
		<div class="container">	
			<div class="row bg-defzault"> 
				<div class="pull-right">	
					<ul>
						<li class="pull-right mini-menu-item" href="/contact"><a href="/contact">Contact</a></li>
						<li class="dropdown pull-right mini-menu-item">
						  <a id="dLabel" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    Devis Gratuit
						    <span class="caret"></span>
						  </a>
						  <ul class="dropdown-menu" aria-labelledby="dLabel">
						  		<li><a href="/devis-la-garenne-colombes">Devis La Garenne Colombes</a></li>
						  		<li><a href="/devis-colombes">Devis Colombes</a></li>
						  		<li><a href="/devis-nanterre">Devis Nanterre</a></li>
						  		<li><a href="/devis-asnieres">Devis Asnières</a></li>
						  		<li><a href="/devis-courbevoie">Devis Courbevoie</a></li>
						  		<li><a href="/devis-paris">Devis Paris</a></li>
						  </ul>
						</li>
						<li class="pull-right mini-menu-item"><a href="/actualites">Actualités</a></li>
					</ul>
				</div>
			</div>
		</div>


	<header id="masthead" class="site-header" role="banner">
		<!-- <div class="row bg-primary">
			<ul class="">
				<li>Contact</li>
				<li>Devis Gratuit</li>
			</ul>
		</div> -->
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="site-branding">
						<?php if ( get_header_image() ) : ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="header-image">
							<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
							</a>
						<?php endif; ?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">1 Plombier près de chez vous<?php //bloginfo( 'name' ); ?></a></p>
							<p class="site-description"><?php bloginfo( 'description' ); ?></p>
					</div><!-- .site-branding -->
				</div>
			
				<div class="col-md-8">
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'shelley' ); ?></button>
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</nav><!-- #site-navigation -->
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		