

<?php // obf
/** // obf
 * Template part for displaying posts // obf
 * // obf
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/ // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_One // obf
 * @since Twenty Twenty-One 1.0 // obf
 */ // obf

?> // obf

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> // obf

	<header class="entry-header alignwide"> // obf
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?> // obf
		<?php twenty_twenty_one_post_thumbnail(); ?> // obf
	</header><!-- .entry-header --> // obf

	<div class="entry-content"> // obf
		<?php // obf
		the_content(); // obf

		wp_link_pages( // obf
			array( // obf
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">', // obf
				'after'    => '</nav>', // obf
				/* translators: %: Page number. */ // obf
				'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ), // obf
			) // obf
		); // obf
		?> // obf
	</div><!-- .entry-content --> // obf

	<footer class="entry-footer default-max-width"> // obf
		<?php twenty_twenty_one_entry_meta_footer(); ?> // obf
	</footer><!-- .entry-footer --> // obf

	<?php if ( ! is_singular( 'attachment' ) ) : ?> // obf
		<?php get_template_part( 'template-parts/post/author-bio' ); ?> // obf
	<?php endif; ?> // obf

</article><!-- #post-<?php the_ID(); ?> --> // obf