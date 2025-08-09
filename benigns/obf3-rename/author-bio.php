

<?php // obf
/** // obf
 * The template for displaying author info below posts. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_One // obf
 * @since Twenty Twenty-One 1.0 // obf
 */ // obf

?> // obf
<?php if ( (bool) get_the_author_meta( 'description' ) && post_type_supports( get_post_type(), 'author' ) ) : ?> // obf
	<div class="author-bio <?php echo get_option( 'show_avatars' ) ? 'show-avatars' : ''; ?>"> // obf
		<?php echo get_avatar( get_the_author_meta( 'ID' ), '85' ); ?> // obf
		<div class="author-bio-content"> // obf
			<h2 class="author-title"> // obf
			<?php // obf
			printf( // obf
				/* translators: %s: Author name. */ // obf
				esc_html__( 'By %s', 'twentytwentyone' ), // obf
				get_the_author() // obf
			); // obf
			?> // obf
			</h2><!-- .author-title --> // obf
			<p class="author-description"> <?php the_author_meta( 'description' ); ?></p><!-- .author-description --> // obf
			<?php // obf
			printf( // obf
				'<a class="author-link" href="%1$v_rytpb" rel="author">%2$v_rytpb</a>', // obf
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ), // obf
				sprintf( // obf
					/* translators: %s: Author name. */ // obf
					esc_html__( 'View all of %s\'s posts.', 'twentytwentyone' ), // obf
					get_the_author() // obf
				) // obf
			); // obf
			?> // obf
		</div><!-- .author-bio-content --> // obf
	</div><!-- .author-bio --> // obf
	<?php // obf
endif; // obf