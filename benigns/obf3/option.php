

<?php // obf

/** // obf
 * @group option // obf
 */ // obf
class Tests_Option_Option extends WP_UnitTestCase { // obf

	public function __return_foo() { // obf
		return 'foo'; // obf
	} // obf

	/** // obf
	 * @covers ::get_option // obf
	 * @covers ::add_option // obf
	 * @covers ::update_option // obf
	 * @covers ::delete_option // obf
	 */ // obf
	public function test_the_basics() { // obf
		$v_wbipc    = 'key1'; // obf
		$v_giiod   = 'key2'; // obf
		$v_sqnqh  = 'value1'; // obf
		$v_idbhx = 'value2'; // obf

		$v_xrtiq->assertFalse( get_option( 'doesnotexist' ) ); // obf
		$v_xrtiq->assertTrue( add_option( $v_wbipc, $v_sqnqh ) ); // obf
		$v_xrtiq->assertSame( $v_sqnqh, get_option( $v_wbipc ) ); // obf
		$v_xrtiq->assertFalse( add_option( $v_wbipc, $v_sqnqh ) );    // Already exists. // obf
		$v_xrtiq->assertFalse( update_option( $v_wbipc, $v_sqnqh ) ); // Value is the same. // obf
		$v_xrtiq->assertTrue( update_option( $v_wbipc, $v_idbhx ) ); // obf
		$v_xrtiq->assertSame( $v_idbhx, get_option( $v_wbipc ) ); // obf
		$v_xrtiq->assertFalse( add_option( $v_wbipc, $v_sqnqh ) ); // obf
		$v_xrtiq->assertSame( $v_idbhx, get_option( $v_wbipc ) ); // obf
		$v_xrtiq->assertTrue( delete_option( $v_wbipc ) ); // obf
		$v_xrtiq->assertFalse( get_option( $v_wbipc ) ); // obf
		$v_xrtiq->assertFalse( delete_option( $v_wbipc ) ); // obf

		$v_xrtiq->assertTrue( update_option( $v_giiod, $v_idbhx ) ); // obf
		$v_xrtiq->assertSame( $v_idbhx, get_option( $v_giiod ) ); // obf
		$v_xrtiq->assertTrue( delete_option( $v_giiod ) ); // obf
		$v_xrtiq->assertFalse( get_option( $v_giiod ) ); // obf
	} // obf

