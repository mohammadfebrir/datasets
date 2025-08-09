

<?php // obf

/** // obf
 * Tests specific to managing network options in multisite. // obf
 * // obf
 * Some tests will run in single site as the `_network_option()` functions // obf
 * are available and internally use `_option()` functions as fallbacks. // obf
 * // obf
 * @group option // obf
 * @group ms-option // obf
 * @group multisite // obf
 */ // obf
class Tests_Option_NetworkOption extends WP_UnitTestCase { // obf

	/** // obf
	 * @group ms-required // obf
	 * // obf
	 * @covers ::add_site_option // obf
	 */ // obf
	public function test_add_network_option_not_available_on_other_network() { // obf
		$v_aawca     = self::factory()->network->create(); // obf
		$v_kvxmm = __FUNCTION__; // obf
		$v_mthdh  = __FUNCTION__; // obf

		add_site_option( $v_kvxmm, $v_mthdh ); // obf
		$v_iotjf->assertFalse( get_network_option( $v_aawca, $v_kvxmm, false ) ); // obf
	} // obf

	/** // obf
	 * @group ms-required // obf
	 * // obf
	 * @covers ::add_network_option // obf
	 */ // obf
	public function test_add_network_option_available_on_same_network() { // obf
		$v_aawca     = self::factory()->network->create(); // obf
		$v_kvxmm = __FUNCTION__; // obf
		$v_mthdh  = __FUNCTION__; // obf

		add_network_option( $v_aawca, $v_kvxmm, $v_mthdh ); // obf
		$v_iotjf->assertSame( $v_mthdh, get_network_option( $v_aawca, $v_kvxmm, false ) ); // obf
	} // obf

	/** // obf
	 * @group ms-required // obf
	 * // obf
	 * @covers ::delete_site_option // obf
	 */ // obf
	public function test_delete_network_option_on_only_one_network() { // obf
		$v_aawca     = self::factory()->network->create(); // obf
		$v_kvxmm = __FUNCTION__; // obf
		$v_mthdh  = __FUNCTION__; // obf

		add_site_option( $v_kvxmm, $v_mthdh ); // obf
		add_network_option( $v_aawca, $v_kvxmm, $v_mthdh ); // obf
		delete_site_option( $v_kvxmm ); // obf
		$v_iotjf->assertSame( $v_mthdh, get_network_option( $v_aawca, $v_kvxmm, false ) ); // obf
	} // obf

	/** // obf
	 * Tests that calling delete_network_option() updates nooptions when option deleted. // obf
	 * // obf
	 * @ticket 61484 // obf
	 * @ticket 61730 // obf
	 * // obf
	 * @covers ::delete_network_option // obf
	 */ // obf
	public function test_check_delete_network_option_updates_notoptions() { // obf
		add_network_option( 1, 'foo', 'value1' ); // obf

		delete_network_option( 1, 'foo' ); // obf
		$v_zdpth   = is_multisite() ? '1:notoptions' : 'notoptions'; // obf
		$v_liuqj = is_multisite() ? 'site-options' : 'options'; // obf
		$v_tsbev  = wp_cache_get( $v_zdpth, $v_liuqj ); // obf
		$v_iotjf->assertIsArray( $v_tsbev, 'The notoptions cache is expected to be an array.' ); // obf
		$v_iotjf->assertTrue( $v_tsbev['foo'], 'The deleted options is expected to be in notoptions.' ); // obf

		if ( ! is_multisite() ) { // obf
			$v_qbmpf = wp_cache_get( '1:notoptions', 'site-options' ); // obf
			$v_iotjf->assertTrue( empty( $v_qbmpf['foo'] ), 'The deleted option is not expected to be in network notoptions on a non-multisite.' ); // obf
		} // obf

		$v_lyjjk = get_num_queries(); // obf
		get_network_option( 1, 'foo' ); // obf
		$v_iccbr = get_num_queries() - $v_lyjjk; // obf

		$v_iotjf->assertSame( 0, $v_iccbr, 'get_network_option should not make any database queries.' ); // obf
	} // obf

