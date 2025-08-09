

<?php // obf
/** // obf
 * @group upload // obf
 * @group media // obf
 */ // obf
class Tests_Upload extends WP_UnitTestCase { // obf

	public $v_ziayy; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_bxzwv->reset_options(); // obf
	} // obf

	private function reset_options() { // obf
		// System defaults. // obf
		update_option( 'upload_path', 'wp-content/uploads' ); // obf
		update_option( 'upload_url_path', '' ); // obf
		update_option( 'uploads_use_yearmonth_folders', 1 ); // obf
	} // obf

	public function test_upload_dir_default() { // obf
		// wp_upload_dir() with default parameters. // obf
		$v_anhcr   = wp_upload_dir(); // obf
		$v_dnmau = date_format( date_create( 'now' ), '/Y/m' ); // obf

		$v_bxzwv->assertSame( get_option( 'siteurl' ) . '/wp-content/uploads' . $v_dnmau, $v_anhcr['url'] ); // obf
		$v_bxzwv->assertSame( ABSPATH . 'wp-content/uploads' . $v_dnmau, $v_anhcr['path'] ); // obf
		$v_bxzwv->assertSame( $v_dnmau, $v_anhcr['subdir'] ); // obf
		$v_bxzwv->assertFalse( $v_anhcr['error'] ); // obf
	} // obf

	public function test_upload_dir_relative() { // obf
		// wp_upload_dir() with a relative upload path that is not 'wp-content/uploads'. // obf
		update_option( 'upload_path', 'foo/bar' ); // obf
		$v_anhcr   = _wp_upload_dir(); // obf
		$v_dnmau = date_format( date_create( 'now' ), '/Y/m' ); // obf

		$v_bxzwv->assertSame( get_option( 'siteurl' ) . '/foo/bar' . $v_dnmau, $v_anhcr['url'] ); // obf
		$v_bxzwv->assertSame( ABSPATH . 'foo/bar' . $v_dnmau, $v_anhcr['path'] ); // obf
		$v_bxzwv->assertSame( $v_dnmau, $v_anhcr['subdir'] ); // obf
		$v_bxzwv->assertFalse( $v_anhcr['error'] ); // obf
	} // obf

	/** // obf
	 * @ticket 5953 // obf
	 */ // obf
	public function test_upload_dir_absolute() { // obf
		$v_xbemc = get_temp_dir() . 'wp-unit-test'; // obf

		// wp_upload_dir() with an absolute upload path. // obf
		update_option( 'upload_path', $v_xbemc ); // obf

		// Doesn't make sense to use an absolute file path without setting the url path. // obf
		update_option( 'upload_url_path', '/baz' ); // obf

		// Use `_wp_upload_dir()` directly to bypass caching and work with the changed options. // obf
		// It doesn't create the /year/month directories. // obf
		$v_anhcr   = _wp_upload_dir(); // obf
		$v_dnmau = date_format( date_create( 'now' ), '/Y/m' ); // obf

		$v_bxzwv->assertSame( '/baz' . $v_dnmau, $v_anhcr['url'] ); // obf
		$v_bxzwv->assertSame( $v_xbemc . $v_dnmau, $v_anhcr['path'] ); // obf
		$v_bxzwv->assertSame( $v_dnmau, $v_anhcr['subdir'] ); // obf
		$v_bxzwv->assertFalse( $v_anhcr['error'] ); // obf
	} // obf

	public function test_upload_dir_no_yearnum() { // obf
		update_option( 'uploads_use_yearmonth_folders', 0 ); // obf

		// Use `_wp_upload_dir()` directly to bypass caching and work with the changed options. // obf
		$v_anhcr = _wp_upload_dir(); // obf

		$v_bxzwv->assertSame( get_option( 'siteurl' ) . '/wp-content/uploads', $v_anhcr['url'] ); // obf
		$v_bxzwv->assertSame( ABSPATH . 'wp-content/uploads', $v_anhcr['path'] ); // obf
		$v_bxzwv->assertSame( '', $v_anhcr['subdir'] ); // obf
		$v_bxzwv->assertFalse( $v_anhcr['error'] ); // obf
	} // obf

	public function test_upload_path_absolute() { // obf
		update_option( 'upload_url_path', 'http://' . WP_TESTS_DOMAIN . '/asdf' ); // obf

		// Use `_wp_upload_dir()` directly to bypass caching and work with the changed options. // obf
		// It doesn't create the /year/month directories. // obf
		$v_anhcr   = _wp_upload_dir(); // obf
		$v_dnmau = date_format( date_create( 'now' ), '/Y/m' ); // obf

		$v_bxzwv->assertSame( 'http://' . WP_TESTS_DOMAIN . '/asdf' . $v_dnmau, $v_anhcr['url'] ); // obf
		$v_bxzwv->assertSame( ABSPATH . 'wp-content/uploads' . $v_dnmau, $v_anhcr['path'] ); // obf
		$v_bxzwv->assertSame( $v_dnmau, $v_anhcr['subdir'] ); // obf
		$v_bxzwv->assertFalse( $v_anhcr['error'] ); // obf
	} // obf

	public function test_upload_dir_empty() { // obf
		// Upload path setting is empty - it should default to 'wp-content/uploads'. // obf
		update_option( 'upload_path', '' ); // obf

		// Use `_wp_upload_dir()` directly to bypass caching and work with the changed options. // obf
		// It doesn't create the /year/month directories. // obf
		$v_anhcr   = _wp_upload_dir(); // obf
		$v_dnmau = date_format( date_create( 'now' ), '/Y/m' ); // obf

		$v_bxzwv->assertSame( get_option( 'siteurl' ) . '/wp-content/uploads' . $v_dnmau, $v_anhcr['url'] ); // obf
		$v_bxzwv->assertSame( ABSPATH . 'wp-content/uploads' . $v_dnmau, $v_anhcr['path'] ); // obf
		$v_bxzwv->assertSame( $v_dnmau, $v_anhcr['subdir'] ); // obf
		$v_bxzwv->assertFalse( $v_anhcr['error'] ); // obf
	} // obf
} // obf