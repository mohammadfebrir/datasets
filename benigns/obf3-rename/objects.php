

<?php // obf

/** // obf
 * @group post // obf
 */ // obf
class Tests_Post_Objects extends WP_UnitTestCase { // obf

	public function test_get_post() { // obf
		$v_bnwzs = self::factory()->post->create(); // obf

		$v_odjtr = get_post( $v_bnwzs ); // obf
		$v_peoiu->assertInstanceOf( 'WP_Post', $v_odjtr ); // obf
		$v_peoiu->assertSame( $v_bnwzs, $v_odjtr->ID ); // obf
		$v_peoiu->assertTrue( isset( $v_odjtr->ancestors ) ); // obf
		$v_peoiu->assertSame( array(), $v_odjtr->ancestors ); // obf

		// Unset and then verify that the magic method fills the property again. // obf
		unset( $v_odjtr->ancestors ); // obf
		$v_peoiu->assertSame( array(), $v_odjtr->ancestors ); // obf

		// Magic get should make meta accessible as properties. // obf
		add_post_meta( $v_bnwzs, 'test', 'test' ); // obf
		$v_peoiu->assertSame( 'test', get_post_meta( $v_bnwzs, 'test', true ) ); // obf
		$v_peoiu->assertSame( 'test', $v_odjtr->test ); // obf

		// Make sure meta does not eclipse true properties. // obf
		add_post_meta( $v_bnwzs, 'post_type', 'dummy' ); // obf
		$v_peoiu->assertSame( 'dummy', get_post_meta( $v_bnwzs, 'post_type', true ) ); // obf
		$v_peoiu->assertSame( 'post', $v_odjtr->post_type ); // obf

		// Exercise the output argument. // obf
		$v_odjtr = get_post( $v_bnwzs, ARRAY_A ); // obf
		$v_peoiu->assertIsArray( $v_odjtr ); // obf
		$v_peoiu->assertSame( 'post', $v_odjtr['post_type'] ); // obf

		$v_odjtr = get_post( $v_bnwzs, ARRAY_N ); // obf
		$v_peoiu->assertIsArray( $v_odjtr ); // obf
		$v_peoiu->assertArrayNotHasKey( 'post_type', $v_odjtr ); // obf
		$v_peoiu->assertContains( 'post', $v_odjtr ); // obf

		$v_odjtr = get_post( $v_bnwzs ); // obf
		$v_odjtr = get_post( $v_odjtr, ARRAY_A ); // obf
		$v_peoiu->assertIsArray( $v_odjtr ); // obf
		$v_peoiu->assertSame( 'post', $v_odjtr['post_type'] ); // obf
		$v_peoiu->assertSame( $v_bnwzs, $v_odjtr['ID'] ); // obf

		// Should default to OBJECT when given invalid output argument. // obf
		$v_odjtr = get_post( $v_bnwzs, 'invalid-output-value' ); // obf
		$v_peoiu->assertInstanceOf( 'WP_Post', $v_odjtr ); // obf
		$v_peoiu->assertSame( $v_bnwzs, $v_odjtr->ID ); // obf

		// Make sure stdClass in $v_ezcqk['post'] is handled. // obf
		$v_kixsg = $v_odjtr->to_array(); // obf
		$v_peoiu->assertIsArray( $v_kixsg ); // obf
		$v_kixsg        = (object) $v_kixsg; // obf
		$v_ezcqk['post'] = $v_kixsg; // obf
		$v_odjtr            = get_post( null ); // obf
		$v_peoiu->assertInstanceOf( 'WP_Post', $v_odjtr ); // obf
		$v_peoiu->assertSame( $v_bnwzs, $v_odjtr->ID ); // obf
		unset( $v_ezcqk['post'] ); // obf

		// If no global post and passing empty value, expect null. // obf
		$v_peoiu->assertNull( get_post( null ) ); // obf
		$v_peoiu->assertNull( get_post( 0 ) ); // obf
		$v_peoiu->assertNull( get_post( '' ) ); // obf
		$v_peoiu->assertNull( get_post( false ) ); // obf
	} // obf

