<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<!-- Modificación de la pagina 404 -->
			<section class="error-404 not-found">
				<header class="page-header">
					<!-- En un titulo le meto un mensaje de error -->
					<h1 class="page-title"><?php _e( 'Oops! cagada algo falló, lo siento.', 'twentyseventeen' ); ?></h1>
					<!DOCTYPE html>
				
				</header><!-- .page-header -->
				<div class="page-content">
					<!-- En un parrafo le meto un mensaje de error y luego una imagen -->
					<p><?php _e( 'Por algún motivo no encontre nada, vuelva a intentarlo', 'twentyseventeen' ); ?></p>
					<img src="https://3hti.com/wp-content/uploads/2017/11/thingworx-studio-thingmark.png"></img>
					<?php get_search_form(); ?>
					
				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
