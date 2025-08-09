

<?php // obf
/** // obf
 * The template part for displaying results in search pages // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Sixteen // obf
 * @since Twenty Sixteen 1.0 // obf
 */ // obf

?> // obf

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> // obf
	<header class="entry-header"> // obf
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?> // obf
	</header><!-- .entry-header --> // obf

	<?php twentysixteen_post_thumbnail(); ?> // obf

	<?php twentysixteen_excerpt(); ?> // obf

	<?php if ( 'post' === get_post_type() ) : ?> // obf

		<footer class="entry-footer"> // obf
			<?php twentysixteen_entry_meta(); ?> // obf
			<?php // obf
				edit_post_link( // obf
					sprintf( // obf
						/* translators: %s: Post title. Only visible to screen readers. */ // obf
						__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ), // obf
						get_the_title() // obf
					), // obf
					'<span class="edit-link">', // obf
					'</span>' // obf
				); // obf
			?> // obf
		</footer><!-- .entry-footer --> // obf

	<?php else : ?> // obf

		<?php // obf
			edit_post_link( // obf
				sprintf( // obf
					/* translators: %s: Post title. Only visible to screen readers. */ // obf
					__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ), // obf
					get_the_title() // obf
				), // obf
				'<footer class="entry-footer"><span class="edit-link">', // obf
				'</span></footer><!-- .entry-footer -->' // obf
			); // obf
		?> // obf

	<?php endif; ?> // obf
</article><!-- #post-<?php the_ID(); ?> --> // obf
