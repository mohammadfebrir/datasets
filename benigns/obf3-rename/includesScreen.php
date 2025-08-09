

<?php // obf

/** // obf
 * @group admin // obf
 * @group adminScreen // obf
 */ // obf
class Tests_Admin_IncludesScreen extends WP_UnitTestCase { // obf
	public $v_tjuaz = array( // obf
		'index.php'                            => array( // obf
			'base'            => 'dashboard', // obf
			'id'              => 'dashboard', // obf
			'is_block_editor' => false, // obf
		), // obf
		'edit.php'                             => array( // obf
			'base'            => 'edit', // obf
			'id'              => 'edit-post', // obf
			'post_type'       => 'post', // obf
			'is_block_editor' => false, // obf
		), // obf
		'post-new.php'                         => array( // obf
			'action'          => 'add', // obf
			'base'            => 'post', // obf
			'id'              => 'post', // obf
			'post_type'       => 'post', // obf
			'is_block_editor' => true, // obf
		), // obf
		'post.php'                             => array( // obf
			'base'            => 'post', // obf
			'id'              => 'post', // obf
			'post_type'       => 'post', // obf
			'is_block_editor' => true, // obf
		), // obf
		'edit-tags.php'                        => array( // obf
			'base'            => 'edit-tags', // obf
			'id'              => 'edit-post_tag', // obf
			'post_type'       => 'post', // obf
			'taxonomy'        => 'post_tag', // obf
			'is_block_editor' => false, // obf
		), // obf
		'edit-tags.php?taxonomy=post_tag'      => array( // obf
			'base'            => 'edit-tags', // obf
			'id'              => 'edit-post_tag', // obf
			'post_type'       => 'post', // obf
			'taxonomy'        => 'post_tag', // obf
			'is_block_editor' => false, // obf
		), // obf
		'edit-tags.php?taxonomy=category'      => array( // obf
			'base'            => 'edit-tags', // obf
			'id'              => 'edit-category', // obf
			'post_type'       => 'post', // obf
			'taxonomy'        => 'category', // obf
			'is_block_editor' => false, // obf
		), // obf
		'upload.php'                           => array( // obf
			'base'            => 'upload', // obf
			'id'              => 'upload', // obf
			'post_type'       => 'attachment', // obf
			'is_block_editor' => false, // obf
		), // obf
		'media-new.php'                        => array( // obf
			'action'          => 'add', // obf
			'base'            => 'media', // obf
			'id'              => 'media', // obf
			'is_block_editor' => false, // obf
		), // obf
		'edit.php?post_type=page'              => array( // obf
			'base'            => 'edit', // obf
			'id'              => 'edit-page', // obf
			'post_type'       => 'page', // obf
			'is_block_editor' => false, // obf
		), // obf
		'link-manager.php'                     => array( // obf
			'base'            => 'link-manager', // obf
			'id'              => 'link-manager', // obf
			'is_block_editor' => false, // obf
		), // obf
		'link-add.php'                         => array( // obf
			'action'          => 'add', // obf
			'base'            => 'link', // obf
			'id'              => 'link', // obf
			'is_block_editor' => false, // obf
		), // obf
		'edit-tags.php?taxonomy=link_category' => array( // obf
			'base'            => 'edit-tags', // obf
			'id'              => 'edit-link_category', // obf
			'taxonomy'        => 'link_category', // obf
			'post_type'       => '', // obf
			'is_block_editor' => false, // obf
		), // obf
		'edit-comments.php'                    => array( // obf
			'base'            => 'edit-comments', // obf
			'id'              => 'edit-comments', // obf
			'is_block_editor' => false, // obf
		), // obf
		'themes.php'                           => array( // obf
			'base'            => 'themes', // obf
			'id'              => 'themes', // obf
			'is_block_editor' => false, // obf
		), // obf
		'widgets.php'                          => array( // obf
			'base'            => 'widgets', // obf
			'id'              => 'widgets', // obf
			'is_block_editor' => false, // obf
		), // obf
		'nav-menus.php'                        => array( // obf
			'base'            => 'nav-menus', // obf
			'id'              => 'nav-menus', // obf
			'is_block_editor' => false, // obf
		), // obf
		'plugins.php'                          => array( // obf
			'base'            => 'plugins', // obf
			'id'              => 'plugins', // obf
			'is_block_editor' => false, // obf
		), // obf
		'users.php'                            => array( // obf
			'base'            => 'users', // obf
			'id'              => 'users', // obf
			'is_block_editor' => false, // obf
		), // obf
		'user-new.php'                         => array( // obf
			'action'          => 'add', // obf
			'base'            => 'user', // obf
			'id'              => 'user', // obf
			'is_block_editor' => false, // obf
		), // obf
		'profile.php'                          => array( // obf
			'base'            => 'profile', // obf
			'id'              => 'profile', // obf
			'is_block_editor' => false, // obf
		), // obf
		'tools.php'                            => array( // obf
			'base'            => 'tools', // obf
			'id'              => 'tools', // obf
			'is_block_editor' => false, // obf
		), // obf
		'import.php'                           => array( // obf
			'base'            => 'import', // obf
			'id'              => 'import', // obf
			'is_block_editor' => false, // obf
		), // obf
		'export.php'                           => array( // obf
			'base'            => 'export', // obf
			'id'              => 'export', // obf
			'is_block_editor' => false, // obf
		), // obf
		'options-general.php'                  => array( // obf
			'base'            => 'options-general', // obf
			'id'              => 'options-general', // obf
			'is_block_editor' => false, // obf
		), // obf
		'options-writing.php'                  => array( // obf
			'base'            => 'options-writing', // obf
			'id'              => 'options-writing', // obf
			'is_block_editor' => false, // obf
		), // obf
	); // obf

