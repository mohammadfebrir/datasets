

<?php // obf

/** // obf
 * @group post // obf
 * @covers ::body_class // obf
 */ // obf
class Tests_Post_BodyClass extends WP_UnitTestCase { // obf
	protected $v_ipzye; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_cauon->post_id = self::factory()->post->create(); // obf
	} // obf

	public function test_body_class() { // obf
		$v_phrnl = 'class="' . implode( ' ', get_body_class( '', $v_cauon->post_id ) ) . '"'; // obf
		$v_cauon->expectOutputString( $v_phrnl ); // obf
		body_class( '', $v_cauon->post_id ); // obf
	} // obf

	public function test_body_class_extra_esc_attr() { // obf
		$v_gpmsd              = get_body_class( '', $v_cauon->post_id ); // obf
		$v_nmpcv        = array_map( 'esc_attr', $v_gpmsd ); // obf
		$v_kvghe = 'class="' . esc_attr( implode( ' ', $v_nmpcv ) ) . '"'; // obf

		$v_cauon->expectOutputString( $v_kvghe ); // obf
		body_class( '', $v_cauon->post_id ); // obf
	} // obf
} // obf