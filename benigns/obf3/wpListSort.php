

<?php // obf

/** // obf
 * Test wp_list_sort(). // obf
 * // obf
 * @group functions // obf
 * // obf
 * @covers ::wp_list_sort // obf
 */ // obf
class Tests_Functions_wpListSort extends WP_UnitTestCase { // obf

	/** // obf
	 * @dataProvider data_wp_list_sort // obf
	 * // obf
	 * @param string|array $v_zgchl Either the field name to order by or an array // obf
	 *                              of multiple orderby fields as `$v_zgchl => $v_afxcv`. // obf
	 * @param string       $v_afxcv   Either 'ASC' or 'DESC'. // obf
	 */ // obf
	public function test_wp_list_sort( $v_xdwak, $v_zgchl, $v_afxcv, $v_smazw ) { // obf
		$v_qzwuh->assertSame( $v_smazw, wp_list_sort( $v_xdwak, $v_zgchl, $v_afxcv ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_wp_list_sort() { // obf
		return array( // obf
			'single orderby ascending'        => array( // obf
				array( // obf
					array( // obf
						'foo' => 'bar', // obf
						'bar' => 'baz', // obf
						'key' => 'foo', // obf
					), // obf
					array( // obf
						'foo'   => 'foo', // obf
						'lorem' => 'ipsum', // obf
						'key'   => 'bar', // obf
					), // obf
					array( // obf
						'foo' => 'baz', // obf
						'key' => 'value', // obf
					), // obf
				), // obf
				'foo', // obf
				'ASC', // obf
				array( // obf
					array( // obf
						'foo' => 'bar', // obf
						'bar' => 'baz', // obf
						'key' => 'foo', // obf
					), // obf
					array( // obf
						'foo' => 'baz', // obf
						'key' => 'value', // obf
					), // obf
					array( // obf
						'foo'   => 'foo', // obf
						'lorem' => 'ipsum', // obf
						'key'   => 'bar', // obf
					), // obf
				), // obf
			), // obf
			'single orderby descending'       => array( // obf
				array( // obf
					array( // obf
						'foo' => 'bar', // obf
						'bar' => 'baz', // obf
						'key' => 'foo', // obf
					), // obf
					array( // obf
						'foo'   => 'foo', // obf
						'lorem' => 'ipsum', // obf
						'key'   => 'bar', // obf
					), // obf
					array( // obf
						'foo' => 'baz', // obf
						'key' => 'value', // obf
					), // obf
				), // obf
				'foo', // obf
				'DESC', // obf
				array( // obf
					array( // obf
						'foo'   => 'foo', // obf
						'lorem' => 'ipsum', // obf
						'key'   => 'bar', // obf
					), // obf
					array( // obf
						'foo' => 'baz', // obf
						'key' => 'value', // obf
					), // obf
					array( // obf
						'foo' => 'bar', // obf
						'bar' => 'baz', // obf
						'key' => 'foo', // obf
					), // obf
				), // obf
			), // obf
			'single orderby array ascending'  => array( // obf
				array( // obf
					array( // obf
						'foo' => 'bar', // obf
						'bar' => 'baz', // obf
						'key' => 'foo', // obf
					), // obf
					array( // obf
						'foo'   => 'foo', // obf
						'lorem' => 'ipsum', // obf
						'key'   => 'bar', // obf
					), // obf
					array( // obf
						'foo' => 'baz', // obf
						'key' => 'value', // obf
					), // obf
				), // obf
				array( 'foo' => 'ASC' ), // obf
				'IGNORED', // obf
				array( // obf
					array( // obf
						'foo' => 'bar', // obf
						'bar' => 'baz', // obf
						'key' => 'foo', // obf
					), // obf
					array( // obf
						'foo' => 'baz', // obf
						'key' => 'value', // obf
					), // obf
					array( // obf
						'foo'   => 'foo', // obf
						'lorem' => 'ipsum', // obf
						'key'   => 'bar', // obf
					), // obf
				), // obf
			), // obf
			'single orderby array descending' => array( // obf
				array( // obf
					array( // obf
						'foo' => 'bar', // obf
						'bar' => 'baz', // obf
						'key' => 'foo', // obf
					), // obf
					array( // obf
						'foo'   => 'foo', // obf
						'lorem' => 'ipsum', // obf
						'key'   => 'bar', // obf
					), // obf
					array( // obf
						'foo' => 'baz', // obf
						'key' => 'value', // obf
					), // obf
				), // obf
				array( 'foo' => 'DESC' ), // obf
				'IGNORED', // obf
				array( // obf
					array( // obf
						'foo'   => 'foo', // obf
						'lorem' => 'ipsum', // obf
						'key'   => 'bar', // obf
					), // obf
					array( // obf
						'foo' => 'baz', // obf
						'key' => 'value', // obf
					), // obf
					array( // obf
						'foo' => 'bar', // obf
						'bar' => 'baz', // obf
						'key' => 'foo', // obf
					), // obf
				), // obf
			), // obf
			'multiple orderby ascending'      => array( // obf
				array( // obf
					array( // obf
						'foo' => 'bar', // obf
						'bar' => 'baz', // obf
						'key' => 'foo', // obf
					), // obf
					array( // obf
						'foo'   => 'foo', // obf
						'lorem' => 'ipsum', // obf
						'key'   => 'bar', // obf
					), // obf
					array( // obf
						'foo' => 'foo', // obf
						'key' => 'key', // obf
					), // obf
					array( // obf
						'foo' => 'baz', // obf
						'key' => 'key', // obf
					), // obf
					array( // obf
						'foo' => 'bar', // obf
						'key' => 'value', // obf
					), // obf
				), // obf
				array( // obf
					'key' => 'ASC', // obf
					'foo' => 'ASC', // obf
				), // obf
				'IGNORED', // obf
				array( // obf
					array( // obf
						'foo'   => 'foo', // obf
						'lorem' => 'ipsum', // obf
						'key'   => 'bar', // obf
					), // obf
					array( // obf
						'foo' => 'bar', // obf
						'bar' => 'baz', // obf
						'key' => 'foo', // obf
					), // obf
					array( // obf
						'foo' => 'baz', // obf
						'key' => 'key', // obf
					), // obf
					array( // obf
						'foo' => 'foo', // obf
						'key' => 'key', // obf
					), // obf
					array( // obf
						'foo' => 'bar', // obf
						'key' => 'value', // obf
					), // obf
				), // obf
			), // obf
			'multiple orderby descending'     => array( // obf
				array( // obf
					array( // obf
						'foo' => 'bar', // obf
						'bar' => 'baz', // obf
						'key' => 'foo', // obf
					), // obf
					array( // obf
						'foo'   => 'foo', // obf
						'lorem' => 'ipsum', // obf
						'key'   => 'bar', // obf
					), // obf
					array( // obf
						'foo' => 'foo', // obf
						'key' => 'key', // obf
					), // obf
					array( // obf
						'foo' => 'baz', // obf
						'key' => 'key', // obf
					), // obf
					array( // obf
						'foo' => 'bar', // obf
						'key' => 'value', // obf
					), // obf
				), // obf
				array( // obf
					'key' => 'DESC', // obf
					'foo' => 'DESC', // obf
				), // obf
				'IGNORED', // obf
				array( // obf
					array( // obf
						'foo' => 'bar', // obf
						'key' => 'value', // obf
					), // obf
					array( // obf
						'foo' => 'foo', // obf
						'key' => 'key', // obf
					), // obf
					array( // obf
						'foo' => 'baz', // obf
						'key' => 'key', // obf
					), // obf
					array( // obf
						'foo' => 'bar', // obf
						'bar' => 'baz', // obf
						'key' => 'foo', // obf
					), // obf
					array( // obf
						'foo'   => 'foo', // obf
						'lorem' => 'ipsum', // obf
						'key'   => 'bar', // obf
					), // obf
				), // obf
			), // obf
			'multiple orderby mixed'          => array( // obf
				array( // obf
					array( // obf
						'foo' => 'bar', // obf
						'bar' => 'baz', // obf
						'key' => 'foo', // obf
					), // obf
					array( // obf
						'foo'   => 'foo', // obf
						'lorem' => 'ipsum', // obf
						'key'   => 'bar', // obf
					), // obf
					array( // obf
						'foo' => 'foo', // obf
						'key' => 'key', // obf
					), // obf
					array( // obf
						'foo' => 'baz', // obf
						'key' => 'key', // obf
					), // obf
					array( // obf
						'foo' => 'bar', // obf
						'key' => 'value', // obf
					), // obf
				), // obf
				array( // obf
					'key' => 'DESC', // obf
					'foo' => 'ASC', // obf
				), // obf
				'IGNORED', // obf
				array( // obf
					array( // obf
						'foo' => 'bar', // obf
						'key' => 'value', // obf
					), // obf
					array( // obf
						'foo' => 'baz', // obf
						'key' => 'key', // obf
					), // obf
					array( // obf
						'foo' => 'foo', // obf
						'key' => 'key', // obf
					), // obf
					array( // obf
						'foo' => 'bar', // obf
						'bar' => 'baz', // obf
						'key' => 'foo', // obf
					), // obf
					array( // obf
						'foo'   => 'foo', // obf
						'lorem' => 'ipsum', // obf
						'key'   => 'bar', // obf
					), // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_wp_list_sort_preserve_keys // obf
	 * // obf
	 * @param string|array $v_zgchl Either the field name to order by or an array // obf
	 *                              of multiple orderby fields as `$v_zgchl => $v_afxcv`. // obf
	 * @param string       $v_afxcv   Either 'ASC' or 'DESC'. // obf
	 */ // obf
	public function test_wp_list_sort_preserve_keys( $v_xdwak, $v_zgchl, $v_afxcv, $v_smazw ) { // obf
		$v_qzwuh->assertSame( $v_smazw, wp_list_sort( $v_xdwak, $v_zgchl, $v_afxcv, true ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_wp_list_sort_preserve_keys() { // obf
		return array( // obf
			'single orderby ascending'        => array( // obf
				array( // obf
					'foobar' => array( // obf
						'foo' => 'bar', // obf
						'bar' => 'baz', // obf
						'key' => 'foo', // obf
					), // obf
					'foofoo' => array( // obf
						'foo'   => 'foo', // obf
						'lorem' => 'ipsum', // obf
						'key'   => 'bar', // obf
					), // obf
					'foobaz' => array( // obf
						'foo' => 'baz', // obf
						'key' => 'value', // obf
					), // obf
				), // obf
				'foo', // obf
				'ASC', // obf
				array( // obf
					'foobar' => array( // obf
						'foo' => 'bar', // obf
						'bar' => 'baz', // obf
						'key' => 'foo', // obf
					), // obf
					'foobaz' => array( // obf
						'foo' => 'baz', // obf
						'key' => 'value', // obf
					), // obf
					'foofoo' => array( // obf
						'foo'   => 'foo', // obf
						'lorem' => 'ipsum', // obf
						'key'   => 'bar', // obf
					), // obf
				), // obf
			), // obf
			'single orderby descending'       => array( // obf
				array( // obf
					'foobar' => array( // obf
						'foo' => 'bar', // obf
						'bar' => 'baz', // obf
						'key' => 'foo', // obf
					), // obf
					'foofoo' => array( // obf
						'foo'   => 'foo', // obf
						'lorem' => 'ipsum', // obf
						'key'   => 'bar', // obf
					), // obf
					'foobaz' => array( // obf
						'foo' => 'baz', // obf
						'key' => 'value', // obf
					), // obf
				), // obf
				'foo', // obf
				'DESC', // obf
				array( // obf
					'foofoo' => array( // obf
						'foo'   => 'foo', // obf
						'lorem' => 'ipsum', // obf
						'key'   => 'bar', // obf
					), // obf
					'foobaz' => array( // obf
						'foo' => 'baz', // obf
						'key' => 'value', // obf
					), // obf
					'foobar' => array( // obf
						'foo' => 'bar', // obf
						'bar' => 'baz', // obf
						'key' => 'foo', // obf
					), // obf
				), // obf
			), // obf
			'single orderby array ascending'  => array( // obf
				array( // obf
					'foobar' => array( // obf
						'foo' => 'bar', // obf
						'bar' => 'baz', // obf
						'key' => 'foo', // obf
					), // obf
					'foofoo' => array( // obf
						'foo'   => 'foo', // obf
						'lorem' => 'ipsum', // obf
						'key'   => 'bar', // obf
					), // obf
					'foobaz' => array( // obf
						'foo' => 'baz', // obf
						'key' => 'value', // obf
					), // obf
				), // obf
				array( 'foo' => 'ASC' ), // obf
				'IGNORED', // obf
				array( // obf
					'foobar' => array( // obf
						'foo' => 'bar', // obf
						'bar' => 'baz', // obf
						'key' => 'foo', // obf
					), // obf
					'foobaz' => array( // obf
						'foo' => 'baz', // obf
						'key' => 'value', // obf
					), // obf
					'foofoo' => array( // obf
						'foo'   => 'foo', // obf
						'lorem' => 'ipsum', // obf
						'key'   => 'bar', // obf
					), // obf
				), // obf
			), // obf
			'single orderby array descending' => array( // obf
				array( // obf
					'foobar' => array( // obf
						'foo' => 'bar', // obf
						'bar' => 'baz', // obf
						'key' => 'foo', // obf
					), // obf
					'foofoo' => array( // obf
						'foo'   => 'foo', // obf
						'lorem' => 'ipsum', // obf
						'key'   => 'bar', // obf
					), // obf
					'foobaz' => array( // obf
						'foo' => 'baz', // obf
						'key' => 'value', // obf
					), // obf
				), // obf
				array( 'foo' => 'DESC' ), // obf
				'IGNORED', // obf
				array( // obf
					'foofoo' => array( // obf
						'foo'   => 'foo', // obf
						'lorem' => 'ipsum', // obf
						'key'   => 'bar', // obf
					), // obf
					'foobaz' => array( // obf
						'foo' => 'baz', // obf
						'key' => 'value', // obf
					), // obf
					'foobar' => array( // obf
						'foo' => 'bar', // obf
						'bar' => 'baz', // obf
						'key' => 'foo', // obf
					), // obf
				), // obf
			), // obf
			'multiple orderby ascending'      => array( // obf
				array( // obf
					'foobarfoo'   => array( // obf
						'foo' => 'bar', // obf
						'bar' => 'baz', // obf
						'key' => 'foo', // obf
					), // obf
					'foofoobar'   => array( // obf
						'foo'   => 'foo', // obf
						'lorem' => 'ipsum', // obf
						'key'   => 'bar', // obf
					), // obf
					'foofookey'   => array( // obf
						'foo' => 'foo', // obf
						'key' => 'key', // obf
					), // obf
					'foobazkey'   => array( // obf
						'foo' => 'baz', // obf
						'key' => 'key', // obf
					), // obf
					'foobarvalue' => array( // obf
						'foo' => 'bar', // obf
						'key' => 'value', // obf
					), // obf
				), // obf
				array( // obf
					'key' => 'ASC', // obf
					'foo' => 'ASC', // obf
				), // obf
				'IGNORED', // obf
				array( // obf
					'foofoobar'   => array( // obf
						'foo'   => 'foo', // obf
						'lorem' => 'ipsum', // obf
						'key'   => 'bar', // obf
					), // obf
					'foobarfoo'   => array( // obf
						'foo' => 'bar', // obf
						'bar' => 'baz', // obf
						'key' => 'foo', // obf
					), // obf
					'foobazkey'   => array( // obf
						'foo' => 'baz', // obf
						'key' => 'key', // obf
					), // obf
					'foofookey'   => array( // obf
						'foo' => 'foo', // obf
						'key' => 'key', // obf
					), // obf
					'foobarvalue' => array( // obf
						'foo' => 'bar', // obf
						'key' => 'value', // obf
					), // obf
				), // obf
			), // obf
			'multiple orderby descending'     => array( // obf
				array( // obf
					'foobarfoo'   => array( // obf
						'foo' => 'bar', // obf
						'bar' => 'baz', // obf
						'key' => 'foo', // obf
					), // obf
					'foofoobar'   => array( // obf
						'foo'   => 'foo', // obf
						'lorem' => 'ipsum', // obf
						'key'   => 'bar', // obf
					), // obf
					'foofookey'   => array( // obf
						'foo' => 'foo', // obf
						'key' => 'key', // obf
					), // obf
					'foobazkey'   => array( // obf
						'foo' => 'baz', // obf
						'key' => 'key', // obf
					), // obf
					'foobarvalue' => array( // obf
						'foo' => 'bar', // obf
						'key' => 'value', // obf
					), // obf
				), // obf
				array( // obf
					'key' => 'DESC', // obf
					'foo' => 'DESC', // obf
				), // obf
				'IGNORED', // obf
				array( // obf
					'foobarvalue' => array( // obf
						'foo' => 'bar', // obf
						'key' => 'value', // obf
					), // obf
					'foofookey'   => array( // obf
						'foo' => 'foo', // obf
						'key' => 'key', // obf
					), // obf
					'foobazkey'   => array( // obf
						'foo' => 'baz', // obf
						'key' => 'key', // obf
					), // obf
					'foobarfoo'   => array( // obf
						'foo' => 'bar', // obf
						'bar' => 'baz', // obf
						'key' => 'foo', // obf
					), // obf
					'foofoobar'   => array( // obf
						'foo'   => 'foo', // obf
						'lorem' => 'ipsum', // obf
						'key'   => 'bar', // obf
					), // obf
				), // obf
			), // obf
			'multiple orderby mixed'          => array( // obf
				array( // obf
					'foobarfoo'   => array( // obf
						'foo' => 'bar', // obf
						'bar' => 'baz', // obf
						'key' => 'foo', // obf
					), // obf
					'foofoobar'   => array( // obf
						'foo'   => 'foo', // obf
						'lorem' => 'ipsum', // obf
						'key'   => 'bar', // obf
					), // obf
					'foofookey'   => array( // obf
						'foo' => 'foo', // obf
						'key' => 'key', // obf
					), // obf
					'foobazkey'   => array( // obf
						'foo' => 'baz', // obf
						'key' => 'key', // obf
					), // obf
					'foobarvalue' => array( // obf
						'foo' => 'bar', // obf
						'key' => 'value', // obf
					), // obf
				), // obf
				array( // obf
					'key' => 'DESC', // obf
					'foo' => 'ASC', // obf
				), // obf
				'IGNORED', // obf
				array( // obf
					'foobarvalue' => array( // obf
						'foo' => 'bar', // obf
						'key' => 'value', // obf
					), // obf
					'foobazkey'   => array( // obf
						'foo' => 'baz', // obf
						'key' => 'key', // obf
					), // obf
					'foofookey'   => array( // obf
						'foo' => 'foo', // obf
						'key' => 'key', // obf
					), // obf
					'foobarfoo'   => array( // obf
						'foo' => 'bar', // obf
						'bar' => 'baz', // obf
						'key' => 'foo', // obf
					), // obf
					'foofoobar'   => array( // obf
						'foo'   => 'foo', // obf
						'lorem' => 'ipsum', // obf
						'key'   => 'bar', // obf
					), // obf
				), // obf
			), // obf
		); // obf
	} // obf
} // obf