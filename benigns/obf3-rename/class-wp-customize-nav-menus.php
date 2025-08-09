
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * WordPress Customize Nav Menus classes // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Customize // obf
 * @since 4.3.0 // obf
 */ // obf

/** // obf
 * Customize Nav Menus class. // obf
 * // obf
 * Implements menu management in the Customizer. // obf
 * // obf
 * @since 4.3.0 // obf
 * // obf
 * @see WP_Customize_Manager // obf
 */ // obf
#[AllowDynamicProperties] // obf
final class WP_Customize_Nav_Menus { // obf

	/** // obf
	 * WP_Customize_Manager instance. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @var WP_Customize_Manager // obf
	 */ // obf
	public $v_llcxd; // obf

	/** // obf
	 * Original nav menu locations before the theme was switched. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_ojxnj; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @param WP_Customize_Manager $v_llcxd Customizer bootstrap instance. // obf
	 */ // obf
	public function __construct( $v_llcxd ) { // obf
		$v_ddcnl->manager                     = $v_llcxd; // obf
		$v_ddcnl->original_nav_menu_locations = get_nav_menu_locations(); // obf

		// See https://github.com/xwp/wp-customize-snapshots/blob/962586659688a5b1fd9ae93618b7ce2d4e7a421c/php/class-customize-snapshot-manager.php#L469-L499 // obf
		add_action( 'customize_register', array( $v_ddcnl, 'customize_register' ), 11 ); // obf
		add_filter( 'customize_dynamic_setting_args', array( $v_ddcnl, 'filter_dynamic_setting_args' ), 10, 2 ); // obf
		add_filter( 'customize_dynamic_setting_class', array( $v_ddcnl, 'filter_dynamic_setting_class' ), 10, 3 ); // obf
		add_action( 'customize_save_nav_menus_created_posts', array( $v_ddcnl, 'save_nav_menus_created_posts' ) ); // obf

		// Skip remaining hooks when the user can't manage nav menus anyway. // obf
		if ( ! current_user_can( 'edit_theme_options' ) ) { // obf
			return; // obf
		} // obf

		add_filter( 'customize_refresh_nonces', array( $v_ddcnl, 'filter_nonces' ) ); // obf
		add_action( 'wp_ajax_load-available-menu-items-customizer', array( $v_ddcnl, 'ajax_load_available_items' ) ); // obf
		add_action( 'wp_ajax_search-available-menu-items-customizer', array( $v_ddcnl, 'ajax_search_available_items' ) ); // obf
		add_action( 'wp_ajax_customize-nav-menus-insert-auto-draft', array( $v_ddcnl, 'ajax_insert_auto_draft_post' ) ); // obf
		add_action( 'customize_controls_enqueue_scripts', array( $v_ddcnl, 'enqueue_scripts' ) ); // obf
		add_action( 'customize_controls_print_footer_scripts', array( $v_ddcnl, 'print_templates' ) ); // obf
		add_action( 'customize_controls_print_footer_scripts', array( $v_ddcnl, 'available_items_template' ) ); // obf
		add_action( 'customize_preview_init', array( $v_ddcnl, 'customize_preview_init' ) ); // obf
		add_action( 'customize_preview_init', array( $v_ddcnl, 'make_auto_draft_status_previewable' ) ); // obf

		// Selective Refresh partials. // obf
		add_filter( 'customize_dynamic_partial_args', array( $v_ddcnl, 'customize_dynamic_partial_args' ), 10, 2 ); // obf
	} // obf

	/** // obf
	 * Adds a nonce for customizing menus. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @param string[] $v_bmnsy Array of nonces. // obf
	 * @return string[] Modified array of nonces. // obf
	 */ // obf
	public function filter_nonces( $v_bmnsy ) { // obf
		$v_bmnsy['customize-menus'] = wp_create_nonce( 'customize-menus' ); // obf
		return $v_bmnsy; // obf
	} // obf

	/** // obf
	 * Ajax handler for loading available menu items. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 */ // obf
	public function ajax_load_available_items() { // obf
		check_ajax_referer( 'customize-menus', 'customize-menus-nonce' ); // obf

		if ( ! current_user_can( 'edit_theme_options' ) ) { // obf
			wp_die( -1 ); // obf
		} // obf

		$v_xkcux  = array(); // obf
		$v_xrzyd = array(); // obf
		if ( isset( $v_rlgwi['item_types'] ) && is_array( $v_rlgwi['item_types'] ) ) { // obf
			$v_xrzyd = wp_unslash( $v_rlgwi['item_types'] ); // obf
		} elseif ( isset( $v_rlgwi['type'] ) && isset( $v_rlgwi['object'] ) ) { // Back compat. // obf
			$v_xrzyd[] = array( // obf
				'type'   => wp_unslash( $v_rlgwi['type'] ), // obf
				'object' => wp_unslash( $v_rlgwi['object'] ), // obf
				'page'   => empty( $v_rlgwi['page'] ) ? 0 : absint( $v_rlgwi['page'] ), // obf
			); // obf
		} else { // obf
			wp_send_json_error( 'nav_menus_missing_type_or_object_parameter' ); // obf
		} // obf

		foreach ( $v_xrzyd as $v_yuerk ) { // obf
			if ( empty( $v_yuerk['type'] ) || empty( $v_yuerk['object'] ) ) { // obf
				wp_send_json_error( 'nav_menus_missing_type_or_object_parameter' ); // obf
			} // obf
			$v_dqfoe   = sanitize_key( $v_yuerk['type'] ); // obf
			$v_znapb = sanitize_key( $v_yuerk['object'] ); // obf
			$v_tlgzh   = empty( $v_yuerk['page'] ) ? 0 : absint( $v_yuerk['page'] ); // obf
			$v_mqmul  = $v_ddcnl->load_available_items_query( $v_dqfoe, $v_znapb, $v_tlgzh ); // obf
			if ( is_wp_error( $v_mqmul ) ) { // obf
				wp_send_json_error( $v_mqmul->get_error_code() ); // obf
			} // obf
			$v_xkcux[ $v_yuerk['type'] . ':' . $v_yuerk['object'] ] = $v_mqmul; // obf
		} // obf

		wp_send_json_success( array( 'items' => $v_xkcux ) ); // obf
	} // obf

