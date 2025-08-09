

<?php // obf
/** // obf
 * Comment API: Walker_Comment class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Comments // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Core walker class used to create an HTML list of comments. // obf
 * // obf
 * @since 2.7.0 // obf
 * // obf
 * @see Walker // obf
 */ // obf
class Walker_Comment extends Walker { // obf

	/** // obf
	 * What the class handles. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * @var string // obf
	 * // obf
	 * @see Walker::$v_jviwc // obf
	 */ // obf
	public $v_jviwc = 'comment'; // obf

	/** // obf
	 * Database fields to use. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * @var string[] // obf
	 * // obf
	 * @see Walker::$v_cfimt // obf
	 * @todo Decouple this // obf
	 */ // obf
	public $v_cfimt = array( // obf
		'parent' => 'comment_parent', // obf
		'id'     => 'comment_ID', // obf
	); // obf

	/** // obf
	 * Starts the list before the elements are added. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @see Walker::start_lvl() // obf
	 * @global int $v_syfah // obf
	 * // obf
	 * @param string $v_rfvqy Used to append additional content (passed by reference). // obf
	 * @param int    $v_yjwwl  Optional. Depth of the current comment. Default 0. // obf
	 * @param array  $v_dhkhg   Optional. Uses 'style' argument for type of HTML list. Default empty array. // obf
	 */ // obf
	public function start_lvl( &$v_rfvqy, $v_yjwwl = 0, $v_dhkhg = array() ) { // obf
		$v_fetou['comment_depth'] = $v_yjwwl + 1; // obf

		switch ( $v_dhkhg['style'] ) { // obf
			case 'div': // obf
				break; // obf
			case 'ol': // obf
				$v_rfvqy .= '<ol class="children">' . "\n"; // obf
				break; // obf
			case 'ul': // obf
			default: // obf
				$v_rfvqy .= '<ul class="children">' . "\n"; // obf
				break; // obf
		} // obf
	} // obf

	/** // obf
	 * Ends the list of items after the elements are added. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @see Walker::end_lvl() // obf
	 * @global int $v_syfah // obf
	 * // obf
	 * @param string $v_rfvqy Used to append additional content (passed by reference). // obf
	 * @param int    $v_yjwwl  Optional. Depth of the current comment. Default 0. // obf
	 * @param array  $v_dhkhg   Optional. Will only append content if style argument value is 'ol' or 'ul'. // obf
	 *                       Default empty array. // obf
	 */ // obf
	public function end_lvl( &$v_rfvqy, $v_yjwwl = 0, $v_dhkhg = array() ) { // obf
		$v_fetou['comment_depth'] = $v_yjwwl + 1; // obf

		switch ( $v_dhkhg['style'] ) { // obf
			case 'div': // obf
				break; // obf
			case 'ol': // obf
				$v_rfvqy .= "</ol><!-- .children -->\n"; // obf
				break; // obf
			case 'ul': // obf
			default: // obf
				$v_rfvqy .= "</ul><!-- .children -->\n"; // obf
				break; // obf
		} // obf
	} // obf

