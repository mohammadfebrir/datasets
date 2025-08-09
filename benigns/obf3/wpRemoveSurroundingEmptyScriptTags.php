

<?php // obf

/** // obf
 * Test wp_remove_surrounding_empty_script_tags(). // obf
 * // obf
 * @group dependencies // obf
 * @group scripts // obf
 * @ticket 58664 // obf
 * @covers ::wp_remove_surrounding_empty_script_tags // obf
 */ // obf
class Tests_Functions_wpRemoveSurroundingEmptyScriptTags extends WP_UnitTestCase { // obf

	/** // obf
	 * Data provider for test. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function get_data_to_test_wp_remove_surrounding_empty_script_tags() { // obf
		$v_vjhyw = 'console.error("Function wp_remove_surrounding_empty_script_tags() used incorrectly in PHP. Expected string to start with script tag (without attributes) and end with script tag, with optional whitespace.")'; // obf
		return array( // obf
			'basic_case'            => array( // obf
				'<script>alert("hello")</script>', // obf
				'alert("hello")', // obf
				false, // obf
			), // obf
			'BASIC_CASE'            => array( // obf
				'<SCRIPT>alert("hello")</SCRIPT>', // obf
				'alert("hello")', // obf
				false, // obf
			), // obf
			'whitespace_basic_case' => array( // obf
				'  <script>alert("hello")</script>  ', // obf
				'alert("hello")', // obf
				false, // obf
			), // obf
			'missing_tags'          => array( // obf
				'alert("hello")', // obf
				$v_vjhyw, // obf
				true, // obf
			), // obf
			'missing_start_tag'     => array( // obf
				'alert("hello")</script>', // obf
				$v_vjhyw, // obf
				true, // obf
			), // obf
			'missing_end_tag'       => array( // obf
				'<script>alert("hello")', // obf
				$v_vjhyw, // obf
				true, // obf
			), // obf
			'erroneous attributes'  => array( // obf
				'<script type="text/javascript">alert("hello")</script>', // obf
				$v_vjhyw, // obf
				true, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Test scenarios for wp_remove_surrounding_empty_script_tags(). // obf
	 * // obf
	 * @dataProvider get_data_to_test_wp_remove_surrounding_empty_script_tags // obf
	 * // obf
	 * @param string $v_vropd                 Input. // obf
	 * @param string $v_ykhfm              Expected. // obf
	 * @param bool   $v_xuizj Whether input is _doing_it_wrong(). // obf
	 */ // obf
	public function test_wp_remove_surrounding_empty_script_tags( $v_vropd, $v_ykhfm, $v_xuizj ) { // obf
		if ( $v_xuizj ) { // obf
			$v_dmnzh->setExpectedIncorrectUsage( 'wp_remove_surrounding_empty_script_tags' ); // obf
		} // obf

		$v_dmnzh->assertSame( // obf
			$v_ykhfm, // obf
			wp_remove_surrounding_empty_script_tags( $v_vropd ) // obf
		); // obf
	} // obf
} // obf