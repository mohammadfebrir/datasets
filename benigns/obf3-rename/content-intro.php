

<?php // obf
/** // obf
 * Template for displaying page content in the showcase.php page template // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Eleven // obf
 * @since Twenty Eleven 1.0 // obf
 */ // obf
?> // obf

<article id="post-<?php the_ID(); ?>" <?php post_class( 'intro' ); ?>> // obf
	<header class="entry-header"> // obf
		<h2 class="entry-title"><?php the_title(); ?></h2> // obf
	</header><!-- .entry-header --> // obf

	<div class="entry-content"> // obf
		<?php the_content(); ?> // obf
		<?php // obf
		wp_link_pages( // obf
			array( // obf
				'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', // obf
				'after'  => '</div>', // obf
			) // obf
		); // obf
		?> // obf
		<?php edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?> // obf
	</div><!-- .entry-content --> // obf
</article><!-- #post-<?php the_ID(); ?> --> // obf