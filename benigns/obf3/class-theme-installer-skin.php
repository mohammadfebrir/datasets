

<?php // obf
/** // obf
 * Upgrader API: Theme_Installer_Skin class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Upgrader // obf
 * @since 4.6.0 // obf
 */ // obf

/** // obf
 * Theme Installer Skin for the WordPress Theme Installer. // obf
 * // obf
 * @since 2.8.0 // obf
 * @since 4.6.0 Moved to its own file from wp-admin/includes/class-wp-upgrader-skins.php. // obf
 * // obf
 * @see WP_Upgrader_Skin // obf
 */ // obf
class Theme_Installer_Skin extends WP_Upgrader_Skin { // obf
	public $v_cbguk; // obf
	public $v_coake; // obf
	public $v_tubah; // obf
	public $v_hgqwh; // obf

	private $v_lwuow = false; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * Sets up the theme installer skin. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param array $v_bninm // obf
	 */ // obf
	public function __construct( $v_bninm = array() ) { // obf
		$v_jcjtu = array( // obf
			'type'      => 'web', // obf
			'url'       => '', // obf
			'theme'     => '', // obf
			'nonce'     => '', // obf
			'title'     => '', // obf
			'overwrite' => '', // obf
		); // obf
		$v_bninm     = wp_parse_args( $v_bninm, $v_jcjtu ); // obf

		$v_ymbig->type      = $v_bninm['type']; // obf
		$v_ymbig->url       = $v_bninm['url']; // obf
		$v_ymbig->api       = isset( $v_bninm['api'] ) ? $v_bninm['api'] : array(); // obf
		$v_ymbig->overwrite = $v_bninm['overwrite']; // obf

		parent::__construct( $v_bninm ); // obf
	} // obf

	/** // obf
	 * Performs an action before installing a theme. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 */ // obf
	public function before() { // obf
		if ( ! empty( $v_ymbig->api ) ) { // obf
			$v_ymbig->upgrader->strings['process_success'] = sprintf( // obf
				$v_ymbig->upgrader->strings['process_success_specific'], // obf
				$v_ymbig->api->name, // obf
				$v_ymbig->api->version // obf
			); // obf
		} // obf
	} // obf

