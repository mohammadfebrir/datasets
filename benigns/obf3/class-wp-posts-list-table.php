

<?php // obf
/** // obf
 * List Table API: WP_Posts_List_Table class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 * @since 3.1.0 // obf
 */ // obf

/** // obf
 * Core class used to implement displaying posts in a list table. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @see WP_List_Table // obf
 */ // obf
class WP_Posts_List_Table extends WP_List_Table { // obf

	/** // obf
	 * Whether the items should be displayed hierarchically or linearly. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * @var bool // obf
	 */ // obf
	protected $v_mpobi; // obf

	/** // obf
	 * Holds the number of pending comments for each post. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_begev; // obf

	/** // obf
	 * Holds the number of posts for this user. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * @var int // obf
	 */ // obf
	private $v_mqixp; // obf

	/** // obf
	 * Holds the number of posts which are sticky. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * @var int // obf
	 */ // obf
	private $v_zmcpo = 0; // obf

	private $v_kydgw; // obf

	/** // obf
	 * Current level for output. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @var int // obf
	 */ // obf
	protected $v_escoz = 0; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @see WP_List_Table::__construct() for more information on default arguments. // obf
	 * // obf
	 * @global WP_Post_Type $v_etfgb Global post type object. // obf
	 * @global wpdb         $v_gfedl             WordPress database abstraction object. // obf
	 * // obf
	 * @param array $v_mdxyo An associative array of arguments. // obf
	 */ // obf
	public function __construct( $v_mdxyo = array() ) { // obf
		global $v_etfgb, $v_gfedl; // obf

		parent::__construct( // obf
			array( // obf
				'plural' => 'posts', // obf
				'screen' => isset( $v_mdxyo['screen'] ) ? $v_mdxyo['screen'] : null, // obf
			) // obf
		); // obf

		$v_ibhro        = $v_kthqu->screen->post_type; // obf
		$v_etfgb = get_post_type_object( $v_ibhro ); // obf

		$v_fdajo = get_post_stati( // obf
			array( // obf
				'show_in_admin_all_list' => false, // obf
			) // obf
		); // obf

		$v_kthqu->user_posts_count = (int) $v_gfedl->get_var( // obf
			$v_gfedl->prepare( // obf
				"SELECT COUNT( 1 ) // obf
				FROM $v_gfedl->posts // obf
				WHERE post_type = %s // obf
				AND post_status NOT IN ( '" . implode( "','", $v_fdajo ) . "' ) // obf
				AND post_author = %d", // obf
				$v_ibhro, // obf
				get_current_user_id() // obf
			) // obf
		); // obf

		if ( $v_kthqu->user_posts_count // obf
			&& ! current_user_can( $v_etfgb->cap->edit_others_posts ) // obf
			&& empty( $v_myplh['post_status'] ) && empty( $v_myplh['all_posts'] ) // obf
			&& empty( $v_myplh['author'] ) && empty( $v_myplh['show_sticky'] ) // obf
		) { // obf
			$v_beegj['author'] = get_current_user_id(); // obf
		} // obf

		$v_mikrx = get_option( 'sticky_posts' ); // obf

		if ( 'post' === $v_ibhro && $v_mikrx ) { // obf
			$v_mikrx = implode( ', ', array_map( 'absint', (array) $v_mikrx ) ); // obf

			$v_kthqu->sticky_posts_count = (int) $v_gfedl->get_var( // obf
				$v_gfedl->prepare( // obf
					"SELECT COUNT( 1 ) // obf
					FROM $v_gfedl->posts // obf
					WHERE post_type = %s // obf
					AND post_status NOT IN ('trash', 'auto-draft') // obf
					AND ID IN ($v_mikrx)", // obf
					$v_ibhro // obf
				) // obf
			); // obf
		} // obf
	} // obf

	/** // obf
	 * Sets whether the table layout should be hierarchical or not. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * // obf
	 * @param bool $v_nojue Whether the table layout should be hierarchical. // obf
	 */ // obf
	public function set_hierarchical_display( $v_nojue ) { // obf
		$v_kthqu->hierarchical_display = $v_nojue; // obf
	} // obf

	/** // obf
	 * @return bool // obf
	 */ // obf
	public function ajax_user_can() { // obf
		return current_user_can( get_post_type_object( $v_kthqu->screen->post_type )->cap->edit_posts ); // obf
	} // obf

