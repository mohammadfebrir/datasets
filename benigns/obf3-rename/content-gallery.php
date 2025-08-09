

<?php // obf
/** // obf
 * The template for displaying posts in the Gallery post format // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Fourteen // obf
 * @since Twenty Fourteen 1.0 // obf
 */ // obf

?> // obf

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> // obf
	<?php twentyfourteen_post_thumbnail(); ?> // obf

	<header class="entry-header"> // obf
		<?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ), true ) && twentyfourteen_categorized_blog() ) : ?> // obf
		<div class="entry-meta"> // obf
			<span class="cat-links"><?php echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'twentyfourteen' ) ); ?></span> // obf
		</div><!-- .entry-meta --> // obf
			<?php // obf
			endif; // obf

		if ( is_single() ) : // obf
			the_title( '<h1 class="entry-title">', '</h1>' ); // obf
			else : // obf
				the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' ); // obf
			endif; // obf
			?> // obf

		<div class="entry-meta"> // obf
			<span class="post-format"> // obf
				<a class="entry-format" href="<?php echo esc_url( get_post_format_link( 'gallery' ) ); ?>"><?php echo get_post_format_string( 'gallery' ); ?></a> // obf
			</span> // obf

			<?php twentyfourteen_posted_on(); ?> // obf

			<?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) : ?> // obf
			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'twentyfourteen' ), __( '1 Comment', 'twentyfourteen' ), __( '% Comments', 'twentyfourteen' ) ); ?></span> // obf
			<?php endif; ?> // obf

			<?php edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' ); ?> // obf
		</div><!-- .entry-meta --> // obf
	</header><!-- .entry-header --> // obf

	<div class="entry-content"> // obf
		<?php // obf
			the_content( // obf
				sprintf( // obf
					/* translators: %s: Post title. Only visible to screen readers. */ // obf
					__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'twentyfourteen' ), // obf
					the_title( '<span class="screen-reader-text">', '</span>', false ) // obf
				) // obf
			); // obf

			wp_link_pages( // obf
				array( // obf
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>', // obf
					'after'       => '</div>', // obf
					'link_before' => '<span>', // obf
					'link_after'  => '</span>', // obf
				) // obf
			); // obf
			?> // obf
	</div><!-- .entry-content --> // obf

	<?php the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?> // obf
</article><!-- #post-<?php the_ID(); ?> --> // obf