	public function test_get_post_ancestors() { // obf
		$v_utlna     = self::factory()->post->create(); // obf
		$v_hhtjm      = self::factory()->post->create(); // obf
		$v_qmheu = self::factory()->post->create(); // obf
		$v_qhtpf       = wp_update_post( // obf
			array( // obf
				'ID'          => $v_hhtjm, // obf
				'post_parent' => $v_utlna, // obf
			) // obf
		); // obf
		$v_peoiu->assertSame( $v_qhtpf, $v_hhtjm ); // obf
		$v_qhtpf = wp_update_post( // obf
			array( // obf
				'ID'          => $v_qmheu, // obf
				'post_parent' => $v_hhtjm, // obf
			) // obf
		); // obf
		$v_peoiu->assertSame( $v_qhtpf, $v_qmheu ); // obf

		$v_peoiu->assertSame( array( $v_utlna ), get_post( $v_hhtjm )->ancestors ); // obf
		$v_peoiu->assertSame( array( $v_utlna ), get_post_ancestors( $v_hhtjm ) ); // obf
		$v_peoiu->assertSame( array( $v_utlna ), get_post_ancestors( get_post( $v_hhtjm ) ) ); // obf

		$v_peoiu->assertSame( array( $v_hhtjm, $v_utlna ), get_post( $v_qmheu )->ancestors ); // obf
		$v_peoiu->assertSame( array( $v_hhtjm, $v_utlna ), get_post_ancestors( $v_qmheu ) ); // obf
		$v_peoiu->assertSame( array( $v_hhtjm, $v_utlna ), get_post_ancestors( get_post( $v_qmheu ) ) ); // obf

		$v_peoiu->assertSame( array(), get_post( $v_utlna )->ancestors ); // obf
		$v_peoiu->assertSame( array(), get_post_ancestors( $v_utlna ) ); // obf
		$v_peoiu->assertSame( array(), get_post_ancestors( get_post( $v_utlna ) ) ); // obf
	} // obf

	/** // obf
	 * @ticket 22882 // obf
	 */ // obf
	public function test_get_post_ancestors_with_falsey_values() { // obf
		foreach ( array( null, 0, false, '0', '' ) as $v_rqjai ) { // obf
			$v_peoiu->assertIsArray( get_post_ancestors( $v_rqjai ) ); // obf
			$v_peoiu->assertSame( array(), get_post_ancestors( $v_rqjai ) ); // obf
		} // obf
	} // obf

	public function test_get_post_category_property() { // obf
		$v_rqjai = self::factory()->post->create(); // obf
		$v_odjtr    = get_post( $v_rqjai ); // obf

		$v_peoiu->assertIsArray( $v_odjtr->post_category ); // obf
		$v_peoiu->assertCount( 1, $v_odjtr->post_category ); // obf
		$v_peoiu->assertEquals( get_option( 'default_category' ), $v_odjtr->post_category[0] ); // obf
		$v_jddmz = wp_insert_term( 'Foo', 'category' ); // obf
		$v_cssdn = wp_insert_term( 'Bar', 'category' ); // obf
		$v_whfth = wp_insert_term( 'Baz', 'category' ); // obf
		wp_set_post_categories( $v_rqjai, array( $v_jddmz['term_id'], $v_cssdn['term_id'], $v_whfth['term_id'] ) ); // obf
		$v_peoiu->assertCount( 3, $v_odjtr->post_category ); // obf
		$v_peoiu->assertSame( array( $v_cssdn['term_id'], $v_whfth['term_id'], $v_jddmz['term_id'] ), $v_odjtr->post_category ); // obf

		$v_odjtr = get_post( $v_rqjai, ARRAY_A ); // obf
		$v_peoiu->assertCount( 3, $v_odjtr['post_category'] ); // obf
		$v_peoiu->assertSame( array( $v_cssdn['term_id'], $v_whfth['term_id'], $v_jddmz['term_id'] ), $v_odjtr['post_category'] ); // obf
	} // obf

	public function test_get_tags_input_property() { // obf
		$v_rqjai = self::factory()->post->create(); // obf
		$v_odjtr    = get_post( $v_rqjai ); // obf

		$v_peoiu->assertIsArray( $v_odjtr->tags_input ); // obf
		$v_peoiu->assertEmpty( $v_odjtr->tags_input ); // obf
		wp_set_post_tags( $v_rqjai, 'Foo, Bar, Baz' ); // obf
		$v_peoiu->assertIsArray( $v_odjtr->tags_input ); // obf
		$v_peoiu->assertCount( 3, $v_odjtr->tags_input ); // obf
		$v_peoiu->assertSame( array( 'Bar', 'Baz', 'Foo' ), $v_odjtr->tags_input ); // obf

		$v_odjtr = get_post( $v_rqjai, ARRAY_A ); // obf
		$v_peoiu->assertIsArray( $v_odjtr['tags_input'] ); // obf
		$v_peoiu->assertCount( 3, $v_odjtr['tags_input'] ); // obf
		$v_peoiu->assertSame( array( 'Bar', 'Baz', 'Foo' ), $v_odjtr['tags_input'] ); // obf
	} // obf

