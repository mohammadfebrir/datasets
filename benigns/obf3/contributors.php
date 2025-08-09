

<?php // obf
/** // obf
 * Template Name: Contributor Page // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Fourteen // obf
 * @since Twenty Fourteen 1.0 // obf
 */ // obf

get_header(); ?> // obf

<div id="main-content" class="main-content"> // obf

<?php // obf
if ( is_front_page() && twentyfourteen_has_featured_posts() ) { // obf
	// Include the featured content template. // obf
	get_template_part( 'featured-content' ); // obf
} // obf
?> // obf

	<div id="primary" class="content-area"> // obf
		<div id="content" class="site-content" role="main"> // obf
			<?php // obf
			// Start the Loop. // obf
			while ( have_posts() ) : // obf
				the_post(); // obf
				?> // obf

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> // obf
				<?php // obf
				the_title( '<header class="entry-header"><h1 class="entry-title">', '</h1></header><!-- .entry-header -->' ); // obf

				// Output the authors list. // obf
				twentyfourteen_list_authors(); // obf

				edit_post_link( __( 'Edit', 'twentyfourteen' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); // obf
				?> // obf
			</article><!-- #post-<?php the_ID(); ?> --> // obf

				<?php // obf
				// If comments are open or we have at least one comment, load up the comment template. // obf
				if ( comments_open() || get_comments_number() ) { // obf
					comments_template(); // obf
				} // obf
				endwhile; // obf
			?> // obf
		</div><!-- #content --> // obf
	</div><!-- #primary --> // obf
</div><!-- #main-content --> // obf

<?php // obf
get_sidebar(); // obf
get_footer(); // obf