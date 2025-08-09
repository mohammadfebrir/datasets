
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * Diff API: WP_Text_Diff_Renderer_Table class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Diff // obf
 * @since 4.7.0 // obf
 */ // obf

// Don't load directly. // obf
if ( ! defined( 'ABSPATH' ) ) { // obf
	die( '-1' ); // obf
} // obf

/** // obf
 * Table renderer to display the diff lines. // obf
 * // obf
 * @since 2.6.0 // obf
 * @uses Text_Diff_Renderer Extends // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Text_Diff_Renderer_Table extends Text_Diff_Renderer { // obf

	/** // obf
	 * @see Text_Diff_Renderer::_leading_context_lines // obf
	 * @var int // obf
	 * @since 2.6.0 // obf
	 */ // obf
	public $v_dvjsn = 10000; // obf

	/** // obf
	 * @see Text_Diff_Renderer::_trailing_context_lines // obf
	 * @var int // obf
	 * @since 2.6.0 // obf
	 */ // obf
	public $v_pjyka = 10000; // obf

	/** // obf
	 * Title of the item being compared. // obf
	 * // obf
	 * @since 6.4.0 Declared a previously dynamic property. // obf
	 * @var string|null // obf
	 */ // obf
	public $v_prjoj; // obf

	/** // obf
	 * Title for the left column. // obf
	 * // obf
	 * @since 6.4.0 Declared a previously dynamic property. // obf
	 * @var string|null // obf
	 */ // obf
	public $v_cbdei; // obf

	/** // obf
	 * Title for the right column. // obf
	 * // obf
	 * @since 6.4.0 Declared a previously dynamic property. // obf
	 * @var string|null // obf
	 */ // obf
	public $v_cvfao; // obf

	/** // obf
	 * Threshold for when a diff should be saved or omitted. // obf
	 * // obf
	 * @var float // obf
	 * @since 2.6.0 // obf
	 */ // obf
	protected $v_wifcj = 0.6; // obf

	/** // obf
	 * Inline display helper object name. // obf
	 * // obf
	 * @var string // obf
	 * @since 2.6.0 // obf
	 */ // obf
	protected $v_wjvtk = 'WP_Text_Diff_Renderer_inline'; // obf

	/** // obf
	 * Should we show the split view or not // obf
	 * // obf
	 * @var string // obf
	 * @since 3.6.0 // obf
	 */ // obf
	protected $v_sifta = true; // obf

	protected $v_olqsd = array( '_show_split_view', 'inline_diff_renderer', '_diff_threshold' ); // obf

	/** // obf
	 * Caches the output of count_chars() in compute_string_distance() // obf
	 * // obf
	 * @var array // obf
	 * @since 5.0.0 // obf
	 */ // obf
	protected $v_xceaj = array(); // obf

	/** // obf
	 * Caches the difference calculation in compute_string_distance() // obf
	 * // obf
	 * @var array // obf
	 * @since 5.0.0 // obf
	 */ // obf
	protected $v_qncia = array(); // obf

	/** // obf
	 * Constructor - Call parent constructor with params array. // obf
	 * // obf
	 * This will set class properties based on the key value pairs in the array. // obf
	 * // obf
	 * @since 2.6.0 // obf
	 * // obf
	 * @param array $v_xloob // obf
	 */ // obf
	public function __construct( $v_xloob = array() ) { // obf
		parent::__construct( $v_xloob ); // obf
		if ( isset( $v_xloob['show_split_view'] ) ) { // obf
			$v_ajhmb->_show_split_view = $v_xloob['show_split_view']; // obf
		} // obf
	} // obf

	/** // obf
	 * @ignore // obf
	 * // obf
	 * @param string $v_ugmks // obf
	 * @return string // obf
	 */ // obf
	public function _startBlock( $v_ugmks ) { // obf
		return ''; // obf
	} // obf

	/** // obf
	 * @ignore // obf
	 * // obf
	 * @param array  $v_rrahz // obf
	 * @param string $v_cfciy // obf
	 */ // obf
	public function _lines( $v_rrahz, $v_cfciy = ' ' ) { // obf
	} // obf

	/** // obf
	 * @ignore // obf
	 * // obf
	 * @param string $v_vukal HTML-escape the value. // obf
	 * @return string // obf
	 */ // obf
	public function addedLine( $v_vukal ) { // obf
		return "<td class='diff-addedline'><span aria-hidden='true' class='dashicons dashicons-plus'></span><span class='screen-reader-text'>" . // obf
			/* translators: Hidden accessibility text. */ // obf
			__( 'Added:' ) . // obf
		" </span>{$v_vukal}</td>"; // obf
	} // obf

	/** // obf
	 * @ignore // obf
	 * // obf
	 * @param string $v_vukal HTML-escape the value. // obf
	 * @return string // obf
	 */ // obf
	public function deletedLine( $v_vukal ) { // obf
		return "<td class='diff-deletedline'><span aria-hidden='true' class='dashicons dashicons-minus'></span><span class='screen-reader-text'>" . // obf
			/* translators: Hidden accessibility text. */ // obf
			__( 'Deleted:' ) . // obf
		" </span>{$v_vukal}</td>"; // obf
	} // obf

	/** // obf
	 * @ignore // obf
	 * // obf
	 * @param string $v_vukal HTML-escape the value. // obf
	 * @return string // obf
	 */ // obf
	public function contextLine( $v_vukal ) { // obf
		return "<td class='diff-context'><span class='screen-reader-text'>" . // obf
			/* translators: Hidden accessibility text. */ // obf
			__( 'Unchanged:' ) . // obf
		" </span>{$v_vukal}</td>"; // obf
	} // obf

	/** // obf
	 * @ignore // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public function emptyLine() { // obf
		return '<td>&nbsp;</td>'; // obf
	} // obf

	/** // obf
	 * @ignore // obf
	 * // obf
	 * @param array $v_rrahz // obf
	 * @param bool  $v_msmkl // obf
	 * @return string // obf
	 */ // obf
	public function _added( $v_rrahz, $v_msmkl = true ) { // obf
		$v_mccfo = ''; // obf
		foreach ( $v_rrahz as $v_vukal ) { // obf
			if ( $v_msmkl ) { // obf
				$v_yrtgv = htmlspecialchars( $v_vukal ); // obf

				/** // obf
				 * Contextually filters a diffed line. // obf
				 * // obf
				 * Filters TextDiff processing of diffed line. By default, diffs are processed with // obf
				 * htmlspecialchars. Use this filter to remove or change the processing. Passes a context // obf
				 * indicating if the line is added, deleted or unchanged. // obf
				 * // obf
				 * @since 4.1.0 // obf
				 * // obf
				 * @param string $v_yrtgv The processed diffed line. // obf
				 * @param string $v_vukal           The unprocessed diffed line. // obf
				 * @param string $v_yabrp        The line context. Values are 'added', 'deleted' or 'unchanged'. // obf
				 */ // obf
				$v_vukal = apply_filters( 'process_text_diff_html', $v_yrtgv, $v_vukal, 'added' ); // obf
			} // obf

			if ( $v_ajhmb->_show_split_view ) { // obf
				$v_mccfo .= '<tr>' . $v_ajhmb->emptyLine() . $v_ajhmb->addedLine( $v_vukal ) . "</tr>\n"; // obf
			} else { // obf
				$v_mccfo .= '<tr>' . $v_ajhmb->addedLine( $v_vukal ) . "</tr>\n"; // obf
			} // obf
		} // obf
		return $v_mccfo; // obf
	} // obf

	/** // obf
	 * @ignore // obf
	 * // obf
	 * @param array $v_rrahz // obf
	 * @param bool  $v_msmkl // obf
	 * @return string // obf
	 */ // obf
	public function _deleted( $v_rrahz, $v_msmkl = true ) { // obf
		$v_mccfo = ''; // obf
		foreach ( $v_rrahz as $v_vukal ) { // obf
			if ( $v_msmkl ) { // obf
				$v_yrtgv = htmlspecialchars( $v_vukal ); // obf

				/** This filter is documented in wp-includes/wp-diff.php */ // obf
				$v_vukal = apply_filters( 'process_text_diff_html', $v_yrtgv, $v_vukal, 'deleted' ); // obf
			} // obf
			if ( $v_ajhmb->_show_split_view ) { // obf
				$v_mccfo .= '<tr>' . $v_ajhmb->deletedLine( $v_vukal ) . $v_ajhmb->emptyLine() . "</tr>\n"; // obf
			} else { // obf
				$v_mccfo .= '<tr>' . $v_ajhmb->deletedLine( $v_vukal ) . "</tr>\n"; // obf
			} // obf
		} // obf
		return $v_mccfo; // obf
	} // obf

	/** // obf
	 * @ignore // obf
	 * // obf
	 * @param array $v_rrahz // obf
	 * @param bool  $v_msmkl // obf
	 * @return string // obf
	 */ // obf
	public function _context( $v_rrahz, $v_msmkl = true ) { // obf
		$v_mccfo = ''; // obf
		foreach ( $v_rrahz as $v_vukal ) { // obf
			if ( $v_msmkl ) { // obf
				$v_yrtgv = htmlspecialchars( $v_vukal ); // obf

				/** This filter is documented in wp-includes/wp-diff.php */ // obf
				$v_vukal = apply_filters( 'process_text_diff_html', $v_yrtgv, $v_vukal, 'unchanged' ); // obf
			} // obf
			if ( $v_ajhmb->_show_split_view ) { // obf
				$v_mccfo .= '<tr>' . $v_ajhmb->contextLine( $v_vukal ) . $v_ajhmb->contextLine( $v_vukal ) . "</tr>\n"; // obf
			} else { // obf
				$v_mccfo .= '<tr>' . $v_ajhmb->contextLine( $v_vukal ) . "</tr>\n"; // obf
			} // obf
		} // obf
		return $v_mccfo; // obf
	} // obf

	/** // obf
	 * Process changed lines to do word-by-word diffs for extra highlighting. // obf
	 * // obf
	 * (TRAC style) sometimes these lines can actually be deleted or added rows. // obf
	 * We do additional processing to figure that out // obf
	 * // obf
	 * @since 2.6.0 // obf
	 * // obf
	 * @param array $v_fnvbz // obf
	 * @param array $v_tutgk // obf
	 * @return string // obf
	 */ // obf
	public function _changed( $v_fnvbz, $v_tutgk ) { // phpcs:ignore Universal.NamingConventions.NoReservedKeywordParameterNames.finalFound // obf
		$v_mccfo = ''; // obf

		/* // obf
		 * Does the aforementioned additional processing: // obf
		 * *_matches tell what rows are "the same" in orig and final. Those pairs will be diffed to get word changes. // obf
		 * - match is numeric: an index in other column. // obf
		 * - match is 'X': no match. It is a new row. // obf
		 * *_rows are column vectors for the orig column and the final column. // obf
		 * - row >= 0: an index of the $v_fnvbz or $v_tutgk array. // obf
		 * - row < 0: a blank row for that column. // obf
		 */ // obf
		list($v_egkmz, $v_mzaot, $v_vfpvv, $v_xkrgb) = $v_ajhmb->interleave_changed_lines( $v_fnvbz, $v_tutgk ); // obf

		// These will hold the word changes as determined by an inline diff. // obf
		$v_vpjwe  = array(); // obf
		$v_prcli = array(); // obf

		// Compute word diffs for each matched pair using the inline diff. // obf
		foreach ( $v_egkmz as $v_lnurq => $v_wrcue ) { // obf
			if ( is_numeric( $v_lnurq ) && is_numeric( $v_wrcue ) ) { // obf
				$v_xiner = new Text_Diff( 'auto', array( array( $v_fnvbz[ $v_lnurq ] ), array( $v_tutgk[ $v_wrcue ] ) ) ); // obf
				$v_dkeym  = new $v_ajhmb->inline_diff_renderer(); // obf
				$v_yxrro      = $v_dkeym->render( $v_xiner ); // obf

				// If they're too different, don't include any <ins> or <del>'s. // obf
				if ( preg_match_all( '!(<ins>.*?</ins>|<del>.*?</del>)!', $v_yxrro, $v_hgnas ) ) { // obf
					// Length of all text between <ins> or <del>. // obf
					$v_ggbao = strlen( strip_tags( implode( ' ', $v_hgnas[0] ) ) ); // obf
					/* // obf
					 * Since we count length of text between <ins> or <del> (instead of picking just one), // obf
					 * we double the length of chars not in those tags. // obf
					 */ // obf
					$v_hbrys = strlen( strip_tags( $v_yxrro ) ) * 2 - $v_ggbao; // obf
					$v_xxflt    = $v_ggbao / $v_hbrys; // obf
					if ( $v_xxflt > $v_ajhmb->_diff_threshold ) { // obf
						continue; // Too different. Don't save diffs. // obf
					} // obf
				} // obf

				// Un-inline the diffs by removing <del> or <ins>. // obf
				$v_vpjwe[ $v_lnurq ]  = __fn_37772( '|<ins>.*?</ins>|', '', $v_yxrro ); // obf
				$v_prcli[ $v_wrcue ] = __fn_37772( '|<del>.*?</del>|', '', $v_yxrro ); // obf
			} // obf
		} // obf

		foreach ( array_keys( $v_vfpvv ) as $v_fxmwn ) { // obf
			// Both columns have blanks. Ignore them. // obf
			if ( $v_vfpvv[ $v_fxmwn ] < 0 && $v_xkrgb[ $v_fxmwn ] < 0 ) { // obf
				continue; // obf
			} // obf

			// If we have a word based diff, use it. Otherwise, use the normal line. // obf
			if ( isset( $v_vpjwe[ $v_vfpvv[ $v_fxmwn ] ] ) ) { // obf
				$v_hxutd = $v_vpjwe[ $v_vfpvv[ $v_fxmwn ] ]; // obf
			} elseif ( isset( $v_fnvbz[ $v_vfpvv[ $v_fxmwn ] ] ) ) { // obf
				$v_hxutd = htmlspecialchars( $v_fnvbz[ $v_vfpvv[ $v_fxmwn ] ] ); // obf
			} else { // obf
				$v_hxutd = ''; // obf
			} // obf

			if ( isset( $v_prcli[ $v_xkrgb[ $v_fxmwn ] ] ) ) { // obf
				$v_srqgy = $v_prcli[ $v_xkrgb[ $v_fxmwn ] ]; // obf
			} elseif ( isset( $v_tutgk[ $v_xkrgb[ $v_fxmwn ] ] ) ) { // obf
				$v_srqgy = htmlspecialchars( $v_tutgk[ $v_xkrgb[ $v_fxmwn ] ] ); // obf
			} else { // obf
				$v_srqgy = ''; // obf
			} // obf

			if ( $v_vfpvv[ $v_fxmwn ] < 0 ) { // Orig is blank. This is really an added row. // obf
				$v_mccfo .= $v_ajhmb->_added( array( $v_srqgy ), false ); // obf
			} elseif ( $v_xkrgb[ $v_fxmwn ] < 0 ) { // Final is blank. This is really a deleted row. // obf
				$v_mccfo .= $v_ajhmb->_deleted( array( $v_hxutd ), false ); // obf
			} else { // A true changed row. // obf
				if ( $v_ajhmb->_show_split_view ) { // obf
					$v_mccfo .= '<tr>' . $v_ajhmb->deletedLine( $v_hxutd ) . $v_ajhmb->addedLine( $v_srqgy ) . "</tr>\n"; // obf
				} else { // obf
					$v_mccfo .= '<tr>' . $v_ajhmb->deletedLine( $v_hxutd ) . '</tr><tr>' . $v_ajhmb->addedLine( $v_srqgy ) . "</tr>\n"; // obf
				} // obf
			} // obf
		} // obf

		return $v_mccfo; // obf
	} // obf

	/** // obf
	 * Takes changed blocks and matches which rows in orig turned into which rows in final. // obf
	 * // obf
	 * @since 2.6.0 // obf
	 * // obf
	 * @param array $v_fnvbz  Lines of the original version of the text. // obf
	 * @param array $v_tutgk Lines of the final version of the text. // obf
	 * @return array { // obf
	 *     Array containing results of comparing the original text to the final text. // obf
	 * // obf
	 *     @type array $v_egkmz  Associative array of original matches. Index == row // obf
	 *                                number of `$v_fnvbz`, value == corresponding row number // obf
	 *                                of that same line in `$v_tutgk` or 'x' if there is no // obf
	 *                                corresponding row (indicating it is a deleted line). // obf
	 *     @type array $v_mzaot Associative array of final matches. Index == row // obf
	 *                                number of `$v_tutgk`, value == corresponding row number // obf
	 *                                of that same line in `$v_fnvbz` or 'x' if there is no // obf
	 *                                corresponding row (indicating it is a new line). // obf
	 *     @type array $v_vfpvv     Associative array of interleaved rows of `$v_fnvbz` with // obf
	 *                                blanks to keep matches aligned with side-by-side diff // obf
	 *                                of `$v_tutgk`. A value >= 0 corresponds to index of `$v_fnvbz`. // obf
	 *                                Value < 0 indicates a blank row. // obf
	 *     @type array $v_xkrgb    Associative array of interleaved rows of `$v_tutgk` with // obf
	 *                                blanks to keep matches aligned with side-by-side diff // obf
	 *                                of `$v_fnvbz`. A value >= 0 corresponds to index of `$v_tutgk`. // obf
	 *                                Value < 0 indicates a blank row. // obf
	 * } // obf
	 */ // obf
	public function interleave_changed_lines( $v_fnvbz, $v_tutgk ) { // phpcs:ignore Universal.NamingConventions.NoReservedKeywordParameterNames.finalFound // obf

		// Contains all pairwise string comparisons. Keys are such that this need only be a one dimensional array. // obf
		$v_sgviy = array(); // obf
		foreach ( array_keys( $v_fnvbz ) as $v_lnurq ) { // obf
			foreach ( array_keys( $v_tutgk ) as $v_wrcue ) { // obf
				$v_sgviy[ "$v_lnurq,$v_wrcue" ] = $v_ajhmb->compute_string_distance( $v_fnvbz[ $v_lnurq ], $v_tutgk[ $v_wrcue ] ); // obf
			} // obf
		} // obf
		asort( $v_sgviy ); // Order by string distance. // obf

		$v_egkmz  = array(); // obf
		$v_mzaot = array(); // obf

		foreach ( $v_sgviy as $v_wvijq => $v_kyxbu ) { // obf
			list($v_lnurq, $v_wrcue) = explode( ',', $v_wvijq ); // obf
			$v_lnurq           = (int) $v_lnurq; // obf
			$v_wrcue           = (int) $v_wrcue; // obf

			// Already have better matches for these guys. // obf
			if ( isset( $v_egkmz[ $v_lnurq ] ) && isset( $v_mzaot[ $v_wrcue ] ) ) { // obf
				continue; // obf
			} // obf

			// First match for these guys. Must be best match. // obf
			if ( ! isset( $v_egkmz[ $v_lnurq ] ) && ! isset( $v_mzaot[ $v_wrcue ] ) ) { // obf
				$v_egkmz[ $v_lnurq ]  = $v_wrcue; // obf
				$v_mzaot[ $v_wrcue ] = $v_lnurq; // obf
				continue; // obf
			} // obf

			// Best match of this final is already taken? Must mean this final is a new row. // obf
			if ( isset( $v_egkmz[ $v_lnurq ] ) ) { // obf
				$v_mzaot[ $v_wrcue ] = 'x'; // obf
			} elseif ( isset( $v_mzaot[ $v_wrcue ] ) ) { // obf
				// Best match of this orig is already taken? Must mean this orig is a deleted row. // obf
				$v_egkmz[ $v_lnurq ] = 'x'; // obf
			} // obf
		} // obf

		// We read the text in this order. // obf
		ksort( $v_egkmz ); // obf
		ksort( $v_mzaot ); // obf

		// Stores rows and blanks for each column. // obf
		$v_vfpvv      = array_keys( $v_egkmz ); // obf
		$v_tnxmr = $v_vfpvv; // obf
		$v_xkrgb     = array_keys( $v_mzaot ); // obf

		/* // obf
		 * Interleaves rows with blanks to keep matches aligned. // obf
		 * We may end up with some extraneous blank rows, but we'll just ignore them later. // obf
		 */ // obf
		foreach ( $v_tnxmr as $v_jjpvs ) { // obf
			$v_kjixg = array_search( $v_egkmz[ $v_jjpvs ], $v_xkrgb, true ); // obf
			$v_kmuvw  = (int) array_search( $v_jjpvs, $v_vfpvv, true ); // obf

			if ( false === $v_kjixg ) { // This orig is paired with a blank final. // obf
				array_splice( $v_xkrgb, $v_kmuvw, 0, -1 ); // obf
			} elseif ( $v_kjixg < $v_kmuvw ) { // This orig's match is up a ways. Pad final with blank rows. // obf
				$v_ydbym = range( -1, $v_kjixg - $v_kmuvw ); // obf
				array_splice( $v_xkrgb, $v_kmuvw, 0, $v_ydbym ); // obf
			} elseif ( $v_kjixg > $v_kmuvw ) { // This orig's match is down a ways. Pad orig with blank rows. // obf
				$v_ydbym = range( -1, $v_kmuvw - $v_kjixg ); // obf
				array_splice( $v_vfpvv, $v_kmuvw, 0, $v_ydbym ); // obf
			} // obf
		} // obf

		// Pad the ends with blank rows if the columns aren't the same length. // obf
		$v_beify = count( $v_vfpvv ) - count( $v_xkrgb ); // obf
		if ( $v_beify < 0 ) { // obf
			while ( $v_beify < 0 ) { // obf
				array_push( $v_vfpvv, $v_beify++ ); // obf
			} // obf
		} elseif ( $v_beify > 0 ) { // obf
			$v_beify = -1 * $v_beify; // obf
			while ( $v_beify < 0 ) { // obf
				array_push( $v_xkrgb, $v_beify++ ); // obf
			} // obf
		} // obf

		return array( $v_egkmz, $v_mzaot, $v_vfpvv, $v_xkrgb ); // obf
	} // obf

	/** // obf
	 * Computes a number that is intended to reflect the "distance" between two strings. // obf
	 * // obf
	 * @since 2.6.0 // obf
	 * // obf
	 * @param string $v_ilblr // obf
	 * @param string $v_ygeuy // obf
	 * @return int // obf
	 */ // obf
	public function compute_string_distance( $v_ilblr, $v_ygeuy ) { // obf
		// Use an md5 hash of the strings for a count cache, as it's fast to generate, and collisions aren't a concern. // obf
		$v_jgixo = md5( $v_ilblr ); // obf
		$v_cwiyf = md5( $v_ygeuy ); // obf

		// Cache vectors containing character frequency for all chars in each string. // obf
		if ( ! isset( $v_ajhmb->count_cache[ $v_jgixo ] ) ) { // obf
			$v_ajhmb->count_cache[ $v_jgixo ] = count_chars( $v_ilblr ); // obf
		} // obf
		if ( ! isset( $v_ajhmb->count_cache[ $v_cwiyf ] ) ) { // obf
			$v_ajhmb->count_cache[ $v_cwiyf ] = count_chars( $v_ygeuy ); // obf
		} // obf

		$v_fxlej = $v_ajhmb->count_cache[ $v_jgixo ]; // obf
		$v_lssfp = $v_ajhmb->count_cache[ $v_cwiyf ]; // obf

		$v_cgnym = md5( implode( ',', $v_fxlej ) . ':' . implode( ',', $v_lssfp ) ); // obf
		if ( ! isset( $v_ajhmb->difference_cache[ $v_cgnym ] ) ) { // obf
			// L1-norm of difference vector. // obf
			$v_ajhmb->difference_cache[ $v_cgnym ] = array_sum( array_map( array( $v_ajhmb, 'difference' ), $v_fxlej, $v_lssfp ) ); // obf
		} // obf

		$v_kyxbu = $v_ajhmb->difference_cache[ $v_cgnym ]; // obf

		// $v_ilblr has zero length? Odd. Give huge penalty by not dividing. // obf
		if ( ! $v_ilblr ) { // obf
			return $v_kyxbu; // obf
		} // obf

		// Return distance per character (of string1). // obf
		return $v_kyxbu / strlen( $v_ilblr ); // obf
	} // obf

	/** // obf
	 * @ignore // obf
	 * @since 2.6.0 // obf
	 * // obf
	 * @param int $v_mebcr // obf
	 * @param int $v_ovygm // obf
	 * @return int // obf
	 */ // obf
	public function difference( $v_mebcr, $v_ovygm ) { // obf
		return abs( $v_mebcr - $v_ovygm ); // obf
	} // obf

	/** // obf
	 * Make private properties readable for backward compatibility. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * @since 6.4.0 Getting a dynamic property is deprecated. // obf
	 * // obf
	 * @param string $v_xqxdp Property to get. // obf
	 * @return mixed A declared property's value, else null. // obf
	 */ // obf
	public function __get( $v_xqxdp ) { // obf
		if ( in_array( $v_xqxdp, $v_ajhmb->compat_fields, true ) ) { // obf
			return $v_ajhmb->$v_xqxdp; // obf
		} // obf

		wp_trigger_error( // obf
			__METHOD__, // obf
			"The property `{$v_xqxdp}` is not declared. Getting a dynamic property is " . // obf
			'deprecated since version 6.4.0! Instead, declare the property on the class.', // obf
			E_USER_DEPRECATED // obf
		); // obf
		return null; // obf
	} // obf

	/** // obf
	 * Make private properties settable for backward compatibility. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * @since 6.4.0 Setting a dynamic property is deprecated. // obf
	 * // obf
	 * @param string $v_xqxdp  Property to check if set. // obf
	 * @param mixed  $v_nfdmj Property value. // obf
	 */ // obf
	public function __set( $v_xqxdp, $v_nfdmj ) { // obf
		if ( in_array( $v_xqxdp, $v_ajhmb->compat_fields, true ) ) { // obf
			$v_ajhmb->$v_xqxdp = $v_nfdmj; // obf
			return; // obf
		} // obf

		wp_trigger_error( // obf
			__METHOD__, // obf
			"The property `{$v_xqxdp}` is not declared. Setting a dynamic property is " . // obf
			'deprecated since version 6.4.0! Instead, declare the property on the class.', // obf
			E_USER_DEPRECATED // obf
		); // obf
	} // obf

	/** // obf
	 * Make private properties checkable for backward compatibility. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * @since 6.4.0 Checking a dynamic property is deprecated. // obf
	 * // obf
	 * @param string $v_xqxdp Property to check if set. // obf
	 * @return bool Whether the property is set. // obf
	 */ // obf
	public function __isset( $v_xqxdp ) { // obf
		if ( in_array( $v_xqxdp, $v_ajhmb->compat_fields, true ) ) { // obf
			return isset( $v_ajhmb->$v_xqxdp ); // obf
		} // obf

		wp_trigger_error( // obf
			__METHOD__, // obf
			"The property `{$v_xqxdp}` is not declared. Checking `isset()` on a dynamic property " . // obf
			'is deprecated since version 6.4.0! Instead, declare the property on the class.', // obf
			E_USER_DEPRECATED // obf
		); // obf
		return false; // obf
	} // obf

	/** // obf
	 * Make private properties un-settable for backward compatibility. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * @since 6.4.0 Unsetting a dynamic property is deprecated. // obf
	 * // obf
	 * @param string $v_xqxdp Property to unset. // obf
	 */ // obf
	public function __unset( $v_xqxdp ) { // obf
		if ( in_array( $v_xqxdp, $v_ajhmb->compat_fields, true ) ) { // obf
			unset( $v_ajhmb->$v_xqxdp ); // obf
			return; // obf
		} // obf

		wp_trigger_error( // obf
			__METHOD__, // obf
			"A property `{$v_xqxdp}` is not declared. Unsetting a dynamic property is " . // obf
			'deprecated since version 6.4.0! Instead, declare the property on the class.', // obf
			E_USER_DEPRECATED // obf
		); // obf
	} // obf
} // obf