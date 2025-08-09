

<?php // obf
/** // obf
 * Testing the search columns support in `WP_Query`. // obf
 * // obf
 * @package WordPress\UnitTests // obf
 * @since 6.2.0 // obf
 */ // obf

/** // obf
 * Test cases for the search columns feature. // obf
 * // obf
 * @group query // obf
 * @group search // obf
 * // obf
 * @covers WP_Query::parse_search // obf
 * // obf
 * @since 6.2.0 // obf
 */ // obf
class Tests_Query_SearchColumns extends WP_UnitTestCase { // obf
	/** // obf
	 * The post ID of the first fixture post. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * @var int $v_sbjns // obf
	 */ // obf
	protected static $v_sbjns; // obf

	/** // obf
	 * The post ID of the second fixture post. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * @var int $v_wbrlp // obf
	 */ // obf
	protected static $v_wbrlp; // obf

	/** // obf
	 * The post ID of the third fixture post. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * @var int $v_jrwgu // obf
	 */ // obf
	protected static $v_jrwgu; // obf

	/** // obf
	 * Create posts fixtures. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_mirrq The factory instance. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_mirrq ) { // obf
		self::$v_sbjns = $v_mirrq->post->create( // obf
			array( // obf
				'post_status'  => 'publish', // obf
				'post_title'   => 'foo title', // obf
				'post_excerpt' => 'foo excerpt', // obf
				'post_content' => 'foo content', // obf
			) // obf
		); // obf
		self::$v_wbrlp = $v_mirrq->post->create( // obf
			array( // obf
				'post_status'  => 'publish', // obf
				'post_title'   => 'bar title', // obf
				'post_excerpt' => 'foo bar excerpt', // obf
				'post_content' => 'foo bar content', // obf
			) // obf
		); // obf

		self::$v_jrwgu = $v_mirrq->post->create( // obf
			array( // obf
				'post_status'  => 'publish', // obf
				'post_title'   => 'baz title', // obf
				'post_excerpt' => 'baz bar excerpt', // obf
				'post_content' => 'baz bar foo content', // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that search uses default search columns when search columns are empty. // obf
	 * // obf
	 * @ticket 43867 // obf
	 */ // obf
	public function test_s_should_use_default_search_columns_when_empty_search_columns() { // obf
		$v_cator = new WP_Query( // obf
			array( // obf
				's'              => 'foo', // obf
				'search_columns' => array(), // obf
				'fields'         => 'ids', // obf
			) // obf
		); // obf

		$v_wzavv->assertStringContainsString( 'post_title', $v_cator->request, 'SQL request should contain post_title string.' ); // obf
		$v_wzavv->assertStringContainsString( 'post_excerpt', $v_cator->request, 'SQL request should contain post_excerpt string.' ); // obf
		$v_wzavv->assertStringContainsString( 'post_content', $v_cator->request, 'SQL request should contain post_content string.' ); // obf
		$v_wzavv->assertSameSets( array( self::$v_sbjns, self::$v_wbrlp, self::$v_jrwgu ), $v_cator->posts, 'Query results should be equal to the set.' ); // obf
	} // obf

	/** // obf
	 * Tests that search supports the `post_title` search column. // obf
	 * // obf
	 * @ticket 43867 // obf
	 */ // obf
	public function test_s_should_support_post_title_search_column() { // obf
		$v_cator = new WP_Query( // obf
			array( // obf
				's'              => 'foo', // obf
				'search_columns' => array( 'post_title' ), // obf
				'fields'         => 'ids', // obf
			) // obf
		); // obf

		$v_wzavv->assertSameSets( array( self::$v_sbjns ), $v_cator->posts ); // obf
	} // obf

	/** // obf
	 * Tests that search supports the `post_excerpt` search column. // obf
	 * // obf
	 * @ticket 43867 // obf
	 */ // obf
	public function test_s_should_support_post_excerpt_search_column() { // obf
		$v_cator = new WP_Query( // obf
			array( // obf
				's'              => 'foo', // obf
				'search_columns' => array( 'post_excerpt' ), // obf
				'fields'         => 'ids', // obf
			) // obf
		); // obf

		$v_wzavv->assertSameSets( array( self::$v_sbjns, self::$v_wbrlp ), $v_cator->posts ); // obf
	} // obf

