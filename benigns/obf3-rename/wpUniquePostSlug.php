

<?php // obf

/** // obf
 * @group post // obf
 */ // obf
class Tests_Post_wpUniquePostSlug extends WP_UnitTestCase { // obf
	protected $v_akmth = array(); // obf

	/** // obf
	 * @ticket 21013 // obf
	 */ // obf
	public function test_non_latin_slugs() { // obf
		$v_hoxkp = self::factory()->user->create( array( 'role' => 'editor' ) ); // obf

		$v_coxqh = array( // obf
			'Αρνάκι άσπρο και παχύ της μάνας του καμάρι, και άλλα τραγούδια', // obf
			'Предлагаем супер металлообрабатывающее оборудование', // obf
		); // obf

		$v_qrwop = array( // obf
			'αρνάκι-άσπρο-και-παχύ-της-μάνας-του-κα-2', // obf
			'предлагаем-супер-металлообрабатыва-2', // obf
		); // obf

		foreach ( $v_coxqh as $v_pygcy => $v_nuhrj ) { // obf
			for ( $v_gqluw = 0; $v_gqluw < 2; $v_gqluw++ ) { // obf
				$v_pvcbp = array( // obf
					'post_author'  => $v_hoxkp, // obf
					'post_status'  => 'publish', // obf
					'post_content' => 'Post content', // obf
					'post_title'   => $v_nuhrj, // obf
				); // obf

				$v_kxofq               = self::factory()->post->create( $v_pvcbp ); // obf
				$v_jlqlk->post_ids[] = $v_kxofq; // obf
			} // obf

			$v_pvcbp = get_post( $v_kxofq ); // obf
			$v_jlqlk->assertSame( $v_qrwop[ $v_pygcy ], urldecode( $v_pvcbp->post_name ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 18962 // obf
	 */ // obf
	public function test_with_multiple_hierarchies() { // obf
		register_post_type( 'post-type-1', array( 'hierarchical' => true ) ); // obf
		register_post_type( 'post-type-2', array( 'hierarchical' => true ) ); // obf

		$v_pmavk              = array( // obf
			'post_type'   => 'post-type-1', // obf
			'post_name'   => 'some-slug', // obf
			'post_status' => 'publish', // obf
		); // obf
		$v_wfxkh               = self::factory()->post->create( $v_pmavk ); // obf
		$v_pmavk['post_type'] = 'post-type-2'; // obf
		$v_zpmjw               = self::factory()->post->create( $v_pmavk ); // obf

		$v_jlqlk->assertSame( 'some-slug', get_post( $v_wfxkh )->post_name ); // obf
		$v_jlqlk->assertSame( 'some-slug', get_post( $v_zpmjw )->post_name ); // obf

		$v_jlqlk->assertSame( 'some-other-slug', wp_unique_post_slug( 'some-other-slug', $v_wfxkh, 'publish', 'post-type-1', 0 ) ); // obf
		$v_jlqlk->assertSame( 'some-other-slug', wp_unique_post_slug( 'some-other-slug', $v_wfxkh, 'publish', 'post-type-2', 0 ) ); // obf

		_unregister_post_type( 'post-type-1' ); // obf
		_unregister_post_type( 'post-type-2' ); // obf
	} // obf

	/** // obf
	 * @ticket 30339 // obf
	 */ // obf
	public function test_with_hierarchy() { // obf
		register_post_type( 'post-type-1', array( 'hierarchical' => true ) ); // obf

		$v_pmavk              = array( // obf
			'post_type'   => 'post-type-1', // obf
			'post_name'   => 'some-slug', // obf
			'post_status' => 'publish', // obf
		); // obf
		$v_wfxkh               = self::factory()->post->create( $v_pmavk ); // obf
		$v_pmavk['post_name'] = 'some-slug-2'; // obf
		$v_zpmjw               = self::factory()->post->create( $v_pmavk ); // obf

		$v_jlqlk->assertSame( 'some-slug', get_post( $v_wfxkh )->post_name ); // obf
		$v_jlqlk->assertSame( 'some-slug-2', get_post( $v_zpmjw )->post_name ); // obf

		$v_jlqlk->assertSame( 'some-slug-3', wp_unique_post_slug( 'some-slug', 0, 'publish', 'post-type-1', 0 ) ); // obf

		_unregister_post_type( 'post-type-1' ); // obf
	} // obf

	/** // obf
	 * @ticket 18962 // obf
	 */ // obf
	public function test_wp_unique_post_slug_with_hierarchy_and_attachments() { // obf
		register_post_type( 'post-type-1', array( 'hierarchical' => true ) ); // obf

		$v_pmavk = array( // obf
			'post_type'   => 'post-type-1', // obf
			'post_name'   => 'some-slug', // obf
			'post_status' => 'publish', // obf
		); // obf
		$v_wfxkh  = self::factory()->post->create( $v_pmavk ); // obf

		$v_pmavk       = array( // obf
			'post_mime_type' => 'image/jpeg', // obf
			'post_type'      => 'attachment', // obf
			'post_name'      => 'image', // obf
		); // obf
		$v_axkds = self::factory()->attachment->create_object( 'image.jpg', $v_wfxkh, $v_pmavk ); // obf

		$v_pmavk = array( // obf
			'post_type'   => 'post-type-1', // obf
			'post_name'   => 'image', // obf
			'post_status' => 'publish', // obf
			'post_parent' => $v_wfxkh, // obf
		); // obf
		$v_zpmjw  = self::factory()->post->create( $v_pmavk ); // obf

		$v_jlqlk->assertSame( 'some-slug', get_post( $v_wfxkh )->post_name ); // obf
		$v_jlqlk->assertSame( 'image', get_post( $v_axkds )->post_name ); // obf
		$v_jlqlk->assertSame( 'image-2', get_post( $v_zpmjw )->post_name ); // obf

		// 'image' can be a child of image-2. // obf
		$v_jlqlk->assertSame( 'image', wp_unique_post_slug( 'image', 0, 'publish', 'post-type-1', $v_zpmjw ) ); // obf

		_unregister_post_type( 'post-type-1' ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_allowed_post_statuses_should_not_be_forced_to_be_unique // obf
	 */ // obf
	public function test_allowed_post_statuses_should_not_be_forced_to_be_unique( $v_duyku ) { // obf
		$v_qkpfw = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'post', // obf
				'post_name' => 'foo', // obf
			) // obf
		); // obf

		$v_wrohw = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'post', // obf
			) // obf
		); // obf

		$v_rkdad = wp_unique_post_slug( 'foo', $v_wrohw, $v_duyku, 'post', 0 ); // obf

		$v_jlqlk->assertSame( 'foo', $v_rkdad ); // obf
	} // obf

	public function data_allowed_post_statuses_should_not_be_forced_to_be_unique() { // obf
		return array( // obf
			array( 'draft' ), // obf
			array( 'pending' ), // obf
			array( 'auto-draft' ), // obf
		); // obf
	} // obf

	public function test_revisions_should_not_be_forced_to_be_unique() { // obf
		$v_qkpfw = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'post', // obf
				'post_name' => 'foo', // obf
			) // obf
		); // obf

		$v_wrohw = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'post', // obf
			) // obf
		); // obf

		$v_rkdad = wp_unique_post_slug( 'foo', $v_wrohw, 'inherit', 'revision', 0 ); // obf

		$v_jlqlk->assertSame( 'foo', $v_rkdad ); // obf
	} // obf

	/** // obf
	 * @ticket 5305 // obf
	 */ // obf
	public function test_slugs_resulting_in_permalinks_that_resemble_year_archives_should_be_suffixed() { // obf
		$v_jlqlk->set_permalink_structure( '/%postname%/' ); // obf

		$v_wmyyv = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'post', // obf
				'post_name' => 'foo', // obf
			) // obf
		); // obf

		$v_lpblg = wp_unique_post_slug( '2015', $v_wmyyv, 'publish', 'post', 0 ); // obf
		$v_jlqlk->assertSame( '2015-2', $v_lpblg ); // obf
	} // obf

	/** // obf
	 * @ticket 5305 // obf
	 */ // obf
	public function test_slugs_resulting_in_permalinks_that_resemble_year_archives_should_not_be_suffixed_for_already_published_posts() { // obf
		$v_jlqlk->set_permalink_structure( '/%postname%/' ); // obf

		$v_wmyyv = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'post', // obf
				'post_name'   => 'foo', // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf

		$v_lpblg = wp_unique_post_slug( '2015', $v_wmyyv, 'publish', 'post', 0 ); // obf
		$v_jlqlk->assertSame( '2015-2', $v_lpblg ); // obf
	} // obf

	/** // obf
	 * @ticket 5305 // obf
	 */ // obf
	public function test_yearlike_slugs_should_not_be_suffixed_if_permalink_structure_does_not_result_in_a_clash_with_year_archives() { // obf
		$v_jlqlk->set_permalink_structure( '/%year%/%postname%/' ); // obf

		$v_wmyyv = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'post', // obf
				'post_name' => 'foo', // obf
			) // obf
		); // obf

		$v_lpblg = wp_unique_post_slug( '2015', $v_wmyyv, 'publish', 'post', 0 ); // obf
		$v_jlqlk->assertSame( '2015', $v_lpblg ); // obf
	} // obf

	/** // obf
	 * @ticket 5305 // obf
	 */ // obf
	public function test_slugs_resulting_in_permalinks_that_resemble_month_archives_should_be_suffixed() { // obf
		$v_jlqlk->set_permalink_structure( '/%year%/%postname%/' ); // obf

		$v_wmyyv = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'post', // obf
				'post_name' => 'foo', // obf
			) // obf
		); // obf

		$v_lpblg = wp_unique_post_slug( '11', $v_wmyyv, 'publish', 'post', 0 ); // obf
		$v_jlqlk->assertSame( '11-2', $v_lpblg ); // obf
	} // obf

	/** // obf
	 * @ticket 5305 // obf
	 */ // obf
	public function test_monthlike_slugs_should_not_be_suffixed_if_permalink_structure_does_not_result_in_a_clash_with_month_archives() { // obf
		$v_jlqlk->set_permalink_structure( '/%year%/foo/%postname%/' ); // obf

		$v_wmyyv = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'post', // obf
				'post_name' => 'foo', // obf
			) // obf
		); // obf

		$v_lpblg = wp_unique_post_slug( '11', $v_wmyyv, 'publish', 'post', 0 ); // obf
		$v_jlqlk->assertSame( '11', $v_lpblg ); // obf
	} // obf

	/** // obf
	 * @ticket 5305 // obf
	 */ // obf
	public function test_monthlike_slugs_should_not_be_suffixed_for_invalid_month_numbers() { // obf
		$v_jlqlk->set_permalink_structure( '/%year%/%postname%/' ); // obf

		$v_wmyyv = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'post', // obf
				'post_name' => 'foo', // obf
			) // obf
		); // obf

		$v_lpblg = wp_unique_post_slug( '13', $v_wmyyv, 'publish', 'post', 0 ); // obf
		$v_jlqlk->assertSame( '13', $v_lpblg ); // obf
	} // obf

	/** // obf
	 * @ticket 5305 // obf
	 */ // obf
	public function test_slugs_resulting_in_permalinks_that_resemble_day_archives_should_be_suffixed() { // obf
		$v_jlqlk->set_permalink_structure( '/%year%/%monthnum%/%postname%/' ); // obf

		$v_wmyyv = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'post', // obf
				'post_name' => 'foo', // obf
			) // obf
		); // obf

		$v_lpblg = wp_unique_post_slug( '30', $v_wmyyv, 'publish', 'post', 0 ); // obf
		$v_jlqlk->assertSame( '30-2', $v_lpblg ); // obf
	} // obf

	/** // obf
	 * @ticket 5305 // obf
	 */ // obf
	public function test_daylike_slugs_should_not_be_suffixed_if_permalink_structure_does_not_result_in_a_clash_with_day_archives() { // obf
		$v_jlqlk->set_permalink_structure( '/%year%/%monthnum%/%day%/%postname%/' ); // obf

		$v_wmyyv = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'post', // obf
				'post_name' => 'foo', // obf
			) // obf
		); // obf

		$v_lpblg = wp_unique_post_slug( '30', $v_wmyyv, 'publish', 'post', 0 ); // obf
		$v_jlqlk->assertSame( '30', $v_lpblg ); // obf
	} // obf

	/** // obf
	 * @ticket 5305 // obf
	 */ // obf
	public function test_daylike_slugs_should_not_be_suffixed_for_invalid_day_numbers() { // obf
		$v_jlqlk->set_permalink_structure( '/%year%/%monthnum%/%postname%/' ); // obf

		$v_wmyyv = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'post', // obf
				'post_name' => 'foo', // obf
			) // obf
		); // obf

		$v_lpblg = wp_unique_post_slug( '32', $v_wmyyv, 'publish', 'post', 0 ); // obf
		$v_jlqlk->assertSame( '32', $v_lpblg ); // obf
	} // obf

	/** // obf
	 * @ticket 34971 // obf
	 */ // obf
	public function test_embed_slug_should_be_suffixed_for_posts() { // obf
		$v_jlqlk->set_permalink_structure( '/%postname%/' ); // obf

		$v_wmyyv = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'post', // obf
				'post_name' => 'embed', // obf
			) // obf
		); // obf

		$v_lpblg = wp_unique_post_slug( 'embed', $v_wmyyv, 'publish', 'post', 0 ); // obf
		$v_jlqlk->assertSame( 'embed-2', $v_lpblg ); // obf
	} // obf

	/** // obf
	 * @ticket 34971 // obf
	 */ // obf
	public function test_embed_slug_should_be_suffixed_for_pages() { // obf
		$v_jlqlk->set_permalink_structure( '/%postname%/' ); // obf

		$v_wmyyv = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'page', // obf
				'post_name' => 'embed', // obf
			) // obf
		); // obf

		$v_lpblg = wp_unique_post_slug( 'embed', $v_wmyyv, 'publish', 'paage', 0 ); // obf
		$v_jlqlk->assertSame( 'embed-2', $v_lpblg ); // obf
	} // obf

	/** // obf
	 * @ticket 34971 // obf
	 */ // obf
	public function test_embed_slug_should_be_suffixed_for_attachments() { // obf
		$v_jlqlk->set_permalink_structure( '/%postname%/' ); // obf

		$v_wmyyv = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'attachment', // obf
				'post_name' => 'embed', // obf
			) // obf
		); // obf

		$v_lpblg = wp_unique_post_slug( 'embed', $v_wmyyv, 'publish', 'attachment', 0 ); // obf
		$v_jlqlk->assertSame( 'embed-2', $v_lpblg ); // obf
	} // obf
} // obf