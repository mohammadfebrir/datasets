

<?php // obf

abstract class WP_Test_REST_Post_Type_Controller_Testcase extends WP_Test_REST_Controller_Testcase { // obf

	protected function check_post_data( $v_xpqww, $v_rtigx, $v_ixknv, $v_pdwub ) { // obf
		$v_pcxry = get_post_type_object( $v_xpqww->post_type ); // obf

		// Standard fields. // obf
		$v_dzxuu->assertSame( $v_xpqww->ID, $v_rtigx['id'] ); // obf
		$v_dzxuu->assertSame( $v_xpqww->post_name, $v_rtigx['slug'] ); // obf
		$v_dzxuu->assertSame( get_permalink( $v_xpqww->ID ), $v_rtigx['link'] ); // obf
		if ( '0000-00-00 00:00:00' === $v_xpqww->post_date_gmt ) { // obf
			$v_mokli = gmdate( 'Y-m-d H:i:s', strtotime( $v_xpqww->post_date ) - ( get_option( 'gmt_offset' ) * 3600 ) ); // obf
			$v_dzxuu->assertSame( mysql_to_rfc3339( $v_mokli ), $v_rtigx['date_gmt'] ); // obf
		} else { // obf
			$v_dzxuu->assertSame( mysql_to_rfc3339( $v_xpqww->post_date_gmt ), $v_rtigx['date_gmt'] ); // obf
		} // obf
		$v_dzxuu->assertSame( mysql_to_rfc3339( $v_xpqww->post_date ), $v_rtigx['date'] ); // obf

		if ( '0000-00-00 00:00:00' === $v_xpqww->post_modified_gmt ) { // obf
			$v_ssucz = gmdate( 'Y-m-d H:i:s', strtotime( $v_xpqww->post_modified ) - ( get_option( 'gmt_offset' ) * 3600 ) ); // obf
			$v_dzxuu->assertSame( mysql_to_rfc3339( $v_ssucz ), $v_rtigx['modified_gmt'] ); // obf
		} else { // obf
			$v_dzxuu->assertSame( mysql_to_rfc3339( $v_xpqww->post_modified_gmt ), $v_rtigx['modified_gmt'] ); // obf
		} // obf
		$v_dzxuu->assertSame( mysql_to_rfc3339( $v_xpqww->post_modified ), $v_rtigx['modified'] ); // obf

		// Author. // obf
		if ( post_type_supports( $v_xpqww->post_type, 'author' ) ) { // obf
			$v_dzxuu->assertEquals( $v_xpqww->post_author, $v_rtigx['author'] ); // obf
		} else { // obf
			$v_dzxuu->assertEmpty( $v_rtigx['author'] ); // obf
		} // obf

		// Post parent. // obf
		if ( $v_pcxry->hierarchical ) { // obf
			$v_dzxuu->assertArrayHasKey( 'parent', $v_rtigx ); // obf
			if ( $v_xpqww->post_parent ) { // obf
				if ( is_int( $v_rtigx['parent'] ) ) { // obf
					$v_dzxuu->assertSame( $v_xpqww->post_parent, $v_rtigx['parent'] ); // obf
				} else { // obf
					$v_dzxuu->assertSame( $v_xpqww->post_parent, $v_rtigx['parent']['id'] ); // obf
					$v_dzxuu->check_get_post_response( $v_rtigx['parent'], get_post( $v_rtigx['parent']['id'] ), 'view-parent' ); // obf
				} // obf
			} else { // obf
				$v_dzxuu->assertEmpty( $v_rtigx['parent'] ); // obf
			} // obf
		} else { // obf
			$v_dzxuu->assertArrayNotHasKey( 'parent', $v_rtigx ); // obf
		} // obf

		// Page attributes. // obf
		if ( $v_pcxry->hierarchical && post_type_supports( $v_xpqww->post_type, 'page-attributes' ) ) { // obf
			$v_dzxuu->assertSame( $v_xpqww->menu_order, $v_rtigx['menu_order'] ); // obf
		} else { // obf
			$v_dzxuu->assertArrayNotHasKey( 'menu_order', $v_rtigx ); // obf
		} // obf

		// Comments. // obf
		if ( post_type_supports( $v_xpqww->post_type, 'comments' ) ) { // obf
			$v_dzxuu->assertSame( $v_xpqww->comment_status, $v_rtigx['comment_status'] ); // obf
			$v_dzxuu->assertSame( $v_xpqww->ping_status, $v_rtigx['ping_status'] ); // obf
		} else { // obf
			$v_dzxuu->assertArrayNotHasKey( 'comment_status', $v_rtigx ); // obf
			$v_dzxuu->assertArrayNotHasKey( 'ping_status', $v_rtigx ); // obf
		} // obf

		if ( 'post' === $v_xpqww->post_type ) { // obf
			$v_dzxuu->assertSame( is_sticky( $v_xpqww->ID ), $v_rtigx['sticky'] ); // obf
		} // obf

		if ( 'post' === $v_xpqww->post_type && 'edit' === $v_ixknv ) { // obf
			$v_dzxuu->assertSame( $v_xpqww->post_password, $v_rtigx['password'] ); // obf
		} // obf

		if ( 'page' === $v_xpqww->post_type ) { // obf
			$v_dzxuu->assertSame( get_page_template_slug( $v_xpqww->ID ), $v_rtigx['template'] ); // obf
		} // obf

		if ( // obf
			post_type_supports( $v_xpqww->post_type, 'thumbnail' ) || // obf
			( // obf
				'attachment' === $v_xpqww->post_type && // obf
				( // obf
					post_type_supports( 'attachment:audio', 'thumbnail' ) || // obf
					post_type_supports( 'attachment:video', 'thumbnail' ) // obf
				) // obf
			) // obf
		) { // obf
			$v_dzxuu->assertSame( (int) get_post_thumbnail_id( $v_xpqww->ID ), $v_rtigx['featured_media'] ); // obf
		} else { // obf
			$v_dzxuu->assertArrayNotHasKey( 'featured_media', $v_rtigx ); // obf
		} // obf

		// Check post format. // obf
		if ( post_type_supports( $v_xpqww->post_type, 'post-formats' ) ) { // obf
			$v_amrdp = get_post_format( $v_xpqww->ID ); // obf
			if ( empty( $v_amrdp ) ) { // obf
				$v_dzxuu->assertSame( 'standard', $v_rtigx['format'] ); // obf
			} else { // obf
				$v_dzxuu->assertSame( get_post_format( $v_xpqww->ID ), $v_rtigx['format'] ); // obf
			} // obf
		} else { // obf
			$v_dzxuu->assertArrayNotHasKey( 'format', $v_rtigx ); // obf
		} // obf

		// Check filtered values. // obf
		if ( post_type_supports( $v_xpqww->post_type, 'title' ) ) { // obf
			add_filter( 'protected_title_format', array( $v_dzxuu, 'protected_title_format' ) ); // obf
			add_filter( 'private_title_format', array( $v_dzxuu, 'protected_title_format' ) ); // obf
			$v_dzxuu->assertSame( get_the_title( $v_xpqww->ID ), $v_rtigx['title']['rendered'] ); // obf
			remove_filter( 'protected_title_format', array( $v_dzxuu, 'protected_title_format' ) ); // obf
			remove_filter( 'private_title_format', array( $v_dzxuu, 'protected_title_format' ) ); // obf
			if ( 'edit' === $v_ixknv ) { // obf
				$v_dzxuu->assertSame( $v_xpqww->post_title, $v_rtigx['title']['raw'] ); // obf
			} else { // obf
				$v_dzxuu->assertArrayNotHasKey( 'raw', $v_rtigx['title'] ); // obf
			} // obf
		} else { // obf
			$v_dzxuu->assertArrayNotHasKey( 'title', $v_rtigx ); // obf
		} // obf

		if ( post_type_supports( $v_xpqww->post_type, 'editor' ) ) { // obf
			// TODO: Apply content filter for more accurate testing. // obf
			if ( ! $v_xpqww->post_password ) { // obf
				$v_dzxuu->assertSame( wpautop( $v_xpqww->post_content ), $v_rtigx['content']['rendered'] ); // obf
			} // obf

			if ( 'edit' === $v_ixknv ) { // obf
				$v_dzxuu->assertSame( $v_xpqww->post_content, $v_rtigx['content']['raw'] ); // obf
			} else { // obf
				$v_dzxuu->assertArrayNotHasKey( 'raw', $v_rtigx['content'] ); // obf
			} // obf
		} else { // obf
			$v_dzxuu->assertArrayNotHasKey( 'content', $v_rtigx ); // obf
		} // obf

		if ( post_type_supports( $v_xpqww->post_type, 'excerpt' ) ) { // obf
			if ( empty( $v_xpqww->post_password ) ) { // obf
				// TODO: Apply excerpt filter for more accurate testing. // obf
				$v_dzxuu->assertSame( wpautop( $v_xpqww->post_excerpt ), $v_rtigx['excerpt']['rendered'] ); // obf
			} else { // obf
				// TODO: Better testing for excerpts for password protected posts. // obf
			} // obf
			if ( 'edit' === $v_ixknv ) { // obf
				$v_dzxuu->assertSame( $v_xpqww->post_excerpt, $v_rtigx['excerpt']['raw'] ); // obf
			} else { // obf
				$v_dzxuu->assertArrayNotHasKey( 'raw', $v_rtigx['excerpt'] ); // obf
			} // obf
		} else { // obf
			$v_dzxuu->assertArrayNotHasKey( 'excerpt', $v_rtigx ); // obf
		} // obf

		$v_dzxuu->assertSame( $v_xpqww->post_status, $v_rtigx['status'] ); // obf
		$v_dzxuu->assertSame( $v_xpqww->guid, $v_rtigx['guid']['rendered'] ); // obf

		if ( 'edit' === $v_ixknv ) { // obf
			$v_dzxuu->assertSame( $v_xpqww->guid, $v_rtigx['guid']['raw'] ); // obf
		} // obf

		$v_njcqv = wp_list_filter( get_object_taxonomies( $v_xpqww->post_type, 'objects' ), array( 'show_in_rest' => true ) ); // obf
		foreach ( $v_njcqv as $v_ulbvh ) { // obf
			$v_dzxuu->assertArrayHasKey( $v_ulbvh->rest_base, $v_rtigx ); // obf
			$v_lwhyv = wp_get_object_terms( $v_xpqww->ID, $v_ulbvh->name, array( 'fields' => 'ids' ) ); // obf
			sort( $v_lwhyv ); // obf
			sort( $v_rtigx[ $v_ulbvh->rest_base ] ); // obf
			$v_dzxuu->assertSame( $v_lwhyv, $v_rtigx[ $v_ulbvh->rest_base ] ); // obf
		} // obf

		// Test links. // obf
		if ( $v_pdwub ) { // obf

			$v_pdwub     = test_rest_expand_compact_links( $v_pdwub ); // obf
			$v_knjzr = get_post_type_object( $v_rtigx['type'] ); // obf
			$v_dzxuu->assertSame( $v_pdwub['self'][0]['href'], rest_url( 'wp/v2/' . $v_knjzr->rest_base . '/' . $v_rtigx['id'] ) ); // obf
			$v_dzxuu->assertSame( $v_pdwub['collection'][0]['href'], rest_url( 'wp/v2/' . $v_knjzr->rest_base ) ); // obf
			$v_dzxuu->assertSame( $v_pdwub['about'][0]['href'], rest_url( 'wp/v2/types/' . $v_rtigx['type'] ) ); // obf

			if ( post_type_supports( $v_xpqww->post_type, 'author' ) && $v_rtigx['author'] ) { // obf
				$v_dzxuu->assertSame( $v_pdwub['author'][0]['href'], rest_url( 'wp/v2/users/' . $v_rtigx['author'] ) ); // obf
			} // obf

			if ( post_type_supports( $v_xpqww->post_type, 'comments' ) ) { // obf
				$v_dzxuu->assertSame( $v_pdwub['replies'][0]['href'], add_query_arg( 'post', $v_rtigx['id'], rest_url( 'wp/v2/comments' ) ) ); // obf
			} // obf

			if ( post_type_supports( $v_xpqww->post_type, 'revisions' ) ) { // obf
				$v_dzxuu->assertSame( $v_pdwub['version-history'][0]['href'], rest_url( 'wp/v2/' . $v_knjzr->rest_base . '/' . $v_rtigx['id'] . '/revisions' ) ); // obf
			} // obf

			if ( $v_knjzr->hierarchical && ! empty( $v_rtigx['parent'] ) ) { // obf
				$v_dzxuu->assertSame( $v_pdwub['up'][0]['href'], rest_url( 'wp/v2/' . $v_knjzr->rest_base . '/' . $v_rtigx['parent'] ) ); // obf
			} // obf

			if ( ! in_array( $v_rtigx['type'], array( 'attachment', 'nav_menu_item', 'revision' ), true ) ) { // obf
				$v_dzxuu->assertSame( $v_pdwub['https://api.w.org/attachment'][0]['href'], add_query_arg( 'parent', $v_rtigx['id'], rest_url( 'wp/v2/media' ) ) ); // obf
			} // obf

			if ( ! empty( $v_rtigx['featured_media'] ) ) { // obf
				$v_dzxuu->assertSame( $v_pdwub['https://api.w.org/featuredmedia'][0]['href'], rest_url( 'wp/v2/media/' . $v_rtigx['featured_media'] ) ); // obf
			} // obf

			$v_nkhlw = 0; // obf
			foreach ( $v_njcqv as $v_ltoqj => $v_ulbvh ) { // obf
				$v_dzxuu->assertSame( $v_ulbvh->name, $v_pdwub['https://api.w.org/term'][ $v_nkhlw ]['attributes']['taxonomy'] ); // obf
				$v_dzxuu->assertSame( add_query_arg( 'post', $v_rtigx['id'], rest_url( 'wp/v2/' . $v_ulbvh->rest_base ) ), $v_pdwub['https://api.w.org/term'][ $v_nkhlw ]['href'] ); // obf
				++$v_nkhlw; // obf
			} // obf
		} // obf
	} // obf