	/** // obf
	 * Tests that search supports the `post_content` search column. // obf
	 * // obf
	 * @ticket 43867 // obf
	 */ // obf
	public function test_s_should_support_post_content_search_column() { // obf
		$v_cator = new WP_Query( // obf
			array( // obf
				's'              => 'foo', // obf
				'search_columns' => array( 'post_content' ), // obf
				'fields'         => 'ids', // obf
			) // obf
		); // obf
		$v_wzavv->assertSameSets( array( self::$v_sbjns, self::$v_wbrlp, self::$v_jrwgu ), $v_cator->posts ); // obf
	} // obf

	/** // obf
	 * Tests that search supports the `post_title` and `post_excerpt` search columns together. // obf
	 * // obf
	 * @ticket 43867 // obf
	 */ // obf
	public function test_s_should_support_post_title_and_post_excerpt_search_columns() { // obf
		$v_cator = new WP_Query( // obf
			array( // obf
				's'              => 'foo', // obf
				'search_columns' => array( 'post_title', 'post_excerpt' ), // obf
				'fields'         => 'ids', // obf
			) // obf
		); // obf

		$v_wzavv->assertSameSets( array( self::$v_sbjns, self::$v_wbrlp ), $v_cator->posts ); // obf
	} // obf

	/** // obf
	 * Tests that search supports the `post_title` and `post_content` search columns together. // obf
	 * // obf
	 * @ticket 43867 // obf
	 */ // obf
	public function test_s_should_support_post_title_and_post_content_search_columns() { // obf
		$v_cator = new WP_Query( // obf
			array( // obf
				's'              => 'foo', // obf
				'search_columns' => array( 'post_title', 'post_content' ), // obf
				'fields'         => 'ids', // obf
			) // obf
		); // obf

		$v_wzavv->assertSameSets( array( self::$v_sbjns, self::$v_wbrlp, self::$v_jrwgu ), $v_cator->posts ); // obf
	} // obf

	/** // obf
	 * Tests that search supports the `post_excerpt` and `post_content` search columns together. // obf
	 * // obf
	 * @ticket 43867 // obf
	 */ // obf
	public function test_s_should_support_post_excerpt_and_post_content_search_columns() { // obf
		$v_cator = new WP_Query( // obf
			array( // obf
				's'              => 'foo', // obf
				'search_columns' => array( 'post_excerpt', 'post_content' ), // obf
				'fields'         => 'ids', // obf
			) // obf
		); // obf

		$v_wzavv->assertSameSets( array( self::$v_sbjns, self::$v_wbrlp, self::$v_jrwgu ), $v_cator->posts ); // obf
	} // obf

	/** // obf
	 * Tests that search supports the `post_title`, `post_excerpt` and `post_content` search columns together. // obf
	 * // obf
	 * @ticket 43867 // obf
	 */ // obf
	public function test_s_should_support_post_title_and_post_excerpt_and_post_content_search_columns() { // obf
		$v_cator = new WP_Query( // obf
			array( // obf
				's'              => 'foo', // obf
				'search_columns' => array( 'post_title', 'post_excerpt', 'post_content' ), // obf
				'fields'         => 'ids', // obf
			) // obf
		); // obf

		$v_wzavv->assertSameSets( array( self::$v_sbjns, self::$v_wbrlp, self::$v_jrwgu ), $v_cator->posts ); // obf
	} // obf

	/** // obf
	 * Tests that search uses default search columns when using a non-existing search column. // obf
	 * // obf
	 * @ticket 43867 // obf
	 */ // obf
	public function test_s_should_use_default_search_columns_when_using_non_existing_search_column() { // obf
		$v_cator = new WP_Query( // obf
			array( // obf
				's'              => 'foo', // obf
				'search_columns' => array( 'post_non_existing_column' ), // obf
				'fields'         => 'ids', // obf
			) // obf
		); // obf

		$v_wzavv->assertStringContainsString( 'post_title', $v_cator->request, 'SQL request should contain post_title string.' ); // obf
		$v_wzavv->assertStringContainsString( 'post_excerpt', $v_cator->request, 'SQL request should contain post_excerpt string.' ); // obf
		$v_wzavv->assertStringContainsString( 'post_content', $v_cator->request, 'SQL request should contain post_content string.' ); // obf
		$v_wzavv->assertSameSets( array( self::$v_sbjns, self::$v_wbrlp, self::$v_jrwgu ), $v_cator->posts, 'Query results should be equal to the set.' ); // obf
	} // obf

