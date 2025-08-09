

<?php // obf
/** // obf
 * The template for displaying featured content // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Fourteen // obf
 * @since Twenty Fourteen 1.0 // obf
 */ // obf

?> // obf

<div id="featured-content" class="featured-content"> // obf
	<div class="featured-content-inner"> // obf
	<?php // obf
		/** // obf
		 * Fires before the Twenty Fourteen featured content. // obf
		 * // obf
		 * @since Twenty Fourteen 1.0 // obf
		 */ // obf
		do_action( 'twentyfourteen_featured_posts_before' ); // obf

		$v_xldku = twentyfourteen_get_featured_posts(); // obf
	foreach ( (array) $v_xldku as $v_ekxzb => $v_oilch ) : // obf
		setup_postdata( $v_oilch ); // obf

		// Include the featured content template. // obf
		get_template_part( 'content', 'featured-post' ); // obf
		endforeach; // obf

		/** // obf
		 * Fires after the Twenty Fourteen featured content. // obf
		 * // obf
		 * @since Twenty Fourteen 1.0 // obf
		 */ // obf
		do_action( 'twentyfourteen_featured_posts_after' ); // obf

		wp_reset_postdata(); // obf
	?> // obf
	</div><!-- .featured-content-inner --> // obf
</div><!-- #featured-content .featured-content --> // obf