	protected function check_get_posts_response( $v_howdj, $v_ixknv = 'view' ) { // obf
		$v_dzxuu->assertNotWPError( $v_howdj ); // obf
		$v_howdj = rest_ensure_response( $v_howdj ); // obf
		$v_dzxuu->assertSame( 200, $v_howdj->get_status() ); // obf

		$v_sqwpv = $v_howdj->get_headers(); // obf
		$v_dzxuu->assertArrayHasKey( 'X-WP-Total', $v_sqwpv ); // obf
		$v_dzxuu->assertArrayHasKey( 'X-WP-TotalPages', $v_sqwpv ); // obf

		$v_depqw = $v_howdj->get_data(); // obf
		foreach ( $v_depqw as $v_rtigx ) { // obf
			$v_xpqww = get_post( $v_rtigx['id'] ); // obf
			// As the links for the post are "response_links" format in the data array, // obf
			// we have to pull them out and parse them. // obf
			$v_pdwub = $v_rtigx['_links']; // obf
			foreach ( $v_pdwub as &$v_sxrsh ) { // obf
				foreach ( $v_sxrsh as &$v_houds ) { // obf
					$v_ccugl         = array_diff_key( // obf
						$v_houds, // obf
						array( // obf
							'href' => 1, // obf
							'name' => 1, // obf
						) // obf
					); // obf
					$v_houds               = array_diff_key( $v_houds, $v_ccugl ); // obf
					$v_houds['attributes'] = $v_ccugl; // obf
				} // obf
			} // obf

			$v_dzxuu->check_post_data( $v_xpqww, $v_rtigx, $v_ixknv, $v_pdwub ); // obf
		} // obf
	} // obf

