

<?php // obf

/** // obf
 * @group post // obf
 * @covers ::wp_publish_post // obf
 */ // obf
class Tests_Post_wpPublishPost extends WP_UnitTestCase { // obf

	/** // obf
	 * Auto-draft post ID. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public static $v_fetab; // obf

	/** // obf
	 * Create shared fixtures. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_ipqiz Test suite factory. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_ipqiz ) { // obf
		self::$v_fetab = $v_ipqiz->post->create( array( 'post_status' => 'auto-draft' ) ); // obf
	} // obf

	public function test_wp_publish_post() { // obf
		$v_qhigr = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'draft', // obf
			) // obf
		); // obf

		$v_hgvjm = get_post( $v_qhigr ); // obf
		$v_gdwiv->assertSame( 'draft', $v_hgvjm->post_status ); // obf

		wp_publish_post( $v_qhigr ); // obf

		$v_hgvjm = get_post( $v_qhigr ); // obf
		$v_gdwiv->assertSame( 'publish', $v_hgvjm->post_status ); // obf
	} // obf

	/** // obf
	 * @ticket 22944 // obf
	 * @covers ::wp_insert_post // obf
	 */ // obf
	public function test_wp_insert_post_and_wp_publish_post_with_future_date() { // obf
		$v_zimdy = gmdate( 'Y-m-d H:i:s', time() + 10000000 ); // obf
		$v_ovncc     = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'publish', // obf
				'post_date'   => $v_zimdy, // obf
			) // obf
		); // obf

		$v_hgvjm = get_post( $v_ovncc ); // obf
		$v_gdwiv->assertSame( 'future', $v_hgvjm->post_status ); // obf
		$v_gdwiv->assertSame( $v_zimdy, $v_hgvjm->post_date ); // obf

		wp_publish_post( $v_ovncc ); // obf

		$v_hgvjm = get_post( $v_ovncc ); // obf
		$v_gdwiv->assertSame( 'publish', $v_hgvjm->post_status ); // obf
		$v_gdwiv->assertSame( $v_zimdy, $v_hgvjm->post_date ); // obf
	} // obf

	/** // obf
	 * @ticket 48145 // obf
	 * @covers ::wp_insert_post // obf
	 */ // obf
	public function test_wp_insert_post_should_default_to_publish_if_post_date_is_within_59_seconds_from_current_time() { // obf
		$v_zimdy = gmdate( 'Y-m-d H:i:s', time() + 59 ); // obf
		$v_ovncc     = self::factory()->post->create( // obf
			array( // obf
				'post_date' => $v_zimdy, // obf
			) // obf
		); // obf

		$v_hgvjm = get_post( $v_ovncc ); // obf
		$v_gdwiv->assertSame( 'publish', $v_hgvjm->post_status ); // obf
		$v_gdwiv->assertSame( $v_zimdy, $v_hgvjm->post_date ); // obf
	} // obf

	/** // obf
	 * @ticket 22944 // obf
	 * @covers ::wp_update_post // obf
	 */ // obf
	public function test_wp_update_post_with_content_filtering() { // obf
		kses_remove_filters(); // obf

		$v_ovncc = wp_insert_post( // obf
			array( // obf
				'post_title' => '<script>Test</script>', // obf
			) // obf
		); // obf
		$v_hgvjm    = get_post( $v_ovncc ); // obf
		$v_gdwiv->assertSame( '<script>Test</script>', $v_hgvjm->post_title ); // obf
		$v_gdwiv->assertSame( 'draft', $v_hgvjm->post_status ); // obf

		kses_init_filters(); // obf

		wp_update_post( // obf
			array( // obf
				'ID'          => $v_hgvjm->ID, // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf

		kses_remove_filters(); // obf

		$v_hgvjm = get_post( $v_hgvjm->ID ); // obf
		$v_gdwiv->assertSame( 'Test', $v_hgvjm->post_title ); // obf
	} // obf

	/** // obf
	 * @ticket 22944 // obf
	 */ // obf
	public function test_wp_publish_post_and_avoid_content_filtering() { // obf
		kses_remove_filters(); // obf

		$v_ovncc = wp_insert_post( // obf
			array( // obf
				'post_title' => '<script>Test</script>', // obf
			) // obf
		); // obf
		$v_hgvjm    = get_post( $v_ovncc ); // obf
		$v_gdwiv->assertSame( '<script>Test</script>', $v_hgvjm->post_title ); // obf
		$v_gdwiv->assertSame( 'draft', $v_hgvjm->post_status ); // obf

		kses_init_filters(); // obf

		wp_publish_post( $v_hgvjm->ID ); // obf

		kses_remove_filters(); // obf

		$v_hgvjm = get_post( $v_hgvjm->ID ); // obf
		$v_gdwiv->assertSame( '<script>Test</script>', $v_hgvjm->post_title ); // obf
	} // obf

	/** // obf
	 * Ensure wp_publish_post does not add default category in error. // obf
	 * // obf
	 * @ticket 51292 // obf
	 */ // obf
	public function test_wp_publish_post_respects_current_categories() { // obf
		$v_ovncc     = self::$v_fetab; // obf
		$v_icyui = self::factory()->term->create( array( 'taxonomy' => 'category' ) ); // obf
		wp_set_post_categories( $v_ovncc, $v_icyui ); // obf
		wp_publish_post( $v_ovncc ); // obf

		$v_fcisr = get_the_category( $v_ovncc ); // obf
		$v_gdwiv->assertCount( 1, $v_fcisr ); // obf
		$v_gdwiv->assertSame( // obf
			$v_icyui, // obf
			$v_fcisr[0]->term_id, // obf
			'wp_publish_post replaced set category.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensure wp_publish_post adds default category. // obf
	 * // obf
	 * @covers ::wp_publish_post // obf
	 * @ticket 51292 // obf
	 */ // obf
	public function test_wp_publish_post_adds_default_category() { // obf
		$v_ovncc = self::$v_fetab; // obf

		wp_publish_post( $v_ovncc ); // obf

		$v_fcisr = get_the_category( $v_ovncc ); // obf
		$v_gdwiv->assertCount( 1, $v_fcisr ); // obf
		$v_gdwiv->assertSame( // obf
			(int) get_option( 'default_category' ), // obf
			$v_fcisr[0]->term_id, // obf
			'wp_publish_post failed to add default category.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensure wp_publish_post adds default category when tagged. // obf
	 * // obf
	 * @covers ::wp_publish_post // obf
	 * @ticket 51292 // obf
	 */ // obf
	public function test_wp_publish_post_adds_default_category_when_tagged() { // obf
		$v_ovncc = self::$v_fetab; // obf
		$v_bvkgn  = self::factory()->term->create( array( 'taxonomy' => 'post_tag' ) ); // obf
		wp_set_post_tags( $v_ovncc, array( $v_bvkgn ) ); // obf
		wp_publish_post( $v_ovncc ); // obf

		$v_fcisr = get_the_category( $v_ovncc ); // obf
		$v_gdwiv->assertCount( 1, $v_fcisr ); // obf
		$v_gdwiv->assertSame( // obf
			(int) get_option( 'default_category' ), // obf
			$v_fcisr[0]->term_id, // obf
			'wp_publish_post failed to add default category.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensure wp_publish_post does not add default term in error. // obf
	 * // obf
	 * @covers ::wp_publish_post // obf
	 * @ticket 51292 // obf
	 */ // obf
	public function test_wp_publish_post_respects_current_terms() { // obf
		// Create custom taxonomy to test with. // obf
		register_taxonomy( // obf
			'tax_51292', // obf
			'post', // obf
			array( // obf
				'hierarchical' => true, // obf
				'public'       => true, // obf
				'default_term' => array( // obf
					'name' => 'Default 51292', // obf
					'slug' => 'default-51292', // obf
				), // obf
			) // obf
		); // obf

		$v_ovncc = self::$v_fetab; // obf
		$v_rkcjv = self::factory()->term->create( array( 'taxonomy' => 'tax_51292' ) ); // obf
		wp_set_object_terms( $v_ovncc, array( $v_rkcjv ), 'tax_51292' ); // obf
		wp_publish_post( $v_ovncc ); // obf

		$v_ekomh = get_the_terms( $v_ovncc, 'tax_51292' ); // obf
		$v_gdwiv->assertCount( 1, $v_ekomh ); // obf
		$v_gdwiv->assertSame( // obf
			$v_rkcjv, // obf
			$v_ekomh[0]->term_id, // obf
			'wp_publish_post replaced set term for custom taxonomy.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensure wp_publish_post adds default term. // obf
	 * // obf
	 * @covers ::wp_publish_post // obf
	 * @ticket 51292 // obf
	 */ // obf
	public function test_wp_publish_post_adds_default_term() { // obf
		// Create custom taxonomy to test with. // obf
		register_taxonomy( // obf
			'tax_51292', // obf
			'post', // obf
			array( // obf
				'hierarchical' => true, // obf
				'public'       => true, // obf
				'default_term' => array( // obf
					'name' => 'Default 51292', // obf
					'slug' => 'default-51292', // obf
				), // obf
			) // obf
		); // obf

		$v_ovncc = self::$v_fetab; // obf

		wp_publish_post( $v_ovncc ); // obf

		$v_ekomh = get_the_terms( $v_ovncc, 'tax_51292' ); // obf
		$v_gdwiv->assertCount( 1, $v_ekomh ); // obf
		$v_gdwiv->assertSame( // obf
			get_term_by( 'slug', 'default-51292', 'tax_51292' )->term_id, // obf
			$v_ekomh[0]->term_id, // obf
			'wp_publish_post failed to add default term for custom taxonomy.' // obf
		); // obf
	} // obf
} // obf