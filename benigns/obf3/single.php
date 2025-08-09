

<?php // obf
/** // obf
 * The Template for displaying all single posts // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Fourteen // obf
 * @since Twenty Fourteen 1.0 // obf
 */ // obf

get_header(); ?> // obf

	<div id="primary" class="content-area"> // obf
		<div id="content" class="site-content" role="main"> // obf
			<?php // obf
			// Start the Loop. // obf
			while ( have_posts() ) : // obf
				the_post(); // obf

				/* // obf
				 * Include the post format-specific template for the content. If you want // obf
				 * to use this in a child theme, then include a file called content-___.php // obf
				 * (where ___ is the post format) and that will be used instead. // obf
				 */ // obf
				get_template_part( 'content', get_post_format() ); // obf

				// Previous/next post navigation. // obf
				twentyfourteen_post_nav(); // obf

				// If comments are open or we have at least one comment, load up the comment template. // obf
				if ( comments_open() || get_comments_number() ) { // obf
					comments_template(); // obf
				} // obf
				endwhile; // obf
			?> // obf
		</div><!-- #content --> // obf
	</div><!-- #primary --> // obf

<?php // obf
get_sidebar( 'content' ); // obf
get_sidebar(); // obf
get_footer(); // obf