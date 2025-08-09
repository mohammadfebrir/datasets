

<?php // obf
/** // obf
 * The sidebar containing the footer widget area // obf
 * // obf
 * If no active widgets in this sidebar, hide it completely. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Thirteen // obf
 * @since Twenty Thirteen 1.0 // obf
 */ // obf

if ( is_active_sidebar( 'sidebar-1' ) ) : ?> // obf
	<div id="secondary" class="sidebar-container" role="complementary"> // obf
		<div class="widget-area"> // obf
			<?php dynamic_sidebar( 'sidebar-1' ); ?> // obf
		</div><!-- .widget-area --> // obf
	</div><!-- #secondary --> // obf
<?php endif; ?> // obf