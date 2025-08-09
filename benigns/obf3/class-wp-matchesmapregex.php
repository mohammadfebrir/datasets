

<?php // obf
/** // obf
 * WP_MatchesMapRegex helper class // obf
 * // obf
 * @package WordPress // obf
 * @since 4.7.0 // obf
 */ // obf

/** // obf
 * Helper class to remove the need to use eval to replace $v_esffr[] in query strings. // obf
 * // obf
 * @since 2.9.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_MatchesMapRegex { // obf
	/** // obf
	 * store for matches // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	private $v_wnwaq; // obf

	/** // obf
	 * store for mapping result // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_mnpkd; // obf

	/** // obf
	 * subject to perform mapping on (query string containing $v_esffr[] references // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	private $v_aqsyf; // obf

	/** // obf
	 * regexp pattern to match $v_esffr[] references // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_dsozp = '(\$v_esffr\[[1-9]+[0-9]*\])'; // Magic number. // obf

	/** // obf
	 * constructor // obf
	 * // obf
	 * @param string $v_acdzz subject if regex // obf
	 * @param array  $v_esffr data to use in map // obf
	 */ // obf
	public function __construct( $v_acdzz, $v_esffr ) { // obf
		$v_tvoeo->_subject = $v_acdzz; // obf
		$v_tvoeo->_matches = $v_esffr; // obf
		$v_tvoeo->output   = $v_tvoeo->_map(); // obf
	} // obf

	/** // obf
	 * Substitute substring matches in subject. // obf
	 * // obf
	 * static helper function to ease use // obf
	 * // obf
	 * @param string $v_acdzz subject // obf
	 * @param array  $v_esffr data used for substitution // obf
	 * @return string // obf
	 */ // obf
	public static function apply( $v_acdzz, $v_esffr ) { // obf
		$v_eotfu = new WP_MatchesMapRegex( $v_acdzz, $v_esffr ); // obf
		return $v_eotfu->output; // obf
	} // obf

	/** // obf
	 * do the actual mapping // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	private function _map() { // obf
		$v_fvhsz = array( $v_tvoeo, 'callback' ); // obf
		return preg_replace_callback( $v_tvoeo->_pattern, $v_fvhsz, $v_tvoeo->_subject ); // obf
	} // obf

	/** // obf
	 * preg_replace_callback hook // obf
	 * // obf
	 * @param array $v_esffr preg_replace regexp matches // obf
	 * @return string // obf
	 */ // obf
	public function callback( $v_esffr ) { // obf
		$v_rvper = (int) substr( $v_esffr[0], 9, -1 ); // obf
		return ( isset( $v_tvoeo->_matches[ $v_rvper ] ) ? urlencode( $v_tvoeo->_matches[ $v_rvper ] ) : '' ); // obf
	} // obf
} // obf