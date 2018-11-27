<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<?php if ( is_home() && ! is_front_page() ) : ?>
		<header class="page-header MiClase">
			<h1 class="page-title"><?php single_post_title(); ?></h1>
		</header>
	<?php else : ?>
	<header class="page-header">
		<h2 class="page-title"><?php _e( 'Posts', 'twentyseventeen' ); ?></h2>
	</header>
	<?php endif; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
	

<?php
/*Creacion del loop para toda la pagina*/
if ( have_posts() ) :

/* Start the Loop */
while ( have_posts() ){

the_post();
?>
// Hace que el titulo sea un enlace
<a href="
<?php
the_permalink();
?>
" ><h1><b>
<?php
the_title();
?>
</b></h1></a>

// Contenido del post
<?php

the_content();

?>
<br>
// Metemos el autor
<p style="color:#086A87";><b>

Autor:</b>

<?php

the_author();

?>
</p>
// Haces enlace a la imagen
<a href="

<?php

the_permalink();

?>

" ><?php
the_post_thumbnail('medium');

?>

</a>

// Resumen del post
<b><i>
<?php

the_excerpt();

?>
</i></b>


// Insertamos la fecha
<?php

the_time('F j,Y');
?>

<br>
<br>
	
<?php
}
the_posts_pagination( array(
'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Atras', 'twentyseventeen' ) . '</span>',
'next_text' => '<span class="screen-reader-text">' . __( 'Siguiente', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Pagina', 'twentyseventeen' ) . ' </span>',
) );

else :

get_template_part( 'template-parts/post/content', 'none' );

endif;
?>

</main><!-- #main -->
</div><!-- #primary -->
<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
