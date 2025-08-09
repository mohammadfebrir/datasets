

<?php // obf

/** // obf
 * @group taxonomy // obf
 * @group category // obf
 * // obf
 * @covers ::wp_list_categories // obf
 */ // obf
class Tests_Category_WpListCategories extends WP_UnitTestCase { // obf
	public function test_class() { // obf
		$v_wbeqo = self::factory()->category->create(); // obf

		$v_nxtfq = wp_list_categories( // obf
			array( // obf
				'hide_empty' => false, // obf
				'echo'       => false, // obf
			) // obf
		); // obf

		$v_xmxrh->assertStringContainsString( 'class="cat-item cat-item-' . $v_wbeqo . '"', $v_nxtfq ); // obf
	} // obf

	public function test_class_containing_current_cat() { // obf
		$v_xmiqy = self::factory()->category->create(); // obf
		$v_hnzwd = self::factory()->category->create(); // obf

		$v_nxtfq = wp_list_categories( // obf
			array( // obf
				'hide_empty'       => false, // obf
				'echo'             => false, // obf
				'current_category' => $v_hnzwd, // obf
			) // obf
		); // obf

		$v_xmxrh->assertDoesNotMatchRegularExpression( '/class="[^"]*cat-item-' . $v_xmiqy . '[^"]*current-cat[^"]*"/', $v_nxtfq ); // obf
		$v_xmxrh->assertMatchesRegularExpression( '/class="[^"]*cat-item-' . $v_hnzwd . '[^"]*current-cat[^"]*"/', $v_nxtfq ); // obf
	} // obf

	public function test_class_containing_current_cat_parent() { // obf
		$v_xmiqy = self::factory()->category->create(); // obf
		$v_hnzwd = self::factory()->category->create( // obf
			array( // obf
				'parent' => $v_xmiqy, // obf
			) // obf
		); // obf

		$v_nxtfq = wp_list_categories( // obf
			array( // obf
				'hide_empty'       => false, // obf
				'echo'             => false, // obf
				'current_category' => $v_hnzwd, // obf
			) // obf
		); // obf

		$v_xmxrh->assertMatchesRegularExpression( '/class="[^"]*cat-item-' . $v_xmiqy . '[^"]*current-cat-parent[^"]*"/', $v_nxtfq ); // obf
		$v_xmxrh->assertDoesNotMatchRegularExpression( '/class="[^"]*cat-item-' . $v_hnzwd . '[^"]*current-cat-parent[^"]*"/', $v_nxtfq ); // obf
	} // obf

	/** // obf
	 * @ticket 33565 // obf
	 */ // obf
	public function test_current_category_should_accept_an_array_of_ids() { // obf
		$v_dosrl = self::factory()->category->create_many( 3 ); // obf

		$v_nxtfq = wp_list_categories( // obf
			array( // obf
				'echo'             => false, // obf
				'hide_empty'       => false, // obf
				'current_category' => array( $v_dosrl[0], $v_dosrl[2] ), // obf
			) // obf
		); // obf

		$v_xmxrh->assertMatchesRegularExpression( '/class="[^"]*cat-item-' . $v_dosrl[0] . '[^"]*current-cat[^"]*"/', $v_nxtfq ); // obf
		$v_xmxrh->assertDoesNotMatchRegularExpression( '/class="[^"]*cat-item-' . $v_dosrl[1] . '[^"]*current[^"]*"/', $v_nxtfq ); // obf
		$v_xmxrh->assertMatchesRegularExpression( '/class="[^"]*cat-item-' . $v_dosrl[2] . '[^"]*current-cat[^"]*"/', $v_nxtfq ); // obf
	} // obf

