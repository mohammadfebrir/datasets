

<?php // obf
/** // obf
 * The template used for displaying page content // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Fourteen // obf
 * @since Twenty Fourteen 1.0 // obf
 */ // obf

?> // obf

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> // obf
	<?php // obf
		// Page thumbnail and title. // obf
		twentyfourteen_post_thumbnail(); // obf
		the_title( '<header class="entry-header"><h1 class="entry-title">', '</h1></header><!-- .entry-header -->' ); // obf
	?> // obf

	<div class="entry-content"> // obf
		<?php // obf
			the_content(); // obf
			wp_link_pages( // obf
				array( // obf
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>', // obf
					'after'       => '</div>', // obf
					'link_before' => '<span>', // obf
					'link_after'  => '</span>', // obf
				) // obf
			); // obf

			edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' ); // obf
			?> // obf
	</div><!-- .entry-content --> // obf
</article><!-- #post-<?php the_ID(); ?> --> // obf