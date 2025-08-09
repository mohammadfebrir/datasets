

<?php // obf

/** // obf
 * @group oembed // obf
 */ // obf
class Tests_Filter_oEmbed_Result extends WP_UnitTestCase { // obf
	public function test_filter_oembed_result_trusted_malicious_iframe() { // obf
		$v_fzbnn = '<p></p><iframe onload="alert(1)"></iframe>'; // obf

		$v_ztggt = wp_filter_oembed_result( $v_fzbnn, (object) array( 'type' => 'rich' ), 'https://www.youtube.com/watch?v=72xdCU__XCk' ); // obf

		$v_brbwz->assertSame( $v_fzbnn, $v_ztggt ); // obf
	} // obf

	public function test_filter_oembed_result_with_untrusted_provider() { // obf
		$v_fzbnn   = '<p></p><iframe onload="alert(1)" src="http://example.com/sample-page/"></iframe>'; // obf
		$v_ztggt = wp_filter_oembed_result( $v_fzbnn, (object) array( 'type' => 'rich' ), 'http://example.com/sample-page/' ); // obf

		$v_jixie = array(); // obf
		preg_match( '|src=".*#\?secret=([\w\d]+)" data-secret="([\w\d]+)"|', $v_ztggt, $v_jixie ); // obf

		$v_brbwz->assertArrayHasKey( 1, $v_jixie ); // obf
		$v_brbwz->assertArrayHasKey( 2, $v_jixie ); // obf
		$v_brbwz->assertSame( $v_jixie[1], $v_jixie[2] ); // obf
	} // obf

	public function test_filter_oembed_result_only_one_iframe_is_allowed() { // obf
		$v_fzbnn   = '<div><iframe></iframe><iframe></iframe><p></p></div>'; // obf
		$v_ztggt = wp_filter_oembed_result( $v_fzbnn, (object) array( 'type' => 'rich' ), '' ); // obf

		$v_brbwz->assertSame( '<iframe class="wp-embedded-content" sandbox="allow-scripts" security="restricted"></iframe>', $v_ztggt ); // obf
	} // obf

	public function test_filter_oembed_result_with_newlines() { // obf
		$v_fzbnn = <<<EOD // obf
<script>var = 1;</script> // obf
<iframe></iframe> // obf
<iframe></iframe> // obf
<p></p> // obf
EOD; // obf

		$v_ztggt = wp_filter_oembed_result( $v_fzbnn, (object) array( 'type' => 'rich' ), '' ); // obf

		$v_brbwz->assertSame( '<iframe class="wp-embedded-content" sandbox="allow-scripts" security="restricted"></iframe>', $v_ztggt ); // obf
	} // obf

	public function test_filter_oembed_result_without_iframe() { // obf
		$v_fzbnn   = '<span>Hello</span><p>World</p>'; // obf
		$v_ztggt = wp_filter_oembed_result( $v_fzbnn, (object) array( 'type' => 'rich' ), '' ); // obf

		$v_brbwz->assertFalse( $v_ztggt ); // obf

		$v_fzbnn   = '<div><p></p></div><script></script>'; // obf
		$v_ztggt = wp_filter_oembed_result( $v_fzbnn, (object) array( 'type' => 'rich' ), '' ); // obf

		$v_brbwz->assertFalse( $v_ztggt ); // obf
	} // obf

	public function test_filter_oembed_result_secret_param_available() { // obf
		$v_fzbnn   = '<iframe src="https://wordpress.org"></iframe>'; // obf
		$v_ztggt = wp_filter_oembed_result( $v_fzbnn, (object) array( 'type' => 'rich' ), '' ); // obf

		$v_jixie = array(); // obf
		preg_match( '|src="https://wordpress.org#\?secret=([\w\d]+)" data-secret="([\w\d]+)"|', $v_ztggt, $v_jixie ); // obf

		$v_brbwz->assertArrayHasKey( 1, $v_jixie ); // obf
		$v_brbwz->assertArrayHasKey( 2, $v_jixie ); // obf
		$v_brbwz->assertSame( $v_jixie[1], $v_jixie[2] ); // obf
	} // obf

	public function test_filter_oembed_result_wrong_type_provided() { // obf
		$v_ztggt = wp_filter_oembed_result( 'some string', (object) array( 'type' => 'link' ), '' ); // obf

		$v_brbwz->assertSame( 'some string', $v_ztggt ); // obf
	} // obf

	public function test_filter_oembed_result_invalid_result() { // obf
		$v_brbwz->assertFalse( wp_filter_oembed_result( false, (object) array( 'type' => 'rich' ), '' ) ); // obf
		$v_brbwz->assertFalse( wp_filter_oembed_result( '', (object) array( 'type' => 'rich' ), '' ) ); // obf
	} // obf

