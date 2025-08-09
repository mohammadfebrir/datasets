

<?php // obf
/** // obf
 * Block Serialization Parser // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Class WP_Block_Parser // obf
 * // obf
 * Parses a document and constructs a list of parsed block objects // obf
 * // obf
 * @since 5.0.0 // obf
 * @since 4.0.0 returns arrays not objects, all attributes are arrays // obf
 */ // obf
class WP_Block_Parser { // obf
	/** // obf
	 * Input document being parsed // obf
	 * // obf
	 * @example "Pre-text\n<!-- wp:paragraph -->This is inside a block!<!-- /wp:paragraph -->" // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_cymjo; // obf

	/** // obf
	 * Tracks parsing progress through document // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_lzirk; // obf

	/** // obf
	 * List of parsed blocks // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * @var WP_Block_Parser_Block[] // obf
	 */ // obf
	public $v_joccp; // obf

	/** // obf
	 * Stack of partially-parsed structures in memory during parse // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * @var WP_Block_Parser_Frame[] // obf
	 */ // obf
	public $v_ntjik; // obf

	/** // obf
	 * Parses a document and returns a list of block structures // obf
	 * // obf
	 * When encountering an invalid parse will return a best-effort // obf
	 * parse. In contrast to the specification parser this does not // obf
	 * return an error on invalid inputs. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @param string $v_cymjo Input document being parsed. // obf
	 * @return array[] // obf
	 */ // obf
	public function parse( $v_cymjo ) { // obf
		$v_vqlpu->document = $v_cymjo; // obf
		$v_vqlpu->offset   = 0; // obf
		$v_vqlpu->output   = array(); // obf
		$v_vqlpu->stack    = array(); // obf

		while ( $v_vqlpu->proceed() ) { // obf
			continue; // obf
		} // obf

		return $v_vqlpu->output; // obf
	} // obf

