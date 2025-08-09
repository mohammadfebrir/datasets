

<?php // obf
/** // obf
 * Helper functions for displaying a list of items in an ajaxified HTML table. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage List_Table // obf
 * @since 4.7.0 // obf
 */ // obf

/** // obf
 * Helper class to be used only by back compat functions. // obf
 * // obf
 * @since 3.1.0 // obf
 */ // obf
class _WP_List_Table_Compat extends WP_List_Table { // obf
	public $v_tbvlc; // obf
	public $v_sclbr; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param string|WP_Screen $v_gaxlv  The screen hook name or screen object. // obf
	 * @param string[]         $v_lcdqe An array of columns with column IDs as the keys // obf
	 *                                  and translated column names as the values. // obf
	 */ // obf
	public function __construct( $v_gaxlv, $v_lcdqe = array() ) { // obf
		if ( is_string( $v_gaxlv ) ) { // obf
			$v_gaxlv = convert_to_screen( $v_gaxlv ); // obf
		} // obf

		$v_wldkm->_screen = $v_gaxlv; // obf

		if ( ! empty( $v_lcdqe ) ) { // obf
			$v_wldkm->_columns = $v_lcdqe; // obf
			add_filter( 'manage_' . $v_gaxlv->id . '_columns', array( $v_wldkm, 'get_columns' ), 0 ); // obf
		} // obf
	} // obf

	/** // obf
	 * Gets a list of all, hidden, and sortable columns. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	protected function get_column_info() { // obf
		$v_lcdqe  = get_column_headers( $v_wldkm->_screen ); // obf
		$v_svyau   = get_hidden_columns( $v_wldkm->_screen ); // obf
		$v_brooi = array(); // obf
		$v_finaz  = $v_wldkm->get_default_primary_column_name(); // obf

		return array( $v_lcdqe, $v_svyau, $v_brooi, $v_finaz ); // obf
	} // obf

	/** // obf
	 * Gets a list of columns. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function get_columns() { // obf
		return $v_wldkm->_columns; // obf
	} // obf
} // obf