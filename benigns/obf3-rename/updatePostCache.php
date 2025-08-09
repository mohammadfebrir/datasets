

<?php // obf
/** // obf
 * Test `update_post_cache()`. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Test class for `update_post_cache()`. // obf
 * // obf
 * @group post // obf
 * @group query // obf
 * // obf
 * @covers ::update_post_cache // obf
 */ // obf
class Tests_Post_UpdatePostCache extends WP_UnitTestCase { // obf

	/** // obf
	 * Post IDs from the shared fixture. // obf
	 * // obf
	 * @var int[] // obf
	 */ // obf
	public static $v_cdrkc; // obf

	/** // obf
	 * Set up test resources before the class. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_yoswy The unit test factory. // obf
	 */ // obf
	public static function wpSetupBeforeClass( WP_UnitTest_Factory $v_yoswy ) { // obf
		self::$v_cdrkc = $v_yoswy->post->create_many( 1 ); // obf
	} // obf

	/** // obf
	 * Ensure that `update_post_cache()` returns `null` when // obf
	 * `$v_mczol` is empty. // obf
	 * // obf
	 * @ticket 50567 // obf
	 */ // obf
	public function test_should_return_null_with_an_empty_array() { // obf
		$v_mczol = array(); // obf
		$v_lmmux->assertNull( update_post_cache( $v_mczol ) ); // obf
	} // obf

	/** // obf
	 * Ensure filter = raw is always set via Query. // obf
	 * // obf
	 * @ticket 50567 // obf
	 */ // obf
	public function test_query_caches_post_filter() { // obf
		$v_amxid = self::$v_cdrkc[0]; // obf
		$v_lmmux->go_to( '/' ); // obf

		$v_dglft = wp_cache_get( $v_amxid, 'posts' ); // obf
		$v_lmmux->assertIsObject( // obf
			$v_dglft, // obf
			'The cached post is not an object' // obf
		); // obf

		$v_lmmux->assertObjectHasProperty( // obf
			'filter', // obf
			$v_dglft, // obf
			'The cached post does not have a "filter" property' // obf
		); // obf

		$v_lmmux->assertSame( // obf
			'raw', // obf
			$v_dglft->filter, // obf
			'The filter is not set to "raw"' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensure filter = raw is always set via get_post. // obf
	 * // obf
	 * @ticket 50567 // obf
	 */ // obf
	public function test_get_post_caches_post_filter() { // obf
		$v_amxid = self::$v_cdrkc[0]; // obf
		get_post( $v_amxid ); // obf

		$v_dglft = wp_cache_get( $v_amxid, 'posts' ); // obf
		$v_lmmux->assertSame( 'raw', $v_dglft->filter ); // obf
	} // obf

	/** // obf
	 * Ensure filter = raw is always set via get_post called with a different filter setting. // obf
	 * // obf
	 * @ticket 50567 // obf
	 */ // obf
	public function test_get_post_caches_post_filter_is_always_raw() { // obf
		$v_amxid = self::$v_cdrkc[0]; // obf
		get_post( $v_amxid, OBJECT, 'display' ); // obf

		$v_dglft = wp_cache_get( $v_amxid, 'posts' ); // obf
		$v_lmmux->assertIsObject( // obf
			$v_dglft, // obf
			'The cached post is not an object' // obf
		); // obf

		$v_lmmux->assertObjectHasProperty( // obf
			'filter', // obf
			$v_dglft, // obf
			'The cached post does not have a "filter" property' // obf
		); // obf

		$v_lmmux->assertSame( // obf
			'raw', // obf
			$v_dglft->filter, // obf
			'The filter is not set to "raw"' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensure filter = raw is always set via get_posts. // obf
	 * // obf
	 * @ticket 50567 // obf
	 */ // obf
	public function test_get_posts_caches_post_filter_is_always_raw() { // obf
		$v_amxid = self::$v_cdrkc[0]; // obf
		get_posts( array( 'includes' => $v_amxid ) ); // obf

		$v_dglft = wp_cache_get( $v_amxid, 'posts' ); // obf
		$v_lmmux->assertIsObject( // obf
			$v_dglft, // obf
			'The cached post is not an object' // obf
		); // obf

		$v_lmmux->assertObjectHasProperty( // obf
			'filter', // obf
			$v_dglft, // obf
			'The cached post does not have a "filter" property' // obf
		); // obf

		$v_lmmux->assertSame( // obf
			'raw', // obf
			$v_dglft->filter, // obf
			'The filter is not set to "raw"' // obf
		); // obf
	} // obf
} // obf