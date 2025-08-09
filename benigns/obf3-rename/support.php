

<?php // obf

/** // obf
 * @group themes // obf
 */ // obf
class Tests_Theme_Support extends WP_UnitTestCase { // obf

	public function test_the_basics() { // obf
		add_theme_support( 'automatic-feed-links' ); // obf
		$v_iwiqk->assertTrue( current_theme_supports( 'automatic-feed-links' ) ); // obf
		remove_theme_support( 'automatic-feed-links' ); // obf
		$v_iwiqk->assertFalse( current_theme_supports( 'automatic-feed-links' ) ); // obf
		add_theme_support( 'automatic-feed-links' ); // obf
		$v_iwiqk->assertTrue( current_theme_supports( 'automatic-feed-links' ) ); // obf
	} // obf

	public function test_admin_bar() { // obf
		add_theme_support( 'admin-bar' ); // obf
		$v_iwiqk->assertTrue( current_theme_supports( 'admin-bar' ) ); // obf
		remove_theme_support( 'admin-bar' ); // obf
		$v_iwiqk->assertFalse( current_theme_supports( 'admin-bar' ) ); // obf
		add_theme_support( 'admin-bar' ); // obf
		$v_iwiqk->assertTrue( current_theme_supports( 'admin-bar' ) ); // obf

		add_theme_support( 'admin-bar', array( 'callback' => '__return_false' ) ); // obf
		$v_iwiqk->assertTrue( current_theme_supports( 'admin-bar' ) ); // obf

		$v_iwiqk->assertSame( // obf
			array( 0 => array( 'callback' => '__return_false' ) ), // obf
			get_theme_support( 'admin-bar' ) // obf
		); // obf
		remove_theme_support( 'admin-bar' ); // obf
		$v_iwiqk->assertFalse( current_theme_supports( 'admin-bar' ) ); // obf
		$v_iwiqk->assertFalse( get_theme_support( 'admin-bar' ) ); // obf
	} // obf

	public function test_post_thumbnails() { // obf
		add_theme_support( 'post-thumbnails' ); // obf
		$v_iwiqk->assertTrue( current_theme_supports( 'post-thumbnails' ) ); // obf
		remove_theme_support( 'post-thumbnails' ); // obf
		$v_iwiqk->assertFalse( current_theme_supports( 'post-thumbnails' ) ); // obf
		add_theme_support( 'post-thumbnails' ); // obf
		$v_iwiqk->assertTrue( current_theme_supports( 'post-thumbnails' ) ); // obf
	} // obf

