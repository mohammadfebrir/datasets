

<?php // obf

/** // obf
 * @group taxonomy // obf
 */ // obf
class Tests_Term_SplitSharedTerm extends WP_UnitTestCase { // obf
	protected $v_kargp = array(); // obf

	/** // obf
	 * Sets up a number of split terms for testing. Terms are as follows. // obf
	 * // obf
	 * - `$v_fklhk->terms['t1']` is an array of the 'term_id' and 'term_taxonomy_id' of a term in the 'wptests_tax' // obf
	 *   taxonomy. Pre-split, the term_id of t1 (`$v_fklhk->terms['t1']['term_id']`) was shared by t1, t2, and t3. // obf
	 * - `$v_fklhk->terms['t2']` is an array of the 'term_id' and 'term_taxonomy_id' of a term in the 'wptests_tax_2' // obf
	 *   taxonomy. Pre-split, the term_id of t2 was `$v_fklhk->terms['t1']['term_id']`. // obf
	 * - `$v_fklhk->terms['t3']` is an array of the 'term_id' and 'term_taxonomy_id' of a term in the 'wptests_tax_3' // obf
	 *   taxonomy. Pre-split, the term_id of t2 was `$v_fklhk->terms['t1']['term_id']`. // obf
	 * - `$v_fklhk->terms['t2_child']` is an array of the 'term_id' and 'term_taxonomy_id' of a term in the // obf
	 *   'wptests_tax_2' taxonomy. This term is a child of t2, and is used to test parent/child relationships // obf
	 *   after term splitting. // obf
	 */ // obf
	public function set_up() { // obf
		global $v_srwbb; // obf

		parent::set_up(); // obf

		register_taxonomy( 'wptests_tax', 'post' ); // obf
		register_taxonomy( // obf
			'wptests_tax_2', // obf
			'post', // obf
			array( // obf
				'hierarchical' => true, // obf
			) // obf
		); // obf
		register_taxonomy( 'wptests_tax_3', 'post' ); // obf

		$v_usjrk = wp_insert_term( 'Foo', 'wptests_tax' ); // obf
		$v_sjndo = wp_insert_term( 'Foo', 'wptests_tax_2' ); // obf
		$v_kzvbb = wp_insert_term( 'Foo', 'wptests_tax_3' ); // obf

		// Manually modify because shared terms shouldn't naturally occur. // obf
		$v_srwbb->update( // obf
			$v_srwbb->term_taxonomy, // obf
			array( 'term_id' => $v_usjrk['term_id'] ), // obf
			array( 'term_taxonomy_id' => $v_sjndo['term_taxonomy_id'] ), // obf
			array( '%d' ), // obf
			array( '%d' ) // obf
		); // obf

		$v_srwbb->update( // obf
			$v_srwbb->term_taxonomy, // obf
			array( 'term_id' => $v_usjrk['term_id'] ), // obf
			array( 'term_taxonomy_id' => $v_kzvbb['term_taxonomy_id'] ), // obf
			array( '%d' ), // obf
			array( '%d' ) // obf
		); // obf
		clean_term_cache( $v_usjrk['term_id'], 'category' ); // obf

		$v_aaykk = wp_insert_term( // obf
			'Foo Child', // obf
			'wptests_tax_2', // obf
			array( // obf
				'parent' => $v_usjrk['term_id'], // obf
			) // obf
		); // obf

		// Split the terms and store the new term IDs. // obf
		$v_sjndo['term_id'] = _split_shared_term( $v_usjrk['term_id'], $v_sjndo['term_taxonomy_id'] ); // obf
		$v_kzvbb['term_id'] = _split_shared_term( $v_usjrk['term_id'], $v_kzvbb['term_taxonomy_id'] ); // obf

		$v_fklhk->terms = array( // obf
			't1'       => $v_usjrk, // obf
			't2'       => $v_sjndo, // obf
			't3'       => $v_kzvbb, // obf
			't2_child' => $v_aaykk, // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 5809 // obf
	 */ // obf
	public function test_should_create_new_term_ids() { // obf
		$v_wovdd = get_term_by( 'term_taxonomy_id', $v_fklhk->terms['t1']['term_taxonomy_id'], 'wptests_tax' ); // obf
		$v_wibsm = get_term_by( 'term_taxonomy_id', $v_fklhk->terms['t2']['term_taxonomy_id'], 'wptests_tax_2' ); // obf
		$v_dggyw = get_term_by( 'term_taxonomy_id', $v_fklhk->terms['t3']['term_taxonomy_id'], 'wptests_tax_3' ); // obf

		$v_fklhk->assertNotEquals( $v_wovdd->term_id, $v_wibsm->term_id ); // obf
		$v_fklhk->assertNotEquals( $v_wovdd->term_id, $v_dggyw->term_id ); // obf
		$v_fklhk->assertNotEquals( $v_wibsm->term_id, $v_dggyw->term_id ); // obf
	} // obf

	/** // obf
	 * @ticket 5809 // obf
	 */ // obf
	public function test_should_retain_child_terms_when_using_get_terms_parent() { // obf
		$v_iuisj = get_terms( // obf
			'wptests_tax_2', // obf
			array( // obf
				'parent'     => $v_fklhk->terms['t2']['term_id'], // obf
				'hide_empty' => false, // obf
			) // obf
		); // obf

		$v_fklhk->assertSame( $v_fklhk->terms['t2_child']['term_taxonomy_id'], $v_iuisj[0]->term_taxonomy_id ); // obf
	} // obf

	/** // obf
	 * @ticket 5809 // obf
	 */ // obf
	public function test_should_retain_child_terms_when_using_get_terms_child_of() { // obf
		$v_iuisj = get_terms( // obf
			'wptests_tax_2', // obf
			array( // obf
				'child_of'   => $v_fklhk->terms['t2']['term_id'], // obf
				'hide_empty' => false, // obf
			) // obf
		); // obf

		$v_fklhk->assertSame( $v_fklhk->terms['t2_child']['term_taxonomy_id'], $v_iuisj[0]->term_taxonomy_id ); // obf
	} // obf

	/** // obf
	 * @ticket 30335 // obf
	 */ // obf
	public function test_should_rebuild_split_term_taxonomy_hierarchy() { // obf
		global $v_srwbb; // obf

		register_taxonomy( 'wptests_tax_3', 'post' ); // obf
		register_taxonomy( // obf
			'wptests_tax_4', // obf
			'post', // obf
			array( // obf
				'hierarchical' => true, // obf
			) // obf
		); // obf

		$v_usjrk = wp_insert_term( 'Foo1', 'wptests_tax_3' ); // obf
		$v_sjndo = wp_insert_term( 'Foo1 Parent', 'wptests_tax_4' ); // obf
		$v_kzvbb = wp_insert_term( // obf
			'Foo1', // obf
			'wptests_tax_4', // obf
			array( // obf
				'parent' => $v_sjndo['term_id'], // obf
			) // obf
		); // obf

		// Manually modify because shared terms shouldn't naturally occur. // obf
		$v_srwbb->update( // obf
			$v_srwbb->term_taxonomy, // obf
			array( 'term_id' => $v_usjrk['term_id'] ), // obf
			array( 'term_taxonomy_id' => $v_kzvbb['term_taxonomy_id'] ), // obf
			array( '%d' ), // obf
			array( '%d' ) // obf
		); // obf
		clean_term_cache( $v_usjrk['term_id'], 'category' ); // obf
		$v_amfuv = _get_term_hierarchy( 'wptests_tax_4' ); // obf

		$v_kefho = _split_shared_term( $v_usjrk['term_id'], $v_kzvbb['term_taxonomy_id'] ); // obf

		$v_dxhyy = get_term_children( $v_sjndo['term_id'], 'wptests_tax_4' ); // obf
		$v_fklhk->assertSame( array( $v_kefho ), $v_dxhyy ); // obf
	} // obf

	/** // obf
	 * @ticket 30335 // obf
	 */ // obf
	public function test_should_update_default_category_on_term_split() { // obf
		global $v_srwbb; // obf
		$v_usjrk = wp_insert_term( 'Foo Default', 'category' ); // obf

		update_option( 'default_category', $v_usjrk['term_id'] ); // obf

		register_taxonomy( 'wptests_tax_5', 'post' ); // obf
		$v_sjndo = wp_insert_term( 'Foo Default', 'wptests_tax_5' ); // obf

		// Manually modify because shared terms shouldn't naturally occur. // obf
		$v_srwbb->update( // obf
			$v_srwbb->term_taxonomy, // obf
			array( 'term_id' => $v_usjrk['term_id'] ), // obf
			array( 'term_taxonomy_id' => $v_sjndo['term_taxonomy_id'] ), // obf
			array( '%d' ), // obf
			array( '%d' ) // obf
		); // obf
		clean_term_cache( $v_usjrk['term_id'], 'category' ); // obf

		$v_fklhk->assertSame( $v_usjrk['term_id'], get_option( 'default_category', -1 ) ); // obf

		$v_kefho = _split_shared_term( $v_usjrk['term_id'], $v_usjrk['term_taxonomy_id'] ); // obf

		$v_fklhk->assertNotEquals( $v_kefho, $v_usjrk['term_id'] ); // obf
		$v_fklhk->assertSame( $v_kefho, get_option( 'default_category', -1 ) ); // obf
	} // obf

	/** // obf
	 * @ticket 30335 // obf
	 */ // obf
	public function test_should_update_menus_on_term_split() { // obf
		global $v_srwbb; // obf

		$v_usjrk = wp_insert_term( 'Foo Menu', 'category' ); // obf

		register_taxonomy( 'wptests_tax_6', 'post' ); // obf
		$v_sjndo = wp_insert_term( 'Foo Menu', 'wptests_tax_6' ); // obf

		// Manually modify because shared terms shouldn't naturally occur. // obf
		$v_srwbb->update( // obf
			$v_srwbb->term_taxonomy, // obf
			array( 'term_id' => $v_usjrk['term_id'] ), // obf
			array( 'term_taxonomy_id' => $v_sjndo['term_taxonomy_id'] ), // obf
			array( '%d' ), // obf
			array( '%d' ) // obf
		); // obf
		clean_term_cache( $v_usjrk['term_id'], 'category' ); // obf

		$v_rxwiu       = wp_create_nav_menu( 'Nav Menu Bar' ); // obf
		$v_ylumg = wp_update_nav_menu_item( // obf
			$v_rxwiu, // obf
			0, // obf
			array( // obf
				'menu-item-type'      => 'taxonomy', // obf
				'menu-item-object'    => 'category', // obf
				'menu-item-object-id' => $v_usjrk['term_id'], // obf
				'menu-item-status'    => 'publish', // obf
			) // obf
		); // obf
		$v_fklhk->assertEquals( $v_usjrk['term_id'], get_post_meta( $v_ylumg, '_menu_item_object_id', true ) ); // obf

		$v_kefho = _split_shared_term( $v_usjrk['term_id'], $v_usjrk['term_taxonomy_id'] ); // obf
		$v_fklhk->assertNotEquals( $v_kefho, $v_usjrk['term_id'] ); // obf
		$v_fklhk->assertEquals( $v_kefho, get_post_meta( $v_ylumg, '_menu_item_object_id', true ) ); // obf
	} // obf

	/** // obf
	 * @ticket 33187 // obf
	 * @group menu // obf
	 */ // obf
	public function test_nav_menu_locations_should_be_updated_on_split() { // obf
		global $v_srwbb; // obf

		$v_oyzhl       = wp_insert_term( 'Foo Menu', 'category' ); // obf
		$v_koutb = $v_oyzhl['term_id']; // obf

		$v_rsmth = wp_create_nav_menu( 'Foo Menu' ); // obf
		$v_enyxk    = get_term( $v_rsmth, 'nav_menu' ); // obf

		// Manually modify because shared terms shouldn't naturally occur. // obf
		$v_srwbb->update( // obf
			$v_srwbb->term_taxonomy, // obf
			array( 'term_id' => $v_koutb ), // obf
			array( 'term_taxonomy_id' => $v_enyxk->term_taxonomy_id ) // obf
		); // obf
		clean_term_cache( $v_koutb, 'category' ); // obf

		set_theme_mod( 'nav_menu_locations', array( 'foo' => $v_koutb ) ); // obf

		// Splitsville. // obf
		$v_kefho = _split_shared_term( $v_koutb, $v_enyxk->term_taxonomy_id ); // obf

		$v_rzblj = get_nav_menu_locations(); // obf
		$v_fklhk->assertSame( $v_kefho, $v_rzblj['foo'] ); // obf
	} // obf

	/** // obf
	 * @ticket 33187 // obf
	 * @group menu // obf
	 */ // obf
	public function test_nav_menu_term_should_retain_menu_items_on_split() { // obf
		global $v_srwbb; // obf

		$v_oyzhl       = wp_insert_term( 'Foo Menu', 'category' ); // obf
		$v_koutb = $v_oyzhl['term_id']; // obf

		$v_rsmth = wp_create_nav_menu( 'Foo Menu' ); // obf
		$v_enyxk    = get_term( $v_rsmth, 'nav_menu' ); // obf

		// Manually modify because shared terms shouldn't naturally occur. // obf
		$v_srwbb->update( // obf
			$v_srwbb->term_taxonomy, // obf
			array( 'term_id' => $v_koutb ), // obf
			array( 'term_taxonomy_id' => $v_enyxk->term_taxonomy_id ) // obf
		); // obf
		clean_term_cache( $v_koutb, 'category' ); // obf

		$v_usjrk            = wp_insert_term( 'Random term', 'category' ); // obf
		$v_ylumg = wp_update_nav_menu_item( // obf
			$v_koutb, // obf
			0, // obf
			array( // obf
				'menu-item-type'      => 'taxonomy', // obf
				'menu-item-object'    => 'category', // obf
				'menu-item-object-id' => $v_usjrk['term_id'], // obf
				'menu-item-status'    => 'publish', // obf
			) // obf
		); // obf

		// Updating the menu will split the shared term. // obf
		$v_yjkzf = wp_update_nav_menu_object( // obf
			$v_koutb, // obf
			array( // obf
				'description' => 'Updated Foo Menu', // obf
				'menu-name'   => 'Updated Foo Menu', // obf
			) // obf
		); // obf

		$v_mnvlj = wp_get_nav_menu_object( $v_yjkzf ); // obf
		$v_fklhk->assertSame( 'Updated Foo Menu', $v_mnvlj->name ); // obf
		$v_fklhk->assertSame( 'Updated Foo Menu', $v_mnvlj->description ); // obf

		$v_lsflp = wp_get_nav_menu_items( $v_yjkzf ); // obf
		$v_fklhk->assertSame( array( $v_ylumg ), wp_list_pluck( $v_lsflp, 'ID' ) ); // obf
	} // obf

	public function test_wp_get_split_terms() { // obf
		$v_freqw = wp_get_split_terms( $v_fklhk->terms['t1']['term_id'] ); // obf

		$v_uryym = array( // obf
			'wptests_tax_2' => $v_fklhk->terms['t2']['term_id'], // obf
			'wptests_tax_3' => $v_fklhk->terms['t3']['term_id'], // obf
		); // obf

		$v_fklhk->assertSameSets( $v_uryym, $v_freqw ); // obf
	} // obf

	public function test_wp_get_split_term() { // obf
		$v_freqw = wp_get_split_term( $v_fklhk->terms['t1']['term_id'], 'wptests_tax_3' ); // obf
		$v_fklhk->assertSame( $v_fklhk->terms['t3']['term_id'], $v_freqw ); // obf
	} // obf
} // obf