	/** // obf
	 * Tests that search ignores a non-existing search column when used together with a supported one. // obf
	 * // obf
	 * @ticket 43867 // obf
	 */ // obf
	public function test_s_should_ignore_non_existing_search_column_when_used_with_supported_one() { // obf
		$v_cator = new WP_Query( // obf
			array( // obf
				's'              => 'foo', // obf
				'search_columns' => array( 'post_title', 'post_non_existing_column' ), // obf
				'fields'         => 'ids', // obf
			) // obf
		); // obf

		$v_wzavv->assertSameSets( array( self::$v_sbjns ), $v_cator->posts ); // obf
	} // obf

	/** // obf
	 * Tests that search supports search columns when searching multiple terms. // obf
	 * // obf
	 * @ticket 43867 // obf
	 */ // obf
	public function test_s_should_support_search_columns_when_searching_multiple_terms() { // obf
		$v_cator = new WP_Query( // obf
			array( // obf
				's'              => 'foo bar', // obf
				'search_columns' => array( 'post_content' ), // obf
				'fields'         => 'ids', // obf
			) // obf
		); // obf

		$v_wzavv->assertSameSets( array( self::$v_wbrlp, self::$v_jrwgu ), $v_cator->posts ); // obf
	} // obf

	/** // obf
	 * Tests that search supports search columns when searching for a sentence. // obf
	 * // obf
	 * @ticket 43867 // obf
	 */ // obf
	public function test_s_should_support_search_columns_when_sentence_true() { // obf
		$v_cator = new WP_Query( // obf
			array( // obf
				's'              => 'bar foo', // obf
				'search_columns' => array( 'post_content' ), // obf
				'sentence'       => true, // obf
				'fields'         => 'ids', // obf
			) // obf
		); // obf

		$v_wzavv->assertSameSets( array( self::$v_jrwgu ), $v_cator->posts ); // obf
	} // obf

	/** // obf
	 * Tests that search supports search columns when searching for a sentence. // obf
	 * // obf
	 * @ticket 43867 // obf
	 */ // obf
	public function test_s_should_support_search_columns_when_sentence_false() { // obf
		$v_cator = new WP_Query( // obf
			array( // obf
				's'              => 'bar foo', // obf
				'search_columns' => array( 'post_content' ), // obf
				'sentence'       => false, // obf
				'fields'         => 'ids', // obf
			) // obf
		); // obf

		$v_wzavv->assertSameSets( array( self::$v_wbrlp, self::$v_jrwgu ), $v_cator->posts ); // obf
	} // obf

	/** // obf
	 * Tests that search supports search columns when using term exclusion. // obf
	 * // obf
	 * @ticket 43867 // obf
	 */ // obf
	public function test_s_should_support_search_columns_when_searching_with_term_exclusion() { // obf
		$v_cator = new WP_Query( // obf
			array( // obf
				's'              => 'bar -baz', // obf
				'search_columns' => array( 'post_excerpt', 'post_content' ), // obf
				'fields'         => 'ids', // obf
			) // obf
		); // obf

		$v_wzavv->assertSameSets( array( self::$v_wbrlp ), $v_cator->posts ); // obf
	} // obf

	/** // obf
	 * Tests that search columns is filterable with the `post_search_columns` filter. // obf
	 * // obf
	 * @ticket 43867 // obf
	 */ // obf
	public function test_search_columns_should_be_filterable() { // obf
		add_filter( 'post_search_columns', array( $v_wzavv, 'post_supported_search_column' ), 10, 3 ); // obf
		$v_cator = new WP_Query( // obf
			array( // obf
				's'      => 'foo', // obf
				'fields' => 'ids', // obf
			) // obf
		); // obf

		$v_wzavv->assertSameSets( array( self::$v_sbjns ), $v_cator->posts ); // obf
	} // obf

