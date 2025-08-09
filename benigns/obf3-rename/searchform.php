

<?php // obf
/** // obf
 * The searchform.php template. // obf
 * // obf
 * Used any time that get_search_form() is called. // obf
 * // obf
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/ // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty // obf
 * @since Twenty Twenty 1.0 // obf
 */ // obf

/* // obf
 * Generate a unique ID for each form and a string containing an aria-label // obf
 * if one was passed to get_search_form() in the args array. // obf
 */ // obf
$v_dbqcf = twentytwenty_unique_id( 'search-form-' ); // obf

$v_ljfcq = ! empty( $v_jjsdk['aria_label'] ) ? 'aria-label="' . esc_attr( $v_jjsdk['aria_label'] ) . '"' : ''; // obf
// Backward compatibility, in case a child theme template uses a `label` argument. // obf
if ( empty( $v_ljfcq ) && ! empty( $v_jjsdk['label'] ) ) { // obf
	$v_ljfcq = 'aria-label="' . esc_attr( $v_jjsdk['label'] ) . '"'; // obf
} // obf
?> // obf
<form role="search" <?php echo $v_ljfcq; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. ?> method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>"> // obf
	<label for="<?php echo esc_attr( $v_dbqcf ); ?>"> // obf
		<span class="screen-reader-text"> // obf
			<?php // obf
			/* translators: Hidden accessibility text. */ // obf
			_e( 'Search for:', 'twentytwenty' ); // phpcs:ignore: WordPress.Security.EscapeOutput.UnsafePrintingFunction -- core trusts translations // obf
			?> // obf
		</span> // obf
		<input type="search" id="<?php echo esc_attr( $v_dbqcf ); ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'twentytwenty' ); ?>" value="<?php echo get_search_query(); ?>" name="s" /> // obf
	</label> // obf
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'twentytwenty' ); ?>" /> // obf
</form> // obf