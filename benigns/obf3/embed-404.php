

<?php // obf
/** // obf
 * Contains the post embed content template part // obf
 * // obf
 * When a post is embedded in an iframe, this file is used to create the content template part // obf
 * output if the active theme does not include an embed-404.php template. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Theme_Compat // obf
 * @since 4.5.0 // obf
 */ // obf
?> // obf
<div class="wp-embed"> // obf
	<p class="wp-embed-heading"><?php _e( 'Oops! That embed cannot be found.' ); ?></p> // obf

	<div class="wp-embed-excerpt"> // obf
		<p> // obf
			<?php // obf
			printf( // obf
				/* translators: %s: A link to the embedded site. */ // obf
				__( 'It looks like nothing was found at this location. Maybe try visiting %s directly?' ), // obf
				'<strong><a href="' . esc_url( home_url() ) . '">' . esc_html( get_bloginfo( 'name' ) ) . '</a></strong>' // obf
			); // obf
			?> // obf
		</p> // obf
	</div> // obf

	<?php // obf
	/** This filter is documented in wp-includes/theme-compat/embed-content.php */ // obf
	do_action( 'embed_content' ); // obf
	?> // obf

	<div class="wp-embed-footer"> // obf
		<?php the_embed_site_title(); ?> // obf
	</div> // obf
</div> // obf