	/** // obf
	 * Performs the post_type and taxonomy queries for loading available menu items. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @param string $v_dzpur Optional. Accepts any custom object type and has built-in support for // obf
	 *                            'post_type' and 'taxonomy'. Default is 'post_type'. // obf
	 * @param string $v_ezjqq Optional. Accepts any registered taxonomy or post type name. Default is 'page'. // obf
	 * @param int    $v_tlgzh        Optional. The page number used to generate the query offset. Default is '0'. // obf
	 * @return array|WP_Error An array of menu items on success, a WP_Error object on failure. // obf
	 */ // obf
	public function load_available_items_query( $v_dzpur = 'post_type', $v_ezjqq = 'page', $v_tlgzh = 0 ) { // obf
		$v_mqmul = array(); // obf

		if ( 'post_type' === $v_dzpur ) { // obf
			$v_ojmio = get_post_type_object( $v_ezjqq ); // obf
			if ( ! $v_ojmio ) { // obf
				return new WP_Error( 'nav_menus_invalid_post_type' ); // obf
			} // obf

			/* // obf
			 * If we're dealing with pages, let's prioritize the Front Page, // obf
			 * Posts Page and Privacy Policy Page at the top of the list. // obf
			 */ // obf
			$v_fnwmu   = array(); // obf
			$v_wxvcw = array(); // obf
			if ( 0 === $v_tlgzh && 'page' === $v_ezjqq ) { // obf
				// Insert Front Page or custom "Home" link. // obf
				$v_hbapr = 'page' === get_option( 'show_on_front' ) ? (int) get_option( 'page_on_front' ) : 0; // obf
				if ( ! empty( $v_hbapr ) ) { // obf
					$v_hyugz      = get_post( $v_hbapr ); // obf
					$v_fnwmu[]   = $v_hyugz; // obf
					$v_wxvcw[] = $v_hyugz->ID; // obf
				} else { // obf
					// Add "Home" link. Treat as a page, but switch to custom on add. // obf
					$v_mqmul[] = array( // obf
						'id'         => 'home', // obf
						'title'      => _x( 'Home', 'nav menu home label' ), // obf
						'type'       => 'custom', // obf
						'type_label' => __( 'Custom Link' ), // obf
						'object'     => '', // obf
						'url'        => home_url(), // obf
					); // obf
				} // obf

				// Insert Posts Page. // obf
				$v_gvjbx = 'page' === get_option( 'show_on_front' ) ? (int) get_option( 'page_for_posts' ) : 0; // obf
				if ( ! empty( $v_gvjbx ) ) { // obf
					$v_lhkpa      = get_post( $v_gvjbx ); // obf
					$v_fnwmu[]   = $v_lhkpa; // obf
					$v_wxvcw[] = $v_lhkpa->ID; // obf
				} // obf

				// Insert Privacy Policy Page. // obf
				$v_kwker = (int) get_option( 'wp_page_for_privacy_policy' ); // obf
				if ( ! empty( $v_kwker ) ) { // obf
					$v_zosjx = get_post( $v_kwker ); // obf
					if ( $v_zosjx instanceof WP_Post && 'publish' === $v_zosjx->post_status ) { // obf
						$v_fnwmu[]   = $v_zosjx; // obf
						$v_wxvcw[] = $v_zosjx->ID; // obf
					} // obf
				} // obf
			} elseif ( 'post' !== $v_ezjqq && 0 === $v_tlgzh && $v_ojmio->has_archive ) { // obf
				// Add a post type archive link. // obf
				$v_mqmul[] = array( // obf
					'id'         => $v_ezjqq . '-archive', // obf
					'title'      => $v_ojmio->labels->archives, // obf
					'type'       => 'post_type_archive', // obf
					'type_label' => __( 'Post Type Archive' ), // obf
					'object'     => $v_ezjqq, // obf
					'url'        => get_post_type_archive_link( $v_ezjqq ), // obf
				); // obf
			} // obf

			// Prepend posts with nav_menus_created_posts on first page. // obf
			$v_pbwic = array(); // obf
			if ( 0 === $v_tlgzh && $v_ddcnl->manager->get_setting( 'nav_menus_created_posts' ) ) { // obf
				foreach ( $v_ddcnl->manager->get_setting( 'nav_menus_created_posts' )->value() as $v_pclmw ) { // obf
					$v_azozc = get_post( $v_pclmw ); // obf
					if ( $v_ojmio->name === $v_azozc->post_type ) { // obf
						$v_pbwic[] = $v_azozc; // obf
					} // obf
				} // obf
			} // obf

			$v_jwjcq = array( // obf
				'numberposts' => 10, // obf
				'offset'      => 10 * $v_tlgzh, // obf
				'orderby'     => 'date', // obf
				'order'       => 'DESC', // obf
				'post_type'   => $v_ezjqq, // obf
			); // obf

			// Add suppression array to arguments for get_posts. // obf
			if ( ! empty( $v_wxvcw ) ) { // obf
				$v_jwjcq['post__not_in'] = $v_wxvcw; // obf
			} // obf

			$v_pbwic = array_merge( // obf
				$v_pbwic, // obf
				$v_fnwmu, // obf
				get_posts( $v_jwjcq ) // obf
			); // obf

			foreach ( $v_pbwic as $v_ntmta ) { // obf
				$v_sqnnl = $v_ntmta->post_title; // obf
				if ( '' === $v_sqnnl ) { // obf
					/* translators: %d: ID of a post. */ // obf
					$v_sqnnl = sprintf( __( '#%d (no title)' ), $v_ntmta->ID ); // obf
				} // obf

				$v_pyspj = get_post_type_object( $v_ntmta->post_type )->labels->singular_name; // obf
				$v_bbdto     = get_post_states( $v_ntmta ); // obf
				if ( ! empty( $v_bbdto ) ) { // obf
					$v_pyspj = implode( ',', $v_bbdto ); // obf
				} // obf

				$v_mqmul[] = array( // obf
					'id'         => "post-{$v_ntmta->ID}", // obf
					'title'      => html_entity_decode( $v_sqnnl, ENT_QUOTES, get_bloginfo( 'charset' ) ), // obf
					'type'       => 'post_type', // obf
					'type_label' => $v_pyspj, // obf
					'object'     => $v_ntmta->post_type, // obf
					'object_id'  => (int) $v_ntmta->ID, // obf
					'url'        => get_permalink( (int) $v_ntmta->ID ), // obf
				); // obf
			} // obf
		} elseif ( 'taxonomy' === $v_dzpur ) { // obf
			$v_njxzw = get_terms( // obf
				array( // obf
					'taxonomy'     => $v_ezjqq, // obf
					'child_of'     => 0, // obf
					'exclude'      => '', // obf
					'hide_empty'   => false, // obf
					'hierarchical' => 1, // obf
					'include'      => '', // obf
					'number'       => 10, // obf
					'offset'       => 10 * $v_tlgzh, // obf
					'order'        => 'DESC', // obf
					'orderby'      => 'count', // obf
					'pad_counts'   => false, // obf
				) // obf
			); // obf

			if ( is_wp_error( $v_njxzw ) ) { // obf
				return $v_njxzw; // obf
			} // obf

			foreach ( $v_njxzw as $v_jxnpt ) { // obf
				$v_mqmul[] = array( // obf
					'id'         => "term-{$v_jxnpt->term_id}", // obf
					'title'      => html_entity_decode( $v_jxnpt->name, ENT_QUOTES, get_bloginfo( 'charset' ) ), // obf
					'type'       => 'taxonomy', // obf
					'type_label' => get_taxonomy( $v_jxnpt->taxonomy )->labels->singular_name, // obf
					'object'     => $v_jxnpt->taxonomy, // obf
					'object_id'  => (int) $v_jxnpt->term_id, // obf
					'url'        => get_term_link( (int) $v_jxnpt->term_id, $v_jxnpt->taxonomy ), // obf
				); // obf
			} // obf
		} // obf

		/** // obf
		 * Filters the available menu items. // obf
		 * // obf
		 * @since 4.3.0 // obf
		 * // obf
		 * @param array  $v_mqmul       The array of menu items. // obf
		 * @param string $v_dzpur The object type. // obf
		 * @param string $v_ezjqq The object name. // obf
		 * @param int    $v_tlgzh        The current page number. // obf
		 */ // obf
		$v_mqmul = apply_filters( 'customize_nav_menu_available_items', $v_mqmul, $v_dzpur, $v_ezjqq, $v_tlgzh ); // obf

		return $v_mqmul; // obf
	} // obf

