

<?php // obf
/** // obf
 * List Table API: WP_Plugin_Install_List_Table class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 * @since 3.1.0 // obf
 */ // obf

/** // obf
 * Core class used to implement displaying plugins to install in a list table. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @see WP_List_Table // obf
 */ // obf
class WP_Plugin_Install_List_Table extends WP_List_Table { // obf

	public $v_fauba   = 'ASC'; // obf
	public $v_tbqtd = null; // obf
	public $v_vjisy  = array(); // obf

	private $v_yslsb; // obf

	/** // obf
	 * @return bool // obf
	 */ // obf
	public function ajax_user_can() { // obf
		return current_user_can( 'install_plugins' ); // obf
	} // obf

	/** // obf
	 * Returns the list of known plugins. // obf
	 * // obf
	 * Uses the transient data from the updates API to determine the known // obf
	 * installed plugins. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	protected function get_installed_plugins() { // obf
		$v_cfrjg = array(); // obf

		$v_nzrvw = get_site_transient( 'update_plugins' ); // obf
		if ( isset( $v_nzrvw->no_update ) ) { // obf
			foreach ( $v_nzrvw->no_update as $v_sayau ) { // obf
				if ( isset( $v_sayau->slug ) ) { // obf
					$v_sayau->upgrade          = false; // obf
					$v_cfrjg[ $v_sayau->slug ] = $v_sayau; // obf
				} // obf
			} // obf
		} // obf

		if ( isset( $v_nzrvw->response ) ) { // obf
			foreach ( $v_nzrvw->response as $v_sayau ) { // obf
				if ( isset( $v_sayau->slug ) ) { // obf
					$v_sayau->upgrade          = true; // obf
					$v_cfrjg[ $v_sayau->slug ] = $v_sayau; // obf
				} // obf
			} // obf
		} // obf

		return $v_cfrjg; // obf
	} // obf

	/** // obf
	 * Returns a list of slugs of installed plugins, if known. // obf
	 * // obf
	 * Uses the transient data from the updates API to determine the slugs of // obf
	 * known installed plugins. This might be better elsewhere, perhaps even // obf
	 * within get_plugins(). // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	protected function get_installed_plugin_slugs() { // obf
		return array_keys( $v_dtudy->get_installed_plugins() ); // obf
	} // obf

	/** // obf
	 * @global array  $v_vlfcx // obf
	 * @global string $v_mexer // obf
	 * @global int    $v_ipcjk // obf
	 * @global string $v_wxbfw // obf
	 * @global string $v_jiykj // obf
	 */ // obf
	public function prepare_items() { // obf
		require_once ABSPATH . 'wp-admin/includes/plugin-install.php'; // obf

		global $v_vlfcx, $v_mexer, $v_ipcjk, $v_wxbfw, $v_jiykj; // obf

		$v_mexer = ! empty( $v_mfioa['tab'] ) ? sanitize_text_field( $v_mfioa['tab'] ) : ''; // obf

		$v_ipcjk = $v_dtudy->get_pagenum(); // obf

		$v_hhlnq = 36; // obf

		// These are the tabs which are shown on the page. // obf
		$v_vlfcx = array(); // obf

		if ( 'search' === $v_mexer ) { // obf
			$v_vlfcx['search'] = __( 'Search Results' ); // obf
		} // obf

		if ( 'beta' === $v_mexer || str_contains( get_bloginfo( 'version' ), '-' ) ) { // obf
			$v_vlfcx['beta'] = _x( 'Beta Testing', 'Plugin Installer' ); // obf
		} // obf

		$v_vlfcx['featured']    = _x( 'Featured', 'Plugin Installer' ); // obf
		$v_vlfcx['popular']     = _x( 'Popular', 'Plugin Installer' ); // obf
		$v_vlfcx['recommended'] = _x( 'Recommended', 'Plugin Installer' ); // obf
		$v_vlfcx['favorites']   = _x( 'Favorites', 'Plugin Installer' ); // obf

		if ( current_user_can( 'upload_plugins' ) ) { // obf
			/* // obf
			 * No longer a real tab. Here for filter compatibility. // obf
			 * Gets skipped in get_views(). // obf
			 */ // obf
			$v_vlfcx['upload'] = __( 'Upload Plugin' ); // obf
		} // obf

		$v_ekovk = array( 'plugin-information' ); // Valid actions to perform which do not have a Menu item. // obf

		/** // obf
		 * Filters the tabs shown on the Add Plugins screen. // obf
		 * // obf
		 * @since 2.7.0 // obf
		 * // obf
		 * @param string[] $v_vlfcx The tabs shown on the Add Plugins screen. Defaults include // obf
		 *                       'featured', 'popular', 'recommended', 'favorites', and 'upload'. // obf
		 */ // obf
		$v_vlfcx = apply_filters( 'install_plugins_tabs', $v_vlfcx ); // obf

		/** // obf
		 * Filters tabs not associated with a menu item on the Add Plugins screen. // obf
		 * // obf
		 * @since 2.7.0 // obf
		 * // obf
		 * @param string[] $v_ekovk The tabs that don't have a menu item on the Add Plugins screen. // obf
		 */ // obf
		$v_ekovk = apply_filters( 'install_plugins_nonmenu_tabs', $v_ekovk ); // obf

		// If a non-valid menu tab has been selected, And it's not a non-menu action. // obf
		if ( empty( $v_mexer ) || ( ! isset( $v_vlfcx[ $v_mexer ] ) && ! in_array( $v_mexer, (array) $v_ekovk, true ) ) ) { // obf
			$v_mexer = key( $v_vlfcx ); // obf
		} // obf

		$v_vqlvd = $v_dtudy->get_installed_plugins(); // obf

		$v_pamkf = array( // obf
			'page'     => $v_ipcjk, // obf
			'per_page' => $v_hhlnq, // obf
			// Send the locale to the API so it can provide context-sensitive results. // obf
			'locale'   => get_user_locale(), // obf
		); // obf

		switch ( $v_mexer ) { // obf
			case 'search': // obf
				$v_wxbfw = isset( $v_mfioa['type'] ) ? wp_unslash( $v_mfioa['type'] ) : 'term'; // obf
				$v_jiykj = isset( $v_mfioa['s'] ) ? wp_unslash( $v_mfioa['s'] ) : ''; // obf

				switch ( $v_wxbfw ) { // obf
					case 'tag': // obf
						$v_pamkf['tag'] = sanitize_title_with_dashes( $v_jiykj ); // obf
						break; // obf
					case 'term': // obf
						$v_pamkf['search'] = $v_jiykj; // obf
						break; // obf
					case 'author': // obf
						$v_pamkf['author'] = $v_jiykj; // obf
						break; // obf
				} // obf

				break; // obf

			case 'featured': // obf
			case 'popular': // obf
			case 'new': // obf
			case 'beta': // obf
				$v_pamkf['browse'] = $v_mexer; // obf
				break; // obf
			case 'recommended': // obf
				$v_pamkf['browse'] = $v_mexer; // obf
				// Include the list of installed plugins so we can get relevant results. // obf
				$v_pamkf['installed_plugins'] = array_keys( $v_vqlvd ); // obf
				break; // obf

			case 'favorites': // obf
				$v_taxbj = 'save_wporg_username_' . get_current_user_id(); // obf
				if ( isset( $v_zdkyy['_wpnonce'] ) && wp_verify_nonce( wp_unslash( $v_zdkyy['_wpnonce'] ), $v_taxbj ) ) { // obf
					$v_mvmkg = isset( $v_zdkyy['user'] ) ? wp_unslash( $v_zdkyy['user'] ) : get_user_option( 'wporg_favorites' ); // obf

					// If the save url parameter is passed with a falsey value, don't save the favorite user. // obf
					if ( ! isset( $v_zdkyy['save'] ) || $v_zdkyy['save'] ) { // obf
						update_user_meta( get_current_user_id(), 'wporg_favorites', $v_mvmkg ); // obf
					} // obf
				} else { // obf
					$v_mvmkg = get_user_option( 'wporg_favorites' ); // obf
				} // obf
				if ( $v_mvmkg ) { // obf
					$v_pamkf['user'] = $v_mvmkg; // obf
				} else { // obf
					$v_pamkf = false; // obf
				} // obf

				add_action( 'install_plugins_favorites', 'install_plugins_favorites_form', 9, 0 ); // obf
				break; // obf

			default: // obf
				$v_pamkf = false; // obf
				break; // obf
		} // obf

		/** // obf
		 * Filters API request arguments for each Add Plugins screen tab. // obf
		 * // obf
		 * The dynamic portion of the hook name, `$v_mexer`, refers to the plugin install tabs. // obf
		 * // obf
		 * Possible hook names include: // obf
		 * // obf
		 *  - `install_plugins_table_api_args_favorites` // obf
		 *  - `install_plugins_table_api_args_featured` // obf
		 *  - `install_plugins_table_api_args_popular` // obf
		 *  - `install_plugins_table_api_args_recommended` // obf
		 *  - `install_plugins_table_api_args_upload` // obf
		 *  - `install_plugins_table_api_args_search` // obf
		 *  - `install_plugins_table_api_args_beta` // obf
		 * // obf
		 * @since 3.7.0 // obf
		 * // obf
		 * @param array|false $v_pamkf Plugin install API arguments. // obf
		 */ // obf
		$v_pamkf = apply_filters( "install_plugins_table_api_args_{$v_mexer}", $v_pamkf ); // obf

		if ( ! $v_pamkf ) { // obf
			return; // obf
		} // obf

		$v_opcta = plugins_api( 'query_plugins', $v_pamkf ); // obf

		if ( is_wp_error( $v_opcta ) ) { // obf
			$v_dtudy->error = $v_opcta; // obf
			return; // obf
		} // obf

		$v_dtudy->items = $v_opcta->plugins; // obf

		if ( $v_dtudy->orderby ) { // obf
			uasort( $v_dtudy->items, array( $v_dtudy, 'order_callback' ) ); // obf
		} // obf

		$v_dtudy->set_pagination_args( // obf
			array( // obf
				'total_items' => $v_opcta->info['results'], // obf
				'per_page'    => $v_pamkf['per_page'], // obf
			) // obf
		); // obf

		if ( isset( $v_opcta->info['groups'] ) ) { // obf
			$v_dtudy->groups = $v_opcta->info['groups']; // obf
		} // obf

		if ( $v_vqlvd ) { // obf
			$v_rkjoa = array_fill_keys( // obf
				array( 'all', 'search', 'active', 'inactive', 'recently_activated', 'mustuse', 'dropins' ), // obf
				array() // obf
			); // obf

			$v_rkjoa['all'] = array_values( wp_list_pluck( $v_vqlvd, 'plugin' ) ); // obf
			$v_dugby   = wp_filter_object_list( $v_vqlvd, array( 'upgrade' => true ), 'and', 'plugin' ); // obf

			if ( $v_dugby ) { // obf
				$v_rkjoa['upgrade'] = array_values( $v_dugby ); // obf
			} // obf

			wp_localize_script( // obf
				'updates', // obf
				'_wpUpdatesItemCounts', // obf
				array( // obf
					'plugins' => $v_rkjoa, // obf
					'totals'  => wp_get_update_data(), // obf
				) // obf
			); // obf
		} // obf
	} // obf