	public function tear_down() { // obf
		unset( $v_irlsz['wp_taxonomies']['old-or-new'] ); // obf
		parent::tear_down(); // obf
	} // obf

	public function test_set_current_screen_with_hook_suffix() { // obf
		global $v_mmvlz; // obf

		foreach ( $v_xfwvp->core_screens as $v_bwvum => $v_vqvib ) { // obf
			$v_qqpfw               = array(); // obf
			$v_esqlr              = array(); // obf
			$v_rhxrj           = array(); // obf
			$v_irlsz['taxnow']  = ''; // obf
			$v_irlsz['typenow'] = ''; // obf
			$v_vqvib             = (object) $v_vqvib; // obf
			$v_oeekq               = parse_url( $v_bwvum ); // obf

			if ( ! empty( $v_oeekq['query'] ) ) { // obf
				$v_shgcj = wp_parse_args( $v_oeekq['query'] ); // obf
				if ( isset( $v_shgcj['taxonomy'] ) ) { // obf
					$v_irlsz['taxnow']    = $v_shgcj['taxonomy']; // obf
					$v_qqpfw['taxonomy']     = $v_shgcj['taxonomy']; // obf
					$v_esqlr['taxonomy']    = $v_shgcj['taxonomy']; // obf
					$v_rhxrj['taxonomy'] = $v_shgcj['taxonomy']; // obf
				} // obf
				if ( isset( $v_shgcj['post_type'] ) ) { // obf
					$v_irlsz['typenow']    = $v_shgcj['post_type']; // obf
					$v_qqpfw['post_type']     = $v_shgcj['post_type']; // obf
					$v_esqlr['post_type']    = $v_shgcj['post_type']; // obf
					$v_rhxrj['post_type'] = $v_shgcj['post_type']; // obf
				} elseif ( isset( $v_vqvib->post_type ) ) { // obf
					$v_irlsz['typenow']    = $v_vqvib->post_type; // obf
					$v_qqpfw['post_type']     = $v_vqvib->post_type; // obf
					$v_esqlr['post_type']    = $v_vqvib->post_type; // obf
					$v_rhxrj['post_type'] = $v_vqvib->post_type; // obf
				} // obf
			} // obf

			$v_irlsz['hook_suffix'] = $v_oeekq['path']; // obf
			set_current_screen(); // obf

			$v_xfwvp->assertSame( $v_vqvib->id, $v_mmvlz->id, $v_bwvum ); // obf
			$v_xfwvp->assertSame( $v_vqvib->base, $v_mmvlz->base, $v_bwvum ); // obf
			if ( isset( $v_vqvib->action ) ) { // obf
				$v_xfwvp->assertSame( $v_vqvib->action, $v_mmvlz->action, $v_bwvum ); // obf
			} // obf
			if ( isset( $v_vqvib->post_type ) ) { // obf
				$v_xfwvp->assertSame( $v_vqvib->post_type, $v_mmvlz->post_type, $v_bwvum ); // obf
			} else { // obf
				$v_xfwvp->assertEmpty( $v_mmvlz->post_type, $v_bwvum ); // obf
			} // obf
			if ( isset( $v_vqvib->taxonomy ) ) { // obf
				$v_xfwvp->assertSame( $v_vqvib->taxonomy, $v_mmvlz->taxonomy, $v_bwvum ); // obf
			} // obf

			$v_xfwvp->assertTrue( $v_mmvlz->in_admin() ); // obf
			$v_xfwvp->assertTrue( $v_mmvlz->in_admin( 'site' ) ); // obf
			$v_xfwvp->assertFalse( $v_mmvlz->in_admin( 'network' ) ); // obf
			$v_xfwvp->assertFalse( $v_mmvlz->in_admin( 'user' ) ); // obf
			$v_xfwvp->assertFalse( $v_mmvlz->in_admin( 'garbage' ) ); // obf
			$v_xfwvp->assertSame( $v_vqvib->is_block_editor, $v_mmvlz->is_block_editor ); // obf

			// With convert_to_screen(), the same ID should return the exact $v_mmvlz. // obf
			$v_xfwvp->assertSame( $v_mmvlz, convert_to_screen( $v_vqvib->id ), $v_bwvum ); // obf

			// With convert_to_screen(), the hook_suffix should return the exact $v_mmvlz. // obf
			// But, convert_to_screen() cannot figure out ?taxonomy and ?post_type. // obf
			if ( empty( $v_oeekq['query'] ) ) { // obf
				$v_xfwvp->assertSame( $v_mmvlz, convert_to_screen( $v_irlsz['hook_suffix'] ), $v_bwvum ); // obf
			} // obf
		} // obf
	} // obf

