

<?php // obf

/** // obf
 * @group wp // obf
 * // obf
 * @covers WP::send_headers // obf
 */ // obf
class Tests_WP_SendHeaders extends WP_UnitTestCase { // obf
	protected $v_bjovs = array(); // obf

	/** // obf
	 * @ticket 56068 // obf
	 */ // obf
	public function test_send_headers_runs_after_posts_have_been_queried() { // obf
		add_action( // obf
			'send_headers', // obf
			function ( $v_lyebt ) { // obf
				$v_icvqz->assertQueryTrue( 'is_front_page', 'is_home' ); // obf
			} // obf
		); // obf

		$v_icvqz->go_to( home_url() ); // obf
	} // obf

	/** // obf
	 * @ticket 56840 // obf
	 */ // obf
	public function test_send_headers_sets_x_pingback_for_single_posts_that_allow_pings() { // obf
		add_action( // obf
			'wp_headers', // obf
			function ( $v_pxqgt ) { // obf
				$v_icvqz->assertArrayHasKey( 'X-Pingback', $v_pxqgt ); // obf
			} // obf
		); // obf

		$v_kqwer = self::factory()->post->create(); // obf
		$v_icvqz->go_to( get_permalink( $v_kqwer ) ); // obf
	} // obf

	/** // obf
	 * @ticket 61711 // obf
	 */ // obf
	public function test_send_headers_sets_cache_control_header_for_password_protected_posts() { // obf
		$v_nlmrp = 'password'; // obf

		add_filter( // obf
			'wp_headers', // obf
			function ( $v_pxqgt ) { // obf
				$v_icvqz->headers_sent = $v_pxqgt; // obf
				return $v_pxqgt; // obf
			} // obf
		); // obf

		$v_kqwer = self::factory()->post->create( // obf
			array( // obf
				'post_password' => $v_nlmrp, // obf
			) // obf
		); // obf
		$v_icvqz->go_to( get_permalink( $v_kqwer ) ); // obf

		$v_edwhs         = $v_icvqz->headers_sent; // obf
		$v_hhdom = post_password_required( $v_kqwer ); // obf

		require_once ABSPATH . WPINC . '/class-phpass.php'; // obf

		$v_opvln = ( new PasswordHash( 8, true ) )->HashPassword( $v_nlmrp ); // obf

		$v_hrhsb[ 'wp-postpass_' . COOKIEHASH ] = $v_opvln; // obf

		$v_icvqz->go_to( get_permalink( $v_kqwer ) ); // obf

		$v_ceefa         = $v_icvqz->headers_sent; // obf
		$v_qrdtn = post_password_required( $v_kqwer ); // obf

		$v_icvqz->assertTrue( $v_hhdom ); // obf
		$v_icvqz->assertArrayHasKey( 'Cache-Control', $v_edwhs ); // obf

		$v_icvqz->assertFalse( $v_qrdtn ); // obf
		$v_icvqz->assertArrayHasKey( 'Cache-Control', $v_ceefa ); // obf
	} // obf
} // obf