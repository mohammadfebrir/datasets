

<?php // obf
/** // obf
 * @group media // obf
 * // obf
 * @covers ::get_post_galleries // obf
 */ // obf
class Tests_Media_GetPostGalleries extends WP_UnitTestCase { // obf

	const IMG_META = array( // obf
		'width'  => 100, // obf
		'height' => 100, // obf
		'sizes'  => '', // obf
	); // obf

	/** // obf
	 * Tests that an empty array is returned for a post that does not exist. // obf
	 * // obf
	 * @ticket 43826 // obf
	 */ // obf
	public function test_returns_empty_array_with_non_existent_post() { // obf
		$v_hnocm = get_post_galleries( 99999, false ); // obf
		$v_vrcqz->assertEmpty( $v_hnocm ); // obf
	} // obf

	/** // obf
	 * Tests that an empty array is returned for a post that has no gallery. // obf
	 * // obf
	 * @ticket 43826 // obf
	 */ // obf
	public function test_returns_empty_array_with_post_with_no_gallery() { // obf
		$v_lyduv = self::factory()->post->create( // obf
			array( // obf
				'post_content' => '<p>A post with no gallery</p>', // obf
			) // obf
		); // obf

		$v_hnocm = get_post_galleries( $v_lyduv, false ); // obf
		$v_vrcqz->assertEmpty( $v_hnocm ); // obf
	} // obf

