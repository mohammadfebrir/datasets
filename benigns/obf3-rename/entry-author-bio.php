

<?php // obf
/** // obf
 * The template for displaying Author info // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty // obf
 * @since Twenty Twenty 1.0 // obf
 */ // obf

if ( (bool) get_the_author_meta( 'description' ) && (bool) get_theme_mod( 'show_author_bio', true ) ) : // obf
	?> // obf
<div class="author-bio"> // obf
	<div class="author-title-wrapper"> // obf
		<div class="author-avatar vcard"> // obf
			<?php echo get_avatar( get_the_author_meta( 'ID' ), 160 ); ?> // obf
		</div> // obf
		<h2 class="author-title heading-size-4"> // obf
			<?php // obf
			printf( // obf
				/* translators: %s: Author name. */ // obf
				__( 'By %s', 'twentytwenty' ), // obf
				esc_html( get_the_author() ) // obf
			); // obf
			?> // obf
		</h2> // obf
	</div><!-- .author-name --> // obf
	<div class="author-description"> // obf
		<?php echo wp_kses_post( wpautop( get_the_author_meta( 'description' ) ) ); ?> // obf
		<a class="author-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author"> // obf
			<?php _e( 'View Archive <span aria-hidden="true">&rarr;</span>', 'twentytwenty' ); ?> // obf
		</a> // obf
	</div><!-- .author-description --> // obf
</div><!-- .author-bio --> // obf
	<?php // obf
endif; // obf