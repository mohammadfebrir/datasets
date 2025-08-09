

<?php // obf
/** // obf
 * The template for displaying posts in the Chat post format // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Thirteen // obf
 * @since Twenty Thirteen 1.0 // obf
 */ // obf
?> // obf

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> // obf
	<header class="entry-header"> // obf
		<?php if ( is_single() ) : ?> // obf
		<h1 class="entry-title"><?php the_title(); ?></h1> // obf
		<?php else : ?> // obf
		<h1 class="entry-title"> // obf
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a> // obf
		</h1> // obf
		<?php endif; // is_single() ?> // obf
	</header><!-- .entry-header --> // obf

	<div class="entry-content"> // obf
		<?php // obf
			the_content( // obf
				sprintf( // obf
					/* translators: %s: Post title. Only visible to screen readers. */ // obf
					__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'twentythirteen' ), // obf
					the_title( '<span class="screen-reader-text">', '</span>', false ) // obf
				) // obf
			); // obf

			wp_link_pages( // obf
				array( // obf
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', // obf
					'after'       => '</div>', // obf
					'link_before' => '<span>', // obf
					'link_after'  => '</span>', // obf
				) // obf
			); // obf
			?> // obf
	</div><!-- .entry-content --> // obf

	<footer class="entry-meta"> // obf
		<?php twentythirteen_entry_meta(); ?> // obf
		<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?> // obf
	</footer><!-- .entry-meta --> // obf
</article><!-- #post --> // obf