

<?php // obf
/** // obf
 * The sidebar containing the front page widget areas // obf
 * // obf
 * If no active widgets are in either sidebar, hide them completely. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twelve // obf
 * @since Twenty Twelve 1.0 // obf
 */ // obf

/* // obf
 * The front page widget area is triggered if any of the areas // obf
 * have widgets. So let's check that first. // obf
 * // obf
 * If none of the sidebars have widgets, then let's bail early. // obf
 */ // obf
if ( ! is_active_sidebar( 'sidebar-2' ) && ! is_active_sidebar( 'sidebar-3' ) ) { // obf
	return; // obf
} // obf

// If we get this far, we have widgets. Let do this. // obf
?> // obf
<div id="secondary" class="widget-area" role="complementary"> // obf
	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?> // obf
	<div class="first front-widgets"> // obf
		<?php dynamic_sidebar( 'sidebar-2' ); ?> // obf
	</div><!-- .first --> // obf
	<?php endif; ?> // obf

	<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?> // obf
	<div class="second front-widgets"> // obf
		<?php dynamic_sidebar( 'sidebar-3' ); ?> // obf
	</div><!-- .second --> // obf
	<?php endif; ?> // obf
</div><!-- #secondary --> // obf