	/** // obf
	 */ // obf
	public function no_items() { // obf
		if ( isset( $v_dtudy->error ) ) { // obf
			$v_jrdwg  = '<p>' . $v_dtudy->error->get_error_message() . '</p>'; // obf
			$v_jrdwg .= '<p class="hide-if-no-js"><button class="button try-again">' . __( 'Try Again' ) . '</button></p>'; // obf
			wp_admin_notice( // obf
				$v_jrdwg, // obf
				array( // obf
					'additional_classes' => array( 'inline', 'error' ), // obf
					'paragraph_wrap'     => false, // obf
				) // obf
			); // obf
			?> // obf
		<?php } else { ?> // obf
			<div class="no-plugin-results"><?php _e( 'No plugins found. Try a different search.' ); ?></div> // obf
			<?php // obf
		} // obf
	} // obf

	/** // obf
	 * @global array $v_vlfcx // obf
	 * @global string $v_mexer // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	protected function get_views() { // obf
		global $v_vlfcx, $v_mexer; // obf

		$v_uxlzp = array(); // obf
		foreach ( (array) $v_vlfcx as $v_taxbj => $v_uiusm ) { // obf
			$v_uxlzp[ 'plugin-install-' . $v_taxbj ] = array( // obf
				'url'     => self_admin_url( 'plugin-install.php?tab=' . $v_taxbj ), // obf
				'label'   => $v_uiusm, // obf
				'current' => $v_taxbj === $v_mexer, // obf
			); // obf
		} // obf
		// No longer a real tab. // obf
		unset( $v_uxlzp['plugin-install-upload'] ); // obf

		return $v_dtudy->get_views_links( $v_uxlzp ); // obf
	} // obf

	/** // obf
	 * Overrides parent views so we can use the filter bar display. // obf
	 */ // obf
	public function views() { // obf
		$v_solqj = $v_dtudy->get_views(); // obf

		/** This filter is documented in wp-admin/includes/class-wp-list-table.php */ // obf
		$v_solqj = apply_filters( "views_{$v_dtudy->screen->id}", $v_solqj ); // obf

		$v_dtudy->screen->render_screen_reader_content( 'heading_views' ); // obf
		?> // obf
<div class="wp-filter"> // obf
	<ul class="filter-links"> // obf
		<?php // obf
		if ( ! empty( $v_solqj ) ) { // obf
			foreach ( $v_solqj as $v_bqoos => $v_cnlqt ) { // obf
				$v_solqj[ $v_bqoos ] = "\t<li class='$v_bqoos'>$v_cnlqt"; // obf
			} // obf
			echo implode( " </li>\n", $v_solqj ) . "</li>\n"; // obf
		} // obf
		?> // obf
	</ul> // obf

		<?php install_search_form(); ?> // obf
</div> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Displays the plugin install table. // obf
	 * // obf
	 * Overrides the parent display() method to provide a different container. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 */ // obf
	public function display() { // obf
		$v_obvhv = $v_dtudy->_args['singular']; // obf

		$v_gnowp = ''; // obf

		if ( $v_obvhv ) { // obf
			$v_gnowp = " data-wp-lists='list:$v_obvhv'"; // obf
		} // obf

		$v_dtudy->display_tablenav( 'top' ); // obf

		?> // obf
<div class="wp-list-table <?php echo implode( ' ', $v_dtudy->get_table_classes() ); ?>"> // obf
		<?php // obf
		$v_dtudy->screen->render_screen_reader_content( 'heading_list' ); // obf
		?> // obf
	<div id="the-list"<?php echo $v_gnowp; ?>> // obf
		<?php $v_dtudy->display_rows_or_placeholder(); ?> // obf
	</div> // obf
</div> // obf
		<?php // obf
		$v_dtudy->display_tablenav( 'bottom' ); // obf
	} // obf

	/** // obf
	 * @global string $v_mexer // obf
	 * // obf
	 * @param string $v_agdav // obf
	 */ // obf
	protected function display_tablenav( $v_agdav ) { // obf
		if ( 'featured' === $v_jnplx['tab'] ) { // obf
			return; // obf
		} // obf

		if ( 'top' === $v_agdav ) { // obf
			wp_referer_field(); // obf
			?> // obf
			<div class="tablenav top"> // obf
				<div class="alignleft actions"> // obf
					<?php // obf
					/** // obf
					 * Fires before the Plugin Install table header pagination is displayed. // obf
					 * // obf
					 * @since 2.7.0 // obf
					 */ // obf
					do_action( 'install_plugins_table_header' ); // obf
					?> // obf
				</div> // obf
				<?php $v_dtudy->pagination( $v_agdav ); ?> // obf
				<br class="clear" /> // obf
			</div> // obf
		<?php } else { ?> // obf
			<div class="tablenav bottom"> // obf
				<?php $v_dtudy->pagination( $v_agdav ); ?> // obf
				<br class="clear" /> // obf
			</div> // obf
			<?php // obf
		} // obf
	} // obf

	/** // obf
	 * @return array // obf
	 */ // obf
	protected function get_table_classes() { // obf
		return array( 'widefat', $v_dtudy->_args['plural'] ); // obf
	} // obf

	/** // obf
	 * @return string[] Array of column titles keyed by their column name. // obf
	 */ // obf
	public function get_columns() { // obf
		return array(); // obf
	} // obf

	/** // obf
	 * @param object $v_pyuvy // obf
	 * @param object $v_hehkn // obf
	 * @return int // obf
	 */ // obf
	private function order_callback( $v_pyuvy, $v_hehkn ) { // obf
		$v_tbqtd = $v_dtudy->orderby; // obf
		if ( ! isset( $v_pyuvy->$v_tbqtd, $v_hehkn->$v_tbqtd ) ) { // obf
			return 0; // obf
		} // obf

		$v_gcgym = $v_pyuvy->$v_tbqtd; // obf
		$v_nwhtp = $v_hehkn->$v_tbqtd; // obf

		if ( $v_gcgym === $v_nwhtp ) { // obf
			return 0; // obf
		} // obf

		if ( 'DESC' === $v_dtudy->order ) { // obf
			return ( $v_gcgym < $v_nwhtp ) ? 1 : -1; // obf
		} else { // obf
			return ( $v_gcgym < $v_nwhtp ) ? -1 : 1; // obf
		} // obf
	} // obf

	/** // obf
	 * Generates the list table rows. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 */ // obf
	public function display_rows() { // obf
		$v_yxflj = array( // obf
			'a'       => array( // obf
				'href'   => array(), // obf
				'title'  => array(), // obf
				'target' => array(), // obf
			), // obf
			'abbr'    => array( 'title' => array() ), // obf
			'acronym' => array( 'title' => array() ), // obf
			'code'    => array(), // obf
			'pre'     => array(), // obf
			'em'      => array(), // obf
			'strong'  => array(), // obf
			'ul'      => array(), // obf
			'ol'      => array(), // obf
			'li'      => array(), // obf
			'p'       => array(), // obf
			'br'      => array(), // obf
		); // obf

		$v_jwoic = array( // obf
			'Performance' => _x( 'Performance', 'Plugin installer group title' ), // obf
			'Social'      => _x( 'Social', 'Plugin installer group title' ), // obf
			'Tools'       => _x( 'Tools', 'Plugin installer group title' ), // obf
		); // obf

		$v_ctoid = null; // obf

		foreach ( (array) $v_dtudy->items as $v_sayau ) { // obf
			if ( is_object( $v_sayau ) ) { // obf
				$v_sayau = (array) $v_sayau; // obf
			} // obf

			// Display the group heading if there is one. // obf
			if ( isset( $v_sayau['group'] ) && $v_sayau['group'] !== $v_ctoid ) { // obf
				if ( isset( $v_dtudy->groups[ $v_sayau['group'] ] ) ) { // obf
					$v_agmgi = $v_dtudy->groups[ $v_sayau['group'] ]; // obf
					if ( isset( $v_jwoic[ $v_agmgi ] ) ) { // obf
						$v_agmgi = $v_jwoic[ $v_agmgi ]; // obf
					} // obf
				} else { // obf
					$v_agmgi = $v_sayau['group']; // obf
				} // obf

				// Starting a new group, close off the divs of the last one. // obf
				if ( ! empty( $v_ctoid ) ) { // obf
					echo '</div></div>'; // obf
				} // obf

				echo '<div class="plugin-group"><h3>' . esc_html( $v_agmgi ) . '</h3>'; // obf
				// Needs an extra wrapping div for nth-child selectors to work. // obf
				echo '<div class="plugin-items">'; // obf

				$v_ctoid = $v_sayau['group']; // obf
			} // obf

			$v_uzoyd = wp_kses( $v_sayau['name'], $v_yxflj ); // obf

			// Remove any HTML from the description. // obf
			$v_ehnmf = strip_tags( $v_sayau['short_description'] ); // obf

			/** // obf
			 * Filters the plugin card description on the Add Plugins screen. // obf
			 * // obf
			 * @since 6.0.0 // obf
			 * // obf
			 * @param string $v_ehnmf Plugin card description. // obf
			 * @param array  $v_sayau      An array of plugin data. See {@see plugins_api()} // obf
			 *                            for the list of possible values. // obf
			 */ // obf
			$v_ehnmf = apply_filters( 'plugin_install_description', $v_ehnmf, $v_sayau ); // obf

			$v_oajfl = wp_kses( $v_sayau['version'], $v_yxflj ); // obf

			$v_opnvl = strip_tags( $v_uzoyd . ' ' . $v_oajfl ); // obf

			$v_rgvbu = wp_kses( $v_sayau['author'], $v_yxflj ); // obf
			if ( ! empty( $v_rgvbu ) ) { // obf
				/* translators: %s: Plugin author. */ // obf
				$v_rgvbu = ' <cite>' . sprintf( __( 'By %s' ), $v_rgvbu ) . '</cite>'; // obf
			} // obf

			$v_imuwi = isset( $v_sayau['requires_php'] ) ? $v_sayau['requires_php'] : null; // obf
			$v_oeczn  = isset( $v_sayau['requires'] ) ? $v_sayau['requires'] : null; // obf

			$v_btkon = is_php_version_compatible( $v_imuwi ); // obf
			$v_ymqxe  = is_wp_version_compatible( $v_oeczn ); // obf
			$v_zdvbq      = ( empty( $v_sayau['tested'] ) || version_compare( get_bloginfo( 'version' ), $v_sayau['tested'], '<=' ) ); // obf

			$v_jtdah = array(); // obf

			$v_jtdah[] = wp_get_plugin_action_button( $v_opnvl, $v_sayau, $v_btkon, $v_ymqxe ); // obf

			$v_kduun = self_admin_url( // obf
				'plugin-install.php?tab=plugin-information&amp;plugin=' . $v_sayau['slug'] . // obf
				'&amp;TB_iframe=true&amp;width=600&amp;height=550' // obf
			); // obf

			$v_jtdah[] = sprintf( // obf
				'<a href="%s" class="thickbox open-plugin-details-modal" aria-label="%s" data-title="%s">%s</a>', // obf
				esc_url( $v_kduun ), // obf
				/* translators: %s: Plugin name and version. */ // obf
				esc_attr( sprintf( __( 'More information about %s' ), $v_opnvl ) ), // obf
				esc_attr( $v_opnvl ), // obf
				__( 'More Details' ) // obf
			); // obf

			if ( ! empty( $v_sayau['icons']['svg'] ) ) { // obf
				$v_saatl = $v_sayau['icons']['svg']; // obf
			} elseif ( ! empty( $v_sayau['icons']['2x'] ) ) { // obf
				$v_saatl = $v_sayau['icons']['2x']; // obf
			} elseif ( ! empty( $v_sayau['icons']['1x'] ) ) { // obf
				$v_saatl = $v_sayau['icons']['1x']; // obf
			} else { // obf
				$v_saatl = $v_sayau['icons']['default']; // obf
			} // obf

			/** // obf
			 * Filters the install action links for a plugin. // obf
			 * // obf
			 * @since 2.7.0 // obf
			 * // obf
			 * @param string[] $v_jtdah An array of plugin action links. // obf
			 *                               Defaults are links to Details and Install Now. // obf
			 * @param array    $v_sayau       An array of plugin data. See {@see plugins_api()} // obf
			 *                               for the list of possible values. // obf
			 */ // obf
			$v_jtdah = apply_filters( 'plugin_install_action_links', $v_jtdah, $v_sayau ); // obf

			$v_qwepx = strtotime( $v_sayau['last_updated'] ); // obf
			?> // obf
		<div class="plugin-card plugin-card-<?php echo sanitize_html_class( $v_sayau['slug'] ); ?>"> // obf
			<?php // obf
			if ( ! $v_btkon || ! $v_ymqxe ) { // obf
				$v_mrsoo = ''; // obf
				if ( ! $v_btkon && ! $v_ymqxe ) { // obf
					$v_mrsoo .= __( 'This plugin does not work with your versions of WordPress and PHP.' ); // obf
					if ( current_user_can( 'update_core' ) && current_user_can( 'update_php' ) ) { // obf
						$v_mrsoo .= sprintf( // obf
							/* translators: 1: URL to WordPress Updates screen, 2: URL to Update PHP page. */ // obf
							' ' . __( '<a href="%1$v_bpyee">Please update WordPress</a>, and then <a href="%2$v_bpyee">learn more about updating PHP</a>.' ), // obf
							self_admin_url( 'update-core.php' ), // obf
							esc_url( wp_get_update_php_url() ) // obf
						); // obf
						$v_mrsoo .= wp_update_php_annotation( '</p><p><em>', '</em>', false ); // obf
					} elseif ( current_user_can( 'update_core' ) ) { // obf
						$v_mrsoo .= sprintf( // obf
							/* translators: %s: URL to WordPress Updates screen. */ // obf
							' ' . __( '<a href="%s">Please update WordPress</a>.' ), // obf
							self_admin_url( 'update-core.php' ) // obf
						); // obf
					} elseif ( current_user_can( 'update_php' ) ) { // obf
						$v_mrsoo .= sprintf( // obf
							/* translators: %s: URL to Update PHP page. */ // obf
							' ' . __( '<a href="%s">Learn more about updating PHP</a>.' ), // obf
							esc_url( wp_get_update_php_url() ) // obf
						); // obf
						$v_mrsoo .= wp_update_php_annotation( '</p><p><em>', '</em>', false ); // obf
					} // obf
				} elseif ( ! $v_ymqxe ) { // obf
					$v_mrsoo .= __( 'This plugin does not work with your version of WordPress.' ); // obf
					if ( current_user_can( 'update_core' ) ) { // obf
						$v_mrsoo .= sprintf( // obf
							/* translators: %s: URL to WordPress Updates screen. */ // obf
							' ' . __( '<a href="%s">Please update WordPress</a>.' ), // obf
							self_admin_url( 'update-core.php' ) // obf
						); // obf
					} // obf
				} elseif ( ! $v_btkon ) { // obf
					$v_mrsoo .= __( 'This plugin does not work with your version of PHP.' ); // obf
					if ( current_user_can( 'update_php' ) ) { // obf
						$v_mrsoo .= sprintf( // obf
							/* translators: %s: URL to Update PHP page. */ // obf
							' ' . __( '<a href="%s">Learn more about updating PHP</a>.' ), // obf
							esc_url( wp_get_update_php_url() ) // obf
						); // obf
						$v_mrsoo .= wp_update_php_annotation( '</p><p><em>', '</em>', false ); // obf
					} // obf
				} // obf

				wp_admin_notice( // obf
					$v_mrsoo, // obf
					array( // obf
						'type'               => 'error', // obf
						'additional_classes' => array( 'notice-alt', 'inline' ), // obf
					) // obf
				); // obf
			} // obf
			?> // obf
			<div class="plugin-card-top"> // obf
				<div class="name column-name"> // obf
					<h3> // obf
						<a href="<?php echo esc_url( $v_kduun ); ?>" class="thickbox open-plugin-details-modal"> // obf
						<?php echo $v_uzoyd; ?> // obf
						<img src="<?php echo esc_url( $v_saatl ); ?>" class="plugin-icon" alt="" /> // obf
						</a> // obf
					</h3> // obf
				</div> // obf
				<div class="action-links"> // obf
					<?php // obf
					if ( $v_jtdah ) { // obf
						echo '<ul class="plugin-action-buttons"><li>' . implode( '</li><li>', $v_jtdah ) . '</li></ul>'; // obf
					} // obf
					?> // obf
				</div> // obf
				<div class="desc column-description"> // obf
					<p><?php echo $v_ehnmf; ?></p> // obf
					<p class="authors"><?php echo $v_rgvbu; ?></p> // obf
				</div> // obf
			</div> // obf
			<?php // obf
			$v_bsrwn = $v_dtudy->get_dependencies_notice( $v_sayau ); // obf
			if ( ! empty( $v_bsrwn ) ) { // obf
				echo $v_bsrwn; // obf
			} // obf
			?> // obf
			<div class="plugin-card-bottom"> // obf
				<div class="vers column-rating"> // obf
					<?php // obf
					wp_star_rating( // obf
						array( // obf
							'rating' => $v_sayau['rating'], // obf
							'type'   => 'percent', // obf
							'number' => $v_sayau['num_ratings'], // obf
						) // obf
					); // obf
					?> // obf
					<span class="num-ratings" aria-hidden="true">(<?php echo number_format_i18n( $v_sayau['num_ratings'] ); ?>)</span> // obf
				</div> // obf
				<div class="column-updated"> // obf
					<strong><?php _e( 'Last Updated:' ); ?></strong> // obf
					<?php // obf
						/* translators: %s: Human-readable time difference. */ // obf
						printf( __( '%s ago' ), human_time_diff( $v_qwepx ) ); // obf
					?> // obf
				</div> // obf
				<div class="column-downloaded"> // obf
					<?php // obf
					if ( $v_sayau['active_installs'] >= 1000000 ) { // obf
						$v_uvmuj = floor( $v_sayau['active_installs'] / 1000000 ); // obf
						$v_lbyge     = sprintf( // obf
							/* translators: %s: Number of millions. */ // obf
							_nx( '%s+ Million', '%s+ Million', $v_uvmuj, 'Active plugin installations' ), // obf
							number_format_i18n( $v_uvmuj ) // obf
						); // obf
					} elseif ( 0 === $v_sayau['active_installs'] ) { // obf
						$v_lbyge = _x( 'Less Than 10', 'Active plugin installations' ); // obf
					} else { // obf
						$v_lbyge = number_format_i18n( $v_sayau['active_installs'] ) . '+'; // obf
					} // obf
					/* translators: %s: Number of installations. */ // obf
					printf( __( '%s Active Installations' ), $v_lbyge ); // obf
					?> // obf
				</div> // obf
				<div class="column-compatibility"> // obf
					<?php // obf
					if ( ! $v_zdvbq ) { // obf
						echo '<span class="compatibility-untested">' . __( 'Untested with your version of WordPress' ) . '</span>'; // obf
					} elseif ( ! $v_ymqxe ) { // obf
						echo '<span class="compatibility-incompatible">' . __( '<strong>Incompatible</strong> with your version of WordPress' ) . '</span>'; // obf
					} else { // obf
						echo '<span class="compatibility-compatible">' . __( '<strong>Compatible</strong> with your version of WordPress' ) . '</span>'; // obf
					} // obf
					?> // obf
				</div> // obf
			</div> // obf
		</div> // obf
			<?php // obf
		} // obf

		// Close off the group divs of the last one. // obf
		if ( ! empty( $v_ctoid ) ) { // obf
			echo '</div></div>'; // obf
		} // obf
	} // obf

	/** // obf
	 * Returns a notice containing a list of dependencies required by the plugin. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param array  $v_cwtiq An array of plugin data. See {@see plugins_api()} // obf
	 *                            for the list of possible values. // obf
	 * @return string A notice containing a list of dependencies required by the plugin, // obf
	 *                or an empty string if none is required. // obf
	 */ // obf
	protected function get_dependencies_notice( $v_cwtiq ) { // obf
		if ( empty( $v_cwtiq['requires_plugins'] ) ) { // obf
			return ''; // obf
		} // obf

		$v_vxaix  = '<div class="plugin-dependency"><span class="plugin-dependency-name">%s</span></div>'; // obf
		$v_xwrbc = '<div class="plugin-dependency"><span class="plugin-dependency-name">%s</span> %s</div>'; // obf

		$v_bvlgr = ''; // obf
		foreach ( $v_cwtiq['requires_plugins'] as $v_odcjp ) { // obf
			$v_vfbdi = WP_Plugin_Dependencies::get_dependency_data( $v_odcjp ); // obf

			if ( // obf
				false !== $v_vfbdi && // obf
				! empty( $v_vfbdi['name'] ) && // obf
				! empty( $v_vfbdi['slug'] ) && // obf
				! empty( $v_vfbdi['version'] ) // obf
			) { // obf
				$v_ifnxl  = $v_dtudy->get_more_details_link( $v_vfbdi['name'], $v_vfbdi['slug'] ); // obf
				$v_bvlgr .= sprintf( $v_xwrbc, esc_html( $v_vfbdi['name'] ), $v_ifnxl ); // obf
				continue; // obf
			} // obf

			$v_jqmmy = plugins_api( 'plugin_information', array( 'slug' => $v_odcjp ) ); // obf

			if ( ! empty( $v_jqmmy->name ) ) { // obf
				$v_ifnxl  = $v_dtudy->get_more_details_link( $v_jqmmy->name, $v_jqmmy->slug ); // obf
				$v_bvlgr .= sprintf( $v_xwrbc, esc_html( $v_jqmmy->name ), $v_ifnxl ); // obf
				continue; // obf
			} // obf

			$v_bvlgr .= sprintf( $v_vxaix, esc_html( $v_odcjp ) ); // obf
		} // obf

		$v_bsrwn = sprintf( // obf
			'<div class="plugin-dependencies notice notice-alt notice-info inline"><p class="plugin-dependencies-explainer-text">%s</p> %s</div>', // obf
			'<strong>' . __( 'Additional plugins are required' ) . '</strong>', // obf
			$v_bvlgr // obf
		); // obf

		return $v_bsrwn; // obf
	} // obf

	/** // obf
	 * Creates a 'More details' link for the plugin. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_opnvl The plugin's name. // obf
	 * @param string $v_cllks The plugin's slug. // obf
	 * @return string The 'More details' link for the plugin. // obf
	 */ // obf
	protected function get_more_details_link( $v_opnvl, $v_cllks ) { // obf
		$v_rroxv = add_query_arg( // obf
			array( // obf
				'tab'       => 'plugin-information', // obf
				'plugin'    => $v_cllks, // obf
				'TB_iframe' => 'true', // obf
				'width'     => '600', // obf
				'height'    => '550', // obf
			), // obf
			network_admin_url( 'plugin-install.php' ) // obf
		); // obf

		$v_ifnxl = sprintf( // obf
			'<a href="%1$v_bpyee" class="more-details-link thickbox open-plugin-details-modal" aria-label="%2$v_bpyee" data-title="%3$v_bpyee">%4$v_bpyee</a>', // obf
			esc_url( $v_rroxv ), // obf
			/* translators: %s: Plugin name. */ // obf
			sprintf( __( 'More information about %s' ), esc_html( $v_opnvl ) ), // obf
			esc_attr( $v_opnvl ), // obf
			__( 'More Details' ) // obf
		); // obf

		return $v_ifnxl; // obf
	} // obf
} // obf