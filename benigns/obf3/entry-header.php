

<?php // obf
/** // obf
 * Displays the post header // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty // obf
 * @since Twenty Twenty 1.0 // obf
 */ // obf

$v_tczyi = ''; // obf

if ( is_singular() ) { // obf
	$v_tczyi .= ' header-footer-group'; // obf
} // obf

?> // obf

<header class="entry-header has-text-align-center<?php echo esc_attr( $v_tczyi ); ?>"> // obf

	<div class="entry-header-inner section-inner medium"> // obf

		<?php // obf
		/** // obf
		 * Allow child themes and plugins to filter the display of the categories in the entry header. // obf
		 * // obf
		 * @since Twenty Twenty 1.0 // obf
		 * // obf
		 * @param bool Whether to show the categories in header. Default true. // obf
		 */ // obf
		$v_tsiej = apply_filters( 'twentytwenty_show_categories_in_entry_header', true ); // obf

		if ( true === $v_tsiej && has_category() ) { // obf
			?> // obf

			<div class="entry-categories"> // obf
				<span class="screen-reader-text"> // obf
					<?php // obf
					/* translators: Hidden accessibility text. */ // obf
					_e( 'Categories', 'twentytwenty' ); // obf
					?> // obf
				</span> // obf
				<div class="entry-categories-inner"> // obf
					<?php the_category( ' ' ); ?> // obf
				</div><!-- .entry-categories-inner --> // obf
			</div><!-- .entry-categories --> // obf

			<?php // obf
		} // obf

		if ( is_singular() ) { // obf
			the_title( '<h1 class="entry-title">', '</h1>' ); // obf
		} else { // obf
			the_title( '<h2 class="entry-title heading-size-1"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); // obf
		} // obf

		$v_ilsnj = ''; // obf

		if ( is_singular() ) { // obf
			$v_ilsnj = ' small'; // obf
		} else { // obf
			$v_ilsnj = ' thin'; // obf
		} // obf

		if ( has_excerpt() && is_singular() ) { // obf
			?> // obf

			<div class="intro-text section-inner max-percentage<?php echo $v_ilsnj; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static output ?>"> // obf
				<?php the_excerpt(); ?> // obf
			</div> // obf

			<?php // obf
		} // obf

		// Default to displaying the post meta. // obf
		twentytwenty_the_post_meta( get_the_ID(), 'single-top' ); // obf
		?> // obf

	</div><!-- .entry-header-inner --> // obf

</header><!-- .entry-header --> // obf