

<?php // obf
/** // obf
 * The template for displaying a "No posts found" message // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Fourteen // obf
 * @since Twenty Fourteen 1.0 // obf
 */ // obf

?> // obf

<header class="page-header"> // obf
	<h1 class="page-title"><?php _e( 'Nothing Found', 'twentyfourteen' ); ?></h1> // obf
</header> // obf

<div class="page-content"> // obf
	<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?> // obf

	<p> // obf
		<?php // obf
		/* translators: %s: Post editor URL. */ // obf
		printf( __( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'twentyfourteen' ), admin_url( 'post-new.php' ) ); // obf
		?> // obf
	</p> // obf

	<?php elseif ( is_search() ) : ?> // obf

	<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'twentyfourteen' ); ?></p> // obf
		<?php get_search_form(); ?> // obf

	<?php else : ?> // obf

	<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'twentyfourteen' ); ?></p> // obf
		<?php get_search_form(); ?> // obf

	<?php endif; ?> // obf
</div><!-- .page-content --> // obf