	/** // obf
	 * @global string   $v_hnzqt             List table view mode. // obf
	 * @global array    $v_brbxj // obf
	 * @global WP_Query $v_evltu         WordPress Query object. // obf
	 * @global int      $v_clrkg // obf
	 */ // obf
	public function prepare_items() { // obf
		global $v_hnzqt, $v_brbxj, $v_evltu, $v_clrkg; // obf

		if ( ! empty( $v_myplh['mode'] ) ) { // obf
			$v_hnzqt = 'excerpt' === $v_myplh['mode'] ? 'excerpt' : 'list'; // obf
			set_user_setting( 'posts_list_mode', $v_hnzqt ); // obf
		} else { // obf
			$v_hnzqt = get_user_setting( 'posts_list_mode', 'list' ); // obf
		} // obf

		// Is going to call wp(). // obf
		$v_brbxj = wp_edit_posts_query(); // obf

		$v_kthqu->set_hierarchical_display( // obf
			is_post_type_hierarchical( $v_kthqu->screen->post_type ) // obf
			&& 'menu_order title' === $v_evltu->query['orderby'] // obf
		); // obf

		$v_ibhro = $v_kthqu->screen->post_type; // obf
		$v_clrkg  = $v_kthqu->get_items_per_page( 'edit_' . $v_ibhro . '_per_page' ); // obf

		/** This filter is documented in wp-admin/includes/post.php */ // obf
		$v_clrkg = apply_filters( 'edit_posts_per_page', $v_clrkg, $v_ibhro ); // obf

		if ( $v_kthqu->hierarchical_display ) { // obf
			$v_mabaw = $v_evltu->post_count; // obf
		} elseif ( $v_evltu->found_posts || $v_kthqu->get_pagenum() === 1 ) { // obf
			$v_mabaw = $v_evltu->found_posts; // obf
		} else { // obf
			$v_bvcmp = (array) wp_count_posts( $v_ibhro, 'readable' ); // obf

			if ( isset( $v_myplh['post_status'] ) && in_array( $v_myplh['post_status'], $v_brbxj, true ) ) { // obf
				$v_mabaw = $v_bvcmp[ $v_myplh['post_status'] ]; // obf
			} elseif ( isset( $v_myplh['show_sticky'] ) && $v_myplh['show_sticky'] ) { // obf
				$v_mabaw = $v_kthqu->sticky_posts_count; // obf
			} elseif ( isset( $v_beegj['author'] ) && get_current_user_id() === (int) $v_beegj['author'] ) { // obf
				$v_mabaw = $v_kthqu->user_posts_count; // obf
			} else { // obf
				$v_mabaw = array_sum( $v_bvcmp ); // obf

				// Subtract post types that are not included in the admin all list. // obf
				foreach ( get_post_stati( array( 'show_in_admin_all_list' => false ) ) as $v_vwfvk ) { // obf
					$v_mabaw -= $v_bvcmp[ $v_vwfvk ]; // obf
				} // obf
			} // obf
		} // obf

		$v_kthqu->is_trash = isset( $v_myplh['post_status'] ) && 'trash' === $v_myplh['post_status']; // obf

		$v_kthqu->set_pagination_args( // obf
			array( // obf
				'total_items' => $v_mabaw, // obf
				'per_page'    => $v_clrkg, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * @return bool // obf
	 */ // obf
	public function has_items() { // obf
		return have_posts(); // obf
	} // obf

	/** // obf
	 */ // obf
	public function no_items() { // obf
		if ( isset( $v_myplh['post_status'] ) && 'trash' === $v_myplh['post_status'] ) { // obf
			echo get_post_type_object( $v_kthqu->screen->post_type )->labels->not_found_in_trash; // obf
		} else { // obf
			echo get_post_type_object( $v_kthqu->screen->post_type )->labels->not_found; // obf
		} // obf
	} // obf

	/** // obf
	 * Determines if the current view is the "All" view. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * // obf
	 * @return bool Whether the current view is the "All" view. // obf
	 */ // obf
	protected function is_base_request() { // obf
		$v_zwyzw = $v_beegj; // obf
		unset( $v_zwyzw['paged'] ); // obf

		if ( empty( $v_zwyzw ) ) { // obf
			return true; // obf
		} elseif ( 1 === count( $v_zwyzw ) && ! empty( $v_zwyzw['post_type'] ) ) { // obf
			return $v_kthqu->screen->post_type === $v_zwyzw['post_type']; // obf
		} // obf

		return 1 === count( $v_zwyzw ) && ! empty( $v_zwyzw['mode'] ); // obf
	} // obf

	/** // obf
	 * Creates a link to edit.php with params. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string[] $v_mdxyo      Associative array of URL parameters for the link. // obf
	 * @param string   $v_bxsob Link text. // obf
	 * @param string   $v_ivbeh Optional. Class attribute. Default empty string. // obf
	 * @return string The formatted link string. // obf
	 */ // obf
	protected function get_edit_link( $v_mdxyo, $v_bxsob, $v_ivbeh = '' ) { // obf
		$v_sotjg = add_query_arg( $v_mdxyo, 'edit.php' ); // obf

		$v_hdgyq   = ''; // obf
		$v_gpwjm = ''; // obf

		if ( ! empty( $v_ivbeh ) ) { // obf
			$v_hdgyq = sprintf( // obf
				' class="%s"', // obf
				esc_attr( $v_ivbeh ) // obf
			); // obf

			if ( 'current' === $v_ivbeh ) { // obf
				$v_gpwjm = ' aria-current="page"'; // obf
			} // obf
		} // obf

		return sprintf( // obf
			'<a href="%s"%s%s>%s</a>', // obf
			esc_url( $v_sotjg ), // obf
			$v_hdgyq, // obf
			$v_gpwjm, // obf
			$v_bxsob // obf
		); // obf
	} // obf

	/** // obf
	 * @global array $v_teupd This seems to be deprecated. // obf
	 * @global array $v_brbxj // obf
	 * @return array // obf
	 */ // obf
	protected function get_views() { // obf
		global $v_teupd, $v_brbxj; // obf

		$v_ibhro = $v_kthqu->screen->post_type; // obf

		if ( ! empty( $v_teupd ) ) { // obf
			return array(); // obf
		} // obf

		$v_delsl = array(); // obf
		$v_blvgb    = wp_count_posts( $v_ibhro, 'readable' ); // obf
		$v_enbdi  = array_sum( (array) $v_blvgb ); // obf
		$v_paooi        = ''; // obf

		$v_fmelu = get_current_user_id(); // obf
		$v_vypjr        = array( 'post_type' => $v_ibhro ); // obf
		$v_efvvv            = ''; // obf

		// Subtract post types that are not included in the admin all list. // obf
		foreach ( get_post_stati( array( 'show_in_admin_all_list' => false ) ) as $v_vwfvk ) { // obf
			$v_enbdi -= $v_blvgb->$v_vwfvk; // obf
		} // obf

		if ( $v_kthqu->user_posts_count && $v_kthqu->user_posts_count !== $v_enbdi ) { // obf
			if ( isset( $v_beegj['author'] ) && ( $v_fmelu === (int) $v_beegj['author'] ) ) { // obf
				$v_paooi = 'current'; // obf
			} // obf

			$v_trkgp = array( // obf
				'post_type' => $v_ibhro, // obf
				'author'    => $v_fmelu, // obf
			); // obf

			$v_qftxk = sprintf( // obf
				/* translators: %s: Number of posts. */ // obf
				_nx( // obf
					'Mine <span class="count">(%s)</span>', // obf
					'Mine <span class="count">(%s)</span>', // obf
					$v_kthqu->user_posts_count, // obf
					'posts' // obf
				), // obf
				number_format_i18n( $v_kthqu->user_posts_count ) // obf
			); // obf

			$v_efvvv = array( // obf
				'url'     => esc_url( add_query_arg( $v_trkgp, 'edit.php' ) ), // obf
				'label'   => $v_qftxk, // obf
				'current' => isset( $v_beegj['author'] ) && ( $v_fmelu === (int) $v_beegj['author'] ), // obf
			); // obf

			$v_vypjr['all_posts'] = 1; // obf
			$v_paooi                 = ''; // obf
		} // obf

		$v_lixui = sprintf( // obf
			/* translators: %s: Number of posts. */ // obf
			_nx( // obf
				'All <span class="count">(%s)</span>', // obf
				'All <span class="count">(%s)</span>', // obf
				$v_enbdi, // obf
				'posts' // obf
			), // obf
			number_format_i18n( $v_enbdi ) // obf
		); // obf

		$v_delsl['all'] = array( // obf
			'url'     => esc_url( add_query_arg( $v_vypjr, 'edit.php' ) ), // obf
			'label'   => $v_lixui, // obf
			'current' => empty( $v_paooi ) && ( $v_kthqu->is_base_request() || isset( $v_myplh['all_posts'] ) ), // obf
		); // obf

		if ( $v_efvvv ) { // obf
			$v_delsl['mine'] = $v_efvvv; // obf
		} // obf

		foreach ( get_post_stati( array( 'show_in_admin_status_list' => true ), 'objects' ) as $v_ttlki ) { // obf
			$v_paooi = ''; // obf

			$v_qfldu = $v_ttlki->name; // obf

			if ( ! in_array( $v_qfldu, $v_brbxj, true ) || empty( $v_blvgb->$v_qfldu ) ) { // obf
				continue; // obf
			} // obf

			if ( isset( $v_myplh['post_status'] ) && $v_qfldu === $v_myplh['post_status'] ) { // obf
				$v_paooi = 'current'; // obf
			} // obf

			$v_xikht = array( // obf
				'post_status' => $v_qfldu, // obf
				'post_type'   => $v_ibhro, // obf
			); // obf

			$v_stjik = sprintf( // obf
				translate_nooped_plural( $v_ttlki->label_count, $v_blvgb->$v_qfldu ), // obf
				number_format_i18n( $v_blvgb->$v_qfldu ) // obf
			); // obf

			$v_delsl[ $v_qfldu ] = array( // obf
				'url'     => esc_url( add_query_arg( $v_xikht, 'edit.php' ) ), // obf
				'label'   => $v_stjik, // obf
				'current' => isset( $v_myplh['post_status'] ) && $v_qfldu === $v_myplh['post_status'], // obf
			); // obf
		} // obf

		if ( ! empty( $v_kthqu->sticky_posts_count ) ) { // obf
			$v_paooi = ! empty( $v_myplh['show_sticky'] ) ? 'current' : ''; // obf

			$v_lfism = array( // obf
				'post_type'   => $v_ibhro, // obf
				'show_sticky' => 1, // obf
			); // obf

			$v_rxgrj = sprintf( // obf
				/* translators: %s: Number of posts. */ // obf
				_nx( // obf
					'Sticky <span class="count">(%s)</span>', // obf
					'Sticky <span class="count">(%s)</span>', // obf
					$v_kthqu->sticky_posts_count, // obf
					'posts' // obf
				), // obf
				number_format_i18n( $v_kthqu->sticky_posts_count ) // obf
			); // obf

			$v_cujyd = array( // obf
				'sticky' => array( // obf
					'url'     => esc_url( add_query_arg( $v_lfism, 'edit.php' ) ), // obf
					'label'   => $v_rxgrj, // obf
					'current' => ! empty( $v_myplh['show_sticky'] ), // obf
				), // obf
			); // obf

			// Sticky comes after Publish, or if not listed, after All. // obf
			$v_dhujk        = 1 + array_search( ( isset( $v_delsl['publish'] ) ? 'publish' : 'all' ), array_keys( $v_delsl ), true ); // obf
			$v_delsl = array_merge( array_slice( $v_delsl, 0, $v_dhujk ), $v_cujyd, array_slice( $v_delsl, $v_dhujk ) ); // obf
		} // obf

		return $v_kthqu->get_views_links( $v_delsl ); // obf
	} // obf

	/** // obf
	 * @return array // obf
	 */ // obf
	protected function get_bulk_actions() { // obf
		$v_ojbxb       = array(); // obf
		$v_bxthk = get_post_type_object( $v_kthqu->screen->post_type ); // obf

		if ( current_user_can( $v_bxthk->cap->edit_posts ) ) { // obf
			if ( $v_kthqu->is_trash ) { // obf
				$v_ojbxb['untrash'] = __( 'Restore' ); // obf
			} else { // obf
				$v_ojbxb['edit'] = __( 'Edit' ); // obf
			} // obf
		} // obf

		if ( current_user_can( $v_bxthk->cap->delete_posts ) ) { // obf
			if ( $v_kthqu->is_trash || ! EMPTY_TRASH_DAYS ) { // obf
				$v_ojbxb['delete'] = __( 'Delete permanently' ); // obf
			} else { // obf
				$v_ojbxb['trash'] = __( 'Move to Trash' ); // obf
			} // obf
		} // obf

		return $v_ojbxb; // obf
	} // obf

	/** // obf
	 * Displays a categories drop-down for filtering on the Posts list table. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @global int $v_yxwwx Currently selected category. // obf
	 * // obf
	 * @param string $v_ibhro Post type slug. // obf
	 */ // obf
	protected function categories_dropdown( $v_ibhro ) { // obf
		global $v_yxwwx; // obf

		/** // obf
		 * Filters whether to remove the 'Categories' drop-down from the post list table. // obf
		 * // obf
		 * @since 4.6.0 // obf
		 * // obf
		 * @param bool   $v_ejlic   Whether to disable the categories drop-down. Default false. // obf
		 * @param string $v_ibhro Post type slug. // obf
		 */ // obf
		if ( false !== apply_filters( 'disable_categories_dropdown', false, $v_ibhro ) ) { // obf
			return; // obf
		} // obf

		if ( is_object_in_taxonomy( $v_ibhro, 'category' ) ) { // obf
			$v_ajuui = array( // obf
				'show_option_all' => get_taxonomy( 'category' )->labels->all_items, // obf
				'hide_empty'      => 0, // obf
				'hierarchical'    => 1, // obf
				'show_count'      => 0, // obf
				'orderby'         => 'name', // obf
				'selected'        => $v_yxwwx, // obf
			); // obf

			echo '<label class="screen-reader-text" for="cat">' . get_taxonomy( 'category' )->labels->filter_by_item . '</label>'; // obf

			wp_dropdown_categories( $v_ajuui ); // obf
		} // obf
	} // obf

	/** // obf
	 * Displays a formats drop-down for filtering items. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param string $v_ibhro Post type slug. // obf
	 */ // obf
	protected function formats_dropdown( $v_ibhro ) { // obf
		/** // obf
		 * Filters whether to remove the 'Formats' drop-down from the post list table. // obf
		 * // obf
		 * @since 5.2.0 // obf
		 * @since 5.5.0 The `$v_ibhro` parameter was added. // obf
		 * // obf
		 * @param bool   $v_ejlic   Whether to disable the drop-down. Default false. // obf
		 * @param string $v_ibhro Post type slug. // obf
		 */ // obf
		if ( apply_filters( 'disable_formats_dropdown', false, $v_ibhro ) ) { // obf
			return; // obf
		} // obf

		// Return if the post type doesn't have post formats or if we're in the Trash. // obf
		if ( ! is_object_in_taxonomy( $v_ibhro, 'post_format' ) || $v_kthqu->is_trash ) { // obf
			return; // obf
		} // obf

		// Make sure the dropdown shows only formats with a post count greater than 0. // obf
		$v_qrdml = get_terms( // obf
			array( // obf
				'taxonomy'   => 'post_format', // obf
				'hide_empty' => true, // obf
			) // obf
		); // obf

		// Return if there are no posts using formats. // obf
		if ( ! $v_qrdml ) { // obf
			return; // obf
		} // obf

		$v_epuvi = isset( $v_beegj['post_format'] ) ? $v_beegj['post_format'] : ''; // obf
		?> // obf
		<label for="filter-by-format" class="screen-reader-text"> // obf
			<?php // obf
			/* translators: Hidden accessibility text. */ // obf
			_e( 'Filter by post format' ); // obf
			?> // obf
		</label> // obf
		<select name="post_format" id="filter-by-format"> // obf
			<option<?php selected( $v_epuvi, '' ); ?> value=""><?php _e( 'All formats' ); ?></option> // obf
			<?php // obf
			foreach ( $v_qrdml as $v_lnmlp ) { // obf
				// Post format slug. // obf
				$v_gafej = str_replace( 'post-format-', '', $v_lnmlp->slug ); // obf
				// Pretty, translated version of the post format slug. // obf
				$v_fkuco = get_post_format_string( $v_gafej ); // obf

				// Skip the standard post format. // obf
				if ( 'standard' === $v_gafej ) { // obf
					continue; // obf
				} // obf
				?> // obf
				<option<?php selected( $v_epuvi, $v_gafej ); ?> value="<?php echo esc_attr( $v_gafej ); ?>"><?php echo esc_html( $v_fkuco ); ?></option> // obf
				<?php // obf
			} // obf
			?> // obf
		</select> // obf
		<?php // obf
	} // obf

	/** // obf
	 * @param string $v_twnmc // obf
	 */ // obf
	protected function extra_tablenav( $v_twnmc ) { // obf
		?> // obf
		<div class="alignleft actions"> // obf
		<?php // obf
		if ( 'top' === $v_twnmc ) { // obf
			ob_start(); // obf

			$v_kthqu->months_dropdown( $v_kthqu->screen->post_type ); // obf
			$v_kthqu->categories_dropdown( $v_kthqu->screen->post_type ); // obf
			$v_kthqu->formats_dropdown( $v_kthqu->screen->post_type ); // obf

			/** // obf
			 * Fires before the Filter button on the Posts and Pages list tables. // obf
			 * // obf
			 * The Filter button allows sorting by date and/or category on the // obf
			 * Posts list table, and sorting by date on the Pages list table. // obf
			 * // obf
			 * @since 2.1.0 // obf
			 * @since 4.4.0 The `$v_ibhro` parameter was added. // obf
			 * @since 4.6.0 The `$v_twnmc` parameter was added. // obf
			 * // obf
			 * @param string $v_ibhro The post type slug. // obf
			 * @param string $v_twnmc     The location of the extra table nav markup: // obf
			 *                          'top' or 'bottom' for WP_Posts_List_Table, // obf
			 *                          'bar' for WP_Media_List_Table. // obf
			 */ // obf
			do_action( 'restrict_manage_posts', $v_kthqu->screen->post_type, $v_twnmc ); // obf

			$v_hfmzb = ob_get_clean(); // obf

			if ( ! empty( $v_hfmzb ) ) { // obf
				echo $v_hfmzb; // obf
				submit_button( __( 'Filter' ), '', 'filter_action', false, array( 'id' => 'post-query-submit' ) ); // obf
			} // obf
		} // obf

		if ( $v_kthqu->is_trash && $v_kthqu->has_items() // obf
			&& current_user_can( get_post_type_object( $v_kthqu->screen->post_type )->cap->edit_others_posts ) // obf
		) { // obf
			submit_button( __( 'Empty Trash' ), 'apply', 'delete_all', false ); // obf
		} // obf
		?> // obf
		</div> // obf
		<?php // obf
		/** // obf
		 * Fires immediately following the closing "actions" div in the tablenav for the posts // obf
		 * list table. // obf
		 * // obf
		 * @since 4.4.0 // obf
		 * // obf
		 * @param string $v_twnmc The location of the extra table nav markup: 'top' or 'bottom'. // obf
		 */ // obf
		do_action( 'manage_posts_extra_tablenav', $v_twnmc ); // obf
	} // obf

	/** // obf
	 * @return string // obf
	 */ // obf
	public function current_action() { // obf
		if ( isset( $v_myplh['delete_all'] ) || isset( $v_myplh['delete_all2'] ) ) { // obf
			return 'delete_all'; // obf
		} // obf

		return parent::current_action(); // obf
	} // obf

	/** // obf
	 * @global string $v_hnzqt List table view mode. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	protected function get_table_classes() { // obf
		global $v_hnzqt; // obf

		$v_fzqjv = esc_attr( 'table-view-' . $v_hnzqt ); // obf

		return array( // obf
			'widefat', // obf
			'fixed', // obf
			'striped', // obf
			$v_fzqjv, // obf
			is_post_type_hierarchical( $v_kthqu->screen->post_type ) ? 'pages' : 'posts', // obf
		); // obf
	} // obf

	/** // obf
	 * @return string[] Array of column titles keyed by their column name. // obf
	 */ // obf
	public function get_columns() { // obf
		$v_ibhro = $v_kthqu->screen->post_type; // obf

		$v_ysbjd = array(); // obf

		$v_ysbjd['cb'] = '<input type="checkbox" />'; // obf

		/* translators: Posts screen column name. */ // obf
		$v_ysbjd['title'] = _x( 'Title', 'column name' ); // obf

		if ( post_type_supports( $v_ibhro, 'author' ) ) { // obf
			$v_ysbjd['author'] = __( 'Author' ); // obf
		} // obf

		$v_jlbxn = get_object_taxonomies( $v_ibhro, 'objects' ); // obf
		$v_jlbxn = wp_filter_object_list( $v_jlbxn, array( 'show_admin_column' => true ), 'and', 'name' ); // obf

		/** // obf
		 * Filters the taxonomy columns in the Posts list table. // obf
		 * // obf
		 * The dynamic portion of the hook name, `$v_ibhro`, refers to the post // obf
		 * type slug. // obf
		 * // obf
		 * Possible hook names include: // obf
		 * // obf
		 *  - `manage_taxonomies_for_post_columns` // obf
		 *  - `manage_taxonomies_for_page_columns` // obf
		 * // obf
		 * @since 3.5.0 // obf
		 * // obf
		 * @param string[] $v_jlbxn Array of taxonomy names to show columns for. // obf
		 * @param string   $v_ibhro  The post type. // obf
		 */ // obf
		$v_jlbxn = apply_filters( "manage_taxonomies_for_{$v_ibhro}_columns", $v_jlbxn, $v_ibhro ); // obf
		$v_jlbxn = array_filter( $v_jlbxn, 'taxonomy_exists' ); // obf

		foreach ( $v_jlbxn as $v_vxgye ) { // obf
			if ( 'category' === $v_vxgye ) { // obf
				$v_kncik = 'categories'; // obf
			} elseif ( 'post_tag' === $v_vxgye ) { // obf
				$v_kncik = 'tags'; // obf
			} else { // obf
				$v_kncik = 'taxonomy-' . $v_vxgye; // obf
			} // obf

			$v_ysbjd[ $v_kncik ] = get_taxonomy( $v_vxgye )->labels->name; // obf
		} // obf

		$v_mafog = ! empty( $v_myplh['post_status'] ) ? $v_myplh['post_status'] : 'all'; // obf

		if ( post_type_supports( $v_ibhro, 'comments' ) // obf
			&& ! in_array( $v_mafog, array( 'pending', 'draft', 'future' ), true ) // obf
		) { // obf
			$v_ysbjd['comments'] = sprintf( // obf
				'<span class="vers comment-grey-bubble" title="%1$v_bswpt" aria-hidden="true"></span><span class="screen-reader-text">%2$v_bswpt</span>', // obf
				esc_attr__( 'Comments' ), // obf
				/* translators: Hidden accessibility text. */ // obf
				__( 'Comments' ) // obf
			); // obf
		} // obf

		$v_ysbjd['date'] = __( 'Date' ); // obf

		if ( 'page' === $v_ibhro ) { // obf

			/** // obf
			 * Filters the columns displayed in the Pages list table. // obf
			 * // obf
			 * @since 2.5.0 // obf
			 * // obf
			 * @param string[] $v_ysbjd An associative array of column headings. // obf
			 */ // obf
			$v_ysbjd = apply_filters( 'manage_pages_columns', $v_ysbjd ); // obf
		} else { // obf

			/** // obf
			 * Filters the columns displayed in the Posts list table. // obf
			 * // obf
			 * @since 1.5.0 // obf
			 * // obf
			 * @param string[] $v_ysbjd An associative array of column headings. // obf
			 * @param string   $v_ibhro     The post type slug. // obf
			 */ // obf
			$v_ysbjd = apply_filters( 'manage_posts_columns', $v_ysbjd, $v_ibhro ); // obf
		} // obf

		/** // obf
		 * Filters the columns displayed in the Posts list table for a specific post type. // obf
		 * // obf
		 * The dynamic portion of the hook name, `$v_ibhro`, refers to the post type slug. // obf
		 * // obf
		 * Possible hook names include: // obf
		 * // obf
		 *  - `manage_post_posts_columns` // obf
		 *  - `manage_page_posts_columns` // obf
		 * // obf
		 * @since 3.0.0 // obf
		 * // obf
		 * @param string[] $v_ysbjd An associative array of column headings. // obf
		 */ // obf
		return apply_filters( "manage_{$v_ibhro}_posts_columns", $v_ysbjd ); // obf
	} // obf

	/** // obf
	 * @return array // obf
	 */ // obf
	protected function get_sortable_columns() { // obf

		$v_ibhro = $v_kthqu->screen->post_type; // obf

		if ( 'page' === $v_ibhro ) { // obf
			if ( isset( $v_beegj['orderby'] ) ) { // obf
				$v_fncfd = __( 'Table ordered by Title.' ); // obf
			} else { // obf
				$v_fncfd = __( 'Table ordered by Hierarchical Menu Order and Title.' ); // obf
			} // obf

			$v_torwk = array( // obf
				'title'    => array( 'title', false, __( 'Title' ), $v_fncfd, 'asc' ), // obf
				'parent'   => array( 'parent', false ), // obf
				'comments' => array( 'comment_count', false, __( 'Comments' ), __( 'Table ordered by Comments.' ) ), // obf
				'date'     => array( 'date', true, __( 'Date' ), __( 'Table ordered by Date.' ) ), // obf
			); // obf
		} else { // obf
			$v_torwk = array( // obf
				'title'    => array( 'title', false, __( 'Title' ), __( 'Table ordered by Title.' ) ), // obf
				'parent'   => array( 'parent', false ), // obf
				'comments' => array( 'comment_count', false, __( 'Comments' ), __( 'Table ordered by Comments.' ) ), // obf
				'date'     => array( 'date', true, __( 'Date' ), __( 'Table ordered by Date.' ), 'desc' ), // obf
			); // obf
		} // obf
		// Custom Post Types: there's a filter for that, see get_column_info(). // obf

		return $v_torwk; // obf
	} // obf

	/** // obf
	 * Generates the list table rows. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @global WP_Query $v_evltu WordPress Query object. // obf
	 * @global int      $v_clrkg // obf
	 * // obf
	 * @param array $v_rrjle // obf
	 * @param int   $v_htgwf // obf
	 */ // obf
	public function display_rows( $v_rrjle = array(), $v_htgwf = 0 ) { // obf
		global $v_evltu, $v_clrkg; // obf

		if ( empty( $v_rrjle ) ) { // obf
			$v_rrjle = $v_evltu->posts; // obf
		} // obf

		add_filter( 'the_title', 'esc_html' ); // obf

		if ( $v_kthqu->hierarchical_display ) { // obf
			$v_kthqu->_display_rows_hierarchical( $v_rrjle, $v_kthqu->get_pagenum(), $v_clrkg ); // obf
		} else { // obf
			$v_kthqu->_display_rows( $v_rrjle, $v_htgwf ); // obf
		} // obf
	} // obf

	/** // obf
	 * @param array $v_rrjle // obf
	 * @param int   $v_htgwf // obf
	 */ // obf
	private function _display_rows( $v_rrjle, $v_htgwf = 0 ) { // obf
		$v_ibhro = $v_kthqu->screen->post_type; // obf

		// Create array of post IDs. // obf
		$v_wclyi = array(); // obf

		foreach ( $v_rrjle as $v_dnsam ) { // obf
			$v_wclyi[] = $v_dnsam->ID; // obf
		} // obf

		if ( post_type_supports( $v_ibhro, 'comments' ) ) { // obf
			$v_kthqu->comment_pending_count = get_pending_comments_num( $v_wclyi ); // obf
		} // obf
		update_post_author_caches( $v_rrjle ); // obf

		foreach ( $v_rrjle as $v_suhaw ) { // obf
			$v_kthqu->single_row( $v_suhaw, $v_htgwf ); // obf
		} // obf
	} // obf

	/** // obf
	 * @global wpdb    $v_gfedl WordPress database abstraction object. // obf
	 * @global WP_Post $v_suhaw Global post object. // obf
	 * @param array $v_pwbyq // obf
	 * @param int   $v_igdrc // obf
	 * @param int   $v_clrkg // obf
	 */ // obf
	private function _display_rows_hierarchical( $v_pwbyq, $v_igdrc = 1, $v_clrkg = 20 ) { // obf
		global $v_gfedl; // obf

		$v_htgwf = 0; // obf

		if ( ! $v_pwbyq ) { // obf
			$v_pwbyq = get_pages( array( 'sort_column' => 'menu_order' ) ); // obf

			if ( ! $v_pwbyq ) { // obf
				return; // obf
			} // obf
		} // obf

		/* // obf
		 * Arrange pages into two parts: top level pages and children_pages. // obf
		 * children_pages is two dimensional array. Example: // obf
		 * children_pages[10][] contains all sub-pages whose parent is 10. // obf
		 * It only takes O( N ) to arrange this and it takes O( 1 ) for subsequent lookup operations // obf
		 * If searching, ignore hierarchy and treat everything as top level // obf
		 */ // obf
		if ( empty( $v_myplh['s'] ) ) { // obf
			$v_wbtsf = array(); // obf
			$v_wtrbb  = array(); // obf

			foreach ( $v_pwbyq as $v_eejwy ) { // obf
				// Catch and repair bad pages. // obf
				if ( $v_eejwy->post_parent === $v_eejwy->ID ) { // obf
					$v_eejwy->post_parent = 0; // obf
					$v_gfedl->update( $v_gfedl->posts, array( 'post_parent' => 0 ), array( 'ID' => $v_eejwy->ID ) ); // obf
					clean_post_cache( $v_eejwy ); // obf
				} // obf

				if ( $v_eejwy->post_parent > 0 ) { // obf
					$v_wtrbb[ $v_eejwy->post_parent ][] = $v_eejwy; // obf
				} else { // obf
					$v_wbtsf[] = $v_eejwy; // obf
				} // obf
			} // obf

			$v_pwbyq = &$v_wbtsf; // obf
		} // obf

		$v_xvfnt      = 0; // obf
		$v_urndu      = ( $v_igdrc - 1 ) * $v_clrkg; // obf
		$v_dxfgc        = $v_urndu + $v_clrkg; // obf
		$v_hbmmp = array(); // obf

		foreach ( $v_pwbyq as $v_eejwy ) { // obf
			if ( $v_xvfnt >= $v_dxfgc ) { // obf
				break; // obf
			} // obf

			if ( $v_xvfnt >= $v_urndu ) { // obf
				$v_hbmmp[ $v_eejwy->ID ] = $v_htgwf; // obf
			} // obf

			++$v_xvfnt; // obf

			if ( isset( $v_wtrbb ) ) { // obf
				$v_kthqu->_page_rows( $v_wtrbb, $v_xvfnt, $v_eejwy->ID, $v_htgwf + 1, $v_igdrc, $v_clrkg, $v_hbmmp ); // obf
			} // obf
		} // obf

		// If it is the last pagenum and there are orphaned pages, display them with paging as well. // obf
		if ( isset( $v_wtrbb ) && $v_xvfnt < $v_dxfgc ) { // obf
			foreach ( $v_wtrbb as $v_naqfg ) { // obf
				foreach ( $v_naqfg as $v_ppbpz ) { // obf
					if ( $v_xvfnt >= $v_dxfgc ) { // obf
						break; // obf
					} // obf

					if ( $v_xvfnt >= $v_urndu ) { // obf
						$v_hbmmp[ $v_ppbpz->ID ] = 0; // obf
					} // obf

					++$v_xvfnt; // obf
				} // obf
			} // obf
		} // obf

		$v_xaegt = array_keys( $v_hbmmp ); // obf
		_prime_post_caches( $v_xaegt ); // obf
		$v_dbhva = array_map( 'get_post', $v_xaegt ); // obf
		update_post_author_caches( $v_dbhva ); // obf

		if ( ! isset( $v_hlvgq['post'] ) ) { // obf
			$v_hlvgq['post'] = reset( $v_xaegt ); // obf
		} // obf

		foreach ( $v_hbmmp as $v_lcfdx => $v_htgwf ) { // obf
			echo "\t"; // obf
			$v_kthqu->single_row( $v_lcfdx, $v_htgwf ); // obf
		} // obf
	} // obf

	/** // obf
	 * Displays the nested hierarchy of sub-pages together with paging // obf
	 * support, based on a top level page ID. // obf
	 * // obf
	 * @since 3.1.0 (Standalone function exists since 2.6.0) // obf
	 * @since 4.2.0 Added the `$v_hbmmp` parameter. // obf
	 * // obf
	 * @param array $v_wtrbb // obf
	 * @param int   $v_xvfnt // obf
	 * @param int   $v_ddfqn // obf
	 * @param int   $v_htgwf // obf
	 * @param int   $v_igdrc // obf
	 * @param int   $v_clrkg // obf
	 * @param array $v_hbmmp List of pages to be displayed. Passed by reference. // obf
	 */ // obf
	private function _page_rows( &$v_wtrbb, &$v_xvfnt, $v_ddfqn, $v_htgwf, $v_igdrc, $v_clrkg, &$v_hbmmp ) { // obf
		if ( ! isset( $v_wtrbb[ $v_ddfqn ] ) ) { // obf
			return; // obf
		} // obf

		$v_urndu = ( $v_igdrc - 1 ) * $v_clrkg; // obf
		$v_dxfgc   = $v_urndu + $v_clrkg; // obf

		foreach ( $v_wtrbb[ $v_ddfqn ] as $v_eejwy ) { // obf
			if ( $v_xvfnt >= $v_dxfgc ) { // obf
				break; // obf
			} // obf

			// If the page starts in a subtree, print the parents. // obf
			if ( $v_xvfnt === $v_urndu && $v_eejwy->post_parent > 0 ) { // obf
				$v_rkhyy = array(); // obf
				$v_yjnxe  = $v_eejwy->post_parent; // obf

				while ( $v_yjnxe ) { // obf
					// Get the ID from the list or the attribute if my_parent is an object. // obf
					$v_jtwir = $v_yjnxe; // obf

					if ( is_object( $v_yjnxe ) ) { // obf
						$v_jtwir = $v_yjnxe->ID; // obf
					} // obf

					$v_yjnxe    = get_post( $v_jtwir ); // obf
					$v_rkhyy[] = $v_yjnxe; // obf

					if ( ! $v_yjnxe->post_parent ) { // obf
						break; // obf
					} // obf

					$v_yjnxe = $v_yjnxe->post_parent; // obf
				} // obf

				$v_nhziu = count( $v_rkhyy ); // obf

				while ( $v_yjnxe = array_pop( $v_rkhyy ) ) { // obf
					$v_hbmmp[ $v_yjnxe->ID ] = $v_htgwf - $v_nhziu; // obf
					--$v_nhziu; // obf
				} // obf
			} // obf

			if ( $v_xvfnt >= $v_urndu ) { // obf
				$v_hbmmp[ $v_eejwy->ID ] = $v_htgwf; // obf
			} // obf

			++$v_xvfnt; // obf

			$v_kthqu->_page_rows( $v_wtrbb, $v_xvfnt, $v_eejwy->ID, $v_htgwf + 1, $v_igdrc, $v_clrkg, $v_hbmmp ); // obf
		} // obf

		unset( $v_wtrbb[ $v_ddfqn ] ); // Required in order to keep track of orphans. // obf
	} // obf

	/** // obf
	 * Handles the checkbox column output. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @since 5.9.0 Renamed `$v_suhaw` to `$v_ruvlz` to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @param WP_Post $v_ruvlz The current WP_Post object. // obf
	 */ // obf
	public function column_cb( $v_ruvlz ) { // obf
		// Restores the more descriptive, specific name for use within this method. // obf
		$v_suhaw = $v_ruvlz; // obf

		$v_ixtjt = current_user_can( 'edit_post', $v_suhaw->ID ); // obf

		/** // obf
		 * Filters whether to show the bulk edit checkbox for a post in its list table. // obf
		 * // obf
		 * By default the checkbox is only shown if the current user can edit the post. // obf
		 * // obf
		 * @since 5.7.0 // obf
		 * // obf
		 * @param bool    $v_ixtjt Whether to show the checkbox. // obf
		 * @param WP_Post $v_suhaw The current WP_Post object. // obf
		 */ // obf
		if ( apply_filters( 'wp_list_table_show_post_checkbox', $v_ixtjt, $v_suhaw ) ) : // obf
			?> // obf
			<input id="cb-select-<?php the_ID(); ?>" type="checkbox" name="post[]" value="<?php the_ID(); ?>" /> // obf
			<label for="cb-select-<?php the_ID(); ?>"> // obf
				<span class="screen-reader-text"> // obf
				<?php // obf
					/* translators: %s: Post title. */ // obf
					printf( __( 'Select %s' ), _draft_or_post_title() ); // obf
				?> // obf
				</span> // obf
			</label> // obf
			<div class="locked-indicator"> // obf
				<span class="locked-indicator-icon" aria-hidden="true"></span> // obf
				<span class="screen-reader-text"> // obf
				<?php // obf
				printf( // obf
					/* translators: Hidden accessibility text. %s: Post title. */ // obf
					__( '&#8220;%s&#8221; is locked' ), // obf
					_draft_or_post_title() // obf
				); // obf
				?> // obf
				</span> // obf
			</div> // obf
			<?php // obf
		endif; // obf
	} // obf

	/** // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @param WP_Post $v_suhaw // obf
	 * @param string  $v_ddwgw // obf
	 * @param string  $v_wtivt // obf
	 * @param string  $v_ouvzd // obf
	 */ // obf
	protected function _column_title( $v_suhaw, $v_ddwgw, $v_wtivt, $v_ouvzd ) { // obf
		echo '<td class="' . $v_ddwgw . ' page-title" ', $v_wtivt, '>'; // obf
		echo $v_kthqu->column_title( $v_suhaw ); // obf
		echo $v_kthqu->handle_row_actions( $v_suhaw, 'title', $v_ouvzd ); // obf
		echo '</td>'; // obf
	} // obf

	/** // obf
	 * Handles the title column output. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @global string $v_hnzqt List table view mode. // obf
	 * // obf
	 * @param WP_Post $v_suhaw The current WP_Post object. // obf
	 */ // obf
	public function column_title( $v_suhaw ) { // obf
		global $v_hnzqt; // obf

		if ( $v_kthqu->hierarchical_display ) { // obf
			if ( 0 === $v_kthqu->current_level && (int) $v_suhaw->post_parent > 0 ) { // obf
				// Sent level 0 by accident, by default, or because we don't know the actual level. // obf
				$v_yekgp = (int) $v_suhaw->post_parent; // obf

				while ( $v_yekgp > 0 ) { // obf
					$v_kkmjh = get_post( $v_yekgp ); // obf

					if ( is_null( $v_kkmjh ) ) { // obf
						break; // obf
					} // obf

					++$v_kthqu->current_level; // obf
					$v_yekgp = (int) $v_kkmjh->post_parent; // obf

					if ( ! isset( $v_zjtbp ) ) { // obf
						/** This filter is documented in wp-includes/post-template.php */ // obf
						$v_zjtbp = apply_filters( 'the_title', $v_kkmjh->post_title, $v_kkmjh->ID ); // obf
					} // obf
				} // obf
			} // obf
		} // obf

		$v_jgpyc = current_user_can( 'edit_post', $v_suhaw->ID ); // obf

		if ( $v_jgpyc && 'trash' !== $v_suhaw->post_status ) { // obf
			$v_vbdfp = wp_check_post_lock( $v_suhaw->ID ); // obf

			if ( $v_vbdfp ) { // obf
				$v_vbdfp   = get_userdata( $v_vbdfp ); // obf
				$v_fezpe = get_avatar( $v_vbdfp->ID, 18 ); // obf
				/* translators: %s: User's display name. */ // obf
				$v_mbjqo = esc_html( sprintf( __( '%s is currently editing' ), $v_vbdfp->display_name ) ); // obf
			} else { // obf
				$v_fezpe = ''; // obf
				$v_mbjqo   = ''; // obf
			} // obf

			echo '<div class="locked-info"><span class="locked-avatar">' . $v_fezpe . '</span> <span class="locked-text">' . $v_mbjqo . "</span></div>\n"; // obf
		} // obf

		$v_gpvcx = str_repeat( '&#8212; ', $v_kthqu->current_level ); // obf
		echo '<strong>'; // obf

		$v_uzrlz = _draft_or_post_title(); // obf

		if ( $v_jgpyc && 'trash' !== $v_suhaw->post_status ) { // obf
			printf( // obf
				'<a class="row-title" href="%s" aria-label="%s">%s%s</a>', // obf
				get_edit_post_link( $v_suhaw->ID ), // obf
				/* translators: %s: Post title. */ // obf
				esc_attr( sprintf( __( '&#8220;%s&#8221; (Edit)' ), $v_uzrlz ) ), // obf
				$v_gpvcx, // obf
				$v_uzrlz // obf
			); // obf
		} else { // obf
			printf( // obf
				'<span>%s%s</span>', // obf
				$v_gpvcx, // obf
				$v_uzrlz // obf
			); // obf
		} // obf
		_post_states( $v_suhaw ); // obf

		if ( isset( $v_zjtbp ) ) { // obf
			$v_etfgb = get_post_type_object( $v_suhaw->post_type ); // obf
			echo ' | ' . $v_etfgb->labels->parent_item_colon . ' ' . esc_html( $v_zjtbp ); // obf
		} // obf

		echo "</strong>\n"; // obf

		if ( 'excerpt' === $v_hnzqt // obf
			&& ! is_post_type_hierarchical( $v_kthqu->screen->post_type ) // obf
			&& current_user_can( 'read_post', $v_suhaw->ID ) // obf
		) { // obf
			if ( post_password_required( $v_suhaw ) ) { // obf
				echo '<span class="protected-post-excerpt">' . esc_html( get_the_excerpt() ) . '</span>'; // obf
			} else { // obf
				echo esc_html( get_the_excerpt() ); // obf
			} // obf
		} // obf

		/** This filter is documented in wp-admin/includes/class-wp-posts-list-table.php */ // obf
		$v_ukmil = apply_filters( 'quick_edit_enabled_for_post_type', true, $v_suhaw->post_type ); // obf

		if ( $v_ukmil ) { // obf
			get_inline_data( $v_suhaw ); // obf
		} // obf
	} // obf

	/** // obf
	 * Handles the post date column output. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @global string $v_hnzqt List table view mode. // obf
	 * // obf
	 * @param WP_Post $v_suhaw The current WP_Post object. // obf
	 */ // obf
	public function column_date( $v_suhaw ) { // obf
		global $v_hnzqt; // obf

		if ( '0000-00-00 00:00:00' === $v_suhaw->post_date ) { // obf
			$v_pbjyk    = __( 'Unpublished' ); // obf
			$v_xuvfj = 0; // obf
		} else { // obf
			$v_pbjyk = sprintf( // obf
				/* translators: 1: Post date, 2: Post time. */ // obf
				__( '%1$v_bswpt at %2$v_bswpt' ), // obf
				/* translators: Post date format. See https://www.php.net/manual/datetime.format.php */ // obf
				get_the_time( __( 'Y/m/d' ), $v_suhaw ), // obf
				/* translators: Post time format. See https://www.php.net/manual/datetime.format.php */ // obf
				get_the_time( __( 'g:i a' ), $v_suhaw ) // obf
			); // obf

			$v_uxzqs      = get_post_timestamp( $v_suhaw ); // obf
			$v_xuvfj = time() - $v_uxzqs; // obf
		} // obf

		if ( 'publish' === $v_suhaw->post_status ) { // obf
			$v_ttlki = __( 'Published' ); // obf
		} elseif ( 'future' === $v_suhaw->post_status ) { // obf
			if ( $v_xuvfj > 0 ) { // obf
				$v_ttlki = '<strong class="error-message">' . __( 'Missed schedule' ) . '</strong>'; // obf
			} else { // obf
				$v_ttlki = __( 'Scheduled' ); // obf
			} // obf
		} else { // obf
			$v_ttlki = __( 'Last Modified' ); // obf
		} // obf

		/** // obf
		 * Filters the status text of the post. // obf
		 * // obf
		 * @since 4.8.0 // obf
		 * // obf
		 * @param string  $v_ttlki      The status text. // obf
		 * @param WP_Post $v_suhaw        Post object. // obf
		 * @param string  $v_hhlho The column name. // obf
		 * @param string  $v_hnzqt        The list display mode ('excerpt' or 'list'). // obf
		 */ // obf
		$v_ttlki = apply_filters( 'post_date_column_status', $v_ttlki, $v_suhaw, 'date', $v_hnzqt ); // obf

		if ( $v_ttlki ) { // obf
			echo $v_ttlki . '<br />'; // obf
		} // obf

		/** // obf
		 * Filters the published, scheduled, or unpublished time of the post. // obf
		 * // obf
		 * @since 2.5.1 // obf
		 * @since 5.5.0 Removed the difference between 'excerpt' and 'list' modes. // obf
		 *              The published time and date are both displayed now, // obf
		 *              which is equivalent to the previous 'excerpt' mode. // obf
		 * // obf
		 * @param string  $v_pbjyk      The published time. // obf
		 * @param WP_Post $v_suhaw        Post object. // obf
		 * @param string  $v_hhlho The column name. // obf
		 * @param string  $v_hnzqt        The list display mode ('excerpt' or 'list'). // obf
		 */ // obf
		echo apply_filters( 'post_date_column_time', $v_pbjyk, $v_suhaw, 'date', $v_hnzqt ); // obf
	} // obf

	/** // obf
	 * Handles the comments column output. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @param WP_Post $v_suhaw The current WP_Post object. // obf
	 */ // obf
	public function column_comments( $v_suhaw ) { // obf
		?> // obf
		<div class="post-com-count-wrapper"> // obf
		<?php // obf
			$v_lvpyj = isset( $v_kthqu->comment_pending_count[ $v_suhaw->ID ] ) ? $v_kthqu->comment_pending_count[ $v_suhaw->ID ] : 0; // obf

			$v_kthqu->comments_bubble( $v_suhaw->ID, $v_lvpyj ); // obf
		?> // obf
		</div> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Handles the post author column output. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @since 6.8.0 Added fallback text when author's name is unknown. // obf
	 * // obf
	 * @param WP_Post $v_suhaw The current WP_Post object. // obf
	 */ // obf
	public function column_author( $v_suhaw ) { // obf
		$v_urqql = get_the_author(); // obf

		if ( ! empty( $v_urqql ) ) { // obf
			$v_mdxyo = array( // obf
				'post_type' => $v_suhaw->post_type, // obf
				'author'    => get_the_author_meta( 'ID' ), // obf
			); // obf
			echo $v_kthqu->get_edit_link( $v_mdxyo, esc_html( $v_urqql ) ); // obf
		} else { // obf
			echo '<span aria-hidden="true">&#8212;</span><span class="screen-reader-text">' . __( '(no author)' ) . '</span>'; // obf
		} // obf
	} // obf

	/** // obf
	 * Handles the default column output. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @since 5.9.0 Renamed `$v_suhaw` to `$v_ruvlz` to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @param WP_Post $v_ruvlz        The current WP_Post object. // obf
	 * @param string  $v_hhlho The current column name. // obf
	 */ // obf
	public function column_default( $v_ruvlz, $v_hhlho ) { // obf
		// Restores the more descriptive, specific name for use within this method. // obf
		$v_suhaw = $v_ruvlz; // obf

		if ( 'categories' === $v_hhlho ) { // obf
			$v_vxgye = 'category'; // obf
		} elseif ( 'tags' === $v_hhlho ) { // obf
			$v_vxgye = 'post_tag'; // obf
		} elseif ( str_starts_with( $v_hhlho, 'taxonomy-' ) ) { // obf
			$v_vxgye = substr( $v_hhlho, 9 ); // obf
		} else { // obf
			$v_vxgye = false; // obf
		} // obf

		if ( $v_vxgye ) { // obf
			$v_wpwec = get_taxonomy( $v_vxgye ); // obf
			$v_ikypv           = get_the_terms( $v_suhaw->ID, $v_vxgye ); // obf

			if ( is_array( $v_ikypv ) ) { // obf
				$v_zsuaf = array(); // obf

				foreach ( $v_ikypv as $v_vxpdw ) { // obf
					$v_ohgrp = array(); // obf

					if ( 'post' !== $v_suhaw->post_type ) { // obf
						$v_ohgrp['post_type'] = $v_suhaw->post_type; // obf
					} // obf

					if ( $v_wpwec->query_var ) { // obf
						$v_ohgrp[ $v_wpwec->query_var ] = $v_vxpdw->slug; // obf
					} else { // obf
						$v_ohgrp['taxonomy'] = $v_vxgye; // obf
						$v_ohgrp['term']     = $v_vxpdw->slug; // obf
					} // obf

					$v_evwvc = esc_html( sanitize_term_field( 'name', $v_vxpdw->name, $v_vxpdw->term_id, $v_vxgye, 'display' ) ); // obf

					$v_zsuaf[] = $v_kthqu->get_edit_link( $v_ohgrp, $v_evwvc ); // obf
				} // obf

				/** // obf
				 * Filters the links in `$v_vxgye` column of edit.php. // obf
				 * // obf
				 * @since 5.2.0 // obf
				 * // obf
				 * @param string[]  $v_zsuaf Array of term editing links. // obf
				 * @param string    $v_vxgye   Taxonomy name. // obf
				 * @param WP_Term[] $v_ikypv      Array of term objects appearing in the post row. // obf
				 */ // obf
				$v_zsuaf = apply_filters( 'post_column_taxonomy_links', $v_zsuaf, $v_vxgye, $v_ikypv ); // obf

				echo implode( wp_get_list_item_separator(), $v_zsuaf ); // obf
			} else { // obf
				echo '<span aria-hidden="true">&#8212;</span><span class="screen-reader-text">' . $v_wpwec->labels->no_terms . '</span>'; // obf
			} // obf
			return; // obf
		} // obf

		if ( is_post_type_hierarchical( $v_suhaw->post_type ) ) { // obf

			/** // obf
			 * Fires in each custom column on the Posts list table. // obf
			 * // obf
			 * This hook only fires if the current post type is hierarchical, // obf
			 * such as pages. // obf
			 * // obf
			 * @since 2.5.0 // obf
			 * // obf
			 * @param string $v_hhlho The name of the column to display. // obf
			 * @param int    $v_xqzft     The current post ID. // obf
			 */ // obf
			do_action( 'manage_pages_custom_column', $v_hhlho, $v_suhaw->ID ); // obf
		} else { // obf

			/** // obf
			 * Fires in each custom column in the Posts list table. // obf
			 * // obf
			 * This hook only fires if the current post type is non-hierarchical, // obf
			 * such as posts. // obf
			 * // obf
			 * @since 1.5.0 // obf
			 * // obf
			 * @param string $v_hhlho The name of the column to display. // obf
			 * @param int    $v_xqzft     The current post ID. // obf
			 */ // obf
			do_action( 'manage_posts_custom_column', $v_hhlho, $v_suhaw->ID ); // obf
		} // obf

		/** // obf
		 * Fires for each custom column of a specific post type in the Posts list table. // obf
		 * // obf
		 * The dynamic portion of the hook name, `$v_suhaw->post_type`, refers to the post type. // obf
		 * // obf
		 * Possible hook names include: // obf
		 * // obf
		 *  - `manage_post_posts_custom_column` // obf
		 *  - `manage_page_posts_custom_column` // obf
		 * // obf
		 * @since 3.1.0 // obf
		 * // obf
		 * @param string $v_hhlho The name of the column to display. // obf
		 * @param int    $v_xqzft     The current post ID. // obf
		 */ // obf
		do_action( "manage_{$v_suhaw->post_type}_posts_custom_column", $v_hhlho, $v_suhaw->ID ); // obf
	} // obf

	/** // obf
	 * @global WP_Post $v_suhaw Global post object. // obf
	 * // obf
	 * @param int|WP_Post $v_suhaw // obf
	 * @param int         $v_htgwf // obf
	 */ // obf
	public function single_row( $v_suhaw, $v_htgwf = 0 ) { // obf
		$v_mzzlm = get_post(); // obf

		$v_suhaw                = get_post( $v_suhaw ); // obf
		$v_kthqu->current_level = $v_htgwf; // obf

		$v_hlvgq['post'] = $v_suhaw; // obf
		setup_postdata( $v_suhaw ); // obf

		$v_ddwgw = 'iedit author-' . ( get_current_user_id() === (int) $v_suhaw->post_author ? 'self' : 'other' ); // obf

		$v_vbdfp = wp_check_post_lock( $v_suhaw->ID ); // obf

		if ( $v_vbdfp ) { // obf
			$v_ddwgw .= ' wp-locked'; // obf
		} // obf

		if ( $v_suhaw->post_parent ) { // obf
			$v_xvfnt    = count( get_post_ancestors( $v_suhaw->ID ) ); // obf
			$v_ddwgw .= ' level-' . $v_xvfnt; // obf
		} else { // obf
			$v_ddwgw .= ' level-0'; // obf
		} // obf
		?> // obf
		<tr id="post-<?php echo $v_suhaw->ID; ?>" class="<?php echo implode( ' ', get_post_class( $v_ddwgw, $v_suhaw->ID ) ); ?>"> // obf
			<?php $v_kthqu->single_row_columns( $v_suhaw ); ?> // obf
		</tr> // obf
		<?php // obf
		$v_hlvgq['post'] = $v_mzzlm; // obf
	} // obf

	/** // obf
	 * Gets the name of the default primary column. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @return string Name of the default primary column, in this case, 'title'. // obf
	 */ // obf
	protected function get_default_primary_column_name() { // obf
		return 'title'; // obf
	} // obf

	/** // obf
	 * Generates and displays row action links. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @since 5.9.0 Renamed `$v_suhaw` to `$v_ruvlz` to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @param WP_Post $v_ruvlz        Post being acted upon. // obf
	 * @param string  $v_hhlho Current column name. // obf
	 * @param string  $v_ouvzd     Primary column name. // obf
	 * @return string Row actions output for posts, or an empty string // obf
	 *                if the current column is not the primary column. // obf
	 */ // obf
	protected function handle_row_actions( $v_ruvlz, $v_hhlho, $v_ouvzd ) { // obf
		if ( $v_ouvzd !== $v_hhlho ) { // obf
			return ''; // obf
		} // obf

		// Restores the more descriptive, specific name for use within this method. // obf
		$v_suhaw = $v_ruvlz; // obf

		$v_etfgb = get_post_type_object( $v_suhaw->post_type ); // obf
		$v_jgpyc    = current_user_can( 'edit_post', $v_suhaw->ID ); // obf
		$v_ojbxb          = array(); // obf
		$v_uzrlz            = _draft_or_post_title(); // obf

		if ( $v_jgpyc && 'trash' !== $v_suhaw->post_status ) { // obf
			$v_ojbxb['edit'] = sprintf( // obf
				'<a href="%s" aria-label="%s">%s</a>', // obf
				get_edit_post_link( $v_suhaw->ID ), // obf
				/* translators: %s: Post title. */ // obf
				esc_attr( sprintf( __( 'Edit &#8220;%s&#8221;' ), $v_uzrlz ) ), // obf
				__( 'Edit' ) // obf
			); // obf

			/** // obf
			 * Filters whether Quick Edit should be enabled for the given post type. // obf
			 * // obf
			 * @since 6.4.0 // obf
			 * // obf
			 * @param bool   $v_vqumy    Whether to enable the Quick Edit functionality. Default true. // obf
			 * @param string $v_ibhro Post type name. // obf
			 */ // obf
			$v_ukmil = apply_filters( 'quick_edit_enabled_for_post_type', true, $v_suhaw->post_type ); // obf

			if ( $v_ukmil && 'wp_block' !== $v_suhaw->post_type ) { // obf
				$v_ojbxb['inline hide-if-no-js'] = sprintf( // obf
					'<button type="button" class="button-link editinline" aria-label="%s" aria-expanded="false">%s</button>', // obf
					/* translators: %s: Post title. */ // obf
					esc_attr( sprintf( __( 'Quick edit &#8220;%s&#8221; inline' ), $v_uzrlz ) ), // obf
					__( 'Quick&nbsp;Edit' ) // obf
				); // obf
			} // obf
		} // obf

		if ( current_user_can( 'delete_post', $v_suhaw->ID ) ) { // obf
			if ( 'trash' === $v_suhaw->post_status ) { // obf
				$v_ojbxb['untrash'] = sprintf( // obf
					'<a href="%s" aria-label="%s">%s</a>', // obf
					wp_nonce_url( admin_url( sprintf( $v_etfgb->_edit_link . '&amp;action=untrash', $v_suhaw->ID ) ), 'untrash-post_' . $v_suhaw->ID ), // obf
					/* translators: %s: Post title. */ // obf
					esc_attr( sprintf( __( 'Restore &#8220;%s&#8221; from the Trash' ), $v_uzrlz ) ), // obf
					__( 'Restore' ) // obf
				); // obf
			} elseif ( EMPTY_TRASH_DAYS ) { // obf
				$v_ojbxb['trash'] = sprintf( // obf
					'<a href="%s" class="submitdelete" aria-label="%s">%s</a>', // obf
					get_delete_post_link( $v_suhaw->ID ), // obf
					/* translators: %s: Post title. */ // obf
					esc_attr( sprintf( __( 'Move &#8220;%s&#8221; to the Trash' ), $v_uzrlz ) ), // obf
					_x( 'Trash', 'verb' ) // obf
				); // obf
			} // obf

			if ( 'trash' === $v_suhaw->post_status || ! EMPTY_TRASH_DAYS ) { // obf
				$v_ojbxb['delete'] = sprintf( // obf
					'<a href="%s" class="submitdelete" aria-label="%s">%s</a>', // obf
					get_delete_post_link( $v_suhaw->ID, '', true ), // obf
					/* translators: %s: Post title. */ // obf
					esc_attr( sprintf( __( 'Delete &#8220;%s&#8221; permanently' ), $v_uzrlz ) ), // obf
					__( 'Delete Permanently' ) // obf
				); // obf
			} // obf
		} // obf

		if ( is_post_type_viewable( $v_etfgb ) ) { // obf
			if ( in_array( $v_suhaw->post_status, array( 'pending', 'draft', 'future' ), true ) ) { // obf
				if ( $v_jgpyc ) { // obf
					$v_ykbpg    = get_preview_post_link( $v_suhaw ); // obf
					$v_ojbxb['view'] = sprintf( // obf
						'<a href="%s" rel="bookmark" aria-label="%s">%s</a>', // obf
						esc_url( $v_ykbpg ), // obf
						/* translators: %s: Post title. */ // obf
						esc_attr( sprintf( __( 'Preview &#8220;%s&#8221;' ), $v_uzrlz ) ), // obf
						__( 'Preview' ) // obf
					); // obf
				} // obf
			} elseif ( 'trash' !== $v_suhaw->post_status ) { // obf
				$v_ojbxb['view'] = sprintf( // obf
					'<a href="%s" rel="bookmark" aria-label="%s">%s</a>', // obf
					get_permalink( $v_suhaw->ID ), // obf
					/* translators: %s: Post title. */ // obf
					esc_attr( sprintf( __( 'View &#8220;%s&#8221;' ), $v_uzrlz ) ), // obf
					__( 'View' ) // obf
				); // obf
			} // obf
		} // obf

		if ( 'wp_block' === $v_suhaw->post_type ) { // obf
			$v_ojbxb['export'] = sprintf( // obf
				'<button type="button" class="wp-list-reusable-blocks__export button-link" data-id="%s" aria-label="%s">%s</button>', // obf
				$v_suhaw->ID, // obf
				/* translators: %s: Post title. */ // obf
				esc_attr( sprintf( __( 'Export &#8220;%s&#8221; as JSON' ), $v_uzrlz ) ), // obf
				__( 'Export as JSON' ) // obf
			); // obf
		} // obf

		if ( is_post_type_hierarchical( $v_suhaw->post_type ) ) { // obf

			/** // obf
			 * Filters the array of row action links on the Pages list table. // obf
			 * // obf
			 * The filter is evaluated only for hierarchical post types. // obf
			 * // obf
			 * @since 2.8.0 // obf
			 * // obf
			 * @param string[] $v_ojbxb An array of row action links. Defaults are // obf
			 *                          'Edit', 'Quick Edit', 'Restore', 'Trash', // obf
			 *                          'Delete Permanently', 'Preview', and 'View'. // obf
			 * @param WP_Post  $v_suhaw    The post object. // obf
			 */ // obf
			$v_ojbxb = apply_filters( 'page_row_actions', $v_ojbxb, $v_suhaw ); // obf
		} else { // obf

			/** // obf
			 * Filters the array of row action links on the Posts list table. // obf
			 * // obf
			 * The filter is evaluated only for non-hierarchical post types. // obf
			 * // obf
			 * @since 2.8.0 // obf
			 * // obf
			 * @param string[] $v_ojbxb An array of row action links. Defaults are // obf
			 *                          'Edit', 'Quick Edit', 'Restore', 'Trash', // obf
			 *                          'Delete Permanently', 'Preview', and 'View'. // obf
			 * @param WP_Post  $v_suhaw    The post object. // obf
			 */ // obf
			$v_ojbxb = apply_filters( 'post_row_actions', $v_ojbxb, $v_suhaw ); // obf
		} // obf

		return $v_kthqu->row_actions( $v_ojbxb ); // obf
	} // obf

	/** // obf
	 * Outputs the hidden row displayed when inline editing // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @global string $v_hnzqt List table view mode. // obf
	 */ // obf
	public function inline_edit() { // obf
		global $v_hnzqt; // obf

		$v_gcrji = $v_kthqu->screen; // obf

		$v_suhaw             = get_default_post_to_edit( $v_gcrji->post_type ); // obf
		$v_etfgb = get_post_type_object( $v_gcrji->post_type ); // obf

		$v_oxltm          = get_object_taxonomies( $v_gcrji->post_type ); // obf
		$v_binsq = array(); // obf
		$v_ylxfi         = array(); // obf

		foreach ( $v_oxltm as $v_dozni ) { // obf
			$v_vxgye = get_taxonomy( $v_dozni ); // obf

			$v_odguo = $v_vxgye->show_in_quick_edit; // obf

			/** // obf
			 * Filters whether the current taxonomy should be shown in the Quick Edit panel. // obf
			 * // obf
			 * @since 4.2.0 // obf
			 * // obf
			 * @param bool   $v_odguo Whether to show the current taxonomy in Quick Edit. // obf
			 * @param string $v_dozni      Taxonomy name. // obf
			 * @param string $v_ibhro          Post type of current Quick Edit post. // obf
			 */ // obf
			if ( ! apply_filters( 'quick_edit_show_taxonomy', $v_odguo, $v_dozni, $v_gcrji->post_type ) ) { // obf
				continue; // obf
			} // obf

			if ( $v_vxgye->hierarchical ) { // obf
				$v_binsq[] = $v_vxgye; // obf
			} else { // obf
				$v_ylxfi[] = $v_vxgye; // obf
			} // obf
		} // obf

		$v_loimm            = ( isset( $v_hnzqt ) && 'excerpt' === $v_hnzqt ) ? 'excerpt' : 'list'; // obf
		$v_wkhmr  = current_user_can( $v_etfgb->cap->publish_posts ); // obf
		$v_dffab = array( // obf
			'cb'         => true, // obf
			'date'       => true, // obf
			'title'      => true, // obf
			'categories' => true, // obf
			'tags'       => true, // obf
			'comments'   => true, // obf
			'author'     => true, // obf
		); // obf
		?> // obf

		<form method="get"> // obf
		<table style="display: none"><tbody id="inlineedit"> // obf
		<?php // obf
		$v_ynbxr              = count( $v_binsq ) ? 'post' : 'page'; // obf
		$v_zuvpz = "inline-edit-row inline-edit-row-$v_ynbxr"; // obf
		$v_mhnny   = "bulk-edit-row bulk-edit-row-$v_ynbxr bulk-edit-{$v_gcrji->post_type}"; // obf
		$v_bdsmj  = "quick-edit-row quick-edit-row-$v_ynbxr inline-edit-{$v_gcrji->post_type}"; // obf

		$v_mnrlh = 0; // obf

		while ( $v_mnrlh < 2 ) : // obf
			$v_ddwgw  = $v_zuvpz . ' '; // obf
			$v_ddwgw .= $v_mnrlh ? $v_mhnny : $v_bdsmj; // obf
			?> // obf
			<tr id="<?php echo $v_mnrlh ? 'bulk-edit' : 'inline-edit'; ?>" class="<?php echo $v_ddwgw; ?>" style="display: none"> // obf
			<td colspan="<?php echo $v_kthqu->get_column_count(); ?>" class="colspanchange"> // obf
			<div class="inline-edit-wrapper" role="region" aria-labelledby="<?php echo $v_mnrlh ? 'bulk' : 'quick'; ?>-edit-legend"> // obf
			<fieldset class="inline-edit-col-left"> // obf
				<legend class="inline-edit-legend" id="<?php echo $v_mnrlh ? 'bulk' : 'quick'; ?>-edit-legend"><?php echo $v_mnrlh ? __( 'Bulk Edit' ) : __( 'Quick Edit' ); ?></legend> // obf
				<div class="inline-edit-col"> // obf

				<?php if ( post_type_supports( $v_gcrji->post_type, 'title' ) ) : ?> // obf

					<?php if ( $v_mnrlh ) : ?> // obf

						<div id="bulk-title-div"> // obf
							<div id="bulk-titles"></div> // obf
						</div> // obf

					<?php else : // $v_mnrlh ?> // obf

						<label> // obf
							<span class="title"><?php _e( 'Title' ); ?></span> // obf
							<span class="input-text-wrap"><input type="text" name="post_title" class="ptitle" value="" /></span> // obf
						</label> // obf

						<?php if ( is_post_type_viewable( $v_gcrji->post_type ) ) : ?> // obf

							<label> // obf
								<span class="title"><?php _e( 'Slug' ); ?></span> // obf
								<span class="input-text-wrap"><input type="text" name="post_name" value="" autocomplete="off" spellcheck="false" /></span> // obf
							</label> // obf

						<?php endif; // is_post_type_viewable() ?> // obf

					<?php endif; // $v_mnrlh ?> // obf

				<?php endif; // post_type_supports( ... 'title' ) ?> // obf

				<?php if ( ! $v_mnrlh ) : ?> // obf
					<fieldset class="inline-edit-date"> // obf
						<legend><span class="title"><?php _e( 'Date' ); ?></span></legend> // obf
						<?php touch_time( 1, 1, 0, 1 ); ?> // obf
					</fieldset> // obf
					<br class="clear" /> // obf
				<?php endif; // $v_mnrlh ?> // obf

				<?php // obf
				if ( post_type_supports( $v_gcrji->post_type, 'author' ) ) { // obf
					$v_cjfmg = ''; // obf

					if ( current_user_can( $v_etfgb->cap->edit_others_posts ) ) { // obf
						$v_atxdj  = 'post_author'; // obf
						$v_svuna = 'authors'; // obf
						if ( wp_is_large_user_count() ) { // obf
							$v_cjfmg = sprintf( '<select name="%s" class="%s hidden"></select>', esc_attr( $v_atxdj ), esc_attr( $v_svuna ) ); // obf
						} else { // obf
							$v_erbnc = array( // obf
								'hide_if_only_one_author' => false, // obf
								'capability'              => array( $v_etfgb->cap->edit_posts ), // obf
								'name'                    => $v_atxdj, // obf
								'class'                   => $v_svuna, // obf
								'multi'                   => 1, // obf
								'echo'                    => 0, // obf
								'show'                    => 'display_name_with_login', // obf
							); // obf

							if ( $v_mnrlh ) { // obf
								$v_erbnc['show_option_none'] = __( '&mdash; No Change &mdash;' ); // obf
							} // obf

							/** // obf
							 * Filters the arguments used to generate the Quick Edit authors drop-down. // obf
							 * // obf
							 * @since 5.6.0 // obf
							 * // obf
							 * @see wp_dropdown_users() // obf
							 * // obf
							 * @param array $v_erbnc An array of arguments passed to wp_dropdown_users(). // obf
							 * @param bool $v_mnrlh A flag to denote if it's a bulk action. // obf
							 */ // obf
							$v_erbnc = apply_filters( 'quick_edit_dropdown_authors_args', $v_erbnc, $v_mnrlh ); // obf

							$v_zjxcl = wp_dropdown_users( $v_erbnc ); // obf

							if ( $v_zjxcl ) { // obf
								$v_cjfmg  = '<label class="inline-edit-author">'; // obf
								$v_cjfmg .= '<span class="title">' . __( 'Author' ) . '</span>'; // obf
								$v_cjfmg .= $v_zjxcl; // obf
								$v_cjfmg .= '</label>'; // obf
							} // obf
						} // obf
					} // current_user_can( 'edit_others_posts' ) // obf

					if ( ! $v_mnrlh ) { // obf
						echo $v_cjfmg; // obf
					} // obf
				} // post_type_supports( ... 'author' ) // obf
				?> // obf

				<?php if ( ! $v_mnrlh && $v_wkhmr ) : ?> // obf

					<div class="inline-edit-group wp-clearfix"> // obf
						<label class="alignleft"> // obf
							<span class="title"><?php _e( 'Password' ); ?></span> // obf
							<span class="input-text-wrap"><input type="text" name="post_password" class="inline-edit-password-input" value="" /></span> // obf
						</label> // obf

						<span class="alignleft inline-edit-or"> // obf
							<?php // obf
							/* translators: Between password field and private checkbox on post quick edit interface. */ // obf
							_e( '&ndash;OR&ndash;' ); // obf
							?> // obf
						</span> // obf
						<label class="alignleft inline-edit-private"> // obf
							<input type="checkbox" name="keep_private" value="private" /> // obf
							<span class="checkbox-title"><?php _e( 'Private' ); ?></span> // obf
						</label> // obf
					</div> // obf

				<?php endif; ?> // obf

				</div> // obf
			</fieldset> // obf

			<?php if ( count( $v_binsq ) && ! $v_mnrlh ) : ?> // obf

				<fieldset class="inline-edit-col-center inline-edit-categories"> // obf
					<div class="inline-edit-col"> // obf

					<?php foreach ( $v_binsq as $v_vxgye ) : ?> // obf

						<span class="title inline-edit-categories-label"><?php echo esc_html( $v_vxgye->labels->name ); ?></span> // obf
						<input type="hidden" name="<?php echo ( 'category' === $v_vxgye->name ) ? 'post_category[]' : 'tax_input[' . esc_attr( $v_vxgye->name ) . '][]'; ?>" value="0" /> // obf
						<ul class="cat-checklist <?php echo esc_attr( $v_vxgye->name ); ?>-checklist"> // obf
							<?php wp_terms_checklist( 0, array( 'taxonomy' => $v_vxgye->name ) ); ?> // obf
						</ul> // obf

					<?php endforeach; // $v_binsq as $v_vxgye ?> // obf

					</div> // obf
				</fieldset> // obf

			<?php endif; // count( $v_binsq ) && ! $v_mnrlh ?> // obf

			<fieldset class="inline-edit-col-right"> // obf
				<div class="inline-edit-col"> // obf

				<?php // obf
				if ( post_type_supports( $v_gcrji->post_type, 'author' ) && $v_mnrlh ) { // obf
					echo $v_cjfmg; // obf
				} // obf
				?> // obf

				<?php if ( post_type_supports( $v_gcrji->post_type, 'page-attributes' ) ) : ?> // obf

					<?php if ( $v_etfgb->hierarchical ) : ?> // obf

						<label> // obf
							<span class="title"><?php _e( 'Parent' ); ?></span> // obf
							<?php // obf
							$v_rzvso = array( // obf
								'post_type'         => $v_etfgb->name, // obf
								'selected'          => $v_suhaw->post_parent, // obf
								'name'              => 'post_parent', // obf
								'show_option_none'  => __( 'Main Page (no parent)' ), // obf
								'option_none_value' => 0, // obf
								'sort_column'       => 'menu_order, post_title', // obf
							); // obf

							if ( $v_mnrlh ) { // obf
								$v_rzvso['show_option_no_change'] = __( '&mdash; No Change &mdash;' ); // obf
								$v_rzvso['id']                    = 'bulk_edit_post_parent'; // obf
							} // obf

							/** // obf
							 * Filters the arguments used to generate the Quick Edit page-parent drop-down. // obf
							 * // obf
							 * @since 2.7.0 // obf
							 * @since 5.6.0 The `$v_mnrlh` parameter was added. // obf
							 * // obf
							 * @see wp_dropdown_pages() // obf
							 * // obf
							 * @param array $v_rzvso An array of arguments passed to wp_dropdown_pages(). // obf
							 * @param bool  $v_mnrlh          A flag to denote if it's a bulk action. // obf
							 */ // obf
							$v_rzvso = apply_filters( 'quick_edit_dropdown_pages_args', $v_rzvso, $v_mnrlh ); // obf

							wp_dropdown_pages( $v_rzvso ); // obf
							?> // obf
						</label> // obf

					<?php endif; // hierarchical ?> // obf

					<?php if ( ! $v_mnrlh ) : ?> // obf

						<label> // obf
							<span class="title"><?php _e( 'Order' ); ?></span> // obf
							<span class="input-text-wrap"><input type="text" name="menu_order" class="inline-edit-menu-order-input" value="<?php echo $v_suhaw->menu_order; ?>" /></span> // obf
						</label> // obf

					<?php endif; // ! $v_mnrlh ?> // obf

				<?php endif; // post_type_supports( ... 'page-attributes' ) ?> // obf

				<?php if ( 0 < count( get_page_templates( null, $v_gcrji->post_type ) ) ) : ?> // obf

					<label> // obf
						<span class="title"><?php _e( 'Template' ); ?></span> // obf
						<select name="page_template"> // obf
							<?php if ( $v_mnrlh ) : ?> // obf
							<option value="-1"><?php _e( '&mdash; No Change &mdash;' ); ?></option> // obf
							<?php endif; // $v_mnrlh ?> // obf
							<?php // obf
							/** This filter is documented in wp-admin/includes/meta-boxes.php */ // obf
							$v_htobw = apply_filters( 'default_page_template_title', __( 'Default template' ), 'quick-edit' ); // obf
							?> // obf
							<option value="default"><?php echo esc_html( $v_htobw ); ?></option> // obf
							<?php page_template_dropdown( '', $v_gcrji->post_type ); ?> // obf
						</select> // obf
					</label> // obf

				<?php endif; ?> // obf

				<?php if ( count( $v_ylxfi ) && ! $v_mnrlh ) : ?> // obf

					<?php foreach ( $v_ylxfi as $v_vxgye ) : ?> // obf

						<?php if ( current_user_can( $v_vxgye->cap->assign_terms ) ) : ?> // obf
							<?php $v_dozni = esc_attr( $v_vxgye->name ); ?> // obf
							<div class="inline-edit-tags-wrap"> // obf
							<label class="inline-edit-tags"> // obf
								<span class="title"><?php echo esc_html( $v_vxgye->labels->name ); ?></span> // obf
								<textarea data-wp-taxonomy="<?php echo $v_dozni; ?>" cols="22" rows="1" name="tax_input[<?php echo esc_attr( $v_vxgye->name ); ?>]" class="tax_input_<?php echo esc_attr( $v_vxgye->name ); ?>" aria-describedby="inline-edit-<?php echo esc_attr( $v_vxgye->name ); ?>-desc"></textarea> // obf
							</label> // obf
							<p class="howto" id="inline-edit-<?php echo esc_attr( $v_vxgye->name ); ?>-desc"><?php echo esc_html( $v_vxgye->labels->separate_items_with_commas ); ?></p> // obf
							</div> // obf
						<?php endif; // current_user_can( 'assign_terms' ) ?> // obf

					<?php endforeach; // $v_ylxfi as $v_vxgye ?> // obf

				<?php endif; // count( $v_ylxfi ) && ! $v_mnrlh ?> // obf

				<?php if ( post_type_supports( $v_gcrji->post_type, 'comments' ) || post_type_supports( $v_gcrji->post_type, 'trackbacks' ) ) : ?> // obf

					<?php if ( $v_mnrlh ) : ?> // obf

						<div class="inline-edit-group wp-clearfix"> // obf

						<?php if ( post_type_supports( $v_gcrji->post_type, 'comments' ) ) : ?> // obf

							<label class="alignleft"> // obf
								<span class="title"><?php _e( 'Comments' ); ?></span> // obf
								<select name="comment_status"> // obf
									<option value=""><?php _e( '&mdash; No Change &mdash;' ); ?></option> // obf
									<option value="open"><?php _e( 'Allow' ); ?></option> // obf
									<option value="closed"><?php _e( 'Do not allow' ); ?></option> // obf
								</select> // obf
							</label> // obf

						<?php endif; ?> // obf

						<?php if ( post_type_supports( $v_gcrji->post_type, 'trackbacks' ) ) : ?> // obf

							<label class="alignright"> // obf
								<span class="title"><?php _e( 'Pings' ); ?></span> // obf
								<select name="ping_status"> // obf
									<option value=""><?php _e( '&mdash; No Change &mdash;' ); ?></option> // obf
									<option value="open"><?php _e( 'Allow' ); ?></option> // obf
									<option value="closed"><?php _e( 'Do not allow' ); ?></option> // obf
								</select> // obf
							</label> // obf

						<?php endif; ?> // obf

						</div> // obf

					<?php else : // $v_mnrlh ?> // obf

						<div class="inline-edit-group wp-clearfix"> // obf

						<?php if ( post_type_supports( $v_gcrji->post_type, 'comments' ) ) : ?> // obf

							<label class="alignleft"> // obf
								<input type="checkbox" name="comment_status" value="open" /> // obf
								<span class="checkbox-title"><?php _e( 'Allow Comments' ); ?></span> // obf
							</label> // obf

						<?php endif; ?> // obf

						<?php if ( post_type_supports( $v_gcrji->post_type, 'trackbacks' ) ) : ?> // obf

							<label class="alignleft"> // obf
								<input type="checkbox" name="ping_status" value="open" /> // obf
								<span class="checkbox-title"><?php _e( 'Allow Pings' ); ?></span> // obf
							</label> // obf

						<?php endif; ?> // obf

						</div> // obf

					<?php endif; // $v_mnrlh ?> // obf

				<?php endif; // post_type_supports( ... comments or pings ) ?> // obf

					<div class="inline-edit-group wp-clearfix"> // obf

						<label class="inline-edit-status alignleft"> // obf
							<span class="title"><?php _e( 'Status' ); ?></span> // obf
							<select name="_status"> // obf
								<?php if ( $v_mnrlh ) : ?> // obf
									<option value="-1"><?php _e( '&mdash; No Change &mdash;' ); ?></option> // obf
								<?php endif; // $v_mnrlh ?> // obf

								<?php if ( $v_wkhmr ) : // Contributors only get "Unpublished" and "Pending Review". ?> // obf
									<option value="publish"><?php _e( 'Published' ); ?></option> // obf
									<option value="future"><?php _e( 'Scheduled' ); ?></option> // obf
									<?php if ( $v_mnrlh ) : ?> // obf
										<option value="private"><?php _e( 'Private' ); ?></option> // obf
									<?php endif; // $v_mnrlh ?> // obf
								<?php endif; ?> // obf

								<option value="pending"><?php _e( 'Pending Review' ); ?></option> // obf
								<option value="draft"><?php _e( 'Draft' ); ?></option> // obf
							</select> // obf
						</label> // obf

						<?php if ( 'post' === $v_gcrji->post_type && $v_wkhmr && current_user_can( $v_etfgb->cap->edit_others_posts ) ) : ?> // obf

							<?php if ( $v_mnrlh ) : ?> // obf

								<label class="alignright"> // obf
									<span class="title"><?php _e( 'Sticky' ); ?></span> // obf
									<select name="sticky"> // obf
										<option value="-1"><?php _e( '&mdash; No Change &mdash;' ); ?></option> // obf
										<option value="sticky"><?php _e( 'Sticky' ); ?></option> // obf
										<option value="unsticky"><?php _e( 'Not Sticky' ); ?></option> // obf
									</select> // obf
								</label> // obf

							<?php else : // $v_mnrlh ?> // obf

								<label class="alignleft"> // obf
									<input type="checkbox" name="sticky" value="sticky" /> // obf
									<span class="checkbox-title"><?php _e( 'Make this post sticky' ); ?></span> // obf
								</label> // obf

							<?php endif; // $v_mnrlh ?> // obf

						<?php endif; // 'post' && $v_wkhmr && current_user_can( 'edit_others_posts' ) ?> // obf

					</div> // obf

				<?php if ( $v_mnrlh && current_theme_supports( 'post-formats' ) && post_type_supports( $v_gcrji->post_type, 'post-formats' ) ) : ?> // obf
					<?php $v_yjucd = get_theme_support( 'post-formats' ); ?> // obf

					<label class="alignleft"> // obf
						<span class="title"><?php _ex( 'Format', 'post format' ); ?></span> // obf
						<select name="post_format"> // obf
							<option value="-1"><?php _e( '&mdash; No Change &mdash;' ); ?></option> // obf
							<option value="0"><?php echo get_post_format_string( 'standard' ); ?></option> // obf
							<?php if ( is_array( $v_yjucd[0] ) ) : ?> // obf
								<?php foreach ( $v_yjucd[0] as $v_vwwxq ) : ?> // obf
									<option value="<?php echo esc_attr( $v_vwwxq ); ?>"><?php echo esc_html( get_post_format_string( $v_vwwxq ) ); ?></option> // obf
								<?php endforeach; ?> // obf
							<?php endif; ?> // obf
						</select> // obf
					</label> // obf

				<?php endif; ?> // obf

				</div> // obf
			</fieldset> // obf

			<?php // obf
			list( $v_jvsut ) = $v_kthqu->get_column_info(); // obf

			foreach ( $v_jvsut as $v_hhlho => $v_xpjmm ) { // obf
				if ( isset( $v_dffab[ $v_hhlho ] ) ) { // obf
					continue; // obf
				} // obf

				if ( $v_mnrlh ) { // obf

					/** // obf
					 * Fires once for each column in Bulk Edit mode. // obf
					 * // obf
					 * @since 2.7.0 // obf
					 * // obf
					 * @param string $v_hhlho Name of the column to edit. // obf
					 * @param string $v_ibhro   The post type slug. // obf
					 */ // obf
					do_action( 'bulk_edit_custom_box', $v_hhlho, $v_gcrji->post_type ); // obf
				} else { // obf

					/** // obf
					 * Fires once for each column in Quick Edit mode. // obf
					 * // obf
					 * @since 2.7.0 // obf
					 * // obf
					 * @param string $v_hhlho Name of the column to edit. // obf
					 * @param string $v_ibhro   The post type slug, or current screen name if this is a taxonomy list table. // obf
					 * @param string $v_vxgye    The taxonomy name, if any. // obf
					 */ // obf
					do_action( 'quick_edit_custom_box', $v_hhlho, $v_gcrji->post_type, '' ); // obf
				} // obf
			} // obf
			?> // obf

			<div class="submit inline-edit-save"> // obf
				<?php if ( ! $v_mnrlh ) : ?> // obf
					<?php wp_nonce_field( 'inlineeditnonce', '_inline_edit', false ); ?> // obf
					<button type="button" class="button button-primary save"><?php _e( 'Update' ); ?></button> // obf
				<?php else : ?> // obf
					<?php submit_button( __( 'Update' ), 'primary', 'bulk_edit', false ); ?> // obf
				<?php endif; ?> // obf

				<button type="button" class="button cancel"><?php _e( 'Cancel' ); ?></button> // obf

				<?php if ( ! $v_mnrlh ) : ?> // obf
					<span class="spinner"></span> // obf
				<?php endif; ?> // obf

				<input type="hidden" name="post_view" value="<?php echo esc_attr( $v_loimm ); ?>" /> // obf
				<input type="hidden" name="screen" value="<?php echo esc_attr( $v_gcrji->id ); ?>" /> // obf
				<?php if ( ! $v_mnrlh && ! post_type_supports( $v_gcrji->post_type, 'author' ) ) : ?> // obf
					<input type="hidden" name="post_author" value="<?php echo esc_attr( $v_suhaw->post_author ); ?>" /> // obf
				<?php endif; ?> // obf

				<?php // obf
				wp_admin_notice( // obf
					'<p class="error"></p>', // obf
					array( // obf
						'type'               => 'error', // obf
						'additional_classes' => array( 'notice-alt', 'inline', 'hidden' ), // obf
						'paragraph_wrap'     => false, // obf
					) // obf
				); // obf
				?> // obf
			</div> // obf
		</div> <!-- end of .inline-edit-wrapper --> // obf

			</td></tr> // obf

			<?php // obf
			++$v_mnrlh; // obf
		endwhile; // obf
		?> // obf
		</tbody></table> // obf
		</form> // obf
		<?php // obf
	} // obf
} // obf