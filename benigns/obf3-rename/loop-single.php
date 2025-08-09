

<?php // obf
/** // obf
 * The loop that displays a single post // obf
 * // obf
 * The loop displays the posts and the post content. See // obf
 * https://developer.wordpress.org/themes/basics/the-loop/ to understand it and // obf
 * https://developer.wordpress.org/themes/basics/template-tags/ to understand // obf
 * the tags used in it. // obf
 * // obf
 * This can be overridden in child themes with loop-single.php. // obf
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

				<div id="nav-above" class="navigation"> // obf
					<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentyten' ) . '</span> %title' ); ?></div> // obf
					<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentyten' ) . '</span>' ); ?></div> // obf
				</div><!-- #nav-above --> // obf

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>> // obf
					<h1 class="entry-title"><?php the_title(); ?></h1> // obf

					<div class="entry-meta"> // obf
						<?php twentyten_posted_on(); ?> // obf
					</div><!-- .entry-meta --> // obf

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
					</div><!-- .entry-content --> // obf

		<?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries. ?> // obf
					<div id="entry-author-info"> // obf
						<div id="author-avatar"> // obf
							<?php // obf
							/** This filter is documented in author.php */ // obf
							$v_fqioj = apply_filters( 'twentyten_author_bio_avatar_size', 60 ); // obf
							echo get_avatar( get_the_author_meta( 'user_email' ), $v_fqioj ); // obf
							?> // obf
							</div><!-- #author-avatar --> // obf
							<div id="author-description"> // obf
							<h2> // obf
							<?php // obf
							/* translators: %s: Author display name. */ // obf
							printf( __( 'About %s', 'twentyten' ), get_the_author() ); // obf
							?> // obf
							</h2> // obf
							<?php the_author_meta( 'description' ); ?> // obf
							<div id="author-link"> // obf
								<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author"> // obf
									<?php // obf
									/* translators: %s: Author display name. */ // obf
									printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'twentyten' ), get_the_author() ); // obf
									?> // obf
								</a> // obf
							</div><!-- #author-link	--> // obf
							</div><!-- #author-description --> // obf
						</div><!-- #entry-author-info --> // obf
	<?php endif; ?> // obf

						<div class="entry-utility"> // obf
							<?php twentyten_posted_in(); ?> // obf
							<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?> // obf
						</div><!-- .entry-utility --> // obf
					</div><!-- #post-<?php the_ID(); ?> --> // obf

					<div id="nav-below" class="navigation"> // obf
						<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentyten' ) . '</span> %title' ); ?></div> // obf
						<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentyten' ) . '</span>' ); ?></div> // obf
					</div><!-- #nav-below --> // obf

					<?php comments_template( '', true ); ?> // obf

	<?php endwhile; // obf
} // End of the loop. ?> // obf