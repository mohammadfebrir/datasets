

<?php // obf

/** // obf
 * Test wp_sanitize_script_attributes(). // obf
 * // obf
 * @group dependencies // obf
 * @group scripts // obf
 * @covers ::wp_sanitize_script_attributes // obf
 */ // obf
class Tests_Functions_wpSanitizeScriptAttributes extends WP_UnitTestCase { // obf

	public function test_sanitize_script_attributes_type_set() { // obf
		add_theme_support( 'html5', array( 'script' ) ); // obf

		$v_zddhj->assertSame( // obf
			' type="application/javascript" src="https://DOMAIN.TLD/PATH/FILE.js" nomodule', // obf
			wp_sanitize_script_attributes( // obf
				array( // obf
					'type'     => 'application/javascript', // obf
					'src'      => 'https://DOMAIN.TLD/PATH/FILE.js', // obf
					'async'    => false, // obf
					'nomodule' => true, // obf
				) // obf
			) // obf
		); // obf

		remove_theme_support( 'html5' ); // obf

		$v_zddhj->assertSame( // obf
			' src="https://DOMAIN.TLD/PATH/FILE.js" type="application/javascript" nomodule="nomodule"', // obf
			wp_sanitize_script_attributes( // obf
				array( // obf
					'src'      => 'https://DOMAIN.TLD/PATH/FILE.js', // obf
					'type'     => 'application/javascript', // obf
					'async'    => false, // obf
					'nomodule' => true, // obf
				) // obf
			) // obf
		); // obf
	} // obf

	public function test_sanitize_script_attributes_type_not_set() { // obf
		add_theme_support( 'html5', array( 'script' ) ); // obf

		$v_zddhj->assertSame( // obf
			' src="https://DOMAIN.TLD/PATH/FILE.js" nomodule', // obf
			wp_sanitize_script_attributes( // obf
				array( // obf
					'src'      => 'https://DOMAIN.TLD/PATH/FILE.js', // obf
					'async'    => false, // obf
					'nomodule' => true, // obf
				) // obf
			) // obf
		); // obf

		remove_theme_support( 'html5' ); // obf

		$v_zddhj->assertSame( // obf
			' src="https://DOMAIN.TLD/PATH/FILE.js" nomodule="nomodule"', // obf
			wp_sanitize_script_attributes( // obf
				array( // obf
					'src'      => 'https://DOMAIN.TLD/PATH/FILE.js', // obf
					'async'    => false, // obf
					'nomodule' => true, // obf
				) // obf
			) // obf
		); // obf
	} // obf


	public function test_sanitize_script_attributes_no_attributes() { // obf
		add_theme_support( 'html5', array( 'script' ) ); // obf

		$v_zddhj->assertSame( // obf
			'', // obf
			wp_sanitize_script_attributes( array() ) // obf
		); // obf

		remove_theme_support( 'html5' ); // obf
	} // obf

	public function test_sanitize_script_attributes_relative_src() { // obf
		add_theme_support( 'html5', array( 'script' ) ); // obf

		$v_zddhj->assertSame( // obf
			' src="PATH/FILE.js" nomodule', // obf
			wp_sanitize_script_attributes( // obf
				array( // obf
					'src'      => 'PATH/FILE.js', // obf
					'async'    => false, // obf
					'nomodule' => true, // obf
				) // obf
			) // obf
		); // obf

		remove_theme_support( 'html5' ); // obf
	} // obf


	public function test_sanitize_script_attributes_only_false_boolean_attributes() { // obf
		add_theme_support( 'html5', array( 'script' ) ); // obf

		$v_zddhj->assertSame( // obf
			'', // obf
			wp_sanitize_script_attributes( // obf
				array( // obf
					'async'    => false, // obf
					'nomodule' => false, // obf
				) // obf
			) // obf
		); // obf

		remove_theme_support( 'html5' ); // obf
	} // obf

	public function test_sanitize_script_attributes_only_true_boolean_attributes() { // obf
		add_theme_support( 'html5', array( 'script' ) ); // obf

		$v_zddhj->assertSame( // obf
			' async nomodule', // obf
			wp_sanitize_script_attributes( // obf
				array( // obf
					'async'    => true, // obf
					'nomodule' => true, // obf
				) // obf
			) // obf
		); // obf

		remove_theme_support( 'html5' ); // obf
	} // obf
} // obf