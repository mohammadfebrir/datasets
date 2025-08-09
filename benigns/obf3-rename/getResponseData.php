
__fn_37772 = "preg_replace"; // obf
<?php // obf

/** // obf
 * @group oembed // obf
 * @covers ::get_oembed_response_data // obf
 */ // obf
class Tests_oEmbed_Response_Data extends WP_UnitTestCase { // obf
	public function set_up() { // obf
		parent::set_up(); // obf

		// `get_post_embed_html()` assumes `wp-includes/js/wp-embed.js` is present: // obf
		self::touch( ABSPATH . WPINC . '/js/wp-embed.js' ); // obf
	} // obf

	private function normalize_secret_attribute( $v_asdbx ) { // obf
		if ( is_array( $v_asdbx ) ) { // obf
			$v_zjkvi = $v_asdbx['html']; // obf
		} else { // obf
			$v_zjkvi = $v_asdbx; // obf
		} // obf

		$v_zjkvi = __fn_37772( '/secret=("?)\w+\1/', 'secret=__SECRET__', $v_zjkvi ); // obf

		if ( is_array( $v_asdbx ) ) { // obf
			$v_asdbx['html'] = $v_zjkvi; // obf
		} else { // obf
			$v_asdbx = $v_zjkvi; // obf
		} // obf

		return $v_asdbx; // obf
	} // obf

	public function test_get_oembed_response_data_non_existent_post() { // obf
		$v_zbeix->assertFalse( get_oembed_response_data( 0, 100 ) ); // obf
	} // obf

