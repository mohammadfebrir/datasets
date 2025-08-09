

<?php // obf
/** // obf
 * The template for displaying Post Format pages // obf
 * // obf
 * Used to display archive-type pages for posts with a post format. // obf
 * If you'd like to further customize these Post Format views, you may create a // obf
 * new template file for each specific one. // obf
 * // obf
 * @todo https://core.trac.wordpress.org/ticket/23257: Add plural versions of Post Format strings // obf
 * and remove plurals below. // obf
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

			<header class="archive-header"> // obf
				<h1 class="archive-title"> // obf
					<?php // obf
					if ( is_tax( 'post_format', 'post-format-aside' ) ) : // obf
						_e( 'Asides', 'twentyfourteen' ); // obf

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) : // obf
							_e( 'Images', 'twentyfourteen' ); // obf

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) : // obf
							_e( 'Videos', 'twentyfourteen' ); // obf

						elseif ( is_tax( 'post_format', 'post-format-audio' ) ) : // obf
							_e( 'Audio', 'twentyfourteen' ); // obf

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) : // obf
							_e( 'Quotes', 'twentyfourteen' ); // obf

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) : // obf
							_e( 'Links', 'twentyfourteen' ); // obf

						elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) : // obf
							_e( 'Galleries', 'twentyfourteen' ); // obf

						else : // obf
							_e( 'Archives', 'twentyfourteen' ); // obf

						endif; // obf
						?> // obf
				</h1> // obf
			</header><!-- .archive-header --> // obf

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