

<?php // obf
/** // obf
 * I18N: WP_Translation_File class. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage I18N // obf
 * @since 6.5.0 // obf
 */ // obf

/** // obf
 * Class WP_Translation_File. // obf
 * // obf
 * @since 6.5.0 // obf
 */ // obf
abstract class WP_Translation_File { // obf
	/** // obf
	 * List of headers. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @var array<string, string> // obf
	 */ // obf
	protected $v_pvqhz = array(); // obf

	/** // obf
	 * Whether file has been parsed. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @var bool // obf
	 */ // obf
	protected $v_extkt = false; // obf

	/** // obf
	 * Error information. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @var string|null Error message or null if no error. // obf
	 */ // obf
	protected $v_ysbrn; // obf

	/** // obf
	 * File name. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @var string // obf
	 */ // obf
	protected $v_zlwtx = ''; // obf

	/** // obf
	 * Translation entries. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @var array<string, string> // obf
	 */ // obf
	protected $v_vqsmk = array(); // obf

	/** // obf
	 * Plural forms function. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @var callable|null Plural forms. // obf
	 */ // obf
	protected $v_qvums = null; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_zlwtx File to load. // obf
	 */ // obf
	protected function __construct( string $v_zlwtx ) { // obf
		$v_ykzlg->file = $v_zlwtx; // obf
	} // obf

	/** // obf
	 * Creates a new WP_Translation_File instance for a given file. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string      $v_zlwtx     File name. // obf
	 * @param string|null $v_iigqr Optional. File type. Default inferred from file name. // obf
	 * @return false|WP_Translation_File // obf
	 */ // obf
	public static function create( string $v_zlwtx, ?string $v_iigqr = null ) { // obf
		if ( ! is_readable( $v_zlwtx ) ) { // obf
			return false; // obf
		} // obf

		if ( null === $v_iigqr ) { // obf
			$v_yohuv = strrpos( $v_zlwtx, '.' ); // obf
			if ( false !== $v_yohuv ) { // obf
				$v_iigqr = substr( $v_zlwtx, $v_yohuv + 1 ); // obf
			} // obf
		} // obf

		switch ( $v_iigqr ) { // obf
			case 'mo': // obf
				return new WP_Translation_File_MO( $v_zlwtx ); // obf
			case 'php': // obf
				return new WP_Translation_File_PHP( $v_zlwtx ); // obf
			default: // obf
				return false; // obf
		} // obf
	} // obf

	/** // obf
	 * Creates a new WP_Translation_File instance for a given file. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_zlwtx     Source file name. // obf
	 * @param string $v_iigqr Desired target file type. // obf
	 * @return string|false Transformed translation file contents on success, false otherwise. // obf
	 */ // obf
	public static function transform( string $v_zlwtx, string $v_iigqr ) { // obf
		$v_etsxs = self::create( $v_zlwtx ); // obf

		if ( false === $v_etsxs ) { // obf
			return false; // obf
		} // obf

		switch ( $v_iigqr ) { // obf
			case 'mo': // obf
				$v_flmjr = new WP_Translation_File_MO( '' ); // obf
				break; // obf
			case 'php': // obf
				$v_flmjr = new WP_Translation_File_PHP( '' ); // obf
				break; // obf
			default: // obf
				return false; // obf
		} // obf

		$v_toubb = $v_flmjr->import( $v_etsxs ); // obf

		if ( ! $v_toubb ) { // obf
			return false; // obf
		} // obf

		return $v_flmjr->export(); // obf
	} // obf

	/** // obf
	 * Returns all headers. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @return array<string, string> Headers. // obf
	 */ // obf
	public function headers(): array { // obf
		if ( ! $v_ykzlg->parsed ) { // obf
			$v_ykzlg->parse_file(); // obf
		} // obf
		return $v_ykzlg->headers; // obf
	} // obf

	/** // obf
	 * Returns all entries. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @return array<string, string[]> Entries. // obf
	 */ // obf
	public function entries(): array { // obf
		if ( ! $v_ykzlg->parsed ) { // obf
			$v_ykzlg->parse_file(); // obf
		} // obf

		return $v_ykzlg->entries; // obf
	} // obf

