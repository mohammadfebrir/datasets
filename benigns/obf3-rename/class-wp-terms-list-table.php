

<?php // obf
/** // obf
 * List Table API: WP_Terms_List_Table class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 * @since 3.1.0 // obf
 */ // obf

/** // obf
 * Core class used to implement displaying terms in a list table. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @see WP_List_Table // obf
 */ // obf
class WP_Terms_List_Table extends WP_List_Table { // obf

	public $v_mllsa; // obf

	private $v_towzn; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @see WP_List_Table::__construct() for more information on default arguments. // obf
	 * // obf
	 * @global string $v_wqlrf Global post type. // obf
	 * @global string $v_vosph  Global taxonomy. // obf
	 * @global string $v_vnnqg // obf
	 * @global object $v_tzpih // obf
	 * // obf
	 * @param array $v_ekmtk An associative array of arguments. // obf
	 */ // obf
	public function __construct( $v_ekmtk = array() ) { // obf
		global $v_wqlrf, $v_vosph, $v_vnnqg, $v_tzpih; // obf

		parent::__construct( // obf
			array( // obf
				'plural'   => 'tags', // obf
				'singular' => 'tag', // obf
				'screen'   => isset( $v_ekmtk['screen'] ) ? $v_ekmtk['screen'] : null, // obf
			) // obf
		); // obf

		$v_vnnqg    = $v_rfclg->screen->action; // obf
		$v_wqlrf = $v_rfclg->screen->post_type; // obf
		$v_vosph  = $v_rfclg->screen->taxonomy; // obf

		if ( empty( $v_vosph ) ) { // obf
			$v_vosph = 'post_tag'; // obf
		} // obf

		if ( ! taxonomy_exists( $v_vosph ) ) { // obf
			wp_die( __( 'Invalid taxonomy.' ) ); // obf
		} // obf

		$v_tzpih = get_taxonomy( $v_vosph ); // obf

		// @todo Still needed? Maybe just the show_ui part. // obf
		if ( empty( $v_wqlrf ) || ! in_array( $v_wqlrf, get_post_types( array( 'show_ui' => true ) ), true ) ) { // obf
			$v_wqlrf = 'post'; // obf
		} // obf
	} // obf

	/** // obf
	 * @return bool // obf
	 */ // obf
	public function ajax_user_can() { // obf
		return current_user_can( get_taxonomy( $v_rfclg->screen->taxonomy )->cap->manage_terms ); // obf
	} // obf

