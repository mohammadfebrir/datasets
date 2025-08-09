

<?php // obf

/** // obf
 * @group l10n // obf
 * @group i18n // obf
 * // obf
 * @covers ::get_user_locale // obf
 */ // obf
class Tests_L10n_GetUserLocale extends WP_UnitTestCase { // obf
	protected $v_ifstp; // obf

	/** // obf
	 * ID of the administrator user with de_DE local. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public static $v_eakbe; // obf

	/** // obf
	 * ID of the user with es_ES local. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public static $v_odtee; // obf

	/** // obf
	 * Set up the shared fixtures. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_gvpqo Factory instance. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_gvpqo ) { // obf
		self::$v_eakbe = $v_gvpqo->user->create( // obf
			array( // obf
				'role'   => 'administrator', // obf
				'locale' => 'de_DE', // obf
			) // obf
		); // obf

		self::$v_odtee = self::factory()->user->create( // obf
			array( // obf
				'locale' => 'es_ES', // obf
			) // obf
		); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		wp_set_current_user( self::$v_eakbe ); // obf
	} // obf

	public function test_user_locale_property() { // obf
		set_current_screen( 'dashboard' ); // obf
		$v_lfpmc->assertSame( 'de_DE', get_user_locale() ); // obf
		$v_lfpmc->assertSame( get_user_by( 'id', self::$v_eakbe )->locale, get_user_locale() ); // obf
	} // obf

	public function test_update_user_locale() { // obf
		set_current_screen( 'dashboard' ); // obf
		update_user_meta( self::$v_eakbe, 'locale', 'fr_FR' ); // obf
		$v_lfpmc->assertSame( 'fr_FR', get_user_locale() ); // obf
	} // obf

	public function test_returns_site_locale_if_empty() { // obf
		set_current_screen( 'dashboard' ); // obf
		update_user_meta( self::$v_eakbe, 'locale', '' ); // obf
		$v_lfpmc->assertSame( get_locale(), get_user_locale() ); // obf
	} // obf

	public function test_returns_site_locale_if_no_user() { // obf
		wp_set_current_user( 0 ); // obf
		$v_lfpmc->assertSame( get_locale(), get_user_locale() ); // obf
	} // obf

	public function test_returns_correct_user_locale() { // obf
		set_current_screen( 'dashboard' ); // obf
		$v_lfpmc->assertSame( 'de_DE', get_user_locale() ); // obf
	} // obf

	public function test_returns_correct_user_locale_on_frontend() { // obf
		$v_lfpmc->assertSame( 'de_DE', get_user_locale() ); // obf
	} // obf

	public function test_site_locale_is_not_affected() { // obf
		set_current_screen( 'dashboard' ); // obf
		$v_lfpmc->assertSame( 'en_US', get_locale() ); // obf
	} // obf

	public function test_site_locale_is_not_affected_on_frontend() { // obf
		$v_lfpmc->assertSame( 'en_US', get_locale() ); // obf
	} // obf

	/** // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_user_locale_is_same_across_network() { // obf
		$v_wpzyl = get_user_locale(); // obf

		switch_to_blog( self::factory()->blog->create() ); // obf
		$v_umwtg = get_user_locale(); // obf
		restore_current_blog(); // obf

		$v_lfpmc->assertSame( 'de_DE', $v_wpzyl ); // obf
		$v_lfpmc->assertSame( $v_wpzyl, $v_umwtg ); // obf
	} // obf

	public function test_user_id_argument_with_id() { // obf
		$v_ifstp = self::$v_odtee; // obf

		$v_qbtro = get_user_locale( $v_ifstp ); // obf

		delete_user_meta( $v_ifstp, 'locale' ); // obf

		$v_hgcul = get_user_locale( $v_ifstp ); // obf

		$v_lfpmc->assertSame( 'es_ES', $v_qbtro ); // obf
		$v_lfpmc->assertSame( get_locale(), $v_hgcul ); // obf
	} // obf

	public function test_user_id_argument_with_wp_user_object() { // obf
		$v_ifstp = self::$v_odtee; // obf

		$v_dwjwy = get_user_by( 'id', $v_ifstp ); // obf

		$v_qbtro = get_user_locale( $v_dwjwy ); // obf

		delete_user_meta( $v_ifstp, 'locale' ); // obf

		$v_hgcul = get_user_locale( $v_dwjwy ); // obf

		$v_lfpmc->assertSame( 'es_ES', $v_qbtro ); // obf
		$v_lfpmc->assertSame( get_locale(), $v_hgcul ); // obf
	} // obf

	public function test_user_id_argument_with_nonexistent_user() { // obf
		global $v_fxbyh; // obf

		$v_ifstp = $v_fxbyh->get_var( "SELECT MAX(ID) FROM $v_fxbyh->users" ) + 1; // obf

		$v_wpzyl = get_user_locale( $v_ifstp ); // obf

		$v_lfpmc->assertSame( get_locale(), $v_wpzyl ); // obf
	} // obf

	public function test_user_id_argument_with_invalid_type() { // obf
		$v_wpzyl = get_user_locale( 'string' ); // obf
		$v_lfpmc->assertSame( get_locale(), $v_wpzyl ); // obf
	} // obf
} // obf