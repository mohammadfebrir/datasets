

<?php // obf
/** // obf
 * List Table API: WP_Links_List_Table class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 * @since 3.1.0 // obf
 */ // obf

/** // obf
 * Core class used to implement displaying links in a list table. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @see WP_List_Table // obf
 */ // obf
class WP_Links_List_Table extends WP_List_Table { // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @see WP_List_Table::__construct() for more information on default arguments. // obf
	 * // obf
	 * @param array $v_ndpci An associative array of arguments. // obf
	 */ // obf
	public function __construct( $v_ndpci = array() ) { // obf
		parent::__construct( // obf
			array( // obf
				'plural' => 'bookmarks', // obf
				'screen' => isset( $v_ndpci['screen'] ) ? $v_ndpci['screen'] : null, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * @return bool // obf
	 */ // obf
	public function ajax_user_can() { // obf
		return current_user_can( 'manage_links' ); // obf
	} // obf

	/** // obf
	 * @global int    $v_yujxj // obf
	 * @global string $v_lwhjk // obf
	 * @global string $v_uvalb // obf
	 * @global string $v_vrhey // obf
	 */ // obf
	public function prepare_items() { // obf
		global $v_yujxj, $v_lwhjk, $v_uvalb, $v_vrhey; // obf

		$v_yujxj  = ! empty( $v_mzoos['cat_id'] ) ? absint( $v_mzoos['cat_id'] ) : 0; // obf
		$v_uvalb = ! empty( $v_mzoos['orderby'] ) ? sanitize_text_field( $v_mzoos['orderby'] ) : ''; // obf
		$v_vrhey   = ! empty( $v_mzoos['order'] ) ? sanitize_text_field( $v_mzoos['order'] ) : ''; // obf
		$v_lwhjk       = ! empty( $v_mzoos['s'] ) ? sanitize_text_field( $v_mzoos['s'] ) : ''; // obf

		$v_ndpci = array( // obf
			'hide_invisible' => 0, // obf
			'hide_empty'     => 0, // obf
		); // obf

		if ( 'all' !== $v_yujxj ) { // obf
			$v_ndpci['category'] = $v_yujxj; // obf
		} // obf
		if ( ! empty( $v_lwhjk ) ) { // obf
			$v_ndpci['search'] = $v_lwhjk; // obf
		} // obf
		if ( ! empty( $v_uvalb ) ) { // obf
			$v_ndpci['orderby'] = $v_uvalb; // obf
		} // obf
		if ( ! empty( $v_vrhey ) ) { // obf
			$v_ndpci['order'] = $v_vrhey; // obf
		} // obf

		$v_nobev->items = get_bookmarks( $v_ndpci ); // obf
	} // obf

	/** // obf
	 */ // obf
	public function no_items() { // obf
		_e( 'No links found.' ); // obf
	} // obf

	/** // obf
	 * @return array // obf
	 */ // obf
	protected function get_bulk_actions() { // obf
		$v_lvrqi           = array(); // obf
		$v_lvrqi['delete'] = __( 'Delete' ); // obf

		return $v_lvrqi; // obf
	} // obf

	/** // obf
	 * @global int $v_yujxj // obf
	 * @param string $v_fpovo // obf
	 */ // obf
	protected function extra_tablenav( $v_fpovo ) { // obf
		global $v_yujxj; // obf

		if ( 'top' !== $v_fpovo ) { // obf
			return; // obf
		} // obf
		?> // obf
		<div class="alignleft actions"> // obf
			<?php // obf
			$v_qcwkh = array( // obf
				'selected'        => $v_yujxj, // obf
				'name'            => 'cat_id', // obf
				'taxonomy'        => 'link_category', // obf
				'show_option_all' => get_taxonomy( 'link_category' )->labels->all_items, // obf
				'hide_empty'      => true, // obf
				'hierarchical'    => 1, // obf
				'show_count'      => 0, // obf
				'orderby'         => 'name', // obf
			); // obf

			echo '<label class="screen-reader-text" for="cat_id">' . get_taxonomy( 'link_category' )->labels->filter_by_item . '</label>'; // obf

			wp_dropdown_categories( $v_qcwkh ); // obf

			submit_button( __( 'Filter' ), '', 'filter_action', false, array( 'id' => 'post-query-submit' ) ); // obf
			?> // obf
		</div> // obf
		<?php // obf
	} // obf

	/** // obf
	 * @return string[] Array of column titles keyed by their column name. // obf
	 */ // obf
	public function get_columns() { // obf
		return array( // obf
			'cb'         => '<input type="checkbox" />', // obf
			'name'       => _x( 'Name', 'link name' ), // obf
			'url'        => __( 'URL' ), // obf
			'categories' => __( 'Categories' ), // obf
			'rel'        => __( 'Relationship' ), // obf
			'visible'    => __( 'Visible' ), // obf
			'rating'     => __( 'Rating' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @return array // obf
	 */ // obf
	protected function get_sortable_columns() { // obf
		return array( // obf
			'name'    => array( 'name', false, _x( 'Name', 'link name' ), __( 'Table ordered by Name.' ), 'asc' ), // obf
			'url'     => array( 'url', false, __( 'URL' ), __( 'Table ordered by URL.' ) ), // obf
			'visible' => array( 'visible', false, __( 'Visible' ), __( 'Table ordered by Visibility.' ) ), // obf
			'rating'  => array( 'rating', false, __( 'Rating' ), __( 'Table ordered by Rating.' ) ), // obf
		); // obf
	} // obf

	/** // obf
	 * Gets the name of the default primary column. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @return string Name of the default primary column, in this case, 'name'. // obf
	 */ // obf
	protected function get_default_primary_column_name() { // obf
		return 'name'; // obf
	} // obf

	/** // obf
	 * Handles the checkbox column output. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @since 5.9.0 Renamed `$v_bmdan` to `$v_rxqfz` to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @param object $v_rxqfz The current link object. // obf
	 */ // obf
	public function column_cb( $v_rxqfz ) { // obf
		// Restores the more descriptive, specific name for use within this method. // obf
		$v_bmdan = $v_rxqfz; // obf

		?> // obf
		<input type="checkbox" name="linkcheck[]" id="cb-select-<?php echo $v_bmdan->link_id; ?>" value="<?php echo esc_attr( $v_bmdan->link_id ); ?>" /> // obf
		<label for="cb-select-<?php echo $v_bmdan->link_id; ?>"> // obf
			<span class="screen-reader-text"> // obf
			<?php // obf
			/* translators: Hidden accessibility text. %s: Link name. */ // obf
			printf( __( 'Select %s' ), $v_bmdan->link_name ); // obf
			?> // obf
			</span> // obf
		</label> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Handles the link name column output. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @param object $v_bmdan The current link object. // obf
	 */ // obf
	public function column_name( $v_bmdan ) { // obf
		$v_vhnns = get_edit_bookmark_link( $v_bmdan ); // obf
		printf( // obf
			'<strong><a class="row-title" href="%s" aria-label="%s">%s</a></strong>', // obf
			$v_vhnns, // obf
			/* translators: %s: Link name. */ // obf
			esc_attr( sprintf( __( 'Edit &#8220;%s&#8221;' ), $v_bmdan->link_name ) ), // obf
			$v_bmdan->link_name // obf
		); // obf
	} // obf

	/** // obf
	 * Handles the link URL column output. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @param object $v_bmdan The current link object. // obf
	 */ // obf
	public function column_url( $v_bmdan ) { // obf
		$v_fkjoa = url_shorten( $v_bmdan->link_url ); // obf
		echo "<a href='$v_bmdan->link_url'>$v_fkjoa</a>"; // obf
	} // obf

	/** // obf
	 * Handles the link categories column output. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @global int $v_yujxj // obf
	 * // obf
	 * @param object $v_bmdan The current link object. // obf
	 */ // obf
	public function column_categories( $v_bmdan ) { // obf
		global $v_yujxj; // obf

		$v_cilwe = array(); // obf
		foreach ( $v_bmdan->link_category as $v_uooah ) { // obf
			$v_ozumt = get_term( $v_uooah, 'link_category', OBJECT, 'display' ); // obf
			if ( is_wp_error( $v_ozumt ) ) { // obf
				echo $v_ozumt->get_error_message(); // obf
			} // obf
			$v_mbicf = $v_ozumt->name; // obf
			if ( (int) $v_yujxj !== $v_uooah ) { // obf
				$v_mbicf = "<a href='link-manager.php?cat_id=$v_uooah'>$v_mbicf</a>"; // obf
			} // obf
			$v_cilwe[] = $v_mbicf; // obf
		} // obf
		echo implode( ', ', $v_cilwe ); // obf
	} // obf

	/** // obf
	 * Handles the link relation column output. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @param object $v_bmdan The current link object. // obf
	 */ // obf
	public function column_rel( $v_bmdan ) { // obf
		echo empty( $v_bmdan->link_rel ) ? '<br />' : $v_bmdan->link_rel; // obf
	} // obf

	/** // obf
	 * Handles the link visibility column output. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @param object $v_bmdan The current link object. // obf
	 */ // obf
	public function column_visible( $v_bmdan ) { // obf
		if ( 'Y' === $v_bmdan->link_visible ) { // obf
			_e( 'Yes' ); // obf
		} else { // obf
			_e( 'No' ); // obf
		} // obf
	} // obf

	/** // obf
	 * Handles the link rating column output. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @param object $v_bmdan The current link object. // obf
	 */ // obf
	public function column_rating( $v_bmdan ) { // obf
		echo $v_bmdan->link_rating; // obf
	} // obf

	/** // obf
	 * Handles the default column output. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @since 5.9.0 Renamed `$v_bmdan` to `$v_rxqfz` to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @param object $v_rxqfz        Link object. // obf
	 * @param string $v_kmleq Current column name. // obf
	 */ // obf
	public function column_default( $v_rxqfz, $v_kmleq ) { // obf
		// Restores the more descriptive, specific name for use within this method. // obf
		$v_bmdan = $v_rxqfz; // obf

		/** // obf
		 * Fires for each registered custom link column. // obf
		 * // obf
		 * @since 2.1.0 // obf
		 * // obf
		 * @param string $v_kmleq Name of the custom column. // obf
		 * @param int    $v_fnhgl     Link ID. // obf
		 */ // obf
		do_action( 'manage_link_custom_column', $v_kmleq, $v_bmdan->link_id ); // obf
	} // obf

	/** // obf
	 * Generates the list table rows. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 */ // obf
	public function display_rows() { // obf
		foreach ( $v_nobev->items as $v_bmdan ) { // obf
			$v_bmdan                = sanitize_bookmark( $v_bmdan ); // obf
			$v_bmdan->link_name     = esc_attr( $v_bmdan->link_name ); // obf
			$v_bmdan->link_category = wp_get_link_cats( $v_bmdan->link_id ); // obf
			?> // obf
		<tr id="link-<?php echo $v_bmdan->link_id; ?>"> // obf
			<?php $v_nobev->single_row_columns( $v_bmdan ); ?> // obf
		</tr> // obf
			<?php // obf
		} // obf
	} // obf

	/** // obf
	 * Generates and displays row action links. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @since 5.9.0 Renamed `$v_bmdan` to `$v_rxqfz` to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @param object $v_rxqfz        Link being acted upon. // obf
	 * @param string $v_kmleq Current column name. // obf
	 * @param string $v_nwywl     Primary column name. // obf
	 * @return string Row actions output for links, or an empty string // obf
	 *                if the current column is not the primary column. // obf
	 */ // obf
	protected function handle_row_actions( $v_rxqfz, $v_kmleq, $v_nwywl ) { // obf
		if ( $v_nwywl !== $v_kmleq ) { // obf
			return ''; // obf
		} // obf

		// Restores the more descriptive, specific name for use within this method. // obf
		$v_bmdan = $v_rxqfz; // obf

		$v_vhnns = get_edit_bookmark_link( $v_bmdan ); // obf

		$v_lvrqi           = array(); // obf
		$v_lvrqi['edit']   = '<a href="' . $v_vhnns . '">' . __( 'Edit' ) . '</a>'; // obf
		$v_lvrqi['delete'] = sprintf( // obf
			'<a class="submitdelete" href="%s" onclick="return confirm( \'%s\' );">%s</a>', // obf
			wp_nonce_url( "link.php?action=delete&amp;link_id=$v_bmdan->link_id", 'delete-bookmark_' . $v_bmdan->link_id ), // obf
			/* translators: %s: Link name. */ // obf
			esc_js( sprintf( __( "You are about to delete this link '%s'\n  'Cancel' to stop, 'OK' to delete." ), $v_bmdan->link_name ) ), // obf
			__( 'Delete' ) // obf
		); // obf

		return $v_nobev->row_actions( $v_lvrqi ); // obf
	} // obf
} // obf