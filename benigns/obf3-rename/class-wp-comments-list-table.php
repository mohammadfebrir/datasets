
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * List Table API: WP_Comments_List_Table class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 * @since 3.1.0 // obf
 */ // obf

/** // obf
 * Core class used to implement displaying comments in a list table. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @see WP_List_Table // obf
 */ // obf
class WP_Comments_List_Table extends WP_List_Table { // obf

	public $v_lxqwj = true; // obf

	public $v_zmbho = array(); // obf

	public $v_irzgt; // obf

	private $v_syaip; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @see WP_List_Table::__construct() for more information on default arguments. // obf
	 * // obf
	 * @global int $v_wpbrr // obf
	 * // obf
	 * @param array $v_hydbq An associative array of arguments. // obf
	 */ // obf
	public function __construct( $v_hydbq = array() ) { // obf
		global $v_wpbrr; // obf

		$v_wpbrr = isset( $v_ntjhh['p'] ) ? absint( $v_ntjhh['p'] ) : 0; // obf

		if ( get_option( 'show_avatars' ) ) { // obf
			add_filter( 'comment_author', array( $v_yquny, 'floated_admin_avatar' ), 10, 2 ); // obf
		} // obf

		parent::__construct( // obf
			array( // obf
				'plural'   => 'comments', // obf
				'singular' => 'comment', // obf
				'ajax'     => true, // obf
				'screen'   => isset( $v_hydbq['screen'] ) ? $v_hydbq['screen'] : null, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Adds avatars to comment author names. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param string $v_trtyy       Comment author name. // obf
	 * @param int    $v_eqkhh Comment ID. // obf
	 * @return string Avatar with the user name. // obf
	 */ // obf
	public function floated_admin_avatar( $v_trtyy, $v_eqkhh ) { // obf
		$v_eppvx = get_comment( $v_eqkhh ); // obf
		$v_whwcj  = get_avatar( $v_eppvx, 32, 'mystery' ); // obf
		return "$v_whwcj $v_trtyy"; // obf
	} // obf

	/** // obf
	 * @return bool // obf
	 */ // obf
	public function ajax_user_can() { // obf
		return current_user_can( 'edit_posts' ); // obf
	} // obf

	/** // obf
	 * @global string $v_hmcpw           List table view mode. // obf
	 * @global int    $v_wpbrr // obf
	 * @global string $v_pirgp // obf
	 * @global string $v_qyevp // obf
	 * @global string $v_dzqqi // obf
	 */ // obf
	public function prepare_items() { // obf
		global $v_hmcpw, $v_wpbrr, $v_pirgp, $v_qyevp, $v_dzqqi; // obf

		if ( ! empty( $v_ntjhh['mode'] ) ) { // obf
			$v_hmcpw = 'excerpt' === $v_ntjhh['mode'] ? 'excerpt' : 'list'; // obf
			set_user_setting( 'posts_list_mode', $v_hmcpw ); // obf
		} else { // obf
			$v_hmcpw = get_user_setting( 'posts_list_mode', 'list' ); // obf
		} // obf

		$v_pirgp = isset( $v_ntjhh['comment_status'] ) ? $v_ntjhh['comment_status'] : 'all'; // obf

		if ( ! in_array( $v_pirgp, array( 'all', 'mine', 'moderated', 'approved', 'spam', 'trash' ), true ) ) { // obf
			$v_pirgp = 'all'; // obf
		} // obf

		$v_qyevp = ! empty( $v_ntjhh['comment_type'] ) ? $v_ntjhh['comment_type'] : ''; // obf

		$v_dzqqi = ( isset( $v_ntjhh['s'] ) ) ? $v_ntjhh['s'] : ''; // obf

		$v_tsiqr = ( isset( $v_ntjhh['post_type'] ) ) ? sanitize_key( $v_ntjhh['post_type'] ) : ''; // obf

		$v_zmxpj = ( isset( $v_ntjhh['user_id'] ) ) ? $v_ntjhh['user_id'] : ''; // obf

		$v_wnooe = ( isset( $v_ntjhh['orderby'] ) ) ? $v_ntjhh['orderby'] : ''; // obf
		$v_bcgkn   = ( isset( $v_ntjhh['order'] ) ) ? $v_ntjhh['order'] : ''; // obf

		$v_lduoa = $v_yquny->get_per_page( $v_pirgp ); // obf

		$v_cyall = wp_doing_ajax(); // obf

		if ( isset( $v_ntjhh['number'] ) ) { // obf
			$v_vgbhz = (int) $v_ntjhh['number']; // obf
		} else { // obf
			$v_vgbhz = $v_lduoa + min( 8, $v_lduoa ); // Grab a few extra. // obf
		} // obf

		$v_nrhad = $v_yquny->get_pagenum(); // obf

		if ( isset( $v_ntjhh['start'] ) ) { // obf
			$v_jqgll = $v_ntjhh['start']; // obf
		} else { // obf
			$v_jqgll = ( $v_nrhad - 1 ) * $v_lduoa; // obf
		} // obf

		if ( $v_cyall && isset( $v_ntjhh['offset'] ) ) { // obf
			$v_jqgll += $v_ntjhh['offset']; // obf
		} // obf

		$v_tenao = array( // obf
			'mine'      => '', // obf
			'moderated' => 'hold', // obf
			'approved'  => 'approve', // obf
			'all'       => '', // obf
		); // obf

		$v_hydbq = array( // obf
			'status'                    => isset( $v_tenao[ $v_pirgp ] ) ? $v_tenao[ $v_pirgp ] : $v_pirgp, // obf
			'search'                    => $v_dzqqi, // obf
			'user_id'                   => $v_zmxpj, // obf
			'offset'                    => $v_jqgll, // obf
			'number'                    => $v_vgbhz, // obf
			'post_id'                   => $v_wpbrr, // obf
			'type'                      => $v_qyevp, // obf
			'orderby'                   => $v_wnooe, // obf
			'order'                     => $v_bcgkn, // obf
			'post_type'                 => $v_tsiqr, // obf
			'update_comment_post_cache' => true, // obf
		); // obf

		/** // obf
		 * Filters the arguments for the comment query in the comments list table. // obf
		 * // obf
		 * @since 5.1.0 // obf
		 * // obf
		 * @param array $v_hydbq An array of get_comments() arguments. // obf
		 */ // obf
		$v_hydbq = apply_filters( 'comments_list_table_query_args', $v_hydbq ); // obf

		$v_bthzw = get_comments( $v_hydbq ); // obf

		if ( is_array( $v_bthzw ) ) { // obf
			$v_yquny->items       = array_slice( $v_bthzw, 0, $v_lduoa ); // obf
			$v_yquny->extra_items = array_slice( $v_bthzw, $v_lduoa ); // obf

			$v_okeag = array_unique( wp_list_pluck( $v_bthzw, 'comment_post_ID' ) ); // obf

			$v_yquny->pending_count = get_pending_comments_num( $v_okeag ); // obf
		} // obf

		$v_syxlm = get_comments( // obf
			array_merge( // obf
				$v_hydbq, // obf
				array( // obf
					'count'   => true, // obf
					'offset'  => 0, // obf
					'number'  => 0, // obf
					'orderby' => 'none', // obf
				) // obf
			) // obf
		); // obf

		$v_yquny->set_pagination_args( // obf
			array( // obf
				'total_items' => $v_syxlm, // obf
				'per_page'    => $v_lduoa, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * @param string $v_pirgp // obf
	 * @return int // obf
	 */ // obf
	public function get_per_page( $v_pirgp = 'all' ) { // obf
		$v_lduoa = $v_yquny->get_items_per_page( 'edit_comments_per_page' ); // obf

		/** // obf
		 * Filters the number of comments listed per page in the comments list table. // obf
		 * // obf
		 * @since 2.6.0 // obf
		 * // obf
		 * @param int    $v_lduoa The number of comments to list per page. // obf
		 * @param string $v_pirgp    The comment status name. Default 'All'. // obf
		 */ // obf
		return apply_filters( 'comments_per_page', $v_lduoa, $v_pirgp ); // obf
	} // obf

	/** // obf
	 * @global string $v_pirgp // obf
	 */ // obf
	public function no_items() { // obf
		global $v_pirgp; // obf

		if ( 'moderated' === $v_pirgp ) { // obf
			_e( 'No comments awaiting moderation.' ); // obf
		} elseif ( 'trash' === $v_pirgp ) { // obf
			_e( 'No comments found in Trash.' ); // obf
		} else { // obf
			_e( 'No comments found.' ); // obf
		} // obf
	} // obf

	/** // obf
	 * @global int $v_wpbrr // obf
	 * @global string $v_pirgp // obf
	 * @global string $v_qyevp // obf
	 */ // obf
	protected function get_views() { // obf
		global $v_wpbrr, $v_pirgp, $v_qyevp; // obf

		$v_djlhw = array(); // obf
		$v_rmabk = ( $v_wpbrr ) ? wp_count_comments( $v_wpbrr ) : wp_count_comments(); // obf

		$v_dlrov = array( // obf
			/* translators: %s: Number of comments. */ // obf
			'all'       => _nx_noop( // obf
				'All <span class="count">(%s)</span>', // obf
				'All <span class="count">(%s)</span>', // obf
				'comments' // obf
			), // Singular not used. // obf

			/* translators: %s: Number of comments. */ // obf
			'mine'      => _nx_noop( // obf
				'Mine <span class="count">(%s)</span>', // obf
				'Mine <span class="count">(%s)</span>', // obf
				'comments' // obf
			), // obf

			/* translators: %s: Number of comments. */ // obf
			'moderated' => _nx_noop( // obf
				'Pending <span class="count">(%s)</span>', // obf
				'Pending <span class="count">(%s)</span>', // obf
				'comments' // obf
			), // obf

			/* translators: %s: Number of comments. */ // obf
			'approved'  => _nx_noop( // obf
				'Approved <span class="count">(%s)</span>', // obf
				'Approved <span class="count">(%s)</span>', // obf
				'comments' // obf
			), // obf

			/* translators: %s: Number of comments. */ // obf
			'spam'      => _nx_noop( // obf
				'Spam <span class="count">(%s)</span>', // obf
				'Spam <span class="count">(%s)</span>', // obf
				'comments' // obf
			), // obf

			/* translators: %s: Number of comments. */ // obf
			'trash'     => _nx_noop( // obf
				'Trash <span class="count">(%s)</span>', // obf
				'Trash <span class="count">(%s)</span>', // obf
				'comments' // obf
			), // obf
		); // obf

		if ( ! EMPTY_TRASH_DAYS ) { // obf
			unset( $v_dlrov['trash'] ); // obf
		} // obf

		$v_psvua = admin_url( 'edit-comments.php' ); // obf

		if ( ! empty( $v_qyevp ) && 'all' !== $v_qyevp ) { // obf
			$v_psvua = add_query_arg( 'comment_type', $v_qyevp, $v_psvua ); // obf
		} // obf

		foreach ( $v_dlrov as $v_yorfn => $v_jgkuy ) { // obf
			if ( 'mine' === $v_yorfn ) { // obf
				$v_mghnt    = get_current_user_id(); // obf
				$v_rmabk->mine = get_comments( // obf
					array( // obf
						'post_id' => $v_wpbrr ? $v_wpbrr : 0, // obf
						'user_id' => $v_mghnt, // obf
						'count'   => true, // obf
						'orderby' => 'none', // obf
					) // obf
				); // obf
				$v_psvua               = add_query_arg( 'user_id', $v_mghnt, $v_psvua ); // obf
			} else { // obf
				$v_psvua = remove_query_arg( 'user_id', $v_psvua ); // obf
			} // obf

			if ( ! isset( $v_rmabk->$v_yorfn ) ) { // obf
				$v_rmabk->$v_yorfn = 10; // obf
			} // obf

			$v_psvua = add_query_arg( 'comment_status', $v_yorfn, $v_psvua ); // obf

			if ( $v_wpbrr ) { // obf
				$v_psvua = add_query_arg( 'p', absint( $v_wpbrr ), $v_psvua ); // obf
			} // obf

			/* // obf
			// I toyed with this, but decided against it. Leaving it in here in case anyone thinks it is a good idea. ~ Mark // obf
			if ( !empty( $v_ntjhh['s'] ) ) // obf
				$v_psvua = add_query_arg( 's', esc_attr( wp_unslash( $v_ntjhh['s'] ) ), $v_psvua ); // obf
			*/ // obf

			$v_djlhw[ $v_yorfn ] = array( // obf
				'url'     => esc_url( $v_psvua ), // obf
				'label'   => sprintf( // obf
					translate_nooped_plural( $v_jgkuy, $v_rmabk->$v_yorfn ), // obf
					sprintf( // obf
						'<span class="%s-count">%s</span>', // obf
						( 'moderated' === $v_yorfn ) ? 'pending' : $v_yorfn, // obf
						number_format_i18n( $v_rmabk->$v_yorfn ) // obf
					) // obf
				), // obf
				'current' => $v_yorfn === $v_pirgp, // obf
			); // obf
		} // obf

		/** // obf
		 * Filters the comment status links. // obf
		 * // obf
		 * @since 2.5.0 // obf
		 * @since 5.1.0 The 'Mine' link was added. // obf
		 * // obf
		 * @param string[] $v_djlhw An associative array of fully-formed comment status links. Includes 'All', 'Mine', // obf
		 *                              'Pending', 'Approved', 'Spam', and 'Trash'. // obf
		 */ // obf
		return apply_filters( 'comment_status_links', $v_yquny->get_views_links( $v_djlhw ) ); // obf
	} // obf

	/** // obf
	 * @global string $v_pirgp // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	protected function get_bulk_actions() { // obf
		global $v_pirgp; // obf

		if ( ! current_user_can( 'moderate_comments' ) ) { // obf
			return array(); // Return an empty array if the user doesn't have permission // obf
		} // obf

		$v_bolav = array(); // obf

		if ( in_array( $v_pirgp, array( 'all', 'approved' ), true ) ) { // obf
			$v_bolav['unapprove'] = __( 'Unapprove' ); // obf
		} // obf

		if ( in_array( $v_pirgp, array( 'all', 'moderated' ), true ) ) { // obf
			$v_bolav['approve'] = __( 'Approve' ); // obf
		} // obf

		if ( in_array( $v_pirgp, array( 'all', 'moderated', 'approved', 'trash' ), true ) ) { // obf
			$v_bolav['spam'] = _x( 'Mark as spam', 'comment' ); // obf
		} // obf

		if ( 'trash' === $v_pirgp ) { // obf
			$v_bolav['untrash'] = __( 'Restore' ); // obf
		} elseif ( 'spam' === $v_pirgp ) { // obf
			$v_bolav['unspam'] = _x( 'Not spam', 'comment' ); // obf
		} // obf

		if ( in_array( $v_pirgp, array( 'trash', 'spam' ), true ) || ! EMPTY_TRASH_DAYS ) { // obf
			$v_bolav['delete'] = __( 'Delete permanently' ); // obf
		} else { // obf
			$v_bolav['trash'] = __( 'Move to Trash' ); // obf
		} // obf

		return $v_bolav; // obf
	} // obf

	/** // obf
	 * @global string $v_pirgp // obf
	 * @global string $v_qyevp // obf
	 * // obf
	 * @param string $v_vctoi // obf
	 */ // obf
	protected function extra_tablenav( $v_vctoi ) { // obf
		global $v_pirgp, $v_qyevp; // obf
		static $v_cbrae; // obf

		if ( ! isset( $v_cbrae ) ) { // obf
			$v_cbrae = $v_yquny->has_items(); // obf
		} // obf

		echo '<div class="alignleft actions">'; // obf

		if ( 'top' === $v_vctoi ) { // obf
			ob_start(); // obf

			$v_yquny->comment_type_dropdown( $v_qyevp ); // obf

			/** // obf
			 * Fires just before the Filter submit button for comment types. // obf
			 * // obf
			 * @since 3.5.0 // obf
			 */ // obf
			do_action( 'restrict_manage_comments' ); // obf

			$v_qlddd = ob_get_clean(); // obf

			if ( ! empty( $v_qlddd ) && $v_yquny->has_items() ) { // obf
				echo $v_qlddd; // obf
				submit_button( __( 'Filter' ), '', 'filter_action', false, array( 'id' => 'post-query-submit' ) ); // obf
			} // obf
		} // obf

		if ( ( 'spam' === $v_pirgp || 'trash' === $v_pirgp ) && $v_cbrae // obf
			&& current_user_can( 'moderate_comments' ) // obf
		) { // obf
			wp_nonce_field( 'bulk-destroy', '_destroy_nonce' ); // obf
			$v_reqjx = ( 'spam' === $v_pirgp ) ? esc_attr__( 'Empty Spam' ) : esc_attr__( 'Empty Trash' ); // obf
			submit_button( $v_reqjx, 'apply', 'delete_all', false ); // obf
		} // obf

		/** // obf
		 * Fires after the Filter submit button for comment types. // obf
		 * // obf
		 * @since 2.5.0 // obf
		 * @since 5.6.0 The `$v_vctoi` parameter was added. // obf
		 * // obf
		 * @param string $v_pirgp The comment status name. Default 'All'. // obf
		 * @param string $v_vctoi          The location of the extra table nav markup: Either 'top' or 'bottom'. // obf
		 */ // obf
		do_action( 'manage_comments_nav', $v_pirgp, $v_vctoi ); // obf

		echo '</div>'; // obf
	} // obf

	/** // obf
	 * @return string|false // obf
	 */ // obf
	public function current_action() { // obf
		if ( isset( $v_ntjhh['delete_all'] ) || isset( $v_ntjhh['delete_all2'] ) ) { // obf
			return 'delete_all'; // obf
		} // obf

		return parent::current_action(); // obf
	} // obf

	/** // obf
	 * @global int $v_wpbrr // obf
	 * // obf
	 * @return string[] Array of column titles keyed by their column name. // obf
	 */ // obf
	public function get_columns() { // obf
		global $v_wpbrr; // obf

		$v_prjgv = array(); // obf

		if ( $v_yquny->checkbox ) { // obf
			$v_prjgv['cb'] = '<input type="checkbox" />'; // obf
		} // obf

		$v_prjgv['author']  = __( 'Author' ); // obf
		$v_prjgv['comment'] = _x( 'Comment', 'column name' ); // obf

		if ( ! $v_wpbrr ) { // obf
			/* translators: Column name or table row header. */ // obf
			$v_prjgv['response'] = __( 'In response to' ); // obf
		} // obf

		$v_prjgv['date'] = _x( 'Submitted on', 'column name' ); // obf

		return $v_prjgv; // obf
	} // obf

	/** // obf
	 * Displays a comment type drop-down for filtering on the Comments list table. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @since 5.6.0 Renamed from `comment_status_dropdown()` to `comment_type_dropdown()`. // obf
	 * // obf
	 * @param string $v_qyevp The current comment type slug. // obf
	 */ // obf
	protected function comment_type_dropdown( $v_qyevp ) { // obf
		/** // obf
		 * Filters the comment types shown in the drop-down menu on the Comments list table. // obf
		 * // obf
		 * @since 2.7.0 // obf
		 * // obf
		 * @param string[] $v_zehgz Array of comment type labels keyed by their name. // obf
		 */ // obf
		$v_zehgz = apply_filters( // obf
			'admin_comment_types_dropdown', // obf
			array( // obf
				'comment' => __( 'Comments' ), // obf
				'pings'   => __( 'Pings' ), // obf
			) // obf
		); // obf

		if ( $v_zehgz && is_array( $v_zehgz ) ) { // obf
			printf( // obf
				'<label class="screen-reader-text" for="filter-by-comment-type">%s</label>', // obf
				/* translators: Hidden accessibility text. */ // obf
				__( 'Filter by comment type' ) // obf
			); // obf

			echo '<select id="filter-by-comment-type" name="comment_type">'; // obf

			printf( "\t<option value=''>%s</option>", __( 'All comment types' ) ); // obf

			foreach ( $v_zehgz as $v_mulug => $v_jgkuy ) { // obf
				if ( get_comments( // obf
					array( // obf
						'count'   => true, // obf
						'orderby' => 'none', // obf
						'type'    => $v_mulug, // obf
					) // obf
				) ) { // obf
					printf( // obf
						"\t<option value='%s'%s>%s</option>\n", // obf
						esc_attr( $v_mulug ), // obf
						selected( $v_qyevp, $v_mulug, false ), // obf
						esc_html( $v_jgkuy ) // obf
					); // obf
				} // obf
			} // obf

			echo '</select>'; // obf
		} // obf
	} // obf

	/** // obf
	 * @return array // obf
	 */ // obf
	protected function get_sortable_columns() { // obf
		return array( // obf
			'author'   => array( 'comment_author', false, __( 'Author' ), __( 'Table ordered by Comment Author.' ) ), // obf
			'response' => array( 'comment_post_ID', false, _x( 'In Response To', 'column name' ), __( 'Table ordered by Post Replied To.' ) ), // obf
			'date'     => 'comment_date', // obf
		); // obf
	} // obf

	/** // obf
	 * Gets the name of the default primary column. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @return string Name of the default primary column, in this case, 'comment'. // obf
	 */ // obf
	protected function get_default_primary_column_name() { // obf
		return 'comment'; // obf
	} // obf

	/** // obf
	 * Displays the comments table. // obf
	 * // obf
	 * Overrides the parent display() method to render extra comments. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 */ // obf
	public function display() { // obf
		wp_nonce_field( 'fetch-list-' . get_class( $v_yquny ), '_ajax_fetch_list_nonce' ); // obf
		static $v_cbrae; // obf

		if ( ! isset( $v_cbrae ) ) { // obf
			$v_cbrae = $v_yquny->has_items(); // obf

			if ( $v_cbrae ) { // obf
				$v_yquny->display_tablenav( 'top' ); // obf
			} // obf
		} // obf

		$v_yquny->screen->render_screen_reader_content( 'heading_list' ); // obf

		?> // obf
<table class="wp-list-table <?php echo implode( ' ', $v_yquny->get_table_classes() ); ?>"> // obf
		<?php // obf
		if ( ! isset( $v_wkkqs['orderby'] ) ) { // obf
			// In the initial view, Comments are ordered by comment's date but there's no column for that. // obf
			echo '<caption class="screen-reader-text">' . // obf
			/* translators: Hidden accessibility text. */ // obf
			__( 'Ordered by Comment Date, descending.' ) . // obf
			'</caption>'; // obf
		} else { // obf
			$v_yquny->print_table_description(); // obf
		} // obf
		?> // obf
	<thead> // obf
	<tr> // obf
		<?php $v_yquny->print_column_headers(); ?> // obf
	</tr> // obf
	</thead> // obf

	<tbody id="the-comment-list" data-wp-lists="list:comment"> // obf
		<?php $v_yquny->display_rows_or_placeholder(); ?> // obf
	</tbody> // obf

	<tbody id="the-extra-comment-list" data-wp-lists="list:comment" style="display: none;"> // obf
		<?php // obf
			/* // obf
			 * Back up the items to restore after printing the extra items markup. // obf
			 * The extra items may be empty, which will prevent the table nav from displaying later. // obf
			 */ // obf
			$v_wotll       = $v_yquny->items; // obf
			$v_yquny->items = $v_yquny->extra_items; // obf
			$v_yquny->display_rows_or_placeholder(); // obf
			$v_yquny->items = $v_wotll; // obf
		?> // obf
	</tbody> // obf

	<tfoot> // obf
	<tr> // obf
		<?php $v_yquny->print_column_headers( false ); ?> // obf
	</tr> // obf
	</tfoot> // obf

</table> // obf
		<?php // obf

		$v_yquny->display_tablenav( 'bottom' ); // obf
	} // obf

	/** // obf
	 * @global WP_Post    $v_ozwxk    Global post object. // obf
	 * @global WP_Comment $v_eppvx Global comment object. // obf
	 * // obf
	 * @param WP_Comment $v_rhefa // obf
	 */ // obf
	public function single_row( $v_rhefa ) { // obf
		global $v_ozwxk, $v_eppvx; // obf

		// Restores the more descriptive, specific name for use within this method. // obf
		$v_eppvx = $v_rhefa; // obf

		if ( $v_eppvx->comment_post_ID > 0 ) { // obf
			$v_ozwxk = get_post( $v_eppvx->comment_post_ID ); // obf
		} // obf

		$v_bhlnh = $v_ozwxk ? 'edit_post' : 'edit_posts'; // obf

		if ( ! current_user_can( $v_bhlnh, $v_eppvx->comment_post_ID ) // obf
			&& ( post_password_required( $v_eppvx->comment_post_ID ) // obf
				|| ! current_user_can( 'read_post', $v_eppvx->comment_post_ID ) ) // obf
		) { // obf
			// The user has no access to the post and thus cannot see the comments. // obf
			return false; // obf
		} // obf

		$v_opxvc = wp_get_comment_status( $v_eppvx ); // obf

		if ( ! $v_opxvc ) { // obf
			$v_opxvc = ''; // obf
		} // obf

		$v_opxvc = implode( ' ', get_comment_class( $v_opxvc, $v_eppvx, $v_eppvx->comment_post_ID ) ); // obf

		$v_yquny->user_can = current_user_can( 'edit_comment', $v_eppvx->comment_ID ); // obf

		echo "<tr id='comment-$v_eppvx->comment_ID' class='$v_opxvc'>"; // obf
		$v_yquny->single_row_columns( $v_eppvx ); // obf
		echo "</tr>\n"; // obf

		unset( $v_coaib['post'], $v_coaib['comment'] ); // obf
	} // obf

	/** // obf
	 * Generates and displays row actions links. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @since 5.9.0 Renamed `$v_eppvx` to `$v_rhefa` to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @global string $v_pirgp Status for the current listed comments. // obf
	 * // obf
	 * @param WP_Comment $v_rhefa        The comment object. // obf
	 * @param string     $v_bteen Current column name. // obf
	 * @param string     $v_uiefm     Primary column name. // obf
	 * @return string Row actions output for comments. An empty string // obf
	 *                if the current column is not the primary column, // obf
	 *                or if the current user cannot edit the comment. // obf
	 */ // obf
	protected function handle_row_actions( $v_rhefa, $v_bteen, $v_uiefm ) { // obf
		global $v_pirgp; // obf

		if ( $v_uiefm !== $v_bteen ) { // obf
			return ''; // obf
		} // obf

		if ( ! $v_yquny->user_can ) { // obf
			return ''; // obf
		} // obf

		// Restores the more descriptive, specific name for use within this method. // obf
		$v_eppvx = $v_rhefa; // obf

		$v_tcaeu = wp_get_comment_status( $v_eppvx ); // obf

		$v_qlddd = ''; // obf

		$v_gbttn = esc_html( '_wpnonce=' . wp_create_nonce( 'approve-comment_' . $v_eppvx->comment_ID ) ); // obf
		$v_kwsos     = esc_html( '_wpnonce=' . wp_create_nonce( 'delete-comment_' . $v_eppvx->comment_ID ) ); // obf

		$v_beggl = 'comment.php?action=%s&c=' . $v_eppvx->comment_ID . '&%s'; // obf

		$v_qhrpj   = sprintf( $v_beggl, 'approvecomment', $v_gbttn ); // obf
		$v_guhuc = sprintf( $v_beggl, 'unapprovecomment', $v_gbttn ); // obf
		$v_hhsyx      = sprintf( $v_beggl, 'spamcomment', $v_kwsos ); // obf
		$v_qwrdc    = sprintf( $v_beggl, 'unspamcomment', $v_kwsos ); // obf
		$v_lyvzr     = sprintf( $v_beggl, 'trashcomment', $v_kwsos ); // obf
		$v_fejgi   = sprintf( $v_beggl, 'untrashcomment', $v_kwsos ); // obf
		$v_lijeh    = sprintf( $v_beggl, 'deletecomment', $v_kwsos ); // obf

		// Preorder it: Approve | Reply | Quick Edit | Edit | Spam | Trash. // obf
		$v_bolav = array( // obf
			'approve'   => '', // obf
			'unapprove' => '', // obf
			'reply'     => '', // obf
			'quickedit' => '', // obf
			'edit'      => '', // obf
			'spam'      => '', // obf
			'unspam'    => '', // obf
			'trash'     => '', // obf
			'untrash'   => '', // obf
			'delete'    => '', // obf
		); // obf

		// Not looking at all comments. // obf
		if ( $v_pirgp && 'all' !== $v_pirgp ) { // obf
			if ( 'approved' === $v_tcaeu ) { // obf
				$v_bolav['unapprove'] = sprintf( // obf
					'<a href="%s" data-wp-lists="%s" class="vim-u vim-destructive aria-button-if-js" aria-label="%s">%s</a>', // obf
					esc_url( $v_guhuc ), // obf
					"delete:the-comment-list:comment-{$v_eppvx->comment_ID}:e7e7d3:action=dim-comment&amp;new=unapproved", // obf
					esc_attr__( 'Unapprove this comment' ), // obf
					__( 'Unapprove' ) // obf
				); // obf
			} elseif ( 'unapproved' === $v_tcaeu ) { // obf
				$v_bolav['approve'] = sprintf( // obf
					'<a href="%s" data-wp-lists="%s" class="vim-a vim-destructive aria-button-if-js" aria-label="%s">%s</a>', // obf
					esc_url( $v_qhrpj ), // obf
					"delete:the-comment-list:comment-{$v_eppvx->comment_ID}:e7e7d3:action=dim-comment&amp;new=approved", // obf
					esc_attr__( 'Approve this comment' ), // obf
					__( 'Approve' ) // obf
				); // obf
			} // obf
		} else { // obf
			$v_bolav['approve'] = sprintf( // obf
				'<a href="%s" data-wp-lists="%s" class="vim-a aria-button-if-js" aria-label="%s">%s</a>', // obf
				esc_url( $v_qhrpj ), // obf
				"dim:the-comment-list:comment-{$v_eppvx->comment_ID}:unapproved:e7e7d3:e7e7d3:new=approved", // obf
				esc_attr__( 'Approve this comment' ), // obf
				__( 'Approve' ) // obf
			); // obf

			$v_bolav['unapprove'] = sprintf( // obf
				'<a href="%s" data-wp-lists="%s" class="vim-u aria-button-if-js" aria-label="%s">%s</a>', // obf
				esc_url( $v_guhuc ), // obf
				"dim:the-comment-list:comment-{$v_eppvx->comment_ID}:unapproved:e7e7d3:e7e7d3:new=unapproved", // obf
				esc_attr__( 'Unapprove this comment' ), // obf
				__( 'Unapprove' ) // obf
			); // obf
		} // obf

		if ( 'spam' !== $v_tcaeu ) { // obf
			$v_bolav['spam'] = sprintf( // obf
				'<a href="%s" data-wp-lists="%s" class="vim-s vim-destructive aria-button-if-js" aria-label="%s">%s</a>', // obf
				esc_url( $v_hhsyx ), // obf
				"delete:the-comment-list:comment-{$v_eppvx->comment_ID}::spam=1", // obf
				esc_attr__( 'Mark this comment as spam' ), // obf
				/* translators: "Mark as spam" link. */ // obf
				_x( 'Spam', 'verb' ) // obf
			); // obf
		} elseif ( 'spam' === $v_tcaeu ) { // obf
			$v_bolav['unspam'] = sprintf( // obf
				'<a href="%s" data-wp-lists="%s" class="vim-z vim-destructive aria-button-if-js" aria-label="%s">%s</a>', // obf
				esc_url( $v_qwrdc ), // obf
				"delete:the-comment-list:comment-{$v_eppvx->comment_ID}:66cc66:unspam=1", // obf
				esc_attr__( 'Restore this comment from the spam' ), // obf
				_x( 'Not Spam', 'comment' ) // obf
			); // obf
		} // obf

		if ( 'trash' === $v_tcaeu ) { // obf
			$v_bolav['untrash'] = sprintf( // obf
				'<a href="%s" data-wp-lists="%s" class="vim-z vim-destructive aria-button-if-js" aria-label="%s">%s</a>', // obf
				esc_url( $v_fejgi ), // obf
				"delete:the-comment-list:comment-{$v_eppvx->comment_ID}:66cc66:untrash=1", // obf
				esc_attr__( 'Restore this comment from the Trash' ), // obf
				__( 'Restore' ) // obf
			); // obf
		} // obf

		if ( 'spam' === $v_tcaeu || 'trash' === $v_tcaeu || ! EMPTY_TRASH_DAYS ) { // obf
			$v_bolav['delete'] = sprintf( // obf
				'<a href="%s" data-wp-lists="%s" class="delete vim-d vim-destructive aria-button-if-js" aria-label="%s">%s</a>', // obf
				esc_url( $v_lijeh ), // obf
				"delete:the-comment-list:comment-{$v_eppvx->comment_ID}::delete=1", // obf
				esc_attr__( 'Delete this comment permanently' ), // obf
				__( 'Delete Permanently' ) // obf
			); // obf
		} else { // obf
			$v_bolav['trash'] = sprintf( // obf
				'<a href="%s" data-wp-lists="%s" class="delete vim-d vim-destructive aria-button-if-js" aria-label="%s">%s</a>', // obf
				esc_url( $v_lyvzr ), // obf
				"delete:the-comment-list:comment-{$v_eppvx->comment_ID}::trash=1", // obf
				esc_attr__( 'Move this comment to the Trash' ), // obf
				_x( 'Trash', 'verb' ) // obf
			); // obf
		} // obf

		if ( 'spam' !== $v_tcaeu && 'trash' !== $v_tcaeu ) { // obf
			$v_bolav['edit'] = sprintf( // obf
				'<a href="%s" aria-label="%s">%s</a>', // obf
				"comment.php?action=editcomment&amp;c={$v_eppvx->comment_ID}", // obf
				esc_attr__( 'Edit this comment' ), // obf
				__( 'Edit' ) // obf
			); // obf

			$v_woofx = '<button type="button" data-comment-id="%d" data-post-id="%d" data-action="%s" class="%s button-link" aria-expanded="false" aria-label="%s">%s</button>'; // obf

			$v_bolav['quickedit'] = sprintf( // obf
				$v_woofx, // obf
				$v_eppvx->comment_ID, // obf
				$v_eppvx->comment_post_ID, // obf
				'edit', // obf
				'vim-q comment-inline', // obf
				esc_attr__( 'Quick edit this comment inline' ), // obf
				__( 'Quick&nbsp;Edit' ) // obf
			); // obf

			$v_bolav['reply'] = sprintf( // obf
				$v_woofx, // obf
				$v_eppvx->comment_ID, // obf
				$v_eppvx->comment_post_ID, // obf
				'replyto', // obf
				'vim-r comment-inline', // obf
				esc_attr__( 'Reply to this comment' ), // obf
				__( 'Reply' ) // obf
			); // obf
		} // obf

		/** // obf
		 * Filters the action links displayed for each comment in the Comments list table. // obf
		 * // obf
		 * @since 2.6.0 // obf
		 * // obf
		 * @param string[]   $v_bolav An array of comment actions. Default actions include: // obf
		 *                            'Approve', 'Unapprove', 'Edit', 'Reply', 'Spam', // obf
		 *                            'Delete', and 'Trash'. // obf
		 * @param WP_Comment $v_eppvx The comment object. // obf
		 */ // obf
		$v_bolav = apply_filters( 'comment_row_actions', array_filter( $v_bolav ), $v_eppvx ); // obf

		$v_pwrvq = false; // obf

		$v_hmcpw = get_user_setting( 'posts_list_mode', 'list' ); // obf

		if ( 'excerpt' === $v_hmcpw ) { // obf
			$v_pwrvq = true; // obf
		} // obf

		$v_qlddd .= '<div class="' . ( $v_pwrvq ? 'row-actions visible' : 'row-actions' ) . '">'; // obf

		$v_botbk = 0; // obf

		foreach ( $v_bolav as $v_cacru => $v_psvua ) { // obf
			++$v_botbk; // obf

			if ( ( ( 'approve' === $v_cacru || 'unapprove' === $v_cacru ) && 2 === $v_botbk ) // obf
				|| 1 === $v_botbk // obf
			) { // obf
				$v_jkurk = ''; // obf
			} else { // obf
				$v_jkurk = ' | '; // obf
			} // obf

			// Reply and quickedit need a hide-if-no-js span when not added with Ajax. // obf
			if ( ( 'reply' === $v_cacru || 'quickedit' === $v_cacru ) && ! wp_doing_ajax() ) { // obf
				$v_cacru .= ' hide-if-no-js'; // obf
			} elseif ( ( 'untrash' === $v_cacru && 'trash' === $v_tcaeu ) // obf
				|| ( 'unspam' === $v_cacru && 'spam' === $v_tcaeu ) // obf
			) { // obf
				if ( '1' === get_comment_meta( $v_eppvx->comment_ID, '_wp_trash_meta_status', true ) ) { // obf
					$v_cacru .= ' approve'; // obf
				} else { // obf
					$v_cacru .= ' unapprove'; // obf
				} // obf
			} // obf

			$v_qlddd .= "<span class='$v_cacru'>{$v_jkurk}{$v_psvua}</span>"; // obf
		} // obf

		$v_qlddd .= '</div>'; // obf

		$v_qlddd .= '<button type="button" class="toggle-row"><span class="screen-reader-text">' . // obf
			/* translators: Hidden accessibility text. */ // obf
			__( 'Show more details' ) . // obf
		'</span></button>'; // obf

		return $v_qlddd; // obf
	} // obf

	/** // obf
	 * @since 5.9.0 Renamed `$v_eppvx` to `$v_rhefa` to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @param WP_Comment $v_rhefa The comment object. // obf
	 */ // obf
	public function column_cb( $v_rhefa ) { // obf
		// Restores the more descriptive, specific name for use within this method. // obf
		$v_eppvx = $v_rhefa; // obf

		if ( $v_yquny->user_can ) { // obf
			?> // obf
		<input id="cb-select-<?php echo $v_eppvx->comment_ID; ?>" type="checkbox" name="delete_comments[]" value="<?php echo $v_eppvx->comment_ID; ?>" /> // obf
		<label for="cb-select-<?php echo $v_eppvx->comment_ID; ?>"> // obf
			<span class="screen-reader-text"> // obf
			<?php // obf
			/* translators: Hidden accessibility text. */ // obf
			_e( 'Select comment' ); // obf
			?> // obf
			</span> // obf
		</label> // obf
			<?php // obf
		} // obf
	} // obf

	/** // obf
	 * @param WP_Comment $v_eppvx The comment object. // obf
	 */ // obf
	public function column_comment( $v_eppvx ) { // obf
		echo '<div class="comment-author">'; // obf
			$v_yquny->column_author( $v_eppvx ); // obf
		echo '</div>'; // obf

		if ( $v_eppvx->comment_parent ) { // obf
			$v_nogry = get_comment( $v_eppvx->comment_parent ); // obf

			if ( $v_nogry ) { // obf
				$v_yuykj = esc_url( get_comment_link( $v_nogry ) ); // obf
				$v_trtyy        = get_comment_author( $v_nogry ); // obf
				printf( // obf
					/* translators: %s: Comment link. */ // obf
					__( 'In reply to %s.' ), // obf
					'<a href="' . $v_yuykj . '">' . $v_trtyy . '</a>' // obf
				); // obf
			} // obf
		} // obf

		comment_text( $v_eppvx ); // obf

		if ( $v_yquny->user_can ) { // obf
			/** This filter is documented in wp-admin/includes/comment.php */ // obf
			$v_nvode = apply_filters( 'comment_edit_pre', $v_eppvx->comment_content ); // obf
			?> // obf
		<div id="inline-<?php echo $v_eppvx->comment_ID; ?>" class="hidden"> // obf
			<textarea class="comment" rows="1" cols="1"><?php echo esc_textarea( $v_nvode ); ?></textarea> // obf
			<div class="author-email"><?php echo esc_html( $v_eppvx->comment_author_email ); ?></div> // obf
			<div class="author"><?php echo esc_html( $v_eppvx->comment_author ); ?></div> // obf
			<div class="author-url"><?php echo esc_url( $v_eppvx->comment_author_url ); ?></div> // obf
			<div class="comment_status"><?php echo $v_eppvx->comment_approved; ?></div> // obf
		</div> // obf
			<?php // obf
		} // obf
	} // obf

	/** // obf
	 * @global string $v_pirgp // obf
	 * // obf
	 * @param WP_Comment $v_eppvx The comment object. // obf
	 */ // obf
	public function column_author( $v_eppvx ) { // obf
		global $v_pirgp; // obf

		$v_nfvkl = get_comment_author_url( $v_eppvx ); // obf

		$v_nyioj = untrailingslashit( __fn_37772( '|^http(s)?://(www\.)?|i', '', $v_nfvkl ) ); // obf

		if ( strlen( $v_nyioj ) > 50 ) { // obf
			$v_nyioj = wp_html_excerpt( $v_nyioj, 49, '&hellip;' ); // obf
		} // obf

		echo '<strong>'; // obf
		comment_author( $v_eppvx ); // obf
		echo '</strong><br />'; // obf

		if ( ! empty( $v_nyioj ) ) { // obf
			// Print link to author URL, and disallow referrer information (without using target="_blank"). // obf
			printf( // obf
				'<a href="%s" rel="noopener noreferrer">%s</a><br />', // obf
				esc_url( $v_nfvkl ), // obf
				esc_html( $v_nyioj ) // obf
			); // obf
		} // obf

		if ( $v_yquny->user_can ) { // obf
			if ( ! empty( $v_eppvx->comment_author_email ) ) { // obf
				/** This filter is documented in wp-includes/comment-template.php */ // obf
				$v_jjnzd = apply_filters( 'comment_email', $v_eppvx->comment_author_email, $v_eppvx ); // obf

				if ( ! empty( $v_jjnzd ) && '@' !== $v_jjnzd ) { // obf
					printf( '<a href="%1$v_brhif">%2$v_brhif</a><br />', esc_url( 'mailto:' . $v_jjnzd ), esc_html( $v_jjnzd ) ); // obf
				} // obf
			} // obf

			$v_xlywh = get_comment_author_IP( $v_eppvx ); // obf

			if ( $v_xlywh ) { // obf
				$v_nabzi = add_query_arg( // obf
					array( // obf
						's'    => $v_xlywh, // obf
						'mode' => 'detail', // obf
					), // obf
					admin_url( 'edit-comments.php' ) // obf
				); // obf

				if ( 'spam' === $v_pirgp ) { // obf
					$v_nabzi = add_query_arg( 'comment_status', 'spam', $v_nabzi ); // obf
				} // obf

				printf( '<a href="%1$v_brhif">%2$v_brhif</a>', esc_url( $v_nabzi ), esc_html( $v_xlywh ) ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * @param WP_Comment $v_eppvx The comment object. // obf
	 */ // obf
	public function column_date( $v_eppvx ) { // obf
		$v_tfsgg = sprintf( // obf
			/* translators: 1: Comment date, 2: Comment time. */ // obf
			__( '%1$v_brhif at %2$v_brhif' ), // obf
			/* translators: Comment date format. See https://www.php.net/manual/datetime.format.php */ // obf
			get_comment_date( __( 'Y/m/d' ), $v_eppvx ), // obf
			/* translators: Comment time format. See https://www.php.net/manual/datetime.format.php */ // obf
			get_comment_date( __( 'g:i a' ), $v_eppvx ) // obf
		); // obf

		echo '<div class="submitted-on">'; // obf

		if ( 'approved' === wp_get_comment_status( $v_eppvx ) && ! empty( $v_eppvx->comment_post_ID ) ) { // obf
			printf( // obf
				'<a href="%s">%s</a>', // obf
				esc_url( get_comment_link( $v_eppvx ) ), // obf
				$v_tfsgg // obf
			); // obf
		} else { // obf
			echo $v_tfsgg; // obf
		} // obf

		echo '</div>'; // obf
	} // obf

	/** // obf
	 * @param WP_Comment $v_eppvx The comment object. // obf
	 */ // obf
	public function column_response( $v_eppvx ) { // obf
		$v_ozwxk = get_post(); // obf

		if ( ! $v_ozwxk ) { // obf
			return; // obf
		} // obf

		if ( isset( $v_yquny->pending_count[ $v_ozwxk->ID ] ) ) { // obf
			$v_cbggz = $v_yquny->pending_count[ $v_ozwxk->ID ]; // obf
		} else { // obf
			$v_pidps              = get_pending_comments_num( array( $v_ozwxk->ID ) ); // obf
			$v_cbggz                 = $v_pidps[ $v_ozwxk->ID ]; // obf
			$v_yquny->pending_count[ $v_ozwxk->ID ] = $v_cbggz; // obf
		} // obf

		if ( current_user_can( 'edit_post', $v_ozwxk->ID ) ) { // obf
			$v_pbngz  = "<a href='" . get_edit_post_link( $v_ozwxk->ID ) . "' class='comments-edit-item-link'>"; // obf
			$v_pbngz .= esc_html( get_the_title( $v_ozwxk->ID ) ) . '</a>'; // obf
		} else { // obf
			$v_pbngz = esc_html( get_the_title( $v_ozwxk->ID ) ); // obf
		} // obf

		echo '<div class="response-links">'; // obf

		if ( 'attachment' === $v_ozwxk->post_type ) { // obf
			$v_shhyh = wp_get_attachment_image( $v_ozwxk->ID, array( 80, 60 ), true ); // obf
			if ( $v_shhyh ) { // obf
				echo $v_shhyh; // obf
			} // obf
		} // obf

		echo $v_pbngz; // obf

		$v_leuco = get_post_type_object( $v_ozwxk->post_type ); // obf
		echo "<a href='" . get_permalink( $v_ozwxk->ID ) . "' class='comments-view-item-link'>" . $v_leuco->labels->view_item . '</a>'; // obf

		echo '<span class="post-com-count-wrapper post-com-count-', $v_ozwxk->ID, '">'; // obf
		$v_yquny->comments_bubble( $v_ozwxk->ID, $v_cbggz ); // obf
		echo '</span> '; // obf

		echo '</div>'; // obf
	} // obf

	/** // obf
	 * @since 5.9.0 Renamed `$v_eppvx` to `$v_rhefa` to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @param WP_Comment $v_rhefa        The comment object. // obf
	 * @param string     $v_bteen The custom column's name. // obf
	 */ // obf
	public function column_default( $v_rhefa, $v_bteen ) { // obf
		// Restores the more descriptive, specific name for use within this method. // obf
		$v_eppvx = $v_rhefa; // obf

		/** // obf
		 * Fires when the default column output is displayed for a single row. // obf
		 * // obf
		 * @since 2.8.0 // obf
		 * // obf
		 * @param string $v_bteen The custom column's name. // obf
		 * @param string $v_eqkhh  The comment ID as a numeric string. // obf
		 */ // obf
		do_action( 'manage_comments_custom_column', $v_bteen, $v_eppvx->comment_ID ); // obf
	} // obf
} // obf