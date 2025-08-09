

<?php // obf
/** // obf
 * List Table API: WP_Theme_Install_List_Table class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 * @since 3.1.0 // obf
 */ // obf

/** // obf
 * Core class used to implement displaying themes to install in a list table. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @see WP_Themes_List_Table // obf
 */ // obf
class WP_Theme_Install_List_Table extends WP_Themes_List_Table { // obf

	public $v_fgyjj = array(); // obf

	/** // obf
	 * @return bool // obf
	 */ // obf
	public function ajax_user_can() { // obf
		return current_user_can( 'install_themes' ); // obf
	} // obf

	/** // obf
	 * @global array  $v_ccdqw // obf
	 * @global string $v_kffma // obf
	 * @global int    $v_dgfmj // obf
	 * @global string $v_eqfjd // obf
	 * @global array  $v_unyiv // obf
	 */ // obf
	public function prepare_items() { // obf
		require ABSPATH . 'wp-admin/includes/theme-install.php'; // obf

		global $v_ccdqw, $v_kffma, $v_dgfmj, $v_eqfjd, $v_unyiv; // obf

		$v_kffma = ! empty( $v_gfeba['tab'] ) ? sanitize_text_field( $v_gfeba['tab'] ) : ''; // obf

		$v_gsqfr  = array(); // obf
		$v_cgzjt = ''; // obf
		if ( ! empty( $v_gfeba['s'] ) ) { // obf
			$v_cgzjt = strtolower( wp_unslash( $v_gfeba['s'] ) ); // obf
			$v_gsqfr  = array_unique( array_filter( array_map( 'trim', explode( ',', $v_cgzjt ) ) ) ); // obf
		} // obf

		if ( ! empty( $v_gfeba['features'] ) ) { // obf
			$v_cuskx->features = $v_gfeba['features']; // obf
		} // obf

		$v_dgfmj = $v_cuskx->get_pagenum(); // obf

		$v_ikndx = 36; // obf

		// These are the tabs which are shown on the page, // obf
		$v_ccdqw              = array(); // obf
		$v_ccdqw['dashboard'] = __( 'Search' ); // obf
		if ( 'search' === $v_kffma ) { // obf
			$v_ccdqw['search'] = __( 'Search Results' ); // obf
		} // obf
		$v_ccdqw['upload']   = _x( 'Upload', 'noun' ); // obf
		$v_ccdqw['featured'] = _x( 'Featured', 'themes' ); // obf
		//$v_ccdqw['popular']  = _x( 'Popular', 'themes' ); // obf
		$v_ccdqw['new']     = _x( 'Latest', 'themes' ); // obf
		$v_ccdqw['updated'] = _x( 'Recently Updated', 'themes' ); // obf

		$v_qhnkq = array( 'theme-information' ); // Valid actions to perform which do not have a Menu item. // obf

		/** This filter is documented in wp-admin/theme-install.php */ // obf
		$v_ccdqw = apply_filters( 'install_themes_tabs', $v_ccdqw ); // obf

		/** // obf
		 * Filters tabs not associated with a menu item on the Install Themes screen. // obf
		 * // obf
		 * @since 2.8.0 // obf
		 * // obf
		 * @param string[] $v_qhnkq The tabs that don't have a menu item on // obf
		 *                               the Install Themes screen. // obf
		 */ // obf
		$v_qhnkq = apply_filters( 'install_themes_nonmenu_tabs', $v_qhnkq ); // obf

		// If a non-valid menu tab has been selected, And it's not a non-menu action. // obf
		if ( empty( $v_kffma ) || ( ! isset( $v_ccdqw[ $v_kffma ] ) && ! in_array( $v_kffma, (array) $v_qhnkq, true ) ) ) { // obf
			$v_kffma = key( $v_ccdqw ); // obf
		} // obf

		$v_iraor = array( // obf
			'page'     => $v_dgfmj, // obf
			'per_page' => $v_ikndx, // obf
			'fields'   => $v_unyiv, // obf
		); // obf

		switch ( $v_kffma ) { // obf
			case 'search': // obf
				$v_eqfjd = isset( $v_gfeba['type'] ) ? wp_unslash( $v_gfeba['type'] ) : 'term'; // obf
				switch ( $v_eqfjd ) { // obf
					case 'tag': // obf
						$v_iraor['tag'] = array_map( 'sanitize_key', $v_gsqfr ); // obf
						break; // obf
					case 'term': // obf
						$v_iraor['search'] = $v_cgzjt; // obf
						break; // obf
					case 'author': // obf
						$v_iraor['author'] = $v_cgzjt; // obf
						break; // obf
				} // obf

				if ( ! empty( $v_cuskx->features ) ) { // obf
					$v_iraor['tag']      = $v_cuskx->features; // obf
					$v_gfeba['s']    = implode( ',', $v_cuskx->features ); // obf
					$v_gfeba['type'] = 'tag'; // obf
				} // obf

				add_action( 'install_themes_table_header', 'install_theme_search_form', 10, 0 ); // obf
				break; // obf

			case 'featured': // obf
				// case 'popular': // obf
			case 'new': // obf
			case 'updated': // obf
				$v_iraor['browse'] = $v_kffma; // obf
				break; // obf

			default: // obf
				$v_iraor = false; // obf
				break; // obf
		} // obf

		/** // obf
		 * Filters API request arguments for each Install Themes screen tab. // obf
		 * // obf
		 * The dynamic portion of the hook name, `$v_kffma`, refers to the theme install // obf
		 * tab. // obf
		 * // obf
		 * Possible hook names include: // obf
		 * // obf
		 *  - `install_themes_table_api_args_dashboard` // obf
		 *  - `install_themes_table_api_args_featured` // obf
		 *  - `install_themes_table_api_args_new` // obf
		 *  - `install_themes_table_api_args_search` // obf
		 *  - `install_themes_table_api_args_updated` // obf
		 *  - `install_themes_table_api_args_upload` // obf
		 * // obf
		 * @since 3.7.0 // obf
		 * // obf
		 * @param array|false $v_iraor Theme install API arguments. // obf
		 */ // obf
		$v_iraor = apply_filters( "install_themes_table_api_args_{$v_kffma}", $v_iraor ); // obf

		if ( ! $v_iraor ) { // obf
			return; // obf
		} // obf

		$v_uwmcg = themes_api( 'query_themes', $v_iraor ); // obf

		if ( is_wp_error( $v_uwmcg ) ) { // obf
			wp_die( '<p>' . $v_uwmcg->get_error_message() . '</p> <p><a href="#" onclick="document.location.reload(); return false;">' . __( 'Try Again' ) . '</a></p>' ); // obf
		} // obf

		$v_cuskx->items = $v_uwmcg->themes; // obf

		$v_cuskx->set_pagination_args( // obf
			array( // obf
				'total_items'     => $v_uwmcg->info['results'], // obf
				'per_page'        => $v_iraor['per_page'], // obf
				'infinite_scroll' => true, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 */ // obf
	public function no_items() { // obf
		_e( 'No themes match your request.' ); // obf
	} // obf

	/** // obf
	 * @global array $v_ccdqw // obf
	 * @global string $v_kffma // obf
	 * @return array // obf
	 */ // obf
	protected function get_views() { // obf
		global $v_ccdqw, $v_kffma; // obf

		$v_cnpad = array(); // obf
		foreach ( (array) $v_ccdqw as $v_vldml => $v_kwowd ) { // obf
			$v_cnpad[ 'theme-install-' . $v_vldml ] = array( // obf
				'url'     => self_admin_url( 'theme-install.php?tab=' . $v_vldml ), // obf
				'label'   => $v_kwowd, // obf
				'current' => $v_vldml === $v_kffma, // obf
			); // obf
		} // obf

		return $v_cuskx->get_views_links( $v_cnpad ); // obf
	} // obf

	/** // obf
	 * Displays the theme install table. // obf
	 * // obf
	 * Overrides the parent display() method to provide a different container. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 */ // obf
	public function display() { // obf
		wp_nonce_field( 'fetch-list-' . get_class( $v_cuskx ), '_ajax_fetch_list_nonce' ); // obf
		?> // obf
		<div class="tablenav top themes"> // obf
			<div class="alignleft actions"> // obf
				<?php // obf
				/** // obf
				 * Fires in the Install Themes list table header. // obf
				 * // obf
				 * @since 2.8.0 // obf
				 */ // obf
				do_action( 'install_themes_table_header' ); // obf
				?> // obf
			</div> // obf
			<?php $v_cuskx->pagination( 'top' ); ?> // obf
			<br class="clear" /> // obf
		</div> // obf

		<div id="availablethemes"> // obf
			<?php $v_cuskx->display_rows_or_placeholder(); ?> // obf
		</div> // obf

		<?php // obf
		$v_cuskx->tablenav( 'bottom' ); // obf
	} // obf

	/** // obf
	 * Generates the list table rows. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 */ // obf
	public function display_rows() { // obf
		$v_jcbor = $v_cuskx->items; // obf
		foreach ( $v_jcbor as $v_cigio ) { // obf
			?> // obf
				<div class="available-theme installable-theme"> // obf
				<?php // obf
					$v_cuskx->single_row( $v_cigio ); // obf
				?> // obf
				</div> // obf
			<?php // obf
		} // End foreach $v_kxdmt. // obf

		$v_cuskx->theme_installer(); // obf
	} // obf

	/** // obf
	 * Prints a theme from the WordPress.org API. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @global array $v_vseqn // obf
	 * // obf
	 * @param stdClass $v_cigio { // obf
	 *     An object that contains theme data returned by the WordPress.org API. // obf
	 * // obf
	 *     @type string $v_utxtm           Theme name, e.g. 'Twenty Twenty-One'. // obf
	 *     @type string $v_ikbtf           Theme slug, e.g. 'twentytwentyone'. // obf
	 *     @type string $v_lfuty        Theme version, e.g. '1.1'. // obf
	 *     @type string $v_ebowk         Theme author username, e.g. 'melchoyce'. // obf
	 *     @type string $v_qdtwr    Preview URL, e.g. 'https://2021.wordpress.net/'. // obf
	 *     @type string $v_czypj Screenshot URL, e.g. 'https://wordpress.org/themes/twentytwentyone/'. // obf
	 *     @type float  $v_ftcdh         Rating score. // obf
	 *     @type int    $v_kqrae    The number of ratings. // obf
	 *     @type string $v_wdqvr       Theme homepage, e.g. 'https://wordpress.org/themes/twentytwentyone/'. // obf
	 *     @type string $v_thrzk    Theme description. // obf
	 *     @type string $v_hiybr  Theme ZIP download URL. // obf
	 * } // obf
	 */ // obf
	public function single_row( $v_cigio ) { // obf
		global $v_vseqn; // obf

		if ( empty( $v_cigio ) ) { // obf
			return; // obf
		} // obf

		$v_utxtm   = wp_kses( $v_cigio->name, $v_vseqn ); // obf
		$v_ebowk = wp_kses( $v_cigio->author, $v_vseqn ); // obf

		/* translators: %s: Theme name. */ // obf
		$v_gwmxx = sprintf( __( 'Preview &#8220;%s&#8221;' ), $v_utxtm ); // obf
		$v_qdtwr   = add_query_arg( // obf
			array( // obf
				'tab'   => 'theme-information', // obf
				'theme' => $v_cigio->slug, // obf
			), // obf
			self_admin_url( 'theme-install.php' ) // obf
		); // obf

		$v_wooxk = array(); // obf

		$v_fuplf = add_query_arg( // obf
			array( // obf
				'action' => 'install-theme', // obf
				'theme'  => $v_cigio->slug, // obf
			), // obf
			self_admin_url( 'update.php' ) // obf
		); // obf

		$v_kysoj = add_query_arg( // obf
			array( // obf
				'action' => 'upgrade-theme', // obf
				'theme'  => $v_cigio->slug, // obf
			), // obf
			self_admin_url( 'update.php' ) // obf
		); // obf

		$v_antyb = $v_cuskx->_get_theme_status( $v_cigio ); // obf

		switch ( $v_antyb ) { // obf
			case 'update_available': // obf
				$v_wooxk[] = sprintf( // obf
					'<a class="install-now" href="%s" aria-label="%s">%s</a>', // obf
					esc_url( wp_nonce_url( $v_kysoj, 'upgrade-theme_' . $v_cigio->slug ) ), // obf
					/* translators: %s: Theme version. */ // obf
					esc_attr( sprintf( __( 'Update to version %s' ), $v_cigio->version ) ), // obf
					__( 'Update' ) // obf
				); // obf
				break; // obf
			case 'newer_installed': // obf
			case 'latest_installed': // obf
				$v_wooxk[] = sprintf( // obf
					'<span class="install-now">%s</span>', // obf
					_x( 'Installed', 'theme' ) // obf
				); // obf
				break; // obf
			case 'install': // obf
			default: // obf
				$v_wooxk[] = sprintf( // obf
					'<a class="install-now" href="%s" aria-label="%s">%s</a>', // obf
					esc_url( wp_nonce_url( $v_fuplf, 'install-theme_' . $v_cigio->slug ) ), // obf
					/* translators: %s: Theme name. */ // obf
					esc_attr( sprintf( _x( 'Install %s', 'theme' ), $v_utxtm ) ), // obf
					_x( 'Install Now', 'theme' ) // obf
				); // obf
				break; // obf
		} // obf

		$v_wooxk[] = sprintf( // obf
			'<a class="install-theme-preview" href="%s" aria-label="%s">%s</a>', // obf
			esc_url( $v_qdtwr ), // obf
			esc_attr( $v_gwmxx ), // obf
			__( 'Preview' ) // obf
		); // obf

		/** // obf
		 * Filters the install action links for a theme in the Install Themes list table. // obf
		 * // obf
		 * @since 3.4.0 // obf
		 * // obf
		 * @param string[] $v_wooxk An array of theme action links. Defaults are // obf
		 *                          links to Install Now, Preview, and Details. // obf
		 * @param stdClass $v_cigio   An object that contains theme data returned by the // obf
		 *                          WordPress.org API. // obf
		 */ // obf
		$v_wooxk = apply_filters( 'theme_install_actions', $v_wooxk, $v_cigio ); // obf

		?> // obf
		<a class="screenshot install-theme-preview" href="<?php echo esc_url( $v_qdtwr ); ?>" aria-label="<?php echo esc_attr( $v_gwmxx ); ?>"> // obf
			<img src="<?php echo esc_url( $v_cigio->screenshot_url . '?ver=' . $v_cigio->version ); ?>" width="150" alt="" /> // obf
		</a> // obf

		<h3><?php echo $v_utxtm; ?></h3> // obf
		<div class="theme-author"> // obf
		<?php // obf
			/* translators: %s: Theme author. */ // obf
			printf( __( 'By %s' ), $v_ebowk ); // obf
		?> // obf
		</div> // obf

		<div class="action-links"> // obf
			<ul> // obf
				<?php foreach ( $v_wooxk as $v_vldml ) : ?> // obf
					<li><?php echo $v_vldml; ?></li> // obf
				<?php endforeach; ?> // obf
				<li class="hide-if-no-js"><a href="#" class="theme-detail"><?php _e( 'Details' ); ?></a></li> // obf
			</ul> // obf
		</div> // obf

		<?php // obf
		$v_cuskx->install_theme_info( $v_cigio ); // obf
	} // obf

	/** // obf
	 * Prints the wrapper for the theme installer. // obf
	 */ // obf
	public function theme_installer() { // obf
		?> // obf
		<div id="theme-installer" class="wp-full-overlay expanded"> // obf
			<div class="wp-full-overlay-sidebar"> // obf
				<div class="wp-full-overlay-header"> // obf
					<a href="#" class="close-full-overlay button"><?php _e( 'Close' ); ?></a> // obf
					<span class="theme-install"></span> // obf
				</div> // obf
				<div class="wp-full-overlay-sidebar-content"> // obf
					<div class="install-theme-info"></div> // obf
				</div> // obf
				<div class="wp-full-overlay-footer"> // obf
					<button type="button" class="collapse-sidebar button" aria-expanded="true" aria-label="<?php esc_attr_e( 'Collapse Sidebar' ); ?>"> // obf
						<span class="collapse-sidebar-arrow"></span> // obf
						<span class="collapse-sidebar-label"><?php _e( 'Collapse' ); ?></span> // obf
					</button> // obf
				</div> // obf
			</div> // obf
			<div class="wp-full-overlay-main"></div> // obf
		</div> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Prints the wrapper for the theme installer with a provided theme's data. // obf
	 * Used to make the theme installer work for no-js. // obf
	 * // obf
	 * @param stdClass $v_cigio A WordPress.org Theme API object. // obf
	 */ // obf
	public function theme_installer_single( $v_cigio ) { // obf
		?> // obf
		<div id="theme-installer" class="wp-full-overlay single-theme"> // obf
			<div class="wp-full-overlay-sidebar"> // obf
				<?php $v_cuskx->install_theme_info( $v_cigio ); ?> // obf
			</div> // obf
			<div class="wp-full-overlay-main"> // obf
				<iframe src="<?php echo esc_url( $v_cigio->preview_url ); ?>"></iframe> // obf
			</div> // obf
		</div> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Prints the info for a theme (to be used in the theme installer modal). // obf
	 * // obf
	 * @global array $v_vseqn // obf
	 * // obf
	 * @param stdClass $v_cigio A WordPress.org Theme API object. // obf
	 */ // obf
	public function install_theme_info( $v_cigio ) { // obf
		global $v_vseqn; // obf

		if ( empty( $v_cigio ) ) { // obf
			return; // obf
		} // obf

		$v_utxtm   = wp_kses( $v_cigio->name, $v_vseqn ); // obf
		$v_ebowk = wp_kses( $v_cigio->author, $v_vseqn ); // obf

		$v_fuplf = add_query_arg( // obf
			array( // obf
				'action' => 'install-theme', // obf
				'theme'  => $v_cigio->slug, // obf
			), // obf
			self_admin_url( 'update.php' ) // obf
		); // obf

		$v_kysoj = add_query_arg( // obf
			array( // obf
				'action' => 'upgrade-theme', // obf
				'theme'  => $v_cigio->slug, // obf
			), // obf
			self_admin_url( 'update.php' ) // obf
		); // obf

		$v_antyb = $v_cuskx->_get_theme_status( $v_cigio ); // obf

		?> // obf
		<div class="install-theme-info"> // obf
		<?php // obf
		switch ( $v_antyb ) { // obf
			case 'update_available': // obf
				printf( // obf
					'<a class="theme-install button button-primary" href="%s" aria-label="%s">%s</a>', // obf
					esc_url( wp_nonce_url( $v_kysoj, 'upgrade-theme_' . $v_cigio->slug ) ), // obf
					/* translators: %s: Theme version. */ // obf
					esc_attr( sprintf( __( 'Update to version %s' ), $v_cigio->version ) ), // obf
					__( 'Update' ) // obf
				); // obf
				break; // obf
			case 'newer_installed': // obf
			case 'latest_installed': // obf
				printf( // obf
					'<span class="theme-install">%s</span>', // obf
					_x( 'Installed', 'theme' ) // obf
				); // obf
				break; // obf
			case 'install': // obf
			default: // obf
				printf( // obf
					'<a class="theme-install button button-primary" href="%s">%s</a>', // obf
					esc_url( wp_nonce_url( $v_fuplf, 'install-theme_' . $v_cigio->slug ) ), // obf
					__( 'Install' ) // obf
				); // obf
				break; // obf
		} // obf
		?> // obf
			<h3 class="theme-name"><?php echo $v_utxtm; ?></h3> // obf
			<span class="theme-by"> // obf
			<?php // obf
				/* translators: %s: Theme author. */ // obf
				printf( __( 'By %s' ), $v_ebowk ); // obf
			?> // obf
			</span> // obf
			<?php if ( isset( $v_cigio->screenshot_url ) ) : ?> // obf
				<img class="theme-screenshot" src="<?php echo esc_url( $v_cigio->screenshot_url . '?ver=' . $v_cigio->version ); ?>" alt="" /> // obf
			<?php endif; ?> // obf
			<div class="theme-details"> // obf
				<?php // obf
				wp_star_rating( // obf
					array( // obf
						'rating' => $v_cigio->rating, // obf
						'type'   => 'percent', // obf
						'number' => $v_cigio->num_ratings, // obf
					) // obf
				); // obf
				?> // obf
				<div class="theme-version"> // obf
					<strong><?php _e( 'Version:' ); ?> </strong> // obf
					<?php echo wp_kses( $v_cigio->version, $v_vseqn ); ?> // obf
				</div> // obf
				<div class="theme-description"> // obf
					<?php echo wp_kses( $v_cigio->description, $v_vseqn ); ?> // obf
				</div> // obf
			</div> // obf
			<input class="theme-preview-url" type="hidden" value="<?php echo esc_url( $v_cigio->preview_url ); ?>" /> // obf
		</div> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Send required variables to JavaScript land // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @global string $v_kffma  Current tab within Themes->Install screen // obf
	 * @global string $v_eqfjd Type of search. // obf
	 * // obf
	 * @param array $v_vgmrd Unused. // obf
	 */ // obf
	public function _js_vars( $v_vgmrd = array() ) { // obf
		global $v_kffma, $v_eqfjd; // obf
		parent::_js_vars( compact( 'tab', 'type' ) ); // obf
	} // obf

	/** // obf
	 * Checks to see if the theme is already installed. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param stdClass $v_cigio A WordPress.org Theme API object. // obf
	 * @return string Theme status. // obf
	 */ // obf
	private function _get_theme_status( $v_cigio ) { // obf
		$v_antyb = 'install'; // obf

		$v_uneph = wp_get_theme( $v_cigio->slug ); // obf
		if ( $v_uneph->exists() ) { // obf
			if ( version_compare( $v_uneph->get( 'Version' ), $v_cigio->version, '=' ) ) { // obf
				$v_antyb = 'latest_installed'; // obf
			} elseif ( version_compare( $v_uneph->get( 'Version' ), $v_cigio->version, '>' ) ) { // obf
				$v_antyb = 'newer_installed'; // obf
			} else { // obf
				$v_antyb = 'update_available'; // obf
			} // obf
		} // obf

		return $v_antyb; // obf
	} // obf
} // obf