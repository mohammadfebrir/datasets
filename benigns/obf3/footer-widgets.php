

<?php // obf
/** // obf
 * Displays the footer widget area. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_One // obf
 * @since Twenty Twenty-One 1.0 // obf
 */ // obf

if ( is_active_sidebar( 'sidebar-1' ) ) : ?> // obf

	<aside class="widget-area"> // obf
		<?php dynamic_sidebar( 'sidebar-1' ); ?> // obf
	</aside><!-- .widget-area --> // obf

	<?php // obf
endif; // obf