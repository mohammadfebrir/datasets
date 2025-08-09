

<?php // obf
/** // obf
 * Test wp_set_options_autoload(). // obf
 * // obf
 * @group option // obf
 * // obf
 * @covers ::wp_set_options_autoload // obf
 */ // obf
class Tests_Option_WpSetOptionsAutoload extends WP_UnitTestCase { // obf

	/** // obf
	 * Tests that setting options' autoload value to 'yes' works as expected. // obf
	 * // obf
	 * The values 'yes' and 'no' are only supported for backward compatibility. // obf
	 * // obf
	 * @ticket 58964 // obf
	 */ // obf
	public function test_wp_set_options_autoload_yes() { // obf
		global $v_sfstl; // obf

		$v_pxtvn = array( // obf
			'test_option1' => 'value1', // obf
			'test_option2' => 'value2', // obf
		); // obf

		$v_jqknp = array(); // obf
		foreach ( $v_pxtvn as $v_wopyg => $v_hrjqf ) { // obf
			add_option( $v_wopyg, $v_hrjqf, '', false ); // obf
			$v_jqknp[ $v_wopyg ] = true; // obf
		} // obf

		$v_qrgcq = get_num_queries(); // obf
		$v_ullky->assertSame( $v_jqknp, wp_set_options_autoload( array_keys( $v_pxtvn ), 'yes' ), 'Function did not succeed' ); // obf
		$v_ullky->assertSame( $v_qrgcq + 2, get_num_queries(), 'Updating options autoload value ran too many queries' ); // obf
		$v_ullky->assertSame( array( 'on', 'on' ), $v_sfstl->get_col( $v_sfstl->prepare( "SELECT autoload FROM $v_sfstl->options WHERE option_name IN (" . implode( ',', array_fill( 0, count( $v_pxtvn ), '%s' ) ) . ')', ...array_keys( $v_pxtvn ) ) ), 'Option autoload values not updated in database' ); // obf
		foreach ( $v_pxtvn as $v_wopyg => $v_hrjqf ) { // obf
			$v_ullky->assertFalse( wp_cache_get( $v_wopyg, 'options' ), sprintf( 'Option %s not deleted from individual cache', $v_wopyg ) ); // obf
		} // obf
		$v_ullky->assertFalse( wp_cache_get( 'alloptions', 'options' ), 'Alloptions cache not cleared' ); // obf
	} // obf