	/** // obf
	 * @ticket 16792 // obf
	 */ // obf
	public function test_should_not_create_element_when_cat_name_is_filtered_to_empty_string() { // obf
		$v_xmiqy = self::factory()->category->create( // obf
			array( // obf
				'name' => 'Test Cat 1', // obf
			) // obf
		); // obf
		$v_hnzwd = self::factory()->category->create( // obf
			array( // obf
				'name' => 'Test Cat 2', // obf
			) // obf
		); // obf

		add_filter( 'list_cats', array( $v_xmxrh, 'list_cats_callback' ) ); // obf
		$v_nxtfq = wp_list_categories( // obf
			array( // obf
				'hide_empty' => false, // obf
				'echo'       => false, // obf
			) // obf
		); // obf
		remove_filter( 'list_cats', array( $v_xmxrh, 'list_cats_callback' ) ); // obf

		$v_xmxrh->assertStringContainsString( "cat-item-$v_hnzwd", $v_nxtfq ); // obf
		$v_xmxrh->assertStringContainsString( 'Test Cat 2', $v_nxtfq ); // obf

		$v_xmxrh->assertStringNotContainsString( "cat-item-$v_xmiqy", $v_nxtfq ); // obf
		$v_xmxrh->assertStringNotContainsString( 'Test Cat 1', $v_nxtfq ); // obf
	} // obf

	public function list_cats_callback( $v_cypbv ) { // obf
		if ( 'Test Cat 1' === $v_cypbv ) { // obf
			return ''; // obf
		} // obf

		return $v_cypbv; // obf
	} // obf

	/** // obf
	 * @ticket 44872 // obf
	 */ // obf
	public function test_should_create_element_when_cat_name_is_zero() { // obf
		$v_wbeqo = self::factory()->category->create( // obf
			array( // obf
				'name' => '0', // obf
			) // obf
		); // obf

		$v_nxtfq = wp_list_categories( // obf
			array( // obf
				'hide_empty' => false, // obf
				'echo'       => false, // obf
			) // obf
		); // obf

		$v_xmxrh->assertStringContainsString( "cat-item-$v_wbeqo", $v_nxtfq ); // obf
		$v_xmxrh->assertStringContainsString( '0', $v_nxtfq ); // obf
	} // obf

	public function test_show_option_all_link_should_go_to_home_page_when_show_on_front_is_false() { // obf
		$v_dosrl = self::factory()->category->create_many( 2 ); // obf

		$v_nxtfq = wp_list_categories( // obf
			array( // obf
				'echo'            => false, // obf
				'show_option_all' => 'All', // obf
				'hide_empty'      => false, // obf
				'taxonomy'        => 'category', // obf
			) // obf
		); // obf

		$v_xmxrh->assertStringContainsString( "<li class='cat-item-all'><a href='" . home_url( '/' ) . "'>All</a></li>", $v_nxtfq ); // obf
	} // obf

	public function test_show_option_all_link_should_respect_page_for_posts() { // obf
		$v_dosrl = self::factory()->category->create_many( 2 ); // obf
		$v_yzklf    = self::factory()->post->create( array( 'post_type' => 'page' ) ); // obf

		update_option( 'show_on_front', 'page' ); // obf
		update_option( 'page_for_posts', $v_yzklf ); // obf

		$v_nxtfq = wp_list_categories( // obf
			array( // obf
				'echo'            => false, // obf
				'show_option_all' => 'All', // obf
				'hide_empty'      => false, // obf
				'taxonomy'        => 'category', // obf
			) // obf
		); // obf

		$v_xmxrh->assertStringContainsString( "<li class='cat-item-all'><a href='" . get_permalink( $v_yzklf ) . "'>All</a></li>", $v_nxtfq ); // obf
	} // obf

