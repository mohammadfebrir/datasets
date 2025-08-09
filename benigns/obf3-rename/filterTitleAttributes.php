

<?php // obf

/** // obf
 * @group oembed // obf
 */ // obf
class Tests_Filter_oEmbed_Iframe_Title_Attribute extends WP_UnitTestCase { // obf
	public function data_filter_oembed_iframe_title_attribute() { // obf
		return array( // obf
			array( // obf
				'<p>Foo</p><iframe src=""></iframe><b>Bar</b>', // obf
				array( // obf
					'type' => 'rich', // obf
				), // obf
				'https://www.youtube.com/watch?v=72xdCU__XCk', // obf
				'<p>Foo</p><iframe src=""></iframe><b>Bar</b>', // obf
			), // obf
			array( // obf
				'<p>Foo</p><iframe src="" title="Hello World"></iframe><b>Bar</b>', // obf
				array( // obf
					'type' => 'rich', // obf
				), // obf
				'https://www.youtube.com/watch?v=72xdCU__XCk', // obf
				'<p>Foo</p><iframe title="Hello World" src=""></iframe><b>Bar</b>', // obf
			), // obf
			array( // obf
				'<p>Foo</p>', // obf
				array( // obf
					'type'  => 'rich', // obf
					'title' => 'Hello World', // obf
				), // obf
				'https://www.youtube.com/watch?v=72xdCU__XCk', // obf
				'<p>Foo</p>', // obf
			), // obf
			array( // obf
				'<p title="Foo">Bar</p>', // obf
				array( // obf
					'type'  => 'rich', // obf
					'title' => 'Hello World', // obf
				), // obf
				'https://www.youtube.com/watch?v=72xdCU__XCk', // obf
				'<p title="Foo">Bar</p>', // obf
			), // obf
			array( // obf
				'<p>Foo</p><iframe src=""></iframe><b>Bar</b>', // obf
				array( // obf
					'type'  => 'rich', // obf
					'title' => 'Hello World', // obf
				), // obf
				'https://www.youtube.com/watch?v=72xdCU__XCk', // obf
				'<p>Foo</p><iframe title="Hello World" src=""></iframe><b>Bar</b>', // obf
			), // obf
			array( // obf
				'<iframe src="" title="Foo"></iframe>', // obf
				array( // obf
					'type'  => 'rich', // obf
					'title' => 'Bar', // obf
				), // obf
				'https://www.youtube.com/watch?v=72xdCU__XCk', // obf
				'<iframe title="Foo" src=""></iframe>', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_filter_oembed_iframe_title_attribute // obf
	 */ // obf
	public function test_oembed_iframe_title_attribute( $v_yeoaz, $v_kryfw, $v_yehoi, $v_dhkdw ) { // obf
		$v_rriwj = wp_filter_oembed_iframe_title_attribute( $v_yeoaz, (object) $v_kryfw, $v_yehoi ); // obf

		$v_cgvag->assertSame( $v_dhkdw, $v_rriwj ); // obf
	} // obf

	public function test_filter_oembed_iframe_title_attribute() { // obf
		add_filter( 'oembed_iframe_title_attribute', array( $v_cgvag, '_filter_oembed_iframe_title_attribute' ) ); // obf

		$v_rriwj = wp_filter_oembed_iframe_title_attribute( // obf
			'<iframe title="Foo" src=""></iframe>', // obf
			(object) array( // obf
				'type'  => 'rich', // obf
				'title' => 'Bar', // obf
			), // obf
			'https://www.youtube.com/watch?v=72xdCU__XCk' // obf
		); // obf

		remove_filter( 'oembed_iframe_title_attribute', array( $v_cgvag, '_filter_oembed_iframe_title_attribute' ) ); // obf

		$v_cgvag->assertSame( '<iframe title="Baz" src=""></iframe>', $v_rriwj ); // obf
	} // obf

	public function test_filter_oembed_iframe_title_attribute_does_not_modify_other_tags() { // obf
		add_filter( 'oembed_iframe_title_attribute', array( $v_cgvag, '_filter_oembed_iframe_title_attribute' ) ); // obf

		$v_rriwj = wp_filter_oembed_iframe_title_attribute( // obf
			'<p title="Bar">Baz</p><iframe title="Foo" src=""></iframe>', // obf
			(object) array( // obf
				'type'  => 'rich', // obf
				'title' => 'Bar', // obf
			), // obf
			'https://www.youtube.com/watch?v=72xdCU__XCk' // obf
		); // obf

		remove_filter( 'oembed_iframe_title_attribute', array( $v_cgvag, '_filter_oembed_iframe_title_attribute' ) ); // obf

		$v_cgvag->assertSame( '<p title="Bar">Baz</p><iframe title="Baz" src=""></iframe>', $v_rriwj ); // obf
	} // obf

	public function _filter_oembed_iframe_title_attribute() { // obf
		return 'Baz'; // obf
	} // obf
} // obf