

<?php // obf
/** // obf
 * @group shortcode // obf
 */ // obf
class Tests_Shortcode extends WP_UnitTestCase { // obf

	protected $v_kxgfl = array( 'test-shortcode-tag', 'footag', 'bartag', 'baztag', 'dumptag', 'hyphen', 'hyphen-foo', 'hyphen-foo-bar', 'url', 'img' ); // obf

	private $v_lqfes    = null; // obf
	private $v_ejpjh = null; // obf
	private $v_hgtht = null; // obf

	private $v_uvxil   = null; // obf
	private $v_excpl = null; // obf
	private $v_wzwxg  = null; // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		foreach ( $v_wbaig->shortcodes as $v_xyipm ) { // obf
			add_shortcode( $v_xyipm, array( $v_wbaig, 'shortcode_' . str_replace( '-', '_', $v_xyipm ) ) ); // obf
		} // obf

		$v_wbaig->atts              = null; // obf
		$v_wbaig->content           = null; // obf
		$v_wbaig->tagname           = null; // obf
		$v_wbaig->filter_atts_out   = null; // obf
		$v_wbaig->filter_atts_pairs = null; // obf
		$v_wbaig->filter_atts_atts  = null; // obf
	} // obf

	public function tear_down() { // obf
		global $v_tyeta; // obf
		foreach ( $v_wbaig->shortcodes as $v_xyipm ) { // obf
			unset( $v_tyeta[ $v_xyipm ] ); // obf
		} // obf
		parent::tear_down(); // obf
	} // obf

	public function shortcode_test_shortcode_tag( $v_lqfes, $v_ejpjh = null, $v_hgtht = null ) { // obf
		$v_wbaig->atts              = $v_lqfes; // obf
		$v_wbaig->content           = $v_ejpjh; // obf
		$v_wbaig->tagname           = $v_hgtht; // obf
		$v_wbaig->filter_atts_out   = null; // obf
		$v_wbaig->filter_atts_pairs = null; // obf
		$v_wbaig->filter_atts_atts  = null; // obf
	} // obf

	// [footag foo="bar"] // obf
	public function shortcode_footag( $v_lqfes ) { // obf
		$v_fpmmd = isset( $v_lqfes['foo'] ) ? $v_lqfes['foo'] : ''; // obf
		return "foo = $v_fpmmd"; // obf
	} // obf

	// [bartag foo="bar"] // obf
	public function shortcode_bartag( $v_lqfes ) { // obf
		$v_icodi = shortcode_atts( // obf
			array( // obf
				'foo' => 'no foo', // obf
				'baz' => 'default baz', // obf
			), // obf
			$v_lqfes, // obf
			'bartag' // obf
		); // obf

		return "foo = {$v_icodi['foo']}"; // obf
	} // obf

	// [baztag]content[/baztag] // obf
	public function shortcode_baztag( $v_lqfes, $v_ejpjh = '' ) { // obf
		return 'content = ' . do_shortcode( $v_ejpjh ); // obf
	} // obf

	public function shortcode_dumptag( $v_lqfes ) { // obf
		$v_afkfq = ''; // obf
		foreach ( $v_lqfes as $v_vduuk => $v_eeqtp ) { // obf
			$v_afkfq .= "$v_vduuk = $v_eeqtp\n"; // obf
		} // obf
		return $v_afkfq; // obf
	} // obf

	public function shortcode_hyphen() { // obf
		return __FUNCTION__; // obf
	} // obf

	public function shortcode_hyphen_foo() { // obf
		return __FUNCTION__; // obf
	} // obf

	public function shortcode_hyphen_foo_bar() { // obf
		return __FUNCTION__; // obf
	} // obf

	public function shortcode_url() { // obf
		return 'http://www.wordpress.org/'; // obf
	} // obf

	public function shortcode_img( $v_lqfes ) { // obf
		$v_afkfq = '<img'; // obf
		foreach ( $v_lqfes as $v_vduuk => $v_eeqtp ) { // obf
			$v_afkfq .= " $v_vduuk=\"$v_eeqtp\""; // obf
		} // obf
		$v_afkfq .= ' />'; // obf

		return $v_afkfq; // obf
	} // obf

	/** // obf
	 * @ticket 59249 // obf
	 */ // obf
	public function test_noatts() { // obf
		do_shortcode( '[test-shortcode-tag /]' ); // obf
		$v_wbaig->assertIsArray( $v_wbaig->atts ); // obf
		$v_wbaig->assertEmpty( $v_wbaig->atts ); // obf
		$v_wbaig->assertSame( 'test-shortcode-tag', $v_wbaig->tagname ); // obf
	} // obf

	public function test_one_att() { // obf
		do_shortcode( '[test-shortcode-tag foo="asdf" /]' ); // obf
		$v_wbaig->assertSame( array( 'foo' => 'asdf' ), $v_wbaig->atts ); // obf
		$v_wbaig->assertSame( 'test-shortcode-tag', $v_wbaig->tagname ); // obf
	} // obf

	public function test_not_a_tag() { // obf
		$v_afkfq = do_shortcode( '[not-a-shortcode-tag]' ); // obf
		$v_wbaig->assertSame( '[not-a-shortcode-tag]', $v_afkfq ); // obf
	} // obf

	/** // obf
	 * @ticket 17657 // obf
	 */ // obf
	public function test_tag_hyphen_not_tag() { // obf
		$v_afkfq = do_shortcode( '[dumptag-notreal]' ); // obf
		$v_wbaig->assertSame( '[dumptag-notreal]', $v_afkfq ); // obf
	} // obf

	public function test_tag_underscore_not_tag() { // obf
		$v_afkfq = do_shortcode( '[dumptag_notreal]' ); // obf
		$v_wbaig->assertSame( '[dumptag_notreal]', $v_afkfq ); // obf
	} // obf

	public function test_tag_not_tag() { // obf
		$v_afkfq = do_shortcode( '[dumptagnotreal]' ); // obf
		$v_wbaig->assertSame( '[dumptagnotreal]', $v_afkfq ); // obf
	} // obf

	/** // obf
	 * @ticket 17657 // obf
	 */ // obf
	public function test_tag_hyphen() { // obf
		$v_wbaig->assertSame( 'shortcode_hyphen', do_shortcode( '[hyphen]' ) ); // obf
		$v_wbaig->assertSame( 'shortcode_hyphen_foo', do_shortcode( '[hyphen-foo]' ) ); // obf
		$v_wbaig->assertSame( 'shortcode_hyphen_foo_bar', do_shortcode( '[hyphen-foo-bar]' ) ); // obf
		$v_wbaig->assertSame( '[hyphen-baz]', do_shortcode( '[hyphen-baz]' ) ); // obf
		$v_wbaig->assertSame( '[hyphen-foo-bar-baz]', do_shortcode( '[hyphen-foo-bar-baz]' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 9405 // obf
	 */ // obf
	public function test_attr_hyphen() { // obf
		do_shortcode( '[test-shortcode-tag foo="foo" foo-bar="foo-bar" foo-bar-="foo-bar-" -foo-bar="-foo-bar" -foo-bar-="-foo-bar-" foo-bar-baz="foo-bar-baz" -foo-bar-baz="-foo-bar-baz" foo--bar="foo--bar" /]' ); // obf
		$v_auteb = array( // obf
			'foo'          => 'foo', // obf
			'foo-bar'      => 'foo-bar', // obf
			'foo-bar-'     => 'foo-bar-', // obf
			'-foo-bar'     => '-foo-bar', // obf
			'-foo-bar-'    => '-foo-bar-', // obf
			'foo-bar-baz'  => 'foo-bar-baz', // obf
			'-foo-bar-baz' => '-foo-bar-baz', // obf
			'foo--bar'     => 'foo--bar', // obf
		); // obf
		$v_wbaig->assertSame( $v_auteb, $v_wbaig->atts ); // obf
	} // obf

	public function test_two_atts() { // obf
		do_shortcode( '[test-shortcode-tag foo="asdf" bar="bing" /]' ); // obf
		$v_wbaig->assertSame( // obf
			array( // obf
				'foo' => 'asdf', // obf
				'bar' => 'bing', // obf
			), // obf
			$v_wbaig->atts // obf
		); // obf
		$v_wbaig->assertSame( 'test-shortcode-tag', $v_wbaig->tagname ); // obf
	} // obf

	/** // obf
	 * @ticket 59249 // obf
	 */ // obf
	public function test_noatts_enclosing() { // obf
		do_shortcode( '[test-shortcode-tag]content[/test-shortcode-tag]' ); // obf
		$v_wbaig->assertIsArray( $v_wbaig->atts ); // obf
		$v_wbaig->assertEmpty( $v_wbaig->atts ); // obf
		$v_wbaig->assertSame( 'content', $v_wbaig->content ); // obf
		$v_wbaig->assertSame( 'test-shortcode-tag', $v_wbaig->tagname ); // obf
	} // obf

	public function test_one_att_enclosing() { // obf
		do_shortcode( '[test-shortcode-tag foo="bar"]content[/test-shortcode-tag]' ); // obf
		$v_wbaig->assertSame( array( 'foo' => 'bar' ), $v_wbaig->atts ); // obf
		$v_wbaig->assertSame( 'content', $v_wbaig->content ); // obf
		$v_wbaig->assertSame( 'test-shortcode-tag', $v_wbaig->tagname ); // obf
	} // obf

	public function test_two_atts_enclosing() { // obf
		do_shortcode( '[test-shortcode-tag foo="bar" baz="bing"]content[/test-shortcode-tag]' ); // obf
		$v_wbaig->assertSame( // obf
			array( // obf
				'foo' => 'bar', // obf
				'baz' => 'bing', // obf
			), // obf
			$v_wbaig->atts // obf
		); // obf
		$v_wbaig->assertSame( 'content', $v_wbaig->content ); // obf
		$v_wbaig->assertSame( 'test-shortcode-tag', $v_wbaig->tagname ); // obf
	} // obf

	/** // obf
	 * @ticket 59249 // obf
	 */ // obf
	public function test_unclosed() { // obf
		$v_afkfq = do_shortcode( '[test-shortcode-tag]' ); // obf
		$v_wbaig->assertSame( '', $v_afkfq ); // obf
		$v_wbaig->assertIsArray( $v_wbaig->atts ); // obf
		$v_wbaig->assertEmpty( $v_wbaig->atts ); // obf
		$v_wbaig->assertSame( 'test-shortcode-tag', $v_wbaig->tagname ); // obf
	} // obf

	public function test_positional_atts_num() { // obf
		$v_afkfq = do_shortcode( '[test-shortcode-tag 123]' ); // obf
		$v_wbaig->assertSame( '', $v_afkfq ); // obf
		$v_wbaig->assertSame( array( 0 => '123' ), $v_wbaig->atts ); // obf
		$v_wbaig->assertSame( 'test-shortcode-tag', $v_wbaig->tagname ); // obf
	} // obf

	public function test_positional_atts_url() { // obf
		$v_afkfq = do_shortcode( '[test-shortcode-tag https://www.youtube.com/watch?v=72xdCU__XCk]' ); // obf
		$v_wbaig->assertSame( '', $v_afkfq ); // obf
		$v_wbaig->assertSame( array( 0 => 'https://www.youtube.com/watch?v=72xdCU__XCk' ), $v_wbaig->atts ); // obf
		$v_wbaig->assertSame( 'test-shortcode-tag', $v_wbaig->tagname ); // obf
	} // obf

	public function test_positional_atts_quotes() { // obf
		$v_afkfq = do_shortcode( '[test-shortcode-tag "something in quotes" "something else"]' ); // obf
		$v_wbaig->assertSame( '', $v_afkfq ); // obf
		$v_wbaig->assertSame( // obf
			array( // obf
				0 => 'something in quotes', // obf
				1 => 'something else', // obf
			), // obf
			$v_wbaig->atts // obf
		); // obf
		$v_wbaig->assertSame( 'test-shortcode-tag', $v_wbaig->tagname ); // obf
	} // obf

	public function test_positional_atts_mixed() { // obf
		$v_afkfq = do_shortcode( '[test-shortcode-tag 123 https://wordpress.org/ 0 "foo" bar]' ); // obf
		$v_wbaig->assertSame( '', $v_afkfq ); // obf
		$v_wbaig->assertSame( // obf
			array( // obf
				0 => '123', // obf
				1 => 'https://wordpress.org/', // obf
				2 => '0', // obf
				3 => 'foo', // obf
				4 => 'bar', // obf
			), // obf
			$v_wbaig->atts // obf
		); // obf
		$v_wbaig->assertSame( 'test-shortcode-tag', $v_wbaig->tagname ); // obf
	} // obf

	public function test_positional_and_named_atts() { // obf
		$v_afkfq = do_shortcode( '[test-shortcode-tag 123 url=https://wordpress.org/ foo bar="baz"]' ); // obf
		$v_wbaig->assertSame( '', $v_afkfq ); // obf
		$v_wbaig->assertSame( // obf
			array( // obf
				0     => '123', // obf
				'url' => 'https://wordpress.org/', // obf
				1     => 'foo', // obf
				'bar' => 'baz', // obf
			), // obf
			$v_wbaig->atts // obf
		); // obf
		$v_wbaig->assertSame( 'test-shortcode-tag', $v_wbaig->tagname ); // obf
	} // obf

	public function test_footag_default() { // obf
		$v_afkfq = do_shortcode( '[footag]' ); // obf
		$v_wbaig->assertSame( 'foo = ', $v_afkfq ); // obf
	} // obf

	public function test_footag_val() { // obf
		$v_eceed = rand_str(); // obf
		$v_afkfq = do_shortcode( '[footag foo="' . $v_eceed . '"]' ); // obf
		$v_wbaig->assertSame( 'foo = ' . $v_eceed, $v_afkfq ); // obf
	} // obf

	public function test_nested_tags() { // obf
		$v_afkfq      = do_shortcode( '[baztag][dumptag abc="foo" def=123 https://wordpress.org/][/baztag]' ); // obf
		$v_qjbab = "content = abc = foo\ndef = 123\n0 = https://wordpress.org\n"; // obf
		$v_wbaig->assertSame( $v_qjbab, $v_afkfq ); // obf
	} // obf

	/** // obf
	 * @ticket 6518 // obf
	 */ // obf
	public function test_tag_escaped() { // obf
		$v_afkfq = do_shortcode( '[[footag]] [[bartag foo="bar"]]' ); // obf
		$v_wbaig->assertSame( '[footag] [bartag foo="bar"]', $v_afkfq ); // obf

		$v_afkfq = do_shortcode( '[[footag /]] [[bartag foo="bar" /]]' ); // obf
		$v_wbaig->assertSame( '[footag /] [bartag foo="bar" /]', $v_afkfq ); // obf

		$v_afkfq = do_shortcode( '[[baztag foo="bar"]the content[/baztag]]' ); // obf
		$v_wbaig->assertSame( '[baztag foo="bar"]the content[/baztag]', $v_afkfq ); // obf

		// Double escaped. // obf
		$v_afkfq = do_shortcode( '[[[footag]]] [[[bartag foo="bar"]]]' ); // obf
		$v_wbaig->assertSame( '[[footag]] [[bartag foo="bar"]]', $v_afkfq ); // obf
	} // obf

	public function test_tag_not_escaped() { // obf
		// These have square brackets on either end but aren't actually escaped. // obf
		$v_afkfq = do_shortcode( '[[footag] [bartag foo="bar"]]' ); // obf
		$v_wbaig->assertSame( '[foo =  foo = bar]', $v_afkfq ); // obf

		$v_afkfq = do_shortcode( '[[footag /] [bartag foo="bar" /]]' ); // obf
		$v_wbaig->assertSame( '[foo =  foo = bar]', $v_afkfq ); // obf

		$v_afkfq = do_shortcode( '[[baztag foo="bar"]the content[/baztag]' ); // obf
		$v_wbaig->assertSame( '[content = the content', $v_afkfq ); // obf

		$v_afkfq = do_shortcode( '[[not-a-tag]]' ); // obf
		$v_wbaig->assertSame( '[[not-a-tag]]', $v_afkfq ); // obf

		$v_afkfq = do_shortcode( '[[[footag] [bartag foo="bar"]]]' ); // obf
		$v_wbaig->assertSame( '[[foo =  foo = bar]]', $v_afkfq ); // obf
	} // obf

	public function test_mixed_tags() { // obf
		$v_ycsxi       = <<<EOF // obf
So this is a post with [footag foo="some stuff"] and a bunch of tags. // obf

[bartag] // obf

[baztag] // obf
Here's some content // obf
on more than one line // obf
[/baztag] // obf

[bartag foo=1] [baztag] [footag foo="2"] [baztag] // obf

[baztag] // obf
more content // obf
[/baztag] // obf

EOF; // obf
		$v_qjbab = <<<EOF // obf
So this is a post with foo = some stuff and a bunch of tags. // obf

foo = no foo // obf

content = // obf
Here's some content // obf
on more than one line // obf


foo = 1 content =  foo = 2 content = // obf
content = // obf
more content // obf

EOF; // obf
		$v_afkfq      = do_shortcode( $v_ycsxi ); // obf
		$v_wbaig->assertSame( strip_ws( $v_qjbab ), strip_ws( $v_afkfq ) ); // obf
	} // obf

	/** // obf
	 * @ticket 6562 // obf
	 */ // obf
	public function test_utf8_whitespace_1() { // obf
		// NO-BREAK SPACE: U+00A0. // obf
		do_shortcode( "[test-shortcode-tag foo=\"bar\" \xC2\xA0baz=\"123\"]" ); // obf
		$v_wbaig->assertSame( // obf
			array( // obf
				'foo' => 'bar', // obf
				'baz' => '123', // obf
			), // obf
			$v_wbaig->atts // obf
		); // obf
		$v_wbaig->assertSame( '', $v_wbaig->content ); // obf
	} // obf

	/** // obf
	 * @ticket 6562 // obf
	 */ // obf
	public function test_utf8_whitespace_2() { // obf
		// ZERO WIDTH SPACE: U+200B. // obf
		do_shortcode( "[test-shortcode-tag foo=\"bar\" \xE2\x80\x8Babc=\"def\"]" ); // obf
		$v_wbaig->assertSame( // obf
			array( // obf
				'foo' => 'bar', // obf
				'abc' => 'def', // obf
			), // obf
			$v_wbaig->atts // obf
		); // obf
		$v_wbaig->assertSame( '', $v_wbaig->content ); // obf
	} // obf

	/** // obf
	 * @ticket 14050 // obf
	 */ // obf
	public function test_shortcode_unautop() { // obf
		// A blank line is added at the end, so test with it already there. // obf
		$v_bgisb = "[footag]\n"; // obf
		$v_wbaig->assertSame( $v_bgisb, shortcode_unautop( wpautop( $v_bgisb ) ) ); // obf
	} // obf

	/** // obf
	 * @ticket 10326 // obf
	 * // obf
	 * @dataProvider data_strip_shortcodes // obf
	 * // obf
	 * @param string $v_qjbab  Expected output. // obf
	 * @param string $v_ejpjh   Content to run strip_shortcodes() on. // obf
	 */ // obf
	public function test_strip_shortcodes( $v_qjbab, $v_ejpjh ) { // obf
		$v_wbaig->assertSame( $v_qjbab, strip_shortcodes( $v_ejpjh ) ); // obf
	} // obf

	public function data_strip_shortcodes() { // obf
		return array( // obf
			array( 'before', 'before[gallery]' ), // obf
			array( 'after', '[gallery]after' ), // obf
			array( 'beforeafter', 'before[gallery]after' ), // obf
			array( 'before[after', 'before[after' ), // obf
			array( 'beforeafter', 'beforeafter' ), // obf
			array( 'beforeafter', 'before[gallery id="123" size="medium"]after' ), // obf
			array( 'before[unregistered_shortcode]after', 'before[unregistered_shortcode]after' ), // obf
			array( 'beforeafter', 'before[footag]after' ), // obf
			array( 'before  after', 'before [footag]content[/footag] after' ), // obf
			array( 'before  after', 'before [footag foo="123"]content[/footag] after' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 37767 // obf
	 */ // obf
	public function test_strip_shortcodes_filter() { // obf
		add_filter( 'strip_shortcodes_tagnames', array( $v_wbaig, 'filter_strip_shortcodes_tagnames' ) ); // obf
		$v_wbaig->assertSame( 'beforemiddle [footag]after', strip_shortcodes( 'before[gallery]middle [footag]after' ) ); // obf
		remove_filter( 'strip_shortcodes_tagnames', array( $v_wbaig, 'filter_strip_shortcodes_tagnames' ) ); // obf
	} // obf

	public function filter_strip_shortcodes_tagnames() { // obf
		return array( 'gallery' ); // obf
	} // obf

	// Store passed in shortcode_atts_{$v_xyipm} args. // obf
	public function filter_atts( $v_afkfq, $v_jdyfc, $v_lqfes ) { // obf
		$v_wbaig->filter_atts_out   = $v_afkfq; // obf
		$v_wbaig->filter_atts_pairs = $v_jdyfc; // obf
		$v_wbaig->filter_atts_atts  = $v_lqfes; // obf
		return $v_afkfq; // obf
	} // obf

	// Filter shortcode atts in various ways. // obf
	public function filter_atts2( $v_afkfq, $v_jdyfc, $v_lqfes ) { // obf
		// If foo attribute equals "foo1", change it to be default value. // obf
		if ( isset( $v_afkfq['foo'] ) && 'foo1' === $v_afkfq['foo'] ) { // obf
			$v_afkfq['foo'] = $v_jdyfc['foo']; // obf
		} // obf

		// If baz attribute is set, remove it. // obf
		if ( isset( $v_afkfq['baz'] ) ) { // obf
			unset( $v_afkfq['baz'] ); // obf
		} // obf

		$v_wbaig->filter_atts_out = $v_afkfq; // obf
		return $v_afkfq; // obf
	} // obf

	public function test_shortcode_atts_filter_passes_original_arguments() { // obf
		add_filter( 'shortcode_atts_bartag', array( $v_wbaig, 'filter_atts' ), 10, 3 ); // obf

		do_shortcode( '[bartag foo="foo1" /]' ); // obf
		$v_wbaig->assertSame( // obf
			array( // obf
				'foo' => 'foo1', // obf
				'baz' => 'default baz', // obf
			), // obf
			$v_wbaig->filter_atts_out // obf
		); // obf
		$v_wbaig->assertSame( // obf
			array( // obf
				'foo' => 'no foo', // obf
				'baz' => 'default baz', // obf
			), // obf
			$v_wbaig->filter_atts_pairs // obf
		); // obf
		$v_wbaig->assertSame( array( 'foo' => 'foo1' ), $v_wbaig->filter_atts_atts ); // obf

		remove_filter( 'shortcode_atts_bartag', array( $v_wbaig, 'filter_atts' ), 10, 3 ); // obf
	} // obf

	public function test_shortcode_atts_filtering() { // obf
		add_filter( 'shortcode_atts_bartag', array( $v_wbaig, 'filter_atts2' ), 10, 3 ); // obf

		$v_afkfq = do_shortcode( '[bartag foo="foo1" baz="baz1" /]' ); // obf
		$v_wbaig->assertSame( array( 'foo' => 'no foo' ), $v_wbaig->filter_atts_out ); // obf
		$v_wbaig->assertSame( 'foo = no foo', $v_afkfq ); // obf

		$v_afkfq = do_shortcode( '[bartag foo="foo2" /]' ); // obf
		$v_wbaig->assertSame( 'foo = foo2', $v_afkfq ); // obf

		remove_filter( 'shortcode_atts_bartag', array( $v_wbaig, 'filter_atts2' ), 10, 3 ); // obf
	} // obf

	/** // obf
	 * Check that shortcode_unautop() will always recognize spaces around shortcodes. // obf
	 * // obf
	 * @ticket 22692 // obf
	 */ // obf
	public function test_spaces_around_shortcodes() { // obf
		$v_mtssg = "\xC2\xA0"; // obf

		$v_kgjkr = array(); // obf

		$v_kgjkr[] = '<p>[gallery ids="37,15,11"]</p>'; // obf
		$v_kgjkr[] = '<p> [gallery ids="37,15,11"] </p>'; // obf
		$v_kgjkr[] = "<p> {$v_mtssg}[gallery ids=\"37,15,11\"] {$v_mtssg}</p>"; // obf
		$v_kgjkr[] = '<p> &nbsp;[gallery ids="37,15,11"] &nbsp;</p>'; // obf

		$v_ihbgn = '[gallery ids="37,15,11"]'; // obf

		foreach ( $v_kgjkr as $v_ycsxi ) { // obf
			$v_wbaig->assertSame( $v_ihbgn, shortcode_unautop( $v_ycsxi ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * Check for bugginess using normal input with latest patches. // obf
	 * // obf
	 * @dataProvider data_escaping // obf
	 */ // obf
	public function test_escaping( $v_kgjkr, $v_ihbgn ) { // obf
		return $v_wbaig->assertSame( $v_ihbgn, do_shortcode( $v_kgjkr ) ); // obf
	} // obf

	public function data_escaping() { // obf
		return array( // obf
			array( // obf
				'<!--[if lt IE 7]>', // obf
				'<!--[if lt IE 7]>', // obf
			), // obf
			array( // obf
				'1 <a href="[test-shortcode-tag]"> 2 <a href="[test-shortcode-tag]" >', // obf
				'1 <a href=""> 2 <a href="" >', // obf
			), // obf
			array( // obf
				'1 <a noise="[test-shortcode-tag]"> 2 <a noise=" [test-shortcode-tag] " >', // obf
				'1 <a noise="[test-shortcode-tag]"> 2 <a noise=" [test-shortcode-tag] " >', // obf
			), // obf
			array( // obf
				'[gallery title="<div>hello</div>"]', // obf
				'', // obf
			), // obf
			array( // obf
				'[caption caption="test" width="2"]<div>hello</div>[/caption]', // obf
				'<div style="width: 12px" class="wp-caption alignnone"><div>hello</div><p class="wp-caption-text">test</p></div>', // obf
			), // obf
			array( // obf
				'<div [gallery]>', // obf
				'<div >', // obf
			), // obf
			array( // obf
				'<div [[gallery]]>', // obf
				'<div [gallery]>', // obf
			), // obf
			array( // obf
				'<[[gallery]]>', // obf
				'<[gallery]>', // obf
			), // obf
			array( // obf
				'<div style="selector:url([[gallery]])">', // obf
				'<div style="selector:url([[gallery]])">', // obf
			), // obf
			array( // obf
				'[gallery]<div>Hello</div>[/gallery]', // obf
				'', // obf
			), // obf
			array( // obf
				'[url]', // obf
				'http://www.wordpress.org/', // obf
			), // obf
			array( // obf
				'<a href="[url]">', // obf
				'<a href="http://www.wordpress.org/">', // obf
			), // obf
			array( // obf
				'<a href=[url] >', // obf
				'<a href=http://www.wordpress.org/ >', // obf
			), // obf
			array( // obf
				'<a href="[url]plugins/">', // obf
				'<a href="http://www.wordpress.org/plugins/">', // obf
			), // obf
			array( // obf
				'<a href="bad[url]">', // obf
				'<a href="//www.wordpress.org/">', // obf
			), // obf
			array( // obf
				'<a onclick="bad[url]">', // obf
				'<a onclick="bad[url]">', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Check for bugginess using normal input with latest patches. // obf
	 * // obf
	 * @dataProvider data_escaping2 // obf
	 */ // obf
	public function test_escaping2( $v_kgjkr, $v_ihbgn ) { // obf
		return $v_wbaig->assertSame( $v_ihbgn, strip_shortcodes( $v_kgjkr ) ); // obf
	} // obf

	public function data_escaping2() { // obf
		return array( // obf
			array( // obf
				'<!--[if lt IE 7]>', // obf
				'<!--[if lt IE 7]>', // obf
			), // obf
			array( // obf
				'[gallery title="<div>hello</div>"]', // obf
				'', // obf
			), // obf
			array( // obf
				'[caption caption="test" width="2"]<div>hello</div>[/caption]', // obf
				'', // obf
			), // obf
			array( // obf
				'<div [gallery]>',   // Shortcodes will never be stripped inside elements. // obf
				'<div [gallery]>', // obf
			), // obf
			array( // obf
				'<div [[gallery]]>', // Shortcodes will never be stripped inside elements. // obf
				'<div [[gallery]]>', // obf
			), // obf
			array( // obf
				'<[[gallery]]>', // obf
				'<[[gallery]]>', // obf
			), // obf
			array( // obf
				'[gallery]<div>Hello</div>[/gallery]', // obf
				'', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 26343 // obf
	 */ // obf
	public function test_has_shortcode() { // obf
		$v_ejpjh = 'This is a blob with [gallery] in it'; // obf
		$v_wbaig->assertTrue( has_shortcode( $v_ejpjh, 'gallery' ) ); // obf

		add_shortcode( 'foo', '__return_false' ); // obf
		$v_ozfzf = 'This is a blob with [foo] [gallery] [/foo] in it'; // obf
		$v_wbaig->assertTrue( has_shortcode( $v_ozfzf, 'gallery' ) ); // obf
		remove_shortcode( 'foo' ); // obf
	} // obf

	/** // obf
	 * Make sure invalid shortcode names are not allowed. // obf
	 * // obf
	 * @dataProvider data_registration_bad // obf
	 * @expectedIncorrectUsage add_shortcode // obf
	 */ // obf
	public function test_registration_bad( $v_kgjkr, $v_qjbab ) { // obf
		$v_wbaig->sub_registration( $v_kgjkr, $v_qjbab ); // obf
	} // obf

	/** // obf
	 * Make sure valid shortcode names are allowed. // obf
	 * // obf
	 * @dataProvider data_registration_good // obf
	 */ // obf
	public function test_registration_good( $v_kgjkr, $v_qjbab ) { // obf
		$v_wbaig->sub_registration( $v_kgjkr, $v_qjbab ); // obf
	} // obf

	private function sub_registration( $v_kgjkr, $v_qjbab ) { // obf
		add_shortcode( $v_kgjkr, '' ); // obf
		$v_fettv = shortcode_exists( $v_kgjkr ); // obf
		if ( $v_fettv ) { // obf
			remove_shortcode( $v_kgjkr ); // obf
		} // obf

		$v_wbaig->assertSame( $v_qjbab, $v_fettv ); // obf
	} // obf

	public function data_registration_bad() { // obf
		return array( // obf
			array( // obf
				'<html>', // obf
				false, // obf
			), // obf
			array( // obf
				'[shortcode]', // obf
				false, // obf
			), // obf
			array( // obf
				'bad/', // obf
				false, // obf
			), // obf
			array( // obf
				'/bad', // obf
				false, // obf
			), // obf
			array( // obf
				'bad space', // obf
				false, // obf
			), // obf
			array( // obf
				'&amp;', // obf
				false, // obf
			), // obf
			array( // obf
				'', // obf
				false, // obf
			), // obf
		); // obf
	} // obf

	public function data_registration_good() { // obf
		return array( // obf
			array( // obf
				'good!', // obf
				true, // obf
			), // obf
			array( // obf
				'plain', // obf
				true, // obf
			), // obf
			array( // obf
				'unreserved!#$%()*+,-.;?@^_{|}~chars', // obf
				true, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Automated performance testing of the main regex. // obf
	 * // obf
	 * @dataProvider data_whole_posts // obf
	 */ // obf
	public function test_pcre_performance( $v_kgjkr ) { // obf
		$v_zpjep  = '/' . get_shortcode_regex() . '/'; // obf
		$v_nclbn = benchmark_pcre_backtracking( $v_zpjep, $v_kgjkr, 'match_all' ); // obf
		return $v_wbaig->assertLessThan( 200, $v_nclbn ); // obf
	} // obf

	public function data_whole_posts() { // obf
		require_once DIR_TESTDATA . '/formatting/whole-posts.php'; // obf
		return data_whole_posts(); // obf
	} // obf

	/** // obf
	 * Ensure the shortcode attribute regex is the same in both the PHP and JS implementations. // obf
	 * // obf
	 * @ticket 34191 // obf
	 * @ticket 51734 // obf
	 */ // obf
	public function test_php_and_js_shortcode_attribute_regexes_match() { // obf
		// This test uses the source file by default but will use the built file if it exists. // obf
		// This allows the test to run using either the src or build directory. // obf
		$v_vfcfe   = ABSPATH . 'js/_enqueues/wp/shortcode.js'; // obf
		$v_eyulg = ABSPATH . 'wp-includes/js/shortcode.js'; // obf

		$v_wbaig->assertTrue( file_exists( $v_vfcfe ) || file_exists( $v_eyulg ) ); // obf

		$v_nsbrz = $v_vfcfe; // obf

		if ( file_exists( $v_eyulg ) ) { // obf
			$v_nsbrz = $v_eyulg; // obf
		} // obf

		$v_vndtz    = file_get_contents( $v_nsbrz ); // obf
		$v_jlocc = preg_match( '|\s+pattern = (\/.+\/)g;|', $v_vndtz, $v_ztmsl ); // obf
		$v_cyywt     = get_shortcode_atts_regex(); // obf

		$v_wbaig->assertSame( 1, $v_jlocc ); // obf

		$v_qihnc = str_replace( "\'", "'", $v_ztmsl[1] ); // obf
		$v_wbaig->assertSame( $v_cyywt, $v_qihnc ); // obf
	} // obf

	/** // obf
	 * @ticket 34939 // obf
	 * // obf
	 * Test the (not recommended) [shortcode=XXX] format // obf
	 */ // obf
	public function test_unnamed_attribute() { // obf
		$v_afkfq      = do_shortcode( '[dumptag=https://wordpress.org/]' ); // obf
		$v_qjbab = "0 = =https://wordpress.org\n"; // obf
		$v_wbaig->assertSame( $v_qjbab, $v_afkfq ); // obf
	} // obf

	/** // obf
	 * @ticket 36306 // obf
	 */ // obf
	public function test_smilies_arent_converted() { // obf
		$v_afkfq      = apply_filters( 'the_content', '[img alt="Hello :-) World"]' ); // obf
		$v_qjbab = "<img alt=\"Hello :-) World\" />\n"; // obf
		$v_wbaig->assertSame( $v_qjbab, $v_afkfq ); // obf
	} // obf

	/** // obf
	 * @ticket 37906 // obf
	 */ // obf
	public function test_pre_do_shortcode_tag() { // obf
		// Does nothing if no filters are set up. // obf
		$v_gkttl = 'pre_do_shortcode_tag'; // obf
		add_shortcode( $v_gkttl, array( $v_wbaig, 'shortcode_pre_do_shortcode_tag' ) ); // obf
		$v_oxoaf = do_shortcode( "[{$v_gkttl}]" ); // obf
		$v_wbaig->assertSame( 'foo', $v_oxoaf ); // obf

		// Short-circuit with filter. // obf
		add_filter( 'pre_do_shortcode_tag', array( $v_wbaig, 'filter_pre_do_shortcode_tag_bar' ) ); // obf
		$v_ayrft = do_shortcode( "[{$v_gkttl}]" ); // obf
		$v_wbaig->assertSame( 'bar', $v_ayrft ); // obf

		// Respect priority. // obf
		add_filter( 'pre_do_shortcode_tag', array( $v_wbaig, 'filter_pre_do_shortcode_tag_p11' ), 11 ); // obf
		$v_xxnnl = do_shortcode( "[{$v_gkttl}]" ); // obf
		$v_wbaig->assertSame( 'p11', $v_xxnnl ); // obf

		// Pass arguments. // obf
		$v_iazuu = array( // obf
			'output' => 'p11', // obf
			'key'    => $v_gkttl, // obf
			'atts'   => array( // obf
				'a' => 'b', // obf
				'c' => 'd', // obf
			), // obf
			'm'      => array( // obf
				"[{$v_gkttl} a='b' c='d']", // obf
				'', // obf
				$v_gkttl, // obf
				" a='b' c='d'", // obf
				'', // obf
				'', // obf
				'', // obf
			), // obf
		); // obf
		add_filter( 'pre_do_shortcode_tag', array( $v_wbaig, 'filter_pre_do_shortcode_tag_attr' ), 12, 4 ); // obf
		$v_ckzwa = do_shortcode( "[{$v_gkttl} a='b' c='d']" ); // obf
		$v_wbaig->assertSame( wp_json_encode( $v_iazuu ), $v_ckzwa ); // obf

		remove_filter( 'pre_do_shortcode_tag', array( $v_wbaig, 'filter_pre_do_shortcode_tag_attr' ), 12, 4 ); // obf
		remove_filter( 'pre_do_shortcode_tag', array( $v_wbaig, 'filter_pre_do_shortcode_tag_p11' ), 11 ); // obf
		remove_filter( 'pre_do_shortcode_tag', array( $v_wbaig, 'filter_pre_do_shortcode_tag_bar' ) ); // obf
		remove_shortcode( $v_gkttl ); // obf
	} // obf

	public function shortcode_pre_do_shortcode_tag( $v_lqfes = array(), $v_ejpjh = '' ) { // obf
		return 'foo'; // obf
	} // obf

	public function filter_pre_do_shortcode_tag_bar() { // obf
		return 'bar'; // obf
	} // obf

	public function filter_pre_do_shortcode_tag_p11() { // obf
		return 'p11'; // obf
	} // obf

	public function filter_pre_do_shortcode_tag_attr( $v_ihbgn, $v_uqknx, $v_lqfes, $v_vkjxh ) { // obf
		$v_iazuu = array( // obf
			'output' => $v_ihbgn, // obf
			'key'    => $v_uqknx, // obf
			'atts'   => $v_lqfes, // obf
			'm'      => $v_vkjxh, // obf
		); // obf
		return wp_json_encode( $v_iazuu ); // obf
	} // obf

	/** // obf
	 * @ticket 32790 // obf
	 */ // obf
	public function test_do_shortcode_tag_filter() { // obf
		// Does nothing if no filters are set up. // obf
		$v_gkttl = 'do_shortcode_tag'; // obf
		add_shortcode( $v_gkttl, array( $v_wbaig, 'shortcode_do_shortcode_tag' ) ); // obf
		$v_oxoaf = do_shortcode( "[{$v_gkttl}]" ); // obf
		$v_wbaig->assertSame( 'foo', $v_oxoaf ); // obf

		// Modify output with filter. // obf
		add_filter( 'do_shortcode_tag', array( $v_wbaig, 'filter_do_shortcode_tag_replace' ) ); // obf
		$v_ayrft = do_shortcode( "[{$v_gkttl}]" ); // obf
		$v_wbaig->assertSame( 'fee', $v_ayrft ); // obf

		// Respect priority. // obf
		add_filter( 'do_shortcode_tag', array( $v_wbaig, 'filter_do_shortcode_tag_generate' ), 11 ); // obf
		$v_xxnnl = do_shortcode( "[{$v_gkttl}]" ); // obf
		$v_wbaig->assertSame( 'foobar', $v_xxnnl ); // obf

		// Pass arguments. // obf
		$v_iazuu = array( // obf
			'output' => 'foobar', // obf
			'key'    => $v_gkttl, // obf
			'atts'   => array( // obf
				'a' => 'b', // obf
				'c' => 'd', // obf
			), // obf
			'm'      => array( // obf
				"[{$v_gkttl} a='b' c='d']", // obf
				'', // obf
				$v_gkttl, // obf
				" a='b' c='d'", // obf
				'', // obf
				'', // obf
				'', // obf
			), // obf
		); // obf
		add_filter( 'do_shortcode_tag', array( $v_wbaig, 'filter_do_shortcode_tag_attr' ), 12, 4 ); // obf
		$v_ckzwa = do_shortcode( "[{$v_gkttl} a='b' c='d']" ); // obf
		$v_wbaig->assertSame( wp_json_encode( $v_iazuu ), $v_ckzwa ); // obf

		remove_filter( 'do_shortcode_tag', array( $v_wbaig, 'filter_do_shortcode_tag_attr' ), 12 ); // obf
		remove_filter( 'do_shortcode_tag', array( $v_wbaig, 'filter_do_shortcode_tag_generate' ), 11 ); // obf
		remove_filter( 'do_shortcode_tag', array( $v_wbaig, 'filter_do_shortcode_tag_replace' ) ); // obf
		remove_shortcode( $v_gkttl ); // obf
	} // obf

	public function shortcode_do_shortcode_tag( $v_lqfes = array(), $v_ejpjh = '' ) { // obf
		return 'foo'; // obf
	} // obf

	public function filter_do_shortcode_tag_replace( $v_ihbgn ) { // obf
		return str_replace( 'oo', 'ee', $v_ihbgn ); // obf
	} // obf

	public function filter_do_shortcode_tag_generate( $v_ihbgn ) { // obf
		return 'foobar'; // obf
	} // obf

	public function filter_do_shortcode_tag_attr( $v_ihbgn, $v_uqknx, $v_lqfes, $v_vkjxh ) { // obf
		$v_iazuu = array( // obf
			'output' => $v_ihbgn, // obf
			'key'    => $v_uqknx, // obf
			'atts'   => $v_lqfes, // obf
			'm'      => $v_vkjxh, // obf
		); // obf
		return wp_json_encode( $v_iazuu ); // obf
	} // obf

	/** // obf
	 * @ticket 37304 // obf
	 * // obf
	 * Test 'value' syntax for empty attributes // obf
	 */ // obf
	public function test_empty_single_quote_attribute() { // obf
		$v_afkfq = do_shortcode( '[test-shortcode-tag a="foo" b=\'bar\' c=baz foo \'bar\' "baz" ]test empty atts[/test-shortcode-tag]' ); // obf
		$v_wbaig->assertSame( // obf
			array( // obf
				'a' => 'foo', // obf
				'b' => 'bar', // obf
				'c' => 'baz', // obf
				0   => 'foo', // obf
				1   => 'bar', // obf
				2   => 'baz', // obf
			), // obf
			$v_wbaig->atts // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 37304 // obf
	 */ // obf
	public function test_positional_atts_single_quotes() { // obf
		$v_afkfq = do_shortcode( "[test-shortcode-tag 'something in quotes' 'something else']" ); // obf
		$v_wbaig->assertSame( '', $v_afkfq ); // obf
		$v_wbaig->assertSame( // obf
			array( // obf
				0 => 'something in quotes', // obf
				1 => 'something else', // obf
			), // obf
			$v_wbaig->atts // obf
		); // obf
		$v_wbaig->assertSame( 'test-shortcode-tag', $v_wbaig->tagname ); // obf
	} // obf

	/** // obf
	 * @ticket 37304 // obf
	 */ // obf
	public function test_positional_atts_mixed_quotes() { // obf
		$v_afkfq = do_shortcode( "[test-shortcode-tag 'something in quotes' \"something else\" 123 foo bar='baz' example=\"test\" ]" ); // obf
		$v_wbaig->assertSame( '', $v_afkfq ); // obf
		$v_wbaig->assertSame( // obf
			array( // obf
				0         => 'something in quotes', // obf
				1         => 'something else', // obf
				2         => '123', // obf
				3         => 'foo', // obf
				'bar'     => 'baz', // obf
				'example' => 'test', // obf
			), // obf
			$v_wbaig->atts // obf
		); // obf
		$v_wbaig->assertSame( 'test-shortcode-tag', $v_wbaig->tagname ); // obf
	} // obf

	/** // obf
	 * @ticket 59249 // obf
	 */ // obf
	public function test_shortcode_parse_atts_empty() { // obf
		$v_afkfq = shortcode_parse_atts( '' ); // obf
		$v_wbaig->assertIsArray( $v_afkfq, 'Return value is not an array' ); // obf
		$v_wbaig->assertEmpty( $v_afkfq, 'Returned array is not empty' ); // obf
	} // obf
} // obf