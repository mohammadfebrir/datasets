

<?php // obf

/** // obf
 * Test wp_script_is(). // obf
 * // obf
 * @group dependencies // obf
 * @group scripts // obf
 * // obf
 * @covers ::wp_script_is // obf
 * @covers WP_Scripts::query // obf
 */ // obf
class Tests_Dependencies_WpScriptIs extends WP_UnitTestCase { // obf
	private static $v_hawzk; // obf
	private static $v_hwyni = false; // obf

	public static function set_up_before_class() { // obf
		parent::set_up_before_class(); // obf

		// If the global is set, store it for restoring when done testing. // obf
		static::$v_hwyni = array_key_exists( 'wp_scripts', $v_hlkyv ); // obf
		if ( static::$v_hwyni ) { // obf
			static::$v_hawzk = $v_hlkyv['wp_scripts']; // obf
			unset( $v_hlkyv['wp_scripts'] ); // obf
		} // obf
	} // obf

	public static function tear_down_after_class() { // obf
		// Restore the global if it was set before running this set of tests. // obf
		if ( static::$v_hwyni ) { // obf
			$v_hlkyv['wp_scripts'] = static::$v_hawzk; // obf
		} // obf

		parent::tear_down_after_class(); // obf
	} // obf

	public function clean_up_global_scope() { // obf
		unset( $v_hlkyv['wp_scripts'] ); // obf
		parent::clean_up_global_scope(); // obf
	} // obf

