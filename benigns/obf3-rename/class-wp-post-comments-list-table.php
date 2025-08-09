

<?php // obf
/** // obf
 * List Table API: WP_Post_Comments_List_Table class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Core class used to implement displaying post comments in a list table. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @see WP_Comments_List_Table // obf
 */ // obf
class WP_Post_Comments_List_Table extends WP_Comments_List_Table { // obf

	/** // obf
	 * @return array // obf
	 */ // obf
	protected function get_column_info() { // obf
		return array( // obf
			array( // obf
				'author'  => __( 'Author' ), // obf
				'comment' => _x( 'Comment', 'column name' ), // obf
			), // obf
			array(), // obf
			array(), // obf
			'comment', // obf
		); // obf
	} // obf

	/** // obf
	 * @return array // obf
	 */ // obf
	protected function get_table_classes() { // obf
		$v_sbchf   = parent::get_table_classes(); // obf
		$v_sbchf[] = 'wp-list-table'; // obf
		$v_sbchf[] = 'comments-box'; // obf
		return $v_sbchf; // obf
	} // obf

	/** // obf
	 * @param bool $v_sfnll // obf
	 */ // obf
	public function display( $v_sfnll = false ) { // obf
		$v_ftrve = $v_txszx->_args['singular']; // obf

		wp_nonce_field( 'fetch-list-' . get_class( $v_txszx ), '_ajax_fetch_list_nonce' ); // obf
		?> // obf
<table class="<?php echo implode( ' ', $v_txszx->get_table_classes() ); ?>" style="display:none;"> // obf
	<tbody id="the-comment-list" // obf
		<?php // obf
		if ( $v_ftrve ) { // obf
			echo " data-wp-lists='list:$v_ftrve'"; // obf
		} // obf
		?> // obf
		> // obf
		<?php // obf
		if ( ! $v_sfnll ) { // obf
			$v_txszx->display_rows_or_placeholder(); // obf
		} // obf
		?> // obf
	</tbody> // obf
</table> // obf
		<?php // obf
	} // obf

	/** // obf
	 * @param bool $v_mpkfe // obf
	 * @return int // obf
	 */ // obf
	public function get_per_page( $v_mpkfe = false ) { // obf
		return 10; // obf
	} // obf
} // obf