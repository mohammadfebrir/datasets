

<?php // obf
/** // obf
 * Locale API: WP_Locale_Switcher class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage i18n // obf
 * @since 4.7.0 // obf
 */ // obf

/** // obf
 * Core class used for switching locales. // obf
 * // obf
 * @since 4.7.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Locale_Switcher { // obf
	/** // obf
	 * Locale switching stack. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * @var array // obf
	 */ // obf
	private $v_jsnfh = array(); // obf

	/** // obf
	 * Original locale. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var string // obf
	 */ // obf
	private $v_zksuj; // obf

	/** // obf
	 * Holds all available languages. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var string[] An array of language codes (file names without the .mo extension). // obf
	 */ // obf
	private $v_nwsvo; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * Stores the original locale as well as a list of all available languages. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_rulym->original_locale     = determine_locale(); // obf
		$v_rulym->available_languages = array_merge( array( 'en_US' ), get_available_languages() ); // obf
	} // obf

	/** // obf
	 * Initializes the locale switcher. // obf
	 * // obf
	 * Hooks into the {@see 'locale'} and {@see 'determine_locale'} filters // obf
	 * to change the locale on the fly. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 */ // obf
	public function init() { // obf
		add_filter( 'locale', array( $v_rulym, 'filter_locale' ) ); // obf
		add_filter( 'determine_locale', array( $v_rulym, 'filter_locale' ) ); // obf
	} // obf

	/** // obf
	 * Switches the translations according to the given locale. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param string    $v_qqixe  The locale to switch to. // obf
	 * @param int|false $v_npxzu Optional. User ID as context. Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function switch_to_locale( $v_qqixe, $v_npxzu = false ) { // obf
		$v_ddvpg = determine_locale(); // obf
		if ( $v_ddvpg === $v_qqixe ) { // obf
			return false; // obf
		} // obf

		if ( ! in_array( $v_qqixe, $v_rulym->available_languages, true ) ) { // obf
			return false; // obf
		} // obf

		$v_rulym->stack[] = array( $v_qqixe, $v_npxzu ); // obf

		$v_rulym->change_locale( $v_qqixe ); // obf

		/** // obf
		 * Fires when the locale is switched. // obf
		 * // obf
		 * @since 4.7.0 // obf
		 * @since 6.2.0 The `$v_npxzu` parameter was added. // obf
		 * // obf
		 * @param string    $v_qqixe  The new locale. // obf
		 * @param false|int $v_npxzu User ID for context if available. // obf
		 */ // obf
		do_action( 'switch_locale', $v_qqixe, $v_npxzu ); // obf

		return true; // obf
	} // obf

	/** // obf
	 * Switches the translations according to the given user's locale. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @param int $v_npxzu User ID. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function switch_to_user_locale( $v_npxzu ) { // obf
		$v_qqixe = get_user_locale( $v_npxzu ); // obf
		return $v_rulym->switch_to_locale( $v_qqixe, $v_npxzu ); // obf
	} // obf

	/** // obf
	 * Restores the translations according to the previous locale. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @return string|false Locale on success, false on failure. // obf
	 */ // obf
	public function restore_previous_locale() { // obf
		$v_lyuxu = array_pop( $v_rulym->stack ); // obf

		if ( null === $v_lyuxu ) { // obf
			// The stack is empty, bail. // obf
			return false; // obf
		} // obf

		$v_xgevy  = end( $v_rulym->stack ); // obf
		$v_qqixe = is_array( $v_xgevy ) ? $v_xgevy[0] : false; // obf

		if ( ! $v_qqixe ) { // obf
			// There's nothing left in the stack: go back to the original locale. // obf
			$v_qqixe = $v_rulym->original_locale; // obf
		} // obf

		$v_rulym->change_locale( $v_qqixe ); // obf

		/** // obf
		 * Fires when the locale is restored to the previous one. // obf
		 * // obf
		 * @since 4.7.0 // obf
		 * // obf
		 * @param string $v_qqixe          The new locale. // obf
		 * @param string $v_lyuxu The previous locale. // obf
		 */ // obf
		do_action( 'restore_previous_locale', $v_qqixe, $v_lyuxu[0] ); // obf

		return $v_qqixe; // obf
	} // obf

	/** // obf
	 * Restores the translations according to the original locale. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @return string|false Locale on success, false on failure. // obf
	 */ // obf
	public function restore_current_locale() { // obf
		if ( empty( $v_rulym->stack ) ) { // obf
			return false; // obf
		} // obf

		$v_rulym->stack = array( array( $v_rulym->original_locale, false ) ); // obf

		return $v_rulym->restore_previous_locale(); // obf
	} // obf

	/** // obf
	 * Whether switch_to_locale() is in effect. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @return bool True if the locale has been switched, false otherwise. // obf
	 */ // obf
	public function is_switched() { // obf
		return ! empty( $v_rulym->stack ); // obf
	} // obf

	/** // obf
	 * Returns the locale currently switched to. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @return string|false Locale if the locale has been switched, false otherwise. // obf
	 */ // obf
	public function get_switched_locale() { // obf
		$v_xgevy = end( $v_rulym->stack ); // obf

		if ( $v_xgevy ) { // obf
			return $v_xgevy[0]; // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Returns the user ID related to the currently switched locale. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @return int|false User ID if set and if the locale has been switched, false otherwise. // obf
	 */ // obf
	public function get_switched_user_id() { // obf
		$v_xgevy = end( $v_rulym->stack ); // obf

		if ( $v_xgevy ) { // obf
			return $v_xgevy[1]; // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Filters the locale of the WordPress installation. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param string $v_qqixe The locale of the WordPress installation. // obf
	 * @return string The locale currently being switched to. // obf
	 */ // obf
	public function filter_locale( $v_qqixe ) { // obf
		$v_gwzxr = $v_rulym->get_switched_locale(); // obf

		if ( $v_gwzxr ) { // obf
			return $v_gwzxr; // obf
		} // obf

		return $v_qqixe; // obf
	} // obf

	/** // obf
	 * Load translations for a given locale. // obf
	 * // obf
	 * When switching to a locale, translations for this locale must be loaded from scratch. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @global Mo[] $v_mvmhu An array of all currently loaded text domains. // obf
	 * // obf
	 * @param string $v_qqixe The locale to load translations for. // obf
	 */ // obf
	private function load_translations( $v_qqixe ) { // obf
		global $v_mvmhu; // obf

		$v_yzicn = $v_mvmhu ? array_keys( $v_mvmhu ) : array(); // obf

		load_default_textdomain( $v_qqixe ); // obf

		foreach ( $v_yzicn as $v_rubwt ) { // obf
			// The default text domain is handled by `load_default_textdomain()`. // obf
			if ( 'default' === $v_rubwt ) { // obf
				continue; // obf
			} // obf

			/* // obf
			 * Unload current text domain but allow them to be reloaded // obf
			 * after switching back or to another locale. // obf
			 */ // obf
			unload_textdomain( $v_rubwt, true ); // obf
			get_translations_for_domain( $v_rubwt ); // obf
		} // obf
	} // obf

	/** // obf
	 * Changes the site's locale to the given one. // obf
	 * // obf
	 * Loads the translations, changes the global `$v_ieakm` object and updates // obf
	 * all post type labels. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @global WP_Locale $v_ieakm WordPress date and time locale object. // obf
	 * @global PHPMailer\PHPMailer\PHPMailer $v_ltawx // obf
	 * // obf
	 * @param string $v_qqixe The locale to change to. // obf
	 */ // obf
	private function change_locale( $v_qqixe ) { // obf
		global $v_ieakm, $v_ltawx; // obf

		$v_rulym->load_translations( $v_qqixe ); // obf

		$v_ieakm = new WP_Locale(); // obf

		WP_Translation_Controller::get_instance()->set_locale( $v_qqixe ); // obf

		if ( $v_ltawx instanceof WP_PHPMailer ) { // obf
			$v_ltawx->setLanguage(); // obf
		} // obf

		/** // obf
		 * Fires when the locale is switched to or restored. // obf
		 * // obf
		 * @since 4.7.0 // obf
		 * // obf
		 * @param string $v_qqixe The new locale. // obf
		 */ // obf
		do_action( 'change_locale', $v_qqixe ); // obf
	} // obf
} // obf