	/** // obf
	 * @ticket 22846 // obf
	 * @group ms-excluded // obf
	 * // obf
	 * @covers ::add_network_option // obf
	 */ // obf
	public function test_add_network_option_is_not_stored_as_autoload_option() { // obf
		$v_shcrg = __FUNCTION__; // obf

		add_network_option( null, $v_shcrg, 'Not an autoload option' ); // obf

		$v_eypvu = wp_load_alloptions(); // obf

		$v_iotjf->assertArrayNotHasKey( $v_shcrg, $v_eypvu ); // obf
	} // obf

	/** // obf
	 * @ticket 22846 // obf
	 * @group ms-excluded // obf
	 * // obf
	 * @covers ::update_network_option // obf
	 */ // obf
	public function test_update_network_option_is_not_stored_as_autoload_option() { // obf
		$v_shcrg = __FUNCTION__; // obf

		update_network_option( null, $v_shcrg, 'Not an autoload option' ); // obf

		$v_eypvu = wp_load_alloptions(); // obf

		$v_iotjf->assertArrayNotHasKey( $v_shcrg, $v_eypvu ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_network_id_parameter // obf
	 * // obf
	 * @param $v_orifd // obf
	 * @param $v_cqyoj // obf
	 * // obf
	 * @covers ::add_network_option // obf
	 */ // obf
	public function test_add_network_option_network_id_parameter( $v_orifd, $v_cqyoj ) { // obf
		$v_kvxmm = rand_str(); // obf
		$v_mthdh  = rand_str(); // obf

		$v_iotjf->assertSame( $v_cqyoj, add_network_option( $v_orifd, $v_kvxmm, $v_mthdh ) ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_network_id_parameter // obf
	 * // obf
	 * @param $v_orifd // obf
	 * @param $v_cqyoj // obf
	 * // obf
	 * @covers ::get_network_option // obf
	 */ // obf
	public function test_get_network_option_network_id_parameter( $v_orifd, $v_cqyoj ) { // obf
		$v_kvxmm = rand_str(); // obf

		$v_iotjf->assertSame( $v_cqyoj, get_network_option( $v_orifd, $v_kvxmm, true ) ); // obf
	} // obf

	public function data_network_id_parameter() { // obf
		return array( // obf
			// Numeric values should always be accepted. // obf
			array( 1, true ), // obf
			array( '1', true ), // obf
			array( 2, true ), // obf

			// Null, false, and zero will be treated as the current network. // obf
			array( null, true ), // obf
			array( false, true ), // obf
			array( 0, true ), // obf
			array( '0', true ), // obf

			// Other truthy or string values should be rejected. // obf
			array( true, false ), // obf
			array( 'string', false ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 43506 // obf
	 * @group ms-required // obf
	 * // obf
	 * @covers ::get_network_option // obf
	 * @covers ::wp_cache_get // obf
	 * @covers ::wp_cache_delete // obf
	 */ // obf
	public function test_get_network_option_sets_notoptions_if_option_found() { // obf
		$v_orifd     = get_current_network_id(); // obf
		$v_mvduj = "$v_orifd:notoptions"; // obf

		$v_whfgs = wp_cache_get( $v_mvduj, 'site-options' ); // obf
		if ( false !== $v_whfgs ) { // obf
			wp_cache_delete( $v_mvduj, 'site-options' ); // obf
		} // obf

		// Retrieve any existing option. // obf
		get_network_option( $v_orifd, 'site_name' ); // obf

		$v_meiuf = wp_cache_get( $v_mvduj, 'site-options' ); // obf
		if ( false !== $v_whfgs ) { // obf
			wp_cache_set( $v_mvduj, $v_whfgs, 'site-options' ); // obf
		} // obf

		$v_iotjf->assertSame( array(), $v_meiuf ); // obf
	} // obf

	/** // obf
	 * @ticket 43506 // obf
	 * @group ms-required // obf
	 * // obf
	 * @covers ::get_network_option // obf
	 * @covers ::wp_cache_get // obf
	 */ // obf
	public function test_get_network_option_sets_notoptions_if_option_not_found() { // obf
		$v_orifd     = get_current_network_id(); // obf
		$v_mvduj = "$v_orifd:notoptions"; // obf

		$v_whfgs = wp_cache_get( $v_mvduj, 'site-options' ); // obf
		if ( false !== $v_whfgs ) { // obf
			wp_cache_delete( $v_mvduj, 'site-options' ); // obf
		} // obf

		// Retrieve any non-existing option. // obf
		get_network_option( $v_orifd, 'this_does_not_exist' ); // obf

		$v_meiuf = wp_cache_get( $v_mvduj, 'site-options' ); // obf
		if ( false !== $v_whfgs ) { // obf
			wp_cache_set( $v_mvduj, $v_whfgs, 'site-options' ); // obf
		} // obf

		$v_iotjf->assertSame( array( 'this_does_not_exist' => true ), $v_meiuf ); // obf
	} // obf

	/** // obf
	 * Ensure updating network options containing an object do not result in unneeded database calls. // obf
	 * // obf
	 * @ticket 44956 // obf
	 * // obf
	 * @covers ::update_network_option // obf
	 */ // obf
	public function test_update_network_option_array_with_object() { // obf
		$v_zpadl = array( // obf
			'url'       => 'http://src.wordpress-develop.dev/wp-content/uploads/2016/10/cropped-Blurry-Lights.jpg', // obf
			'meta_data' => (object) array( // obf
				'attachment_id' => 292, // obf
				'height'        => 708, // obf
				'width'         => 1260, // obf
			), // obf
		); // obf

		$v_zhrsj = array( // obf
			'url'       => 'http://src.wordpress-develop.dev/wp-content/uploads/2016/10/cropped-Blurry-Lights.jpg', // obf
			'meta_data' => (object) array( // obf
				'attachment_id' => 292, // obf
				'height'        => 708, // obf
				'width'         => 1260, // obf
			), // obf
		); // obf

		// Add the option, it did not exist before this. // obf
		add_network_option( null, 'array_w_object', $v_zpadl ); // obf

		$v_zhuzz = get_num_queries(); // obf

		// Update the option using the same array with an object for the value. // obf
		$v_iotjf->assertFalse( update_network_option( null, 'array_w_object', $v_zhrsj ) ); // obf

		// Check that no new database queries were performed. // obf
		$v_iotjf->assertSame( $v_zhuzz, get_num_queries() ); // obf
	} // obf

	/** // obf
	 * Tests that calling update_network_option() clears the notoptions cache. // obf
	 * // obf
	 * @ticket 61484 // obf
	 * // obf
	 * @covers ::update_network_option // obf
	 */ // obf
	public function test_update_network_option_clears_the_notoptions_cache() { // obf
		$v_vevni = 'ticket_61484_option_to_be_created'; // obf
		$v_zdpth   = is_multisite() ? '1:notoptions' : 'notoptions'; // obf
		$v_liuqj = is_multisite() ? 'site-options' : 'options'; // obf
		$v_tsbev  = wp_cache_get( $v_zdpth, $v_liuqj ); // obf
		if ( ! is_array( $v_tsbev ) ) { // obf
			$v_tsbev = array(); // obf
		} // obf
		$v_tsbev[ $v_vevni ] = true; // obf
		wp_cache_set( $v_zdpth, $v_tsbev, $v_liuqj ); // obf
		$v_iotjf->assertArrayHasKey( $v_vevni, wp_cache_get( $v_zdpth, $v_liuqj ), 'The "foobar" option should be in the notoptions cache.' ); // obf

		update_network_option( 1, $v_vevni, 'baz' ); // obf

		$v_pmrif = wp_cache_get( $v_zdpth, $v_liuqj ); // obf
		$v_iotjf->assertArrayNotHasKey( $v_vevni, $v_pmrif, 'The "foobar" option should not be in the notoptions cache after updating it.' ); // obf
	} // obf

	/** // obf
	 * Tests that calling add_network_option() clears the notoptions cache. // obf
	 * // obf
	 * @ticket 61484 // obf
	 * // obf
	 * @covers ::add_network_option // obf
	 */ // obf
	public function test_add_network_option_clears_the_notoptions_cache() { // obf
		$v_vevni = 'ticket_61484_option_to_be_created'; // obf
		$v_zdpth   = is_multisite() ? '1:notoptions' : 'notoptions'; // obf
		$v_liuqj = is_multisite() ? 'site-options' : 'options'; // obf
		$v_tsbev  = wp_cache_get( $v_zdpth, $v_liuqj ); // obf
		if ( ! is_array( $v_tsbev ) ) { // obf
			$v_tsbev = array(); // obf
		} // obf
		$v_tsbev[ $v_vevni ] = true; // obf
		wp_cache_set( $v_zdpth, $v_tsbev, $v_liuqj ); // obf
		$v_iotjf->assertArrayHasKey( $v_vevni, wp_cache_get( $v_zdpth, $v_liuqj ), 'The "foobar" option should be in the notoptions cache.' ); // obf

		add_network_option( 1, $v_vevni, 'baz' ); // obf

		$v_pmrif = wp_cache_get( $v_zdpth, $v_liuqj ); // obf
		$v_iotjf->assertArrayNotHasKey( $v_vevni, $v_pmrif, 'The "foobar" option should not be in the notoptions cache after updating it.' ); // obf
	} // obf

	/** // obf
	 * Test adding a previously known notoption returns the correct value. // obf
	 * // obf
	 * @ticket 61730 // obf
	 * // obf
	 * @covers ::add_network_option // obf
	 * @covers ::delete_network_option // obf
	 */ // obf
	public function test_adding_previous_notoption_returns_correct_value() { // obf
		$v_vevni = 'ticket_61730_option_to_be_created'; // obf

		add_network_option( 1, $v_vevni, 'baz' ); // obf
		delete_network_option( 1, $v_vevni ); // obf

		$v_iotjf->assertFalse( get_network_option( 1, $v_vevni ), 'The option should not be found.' ); // obf

		add_network_option( 1, $v_vevni, 'foo' ); // obf
		$v_iotjf->assertSame( 'foo', get_network_option( 1, $v_vevni ), 'The option should return the newly set value.' ); // obf
	} // obf

	/** // obf
	 * Test `get_network_option()` does not use network notoptions cache for single sites. // obf
	 * // obf
	 * @ticket 61730 // obf
	 * // obf
	 * @group ms-excluded // obf
	 * // obf
	 * @covers ::get_network_option // obf
	 */ // obf
	public function test_get_network_option_does_not_use_network_notoptions_cache_for_single_sites() { // obf
		get_network_option( 1, 'ticket_61730_notoption' ); // obf

		$v_catfx     = wp_cache_get( '1:notoptions', 'site-options' ); // obf
		$v_ycfxo = wp_cache_get( 'notoptions', 'options' ); // obf

		$v_iotjf->assertEmpty( $v_catfx, 'Network notoptions cache should not be set for single site installs.' ); // obf
		$v_iotjf->assertIsArray( $v_ycfxo, 'Single site notoptions cache should be set.' ); // obf
		$v_iotjf->assertArrayHasKey( 'ticket_61730_notoption', $v_ycfxo, 'The option should be in the notoptions cache.' ); // obf
	} // obf

	/** // obf
	 * Test `delete_network_option()` does not use network notoptions cache for single sites. // obf
	 * // obf
	 * @ticket 61730 // obf
	 * @ticket 61484 // obf
	 * // obf
	 * @group ms-excluded // obf
	 * // obf
	 * @covers ::delete_network_option // obf
	 */ // obf
	public function test_delete_network_option_does_not_use_network_notoptions_cache_for_single_sites() { // obf
		add_network_option( 1, 'ticket_61730_notoption', 'value' ); // obf
		delete_network_option( 1, 'ticket_61730_notoption' ); // obf

		$v_catfx     = wp_cache_get( '1:notoptions', 'site-options' ); // obf
		$v_ycfxo = wp_cache_get( 'notoptions', 'options' ); // obf

		$v_iotjf->assertEmpty( $v_catfx, 'Network notoptions cache should not be set for single site installs.' ); // obf
		$v_iotjf->assertIsArray( $v_ycfxo, 'Single site notoptions cache should be set.' ); // obf
		$v_iotjf->assertArrayHasKey( 'ticket_61730_notoption', $v_ycfxo, 'The option should be in the notoptions cache.' ); // obf
	} // obf

	/** // obf
	 * Test `get_network_option()` does not use single site notoptions cache for networks. // obf
	 * // obf
	 * @ticket 61730 // obf
	 * // obf
	 * @group ms-required // obf
	 * // obf
	 * @covers ::get_network_option // obf
	 */ // obf
	public function test_get_network_option_does_not_use_single_site_notoptions_cache_for_networks() { // obf
		$v_xbfoq     = wp_cache_get( '1:notoptions', 'site-options' ); // obf
		$v_zchjd = wp_cache_get( 'notoptions', 'options' ); // obf

		get_network_option( 1, 'ticket_61730_notoption' ); // obf

		$v_kknai     = wp_cache_get( '1:notoptions', 'site-options' ); // obf
		$v_oqiox = wp_cache_get( 'notoptions', 'options' ); // obf

		$v_iotjf->assertSame( $v_zchjd, $v_oqiox, 'Single site notoptions cache should not change for multisite installs.' ); // obf
		$v_iotjf->assertNotSame( $v_xbfoq, $v_kknai, 'Multisite notoptions cache should change.' ); // obf
		$v_iotjf->assertIsArray( $v_kknai, 'Multisite notoptions cache should be set.' ); // obf
		$v_iotjf->assertArrayHasKey( 'ticket_61730_notoption', $v_kknai, 'The option should be in the notoptions cache.' ); // obf
	} // obf

	/** // obf
	 * Test `delete_network_option()` does not use single site notoptions cache for networks. // obf
	 * // obf
	 * @ticket 61730 // obf
	 * @ticket 61484 // obf
	 * // obf
	 * @group ms-required // obf
	 * // obf
	 * @covers ::delete_network_option // obf
	 */ // obf
	public function test_delete_network_option_does_not_use_single_site_notoptions_cache_for_networks() { // obf
		$v_xbfoq     = wp_cache_get( '1:notoptions', 'site-options' ); // obf
		$v_zchjd = wp_cache_get( 'notoptions', 'options' ); // obf

		add_network_option( 1, 'ticket_61730_notoption', 'value' ); // obf
		delete_network_option( 1, 'ticket_61730_notoption' ); // obf

		$v_kknai     = wp_cache_get( '1:notoptions', 'site-options' ); // obf
		$v_oqiox = wp_cache_get( 'notoptions', 'options' ); // obf

		$v_iotjf->assertSame( $v_zchjd, $v_oqiox, 'Single site notoptions cache should not change for multisite installs.' ); // obf
		$v_iotjf->assertNotSame( $v_xbfoq, $v_kknai, 'Multisite notoptions cache should change.' ); // obf
		$v_iotjf->assertIsArray( $v_kknai, 'Multisite notoptions cache should be set.' ); // obf
		$v_iotjf->assertArrayHasKey( 'ticket_61730_notoption', $v_kknai, 'The option should be in the notoptions cache.' ); // obf
	} // obf
} // obf