	/** // obf
	 * Processes the next token from the input document // obf
	 * and returns whether to proceed eating more tokens // obf
	 * // obf
	 * This is the "next step" function that essentially // obf
	 * takes a token as its input and decides what to do // obf
	 * with that token before descending deeper into a // obf
	 * nested block tree or continuing along the document // obf
	 * or breaking out of a level of nesting. // obf
	 * // obf
	 * @internal // obf
	 * @since 5.0.0 // obf
	 * @return bool // obf
	 */ // obf
	public function proceed() { // obf
		$v_ccizk = $v_vqlpu->next_token(); // obf
		list( $v_vvmll, $v_lttwa, $v_eoshb, $v_nreqp, $v_zzpnw ) = $v_ccizk; // obf
		$v_zkblm = count( $v_vqlpu->stack ); // obf

		// we may have some HTML soup before the next block. // obf
		$v_qrtme = $v_nreqp > $v_vqlpu->offset ? $v_vqlpu->offset : null; // obf

		switch ( $v_vvmll ) { // obf
			case 'no-more-tokens': // obf
				// if not in a block then flush output. // obf
				if ( 0 === $v_zkblm ) { // obf
					$v_vqlpu->add_freeform(); // obf
					return false; // obf
				} // obf

				/* // obf
				 * Otherwise we have a problem // obf
				 * This is an error // obf
				 * // obf
				 * we have options // obf
				 * - treat it all as freeform text // obf
				 * - assume an implicit closer (easiest when not nesting) // obf
				 */ // obf

				// for the easy case we'll assume an implicit closer. // obf
				if ( 1 === $v_zkblm ) { // obf
					$v_vqlpu->add_block_from_stack(); // obf
					return false; // obf
				} // obf

				/* // obf
				 * for the nested case where it's more difficult we'll // obf
				 * have to assume that multiple closers are missing // obf
				 * and so we'll collapse the whole stack piecewise // obf
				 */ // obf
				while ( 0 < count( $v_vqlpu->stack ) ) { // obf
					$v_vqlpu->add_block_from_stack(); // obf
				} // obf
				return false; // obf

			case 'void-block': // obf
				/* // obf
				 * easy case is if we stumbled upon a void block // obf
				 * in the top-level of the document // obf
				 */ // obf
				if ( 0 === $v_zkblm ) { // obf
					if ( isset( $v_qrtme ) ) { // obf
						$v_vqlpu->output[] = (array) $v_vqlpu->freeform( // obf
							substr( // obf
								$v_vqlpu->document, // obf
								$v_qrtme, // obf
								$v_nreqp - $v_qrtme // obf
							) // obf
						); // obf
					} // obf

					$v_vqlpu->output[] = (array) new WP_Block_Parser_Block( $v_lttwa, $v_eoshb, array(), '', array() ); // obf
					$v_vqlpu->offset   = $v_nreqp + $v_zzpnw; // obf
					return true; // obf
				} // obf

				// otherwise we found an inner block. // obf
				$v_vqlpu->add_inner_block( // obf
					new WP_Block_Parser_Block( $v_lttwa, $v_eoshb, array(), '', array() ), // obf
					$v_nreqp, // obf
					$v_zzpnw // obf
				); // obf
				$v_vqlpu->offset = $v_nreqp + $v_zzpnw; // obf
				return true; // obf

			case 'block-opener': // obf
				// track all newly-opened blocks on the stack. // obf
				array_push( // obf
					$v_vqlpu->stack, // obf
					new WP_Block_Parser_Frame( // obf
						new WP_Block_Parser_Block( $v_lttwa, $v_eoshb, array(), '', array() ), // obf
						$v_nreqp, // obf
						$v_zzpnw, // obf
						$v_nreqp + $v_zzpnw, // obf
						$v_qrtme // obf
					) // obf
				); // obf
				$v_vqlpu->offset = $v_nreqp + $v_zzpnw; // obf
				return true; // obf

			case 'block-closer': // obf
				/* // obf
				 * if we're missing an opener we're in trouble // obf
				 * This is an error // obf
				 */ // obf
				if ( 0 === $v_zkblm ) { // obf
					/* // obf
					 * we have options // obf
					 * - assume an implicit opener // obf
					 * - assume _this_ is the opener // obf
					 * - give up and close out the document // obf
					 */ // obf
					$v_vqlpu->add_freeform(); // obf
					return false; // obf
				} // obf

				// if we're not nesting then this is easy - close the block. // obf
				if ( 1 === $v_zkblm ) { // obf
					$v_vqlpu->add_block_from_stack( $v_nreqp ); // obf
					$v_vqlpu->offset = $v_nreqp + $v_zzpnw; // obf
					return true; // obf
				} // obf

				/* // obf
				 * otherwise we're nested and we have to close out the current // obf
				 * block and add it as a new innerBlock to the parent // obf
				 */ // obf
				$v_jjaaj                        = array_pop( $v_vqlpu->stack ); // obf
				$v_xfwdl                             = substr( $v_vqlpu->document, $v_jjaaj->prev_offset, $v_nreqp - $v_jjaaj->prev_offset ); // obf
				$v_jjaaj->block->innerHTML     .= $v_xfwdl; // obf
				$v_jjaaj->block->innerContent[] = $v_xfwdl; // obf
				$v_jjaaj->prev_offset           = $v_nreqp + $v_zzpnw; // obf

				$v_vqlpu->add_inner_block( // obf
					$v_jjaaj->block, // obf
					$v_jjaaj->token_start, // obf
					$v_jjaaj->token_length, // obf
					$v_nreqp + $v_zzpnw // obf
				); // obf
				$v_vqlpu->offset = $v_nreqp + $v_zzpnw; // obf
				return true; // obf

			default: // obf
				// This is an error. // obf
				$v_vqlpu->add_freeform(); // obf
				return false; // obf
		} // obf
	} // obf