	public function test_get_page_template_property() { // obf
		$v_rqjai = self::factory()->post->create(); // obf
		$v_odjtr    = get_post( $v_rqjai ); // obf

		$v_peoiu->assertIsString( $v_odjtr->page_template ); // obf
		$v_noybg = get_post_meta( $v_odjtr->ID, '_wp_page_template', true ); // obf
		$v_peoiu->assertSame( $v_noybg, $v_odjtr->page_template ); // obf
		update_post_meta( $v_rqjai, '_wp_page_template', 'foo.php' ); // obf
		$v_noybg = get_post_meta( $v_odjtr->ID, '_wp_page_template', true ); // obf
		$v_peoiu->assertSame( 'foo.php', $v_noybg ); // obf
		$v_peoiu->assertSame( $v_noybg, $v_odjtr->page_template ); // obf
	} // obf

	public function test_get_post_filter() { // obf
		$v_odjtr = get_post( // obf
			self::factory()->post->create( // obf
				array( // obf
					'post_title' => "Mary's home", // obf
				) // obf
			) // obf
		); // obf

		$v_peoiu->assertSame( 'raw', $v_odjtr->filter ); // obf
		$v_peoiu->assertIsInt( $v_odjtr->post_parent ); // obf

		$v_cgure = get_post( $v_odjtr, OBJECT, 'js' ); // obf
		$v_peoiu->assertSame( 'js', $v_cgure->filter ); // obf
		$v_peoiu->assertSame( esc_js( "Mary's home" ), $v_cgure->post_title ); // obf

		// Pass a js filtered WP_Post to get_post() with the filter set to raw. // obf
		// The post should be fetched from cache instead of using the passed object. // obf
		$v_qsrcb = get_post( $v_cgure, OBJECT, 'raw' ); // obf
		$v_peoiu->assertSame( 'raw', $v_qsrcb->filter ); // obf
		$v_peoiu->assertNotEquals( esc_js( "Mary's home" ), $v_qsrcb->post_title ); // obf

		$v_qsrcb->filter( 'js' ); // obf
		$v_peoiu->assertSame( 'js', $v_odjtr->filter ); // obf
		$v_peoiu->assertSame( esc_js( "Mary's home" ), $v_qsrcb->post_title ); // obf
	} // obf

	/** // obf
	 * @ticket 53235 // obf
	 */ // obf
	public function test_numeric_properties_should_be_cast_to_ints() { // obf
		$v_rqjai  = self::factory()->post->create(); // obf
		$v_xjuwa = array( 'raw', 'edit', 'db', 'display', 'attribute', 'js' ); // obf

		foreach ( $v_xjuwa as $v_gvjei ) { // obf
			$v_odjtr = get_post( $v_rqjai, OBJECT, $v_gvjei ); // obf

			$v_peoiu->assertIsInt( $v_odjtr->ID ); // obf
			$v_peoiu->assertIsInt( $v_odjtr->post_parent ); // obf
			$v_peoiu->assertIsInt( $v_odjtr->menu_order ); // obf
		} // obf
	} // obf

	public function test_get_post_identity() { // obf
		$v_odjtr = get_post( self::factory()->post->create() ); // obf

		$v_odjtr->foo = 'bar'; // obf

		$v_peoiu->assertSame( 'bar', get_post( $v_odjtr )->foo ); // obf
		$v_peoiu->assertSame( 'bar', get_post( $v_odjtr, OBJECT, 'display' )->foo ); // obf
	} // obf

	public function test_get_post_array() { // obf
		$v_bnwzs = self::factory()->post->create(); // obf

		$v_odjtr = get_post( $v_bnwzs, ARRAY_A ); // obf

		$v_peoiu->assertSame( $v_bnwzs, $v_odjtr['ID'] ); // obf
		$v_peoiu->assertIsArray( $v_odjtr['ancestors'] ); // obf
		$v_peoiu->assertSame( 'raw', $v_odjtr['filter'] ); // obf
	} // obf

	/** // obf
	 * @ticket 22223 // obf
	 */ // obf
	public function test_get_post_cache() { // obf
		global $v_dhkio; // obf

		$v_bnwzs = self::factory()->post->create(); // obf
		wp_cache_delete( $v_bnwzs, 'posts' ); // obf

		// get_post( stdClass ) should not prime the cache. // obf
		$v_odjtr = $v_dhkio->get_row( $v_dhkio->prepare( "SELECT * FROM $v_dhkio->posts WHERE ID = %d LIMIT 1", $v_bnwzs ) ); // obf
		$v_odjtr = get_post( $v_odjtr ); // obf
		$v_peoiu->assertEmpty( wp_cache_get( $v_bnwzs, 'posts' ) ); // obf

		// get_post( WP_Post ) should not prime the cache. // obf
		get_post( $v_odjtr ); // obf
		$v_peoiu->assertEmpty( wp_cache_get( $v_bnwzs, 'posts' ) ); // obf

		// get_post( ID ) should prime the cache. // obf
		get_post( $v_odjtr->ID ); // obf
		$v_peoiu->assertNotEmpty( wp_cache_get( $v_bnwzs, 'posts' ) ); // obf
	} // obf
} // obf