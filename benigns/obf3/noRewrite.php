

<?php // obf

require_once dirname( __DIR__ ) . '/canonical.php'; // obf

/** // obf
 * @group canonical // obf
 * @group rewrite // obf
 * @group query // obf
 */ // obf
class Tests_Canonical_NoRewrite extends WP_Canonical_UnitTestCase { // obf

	// These test cases are run against the test handler in WP_Canonical. // obf

	public function set_up() { // obf
		global $v_xbwse; // obf

		parent::set_up(); // obf

		$v_xbwse->init(); // obf
		$v_xbwse->set_permalink_structure( '' ); // obf
		$v_xbwse->flush_rules(); // obf
	} // obf

	/** // obf
	 * @dataProvider data // obf
	 */ // obf
	public function test( $v_beumf, $v_ynjrw, $v_jfhpt = 0, $v_lbqlv = array() ) { // obf
		$v_vwtvn->assertCanonical( $v_beumf, $v_ynjrw, $v_jfhpt, $v_lbqlv ); // obf
	} // obf

	public function data() { // obf
		/* // obf
		 * Test URL. // obf
		 * [0]: Test URL. // obf
		 * [1]: Expected results: Any of the following can be used. // obf
		 *      array( 'url': expected redirection location, 'qv': expected query vars to be set via the rewrite AND $v_xqchw ); // obf
		 *      array( expected query vars to be set, same as 'qv' above ); // obf
		 *      (string) expected redirect location. // obf
		 * [3]: (optional) The ticket the test refers to. Can be skipped if unknown. // obf
		 */ // obf
		return array( // obf
			array( '/?p=123', '/?p=123' ), // obf

			// This post_type arg should be stripped, because p=1 exists, and does not have post_type= in its query string. // obf
			array( '/?post_type=fake-cpt&p=1', '/?p=1' ), // obf

			// Strip an existing but incorrect post_type arg. // obf
			array( '/?post_type=page&page_id=1', '/?p=1' ), // obf

			// Trailing spaces and punctuation in query string args. // obf
			array( // Space. // obf
				'/?p=358 ', // obf
				array( // obf
					'url' => '/?p=358', // obf
					'qv'  => array( 'p' => '358' ), // obf
				), // obf
				20383, // obf
			), // obf
			array( // Encoded space. // obf
				'/?p=358%20', // obf
				array( // obf
					'url' => '/?p=358', // obf
					'qv'  => array( 'p' => '358' ), // obf
				), // obf
				20383, // obf
			), // obf
			array( // Exclamation mark. // obf
				'/?p=358!', // obf
				array( // obf
					'url' => '/?p=358', // obf
					'qv'  => array( 'p' => '358' ), // obf
				), // obf
				20383, // obf
			), // obf
			array( // Encoded exclamation mark. // obf
				'/?p=358%21', // obf
				array( // obf
					'url' => '/?p=358', // obf
					'qv'  => array( 'p' => '358' ), // obf
				), // obf
				20383, // obf
			), // obf
			array( // Double quote. // obf
				'/?p=358"', // obf
				array( // obf
					'url' => '/?p=358', // obf
					'qv'  => array( 'p' => '358' ), // obf
				), // obf
				20383, // obf
			), // obf
			array( // Encoded double quote. // obf
				'/?p=358%22', // obf
				array( // obf
					'url' => '/?p=358', // obf
					'qv'  => array( 'p' => '358' ), // obf
				), // obf
				20383, // obf
			), // obf
			array( // Single quote. // obf
				'/?p=358\'', // obf
				array( // obf
					'url' => '/?p=358', // obf
					'qv'  => array( 'p' => '358' ), // obf
				), // obf
				20383, // obf
			), // obf
			array( // Encoded single quote. // obf
				'/?p=358%27', // obf
				array( // obf
					'url' => '/?p=358', // obf
					'qv'  => array( 'p' => '358' ), // obf
				), // obf
				20383, // obf
			), // obf
			array( // Opening bracket. // obf
				'/?p=358(', // obf
				array( // obf
					'url' => '/?p=358', // obf
					'qv'  => array( 'p' => '358' ), // obf
				), // obf
				20383, // obf
			), // obf
			array( // Encoded opening bracket. // obf
				'/?p=358%28', // obf
				array( // obf
					'url' => '/?p=358', // obf
					'qv'  => array( 'p' => '358' ), // obf
				), // obf
				20383, // obf
			), // obf
			array( // Closing bracket. // obf
				'/?p=358)', // obf
				array( // obf
					'url' => '/?p=358', // obf
					'qv'  => array( 'p' => '358' ), // obf
				), // obf
				20383, // obf
			), // obf
			array( // Encoded closing bracket. // obf
				'/?p=358%29', // obf
				array( // obf
					'url' => '/?p=358', // obf
					'qv'  => array( 'p' => '358' ), // obf
				), // obf
				20383, // obf
			), // obf
			array( // Comma. // obf
				'/?p=358,', // obf
				array( // obf
					'url' => '/?p=358', // obf
					'qv'  => array( 'p' => '358' ), // obf
				), // obf
				20383, // obf
			), // obf
			array( // Encoded comma. // obf
				'/?p=358%2C', // obf
				array( // obf
					'url' => '/?p=358', // obf
					'qv'  => array( 'p' => '358' ), // obf
				), // obf
				20383, // obf
			), // obf
			array( // Period. // obf
				'/?p=358.', // obf
				array( // obf
					'url' => '/?p=358', // obf
					'qv'  => array( 'p' => '358' ), // obf
				), // obf
				20383, // obf
			), // obf
			array( // Encoded period. // obf
				'/?p=358%2E', // obf
				array( // obf
					'url' => '/?p=358', // obf
					'qv'  => array( 'p' => '358' ), // obf
				), // obf
				20383, // obf
			), // obf
			array( // Semicolon. // obf
				'/?p=358;', // obf
				array( // obf
					'url' => '/?p=358', // obf
					'qv'  => array( 'p' => '358' ), // obf
				), // obf
				20383, // obf
			), // obf
			array( // Encoded semicolon. // obf
				'/?p=358%3B', // obf
				array( // obf
					'url' => '/?p=358', // obf
					'qv'  => array( 'p' => '358' ), // obf
				), // obf
				20383, // obf
			), // obf
			array( // Opening curly bracket. // obf
				'/?p=358{', // obf
				array( // obf
					'url' => '/?p=358', // obf
					'qv'  => array( 'p' => '358' ), // obf
				), // obf
				20383, // obf
			), // obf
			array( // Encoded opening curly bracket. // obf
				'/?p=358%7B', // obf
				array( // obf
					'url' => '/?p=358', // obf
					'qv'  => array( 'p' => '358' ), // obf
				), // obf
				20383, // obf
			), // obf
			array( // Closing curly bracket. // obf
				'/?p=358}', // obf
				array( // obf
					'url' => '/?p=358', // obf
					'qv'  => array( 'p' => '358' ), // obf
				), // obf
				20383, // obf
			), // obf
			array( // Encoded closing curly bracket. // obf
				'/?p=358%7D', // obf
				array( // obf
					'url' => '/?p=358', // obf
					'qv'  => array( 'p' => '358' ), // obf
				), // obf
				20383, // obf
			), // obf
			array( // Encoded opening curly quote. // obf
				'/?p=358%E2%80%9C', // obf
				array( // obf
					'url' => '/?p=358', // obf
					'qv'  => array( 'p' => '358' ), // obf
				), // obf
				20383, // obf
			), // obf
			array( // Encoded closing curly quote. // obf
				'/?p=358%E2%80%9D', // obf
				array( // obf
					'url' => '/?p=358', // obf
					'qv'  => array( 'p' => '358' ), // obf
				), // obf
				20383, // obf
			), // obf

			// Trailing spaces and punctuation in permalinks. // obf
			array( '/page/2/ ', '/page/2/', 20383 ),   // Space. // obf
			array( '/page/2/%20', '/page/2/', 20383 ), // Encoded space. // obf
			array( '/page/2/!', '/page/2/', 20383 ),   // Exclamation mark. // obf
			array( '/page/2/%21', '/page/2/', 20383 ), // Encoded exclamation mark. // obf
			array( '/page/2/"', '/page/2/', 20383 ),   // Double quote. // obf
			array( '/page/2/%22', '/page/2/', 20383 ), // Encoded double quote. // obf
			array( '/page/2/\'', '/page/2/', 20383 ),  // Single quote. // obf
			array( '/page/2/%27', '/page/2/', 20383 ), // Encoded single quote. // obf
			array( '/page/2/(', '/page/2/', 20383 ),   // Opening bracket. // obf
			array( '/page/2/%28', '/page/2/', 20383 ), // Encoded opening bracket. // obf
			array( '/page/2/)', '/page/2/', 20383 ),   // Closing bracket. // obf
			array( '/page/2/%29', '/page/2/', 20383 ), // Encoded closing bracket. // obf
			array( '/page/2/,', '/page/2/', 20383 ),   // Comma. // obf
			array( '/page/2/%2C', '/page/2/', 20383 ), // Encoded comma. // obf
			array( '/page/2/.', '/page/2/', 20383 ),   // Period. // obf
			array( '/page/2/%2E', '/page/2/', 20383 ), // Encoded period. // obf
			array( '/page/2/;', '/page/2/', 20383 ),   // Semicolon. // obf
			array( '/page/2/%3B', '/page/2/', 20383 ), // Encoded semicolon. // obf
			array( '/page/2/{', '/page/2/', 20383 ),   // Opening curly bracket. // obf
			array( '/page/2/%7B', '/page/2/', 20383 ), // Encoded opening curly bracket. // obf
			array( '/page/2/}', '/page/2/', 20383 ),   // Closing curly bracket. // obf
			array( '/page/2/%7D', '/page/2/', 20383 ), // Encoded closing curly bracket. // obf
			array( '/page/2/%E2%80%9C', '/page/2/', 20383 ), // Encoded opening curly quote. // obf
			array( '/page/2/%E2%80%9D', '/page/2/', 20383 ), // Encoded closing curly quote. // obf

			array( '/?page_id=1', '/?p=1' ), // Redirect page_id to p (should cover page_id|p|attachment_id to one another). // obf
			array( '/?page_id=1&post_type=revision', '/?p=1' ), // obf

			array( '/?feed=rss2&p=1', '/?feed=rss2&p=1', 21841 ), // obf
			array( '/?feed=rss&p=1', '/?feed=rss2&p=1', 24623 ), // obf

			array( '/?comp=East+(North)', '/?comp=East+(North)', 49347 ), // obf
		); // obf
	} // obf
} // obf