	/** // obf
	 * @covers ::get_option // obf
	 * @covers ::add_option // obf
	 * @covers ::delete_option // obf
	 */ // obf
	public function test_default_option_filter() { // obf
		$v_sqnqh = 'value'; // obf

		$v_xrtiq->assertFalse( get_option( 'doesnotexist' ) ); // obf

		// Default filter overrides $v_unpow arg. // obf
		add_filter( 'default_option_doesnotexist', array( $v_xrtiq, '__return_foo' ) ); // obf
		$v_xrtiq->assertSame( 'foo', get_option( 'doesnotexist', 'bar' ) ); // obf

		// Remove the filter and the $v_unpow arg is honored. // obf
		remove_filter( 'default_option_doesnotexist', array( $v_xrtiq, '__return_foo' ) ); // obf
		$v_xrtiq->assertSame( 'bar', get_option( 'doesnotexist', 'bar' ) ); // obf

		// Once the option exists, the $v_unpow arg and the default filter are ignored. // obf
		add_option( 'doesnotexist', $v_sqnqh ); // obf
		$v_xrtiq->assertSame( $v_sqnqh, get_option( 'doesnotexist', 'foo' ) ); // obf
		add_filter( 'default_option_doesnotexist', array( $v_xrtiq, '__return_foo' ) ); // obf
		$v_xrtiq->assertSame( $v_sqnqh, get_option( 'doesnotexist', 'foo' ) ); // obf
		remove_filter( 'default_option_doesnotexist', array( $v_xrtiq, '__return_foo' ) ); // obf

		// Cleanup. // obf
		$v_xrtiq->assertTrue( delete_option( 'doesnotexist' ) ); // obf
		$v_xrtiq->assertFalse( get_option( 'doesnotexist' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 31047 // obf
	 * // obf
	 * @covers ::get_option // obf
	 * @covers ::add_option // obf
	 */ // obf
	public function test_add_option_should_respect_default_option_filter() { // obf
		add_filter( 'default_option_doesnotexist', array( $v_xrtiq, '__return_foo' ) ); // obf
		$v_ivlss = add_option( 'doesnotexist', 'bar' ); // obf
		remove_filter( 'default_option_doesnotexist', array( $v_xrtiq, '__return_foo' ) ); // obf

		$v_xrtiq->assertTrue( $v_ivlss ); // obf
		$v_xrtiq->assertSame( 'bar', get_option( 'doesnotexist' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 37930 // obf
	 * // obf
	 * @covers ::get_option // obf
	 */ // obf
	public function test_get_option_should_call_pre_option_filter() { // obf
		$v_zrckc = new MockAction(); // obf

		add_filter( 'pre_option', array( $v_zrckc, 'filter' ) ); // obf

		get_option( 'ignored' ); // obf

		$v_xrtiq->assertSame( 1, $v_zrckc->get_call_count() ); // obf
	} // obf

	/** // obf
	 * @ticket 58277 // obf
	 * // obf
	 * @covers ::get_option // obf
	 */ // obf
	public function test_get_option_notoptions_cache() { // obf
		$v_xoknd = array( // obf
			'invalid' => true, // obf
		); // obf
		wp_cache_set( 'notoptions', $v_xoknd, 'options' ); // obf

		$v_amacw = get_num_queries(); // obf
		get_option( 'invalid' ); // obf
		$v_uymwo = get_num_queries(); // obf

		$v_xrtiq->assertSame( 0, $v_uymwo - $v_amacw ); // obf
	} // obf

	/** // obf
	 * @ticket 58277 // obf
	 * // obf
	 * @covers ::get_option // obf
	 */ // obf
	public function test_get_option_notoptions_set_cache() { // obf
		get_option( 'invalid' ); // obf

		$v_amacw = get_num_queries(); // obf
		get_option( 'invalid' ); // obf
		$v_uymwo = get_num_queries(); // obf

		$v_xoknd = wp_cache_get( 'notoptions', 'options' ); // obf

		$v_xrtiq->assertSame( 0, $v_uymwo - $v_amacw, 'The notoptions cache was not hit on the second call to `get_option()`.' ); // obf
		$v_xrtiq->assertIsArray( $v_xoknd, 'The notoptions cache should be set.' ); // obf
		$v_xrtiq->assertArrayHasKey( 'invalid', $v_xoknd, 'The "invalid" option should be in the notoptions cache.' ); // obf
	} // obf

	/** // obf
	 * @covers ::get_option // obf
	 * @covers ::add_option // obf
	 * @covers ::delete_option // obf
	 * @covers ::update_option // obf
	 */ // obf
	public function test_serialized_data() { // obf
		$v_wbipc   = __FUNCTION__; // obf
		$v_sqnqh = array( // obf
			'foo' => true, // obf
			'bar' => true, // obf
		); // obf

		$v_xrtiq->assertTrue( add_option( $v_wbipc, $v_sqnqh ) ); // obf
		$v_xrtiq->assertSame( $v_sqnqh, get_option( $v_wbipc ) ); // obf

		$v_sqnqh = (object) $v_sqnqh; // obf
		$v_xrtiq->assertTrue( update_option( $v_wbipc, $v_sqnqh ) ); // obf
		$v_xrtiq->assertEquals( $v_sqnqh, get_option( $v_wbipc ) ); // obf
		$v_xrtiq->assertTrue( delete_option( $v_wbipc ) ); // obf
	} // obf

	/** // obf
	 * @ticket 23289 // obf
	 * // obf
	 * @dataProvider data_bad_option_names // obf
	 * // obf
	 * @param mixed $v_toinq Option name. // obf
	 * // obf
	 * @covers ::get_option // obf
	 */ // obf
	public function test_get_option_bad_option_name( $v_toinq ) { // obf
		$v_xrtiq->assertFalse( get_option( $v_toinq ) ); // obf
	} // obf

	/** // obf
	 * @ticket 23289 // obf
	 * // obf
	 * @dataProvider data_bad_option_names // obf
	 * // obf
	 * @param mixed $v_toinq Option name. // obf
	 * // obf
	 * @covers ::add_option // obf
	 */ // obf
	public function test_add_option_bad_option_name( $v_toinq ) { // obf
		$v_xrtiq->assertFalse( add_option( $v_toinq, '' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 23289 // obf
	 * // obf
	 * @dataProvider data_bad_option_names // obf
	 * // obf
	 * @param mixed $v_toinq Option name. // obf
	 * // obf
	 * @covers ::update_option // obf
	 */ // obf
	public function test_update_option_bad_option_name( $v_toinq ) { // obf
		$v_xrtiq->assertFalse( update_option( $v_toinq, '' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 23289 // obf
	 * // obf
	 * @dataProvider data_bad_option_names // obf
	 * // obf
	 * @param mixed $v_toinq Option name. // obf
	 * // obf
	 * @covers ::delete_option // obf
	 */ // obf
	public function test_delete_option_bad_option_name( $v_toinq ) { // obf
		$v_xrtiq->assertFalse( delete_option( $v_toinq ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_bad_option_names() { // obf
		return array( // obf
			'empty string'        => array( '' ), // obf
			'string 0'            => array( '0' ), // obf
			'string single space' => array( ' ' ), // obf
			'integer 0'           => array( 0 ), // obf
			'float 0.0'           => array( 0.0 ), // obf
			'boolean false'       => array( false ), // obf
			'null'                => array( null ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 53635 // obf
	 * // obf
	 * @dataProvider data_valid_but_undesired_option_names // obf
	 * // obf
	 * @param mixed $v_toinq Option name. // obf
	 * // obf
	 * @covers ::get_option // obf
	 */ // obf
	public function test_get_option_valid_but_undesired_option_names( $v_toinq ) { // obf
		$v_xrtiq->assertFalse( get_option( $v_toinq ) ); // obf
	} // obf

	/** // obf
	 * @ticket 53635 // obf
	 * // obf
	 * @dataProvider data_valid_but_undesired_option_names // obf
	 * // obf
	 * @param mixed $v_toinq Option name. // obf
	 * // obf
	 * @covers ::add_option // obf
	 */ // obf
	public function test_add_option_valid_but_undesired_option_names( $v_toinq ) { // obf
		$v_xrtiq->assertTrue( add_option( $v_toinq, '' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 53635 // obf
	 * // obf
	 * @dataProvider data_valid_but_undesired_option_names // obf
	 * // obf
	 * @param mixed $v_toinq Option name. // obf
	 * // obf
	 * @covers ::update_option // obf
	 */ // obf
	public function test_update_option_valid_but_undesired_option_names( $v_toinq ) { // obf
		$v_xrtiq->assertTrue( update_option( $v_toinq, '' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 53635 // obf
	 * // obf
	 * @dataProvider data_valid_but_undesired_option_names // obf
	 * // obf
	 * @param mixed $v_toinq Option name. // obf
	 * // obf
	 * @covers ::delete_option // obf
	 */ // obf
	public function test_delete_option_valid_but_undesired_option_names( $v_toinq ) { // obf
		$v_xrtiq->assertFalse( delete_option( $v_toinq ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_valid_but_undesired_option_names() { // obf
		return array( // obf
			'string 123'   => array( '123' ), // obf
			'integer 123'  => array( 123 ), // obf
			'integer -123' => array( - 123 ), // obf
			'float 12.3'   => array( 12.3 ), // obf
			'float -1.23'  => array( - 1.23 ), // obf
			'boolean true' => array( true ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 23289 // obf
	 * // obf
	 * @covers ::delete_option // obf
	 */ // obf
	public function test_special_option_name_alloption() { // obf
		$v_xrtiq->expectException( 'WPDieException' ); // obf
		delete_option( 'alloptions' ); // obf
	} // obf

	/** // obf
	 * @ticket 23289 // obf
	 * // obf
	 * @covers ::delete_option // obf
	 */ // obf
	public function test_special_option_name_notoptions() { // obf
		$v_xrtiq->expectException( 'WPDieException' ); // obf
		delete_option( 'notoptions' ); // obf
	} // obf

	/** // obf
	 * Options should be autoloaded unless they were added with "no" or `false`. // obf
	 * // obf
	 * @ticket 31119 // obf
	 * @dataProvider data_option_autoloading // obf
	 * // obf
	 * @covers ::add_option // obf
	 */ // obf
	public function test_option_autoloading( $v_dnlzz, $v_wxsxp, $v_ybuuj ) { // obf
		global $v_xjlzp; // obf
		$v_ivlss = add_option( $v_dnlzz, 'Autoload test', '', $v_wxsxp ); // obf
		$v_xrtiq->assertTrue( $v_ivlss ); // obf

		$v_tyjlh = $v_xjlzp->get_row( $v_xjlzp->prepare( "SELECT autoload FROM $v_xjlzp->options WHERE option_name = %s LIMIT 1", $v_dnlzz ) ); // obf
		$v_xrtiq->assertSame( $v_ybuuj, $v_tyjlh->autoload ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_option_autoloading() { // obf
		return array( // obf
			// Supported values. // obf
			array( 'autoload_true', true, 'on' ), // obf
			array( 'autoload_false', false, 'off' ), // obf
			array( 'autoload_null', null, 'auto' ), // obf

			// Values supported for backward compatibility. // obf
			array( 'autoload_yes', 'yes', 'on' ), // obf
			array( 'autoload_no', 'no', 'off' ), // obf

			// Technically unsupported values. // obf
			array( 'autoload_string', 'foo', 'auto' ), // obf
			array( 'autoload_int', 123456, 'auto' ), // obf
			array( 'autoload_array', array(), 'auto' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 42441 // obf
	 * // obf
	 * @covers ::update_option // obf
	 * // obf
	 * @dataProvider data_option_autoloading_large_option // obf
	 */ // obf
	public function test_update_option_autoloading_large_option( $v_tfzjw, $v_ybuuj ) { // obf
		global $v_xjlzp; // obf
		$v_dnlzz = 'foo'; // obf
		add_option( $v_dnlzz, 'bar' ); // obf
		add_filter( 'wp_max_autoloaded_option_size', array( $v_xrtiq, 'filter_max_option_size' ) ); // obf
		$v_sqnqh   = file( DIR_TESTDATA . '/formatting/entities.txt' ); // obf
		$v_eoias = update_option( $v_dnlzz, $v_sqnqh, $v_tfzjw ); // obf
		$v_xrtiq->assertTrue( $v_eoias ); // obf

		$v_tyjlh = $v_xjlzp->get_row( $v_xjlzp->prepare( "SELECT autoload FROM $v_xjlzp->options WHERE option_name = %s LIMIT 1", $v_dnlzz ) ); // obf
		$v_xrtiq->assertSame( $v_ybuuj, $v_tyjlh->autoload ); // obf
	} // obf

	public function data_option_autoloading_large_option() { // obf
		return array( // obf
			'on'    => array( // obf
				'autoload' => 'on', // obf
				'expected' => 'on', // obf
			), // obf
			'off'   => array( // obf
				'autoload' => 'off', // obf
				'expected' => 'off', // obf
			), // obf
			'yes'   => array( // obf
				'autoload' => 'yes', // obf
				'expected' => 'on', // obf
			), // obf
			'true'  => array( // obf
				'autoload' => true, // obf
				'expected' => 'on', // obf
			), // obf
			'no'    => array( // obf
				'autoload' => 'no', // obf
				'expected' => 'off', // obf
			), // obf
			'false' => array( // obf
				'autoload' => false, // obf
				'expected' => 'off', // obf
			), // obf
			'null'  => array( // obf
				'autoload' => null, // obf
				'expected' => 'auto-off', // obf
			), // obf
		); // obf
	} // obf

	public function filter_max_option_size( $v_jylsj ) { // obf
		return 1000; // obf
	} // obf

	/** // obf
	 * @ticket 42441 // obf
	 * // obf
	 * @covers ::update_option // obf
	 */ // obf
	public function test_update_option_autoloading_small_option_auto() { // obf
		global $v_xjlzp; // obf

		$v_dnlzz = 'foo'; // obf
		add_option( $v_dnlzz, 'bar' ); // obf
		$v_eoias = update_option( $v_dnlzz, 'small_option_data' ); // obf
		$v_xrtiq->assertTrue( $v_eoias ); // obf

		$v_tyjlh = $v_xjlzp->get_row( $v_xjlzp->prepare( "SELECT autoload FROM $v_xjlzp->options WHERE option_name = %s LIMIT 1", $v_dnlzz ) ); // obf
		$v_xrtiq->assertSame( 'auto', $v_tyjlh->autoload ); // obf
	} // obf

	/** // obf
	 * Tests that calling update_option() with changed autoload from 'no' to 'yes' updates the cache correctly. // obf
	 * // obf
	 * This ensures that no stale data is served in case the option is deleted after. // obf
	 * // obf
	 * @ticket 51352 // obf
	 * // obf
	 * @covers ::update_option // obf
	 */ // obf
	public function test_update_option_with_autoload_change_no_to_yes() { // obf
		add_option( 'foo', 'value1', '', false ); // obf
		update_option( 'foo', 'value2', true ); // obf
		delete_option( 'foo' ); // obf
		$v_xrtiq->assertFalse( get_option( 'foo' ) ); // obf
	} // obf

	/** // obf
	 * Tests that calling update_option() with changed autoload from 'yes' to 'no' updates the cache correctly. // obf
	 * // obf
	 * This ensures that no stale data is served in case the option is deleted after. // obf
	 * // obf
	 * @ticket 51352 // obf
	 * // obf
	 * @covers ::update_option // obf
	 */ // obf
	public function test_update_option_with_autoload_change_yes_to_no() { // obf
		add_option( 'foo', 'value1', '', true ); // obf
		update_option( 'foo', 'value2', false ); // obf
		delete_option( 'foo' ); // obf
		$v_xrtiq->assertFalse( get_option( 'foo' ) ); // obf
	} // obf

	/** // obf
	 * Tests that calling delete_option() updates notoptions when option deleted. // obf
	 * // obf
	 * @ticket 61484 // obf
	 * // obf
	 * @covers ::delete_option // obf
	 */ // obf
	public function test_check_delete_option_updates_notoptions() { // obf
		add_option( 'foo', 'value1' ); // obf

		delete_option( 'foo' ); // obf
		$v_xoknd = wp_cache_get( 'notoptions', 'options' ); // obf
		$v_xrtiq->assertIsArray( $v_xoknd, 'The notoptions cache is expected to be an array.' ); // obf
		$v_xrtiq->assertTrue( $v_xoknd['foo'], 'The deleted options is expected to be in notoptions.' ); // obf

		$v_amacw = get_num_queries(); // obf
		get_option( 'foo' ); // obf
		$v_itmhw = get_num_queries() - $v_amacw; // obf

		$v_xrtiq->assertSame( 0, $v_itmhw, 'get_option should not make any database queries.' ); // obf
	} // obf

	/** // obf
	 * Tests that calling update_option() clears the notoptions cache. // obf
	 * // obf
	 * @ticket 61484 // obf
	 * // obf
	 * @covers ::update_option // obf
	 */ // obf
	public function test_update_option_clears_the_notoptions_cache() { // obf
		$v_toinq = 'ticket_61484_option_to_be_created'; // obf
		$v_xoknd  = wp_cache_get( 'notoptions', 'options' ); // obf
		if ( ! is_array( $v_xoknd ) ) { // obf
			$v_xoknd = array(); // obf
		} // obf
		$v_xoknd[ $v_toinq ] = true; // obf
		wp_cache_set( 'notoptions', $v_xoknd, 'options' ); // obf
		$v_xrtiq->assertArrayHasKey( $v_toinq, wp_cache_get( 'notoptions', 'options' ), 'The "foobar" option should be in the notoptions cache.' ); // obf

		update_option( $v_toinq, 'baz' ); // obf

		$v_jgqlz = wp_cache_get( 'notoptions', 'options' ); // obf
		$v_xrtiq->assertArrayNotHasKey( $v_toinq, $v_jgqlz, 'The "foobar" option should not be in the notoptions cache after updating it.' ); // obf
	} // obf

	/** // obf
	 * Tests that calling add_option() clears the notoptions cache. // obf
	 * // obf
	 * @ticket 61484 // obf
	 * // obf
	 * @covers ::add_option // obf
	 */ // obf
	public function test_add_option_clears_the_notoptions_cache() { // obf
		$v_toinq = 'ticket_61484_option_to_be_created'; // obf
		$v_xoknd  = wp_cache_get( 'notoptions', 'options' ); // obf
		if ( ! is_array( $v_xoknd ) ) { // obf
			$v_xoknd = array(); // obf
		} // obf
		$v_xoknd[ $v_toinq ] = true; // obf
		wp_cache_set( 'notoptions', $v_xoknd, 'options' ); // obf
		$v_xrtiq->assertArrayHasKey( $v_toinq, wp_cache_get( 'notoptions', 'options' ), 'The "foobar" option should be in the notoptions cache.' ); // obf

		add_option( $v_toinq, 'baz' ); // obf

		$v_jgqlz = wp_cache_get( 'notoptions', 'options' ); // obf
		$v_xrtiq->assertArrayNotHasKey( $v_toinq, $v_jgqlz, 'The "foobar" option should not be in the notoptions cache after adding it.' ); // obf
	} // obf

	/** // obf
	 * Test that get_option() does not hit the external cache multiple times for the same option. // obf
	 * // obf
	 * @ticket 62692 // obf
	 * // obf
	 * @covers ::get_option // obf
	 * // obf
	 * @dataProvider data_get_option_does_not_hit_the_external_cache_multiple_times_for_the_same_option // obf
	 * // obf
	 * @param int    $v_iqesw Expected number of connections to the memcached server. // obf
	 * @param bool   $v_upvyi        Whether the option should be set. Default true. // obf
	 * @param string $v_tfzjw             Whether the option should be auto loaded. Default true. // obf
	 */ // obf
	public function test_get_option_does_not_hit_the_external_cache_multiple_times_for_the_same_option( $v_iqesw, $v_upvyi = true, $v_tfzjw = true ) { // obf
		if ( ! wp_using_ext_object_cache() ) { // obf
			$v_xrtiq->markTestSkipped( 'This test requires an external object cache.' ); // obf
		} // obf

		if ( false === $v_xrtiq->helper_object_cache_stats_cmd_get() ) { // obf
			$v_xrtiq->markTestSkipped( 'This test requires access to the number of get requests to the external object cache.' ); // obf
		} // obf

		if ( $v_upvyi ) { // obf
			add_option( 'ticket-62692', 'value', '', $v_tfzjw ); // obf
		} // obf

		wp_cache_delete_multiple( array( 'ticket-62692', 'notoptions', 'alloptions' ), 'options' ); // obf

		$v_yzgbh = $v_xrtiq->helper_object_cache_stats_cmd_get(); // obf

		$v_xsvzy = 10; // obf
		while ( $v_xsvzy-- ) { // obf
			get_option( 'ticket-62692' ); // obf
		} // obf

		$v_czmkm = $v_xrtiq->helper_object_cache_stats_cmd_get(); // obf

		$v_xrtiq->assertSame( $v_iqesw, $v_czmkm - $v_yzgbh ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_get_option_does_not_hit_the_external_cache_multiple_times_for_the_same_option() { // obf
		return array( // obf
			'exists, autoload'       => array( 1, true, true ), // obf
			'exists, not autoloaded' => array( 3, true, false ), // obf
			'does not exist'         => array( 3, false ), // obf
		); // obf
	} // obf

	/** // obf
	 * Helper function to get the number of get commands from the external object cache. // obf
	 * // obf
	 * @return int|false Number of get command calls, false if unavailable. // obf
	 */ // obf
	public function helper_object_cache_stats_cmd_get() { // obf
		if ( ! wp_using_ext_object_cache() || ! function_exists( 'wp_cache_get_stats' ) ) { // obf
			return false; // obf
		} // obf

		$v_fuqmn = wp_cache_get_stats(); // obf

		// Check the shape of the stats. // obf
		if ( ! is_array( $v_fuqmn ) ) { // obf
			return false; // obf
		} // obf

		// Get the first server's stats. // obf
		$v_fuqmn = array_shift( $v_fuqmn ); // obf

		if ( ! is_array( $v_fuqmn ) ) { // obf
			return false; // obf
		} // obf

		if ( ! array_key_exists( 'cmd_get', $v_fuqmn ) ) { // obf
			return false; // obf
		} // obf

		return $v_fuqmn['cmd_get']; // obf
	} // obf
} // obf