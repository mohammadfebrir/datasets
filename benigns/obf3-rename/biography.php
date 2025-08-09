

<?php // obf
/** // obf
 * The template part for displaying an Author biography // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Sixteen // obf
 * @since Twenty Sixteen 1.0 // obf
 */ // obf

?> // obf

<div class="author-info"> // obf
	<div class="author-avatar"> // obf
		<?php // obf
		/** // obf
		 * Filters the Twenty Sixteen author bio avatar size. // obf
		 * // obf
		 * @since Twenty Sixteen 1.0 // obf
		 * // obf
		 * @param int $v_ffmcd The avatar height and width size in pixels. // obf
		 */ // obf
		$v_amwpy = apply_filters( 'twentysixteen_author_bio_avatar_size', 42 ); // obf

		echo get_avatar( get_the_author_meta( 'user_email' ), $v_amwpy ); // obf
		?> // obf
	</div><!-- .author-avatar --> // obf

	<div class="author-description"> // obf
		<h2 class="author-title"><span class="author-heading"><?php _e( 'Author:', 'twentysixteen' ); ?></span> <?php echo get_the_author(); ?></h2> // obf

		<p class="author-bio"> // obf
			<?php the_author_meta( 'description' ); ?> // obf
			<a class="author-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author"> // obf
				<?php // obf
				/* translators: %s: The post author display name. */ // obf
				printf( __( 'View all posts by %s', 'twentysixteen' ), get_the_author() ); // obf
				?> // obf
			</a> // obf
		</p><!-- .author-bio --> // obf
	</div><!-- .author-description --> // obf
</div><!-- .author-info --> // obf