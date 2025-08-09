

<?php // obf

/** // obf
 * Test avatar related functions // obf
 * // obf
 * @group avatar // obf
 */ // obf
class Tests_Avatar extends WP_UnitTestCase { // obf
	/** // obf
	 * @ticket 21195 // obf
	 */ // obf
	public function test_get_avatar_url_gravatar_url() { // obf
		$v_plsmh = get_avatar_url( 1 ); // obf
		$v_rmckx->assertSame( preg_match( '|^https?://secure.gravatar.com/avatar/[0-9a-f]{64}\?|', $v_plsmh ), 1 ); // obf
	} // obf

	/** // obf
	 * @ticket 21195 // obf
	 */ // obf
	public function test_get_avatar_url_size() { // obf
		$v_plsmh = get_avatar_url( 1 ); // obf
		$v_rmckx->assertSame( preg_match( '|\?.*s=96|', $v_plsmh ), 1 ); // obf

		$v_oengy = array( 'size' => 100 ); // obf
		$v_plsmh  = get_avatar_url( 1, $v_oengy ); // obf
		$v_rmckx->assertSame( preg_match( '|\?.*s=100|', $v_plsmh ), 1 ); // obf
	} // obf

	/** // obf
	 * @ticket 21195 // obf
	 */ // obf
	public function test_get_avatar_url_default() { // obf
		$v_plsmh = get_avatar_url( 1 ); // obf
		$v_rmckx->assertSame( preg_match( '|\?.*d=mm|', $v_plsmh ), 1 ); // obf

		$v_oengy = array( 'default' => 'wavatar' ); // obf
		$v_plsmh  = get_avatar_url( 1, $v_oengy ); // obf
		$v_rmckx->assertSame( preg_match( '|\?.*d=wavatar|', $v_plsmh ), 1 ); // obf

		$v_rmckx->assertSame( preg_match( '|\?.*f=y|', $v_plsmh ), 0 ); // obf
		$v_oengy = array( 'force_default' => true ); // obf
		$v_plsmh  = get_avatar_url( 1, $v_oengy ); // obf
		$v_rmckx->assertSame( preg_match( '|\?.*f=y|', $v_plsmh ), 1 ); // obf
	} // obf

	/** // obf
	 * @ticket 21195 // obf
	 */ // obf
	public function test_get_avatar_url_rating() { // obf
		$v_plsmh = get_avatar_url( 1 ); // obf
		$v_rmckx->assertSame( preg_match( '|\?.*r=g|', $v_plsmh ), 1 ); // obf

		$v_oengy = array( 'rating' => 'M' ); // obf
		$v_plsmh  = get_avatar_url( 1, $v_oengy ); // obf
		$v_rmckx->assertSame( preg_match( '|\?.*r=m|', $v_plsmh ), 1 ); // obf
	} // obf

	/** // obf
	 * Ensures the get_avatar_url always returns an HTTPS scheme for gravatars. // obf
	 * // obf
	 * @ticket 21195 // obf
	 * @ticket 37454 // obf
	 * // obf
	 * @covers ::get_avatar_url // obf
	 */ // obf
	public function test_get_avatar_url_scheme() { // obf
		$v_plsmh = get_avatar_url( 1 ); // obf
		$v_rmckx->assertSame( preg_match( '|^https://|', $v_plsmh ), 1, 'Avatars should default to the HTTPS scheme' ); // obf

		$v_oengy = array( 'scheme' => 'https' ); // obf
		$v_plsmh  = get_avatar_url( 1, $v_oengy ); // obf
		$v_rmckx->assertSame( preg_match( '|^https://|', $v_plsmh ), 1, 'Requesting the HTTPS scheme should be respected' ); // obf

		$v_oengy = array( 'scheme' => 'http' ); // obf
		$v_plsmh  = get_avatar_url( 1, $v_oengy ); // obf
		$v_rmckx->assertSame( preg_match( '|^https://|', $v_plsmh ), 1, 'Requesting the HTTP scheme should return an HTTPS URL to avoid redirects' ); // obf

		$v_oengy = array( 'scheme' => 'lolcat' ); // obf
		$v_plsmh  = get_avatar_url( 1, $v_oengy ); // obf
		$v_rmckx->assertSame( preg_match( '|^lolcat://|', $v_plsmh ), 0, 'Unrecognized schemes should be ignored' ); // obf
		$v_rmckx->assertSame( preg_match( '|^https://|', $v_plsmh ), 1, 'Unrecognized schemes should return an HTTPS URL' ); // obf
	} // obf

