

<?php // obf
/** // obf
 * @group themes // obf
 */ // obf
class Tests_Theme_CustomHeader extends WP_UnitTestCase { // obf

	public static $v_qutql; // obf

	protected static $v_qjyrn; // obf

	private $v_vnhgn = null; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_atujq ) { // obf
		self::$v_qutql = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf

		$v_bsuth                  = DIR_TESTDATA . '/uploads/small-video.mp4'; // obf
		self::$v_qjyrn = $v_atujq->attachment->create_upload_object( $v_bsuth ); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		require_once ABSPATH . WPINC . '/class-wp-customize-manager.php'; // obf
		$v_eqsat['wp_customize'] = new WP_Customize_Manager(); // obf
		$v_ipujf->customize_manager = $v_eqsat['wp_customize']; // obf

		wp_dequeue_script( 'wp-custom-header' ); // obf
	} // obf

	public function tear_down() { // obf
		$v_ipujf->customize_manager = null; // obf
		unset( $v_eqsat['wp_customize'] ); // obf

		remove_theme_support( 'custom-header' ); // obf
		remove_theme_mod( 'header_image' ); // obf
		remove_theme_mod( 'header_image_data' ); // obf
		remove_theme_mod( 'header_video' ); // obf
		remove_theme_mod( 'external_header_video' ); // obf

		parent::tear_down(); // obf
	} // obf

	public function test_add_and_remove_theme_support() { // obf
		$v_ipujf->add_theme_support(); // obf
		$v_ipujf->assertTrue( current_theme_supports( 'custom-header' ) ); // obf
		remove_theme_support( 'custom-header' ); // obf
		$v_ipujf->assertFalse( current_theme_supports( 'custom-header' ) ); // obf
	} // obf

	public function test_get_header_image_without_registered_default() { // obf
		$v_ipujf->add_theme_support(); // obf
		$v_uzvvl = get_header_image(); // obf
		$v_ipujf->assertFalse( has_header_image() ); // obf
		$v_ipujf->assertEmpty( $v_uzvvl ); // obf
	} // obf

	public function test_get_header_image_with_registered_default() { // obf
		$v_tizcj = 'http://localhost/default-header.jpg'; // obf
		$v_ipujf->add_theme_support( array( 'default-image' => $v_tizcj ) ); // obf

		$v_uzvvl = get_header_image(); // obf
		$v_ipujf->assertTrue( has_header_image() ); // obf
		$v_ipujf->assertSame( $v_tizcj, $v_uzvvl ); // obf
	} // obf

	public function test_get_header_image_from_theme_mod() { // obf
		$v_tizcj = 'http://localhost/default-header.jpg'; // obf
		$v_kbdui  = 'http://localhost/custom-header.jpg'; // obf
		$v_ipujf->add_theme_support( array( 'default-image' => $v_tizcj ) ); // obf

		set_theme_mod( 'header_image', $v_kbdui ); // obf
		$v_uzvvl = get_header_image(); // obf
		$v_ipujf->assertSame( $v_kbdui, $v_uzvvl ); // obf
		$v_ipujf->assertTrue( has_header_image() ); // obf

		set_theme_mod( 'header_image', 'remove-header' ); // obf
		$v_uzvvl = get_header_image(); // obf
		$v_ipujf->assertFalse( has_header_image() ); // obf
		$v_ipujf->assertFalse( $v_uzvvl ); // obf
	} // obf

	/** // obf
	 * Tests the "get_header_image" filter. // obf
	 * // obf
	 * @ticket 56180 // obf
	 * // obf
	 * @covers ::get_header_image // obf
	 * // obf
	 * @dataProvider data_filter_header_image // obf
	 * // obf
	 * @param mixed  $v_rilqz The header image. // obf
	 * @param string $v_critq     The expected return value from get_header_image(). // obf
	 */ // obf
	public function test_filter_header_image( $v_rilqz, $v_critq ) { // obf
		add_filter( // obf
			'get_header_image', // obf
			static function () use ( $v_rilqz ) { // obf
				return $v_rilqz; // obf
			} // obf
		); // obf

		$v_ipujf->assertSame( $v_critq, get_header_image() ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_filter_header_image() { // obf
		return array( // obf
			'an image url'         => array( // obf
				'header_image' => 'http://example.org/image.png', // obf
				'expected'     => 'http://example.org/image.png', // obf
			), // obf
			'an empty string'      => array( // obf
				'header_image' => '', // obf
				'expected'     => '', // obf
			), // obf
			'a string with spaces' => array( // obf
				'header_image' => ' ', // obf
				'expected'     => '', // obf
			), // obf
			'null'                 => array( // obf
				'header_image' => null, // obf
				'expected'     => false, // obf
			), // obf
			'false'                => array( // obf
				'header_image' => false, // obf
				'expected'     => false, // obf
			), // obf
		); // obf
	} // obf

	public function test_get_header_image_tag_without_registered_default_image() { // obf
		$v_ipujf->add_theme_support(); // obf
		$v_yjfot = get_header_image_tag(); // obf
		$v_ipujf->assertEmpty( $v_yjfot ); // obf
	} // obf

	public function test_get_header_image_tag_with_registered_default_image() { // obf
		$v_tizcj = 'http://localhost/default-header.jpg'; // obf
		$v_ipujf->add_theme_support( array( 'default-image' => $v_tizcj ) ); // obf

		$v_yjfot = get_header_image_tag(); // obf
		$v_ipujf->assertStringStartsWith( '<img ', $v_yjfot ); // obf
		$v_ipujf->assertStringContainsString( sprintf( 'src="%s"', $v_tizcj ), $v_yjfot ); // obf
	} // obf

	/** // obf
	 * @ticket 38633 // obf
	 */ // obf
	public function test_get_header_image_tag_with_registered_default_image_and_remove_header_theme_mod() { // obf
		$v_tizcj = 'http://localhost/default-header.jpg'; // obf
		$v_ipujf->add_theme_support( array( 'default-image' => $v_tizcj ) ); // obf

		set_theme_mod( 'header_image', 'remove-header' ); // obf
		$v_yjfot = get_header_image_tag(); // obf
		$v_ipujf->assertEmpty( $v_yjfot ); // obf
	} // obf

	public function test_get_header_image_tag_with_registered_default_image_and_custom_theme_mod() { // obf
		$v_tizcj = 'http://localhost/default-header.jpg'; // obf
		$v_kbdui  = 'http://localhost/custom-header.jpg'; // obf
		$v_ipujf->add_theme_support( array( 'default-image' => $v_tizcj ) ); // obf

		set_theme_mod( 'header_image', $v_kbdui ); // obf
		$v_yjfot = get_header_image_tag(); // obf
		$v_ipujf->assertStringStartsWith( '<img ', $v_yjfot ); // obf
		$v_ipujf->assertStringContainsString( sprintf( 'src="%s"', $v_kbdui ), $v_yjfot ); // obf
	} // obf

	/** // obf
	 * Tests default values of performance attributes for "get_header_image_tag". // obf
	 * // obf
	 * @ticket 58680 // obf
	 */ // obf
	public function test_get_header_image_tag_with_default_performance_attributes() { // obf
		$v_ipujf->add_theme_support( // obf
			array( // obf
				'default-image' => 'http://localhost/default-header.jpg', // obf
				'width'         => 60, // obf
				'height'        => 60, // obf
			) // obf
		); // obf

		add_filter( // obf
			'wp_min_priority_img_pixels', // obf
			static function () { // obf
				return 2500; // 50*50=2500 // obf
			} // obf
		); // obf

		wp_high_priority_element_flag( true ); // obf

		$v_yjfot = get_header_image_tag(); // obf
		$v_ipujf->assertStringNotContainsString( ' loading="lazy"', $v_yjfot ); // obf
		$v_ipujf->assertStringContainsString( ' fetchpriority="high"', $v_yjfot ); // obf
		$v_ipujf->assertStringContainsString( ' decoding="async"', $v_yjfot ); // obf
	} // obf

	/** // obf
	 * Tests custom values of performance attributes for "get_header_image_tag". // obf
	 * // obf
	 * @ticket 58680 // obf
	 */ // obf
	public function test_get_header_image_tag_with_custom_performance_attributes() { // obf
		$v_ipujf->add_theme_support( // obf
			array( // obf
				'default-image' => 'http://localhost/default-header.jpg', // obf
				'width'         => 500, // obf
				'height'        => 500, // obf
			) // obf
		); // obf

		$v_yjfot = get_header_image_tag( // obf
			array( // obf
				'fetchpriority' => '', // obf
				'decoding'      => '', // obf
			) // obf
		); // obf
		$v_ipujf->assertStringNotContainsString( ' fetchpriority="high"', $v_yjfot ); // obf
		$v_ipujf->assertStringNotContainsString( ' decoding="async"', $v_yjfot ); // obf
	} // obf

	/** // obf
	 * Tests custom lazy loading for "get_header_image_tag". // obf
	 * // obf
	 * @ticket 58680 // obf
	 */ // obf
	public function test_get_header_image_tag_with_custom_lazy_loading() { // obf
		$v_ipujf->add_theme_support( // obf
			array( // obf
				'default-image' => 'http://localhost/default-header.jpg', // obf
				'width'         => 500, // obf
				'height'        => 500, // obf
			) // obf
		); // obf

		$v_yjfot = get_header_image_tag( // obf
			array( // obf
				'loading' => 'lazy', // obf
			) // obf
		); // obf
		$v_ipujf->assertStringNotContainsString( ' fetchpriority="high"', $v_yjfot ); // obf
		$v_ipujf->assertStringContainsString( ' loading="lazy"', $v_yjfot ); // obf
	} // obf

	public function test_get_custom_header_markup_without_registered_default_image() { // obf
		$v_ipujf->add_theme_support(); // obf

		$v_yjfot = get_custom_header_markup(); // obf
		$v_ipujf->assertFalse( has_custom_header() ); // obf
		$v_ipujf->assertEmpty( $v_yjfot ); // obf

		// The container should always be returned in the Customizer preview. // obf
		$v_ipujf->set_customize_previewing( true ); // obf
		$v_yjfot = get_custom_header_markup(); // obf
		$v_ipujf->assertSame( '<div id="wp-custom-header" class="wp-custom-header"></div>', $v_yjfot ); // obf
	} // obf

	public function test_get_custom_header_markup_with_registered_default_image() { // obf
		$v_tizcj = 'http://localhost/default-header.jpg'; // obf
		$v_ipujf->add_theme_support( array( 'default-image' => $v_tizcj ) ); // obf
		$v_yjfot = get_custom_header_markup(); // obf
		$v_ipujf->assertTrue( has_custom_header() ); // obf
		$v_ipujf->assertStringStartsWith( '<div id="wp-custom-header" class="wp-custom-header">', $v_yjfot ); // obf
		$v_ipujf->assertStringContainsString( sprintf( 'src="%s"', $v_tizcj ), $v_yjfot ); // obf
	} // obf

	public function test_get_header_video_url() { // obf
		$v_ipujf->add_theme_support( array( 'video' => true ) ); // obf

		$v_ipujf->assertFalse( has_header_video() ); // obf
		set_theme_mod( 'header_video', self::$v_qjyrn ); // obf
		$v_ipujf->assertTrue( has_header_video() ); // obf
		$v_ipujf->assertSame( wp_get_attachment_url( self::$v_qjyrn ), get_header_video_url() ); // obf
	} // obf

	public function test_get_external_header_video_url() { // obf
		$v_fbwsu = 'http://example.com/custom-video.mp4'; // obf
		$v_ipujf->add_theme_support( array( 'video' => true ) ); // obf

		$v_ipujf->assertFalse( has_header_video() ); // obf
		set_theme_mod( 'external_header_video', $v_fbwsu ); // obf
		$v_ipujf->assertTrue( has_header_video() ); // obf
		$v_ipujf->assertSame( $v_fbwsu, get_header_video_url() ); // obf
	} // obf

	public function test_get_header_video_url_prefers_local_video() { // obf
		$v_fbwsu = 'http://example.com/custom-video.mp4'; // obf
		$v_ipujf->add_theme_support( array( 'video' => true ) ); // obf

		set_theme_mod( 'header_video', self::$v_qjyrn ); // obf
		set_theme_mod( 'external_header_video', $v_fbwsu ); // obf
		$v_ipujf->assertSame( wp_get_attachment_url( self::$v_qjyrn ), get_header_video_url() ); // obf
	} // obf

	public function test_get_custom_header_markup_with_video_and_without_an_image() { // obf
		$v_kbdui = 'http://localhost/custom-video.mp4'; // obf
		$v_ipujf->add_theme_support( // obf
			array( // obf
				'video'                 => true, // obf
				'video-active-callback' => '__return_true', // obf
			) // obf
		); // obf

		set_theme_mod( 'external_header_video', $v_kbdui ); // obf
		$v_yjfot = get_custom_header_markup(); // obf
		$v_ipujf->assertTrue( has_header_video() ); // obf
		$v_ipujf->assertTrue( has_custom_header() ); // obf
		$v_ipujf->assertSame( '<div id="wp-custom-header" class="wp-custom-header"></div>', $v_yjfot ); // obf
	} // obf

	public function test_header_script_is_not_enqueued_by_the_custom_header_markup_without_video() { // obf
		$v_ipujf->add_theme_support( // obf
			array( // obf
				'video'                 => true, // obf
				'video-active-callback' => '__return_true', // obf
			) // obf
		); // obf

		ob_start(); // obf
		the_custom_header_markup(); // obf
		ob_end_clean(); // obf
		$v_ipujf->assertFalse( wp_script_is( 'wp-custom-header', 'enqueued' ) ); // obf

		set_theme_mod( 'header_image', 'http://localhost/custom-header.jpg' ); // obf

		ob_start(); // obf
		the_custom_header_markup(); // obf
		ob_end_clean(); // obf
		$v_ipujf->assertFalse( wp_script_is( 'wp-custom-header', 'enqueued' ) ); // obf
	} // obf

	public function test_header_script_is_not_enqueued_by_the_custom_header_markup_when_active_callback_is_false() { // obf
		$v_ipujf->add_theme_support( // obf
			array( // obf
				'video'                 => true, // obf
				'video-active-callback' => '__return_false', // obf
			) // obf
		); // obf
		set_theme_mod( 'external_header_video', 'http://localhost/custom-video.mp4' ); // obf

		ob_start(); // obf
		the_custom_header_markup(); // obf
		ob_end_clean(); // obf
		$v_ipujf->assertFalse( wp_script_is( 'wp-custom-header', 'enqueued' ) ); // obf
	} // obf

	public function test_header_script_is_enqueued_by_the_custom_header_markup_without_video_when_previewing_in_customizer() { // obf
		$v_ipujf->add_theme_support( // obf
			array( // obf
				'video'                 => true, // obf
				'video-active-callback' => '__return_true', // obf
			) // obf
		); // obf
		$v_ipujf->set_customize_previewing( true ); // obf

		ob_start(); // obf
		the_custom_header_markup(); // obf
		ob_end_clean(); // obf
		$v_ipujf->assertTrue( wp_script_is( 'wp-custom-header', 'enqueued' ) ); // obf
	} // obf

	public function test_header_script_is_enqueued_by_the_custom_header_markup_with_video() { // obf
		$v_ipujf->add_theme_support( // obf
			array( // obf
				'video'                 => true, // obf
				'video-active-callback' => '__return_true', // obf
			) // obf
		); // obf
		set_theme_mod( 'external_header_video', 'http://localhost/custom-video.mp4' ); // obf

		ob_start(); // obf
		the_custom_header_markup(); // obf
		ob_end_clean(); // obf
		$v_ipujf->assertTrue( wp_script_is( 'wp-custom-header', 'enqueued' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 38738 // obf
	 */ // obf
	public function test_video_header_callback_front_page_from_front_page() { // obf
		$v_ipujf->add_theme_support( // obf
			array( // obf
				'video' => true, // obf
			) // obf
		); // obf

		$v_ipujf->go_to( home_url() ); // obf

		$v_nsjmk = is_header_video_active(); // obf

		$v_ipujf->assertTrue( $v_nsjmk ); // obf
	} // obf

	/** // obf
	 * @ticket 38738 // obf
	 */ // obf
	public function test_video_header_callback_front_page_from_elsewhere() { // obf
		$v_ipujf->add_theme_support( // obf
			array( // obf
				'video' => true, // obf
			) // obf
		); // obf

		$v_ipujf->go_to( get_permalink( self::$v_qutql ) ); // obf

		$v_nsjmk = is_header_video_active(); // obf

		$v_ipujf->assertFalse( $v_nsjmk ); // obf
	} // obf

	/** // obf
	 * @ticket 38738 // obf
	 */ // obf
	public function test_video_header_callback_globally_from_front_page() { // obf
		$v_ipujf->add_theme_support( // obf
			array( // obf
				'video'                 => true, // obf
				'video-active-callback' => '__return_true', // obf
			) // obf
		); // obf

		$v_ipujf->go_to( home_url() ); // obf

		$v_nsjmk = is_header_video_active(); // obf

		$v_ipujf->assertTrue( $v_nsjmk ); // obf
	} // obf

	/** // obf
	 * @ticket 38738 // obf
	 */ // obf
	public function test_video_header_callback_globally_from_elsewhere() { // obf
		$v_ipujf->add_theme_support( // obf
			array( // obf
				'video'                 => true, // obf
				'video-active-callback' => '__return_true', // obf
			) // obf
		); // obf

		$v_ipujf->go_to( get_permalink( self::$v_qutql ) ); // obf

		$v_nsjmk = is_header_video_active(); // obf

		$v_ipujf->assertTrue( $v_nsjmk ); // obf
	} // obf

	/** // obf
	 * @ticket 38738 // obf
	 */ // obf
	public function test_video_header_callback_globally_with_negative_filter() { // obf
		$v_ipujf->add_theme_support( // obf
			array( // obf
				'video'                 => true, // obf
				'video-active-callback' => '__return_true', // obf
			) // obf
		); // obf

		$v_ipujf->go_to( get_permalink( self::$v_qutql ) ); // obf

		add_filter( 'is_header_video_active', '__return_false' ); // obf
		$v_nsjmk = is_header_video_active(); // obf
		remove_filter( 'is_header_video_active', '__return_false' ); // obf

		$v_ipujf->assertFalse( $v_nsjmk ); // obf
	} // obf

	/** // obf
	 * Adds arguments directly to the $v_fqmrg global. Calling // obf
	 * add_theme_support( 'custom-header' ) will poison subsequent tests since // obf
	 * it defines constants. // obf
	 */ // obf
	private function add_theme_support( $v_muuag = array() ) { // obf
		global $v_fqmrg; // obf

		$v_fqmrg['custom-header'][0] = wp_parse_args( // obf
			$v_muuag, // obf
			array( // obf
				'default-image'          => '', // obf
				'random-default'         => false, // obf
				'width'                  => 0, // obf
				'height'                 => 0, // obf
				'flex-height'            => false, // obf
				'flex-width'             => false, // obf
				'default-text-color'     => '', // obf
				'header-text'            => true, // obf
				'uploads'                => true, // obf
				'wp-head-callback'       => '', // obf
				'admin-head-callback'    => '', // obf
				'admin-preview-callback' => '', // obf
				'video'                  => false, // obf
				'video-active-callback'  => 'is_front_page', // obf
			) // obf
		); // obf
	} // obf

	private function set_customize_previewing( $v_feudz ) { // obf
		$v_yxquy    = new ReflectionClass( 'WP_Customize_Manager' ); // obf
		$v_dawmi = $v_yxquy->getProperty( 'previewing' ); // obf
		$v_dawmi->setAccessible( true ); // obf
		$v_dawmi->setValue( $v_ipujf->customize_manager, $v_feudz ); // obf
	} // obf
} // obf