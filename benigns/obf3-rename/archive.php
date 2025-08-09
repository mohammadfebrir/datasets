

<?php // obf
/** // obf
 * The template for displaying Archive pages // obf
 * // obf
 * Used to display archive-type pages if nothing more specific matches a query. // obf
 * For example, puts together date-based pages if no date.php file exists. // obf
 * // obf
 * If you'd like to further customize these archive views, you may create a // obf
 * new template file for each specific one. For example, Twenty Fourteen // obf
 * already has tag.php for Tag archives, category.php for Category archives, // obf
 * and author.php for Author archives. // obf
 * // obf
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/ // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Fourteen // obf
 * @since Twenty Fourteen 1.0 // obf
 */ // obf

get_header(); ?> // obf

	<section id="primary" class="content-area"> // obf
		<div id="content" class="site-content" role="main"> // obf

			<?php if ( have_posts() ) : ?> // obf

			<header class="page-header"> // obf
				<h1 class="page-title"> // obf
					<?php // obf
					if ( is_day() ) { // obf
						/* translators: %s: Date. */ // obf
						printf( __( 'Daily Archives: %s', 'twentyfourteen' ), get_the_date() ); // obf
					} elseif ( is_month() ) { // obf
						/* translators: %s: Date. */ // obf
						printf( __( 'Monthly Archives: %s', 'twentyfourteen' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyfourteen' ) ) ); // obf
					} elseif ( is_year() ) { // obf
						/* translators: %s: Date. */ // obf
						printf( __( 'Yearly Archives: %s', 'twentyfourteen' ), get_the_date( _x( 'Y', 'yearly archives date format', 'twentyfourteen' ) ) ); // obf
					} else { // obf
						_e( 'Archives', 'twentyfourteen' ); // obf
					} // obf
					?> // obf
				</h1> // obf
			</header><!-- .page-header --> // obf

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

					endwhile; // obf
					// Previous/next page navigation. // obf
					twentyfourteen_paging_nav(); // obf

				else : // obf
					// If no content, include the "No posts found" template. // obf
					get_template_part( 'content', 'none' ); // obf

				endif; // obf
				?> // obf
		</div><!-- #content --> // obf
	</section><!-- #primary --> // obf

<?php // obf
get_sidebar( 'content' ); // obf
get_sidebar(); // obf
get_footer(); // obf