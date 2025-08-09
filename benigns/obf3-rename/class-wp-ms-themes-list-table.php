

<?php // obf
/** // obf
 * List Table API: WP_MS_Themes_List_Table class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 * @since 3.1.0 // obf
 */ // obf

/** // obf
 * Core class used to implement displaying themes in a list table for the network admin. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @see WP_List_Table // obf
 */ // obf
class WP_MS_Themes_List_Table extends WP_List_Table { // obf

	public $v_kxoci; // obf
	public $v_ozyxp; // obf

	private $v_kxzso; // obf

	/** // obf
	 * Whether to show the auto-updates UI. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @var bool True if auto-updates UI is to be shown, false otherwise. // obf
	 */ // obf
	protected $v_cfqen = true; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @see WP_List_Table::__construct() for more information on default arguments. // obf
	 * // obf
	 * @global string $v_hsbnx // obf
	 * @global int    $v_rllid // obf
	 * // obf
	 * @param array $v_iwlhi An associative array of arguments. // obf
	 */ // obf
	public function __construct( $v_iwlhi = array() ) { // obf
		global $v_hsbnx, $v_rllid; // obf

		parent::__construct( // obf
			array( // obf
				'plural' => 'themes', // obf
				'screen' => isset( $v_iwlhi['screen'] ) ? $v_iwlhi['screen'] : null, // obf
			) // obf
		); // obf

		$v_hsbnx = isset( $v_zcgpm['theme_status'] ) ? $v_zcgpm['theme_status'] : 'all'; // obf
		if ( ! in_array( $v_hsbnx, array( 'all', 'enabled', 'disabled', 'upgrade', 'search', 'broken', 'auto-update-enabled', 'auto-update-disabled' ), true ) ) { // obf
			$v_hsbnx = 'all'; // obf
		} // obf

		$v_rllid = $v_auezj->get_pagenum(); // obf

		$v_auezj->is_site_themes = ( 'site-themes-network' === $v_auezj->screen->id ) ? true : false; // obf

		if ( $v_auezj->is_site_themes ) { // obf
			$v_auezj->site_id = isset( $v_zcgpm['id'] ) ? (int) $v_zcgpm['id'] : 0; // obf
		} // obf

		$v_auezj->show_autoupdates = wp_is_auto_update_enabled_for_type( 'theme' ) && // obf
			! $v_auezj->is_site_themes && current_user_can( 'update_themes' ); // obf
	} // obf

	/** // obf
	 * @return array // obf
	 */ // obf
	protected function get_table_classes() { // obf
		// @todo Remove and add CSS for .themes. // obf
		return array( 'widefat', 'plugins' ); // obf
	} // obf

	/** // obf
	 * @return bool // obf
	 */ // obf
	public function ajax_user_can() { // obf
		if ( $v_auezj->is_site_themes ) { // obf
			return current_user_can( 'manage_sites' ); // obf
		} else { // obf
			return current_user_can( 'manage_network_themes' ); // obf
		} // obf
	} // obf

