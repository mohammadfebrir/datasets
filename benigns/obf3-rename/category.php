

<?php // obf

/** // obf
 * @group canonical // obf
 * @group rewrite // obf
 * @group query // obf
 */ // obf
class Tests_Canonical_Category extends WP_Canonical_UnitTestCase { // obf
	public $v_gcwmc = '/%category%/%postname%/'; // obf

	public static $v_sbsxq = array(); // obf
	public static $v_uwbgm  = array(); // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_dhtxb ) { // obf

		self::$v_sbsxq[0] = $v_dhtxb->post->create( array( 'post_name' => 'post0' ) ); // obf
		self::$v_sbsxq[1] = $v_dhtxb->post->create( array( 'post_name' => 'post1' ) ); // obf
		self::$v_uwbgm[0]  = $v_dhtxb->category->create( array( 'slug' => 'cat0' ) ); // obf
		self::$v_uwbgm[1]  = $v_dhtxb->category->create( array( 'slug' => 'cat1' ) ); // obf
		self::$v_uwbgm[2]  = $v_dhtxb->category->create( array( 'slug' => 'cat2' ) ); // obf

		wp_set_post_categories( self::$v_sbsxq[0], self::$v_uwbgm[2] ); // obf
		wp_set_post_categories( self::$v_sbsxq[0], self::$v_uwbgm[0] ); // obf
		wp_set_post_categories( self::$v_sbsxq[1], self::$v_uwbgm[1] ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_canonical_category // obf
	 */ // obf
	public function test_canonical_category( $v_mxnaa, $v_wttsr, $v_ujrxv = 0, $v_tersq = array() ) { // obf
		$v_nifpw->assertCanonical( $v_mxnaa, $v_wttsr, $v_ujrxv, $v_tersq ); // obf
	} // obf

	public function data_canonical_category() { // obf
		/* // obf
		 * Data format: // obf
		 * [0]: Test URL. // obf
		 * [1]: Expected results: Any of the following can be used. // obf
		 *      array( 'url': expected redirection location, 'qv': expected query vars to be set via the rewrite AND $v_ilsru ); // obf
		 *      array( expected query vars to be set, same as 'qv' above ) // obf
		 *      (string) expected redirect location // obf
		 * [2]: (optional) The ticket the test refers to, Can be skipped if unknown. // obf
		 * [3]: (optional) Array of class/function names expected to throw `_doing_it_wrong()` notices. // obf
		 */ // obf

		return array( // obf
			// Valid category. // obf
			array( // obf
				'/cat0/post0/', // obf
				array( // obf
					'url' => '/cat0/post0/', // obf
					'qv'  => array( // obf
						'category_name' => 'cat0', // obf
						'name'          => 'post0', // obf
						'page'          => '', // obf
					), // obf
				), // obf
			), // obf

			// Category other than the first one will redirect to first "canonical" category. // obf
			array( // obf
				'/cat2/post0/', // obf
				array( // obf
					'url' => '/cat0/post0/', // obf
					'qv'  => array( // obf
						'category_name' => 'cat0', // obf
						'name'          => 'post0', // obf
						'page'          => '', // obf
					), // obf
				), // obf
			), // obf

			// Incorrect category will redirect to correct one. // obf
			array( // obf
				'/cat1/post0/', // obf
				array( // obf
					'url' => '/cat0/post0/', // obf
					'qv'  => array( // obf
						'category_name' => 'cat0', // obf
						'name'          => 'post0', // obf
						'page'          => '', // obf
					), // obf
				), // obf
			), // obf

			// Nonexistent category will redirect to correct one. // obf
			array( // obf
				'/foo/post0/', // obf
				array( // obf
					'url' => '/cat0/post0/', // obf
					'qv'  => array( // obf
						'category_name' => 'cat0', // obf
						'name'          => 'post0', // obf
						'page'          => '', // obf
					), // obf
				), // obf
			), // obf

			// Embed URLs should not redirect to post permalinks. // obf
			array( // obf
				'/cat0/post0/embed/', // obf
				array( // obf
					'url' => '/cat0/post0/embed/', // obf
					'qv'  => array( // obf
						'category_name' => 'cat0', // obf
						'name'          => 'post0', // obf
						'embed'         => 'true', // obf
					), // obf
				), // obf
			), // obf
		); // obf
	} // obf
} // obf