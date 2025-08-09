

<?php // obf
/** // obf
 * Upgrader API: Plugin_Installer_Skin class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Upgrader // obf
 * @since 4.6.0 // obf
 */ // obf

/** // obf
 * Plugin Installer Skin for WordPress Plugin Installer. // obf
 * // obf
 * @since 2.8.0 // obf
 * @since 4.6.0 Moved to its own file from wp-admin/includes/class-wp-upgrader-skins.php. // obf
 * // obf
 * @see WP_Upgrader_Skin // obf
 */ // obf
class Plugin_Installer_Skin extends WP_Upgrader_Skin { // obf
	public $v_htfmg; // obf
	public $v_htivz; // obf
	public $v_updiy; // obf
	public $v_qsmvl; // obf

	private $v_zyvzm = false; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * Sets up the plugin installer skin. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param array $v_rezvf // obf
	 */ // obf
	public function __construct( $v_rezvf = array() ) { // obf
		$v_ndomv = array( // obf
			'type'      => 'web', // obf
			'url'       => '', // obf
			'plugin'    => '', // obf
			'nonce'     => '', // obf
			'title'     => '', // obf
			'overwrite' => '', // obf
		); // obf
		$v_rezvf     = wp_parse_args( $v_rezvf, $v_ndomv ); // obf

		$v_glwwe->type      = $v_rezvf['type']; // obf
		$v_glwwe->url       = $v_rezvf['url']; // obf
		$v_glwwe->api       = isset( $v_rezvf['api'] ) ? $v_rezvf['api'] : array(); // obf
		$v_glwwe->overwrite = $v_rezvf['overwrite']; // obf

		parent::__construct( $v_rezvf ); // obf
	} // obf

	/** // obf
	 * Performs an action before installing a plugin. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 */ // obf
	public function before() { // obf
		if ( ! empty( $v_glwwe->api ) ) { // obf
			$v_glwwe->upgrader->strings['process_success'] = sprintf( // obf
				$v_glwwe->upgrader->strings['process_success_specific'], // obf
				$v_glwwe->api->name, // obf
				$v_glwwe->api->version // obf
			); // obf
		} // obf
	} // obf

