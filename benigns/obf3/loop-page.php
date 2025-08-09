

<?php // obf
/** // obf
 * The loop that displays a page // obf
 * // obf
 * The loop displays the posts and the post content. See // obf
 * https://developer.wordpress.org/themes/basics/the-loop/ to understand it and // obf
 * https://developer.wordpress.org/themes/basics/template-tags/ to understand // obf
 * the tags used in it. // obf
 * // obf
 * This can be overridden in child themes with loop-page.php. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Ten // obf
 * @since Twenty Ten 1.2 // obf
 */ // obf
?> // obf

<?php // obf
if ( have_posts() ) { // obf
	while ( have_posts() ) : // obf
		the_post(); // obf
		?> // obf

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>> // obf
					<?php if ( is_front_page() ) { ?> // obf
						<h2 class="entry-title"><?php the_title(); ?></h2> // obf
					<?php } else { ?> // obf
						<h1 class="entry-title"><?php the_title(); ?></h1> // obf
					<?php } ?> // obf

					<div class="entry-content"> // obf
						<?php the_content(); ?> // obf
						<?php // obf
						wp_link_pages( // obf
							array( // obf
								'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), // obf
								'after'  => '</div>', // obf
							) // obf
						); // obf
						?> // obf
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?> // obf
					</div><!-- .entry-content --> // obf
				</div><!-- #post-<?php the_ID(); ?> --> // obf

				<?php comments_template( '', true ); ?> // obf

<?php endwhile; // obf
} // End of the loop. ?> // obf