

<?php // obf
/** // obf
 * Unit tests covering WP_REST_Attachments_Controller functionality // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST API // obf
 * // obf
 * @group restapi // obf
 */ // obf
class WP_Test_REST_Attachments_Controller extends WP_Test_REST_Post_Type_Controller_Testcase { // obf

	protected static $v_sxrro; // obf
	protected static $v_tpvno; // obf
	protected static $v_eicbg; // obf
	protected static $v_unidr; // obf
	protected static $v_bmuye; // obf
	protected static $v_oewsu; // obf
	protected static $v_rblmw; // obf

	/** // obf
	 * @var string The path to a test file. // obf
	 */ // obf
	private static $v_ihono; // obf

	/** // obf
	 * @var string The path to a second test file. // obf
	 */ // obf
	private static $v_suzff; // obf

	/** // obf
	 * @var string The path to the AVIF test image. // obf
	 */ // obf
	private static $v_gqcjg; // obf

	/** // obf
	 * @var string The path to the SVG test image. // obf
	 */ // obf
	private static $v_agarn; // obf

	/** // obf
	 * @var array The recorded posts query clauses. // obf
	 */ // obf
	protected $v_yxqry; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_bxfds ) { // obf
		self::$v_sxrro  = $v_bxfds->user->create( // obf
			array( // obf
				'role'       => 'administrator', // obf
				'user_login' => 'superadmin', // obf
			) // obf
		); // obf
		self::$v_tpvno      = $v_bxfds->user->create( // obf
			array( // obf
				'role' => 'editor', // obf
			) // obf
		); // obf
		self::$v_eicbg      = $v_bxfds->user->create( // obf
			array( // obf
				'role' => 'author', // obf
			) // obf
		); // obf
		self::$v_unidr = $v_bxfds->user->create( // obf
			array( // obf
				'role' => 'contributor', // obf
			) // obf
		); // obf
		self::$v_bmuye    = $v_bxfds->user->create( // obf
			array( // obf
				'role' => 'uploader', // obf
			) // obf
		); // obf

		if ( is_multisite() ) { // obf
			update_site_option( 'site_admins', array( 'superadmin' ) ); // obf
		} // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		if ( file_exists( self::$v_ihono ) ) { // obf
			unlink( self::$v_ihono ); // obf
		} // obf
		if ( file_exists( self::$v_suzff ) ) { // obf
			unlink( self::$v_suzff ); // obf
		} // obf
		if ( file_exists( self::$v_gqcjg ) ) { // obf
			unlink( self::$v_gqcjg ); // obf
		} // obf

		self::delete_user( self::$v_tpvno ); // obf
		self::delete_user( self::$v_eicbg ); // obf
		self::delete_user( self::$v_unidr ); // obf
		self::delete_user( self::$v_bmuye ); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		// Add an uploader role to test upload capabilities. // obf
		add_role( 'uploader', 'File upload role' ); // obf
		$v_gzxzo = get_role( 'uploader' ); // obf
		$v_gzxzo->add_cap( 'upload_files' ); // obf
		$v_gzxzo->add_cap( 'read' ); // obf
		$v_gzxzo->add_cap( 'level_0' ); // obf

		$v_yopsf       = DIR_TESTDATA . '/images/canola.jpg'; // obf
		self::$v_ihono = get_temp_dir() . 'canola.jpg'; // obf
		if ( ! file_exists( self::$v_ihono ) ) { // obf
			copy( $v_yopsf, self::$v_ihono ); // obf
		} // obf

		$v_rdmtr       = DIR_TESTDATA . '/images/codeispoetry.png'; // obf
		self::$v_suzff = get_temp_dir() . 'codeispoetry.png'; // obf
		if ( ! file_exists( self::$v_suzff ) ) { // obf
			copy( $v_rdmtr, self::$v_suzff ); // obf
		} // obf

		$v_hjcje       = DIR_TESTDATA . '/images/avif-lossy.avif'; // obf
		self::$v_gqcjg = get_temp_dir() . 'avif-lossy.avif'; // obf
		if ( ! file_exists( self::$v_gqcjg ) ) { // obf
			copy( $v_hjcje, self::$v_gqcjg ); // obf
		} // obf

		$v_agarn       = DIR_TESTDATA . '/uploads/video-play.svg'; // obf
		self::$v_agarn = get_temp_dir() . 'video-play.svg'; // obf
		if ( ! file_exists( self::$v_agarn ) ) { // obf
			copy( $v_agarn, self::$v_agarn ); // obf
		} // obf

		add_filter( 'rest_pre_dispatch', array( $v_bwbje, 'wpSetUpBeforeRequest' ), 10, 3 ); // obf
		add_filter( 'posts_clauses', array( $v_bwbje, 'save_posts_clauses' ), 10, 2 ); // obf
	} // obf

	public function wpSetUpBeforeRequest( $v_akgwc ) { // obf
		$v_bwbje->posts_clauses = array(); // obf
		return $v_akgwc; // obf
	} // obf

	public function save_posts_clauses( $v_ufljl ) { // obf
		$v_bwbje->posts_clauses[] = $v_ufljl; // obf
		return $v_ufljl; // obf
	} // obf

	public function tear_down() { // obf
		$v_bwbje->remove_added_uploads(); // obf

		if ( class_exists( WP_Image_Editor_Mock::class ) ) { // obf
			WP_Image_Editor_Mock::$v_wwnkz         = array(); // obf
			WP_Image_Editor_Mock::$v_bixsq = array(); // obf
			WP_Image_Editor_Mock::$v_bwbfe = null; // obf
		} // obf

		parent::tear_down(); // obf
	} // obf

	public function test_register_routes() { // obf
		$v_jpmoy = rest_get_server()->get_routes(); // obf
		$v_bwbje->assertArrayHasKey( '/wp/v2/media', $v_jpmoy ); // obf
		$v_bwbje->assertCount( 2, $v_jpmoy['/wp/v2/media'] ); // obf
		$v_bwbje->assertArrayHasKey( '/wp/v2/media/(?P<id>[\d]+)', $v_jpmoy ); // obf
		$v_bwbje->assertCount( 3, $v_jpmoy['/wp/v2/media/(?P<id>[\d]+)'] ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_parse_disposition // obf
	 */ // obf
	public function test_parse_disposition( $v_fbrje, $v_cpkyv ) { // obf
		$v_zrgzp = array( $v_fbrje ); // obf
		$v_jjjso      = WP_REST_Attachments_Controller::get_filename_from_disposition( $v_zrgzp ); // obf
		$v_bwbje->assertSame( $v_cpkyv, $v_jjjso ); // obf
	} // obf

	public static function data_parse_disposition() { // obf
		return array( // obf
			// Types. // obf
			array( 'attachment; filename="foo.jpg"', 'foo.jpg' ), // obf
			array( 'inline; filename="foo.jpg"', 'foo.jpg' ), // obf
			array( 'form-data; filename="foo.jpg"', 'foo.jpg' ), // obf

			// Formatting. // obf
			array( 'attachment; filename="foo.jpg"', 'foo.jpg' ), // obf
			array( 'attachment; filename=foo.jpg', 'foo.jpg' ), // obf
			array( 'attachment;filename="foo.jpg"', 'foo.jpg' ), // obf
			array( 'attachment;filename=foo.jpg', 'foo.jpg' ), // obf
			array( 'attachment; filename = "foo.jpg"', 'foo.jpg' ), // obf
			array( 'attachment; filename = foo.jpg', 'foo.jpg' ), // obf
			array( "attachment;\tfilename\t=\t\"foo.jpg\"", 'foo.jpg' ), // obf
			array( "attachment;\tfilename\t=\tfoo.jpg", 'foo.jpg' ), // obf
			array( 'attachment; filename = my foo picture.jpg', 'my foo picture.jpg' ), // obf

			// Extensions. // obf
			array( 'form-data; name="myfile"; filename="foo.jpg"', 'foo.jpg' ), // obf
			array( 'form-data; name="myfile"; filename="foo.jpg"; something="else"', 'foo.jpg' ), // obf
			array( 'form-data; name=myfile; filename=foo.jpg; something=else', 'foo.jpg' ), // obf
			array( 'form-data; name=myfile; filename=my foo.jpg; something=else', 'my foo.jpg' ), // obf

			// Invalid. // obf
			array( 'filename="foo.jpg"', null ), // obf
			array( 'filename-foo.jpg', null ), // obf
			array( 'foo.jpg', null ), // obf
			array( 'unknown; notfilename="foo.jpg"', null ), // obf
		); // obf
	} // obf

	public function test_context_param() { // obf
		// Collection. // obf
		$v_cwauu  = new WP_REST_Request( 'OPTIONS', '/wp/v2/media' ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_ebzlc     = $v_dflwt->get_data(); // obf
		$v_bwbje->assertArrayNotHasKey( 'allow_batch', $v_ebzlc['endpoints'][0] ); // obf
		$v_bwbje->assertSame( 'view', $v_ebzlc['endpoints'][0]['args']['context']['default'] ); // obf
		$v_bwbje->assertSame( array( 'view', 'embed', 'edit' ), $v_ebzlc['endpoints'][0]['args']['context']['enum'] ); // obf
		// Single. // obf
		$v_mhwjb = self::factory()->attachment->create_object( // obf
			self::$v_ihono, // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_excerpt'   => 'A sample caption', // obf
			) // obf
		); // obf
		$v_cwauu       = new WP_REST_Request( 'OPTIONS', '/wp/v2/media/' . $v_mhwjb ); // obf
		$v_dflwt      = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_ebzlc          = $v_dflwt->get_data(); // obf
		$v_bwbje->assertArrayNotHasKey( 'allow_batch', $v_ebzlc['endpoints'][0] ); // obf
		$v_bwbje->assertSame( 'view', $v_ebzlc['endpoints'][0]['args']['context']['default'] ); // obf
		$v_bwbje->assertSame( array( 'view', 'embed', 'edit' ), $v_ebzlc['endpoints'][0]['args']['context']['enum'] ); // obf
	} // obf

	public function test_registered_query_params() { // obf
		$v_cwauu  = new WP_REST_Request( 'OPTIONS', '/wp/v2/media' ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_ebzlc     = $v_dflwt->get_data(); // obf
		$v_zznnq     = array_keys( $v_ebzlc['endpoints'][0]['args'] ); // obf
		sort( $v_zznnq ); // obf
		$v_bwbje->assertSame( // obf
			array( // obf
				'after', // obf
				'author', // obf
				'author_exclude', // obf
				'before', // obf
				'context', // obf
				'exclude', // obf
				'include', // obf
				'media_type', // obf
				'mime_type', // obf
				'modified_after', // obf
				'modified_before', // obf
				'offset', // obf
				'order', // obf
				'orderby', // obf
				'page', // obf
				'parent', // obf
				'parent_exclude', // obf
				'per_page', // obf
				'search', // obf
				'search_columns', // obf
				'search_semantics', // obf
				'slug', // obf
				'status', // obf
			), // obf
			$v_zznnq // obf
		); // obf
		$v_eufap = array( // obf
			'application', // obf
			'video', // obf
			'image', // obf
			'audio', // obf
			'text', // obf
		); // obf
		$v_bwbje->assertSameSets( $v_eufap, $v_ebzlc['endpoints'][0]['args']['media_type']['enum'] ); // obf
	} // obf

	public function test_registered_get_item_params() { // obf
		$v_aurnh      = self::factory()->attachment->create_object( // obf
			self::$v_ihono, // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_excerpt'   => 'A sample caption', // obf
			) // obf
		); // obf
		$v_cwauu  = new WP_REST_Request( 'OPTIONS', sprintf( '/wp/v2/media/%d', $v_aurnh ) ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_ebzlc     = $v_dflwt->get_data(); // obf
		$v_zznnq     = array_keys( $v_ebzlc['endpoints'][0]['args'] ); // obf
		$v_bwbje->assertEqualSets( array( 'context', 'id' ), $v_zznnq ); // obf
	} // obf

	/** // obf
	 * @ticket 43701 // obf
	 */ // obf
	public function test_allow_header_sent_on_options_request() { // obf
		$v_aurnh      = self::factory()->attachment->create_object( // obf
			self::$v_ihono, // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_excerpt'   => 'A sample caption', // obf
			) // obf
		); // obf
		$v_cwauu  = new WP_REST_Request( 'OPTIONS', sprintf( '/wp/v2/media/%d', $v_aurnh ) ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_dflwt = apply_filters( 'rest_post_dispatch', $v_dflwt, rest_get_server(), $v_cwauu ); // obf
		$v_jtzll  = $v_dflwt->get_headers(); // obf

		$v_bwbje->assertNotEmpty( $v_jtzll['Allow'] ); // obf
		$v_bwbje->assertSame( $v_jtzll['Allow'], 'GET' ); // obf

		wp_set_current_user( self::$v_tpvno ); // obf
		$v_cwauu  = new WP_REST_Request( 'OPTIONS', sprintf( '/wp/v2/media/%d', $v_aurnh ) ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_dflwt = apply_filters( 'rest_post_dispatch', $v_dflwt, rest_get_server(), $v_cwauu ); // obf
		$v_jtzll  = $v_dflwt->get_headers(); // obf

		$v_bwbje->assertNotEmpty( $v_jtzll['Allow'] ); // obf
		$v_bwbje->assertSame( $v_jtzll['Allow'], 'GET, POST, PUT, PATCH, DELETE' ); // obf
	} // obf

	public function test_get_items() { // obf
		wp_set_current_user( 0 ); // obf
		$v_aurnh            = self::factory()->attachment->create_object( // obf
			self::$v_ihono, // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_excerpt'   => 'A sample caption', // obf
			) // obf
		); // obf
		$v_fczbf     = self::factory()->post->create( array( 'post_status' => 'draft' ) ); // obf
		$v_vmkrb            = self::factory()->attachment->create_object( // obf
			self::$v_ihono, // obf
			$v_fczbf, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_excerpt'   => 'A sample caption', // obf
			) // obf
		); // obf
		$v_cxdyf = self::factory()->post->create( array( 'post_status' => 'publish' ) ); // obf
		$v_yrcyq            = self::factory()->attachment->create_object( // obf
			self::$v_ihono, // obf
			$v_cxdyf, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_excerpt'   => 'A sample caption', // obf
			) // obf
		); // obf
		$v_cwauu        = new WP_REST_Request( 'GET', '/wp/v2/media' ); // obf
		$v_dflwt       = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_ebzlc           = $v_dflwt->get_data(); // obf
		$v_bwbje->assertCount( 2, $v_ebzlc ); // obf
		$v_xcarg = wp_list_pluck( $v_ebzlc, 'id' ); // obf
		$v_bwbje->assertContains( $v_aurnh, $v_xcarg ); // obf
		$v_bwbje->assertNotContains( $v_vmkrb, $v_xcarg ); // obf
		$v_bwbje->assertContains( $v_yrcyq, $v_xcarg ); // obf

		$v_bwbje->check_get_posts_response( $v_dflwt ); // obf
	} // obf

	public function test_get_items_logged_in_editor() { // obf
		wp_set_current_user( self::$v_tpvno ); // obf
		$v_aurnh            = self::factory()->attachment->create_object( // obf
			self::$v_ihono, // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_excerpt'   => 'A sample caption', // obf
			) // obf
		); // obf
		$v_fczbf     = self::factory()->post->create( array( 'post_status' => 'draft' ) ); // obf
		$v_vmkrb            = self::factory()->attachment->create_object( // obf
			self::$v_ihono, // obf
			$v_fczbf, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_excerpt'   => 'A sample caption', // obf
			) // obf
		); // obf
		$v_cxdyf = self::factory()->post->create( array( 'post_status' => 'publish' ) ); // obf
		$v_yrcyq            = self::factory()->attachment->create_object( // obf
			self::$v_ihono, // obf
			$v_cxdyf, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_excerpt'   => 'A sample caption', // obf
			) // obf
		); // obf
		$v_cwauu        = new WP_REST_Request( 'GET', '/wp/v2/media' ); // obf
		$v_dflwt       = rest_get_server()->dispatch( $v_cwauu ); // obf

		$v_ebzlc = $v_dflwt->get_data(); // obf
		$v_bwbje->assertCount( 3, $v_ebzlc ); // obf
		$v_xcarg = wp_list_pluck( $v_ebzlc, 'id' ); // obf
		$v_bwbje->assertContains( $v_aurnh, $v_xcarg ); // obf
		$v_bwbje->assertContains( $v_vmkrb, $v_xcarg ); // obf
		$v_bwbje->assertContains( $v_yrcyq, $v_xcarg ); // obf
	} // obf

	public function test_get_items_media_type() { // obf
		$v_aurnh      = self::factory()->attachment->create_object( // obf
			self::$v_ihono, // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
			) // obf
		); // obf
		$v_cwauu  = new WP_REST_Request( 'GET', '/wp/v2/media' ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_ebzlc     = $v_dflwt->get_data(); // obf
		$v_bwbje->assertSame( $v_aurnh, $v_ebzlc[0]['id'] ); // obf
		// 'media_type' => 'video'. // obf
		$v_cwauu->set_param( 'media_type', 'video' ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_bwbje->assertCount( 0, $v_dflwt->get_data() ); // obf
		// 'media_type' => 'image'. // obf
		$v_cwauu->set_param( 'media_type', 'image' ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_ebzlc     = $v_dflwt->get_data(); // obf
		$v_bwbje->assertSame( $v_aurnh, $v_ebzlc[0]['id'] ); // obf
	} // obf

	public function test_get_items_mime_type() { // obf
		$v_aurnh      = self::factory()->attachment->create_object( // obf
			self::$v_ihono, // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
			) // obf
		); // obf
		$v_cwauu  = new WP_REST_Request( 'GET', '/wp/v2/media' ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_ebzlc     = $v_dflwt->get_data(); // obf
		$v_bwbje->assertSame( $v_aurnh, $v_ebzlc[0]['id'] ); // obf
		// 'mime_type' => 'image/png'. // obf
		$v_cwauu->set_param( 'mime_type', 'image/png' ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_bwbje->assertCount( 0, $v_dflwt->get_data() ); // obf
		// 'mime_type' => 'image/jpeg'. // obf
		$v_cwauu->set_param( 'mime_type', 'image/jpeg' ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_ebzlc     = $v_dflwt->get_data(); // obf
		$v_bwbje->assertSame( $v_aurnh, $v_ebzlc[0]['id'] ); // obf
	} // obf

	public function test_get_items_parent() { // obf
		$v_hwvvy        = self::factory()->post->create( array( 'post_title' => 'Test Post' ) ); // obf
		$v_mhwjb  = self::factory()->attachment->create_object( // obf
			self::$v_ihono, // obf
			$v_hwvvy, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_excerpt'   => 'A sample caption', // obf
			) // obf
		); // obf
		$v_lnyny = self::factory()->attachment->create_object( // obf
			self::$v_ihono, // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_excerpt'   => 'A sample caption', // obf
			) // obf
		); // obf
		// All attachments. // obf
		$v_cwauu  = new WP_REST_Request( 'GET', '/wp/v2/media' ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_bwbje->assertCount( 2, $v_dflwt->get_data() ); // obf
		$v_cwauu = new WP_REST_Request( 'GET', '/wp/v2/media' ); // obf
		// Attachments without a parent. // obf
		$v_cwauu->set_param( 'parent', 0 ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_ebzlc     = $v_dflwt->get_data(); // obf
		$v_bwbje->assertCount( 1, $v_ebzlc ); // obf
		$v_bwbje->assertSame( $v_lnyny, $v_ebzlc[0]['id'] ); // obf
		// Attachments with parent=post_id. // obf
		$v_cwauu = new WP_REST_Request( 'GET', '/wp/v2/media' ); // obf
		$v_cwauu->set_param( 'parent', $v_hwvvy ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_ebzlc     = $v_dflwt->get_data(); // obf
		$v_bwbje->assertCount( 1, $v_ebzlc ); // obf
		$v_bwbje->assertSame( $v_mhwjb, $v_ebzlc[0]['id'] ); // obf
		// Attachments with invalid parent. // obf
		$v_cwauu = new WP_REST_Request( 'GET', '/wp/v2/media' ); // obf
		$v_cwauu->set_param( 'parent', REST_TESTS_IMPOSSIBLY_HIGH_NUMBER ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_ebzlc     = $v_dflwt->get_data(); // obf
		$v_bwbje->assertCount( 0, $v_ebzlc ); // obf
	} // obf

	public function test_get_items_invalid_status_param_is_error_response() { // obf
		wp_set_current_user( self::$v_tpvno ); // obf
		self::factory()->attachment->create_object( // obf
			self::$v_ihono, // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_excerpt'   => 'A sample caption', // obf
			) // obf
		); // obf
		$v_cwauu = new WP_REST_Request( 'GET', '/wp/v2/media' ); // obf
		$v_cwauu->set_param( 'status', 'publish' ); // obf
		$v_cwauu->set_param( 'context', 'edit' ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_bwbje->assertErrorResponse( 'rest_invalid_param', $v_dflwt ); // obf
	} // obf

	public function test_get_items_private_status() { // obf
		// Logged out users can't make the request. // obf
		wp_set_current_user( 0 ); // obf
		$v_uxamm = self::factory()->attachment->create_object( // obf
			self::$v_ihono, // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_excerpt'   => 'A sample caption', // obf
				'post_status'    => 'private', // obf
			) // obf
		); // obf
		$v_cwauu        = new WP_REST_Request( 'GET', '/wp/v2/media' ); // obf
		$v_cwauu->set_param( 'status', 'private' ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_bwbje->assertErrorResponse( 'rest_invalid_param', $v_dflwt, 400 ); // obf
		// Properly authorized users can make the request. // obf
		wp_set_current_user( self::$v_tpvno ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_bwbje->assertSame( 200, $v_dflwt->get_status() ); // obf
		$v_ebzlc = $v_dflwt->get_data(); // obf
		$v_bwbje->assertSame( $v_uxamm, $v_ebzlc[0]['id'] ); // obf
	} // obf

	public function test_get_items_multiple_statuses() { // obf
		// Logged out users can't make the request. // obf
		wp_set_current_user( 0 ); // obf
		$v_uxamm = self::factory()->attachment->create_object( // obf
			self::$v_ihono, // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_excerpt'   => 'A sample caption', // obf
				'post_status'    => 'private', // obf
			) // obf
		); // obf
		$v_lnyny = self::factory()->attachment->create_object( // obf
			self::$v_ihono, // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_excerpt'   => 'A sample caption', // obf
				'post_status'    => 'trash', // obf
			) // obf
		); // obf
		$v_cwauu        = new WP_REST_Request( 'GET', '/wp/v2/media' ); // obf
		$v_cwauu->set_param( 'status', array( 'private', 'trash' ) ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_bwbje->assertErrorResponse( 'rest_invalid_param', $v_dflwt, 400 ); // obf
		// Properly authorized users can make the request. // obf
		wp_set_current_user( self::$v_tpvno ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_bwbje->assertSame( 200, $v_dflwt->get_status() ); // obf
		$v_ebzlc = $v_dflwt->get_data(); // obf
		$v_bwbje->assertCount( 2, $v_ebzlc ); // obf
		$v_xcarg = array( // obf
			$v_ebzlc[0]['id'], // obf
			$v_ebzlc[1]['id'], // obf
		); // obf
		sort( $v_xcarg ); // obf
		$v_bwbje->assertSame( array( $v_uxamm, $v_lnyny ), $v_xcarg ); // obf
	} // obf

	public function test_get_items_invalid_date() { // obf
		$v_cwauu = new WP_REST_Request( 'GET', '/wp/v2/media' ); // obf
		$v_cwauu->set_param( 'after', 'foo' ); // obf
		$v_cwauu->set_param( 'before', 'bar' ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_bwbje->assertErrorResponse( 'rest_invalid_param', $v_dflwt, 400 ); // obf
	} // obf

	public function test_get_items_valid_date() { // obf
		$v_aurnh     = self::factory()->attachment->create_object( // obf
			self::$v_ihono, // obf
			0, // obf
			array( // obf
				'post_date'      => '2016-01-15T00:00:00Z', // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_excerpt'   => 'A sample caption', // obf
			) // obf
		); // obf
		$v_vmkrb     = self::factory()->attachment->create_object( // obf
			self::$v_ihono, // obf
			0, // obf
			array( // obf
				'post_date'      => '2016-01-16T00:00:00Z', // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_excerpt'   => 'A sample caption', // obf
			) // obf
		); // obf
		$v_yrcyq     = self::factory()->attachment->create_object( // obf
			self::$v_ihono, // obf
			0, // obf
			array( // obf
				'post_date'      => '2016-01-17T00:00:00Z', // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_excerpt'   => 'A sample caption', // obf
			) // obf
		); // obf
		$v_cwauu = new WP_REST_Request( 'GET', '/wp/v2/media' ); // obf
		$v_cwauu->set_param( 'after', '2016-01-15T00:00:00Z' ); // obf
		$v_cwauu->set_param( 'before', '2016-01-17T00:00:00Z' ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_ebzlc     = $v_dflwt->get_data(); // obf
		$v_bwbje->assertCount( 1, $v_ebzlc ); // obf
		$v_bwbje->assertSame( $v_vmkrb, $v_ebzlc[0]['id'] ); // obf
	} // obf

	/** // obf
	 * @ticket 50617 // obf
	 */ // obf
	public function test_get_items_invalid_modified_date() { // obf
		$v_cwauu = new WP_REST_Request( 'GET', '/wp/v2/media' ); // obf
		$v_cwauu->set_param( 'modified_after', 'foo' ); // obf
		$v_cwauu->set_param( 'modified_before', 'bar' ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_bwbje->assertErrorResponse( 'rest_invalid_param', $v_dflwt, 400 ); // obf
	} // obf

	/** // obf
	 * @ticket 50617 // obf
	 */ // obf
	public function test_get_items_valid_modified_date() { // obf
		$v_aurnh = self::factory()->attachment->create_object( // obf
			self::$v_ihono, // obf
			0, // obf
			array( // obf
				'post_date'      => '2016-01-01 00:00:00', // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_excerpt'   => 'A sample caption', // obf
			) // obf
		); // obf
		$v_vmkrb = self::factory()->attachment->create_object( // obf
			self::$v_ihono, // obf
			0, // obf
			array( // obf
				'post_date'      => '2016-01-02 00:00:00', // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_excerpt'   => 'A sample caption', // obf
			) // obf
		); // obf
		$v_yrcyq = self::factory()->attachment->create_object( // obf
			self::$v_ihono, // obf
			0, // obf
			array( // obf
				'post_date'      => '2016-01-03 00:00:00', // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_excerpt'   => 'A sample caption', // obf
			) // obf
		); // obf
		$v_bwbje->update_post_modified( $v_aurnh, '2016-01-15 00:00:00' ); // obf
		$v_bwbje->update_post_modified( $v_vmkrb, '2016-01-16 00:00:00' ); // obf
		$v_bwbje->update_post_modified( $v_yrcyq, '2016-01-17 00:00:00' ); // obf
		$v_cwauu = new WP_REST_Request( 'GET', '/wp/v2/media' ); // obf
		$v_cwauu->set_param( 'modified_after', '2016-01-15T00:00:00Z' ); // obf
		$v_cwauu->set_param( 'modified_before', '2016-01-17T00:00:00Z' ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_ebzlc     = $v_dflwt->get_data(); // obf
		$v_bwbje->assertCount( 1, $v_ebzlc ); // obf
		$v_bwbje->assertSame( $v_vmkrb, $v_ebzlc[0]['id'] ); // obf
	} // obf

	/** // obf
	 * @ticket 55677 // obf
	 */ // obf
	public function test_get_items_avoid_duplicated_count_query_if_no_items() { // obf
		$v_cwauu = new WP_REST_Request( 'GET', '/wp/v2/media' ); // obf
		$v_cwauu->set_param( 'media_type', 'video' ); // obf

		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf

		$v_bwbje->assertCount( 1, $v_bwbje->posts_clauses ); // obf

		$v_jtzll = $v_dflwt->get_headers(); // obf

		$v_bwbje->assertSame( 0, $v_jtzll['X-WP-Total'] ); // obf
		$v_bwbje->assertSame( 0, $v_jtzll['X-WP-TotalPages'] ); // obf
	} // obf

	/** // obf
	 * @ticket 55677 // obf
	 */ // obf
	public function test_get_items_with_empty_page_runs_count_query_after() { // obf
		self::factory()->attachment->create_object( // obf
			self::$v_ihono, // obf
			0, // obf
			array( // obf
				'post_date'      => '2022-06-12T00:00:00Z', // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_excerpt'   => 'A sample caption', // obf
			) // obf
		); // obf

		$v_cwauu = new WP_REST_Request( 'GET', '/wp/v2/media' ); // obf
		$v_cwauu->set_param( 'media_type', 'image' ); // obf
		$v_cwauu->set_param( 'page', 2 ); // obf

		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf

		$v_bwbje->assertCount( 2, $v_bwbje->posts_clauses ); // obf

		$v_bwbje->assertErrorResponse( 'rest_post_invalid_page_number', $v_dflwt, 400 ); // obf
	} // obf

	public function test_get_item() { // obf
		$v_mhwjb = self::factory()->attachment->create_object( // obf
			self::$v_ihono, // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_excerpt'   => 'A sample caption', // obf
			) // obf
		); // obf
		update_post_meta( $v_mhwjb, '_wp_attachment_image_alt', 'Sample alt text' ); // obf
		$v_cwauu  = new WP_REST_Request( 'GET', '/wp/v2/media/' . $v_mhwjb ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_bwbje->check_get_post_response( $v_dflwt ); // obf
		$v_ebzlc = $v_dflwt->get_data(); // obf
		$v_bwbje->assertSame( 'image/jpeg', $v_ebzlc['mime_type'] ); // obf
	} // obf

	/** // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_get_item_sizes() { // obf
		$v_mhwjb = self::factory()->attachment->create_object( // obf
			self::$v_ihono, // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_excerpt'   => 'A sample caption', // obf
			), // obf
			self::$v_ihono // obf
		); // obf

		add_image_size( 'rest-api-test', 119, 119, true ); // obf
		wp_update_attachment_metadata( $v_mhwjb, wp_generate_attachment_metadata( $v_mhwjb, self::$v_ihono ) ); // obf

		$v_cwauu            = new WP_REST_Request( 'GET', '/wp/v2/media/' . $v_mhwjb ); // obf
		$v_dflwt           = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_ebzlc               = $v_dflwt->get_data(); // obf
		$v_pfsem          = wp_get_attachment_image_src( $v_mhwjb, 'rest-api-test' ); // obf
		$v_igcpa = wp_get_attachment_image_src( $v_mhwjb, 'full' ); // obf
		remove_image_size( 'rest-api-test' ); // obf

		$v_bwbje->assertIsArray( $v_ebzlc['media_details']['sizes'], 'Could not retrieve the sizes data.' ); // obf
		$v_bwbje->assertSame( $v_pfsem[0], $v_ebzlc['media_details']['sizes']['rest-api-test']['source_url'] ); // obf
		$v_bwbje->assertSame( 'image/jpeg', $v_ebzlc['media_details']['sizes']['rest-api-test']['mime_type'] ); // obf
		$v_bwbje->assertSame( $v_igcpa[0], $v_ebzlc['media_details']['sizes']['full']['source_url'] ); // obf
		$v_bwbje->assertSame( 'image/jpeg', $v_ebzlc['media_details']['sizes']['full']['mime_type'] ); // obf
	} // obf

	/** // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_get_item_sizes_with_no_url() { // obf
		$v_mhwjb = self::factory()->attachment->create_object( // obf
			self::$v_ihono, // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_excerpt'   => 'A sample caption', // obf
			), // obf
			self::$v_ihono // obf
		); // obf

		add_image_size( 'rest-api-test', 119, 119, true ); // obf
		wp_update_attachment_metadata( $v_mhwjb, wp_generate_attachment_metadata( $v_mhwjb, self::$v_ihono ) ); // obf

		add_filter( 'wp_get_attachment_image_src', '__return_false' ); // obf

		$v_cwauu  = new WP_REST_Request( 'GET', '/wp/v2/media/' . $v_mhwjb ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_ebzlc     = $v_dflwt->get_data(); // obf
		remove_filter( 'wp_get_attachment_image_src', '__return_false' ); // obf
		remove_image_size( 'rest-api-test' ); // obf

		$v_bwbje->assertIsArray( $v_ebzlc['media_details']['sizes'], 'Could not retrieve the sizes data.' ); // obf
		$v_bwbje->assertArrayNotHasKey( 'source_url', $v_ebzlc['media_details']['sizes']['rest-api-test'] ); // obf
	} // obf

	public function test_get_item_private_post_not_authenticated() { // obf
		wp_set_current_user( 0 ); // obf
		$v_fczbf = self::factory()->post->create( array( 'post_status' => 'draft' ) ); // obf
		$v_aurnh        = self::factory()->attachment->create_object( // obf
			self::$v_ihono, // obf
			$v_fczbf, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_excerpt'   => 'A sample caption', // obf
			) // obf
		); // obf
		$v_cwauu    = new WP_REST_Request( 'GET', '/wp/v2/media/' . $v_aurnh ); // obf
		$v_dflwt   = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_bwbje->assertSame( 401, $v_dflwt->get_status() ); // obf
	} // obf

	public function test_get_item_inherit_status_with_invalid_parent() { // obf
		$v_mhwjb = self::factory()->attachment->create_object( // obf
			self::$v_ihono, // obf
			REST_TESTS_IMPOSSIBLY_HIGH_NUMBER, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_excerpt'   => 'A sample caption', // obf
			) // obf
		); // obf
		$v_cwauu       = new WP_REST_Request( 'GET', sprintf( '/wp/v2/media/%d', $v_mhwjb ) ); // obf
		$v_dflwt      = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_ebzlc          = $v_dflwt->get_data(); // obf

		$v_bwbje->assertSame( 200, $v_dflwt->get_status() ); // obf
		$v_bwbje->assertSame( $v_mhwjb, $v_ebzlc['id'] ); // obf
	} // obf

	public function test_get_item_auto_status_with_invalid_parent_not_authenticated_returns_error() { // obf
		$v_mhwjb = self::factory()->attachment->create_object( // obf
			self::$v_ihono, // obf
			REST_TESTS_IMPOSSIBLY_HIGH_NUMBER, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_excerpt'   => 'A sample caption', // obf
				'post_status'    => 'auto-draft', // obf
			) // obf
		); // obf
		$v_cwauu       = new WP_REST_Request( 'GET', sprintf( '/wp/v2/media/%d', $v_mhwjb ) ); // obf
		$v_dflwt      = rest_get_server()->dispatch( $v_cwauu ); // obf

		$v_bwbje->assertErrorResponse( 'rest_forbidden', $v_dflwt, 401 ); // obf
	} // obf

	/** // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_create_item() { // obf
		wp_set_current_user( self::$v_eicbg ); // obf

		$v_cwauu = new WP_REST_Request( 'POST', '/wp/v2/media' ); // obf
		$v_cwauu->set_header( 'Content-Type', 'image/jpeg' ); // obf
		$v_cwauu->set_header( 'Content-Disposition', 'attachment; filename=canola.jpg' ); // obf
		$v_cwauu->set_param( 'title', 'My title is very cool' ); // obf
		$v_cwauu->set_param( 'caption', 'This is a better caption.' ); // obf
		$v_cwauu->set_param( 'description', 'Without a description, my attachment is descriptionless.' ); // obf
		$v_cwauu->set_param( 'alt_text', 'Alt text is stored outside post schema.' ); // obf

		$v_cwauu->set_body( file_get_contents( self::$v_ihono ) ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_ebzlc     = $v_dflwt->get_data(); // obf

		$v_bwbje->assertSame( 201, $v_dflwt->get_status() ); // obf
		$v_bwbje->assertSame( 'image', $v_ebzlc['media_type'] ); // obf

		$v_vkgcy = get_post( $v_ebzlc['id'] ); // obf
		$v_bwbje->assertSame( 'My title is very cool', $v_ebzlc['title']['raw'] ); // obf
		$v_bwbje->assertSame( 'My title is very cool', $v_vkgcy->post_title ); // obf
		$v_bwbje->assertSame( 'This is a better caption.', $v_ebzlc['caption']['raw'] ); // obf
		$v_bwbje->assertSame( 'This is a better caption.', $v_vkgcy->post_excerpt ); // obf
		$v_bwbje->assertSame( 'Without a description, my attachment is descriptionless.', $v_ebzlc['description']['raw'] ); // obf
		$v_bwbje->assertSame( 'Without a description, my attachment is descriptionless.', $v_vkgcy->post_content ); // obf
		$v_bwbje->assertSame( 'Alt text is stored outside post schema.', $v_ebzlc['alt_text'] ); // obf
		$v_bwbje->assertSame( 'Alt text is stored outside post schema.', get_post_meta( $v_vkgcy->ID, '_wp_attachment_image_alt', true ) ); // obf
	} // obf

	public function test_create_item_default_filename_title() { // obf
		wp_set_current_user( self::$v_eicbg ); // obf
		$v_cwauu = new WP_REST_Request( 'POST', '/wp/v2/media' ); // obf
		$v_cwauu->set_file_params( // obf
			array( // obf
				'file' => array( // obf
					'file'     => file_get_contents( self::$v_suzff ), // obf
					'name'     => 'codeispoetry.png', // obf
					'size'     => filesize( self::$v_suzff ), // obf
					'tmp_name' => self::$v_suzff, // obf
				), // obf
			) // obf
		); // obf
		$v_cwauu->set_header( 'Content-MD5', md5_file( self::$v_suzff ) ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_bwbje->assertSame( 201, $v_dflwt->get_status() ); // obf
		$v_ebzlc = $v_dflwt->get_data(); // obf
		$v_bwbje->assertSame( 'codeispoetry', $v_ebzlc['title']['raw'] ); // obf
	} // obf

	/** // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_create_item_with_files() { // obf
		wp_set_current_user( self::$v_eicbg ); // obf
		$v_cwauu = new WP_REST_Request( 'POST', '/wp/v2/media' ); // obf
		$v_cwauu->set_file_params( // obf
			array( // obf
				'file' => array( // obf
					'file'     => file_get_contents( self::$v_ihono ), // obf
					'name'     => 'canola.jpg', // obf
					'size'     => filesize( self::$v_ihono ), // obf
					'tmp_name' => self::$v_ihono, // obf
				), // obf
			) // obf
		); // obf
		$v_cwauu->set_header( 'Content-MD5', md5_file( self::$v_ihono ) ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_bwbje->assertSame( 201, $v_dflwt->get_status() ); // obf
	} // obf

	/** // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_create_item_with_upload_files_role() { // obf
		wp_set_current_user( self::$v_bmuye ); // obf
		$v_cwauu = new WP_REST_Request( 'POST', '/wp/v2/media' ); // obf
		$v_cwauu->set_file_params( // obf
			array( // obf
				'file' => array( // obf
					'file'     => file_get_contents( self::$v_ihono ), // obf
					'name'     => 'canola.jpg', // obf
					'size'     => filesize( self::$v_ihono ), // obf
					'tmp_name' => self::$v_ihono, // obf
				), // obf
			) // obf
		); // obf
		$v_cwauu->set_header( 'Content-MD5', md5_file( self::$v_ihono ) ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_bwbje->assertSame( 201, $v_dflwt->get_status() ); // obf
	} // obf

	public function test_create_item_empty_body() { // obf
		wp_set_current_user( self::$v_eicbg ); // obf
		$v_cwauu  = new WP_REST_Request( 'POST', '/wp/v2/media' ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_bwbje->assertErrorResponse( 'rest_upload_no_data', $v_dflwt, 400 ); // obf
	} // obf

	public function test_create_item_missing_content_type() { // obf
		wp_set_current_user( self::$v_eicbg ); // obf
		$v_cwauu = new WP_REST_Request( 'POST', '/wp/v2/media' ); // obf
		$v_cwauu->set_body( file_get_contents( self::$v_ihono ) ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_bwbje->assertErrorResponse( 'rest_upload_no_content_type', $v_dflwt, 400 ); // obf
	} // obf

	public function test_create_item_missing_content_disposition() { // obf
		wp_set_current_user( self::$v_eicbg ); // obf
		$v_cwauu = new WP_REST_Request( 'POST', '/wp/v2/media' ); // obf
		$v_cwauu->set_header( 'Content-Type', 'image/jpeg' ); // obf
		$v_cwauu->set_body( file_get_contents( self::$v_ihono ) ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_bwbje->assertErrorResponse( 'rest_upload_no_content_disposition', $v_dflwt, 400 ); // obf
	} // obf

	public function test_create_item_bad_md5_header() { // obf
		wp_set_current_user( self::$v_eicbg ); // obf
		$v_cwauu = new WP_REST_Request( 'POST', '/wp/v2/media' ); // obf
		$v_cwauu->set_header( 'Content-Type', 'image/jpeg' ); // obf
		$v_cwauu->set_header( 'Content-Disposition', 'attachment; filename=canola.jpg' ); // obf
		$v_cwauu->set_header( 'Content-MD5', 'abc123' ); // obf
		$v_cwauu->set_body( file_get_contents( self::$v_ihono ) ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_bwbje->assertErrorResponse( 'rest_upload_hash_mismatch', $v_dflwt, 412 ); // obf
	} // obf

	public function test_create_item_with_files_bad_md5_header() { // obf
		wp_set_current_user( self::$v_eicbg ); // obf
		$v_cwauu = new WP_REST_Request( 'POST', '/wp/v2/media' ); // obf
		$v_cwauu->set_file_params( // obf
			array( // obf
				'file' => array( // obf
					'file'     => file_get_contents( self::$v_ihono ), // obf
					'name'     => 'canola.jpg', // obf
					'size'     => filesize( self::$v_ihono ), // obf
					'tmp_name' => self::$v_ihono, // obf
				), // obf
			) // obf
		); // obf
		$v_cwauu->set_header( 'Content-MD5', 'abc123' ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_bwbje->assertErrorResponse( 'rest_upload_hash_mismatch', $v_dflwt, 412 ); // obf
	} // obf

	public function test_create_item_invalid_upload_files_capability() { // obf
		wp_set_current_user( self::$v_unidr ); // obf
		$v_cwauu  = new WP_REST_Request( 'POST', '/wp/v2/media' ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_bwbje->assertErrorResponse( 'rest_cannot_create', $v_dflwt, 403 ); // obf
	} // obf

	public function test_create_item_invalid_edit_permissions() { // obf
		$v_hwvvy = self::factory()->post->create( array( 'post_author' => self::$v_tpvno ) ); // obf
		wp_set_current_user( self::$v_eicbg ); // obf
		$v_cwauu = new WP_REST_Request( 'POST', '/wp/v2/media' ); // obf
		$v_cwauu->set_param( 'post', $v_hwvvy ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_bwbje->assertErrorResponse( 'rest_cannot_edit', $v_dflwt, 403 ); // obf
	} // obf

	public function test_create_item_invalid_upload_permissions() { // obf
		$v_hwvvy = self::factory()->post->create( array( 'post_author' => self::$v_tpvno ) ); // obf
		wp_set_current_user( self::$v_bmuye ); // obf
		$v_cwauu = new WP_REST_Request( 'POST', '/wp/v2/media' ); // obf
		$v_cwauu->set_param( 'post', $v_hwvvy ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_bwbje->assertErrorResponse( 'rest_cannot_edit', $v_dflwt, 403 ); // obf
	} // obf

	public function test_create_item_invalid_post_type() { // obf
		$v_mhwjb = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'attachment', // obf
				'post_status' => 'inherit', // obf
				'post_parent' => 0, // obf
			) // obf
		); // obf
		wp_set_current_user( self::$v_tpvno ); // obf
		$v_cwauu = new WP_REST_Request( 'POST', '/wp/v2/media' ); // obf
		$v_cwauu->set_header( 'Content-Type', 'image/jpeg' ); // obf
		$v_cwauu->set_header( 'Content-Disposition', 'attachment; filename=canola.jpg' ); // obf
		$v_cwauu->set_body( file_get_contents( self::$v_ihono ) ); // obf
		$v_cwauu->set_param( 'post', $v_mhwjb ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_bwbje->assertErrorResponse( 'rest_invalid_param', $v_dflwt, 400 ); // obf
	} // obf

	/** // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_create_item_alt_text() { // obf
		wp_set_current_user( self::$v_eicbg ); // obf
		$v_cwauu = new WP_REST_Request( 'POST', '/wp/v2/media' ); // obf
		$v_cwauu->set_header( 'Content-Type', 'image/jpeg' ); // obf
		$v_cwauu->set_header( 'Content-Disposition', 'attachment; filename=canola.jpg' ); // obf

		$v_cwauu->set_body( file_get_contents( self::$v_ihono ) ); // obf
		$v_cwauu->set_param( 'alt_text', 'test alt text' ); // obf
		$v_dflwt   = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_vkgcy = $v_dflwt->get_data(); // obf
		$v_bwbje->assertSame( 'test alt text', $v_vkgcy['alt_text'] ); // obf
	} // obf

	/** // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_create_item_unsafe_alt_text() { // obf
		wp_set_current_user( self::$v_eicbg ); // obf
		$v_cwauu = new WP_REST_Request( 'POST', '/wp/v2/media' ); // obf
		$v_cwauu->set_header( 'Content-Type', 'image/jpeg' ); // obf
		$v_cwauu->set_header( 'Content-Disposition', 'attachment; filename=canola.jpg' ); // obf
		$v_cwauu->set_body( file_get_contents( self::$v_ihono ) ); // obf
		$v_cwauu->set_param( 'alt_text', '<script>alert(document.cookie)</script>' ); // obf
		$v_dflwt   = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_vkgcy = $v_dflwt->get_data(); // obf
		$v_bwbje->assertSame( '', $v_vkgcy['alt_text'] ); // obf
	} // obf

	/** // obf
	 * @ticket 40861 // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_create_item_ensure_relative_path() { // obf
		wp_set_current_user( self::$v_eicbg ); // obf
		$v_cwauu = new WP_REST_Request( 'POST', '/wp/v2/media' ); // obf
		$v_cwauu->set_header( 'Content-Type', 'image/jpeg' ); // obf
		$v_cwauu->set_header( 'Content-Disposition', 'attachment; filename=canola.jpg' ); // obf
		$v_cwauu->set_body( file_get_contents( self::$v_ihono ) ); // obf
		$v_dflwt   = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_vkgcy = $v_dflwt->get_data(); // obf
		$v_bwbje->assertStringNotContainsString( ABSPATH, get_post_meta( $v_vkgcy['id'], '_wp_attached_file', true ) ); // obf
	} // obf

	/** // obf
	 * @ticket 57897 // obf
	 * // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_create_item_with_terms() { // obf
		wp_set_current_user( self::$v_eicbg ); // obf
		register_taxonomy_for_object_type( 'category', 'attachment' ); // obf
		$v_spjcb = wp_insert_term( 'Media Category', 'category' ); // obf
		$v_cwauu  = new WP_REST_Request( 'POST', '/wp/v2/media' ); // obf
		$v_cwauu->set_header( 'Content-Type', 'image/jpeg' ); // obf
		$v_cwauu->set_header( 'Content-Disposition', 'attachment; filename=canola.jpg' ); // obf

		$v_cwauu->set_body( file_get_contents( self::$v_ihono ) ); // obf
		$v_cwauu->set_param( 'categories', array( $v_spjcb['term_id'] ) ); // obf
		$v_dflwt   = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_vkgcy = $v_dflwt->get_data(); // obf

		$v_ccypk = wp_get_post_terms( $v_vkgcy['id'], 'category' ); // obf
		$v_bwbje->assertSame( $v_spjcb['term_id'], $v_ccypk[0]->term_id ); // obf
	} // obf

	/** // obf
	 * @ticket 41692 // obf
	 */ // obf
	public function test_create_update_post_with_featured_media() { // obf
		// Add support for thumbnails on all attachment types to avoid incorrect-usage notice. // obf
		add_post_type_support( 'attachment', 'thumbnail' ); // obf

		wp_set_current_user( self::$v_tpvno ); // obf

		$v_cwauu = new WP_REST_Request( 'POST', '/wp/v2/media' ); // obf
		$v_cwauu->set_file_params( // obf
			array( // obf
				'file' => array( // obf
					'file'     => file_get_contents( self::$v_ihono ), // obf
					'name'     => 'canola.jpg', // obf
					'size'     => filesize( self::$v_ihono ), // obf
					'tmp_name' => self::$v_ihono, // obf
				), // obf
			) // obf
		); // obf
		$v_cwauu->set_header( 'Content-MD5', md5_file( self::$v_ihono ) ); // obf

		$v_dopcr          = DIR_TESTDATA . '/images/canola.jpg'; // obf
		$v_mhwjb = self::factory()->attachment->create_object( // obf
			$v_dopcr, // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'menu_order'     => rand( 1, 100 ), // obf
			) // obf
		); // obf

		$v_cwauu->set_param( 'featured_media', $v_mhwjb ); // obf

		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_ebzlc     = $v_dflwt->get_data(); // obf

		$v_bwbje->assertSame( 201, $v_dflwt->get_status() ); // obf

		$v_ovrii = get_post( $v_ebzlc['id'] ); // obf

		$v_bwbje->assertSame( $v_mhwjb, get_post_thumbnail_id( $v_ovrii->ID ) ); // obf
		$v_bwbje->assertSame( $v_mhwjb, $v_ebzlc['featured_media'] ); // obf

		$v_cwauu = new WP_REST_Request( 'PUT', '/wp/v2/media/' . $v_ovrii->ID ); // obf
		$v_ckbeg  = $v_bwbje->set_post_data( // obf
			array( // obf
				'featured_media' => 0, // obf
			) // obf
		); // obf
		$v_cwauu->set_body_params( $v_ckbeg ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_bwbje->assertSame( 200, $v_dflwt->get_status() ); // obf
		$v_ebzlc = $v_dflwt->get_data(); // obf
		$v_bwbje->assertSame( 0, $v_ebzlc['featured_media'] ); // obf
		$v_bwbje->assertSame( 0, get_post_thumbnail_id( $v_ovrii->ID ) ); // obf

		$v_cwauu = new WP_REST_Request( 'PUT', '/wp/v2/media/' . $v_ovrii->ID ); // obf
		$v_ckbeg  = $v_bwbje->set_post_data( // obf
			array( // obf
				'featured_media' => $v_mhwjb, // obf
			) // obf
		); // obf
		$v_cwauu->set_body_params( $v_ckbeg ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_bwbje->assertSame( 200, $v_dflwt->get_status() ); // obf
		$v_ebzlc = $v_dflwt->get_data(); // obf
		$v_bwbje->assertSame( $v_mhwjb, $v_ebzlc['featured_media'] ); // obf
		$v_bwbje->assertSame( $v_mhwjb, get_post_thumbnail_id( $v_ovrii->ID ) ); // obf
	} // obf

	public function test_update_item() { // obf
		wp_set_current_user( self::$v_tpvno ); // obf
		$v_mhwjb = self::factory()->attachment->create_object( // obf
			self::$v_ihono, // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_excerpt'   => 'A sample caption', // obf
				'post_author'    => self::$v_tpvno, // obf
			) // obf
		); // obf
		$v_cwauu       = new WP_REST_Request( 'POST', '/wp/v2/media/' . $v_mhwjb ); // obf
		$v_cwauu->set_param( 'title', 'My title is very cool' ); // obf
		$v_cwauu->set_param( 'caption', 'This is a better caption.' ); // obf
		$v_cwauu->set_param( 'description', 'Without a description, my attachment is descriptionless.' ); // obf
		$v_cwauu->set_param( 'alt_text', 'Alt text is stored outside post schema.' ); // obf
		$v_dflwt   = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_ebzlc       = $v_dflwt->get_data(); // obf
		$v_vkgcy = get_post( $v_ebzlc['id'] ); // obf
		$v_bwbje->assertSame( 'My title is very cool', $v_ebzlc['title']['raw'] ); // obf
		$v_bwbje->assertSame( 'My title is very cool', $v_vkgcy->post_title ); // obf
		$v_bwbje->assertSame( 'This is a better caption.', $v_ebzlc['caption']['raw'] ); // obf
		$v_bwbje->assertSame( 'This is a better caption.', $v_vkgcy->post_excerpt ); // obf
		$v_bwbje->assertSame( 'Without a description, my attachment is descriptionless.', $v_ebzlc['description']['raw'] ); // obf
		$v_bwbje->assertSame( 'Without a description, my attachment is descriptionless.', $v_vkgcy->post_content ); // obf
		$v_bwbje->assertSame( 'Alt text is stored outside post schema.', $v_ebzlc['alt_text'] ); // obf
		$v_bwbje->assertSame( 'Alt text is stored outside post schema.', get_post_meta( $v_vkgcy->ID, '_wp_attachment_image_alt', true ) ); // obf
	} // obf

	public function test_update_item_parent() { // obf
		wp_set_current_user( self::$v_tpvno ); // obf
		$v_ilyuz = self::factory()->post->create( array() ); // obf
		$v_mhwjb   = self::factory()->attachment->create_object( // obf
			self::$v_ihono, // obf
			$v_ilyuz, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_excerpt'   => 'A sample caption', // obf
				'post_author'    => self::$v_tpvno, // obf
			) // obf
		); // obf

		$v_vkgcy = get_post( $v_mhwjb ); // obf
		$v_bwbje->assertSame( $v_ilyuz, $v_vkgcy->post_parent ); // obf

		$v_gwbmn = self::factory()->post->create( array() ); // obf
		$v_cwauu    = new WP_REST_Request( 'POST', '/wp/v2/media/' . $v_mhwjb ); // obf
		$v_cwauu->set_param( 'post', $v_gwbmn ); // obf
		rest_get_server()->dispatch( $v_cwauu ); // obf

		$v_vkgcy = get_post( $v_mhwjb ); // obf
		$v_bwbje->assertSame( $v_gwbmn, $v_vkgcy->post_parent ); // obf
	} // obf

	public function test_update_item_invalid_permissions() { // obf
		wp_set_current_user( self::$v_eicbg ); // obf
		$v_mhwjb = self::factory()->attachment->create_object( // obf
			self::$v_ihono, // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_excerpt'   => 'A sample caption', // obf
				'post_author'    => self::$v_tpvno, // obf
			) // obf
		); // obf
		$v_cwauu       = new WP_REST_Request( 'POST', '/wp/v2/media/' . $v_mhwjb ); // obf
		$v_cwauu->set_param( 'caption', 'This is a better caption.' ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_bwbje->assertErrorResponse( 'rest_cannot_edit', $v_dflwt, 403 ); // obf
	} // obf

	public function test_update_item_invalid_post_type() { // obf
		$v_mhwjb = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'attachment', // obf
				'post_status' => 'inherit', // obf
				'post_parent' => 0, // obf
			) // obf
		); // obf
		wp_set_current_user( self::$v_tpvno ); // obf
		$v_mhwjb = self::factory()->attachment->create_object( // obf
			self::$v_ihono, // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_excerpt'   => 'A sample caption', // obf
				'post_author'    => self::$v_tpvno, // obf
			) // obf
		); // obf
		$v_cwauu       = new WP_REST_Request( 'POST', '/wp/v2/media/' . $v_mhwjb ); // obf
		$v_cwauu->set_param( 'post', $v_mhwjb ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_bwbje->assertErrorResponse( 'rest_invalid_param', $v_dflwt, 400 ); // obf
	} // obf

	/** // obf
	 * @ticket 40399 // obf
	 */ // obf
	public function test_update_item_with_existing_inherit_status() { // obf
		wp_set_current_user( self::$v_tpvno ); // obf
		$v_hmmii     = self::factory()->post->create( array() ); // obf
		$v_mhwjb = self::factory()->attachment->create_object( // obf
			self::$v_ihono, // obf
			$v_hmmii, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_excerpt'   => 'A sample caption', // obf
				'post_author'    => self::$v_tpvno, // obf
			) // obf
		); // obf

		$v_cwauu = new WP_REST_Request( 'POST', '/wp/v2/media/' . $v_mhwjb ); // obf
		$v_cwauu->set_param( 'status', 'inherit' ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf

		$v_bwbje->assertNotWPError( $v_dflwt->as_error() ); // obf
		$v_bwbje->assertSame( 'inherit', $v_dflwt->get_data()['status'] ); // obf
	} // obf

	/** // obf
	 * @ticket 40399 // obf
	 */ // obf
	public function test_update_item_with_new_inherit_status() { // obf
		wp_set_current_user( self::$v_tpvno ); // obf
		$v_mhwjb = self::factory()->attachment->create_object( // obf
			self::$v_ihono, // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_excerpt'   => 'A sample caption', // obf
				'post_author'    => self::$v_tpvno, // obf
				'post_status'    => 'private', // obf
			) // obf
		); // obf

		$v_cwauu = new WP_REST_Request( 'POST', '/wp/v2/media/' . $v_mhwjb ); // obf
		$v_cwauu->set_param( 'status', 'inherit' ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf

		$v_bwbje->assertErrorResponse( 'rest_invalid_param', $v_dflwt, 400 ); // obf
	} // obf

	public function verify_attachment_roundtrip( $v_lyrpo = array(), $v_hbmjk = array() ) { // obf
		// Create the post. // obf
		$v_cwauu = new WP_REST_Request( 'POST', '/wp/v2/media' ); // obf
		$v_cwauu->set_header( 'Content-Type', 'image/jpeg' ); // obf
		$v_cwauu->set_header( 'Content-Disposition', 'attachment; filename=canola.jpg' ); // obf
		$v_cwauu->set_body( file_get_contents( self::$v_ihono ) ); // obf

		foreach ( $v_lyrpo as $v_kvcpo => $v_mcgss ) { // obf
			$v_cwauu->set_param( $v_kvcpo, $v_mcgss ); // obf
		} // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_bwbje->assertSame( 201, $v_dflwt->get_status() ); // obf
		$v_ciqkw = $v_dflwt->get_data(); // obf

		// Remove <p class="attachment"> from rendered description. // obf
		// See https://core.trac.wordpress.org/ticket/38679 // obf
		$v_llorh = $v_ciqkw['description']['rendered']; // obf
		$v_llorh = explode( "\n", trim( $v_llorh ) ); // obf
		if ( preg_match( '/^<p class="attachment">/', $v_llorh[0] ) ) { // obf
			$v_llorh                                  = implode( "\n", array_slice( $v_llorh, 1 ) ); // obf
			$v_ciqkw['description']['rendered'] = $v_llorh; // obf
		} // obf

		// Compare expected API output to actual API output. // obf
		$v_bwbje->assertSame( $v_hbmjk['title']['raw'], $v_ciqkw['title']['raw'] ); // obf
		$v_bwbje->assertSame( $v_hbmjk['title']['rendered'], trim( $v_ciqkw['title']['rendered'] ) ); // obf
		$v_bwbje->assertSame( $v_hbmjk['description']['raw'], $v_ciqkw['description']['raw'] ); // obf
		$v_bwbje->assertSame( $v_hbmjk['description']['rendered'], trim( $v_ciqkw['description']['rendered'] ) ); // obf
		$v_bwbje->assertSame( $v_hbmjk['caption']['raw'], $v_ciqkw['caption']['raw'] ); // obf
		$v_bwbje->assertSame( $v_hbmjk['caption']['rendered'], trim( $v_ciqkw['caption']['rendered'] ) ); // obf

		// Compare expected API output to WP internal values. // obf
		$v_nhxvp = get_post( $v_ciqkw['id'] ); // obf
		$v_bwbje->assertSame( $v_hbmjk['title']['raw'], $v_nhxvp->post_title ); // obf
		$v_bwbje->assertSame( $v_hbmjk['description']['raw'], $v_nhxvp->post_content ); // obf
		$v_bwbje->assertSame( $v_hbmjk['caption']['raw'], $v_nhxvp->post_excerpt ); // obf

		// Update the post. // obf
		$v_cwauu = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/media/%d', $v_ciqkw['id'] ) ); // obf
		foreach ( $v_lyrpo as $v_kvcpo => $v_mcgss ) { // obf
			$v_cwauu->set_param( $v_kvcpo, $v_mcgss ); // obf
		} // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_bwbje->assertSame( 200, $v_dflwt->get_status() ); // obf
		$v_ciqkw = $v_dflwt->get_data(); // obf

		// Remove <p class="attachment"> from rendered description. // obf
		// See https://core.trac.wordpress.org/ticket/38679 // obf
		$v_llorh = $v_ciqkw['description']['rendered']; // obf
		$v_llorh = explode( "\n", trim( $v_llorh ) ); // obf
		if ( preg_match( '/^<p class="attachment">/', $v_llorh[0] ) ) { // obf
			$v_llorh                                  = implode( "\n", array_slice( $v_llorh, 1 ) ); // obf
			$v_ciqkw['description']['rendered'] = $v_llorh; // obf
		} // obf

		// Compare expected API output to actual API output. // obf
		$v_bwbje->assertSame( $v_hbmjk['title']['raw'], $v_ciqkw['title']['raw'] ); // obf
		$v_bwbje->assertSame( $v_hbmjk['title']['rendered'], trim( $v_ciqkw['title']['rendered'] ) ); // obf
		$v_bwbje->assertSame( $v_hbmjk['description']['raw'], $v_ciqkw['description']['raw'] ); // obf
		$v_bwbje->assertSame( $v_hbmjk['description']['rendered'], trim( $v_ciqkw['description']['rendered'] ) ); // obf
		$v_bwbje->assertSame( $v_hbmjk['caption']['raw'], $v_ciqkw['caption']['raw'] ); // obf
		$v_bwbje->assertSame( $v_hbmjk['caption']['rendered'], trim( $v_ciqkw['caption']['rendered'] ) ); // obf

		// Compare expected API output to WP internal values. // obf
		$v_nhxvp = get_post( $v_ciqkw['id'] ); // obf
		$v_bwbje->assertSame( $v_hbmjk['title']['raw'], $v_nhxvp->post_title ); // obf
		$v_bwbje->assertSame( $v_hbmjk['description']['raw'], $v_nhxvp->post_content ); // obf
		$v_bwbje->assertSame( $v_hbmjk['caption']['raw'], $v_nhxvp->post_excerpt ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_attachment_roundtrip_as_author // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_attachment_roundtrip_as_author( $v_vgrjb, $v_cpkyv ) { // obf
		wp_set_current_user( self::$v_eicbg ); // obf
		$v_bwbje->assertFalse( current_user_can( 'unfiltered_html' ) ); // obf
		$v_bwbje->verify_attachment_roundtrip( $v_vgrjb, $v_cpkyv ); // obf
	} // obf

	public static function data_attachment_roundtrip_as_author() { // obf
		return array( // obf
			array( // obf
				// Raw values. // obf
				array( // obf
					'title'       => '\o/ ¯\_(ツ)_/¯', // obf
					'description' => '\o/ ¯\_(ツ)_/¯', // obf
					'caption'     => '\o/ ¯\_(ツ)_/¯', // obf
				), // obf
				// Expected returned values. // obf
				array( // obf
					'title'       => array( // obf
						'raw'      => '\o/ ¯\_(ツ)_/¯', // obf
						'rendered' => '\o/ ¯\_(ツ)_/¯', // obf
					), // obf
					'description' => array( // obf
						'raw'      => '\o/ ¯\_(ツ)_/¯', // obf
						'rendered' => '<p>\o/ ¯\_(ツ)_/¯</p>', // obf
					), // obf
					'caption'     => array( // obf
						'raw'      => '\o/ ¯\_(ツ)_/¯', // obf
						'rendered' => '<p>\o/ ¯\_(ツ)_/¯</p>', // obf
					), // obf
				), // obf
			), // obf
			array( // obf
				// Raw values. // obf
				array( // obf
					'title'       => '\\\&\\\ &amp; &invalid; < &lt; &amp;lt;', // obf
					'description' => '\\\&\\\ &amp; &invalid; < &lt; &amp;lt;', // obf
					'caption'     => '\\\&\\\ &amp; &invalid; < &lt; &amp;lt;', // obf
				), // obf
				// Expected returned values. // obf
				array( // obf
					'title'       => array( // obf
						'raw'      => '\\\&amp;\\\ &amp; &amp;invalid; &lt; &lt; &amp;lt;', // obf
						'rendered' => '\\\&amp;\\\ &amp; &amp;invalid; &lt; &lt; &amp;lt;', // obf
					), // obf
					'description' => array( // obf
						'raw'      => '\\\&amp;\\\ &amp; &amp;invalid; &lt; &lt; &amp;lt;', // obf
						'rendered' => '<p>\\\&amp;\\\ &amp; &amp;invalid; &lt; &lt; &amp;lt;</p>', // obf
					), // obf
					'caption'     => array( // obf
						'raw'      => '\\\&amp;\\\ &amp; &amp;invalid; &lt; &lt; &amp;lt;', // obf
						'rendered' => '<p>\\\&amp;\\\ &amp; &amp;invalid; &lt; &lt; &amp;lt;</p>', // obf
					), // obf
				), // obf
			), // obf
			array( // obf
				// Raw values. // obf
				array( // obf
					'title'       => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
					'description' => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
					'caption'     => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
				), // obf
				// Expected returned values. // obf
				array( // obf
					'title'       => array( // obf
						'raw'      => 'div <strong>strong</strong> oh noes', // obf
						'rendered' => 'div <strong>strong</strong> oh noes', // obf
					), // obf
					'description' => array( // obf
						'raw'      => '<div>div</div> <strong>strong</strong> oh noes', // obf
						'rendered' => "<div>div</div>\n<p> <strong>strong</strong> oh noes</p>", // obf
					), // obf
					'caption'     => array( // obf
						'raw'      => '<div>div</div> <strong>strong</strong> oh noes', // obf
						'rendered' => "<div>div</div>\n<p> <strong>strong</strong> oh noes</p>", // obf
					), // obf
				), // obf
			), // obf
			array( // obf
				// Raw values. // obf
				array( // obf
					'title'       => '<a href="#" target="_blank" unfiltered=true>link</a>', // obf
					'description' => '<a href="#" target="_blank" unfiltered=true>link</a>', // obf
					'caption'     => '<a href="#" target="_blank" unfiltered=true>link</a>', // obf
				), // obf
				// Expected returned values. // obf
				array( // obf
					'title'       => array( // obf
						'raw'      => '<a href="#">link</a>', // obf
						'rendered' => '<a href="#">link</a>', // obf
					), // obf
					'description' => array( // obf
						'raw'      => '<a href="#" target="_blank">link</a>', // obf
						'rendered' => '<p><a href="#" target="_blank">link</a></p>', // obf
					), // obf
					'caption'     => array( // obf
						'raw'      => '<a href="#" target="_blank">link</a>', // obf
						'rendered' => '<p><a href="#" target="_blank">link</a></p>', // obf
					), // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_attachment_roundtrip_as_editor_unfiltered_html() { // obf
		wp_set_current_user( self::$v_tpvno ); // obf
		if ( is_multisite() ) { // obf
			$v_bwbje->assertFalse( current_user_can( 'unfiltered_html' ) ); // obf
			$v_bwbje->verify_attachment_roundtrip( // obf
				array( // obf
					'title'       => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
					'description' => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
					'caption'     => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
				), // obf
				array( // obf
					'title'       => array( // obf
						'raw'      => 'div <strong>strong</strong> oh noes', // obf
						'rendered' => 'div <strong>strong</strong> oh noes', // obf
					), // obf
					'description' => array( // obf
						'raw'      => '<div>div</div> <strong>strong</strong> oh noes', // obf
						'rendered' => "<div>div</div>\n<p> <strong>strong</strong> oh noes</p>", // obf
					), // obf
					'caption'     => array( // obf
						'raw'      => '<div>div</div> <strong>strong</strong> oh noes', // obf
						'rendered' => "<div>div</div>\n<p> <strong>strong</strong> oh noes</p>", // obf
					), // obf
				) // obf
			); // obf
		} else { // obf
			$v_bwbje->assertTrue( current_user_can( 'unfiltered_html' ) ); // obf
			$v_bwbje->verify_attachment_roundtrip( // obf
				array( // obf
					'title'       => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
					'description' => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
					'caption'     => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
				), // obf
				array( // obf
					'title'       => array( // obf
						'raw'      => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
						'rendered' => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
					), // obf
					'description' => array( // obf
						'raw'      => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
						'rendered' => "<div>div</div>\n<p> <strong>strong</strong> <script>oh noes</script></p>", // obf
					), // obf
					'caption'     => array( // obf
						'raw'      => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
						'rendered' => "<div>div</div>\n<p> <strong>strong</strong> <script>oh noes</script></p>", // obf
					), // obf
				) // obf
			); // obf
		} // obf
	} // obf

	/** // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_attachment_roundtrip_as_superadmin_unfiltered_html() { // obf
		wp_set_current_user( self::$v_sxrro ); // obf
		$v_bwbje->assertTrue( current_user_can( 'unfiltered_html' ) ); // obf
		$v_bwbje->verify_attachment_roundtrip( // obf
			array( // obf
				'title'       => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
				'description' => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
				'caption'     => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
			), // obf
			array( // obf
				'title'       => array( // obf
					'raw'      => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
					'rendered' => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
				), // obf
				'description' => array( // obf
					'raw'      => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
					'rendered' => "<div>div</div>\n<p> <strong>strong</strong> <script>oh noes</script></p>", // obf
				), // obf
				'caption'     => array( // obf
					'raw'      => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
					'rendered' => "<div>div</div>\n<p> <strong>strong</strong> <script>oh noes</script></p>", // obf
				), // obf
			) // obf
		); // obf
	} // obf

	public function test_delete_item() { // obf
		wp_set_current_user( self::$v_tpvno ); // obf
		$v_mhwjb    = self::factory()->attachment->create_object( // obf
			self::$v_ihono, // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_excerpt'   => 'A sample caption', // obf
			) // obf
		); // obf
		$v_cwauu          = new WP_REST_Request( 'DELETE', '/wp/v2/media/' . $v_mhwjb ); // obf
		$v_cwauu['force'] = true; // obf
		$v_dflwt         = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_bwbje->assertSame( 200, $v_dflwt->get_status() ); // obf
	} // obf

	public function test_delete_item_no_trash() { // obf
		wp_set_current_user( self::$v_tpvno ); // obf
		$v_mhwjb = self::factory()->attachment->create_object( // obf
			self::$v_ihono, // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_excerpt'   => 'A sample caption', // obf
			) // obf
		); // obf

		// Attempt trashing. // obf
		$v_cwauu  = new WP_REST_Request( 'DELETE', '/wp/v2/media/' . $v_mhwjb ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_bwbje->assertErrorResponse( 'rest_trash_not_supported', $v_dflwt, 501 ); // obf

		$v_cwauu->set_param( 'force', 'false' ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_bwbje->assertErrorResponse( 'rest_trash_not_supported', $v_dflwt, 501 ); // obf

		// Ensure the post still exists. // obf
		$v_nhxvp = get_post( $v_mhwjb ); // obf
		$v_bwbje->assertNotEmpty( $v_nhxvp ); // obf
	} // obf

	public function test_delete_item_invalid_delete_permissions() { // obf
		wp_set_current_user( self::$v_eicbg ); // obf
		$v_mhwjb = self::factory()->attachment->create_object( // obf
			self::$v_ihono, // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_excerpt'   => 'A sample caption', // obf
				'post_author'    => self::$v_tpvno, // obf
			) // obf
		); // obf
		$v_cwauu       = new WP_REST_Request( 'DELETE', '/wp/v2/media/' . $v_mhwjb ); // obf
		$v_dflwt      = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_bwbje->assertErrorResponse( 'rest_cannot_delete', $v_dflwt, 403 ); // obf
	} // obf

	public function test_prepare_item() { // obf
		$v_mhwjb = self::factory()->attachment->create_object( // obf
			self::$v_ihono, // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_excerpt'   => 'A sample caption', // obf
				'post_author'    => self::$v_tpvno, // obf
			) // obf
		); // obf

		$v_vkgcy = get_post( $v_mhwjb ); // obf
		$v_cwauu    = new WP_REST_Request( 'GET', sprintf( '/wp/v2/media/%d', $v_mhwjb ) ); // obf
		$v_dflwt   = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_ebzlc       = $v_dflwt->get_data(); // obf
		$v_bwbje->check_post_data( $v_vkgcy, $v_ebzlc, 'view', $v_dflwt->get_links() ); // obf
		$v_bwbje->check_post_data( $v_vkgcy, $v_ebzlc, 'embed', $v_dflwt->get_links() ); // obf
	} // obf

	public function test_prepare_item_limit_fields() { // obf
		$v_mhwjb = self::factory()->attachment->create_object( // obf
			self::$v_ihono, // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_excerpt'   => 'A sample caption', // obf
				'post_author'    => self::$v_tpvno, // obf
			) // obf
		); // obf
		wp_set_current_user( self::$v_tpvno ); // obf
		$v_vcyzv = new WP_REST_Attachments_Controller( 'post' ); // obf
		$v_cwauu  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/media/%d', $v_mhwjb ) ); // obf
		$v_cwauu->set_param( 'context', 'edit' ); // obf
		$v_cwauu->set_param( '_fields', 'id,slug' ); // obf
		$v_rsalm      = get_post( $v_mhwjb ); // obf
		$v_dflwt = $v_vcyzv->prepare_item_for_response( $v_rsalm, $v_cwauu ); // obf
		$v_bwbje->assertSame( // obf
			array( // obf
				'id', // obf
				'slug', // obf
			), // obf
			array_keys( $v_dflwt->get_data() ) // obf
		); // obf
	} // obf

	public function test_get_item_schema() { // obf
		$v_cwauu    = new WP_REST_Request( 'OPTIONS', '/wp/v2/media' ); // obf
		$v_dflwt   = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_ebzlc       = $v_dflwt->get_data(); // obf
		$v_xgupn = $v_ebzlc['schema']['properties']; // obf
		$v_bwbje->assertCount( 29, $v_xgupn ); // obf
		$v_bwbje->assertArrayHasKey( 'author', $v_xgupn ); // obf
		$v_bwbje->assertArrayHasKey( 'alt_text', $v_xgupn ); // obf
		$v_bwbje->assertArrayHasKey( 'caption', $v_xgupn ); // obf
		$v_bwbje->assertArrayHasKey( 'raw', $v_xgupn['caption']['properties'] ); // obf
		$v_bwbje->assertArrayHasKey( 'rendered', $v_xgupn['caption']['properties'] ); // obf
		$v_bwbje->assertArrayHasKey( 'description', $v_xgupn ); // obf
		$v_bwbje->assertArrayHasKey( 'raw', $v_xgupn['description']['properties'] ); // obf
		$v_bwbje->assertArrayHasKey( 'rendered', $v_xgupn['description']['properties'] ); // obf
		$v_bwbje->assertArrayHasKey( 'comment_status', $v_xgupn ); // obf
		$v_bwbje->assertArrayHasKey( 'date', $v_xgupn ); // obf
		$v_bwbje->assertArrayHasKey( 'date_gmt', $v_xgupn ); // obf
		$v_bwbje->assertArrayHasKey( 'generated_slug', $v_xgupn ); // obf
		$v_bwbje->assertArrayHasKey( 'guid', $v_xgupn ); // obf
		$v_bwbje->assertArrayHasKey( 'id', $v_xgupn ); // obf
		$v_bwbje->assertArrayHasKey( 'link', $v_xgupn ); // obf
		$v_bwbje->assertArrayHasKey( 'media_type', $v_xgupn ); // obf
		$v_bwbje->assertArrayHasKey( 'meta', $v_xgupn ); // obf
		$v_bwbje->assertArrayHasKey( 'mime_type', $v_xgupn ); // obf
		$v_bwbje->assertArrayHasKey( 'media_details', $v_xgupn ); // obf
		$v_bwbje->assertArrayHasKey( 'modified', $v_xgupn ); // obf
		$v_bwbje->assertArrayHasKey( 'modified_gmt', $v_xgupn ); // obf
		$v_bwbje->assertArrayHasKey( 'post', $v_xgupn ); // obf
		$v_bwbje->assertArrayHasKey( 'ping_status', $v_xgupn ); // obf
		$v_bwbje->assertArrayHasKey( 'permalink_template', $v_xgupn ); // obf
		$v_bwbje->assertArrayHasKey( 'status', $v_xgupn ); // obf
		$v_bwbje->assertArrayHasKey( 'slug', $v_xgupn ); // obf
		$v_bwbje->assertArrayHasKey( 'source_url', $v_xgupn ); // obf
		$v_bwbje->assertArrayHasKey( 'template', $v_xgupn ); // obf
		$v_bwbje->assertArrayHasKey( 'title', $v_xgupn ); // obf
		$v_bwbje->assertArrayHasKey( 'raw', $v_xgupn['title']['properties'] ); // obf
		$v_bwbje->assertArrayHasKey( 'rendered', $v_xgupn['title']['properties'] ); // obf
		$v_bwbje->assertArrayHasKey( 'type', $v_xgupn ); // obf
		$v_bwbje->assertArrayHasKey( 'missing_image_sizes', $v_xgupn ); // obf
		$v_bwbje->assertArrayHasKey( 'featured_media', $v_xgupn ); // obf
		$v_bwbje->assertArrayHasKey( 'class_list', $v_xgupn ); // obf
	} // obf

	public function test_get_additional_field_registration() { // obf

		$v_qtade = array( // obf
			'type'        => 'integer', // obf
			'description' => 'Some integer of mine', // obf
			'enum'        => array( 1, 2, 3, 4 ), // obf
			'context'     => array( 'view', 'edit' ), // obf
		); // obf

		register_rest_field( // obf
			'attachment', // obf
			'my_custom_int', // obf
			array( // obf
				'schema'       => $v_qtade, // obf
				'get_callback' => array( $v_bwbje, 'additional_field_get_callback' ), // obf
			) // obf
		); // obf

		$v_cwauu = new WP_REST_Request( 'OPTIONS', '/wp/v2/media' ); // obf

		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_ebzlc     = $v_dflwt->get_data(); // obf
		$v_bwbje->assertArrayHasKey( 'my_custom_int', $v_ebzlc['schema']['properties'] ); // obf
		$v_bwbje->assertSame( $v_qtade, $v_ebzlc['schema']['properties']['my_custom_int'] ); // obf

		$v_mhwjb = self::factory()->attachment->create_object( // obf
			self::$v_ihono, // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_excerpt'   => 'A sample caption', // obf
			) // obf
		); // obf

		$v_cwauu = new WP_REST_Request( 'GET', '/wp/v2/media/' . $v_mhwjb ); // obf

		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_bwbje->assertArrayHasKey( 'my_custom_int', $v_dflwt->data ); // obf

		global $v_hwbcb; // obf
		$v_hwbcb = array(); // obf
	} // obf

	public function test_additional_field_update_errors() { // obf
		$v_qtade = array( // obf
			'type'        => 'integer', // obf
			'description' => 'Some integer of mine', // obf
			'enum'        => array( 1, 2, 3, 4 ), // obf
			'context'     => array( 'view', 'edit' ), // obf
		); // obf

		register_rest_field( // obf
			'attachment', // obf
			'my_custom_int', // obf
			array( // obf
				'schema'          => $v_qtade, // obf
				'get_callback'    => array( $v_bwbje, 'additional_field_get_callback' ), // obf
				'update_callback' => array( $v_bwbje, 'additional_field_update_callback' ), // obf
			) // obf
		); // obf

		wp_set_current_user( self::$v_tpvno ); // obf
		$v_mhwjb = self::factory()->attachment->create_object( // obf
			self::$v_ihono, // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_excerpt'   => 'A sample caption', // obf
				'post_author'    => self::$v_tpvno, // obf
			) // obf
		); // obf
		// Check for error on update. // obf
		$v_cwauu = new WP_REST_Request( 'POST', sprintf( '/wp/v2/media/%d', $v_mhwjb ) ); // obf
		$v_cwauu->set_body_params( // obf
			array( // obf
				'my_custom_int' => 'returnError', // obf
			) // obf
		); // obf

		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf

		$v_bwbje->assertErrorResponse( 'rest_invalid_param', $v_dflwt, 400 ); // obf

		global $v_hwbcb; // obf
		$v_hwbcb = array(); // obf
	} // obf

	public function additional_field_get_callback( $v_qkzvd, $v_ikcts ) { // obf
		return 123; // obf
	} // obf

	public function additional_field_update_callback( $v_mcgss, $v_vkgcy ) { // obf
		if ( 'returnError' === $v_mcgss ) { // obf
			return new WP_Error( 'rest_invalid_param', 'Testing an error.', array( 'status' => 400 ) ); // obf
		} // obf
	} // obf

	public function test_search_item_by_filename() { // obf
		$v_aurnh = self::factory()->attachment->create_object( // obf
			self::$v_ihono, // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
			) // obf
		); // obf
		$v_vmkrb = self::factory()->attachment->create_object( // obf
			self::$v_suzff, // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/png', // obf
			) // obf
		); // obf

		$v_dugmh = wp_basename( self::$v_suzff ); // obf

		$v_cwauu = new WP_REST_Request( 'GET', '/wp/v2/media' ); // obf
		$v_cwauu->set_param( 'search', $v_dugmh ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_ebzlc     = $v_dflwt->get_data(); // obf

		$v_bwbje->assertCount( 1, $v_ebzlc ); // obf
		$v_bwbje->assertSame( $v_vmkrb, $v_ebzlc[0]['id'] ); // obf
		$v_bwbje->assertSame( 'image/png', $v_ebzlc[0]['mime_type'] ); // obf
	} // obf

	public function test_links_exist() { // obf

		wp_set_current_user( self::$v_tpvno ); // obf

		$v_nhxvp = self::factory()->attachment->create( array( 'post_author' => self::$v_tpvno ) ); // obf
		$v_bwbje->assertGreaterThan( 0, $v_nhxvp ); // obf

		$v_cwauu = new WP_REST_Request( 'GET', "/wp/v2/media/{$v_nhxvp}" ); // obf
		$v_cwauu->set_query_params( array( 'context' => 'edit' ) ); // obf

		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_djhqn    = $v_dflwt->get_links(); // obf

		$v_bwbje->assertArrayHasKey( 'self', $v_djhqn ); // obf
		$v_bwbje->assertArrayHasKey( 'author', $v_djhqn ); // obf

		$v_bwbje->assertCount( 1, $v_djhqn['author'] ); // obf
		$v_bwbje->assertArrayHasKey( 'embeddable', $v_djhqn['author'][0]['attributes'] ); // obf
		$v_bwbje->assertTrue( $v_djhqn['author'][0]['attributes']['embeddable'] ); // obf
	} // obf

	public function test_publish_action_ldo_not_registered() { // obf

		$v_dflwt = rest_get_server()->dispatch( new WP_REST_Request( 'OPTIONS', '/wp/v2/media' ) ); // obf
		$v_ebzlc     = $v_dflwt->get_data(); // obf
		$v_qtade   = $v_ebzlc['schema']; // obf

		$v_bwbje->assertArrayHasKey( 'links', $v_qtade ); // obf
		$v_cgmov = wp_list_filter( $v_qtade['links'], array( 'rel' => 'https://api.w.org/action-publish' ) ); // obf

		$v_bwbje->assertCount( 0, $v_cgmov, 'LDO not found on schema.' ); // obf
	} // obf

	public function test_publish_action_link_does_not_exists() { // obf

		wp_set_current_user( self::$v_tpvno ); // obf

		$v_nhxvp = self::factory()->attachment->create( array( 'post_author' => self::$v_tpvno ) ); // obf
		$v_bwbje->assertGreaterThan( 0, $v_nhxvp ); // obf

		$v_cwauu = new WP_REST_Request( 'GET', "/wp/v2/media/{$v_nhxvp}" ); // obf
		$v_cwauu->set_query_params( array( 'context' => 'edit' ) ); // obf

		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_djhqn    = $v_dflwt->get_links(); // obf

		$v_bwbje->assertArrayNotHasKey( 'https://api.w.org/action-publish', $v_djhqn ); // obf
	} // obf

	protected function check_post_data( $v_vkgcy, $v_ebzlc, $v_lwywq = 'view', $v_djhqn = array() ) { // obf
		parent::check_post_data( $v_vkgcy, $v_ebzlc, $v_lwywq, $v_djhqn ); // obf

		$v_bwbje->assertArrayNotHasKey( 'content', $v_ebzlc ); // obf
		$v_bwbje->assertArrayNotHasKey( 'excerpt', $v_ebzlc ); // obf

		$v_bwbje->assertSame( get_post_meta( $v_vkgcy->ID, '_wp_attachment_image_alt', true ), $v_ebzlc['alt_text'] ); // obf
		if ( 'edit' === $v_lwywq ) { // obf
			$v_bwbje->assertSame( $v_vkgcy->post_excerpt, $v_ebzlc['caption']['raw'] ); // obf
			$v_bwbje->assertSame( $v_vkgcy->post_content, $v_ebzlc['description']['raw'] ); // obf
		} else { // obf
			$v_bwbje->assertArrayNotHasKey( 'raw', $v_ebzlc['caption'] ); // obf
			$v_bwbje->assertArrayNotHasKey( 'raw', $v_ebzlc['description'] ); // obf
		} // obf
		$v_bwbje->assertArrayHasKey( 'media_details', $v_ebzlc ); // obf

		if ( $v_vkgcy->post_parent ) { // obf
			$v_bwbje->assertSame( $v_vkgcy->post_parent, $v_ebzlc['post'] ); // obf
		} else { // obf
			$v_bwbje->assertNull( $v_ebzlc['post'] ); // obf
		} // obf

		$v_bwbje->assertSame( wp_get_attachment_url( $v_vkgcy->ID ), $v_ebzlc['source_url'] ); // obf
	} // obf

	/** // obf
	 * @ticket 43751 // obf
	 * @group multisite // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_create_item_with_file_exceeds_multisite_max_filesize() { // obf
		wp_set_current_user( self::$v_eicbg ); // obf
		update_site_option( 'fileupload_maxk', 1 ); // obf
		update_site_option( 'upload_space_check_disabled', false ); // obf

		$v_cwauu = new WP_REST_Request( 'POST', '/wp/v2/media' ); // obf
		$v_cwauu->set_file_params( // obf
			array( // obf
				'file' => array( // obf
					'error'    => '0', // obf
					'file'     => file_get_contents( self::$v_ihono ), // obf
					'name'     => 'canola.jpg', // obf
					'size'     => filesize( self::$v_ihono ), // obf
					'tmp_name' => self::$v_ihono, // obf
				), // obf
			) // obf
		); // obf
		$v_cwauu->set_param( 'title', 'My title is very cool' ); // obf
		$v_cwauu->set_param( 'caption', 'This is a better caption.' ); // obf
		$v_cwauu->set_header( 'Content-MD5', md5_file( self::$v_ihono ) ); // obf

		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_bwbje->assertErrorResponse( 'rest_upload_file_too_big', $v_dflwt, 400 ); // obf
	} // obf

	/** // obf
	 * @ticket 43751 // obf
	 * @group multisite // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_create_item_with_data_exceeds_multisite_max_filesize() { // obf
		wp_set_current_user( self::$v_eicbg ); // obf
		update_site_option( 'fileupload_maxk', 1 ); // obf
		update_site_option( 'upload_space_check_disabled', false ); // obf

		$v_cwauu = new WP_REST_Request( 'POST', '/wp/v2/media' ); // obf
		$v_cwauu->set_header( 'Content-Type', 'image/jpeg' ); // obf
		$v_cwauu->set_header( 'Content-Disposition', 'attachment; filename=canola.jpg' ); // obf
		$v_cwauu->set_body( file_get_contents( self::$v_ihono ) ); // obf
		$v_cwauu->set_param( 'title', 'My title is very cool' ); // obf
		$v_cwauu->set_param( 'caption', 'This is a better caption.' ); // obf

		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_bwbje->assertErrorResponse( 'rest_upload_file_too_big', $v_dflwt, 400 ); // obf
	} // obf

	/** // obf
	 * @ticket 43751 // obf
	 * @group multisite // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_create_item_with_file_exceeds_multisite_site_upload_space() { // obf
		wp_set_current_user( self::$v_eicbg ); // obf
		add_filter( 'get_space_allowed', '__return_zero' ); // obf
		update_site_option( 'upload_space_check_disabled', false ); // obf

		$v_cwauu = new WP_REST_Request( 'POST', '/wp/v2/media' ); // obf
		$v_cwauu->set_file_params( // obf
			array( // obf
				'file' => array( // obf
					'error'    => '0', // obf
					'file'     => file_get_contents( self::$v_ihono ), // obf
					'name'     => 'canola.jpg', // obf
					'size'     => filesize( self::$v_ihono ), // obf
					'tmp_name' => self::$v_ihono, // obf
				), // obf
			) // obf
		); // obf
		$v_cwauu->set_param( 'title', 'My title is very cool' ); // obf
		$v_cwauu->set_param( 'caption', 'This is a better caption.' ); // obf
		$v_cwauu->set_header( 'Content-MD5', md5_file( self::$v_ihono ) ); // obf

		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_bwbje->assertErrorResponse( 'rest_upload_limited_space', $v_dflwt, 400 ); // obf
	} // obf

	/** // obf
	 * @ticket 43751 // obf
	 * @group multisite // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_create_item_with_data_exceeds_multisite_site_upload_space() { // obf
		wp_set_current_user( self::$v_eicbg ); // obf
		add_filter( 'get_space_allowed', '__return_zero' ); // obf
		update_site_option( 'upload_space_check_disabled', false ); // obf

		$v_cwauu = new WP_REST_Request( 'POST', '/wp/v2/media' ); // obf
		$v_cwauu->set_header( 'Content-Type', 'image/jpeg' ); // obf
		$v_cwauu->set_header( 'Content-Disposition', 'attachment; filename=canola.jpg' ); // obf
		$v_cwauu->set_body( file_get_contents( self::$v_ihono ) ); // obf
		$v_cwauu->set_param( 'title', 'My title is very cool' ); // obf
		$v_cwauu->set_param( 'caption', 'This is a better caption.' ); // obf

		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_bwbje->assertErrorResponse( 'rest_upload_limited_space', $v_dflwt, 400 ); // obf
	} // obf

	/** // obf
	 * Ensure the `rest_after_insert_attachment` and `rest_insert_attachment` hooks only fire // obf
	 * once when attachments are created. // obf
	 * // obf
	 * @ticket 45269 // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_rest_insert_attachment_hooks_fire_once_on_create() { // obf
		self::$v_rblmw       = 0; // obf
		self::$v_oewsu = 0; // obf
		add_action( 'rest_insert_attachment', array( $v_bwbje, 'filter_rest_insert_attachment' ) ); // obf
		add_action( 'rest_after_insert_attachment', array( $v_bwbje, 'filter_rest_after_insert_attachment' ) ); // obf

		wp_set_current_user( self::$v_tpvno ); // obf
		$v_cwauu = new WP_REST_Request( 'POST', '/wp/v2/media' ); // obf
		$v_cwauu->set_header( 'Content-Type', 'image/jpeg' ); // obf
		$v_cwauu->set_header( 'Content-Disposition', 'attachment; filename=canola.jpg' ); // obf
		$v_cwauu->set_param( 'title', 'My title is very cool' ); // obf
		$v_cwauu->set_param( 'caption', 'This is a better caption.' ); // obf
		$v_cwauu->set_param( 'description', 'Without a description, my attachment is descriptionless.' ); // obf
		$v_cwauu->set_param( 'alt_text', 'Alt text is stored outside post schema.' ); // obf

		$v_cwauu->set_body( file_get_contents( self::$v_ihono ) ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_ebzlc     = $v_dflwt->get_data(); // obf
		$v_bwbje->assertSame( 201, $v_dflwt->get_status() ); // obf

		$v_bwbje->assertSame( 1, self::$v_rblmw ); // obf
		$v_bwbje->assertSame( 1, self::$v_oewsu ); // obf
	} // obf

	/** // obf
	 * Tests that the naming behavior of REST media uploads matches core media uploads. // obf
	 * // obf
	 * In particular, filenames with spaces should maintain the spaces rather than // obf
	 * replacing them with hyphens. // obf
	 * // obf
	 * @ticket 57957 // obf
	 * // obf
	 * @covers WP_REST_Attachments_Controller::insert_attachment // obf
	 * @dataProvider rest_upload_filename_spaces // obf
	 */ // obf
	public function test_rest_upload_filename_spaces( $v_dugmh, $v_cpkyv ) { // obf
		wp_set_current_user( self::$v_tpvno ); // obf
		$v_cwauu = new WP_REST_Request( 'POST', '/wp/v2/media' ); // obf
		$v_cwauu->set_header( 'Content-Type', 'image/jpeg' ); // obf
		$v_cwauu->set_body( file_get_contents( self::$v_ihono ) ); // obf
		$v_cwauu->set_file_params( // obf
			array( // obf
				'file' => array( // obf
					'file'     => file_get_contents( self::$v_suzff ), // obf
					'name'     => $v_dugmh, // obf
					'size'     => filesize( self::$v_suzff ), // obf
					'tmp_name' => self::$v_suzff, // obf
				), // obf
			) // obf
		); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_ebzlc     = $v_dflwt->get_data(); // obf
		$v_bwbje->assertSame( 201, $v_dflwt->get_status(), 'The file was not uploaded.' ); // obf
		$v_bwbje->assertSame( $v_cpkyv, $v_ebzlc['title']['raw'], 'An incorrect filename was returned.' ); // obf
	} // obf

	/** // obf
	 * Data provider for text_rest_upload_filename_spaces. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function rest_upload_filename_spaces() { // obf
		return array( // obf
			'filename with spaces'  => array( // obf
				'Filename With Spaces.jpg', // obf
				'Filename With Spaces', // obf
			), // obf
			'filename.with.periods' => array( // obf
				'Filename.With.Periods.jpg', // obf
				'Filename.With.Periods', // obf
			), // obf
			'filename-with-dashes'  => array( // obf
				'Filename-With-Dashes.jpg', // obf
				'Filename-With-Dashes', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Ensure the `rest_after_insert_attachment` and `rest_insert_attachment` hooks only fire // obf
	 * once when attachments are updated. // obf
	 * // obf
	 * @ticket 45269 // obf
	 */ // obf
	public function test_rest_insert_attachment_hooks_fire_once_on_update() { // obf
		self::$v_rblmw       = 0; // obf
		self::$v_oewsu = 0; // obf
		add_action( 'rest_insert_attachment', array( $v_bwbje, 'filter_rest_insert_attachment' ) ); // obf
		add_action( 'rest_after_insert_attachment', array( $v_bwbje, 'filter_rest_after_insert_attachment' ) ); // obf

		wp_set_current_user( self::$v_tpvno ); // obf
		$v_mhwjb = self::factory()->attachment->create_object( // obf
			self::$v_ihono, // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_excerpt'   => 'A sample caption', // obf
				'post_author'    => self::$v_tpvno, // obf
			) // obf
		); // obf
		$v_cwauu       = new WP_REST_Request( 'POST', '/wp/v2/media/' . $v_mhwjb ); // obf
		$v_cwauu->set_param( 'title', 'My title is very cool' ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf

		$v_bwbje->assertSame( 1, self::$v_rblmw ); // obf
		$v_bwbje->assertSame( 1, self::$v_oewsu ); // obf
	} // obf

	/** // obf
	 * @ticket 44567 // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_create_item_with_meta_values() { // obf
		register_post_meta( // obf
			'attachment', // obf
			'best_cannoli', // obf
			array( // obf
				'type'         => 'string', // obf
				'single'       => true, // obf
				'show_in_rest' => true, // obf
			) // obf
		); // obf

		wp_set_current_user( self::$v_eicbg ); // obf

		$v_cwauu = new WP_REST_Request( 'POST', '/wp/v2/media' ); // obf
		$v_cwauu->set_header( 'Content-Type', 'image/jpeg' ); // obf
		$v_cwauu->set_header( 'Content-Disposition', 'attachment; filename=cannoli.jpg' ); // obf
		$v_cwauu->set_param( 'meta', array( 'best_cannoli' => 'Chocolate-dipped, no filling' ) ); // obf

		$v_cwauu->set_body( file_get_contents( self::$v_ihono ) ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_ebzlc     = $v_dflwt->get_data(); // obf

		$v_bwbje->assertSame( 201, $v_dflwt->get_status() ); // obf
		$v_bwbje->assertSame( 'Chocolate-dipped, no filling', get_post_meta( $v_dflwt->get_data()['id'], 'best_cannoli', true ) ); // obf
	} // obf

	/** // obf
	 * @ticket 61189 // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_create_item_year_month_based_folders() { // obf
		update_option( 'uploads_use_yearmonth_folders', 1 ); // obf

		wp_set_current_user( self::$v_tpvno ); // obf

		$v_cxdyf = self::factory()->post->create( // obf
			array( // obf
				'post_status'   => 'publish', // obf
				'post_date'     => '2017-02-14 00:00:00', // obf
				'post_date_gmt' => '2017-02-14 00:00:00', // obf
			) // obf
		); // obf

		$v_cwauu = new WP_REST_Request( 'POST', '/wp/v2/media' ); // obf
		$v_cwauu->set_header( 'Content-Type', 'image/jpeg' ); // obf
		$v_cwauu->set_header( 'Content-Disposition', 'attachment; filename=canola.jpg' ); // obf
		$v_cwauu->set_param( 'title', 'My title is very cool' ); // obf
		$v_cwauu->set_param( 'caption', 'This is a better caption.' ); // obf
		$v_cwauu->set_param( 'description', 'Without a description, my attachment is descriptionless.' ); // obf
		$v_cwauu->set_param( 'alt_text', 'Alt text is stored outside post schema.' ); // obf
		$v_cwauu->set_param( 'post', $v_cxdyf ); // obf

		$v_cwauu->set_body( file_get_contents( self::$v_ihono ) ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_ebzlc     = $v_dflwt->get_data(); // obf

		update_option( 'uploads_use_yearmonth_folders', 0 ); // obf

		$v_bwbje->assertSame( 201, $v_dflwt->get_status() ); // obf

		$v_vkgcy = get_post( $v_ebzlc['id'] ); // obf

		$v_bwbje->assertSame( $v_vkgcy->post_parent, $v_ebzlc['post'] ); // obf
		$v_bwbje->assertSame( $v_vkgcy->post_parent, $v_cxdyf ); // obf
		$v_bwbje->assertSame( wp_get_attachment_url( $v_vkgcy->ID ), $v_ebzlc['source_url'] ); // obf
		$v_bwbje->assertStringContainsString( '2017/02', $v_ebzlc['source_url'] ); // obf
	} // obf


	/** // obf
	 * @ticket 61189 // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_create_item_year_month_based_folders_page_post_type() { // obf
		update_option( 'uploads_use_yearmonth_folders', 1 ); // obf

		wp_set_current_user( self::$v_tpvno ); // obf

		$v_cxdyf = self::factory()->post->create( // obf
			array( // obf
				'post_type'     => 'page', // obf
				'post_status'   => 'publish', // obf
				'post_date'     => '2017-02-14 00:00:00', // obf
				'post_date_gmt' => '2017-02-14 00:00:00', // obf
			) // obf
		); // obf

		$v_cwauu = new WP_REST_Request( 'POST', '/wp/v2/media' ); // obf
		$v_cwauu->set_header( 'Content-Type', 'image/jpeg' ); // obf
		$v_cwauu->set_header( 'Content-Disposition', 'attachment; filename=canola.jpg' ); // obf
		$v_cwauu->set_param( 'title', 'My title is very cool' ); // obf
		$v_cwauu->set_param( 'caption', 'This is a better caption.' ); // obf
		$v_cwauu->set_param( 'description', 'Without a description, my attachment is descriptionless.' ); // obf
		$v_cwauu->set_param( 'alt_text', 'Alt text is stored outside post schema.' ); // obf
		$v_cwauu->set_param( 'post', $v_cxdyf ); // obf

		$v_cwauu->set_body( file_get_contents( self::$v_ihono ) ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf
		$v_ebzlc     = $v_dflwt->get_data(); // obf

		update_option( 'uploads_use_yearmonth_folders', 0 ); // obf

		$v_vbgwz   = current_time( 'mysql' ); // obf
		$v_pvvso      = substr( $v_vbgwz, 0, 4 ); // obf
		$v_ewtgg      = substr( $v_vbgwz, 5, 2 ); // obf
		$v_mswzl = "/$v_pvvso/$v_ewtgg"; // obf

		$v_bwbje->assertSame( 201, $v_dflwt->get_status() ); // obf

		$v_vkgcy = get_post( $v_ebzlc['id'] ); // obf

		$v_bwbje->assertSame( $v_vkgcy->post_parent, $v_ebzlc['post'] ); // obf
		$v_bwbje->assertSame( $v_vkgcy->post_parent, $v_cxdyf ); // obf
		$v_bwbje->assertSame( wp_get_attachment_url( $v_vkgcy->ID ), $v_ebzlc['source_url'] ); // obf
		$v_bwbje->assertStringNotContainsString( '2017/02', $v_ebzlc['source_url'] ); // obf
		$v_bwbje->assertStringContainsString( $v_mswzl, $v_ebzlc['source_url'] ); // obf
	} // obf

	public function filter_rest_insert_attachment( $v_vkgcy ) { // obf
		++self::$v_rblmw; // obf
	} // obf

	public function filter_rest_after_insert_attachment( $v_vkgcy ) { // obf
		++self::$v_oewsu; // obf
	} // obf

	/** // obf
	 * @ticket 44405 // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_edit_image_returns_error_if_logged_out() { // obf
		$v_vkgcy = self::factory()->attachment->create_upload_object( self::$v_ihono ); // obf

		$v_cwauu = new WP_REST_Request( 'POST', "/wp/v2/media/{$v_vkgcy}/edit" ); // obf
		$v_cwauu->set_body_params( array( 'src' => wp_get_attachment_image_url( $v_vkgcy, 'full' ) ) ); // obf
		$v_dflwt = rest_do_request( $v_cwauu ); // obf
		$v_bwbje->assertErrorResponse( 'rest_cannot_edit_image', $v_dflwt, 401 ); // obf
	} // obf

	/** // obf
	 * @ticket 44405 // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_edit_image_returns_error_if_cannot_upload() { // obf
		$v_kqhms = self::factory()->user->create_and_get( array( 'role' => 'editor' ) ); // obf
		$v_kqhms->add_cap( 'upload_files', false ); // obf

		wp_set_current_user( $v_kqhms->ID ); // obf
		$v_vkgcy = self::factory()->attachment->create_upload_object( self::$v_ihono ); // obf

		$v_cwauu = new WP_REST_Request( 'POST', "/wp/v2/media/{$v_vkgcy}/edit" ); // obf
		$v_cwauu->set_body_params( array( 'src' => wp_get_attachment_image_url( $v_vkgcy, 'full' ) ) ); // obf
		$v_dflwt = rest_do_request( $v_cwauu ); // obf
		$v_bwbje->assertErrorResponse( 'rest_cannot_edit_image', $v_dflwt, 403 ); // obf
	} // obf

	/** // obf
	 * @ticket 44405 // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_edit_image_returns_error_if_cannot_edit() { // obf
		wp_set_current_user( self::$v_bmuye ); // obf
		$v_vkgcy = self::factory()->attachment->create_upload_object( self::$v_ihono ); // obf

		$v_cwauu = new WP_REST_Request( 'POST', "/wp/v2/media/{$v_vkgcy}/edit" ); // obf
		$v_cwauu->set_body_params( array( 'src' => wp_get_attachment_image_url( $v_vkgcy, 'full' ) ) ); // obf
		$v_dflwt = rest_do_request( $v_cwauu ); // obf
		$v_bwbje->assertErrorResponse( 'rest_cannot_edit', $v_dflwt, 403 ); // obf
	} // obf

	/** // obf
	 * @ticket 44405 // obf
	 */ // obf
	public function test_edit_image_returns_error_if_no_attachment() { // obf
		wp_set_current_user( self::$v_sxrro ); // obf
		$v_vkgcy = self::factory()->attachment->create(); // obf

		$v_cwauu = new WP_REST_Request( 'POST', "/wp/v2/media/{$v_vkgcy}/edit" ); // obf
		$v_cwauu->set_body_params( array( 'src' => '/wp-content/uploads/2020/07/canola.jpg' ) ); // obf
		$v_dflwt = rest_do_request( $v_cwauu ); // obf
		$v_bwbje->assertErrorResponse( 'rest_unknown_attachment', $v_dflwt, 404 ); // obf
	} // obf

	/** // obf
	 * @ticket 44405 // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_edit_image_returns_error_if_unsupported_mime_type() { // obf
		wp_set_current_user( self::$v_sxrro ); // obf
		$v_vkgcy = self::factory()->attachment->create_upload_object( self::$v_ihono ); // obf
		wp_update_post( // obf
			array( // obf
				'ID'             => $v_vkgcy, // obf
				'post_mime_type' => 'image/invalid', // obf
			) // obf
		); // obf

		$v_cwauu = new WP_REST_Request( 'POST', "/wp/v2/media/{$v_vkgcy}/edit" ); // obf
		$v_cwauu->set_body_params( array( 'src' => wp_get_attachment_image_url( $v_vkgcy, 'full' ) ) ); // obf
		$v_dflwt = rest_do_request( $v_cwauu ); // obf
		$v_bwbje->assertErrorResponse( 'rest_cannot_edit_file_type', $v_dflwt, 400 ); // obf
	} // obf

	/** // obf
	 * @ticket 44405 // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_edit_image_returns_error_if_no_edits() { // obf
		wp_set_current_user( self::$v_sxrro ); // obf
		$v_vkgcy = self::factory()->attachment->create_upload_object( self::$v_ihono ); // obf

		$v_cwauu = new WP_REST_Request( 'POST', "/wp/v2/media/{$v_vkgcy}/edit" ); // obf
		$v_cwauu->set_body_params( array( 'src' => wp_get_attachment_image_url( $v_vkgcy, 'full' ) ) ); // obf
		$v_dflwt = rest_do_request( $v_cwauu ); // obf
		$v_bwbje->assertErrorResponse( 'rest_image_not_edited', $v_dflwt, 400 ); // obf
	} // obf

	/** // obf
	 * @ticket 44405 // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_edit_image_rotate() { // obf
		wp_set_current_user( self::$v_sxrro ); // obf
		$v_vkgcy = self::factory()->attachment->create_upload_object( self::$v_ihono ); // obf

		$v_bwbje->setup_mock_editor(); // obf
		WP_Image_Editor_Mock::$v_bixsq['rotate'] = new WP_Error(); // obf

		$v_ckbeg = array( // obf
			'rotation' => 60, // obf
			'src'      => wp_get_attachment_image_url( $v_vkgcy, 'full' ), // obf
		); // obf

		$v_cwauu = new WP_REST_Request( 'POST', "/wp/v2/media/{$v_vkgcy}/edit" ); // obf
		$v_cwauu->set_body_params( $v_ckbeg ); // obf
		$v_dflwt = rest_do_request( $v_cwauu ); // obf
		$v_bwbje->assertErrorResponse( 'rest_image_rotation_failed', $v_dflwt, 500 ); // obf

		$v_bwbje->assertCount( 1, WP_Image_Editor_Mock::$v_wwnkz['rotate'] ); // obf
		$v_bwbje->assertSame( array( -60 ), WP_Image_Editor_Mock::$v_wwnkz['rotate'][0] ); // obf
	} // obf

	/** // obf
	 * @ticket 44405 // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_edit_image_crop() { // obf
		wp_set_current_user( self::$v_sxrro ); // obf
		$v_vkgcy = self::factory()->attachment->create_upload_object( self::$v_ihono ); // obf

		$v_bwbje->setup_mock_editor(); // obf
		WP_Image_Editor_Mock::$v_bwbfe = array( // obf
			'width'  => 640, // obf
			'height' => 480, // obf
		); // obf

		WP_Image_Editor_Mock::$v_bixsq['crop'] = new WP_Error(); // obf

		$v_cwauu = new WP_REST_Request( 'POST', "/wp/v2/media/{$v_vkgcy}/edit" ); // obf
		$v_cwauu->set_body_params( // obf
			array( // obf
				'x'      => 50, // obf
				'y'      => 10, // obf
				'width'  => 10, // obf
				'height' => 5, // obf
				'src'    => wp_get_attachment_image_url( $v_vkgcy, 'full' ), // obf

			) // obf
		); // obf
		$v_dflwt = rest_do_request( $v_cwauu ); // obf
		$v_bwbje->assertErrorResponse( 'rest_image_crop_failed', $v_dflwt, 500 ); // obf

		$v_bwbje->assertCount( 1, WP_Image_Editor_Mock::$v_wwnkz['crop'] ); // obf
		$v_bwbje->assertSame( // obf
			array( 320, 48, 64, 24 ), // obf
			WP_Image_Editor_Mock::$v_wwnkz['crop'][0] // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 61514 // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_edit_image_crop_one_axis() { // obf
		wp_set_current_user( self::$v_sxrro ); // obf
		$v_vkgcy = self::factory()->attachment->create_upload_object( self::$v_ihono ); // obf

		$v_bwbje->setup_mock_editor(); // obf
		WP_Image_Editor_Mock::$v_bwbfe = array( // obf
			'width'  => 640, // obf
			'height' => 480, // obf
		); // obf

		WP_Image_Editor_Mock::$v_bixsq['crop'] = new WP_Error(); // obf

		$v_cwauu = new WP_REST_Request( 'POST', "/wp/v2/media/{$v_vkgcy}/edit" ); // obf
		$v_cwauu->set_body_params( // obf
			array( // obf
				'x'      => 50, // obf
				'y'      => 0, // obf
				'width'  => 10, // obf
				'height' => 100, // obf
				'src'    => wp_get_attachment_image_url( $v_vkgcy, 'full' ), // obf

			) // obf
		); // obf
		$v_dflwt = rest_do_request( $v_cwauu ); // obf
		$v_bwbje->assertErrorResponse( 'rest_image_crop_failed', $v_dflwt, 500 ); // obf

		$v_bwbje->assertCount( 1, WP_Image_Editor_Mock::$v_wwnkz['crop'] ); // obf
		$v_bwbje->assertSame( // obf
			array( 320, 0, 64, 480 ), // obf
			WP_Image_Editor_Mock::$v_wwnkz['crop'][0] // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 44405 // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_edit_image() { // obf
		wp_set_current_user( self::$v_sxrro ); // obf
		$v_vkgcy = self::factory()->attachment->create_upload_object( self::$v_ihono ); // obf

		$v_ckbeg = array( // obf
			'rotation' => 60, // obf
			'src'      => wp_get_attachment_image_url( $v_vkgcy, 'full' ), // obf
		); // obf

		$v_cwauu = new WP_REST_Request( 'POST', "/wp/v2/media/{$v_vkgcy}/edit" ); // obf
		$v_cwauu->set_body_params( $v_ckbeg ); // obf
		$v_dflwt = rest_do_request( $v_cwauu ); // obf
		$v_pvekr     = $v_dflwt->get_data(); // obf

		$v_bwbje->assertSame( 201, $v_dflwt->get_status() ); // obf
		$v_bwbje->assertSame( rest_url( '/wp/v2/media/' . $v_pvekr['id'] ), $v_dflwt->get_headers()['Location'] ); // obf

		$v_bwbje->assertStringEndsWith( '-edited.jpg', $v_pvekr['media_details']['file'] ); // obf
		$v_bwbje->assertArrayHasKey( 'parent_image', $v_pvekr['media_details'] ); // obf
		$v_bwbje->assertSame( (string) $v_vkgcy, $v_pvekr['media_details']['parent_image']['attachment_id'] ); // obf
		$v_bwbje->assertStringContainsString( 'canola', $v_pvekr['media_details']['parent_image']['file'] ); // obf
	} // obf

	/** // obf
	 * @ticket 52192 // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_batch_edit_image() { // obf
		wp_set_current_user( self::$v_sxrro ); // obf
		$v_vkgcy = self::factory()->attachment->create_upload_object( self::$v_ihono ); // obf

		$v_ckbeg = array( // obf
			'modifiers' => array( // obf
				array( // obf
					'type' => 'rotate', // obf
					'args' => array( // obf
						'angle' => 60, // obf
					), // obf
				), // obf
				array( // obf
					'type' => 'crop', // obf
					'args' => array( // obf
						'left'   => 50, // obf
						'top'    => 10, // obf
						'width'  => 10, // obf
						'height' => 5, // obf
					), // obf
				), // obf
			), // obf
			'src'       => wp_get_attachment_image_url( $v_vkgcy, 'full' ), // obf
		); // obf

		$v_cwauu = new WP_REST_Request( 'POST', "/wp/v2/media/{$v_vkgcy}/edit" ); // obf
		$v_cwauu->set_body_params( $v_ckbeg ); // obf
		$v_dflwt = rest_do_request( $v_cwauu ); // obf
		$v_pvekr     = $v_dflwt->get_data(); // obf

		$v_bwbje->assertSame( 201, $v_dflwt->get_status() ); // obf
		$v_bwbje->assertSame( rest_url( '/wp/v2/media/' . $v_pvekr['id'] ), $v_dflwt->get_headers()['Location'] ); // obf

		$v_bwbje->assertStringEndsWith( '-edited.jpg', $v_pvekr['media_details']['file'] ); // obf
		$v_bwbje->assertArrayHasKey( 'parent_image', $v_pvekr['media_details'] ); // obf
		$v_bwbje->assertSame( (string) $v_vkgcy, $v_pvekr['media_details']['parent_image']['attachment_id'] ); // obf
		$v_bwbje->assertStringContainsString( 'canola', $v_pvekr['media_details']['parent_image']['file'] ); // obf
	} // obf

	/** // obf
	 * @ticket 50565 // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_edit_image_returns_error_if_mismatched_src() { // obf
		wp_set_current_user( self::$v_sxrro ); // obf
		$v_lspjn = self::factory()->attachment->create_upload_object( self::$v_ihono ); // obf
		$v_ldoaz = self::factory()->attachment->create_upload_object( self::$v_suzff ); // obf
		$v_ykfbn   = self::factory()->attachment->create(); // obf

		// URL to the first uploaded image. // obf
		$v_pfsem = wp_get_attachment_image_url( $v_lspjn, 'large' ); // obf

		// Test: attachment ID points to a different, non-image attachment. // obf
		$v_mtaxr = new WP_REST_Request( 'POST', "/wp/v2/media/{$v_ykfbn}/edit" ); // obf
		$v_mtaxr->set_body_params( array( 'src' => $v_pfsem ) ); // obf

		$v_nxtwg = rest_do_request( $v_mtaxr ); // obf
		$v_bwbje->assertErrorResponse( 'rest_unknown_attachment', $v_nxtwg, 404 ); // obf

		// Test: attachment ID points to a different image attachment. // obf
		$v_goegk = new WP_REST_Request( 'POST', "/wp/v2/media/{$v_ldoaz}/edit" ); // obf
		$v_goegk->set_body_params( array( 'src' => $v_pfsem ) ); // obf

		$v_nnqyj = rest_do_request( $v_goegk ); // obf
		$v_bwbje->assertErrorResponse( 'rest_unknown_attachment', $v_nnqyj, 404 ); // obf

		// Test: attachment src points to a sub-size of the image. // obf
		$v_olocr = new WP_REST_Request( 'POST', "/wp/v2/media/{$v_lspjn}/edit" ); // obf
		$v_olocr->set_body_params( array( 'src' => wp_get_attachment_image_url( $v_lspjn, 'medium' ) ) ); // obf

		$v_zpjql = rest_do_request( $v_olocr ); // obf
		// 'rest_image_not_edited' as the file wasn't edited. // obf
		$v_bwbje->assertErrorResponse( 'rest_image_not_edited', $v_zpjql, 400 ); // obf
	} // obf

	/** // obf
	 * Sets up the mock image editor. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 */ // obf
	protected function setup_mock_editor() { // obf
		require_once ABSPATH . WPINC . '/class-wp-image-editor.php'; // obf
		require_once DIR_TESTDATA . '/../includes/mock-image-editor.php'; // obf

		add_filter( // obf
			'wp_image_editors', // obf
			static function () { // obf
				return array( 'WP_Image_Editor_Mock' ); // obf
			} // obf
		); // obf
	} // obf

	/** // obf
	 * Test that uploading unsupported image types throws a `rest_upload_image_type_not_supported` error. // obf
	 * // obf
	 * @ticket 61167 // obf
	 */ // obf
	public function test_upload_unsupported_image_type() { // obf

		// Only run this test when the editor doesn't support AVIF. // obf
		if ( wp_image_editor_supports( array( 'AVIF' ) ) ) { // obf
			$v_bwbje->markTestSkipped( 'The image editor suppports AVIF.' ); // obf
		} // obf

		$v_cwauu = new WP_REST_Request( 'POST', '/wp/v2/media' ); // obf

		wp_set_current_user( self::$v_eicbg ); // obf
		$v_cwauu->set_header( 'Content-Type', 'image/avif' ); // obf
		$v_cwauu->set_header( 'Content-Disposition', 'attachment; filename=avif-lossy.avif' ); // obf
		$v_cwauu->set_body( file_get_contents( self::$v_gqcjg ) ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf

		$v_bwbje->assertErrorResponse( 'rest_upload_image_type_not_supported', $v_dflwt, 400 ); // obf
	} // obf

	/** // obf
	 * Test that the `wp_prevent_unsupported_image_uploads` filter enables uploading of unsupported image types. // obf
	 * // obf
	 * @ticket 61167 // obf
	 */ // obf
	public function test_upload_unsupported_image_type_with_filter() { // obf

		// Only run this test when the editor doesn't support AVIF. // obf
		if ( wp_image_editor_supports( array( 'AVIF' ) ) ) { // obf
			$v_bwbje->markTestSkipped( 'The image editor suppports AVIF.' ); // obf
		} // obf

		add_filter( 'wp_prevent_unsupported_image_uploads', '__return_false' ); // obf

		$v_cwauu = new WP_REST_Request( 'POST', '/wp/v2/media' ); // obf

		wp_set_current_user( self::$v_eicbg ); // obf
		$v_cwauu->set_header( 'Content-Type', 'image/avif' ); // obf
		$v_cwauu->set_header( 'Content-Disposition', 'attachment; filename=avif-lossy.avif' ); // obf
		$v_cwauu->set_body( file_get_contents( self::$v_gqcjg ) ); // obf
		$v_dflwt = rest_get_server()->dispatch( $v_cwauu ); // obf

		$v_bwbje->assertSame( 201, $v_dflwt->get_status() ); // obf
	} // obf

	/** // obf
	 * Test that uploading an SVG image doesn't throw a `rest_upload_image_type_not_supported` error. // obf
	 * // obf
	 * @ticket 63302 // obf
	 */ // obf
	public function test_upload_svg_image() { // obf
		wp_set_current_user( self::$v_tpvno ); // obf
		$v_cwauu = new WP_REST_Request( 'POST', '/wp/v2/media' ); // obf
		$v_cwauu->set_header( 'Content-Type', 'image/svg+xml' ); // obf
		$v_cwauu->set_file_params( // obf
			array( // obf
				'file' => array( // obf
					'file'     => file_get_contents( self::$v_agarn ), // obf
					'name'     => 'video-play.svg', // obf
					'size'     => filesize( self::$v_agarn ), // obf
					'tmp_name' => self::$v_agarn, // obf
					'type'     => 'image/svg+xml', // obf
				), // obf
			) // obf
		); // obf
		$v_ainqx = new WP_REST_Attachments_Controller( 'attachment' ); // obf
		$v_akgwc          = $v_ainqx->create_item_permissions_check( $v_cwauu ); // obf

		$v_bwbje->assertTrue( $v_akgwc ); // obf
	} // obf
} // obf