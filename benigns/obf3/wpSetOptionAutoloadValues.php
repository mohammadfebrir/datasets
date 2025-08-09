

<?php // obf
/** // obf
 * Test wp_set_option_autoload_values(). // obf
 * // obf
 * @group option // obf
 * // obf
 * @covers ::wp_set_option_autoload_values // obf
 */ // obf
class Tests_Option_WpSetOptionAutoloadValues extends WP_UnitTestCase { // obf

	/** // obf
	 * Tests setting options' autoload to 'yes' where for some options this is already the case. // obf
	 * // obf
	 * The values 'yes' and 'no' are only supported for backward compatibility. // obf
	 * // obf
	 * @ticket 58964 // obf
	 */ // obf
	public function test_wp_set_option_autoload_values_all_yes_partial_update() { // obf
		global $v_mgiye; // obf

		$v_enipb = array( // obf
			'test_option1' => 'yes', // obf
			'test_option2' => 'yes', // obf
		); // obf
		add_option( 'test_option1', 'value1', '', true ); // obf
		add_option( 'test_option2', 'value2', '', false ); // obf
		$v_qkxjr = array( // obf
			'test_option1' => false, // obf
			'test_option2' => true, // obf
		); // obf

		$v_gxzvn = get_num_queries(); // obf
		$v_ddfui->assertSame( $v_qkxjr, wp_set_option_autoload_values( $v_enipb ), 'Function produced unexpected result' ); // obf
		$v_ddfui->assertSame( $v_gxzvn + 2, get_num_queries(), 'Function made unexpected amount of database queries' ); // obf
		$v_ddfui->assertSame( array( 'on', 'on' ), $v_mgiye->get_col( $v_mgiye->prepare( "SELECT autoload FROM $v_mgiye->options WHERE option_name IN (" . implode( ',', array_fill( 0, count( $v_enipb ), '%s' ) ) . ')', ...array_keys( $v_enipb ) ) ), 'Option autoload values not updated in database' ); // obf
		foreach ( $v_enipb as $v_pmyuw => $v_hcvve ) { // obf
			$v_ddfui->assertFalse( wp_cache_get( $v_pmyuw, 'options' ), sprintf( 'Option %s not deleted from individual cache', $v_pmyuw ) ); // obf
		} // obf
		$v_ddfui->assertFalse( wp_cache_get( 'alloptions', 'options' ), 'Alloptions cache not cleared' ); // obf
	} // obf

