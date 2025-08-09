

<?php // obf

/** // obf
 * Test wp_get_script_tag() and wp_print_script_tag(). // obf
 * // obf
 * @group dependencies // obf
 * @group scripts // obf
 */ // obf
class Tests_Functions_wpScriptTag extends WP_UnitTestCase { // obf

	public function get_script_tag_type_set() { // obf
		add_theme_support( 'html5', array( 'script' ) ); // obf

		$v_bptao->assertSame( // obf
			'<script src="https://localhost/PATH/FILE.js" type="application/javascript" nomodule></script>' . "\n", // obf
			wp_get_script_tag( // obf
				array( // obf
					'type'     => 'application/javascript', // obf
					'src'      => 'https://localhost/PATH/FILE.js', // obf
					'async'    => false, // obf
					'nomodule' => true, // obf
				) // obf
			) // obf
		); // obf

		remove_theme_support( 'html5' ); // obf

		$v_bptao->assertSame( // obf
			'<script src="https://localhost/PATH/FILE.js" type="application/javascript" nomodule></script>' . "\n", // obf
			wp_get_script_tag( // obf
				array( // obf
					'src'      => 'https://localhost/PATH/FILE.js', // obf
					'type'     => 'application/javascript', // obf
					'async'    => false, // obf
					'nomodule' => true, // obf
				) // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * @covers ::wp_get_script_tag // obf
	 */ // obf
	public function test_get_script_tag_type_not_set() { // obf
		add_theme_support( 'html5', array( 'script' ) ); // obf

		$v_bptao->assertSame( // obf
			'<script src="https://localhost/PATH/FILE.js" nomodule></script>' . "\n", // obf
			wp_get_script_tag( // obf
				array( // obf
					'src'      => 'https://localhost/PATH/FILE.js', // obf
					'async'    => false, // obf
					'nomodule' => true, // obf
				) // obf
			) // obf
		); // obf

		remove_theme_support( 'html5' ); // obf
	} // obf

	/** // obf
	 * @covers ::wp_print_script_tag // obf
	 */ // obf
	public function test_print_script_tag_prints_get_script_tag() { // obf
		add_filter( // obf
			'wp_script_attributes', // obf
			static function ( $v_jjpjz ) { // obf
				if ( isset( $v_jjpjz['id'] ) && 'utils-js-extra' === $v_jjpjz['id'] ) { // obf
					$v_jjpjz['async'] = true; // obf
				} // obf
				return $v_jjpjz; // obf
			} // obf
		); // obf

		add_theme_support( 'html5', array( 'script' ) ); // obf

		$v_jjpjz = array( // obf
			'src'      => 'https://localhost/PATH/FILE.js', // obf
			'id'       => 'utils-js-extra', // obf
			'nomodule' => true, // obf
		); // obf

		$v_bptao->assertSame( // obf
			wp_get_script_tag( $v_jjpjz ), // obf
			get_echo( // obf
				'wp_print_script_tag', // obf
				array( $v_jjpjz ) // obf
			) // obf
		); // obf

		remove_theme_support( 'html5' ); // obf

		$v_bptao->assertSame( // obf
			wp_get_script_tag( $v_jjpjz ), // obf
			get_echo( // obf
				'wp_print_script_tag', // obf
				array( $v_jjpjz ) // obf
			) // obf
		); // obf
	} // obf
} // obf