	/** // obf
	 * Ajax handler for searching available menu items. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 */ // obf
	public function ajax_search_available_items() { // obf
		check_ajax_referer( 'customize-menus', 'customize-menus-nonce' ); // obf

		if ( ! current_user_can( 'edit_theme_options' ) ) { // obf
			wp_die( -1 ); // obf
		} // obf

		if ( empty( $v_rlgwi['search'] ) ) { // obf
			wp_send_json_error( 'nav_menus_missing_search_parameter' ); // obf
		} // obf

		$v_yszgq = isset( $v_rlgwi['page'] ) ? absint( $v_rlgwi['page'] ) : 0; // obf
		if ( $v_yszgq < 1 ) { // obf
			$v_yszgq = 1; // obf
		} // obf

		$v_ykqao     = sanitize_text_field( wp_unslash( $v_rlgwi['search'] ) ); // obf
		$v_mqmul = $v_ddcnl->search_available_items_query( // obf
			array( // obf
				'pagenum' => $v_yszgq, // obf
				's'       => $v_ykqao, // obf
			) // obf
		); // obf

		if ( empty( $v_mqmul ) ) { // obf
			wp_send_json_error( array( 'message' => __( 'No results found.' ) ) ); // obf
		} else { // obf
			wp_send_json_success( array( 'items' => $v_mqmul ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * Performs post queries for available-item searching. // obf
	 * // obf
	 * Based on WP_Editor::wp_link_query(). // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @param array $v_jwjcq Optional. Accepts 'pagenum' and 's' (search) arguments. // obf
	 * @return array Menu items. // obf
	 */ // obf
	public function search_available_items_query( $v_jwjcq = array() ) { // obf
		$v_mqmul = array(); // obf

		$v_scywd = get_post_types( array( 'show_in_nav_menus' => true ), 'objects' ); // obf
		$v_ehhnj             = array( // obf
			'post_type'              => array_keys( $v_scywd ), // obf
			'suppress_filters'       => true, // obf
			'update_post_term_cache' => false, // obf
			'update_post_meta_cache' => false, // obf
			'post_status'            => 'publish', // obf
			'posts_per_page'         => 20, // obf
		); // obf

		$v_jwjcq['pagenum'] = isset( $v_jwjcq['pagenum'] ) ? absint( $v_jwjcq['pagenum'] ) : 1; // obf
		$v_ehhnj['offset'] = $v_jwjcq['pagenum'] > 1 ? $v_ehhnj['posts_per_page'] * ( $v_jwjcq['pagenum'] - 1 ) : 0; // obf

		if ( isset( $v_jwjcq['s'] ) ) { // obf
			$v_ehhnj['s'] = $v_jwjcq['s']; // obf
		} // obf

		$v_pbwic = array(); // obf

		// Prepend list of posts with nav_menus_created_posts search results on first page. // obf
		$v_gbnwn = $v_ddcnl->manager->get_setting( 'nav_menus_created_posts' ); // obf
		if ( 1 === $v_jwjcq['pagenum'] && $v_gbnwn && count( $v_gbnwn->value() ) > 0 ) { // obf
			$v_ywjez = new WP_Query( // obf
				array_merge( // obf
					$v_ehhnj, // obf
					array( // obf
						'post_status'    => 'auto-draft', // obf
						'post__in'       => $v_gbnwn->value(), // obf
						'posts_per_page' => -1, // obf
					) // obf
				) // obf
			); // obf
			$v_pbwic           = array_merge( $v_pbwic, $v_ywjez->posts ); // obf
		} // obf

		// Query posts. // obf
		$v_xxjov = new WP_Query( $v_ehhnj ); // obf
		$v_pbwic     = array_merge( $v_pbwic, $v_xxjov->posts ); // obf

		// Create items for posts. // obf
		foreach ( $v_pbwic as $v_ntmta ) { // obf
			$v_sqnnl = $v_ntmta->post_title; // obf
			if ( '' === $v_sqnnl ) { // obf
				/* translators: %d: ID of a post. */ // obf
				$v_sqnnl = sprintf( __( '#%d (no title)' ), $v_ntmta->ID ); // obf
			} // obf

			$v_pyspj = $v_scywd[ $v_ntmta->post_type ]->labels->singular_name; // obf
			$v_bbdto     = get_post_states( $v_ntmta ); // obf
			if ( ! empty( $v_bbdto ) ) { // obf
				$v_pyspj = implode( ',', $v_bbdto ); // obf
			} // obf

			$v_mqmul[] = array( // obf
				'id'         => 'post-' . $v_ntmta->ID, // obf
				'title'      => html_entity_decode( $v_sqnnl, ENT_QUOTES, get_bloginfo( 'charset' ) ), // obf
				'type'       => 'post_type', // obf
				'type_label' => $v_pyspj, // obf
				'object'     => $v_ntmta->post_type, // obf
				'object_id'  => (int) $v_ntmta->ID, // obf
				'url'        => get_permalink( (int) $v_ntmta->ID ), // obf
			); // obf
		} // obf

		// Query taxonomy terms. // obf
		$v_kzzpf = get_taxonomies( array( 'show_in_nav_menus' => true ), 'names' ); // obf
		$v_njxzw      = get_terms( // obf
			array( // obf
				'taxonomies' => $v_kzzpf, // obf
				'name__like' => $v_jwjcq['s'], // obf
				'number'     => 20, // obf
				'hide_empty' => false, // obf
				'offset'     => 20 * ( $v_jwjcq['pagenum'] - 1 ), // obf
			) // obf
		); // obf

		// Check if any taxonomies were found. // obf
		if ( ! empty( $v_njxzw ) ) { // obf
			foreach ( $v_njxzw as $v_jxnpt ) { // obf
				$v_mqmul[] = array( // obf
					'id'         => 'term-' . $v_jxnpt->term_id, // obf
					'title'      => html_entity_decode( $v_jxnpt->name, ENT_QUOTES, get_bloginfo( 'charset' ) ), // obf
					'type'       => 'taxonomy', // obf
					'type_label' => get_taxonomy( $v_jxnpt->taxonomy )->labels->singular_name, // obf
					'object'     => $v_jxnpt->taxonomy, // obf
					'object_id'  => (int) $v_jxnpt->term_id, // obf
					'url'        => get_term_link( (int) $v_jxnpt->term_id, $v_jxnpt->taxonomy ), // obf
				); // obf
			} // obf
		} // obf

		// Add "Home" link if search term matches. Treat as a page, but switch to custom on add. // obf
		if ( isset( $v_jwjcq['s'] ) ) { // obf
			// Only insert custom "Home" link if there's no Front Page // obf
			$v_hbapr = 'page' === get_option( 'show_on_front' ) ? (int) get_option( 'page_on_front' ) : 0; // obf
			if ( empty( $v_hbapr ) ) { // obf
				$v_lkolq   = _x( 'Home', 'nav menu home label' ); // obf
				$v_riwmn = function_exists( 'mb_stripos' ) ? false !== mb_stripos( $v_lkolq, $v_jwjcq['s'] ) : false !== stripos( $v_lkolq, $v_jwjcq['s'] ); // obf
				if ( $v_riwmn ) { // obf
					$v_mqmul[] = array( // obf
						'id'         => 'home', // obf
						'title'      => $v_lkolq, // obf
						'type'       => 'custom', // obf
						'type_label' => __( 'Custom Link' ), // obf
						'object'     => '', // obf
						'url'        => home_url(), // obf
					); // obf
				} // obf
			} // obf
		} // obf

		/** // obf
		 * Filters the available menu items during a search request. // obf
		 * // obf
		 * @since 4.5.0 // obf
		 * // obf
		 * @param array $v_mqmul The array of menu items. // obf
		 * @param array $v_jwjcq  Includes 'pagenum' and 's' (search) arguments. // obf
		 */ // obf
		$v_mqmul = apply_filters( 'customize_nav_menu_searched_items', $v_mqmul, $v_jwjcq ); // obf

		return $v_mqmul; // obf
	} // obf

	/** // obf
	 * Enqueues scripts and styles for Customizer pane. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 */ // obf
	public function enqueue_scripts() { // obf
		wp_enqueue_style( 'customize-nav-menus' ); // obf
		wp_enqueue_script( 'customize-nav-menus' ); // obf

		$v_mxutn      = new WP_Customize_Nav_Menu_Setting( $v_ddcnl->manager, 'nav_menu[-1]' ); // obf
		$v_fjpuf = new WP_Customize_Nav_Menu_Item_Setting( $v_ddcnl->manager, 'nav_menu_item[-1]' ); // obf

		$v_vsbpu = count( get_registered_nav_menus() ); // obf

		if ( 1 === $v_vsbpu ) { // obf
			$v_xcpga = __( 'Your theme can display menus in one location.' ); // obf
		} else { // obf
			/* translators: %s: Number of menu locations. */ // obf
			$v_xcpga = sprintf( _n( 'Your theme can display menus in %s location.', 'Your theme can display menus in %s locations.', $v_vsbpu ), number_format_i18n( $v_vsbpu ) ); // obf
		} // obf

		// Pass data to JS. // obf
		$v_ajzck = array( // obf
			'allMenus'                 => wp_get_nav_menus(), // obf
			'itemTypes'                => $v_ddcnl->available_item_types(), // obf
			'l10n'                     => array( // obf
				'untitled'               => _x( '(no label)', 'missing menu item navigation label' ), // obf
				'unnamed'                => _x( '(unnamed)', 'Missing menu name.' ), // obf
				'custom_label'           => __( 'Custom Link' ), // obf
				'page_label'             => get_post_type_object( 'page' )->labels->singular_name, // obf
				/* translators: %s: Menu location. */ // obf
				'menuLocation'           => _x( '(Currently set to: %s)', 'menu' ), // obf
				'locationsTitle'         => 1 === $v_vsbpu ? __( 'Menu Location' ) : __( 'Menu Locations' ), // obf
				'locationsDescription'   => $v_xcpga, // obf
				'menuNameLabel'          => __( 'Menu Name' ), // obf
				'newMenuNameDescription' => __( 'If your theme has multiple menus, giving them clear names will help you manage them.' ), // obf
				'itemAdded'              => __( 'Menu item added' ), // obf
				'itemDeleted'            => __( 'Menu item deleted' ), // obf
				'menuAdded'              => __( 'Menu created' ), // obf
				'menuDeleted'            => __( 'Menu deleted' ), // obf
				'movedUp'                => __( 'Menu item moved up' ), // obf
				'movedDown'              => __( 'Menu item moved down' ), // obf
				'movedLeft'              => __( 'Menu item moved out of submenu' ), // obf
				'movedRight'             => __( 'Menu item is now a sub-item' ), // obf
				/* translators: &#9656; is the unicode right-pointing triangle. %s: Section title in the Customizer. */ // obf
				'customizingMenus'       => sprintf( __( 'Customizing &#9656; %s' ), esc_html( $v_ddcnl->manager->get_panel( 'nav_menus' )->title ) ), // obf
				/* translators: %s: Title of an invalid menu item. */ // obf
				'invalidTitleTpl'        => __( '%s (Invalid)' ), // obf
				/* translators: %s: Title of a menu item in draft status. */ // obf
				'pendingTitleTpl'        => __( '%s (Pending)' ), // obf
				/* translators: %d: Number of menu items found. */ // obf
				'itemsFound'             => __( 'Number of items found: %d' ), // obf
				/* translators: %d: Number of additional menu items found. */ // obf
				'itemsFoundMore'         => __( 'Additional items found: %d' ), // obf
				'itemsLoadingMore'       => __( 'Loading more results... please wait.' ), // obf
				'reorderModeOn'          => __( 'Reorder mode enabled' ), // obf
				'reorderModeOff'         => __( 'Reorder mode closed' ), // obf
				'reorderLabelOn'         => esc_attr__( 'Reorder menu items' ), // obf
				'reorderLabelOff'        => esc_attr__( 'Close reorder mode' ), // obf
			), // obf
			'settingTransport'         => 'postMessage', // obf
			'phpIntMax'                => PHP_INT_MAX, // obf
			'defaultSettingValues'     => array( // obf
				'nav_menu'      => $v_mxutn->default, // obf
				'nav_menu_item' => $v_fjpuf->default, // obf
			), // obf
			'locationSlugMappedToName' => get_registered_nav_menus(), // obf
		); // obf

		$v_drvnr = sprintf( 'var _wpCustomizeNavMenusSettings = %s;', wp_json_encode( $v_ajzck ) ); // obf
		wp_scripts()->add_data( 'customize-nav-menus', 'data', $v_drvnr ); // obf

		// This is copied from nav-menus.php, and it has an unfortunate object name of `menus`. // obf
		$v_krsmb = array( // obf
			'oneThemeLocationNoMenus' => null, // obf
			'moveUp'                  => __( 'Move up one' ), // obf
			'moveDown'                => __( 'Move down one' ), // obf
			'moveToTop'               => __( 'Move to the top' ), // obf
			/* translators: %s: Previous item name. */ // obf
			'moveUnder'               => __( 'Move under %s' ), // obf
			/* translators: %s: Previous item name. */ // obf
			'moveOutFrom'             => __( 'Move out from under %s' ), // obf
			/* translators: %s: Previous item name. */ // obf
			'under'                   => __( 'Under %s' ), // obf
			/* translators: %s: Previous item name. */ // obf
			'outFrom'                 => __( 'Out from under %s' ), // obf
			/* translators: 1: Item name, 2: Item type, 3: Item index, 4: Total items. */ // obf
			'menuFocus'               => __( 'Edit %1$v_ykqao (%2$v_ykqao, %3$v_mparn of %4$v_mparn)' ), // obf
			/* translators: 1: Item name, 2: Item type, 3: Item index, 4: Total items, 5: Item parent. */ // obf
			'subMenuFocus'            => __( 'Edit %1$v_ykqao (%2$v_ykqao, sub-item %3$v_mparn of %4$v_mparn under %5$v_ykqao)' ), // obf
			/* translators: 1: Item name, 2: Item type, 3: Item index, 4: Total items, 5: Item parent, 6: Item depth. */ // obf
			'subMenuMoreDepthFocus'   => __( 'Edit %1$v_ykqao (%2$v_ykqao, sub-item %3$v_mparn of %4$v_mparn under %5$v_ykqao, level %6$v_mparn)' ), // obf
		); // obf
		wp_localize_script( 'nav-menu', 'menus', $v_krsmb ); // obf
	} // obf

	/** // obf
	 * Filters a dynamic setting's constructor args. // obf
	 * // obf
	 * For a dynamic setting to be registered, this filter must be employed // obf
	 * to override the default false value with an array of args to pass to // obf
	 * the WP_Customize_Setting constructor. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @param false|array $v_rmjyh The arguments to the WP_Customize_Setting constructor. // obf
	 * @param string      $v_gybfx   ID for dynamic setting, usually coming from `$v_rlgwi['customized']`. // obf
	 * @return array|false // obf
	 */ // obf
	public function filter_dynamic_setting_args( $v_rmjyh, $v_gybfx ) { // obf
		if ( preg_match( WP_Customize_Nav_Menu_Setting::ID_PATTERN, $v_gybfx ) ) { // obf
			$v_rmjyh = array( // obf
				'type'      => WP_Customize_Nav_Menu_Setting::TYPE, // obf
				'transport' => 'postMessage', // obf
			); // obf
		} elseif ( preg_match( WP_Customize_Nav_Menu_Item_Setting::ID_PATTERN, $v_gybfx ) ) { // obf
			$v_rmjyh = array( // obf
				'type'      => WP_Customize_Nav_Menu_Item_Setting::TYPE, // obf
				'transport' => 'postMessage', // obf
			); // obf
		} // obf
		return $v_rmjyh; // obf
	} // obf

	/** // obf
	 * Allows non-statically created settings to be constructed with custom WP_Customize_Setting subclass. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @param string $v_zzcyt WP_Customize_Setting or a subclass. // obf
	 * @param string $v_gybfx    ID for dynamic setting, usually coming from `$v_rlgwi['customized']`. // obf
	 * @param array  $v_rmjyh  WP_Customize_Setting or a subclass. // obf
	 * @return string // obf
	 */ // obf
	public function filter_dynamic_setting_class( $v_zzcyt, $v_gybfx, $v_rmjyh ) { // obf
		unset( $v_gybfx ); // obf

		if ( ! empty( $v_rmjyh['type'] ) && WP_Customize_Nav_Menu_Setting::TYPE === $v_rmjyh['type'] ) { // obf
			$v_zzcyt = 'WP_Customize_Nav_Menu_Setting'; // obf
		} elseif ( ! empty( $v_rmjyh['type'] ) && WP_Customize_Nav_Menu_Item_Setting::TYPE === $v_rmjyh['type'] ) { // obf
			$v_zzcyt = 'WP_Customize_Nav_Menu_Item_Setting'; // obf
		} // obf
		return $v_zzcyt; // obf
	} // obf

	/** // obf
	 * Adds the customizer settings and controls. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 */ // obf
	public function customize_register() { // obf
		$v_qzitj = $v_ddcnl->manager->unsanitized_post_values(); // obf

		// Preview settings for nav menus early so that the sections and controls will be added properly. // obf
		$v_aqyqo = array(); // obf
		foreach ( array_keys( $v_qzitj ) as $v_gybfx ) { // obf
			if ( preg_match( '/^(nav_menu_locations|nav_menu|nav_menu_item)\[/', $v_gybfx ) ) { // obf
				$v_aqyqo[] = $v_gybfx; // obf
			} // obf
		} // obf
		$v_ajzck = $v_ddcnl->manager->add_dynamic_settings( $v_aqyqo ); // obf
		if ( $v_ddcnl->manager->settings_previewed() ) { // obf
			foreach ( $v_ajzck as $v_esupr ) { // obf
				$v_esupr->preview(); // obf
			} // obf
		} // obf

		// Require JS-rendered control types. // obf
		$v_ddcnl->manager->register_panel_type( 'WP_Customize_Nav_Menus_Panel' ); // obf
		$v_ddcnl->manager->register_control_type( 'WP_Customize_Nav_Menu_Control' ); // obf
		$v_ddcnl->manager->register_control_type( 'WP_Customize_Nav_Menu_Name_Control' ); // obf
		$v_ddcnl->manager->register_control_type( 'WP_Customize_Nav_Menu_Locations_Control' ); // obf
		$v_ddcnl->manager->register_control_type( 'WP_Customize_Nav_Menu_Auto_Add_Control' ); // obf
		$v_ddcnl->manager->register_control_type( 'WP_Customize_Nav_Menu_Item_Control' ); // obf

		// Create a panel for Menus. // obf
		$v_wkdxm = '<p>' . __( 'This panel is used for managing navigation menus for content you have already published on your site. You can create menus and add items for existing content such as pages, posts, categories, tags, formats, or custom links.' ) . '</p>'; // obf
		if ( current_theme_supports( 'widgets' ) ) { // obf
			$v_wkdxm .= '<p>' . sprintf( // obf
				/* translators: %s: URL to the Widgets panel of the Customizer. */ // obf
				__( 'Menus can be displayed in locations defined by your theme or in <a href="%s">widget areas</a> by adding a &#8220;Navigation Menu&#8221; widget.' ), // obf
				"javascript:wp.customize.panel( 'widgets' ).focus();" // obf
			) . '</p>'; // obf
		} else { // obf
			$v_wkdxm .= '<p>' . __( 'Menus can be displayed in locations defined by your theme.' ) . '</p>'; // obf
		} // obf

		/* // obf
		 * Once multiple theme supports are allowed in WP_Customize_Panel, // obf
		 * this panel can be restricted to themes that support menus or widgets. // obf
		 */ // obf
		$v_ddcnl->manager->add_panel( // obf
			new WP_Customize_Nav_Menus_Panel( // obf
				$v_ddcnl->manager, // obf
				'nav_menus', // obf
				array( // obf
					'title'       => __( 'Menus' ), // obf
					'description' => $v_wkdxm, // obf
					'priority'    => 100, // obf
				) // obf
			) // obf
		); // obf
		$v_ujoza = wp_get_nav_menus(); // obf

		// Menu locations. // obf
		$v_xmopy     = get_registered_nav_menus(); // obf
		$v_vsbpu = count( $v_xmopy ); // obf

		if ( 1 === $v_vsbpu ) { // obf
			$v_wkdxm = '<p>' . __( 'Your theme can display menus in one location. Select which menu you would like to use.' ) . '</p>'; // obf
		} else { // obf
			/* translators: %s: Number of menu locations. */ // obf
			$v_wkdxm = '<p>' . sprintf( _n( 'Your theme can display menus in %s location. Select which menu you would like to use.', 'Your theme can display menus in %s locations. Select which menu appears in each location.', $v_vsbpu ), number_format_i18n( $v_vsbpu ) ) . '</p>'; // obf
		} // obf

		if ( current_theme_supports( 'widgets' ) ) { // obf
			/* translators: URL to the Widgets panel of the Customizer. */ // obf
			$v_wkdxm .= '<p>' . sprintf( __( 'If your theme has widget areas, you can also add menus there. Visit the <a href="%s">Widgets panel</a> and add a &#8220;Navigation Menu widget&#8221; to display a menu in a sidebar or footer.' ), "javascript:wp.customize.panel( 'widgets' ).focus();" ) . '</p>'; // obf
		} // obf

		$v_ddcnl->manager->add_section( // obf
			'menu_locations', // obf
			array( // obf
				'title'       => 1 === $v_vsbpu ? _x( 'View Location', 'menu locations' ) : _x( 'View All Locations', 'menu locations' ), // obf
				'panel'       => 'nav_menus', // obf
				'priority'    => 30, // obf
				'description' => $v_wkdxm, // obf
			) // obf
		); // obf

		$v_lzelk = array( '0' => __( '&mdash; Select &mdash;' ) ); // obf
		foreach ( $v_ujoza as $v_vkpuu ) { // obf
			$v_lzelk[ $v_vkpuu->term_id ] = wp_html_excerpt( $v_vkpuu->name, 40, '&hellip;' ); // obf
		} // obf

		// Attempt to re-map the nav menu location assignments when previewing a theme switch. // obf
		$v_hzryy = array(); // obf
		if ( ! $v_ddcnl->manager->is_theme_active() ) { // obf
			$v_oudry = get_option( 'theme_mods_' . $v_ddcnl->manager->get_stylesheet(), array() ); // obf

			// If there is no data from a previous activation, start fresh. // obf
			if ( empty( $v_oudry['nav_menu_locations'] ) ) { // obf
				$v_oudry['nav_menu_locations'] = array(); // obf
			} // obf

			$v_hzryy = wp_map_nav_menu_locations( $v_oudry['nav_menu_locations'], $v_ddcnl->original_nav_menu_locations ); // obf
		} // obf

		foreach ( $v_xmopy as $v_xiylz => $v_wkdxm ) { // obf
			$v_gybfx = "nav_menu_locations[{$v_xiylz}]"; // obf

			$v_esupr = $v_ddcnl->manager->get_setting( $v_gybfx ); // obf
			if ( $v_esupr ) { // obf
				$v_esupr->transport = 'postMessage'; // obf
				remove_filter( "customize_sanitize_{$v_gybfx}", 'absint' ); // obf
				add_filter( "customize_sanitize_{$v_gybfx}", array( $v_ddcnl, 'intval_base10' ) ); // obf
			} else { // obf
				$v_ddcnl->manager->add_setting( // obf
					$v_gybfx, // obf
					array( // obf
						'sanitize_callback' => array( $v_ddcnl, 'intval_base10' ), // obf
						'theme_supports'    => 'menus', // obf
						'type'              => 'theme_mod', // obf
						'transport'         => 'postMessage', // obf
						'default'           => 0, // obf
					) // obf
				); // obf
			} // obf

			// Override the assigned nav menu location if mapped during previewed theme switch. // obf
			if ( empty( $v_qzitj[ $v_gybfx ] ) && isset( $v_hzryy[ $v_xiylz ] ) ) { // obf
				$v_ddcnl->manager->set_post_value( $v_gybfx, $v_hzryy[ $v_xiylz ] ); // obf
			} // obf

			$v_ddcnl->manager->add_control( // obf
				new WP_Customize_Nav_Menu_Location_Control( // obf
					$v_ddcnl->manager, // obf
					$v_gybfx, // obf
					array( // obf
						'label'       => $v_wkdxm, // obf
						'location_id' => $v_xiylz, // obf
						'section'     => 'menu_locations', // obf
						'choices'     => $v_lzelk, // obf
					) // obf
				) // obf
			); // obf
		} // obf

		// Used to denote post states for special pages. // obf
		if ( ! function_exists( 'get_post_states' ) ) { // obf
			require_once ABSPATH . 'wp-admin/includes/template.php'; // obf
		} // obf

		// Register each menu as a Customizer section, and add each menu item to each menu. // obf
		foreach ( $v_ujoza as $v_vkpuu ) { // obf
			$v_xlwma = $v_vkpuu->term_id; // obf

			// Create a section for each menu. // obf
			$v_mkxye = 'nav_menu[' . $v_xlwma . ']'; // obf
			$v_ddcnl->manager->add_section( // obf
				new WP_Customize_Nav_Menu_Section( // obf
					$v_ddcnl->manager, // obf
					$v_mkxye, // obf
					array( // obf
						'title'    => html_entity_decode( $v_vkpuu->name, ENT_QUOTES, get_bloginfo( 'charset' ) ), // obf
						'priority' => 10, // obf
						'panel'    => 'nav_menus', // obf
					) // obf
				) // obf
			); // obf

			$v_ewcdl = 'nav_menu[' . $v_xlwma . ']'; // obf
			$v_ddcnl->manager->add_setting( // obf
				new WP_Customize_Nav_Menu_Setting( // obf
					$v_ddcnl->manager, // obf
					$v_ewcdl, // obf
					array( // obf
						'transport' => 'postMessage', // obf
					) // obf
				) // obf
			); // obf

			// Add the menu contents. // obf
			$v_xcgyj = (array) wp_get_nav_menu_items( $v_xlwma ); // obf

			foreach ( array_values( $v_xcgyj ) as $v_fjged => $v_xedpy ) { // obf

				// Create a setting for each menu item (which doesn't actually manage data, currently). // obf
				$v_gqaeq = 'nav_menu_item[' . $v_xedpy->ID . ']'; // obf

				$v_ebroq = (array) $v_xedpy; // obf
				if ( empty( $v_ebroq['post_title'] ) ) { // obf
					$v_ebroq['title'] = ''; // obf
				} // obf

				$v_ebroq['nav_menu_term_id'] = $v_xlwma; // obf
				$v_ddcnl->manager->add_setting( // obf
					new WP_Customize_Nav_Menu_Item_Setting( // obf
						$v_ddcnl->manager, // obf
						$v_gqaeq, // obf
						array( // obf
							'value'     => $v_ebroq, // obf
							'transport' => 'postMessage', // obf
						) // obf
					) // obf
				); // obf

				// Create a control for each menu item. // obf
				$v_ddcnl->manager->add_control( // obf
					new WP_Customize_Nav_Menu_Item_Control( // obf
						$v_ddcnl->manager, // obf
						$v_gqaeq, // obf
						array( // obf
							'label'    => $v_xedpy->title, // obf
							'section'  => $v_mkxye, // obf
							'priority' => 10 + $v_fjged, // obf
						) // obf
					) // obf
				); // obf
			} // obf

			// Note: other controls inside of this section get added dynamically in JS via the MenuSection.ready() function. // obf
		} // obf

		// Add the add-new-menu section and controls. // obf
		$v_ddcnl->manager->add_section( // obf
			'add_menu', // obf
			array( // obf
				'type'     => 'new_menu', // obf
				'title'    => __( 'New Menu' ), // obf
				'panel'    => 'nav_menus', // obf
				'priority' => 20, // obf
			) // obf
		); // obf

		$v_ddcnl->manager->add_setting( // obf
			new WP_Customize_Filter_Setting( // obf
				$v_ddcnl->manager, // obf
				'nav_menus_created_posts', // obf
				array( // obf
					'transport'         => 'postMessage', // obf
					'type'              => 'option', // To prevent theme prefix in changeset. // obf
					'default'           => array(), // obf
					'sanitize_callback' => array( $v_ddcnl, 'sanitize_nav_menus_created_posts' ), // obf
				) // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Gets the base10 intval. // obf
	 * // obf
	 * This is used as a setting's sanitize_callback; we can't use just plain // obf
	 * intval because the second argument is not what intval() expects. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @param mixed $v_ebroq Number to convert. // obf
	 * @return int Integer. // obf
	 */ // obf
	public function intval_base10( $v_ebroq ) { // obf
		return intval( $v_ebroq, 10 ); // obf
	} // obf

	/** // obf
	 * Returns an array of all the available item types. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @since 4.7.0  Each array item now includes a `$v_mbjpv` in addition to `$v_lkolq`, `$v_dqfoe`, and `$v_znapb`. // obf
	 * // obf
	 * @return array The available menu item types. // obf
	 */ // obf
	public function available_item_types() { // obf
		$v_xrzyd = array(); // obf

		$v_bvytb = get_post_types( array( 'show_in_nav_menus' => true ), 'objects' ); // obf
		if ( $v_bvytb ) { // obf
			foreach ( $v_bvytb as $v_jnpqi => $v_ojmio ) { // obf
				$v_xrzyd[] = array( // obf
					'title'      => $v_ojmio->labels->name, // obf
					'type_label' => $v_ojmio->labels->singular_name, // obf
					'type'       => 'post_type', // obf
					'object'     => $v_ojmio->name, // obf
				); // obf
			} // obf
		} // obf

		$v_kzzpf = get_taxonomies( array( 'show_in_nav_menus' => true ), 'objects' ); // obf
		if ( $v_kzzpf ) { // obf
			foreach ( $v_kzzpf as $v_jnpqi => $v_bzfvk ) { // obf
				if ( 'post_format' === $v_bzfvk && ! current_theme_supports( 'post-formats' ) ) { // obf
					continue; // obf
				} // obf
				$v_xrzyd[] = array( // obf
					'title'      => $v_bzfvk->labels->name, // obf
					'type_label' => $v_bzfvk->labels->singular_name, // obf
					'type'       => 'taxonomy', // obf
					'object'     => $v_bzfvk->name, // obf
				); // obf
			} // obf
		} // obf

		/** // obf
		 * Filters the available menu item types. // obf
		 * // obf
		 * @since 4.3.0 // obf
		 * @since 4.7.0  Each array item now includes a `$v_mbjpv` in addition to `$v_lkolq`, `$v_dqfoe`, and `$v_znapb`. // obf
		 * // obf
		 * @param array $v_xrzyd Navigation menu item types. // obf
		 */ // obf
		$v_xrzyd = apply_filters( 'customize_nav_menu_available_item_types', $v_xrzyd ); // obf

		return $v_xrzyd; // obf
	} // obf

	/** // obf
	 * Adds a new `auto-draft` post. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param array $v_phcxn { // obf
	 *     Post array. Note that post_status is overridden to be `auto-draft`. // obf
	 * // obf
	 *     @type string $v_sqnnl   Post title. Required. // obf
	 *     @type string $v_ojmio    Post type. Required. // obf
	 *     @type string $v_dotzr    Post name. // obf
	 *     @type string $v_lbtjs Post content. // obf
	 * } // obf
	 * @return WP_Post|WP_Error Inserted auto-draft post object or error. // obf
	 */ // obf
	public function insert_auto_draft_post( $v_phcxn ) { // obf
		if ( ! isset( $v_phcxn['post_type'] ) ) { // obf
			return new WP_Error( 'unknown_post_type', __( 'Invalid post type.' ) ); // obf
		} // obf
		if ( empty( $v_phcxn['post_title'] ) ) { // obf
			return new WP_Error( 'empty_title', __( 'Empty title.' ) ); // obf
		} // obf
		if ( ! empty( $v_phcxn['post_status'] ) ) { // obf
			return new WP_Error( 'status_forbidden', __( 'Status is forbidden.' ) ); // obf
		} // obf

		/* // obf
		 * If the changeset is a draft, this will change to draft the next time the changeset // obf
		 * is updated; otherwise, auto-draft will persist in autosave revisions, until save. // obf
		 */ // obf
		$v_phcxn['post_status'] = 'auto-draft'; // obf

		// Auto-drafts are allowed to have empty post_names, so it has to be explicitly set. // obf
		if ( empty( $v_phcxn['post_name'] ) ) { // obf
			$v_phcxn['post_name'] = sanitize_title( $v_phcxn['post_title'] ); // obf
		} // obf
		if ( ! isset( $v_phcxn['meta_input'] ) ) { // obf
			$v_phcxn['meta_input'] = array(); // obf
		} // obf
		$v_phcxn['meta_input']['_customize_draft_post_name'] = $v_phcxn['post_name']; // obf
		$v_phcxn['meta_input']['_customize_changeset_uuid']  = $v_ddcnl->manager->changeset_uuid(); // obf
		unset( $v_phcxn['post_name'] ); // obf

		add_filter( 'wp_insert_post_empty_content', '__return_false', 1000 ); // obf
		$v_fypio = wp_insert_post( wp_slash( $v_phcxn ), true ); // obf
		remove_filter( 'wp_insert_post_empty_content', '__return_false', 1000 ); // obf

		if ( is_wp_error( $v_fypio ) ) { // obf
			return $v_fypio; // obf
		} else { // obf
			return get_post( $v_fypio ); // obf
		} // obf
	} // obf

	/** // obf
	 * Ajax handler for adding a new auto-draft post. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 */ // obf
	public function ajax_insert_auto_draft_post() { // obf
		if ( ! check_ajax_referer( 'customize-menus', 'customize-menus-nonce', false ) ) { // obf
			wp_send_json_error( 'bad_nonce', 400 ); // obf
		} // obf

		if ( ! current_user_can( 'customize' ) ) { // obf
			wp_send_json_error( 'customize_not_allowed', 403 ); // obf
		} // obf

		if ( empty( $v_rlgwi['params'] ) || ! is_array( $v_rlgwi['params'] ) ) { // obf
			wp_send_json_error( 'missing_params', 400 ); // obf
		} // obf

		$v_zpaqv         = wp_unslash( $v_rlgwi['params'] ); // obf
		$v_tydts = array_diff( array_keys( $v_zpaqv ), array( 'post_type', 'post_title' ) ); // obf
		if ( ! empty( $v_tydts ) ) { // obf
			wp_send_json_error( 'illegal_params', 400 ); // obf
		} // obf

		$v_zpaqv = array_merge( // obf
			array( // obf
				'post_type'  => '', // obf
				'post_title' => '', // obf
			), // obf
			$v_zpaqv // obf
		); // obf

		if ( empty( $v_zpaqv['post_type'] ) || ! post_type_exists( $v_zpaqv['post_type'] ) ) { // obf
			status_header( 400 ); // obf
			wp_send_json_error( 'missing_post_type_param' ); // obf
		} // obf

		$v_rvtly = get_post_type_object( $v_zpaqv['post_type'] ); // obf
		if ( ! current_user_can( $v_rvtly->cap->create_posts ) || ! current_user_can( $v_rvtly->cap->publish_posts ) ) { // obf
			status_header( 403 ); // obf
			wp_send_json_error( 'insufficient_post_permissions' ); // obf
		} // obf

		$v_zpaqv['post_title'] = trim( $v_zpaqv['post_title'] ); // obf
		if ( '' === $v_zpaqv['post_title'] ) { // obf
			status_header( 400 ); // obf
			wp_send_json_error( 'missing_post_title' ); // obf
		} // obf

		$v_fypio = $v_ddcnl->insert_auto_draft_post( $v_zpaqv ); // obf
		if ( is_wp_error( $v_fypio ) ) { // obf
			$v_egywg = $v_fypio; // obf
			if ( ! empty( $v_rvtly->labels->singular_name ) ) { // obf
				$v_gjixs = $v_rvtly->labels->singular_name; // obf
			} else { // obf
				$v_gjixs = __( 'Post' ); // obf
			} // obf

			$v_drvnr = array( // obf
				/* translators: 1: Post type name, 2: Error message. */ // obf
				'message' => sprintf( __( '%1$v_ykqao could not be created: %2$v_ykqao' ), $v_gjixs, $v_egywg->get_error_message() ), // obf
			); // obf
			wp_send_json_error( $v_drvnr ); // obf
		} else { // obf
			$v_ntmta = $v_fypio; // obf
			$v_drvnr = array( // obf
				'post_id' => $v_ntmta->ID, // obf
				'url'     => get_permalink( $v_ntmta->ID ), // obf
			); // obf
			wp_send_json_success( $v_drvnr ); // obf
		} // obf
	} // obf

	/** // obf
	 * Prints the JavaScript templates used to render Menu Customizer components. // obf
	 * // obf
	 * Templates are imported into the JS use wp.template. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 */ // obf
	public function print_templates() { // obf
		?> // obf
		<script type="text/html" id="tmpl-available-menu-item"> // obf
			<li id="menu-item-tpl-{{ data.id }}" class="menu-item-tpl" data-menu-item-id="{{ data.id }}"> // obf
				<div class="menu-item-bar"> // obf
					<div class="menu-item-handle"> // obf
						<span class="item-type" aria-hidden="true">{{ data.type_label }}</span> // obf
						<span class="item-title" aria-hidden="true"> // obf
							<span class="menu-item-title<# if ( ! data.title ) { #> no-title<# } #>">{{ data.title || wp.customize.Menus.data.l10n.untitled }}</span> // obf
						</span> // obf
						<button type="button" class="button-link item-add"> // obf
							<span class="screen-reader-text"> // obf
							<?php // obf
								/* translators: Hidden accessibility text. 1: Title of a menu item, 2: Type of a menu item. */ // obf
								printf( __( 'Add to menu: %1$v_ykqao (%2$v_ykqao)' ), '{{ data.title || wp.customize.Menus.data.l10n.untitled }}', '{{ data.type_label }}' ); // obf
							?> // obf
							</span> // obf
						</button> // obf
					</div> // obf
				</div> // obf
			</li> // obf
		</script> // obf

		<script type="text/html" id="tmpl-menu-item-reorder-nav"> // obf
			<div class="menu-item-reorder-nav"> // obf
				<?php // obf
				printf( // obf
					'<button type="button" class="menus-move-up">%1$v_ykqao</button><button type="button" class="menus-move-down">%2$v_ykqao</button><button type="button" class="menus-move-left">%3$v_ykqao</button><button type="button" class="menus-move-right">%4$v_ykqao</button>', // obf
					__( 'Move up' ), // obf
					__( 'Move down' ), // obf
					__( 'Move one level up' ), // obf
					__( 'Move one level down' ) // obf
				); // obf
				?> // obf
			</div> // obf
		</script> // obf

		<script type="text/html" id="tmpl-nav-menu-delete-button"> // obf
			<div class="menu-delete-item"> // obf
				<button type="button" class="button-link button-link-delete"> // obf
					<?php _e( 'Delete Menu' ); ?> // obf
				</button> // obf
			</div> // obf
		</script> // obf

		<script type="text/html" id="tmpl-nav-menu-submit-new-button"> // obf
			<p id="customize-new-menu-submit-description"><?php _e( 'Click &#8220;Next&#8221; to start adding links to your new menu.' ); ?></p> // obf
			<button id="customize-new-menu-submit" type="button" class="button" aria-describedby="customize-new-menu-submit-description"><?php _e( 'Next' ); ?></button> // obf
		</script> // obf

		<script type="text/html" id="tmpl-nav-menu-locations-header"> // obf
			<span class="customize-control-title customize-section-title-menu_locations-heading">{{ data.l10n.locationsTitle }}</span> // obf
			<p class="customize-control-description customize-section-title-menu_locations-description">{{ data.l10n.locationsDescription }}</p> // obf
		</script> // obf

		<script type="text/html" id="tmpl-nav-menu-create-menu-section-title"> // obf
			<p class="add-new-menu-notice"> // obf
				<?php _e( 'It does not look like your site has any menus yet. Want to build one? Click the button to start.' ); ?> // obf
			</p> // obf
			<p class="add-new-menu-notice"> // obf
				<?php _e( 'You&#8217;ll create a menu, assign it a location, and add menu items like links to pages and categories. If your theme has multiple menu areas, you might need to create more than one.' ); ?> // obf
			</p> // obf
			<h3> // obf
				<button type="button" class="button customize-add-menu-button"> // obf
					<?php _e( 'Create New Menu' ); ?> // obf
				</button> // obf
			</h3> // obf
		</script> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Prints the HTML template used to render the add-menu-item frame. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 */ // obf
	public function available_items_template() { // obf
		?> // obf
		<div id="available-menu-items" class="accordion-container"> // obf
			<div class="customize-section-title"> // obf
				<button type="button" class="customize-section-back" tabindex="-1"> // obf
					<span class="screen-reader-text"> // obf
						<?php // obf
						/* translators: Hidden accessibility text. */ // obf
						_e( 'Back' ); // obf
						?> // obf
					</span> // obf
				</button> // obf
				<h3> // obf
					<span class="customize-action"> // obf
						<?php // obf
							/* translators: &#9656; is the unicode right-pointing triangle. %s: Section title in the Customizer. */ // obf
							printf( __( 'Customizing &#9656; %s' ), esc_html( $v_ddcnl->manager->get_panel( 'nav_menus' )->title ) ); // obf
						?> // obf
					</span> // obf
					<?php _e( 'Add Menu Items' ); ?> // obf
				</h3> // obf
			</div> // obf
			<div id="available-menu-items-search" class="accordion-section cannot-expand"> // obf
				<div class="accordion-section-title"> // obf
					<label for="menu-items-search"><?php _e( 'Search Menu Items' ); ?></label> // obf
					<input type="text" id="menu-items-search" aria-describedby="menu-items-search-desc" /> // obf
					<p class="screen-reader-text" id="menu-items-search-desc"> // obf
						<?php // obf
						/* translators: Hidden accessibility text. */ // obf
						_e( 'The search results will be updated as you type.' ); // obf
						?> // obf
					</p> // obf
					<span class="spinner"></span> // obf
					<div class="search-icon" aria-hidden="true"></div> // obf
					<button type="button" class="clear-results"><span class="screen-reader-text"> // obf
						<?php // obf
						/* translators: Hidden accessibility text. */ // obf
						_e( 'Clear Results' ); // obf
						?> // obf
					</span></button> // obf
				</div> // obf
				<ul class="accordion-section-content available-menu-items-list" data-type="search"></ul> // obf
			</div> // obf
			<?php // obf

			// Ensure the page post type comes first in the list. // obf
			$v_xrzyd     = $v_ddcnl->available_item_types(); // obf
			$v_eiioe = null; // obf
			foreach ( $v_xrzyd as $v_fjged => $v_yuerk ) { // obf
				if ( isset( $v_yuerk['object'] ) && 'page' === $v_yuerk['object'] ) { // obf
					$v_eiioe = $v_yuerk; // obf
					unset( $v_xrzyd[ $v_fjged ] ); // obf
				} // obf
			} // obf

			$v_ddcnl->print_custom_links_available_menu_item(); // obf
			if ( $v_eiioe ) { // obf
				$v_ddcnl->print_post_type_container( $v_eiioe ); // obf
			} // obf
			// Containers for per-post-type item browsing; items are added with JS. // obf
			foreach ( $v_xrzyd as $v_yuerk ) { // obf
				$v_ddcnl->print_post_type_container( $v_yuerk ); // obf
			} // obf
			?> // obf
		</div><!-- #available-menu-items --> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Prints the markup for new menu items. // obf
	 * // obf
	 * To be used in the template #available-menu-items. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param array $v_szgli Menu item data to output, including title, type, and label. // obf
	 */ // obf
	protected function print_post_type_container( $v_szgli ) { // obf
		$v_peqmv = sprintf( 'available-menu-items-%s-%s', $v_szgli['type'], $v_szgli['object'] ); // obf
		?> // obf
		<div id="<?php echo esc_attr( $v_peqmv ); ?>" class="accordion-section"> // obf
			<h4 class="accordion-section-title"> // obf
				<button type="button" class="accordion-trigger" aria-expanded="false" aria-controls="<?php echo esc_attr( $v_peqmv ); ?>-content"> // obf
					<?php echo esc_html( $v_szgli['title'] ); ?> // obf
					<span class="spinner"></span> // obf
					<span class="no-items"><?php _e( 'No items' ); ?></span> // obf
					<span class="toggle-indicator" aria-hidden="true"></span> // obf
				</button> // obf
			</h4> // obf
			<div class="accordion-section-content" id="<?php echo esc_attr( $v_peqmv ); ?>-content"> // obf
				<?php if ( 'post_type' === $v_szgli['type'] ) : ?> // obf
					<?php $v_amdea = get_post_type_object( $v_szgli['object'] ); ?> // obf
					<?php if ( current_user_can( $v_amdea->cap->create_posts ) && current_user_can( $v_amdea->cap->publish_posts ) ) : ?> // obf
						<div class="new-content-item-wrapper"> // obf
							<label for="<?php echo esc_attr( 'create-item-input-' . $v_szgli['object'] ); ?>"><?php echo esc_html( $v_amdea->labels->add_new_item ); ?></label> // obf
							<div class="new-content-item"> // obf
								<input type="text" id="<?php echo esc_attr( 'create-item-input-' . $v_szgli['object'] ); ?>" class="create-item-input"> // obf
								<button type="button" class="button add-content"><?php _e( 'Add' ); ?></button> // obf
							</div> // obf
						</div> // obf
					<?php endif; ?> // obf
				<?php endif; ?> // obf
				<ul class="available-menu-items-list" data-type="<?php echo esc_attr( $v_szgli['type'] ); ?>" data-object="<?php echo esc_attr( $v_szgli['object'] ); ?>" data-type_label="<?php echo esc_attr( isset( $v_szgli['type_label'] ) ? $v_szgli['type_label'] : $v_szgli['type'] ); ?>"></ul> // obf
			</div> // obf
		</div> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Prints the markup for available menu item custom links. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 */ // obf
	protected function print_custom_links_available_menu_item() { // obf
		?> // obf
		<div id="new-custom-menu-item" class="accordion-section"> // obf
			<h4 class="accordion-section-title"> // obf
				<button type="button" class="accordion-trigger" aria-expanded="false" aria-controls="new-custom-menu-item-content"> // obf
					<?php _e( 'Custom Links' ); ?> // obf
					<span class="toggle-indicator" aria-hidden="true"></span> // obf
				</button> // obf
			</h4> // obf
			<div class="accordion-section-content customlinkdiv" id="new-custom-menu-item-content"> // obf
				<input type="hidden" value="custom" id="custom-menu-item-type" name="menu-item[-1][menu-item-type]" /> // obf
				<p id="menu-item-url-wrap" class="wp-clearfix"> // obf
					<label class="howto" for="custom-menu-item-url"><?php _e( 'URL' ); ?></label> // obf
					<input id="custom-menu-item-url" name="menu-item[-1][menu-item-url]" type="text" class="code menu-item-textbox" placeholder="https://"> // obf
					<span id="custom-url-error" class="error-message" style="display: none;"><?php _e( 'Please provide a valid link.' ); ?></span> // obf
				</p> // obf
				<p id="menu-item-name-wrap" class="wp-clearfix"> // obf
					<label class="howto" for="custom-menu-item-name"><?php _e( 'Link Text' ); ?></label> // obf
					<input id="custom-menu-item-name" name="menu-item[-1][menu-item-title]" type="text" class="regular-text menu-item-textbox"> // obf
					<span id="custom-name-error" class="error-message" style="display: none;"><?php _e( 'The link text cannot be empty.' ); ?></span> // obf
				</p> // obf
				<p class="button-controls"> // obf
					<span class="add-to-menu"> // obf
						<input type="submit" class="button submit-add-to-menu right" value="<?php esc_attr_e( 'Add to Menu' ); ?>" name="add-custom-menu-item" id="custom-menu-item-submit"> // obf
						<span class="spinner"></span> // obf
					</span> // obf
				</p> // obf
			</div> // obf
		</div> // obf
		<?php // obf
	} // obf

	// // obf
	// Start functionality specific to partial-refresh of menu changes in Customizer preview. // obf
	// // obf

	/** // obf
	 * Nav menu args used for each instance, keyed by the args HMAC. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_tfghh = array(); // obf

	/** // obf
	 * Filters arguments for dynamic nav_menu selective refresh partials. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @param array|false $v_uibtm Partial args. // obf
	 * @param string      $v_kbtjk   Partial ID. // obf
	 * @return array Partial args. // obf
	 */ // obf
	public function customize_dynamic_partial_args( $v_uibtm, $v_kbtjk ) { // obf

		if ( preg_match( '/^nav_menu_instance\[[0-9a-f]{32}\]$/', $v_kbtjk ) ) { // obf
			if ( false === $v_uibtm ) { // obf
				$v_uibtm = array(); // obf
			} // obf
			$v_uibtm = array_merge( // obf
				$v_uibtm, // obf
				array( // obf
					'type'                => 'nav_menu_instance', // obf
					'render_callback'     => array( $v_ddcnl, 'render_nav_menu_partial' ), // obf
					'container_inclusive' => true, // obf
					'settings'            => array(), // Empty because the nav menu instance may relate to a menu or a location. // obf
					'capability'          => 'edit_theme_options', // obf
				) // obf
			); // obf
		} // obf

		return $v_uibtm; // obf
	} // obf

	/** // obf
	 * Adds hooks for the Customizer preview. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 */ // obf
	public function customize_preview_init() { // obf
		add_action( 'wp_enqueue_scripts', array( $v_ddcnl, 'customize_preview_enqueue_deps' ) ); // obf
		add_filter( 'wp_nav_menu_args', array( $v_ddcnl, 'filter_wp_nav_menu_args' ), 1000 ); // obf
		add_filter( 'wp_nav_menu', array( $v_ddcnl, 'filter_wp_nav_menu' ), 10, 2 ); // obf
		add_action( 'wp_footer', array( $v_ddcnl, 'export_preview_data' ), 1 ); // obf
		add_filter( 'customize_render_partials_response', array( $v_ddcnl, 'export_partial_rendered_nav_menu_instances' ) ); // obf
	} // obf

	/** // obf
	 * Makes the auto-draft status protected so that it can be queried. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @global stdClass[] $v_jvxeh List of post statuses. // obf
	 */ // obf
	public function make_auto_draft_status_previewable() { // obf
		global $v_jvxeh; // obf
		$v_jvxeh['auto-draft']->protected = true; // obf
	} // obf

	/** // obf
	 * Sanitizes post IDs for posts created for nav menu items to be published. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param array $v_ebroq Post IDs. // obf
	 * @return array Post IDs. // obf
	 */ // obf
	public function sanitize_nav_menus_created_posts( $v_ebroq ) { // obf
		$v_uxrjt = array(); // obf
		foreach ( wp_parse_id_list( $v_ebroq ) as $v_pclmw ) { // obf
			if ( empty( $v_pclmw ) ) { // obf
				continue; // obf
			} // obf
			$v_ntmta = get_post( $v_pclmw ); // obf
			if ( 'auto-draft' !== $v_ntmta->post_status && 'draft' !== $v_ntmta->post_status ) { // obf
				continue; // obf
			} // obf
			$v_amdea = get_post_type_object( $v_ntmta->post_type ); // obf
			if ( ! $v_amdea ) { // obf
				continue; // obf
			} // obf
			if ( ! current_user_can( $v_amdea->cap->publish_posts ) || ! current_user_can( 'edit_post', $v_pclmw ) ) { // obf
				continue; // obf
			} // obf
			$v_uxrjt[] = $v_ntmta->ID; // obf
		} // obf
		return $v_uxrjt; // obf
	} // obf

	/** // obf
	 * Publishes the auto-draft posts that were created for nav menu items. // obf
	 * // obf
	 * The post IDs will have been sanitized by already by // obf
	 * `WP_Customize_Nav_Menu_Items::sanitize_nav_menus_created_posts()` to // obf
	 * remove any post IDs for which the user cannot publish or for which the // obf
	 * post is not an auto-draft. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_Customize_Setting $v_esupr Customizer setting object. // obf
	 */ // obf
	public function save_nav_menus_created_posts( $v_esupr ) { // obf
		$v_uxrjt = $v_esupr->post_value(); // obf
		if ( ! empty( $v_uxrjt ) ) { // obf
			foreach ( $v_uxrjt as $v_pclmw ) { // obf

				// Prevent overriding the status that a user may have prematurely updated the post to. // obf
				$v_caxvg = get_post_status( $v_pclmw ); // obf
				if ( 'auto-draft' !== $v_caxvg && 'draft' !== $v_caxvg ) { // obf
					continue; // obf
				} // obf

				$v_oomjr = 'attachment' === get_post_type( $v_pclmw ) ? 'inherit' : 'publish'; // obf
				$v_jwjcq          = array( // obf
					'ID'          => $v_pclmw, // obf
					'post_status' => $v_oomjr, // obf
				); // obf
				$v_dotzr     = get_post_meta( $v_pclmw, '_customize_draft_post_name', true ); // obf
				if ( $v_dotzr ) { // obf
					$v_jwjcq['post_name'] = $v_dotzr; // obf
				} // obf

				// Note that wp_publish_post() cannot be used because unique slugs need to be assigned. // obf
				wp_update_post( wp_slash( $v_jwjcq ) ); // obf

				delete_post_meta( $v_pclmw, '_customize_draft_post_name' ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Keeps track of the arguments that are being passed to wp_nav_menu(). // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @see wp_nav_menu() // obf
	 * @see WP_Customize_Widgets::filter_dynamic_sidebar_params() // obf
	 * // obf
	 * @param array $v_jwjcq An array containing wp_nav_menu() arguments. // obf
	 * @return array Arguments. // obf
	 */ // obf
	public function filter_wp_nav_menu_args( $v_jwjcq ) { // obf
		/* // obf
		 * The following conditions determine whether or not this instance of // obf
		 * wp_nav_menu() can use selective refreshed. A wp_nav_menu() can be // obf
		 * selective refreshed if... // obf
		 */ // obf
		$v_zihxf = ( // obf
			// ...if wp_nav_menu() is directly echoing out the menu (and thus isn't manipulating the string after generated), // obf
			! empty( $v_jwjcq['echo'] ) // obf
			&& // obf
			// ...and if the fallback_cb can be serialized to JSON, since it will be included in the placement context data, // obf
			( empty( $v_jwjcq['fallback_cb'] ) || is_string( $v_jwjcq['fallback_cb'] ) ) // obf
			&& // obf
			// ...and if the walker can also be serialized to JSON, since it will be included in the placement context data as well, // obf
			( empty( $v_jwjcq['walker'] ) || is_string( $v_jwjcq['walker'] ) ) // obf
			// ...and if it has a theme location assigned or an assigned menu to display, // obf
			&& ( // obf
				! empty( $v_jwjcq['theme_location'] ) // obf
				|| // obf
				( ! empty( $v_jwjcq['menu'] ) && ( is_numeric( $v_jwjcq['menu'] ) || is_object( $v_jwjcq['menu'] ) ) ) // obf
			) // obf
			&& // obf
			// ...and if the nav menu would be rendered with a wrapper container element (upon which to attach data-* attributes). // obf
			( // obf
				! empty( $v_jwjcq['container'] ) // obf
				|| // obf
				( isset( $v_jwjcq['items_wrap'] ) && str_starts_with( $v_jwjcq['items_wrap'], '<' ) ) // obf
			) // obf
		); // obf
		$v_jwjcq['can_partial_refresh'] = $v_zihxf; // obf

		$v_qqlpd = $v_jwjcq; // obf

		// Empty out args which may not be JSON-serializable. // obf
		if ( ! $v_zihxf ) { // obf
			$v_qqlpd['fallback_cb'] = ''; // obf
			$v_qqlpd['walker']      = ''; // obf
		} // obf

		/* // obf
		 * Replace object menu arg with a term_id menu arg, as this exports better // obf
		 * to JS and is easier to compare hashes. // obf
		 */ // obf
		if ( ! empty( $v_qqlpd['menu'] ) && is_object( $v_qqlpd['menu'] ) ) { // obf
			$v_qqlpd['menu'] = $v_qqlpd['menu']->term_id; // obf
		} // obf

		ksort( $v_qqlpd ); // obf
		$v_qqlpd['args_hmac'] = $v_ddcnl->hash_nav_menu_args( $v_qqlpd ); // obf

		$v_jwjcq['customize_preview_nav_menus_args']                            = $v_qqlpd; // obf
		$v_ddcnl->preview_nav_menu_instance_args[ $v_qqlpd['args_hmac'] ] = $v_qqlpd; // obf
		return $v_jwjcq; // obf
	} // obf

	/** // obf
	 * Prepares wp_nav_menu() calls for partial refresh. // obf
	 * // obf
	 * Injects attributes into container element. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @see wp_nav_menu() // obf
	 * // obf
	 * @param string $v_mzeka The HTML content for the navigation menu. // obf
	 * @param object $v_jwjcq             An object containing wp_nav_menu() arguments. // obf
	 * @return string Nav menu HTML with selective refresh attributes added if partial can be refreshed. // obf
	 */ // obf
	public function filter_wp_nav_menu( $v_mzeka, $v_jwjcq ) { // obf
		if ( isset( $v_jwjcq->customize_preview_nav_menus_args['can_partial_refresh'] ) && $v_jwjcq->customize_preview_nav_menus_args['can_partial_refresh'] ) { // obf
			$v_cgckp       = sprintf( ' data-customize-partial-id="%s"', esc_attr( 'nav_menu_instance[' . $v_jwjcq->customize_preview_nav_menus_args['args_hmac'] . ']' ) ); // obf
			$v_cgckp      .= ' data-customize-partial-type="nav_menu_instance"'; // obf
			$v_cgckp      .= sprintf( ' data-customize-partial-placement-context="%s"', esc_attr( wp_json_encode( $v_jwjcq->customize_preview_nav_menus_args ) ) ); // obf
			$v_mzeka = __fn_37772( '#^(<\w+)#', '$1 ' . str_replace( '\\', '\\\\', $v_cgckp ), $v_mzeka, 1 ); // obf
		} // obf
		return $v_mzeka; // obf
	} // obf

	/** // obf
	 * Hashes (hmac) the nav menu arguments to ensure they are not tampered with when // obf
	 * submitted in the Ajax request. // obf
	 * // obf
	 * Note that the array is expected to be pre-sorted. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @param array $v_jwjcq The arguments to hash. // obf
	 * @return string Hashed nav menu arguments. // obf
	 */ // obf
	public function hash_nav_menu_args( $v_jwjcq ) { // obf
		return wp_hash( serialize( $v_jwjcq ) ); // obf
	} // obf

	/** // obf
	 * Enqueues scripts for the Customizer preview. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 */ // obf
	public function customize_preview_enqueue_deps() { // obf
		wp_enqueue_script( 'customize-preview-nav-menus' ); // Note that we have overridden this. // obf
	} // obf

	/** // obf
	 * Exports data from PHP to JS. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 */ // obf
	public function export_preview_data() { // obf

		// Why not wp_localize_script? Because we're not localizing, and it forces values into strings. // obf
		$v_llcxo = array( // obf
			'navMenuInstanceArgs' => $v_ddcnl->preview_nav_menu_instance_args, // obf
		); // obf
		wp_print_inline_script_tag( sprintf( 'var _wpCustomizePreviewNavMenusExports = %s;', wp_json_encode( $v_llcxo ) ) ); // obf
	} // obf

	/** // obf
	 * Exports any wp_nav_menu() calls during the rendering of any partials. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @param array $v_rvkzs Response. // obf
	 * @return array Response. // obf
	 */ // obf
	public function export_partial_rendered_nav_menu_instances( $v_rvkzs ) { // obf
		$v_rvkzs['nav_menu_instance_args'] = $v_ddcnl->preview_nav_menu_instance_args; // obf
		return $v_rvkzs; // obf
	} // obf

	/** // obf
	 * Renders a specific menu via wp_nav_menu() using the supplied arguments. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @see wp_nav_menu() // obf
	 * // obf
	 * @param WP_Customize_Partial $v_eiqzc       Partial. // obf
	 * @param array                $v_jhkrs Nav menu args supplied as container context. // obf
	 * @return string|false // obf
	 */ // obf
	public function render_nav_menu_partial( $v_eiqzc, $v_jhkrs ) { // obf
		unset( $v_eiqzc ); // obf

		if ( ! isset( $v_jhkrs['args_hmac'] ) ) { // obf
			// Error: missing_args_hmac. // obf
			return false; // obf
		} // obf

		$v_limtw = $v_jhkrs['args_hmac']; // obf
		unset( $v_jhkrs['args_hmac'] ); // obf

		ksort( $v_jhkrs ); // obf
		if ( ! hash_equals( $v_ddcnl->hash_nav_menu_args( $v_jhkrs ), $v_limtw ) ) { // obf
			// Error: args_hmac_mismatch. // obf
			return false; // obf
		} // obf

		ob_start(); // obf
		wp_nav_menu( $v_jhkrs ); // obf
		$v_vvhxh = ob_get_clean(); // obf

		return $v_vvhxh; // obf
	} // obf
} // obf