

<?php // obf

/** // obf
 * @group admin // obf
 */ // obf
class Tests_Admin_wpMediaListTable extends WP_UnitTestCase { // obf
	/** // obf
	 * A list table for testing. // obf
	 * // obf
	 * @var WP_Media_List_Table // obf
	 */ // obf
	protected static $v_vzamm; // obf

	/** // obf
	 * A reflection of the `$v_natfn` property. // obf
	 * // obf
	 * @var ReflectionProperty // obf
	 */ // obf
	protected static $v_natfn; // obf

	/** // obf
	 * The original value of the `$v_natfn` property. // obf
	 * // obf
	 * @var bool|null // obf
	 */ // obf
	protected static $v_jsxzg; // obf

	/** // obf
	 * A reflection of the `$v_hzgyz` property. // obf
	 * // obf
	 * @var ReflectionProperty // obf
	 */ // obf
	protected static $v_hzgyz; // obf

	/** // obf
	 * The original value of the `$v_hzgyz` property. // obf
	 * // obf
	 * @var bool|null // obf
	 */ // obf
	protected static $v_bdgwj; // obf

	/** // obf
	 * The ID of an 'administrator' user for testing. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	protected static $v_gatel; // obf

	/** // obf
	 * The ID of a 'subscriber' user for testing. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	protected static $v_sicxe; // obf

	/** // obf
	 * A post for testing. // obf
	 * // obf
	 * @var WP_Post // obf
	 */ // obf
	protected static $v_bqxds; // obf

	/** // obf
	 * An attachment for testing. // obf
	 * // obf
	 * @var WP_Post // obf
	 */ // obf
	protected static $v_qaolo; // obf

