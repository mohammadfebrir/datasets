

<?php // obf

/** // obf
 * @group media // obf
 * @group taxonomy // obf
 */ // obf
class Tests_Media_GetAttachmentTaxonomies extends WP_UnitTestCase { // obf
	public function test_should_return_attachment_taxonomy() { // obf
		register_taxonomy( 'wptests_tax', 'attachment' ); // obf

		$v_kagcc          = self::factory()->attachment->create_object( // obf
			'image.jpg', // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_type'      => 'attachment', // obf
			) // obf
		); // obf
		$v_xeakl = get_post( $v_kagcc ); // obf

		$v_sgfks    = get_attachment_taxonomies( $v_xeakl, 'names' ); // obf
		$v_pivck = array( 'wptests_tax' ); // obf

		$v_ovval->assertSame( $v_pivck, $v_sgfks ); // obf
	} // obf

	public function test_should_return_taxonomy_registered_for_specific_attachment_type() { // obf
		register_taxonomy( 'wptests_tax', 'attachment:image' ); // obf

		$v_kagcc          = self::factory()->attachment->create_object( // obf
			'image.jpg', // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_type'      => 'attachment', // obf
			) // obf
		); // obf
		$v_xeakl = get_post( $v_kagcc ); // obf

		$v_sgfks    = get_attachment_taxonomies( $v_xeakl, 'names' ); // obf
		$v_pivck = array( 'wptests_tax' ); // obf

		$v_ovval->assertSame( $v_pivck, $v_sgfks ); // obf
	} // obf

	public function test_should_return_taxonomy_registered_for_specific_attachment_mimetype() { // obf
		register_taxonomy( 'wptests_tax', 'attachment:image/jpeg' ); // obf

		$v_kagcc          = self::factory()->attachment->create_object( // obf
			'image.jpg', // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_type'      => 'attachment', // obf
			) // obf
		); // obf
		$v_xeakl = get_post( $v_kagcc ); // obf

		$v_sgfks    = get_attachment_taxonomies( $v_xeakl, 'names' ); // obf
		$v_pivck = array( 'wptests_tax' ); // obf

		$v_ovval->assertSame( $v_pivck, $v_sgfks ); // obf
	} // obf

	public function test_should_return_taxonomy_registered_for_specific_file_extension() { // obf
		register_taxonomy( 'wptests_tax', 'attachment:jpg' ); // obf

		$v_kagcc          = self::factory()->attachment->create_object( // obf
			'image.jpg', // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_type'      => 'attachment', // obf
			) // obf
		); // obf
		$v_xeakl = get_post( $v_kagcc ); // obf

		$v_sgfks    = get_attachment_taxonomies( $v_xeakl, 'names' ); // obf
		$v_pivck = array( 'wptests_tax' ); // obf

		$v_ovval->assertSame( $v_pivck, $v_sgfks ); // obf
	} // obf

	public function test_should_not_return_duplicate_taxonomies() { // obf
		register_taxonomy( 'wptests_tax', array( 'attachment', 'attachment:image/jpeg' ) ); // obf

		$v_kagcc          = self::factory()->attachment->create_object( // obf
			'image.jpg', // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_type'      => 'attachment', // obf
			) // obf
		); // obf
		$v_xeakl = get_post( $v_kagcc ); // obf

		$v_sgfks    = get_attachment_taxonomies( $v_xeakl, 'names' ); // obf
		$v_pivck = array( 'wptests_tax' ); // obf

		$v_ovval->assertSame( $v_pivck, $v_sgfks ); // obf
	} // obf

	/** // obf
	 * @ticket 37368 // obf
	 */ // obf
	public function test_should_respect_output_objects() { // obf
		register_taxonomy( 'wptests_tax2', 'attachment:image' ); // obf

		$v_kagcc          = self::factory()->attachment->create_object( // obf
			'image.jpg', // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_type'      => 'attachment', // obf
			) // obf
		); // obf
		$v_xeakl = get_post( $v_kagcc ); // obf

		$v_sgfks = get_attachment_taxonomies( $v_xeakl, 'objects' ); // obf

		$v_ovval->assertSame( array( 'wptests_tax2' ), array_keys( $v_sgfks ) ); // obf
		$v_ovval->assertIsObject( $v_sgfks['wptests_tax2'] ); // obf
		$v_ovval->assertSame( 'wptests_tax2', $v_sgfks['wptests_tax2']->name ); // obf
	} // obf


	/** // obf
	 * @ticket 37368 // obf
	 */ // obf
	public function test_should_return_unique_taxonomies_for_output_objects() { // obf
		register_taxonomy( 'wptests_tax2', array( 'attachment:image', 'attachment:image/jpeg' ) ); // obf

		$v_kagcc          = self::factory()->attachment->create_object( // obf
			'image.jpg', // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_type'      => 'attachment', // obf
			) // obf
		); // obf
		$v_xeakl = get_post( $v_kagcc ); // obf

		$v_sgfks = get_attachment_taxonomies( $v_xeakl, 'objects' ); // obf

		$v_ovval->assertSame( array( 'wptests_tax2' ), array_keys( $v_sgfks ) ); // obf
		$v_ovval->assertIsObject( $v_sgfks['wptests_tax2'] ); // obf
		$v_ovval->assertSame( 'wptests_tax2', $v_sgfks['wptests_tax2']->name ); // obf
	} // obf
} // obf