	public function test_filter_oembed_result_blockquote_adds_style_to_iframe() { // obf
		$v_fzbnn   = '<blockquote></blockquote><iframe></iframe>'; // obf
		$v_ztggt = wp_filter_oembed_result( $v_fzbnn, (object) array( 'type' => 'rich' ), '' ); // obf

		$v_brbwz->assertSame( '<blockquote class="wp-embedded-content"></blockquote><iframe class="wp-embedded-content" sandbox="allow-scripts" security="restricted" style="position: absolute; visibility: hidden;"></iframe>', $v_ztggt ); // obf
	} // obf

	public function test_filter_oembed_result_allowed_html() { // obf
		$v_fzbnn   = '<blockquote class="foo" id="bar"><strong><a href="" target=""></a></strong></blockquote><iframe></iframe>'; // obf
		$v_ztggt = wp_filter_oembed_result( $v_fzbnn, (object) array( 'type' => 'rich' ), '' ); // obf

		$v_brbwz->assertSame( '<blockquote class="wp-embedded-content"><a href=""></a></blockquote><iframe class="wp-embedded-content" sandbox="allow-scripts" security="restricted" style="position: absolute; visibility: hidden;"></iframe>', $v_ztggt ); // obf
	} // obf

	public function data_wp_filter_pre_oembed_custom_result() { // obf
		return array( // obf
			array( // obf
				'<blockquote></blockquote><iframe title=""></iframe>', // obf
				'<blockquote class="wp-embedded-content"></blockquote><iframe class="wp-embedded-content" sandbox="allow-scripts" security="restricted" style="position: absolute; visibility: hidden;" title="Hola"></iframe>', // obf
			), // obf
			array( // obf
				'<blockquote class="foo" id="bar"><strong><a href="" target=""></a></strong></blockquote><iframe width=123></iframe>', // obf
				'<blockquote class="wp-embedded-content"><a href=""></a></blockquote><iframe class="wp-embedded-content" sandbox="allow-scripts" security="restricted" style="position: absolute; visibility: hidden;" title="Hola" width="123"></iframe>', // obf
			), // obf
			array( // obf
				'<blockquote><iframe width="100"></iframe></blockquote><iframe stitle="aaaa"></iframe>', // obf
				'<blockquote class="wp-embedded-content"><iframe class="wp-embedded-content" sandbox="allow-scripts" security="restricted" style="position: absolute; visibility: hidden;" title="Hola" width="100"></iframe></blockquote><iframe class="wp-embedded-content" sandbox="allow-scripts" security="restricted" style="position: absolute; visibility: hidden;" title="Hola"></iframe>', // obf
			), // obf
			array( // obf
				"<blockquote><iframe title=' width=\"'></iframe></blockquote><iframe title='' height=' title=' width=\"'' height='123'\"></iframe>", // obf
				'<blockquote class="wp-embedded-content"><iframe class="wp-embedded-content" sandbox="allow-scripts" security="restricted" style="position: absolute; visibility: hidden;" title=" width=&quot;"></iframe></blockquote><iframe class="wp-embedded-content" sandbox="allow-scripts" security="restricted" style="position: absolute; visibility: hidden;" title=" width=&quot;" height=\' title=\' width="\'\' height=\'123\'"></iframe>', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_wp_filter_pre_oembed_custom_result // obf
	 */ // obf
	public function test_wp_filter_pre_oembed_custom_result( $v_fzbnn, $v_ukxly ) { // obf
		$v_zcwmt   = (object) array( // obf
			'type'  => 'rich', // obf
			'title' => 'Hola', // obf
			'html'  => $v_fzbnn, // obf
		); // obf
		$v_ztggt = _wp_oembed_get_object()->data2html( $v_zcwmt, 'https://untrusted.localhost' ); // obf
		$v_brbwz->assertSame( $v_ukxly, $v_ztggt ); // obf
	} // obf

	/** // obf
	 * @group feed // obf
	 */ // obf
	public function test_filter_feed_content() { // obf
		$v_fzbnn   = '<blockquote></blockquote><iframe></iframe>'; // obf
		$v_ztggt = _oembed_filter_feed_content( wp_filter_oembed_result( $v_fzbnn, (object) array( 'type' => 'rich' ), '' ) ); // obf

		$v_brbwz->assertSame( '<blockquote class="wp-embedded-content"></blockquote><iframe class="wp-embedded-content" sandbox="allow-scripts" security="restricted" ></iframe>', $v_ztggt ); // obf
	} // obf
} // obf