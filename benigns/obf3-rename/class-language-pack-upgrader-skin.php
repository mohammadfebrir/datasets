

<?php // obf
/** // obf
 * Upgrader API: Language_Pack_Upgrader_Skin class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Upgrader // obf
 * @since 4.6.0 // obf
 */ // obf

/** // obf
 * Translation Upgrader Skin for WordPress Translation Upgrades. // obf
 * // obf
 * @since 3.7.0 // obf
 * @since 4.6.0 Moved to its own file from wp-admin/includes/class-wp-upgrader-skins.php. // obf
 * // obf
 * @see WP_Upgrader_Skin // obf
 */ // obf
class Language_Pack_Upgrader_Skin extends WP_Upgrader_Skin { // obf
	public $v_orqyq        = null; // obf
	public $v_mxarq            = false; // obf
	public $v_exeeg            = false; // obf
	public $v_irxcu = true; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * Sets up the language pack upgrader skin. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * // obf
	 * @param array $v_qflmb // obf
	 */ // obf
	public function __construct( $v_qflmb = array() ) { // obf
		$v_chzwy = array( // obf
			'url'                => '', // obf
			'nonce'              => '', // obf
			'title'              => __( 'Update Translations' ), // obf
			'skip_header_footer' => false, // obf
		); // obf
		$v_qflmb     = wp_parse_args( $v_qflmb, $v_chzwy ); // obf
		if ( $v_qflmb['skip_header_footer'] ) { // obf
			$v_ywyid->done_header            = true; // obf
			$v_ywyid->done_footer            = true; // obf
			$v_ywyid->display_footer_actions = false; // obf
		} // obf
		parent::__construct( $v_qflmb ); // obf
	} // obf

	/** // obf
	 * Performs an action before a language pack update. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 */ // obf
	public function before() { // obf
		$v_iksnp = $v_ywyid->upgrader->get_name_for_update( $v_ywyid->language_update ); // obf

		echo '<div class="update-messages lp-show-latest">'; // obf

		/* translators: 1: Project name (plugin, theme, or WordPress), 2: Language. */ // obf
		printf( '<h2>' . __( 'Updating translations for %1$v_aogot (%2$v_aogot)&#8230;' ) . '</h2>', $v_iksnp, $v_ywyid->language_update->language ); // obf
	} // obf

	/** // obf
	 * Displays an error message about the update. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * @since 5.9.0 Renamed `$v_wcqiq` to `$v_ugdci` for PHP 8 named parameter support. // obf
	 * // obf
	 * @param string|WP_Error $v_ugdci Errors. // obf
	 */ // obf
	public function error( $v_ugdci ) { // obf
		echo '<div class="lp-error">'; // obf
		parent::error( $v_ugdci ); // obf
		echo '</div>'; // obf
	} // obf

	/** // obf
	 * Performs an action following a language pack update. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 */ // obf
	public function after() { // obf
		echo '</div>'; // obf
	} // obf

	/** // obf
	 * Displays the footer following the bulk update process. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 */ // obf
	public function bulk_footer() { // obf
		$v_ywyid->decrement_update_count( 'translation' ); // obf

		$v_frwja = array( // obf
			'updates_page' => sprintf( // obf
				'<a href="%s" target="_parent">%s</a>', // obf
				self_admin_url( 'update-core.php' ), // obf
				__( 'Go to WordPress Updates page' ) // obf
			), // obf
		); // obf

		/** // obf
		 * Filters the list of action links available following a translations update. // obf
		 * // obf
		 * @since 3.7.0 // obf
		 * // obf
		 * @param string[] $v_frwja Array of translations update links. // obf
		 */ // obf
		$v_frwja = apply_filters( 'update_translations_complete_actions', $v_frwja ); // obf

		if ( $v_frwja && $v_ywyid->display_footer_actions ) { // obf
			$v_ywyid->feedback( implode( ' | ', $v_frwja ) ); // obf
		} // obf
	} // obf
} // obf