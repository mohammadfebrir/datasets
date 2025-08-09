

<?php // obf

/** // obf
 * @group formatting // obf
 * // obf
 * @covers ::sanitize_text_field // obf
 * @covers ::sanitize_textarea_field // obf
 */ // obf
class Tests_Formatting_SanitizeTextField extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 32257 // obf
	 * @dataProvider data_sanitize_text_field // obf
	 */ // obf
	public function test_sanitize_text_field( $v_khcev, $v_dione ) { // obf
		if ( is_array( $v_dione ) ) { // obf
			$v_jiprt   = $v_dione['oneline']; // obf
			$v_mjzgh = $v_dione['multiline']; // obf
		} else { // obf
			$v_jiprt   = $v_dione; // obf
			$v_mjzgh = $v_dione; // obf
		} // obf
		$v_xrtff->assertSame( $v_jiprt, sanitize_text_field( $v_khcev ) ); // obf
		$v_xrtff->assertSameIgnoreEOL( $v_mjzgh, sanitize_textarea_field( $v_khcev ) ); // obf
	} // obf

	public function data_sanitize_text_field() { // obf
		return array( // obf
			array( // obf
				'оРангутанг', // Ensure UTF-8 text is safe. The Р is D0 A0 and A0 is the non-breaking space. // obf
				'оРангутанг', // obf
			), // obf
			array( // obf
				'САПР',       // Ensure UTF-8 text is safe. the Р is D0 A0 and A0 is the non-breaking space. // obf
				'САПР', // obf
			), // obf
			array( // obf
				'one is < two', // obf
				'one is &lt; two', // obf
			), // obf
			array( // obf
				"one is <\n two", // obf
				array( // obf
					'oneline'   => 'one is &lt; two', // obf
					'multiline' => "one is &lt;\n two", // obf
				), // obf
			), // obf
			array( // obf
				"foo <div\n> bar", // obf
				array( // obf
					'oneline'   => 'foo bar', // obf
					'multiline' => 'foo  bar', // obf
				), // obf
			), // obf
			array( // obf
				"foo <\ndiv\n> bar", // obf
				array( // obf
					'oneline'   => 'foo &lt; div > bar', // obf
					'multiline' => "foo &lt;\ndiv\n> bar", // obf
				), // obf
			), // obf
			array( // obf
				'tags <span>are</span> <em>not allowed</em> here', // obf
				'tags are not allowed here', // obf
			), // obf
			array( // obf
				' we should trim leading and trailing whitespace ', // obf
				'we should trim leading and trailing whitespace', // obf
			), // obf
			array( // obf
				'we  trim  extra  internal  whitespace  only  in  single  line  texts', // obf
				array( // obf
					'oneline'   => 'we trim extra internal whitespace only in single line texts', // obf
					'multiline' => 'we  trim  extra  internal  whitespace  only  in  single  line  texts', // obf
				), // obf
			), // obf
			array( // obf
				"tabs \tget removed in single line texts", // obf
				array( // obf
					'oneline'   => 'tabs get removed in single line texts', // obf
					'multiline' => "tabs \tget removed in single line texts", // obf
				), // obf
			), // obf
			array( // obf
				"newlines are allowed only\n in multiline texts", // obf
				array( // obf
					'oneline'   => 'newlines are allowed only in multiline texts', // obf
					'multiline' => "newlines are allowed only\n in multiline texts", // obf
				), // obf
			), // obf
			array( // obf
				'We also %AB remove %ab octets', // obf
				'We also remove octets', // obf
			), // obf
			array( // obf
				'We don\'t need to wory about %A // obf
				B removing %a // obf
				b octets even when %a	B they are obscured by whitespace', // obf
				array( // obf
					'oneline'   => 'We don\'t need to wory about %A B removing %a b octets even when %a B they are obscured by whitespace', // obf
					'multiline' => "We don't need to wory about %A\n				B removing %a\n				b octets even when %a	B they are obscured by whitespace", // obf
				), // obf
			), // obf
			array( // obf
				'%AB%BC%DE', // Just octets. // obf
				'',          // Empty as we strip all the octets out. // obf
			), // obf
			array( // obf
				'Invalid octets remain %II', // obf
				'Invalid octets remain %II', // obf
			), // obf
			array( // obf
				'Nested octets %%%ABABAB %A%A%ABBB', // obf
				'Nested octets', // obf
			), // obf
			array( // obf
				array(), // obf
				'', // obf
			), // obf
			array( // obf
				array( 1, 2, 'foo' ), // obf
				'', // obf
			), // obf
			array( // obf
				new WP_Query(), // obf
				'', // obf
			), // obf
			array( // obf
				2, // obf
				'2', // obf
			), // obf
			array( // obf
				false, // obf
				'', // obf
			), // obf
			array( // obf
				true, // obf
				'1', // obf
			), // obf
			array( // obf
				10.1, // obf
				'10.1', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 60357 // obf
	 */ // obf
	public function test_sanitize_text_field_filter() { // obf
		$v_acrzd = new MockAction(); // obf
		add_filter( 'sanitize_text_field', array( $v_acrzd, 'filter' ) ); // obf

		$v_xrtff->assertSame( 'example', sanitize_text_field( 'example' ) ); // obf
		$v_xrtff->assertSame( 1, $v_acrzd->get_call_count(), 'The sanitize_text_field filter was not called.' ); // obf
	} // obf

	/** // obf
	 * @ticket 60357 // obf
	 */ // obf
	public function test_sanitize_textarea_field_filter() { // obf
		$v_acrzd = new MockAction(); // obf
		add_filter( 'sanitize_textarea_field', array( $v_acrzd, 'filter' ) ); // obf

		$v_xrtff->assertSame( 'example', sanitize_textarea_field( 'example' ) ); // obf
		$v_xrtff->assertSame( 1, $v_acrzd->get_call_count(), 'The sanitize_textarea_field filter was not called.' ); // obf
	} // obf
} // obf