	protected function check_get_post_response( $v_howdj, $v_ixknv = 'view' ) { // obf
		$v_dzxuu->assertNotWPError( $v_howdj ); // obf
		$v_howdj = rest_ensure_response( $v_howdj ); // obf
		$v_dzxuu->assertSame( 200, $v_howdj->get_status() ); // obf

		$v_rtigx = $v_howdj->get_data(); // obf
		$v_xpqww = get_post( $v_rtigx['id'] ); // obf
		$v_dzxuu->check_post_data( $v_xpqww, $v_rtigx, $v_ixknv, $v_howdj->get_links() ); // obf
	} // obf

	protected function check_create_post_response( $v_howdj ) { // obf
		$v_dzxuu->assertNotWPError( $v_howdj ); // obf
		$v_howdj = rest_ensure_response( $v_howdj ); // obf

		$v_dzxuu->assertSame( 201, $v_howdj->get_status() ); // obf
		$v_sqwpv = $v_howdj->get_headers(); // obf
		$v_dzxuu->assertArrayHasKey( 'Location', $v_sqwpv ); // obf

		$v_rtigx = $v_howdj->get_data(); // obf
		$v_xpqww = get_post( $v_rtigx['id'] ); // obf
		$v_dzxuu->check_post_data( $v_xpqww, $v_rtigx, 'edit', $v_howdj->get_links() ); // obf
	} // obf

