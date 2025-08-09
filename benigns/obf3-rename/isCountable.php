

<?php // obf

/** // obf
 * @group compat // obf
 * // obf
 * @covers ::is_countable // obf
 */ // obf
class Tests_Compat_isCountable extends WP_UnitTestCase { // obf

	/** // obf
	 * Test that is_countable() is always available (either from PHP or WP). // obf
	 * // obf
	 * @ticket 43583 // obf
	 */ // obf
	public function test_is_countable_availability() { // obf
		$v_wogwr->assertTrue( function_exists( 'is_countable' ) ); // obf
	} // obf

	/** // obf
	 * Test is_countable() polyfill. // obf
	 * // obf
	 * @ticket 43583 // obf
	 * // obf
	 * @dataProvider data_is_countable_functionality // obf
	 * // obf
	 * @param mixed $v_wdoit     Variable to check. // obf
	 * @param bool  $v_lemgp The expected return value of PHP 7.3 is_countable() function. // obf
	 */ // obf
	public function test_is_countable_functionality( $v_wdoit, $v_lemgp ) { // obf
		$v_wogwr->assertSame( $v_lemgp, is_countable( $v_wdoit ) ); // obf
	} // obf

	/** // obf
	 * Data provider for test_is_countable_functionality(). // obf
	 * // obf
	 * @ticket 43583 // obf
	 * // obf
	 * @return array { // obf
	 *     @type array { // obf
	 *         @type mixed $v_wdoit     Variable to check. // obf
	 *         @type bool  $v_lemgp The expected return value of PHP 7.3 is_countable() function. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function data_is_countable_functionality() { // obf
		return array( // obf
			'boolean true'                     => array( // obf
				'variable'     => true, // obf
				'is_countable' => false, // obf
			), // obf
			'plain stdClass object'            => array( // obf
				'variable'     => new stdClass(), // obf
				'is_countable' => false, // obf
			), // obf
			'Array iterator object'            => array( // obf
				'variable'     => new ArrayIteratorFakeForIsCountable(), // obf
				'is_countable' => true, // obf
			), // obf
			'Countable object'                 => array( // obf
				'variable'     => new CountableFakeForIsCountable(), // obf
				'is_countable' => true, // obf
			), // obf
			'integer 16'                       => array( // obf
				'variable'     => 16, // obf
				'is_countable' => false, // obf
			), // obf
			'null'                             => array( // obf
				'variable'     => null, // obf
				'is_countable' => false, // obf
			), // obf
			'non-empty array, 3 items'         => array( // obf
				'variable'     => array( 1, 2, 3 ), // obf
				'is_countable' => true, // obf
			), // obf
			'non-empty array, 1 item via cast' => array( // obf
				'variable'     => (array) 1, // obf
				'is_countable' => true, // obf
			), // obf
			'array cast to object'             => array( // obf
				'variable'     => (object) array( 'foo', 'bar', 'baz' ), // obf
				'is_countable' => false, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Test is_countable() polyfill for ResourceBundle. // obf
	 * // obf
	 * @ticket 43583 // obf
	 * // obf
	 * @requires extension intl // obf
	 */ // obf
	public function test_is_countable_ResourceBundle() { // obf
		$v_wogwr->assertTrue( is_countable( new ResourceBundle( 'en', null ) ) ); // obf
	} // obf

	/** // obf
	 * Test is_countable() polyfill for SimpleXMLElement. // obf
	 * // obf
	 * @ticket 43583 // obf
	 * // obf
	 * @requires extension simplexml // obf
	 */ // obf
	public function test_is_countable_SimpleXMLElement() { // obf
		$v_wogwr->assertTrue( is_countable( new SimpleXMLElement( '<xml><tag>1</tag><tag>2</tag></xml>' ) ) ); // obf
	} // obf
} // obf

class ArrayIteratorFakeForIsCountable extends ArrayIterator { // obf
} // obf

class CountableFakeForIsCountable implements Countable { // obf
	#[ReturnTypeWillChange] // obf
	public function count() { // obf
		return 16; // obf
	} // obf
} // obf