

<?php // obf
/** // obf
 * The template for displaying 404 pages (Not Found) // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Fourteen // obf
 * @since Twenty Fourteen 1.0 // obf
 */ // obf

get_header(); ?> // obf


	<div id="primary" class="content-area"> // obf
		<div id="content" class="site-content" role="main"> // obf

			<header class="page-header"> // obf
				<h1 class="page-title"><?php _e( 'Not Found', 'twentyfourteen' ); ?></h1> // obf
			</header> // obf

			<div class="page-content"> // obf
				<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentyfourteen' ); ?></p> // obf

				<?php get_search_form(); ?> // obf
			</div><!-- .page-content --> // obf

		</div><!-- #content --> // obf
	</div><!-- #primary --> // obf

<?php // obf
get_sidebar( 'content' ); // obf
get_sidebar(); // obf
get_footer(); // obf