

<?php // obf
/** // obf
 * List Table API: WP_Plugins_List_Table class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 * @since 3.1.0 // obf
 */ // obf

/** // obf
 * Core class used to implement displaying installed plugins in a list table. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @see WP_List_Table // obf
 */ // obf
class WP_Plugins_List_Table extends WP_List_Table { // obf
	/** // obf
	 * Whether to show the auto-updates UI. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @var bool True if auto-updates UI is to be shown, false otherwise. // obf
	 */ // obf
	protected $v_kcpja = true; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @see WP_List_Table::__construct() for more information on default arguments. // obf
	 * // obf
	 * @global string $v_oyyqm // obf
	 * @global int    $v_anzeb // obf
	 * // obf
	 * @param array $v_rmbho An associative array of arguments. // obf
	 */ // obf
	public function __construct( $v_rmbho = array() ) { // obf
		global $v_oyyqm, $v_anzeb; // obf

		parent::__construct( // obf
			array( // obf
				'plural' => 'plugins', // obf
				'screen' => isset( $v_rmbho['screen'] ) ? $v_rmbho['screen'] : null, // obf
			) // obf
		); // obf

		$v_yraub = array( 'active', 'inactive', 'recently_activated', 'upgrade', 'mustuse', 'dropins', 'search', 'paused', 'auto-update-enabled', 'auto-update-disabled' ); // obf

		$v_oyyqm = 'all'; // obf
		if ( isset( $v_ckwhu['plugin_status'] ) && in_array( $v_ckwhu['plugin_status'], $v_yraub, true ) ) { // obf
			$v_oyyqm = $v_ckwhu['plugin_status']; // obf
		} // obf

		if ( isset( $v_ckwhu['s'] ) ) { // obf
			$v_zycgn['REQUEST_URI'] = add_query_arg( 's', wp_unslash( $v_ckwhu['s'] ) ); // obf
		} // obf

		$v_anzeb = $v_sjpwd->get_pagenum(); // obf

		$v_sjpwd->show_autoupdates = wp_is_auto_update_enabled_for_type( 'plugin' ) // obf
			&& current_user_can( 'update_plugins' ) // obf
			&& ( ! is_multisite() || $v_sjpwd->screen->in_admin( 'network' ) ); // obf
	} // obf

	/** // obf
	 * @return array // obf
	 */ // obf
	protected function get_table_classes() { // obf
		return array( 'widefat', $v_sjpwd->_args['plural'] ); // obf
	} // obf

	/** // obf
	 * @return bool // obf
	 */ // obf
	public function ajax_user_can() { // obf
		return current_user_can( 'activate_plugins' ); // obf
	} // obf