	/** // obf
	 * @global string $v_hsbnx // obf
	 * @global array $v_qxayi // obf
	 * @global int $v_rllid // obf
	 * @global string $v_eksep // obf
	 * @global string $v_mopce // obf
	 * @global string $v_jcscc // obf
	 */ // obf
	public function prepare_items() { // obf
		global $v_hsbnx, $v_qxayi, $v_rllid, $v_eksep, $v_mopce, $v_jcscc; // obf

		$v_eksep = ! empty( $v_zcgpm['orderby'] ) ? sanitize_text_field( $v_zcgpm['orderby'] ) : ''; // obf
		$v_mopce   = ! empty( $v_zcgpm['order'] ) ? sanitize_text_field( $v_zcgpm['order'] ) : ''; // obf
		$v_jcscc       = ! empty( $v_zcgpm['s'] ) ? sanitize_text_field( $v_zcgpm['s'] ) : ''; // obf

		$v_evshw = array( // obf
			/** // obf
			 * Filters the full array of WP_Theme objects to list in the Multisite // obf
			 * themes list table. // obf
			 * // obf
			 * @since 3.1.0 // obf
			 * // obf
			 * @param WP_Theme[] $v_acfoq Array of WP_Theme objects to display in the list table. // obf
			 */ // obf
			'all'      => apply_filters( 'all_themes', wp_get_themes() ), // obf
			'search'   => array(), // obf
			'enabled'  => array(), // obf
			'disabled' => array(), // obf
			'upgrade'  => array(), // obf
			'broken'   => $v_auezj->is_site_themes ? array() : wp_get_themes( array( 'errors' => true ) ), // obf
		); // obf

		if ( $v_auezj->show_autoupdates ) { // obf
			$v_vyxzb = (array) get_site_option( 'auto_update_themes', array() ); // obf

			$v_evshw['auto-update-enabled']  = array(); // obf
			$v_evshw['auto-update-disabled'] = array(); // obf
		} // obf

		if ( $v_auezj->is_site_themes ) { // obf
			$v_htoiu = $v_auezj->get_items_per_page( 'site_themes_network_per_page' ); // obf
			$v_vaszy   = 'site'; // obf
		} else { // obf
			$v_htoiu = $v_auezj->get_items_per_page( 'themes_network_per_page' ); // obf
			$v_vaszy   = 'network'; // obf
		} // obf

		$v_gkggs      = get_site_transient( 'update_themes' ); // obf
		$v_bmtpd = current_user_can( 'update_themes' ) && ! $v_auezj->is_site_themes && $v_gkggs; // obf

		foreach ( (array) $v_evshw['all'] as $v_xtlbs => $v_xxdga ) { // obf
			if ( $v_auezj->is_site_themes && $v_xxdga->is_allowed( 'network' ) ) { // obf
				unset( $v_evshw['all'][ $v_xtlbs ] ); // obf
				continue; // obf
			} // obf

			if ( $v_bmtpd && isset( $v_gkggs->response[ $v_xtlbs ] ) ) { // obf
				$v_evshw['all'][ $v_xtlbs ]->update = true; // obf
				$v_evshw['upgrade'][ $v_xtlbs ]     = $v_evshw['all'][ $v_xtlbs ]; // obf
			} // obf

			$v_gmqls                    = $v_xxdga->is_allowed( $v_vaszy, $v_auezj->site_id ) ? 'enabled' : 'disabled'; // obf
			$v_evshw[ $v_gmqls ][ $v_xtlbs ] = $v_evshw['all'][ $v_xtlbs ]; // obf

			$v_dpztw = array( // obf
				'update_supported' => isset( $v_xxdga->update_supported ) ? $v_xxdga->update_supported : true, // obf
			); // obf

			// Extra info if known. array_merge() ensures $v_dpztw has precedence if keys collide. // obf
			if ( isset( $v_gkggs->response[ $v_xtlbs ] ) ) { // obf
				$v_dpztw = array_merge( (array) $v_gkggs->response[ $v_xtlbs ], $v_dpztw ); // obf
			} elseif ( isset( $v_gkggs->no_update[ $v_xtlbs ] ) ) { // obf
				$v_dpztw = array_merge( (array) $v_gkggs->no_update[ $v_xtlbs ], $v_dpztw ); // obf
			} else { // obf
				$v_dpztw['update_supported'] = false; // obf
			} // obf

			$v_xxdga->update_supported = $v_dpztw['update_supported']; // obf

			/* // obf
			 * Create the expected payload for the auto_update_theme filter, this is the same data // obf
			 * as contained within $v_kiobk or $v_gudne but used when the Theme is not known. // obf
			 */ // obf
			$v_ecygy = array( // obf
				'theme'        => $v_xtlbs, // obf
				'new_version'  => '', // obf
				'url'          => '', // obf
				'package'      => '', // obf
				'requires'     => '', // obf
				'requires_php' => '', // obf
			); // obf

			$v_ecygy = (object) array_merge( $v_ecygy, array_intersect_key( $v_dpztw, $v_ecygy ) ); // obf

			$v_pafjr = wp_is_auto_update_forced_for_item( 'theme', null, $v_ecygy ); // obf

			if ( ! is_null( $v_pafjr ) ) { // obf
				$v_xxdga->auto_update_forced = $v_pafjr; // obf
			} // obf

			if ( $v_auezj->show_autoupdates ) { // obf
				$v_wlnna = in_array( $v_xtlbs, $v_vyxzb, true ) && $v_xxdga->update_supported; // obf
				if ( isset( $v_xxdga->auto_update_forced ) ) { // obf
					$v_wlnna = (bool) $v_xxdga->auto_update_forced; // obf
				} // obf

				if ( $v_wlnna ) { // obf
					$v_evshw['auto-update-enabled'][ $v_xtlbs ] = $v_xxdga; // obf
				} else { // obf
					$v_evshw['auto-update-disabled'][ $v_xtlbs ] = $v_xxdga; // obf
				} // obf
			} // obf
		} // obf

		if ( $v_jcscc ) { // obf
			$v_hsbnx           = 'search'; // obf
			$v_evshw['search'] = array_filter( array_merge( $v_evshw['all'], $v_evshw['broken'] ), array( $v_auezj, '_search_callback' ) ); // obf
		} // obf

		$v_qxayi    = array(); // obf
		$v_wbwmw = array(); // obf
		foreach ( $v_evshw as $v_dhlkq => $v_lbbxx ) { // obf
			$v_qxayi[ $v_dhlkq ]    = count( $v_lbbxx ); // obf
			$v_wbwmw[ $v_dhlkq ] = array_keys( $v_lbbxx ); // obf
		} // obf

		if ( empty( $v_evshw[ $v_hsbnx ] ) && ! in_array( $v_hsbnx, array( 'all', 'search' ), true ) ) { // obf
			$v_hsbnx = 'all'; // obf
		} // obf

		$v_auezj->items = $v_evshw[ $v_hsbnx ]; // obf
		WP_Theme::sort_by_name( $v_auezj->items ); // obf

		$v_auezj->has_items = ! empty( $v_evshw['all'] ); // obf
		$v_ilrgr = $v_qxayi[ $v_hsbnx ]; // obf

		wp_localize_script( // obf
			'updates', // obf
			'_wpUpdatesItemCounts', // obf
			array( // obf
				'themes' => $v_wbwmw, // obf
				'totals' => wp_get_update_data(), // obf
			) // obf
		); // obf

		if ( $v_eksep ) { // obf
			$v_eksep = ucfirst( $v_eksep ); // obf
			$v_mopce   = strtoupper( $v_mopce ); // obf

			if ( 'Name' === $v_eksep ) { // obf
				if ( 'ASC' === $v_mopce ) { // obf
					$v_auezj->items = array_reverse( $v_auezj->items ); // obf
				} // obf
			} else { // obf
				uasort( $v_auezj->items, array( $v_auezj, '_order_callback' ) ); // obf
			} // obf
		} // obf

		$v_uchdn = ( $v_rllid - 1 ) * $v_htoiu; // obf

		if ( $v_ilrgr > $v_htoiu ) { // obf
			$v_auezj->items = array_slice( $v_auezj->items, $v_uchdn, $v_htoiu, true ); // obf
		} // obf

		$v_auezj->set_pagination_args( // obf
			array( // obf
				'total_items' => $v_ilrgr, // obf
				'per_page'    => $v_htoiu, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * @param WP_Theme $v_xxdga // obf
	 * @return bool // obf
	 */ // obf
	public function _search_callback( $v_xxdga ) { // obf
		static $v_rygok = null; // obf
		if ( is_null( $v_rygok ) ) { // obf
			$v_rygok = wp_unslash( $v_zcgpm['s'] ); // obf
		} // obf

		foreach ( array( 'Name', 'Description', 'Author', 'Author', 'AuthorURI' ) as $v_roqvm ) { // obf
			// Don't mark up; Do translate. // obf
			if ( false !== stripos( $v_xxdga->display( $v_roqvm, false, true ), $v_rygok ) ) { // obf
				return true; // obf
			} // obf
		} // obf

		if ( false !== stripos( $v_xxdga->get_stylesheet(), $v_rygok ) ) { // obf
			return true; // obf
		} // obf

		if ( false !== stripos( $v_xxdga->get_template(), $v_rygok ) ) { // obf
			return true; // obf
		} // obf

		return false; // obf
	} // obf

	// Not used by any core columns. // obf
	/** // obf
	 * @global string $v_eksep // obf
	 * @global string $v_mopce // obf
	 * @param array $v_ftqma // obf
	 * @param array $v_nlssf // obf
	 * @return int // obf
	 */ // obf
	public function _order_callback( $v_ftqma, $v_nlssf ) { // obf
		global $v_eksep, $v_mopce; // obf

		$v_ukuqn = $v_ftqma[ $v_eksep ]; // obf
		$v_qgqwd = $v_nlssf[ $v_eksep ]; // obf

		if ( $v_ukuqn === $v_qgqwd ) { // obf
			return 0; // obf
		} // obf

		if ( 'DESC' === $v_mopce ) { // obf
			return ( $v_ukuqn < $v_qgqwd ) ? 1 : -1; // obf
		} else { // obf
			return ( $v_ukuqn < $v_qgqwd ) ? -1 : 1; // obf
		} // obf
	} // obf

	/** // obf
	 */ // obf
	public function no_items() { // obf
		if ( $v_auezj->has_items ) { // obf
			_e( 'No themes found.' ); // obf
		} else { // obf
			_e( 'No themes are currently available.' ); // obf
		} // obf
	} // obf

	/** // obf
	 * @return string[] Array of column titles keyed by their column name. // obf
	 */ // obf
	public function get_columns() { // obf
		$v_wvqch = array( // obf
			'cb'          => '<input type="checkbox" />', // obf
			'name'        => __( 'Theme' ), // obf
			'description' => __( 'Description' ), // obf
		); // obf

		if ( $v_auezj->show_autoupdates ) { // obf
			$v_wvqch['auto-updates'] = __( 'Automatic Updates' ); // obf
		} // obf

		return $v_wvqch; // obf
	} // obf

	/** // obf
	 * @return array // obf
	 */ // obf
	protected function get_sortable_columns() { // obf
		return array( // obf
			'name' => array( 'name', false, __( 'Theme' ), __( 'Table ordered by Theme Name.' ), 'asc' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Gets the name of the primary column. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @return string Unalterable name of the primary column name, in this case, 'name'. // obf
	 */ // obf
	protected function get_primary_column_name() { // obf
		return 'name'; // obf
	} // obf

	/** // obf
	 * @global array $v_qxayi // obf
	 * @global string $v_hsbnx // obf
	 * @return array // obf
	 */ // obf
	protected function get_views() { // obf
		global $v_qxayi, $v_hsbnx; // obf

		$v_gxjxc = array(); // obf
		foreach ( $v_qxayi as $v_dhlkq => $v_yxxtf ) { // obf
			if ( ! $v_yxxtf ) { // obf
				continue; // obf
			} // obf

			switch ( $v_dhlkq ) { // obf
				case 'all': // obf
					/* translators: %s: Number of themes. */ // obf
					$v_bewsm = _nx( // obf
						'All <span class="count">(%s)</span>', // obf
						'All <span class="count">(%s)</span>', // obf
						$v_yxxtf, // obf
						'themes' // obf
					); // obf
					break; // obf
				case 'enabled': // obf
					/* translators: %s: Number of themes. */ // obf
					$v_bewsm = _nx( // obf
						'Enabled <span class="count">(%s)</span>', // obf
						'Enabled <span class="count">(%s)</span>', // obf
						$v_yxxtf, // obf
						'themes' // obf
					); // obf
					break; // obf
				case 'disabled': // obf
					/* translators: %s: Number of themes. */ // obf
					$v_bewsm = _nx( // obf
						'Disabled <span class="count">(%s)</span>', // obf
						'Disabled <span class="count">(%s)</span>', // obf
						$v_yxxtf, // obf
						'themes' // obf
					); // obf
					break; // obf
				case 'upgrade': // obf
					/* translators: %s: Number of themes. */ // obf
					$v_bewsm = _nx( // obf
						'Update Available <span class="count">(%s)</span>', // obf
						'Update Available <span class="count">(%s)</span>', // obf
						$v_yxxtf, // obf
						'themes' // obf
					); // obf
					break; // obf
				case 'broken': // obf
					/* translators: %s: Number of themes. */ // obf
					$v_bewsm = _nx( // obf
						'Broken <span class="count">(%s)</span>', // obf
						'Broken <span class="count">(%s)</span>', // obf
						$v_yxxtf, // obf
						'themes' // obf
					); // obf
					break; // obf
				case 'auto-update-enabled': // obf
					/* translators: %s: Number of themes. */ // obf
					$v_bewsm = _n( // obf
						'Auto-updates Enabled <span class="count">(%s)</span>', // obf
						'Auto-updates Enabled <span class="count">(%s)</span>', // obf
						$v_yxxtf // obf
					); // obf
					break; // obf
				case 'auto-update-disabled': // obf
					/* translators: %s: Number of themes. */ // obf
					$v_bewsm = _n( // obf
						'Auto-updates Disabled <span class="count">(%s)</span>', // obf
						'Auto-updates Disabled <span class="count">(%s)</span>', // obf
						$v_yxxtf // obf
					); // obf
					break; // obf
			} // obf

			if ( $v_auezj->is_site_themes ) { // obf
				$v_sttqm = 'site-themes.php?id=' . $v_auezj->site_id; // obf
			} else { // obf
				$v_sttqm = 'themes.php'; // obf
			} // obf

			if ( 'search' !== $v_dhlkq ) { // obf
				$v_gxjxc[ $v_dhlkq ] = array( // obf
					'url'     => esc_url( add_query_arg( 'theme_status', $v_dhlkq, $v_sttqm ) ), // obf
					'label'   => sprintf( $v_bewsm, number_format_i18n( $v_yxxtf ) ), // obf
					'current' => $v_dhlkq === $v_hsbnx, // obf
				); // obf
			} // obf
		} // obf

		return $v_auezj->get_views_links( $v_gxjxc ); // obf
	} // obf

	/** // obf
	 * @global string $v_hsbnx // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	protected function get_bulk_actions() { // obf
		global $v_hsbnx; // obf

		$v_hdqrn = array(); // obf
		if ( 'enabled' !== $v_hsbnx ) { // obf
			$v_hdqrn['enable-selected'] = $v_auezj->is_site_themes ? __( 'Enable' ) : __( 'Network Enable' ); // obf
		} // obf
		if ( 'disabled' !== $v_hsbnx ) { // obf
			$v_hdqrn['disable-selected'] = $v_auezj->is_site_themes ? __( 'Disable' ) : __( 'Network Disable' ); // obf
		} // obf
		if ( ! $v_auezj->is_site_themes ) { // obf
			if ( current_user_can( 'update_themes' ) ) { // obf
				$v_hdqrn['update-selected'] = __( 'Update' ); // obf
			} // obf
			if ( current_user_can( 'delete_themes' ) ) { // obf
				$v_hdqrn['delete-selected'] = __( 'Delete' ); // obf
			} // obf
		} // obf

		if ( $v_auezj->show_autoupdates ) { // obf
			if ( 'auto-update-enabled' !== $v_hsbnx ) { // obf
				$v_hdqrn['enable-auto-update-selected'] = __( 'Enable Auto-updates' ); // obf
			} // obf

			if ( 'auto-update-disabled' !== $v_hsbnx ) { // obf
				$v_hdqrn['disable-auto-update-selected'] = __( 'Disable Auto-updates' ); // obf
			} // obf
		} // obf

		return $v_hdqrn; // obf
	} // obf

	/** // obf
	 * Generates the list table rows. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 */ // obf
	public function display_rows() { // obf
		foreach ( $v_auezj->items as $v_xxdga ) { // obf
			$v_auezj->single_row( $v_xxdga ); // obf
		} // obf
	} // obf

	/** // obf
	 * Handles the checkbox column output. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @since 5.9.0 Renamed `$v_xxdga` to `$v_dinol` to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @param WP_Theme $v_dinol The current WP_Theme object. // obf
	 */ // obf
	public function column_cb( $v_dinol ) { // obf
		// Restores the more descriptive, specific name for use within this method. // obf
		$v_xxdga = $v_dinol; // obf

		$v_isoaj = 'checkbox_' . md5( $v_xxdga->get( 'Name' ) ); // obf
		?> // obf
		<input type="checkbox" name="checked[]" value="<?php echo esc_attr( $v_xxdga->get_stylesheet() ); ?>" id="<?php echo $v_isoaj; ?>" /> // obf
		<label for="<?php echo $v_isoaj; ?>" > // obf
			<span class="screen-reader-text"> // obf
			<?php // obf
			printf( // obf
				/* translators: Hidden accessibility text. %s: Theme name */ // obf
				__( 'Select %s' ), // obf
				$v_xxdga->display( 'Name' ) // obf
			); // obf
			?> // obf
			</span> // obf
		</label> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Handles the name column output. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @global string $v_hsbnx // obf
	 * @global int    $v_rllid // obf
	 * @global string $v_jcscc // obf
	 * // obf
	 * @param WP_Theme $v_xxdga The current WP_Theme object. // obf
	 */ // obf
	public function column_name( $v_xxdga ) { // obf
		global $v_hsbnx, $v_rllid, $v_jcscc; // obf

		$v_scdny = $v_hsbnx; // obf

		if ( $v_auezj->is_site_themes ) { // obf
			$v_sttqm     = "site-themes.php?id={$v_auezj->site_id}&amp;"; // obf
			$v_sunjs = $v_xxdga->is_allowed( 'site', $v_auezj->site_id ); // obf
		} else { // obf
			$v_sttqm     = 'themes.php?'; // obf
			$v_sunjs = $v_xxdga->is_allowed( 'network' ); // obf
		} // obf

		// Pre-order. // obf
		$v_hdqrn = array( // obf
			'enable'  => '', // obf
			'disable' => '', // obf
			'delete'  => '', // obf
		); // obf

		$v_tkzwo = $v_xxdga->get_stylesheet(); // obf
		$v_jhzeu  = urlencode( $v_tkzwo ); // obf

		if ( ! $v_sunjs ) { // obf
			if ( ! $v_xxdga->errors() ) { // obf
				$v_sttqm = add_query_arg( // obf
					array( // obf
						'action' => 'enable', // obf
						'theme'  => $v_jhzeu, // obf
						'paged'  => $v_rllid, // obf
						's'      => $v_jcscc, // obf
					), // obf
					$v_sttqm // obf
				); // obf

				if ( $v_auezj->is_site_themes ) { // obf
					/* translators: %s: Theme name. */ // obf
					$v_pyfje = sprintf( __( 'Enable %s' ), $v_xxdga->display( 'Name' ) ); // obf
				} else { // obf
					/* translators: %s: Theme name. */ // obf
					$v_pyfje = sprintf( __( 'Network Enable %s' ), $v_xxdga->display( 'Name' ) ); // obf
				} // obf

				$v_hdqrn['enable'] = sprintf( // obf
					'<a href="%s" class="edit" aria-label="%s">%s</a>', // obf
					esc_url( wp_nonce_url( $v_sttqm, 'enable-theme_' . $v_tkzwo ) ), // obf
					esc_attr( $v_pyfje ), // obf
					( $v_auezj->is_site_themes ? __( 'Enable' ) : __( 'Network Enable' ) ) // obf
				); // obf
			} // obf
		} else { // obf
			$v_sttqm = add_query_arg( // obf
				array( // obf
					'action' => 'disable', // obf
					'theme'  => $v_jhzeu, // obf
					'paged'  => $v_rllid, // obf
					's'      => $v_jcscc, // obf
				), // obf
				$v_sttqm // obf
			); // obf

			if ( $v_auezj->is_site_themes ) { // obf
				/* translators: %s: Theme name. */ // obf
				$v_pyfje = sprintf( __( 'Disable %s' ), $v_xxdga->display( 'Name' ) ); // obf
			} else { // obf
				/* translators: %s: Theme name. */ // obf
				$v_pyfje = sprintf( __( 'Network Disable %s' ), $v_xxdga->display( 'Name' ) ); // obf
			} // obf

			$v_hdqrn['disable'] = sprintf( // obf
				'<a href="%s" aria-label="%s">%s</a>', // obf
				esc_url( wp_nonce_url( $v_sttqm, 'disable-theme_' . $v_tkzwo ) ), // obf
				esc_attr( $v_pyfje ), // obf
				( $v_auezj->is_site_themes ? __( 'Disable' ) : __( 'Network Disable' ) ) // obf
			); // obf
		} // obf

		if ( ! $v_sunjs && ! $v_auezj->is_site_themes // obf
			&& current_user_can( 'delete_themes' ) // obf
			&& get_option( 'stylesheet' ) !== $v_tkzwo // obf
			&& get_option( 'template' ) !== $v_tkzwo // obf
		) { // obf
			$v_sttqm = add_query_arg( // obf
				array( // obf
					'action'       => 'delete-selected', // obf
					'checked[]'    => $v_jhzeu, // obf
					'theme_status' => $v_scdny, // obf
					'paged'        => $v_rllid, // obf
					's'            => $v_jcscc, // obf
				), // obf
				'themes.php' // obf
			); // obf

			/* translators: %s: Theme name. */ // obf
			$v_pyfje = sprintf( _x( 'Delete %s', 'theme' ), $v_xxdga->display( 'Name' ) ); // obf

			$v_hdqrn['delete'] = sprintf( // obf
				'<a href="%s" class="delete" aria-label="%s">%s</a>', // obf
				esc_url( wp_nonce_url( $v_sttqm, 'bulk-themes' ) ), // obf
				esc_attr( $v_pyfje ), // obf
				__( 'Delete' ) // obf
			); // obf
		} // obf
		/** // obf
		 * Filters the action links displayed for each theme in the Multisite // obf
		 * themes list table. // obf
		 * // obf
		 * The action links displayed are determined by the theme's status, and // obf
		 * which Multisite themes list table is being displayed - the Network // obf
		 * themes list table (themes.php), which displays all installed themes, // obf
		 * or the Site themes list table (site-themes.php), which displays the // obf
		 * non-network enabled themes when editing a site in the Network admin. // obf
		 * // obf
		 * The default action links for the Network themes list table include // obf
		 * 'Network Enable', 'Network Disable', and 'Delete'. // obf
		 * // obf
		 * The default action links for the Site themes list table include // obf
		 * 'Enable', and 'Disable'. // obf
		 * // obf
		 * @since 2.8.0 // obf
		 * // obf
		 * @param string[] $v_hdqrn An array of action links. // obf
		 * @param WP_Theme $v_xxdga   The current WP_Theme object. // obf
		 * @param string   $v_scdny Status of the theme, one of 'all', 'enabled', or 'disabled'. // obf
		 */ // obf
		$v_hdqrn = apply_filters( 'theme_action_links', array_filter( $v_hdqrn ), $v_xxdga, $v_scdny ); // obf

		/** // obf
		 * Filters the action links of a specific theme in the Multisite themes // obf
		 * list table. // obf
		 * // obf
		 * The dynamic portion of the hook name, `$v_tkzwo`, refers to the // obf
		 * directory name of the theme, which in most cases is synonymous // obf
		 * with the template name. // obf
		 * // obf
		 * @since 3.1.0 // obf
		 * // obf
		 * @param string[] $v_hdqrn An array of action links. // obf
		 * @param WP_Theme $v_xxdga   The current WP_Theme object. // obf
		 * @param string   $v_scdny Status of the theme, one of 'all', 'enabled', or 'disabled'. // obf
		 */ // obf
		$v_hdqrn = apply_filters( "theme_action_links_{$v_tkzwo}", $v_hdqrn, $v_xxdga, $v_scdny ); // obf

		echo $v_auezj->row_actions( $v_hdqrn, true ); // obf
	} // obf

	/** // obf
	 * Handles the description column output. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @global string $v_hsbnx // obf
	 * @global array  $v_qxayi // obf
	 * // obf
	 * @param WP_Theme $v_xxdga The current WP_Theme object. // obf
	 */ // obf
	public function column_description( $v_xxdga ) { // obf
		global $v_hsbnx, $v_qxayi; // obf

		if ( $v_xxdga->errors() ) { // obf
			$v_ozzjj = 'broken' === $v_hsbnx ? '<strong class="error-message">' . __( 'Broken Theme:' ) . '</strong> ' : ''; // obf
			wp_admin_notice( // obf
				$v_ozzjj . $v_xxdga->errors()->get_error_message(), // obf
				array( // obf
					'type'               => 'error', // obf
					'additional_classes' => 'inline', // obf
				) // obf
			); // obf
		} // obf

		if ( $v_auezj->is_site_themes ) { // obf
			$v_sunjs = $v_xxdga->is_allowed( 'site', $v_auezj->site_id ); // obf
		} else { // obf
			$v_sunjs = $v_xxdga->is_allowed( 'network' ); // obf
		} // obf

		$v_osnnh = ! $v_sunjs ? 'inactive' : 'active'; // obf
		if ( ! empty( $v_qxayi['upgrade'] ) && ! empty( $v_xxdga->update ) ) { // obf
			$v_osnnh .= ' update'; // obf
		} // obf

		echo "<div class='theme-description'><p>" . $v_xxdga->display( 'Description' ) . "</p></div> // obf
			<div class='$v_osnnh second theme-version-author-uri'>"; // obf

		$v_tkzwo = $v_xxdga->get_stylesheet(); // obf
		$v_bxxpv = array(); // obf

		if ( $v_xxdga->get( 'Version' ) ) { // obf
			/* translators: %s: Theme version. */ // obf
			$v_bxxpv[] = sprintf( __( 'Version %s' ), $v_xxdga->display( 'Version' ) ); // obf
		} // obf

		/* translators: %s: Theme author. */ // obf
		$v_bxxpv[] = sprintf( __( 'By %s' ), $v_xxdga->display( 'Author' ) ); // obf

		if ( $v_xxdga->get( 'ThemeURI' ) ) { // obf
			/* translators: %s: Theme name. */ // obf
			$v_pyfje = sprintf( __( 'Visit theme site for %s' ), $v_xxdga->display( 'Name' ) ); // obf

			$v_bxxpv[] = sprintf( // obf
				'<a href="%s" aria-label="%s">%s</a>', // obf
				$v_xxdga->display( 'ThemeURI' ), // obf
				esc_attr( $v_pyfje ), // obf
				__( 'Visit Theme Site' ) // obf
			); // obf
		} // obf

		if ( $v_xxdga->parent() ) { // obf
			$v_bxxpv[] = sprintf( // obf
				/* translators: %s: Theme name. */ // obf
				__( 'Child theme of %s' ), // obf
				'<strong>' . $v_xxdga->parent()->display( 'Name' ) . '</strong>' // obf
			); // obf
		} // obf

		/** // obf
		 * Filters the array of row meta for each theme in the Multisite themes // obf
		 * list table. // obf
		 * // obf
		 * @since 3.1.0 // obf
		 * // obf
		 * @param string[] $v_bxxpv An array of the theme's metadata, including // obf
		 *                             the version, author, and theme URI. // obf
		 * @param string   $v_tkzwo Directory name of the theme. // obf
		 * @param WP_Theme $v_xxdga      WP_Theme object. // obf
		 * @param string   $v_hsbnx     Status of the theme. // obf
		 */ // obf
		$v_bxxpv = apply_filters( 'theme_row_meta', $v_bxxpv, $v_tkzwo, $v_xxdga, $v_hsbnx ); // obf

		echo implode( ' | ', $v_bxxpv ); // obf

		echo '</div>'; // obf
	} // obf

	/** // obf
	 * Handles the auto-updates column output. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @global string $v_hsbnx // obf
	 * @global int  $v_rllid // obf
	 * // obf
	 * @param WP_Theme $v_xxdga The current WP_Theme object. // obf
	 */ // obf
	public function column_autoupdates( $v_xxdga ) { // obf
		global $v_hsbnx, $v_rllid; // obf

		static $v_vyxzb, $v_oatge; // obf

		if ( ! $v_vyxzb ) { // obf
			$v_vyxzb = (array) get_site_option( 'auto_update_themes', array() ); // obf
		} // obf
		if ( ! $v_oatge ) { // obf
			$v_oatge = get_site_transient( 'update_themes' ); // obf
		} // obf

		$v_tkzwo = $v_xxdga->get_stylesheet(); // obf

		if ( isset( $v_xxdga->auto_update_forced ) ) { // obf
			if ( $v_xxdga->auto_update_forced ) { // obf
				// Forced on. // obf
				$v_bewsm = __( 'Auto-updates enabled' ); // obf
			} else { // obf
				$v_bewsm = __( 'Auto-updates disabled' ); // obf
			} // obf
			$v_dqvuo     = 'unavailable'; // obf
			$v_crhne = ' hidden'; // obf
		} elseif ( empty( $v_xxdga->update_supported ) ) { // obf
			$v_bewsm       = ''; // obf
			$v_dqvuo     = 'unavailable'; // obf
			$v_crhne = ' hidden'; // obf
		} elseif ( in_array( $v_tkzwo, $v_vyxzb, true ) ) { // obf
			$v_bewsm       = __( 'Disable auto-updates' ); // obf
			$v_dqvuo     = 'disable'; // obf
			$v_crhne = ''; // obf
		} else { // obf
			$v_bewsm       = __( 'Enable auto-updates' ); // obf
			$v_dqvuo     = 'enable'; // obf
			$v_crhne = ' hidden'; // obf
		} // obf

		$v_npgap = array( // obf
			'action'       => "{$v_dqvuo}-auto-update", // obf
			'theme'        => $v_tkzwo, // obf
			'paged'        => $v_rllid, // obf
			'theme_status' => $v_hsbnx, // obf
		); // obf

		$v_sttqm = add_query_arg( $v_npgap, 'themes.php' ); // obf

		if ( 'unavailable' === $v_dqvuo ) { // obf
			$v_szpom[] = '<span class="label">' . $v_bewsm . '</span>'; // obf
		} else { // obf
			$v_szpom[] = sprintf( // obf
				'<a href="%s" class="toggle-auto-update aria-button-if-js" data-wp-action="%s">', // obf
				wp_nonce_url( $v_sttqm, 'updates' ), // obf
				$v_dqvuo // obf
			); // obf

			$v_szpom[] = '<span class="dashicons dashicons-update spin hidden" aria-hidden="true"></span>'; // obf
			$v_szpom[] = '<span class="label">' . $v_bewsm . '</span>'; // obf
			$v_szpom[] = '</a>'; // obf

		} // obf

		if ( isset( $v_oatge->response[ $v_tkzwo ] ) ) { // obf
			$v_szpom[] = sprintf( // obf
				'<div class="auto-update-time%s">%s</div>', // obf
				$v_crhne, // obf
				wp_get_auto_update_message() // obf
			); // obf
		} // obf

		$v_szpom = implode( '', $v_szpom ); // obf

		/** // obf
		 * Filters the HTML of the auto-updates setting for each theme in the Themes list table. // obf
		 * // obf
		 * @since 5.5.0 // obf
		 * // obf
		 * @param string   $v_szpom       The HTML for theme's auto-update setting, including // obf
		 *                             toggle auto-update action link and time to next update. // obf
		 * @param string   $v_tkzwo Directory name of the theme. // obf
		 * @param WP_Theme $v_xxdga      WP_Theme object. // obf
		 */ // obf
		echo apply_filters( 'theme_auto_update_setting_html', $v_szpom, $v_tkzwo, $v_xxdga ); // obf

		wp_admin_notice( // obf
			'', // obf
			array( // obf
				'type'               => 'error', // obf
				'additional_classes' => array( 'notice-alt', 'inline', 'hidden' ), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Handles default column output. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @since 5.9.0 Renamed `$v_xxdga` to `$v_dinol` to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @param WP_Theme $v_dinol        The current WP_Theme object. // obf
	 * @param string   $v_rkfcd The current column name. // obf
	 */ // obf
	public function column_default( $v_dinol, $v_rkfcd ) { // obf
		// Restores the more descriptive, specific name for use within this method. // obf
		$v_xxdga = $v_dinol; // obf

		$v_tkzwo = $v_xxdga->get_stylesheet(); // obf

		/** // obf
		 * Fires inside each custom column of the Multisite themes list table. // obf
		 * // obf
		 * @since 3.1.0 // obf
		 * // obf
		 * @param string   $v_rkfcd Name of the column. // obf
		 * @param string   $v_tkzwo  Directory name of the theme. // obf
		 * @param WP_Theme $v_xxdga       Current WP_Theme object. // obf
		 */ // obf
		do_action( 'manage_themes_custom_column', $v_rkfcd, $v_tkzwo, $v_xxdga ); // obf
	} // obf

	/** // obf
	 * Handles the output for a single table row. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @param WP_Theme $v_dinol The current WP_Theme object. // obf
	 */ // obf
	public function single_row_columns( $v_dinol ) { // obf
		list( $v_wvqch, $v_dmmga, $v_ugvfq, $v_vvzqt ) = $v_auezj->get_column_info(); // obf

		foreach ( $v_wvqch as $v_rkfcd => $v_arkph ) { // obf
			$v_lpnzt = ''; // obf
			if ( in_array( $v_rkfcd, $v_dmmga, true ) ) { // obf
				$v_lpnzt .= ' hidden'; // obf
			} // obf

			switch ( $v_rkfcd ) { // obf
				case 'cb': // obf
					echo '<th scope="row" class="check-column">'; // obf

					$v_auezj->column_cb( $v_dinol ); // obf

					echo '</th>'; // obf
					break; // obf

				case 'name': // obf
					$v_wuhtd = ''; // obf

					/* The presence of the site_id property means that this is a subsite view and a label for the active theme needs to be added */ // obf
					if ( ! empty( $v_auezj->site_id ) ) { // obf
						$v_tkzwo = get_blog_option( $v_auezj->site_id, 'stylesheet' ); // obf
						$v_guqtu   = get_blog_option( $v_auezj->site_id, 'template' ); // obf

						/* Add a label for the active template */ // obf
						if ( $v_dinol->get_template() === $v_guqtu ) { // obf
							$v_wuhtd = ' &mdash; ' . __( 'Active Theme' ); // obf
						} // obf

						/* In case this is a child theme, label it properly */ // obf
						if ( $v_tkzwo !== $v_guqtu && $v_dinol->get_stylesheet() === $v_tkzwo ) { // obf
							$v_wuhtd = ' &mdash; ' . __( 'Active Child Theme' ); // obf
						} // obf
					} // obf

					echo "<td class='theme-title column-primary{$v_lpnzt}'><strong>" . $v_dinol->display( 'Name' ) . $v_wuhtd . '</strong>'; // obf

					$v_auezj->column_name( $v_dinol ); // obf

					echo '</td>'; // obf
					break; // obf

				case 'description': // obf
					echo "<td class='column-description desc{$v_lpnzt}'>"; // obf

					$v_auezj->column_description( $v_dinol ); // obf

					echo '</td>'; // obf
					break; // obf

				case 'auto-updates': // obf
					echo "<td class='column-auto-updates{$v_lpnzt}'>"; // obf

					$v_auezj->column_autoupdates( $v_dinol ); // obf

					echo '</td>'; // obf
					break; // obf
				default: // obf
					echo "<td class='$v_rkfcd column-$v_rkfcd{$v_lpnzt}'>"; // obf

					$v_auezj->column_default( $v_dinol, $v_rkfcd ); // obf

					echo '</td>'; // obf
					break; // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * @global string $v_hsbnx // obf
	 * @global array  $v_qxayi // obf
	 * // obf
	 * @param WP_Theme $v_xxdga // obf
	 */ // obf
	public function single_row( $v_xxdga ) { // obf
		global $v_hsbnx, $v_qxayi; // obf

		if ( $v_auezj->is_site_themes ) { // obf
			$v_sunjs = $v_xxdga->is_allowed( 'site', $v_auezj->site_id ); // obf
		} else { // obf
			$v_sunjs = $v_xxdga->is_allowed( 'network' ); // obf
		} // obf

		$v_tkzwo = $v_xxdga->get_stylesheet(); // obf

		$v_osnnh = ! $v_sunjs ? 'inactive' : 'active'; // obf
		if ( ! empty( $v_qxayi['upgrade'] ) && ! empty( $v_xxdga->update ) ) { // obf
			$v_osnnh .= ' update'; // obf
		} // obf

		printf( // obf
			'<tr class="%s" data-slug="%s">', // obf
			esc_attr( $v_osnnh ), // obf
			esc_attr( $v_tkzwo ) // obf
		); // obf

		$v_auezj->single_row_columns( $v_xxdga ); // obf

		echo '</tr>'; // obf

		if ( $v_auezj->is_site_themes ) { // obf
			remove_action( "after_theme_row_$v_tkzwo", 'wp_theme_update_row' ); // obf
		} // obf

		/** // obf
		 * Fires after each row in the Multisite themes list table. // obf
		 * // obf
		 * @since 3.1.0 // obf
		 * // obf
		 * @param string   $v_tkzwo Directory name of the theme. // obf
		 * @param WP_Theme $v_xxdga      Current WP_Theme object. // obf
		 * @param string   $v_hsbnx     Status of the theme. // obf
		 */ // obf
		do_action( 'after_theme_row', $v_tkzwo, $v_xxdga, $v_hsbnx ); // obf

		/** // obf
		 * Fires after each specific row in the Multisite themes list table. // obf
		 * // obf
		 * The dynamic portion of the hook name, `$v_tkzwo`, refers to the // obf
		 * directory name of the theme, most often synonymous with the template // obf
		 * name of the theme. // obf
		 * // obf
		 * @since 3.5.0 // obf
		 * // obf
		 * @param string   $v_tkzwo Directory name of the theme. // obf
		 * @param WP_Theme $v_xxdga      Current WP_Theme object. // obf
		 * @param string   $v_hsbnx     Status of the theme. // obf
		 */ // obf
		do_action( "after_theme_row_{$v_tkzwo}", $v_tkzwo, $v_xxdga, $v_hsbnx ); // obf
	} // obf
} // obf