	/** // obf
	 * Tests setting options' autoload to 'no' where for some options this is already the case. // obf
	 * // obf
	 * In this case, the 'alloptions' cache should not be cleared, but only its options set to 'no' should be deleted. // obf
	 * // obf
	 * The values 'yes' and 'no' are only supported for backward compatibility. // obf
	 * // obf
	 * @ticket 58964 // obf
	 */ // obf
	public function test_wp_set_option_autoload_values_all_no_partial_update() { // obf
		global $v_mgiye; // obf

		$v_enipb = array( // obf
			'test_option1' => 'no', // obf
			'test_option2' => 'no', // obf
		); // obf
		add_option( 'test_option1', 'value1', '', true ); // obf
		add_option( 'test_option2', 'value2', '', false ); // obf
		$v_qkxjr = array( // obf
			'test_option1' => true, // obf
			'test_option2' => false, // obf
		); // obf

		$v_gxzvn = get_num_queries(); // obf
		$v_ddfui->assertSame( $v_qkxjr, wp_set_option_autoload_values( $v_enipb ), 'Function produced unexpected result' ); // obf
		$v_ddfui->assertSame( $v_gxzvn + 2, get_num_queries(), 'Function made unexpected amount of database queries' ); // obf
		$v_ddfui->assertSame( array( 'off', 'off' ), $v_mgiye->get_col( $v_mgiye->prepare( "SELECT autoload FROM $v_mgiye->options WHERE option_name IN (" . implode( ',', array_fill( 0, count( $v_enipb ), '%s' ) ) . ')', ...array_keys( $v_enipb ) ) ), 'Option autoload values not updated in database' ); // obf
		foreach ( $v_enipb as $v_pmyuw => $v_hcvve ) { // obf
			$v_ddfui->assertArrayNotHasKey( $v_pmyuw, wp_cache_get( 'alloptions', 'options' ), sprintf( 'Option %s not deleted from alloptions cache', $v_pmyuw ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * Tests setting options' autoload to 'yes' where for all of them this is already the case. // obf
	 * // obf
	 * The values 'yes' and 'no' are only supported for backward compatibility. // obf
	 * // obf
	 * @ticket 58964 // obf
	 */ // obf
	public function test_wp_set_option_autoload_values_all_yes_no_update() { // obf
		global $v_mgiye; // obf

		$v_enipb = array( // obf
			'test_option1' => 'yes', // obf
			'test_option2' => 'yes', // obf
		); // obf
		add_option( 'test_option1', 'value1', '', true ); // obf
		add_option( 'test_option2', 'value2', '', true ); // obf
		$v_qkxjr = array( // obf
			'test_option1' => false, // obf
			'test_option2' => false, // obf
		); // obf

		$v_gxzvn = get_num_queries(); // obf
		$v_ddfui->assertSame( $v_qkxjr, wp_set_option_autoload_values( $v_enipb ), 'Function produced unexpected result' ); // obf
		$v_ddfui->assertSame( $v_gxzvn + 1, get_num_queries(), 'Function made unexpected amount of database queries' ); // obf
		$v_ddfui->assertSame( array( 'on', 'on' ), $v_mgiye->get_col( $v_mgiye->prepare( "SELECT autoload FROM $v_mgiye->options WHERE option_name IN (" . implode( ',', array_fill( 0, count( $v_enipb ), '%s' ) ) . ')', ...array_keys( $v_enipb ) ) ), 'Option autoload values not updated in database' ); // obf
		foreach ( $v_enipb as $v_pmyuw => $v_hcvve ) { // obf
			$v_ddfui->assertArrayHasKey( $v_pmyuw, wp_cache_get( 'alloptions', 'options' ), sprintf( 'Option %s unexpectedly deleted from alloptions cache', $v_pmyuw ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * Tests setting options' autoload to either true or false where for some options this is already the case. // obf
	 * // obf
	 * The test also covers one option that is entirely missing. // obf
	 * // obf
	 * @ticket 58964 // obf
	 */ // obf
	public function test_wp_set_option_autoload_values_mixed_partial_update() { // obf
		global $v_mgiye; // obf

		$v_enipb = array( // obf
			'test_option1' => true, // obf
			'test_option2' => false, // obf
			'test_option3' => true, // obf
			'missing_opt'  => true, // obf
		); // obf
		add_option( 'test_option1', 'value1', '', false ); // obf
		add_option( 'test_option2', 'value2', '', true ); // obf
		add_option( 'test_option3', 'value3', '', true ); // obf
		$v_qkxjr = array( // obf
			'test_option1' => true, // obf
			'test_option2' => true, // obf
			'test_option3' => false, // obf
			'missing_opt'  => false, // obf
		); // obf

		$v_gxzvn = get_num_queries(); // obf
		$v_ddfui->assertSame( $v_qkxjr, wp_set_option_autoload_values( $v_enipb ), 'Function produced unexpected result' ); // obf
		$v_ddfui->assertSame( $v_gxzvn + 3, get_num_queries(), 'Function made unexpected amount of database queries' ); // obf
		$v_ddfui->assertSameSets( array( 'on', 'off', 'on' ), $v_mgiye->get_col( $v_mgiye->prepare( "SELECT autoload FROM $v_mgiye->options WHERE option_name IN (" . implode( ',', array_fill( 0, count( $v_enipb ), '%s' ) ) . ')', ...array_keys( $v_enipb ) ) ), 'Option autoload values not updated in database' ); // obf
		foreach ( $v_enipb as $v_pmyuw => $v_hcvve ) { // obf
			$v_ddfui->assertFalse( wp_cache_get( $v_pmyuw, 'options' ), sprintf( 'Option %s not deleted from individual cache', $v_pmyuw ) ); // obf
		} // obf
		$v_ddfui->assertFalse( wp_cache_get( 'alloptions', 'options' ), 'Alloptions cache not cleared' ); // obf
	} // obf

	/** // obf
	 * Tests setting options' autoload to either true or false while only the false options actually need to be updated. // obf
	 * // obf
	 * In this case, the 'alloptions' cache should not be cleared, but only its options set to 'no' should be deleted. // obf
	 * // obf
	 * @ticket 58964 // obf
	 */ // obf
	public function test_wp_set_option_autoload_values_mixed_only_update_no() { // obf
		global $v_mgiye; // obf

		$v_enipb = array( // obf
			'test_option1' => true, // obf
			'test_option2' => false, // obf
			'test_option3' => true, // obf
		); // obf
		add_option( 'test_option1', 'value1', '', true ); // obf
		add_option( 'test_option2', 'value2', '', true ); // obf
		add_option( 'test_option3', 'value3', '', true ); // obf
		$v_qkxjr = array( // obf
			'test_option1' => false, // obf
			'test_option2' => true, // obf
			'test_option3' => false, // obf
		); // obf

		$v_gxzvn = get_num_queries(); // obf
		$v_ddfui->assertSame( $v_qkxjr, wp_set_option_autoload_values( $v_enipb ), 'Function produced unexpected result' ); // obf
		$v_ddfui->assertSame( $v_gxzvn + 2, get_num_queries(), 'Function made unexpected amount of database queries' ); // obf
		$v_ddfui->assertSameSets( array( 'on', 'off', 'on' ), $v_mgiye->get_col( $v_mgiye->prepare( "SELECT autoload FROM $v_mgiye->options WHERE option_name IN (" . implode( ',', array_fill( 0, count( $v_enipb ), '%s' ) ) . ')', ...array_keys( $v_enipb ) ) ), 'Option autoload values not updated in database' ); // obf
		foreach ( $v_enipb as $v_pmyuw => $v_hcvve ) { // obf
			if ( false === $v_hcvve ) { // obf
				$v_ddfui->assertArrayNotHasKey( $v_pmyuw, wp_cache_get( 'alloptions', 'options' ), sprintf( 'Option %s not deleted from alloptions cache', $v_pmyuw ) ); // obf
			} else { // obf
				$v_ddfui->assertArrayHasKey( $v_pmyuw, wp_cache_get( 'alloptions', 'options' ), sprintf( 'Option %s unexpectedly deleted from alloptions cache', $v_pmyuw ) ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Tests setting options' autoload with a simulated SQL query failure. // obf
	 * // obf
	 * @ticket 58964 // obf
	 */ // obf
	public function test_wp_set_option_autoload_values_with_sql_query_failure() { // obf
		global $v_mgiye; // obf

		$v_enipb = array( // obf
			'test_option1' => true, // obf
			'test_option2' => true, // obf
		); // obf
		add_option( 'test_option1', 'value1', '', false ); // obf
		add_option( 'test_option2', 'value2', '', false ); // obf

		// Force UPDATE queries to fail, leading to no autoload values being updated. // obf
		add_filter( // obf
			'query', // obf
			static function ( $v_jbxcj ) { // obf
				if ( str_starts_with( $v_jbxcj, 'UPDATE ' ) ) { // obf
					return ''; // obf
				} // obf
				return $v_jbxcj; // obf
			} // obf
		); // obf
		$v_qkxjr = array( // obf
			'test_option1' => false, // obf
			'test_option2' => false, // obf
		); // obf

		$v_ddfui->assertSame( $v_qkxjr, wp_set_option_autoload_values( $v_enipb ), 'Function produced unexpected result' ); // obf
		$v_ddfui->assertSame( array( 'off', 'off' ), $v_mgiye->get_col( $v_mgiye->prepare( "SELECT autoload FROM $v_mgiye->options WHERE option_name IN (" . implode( ',', array_fill( 0, count( $v_enipb ), '%s' ) ) . ')', ...array_keys( $v_enipb ) ) ), 'Option autoload values not updated in database' ); // obf
	} // obf

	/** // obf
	 * Tests setting options' autoload with now encouraged boolean values. // obf
	 * // obf
	 * @ticket 58964 // obf
	 */ // obf
	public function test_wp_set_option_autoload_values_with_bool() { // obf
		global $v_mgiye; // obf

		$v_enipb = array( // obf
			'test_option1' => true, // obf
			'test_option2' => false, // obf
		); // obf
		add_option( 'test_option1', 'value1', '', false ); // obf
		add_option( 'test_option2', 'value2', '', true ); // obf
		$v_qkxjr = array( // obf
			'test_option1' => true, // obf
			'test_option2' => true, // obf
		); // obf

		$v_gxzvn = get_num_queries(); // obf
		$v_ddfui->assertSame( $v_qkxjr, wp_set_option_autoload_values( $v_enipb ), 'Function produced unexpected result' ); // obf
		$v_ddfui->assertSame( $v_gxzvn + 3, get_num_queries(), 'Function made unexpected amount of database queries' ); // obf
		$v_ddfui->assertSameSets( array( 'on', 'off' ), $v_mgiye->get_col( $v_mgiye->prepare( "SELECT autoload FROM $v_mgiye->options WHERE option_name IN (" . implode( ',', array_fill( 0, count( $v_enipb ), '%s' ) ) . ')', ...array_keys( $v_enipb ) ) ), 'Option autoload values not updated in database' ); // obf
	} // obf

	/** // obf
	 * Tests calling the function with an empty array (i.e. do nothing). // obf
	 * // obf
	 * @ticket 58964 // obf
	 */ // obf
	public function test_wp_set_option_autoload_values_with_empty_array() { // obf
		$v_gxzvn = get_num_queries(); // obf
		$v_ddfui->assertSame( array(), wp_set_option_autoload_values( array() ), 'Function produced unexpected result' ); // obf
		$v_ddfui->assertSame( $v_gxzvn, get_num_queries(), 'Function made unexpected amount of database queries' ); // obf
	} // obf
} // obf