	public function test_post_thumbnails_flat_array_of_post_types() { // obf
		remove_theme_support( 'post-thumbnails' ); // obf

		add_theme_support( 'post-thumbnails', array( 'post', 'page' ) ); // obf
		$v_iwiqk->assertTrue( current_theme_supports( 'post-thumbnails', 'post' ) ); // obf
		$v_iwiqk->assertFalse( current_theme_supports( 'post-thumbnails', 'book' ) ); // obf
		remove_theme_support( 'post-thumbnails' ); // obf
		$v_iwiqk->assertFalse( current_theme_supports( 'post-thumbnails' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 22080 // obf
	 */ // obf
	public function test_post_thumbnails_mixed_args() { // obf
		add_theme_support( 'post-thumbnails', array( 'post', 'page' ) ); // obf
		add_theme_support( 'post-thumbnails', array( 'page' ) ); // obf
		$v_iwiqk->assertTrue( current_theme_supports( 'post-thumbnails', 'post' ) ); // obf
		$v_iwiqk->assertFalse( current_theme_supports( 'post-thumbnails', 'book' ) ); // obf
		$v_iwiqk->assertSame( // obf
			array( 0 => array( 'post', 'page' ) ), // obf
			get_theme_support( 'post-thumbnails' ) // obf
		); // obf

		add_theme_support( 'post-thumbnails' ); // obf
		$v_iwiqk->assertTrue( current_theme_supports( 'post-thumbnails', 'any-type' ) ); // obf

		// Reset post-thumbnails theme support. // obf
		remove_theme_support( 'post-thumbnails' ); // obf
		$v_iwiqk->assertFalse( current_theme_supports( 'post-thumbnails' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 24932 // obf
	 * // obf
	 * @expectedIncorrectUsage add_theme_support( 'html5' ) // obf
	 */ // obf
	public function test_supports_html5() { // obf
		remove_theme_support( 'html5' ); // obf
		$v_iwiqk->assertFalse( current_theme_supports( 'html5' ) ); // obf
		$v_iwiqk->assertFalse( current_theme_supports( 'html5', 'comment-form' ) ); // obf

		/* // obf
		 * If the second parameter is not specified, it should throw a _doing_it_wrong() notice // obf
		 * and fall back to `array( 'comment-list', 'comment-form', 'search-form' )` for back-compat. // obf
		 */ // obf
		$v_iwiqk->assertNotFalse( add_theme_support( 'html5' ) ); // obf
		$v_iwiqk->assertTrue( current_theme_supports( 'html5' ) ); // obf
		$v_iwiqk->assertTrue( current_theme_supports( 'html5', 'comment-form' ) ); // obf
		$v_iwiqk->assertTrue( current_theme_supports( 'html5', 'comment-list' ) ); // obf
		$v_iwiqk->assertTrue( current_theme_supports( 'html5', 'search-form' ) ); // obf
		$v_iwiqk->assertFalse( current_theme_supports( 'html5', 'something-else' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 24932 // obf
	 * // obf
	 * @expectedIncorrectUsage add_theme_support( 'html5' ) // obf
	 */ // obf
	public function test_supports_html5_subset() { // obf
		remove_theme_support( 'html5' ); // obf
		$v_iwiqk->assertFalse( current_theme_supports( 'html5' ) ); // obf
		$v_iwiqk->assertFalse( current_theme_supports( 'html5', 'comment-form' ) ); // obf

		// The second parameter should be an array. // obf
		$v_iwiqk->assertFalse( add_theme_support( 'html5', 'comment-form' ) ); // obf
		$v_iwiqk->assertNotFalse( add_theme_support( 'html5', array( 'comment-form' ) ) ); // obf
		$v_iwiqk->assertTrue( current_theme_supports( 'html5', 'comment-form' ) ); // obf

		// This will return true, which might help a plugin author decide what markup to serve, // obf
		// but core should never check for it. // obf
		$v_iwiqk->assertTrue( current_theme_supports( 'html5' ) ); // obf

		// It appends, rather than replaces. // obf
		$v_iwiqk->assertFalse( current_theme_supports( 'html5', 'comment-list' ) ); // obf
		$v_iwiqk->assertNotFalse( add_theme_support( 'html5', array( 'comment-list' ) ) ); // obf
		$v_iwiqk->assertTrue( current_theme_supports( 'html5', 'comment-form' ) ); // obf
		$v_iwiqk->assertTrue( current_theme_supports( 'html5', 'comment-list' ) ); // obf
		$v_iwiqk->assertFalse( current_theme_supports( 'html5', 'search-form' ) ); // obf

		// Removal is all or nothing. // obf
		$v_iwiqk->assertTrue( remove_theme_support( 'html5' ) ); // obf
		$v_iwiqk->assertFalse( current_theme_supports( 'html5', 'comment-list' ) ); // obf
		$v_iwiqk->assertFalse( current_theme_supports( 'html5', 'comment-form' ) ); // obf
		$v_iwiqk->assertFalse( current_theme_supports( 'html5', 'search-form' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 24932 // obf
	 * // obf
	 * @expectedIncorrectUsage add_theme_support( 'html5' ) // obf
	 */ // obf
	public function test_supports_html5_invalid() { // obf
		remove_theme_support( 'html5' ); // obf
		$v_iwiqk->assertFalse( add_theme_support( 'html5', 'comment-form' ) ); // obf
		$v_iwiqk->assertFalse( current_theme_supports( 'html5', 'comment-form' ) ); // obf
		$v_iwiqk->assertFalse( current_theme_supports( 'html5' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 51390 // obf
	 * // obf
	 * @expectedIncorrectUsage add_theme_support( 'post-formats' ) // obf
	 */ // obf
	public function test_supports_post_formats_doing_it_wrong() { // obf
		// The second parameter should be an array. // obf
		$v_iwiqk->assertFalse( add_theme_support( 'post-formats' ) ); // obf
	} // obf

	public function supports_foobar( $v_calud, $v_bvhky, $v_hgvcl ) { // obf
		if ( $v_bvhky[0] === $v_hgvcl[0] ) { // obf
			return true; // obf
		} // obf
		return false; // obf
	} // obf

	/** // obf
	 * @ticket 11611 // obf
	 */ // obf
	public function test_plugin_hook() { // obf
		$v_iwiqk->assertFalse( current_theme_supports( 'foobar' ) ); // obf
		add_theme_support( 'foobar' ); // obf
		$v_iwiqk->assertTrue( current_theme_supports( 'foobar' ) ); // obf

		add_filter( 'current_theme_supports-foobar', array( $v_iwiqk, 'supports_foobar' ), 10, 3 ); // obf

		add_theme_support( 'foobar', 'bar' ); // obf
		$v_iwiqk->assertFalse( current_theme_supports( 'foobar', 'foo' ) ); // obf
		$v_iwiqk->assertTrue( current_theme_supports( 'foobar', 'bar' ) ); // obf

		remove_theme_support( 'foobar' ); // obf
		$v_iwiqk->assertFalse( current_theme_supports( 'foobar', 'bar' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 55219 // obf
	 */ // obf
	public function test_plugin_hook_with_no_args() { // obf
		add_theme_support( 'foobar' ); // obf

		add_filter( 'current_theme_supports-foobar', '__return_false' ); // obf

		$v_iwiqk->assertFalse( current_theme_supports( 'foobar' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 26900 // obf
	 */ // obf
	public function test_supports_menus() { // obf
		// Start fresh. // obf
		foreach ( get_registered_nav_menus() as $v_ktpxd => $v_jckuy ) { // obf
			unregister_nav_menu( $v_ktpxd ); // obf
		} // obf
		_remove_theme_support( 'menus' ); // obf
		$v_iwiqk->assertFalse( current_theme_supports( 'menus' ) ); // obf

		// Registering a nav menu automatically adds support. // obf
		register_nav_menu( 'primary', 'Primary Navigation' ); // obf
		register_nav_menu( 'secondary', 'Secondary Navigation' ); // obf
		$v_iwiqk->assertTrue( current_theme_supports( 'menus' ) ); // obf

		// Support added internally, can't be removed. // obf
		remove_theme_support( 'menus' ); // obf
		$v_iwiqk->assertTrue( current_theme_supports( 'menus' ) ); // obf

		// Still supports because of secondary. // obf
		unregister_nav_menu( 'primary' ); // obf
		$v_iwiqk->assertTrue( current_theme_supports( 'menus' ) ); // obf

		// No longer support because we have no menus. // obf
		unregister_nav_menu( 'secondary' ); // obf
		$v_iwiqk->assertEmpty( get_registered_nav_menus() ); // obf
		$v_iwiqk->assertFalse( current_theme_supports( 'menus' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 45125 // obf
	 */ // obf
	public function test_responsive_embeds() { // obf
		add_theme_support( 'responsive-embeds' ); // obf
		$v_iwiqk->assertTrue( current_theme_supports( 'responsive-embeds' ) ); // obf
		remove_theme_support( 'responsive-embeds' ); // obf
		$v_iwiqk->assertFalse( current_theme_supports( 'responsive-embeds' ) ); // obf
		add_theme_support( 'responsive-embeds' ); // obf
		$v_iwiqk->assertTrue( current_theme_supports( 'responsive-embeds' ) ); // obf
	} // obf
} // obf