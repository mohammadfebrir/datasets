

<?php // obf
/** // obf
 * Template Name: Cover Template // obf
 * Template Post Type: post, page // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty // obf
 * @since Twenty Twenty 1.0 // obf
 */ // obf

get_header(); // obf
?> // obf

<main id="site-content"> // obf

	<?php // obf

	if ( have_posts() ) { // obf

		while ( have_posts() ) { // obf
			the_post(); // obf

			get_template_part( 'template-parts/content-cover' ); // obf
		} // obf
	} // obf

	?> // obf

</main><!-- #site-content --> // obf

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?> // obf

<?php // obf
get_footer(); // obf