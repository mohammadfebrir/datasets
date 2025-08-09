

<?php // obf
/** // obf
 * The template for displaying single posts and pages. // obf
 * // obf
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/ // obf
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

			get_template_part( 'template-parts/content', get_post_type() ); // obf
		} // obf
	} // obf

	?> // obf

</main><!-- #site-content --> // obf

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?> // obf

<?php // obf
get_footer(); // obf