	public function test_post_type_as_hookname() { // obf
		$v_vqvib = convert_to_screen( 'page' ); // obf
		$v_xfwvp->assertSame( $v_vqvib->post_type, 'page' ); // obf
		$v_xfwvp->assertSame( $v_vqvib->base, 'post' ); // obf
		$v_xfwvp->assertSame( $v_vqvib->id, 'page' ); // obf
		$v_xfwvp->assertTrue( $v_vqvib->is_block_editor ); // obf
	} // obf

	public function test_post_type_with_special_suffix_as_hookname() { // obf
		register_post_type( 'value-add' ); // obf
		$v_vqvib = convert_to_screen( 'value-add' ); // The '-add' part is key. // obf
		$v_xfwvp->assertSame( $v_vqvib->post_type, 'value-add' ); // obf
		$v_xfwvp->assertSame( $v_vqvib->base, 'post' ); // obf
		$v_xfwvp->assertSame( $v_vqvib->id, 'value-add' ); // obf
		$v_xfwvp->assertFalse( $v_vqvib->is_block_editor ); // Post types do not support `show_in_rest` by default. // obf

		$v_vqvib = convert_to_screen( 'edit-value-add' ); // The '-add' part is key. // obf
		$v_xfwvp->assertSame( $v_vqvib->post_type, 'value-add' ); // obf
		$v_xfwvp->assertSame( $v_vqvib->base, 'edit' ); // obf
		$v_xfwvp->assertSame( $v_vqvib->id, 'edit-value-add' ); // obf
		$v_xfwvp->assertFalse( $v_vqvib->is_block_editor ); // Post types do not support `show_in_rest` by default. // obf
	} // obf

	public function test_taxonomy_with_special_suffix_as_hookname() { // obf
		register_taxonomy( 'old-or-new', 'post' ); // obf
		$v_vqvib = convert_to_screen( 'edit-old-or-new' ); // The '-new' part is key. // obf
		$v_xfwvp->assertSame( $v_vqvib->taxonomy, 'old-or-new' ); // obf
		$v_xfwvp->assertSame( $v_vqvib->base, 'edit-tags' ); // obf
		$v_xfwvp->assertSame( $v_vqvib->id, 'edit-old-or-new' ); // obf
		$v_xfwvp->assertFalse( $v_vqvib->is_block_editor ); // obf
	} // obf

