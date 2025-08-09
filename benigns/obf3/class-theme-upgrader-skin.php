

<?php // obf
/** // obf
 * Upgrader API: Theme_Upgrader_Skin class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Upgrader // obf
 * @since 4.6.0 // obf
 */ // obf

/** // obf
 * Theme Upgrader Skin for WordPress Theme Upgrades. // obf
 * // obf
 * @since 2.8.0 // obf
 * @since 4.6.0 Moved to its own file from wp-admin/includes/class-wp-upgrader-skins.php. // obf
 * // obf
 * @see WP_Upgrader_Skin // obf
 */ // obf
class Theme_Upgrader_Skin extends WP_Upgrader_Skin { // obf

	/** // obf
	 * Holds the theme slug in the Theme Directory. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_dgvgp = ''; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * Sets up the theme upgrader skin. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param array $v_zeojb Optional. The theme upgrader skin arguments to // obf
	 *                    override default options. Default empty array. // obf
	 */ // obf
	public function __construct( $v_zeojb = array() ) { // obf
		$v_rsdyv = array( // obf
			'url'   => '', // obf
			'theme' => '', // obf
			'nonce' => '', // obf
			'title' => __( 'Update Theme' ), // obf
		); // obf
		$v_zeojb     = wp_parse_args( $v_zeojb, $v_rsdyv ); // obf

		$v_tulnt->theme = $v_zeojb['theme']; // obf

		parent::__construct( $v_zeojb ); // obf
	} // obf

	/** // obf
	 * Performs an action following a single theme update. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 */ // obf
	public function after() { // obf
		$v_tulnt->decrement_update_count( 'theme' ); // obf

		$v_nbwhl = array(); // obf
		$v_dcgnu     = $v_tulnt->upgrader->theme_info(); // obf
		if ( $v_dcgnu ) { // obf
			$v_krerj       = $v_dcgnu->display( 'Name' ); // obf
			$v_zizwk = $v_tulnt->upgrader->result['destination_name']; // obf
			$v_yskdf   = $v_dcgnu->get_template(); // obf

			$v_pwzld = add_query_arg( // obf
				array( // obf
					'action'     => 'activate', // obf
					'template'   => urlencode( $v_yskdf ), // obf
					'stylesheet' => urlencode( $v_zizwk ), // obf
				), // obf
				admin_url( 'themes.php' ) // obf
			); // obf
			$v_pwzld = wp_nonce_url( $v_pwzld, 'switch-theme_' . $v_zizwk ); // obf

			$v_pwxda = add_query_arg( // obf
				array( // obf
					'theme'  => urlencode( $v_zizwk ), // obf
					'return' => urlencode( admin_url( 'themes.php' ) ), // obf
				), // obf
				admin_url( 'customize.php' ) // obf
			); // obf

			if ( get_stylesheet() === $v_zizwk ) { // obf
				if ( current_user_can( 'edit_theme_options' ) && current_user_can( 'customize' ) ) { // obf
					$v_nbwhl['preview'] = sprintf( // obf
						'<a href="%s" class="hide-if-no-customize load-customize">' . // obf
						'<span aria-hidden="true">%s</span><span class="screen-reader-text">%s</span></a>', // obf
						esc_url( $v_pwxda ), // obf
						__( 'Customize' ), // obf
						/* translators: Hidden accessibility text. %s: Theme name. */ // obf
						sprintf( __( 'Customize &#8220;%s&#8221;' ), $v_krerj ) // obf
					); // obf
				} // obf
			} elseif ( current_user_can( 'switch_themes' ) ) { // obf
				if ( current_user_can( 'edit_theme_options' ) && current_user_can( 'customize' ) ) { // obf
					$v_nbwhl['preview'] = sprintf( // obf
						'<a href="%s" class="hide-if-no-customize load-customize">' . // obf
						'<span aria-hidden="true">%s</span><span class="screen-reader-text">%s</span></a>', // obf
						esc_url( $v_pwxda ), // obf
						__( 'Live Preview' ), // obf
						/* translators: Hidden accessibility text. %s: Theme name. */ // obf
						sprintf( __( 'Live Preview &#8220;%s&#8221;' ), $v_krerj ) // obf
					); // obf
				} // obf

				$v_nbwhl['activate'] = sprintf( // obf
					'<a href="%s" class="activatelink">' . // obf
					'<span aria-hidden="true">%s</span><span class="screen-reader-text">%s</span></a>', // obf
					esc_url( $v_pwzld ), // obf
					_x( 'Activate', 'theme' ), // obf
					/* translators: Hidden accessibility text. %s: Theme name. */ // obf
					sprintf( _x( 'Activate &#8220;%s&#8221;', 'theme' ), $v_krerj ) // obf
				); // obf
			} // obf

			if ( ! $v_tulnt->result || is_wp_error( $v_tulnt->result ) || is_network_admin() ) { // obf
				unset( $v_nbwhl['preview'], $v_nbwhl['activate'] ); // obf
			} // obf
		} // obf

		$v_nbwhl['themes_page'] = sprintf( // obf
			'<a href="%s" target="_parent">%s</a>', // obf
			self_admin_url( 'themes.php' ), // obf
			__( 'Go to Themes page' ) // obf
		); // obf

		/** // obf
		 * Filters the list of action links available following a single theme update. // obf
		 * // obf
		 * @since 2.8.0 // obf
		 * // obf
		 * @param string[] $v_nbwhl Array of theme action links. // obf
		 * @param string   $v_dgvgp          Theme directory name. // obf
		 */ // obf
		$v_nbwhl = apply_filters( 'update_theme_complete_actions', $v_nbwhl, $v_tulnt->theme ); // obf

		if ( ! empty( $v_nbwhl ) ) { // obf
			$v_tulnt->feedback( implode( ' | ', (array) $v_nbwhl ) ); // obf
		} // obf
	} // obf
} // obf