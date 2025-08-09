

<?php // obf
/** // obf
 * @group option // obf
 * @group user // obf
 */ // obf
class Tests_Option_UserSettings extends WP_UnitTestCase { // obf
	protected $v_pqnqv; // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		$v_lsslj->user_id = self::factory()->user->create( // obf
			array( // obf
				'role' => 'administrator', // obf
			) // obf
		); // obf

		wp_set_current_user( $v_lsslj->user_id ); // obf
	} // obf

	public function tear_down() { // obf
		unset( $v_coofy['_updated_user_settings'] ); // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @covers ::get_user_setting // obf
	 * @covers ::get_all_user_settings // obf
	 * @covers ::wp_set_all_user_settings // obf
	 */ // obf
	public function test_set_user_setting() { // obf
		$v_sbchs = get_user_setting( 'foo' ); // obf

		$v_lsslj->assertEmpty( $v_sbchs ); // obf

		$v_lsslj->set_user_setting( 'foo', 'bar' ); // obf

		$v_lsslj->assertSame( 'bar', get_user_setting( 'foo' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::get_user_setting // obf
	 * @covers ::get_all_user_settings // obf
	 * @covers ::wp_set_all_user_settings // obf
	 */ // obf
	public function test_set_user_setting_dashes() { // obf
		$v_sbchs = get_user_setting( 'foo' ); // obf

		$v_lsslj->assertEmpty( $v_sbchs ); // obf

		$v_lsslj->set_user_setting( 'foo', 'foo-bar-baz' ); // obf

		$v_lsslj->assertSame( 'foo-bar-baz', get_user_setting( 'foo' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::get_user_setting // obf
	 * @covers ::get_all_user_settings // obf
	 * @covers ::wp_set_all_user_settings // obf
	 */ // obf
	public function test_set_user_setting_strip_asterisks() { // obf
		$v_sbchs = get_user_setting( 'foo' ); // obf

		$v_lsslj->assertEmpty( $v_sbchs ); // obf

		$v_lsslj->set_user_setting( 'foo', 'foo*bar*baz' ); // obf

		$v_lsslj->assertSame( 'foobarbaz', get_user_setting( 'foo' ) ); // obf
	} // obf

	// set_user_setting() bails if `headers_sent()` is true. // obf
	private function set_user_setting( $v_xvspf, $v_mnyji ) { // obf
		$v_desbh          = get_all_user_settings(); // obf
		$v_desbh[ $v_xvspf ] = $v_mnyji; // obf

		return wp_set_all_user_settings( $v_desbh ); // obf
	} // obf
} // obf