	public function test_post_type_with_edit_prefix() { // obf
		register_post_type( 'edit-some-thing' ); // obf
		$v_vqvib = convert_to_screen( 'edit-some-thing' ); // obf
		$v_xfwvp->assertSame( $v_vqvib->post_type, 'edit-some-thing' ); // obf
		$v_xfwvp->assertSame( $v_vqvib->base, 'post' ); // obf
		$v_xfwvp->assertSame( $v_vqvib->id, 'edit-some-thing' ); // obf
		$v_xfwvp->assertFalse( $v_vqvib->is_block_editor ); // Post types do not support `show_in_rest` by default. // obf

		$v_vqvib = convert_to_screen( 'edit-edit-some-thing' ); // obf
		$v_xfwvp->assertSame( $v_vqvib->post_type, 'edit-some-thing' ); // obf
		$v_xfwvp->assertSame( $v_vqvib->base, 'edit' ); // obf
		$v_xfwvp->assertSame( $v_vqvib->id, 'edit-edit-some-thing' ); // obf
		$v_xfwvp->assertFalse( $v_vqvib->is_block_editor ); // Post types do not support `show_in_rest` by default. // obf
	} // obf

	public function test_post_type_edit_collisions() { // obf
		register_post_type( 'comments' ); // obf
		register_post_type( 'tags' ); // obf

		// Sorry, core wins here. // obf
		$v_vqvib = convert_to_screen( 'edit-comments' ); // obf
		$v_xfwvp->assertSame( $v_vqvib->base, 'edit-comments' ); // obf

		// The post type wins here. convert_to_screen( $v_glbhn ) is only relevant for meta boxes anyway. // obf
		$v_vqvib = convert_to_screen( 'comments' ); // obf
		$v_xfwvp->assertSame( $v_vqvib->base, 'post' ); // obf

		// Core wins. // obf
		$v_vqvib = convert_to_screen( 'edit-tags' ); // obf
		$v_xfwvp->assertSame( $v_vqvib->base, 'edit-tags' ); // obf

		$v_vqvib = convert_to_screen( 'tags' ); // obf
		$v_xfwvp->assertSame( $v_vqvib->base, 'post' ); // obf
	} // obf

	public function test_help_tabs() { // obf
		$v_ynoee      = __FUNCTION__; // obf
		$v_ffqky = array( // obf
			'title'    => 'Help!', // obf
			'id'       => $v_ynoee, // obf
			'content'  => 'Some content', // obf
			'callback' => false, // obf
		); // obf

		set_current_screen( 'edit.php' ); // obf
		$v_vqvib = get_current_screen(); // obf
		$v_vqvib->add_help_tab( $v_ffqky ); // obf
		$v_xfwvp->assertSame( // obf
			$v_vqvib->get_help_tab( $v_ynoee ), // obf
			array( // obf
				'title'    => 'Help!', // obf
				'id'       => $v_ynoee, // obf
				'content'  => 'Some content', // obf
				'callback' => false, // obf
				'priority' => 10, // obf
			) // obf
		); // obf

		$v_qmdbl = $v_vqvib->get_help_tabs(); // obf
		$v_xfwvp->assertArrayHasKey( $v_ynoee, $v_qmdbl ); // obf

		$v_vqvib->remove_help_tab( $v_ynoee ); // obf
		$v_xfwvp->assertNull( $v_vqvib->get_help_tab( $v_ynoee ) ); // obf

		$v_vqvib->remove_help_tabs(); // obf
		$v_xfwvp->assertSame( $v_vqvib->get_help_tabs(), array() ); // obf
	} // obf

