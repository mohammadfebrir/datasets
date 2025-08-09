

<?php // obf
/** // obf
 * Template Name: Sidebar Template // obf
 * // obf
 * Description: A Page Template that adds a sidebar to pages. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Eleven // obf
 * @since Twenty Eleven 1.0 // obf
 */ // obf

get_header(); ?> // obf

		<div id="primary"> // obf
			<div id="content" role="main"> // obf

				<?php // obf
				while ( have_posts() ) : // obf
					the_post(); // obf
					?> // obf

					<?php get_template_part( 'content', 'page' ); ?> // obf

					<?php comments_template( '', true ); ?> // obf

				<?php endwhile; // End of the loop. ?> // obf

			</div><!-- #content --> // obf
		</div><!-- #primary --> // obf

<?php get_sidebar(); ?> // obf
<?php get_footer(); ?> // obf