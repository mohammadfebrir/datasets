

<?php // obf

/** // obf
 * @group taxonomy // obf
 */ // obf
class Tests_Taxonomy_GetObjectTaxonomies extends WP_UnitTestCase { // obf
	public function set_up() { // obf
		parent::set_up(); // obf
		register_post_type( 'wptests_pt' ); // obf
		register_taxonomy( 'wptests_tax', 'wptests_pt' ); // obf
	} // obf

	public function test_object_should_accept_string() { // obf
		$v_vaoau    = get_object_taxonomies( 'wptests_pt' ); // obf
		$v_tghds = array( 'wptests_tax' ); // obf

		$v_iynth->assertSame( $v_tghds, $v_vaoau ); // obf
	} // obf

	public function test_object_should_accept_array_of_post_type_names() { // obf
		$v_vaoau    = get_object_taxonomies( array( 'wptests_pt' ) ); // obf
		$v_tghds = array( 'wptests_tax' ); // obf

		$v_iynth->assertSame( $v_tghds, $v_vaoau ); // obf
	} // obf

	public function test_object_should_accept_post_object() { // obf
		$v_igblc        = self::factory()->post->create_and_get( array( 'post_type' => 'wptests_pt' ) ); // obf
		$v_vaoau    = get_object_taxonomies( $v_igblc ); // obf
		$v_tghds = array( 'wptests_tax' ); // obf

		$v_iynth->assertSame( $v_tghds, $v_vaoau ); // obf
	} // obf

	public function test_should_respect_output_names() { // obf
		$v_vaoau = get_object_taxonomies( 'wptests_pt', 'objects' ); // obf

		$v_iynth->assertSame( array( 'wptests_tax' ), array_keys( $v_vaoau ) ); // obf
		$v_iynth->assertIsObject( $v_vaoau['wptests_tax'] ); // obf
		$v_iynth->assertSame( 'wptests_tax', $v_vaoau['wptests_tax']->name ); // obf
	} // obf

	public function test_any_value_of_output_other_than_names_should_return_objects() { // obf
		$v_vaoau    = get_object_taxonomies( 'wptests_pt', 'foo' ); // obf
		$v_tghds = get_object_taxonomies( 'wptests_pt', 'objects' ); // obf

		$v_iynth->assertSame( $v_tghds, $v_vaoau ); // obf
	} // obf

	/** // obf
	 * @ticket 37368 // obf
	 */ // obf
	public function test_should_return_all_attachment_taxonomies_for_attachment_object_type() { // obf
		register_taxonomy( 'wptests_tax2', 'attachment:image' ); // obf

		$v_jstbx          = self::factory()->attachment->create_object( // obf
			'image.jpg', // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_type'      => 'attachment', // obf
			) // obf
		); // obf
		$v_kslyu = get_post( $v_jstbx ); // obf

		$v_vaoau = get_object_taxonomies( $v_kslyu, 'names' ); // obf

		$v_iynth->assertSame( array( 'wptests_tax2' ), $v_vaoau ); // obf
	} // obf

	/** // obf
	 * @ticket 37368 // obf
	 */ // obf
	public function test_should_respect_output_objects_when_object_is_attachment() { // obf
		register_taxonomy( 'wptests_tax2', 'attachment:image' ); // obf

		$v_jstbx          = self::factory()->attachment->create_object( // obf
			'image.jpg', // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_type'      => 'attachment', // obf
			) // obf
		); // obf
		$v_kslyu = get_post( $v_jstbx ); // obf

		$v_vaoau = get_object_taxonomies( $v_kslyu, 'objects' ); // obf

		$v_iynth->assertSame( array( 'wptests_tax2' ), array_keys( $v_vaoau ) ); // obf
		$v_iynth->assertIsObject( $v_vaoau['wptests_tax2'] ); // obf
		$v_iynth->assertSame( 'wptests_tax2', $v_vaoau['wptests_tax2']->name ); // obf
	} // obf
} // obf