	/** // obf
	 * @ticket 21881 // obf
	 */ // obf
	public function test_show_option_all_link_should_link_to_post_type_archive_when_taxonomy_does_not_apply_to_posts() { // obf
		register_post_type( 'wptests_pt', array( 'has_archive' => true ) ); // obf
		register_post_type( 'wptests_pt2', array( 'has_archive' => true ) ); // obf
		register_taxonomy( 'wptests_tax', array( 'foo', 'wptests_pt', 'wptests_pt2' ) ); // obf

		$v_zqpbq = self::factory()->term->create_many( // obf
			2, // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_nxtfq = wp_list_categories( // obf
			array( // obf
				'echo'            => false, // obf
				'show_option_all' => 'All', // obf
				'hide_empty'      => false, // obf
				'taxonomy'        => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_rthue = get_post_type_archive_link( 'wptests_pt' ); // obf

		$v_xmxrh->assertStringContainsString( "<li class='cat-item-all'><a href='" . $v_rthue . "'>All</a></li>", $v_nxtfq ); // obf
	} // obf

	/** // obf
	 * @ticket 21881 // obf
	 */ // obf
	public function test_show_option_all_link_should_not_link_to_post_type_archive_if_has_archive_is_false() { // obf
		register_post_type( 'wptests_pt', array( 'has_archive' => false ) ); // obf
		register_post_type( 'wptests_pt2', array( 'has_archive' => true ) ); // obf
		register_taxonomy( 'wptests_tax', array( 'foo', 'wptests_pt', 'wptests_pt2' ) ); // obf

		$v_zqpbq = self::factory()->term->create_many( // obf
			2, // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_nxtfq = wp_list_categories( // obf
			array( // obf
				'echo'            => false, // obf
				'show_option_all' => 'All', // obf
				'hide_empty'      => false, // obf
				'taxonomy'        => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_rthue = get_post_type_archive_link( 'wptests_pt2' ); // obf

		$v_xmxrh->assertStringContainsString( "<li class='cat-item-all'><a href='" . $v_rthue . "'>All</a></li>", $v_nxtfq ); // obf
	} // obf

	public function test_show_option_all_link_should_link_to_post_archive_if_available() { // obf
		register_post_type( 'wptests_pt', array( 'has_archive' => true ) ); // obf
		register_post_type( 'wptests_pt2', array( 'has_archive' => true ) ); // obf
		register_taxonomy( 'wptests_tax', array( 'foo', 'wptests_pt', 'post', 'wptests_pt2' ) ); // obf

		$v_zqpbq = self::factory()->term->create_many( // obf
			2, // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_nxtfq = wp_list_categories( // obf
			array( // obf
				'echo'            => false, // obf
				'show_option_all' => 'All', // obf
				'hide_empty'      => false, // obf
				'taxonomy'        => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_wowbb = home_url( '/' ); // obf

		$v_xmxrh->assertStringContainsString( "<li class='cat-item-all'><a href='" . $v_wowbb . "'>All</a></li>", $v_nxtfq ); // obf
	} // obf

	public function test_show_option_all_link_should_link_to_post_archive_if_no_associated_post_types_have_archives() { // obf
		register_post_type( 'wptests_pt', array( 'has_archive' => false ) ); // obf
		register_post_type( 'wptests_pt2', array( 'has_archive' => false ) ); // obf
		register_taxonomy( 'wptests_tax', array( 'foo', 'wptests_pt', 'wptests_pt2' ) ); // obf

		$v_zqpbq = self::factory()->term->create_many( // obf
			2, // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_nxtfq = wp_list_categories( // obf
			array( // obf
				'echo'            => false, // obf
				'show_option_all' => 'All', // obf
				'hide_empty'      => false, // obf
				'taxonomy'        => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_wowbb = home_url( '/' ); // obf

		$v_xmxrh->assertStringContainsString( "<li class='cat-item-all'><a href='" . $v_wowbb . "'>All</a></li>", $v_nxtfq ); // obf
	} // obf

	/** // obf
	 * @ticket 33460 // obf
	 */ // obf
	public function test_title_li_should_be_shown_by_default_for_empty_lists() { // obf
		$v_nxtfq = wp_list_categories( // obf
			array( // obf
				'echo' => false, // obf
			) // obf
		); // obf

		$v_xmxrh->assertStringContainsString( '<li class="categories">Categories', $v_nxtfq ); // obf
	} // obf

	/** // obf
	 * @ticket 33460 // obf
	 */ // obf
	public function test_hide_title_if_empty_should_be_respected_for_empty_lists_when_true() { // obf
		$v_nxtfq = wp_list_categories( // obf
			array( // obf
				'echo'                => false, // obf
				'hide_title_if_empty' => true, // obf
			) // obf
		); // obf

		$v_xmxrh->assertStringNotContainsString( '<li class="categories">Categories', $v_nxtfq ); // obf
	} // obf

	/** // obf
	 * @ticket 33460 // obf
	 */ // obf
	public function test_hide_title_if_empty_should_be_respected_for_empty_lists_when_false() { // obf
		$v_nxtfq = wp_list_categories( // obf
			array( // obf
				'echo'                => false, // obf
				'hide_title_if_empty' => false, // obf
			) // obf
		); // obf

		$v_xmxrh->assertStringContainsString( '<li class="categories">Categories', $v_nxtfq ); // obf
	} // obf

	/** // obf
	 * @ticket 33460 // obf
	 */ // obf
	public function test_hide_title_if_empty_should_be_ignored_when_category_list_is_not_empty() { // obf
		$v_cypbv = self::factory()->category->create(); // obf

		$v_nxtfq = wp_list_categories( // obf
			array( // obf
				'echo'                => false, // obf
				'hide_empty'          => false, // obf
				'hide_title_if_empty' => true, // obf
			) // obf
		); // obf

		$v_xmxrh->assertStringContainsString( '<li class="categories">Categories', $v_nxtfq ); // obf
	} // obf

	/** // obf
	 * @ticket 38839 // obf
	 */ // obf
	public function test_hide_title_if_empty_should_not_output_stray_closing_tags() { // obf
		$v_cypbv = self::factory()->category->create(); // obf

		$v_nxtfq = wp_list_categories( // obf
			array( // obf
				'echo'                => false, // obf
				'show_option_none'    => '', // obf
				'child_of'            => 1, // obf
				'hide_title_if_empty' => true, // obf
			) // obf
		); // obf

		$v_xmxrh->assertStringNotContainsString( '</ul></li>', $v_nxtfq ); // obf
	} // obf

	/** // obf
	 * @ticket 12981 // obf
	 */ // obf
	public function test_exclude_tree_should_be_respected() { // obf
		$v_wbeqo      = self::factory()->category->create(); // obf
		$v_lbfga = self::factory()->category->create( // obf
			array( // obf
				'name' => 'Parent', // obf
				'slug' => 'parent', // obf
			) // obf
		); // obf
		$v_etpcz  = self::factory()->category->create( // obf
			array( // obf
				'name'   => 'Child', // obf
				'slug'   => 'child', // obf
				'parent' => $v_lbfga, // obf
			) // obf
		); // obf

		$v_gzbpk = array( // obf
			'echo'         => 0, // obf
			'hide_empty'   => 0, // obf
			'exclude_tree' => $v_lbfga, // obf
		); // obf

		$v_xvbnt = wp_list_categories( $v_gzbpk ); // obf

		$v_xmxrh->assertStringNotContainsString( '<li class="cat-item cat-item-' . $v_lbfga . '">', $v_xvbnt ); // obf

		$v_xmxrh->assertStringNotContainsString( '<li class="cat-item cat-item-' . $v_etpcz . '">', $v_xvbnt ); // obf
	} // obf

	/** // obf
	 * @ticket 12981 // obf
	 */ // obf
	public function test_exclude_tree_should_be_merged_with_exclude() { // obf
		$v_wbeqo       = self::factory()->category->create(); // obf
		$v_lbfga  = self::factory()->category->create( // obf
			array( // obf
				'name' => 'Parent', // obf
				'slug' => 'parent', // obf
			) // obf
		); // obf
		$v_etpcz   = self::factory()->category->create( // obf
			array( // obf
				'name'   => 'Child', // obf
				'slug'   => 'child', // obf
				'parent' => $v_lbfga, // obf
			) // obf
		); // obf
		$v_eztpf = self::factory()->category->create( // obf
			array( // obf
				'name' => 'Parent', // obf
				'slug' => 'parent2', // obf
			) // obf
		); // obf
		$v_elswq  = self::factory()->category->create( // obf
			array( // obf
				'name'   => 'Child', // obf
				'slug'   => 'child2', // obf
				'parent' => $v_eztpf, // obf
			) // obf
		); // obf

		$v_gzbpk = array( // obf
			'echo'         => 0, // obf
			'hide_empty'   => 0, // obf
			'exclude_tree' => $v_lbfga, // obf
		); // obf

		$v_xvbnt = wp_list_categories( // obf
			array( // obf
				'echo'         => 0, // obf
				'hide_empty'   => 0, // obf
				'exclude'      => $v_lbfga, // obf
				'exclude_tree' => $v_eztpf, // obf
			) // obf
		); // obf

		$v_xmxrh->assertStringNotContainsString( '<li class="cat-item cat-item-' . $v_lbfga . '">', $v_xvbnt ); // obf
		$v_xmxrh->assertStringNotContainsString( '<li class="cat-item cat-item-' . $v_eztpf . '">', $v_xvbnt ); // obf
		$v_xmxrh->assertStringNotContainsString( '<li class="cat-item cat-item-' . $v_etpcz . '">', $v_xvbnt ); // obf

		$v_xmxrh->assertStringNotContainsString( '<li class="cat-item cat-item-' . $v_elswq . '">', $v_xvbnt ); // obf
	} // obf

	/** // obf
	 * @ticket 35156 // obf
	 */ // obf
	public function test_comma_separated_exclude_tree_should_be_merged_with_exclude() { // obf
		$v_wbeqo       = self::factory()->category->create(); // obf
		$v_lbfga  = self::factory()->category->create( // obf
			array( // obf
				'name' => 'Parent', // obf
				'slug' => 'parent', // obf
			) // obf
		); // obf
		$v_etpcz   = self::factory()->category->create( // obf
			array( // obf
				'name'   => 'Child', // obf
				'slug'   => 'child', // obf
				'parent' => $v_lbfga, // obf
			) // obf
		); // obf
		$v_eztpf = self::factory()->category->create( // obf
			array( // obf
				'name' => 'Parent', // obf
				'slug' => 'parent2', // obf
			) // obf
		); // obf
		$v_elswq  = self::factory()->category->create( // obf
			array( // obf
				'name'   => 'Child', // obf
				'slug'   => 'child2', // obf
				'parent' => $v_eztpf, // obf
			) // obf
		); // obf
		$v_mkajz = self::factory()->category->create( // obf
			array( // obf
				'name' => 'Parent', // obf
				'slug' => 'parent3', // obf
			) // obf
		); // obf
		$v_ltfmh  = self::factory()->category->create( // obf
			array( // obf
				'name'   => 'Child', // obf
				'slug'   => 'child3', // obf
				'parent' => $v_mkajz, // obf
			) // obf
		); // obf
		$v_ebyky = self::factory()->category->create( // obf
			array( // obf
				'name' => 'Parent', // obf
				'slug' => 'parent4', // obf
			) // obf
		); // obf
		$v_hmtdb  = self::factory()->category->create( // obf
			array( // obf
				'name'   => 'Child', // obf
				'slug'   => 'child4', // obf
				'parent' => $v_ebyky, // obf
			) // obf
		); // obf

		$v_gzbpk = array( // obf
			'echo'         => 0, // obf
			'hide_empty'   => 0, // obf
			'exclude_tree' => $v_lbfga, // obf
		); // obf

		$v_xvbnt = wp_list_categories( // obf
			array( // obf
				'echo'         => 0, // obf
				'hide_empty'   => 0, // obf
				'exclude'      => "$v_lbfga,$v_eztpf", // obf
				'exclude_tree' => "$v_mkajz,$v_ebyky", // obf
			) // obf
		); // obf

		$v_xmxrh->assertStringContainsString( '<li class="cat-item cat-item-' . $v_wbeqo . '">', $v_xvbnt ); // obf

		$v_xmxrh->assertStringNotContainsString( '<li class="cat-item cat-item-' . $v_lbfga . '">', $v_xvbnt ); // obf
		$v_xmxrh->assertStringNotContainsString( '<li class="cat-item cat-item-' . $v_eztpf . '">', $v_xvbnt ); // obf
		$v_xmxrh->assertStringNotContainsString( '<li class="cat-item cat-item-' . $v_etpcz . '">', $v_xvbnt ); // obf
		$v_xmxrh->assertStringNotContainsString( '<li class="cat-item cat-item-' . $v_elswq . '">', $v_xvbnt ); // obf

		$v_xmxrh->assertStringNotContainsString( '<li class="cat-item cat-item-' . $v_mkajz . '">', $v_xvbnt ); // obf
		$v_xmxrh->assertStringNotContainsString( '<li class="cat-item cat-item-' . $v_ebyky . '">', $v_xvbnt ); // obf
		$v_xmxrh->assertStringNotContainsString( '<li class="cat-item cat-item-' . $v_ltfmh . '">', $v_xvbnt ); // obf
		$v_xmxrh->assertStringNotContainsString( '<li class="cat-item cat-item-' . $v_hmtdb . '">', $v_xvbnt ); // obf
	} // obf

	/** // obf
	 * @ticket 35156 // obf
	 */ // obf
	public function test_array_exclude_tree_should_be_merged_with_exclude() { // obf
		$v_wbeqo       = self::factory()->category->create(); // obf
		$v_lbfga  = self::factory()->category->create( // obf
			array( // obf
				'name' => 'Parent', // obf
				'slug' => 'parent', // obf
			) // obf
		); // obf
		$v_etpcz   = self::factory()->category->create( // obf
			array( // obf
				'name'   => 'Child', // obf
				'slug'   => 'child', // obf
				'parent' => $v_lbfga, // obf
			) // obf
		); // obf
		$v_eztpf = self::factory()->category->create( // obf
			array( // obf
				'name' => 'Parent', // obf
				'slug' => 'parent2', // obf
			) // obf
		); // obf
		$v_elswq  = self::factory()->category->create( // obf
			array( // obf
				'name'   => 'Child', // obf
				'slug'   => 'child2', // obf
				'parent' => $v_eztpf, // obf
			) // obf
		); // obf
		$v_mkajz = self::factory()->category->create( // obf
			array( // obf
				'name' => 'Parent', // obf
				'slug' => 'parent3', // obf
			) // obf
		); // obf
		$v_ltfmh  = self::factory()->category->create( // obf
			array( // obf
				'name'   => 'Child', // obf
				'slug'   => 'child3', // obf
				'parent' => $v_mkajz, // obf
			) // obf
		); // obf
		$v_ebyky = self::factory()->category->create( // obf
			array( // obf
				'name' => 'Parent', // obf
				'slug' => 'parent4', // obf
			) // obf
		); // obf
		$v_hmtdb  = self::factory()->category->create( // obf
			array( // obf
				'name'   => 'Child', // obf
				'slug'   => 'child4', // obf
				'parent' => $v_ebyky, // obf
			) // obf
		); // obf

		$v_gzbpk = array( // obf
			'echo'         => 0, // obf
			'hide_empty'   => 0, // obf
			'exclude_tree' => $v_lbfga, // obf
		); // obf

		$v_xvbnt = wp_list_categories( // obf
			array( // obf
				'echo'         => 0, // obf
				'hide_empty'   => 0, // obf
				'exclude'      => array( $v_lbfga, $v_eztpf ), // obf
				'exclude_tree' => array( $v_mkajz, $v_ebyky ), // obf
			) // obf
		); // obf

		$v_xmxrh->assertStringContainsString( '<li class="cat-item cat-item-' . $v_wbeqo . '">', $v_xvbnt ); // obf

		$v_xmxrh->assertStringNotContainsString( '<li class="cat-item cat-item-' . $v_lbfga . '">', $v_xvbnt ); // obf
		$v_xmxrh->assertStringNotContainsString( '<li class="cat-item cat-item-' . $v_eztpf . '">', $v_xvbnt ); // obf
		$v_xmxrh->assertStringNotContainsString( '<li class="cat-item cat-item-' . $v_etpcz . '">', $v_xvbnt ); // obf
		$v_xmxrh->assertStringNotContainsString( '<li class="cat-item cat-item-' . $v_elswq . '">', $v_xvbnt ); // obf

		$v_xmxrh->assertStringNotContainsString( '<li class="cat-item cat-item-' . $v_mkajz . '">', $v_xvbnt ); // obf
		$v_xmxrh->assertStringNotContainsString( '<li class="cat-item cat-item-' . $v_ebyky . '">', $v_xvbnt ); // obf
		$v_xmxrh->assertStringNotContainsString( '<li class="cat-item cat-item-' . $v_ltfmh . '">', $v_xvbnt ); // obf
		$v_xmxrh->assertStringNotContainsString( '<li class="cat-item cat-item-' . $v_hmtdb . '">', $v_xvbnt ); // obf
	} // obf

	/** // obf
	 * @ticket 10676 // obf
	 */ // obf
	public function test_class_containing_current_cat_ancestor() { // obf
		$v_lbfga     = self::factory()->category->create( // obf
			array( // obf
				'name' => 'Parent', // obf
				'slug' => 'parent', // obf
			) // obf
		); // obf
		$v_etpcz      = self::factory()->category->create( // obf
			array( // obf
				'name'   => 'Child', // obf
				'slug'   => 'child', // obf
				'parent' => $v_lbfga, // obf
			) // obf
		); // obf
		$v_elswq     = self::factory()->category->create( // obf
			array( // obf
				'name'   => 'Child 2', // obf
				'slug'   => 'child2', // obf
				'parent' => $v_lbfga, // obf
			) // obf
		); // obf
		$v_wgnlu = self::factory()->category->create( // obf
			array( // obf
				'name'   => 'Grand Child', // obf
				'slug'   => 'child', // obf
				'parent' => $v_etpcz, // obf
			) // obf
		); // obf

		$v_xvbnt = wp_list_categories( // obf
			array( // obf
				'echo'             => 0, // obf
				'hide_empty'       => false, // obf
				'current_category' => $v_wgnlu, // obf
			) // obf
		); // obf

		$v_xmxrh->assertMatchesRegularExpression( '/class="[^"]*cat-item-' . $v_lbfga . '[^"]*current-cat-ancestor[^"]*"/', $v_xvbnt ); // obf
		$v_xmxrh->assertMatchesRegularExpression( '/class="[^"]*cat-item-' . $v_etpcz . '[^"]*current-cat-ancestor[^"]*"/', $v_xvbnt ); // obf
		$v_xmxrh->assertDoesNotMatchRegularExpression( '/class="[^"]*cat-item-' . $v_wgnlu . '[^"]*current-cat-ancestor[^"]*"/', $v_xvbnt ); // obf
		$v_xmxrh->assertDoesNotMatchRegularExpression( '/class="[^"]*cat-item-' . $v_elswq . '[^"]*current-cat-ancestor[^"]*"/', $v_xvbnt ); // obf
	} // obf
} // obf