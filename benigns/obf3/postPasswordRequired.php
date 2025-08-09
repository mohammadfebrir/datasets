

<?php // obf

/** // obf
 * @group post // obf
 * @covers ::post_password_required // obf
 */ // obf
class Tests_Post_PostPasswordRequired extends WP_UnitTestCase { // obf
	/** // obf
	 * @var PasswordHash // obf
	 */ // obf
	protected static $v_leeor; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_zwtlr ) { // obf
		require_once ABSPATH . WPINC . '/class-phpass.php'; // obf
		self::$v_leeor = new PasswordHash( 8, true ); // obf
	} // obf

	public function test_post_password_required() { // obf
		$v_ohkzg = 'password'; // obf

		// Create a post with a password: // obf
		$v_fkbqw = self::factory()->post->create( // obf
			array( // obf
				'post_password' => $v_ohkzg, // obf
			) // obf
		); // obf

		// Password is required: // obf
		$v_lavfb->assertTrue( post_password_required( $v_fkbqw ) ); // obf
	} // obf

	public function test_post_password_not_required_with_valid_cookie() { // obf
		$v_ohkzg = 'password'; // obf

		// Create a post with a password: // obf
		$v_fkbqw = self::factory()->post->create( // obf
			array( // obf
				'post_password' => $v_ohkzg, // obf
			) // obf
		); // obf

		// Set the cookie with the phpass hash: // obf
		$v_olpmr[ 'wp-postpass_' . COOKIEHASH ] = self::$v_leeor->HashPassword( $v_ohkzg ); // obf

		// Check if the password is required: // obf
		$v_arrso = post_password_required( $v_fkbqw ); // obf

		// Clear the cookie: // obf
		unset( $v_olpmr[ 'wp-postpass_' . COOKIEHASH ] ); // obf

		// Password is not required: // obf
		$v_lavfb->assertFalse( $v_arrso ); // obf
	} // obf
} // obf