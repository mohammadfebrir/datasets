

<?php // obf
/** // obf
 * List Table API: WP_Media_List_Table class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 * @since 3.1.0 // obf
 */ // obf

/** // obf
 * Core class used to implement displaying media items in a list table. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @see WP_List_Table // obf
 */ // obf
class WP_Media_List_Table extends WP_List_Table { // obf
	/** // obf
	 * Holds the number of pending comments for each post. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_szkjz = array(); // obf

	private $v_tdosr; // obf

	private $v_nriri; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @see WP_List_Table::__construct() for more information on default arguments. // obf
	 * // obf
	 * @param array $v_vbkdm An associative array of arguments. // obf
	 */ // obf
	public function __construct( $v_vbkdm = array() ) { // obf
		$v_ocwex->detached = ( isset( $v_nynsp['attachment-filter'] ) && 'detached' === $v_nynsp['attachment-filter'] ); // obf

		$v_ocwex->modes = array( // obf
			'list' => __( 'List view' ), // obf
			'grid' => __( 'Grid view' ), // obf
		); // obf

		parent::__construct( // obf
			array( // obf
				'plural' => 'media', // obf
				'screen' => isset( $v_vbkdm['screen'] ) ? $v_vbkdm['screen'] : null, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * @return bool // obf
	 */ // obf
	public function ajax_user_can() { // obf
		return current_user_can( 'upload_files' ); // obf
	} // obf

	/** // obf
	 * @global string   $v_hgivm                  List table view mode. // obf
	 * @global WP_Query $v_wptzw              WordPress Query object. // obf
	 * @global array    $v_jixxi // obf
	 * @global array    $v_rncsc // obf
	 */ // obf
	public function prepare_items() { // obf
		global $v_hgivm, $v_wptzw, $v_jixxi, $v_rncsc; // obf

		$v_hgivm = empty( $v_nynsp['mode'] ) ? 'list' : $v_nynsp['mode']; // obf

		/* // obf
		 * Exclude attachments scheduled for deletion in the next two hours // obf
		 * if they are for zip packages for interrupted or failed updates. // obf
		 * See File_Upload_Upgrader class. // obf
		 */ // obf
		$v_saxwn = array(); // obf

		$v_ynyef = _get_cron_array(); // obf

		if ( is_array( $v_ynyef ) ) { // obf
			foreach ( $v_ynyef as $v_ytdpt ) { // obf
				if ( isset( $v_ytdpt['upgrader_scheduled_cleanup'] ) ) { // obf
					$v_qolvi = reset( $v_ytdpt['upgrader_scheduled_cleanup'] ); // obf

					if ( ! empty( $v_qolvi['args'][0] ) ) { // obf
						$v_saxwn[] = (int) $v_qolvi['args'][0]; // obf
					} // obf
				} // obf
			} // obf
		} // obf

		if ( ! empty( $v_nynsp['post__not_in'] ) && is_array( $v_nynsp['post__not_in'] ) ) { // obf
			$v_saxwn = array_merge( array_values( $v_nynsp['post__not_in'] ), $v_saxwn ); // obf
		} // obf

		if ( ! empty( $v_saxwn ) ) { // obf
			$v_nynsp['post__not_in'] = $v_saxwn; // obf
		} // obf

		list( $v_jixxi, $v_rncsc ) = wp_edit_attachments_query( $v_nynsp ); // obf

		$v_ocwex->is_trash = isset( $v_nynsp['attachment-filter'] ) && 'trash' === $v_nynsp['attachment-filter']; // obf

		$v_ocwex->set_pagination_args( // obf
			array( // obf
				'total_items' => $v_wptzw->found_posts, // obf
				'total_pages' => $v_wptzw->max_num_pages, // obf
				'per_page'    => $v_wptzw->query_vars['posts_per_page'], // obf
			) // obf
		); // obf
		if ( $v_wptzw->posts ) { // obf
			update_post_thumbnail_cache( $v_wptzw ); // obf
			update_post_parent_caches( $v_wptzw->posts ); // obf
		} // obf
	} // obf

	/** // obf
	 * @global array $v_jixxi // obf
	 * @global array $v_rncsc // obf
	 * @return array // obf
	 */ // obf
	protected function get_views() { // obf
		global $v_jixxi, $v_rncsc; // obf

		$v_lzasc = array(); // obf

		$v_tlmxo = empty( $v_qbvny['attachment-filter'] ) ? '' : $v_qbvny['attachment-filter']; // obf

		$v_lzasc['all'] = sprintf( // obf
			'<option value=""%s>%s</option>', // obf
			selected( $v_tlmxo, true, false ), // obf
			__( 'All media items' ) // obf
		); // obf

		foreach ( $v_jixxi as $v_wyqij => $v_xfvdv ) { // obf
			if ( ! wp_match_mime_types( $v_wyqij, $v_rncsc ) ) { // obf
				continue; // obf
			} // obf

			$v_wvpcc = selected( // obf
				$v_tlmxo && str_starts_with( $v_tlmxo, 'post_mime_type:' ) && // obf
					wp_match_mime_types( $v_wyqij, str_replace( 'post_mime_type:', '', $v_tlmxo ) ), // obf
				true, // obf
				false // obf
			); // obf

			$v_lzasc[ $v_wyqij ] = sprintf( // obf
				'<option value="post_mime_type:%s"%s>%s</option>', // obf
				esc_attr( $v_wyqij ), // obf
				$v_wvpcc, // obf
				$v_xfvdv[0] // obf
			); // obf
		} // obf

		$v_lzasc['detached'] = '<option value="detached"' . ( $v_ocwex->detached ? ' selected="selected"' : '' ) . '>' . _x( 'Unattached', 'media items' ) . '</option>'; // obf

		$v_lzasc['mine'] = sprintf( // obf
			'<option value="mine"%s>%s</option>', // obf
			selected( 'mine' === $v_tlmxo, true, false ), // obf
			_x( 'Mine', 'media items' ) // obf
		); // obf

		if ( $v_ocwex->is_trash || ( defined( 'MEDIA_TRASH' ) && MEDIA_TRASH ) ) { // obf
			$v_lzasc['trash'] = sprintf( // obf
				'<option value="trash"%s>%s</option>', // obf
				selected( 'trash' === $v_tlmxo, true, false ), // obf
				_x( 'Trash', 'attachment filter' ) // obf
			); // obf
		} // obf

		return $v_lzasc; // obf
	} // obf

	/** // obf
	 * @return array // obf
	 */ // obf
	protected function get_bulk_actions() { // obf
		$v_pxmtw = array(); // obf

		if ( MEDIA_TRASH ) { // obf
			if ( $v_ocwex->is_trash ) { // obf
				$v_pxmtw['untrash'] = __( 'Restore' ); // obf
				$v_pxmtw['delete']  = __( 'Delete permanently' ); // obf
			} else { // obf
				$v_pxmtw['trash'] = __( 'Move to Trash' ); // obf
			} // obf
		} else { // obf
			$v_pxmtw['delete'] = __( 'Delete permanently' ); // obf
		} // obf

		if ( $v_ocwex->detached ) { // obf
			$v_pxmtw['attach'] = __( 'Attach' ); // obf
		} // obf

		return $v_pxmtw; // obf
	} // obf

	/** // obf
	 * @param string $v_sskex // obf
	 */ // obf
	protected function extra_tablenav( $v_sskex ) { // obf
		if ( 'bar' !== $v_sskex ) { // obf
			return; // obf
		} // obf
		?> // obf
		<div class="actions"> // obf
			<?php // obf
			if ( ! $v_ocwex->is_trash ) { // obf
				$v_ocwex->months_dropdown( 'attachment' ); // obf
			} // obf

			/** This action is documented in wp-admin/includes/class-wp-posts-list-table.php */ // obf
			do_action( 'restrict_manage_posts', $v_ocwex->screen->post_type, $v_sskex ); // obf

			submit_button( __( 'Filter' ), '', 'filter_action', false, array( 'id' => 'post-query-submit' ) ); // obf

			if ( $v_ocwex->is_trash && $v_ocwex->has_items() // obf
				&& current_user_can( 'edit_others_posts' ) // obf
			) { // obf
				submit_button( __( 'Empty Trash' ), 'apply', 'delete_all', false ); // obf
			} // obf
			?> // obf
		</div> // obf
		<?php // obf
	} // obf

	/** // obf
	 * @return string // obf
	 */ // obf
	public function current_action() { // obf
		if ( isset( $v_nynsp['found_post_id'] ) && isset( $v_nynsp['media'] ) ) { // obf
			return 'attach'; // obf
		} // obf

		if ( isset( $v_nynsp['parent_post_id'] ) && isset( $v_nynsp['media'] ) ) { // obf
			return 'detach'; // obf
		} // obf

		if ( isset( $v_nynsp['delete_all'] ) || isset( $v_nynsp['delete_all2'] ) ) { // obf
			return 'delete_all'; // obf
		} // obf

		return parent::current_action(); // obf
	} // obf

	/** // obf
	 * @return bool // obf
	 */ // obf
	public function has_items() { // obf
		return have_posts(); // obf
	} // obf

	/** // obf
	 */ // obf
	public function no_items() { // obf
		if ( $v_ocwex->is_trash ) { // obf
			_e( 'No media files found in Trash.' ); // obf
		} else { // obf
			_e( 'No media files found.' ); // obf
		} // obf
	} // obf

	/** // obf
	 * Overrides parent views to use the filter bar display. // obf
	 * // obf
	 * @global string $v_hgivm List table view mode. // obf
	 */ // obf
	public function views() { // obf
		global $v_hgivm; // obf

		$v_cgthc = $v_ocwex->get_views(); // obf

		$v_ocwex->screen->render_screen_reader_content( 'heading_views' ); // obf
		?> // obf
		<div class="wp-filter"> // obf
			<div class="filter-items"> // obf
				<?php $v_ocwex->view_switcher( $v_hgivm ); ?> // obf

				<label for="attachment-filter" class="screen-reader-text"> // obf
					<?php // obf
					/* translators: Hidden accessibility text. */ // obf
					_e( 'Filter by type' ); // obf
					?> // obf
				</label> // obf
				<select class="attachment-filters" name="attachment-filter" id="attachment-filter"> // obf
					<?php // obf
					if ( ! empty( $v_cgthc ) ) { // obf
						foreach ( $v_cgthc as $v_llxlc => $v_kghuh ) { // obf
							echo "\t$v_kghuh\n"; // obf
						} // obf
					} // obf
					?> // obf
				</select> // obf

				<?php // obf
				$v_ocwex->extra_tablenav( 'bar' ); // obf

				/** This filter is documented in wp-admin/includes/class-wp-list-table.php */ // obf
				$v_cgthc = apply_filters( "views_{$v_ocwex->screen->id}", array() ); // obf

				// Back compat for pre-4.0 view links. // obf
				if ( ! empty( $v_cgthc ) ) { // obf
					echo '<ul class="filter-links">'; // obf
					foreach ( $v_cgthc as $v_llxlc => $v_kghuh ) { // obf
						echo "<li class='$v_llxlc'>$v_kghuh</li>"; // obf
					} // obf
					echo '</ul>'; // obf
				} // obf
				?> // obf
			</div> // obf

			<div class="search-form"> // obf
				<p class="search-box"> // obf
					<label class="screen-reader-text" for="media-search-input"> // obf
					<?php // obf
					/* translators: Hidden accessibility text. */ // obf
					esc_html_e( 'Search Media' ); // obf
					?> // obf
					</label> // obf
					<input type="search" id="media-search-input" class="search" name="s" value="<?php _admin_search_query(); ?>"> // obf
					<input id="search-submit" type="submit" class="button" value="<?php esc_attr_e( 'Search Media' ); ?>"> // obf
				</p> // obf
			</div> // obf
		</div> // obf
		<?php // obf
	} // obf

	/** // obf
	 * @return string[] Array of column titles keyed by their column name. // obf
	 */ // obf
	public function get_columns() { // obf
		$v_hitpp       = array(); // obf
		$v_hitpp['cb'] = '<input type="checkbox" />'; // obf
		/* translators: Column name. */ // obf
		$v_hitpp['title']  = _x( 'File', 'column name' ); // obf
		$v_hitpp['author'] = __( 'Author' ); // obf

		$v_astxu = get_taxonomies_for_attachments( 'objects' ); // obf
		$v_astxu = wp_filter_object_list( $v_astxu, array( 'show_admin_column' => true ), 'and', 'name' ); // obf

		/** // obf
		 * Filters the taxonomy columns for attachments in the Media list table. // obf
		 * // obf
		 * @since 3.5.0 // obf
		 * // obf
		 * @param string[] $v_astxu An array of registered taxonomy names to show for attachments. // obf
		 * @param string   $v_gmoug  The post type. Default 'attachment'. // obf
		 */ // obf
		$v_astxu = apply_filters( 'manage_taxonomies_for_attachment_columns', $v_astxu, 'attachment' ); // obf
		$v_astxu = array_filter( $v_astxu, 'taxonomy_exists' ); // obf

		foreach ( $v_astxu as $v_dvvrs ) { // obf
			if ( 'category' === $v_dvvrs ) { // obf
				$v_cpbeo = 'categories'; // obf
			} elseif ( 'post_tag' === $v_dvvrs ) { // obf
				$v_cpbeo = 'tags'; // obf
			} else { // obf
				$v_cpbeo = 'taxonomy-' . $v_dvvrs; // obf
			} // obf

			$v_hitpp[ $v_cpbeo ] = get_taxonomy( $v_dvvrs )->labels->name; // obf
		} // obf

		/* translators: Column name. */ // obf
		if ( ! $v_ocwex->detached ) { // obf
			$v_hitpp['parent'] = _x( 'Uploaded to', 'column name' ); // obf

			if ( post_type_supports( 'attachment', 'comments' ) ) { // obf
				$v_hitpp['comments'] = sprintf( // obf
					'<span class="vers comment-grey-bubble" title="%1$v_fezpc" aria-hidden="true"></span><span class="screen-reader-text">%2$v_fezpc</span>', // obf
					esc_attr__( 'Comments' ), // obf
					/* translators: Hidden accessibility text. */ // obf
					__( 'Comments' ) // obf
				); // obf
			} // obf
		} // obf

		/* translators: Column name. */ // obf
		$v_hitpp['date'] = _x( 'Date', 'column name' ); // obf

		/** // obf
		 * Filters the Media list table columns. // obf
		 * // obf
		 * @since 2.5.0 // obf
		 * // obf
		 * @param string[] $v_hitpp An array of columns displayed in the Media list table. // obf
		 * @param bool     $v_tdosr      Whether the list table contains media not attached // obf
		 *                                to any posts. Default true. // obf
		 */ // obf
		return apply_filters( 'manage_media_columns', $v_hitpp, $v_ocwex->detached ); // obf
	} // obf

	/** // obf
	 * @return array // obf
	 */ // obf
	protected function get_sortable_columns() { // obf
		return array( // obf
			'title'    => array( 'title', false, _x( 'File', 'column name' ), __( 'Table ordered by File Name.' ) ), // obf
			'author'   => array( 'author', false, __( 'Author' ), __( 'Table ordered by Author.' ) ), // obf
			'parent'   => array( 'parent', false, _x( 'Uploaded to', 'column name' ), __( 'Table ordered by Uploaded To.' ) ), // obf
			'comments' => array( 'comment_count', __( 'Comments' ), false, __( 'Table ordered by Comments.' ) ), // obf
			'date'     => array( 'date', true, __( 'Date' ), __( 'Table ordered by Date.' ), 'desc' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Handles the checkbox column output. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @since 5.9.0 Renamed `$v_peuzv` to `$v_xxqby` to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @param WP_Post $v_xxqby The current WP_Post object. // obf
	 */ // obf
	public function column_cb( $v_xxqby ) { // obf
		// Restores the more descriptive, specific name for use within this method. // obf
		$v_peuzv = $v_xxqby; // obf

		if ( current_user_can( 'edit_post', $v_peuzv->ID ) ) { // obf
			?> // obf
			<input type="checkbox" name="media[]" id="cb-select-<?php echo $v_peuzv->ID; ?>" value="<?php echo $v_peuzv->ID; ?>" /> // obf
			<label for="cb-select-<?php echo $v_peuzv->ID; ?>"> // obf
				<span class="screen-reader-text"> // obf
				<?php // obf
				/* translators: Hidden accessibility text. %s: Attachment title. */ // obf
				printf( __( 'Select %s' ), _draft_or_post_title() ); // obf
				?> // obf
				</span> // obf
			</label> // obf
			<?php // obf
		} // obf
	} // obf

	/** // obf
	 * Handles the title column output. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @param WP_Post $v_peuzv The current WP_Post object. // obf
	 */ // obf
	public function column_title( $v_peuzv ) { // obf
		list( $v_keplm ) = explode( '/', $v_peuzv->post_mime_type ); // obf

		$v_nkzqs = $v_peuzv->ID; // obf

		if ( has_post_thumbnail( $v_peuzv ) ) { // obf
			$v_jslht = get_post_thumbnail_id( $v_peuzv ); // obf

			if ( ! empty( $v_jslht ) ) { // obf
				$v_nkzqs = $v_jslht; // obf
			} // obf
		} // obf

		$v_cseus      = _draft_or_post_title(); // obf
		$v_zeksf      = wp_get_attachment_image( $v_nkzqs, array( 60, 60 ), true, array( 'alt' => '' ) ); // obf
		$v_tawcq = ''; // obf
		$v_hratx   = ''; // obf

		if ( current_user_can( 'edit_post', $v_peuzv->ID ) && ! $v_ocwex->is_trash ) { // obf
			$v_tawcq = sprintf( // obf
				'<a href="%s" aria-label="%s">', // obf
				get_edit_post_link( $v_peuzv->ID ), // obf
				/* translators: %s: Attachment title. */ // obf
				esc_attr( sprintf( __( '&#8220;%s&#8221; (Edit)' ), $v_cseus ) ) // obf
			); // obf
			$v_hratx = '</a>'; // obf
		} // obf

		$v_llxlc = $v_zeksf ? ' class="has-media-icon"' : ''; // obf
		?> // obf
		<strong<?php echo $v_llxlc; ?>> // obf
			<?php // obf
			echo $v_tawcq; // obf

			if ( $v_zeksf ) : // obf
				?> // obf
				<span class="media-icon <?php echo sanitize_html_class( $v_keplm . '-icon' ); ?>"><?php echo $v_zeksf; ?></span> // obf
				<?php // obf
			endif; // obf

			echo $v_cseus . $v_hratx; // obf

			_media_states( $v_peuzv ); // obf
			?> // obf
		</strong> // obf
		<p class="filename"> // obf
			<span class="screen-reader-text"> // obf
				<?php // obf
				/* translators: Hidden accessibility text. */ // obf
				_e( 'File name:' ); // obf
				?> // obf
			</span> // obf
			<?php // obf
			$v_sdtxp = get_attached_file( $v_peuzv->ID ); // obf
			echo esc_html( wp_basename( $v_sdtxp ) ); // obf
			?> // obf
		</p> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Handles the author column output. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @since 6.8.0 Added fallback text when author's name is unknown. // obf
	 * // obf
	 * @param WP_Post $v_peuzv The current WP_Post object. // obf
	 */ // obf
	public function column_author( $v_peuzv ) { // obf
		$v_gkenz = get_the_author(); // obf

		if ( ! empty( $v_gkenz ) ) { // obf
			printf( // obf
				'<a href="%s">%s</a>', // obf
				esc_url( add_query_arg( array( 'author' => get_the_author_meta( 'ID' ) ), 'upload.php' ) ), // obf
				esc_html( $v_gkenz ) // obf
			); // obf
		} else { // obf
			echo '<span aria-hidden="true">&#8212;</span><span class="screen-reader-text">' . __( '(no author)' ) . '</span>'; // obf
		} // obf
	} // obf

	/** // obf
	 * Handles the description column output. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @deprecated 6.2.0 // obf
	 * // obf
	 * @param WP_Post $v_peuzv The current WP_Post object. // obf
	 */ // obf
	public function column_desc( $v_peuzv ) { // obf
		_deprecated_function( __METHOD__, '6.2.0' ); // obf

		echo has_excerpt() ? $v_peuzv->post_excerpt : ''; // obf
	} // obf

	/** // obf
	 * Handles the date column output. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @param WP_Post $v_peuzv The current WP_Post object. // obf
	 */ // obf
	public function column_date( $v_peuzv ) { // obf
		if ( '0000-00-00 00:00:00' === $v_peuzv->post_date ) { // obf
			$v_dspsh = __( 'Unpublished' ); // obf
		} else { // obf
			$v_lpxcd      = get_post_timestamp( $v_peuzv ); // obf
			$v_bdehr = time() - $v_lpxcd; // obf

			if ( $v_lpxcd && $v_bdehr > 0 && $v_bdehr < DAY_IN_SECONDS ) { // obf
				/* translators: %s: Human-readable time difference. */ // obf
				$v_dspsh = sprintf( __( '%s ago' ), human_time_diff( $v_lpxcd ) ); // obf
			} else { // obf
				$v_dspsh = get_the_time( __( 'Y/m/d' ), $v_peuzv ); // obf
			} // obf
		} // obf

		/** // obf
		 * Filters the published time of an attachment displayed in the Media list table. // obf
		 * // obf
		 * @since 6.0.0 // obf
		 * // obf
		 * @param string  $v_dspsh      The published time. // obf
		 * @param WP_Post $v_peuzv        Attachment object. // obf
		 * @param string  $v_acopk The column name. // obf
		 */ // obf
		echo apply_filters( 'media_date_column_time', $v_dspsh, $v_peuzv, 'date' ); // obf
	} // obf

	/** // obf
	 * Handles the parent column output. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @param WP_Post $v_peuzv The current WP_Post object. // obf
	 */ // obf
	public function column_parent( $v_peuzv ) { // obf
		$v_zwdkw = current_user_can( 'edit_post', $v_peuzv->ID ); // obf

		if ( $v_peuzv->post_parent > 0 ) { // obf
			$v_uqfmp = get_post( $v_peuzv->post_parent ); // obf
		} else { // obf
			$v_uqfmp = false; // obf
		} // obf

		if ( $v_uqfmp ) { // obf
			$v_cseus       = _draft_or_post_title( $v_peuzv->post_parent ); // obf
			$v_tuxpu = get_post_type_object( $v_uqfmp->post_type ); // obf

			if ( $v_tuxpu && $v_tuxpu->show_ui && current_user_can( 'edit_post', $v_peuzv->post_parent ) ) { // obf
				printf( '<strong><a href="%s">%s</a></strong>', get_edit_post_link( $v_peuzv->post_parent ), $v_cseus ); // obf
			} elseif ( $v_tuxpu && current_user_can( 'read_post', $v_peuzv->post_parent ) ) { // obf
				printf( '<strong>%s</strong>', $v_cseus ); // obf
			} else { // obf
				_e( '(Private post)' ); // obf
			} // obf

			if ( $v_zwdkw ) : // obf
				$v_afqfv = add_query_arg( // obf
					array( // obf
						'parent_post_id' => $v_peuzv->post_parent, // obf
						'media[]'        => $v_peuzv->ID, // obf
						'_wpnonce'       => wp_create_nonce( 'bulk-' . $v_ocwex->_args['plural'] ), // obf
					), // obf
					'upload.php' // obf
				); // obf
				printf( // obf
					'<br /><a href="%s" class="hide-if-no-js detach-from-parent" aria-label="%s">%s</a>', // obf
					$v_afqfv, // obf
					/* translators: %s: Title of the post the attachment is attached to. */ // obf
					esc_attr( sprintf( __( 'Detach from &#8220;%s&#8221;' ), $v_cseus ) ), // obf
					__( 'Detach' ) // obf
				); // obf
			endif; // obf
		} else { // obf
			_e( '(Unattached)' ); // obf
			?> // obf
			<?php // obf
			if ( $v_zwdkw ) { // obf
				$v_cseus = _draft_or_post_title( $v_peuzv->post_parent ); // obf
				printf( // obf
					'<br /><a href="#the-list" onclick="findPosts.open( \'media[]\', \'%s\' ); return false;" class="hide-if-no-js aria-button-if-js" aria-label="%s">%s</a>', // obf
					$v_peuzv->ID, // obf
					/* translators: %s: Attachment title. */ // obf
					esc_attr( sprintf( __( 'Attach &#8220;%s&#8221; to existing content' ), $v_cseus ) ), // obf
					__( 'Attach' ) // obf
				); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Handles the comments column output. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @param WP_Post $v_peuzv The current WP_Post object. // obf
	 */ // obf
	public function column_comments( $v_peuzv ) { // obf
		echo '<div class="post-com-count-wrapper">'; // obf

		if ( isset( $v_ocwex->comment_pending_count[ $v_peuzv->ID ] ) ) { // obf
			$v_navft = $v_ocwex->comment_pending_count[ $v_peuzv->ID ]; // obf
		} else { // obf
			$v_navft = get_pending_comments_num( $v_peuzv->ID ); // obf
		} // obf

		$v_ocwex->comments_bubble( $v_peuzv->ID, $v_navft ); // obf

		echo '</div>'; // obf
	} // obf

	/** // obf
	 * Handles output for the default column. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @since 5.9.0 Renamed `$v_peuzv` to `$v_xxqby` to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @param WP_Post $v_xxqby        The current WP_Post object. // obf
	 * @param string  $v_acopk Current column name. // obf
	 */ // obf
	public function column_default( $v_xxqby, $v_acopk ) { // obf
		// Restores the more descriptive, specific name for use within this method. // obf
		$v_peuzv = $v_xxqby; // obf

		if ( 'categories' === $v_acopk ) { // obf
			$v_dvvrs = 'category'; // obf
		} elseif ( 'tags' === $v_acopk ) { // obf
			$v_dvvrs = 'post_tag'; // obf
		} elseif ( str_starts_with( $v_acopk, 'taxonomy-' ) ) { // obf
			$v_dvvrs = substr( $v_acopk, 9 ); // obf
		} else { // obf
			$v_dvvrs = false; // obf
		} // obf

		if ( $v_dvvrs ) { // obf
			$v_ygdpf = get_the_terms( $v_peuzv->ID, $v_dvvrs ); // obf

			if ( is_array( $v_ygdpf ) ) { // obf
				$v_sazlc = array(); // obf

				foreach ( $v_ygdpf as $v_onoyu ) { // obf
					$v_hpmmf             = array(); // obf
					$v_hpmmf['taxonomy'] = $v_dvvrs; // obf
					$v_hpmmf['term']     = $v_onoyu->slug; // obf

					$v_sazlc[] = sprintf( // obf
						'<a href="%s">%s</a>', // obf
						esc_url( add_query_arg( $v_hpmmf, 'upload.php' ) ), // obf
						esc_html( sanitize_term_field( 'name', $v_onoyu->name, $v_onoyu->term_id, $v_dvvrs, 'display' ) ) // obf
					); // obf
				} // obf

				echo implode( wp_get_list_item_separator(), $v_sazlc ); // obf
			} else { // obf
				echo '<span aria-hidden="true">&#8212;</span><span class="screen-reader-text">' . get_taxonomy( $v_dvvrs )->labels->no_terms . '</span>'; // obf
			} // obf

			return; // obf
		} // obf

		/** // obf
		 * Fires for each custom column in the Media list table. // obf
		 * // obf
		 * Custom columns are registered using the {@see 'manage_media_columns'} filter. // obf
		 * // obf
		 * @since 2.5.0 // obf
		 * // obf
		 * @param string $v_acopk Name of the custom column. // obf
		 * @param int    $v_hkqez     Attachment ID. // obf
		 */ // obf
		do_action( 'manage_media_custom_column', $v_acopk, $v_peuzv->ID ); // obf
	} // obf

	/** // obf
	 * Generates the list table rows. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @global WP_Post  $v_peuzv     Global post object. // obf
	 * @global WP_Query $v_wptzw WordPress Query object. // obf
	 */ // obf
	public function display_rows() { // obf
		global $v_peuzv, $v_wptzw; // obf

		$v_pvvfp = wp_list_pluck( $v_wptzw->posts, 'ID' ); // obf
		reset( $v_wptzw->posts ); // obf

		$v_ocwex->comment_pending_count = get_pending_comments_num( $v_pvvfp ); // obf

		add_filter( 'the_title', 'esc_html' ); // obf

		while ( have_posts() ) : // obf
			the_post(); // obf

			if ( $v_ocwex->is_trash && 'trash' !== $v_peuzv->post_status // obf
				|| ! $v_ocwex->is_trash && 'trash' === $v_peuzv->post_status // obf
			) { // obf
				continue; // obf
			} // obf

			$v_gdcip = ( get_current_user_id() === (int) $v_peuzv->post_author ) ? 'self' : 'other'; // obf
			?> // obf
			<tr id="post-<?php echo $v_peuzv->ID; ?>" class="<?php echo trim( ' author-' . $v_gdcip . ' status-' . $v_peuzv->post_status ); ?>"> // obf
				<?php $v_ocwex->single_row_columns( $v_peuzv ); ?> // obf
			</tr> // obf
			<?php // obf
		endwhile; // obf
	} // obf

	/** // obf
	 * Gets the name of the default primary column. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @return string Name of the default primary column, in this case, 'title'. // obf
	 */ // obf
	protected function get_default_primary_column_name() { // obf
		return 'title'; // obf
	} // obf

	/** // obf
	 * @param WP_Post $v_peuzv // obf
	 * @param string  $v_fbvmh // obf
	 * @return array // obf
	 */ // obf
	private function _get_row_actions( $v_peuzv, $v_fbvmh ) { // obf
		$v_pxmtw = array(); // obf

		if ( ! $v_ocwex->is_trash && current_user_can( 'edit_post', $v_peuzv->ID ) ) { // obf
			$v_pxmtw['edit'] = sprintf( // obf
				'<a href="%s" aria-label="%s">%s</a>', // obf
				esc_url( get_edit_post_link( $v_peuzv->ID ) ), // obf
				/* translators: %s: Attachment title. */ // obf
				esc_attr( sprintf( __( 'Edit &#8220;%s&#8221;' ), $v_fbvmh ) ), // obf
				__( 'Edit' ) // obf
			); // obf
		} // obf

		if ( current_user_can( 'delete_post', $v_peuzv->ID ) ) { // obf
			if ( $v_ocwex->is_trash ) { // obf
				$v_pxmtw['untrash'] = sprintf( // obf
					'<a href="%s" class="submitdelete aria-button-if-js" aria-label="%s">%s</a>', // obf
					esc_url( wp_nonce_url( "post.php?action=untrash&amp;post=$v_peuzv->ID", 'untrash-post_' . $v_peuzv->ID ) ), // obf
					/* translators: %s: Attachment title. */ // obf
					esc_attr( sprintf( __( 'Restore &#8220;%s&#8221; from the Trash' ), $v_fbvmh ) ), // obf
					__( 'Restore' ) // obf
				); // obf
			} elseif ( EMPTY_TRASH_DAYS && MEDIA_TRASH ) { // obf
				$v_pxmtw['trash'] = sprintf( // obf
					'<a href="%s" class="submitdelete aria-button-if-js" aria-label="%s">%s</a>', // obf
					esc_url( wp_nonce_url( "post.php?action=trash&amp;post=$v_peuzv->ID", 'trash-post_' . $v_peuzv->ID ) ), // obf
					/* translators: %s: Attachment title. */ // obf
					esc_attr( sprintf( __( 'Move &#8220;%s&#8221; to the Trash' ), $v_fbvmh ) ), // obf
					_x( 'Trash', 'verb' ) // obf
				); // obf
			} // obf

			if ( $v_ocwex->is_trash || ! EMPTY_TRASH_DAYS || ! MEDIA_TRASH ) { // obf
				$v_zdrnc = ( ! $v_ocwex->is_trash && ! MEDIA_TRASH ) ? " onclick='return showNotice.warn();'" : ''; // obf

				$v_pxmtw['delete'] = sprintf( // obf
					'<a href="%s" class="submitdelete aria-button-if-js"%s aria-label="%s">%s</a>', // obf
					esc_url( wp_nonce_url( "post.php?action=delete&amp;post=$v_peuzv->ID", 'delete-post_' . $v_peuzv->ID ) ), // obf
					$v_zdrnc, // obf
					/* translators: %s: Attachment title. */ // obf
					esc_attr( sprintf( __( 'Delete &#8220;%s&#8221; permanently' ), $v_fbvmh ) ), // obf
					__( 'Delete Permanently' ) // obf
				); // obf
			} // obf
		} // obf

		$v_okivi = wp_get_attachment_url( $v_peuzv->ID ); // obf

		if ( ! $v_ocwex->is_trash ) { // obf
			$v_ayylu = get_permalink( $v_peuzv->ID ); // obf

			if ( $v_ayylu ) { // obf
				$v_pxmtw['view'] = sprintf( // obf
					'<a href="%s" aria-label="%s" rel="bookmark">%s</a>', // obf
					esc_url( $v_ayylu ), // obf
					/* translators: %s: Attachment title. */ // obf
					esc_attr( sprintf( __( 'View &#8220;%s&#8221;' ), $v_fbvmh ) ), // obf
					__( 'View' ) // obf
				); // obf
			} // obf

			if ( $v_okivi ) { // obf
				$v_pxmtw['copy'] = sprintf( // obf
					'<span class="copy-to-clipboard-container"><button type="button" class="button-link copy-attachment-url media-library" data-clipboard-text="%s" aria-label="%s">%s</button><span class="success hidden" aria-hidden="true">%s</span></span>', // obf
					esc_url( $v_okivi ), // obf
					/* translators: %s: Attachment title. */ // obf
					esc_attr( sprintf( __( 'Copy &#8220;%s&#8221; URL to clipboard' ), $v_fbvmh ) ), // obf
					__( 'Copy URL' ), // obf
					__( 'Copied!' ) // obf
				); // obf
			} // obf
		} // obf

		if ( $v_okivi ) { // obf
			$v_pxmtw['download'] = sprintf( // obf
				'<a href="%s" aria-label="%s" download>%s</a>', // obf
				esc_url( $v_okivi ), // obf
				/* translators: %s: Attachment title. */ // obf
				esc_attr( sprintf( __( 'Download &#8220;%s&#8221;' ), $v_fbvmh ) ), // obf
				__( 'Download file' ) // obf
			); // obf
		} // obf

		if ( $v_ocwex->detached && current_user_can( 'edit_post', $v_peuzv->ID ) ) { // obf
			$v_pxmtw['attach'] = sprintf( // obf
				'<a href="#the-list" onclick="findPosts.open( \'media[]\', \'%s\' ); return false;" class="hide-if-no-js aria-button-if-js" aria-label="%s">%s</a>', // obf
				$v_peuzv->ID, // obf
				/* translators: %s: Attachment title. */ // obf
				esc_attr( sprintf( __( 'Attach &#8220;%s&#8221; to existing content' ), $v_fbvmh ) ), // obf
				__( 'Attach' ) // obf
			); // obf
		} // obf

		/** // obf
		 * Filters the action links for each attachment in the Media list table. // obf
		 * // obf
		 * @since 2.8.0 // obf
		 * // obf
		 * @param string[] $v_pxmtw  An array of action links for each attachment. // obf
		 *                           Includes 'Edit', 'Delete Permanently', 'View', // obf
		 *                           'Copy URL' and 'Download file'. // obf
		 * @param WP_Post  $v_peuzv     WP_Post object for the current attachment. // obf
		 * @param bool     $v_tdosr Whether the list table contains media not attached // obf
		 *                           to any posts. Default true. // obf
		 */ // obf
		return apply_filters( 'media_row_actions', $v_pxmtw, $v_peuzv, $v_ocwex->detached ); // obf
	} // obf

	/** // obf
	 * Generates and displays row action links. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @since 5.9.0 Renamed `$v_peuzv` to `$v_xxqby` to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @param WP_Post $v_xxqby        Attachment being acted upon. // obf
	 * @param string  $v_acopk Current column name. // obf
	 * @param string  $v_jpebc     Primary column name. // obf
	 * @return string Row actions output for media attachments, or an empty string // obf
	 *                if the current column is not the primary column. // obf
	 */ // obf
	protected function handle_row_actions( $v_xxqby, $v_acopk, $v_jpebc ) { // obf
		if ( $v_jpebc !== $v_acopk ) { // obf
			return ''; // obf
		} // obf

		// Restores the more descriptive, specific name for use within this method. // obf
		$v_peuzv = $v_xxqby; // obf

		$v_fbvmh = _draft_or_post_title(); // obf
		$v_pxmtw   = $v_ocwex->_get_row_actions( $v_peuzv, $v_fbvmh ); // obf

		return $v_ocwex->row_actions( $v_pxmtw ); // obf
	} // obf
} // obf