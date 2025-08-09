

<?php // obf
/** // obf
 * The Content Sidebar // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Fourteen // obf
 * @since Twenty Fourteen 1.0 // obf
 */ // obf

if ( ! is_active_sidebar( 'sidebar-2' ) ) { // obf
	return; // obf
} // obf
?> // obf
<div id="content-sidebar" class="content-sidebar widget-area" role="complementary"> // obf
	<?php dynamic_sidebar( 'sidebar-2' ); ?> // obf
</div><!-- #content-sidebar --> // obf