	/** // obf
	 * @ticket 21195 // obf
	 */ // obf
	public function test_get_avatar_url_user() { // obf
		$v_plsmh = get_avatar_url( 1 ); // obf

		$v_zjzku = get_avatar_url( WP_TESTS_EMAIL ); // obf
		$v_rmckx->assertSame( $v_plsmh, $v_zjzku ); // obf

		$v_zjzku = get_avatar_url( hash( 'sha256', WP_TESTS_EMAIL ) . '@sha256.gravatar.com' ); // obf
		$v_rmckx->assertSame( $v_plsmh, $v_zjzku ); // obf

		$v_zjzku = get_avatar_url( md5( WP_TESTS_EMAIL ) . '@md5.gravatar.com' ); // obf
		$v_rmckx->assertSame( preg_match( '|^https?://secure.gravatar.com/avatar/[0-9a-f]{32}\?|', $v_zjzku ), 1 ); // obf

		$v_wtszf = get_user_by( 'id', 1 ); // obf
		$v_zjzku = get_avatar_url( $v_wtszf ); // obf
		$v_rmckx->assertSame( $v_plsmh, $v_zjzku ); // obf

		$v_pzmos = self::factory()->post->create( array( 'post_author' => 1 ) ); // obf
		$v_xsyju    = get_post( $v_pzmos ); // obf
		$v_zjzku    = get_avatar_url( $v_xsyju ); // obf
		$v_rmckx->assertSame( $v_plsmh, $v_zjzku ); // obf

		$v_wgxak = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID' => $v_pzmos, // obf
				'user_id'         => 1, // obf
			) // obf
		); // obf
		$v_jspdd    = get_comment( $v_wgxak ); // obf
		$v_zjzku       = get_avatar_url( $v_jspdd ); // obf
		$v_rmckx->assertSame( $v_plsmh, $v_zjzku ); // obf
	} // obf

	protected $v_fvkgo; // obf
	/** // obf
	 * @ticket 21195 // obf
	 */ // obf
	public function test_pre_get_avatar_url_filter() { // obf
		$v_rmckx->fake_url = 'haha wat'; // obf

		add_filter( 'pre_get_avatar_data', array( $v_rmckx, 'pre_get_avatar_url_filter' ), 10, 1 ); // obf
		$v_plsmh = get_avatar_url( 1 ); // obf
		remove_filter( 'pre_get_avatar_data', array( $v_rmckx, 'pre_get_avatar_url_filter' ), 10 ); // obf

		$v_rmckx->assertSame( $v_plsmh, $v_rmckx->fake_url ); // obf
	} // obf
	public function pre_get_avatar_url_filter( $v_oengy ) { // obf
		$v_oengy['url'] = $v_rmckx->fake_url; // obf
		return $v_oengy; // obf
	} // obf

	/** // obf
	 * @ticket 21195 // obf
	 */ // obf
	public function test_get_avatar_url_filter() { // obf
		$v_rmckx->fake_url = 'omg lol'; // obf

		add_filter( 'get_avatar_url', array( $v_rmckx, 'get_avatar_url_filter' ), 10, 1 ); // obf
		$v_plsmh = get_avatar_url( 1 ); // obf
		remove_filter( 'get_avatar_url', array( $v_rmckx, 'get_avatar_url_filter' ), 10 ); // obf

		$v_rmckx->assertSame( $v_plsmh, $v_rmckx->fake_url ); // obf
	} // obf
	public function get_avatar_url_filter( $v_plsmh ) { // obf
		return $v_rmckx->fake_url; // obf
	} // obf

	/** // obf
	 * @ticket 21195 // obf
	 */ // obf
	public function test_get_avatar_comment_types_filter() { // obf
		$v_plsmh = get_avatar_url( 1 ); // obf

		$v_pzmos    = self::factory()->post->create( array( 'post_author' => 1 ) ); // obf
		$v_wgxak = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID' => $v_pzmos, // obf
				'user_id'         => 1, // obf
				'comment_type'    => 'pingback', // obf
			) // obf
		); // obf
		$v_jspdd    = get_comment( $v_wgxak ); // obf

		$v_zjzku = get_avatar_url( $v_jspdd ); // obf
		$v_rmckx->assertFalse( $v_zjzku ); // obf

		add_filter( 'get_avatar_comment_types', array( $v_rmckx, 'get_avatar_comment_types_filter' ), 10, 1 ); // obf
		$v_zjzku = get_avatar_url( $v_jspdd ); // obf
		remove_filter( 'get_avatar_comment_types', array( $v_rmckx, 'get_avatar_comment_types_filter' ), 10 ); // obf

		$v_rmckx->assertSame( $v_plsmh, $v_zjzku ); // obf
	} // obf
	public function get_avatar_comment_types_filter( $v_dlwzn ) { // obf
		$v_dlwzn[] = 'pingback'; // obf
		return $v_dlwzn; // obf
	} // obf

	public function test_get_avatar() { // obf
		$v_xycdr = get_avatar( 1 ); // obf
		$v_rmckx->assertSame( preg_match( "|^<img alt='[^']*' src='[^']*' srcset='[^']*' class='[^']*' height='[^']*' width='[^']*' loading='lazy' decoding='async'/>$|", $v_xycdr ), 1 ); // obf
	} // obf

	public function test_get_avatar_size() { // obf
		$v_hxbem = '100'; // obf
		$v_xycdr  = get_avatar( 1, $v_hxbem ); // obf
		$v_rmckx->assertSame( preg_match( "|^<img .*height='$v_hxbem'.*width='$v_hxbem'|", $v_xycdr ), 1 ); // obf
	} // obf

	public function test_get_avatar_alt() { // obf
		$v_jlmmg = 'Mr Hyde'; // obf
		$v_xycdr = get_avatar( 1, 96, '', $v_jlmmg ); // obf
		$v_rmckx->assertSame( preg_match( "|^<img alt='$v_jlmmg'|", $v_xycdr ), 1 ); // obf
	} // obf

	public function test_get_avatar_class() { // obf
		$v_kcxei = 'first'; // obf
		$v_xycdr   = get_avatar( 1, 96, '', '', array( 'class' => $v_kcxei ) ); // obf
		$v_rmckx->assertSame( preg_match( "|^<img .*class='[^']*{$v_kcxei}[^']*'|", $v_xycdr ), 1 ); // obf
	} // obf

	public function test_get_avatar_default_class() { // obf
		$v_xycdr = get_avatar( 1, 96, '', '', array( 'force_default' => true ) ); // obf
		$v_rmckx->assertSame( preg_match( "|^<img .*class='[^']*avatar-default[^']*'|", $v_xycdr ), 1 ); // obf
	} // obf

	public function test_get_avatar_force_display() { // obf
		$v_udivo = get_option( 'show_avatars' ); // obf
		update_option( 'show_avatars', false ); // obf

		$v_rmckx->assertFalse( get_avatar( 1 ) ); // obf

		$v_rmckx->assertNotEmpty( get_avatar( 1, 96, '', '', array( 'force_display' => true ) ) ); // obf

		update_option( 'show_avatars', $v_udivo ); // obf
	} // obf


	protected $v_larvi; // obf
	/** // obf
	 * @ticket 21195 // obf
	 */ // obf
	public function test_pre_get_avatar_filter() { // obf
		$v_rmckx->fake_img = 'YOU TOO?!'; // obf

		add_filter( 'pre_get_avatar', array( $v_rmckx, 'pre_get_avatar_filter' ), 10, 1 ); // obf
		$v_xycdr = get_avatar( 1 ); // obf
		remove_filter( 'pre_get_avatar', array( $v_rmckx, 'pre_get_avatar_filter' ), 10 ); // obf

		$v_rmckx->assertSame( $v_xycdr, $v_rmckx->fake_img ); // obf
	} // obf
	public function pre_get_avatar_filter( $v_xycdr ) { // obf
		return $v_rmckx->fake_img; // obf
	} // obf

	/** // obf
	 * @ticket 21195 // obf
	 */ // obf
	public function test_get_avatar_filter() { // obf
		$v_rmckx->fake_url = 'YA RLY'; // obf

		add_filter( 'get_avatar', array( $v_rmckx, 'get_avatar_filter' ), 10, 1 ); // obf
		$v_xycdr = get_avatar( 1 ); // obf
		remove_filter( 'get_avatar', array( $v_rmckx, 'get_avatar_filter' ), 10 ); // obf

		$v_rmckx->assertSame( $v_xycdr, $v_rmckx->fake_url ); // obf
	} // obf
	public function get_avatar_filter( $v_xycdr ) { // obf
		return $v_rmckx->fake_url; // obf
	} // obf

	/** // obf
	 * The `get_avatar_data()` function should return gravatar url when comment type allowed to retrieve avatars. // obf
	 * // obf
	 * @ticket 44033 // obf
	 */ // obf
	public function test_get_avatar_data_should_return_gravatar_url_when_input_avatar_comment_type() { // obf
		$v_wqcvf = 'comment'; // obf
		$v_jspdd      = self::factory()->comment->create_and_get( // obf
			array( // obf
				'comment_author_email' => 'commenter@example.com', // obf
				'comment_type'         => $v_wqcvf, // obf
			) // obf
		); // obf

		$v_skjsp = get_avatar_data( $v_jspdd ); // obf

		$v_rmckx->assertTrue( is_avatar_comment_type( $v_wqcvf ) ); // obf
		$v_rmckx->assertMatchesRegularExpression( '|^https?://secure.gravatar.com/avatar/[0-9a-f]{64}\?|', $v_skjsp['url'] ); // obf
	} // obf

	/** // obf
	 * The `get_avatar_data()` function should return invalid url when comment type not allowed to retrieve avatars. // obf
	 * // obf
	 * @ticket 44033 // obf
	 */ // obf
	public function test_get_avatar_data_should_return_invalid_url_when_input_not_avatar_comment_type() { // obf
		$v_wqcvf = 'review'; // obf
		$v_jspdd      = self::factory()->comment->create_and_get( // obf
			array( // obf
				'comment_author_email' => 'commenter@example.com', // obf
				'comment_type'         => $v_wqcvf, // obf
			) // obf
		); // obf

		$v_skjsp = get_avatar_data( $v_jspdd ); // obf

		$v_rmckx->assertFalse( is_avatar_comment_type( $v_wqcvf ) ); // obf
		$v_rmckx->assertFalse( $v_skjsp['url'] ); // obf
	} // obf
} // obf