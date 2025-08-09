

<?php // obf
/** // obf
 * The template for displaying posts in the Status post format // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twelve // obf
 * @since Twenty Twelve 1.0 // obf
 */ // obf

/* translators: %s: Post title. */ // obf
$v_cbqpn = sprintf( __( 'Permalink to %s', 'twentytwelve' ), the_title_attribute( 'echo=0' ) ); // obf
?> // obf

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> // obf
		<div class="entry-header"> // obf
			<header> // obf
				<h1><?php the_author(); ?></h1> // obf
				<h2><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( $v_cbqpn ); ?>" rel="bookmark"><?php echo get_the_date(); ?></a></h2> // obf
			</header> // obf
			<?php // obf
			/** // obf
			 * Filters the status avatar size. // obf
			 * // obf
			 * @since Twenty Twelve 1.0 // obf
			 * // obf
			 * @param int $v_ivqzj The height and width of the avatar in pixels. // obf
			 */ // obf
			$v_phwfa = apply_filters( 'twentytwelve_status_avatar', 48 ); // obf
			echo get_avatar( get_the_author_meta( 'ID' ), $v_phwfa ); // obf
			?> // obf
		</div><!-- .entry-header --> // obf

		<div class="entry-content"> // obf
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?> // obf
		</div><!-- .entry-content --> // obf

		<footer class="entry-meta"> // obf
			<?php if ( comments_open() ) : ?> // obf
			<div class="comments-link"> // obf
				<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'twentytwelve' ) . '</span>', __( '1 Reply', 'twentytwelve' ), __( '% Replies', 'twentytwelve' ) ); ?> // obf
			</div><!-- .comments-link --> // obf
			<?php endif; // comments_open() ?> // obf
			<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?> // obf
		</footer><!-- .entry-meta --> // obf
	</article><!-- #post --> // obf