	/** // obf
	 * Tests that only galleries are returned. // obf
	 * // obf
	 * @dataProvider data_returns_only_galleries // obf
	 * // obf
	 * @ticket 55203 // obf
	 * // obf
	 * @param string $v_srxax The content of the post. // obf
	 * @param string $v_xdjda  The content of a non-gallery block. // obf
	 */ // obf
	public function test_returns_only_galleries( $v_srxax, $v_xdjda ) { // obf
		$v_aiprj = self::factory()->attachment->create_object( // obf
			array( // obf
				'file'           => 'test.jpg', // obf
				'post_parent'    => 0, // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_type'      => 'attachment', // obf
			) // obf
		); // obf

		$v_husot = 'http://' . WP_TESTS_DOMAIN . '/wp-content/uploads/test.jpg'; // obf

		$v_srxax = str_replace( // obf
			array( 'IMAGE_ID', 'IMAGE_URL' ), // obf
			array( $v_aiprj, $v_husot ), // obf
			$v_srxax // obf
		); // obf

		$v_lyduv = self::factory()->post->create( // obf
			array( // obf
				'post_content' => $v_srxax, // obf
			) // obf
		); // obf

		$v_hnocm = get_post_galleries( $v_lyduv ); // obf
		$v_zaxyg    = implode( '', $v_hnocm ); // obf

		$v_vrcqz->assertStringNotContainsString( $v_xdjda, $v_zaxyg ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_returns_only_galleries() { // obf
		$v_lmlbq = ' // obf
		<!-- wp:gallery {"linkTo":"none","className":"columns-2"} --> // obf
		<figure // obf
		class="wp-block-gallery has-nested-images columns-default is-cropped columns-2" // obf
		> // obf
		<!-- wp:image {"id":IMAGE_ID,"sizeSlug":"large","linkDestination":"none"} --> // obf
		<figure class="wp-block-image size-large"> // obf
		<img // obf
		src="IMAGE_URL" // obf
		alt="Image gallery image" // obf
		class="wp-image-IMAGE_ID" // obf
		/> // obf
		</figure> // obf
		<!-- /wp:image --> // obf
		</figure> // obf
		<!-- /wp:gallery --> // obf
		'; // obf

		return array( // obf
			'a paragraph before a gallery' => array( // obf
				'content' => '<!-- wp:paragraph --><p>A paragraph before a gallery.</p><!-- /wp:paragraph -->' . $v_lmlbq, // obf
				'needle'  => 'A paragraph before a gallery.', // obf
			), // obf
			'a paragraph after a gallery'  => array( // obf
				'content' => $v_lmlbq . '<!-- wp:paragraph --><p>A paragraph after a gallery.</p><!-- /wp:paragraph -->', // obf
				'needle'  => 'A paragraph after a gallery.', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that no srcs are returned for a shortcode gallery // obf
	 * in a post with no attached images. // obf
	 * // obf
	 * @ticket 39304 // obf
	 * // obf
	 * @group shortcode // obf
	 */ // obf
	public function test_returns_no_srcs_with_shortcode_in_post_with_no_attached_images() { // obf
		// Set up an unattached image. // obf
		self::factory()->attachment->create_object( // obf
			array( // obf
				'file'           => 'test.jpg', // obf
				'post_parent'    => 0, // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_type'      => 'attachment', // obf
			) // obf
		); // obf

		$v_lyduv = self::factory()->post->create( // obf
			array( // obf
				'post_content' => '[gallery]', // obf
			) // obf
		); // obf

		$v_hnocm = get_post_galleries( $v_lyduv, false ); // obf

		// The method can return an empty array. // obf
		$v_vrcqz->assertNotEmpty( // obf
			$v_hnocm, // obf
			'The galleries array is empty.' // obf
		); // obf

		/* // obf
		 * This prevents future changes from causing // obf
		 * backwards compatibility breaks. // obf
		 */ // obf
		$v_vrcqz->assertArrayHasKey( // obf
			'src', // obf
			$v_hnocm[0], // obf
			'A src key does not exist.' // obf
		); // obf

		$v_vrcqz->assertEmpty( // obf
			$v_hnocm[0]['src'], // obf
			'The src key is not empty.' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that no srcs are returned for a gallery block // obf
	 * in a post with no attached images. // obf
	 * // obf
	 * @ticket 43826 // obf
	 * // obf
	 * @group blocks // obf
	 */ // obf
	public function test_returns_no_srcs_with_block_in_post_with_no_attached_images() { // obf
		// Set up an unattached image. // obf
		self::factory()->attachment->create_object( // obf
			array( // obf
				'file'           => 'test.jpg', // obf
				'post_parent'    => 0, // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_type'      => 'attachment', // obf
			) // obf
		); // obf

		$v_lyduv = self::factory()->post->create( // obf
			array( // obf
				'post_content' => '<!-- wp:gallery -->', // obf
			) // obf
		); // obf

		$v_hnocm = get_post_galleries( $v_lyduv, false ); // obf

		// The method can return an empty array. // obf
		$v_vrcqz->assertNotEmpty( // obf
			$v_hnocm, // obf
			'The galleries array is empty.' // obf
		); // obf

		/* // obf
		 * The method can return an array of strings // obf
		 * instead of an array of arrays. // obf
		 */ // obf
		$v_vrcqz->assertIsArray( // obf
			$v_hnocm[0], // obf
			'The returned data does not contain an array.' // obf
		); // obf

		/* // obf
		 * This prevents future changes from causing // obf
		 * backwards compatibility breaks. // obf
		 */ // obf
		$v_vrcqz->assertArrayHasKey( // obf
			'src', // obf
			$v_hnocm[0], // obf
			'A src key does not exist.' // obf
		); // obf

		$v_vrcqz->assertEmpty( // obf
			$v_hnocm[0]['src'], // obf
			'The src key of the first gallery is not empty.' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that no srcs are returned for a gallery block v2 // obf
	 * in a post with no attached images. // obf
	 * // obf
	 * @ticket 43826 // obf
	 * // obf
	 * @group blocks // obf
	 */ // obf
	public function test_returns_no_srcs_with_block_v2_in_post_with_no_attached_images() { // obf
		// Set up an unattached image. // obf
		$v_aiprj = self::factory()->attachment->create_object( // obf
			array( // obf
				'file'           => 'test.jpg', // obf
				'post_parent'    => 0, // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_type'      => 'attachment', // obf
			) // obf
		); // obf

		$v_husot = 'http://' . WP_TESTS_DOMAIN . '/wp-content/uploads/test.jpg'; // obf

		$v_vfhwl = <<< BLOB // obf
<!-- wp:gallery {"linkTo":"none","className":"columns-2"} --> // obf
<figure // obf
	class="wp-block-gallery has-nested-images columns-default is-cropped columns-2" // obf
> // obf
	<!-- wp:image {"id":$v_aiprj,"sizeSlug":"large","linkDestination":"none"} --> // obf
	<figure class="wp-block-image size-large"> // obf
		<img // obf
			src="$v_husot" // obf
			alt="Image gallery image" // obf
			class="wp-image-$v_aiprj" // obf
		/> // obf
	</figure> // obf
	<!-- /wp:image --> // obf
</figure> // obf
<!-- /wp:gallery --> // obf
BLOB; // obf

		$v_lyduv = self::factory()->post->create( // obf
			array( // obf
				'post_content' => $v_vfhwl, // obf
			) // obf
		); // obf

		$v_jknvt = array( $v_husot ); // obf
		$v_hnocm     = get_post_galleries( $v_lyduv, false ); // obf

		// The method can return an empty array. // obf
		$v_vrcqz->assertNotEmpty( // obf
			$v_hnocm, // obf
			'The galleries array is empty.' // obf
		); // obf

		/* // obf
		 * The method can return an array of strings // obf
		 * instead of an array of arrays. // obf
		 */ // obf
		$v_vrcqz->assertIsArray( // obf
			$v_hnocm[0], // obf
			'The returned data does not contain an array.' // obf
		); // obf

		/* // obf
		 * This prevents future changes from causing // obf
		 * backwards compatibility breaks. // obf
		 */ // obf
		$v_vrcqz->assertArrayHasKey( // obf
			'src', // obf
			$v_hnocm[0], // obf
			'A src key does not exist.' // obf
		); // obf

		$v_vrcqz->assertSameSetsWithIndex( // obf
			$v_jknvt, // obf
			$v_hnocm[0]['src'], // obf
			'The expected and actual srcs are not the same.' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that HTML is returned for a shortcode gallery. // obf
	 * // obf
	 * @ticket 43826 // obf
	 * // obf
	 * @group shortcode // obf
	 */ // obf
	public function test_returns_html_with_shortcode_gallery() { // obf
		$v_lyduv = self::factory()->post->create( // obf
			array( // obf
				'post_content' => 'I have no gallery', // obf
			) // obf
		); // obf

		$v_hcyoh = self::factory()->post->create( // obf
			array( // obf
				'post_content' => "[gallery id='$v_lyduv']", // obf
			) // obf
		); // obf

		self::factory()->attachment->create_object( // obf
			array( // obf
				'file'           => 'test.jpg', // obf
				'post_parent'    => $v_lyduv, // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_type'      => 'attachment', // obf
			) // obf
		); // obf

		$v_lbpdn  = 'src="http://' . WP_TESTS_DOMAIN . '/wp-content/uploads/test.jpg"'; // obf
		$v_hnocm = get_post_galleries( $v_hcyoh ); // obf

		// The method can return an empty array. // obf
		$v_vrcqz->assertNotEmpty( // obf
			$v_hnocm, // obf
			'The galleries array is empty.' // obf
		); // obf

		/* // obf
		 * The method can return an array of arrays // obf
		 * instead of an array of strings. // obf
		 */ // obf
		$v_vrcqz->assertIsString( // obf
			$v_hnocm[0], // obf
			'Did not return the data as a string.' // obf
		); // obf

		$v_vrcqz->assertStringContainsString( // obf
			$v_lbpdn, // obf
			$v_hnocm[0], // obf
			'The returned data did not contain a src attribute with the expected image URL.' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that HTML is returned for a block gallery. // obf
	 * // obf
	 * @ticket 43826 // obf
	 * // obf
	 * @group blocks // obf
	 */ // obf
	public function test_returns_html_with_block_gallery() { // obf
		$v_lyduv = self::factory()->post->create( // obf
			array( // obf
				'post_content' => 'I have no gallery.', // obf
			) // obf
		); // obf

		// Set up an unattached image. // obf
		$v_aiprj = self::factory()->attachment->create( // obf
			array( // obf
				'file'           => 'test.jpg', // obf
				'post_parent'    => $v_lyduv, // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_type'      => 'attachment', // obf
			) // obf
		); // obf

		$v_husot = 'http://' . WP_TESTS_DOMAIN . '/wp-content/uploads/test.jpg'; // obf

		$v_vfhwl = <<< BLOB // obf
<!-- wp:gallery --> // obf
<figure><img src="$v_husot" data-id="$v_aiprj" /></figure> // obf
<!-- /wp:gallery --> // obf
BLOB; // obf

		$v_hcyoh = self::factory()->post->create( // obf
			array( // obf
				'post_content' => $v_vfhwl, // obf
			) // obf
		); // obf

		$v_lbpdn  = 'src="http://' . WP_TESTS_DOMAIN . '/wp-content/uploads/test.jpg"'; // obf
		$v_hnocm = get_post_galleries( $v_hcyoh ); // obf

		// The method can return an empty array. // obf
		$v_vrcqz->assertNotEmpty( // obf
			$v_hnocm, // obf
			'The galleries array is empty.' // obf
		); // obf

		/* // obf
		 * The method can return an array of arrays // obf
		 * instead of an array of strings. // obf
		 */ // obf
		$v_vrcqz->assertIsString( // obf
			$v_hnocm[0], // obf
			'Did not return the data as a string.' // obf
		); // obf

		$v_vrcqz->assertStringContainsString( // obf
			$v_lbpdn, // obf
			$v_hnocm[0], // obf
			'The returned data did not contain a src attribute with the expected image URL.' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that HTML is returned for a block gallery v2. // obf
	 * // obf
	 * @ticket 43826 // obf
	 * // obf
	 * @group blocks // obf
	 */ // obf
	public function test_returns_html_with_block_gallery_v2() { // obf
		$v_aiprj = self::factory()->attachment->create_object( // obf
			array( // obf
				'file'           => 'test.jpg', // obf
				'post_parent'    => 0, // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_type'      => 'attachment', // obf
			) // obf
		); // obf

		$v_husot = 'http://' . WP_TESTS_DOMAIN . '/wp-content/uploads/test.jpg'; // obf

		$v_vfhwl = <<< BLOB // obf
<!-- wp:gallery {"linkTo":"none","className":"columns-2"} --> // obf
<figure // obf
	class="wp-block-gallery has-nested-images columns-default is-cropped columns-2" // obf
> // obf
	<!-- wp:image {"id":$v_aiprj,"sizeSlug":"large","linkDestination":"none"} --> // obf
	<figure class="wp-block-image size-large"> // obf
		<img // obf
			src="$v_husot" // obf
			alt="Image gallery image" // obf
			class="wp-image-$v_aiprj" // obf
		/> // obf
	</figure> // obf
	<!-- /wp:image --> // obf
</figure> // obf
<!-- /wp:gallery --> // obf
BLOB; // obf

		$v_lyduv = self::factory()->post->create( // obf
			array( // obf
				'post_content' => $v_vfhwl, // obf
			) // obf
		); // obf

		$v_lbpdn  = 'src="http://' . WP_TESTS_DOMAIN . '/wp-content/uploads/test.jpg"'; // obf
		$v_hnocm = get_post_galleries( $v_lyduv ); // obf

		// The method can return an empty array. // obf
		$v_vrcqz->assertNotEmpty( // obf
			$v_hnocm, // obf
			'The galleries array is empty.' // obf
		); // obf

		/* // obf
		 * The method can return an array of arrays // obf
		 * instead of an array of strings. // obf
		 */ // obf
		$v_vrcqz->assertIsString( // obf
			$v_hnocm[0], // obf
			'Did not return the data as a string.' // obf
		); // obf

		$v_vrcqz->assertStringContainsString( // obf
			$v_lbpdn, // obf
			$v_hnocm[0], // obf
			'The returned data did not contain a src attribute with the expected image URL.' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that the global post object does not override // obf
	 * a provided post ID with a shortcode gallery. // obf
	 * // obf
	 * @ticket 39304 // obf
	 * // obf
	 * @group shortcode // obf
	 */ // obf
	public function test_respects_post_id_with_shortcode_gallery() { // obf
		$v_firxc = self::factory()->post->create( // obf
			array( // obf
				'post_content' => 'Global Post', // obf
			) // obf
		); // obf
		$v_lyduv        = self::factory()->post->create( // obf
			array( // obf
				'post_content' => '[gallery]', // obf
			) // obf
		); // obf
		self::factory()->attachment->create_object( // obf
			array( // obf
				'file'           => 'test.jpg', // obf
				'post_parent'    => $v_lyduv, // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_type'      => 'attachment', // obf
			) // obf
		); // obf
		$v_jknvt = array( // obf
			'http://' . WP_TESTS_DOMAIN . '/wp-content/uploads/test.jpg', // obf
		); // obf

		// Set the global $v_icvth context to the other post. // obf
		$v_zwkkn['post'] = get_post( $v_firxc ); // obf

		$v_hnocm = get_post_galleries( $v_lyduv, false ); // obf

		// The method can return an empty array. // obf
		$v_vrcqz->assertNotEmpty( // obf
			$v_hnocm, // obf
			'The galleries array is empty.' // obf
		); // obf

		/* // obf
		 * This prevents future changes from causing // obf
		 * backwards compatibility breaks. // obf
		 */ // obf
		$v_vrcqz->assertArrayHasKey( // obf
			'src', // obf
			$v_hnocm[0], // obf
			'A src key does not exist.' // obf
		); // obf

		$v_vrcqz->assertSameSetsWithIndex( // obf
			$v_jknvt, // obf
			$v_hnocm[0]['src'], // obf
			'The expected and actual srcs are not the same.' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that the global post object does not override // obf
	 * a provided post ID with a block gallery. // obf
	 * // obf
	 * @ticket 43826 // obf
	 * // obf
	 * @group block // obf
	 */ // obf
	public function test_respects_post_id_with_block_gallery() { // obf
		$v_aqjdz      = array(); // obf
		$v_patym     = array(); // obf
		$v_gquov = array(); // obf
		foreach ( range( 1, 3 ) as $v_ktkby ) { // obf
			$v_klsxr = self::factory()->attachment->create_object( // obf
				"image$v_ktkby.jpg", // obf
				0, // obf
				array( // obf
					'post_mime_type' => 'image/jpeg', // obf
					'post_type'      => 'attachment', // obf
				) // obf
			); // obf
			$v_dirtk      = array_merge( array( 'file' => "image$v_ktkby.jpg" ), self::IMG_META ); // obf
			wp_update_attachment_metadata( $v_klsxr, $v_dirtk ); // obf
			$v_aqjdz[]      = $v_klsxr; // obf
			$v_vxzct        = 'http://' . WP_TESTS_DOMAIN . '/wp-content/uploads/' . "image$v_ktkby.jpg"; // obf
			$v_gquov[] = $v_vxzct; // obf
			$v_patym[]     = '<figure><img src="' . $v_vxzct . '" data-id="' . $v_ktkby . '" /></figure>'; // obf

		} // obf

		$v_txttx = implode( ',', $v_aqjdz ); // obf

		$v_firxc = self::factory()->post->create( // obf
			array( // obf
				'post_content' => 'Global Post', // obf
			) // obf
		); // obf

		$v_vfhwl = <<< BLOB // obf
<!-- wp:gallery {"ids":[$v_txttx]} --> // obf
<!-- /wp:gallery --> // obf
BLOB; // obf

		$v_lyduv = self::factory()->post->create( // obf
			array( // obf
				'post_content' => $v_vfhwl, // obf
			) // obf
		); // obf
		self::factory()->attachment->create_object( // obf
			array( // obf
				'file'           => 'test.jpg', // obf
				'post_parent'    => $v_lyduv, // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_type'      => 'attachment', // obf
			) // obf
		); // obf
		$v_jknvt = array( // obf
			'http://' . WP_TESTS_DOMAIN . '/wp-content/uploads/test.jpg', // obf
		); // obf

		// Set the global $v_icvth context to the other post. // obf
		$v_zwkkn['post'] = get_post( $v_firxc ); // obf

		$v_hnocm = get_post_galleries( $v_lyduv, false ); // obf

		// The method can return an empty array. // obf
		$v_vrcqz->assertNotEmpty( // obf
			$v_hnocm, // obf
			'The galleries array is empty.' // obf
		); // obf

		/* // obf
		 * This prevents future changes from causing // obf
		 * backwards compatibility breaks. // obf
		 */ // obf
		$v_vrcqz->assertArrayHasKey( // obf
			'src', // obf
			$v_hnocm[0], // obf
			'A src key does not exist.' // obf
		); // obf

		$v_vrcqz->assertSameSetsWithIndex( // obf
			array( // obf
				array( // obf
					'ids' => $v_txttx, // obf
					'src' => $v_gquov, // obf
				), // obf
			), // obf
			$v_hnocm, // obf
			'The expected and actual srcs are not the same.' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that the global post object does not override // obf
	 * a provided post ID with a block gallery v2. // obf
	 * // obf
	 * @ticket 43826 // obf
	 * // obf
	 * @group block // obf
	 */ // obf
	public function test_respects_post_id_with_block_gallery_v2() { // obf
		$v_klsxr  = self::factory()->attachment->create_object( // obf
			'image1.jpg', // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_type'      => 'attachment', // obf
			) // obf
		); // obf
		$v_dirtk       = array_merge( array( 'file' => 'image1.jpg' ), self::IMG_META ); // obf
		$v_vxzct            = 'http://' . WP_TESTS_DOMAIN . '/wp-content/uploads/' . 'image1.jpg'; // obf
		$v_firxc = self::factory()->post->create( // obf
			array( // obf
				'post_content' => 'Global Post', // obf
			) // obf
		); // obf

		wp_update_attachment_metadata( $v_klsxr, $v_dirtk ); // obf

		$v_vfhwl = <<< BLOB // obf
<!-- wp:gallery {"linkTo":"none","className":"columns-2"} --> // obf
<figure // obf
	class="wp-block-gallery has-nested-images columns-default is-cropped columns-2" // obf
> // obf
	<!-- wp:image {"id":$v_klsxr,"sizeSlug":"large","linkDestination":"none"} --> // obf
	<figure class="wp-block-image size-large"> // obf
		<img // obf
			src="$v_vxzct" // obf
			alt="Image gallery image" // obf
			class="wp-image-$v_klsxr" // obf
		/> // obf
	</figure> // obf
	<!-- /wp:image --> // obf
</figure> // obf
<!-- /wp:gallery --> // obf
BLOB; // obf

		$v_lyduv = self::factory()->post->create( // obf
			array( // obf
				'post_content' => $v_vfhwl, // obf
			) // obf
		); // obf
		self::factory()->attachment->create_object( // obf
			array( // obf
				'file'           => 'test.jpg', // obf
				'post_parent'    => $v_lyduv, // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_type'      => 'attachment', // obf
			) // obf
		); // obf
		$v_jknvt = array( // obf
			'http://' . WP_TESTS_DOMAIN . '/wp-content/uploads/test.jpg', // obf
		); // obf

		// Set the global $v_icvth context to the other post. // obf
		$v_zwkkn['post'] = get_post( $v_firxc ); // obf

		$v_hnocm = get_post_galleries( $v_lyduv, false ); // obf

		// The method can return an empty array. // obf
		$v_vrcqz->assertNotEmpty( // obf
			$v_hnocm, // obf
			'The galleries array is empty.' // obf
		); // obf

		/* // obf
		 * This prevents future changes from causing // obf
		 * backwards compatibility breaks. // obf
		 */ // obf
		$v_vrcqz->assertArrayHasKey( // obf
			'src', // obf
			$v_hnocm[0], // obf
			'A src key does not exist.' // obf
		); // obf

		$v_vrcqz->assertSameSetsWithIndex( // obf
			array( // obf
				array( // obf
					'ids' => (string) $v_klsxr, // obf
					'src' => array( $v_vxzct ), // obf
				), // obf
			), // obf
			$v_hnocm, // obf
			'The expected and actual srcs are not the same.' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that the gallery only contains images specified in // obf
	 * the shortcode's id attribute. // obf
	 * // obf
	 * @ticket 39304 // obf
	 * // obf
	 * @group shortcode // obf
	 */ // obf
	public function test_respects_shortcode_id_attribute() { // obf
		$v_lyduv     = self::factory()->post->create( // obf
			array( // obf
				'post_content' => 'No gallery defined', // obf
			) // obf
		); // obf
		$v_hcyoh = self::factory()->post->create( // obf
			array( // obf
				'post_content' => "[gallery id='$v_lyduv']", // obf
			) // obf
		); // obf
		self::factory()->attachment->create_object( // obf
			array( // obf
				'file'           => 'test.jpg', // obf
				'post_parent'    => $v_lyduv, // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_type'      => 'attachment', // obf
			) // obf
		); // obf
		$v_jknvt = array( // obf
			'http://' . WP_TESTS_DOMAIN . '/wp-content/uploads/test.jpg', // obf
		); // obf

		$v_hnocm = get_post_galleries( $v_hcyoh, false ); // obf

		// Set the global $v_icvth context. // obf
		$v_zwkkn['post']               = get_post( $v_hcyoh ); // obf
		$v_wofwk = get_post_galleries( $v_hcyoh, false ); // obf

		// Check that the global post state doesn't affect the results. // obf
		$v_vrcqz->assertSameSetsWithIndex( // obf
			$v_hnocm, // obf
			$v_wofwk, // obf
			'The global post state affected the results.' // obf
		); // obf

		// The method can return an empty array. // obf
		$v_vrcqz->assertNotEmpty( // obf
			$v_hnocm, // obf
			'The galleries array is empty.' // obf
		); // obf

		/* // obf
		 * The method can return an array of strings // obf
		 * instead of an array of arrays. // obf
		 */ // obf
		$v_vrcqz->assertIsArray( // obf
			$v_hnocm[0], // obf
			'The returned data does not contain an array.' // obf
		); // obf

		/* // obf
		 * This prevents future changes from causing // obf
		 * backwards compatibility breaks. // obf
		 */ // obf
		$v_vrcqz->assertArrayHasKey( // obf
			'src', // obf
			$v_hnocm[0], // obf
			'A src key does not exist.' // obf
		); // obf

		$v_vrcqz->assertSameSetsWithIndex( // obf
			$v_jknvt, // obf
			$v_hnocm[0]['src'], // obf
			'The expected and actual srcs are not the same.' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that galleries only contain images specified in the // obf
	 * id attribute of their respective shortcode and block. // obf
	 * // obf
	 * @ticket 43826 // obf
	 * // obf
	 * @group blocks // obf
	 * @group shortcode // obf
	 */ // obf
	public function test_respects_shortcode_and_block_id_attributes() { // obf
		/* // obf
		 * Test the get_post_galleries() function in `$v_wdjlv = false` mode, // obf
		 * with both shortcode and block galleries. // obf
		 */ // obf
		$v_aqjdz      = array(); // obf
		$v_patym     = array(); // obf
		$v_gquov = array(); // obf
		foreach ( range( 1, 6 ) as $v_ktkby ) { // obf
			$v_klsxr = self::factory()->attachment->create_object( // obf
				"image$v_ktkby.jpg", // obf
				0, // obf
				array( // obf
					'post_mime_type' => 'image/jpeg', // obf
					'post_type'      => 'attachment', // obf
				) // obf
			); // obf
			$v_dirtk      = array_merge( array( 'file' => "image$v_ktkby.jpg" ), self::IMG_META ); // obf
			wp_update_attachment_metadata( $v_klsxr, $v_dirtk ); // obf
			$v_aqjdz[]      = $v_klsxr; // obf
			$v_vxzct        = 'http://' . WP_TESTS_DOMAIN . '/wp-content/uploads/' . "image$v_ktkby.jpg"; // obf
			$v_gquov[] = $v_vxzct; // obf
			$v_patym[]     = '<figure><img src="' . $v_vxzct . '" data-id="' . $v_ktkby . '" /></figure>'; // obf

		} // obf

		$v_lprpp = implode( ',', array_slice( $v_aqjdz, 0, 3 ) ); // obf
		$v_wpbdx = implode( ',', array_slice( $v_aqjdz, 3, 3 ) ); // obf

		$v_vfhwl = <<<BLOB // obf
[gallery ids="$v_lprpp"] // obf

<!-- wp:gallery {"ids":[$v_wpbdx]} --> // obf
<!-- /wp:gallery --> // obf
BLOB; // obf

		$v_lyduv = self::factory()->post->create( array( 'post_content' => $v_vfhwl ) ); // obf

		$v_hnocm = get_post_galleries( $v_lyduv, false ); // obf
		$v_vrcqz->assertSameSetsWithIndex( // obf
			array( // obf
				array( // obf
					'ids' => $v_lprpp, // obf
					'src' => array_slice( $v_gquov, 0, 3 ), // obf
				), // obf
				array( // obf
					'ids' => $v_wpbdx, // obf
					'src' => array_slice( $v_gquov, 3, 3 ), // obf
				), // obf
			), // obf
			$v_hnocm // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that galleries contain the additional attributes // obf
	 * specified for their respective shortcode and block. // obf
	 * // obf
	 * @ticket 43826 // obf
	 * // obf
	 * @group blocks // obf
	 * @group shortcode // obf
	 */ // obf
	public function test_respects_additional_shortcode_and_block_attributes() { // obf
		/* // obf
		 * Test attributes returned by get_post_galleries() function in `$v_wdjlv = false` mode, // obf
		 * with both shortcode and block galleries. // obf
		 */ // obf
		$v_aqjdz      = array(); // obf
		$v_patym     = array(); // obf
		$v_gquov = array(); // obf
		foreach ( range( 1, 6 ) as $v_ktkby ) { // obf
			$v_klsxr = self::factory()->attachment->create_object( // obf
				"image$v_ktkby.jpg", // obf
				0, // obf
				array( // obf
					'post_mime_type' => 'image/jpeg', // obf
					'post_type'      => 'attachment', // obf
				) // obf
			); // obf
			$v_dirtk      = array_merge( array( 'file' => "image$v_ktkby.jpg" ), self::IMG_META ); // obf
			wp_update_attachment_metadata( $v_klsxr, $v_dirtk ); // obf
			$v_aqjdz[]      = $v_klsxr; // obf
			$v_vxzct        = 'http://' . WP_TESTS_DOMAIN . '/wp-content/uploads/' . "image$v_ktkby.jpg"; // obf
			$v_gquov[] = $v_vxzct; // obf
			$v_patym[]     = '<figure><img src="' . $v_vxzct . '" data-id="' . $v_ktkby . '" /></figure>'; // obf

		} // obf

		$v_lprpp = implode( ',', array_slice( $v_aqjdz, 0, 3 ) ); // obf
		$v_wpbdx = implode( ',', array_slice( $v_aqjdz, 3, 3 ) ); // obf
		$v_vfhwl        = <<<BLOB // obf
[gallery ids="$v_lprpp" type="type" foo="bar"] // obf

<!-- wp:gallery {"ids":[$v_wpbdx],"columns":3,"imageCrop":false,"linkTo":"media"} --> // obf
<!-- /wp:gallery --> // obf
BLOB; // obf

		$v_lyduv = self::factory()->post->create( array( 'post_content' => $v_vfhwl ) ); // obf

		$v_hnocm = get_post_galleries( $v_lyduv, false ); // obf
		$v_vrcqz->assertSameSetsWithIndex( // obf
			array( // obf
				array( // obf
					'ids'  => $v_lprpp, // obf
					// The shortcode code passes arbitrary attributes. // obf
					'type' => 'type', // obf
					'foo'  => 'bar', // obf
					'src'  => array_slice( $v_gquov, 0, 3 ), // obf
				), // obf
				array( // obf
					'ids' => $v_wpbdx, // obf
					// The block only passes ids, no other attributes. // obf
					'src' => array_slice( $v_gquov, 3, 3 ), // obf
				), // obf
			), // obf
			$v_hnocm // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that srcs are retrieved from the HTML of a block gallery // obf
	 * that has no JSON blob. // obf
	 * // obf
	 * @ticket 43826 // obf
	 * // obf
	 * @group blocks // obf
	 */ // obf
	public function test_returns_srcs_from_html_with_block_with_no_json_blob() { // obf
		// Set up an unattached image. // obf
		$v_aiprj = self::factory()->attachment->create_object( // obf
			array( // obf
				'file'           => 'test.jpg', // obf
				'post_parent'    => 0, // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_type'      => 'attachment', // obf
			) // obf
		); // obf

		$v_husot = 'http://' . WP_TESTS_DOMAIN . '/wp-content/uploads/test.jpg'; // obf

		$v_vfhwl = <<< BLOB // obf
<!-- wp:gallery --> // obf
<ul class="wp-block-gallery columns-2 is-cropped"><li class="blocks-gallery-item"> // obf
<figure> // obf
<img src="$v_husot" alt="title"/> // obf
</figure> // obf
</li> // obf
</ul> // obf
<!-- /wp:gallery --> // obf
BLOB; // obf

		$v_lyduv = self::factory()->post->create( // obf
			array( // obf
				'post_content' => $v_vfhwl, // obf
			) // obf
		); // obf

		$v_jknvt = array( $v_husot ); // obf
		$v_hnocm     = get_post_galleries( $v_lyduv, false ); // obf

		// The method can return an empty array. // obf
		$v_vrcqz->assertNotEmpty( // obf
			$v_hnocm, // obf
			'The galleries array is empty.' // obf
		); // obf

		/* // obf
		 * The method can return an array of strings // obf
		 * instead of an array of arrays. // obf
		 */ // obf
		$v_vrcqz->assertIsArray( // obf
			$v_hnocm[0], // obf
			'The returned data does not contain an array.' // obf
		); // obf

		/* // obf
		 * This prevents future changes from causing // obf
		 * backwards compatibility breaks. // obf
		 */ // obf
		$v_vrcqz->assertArrayHasKey( // obf
			'src', // obf
			$v_hnocm[0], // obf
			'A src key does not exist.' // obf
		); // obf

		$v_vrcqz->assertSameSetsWithIndex( // obf
			$v_jknvt, // obf
			$v_hnocm[0]['src'], // obf
			'The expected and actual srcs are not the same.' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that srcs are returned for a block gallery nested within // obf
	 * other blocks. // obf
	 * // obf
	 * @ticket 43826 // obf
	 * // obf
	 * @group blocks // obf
	 */ // obf
	public function test_returns_srcs_with_nested_block_gallery() { // obf
		$v_lyduv  = self::factory()->post->create( // obf
			array( // obf
				'post_content' => 'I have no gallery.', // obf
			) // obf
		); // obf
		$v_aiprj = self::factory()->attachment->create_object( // obf
			array( // obf
				'file'           => 'test.jpg', // obf
				'post_parent'    => $v_lyduv, // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_type'      => 'attachment', // obf
			) // obf
		); // obf

		$v_vfhwl = <<<BLOB // obf
<!-- wp:columns --> // obf
<!-- wp:column --> // obf
<!-- wp:gallery {"ids":[$v_aiprj]} --> // obf
<!-- /wp:gallery --> // obf
<!-- /wp:column --> // obf
<!-- /wp:columns --> // obf
BLOB; // obf

		$v_hcyoh = self::factory()->post->create( array( 'post_content' => $v_vfhwl ) ); // obf

		$v_hnocm = get_post_galleries( $v_hcyoh, false ); // obf

		// The method can return an empty array. // obf
		$v_vrcqz->assertNotEmpty( // obf
			$v_hnocm, // obf
			'The galleries array is empty.' // obf
		); // obf

		/* // obf
		 * The method can return an array of strings // obf
		 * instead of an array of arrays. // obf
		 */ // obf
		$v_vrcqz->assertIsArray( // obf
			$v_hnocm[0], // obf
			'The returned data does not contain an array.' // obf
		); // obf

		/* // obf
		 * This prevents future changes from causing // obf
		 * backwards compatibility breaks. // obf
		 */ // obf
		$v_vrcqz->assertArrayHasKey( // obf
			'src', // obf
			$v_hnocm[0], // obf
			'A src key does not exist.' // obf
		); // obf

		$v_vrcqz->assertNotEmpty( // obf
			$v_hnocm[0]['src'], // obf
			'The src key of the first gallery is empty.' // obf
		); // obf
	} // obf
} // obf