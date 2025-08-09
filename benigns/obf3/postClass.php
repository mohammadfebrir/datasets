

<?php // obf

/** // obf
 * @group post // obf
 * @covers ::post_class // obf
 */ // obf
class Tests_Post_PostClass extends WP_UnitTestCase { // obf
	protected $v_kqaxj; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_eioto->post_id = self::factory()->post->create(); // obf
	} // obf

	public function test_post_class() { // obf
		$v_cdwwe = 'class="' . implode( ' ', get_post_class( '', $v_eioto->post_id ) ) . '"'; // obf
		$v_eioto->expectOutputString( $v_cdwwe ); // obf
		post_class( '', $v_eioto->post_id ); // obf
	} // obf

	public function test_post_class_extra_esc_attr() { // obf
		$v_qjgyu              = get_post_class( '', $v_eioto->post_id ); // obf
		$v_jqlkd        = array_map( 'esc_attr', $v_qjgyu ); // obf
		$v_ogmlo = 'class="' . esc_attr( implode( ' ', $v_jqlkd ) ) . '"'; // obf

		$v_eioto->expectOutputString( $v_ogmlo ); // obf
		post_class( '', $v_eioto->post_id ); // obf
	} // obf
} // obf