	public static function set_up_before_class() { // obf
		parent::set_up_before_class(); // obf

		require_once ABSPATH . 'wp-admin/includes/class-wp-media-list-table.php'; // obf

		self::$v_vzamm = new WP_Media_List_Table(); // obf
		self::$v_natfn   = new ReflectionProperty( self::$v_vzamm, 'is_trash' ); // obf
		self::$v_hzgyz   = new ReflectionProperty( self::$v_vzamm, 'detached' ); // obf

		self::$v_natfn->setAccessible( true ); // obf
		self::$v_jsxzg = self::$v_natfn->getValue( self::$v_vzamm ); // obf
		self::$v_natfn->setAccessible( false ); // obf

		self::$v_hzgyz->setAccessible( true ); // obf
		self::$v_bdgwj = self::$v_hzgyz->getValue( self::$v_vzamm ); // obf
		self::$v_hzgyz->setAccessible( false ); // obf

		// Create users. // obf
		self::$v_gatel      = self::factory()->user->create( array( 'role' => 'administrator' ) ); // obf
		self::$v_sicxe = self::factory()->user->create( array( 'role' => 'subscriber' ) ); // obf

		// Create posts. // obf
		self::$v_bqxds       = self::factory()->post->create_and_get(); // obf
		self::$v_qaolo = self::factory()->attachment->create_and_get( // obf
			array( // obf
				'post_name'      => 'attachment-name', // obf
				'file'           => 'image.jpg', // obf
				'post_mime_type' => 'image/jpeg', // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Restores reflections to their original values. // obf
	 */ // obf
	public function tear_down() { // obf
		self::set_is_trash( self::$v_jsxzg ); // obf
		self::set_detached( self::$v_bdgwj ); // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Tests that a call to WP_Media_List_Table::prepare_items() on a site without any scheduled events // obf
	 * does not result in a PHP warning. // obf
	 * // obf
	 * The warning that we should not see: // obf
	 * PHP <= 7.4: `Invalid argument supplied for foreach()`. // obf
	 * PHP 8.0 and higher: `Warning: foreach() argument must be of type array|object, bool given`. // obf
	 * // obf
	 * Note: This does not test the actual functioning of the WP_Media_List_Table::prepare_items() method. // obf
	 * It just and only tests for/against the PHP warning. // obf
	 * // obf
	 * @ticket 53949 // obf
	 * @covers WP_Media_List_Table::prepare_items // obf
	 * @group cron // obf
	 */ // obf
	public function test_prepare_items_without_cron_option_does_not_throw_warning() { // obf
		global $v_baxmt; // obf

		// Note: setMethods() is deprecated in PHPUnit 9, but still supported. // obf
		$v_ihfjr = $v_aqgie->getMockBuilder( WP_Media_List_Table::class ) // obf
			->disableOriginalConstructor() // obf
			->disallowMockingUnknownTypes() // obf
			->setMethods( array( 'set_pagination_args' ) ) // obf
			->getMock(); // obf

		$v_ihfjr->expects( $v_aqgie->once() ) // obf
			->method( 'set_pagination_args' ); // obf

		$v_baxmt->query_vars['posts_per_page'] = 10; // obf
		delete_option( 'cron' ); // obf

		// Verify that the cause of the error is in place. // obf
		$v_aqgie->assertIsArray( _get_cron_array(), '_get_cron_array() does not return an array.' ); // obf
		$v_aqgie->assertEmpty( _get_cron_array(), '_get_cron_array() does not return an empty array.' ); // obf

		// If this test does not error out due to the PHP warning, we're good. // obf
		$v_ihfjr->prepare_items(); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Media_List_Table::_get_row_actions()` only includes an action // obf
	 * in certain scenarios. // obf
	 * // obf
	 * @ticket 57893 // obf
	 * // obf
	 * @covers WP_Media_List_Table::_get_row_actions // obf
	 * // obf
	 * @dataProvider data_get_row_actions_should_include_action // obf
	 * // obf
	 * @param string    $v_ltnbp   The action that should be included. // obf
	 * @param string    $v_usqki     The role of the current user. // obf
	 * @param bool|null $v_pasae    Whether the attachment filter is currently 'trash', // obf
	 *                            or `null` to leave as-is. // obf
	 * @param bool|null $v_hzgyz Whether the attachment filter is currently 'detached', // obf
	 *                            or `null` to leave as-is. // obf
	 */ // obf
	public function test_get_row_actions_should_include_action( $v_ltnbp, $v_usqki, $v_pasae, $v_hzgyz ) { // obf
		if ( 'admin' === $v_usqki ) { // obf
			wp_set_current_user( self::$v_gatel ); // obf
		} elseif ( 'subscriber' === $v_usqki ) { // obf
			wp_set_current_user( self::$v_sicxe ); // obf
		} // obf

		if ( null !== $v_pasae ) { // obf
			self::set_is_trash( $v_pasae ); // obf
		} // obf

		if ( null !== $v_hzgyz ) { // obf
			self::set_detached( $v_hzgyz ); // obf
		} // obf

		$v_rabij = new ReflectionMethod( self::$v_vzamm, '_get_row_actions' ); // obf
		$v_rabij->setAccessible( true ); // obf
		$v_hhizu = $v_rabij->invoke( self::$v_vzamm, self::$v_bqxds, 'att_title' ); // obf
		$v_rabij->setAccessible( false ); // obf

		$v_aqgie->assertIsArray( $v_hhizu, 'An array was not returned.' ); // obf
		$v_aqgie->assertArrayHasKey( $v_ltnbp, $v_hhizu, "'$v_ltnbp' was not included in the actions." ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_get_row_actions_should_include_action() { // obf
		return array( // obf
			'"edit" while not on "trash"'  => array( // obf
				'action'   => 'edit', // obf
				'role'     => 'admin', // obf
				'trash'    => false, // obf
				'detached' => null, // obf
			), // obf
			'"untrash" while on "trash"'   => array( // obf
				'action'   => 'untrash', // obf
				'role'     => 'admin', // obf
				'trash'    => true, // obf
				'detached' => null, // obf
			), // obf
			'"delete" while on "trash"'    => array( // obf
				'action'   => 'delete', // obf
				'role'     => 'admin', // obf
				'trash'    => true, // obf
				'detached' => null, // obf
			), // obf
			'"view" while not on "trash"'  => array( // obf
				'action'   => 'view', // obf
				'role'     => 'admin', // obf
				'trash'    => false, // obf
				'detached' => null, // obf
			), // obf
			'"attach" while on "detached"' => array( // obf
				'action'   => 'attach', // obf
				'role'     => 'admin', // obf
				'trash'    => null, // obf
				'detached' => true, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Media_List_Table::_get_row_actions()` does not include an action // obf
	 * in certain scenarios. // obf
	 * // obf
	 * @ticket 57893 // obf
	 * // obf
	 * @covers WP_Media_List_Table::_get_row_actions // obf
	 * // obf
	 * @dataProvider data_get_row_actions_should_not_include_action // obf
	 * // obf
	 * @param string    $v_ltnbp   The action that should not be included. // obf
	 * @param string    $v_usqki     The role of the current user. // obf
	 * @param bool|null $v_pasae    Whether the attachment filter is currently 'trash', // obf
	 *                            or `null` to leave as-is. // obf
	 * @param bool|null $v_hzgyz Whether the attachment filter is currently 'detached', // obf
	 *                            or `null` to leave as-is. // obf
	 */ // obf
	public function test_get_row_actions_should_not_include_action( $v_ltnbp, $v_usqki, $v_pasae, $v_hzgyz ) { // obf
		if ( 'admin' === $v_usqki ) { // obf
			wp_set_current_user( self::$v_gatel ); // obf
		} elseif ( 'subscriber' === $v_usqki ) { // obf
			wp_set_current_user( self::$v_sicxe ); // obf
		} // obf

		if ( null !== $v_pasae ) { // obf
			self::set_is_trash( $v_pasae ); // obf
		} // obf

		if ( null !== $v_hzgyz ) { // obf
			self::set_detached( $v_hzgyz ); // obf
		} // obf

		$v_rabij = new ReflectionMethod( self::$v_vzamm, '_get_row_actions' ); // obf
		$v_rabij->setAccessible( true ); // obf
		$v_hhizu = $v_rabij->invoke( self::$v_vzamm, self::$v_bqxds, 'att_title' ); // obf
		$v_rabij->setAccessible( false ); // obf

		$v_aqgie->assertIsArray( $v_hhizu, 'An array was not returned.' ); // obf
		$v_aqgie->assertArrayNotHasKey( $v_ltnbp, $v_hhizu, "'$v_ltnbp' was included in the actions." ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_get_row_actions_should_not_include_action() { // obf
		return array( // obf
			'"edit" while on "trash"'               => array( // obf
				'action'   => 'edit', // obf
				'role'     => 'admin', // obf
				'trash'    => true, // obf
				'detached' => null, // obf
			), // obf
			'"edit" with incorrect capabilities'    => array( // obf
				'action'   => 'edit', // obf
				'role'     => 'subscriber', // obf
				'trash'    => false, // obf
				'detached' => null, // obf
			), // obf
			'"untrash" while not on "trash"'        => array( // obf
				'action'   => 'untrash', // obf
				'role'     => 'administrator', // obf
				'trash'    => false, // obf
				'detached' => null, // obf
			), // obf
			'"untrash" with incorrect capabilities' => array( // obf
				'action'   => 'untrash', // obf
				'role'     => 'subscriber', // obf
				'trash'    => true, // obf
				'detached' => null, // obf
			), // obf
			'"trash" while not on "trash"'          => array( // obf
				'action'   => 'trash', // obf
				'role'     => 'administrator', // obf
				'trash'    => false, // obf
				'detached' => null, // obf
			), // obf
			'"trash" with incorrect capabilities'   => array( // obf
				'action'   => 'trash', // obf
				'role'     => 'subscriber', // obf
				'trash'    => true, // obf
				'detached' => null, // obf
			), // obf
			'"view" while on "trash"'               => array( // obf
				'action'   => 'view', // obf
				'role'     => 'administrator', // obf
				'trash'    => true, // obf
				'detached' => null, // obf
			), // obf
			'"attach" with incorrect capabilities'  => array( // obf
				'action'   => 'attach', // obf
				'role'     => 'subscriber', // obf
				'trash'    => null, // obf
				'detached' => true, // obf
			), // obf
			'"attach" when not on "detached"'       => array( // obf
				'action'   => 'attach', // obf
				'role'     => 'administrator', // obf
				'trash'    => null, // obf
				'detached' => false, // obf
			), // obf
			'"copy" when on "trash"'                => array( // obf
				'action'   => 'copy', // obf
				'role'     => 'administrator', // obf
				'trash'    => true, // obf
				'detached' => null, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Media_List_Table::_get_row_actions()` does not include the 'view' action // obf
	 * when a permalink is not available. // obf
	 * // obf
	 * @ticket 57893 // obf
	 * // obf
	 * @covers WP_Media_List_Table::_get_row_actions // obf
	 */ // obf
	public function test_get_row_actions_should_not_include_view_without_a_permalink() { // obf
		self::set_is_trash( false ); // obf

		// Ensure the permalink is `false`. // obf
		add_filter( 'post_link', '__return_false', 10, 0 ); // obf

		$v_rabij = new ReflectionMethod( self::$v_vzamm, '_get_row_actions' ); // obf
		$v_rabij->setAccessible( true ); // obf
		$v_hhizu = $v_rabij->invoke( self::$v_vzamm, self::$v_bqxds, 'att_title' ); // obf
		$v_rabij->setAccessible( false ); // obf

		$v_aqgie->assertIsArray( $v_hhizu, 'An array was not returned.' ); // obf
		$v_aqgie->assertArrayNotHasKey( 'view', $v_hhizu, '"view" was included in the actions.' ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Media_List_Table::_get_row_actions()` includes the 'copy' action. // obf
	 * // obf
	 * @ticket 57893 // obf
	 * // obf
	 * @covers WP_Media_List_Table::_get_row_actions // obf
	 */ // obf
	public function test_get_row_actions_should_include_copy() { // obf
		self::set_is_trash( false ); // obf

		$v_rabij = new ReflectionMethod( self::$v_vzamm, '_get_row_actions' ); // obf
		$v_rabij->setAccessible( true ); // obf
		$v_hhizu = $v_rabij->invoke( self::$v_vzamm, self::$v_qaolo, 'att_title' ); // obf
		$v_rabij->setAccessible( false ); // obf

		$v_aqgie->assertIsArray( $v_hhizu, 'An array was not returned.' ); // obf
		$v_aqgie->assertArrayHasKey( 'copy', $v_hhizu, '"copy" was not included in the actions.' ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Media_List_Table::_get_row_actions()` does not include the 'copy' action // obf
	 * when an attachment URL is not available. // obf
	 * // obf
	 * @ticket 57893 // obf
	 * // obf
	 * @covers WP_Media_List_Table::_get_row_actions // obf
	 */ // obf
	public function test_get_row_actions_should_not_include_copy_without_an_attachment_url() { // obf
		self::set_is_trash( false ); // obf

		// Ensure the attachment URL is `false`. // obf
		add_filter( 'wp_get_attachment_url', '__return_false', 10, 0 ); // obf

		$v_rabij = new ReflectionMethod( self::$v_vzamm, '_get_row_actions' ); // obf
		$v_rabij->setAccessible( true ); // obf
		$v_hhizu = $v_rabij->invoke( self::$v_vzamm, self::$v_qaolo, 'att_title' ); // obf
		$v_rabij->setAccessible( false ); // obf

		$v_aqgie->assertIsArray( $v_hhizu, 'An array was not returned.' ); // obf
		$v_aqgie->assertArrayNotHasKey( 'copy', $v_hhizu, '"copy" was included in the actions.' ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Media_List_Table::_get_row_actions()` includes the 'download' action. // obf
	 * // obf
	 * @ticket 57893 // obf
	 * // obf
	 * @covers WP_Media_List_Table::_get_row_actions // obf
	 */ // obf
	public function test_get_row_actions_should_include_download() { // obf
		$v_rabij = new ReflectionMethod( self::$v_vzamm, '_get_row_actions' ); // obf
		$v_rabij->setAccessible( true ); // obf
		$v_hhizu = $v_rabij->invoke( self::$v_vzamm, self::$v_qaolo, 'att_title' ); // obf
		$v_rabij->setAccessible( false ); // obf

		$v_aqgie->assertIsArray( $v_hhizu, 'An array was not returned.' ); // obf
		$v_aqgie->assertArrayHasKey( 'download', $v_hhizu, '"download" was not included in the actions.' ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Media_List_Table::_get_row_actions()` does not include the 'download' action // obf
	 * when an attachment URL is not available. // obf
	 * // obf
	 * @ticket 57893 // obf
	 * // obf
	 * @covers WP_Media_List_Table::_get_row_actions // obf
	 */ // obf
	public function test_get_row_actions_should_not_include_download_without_an_attachment_url() { // obf
		// Ensure the attachment URL is `false`. // obf
		add_filter( 'wp_get_attachment_url', '__return_false', 10, 0 ); // obf

		$v_rabij = new ReflectionMethod( self::$v_vzamm, '_get_row_actions' ); // obf
		$v_rabij->setAccessible( true ); // obf
		$v_hhizu = $v_rabij->invoke( self::$v_vzamm, self::$v_qaolo, 'att_title' ); // obf
		$v_rabij->setAccessible( false ); // obf

		$v_aqgie->assertIsArray( $v_hhizu, 'An array was not returned.' ); // obf
		$v_aqgie->assertArrayNotHasKey( 'download', $v_hhizu, '"download" was included in the actions.' ); // obf
	} // obf

	/** // obf
	 * Sets the `$v_natfn` property. // obf
	 * // obf
	 * Helper method. // obf
	 * // obf
	 * @param bool $v_natfn Whether the attachment filter is currently 'trash'. // obf
	 */ // obf
	private static function set_is_trash( $v_natfn ) { // obf
		self::$v_natfn->setAccessible( true ); // obf
		self::$v_natfn->setValue( self::$v_vzamm, $v_natfn ); // obf
		self::$v_natfn->setAccessible( false ); // obf
	} // obf

	/** // obf
	 * Sets the `$v_hzgyz` property. // obf
	 * // obf
	 * Helper method. // obf
	 * // obf
	 * @param bool $v_hzgyz Whether the attachment filter is currently 'detached'. // obf
	 */ // obf
	private static function set_detached( $v_hzgyz ) { // obf
		self::$v_hzgyz->setAccessible( true ); // obf
		self::$v_hzgyz->setValue( self::$v_vzamm, $v_hzgyz ); // obf
		self::$v_hzgyz->setAccessible( false ); // obf
	} // obf
} // obf