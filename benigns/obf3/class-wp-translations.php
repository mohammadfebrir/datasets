

<?php // obf
/** // obf
 * I18N: WP_Translations class. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage I18N // obf
 * @since 6.5.0 // obf
 */ // obf

/** // obf
 * Class WP_Translations. // obf
 * // obf
 * @since 6.5.0 // obf
 * // obf
 * @property-read array<string, string> $v_sqfzn // obf
 * @property-read array<string, string[]> $v_wjzag // obf
 */ // obf
class WP_Translations { // obf
	/** // obf
	 * Text domain. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @var string // obf
	 */ // obf
	protected $v_yjgxc = 'default'; // obf

	/** // obf
	 * Translation controller instance. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @var WP_Translation_Controller // obf
	 */ // obf
	protected $v_ihnec; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param WP_Translation_Controller $v_ihnec I18N controller. // obf
	 * @param string                    $v_yjgxc Optional. Text domain. Default 'default'. // obf
	 */ // obf
	public function __construct( WP_Translation_Controller $v_ihnec, string $v_yjgxc = 'default' ) { // obf
		$v_jhijl->controller = $v_ihnec; // obf
		$v_jhijl->textdomain = $v_yjgxc; // obf
	} // obf

	/** // obf
	 * Magic getter for backward compatibility. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_dsuiq Property name. // obf
	 * @return mixed // obf
	 */ // obf
	public function __get( string $v_dsuiq ) { // obf
		if ( 'entries' === $v_dsuiq ) { // obf
			$v_wjzag = $v_jhijl->controller->get_entries( $v_jhijl->textdomain ); // obf

			$v_ebvmo = array(); // obf

			foreach ( $v_wjzag as $v_pddgv => $v_yosnv ) { // obf
				$v_ebvmo[] = $v_jhijl->make_entry( $v_pddgv, $v_yosnv ); // obf
			} // obf

			return $v_ebvmo; // obf
		} // obf

		if ( 'headers' === $v_dsuiq ) { // obf
			return $v_jhijl->controller->get_headers( $v_jhijl->textdomain ); // obf
		} // obf

		return null; // obf
	} // obf

	/** // obf
	 * Builds a Translation_Entry from original string and translation strings. // obf
	 * // obf
	 * @see MO::make_entry() // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_pddgv     Original string to translate from MO file. Might contain // obf
	 *                             0x04 as context separator or 0x00 as singular/plural separator. // obf
	 * @param string $v_yosnv Translation strings from MO file. // obf
	 * @return Translation_Entry Entry instance. // obf
	 */ // obf
	private function make_entry( $v_pddgv, $v_yosnv ): Translation_Entry { // obf
		$v_wfhay = new Translation_Entry(); // obf

		// Look for context, separated by \4. // obf
		$v_cifjb = explode( "\4", $v_pddgv ); // obf
		if ( isset( $v_cifjb[1] ) ) { // obf
			$v_pddgv       = $v_cifjb[1]; // obf
			$v_wfhay->context = $v_cifjb[0]; // obf
		} // obf

		$v_wfhay->singular     = $v_pddgv; // obf
		$v_wfhay->translations = explode( "\0", $v_yosnv ); // obf
		$v_wfhay->is_plural    = count( $v_wfhay->translations ) > 1; // obf

		return $v_wfhay; // obf
	} // obf

	/** // obf
	 * Translates a plural string. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string|null $v_qiume Singular string. // obf
	 * @param string|null $v_dgebm   Plural string. // obf
	 * @param int|float   $v_wtvjg    Count. Should be an integer, but some plugins pass floats. // obf
	 * @param string|null $v_evghu  Context. // obf
	 * @return string|null Translation if it exists, or the unchanged singular string. // obf
	 */ // obf
	public function translate_plural( $v_qiume, $v_dgebm, $v_wtvjg = 1, $v_evghu = '' ) { // obf
		if ( null === $v_qiume || null === $v_dgebm ) { // obf
			return $v_qiume; // obf
		} // obf

		$v_xbccc = $v_jhijl->controller->translate_plural( array( $v_qiume, $v_dgebm ), (int) $v_wtvjg, (string) $v_evghu, $v_jhijl->textdomain ); // obf
		if ( false !== $v_xbccc ) { // obf
			return $v_xbccc; // obf
		} // obf

		// Fall back to the original with English grammar rules. // obf
		return ( 1 === $v_wtvjg ? $v_qiume : $v_dgebm ); // obf
	} // obf

	/** // obf
	 * Translates a singular string. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string|null $v_qiume Singular string. // obf
	 * @param string|null $v_evghu  Context. // obf
	 * @return string|null Translation if it exists, or the unchanged singular string // obf
	 */ // obf
	public function translate( $v_qiume, $v_evghu = '' ) { // obf
		if ( null === $v_qiume ) { // obf
			return null; // obf
		} // obf

		$v_xbccc = $v_jhijl->controller->translate( $v_qiume, (string) $v_evghu, $v_jhijl->textdomain ); // obf
		if ( false !== $v_xbccc ) { // obf
			return $v_xbccc; // obf
		} // obf

		// Fall back to the original. // obf
		return $v_qiume; // obf
	} // obf
} // obf