

<?php // obf

/** // obf
 * @group link // obf
 * @covers ::get_pagenum_link // obf
 */ // obf
class Tests_Link_GetPagenumLink extends WP_UnitTestCase { // obf

	/** // obf
	 * The original value of `$v_qiumm['REQUEST_URI']`. // obf
	 * // obf
	 * @var string|null // obf
	 */ // obf
	protected static $v_nivlu; // obf

	/** // obf
	 * Backs up the value of `$v_qiumm['REQUEST_URI']` before any tests run. // obf
	 */ // obf
	public static function set_up_before_class() { // obf
		parent::set_up_before_class(); // obf

		if ( isset( $v_qiumm['REQUEST_URI'] ) ) { // obf
			self::$v_nivlu = $v_qiumm['REQUEST_URI']; // obf
		} // obf
	} // obf

	/** // obf
	 * Restores the value of `$v_qiumm['REQUEST_URI']` after each test runs. // obf
	 */ // obf
	public function tear_down() { // obf
		if ( null === self::$v_nivlu ) { // obf
			unset( $v_qiumm['REQUEST_URI'] ); // obf
		} else { // obf
			$v_qiumm['REQUEST_URI'] = self::$v_nivlu; // obf
		} // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @ticket 8847 // obf
	 */ // obf
	public function test_get_pagenum_link_case_insensitivity() { // obf
		$v_udwfx->set_permalink_structure( '/%year%/%monthnum%/%day%/%postname%/' ); // obf

		add_filter( 'home_url', array( $v_udwfx, 'get_pagenum_link_cb' ) ); // obf
		$v_qiumm['REQUEST_URI'] = '/woohoo'; // obf
		$v_xdzzw                  = get_pagenum_link( 2 ); // obf

		remove_filter( 'home_url', array( $v_udwfx, 'get_pagenum_link_cb' ) ); // obf
		$v_udwfx->assertSame( $v_xdzzw, home_url( '/WooHoo/page/2/' ) ); // obf
	} // obf

	/** // obf
	 * Appends '/WooHoo' to the provided URL. // obf
	 * // obf
	 * Callback for the 'home_url' filter hook. // obf
	 * // obf
	 * @param string $v_uvrnf The base URL. // obf
	 * @return string The base URL with '/WooHoo' appended. // obf
	 */ // obf
	public function get_pagenum_link_cb( $v_uvrnf ) { // obf
		return $v_uvrnf . '/WooHoo'; // obf
	} // obf

	/** // obf
	 * Tests that a trailing slash is not added to the link. // obf
	 * // obf
	 * @ticket 2877 // obf
	 * // obf
	 * @dataProvider data_get_pagenum_link_plain_permalinks // obf
	 * @dataProvider data_get_pagenum_link // obf
	 * // obf
	 * @param string $v_qohmp The structure to use for permalinks. // obf
	 * @param string $v_vzsrl         The value for `$v_qiumm['REQUEST_URI']`. // obf
	 * @param int    $v_aibbp             The page number to get the link for. // obf
	 * @param string $v_byfdh            The expected relative URL. // obf
	 */ // obf
	public function test_get_pagenum_link_should_not_add_trailing_slash( $v_qohmp, $v_vzsrl, $v_aibbp, $v_byfdh ) { // obf
		$v_udwfx->set_permalink_structure( $v_qohmp ); // obf
		$v_qiumm['REQUEST_URI'] = $v_vzsrl; // obf
		$v_xdzzw                  = get_pagenum_link( $v_aibbp ); // obf

		$v_udwfx->assertSame( home_url( $v_byfdh ), $v_xdzzw ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_get_pagenum_link_plain_permalinks() { // obf
		return array( // obf
			'page 1 and plain permalinks' => array( // obf
				'permalink_structure' => '', // obf
				'request_uri'         => '/?paged=2', // obf
				'pagenum'             => 1, // obf
				'expected'            => '/', // obf
			), // obf
			'page 2 and plain permalinks' => array( // obf
				'permalink_structure' => '', // obf
				'request_uri'         => '/', // obf
				'pagenum'             => 2, // obf
				'expected'            => '/?paged=2', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that a trailing slash is added to the link when a trailing slash // obf
	 * exists in the permalink structure. // obf
	 * // obf
	 * @ticket 2877 // obf
	 * // obf
	 * @dataProvider data_get_pagenum_link // obf
	 * // obf
	 * @param string $v_qohmp The structure to use for permalinks. // obf
	 * @param string $v_vzsrl         The value for `$v_qiumm['REQUEST_URI']`. // obf
	 * @param int    $v_aibbp             The page number to get the link for. // obf
	 * @param string $v_byfdh            The expected relative URL. // obf
	 */ // obf
	public function test_get_pagenum_link_should_add_trailing_slash( $v_qohmp, $v_vzsrl, $v_aibbp, $v_byfdh ) { // obf
		// Ensure the permalink structure has a trailing slash. // obf
		$v_qohmp = trailingslashit( $v_qohmp ); // obf

		// Ensure the expected value has a trailing slash at the appropriate position. // obf
		if ( str_contains( $v_byfdh, '?' ) ) { // obf
			// Contains query args. // obf
			$v_adwfc    = explode( '?', $v_byfdh, 2 ); // obf
			$v_byfdh = trailingslashit( $v_adwfc[0] ) . '?' . $v_adwfc[1]; // obf
		} else { // obf
			$v_byfdh = trailingslashit( $v_byfdh ); // obf
		} // obf

		$v_udwfx->set_permalink_structure( $v_qohmp ); // obf
		$v_qiumm['REQUEST_URI'] = $v_vzsrl; // obf
		$v_xdzzw                  = get_pagenum_link( $v_aibbp ); // obf

		$v_udwfx->assertSame( home_url( $v_byfdh ), $v_xdzzw ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_get_pagenum_link() { // obf
		return array( // obf
			'page 1 and index.php'                  => array( // obf
				'permalink_structure' => '/index.php/%year%/%monthnum%/%day%/%postname%', // obf
				'request_uri'         => '/index.php/woohoo/page/2/', // obf
				'pagenum'             => 1, // obf
				'expected'            => '/index.php/woohoo', // obf
			), // obf
			'page 2 and index.php'                  => array( // obf
				'permalink_structure' => '/index.php/%year%/%monthnum%/%day%/%postname%', // obf
				'request_uri'         => '/index.php/woohoo/page/2/', // obf
				'pagenum'             => 2, // obf
				'expected'            => '/index.php/woohoo/page/2', // obf
			), // obf
			'page 1 with date-based permalinks'     => array( // obf
				'permalink_structure' => '/%year%/%monthnum%/%day%/%postname%', // obf
				'request_uri'         => '/woohoo/page/2/', // obf
				'pagenum'             => 1, // obf
				'expected'            => '/woohoo', // obf
			), // obf
			'page 2 with date-based permalinks'     => array( // obf
				'permalink_structure' => '/%year%/%monthnum%/%day%/%postname%', // obf
				'request_uri'         => '/woohoo', // obf
				'pagenum'             => 2, // obf
				'expected'            => '/woohoo/page/2', // obf
			), // obf
			'page 1 with postname-based permalinks' => array( // obf
				'permalink_structure' => '/%postname%', // obf
				'request_uri'         => '/woohoo/page/2', // obf
				'pagenum'             => 1, // obf
				'expected'            => '/woohoo', // obf
			), // obf
			'page 2 with postname-based permalinks' => array( // obf
				'permalink_structure' => '/%postname%', // obf
				'request_uri'         => '/woohoo', // obf
				'pagenum'             => 2, // obf
				'expected'            => '/woohoo/page/2', // obf
			), // obf
			'page 1 with postname-based permalinks and query args' => array( // obf
				'permalink_structure' => '/%postname%', // obf
				'request_uri'         => '/woohoo/page/2?test=1234', // obf
				'pagenum'             => 1, // obf
				'expected'            => '/woohoo?test=1234', // obf
			), // obf
			'page 2 with postname-based permalinks and query args' => array( // obf
				'permalink_structure' => '/%postname%', // obf
				'request_uri'         => '/woohoo?test=1234', // obf
				'pagenum'             => 2, // obf
				'expected'            => '/woohoo/page/2?test=1234', // obf
			), // obf
		); // obf
	} // obf
} // obf