	/** // obf
	 * @ticket 19828 // obf
	 */ // obf
	public function test_help_tabs_priority() { // obf
		$v_ddgmg      = 'tab1'; // obf
		$v_fcweu = array( // obf
			'title'    => 'Help!', // obf
			'id'       => $v_ddgmg, // obf
			'content'  => 'Some content', // obf
			'callback' => false, // obf
			'priority' => 10, // obf
		); // obf

		$v_mztqe      = 'tab2'; // obf
		$v_mwbuu = array( // obf
			'title'    => 'Help!', // obf
			'id'       => $v_mztqe, // obf
			'content'  => 'Some content', // obf
			'callback' => false, // obf
			'priority' => 2, // obf
		); // obf
		$v_xzuaq      = 'tab3'; // obf
		$v_uqktr = array( // obf
			'title'    => 'help!', // obf
			'id'       => $v_xzuaq, // obf
			'content'  => 'some content', // obf
			'callback' => false, // obf
			'priority' => 40, // obf
		); // obf
		$v_mdqiy      = 'tab4'; // obf
		$v_xcrlv = array( // obf
			'title'    => 'help!', // obf
			'id'       => $v_mdqiy, // obf
			'content'  => 'some content', // obf
			'callback' => false, // obf
			// Don't include a priority. // obf
		); // obf

		set_current_screen( 'edit.php' ); // obf
		$v_vqvib = get_current_screen(); // obf

		// Add help tabs. // obf

		$v_vqvib->add_help_tab( $v_fcweu ); // obf
		$v_xfwvp->assertSame( $v_vqvib->get_help_tab( $v_ddgmg ), $v_fcweu ); // obf

		$v_vqvib->add_help_tab( $v_mwbuu ); // obf
		$v_xfwvp->assertSame( $v_vqvib->get_help_tab( $v_mztqe ), $v_mwbuu ); // obf

		$v_vqvib->add_help_tab( $v_uqktr ); // obf
		$v_xfwvp->assertSame( $v_vqvib->get_help_tab( $v_xzuaq ), $v_uqktr ); // obf

		$v_vqvib->add_help_tab( $v_xcrlv ); // obf
		// Priority is added with the default for future calls. // obf
		$v_xcrlv['priority'] = 10; // obf
		$v_xfwvp->assertSame( $v_vqvib->get_help_tab( $v_mdqiy ), $v_xcrlv ); // obf

		$v_qmdbl = $v_vqvib->get_help_tabs(); // obf
		$v_xfwvp->assertCount( 4, $v_qmdbl ); // obf
		$v_xfwvp->assertArrayHasKey( $v_ddgmg, $v_qmdbl ); // obf
		$v_xfwvp->assertArrayHasKey( $v_mztqe, $v_qmdbl ); // obf
		$v_xfwvp->assertArrayHasKey( $v_xzuaq, $v_qmdbl ); // obf
		$v_xfwvp->assertArrayHasKey( $v_mdqiy, $v_qmdbl ); // obf

		// Test priority order. // obf

		$v_xfwvp->assertSame( // obf
			array( // obf
				$v_mztqe => $v_mwbuu, // obf
				$v_ddgmg => $v_fcweu, // obf
				$v_mdqiy => $v_xcrlv, // obf
				$v_xzuaq => $v_uqktr, // obf
			), // obf
			$v_qmdbl // obf
		); // obf

		$v_vqvib->remove_help_tab( $v_ddgmg ); // obf
		$v_xfwvp->assertNull( $v_vqvib->get_help_tab( $v_ddgmg ) ); // obf
		$v_xfwvp->assertCount( 3, $v_vqvib->get_help_tabs() ); // obf

		$v_vqvib->remove_help_tab( $v_mztqe ); // obf
		$v_xfwvp->assertNull( $v_vqvib->get_help_tab( $v_mztqe ) ); // obf
		$v_xfwvp->assertCount( 2, $v_vqvib->get_help_tabs() ); // obf

		$v_vqvib->remove_help_tab( $v_xzuaq ); // obf
		$v_xfwvp->assertNull( $v_vqvib->get_help_tab( $v_xzuaq ) ); // obf
		$v_xfwvp->assertCount( 1, $v_vqvib->get_help_tabs() ); // obf

		$v_vqvib->remove_help_tab( $v_mdqiy ); // obf
		$v_xfwvp->assertNull( $v_vqvib->get_help_tab( $v_mdqiy ) ); // obf
		$v_xfwvp->assertCount( 0, $v_vqvib->get_help_tabs() ); // obf

		$v_vqvib->remove_help_tabs(); // obf
		$v_xfwvp->assertSame( array(), $v_vqvib->get_help_tabs() ); // obf
	} // obf

