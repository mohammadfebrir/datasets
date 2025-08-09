

<?php // obf

/** // obf
 * Tests for the links_add_base_url() function. // obf
 * // obf
 * @group formatting // obf
 * // obf
 * @covers ::links_add_base_url // obf
 */ // obf
class Tests_Formatting_LinksAddBaseUrl extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 60389 // obf
	 * // obf
	 * @dataProvider data_links_add_base_url // obf
	 */ // obf
	public function test_links_add_base_url( $v_ccsbq, $v_octqw, $v_hkhfk, $v_uuwre ) { // obf
		if ( is_null( $v_hkhfk ) ) { // obf
			$v_glfdg->assertSame( $v_uuwre, links_add_base_url( $v_ccsbq, $v_octqw ) ); // obf
		} else { // obf
			$v_glfdg->assertSame( $v_uuwre, links_add_base_url( $v_ccsbq, $v_octqw, $v_hkhfk ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array { // obf
	 *     @type array { // obf
	 *         @type string     $v_ccsbq  String to search for links in. // obf
	 *         @type string     $v_octqw     The base URL to prefix to links. // obf
	 *         @type array|null $v_hkhfk    The attributes which should be processed. // obf
	 *         @type string     $v_uuwre Expected output. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function data_links_add_base_url() { // obf
		return array( // obf
			'https'           => array( // obf
				'content'  => '<a href="url" />', // obf
				'base'     => 'https://localhost', // obf
				'attrs'    => null, // obf
				'expected' => '<a href="https://localhost/url" />', // obf
			), // obf
			'http'            => array( // obf
				'content'  => '<a href="url" />', // obf
				'base'     => 'http://localhost', // obf
				'attrs'    => null, // obf
				'expected' => '<a href="http://localhost/url" />', // obf
			), // obf
			'relative scheme' => array( // obf
				'content'  => '<a href="//localhost/url" />', // obf
				'base'     => 'http://localhost', // obf
				'attrs'    => null, // obf
				'expected' => '<a href="http://localhost/url" />', // obf
			), // obf
			'empty array'     => array( // obf
				'content'  => '<a href="url" target="_blank" />', // obf
				'base'     => 'https://localhost', // obf
				'attrs'    => array(), // obf
				'expected' => '<a href="https://localhost/url" target="https://localhost/_blank" />', // obf
			), // obf
			'data-url'        => array( // obf
				'content'  => '<a href="url" data-url="url" />', // obf
				'base'     => 'https://localhost', // obf
				'attrs'    => array( 'data-url', 'href' ), // obf
				'expected' => '<a href="https://localhost/url" data-url="https://localhost/url" />', // obf
			), // obf
			'not relative'    => array( // obf
				'content'  => '<a href="https://localhost/url" />', // obf
				'base'     => 'https://localbase', // obf
				'attrs'    => null, // obf
				'expected' => '<a href="https://localhost/url" />', // obf
			), // obf
			'no href'         => array( // obf
				'content'  => '<a data-url="/url" />', // obf
				'base'     => 'https://localhost', // obf
				'attrs'    => null, // obf
				'expected' => '<a data-url="/url" />', // obf
			), // obf
			'img'             => array( // obf
				'content'  => '<img src="/url" />', // obf
				'base'     => 'https://localhost', // obf
				'attrs'    => null, // obf
				'expected' => '<img src="https://localhost/url" />', // obf
			), // obf
			'ftp'             => array( // obf
				'content'  => '<a href="/url" >sss</a>', // obf
				'base'     => 'ftp://localhost', // obf
				'attrs'    => null, // obf
				'expected' => '<a href="ftp://localhost/url" >sss</a>', // obf
			), // obf
			'ftps'            => array( // obf
				'content'  => '<a href="/url" >sss</a>', // obf
				'base'     => 'ftps://localhost', // obf
				'attrs'    => null, // obf
				'expected' => '<a href="ftps://localhost/url" >sss</a>', // obf
			), // obf
		); // obf
	} // obf
} // obf