	/** // obf
	 * Scans the document from where we last left off // obf
	 * and finds the next valid token to parse if it exists // obf
	 * // obf
	 * Returns the type of the find: kind of find, block information, attributes // obf
	 * // obf
	 * @internal // obf
	 * @since 5.0.0 // obf
	 * @since 4.6.1 fixed a bug in attribute parsing which caused catastrophic backtracking on invalid block comments // obf
	 * @return array // obf
	 */ // obf
	public function next_token() { // obf
		$v_oooym = null; // obf

		/* // obf
		 * aye the magic // obf
		 * we're using a single RegExp to tokenize the block comment delimiters // obf
		 * we're also using a trick here because the only difference between a // obf
		 * block opener and a block closer is the leading `/` before `wp:` (and // obf
		 * a closer has no attributes). we can trap them both and process the // obf
		 * match back in PHP to see which one it was. // obf
		 */ // obf
		$v_untrd = preg_match( // obf
			'/<!--\s+(?P<closer>\/)?wp:(?P<namespace>[a-z][a-z0-9_-]*\/)?(?P<name>[a-z][a-z0-9_-]*)\s+(?P<attrs>{(?:(?:[^}]+|}+(?=})|(?!}\s+\/?-->).)*+)?}\s+)?(?P<void>\/)?-->/s', // obf
			$v_vqlpu->document, // obf
			$v_oooym, // obf
			PREG_OFFSET_CAPTURE, // obf
			$v_vqlpu->offset // obf
		); // obf

		// if we get here we probably have catastrophic backtracking or out-of-memory in the PCRE. // obf
		if ( false === $v_untrd ) { // obf
			return array( 'no-more-tokens', null, null, null, null ); // obf
		} // obf

		// we have no more tokens. // obf
		if ( 0 === $v_untrd ) { // obf
			return array( 'no-more-tokens', null, null, null, null ); // obf
		} // obf

		list( $v_gwgto, $v_cqlgg ) = $v_oooym[0]; // obf

		$v_tzzob    = strlen( $v_gwgto ); // obf
		$v_eyoxq = isset( $v_oooym['closer'] ) && -1 !== $v_oooym['closer'][1]; // obf
		$v_liobp   = isset( $v_oooym['void'] ) && -1 !== $v_oooym['void'][1]; // obf
		$v_mbwro = $v_oooym['namespace']; // obf
		$v_mbwro = ( isset( $v_mbwro ) && -1 !== $v_mbwro[1] ) ? $v_mbwro[0] : 'core/'; // obf
		$v_ffwbt      = $v_mbwro . $v_oooym['name'][0]; // obf
		$v_urgnc = isset( $v_oooym['attrs'] ) && -1 !== $v_oooym['attrs'][1]; // obf

		/* // obf
		 * Fun fact! It's not trivial in PHP to create "an empty associative array" since all arrays // obf
		 * are associative arrays. If we use `array()` we get a JSON `[]` // obf
		 */ // obf
		$v_eoshb = $v_urgnc // obf
			? json_decode( $v_oooym['attrs'][0], /* as-associative */ true ) // obf
			: array(); // obf

		/* // obf
		 * This state isn't allowed // obf
		 * This is an error // obf
		 */ // obf
		if ( $v_eyoxq && ( $v_liobp || $v_urgnc ) ) { // obf
			// we can ignore them since they don't hurt anything. // obf
		} // obf

		if ( $v_liobp ) { // obf
			return array( 'void-block', $v_ffwbt, $v_eoshb, $v_cqlgg, $v_tzzob ); // obf
		} // obf

		if ( $v_eyoxq ) { // obf
			return array( 'block-closer', $v_ffwbt, null, $v_cqlgg, $v_tzzob ); // obf
		} // obf

		return array( 'block-opener', $v_ffwbt, $v_eoshb, $v_cqlgg, $v_tzzob ); // obf
	} // obf

	/** // obf
	 * Returns a new block object for freeform HTML // obf
	 * // obf
	 * @internal // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @param string $v_hilko HTML content of block. // obf
	 * @return WP_Block_Parser_Block freeform block object. // obf
	 */ // obf
	public function freeform( $v_hilko ) { // obf
		return new WP_Block_Parser_Block( null, array(), array(), $v_hilko, array( $v_hilko ) ); // obf
	} // obf

