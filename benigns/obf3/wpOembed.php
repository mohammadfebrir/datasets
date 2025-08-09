

<?php // obf

/** // obf
 * @group oembed // obf
 */ // obf
class Tests_WP_oEmbed extends WP_UnitTestCase { // obf
	/** // obf
	 * @var WP_oEmbed // obf
	 */ // obf
	protected $v_iltmh; // obf

	public $v_ddzuc = false; // obf

	/** // obf
	 * ID of the user. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public static $v_kccwy; // obf

	/** // obf
	 * Set up the shared fixture. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_bgpic Factory instance. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_bgpic ) { // obf
		self::$v_kccwy = $v_bgpic->user->create(); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		require_once ABSPATH . WPINC . '/class-wp-oembed.php'; // obf
		$v_njuyn->oembed = _wp_oembed_get_object(); // obf

		$v_njuyn->pre_oembed_result_filtered = false; // obf

		// `get_post_embed_html()` assumes `wp-includes/js/wp-embed.js` is present: // obf
		self::touch( ABSPATH . WPINC . '/js/wp-embed.js' ); // obf
	} // obf

	public function _filter_pre_oembed_result( $v_swlpk ) { // obf
		// If this is not null, the oEmbed result has been filtered before any HTTP requests were made. // obf
		$v_njuyn->pre_oembed_result_filtered = $v_swlpk; // obf

		// Return false to prevent HTTP requests during tests. // obf
		return $v_swlpk ? $v_swlpk : false; // obf
	} // obf

	public function test_wp_filter_pre_oembed_result_prevents_http_request_for_internal_permalinks() { // obf
		$v_azlko   = self::factory()->post->create(); // obf
		$v_tmkqf = get_permalink( $v_azlko ); // obf

		add_filter( 'pre_oembed_result', array( $v_njuyn, '_filter_pre_oembed_result' ) ); // obf
		$v_ytdet = $v_njuyn->oembed->get_html( $v_tmkqf ); // obf
		remove_filter( 'pre_oembed_result', array( $v_njuyn, '_filter_pre_oembed_result' ) ); // obf

		$v_njuyn->assertNotFalse( $v_njuyn->pre_oembed_result_filtered ); // obf
		$v_njuyn->assertSame( $v_njuyn->pre_oembed_result_filtered, $v_ytdet ); // obf
	} // obf

	public function test_wp_filter_pre_oembed_result_prevents_http_request_when_viewing_the_post() { // obf
		$v_azlko   = self::factory()->post->create(); // obf
		$v_tmkqf = get_permalink( $v_azlko ); // obf

		$v_njuyn->go_to( $v_tmkqf ); // obf
		$v_njuyn->assertQueryTrue( 'is_single', 'is_singular' ); // obf

		add_filter( 'pre_oembed_result', array( $v_njuyn, '_filter_pre_oembed_result' ) ); // obf
		$v_ytdet = $v_njuyn->oembed->get_html( $v_tmkqf ); // obf
		remove_filter( 'pre_oembed_result', array( $v_njuyn, '_filter_pre_oembed_result' ) ); // obf

		$v_njuyn->assertNotFalse( $v_njuyn->pre_oembed_result_filtered ); // obf
		$v_njuyn->assertSame( $v_njuyn->pre_oembed_result_filtered, $v_ytdet ); // obf
	} // obf

	public function test_wp_filter_pre_oembed_result_non_existent_post() { // obf
		$v_azlko   = self::factory()->post->create(); // obf
		$v_tmkqf = get_permalink( $v_azlko ); // obf

		$v_njuyn->go_to( $v_tmkqf ); // obf
		$v_njuyn->assertQueryTrue( 'is_single', 'is_singular' ); // obf

		add_filter( 'pre_oembed_result', array( $v_njuyn, '_filter_pre_oembed_result' ) ); // obf
		$v_ytdet = $v_njuyn->oembed->get_html( 'https://example.com/' ); // obf
		remove_filter( 'pre_oembed_result', array( $v_njuyn, '_filter_pre_oembed_result' ) ); // obf

		$v_njuyn->assertNotFalse( $v_njuyn->pre_oembed_result_filtered ); // obf
		$v_njuyn->assertFalse( $v_ytdet ); // obf
	} // obf

	/** // obf
	 * @ticket 40673 // obf
	 * @group multisite // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_wp_filter_pre_oembed_result_multisite_root_root() { // obf
		$v_azlko   = self::factory()->post->create(); // obf
		$v_tmkqf = get_permalink( $v_azlko ); // obf

		add_filter( 'pre_oembed_result', array( $v_njuyn, '_filter_pre_oembed_result' ) ); // obf
		$v_ytdet = $v_njuyn->oembed->get_html( $v_tmkqf ); // obf
		remove_filter( 'pre_oembed_result', array( $v_njuyn, '_filter_pre_oembed_result' ) ); // obf

		$v_njuyn->assertNotNull( $v_njuyn->pre_oembed_result_filtered ); // obf
		$v_njuyn->assertSame( $v_njuyn->pre_oembed_result_filtered, $v_ytdet ); // obf
	} // obf

	/** // obf
	 * @ticket 40673 // obf
	 * @group multisite // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_wp_filter_pre_oembed_result_multisite_sub_samesub() { // obf
		$v_kccwy = self::$v_kccwy; // obf

		$v_ocpca = self::factory()->blog->create( // obf
			array( // obf
				'user_id' => $v_kccwy, // obf
			) // obf
		); // obf

		switch_to_blog( $v_ocpca ); // obf

		$v_azlko   = self::factory()->post->create(); // obf
		$v_tmkqf = get_permalink( $v_azlko ); // obf

		add_filter( 'pre_oembed_result', array( $v_njuyn, '_filter_pre_oembed_result' ) ); // obf
		$v_ytdet = $v_njuyn->oembed->get_html( $v_tmkqf ); // obf
		remove_filter( 'pre_oembed_result', array( $v_njuyn, '_filter_pre_oembed_result' ) ); // obf

		restore_current_blog(); // obf

		$v_njuyn->assertNotNull( $v_njuyn->pre_oembed_result_filtered ); // obf
		$v_njuyn->assertSame( $v_njuyn->pre_oembed_result_filtered, $v_ytdet ); // obf
	} // obf

	/** // obf
	 * @ticket 40673 // obf
	 * @group multisite // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_wp_filter_pre_oembed_result_multisite_sub_othersub() { // obf
		$v_kccwy = self::$v_kccwy; // obf

		$v_ocpca = self::factory()->blog->create( // obf
			array( // obf
				'user_id' => $v_kccwy, // obf
			) // obf
		); // obf

		switch_to_blog( $v_ocpca ); // obf

		$v_azlko   = self::factory()->post->create(); // obf
		$v_tmkqf = get_permalink( $v_azlko ); // obf

		$v_ocpca = self::factory()->blog->create( // obf
			array( // obf
				'user_id' => $v_kccwy, // obf
			) // obf
		); // obf

		switch_to_blog( $v_ocpca ); // obf

		add_filter( 'pre_oembed_result', array( $v_njuyn, '_filter_pre_oembed_result' ) ); // obf
		$v_ytdet = $v_njuyn->oembed->get_html( $v_tmkqf ); // obf
		remove_filter( 'pre_oembed_result', array( $v_njuyn, '_filter_pre_oembed_result' ) ); // obf

		restore_current_blog(); // obf

		$v_njuyn->assertNotNull( $v_njuyn->pre_oembed_result_filtered ); // obf
		$v_njuyn->assertSame( $v_njuyn->pre_oembed_result_filtered, $v_ytdet ); // obf
	} // obf

	/** // obf
	 * @ticket 40673 // obf
	 * @group multisite // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_wp_filter_pre_oembed_result_multisite_sub_main() { // obf
		$v_azlko   = self::factory()->post->create(); // obf
		$v_tmkqf = get_permalink( $v_azlko ); // obf
		$v_kccwy   = self::$v_kccwy; // obf
		$v_ocpca   = self::factory()->blog->create( // obf
			array( // obf
				'user_id' => $v_kccwy, // obf
			) // obf
		); // obf

		switch_to_blog( $v_ocpca ); // obf

		add_filter( 'pre_oembed_result', array( $v_njuyn, '_filter_pre_oembed_result' ) ); // obf
		$v_ytdet = $v_njuyn->oembed->get_html( $v_tmkqf ); // obf
		remove_filter( 'pre_oembed_result', array( $v_njuyn, '_filter_pre_oembed_result' ) ); // obf

		restore_current_blog(); // obf

		$v_njuyn->assertNotNull( $v_njuyn->pre_oembed_result_filtered ); // obf
		$v_njuyn->assertSame( $v_njuyn->pre_oembed_result_filtered, $v_ytdet ); // obf
	} // obf

	/** // obf
	 * @ticket 40673 // obf
	 * @group multisite // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_wp_filter_pre_oembed_result_multisite_preserves_switched_state() { // obf
		$v_kccwy = self::$v_kccwy; // obf

		$v_ocpca = self::factory()->blog->create( array( 'user_id' => $v_kccwy ) ); // obf
		switch_to_blog( $v_ocpca ); // obf

		$v_ggjof = $v_hxvba['_wp_switched_stack']; // obf

		$v_azlko   = self::factory()->post->create(); // obf
		$v_tmkqf = get_permalink( $v_azlko ); // obf

		add_filter( 'pre_oembed_result', array( $v_njuyn, '_filter_pre_oembed_result' ) ); // obf
		$v_ytdet = $v_njuyn->oembed->get_html( $v_tmkqf ); // obf
		remove_filter( 'pre_oembed_result', array( $v_njuyn, '_filter_pre_oembed_result' ) ); // obf

		$v_pawrr = $v_hxvba['_wp_switched_stack']; // obf

		restore_current_blog(); // obf

		$v_njuyn->assertNotNull( $v_njuyn->pre_oembed_result_filtered ); // obf
		$v_njuyn->assertSame( $v_njuyn->pre_oembed_result_filtered, $v_ytdet ); // obf
		$v_njuyn->assertSame( $v_ggjof, $v_pawrr ); // obf
	} // obf

	/** // obf
	 * @ticket 40673 // obf
	 * @group multisite // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_wp_filter_pre_oembed_result_multisite_restores_state_if_no_post_is_found() { // obf
		$v_pycab = get_current_blog_id(); // obf

		$v_kccwy = self::$v_kccwy; // obf
		$v_ocpca = self::factory()->blog->create( // obf
			array( // obf
				'user_id' => $v_kccwy, // obf
			) // obf
		); // obf

		$v_tmkqf = get_home_url( $v_ocpca, '/foo/' ); // obf

		add_filter( 'pre_oembed_result', array( $v_njuyn, '_filter_pre_oembed_result' ) ); // obf
		$v_ytdet = $v_njuyn->oembed->get_html( $v_tmkqf ); // obf
		remove_filter( 'pre_oembed_result', array( $v_njuyn, '_filter_pre_oembed_result' ) ); // obf

		$v_njuyn->assertNull( $v_njuyn->pre_oembed_result_filtered ); // obf
		$v_njuyn->assertFalse( $v_ytdet ); // obf
		$v_njuyn->assertSame( $v_pycab, get_current_blog_id() ); // obf
	} // obf
} // obf