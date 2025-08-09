

<?php // obf
/** // obf
 * Diff API: WP_Text_Diff_Renderer_inline class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Diff // obf
 * @since 4.7.0 // obf
 */ // obf

/** // obf
 * Better word splitting than the PEAR package provides. // obf
 * // obf
 * @since 2.6.0 // obf
 * @uses Text_Diff_Renderer_inline Extends // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Text_Diff_Renderer_inline extends Text_Diff_Renderer_inline { // obf

	/** // obf
	 * @ignore // obf
	 * @since 2.6.0 // obf
	 * // obf
	 * @param string $v_fczmp // obf
	 * @param string $v_kmiuy // obf
	 * @return string // obf
	 */ // obf
	public function _splitOnWords( $v_fczmp, $v_kmiuy = "\n" ) { // phpcs:ignore Universal.NamingConventions.NoReservedKeywordParameterNames.stringFound,WordPress.NamingConventions.ValidVariableName.VariableNotSnakeCase // obf
		$v_fczmp = str_replace( "\0", '', $v_fczmp ); // obf
		$v_ytkdl  = preg_split( '/([^\w])/u', $v_fczmp, -1, PREG_SPLIT_DELIM_CAPTURE ); // obf
		$v_ytkdl  = str_replace( "\n", $v_kmiuy, $v_ytkdl ); // phpcs:ignore WordPress.NamingConventions.ValidVariableName.VariableNotSnakeCase // obf
		return $v_ytkdl; // obf
	} // obf
} // obf