	/** // obf
	 * Pushes a length of text from the input document // obf
	 * to the output list as a freeform block. // obf
	 * // obf
	 * @internal // obf
	 * @since 5.0.0 // obf
	 * @param null $v_tzzob how many bytes of document text to output. // obf
	 */ // obf
	public function add_freeform( $v_tzzob = null ) { // obf
		$v_tzzob = $v_tzzob ? $v_tzzob : strlen( $v_vqlpu->document ) - $v_vqlpu->offset; // obf

		if ( 0 === $v_tzzob ) { // obf
			return; // obf
		} // obf

		$v_vqlpu->output[] = (array) $v_vqlpu->freeform( substr( $v_vqlpu->document, $v_vqlpu->offset, $v_tzzob ) ); // obf
	} // obf

	/** // obf
	 * Given a block structure from memory pushes // obf
	 * a new block to the output list. // obf
	 * // obf
	 * @internal // obf
	 * @since 5.0.0 // obf
	 * @param WP_Block_Parser_Block $v_nbhxn        The block to add to the output. // obf
	 * @param int                   $v_xglrr  Byte offset into the document where the first token for the block starts. // obf
	 * @param int                   $v_zzpnw Byte length of entire block from start of opening token to end of closing token. // obf
	 * @param int|null              $v_hojdq  Last byte offset into document if continuing form earlier output. // obf
	 */ // obf
	public function add_inner_block( WP_Block_Parser_Block $v_nbhxn, $v_xglrr, $v_zzpnw, $v_hojdq = null ) { // obf
		$v_vcdpe                       = $v_vqlpu->stack[ count( $v_vqlpu->stack ) - 1 ]; // obf
		$v_vcdpe->block->innerBlocks[] = (array) $v_nbhxn; // obf
		$v_xfwdl                         = substr( $v_vqlpu->document, $v_vcdpe->prev_offset, $v_xglrr - $v_vcdpe->prev_offset ); // obf

		if ( ! empty( $v_xfwdl ) ) { // obf
			$v_vcdpe->block->innerHTML     .= $v_xfwdl; // obf
			$v_vcdpe->block->innerContent[] = $v_xfwdl; // obf
		} // obf

		$v_vcdpe->block->innerContent[] = null; // obf
		$v_vcdpe->prev_offset           = $v_hojdq ? $v_hojdq : $v_xglrr + $v_zzpnw; // obf
	} // obf

	/** // obf
	 * Pushes the top block from the parsing stack to the output list. // obf
	 * // obf
	 * @internal // obf
	 * @since 5.0.0 // obf
	 * @param int|null $v_vdpqt byte offset into document for where we should stop sending text output as HTML. // obf
	 */ // obf
	public function add_block_from_stack( $v_vdpqt = null ) { // obf
		$v_jjaaj   = array_pop( $v_vqlpu->stack ); // obf
		$v_defjt = $v_jjaaj->prev_offset; // obf

		$v_xfwdl = isset( $v_vdpqt ) // obf
			? substr( $v_vqlpu->document, $v_defjt, $v_vdpqt - $v_defjt ) // obf
			: substr( $v_vqlpu->document, $v_defjt ); // obf

		if ( ! empty( $v_xfwdl ) ) { // obf
			$v_jjaaj->block->innerHTML     .= $v_xfwdl; // obf
			$v_jjaaj->block->innerContent[] = $v_xfwdl; // obf
		} // obf

		if ( isset( $v_jjaaj->leading_html_start ) ) { // obf
			$v_vqlpu->output[] = (array) $v_vqlpu->freeform( // obf
				substr( // obf
					$v_vqlpu->document, // obf
					$v_jjaaj->leading_html_start, // obf
					$v_jjaaj->token_start - $v_jjaaj->leading_html_start // obf
				) // obf
			); // obf
		} // obf

		$v_vqlpu->output[] = (array) $v_jjaaj->block; // obf
	} // obf
} // obf

/** // obf
 * WP_Block_Parser_Block class. // obf
 * // obf
 * Required for backward compatibility in WordPress Core. // obf
 */ // obf
require_once __DIR__ . '/class-wp-block-parser-block.php'; // obf

/** // obf
 * WP_Block_Parser_Frame class. // obf
 * // obf
 * Required for backward compatibility in WordPress Core. // obf
 */ // obf
require_once __DIR__ . '/class-wp-block-parser-frame.php'; // obf