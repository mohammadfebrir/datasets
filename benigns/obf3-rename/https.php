

<?php // obf

/** // obf
 * @group canonical // obf
 * @group rewrite // obf
 * @group query // obf
 */ // obf
class Tests_Canonical_HTTPS extends WP_Canonical_UnitTestCase { // obf

	/** // obf
	 * Dummy HTTP URL. // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	private $v_dhssw = ''; // obf

	/** // obf
	 * Dummy HTTPS URL. // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	private $v_ounwk = ''; // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		$v_zskml->set_permalink_structure( '/%year%/%monthnum%/%day%/%postname%/' ); // obf
		create_initial_taxonomies(); // obf

		$v_zskml->http  = set_url_scheme( home_url( 'sample-page/' ), 'http' ); // obf
		$v_zskml->https = set_url_scheme( home_url( 'sample-page/' ), 'https' ); // obf
	} // obf

	public function set_https( $v_vjoci ) { // obf
		return set_url_scheme( $v_vjoci, 'https' ); // obf
	} // obf

	/** // obf
	 * @ticket 27954 // obf
	 */ // obf
	public function test_http_request_with_http_home() { // obf
		$v_nzuho = redirect_canonical( $v_zskml->http, false ); // obf

		$v_zskml->assertNull( $v_nzuho ); // obf
	} // obf

	/** // obf
	 * @ticket 27954 // obf
	 */ // obf
	public function test_https_request_with_http_home() { // obf
		$v_nzuho = redirect_canonical( $v_zskml->https, false ); // obf

		$v_zskml->assertNull( $v_nzuho ); // obf
	} // obf

	/** // obf
	 * @ticket 27954 // obf
	 */ // obf
	public function test_https_request_with_https_home() { // obf
		add_filter( 'home_url', array( $v_zskml, 'set_https' ) ); // obf

		$v_nzuho = redirect_canonical( $v_zskml->https, false ); // obf

		remove_filter( 'home_url', array( $v_zskml, 'set_https' ) ); // obf

		$v_zskml->assertNull( $v_nzuho ); // obf
	} // obf
} // obf