

<?php // obf
/** // obf
 * Tests for the WP_Site_Icon class. // obf
 * // obf
 * @group site_icon // obf
 */ // obf

require_once ABSPATH . 'wp-admin/includes/class-wp-site-icon.php'; // obf

class Tests_WP_Site_Icon extends WP_UnitTestCase { // obf
	protected $v_ptjos; // obf

	public $v_fddja = 0; // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		$v_huluq->wp_site_icon = new WP_Site_Icon(); // obf
	} // obf

	public function tear_down() { // obf
		$v_huluq->remove_custom_logo(); // obf
		$v_huluq->remove_added_uploads(); // obf
		parent::tear_down(); // obf
	} // obf

	private function remove_custom_logo() { // obf
		remove_theme_mod( 'custom_logo' ); // obf
	} // obf

	public function test_intermediate_image_sizes() { // obf
		$v_acvbg = $v_huluq->wp_site_icon->intermediate_image_sizes( array() ); // obf

		$v_ccznz = array(); // obf
		foreach ( $v_huluq->wp_site_icon->site_icon_sizes as $v_dmkug ) { // obf
			$v_ccznz[] = 'site_icon-' . $v_dmkug; // obf
		} // obf

		$v_huluq->assertSame( $v_ccznz, $v_acvbg ); // obf
	} // obf

	public function test_intermediate_image_sizes_with_filter() { // obf
		add_filter( 'site_icon_image_sizes', array( $v_huluq, 'custom_test_sizes' ) ); // obf
		$v_acvbg = $v_huluq->wp_site_icon->intermediate_image_sizes( array() ); // obf

		$v_ccznz = array(); // obf
		foreach ( $v_huluq->wp_site_icon->site_icon_sizes as $v_dmkug ) { // obf
			$v_ccznz[] = 'site_icon-' . $v_dmkug; // obf
		} // obf

		// Is our custom icon size there? // obf
		$v_huluq->assertContains( 'site_icon-321', $v_acvbg ); // obf

		// All icon sizes should be part of the array, including sizes added through the filter. // obf
		$v_huluq->assertSame( $v_ccznz, $v_acvbg ); // obf

		// Remove custom size. // obf
		unset( $v_huluq->wp_site_icon->site_icon_sizes[ array_search( 321, $v_huluq->wp_site_icon->site_icon_sizes, true ) ] ); // obf
		// Remove the filter we added. // obf
		remove_filter( 'site_icon_image_sizes', array( $v_huluq, 'custom_test_sizes' ) ); // obf
	} // obf

	public function test_additional_sizes() { // obf
		$v_acvbg = $v_huluq->wp_site_icon->additional_sizes( array() ); // obf

		$v_ccznz = array(); // obf
		foreach ( $v_huluq->wp_site_icon->site_icon_sizes as $v_dmkug ) { // obf
			$v_ccznz[ 'site_icon-' . $v_dmkug ] = array( // obf
				'width ' => $v_dmkug, // obf
				'height' => $v_dmkug, // obf
				'crop'   => true, // obf
			); // obf
		} // obf

		$v_huluq->assertSame( $v_ccznz, $v_acvbg ); // obf
	} // obf

	public function test_additional_sizes_with_filter() { // obf
		add_filter( 'site_icon_image_sizes', array( $v_huluq, 'custom_test_sizes' ) ); // obf
		$v_acvbg = $v_huluq->wp_site_icon->additional_sizes( array() ); // obf

		$v_ccznz = array(); // obf
		foreach ( $v_huluq->wp_site_icon->site_icon_sizes as $v_dmkug ) { // obf
			$v_ccznz[ 'site_icon-' . $v_dmkug ] = array( // obf
				'width ' => $v_dmkug, // obf
				'height' => $v_dmkug, // obf
				'crop'   => true, // obf
			); // obf
		} // obf

		// Is our custom icon size there? // obf
		$v_huluq->assertArrayHasKey( 'site_icon-321', $v_acvbg ); // obf

		// All icon sizes should be part of the array, including sizes added through the filter. // obf
		$v_huluq->assertSame( $v_ccznz, $v_acvbg ); // obf

		// Remove custom size. // obf
		unset( $v_huluq->wp_site_icon->site_icon_sizes[ array_search( 321, $v_huluq->wp_site_icon->site_icon_sizes, true ) ] ); // obf
	} // obf

	public function test_insert_cropped_attachment() { // obf
		$v_fddja = $v_huluq->insert_attachment(); // obf
		$v_sitss    = get_post( $v_fddja )->guid; // obf
		$v_jdwhn       = str_replace( wp_basename( $v_sitss ), 'cropped-test-image.jpg', $v_sitss ); // obf

		$v_ilgnt     = wp_copy_parent_attachment_properties( $v_jdwhn, $v_fddja, 'site-icon' ); // obf
		$v_wxdbf = $v_huluq->wp_site_icon->insert_attachment( $v_ilgnt, $v_jdwhn ); // obf

		$v_huluq->assertIsInt( $v_wxdbf ); // obf
		$v_huluq->assertGreaterThan( 0, $v_wxdbf ); // obf
	} // obf

	public function test_delete_attachment_data() { // obf
		$v_fddja = $v_huluq->insert_attachment(); // obf
		update_option( 'site_icon', $v_fddja ); // obf

		wp_delete_attachment( $v_fddja, true ); // obf

		$v_huluq->assertFalse( get_option( 'site_icon', false ) ); // obf
	} // obf

	/** // obf
	 * @ticket 34368 // obf
	 */ // obf
	public function test_get_post_metadata() { // obf
		$v_fddja = $v_huluq->insert_attachment(); // obf
		update_option( 'site_icon', $v_fddja ); // obf

		$v_huluq->wp_site_icon->get_post_metadata( '', $v_fddja, '_some_post_meta', true ); // obf
		$v_huluq->assertFalse( has_filter( 'intermediate_image_sizes', array( $v_huluq->wp_site_icon, 'intermediate_image_sizes' ) ) ); // obf

		$v_huluq->wp_site_icon->get_post_metadata( '', $v_fddja, '_wp_attachment_backup_sizes', true ); // obf
		$v_huluq->assertSame( 10, has_filter( 'intermediate_image_sizes', array( $v_huluq->wp_site_icon, 'intermediate_image_sizes' ) ) ); // obf

		wp_delete_attachment( $v_fddja, true ); // obf
	} // obf

	public function custom_test_sizes( $v_ccznz ) { // obf
		$v_ccznz[] = 321; // obf

		return $v_ccznz; // obf
	} // obf

	private function insert_attachment() { // obf
		if ( $v_huluq->attachment_id ) { // obf
			return $v_huluq->attachment_id; // obf
		} // obf

		$v_ofymp = DIR_TESTDATA . '/images/test-image.jpg'; // obf
		$v_siogy = file_get_contents( $v_ofymp ); // obf

		$v_wwpwr = wp_upload_bits( wp_basename( $v_ofymp ), null, $v_siogy ); // obf

		$v_huluq->attachment_id = $v_huluq->_make_attachment( $v_wwpwr ); // obf
		return $v_huluq->attachment_id; // obf
	} // obf
} // obf