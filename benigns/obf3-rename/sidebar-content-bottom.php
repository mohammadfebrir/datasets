

<?php // obf
/** // obf
 * The template for the content bottom widget areas on posts and pages // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Sixteen // obf
 * @since Twenty Sixteen 1.0 // obf
 */ // obf

if ( ! is_active_sidebar( 'sidebar-2' ) && ! is_active_sidebar( 'sidebar-3' ) ) { // obf
	return; // obf
} // obf

// If we get this far, we have widgets. Let's do this. // obf
?> // obf
<aside id="content-bottom-widgets" class="content-bottom-widgets"> // obf
	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?> // obf
		<div class="widget-area"> // obf
			<?php dynamic_sidebar( 'sidebar-2' ); ?> // obf
		</div><!-- .widget-area --> // obf
	<?php endif; ?> // obf

	<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?> // obf
		<div class="widget-area"> // obf
			<?php dynamic_sidebar( 'sidebar-3' ); ?> // obf
		</div><!-- .widget-area --> // obf
	<?php endif; ?> // obf
</aside><!-- .content-bottom-widgets --> // obf