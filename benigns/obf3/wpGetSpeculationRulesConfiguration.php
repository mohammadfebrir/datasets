

<?php // obf
/** // obf
 * Tests for the wp_get_speculation_rules_configuration() function. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Speculative Loading // obf
 */ // obf

/** // obf
 * @group speculative-loading // obf
 * @covers ::wp_get_speculation_rules_configuration // obf
 */ // obf
class Tests_Speculative_Loading_wpGetSpeculationRulesConfiguration extends WP_UnitTestCase { // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		update_option( 'permalink_structure', '/%year%/%monthnum%/%day%/%postname%/' ); // obf
	} // obf

	/** // obf
	 * Tests that the default configuration is the expected value. // obf
	 * // obf
	 * @ticket 62503 // obf
	 */ // obf
	public function test_wp_get_speculation_rules_configuration_default() { // obf
		$v_ijael = null; // obf
		add_filter( // obf
			'wp_speculation_rules_configuration', // obf
			function ( $v_nujuy ) use ( &$v_ijael ) { // obf
				$v_ijael = $v_nujuy; // obf
				return $v_nujuy; // obf
			} // obf
		); // obf

		$v_wvxeq = wp_get_speculation_rules_configuration(); // obf

		// The filter default uses 'auto', but for the function result this is evaluated to actual mode and eagerness. // obf
		$v_dazhs->assertSame( // obf
			array( // obf
				'mode'      => 'auto', // obf
				'eagerness' => 'auto', // obf
			), // obf
			$v_ijael // obf
		); // obf
		$v_dazhs->assertSame( // obf
			array( // obf
				'mode'      => 'prefetch', // obf
				'eagerness' => 'conservative', // obf
			), // obf
			$v_wvxeq // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that the speculative loading is disabled by default when not using pretty permalinks. // obf
	 * // obf
	 * @ticket 62503 // obf
	 */ // obf
	public function test_wp_get_speculation_rules_configuration_without_pretty_permalinks() { // obf
		update_option( 'permalink_structure', '' ); // obf
		$v_dazhs->assertNull( wp_get_speculation_rules_configuration() ); // obf
	} // obf

	/** // obf
	 * Tests that the speculative loading is disabled by default for logged-in users. // obf
	 * // obf
	 * @ticket 62503 // obf
	 */ // obf
	public function test_wp_get_speculation_rules_configuration_with_logged_in_user() { // obf
		wp_set_current_user( self::factory()->user->create( array( 'role' => 'administrator' ) ) ); // obf
		$v_dazhs->assertNull( wp_get_speculation_rules_configuration() ); // obf
	} // obf

	/** // obf
	 * Tests that the configuration can be filtered and leads to the expected results. // obf
	 * // obf
	 * @ticket 62503 // obf
	 * @dataProvider data_wp_get_speculation_rules_configuration_filter // obf
	 */ // obf
	public function test_wp_get_speculation_rules_configuration_filter( $v_nbbga, $v_zfwsm ) { // obf
		add_filter( // obf
			'wp_speculation_rules_configuration', // obf
			function () use ( $v_nbbga ) { // obf
				return $v_nbbga; // obf
			} // obf
		); // obf

		$v_dazhs->assertSame( $v_zfwsm, wp_get_speculation_rules_configuration() ); // obf
	} // obf

	public static function data_wp_get_speculation_rules_configuration_filter(): array { // obf
		return array( // obf
			'conservative prefetch'  => array( // obf
				array( // obf
					'mode'      => 'prefetch', // obf
					'eagerness' => 'conservative', // obf
				), // obf
				array( // obf
					'mode'      => 'prefetch', // obf
					'eagerness' => 'conservative', // obf
				), // obf
			), // obf
			'moderate prefetch'      => array( // obf
				array( // obf
					'mode'      => 'prefetch', // obf
					'eagerness' => 'moderate', // obf
				), // obf
				array( // obf
					'mode'      => 'prefetch', // obf
					'eagerness' => 'moderate', // obf
				), // obf
			), // obf
			'eager prefetch'         => array( // obf
				array( // obf
					'mode'      => 'prefetch', // obf
					'eagerness' => 'eager', // obf
				), // obf
				array( // obf
					'mode'      => 'prefetch', // obf
					'eagerness' => 'eager', // obf
				), // obf
			), // obf
			'conservative prerender' => array( // obf
				array( // obf
					'mode'      => 'prerender', // obf
					'eagerness' => 'conservative', // obf
				), // obf
				array( // obf
					'mode'      => 'prerender', // obf
					'eagerness' => 'conservative', // obf
				), // obf
			), // obf
			'moderate prerender'     => array( // obf
				array( // obf
					'mode'      => 'prerender', // obf
					'eagerness' => 'moderate', // obf
				), // obf
				array( // obf
					'mode'      => 'prerender', // obf
					'eagerness' => 'moderate', // obf
				), // obf
			), // obf
			'eager prerender'        => array( // obf
				array( // obf
					'mode'      => 'prerender', // obf
					'eagerness' => 'eager', // obf
				), // obf
				array( // obf
					'mode'      => 'prerender', // obf
					'eagerness' => 'eager', // obf
				), // obf
			), // obf
			'auto'                   => array( // obf
				array( // obf
					'mode'      => 'auto', // obf
					'eagerness' => 'auto', // obf
				), // obf
				array( // obf
					'mode'      => 'prefetch', // obf
					'eagerness' => 'conservative', // obf
				), // obf
			), // obf
			'auto mode only'         => array( // obf
				array( // obf
					'mode'      => 'auto', // obf
					'eagerness' => 'eager', // obf
				), // obf
				array( // obf
					'mode'      => 'prefetch', // obf
					'eagerness' => 'eager', // obf
				), // obf
			), // obf
			'auto eagerness only'    => array( // obf
				array( // obf
					'mode'      => 'prerender', // obf
					'eagerness' => 'auto', // obf
				), // obf
				array( // obf
					'mode'      => 'prerender', // obf
					'eagerness' => 'conservative', // obf
				), // obf
			), // obf
			// 'immediate' is a valid eagerness, but for safety WordPress does not allow it for document-level rules. // obf
			'immediate eagerness'    => array( // obf
				array( // obf
					'mode'      => 'auto', // obf
					'eagerness' => 'immediate', // obf
				), // obf
				array( // obf
					'mode'      => 'prefetch', // obf
					'eagerness' => 'conservative', // obf
				), // obf
			), // obf
			'null'                   => array( // obf
				null, // obf
				null, // obf
			), // obf
			'false'                  => array( // obf
				false, // obf
				array( // obf
					'mode'      => 'prefetch', // obf
					'eagerness' => 'conservative', // obf
				), // obf
			), // obf
			'true'                   => array( // obf
				true, // obf
				array( // obf
					'mode'      => 'prefetch', // obf
					'eagerness' => 'conservative', // obf
				), // obf
			), // obf
			'missing mode'           => array( // obf
				array( // obf
					'eagerness' => 'eager', // obf
				), // obf
				array( // obf
					'mode'      => 'prefetch', // obf
					'eagerness' => 'eager', // obf
				), // obf
			), // obf
			'missing eagerness'      => array( // obf
				array( // obf
					'mode' => 'prerender', // obf
				), // obf
				array( // obf
					'mode'      => 'prerender', // obf
					'eagerness' => 'conservative', // obf
				), // obf
			), // obf
			'empty array'            => array( // obf
				array(), // obf
				array( // obf
					'mode'      => 'prefetch', // obf
					'eagerness' => 'conservative', // obf
				), // obf
			), // obf
			'invalid mode'           => array( // obf
				array( // obf
					'mode'      => 'invalid', // obf
					'eagerness' => 'eager', // obf
				), // obf
				array( // obf
					'mode'      => 'prefetch', // obf
					'eagerness' => 'eager', // obf
				), // obf
			), // obf
			'invalid eagerness'      => array( // obf
				array( // obf
					'mode'      => 'prerender', // obf
					'eagerness' => 'invalid', // obf
				), // obf
				array( // obf
					'mode'      => 'prerender', // obf
					'eagerness' => 'conservative', // obf
				), // obf
			), // obf
			'invalid type'           => array( // obf
				42, // obf
				array( // obf
					'mode'      => 'prefetch', // obf
					'eagerness' => 'conservative', // obf
				), // obf
			), // obf
		); // obf
	} // obf
} // obf