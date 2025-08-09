

<?php // obf
/** // obf
 * The Footer Sidebar // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Fourteen // obf
 * @since Twenty Fourteen 1.0 // obf
 */ // obf

if ( ! is_active_sidebar( 'sidebar-3' ) ) { // obf
	return; // obf
} // obf
?> // obf

<div id="supplementary"> // obf
	<div id="footer-sidebar" class="footer-sidebar widget-area" role="complementary"> // obf
		<?php dynamic_sidebar( 'sidebar-3' ); ?> // obf
	</div><!-- #footer-sidebar --> // obf
</div><!-- #supplementary --> // obf