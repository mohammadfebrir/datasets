

<?php // obf
/** // obf
 * Administration API: WP_List_Table class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage List_Table // obf
 * @since 3.1.0 // obf
 */ // obf

/** // obf
 * Base class for displaying a list of items in an ajaxified HTML table. // obf
 * // obf
 * @since 3.1.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_List_Table { // obf

	/** // obf
	 * The current list of items. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_cjnnp; // obf

	/** // obf
	 * Various information about the current table. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_fixtq; // obf

	/** // obf
	 * Various information needed for displaying the pagination. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_amgdi = array(); // obf

	/** // obf
	 * The current screen. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * @var WP_Screen // obf
	 */ // obf
	protected $v_izvso; // obf

	/** // obf
	 * Cached bulk actions. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * @var array // obf
	 */ // obf
	private $v_jjmgr; // obf

	/** // obf
	 * Cached pagination output. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * @var string // obf
	 */ // obf
	private $v_oxwbm; // obf

	/** // obf
	 * The view switcher modes. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_zsfuy = array(); // obf

	/** // obf
	 * Stores the value returned by ::get_column_info(). // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * @var array|null // obf
	 */ // obf
	protected $v_rfenl; // obf

	/** // obf
	 * {@internal Missing Summary} // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	protected $v_zceyi = array( '_args', '_pagination_args', 'screen', '_actions', '_pagination' ); // obf

	/** // obf
	 * {@internal Missing Summary} // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	protected $v_xczrf = array( // obf
		'set_pagination_args', // obf
		'get_views', // obf
		'get_bulk_actions', // obf
		'bulk_actions', // obf
		'row_actions', // obf
		'months_dropdown', // obf
		'view_switcher', // obf
		'comments_bubble', // obf
		'get_items_per_page', // obf
		'pagination', // obf
		'get_sortable_columns', // obf
		'get_column_info', // obf
		'get_table_classes', // obf
		'display_tablenav', // obf
		'extra_tablenav', // obf
		'single_row_columns', // obf
	); // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * The child class should call this constructor from its own constructor to override // obf
	 * the default $v_ezxpw. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param array|string $v_ezxpw { // obf
	 *     Array or string of arguments. // obf
	 * // obf
	 *     @type string $v_nwfna   Plural value used for labels and the objects being listed. // obf
	 *                            This affects things such as CSS class-names and nonces used // obf
	 *                            in the list table, e.g. 'posts'. Default empty. // obf
	 *     @type string $v_uwygd Singular label for an object being listed, e.g. 'post'. // obf
	 *                            Default empty // obf
	 *     @type bool   $v_zhwvj     Whether the list table supports Ajax. This includes loading // obf
	 *                            and sorting data, for example. If true, the class will call // obf
	 *                            the _js_vars() method in the footer to provide variables // obf
	 *                            to any scripts handling Ajax events. Default false. // obf
	 *     @type string $v_izvso   String containing the hook name used to determine the current // obf
	 *                            screen. If left null, the current screen will be automatically set. // obf
	 *                            Default null. // obf
	 * } // obf
	 */ // obf
	public function __construct( $v_ezxpw = array() ) { // obf
		$v_ezxpw = wp_parse_args( // obf
			$v_ezxpw, // obf
			array( // obf
				'plural'   => '', // obf
				'singular' => '', // obf
				'ajax'     => false, // obf
				'screen'   => null, // obf
			) // obf
		); // obf

		$v_wbvcz->screen = convert_to_screen( $v_ezxpw['screen'] ); // obf

		add_filter( "manage_{$v_wbvcz->screen->id}_columns", array( $v_wbvcz, 'get_columns' ), 0 ); // obf

		if ( ! $v_ezxpw['plural'] ) { // obf
			$v_ezxpw['plural'] = $v_wbvcz->screen->base; // obf
		} // obf

		$v_ezxpw['plural']   = sanitize_key( $v_ezxpw['plural'] ); // obf
		$v_ezxpw['singular'] = sanitize_key( $v_ezxpw['singular'] ); // obf

		$v_wbvcz->_args = $v_ezxpw; // obf

		if ( $v_ezxpw['ajax'] ) { // obf
			// wp_enqueue_script( 'list-table' ); // obf
			add_action( 'admin_footer', array( $v_wbvcz, '_js_vars' ) ); // obf
		} // obf

		if ( empty( $v_wbvcz->modes ) ) { // obf
			$v_wbvcz->modes = array( // obf
				'list'    => __( 'Compact view' ), // obf
				'excerpt' => __( 'Extended view' ), // obf
			); // obf
		} // obf
	} // obf

	/** // obf
	 * Makes private properties readable for backward compatibility. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * @since 6.4.0 Getting a dynamic property is deprecated. // obf
	 * // obf
	 * @param string $v_izerj Property to get. // obf
	 * @return mixed Property. // obf
	 */ // obf
	public function __get( $v_izerj ) { // obf
		if ( in_array( $v_izerj, $v_wbvcz->compat_fields, true ) ) { // obf
			return $v_wbvcz->$v_izerj; // obf
		} // obf

		wp_trigger_error( // obf
			__METHOD__, // obf
			"The property `{$v_izerj}` is not declared. Getting a dynamic property is " . // obf
			'deprecated since version 6.4.0! Instead, declare the property on the class.', // obf
			E_USER_DEPRECATED // obf
		); // obf
		return null; // obf
	} // obf

	/** // obf
	 * Makes private properties settable for backward compatibility. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * @since 6.4.0 Setting a dynamic property is deprecated. // obf
	 * // obf
	 * @param string $v_izerj  Property to check if set. // obf
	 * @param mixed  $v_owhjg Property value. // obf
	 */ // obf
	public function __set( $v_izerj, $v_owhjg ) { // obf
		if ( in_array( $v_izerj, $v_wbvcz->compat_fields, true ) ) { // obf
			$v_wbvcz->$v_izerj = $v_owhjg; // obf
			return; // obf
		} // obf

		wp_trigger_error( // obf
			__METHOD__, // obf
			"The property `{$v_izerj}` is not declared. Setting a dynamic property is " . // obf
			'deprecated since version 6.4.0! Instead, declare the property on the class.', // obf
			E_USER_DEPRECATED // obf
		); // obf
	} // obf

	/** // obf
	 * Makes private properties checkable for backward compatibility. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * @since 6.4.0 Checking a dynamic property is deprecated. // obf
	 * // obf
	 * @param string $v_izerj Property to check if set. // obf
	 * @return bool Whether the property is a back-compat property and it is set. // obf
	 */ // obf
	public function __isset( $v_izerj ) { // obf
		if ( in_array( $v_izerj, $v_wbvcz->compat_fields, true ) ) { // obf
			return isset( $v_wbvcz->$v_izerj ); // obf
		} // obf

		wp_trigger_error( // obf
			__METHOD__, // obf
			"The property `{$v_izerj}` is not declared. Checking `isset()` on a dynamic property " . // obf
			'is deprecated since version 6.4.0! Instead, declare the property on the class.', // obf
			E_USER_DEPRECATED // obf
		); // obf
		return false; // obf
	} // obf

	/** // obf
	 * Makes private properties un-settable for backward compatibility. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * @since 6.4.0 Unsetting a dynamic property is deprecated. // obf
	 * // obf
	 * @param string $v_izerj Property to unset. // obf
	 */ // obf
	public function __unset( $v_izerj ) { // obf
		if ( in_array( $v_izerj, $v_wbvcz->compat_fields, true ) ) { // obf
			unset( $v_wbvcz->$v_izerj ); // obf
			return; // obf
		} // obf

		wp_trigger_error( // obf
			__METHOD__, // obf
			"A property `{$v_izerj}` is not declared. Unsetting a dynamic property is " . // obf
			'deprecated since version 6.4.0! Instead, declare the property on the class.', // obf
			E_USER_DEPRECATED // obf
		); // obf
	} // obf

	/** // obf
	 * Makes private/protected methods readable for backward compatibility. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @param string $v_izerj      Method to call. // obf
	 * @param array  $v_zsloz Arguments to pass when calling. // obf
	 * @return mixed|bool Return value of the callback, false otherwise. // obf
	 */ // obf
	public function __call( $v_izerj, $v_zsloz ) { // obf
		if ( in_array( $v_izerj, $v_wbvcz->compat_methods, true ) ) { // obf
			return $v_wbvcz->$v_izerj( ...$v_zsloz ); // obf
		} // obf
		return false; // obf
	} // obf

	/** // obf
	 * Checks the current user's permissions // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * @abstract // obf
	 */ // obf
	public function ajax_user_can() { // obf
		die( 'function WP_List_Table::ajax_user_can() must be overridden in a subclass.' ); // obf
	} // obf

	/** // obf
	 * Prepares the list of items for displaying. // obf
	 * // obf
	 * @uses WP_List_Table::set_pagination_args() // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * @abstract // obf
	 */ // obf
	public function prepare_items() { // obf
		die( 'function WP_List_Table::prepare_items() must be overridden in a subclass.' ); // obf
	} // obf

	/** // obf
	 * Sets all the necessary pagination arguments. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param array|string $v_ezxpw Array or string of arguments with information about the pagination. // obf
	 */ // obf
	protected function set_pagination_args( $v_ezxpw ) { // obf
		$v_ezxpw = wp_parse_args( // obf
			$v_ezxpw, // obf
			array( // obf
				'total_items' => 0, // obf
				'total_pages' => 0, // obf
				'per_page'    => 0, // obf
			) // obf
		); // obf

		if ( ! $v_ezxpw['total_pages'] && $v_ezxpw['per_page'] > 0 ) { // obf
			$v_ezxpw['total_pages'] = (int) ceil( $v_ezxpw['total_items'] / $v_ezxpw['per_page'] ); // obf
		} // obf

		// Redirect if page number is invalid and headers are not already sent. // obf
		if ( ! headers_sent() && ! wp_doing_ajax() && $v_ezxpw['total_pages'] > 0 && $v_wbvcz->get_pagenum() > $v_ezxpw['total_pages'] ) { // obf
			wp_redirect( add_query_arg( 'paged', $v_ezxpw['total_pages'] ) ); // obf
			exit; // obf
		} // obf

		$v_wbvcz->_pagination_args = $v_ezxpw; // obf
	} // obf

	/** // obf
	 * Access the pagination args. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param string $v_ivjsg Pagination argument to retrieve. Common values include 'total_items', // obf
	 *                    'total_pages', 'per_page', or 'infinite_scroll'. // obf
	 * @return int Number of items that correspond to the given pagination argument. // obf
	 */ // obf
	public function get_pagination_arg( $v_ivjsg ) { // obf
		if ( 'page' === $v_ivjsg ) { // obf
			return $v_wbvcz->get_pagenum(); // obf
		} // obf

		if ( isset( $v_wbvcz->_pagination_args[ $v_ivjsg ] ) ) { // obf
			return $v_wbvcz->_pagination_args[ $v_ivjsg ]; // obf
		} // obf

		return 0; // obf
	} // obf

	/** // obf
	 * Determines whether the table has items to display or not // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public function has_items() { // obf
		return ! empty( $v_wbvcz->items ); // obf
	} // obf

	/** // obf
	 * Message to be displayed when there are no items // obf
	 * // obf
	 * @since 3.1.0 // obf
	 */ // obf
	public function no_items() { // obf
		_e( 'No items found.' ); // obf
	} // obf

	/** // obf
	 * Displays the search box. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param string $v_wnvke     The 'submit' button label. // obf
	 * @param string $v_dsqnc ID attribute value for the search input field. // obf
	 */ // obf
	public function search_box( $v_wnvke, $v_dsqnc ) { // obf
		if ( empty( $v_ykxmc['s'] ) && ! $v_wbvcz->has_items() ) { // obf
			return; // obf
		} // obf

		$v_dsqnc = $v_dsqnc . '-search-input'; // obf

		if ( ! empty( $v_ykxmc['orderby'] ) ) { // obf
			if ( is_array( $v_ykxmc['orderby'] ) ) { // obf
				foreach ( $v_ykxmc['orderby'] as $v_ivjsg => $v_owhjg ) { // obf
					echo '<input type="hidden" name="orderby[' . esc_attr( $v_ivjsg ) . ']" value="' . esc_attr( $v_owhjg ) . '" />'; // obf
				} // obf
			} else { // obf
				echo '<input type="hidden" name="orderby" value="' . esc_attr( $v_ykxmc['orderby'] ) . '" />'; // obf
			} // obf
		} // obf
		if ( ! empty( $v_ykxmc['order'] ) ) { // obf
			echo '<input type="hidden" name="order" value="' . esc_attr( $v_ykxmc['order'] ) . '" />'; // obf
		} // obf
		if ( ! empty( $v_ykxmc['post_mime_type'] ) ) { // obf
			echo '<input type="hidden" name="post_mime_type" value="' . esc_attr( $v_ykxmc['post_mime_type'] ) . '" />'; // obf
		} // obf
		if ( ! empty( $v_ykxmc['detached'] ) ) { // obf
			echo '<input type="hidden" name="detached" value="' . esc_attr( $v_ykxmc['detached'] ) . '" />'; // obf
		} // obf
		?> // obf
<p class="search-box"> // obf
	<label class="screen-reader-text" for="<?php echo esc_attr( $v_dsqnc ); ?>"><?php echo $v_wnvke; ?>:</label> // obf
	<input type="search" id="<?php echo esc_attr( $v_dsqnc ); ?>" name="s" value="<?php _admin_search_query(); ?>" /> // obf
		<?php submit_button( $v_wnvke, '', '', false, array( 'id' => 'search-submit' ) ); ?> // obf
</p> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Generates views links. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param array $v_kdjfb { // obf
	 *     An array of link data. // obf
	 * // obf
	 *     @type string $v_pnzkz     The link URL. // obf
	 *     @type string $v_zsvri   The link label. // obf
	 *     @type bool   $v_vfzkr Optional. Whether this is the currently selected view. // obf
	 * } // obf
	 * @return string[] An array of link markup. Keys match the `$v_kdjfb` input array. // obf
	 */ // obf
	protected function get_views_links( $v_kdjfb = array() ) { // obf
		if ( ! is_array( $v_kdjfb ) ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				sprintf( // obf
					/* translators: %s: The $v_kdjfb argument. */ // obf
					__( 'The %s argument must be an array.' ), // obf
					'<code>$v_kdjfb</code>' // obf
				), // obf
				'6.1.0' // obf
			); // obf

			return array( '' ); // obf
		} // obf

		$v_yroud = array(); // obf

		foreach ( $v_kdjfb as $v_wldct => $v_igjqw ) { // obf
			if ( empty( $v_igjqw['url'] ) || ! is_string( $v_igjqw['url'] ) || '' === trim( $v_igjqw['url'] ) ) { // obf
				_doing_it_wrong( // obf
					__METHOD__, // obf
					sprintf( // obf
						/* translators: %1$v_eggnp: The argument name. %2$v_eggnp: The view name. */ // obf
						__( 'The %1$v_eggnp argument must be a non-empty string for %2$v_eggnp.' ), // obf
						'<code>url</code>', // obf
						'<code>' . esc_html( $v_wldct ) . '</code>' // obf
					), // obf
					'6.1.0' // obf
				); // obf

				continue; // obf
			} // obf

			if ( empty( $v_igjqw['label'] ) || ! is_string( $v_igjqw['label'] ) || '' === trim( $v_igjqw['label'] ) ) { // obf
				_doing_it_wrong( // obf
					__METHOD__, // obf
					sprintf( // obf
						/* translators: %1$v_eggnp: The argument name. %2$v_eggnp: The view name. */ // obf
						__( 'The %1$v_eggnp argument must be a non-empty string for %2$v_eggnp.' ), // obf
						'<code>label</code>', // obf
						'<code>' . esc_html( $v_wldct ) . '</code>' // obf
					), // obf
					'6.1.0' // obf
				); // obf

				continue; // obf
			} // obf

			$v_yroud[ $v_wldct ] = sprintf( // obf
				'<a href="%s"%s>%s</a>', // obf
				esc_url( $v_igjqw['url'] ), // obf
				isset( $v_igjqw['current'] ) && true === $v_igjqw['current'] ? ' class="current" aria-current="page"' : '', // obf
				$v_igjqw['label'] // obf
			); // obf
		} // obf

		return $v_yroud; // obf
	} // obf

	/** // obf
	 * Gets the list of views available on this table. // obf
	 * // obf
	 * The format is an associative array: // obf
	 * - `'id' => 'link'` // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	protected function get_views() { // obf
		return array(); // obf
	} // obf

	/** // obf
	 * Displays the list of views available on this table. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 */ // obf
	public function views() { // obf
		$v_qudlk = $v_wbvcz->get_views(); // obf
		/** // obf
		 * Filters the list of available list table views. // obf
		 * // obf
		 * The dynamic portion of the hook name, `$v_wbvcz->screen->id`, refers // obf
		 * to the ID of the current screen. // obf
		 * // obf
		 * @since 3.1.0 // obf
		 * // obf
		 * @param string[] $v_qudlk An array of available list table views. // obf
		 */ // obf
		$v_qudlk = apply_filters( "views_{$v_wbvcz->screen->id}", $v_qudlk ); // obf

		if ( empty( $v_qudlk ) ) { // obf
			return; // obf
		} // obf

		$v_wbvcz->screen->render_screen_reader_content( 'heading_views' ); // obf

		echo "<ul class='subsubsub'>\n"; // obf
		foreach ( $v_qudlk as $v_erwsu => $v_wldct ) { // obf
			$v_qudlk[ $v_erwsu ] = "\t<li class='$v_erwsu'>$v_wldct"; // obf
		} // obf
		echo implode( " |</li>\n", $v_qudlk ) . "</li>\n"; // obf
		echo '</ul>'; // obf
	} // obf

	/** // obf
	 * Retrieves the list of bulk actions available for this table. // obf
	 * // obf
	 * The format is an associative array where each element represents either a top level option value and label, or // obf
	 * an array representing an optgroup and its options. // obf
	 * // obf
	 * For a standard option, the array element key is the field value and the array element value is the field label. // obf
	 * // obf
	 * For an optgroup, the array element key is the label and the array element value is an associative array of // obf
	 * options as above. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     [ // obf
	 *         'edit'         => 'Edit', // obf
	 *         'delete'       => 'Delete', // obf
	 *         'Change State' => [ // obf
	 *             'feature' => 'Featured', // obf
	 *             'sale'    => 'On Sale', // obf
	 *         ] // obf
	 *     ] // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * @since 5.6.0 A bulk action can now contain an array of options in order to create an optgroup. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	protected function get_bulk_actions() { // obf
		return array(); // obf
	} // obf

	/** // obf
	 * Displays the bulk actions dropdown. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param string $v_yvumt The location of the bulk actions: Either 'top' or 'bottom'. // obf
	 *                      This is designated as optional for backward compatibility. // obf
	 */ // obf
	protected function bulk_actions( $v_yvumt = '' ) { // obf
		if ( is_null( $v_wbvcz->_actions ) ) { // obf
			$v_wbvcz->_actions = $v_wbvcz->get_bulk_actions(); // obf

			/** // obf
			 * Filters the items in the bulk actions menu of the list table. // obf
			 * // obf
			 * The dynamic portion of the hook name, `$v_wbvcz->screen->id`, refers // obf
			 * to the ID of the current screen. // obf
			 * // obf
			 * @since 3.1.0 // obf
			 * @since 5.6.0 A bulk action can now contain an array of options in order to create an optgroup. // obf
			 * // obf
			 * @param array $v_merug An array of the available bulk actions. // obf
			 */ // obf
			$v_wbvcz->_actions = apply_filters( "bulk_actions-{$v_wbvcz->screen->id}", $v_wbvcz->_actions ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores // obf

			$v_nebzt = ''; // obf
		} else { // obf
			$v_nebzt = '2'; // obf
		} // obf

		if ( empty( $v_wbvcz->_actions ) ) { // obf
			return; // obf
		} // obf

		echo '<label for="bulk-action-selector-' . esc_attr( $v_yvumt ) . '" class="screen-reader-text">' . // obf
			/* translators: Hidden accessibility text. */ // obf
			__( 'Select bulk action' ) . // obf
		'</label>'; // obf
		echo '<select name="action' . $v_nebzt . '" id="bulk-action-selector-' . esc_attr( $v_yvumt ) . "\">\n"; // obf
		echo '<option value="-1">' . __( 'Bulk actions' ) . "</option>\n"; // obf

		foreach ( $v_wbvcz->_actions as $v_ivjsg => $v_owhjg ) { // obf
			if ( is_array( $v_owhjg ) ) { // obf
				echo "\t" . '<optgroup label="' . esc_attr( $v_ivjsg ) . '">' . "\n"; // obf

				foreach ( $v_owhjg as $v_izerj => $v_qtdnk ) { // obf
					$v_erwsu = ( 'edit' === $v_izerj ) ? ' class="hide-if-no-js"' : ''; // obf

					echo "\t\t" . '<option value="' . esc_attr( $v_izerj ) . '"' . $v_erwsu . '>' . $v_qtdnk . "</option>\n"; // obf
				} // obf
				echo "\t" . "</optgroup>\n"; // obf
			} else { // obf
				$v_erwsu = ( 'edit' === $v_ivjsg ) ? ' class="hide-if-no-js"' : ''; // obf

				echo "\t" . '<option value="' . esc_attr( $v_ivjsg ) . '"' . $v_erwsu . '>' . $v_owhjg . "</option>\n"; // obf
			} // obf
		} // obf

		echo "</select>\n"; // obf

		submit_button( __( 'Apply' ), 'action', 'bulk_action', false, array( 'id' => "doaction$v_nebzt" ) ); // obf
		echo "\n"; // obf
	} // obf

	/** // obf
	 * Gets the current action selected from the bulk actions dropdown. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @return string|false The action name. False if no action was selected. // obf
	 */ // obf
	public function current_action() { // obf
		if ( isset( $v_ykxmc['filter_action'] ) && ! empty( $v_ykxmc['filter_action'] ) ) { // obf
			return false; // obf
		} // obf

		if ( isset( $v_ykxmc['action'] ) && '-1' !== $v_ykxmc['action'] ) { // obf
			return $v_ykxmc['action']; // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Generates the required HTML for a list of row action links. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param string[] $v_merug        An array of action links. // obf
	 * @param bool     $v_noaoc Whether the actions should be always visible. // obf
	 * @return string The HTML for the row actions. // obf
	 */ // obf
	protected function row_actions( $v_merug, $v_noaoc = false ) { // obf
		$v_gsseq = count( $v_merug ); // obf

		if ( ! $v_gsseq ) { // obf
			return ''; // obf
		} // obf

		$v_nuoes = get_user_setting( 'posts_list_mode', 'list' ); // obf

		if ( 'excerpt' === $v_nuoes ) { // obf
			$v_noaoc = true; // obf
		} // obf

		$v_sghzy = '<div class="' . ( $v_noaoc ? 'row-actions visible' : 'row-actions' ) . '">'; // obf

		$v_yimoj = 0; // obf

		foreach ( $v_merug as $v_zxcht => $v_igjqw ) { // obf
			++$v_yimoj; // obf

			$v_kavbi = ( $v_yimoj < $v_gsseq ) ? ' | ' : ''; // obf

			$v_sghzy .= "<span class='$v_zxcht'>{$v_igjqw}{$v_kavbi}</span>"; // obf
		} // obf

		$v_sghzy .= '</div>'; // obf

		$v_sghzy .= '<button type="button" class="toggle-row"><span class="screen-reader-text">' . // obf
			/* translators: Hidden accessibility text. */ // obf
			__( 'Show more details' ) . // obf
		'</span></button>'; // obf

		return $v_sghzy; // obf
	} // obf

	/** // obf
	 * Displays a dropdown for filtering items in the list table by month. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @global wpdb      $v_rgwjn      WordPress database abstraction object. // obf
	 * @global WP_Locale $v_heten WordPress date and time locale object. // obf
	 * // obf
	 * @param string $v_stkna The post type. // obf
	 */ // obf
	protected function months_dropdown( $v_stkna ) { // obf
		global $v_rgwjn, $v_heten; // obf

		/** // obf
		 * Filters whether to remove the 'Months' drop-down from the post list table. // obf
		 * // obf
		 * @since 4.2.0 // obf
		 * // obf
		 * @param bool   $v_rftbq   Whether to disable the drop-down. Default false. // obf
		 * @param string $v_stkna The post type. // obf
		 */ // obf
		if ( apply_filters( 'disable_months_dropdown', false, $v_stkna ) ) { // obf
			return; // obf
		} // obf

		/** // obf
		 * Filters whether to short-circuit performing the months dropdown query. // obf
		 * // obf
		 * @since 5.7.0 // obf
		 * // obf
		 * @param object[]|false $v_lptwd   'Months' drop-down results. Default false. // obf
		 * @param string         $v_stkna The post type. // obf
		 */ // obf
		$v_lptwd = apply_filters( 'pre_months_dropdown_query', false, $v_stkna ); // obf

		if ( ! is_array( $v_lptwd ) ) { // obf
			$v_lykpo = "AND post_status != 'auto-draft'"; // obf
			if ( ! isset( $v_itthz['post_status'] ) || 'trash' !== $v_itthz['post_status'] ) { // obf
				$v_lykpo .= " AND post_status != 'trash'"; // obf
			} elseif ( isset( $v_itthz['post_status'] ) ) { // obf
				$v_lykpo = $v_rgwjn->prepare( ' AND post_status = %s', $v_itthz['post_status'] ); // obf
			} // obf

			$v_lptwd = $v_rgwjn->get_results( // obf
				$v_rgwjn->prepare( // obf
					"SELECT DISTINCT YEAR( post_date ) AS year, MONTH( post_date ) AS month // obf
					FROM $v_rgwjn->posts // obf
					WHERE post_type = %s // obf
					$v_lykpo // obf
					ORDER BY post_date DESC", // obf
					$v_stkna // obf
				) // obf
			); // obf
		} // obf

		/** // obf
		 * Filters the 'Months' drop-down results. // obf
		 * // obf
		 * @since 3.7.0 // obf
		 * // obf
		 * @param object[] $v_lptwd    Array of the months drop-down query results. // obf
		 * @param string   $v_stkna The post type. // obf
		 */ // obf
		$v_lptwd = apply_filters( 'months_dropdown_results', $v_lptwd, $v_stkna ); // obf

		$v_ejjie = count( $v_lptwd ); // obf

		if ( ! $v_ejjie || ( 1 === $v_ejjie && 0 === (int) $v_lptwd[0]->month ) ) { // obf
			return; // obf
		} // obf

		$v_tsllu = isset( $v_itthz['m'] ) ? (int) $v_itthz['m'] : 0; // obf
		?> // obf
		<label for="filter-by-date" class="screen-reader-text"><?php echo get_post_type_object( $v_stkna )->labels->filter_by_date; ?></label> // obf
		<select name="m" id="filter-by-date"> // obf
			<option<?php selected( $v_tsllu, 0 ); ?> value="0"><?php _e( 'All dates' ); ?></option> // obf
		<?php // obf
		foreach ( $v_lptwd as $v_djkku ) { // obf
			if ( 0 === (int) $v_djkku->year ) { // obf
				continue; // obf
			} // obf

			$v_gwgsm = zeroise( $v_djkku->month, 2 ); // obf
			$v_nmzwr  = $v_djkku->year; // obf

			printf( // obf
				"<option %s value='%s'>%s</option>\n", // obf
				selected( $v_tsllu, $v_nmzwr . $v_gwgsm, false ), // obf
				esc_attr( $v_nmzwr . $v_gwgsm ), // obf
				/* translators: 1: Month name, 2: 4-digit year. */ // obf
				esc_html( sprintf( __( '%1$v_eggnp %2$v_npxht' ), $v_heten->get_month( $v_gwgsm ), $v_nmzwr ) ) // obf
			); // obf
		} // obf
		?> // obf
		</select> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Displays a view switcher. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param string $v_ktkeq // obf
	 */ // obf
	protected function view_switcher( $v_ktkeq ) { // obf
		?> // obf
		<input type="hidden" name="mode" value="<?php echo esc_attr( $v_ktkeq ); ?>" /> // obf
		<div class="view-switch"> // obf
		<?php // obf
		foreach ( $v_wbvcz->modes as $v_nuoes => $v_qtdnk ) { // obf
			$v_qrpij      = array( 'view-' . $v_nuoes ); // obf
			$v_iptqp = ''; // obf

			if ( $v_ktkeq === $v_nuoes ) { // obf
				$v_qrpij[]    = 'current'; // obf
				$v_iptqp = ' aria-current="page"'; // obf
			} // obf

			printf( // obf
				"<a href='%s' class='%s' id='view-switch-$v_nuoes'$v_iptqp>" . // obf
					"<span class='screen-reader-text'>%s</span>" . // obf
				"</a>\n", // obf
				esc_url( remove_query_arg( 'attachment-filter', add_query_arg( 'mode', $v_nuoes ) ) ), // obf
				implode( ' ', $v_qrpij ), // obf
				$v_qtdnk // obf
			); // obf
		} // obf
		?> // obf
		</div> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Displays a comment count bubble. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param int $v_mnkob          The post ID. // obf
	 * @param int $v_fadxf Number of pending comments. // obf
	 */ // obf
	protected function comments_bubble( $v_mnkob, $v_fadxf ) { // obf
		$v_lnbpi   = get_post( $v_mnkob ); // obf
		$v_blltt = $v_lnbpi ? 'edit_post' : 'edit_posts'; // obf

		if ( ! current_user_can( $v_blltt, $v_mnkob ) // obf
			&& ( post_password_required( $v_mnkob ) // obf
				|| ! current_user_can( 'read_post', $v_mnkob ) ) // obf
		) { // obf
			// The user has no access to the post and thus cannot see the comments. // obf
			return false; // obf
		} // obf

		$v_rvvip = get_comments_number(); // obf

		$v_zqipx = number_format_i18n( $v_rvvip ); // obf
		$v_kyisi  = number_format_i18n( $v_fadxf ); // obf

		$v_tzkxg = sprintf( // obf
			/* translators: %s: Number of comments. */ // obf
			_n( '%s comment', '%s comments', $v_rvvip ), // obf
			$v_zqipx // obf
		); // obf

		$v_onkbi = sprintf( // obf
			/* translators: %s: Number of comments. */ // obf
			_n( '%s approved comment', '%s approved comments', $v_rvvip ), // obf
			$v_zqipx // obf
		); // obf

		$v_gobwt = sprintf( // obf
			/* translators: %s: Number of comments. */ // obf
			_n( '%s pending comment', '%s pending comments', $v_fadxf ), // obf
			$v_kyisi // obf
		); // obf

		if ( ! $v_rvvip && ! $v_fadxf ) { // obf
			// No comments at all. // obf
			printf( // obf
				'<span aria-hidden="true">&#8212;</span>' . // obf
				'<span class="screen-reader-text">%s</span>', // obf
				__( 'No comments' ) // obf
			); // obf
		} elseif ( $v_rvvip && 'trash' === get_post_status( $v_mnkob ) ) { // obf
			// Don't link the comment bubble for a trashed post. // obf
			printf( // obf
				'<span class="post-com-count post-com-count-approved">' . // obf
					'<span class="comment-count-approved" aria-hidden="true">%s</span>' . // obf
					'<span class="screen-reader-text">%s</span>' . // obf
				'</span>', // obf
				$v_zqipx, // obf
				$v_fadxf ? $v_onkbi : $v_tzkxg // obf
			); // obf
		} elseif ( $v_rvvip ) { // obf
			// Link the comment bubble to approved comments. // obf
			printf( // obf
				'<a href="%s" class="post-com-count post-com-count-approved">' . // obf
					'<span class="comment-count-approved" aria-hidden="true">%s</span>' . // obf
					'<span class="screen-reader-text">%s</span>' . // obf
				'</a>', // obf
				esc_url( // obf
					add_query_arg( // obf
						array( // obf
							'p'              => $v_mnkob, // obf
							'comment_status' => 'approved', // obf
						), // obf
						admin_url( 'edit-comments.php' ) // obf
					) // obf
				), // obf
				$v_zqipx, // obf
				$v_fadxf ? $v_onkbi : $v_tzkxg // obf
			); // obf
		} else { // obf
			// Don't link the comment bubble when there are no approved comments. // obf
			printf( // obf
				'<span class="post-com-count post-com-count-no-comments">' . // obf
					'<span class="comment-count comment-count-no-comments" aria-hidden="true">%s</span>' . // obf
					'<span class="screen-reader-text">%s</span>' . // obf
				'</span>', // obf
				$v_zqipx, // obf
				$v_fadxf ? // obf
				/* translators: Hidden accessibility text. */ // obf
				__( 'No approved comments' ) : // obf
				/* translators: Hidden accessibility text. */ // obf
				__( 'No comments' ) // obf
			); // obf
		} // obf

		if ( $v_fadxf ) { // obf
			printf( // obf
				'<a href="%s" class="post-com-count post-com-count-pending">' . // obf
					'<span class="comment-count-pending" aria-hidden="true">%s</span>' . // obf
					'<span class="screen-reader-text">%s</span>' . // obf
				'</a>', // obf
				esc_url( // obf
					add_query_arg( // obf
						array( // obf
							'p'              => $v_mnkob, // obf
							'comment_status' => 'moderated', // obf
						), // obf
						admin_url( 'edit-comments.php' ) // obf
					) // obf
				), // obf
				$v_kyisi, // obf
				$v_gobwt // obf
			); // obf
		} else { // obf
			printf( // obf
				'<span class="post-com-count post-com-count-pending post-com-count-no-pending">' . // obf
					'<span class="comment-count comment-count-no-pending" aria-hidden="true">%s</span>' . // obf
					'<span class="screen-reader-text">%s</span>' . // obf
				'</span>', // obf
				$v_kyisi, // obf
				$v_rvvip ? // obf
				/* translators: Hidden accessibility text. */ // obf
				__( 'No pending comments' ) : // obf
				/* translators: Hidden accessibility text. */ // obf
				__( 'No comments' ) // obf
			); // obf
		} // obf
	} // obf

	/** // obf
	 * Gets the current page number. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @return int // obf
	 */ // obf
	public function get_pagenum() { // obf
		$v_nenus = isset( $v_ykxmc['paged'] ) ? absint( $v_ykxmc['paged'] ) : 0; // obf

		if ( isset( $v_wbvcz->_pagination_args['total_pages'] ) && $v_nenus > $v_wbvcz->_pagination_args['total_pages'] ) { // obf
			$v_nenus = $v_wbvcz->_pagination_args['total_pages']; // obf
		} // obf

		return max( 1, $v_nenus ); // obf
	} // obf

	/** // obf
	 * Gets the number of items to display on a single page. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param string $v_znauc        User option name. // obf
	 * @param int    $v_xhrgr Optional. The number of items to display. Default 20. // obf
	 * @return int // obf
	 */ // obf
	protected function get_items_per_page( $v_znauc, $v_xhrgr = 20 ) { // obf
		$v_ioqgp = (int) get_user_option( $v_znauc ); // obf
		if ( empty( $v_ioqgp ) || $v_ioqgp < 1 ) { // obf
			$v_ioqgp = $v_xhrgr; // obf
		} // obf

		/** // obf
		 * Filters the number of items to be displayed on each page of the list table. // obf
		 * // obf
		 * The dynamic hook name, `$v_znauc`, refers to the `per_page` option depending // obf
		 * on the type of list table in use. Possible filter names include: // obf
		 * // obf
		 *  - `edit_comments_per_page` // obf
		 *  - `sites_network_per_page` // obf
		 *  - `site_themes_network_per_page` // obf
		 *  - `themes_network_per_page` // obf
		 *  - `users_network_per_page` // obf
		 *  - `edit_post_per_page` // obf
		 *  - `edit_page_per_page` // obf
		 *  - `edit_{$v_stkna}_per_page` // obf
		 *  - `edit_post_tag_per_page` // obf
		 *  - `edit_category_per_page` // obf
		 *  - `edit_{$v_nnfhk}_per_page` // obf
		 *  - `site_users_network_per_page` // obf
		 *  - `users_per_page` // obf
		 * // obf
		 * @since 2.9.0 // obf
		 * // obf
		 * @param int $v_ioqgp Number of items to be displayed. Default 20. // obf
		 */ // obf
		return (int) apply_filters( "{$v_znauc}", $v_ioqgp ); // obf
	} // obf

	/** // obf
	 * Displays the pagination. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param string $v_yvumt The location of the pagination: Either 'top' or 'bottom'. // obf
	 */ // obf
	protected function pagination( $v_yvumt ) { // obf
		if ( empty( $v_wbvcz->_pagination_args ) ) { // obf
			return; // obf
		} // obf

		$v_ypgyf     = $v_wbvcz->_pagination_args['total_items']; // obf
		$v_qomgl     = $v_wbvcz->_pagination_args['total_pages']; // obf
		$v_cqruk = false; // obf
		if ( isset( $v_wbvcz->_pagination_args['infinite_scroll'] ) ) { // obf
			$v_cqruk = $v_wbvcz->_pagination_args['infinite_scroll']; // obf
		} // obf

		if ( 'top' === $v_yvumt && $v_qomgl > 1 ) { // obf
			$v_wbvcz->screen->render_screen_reader_content( 'heading_pagination' ); // obf
		} // obf

		$v_sghzy = '<span class="displaying-num">' . sprintf( // obf
			/* translators: %s: Number of items. */ // obf
			_n( '%s item', '%s items', $v_ypgyf ), // obf
			number_format_i18n( $v_ypgyf ) // obf
		) . '</span>'; // obf

		$v_vfzkr              = $v_wbvcz->get_pagenum(); // obf
		$v_qibhk = wp_removable_query_args(); // obf

		$v_aowly = set_url_scheme( 'http://' . $v_fgpxy['HTTP_HOST'] . $v_fgpxy['REQUEST_URI'] ); // obf

		$v_aowly = remove_query_arg( $v_qibhk, $v_aowly ); // obf

		$v_kmodk = array(); // obf

		$v_riwlh = '<span class="paging-input">'; // obf
		$v_jszgg  = '</span></span>'; // obf

		$v_ljlzy = false; // obf
		$v_xuhdk  = false; // obf
		$v_cacsx  = false; // obf
		$v_kgrzs  = false; // obf

		if ( 1 === $v_vfzkr ) { // obf
			$v_ljlzy = true; // obf
			$v_cacsx  = true; // obf
		} // obf
		if ( $v_qomgl === $v_vfzkr ) { // obf
			$v_xuhdk = true; // obf
			$v_kgrzs = true; // obf
		} // obf

		if ( $v_ljlzy ) { // obf
			$v_kmodk[] = '<span class="tablenav-pages-navspan button disabled" aria-hidden="true">&laquo;</span>'; // obf
		} else { // obf
			$v_kmodk[] = sprintf( // obf
				"<a class='first-page button' href='%s'>" . // obf
					"<span class='screen-reader-text'>%s</span>" . // obf
					"<span aria-hidden='true'>%s</span>" . // obf
				'</a>', // obf
				esc_url( remove_query_arg( 'paged', $v_aowly ) ), // obf
				/* translators: Hidden accessibility text. */ // obf
				__( 'First page' ), // obf
				'&laquo;' // obf
			); // obf
		} // obf

		if ( $v_cacsx ) { // obf
			$v_kmodk[] = '<span class="tablenav-pages-navspan button disabled" aria-hidden="true">&lsaquo;</span>'; // obf
		} else { // obf
			$v_kmodk[] = sprintf( // obf
				"<a class='prev-page button' href='%s'>" . // obf
					"<span class='screen-reader-text'>%s</span>" . // obf
					"<span aria-hidden='true'>%s</span>" . // obf
				'</a>', // obf
				esc_url( add_query_arg( 'paged', max( 1, $v_vfzkr - 1 ), $v_aowly ) ), // obf
				/* translators: Hidden accessibility text. */ // obf
				__( 'Previous page' ), // obf
				'&lsaquo;' // obf
			); // obf
		} // obf

		if ( 'bottom' === $v_yvumt ) { // obf
			$v_zeecj  = $v_vfzkr; // obf
			$v_riwlh = sprintf( // obf
				'<span class="screen-reader-text">%s</span>' . // obf
				'<span id="table-paging" class="paging-input">' . // obf
				'<span class="tablenav-paging-text">', // obf
				/* translators: Hidden accessibility text. */ // obf
				__( 'Current Page' ) // obf
			); // obf
		} else { // obf
			$v_zeecj = sprintf( // obf
				'<label for="current-page-selector" class="screen-reader-text">%s</label>' . // obf
				"<input class='current-page' id='current-page-selector' type='text' // obf
					name='paged' value='%s' size='%d' aria-describedby='table-paging' />" . // obf
				"<span class='tablenav-paging-text'>", // obf
				/* translators: Hidden accessibility text. */ // obf
				__( 'Current Page' ), // obf
				$v_vfzkr, // obf
				strlen( $v_qomgl ) // obf
			); // obf
		} // obf

		$v_ktnyh = sprintf( "<span class='total-pages'>%s</span>", number_format_i18n( $v_qomgl ) ); // obf

		$v_kmodk[] = $v_riwlh . sprintf( // obf
			/* translators: 1: Current page, 2: Total pages. */ // obf
			_x( '%1$v_eggnp of %2$v_eggnp', 'paging' ), // obf
			$v_zeecj, // obf
			$v_ktnyh // obf
		) . $v_jszgg; // obf

		if ( $v_kgrzs ) { // obf
			$v_kmodk[] = '<span class="tablenav-pages-navspan button disabled" aria-hidden="true">&rsaquo;</span>'; // obf
		} else { // obf
			$v_kmodk[] = sprintf( // obf
				"<a class='next-page button' href='%s'>" . // obf
					"<span class='screen-reader-text'>%s</span>" . // obf
					"<span aria-hidden='true'>%s</span>" . // obf
				'</a>', // obf
				esc_url( add_query_arg( 'paged', min( $v_qomgl, $v_vfzkr + 1 ), $v_aowly ) ), // obf
				/* translators: Hidden accessibility text. */ // obf
				__( 'Next page' ), // obf
				'&rsaquo;' // obf
			); // obf
		} // obf

		if ( $v_xuhdk ) { // obf
			$v_kmodk[] = '<span class="tablenav-pages-navspan button disabled" aria-hidden="true">&raquo;</span>'; // obf
		} else { // obf
			$v_kmodk[] = sprintf( // obf
				"<a class='last-page button' href='%s'>" . // obf
					"<span class='screen-reader-text'>%s</span>" . // obf
					"<span aria-hidden='true'>%s</span>" . // obf
				'</a>', // obf
				esc_url( add_query_arg( 'paged', $v_qomgl, $v_aowly ) ), // obf
				/* translators: Hidden accessibility text. */ // obf
				__( 'Last page' ), // obf
				'&raquo;' // obf
			); // obf
		} // obf

		$v_ydkiq = 'pagination-links'; // obf
		if ( ! empty( $v_cqruk ) ) { // obf
			$v_ydkiq .= ' hide-if-js'; // obf
		} // obf
		$v_sghzy .= "\n<span class='$v_ydkiq'>" . implode( "\n", $v_kmodk ) . '</span>'; // obf

		if ( $v_qomgl ) { // obf
			$v_wkbxd = $v_qomgl < 2 ? ' one-page' : ''; // obf
		} else { // obf
			$v_wkbxd = ' no-pages'; // obf
		} // obf
		$v_wbvcz->_pagination = "<div class='tablenav-pages{$v_wkbxd}'>$v_sghzy</div>"; // obf

		echo $v_wbvcz->_pagination; // obf
	} // obf

	/** // obf
	 * Gets a list of columns. // obf
	 * // obf
	 * The format is: // obf
	 * - `'internal-name' => 'Title'` // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * @abstract // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function get_columns() { // obf
		die( 'function WP_List_Table::get_columns() must be overridden in a subclass.' ); // obf
	} // obf

	/** // obf
	 * Gets a list of sortable columns. // obf
	 * // obf
	 * The format is: // obf
	 * - `'internal-name' => 'orderby'` // obf
	 * - `'internal-name' => array( 'orderby', bool, 'abbr', 'orderby-text', 'initially-sorted-column-order' )` - // obf
	 * - `'internal-name' => array( 'orderby', 'asc' )` - The second element sets the initial sorting order. // obf
	 * - `'internal-name' => array( 'orderby', true )`  - The second element makes the initial order descending. // obf
	 * // obf
	 * In the second format, passing true as second parameter will make the initial // obf
	 * sorting order be descending. Following parameters add a short column name to // obf
	 * be used as 'abbr' attribute, a translatable string for the current sorting, // obf
	 * and the initial order for the initial sorted column, 'asc' or 'desc' (default: false). // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * @since 6.3.0 Added 'abbr', 'orderby-text' and 'initially-sorted-column-order'. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	protected function get_sortable_columns() { // obf
		return array(); // obf
	} // obf

	/** // obf
	 * Gets the name of the default primary column. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @return string Name of the default primary column, in this case, an empty string. // obf
	 */ // obf
	protected function get_default_primary_column_name() { // obf
		$v_jimux = $v_wbvcz->get_columns(); // obf
		$v_eotpo  = ''; // obf

		if ( empty( $v_jimux ) ) { // obf
			return $v_eotpo; // obf
		} // obf

		/* // obf
		 * We need a primary defined so responsive views show something, // obf
		 * so let's fall back to the first non-checkbox column. // obf
		 */ // obf
		foreach ( $v_jimux as $v_cizhq => $v_rlzws ) { // obf
			if ( 'cb' === $v_cizhq ) { // obf
				continue; // obf
			} // obf

			$v_eotpo = $v_cizhq; // obf
			break; // obf
		} // obf

		return $v_eotpo; // obf
	} // obf

	/** // obf
	 * Gets the name of the primary column. // obf
	 * // obf
	 * Public wrapper for WP_List_Table::get_default_primary_column_name(). // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @return string Name of the default primary column. // obf
	 */ // obf
	public function get_primary_column() { // obf
		return $v_wbvcz->get_primary_column_name(); // obf
	} // obf

	/** // obf
	 * Gets the name of the primary column. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @return string The name of the primary column. // obf
	 */ // obf
	protected function get_primary_column_name() { // obf
		$v_jimux = get_column_headers( $v_wbvcz->screen ); // obf
		$v_lqczg = $v_wbvcz->get_default_primary_column_name(); // obf

		/* // obf
		 * If the primary column doesn't exist, // obf
		 * fall back to the first non-checkbox column. // obf
		 */ // obf
		if ( ! isset( $v_jimux[ $v_lqczg ] ) ) { // obf
			$v_lqczg = self::get_default_primary_column_name(); // obf
		} // obf

		/** // obf
		 * Filters the name of the primary column for the current list table. // obf
		 * // obf
		 * @since 4.3.0 // obf
		 * // obf
		 * @param string $v_lqczg Column name default for the specific list table, e.g. 'name'. // obf
		 * @param string $v_vfsvk Screen ID for specific list table, e.g. 'plugins'. // obf
		 */ // obf
		$v_eotpo = apply_filters( 'list_table_primary_column', $v_lqczg, $v_wbvcz->screen->id ); // obf

		if ( empty( $v_eotpo ) || ! isset( $v_jimux[ $v_eotpo ] ) ) { // obf
			$v_eotpo = $v_lqczg; // obf
		} // obf

		return $v_eotpo; // obf
	} // obf

	/** // obf
	 * Gets a list of all, hidden, and sortable columns, with filter applied. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	protected function get_column_info() { // obf
		// $v_rfenl is already set / cached. // obf
		if ( // obf
			isset( $v_wbvcz->_column_headers ) && // obf
			is_array( $v_wbvcz->_column_headers ) // obf
		) { // obf
			/* // obf
			 * Backward compatibility for `$v_rfenl` format prior to WordPress 4.3. // obf
			 * // obf
			 * In WordPress 4.3 the primary column name was added as a fourth item in the // obf
			 * column headers property. This ensures the primary column name is included // obf
			 * in plugins setting the property directly in the three item format. // obf
			 */ // obf
			if ( 4 === count( $v_wbvcz->_column_headers ) ) { // obf
				return $v_wbvcz->_column_headers; // obf
			} // obf

			$v_zhter = array( array(), array(), array(), $v_wbvcz->get_primary_column_name() ); // obf
			foreach ( $v_wbvcz->_column_headers as $v_ivjsg => $v_owhjg ) { // obf
				$v_zhter[ $v_ivjsg ] = $v_owhjg; // obf
			} // obf

			$v_wbvcz->_column_headers = $v_zhter; // obf

			return $v_wbvcz->_column_headers; // obf
		} // obf

		$v_jimux = get_column_headers( $v_wbvcz->screen ); // obf
		$v_decyn  = get_hidden_columns( $v_wbvcz->screen ); // obf

		$v_lhlez = $v_wbvcz->get_sortable_columns(); // obf
		/** // obf
		 * Filters the list table sortable columns for a specific screen. // obf
		 * // obf
		 * The dynamic portion of the hook name, `$v_wbvcz->screen->id`, refers // obf
		 * to the ID of the current screen. // obf
		 * // obf
		 * @since 3.1.0 // obf
		 * // obf
		 * @param array $v_lhlez An array of sortable columns. // obf
		 */ // obf
		$v_wwlou = apply_filters( "manage_{$v_wbvcz->screen->id}_sortable_columns", $v_lhlez ); // obf

		$v_xhhmy = array(); // obf
		foreach ( $v_wwlou as $v_xeypr => $v_bjdig ) { // obf
			if ( empty( $v_bjdig ) ) { // obf
				continue; // obf
			} // obf

			$v_bjdig = (array) $v_bjdig; // obf
			// Descending initial sorting. // obf
			if ( ! isset( $v_bjdig[1] ) ) { // obf
				$v_bjdig[1] = false; // obf
			} // obf
			// Current sorting translatable string. // obf
			if ( ! isset( $v_bjdig[2] ) ) { // obf
				$v_bjdig[2] = ''; // obf
			} // obf
			// Initial view sorted column and asc/desc order, default: false. // obf
			if ( ! isset( $v_bjdig[3] ) ) { // obf
				$v_bjdig[3] = false; // obf
			} // obf
			// Initial order for the initial sorted column, default: false. // obf
			if ( ! isset( $v_bjdig[4] ) ) { // obf
				$v_bjdig[4] = false; // obf
			} // obf

			$v_xhhmy[ $v_xeypr ] = $v_bjdig; // obf
		} // obf

		$v_qodbw               = $v_wbvcz->get_primary_column_name(); // obf
		$v_wbvcz->_column_headers = array( $v_jimux, $v_decyn, $v_xhhmy, $v_qodbw ); // obf

		return $v_wbvcz->_column_headers; // obf
	} // obf

	/** // obf
	 * Returns the number of visible columns. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @return int // obf
	 */ // obf
	public function get_column_count() { // obf
		list ( $v_jimux, $v_decyn ) = $v_wbvcz->get_column_info(); // obf
		$v_decyn                    = array_intersect( array_keys( $v_jimux ), array_filter( $v_decyn ) ); // obf
		return count( $v_jimux ) - count( $v_decyn ); // obf
	} // obf

	/** // obf
	 * Prints column headers, accounting for hidden and sortable columns. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param bool $v_xussk Whether to set the ID attribute or not // obf
	 */ // obf
	public function print_column_headers( $v_xussk = true ) { // obf
		list( $v_jimux, $v_decyn, $v_xhhmy, $v_qodbw ) = $v_wbvcz->get_column_info(); // obf

		$v_aowly = set_url_scheme( 'http://' . $v_fgpxy['HTTP_HOST'] . $v_fgpxy['REQUEST_URI'] ); // obf
		$v_aowly = remove_query_arg( 'paged', $v_aowly ); // obf

		// When users click on a column header to sort by other columns. // obf
		if ( isset( $v_itthz['orderby'] ) ) { // obf
			$v_szcmf = $v_itthz['orderby']; // obf
			// In the initial view there's no orderby parameter. // obf
		} else { // obf
			$v_szcmf = ''; // obf
		} // obf

		// Not in the initial view and descending order. // obf
		if ( isset( $v_itthz['order'] ) && 'desc' === $v_itthz['order'] ) { // obf
			$v_mpeal = 'desc'; // obf
		} else { // obf
			// The initial view is not always 'asc', we'll take care of this below. // obf
			$v_mpeal = 'asc'; // obf
		} // obf

		if ( ! empty( $v_jimux['cb'] ) ) { // obf
			static $v_mgejr = 1; // obf
			$v_jimux['cb']     = '<input id="cb-select-all-' . $v_mgejr . '" type="checkbox" /> // obf
			<label for="cb-select-all-' . $v_mgejr . '">' . // obf
				'<span class="screen-reader-text">' . // obf
					/* translators: Hidden accessibility text. */ // obf
					__( 'Select All' ) . // obf
				'</span>' . // obf
				'</label>'; // obf
			++$v_mgejr; // obf
		} // obf

		foreach ( $v_jimux as $v_wefih => $v_bmmpd ) { // obf
			$v_erwsu          = array( 'manage-column', "column-$v_wefih" ); // obf
			$v_yhekl = ''; // obf
			$v_tyhji      = ''; // obf
			$v_swnii     = ''; // obf

			if ( in_array( $v_wefih, $v_decyn, true ) ) { // obf
				$v_erwsu[] = 'hidden'; // obf
			} // obf

			if ( 'cb' === $v_wefih ) { // obf
				$v_erwsu[] = 'check-column'; // obf
			} elseif ( in_array( $v_wefih, array( 'posts', 'comments', 'links' ), true ) ) { // obf
				$v_erwsu[] = 'num'; // obf
			} // obf

			if ( $v_wefih === $v_qodbw ) { // obf
				$v_erwsu[] = 'column-primary'; // obf
			} // obf

			if ( isset( $v_xhhmy[ $v_wefih ] ) ) { // obf
				$v_ibzdp       = isset( $v_xhhmy[ $v_wefih ][0] ) ? $v_xhhmy[ $v_wefih ][0] : ''; // obf
				$v_adjos    = isset( $v_xhhmy[ $v_wefih ][1] ) ? $v_xhhmy[ $v_wefih ][1] : false; // obf
				$v_hvifz          = isset( $v_xhhmy[ $v_wefih ][2] ) ? $v_xhhmy[ $v_wefih ][2] : ''; // obf
				$v_zghxs  = isset( $v_xhhmy[ $v_wefih ][3] ) ? $v_xhhmy[ $v_wefih ][3] : ''; // obf
				$v_mexzf = isset( $v_xhhmy[ $v_wefih ][4] ) ? $v_xhhmy[ $v_wefih ][4] : ''; // obf

				/* // obf
				 * We're in the initial view and there's no $v_itthz['orderby'] then check if the // obf
				 * initial sorting information is set in the sortable columns and use that. // obf
				 */ // obf
				if ( '' === $v_szcmf && $v_mexzf ) { // obf
					// Use the initially sorted column $v_ibzdp as current orderby. // obf
					$v_szcmf = $v_ibzdp; // obf
					// Use the initially sorted column asc/desc order as initial order. // obf
					$v_mpeal = $v_mexzf; // obf
				} // obf

				/* // obf
				 * True in the initial view when an initial orderby is set via get_sortable_columns() // obf
				 * and true in the sorted views when the actual $v_itthz['orderby'] is equal to $v_ibzdp. // obf
				 */ // obf
				if ( $v_szcmf === $v_ibzdp ) { // obf
					// The sorted column. The `aria-sort` attribute must be set only on the sorted column. // obf
					if ( 'asc' === $v_mpeal ) { // obf
						$v_kgnvv          = 'desc'; // obf
						$v_yhekl = ' aria-sort="ascending"'; // obf
					} else { // obf
						$v_kgnvv          = 'asc'; // obf
						$v_yhekl = ' aria-sort="descending"'; // obf
					} // obf

					$v_erwsu[] = 'sorted'; // obf
					$v_erwsu[] = $v_mpeal; // obf
				} else { // obf
					// The other sortable columns. // obf
					$v_kgnvv = strtolower( $v_adjos ); // obf

					if ( ! in_array( $v_kgnvv, array( 'desc', 'asc' ), true ) ) { // obf
						$v_kgnvv = $v_adjos ? 'desc' : 'asc'; // obf
					} // obf

					$v_erwsu[] = 'sortable'; // obf
					$v_erwsu[] = 'desc' === $v_kgnvv ? 'asc' : 'desc'; // obf

					/* translators: Hidden accessibility text. */ // obf
					$v_jnzyv = __( 'Sort ascending.' ); // obf
					/* translators: Hidden accessibility text. */ // obf
					$v_ritmo  = __( 'Sort descending.' ); // obf
					$v_swnii = 'asc' === $v_kgnvv ? $v_jnzyv : $v_ritmo; // obf
				} // obf

				if ( '' !== $v_swnii ) { // obf
					$v_swnii = ' <span class="screen-reader-text">' . $v_swnii . '</span>'; // obf
				} // obf

				// Print an 'abbr' attribute if a value is provided via get_sortable_columns(). // obf
				$v_tyhji = $v_hvifz ? ' abbr="' . esc_attr( $v_hvifz ) . '"' : ''; // obf

				$v_bmmpd = sprintf( // obf
					'<a href="%1$v_eggnp">' . // obf
						'<span>%2$v_eggnp</span>' . // obf
						'<span class="sorting-indicators">' . // obf
							'<span class="sorting-indicator asc" aria-hidden="true"></span>' . // obf
							'<span class="sorting-indicator desc" aria-hidden="true"></span>' . // obf
						'</span>' . // obf
						'%3$v_eggnp' . // obf
					'</a>', // obf
					esc_url( add_query_arg( compact( 'orderby', 'order' ), $v_aowly ) ), // obf
					$v_bmmpd, // obf
					$v_swnii // obf
				); // obf
			} // obf

			$v_yepwd        = ( 'cb' === $v_wefih ) ? 'td' : 'th'; // obf
			$v_esxmd      = ( 'th' === $v_yepwd ) ? 'scope="col"' : ''; // obf
			$v_xeypr         = $v_xussk ? "id='$v_wefih'" : ''; // obf
			$v_jbrzi = "class='" . implode( ' ', $v_erwsu ) . "'"; // obf

			echo "<$v_yepwd $v_esxmd $v_xeypr $v_jbrzi $v_yhekl $v_tyhji>$v_bmmpd</$v_yepwd>"; // obf
		} // obf
	} // obf

	/** // obf
	 * Print a table description with information about current sorting and order. // obf
	 * // obf
	 * For the table initial view, information about initial orderby and order // obf
	 * should be provided via get_sortable_columns(). // obf
	 * // obf
	 * @since 6.3.0 // obf
	 */ // obf
	public function print_table_description() { // obf
		list( $v_jimux, $v_decyn, $v_xhhmy ) = $v_wbvcz->get_column_info(); // obf

		if ( empty( $v_xhhmy ) ) { // obf
			return; // obf
		} // obf

		// When users click on a column header to sort by other columns. // obf
		if ( isset( $v_itthz['orderby'] ) ) { // obf
			$v_szcmf = $v_itthz['orderby']; // obf
			// In the initial view there's no orderby parameter. // obf
		} else { // obf
			$v_szcmf = ''; // obf
		} // obf

		// Not in the initial view and descending order. // obf
		if ( isset( $v_itthz['order'] ) && 'desc' === $v_itthz['order'] ) { // obf
			$v_mpeal = 'desc'; // obf
		} else { // obf
			// The initial view is not always 'asc', we'll take care of this below. // obf
			$v_mpeal = 'asc'; // obf
		} // obf

		foreach ( array_keys( $v_jimux ) as $v_wefih ) { // obf

			if ( isset( $v_xhhmy[ $v_wefih ] ) ) { // obf
				$v_ibzdp       = isset( $v_xhhmy[ $v_wefih ][0] ) ? $v_xhhmy[ $v_wefih ][0] : ''; // obf
				$v_adjos    = isset( $v_xhhmy[ $v_wefih ][1] ) ? $v_xhhmy[ $v_wefih ][1] : false; // obf
				$v_hvifz          = isset( $v_xhhmy[ $v_wefih ][2] ) ? $v_xhhmy[ $v_wefih ][2] : ''; // obf
				$v_zghxs  = isset( $v_xhhmy[ $v_wefih ][3] ) ? $v_xhhmy[ $v_wefih ][3] : ''; // obf
				$v_mexzf = isset( $v_xhhmy[ $v_wefih ][4] ) ? $v_xhhmy[ $v_wefih ][4] : ''; // obf

				if ( ! is_string( $v_zghxs ) || '' === $v_zghxs ) { // obf
					return; // obf
				} // obf
				/* // obf
				 * We're in the initial view and there's no $v_itthz['orderby'] then check if the // obf
				 * initial sorting information is set in the sortable columns and use that. // obf
				 */ // obf
				if ( '' === $v_szcmf && $v_mexzf ) { // obf
					// Use the initially sorted column $v_ibzdp as current orderby. // obf
					$v_szcmf = $v_ibzdp; // obf
					// Use the initially sorted column asc/desc order as initial order. // obf
					$v_mpeal = $v_mexzf; // obf
				} // obf

				/* // obf
				 * True in the initial view when an initial orderby is set via get_sortable_columns() // obf
				 * and true in the sorted views when the actual $v_itthz['orderby'] is equal to $v_ibzdp. // obf
				 */ // obf
				if ( $v_szcmf === $v_ibzdp ) { // obf
					/* translators: Hidden accessibility text. */ // obf
					$v_jnzyv = __( 'Ascending.' ); // obf
					/* translators: Hidden accessibility text. */ // obf
					$v_ritmo  = __( 'Descending.' ); // obf
					$v_swnii = 'asc' === $v_mpeal ? $v_jnzyv : $v_ritmo; // obf
					echo '<caption class="screen-reader-text">' . $v_zghxs . ' ' . $v_swnii . '</caption>'; // obf

					return; // obf
				} // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Displays the table. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 */ // obf
	public function display() { // obf
		$v_uwygd = $v_wbvcz->_args['singular']; // obf

		$v_wbvcz->display_tablenav( 'top' ); // obf

		$v_wbvcz->screen->render_screen_reader_content( 'heading_list' ); // obf
		?> // obf
<table class="wp-list-table <?php echo implode( ' ', $v_wbvcz->get_table_classes() ); ?>"> // obf
		<?php $v_wbvcz->print_table_description(); ?> // obf
	<thead> // obf
	<tr> // obf
		<?php $v_wbvcz->print_column_headers(); ?> // obf
	</tr> // obf
	</thead> // obf

	<tbody id="the-list" // obf
		<?php // obf
		if ( $v_uwygd ) { // obf
			echo " data-wp-lists='list:$v_uwygd'"; // obf
		} // obf
		?> // obf
		> // obf
		<?php $v_wbvcz->display_rows_or_placeholder(); ?> // obf
	</tbody> // obf

	<tfoot> // obf
	<tr> // obf
		<?php $v_wbvcz->print_column_headers( false ); ?> // obf
	</tr> // obf
	</tfoot> // obf

</table> // obf
		<?php // obf
		$v_wbvcz->display_tablenav( 'bottom' ); // obf
	} // obf

	/** // obf
	 * Gets a list of CSS classes for the WP_List_Table table tag. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @return string[] Array of CSS classes for the table tag. // obf
	 */ // obf
	protected function get_table_classes() { // obf
		$v_nuoes = get_user_setting( 'posts_list_mode', 'list' ); // obf

		$v_brjha = esc_attr( 'table-view-' . $v_nuoes ); // obf

		return array( 'widefat', 'fixed', 'striped', $v_brjha, $v_wbvcz->_args['plural'] ); // obf
	} // obf

	/** // obf
	 * Generates the table navigation above or below the table // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * @param string $v_yvumt The location of the navigation: Either 'top' or 'bottom'. // obf
	 */ // obf
	protected function display_tablenav( $v_yvumt ) { // obf
		if ( 'top' === $v_yvumt ) { // obf
			wp_nonce_field( 'bulk-' . $v_wbvcz->_args['plural'] ); // obf
		} // obf
		?> // obf
	<div class="tablenav <?php echo esc_attr( $v_yvumt ); ?>"> // obf

		<?php if ( $v_wbvcz->has_items() ) : ?> // obf
		<div class="alignleft actions bulkactions"> // obf
			<?php $v_wbvcz->bulk_actions( $v_yvumt ); ?> // obf
		</div> // obf
			<?php // obf
		endif; // obf
		$v_wbvcz->extra_tablenav( $v_yvumt ); // obf
		$v_wbvcz->pagination( $v_yvumt ); // obf
		?> // obf

		<br class="clear" /> // obf
	</div> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Displays extra controls between bulk actions and pagination. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param string $v_yvumt // obf
	 */ // obf
	protected function extra_tablenav( $v_yvumt ) {} // obf

	/** // obf
	 * Generates the tbody element for the list table. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 */ // obf
	public function display_rows_or_placeholder() { // obf
		if ( $v_wbvcz->has_items() ) { // obf
			$v_wbvcz->display_rows(); // obf
		} else { // obf
			echo '<tr class="no-items"><td class="colspanchange" colspan="' . $v_wbvcz->get_column_count() . '">'; // obf
			$v_wbvcz->no_items(); // obf
			echo '</td></tr>'; // obf
		} // obf
	} // obf

	/** // obf
	 * Generates the list table rows. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 */ // obf
	public function display_rows() { // obf
		foreach ( $v_wbvcz->items as $v_zuxpz ) { // obf
			$v_wbvcz->single_row( $v_zuxpz ); // obf
		} // obf
	} // obf

	/** // obf
	 * Generates content for a single row of the table. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param object|array $v_zuxpz The current item // obf
	 */ // obf
	public function single_row( $v_zuxpz ) { // obf
		echo '<tr>'; // obf
		$v_wbvcz->single_row_columns( $v_zuxpz ); // obf
		echo '</tr>'; // obf
	} // obf

	/** // obf
	 * @param object|array $v_zuxpz // obf
	 * @param string $v_rlzws // obf
	 */ // obf
	protected function column_default( $v_zuxpz, $v_rlzws ) {} // obf

	/** // obf
	 * @param object|array $v_zuxpz // obf
	 */ // obf
	protected function column_cb( $v_zuxpz ) {} // obf

	/** // obf
	 * Generates the columns for a single row of the table. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param object|array $v_zuxpz The current item. // obf
	 */ // obf
	protected function single_row_columns( $v_zuxpz ) { // obf
		list( $v_jimux, $v_decyn, $v_xhhmy, $v_qodbw ) = $v_wbvcz->get_column_info(); // obf

		foreach ( $v_jimux as $v_rlzws => $v_bmmpd ) { // obf
			$v_qrpij = "$v_rlzws column-$v_rlzws"; // obf
			if ( $v_qodbw === $v_rlzws ) { // obf
				$v_qrpij .= ' has-row-actions column-primary'; // obf
			} // obf

			if ( in_array( $v_rlzws, $v_decyn, true ) ) { // obf
				$v_qrpij .= ' hidden'; // obf
			} // obf

			/* // obf
			 * Comments column uses HTML in the display name with screen reader text. // obf
			 * Strip tags to get closer to a user-friendly string. // obf
			 */ // obf
			$v_bjdig = 'data-colname="' . esc_attr( wp_strip_all_tags( $v_bmmpd ) ) . '"'; // obf

			$v_bcksw = "class='$v_qrpij' $v_bjdig"; // obf

			if ( 'cb' === $v_rlzws ) { // obf
				echo '<th scope="row" class="check-column">'; // obf
				echo $v_wbvcz->column_cb( $v_zuxpz ); // obf
				echo '</th>'; // obf
			} elseif ( method_exists( $v_wbvcz, '_column_' . $v_rlzws ) ) { // obf
				echo call_user_func( // obf
					array( $v_wbvcz, '_column_' . $v_rlzws ), // obf
					$v_zuxpz, // obf
					$v_qrpij, // obf
					$v_bjdig, // obf
					$v_qodbw // obf
				); // obf
			} elseif ( method_exists( $v_wbvcz, 'column_' . $v_rlzws ) ) { // obf
				echo "<td $v_bcksw>"; // obf
				echo call_user_func( array( $v_wbvcz, 'column_' . $v_rlzws ), $v_zuxpz ); // obf
				echo $v_wbvcz->handle_row_actions( $v_zuxpz, $v_rlzws, $v_qodbw ); // obf
				echo '</td>'; // obf
			} else { // obf
				echo "<td $v_bcksw>"; // obf
				echo $v_wbvcz->column_default( $v_zuxpz, $v_rlzws ); // obf
				echo $v_wbvcz->handle_row_actions( $v_zuxpz, $v_rlzws, $v_qodbw ); // obf
				echo '</td>'; // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Generates and display row actions links for the list table. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @param object|array $v_zuxpz        The item being acted upon. // obf
	 * @param string       $v_rlzws Current column name. // obf
	 * @param string       $v_qodbw     Primary column name. // obf
	 * @return string The row actions HTML, or an empty string // obf
	 *                if the current column is not the primary column. // obf
	 */ // obf
	protected function handle_row_actions( $v_zuxpz, $v_rlzws, $v_qodbw ) { // obf
		return $v_rlzws === $v_qodbw ? '<button type="button" class="toggle-row"><span class="screen-reader-text">' . // obf
			/* translators: Hidden accessibility text. */ // obf
			__( 'Show more details' ) . // obf
		'</span></button>' : ''; // obf
	} // obf

	/** // obf
	 * Handles an incoming ajax request (called from admin-ajax.php) // obf
	 * // obf
	 * @since 3.1.0 // obf
	 */ // obf
	public function ajax_response() { // obf
		$v_wbvcz->prepare_items(); // obf

		ob_start(); // obf
		if ( ! empty( $v_ykxmc['no_placeholder'] ) ) { // obf
			$v_wbvcz->display_rows(); // obf
		} else { // obf
			$v_wbvcz->display_rows_or_placeholder(); // obf
		} // obf

		$v_lsvft = ob_get_clean(); // obf

		$v_kzofd = array( 'rows' => $v_lsvft ); // obf

		if ( isset( $v_wbvcz->_pagination_args['total_items'] ) ) { // obf
			$v_kzofd['total_items_i18n'] = sprintf( // obf
				/* translators: Number of items. */ // obf
				_n( '%s item', '%s items', $v_wbvcz->_pagination_args['total_items'] ), // obf
				number_format_i18n( $v_wbvcz->_pagination_args['total_items'] ) // obf
			); // obf
		} // obf
		if ( isset( $v_wbvcz->_pagination_args['total_pages'] ) ) { // obf
			$v_kzofd['total_pages']      = $v_wbvcz->_pagination_args['total_pages']; // obf
			$v_kzofd['total_pages_i18n'] = number_format_i18n( $v_wbvcz->_pagination_args['total_pages'] ); // obf
		} // obf

		die( wp_json_encode( $v_kzofd ) ); // obf
	} // obf

	/** // obf
	 * Sends required variables to JavaScript land. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 */ // obf
	public function _js_vars() { // obf
		$v_ezxpw = array( // obf
			'class'  => get_class( $v_wbvcz ), // obf
			'screen' => array( // obf
				'id'   => $v_wbvcz->screen->id, // obf
				'base' => $v_wbvcz->screen->base, // obf
			), // obf
		); // obf

		printf( "<script type='text/javascript'>list_args = %s;</script>\n", wp_json_encode( $v_ezxpw ) ); // obf
	} // obf
} // obf