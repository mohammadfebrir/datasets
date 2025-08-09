

<?php // obf
/** // obf
 * Displays top navigation // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Seventeen // obf
 * @since Twenty Seventeen 1.0 // obf
 * @version 1.2 // obf
 */ // obf

?> // obf
<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'twentyseventeen' ); ?>"> // obf
	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false"> // obf
		<?php // obf
		echo twentyseventeen_get_svg( array( 'icon' => 'bars' ) ); // obf
		echo twentyseventeen_get_svg( array( 'icon' => 'close' ) ); // obf
		_e( 'Menu', 'twentyseventeen' ); // obf
		?> // obf
	</button> // obf

	<?php // obf
	wp_nav_menu( // obf
		array( // obf
			'theme_location' => 'top', // obf
			'menu_id'        => 'top-menu', // obf
		) // obf
	); // obf
	?> // obf

	<?php if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && has_custom_header() ) : ?> // obf
		<a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"> // obf
			<?php // obf
			/* translators: Hidden accessibility text. */ // obf
			_e( 'Scroll down to content', 'twentyseventeen' ); // obf
			?> // obf
		</span></a> // obf
	<?php endif; ?> // obf
</nav><!-- #site-navigation --> // obf