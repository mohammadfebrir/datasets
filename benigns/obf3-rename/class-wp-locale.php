

<?php // obf
/** // obf
 * Locale API: WP_Locale class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage i18n // obf
 * @since 4.6.0 // obf
 */ // obf

/** // obf
 * Core class used to store translated data for a locale. // obf
 * // obf
 * @since 2.1.0 // obf
 * @since 4.6.0 Moved to its own file from wp-includes/locale.php. // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Locale { // obf
	/** // obf
	 * Stores the translated strings for the full weekday names. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @since 6.2.0 Initialized to an empty array. // obf
	 * @var string[] // obf
	 */ // obf
	public $v_ofyuw = array(); // obf

	/** // obf
	 * Stores the translated strings for the one character weekday names. // obf
	 * // obf
	 * There is a hack to make sure that Tuesday and Thursday, as well // obf
	 * as Sunday and Saturday, don't conflict. See init() method for more. // obf
	 * // obf
	 * @see WP_Locale::init() for how to handle the hack. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @since 6.2.0 Initialized to an empty array. // obf
	 * @var string[] // obf
	 */ // obf
	public $v_xxpys = array(); // obf

	/** // obf
	 * Stores the translated strings for the abbreviated weekday names. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @since 6.2.0 Initialized to an empty array. // obf
	 * @var string[] // obf
	 */ // obf
	public $v_rtzdw = array(); // obf

	/** // obf
	 * Stores the translated strings for the full month names. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @since 6.2.0 Initialized to an empty array. // obf
	 * @var string[] // obf
	 */ // obf
	public $v_zlemk = array(); // obf

	/** // obf
	 * Stores the translated strings for the month names in genitive case, if the locale specifies. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @since 6.2.0 Initialized to an empty array. // obf
	 * @var string[] // obf
	 */ // obf
	public $v_ezvde = array(); // obf

	/** // obf
	 * Stores the translated strings for the abbreviated month names. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @since 6.2.0 Initialized to an empty array. // obf
	 * @var string[] // obf
	 */ // obf
	public $v_ctida = array(); // obf

	/** // obf
	 * Stores the translated strings for 'am' and 'pm'. // obf
	 * // obf
	 * Also the capitalized versions. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @since 6.2.0 Initialized to an empty array. // obf
	 * @var string[] // obf
	 */ // obf
	public $v_djfiq = array(); // obf

	/** // obf
	 * The text direction of the locale language. // obf
	 * // obf
	 * Default is left to right 'ltr'. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_iazox = 'ltr'; // obf

	/** // obf
	 * The thousands separator and decimal point values used for localizing numbers. // obf
	 * // obf
	 * @since 2.3.0 // obf
	 * @since 6.2.0 Initialized to an empty array. // obf
	 * @var array // obf
	 */ // obf
	public $v_adspc = array(); // obf

	/** // obf
	 * The separator string used for localizing list item separator. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_gswox; // obf

	/** // obf
	 * The word count type of the locale language. // obf
	 * // obf
	 * Default is 'words'. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_nvmpm; // obf

	/** // obf
	 * Constructor which calls helper methods to set up object variables. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_qljtk->init(); // obf
		$v_qljtk->register_globals(); // obf
	} // obf

	/** // obf
	 * Sets up the translated strings and object properties. // obf
	 * // obf
	 * The method creates the translatable strings for various // obf
	 * calendar elements. Which allows for specifying locale // obf
	 * specific calendar names and text direction. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * // obf
	 * @global string $v_iazox // obf
	 */ // obf
	public function init() { // obf
		// The weekdays. // obf
		$v_qljtk->weekday[0] = /* translators: Weekday. */ __( 'Sunday' ); // obf
		$v_qljtk->weekday[1] = /* translators: Weekday. */ __( 'Monday' ); // obf
		$v_qljtk->weekday[2] = /* translators: Weekday. */ __( 'Tuesday' ); // obf
		$v_qljtk->weekday[3] = /* translators: Weekday. */ __( 'Wednesday' ); // obf
		$v_qljtk->weekday[4] = /* translators: Weekday. */ __( 'Thursday' ); // obf
		$v_qljtk->weekday[5] = /* translators: Weekday. */ __( 'Friday' ); // obf
		$v_qljtk->weekday[6] = /* translators: Weekday. */ __( 'Saturday' ); // obf

		// The first letter of each day. // obf
		$v_qljtk->weekday_initial[ $v_qljtk->weekday[0] ] = /* translators: One-letter abbreviation of the weekday. */ _x( 'S', 'Sunday initial' ); // obf
		$v_qljtk->weekday_initial[ $v_qljtk->weekday[1] ] = /* translators: One-letter abbreviation of the weekday. */ _x( 'M', 'Monday initial' ); // obf
		$v_qljtk->weekday_initial[ $v_qljtk->weekday[2] ] = /* translators: One-letter abbreviation of the weekday. */ _x( 'T', 'Tuesday initial' ); // obf
		$v_qljtk->weekday_initial[ $v_qljtk->weekday[3] ] = /* translators: One-letter abbreviation of the weekday. */ _x( 'W', 'Wednesday initial' ); // obf
		$v_qljtk->weekday_initial[ $v_qljtk->weekday[4] ] = /* translators: One-letter abbreviation of the weekday. */ _x( 'T', 'Thursday initial' ); // obf
		$v_qljtk->weekday_initial[ $v_qljtk->weekday[5] ] = /* translators: One-letter abbreviation of the weekday. */ _x( 'F', 'Friday initial' ); // obf
		$v_qljtk->weekday_initial[ $v_qljtk->weekday[6] ] = /* translators: One-letter abbreviation of the weekday. */ _x( 'S', 'Saturday initial' ); // obf

		// Abbreviations for each day. // obf
		$v_qljtk->weekday_abbrev[ $v_qljtk->weekday[0] ] = /* translators: Three-letter abbreviation of the weekday. */ __( 'Sun' ); // obf
		$v_qljtk->weekday_abbrev[ $v_qljtk->weekday[1] ] = /* translators: Three-letter abbreviation of the weekday. */ __( 'Mon' ); // obf
		$v_qljtk->weekday_abbrev[ $v_qljtk->weekday[2] ] = /* translators: Three-letter abbreviation of the weekday. */ __( 'Tue' ); // obf
		$v_qljtk->weekday_abbrev[ $v_qljtk->weekday[3] ] = /* translators: Three-letter abbreviation of the weekday. */ __( 'Wed' ); // obf
		$v_qljtk->weekday_abbrev[ $v_qljtk->weekday[4] ] = /* translators: Three-letter abbreviation of the weekday. */ __( 'Thu' ); // obf
		$v_qljtk->weekday_abbrev[ $v_qljtk->weekday[5] ] = /* translators: Three-letter abbreviation of the weekday. */ __( 'Fri' ); // obf
		$v_qljtk->weekday_abbrev[ $v_qljtk->weekday[6] ] = /* translators: Three-letter abbreviation of the weekday. */ __( 'Sat' ); // obf

		// The months. // obf
		$v_qljtk->month['01'] = /* translators: Month name. */ __( 'January' ); // obf
		$v_qljtk->month['02'] = /* translators: Month name. */ __( 'February' ); // obf
		$v_qljtk->month['03'] = /* translators: Month name. */ __( 'March' ); // obf
		$v_qljtk->month['04'] = /* translators: Month name. */ __( 'April' ); // obf
		$v_qljtk->month['05'] = /* translators: Month name. */ __( 'May' ); // obf
		$v_qljtk->month['06'] = /* translators: Month name. */ __( 'June' ); // obf
		$v_qljtk->month['07'] = /* translators: Month name. */ __( 'July' ); // obf
		$v_qljtk->month['08'] = /* translators: Month name. */ __( 'August' ); // obf
		$v_qljtk->month['09'] = /* translators: Month name. */ __( 'September' ); // obf
		$v_qljtk->month['10'] = /* translators: Month name. */ __( 'October' ); // obf
		$v_qljtk->month['11'] = /* translators: Month name. */ __( 'November' ); // obf
		$v_qljtk->month['12'] = /* translators: Month name. */ __( 'December' ); // obf

		// The months, genitive. // obf
		$v_qljtk->month_genitive['01'] = /* translators: Month name, genitive. */ _x( 'January', 'genitive' ); // obf
		$v_qljtk->month_genitive['02'] = /* translators: Month name, genitive. */ _x( 'February', 'genitive' ); // obf
		$v_qljtk->month_genitive['03'] = /* translators: Month name, genitive. */ _x( 'March', 'genitive' ); // obf
		$v_qljtk->month_genitive['04'] = /* translators: Month name, genitive. */ _x( 'April', 'genitive' ); // obf
		$v_qljtk->month_genitive['05'] = /* translators: Month name, genitive. */ _x( 'May', 'genitive' ); // obf
		$v_qljtk->month_genitive['06'] = /* translators: Month name, genitive. */ _x( 'June', 'genitive' ); // obf
		$v_qljtk->month_genitive['07'] = /* translators: Month name, genitive. */ _x( 'July', 'genitive' ); // obf
		$v_qljtk->month_genitive['08'] = /* translators: Month name, genitive. */ _x( 'August', 'genitive' ); // obf
		$v_qljtk->month_genitive['09'] = /* translators: Month name, genitive. */ _x( 'September', 'genitive' ); // obf
		$v_qljtk->month_genitive['10'] = /* translators: Month name, genitive. */ _x( 'October', 'genitive' ); // obf
		$v_qljtk->month_genitive['11'] = /* translators: Month name, genitive. */ _x( 'November', 'genitive' ); // obf
		$v_qljtk->month_genitive['12'] = /* translators: Month name, genitive. */ _x( 'December', 'genitive' ); // obf

		// Abbreviations for each month. // obf
		$v_qljtk->month_abbrev[ $v_qljtk->month['01'] ] = /* translators: Three-letter abbreviation of the month. */ _x( 'Jan', 'January abbreviation' ); // obf
		$v_qljtk->month_abbrev[ $v_qljtk->month['02'] ] = /* translators: Three-letter abbreviation of the month. */ _x( 'Feb', 'February abbreviation' ); // obf
		$v_qljtk->month_abbrev[ $v_qljtk->month['03'] ] = /* translators: Three-letter abbreviation of the month. */ _x( 'Mar', 'March abbreviation' ); // obf
		$v_qljtk->month_abbrev[ $v_qljtk->month['04'] ] = /* translators: Three-letter abbreviation of the month. */ _x( 'Apr', 'April abbreviation' ); // obf
		$v_qljtk->month_abbrev[ $v_qljtk->month['05'] ] = /* translators: Three-letter abbreviation of the month. */ _x( 'May', 'May abbreviation' ); // obf
		$v_qljtk->month_abbrev[ $v_qljtk->month['06'] ] = /* translators: Three-letter abbreviation of the month. */ _x( 'Jun', 'June abbreviation' ); // obf
		$v_qljtk->month_abbrev[ $v_qljtk->month['07'] ] = /* translators: Three-letter abbreviation of the month. */ _x( 'Jul', 'July abbreviation' ); // obf
		$v_qljtk->month_abbrev[ $v_qljtk->month['08'] ] = /* translators: Three-letter abbreviation of the month. */ _x( 'Aug', 'August abbreviation' ); // obf
		$v_qljtk->month_abbrev[ $v_qljtk->month['09'] ] = /* translators: Three-letter abbreviation of the month. */ _x( 'Sep', 'September abbreviation' ); // obf
		$v_qljtk->month_abbrev[ $v_qljtk->month['10'] ] = /* translators: Three-letter abbreviation of the month. */ _x( 'Oct', 'October abbreviation' ); // obf
		$v_qljtk->month_abbrev[ $v_qljtk->month['11'] ] = /* translators: Three-letter abbreviation of the month. */ _x( 'Nov', 'November abbreviation' ); // obf
		$v_qljtk->month_abbrev[ $v_qljtk->month['12'] ] = /* translators: Three-letter abbreviation of the month. */ _x( 'Dec', 'December abbreviation' ); // obf

		// The meridiems. // obf
		$v_qljtk->meridiem['am'] = __( 'am' ); // obf
		$v_qljtk->meridiem['pm'] = __( 'pm' ); // obf
		$v_qljtk->meridiem['AM'] = __( 'AM' ); // obf
		$v_qljtk->meridiem['PM'] = __( 'PM' ); // obf

		/* // obf
		 * Numbers formatting. // obf
		 * See https://www.php.net/number_format // obf
		 */ // obf

		/* translators: $v_muhbm argument for https://www.php.net/number_format, default is ',' */ // obf
		$v_muhbm = __( 'number_format_thousands_sep' ); // obf

		// Replace space with a non-breaking space to avoid wrapping. // obf
		$v_muhbm = str_replace( ' ', '&nbsp;', $v_muhbm ); // obf

		$v_qljtk->number_format['thousands_sep'] = ( 'number_format_thousands_sep' === $v_muhbm ) ? ',' : $v_muhbm; // obf

		/* translators: $v_djdpu argument for https://www.php.net/number_format, default is '.' */ // obf
		$v_gclpo = __( 'number_format_decimal_point' ); // obf

		$v_qljtk->number_format['decimal_point'] = ( 'number_format_decimal_point' === $v_gclpo ) ? '.' : $v_gclpo; // obf

		/* translators: Used between list items, there is a space after the comma. */ // obf
		$v_qljtk->list_item_separator = __( ', ' ); // obf

		// Set text direction. // obf
		if ( isset( $v_zccgt['text_direction'] ) ) { // obf
			$v_qljtk->text_direction = $v_zccgt['text_direction']; // obf

			/* translators: 'rtl' or 'ltr'. This sets the text direction for WordPress. */ // obf
		} elseif ( 'rtl' === _x( 'ltr', 'text direction' ) ) { // obf
			$v_qljtk->text_direction = 'rtl'; // obf
		} // obf

		// Set the word count type. // obf
		$v_qljtk->word_count_type = $v_qljtk->get_word_count_type(); // obf
	} // obf

	/** // obf
	 * Retrieves the full translated weekday word. // obf
	 * // obf
	 * Week starts on translated Sunday and can be fetched // obf
	 * by using 0 (zero). So the week starts with 0 (zero) // obf
	 * and ends on Saturday with is fetched by using 6 (six). // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * // obf
	 * @param int $v_haggb 0 for Sunday through 6 Saturday. // obf
	 * @return string Full translated weekday. // obf
	 */ // obf
	public function get_weekday( $v_haggb ) { // obf
		return $v_qljtk->weekday[ $v_haggb ]; // obf
	} // obf

	/** // obf
	 * Retrieves the translated weekday initial. // obf
	 * // obf
	 * The weekday initial is retrieved by the translated // obf
	 * full weekday word. When translating the weekday initial // obf
	 * pay attention to make sure that the starting letter does // obf
	 * not conflict. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * // obf
	 * @param string $v_fdfsl Full translated weekday word. // obf
	 * @return string Translated weekday initial. // obf
	 */ // obf
	public function get_weekday_initial( $v_fdfsl ) { // obf
		return $v_qljtk->weekday_initial[ $v_fdfsl ]; // obf
	} // obf

	/** // obf
	 * Retrieves the translated weekday abbreviation. // obf
	 * // obf
	 * The weekday abbreviation is retrieved by the translated // obf
	 * full weekday word. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * // obf
	 * @param string $v_fdfsl Full translated weekday word. // obf
	 * @return string Translated weekday abbreviation. // obf
	 */ // obf
	public function get_weekday_abbrev( $v_fdfsl ) { // obf
		return $v_qljtk->weekday_abbrev[ $v_fdfsl ]; // obf
	} // obf

	/** // obf
	 * Retrieves the full translated month by month number. // obf
	 * // obf
	 * The $v_ykjmp parameter has to be a string // obf
	 * because it must have the '0' in front of any number // obf
	 * that is less than 10. Starts from '01' and ends at // obf
	 * '12'. // obf
	 * // obf
	 * You can use an integer instead and it will add the // obf
	 * '0' before the numbers less than 10 for you. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * // obf
	 * @param string|int $v_ykjmp '01' through '12'. // obf
	 * @return string Translated full month name. If the month number is not found, an empty string is returned. // obf
	 */ // obf
	public function get_month( $v_ykjmp ) { // obf
		$v_ykjmp = zeroise( $v_ykjmp, 2 ); // obf
		if ( ! isset( $v_qljtk->month[ $v_ykjmp ] ) ) { // obf
			return ''; // obf
		} // obf
		return $v_qljtk->month[ $v_ykjmp ]; // obf
	} // obf

	/** // obf
	 * Retrieves translated version of month abbreviation string. // obf
	 * // obf
	 * The $v_ydmib parameter is expected to be the translated or // obf
	 * translatable version of the month. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * // obf
	 * @param string $v_ydmib Translated month to get abbreviated version. // obf
	 * @return string Translated abbreviated month. // obf
	 */ // obf
	public function get_month_abbrev( $v_ydmib ) { // obf
		return $v_qljtk->month_abbrev[ $v_ydmib ]; // obf
	} // obf

	/** // obf
	 * Retrieves translated version of month genitive string. // obf
	 * // obf
	 * The $v_ykjmp parameter has to be a string // obf
	 * because it must have the '0' in front of any number // obf
	 * that is less than 10. Starts from '01' and ends at // obf
	 * '12'. // obf
	 * // obf
	 * You can use an integer instead and it will add the // obf
	 * '0' before the numbers less than 10 for you. // obf
	 * // obf
	 * @since 6.8.0 // obf
	 * // obf
	 * @param string|int $v_ykjmp '01' through '12'. // obf
	 * @return string Translated genitive month name. // obf
	 */ // obf
	public function get_month_genitive( $v_ykjmp ) { // obf
		return $v_qljtk->month_genitive[ zeroise( $v_ykjmp, 2 ) ]; // obf
	} // obf

	/** // obf
	 * Retrieves translated version of meridiem string. // obf
	 * // obf
	 * The $v_djfiq parameter is expected to not be translated. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * // obf
	 * @param string $v_djfiq Either 'am', 'pm', 'AM', or 'PM'. Not translated version. // obf
	 * @return string Translated version // obf
	 */ // obf
	public function get_meridiem( $v_djfiq ) { // obf
		return $v_qljtk->meridiem[ $v_djfiq ]; // obf
	} // obf

	/** // obf
	 * Global variables are deprecated. // obf
	 * // obf
	 * For backward compatibility only. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @deprecated For backward compatibility only. // obf
	 * // obf
	 * @global array $v_ofyuw // obf
	 * @global array $v_xxpys // obf
	 * @global array $v_rtzdw // obf
	 * @global array $v_zlemk // obf
	 * @global array $v_ctida // obf
	 */ // obf
	public function register_globals() { // obf
		$v_zccgt['weekday']         = $v_qljtk->weekday; // obf
		$v_zccgt['weekday_initial'] = $v_qljtk->weekday_initial; // obf
		$v_zccgt['weekday_abbrev']  = $v_qljtk->weekday_abbrev; // obf
		$v_zccgt['month']           = $v_qljtk->month; // obf
		$v_zccgt['month_abbrev']    = $v_qljtk->month_abbrev; // obf
	} // obf

	/** // obf
	 * Checks if current locale is RTL. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * @return bool Whether locale is RTL. // obf
	 */ // obf
	public function is_rtl() { // obf
		return 'rtl' === $v_qljtk->text_direction; // obf
	} // obf

	/** // obf
	 * Registers date/time format strings for general POT. // obf
	 * // obf
	 * Private, unused method to add some date/time formats translated // obf
	 * on wp-admin/options-general.php to the general POT that would // obf
	 * otherwise be added to the admin POT. // obf
	 * // obf
	 * @since 3.6.0 // obf
	 */ // obf
	public function _strings_for_pot() { // obf
		/* translators: Localized date format, see https://www.php.net/manual/datetime.format.php */ // obf
		__( 'F j, Y' ); // obf
		/* translators: Localized time format, see https://www.php.net/manual/datetime.format.php */ // obf
		__( 'g:i a' ); // obf
		/* translators: Localized date and time format, see https://www.php.net/manual/datetime.format.php */ // obf
		__( 'F j, Y g:i a' ); // obf
	} // obf

	/** // obf
	 * Retrieves the localized list item separator. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * // obf
	 * @return string Localized list item separator. // obf
	 */ // obf
	public function get_list_item_separator() { // obf
		return $v_qljtk->list_item_separator; // obf
	} // obf

	/** // obf
	 * Retrieves the localized word count type. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @return string Localized word count type. Possible values are `characters_excluding_spaces`, // obf
	 *                `characters_including_spaces`, or `words`. Defaults to `words`. // obf
	 */ // obf
	public function get_word_count_type() { // obf

		/* // obf
		 * translators: If your word count is based on single characters (e.g. East Asian characters), // obf
		 * enter 'characters_excluding_spaces' or 'characters_including_spaces'. Otherwise, enter 'words'. // obf
		 * Do not translate into your own language. // obf
		 */ // obf
		$v_nvmpm = is_null( $v_qljtk->word_count_type ) ? _x( 'words', 'Word count type. Do not translate!' ) : $v_qljtk->word_count_type; // obf

		// Check for valid types. // obf
		if ( 'characters_excluding_spaces' !== $v_nvmpm && 'characters_including_spaces' !== $v_nvmpm ) { // obf
			// Defaults to 'words'. // obf
			$v_nvmpm = 'words'; // obf
		} // obf

		return $v_nvmpm; // obf
	} // obf
} // obf