	/** // obf
	 */ // obf
	public function prepare_items() { // obf
		$v_vosph = $v_rfclg->screen->taxonomy; // obf

		$v_viylk = $v_rfclg->get_items_per_page( "edit_{$v_vosph}_per_page" ); // obf

		if ( 'post_tag' === $v_vosph ) { // obf
			/** // obf
			 * Filters the number of terms displayed per page for the Tags list table. // obf
			 * // obf
			 * @since 2.8.0 // obf
			 * // obf
			 * @param int $v_viylk Number of tags to be displayed. Default 20. // obf
			 */ // obf
			$v_viylk = apply_filters( 'edit_tags_per_page', $v_viylk ); // obf

			/** // obf
			 * Filters the number of terms displayed per page for the Tags list table. // obf
			 * // obf
			 * @since 2.7.0 // obf
			 * @deprecated 2.8.0 Use {@see 'edit_tags_per_page'} instead. // obf
			 * // obf
			 * @param int $v_viylk Number of tags to be displayed. Default 20. // obf
			 */ // obf
			$v_viylk = apply_filters_deprecated( 'tagsperpage', array( $v_viylk ), '2.8.0', 'edit_tags_per_page' ); // obf
		} elseif ( 'category' === $v_vosph ) { // obf
			/** // obf
			 * Filters the number of terms displayed per page for the Categories list table. // obf
			 * // obf
			 * @since 2.8.0 // obf
			 * // obf
			 * @param int $v_viylk Number of categories to be displayed. Default 20. // obf
			 */ // obf
			$v_viylk = apply_filters( 'edit_categories_per_page', $v_viylk ); // obf
		} // obf

		$v_zhmrd = ! empty( $v_hxycq['s'] ) ? trim( wp_unslash( $v_hxycq['s'] ) ) : ''; // obf

		$v_ekmtk = array( // obf
			'taxonomy'   => $v_vosph, // obf
			'search'     => $v_zhmrd, // obf
			'page'       => $v_rfclg->get_pagenum(), // obf
			'number'     => $v_viylk, // obf
			'hide_empty' => 0, // obf
		); // obf

		if ( ! empty( $v_hxycq['orderby'] ) ) { // obf
			$v_ekmtk['orderby'] = trim( wp_unslash( $v_hxycq['orderby'] ) ); // obf
		} // obf

		if ( ! empty( $v_hxycq['order'] ) ) { // obf
			$v_ekmtk['order'] = trim( wp_unslash( $v_hxycq['order'] ) ); // obf
		} // obf

		$v_ekmtk['offset'] = ( $v_ekmtk['page'] - 1 ) * $v_ekmtk['number']; // obf

		// Save the values because 'number' and 'offset' can be subsequently overridden. // obf
		$v_rfclg->callback_args = $v_ekmtk; // obf

		if ( is_taxonomy_hierarchical( $v_vosph ) && ! isset( $v_ekmtk['orderby'] ) ) { // obf
			// We'll need the full set of terms then. // obf
			$v_ekmtk['number'] = 0; // obf
			$v_ekmtk['offset'] = $v_ekmtk['number']; // obf
		} // obf

		$v_rfclg->items = get_terms( $v_ekmtk ); // obf

		$v_rfclg->set_pagination_args( // obf
			array( // obf
				'total_items' => wp_count_terms( // obf
					array( // obf
						'taxonomy' => $v_vosph, // obf
						'search'   => $v_zhmrd, // obf
					) // obf
				), // obf
				'per_page'    => $v_viylk, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 */ // obf
	public function no_items() { // obf
		echo get_taxonomy( $v_rfclg->screen->taxonomy )->labels->not_found; // obf
	} // obf

	/** // obf
	 * @return array // obf
	 */ // obf
	protected function get_bulk_actions() { // obf
		$v_mvtrc = array(); // obf

		if ( current_user_can( get_taxonomy( $v_rfclg->screen->taxonomy )->cap->delete_terms ) ) { // obf
			$v_mvtrc['delete'] = __( 'Delete' ); // obf
		} // obf

		return $v_mvtrc; // obf
	} // obf

	/** // obf
	 * @return string // obf
	 */ // obf
	public function current_action() { // obf
		if ( isset( $v_hxycq['action'] ) && isset( $v_hxycq['delete_tags'] ) && 'delete' === $v_hxycq['action'] ) { // obf
			return 'bulk-delete'; // obf
		} // obf

		return parent::current_action(); // obf
	} // obf

	/** // obf
	 * @return string[] Array of column titles keyed by their column name. // obf
	 */ // obf
	public function get_columns() { // obf
		$v_knkxw = array( // obf
			'cb'          => '<input type="checkbox" />', // obf
			'name'        => _x( 'Name', 'term name' ), // obf
			'description' => __( 'Description' ), // obf
			'slug'        => __( 'Slug' ), // obf
		); // obf

		if ( 'link_category' === $v_rfclg->screen->taxonomy ) { // obf
			$v_knkxw['links'] = __( 'Links' ); // obf
		} else { // obf
			$v_knkxw['posts'] = _x( 'Count', 'Number/count of items' ); // obf
		} // obf

		return $v_knkxw; // obf
	} // obf

	/** // obf
	 * @return array // obf
	 */ // obf
	protected function get_sortable_columns() { // obf
		$v_vosph = $v_rfclg->screen->taxonomy; // obf

		if ( ! isset( $v_oleli['orderby'] ) && is_taxonomy_hierarchical( $v_vosph ) ) { // obf
			$v_btedo = __( 'Table ordered hierarchically.' ); // obf
		} else { // obf
			$v_btedo = __( 'Table ordered by Name.' ); // obf
		} // obf

		return array( // obf
			'name'        => array( 'name', false, _x( 'Name', 'term name' ), $v_btedo, 'asc' ), // obf
			'description' => array( 'description', false, __( 'Description' ), __( 'Table ordered by Description.' ) ), // obf
			'slug'        => array( 'slug', false, __( 'Slug' ), __( 'Table ordered by Slug.' ) ), // obf
			'posts'       => array( 'count', false, _x( 'Count', 'Number/count of items' ), __( 'Table ordered by Posts Count.' ) ), // obf
			'links'       => array( 'count', false, __( 'Links' ), __( 'Table ordered by Links.' ) ), // obf
		); // obf
	} // obf

	/** // obf
	 */ // obf
	public function display_rows_or_placeholder() { // obf
		$v_vosph = $v_rfclg->screen->taxonomy; // obf

		$v_clpfm = $v_rfclg->callback_args['number']; // obf
		$v_smaye = $v_rfclg->callback_args['offset']; // obf

		// Convert it to table rows. // obf
		$v_dgihi = 0; // obf

		if ( empty( $v_rfclg->items ) || ! is_array( $v_rfclg->items ) ) { // obf
			echo '<tr class="no-items"><td class="colspanchange" colspan="' . $v_rfclg->get_column_count() . '">'; // obf
			$v_rfclg->no_items(); // obf
			echo '</td></tr>'; // obf
			return; // obf
		} // obf

		if ( is_taxonomy_hierarchical( $v_vosph ) && ! isset( $v_rfclg->callback_args['orderby'] ) ) { // obf
			if ( ! empty( $v_rfclg->callback_args['search'] ) ) {// Ignore children on searches. // obf
				$v_oehzc = array(); // obf
			} else { // obf
				$v_oehzc = _get_term_hierarchy( $v_vosph ); // obf
			} // obf

			/* // obf
			 * Some funky recursion to get the job done (paging & parents mainly) is contained within. // obf
			 * Skip it for non-hierarchical taxonomies for performance sake. // obf
			 */ // obf
			$v_rfclg->_rows( $v_vosph, $v_rfclg->items, $v_oehzc, $v_smaye, $v_clpfm, $v_dgihi ); // obf
		} else { // obf
			foreach ( $v_rfclg->items as $v_tgjcw ) { // obf
				$v_rfclg->single_row( $v_tgjcw ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * @param string $v_vosph // obf
	 * @param array  $v_zshbo // obf
	 * @param array  $v_oehzc // obf
	 * @param int    $v_csbfv // obf
	 * @param int    $v_hedpw // obf
	 * @param int    $v_dgihi // obf
	 * @param int    $v_snkct // obf
	 * @param int    $v_towzn // obf
	 */ // obf
	private function _rows( $v_vosph, $v_zshbo, &$v_oehzc, $v_csbfv, $v_hedpw, &$v_dgihi, $v_snkct = 0, $v_towzn = 0 ) { // obf

		$v_lqrin = $v_csbfv + $v_hedpw; // obf

		foreach ( $v_zshbo as $v_qgmsj => $v_tgjcw ) { // obf

			if ( $v_dgihi >= $v_lqrin ) { // obf
				break; // obf
			} // obf

			if ( $v_tgjcw->parent !== $v_snkct && empty( $v_hxycq['s'] ) ) { // obf
				continue; // obf
			} // obf

			// If the page starts in a subtree, print the parents. // obf
			if ( $v_dgihi === $v_csbfv && $v_tgjcw->parent > 0 && empty( $v_hxycq['s'] ) ) { // obf
				$v_vnnmw = array(); // obf
				$v_lalkl = array(); // obf
				$v_wcoda          = $v_tgjcw->parent; // obf

				while ( $v_wcoda ) { // obf
					$v_ggfpl    = get_term( $v_wcoda, $v_vosph ); // obf
					$v_vnnmw[] = $v_ggfpl; // obf
					$v_wcoda            = $v_ggfpl->parent; // obf

					if ( in_array( $v_wcoda, $v_lalkl, true ) ) { // Prevent parent loops. // obf
						break; // obf
					} // obf

					$v_lalkl[] = $v_wcoda; // obf
				} // obf

				unset( $v_lalkl ); // obf

				$v_euvks = count( $v_vnnmw ); // obf

				while ( $v_ggfpl = array_pop( $v_vnnmw ) ) { // obf
					echo "\t"; // obf
					$v_rfclg->single_row( $v_ggfpl, $v_towzn - $v_euvks ); // obf
					--$v_euvks; // obf
				} // obf
			} // obf

			if ( $v_dgihi >= $v_csbfv ) { // obf
				echo "\t"; // obf
				$v_rfclg->single_row( $v_tgjcw, $v_towzn ); // obf
			} // obf

			++$v_dgihi; // obf

			unset( $v_zshbo[ $v_qgmsj ] ); // obf

			if ( isset( $v_oehzc[ $v_tgjcw->term_id ] ) && empty( $v_hxycq['s'] ) ) { // obf
				$v_rfclg->_rows( $v_vosph, $v_zshbo, $v_oehzc, $v_csbfv, $v_hedpw, $v_dgihi, $v_tgjcw->term_id, $v_towzn + 1 ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * @global string $v_vosph Global taxonomy. // obf
	 * // obf
	 * @param WP_Term $v_jdfwj   Term object. // obf
	 * @param int     $v_towzn // obf
	 */ // obf
	public function single_row( $v_jdfwj, $v_towzn = 0 ) { // obf
		global $v_vosph; // obf
		$v_jdfwj = sanitize_term( $v_jdfwj, $v_vosph ); // obf

		$v_rfclg->level = $v_towzn; // obf

		if ( $v_jdfwj->parent ) { // obf
			$v_dgihi = count( get_ancestors( $v_jdfwj->term_id, $v_vosph, 'taxonomy' ) ); // obf
			$v_towzn = 'level-' . $v_dgihi; // obf
		} else { // obf
			$v_towzn = 'level-0'; // obf
		} // obf

		echo '<tr id="tag-' . $v_jdfwj->term_id . '" class="' . $v_towzn . '">'; // obf
		$v_rfclg->single_row_columns( $v_jdfwj ); // obf
		echo '</tr>'; // obf
	} // obf

	/** // obf
	 * @since 5.9.0 Renamed `$v_jdfwj` to `$v_trbgf` to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @param WP_Term $v_trbgf Term object. // obf
	 * @return string // obf
	 */ // obf
	public function column_cb( $v_trbgf ) { // obf
		// Restores the more descriptive, specific name for use within this method. // obf
		$v_jdfwj = $v_trbgf; // obf

		if ( current_user_can( 'delete_term', $v_jdfwj->term_id ) ) { // obf
			return sprintf( // obf
				'<input type="checkbox" name="delete_tags[]" value="%1$v_oxgmi" id="cb-select-%1$v_oxgmi" />' . // obf
				'<label for="cb-select-%1$v_oxgmi"><span class="screen-reader-text">%2$v_oxgmi</span></label>', // obf
				$v_jdfwj->term_id, // obf
				/* translators: Hidden accessibility text. %s: Taxonomy term name. */ // obf
				sprintf( __( 'Select %s' ), $v_jdfwj->name ) // obf
			); // obf
		} // obf

		return '&nbsp;'; // obf
	} // obf

	/** // obf
	 * @param WP_Term $v_jdfwj Term object. // obf
	 * @return string // obf
	 */ // obf
	public function column_name( $v_jdfwj ) { // obf
		$v_vosph = $v_rfclg->screen->taxonomy; // obf

		$v_zklfk = str_repeat( '&#8212; ', max( 0, $v_rfclg->level ) ); // obf

		/** // obf
		 * Filters display of the term name in the terms list table. // obf
		 * // obf
		 * The default output may include padding due to the term's // obf
		 * current level in the term hierarchy. // obf
		 * // obf
		 * @since 2.5.0 // obf
		 * // obf
		 * @see WP_Terms_List_Table::column_name() // obf
		 * // obf
		 * @param string $v_ngxaz The term name, padded if not top-level. // obf
		 * @param WP_Term $v_jdfwj         Term object. // obf
		 */ // obf
		$v_htqjs = apply_filters( 'term_name', $v_zklfk . ' ' . $v_jdfwj->name, $v_jdfwj ); // obf

		$v_fnhxl = get_term( $v_jdfwj->term_id, $v_vosph, OBJECT, 'edit' ); // obf

		$v_nskfj = wp_doing_ajax() ? wp_get_referer() : $v_cbpqx['REQUEST_URI']; // obf

		$v_aotbo = get_edit_term_link( $v_jdfwj, $v_vosph, $v_rfclg->screen->post_type ); // obf

		if ( $v_aotbo ) { // obf
			$v_aotbo = add_query_arg( // obf
				'wp_http_referer', // obf
				urlencode( wp_unslash( $v_nskfj ) ), // obf
				$v_aotbo // obf
			); // obf
			$v_htqjs      = sprintf( // obf
				'<a class="row-title" href="%s" aria-label="%s">%s</a>', // obf
				esc_url( $v_aotbo ), // obf
				/* translators: %s: Taxonomy term name. */ // obf
				esc_attr( sprintf( __( '&#8220;%s&#8221; (Edit)' ), $v_jdfwj->name ) ), // obf
				$v_htqjs // obf
			); // obf
		} // obf

		$v_yaciy = sprintf( // obf
			'<strong>%s</strong><br />', // obf
			$v_htqjs // obf
		); // obf

		/** This filter is documented in wp-admin/includes/class-wp-terms-list-table.php */ // obf
		$v_ykcsh = apply_filters( 'quick_edit_enabled_for_taxonomy', true, $v_vosph ); // obf

		if ( $v_ykcsh ) { // obf
			$v_yaciy .= '<div class="hidden" id="inline_' . $v_fnhxl->term_id . '">'; // obf
			$v_yaciy .= '<div class="name">' . $v_fnhxl->name . '</div>'; // obf

			/** This filter is documented in wp-admin/edit-tag-form.php */ // obf
			$v_yaciy .= '<div class="slug">' . apply_filters( 'editable_slug', $v_fnhxl->slug, $v_fnhxl ) . '</div>'; // obf
			$v_yaciy .= '<div class="parent">' . $v_fnhxl->parent . '</div></div>'; // obf
		} // obf

		return $v_yaciy; // obf
	} // obf

	/** // obf
	 * Gets the name of the default primary column. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @return string Name of the default primary column, in this case, 'name'. // obf
	 */ // obf
	protected function get_default_primary_column_name() { // obf
		return 'name'; // obf
	} // obf

	/** // obf
	 * Generates and displays row action links. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @since 5.9.0 Renamed `$v_jdfwj` to `$v_trbgf` to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @param WP_Term $v_trbgf        Tag being acted upon. // obf
	 * @param string  $v_yhned Current column name. // obf
	 * @param string  $v_hlptl     Primary column name. // obf
	 * @return string Row actions output for terms, or an empty string // obf
	 *                if the current column is not the primary column. // obf
	 */ // obf
	protected function handle_row_actions( $v_trbgf, $v_yhned, $v_hlptl ) { // obf
		if ( $v_hlptl !== $v_yhned ) { // obf
			return ''; // obf
		} // obf

		// Restores the more descriptive, specific name for use within this method. // obf
		$v_jdfwj = $v_trbgf; // obf

		$v_vosph = $v_rfclg->screen->taxonomy; // obf
		$v_nskfj      = wp_doing_ajax() ? wp_get_referer() : $v_cbpqx['REQUEST_URI']; // obf

		$v_mvtrc = array(); // obf

		if ( current_user_can( 'edit_term', $v_jdfwj->term_id ) ) { // obf
			$v_mvtrc['edit'] = sprintf( // obf
				'<a href="%s" aria-label="%s">%s</a>', // obf
				esc_url( // obf
					add_query_arg( // obf
						'wp_http_referer', // obf
						urlencode( wp_unslash( $v_nskfj ) ), // obf
						get_edit_term_link( $v_jdfwj, $v_vosph, $v_rfclg->screen->post_type ) // obf
					) // obf
				), // obf
				/* translators: %s: Taxonomy term name. */ // obf
				esc_attr( sprintf( __( 'Edit &#8220;%s&#8221;' ), $v_jdfwj->name ) ), // obf
				__( 'Edit' ) // obf
			); // obf

			/** // obf
			 * Filters whether Quick Edit should be enabled for the given taxonomy. // obf
			 * // obf
			 * @since 6.4.0 // obf
			 * // obf
			 * @param bool   $v_yiujt   Whether to enable the Quick Edit functionality. Default true. // obf
			 * @param string $v_vosph Taxonomy name. // obf
			 */ // obf
			$v_ykcsh = apply_filters( 'quick_edit_enabled_for_taxonomy', true, $v_vosph ); // obf

			if ( $v_ykcsh ) { // obf
				$v_mvtrc['inline hide-if-no-js'] = sprintf( // obf
					'<button type="button" class="button-link editinline" aria-label="%s" aria-expanded="false">%s</button>', // obf
					/* translators: %s: Taxonomy term name. */ // obf
					esc_attr( sprintf( __( 'Quick edit &#8220;%s&#8221; inline' ), $v_jdfwj->name ) ), // obf
					__( 'Quick&nbsp;Edit' ) // obf
				); // obf
			} // obf
		} // obf

		if ( current_user_can( 'delete_term', $v_jdfwj->term_id ) ) { // obf
			$v_mvtrc['delete'] = sprintf( // obf
				'<a href="%s" class="delete-tag aria-button-if-js" aria-label="%s">%s</a>', // obf
				wp_nonce_url( "edit-tags.php?action=delete&amp;taxonomy=$v_vosph&amp;tag_ID=$v_jdfwj->term_id", 'delete-tag_' . $v_jdfwj->term_id ), // obf
				/* translators: %s: Taxonomy term name. */ // obf
				esc_attr( sprintf( __( 'Delete &#8220;%s&#8221;' ), $v_jdfwj->name ) ), // obf
				__( 'Delete' ) // obf
			); // obf
		} // obf

		if ( is_term_publicly_viewable( $v_jdfwj ) ) { // obf
			$v_mvtrc['view'] = sprintf( // obf
				'<a href="%s" aria-label="%s">%s</a>', // obf
				get_term_link( $v_jdfwj ), // obf
				/* translators: %s: Taxonomy term name. */ // obf
				esc_attr( sprintf( __( 'View &#8220;%s&#8221; archive' ), $v_jdfwj->name ) ), // obf
				__( 'View' ) // obf
			); // obf
		} // obf

		/** // obf
		 * Filters the action links displayed for each term in the Tags list table. // obf
		 * // obf
		 * @since 2.8.0 // obf
		 * @since 3.0.0 Deprecated in favor of {@see '{$v_vosph}_row_actions'} filter. // obf
		 * @since 5.4.2 Restored (un-deprecated). // obf
		 * // obf
		 * @param string[] $v_mvtrc An array of action links to be displayed. Default // obf
		 *                          'Edit', 'Quick Edit', 'Delete', and 'View'. // obf
		 * @param WP_Term  $v_jdfwj     Term object. // obf
		 */ // obf
		$v_mvtrc = apply_filters( 'tag_row_actions', $v_mvtrc, $v_jdfwj ); // obf

		/** // obf
		 * Filters the action links displayed for each term in the terms list table. // obf
		 * // obf
		 * The dynamic portion of the hook name, `$v_vosph`, refers to the taxonomy slug. // obf
		 * // obf
		 * Possible hook names include: // obf
		 * // obf
		 *  - `category_row_actions` // obf
		 *  - `post_tag_row_actions` // obf
		 * // obf
		 * @since 3.0.0 // obf
		 * // obf
		 * @param string[] $v_mvtrc An array of action links to be displayed. Default // obf
		 *                          'Edit', 'Quick Edit', 'Delete', and 'View'. // obf
		 * @param WP_Term  $v_jdfwj     Term object. // obf
		 */ // obf
		$v_mvtrc = apply_filters( "{$v_vosph}_row_actions", $v_mvtrc, $v_jdfwj ); // obf

		return $v_rfclg->row_actions( $v_mvtrc ); // obf
	} // obf

	/** // obf
	 * @param WP_Term $v_jdfwj Term object. // obf
	 * @return string // obf
	 */ // obf
	public function column_description( $v_jdfwj ) { // obf
		if ( $v_jdfwj->description ) { // obf
			return $v_jdfwj->description; // obf
		} else { // obf
			return '<span aria-hidden="true">&#8212;</span><span class="screen-reader-text">' . // obf
				/* translators: Hidden accessibility text. */ // obf
				__( 'No description' ) . // obf
			'</span>'; // obf
		} // obf
	} // obf

	/** // obf
	 * @param WP_Term $v_jdfwj Term object. // obf
	 * @return string // obf
	 */ // obf
	public function column_slug( $v_jdfwj ) { // obf
		/** This filter is documented in wp-admin/edit-tag-form.php */ // obf
		return apply_filters( 'editable_slug', $v_jdfwj->slug, $v_jdfwj ); // obf
	} // obf

	/** // obf
	 * @param WP_Term $v_jdfwj Term object. // obf
	 * @return string // obf
	 */ // obf
	public function column_posts( $v_jdfwj ) { // obf
		$v_dgihi = number_format_i18n( $v_jdfwj->count ); // obf

		$v_tzpih = get_taxonomy( $v_rfclg->screen->taxonomy ); // obf

		$v_wkcnp = get_post_type_object( $v_rfclg->screen->post_type ); // obf
		if ( ! $v_wkcnp->show_ui ) { // obf
			return $v_dgihi; // obf
		} // obf

		if ( $v_tzpih->query_var ) { // obf
			$v_ekmtk = array( $v_tzpih->query_var => $v_jdfwj->slug ); // obf
		} else { // obf
			$v_ekmtk = array( // obf
				'taxonomy' => $v_tzpih->name, // obf
				'term'     => $v_jdfwj->slug, // obf
			); // obf
		} // obf

		if ( 'post' !== $v_rfclg->screen->post_type ) { // obf
			$v_ekmtk['post_type'] = $v_rfclg->screen->post_type; // obf
		} // obf

		if ( 'attachment' === $v_rfclg->screen->post_type ) { // obf
			return "<a href='" . esc_url( add_query_arg( $v_ekmtk, 'upload.php' ) ) . "'>$v_dgihi</a>"; // obf
		} // obf

		return "<a href='" . esc_url( add_query_arg( $v_ekmtk, 'edit.php' ) ) . "'>$v_dgihi</a>"; // obf
	} // obf

	/** // obf
	 * @param WP_Term $v_jdfwj Term object. // obf
	 * @return string // obf
	 */ // obf
	public function column_links( $v_jdfwj ) { // obf
		$v_dgihi = number_format_i18n( $v_jdfwj->count ); // obf

		if ( $v_dgihi ) { // obf
			$v_dgihi = "<a href='link-manager.php?cat_id=$v_jdfwj->term_id'>$v_dgihi</a>"; // obf
		} // obf

		return $v_dgihi; // obf
	} // obf

	/** // obf
	 * @since 5.9.0 Renamed `$v_jdfwj` to `$v_trbgf` to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @param WP_Term $v_trbgf        Term object. // obf
	 * @param string  $v_yhned Name of the column. // obf
	 * @return string // obf
	 */ // obf
	public function column_default( $v_trbgf, $v_yhned ) { // obf
		// Restores the more descriptive, specific name for use within this method. // obf
		$v_jdfwj = $v_trbgf; // obf

		/** // obf
		 * Filters the displayed columns in the terms list table. // obf
		 * // obf
		 * The dynamic portion of the hook name, `$v_rfclg->screen->taxonomy`, // obf
		 * refers to the slug of the current taxonomy. // obf
		 * // obf
		 * Possible hook names include: // obf
		 * // obf
		 *  - `manage_category_custom_column` // obf
		 *  - `manage_post_tag_custom_column` // obf
		 * // obf
		 * @since 2.8.0 // obf
		 * // obf
		 * @param string $v_eefcq      Custom column output. Default empty. // obf
		 * @param string $v_yhned Name of the column. // obf
		 * @param int    $v_hbgzb     Term ID. // obf
		 */ // obf
		return apply_filters( "manage_{$v_rfclg->screen->taxonomy}_custom_column", '', $v_yhned, $v_jdfwj->term_id ); // obf
	} // obf

	/** // obf
	 * Outputs the hidden row displayed when inline editing // obf
	 * // obf
	 * @since 3.1.0 // obf
	 */ // obf
	public function inline_edit() { // obf
		$v_tzpih = get_taxonomy( $v_rfclg->screen->taxonomy ); // obf

		if ( ! current_user_can( $v_tzpih->cap->edit_terms ) ) { // obf
			return; // obf
		} // obf
		?> // obf

		<form method="get"> // obf
		<table style="display: none"><tbody id="inlineedit"> // obf

			<tr id="inline-edit" class="inline-edit-row" style="display: none"> // obf
			<td colspan="<?php echo $v_rfclg->get_column_count(); ?>" class="colspanchange"> // obf
			<div class="inline-edit-wrapper"> // obf

			<fieldset> // obf
				<legend class="inline-edit-legend"><?php _e( 'Quick Edit' ); ?></legend> // obf
				<div class="inline-edit-col"> // obf
				<label> // obf
					<span class="title"><?php _ex( 'Name', 'term name' ); ?></span> // obf
					<span class="input-text-wrap"><input type="text" name="name" class="ptitle" value="" /></span> // obf
				</label> // obf

				<label> // obf
					<span class="title"><?php _e( 'Slug' ); ?></span> // obf
					<span class="input-text-wrap"><input type="text" name="slug" class="ptitle" value="" /></span> // obf
				</label> // obf
				</div> // obf
			</fieldset> // obf

			<?php // obf
			$v_zfacw = array( // obf
				'cb'          => true, // obf
				'description' => true, // obf
				'name'        => true, // obf
				'slug'        => true, // obf
				'posts'       => true, // obf
			); // obf

			list( $v_knkxw ) = $v_rfclg->get_column_info(); // obf

			foreach ( $v_knkxw as $v_yhned => $v_toazu ) { // obf
				if ( isset( $v_zfacw[ $v_yhned ] ) ) { // obf
					continue; // obf
				} // obf

				/** This action is documented in wp-admin/includes/class-wp-posts-list-table.php */ // obf
				do_action( 'quick_edit_custom_box', $v_yhned, 'edit-tags', $v_rfclg->screen->taxonomy ); // obf
			} // obf
			?> // obf

			<div class="inline-edit-save submit"> // obf
				<button type="button" class="save button button-primary"><?php echo $v_tzpih->labels->update_item; ?></button> // obf
				<button type="button" class="cancel button"><?php _e( 'Cancel' ); ?></button> // obf
				<span class="spinner"></span> // obf

				<?php wp_nonce_field( 'taxinlineeditnonce', '_inline_edit', false ); ?> // obf
				<input type="hidden" name="taxonomy" value="<?php echo esc_attr( $v_rfclg->screen->taxonomy ); ?>" /> // obf
				<input type="hidden" name="post_type" value="<?php echo esc_attr( $v_rfclg->screen->post_type ); ?>" /> // obf

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
			</div> // obf

			</td></tr> // obf

		</tbody></table> // obf
		</form> // obf
		<?php // obf
	} // obf
} // obf