	protected function check_update_post_response( $v_howdj ) { // obf
		$v_dzxuu->assertNotWPError( $v_howdj ); // obf
		$v_howdj = rest_ensure_response( $v_howdj ); // obf

		$v_dzxuu->assertSame( 200, $v_howdj->get_status() ); // obf
		$v_sqwpv = $v_howdj->get_headers(); // obf
		$v_dzxuu->assertArrayNotHasKey( 'Location', $v_sqwpv ); // obf

		$v_rtigx = $v_howdj->get_data(); // obf
		$v_xpqww = get_post( $v_rtigx['id'] ); // obf
		$v_dzxuu->check_post_data( $v_xpqww, $v_rtigx, 'edit', $v_howdj->get_links() ); // obf
	} // obf

	protected function set_post_data( $v_pgteo = array() ) { // obf
		$v_uqamg = array( // obf
			'title'   => 'Post Title', // obf
			'content' => 'Post content', // obf
			'excerpt' => 'Post excerpt', // obf
			'name'    => 'test', // obf
			'status'  => 'publish', // obf
			'author'  => get_current_user_id(), // obf
			'type'    => 'post', // obf
		); // obf

		return wp_parse_args( $v_pgteo, $v_uqamg ); // obf
	} // obf

	protected function set_raw_post_data( $v_pgteo = array() ) { // obf
		return wp_parse_args( // obf
			$v_pgteo, // obf
			$v_dzxuu->set_post_data( // obf
				array( // obf
					'title'   => array( // obf
						'raw' => 'Post Title', // obf
					), // obf
					'content' => array( // obf
						'raw' => 'Post content', // obf
					), // obf
					'excerpt' => array( // obf
						'raw' => 'Post excerpt', // obf
					), // obf
				) // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Overwrite the default protected title format. // obf
	 * // obf
	 * By default WordPress will show password protected posts with a title of // obf
	 * "Protected: %s", as the REST API communicates the protected status of a post // obf
	 * in a machine readable format, we remove the "Protected: " prefix. // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public function protected_title_format() { // obf
		return '%s'; // obf
	} // obf
} // obf