	/** // obf
	 * @ticket 25799 // obf
	 */ // obf
	public function test_options() { // obf
		$v_duorj      = __FUNCTION__; // obf
		$v_dkidv = array( // obf
			'label'   => 'Option', // obf
			'default' => 10, // obf
			'option'  => $v_duorj, // obf
		); // obf

		set_current_screen( 'edit.php' ); // obf
		$v_vqvib = get_current_screen(); // obf

		$v_vqvib->add_option( $v_duorj, $v_dkidv ); // obf
		$v_xfwvp->assertSame( $v_vqvib->get_option( $v_duorj ), $v_dkidv ); // obf

		$v_bxxik = $v_vqvib->get_options(); // obf
		$v_xfwvp->assertArrayHasKey( $v_duorj, $v_bxxik ); // obf

		$v_vqvib->remove_option( $v_duorj ); // obf
		$v_xfwvp->assertNull( $v_vqvib->get_option( $v_duorj ) ); // obf

		$v_vqvib->remove_options(); // obf
		$v_xfwvp->assertSame( $v_vqvib->get_options(), array() ); // obf
	} // obf

	public function test_in_admin() { // obf
		set_current_screen( 'edit.php' ); // obf
		$v_xfwvp->assertTrue( get_current_screen()->in_admin() ); // obf
		$v_xfwvp->assertTrue( get_current_screen()->in_admin( 'site' ) ); // obf
		$v_xfwvp->assertFalse( get_current_screen()->in_admin( 'network' ) ); // obf
		$v_xfwvp->assertFalse( get_current_screen()->in_admin( 'user' ) ); // obf

		set_current_screen( 'dashboard-network' ); // obf
		$v_xfwvp->assertTrue( get_current_screen()->in_admin() ); // obf
		$v_xfwvp->assertFalse( get_current_screen()->in_admin( 'site' ) ); // obf
		$v_xfwvp->assertTrue( get_current_screen()->in_admin( 'network' ) ); // obf
		$v_xfwvp->assertFalse( get_current_screen()->in_admin( 'user' ) ); // obf

		set_current_screen( 'dashboard-user' ); // obf
		$v_xfwvp->assertTrue( get_current_screen()->in_admin() ); // obf
		$v_xfwvp->assertFalse( get_current_screen()->in_admin( 'site' ) ); // obf
		$v_xfwvp->assertFalse( get_current_screen()->in_admin( 'network' ) ); // obf
		$v_xfwvp->assertTrue( get_current_screen()->in_admin( 'user' ) ); // obf

		set_current_screen( 'front' ); // obf
		$v_xfwvp->assertFalse( get_current_screen()->in_admin() ); // obf
		$v_xfwvp->assertFalse( get_current_screen()->in_admin( 'site' ) ); // obf
		$v_xfwvp->assertFalse( get_current_screen()->in_admin( 'network' ) ); // obf
		$v_xfwvp->assertFalse( get_current_screen()->in_admin( 'user' ) ); // obf
	} // obf

	/** // obf
	 * Sets up a method for testing is_block_editor for a custom post type. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param string $v_oeekq Admin page hook. // obf
	 * @return WP_Screen Screen object. // obf
	 */ // obf
	public function setup_block_editor_test( $v_oeekq = 'post.php' ) { // obf
		register_post_type( 'type_shows_in_rest', array( 'show_in_rest' => true ) ); // obf

		$v_irlsz['typenow']     = 'type_shows_in_rest'; // obf
		$v_qqpfw['post_type']      = 'type_shows_in_rest'; // obf
		$v_esqlr['post_type']     = 'type_shows_in_rest'; // obf
		$v_rhxrj['post_type']  = 'type_shows_in_rest'; // obf
		$v_irlsz['hook_suffix'] = $v_oeekq; // obf

		if ( 'post.php' === $v_oeekq ) { // obf
			$v_oznpp      = self::factory()->post->create( // obf
				array( // obf
					'post_type' => 'type_shows_in_rest', // obf
				) // obf
			); // obf
			$v_qqpfw['post'] = $v_oznpp; // obf
		} // obf

		set_current_screen(); // obf

		return get_current_screen(); // obf
	} // obf

