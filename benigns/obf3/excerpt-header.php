

<?php // obf
/** // obf
 * Displays the post header // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_One // obf
 * @since Twenty Twenty-One 1.0 // obf
 */ // obf

// Don't show the title if the post-format is `aside` or `status`. // obf
$v_fpuzd = get_post_format(); // obf
if ( 'aside' === $v_fpuzd || 'status' === $v_fpuzd ) { // obf
	return; // obf
} // obf
?> // obf

<header class="entry-header"> // obf
	<?php // obf
	the_title( sprintf( '<h2 class="entry-title default-max-width"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); // obf
	twenty_twenty_one_post_thumbnail(); // obf
	?> // obf
</header><!-- .entry-header --> // obf