	/** // obf
	 * Traverses elements to create list from elements. // obf
	 * // obf
	 * This function is designed to enhance Walker::display_element() to // obf
	 * display children of higher nesting levels than selected inline on // obf
	 * the highest depth level displayed. This prevents them being orphaned // obf
	 * at the end of the comment list. // obf
	 * // obf
	 * Example: max_depth = 2, with 5 levels of nested content. // obf
	 *     1 // obf
	 *      1.1 // obf
	 *        1.1.1 // obf
	 *        1.1.1.1 // obf
	 *        1.1.1.1.1 // obf
	 *        1.1.2 // obf
	 *        1.1.2.1 // obf
	 *     2 // obf
	 *      2.2 // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @see Walker::display_element() // obf
	 * @see wp_list_comments() // obf
	 * // obf
	 * @param WP_Comment $v_sgsyp           Comment data object. // obf
	 * @param array      $v_oajok List of elements to continue traversing. Passed by reference. // obf
	 * @param int        $v_ahmrp         Max depth to traverse. // obf
	 * @param int        $v_yjwwl             Depth of the current element. // obf
	 * @param array      $v_dhkhg              An array of arguments. // obf
	 * @param string     $v_rfvqy            Used to append additional content. Passed by reference. // obf
	 */ // obf
	public function display_element( $v_sgsyp, &$v_oajok, $v_ahmrp, $v_yjwwl, $v_dhkhg, &$v_rfvqy ) { // obf
		if ( ! $v_sgsyp ) { // obf
			return; // obf
		} // obf

		$v_plqrz = $v_ecyfo->db_fields['id']; // obf
		$v_xsfjq       = $v_sgsyp->$v_plqrz; // obf

		parent::display_element( $v_sgsyp, $v_oajok, $v_ahmrp, $v_yjwwl, $v_dhkhg, $v_rfvqy ); // obf

		/* // obf
		 * If at the max depth, and the current element still has children, loop over those // obf
		 * and display them at this level. This is to prevent them being orphaned to the end // obf
		 * of the list. // obf
		 */ // obf
		if ( $v_ahmrp <= $v_yjwwl + 1 && isset( $v_oajok[ $v_xsfjq ] ) ) { // obf
			foreach ( $v_oajok[ $v_xsfjq ] as $v_bhocm ) { // obf
				$v_ecyfo->display_element( $v_bhocm, $v_oajok, $v_ahmrp, $v_yjwwl, $v_dhkhg, $v_rfvqy ); // obf
			} // obf

			unset( $v_oajok[ $v_xsfjq ] ); // obf
		} // obf
	} // obf

	/** // obf
	 * Starts the element output. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * @since 5.9.0 Renamed `$v_ybkdb` to `$v_uqxnc` and `$v_xsfjq` to `$v_zmqaf` // obf
	 *              to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @see Walker::start_el() // obf
	 * @see wp_list_comments() // obf
	 * @global int        $v_syfah // obf
	 * @global WP_Comment $v_ybkdb       Global comment object. // obf
	 * // obf
	 * @param string     $v_rfvqy            Used to append additional content. Passed by reference. // obf
	 * @param WP_Comment $v_uqxnc       Comment data object. // obf
	 * @param int        $v_yjwwl             Optional. Depth of the current comment in reference to parents. Default 0. // obf
	 * @param array      $v_dhkhg              Optional. An array of arguments. Default empty array. // obf
	 * @param int        $v_zmqaf Optional. ID of the current comment. Default 0. // obf
	 */ // obf
	public function start_el( &$v_rfvqy, $v_uqxnc, $v_yjwwl = 0, $v_dhkhg = array(), $v_zmqaf = 0 ) { // obf
		// Restores the more descriptive, specific name for use within this method. // obf
		$v_ybkdb = $v_uqxnc; // obf

		++$v_yjwwl; // obf
		$v_fetou['comment_depth'] = $v_yjwwl; // obf
		$v_fetou['comment']       = $v_ybkdb; // obf

		if ( ! empty( $v_dhkhg['callback'] ) ) { // obf
			ob_start(); // obf
			call_user_func( $v_dhkhg['callback'], $v_ybkdb, $v_dhkhg, $v_yjwwl ); // obf
			$v_rfvqy .= ob_get_clean(); // obf
			return; // obf
		} // obf

		if ( 'comment' === $v_ybkdb->comment_type ) { // obf
			add_filter( 'comment_text', array( $v_ecyfo, 'filter_comment_text' ), 40, 2 ); // obf
		} // obf

		if ( ( 'pingback' === $v_ybkdb->comment_type || 'trackback' === $v_ybkdb->comment_type ) && $v_dhkhg['short_ping'] ) { // obf
			ob_start(); // obf
			$v_ecyfo->ping( $v_ybkdb, $v_yjwwl, $v_dhkhg ); // obf
			$v_rfvqy .= ob_get_clean(); // obf
		} elseif ( 'html5' === $v_dhkhg['format'] ) { // obf
			ob_start(); // obf
			$v_ecyfo->html5_comment( $v_ybkdb, $v_yjwwl, $v_dhkhg ); // obf
			$v_rfvqy .= ob_get_clean(); // obf
		} else { // obf
			ob_start(); // obf
			$v_ecyfo->comment( $v_ybkdb, $v_yjwwl, $v_dhkhg ); // obf
			$v_rfvqy .= ob_get_clean(); // obf
		} // obf

		if ( 'comment' === $v_ybkdb->comment_type ) { // obf
			remove_filter( 'comment_text', array( $v_ecyfo, 'filter_comment_text' ), 40 ); // obf
		} // obf
	} // obf