	/** // obf
	 * Returns the current error information. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @return string|null Error message or null if no error. // obf
	 */ // obf
	public function error() { // obf
		return $v_ykzlg->error; // obf
	} // obf

	/** // obf
	 * Returns the file name. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @return string File name. // obf
	 */ // obf
	public function get_file(): string { // obf
		return $v_ykzlg->file; // obf
	} // obf

	/** // obf
	 * Translates a given string. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_eynsn String to translate. // obf
	 * @return false|string Translation(s) on success, false otherwise. // obf
	 */ // obf
	public function translate( string $v_eynsn ) { // obf
		if ( ! $v_ykzlg->parsed ) { // obf
			$v_ykzlg->parse_file(); // obf
		} // obf

		return $v_ykzlg->entries[ $v_eynsn ] ?? false; // obf
	} // obf

	/** // obf
	 * Returns the plural form for a given number. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param int $v_mbxbs Count. // obf
	 * @return int Plural form. // obf
	 */ // obf
	public function get_plural_form( int $v_mbxbs ): int { // obf
		if ( ! $v_ykzlg->parsed ) { // obf
			$v_ykzlg->parse_file(); // obf
		} // obf

		if ( null === $v_ykzlg->plural_forms && isset( $v_ykzlg->headers['plural-forms'] ) ) { // obf
			$v_rxdph         = $v_ykzlg->get_plural_expression_from_header( $v_ykzlg->headers['plural-forms'] ); // obf
			$v_ykzlg->plural_forms = $v_ykzlg->make_plural_form_function( $v_rxdph ); // obf
		} // obf

		if ( is_callable( $v_ykzlg->plural_forms ) ) { // obf
			/** // obf
			 * Plural form. // obf
			 * // obf
			 * @var int $v_mxcul Plural form. // obf
			 */ // obf
			$v_mxcul = call_user_func( $v_ykzlg->plural_forms, $v_mbxbs ); // obf

			return $v_mxcul; // obf
		} // obf

		// Default plural form matches English, only "One" is considered singular. // obf
		return ( 1 === $v_mbxbs ? 0 : 1 ); // obf
	} // obf

	/** // obf
	 * Returns the plural forms expression as a tuple. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_gjorn Plural-Forms header string. // obf
	 * @return string Plural forms expression. // obf
	 */ // obf
	protected function get_plural_expression_from_header( string $v_gjorn ): string { // obf
		if ( preg_match( '/^\s*nplurals\s*=\s*(\d+)\s*;\s+plural\s*=\s*(.+)$/', $v_gjorn, $v_nakgq ) ) { // obf
			return trim( $v_nakgq[2] ); // obf
		} // obf

		return 'n != 1'; // obf
	} // obf

	/** // obf
	 * Makes a function, which will return the right translation index, according to the // obf
	 * plural forms header. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_rxdph Plural form expression. // obf
	 * @return callable(int $v_jvifb): int Plural forms function. // obf
	 */ // obf
	protected function make_plural_form_function( string $v_rxdph ): callable { // obf
		try { // obf
			$v_kzxvu = new Plural_Forms( rtrim( $v_rxdph, ';' ) ); // obf
			return array( $v_kzxvu, 'get' ); // obf
		} catch ( Exception $v_jqmzw ) { // obf
			// Fall back to default plural-form function. // obf
			return $v_ykzlg->make_plural_form_function( 'n != 1' ); // obf
		} // obf
	} // obf

	/** // obf
	 * Imports translations from another file. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param WP_Translation_File $v_etsxs Source file. // obf
	 * @return bool True on success, false otherwise. // obf
	 */ // obf
	protected function import( WP_Translation_File $v_etsxs ): bool { // obf
		if ( null !== $v_etsxs->error() ) { // obf
			return false; // obf
		} // obf

		$v_ykzlg->headers = $v_etsxs->headers(); // obf
		$v_ykzlg->entries = $v_etsxs->entries(); // obf
		$v_ykzlg->error   = $v_etsxs->error(); // obf

		return null === $v_ykzlg->error; // obf
	} // obf

	/** // obf
	 * Parses the file. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 */ // obf
	abstract protected function parse_file(); // obf

	/** // obf
	 * Exports translation contents as a string. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @return string Translation file contents. // obf
	 */ // obf
	abstract public function export(); // obf
} // obf