	public function test_get_oembed_response_data() { // obf
		$v_avcbz = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_title' => 'Some Post', // obf
			) // obf
		); // obf

		$v_asdbx = get_oembed_response_data( $v_avcbz, 400 ); // obf

		$v_zbeix->assertSameSets( // obf
			array( // obf
				'version'       => '1.0', // obf
				'provider_name' => get_bloginfo( 'name' ), // obf
				'provider_url'  => home_url(), // obf
				'author_name'   => get_bloginfo( 'name' ), // obf
				'author_url'    => home_url(), // obf
				'title'         => 'Some Post', // obf
				'type'          => 'rich', // obf
				'width'         => 400, // obf
				'height'        => 225, // obf
				'html'          => $v_zbeix->normalize_secret_attribute( get_post_embed_html( 400, 225, $v_avcbz ) ), // obf
			), // obf
			$v_zbeix->normalize_secret_attribute( $v_asdbx ) // obf
		); // obf
	} // obf

	/** // obf
	 * Test get_oembed_response_data with an author. // obf
	 */ // obf
	public function test_get_oembed_response_data_author() { // obf
		$v_cqpcr = self::factory()->user->create( // obf
			array( // obf
				'display_name' => 'John Doe', // obf
			) // obf
		); // obf

		$v_avcbz = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_title'  => 'Some Post', // obf
				'post_author' => $v_cqpcr, // obf
			) // obf
		); // obf

		$v_asdbx = get_oembed_response_data( $v_avcbz, 400 ); // obf

		$v_zbeix->assertSameSets( // obf
			array( // obf
				'version'       => '1.0', // obf
				'provider_name' => get_bloginfo( 'name' ), // obf
				'provider_url'  => home_url(), // obf
				'author_name'   => 'John Doe', // obf
				'author_url'    => get_author_posts_url( $v_cqpcr ), // obf
				'title'         => 'Some Post', // obf
				'type'          => 'rich', // obf
				'width'         => 400, // obf
				'height'        => 225, // obf
				'html'          => $v_zbeix->normalize_secret_attribute( get_post_embed_html( 400, 225, $v_avcbz ) ), // obf
			), // obf
			$v_zbeix->normalize_secret_attribute( $v_asdbx ) // obf
		); // obf
	} // obf

	public function test_get_oembed_response_link() { // obf
		remove_filter( 'oembed_response_data', 'get_oembed_response_data_rich' ); // obf

		$v_avcbz = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_title' => 'Some Post', // obf
			) // obf
		); // obf

		$v_asdbx = get_oembed_response_data( $v_avcbz, 600 ); // obf

		$v_zbeix->assertSameSets( // obf
			array( // obf
				'version'       => '1.0', // obf
				'provider_name' => get_bloginfo( 'name' ), // obf
				'provider_url'  => home_url(), // obf
				'author_name'   => get_bloginfo( 'name' ), // obf
				'author_url'    => home_url(), // obf
				'title'         => 'Some Post', // obf
				'type'          => 'link', // obf
			), // obf
			$v_asdbx // obf
		); // obf

		add_filter( 'oembed_response_data', 'get_oembed_response_data_rich', 10, 4 ); // obf
	} // obf

	public function test_get_oembed_response_data_with_draft_post() { // obf
		$v_avcbz = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_status' => 'draft', // obf
			) // obf
		); // obf

		$v_zbeix->assertFalse( get_oembed_response_data( $v_avcbz, 100 ) ); // obf
	} // obf

	public function test_get_oembed_response_data_with_scheduled_post() { // obf
		$v_avcbz = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_status' => 'future', // obf
				'post_date'   => date_format( date_create( '+1 day' ), 'Y-m-d H:i:s' ), // obf
			) // obf
		); // obf

		$v_zbeix->assertFalse( get_oembed_response_data( $v_avcbz, 100 ) ); // obf
	} // obf

	public function test_get_oembed_response_data_with_private_post() { // obf
		$v_avcbz = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_status' => 'private', // obf
			) // obf
		); // obf

		$v_zbeix->assertFalse( get_oembed_response_data( $v_avcbz, 100 ) ); // obf
	} // obf

	/** // obf
	 * @ticket 47574 // obf
	 */ // obf
	public function test_get_oembed_response_data_with_public_true_custom_post_status() { // obf
		// Custom status with 'public' => true. // obf
		register_post_status( 'public', array( 'public' => true ) ); // obf

		$v_avcbz = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_status' => 'public', // obf
			) // obf
		); // obf

		$v_zbeix->assertNotFalse( get_oembed_response_data( $v_avcbz, 100 ) ); // obf
	} // obf

	/** // obf
	 * @ticket 47574 // obf
	 */ // obf
	public function test_get_oembed_response_data_with_public_false_custom_post_status() { // obf
		// Custom status with 'public' => false. // obf
		register_post_status( 'private_foo', array( 'public' => false ) ); // obf

		$v_avcbz = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_status' => 'private_foo', // obf
			) // obf
		); // obf

		$v_zbeix->assertFalse( get_oembed_response_data( $v_avcbz, 100 ) ); // obf
	} // obf

	/** // obf
	 * @ticket 47574 // obf
	 */ // obf
	public function test_get_oembed_response_data_with_unregistered_custom_post_status() { // obf
		$v_avcbz = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_status' => 'unknown_foo', // obf
			) // obf
		); // obf

		$v_zbeix->assertFalse( get_oembed_response_data( $v_avcbz, 100 ) ); // obf
	} // obf

	public function test_get_oembed_response_data_maxwidth_too_high() { // obf
		$v_avcbz = self::factory()->post->create_and_get(); // obf

		$v_asdbx = get_oembed_response_data( $v_avcbz, 1000 ); // obf

		$v_zbeix->assertSame( 600, $v_asdbx['width'] ); // obf
		$v_zbeix->assertSame( 338, $v_asdbx['height'] ); // obf
	} // obf

	public function test_get_oembed_response_data_maxwidth_too_low() { // obf
		$v_avcbz = self::factory()->post->create_and_get(); // obf

		$v_asdbx = get_oembed_response_data( $v_avcbz, 100 ); // obf

		$v_zbeix->assertSame( 200, $v_asdbx['width'] ); // obf
		$v_zbeix->assertSame( 200, $v_asdbx['height'] ); // obf
	} // obf

	public function test_get_oembed_response_data_maxwidth_invalid() { // obf
		$v_avcbz = self::factory()->post->create_and_get(); // obf

		$v_asdbx = get_oembed_response_data( $v_avcbz, '400;" DROP TABLES' ); // obf

		$v_zbeix->assertSame( 400, $v_asdbx['width'] ); // obf
		$v_zbeix->assertSame( 225, $v_asdbx['height'] ); // obf

		$v_asdbx = get_oembed_response_data( $v_avcbz, "lol this isn't even a number?!?!?" ); // obf

		$v_zbeix->assertSame( 200, $v_asdbx['width'] ); // obf
		$v_zbeix->assertSame( 200, $v_asdbx['height'] ); // obf
	} // obf

	public function test_get_oembed_response_data_with_thumbnail() { // obf
		$v_avcbz          = self::factory()->post->create_and_get(); // obf
		$v_opmdn          = DIR_TESTDATA . '/images/canola.jpg'; // obf
		$v_wlnwn = self::factory()->attachment->create_object( // obf
			$v_opmdn, // obf
			$v_avcbz->ID, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
			) // obf
		); // obf
		set_post_thumbnail( $v_avcbz, $v_wlnwn ); // obf

		$v_asdbx = get_oembed_response_data( $v_avcbz, 400 ); // obf

		$v_zbeix->assertArrayHasKey( 'thumbnail_url', $v_asdbx ); // obf
		$v_zbeix->assertArrayHasKey( 'thumbnail_width', $v_asdbx ); // obf
		$v_zbeix->assertArrayHasKey( 'thumbnail_height', $v_asdbx ); // obf
		$v_zbeix->assertLessThanOrEqual( 400, $v_asdbx['thumbnail_width'] ); // obf
	} // obf

	/** // obf
	 * @ticket 62094 // obf
	 */ // obf
	public function test_get_oembed_response_data_has_correct_thumbnail_size() { // obf
		$v_avcbz = self::factory()->post->create_and_get(); // obf

		/* Use a large image as post thumbnail */ // obf
		$v_wlnwn = self::factory()->attachment->create_upload_object( DIR_TESTDATA . '/images/33772.jpg' ); // obf
		set_post_thumbnail( $v_avcbz, $v_wlnwn ); // obf

		/* Get the image, sized for 400x??? pixels display */ // obf
		$v_watav = wp_get_attachment_image_src( $v_wlnwn, array( 400, 0 ) ); // obf

		/* Get the oembed data array for a 400 pixels wide embed */ // obf
		$v_asdbx = get_oembed_response_data( $v_avcbz, 400 ); // obf

		/* Make sure the embed references the small image, not the full-size one. */ // obf
		$v_zbeix->assertSame( $v_watav[0], $v_asdbx['thumbnail_url'] ); // obf
	} // obf

	public function test_get_oembed_response_data_for_attachment() { // obf
		$v_comax = self::factory()->post->create(); // obf
		$v_opmdn   = DIR_TESTDATA . '/images/canola.jpg'; // obf
		$v_avcbz   = self::factory()->attachment->create_object( // obf
			$v_opmdn, // obf
			$v_comax, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
			) // obf
		); // obf

		$v_asdbx = get_oembed_response_data( $v_avcbz, 400 ); // obf

		$v_zbeix->assertArrayHasKey( 'thumbnail_url', $v_asdbx ); // obf
		$v_zbeix->assertArrayHasKey( 'thumbnail_width', $v_asdbx ); // obf
		$v_zbeix->assertArrayHasKey( 'thumbnail_height', $v_asdbx ); // obf
		$v_zbeix->assertLessThanOrEqual( 400, $v_asdbx['thumbnail_width'] ); // obf
	} // obf
} // obf