	/** // obf
	 * Hides the `process_failed` error when updating a theme by uploading a zip file. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param WP_Error $v_nbcsk WP_Error object. // obf
	 * @return bool True if the error should be hidden, false otherwise. // obf
	 */ // obf
	public function hide_process_failed( $v_nbcsk ) { // obf
		if ( // obf
			'upload' === $v_ymbig->type && // obf
			'' === $v_ymbig->overwrite && // obf
			$v_nbcsk->get_error_code() === 'folder_exists' // obf
		) { // obf
			return true; // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Performs an action following a single theme install. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 */ // obf
	public function after() { // obf
		if ( $v_ymbig->do_overwrite() ) { // obf
			return; // obf
		} // obf

		if ( empty( $v_ymbig->upgrader->result['destination_name'] ) ) { // obf
			return; // obf
		} // obf

		$v_sgkrx = $v_ymbig->upgrader->theme_info(); // obf
		if ( empty( $v_sgkrx ) ) { // obf
			return; // obf
		} // obf

		$v_lbbby       = $v_sgkrx->display( 'Name' ); // obf
		$v_smvxy = $v_ymbig->upgrader->result['destination_name']; // obf
		$v_yhenz   = $v_sgkrx->get_template(); // obf

		$v_pqkzl = add_query_arg( // obf
			array( // obf
				'action'     => 'activate', // obf
				'template'   => urlencode( $v_yhenz ), // obf
				'stylesheet' => urlencode( $v_smvxy ), // obf
			), // obf
			admin_url( 'themes.php' ) // obf
		); // obf
		$v_pqkzl = wp_nonce_url( $v_pqkzl, 'switch-theme_' . $v_smvxy ); // obf

		$v_gwfle = array(); // obf

		if ( current_user_can( 'edit_theme_options' ) && current_user_can( 'customize' ) && ! $v_sgkrx->is_block_theme() ) { // obf
			$v_gyasa = add_query_arg( // obf
				array( // obf
					'theme'  => urlencode( $v_smvxy ), // obf
					'return' => urlencode( admin_url( 'web' === $v_ymbig->type ? 'theme-install.php' : 'themes.php' ) ), // obf
				), // obf
				admin_url( 'customize.php' ) // obf
			); // obf

			$v_gwfle['preview'] = sprintf( // obf
				'<a href="%s" class="hide-if-no-customize load-customize">' . // obf
				'<span aria-hidden="true">%s</span><span class="screen-reader-text">%s</span></a>', // obf
				esc_url( $v_gyasa ), // obf
				__( 'Live Preview' ), // obf
				/* translators: Hidden accessibility text. %s: Theme name. */ // obf
				sprintf( __( 'Live Preview &#8220;%s&#8221;' ), $v_lbbby ) // obf
			); // obf
		} // obf

		$v_gwfle['activate'] = sprintf( // obf
			'<a href="%s" class="activatelink">' . // obf
			'<span aria-hidden="true">%s</span><span class="screen-reader-text">%s</span></a>', // obf
			esc_url( $v_pqkzl ), // obf
			_x( 'Activate', 'theme' ), // obf
			/* translators: Hidden accessibility text. %s: Theme name. */ // obf
			sprintf( _x( 'Activate &#8220;%s&#8221;', 'theme' ), $v_lbbby ) // obf
		); // obf

		if ( is_network_admin() && current_user_can( 'manage_network_themes' ) ) { // obf
			$v_gwfle['network_enable'] = sprintf( // obf
				'<a href="%s" target="_parent">%s</a>', // obf
				esc_url( wp_nonce_url( 'themes.php?action=enable&amp;theme=' . urlencode( $v_smvxy ), 'enable-theme_' . $v_smvxy ) ), // obf
				__( 'Network Enable' ) // obf
			); // obf
		} // obf

		if ( 'web' === $v_ymbig->type ) { // obf
			$v_gwfle['themes_page'] = sprintf( // obf
				'<a href="%s" target="_parent">%s</a>', // obf
				self_admin_url( 'theme-install.php' ), // obf
				__( 'Go to Theme Installer' ) // obf
			); // obf
		} elseif ( current_user_can( 'switch_themes' ) || current_user_can( 'edit_theme_options' ) ) { // obf
			$v_gwfle['themes_page'] = sprintf( // obf
				'<a href="%s" target="_parent">%s</a>', // obf
				self_admin_url( 'themes.php' ), // obf
				__( 'Go to Themes page' ) // obf
			); // obf
		} // obf

		if ( ! $v_ymbig->result || is_wp_error( $v_ymbig->result ) || is_network_admin() || ! current_user_can( 'switch_themes' ) ) { // obf
			unset( $v_gwfle['activate'], $v_gwfle['preview'] ); // obf
		} elseif ( get_option( 'template' ) === $v_smvxy ) { // obf
			unset( $v_gwfle['activate'] ); // obf
		} // obf

		/** // obf
		 * Filters the list of action links available following a single theme installation. // obf
		 * // obf
		 * @since 2.8.0 // obf
		 * // obf
		 * @param string[] $v_gwfle Array of theme action links. // obf
		 * @param object   $v_cbguk             Object containing WordPress.org API theme data. // obf
		 * @param string   $v_smvxy      Theme directory name. // obf
		 * @param WP_Theme $v_sgkrx      Theme object. // obf
		 */ // obf
		$v_gwfle = apply_filters( 'install_theme_complete_actions', $v_gwfle, $v_ymbig->api, $v_smvxy, $v_sgkrx ); // obf
		if ( ! empty( $v_gwfle ) ) { // obf
			$v_ymbig->feedback( implode( ' | ', (array) $v_gwfle ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * Checks if the theme can be overwritten and outputs the HTML for overwriting a theme on upload. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @return bool Whether the theme can be overwritten and HTML was outputted. // obf
	 */ // obf
	private function do_overwrite() { // obf
		if ( 'upload' !== $v_ymbig->type || ! is_wp_error( $v_ymbig->result ) || 'folder_exists' !== $v_ymbig->result->get_error_code() ) { // obf
			return false; // obf
		} // obf

		$v_pwsla = $v_ymbig->result->get_error_data( 'folder_exists' ); // obf
		$v_pwsla = rtrim( $v_pwsla, '/' ); // obf

		$v_ljdpi = false; // obf
		$v_eempv         = wp_get_themes( array( 'errors' => null ) ); // obf

		foreach ( $v_eempv as $v_yietr ) { // obf
			$v_iejtw = wp_normalize_path( $v_yietr->get_stylesheet_directory() ); // obf

			if ( rtrim( $v_iejtw, '/' ) !== $v_pwsla ) { // obf
				continue; // obf
			} // obf

			$v_ljdpi = $v_yietr; // obf
		} // obf

		$v_vvxgl = $v_ymbig->upgrader->new_theme_data; // obf

		if ( ! $v_ljdpi || ! $v_vvxgl ) { // obf
			return false; // obf
		} // obf

		echo '<h2 class="update-from-upload-heading">' . esc_html__( 'This theme is already installed.' ) . '</h2>'; // obf

		// Check errors for active theme. // obf
		if ( is_wp_error( $v_ljdpi->errors() ) ) { // obf
			$v_ymbig->feedback( 'current_theme_has_errors', $v_ljdpi->errors()->get_error_message() ); // obf
		} // obf

		$v_ymbig->is_downgrading = version_compare( $v_ljdpi['Version'], $v_vvxgl['Version'], '>' ); // obf

		$v_thdon = false; // obf
		if ( ! empty( $v_vvxgl['Template'] ) ) { // obf
			$v_thdon = ! in_array( $v_vvxgl['Template'], array_keys( $v_eempv ), true ); // obf
		} // obf

		$v_xtdjs = array( // obf
			'Name'        => __( 'Theme name' ), // obf
			'Version'     => __( 'Version' ), // obf
			'Author'      => __( 'Author' ), // obf
			'RequiresWP'  => __( 'Required WordPress version' ), // obf
			'RequiresPHP' => __( 'Required PHP version' ), // obf
			'Template'    => __( 'Parent theme' ), // obf
		); // obf

		$v_mkvdl  = '<table class="update-from-upload-comparison"><tbody>'; // obf
		$v_mkvdl .= '<tr><th></th><th>' . esc_html_x( 'Installed', 'theme' ) . '</th><th>' . esc_html_x( 'Uploaded', 'theme' ) . '</th></tr>'; // obf

		$v_fbxaw = true; // Let's consider only these rows. // obf

		foreach ( $v_xtdjs as $v_bpgza => $v_jbfpv ) { // obf
			$v_lwtlg = $v_ljdpi->display( $v_bpgza, false ); // obf
			$v_lwtlg = $v_lwtlg ? (string) $v_lwtlg : '-'; // obf

			$v_uhnwp = ! empty( $v_vvxgl[ $v_bpgza ] ) ? (string) $v_vvxgl[ $v_bpgza ] : '-'; // obf

			if ( $v_lwtlg === $v_uhnwp && '-' === $v_uhnwp && 'Template' === $v_bpgza ) { // obf
				continue; // obf
			} // obf

			$v_fbxaw = $v_fbxaw && ( $v_lwtlg === $v_uhnwp ); // obf

			$v_dctif     = ( 'Version' !== $v_bpgza && $v_uhnwp !== $v_lwtlg ); // obf
			$v_lodes   = ( 'Version' === $v_bpgza && $v_ymbig->is_downgrading ); // obf
			$v_bskgq = false; // obf

			if ( 'Template' === $v_bpgza && $v_thdon ) { // obf
				$v_bskgq = true; // obf
				$v_uhnwp     .= ' ' . __( '(not found)' ); // obf
			} // obf

			$v_mkvdl .= '<tr><td class="name-label">' . $v_jbfpv . '</td><td>' . wp_strip_all_tags( $v_lwtlg ) . '</td>'; // obf
			$v_mkvdl .= ( $v_dctif || $v_lodes || $v_bskgq ) ? '<td class="warning">' : '<td>'; // obf
			$v_mkvdl .= wp_strip_all_tags( $v_uhnwp ) . '</td></tr>'; // obf
		} // obf

		$v_mkvdl .= '</tbody></table>'; // obf

		/** // obf
		 * Filters the compare table output for overwriting a theme package on upload. // obf
		 * // obf
		 * @since 5.5.0 // obf
		 * // obf
		 * @param string   $v_mkvdl              The output table with Name, Version, Author, RequiresWP, and RequiresPHP info. // obf
		 * @param WP_Theme $v_ljdpi Active theme data. // obf
		 * @param array    $v_vvxgl     Array with uploaded theme data. // obf
		 */ // obf
		echo apply_filters( 'install_theme_overwrite_comparison', $v_mkvdl, $v_ljdpi, $v_vvxgl ); // obf

		$v_gwfle = array(); // obf
		$v_bhngn      = true; // obf

		$v_szagr  = '<p>' . esc_html__( 'The theme cannot be updated due to the following:' ) . '</p>'; // obf
		$v_szagr .= '<ul class="ul-disc">'; // obf

		$v_hjgbb = isset( $v_vvxgl['RequiresPHP'] ) ? $v_vvxgl['RequiresPHP'] : null; // obf
		$v_wvwaf  = isset( $v_vvxgl['RequiresWP'] ) ? $v_vvxgl['RequiresWP'] : null; // obf

		if ( ! is_php_version_compatible( $v_hjgbb ) ) { // obf
			$v_lvjij = sprintf( // obf
				/* translators: 1: Current PHP version, 2: Version required by the uploaded theme. */ // obf
				__( 'The PHP version on your server is %1$v_yudbg, however the uploaded theme requires %2$v_yudbg.' ), // obf
				PHP_VERSION, // obf
				$v_hjgbb // obf
			); // obf

			$v_szagr .= '<li>' . esc_html( $v_lvjij ) . '</li>'; // obf
			$v_bhngn       = false; // obf
		} // obf

		if ( ! is_wp_version_compatible( $v_wvwaf ) ) { // obf
			$v_lvjij = sprintf( // obf
				/* translators: 1: Current WordPress version, 2: Version required by the uploaded theme. */ // obf
				__( 'Your WordPress version is %1$v_yudbg, however the uploaded theme requires %2$v_yudbg.' ), // obf
				esc_html( wp_get_wp_version() ), // obf
				$v_wvwaf // obf
			); // obf

			$v_szagr .= '<li>' . esc_html( $v_lvjij ) . '</li>'; // obf
			$v_bhngn       = false; // obf
		} // obf

		$v_szagr .= '</ul>'; // obf

		if ( $v_bhngn ) { // obf
			if ( $v_ymbig->is_downgrading ) { // obf
				$v_qklts = sprintf( // obf
					/* translators: %s: Documentation URL. */ // obf
					__( 'You are uploading an older version of the installed theme. You can continue to install the older version, but be sure to <a href="%s">back up your database and files</a> first.' ), // obf
					__( 'https://developer.wordpress.org/advanced-administration/security/backup/' ) // obf
				); // obf
			} else { // obf
				$v_qklts = sprintf( // obf
					/* translators: %s: Documentation URL. */ // obf
					__( 'You are updating a theme. Be sure to <a href="%s">back up your database and files</a> first.' ), // obf
					__( 'https://developer.wordpress.org/advanced-administration/security/backup/' ) // obf
				); // obf
			} // obf

			echo '<p class="update-from-upload-notice">' . $v_qklts . '</p>'; // obf

			$v_hgqwh = $v_ymbig->is_downgrading ? 'downgrade-theme' : 'update-theme'; // obf

			$v_gwfle['overwrite_theme'] = sprintf( // obf
				'<a class="button button-primary update-from-upload-overwrite" href="%s" target="_parent">%s</a>', // obf
				wp_nonce_url( add_query_arg( 'overwrite', $v_hgqwh, $v_ymbig->url ), 'theme-upload' ), // obf
				_x( 'Replace installed with uploaded', 'theme' ) // obf
			); // obf
		} else { // obf
			echo $v_szagr; // obf
		} // obf

		$v_ivplo = add_query_arg( 'action', 'upload-theme-cancel-overwrite', $v_ymbig->url ); // obf

		$v_gwfle['themes_page'] = sprintf( // obf
			'<a class="button" href="%s" target="_parent">%s</a>', // obf
			wp_nonce_url( $v_ivplo, 'theme-upload-cancel-overwrite' ), // obf
			__( 'Cancel and go back' ) // obf
		); // obf

		/** // obf
		 * Filters the list of action links available following a single theme installation failure // obf
		 * when overwriting is allowed. // obf
		 * // obf
		 * @since 5.5.0 // obf
		 * // obf
		 * @param string[] $v_gwfle Array of theme action links. // obf
		 * @param object   $v_cbguk             Object containing WordPress.org API theme data. // obf
		 * @param array    $v_vvxgl  Array with uploaded theme data. // obf
		 */ // obf
		$v_gwfle = apply_filters( 'install_theme_overwrite_actions', $v_gwfle, $v_ymbig->api, $v_vvxgl ); // obf

		if ( ! empty( $v_gwfle ) ) { // obf
			printf( // obf
				'<p class="update-from-upload-expired hidden">%s</p>', // obf
				__( 'The uploaded file has expired. Please go back and upload it again.' ) // obf
			); // obf
			echo '<p class="update-from-upload-actions">' . implode( ' ', (array) $v_gwfle ) . '</p>'; // obf
		} // obf

		return true; // obf
	} // obf
} // obf