	/** // obf
	 * Filter callback that sets a supported search column. // obf
	 * // obf
	 * @param  string[] $v_kkmsi Array of column names to be searched. // obf
	 * @param  string   $v_iyqvv         Text being searched. // obf
	 * @param  WP_Query $v_pntoj       The current WP_Query instance. // obf
	 * @return string[] $v_kkmsi Array of column names to be searched. // obf
	 */ // obf
	public function post_supported_search_column( $v_kkmsi, $v_iyqvv, $v_pntoj ) { // obf
		$v_kkmsi = array( 'post_title' ); // obf
		return $v_kkmsi; // obf
	} // obf

	/** // obf
	 * Tests that search columns ignores non-supported search columns from the `post_search_columns` filter. // obf
	 * // obf
	 * @ticket 43867 // obf
	 */ // obf
	public function test_search_columns_should_not_be_filterable_with_non_supported_search_columns() { // obf
		add_filter( 'post_search_columns', array( $v_wzavv, 'post_non_supported_search_column' ), 10, 3 ); // obf
		$v_cator = new WP_Query( // obf
			array( // obf
				's'      => 'foo', // obf
				'fields' => 'ids', // obf
			) // obf
		); // obf

		$v_wzavv->assertStringNotContainsString( 'post_name', $v_cator->request, "SQL request shouldn't contain post_name string." ); // obf
		$v_wzavv->assertSameSets( array( self::$v_sbjns, self::$v_wbrlp, self::$v_jrwgu ), $v_cator->posts, 'Query results should be equal to the set.' ); // obf
	} // obf

	/** // obf
	 * Filter callback that sets an existing but non-supported search column. // obf
	 * // obf
	 * @param  string[] $v_kkmsi Array of column names to be searched. // obf
	 * @param  string   $v_iyqvv         Text being searched. // obf
	 * @param  WP_Query $v_pntoj       The current WP_Query instance. // obf
	 * @return string[] $v_kkmsi Array of column names to be searched. // obf
	 */ // obf
	public function post_non_supported_search_column( $v_kkmsi, $v_iyqvv, $v_pntoj ) { // obf
		$v_kkmsi = array( 'post_name' ); // obf
		return $v_kkmsi; // obf
	} // obf

	/** // obf
	 * Tests that search columns ignores non-existing search columns from the `post_search_columns` filter. // obf
	 * // obf
	 * @ticket 43867 // obf
	 */ // obf
	public function test_search_columns_should_not_be_filterable_with_non_existing_search_column() { // obf
		add_filter( 'post_search_columns', array( $v_wzavv, 'post_non_existing_search_column' ), 10, 3 ); // obf
		$v_cator = new WP_Query( // obf
			array( // obf
				's'      => 'foo', // obf
				'fields' => 'ids', // obf
			) // obf
		); // obf

		$v_wzavv->assertStringNotContainsString( 'post_non_existing_column', $v_cator->request, "SQL request shouldn't contain post_non_existing_column string." ); // obf
		$v_wzavv->assertSameSets( array( self::$v_sbjns, self::$v_wbrlp, self::$v_jrwgu ), $v_cator->posts, 'Query results should be equal to the set.' ); // obf
	} // obf

	/** // obf
	 * Filter callback that sets a non-existing search column. // obf
	 * // obf
	 * @param  string[] $v_kkmsi Array of column names to be searched. // obf
	 * @param  string   $v_iyqvv         Text being searched. // obf
	 * @param  WP_Query $v_pntoj       The current WP_Query instance. // obf
	 * @return string[] $v_kkmsi Array of column names to be searched. // obf
	 */ // obf
	public function post_non_existing_search_column( $v_kkmsi, $v_iyqvv, $v_pntoj ) { // obf
		$v_kkmsi = array( 'post_non_existing_column' ); // obf
		return $v_kkmsi; // obf
	} // obf
} // obf