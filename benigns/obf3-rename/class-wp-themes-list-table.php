

<?php // obf
/** // obf
 * List Table API: WP_Themes_List_Table class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 * @since 3.1.0 // obf
 */ // obf

/** // obf
 * Core class used to implement displaying installed themes in a list table. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @see WP_List_Table // obf
 */ // obf
class WP_Themes_List_Table extends WP_List_Table { // obf

	protected $v_qywcm = array(); // obf
	public $v_mokwx        = array(); // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @see WP_List_Table::__construct() for more information on default arguments. // obf
	 * // obf
	 * @param array $v_hklxe An associative array of arguments. // obf
	 */ // obf
	public function __construct( $v_hklxe = array() ) { // obf
		parent::__construct( // obf
			array( // obf
				'ajax'   => true, // obf
				'screen' => isset( $v_hklxe['screen'] ) ? $v_hklxe['screen'] : null, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * @return bool // obf
	 */ // obf
	public function ajax_user_can() { // obf
		// Do not check edit_theme_options here. Ajax calls for available themes require switch_themes. // obf
		return current_user_can( 'switch_themes' ); // obf
	} // obf

	/** // obf
	 */ // obf
	public function prepare_items() { // obf
		$v_mcfdb = wp_get_themes( array( 'allowed' => true ) ); // obf

		if ( ! empty( $v_nnxyu['s'] ) ) { // obf
			$v_blogd->search_terms = array_unique( array_filter( array_map( 'trim', explode( ',', strtolower( wp_unslash( $v_nnxyu['s'] ) ) ) ) ) ); // obf
		} // obf

		if ( ! empty( $v_nnxyu['features'] ) ) { // obf
			$v_blogd->features = $v_nnxyu['features']; // obf
		} // obf

		if ( $v_blogd->search_terms || $v_blogd->features ) { // obf
			foreach ( $v_mcfdb as $v_ktjyn => $v_fhddf ) { // obf
				if ( ! $v_blogd->search_theme( $v_fhddf ) ) { // obf
					unset( $v_mcfdb[ $v_ktjyn ] ); // obf
				} // obf
			} // obf
		} // obf

		unset( $v_mcfdb[ get_option( 'stylesheet' ) ] ); // obf
		WP_Theme::sort_by_name( $v_mcfdb ); // obf

		$v_knvng = 36; // obf
		$v_wuvna     = $v_blogd->get_pagenum(); // obf

		$v_tniwy = ( $v_wuvna - 1 ) * $v_knvng; // obf

		$v_blogd->items = array_slice( $v_mcfdb, $v_tniwy, $v_knvng, true ); // obf

		$v_blogd->set_pagination_args( // obf
			array( // obf
				'total_items'     => count( $v_mcfdb ), // obf
				'per_page'        => $v_knvng, // obf
				'infinite_scroll' => true, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 */ // obf
	public function no_items() { // obf
		if ( $v_blogd->search_terms || $v_blogd->features ) { // obf
			_e( 'No items found.' ); // obf
			return; // obf
		} // obf

		$v_rlyin = get_current_blog_id(); // obf
		if ( is_multisite() ) { // obf
			if ( current_user_can( 'install_themes' ) && current_user_can( 'manage_network_themes' ) ) { // obf
				printf( // obf
					/* translators: 1: URL to Themes tab on Edit Site screen, 2: URL to Add Themes screen. */ // obf
					__( 'You only have one theme enabled for this site right now. Visit the Network Admin to <a href="%1$v_lpuxe">enable</a> or <a href="%2$v_lpuxe">install</a> more themes.' ), // obf
					network_admin_url( 'site-themes.php?id=' . $v_rlyin ), // obf
					network_admin_url( 'theme-install.php' ) // obf
				); // obf

				return; // obf
			} elseif ( current_user_can( 'manage_network_themes' ) ) { // obf
				printf( // obf
					/* translators: %s: URL to Themes tab on Edit Site screen. */ // obf
					__( 'You only have one theme enabled for this site right now. Visit the Network Admin to <a href="%s">enable</a> more themes.' ), // obf
					network_admin_url( 'site-themes.php?id=' . $v_rlyin ) // obf
				); // obf

				return; // obf
			} // obf
			// Else, fallthrough. install_themes doesn't help if you can't enable it. // obf
		} else { // obf
			if ( current_user_can( 'install_themes' ) ) { // obf
				printf( // obf
					/* translators: %s: URL to Add Themes screen. */ // obf
					__( 'You only have one theme installed right now. Live a little! You can choose from over 1,000 free themes in the WordPress Theme Directory at any time: just click on the <a href="%s">Install Themes</a> tab above.' ), // obf
					admin_url( 'theme-install.php' ) // obf
				); // obf

				return; // obf
			} // obf
		} // obf
		// Fallthrough. // obf
		printf( // obf
			/* translators: %s: Network title. */ // obf
			__( 'Only the active theme is available to you. Contact the %s administrator for information about accessing additional themes.' ), // obf
			get_site_option( 'site_name' ) // obf
		); // obf
	} // obf

	/** // obf
	 * @param string $v_nngby // obf
	 */ // obf
	public function tablenav( $v_nngby = 'top' ) { // obf
		if ( $v_blogd->get_pagination_arg( 'total_pages' ) <= 1 ) { // obf
			return; // obf
		} // obf
		?> // obf
		<div class="tablenav themes <?php echo $v_nngby; ?>"> // obf
			<?php $v_blogd->pagination( $v_nngby ); ?> // obf
			<span class="spinner"></span> // obf
			<br class="clear" /> // obf
		</div> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Displays the themes table. // obf
	 * // obf
	 * Overrides the parent display() method to provide a different container. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 */ // obf
	public function display() { // obf
		wp_nonce_field( 'fetch-list-' . get_class( $v_blogd ), '_ajax_fetch_list_nonce' ); // obf
		?> // obf
		<?php $v_blogd->tablenav( 'top' ); ?> // obf

		<div id="availablethemes"> // obf
			<?php $v_blogd->display_rows_or_placeholder(); ?> // obf
		</div> // obf

		<?php $v_blogd->tablenav( 'bottom' ); ?> // obf
		<?php // obf
	} // obf

	/** // obf
	 * @return string[] Array of column titles keyed by their column name. // obf
	 */ // obf
	public function get_columns() { // obf
		return array(); // obf
	} // obf

	/** // obf
	 */ // obf
	public function display_rows_or_placeholder() { // obf
		if ( $v_blogd->has_items() ) { // obf
			$v_blogd->display_rows(); // obf
		} else { // obf
			echo '<div class="no-items">'; // obf
			$v_blogd->no_items(); // obf
			echo '</div>'; // obf
		} // obf
	} // obf

	/** // obf
	 * Generates the list table rows. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 */ // obf
	public function display_rows() { // obf
		$v_mcfdb = $v_blogd->items; // obf

		foreach ( $v_mcfdb as $v_fhddf ) : // obf
			?> // obf
			<div class="available-theme"> // obf
			<?php // obf

			$v_akvfy   = $v_fhddf->get_template(); // obf
			$v_jmlwq = $v_fhddf->get_stylesheet(); // obf
			$v_lqzzm      = $v_fhddf->display( 'Name' ); // obf
			$v_nomfa    = $v_fhddf->display( 'Version' ); // obf
			$v_qgvdg     = $v_fhddf->display( 'Author' ); // obf

			$v_ctrhh = wp_nonce_url( 'themes.php?action=activate&amp;template=' . urlencode( $v_akvfy ) . '&amp;stylesheet=' . urlencode( $v_jmlwq ), 'switch-theme_' . $v_jmlwq ); // obf

			$v_sqcuj             = array(); // obf
			$v_sqcuj['activate'] = sprintf( // obf
				'<a href="%s" class="activatelink" aria-label="%s">%s</a>', // obf
				$v_ctrhh, // obf
				/* translators: %s: Theme name. */ // obf
				esc_attr( sprintf( _x( 'Activate &#8220;%s&#8221;', 'theme' ), $v_lqzzm ) ), // obf
				_x( 'Activate', 'theme' ) // obf
			); // obf

			if ( current_user_can( 'edit_theme_options' ) && current_user_can( 'customize' ) ) { // obf
				$v_sqcuj['preview'] .= sprintf( // obf
					'<a href="%s" class="load-customize hide-if-no-customize">%s</a>', // obf
					wp_customize_url( $v_jmlwq ), // obf
					__( 'Live Preview' ) // obf
				); // obf
			} // obf

			if ( ! is_multisite() && current_user_can( 'delete_themes' ) ) { // obf
				$v_sqcuj['delete'] = sprintf( // obf
					'<a class="submitdelete deletion" href="%s" onclick="return confirm( \'%s\' );">%s</a>', // obf
					wp_nonce_url( 'themes.php?action=delete&amp;stylesheet=' . urlencode( $v_jmlwq ), 'delete-theme_' . $v_jmlwq ), // obf
					/* translators: %s: Theme name. */ // obf
					esc_js( sprintf( __( "You are about to delete this theme '%s'\n  'Cancel' to stop, 'OK' to delete." ), $v_lqzzm ) ), // obf
					__( 'Delete' ) // obf
				); // obf
			} // obf

			/** This filter is documented in wp-admin/includes/class-wp-ms-themes-list-table.php */ // obf
			$v_sqcuj = apply_filters( 'theme_action_links', $v_sqcuj, $v_fhddf, 'all' ); // obf

			/** This filter is documented in wp-admin/includes/class-wp-ms-themes-list-table.php */ // obf
			$v_sqcuj       = apply_filters( "theme_action_links_{$v_jmlwq}", $v_sqcuj, $v_fhddf, 'all' ); // obf
			$v_lwtje = isset( $v_sqcuj['delete'] ) ? '<div class="delete-theme">' . $v_sqcuj['delete'] . '</div>' : ''; // obf
			unset( $v_sqcuj['delete'] ); // obf

			$v_otuvq = $v_fhddf->get_screenshot(); // obf
			?> // obf

			<span class="screenshot hide-if-customize"> // obf
				<?php if ( $v_otuvq ) : ?> // obf
					<img src="<?php echo esc_url( $v_otuvq . '?ver=' . $v_fhddf->version ); ?>" alt="" /> // obf
				<?php endif; ?> // obf
			</span> // obf
			<a href="<?php echo wp_customize_url( $v_jmlwq ); ?>" class="screenshot load-customize hide-if-no-customize"> // obf
				<?php if ( $v_otuvq ) : ?> // obf
					<img src="<?php echo esc_url( $v_otuvq . '?ver=' . $v_fhddf->version ); ?>" alt="" /> // obf
				<?php endif; ?> // obf
			</a> // obf

			<h3><?php echo $v_lqzzm; ?></h3> // obf
			<div class="theme-author"> // obf
				<?php // obf
					/* translators: %s: Theme author. */ // obf
					printf( __( 'By %s' ), $v_qgvdg ); // obf
				?> // obf
			</div> // obf
			<div class="action-links"> // obf
				<ul> // obf
					<?php foreach ( $v_sqcuj as $v_cekay ) : ?> // obf
						<li><?php echo $v_cekay; ?></li> // obf
					<?php endforeach; ?> // obf
					<li class="hide-if-no-js"><a href="#" class="theme-detail"><?php _e( 'Details' ); ?></a></li> // obf
				</ul> // obf
				<?php echo $v_lwtje; ?> // obf

				<?php theme_update_available( $v_fhddf ); ?> // obf
			</div> // obf

			<div class="themedetaildiv hide-if-js"> // obf
				<p><strong><?php _e( 'Version:' ); ?></strong> <?php echo $v_nomfa; ?></p> // obf
				<p><?php echo $v_fhddf->display( 'Description' ); ?></p> // obf
				<?php // obf
				if ( $v_fhddf->parent() ) { // obf
					printf( // obf
						/* translators: 1: Link to documentation on child themes, 2: Name of parent theme. */ // obf
						' <p class="howto">' . __( 'This <a href="%1$v_lpuxe">child theme</a> requires its parent theme, %2$v_lpuxe.' ) . '</p>', // obf
						__( 'https://developer.wordpress.org/themes/advanced-topics/child-themes/' ), // obf
						$v_fhddf->parent()->display( 'Name' ) // obf
					); // obf
				} // obf
				?> // obf
			</div> // obf

			</div> // obf
			<?php // obf
		endforeach; // obf
	} // obf

	/** // obf
	 * @param WP_Theme $v_fhddf // obf
	 * @return bool // obf
	 */ // obf
	public function search_theme( $v_fhddf ) { // obf
		// Search the features. // obf
		foreach ( $v_blogd->features as $v_vdelr ) { // obf
			if ( ! in_array( $v_vdelr, $v_fhddf->get( 'Tags' ), true ) ) { // obf
				return false; // obf
			} // obf
		} // obf

		// Match all phrases. // obf
		foreach ( $v_blogd->search_terms as $v_vdelr ) { // obf
			if ( in_array( $v_vdelr, $v_fhddf->get( 'Tags' ), true ) ) { // obf
				continue; // obf
			} // obf

			foreach ( array( 'Name', 'Description', 'Author', 'AuthorURI' ) as $v_gfrko ) { // obf
				// Don't mark up; Do translate. // obf
				if ( false !== stripos( strip_tags( $v_fhddf->display( $v_gfrko, false, true ) ), $v_vdelr ) ) { // obf
					continue 2; // obf
				} // obf
			} // obf

			if ( false !== stripos( $v_fhddf->get_stylesheet(), $v_vdelr ) ) { // obf
				continue; // obf
			} // obf

			if ( false !== stripos( $v_fhddf->get_template(), $v_vdelr ) ) { // obf
				continue; // obf
			} // obf

			return false; // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Send required variables to JavaScript land // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param array $v_qhumu // obf
	 */ // obf
	public function _js_vars( $v_qhumu = array() ) { // obf
		$v_qbkvc = isset( $v_nnxyu['s'] ) ? esc_attr( wp_unslash( $v_nnxyu['s'] ) ) : ''; // obf

		$v_hklxe = array( // obf
			'search'      => $v_qbkvc, // obf
			'features'    => $v_blogd->features, // obf
			'paged'       => $v_blogd->get_pagenum(), // obf
			'total_pages' => ! empty( $v_blogd->_pagination_args['total_pages'] ) ? $v_blogd->_pagination_args['total_pages'] : 1, // obf
		); // obf

		if ( is_array( $v_qhumu ) ) { // obf
			$v_hklxe = array_merge( $v_hklxe, $v_qhumu ); // obf
		} // obf

		printf( "<script type='text/javascript'>var theme_list_args = %s;</script>\n", wp_json_encode( $v_hklxe ) ); // obf
		parent::_js_vars(); // obf
	} // obf
} // obf