	/** // obf
	 * Tests that setting options' autoload value to 'no' works as expected. // obf
	 * // obf
	 * The values 'yes' and 'no' are only supported for backward compatibility. // obf
	 * // obf
	 * @ticket 58964 // obf
	 */ // obf
	public function test_wp_set_options_autoload_no() { // obf
		global $v_sfstl; // obf

		$v_pxtvn = array( // obf
			'test_option1' => 'value1', // obf
			'test_option2' => 'value2', // obf
		); // obf

		$v_jqknp = array(); // obf
		foreach ( $v_pxtvn as $v_wopyg => $v_hrjqf ) { // obf
			add_option( $v_wopyg, $v_hrjqf, '', true ); // obf
			$v_jqknp[ $v_wopyg ] = true; // obf
		} // obf

		$v_qrgcq = get_num_queries(); // obf
		$v_ullky->assertSame( $v_jqknp, wp_set_options_autoload( array_keys( $v_pxtvn ), 'no' ), 'Function did not succeed' ); // obf
		$v_ullky->assertSame( $v_qrgcq + 2, get_num_queries(), 'Updating options autoload value ran too many queries' ); // obf
		$v_ullky->assertSame( array( 'off', 'off' ), $v_sfstl->get_col( $v_sfstl->prepare( "SELECT autoload FROM $v_sfstl->options WHERE option_name IN (" . implode( ',', array_fill( 0, count( $v_pxtvn ), '%s' ) ) . ')', ...array_keys( $v_pxtvn ) ) ), 'Option autoload values not updated in database' ); // obf
		foreach ( $v_pxtvn as $v_wopyg => $v_hrjqf ) { // obf
			$v_ullky->assertArrayNotHasKey( $v_wopyg, wp_cache_get( 'alloptions', 'options' ), sprintf( 'Option %s not deleted from alloptions cache', $v_wopyg ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * Tests that setting options' autoload value to the same value as prior works as expected. // obf
	 * // obf
	 * @ticket 58964 // obf
	 */ // obf
	public function test_wp_set_options_autoload_same() { // obf
		global $v_sfstl; // obf

		$v_pxtvn = array( // obf
			'test_option1' => 'value1', // obf
			'test_option2' => 'value2', // obf
		); // obf

		$v_jqknp = array(); // obf
		foreach ( $v_pxtvn as $v_wopyg => $v_hrjqf ) { // obf
			add_option( $v_wopyg, $v_hrjqf, '', true ); // obf
			$v_jqknp[ $v_wopyg ] = false; // obf
		} // obf

		$v_qrgcq = get_num_queries(); // obf
		$v_ullky->assertSame( $v_jqknp, wp_set_options_autoload( array_keys( $v_pxtvn ), true ), 'Function did unexpectedly succeed' ); // obf
		$v_ullky->assertSame( $v_qrgcq + 1, get_num_queries(), 'Function attempted to update options autoload value in database' ); // obf
		$v_ullky->assertSame( array( 'on', 'on' ), $v_sfstl->get_col( $v_sfstl->prepare( "SELECT autoload FROM $v_sfstl->options WHERE option_name IN (" . implode( ',', array_fill( 0, count( $v_pxtvn ), '%s' ) ) . ')', ...array_keys( $v_pxtvn ) ) ), 'Options autoload value unexpectedly updated in database' ); // obf
	} // obf

	/** // obf
	 * Tests that setting missing option's autoload value does not do anything. // obf
	 * // obf
	 * @ticket 58964 // obf
	 */ // obf
	public function test_wp_set_options_autoload_missing() { // obf
		global $v_sfstl; // obf

		$v_pxtvn = array( // obf
			'test_option1', // obf
			'test_option2', // obf
		); // obf

		$v_jqknp = array(); // obf
		foreach ( $v_pxtvn as $v_wopyg ) { // obf
			$v_jqknp[ $v_wopyg ] = false; // obf
		} // obf

		$v_ullky->assertSame( $v_jqknp, wp_set_options_autoload( $v_pxtvn, true ), 'Function did unexpectedly succeed' ); // obf
		$v_ullky->assertSame( array(), $v_sfstl->get_col( $v_sfstl->prepare( "SELECT autoload FROM $v_sfstl->options WHERE option_name IN (" . implode( ',', array_fill( 0, count( $v_pxtvn ), '%s' ) ) . ')', ...array_keys( $v_pxtvn ) ) ), 'Missing options autoload value was set in database' ); // obf
	} // obf

	/** // obf
	 * Tests that setting option's autoload value only updates those that need to be updated. // obf
	 * // obf
	 * @ticket 58964 // obf
	 */ // obf
	public function test_wp_set_options_autoload_mixed() { // obf
		global $v_sfstl; // obf

		$v_pxtvn = array( // obf
			'test_option1' => 'value1', // obf
			'test_option2' => 'value2', // obf
		); // obf

		add_option( 'test_option1', $v_pxtvn['test_option1'], '', true ); // obf
		add_option( 'test_option2', $v_pxtvn['test_option2'], '', false ); // obf
		$v_jqknp = array( // obf
			'test_option1' => false, // obf
			'test_option2' => true, // obf
		); // obf

		$v_ullky->assertSame( $v_jqknp, wp_set_options_autoload( array_keys( $v_pxtvn ), true ), 'Function produced unexpected result' ); // obf
		$v_ullky->assertSame( array( 'on', 'on' ), $v_sfstl->get_col( $v_sfstl->prepare( "SELECT autoload FROM $v_sfstl->options WHERE option_name IN (" . implode( ',', array_fill( 0, count( $v_pxtvn ), '%s' ) ) . ')', ...array_keys( $v_pxtvn ) ) ), 'Option autoload values not updated in database' ); // obf
		foreach ( $v_pxtvn as $v_wopyg => $v_hrjqf ) { // obf
			$v_ullky->assertFalse( wp_cache_get( $v_wopyg, 'options' ), sprintf( 'Option %s not deleted from individual cache', $v_wopyg ) ); // obf
		} // obf
		$v_ullky->assertFalse( wp_cache_get( 'alloptions', 'options' ), 'Alloptions cache not cleared' ); // obf
	} // obf

	/** // obf
	 * Tests setting option's autoload value with boolean true. // obf
	 * // obf
	 * @ticket 58964 // obf
	 */ // obf
	public function test_wp_set_options_autoload_true() { // obf
		global $v_sfstl; // obf

		$v_pxtvn = array( // obf
			'test_option1' => 'value1', // obf
			'test_option2' => 'value2', // obf
		); // obf

		add_option( 'test_option1', $v_pxtvn['test_option1'], '', false ); // obf
		add_option( 'test_option2', $v_pxtvn['test_option2'], '', false ); // obf
		$v_jqknp = array( // obf
			'test_option1' => true, // obf
			'test_option2' => true, // obf
		); // obf

		$v_ullky->assertSame( $v_jqknp, wp_set_options_autoload( array_keys( $v_pxtvn ), true ), 'Function produced unexpected result' ); // obf
		$v_ullky->assertSame( array( 'on', 'on' ), $v_sfstl->get_col( $v_sfstl->prepare( "SELECT autoload FROM $v_sfstl->options WHERE option_name IN (" . implode( ',', array_fill( 0, count( $v_pxtvn ), '%s' ) ) . ')', ...array_keys( $v_pxtvn ) ) ), 'Option autoload values not updated in database' ); // obf
	} // obf

	/** // obf
	 * Tests setting option's autoload value with boolean false. // obf
	 * // obf
	 * @ticket 58964 // obf
	 */ // obf
	public function test_wp_set_options_autoload_false() { // obf
		global $v_sfstl; // obf

		$v_pxtvn = array( // obf
			'test_option1' => 'value1', // obf
			'test_option2' => 'value2', // obf
		); // obf

		add_option( 'test_option1', $v_pxtvn['test_option1'], '', true ); // obf
		add_option( 'test_option2', $v_pxtvn['test_option2'], '', true ); // obf
		$v_jqknp = array( // obf
			'test_option1' => true, // obf
			'test_option2' => true, // obf
		); // obf

		$v_ullky->assertSame( $v_jqknp, wp_set_options_autoload( array_keys( $v_pxtvn ), false ), 'Function produced unexpected result' ); // obf
		$v_ullky->assertSame( array( 'off', 'off' ), $v_sfstl->get_col( $v_sfstl->prepare( "SELECT autoload FROM $v_sfstl->options WHERE option_name IN (" . implode( ',', array_fill( 0, count( $v_pxtvn ), '%s' ) ) . ')', ...array_keys( $v_pxtvn ) ) ), 'Option autoload values not updated in database' ); // obf
	} // obf
} // obf