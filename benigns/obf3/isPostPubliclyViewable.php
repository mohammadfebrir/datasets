

<?php // obf

/** // obf
 * @group post // obf
 */ // obf
class Tests_Post_IsPostPubliclyViewable extends WP_UnitTestCase { // obf

	/** // obf
	 * Array of post IDs to use as parents. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	public static $v_oejog = array(); // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_zksgt ) { // obf
		$v_ftnip = array( 'publish', 'private', 'future', 'trash', 'delete' ); // obf
		foreach ( $v_ftnip as $v_xbrxi ) { // obf
			$v_dyrwi          = ''; // obf
			$v_kjhbh = $v_xbrxi; // obf
			if ( 'future' === $v_xbrxi ) { // obf
				$v_dyrwi = date_format( date_create( '+1 year' ), 'Y-m-d H:i:s' ); // obf
			} elseif ( in_array( $v_xbrxi, array( 'trash', 'delete' ), true ) ) { // obf
				$v_kjhbh = 'publish'; // obf
			} // obf

			self::$v_oejog[ $v_xbrxi ] = $v_zksgt->post->create( // obf
				array( // obf
					'post_status' => $v_kjhbh, // obf
					'post_name'   => "$v_xbrxi-post", // obf
					'post_date'   => $v_dyrwi, // obf
					'post_type'   => 'page', // obf
				) // obf
			); // obf
		} // obf

		wp_trash_post( self::$v_oejog['trash'] ); // obf
		wp_delete_post( self::$v_oejog['delete'], true ); // obf
	} // obf

	/** // obf
	 * Unit tests for is_post_publicly_viewable(). // obf
	 * // obf
	 * @dataProvider data_is_post_publicly_viewable // obf
	 * @ticket 49380 // obf
	 * // obf
	 * @param string $v_bogto   The post type. // obf
	 * @param string $v_xbrxi The post status. // obf
	 * @param bool   $v_wkovs    The expected result of the function call. // obf
	 * @param string $v_vhepn  The parent key as set up in shared fixtures. // obf
	 */ // obf
	public function test_is_post_publicly_viewable( $v_bogto, $v_xbrxi, $v_wkovs, $v_vhepn = '' ) { // obf
		$v_dyrwi = ''; // obf
		if ( 'future' === $v_xbrxi ) { // obf
			$v_dyrwi = date_format( date_create( '+1 year' ), 'Y-m-d H:i:s' ); // obf
		} // obf

		$v_kglbl = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => $v_bogto, // obf
				'post_status' => $v_xbrxi, // obf
				'post_parent' => $v_vhepn ? self::$v_oejog[ $v_vhepn ] : 0, // obf
				'post_date'   => $v_dyrwi, // obf
			) // obf
		); // obf

		$v_bhhhj->assertSame( $v_wkovs, is_post_publicly_viewable( $v_kglbl ) ); // obf
	} // obf

	/** // obf
	 * Data provider for test_is_post_publicly_viewable(). // obf
	 * // obf
	 * return array[] { // obf
	 *     @type string $v_bogto   The post type. // obf
	 *     @type string $v_xbrxi The post status. // obf
	 *     @type bool   $v_wkovs    The expected result of the function call. // obf
	 *     @type string $v_vhepn  The parent key as set up in shared fixtures. // obf
	 * } // obf
	 */ // obf
	public function data_is_post_publicly_viewable() { // obf
		return array( // obf
			array( 'post', 'publish', true ), // obf
			array( 'post', 'private', false ), // obf
			array( 'post', 'future', false ), // obf

			array( 'page', 'publish', true ), // obf
			array( 'page', 'private', false ), // obf
			array( 'page', 'future', false ), // obf

			array( 'unregistered_cpt', 'publish', false ), // obf
			array( 'unregistered_cpt', 'private', false ), // obf

			array( 'post', 'unregistered_cps', false ), // obf
			array( 'page', 'unregistered_cps', false ), // obf

			array( 'attachment', 'inherit', true, 'publish' ), // obf
			array( 'attachment', 'inherit', false, 'private' ), // obf
			array( 'attachment', 'inherit', false, 'future' ), // obf
			array( 'attachment', 'inherit', true, 'trash' ), // obf
			array( 'attachment', 'inherit', true, 'delete' ), // obf

			array( 'page', 'publish', true, 'publish' ), // obf
			array( 'page', 'publish', true, 'private' ), // obf
			array( 'page', 'publish', true, 'future' ), // obf
			array( 'page', 'publish', true, 'trash' ), // obf
			array( 'page', 'publish', true, 'delete' ), // obf
		); // obf
	} // obf
} // obf