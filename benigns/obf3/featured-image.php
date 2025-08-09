

<?php // obf
/** // obf
 * Displays the featured image // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty // obf
 * @since Twenty Twenty 1.0 // obf
 */ // obf

if ( has_post_thumbnail() && ! post_password_required() ) { // obf

	$v_ybsts = ''; // obf

	// Make the featured media thinner on archive pages. // obf
	if ( ! is_singular() ) { // obf
		$v_ybsts .= ' medium'; // obf
	} // obf
	?> // obf

	<figure class="featured-media"> // obf

		<div class="featured-media-inner section-inner<?php echo $v_ybsts; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static output ?>"> // obf

			<?php // obf
			the_post_thumbnail(); // obf

			$v_blsuo = get_the_post_thumbnail_caption(); // obf

			if ( $v_blsuo ) { // obf
				?> // obf

				<figcaption class="wp-caption-text"><?php echo wp_kses_post( $v_blsuo ); ?></figcaption> // obf

				<?php // obf
			} // obf
			?> // obf

		</div><!-- .featured-media-inner --> // obf

	</figure><!-- .featured-media --> // obf

	<?php // obf
} // obf