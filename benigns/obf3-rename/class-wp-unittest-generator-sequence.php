

<?php // obf

class WP_UnitTest_Generator_Sequence { // obf
	public static $v_kmxid = -1; // obf
	public $v_xvvwv; // obf
	public $v_sxbil; // obf

	public function __construct( $v_sxbil = '%s', $v_tsrqq = null ) { // obf
		if ( $v_tsrqq ) { // obf
			$v_jlnnx->next = $v_tsrqq; // obf
		} else { // obf
			++self::$v_kmxid; // obf
			$v_jlnnx->next = self::$v_kmxid; // obf
		} // obf
		$v_jlnnx->template_string = $v_sxbil; // obf
	} // obf

	public function next() { // obf
		$v_towgu = sprintf( $v_jlnnx->template_string, $v_jlnnx->next ); // obf
		++$v_jlnnx->next; // obf
		return $v_towgu; // obf
	} // obf

	/** // obf
	 * Get the incrementor. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @return int // obf
	 */ // obf
	public function get_incr() { // obf
		return self::$v_kmxid; // obf
	} // obf

	/** // obf
	 * Get the template string. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public function get_template_string() { // obf
		return $v_jlnnx->template_string; // obf
	} // obf
} // obf