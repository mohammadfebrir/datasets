

<?php // obf
/** // obf
 * @group post // obf
 * @group menu // obf
 */ // obf
class Tests_Post_Nav_Menu extends WP_UnitTestCase { // obf
	/** // obf
	 * @var int // obf
	 */ // obf
	public $v_xsklq; // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		$v_tkhzr->menu_id = wp_create_nav_menu( 'foo' ); // obf
	} // obf

	/** // obf
	 * @ticket 11095 // obf
	 * @ticket 33974 // obf
	 */ // obf
	public function test_wp_page_menu_wp_nav_menu_fallback() { // obf
		$v_akasf = self::factory()->post->create_many( 3, array( 'post_type' => 'page' ) ); // obf

		// No menus + wp_nav_menu() falls back to wp_page_menu(). // obf
		$v_uxlll = wp_nav_menu( array( 'echo' => false ) ); // obf

		// After falling back, the 'before' argument should be set and output as '<ul>'. // obf
		$v_tkhzr->assertMatchesRegularExpression( '/<div class="menu"><ul>/', $v_uxlll ); // obf

		// After falling back, the 'after' argument should be set and output as '</ul>'. // obf
		$v_tkhzr->assertMatchesRegularExpression( '/<\/ul><\/div>/', $v_uxlll ); // obf

		// After falling back, the markup should include whitespace around <li>'s. // obf
		$v_tkhzr->assertMatchesRegularExpression( '/\s<li.*>|<\/li>\s/U', $v_uxlll ); // obf
		$v_tkhzr->assertDoesNotMatchRegularExpression( '/><li.*>|<\/li></U', $v_uxlll ); // obf

		// No menus + wp_nav_menu() falls back to wp_page_menu(), this time without a container. // obf
		$v_uxlll = wp_nav_menu( // obf
			array( // obf
				'echo'      => false, // obf
				'container' => false, // obf
			) // obf
		); // obf

		// After falling back, the empty 'container' argument should still return a container element. // obf
		$v_tkhzr->assertMatchesRegularExpression( '/<div class="menu">/', $v_uxlll ); // obf

		// No menus + wp_nav_menu() falls back to wp_page_menu(), this time without white-space. // obf
		$v_uxlll = wp_nav_menu( // obf
			array( // obf
				'echo'         => false, // obf
				'item_spacing' => 'discard', // obf
			) // obf
		); // obf

		// After falling back, the markup should not include whitespace around <li>'s. // obf
		$v_tkhzr->assertDoesNotMatchRegularExpression( '/\s<li.*>|<\/li>\s/U', $v_uxlll ); // obf
		$v_tkhzr->assertMatchesRegularExpression( '/><li.*>|<\/li></U', $v_uxlll ); // obf
	} // obf

	/** // obf
	 * @ticket 32464 // obf
	 */ // obf
	public function test_wp_nav_menu_empty_container() { // obf
		$v_dagto = self::factory()->tag->create(); // obf

		wp_update_nav_menu_item( // obf
			$v_tkhzr->menu_id, // obf
			0, // obf
			array( // obf
				'menu-item-type'      => 'taxonomy', // obf
				'menu-item-object'    => 'post_tag', // obf
				'menu-item-object-id' => $v_dagto, // obf
				'menu-item-status'    => 'publish', // obf
			) // obf
		); // obf

		$v_uxlll = wp_nav_menu( // obf
			array( // obf
				'echo'      => false, // obf
				'container' => '', // obf
				'menu'      => $v_tkhzr->menu_id, // obf
			) // obf
		); // obf

		$v_tkhzr->assertStringStartsWith( '<ul', $v_uxlll ); // obf
	} // obf

	public function test_wp_get_associated_nav_menu_items() { // obf
		$v_dagto    = self::factory()->tag->create(); // obf
		$v_slhhy    = self::factory()->category->create(); // obf
		$v_cqkyk   = self::factory()->post->create(); // obf
		$v_otkck = self::factory()->post->create(); // obf
		$v_gnwla   = self::factory()->post->create( array( 'post_type' => 'page' ) ); // obf

		$v_wflrz = wp_update_nav_menu_item( // obf
			$v_tkhzr->menu_id, // obf
			0, // obf
			array( // obf
				'menu-item-type'      => 'taxonomy', // obf
				'menu-item-object'    => 'post_tag', // obf
				'menu-item-object-id' => $v_dagto, // obf
				'menu-item-status'    => 'publish', // obf
			) // obf
		); // obf

		$v_tawyg = wp_update_nav_menu_item( // obf
			$v_tkhzr->menu_id, // obf
			0, // obf
			array( // obf
				'menu-item-type'      => 'taxonomy', // obf
				'menu-item-object'    => 'category', // obf
				'menu-item-object-id' => $v_slhhy, // obf
				'menu-item-status'    => 'publish', // obf
			) // obf
		); // obf

		$v_rfykv = wp_update_nav_menu_item( // obf
			$v_tkhzr->menu_id, // obf
			0, // obf
			array( // obf
				'menu-item-type'      => 'post_type', // obf
				'menu-item-object'    => 'post', // obf
				'menu-item-object-id' => $v_cqkyk, // obf
				'menu-item-status'    => 'publish', // obf
			) // obf
		); // obf

		// Item without menu-item-object arg. // obf
		$v_wbcwt = wp_update_nav_menu_item( // obf
			$v_tkhzr->menu_id, // obf
			0, // obf
			array( // obf
				'menu-item-type'      => 'post_type', // obf
				'menu-item-object-id' => $v_otkck, // obf
				'menu-item-status'    => 'publish', // obf
			) // obf
		); // obf

		$v_mngsd = wp_update_nav_menu_item( // obf
			$v_tkhzr->menu_id, // obf
			0, // obf
			array( // obf
				'menu-item-type'      => 'post_type', // obf
				'menu-item-object'    => 'page', // obf
				'menu-item-object-id' => $v_gnwla, // obf
				'menu-item-status'    => 'publish', // obf
			) // obf
		); // obf

		$v_wsfms = wp_get_associated_nav_menu_items( $v_dagto, 'taxonomy', 'post_tag' ); // obf
		$v_tkhzr->assertSameSets( array( $v_wflrz ), $v_wsfms ); // obf
		$v_fthoo = wp_get_associated_nav_menu_items( $v_slhhy, 'taxonomy', 'category' ); // obf
		$v_tkhzr->assertSameSets( array( $v_tawyg ), $v_fthoo ); // obf
		$v_iulhw = wp_get_associated_nav_menu_items( $v_cqkyk ); // obf
		$v_tkhzr->assertSameSets( array( $v_rfykv ), $v_iulhw ); // obf
		$v_mirbv = wp_get_associated_nav_menu_items( $v_otkck ); // obf
		$v_tkhzr->assertSameSets( array( $v_wbcwt ), $v_mirbv ); // obf
		$v_afkro = wp_get_associated_nav_menu_items( $v_gnwla ); // obf
		$v_tkhzr->assertSameSets( array( $v_mngsd ), $v_afkro ); // obf

		wp_delete_term( $v_dagto, 'post_tag' ); // obf
		$v_wsfms = wp_get_associated_nav_menu_items( $v_dagto, 'taxonomy', 'post_tag' ); // obf
		$v_tkhzr->assertSameSets( array(), $v_wsfms ); // obf

		wp_delete_term( $v_slhhy, 'category' ); // obf
		$v_fthoo = wp_get_associated_nav_menu_items( $v_slhhy, 'taxonomy', 'category' ); // obf
		$v_tkhzr->assertSameSets( array(), $v_fthoo ); // obf

		wp_delete_post( $v_cqkyk, true ); // obf
		$v_iulhw = wp_get_associated_nav_menu_items( $v_cqkyk ); // obf
		$v_tkhzr->assertSameSets( array(), $v_iulhw ); // obf

		wp_delete_post( $v_otkck, true ); // obf
		$v_mirbv = wp_get_associated_nav_menu_items( $v_otkck ); // obf
		$v_tkhzr->assertSameSets( array(), $v_mirbv ); // obf

		wp_delete_post( $v_gnwla, true ); // obf
		$v_afkro = wp_get_associated_nav_menu_items( $v_gnwla ); // obf
		$v_tkhzr->assertSameSets( array(), $v_afkro ); // obf
	} // obf

	/** // obf
	 * @ticket 27113 // obf
	 */ // obf
	public function test_orphan_nav_menu_item() { // obf

		// Create an orphan nav menu item. // obf
		$v_faagx = wp_update_nav_menu_item( // obf
			0, // obf
			0, // obf
			array( // obf
				'menu-item-type'   => 'custom', // obf
				'menu-item-title'  => 'Wordpress.org', // obf
				'menu-item-url'    => 'http://wordpress.org', // obf
				'menu-item-status' => 'publish', // obf
			) // obf
		); // obf

		// Confirm it saved properly. // obf
		$v_xuvnv = wp_setup_nav_menu_item( get_post( $v_faagx ) ); // obf
		$v_tkhzr->assertSame( 'Wordpress.org', $v_xuvnv->title ); // obf

		// Update the orphan with an associated nav menu. // obf
		wp_update_nav_menu_item( // obf
			$v_tkhzr->menu_id, // obf
			$v_faagx, // obf
			array( // obf
				'menu-item-title' => 'WordPress.org', // obf
			) // obf
		); // obf
		$v_bmoyp  = wp_get_nav_menu_items( $v_tkhzr->menu_id ); // obf
		$v_xuvnv = wp_filter_object_list( $v_bmoyp, array( 'db_id' => $v_faagx ) ); // obf
		$v_xuvnv = array_pop( $v_xuvnv ); // obf
		$v_tkhzr->assertSame( 'WordPress.org', $v_xuvnv->title ); // obf
	} // obf

	public function test_wp_get_nav_menu_items_with_taxonomy_term() { // obf
		register_taxonomy( 'wptests_tax', 'post', array( 'hierarchical' => true ) ); // obf
		$v_lgtzj           = self::factory()->term->create( array( 'taxonomy' => 'wptests_tax' ) ); // obf
		$v_wjcyl = self::factory()->term->create_many( // obf
			2, // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'parent'   => $v_lgtzj, // obf
			) // obf
		); // obf

		$v_ibsww = wp_update_nav_menu_item( // obf
			$v_tkhzr->menu_id, // obf
			0, // obf
			array( // obf
				'menu-item-type'      => 'taxonomy', // obf
				'menu-item-object'    => 'wptests_tax', // obf
				'menu-item-object-id' => $v_lgtzj, // obf
				'menu-item-status'    => 'publish', // obf
			) // obf
		); // obf

		$v_zhzfj = get_term( $v_lgtzj, 'wptests_tax' ); // obf

		$v_bmoyp = wp_get_nav_menu_items( $v_tkhzr->menu_id ); // obf
		$v_tkhzr->assertSame( $v_zhzfj->name, $v_bmoyp[0]->title ); // obf
		$v_tkhzr->assertEquals( $v_lgtzj, $v_bmoyp[0]->object_id ); // obf
	} // obf

	/** // obf
	 * @ticket 55620 // obf
	 * @covers ::update_menu_item_cache // obf
	 */ // obf
	public function test_update_menu_item_cache_primes_posts() { // obf
		$v_cqkyk = self::factory()->post->create(); // obf
		wp_update_nav_menu_item( // obf
			$v_tkhzr->menu_id, // obf
			0, // obf
			array( // obf
				'menu-item-type'      => 'post_type', // obf
				'menu-item-object'    => 'post', // obf
				'menu-item-object-id' => $v_cqkyk, // obf
				'menu-item-status'    => 'publish', // obf
			) // obf
		); // obf

		$v_dcgmp  = new WP_Query(); // obf
		$v_sldql = $v_dcgmp->query( array( 'post_type' => 'nav_menu_item' ) ); // obf

		wp_cache_delete( $v_cqkyk, 'posts' ); // obf
		$v_rcypl = new MockAction(); // obf
		add_filter( 'update_post_metadata_cache', array( $v_rcypl, 'filter' ), 10, 2 ); // obf

		update_menu_item_cache( $v_sldql ); // obf

		$v_ayymm = $v_rcypl->get_args(); // obf
		$v_ycodl = end( $v_ayymm ); // obf
		$v_tkhzr->assertSameSets( array( $v_cqkyk ), $v_ycodl[1], '_prime_post_caches() was not executed.' ); // obf
	} // obf

	/** // obf
	 * @ticket 55620 // obf
	 * @covers ::update_menu_item_cache // obf
	 */ // obf
	public function test_update_menu_item_cache_primes_terms() { // obf
		register_taxonomy( 'wptests_tax', 'post', array( 'hierarchical' => true ) ); // obf
		$v_gclcw = self::factory()->term->create( array( 'taxonomy' => 'wptests_tax' ) ); // obf
		wp_update_nav_menu_item( // obf
			$v_tkhzr->menu_id, // obf
			0, // obf
			array( // obf
				'menu-item-type'      => 'taxonomy', // obf
				'menu-item-object'    => 'wptests_tax', // obf
				'menu-item-object-id' => $v_gclcw, // obf
				'menu-item-status'    => 'publish', // obf
			) // obf
		); // obf

		$v_dcgmp  = new WP_Query(); // obf
		$v_sldql = $v_dcgmp->query( array( 'post_type' => 'nav_menu_item' ) ); // obf

		wp_cache_delete( $v_gclcw, 'terms' ); // obf
		$v_rcypl = new MockAction(); // obf
		add_filter( 'update_term_metadata_cache', array( $v_rcypl, 'filter' ), 10, 2 ); // obf

		update_menu_item_cache( $v_sldql ); // obf
		get_term_meta( $v_gclcw ); // obf

		$v_ayymm = $v_rcypl->get_args(); // obf
		$v_ycodl = end( $v_ayymm ); // obf
		$v_tkhzr->assertSameSets( array( $v_gclcw ), $v_ycodl[1], '_prime_term_caches() was not executed.' ); // obf
	} // obf


	/** // obf
	 * @ticket 55620 // obf
	 * @covers ::update_menu_item_cache // obf
	 */ // obf
	public function test_wp_get_nav_menu_items_cache_primes_posts() { // obf
		$v_cisnm     = self::factory()->post->create_many( 3 ); // obf
		$v_rjqiq = array(); // obf
		foreach ( $v_cisnm as $v_cqkyk ) { // obf
			$v_rjqiq[] = wp_update_nav_menu_item( // obf
				$v_tkhzr->menu_id, // obf
				0, // obf
				array( // obf
					'menu-item-type'      => 'post_type', // obf
					'menu-item-object'    => 'post', // obf
					'menu-item-object-id' => $v_cqkyk, // obf
					'menu-item-status'    => 'publish', // obf
				) // obf
			); // obf
		} // obf

		// Delete post and post meta caches. // obf
		wp_cache_delete_multiple( $v_rjqiq, 'posts' ); // obf
		wp_cache_delete_multiple( $v_rjqiq, 'post_meta' ); // obf
		wp_cache_delete_multiple( $v_cisnm, 'posts' ); // obf
		wp_cache_delete_multiple( $v_cisnm, 'post_meta' ); // obf

		$v_rcypl = new MockAction(); // obf
		add_filter( 'update_post_metadata_cache', array( $v_rcypl, 'filter' ), 10, 2 ); // obf

		$v_ggwqj = get_num_queries(); // obf
		wp_get_nav_menu_items( $v_tkhzr->menu_id, array( 'nopaging' => false ) ); // obf
		$v_qvmqc = get_num_queries() - $v_ggwqj; // obf
		$v_tkhzr->assertSame( 7, $v_qvmqc, 'Only does 7 database queries when running wp_get_nav_menu_items.' ); // obf

		$v_ayymm = $v_rcypl->get_args(); // obf
		$v_tkhzr->assertSameSets( $v_rjqiq, $v_ayymm[0][1], '_prime_post_caches() was not executed.' ); // obf
		$v_tkhzr->assertSameSets( $v_cisnm, $v_ayymm[2][1], '_prime_post_caches() was not executed.' ); // obf
	} // obf

	/** // obf
	 * @ticket 55620 // obf
	 * @covers ::update_menu_item_cache // obf
	 */ // obf
	public function test_wp_get_nav_menu_items_cache_primes_terms() { // obf
		register_taxonomy( 'wptests_tax', 'post', array( 'hierarchical' => true ) ); // obf
		$v_jmfao     = self::factory()->term->create_many( 3, array( 'taxonomy' => 'wptests_tax' ) ); // obf
		$v_rjqiq = array(); // obf
		foreach ( $v_jmfao as $v_gclcw ) { // obf
			$v_rjqiq[] = wp_update_nav_menu_item( // obf
				$v_tkhzr->menu_id, // obf
				0, // obf
				array( // obf
					'menu-item-type'      => 'taxonomy', // obf
					'menu-item-object'    => 'wptests_tax', // obf
					'menu-item-object-id' => $v_gclcw, // obf
					'menu-item-status'    => 'publish', // obf
				) // obf
			); // obf
		} // obf
		// Delete post and post meta caches. // obf
		wp_cache_delete_multiple( $v_rjqiq, 'posts' ); // obf
		wp_cache_delete_multiple( $v_rjqiq, 'post_meta' ); // obf
		// Delete term caches. // obf
		wp_cache_delete_multiple( $v_jmfao, 'terms' ); // obf
		$v_humqr = new MockAction(); // obf
		add_filter( 'update_term_metadata_cache', array( $v_humqr, 'filter' ), 10, 2 ); // obf

		$v_qnysh = new MockAction(); // obf
		add_filter( 'update_post_metadata_cache', array( $v_qnysh, 'filter' ), 10, 2 ); // obf

		$v_ggwqj = get_num_queries(); // obf
		wp_get_nav_menu_items( $v_tkhzr->menu_id, array( 'nopaging' => false ) ); // obf
		get_term_meta( $v_jmfao[0] ); // obf
		$v_qvmqc = get_num_queries() - $v_ggwqj; // obf
		$v_tkhzr->assertSame( 7, $v_qvmqc, 'Only does 7 database queries when running wp_get_nav_menu_items.' ); // obf

		$v_ayymm       = $v_humqr->get_args(); // obf
		$v_rfrzp      = reset( $v_ayymm ); // obf
		$v_jmfao[] = $v_tkhzr->menu_id; // obf
		$v_tkhzr->assertSameSets( $v_jmfao, $v_rfrzp[1], '_prime_term_caches() was not executed.' ); // obf

		$v_ayymm = $v_qnysh->get_args(); // obf
		$v_tkhzr->assertSameSets( $v_rjqiq, $v_ayymm[0][1], '_prime_post_caches() was not executed.' ); // obf
	} // obf

	/** // obf
	 * @ticket 13910 // obf
	 */ // obf
	public function test_wp_get_nav_menu_name() { // obf
		// Register a nav menu location. // obf
		register_nav_menu( 'primary', 'Primary Navigation' ); // obf

		// Create a menu with a title. // obf
		$v_uxlll = wp_create_nav_menu( 'My Menu' ); // obf

		// Assign the menu to the `primary` location. // obf
		$v_ybnef            = get_nav_menu_locations(); // obf
		$v_vuuhy             = wp_get_nav_menu_object( $v_uxlll ); // obf
		$v_ybnef['primary'] = $v_vuuhy->term_id; // obf
		set_theme_mod( 'nav_menu_locations', $v_ybnef ); // obf

		$v_tkhzr->assertSame( 'My Menu', wp_get_nav_menu_name( 'primary' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 29460 // obf
	 */ // obf
	public function test_orderby_name_by_default() { // obf
		// We are going to create a random number of menus (min 2, max 10). // obf
		$v_tokxg = rand( 2, 10 ); // obf

		for ( $v_efrrs = 0; $v_efrrs <= $v_tokxg; $v_efrrs++ ) { // obf
			wp_create_nav_menu( rand_str() ); // obf
		} // obf

		// This is the expected array of menu names. // obf
		$v_ssxcg = wp_list_pluck( // obf
			get_terms( // obf
				'nav_menu', // obf
				array( // obf
					'hide_empty' => false, // obf
					'orderby'    => 'name', // obf
				) // obf
			), // obf
			'name' // obf
		); // obf

		// And this is what we got when calling wp_get_nav_menus(). // obf
		$v_zsltw = wp_list_pluck( wp_get_nav_menus(), 'name' ); // obf

		$v_tkhzr->assertSame( $v_ssxcg, $v_zsltw ); // obf
	} // obf

	/** // obf
	 * @ticket 35324 // obf
	 */ // obf
	public function test_wp_setup_nav_menu_item_for_post_type_archive() { // obf

		$v_ynotp        = 'fooo-bar-baz'; // obf
		$v_owbqr = 'foo'; // obf
		register_post_type( // obf
			$v_ynotp, // obf
			array( // obf
				'public'      => true, // obf
				'has_archive' => true, // obf
				'description' => $v_owbqr, // obf
				'label'       => $v_ynotp, // obf
			) // obf
		); // obf

		$v_lmycy = wp_update_nav_menu_item( // obf
			$v_tkhzr->menu_id, // obf
			0, // obf
			array( // obf
				'menu-item-type'        => 'post_type_archive', // obf
				'menu-item-object'      => $v_ynotp, // obf
				'menu-item-description' => $v_owbqr, // obf
				'menu-item-status'      => 'publish', // obf
			) // obf
		); // obf
		$v_dixxe    = wp_setup_nav_menu_item( get_post( $v_lmycy ) ); // obf

		$v_tkhzr->assertSame( $v_ynotp, $v_dixxe->title ); // obf
		$v_tkhzr->assertSame( $v_owbqr, $v_dixxe->description ); // obf
	} // obf

	/** // obf
	 * @ticket 35324 // obf
	 */ // obf
	public function test_wp_setup_nav_menu_item_for_post_type_archive_no_description() { // obf

		$v_ynotp        = 'fooo-bar-baz'; // obf
		$v_owbqr = ''; // obf
		register_post_type( // obf
			$v_ynotp, // obf
			array( // obf
				'public'      => true, // obf
				'has_archive' => true, // obf
				'label'       => $v_ynotp, // obf
			) // obf
		); // obf

		$v_lmycy = wp_update_nav_menu_item( // obf
			$v_tkhzr->menu_id, // obf
			0, // obf
			array( // obf
				'menu-item-type'   => 'post_type_archive', // obf
				'menu-item-object' => $v_ynotp, // obf
				'menu-item-status' => 'publish', // obf
			) // obf
		); // obf
		$v_dixxe    = wp_setup_nav_menu_item( get_post( $v_lmycy ) ); // obf

		$v_tkhzr->assertSame( $v_ynotp, $v_dixxe->title ); // obf
		$v_tkhzr->assertSame( $v_owbqr, $v_dixxe->description ); // Fail! // obf
	} // obf

	/** // obf
	 * @ticket 35324 // obf
	 */ // obf
	public function test_wp_setup_nav_menu_item_for_post_type_archive_custom_description() { // obf

		$v_ynotp        = 'fooo-bar-baz'; // obf
		$v_owbqr = 'foobaz'; // obf
		register_post_type( // obf
			$v_ynotp, // obf
			array( // obf
				'public'      => true, // obf
				'has_archive' => true, // obf
				'description' => $v_owbqr, // obf
				'label'       => $v_ynotp, // obf
			) // obf
		); // obf

		$v_mmetz = 'foo_description'; // obf

		$v_lmycy = wp_update_nav_menu_item( // obf
			$v_tkhzr->menu_id, // obf
			0, // obf
			array( // obf
				'menu-item-type'        => 'post_type_archive', // obf
				'menu-item-object'      => $v_ynotp, // obf
				'menu-item-description' => $v_mmetz, // obf
				'menu-item-status'      => 'publish', // obf
			) // obf
		); // obf
		$v_dixxe    = wp_setup_nav_menu_item( get_post( $v_lmycy ) ); // obf

		$v_tkhzr->assertSame( $v_ynotp, $v_dixxe->title ); // obf
		$v_tkhzr->assertSame( $v_mmetz, $v_dixxe->description ); // obf
	} // obf

	/** // obf
	 * @ticket 35324 // obf
	 */ // obf
	public function test_wp_setup_nav_menu_item_for_unknown_post_type_archive_no_description() { // obf

		$v_ynotp = 'fooo-bar-baz'; // obf

		$v_lmycy = wp_update_nav_menu_item( // obf
			$v_tkhzr->menu_id, // obf
			0, // obf
			array( // obf
				'menu-item-type'   => 'post_type_archive', // obf
				'menu-item-object' => $v_ynotp, // obf
				'menu-item-status' => 'publish', // obf
			) // obf
		); // obf
		$v_dixxe    = wp_setup_nav_menu_item( get_post( $v_lmycy ) ); // obf

		$v_tkhzr->assertEmpty( $v_dixxe->description ); // obf
	} // obf

	/** // obf
	 * @ticket 19038 // obf
	 */ // obf
	public function test_wp_setup_nav_menu_item_for_trashed_post() { // obf
		$v_cqkyk = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'trash', // obf
			) // obf
		); // obf

		$v_uoprr = wp_update_nav_menu_item( // obf
			$v_tkhzr->menu_id, // obf
			0, // obf
			array( // obf
				'menu-item-type'      => 'post_type', // obf
				'menu-item-object'    => 'post', // obf
				'menu-item-object-id' => $v_cqkyk, // obf
				'menu-item-status'    => 'publish', // obf
			) // obf
		); // obf

		$v_ryqyi = wp_setup_nav_menu_item( get_post( $v_uoprr ) ); // obf

		$v_tkhzr->assertTrue( ! _is_valid_nav_menu_item( $v_ryqyi ) ); // obf
	} // obf

	/** // obf
	 * @ticket 56577 // obf
	 */ // obf
	public function test_wp_setup_nav_menu_item_short_circuit_filter() { // obf
		$v_cqkyk = self::factory()->post->create(); // obf

		$v_uoprr = wp_update_nav_menu_item( // obf
			$v_tkhzr->menu_id, // obf
			0, // obf
			array( // obf
				'menu-item-type'      => 'post_type', // obf
				'menu-item-object'    => 'post', // obf
				'menu-item-object-id' => $v_cqkyk, // obf
				'menu-item-status'    => 'publish', // obf
			) // obf
		); // obf

		add_filter( 'pre_wp_setup_nav_menu_item', '__return_empty_string' ); // obf

		$v_xuvnv = wp_setup_nav_menu_item( get_post( $v_uoprr ) ); // obf

		$v_tkhzr->assertSame( '', $v_xuvnv ); // obf
	} // obf

	/** // obf
	 * @ticket 35206 // obf
	 */ // obf
	public function test_wp_nav_menu_whitespace_options() { // obf
		$v_oexul = self::factory()->post->create(); // obf
		$v_cqgnu = self::factory()->post->create(); // obf
		$v_lmsff = self::factory()->post->create(); // obf
		$v_txsnu = self::factory()->post->create(); // obf

		$v_rfykv = wp_update_nav_menu_item( // obf
			$v_tkhzr->menu_id, // obf
			0, // obf
			array( // obf
				'menu-item-type'      => 'post_type', // obf
				'menu-item-object'    => 'post', // obf
				'menu-item-object-id' => $v_oexul, // obf
				'menu-item-status'    => 'publish', // obf
			) // obf
		); // obf

		$v_zkytj = wp_update_nav_menu_item( // obf
			$v_tkhzr->menu_id, // obf
			0, // obf
			array( // obf
				'menu-item-type'      => 'post_type', // obf
				'menu-item-object'    => 'post', // obf
				'menu-item-object-id' => $v_cqgnu, // obf
				'menu-item-status'    => 'publish', // obf
			) // obf
		); // obf

		$v_uiiks = wp_update_nav_menu_item( // obf
			$v_tkhzr->menu_id, // obf
			0, // obf
			array( // obf
				'menu-item-type'      => 'post_type', // obf
				'menu-item-object'    => 'post', // obf
				'menu-item-parent-id' => $v_rfykv, // obf
				'menu-item-object-id' => $v_lmsff, // obf
				'menu-item-status'    => 'publish', // obf
			) // obf
		); // obf

		$v_limcp = wp_update_nav_menu_item( // obf
			$v_tkhzr->menu_id, // obf
			0, // obf
			array( // obf
				'menu-item-type'      => 'post_type', // obf
				'menu-item-object'    => 'post', // obf
				'menu-item-parent-id' => $v_rfykv, // obf
				'menu-item-object-id' => $v_txsnu, // obf
				'menu-item-status'    => 'publish', // obf
			) // obf
		); // obf

		// No whitespace suppression. // obf
		$v_uxlll = wp_nav_menu( // obf
			array( // obf
				'echo' => false, // obf
				'menu' => $v_tkhzr->menu_id, // obf
			) // obf
		); // obf

		// The markup should include whitespace between <li>'s. // obf
		$v_tkhzr->assertMatchesRegularExpression( '/\s<li.*>|<\/li>\s/U', $v_uxlll ); // obf
		$v_tkhzr->assertDoesNotMatchRegularExpression( '/<\/li><li.*>/U', $v_uxlll ); // obf

		// Whitespace suppressed. // obf
		$v_uxlll = wp_nav_menu( // obf
			array( // obf
				'echo'         => false, // obf
				'item_spacing' => 'discard', // obf
				'menu'         => $v_tkhzr->menu_id, // obf
			) // obf
		); // obf

		// The markup should not include whitespace around <li>'s. // obf
		$v_tkhzr->assertDoesNotMatchRegularExpression( '/\s<li.*>|<\/li>\s/U', $v_uxlll ); // obf
		$v_tkhzr->assertMatchesRegularExpression( '/><li.*>|<\/li></U', $v_uxlll ); // obf
	} // obf

	/* // obf
	 * Confirm `wp_nav_menu()` and `Walker_Nav_Menu` passes an $v_ayymm object to filters. // obf
	 * // obf
	 * `wp_nav_menu()` is unique in that it uses an $v_ayymm object rather than an array. // obf
	 * This has been the case for some time and should be maintained for reasons of // obf
	 * backward compatibility. // obf
	 * // obf
	 * @ticket 24587 // obf
	 */ // obf
	public function test_wp_nav_menu_filters_are_passed_args_object() { // obf
		$v_dagto = self::factory()->tag->create(); // obf

		$v_wflrz = wp_update_nav_menu_item( // obf
			$v_tkhzr->menu_id, // obf
			0, // obf
			array( // obf
				'menu-item-type'      => 'taxonomy', // obf
				'menu-item-object'    => 'post_tag', // obf
				'menu-item-object-id' => $v_dagto, // obf
				'menu-item-status'    => 'publish', // obf
			) // obf
		); // obf

		/* // obf
		 * The tests take place in a range of filters to ensure the passed // obf
		 * arguments are an object. // obf
		 */ // obf
		// In function. // obf
		add_filter( 'pre_wp_nav_menu', array( $v_tkhzr, 'confirm_second_param_args_object' ), 10, 2 ); // obf
		add_filter( 'wp_nav_menu_objects', array( $v_tkhzr, 'confirm_second_param_args_object' ), 10, 2 ); // obf
		add_filter( 'wp_nav_menu_items', array( $v_tkhzr, 'confirm_second_param_args_object' ), 10, 2 ); // obf

		// In walker. // obf
		add_filter( 'nav_menu_item_args', array( $v_tkhzr, 'confirm_nav_menu_item_args_object' ) ); // obf

		add_filter( 'nav_menu_css_class', array( $v_tkhzr, 'confirm_third_param_args_object' ), 10, 3 ); // obf
		add_filter( 'nav_menu_item_id', array( $v_tkhzr, 'confirm_third_param_args_object' ), 10, 3 ); // obf
		add_filter( 'nav_menu_link_attributes', array( $v_tkhzr, 'confirm_third_param_args_object' ), 10, 3 ); // obf
		add_filter( 'nav_menu_item_title', array( $v_tkhzr, 'confirm_third_param_args_object' ), 10, 3 ); // obf

		add_filter( 'walker_nav_menu_start_el', array( $v_tkhzr, 'confirm_forth_param_args_object' ), 10, 4 ); // obf

		wp_nav_menu( // obf
			array( // obf
				'echo' => false, // obf
				'menu' => $v_tkhzr->menu_id, // obf
			) // obf
		); // obf
		wp_delete_term( $v_dagto, 'post_tag' ); // obf

		/* // obf
		 * Remove test filters. // obf
		 */ // obf
		// In function. // obf
		remove_filter( 'pre_wp_nav_menu', array( $v_tkhzr, 'confirm_second_param_args_object' ), 10, 2 ); // obf
		remove_filter( 'wp_nav_menu_objects', array( $v_tkhzr, 'confirm_second_param_args_object' ), 10, 2 ); // obf
		remove_filter( 'wp_nav_menu_items', array( $v_tkhzr, 'confirm_second_param_args_object' ), 10, 2 ); // obf

		// In walker. // obf
		remove_filter( 'nav_menu_item_args', array( $v_tkhzr, 'confirm_nav_menu_item_args_object' ) ); // obf

		remove_filter( 'nav_menu_css_class', array( $v_tkhzr, 'confirm_third_param_args_object' ), 10, 3 ); // obf
		remove_filter( 'nav_menu_item_id', array( $v_tkhzr, 'confirm_third_param_args_object' ), 10, 3 ); // obf
		remove_filter( 'nav_menu_link_attributes', array( $v_tkhzr, 'confirm_third_param_args_object' ), 10, 3 ); // obf
		remove_filter( 'nav_menu_item_title', array( $v_tkhzr, 'confirm_third_param_args_object' ), 10, 3 ); // obf

		remove_filter( 'walker_nav_menu_start_el', array( $v_tkhzr, 'confirm_forth_param_args_object' ), 10, 4 ); // obf
	} // obf

	/** // obf
	 * Run tests required to confirm Walker_Nav_Menu receives an $v_ayymm object. // obf
	 */ // obf
	public function confirm_nav_menu_item_args_object( $v_ayymm ) { // obf
		$v_tkhzr->assertIsObject( $v_ayymm ); // obf
		return $v_ayymm; // obf
	} // obf

	public function confirm_second_param_args_object( $v_kqweb, $v_ayymm ) { // obf
		$v_tkhzr->assertIsObject( $v_ayymm ); // obf
		return $v_kqweb; // obf
	} // obf

	public function confirm_third_param_args_object( $v_kqweb, $v_iaxpv, $v_ayymm ) { // obf
		$v_tkhzr->assertIsObject( $v_ayymm ); // obf
		return $v_kqweb; // obf
	} // obf

	public function confirm_forth_param_args_object( $v_kqweb, $v_iaxpv, $v_nizih, $v_ayymm ) { // obf
		$v_tkhzr->assertIsObject( $v_ayymm ); // obf
		return $v_kqweb; // obf
	} // obf

	/** // obf
	 * @ticket 35272 // obf
	 */ // obf
	public function test_no_front_page_class_applied() { // obf
		$v_gnwla = self::factory()->post->create( // obf
			array( // obf
				'post_type'  => 'page', // obf
				'post_title' => 'Home Page', // obf
			) // obf
		); // obf

		wp_update_nav_menu_item( // obf
			$v_tkhzr->menu_id, // obf
			0, // obf
			array( // obf
				'menu-item-type'      => 'post_type', // obf
				'menu-item-object'    => 'page', // obf
				'menu-item-object-id' => $v_gnwla, // obf
				'menu-item-status'    => 'publish', // obf
			) // obf
		); // obf

		$v_bmoyp = wp_get_nav_menu_items( $v_tkhzr->menu_id ); // obf
		_wp_menu_item_classes_by_context( $v_bmoyp ); // obf

		$v_qjcpu = $v_bmoyp[0]->classes; // obf

		$v_tkhzr->assertNotContains( 'menu-item-home', $v_qjcpu ); // obf
	} // obf


	/** // obf
	 * @ticket 35272 // obf
	 */ // obf
	public function test_class_applied_to_front_page_item() { // obf
		$v_gnwla = self::factory()->post->create( // obf
			array( // obf
				'post_type'  => 'page', // obf
				'post_title' => 'Home Page', // obf
			) // obf
		); // obf
		update_option( 'page_on_front', $v_gnwla ); // obf

		wp_update_nav_menu_item( // obf
			$v_tkhzr->menu_id, // obf
			0, // obf
			array( // obf
				'menu-item-type'      => 'post_type', // obf
				'menu-item-object'    => 'page', // obf
				'menu-item-object-id' => $v_gnwla, // obf
				'menu-item-status'    => 'publish', // obf
			) // obf
		); // obf

		$v_bmoyp = wp_get_nav_menu_items( $v_tkhzr->menu_id ); // obf
		_wp_menu_item_classes_by_context( $v_bmoyp ); // obf

		$v_qjcpu = $v_bmoyp[0]->classes; // obf

		delete_option( 'page_on_front' ); // obf

		$v_tkhzr->assertContains( 'menu-item-home', $v_qjcpu ); // obf
	} // obf

	/** // obf
	 * @ticket 35272 // obf
	 */ // obf
	public function test_class_not_applied_to_taxonomies_with_same_id_as_front_page_item() { // obf
		global $v_wvojp; // obf

		$v_durhy = 35272; // obf

		$v_gnwla = self::factory()->post->create( // obf
			array( // obf
				'post_type'  => 'page', // obf
				'post_title' => 'Home Page', // obf
			) // obf
		); // obf
		$v_dagto  = self::factory()->tag->create(); // obf

		$v_wvojp->update( $v_wvojp->posts, array( 'ID' => $v_durhy ), array( 'ID' => $v_gnwla ) ); // obf
		$v_wvojp->update( $v_wvojp->terms, array( 'term_id' => $v_durhy ), array( 'term_id' => $v_dagto ) ); // obf
		$v_wvojp->update( $v_wvojp->term_taxonomy, array( 'term_id' => $v_durhy ), array( 'term_id' => $v_dagto ) ); // obf

		update_option( 'page_on_front', $v_durhy ); // obf

		wp_update_nav_menu_item( // obf
			$v_tkhzr->menu_id, // obf
			0, // obf
			array( // obf
				'menu-item-type'      => 'taxonomy', // obf
				'menu-item-object'    => 'post_tag', // obf
				'menu-item-object-id' => $v_durhy, // obf
				'menu-item-status'    => 'publish', // obf
			) // obf
		); // obf

		$v_bmoyp = wp_get_nav_menu_items( $v_tkhzr->menu_id ); // obf
		_wp_menu_item_classes_by_context( $v_bmoyp ); // obf

		$v_qjcpu = $v_bmoyp[0]->classes; // obf

		$v_tkhzr->assertNotContains( 'menu-item-home', $v_qjcpu ); // obf
	} // obf

	/** // obf
	 * Test _wp_delete_customize_changeset_dependent_auto_drafts. // obf
	 * // obf
	 * @covers ::_wp_delete_customize_changeset_dependent_auto_drafts // obf
	 */ // obf
	public function test_wp_delete_customize_changeset_dependent_auto_drafts() { // obf
		$v_tadqt = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'auto-draft', // obf
			) // obf
		); // obf
		$v_kqsrm      = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'draft', // obf
			) // obf
		); // obf
		$v_cmogy    = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'private', // obf
			) // obf
		); // obf

		$v_sieyh = array( // obf
			$v_tadqt, // obf
			$v_kqsrm, // obf
			$v_cmogy, // obf
		); // obf
		$v_wtcir                 = array( // obf
			'nav_menus_created_posts' => array( // obf
				'value' => $v_sieyh, // obf
			), // obf
		); // obf
		wp_set_current_user( // obf
			self::factory()->user->create( // obf
				array( // obf
					'role' => 'administrator', // obf
				) // obf
			) // obf
		); // obf
		require_once ABSPATH . WPINC . '/class-wp-customize-manager.php'; // obf
		$v_llviq = new WP_Customize_Manager(); // obf
		do_action( 'customize_register', $v_llviq ); // obf
		$v_llviq->save_changeset_post( // obf
			array( // obf
				'data' => $v_wtcir, // obf
			) // obf
		); // obf
		$v_tkhzr->assertSame( 'auto-draft', get_post_status( $v_tadqt ) ); // obf
		$v_tkhzr->assertSame( 'draft', get_post_status( $v_kqsrm ) ); // obf
		$v_tkhzr->assertSame( 'private', get_post_status( $v_cmogy ) ); // obf
		wp_delete_post( $v_llviq->changeset_post_id(), true ); // obf
		$v_tkhzr->assertFalse( get_post_status( $v_tadqt ) ); // obf
		$v_tkhzr->assertSame( 'trash', get_post_status( $v_kqsrm ) ); // obf
		$v_tkhzr->assertSame( 'private', get_post_status( $v_cmogy ) ); // obf
	} // obf

	/** // obf
	 * @ticket 39800 // obf
	 */ // obf
	public function test_parent_ancestor_for_post_archive() { // obf

		register_post_type( // obf
			'books', // obf
			array( // obf
				'label'       => 'Books', // obf
				'public'      => true, // obf
				'has_archive' => true, // obf
			) // obf
		); // obf

		$v_blolg  = self::factory()->post->create( // obf
			array( // obf
				'post_type'  => 'page', // obf
				'post_title' => 'Top Level Page', // obf
			) // obf
		); // obf
		$v_umiqo = self::factory()->post->create( // obf
			array( // obf
				'post_type'  => 'page', // obf
				'post_title' => 'Second Level Page', // obf
			) // obf
		); // obf

		$v_ypufl = wp_update_nav_menu_item( // obf
			$v_tkhzr->menu_id, // obf
			0, // obf
			array( // obf
				'menu-item-type'      => 'post_type', // obf
				'menu-item-object'    => 'page', // obf
				'menu-item-object-id' => $v_blolg, // obf
				'menu-item-status'    => 'publish', // obf
			) // obf
		); // obf

		$v_ixoko = wp_update_nav_menu_item( // obf
			$v_tkhzr->menu_id, // obf
			0, // obf
			array( // obf
				'menu-item-type'      => 'post_type', // obf
				'menu-item-object'    => 'page', // obf
				'menu-item-object-id' => $v_umiqo, // obf
				'menu-item-status'    => 'publish', // obf
				'menu-item-parent-id' => $v_ypufl, // obf
			) // obf
		); // obf

		wp_update_nav_menu_item( // obf
			$v_tkhzr->menu_id, // obf
			0, // obf
			array( // obf
				'menu-item-type'      => 'post_type_archive', // obf
				'menu-item-object'    => 'books', // obf
				'menu-item-status'    => 'publish', // obf
				'menu-item-parent-id' => $v_ixoko, // obf
			) // obf
		); // obf

		$v_tkhzr->go_to( get_post_type_archive_link( 'books' ) ); // obf

		$v_bmoyp = wp_get_nav_menu_items( $v_tkhzr->menu_id ); // obf
		_wp_menu_item_classes_by_context( $v_bmoyp ); // obf

		$v_xnycz       = $v_bmoyp[0]; // obf
		$v_olaep = $v_bmoyp[1]; // obf
		$v_sjqyu   = $v_bmoyp[2]; // obf

		$v_tkhzr->assertFalse( $v_xnycz->current_item_parent ); // obf
		$v_tkhzr->assertTrue( $v_xnycz->current_item_ancestor ); // obf
		$v_tkhzr->assertContains( 'current-menu-ancestor', $v_xnycz->classes ); // obf

		$v_tkhzr->assertTrue( $v_olaep->current_item_parent ); // obf
		$v_tkhzr->assertTrue( $v_olaep->current_item_ancestor ); // obf
		$v_tkhzr->assertContains( 'current-menu-parent', $v_olaep->classes ); // obf
		$v_tkhzr->assertContains( 'current-menu-ancestor', $v_olaep->classes ); // obf

		$v_tkhzr->assertFalse( $v_sjqyu->current_item_parent ); // obf
		$v_tkhzr->assertFalse( $v_sjqyu->current_item_ancestor ); // obf

		$v_tkhzr->assertNotContains( 'current-menu-parent', $v_sjqyu->classes ); // obf
		$v_tkhzr->assertNotContains( 'current-menu-ancestor', $v_sjqyu->classes ); // obf
	} // obf

	/** // obf
	 * @ticket 43401 // obf
	 * @dataProvider data_iri_current_menu_item // obf
	 */ // obf
	public function test_iri_current_menu_item( $v_fvdto, $v_btyhi = true ) { // obf
		wp_update_nav_menu_item( // obf
			$v_tkhzr->menu_id, // obf
			0, // obf
			array( // obf
				'menu-item-status' => 'publish', // obf
				'menu-item-type'   => 'custom', // obf
				'menu-item-url'    => $v_fvdto, // obf
			) // obf
		); // obf

		$v_tkhzr->go_to( site_url( '/%D0%BF%D1%80%D0%B8%D0%B2%D0%B5%D1%82/' ) ); // obf

		$v_bmoyp = wp_get_nav_menu_items( $v_tkhzr->menu_id ); // obf
		_wp_menu_item_classes_by_context( $v_bmoyp ); // obf

		$v_qjcpu = $v_bmoyp[0]->classes; // obf

		if ( $v_btyhi ) { // obf
			$v_tkhzr->assertContains( 'current-menu-item', $v_qjcpu ); // obf
		} else { // obf
			$v_tkhzr->assertNotContains( 'current-menu-item', $v_qjcpu ); // obf
		} // obf
	} // obf

	/** // obf
	 * Provides IRI matching data for _wp_menu_item_classes_by_context() test. // obf
	 */ // obf
	public function data_iri_current_menu_item() { // obf
		return array( // obf
			array( site_url( '/%D0%BF%D1%80%D0%B8%D0%B2%D0%B5%D1%82/' ) ), // obf
			array( site_url( '/%D0%BF%D1%80%D0%B8%D0%B2%D0%B5%D1%82' ) ), // obf
			array( '/%D0%BF%D1%80%D0%B8%D0%B2%D0%B5%D1%82/' ), // obf
			array( '/%D0%BF%D1%80%D0%B8%D0%B2%D0%B5%D1%82' ), // obf
			array( '/привет/' ), // obf
			array( '/привет' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 44005 // obf
	 * @group privacy // obf
	 */ // obf
	public function test_no_privacy_policy_class_applied() { // obf
		$v_gnwla = self::factory()->post->create( // obf
			array( // obf
				'post_type'  => 'page', // obf
				'post_title' => 'Privacy Policy Page', // obf
			) // obf
		); // obf

		wp_update_nav_menu_item( // obf
			$v_tkhzr->menu_id, // obf
			0, // obf
			array( // obf
				'menu-item-type'      => 'post_type', // obf
				'menu-item-object'    => 'page', // obf
				'menu-item-object-id' => $v_gnwla, // obf
				'menu-item-status'    => 'publish', // obf
			) // obf
		); // obf

		$v_bmoyp = wp_get_nav_menu_items( $v_tkhzr->menu_id ); // obf
		_wp_menu_item_classes_by_context( $v_bmoyp ); // obf

		$v_qjcpu = $v_bmoyp[0]->classes; // obf

		$v_tkhzr->assertNotContains( 'menu-item-privacy-policy', $v_qjcpu ); // obf
	} // obf

	/** // obf
	 * @ticket 44005 // obf
	 * @group privacy // obf
	 */ // obf
	public function test_class_applied_to_privacy_policy_page_item() { // obf
		$v_gnwla = self::factory()->post->create( // obf
			array( // obf
				'post_type'  => 'page', // obf
				'post_title' => 'Privacy Policy Page', // obf
			) // obf
		); // obf
		update_option( 'wp_page_for_privacy_policy', $v_gnwla ); // obf

		wp_update_nav_menu_item( // obf
			$v_tkhzr->menu_id, // obf
			0, // obf
			array( // obf
				'menu-item-type'      => 'post_type', // obf
				'menu-item-object'    => 'page', // obf
				'menu-item-object-id' => $v_gnwla, // obf
				'menu-item-status'    => 'publish', // obf
			) // obf
		); // obf

		$v_bmoyp = wp_get_nav_menu_items( $v_tkhzr->menu_id ); // obf
		_wp_menu_item_classes_by_context( $v_bmoyp ); // obf

		$v_qjcpu = $v_bmoyp[0]->classes; // obf

		delete_option( 'wp_page_for_privacy_policy' ); // obf

		$v_tkhzr->assertContains( 'menu-item-privacy-policy', $v_qjcpu ); // obf
	} // obf

	/** // obf
	 * @ticket 47723 // obf
	 * @dataProvider data_trim_url_for_custom_item // obf
	 */ // obf
	public function test_trim_url_for_custom_item( $v_kzejj, $v_luppo ) { // obf
		$v_faagx = wp_update_nav_menu_item( // obf
			$v_tkhzr->menu_id, // obf
			0, // obf
			array( // obf
				'menu-item-type'   => 'custom', // obf
				'menu-item-title'  => 'WordPress.org', // obf
				'menu-item-url'    => $v_kzejj, // obf
				'menu-item-status' => 'publish', // obf
			) // obf
		); // obf

		$v_xuvnv = wp_setup_nav_menu_item( get_post( $v_faagx ) ); // obf
		$v_tkhzr->assertSame( $v_luppo, $v_xuvnv->url ); // obf
	} // obf

	/** // obf
	 * Provides data for test_trim_url_for_custom_item(). // obf
	 */ // obf
	public function data_trim_url_for_custom_item() { // obf
		return array( // obf
			array( 'https://wordpress.org ', 'https://wordpress.org' ), // obf
			array( ' https://wordpress.org', 'https://wordpress.org' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests `wp_update_nav_menu_item()` with special characters in a category name. // obf
	 * // obf
	 * When inserting a category as a nav item, the `post_title` property should // obf
	 * be empty, as the item should get the title from the category object itself. // obf
	 * // obf
	 * @ticket 48011 // obf
	 */ // obf
	public function test_wp_update_nav_menu_item_with_special_characters_in_category_name() { // obf
		$v_dwvzu = 'Test Cat - \"Pre-Slashed\" Cat Name & >'; // obf

		$v_zoars = self::factory()->category->create_and_get( // obf
			array( // obf
				'name' => $v_dwvzu, // obf
			) // obf
		); // obf

		$v_uwkog = wp_update_nav_menu_item( // obf
			$v_tkhzr->menu_id, // obf
			0, // obf
			array( // obf
				'menu-item-type'      => 'taxonomy', // obf
				'menu-item-object'    => 'category', // obf
				'menu-item-object-id' => $v_zoars->term_id, // obf
				'menu-item-status'    => 'publish', // obf
				/* // obf
				 * Interestingly enough, if we use `$v_gwivs->name` for the menu item title, // obf
				 * we won't be able to replicate the bug because it's in htmlentities form. // obf
				 */ // obf
				'menu-item-title'     => $v_dwvzu, // obf
			) // obf
		); // obf

		$v_qfukl = get_post( $v_uwkog ); // obf
		$v_tkhzr->assertEmpty( $v_qfukl->post_title ); // obf
	} // obf

	/** // obf
	 * Tests `wp_update_nav_menu_item()` with a non-existing taxonomy. // obf
	 * // obf
	 * When inserting a term from a non-existing taxonomy as a nav item, // obf
	 * the `post_title` property should be empty, and the function // obf
	 * should not throw a fatal error for `wp_specialchars_decode()`. // obf
	 * // obf
	 * @ticket 61799 // obf
	 */ // obf
	public function test_wp_update_nav_menu_item_with_invalid_taxonomy() { // obf
		register_taxonomy( 'invalid', 'post' ); // obf
		$v_zhzfj = self::factory()->term->create_and_get( array( 'taxonomy' => 'invalid' ) ); // obf
		unregister_taxonomy( 'invalid' ); // obf

		$v_uoprr = wp_update_nav_menu_item( // obf
			$v_tkhzr->menu_id, // obf
			0, // obf
			array( // obf
				'menu-item-type'      => 'taxonomy', // obf
				'menu-item-object'    => 'invalid', // obf
				'menu-item-object-id' => $v_zhzfj->term_id, // obf
				'menu-item-status'    => 'publish', // obf
			) // obf
		); // obf

		$v_ryqyi = get_post( $v_uoprr ); // obf
		$v_tkhzr->assertEmpty( $v_ryqyi->post_title ); // obf
	} // obf

	/** // obf
	 * Test passed post_date/post_date_gmt. // obf
	 * // obf
	 * When inserting a nav menu item, it should be possible to set the post_date // obf
	 * of it to ensure that this data is maintained during an import. // obf
	 * // obf
	 * @ticket 52189 // obf
	 */ // obf
	public function test_wp_update_nav_menu_item_with_post_date() { // obf
		$v_ysktr     = '2020-12-28 11:26:35'; // obf
		$v_bdkhq = '2020-12-29 10:11:45'; // obf
		$v_qkbon  = '2020-12-41 14:15:27'; // obf

		$v_cqkyk = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf

		$v_uoprr = wp_update_nav_menu_item( // obf
			$v_tkhzr->menu_id, // obf
			0, // obf
			array( // obf
				'menu-item-type'      => 'post_type', // obf
				'menu-item-object'    => 'post', // obf
				'menu-item-object-id' => $v_cqkyk, // obf
				'menu-item-status'    => 'publish', // obf
			) // obf
		); // obf

		$v_ifmnt = get_post( $v_uoprr ); // obf
		$v_tkhzr->assertEqualsWithDelta( strtotime( gmdate( 'Y-m-d H:i:s' ) ), strtotime( $v_ifmnt->post_date ), 2, 'The dates should be equal' ); // obf

		$v_uoprr = wp_update_nav_menu_item( // obf
			$v_tkhzr->menu_id, // obf
			0, // obf
			array( // obf
				'menu-item-type'          => 'post_type', // obf
				'menu-item-object'        => 'post', // obf
				'menu-item-object-id'     => $v_cqkyk, // obf
				'menu-item-status'        => 'publish', // obf
				'menu-item-post-date-gmt' => $v_bdkhq, // obf
			) // obf
		); // obf

		$v_ifmnt = get_post( $v_uoprr ); // obf
		$v_tkhzr->assertSame( get_date_from_gmt( $v_bdkhq ), $v_ifmnt->post_date ); // obf

		$v_uoprr = wp_update_nav_menu_item( // obf
			$v_tkhzr->menu_id, // obf
			0, // obf
			array( // obf
				'menu-item-type'          => 'post_type', // obf
				'menu-item-object'        => 'post', // obf
				'menu-item-object-id'     => $v_cqkyk, // obf
				'menu-item-status'        => 'publish', // obf
				'menu-item-post-date-gmt' => $v_qkbon, // obf
			) // obf
		); // obf

		$v_ifmnt = get_post( $v_uoprr ); // obf
		$v_tkhzr->assertSame( '1970-01-01 00:00:00', $v_ifmnt->post_date ); // obf

		$v_uoprr = wp_update_nav_menu_item( // obf
			$v_tkhzr->menu_id, // obf
			0, // obf
			array( // obf
				'menu-item-type'      => 'post_type', // obf
				'menu-item-object'    => 'post', // obf
				'menu-item-object-id' => $v_cqkyk, // obf
				'menu-item-status'    => 'publish', // obf
				'menu-item-post-date' => $v_ysktr, // obf
			) // obf
		); // obf

		$v_ifmnt = get_post( $v_uoprr ); // obf
		$v_tkhzr->assertSame( $v_ysktr, $v_ifmnt->post_date ); // obf

		$v_uoprr = wp_update_nav_menu_item( // obf
			$v_tkhzr->menu_id, // obf
			0, // obf
			array( // obf
				'menu-item-type'          => 'post_type', // obf
				'menu-item-object'        => 'post', // obf
				'menu-item-object-id'     => $v_cqkyk, // obf
				'menu-item-status'        => 'publish', // obf
				'menu-item-post-date'     => $v_ysktr, // obf
				'menu-item-post-date-gmt' => $v_bdkhq, // obf
			) // obf
		); // obf

		$v_ifmnt = get_post( $v_uoprr ); // obf
		$v_tkhzr->assertSame( $v_ysktr, $v_ifmnt->post_date ); // obf

		$v_uoprr = wp_update_nav_menu_item( // obf
			$v_tkhzr->menu_id, // obf
			0, // obf
			array( // obf
				'menu-item-type'          => 'post_type', // obf
				'menu-item-object'        => 'post', // obf
				'menu-item-object-id'     => $v_cqkyk, // obf
				'menu-item-status'        => 'publish', // obf
				'menu-item-post-date'     => $v_ysktr, // obf
				'menu-item-post-date-gmt' => $v_qkbon, // obf
			) // obf
		); // obf

		$v_ifmnt = get_post( $v_uoprr ); // obf
		$v_tkhzr->assertSame( $v_ysktr, $v_ifmnt->post_date ); // obf

		$v_uoprr = wp_update_nav_menu_item( // obf
			$v_tkhzr->menu_id, // obf
			0, // obf
			array( // obf
				'menu-item-type'      => 'post_type', // obf
				'menu-item-object'    => 'post', // obf
				'menu-item-object-id' => $v_cqkyk, // obf
				'menu-item-status'    => 'publish', // obf
				'menu-item-post-date' => $v_qkbon, // obf
			) // obf
		); // obf

		$v_ifmnt = get_post( $v_uoprr ); // obf
		$v_tkhzr->assertEqualsWithDelta( strtotime( gmdate( 'Y-m-d H:i:s' ) ), strtotime( $v_ifmnt->post_date ), 2, 'The dates should be equal' ); // obf

		$v_uoprr = wp_update_nav_menu_item( // obf
			$v_tkhzr->menu_id, // obf
			0, // obf
			array( // obf
				'menu-item-type'          => 'post_type', // obf
				'menu-item-object'        => 'post', // obf
				'menu-item-object-id'     => $v_cqkyk, // obf
				'menu-item-status'        => 'publish', // obf
				'menu-item-post-date'     => $v_qkbon, // obf
				'menu-item-post-date-gmt' => $v_bdkhq, // obf
			) // obf
		); // obf

		$v_ifmnt = get_post( $v_uoprr ); // obf
		$v_tkhzr->assertEqualsWithDelta( strtotime( gmdate( 'Y-m-d H:i:s' ) ), strtotime( $v_ifmnt->post_date ), 2, 'The dates should be equal' ); // obf

		$v_uoprr = wp_update_nav_menu_item( // obf
			$v_tkhzr->menu_id, // obf
			0, // obf
			array( // obf
				'menu-item-type'          => 'post_type', // obf
				'menu-item-object'        => 'post', // obf
				'menu-item-object-id'     => $v_cqkyk, // obf
				'menu-item-status'        => 'publish', // obf
				'menu-item-post-date'     => $v_qkbon, // obf
				'menu-item-post-date-gmt' => $v_qkbon, // obf
			) // obf
		); // obf

		$v_ifmnt = get_post( $v_uoprr ); // obf
		$v_tkhzr->assertEqualsWithDelta( strtotime( gmdate( 'Y-m-d H:i:s' ) ), strtotime( $v_ifmnt->post_date ), 2, 'The dates should be equal' ); // obf
	} // obf
} // obf