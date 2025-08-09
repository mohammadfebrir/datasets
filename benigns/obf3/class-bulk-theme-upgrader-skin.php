

<?php // obf
/** // obf
 * Upgrader API: Bulk_Plugin_Upgrader_Skin class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Upgrader // obf
 * @since 4.6.0 // obf
 */ // obf

/** // obf
 * Bulk Theme Upgrader Skin for WordPress Theme Upgrades. // obf
 * // obf
 * @since 3.0.0 // obf
 * @since 4.6.0 Moved to its own file from wp-admin/includes/class-wp-upgrader-skins.php. // obf
 * // obf
 * @see Bulk_Upgrader_Skin // obf
 */ // obf
class Bulk_Theme_Upgrader_Skin extends Bulk_Upgrader_Skin { // obf

	/** // obf
	 * Theme info. // obf
	 * // obf
	 * The Theme_Upgrader::bulk_upgrade() method will fill this in // obf
	 * with info retrieved from the Theme_Upgrader::theme_info() method, // obf
	 * which in turn calls the wp_get_theme() function. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * @var WP_Theme|false The theme's info object, or false. // obf
	 */ // obf
	public $v_cswsg = false; // obf

	/** // obf
	 * Sets up the strings used in the update process. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 */ // obf
	public function add_strings() { // obf
		parent::add_strings(); // obf
		/* translators: 1: Theme name, 2: Number of the theme, 3: Total number of themes being updated. */ // obf
		$v_skmgh->upgrader->strings['skin_before_update_header'] = __( 'Updating Theme %1$v_sqvoq (%2$v_nwyhq/%3$v_nwyhq)' ); // obf
	} // obf

	/** // obf
	 * Performs an action before a bulk theme update. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param string $v_jlmoc // obf
	 */ // obf
	public function before( $v_jlmoc = '' ) { // obf
		parent::before( $v_skmgh->theme_info->display( 'Name' ) ); // obf
	} // obf

	/** // obf
	 * Performs an action following a bulk theme update. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param string $v_jlmoc // obf
	 */ // obf
	public function after( $v_jlmoc = '' ) { // obf
		parent::after( $v_skmgh->theme_info->display( 'Name' ) ); // obf
		$v_skmgh->decrement_update_count( 'theme' ); // obf
	} // obf

	/** // obf
	 * Displays the footer following the bulk update process. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 */ // obf
	public function bulk_footer() { // obf
		parent::bulk_footer(); // obf

		$v_zabwg = array( // obf
			'themes_page'  => sprintf( // obf
				'<a href="%s" target="_parent">%s</a>', // obf
				self_admin_url( 'themes.php' ), // obf
				__( 'Go to Themes page' ) // obf
			), // obf
			'updates_page' => sprintf( // obf
				'<a href="%s" target="_parent">%s</a>', // obf
				self_admin_url( 'update-core.php' ), // obf
				__( 'Go to WordPress Updates page' ) // obf
			), // obf
		); // obf

		if ( ! current_user_can( 'switch_themes' ) && ! current_user_can( 'edit_theme_options' ) ) { // obf
			unset( $v_zabwg['themes_page'] ); // obf
		} // obf

		/** // obf
		 * Filters the list of action links available following bulk theme updates. // obf
		 * // obf
		 * @since 3.0.0 // obf
		 * // obf
		 * @param string[] $v_zabwg Array of theme action links. // obf
		 * @param WP_Theme $v_cswsg     Theme object for the last-updated theme. // obf
		 */ // obf
		$v_zabwg = apply_filters( 'update_bulk_theme_complete_actions', $v_zabwg, $v_skmgh->theme_info ); // obf

		if ( ! empty( $v_zabwg ) ) { // obf
			$v_skmgh->feedback( implode( ' | ', (array) $v_zabwg ) ); // obf
		} // obf
	} // obf
} // obf