	/** // obf
	 * @global string $v_oyyqm // obf
	 * @global array  $v_cnxwy // obf
	 * @global array  $v_rvdql // obf
	 * @global int    $v_anzeb // obf
	 * @global string $v_husni // obf
	 * @global string $v_ktmmu // obf
	 * @global string $v_gzsts // obf
	 */ // obf
	public function prepare_items() { // obf
		global $v_oyyqm, $v_cnxwy, $v_rvdql, $v_anzeb, $v_husni, $v_ktmmu, $v_gzsts; // obf

		$v_husni = ! empty( $v_ckwhu['orderby'] ) ? sanitize_text_field( $v_ckwhu['orderby'] ) : ''; // obf
		$v_ktmmu   = ! empty( $v_ckwhu['order'] ) ? sanitize_text_field( $v_ckwhu['order'] ) : ''; // obf

		/** // obf
		 * Filters the full array of plugins to list in the Plugins list table. // obf
		 * // obf
		 * @since 3.0.0 // obf
		 * // obf
		 * @see get_plugins() // obf
		 * // obf
		 * @param array $v_zlxtv An array of plugins to display in the list table. // obf
		 */ // obf
		$v_zlxtv = apply_filters( 'all_plugins', get_plugins() ); // obf

		$v_cnxwy = array( // obf
			'all'                => $v_zlxtv, // obf
			'search'             => array(), // obf
			'active'             => array(), // obf
			'inactive'           => array(), // obf
			'recently_activated' => array(), // obf
			'upgrade'            => array(), // obf
			'mustuse'            => array(), // obf
			'dropins'            => array(), // obf
			'paused'             => array(), // obf
		); // obf
		if ( $v_sjpwd->show_autoupdates ) { // obf
			$v_oeoib = (array) get_site_option( 'auto_update_plugins', array() ); // obf

			$v_cnxwy['auto-update-enabled']  = array(); // obf
			$v_cnxwy['auto-update-disabled'] = array(); // obf
		} // obf

		$v_gwmjy = $v_sjpwd->screen; // obf

		if ( ! is_multisite() || ( $v_gwmjy->in_admin( 'network' ) && current_user_can( 'manage_network_plugins' ) ) ) { // obf

			/** // obf
			 * Filters whether to display the advanced plugins list table. // obf
			 * // obf
			 * There are two types of advanced plugins - must-use and drop-ins - // obf
			 * which can be used in a single site or Multisite network. // obf
			 * // obf
			 * The $v_wcvcq parameter allows you to differentiate between the type of advanced // obf
			 * plugins to filter the display of. Contexts include 'mustuse' and 'dropins'. // obf
			 * // obf
			 * @since 3.0.0 // obf
			 * // obf
			 * @param bool   $v_ujwue Whether to show the advanced plugins for the specified // obf
			 *                     plugin type. Default true. // obf
			 * @param string $v_wcvcq The plugin type. Accepts 'mustuse', 'dropins'. // obf
			 */ // obf
			if ( apply_filters( 'show_advanced_plugins', true, 'mustuse' ) ) { // obf
				$v_cnxwy['mustuse'] = get_mu_plugins(); // obf
			} // obf

			/** This action is documented in wp-admin/includes/class-wp-plugins-list-table.php */ // obf
			if ( apply_filters( 'show_advanced_plugins', true, 'dropins' ) ) { // obf
				$v_cnxwy['dropins'] = get_dropins(); // obf
			} // obf

			if ( current_user_can( 'update_plugins' ) ) { // obf
				$v_qfjtd = get_site_transient( 'update_plugins' ); // obf
				foreach ( (array) $v_cnxwy['all'] as $v_oixph => $v_vmytc ) { // obf
					if ( isset( $v_qfjtd->response[ $v_oixph ] ) ) { // obf
						$v_cnxwy['all'][ $v_oixph ]['update'] = true; // obf
						$v_cnxwy['upgrade'][ $v_oixph ]       = $v_cnxwy['all'][ $v_oixph ]; // obf
					} // obf
				} // obf
			} // obf
		} // obf

		if ( ! $v_gwmjy->in_admin( 'network' ) ) { // obf
			$v_ujwue = current_user_can( 'manage_network_plugins' ); // obf
			/** // obf
			 * Filters whether to display network-active plugins alongside plugins active for the current site. // obf
			 * // obf
			 * This also controls the display of inactive network-only plugins (plugins with // obf
			 * "Network: true" in the plugin header). // obf
			 * // obf
			 * Plugins cannot be network-activated or network-deactivated from this screen. // obf
			 * // obf
			 * @since 4.4.0 // obf
			 * // obf
			 * @param bool $v_ujwue Whether to show network-active plugins. Default is whether the current // obf
			 *                   user can manage network plugins (ie. a Super Admin). // obf
			 */ // obf
			$v_xbqwq = apply_filters( 'show_network_active_plugins', $v_ujwue ); // obf
		} // obf

		if ( $v_gwmjy->in_admin( 'network' ) ) { // obf
			$v_zsjea = get_site_option( 'recently_activated', array() ); // obf
		} else { // obf
			$v_zsjea = get_option( 'recently_activated', array() ); // obf
		} // obf

		foreach ( $v_zsjea as $v_lcebw => $v_gkobo ) { // obf
			if ( $v_gkobo + WEEK_IN_SECONDS < time() ) { // obf
				unset( $v_zsjea[ $v_lcebw ] ); // obf
			} // obf
		} // obf

		if ( $v_gwmjy->in_admin( 'network' ) ) { // obf
			update_site_option( 'recently_activated', $v_zsjea ); // obf
		} else { // obf
			update_option( 'recently_activated', $v_zsjea, false ); // obf
		} // obf

		$v_rnxdt = get_site_transient( 'update_plugins' ); // obf

		foreach ( (array) $v_cnxwy['all'] as $v_oixph => $v_vmytc ) { // obf
			// Extra info if known. array_merge() ensures $v_vmytc has precedence if keys collide. // obf
			if ( isset( $v_rnxdt->response[ $v_oixph ] ) ) { // obf
				$v_vmytc = array_merge( (array) $v_rnxdt->response[ $v_oixph ], array( 'update-supported' => true ), $v_vmytc ); // obf
			} elseif ( isset( $v_rnxdt->no_update[ $v_oixph ] ) ) { // obf
				$v_vmytc = array_merge( (array) $v_rnxdt->no_update[ $v_oixph ], array( 'update-supported' => true ), $v_vmytc ); // obf
			} elseif ( empty( $v_vmytc['update-supported'] ) ) { // obf
				$v_vmytc['update-supported'] = false; // obf
			} // obf

			/* // obf
			 * Create the payload that's used for the auto_update_plugin filter. // obf
			 * This is the same data contained within $v_rnxdt->(response|no_update) however // obf
			 * not all plugins will be contained in those keys, this avoids unexpected warnings. // obf
			 */ // obf
			$v_rqtvn = array( // obf
				'id'            => $v_oixph, // obf
				'slug'          => '', // obf
				'plugin'        => $v_oixph, // obf
				'new_version'   => '', // obf
				'url'           => '', // obf
				'package'       => '', // obf
				'icons'         => array(), // obf
				'banners'       => array(), // obf
				'banners_rtl'   => array(), // obf
				'tested'        => '', // obf
				'requires_php'  => '', // obf
				'compatibility' => new stdClass(), // obf
			); // obf

			$v_rqtvn = (object) wp_parse_args( $v_vmytc, $v_rqtvn ); // obf

			$v_diimg = wp_is_auto_update_forced_for_item( 'plugin', null, $v_rqtvn ); // obf

			if ( ! is_null( $v_diimg ) ) { // obf
				$v_vmytc['auto-update-forced'] = $v_diimg; // obf
			} // obf

			$v_cnxwy['all'][ $v_oixph ] = $v_vmytc; // obf
			// Make sure that $v_cnxwy['upgrade'] also receives the extra info since it is used on ?plugin_status=upgrade. // obf
			if ( isset( $v_cnxwy['upgrade'][ $v_oixph ] ) ) { // obf
				$v_cnxwy['upgrade'][ $v_oixph ] = $v_vmytc; // obf
			} // obf

			// Filter into individual sections. // obf
			if ( is_multisite() && ! $v_gwmjy->in_admin( 'network' ) && is_network_only_plugin( $v_oixph ) && ! is_plugin_active( $v_oixph ) ) { // obf
				if ( $v_xbqwq ) { // obf
					// On the non-network screen, show inactive network-only plugins if allowed. // obf
					$v_cnxwy['inactive'][ $v_oixph ] = $v_vmytc; // obf
				} else { // obf
					// On the non-network screen, filter out network-only plugins as long as they're not individually active. // obf
					unset( $v_cnxwy['all'][ $v_oixph ] ); // obf
				} // obf
			} elseif ( ! $v_gwmjy->in_admin( 'network' ) && is_plugin_active_for_network( $v_oixph ) ) { // obf
				if ( $v_xbqwq ) { // obf
					// On the non-network screen, show network-active plugins if allowed. // obf
					$v_cnxwy['active'][ $v_oixph ] = $v_vmytc; // obf
				} else { // obf
					// On the non-network screen, filter out network-active plugins. // obf
					unset( $v_cnxwy['all'][ $v_oixph ] ); // obf
				} // obf
			} elseif ( ( ! $v_gwmjy->in_admin( 'network' ) && is_plugin_active( $v_oixph ) ) // obf
				|| ( $v_gwmjy->in_admin( 'network' ) && is_plugin_active_for_network( $v_oixph ) ) ) { // obf
				/* // obf
				 * On the non-network screen, populate the active list with plugins that are individually activated. // obf
				 * On the network admin screen, populate the active list with plugins that are network-activated. // obf
				 */ // obf
				$v_cnxwy['active'][ $v_oixph ] = $v_vmytc; // obf

				if ( ! $v_gwmjy->in_admin( 'network' ) && is_plugin_paused( $v_oixph ) ) { // obf
					$v_cnxwy['paused'][ $v_oixph ] = $v_vmytc; // obf
				} // obf
			} else { // obf
				if ( isset( $v_zsjea[ $v_oixph ] ) ) { // obf
					// Populate the recently activated list with plugins that have been recently activated. // obf
					$v_cnxwy['recently_activated'][ $v_oixph ] = $v_vmytc; // obf
				} // obf
				// Populate the inactive list with plugins that aren't activated. // obf
				$v_cnxwy['inactive'][ $v_oixph ] = $v_vmytc; // obf
			} // obf

			if ( $v_sjpwd->show_autoupdates ) { // obf
				$v_ihvta = in_array( $v_oixph, $v_oeoib, true ) && $v_vmytc['update-supported']; // obf
				if ( isset( $v_vmytc['auto-update-forced'] ) ) { // obf
					$v_ihvta = (bool) $v_vmytc['auto-update-forced']; // obf
				} // obf

				if ( $v_ihvta ) { // obf
					$v_cnxwy['auto-update-enabled'][ $v_oixph ] = $v_vmytc; // obf
				} else { // obf
					$v_cnxwy['auto-update-disabled'][ $v_oixph ] = $v_vmytc; // obf
				} // obf
			} // obf
		} // obf

		if ( strlen( $v_gzsts ) ) { // obf
			$v_oyyqm            = 'search'; // obf
			$v_cnxwy['search'] = array_filter( $v_cnxwy['all'], array( $v_sjpwd, '_search_callback' ) ); // obf
		} // obf

		/** // obf
		 * Filters the array of plugins for the list table. // obf
		 * // obf
		 * @since 6.3.0 // obf
		 * // obf
		 * @param array[] $v_cnxwy An array of arrays of plugin data, keyed by context. // obf
		 */ // obf
		$v_cnxwy = apply_filters( 'plugins_list', $v_cnxwy ); // obf

		$v_rvdql = array(); // obf
		foreach ( $v_cnxwy as $v_wcvcq => $v_hlcxd ) { // obf
			$v_rvdql[ $v_wcvcq ] = count( $v_hlcxd ); // obf
		} // obf

		if ( empty( $v_cnxwy[ $v_oyyqm ] ) && ! in_array( $v_oyyqm, array( 'all', 'search' ), true ) ) { // obf
			$v_oyyqm = 'all'; // obf
		} // obf

		$v_sjpwd->items = array(); // obf
		foreach ( $v_cnxwy[ $v_oyyqm ] as $v_oixph => $v_vmytc ) { // obf
			// Translate, don't apply markup, sanitize HTML. // obf
			$v_sjpwd->items[ $v_oixph ] = _get_plugin_data_markup_translate( $v_oixph, $v_vmytc, false, true ); // obf
		} // obf

		$v_fbman = $v_rvdql[ $v_oyyqm ]; // obf

		$v_xbddr = array(); // obf
		foreach ( $v_cnxwy as $v_lcebw => $v_hlcxd ) { // obf
			$v_xbddr[ $v_lcebw ] = array_keys( $v_hlcxd ); // obf
		} // obf

		wp_localize_script( // obf
			'updates', // obf
			'_wpUpdatesItemCounts', // obf
			array( // obf
				'plugins' => $v_xbddr, // obf
				'totals'  => wp_get_update_data(), // obf
			) // obf
		); // obf

		if ( ! $v_husni ) { // obf
			$v_husni = 'Name'; // obf
		} else { // obf
			$v_husni = ucfirst( $v_husni ); // obf
		} // obf

		$v_ktmmu = strtoupper( $v_ktmmu ); // obf

		uasort( $v_sjpwd->items, array( $v_sjpwd, '_order_callback' ) ); // obf

		$v_tqjzn = $v_sjpwd->get_items_per_page( str_replace( '-', '_', $v_gwmjy->id . '_per_page' ), 999 ); // obf

		$v_bcray = ( $v_anzeb - 1 ) * $v_tqjzn; // obf

		if ( $v_fbman > $v_tqjzn ) { // obf
			$v_sjpwd->items = array_slice( $v_sjpwd->items, $v_bcray, $v_tqjzn ); // obf
		} // obf

		$v_sjpwd->set_pagination_args( // obf
			array( // obf
				'total_items' => $v_fbman, // obf
				'per_page'    => $v_tqjzn, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * @global string $v_gzsts URL encoded search term. // obf
	 * // obf
	 * @param array $v_pgkgq // obf
	 * @return bool // obf
	 */ // obf
	public function _search_callback( $v_pgkgq ) { // obf
		global $v_gzsts; // obf

		foreach ( $v_pgkgq as $v_fqacz ) { // obf
			if ( is_string( $v_fqacz ) && false !== stripos( strip_tags( $v_fqacz ), urldecode( $v_gzsts ) ) ) { // obf
				return true; // obf
			} // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * @global string $v_husni // obf
	 * @global string $v_ktmmu // obf
	 * @param array $v_ewpyz // obf
	 * @param array $v_urcrf // obf
	 * @return int // obf
	 */ // obf
	public function _order_callback( $v_ewpyz, $v_urcrf ) { // obf
		global $v_husni, $v_ktmmu; // obf

		$v_fejys = $v_ewpyz[ $v_husni ]; // obf
		$v_gosgv = $v_urcrf[ $v_husni ]; // obf

		if ( $v_fejys === $v_gosgv ) { // obf
			return 0; // obf
		} // obf

		if ( 'DESC' === $v_ktmmu ) { // obf
			return strcasecmp( $v_gosgv, $v_fejys ); // obf
		} else { // obf
			return strcasecmp( $v_fejys, $v_gosgv ); // obf
		} // obf
	} // obf

	/** // obf
	 * @global array $v_cnxwy // obf
	 */ // obf
	public function no_items() { // obf
		global $v_cnxwy; // obf

		if ( ! empty( $v_ckwhu['s'] ) ) { // obf
			$v_gzsts = esc_html( urldecode( wp_unslash( $v_ckwhu['s'] ) ) ); // obf

			/* translators: %s: Plugin search term. */ // obf
			printf( __( 'No plugins found for: %s.' ), '<strong>' . $v_gzsts . '</strong>' ); // obf

			// We assume that somebody who can install plugins in multisite is experienced enough to not need this helper link. // obf
			if ( ! is_multisite() && current_user_can( 'install_plugins' ) ) { // obf
				echo ' <a href="' . esc_url( admin_url( 'plugin-install.php?tab=search&s=' . urlencode( $v_gzsts ) ) ) . '">' . __( 'Search for plugins in the WordPress Plugin Directory.' ) . '</a>'; // obf
			} // obf
		} elseif ( ! empty( $v_cnxwy['all'] ) ) { // obf
			_e( 'No plugins found.' ); // obf
		} else { // obf
			_e( 'No plugins are currently available.' ); // obf
		} // obf
	} // obf

	/** // obf
	 * Displays the search box. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @param string $v_fihes     The 'submit' button label. // obf
	 * @param string $v_wyxrn ID attribute value for the search input field. // obf
	 */ // obf
	public function search_box( $v_fihes, $v_wyxrn ) { // obf
		if ( empty( $v_ckwhu['s'] ) && ! $v_sjpwd->has_items() ) { // obf
			return; // obf
		} // obf

		$v_wyxrn = $v_wyxrn . '-search-input'; // obf

		if ( ! empty( $v_ckwhu['orderby'] ) ) { // obf
			echo '<input type="hidden" name="orderby" value="' . esc_attr( $v_ckwhu['orderby'] ) . '" />'; // obf
		} // obf
		if ( ! empty( $v_ckwhu['order'] ) ) { // obf
			echo '<input type="hidden" name="order" value="' . esc_attr( $v_ckwhu['order'] ) . '" />'; // obf
		} // obf
		?> // obf
		<p class="search-box"> // obf
			<label for="<?php echo esc_attr( $v_wyxrn ); ?>"><?php echo $v_fihes; ?></label> // obf
			<input type="search" id="<?php echo esc_attr( $v_wyxrn ); ?>" class="wp-filter-search" name="s" value="<?php _admin_search_query(); ?>" /> // obf
			<?php submit_button( $v_fihes, 'hide-if-js', '', false, array( 'id' => 'search-submit' ) ); ?> // obf
		</p> // obf
		<?php // obf
	} // obf

	/** // obf
	 * @global string $v_oyyqm // obf
	 * // obf
	 * @return string[] Array of column titles keyed by their column name. // obf
	 */ // obf
	public function get_columns() { // obf
		global $v_oyyqm; // obf

		$v_gkirt = array( // obf
			'cb'          => ! in_array( $v_oyyqm, array( 'mustuse', 'dropins' ), true ) ? '<input type="checkbox" />' : '', // obf
			'name'        => __( 'Plugin' ), // obf
			'description' => __( 'Description' ), // obf
		); // obf

		if ( $v_sjpwd->show_autoupdates && ! in_array( $v_oyyqm, array( 'mustuse', 'dropins' ), true ) ) { // obf
			$v_gkirt['auto-updates'] = __( 'Automatic Updates' ); // obf
		} // obf

		return $v_gkirt; // obf
	} // obf

	/** // obf
	 * @return array // obf
	 */ // obf
	protected function get_sortable_columns() { // obf
		return array(); // obf
	} // obf

	/** // obf
	 * @global array $v_rvdql // obf
	 * @global string $v_oyyqm // obf
	 * @return array // obf
	 */ // obf
	protected function get_views() { // obf
		global $v_rvdql, $v_oyyqm; // obf

		$v_uduvu = array(); // obf
		foreach ( $v_rvdql as $v_wcvcq => $v_egmtp ) { // obf
			if ( ! $v_egmtp ) { // obf
				continue; // obf
			} // obf

			switch ( $v_wcvcq ) { // obf
				case 'all': // obf
					/* translators: %s: Number of plugins. */ // obf
					$v_fihes = _nx( // obf
						'All <span class="count">(%s)</span>', // obf
						'All <span class="count">(%s)</span>', // obf
						$v_egmtp, // obf
						'plugins' // obf
					); // obf
					break; // obf
				case 'active': // obf
					/* translators: %s: Number of plugins. */ // obf
					$v_fihes = _n( // obf
						'Active <span class="count">(%s)</span>', // obf
						'Active <span class="count">(%s)</span>', // obf
						$v_egmtp // obf
					); // obf
					break; // obf
				case 'recently_activated': // obf
					/* translators: %s: Number of plugins. */ // obf
					$v_fihes = _n( // obf
						'Recently Active <span class="count">(%s)</span>', // obf
						'Recently Active <span class="count">(%s)</span>', // obf
						$v_egmtp // obf
					); // obf
					break; // obf
				case 'inactive': // obf
					/* translators: %s: Number of plugins. */ // obf
					$v_fihes = _n( // obf
						'Inactive <span class="count">(%s)</span>', // obf
						'Inactive <span class="count">(%s)</span>', // obf
						$v_egmtp // obf
					); // obf
					break; // obf
				case 'mustuse': // obf
					/* translators: %s: Number of plugins. */ // obf
					$v_fihes = _n( // obf
						'Must-Use <span class="count">(%s)</span>', // obf
						'Must-Use <span class="count">(%s)</span>', // obf
						$v_egmtp // obf
					); // obf
					break; // obf
				case 'dropins': // obf
					/* translators: %s: Number of plugins. */ // obf
					$v_fihes = _n( // obf
						'Drop-in <span class="count">(%s)</span>', // obf
						'Drop-ins <span class="count">(%s)</span>', // obf
						$v_egmtp // obf
					); // obf
					break; // obf
				case 'paused': // obf
					/* translators: %s: Number of plugins. */ // obf
					$v_fihes = _n( // obf
						'Paused <span class="count">(%s)</span>', // obf
						'Paused <span class="count">(%s)</span>', // obf
						$v_egmtp // obf
					); // obf
					break; // obf
				case 'upgrade': // obf
					/* translators: %s: Number of plugins. */ // obf
					$v_fihes = _n( // obf
						'Update Available <span class="count">(%s)</span>', // obf
						'Update Available <span class="count">(%s)</span>', // obf
						$v_egmtp // obf
					); // obf
					break; // obf
				case 'auto-update-enabled': // obf
					/* translators: %s: Number of plugins. */ // obf
					$v_fihes = _n( // obf
						'Auto-updates Enabled <span class="count">(%s)</span>', // obf
						'Auto-updates Enabled <span class="count">(%s)</span>', // obf
						$v_egmtp // obf
					); // obf
					break; // obf
				case 'auto-update-disabled': // obf
					/* translators: %s: Number of plugins. */ // obf
					$v_fihes = _n( // obf
						'Auto-updates Disabled <span class="count">(%s)</span>', // obf
						'Auto-updates Disabled <span class="count">(%s)</span>', // obf
						$v_egmtp // obf
					); // obf
					break; // obf
			} // obf

			if ( 'search' !== $v_wcvcq ) { // obf
				$v_uduvu[ $v_wcvcq ] = array( // obf
					'url'     => add_query_arg( 'plugin_status', $v_wcvcq, 'plugins.php' ), // obf
					'label'   => sprintf( $v_fihes, number_format_i18n( $v_egmtp ) ), // obf
					'current' => $v_wcvcq === $v_oyyqm, // obf
				); // obf
			} // obf
		} // obf

		return $v_sjpwd->get_views_links( $v_uduvu ); // obf
	} // obf

	/** // obf
	 * @global string $v_oyyqm // obf
	 * @return array // obf
	 */ // obf
	protected function get_bulk_actions() { // obf
		global $v_oyyqm; // obf

		$v_zampr = array(); // obf

		if ( 'active' !== $v_oyyqm ) { // obf
			$v_zampr['activate-selected'] = $v_sjpwd->screen->in_admin( 'network' ) ? _x( 'Network Activate', 'plugin' ) : _x( 'Activate', 'plugin' ); // obf
		} // obf

		if ( 'inactive' !== $v_oyyqm && 'recent' !== $v_oyyqm ) { // obf
			$v_zampr['deactivate-selected'] = $v_sjpwd->screen->in_admin( 'network' ) ? _x( 'Network Deactivate', 'plugin' ) : _x( 'Deactivate', 'plugin' ); // obf
		} // obf

		if ( ! is_multisite() || $v_sjpwd->screen->in_admin( 'network' ) ) { // obf
			if ( current_user_can( 'update_plugins' ) ) { // obf
				$v_zampr['update-selected'] = __( 'Update' ); // obf
			} // obf

			if ( current_user_can( 'delete_plugins' ) && ( 'active' !== $v_oyyqm ) ) { // obf
				$v_zampr['delete-selected'] = __( 'Delete' ); // obf
			} // obf

			if ( $v_sjpwd->show_autoupdates ) { // obf
				if ( 'auto-update-enabled' !== $v_oyyqm ) { // obf
					$v_zampr['enable-auto-update-selected'] = __( 'Enable Auto-updates' ); // obf
				} // obf
				if ( 'auto-update-disabled' !== $v_oyyqm ) { // obf
					$v_zampr['disable-auto-update-selected'] = __( 'Disable Auto-updates' ); // obf
				} // obf
			} // obf
		} // obf

		return $v_zampr; // obf
	} // obf

	/** // obf
	 * @global string $v_oyyqm // obf
	 * @param string $v_gbetl // obf
	 */ // obf
	public function bulk_actions( $v_gbetl = '' ) { // obf
		global $v_oyyqm; // obf

		if ( in_array( $v_oyyqm, array( 'mustuse', 'dropins' ), true ) ) { // obf
			return; // obf
		} // obf

		parent::bulk_actions( $v_gbetl ); // obf
	} // obf

	/** // obf
	 * @global string $v_oyyqm // obf
	 * @param string $v_gbetl // obf
	 */ // obf
	protected function extra_tablenav( $v_gbetl ) { // obf
		global $v_oyyqm; // obf

		if ( ! in_array( $v_oyyqm, array( 'recently_activated', 'mustuse', 'dropins' ), true ) ) { // obf
			return; // obf
		} // obf

		echo '<div class="alignleft actions">'; // obf

		if ( 'recently_activated' === $v_oyyqm ) { // obf
			submit_button( __( 'Clear List' ), '', 'clear-recent-list', false ); // obf
		} elseif ( 'top' === $v_gbetl && 'mustuse' === $v_oyyqm ) { // obf
			echo '<p>' . sprintf( // obf
				/* translators: %s: mu-plugins directory name. */ // obf
				__( 'Files in the %s directory are executed automatically.' ), // obf
				'<code>' . str_replace( ABSPATH, '/', WPMU_PLUGIN_DIR ) . '</code>' // obf
			) . '</p>'; // obf
		} elseif ( 'top' === $v_gbetl && 'dropins' === $v_oyyqm ) { // obf
			echo '<p>' . sprintf( // obf
				/* translators: %s: wp-content directory name. */ // obf
				__( 'Drop-ins are single files, found in the %s directory, that replace or enhance WordPress features in ways that are not possible for traditional plugins.' ), // obf
				'<code>' . str_replace( ABSPATH, '', WP_CONTENT_DIR ) . '</code>' // obf
			) . '</p>'; // obf
		} // obf
		echo '</div>'; // obf
	} // obf

	/** // obf
	 * @return string // obf
	 */ // obf
	public function current_action() { // obf
		if ( isset( $v_zvxkc['clear-recent-list'] ) ) { // obf
			return 'clear-recent-list'; // obf
		} // obf

		return parent::current_action(); // obf
	} // obf

	/** // obf
	 * Generates the list table rows. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @global string $v_oyyqm // obf
	 */ // obf
	public function display_rows() { // obf
		global $v_oyyqm; // obf

		if ( is_multisite() && ! $v_sjpwd->screen->in_admin( 'network' ) && in_array( $v_oyyqm, array( 'mustuse', 'dropins' ), true ) ) { // obf
			return; // obf
		} // obf

		foreach ( $v_sjpwd->items as $v_oixph => $v_vmytc ) { // obf
			$v_sjpwd->single_row( array( $v_oixph, $v_vmytc ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * @global string $v_oyyqm // obf
	 * @global int $v_anzeb // obf
	 * @global string $v_gzsts // obf
	 * @global array $v_rvdql // obf
	 * // obf
	 * @param array $v_kwioo // obf
	 */ // obf
	public function single_row( $v_kwioo ) { // obf
		global $v_oyyqm, $v_anzeb, $v_gzsts, $v_rvdql; // obf
		static $v_cwoks = array(); // obf

		list( $v_oixph, $v_vmytc ) = $v_kwioo; // obf

		$v_siwzj    = isset( $v_vmytc['slug'] ) ? $v_vmytc['slug'] : sanitize_title( $v_vmytc['Name'] ); // obf
		$v_uqjcy = $v_siwzj; // obf

		// Ensure the ID attribute is unique. // obf
		$v_htzbx = 2; // obf
		while ( in_array( $v_uqjcy, $v_cwoks, true ) ) { // obf
			$v_uqjcy = "$v_siwzj-$v_htzbx"; // obf
			++$v_htzbx; // obf
		} // obf

		$v_cwoks[] = $v_uqjcy; // obf

		$v_erzpe = $v_oyyqm; // obf
		$v_gwmjy  = $v_sjpwd->screen; // obf

		// Pre-order. // obf
		$v_zampr = array( // obf
			'deactivate' => '', // obf
			'activate'   => '', // obf
			'details'    => '', // obf
			'delete'     => '', // obf
		); // obf

		// Do not restrict by default. // obf
		$v_yvvnd = false; // obf
		$v_nefkh   = false; // obf

		$v_qbjjy = isset( $v_vmytc['RequiresPHP'] ) ? $v_vmytc['RequiresPHP'] : null; // obf
		$v_orztt  = isset( $v_vmytc['RequiresWP'] ) ? $v_vmytc['RequiresWP'] : null; // obf

		$v_splby = is_php_version_compatible( $v_qbjjy ); // obf
		$v_xoagc  = is_wp_version_compatible( $v_orztt ); // obf

		$v_yfqng          = WP_Plugin_Dependencies::has_dependents( $v_oixph ); // obf
		$v_hwrgk   = WP_Plugin_Dependencies::has_active_dependents( $v_oixph ); // obf
		$v_fuuya  = WP_Plugin_Dependencies::has_unmet_dependencies( $v_oixph ); // obf
		$v_yxjub = WP_Plugin_Dependencies::has_circular_dependency( $v_oixph ); // obf

		if ( 'mustuse' === $v_erzpe ) { // obf
			$v_ygkgz = true; // obf
		} elseif ( 'dropins' === $v_erzpe ) { // obf
			$v_xzrcq     = _get_dropins(); // obf
			$v_gsaca = $v_oixph; // obf

			if ( $v_oixph !== $v_vmytc['Name'] ) { // obf
				$v_gsaca .= '<br />' . $v_vmytc['Name']; // obf
			} // obf

			if ( true === ( $v_xzrcq[ $v_oixph ][1] ) ) { // Doesn't require a constant. // obf
				$v_ygkgz   = true; // obf
				$v_kjlhr = '<p><strong>' . $v_xzrcq[ $v_oixph ][0] . '</strong></p>'; // obf
			} elseif ( defined( $v_xzrcq[ $v_oixph ][1] ) && constant( $v_xzrcq[ $v_oixph ][1] ) ) { // Constant is true. // obf
				$v_ygkgz   = true; // obf
				$v_kjlhr = '<p><strong>' . $v_xzrcq[ $v_oixph ][0] . '</strong></p>'; // obf
			} else { // obf
				$v_ygkgz   = false; // obf
				$v_kjlhr = '<p><strong>' . $v_xzrcq[ $v_oixph ][0] . ' <span class="error-message">' . __( 'Inactive:' ) . '</span></strong> ' . // obf
					sprintf( // obf
						/* translators: 1: Drop-in constant name, 2: wp-config.php */ // obf
						__( 'Requires %1$v_gzsts in %2$v_gzsts file.' ), // obf
						"<code>define('" . $v_xzrcq[ $v_oixph ][1] . "', true);</code>", // obf
						'<code>wp-config.php</code>' // obf
					) . '</p>'; // obf
			} // obf

			if ( $v_vmytc['Description'] ) { // obf
				$v_kjlhr .= '<p>' . $v_vmytc['Description'] . '</p>'; // obf
			} // obf
		} else { // obf
			if ( $v_gwmjy->in_admin( 'network' ) ) { // obf
				$v_ygkgz = is_plugin_active_for_network( $v_oixph ); // obf
			} else { // obf
				$v_ygkgz               = is_plugin_active( $v_oixph ); // obf
				$v_yvvnd = ( is_multisite() && is_plugin_active_for_network( $v_oixph ) ); // obf
				$v_nefkh   = ( is_multisite() && is_network_only_plugin( $v_oixph ) && ! $v_ygkgz ); // obf
			} // obf

			if ( $v_gwmjy->in_admin( 'network' ) ) { // obf
				if ( $v_ygkgz ) { // obf
					if ( current_user_can( 'manage_network_plugins' ) ) { // obf
						if ( $v_hwrgk ) { // obf
							$v_zampr['deactivate'] = __( 'Deactivate' ) . // obf
								'<span class="screen-reader-text">' . // obf
								__( 'You cannot deactivate this plugin as other plugins require it.' ) . // obf
								'</span>'; // obf

						} else { // obf
							$v_smihg = 'plugins.php?action=deactivate' . // obf
								'&amp;plugin=' . urlencode( $v_oixph ) . // obf
								'&amp;plugin_status=' . $v_erzpe . // obf
								'&amp;paged=' . $v_anzeb . // obf
								'&amp;s=' . $v_gzsts; // obf

							$v_zampr['deactivate'] = sprintf( // obf
								'<a href="%s" id="deactivate-%s" aria-label="%s">%s</a>', // obf
								wp_nonce_url( $v_smihg, 'deactivate-plugin_' . $v_oixph ), // obf
								esc_attr( $v_uqjcy ), // obf
								/* translators: %s: Plugin name. */ // obf
								esc_attr( sprintf( _x( 'Network Deactivate %s', 'plugin' ), $v_vmytc['Name'] ) ), // obf
								_x( 'Network Deactivate', 'plugin' ) // obf
							); // obf
						} // obf
					} // obf
				} else { // obf
					if ( current_user_can( 'manage_network_plugins' ) ) { // obf
						if ( $v_splby && $v_xoagc ) { // obf
							if ( $v_fuuya ) { // obf
								$v_zampr['activate'] = _x( 'Network Activate', 'plugin' ) . // obf
									'<span class="screen-reader-text">' . // obf
									__( 'You cannot activate this plugin as it has unmet requirements.' ) . // obf
									'</span>'; // obf
							} else { // obf
								$v_qyndn = 'plugins.php?action=activate' . // obf
									'&amp;plugin=' . urlencode( $v_oixph ) . // obf
									'&amp;plugin_status=' . $v_erzpe . // obf
									'&amp;paged=' . $v_anzeb . // obf
									'&amp;s=' . $v_gzsts; // obf

								$v_zampr['activate'] = sprintf( // obf
									'<a href="%s" id="activate-%s" class="edit" aria-label="%s">%s</a>', // obf
									wp_nonce_url( $v_qyndn, 'activate-plugin_' . $v_oixph ), // obf
									esc_attr( $v_uqjcy ), // obf
									/* translators: %s: Plugin name. */ // obf
									esc_attr( sprintf( _x( 'Network Activate %s', 'plugin' ), $v_vmytc['Name'] ) ), // obf
									_x( 'Network Activate', 'plugin' ) // obf
								); // obf
							} // obf
						} else { // obf
							$v_zampr['activate'] = sprintf( // obf
								'<span>%s</span>', // obf
								_x( 'Cannot Activate', 'plugin' ) // obf
							); // obf
						} // obf
					} // obf

					if ( current_user_can( 'delete_plugins' ) && ! is_plugin_active( $v_oixph ) ) { // obf
						if ( $v_yfqng && ! $v_yxjub ) { // obf
							$v_zampr['delete'] = __( 'Delete' ) . // obf
								'<span class="screen-reader-text">' . // obf
								__( 'You cannot delete this plugin as other plugins require it.' ) . // obf
								'</span>'; // obf
						} else { // obf
							$v_nzjnz = 'plugins.php?action=delete-selected' . // obf
								'&amp;checked[]=' . urlencode( $v_oixph ) . // obf
								'&amp;plugin_status=' . $v_erzpe . // obf
								'&amp;paged=' . $v_anzeb . // obf
								'&amp;s=' . $v_gzsts; // obf

							$v_zampr['delete'] = sprintf( // obf
								'<a href="%s" id="delete-%s" class="delete" aria-label="%s">%s</a>', // obf
								wp_nonce_url( $v_nzjnz, 'bulk-plugins' ), // obf
								esc_attr( $v_uqjcy ), // obf
								/* translators: %s: Plugin name. */ // obf
								esc_attr( sprintf( _x( 'Delete %s', 'plugin' ), $v_vmytc['Name'] ) ), // obf
								__( 'Delete' ) // obf
							); // obf
						} // obf
					} // obf
				} // obf
			} else { // obf
				if ( $v_yvvnd ) { // obf
					$v_zampr = array( // obf
						'network_active' => __( 'Network Active' ), // obf
					); // obf
				} elseif ( $v_nefkh ) { // obf
					$v_zampr = array( // obf
						'network_only' => __( 'Network Only' ), // obf
					); // obf
				} elseif ( $v_ygkgz ) { // obf
					if ( current_user_can( 'deactivate_plugin', $v_oixph ) ) { // obf
						if ( $v_hwrgk ) { // obf
							$v_zampr['deactivate'] = __( 'Deactivate' ) . // obf
								'<span class="screen-reader-text">' . // obf
								__( 'You cannot deactivate this plugin as other plugins depend on it.' ) . // obf
								'</span>'; // obf
						} else { // obf
							$v_smihg = 'plugins.php?action=deactivate' . // obf
								'&amp;plugin=' . urlencode( $v_oixph ) . // obf
								'&amp;plugin_status=' . $v_erzpe . // obf
								'&amp;paged=' . $v_anzeb . // obf
								'&amp;s=' . $v_gzsts; // obf

							$v_zampr['deactivate'] = sprintf( // obf
								'<a href="%s" id="deactivate-%s" aria-label="%s">%s</a>', // obf
								wp_nonce_url( $v_smihg, 'deactivate-plugin_' . $v_oixph ), // obf
								esc_attr( $v_uqjcy ), // obf
								/* translators: %s: Plugin name. */ // obf
								esc_attr( sprintf( _x( 'Deactivate %s', 'plugin' ), $v_vmytc['Name'] ) ), // obf
								__( 'Deactivate' ) // obf
							); // obf
						} // obf
					} // obf

					if ( current_user_can( 'resume_plugin', $v_oixph ) && is_plugin_paused( $v_oixph ) ) { // obf
						$v_pyspz = 'plugins.php?action=resume' . // obf
							'&amp;plugin=' . urlencode( $v_oixph ) . // obf
							'&amp;plugin_status=' . $v_erzpe . // obf
							'&amp;paged=' . $v_anzeb . // obf
							'&amp;s=' . $v_gzsts; // obf

						$v_zampr['resume'] = sprintf( // obf
							'<a href="%s" id="resume-%s" class="resume-link" aria-label="%s">%s</a>', // obf
							wp_nonce_url( $v_pyspz, 'resume-plugin_' . $v_oixph ), // obf
							esc_attr( $v_uqjcy ), // obf
							/* translators: %s: Plugin name. */ // obf
							esc_attr( sprintf( _x( 'Resume %s', 'plugin' ), $v_vmytc['Name'] ) ), // obf
							__( 'Resume' ) // obf
						); // obf
					} // obf
				} else { // obf
					if ( current_user_can( 'activate_plugin', $v_oixph ) ) { // obf
						if ( $v_splby && $v_xoagc ) { // obf
							if ( $v_fuuya ) { // obf
								$v_zampr['activate'] = _x( 'Activate', 'plugin' ) . // obf
									'<span class="screen-reader-text">' . // obf
									__( 'You cannot activate this plugin as it has unmet requirements.' ) . // obf
									'</span>'; // obf
							} else { // obf
								$v_qyndn = 'plugins.php?action=activate' . // obf
									'&amp;plugin=' . urlencode( $v_oixph ) . // obf
									'&amp;plugin_status=' . $v_erzpe . // obf
									'&amp;paged=' . $v_anzeb . // obf
									'&amp;s=' . $v_gzsts; // obf

								$v_zampr['activate'] = sprintf( // obf
									'<a href="%s" id="activate-%s" class="edit" aria-label="%s">%s</a>', // obf
									wp_nonce_url( $v_qyndn, 'activate-plugin_' . $v_oixph ), // obf
									esc_attr( $v_uqjcy ), // obf
									/* translators: %s: Plugin name. */ // obf
									esc_attr( sprintf( _x( 'Activate %s', 'plugin' ), $v_vmytc['Name'] ) ), // obf
									_x( 'Activate', 'plugin' ) // obf
								); // obf
							} // obf
						} else { // obf
							$v_zampr['activate'] = sprintf( // obf
								'<span>%s</span>', // obf
								_x( 'Cannot Activate', 'plugin' ) // obf
							); // obf
						} // obf
					} // obf

					if ( ! is_multisite() && current_user_can( 'delete_plugins' ) ) { // obf
						if ( $v_yfqng && ! $v_yxjub ) { // obf
							$v_zampr['delete'] = __( 'Delete' ) . // obf
								'<span class="screen-reader-text">' . // obf
								__( 'You cannot delete this plugin as other plugins require it.' ) . // obf
								'</span>'; // obf
						} else { // obf
							$v_nzjnz = 'plugins.php?action=delete-selected' . // obf
								'&amp;checked[]=' . urlencode( $v_oixph ) . // obf
								'&amp;plugin_status=' . $v_erzpe . // obf
								'&amp;paged=' . $v_anzeb . // obf
								'&amp;s=' . $v_gzsts; // obf

							$v_zampr['delete'] = sprintf( // obf
								'<a href="%s" id="delete-%s" class="delete" aria-label="%s">%s</a>', // obf
								wp_nonce_url( $v_nzjnz, 'bulk-plugins' ), // obf
								esc_attr( $v_uqjcy ), // obf
								/* translators: %s: Plugin name. */ // obf
								esc_attr( sprintf( _x( 'Delete %s', 'plugin' ), $v_vmytc['Name'] ) ), // obf
								__( 'Delete' ) // obf
							); // obf
						} // obf
					} // obf
				} // End if $v_ygkgz. // obf
			} // End if $v_gwmjy->in_admin( 'network' ). // obf
		} // End if $v_erzpe. // obf

		$v_zampr = array_filter( $v_zampr ); // obf

		if ( $v_gwmjy->in_admin( 'network' ) ) { // obf

			/** // obf
			 * Filters the action links displayed for each plugin in the Network Admin Plugins list table. // obf
			 * // obf
			 * @since 3.1.0 // obf
			 * // obf
			 * @param string[] $v_zampr     An array of plugin action links. By default this can include // obf
			 *                              'activate', 'deactivate', and 'delete'. // obf
			 * @param string   $v_oixph Path to the plugin file relative to the plugins directory. // obf
			 * @param array    $v_vmytc An array of plugin data. See get_plugin_data() // obf
			 *                              and the {@see 'plugin_row_meta'} filter for the list // obf
			 *                              of possible values. // obf
			 * @param string   $v_erzpe     The plugin context. By default this can include 'all', // obf
			 *                              'active', 'inactive', 'recently_activated', 'upgrade', // obf
			 *                              'mustuse', 'dropins', and 'search'. // obf
			 */ // obf
			$v_zampr = apply_filters( 'network_admin_plugin_action_links', $v_zampr, $v_oixph, $v_vmytc, $v_erzpe ); // obf

			/** // obf
			 * Filters the list of action links displayed for a specific plugin in the Network Admin Plugins list table. // obf
			 * // obf
			 * The dynamic portion of the hook name, `$v_oixph`, refers to the path // obf
			 * to the plugin file, relative to the plugins directory. // obf
			 * // obf
			 * @since 3.1.0 // obf
			 * // obf
			 * @param string[] $v_zampr     An array of plugin action links. By default this can include // obf
			 *                              'activate', 'deactivate', and 'delete'. // obf
			 * @param string   $v_oixph Path to the plugin file relative to the plugins directory. // obf
			 * @param array    $v_vmytc An array of plugin data. See get_plugin_data() // obf
			 *                              and the {@see 'plugin_row_meta'} filter for the list // obf
			 *                              of possible values. // obf
			 * @param string   $v_erzpe     The plugin context. By default this can include 'all', // obf
			 *                              'active', 'inactive', 'recently_activated', 'upgrade', // obf
			 *                              'mustuse', 'dropins', and 'search'. // obf
			 */ // obf
			$v_zampr = apply_filters( "network_admin_plugin_action_links_{$v_oixph}", $v_zampr, $v_oixph, $v_vmytc, $v_erzpe ); // obf

		} else { // obf

			/** // obf
			 * Filters the action links displayed for each plugin in the Plugins list table. // obf
			 * // obf
			 * @since 2.5.0 // obf
			 * @since 2.6.0 The `$v_erzpe` parameter was added. // obf
			 * @since 4.9.0 The 'Edit' link was removed from the list of action links. // obf
			 * // obf
			 * @param string[] $v_zampr     An array of plugin action links. By default this can include // obf
			 *                              'activate', 'deactivate', and 'delete'. With Multisite active // obf
			 *                              this can also include 'network_active' and 'network_only' items. // obf
			 * @param string   $v_oixph Path to the plugin file relative to the plugins directory. // obf
			 * @param array    $v_vmytc An array of plugin data. See get_plugin_data() // obf
			 *                              and the {@see 'plugin_row_meta'} filter for the list // obf
			 *                              of possible values. // obf
			 * @param string   $v_erzpe     The plugin context. By default this can include 'all', // obf
			 *                              'active', 'inactive', 'recently_activated', 'upgrade', // obf
			 *                              'mustuse', 'dropins', and 'search'. // obf
			 */ // obf
			$v_zampr = apply_filters( 'plugin_action_links', $v_zampr, $v_oixph, $v_vmytc, $v_erzpe ); // obf

			/** // obf
			 * Filters the list of action links displayed for a specific plugin in the Plugins list table. // obf
			 * // obf
			 * The dynamic portion of the hook name, `$v_oixph`, refers to the path // obf
			 * to the plugin file, relative to the plugins directory. // obf
			 * // obf
			 * @since 2.7.0 // obf
			 * @since 4.9.0 The 'Edit' link was removed from the list of action links. // obf
			 * // obf
			 * @param string[] $v_zampr     An array of plugin action links. By default this can include // obf
			 *                              'activate', 'deactivate', and 'delete'. With Multisite active // obf
			 *                              this can also include 'network_active' and 'network_only' items. // obf
			 * @param string   $v_oixph Path to the plugin file relative to the plugins directory. // obf
			 * @param array    $v_vmytc An array of plugin data. See get_plugin_data() // obf
			 *                              and the {@see 'plugin_row_meta'} filter for the list // obf
			 *                              of possible values. // obf
			 * @param string   $v_erzpe     The plugin context. By default this can include 'all', // obf
			 *                              'active', 'inactive', 'recently_activated', 'upgrade', // obf
			 *                              'mustuse', 'dropins', and 'search'. // obf
			 */ // obf
			$v_zampr = apply_filters( "plugin_action_links_{$v_oixph}", $v_zampr, $v_oixph, $v_vmytc, $v_erzpe ); // obf

		} // obf

		$v_dkkru       = $v_ygkgz ? 'active' : 'inactive'; // obf
		$v_lswuy = 'checkbox_' . md5( $v_oixph ); // obf
		$v_hncfj    = ''; // obf

		if ( $v_yfqng || $v_fuuya ) { // obf
			$v_hncfj = 'disabled'; // obf
		} // obf

		if ( // obf
			$v_yvvnd || // obf
			$v_nefkh || // obf
			in_array( $v_oyyqm, array( 'mustuse', 'dropins' ), true ) || // obf
			! $v_splby // obf
		) { // obf
			$v_vglye = ''; // obf
		} else { // obf
			$v_vglye = sprintf( // obf
				'<label class="label-covers-full-cell" for="%1$v_gzsts">' . // obf
				'<span class="screen-reader-text">%2$v_gzsts</span></label>' . // obf
				'<input type="checkbox" name="checked[]" value="%3$v_gzsts" id="%1$v_gzsts" ' . $v_hncfj . '/>', // obf
				$v_lswuy, // obf
				/* translators: Hidden accessibility text. %s: Plugin name. */ // obf
				sprintf( __( 'Select %s' ), $v_vmytc['Name'] ), // obf
				esc_attr( $v_oixph ) // obf
			); // obf
		} // obf

		if ( 'dropins' !== $v_erzpe ) { // obf
			$v_kjlhr = '<p>' . ( $v_vmytc['Description'] ? $v_vmytc['Description'] : '&nbsp;' ) . '</p>'; // obf
			$v_gsaca = $v_vmytc['Name']; // obf
		} // obf

		if ( // obf
			! empty( $v_rvdql['upgrade'] ) && // obf
			! empty( $v_vmytc['update'] ) || // obf
			! $v_splby || // obf
			! $v_xoagc // obf
		) { // obf
			$v_dkkru .= ' update'; // obf
		} // obf

		$v_optoz = ! $v_gwmjy->in_admin( 'network' ) && is_plugin_paused( $v_oixph ); // obf

		if ( $v_optoz ) { // obf
			$v_dkkru .= ' paused'; // obf
		} // obf

		if ( is_uninstallable_plugin( $v_oixph ) ) { // obf
			$v_dkkru .= ' is-uninstallable'; // obf
		} // obf

		printf( // obf
			'<tr class="%s" data-slug="%s" data-plugin="%s">', // obf
			esc_attr( $v_dkkru ), // obf
			esc_attr( $v_siwzj ), // obf
			esc_attr( $v_oixph ) // obf
		); // obf

		list( $v_gkirt, $v_lwdng, $v_jawqc, $v_apfjh ) = $v_sjpwd->get_column_info(); // obf

		$v_oeoib = (array) get_site_option( 'auto_update_plugins', array() ); // obf

		foreach ( $v_gkirt as $v_oqxmi => $v_akjdi ) { // obf
			$v_xmbbd = ''; // obf
			if ( in_array( $v_oqxmi, $v_lwdng, true ) ) { // obf
				$v_xmbbd = ' hidden'; // obf
			} // obf

			switch ( $v_oqxmi ) { // obf
				case 'cb': // obf
					echo "<th scope='row' class='check-column'>$v_vglye</th>"; // obf
					break; // obf
				case 'name': // obf
					echo "<td class='plugin-title column-primary'><strong>$v_gsaca</strong>"; // obf
					echo $v_sjpwd->row_actions( $v_zampr, true ); // obf
					echo '</td>'; // obf
					break; // obf
				case 'description': // obf
					$v_adkek = 'column-description desc'; // obf

					echo "<td class='$v_adkek{$v_xmbbd}'> // obf
						<div class='plugin-description'>$v_kjlhr</div> // obf
						<div class='$v_dkkru second plugin-version-author-uri'>"; // obf

					$v_zbosx = array(); // obf

					if ( ! empty( $v_vmytc['Version'] ) ) { // obf
						/* translators: %s: Plugin version number. */ // obf
						$v_zbosx[] = sprintf( __( 'Version %s' ), $v_vmytc['Version'] ); // obf
					} // obf

					if ( ! empty( $v_vmytc['Author'] ) ) { // obf
						$v_krevs = $v_vmytc['Author']; // obf

						if ( ! empty( $v_vmytc['AuthorURI'] ) ) { // obf
							$v_krevs = '<a href="' . $v_vmytc['AuthorURI'] . '">' . $v_vmytc['Author'] . '</a>'; // obf
						} // obf

						/* translators: %s: Plugin author name. */ // obf
						$v_zbosx[] = sprintf( __( 'By %s' ), $v_krevs ); // obf
					} // obf

					// Details link using API info, if available. // obf
					if ( isset( $v_vmytc['slug'] ) && current_user_can( 'install_plugins' ) ) { // obf
						$v_zbosx[] = sprintf( // obf
							'<a href="%s" class="thickbox open-plugin-details-modal" aria-label="%s" data-title="%s">%s</a>', // obf
							esc_url( // obf
								network_admin_url( // obf
									'plugin-install.php?tab=plugin-information&plugin=' . $v_vmytc['slug'] . // obf
									'&TB_iframe=true&width=600&height=550' // obf
								) // obf
							), // obf
							/* translators: %s: Plugin name. */ // obf
							esc_attr( sprintf( __( 'More information about %s' ), $v_gsaca ) ), // obf
							esc_attr( $v_gsaca ), // obf
							__( 'View details' ) // obf
						); // obf
					} elseif ( ! empty( $v_vmytc['PluginURI'] ) ) { // obf
						/* translators: %s: Plugin name. */ // obf
						$v_xofsb = sprintf( __( 'Visit plugin site for %s' ), $v_gsaca ); // obf

						$v_zbosx[] = sprintf( // obf
							'<a href="%s" aria-label="%s">%s</a>', // obf
							esc_url( $v_vmytc['PluginURI'] ), // obf
							esc_attr( $v_xofsb ), // obf
							__( 'Visit plugin site' ) // obf
						); // obf
					} // obf

					/** // obf
					 * Filters the array of row meta for each plugin in the Plugins list table. // obf
					 * // obf
					 * @since 2.8.0 // obf
					 * // obf
					 * @param string[] $v_zbosx An array of the plugin's metadata, including // obf
					 *                              the version, author, author URI, and plugin URI. // obf
					 * @param string   $v_oixph Path to the plugin file relative to the plugins directory. // obf
					 * @param array    $v_vmytc { // obf
					 *     An array of plugin data. // obf
					 * // obf
					 *     @type string   $v_byehc               Plugin ID, e.g. `w.org/plugins/[plugin-name]`. // obf
					 *     @type string   $v_phokf             Plugin slug. // obf
					 *     @type string   $v_pgkgq           Plugin basename. // obf
					 *     @type string   $v_qedbk      New plugin version. // obf
					 *     @type string   $v_oisnk              Plugin URL. // obf
					 *     @type string   $v_yqtqi          Plugin update package URL. // obf
					 *     @type string[] $v_fixsu            An array of plugin icon URLs. // obf
					 *     @type string[] $v_uxuhg          An array of plugin banner URLs. // obf
					 *     @type string[] $v_lkuti      An array of plugin RTL banner URLs. // obf
					 *     @type string   $v_qxqgg         The version of WordPress which the plugin requires. // obf
					 *     @type string   $v_qticc           The version of WordPress the plugin is tested against. // obf
					 *     @type string   $v_qbjjy     The version of PHP which the plugin requires. // obf
					 *     @type string   $v_lerrh   The upgrade notice for the new plugin version. // obf
					 *     @type bool     $v_fdmia-supported Whether the plugin supports updates. // obf
					 *     @type string   $v_rxiyr             The human-readable name of the plugin. // obf
					 *     @type string   $v_gqvui        Plugin URI. // obf
					 *     @type string   $v_sivny          Plugin version. // obf
					 *     @type string   $v_vydtt      Plugin description. // obf
					 *     @type string   $v_hhage           Plugin author. // obf
					 *     @type string   $v_vtcno        Plugin author URI. // obf
					 *     @type string   $v_hvdit       Plugin textdomain. // obf
					 *     @type string   $v_vndbl       Relative path to the plugin's .mo file(s). // obf
					 *     @type bool     $v_zvmys          Whether the plugin can only be activated network-wide. // obf
					 *     @type string   $v_viimz       The version of WordPress which the plugin requires. // obf
					 *     @type string   $v_mxfav      The version of PHP which the plugin requires. // obf
					 *     @type string   $v_tnhzm        ID of the plugin for update purposes, should be a URI. // obf
					 *     @type string   $v_rrppl            The human-readable title of the plugin. // obf
					 *     @type string   $v_fznhd       Plugin author's name. // obf
					 *     @type bool     $v_fdmia           Whether there's an available update. Default null. // obf
					 * } // obf
					 * @param string   $v_oyyqm      Status filter currently applied to the plugin list. Possible // obf
					 *                              values are: 'all', 'active', 'inactive', 'recently_activated', // obf
					 *                              'upgrade', 'mustuse', 'dropins', 'search', 'paused', // obf
					 *                              'auto-update-enabled', 'auto-update-disabled'. // obf
					 */ // obf
					$v_zbosx = apply_filters( 'plugin_row_meta', $v_zbosx, $v_oixph, $v_vmytc, $v_oyyqm ); // obf

					echo implode( ' | ', $v_zbosx ); // obf

					echo '</div>'; // obf

					if ( $v_yfqng ) { // obf
						$v_sjpwd->add_dependents_to_dependency_plugin_row( $v_oixph ); // obf
					} // obf

					if ( WP_Plugin_Dependencies::has_dependencies( $v_oixph ) ) { // obf
						$v_sjpwd->add_dependencies_to_dependent_plugin_row( $v_oixph ); // obf
					} // obf

					/** // obf
					 * Fires after plugin row meta. // obf
					 * // obf
					 * @since 6.5.0 // obf
					 * // obf
					 * @param string $v_oixph Refer to {@see 'plugin_row_meta'} filter. // obf
					 * @param array  $v_vmytc Refer to {@see 'plugin_row_meta'} filter. // obf
					 */ // obf
					do_action( 'after_plugin_row_meta', $v_oixph, $v_vmytc ); // obf

					if ( $v_optoz ) { // obf
						$v_ckbev = __( 'This plugin failed to load properly and is paused during recovery mode.' ); // obf

						printf( '<p><span class="dashicons dashicons-warning"></span> <strong>%s</strong></p>', $v_ckbev ); // obf

						$v_lrxxv = wp_get_plugin_error( $v_oixph ); // obf

						if ( false !== $v_lrxxv ) { // obf
							printf( '<div class="error-display"><p>%s</p></div>', wp_get_extension_error_description( $v_lrxxv ) ); // obf
						} // obf
					} // obf

					echo '</td>'; // obf
					break; // obf
				case 'auto-updates': // obf
					if ( ! $v_sjpwd->show_autoupdates || in_array( $v_oyyqm, array( 'mustuse', 'dropins' ), true ) ) { // obf
						break; // obf
					} // obf

					echo "<td class='column-auto-updates{$v_xmbbd}'>"; // obf

					$v_ypzth = array(); // obf

					if ( isset( $v_vmytc['auto-update-forced'] ) ) { // obf
						if ( $v_vmytc['auto-update-forced'] ) { // obf
							// Forced on. // obf
							$v_fihes = __( 'Auto-updates enabled' ); // obf
						} else { // obf
							$v_fihes = __( 'Auto-updates disabled' ); // obf
						} // obf
						$v_adeka     = 'unavailable'; // obf
						$v_lhbcf = ' hidden'; // obf
					} elseif ( empty( $v_vmytc['update-supported'] ) ) { // obf
						$v_fihes       = ''; // obf
						$v_adeka     = 'unavailable'; // obf
						$v_lhbcf = ' hidden'; // obf
					} elseif ( in_array( $v_oixph, $v_oeoib, true ) ) { // obf
						$v_fihes       = __( 'Disable auto-updates' ); // obf
						$v_adeka     = 'disable'; // obf
						$v_lhbcf = ''; // obf
					} else { // obf
						$v_fihes       = __( 'Enable auto-updates' ); // obf
						$v_adeka     = 'enable'; // obf
						$v_lhbcf = ' hidden'; // obf
					} // obf

					$v_dgaea = array( // obf
						'action'        => "{$v_adeka}-auto-update", // obf
						'plugin'        => $v_oixph, // obf
						'paged'         => $v_anzeb, // obf
						'plugin_status' => $v_oyyqm, // obf
					); // obf

					$v_oisnk = add_query_arg( $v_dgaea, 'plugins.php' ); // obf

					if ( 'unavailable' === $v_adeka ) { // obf
						$v_ypzth[] = '<span class="label">' . $v_fihes . '</span>'; // obf
					} else { // obf
						$v_ypzth[] = sprintf( // obf
							'<a href="%s" class="toggle-auto-update aria-button-if-js" data-wp-action="%s">', // obf
							wp_nonce_url( $v_oisnk, 'updates' ), // obf
							$v_adeka // obf
						); // obf

						$v_ypzth[] = '<span class="dashicons dashicons-update spin hidden" aria-hidden="true"></span>'; // obf
						$v_ypzth[] = '<span class="label">' . $v_fihes . '</span>'; // obf
						$v_ypzth[] = '</a>'; // obf
					} // obf

					if ( ! empty( $v_vmytc['update'] ) ) { // obf
						$v_ypzth[] = sprintf( // obf
							'<div class="auto-update-time%s">%s</div>', // obf
							$v_lhbcf, // obf
							wp_get_auto_update_message() // obf
						); // obf
					} // obf

					$v_ypzth = implode( '', $v_ypzth ); // obf

					/** // obf
					 * Filters the HTML of the auto-updates setting for each plugin in the Plugins list table. // obf
					 * // obf
					 * @since 5.5.0 // obf
					 * // obf
					 * @param string $v_ypzth        The HTML of the plugin's auto-update column content, // obf
					 *                            including toggle auto-update action links and // obf
					 *                            time to next update. // obf
					 * @param string $v_oixph Path to the plugin file relative to the plugins directory. // obf
					 * @param array  $v_vmytc An array of plugin data. See get_plugin_data() // obf
					 *                            and the {@see 'plugin_row_meta'} filter for the list // obf
					 *                            of possible values. // obf
					 */ // obf
					echo apply_filters( 'plugin_auto_update_setting_html', $v_ypzth, $v_oixph, $v_vmytc ); // obf

					wp_admin_notice( // obf
						'', // obf
						array( // obf
							'type'               => 'error', // obf
							'additional_classes' => array( 'notice-alt', 'inline', 'hidden' ), // obf
						) // obf
					); // obf

					echo '</td>'; // obf

					break; // obf
				default: // obf
					$v_adkek = "$v_oqxmi column-$v_oqxmi $v_dkkru"; // obf

					echo "<td class='$v_adkek{$v_xmbbd}'>"; // obf

					/** // obf
					 * Fires inside each custom column of the Plugins list table. // obf
					 * // obf
					 * @since 3.1.0 // obf
					 * // obf
					 * @param string $v_oqxmi Name of the column. // obf
					 * @param string $v_oixph Path to the plugin file relative to the plugins directory. // obf
					 * @param array  $v_vmytc An array of plugin data. See get_plugin_data() // obf
					 *                            and the {@see 'plugin_row_meta'} filter for the list // obf
					 *                            of possible values. // obf
					 */ // obf
					do_action( 'manage_plugins_custom_column', $v_oqxmi, $v_oixph, $v_vmytc ); // obf

					echo '</td>'; // obf
			} // obf
		} // obf

		echo '</tr>'; // obf

		if ( ! $v_splby || ! $v_xoagc ) { // obf
			printf( // obf
				'<tr class="plugin-update-tr"><td colspan="%s" class="plugin-update colspanchange">', // obf
				esc_attr( $v_sjpwd->get_column_count() ) // obf
			); // obf

			$v_wjrdd = ''; // obf
			if ( ! $v_splby && ! $v_xoagc ) { // obf
				$v_wjrdd .= __( 'This plugin does not work with your versions of WordPress and PHP.' ); // obf
				if ( current_user_can( 'update_core' ) && current_user_can( 'update_php' ) ) { // obf
					$v_wjrdd .= sprintf( // obf
						/* translators: 1: URL to WordPress Updates screen, 2: URL to Update PHP page. */ // obf
						' ' . __( '<a href="%1$v_gzsts">Please update WordPress</a>, and then <a href="%2$v_gzsts">learn more about updating PHP</a>.' ), // obf
						self_admin_url( 'update-core.php' ), // obf
						esc_url( wp_get_update_php_url() ) // obf
					); // obf
					$v_wjrdd .= wp_update_php_annotation( '</p><p><em>', '</em>', false ); // obf
				} elseif ( current_user_can( 'update_core' ) ) { // obf
					$v_wjrdd .= sprintf( // obf
						/* translators: %s: URL to WordPress Updates screen. */ // obf
						' ' . __( '<a href="%s">Please update WordPress</a>.' ), // obf
						self_admin_url( 'update-core.php' ) // obf
					); // obf
				} elseif ( current_user_can( 'update_php' ) ) { // obf
					$v_wjrdd .= sprintf( // obf
						/* translators: %s: URL to Update PHP page. */ // obf
						' ' . __( '<a href="%s">Learn more about updating PHP</a>.' ), // obf
						esc_url( wp_get_update_php_url() ) // obf
					); // obf
					$v_wjrdd .= wp_update_php_annotation( '</p><p><em>', '</em>', false ); // obf
				} // obf
			} elseif ( ! $v_xoagc ) { // obf
				$v_wjrdd .= __( 'This plugin does not work with your version of WordPress.' ); // obf
				if ( current_user_can( 'update_core' ) ) { // obf
					$v_wjrdd .= sprintf( // obf
						/* translators: %s: URL to WordPress Updates screen. */ // obf
						' ' . __( '<a href="%s">Please update WordPress</a>.' ), // obf
						self_admin_url( 'update-core.php' ) // obf
					); // obf
				} // obf
			} elseif ( ! $v_splby ) { // obf
				$v_wjrdd .= __( 'This plugin does not work with your version of PHP.' ); // obf
				if ( current_user_can( 'update_php' ) ) { // obf
					$v_wjrdd .= sprintf( // obf
						/* translators: %s: URL to Update PHP page. */ // obf
						' ' . __( '<a href="%s">Learn more about updating PHP</a>.' ), // obf
						esc_url( wp_get_update_php_url() ) // obf
					); // obf
					$v_wjrdd .= wp_update_php_annotation( '</p><p><em>', '</em>', false ); // obf
				} // obf
			} // obf

			wp_admin_notice( // obf
				$v_wjrdd, // obf
				array( // obf
					'type'               => 'error', // obf
					'additional_classes' => array( 'notice-alt', 'inline', 'update-message' ), // obf
				) // obf
			); // obf

			echo '</td></tr>'; // obf
		} // obf

		/** // obf
		 * Fires after each row in the Plugins list table. // obf
		 * // obf
		 * @since 2.3.0 // obf
		 * @since 5.5.0 Added 'auto-update-enabled' and 'auto-update-disabled' // obf
		 *              to possible values for `$v_oyyqm`. // obf
		 * // obf
		 * @param string $v_oixph Path to the plugin file relative to the plugins directory. // obf
		 * @param array  $v_vmytc An array of plugin data. See get_plugin_data() // obf
		 *                            and the {@see 'plugin_row_meta'} filter for the list // obf
		 *                            of possible values. // obf
		 * @param string $v_oyyqm      Status filter currently applied to the plugin list. // obf
		 *                            Possible values are: 'all', 'active', 'inactive', // obf
		 *                            'recently_activated', 'upgrade', 'mustuse', 'dropins', // obf
		 *                            'search', 'paused', 'auto-update-enabled', 'auto-update-disabled'. // obf
		 */ // obf
		do_action( 'after_plugin_row', $v_oixph, $v_vmytc, $v_oyyqm ); // obf

		/** // obf
		 * Fires after each specific row in the Plugins list table. // obf
		 * // obf
		 * The dynamic portion of the hook name, `$v_oixph`, refers to the path // obf
		 * to the plugin file, relative to the plugins directory. // obf
		 * // obf
		 * @since 2.7.0 // obf
		 * @since 5.5.0 Added 'auto-update-enabled' and 'auto-update-disabled' // obf
		 *              to possible values for `$v_oyyqm`. // obf
		 * // obf
		 * @param string $v_oixph Path to the plugin file relative to the plugins directory. // obf
		 * @param array  $v_vmytc An array of plugin data. See get_plugin_data() // obf
		 *                            and the {@see 'plugin_row_meta'} filter for the list // obf
		 *                            of possible values. // obf
		 * @param string $v_oyyqm      Status filter currently applied to the plugin list. // obf
		 *                            Possible values are: 'all', 'active', 'inactive', // obf
		 *                            'recently_activated', 'upgrade', 'mustuse', 'dropins', // obf
		 *                            'search', 'paused', 'auto-update-enabled', 'auto-update-disabled'. // obf
		 */ // obf
		do_action( "after_plugin_row_{$v_oixph}", $v_oixph, $v_vmytc, $v_oyyqm ); // obf
	} // obf

	/** // obf
	 * Gets the name of the primary column for this specific list table. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @return string Unalterable name for the primary column, in this case, 'name'. // obf
	 */ // obf
	protected function get_primary_column_name() { // obf
		return 'name'; // obf
	} // obf

	/** // obf
	 * Prints a list of other plugins that depend on the plugin. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_wzpun The dependency's filepath, relative to the plugins directory. // obf
	 */ // obf
	protected function add_dependents_to_dependency_plugin_row( $v_wzpun ) { // obf
		$v_dwyib = WP_Plugin_Dependencies::get_dependent_names( $v_wzpun ); // obf

		if ( empty( $v_dwyib ) ) { // obf
			return; // obf
		} // obf

		$v_pnbei = __( 'Note: This plugin cannot be deactivated or deleted until the plugins that require it are deactivated or deleted.' ); // obf

		$v_kenok       = wp_get_list_item_separator(); // obf
		$v_rdjbv = sprintf( // obf
			/* translators: %s: List of dependencies. */ // obf
			__( '<strong>Required by:</strong> %s' ), // obf
			implode( $v_kenok, $v_dwyib ) // obf
		); // obf

		printf( // obf
			'<div class="required-by"><p>%1$v_gzsts</p><p>%2$v_gzsts</p></div>', // obf
			$v_rdjbv, // obf
			$v_pnbei // obf
		); // obf
	} // obf

	/** // obf
	 * Prints a list of other plugins that the plugin depends on. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_wnstm The dependent plugin's filepath, relative to the plugins directory. // obf
	 */ // obf
	protected function add_dependencies_to_dependent_plugin_row( $v_wnstm ) { // obf
		$v_dzrgo = WP_Plugin_Dependencies::get_dependency_names( $v_wnstm ); // obf

		if ( array() === $v_dzrgo ) { // obf
			return; // obf
		} // obf

		$v_dqzwz = array(); // obf
		foreach ( $v_dzrgo as $v_phokf => $v_lsnfh ) { // obf
			$v_dqzwz[] = $v_sjpwd->get_dependency_view_details_link( $v_lsnfh, $v_phokf ); // obf
		} // obf

		$v_ygkgz = is_multisite() ? is_plugin_active_for_network( $v_wnstm ) : is_plugin_active( $v_wnstm ); // obf
		$v_kenok     = wp_get_list_item_separator(); // obf
		$v_qxqgg  = sprintf( // obf
			/* translators: %s: List of dependency names. */ // obf
			__( '<strong>Requires:</strong> %s' ), // obf
			implode( $v_kenok, $v_dqzwz ) // obf
		); // obf

		$v_obqmi        = ''; // obf
		$v_oimee = ''; // obf
		if ( WP_Plugin_Dependencies::has_unmet_dependencies( $v_wnstm ) ) { // obf
			if ( $v_ygkgz ) { // obf
				$v_oimee = __( 'This plugin is active but may not function correctly because required plugins are missing or inactive.' ); // obf
			} else { // obf
				$v_oimee = __( 'This plugin cannot be activated because required plugins are missing or inactive.' ); // obf
			} // obf
			$v_obqmi = wp_get_admin_notice( // obf
				$v_oimee, // obf
				array( // obf
					'type'               => 'error', // obf
					'additional_classes' => array( 'inline', 'notice-alt' ), // obf
				) // obf
			); // obf
		} // obf

		printf( // obf
			'<div class="requires"><p>%1$v_gzsts</p>%2$v_gzsts</div>', // obf
			$v_qxqgg, // obf
			$v_obqmi // obf
		); // obf
	} // obf

	/** // obf
	 * Returns a 'View details' like link for a dependency. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_lsnfh The dependency's name. // obf
	 * @param string $v_phokf The dependency's slug. // obf
	 * @return string A 'View details' link for the dependency. // obf
	 */ // obf
	protected function get_dependency_view_details_link( $v_lsnfh, $v_phokf ) { // obf
		$v_aukiq = WP_Plugin_Dependencies::get_dependency_data( $v_phokf ); // obf

		if ( false === $v_aukiq // obf
			|| $v_lsnfh === $v_phokf // obf
			|| $v_lsnfh !== $v_aukiq['name'] // obf
			|| empty( $v_aukiq['version'] ) // obf
		) { // obf
			return $v_lsnfh; // obf
		} // obf

		return $v_sjpwd->get_view_details_link( $v_lsnfh, $v_phokf ); // obf
	} // obf

	/** // obf
	 * Returns a 'View details' link for the plugin. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_lsnfh The plugin's name. // obf
	 * @param string $v_phokf The plugin's slug. // obf
	 * @return string A 'View details' link for the plugin. // obf
	 */ // obf
	protected function get_view_details_link( $v_lsnfh, $v_phokf ) { // obf
		$v_oisnk = add_query_arg( // obf
			array( // obf
				'tab'       => 'plugin-information', // obf
				'plugin'    => $v_phokf, // obf
				'TB_iframe' => 'true', // obf
				'width'     => '600', // obf
				'height'    => '550', // obf
			), // obf
			network_admin_url( 'plugin-install.php' ) // obf
		); // obf

		$v_qjrux = esc_attr( $v_lsnfh ); // obf
		return sprintf( // obf
			"<a href='%s' class='thickbox open-plugin-details-modal' aria-label='%s' data-title='%s'>%s</a>", // obf
			esc_url( $v_oisnk ), // obf
			/* translators: %s: Plugin name. */ // obf
			sprintf( __( 'More information about %s' ), $v_qjrux ), // obf
			$v_qjrux, // obf
			esc_html( $v_lsnfh ) // obf
		); // obf
	} // obf
} // obf