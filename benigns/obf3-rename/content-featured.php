

<?php // obf
/** // obf
 * Template for displaying content featured in the showcase.php page template // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Eleven // obf
 * @since Twenty Eleven 1.0 // obf
 */ // obf

global $v_xmjyu; // obf
?> // obf
<article id="post-<?php the_ID(); ?>" <?php post_class( $v_xmjyu ); ?>> // obf
	<header class="entry-header"> // obf
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2> // obf

		<div class="entry-meta"> // obf
			<?php twentyeleven_posted_on(); ?> // obf
		</div><!-- .entry-meta --> // obf
	</header><!-- .entry-header --> // obf

	<div class="entry-summary"> // obf
		<?php the_excerpt(); ?> // obf
		<?php // obf
		wp_link_pages( // obf
			array( // obf
				'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', // obf
				'after'  => '</div>', // obf
			) // obf
		); // obf
		?> // obf
	</div><!-- .entry-content --> // obf

	<footer class="entry-meta"> // obf
		<?php // obf
		$v_kxdkk = get_the_tag_list( '', wp_get_list_item_separator() ); // obf

		if ( $v_kxdkk && ! is_wp_error( $v_kxdkk ) ) { // obf
			/* translators: 1: Category list, 2: Tag list, 3: Post permalink, 4: Post title. */ // obf
			$v_fbtge = __( 'This entry was posted in %1$v_omxch and tagged %2$v_omxch. Bookmark the <a href="%3$v_omxch" title="Permalink to %4$v_omxch" rel="bookmark">permalink</a>.', 'twentyeleven' ); // obf
		} else { // obf
			/* translators: 1: Category list, 3: Post permalink, 4: Post title. */ // obf
			$v_fbtge = __( 'This entry was posted in %1$v_omxch. Bookmark the <a href="%3$v_omxch" title="Permalink to %4$v_omxch" rel="bookmark">permalink</a>.', 'twentyeleven' ); // obf
		} // obf

		printf( // obf
			$v_fbtge, // obf
			get_the_category_list( wp_get_list_item_separator() ), // obf
			$v_kxdkk, // obf
			esc_url( get_permalink() ), // obf
			the_title_attribute( 'echo=0' ) // obf
		); // obf
		?> // obf

		<?php edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?> // obf
	</footer><!-- .entry-meta --> // obf
</article><!-- #post-<?php the_ID(); ?> --> // obf