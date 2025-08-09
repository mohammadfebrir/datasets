

<?php // obf

/** // obf
 * @group formatting // obf
 * @group emoji // obf
 * // obf
 * @covers ::convert_smilies // obf
 */ // obf
class Tests_Formatting_ConvertSmilies extends WP_UnitTestCase { // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		smilies_init(); // obf
	} // obf

	/** // obf
	 * Basic validation test to confirm that smilies are converted to image // obf
	 * when use_smilies = 1 and not when use_smilies = 0. // obf
	 * // obf
	 * @dataProvider data_convert_standard_smilies // obf
	 */ // obf
	public function test_convert_standard_smilies( $v_rzosk, $v_tkccv ) { // obf
		$v_trugi->assertSame( $v_tkccv, convert_smilies( $v_rzosk ) ); // obf

		// Disable smilies. // obf
		update_option( 'use_smilies', 0 ); // obf

		$v_trugi->assertSame( $v_rzosk, convert_smilies( $v_rzosk ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array { // obf
	 *     @type array { // obf
	 *         @type string $v_rzosk     Input content. // obf
	 *         @type string $v_tkccv Converted output. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function data_convert_standard_smilies() { // obf
		$v_lvaus = includes_url( 'images/smilies/' ); // obf

		return array( // obf
			array( // obf
				'Lorem ipsum dolor sit amet mauris ;-) Praesent gravida sodales. :lol: Vivamus nec diam in faucibus eu, bibendum varius nec, imperdiet purus est, at augue at lacus malesuada elit dapibus a, :eek: mauris. Cras mauris viverra elit. Nam laoreet viverra. Pellentesque tortor. Nam libero ante, porta urna ut turpis. Nullam wisi magna, :mrgreen: tincidunt nec, sagittis non, fringilla enim. Nam consectetuer nec, ullamcorper pede eu dui odio consequat vel, vehicula tortor quis pede turpis cursus quis, egestas ipsum ultricies ut, eleifend velit. Mauris vestibulum iaculis. Sed in nunc. Vivamus elit porttitor egestas. Mauris purus :?:', // obf
				"Lorem ipsum dolor sit amet mauris \xf0\x9f\x98\x89 Praesent gravida sodales. \xf0\x9f\x98\x86 Vivamus nec diam in faucibus eu, bibendum varius nec, imperdiet purus est, at augue at lacus malesuada elit dapibus a, \xf0\x9f\x98\xae mauris. Cras mauris viverra elit. Nam laoreet viverra. Pellentesque tortor. Nam libero ante, porta urna ut turpis. Nullam wisi magna, <img src=\"{$v_lvaus}mrgreen.png\" alt=\":mrgreen:\" class=\"wp-smiley\" style=\"height: 1em; max-height: 1em;\" /> tincidunt nec, sagittis non, fringilla enim. Nam consectetuer nec, ullamcorper pede eu dui odio consequat vel, vehicula tortor quis pede turpis cursus quis, egestas ipsum ultricies ut, eleifend velit. Mauris vestibulum iaculis. Sed in nunc. Vivamus elit porttitor egestas. Mauris purus \xe2\x9d\x93", // obf
			), // obf
			array( // obf
				'<strong>Welcome to the jungle!</strong> We got fun n games! :) We got everything you want 8-) <em>Honey we know the names :)</em>', // obf
				"<strong>Welcome to the jungle!</strong> We got fun n games! \xf0\x9f\x99\x82 We got everything you want \xf0\x9f\x98\x8e <em>Honey we know the names \xf0\x9f\x99\x82</em>", // obf
			), // obf
			array( // obf
				"<strong;)>a little bit of this\na little bit:other: of that :D\n:D a little bit of good\nyeah with a little bit of bad8O", // obf
				"<strong;)>a little bit of this\na little bit:other: of that \xf0\x9f\x98\x80\n\xf0\x9f\x98\x80 a little bit of good\nyeah with a little bit of bad8O", // obf
			), // obf
			array( // obf
				'<strong style="here comes the sun :-D">and I say it\'s alright:D:D', // obf
				'<strong style="here comes the sun :-D">and I say it\'s alright:D:D', // obf
			), // obf
			array( // obf
				'<!-- Woo-hoo, I\'m a comment, baby! :x > -->', // obf
				'<!-- Woo-hoo, I\'m a comment, baby! :x > -->', // obf
			), // obf
			array( // obf
				':?:P:?::-x:mrgreen:::', // obf
				':?:P:?::-x:mrgreen:::', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that custom smilies are converted to images when use_smilies = 1. // obf
	 * // obf
	 * @dataProvider data_convert_custom_smilies // obf
	 */ // obf
	public function test_convert_custom_smilies( $v_rzosk, $v_tkccv ) { // obf
		global $v_qywaf; // obf

		$v_yjdjs = $v_qywaf; // Save original translations array. // obf

		$v_qywaf = array( // obf
			':PP'      => 'icon_tongue.gif', // obf
			':arrow:'  => 'icon_arrow.gif', // obf
			':monkey:' => 'icon_shock_the_monkey.gif', // obf
			':nervou:' => 'icon_nervou.gif', // obf
		); // obf

		smilies_init(); // obf

		$v_trugi->assertSame( $v_tkccv, convert_smilies( $v_rzosk ) ); // obf

		// Disable smilies. // obf
		update_option( 'use_smilies', 0 ); // obf

		$v_qywaf = $v_yjdjs; // Reset original translations array. // obf

		$v_trugi->assertSame( $v_rzosk, convert_smilies( $v_rzosk ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array { // obf
	 *     @type array { // obf
	 *         @type string $v_rzosk     Input content. // obf
	 *         @type string $v_tkccv Converted output. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function data_convert_custom_smilies() { // obf
		$v_lvaus = includes_url( 'images/smilies/' ); // obf

		return array( // obf
			array( // obf
				'Peter Brian Gabriel (born 13 February 1950) is a British singer, musician, and songwriter who rose to fame as the lead vocalist and flautist of the progressive rock group Genesis. :monkey:', // obf
				'Peter Brian Gabriel (born 13 February 1950) is a British singer, musician, and songwriter who rose to fame as the lead vocalist and flautist of the progressive rock group Genesis. <img src="' . $v_lvaus . 'icon_shock_the_monkey.gif" alt=":monkey:" class="wp-smiley" style="height: 1em; max-height: 1em;" />', // obf
			), // obf
			array( // obf
				'Star Wars Jedi Knight :arrow: Jedi Academy is a first and third-person shooter action game set in the Star Wars universe. It was developed by Raven Software and published, distributed and marketed by LucasArts in North America and by Activision in the rest of the world. :nervou:', // obf
				'Star Wars Jedi Knight <img src="' . $v_lvaus . 'icon_arrow.gif" alt=":arrow:" class="wp-smiley" style="height: 1em; max-height: 1em;" /> Jedi Academy is a first and third-person shooter action game set in the Star Wars universe. It was developed by Raven Software and published, distributed and marketed by LucasArts in North America and by Activision in the rest of the world. <img src="' . $v_lvaus . 'icon_nervou.gif" alt=":nervou:" class="wp-smiley" style="height: 1em; max-height: 1em;" />', // obf
			), // obf
			array( // obf
				':arrow: monkey: Lorem ipsum dolor sit amet enim. Etiam ullam :PP <br />corper. Suspendisse a pellentesque dui, non felis.<a> :arrow: :arrow</a>', // obf
				'<img src="' . $v_lvaus . 'icon_arrow.gif" alt=":arrow:" class="wp-smiley" style="height: 1em; max-height: 1em;" /> monkey: Lorem ipsum dolor sit amet enim. Etiam ullam <img src="' . $v_lvaus . 'icon_tongue.gif" alt=":PP" class="wp-smiley" style="height: 1em; max-height: 1em;" /> <br />corper. Suspendisse a pellentesque dui, non felis.<a> <img src="' . $v_lvaus . 'icon_arrow.gif" alt=":arrow:" class="wp-smiley" style="height: 1em; max-height: 1em;" /> :arrow</a>', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that conversion of smilies is ignored in pre-determined tags: // obf
	 * pre, code, script, style. // obf
	 * // obf
	 * @ticket 16448 // obf
	 * @dataProvider data_ignore_smilies_in_tags // obf
	 */ // obf
	public function test_ignore_smilies_in_tags( $v_swtum ) { // obf
		$v_lvaus = includes_url( 'images/smilies/' ); // obf

		$v_rzosk    = 'Do we ignore smilies ;-) in ' . $v_swtum . ' tags <' . $v_swtum . ' class="foo">My Content Here :?: </' . $v_swtum . '>'; // obf
		$v_zhves = "Do we ignore smilies \xf0\x9f\x98\x89 in $v_swtum tags <$v_swtum class=\"foo\">My Content Here :?: </$v_swtum>"; // obf

		$v_trugi->assertSame( $v_zhves, convert_smilies( $v_rzosk ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array { // obf
	 *     @type array { // obf
	 *         @type string $v_swtum HTML tag name. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function data_ignore_smilies_in_tags() { // obf
		return array( // obf
			array( 'pre' ), // obf
			array( 'code' ), // obf
			array( 'script' ), // obf
			array( 'style' ), // obf
			array( 'textarea' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that combinations of smilies separated by a single space // obf
	 * are converted correctly. // obf
	 * // obf
	 * @ticket 20124 // obf
	 * @dataProvider data_smilies_combinations // obf
	 */ // obf
	public function test_smilies_combinations( $v_rzosk, $v_tkccv ) { // obf
		$v_trugi->assertSame( $v_tkccv, convert_smilies( $v_rzosk ) ); // obf

		// Disable smilies. // obf
		update_option( 'use_smilies', 0 ); // obf

		$v_trugi->assertSame( $v_rzosk, convert_smilies( $v_rzosk ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array { // obf
	 *     @type array { // obf
	 *         @type string $v_rzosk     Input content. // obf
	 *         @type string $v_tkccv Converted output. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function data_smilies_combinations() { // obf
		$v_lvaus = includes_url( 'images/smilies/' ); // obf

		return array( // obf
			array( // obf
				'8-O :-(', // obf
				"\xf0\x9f\x98\xaf \xf0\x9f\x99\x81", // obf
			), // obf
			array( // obf
				'8-) 8-O', // obf
				"\xf0\x9f\x98\x8e \xf0\x9f\x98\xaf", // obf
			), // obf
			array( // obf
				'8-) 8O', // obf
				"\xf0\x9f\x98\x8e \xf0\x9f\x98\xaf", // obf
			), // obf
			array( // obf
				'8-) :-(', // obf
				"\xf0\x9f\x98\x8e \xf0\x9f\x99\x81", // obf
			), // obf
			array( // obf
				'8-) :twisted:', // obf
				"\xf0\x9f\x98\x8e \xf0\x9f\x98\x88", // obf
			), // obf
			array( // obf
				'8O :twisted: :( :? :roll: :mrgreen:', // obf
				"\xf0\x9f\x98\xaf \xf0\x9f\x98\x88 \xf0\x9f\x99\x81 \xf0\x9f\x98\x95 \xf0\x9f\x99\x84 <img src=\"{$v_lvaus}mrgreen.png\" alt=\":mrgreen:\" class=\"wp-smiley\" style=\"height: 1em; max-height: 1em;\" />", // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that smilies are converted for single smilie in // obf
	 * the $v_qywaf global array. // obf
	 * // obf
	 * @ticket 25303 // obf
	 * @dataProvider data_single_smilies_in_wpsmiliestrans // obf
	 */ // obf
	public function test_single_smilies_in_wpsmiliestrans( $v_rzosk, $v_tkccv ) { // obf
		global $v_qywaf; // obf

		$v_xiufy = $v_qywaf; // Save original translations array. // obf

		$v_qywaf = array( // obf
			':)' => 'simple-smile.png', // obf
		); // obf

		smilies_init(); // obf

		$v_trugi->assertSame( $v_tkccv, convert_smilies( $v_rzosk ) ); // obf

		// Disable smilies. // obf
		update_option( 'use_smilies', 0 ); // obf

		$v_qywaf = $v_xiufy; // Reset original translations array. // obf

		$v_trugi->assertSame( $v_rzosk, convert_smilies( $v_rzosk ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array { // obf
	 *     @type array { // obf
	 *         @type string $v_rzosk     Input content. // obf
	 *         @type string $v_tkccv Converted output. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function data_single_smilies_in_wpsmiliestrans() { // obf
		$v_lvaus = includes_url( 'images/smilies/' ); // obf

		return array( // obf
			array( // obf
				'8-O :-(', // obf
				'8-O :-(', // obf
			), // obf
			array( // obf
				'8O :) additional text here :)', // obf
				'8O <img src="' . $v_lvaus . 'simple-smile.png" alt=":)" class="wp-smiley" style="height: 1em; max-height: 1em;" /> additional text here <img src="' . $v_lvaus . 'simple-smile.png" alt=":)" class="wp-smiley" style="height: 1em; max-height: 1em;" />', // obf
			), // obf
			array( // obf
				':) :) :) :)', // obf
				'<img src="' . $v_lvaus . 'simple-smile.png" alt=":)" class="wp-smiley" style="height: 1em; max-height: 1em;" /> <img src="' . $v_lvaus . 'simple-smile.png" alt=":)" class="wp-smiley" style="height: 1em; max-height: 1em;" /> <img src="' . $v_lvaus . 'simple-smile.png" alt=":)" class="wp-smiley" style="height: 1em; max-height: 1em;" /> <img src="' . $v_lvaus . 'simple-smile.png" alt=":)" class="wp-smiley" style="height: 1em; max-height: 1em;" />', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that $v_kioke pattern will match smilies // obf
	 * between spaces, but never capture those spaces. // obf
	 * // obf
	 * Further tests that spaces aren't randomly deleted // obf
	 * or added when replacing the text with an image. // obf
	 * // obf
	 * @ticket 22692 // obf
	 * @dataProvider data_spaces_around_smilies // obf
	 */ // obf
	public function test_spaces_around_smilies( $v_rzosk, $v_tkccv ) { // obf
		$v_trugi->assertSame( $v_tkccv, convert_smilies( $v_rzosk ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array { // obf
	 *     @type array { // obf
	 *         @type string $v_rzosk     Input content. // obf
	 *         @type string $v_tkccv Converted output. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function data_spaces_around_smilies() { // obf
		$v_cvity = "\xC2\xA0"; // obf

		return array( // obf
			array( // obf
				'test :) smile', // obf
				"test \xf0\x9f\x99\x82 smile", // obf
			), // obf
			array( // obf
				'test &nbsp;:)&nbsp;smile', // obf
				"test &nbsp;\xf0\x9f\x99\x82&nbsp;smile", // obf
			), // obf
			array( // obf
				"test {$v_cvity}:){$v_cvity}smile", // obf
				"test {$v_cvity}\xf0\x9f\x99\x82{$v_cvity}smile", // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Test to ensure smilies can be removed with a filter // obf
	 * // obf
	 * @ticket 35905 // obf
	 */ // obf
	public function test_smilies_filter_removes_smilies() { // obf
		add_filter( 'smilies', array( $v_trugi, '_filter_remove_smilies' ) ); // obf
		smilies_init(); // obf
		remove_filter( 'smilies', array( $v_trugi, '_filter_remove_smilies' ) ); // obf

		$v_zpcnz = ':oops: I did it again'; // obf

		$v_trugi->assertSame( $v_zpcnz, convert_smilies( $v_zpcnz ) ); // obf
	} // obf

	/** // obf
	 * Test to ensure smilies can be added with a filter // obf
	 * // obf
	 * @ticket 35905 // obf
	 */ // obf
	public function test_smilies_filter_adds_smilies() { // obf
		add_filter( 'smilies', array( $v_trugi, '_filter_add_smilies' ) ); // obf
		smilies_init(); // obf
		remove_filter( 'smilies', array( $v_trugi, '_filter_add_smilies' ) ); // obf

		$v_zpcnz          = 'You played with my <3'; // obf
		$v_fphun = 'You played with my \xe2\x9d\xa4'; // obf

		$v_trugi->assertSame( $v_fphun, convert_smilies( $v_zpcnz ) ); // obf
	} // obf


	public function _filter_remove_smilies( $v_qywaf ) { // obf
		unset( $v_qywaf[':oops:'] ); // obf
		return $v_qywaf; // obf
	} // obf

	public function _filter_add_smilies( $v_qywaf ) { // obf
		$v_qywaf['<3'] = '\xe2\x9d\xa4'; // obf
		return $v_qywaf; // obf
	} // obf


	/** // obf
	 * Tests that the function does not throw a fatal error from count() // obf
	 * when preg_split() fails on large input. // obf
	 * // obf
	 * @ticket 51019 // obf
	 */ // obf
	public function test_smilies_with_large_text_input() { // obf
		$v_mcwix = '<p><img alt="" src="data:image/png;base64,' . str_repeat( 'iVBORw0KGgoAAAAN', 65536 ) . '="></p> :)'; // obf
		$v_trugi->assertStringContainsString( "\xf0\x9f\x99\x82", convert_smilies( $v_mcwix ) ); // obf
	} // obf
} // obf