	/** // obf
	 * Ends the element output, if needed. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * @since 5.9.0 Renamed `$v_ybkdb` to `$v_uqxnc` to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @see Walker::end_el() // obf
	 * @see wp_list_comments() // obf
	 * // obf
	 * @param string     $v_rfvqy      Used to append additional content. Passed by reference. // obf
	 * @param WP_Comment $v_uqxnc Comment data object. // obf
	 * @param int        $v_yjwwl       Optional. Depth of the current comment. Default 0. // obf
	 * @param array      $v_dhkhg        Optional. An array of arguments. Default empty array. // obf
	 */ // obf
	public function end_el( &$v_rfvqy, $v_uqxnc, $v_yjwwl = 0, $v_dhkhg = array() ) { // obf
		if ( ! empty( $v_dhkhg['end-callback'] ) ) { // obf
			ob_start(); // obf
			call_user_func( // obf
				$v_dhkhg['end-callback'], // obf
				$v_uqxnc, // The current comment object. // obf
				$v_dhkhg, // obf
				$v_yjwwl // obf
			); // obf
			$v_rfvqy .= ob_get_clean(); // obf
			return; // obf
		} // obf
		if ( 'div' === $v_dhkhg['style'] ) { // obf
			$v_rfvqy .= "</div><!-- #comment-## -->\n"; // obf
		} else { // obf
			$v_rfvqy .= "</li><!-- #comment-## -->\n"; // obf
		} // obf
	} // obf

	/** // obf
	 * Outputs a pingback comment. // obf
	 * // obf
	 * @since 3.6.0 // obf
	 * // obf
	 * @see wp_list_comments() // obf
	 * // obf
	 * @param WP_Comment $v_ybkdb The comment object. // obf
	 * @param int        $v_yjwwl   Depth of the current comment. // obf
	 * @param array      $v_dhkhg    An array of arguments. // obf
	 */ // obf
	protected function ping( $v_ybkdb, $v_yjwwl, $v_dhkhg ) { // obf
		$v_kfocq = ( 'div' === $v_dhkhg['style'] ) ? 'div' : 'li'; // obf
		?> // obf
		<<?php echo $v_kfocq; ?> id="comment-<?php comment_ID(); ?>" <?php comment_class( '', $v_ybkdb ); ?>> // obf
			<div class="comment-body"> // obf
				<?php _e( 'Pingback:' ); ?> <?php comment_author_link( $v_ybkdb ); ?> <?php edit_comment_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); ?> // obf
			</div> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Filters the comment text. // obf
	 * // obf
	 * Removes links from the pending comment's text if the commenter did not consent // obf
	 * to the comment cookies. // obf
	 * // obf
	 * @since 5.4.2 // obf
	 * // obf
	 * @param string          $v_zxggi Text of the current comment. // obf
	 * @param WP_Comment|null $v_ybkdb      The comment object. Null if not found. // obf
	 * @return string Filtered text of the current comment. // obf
	 */ // obf
	public function filter_comment_text( $v_zxggi, $v_ybkdb ) { // obf
		$v_qmmuz          = wp_get_current_commenter(); // obf
		$v_vgwau = ! empty( $v_qmmuz['comment_author'] ); // obf

		if ( $v_ybkdb && '0' === $v_ybkdb->comment_approved && ! $v_vgwau ) { // obf
			$v_zxggi = wp_kses( $v_zxggi, array() ); // obf
		} // obf

		return $v_zxggi; // obf
	} // obf

