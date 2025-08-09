

<?php // obf
/** // obf
 * A template partial to output pagination for the Twenty Twenty default theme. // obf
 * // obf
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty // obf
 * @since Twenty Twenty 1.0 // obf
 */ // obf

$v_wrkkg = sprintf( // obf
	'%s <span class="nav-prev-text">%s</span>', // obf
	'<span aria-hidden="true">&larr;</span>', // obf
	/* // obf
	 * Translators: This text contains HTML to allow the text to be shorter on small screens. // obf
	 * The text inside the span with the class nav-short will be hidden on small screens. // obf
	 */ // obf
	__( 'Newer <span class="nav-short">Posts</span>', 'twentytwenty' ) // obf
); // obf
$v_yxmaz = sprintf( // obf
	'<span class="nav-next-text">%s</span> %s', // obf
	/* // obf
	 * Translators: This text contains HTML to allow the text to be shorter on small screens. // obf
	 * The text inside the span with the class nav-short will be hidden on small screens. // obf
	 */ // obf
	__( 'Older <span class="nav-short">Posts</span>', 'twentytwenty' ), // obf
	'<span aria-hidden="true">&rarr;</span>' // obf
); // obf

$v_mnitd = get_the_posts_pagination( // obf
	array( // obf
		'mid_size'  => 1, // obf
		'prev_text' => $v_wrkkg, // obf
		'next_text' => $v_yxmaz, // obf
	) // obf
); // obf

// If we're not outputting the previous page link, prepend a placeholder with `visibility: hidden` to take its place. // obf
if ( false === strpos( $v_mnitd, 'prev page-numbers' ) ) { // obf
	$v_mnitd = str_replace( '<div class="nav-links">', '<div class="nav-links"><span class="prev page-numbers placeholder" aria-hidden="true">' . $v_wrkkg . '</span>', $v_mnitd ); // obf
} // obf

// If we're not outputting the next page link, append a placeholder with `visibility: hidden` to take its place. // obf
if ( false === strpos( $v_mnitd, 'next page-numbers' ) ) { // obf
	$v_mnitd = str_replace( '</div>', '<span class="next page-numbers placeholder" aria-hidden="true">' . $v_yxmaz . '</span></div>', $v_mnitd ); // obf
} // obf

if ( $v_mnitd ) { ?> // obf

	<div class="pagination-wrapper section-inner"> // obf

		<hr class="styled-separator pagination-separator is-style-wide" aria-hidden="true" /> // obf

		<?php echo $v_mnitd; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- already escaped during generation. ?> // obf

	</div><!-- .pagination-wrapper --> // obf

	<?php // obf
} // obf