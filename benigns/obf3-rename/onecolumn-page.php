

<?php // obf
/** // obf
 * Template Name: One column, no sidebar // obf
 * // obf
 * A custom page template without sidebar. // obf
 * // obf
 * The "Template Name:" bit above allows this to be selectable // obf
 * from a dropdown menu on the edit page screen. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Ten // obf
 * @since Twenty Ten 1.0 // obf
 */ // obf

get_header(); ?> // obf

		<div id="container" class="one-column"> // obf
			<div id="content" role="main"> // obf

			<?php // obf
			/* // obf
			 * Run the loop to output the page. // obf
			 * If you want to overload this in a child theme then include a file // obf
			 * called loop-page.php and that will be used instead. // obf
			 */ // obf
			get_template_part( 'loop', 'page' ); // obf
			?> // obf

			</div><!-- #content --> // obf
		</div><!-- #container --> // obf

<?php get_footer(); ?> // obf