	/** // obf
	 * Hides the `process_failed` error when updating a plugin by uploading a zip file. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param WP_Error $v_imgai WP_Error object. // obf
	 * @return bool True if the error should be hidden, false otherwise. // obf
	 */ // obf
	public function hide_process_failed( $v_imgai ) { // obf
		if ( // obf
			'upload' === $v_glwwe->type && // obf
			'' === $v_glwwe->overwrite && // obf
			$v_imgai->get_error_code() === 'folder_exists' // obf
		) { // obf
			return true; // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Performs an action following a plugin install. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 */ // obf
	public function after() { // obf
		// Check if the plugin can be overwritten and output the HTML. // obf
		if ( $v_glwwe->do_overwrite() ) { // obf
			return; // obf
		} // obf

		$v_yajty = $v_glwwe->upgrader->plugin_info(); // obf

		$v_rzwum = array(); // obf

		$v_odwxx = isset( $v_jtlmd['from'] ) ? wp_unslash( $v_jtlmd['from'] ) : 'plugins'; // obf

		if ( 'import' === $v_odwxx ) { // obf
			$v_rzwum['activate_plugin'] = sprintf( // obf
				'<a class="button button-primary" href="%s" target="_parent">%s</a>', // obf
				wp_nonce_url( 'plugins.php?action=activate&amp;from=import&amp;plugin=' . urlencode( $v_yajty ), 'activate-plugin_' . $v_yajty ), // obf
				__( 'Activate Plugin &amp; Run Importer' ) // obf
			); // obf
		} elseif ( 'press-this' === $v_odwxx ) { // obf
			$v_rzwum['activate_plugin'] = sprintf( // obf
				'<a class="button button-primary" href="%s" target="_parent">%s</a>', // obf
				wp_nonce_url( 'plugins.php?action=activate&amp;from=press-this&amp;plugin=' . urlencode( $v_yajty ), 'activate-plugin_' . $v_yajty ), // obf
				__( 'Activate Plugin &amp; Go to Press This' ) // obf
			); // obf
		} else { // obf
			$v_rzwum['activate_plugin'] = sprintf( // obf
				'<a class="button button-primary" href="%s" target="_parent">%s</a>', // obf
				wp_nonce_url( 'plugins.php?action=activate&amp;plugin=' . urlencode( $v_yajty ), 'activate-plugin_' . $v_yajty ), // obf
				__( 'Activate Plugin' ) // obf
			); // obf
		} // obf

		if ( is_multisite() && current_user_can( 'manage_network_plugins' ) ) { // obf
			$v_rzwum['network_activate'] = sprintf( // obf
				'<a class="button button-primary" href="%s" target="_parent">%s</a>', // obf
				wp_nonce_url( 'plugins.php?action=activate&amp;networkwide=1&amp;plugin=' . urlencode( $v_yajty ), 'activate-plugin_' . $v_yajty ), // obf
				_x( 'Network Activate', 'plugin' ) // obf
			); // obf
			unset( $v_rzwum['activate_plugin'] ); // obf
		} // obf

		if ( 'import' === $v_odwxx ) { // obf
			$v_rzwum['importers_page'] = sprintf( // obf
				'<a href="%s" target="_parent">%s</a>', // obf
				admin_url( 'import.php' ), // obf
				__( 'Go to Importers' ) // obf
			); // obf
		} elseif ( 'web' === $v_glwwe->type ) { // obf
			$v_rzwum['plugins_page'] = sprintf( // obf
				'<a href="%s" target="_parent">%s</a>', // obf
				self_admin_url( 'plugin-install.php' ), // obf
				__( 'Go to Plugin Installer' ) // obf
			); // obf
		} elseif ( 'upload' === $v_glwwe->type && 'plugins' === $v_odwxx ) { // obf
			$v_rzwum['plugins_page'] = sprintf( // obf
				'<a href="%s">%s</a>', // obf
				self_admin_url( 'plugin-install.php' ), // obf
				__( 'Go to Plugin Installer' ) // obf
			); // obf
		} else { // obf
			$v_rzwum['plugins_page'] = sprintf( // obf
				'<a href="%s" target="_parent">%s</a>', // obf
				self_admin_url( 'plugins.php' ), // obf
				__( 'Go to Plugins page' ) // obf
			); // obf
		} // obf

		if ( ! $v_glwwe->result || is_wp_error( $v_glwwe->result ) ) { // obf
			unset( $v_rzwum['activate_plugin'], $v_rzwum['network_activate'] ); // obf
		} elseif ( ! current_user_can( 'activate_plugin', $v_yajty ) || is_plugin_active( $v_yajty ) ) { // obf
			unset( $v_rzwum['activate_plugin'] ); // obf
		} // obf

		/** // obf
		 * Filters the list of action links available following a single plugin installation. // obf
		 * // obf
		 * @since 2.7.0 // obf
		 * // obf
		 * @param string[] $v_rzwum Array of plugin action links. // obf
		 * @param object   $v_htfmg             Object containing WordPress.org API plugin data. Empty // obf
		 *                                  for non-API installs, such as when a plugin is installed // obf
		 *                                  via upload. // obf
		 * @param string   $v_yajty     Path to the plugin file relative to the plugins directory. // obf
		 */ // obf
		$v_rzwum = apply_filters( 'install_plugin_complete_actions', $v_rzwum, $v_glwwe->api, $v_yajty ); // obf

		if ( ! empty( $v_rzwum ) ) { // obf
			$v_glwwe->feedback( implode( ' ', (array) $v_rzwum ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * Checks if the plugin can be overwritten and outputs the HTML for overwriting a plugin on upload. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @return bool Whether the plugin can be overwritten and HTML was outputted. // obf
	 */ // obf
	private function do_overwrite() { // obf
		if ( 'upload' !== $v_glwwe->type || ! is_wp_error( $v_glwwe->result ) || 'folder_exists' !== $v_glwwe->result->get_error_code() ) { // obf
			return false; // obf
		} // obf

		$v_iitsj = $v_glwwe->result->get_error_data( 'folder_exists' ); // obf
		$v_iitsj = ltrim( substr( $v_iitsj, strlen( WP_PLUGIN_DIR ) ), '/' ); // obf

		$v_wfklj = false; // obf
		$v_uekdf         = get_plugins(); // obf

		foreach ( $v_uekdf as $v_cyojd => $v_efahi ) { // obf
			if ( strrpos( $v_cyojd, $v_iitsj ) !== 0 ) { // obf
				continue; // obf
			} // obf

			$v_wfklj = $v_efahi; // obf
		} // obf

		$v_tqlir = $v_glwwe->upgrader->new_plugin_data; // obf

		if ( ! $v_wfklj || ! $v_tqlir ) { // obf
			return false; // obf
		} // obf

		echo '<h2 class="update-from-upload-heading">' . esc_html__( 'This plugin is already installed.' ) . '</h2>'; // obf

		$v_glwwe->is_downgrading = version_compare( $v_wfklj['Version'], $v_tqlir['Version'], '>' ); // obf

		$v_xlbrq = array( // obf
			'Name'        => __( 'Plugin name' ), // obf
			'Version'     => __( 'Version' ), // obf
			'Author'      => __( 'Author' ), // obf
			'RequiresWP'  => __( 'Required WordPress version' ), // obf
			'RequiresPHP' => __( 'Required PHP version' ), // obf
		); // obf

		$v_mkuxr  = '<table class="update-from-upload-comparison"><tbody>'; // obf
		$v_mkuxr .= '<tr><th></th><th>' . esc_html_x( 'Current', 'plugin' ) . '</th>'; // obf
		$v_mkuxr .= '<th>' . esc_html_x( 'Uploaded', 'plugin' ) . '</th></tr>'; // obf

		$v_jfvyf = true; // Let's consider only these rows. // obf

		foreach ( $v_xlbrq as $v_qzxgz => $v_pbrjr ) { // obf
			$v_gejnj = ! empty( $v_wfklj[ $v_qzxgz ] ) ? (string) $v_wfklj[ $v_qzxgz ] : '-'; // obf
			$v_qcqrs = ! empty( $v_tqlir[ $v_qzxgz ] ) ? (string) $v_tqlir[ $v_qzxgz ] : '-'; // obf

			$v_jfvyf = $v_jfvyf && ( $v_gejnj === $v_qcqrs ); // obf

			$v_vpqum   = ( 'Version' !== $v_qzxgz && $v_qcqrs !== $v_gejnj ); // obf
			$v_gfccu = ( 'Version' === $v_qzxgz && $v_glwwe->is_downgrading ); // obf

			$v_mkuxr .= '<tr><td class="name-label">' . $v_pbrjr . '</td><td>' . wp_strip_all_tags( $v_gejnj ) . '</td>'; // obf
			$v_mkuxr .= ( $v_vpqum || $v_gfccu ) ? '<td class="warning">' : '<td>'; // obf
			$v_mkuxr .= wp_strip_all_tags( $v_qcqrs ) . '</td></tr>'; // obf
		} // obf

		$v_mkuxr .= '</tbody></table>'; // obf

		/** // obf
		 * Filters the compare table output for overwriting a plugin package on upload. // obf
		 * // obf
		 * @since 5.5.0 // obf
		 * // obf
		 * @param string $v_mkuxr               The output table with Name, Version, Author, RequiresWP, and RequiresPHP info. // obf
		 * @param array  $v_wfklj Array with current plugin data. // obf
		 * @param array  $v_tqlir     Array with uploaded plugin data. // obf
		 */ // obf
		echo apply_filters( 'install_plugin_overwrite_comparison', $v_mkuxr, $v_wfklj, $v_tqlir ); // obf

		$v_rzwum = array(); // obf
		$v_toudz      = true; // obf

		$v_lfkcw  = '<p>' . esc_html__( 'The plugin cannot be updated due to the following:' ) . '</p>'; // obf
		$v_lfkcw .= '<ul class="ul-disc">'; // obf

		$v_qyvdd = isset( $v_tqlir['RequiresPHP'] ) ? $v_tqlir['RequiresPHP'] : null; // obf
		$v_bvksz  = isset( $v_tqlir['RequiresWP'] ) ? $v_tqlir['RequiresWP'] : null; // obf

		if ( ! is_php_version_compatible( $v_qyvdd ) ) { // obf
			$v_qnjzk = sprintf( // obf
				/* translators: 1: Current PHP version, 2: Version required by the uploaded plugin. */ // obf
				__( 'The PHP version on your server is %1$v_ducfj, however the uploaded plugin requires %2$v_ducfj.' ), // obf
				PHP_VERSION, // obf
				$v_qyvdd // obf
			); // obf

			$v_lfkcw .= '<li>' . esc_html( $v_qnjzk ) . '</li>'; // obf
			$v_toudz       = false; // obf
		} // obf

		if ( ! is_wp_version_compatible( $v_bvksz ) ) { // obf
			$v_qnjzk = sprintf( // obf
				/* translators: 1: Current WordPress version, 2: Version required by the uploaded plugin. */ // obf
				__( 'Your WordPress version is %1$v_ducfj, however the uploaded plugin requires %2$v_ducfj.' ), // obf
				esc_html( wp_get_wp_version() ), // obf
				$v_bvksz // obf
			); // obf

			$v_lfkcw .= '<li>' . esc_html( $v_qnjzk ) . '</li>'; // obf
			$v_toudz       = false; // obf
		} // obf

		$v_lfkcw .= '</ul>'; // obf

		if ( $v_toudz ) { // obf
			if ( $v_glwwe->is_downgrading ) { // obf
				$v_hvrwy = sprintf( // obf
					/* translators: %s: Documentation URL. */ // obf
					__( 'You are uploading an older version of a current plugin. You can continue to install the older version, but be sure to <a href="%s">back up your database and files</a> first.' ), // obf
					__( 'https://developer.wordpress.org/advanced-administration/security/backup/' ) // obf
				); // obf
			} else { // obf
				$v_hvrwy = sprintf( // obf
					/* translators: %s: Documentation URL. */ // obf
					__( 'You are updating a plugin. Be sure to <a href="%s">back up your database and files</a> first.' ), // obf
					__( 'https://developer.wordpress.org/advanced-administration/security/backup/' ) // obf
				); // obf
			} // obf

			echo '<p class="update-from-upload-notice">' . $v_hvrwy . '</p>'; // obf

			$v_qsmvl = $v_glwwe->is_downgrading ? 'downgrade-plugin' : 'update-plugin'; // obf

			$v_rzwum['overwrite_plugin'] = sprintf( // obf
				'<a class="button button-primary update-from-upload-overwrite" href="%s" target="_parent">%s</a>', // obf
				wp_nonce_url( add_query_arg( 'overwrite', $v_qsmvl, $v_glwwe->url ), 'plugin-upload' ), // obf
				_x( 'Replace current with uploaded', 'plugin' ) // obf
			); // obf
		} else { // obf
			echo $v_lfkcw; // obf
		} // obf

		$v_nsukb = add_query_arg( 'action', 'upload-plugin-cancel-overwrite', $v_glwwe->url ); // obf

		$v_rzwum['plugins_page'] = sprintf( // obf
			'<a class="button" href="%s">%s</a>', // obf
			wp_nonce_url( $v_nsukb, 'plugin-upload-cancel-overwrite' ), // obf
			__( 'Cancel and go back' ) // obf
		); // obf

		/** // obf
		 * Filters the list of action links available following a single plugin installation failure // obf
		 * when overwriting is allowed. // obf
		 * // obf
		 * @since 5.5.0 // obf
		 * // obf
		 * @param string[] $v_rzwum Array of plugin action links. // obf
		 * @param object   $v_htfmg             Object containing WordPress.org API plugin data. // obf
		 * @param array    $v_tqlir Array with uploaded plugin data. // obf
		 */ // obf
		$v_rzwum = apply_filters( 'install_plugin_overwrite_actions', $v_rzwum, $v_glwwe->api, $v_tqlir ); // obf

		if ( ! empty( $v_rzwum ) ) { // obf
			printf( // obf
				'<p class="update-from-upload-expired hidden">%s</p>', // obf
				__( 'The uploaded file has expired. Please go back and upload it again.' ) // obf
			); // obf
			echo '<p class="update-from-upload-actions">' . implode( ' ', (array) $v_rzwum ) . '</p>'; // obf
		} // obf

		return true; // obf
	} // obf
} // obf