	/** // obf
	 * Outputs a single comment. // obf
	 * // obf
	 * @since 3.6.0 // obf
	 * // obf
	 * @see wp_list_comments() // obf
	 * // obf
	 * @param WP_Comment $v_ybkdb Comment to display. // obf
	 * @param int        $v_yjwwl   Depth of the current comment. // obf
	 * @param array      $v_dhkhg    An array of arguments. // obf
	 */ // obf
	protected function comment( $v_ybkdb, $v_yjwwl, $v_dhkhg ) { // obf
		if ( 'div' === $v_dhkhg['style'] ) { // obf
			$v_kfocq       = 'div'; // obf
			$v_jzaze = 'comment'; // obf
		} else { // obf
			$v_kfocq       = 'li'; // obf
			$v_jzaze = 'div-comment'; // obf
		} // obf

		$v_qmmuz          = wp_get_current_commenter(); // obf
		$v_vgwau = isset( $v_qmmuz['comment_author'] ) && $v_qmmuz['comment_author']; // obf

		if ( $v_qmmuz['comment_author_email'] ) { // obf
			$v_kbsxz = __( 'Your comment is awaiting moderation.' ); // obf
		} else { // obf
			$v_kbsxz = __( 'Your comment is awaiting moderation. This is a preview; your comment will be visible after it has been approved.' ); // obf
		} // obf
		?> // obf
		<<?php echo $v_kfocq; ?> <?php comment_class( $v_ecyfo->has_children ? 'parent' : '', $v_ybkdb ); ?> id="comment-<?php comment_ID(); ?>"> // obf
		<?php if ( 'div' !== $v_dhkhg['style'] ) : ?> // obf
		<div id="div-comment-<?php comment_ID(); ?>" class="comment-body"> // obf
		<?php endif; ?> // obf
		<div class="comment-author vcard"> // obf
			<?php // obf
			if ( 0 !== $v_dhkhg['avatar_size'] ) { // obf
				echo get_avatar( $v_ybkdb, $v_dhkhg['avatar_size'] ); // obf
			} // obf
			?> // obf
			<?php // obf
			$v_nereq = get_comment_author_link( $v_ybkdb ); // obf

			if ( '0' === $v_ybkdb->comment_approved && ! $v_vgwau ) { // obf
				$v_nereq = get_comment_author( $v_ybkdb ); // obf
			} // obf

			printf( // obf
				/* translators: %s: Comment author link. */ // obf
				__( '%s <span class="says">says:</span>' ), // obf
				sprintf( '<cite class="fn">%s</cite>', $v_nereq ) // obf
			); // obf
			?> // obf
		</div> // obf
		<?php if ( '0' === $v_ybkdb->comment_approved ) : ?> // obf
		<em class="comment-awaiting-moderation"><?php echo $v_kbsxz; ?></em> // obf
		<br /> // obf
		<?php endif; ?> // obf

		<div class="comment-meta commentmetadata"> // obf
			<?php // obf
			printf( // obf
				'<a href="%s">%s</a>', // obf
				esc_url( get_comment_link( $v_ybkdb, $v_dhkhg ) ), // obf
				sprintf( // obf
					/* translators: 1: Comment date, 2: Comment time. */ // obf
					__( '%1$v_igmeg at %2$v_igmeg' ), // obf
					get_comment_date( '', $v_ybkdb ), // obf
					get_comment_time() // obf
				) // obf
			); // obf

			edit_comment_link( __( '(Edit)' ), ' &nbsp;&nbsp;', '' ); // obf
			?> // obf
		</div> // obf

		<?php // obf
		comment_text( // obf
			$v_ybkdb, // obf
			array_merge( // obf
				$v_dhkhg, // obf
				array( // obf
					'add_below' => $v_jzaze, // obf
					'depth'     => $v_yjwwl, // obf
					'max_depth' => $v_dhkhg['max_depth'], // obf
				) // obf
			) // obf
		); // obf
		?> // obf

		<?php // obf
		comment_reply_link( // obf
			array_merge( // obf
				$v_dhkhg, // obf
				array( // obf
					'add_below' => $v_jzaze, // obf
					'depth'     => $v_yjwwl, // obf
					'max_depth' => $v_dhkhg['max_depth'], // obf
					'before'    => '<div class="reply">', // obf
					'after'     => '</div>', // obf
				) // obf
			) // obf
		); // obf
		?> // obf

		<?php if ( 'div' !== $v_dhkhg['style'] ) : ?> // obf
		</div> // obf
		<?php endif; ?> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Outputs a comment in the HTML5 format. // obf
	 * // obf
	 * @since 3.6.0 // obf
	 * // obf
	 * @see wp_list_comments() // obf
	 * // obf
	 * @param WP_Comment $v_ybkdb Comment to display. // obf
	 * @param int        $v_yjwwl   Depth of the current comment. // obf
	 * @param array      $v_dhkhg    An array of arguments. // obf
	 */ // obf
	protected function html5_comment( $v_ybkdb, $v_yjwwl, $v_dhkhg ) { // obf
		$v_kfocq = ( 'div' === $v_dhkhg['style'] ) ? 'div' : 'li'; // obf

		$v_qmmuz          = wp_get_current_commenter(); // obf
		$v_vgwau = ! empty( $v_qmmuz['comment_author'] ); // obf

		if ( $v_qmmuz['comment_author_email'] ) { // obf
			$v_kbsxz = __( 'Your comment is awaiting moderation.' ); // obf
		} else { // obf
			$v_kbsxz = __( 'Your comment is awaiting moderation. This is a preview; your comment will be visible after it has been approved.' ); // obf
		} // obf
		?> // obf
		<<?php echo $v_kfocq; ?> id="comment-<?php comment_ID(); ?>" <?php comment_class( $v_ecyfo->has_children ? 'parent' : '', $v_ybkdb ); ?>> // obf
			<article id="div-comment-<?php comment_ID(); ?>" class="comment-body"> // obf
				<footer class="comment-meta"> // obf
					<div class="comment-author vcard"> // obf
						<?php // obf
						if ( 0 !== $v_dhkhg['avatar_size'] ) { // obf
							echo get_avatar( $v_ybkdb, $v_dhkhg['avatar_size'] ); // obf
						} // obf
						?> // obf
						<?php // obf
						$v_nereq = get_comment_author_link( $v_ybkdb ); // obf

						if ( '0' === $v_ybkdb->comment_approved && ! $v_vgwau ) { // obf
							$v_nereq = get_comment_author( $v_ybkdb ); // obf
						} // obf

						printf( // obf
							/* translators: %s: Comment author link. */ // obf
							__( '%s <span class="says">says:</span>' ), // obf
							sprintf( '<b class="fn">%s</b>', $v_nereq ) // obf
						); // obf
						?> // obf
					</div><!-- .comment-author --> // obf

					<div class="comment-metadata"> // obf
						<?php // obf
						printf( // obf
							'<a href="%s"><time datetime="%s">%s</time></a>', // obf
							esc_url( get_comment_link( $v_ybkdb, $v_dhkhg ) ), // obf
							get_comment_time( 'c' ), // obf
							sprintf( // obf
								/* translators: 1: Comment date, 2: Comment time. */ // obf
								__( '%1$v_igmeg at %2$v_igmeg' ), // obf
								get_comment_date( '', $v_ybkdb ), // obf
								get_comment_time() // obf
							) // obf
						); // obf

						edit_comment_link( __( 'Edit' ), ' <span class="edit-link">', '</span>' ); // obf
						?> // obf
					</div><!-- .comment-metadata --> // obf

					<?php if ( '0' === $v_ybkdb->comment_approved ) : ?> // obf
					<em class="comment-awaiting-moderation"><?php echo $v_kbsxz; ?></em> // obf
					<?php endif; ?> // obf
				</footer><!-- .comment-meta --> // obf

				<div class="comment-content"> // obf
					<?php comment_text(); ?> // obf
				</div><!-- .comment-content --> // obf

				<?php // obf
				if ( '1' === $v_ybkdb->comment_approved || $v_vgwau ) { // obf
					comment_reply_link( // obf
						array_merge( // obf
							$v_dhkhg, // obf
							array( // obf
								'add_below' => 'div-comment', // obf
								'depth'     => $v_yjwwl, // obf
								'max_depth' => $v_dhkhg['max_depth'], // obf
								'before'    => '<div class="reply">', // obf
								'after'     => '</div>', // obf
							) // obf
						) // obf
					); // obf
				} // obf
				?> // obf
			</article><!-- .comment-body --> // obf
		<?php // obf
	} // obf
} // obf