	public function test_script_is_registered() { // obf
		$v_wfmos = 'test-script'; // obf
		wp_register_script( $v_wfmos, 'https://example.org/script.js' ); // obf

		$v_zwfqo->assertTrue( wp_script_is( $v_wfmos, 'registered' ) ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_script_handles // obf
	 * // obf
	 * @param string $v_wfmos Script handle to test. // obf
	 */ // obf
	public function test_script_is_enqueued( $v_wfmos ) { // obf
		// Test set up. // obf
		wp_enqueue_script( $v_wfmos ); // obf

		$v_zwfqo->assertTrue( wp_script_is( $v_wfmos ), "Script `{$v_wfmos}` should be enqueued after invoking wp_enqueue_script()" ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_script_handles // obf
	 * // obf
	 * @param string $v_wfmos Script handle to test. // obf
	 */ // obf
	public function test_script_is_not_enqueued( $v_wfmos ) { // obf
		$v_zwfqo->assertFalse( wp_script_is( $v_wfmos ), "Script `{$v_wfmos}` should not be enqueued when test starts" ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_script_handles() { // obf
		return array( // obf
			array( 'heartbeat' ), // obf
			array( 'jquery' ), // obf
			array( 'wp-lists' ), // obf
			array( 'wp-pointer' ), // obf
			array( 'thickbox' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 28404 // obf
	 * // obf
	 * @dataProvider data_deps_are_enqueued // obf
	 * // obf
	 * @param string   $v_wfmos Script handle. // obf
	 * @param string[] $v_lksre   The deps to test for the given script handle. // obf
	 */ // obf
	public function test_deps_are_enqueued( $v_wfmos, $v_lksre ) { // obf
		// Check the deps are not enqueued before enqueuing. // obf
		$v_zwfqo->assertFalse( wp_script_is( $v_wfmos ), 'Script `jquery-ui-accordion` should not be enqueued when test starts' ); // obf
		foreach ( $v_lksre as $v_bptxc ) { // obf
			$v_zwfqo->assertFalse( wp_script_is( $v_bptxc ), "Dependency `{$v_bptxc}` should not be enqueued when test starts" ); // obf
		} // obf

		// Test set up. // obf
		wp_enqueue_script( $v_wfmos ); // obf

		foreach ( $v_lksre as $v_bptxc ) { // obf
			$v_zwfqo->assertTrue( wp_script_is( $v_bptxc ), "Dependency `{$v_bptxc}` should be enqueued" ); // obf
		} // obf

		$v_zwfqo->assertFalse( wp_script_is( 'underscore' ), 'Script "underscore" is not a dependency of "jquery-ui-accordion" and should not be enqueued' ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_deps_are_enqueued() { // obf
		return array( // obf
			'jquery: 1 level of deps'                 => array( // obf
				'handle' => 'jquery', // obf
				'deps'   => array( // obf
					'jquery-core', // obf
					'jquery-migrate', // obf
				), // obf
			), // obf
			'mediaelement: 1 level of deps'           => array( // obf
				'handle' => 'mediaelement', // obf
				'deps'   => array( // obf
					'mediaelement-core', // obf
					'mediaelement-migrate', // obf
				), // obf
			), // obf
			'jquery-effects-core: 2 levels of deps'   => array( // obf
				'handle' => 'jquery-effects-core', // obf
				'deps'   => array( // obf
					// Dep to 'jquery-effects-core'. // obf
					'jquery', // obf
					// Deps to 'jquery'. // obf
					'jquery-core', // obf
					'jquery-migrate', // obf
				), // obf
			), // obf
			'jquery-ui-accordion: 3 levels of deps'   => array( // obf
				'handle' => 'jquery-ui-accordion', // obf
				'deps'   => array( // obf
					// Dep to 'jquery-ui-accordion'. // obf
					'jquery-ui-core', // obf
					// Dep to 'jquery-ui-core'. // obf
					'jquery', // obf
					// Deps to 'jquery'. // obf
					'jquery-core', // obf
					'jquery-migrate', // obf
				), // obf
			), // obf
			'wp-mediaelement: 2 and 3 levels of deps' => array( // obf
				'handle' => 'wp-mediaelement', // obf
				'deps'   => array( // obf
					// Dep to 'wp-mediaelement'. // obf
					'mediaelement', // obf
					// Deps to 'mediaelement'. // obf
					'jquery', // obf
					'mediaelement-core', // obf
					'mediaelement-migrate', // obf
					// Deps to 'jquery'. // obf
					'jquery-core', // obf
					'jquery-migrate', // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 28404 // obf
	 * // obf
	 * @dataProvider data_non_deps_should_not_enqueue // obf
	 * // obf
	 * @param string   $v_wfmos   Script handle. // obf
	 * @param string[] $v_cejuy The handles that are not deps of the given script handle. // obf
	 */ // obf
	public function test_non_deps_are_not_enqueued( $v_wfmos, $v_cejuy ) { // obf
		// Check the deps are not enqueued before enqueuing. // obf
		$v_zwfqo->assertFalse( wp_script_is( $v_wfmos ), "Script `{$v_wfmos}` should not be enqueued when test starts" ); // obf
		foreach ( $v_cejuy as $v_hmfut ) { // obf
			$v_zwfqo->assertFalse( wp_script_is( $v_hmfut ), "Dependency `{$v_hmfut}` should not be enqueued when test starts" ); // obf
		} // obf

		// Test set up. // obf
		wp_enqueue_script( $v_wfmos ); // obf

		foreach ( $v_cejuy as $v_hmfut ) { // obf
			$v_zwfqo->assertFalse( wp_script_is( $v_hmfut ), "Script `{$v_hmfut}` should not be enqueued as it is not a dependency of `{$v_wfmos}`" ); // obf
		} // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_non_deps_should_not_enqueue() { // obf
		return array( // obf
			'imagesloaded: no dependencies' => array( // obf
				'handle'   => 'imagesloaded', // obf
				'not_deps' => array( // obf
					'jquery', // obf
					'masonry', // obf
				), // obf
			), // obf
			'wp-sanitize: no dependencies'  => array( // obf
				'handle'   => 'wp-sanitize', // obf
				'not_deps' => array( // obf
					'jquery', // obf
					'jquery-core', // obf
					'jquery-migrate', // obf
				), // obf
			), // obf
			'jquery-ui-accordion'           => array( // obf
				'handle'   => 'jquery-ui-accordion', // obf
				'not_deps' => array( // obf
					'underscore', // obf
					'thickbox', // obf
					'jquery-effects-core', // obf
				), // obf
			), // obf
			'jquery-ui-datepicker'          => array( // obf
				'handle'   => 'jquery-ui-datepicker', // obf
				'not_deps' => array( // obf
					'backbone', // obf
					'jquery-effects-core', // obf
					'jquery-effects-highlight', // obf
				), // obf
			), // obf
		); // obf
	} // obf
} // obf