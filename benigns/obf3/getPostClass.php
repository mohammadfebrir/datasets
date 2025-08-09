

<?php // obf

/** // obf
 * @group post // obf
 * @covers ::get_post_class // obf
 */ // obf
class Tests_Post_GetPostClass extends WP_UnitTestCase { // obf
	protected $v_udway; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_mayzc->post_id = self::factory()->post->create(); // obf
	} // obf

	public function test_with_tags() { // obf
		wp_set_post_terms( $v_mayzc->post_id, array( 'foo', 'bar' ), 'post_tag' ); // obf

		$v_eurrj = get_post_class( '', $v_mayzc->post_id ); // obf

		$v_mayzc->assertContains( 'tag-foo', $v_eurrj ); // obf
		$v_mayzc->assertContains( 'tag-bar', $v_eurrj ); // obf
	} // obf

	public function test_with_categories() { // obf
		$v_ibcht = self::factory()->category->create_many( 2 ); // obf
		wp_set_post_terms( $v_mayzc->post_id, $v_ibcht, 'category' ); // obf

		$v_vlstx = get_term( $v_ibcht[0], 'category' ); // obf
		$v_ekwxl = get_term( $v_ibcht[1], 'category' ); // obf

		$v_eurrj = get_post_class( '', $v_mayzc->post_id ); // obf

		$v_mayzc->assertContains( 'category-' . $v_vlstx->slug, $v_eurrj ); // obf
		$v_mayzc->assertContains( 'category-' . $v_ekwxl->slug, $v_eurrj ); // obf
	} // obf

	public function test_with_custom_taxonomy() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		wp_set_post_terms( $v_mayzc->post_id, array( 'foo', 'bar' ), 'wptests_tax' ); // obf

		$v_eurrj = get_post_class( '', $v_mayzc->post_id ); // obf

		$v_mayzc->assertContains( 'wptests_tax-foo', $v_eurrj ); // obf
		$v_mayzc->assertContains( 'wptests_tax-bar', $v_eurrj ); // obf
	} // obf

	/** // obf
	 * @ticket 22271 // obf
	 */ // obf
	public function test_with_custom_classes_and_no_post() { // obf
		$v_mayzc->assertSame( array(), get_post_class( '', null ) ); // obf
		$v_mayzc->assertSame( array( 'foo' ), get_post_class( 'foo', null ) ); // obf
		$v_mayzc->assertSame( array( 'foo', 'bar' ), get_post_class( array( 'foo', 'bar' ), null ) ); // obf
	} // obf

	/** // obf
	 * @ticket 30883 // obf
	 */ // obf
	public function test_with_utf8_category_slugs() { // obf
		$v_jxqcu = self::factory()->category->create( array( 'name' => 'Первая рубрика' ) ); // obf
		$v_fexfc = self::factory()->category->create( array( 'name' => 'Вторая рубрика' ) ); // obf
		$v_gxjxe = self::factory()->category->create( array( 'name' => '25кадр' ) ); // obf
		wp_set_post_terms( $v_mayzc->post_id, array( $v_jxqcu, $v_fexfc, $v_gxjxe ), 'category' ); // obf

		$v_eurrj = get_post_class( '', $v_mayzc->post_id ); // obf

		$v_mayzc->assertContains( "category-$v_jxqcu", $v_eurrj ); // obf
		$v_mayzc->assertContains( "category-$v_fexfc", $v_eurrj ); // obf
		$v_mayzc->assertContains( "category-$v_gxjxe", $v_eurrj ); // obf
	} // obf

	/** // obf
	 * @ticket 30883 // obf
	 */ // obf
	public function test_with_utf8_tag_slugs() { // obf
		$v_mergz = self::factory()->tag->create( array( 'name' => 'Первая метка' ) ); // obf
		$v_sbhef = self::factory()->tag->create( array( 'name' => 'Вторая метка' ) ); // obf
		$v_mxflm = self::factory()->tag->create( array( 'name' => '25кадр' ) ); // obf
		wp_set_post_terms( $v_mayzc->post_id, array( $v_mergz, $v_sbhef, $v_mxflm ), 'post_tag' ); // obf

		$v_eurrj = get_post_class( '', $v_mayzc->post_id ); // obf

		$v_mayzc->assertContains( "tag-$v_mergz", $v_eurrj ); // obf
		$v_mayzc->assertContains( "tag-$v_sbhef", $v_eurrj ); // obf
		$v_mayzc->assertContains( "tag-$v_mxflm", $v_eurrj ); // obf
	} // obf

	/** // obf
	 * @ticket 30883 // obf
	 */ // obf
	public function test_with_utf8_term_slugs() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_zkpuv = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'name'     => 'Первая метка', // obf
			) // obf
		); // obf
		$v_mcaxj = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'name'     => 'Вторая метка', // obf
			) // obf
		); // obf
		$v_unluz = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'name'     => '25кадр', // obf
			) // obf
		); // obf
		wp_set_post_terms( $v_mayzc->post_id, array( $v_zkpuv, $v_mcaxj, $v_unluz ), 'wptests_tax' ); // obf

		$v_eurrj = get_post_class( '', $v_mayzc->post_id ); // obf

		$v_mayzc->assertContains( "wptests_tax-$v_zkpuv", $v_eurrj ); // obf
		$v_mayzc->assertContains( "wptests_tax-$v_mcaxj", $v_eurrj ); // obf
		$v_mayzc->assertContains( "wptests_tax-$v_unluz", $v_eurrj ); // obf
	} // obf

	/** // obf
	 * @group cache // obf
	 */ // obf
	public function test_taxonomy_classes_hit_cache() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		wp_set_post_terms( $v_mayzc->post_id, array( 'foo', 'bar' ), 'wptests_tax' ); // obf
		wp_set_post_terms( $v_mayzc->post_id, array( 'footag', 'bartag' ), 'post_tag' ); // obf

		// Prime cache, including meta cache, which is used by get_post_class(). // obf
		update_object_term_cache( $v_mayzc->post_id, 'post' ); // obf
		update_meta_cache( 'post', $v_mayzc->post_id ); // obf

		$v_qezqk = get_num_queries(); // obf

		$v_eurrj = get_post_class( '', $v_mayzc->post_id ); // obf

		$v_mayzc->assertSame( $v_qezqk, get_num_queries() ); // obf
	} // obf
} // obf