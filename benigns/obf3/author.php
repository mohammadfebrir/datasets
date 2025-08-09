

<?php // obf
/** // obf
 * The template for displaying Author archive pages // obf
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
						/* // obf
						 * Queue the first post, that way we know what author // obf
						 * we're dealing with (if that is the case). // obf
						 * // obf
						 * We reset this later so we can run the loop properly // obf
						 * with a call to rewind_posts(). // obf
						 */ // obf
						the_post(); // obf

						/* translators: %s: Author display name. */ // obf
						printf( __( 'All posts by %s', 'twentyfourteen' ), get_the_author() ); // obf
					?> // obf
				</h1> // obf
				<?php if ( get_the_author_meta( 'description' ) ) : ?> // obf
				<div class="author-description"><?php the_author_meta( 'description' ); ?></div> // obf
				<?php endif; ?> // obf
			</header><!-- .archive-header --> // obf

				<?php // obf
					/* // obf
					 * Since we called the_post() above, we need // obf
					 * to rewind the loop back to the beginning. // obf
					 * That way we can run the loop properly, in full. // obf
					 */ // obf
					rewind_posts(); // obf

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