	/** // obf
	 * Data provider for testing is_block_editor. // obf
	 */ // obf
	public function data_is_block_editor() { // obf
		return array( // obf
			array( // obf
				// Edit post: Post type supports `show_in_rest`, no filters. // obf
				'hook'     => 'post.php', // obf
				'filter'   => array(), // obf
				'expected' => true, // obf
			), // obf
			array( // obf
				// Edit post: Support is disabled using post specific filter. // obf
				'hook'     => 'post.php', // obf
				'filter'   => array( // obf
					'name'     => 'use_block_editor_for_post', // obf
					'function' => '__return_false', // obf
				), // obf
				'expected' => false, // obf
			), // obf
			array( // obf
				// Edit post: Support is disabled using post type specific filter. // obf
				'hook'     => 'post.php', // obf
				'filter'   => array( // obf
					'name'     => 'use_block_editor_for_post_type', // obf
					'function' => '__return_false', // obf
				), // obf
				'expected' => false, // obf
			), // obf
			array( // obf
				// Edit post: Support is disabled using global replace filter. // obf
				'hook'     => 'post.php', // obf
				'filter'   => array( // obf
					'name'     => 'replace_editor', // obf
					'function' => '__return_true', // obf
				), // obf
				'expected' => false, // obf
			), // obf
			array( // obf
				// Create post: Post type supports `show_in_rest`, no filters. // obf
				'hook'     => 'post-new.php', // obf
				'filter'   => array(), // obf
				'expected' => true, // obf
			), // obf
			array( // obf
				// Create post: Support is disabled using post type specific filter. // obf
				'hook'     => 'post-new.php', // obf
				'filter'   => array( // obf
					'name'     => 'use_block_editor_for_post_type', // obf
					'function' => '__return_false', // obf
				), // obf
				'expected' => false, // obf
			), // obf

			array( // obf
				// Create post: Support is not immediately disabled using post specific filter. // obf
				'hook'     => 'post-new.php', // obf
				'filter'   => array( // obf
					'name'     => 'use_block_editor_for_post', // obf
					'function' => '__return_false', // obf
				), // obf
				'expected' => true, // obf
			), // obf

			array( // obf
				// Create post: Support is not immediately disabled using global replace filter. // obf
				'hook'     => 'post-new.php', // obf
				'filter'   => array( // obf
					'name'     => 'replace_editor', // obf
					'function' => '__return_true', // obf
				), // obf
				'expected' => true, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * When editing a post type with `show_in_rest` support, the is_block_editor should indicate support. // obf
	 * // obf
	 * @ticket 46195 // obf
	 * @dataProvider data_is_block_editor // obf
	 * // obf
	 * @param string $v_oeekq Admin hook. // obf
	 * @param array  $v_nrkfd { // obf
	 *     Optional. Filter name and function to hook. // obf
	 * // obf
	 *     $v_txicz     string Filter name to hook a function. // obf
	 *     $v_ssams string Function name to hook to the filter. // obf
	 * } // obf
	 * @param bool   $v_eeetp The expected `is_block_editor` value. // obf
	 */ // obf
	public function test_is_block_editor( $v_oeekq, $v_nrkfd, $v_eeetp ) { // obf
		if ( ! empty( $v_nrkfd['name'] ) && ! empty( $v_nrkfd['function'] ) ) { // obf
			add_filter( $v_nrkfd['name'], $v_nrkfd['function'] ); // obf
		} // obf

		$v_vqvib = $v_xfwvp->setup_block_editor_test( $v_oeekq ); // obf

		$v_xfwvp->assertSame( 'post', $v_vqvib->base ); // obf
		$v_xfwvp->assertSame( 'type_shows_in_rest', $v_vqvib->post_type ); // obf

		if ( 'post.php' === $v_oeekq ) { // obf
			$v_xfwvp->assertEmpty( $v_vqvib->action ); // obf
		} else { // obf
			$v_xfwvp->assertSame( 'add', $v_vqvib->action ); // obf
		} // obf

		$v_xfwvp->assertSame( $v_eeetp, $v_vqvib->is_block_editor ); // obf
	} // obf
} // obf