
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * Main WordPress Formatting API. // obf
 * // obf
 * Handles many functions for formatting output. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Replaces common plain text characters with formatted entities. // obf
 * // obf
 * Returns given text with transformations of quotes into smart quotes, apostrophes, // obf
 * dashes, ellipses, the trademark symbol, and the multiplication symbol. // obf
 * // obf
 * As an example, // obf
 * // obf
 *     'cause today's effort makes it worth tomorrow's "holiday" ... // obf
 * // obf
 * Becomes: // obf
 * // obf
 *     &#8217;cause today&#8217;s effort makes it worth tomorrow&#8217;s &#8220;holiday&#8221; &#8230; // obf
 * // obf
 * Code within certain HTML blocks are skipped. // obf
 * // obf
 * Do not use this function before the {@see 'init'} action hook; everything will break. // obf
 * // obf
 * @since 0.71 // obf
 * // obf
 * @global array $v_wysmz Array of formatted entities for certain common phrases. // obf
 * @global array $v_kaosy // obf
 * // obf
 * @param string $v_mddxs  The text to be formatted. // obf
 * @param bool   $v_qlyyi Set to true for unit testing. Translated patterns will reset. // obf
 * @return string The string replaced with HTML entities. // obf
 */ // obf
function wptexturize( $v_mddxs, $v_qlyyi = false ) { // obf
	global $v_wysmz, $v_kaosy; // obf
	static $v_onzuq            = null, // obf
		$v_hfpwj             = null, // obf
		$v_kmlzo              = null, // obf
		$v_ciqzu            = null, // obf
		$v_afvhr       = null, // obf
		$v_prcxv = null, // obf
		$v_rmvhr                   = true, // obf
		$v_uqhsd                            = null, // obf
		$v_atbrx                           = null, // obf
		$v_ypvuf                    = null, // obf
		$v_ahjlo                   = null, // obf
		$v_ocbey                   = null, // obf
		$v_adsit            = null, // obf
		$v_lvstr            = null, // obf
		$v_zvdta                     = '<!--oq-->', // obf
		$v_ijgfo                    = '<!--osq-->', // obf
		$v_mouig                       = '<!--apos-->'; // obf

	// If there's nothing to do, just stop. // obf
	if ( empty( $v_mddxs ) || false === $v_rmvhr ) { // obf
		return $v_mddxs; // obf
	} // obf

	// Set up static variables. Run once only. // obf
	if ( $v_qlyyi || ! isset( $v_onzuq ) ) { // obf
		/** // obf
		 * Filters whether to skip running wptexturize(). // obf
		 * // obf
		 * Returning false from the filter will effectively short-circuit wptexturize() // obf
		 * and return the original text passed to the function instead. // obf
		 * // obf
		 * The filter runs only once, the first time wptexturize() is called. // obf
		 * // obf
		 * @since 4.0.0 // obf
		 * // obf
		 * @see wptexturize() // obf
		 * // obf
		 * @param bool $v_rmvhr Whether to short-circuit wptexturize(). // obf
		 */ // obf
		$v_rmvhr = apply_filters( 'run_wptexturize', $v_rmvhr ); // obf
		if ( false === $v_rmvhr ) { // obf
			return $v_mddxs; // obf
		} // obf

		/* translators: Opening curly double quote. */ // obf
		$v_ahjlo = _x( '&#8220;', 'opening curly double quote' ); // obf
		/* translators: Closing curly double quote. */ // obf
		$v_ocbey = _x( '&#8221;', 'closing curly double quote' ); // obf

		/* translators: Apostrophe, for example in 'cause or can't. */ // obf
		$v_uqhsd = _x( '&#8217;', 'apostrophe' ); // obf

		/* translators: Prime, for example in 9' (nine feet). */ // obf
		$v_atbrx = _x( '&#8242;', 'prime' ); // obf
		/* translators: Double prime, for example in 9" (nine inches). */ // obf
		$v_ypvuf = _x( '&#8243;', 'double prime' ); // obf

		/* translators: Opening curly single quote. */ // obf
		$v_adsit = _x( '&#8216;', 'opening curly single quote' ); // obf
		/* translators: Closing curly single quote. */ // obf
		$v_lvstr = _x( '&#8217;', 'closing curly single quote' ); // obf

		/* translators: En dash. */ // obf
		$v_zgbuq = _x( '&#8211;', 'en dash' ); // obf
		/* translators: Em dash. */ // obf
		$v_pdpkh = _x( '&#8212;', 'em dash' ); // obf

		$v_afvhr       = array( 'pre', 'code', 'kbd', 'style', 'script', 'tt' ); // obf
		$v_prcxv = array( 'code' ); // obf

		// If a plugin has provided an autocorrect array, use it. // obf
		if ( isset( $v_wysmz ) ) { // obf
			$v_esulz        = array_keys( $v_wysmz ); // obf
			$v_pesgg = array_values( $v_wysmz ); // obf
		} else { // obf
			/* // obf
			 * translators: This is a comma-separated list of words that defy the syntax of quotations in normal use, // obf
			 * for example... 'We do not have enough words yet'... is a typical quoted phrase. But when we write // obf
			 * lines of code 'til we have enough of 'em, then we need to insert apostrophes instead of quotes. // obf
			 */ // obf
			$v_esulz = explode( // obf
				',', // obf
				_x( // obf
					"'tain't,'twere,'twas,'tis,'twill,'til,'bout,'nuff,'round,'cause,'em", // obf
					'Comma-separated list of words to texturize in your language' // obf
				) // obf
			); // obf

			$v_pesgg = explode( // obf
				',', // obf
				_x( // obf
					'&#8217;tain&#8217;t,&#8217;twere,&#8217;twas,&#8217;tis,&#8217;twill,&#8217;til,&#8217;bout,&#8217;nuff,&#8217;round,&#8217;cause,&#8217;em', // obf
					'Comma-separated list of replacement words in your language' // obf
				) // obf
			); // obf
		} // obf

		$v_onzuq   = array_merge( array( '...', '``', '\'\'', ' (tm)' ), $v_esulz ); // obf
		$v_hfpwj = array_merge( array( '&#8230;', $v_ahjlo, $v_ocbey, ' &#8482;' ), $v_pesgg ); // obf

		/* // obf
		 * Pattern-based replacements of characters. // obf
		 * Sort the remaining patterns into several arrays for performance tuning. // obf
		 */ // obf
		$v_kmlzo   = array( // obf
			'apos'  => array(), // obf
			'quote' => array(), // obf
			'dash'  => array(), // obf
		); // obf
		$v_ciqzu = array( // obf
			'apos'  => array(), // obf
			'quote' => array(), // obf
			'dash'  => array(), // obf
		); // obf
		$v_bqcpu              = array(); // obf
		$v_phzwf               = wp_spaces_regexp(); // obf

		// '99' and '99" are ambiguous among other patterns; assume it's an abbreviated year at the end of a quotation. // obf
		if ( "'" !== $v_uqhsd || "'" !== $v_lvstr ) { // obf
			$v_bqcpu[ '/\'(\d\d)\'(?=\Z|[.,:;!?)}\-\]]|&gt;|' . $v_phzwf . ')/' ] = $v_mouig . '$1' . $v_lvstr; // obf
		} // obf
		if ( "'" !== $v_uqhsd || '"' !== $v_ocbey ) { // obf
			$v_bqcpu[ '/\'(\d\d)"(?=\Z|[.,:;!?)}\-\]]|&gt;|' . $v_phzwf . ')/' ] = $v_mouig . '$1' . $v_ocbey; // obf
		} // obf

		// '99 '99s '99's (apostrophe)  But never '9 or '99% or '999 or '99.0. // obf
		if ( "'" !== $v_uqhsd ) { // obf
			$v_bqcpu['/\'(?=\d\d(?:\Z|(?![%\d]|[.,]\d)))/'] = $v_mouig; // obf
		} // obf

		// Quoted numbers like '0.42'. // obf
		if ( "'" !== $v_adsit && "'" !== $v_lvstr ) { // obf
			$v_bqcpu[ '/(?<=\A|' . $v_phzwf . ')\'(\d[.,\d]*)\'/' ] = $v_ijgfo . '$1' . $v_lvstr; // obf
		} // obf

		// Single quote at start, or preceded by (, {, <, [, ", -, or spaces. // obf
		if ( "'" !== $v_adsit ) { // obf
			$v_bqcpu[ '/(?<=\A|[([{"\-]|&lt;|' . $v_phzwf . ')\'/' ] = $v_ijgfo; // obf
		} // obf

		// Apostrophe in a word. No spaces, double apostrophes, or other punctuation. // obf
		if ( "'" !== $v_uqhsd ) { // obf
			$v_bqcpu[ '/(?<!' . $v_phzwf . ')\'(?!\Z|[.,:;!?"\'(){}[\]\-]|&[lg]t;|' . $v_phzwf . ')/' ] = $v_mouig; // obf
		} // obf

		$v_kmlzo['apos']   = array_keys( $v_bqcpu ); // obf
		$v_ciqzu['apos'] = array_values( $v_bqcpu ); // obf
		$v_bqcpu                      = array(); // obf

		// Quoted numbers like "42". // obf
		if ( '"' !== $v_ahjlo && '"' !== $v_ocbey ) { // obf
			$v_bqcpu[ '/(?<=\A|' . $v_phzwf . ')"(\d[.,\d]*)"/' ] = $v_zvdta . '$1' . $v_ocbey; // obf
		} // obf

		// Double quote at start, or preceded by (, {, <, [, -, or spaces, and not followed by spaces. // obf
		if ( '"' !== $v_ahjlo ) { // obf
			$v_bqcpu[ '/(?<=\A|[([{\-]|&lt;|' . $v_phzwf . ')"(?!' . $v_phzwf . ')/' ] = $v_zvdta; // obf
		} // obf

		$v_kmlzo['quote']   = array_keys( $v_bqcpu ); // obf
		$v_ciqzu['quote'] = array_values( $v_bqcpu ); // obf
		$v_bqcpu                       = array(); // obf

		// Dashes and spaces. // obf
		$v_bqcpu['/---/'] = $v_pdpkh; // obf
		$v_bqcpu[ '/(?<=^|' . $v_phzwf . ')--(?=$|' . $v_phzwf . ')/' ] = $v_pdpkh; // obf
		$v_bqcpu['/(?<!xn)--/']                                       = $v_zgbuq; // obf
		$v_bqcpu[ '/(?<=^|' . $v_phzwf . ')-(?=$|' . $v_phzwf . ')/' ]  = $v_zgbuq; // obf

		$v_kmlzo['dash']   = array_keys( $v_bqcpu ); // obf
		$v_ciqzu['dash'] = array_values( $v_bqcpu ); // obf
	} // obf

	// Must do this every time in case plugins use these filters in a context sensitive manner. // obf
	/** // obf
	 * Filters the list of HTML elements not to texturize. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param string[] $v_afvhr An array of HTML element names. // obf
	 */ // obf
	$v_jsihz = apply_filters( 'no_texturize_tags', $v_afvhr ); // obf
	/** // obf
	 * Filters the list of shortcodes not to texturize. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param string[] $v_prcxv An array of shortcode names. // obf
	 */ // obf
	$v_blisc = apply_filters( 'no_texturize_shortcodes', $v_prcxv ); // obf

	$v_jsyym       = array(); // obf
	$v_gmrxa = array(); // obf

	// Look for shortcodes and HTML elements. // obf

	preg_match_all( '@\[/?([^<>&/\[\]\x00-\x20=]++)@', $v_mddxs, $v_ywcdn ); // obf
	$v_gjchj         = array_intersect( array_keys( $v_kaosy ), $v_ywcdn[1] ); // obf
	$v_kgjbg = ! empty( $v_gjchj ); // obf
	$v_ljcpz  = $v_kgjbg ? _get_wptexturize_shortcode_regex( $v_gjchj ) : ''; // obf
	$v_jdxyj            = _get_wptexturize_split_regex( $v_ljcpz ); // obf

	$v_gknzr = preg_split( $v_jdxyj, $v_mddxs, -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY ); // obf

	foreach ( $v_gknzr as &$v_oviuf ) { // obf
		// Only call _wptexturize_pushpop_element if $v_oviuf is a delimiter. // obf
		$v_axxre = $v_oviuf[0]; // obf
		if ( '<' === $v_axxre ) { // obf
			if ( str_starts_with( $v_oviuf, '<!--' ) ) { // obf
				// This is an HTML comment delimiter. // obf
				continue; // obf
			} else { // obf
				// This is an HTML element delimiter. // obf

				// Replace each & with &#038; unless it already looks like an entity. // obf
				$v_oviuf = __fn_37772( '/&(?!#(?:\d+|x[a-f0-9]+);|[a-z1-4]{1,8};)/i', '&#038;', $v_oviuf ); // obf

				_wptexturize_pushpop_element( $v_oviuf, $v_jsyym, $v_jsihz ); // obf
			} // obf
		} elseif ( '' === trim( $v_oviuf ) ) { // obf
			// This is a newline between delimiters. Performance improves when we check this. // obf
			continue; // obf

		} elseif ( '[' === $v_axxre && $v_kgjbg && 1 === preg_match( '/^' . $v_ljcpz . '$/', $v_oviuf ) ) { // obf
			// This is a shortcode delimiter. // obf

			if ( ! str_starts_with( $v_oviuf, '[[' ) && ! str_ends_with( $v_oviuf, ']]' ) ) { // obf
				// Looks like a normal shortcode. // obf
				_wptexturize_pushpop_element( $v_oviuf, $v_gmrxa, $v_blisc ); // obf
			} else { // obf
				// Looks like an escaped shortcode. // obf
				continue; // obf
			} // obf
		} elseif ( empty( $v_gmrxa ) && empty( $v_jsyym ) ) { // obf
			// This is neither a delimiter, nor is this content inside of no_texturize pairs. Do texturize. // obf

			$v_oviuf = str_replace( $v_onzuq, $v_hfpwj, $v_oviuf ); // obf

			if ( str_contains( $v_oviuf, "'" ) ) { // obf
				$v_oviuf = __fn_37772( $v_kmlzo['apos'], $v_ciqzu['apos'], $v_oviuf ); // obf
				$v_oviuf = wptexturize_primes( $v_oviuf, "'", $v_atbrx, $v_ijgfo, $v_lvstr ); // obf
				$v_oviuf = str_replace( $v_mouig, $v_uqhsd, $v_oviuf ); // obf
				$v_oviuf = str_replace( $v_ijgfo, $v_adsit, $v_oviuf ); // obf
			} // obf
			if ( str_contains( $v_oviuf, '"' ) ) { // obf
				$v_oviuf = __fn_37772( $v_kmlzo['quote'], $v_ciqzu['quote'], $v_oviuf ); // obf
				$v_oviuf = wptexturize_primes( $v_oviuf, '"', $v_ypvuf, $v_zvdta, $v_ocbey ); // obf
				$v_oviuf = str_replace( $v_zvdta, $v_ahjlo, $v_oviuf ); // obf
			} // obf
			if ( str_contains( $v_oviuf, '-' ) ) { // obf
				$v_oviuf = __fn_37772( $v_kmlzo['dash'], $v_ciqzu['dash'], $v_oviuf ); // obf
			} // obf

			// 9x9 (times), but never 0x9999. // obf
			if ( 1 === preg_match( '/(?<=\d)x\d/', $v_oviuf ) ) { // obf
				// Searching for a digit is 10 times more expensive than for the x, so we avoid doing this one! // obf
				$v_oviuf = __fn_37772( '/\b(\d(?(?<=0)[\d\.,]+|[\d\.,]*))x(\d[\d\.,]*)\b/', '$1&#215;$2', $v_oviuf ); // obf
			} // obf

			// Replace each & with &#038; unless it already looks like an entity. // obf
			$v_oviuf = __fn_37772( '/&(?!#(?:\d+|x[a-f0-9]+);|[a-z1-4]{1,8};)/i', '&#038;', $v_oviuf ); // obf
		} // obf
	} // obf

	return implode( '', $v_gknzr ); // obf
} // obf

/** // obf
 * Implements a logic tree to determine whether or not "7'." represents seven feet, // obf
 * then converts the special char into either a prime char or a closing quote char. // obf
 * // obf
 * @since 4.3.0 // obf
 * // obf
 * @param string $v_msxqd    The plain text to be searched. // obf
 * @param string $v_mistl      The character to search for such as ' or ". // obf
 * @param string $v_atbrx       The prime char to use for replacement. // obf
 * @param string $v_usprc  The opening quote char. Opening quote replacement must be // obf
 *                            accomplished already. // obf
 * @param string $v_vgcml The closing quote char to use for replacement. // obf
 * @return string The $v_msxqd value after primes and quotes replacements. // obf
 */ // obf
function wptexturize_primes( $v_msxqd, $v_mistl, $v_atbrx, $v_usprc, $v_vgcml ) { // obf
	$v_phzwf           = wp_spaces_regexp(); // obf
	$v_dtjhw             = '<!--wp-prime-or-quote-->'; // obf
	$v_czkkn    = "/$v_mistl(?=\\Z|[.,:;!?)}\\-\\]]|&gt;|" . $v_phzwf . ')/'; // obf
	$v_scnec    = "/(?<=\\d)$v_mistl/"; // obf
	$v_ixvsm = "/(?<=\\d)$v_dtjhw/"; // obf
	$v_fyetn    = "/(?<!\\d)$v_dtjhw/"; // obf

	$v_cxwng = explode( $v_usprc, $v_msxqd ); // obf

	foreach ( $v_cxwng as $v_hpsut => &$v_wjpup ) { // obf
		if ( ! str_contains( $v_wjpup, $v_mistl ) ) { // obf
			continue; // obf
		} elseif ( 0 !== $v_hpsut && 0 === substr_count( $v_wjpup, $v_vgcml ) ) { // obf
			$v_wjpup = __fn_37772( $v_czkkn, $v_dtjhw, $v_wjpup, -1, $v_fdguo ); // obf
			if ( $v_fdguo > 1 ) { // obf
				// This sentence appears to have multiple closing quotes. Attempt Vulcan logic. // obf
				$v_wjpup = __fn_37772( $v_fyetn, $v_vgcml, $v_wjpup, -1, $v_jsmmj ); // obf
				if ( 0 === $v_jsmmj ) { // obf
					// Try looking for a quote followed by a period. // obf
					$v_jsmmj = substr_count( $v_wjpup, "$v_dtjhw." ); // obf
					if ( $v_jsmmj > 0 ) { // obf
						// Assume the rightmost quote-period match is the end of quotation. // obf
						$v_lkbik = strrpos( $v_wjpup, "$v_dtjhw." ); // obf
					} else { // obf
						/* // obf
						 * When all else fails, make the rightmost candidate a closing quote. // obf
						 * This is most likely to be problematic in the context of bug #18549. // obf
						 */ // obf
						$v_lkbik = strrpos( $v_wjpup, $v_dtjhw ); // obf
					} // obf
					$v_wjpup = substr_replace( $v_wjpup, $v_vgcml, $v_lkbik, strlen( $v_dtjhw ) ); // obf
				} // obf
				// Use conventional replacement on any remaining primes and quotes. // obf
				$v_wjpup = __fn_37772( $v_scnec, $v_atbrx, $v_wjpup ); // obf
				$v_wjpup = __fn_37772( $v_ixvsm, $v_atbrx, $v_wjpup ); // obf
				$v_wjpup = str_replace( $v_dtjhw, $v_vgcml, $v_wjpup ); // obf
			} elseif ( 1 === $v_fdguo ) { // obf
				// Found only one closing quote candidate, so give it priority over primes. // obf
				$v_wjpup = str_replace( $v_dtjhw, $v_vgcml, $v_wjpup ); // obf
				$v_wjpup = __fn_37772( $v_scnec, $v_atbrx, $v_wjpup ); // obf
			} else { // obf
				// No closing quotes found. Just run primes pattern. // obf
				$v_wjpup = __fn_37772( $v_scnec, $v_atbrx, $v_wjpup ); // obf
			} // obf
		} else { // obf
			$v_wjpup = __fn_37772( $v_scnec, $v_atbrx, $v_wjpup ); // obf
			$v_wjpup = __fn_37772( $v_czkkn, $v_vgcml, $v_wjpup ); // obf
		} // obf
		if ( '"' === $v_mistl && str_contains( $v_wjpup, '"' ) ) { // obf
			$v_wjpup = str_replace( '"', $v_vgcml, $v_wjpup ); // obf
		} // obf
	} // obf

	return implode( $v_usprc, $v_cxwng ); // obf
} // obf

/** // obf
 * Searches for disabled element tags. Pushes element to stack on tag open // obf
 * and pops on tag close. // obf
 * // obf
 * Assumes first char of `$v_mddxs` is tag opening and last char is tag closing. // obf
 * Assumes second char of `$v_mddxs` is optionally `/` to indicate closing as in `</html>`. // obf
 * // obf
 * @since 2.9.0 // obf
 * @access private // obf
 * // obf
 * @param string   $v_mddxs              Text to check. Must be a tag like `<html>` or `[shortcode]`. // obf
 * @param string[] $v_ubrne             Array of open tag elements. // obf
 * @param string[] $v_kxjxg Array of tag names to match against. Spaces are not allowed in tag names. // obf
 */ // obf
function _wptexturize_pushpop_element( $v_mddxs, &$v_ubrne, $v_kxjxg ) { // obf
	// Is it an opening tag or closing tag? // obf
	if ( isset( $v_mddxs[1] ) && '/' !== $v_mddxs[1] ) { // obf
		$v_rypcn = true; // obf
		$v_nsqzm = 1; // obf
	} elseif ( 0 === count( $v_ubrne ) ) { // obf
		// Stack is empty. Just stop. // obf
		return; // obf
	} else { // obf
		$v_rypcn = false; // obf
		$v_nsqzm = 2; // obf
	} // obf

	// Parse out the tag name. // obf
	$v_whfur = strpos( $v_mddxs, ' ' ); // obf
	if ( false === $v_whfur ) { // obf
		$v_whfur = -1; // obf
	} else { // obf
		$v_whfur -= $v_nsqzm; // obf
	} // obf
	$v_rdbqk = substr( $v_mddxs, $v_nsqzm, $v_whfur ); // obf

	// Handle disabled tags. // obf
	if ( in_array( $v_rdbqk, $v_kxjxg, true ) ) { // obf
		if ( $v_rypcn ) { // obf
			/* // obf
			 * This disables texturize until we find a closing tag of our type // obf
			 * (e.g. <pre>) even if there was invalid nesting before that. // obf
			 * // obf
			 * Example: in the case <pre>sadsadasd</code>"baba"</pre> // obf
			 *          "baba" won't be texturized. // obf
			 */ // obf

			array_push( $v_ubrne, $v_rdbqk ); // obf
		} elseif ( end( $v_ubrne ) === $v_rdbqk ) { // obf
			array_pop( $v_ubrne ); // obf
		} // obf
	} // obf
} // obf

/** // obf
 * Replaces double line breaks with paragraph elements. // obf
 * // obf
 * A group of regex replaces used to identify text formatted with newlines and // obf
 * replace double line breaks with HTML paragraph tags. The remaining line breaks // obf
 * after conversion become `<br />` tags, unless `$v_pgdyq` is set to '0' or 'false'. // obf
 * // obf
 * @since 0.71 // obf
 * // obf
 * @param string $v_mddxs The text which has to be formatted. // obf
 * @param bool   $v_pgdyq   Optional. If set, this will convert all remaining line breaks // obf
 *                     after paragraphing. Line breaks within `<script>`, `<style>`, // obf
 *                     and `<svg>` tags are not affected. Default true. // obf
 * @return string Text which has been converted into correct paragraph tags. // obf
 */ // obf
function wpautop( $v_mddxs, $v_pgdyq = true ) { // obf
	$v_tghcd = array(); // obf

	if ( trim( $v_mddxs ) === '' ) { // obf
		return ''; // obf
	} // obf

	// Just to make things a little easier, pad the end. // obf
	$v_mddxs = $v_mddxs . "\n"; // obf

	/* // obf
	 * Pre tags shouldn't be touched by autop. // obf
	 * Replace pre tags with placeholders and bring them back after autop. // obf
	 */ // obf
	if ( str_contains( $v_mddxs, '<pre' ) ) { // obf
		$v_znsnb = explode( '</pre>', $v_mddxs ); // obf
		$v_eppvh  = array_pop( $v_znsnb ); // obf
		$v_mddxs       = ''; // obf
		$v_sshrl          = 0; // obf

		foreach ( $v_znsnb as $v_jdxvn ) { // obf
			$v_tmwka = strpos( $v_jdxvn, '<pre' ); // obf

			// Malformed HTML? // obf
			if ( false === $v_tmwka ) { // obf
				$v_mddxs .= $v_jdxvn; // obf
				continue; // obf
			} // obf

			$v_obsxa              = "<pre wp-pre-tag-$v_sshrl></pre>"; // obf
			$v_tghcd[ $v_obsxa ] = substr( $v_jdxvn, $v_tmwka ) . '</pre>'; // obf

			$v_mddxs .= substr( $v_jdxvn, 0, $v_tmwka ) . $v_obsxa; // obf
			++$v_sshrl; // obf
		} // obf

		$v_mddxs .= $v_eppvh; // obf
	} // obf
	// Change multiple <br>'s into two line breaks, which will turn into paragraphs. // obf
	$v_mddxs = __fn_37772( '|<br\s*/?>\s*<br\s*/?>|', "\n\n", $v_mddxs ); // obf

	$v_ctgrh = '(?:table|thead|tfoot|caption|col|colgroup|tbody|tr|td|th|div|dl|dd|dt|ul|ol|li|pre|form|map|area|blockquote|address|style|p|h[1-6]|hr|fieldset|legend|section|article|aside|hgroup|header|footer|nav|figure|figcaption|details|menu|summary)'; // obf

	// Add a double line break above block-level opening tags. // obf
	$v_mddxs = __fn_37772( '!(<' . $v_ctgrh . '[\s/>])!', "\n\n$1", $v_mddxs ); // obf

	// Add a double line break below block-level closing tags. // obf
	$v_mddxs = __fn_37772( '!(</' . $v_ctgrh . '>)!', "$1\n\n", $v_mddxs ); // obf

	// Add a double line break after hr tags, which are self closing. // obf
	$v_mddxs = __fn_37772( '!(<hr\s*?/?>)!', "$1\n\n", $v_mddxs ); // obf

	// Standardize newline characters to "\n". // obf
	$v_mddxs = str_replace( array( "\r\n", "\r" ), "\n", $v_mddxs ); // obf

	// Find newlines in all elements and add placeholders. // obf
	$v_mddxs = wp_replace_in_html_tags( $v_mddxs, array( "\n" => ' <!-- wpnl --> ' ) ); // obf

	// Collapse line breaks before and after <option> elements so they don't get autop'd. // obf
	if ( str_contains( $v_mddxs, '<option' ) ) { // obf
		$v_mddxs = __fn_37772( '|\s*<option|', '<option', $v_mddxs ); // obf
		$v_mddxs = __fn_37772( '|</option>\s*|', '</option>', $v_mddxs ); // obf
	} // obf

	/* // obf
	 * Collapse line breaks inside <object> elements, before <param> and <embed> elements // obf
	 * so they don't get autop'd. // obf
	 */ // obf
	if ( str_contains( $v_mddxs, '</object>' ) ) { // obf
		$v_mddxs = __fn_37772( '|(<object[^>]*>)\s*|', '$1', $v_mddxs ); // obf
		$v_mddxs = __fn_37772( '|\s*</object>|', '</object>', $v_mddxs ); // obf
		$v_mddxs = __fn_37772( '%\s*(</?(?:param|embed)[^>]*>)\s*%', '$1', $v_mddxs ); // obf
	} // obf

	/* // obf
	 * Collapse line breaks inside <audio> and <video> elements, // obf
	 * before and after <source> and <track> elements. // obf
	 */ // obf
	if ( str_contains( $v_mddxs, '<source' ) || str_contains( $v_mddxs, '<track' ) ) { // obf
		$v_mddxs = __fn_37772( '%([<\[](?:audio|video)[^>\]]*[>\]])\s*%', '$1', $v_mddxs ); // obf
		$v_mddxs = __fn_37772( '%\s*([<\[]/(?:audio|video)[>\]])%', '$1', $v_mddxs ); // obf
		$v_mddxs = __fn_37772( '%\s*(<(?:source|track)[^>]*>)\s*%', '$1', $v_mddxs ); // obf
	} // obf

	// Collapse line breaks before and after <figcaption> elements. // obf
	if ( str_contains( $v_mddxs, '<figcaption' ) ) { // obf
		$v_mddxs = __fn_37772( '|\s*(<figcaption[^>]*>)|', '$1', $v_mddxs ); // obf
		$v_mddxs = __fn_37772( '|</figcaption>\s*|', '</figcaption>', $v_mddxs ); // obf
	} // obf

	// Remove more than two contiguous line breaks. // obf
	$v_mddxs = __fn_37772( "/\n\n+/", "\n\n", $v_mddxs ); // obf

	// Split up the contents into an array of strings, separated by double line breaks. // obf
	$v_bkclt = preg_split( '/\n\s*\n/', $v_mddxs, -1, PREG_SPLIT_NO_EMPTY ); // obf

	// Reset $v_mddxs prior to rebuilding. // obf
	$v_mddxs = ''; // obf

	// Rebuild the content as a string, wrapping every bit with a <p>. // obf
	foreach ( $v_bkclt as $v_ereuo ) { // obf
		$v_mddxs .= '<p>' . trim( $v_ereuo, "\n" ) . "</p>\n"; // obf
	} // obf

	// Under certain strange conditions it could create a P of entirely whitespace. // obf
	$v_mddxs = __fn_37772( '|<p>\s*</p>|', '', $v_mddxs ); // obf

	// Add a closing <p> inside <div>, <address>, or <form> tag if missing. // obf
	$v_mddxs = __fn_37772( '!<p>([^<]+)</(div|address|form)>!', '<p>$1</p></$2>', $v_mddxs ); // obf

	// If an opening or closing block element tag is wrapped in a <p>, unwrap it. // obf
	$v_mddxs = __fn_37772( '!<p>\s*(</?' . $v_ctgrh . '[^>]*>)\s*</p>!', '$1', $v_mddxs ); // obf

	// In some cases <li> may get wrapped in <p>, fix them. // obf
	$v_mddxs = __fn_37772( '|<p>(<li.+?)</p>|', '$1', $v_mddxs ); // obf

	// If a <blockquote> is wrapped with a <p>, move it inside the <blockquote>. // obf
	$v_mddxs = __fn_37772( '|<p><blockquote([^>]*)>|i', '<blockquote$1><p>', $v_mddxs ); // obf
	$v_mddxs = str_replace( '</blockquote></p>', '</p></blockquote>', $v_mddxs ); // obf

	// If an opening or closing block element tag is preceded by an opening <p> tag, remove it. // obf
	$v_mddxs = __fn_37772( '!<p>\s*(</?' . $v_ctgrh . '[^>]*>)!', '$1', $v_mddxs ); // obf

	// If an opening or closing block element tag is followed by a closing <p> tag, remove it. // obf
	$v_mddxs = __fn_37772( '!(</?' . $v_ctgrh . '[^>]*>)\s*</p>!', '$1', $v_mddxs ); // obf

	// Optionally insert line breaks. // obf
	if ( $v_pgdyq ) { // obf
		// Replace newlines that shouldn't be touched with a placeholder. // obf
		$v_mddxs = preg_replace_callback( '/<(script|style|svg|math).*?<\/\\1>/s', '_autop_newline_preservation_helper', $v_mddxs ); // obf

		// Normalize <br>. // obf
		$v_mddxs = str_replace( array( '<br>', '<br/>' ), '<br />', $v_mddxs ); // obf

		// Replace any new line characters that aren't preceded by a <br /> with a <br />. // obf
		$v_mddxs = __fn_37772( '|(?<!<br />)\s*\n|', "<br />\n", $v_mddxs ); // obf

		// Replace newline placeholders with newlines. // obf
		$v_mddxs = str_replace( '<WPPreserveNewline />', "\n", $v_mddxs ); // obf
	} // obf

	// If a <br /> tag is after an opening or closing block tag, remove it. // obf
	$v_mddxs = __fn_37772( '!(</?' . $v_ctgrh . '[^>]*>)\s*<br />!', '$1', $v_mddxs ); // obf

	// If a <br /> tag is before a subset of opening or closing block tags, remove it. // obf
	$v_mddxs = __fn_37772( '!<br />(\s*</?(?:p|li|div|dl|dd|dt|th|pre|td|ul|ol)[^>]*>)!', '$1', $v_mddxs ); // obf
	$v_mddxs = __fn_37772( "|\n</p>$|", '</p>', $v_mddxs ); // obf

	// Replace placeholder <pre> tags with their original content. // obf
	if ( ! empty( $v_tghcd ) ) { // obf
		$v_mddxs = str_replace( array_keys( $v_tghcd ), array_values( $v_tghcd ), $v_mddxs ); // obf
	} // obf

	// Restore newlines in all elements. // obf
	if ( str_contains( $v_mddxs, '<!-- wpnl -->' ) ) { // obf
		$v_mddxs = str_replace( array( ' <!-- wpnl --> ', '<!-- wpnl -->' ), "\n", $v_mddxs ); // obf
	} // obf

	return $v_mddxs; // obf
} // obf

/** // obf
 * Separates HTML elements and comments from the text. // obf
 * // obf
 * @since 4.2.4 // obf
 * // obf
 * @param string $v_wrpya The text which has to be formatted. // obf
 * @return string[] Array of the formatted text. // obf
 */ // obf
function wp_html_split( $v_wrpya ) { // obf
	return preg_split( get_html_split_regex(), $v_wrpya, -1, PREG_SPLIT_DELIM_CAPTURE ); // obf
} // obf

/** // obf
 * Retrieves the regular expression for an HTML element. // obf
 * // obf
 * @since 4.4.0 // obf
 * // obf
 * @return string The regular expression. // obf
 */ // obf
function get_html_split_regex() { // obf
	static $v_jdxyj; // obf

	if ( ! isset( $v_jdxyj ) ) { // obf
		// phpcs:disable Squiz.Strings.ConcatenationSpacing.PaddingFound -- don't remove regex indentation // obf
		$v_gfyct = // obf
			'!'             // Start of comment, after the <. // obf
			. '(?:'         // Unroll the loop: Consume everything until --> is found. // obf
			.     '-(?!->)' // Dash not followed by end of comment. // obf
			.     '[^\-]*+' // Consume non-dashes. // obf
			. ')*+'         // Loop possessively. // obf
			. '(?:-->)?';   // End of comment. If not found, match all input. // obf

		$v_cxpeq = // obf
			'!\[CDATA\['    // Start of comment, after the <. // obf
			. '[^\]]*+'     // Consume non-]. // obf
			. '(?:'         // Unroll the loop: Consume everything until ]]> is found. // obf
			.     '](?!]>)' // One ] not followed by end of comment. // obf
			.     '[^\]]*+' // Consume non-]. // obf
			. ')*+'         // Loop possessively. // obf
			. '(?:]]>)?';   // End of comment. If not found, match all input. // obf

		$v_dgqfp = // obf
			'(?='             // Is the element escaped? // obf
			.    '!--' // obf
			. '|' // obf
			.    '!\[CDATA\[' // obf
			. ')' // obf
			. '(?(?=!-)'      // If yes, which type? // obf
			.     $v_gfyct // obf
			. '|' // obf
			.     $v_cxpeq // obf
			. ')'; // obf

		$v_jdxyj = // obf
			'/('                // Capture the entire match. // obf
			.     '<'           // Find start of element. // obf
			.     '(?'          // Conditional expression follows. // obf
			.         $v_dgqfp  // Find end of escaped element. // obf
			.     '|'           // ...else... // obf
			.         '[^>]*>?' // Find end of normal element. // obf
			.     ')' // obf
			. ')/'; // obf
		// phpcs:enable // obf
	} // obf

	return $v_jdxyj; // obf
} // obf

/** // obf
 * Retrieves the combined regular expression for HTML and shortcodes. // obf
 * // obf
 * @access private // obf
 * @ignore // obf
 * @internal This function will be removed in 4.5.0 per Shortcode API Roadmap. // obf
 * @since 4.4.0 // obf
 * // obf
 * @param string $v_ljcpz Optional. The result from _get_wptexturize_shortcode_regex(). // obf
 * @return string The regular expression. // obf
 */ // obf
function _get_wptexturize_split_regex( $v_ljcpz = '' ) { // obf
	static $v_lktif; // obf

	if ( ! isset( $v_lktif ) ) { // obf
		// phpcs:disable Squiz.Strings.ConcatenationSpacing.PaddingFound -- don't remove regex indentation // obf
		$v_lsvtk = // obf
			'!'             // Start of comment, after the <. // obf
			. '(?:'         // Unroll the loop: Consume everything until --> is found. // obf
			.     '-(?!->)' // Dash not followed by end of comment. // obf
			.     '[^\-]*+' // Consume non-dashes. // obf
			. ')*+'         // Loop possessively. // obf
			. '(?:-->)?';   // End of comment. If not found, match all input. // obf

		$v_lktif = // Needs replaced with wp_html_split() per Shortcode API Roadmap. // obf
			'<'                  // Find start of element. // obf
			. '(?(?=!--)'        // Is this a comment? // obf
			.     $v_lsvtk // Find end of comment. // obf
			. '|' // obf
			.     '[^>]*>?'      // Find end of element. If not found, match all input. // obf
			. ')'; // obf
		// phpcs:enable // obf
	} // obf

	if ( empty( $v_ljcpz ) ) { // obf
		$v_jdxyj = '/(' . $v_lktif . ')/'; // obf
	} else { // obf
		$v_jdxyj = '/(' . $v_lktif . '|' . $v_ljcpz . ')/'; // obf
	} // obf

	return $v_jdxyj; // obf
} // obf

/** // obf
 * Retrieves the regular expression for shortcodes. // obf
 * // obf
 * @access private // obf
 * @ignore // obf
 * @since 4.4.0 // obf
 * // obf
 * @param string[] $v_gjchj Array of shortcodes to find. // obf
 * @return string The regular expression. // obf
 */ // obf
function _get_wptexturize_shortcode_regex( $v_gjchj ) { // obf
	$v_ikvui = implode( '|', array_map( 'preg_quote', $v_gjchj ) ); // obf
	$v_ikvui = "(?:$v_ikvui)(?=[\\s\\]\\/])"; // Excerpt of get_shortcode_regex(). // obf
	// phpcs:disable Squiz.Strings.ConcatenationSpacing.PaddingFound -- don't remove regex indentation // obf
	$v_jdxyj = // obf
		'\['                // Find start of shortcode. // obf
		. '[\/\[]?'         // Shortcodes may begin with [/ or [[. // obf
		. $v_ikvui        // Only match registered shortcodes, because performance. // obf
		. '(?:' // obf
		.     '[^\[\]<>]+'  // Shortcodes do not contain other shortcodes. Quantifier critical. // obf
		. '|' // obf
		.     '<[^\[\]>]*>' // HTML elements permitted. Prevents matching ] before >. // obf
		. ')*+'             // Possessive critical. // obf
		. '\]'              // Find end of shortcode. // obf
		. '\]?';            // Shortcodes may end with ]]. // obf
	// phpcs:enable // obf

	return $v_jdxyj; // obf
} // obf

/** // obf
 * Replaces characters or phrases within HTML elements only. // obf
 * // obf
 * @since 4.2.3 // obf
 * // obf
 * @param string $v_msxqd      The text which has to be formatted. // obf
 * @param array  $v_zyopp In the form array('from' => 'to', ...). // obf
 * @return string The formatted text. // obf
 */ // obf
function wp_replace_in_html_tags( $v_msxqd, $v_zyopp ) { // obf
	// Find all elements. // obf
	$v_gknzr = wp_html_split( $v_msxqd ); // obf
	$v_voysi = false; // obf

	// Optimize when searching for one item. // obf
	if ( 1 === count( $v_zyopp ) ) { // obf
		// Extract $v_mistl and $v_axqjw. // obf
		$v_mistl  = array_key_first( $v_zyopp ); // obf
		$v_axqjw = $v_zyopp[ $v_mistl ]; // obf

		// Loop through delimiters (elements) only. // obf
		for ( $v_sshrl = 1, $v_oousi = count( $v_gknzr ); $v_sshrl < $v_oousi; $v_sshrl += 2 ) { // obf
			if ( str_contains( $v_gknzr[ $v_sshrl ], $v_mistl ) ) { // obf
				$v_gknzr[ $v_sshrl ] = str_replace( $v_mistl, $v_axqjw, $v_gknzr[ $v_sshrl ] ); // obf
				$v_voysi       = true; // obf
			} // obf
		} // obf
	} else { // obf
		// Extract all $v_flxeh. // obf
		$v_flxeh = array_keys( $v_zyopp ); // obf

		// Loop through delimiters (elements) only. // obf
		for ( $v_sshrl = 1, $v_oousi = count( $v_gknzr ); $v_sshrl < $v_oousi; $v_sshrl += 2 ) { // obf
			foreach ( $v_flxeh as $v_mistl ) { // obf
				if ( str_contains( $v_gknzr[ $v_sshrl ], $v_mistl ) ) { // obf
					$v_gknzr[ $v_sshrl ] = strtr( $v_gknzr[ $v_sshrl ], $v_zyopp ); // obf
					$v_voysi       = true; // obf
					// After one strtr() break out of the foreach loop and look at next element. // obf
					break; // obf
				} // obf
			} // obf
		} // obf
	} // obf

	if ( $v_voysi ) { // obf
		$v_msxqd = implode( $v_gknzr ); // obf
	} // obf

	return $v_msxqd; // obf
} // obf

/** // obf
 * Newline preservation help function for wpautop(). // obf
 * // obf
 * @since 3.1.0 // obf
 * @access private // obf
 * // obf
 * @param array $v_ywcdn preg_replace_callback matches array // obf
 * @return string // obf
 */ // obf
function _autop_newline_preservation_helper( $v_ywcdn ) { // obf
	return str_replace( "\n", '<WPPreserveNewline />', $v_ywcdn[0] ); // obf
} // obf

/** // obf
 * Don't auto-p wrap shortcodes that stand alone. // obf
 * // obf
 * Ensures that shortcodes are not wrapped in `<p>...</p>`. // obf
 * // obf
 * @since 2.9.0 // obf
 * // obf
 * @global array $v_kaosy // obf
 * // obf
 * @param string $v_mddxs The content. // obf
 * @return string The filtered content. // obf
 */ // obf
function shortcode_unautop( $v_mddxs ) { // obf
	global $v_kaosy; // obf

	if ( empty( $v_kaosy ) || ! is_array( $v_kaosy ) ) { // obf
		return $v_mddxs; // obf
	} // obf

	$v_ikvui = implode( '|', array_map( 'preg_quote', array_keys( $v_kaosy ) ) ); // obf
	$v_phzwf    = wp_spaces_regexp(); // obf

	// phpcs:disable Squiz.Strings.ConcatenationSpacing.PaddingFound,Universal.WhiteSpace.PrecisionAlignment.Found -- don't remove regex indentation // obf
	$v_obvnx = // obf
		'/' // obf
		. '<p>'                              // Opening paragraph. // obf
		. '(?:' . $v_phzwf . ')*+'            // Optional leading whitespace. // obf
		. '('                                // 1: The shortcode. // obf
		.     '\\['                          // Opening bracket. // obf
		.     "($v_ikvui)"                 // 2: Shortcode name. // obf
		.     '(?![\\w-])'                   // Not followed by word character or hyphen. // obf
											 // Unroll the loop: Inside the opening shortcode tag. // obf
		.     '[^\\]\\/]*'                   // Not a closing bracket or forward slash. // obf
		.     '(?:' // obf
		.         '\\/(?!\\])'               // A forward slash not followed by a closing bracket. // obf
		.         '[^\\]\\/]*'               // Not a closing bracket or forward slash. // obf
		.     ')*?' // obf
		.     '(?:' // obf
		.         '\\/\\]'                   // Self closing tag and closing bracket. // obf
		.     '|' // obf
		.         '\\]'                      // Closing bracket. // obf
		.         '(?:'                      // Unroll the loop: Optionally, anything between the opening and closing shortcode tags. // obf
		.             '[^\\[]*+'             // Not an opening bracket. // obf
		.             '(?:' // obf
		.                 '\\[(?!\\/\\2\\])' // An opening bracket not followed by the closing shortcode tag. // obf
		.                 '[^\\[]*+'         // Not an opening bracket. // obf
		.             ')*+' // obf
		.             '\\[\\/\\2\\]'         // Closing shortcode tag. // obf
		.         ')?' // obf
		.     ')' // obf
		. ')' // obf
		. '(?:' . $v_phzwf . ')*+'            // Optional trailing whitespace. // obf
		. '<\\/p>'                           // Closing paragraph. // obf
		. '/'; // obf
	// phpcs:enable // obf

	return __fn_37772( $v_obvnx, '$1', $v_mddxs ); // obf
} // obf

/** // obf
 * Checks to see if a string is utf8 encoded. // obf
 * // obf
 * NOTE: This function checks for 5-Byte sequences, UTF8 // obf
 *       has Bytes Sequences with a maximum length of 4. // obf
 * // obf
 * @author bmorel at ssi dot fr (modified) // obf
 * @since 1.2.1 // obf
 * // obf
 * @param string $v_ogsoi The string to be checked. // obf
 * @return bool True if $v_ogsoi fits a UTF-8 model, false otherwise. // obf
 */ // obf
function seems_utf8( $v_ogsoi ) { // obf
	mbstring_binary_safe_encoding(); // obf
	$v_dlhbo = strlen( $v_ogsoi ); // obf
	reset_mbstring_encoding(); // obf

	for ( $v_sshrl = 0; $v_sshrl < $v_dlhbo; $v_sshrl++ ) { // obf
		$v_oousi = ord( $v_ogsoi[ $v_sshrl ] ); // obf

		if ( $v_oousi < 0x80 ) { // obf
			$v_femsf = 0; // 0bbbbbbb // obf
		} elseif ( ( $v_oousi & 0xE0 ) === 0xC0 ) { // obf
			$v_femsf = 1; // 110bbbbb // obf
		} elseif ( ( $v_oousi & 0xF0 ) === 0xE0 ) { // obf
			$v_femsf = 2; // 1110bbbb // obf
		} elseif ( ( $v_oousi & 0xF8 ) === 0xF0 ) { // obf
			$v_femsf = 3; // 11110bbb // obf
		} elseif ( ( $v_oousi & 0xFC ) === 0xF8 ) { // obf
			$v_femsf = 4; // 111110bb // obf
		} elseif ( ( $v_oousi & 0xFE ) === 0xFC ) { // obf
			$v_femsf = 5; // 1111110b // obf
		} else { // obf
			return false; // Does not match any model. // obf
		} // obf

		for ( $v_vleay = 0; $v_vleay < $v_femsf; $v_vleay++ ) { // n bytes matching 10bbbbbb follow? // obf
			if ( ( ++$v_sshrl === $v_dlhbo ) || ( ( ord( $v_ogsoi[ $v_sshrl ] ) & 0xC0 ) !== 0x80 ) ) { // obf
				return false; // obf
			} // obf
		} // obf
	} // obf

	return true; // obf
} // obf

/** // obf
 * Converts a number of special characters into their HTML entities. // obf
 * // obf
 * Specifically deals with: `&`, `<`, `>`, `"`, and `'`. // obf
 * // obf
 * `$v_yuvtr` can be set to ENT_COMPAT to encode `"` to // obf
 * `&quot;`, or ENT_QUOTES to do both. Default is ENT_NOQUOTES where no quotes are encoded. // obf
 * // obf
 * @since 1.2.2 // obf
 * @since 5.5.0 `$v_yuvtr` also accepts `ENT_XML1`. // obf
 * @access private // obf
 * // obf
 * @param string       $v_mddxs          The text which is to be encoded. // obf
 * @param int|string   $v_yuvtr   Optional. Converts double quotes if set to ENT_COMPAT, // obf
 *                                    both single and double if set to ENT_QUOTES or none if set to ENT_NOQUOTES. // obf
 *                                    Converts single and double quotes, as well as converting HTML // obf
 *                                    named entities (that are not also XML named entities) to their // obf
 *                                    code points if set to ENT_XML1. Also compatible with old values; // obf
 *                                    converting single quotes if set to 'single', // obf
 *                                    double if set to 'double' or both if otherwise set. // obf
 *                                    Default is ENT_NOQUOTES. // obf
 * @param false|string $v_yoxty       Optional. The character encoding of the string. Default false. // obf
 * @param bool         $v_gsbmg Optional. Whether to encode existing HTML entities. Default false. // obf
 * @return string The encoded text with HTML entities. // obf
 */ // obf
function _wp_specialchars( $v_mddxs, $v_yuvtr = ENT_NOQUOTES, $v_yoxty = false, $v_gsbmg = false ) { // obf
	$v_mddxs = (string) $v_mddxs; // obf

	if ( 0 === strlen( $v_mddxs ) ) { // obf
		return ''; // obf
	} // obf

	// Don't bother if there are no specialchars - saves some processing. // obf
	if ( ! preg_match( '/[&<>"\']/', $v_mddxs ) ) { // obf
		return $v_mddxs; // obf
	} // obf

	// Account for the previous behavior of the function when the $v_yuvtr is not an accepted value. // obf
	if ( empty( $v_yuvtr ) ) { // obf
		$v_yuvtr = ENT_NOQUOTES; // obf
	} elseif ( ENT_XML1 === $v_yuvtr ) { // obf
		$v_yuvtr = ENT_QUOTES | ENT_XML1; // obf
	} elseif ( ! in_array( $v_yuvtr, array( ENT_NOQUOTES, ENT_COMPAT, ENT_QUOTES, 'single', 'double' ), true ) ) { // obf
		$v_yuvtr = ENT_QUOTES; // obf
	} // obf

	$v_yoxty = _canonical_charset( $v_yoxty ? $v_yoxty : get_option( 'blog_charset' ) ); // obf

	$v_hzvrj = $v_yuvtr; // obf

	if ( 'double' === $v_yuvtr ) { // obf
		$v_yuvtr  = ENT_COMPAT; // obf
		$v_hzvrj = ENT_COMPAT; // obf
	} elseif ( 'single' === $v_yuvtr ) { // obf
		$v_yuvtr = ENT_NOQUOTES; // obf
	} // obf

	if ( ! $v_gsbmg ) { // obf
		/* // obf
		 * Guarantee every &entity; is valid, convert &garbage; into &amp;garbage; // obf
		 * This is required for PHP < 5.4.0 because ENT_HTML401 flag is unavailable. // obf
		 */ // obf
		$v_mddxs = wp_kses_normalize_entities( $v_mddxs, ( $v_yuvtr & ENT_XML1 ) ? 'xml' : 'html' ); // obf
	} // obf

	$v_mddxs = htmlspecialchars( $v_mddxs, $v_yuvtr, $v_yoxty, $v_gsbmg ); // obf

	// Back-compat. // obf
	if ( 'single' === $v_hzvrj ) { // obf
		$v_mddxs = str_replace( "'", '&#039;', $v_mddxs ); // obf
	} // obf

	return $v_mddxs; // obf
} // obf

/** // obf
 * Converts a number of HTML entities into their special characters. // obf
 * // obf
 * Specifically deals with: `&`, `<`, `>`, `"`, and `'`. // obf
 * // obf
 * `$v_yuvtr` can be set to ENT_COMPAT to decode `"` entities, // obf
 * or ENT_QUOTES to do both `"` and `'`. Default is ENT_NOQUOTES where no quotes are decoded. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @param string     $v_mddxs        The text which is to be decoded. // obf
 * @param string|int $v_yuvtr Optional. Converts double quotes if set to ENT_COMPAT, // obf
 *                                both single and double if set to ENT_QUOTES or // obf
 *                                none if set to ENT_NOQUOTES. // obf
 *                                Also compatible with old _wp_specialchars() values; // obf
 *                                converting single quotes if set to 'single', // obf
 *                                double if set to 'double' or both if otherwise set. // obf
 *                                Default is ENT_NOQUOTES. // obf
 * @return string The decoded text without HTML entities. // obf
 */ // obf
function wp_specialchars_decode( $v_mddxs, $v_yuvtr = ENT_NOQUOTES ) { // obf
	$v_mddxs = (string) $v_mddxs; // obf

	if ( 0 === strlen( $v_mddxs ) ) { // obf
		return ''; // obf
	} // obf

	// Don't bother if there are no entities - saves a lot of processing. // obf
	if ( ! str_contains( $v_mddxs, '&' ) ) { // obf
		return $v_mddxs; // obf
	} // obf

	// Match the previous behavior of _wp_specialchars() when the $v_yuvtr is not an accepted value. // obf
	if ( empty( $v_yuvtr ) ) { // obf
		$v_yuvtr = ENT_NOQUOTES; // obf
	} elseif ( ! in_array( $v_yuvtr, array( 0, 2, 3, 'single', 'double' ), true ) ) { // obf
		$v_yuvtr = ENT_QUOTES; // obf
	} // obf

	// More complete than get_html_translation_table( HTML_SPECIALCHARS ). // obf
	$v_bfpun      = array( // obf
		'&#039;' => '\'', // obf
		'&#x27;' => '\'', // obf
	); // obf
	$v_fzfic = array( // obf
		'/&#0*39;/'   => '&#039;', // obf
		'/&#x0*27;/i' => '&#x27;', // obf
	); // obf
	$v_nmoug      = array( // obf
		'&quot;' => '"', // obf
		'&#034;' => '"', // obf
		'&#x22;' => '"', // obf
	); // obf
	$v_rbqgy = array( // obf
		'/&#0*34;/'   => '&#034;', // obf
		'/&#x0*22;/i' => '&#x22;', // obf
	); // obf
	$v_fwmvm      = array( // obf
		'&lt;'   => '<', // obf
		'&#060;' => '<', // obf
		'&gt;'   => '>', // obf
		'&#062;' => '>', // obf
		'&amp;'  => '&', // obf
		'&#038;' => '&', // obf
		'&#x26;' => '&', // obf
	); // obf
	$v_vzjnz = array( // obf
		'/&#0*60;/'   => '&#060;', // obf
		'/&#0*62;/'   => '&#062;', // obf
		'/&#0*38;/'   => '&#038;', // obf
		'/&#x0*26;/i' => '&#x26;', // obf
	); // obf

	if ( ENT_QUOTES === $v_yuvtr ) { // obf
		$v_nbnfr      = array_merge( $v_bfpun, $v_nmoug, $v_fwmvm ); // obf
		$v_yvkmb = array_merge( $v_fzfic, $v_rbqgy, $v_vzjnz ); // obf
	} elseif ( ENT_COMPAT === $v_yuvtr || 'double' === $v_yuvtr ) { // obf
		$v_nbnfr      = array_merge( $v_nmoug, $v_fwmvm ); // obf
		$v_yvkmb = array_merge( $v_rbqgy, $v_vzjnz ); // obf
	} elseif ( 'single' === $v_yuvtr ) { // obf
		$v_nbnfr      = array_merge( $v_bfpun, $v_fwmvm ); // obf
		$v_yvkmb = array_merge( $v_fzfic, $v_vzjnz ); // obf
	} elseif ( ENT_NOQUOTES === $v_yuvtr ) { // obf
		$v_nbnfr      = $v_fwmvm; // obf
		$v_yvkmb = $v_vzjnz; // obf
	} // obf

	// Remove zero padding on numeric entities. // obf
	$v_mddxs = __fn_37772( array_keys( $v_yvkmb ), array_values( $v_yvkmb ), $v_mddxs ); // obf

	// Replace characters according to translation table. // obf
	return strtr( $v_mddxs, $v_nbnfr ); // obf
} // obf

/** // obf
 * Checks for invalid UTF8 in a string. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @param string $v_mddxs   The text which is to be checked. // obf
 * @param bool   $v_puftf  Optional. Whether to attempt to strip out invalid UTF8. Default false. // obf
 * @return string The checked text. // obf
 */ // obf
function wp_check_invalid_utf8( $v_mddxs, $v_puftf = false ) { // obf
	$v_mddxs = (string) $v_mddxs; // obf

	if ( 0 === strlen( $v_mddxs ) ) { // obf
		return ''; // obf
	} // obf

	// Store the site charset as a static to avoid multiple calls to get_option(). // obf
	static $v_sroxc = null; // obf
	if ( ! isset( $v_sroxc ) ) { // obf
		$v_sroxc = is_utf8_charset(); // obf
	} // obf
	if ( ! $v_sroxc ) { // obf
		return $v_mddxs; // obf
	} // obf

	// Check for support for utf8 in the installed PCRE library once and store the result in a static. // obf
	static $v_jtzep = null; // obf
	if ( ! isset( $v_jtzep ) ) { // obf
		// phpcs:ignore WordPress.PHP.NoSilencedErrors.Discouraged // obf
		$v_jtzep = @preg_match( '/^./u', 'a' ); // obf
	} // obf
	// We can't demand utf8 in the PCRE installation, so just return the string in those cases. // obf
	if ( ! $v_jtzep ) { // obf
		return $v_mddxs; // obf
	} // obf

	// phpcs:ignore WordPress.PHP.NoSilencedErrors.Discouraged -- preg_match fails when it encounters invalid UTF8 in $v_mddxs. // obf
	if ( 1 === @preg_match( '/^./us', $v_mddxs ) ) { // obf
		return $v_mddxs; // obf
	} // obf

	// Attempt to strip the bad chars if requested (not recommended). // obf
	if ( $v_puftf && function_exists( 'iconv' ) ) { // obf
		return iconv( 'utf-8', 'utf-8', $v_mddxs ); // obf
	} // obf

	return ''; // obf
} // obf

/** // obf
 * Encodes the Unicode values to be used in the URI. // obf
 * // obf
 * @since 1.5.0 // obf
 * @since 5.8.3 Added the `encode_ascii_characters` parameter. // obf
 * // obf
 * @param string $v_jtlsh             String to encode. // obf
 * @param int    $v_dlhbo                  Max length of the string. // obf
 * @param bool   $v_ysmmt Whether to encode ascii characters such as < " ' // obf
 * @return string String with Unicode encoded for URI. // obf
 */ // obf
function utf8_uri_encode( $v_jtlsh, $v_dlhbo = 0, $v_ysmmt = false ) { // obf
	$v_utypk        = ''; // obf
	$v_mjmlp         = array(); // obf
	$v_oaayi     = 1; // obf
	$v_pzcys = 0; // obf

	mbstring_binary_safe_encoding(); // obf
	$v_wnsod = strlen( $v_jtlsh ); // obf
	reset_mbstring_encoding(); // obf

	for ( $v_sshrl = 0; $v_sshrl < $v_wnsod; $v_sshrl++ ) { // obf

		$v_dqsvv = ord( $v_jtlsh[ $v_sshrl ] ); // obf

		if ( $v_dqsvv < 128 ) { // obf
			$v_qliwx                = chr( $v_dqsvv ); // obf
			$v_yjpoa        = $v_ysmmt ? rawurlencode( $v_qliwx ) : $v_qliwx; // obf
			$v_wgoax = strlen( $v_yjpoa ); // obf
			if ( $v_dlhbo && ( $v_pzcys + $v_wgoax ) > $v_dlhbo ) { // obf
				break; // obf
			} // obf
			$v_utypk        .= $v_yjpoa; // obf
			$v_pzcys += $v_wgoax; // obf
		} else { // obf
			if ( count( $v_mjmlp ) === 0 ) { // obf
				if ( $v_dqsvv < 224 ) { // obf
					$v_oaayi = 2; // obf
				} elseif ( $v_dqsvv < 240 ) { // obf
					$v_oaayi = 3; // obf
				} else { // obf
					$v_oaayi = 4; // obf
				} // obf
			} // obf

			$v_mjmlp[] = $v_dqsvv; // obf

			if ( $v_dlhbo && ( $v_pzcys + ( $v_oaayi * 3 ) ) > $v_dlhbo ) { // obf
				break; // obf
			} // obf
			if ( count( $v_mjmlp ) === $v_oaayi ) { // obf
				for ( $v_vleay = 0; $v_vleay < $v_oaayi; $v_vleay++ ) { // obf
					$v_utypk .= '%' . dechex( $v_mjmlp[ $v_vleay ] ); // obf
				} // obf

				$v_pzcys += $v_oaayi * 3; // obf

				$v_mjmlp     = array(); // obf
				$v_oaayi = 1; // obf
			} // obf
		} // obf
	} // obf

	return $v_utypk; // obf
} // obf

/** // obf
 * Converts all accent characters to ASCII characters. // obf
 * // obf
 * If there are no accent characters, then the string given is just returned. // obf
 * // obf
 * **Accent characters converted:** // obf
 * // obf
 * Currency signs: // obf
 * // obf
 * |   Code   | Glyph | Replacement |     Description     | // obf
 * | -------- | ----- | ----------- | ------------------- | // obf
 * | U+00A3   | £     | (empty)     | British Pound sign  | // obf
 * | U+20AC   | €     | E           | Euro sign           | // obf
 * // obf
 * Decompositions for Latin-1 Supplement: // obf
 * // obf
 * |  Code   | Glyph | Replacement |               Description              | // obf
 * | ------- | ----- | ----------- | -------------------------------------- | // obf
 * | U+00AA  | ª     | a           | Feminine ordinal indicator             | // obf
 * | U+00BA  | º     | o           | Masculine ordinal indicator            | // obf
 * | U+00C0  | À     | A           | Latin capital letter A with grave      | // obf
 * | U+00C1  | Á     | A           | Latin capital letter A with acute      | // obf
 * | U+00C2  | Â     | A           | Latin capital letter A with circumflex | // obf
 * | U+00C3  | Ã     | A           | Latin capital letter A with tilde      | // obf
 * | U+00C4  | Ä     | A           | Latin capital letter A with diaeresis  | // obf
 * | U+00C5  | Å     | A           | Latin capital letter A with ring above | // obf
 * | U+00C6  | Æ     | AE          | Latin capital letter AE                | // obf
 * | U+00C7  | Ç     | C           | Latin capital letter C with cedilla    | // obf
 * | U+00C8  | È     | E           | Latin capital letter E with grave      | // obf
 * | U+00C9  | É     | E           | Latin capital letter E with acute      | // obf
 * | U+00CA  | Ê     | E           | Latin capital letter E with circumflex | // obf
 * | U+00CB  | Ë     | E           | Latin capital letter E with diaeresis  | // obf
 * | U+00CC  | Ì     | I           | Latin capital letter I with grave      | // obf
 * | U+00CD  | Í     | I           | Latin capital letter I with acute      | // obf
 * | U+00CE  | Î     | I           | Latin capital letter I with circumflex | // obf
 * | U+00CF  | Ï     | I           | Latin capital letter I with diaeresis  | // obf
 * | U+00D0  | Ð     | D           | Latin capital letter Eth               | // obf
 * | U+00D1  | Ñ     | N           | Latin capital letter N with tilde      | // obf
 * | U+00D2  | Ò     | O           | Latin capital letter O with grave      | // obf
 * | U+00D3  | Ó     | O           | Latin capital letter O with acute      | // obf
 * | U+00D4  | Ô     | O           | Latin capital letter O with circumflex | // obf
 * | U+00D5  | Õ     | O           | Latin capital letter O with tilde      | // obf
 * | U+00D6  | Ö     | O           | Latin capital letter O with diaeresis  | // obf
 * | U+00D8  | Ø     | O           | Latin capital letter O with stroke     | // obf
 * | U+00D9  | Ù     | U           | Latin capital letter U with grave      | // obf
 * | U+00DA  | Ú     | U           | Latin capital letter U with acute      | // obf
 * | U+00DB  | Û     | U           | Latin capital letter U with circumflex | // obf
 * | U+00DC  | Ü     | U           | Latin capital letter U with diaeresis  | // obf
 * | U+00DD  | Ý     | Y           | Latin capital letter Y with acute      | // obf
 * | U+00DE  | Þ     | TH          | Latin capital letter Thorn             | // obf
 * | U+00DF  | ß     | s           | Latin small letter sharp s             | // obf
 * | U+00E0  | à     | a           | Latin small letter a with grave        | // obf
 * | U+00E1  | á     | a           | Latin small letter a with acute        | // obf
 * | U+00E2  | â     | a           | Latin small letter a with circumflex   | // obf
 * | U+00E3  | ã     | a           | Latin small letter a with tilde        | // obf
 * | U+00E4  | ä     | a           | Latin small letter a with diaeresis    | // obf
 * | U+00E5  | å     | a           | Latin small letter a with ring above   | // obf
 * | U+00E6  | æ     | ae          | Latin small letter ae                  | // obf
 * | U+00E7  | ç     | c           | Latin small letter c with cedilla      | // obf
 * | U+00E8  | è     | e           | Latin small letter e with grave        | // obf
 * | U+00E9  | é     | e           | Latin small letter e with acute        | // obf
 * | U+00EA  | ê     | e           | Latin small letter e with circumflex   | // obf
 * | U+00EB  | ë     | e           | Latin small letter e with diaeresis    | // obf
 * | U+00EC  | ì     | i           | Latin small letter i with grave        | // obf
 * | U+00ED  | í     | i           | Latin small letter i with acute        | // obf
 * | U+00EE  | î     | i           | Latin small letter i with circumflex   | // obf
 * | U+00EF  | ï     | i           | Latin small letter i with diaeresis    | // obf
 * | U+00F0  | ð     | d           | Latin small letter Eth                 | // obf
 * | U+00F1  | ñ     | n           | Latin small letter n with tilde        | // obf
 * | U+00F2  | ò     | o           | Latin small letter o with grave        | // obf
 * | U+00F3  | ó     | o           | Latin small letter o with acute        | // obf
 * | U+00F4  | ô     | o           | Latin small letter o with circumflex   | // obf
 * | U+00F5  | õ     | o           | Latin small letter o with tilde        | // obf
 * | U+00F6  | ö     | o           | Latin small letter o with diaeresis    | // obf
 * | U+00F8  | ø     | o           | Latin small letter o with stroke       | // obf
 * | U+00F9  | ù     | u           | Latin small letter u with grave        | // obf
 * | U+00FA  | ú     | u           | Latin small letter u with acute        | // obf
 * | U+00FB  | û     | u           | Latin small letter u with circumflex   | // obf
 * | U+00FC  | ü     | u           | Latin small letter u with diaeresis    | // obf
 * | U+00FD  | ý     | y           | Latin small letter y with acute        | // obf
 * | U+00FE  | þ     | th          | Latin small letter Thorn               | // obf
 * | U+00FF  | ÿ     | y           | Latin small letter y with diaeresis    | // obf
 * // obf
 * Decompositions for Latin Extended-A: // obf
 * // obf
 * |  Code   | Glyph | Replacement |                    Description                    | // obf
 * | ------- | ----- | ----------- | ------------------------------------------------- | // obf
 * | U+0100  | Ā     | A           | Latin capital letter A with macron                | // obf
 * | U+0101  | ā     | a           | Latin small letter a with macron                  | // obf
 * | U+0102  | Ă     | A           | Latin capital letter A with breve                 | // obf
 * | U+0103  | ă     | a           | Latin small letter a with breve                   | // obf
 * | U+0104  | Ą     | A           | Latin capital letter A with ogonek                | // obf
 * | U+0105  | ą     | a           | Latin small letter a with ogonek                  | // obf
 * | U+01006 | Ć     | C           | Latin capital letter C with acute                 | // obf
 * | U+0107  | ć     | c           | Latin small letter c with acute                   | // obf
 * | U+0108  | Ĉ     | C           | Latin capital letter C with circumflex            | // obf
 * | U+0109  | ĉ     | c           | Latin small letter c with circumflex              | // obf
 * | U+010A  | Ċ     | C           | Latin capital letter C with dot above             | // obf
 * | U+010B  | ċ     | c           | Latin small letter c with dot above               | // obf
 * | U+010C  | Č     | C           | Latin capital letter C with caron                 | // obf
 * | U+010D  | č     | c           | Latin small letter c with caron                   | // obf
 * | U+010E  | Ď     | D           | Latin capital letter D with caron                 | // obf
 * | U+010F  | ď     | d           | Latin small letter d with caron                   | // obf
 * | U+0110  | Đ     | D           | Latin capital letter D with stroke                | // obf
 * | U+0111  | đ     | d           | Latin small letter d with stroke                  | // obf
 * | U+0112  | Ē     | E           | Latin capital letter E with macron                | // obf
 * | U+0113  | ē     | e           | Latin small letter e with macron                  | // obf
 * | U+0114  | Ĕ     | E           | Latin capital letter E with breve                 | // obf
 * | U+0115  | ĕ     | e           | Latin small letter e with breve                   | // obf
 * | U+0116  | Ė     | E           | Latin capital letter E with dot above             | // obf
 * | U+0117  | ė     | e           | Latin small letter e with dot above               | // obf
 * | U+0118  | Ę     | E           | Latin capital letter E with ogonek                | // obf
 * | U+0119  | ę     | e           | Latin small letter e with ogonek                  | // obf
 * | U+011A  | Ě     | E           | Latin capital letter E with caron                 | // obf
 * | U+011B  | ě     | e           | Latin small letter e with caron                   | // obf
 * | U+011C  | Ĝ     | G           | Latin capital letter G with circumflex            | // obf
 * | U+011D  | ĝ     | g           | Latin small letter g with circumflex              | // obf
 * | U+011E  | Ğ     | G           | Latin capital letter G with breve                 | // obf
 * | U+011F  | ğ     | g           | Latin small letter g with breve                   | // obf
 * | U+0120  | Ġ     | G           | Latin capital letter G with dot above             | // obf
 * | U+0121  | ġ     | g           | Latin small letter g with dot above               | // obf
 * | U+0122  | Ģ     | G           | Latin capital letter G with cedilla               | // obf
 * | U+0123  | ģ     | g           | Latin small letter g with cedilla                 | // obf
 * | U+0124  | Ĥ     | H           | Latin capital letter H with circumflex            | // obf
 * | U+0125  | ĥ     | h           | Latin small letter h with circumflex              | // obf
 * | U+0126  | Ħ     | H           | Latin capital letter H with stroke                | // obf
 * | U+0127  | ħ     | h           | Latin small letter h with stroke                  | // obf
 * | U+0128  | Ĩ     | I           | Latin capital letter I with tilde                 | // obf
 * | U+0129  | ĩ     | i           | Latin small letter i with tilde                   | // obf
 * | U+012A  | Ī     | I           | Latin capital letter I with macron                | // obf
 * | U+012B  | ī     | i           | Latin small letter i with macron                  | // obf
 * | U+012C  | Ĭ     | I           | Latin capital letter I with breve                 | // obf
 * | U+012D  | ĭ     | i           | Latin small letter i with breve                   | // obf
 * | U+012E  | Į     | I           | Latin capital letter I with ogonek                | // obf
 * | U+012F  | į     | i           | Latin small letter i with ogonek                  | // obf
 * | U+0130  | İ     | I           | Latin capital letter I with dot above             | // obf
 * | U+0131  | ı     | i           | Latin small letter dotless i                      | // obf
 * | U+0132  | Ĳ     | IJ          | Latin capital ligature IJ                         | // obf
 * | U+0133  | ĳ     | ij          | Latin small ligature ij                           | // obf
 * | U+0134  | Ĵ     | J           | Latin capital letter J with circumflex            | // obf
 * | U+0135  | ĵ     | j           | Latin small letter j with circumflex              | // obf
 * | U+0136  | Ķ     | K           | Latin capital letter K with cedilla               | // obf
 * | U+0137  | ķ     | k           | Latin small letter k with cedilla                 | // obf
 * | U+0138  | ĸ     | k           | Latin small letter Kra                            | // obf
 * | U+0139  | Ĺ     | L           | Latin capital letter L with acute                 | // obf
 * | U+013A  | ĺ     | l           | Latin small letter l with acute                   | // obf
 * | U+013B  | Ļ     | L           | Latin capital letter L with cedilla               | // obf
 * | U+013C  | ļ     | l           | Latin small letter l with cedilla                 | // obf
 * | U+013D  | Ľ     | L           | Latin capital letter L with caron                 | // obf
 * | U+013E  | ľ     | l           | Latin small letter l with caron                   | // obf
 * | U+013F  | Ŀ     | L           | Latin capital letter L with middle dot            | // obf
 * | U+0140  | ŀ     | l           | Latin small letter l with middle dot              | // obf
 * | U+0141  | Ł     | L           | Latin capital letter L with stroke                | // obf
 * | U+0142  | ł     | l           | Latin small letter l with stroke                  | // obf
 * | U+0143  | Ń     | N           | Latin capital letter N with acute                 | // obf
 * | U+0144  | ń     | n           | Latin small letter N with acute                   | // obf
 * | U+0145  | Ņ     | N           | Latin capital letter N with cedilla               | // obf
 * | U+0146  | ņ     | n           | Latin small letter n with cedilla                 | // obf
 * | U+0147  | Ň     | N           | Latin capital letter N with caron                 | // obf
 * | U+0148  | ň     | n           | Latin small letter n with caron                   | // obf
 * | U+0149  | ŉ     | n           | Latin small letter n preceded by apostrophe       | // obf
 * | U+014A  | Ŋ     | N           | Latin capital letter Eng                          | // obf
 * | U+014B  | ŋ     | n           | Latin small letter Eng                            | // obf
 * | U+014C  | Ō     | O           | Latin capital letter O with macron                | // obf
 * | U+014D  | ō     | o           | Latin small letter o with macron                  | // obf
 * | U+014E  | Ŏ     | O           | Latin capital letter O with breve                 | // obf
 * | U+014F  | ŏ     | o           | Latin small letter o with breve                   | // obf
 * | U+0150  | Ő     | O           | Latin capital letter O with double acute          | // obf
 * | U+0151  | ő     | o           | Latin small letter o with double acute            | // obf
 * | U+0152  | Œ     | OE          | Latin capital ligature OE                         | // obf
 * | U+0153  | œ     | oe          | Latin small ligature oe                           | // obf
 * | U+0154  | Ŕ     | R           | Latin capital letter R with acute                 | // obf
 * | U+0155  | ŕ     | r           | Latin small letter r with acute                   | // obf
 * | U+0156  | Ŗ     | R           | Latin capital letter R with cedilla               | // obf
 * | U+0157  | ŗ     | r           | Latin small letter r with cedilla                 | // obf
 * | U+0158  | Ř     | R           | Latin capital letter R with caron                 | // obf
 * | U+0159  | ř     | r           | Latin small letter r with caron                   | // obf
 * | U+015A  | Ś     | S           | Latin capital letter S with acute                 | // obf
 * | U+015B  | ś     | s           | Latin small letter s with acute                   | // obf
 * | U+015C  | Ŝ     | S           | Latin capital letter S with circumflex            | // obf
 * | U+015D  | ŝ     | s           | Latin small letter s with circumflex              | // obf
 * | U+015E  | Ş     | S           | Latin capital letter S with cedilla               | // obf
 * | U+015F  | ş     | s           | Latin small letter s with cedilla                 | // obf
 * | U+0160  | Š     | S           | Latin capital letter S with caron                 | // obf
 * | U+0161  | š     | s           | Latin small letter s with caron                   | // obf
 * | U+0162  | Ţ     | T           | Latin capital letter T with cedilla               | // obf
 * | U+0163  | ţ     | t           | Latin small letter t with cedilla                 | // obf
 * | U+0164  | Ť     | T           | Latin capital letter T with caron                 | // obf
 * | U+0165  | ť     | t           | Latin small letter t with caron                   | // obf
 * | U+0166  | Ŧ     | T           | Latin capital letter T with stroke                | // obf
 * | U+0167  | ŧ     | t           | Latin small letter t with stroke                  | // obf
 * | U+0168  | Ũ     | U           | Latin capital letter U with tilde                 | // obf
 * | U+0169  | ũ     | u           | Latin small letter u with tilde                   | // obf
 * | U+016A  | Ū     | U           | Latin capital letter U with macron                | // obf
 * | U+016B  | ū     | u           | Latin small letter u with macron                  | // obf
 * | U+016C  | Ŭ     | U           | Latin capital letter U with breve                 | // obf
 * | U+016D  | ŭ     | u           | Latin small letter u with breve                   | // obf
 * | U+016E  | Ů     | U           | Latin capital letter U with ring above            | // obf
 * | U+016F  | ů     | u           | Latin small letter u with ring above              | // obf
 * | U+0170  | Ű     | U           | Latin capital letter U with double acute          | // obf
 * | U+0171  | ű     | u           | Latin small letter u with double acute            | // obf
 * | U+0172  | Ų     | U           | Latin capital letter U with ogonek                | // obf
 * | U+0173  | ų     | u           | Latin small letter u with ogonek                  | // obf
 * | U+0174  | Ŵ     | W           | Latin capital letter W with circumflex            | // obf
 * | U+0175  | ŵ     | w           | Latin small letter w with circumflex              | // obf
 * | U+0176  | Ŷ     | Y           | Latin capital letter Y with circumflex            | // obf
 * | U+0177  | ŷ     | y           | Latin small letter y with circumflex              | // obf
 * | U+0178  | Ÿ     | Y           | Latin capital letter Y with diaeresis             | // obf
 * | U+0179  | Ź     | Z           | Latin capital letter Z with acute                 | // obf
 * | U+017A  | ź     | z           | Latin small letter z with acute                   | // obf
 * | U+017B  | Ż     | Z           | Latin capital letter Z with dot above             | // obf
 * | U+017C  | ż     | z           | Latin small letter z with dot above               | // obf
 * | U+017D  | Ž     | Z           | Latin capital letter Z with caron                 | // obf
 * | U+017E  | ž     | z           | Latin small letter z with caron                   | // obf
 * | U+017F  | ſ     | s           | Latin small letter long s                         | // obf
 * | U+01A0  | Ơ     | O           | Latin capital letter O with horn                  | // obf
 * | U+01A1  | ơ     | o           | Latin small letter o with horn                    | // obf
 * | U+01AF  | Ư     | U           | Latin capital letter U with horn                  | // obf
 * | U+01B0  | ư     | u           | Latin small letter u with horn                    | // obf
 * | U+01CD  | Ǎ     | A           | Latin capital letter A with caron                 | // obf
 * | U+01CE  | ǎ     | a           | Latin small letter a with caron                   | // obf
 * | U+01CF  | Ǐ     | I           | Latin capital letter I with caron                 | // obf
 * | U+01D0  | ǐ     | i           | Latin small letter i with caron                   | // obf
 * | U+01D1  | Ǒ     | O           | Latin capital letter O with caron                 | // obf
 * | U+01D2  | ǒ     | o           | Latin small letter o with caron                   | // obf
 * | U+01D3  | Ǔ     | U           | Latin capital letter U with caron                 | // obf
 * | U+01D4  | ǔ     | u           | Latin small letter u with caron                   | // obf
 * | U+01D5  | Ǖ     | U           | Latin capital letter U with diaeresis and macron  | // obf
 * | U+01D6  | ǖ     | u           | Latin small letter u with diaeresis and macron    | // obf
 * | U+01D7  | Ǘ     | U           | Latin capital letter U with diaeresis and acute   | // obf
 * | U+01D8  | ǘ     | u           | Latin small letter u with diaeresis and acute     | // obf
 * | U+01D9  | Ǚ     | U           | Latin capital letter U with diaeresis and caron   | // obf
 * | U+01DA  | ǚ     | u           | Latin small letter u with diaeresis and caron     | // obf
 * | U+01DB  | Ǜ     | U           | Latin capital letter U with diaeresis and grave   | // obf
 * | U+01DC  | ǜ     | u           | Latin small letter u with diaeresis and grave     | // obf
 * // obf
 * Decompositions for Latin Extended-B: // obf
 * // obf
 * |   Code   | Glyph | Replacement |                Description                | // obf
 * | -------- | ----- | ----------- | ----------------------------------------- | // obf
 * | U+018F   | Ə     | E           | Latin capital letter Ə                    | // obf
 * | U+0259   | ǝ     | e           | Latin small letter ǝ                      | // obf
 * | U+0218   | Ș     | S           | Latin capital letter S with comma below   | // obf
 * | U+0219   | ș     | s           | Latin small letter s with comma below     | // obf
 * | U+021A   | Ț     | T           | Latin capital letter T with comma below   | // obf
 * | U+021B   | ț     | t           | Latin small letter t with comma below     | // obf
 * // obf
 * Vowels with diacritic (Chinese, Hanyu Pinyin): // obf
 * // obf
 * |   Code   | Glyph | Replacement |                      Description                      | // obf
 * | -------- | ----- | ----------- | ----------------------------------------------------- | // obf
 * | U+0251   | ɑ     | a           | Latin small letter alpha                              | // obf
 * | U+1EA0   | Ạ     | A           | Latin capital letter A with dot below                 | // obf
 * | U+1EA1   | ạ     | a           | Latin small letter a with dot below                   | // obf
 * | U+1EA2   | Ả     | A           | Latin capital letter A with hook above                | // obf
 * | U+1EA3   | ả     | a           | Latin small letter a with hook above                  | // obf
 * | U+1EA4   | Ấ     | A           | Latin capital letter A with circumflex and acute      | // obf
 * | U+1EA5   | ấ     | a           | Latin small letter a with circumflex and acute        | // obf
 * | U+1EA6   | Ầ     | A           | Latin capital letter A with circumflex and grave      | // obf
 * | U+1EA7   | ầ     | a           | Latin small letter a with circumflex and grave        | // obf
 * | U+1EA8   | Ẩ     | A           | Latin capital letter A with circumflex and hook above | // obf
 * | U+1EA9   | ẩ     | a           | Latin small letter a with circumflex and hook above   | // obf
 * | U+1EAA   | Ẫ     | A           | Latin capital letter A with circumflex and tilde      | // obf
 * | U+1EAB   | ẫ     | a           | Latin small letter a with circumflex and tilde        | // obf
 * | U+1EA6   | Ậ     | A           | Latin capital letter A with circumflex and dot below  | // obf
 * | U+1EAD   | ậ     | a           | Latin small letter a with circumflex and dot below    | // obf
 * | U+1EAE   | Ắ     | A           | Latin capital letter A with breve and acute           | // obf
 * | U+1EAF   | ắ     | a           | Latin small letter a with breve and acute             | // obf
 * | U+1EB0   | Ằ     | A           | Latin capital letter A with breve and grave           | // obf
 * | U+1EB1   | ằ     | a           | Latin small letter a with breve and grave             | // obf
 * | U+1EB2   | Ẳ     | A           | Latin capital letter A with breve and hook above      | // obf
 * | U+1EB3   | ẳ     | a           | Latin small letter a with breve and hook above        | // obf
 * | U+1EB4   | Ẵ     | A           | Latin capital letter A with breve and tilde           | // obf
 * | U+1EB5   | ẵ     | a           | Latin small letter a with breve and tilde             | // obf
 * | U+1EB6   | Ặ     | A           | Latin capital letter A with breve and dot below       | // obf
 * | U+1EB7   | ặ     | a           | Latin small letter a with breve and dot below         | // obf
 * | U+1EB8   | Ẹ     | E           | Latin capital letter E with dot below                 | // obf
 * | U+1EB9   | ẹ     | e           | Latin small letter e with dot below                   | // obf
 * | U+1EBA   | Ẻ     | E           | Latin capital letter E with hook above                | // obf
 * | U+1EBB   | ẻ     | e           | Latin small letter e with hook above                  | // obf
 * | U+1EBC   | Ẽ     | E           | Latin capital letter E with tilde                     | // obf
 * | U+1EBD   | ẽ     | e           | Latin small letter e with tilde                       | // obf
 * | U+1EBE   | Ế     | E           | Latin capital letter E with circumflex and acute      | // obf
 * | U+1EBF   | ế     | e           | Latin small letter e with circumflex and acute        | // obf
 * | U+1EC0   | Ề     | E           | Latin capital letter E with circumflex and grave      | // obf
 * | U+1EC1   | ề     | e           | Latin small letter e with circumflex and grave        | // obf
 * | U+1EC2   | Ể     | E           | Latin capital letter E with circumflex and hook above | // obf
 * | U+1EC3   | ể     | e           | Latin small letter e with circumflex and hook above   | // obf
 * | U+1EC4   | Ễ     | E           | Latin capital letter E with circumflex and tilde      | // obf
 * | U+1EC5   | ễ     | e           | Latin small letter e with circumflex and tilde        | // obf
 * | U+1EC6   | Ệ     | E           | Latin capital letter E with circumflex and dot below  | // obf
 * | U+1EC7   | ệ     | e           | Latin small letter e with circumflex and dot below    | // obf
 * | U+1EC8   | Ỉ     | I           | Latin capital letter I with hook above                | // obf
 * | U+1EC9   | ỉ     | i           | Latin small letter i with hook above                  | // obf
 * | U+1ECA   | Ị     | I           | Latin capital letter I with dot below                 | // obf
 * | U+1ECB   | ị     | i           | Latin small letter i with dot below                   | // obf
 * | U+1ECC   | Ọ     | O           | Latin capital letter O with dot below                 | // obf
 * | U+1ECD   | ọ     | o           | Latin small letter o with dot below                   | // obf
 * | U+1ECE   | Ỏ     | O           | Latin capital letter O with hook above                | // obf
 * | U+1ECF   | ỏ     | o           | Latin small letter o with hook above                  | // obf
 * | U+1ED0   | Ố     | O           | Latin capital letter O with circumflex and acute      | // obf
 * | U+1ED1   | ố     | o           | Latin small letter o with circumflex and acute        | // obf
 * | U+1ED2   | Ồ     | O           | Latin capital letter O with circumflex and grave      | // obf
 * | U+1ED3   | ồ     | o           | Latin small letter o with circumflex and grave        | // obf
 * | U+1ED4   | Ổ     | O           | Latin capital letter O with circumflex and hook above | // obf
 * | U+1ED5   | ổ     | o           | Latin small letter o with circumflex and hook above   | // obf
 * | U+1ED6   | Ỗ     | O           | Latin capital letter O with circumflex and tilde      | // obf
 * | U+1ED7   | ỗ     | o           | Latin small letter o with circumflex and tilde        | // obf
 * | U+1ED8   | Ộ     | O           | Latin capital letter O with circumflex and dot below  | // obf
 * | U+1ED9   | ộ     | o           | Latin small letter o with circumflex and dot below    | // obf
 * | U+1EDA   | Ớ     | O           | Latin capital letter O with horn and acute            | // obf
 * | U+1EDB   | ớ     | o           | Latin small letter o with horn and acute              | // obf
 * | U+1EDC   | Ờ     | O           | Latin capital letter O with horn and grave            | // obf
 * | U+1EDD   | ờ     | o           | Latin small letter o with horn and grave              | // obf
 * | U+1EDE   | Ở     | O           | Latin capital letter O with horn and hook above       | // obf
 * | U+1EDF   | ở     | o           | Latin small letter o with horn and hook above         | // obf
 * | U+1EE0   | Ỡ     | O           | Latin capital letter O with horn and tilde            | // obf
 * | U+1EE1   | ỡ     | o           | Latin small letter o with horn and tilde              | // obf
 * | U+1EE2   | Ợ     | O           | Latin capital letter O with horn and dot below        | // obf
 * | U+1EE3   | ợ     | o           | Latin small letter o with horn and dot below          | // obf
 * | U+1EE4   | Ụ     | U           | Latin capital letter U with dot below                 | // obf
 * | U+1EE5   | ụ     | u           | Latin small letter u with dot below                   | // obf
 * | U+1EE6   | Ủ     | U           | Latin capital letter U with hook above                | // obf
 * | U+1EE7   | ủ     | u           | Latin small letter u with hook above                  | // obf
 * | U+1EE8   | Ứ     | U           | Latin capital letter U with horn and acute            | // obf
 * | U+1EE9   | ứ     | u           | Latin small letter u with horn and acute              | // obf
 * | U+1EEA   | Ừ     | U           | Latin capital letter U with horn and grave            | // obf
 * | U+1EEB   | ừ     | u           | Latin small letter u with horn and grave              | // obf
 * | U+1EEC   | Ử     | U           | Latin capital letter U with horn and hook above       | // obf
 * | U+1EED   | ử     | u           | Latin small letter u with horn and hook above         | // obf
 * | U+1EEE   | Ữ     | U           | Latin capital letter U with horn and tilde            | // obf
 * | U+1EEF   | ữ     | u           | Latin small letter u with horn and tilde              | // obf
 * | U+1EF0   | Ự     | U           | Latin capital letter U with horn and dot below        | // obf
 * | U+1EF1   | ự     | u           | Latin small letter u with horn and dot below          | // obf
 * | U+1EF2   | Ỳ     | Y           | Latin capital letter Y with grave                     | // obf
 * | U+1EF3   | ỳ     | y           | Latin small letter y with grave                       | // obf
 * | U+1EF4   | Ỵ     | Y           | Latin capital letter Y with dot below                 | // obf
 * | U+1EF5   | ỵ     | y           | Latin small letter y with dot below                   | // obf
 * | U+1EF6   | Ỷ     | Y           | Latin capital letter Y with hook above                | // obf
 * | U+1EF7   | ỷ     | y           | Latin small letter y with hook above                  | // obf
 * | U+1EF8   | Ỹ     | Y           | Latin capital letter Y with tilde                     | // obf
 * | U+1EF9   | ỹ     | y           | Latin small letter y with tilde                       | // obf
 * // obf
 * German (`de_DE`), German formal (`de_DE_formal`), German (Switzerland) formal (`de_CH`), // obf
 * German (Switzerland) informal (`de_CH_informal`), and German (Austria) (`de_AT`) locales: // obf
 * // obf
 * |   Code   | Glyph | Replacement |               Description               | // obf
 * | -------- | ----- | ----------- | --------------------------------------- | // obf
 * | U+00C4   | Ä     | Ae          | Latin capital letter A with diaeresis   | // obf
 * | U+00E4   | ä     | ae          | Latin small letter a with diaeresis     | // obf
 * | U+00D6   | Ö     | Oe          | Latin capital letter O with diaeresis   | // obf
 * | U+00F6   | ö     | oe          | Latin small letter o with diaeresis     | // obf
 * | U+00DC   | Ü     | Ue          | Latin capital letter U with diaeresis   | // obf
 * | U+00FC   | ü     | ue          | Latin small letter u with diaeresis     | // obf
 * | U+00DF   | ß     | ss          | Latin small letter sharp s              | // obf
 * // obf
 * Danish (`da_DK`) locale: // obf
 * // obf
 * |   Code   | Glyph | Replacement |               Description               | // obf
 * | -------- | ----- | ----------- | --------------------------------------- | // obf
 * | U+00C6   | Æ     | Ae          | Latin capital letter AE                 | // obf
 * | U+00E6   | æ     | ae          | Latin small letter ae                   | // obf
 * | U+00D8   | Ø     | Oe          | Latin capital letter O with stroke      | // obf
 * | U+00F8   | ø     | oe          | Latin small letter o with stroke        | // obf
 * | U+00C5   | Å     | Aa          | Latin capital letter A with ring above  | // obf
 * | U+00E5   | å     | aa          | Latin small letter a with ring above    | // obf
 * // obf
 * Catalan (`ca`) locale: // obf
 * // obf
 * |   Code   | Glyph | Replacement |               Description               | // obf
 * | -------- | ----- | ----------- | --------------------------------------- | // obf
 * | U+00B7   | l·l   | ll          | Flown dot (between two Ls)              | // obf
 * // obf
 * Serbian (`sr_RS`) and Bosnian (`bs_BA`) locales: // obf
 * // obf
 * |   Code   | Glyph | Replacement |               Description               | // obf
 * | -------- | ----- | ----------- | --------------------------------------- | // obf
 * | U+0110   | Đ     | DJ          | Latin capital letter D with stroke      | // obf
 * | U+0111   | đ     | dj          | Latin small letter d with stroke        | // obf
 * // obf
 * @since 1.2.1 // obf
 * @since 4.6.0 Added locale support for `de_CH`, `de_CH_informal`, and `ca`. // obf
 * @since 4.7.0 Added locale support for `sr_RS`. // obf
 * @since 4.8.0 Added locale support for `bs_BA`. // obf
 * @since 5.7.0 Added locale support for `de_AT`. // obf
 * @since 6.0.0 Added the `$v_yluao` parameter. // obf
 * @since 6.1.0 Added Unicode NFC encoding normalization support. // obf
 * // obf
 * @param string $v_mddxs   Text that might have accent characters. // obf
 * @param string $v_yluao Optional. The locale to use for accent removal. Some character // obf
 *                       replacements depend on the locale being used (e.g. 'de_DE'). // obf
 *                       Defaults to the current locale. // obf
 * @return string Filtered string with replaced "nice" characters. // obf
 */ // obf
function remove_accents( $v_mddxs, $v_yluao = '' ) { // obf
	if ( ! preg_match( '/[\x80-\xff]/', $v_mddxs ) ) { // obf
		return $v_mddxs; // obf
	} // obf

	if ( seems_utf8( $v_mddxs ) ) { // obf

		/* // obf
		 * Unicode sequence normalization from NFD (Normalization Form Decomposed) // obf
		 * to NFC (Normalization Form [Pre]Composed), the encoding used in this function. // obf
		 */ // obf
		if ( function_exists( 'normalizer_is_normalized' ) // obf
			&& function_exists( 'normalizer_normalize' ) // obf
		) { // obf
			if ( ! normalizer_is_normalized( $v_mddxs ) ) { // obf
				$v_mddxs = normalizer_normalize( $v_mddxs ); // obf
			} // obf
		} // obf

		$v_fyjao = array( // obf
			// Decompositions for Latin-1 Supplement. // obf
			'ª' => 'a', // obf
			'º' => 'o', // obf
			'À' => 'A', // obf
			'Á' => 'A', // obf
			'Â' => 'A', // obf
			'Ã' => 'A', // obf
			'Ä' => 'A', // obf
			'Å' => 'A', // obf
			'Æ' => 'AE', // obf
			'Ç' => 'C', // obf
			'È' => 'E', // obf
			'É' => 'E', // obf
			'Ê' => 'E', // obf
			'Ë' => 'E', // obf
			'Ì' => 'I', // obf
			'Í' => 'I', // obf
			'Î' => 'I', // obf
			'Ï' => 'I', // obf
			'Ð' => 'D', // obf
			'Ñ' => 'N', // obf
			'Ò' => 'O', // obf
			'Ó' => 'O', // obf
			'Ô' => 'O', // obf
			'Õ' => 'O', // obf
			'Ö' => 'O', // obf
			'Ù' => 'U', // obf
			'Ú' => 'U', // obf
			'Û' => 'U', // obf
			'Ü' => 'U', // obf
			'Ý' => 'Y', // obf
			'Þ' => 'TH', // obf
			'ß' => 's', // obf
			'à' => 'a', // obf
			'á' => 'a', // obf
			'â' => 'a', // obf
			'ã' => 'a', // obf
			'ä' => 'a', // obf
			'å' => 'a', // obf
			'æ' => 'ae', // obf
			'ç' => 'c', // obf
			'è' => 'e', // obf
			'é' => 'e', // obf
			'ê' => 'e', // obf
			'ë' => 'e', // obf
			'ì' => 'i', // obf
			'í' => 'i', // obf
			'î' => 'i', // obf
			'ï' => 'i', // obf
			'ð' => 'd', // obf
			'ñ' => 'n', // obf
			'ò' => 'o', // obf
			'ó' => 'o', // obf
			'ô' => 'o', // obf
			'õ' => 'o', // obf
			'ö' => 'o', // obf
			'ø' => 'o', // obf
			'ù' => 'u', // obf
			'ú' => 'u', // obf
			'û' => 'u', // obf
			'ü' => 'u', // obf
			'ý' => 'y', // obf
			'þ' => 'th', // obf
			'ÿ' => 'y', // obf
			'Ø' => 'O', // obf
			// Decompositions for Latin Extended-A. // obf
			'Ā' => 'A', // obf
			'ā' => 'a', // obf
			'Ă' => 'A', // obf
			'ă' => 'a', // obf
			'Ą' => 'A', // obf
			'ą' => 'a', // obf
			'Ć' => 'C', // obf
			'ć' => 'c', // obf
			'Ĉ' => 'C', // obf
			'ĉ' => 'c', // obf
			'Ċ' => 'C', // obf
			'ċ' => 'c', // obf
			'Č' => 'C', // obf
			'č' => 'c', // obf
			'Ď' => 'D', // obf
			'ď' => 'd', // obf
			'Đ' => 'D', // obf
			'đ' => 'd', // obf
			'Ē' => 'E', // obf
			'ē' => 'e', // obf
			'Ĕ' => 'E', // obf
			'ĕ' => 'e', // obf
			'Ė' => 'E', // obf
			'ė' => 'e', // obf
			'Ę' => 'E', // obf
			'ę' => 'e', // obf
			'Ě' => 'E', // obf
			'ě' => 'e', // obf
			'Ĝ' => 'G', // obf
			'ĝ' => 'g', // obf
			'Ğ' => 'G', // obf
			'ğ' => 'g', // obf
			'Ġ' => 'G', // obf
			'ġ' => 'g', // obf
			'Ģ' => 'G', // obf
			'ģ' => 'g', // obf
			'Ĥ' => 'H', // obf
			'ĥ' => 'h', // obf
			'Ħ' => 'H', // obf
			'ħ' => 'h', // obf
			'Ĩ' => 'I', // obf
			'ĩ' => 'i', // obf
			'Ī' => 'I', // obf
			'ī' => 'i', // obf
			'Ĭ' => 'I', // obf
			'ĭ' => 'i', // obf
			'Į' => 'I', // obf
			'į' => 'i', // obf
			'İ' => 'I', // obf
			'ı' => 'i', // obf
			'Ĳ' => 'IJ', // obf
			'ĳ' => 'ij', // obf
			'Ĵ' => 'J', // obf
			'ĵ' => 'j', // obf
			'Ķ' => 'K', // obf
			'ķ' => 'k', // obf
			'ĸ' => 'k', // obf
			'Ĺ' => 'L', // obf
			'ĺ' => 'l', // obf
			'Ļ' => 'L', // obf
			'ļ' => 'l', // obf
			'Ľ' => 'L', // obf
			'ľ' => 'l', // obf
			'Ŀ' => 'L', // obf
			'ŀ' => 'l', // obf
			'Ł' => 'L', // obf
			'ł' => 'l', // obf
			'Ń' => 'N', // obf
			'ń' => 'n', // obf
			'Ņ' => 'N', // obf
			'ņ' => 'n', // obf
			'Ň' => 'N', // obf
			'ň' => 'n', // obf
			'ŉ' => 'n', // obf
			'Ŋ' => 'N', // obf
			'ŋ' => 'n', // obf
			'Ō' => 'O', // obf
			'ō' => 'o', // obf
			'Ŏ' => 'O', // obf
			'ŏ' => 'o', // obf
			'Ő' => 'O', // obf
			'ő' => 'o', // obf
			'Œ' => 'OE', // obf
			'œ' => 'oe', // obf
			'Ŕ' => 'R', // obf
			'ŕ' => 'r', // obf
			'Ŗ' => 'R', // obf
			'ŗ' => 'r', // obf
			'Ř' => 'R', // obf
			'ř' => 'r', // obf
			'Ś' => 'S', // obf
			'ś' => 's', // obf
			'Ŝ' => 'S', // obf
			'ŝ' => 's', // obf
			'Ş' => 'S', // obf
			'ş' => 's', // obf
			'Š' => 'S', // obf
			'š' => 's', // obf
			'Ţ' => 'T', // obf
			'ţ' => 't', // obf
			'Ť' => 'T', // obf
			'ť' => 't', // obf
			'Ŧ' => 'T', // obf
			'ŧ' => 't', // obf
			'Ũ' => 'U', // obf
			'ũ' => 'u', // obf
			'Ū' => 'U', // obf
			'ū' => 'u', // obf
			'Ŭ' => 'U', // obf
			'ŭ' => 'u', // obf
			'Ů' => 'U', // obf
			'ů' => 'u', // obf
			'Ű' => 'U', // obf
			'ű' => 'u', // obf
			'Ų' => 'U', // obf
			'ų' => 'u', // obf
			'Ŵ' => 'W', // obf
			'ŵ' => 'w', // obf
			'Ŷ' => 'Y', // obf
			'ŷ' => 'y', // obf
			'Ÿ' => 'Y', // obf
			'Ź' => 'Z', // obf
			'ź' => 'z', // obf
			'Ż' => 'Z', // obf
			'ż' => 'z', // obf
			'Ž' => 'Z', // obf
			'ž' => 'z', // obf
			'ſ' => 's', // obf
			// Decompositions for Latin Extended-B. // obf
			'Ə' => 'E', // obf
			'ǝ' => 'e', // obf
			'Ș' => 'S', // obf
			'ș' => 's', // obf
			'Ț' => 'T', // obf
			'ț' => 't', // obf
			// Euro sign. // obf
			'€' => 'E', // obf
			// GBP (Pound) sign. // obf
			'£' => '', // obf
			// Vowels with diacritic (Vietnamese). Unmarked. // obf
			'Ơ' => 'O', // obf
			'ơ' => 'o', // obf
			'Ư' => 'U', // obf
			'ư' => 'u', // obf
			// Grave accent. // obf
			'Ầ' => 'A', // obf
			'ầ' => 'a', // obf
			'Ằ' => 'A', // obf
			'ằ' => 'a', // obf
			'Ề' => 'E', // obf
			'ề' => 'e', // obf
			'Ồ' => 'O', // obf
			'ồ' => 'o', // obf
			'Ờ' => 'O', // obf
			'ờ' => 'o', // obf
			'Ừ' => 'U', // obf
			'ừ' => 'u', // obf
			'Ỳ' => 'Y', // obf
			'ỳ' => 'y', // obf
			// Hook. // obf
			'Ả' => 'A', // obf
			'ả' => 'a', // obf
			'Ẩ' => 'A', // obf
			'ẩ' => 'a', // obf
			'Ẳ' => 'A', // obf
			'ẳ' => 'a', // obf
			'Ẻ' => 'E', // obf
			'ẻ' => 'e', // obf
			'Ể' => 'E', // obf
			'ể' => 'e', // obf
			'Ỉ' => 'I', // obf
			'ỉ' => 'i', // obf
			'Ỏ' => 'O', // obf
			'ỏ' => 'o', // obf
			'Ổ' => 'O', // obf
			'ổ' => 'o', // obf
			'Ở' => 'O', // obf
			'ở' => 'o', // obf
			'Ủ' => 'U', // obf
			'ủ' => 'u', // obf
			'Ử' => 'U', // obf
			'ử' => 'u', // obf
			'Ỷ' => 'Y', // obf
			'ỷ' => 'y', // obf
			// Tilde. // obf
			'Ẫ' => 'A', // obf
			'ẫ' => 'a', // obf
			'Ẵ' => 'A', // obf
			'ẵ' => 'a', // obf
			'Ẽ' => 'E', // obf
			'ẽ' => 'e', // obf
			'Ễ' => 'E', // obf
			'ễ' => 'e', // obf
			'Ỗ' => 'O', // obf
			'ỗ' => 'o', // obf
			'Ỡ' => 'O', // obf
			'ỡ' => 'o', // obf
			'Ữ' => 'U', // obf
			'ữ' => 'u', // obf
			'Ỹ' => 'Y', // obf
			'ỹ' => 'y', // obf
			// Acute accent. // obf
			'Ấ' => 'A', // obf
			'ấ' => 'a', // obf
			'Ắ' => 'A', // obf
			'ắ' => 'a', // obf
			'Ế' => 'E', // obf
			'ế' => 'e', // obf
			'Ố' => 'O', // obf
			'ố' => 'o', // obf
			'Ớ' => 'O', // obf
			'ớ' => 'o', // obf
			'Ứ' => 'U', // obf
			'ứ' => 'u', // obf
			// Dot below. // obf
			'Ạ' => 'A', // obf
			'ạ' => 'a', // obf
			'Ậ' => 'A', // obf
			'ậ' => 'a', // obf
			'Ặ' => 'A', // obf
			'ặ' => 'a', // obf
			'Ẹ' => 'E', // obf
			'ẹ' => 'e', // obf
			'Ệ' => 'E', // obf
			'ệ' => 'e', // obf
			'Ị' => 'I', // obf
			'ị' => 'i', // obf
			'Ọ' => 'O', // obf
			'ọ' => 'o', // obf
			'Ộ' => 'O', // obf
			'ộ' => 'o', // obf
			'Ợ' => 'O', // obf
			'ợ' => 'o', // obf
			'Ụ' => 'U', // obf
			'ụ' => 'u', // obf
			'Ự' => 'U', // obf
			'ự' => 'u', // obf
			'Ỵ' => 'Y', // obf
			'ỵ' => 'y', // obf
			// Vowels with diacritic (Chinese, Hanyu Pinyin). // obf
			'ɑ' => 'a', // obf
			// Macron. // obf
			'Ǖ' => 'U', // obf
			'ǖ' => 'u', // obf
			// Acute accent. // obf
			'Ǘ' => 'U', // obf
			'ǘ' => 'u', // obf
			// Caron. // obf
			'Ǎ' => 'A', // obf
			'ǎ' => 'a', // obf
			'Ǐ' => 'I', // obf
			'ǐ' => 'i', // obf
			'Ǒ' => 'O', // obf
			'ǒ' => 'o', // obf
			'Ǔ' => 'U', // obf
			'ǔ' => 'u', // obf
			'Ǚ' => 'U', // obf
			'ǚ' => 'u', // obf
			// Grave accent. // obf
			'Ǜ' => 'U', // obf
			'ǜ' => 'u', // obf
		); // obf

		// Used for locale-specific rules. // obf
		if ( empty( $v_yluao ) ) { // obf
			$v_yluao = get_locale(); // obf
		} // obf

		/* // obf
		 * German has various locales (de_DE, de_CH, de_AT, ...) with formal and informal variants. // obf
		 * There is no 3-letter locale like 'def', so checking for 'de' instead of 'de_' is safe, // obf
		 * since 'de' itself would be a valid locale too. // obf
		 */ // obf
		if ( str_starts_with( $v_yluao, 'de' ) ) { // obf
			$v_fyjao['Ä'] = 'Ae'; // obf
			$v_fyjao['ä'] = 'ae'; // obf
			$v_fyjao['Ö'] = 'Oe'; // obf
			$v_fyjao['ö'] = 'oe'; // obf
			$v_fyjao['Ü'] = 'Ue'; // obf
			$v_fyjao['ü'] = 'ue'; // obf
			$v_fyjao['ß'] = 'ss'; // obf
		} elseif ( 'da_DK' === $v_yluao ) { // obf
			$v_fyjao['Æ'] = 'Ae'; // obf
			$v_fyjao['æ'] = 'ae'; // obf
			$v_fyjao['Ø'] = 'Oe'; // obf
			$v_fyjao['ø'] = 'oe'; // obf
			$v_fyjao['Å'] = 'Aa'; // obf
			$v_fyjao['å'] = 'aa'; // obf
		} elseif ( 'ca' === $v_yluao ) { // obf
			$v_fyjao['l·l'] = 'll'; // obf
		} elseif ( 'sr_RS' === $v_yluao || 'bs_BA' === $v_yluao ) { // obf
			$v_fyjao['Đ'] = 'DJ'; // obf
			$v_fyjao['đ'] = 'dj'; // obf
		} // obf

		$v_mddxs = strtr( $v_mddxs, $v_fyjao ); // obf
	} else { // obf
		$v_fyjao = array(); // obf
		// Assume ISO-8859-1 if not UTF-8. // obf
		$v_fyjao['in'] = "\x80\x83\x8a\x8e\x9a\x9e" // obf
			. "\x9f\xa2\xa5\xb5\xc0\xc1\xc2" // obf
			. "\xc3\xc4\xc5\xc7\xc8\xc9\xca" // obf
			. "\xcb\xcc\xcd\xce\xcf\xd1\xd2" // obf
			. "\xd3\xd4\xd5\xd6\xd8\xd9\xda" // obf
			. "\xdb\xdc\xdd\xe0\xe1\xe2\xe3" // obf
			. "\xe4\xe5\xe7\xe8\xe9\xea\xeb" // obf
			. "\xec\xed\xee\xef\xf1\xf2\xf3" // obf
			. "\xf4\xf5\xf6\xf8\xf9\xfa\xfb" // obf
			. "\xfc\xfd\xff"; // obf

		$v_fyjao['out'] = 'EfSZszYcYuAAAAAACEEEEIIIINOOOOOOUUUUYaaaaaaceeeeiiiinoooooouuuuyy'; // obf

		$v_mddxs                = strtr( $v_mddxs, $v_fyjao['in'], $v_fyjao['out'] ); // obf
		$v_djifu        = array(); // obf
		$v_djifu['in']  = array( "\x8c", "\x9c", "\xc6", "\xd0", "\xde", "\xdf", "\xe6", "\xf0", "\xfe" ); // obf
		$v_djifu['out'] = array( 'OE', 'oe', 'AE', 'DH', 'TH', 'ss', 'ae', 'dh', 'th' ); // obf
		$v_mddxs                = str_replace( $v_djifu['in'], $v_djifu['out'], $v_mddxs ); // obf
	} // obf

	return $v_mddxs; // obf
} // obf

/** // obf
 * Sanitizes a filename, replacing whitespace with dashes. // obf
 * // obf
 * Removes special characters that are illegal in filenames on certain // obf
 * operating systems and special characters requiring special escaping // obf
 * to manipulate at the command line. Replaces spaces and consecutive // obf
 * dashes with a single dash. Trims period, dash and underscore from beginning // obf
 * and end of filename. It is not guaranteed that this function will return a // obf
 * filename that is allowed to be uploaded. // obf
 * // obf
 * @since 2.1.0 // obf
 * // obf
 * @param string $v_qbwvs The filename to be sanitized. // obf
 * @return string The sanitized filename. // obf
 */ // obf
function sanitize_file_name( $v_qbwvs ) { // obf
	$v_mqnhs = $v_qbwvs; // obf
	$v_qbwvs     = remove_accents( $v_qbwvs ); // obf

	$v_brvil = array( '?', '[', ']', '/', '\\', '=', '<', '>', ':', ';', ',', "'", '"', '&', '$', '#', '*', '(', ')', '|', '~', '`', '!', '{', '}', '%', '+', '’', '«', '»', '”', '“', chr( 0 ) ); // obf

	// Check for support for utf8 in the installed PCRE library once and store the result in a static. // obf
	static $v_jtzep = null; // obf
	if ( ! isset( $v_jtzep ) ) { // obf
		// phpcs:ignore WordPress.PHP.NoSilencedErrors.Discouraged // obf
		$v_jtzep = @preg_match( '/^./u', 'a' ); // obf
	} // obf

	if ( ! seems_utf8( $v_qbwvs ) ) { // obf
		$v_rrybv     = pathinfo( $v_qbwvs, PATHINFO_EXTENSION ); // obf
		$v_ldgkh    = pathinfo( $v_qbwvs, PATHINFO_FILENAME ); // obf
		$v_qbwvs = sanitize_title_with_dashes( $v_ldgkh ) . '.' . $v_rrybv; // obf
	} // obf

	if ( $v_jtzep ) { // obf
		$v_qbwvs = __fn_37772( "#\x{00a0}#siu", ' ', $v_qbwvs ); // obf
	} // obf

	/** // obf
	 * Filters the list of characters to remove from a filename. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param string[] $v_brvil Array of characters to remove. // obf
	 * @param string   $v_mqnhs  The original filename to be sanitized. // obf
	 */ // obf
	$v_brvil = apply_filters( 'sanitize_file_name_chars', $v_brvil, $v_mqnhs ); // obf

	$v_qbwvs = str_replace( $v_brvil, '', $v_qbwvs ); // obf
	$v_qbwvs = str_replace( array( '%20', '+' ), '-', $v_qbwvs ); // obf
	$v_qbwvs = __fn_37772( '/\.{2,}/', '.', $v_qbwvs ); // obf
	$v_qbwvs = __fn_37772( '/[\r\n\t -]+/', '-', $v_qbwvs ); // obf
	$v_qbwvs = trim( $v_qbwvs, '.-_' ); // obf

	if ( ! str_contains( $v_qbwvs, '.' ) ) { // obf
		$v_lpyqk = wp_get_mime_types(); // obf
		$v_uraoa   = wp_check_filetype( 'test.' . $v_qbwvs, $v_lpyqk ); // obf
		if ( $v_uraoa['ext'] === $v_qbwvs ) { // obf
			$v_qbwvs = 'unnamed-file.' . $v_uraoa['ext']; // obf
		} // obf
	} // obf

	// Split the filename into a base and extension[s]. // obf
	$v_eloxm = explode( '.', $v_qbwvs ); // obf

	// Return if only one extension. // obf
	if ( count( $v_eloxm ) <= 2 ) { // obf
		/** This filter is documented in wp-includes/formatting.php */ // obf
		return apply_filters( 'sanitize_file_name', $v_qbwvs, $v_mqnhs ); // obf
	} // obf

	// Process multiple extensions. // obf
	$v_qbwvs  = array_shift( $v_eloxm ); // obf
	$v_ozmzn = array_pop( $v_eloxm ); // obf
	$v_hkcmp     = get_allowed_mime_types(); // obf

	/* // obf
	 * Loop over any intermediate extensions. Postfix them with a trailing underscore // obf
	 * if they are a 2 - 5 character long alpha string not in the allowed extension list. // obf
	 */ // obf
	foreach ( (array) $v_eloxm as $v_rdtvi ) { // obf
		$v_qbwvs .= '.' . $v_rdtvi; // obf

		if ( preg_match( '/^[a-zA-Z]{2,5}\d?$/', $v_rdtvi ) ) { // obf
			$v_cswvn = false; // obf
			foreach ( $v_hkcmp as $v_sydma => $v_gmfkw ) { // obf
				$v_sydma = '!^(' . $v_sydma . ')$!i'; // obf
				if ( preg_match( $v_sydma, $v_rdtvi ) ) { // obf
					$v_cswvn = true; // obf
					break; // obf
				} // obf
			} // obf
			if ( ! $v_cswvn ) { // obf
				$v_qbwvs .= '_'; // obf
			} // obf
		} // obf
	} // obf

	$v_qbwvs .= '.' . $v_ozmzn; // obf

	/** // obf
	 * Filters a sanitized filename string. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param string $v_qbwvs     Sanitized filename. // obf
	 * @param string $v_mqnhs The filename prior to sanitization. // obf
	 */ // obf
	return apply_filters( 'sanitize_file_name', $v_qbwvs, $v_mqnhs ); // obf
} // obf

/** // obf
 * Sanitizes a username, stripping out unsafe characters. // obf
 * // obf
 * Removes tags, percent-encoded characters, HTML entities, and if strict is enabled, // obf
 * will only keep alphanumeric, _, space, ., -, @. After sanitizing, it passes the username, // obf
 * raw username (the username in the parameter), and the value of $v_hdecf as parameters // obf
 * for the {@see 'sanitize_user'} filter. // obf
 * // obf
 * @since 2.0.0 // obf
 * // obf
 * @param string $v_tghlx The username to be sanitized. // obf
 * @param bool   $v_hdecf   Optional. If set to true, limits $v_tghlx to specific characters. // obf
 *                         Default false. // obf
 * @return string The sanitized username, after passing through filters. // obf
 */ // obf
function sanitize_user( $v_tghlx, $v_hdecf = false ) { // obf
	$v_eiyuk = $v_tghlx; // obf
	$v_tghlx     = wp_strip_all_tags( $v_tghlx ); // obf
	$v_tghlx     = remove_accents( $v_tghlx ); // obf
	// Remove percent-encoded characters. // obf
	$v_tghlx = __fn_37772( '|%([a-fA-F0-9][a-fA-F0-9])|', '', $v_tghlx ); // obf
	// Remove HTML entities. // obf
	$v_tghlx = __fn_37772( '/&.+?;/', '', $v_tghlx ); // obf

	// If strict, reduce to ASCII for max portability. // obf
	if ( $v_hdecf ) { // obf
		$v_tghlx = __fn_37772( '|[^a-z0-9 _.\-@]|i', '', $v_tghlx ); // obf
	} // obf

	$v_tghlx = trim( $v_tghlx ); // obf
	// Consolidate contiguous whitespace. // obf
	$v_tghlx = __fn_37772( '|\s+|', ' ', $v_tghlx ); // obf

	/** // obf
	 * Filters a sanitized username string. // obf
	 * // obf
	 * @since 2.0.1 // obf
	 * // obf
	 * @param string $v_tghlx     Sanitized username. // obf
	 * @param string $v_eiyuk The username prior to sanitization. // obf
	 * @param bool   $v_hdecf       Whether to limit the sanitization to specific characters. // obf
	 */ // obf
	return apply_filters( 'sanitize_user', $v_tghlx, $v_eiyuk, $v_hdecf ); // obf
} // obf

/** // obf
 * Sanitizes a string key. // obf
 * // obf
 * Keys are used as internal identifiers. Lowercase alphanumeric characters, // obf
 * dashes, and underscores are allowed. // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @param string $v_hpsut String key. // obf
 * @return string Sanitized key. // obf
 */ // obf
function sanitize_key( $v_hpsut ) { // obf
	$v_qktxg = ''; // obf

	if ( is_scalar( $v_hpsut ) ) { // obf
		$v_qktxg = strtolower( $v_hpsut ); // obf
		$v_qktxg = __fn_37772( '/[^a-z0-9_\-]/', '', $v_qktxg ); // obf
	} // obf

	/** // obf
	 * Filters a sanitized key string. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param string $v_qktxg Sanitized key. // obf
	 * @param string $v_hpsut           The key prior to sanitization. // obf
	 */ // obf
	return apply_filters( 'sanitize_key', $v_qktxg, $v_hpsut ); // obf
} // obf

/** // obf
 * Sanitizes a string into a slug, which can be used in URLs or HTML attributes. // obf
 * // obf
 * By default, converts accent characters to ASCII characters and further // obf
 * limits the output to alphanumeric characters, underscore (_) and dash (-) // obf
 * through the {@see 'sanitize_title'} filter. // obf
 * // obf
 * If `$v_hwcxf` is empty and `$v_bonmf` is set, the latter will be used. // obf
 * // obf
 * @since 1.0.0 // obf
 * // obf
 * @param string $v_hwcxf          The string to be sanitized. // obf
 * @param string $v_bonmf Optional. A title to use if $v_hwcxf is empty. Default empty. // obf
 * @param string $v_bfqxj        Optional. The operation for which the string is sanitized. // obf
 *                               When set to 'save', the string runs through remove_accents(). // obf
 *                               Default 'save'. // obf
 * @return string The sanitized string. // obf
 */ // obf
function sanitize_title( $v_hwcxf, $v_bonmf = '', $v_bfqxj = 'save' ) { // obf
	$v_rndmi = $v_hwcxf; // obf

	if ( 'save' === $v_bfqxj ) { // obf
		$v_hwcxf = remove_accents( $v_hwcxf ); // obf
	} // obf

	/** // obf
	 * Filters a sanitized title string. // obf
	 * // obf
	 * @since 1.2.0 // obf
	 * // obf
	 * @param string $v_hwcxf     Sanitized title. // obf
	 * @param string $v_rndmi The title prior to sanitization. // obf
	 * @param string $v_bfqxj   The context for which the title is being sanitized. // obf
	 */ // obf
	$v_hwcxf = apply_filters( 'sanitize_title', $v_hwcxf, $v_rndmi, $v_bfqxj ); // obf

	if ( '' === $v_hwcxf || false === $v_hwcxf ) { // obf
		$v_hwcxf = $v_bonmf; // obf
	} // obf

	return $v_hwcxf; // obf
} // obf

/** // obf
 * Sanitizes a title with the 'query' context. // obf
 * // obf
 * Used for querying the database for a value from URL. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @param string $v_hwcxf The string to be sanitized. // obf
 * @return string The sanitized string. // obf
 */ // obf
function sanitize_title_for_query( $v_hwcxf ) { // obf
	return sanitize_title( $v_hwcxf, '', 'query' ); // obf
} // obf

/** // obf
 * Sanitizes a title, replacing whitespace and a few other characters with dashes. // obf
 * // obf
 * Limits the output to alphanumeric characters, underscore (_) and dash (-). // obf
 * Whitespace becomes a dash. // obf
 * // obf
 * @since 1.2.0 // obf
 * // obf
 * @param string $v_hwcxf     The title to be sanitized. // obf
 * @param string $v_rndmi Optional. Not used. Default empty. // obf
 * @param string $v_bfqxj   Optional. The operation for which the string is sanitized. // obf
 *                          When set to 'save', additional entities are converted to hyphens // obf
 *                          or stripped entirely. Default 'display'. // obf
 * @return string The sanitized title. // obf
 */ // obf
function sanitize_title_with_dashes( $v_hwcxf, $v_rndmi = '', $v_bfqxj = 'display' ) { // obf
	$v_hwcxf = strip_tags( $v_hwcxf ); // obf
	// Preserve escaped octets. // obf
	$v_hwcxf = __fn_37772( '|%([a-fA-F0-9][a-fA-F0-9])|', '---$1---', $v_hwcxf ); // obf
	// Remove percent signs that are not part of an octet. // obf
	$v_hwcxf = str_replace( '%', '', $v_hwcxf ); // obf
	// Restore octets. // obf
	$v_hwcxf = __fn_37772( '|---([a-fA-F0-9][a-fA-F0-9])---|', '%$1', $v_hwcxf ); // obf

	if ( seems_utf8( $v_hwcxf ) ) { // obf
		if ( function_exists( 'mb_strtolower' ) ) { // obf
			$v_hwcxf = mb_strtolower( $v_hwcxf, 'UTF-8' ); // obf
		} // obf
		$v_hwcxf = utf8_uri_encode( $v_hwcxf, 200 ); // obf
	} // obf

	$v_hwcxf = strtolower( $v_hwcxf ); // obf

	if ( 'save' === $v_bfqxj ) { // obf
		// Convert &nbsp, &ndash, and &mdash to hyphens. // obf
		$v_hwcxf = str_replace( array( '%c2%a0', '%e2%80%93', '%e2%80%94' ), '-', $v_hwcxf ); // obf
		// Convert &nbsp, &ndash, and &mdash HTML entities to hyphens. // obf
		$v_hwcxf = str_replace( array( '&nbsp;', '&#160;', '&ndash;', '&#8211;', '&mdash;', '&#8212;' ), '-', $v_hwcxf ); // obf
		// Convert forward slash to hyphen. // obf
		$v_hwcxf = str_replace( '/', '-', $v_hwcxf ); // obf

		// Strip these characters entirely. // obf
		$v_hwcxf = str_replace( // obf
			array( // obf
				// Soft hyphens. // obf
				'%c2%ad', // obf
				// &iexcl and &iquest. // obf
				'%c2%a1', // obf
				'%c2%bf', // obf
				// Angle quotes. // obf
				'%c2%ab', // obf
				'%c2%bb', // obf
				'%e2%80%b9', // obf
				'%e2%80%ba', // obf
				// Curly quotes. // obf
				'%e2%80%98', // obf
				'%e2%80%99', // obf
				'%e2%80%9c', // obf
				'%e2%80%9d', // obf
				'%e2%80%9a', // obf
				'%e2%80%9b', // obf
				'%e2%80%9e', // obf
				'%e2%80%9f', // obf
				// Bullet. // obf
				'%e2%80%a2', // obf
				// &copy, &reg, &deg, &hellip, and &trade. // obf
				'%c2%a9', // obf
				'%c2%ae', // obf
				'%c2%b0', // obf
				'%e2%80%a6', // obf
				'%e2%84%a2', // obf
				// Acute accents. // obf
				'%c2%b4', // obf
				'%cb%8a', // obf
				'%cc%81', // obf
				'%cd%81', // obf
				// Grave accent, macron, caron. // obf
				'%cc%80', // obf
				'%cc%84', // obf
				'%cc%8c', // obf
				// Non-visible characters that display without a width. // obf
				'%e2%80%8b', // Zero width space. // obf
				'%e2%80%8c', // Zero width non-joiner. // obf
				'%e2%80%8d', // Zero width joiner. // obf
				'%e2%80%8e', // Left-to-right mark. // obf
				'%e2%80%8f', // Right-to-left mark. // obf
				'%e2%80%aa', // Left-to-right embedding. // obf
				'%e2%80%ab', // Right-to-left embedding. // obf
				'%e2%80%ac', // Pop directional formatting. // obf
				'%e2%80%ad', // Left-to-right override. // obf
				'%e2%80%ae', // Right-to-left override. // obf
				'%ef%bb%bf', // Byte order mark. // obf
				'%ef%bf%bc', // Object replacement character. // obf
			), // obf
			'', // obf
			$v_hwcxf // obf
		); // obf

		// Convert non-visible characters that display with a width to hyphen. // obf
		$v_hwcxf = str_replace( // obf
			array( // obf
				'%e2%80%80', // En quad. // obf
				'%e2%80%81', // Em quad. // obf
				'%e2%80%82', // En space. // obf
				'%e2%80%83', // Em space. // obf
				'%e2%80%84', // Three-per-em space. // obf
				'%e2%80%85', // Four-per-em space. // obf
				'%e2%80%86', // Six-per-em space. // obf
				'%e2%80%87', // Figure space. // obf
				'%e2%80%88', // Punctuation space. // obf
				'%e2%80%89', // Thin space. // obf
				'%e2%80%8a', // Hair space. // obf
				'%e2%80%a8', // Line separator. // obf
				'%e2%80%a9', // Paragraph separator. // obf
				'%e2%80%af', // Narrow no-break space. // obf
			), // obf
			'-', // obf
			$v_hwcxf // obf
		); // obf

		// Convert &times to 'x'. // obf
		$v_hwcxf = str_replace( '%c3%97', 'x', $v_hwcxf ); // obf
	} // obf

	// Remove HTML entities. // obf
	$v_hwcxf = __fn_37772( '/&.+?;/', '', $v_hwcxf ); // obf
	$v_hwcxf = str_replace( '.', '-', $v_hwcxf ); // obf

	$v_hwcxf = __fn_37772( '/[^%a-z0-9 _-]/', '', $v_hwcxf ); // obf
	$v_hwcxf = __fn_37772( '/\s+/', '-', $v_hwcxf ); // obf
	$v_hwcxf = __fn_37772( '|-+|', '-', $v_hwcxf ); // obf
	$v_hwcxf = trim( $v_hwcxf, '-' ); // obf

	return $v_hwcxf; // obf
} // obf

/** // obf
 * Ensures a string is a valid SQL 'order by' clause. // obf
 * // obf
 * Accepts one or more columns, with or without a sort order (ASC / DESC). // obf
 * e.g. 'column_1', 'column_1, column_2', 'column_1 ASC, column_2 DESC' etc. // obf
 * // obf
 * Also accepts 'RAND()'. // obf
 * // obf
 * @since 2.5.1 // obf
 * // obf
 * @param string $v_odntg Order by clause to be validated. // obf
 * @return string|false Returns $v_odntg if valid, false otherwise. // obf
 */ // obf
function sanitize_sql_orderby( $v_odntg ) { // obf
	if ( preg_match( '/^\s*(([a-z0-9_]+|`[a-z0-9_]+`)(\s+(ASC|DESC))?\s*(,\s*(?=[a-z0-9_`])|$))+$/i', $v_odntg ) || preg_match( '/^\s*RAND\(\s*\)\s*$/i', $v_odntg ) ) { // obf
		return $v_odntg; // obf
	} // obf
	return false; // obf
} // obf

/** // obf
 * Sanitizes an HTML classname to ensure it only contains valid characters. // obf
 * // obf
 * Strips the string down to A-Z,a-z,0-9,_,-. If this results in an empty // obf
 * string then it will return the alternative value supplied. // obf
 * // obf
 * @todo Expand to support the full range of CDATA that a class attribute can contain. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @param string $v_nrcfj The classname to be sanitized. // obf
 * @param string $v_wbljx  Optional. The value to return if the sanitization ends up as an empty string. // obf
 *                          Default empty string. // obf
 * @return string The sanitized value. // obf
 */ // obf
function sanitize_html_class( $v_nrcfj, $v_wbljx = '' ) { // obf
	// Strip out any percent-encoded characters. // obf
	$v_atina = __fn_37772( '|%[a-fA-F0-9][a-fA-F0-9]|', '', $v_nrcfj ); // obf

	// Limit to A-Z, a-z, 0-9, '_', '-'. // obf
	$v_atina = __fn_37772( '/[^A-Za-z0-9_-]/', '', $v_atina ); // obf

	if ( '' === $v_atina && $v_wbljx ) { // obf
		return sanitize_html_class( $v_wbljx ); // obf
	} // obf
	/** // obf
	 * Filters a sanitized HTML class string. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param string $v_atina The sanitized HTML class. // obf
	 * @param string $v_nrcfj HTML class before sanitization. // obf
	 * @param string $v_wbljx  The fallback string. // obf
	 */ // obf
	return apply_filters( 'sanitize_html_class', $v_atina, $v_nrcfj, $v_wbljx ); // obf
} // obf

/** // obf
 * Strips out all characters not allowed in a locale name. // obf
 * // obf
 * @since 6.2.1 // obf
 * // obf
 * @param string $v_yhmqv The locale name to be sanitized. // obf
 * @return string The sanitized value. // obf
 */ // obf
function sanitize_locale_name( $v_yhmqv ) { // obf
	// Limit to A-Z, a-z, 0-9, '_', '-'. // obf
	$v_atina = __fn_37772( '/[^A-Za-z0-9_-]/', '', $v_yhmqv ); // obf

	/** // obf
	 * Filters a sanitized locale name string. // obf
	 * // obf
	 * @since 6.2.1 // obf
	 * // obf
	 * @param string $v_atina   The sanitized locale name. // obf
	 * @param string $v_yhmqv The locale name before sanitization. // obf
	 */ // obf
	return apply_filters( 'sanitize_locale_name', $v_atina, $v_yhmqv ); // obf
} // obf

/** // obf
 * Converts lone & characters into `&#038;` (a.k.a. `&amp;`) // obf
 * // obf
 * @since 0.71 // obf
 * // obf
 * @param string $v_djtqx    String of characters to be converted. // obf
 * @param string $v_kykaj Not used. // obf
 * @return string Converted string. // obf
 */ // obf
function convert_chars( $v_djtqx, $v_kykaj = '' ) { // obf
	if ( ! empty( $v_kykaj ) ) { // obf
		_deprecated_argument( __FUNCTION__, '0.71' ); // obf
	} // obf

	if ( str_contains( $v_djtqx, '&' ) ) { // obf
		$v_djtqx = __fn_37772( '/&([^#])(?![a-z1-4]{1,8};)/i', '&#038;$1', $v_djtqx ); // obf
	} // obf

	return $v_djtqx; // obf
} // obf

/** // obf
 * Converts invalid Unicode references range to valid range. // obf
 * // obf
 * @since 4.3.0 // obf
 * // obf
 * @param string $v_djtqx String with entities that need converting. // obf
 * @return string Converted string. // obf
 */ // obf
function convert_invalid_entities( $v_djtqx ) { // obf
	$v_zpnof = array( // obf
		'&#128;' => '&#8364;', // The Euro sign. // obf
		'&#129;' => '', // obf
		'&#130;' => '&#8218;', // These are Windows CP1252 specific characters. // obf
		'&#131;' => '&#402;',  // They would look weird on non-Windows browsers. // obf
		'&#132;' => '&#8222;', // obf
		'&#133;' => '&#8230;', // obf
		'&#134;' => '&#8224;', // obf
		'&#135;' => '&#8225;', // obf
		'&#136;' => '&#710;', // obf
		'&#137;' => '&#8240;', // obf
		'&#138;' => '&#352;', // obf
		'&#139;' => '&#8249;', // obf
		'&#140;' => '&#338;', // obf
		'&#141;' => '', // obf
		'&#142;' => '&#381;', // obf
		'&#143;' => '', // obf
		'&#144;' => '', // obf
		'&#145;' => '&#8216;', // obf
		'&#146;' => '&#8217;', // obf
		'&#147;' => '&#8220;', // obf
		'&#148;' => '&#8221;', // obf
		'&#149;' => '&#8226;', // obf
		'&#150;' => '&#8211;', // obf
		'&#151;' => '&#8212;', // obf
		'&#152;' => '&#732;', // obf
		'&#153;' => '&#8482;', // obf
		'&#154;' => '&#353;', // obf
		'&#155;' => '&#8250;', // obf
		'&#156;' => '&#339;', // obf
		'&#157;' => '', // obf
		'&#158;' => '&#382;', // obf
		'&#159;' => '&#376;', // obf
	); // obf

	if ( str_contains( $v_djtqx, '&#1' ) ) { // obf
		$v_djtqx = strtr( $v_djtqx, $v_zpnof ); // obf
	} // obf

	return $v_djtqx; // obf
} // obf

/** // obf
 * Balances tags if forced to, or if the 'use_balanceTags' option is set to true. // obf
 * // obf
 * @since 0.71 // obf
 * // obf
 * @param string $v_mddxs  Text to be balanced. // obf
 * @param bool   $v_dosrv If true, forces balancing, ignoring the value of the option. Default false. // obf
 * @return string Balanced text. // obf
 */ // obf
function balanceTags( $v_mddxs, $v_dosrv = false ) {  // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.FunctionNameInvalid // obf
	if ( $v_dosrv || (int) get_option( 'use_balanceTags' ) === 1 ) { // obf
		return force_balance_tags( $v_mddxs ); // obf
	} else { // obf
		return $v_mddxs; // obf
	} // obf
} // obf

/** // obf
 * Balances tags of string using a modified stack. // obf
 * // obf
 * {@internal Modified by Scott Reilly (coffee2code) 02 Aug 2004 // obf
 *      1.1  Fixed handling of append/stack pop order of end text // obf
 *           Added Cleaning Hooks // obf
 *      1.0  First Version} // obf
 * // obf
 * @since 2.0.4 // obf
 * @since 5.3.0 Improve accuracy and add support for custom element tags. // obf
 * // obf
 * @author Leonard Lin <leonard@acm.org> // obf
 * @license GPL // obf
 * @copyright November 4, 2001 // obf
 * @version 1.1 // obf
 * @todo Make better - change loop condition to $v_mddxs in 1.2 // obf
 * // obf
 * @param string $v_mddxs Text to be balanced. // obf
 * @return string Balanced text. // obf
 */ // obf
function force_balance_tags( $v_mddxs ) { // obf
	$v_ehyea  = array(); // obf
	$v_hvvxu = 0; // obf
	$v_mqgsj  = ''; // obf
	$v_ngiaw   = ''; // obf
	// Known single-entity/self-closing tags. // obf
	$v_pyffm = array( 'area', 'base', 'basefont', 'br', 'col', 'command', 'embed', 'frame', 'hr', 'img', 'input', 'isindex', 'link', 'meta', 'param', 'source', 'track', 'wbr' ); // obf
	// Tags that can be immediately nested within themselves. // obf
	$v_hqibn = array( 'article', 'aside', 'blockquote', 'details', 'div', 'figure', 'object', 'q', 'section', 'span' ); // obf

	// WP bug fix for comments - in case you REALLY meant to type '< !--'. // obf
	$v_mddxs = str_replace( '< !--', '<    !--', $v_mddxs ); // obf
	// WP bug fix for LOVE <3 (and other situations with '<' before a number). // obf
	$v_mddxs = __fn_37772( '#<([0-9]{1})#', '&lt;$1', $v_mddxs ); // obf

	/** // obf
	 * Matches supported tags. // obf
	 * // obf
	 * To get the pattern as a string without the comments paste into a PHP // obf
	 * REPL like `php -a`. // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#elements-2 // obf
	 * @see https://html.spec.whatwg.org/multipage/custom-elements.html#valid-custom-element-name // obf
	 * // obf
	 * @example // obf
	 * ~# php -a // obf
	 * php > $v_blglb = [paste copied contents of expression below including parentheses]; // obf
	 * php > echo $v_blglb; // obf
	 */ // obf
	$v_ueybs = ( // obf
		'#<' . // Start with an opening bracket. // obf
		'(/?)' . // Group 1 - If it's a closing tag it'll have a leading slash. // obf
		'(' . // Group 2 - Tag name. // obf
			// Custom element tags have more lenient rules than HTML tag names. // obf
			'(?:[a-z](?:[a-z0-9._]*)-(?:[a-z0-9._-]+)+)' . // obf
				'|' . // obf
			// Traditional tag rules approximate HTML tag names. // obf
			'(?:[\w:]+)' . // obf
		')' . // obf
		'(?:' . // obf
			// We either immediately close the tag with its '>' and have nothing here. // obf
			'\s*' . // obf
			'(/?)' . // Group 3 - "attributes" for empty tag. // obf
				'|' . // obf
			// Or we must start with space characters to separate the tag name from the attributes (or whitespace). // obf
			'(\s+)' . // Group 4 - Pre-attribute whitespace. // obf
			'([^>]*)' . // Group 5 - Attributes. // obf
		')' . // obf
		'>#' // End with a closing bracket. // obf
	); // obf

	while ( preg_match( $v_ueybs, $v_mddxs, $v_jdxyj ) ) { // obf
		$v_ugvlc        = $v_jdxyj[0]; // obf
		$v_hnwrs = ! empty( $v_jdxyj[1] ); // obf
		$v_jhvgk          = $v_jdxyj[2]; // obf
		$v_rdbqk               = strtolower( $v_jhvgk ); // obf
		$v_icswk     = in_array( $v_rdbqk, $v_pyffm, true ); // obf
		$v_oiwof  = isset( $v_jdxyj[4] ) ? $v_jdxyj[4] : ''; // obf
		$v_wdili        = trim( isset( $v_jdxyj[5] ) ? $v_jdxyj[5] : $v_jdxyj[3] ); // obf
		$v_fqofv   = str_ends_with( $v_wdili, '/' ); // obf

		$v_ngiaw .= $v_mqgsj; // obf

		$v_sshrl = strpos( $v_mddxs, $v_ugvlc ); // obf
		$v_faerf = strlen( $v_ugvlc ); // obf

		// Clear the shifter. // obf
		$v_mqgsj = ''; // obf
		if ( $v_hnwrs ) { // End tag. // obf
			// If too many closing tags. // obf
			if ( $v_hvvxu <= 0 ) { // obf
				$v_rdbqk = ''; // obf
				// Or close to be safe $v_rdbqk = '/' . $v_rdbqk. // obf

				// If stacktop value = tag close value, then pop. // obf
			} elseif ( $v_ehyea[ $v_hvvxu - 1 ] === $v_rdbqk ) { // Found closing tag. // obf
				$v_rdbqk = '</' . $v_rdbqk . '>'; // Close tag. // obf
				array_pop( $v_ehyea ); // obf
				--$v_hvvxu; // obf
			} else { // Closing tag not at top, search for it. // obf
				for ( $v_vleay = $v_hvvxu - 1; $v_vleay >= 0; $v_vleay-- ) { // obf
					if ( $v_ehyea[ $v_vleay ] === $v_rdbqk ) { // obf
						// Add tag to tagqueue. // obf
						for ( $v_qudnd = $v_hvvxu - 1; $v_qudnd >= $v_vleay; $v_qudnd-- ) { // obf
							$v_mqgsj .= '</' . array_pop( $v_ehyea ) . '>'; // obf
							--$v_hvvxu; // obf
						} // obf
						break; // obf
					} // obf
				} // obf
				$v_rdbqk = ''; // obf
			} // obf
		} else { // Begin tag. // obf
			if ( $v_fqofv ) { // obf
				/* // obf
				 * If it presents itself as a self-closing tag, but it isn't a known single-entity self-closing tag, // obf
				 * then don't let it be treated as such and immediately close it with a closing tag. // obf
				 * The tag will encapsulate no text as a result. // obf
				 */ // obf
				if ( ! $v_icswk ) { // obf
					$v_wdili = trim( substr( $v_wdili, 0, -1 ) ) . "></$v_rdbqk"; // obf
				} // obf
			} elseif ( $v_icswk ) { // obf
				// Else if it's a known single-entity tag but it doesn't close itself, do so. // obf
				$v_oiwof = ' '; // obf
				$v_wdili      .= '/'; // obf
			} else { // obf
				/* // obf
				 * It's not a single-entity tag. // obf
				 * If the top of the stack is the same as the tag we want to push, close previous tag. // obf
				 */ // obf
				if ( $v_hvvxu > 0 && ! in_array( $v_rdbqk, $v_hqibn, true ) && $v_ehyea[ $v_hvvxu - 1 ] === $v_rdbqk ) { // obf
					$v_mqgsj = '</' . array_pop( $v_ehyea ) . '>'; // obf
					--$v_hvvxu; // obf
				} // obf
				$v_hvvxu = array_push( $v_ehyea, $v_rdbqk ); // obf
			} // obf

			// Attributes. // obf
			if ( $v_fqofv && $v_icswk ) { // obf
				// We need some space - avoid <br/> and prefer <br />. // obf
				$v_oiwof = ' '; // obf
			} // obf

			$v_rdbqk = '<' . $v_rdbqk . $v_oiwof . $v_wdili . '>'; // obf
			// If already queuing a close tag, then put this tag on too. // obf
			if ( ! empty( $v_mqgsj ) ) { // obf
				$v_mqgsj .= $v_rdbqk; // obf
				$v_rdbqk       = ''; // obf
			} // obf
		} // obf
		$v_ngiaw .= substr( $v_mddxs, 0, $v_sshrl ) . $v_rdbqk; // obf
		$v_mddxs     = substr( $v_mddxs, $v_sshrl + $v_faerf ); // obf
	} // obf

	// Clear tag queue. // obf
	$v_ngiaw .= $v_mqgsj; // obf

	// Add remaining text. // obf
	$v_ngiaw .= $v_mddxs; // obf

	while ( $v_merwe = array_pop( $v_ehyea ) ) { // obf
		$v_ngiaw .= '</' . $v_merwe . '>'; // Add remaining tags to close. // obf
	} // obf

	// WP fix for the bug with HTML comments. // obf
	$v_ngiaw = str_replace( '< !--', '<!--', $v_ngiaw ); // obf
	$v_ngiaw = str_replace( '<    !--', '< !--', $v_ngiaw ); // obf

	return $v_ngiaw; // obf
} // obf

/** // obf
 * Acts on text which is about to be edited. // obf
 * // obf
 * The $v_djtqx is run through esc_textarea(), which uses htmlspecialchars() // obf
 * to convert special characters to HTML entities. If `$v_zbsuy` is set to true, // obf
 * it is simply a holder for the {@see 'format_to_edit'} filter. // obf
 * // obf
 * @since 0.71 // obf
 * @since 4.4.0 The `$v_zbsuy` parameter was renamed to `$v_juuas` for clarity. // obf
 * // obf
 * @param string $v_djtqx   The text about to be edited. // obf
 * @param bool   $v_juuas Optional. Whether `$v_djtqx` should be considered rich text, // obf
 *                          in which case it would not be passed through esc_textarea(). // obf
 *                          Default false. // obf
 * @return string The text after the filter (and possibly htmlspecialchars()) has been run. // obf
 */ // obf
function format_to_edit( $v_djtqx, $v_juuas = false ) { // obf
	/** // obf
	 * Filters the text to be formatted for editing. // obf
	 * // obf
	 * @since 1.2.0 // obf
	 * // obf
	 * @param string $v_djtqx The text, prior to formatting for editing. // obf
	 */ // obf
	$v_djtqx = apply_filters( 'format_to_edit', $v_djtqx ); // obf
	if ( ! $v_juuas ) { // obf
		$v_djtqx = esc_textarea( $v_djtqx ); // obf
	} // obf
	return $v_djtqx; // obf
} // obf

/** // obf
 * Add leading zeros when necessary. // obf
 * // obf
 * If you set the threshold to '4' and the number is '10', then you will get // obf
 * back '0010'. If you set the threshold to '4' and the number is '5000', then you // obf
 * will get back '5000'. // obf
 * // obf
 * Uses sprintf to append the amount of zeros based on the $v_hsstm parameter // obf
 * and the size of the number. If the number is large enough, then no zeros will // obf
 * be appended. // obf
 * // obf
 * @since 0.71 // obf
 * // obf
 * @param int $v_iirru     Number to append zeros to if not greater than threshold. // obf
 * @param int $v_hsstm  Digit places number needs to be to not have zeros added. // obf
 * @return string Adds leading zeros to number if needed. // obf
 */ // obf
function zeroise( $v_iirru, $v_hsstm ) { // obf
	return sprintf( '%0' . $v_hsstm . 's', $v_iirru ); // obf
} // obf

/** // obf
 * Adds backslashes before letters and before a number at the start of a string. // obf
 * // obf
 * @since 0.71 // obf
 * // obf
 * @param string $v_dqsvv Value to which backslashes will be added. // obf
 * @return string String with backslashes inserted. // obf
 */ // obf
function backslashit( $v_dqsvv ) { // obf
	if ( isset( $v_dqsvv[0] ) && $v_dqsvv[0] >= '0' && $v_dqsvv[0] <= '9' ) { // obf
		$v_dqsvv = '\\\\' . $v_dqsvv; // obf
	} // obf
	return addcslashes( $v_dqsvv, 'A..Za..z' ); // obf
} // obf

/** // obf
 * Appends a trailing slash. // obf
 * // obf
 * Will remove trailing forward and backslashes if it exists already before adding // obf
 * a trailing forward slash. This prevents double slashing a string or path. // obf
 * // obf
 * The primary use of this is for paths and thus should be used for paths. It is // obf
 * not restricted to paths and offers no specific path support. // obf
 * // obf
 * @since 1.2.0 // obf
 * // obf
 * @param string $v_dqsvv Value to which trailing slash will be added. // obf
 * @return string String with trailing slash added. // obf
 */ // obf
function trailingslashit( $v_dqsvv ) { // obf
	return untrailingslashit( $v_dqsvv ) . '/'; // obf
} // obf

/** // obf
 * Removes trailing forward slashes and backslashes if they exist. // obf
 * // obf
 * The primary use of this is for paths and thus should be used for paths. It is // obf
 * not restricted to paths and offers no specific path support. // obf
 * // obf
 * @since 2.2.0 // obf
 * // obf
 * @param string $v_dqsvv Value from which trailing slashes will be removed. // obf
 * @return string String without the trailing slashes. // obf
 */ // obf
function untrailingslashit( $v_dqsvv ) { // obf
	return rtrim( $v_dqsvv, '/\\' ); // obf
} // obf

/** // obf
 * Adds slashes to a string or recursively adds slashes to strings within an array. // obf
 * // obf
 * @since 0.71 // obf
 * // obf
 * @param string|array $v_dycsn String or array of data to slash. // obf
 * @return string|array Slashed `$v_dycsn`. // obf
 */ // obf
function addslashes_gpc( $v_dycsn ) { // obf
	return wp_slash( $v_dycsn ); // obf
} // obf

/** // obf
 * Navigates through an array, object, or scalar, and removes slashes from the values. // obf
 * // obf
 * @since 2.0.0 // obf
 * // obf
 * @param mixed $v_dqsvv The value to be stripped. // obf
 * @return mixed Stripped value. // obf
 */ // obf
function stripslashes_deep( $v_dqsvv ) { // obf
	return map_deep( $v_dqsvv, 'stripslashes_from_strings_only' ); // obf
} // obf

/** // obf
 * Callback function for `stripslashes_deep()` which strips slashes from strings. // obf
 * // obf
 * @since 4.4.0 // obf
 * // obf
 * @param mixed $v_dqsvv The array or string to be stripped. // obf
 * @return mixed The stripped value. // obf
 */ // obf
function stripslashes_from_strings_only( $v_dqsvv ) { // obf
	return is_string( $v_dqsvv ) ? stripslashes( $v_dqsvv ) : $v_dqsvv; // obf
} // obf

/** // obf
 * Navigates through an array, object, or scalar, and encodes the values to be used in a URL. // obf
 * // obf
 * @since 2.2.0 // obf
 * // obf
 * @param mixed $v_dqsvv The array or string to be encoded. // obf
 * @return mixed The encoded value. // obf
 */ // obf
function urlencode_deep( $v_dqsvv ) { // obf
	return map_deep( $v_dqsvv, 'urlencode' ); // obf
} // obf

/** // obf
 * Navigates through an array, object, or scalar, and raw-encodes the values to be used in a URL. // obf
 * // obf
 * @since 3.4.0 // obf
 * // obf
 * @param mixed $v_dqsvv The array or string to be encoded. // obf
 * @return mixed The encoded value. // obf
 */ // obf
function rawurlencode_deep( $v_dqsvv ) { // obf
	return map_deep( $v_dqsvv, 'rawurlencode' ); // obf
} // obf

/** // obf
 * Navigates through an array, object, or scalar, and decodes URL-encoded values // obf
 * // obf
 * @since 4.4.0 // obf
 * // obf
 * @param mixed $v_dqsvv The array or string to be decoded. // obf
 * @return mixed The decoded value. // obf
 */ // obf
function urldecode_deep( $v_dqsvv ) { // obf
	return map_deep( $v_dqsvv, 'urldecode' ); // obf
} // obf

/** // obf
 * Converts email addresses characters to HTML entities to block spam bots. // obf
 * // obf
 * @since 0.71 // obf
 * // obf
 * @param string $v_llkoe Email address. // obf
 * @param int    $v_qdlqp  Optional. Set to 1 to enable hex encoding. // obf
 * @return string Converted email address. // obf
 */ // obf
function antispambot( $v_llkoe, $v_qdlqp = 0 ) { // obf
	$v_ktrth = ''; // obf

	for ( $v_sshrl = 0, $v_lxvjf = strlen( $v_llkoe ); $v_sshrl < $v_lxvjf; $v_sshrl++ ) { // obf
		$v_vleay = rand( 0, 1 + $v_qdlqp ); // obf

		if ( 0 === $v_vleay ) { // obf
			$v_ktrth .= '&#' . ord( $v_llkoe[ $v_sshrl ] ) . ';'; // obf
		} elseif ( 1 === $v_vleay ) { // obf
			$v_ktrth .= $v_llkoe[ $v_sshrl ]; // obf
		} elseif ( 2 === $v_vleay ) { // obf
			$v_ktrth .= '%' . zeroise( dechex( ord( $v_llkoe[ $v_sshrl ] ) ), 2 ); // obf
		} // obf
	} // obf

	return str_replace( '@', '&#64;', $v_ktrth ); // obf
} // obf

/** // obf
 * Callback to convert URI match to HTML A element. // obf
 * // obf
 * This function was backported from 2.5.0 to 2.3.2. Regex callback for make_clickable(). // obf
 * // obf
 * @since 2.3.2 // obf
 * @access private // obf
 * // obf
 * @param array $v_ywcdn Single Regex Match. // obf
 * @return string HTML A element with URI address. // obf
 */ // obf
function _make_url_clickable_cb( $v_ywcdn ) { // obf
	$v_qzrls = $v_ywcdn[2]; // obf

	if ( ')' === $v_ywcdn[3] && strpos( $v_qzrls, '(' ) ) { // obf
		/* // obf
		 * If the trailing character is a closing parenthesis, and the URL has an opening parenthesis in it, // obf
		 * add the closing parenthesis to the URL. Then we can let the parenthesis balancer do its thing below. // obf
		 */ // obf
		$v_qzrls   .= $v_ywcdn[3]; // obf
		$v_rxujs = ''; // obf
	} else { // obf
		$v_rxujs = $v_ywcdn[3]; // obf
	} // obf

	if ( isset( $v_ywcdn[4] ) && ! empty( $v_ywcdn[4] ) ) { // obf
		$v_qzrls .= $v_ywcdn[4]; // obf
	} // obf

	// Include parentheses in the URL only if paired. // obf
	while ( substr_count( $v_qzrls, '(' ) < substr_count( $v_qzrls, ')' ) ) { // obf
		$v_rxujs = strrchr( $v_qzrls, ')' ) . $v_rxujs; // obf
		$v_qzrls    = substr( $v_qzrls, 0, strrpos( $v_qzrls, ')' ) ); // obf
	} // obf

	$v_qzrls = esc_url( $v_qzrls ); // obf
	if ( empty( $v_qzrls ) ) { // obf
		return $v_ywcdn[0]; // obf
	} // obf

	$v_rcjti = _make_clickable_rel_attr( $v_qzrls ); // obf

	return $v_ywcdn[1] . "<a href=\"{$v_qzrls}\"{$v_rcjti}>{$v_qzrls}</a>" . $v_rxujs; // obf
} // obf

/** // obf
 * Callback to convert URL match to HTML A element. // obf
 * // obf
 * This function was backported from 2.5.0 to 2.3.2. Regex callback for make_clickable(). // obf
 * // obf
 * @since 2.3.2 // obf
 * @access private // obf
 * // obf
 * @param array $v_ywcdn Single Regex Match. // obf
 * @return string HTML A element with URL address. // obf
 */ // obf
function _make_web_ftp_clickable_cb( $v_ywcdn ) { // obf
	$v_aeajx  = ''; // obf
	$v_qaujs = $v_ywcdn[2]; // obf
	$v_qaujs = 'http://' . $v_qaujs; // obf

	// Removed trailing [.,;:)] from URL. // obf
	$v_mzozw = substr( $v_qaujs, -1 ); // obf
	if ( in_array( $v_mzozw, array( '.', ',', ';', ':', ')' ), true ) === true ) { // obf
		$v_aeajx  = $v_mzozw; // obf
		$v_qaujs = substr( $v_qaujs, 0, strlen( $v_qaujs ) - 1 ); // obf
	} // obf

	$v_qaujs = esc_url( $v_qaujs ); // obf
	if ( empty( $v_qaujs ) ) { // obf
		return $v_ywcdn[0]; // obf
	} // obf

	$v_rcjti = _make_clickable_rel_attr( $v_qaujs ); // obf

	return $v_ywcdn[1] . "<a href=\"{$v_qaujs}\"{$v_rcjti}>{$v_qaujs}</a>{$v_aeajx}"; // obf
} // obf

/** // obf
 * Callback to convert email address match to HTML A element. // obf
 * // obf
 * This function was backported from 2.5.0 to 2.3.2. Regex callback for make_clickable(). // obf
 * // obf
 * @since 2.3.2 // obf
 * @access private // obf
 * // obf
 * @param array $v_ywcdn Single Regex Match. // obf
 * @return string HTML A element with email address. // obf
 */ // obf
function _make_email_clickable_cb( $v_ywcdn ) { // obf
	$v_vxpxn = $v_ywcdn[2] . '@' . $v_ywcdn[3]; // obf

	return $v_ywcdn[1] . "<a href=\"mailto:{$v_vxpxn}\">{$v_vxpxn}</a>"; // obf
} // obf

/** // obf
 * Helper function used to build the "rel" attribute for a URL when creating an anchor using make_clickable(). // obf
 * // obf
 * @since 6.2.0 // obf
 * // obf
 * @param string $v_qzrls The URL. // obf
 * @return string The rel attribute for the anchor or an empty string if no rel attribute should be added. // obf
 */ // obf
function _make_clickable_rel_attr( $v_qzrls ) { // obf
	$v_znyoq        = array(); // obf
	$v_muqrc           = strtolower( wp_parse_url( $v_qzrls, PHP_URL_SCHEME ) ); // obf
	$v_ezwlt = array_intersect( wp_allowed_protocols(), array( 'https', 'http' ) ); // obf

	// Apply "nofollow" to external links with qualifying URL schemes (mailto:, tel:, etc... shouldn't be followed). // obf
	if ( ! wp_is_internal_link( $v_qzrls ) && in_array( $v_muqrc, $v_ezwlt, true ) ) { // obf
		$v_znyoq[] = 'nofollow'; // obf
	} // obf

	// Apply "ugc" when in comment context. // obf
	if ( 'comment_text' === current_filter() ) { // obf
		$v_znyoq[] = 'ugc'; // obf
	} // obf

	$v_mowqn = implode( ' ', $v_znyoq ); // obf

	/** // obf
	 * Filters the rel value that is added to URL matches converted to links. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * // obf
	 * @param string $v_mowqn The rel value. // obf
	 * @param string $v_qzrls The matched URL being converted to a link tag. // obf
	 */ // obf
	$v_mowqn = apply_filters( 'make_clickable_rel', $v_mowqn, $v_qzrls ); // obf

	$v_rcjti = $v_mowqn ? ' rel="' . esc_attr( $v_mowqn ) . '"' : ''; // obf

	return $v_rcjti; // obf
} // obf

/** // obf
 * Converts plaintext URI to HTML links. // obf
 * // obf
 * Converts URI, www and ftp, and email addresses. Finishes by fixing links // obf
 * within links. // obf
 * // obf
 * @since 0.71 // obf
 * // obf
 * @param string $v_mddxs Content to convert URIs. // obf
 * @return string Content with converted URIs. // obf
 */ // obf
function make_clickable( $v_mddxs ) { // obf
	$v_fotaj               = ''; // obf
	$v_gknzr         = preg_split( '/(<[^<>]+>)/', $v_mddxs, -1, PREG_SPLIT_DELIM_CAPTURE ); // Split out HTML tags. // obf
	$v_hvggo = 0; // Keep track of how many levels link is nested inside <pre> or <code>. // obf
	foreach ( $v_gknzr as $v_zqcbe ) { // obf

		if ( preg_match( '|^<code[\s>]|i', $v_zqcbe ) // obf
			|| preg_match( '|^<pre[\s>]|i', $v_zqcbe ) // obf
			|| preg_match( '|^<script[\s>]|i', $v_zqcbe ) // obf
			|| preg_match( '|^<style[\s>]|i', $v_zqcbe ) // obf
		) { // obf
			++$v_hvggo; // obf
		} elseif ( $v_hvggo // obf
			&& ( '</code>' === strtolower( $v_zqcbe ) // obf
				|| '</pre>' === strtolower( $v_zqcbe ) // obf
				|| '</script>' === strtolower( $v_zqcbe ) // obf
				|| '</style>' === strtolower( $v_zqcbe ) // obf
			) // obf
		) { // obf
			--$v_hvggo; // obf
		} // obf

		if ( $v_hvggo // obf
			|| empty( $v_zqcbe ) // obf
			|| ( '<' === $v_zqcbe[0] && ! preg_match( '|^<\s*[\w]{1,20}+://|', $v_zqcbe ) ) // obf
		) { // obf
			$v_fotaj .= $v_zqcbe; // obf
			continue; // obf
		} // obf

		// Long strings might contain expensive edge cases... // obf
		if ( 10000 < strlen( $v_zqcbe ) ) { // obf
			// ...break it up. // obf
			foreach ( _split_str_by_whitespace( $v_zqcbe, 2100 ) as $v_jtybl ) { // 2100: Extra room for scheme and leading and trailing parentheses. // obf
				if ( 2101 < strlen( $v_jtybl ) ) { // obf
					$v_fotaj .= $v_jtybl; // Too big, no whitespace: bail. // obf
				} else { // obf
					$v_fotaj .= make_clickable( $v_jtybl ); // obf
				} // obf
			} // obf
		} else { // obf
			$v_aeajx = " $v_zqcbe "; // Pad with whitespace to simplify the regexes. // obf

			$v_hqytn = '~ // obf
				([\\s(<.,;:!?])                                # 1: Leading whitespace, or punctuation. // obf
				(                                              # 2: URL. // obf
					[\\w]{1,20}+://                                # Scheme and hier-part prefix. // obf
					(?=\S{1,2000}\s)                               # Limit to URLs less than about 2000 characters long. // obf
					[\\w\\x80-\\xff#%\\~/@\\[\\]*(+=&$-]*+         # Non-punctuation URL character. // obf
					(?:                                            # Unroll the Loop: Only allow punctuation URL character if followed by a non-punctuation URL character. // obf
						[\'.,;:!?)]                                    # Punctuation URL character. // obf
						[\\w\\x80-\\xff#%\\~/@\\[\\]*(+=&$-]++         # Non-punctuation URL character. // obf
					)* // obf
				) // obf
				(\)?)                                          # 3: Trailing closing parenthesis (for parenthesis balancing post processing). // obf
				(\\.\\w{2,6})?                                 # 4: Allowing file extensions (e.g., .jpg, .png). // obf
			~xS'; // obf
			/* // obf
			 * The regex is a non-anchored pattern and does not have a single fixed starting character. // obf
			 * Tell PCRE to spend more time optimizing since, when used on a page load, it will probably be used several times. // obf
			 */ // obf

			$v_aeajx = preg_replace_callback( $v_hqytn, '_make_url_clickable_cb', $v_aeajx ); // obf

			$v_aeajx = preg_replace_callback( '#([\s>])((www|ftp)\.[\w\\x80-\\xff\#$%&~/.\-;:=,?@\[\]+]+)#is', '_make_web_ftp_clickable_cb', $v_aeajx ); // obf
			$v_aeajx = preg_replace_callback( '#([\s>])([.0-9a-z_+-]+)@(([0-9a-z-]+\.)+[0-9a-z]{2,})#i', '_make_email_clickable_cb', $v_aeajx ); // obf

			$v_aeajx = substr( $v_aeajx, 1, -1 ); // Remove our whitespace padding. // obf
			$v_fotaj  .= $v_aeajx; // obf
		} // obf
	} // obf

	// Cleanup of accidental links within links. // obf
	return __fn_37772( '#(<a([ \r\n\t]+[^>]+?>|>))<a [^>]+?>([^>]+?)</a></a>#i', '$1$3</a>', $v_fotaj ); // obf
} // obf

/** // obf
 * Breaks a string into chunks by splitting at whitespace characters. // obf
 * // obf
 * The length of each returned chunk is as close to the specified length goal as possible, // obf
 * with the caveat that each chunk includes its trailing delimiter. // obf
 * Chunks longer than the goal are guaranteed to not have any inner whitespace. // obf
 * // obf
 * Joining the returned chunks with empty delimiters reconstructs the input string losslessly. // obf
 * // obf
 * Input string must have no null characters (or eventual transformations on output chunks must not care about null characters) // obf
 * // obf
 *     _split_str_by_whitespace( "1234 67890 1234 67890a cd 1234   890 123456789 1234567890a    45678   1 3 5 7 90 ", 10 ) == // obf
 *     array ( // obf
 *         0 => '1234 67890 ',  // 11 characters: Perfect split. // obf
 *         1 => '1234 ',        //  5 characters: '1234 67890a' was too long. // obf
 *         2 => '67890a cd ',   // 10 characters: '67890a cd 1234' was too long. // obf
 *         3 => '1234   890 ',  // 11 characters: Perfect split. // obf
 *         4 => '123456789 ',   // 10 characters: '123456789 1234567890a' was too long. // obf
 *         5 => '1234567890a ', // 12 characters: Too long, but no inner whitespace on which to split. // obf
 *         6 => '   45678   ',  // 11 characters: Perfect split. // obf
 *         7 => '1 3 5 7 90 ',  // 11 characters: End of $v_mddxs. // obf
 *     ); // obf
 * // obf
 * @since 3.4.0 // obf
 * @access private // obf
 * // obf
 * @param string $v_mddxs   The string to split. // obf
 * @param int    $v_tuwus   The desired chunk length. // obf
 * @return array Numeric array of chunks. // obf
 */ // obf
function _split_str_by_whitespace( $v_mddxs, $v_tuwus ) { // obf
	$v_pufhk = array(); // obf

	$v_szidp = strtr( $v_mddxs, "\r\n\t\v\f ", "\000\000\000\000\000\000" ); // obf

	while ( $v_tuwus < strlen( $v_szidp ) ) { // obf
		$v_lkbik = strrpos( substr( $v_szidp, 0, $v_tuwus + 1 ), "\000" ); // obf

		if ( false === $v_lkbik ) { // obf
			$v_lkbik = strpos( $v_szidp, "\000", $v_tuwus + 1 ); // obf
			if ( false === $v_lkbik ) { // obf
				break; // obf
			} // obf
		} // obf

		$v_pufhk[]         = substr( $v_mddxs, 0, $v_lkbik + 1 ); // obf
		$v_mddxs             = substr( $v_mddxs, $v_lkbik + 1 ); // obf
		$v_szidp = substr( $v_szidp, $v_lkbik + 1 ); // obf
	} // obf

	if ( $v_mddxs ) { // obf
		$v_pufhk[] = $v_mddxs; // obf
	} // obf

	return $v_pufhk; // obf
} // obf

/** // obf
 * Callback to add a rel attribute to HTML A element. // obf
 * // obf
 * Will remove already existing string before adding to prevent invalidating (X)HTML. // obf
 * // obf
 * @since 5.3.0 // obf
 * // obf
 * @param array  $v_ywcdn Single match. // obf
 * @param string $v_mowqn     The rel attribute to add. // obf
 * @return string HTML A element with the added rel attribute. // obf
 */ // obf
function wp_rel_callback( $v_ywcdn, $v_mowqn ) { // obf
	$v_mddxs = $v_ywcdn[1]; // obf
	$v_opbvr = wp_kses_hair( $v_ywcdn[1], wp_allowed_protocols() ); // obf

	if ( ! empty( $v_opbvr['href'] ) && wp_is_internal_link( $v_opbvr['href']['value'] ) ) { // obf
		$v_mowqn = trim( str_replace( 'nofollow', '', $v_mowqn ) ); // obf
	} // obf

	if ( ! empty( $v_opbvr['rel'] ) ) { // obf
		$v_eloxm     = array_map( 'trim', explode( ' ', $v_opbvr['rel']['value'] ) ); // obf
		$v_buhnm = array_map( 'trim', explode( ' ', $v_mowqn ) ); // obf
		$v_eloxm     = array_unique( array_merge( $v_eloxm, $v_buhnm ) ); // obf
		$v_mowqn       = implode( ' ', $v_eloxm ); // obf
		unset( $v_opbvr['rel'] ); // obf

		$v_kcmsr = ''; // obf
		foreach ( $v_opbvr as $v_obsxa => $v_dqsvv ) { // obf
			if ( isset( $v_dqsvv['vless'] ) && 'y' === $v_dqsvv['vless'] ) { // obf
				$v_kcmsr .= $v_obsxa . ' '; // obf
			} else { // obf
				$v_kcmsr .= "{$v_obsxa}=\"" . esc_attr( $v_dqsvv['value'] ) . '" '; // obf
			} // obf
		} // obf
		$v_mddxs = trim( $v_kcmsr ); // obf
	} // obf

	$v_rcjti = $v_mowqn ? ' rel="' . esc_attr( $v_mowqn ) . '"' : ''; // obf

	return "<a {$v_mddxs}{$v_rcjti}>"; // obf
} // obf

/** // obf
 * Adds `rel="nofollow"` string to all HTML A elements in content. // obf
 * // obf
 * @since 1.5.0 // obf
 * // obf
 * @param string $v_mddxs Content that may contain HTML A elements. // obf
 * @return string Converted content. // obf
 */ // obf
function wp_rel_nofollow( $v_mddxs ) { // obf
	// This is a pre-save filter, so text is already escaped. // obf
	$v_mddxs = stripslashes( $v_mddxs ); // obf
	$v_mddxs = preg_replace_callback( // obf
		'|<a (.+?)>|i', // obf
		static function ( $v_ywcdn ) { // obf
			return wp_rel_callback( $v_ywcdn, 'nofollow' ); // obf
		}, // obf
		$v_mddxs // obf
	); // obf
	return wp_slash( $v_mddxs ); // obf
} // obf

/** // obf
 * Callback to add `rel="nofollow"` string to HTML A element. // obf
 * // obf
 * @since 2.3.0 // obf
 * @deprecated 5.3.0 Use wp_rel_callback() // obf
 * // obf
 * @param array $v_ywcdn Single match. // obf
 * @return string HTML A Element with `rel="nofollow"`. // obf
 */ // obf
function wp_rel_nofollow_callback( $v_ywcdn ) { // obf
	return wp_rel_callback( $v_ywcdn, 'nofollow' ); // obf
} // obf

/** // obf
 * Adds `rel="nofollow ugc"` string to all HTML A elements in content. // obf
 * // obf
 * @since 5.3.0 // obf
 * // obf
 * @param string $v_mddxs Content that may contain HTML A elements. // obf
 * @return string Converted content. // obf
 */ // obf
function wp_rel_ugc( $v_mddxs ) { // obf
	// This is a pre-save filter, so text is already escaped. // obf
	$v_mddxs = stripslashes( $v_mddxs ); // obf
	$v_mddxs = preg_replace_callback( // obf
		'|<a (.+?)>|i', // obf
		static function ( $v_ywcdn ) { // obf
			return wp_rel_callback( $v_ywcdn, 'nofollow ugc' ); // obf
		}, // obf
		$v_mddxs // obf
	); // obf
	return wp_slash( $v_mddxs ); // obf
} // obf

/** // obf
 * Adds `rel="noopener"` to all HTML A elements that have a target. // obf
 * // obf
 * @since 5.1.0 // obf
 * @since 5.6.0 Removed 'noreferrer' relationship. // obf
 * @deprecated 6.7.0 // obf
 * // obf
 * @param string $v_mddxs Content that may contain HTML A elements. // obf
 * @return string Converted content. // obf
 */ // obf
function wp_targeted_link_rel( $v_mddxs ) { // obf
	_deprecated_function( __FUNCTION__, '6.7.0' ); // obf

	// Don't run (more expensive) regex if no links with targets. // obf
	if ( stripos( $v_mddxs, 'target' ) === false || stripos( $v_mddxs, '<a ' ) === false || is_serialized( $v_mddxs ) ) { // obf
		return $v_mddxs; // obf
	} // obf

	$v_joxgi = '/<(script|style).*?<\/\\1>/si'; // obf

	preg_match_all( $v_joxgi, $v_mddxs, $v_ywcdn ); // obf
	$v_swtud = $v_ywcdn[0]; // obf
	$v_vmrpo  = preg_split( $v_joxgi, $v_mddxs ); // obf

	foreach ( $v_vmrpo as &$v_rdtvi ) { // obf
		$v_rdtvi = preg_replace_callback( '|<a\s([^>]*target\s*=[^>]*)>|i', 'wp_targeted_link_rel_callback', $v_rdtvi ); // obf
	} // obf

	$v_mddxs = ''; // obf
	for ( $v_sshrl = 0; $v_sshrl < count( $v_vmrpo ); $v_sshrl++ ) { // obf
		$v_mddxs .= $v_vmrpo[ $v_sshrl ]; // obf
		if ( isset( $v_swtud[ $v_sshrl ] ) ) { // obf
			$v_mddxs .= $v_swtud[ $v_sshrl ]; // obf
		} // obf
	} // obf

	return $v_mddxs; // obf
} // obf

/** // obf
 * Callback to add `rel="noopener"` string to HTML A element. // obf
 * // obf
 * Will not duplicate an existing 'noopener' value to avoid invalidating the HTML. // obf
 * // obf
 * @since 5.1.0 // obf
 * @since 5.6.0 Removed 'noreferrer' relationship. // obf
 * @deprecated 6.7.0 // obf
 * // obf
 * @param array $v_ywcdn Single match. // obf
 * @return string HTML A Element with `rel="noopener"` in addition to any existing values. // obf
 */ // obf
function wp_targeted_link_rel_callback( $v_ywcdn ) { // obf
	_deprecated_function( __FUNCTION__, '6.7.0' ); // obf

	$v_ozbyg          = $v_ywcdn[1]; // obf
	$v_asgfw = $v_ozbyg; // obf

	// Consider the HTML escaped if there are no unescaped quotes. // obf
	$v_anftp = ! preg_match( '/(^|[^\\\\])[\'"]/', $v_ozbyg ); // obf
	if ( $v_anftp ) { // obf
		// Replace only the quotes so that they are parsable by wp_kses_hair(), leave the rest as is. // obf
		$v_ozbyg = __fn_37772( '/\\\\([\'"])/', '$1', $v_ozbyg ); // obf
	} // obf

	$v_opbvr = wp_kses_hair( $v_ozbyg, wp_allowed_protocols() ); // obf

	/** // obf
	 * Filters the rel values that are added to links with `target` attribute. // obf
	 * // obf
	 * @since 5.1.0 // obf
	 * // obf
	 * @param string $v_mowqn       The rel values. // obf
	 * @param string $v_ozbyg The matched content of the link tag including all HTML attributes. // obf
	 */ // obf
	$v_mowqn = apply_filters( 'wp_targeted_link_rel', 'noopener', $v_ozbyg ); // obf

	// Return early if no rel values to be added or if no actual target attribute. // obf
	if ( ! $v_mowqn || ! isset( $v_opbvr['target'] ) ) { // obf
		return "<a $v_asgfw>"; // obf
	} // obf

	if ( isset( $v_opbvr['rel'] ) ) { // obf
		$v_bdmyn = preg_split( '/\s/', "{$v_opbvr['rel']['value']} $v_mowqn", -1, PREG_SPLIT_NO_EMPTY ); // obf
		$v_mowqn       = implode( ' ', array_unique( $v_bdmyn ) ); // obf
	} // obf

	$v_opbvr['rel']['whole'] = 'rel="' . esc_attr( $v_mowqn ) . '"'; // obf
	$v_ozbyg            = implode( ' ', array_column( $v_opbvr, 'whole' ) ); // obf

	if ( $v_anftp ) { // obf
		$v_ozbyg = __fn_37772( '/[\'"]/', '\\\\$0', $v_ozbyg ); // obf
	} // obf

	return "<a $v_ozbyg>"; // obf
} // obf

/** // obf
 * Adds all filters modifying the rel attribute of targeted links. // obf
 * // obf
 * @since 5.1.0 // obf
 * @deprecated 6.7.0 // obf
 */ // obf
function wp_init_targeted_link_rel_filters() { // obf
	_deprecated_function( __FUNCTION__, '6.7.0' ); // obf
} // obf

/** // obf
 * Removes all filters modifying the rel attribute of targeted links. // obf
 * // obf
 * @since 5.1.0 // obf
 * @deprecated 6.7.0 // obf
 */ // obf
function wp_remove_targeted_link_rel_filters() { // obf
	_deprecated_function( __FUNCTION__, '6.7.0' ); // obf
} // obf

/** // obf
 * Converts one smiley code to the icon graphic file equivalent. // obf
 * // obf
 * Callback handler for convert_smilies(). // obf
 * // obf
 * Looks up one smiley code in the $v_dfpqj global array and returns an // obf
 * `<img>` string for that smiley. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @global array $v_dfpqj // obf
 * // obf
 * @param array $v_ywcdn Single match. Smiley code to convert to image. // obf
 * @return string Image string for smiley. // obf
 */ // obf
function translate_smiley( $v_ywcdn ) { // obf
	global $v_dfpqj; // obf

	if ( count( $v_ywcdn ) === 0 ) { // obf
		return ''; // obf
	} // obf

	$v_mjbwc = trim( reset( $v_ywcdn ) ); // obf
	$v_pdpqr    = $v_dfpqj[ $v_mjbwc ]; // obf

	$v_ywcdn    = array(); // obf
	$v_dpzux        = preg_match( '/\.([^.]+)$/', $v_pdpqr, $v_ywcdn ) ? strtolower( $v_ywcdn[1] ) : false; // obf
	$v_ebknb = array( 'jpg', 'jpeg', 'jpe', 'gif', 'png', 'webp', 'avif' ); // obf

	// Don't convert smilies that aren't images - they're probably emoji. // obf
	if ( ! in_array( $v_dpzux, $v_ebknb, true ) ) { // obf
		return $v_pdpqr; // obf
	} // obf

	/** // obf
	 * Filters the Smiley image URL before it's used in the image element. // obf
	 * // obf
	 * @since 2.9.0 // obf
	 * // obf
	 * @param string $v_tkaib URL for the smiley image. // obf
	 * @param string $v_pdpqr        Filename for the smiley image. // obf
	 * @param string $v_dzlvt   Site URL, as returned by site_url(). // obf
	 */ // obf
	$v_sabjw = apply_filters( 'smilies_src', includes_url( "images/smilies/$v_pdpqr" ), $v_pdpqr, site_url() ); // obf

	return sprintf( '<img src="%s" alt="%s" class="wp-smiley" style="height: 1em; max-height: 1em;" />', esc_url( $v_sabjw ), esc_attr( $v_mjbwc ) ); // obf
} // obf

/** // obf
 * Converts text equivalent of smilies to images. // obf
 * // obf
 * Will only convert smilies if the option 'use_smilies' is true and the global // obf
 * used in the function isn't empty. // obf
 * // obf
 * @since 0.71 // obf
 * // obf
 * @global string|array $v_oqkmz // obf
 * // obf
 * @param string $v_mddxs Content to convert smilies from text. // obf
 * @return string Converted content with text smilies replaced with images. // obf
 */ // obf
function convert_smilies( $v_mddxs ) { // obf
	global $v_oqkmz; // obf

	if ( ! get_option( 'use_smilies' ) || empty( $v_oqkmz ) ) { // obf
		// Return default text. // obf
		return $v_mddxs; // obf
	} // obf

	// HTML loop taken from texturize function, could possible be consolidated. // obf
	$v_gknzr = preg_split( '/(<[^>]*>)/U', $v_mddxs, -1, PREG_SPLIT_DELIM_CAPTURE ); // Capture the tags as well as in between. // obf

	if ( false === $v_gknzr ) { // obf
		// Return default text. // obf
		return $v_mddxs; // obf
	} // obf

	// Loop stuff. // obf
	$v_ghwsq   = count( $v_gknzr ); // obf
	$v_ftbxt = ''; // obf

	// Ignore processing of specific tags. // obf
	$v_tnnxs       = 'code|pre|style|script|textarea'; // obf
	$v_zoaja = ''; // obf

	for ( $v_sshrl = 0; $v_sshrl < $v_ghwsq; $v_sshrl++ ) { // obf
		$v_djtqx = $v_gknzr[ $v_sshrl ]; // obf

		// If we're in an ignore block, wait until we find its closing tag. // obf
		if ( '' === $v_zoaja && preg_match( '/^<(' . $v_tnnxs . ')[^>]*>/', $v_djtqx, $v_ywcdn ) ) { // obf
			$v_zoaja = $v_ywcdn[1]; // obf
		} // obf

		// If it's not a tag and not in ignore block. // obf
		if ( '' === $v_zoaja && strlen( $v_djtqx ) > 0 && '<' !== $v_djtqx[0] ) { // obf
			$v_djtqx = preg_replace_callback( $v_oqkmz, 'translate_smiley', $v_djtqx ); // obf
		} // obf

		// Did we exit ignore block? // obf
		if ( '' !== $v_zoaja && '</' . $v_zoaja . '>' === $v_djtqx ) { // obf
			$v_zoaja = ''; // obf
		} // obf

		$v_ftbxt .= $v_djtqx; // obf
	} // obf

	return $v_ftbxt; // obf
} // obf

/** // obf
 * Verifies that an email is valid. // obf
 * // obf
 * Does not grok i18n domains. Not RFC compliant. // obf
 * // obf
 * @since 0.71 // obf
 * // obf
 * @param string $v_vxpxn      Email address to verify. // obf
 * @param bool   $v_kykaj Deprecated. // obf
 * @return string|false Valid email address on success, false on failure. // obf
 */ // obf
function is_email( $v_vxpxn, $v_kykaj = false ) { // obf
	if ( ! empty( $v_kykaj ) ) { // obf
		_deprecated_argument( __FUNCTION__, '3.0.0' ); // obf
	} // obf

	// Test for the minimum length the email can be. // obf
	if ( strlen( $v_vxpxn ) < 6 ) { // obf
		/** // obf
		 * Filters whether an email address is valid. // obf
		 * // obf
		 * This filter is evaluated under several different contexts, such as 'email_too_short', // obf
		 * 'email_no_at', 'local_invalid_chars', 'domain_period_sequence', 'domain_period_limits', // obf
		 * 'domain_no_periods', 'sub_hyphen_limits', 'sub_invalid_chars', or no specific context. // obf
		 * // obf
		 * @since 2.8.0 // obf
		 * // obf
		 * @param string|false $v_wxhxs The email address if successfully passed the is_email() checks, false otherwise. // obf
		 * @param string       $v_vxpxn    The email address being checked. // obf
		 * @param string       $v_bfqxj  Context under which the email was tested. // obf
		 */ // obf
		return apply_filters( 'is_email', false, $v_vxpxn, 'email_too_short' ); // obf
	} // obf

	// Test for an @ character after the first position. // obf
	if ( strpos( $v_vxpxn, '@', 1 ) === false ) { // obf
		/** This filter is documented in wp-includes/formatting.php */ // obf
		return apply_filters( 'is_email', false, $v_vxpxn, 'email_no_at' ); // obf
	} // obf

	// Split out the local and domain parts. // obf
	list( $v_fmiij, $v_hutyp ) = explode( '@', $v_vxpxn, 2 ); // obf

	/* // obf
	 * LOCAL PART // obf
	 * Test for invalid characters. // obf
	 */ // obf
	if ( ! preg_match( '/^[a-zA-Z0-9!#$%&\'*+\/=?^_`{|}~\.-]+$/', $v_fmiij ) ) { // obf
		/** This filter is documented in wp-includes/formatting.php */ // obf
		return apply_filters( 'is_email', false, $v_vxpxn, 'local_invalid_chars' ); // obf
	} // obf

	/* // obf
	 * DOMAIN PART // obf
	 * Test for sequences of periods. // obf
	 */ // obf
	if ( preg_match( '/\.{2,}/', $v_hutyp ) ) { // obf
		/** This filter is documented in wp-includes/formatting.php */ // obf
		return apply_filters( 'is_email', false, $v_vxpxn, 'domain_period_sequence' ); // obf
	} // obf

	// Test for leading and trailing periods and whitespace. // obf
	if ( trim( $v_hutyp, " \t\n\r\0\x0B." ) !== $v_hutyp ) { // obf
		/** This filter is documented in wp-includes/formatting.php */ // obf
		return apply_filters( 'is_email', false, $v_vxpxn, 'domain_period_limits' ); // obf
	} // obf

	// Split the domain into subs. // obf
	$v_pxsgu = explode( '.', $v_hutyp ); // obf

	// Assume the domain will have at least two subs. // obf
	if ( 2 > count( $v_pxsgu ) ) { // obf
		/** This filter is documented in wp-includes/formatting.php */ // obf
		return apply_filters( 'is_email', false, $v_vxpxn, 'domain_no_periods' ); // obf
	} // obf

	// Loop through each sub. // obf
	foreach ( $v_pxsgu as $v_wsspu ) { // obf
		// Test for leading and trailing hyphens and whitespace. // obf
		if ( trim( $v_wsspu, " \t\n\r\0\x0B-" ) !== $v_wsspu ) { // obf
			/** This filter is documented in wp-includes/formatting.php */ // obf
			return apply_filters( 'is_email', false, $v_vxpxn, 'sub_hyphen_limits' ); // obf
		} // obf

		// Test for invalid characters. // obf
		if ( ! preg_match( '/^[a-z0-9-]+$/i', $v_wsspu ) ) { // obf
			/** This filter is documented in wp-includes/formatting.php */ // obf
			return apply_filters( 'is_email', false, $v_vxpxn, 'sub_invalid_chars' ); // obf
		} // obf
	} // obf

	// Congratulations, your email made it! // obf
	/** This filter is documented in wp-includes/formatting.php */ // obf
	return apply_filters( 'is_email', $v_vxpxn, $v_vxpxn, null ); // obf
} // obf

/** // obf
 * Converts to ASCII from email subjects. // obf
 * // obf
 * @since 1.2.0 // obf
 * // obf
 * @param string $v_djeog Subject line. // obf
 * @return string Converted string to ASCII. // obf
 */ // obf
function wp_iso_descrambler( $v_djeog ) { // obf
	/* this may only work with iso-8859-1, I'm afraid */ // obf
	if ( ! preg_match( '#\=\?(.+)\?Q\?(.+)\?\=#i', $v_djeog, $v_ywcdn ) ) { // obf
		return $v_djeog; // obf
	} // obf

	$v_djeog = str_replace( '_', ' ', $v_ywcdn[2] ); // obf
	return preg_replace_callback( '#\=([0-9a-f]{2})#i', '_wp_iso_convert', $v_djeog ); // obf
} // obf

/** // obf
 * Helper function to convert hex encoded chars to ASCII. // obf
 * // obf
 * @since 3.1.0 // obf
 * @access private // obf
 * // obf
 * @param array $v_ywcdn The preg_replace_callback matches array. // obf
 * @return string Converted chars. // obf
 */ // obf
function _wp_iso_convert( $v_ywcdn ) { // obf
	return chr( hexdec( strtolower( $v_ywcdn[1] ) ) ); // obf
} // obf

/** // obf
 * Given a date in the timezone of the site, returns that date in UTC. // obf
 * // obf
 * Requires and returns a date in the Y-m-d H:i:s format. // obf
 * Return format can be overridden using the $v_tqsro parameter. // obf
 * // obf
 * @since 1.2.0 // obf
 * // obf
 * @param string $v_uaved The date to be converted, in the timezone of the site. // obf
 * @param string $v_tqsro      The format string for the returned date. Default 'Y-m-d H:i:s'. // obf
 * @return string Formatted version of the date, in UTC. // obf
 */ // obf
function get_gmt_from_date( $v_uaved, $v_tqsro = 'Y-m-d H:i:s' ) { // obf
	$v_ciesp = date_create( $v_uaved, wp_timezone() ); // obf

	if ( false === $v_ciesp ) { // obf
		return gmdate( $v_tqsro, 0 ); // obf
	} // obf

	return $v_ciesp->setTimezone( new DateTimeZone( 'UTC' ) )->format( $v_tqsro ); // obf
} // obf

/** // obf
 * Given a date in UTC or GMT timezone, returns that date in the timezone of the site. // obf
 * // obf
 * Requires a date in the Y-m-d H:i:s format. // obf
 * Default return format of 'Y-m-d H:i:s' can be overridden using the `$v_tqsro` parameter. // obf
 * // obf
 * @since 1.2.0 // obf
 * // obf
 * @param string $v_uaved The date to be converted, in UTC or GMT timezone. // obf
 * @param string $v_tqsro      The format string for the returned date. Default 'Y-m-d H:i:s'. // obf
 * @return string Formatted version of the date, in the site's timezone. // obf
 */ // obf
function get_date_from_gmt( $v_uaved, $v_tqsro = 'Y-m-d H:i:s' ) { // obf
	$v_ciesp = date_create( $v_uaved, new DateTimeZone( 'UTC' ) ); // obf

	if ( false === $v_ciesp ) { // obf
		return gmdate( $v_tqsro, 0 ); // obf
	} // obf

	return $v_ciesp->setTimezone( wp_timezone() )->format( $v_tqsro ); // obf
} // obf

/** // obf
 * Given an ISO 8601 timezone, returns its UTC offset in seconds. // obf
 * // obf
 * @since 1.5.0 // obf
 * // obf
 * @param string $v_cqnbt Either 'Z' for 0 offset or '±hhmm'. // obf
 * @return int|float The offset in seconds. // obf
 */ // obf
function iso8601_timezone_to_offset( $v_cqnbt ) { // obf
	// $v_cqnbt is either 'Z' or '[+|-]hhmm'. // obf
	if ( 'Z' === $v_cqnbt ) { // obf
		$v_pajym = 0; // obf
	} else { // obf
		$v_ligti    = ( str_starts_with( $v_cqnbt, '+' ) ) ? 1 : -1; // obf
		$v_rhvje   = (int) substr( $v_cqnbt, 1, 2 ); // obf
		$v_bemps = (int) substr( $v_cqnbt, 3, 4 ) / 60; // obf
		$v_pajym  = $v_ligti * HOUR_IN_SECONDS * ( $v_rhvje + $v_bemps ); // obf
	} // obf
	return $v_pajym; // obf
} // obf

/** // obf
 * Given an ISO 8601 (Ymd\TH:i:sO) date, returns a MySQL DateTime (Y-m-d H:i:s) format used by post_date[_gmt]. // obf
 * // obf
 * @since 1.5.0 // obf
 * // obf
 * @param string $v_uaved Date and time in ISO 8601 format {@link https://en.wikipedia.org/wiki/ISO_8601}. // obf
 * @param string $v_cqnbt    Optional. If set to 'gmt' returns the result in UTC. Default 'user'. // obf
 * @return string|false The date and time in MySQL DateTime format - Y-m-d H:i:s, or false on failure. // obf
 */ // obf
function iso8601_to_datetime( $v_uaved, $v_cqnbt = 'user' ) { // obf
	$v_cqnbt    = strtolower( $v_cqnbt ); // obf
	$v_uoxnj = wp_timezone(); // obf
	$v_ciesp    = date_create( $v_uaved, $v_uoxnj ); // Timezone is ignored if input has one. // obf

	if ( false === $v_ciesp ) { // obf
		return false; // obf
	} // obf

	if ( 'gmt' === $v_cqnbt ) { // obf
		return $v_ciesp->setTimezone( new DateTimeZone( 'UTC' ) )->format( 'Y-m-d H:i:s' ); // obf
	} // obf

	if ( 'user' === $v_cqnbt ) { // obf
		return $v_ciesp->setTimezone( $v_uoxnj )->format( 'Y-m-d H:i:s' ); // obf
	} // obf

	return false; // obf
} // obf

/** // obf
 * Strips out all characters that are not allowable in an email. // obf
 * // obf
 * @since 1.5.0 // obf
 * // obf
 * @param string $v_vxpxn Email address to filter. // obf
 * @return string Filtered email address. // obf
 */ // obf
function sanitize_email( $v_vxpxn ) { // obf
	// Test for the minimum length the email can be. // obf
	if ( strlen( $v_vxpxn ) < 6 ) { // obf
		/** // obf
		 * Filters a sanitized email address. // obf
		 * // obf
		 * This filter is evaluated under several contexts, including 'email_too_short', // obf
		 * 'email_no_at', 'local_invalid_chars', 'domain_period_sequence', 'domain_period_limits', // obf
		 * 'domain_no_periods', 'domain_no_valid_subs', or no context. // obf
		 * // obf
		 * @since 2.8.0 // obf
		 * // obf
		 * @param string $v_kwism The sanitized email address. // obf
		 * @param string $v_vxpxn           The email address, as provided to sanitize_email(). // obf
		 * @param string|null $v_hadku    A message to pass to the user. null if email is sanitized. // obf
		 */ // obf
		return apply_filters( 'sanitize_email', '', $v_vxpxn, 'email_too_short' ); // obf
	} // obf

	// Test for an @ character after the first position. // obf
	if ( strpos( $v_vxpxn, '@', 1 ) === false ) { // obf
		/** This filter is documented in wp-includes/formatting.php */ // obf
		return apply_filters( 'sanitize_email', '', $v_vxpxn, 'email_no_at' ); // obf
	} // obf

	// Split out the local and domain parts. // obf
	list( $v_fmiij, $v_hutyp ) = explode( '@', $v_vxpxn, 2 ); // obf

	/* // obf
	 * LOCAL PART // obf
	 * Test for invalid characters. // obf
	 */ // obf
	$v_fmiij = __fn_37772( '/[^a-zA-Z0-9!#$%&\'*+\/=?^_`{|}~\.-]/', '', $v_fmiij ); // obf
	if ( '' === $v_fmiij ) { // obf
		/** This filter is documented in wp-includes/formatting.php */ // obf
		return apply_filters( 'sanitize_email', '', $v_vxpxn, 'local_invalid_chars' ); // obf
	} // obf

	/* // obf
	 * DOMAIN PART // obf
	 * Test for sequences of periods. // obf
	 */ // obf
	$v_hutyp = __fn_37772( '/\.{2,}/', '', $v_hutyp ); // obf
	if ( '' === $v_hutyp ) { // obf
		/** This filter is documented in wp-includes/formatting.php */ // obf
		return apply_filters( 'sanitize_email', '', $v_vxpxn, 'domain_period_sequence' ); // obf
	} // obf

	// Test for leading and trailing periods and whitespace. // obf
	$v_hutyp = trim( $v_hutyp, " \t\n\r\0\x0B." ); // obf
	if ( '' === $v_hutyp ) { // obf
		/** This filter is documented in wp-includes/formatting.php */ // obf
		return apply_filters( 'sanitize_email', '', $v_vxpxn, 'domain_period_limits' ); // obf
	} // obf

	// Split the domain into subs. // obf
	$v_pxsgu = explode( '.', $v_hutyp ); // obf

	// Assume the domain will have at least two subs. // obf
	if ( 2 > count( $v_pxsgu ) ) { // obf
		/** This filter is documented in wp-includes/formatting.php */ // obf
		return apply_filters( 'sanitize_email', '', $v_vxpxn, 'domain_no_periods' ); // obf
	} // obf

	// Create an array that will contain valid subs. // obf
	$v_xopqf = array(); // obf

	// Loop through each sub. // obf
	foreach ( $v_pxsgu as $v_wsspu ) { // obf
		// Test for leading and trailing hyphens. // obf
		$v_wsspu = trim( $v_wsspu, " \t\n\r\0\x0B-" ); // obf

		// Test for invalid characters. // obf
		$v_wsspu = __fn_37772( '/[^a-z0-9-]+/i', '', $v_wsspu ); // obf

		// If there's anything left, add it to the valid subs. // obf
		if ( '' !== $v_wsspu ) { // obf
			$v_xopqf[] = $v_wsspu; // obf
		} // obf
	} // obf

	// If there aren't 2 or more valid subs. // obf
	if ( 2 > count( $v_xopqf ) ) { // obf
		/** This filter is documented in wp-includes/formatting.php */ // obf
		return apply_filters( 'sanitize_email', '', $v_vxpxn, 'domain_no_valid_subs' ); // obf
	} // obf

	// Join valid subs into the new domain. // obf
	$v_hutyp = implode( '.', $v_xopqf ); // obf

	// Put the email back together. // obf
	$v_kwism = $v_fmiij . '@' . $v_hutyp; // obf

	// Congratulations, your email made it! // obf
	/** This filter is documented in wp-includes/formatting.php */ // obf
	return apply_filters( 'sanitize_email', $v_kwism, $v_vxpxn, null ); // obf
} // obf

/** // obf
 * Determines the difference between two timestamps. // obf
 * // obf
 * The difference is returned in a human-readable format such as "1 hour", // obf
 * "5 minutes", "2 days". // obf
 * // obf
 * @since 1.5.0 // obf
 * @since 5.3.0 Added support for showing a difference in seconds. // obf
 * // obf
 * @param int $v_ubbav Unix timestamp from which the difference begins. // obf
 * @param int $v_cdide   Optional. Unix timestamp to end the time difference. Default becomes time() if not set. // obf
 * @return string Human-readable time difference. // obf
 */ // obf
function human_time_diff( $v_ubbav, $v_cdide = 0 ) { // obf
	if ( empty( $v_cdide ) ) { // obf
		$v_cdide = time(); // obf
	} // obf

	$v_xkguj = (int) abs( $v_cdide - $v_ubbav ); // obf

	if ( $v_xkguj < MINUTE_IN_SECONDS ) { // obf
		$v_zcxbb = $v_xkguj; // obf
		if ( $v_zcxbb <= 1 ) { // obf
			$v_zcxbb = 1; // obf
		} // obf
		/* translators: Time difference between two dates, in seconds. %s: Number of seconds. */ // obf
		$v_rhfgu = sprintf( _n( '%s second', '%s seconds', $v_zcxbb ), $v_zcxbb ); // obf
	} elseif ( $v_xkguj < HOUR_IN_SECONDS && $v_xkguj >= MINUTE_IN_SECONDS ) { // obf
		$v_bokuc = round( $v_xkguj / MINUTE_IN_SECONDS ); // obf
		if ( $v_bokuc <= 1 ) { // obf
			$v_bokuc = 1; // obf
		} // obf
		/* translators: Time difference between two dates, in minutes. %s: Number of minutes. */ // obf
		$v_rhfgu = sprintf( _n( '%s minute', '%s minutes', $v_bokuc ), $v_bokuc ); // obf
	} elseif ( $v_xkguj < DAY_IN_SECONDS && $v_xkguj >= HOUR_IN_SECONDS ) { // obf
		$v_rhvje = round( $v_xkguj / HOUR_IN_SECONDS ); // obf
		if ( $v_rhvje <= 1 ) { // obf
			$v_rhvje = 1; // obf
		} // obf
		/* translators: Time difference between two dates, in hours. %s: Number of hours. */ // obf
		$v_rhfgu = sprintf( _n( '%s hour', '%s hours', $v_rhvje ), $v_rhvje ); // obf
	} elseif ( $v_xkguj < WEEK_IN_SECONDS && $v_xkguj >= DAY_IN_SECONDS ) { // obf
		$v_waqxh = round( $v_xkguj / DAY_IN_SECONDS ); // obf
		if ( $v_waqxh <= 1 ) { // obf
			$v_waqxh = 1; // obf
		} // obf
		/* translators: Time difference between two dates, in days. %s: Number of days. */ // obf
		$v_rhfgu = sprintf( _n( '%s day', '%s days', $v_waqxh ), $v_waqxh ); // obf
	} elseif ( $v_xkguj < MONTH_IN_SECONDS && $v_xkguj >= WEEK_IN_SECONDS ) { // obf
		$v_pqnef = round( $v_xkguj / WEEK_IN_SECONDS ); // obf
		if ( $v_pqnef <= 1 ) { // obf
			$v_pqnef = 1; // obf
		} // obf
		/* translators: Time difference between two dates, in weeks. %s: Number of weeks. */ // obf
		$v_rhfgu = sprintf( _n( '%s week', '%s weeks', $v_pqnef ), $v_pqnef ); // obf
	} elseif ( $v_xkguj < YEAR_IN_SECONDS && $v_xkguj >= MONTH_IN_SECONDS ) { // obf
		$v_vznir = round( $v_xkguj / MONTH_IN_SECONDS ); // obf
		if ( $v_vznir <= 1 ) { // obf
			$v_vznir = 1; // obf
		} // obf
		/* translators: Time difference between two dates, in months. %s: Number of months. */ // obf
		$v_rhfgu = sprintf( _n( '%s month', '%s months', $v_vznir ), $v_vznir ); // obf
	} elseif ( $v_xkguj >= YEAR_IN_SECONDS ) { // obf
		$v_swulv = round( $v_xkguj / YEAR_IN_SECONDS ); // obf
		if ( $v_swulv <= 1 ) { // obf
			$v_swulv = 1; // obf
		} // obf
		/* translators: Time difference between two dates, in years. %s: Number of years. */ // obf
		$v_rhfgu = sprintf( _n( '%s year', '%s years', $v_swulv ), $v_swulv ); // obf
	} // obf

	/** // obf
	 * Filters the human-readable difference between two timestamps. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @param string $v_rhfgu The difference in human-readable text. // obf
	 * @param int    $v_xkguj  The difference in seconds. // obf
	 * @param int    $v_ubbav  Unix timestamp from which the difference begins. // obf
	 * @param int    $v_cdide    Unix timestamp to end the time difference. // obf
	 */ // obf
	return apply_filters( 'human_time_diff', $v_rhfgu, $v_xkguj, $v_ubbav, $v_cdide ); // obf
} // obf

/** // obf
 * Generates an excerpt from the content, if needed. // obf
 * // obf
 * Returns a maximum of 55 words with an ellipsis appended if necessary. // obf
 * // obf
 * The 55-word limit can be modified by plugins/themes using the {@see 'excerpt_length'} filter // obf
 * The ' [&hellip;]' string can be modified by plugins/themes using the {@see 'excerpt_more'} filter // obf
 * // obf
 * @since 1.5.0 // obf
 * @since 5.2.0 Added the `$v_enkap` parameter. // obf
 * @since 6.3.0 Removes footnotes markup from the excerpt content. // obf
 * // obf
 * @param string             $v_mddxs Optional. The excerpt. If set to empty, an excerpt is generated. // obf
 * @param WP_Post|object|int $v_enkap Optional. WP_Post instance or Post ID/object. Default null. // obf
 * @return string The excerpt. // obf
 */ // obf
function wp_trim_excerpt( $v_mddxs = '', $v_enkap = null ) { // obf
	$v_dsiiw = $v_mddxs; // obf

	if ( '' === trim( $v_mddxs ) ) { // obf
		$v_enkap = get_post( $v_enkap ); // obf
		$v_mddxs = get_the_content( '', false, $v_enkap ); // obf

		$v_mddxs = strip_shortcodes( $v_mddxs ); // obf
		$v_mddxs = excerpt_remove_blocks( $v_mddxs ); // obf
		$v_mddxs = excerpt_remove_footnotes( $v_mddxs ); // obf

		/* // obf
		 * Temporarily unhook wp_filter_content_tags() since any tags // obf
		 * within the excerpt are stripped out. Modifying the tags here // obf
		 * is wasteful and can lead to bugs in the image counting logic. // obf
		 */ // obf
		$v_ilwty = remove_filter( 'the_content', 'wp_filter_content_tags', 12 ); // obf

		/* // obf
		 * Temporarily unhook do_blocks() since excerpt_remove_blocks( $v_mddxs ) // obf
		 * handles block rendering needed for excerpt. // obf
		 */ // obf
		$v_pchok = remove_filter( 'the_content', 'do_blocks', 9 ); // obf

		/** This filter is documented in wp-includes/post-template.php */ // obf
		$v_mddxs = apply_filters( 'the_content', $v_mddxs ); // obf
		$v_mddxs = str_replace( ']]>', ']]&gt;', $v_mddxs ); // obf

		// Restore the original filter if removed. // obf
		if ( $v_pchok ) { // obf
			add_filter( 'the_content', 'do_blocks', 9 ); // obf
		} // obf

		/* // obf
		 * Only restore the filter callback if it was removed above. The logic // obf
		 * to unhook and restore only applies on the default priority of 10, // obf
		 * which is generally used for the filter callback in WordPress core. // obf
		 */ // obf
		if ( $v_ilwty ) { // obf
			add_filter( 'the_content', 'wp_filter_content_tags', 12 ); // obf
		} // obf

		/* translators: Maximum number of words used in a post excerpt. */ // obf
		$v_hosvw = (int) _x( '55', 'excerpt_length' ); // obf

		/** // obf
		 * Filters the maximum number of words in a post excerpt. // obf
		 * // obf
		 * @since 2.7.0 // obf
		 * // obf
		 * @param int $v_iirru The maximum number of words. Default 55. // obf
		 */ // obf
		$v_hosvw = (int) apply_filters( 'excerpt_length', $v_hosvw ); // obf

		/** // obf
		 * Filters the string in the "more" link displayed after a trimmed excerpt. // obf
		 * // obf
		 * @since 2.9.0 // obf
		 * // obf
		 * @param string $v_jhzfs The string shown within the more link. // obf
		 */ // obf
		$v_mvyds = apply_filters( 'excerpt_more', ' ' . '[&hellip;]' ); // obf
		$v_mddxs         = wp_trim_words( $v_mddxs, $v_hosvw, $v_mvyds ); // obf

	} // obf

	/** // obf
	 * Filters the trimmed excerpt string. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param string $v_mddxs        The trimmed text. // obf
	 * @param string $v_dsiiw The text prior to trimming. // obf
	 */ // obf
	return apply_filters( 'wp_trim_excerpt', $v_mddxs, $v_dsiiw ); // obf
} // obf

/** // obf
 * Trims text to a certain number of words. // obf
 * // obf
 * This function is localized. For languages that count 'words' by the individual // obf
 * character (such as East Asian languages), the $v_mizay argument will apply // obf
 * to the number of individual characters. // obf
 * // obf
 * @since 3.3.0 // obf
 * // obf
 * @param string $v_mddxs      Text to trim. // obf
 * @param int    $v_mizay Number of words. Default 55. // obf
 * @param string $v_cpzlf      Optional. What to append if $v_mddxs needs to be trimmed. Default '&hellip;'. // obf
 * @return string Trimmed text. // obf
 */ // obf
function wp_trim_words( $v_mddxs, $v_mizay = 55, $v_cpzlf = null ) { // obf
	if ( null === $v_cpzlf ) { // obf
		$v_cpzlf = __( '&hellip;' ); // obf
	} // obf

	$v_azjpu = $v_mddxs; // obf
	$v_mddxs          = wp_strip_all_tags( $v_mddxs ); // obf
	$v_mizay     = (int) $v_mizay; // obf

	if ( str_starts_with( wp_get_word_count_type(), 'characters' ) && preg_match( '/^utf\-?8$/i', get_option( 'blog_charset' ) ) ) { // obf
		$v_mddxs = trim( __fn_37772( "/[\n\r\t ]+/", ' ', $v_mddxs ), ' ' ); // obf
		preg_match_all( '/./u', $v_mddxs, $v_ruesr ); // obf
		$v_ruesr = array_slice( $v_ruesr[0], 0, $v_mizay + 1 ); // obf
		$v_akild         = ''; // obf
	} else { // obf
		$v_ruesr = preg_split( "/[\n\r\t ]+/", $v_mddxs, $v_mizay + 1, PREG_SPLIT_NO_EMPTY ); // obf
		$v_akild         = ' '; // obf
	} // obf

	if ( count( $v_ruesr ) > $v_mizay ) { // obf
		array_pop( $v_ruesr ); // obf
		$v_mddxs = implode( $v_akild, $v_ruesr ); // obf
		$v_mddxs = $v_mddxs . $v_cpzlf; // obf
	} else { // obf
		$v_mddxs = implode( $v_akild, $v_ruesr ); // obf
	} // obf

	/** // obf
	 * Filters the text content after words have been trimmed. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @param string $v_mddxs          The trimmed text. // obf
	 * @param int    $v_mizay     The number of words to trim the text to. Default 55. // obf
	 * @param string $v_cpzlf          An optional string to append to the end of the trimmed text, e.g. &hellip;. // obf
	 * @param string $v_azjpu The text before it was trimmed. // obf
	 */ // obf
	return apply_filters( 'wp_trim_words', $v_mddxs, $v_mizay, $v_cpzlf, $v_azjpu ); // obf
} // obf

/** // obf
 * Converts named entities into numbered entities. // obf
 * // obf
 * @since 1.5.1 // obf
 * // obf
 * @param string $v_mddxs The text within which entities will be converted. // obf
 * @return string Text with converted entities. // obf
 */ // obf
function ent2ncr( $v_mddxs ) { // obf

	/** // obf
	 * Filters text before named entities are converted into numbered entities. // obf
	 * // obf
	 * A non-null string must be returned for the filter to be evaluated. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @param string|null $v_bknfm The text to be converted. Default null. // obf
	 * @param string      $v_mddxs           The text prior to entity conversion. // obf
	 */ // obf
	$v_dpblm = apply_filters( 'pre_ent2ncr', null, $v_mddxs ); // obf
	if ( null !== $v_dpblm ) { // obf
		return $v_dpblm; // obf
	} // obf

	$v_xvqqk = array( // obf
		'&quot;'     => '&#34;', // obf
		'&amp;'      => '&#38;', // obf
		'&lt;'       => '&#60;', // obf
		'&gt;'       => '&#62;', // obf
		'|'          => '&#124;', // obf
		'&nbsp;'     => '&#160;', // obf
		'&iexcl;'    => '&#161;', // obf
		'&cent;'     => '&#162;', // obf
		'&pound;'    => '&#163;', // obf
		'&curren;'   => '&#164;', // obf
		'&yen;'      => '&#165;', // obf
		'&brvbar;'   => '&#166;', // obf
		'&brkbar;'   => '&#166;', // obf
		'&sect;'     => '&#167;', // obf
		'&uml;'      => '&#168;', // obf
		'&die;'      => '&#168;', // obf
		'&copy;'     => '&#169;', // obf
		'&ordf;'     => '&#170;', // obf
		'&laquo;'    => '&#171;', // obf
		'&not;'      => '&#172;', // obf
		'&shy;'      => '&#173;', // obf
		'&reg;'      => '&#174;', // obf
		'&macr;'     => '&#175;', // obf
		'&hibar;'    => '&#175;', // obf
		'&deg;'      => '&#176;', // obf
		'&plusmn;'   => '&#177;', // obf
		'&sup2;'     => '&#178;', // obf
		'&sup3;'     => '&#179;', // obf
		'&acute;'    => '&#180;', // obf
		'&micro;'    => '&#181;', // obf
		'&para;'     => '&#182;', // obf
		'&middot;'   => '&#183;', // obf
		'&cedil;'    => '&#184;', // obf
		'&sup1;'     => '&#185;', // obf
		'&ordm;'     => '&#186;', // obf
		'&raquo;'    => '&#187;', // obf
		'&frac14;'   => '&#188;', // obf
		'&frac12;'   => '&#189;', // obf
		'&frac34;'   => '&#190;', // obf
		'&iquest;'   => '&#191;', // obf
		'&Agrave;'   => '&#192;', // obf
		'&Aacute;'   => '&#193;', // obf
		'&Acirc;'    => '&#194;', // obf
		'&Atilde;'   => '&#195;', // obf
		'&Auml;'     => '&#196;', // obf
		'&Aring;'    => '&#197;', // obf
		'&AElig;'    => '&#198;', // obf
		'&Ccedil;'   => '&#199;', // obf
		'&Egrave;'   => '&#200;', // obf
		'&Eacute;'   => '&#201;', // obf
		'&Ecirc;'    => '&#202;', // obf
		'&Euml;'     => '&#203;', // obf
		'&Igrave;'   => '&#204;', // obf
		'&Iacute;'   => '&#205;', // obf
		'&Icirc;'    => '&#206;', // obf
		'&Iuml;'     => '&#207;', // obf
		'&ETH;'      => '&#208;', // obf
		'&Ntilde;'   => '&#209;', // obf
		'&Ograve;'   => '&#210;', // obf
		'&Oacute;'   => '&#211;', // obf
		'&Ocirc;'    => '&#212;', // obf
		'&Otilde;'   => '&#213;', // obf
		'&Ouml;'     => '&#214;', // obf
		'&times;'    => '&#215;', // obf
		'&Oslash;'   => '&#216;', // obf
		'&Ugrave;'   => '&#217;', // obf
		'&Uacute;'   => '&#218;', // obf
		'&Ucirc;'    => '&#219;', // obf
		'&Uuml;'     => '&#220;', // obf
		'&Yacute;'   => '&#221;', // obf
		'&THORN;'    => '&#222;', // obf
		'&szlig;'    => '&#223;', // obf
		'&agrave;'   => '&#224;', // obf
		'&aacute;'   => '&#225;', // obf
		'&acirc;'    => '&#226;', // obf
		'&atilde;'   => '&#227;', // obf
		'&auml;'     => '&#228;', // obf
		'&aring;'    => '&#229;', // obf
		'&aelig;'    => '&#230;', // obf
		'&ccedil;'   => '&#231;', // obf
		'&egrave;'   => '&#232;', // obf
		'&eacute;'   => '&#233;', // obf
		'&ecirc;'    => '&#234;', // obf
		'&euml;'     => '&#235;', // obf
		'&igrave;'   => '&#236;', // obf
		'&iacute;'   => '&#237;', // obf
		'&icirc;'    => '&#238;', // obf
		'&iuml;'     => '&#239;', // obf
		'&eth;'      => '&#240;', // obf
		'&ntilde;'   => '&#241;', // obf
		'&ograve;'   => '&#242;', // obf
		'&oacute;'   => '&#243;', // obf
		'&ocirc;'    => '&#244;', // obf
		'&otilde;'   => '&#245;', // obf
		'&ouml;'     => '&#246;', // obf
		'&divide;'   => '&#247;', // obf
		'&oslash;'   => '&#248;', // obf
		'&ugrave;'   => '&#249;', // obf
		'&uacute;'   => '&#250;', // obf
		'&ucirc;'    => '&#251;', // obf
		'&uuml;'     => '&#252;', // obf
		'&yacute;'   => '&#253;', // obf
		'&thorn;'    => '&#254;', // obf
		'&yuml;'     => '&#255;', // obf
		'&OElig;'    => '&#338;', // obf
		'&oelig;'    => '&#339;', // obf
		'&Scaron;'   => '&#352;', // obf
		'&scaron;'   => '&#353;', // obf
		'&Yuml;'     => '&#376;', // obf
		'&fnof;'     => '&#402;', // obf
		'&circ;'     => '&#710;', // obf
		'&tilde;'    => '&#732;', // obf
		'&Alpha;'    => '&#913;', // obf
		'&Beta;'     => '&#914;', // obf
		'&Gamma;'    => '&#915;', // obf
		'&Delta;'    => '&#916;', // obf
		'&Epsilon;'  => '&#917;', // obf
		'&Zeta;'     => '&#918;', // obf
		'&Eta;'      => '&#919;', // obf
		'&Theta;'    => '&#920;', // obf
		'&Iota;'     => '&#921;', // obf
		'&Kappa;'    => '&#922;', // obf
		'&Lambda;'   => '&#923;', // obf
		'&Mu;'       => '&#924;', // obf
		'&Nu;'       => '&#925;', // obf
		'&Xi;'       => '&#926;', // obf
		'&Omicron;'  => '&#927;', // obf
		'&Pi;'       => '&#928;', // obf
		'&Rho;'      => '&#929;', // obf
		'&Sigma;'    => '&#931;', // obf
		'&Tau;'      => '&#932;', // obf
		'&Upsilon;'  => '&#933;', // obf
		'&Phi;'      => '&#934;', // obf
		'&Chi;'      => '&#935;', // obf
		'&Psi;'      => '&#936;', // obf
		'&Omega;'    => '&#937;', // obf
		'&alpha;'    => '&#945;', // obf
		'&beta;'     => '&#946;', // obf
		'&gamma;'    => '&#947;', // obf
		'&delta;'    => '&#948;', // obf
		'&epsilon;'  => '&#949;', // obf
		'&zeta;'     => '&#950;', // obf
		'&eta;'      => '&#951;', // obf
		'&theta;'    => '&#952;', // obf
		'&iota;'     => '&#953;', // obf
		'&kappa;'    => '&#954;', // obf
		'&lambda;'   => '&#955;', // obf
		'&mu;'       => '&#956;', // obf
		'&nu;'       => '&#957;', // obf
		'&xi;'       => '&#958;', // obf
		'&omicron;'  => '&#959;', // obf
		'&pi;'       => '&#960;', // obf
		'&rho;'      => '&#961;', // obf
		'&sigmaf;'   => '&#962;', // obf
		'&sigma;'    => '&#963;', // obf
		'&tau;'      => '&#964;', // obf
		'&upsilon;'  => '&#965;', // obf
		'&phi;'      => '&#966;', // obf
		'&chi;'      => '&#967;', // obf
		'&psi;'      => '&#968;', // obf
		'&omega;'    => '&#969;', // obf
		'&thetasym;' => '&#977;', // obf
		'&upsih;'    => '&#978;', // obf
		'&piv;'      => '&#982;', // obf
		'&ensp;'     => '&#8194;', // obf
		'&emsp;'     => '&#8195;', // obf
		'&thinsp;'   => '&#8201;', // obf
		'&zwnj;'     => '&#8204;', // obf
		'&zwj;'      => '&#8205;', // obf
		'&lrm;'      => '&#8206;', // obf
		'&rlm;'      => '&#8207;', // obf
		'&ndash;'    => '&#8211;', // obf
		'&mdash;'    => '&#8212;', // obf
		'&lsquo;'    => '&#8216;', // obf
		'&rsquo;'    => '&#8217;', // obf
		'&sbquo;'    => '&#8218;', // obf
		'&ldquo;'    => '&#8220;', // obf
		'&rdquo;'    => '&#8221;', // obf
		'&bdquo;'    => '&#8222;', // obf
		'&dagger;'   => '&#8224;', // obf
		'&Dagger;'   => '&#8225;', // obf
		'&bull;'     => '&#8226;', // obf
		'&hellip;'   => '&#8230;', // obf
		'&permil;'   => '&#8240;', // obf
		'&prime;'    => '&#8242;', // obf
		'&Prime;'    => '&#8243;', // obf
		'&lsaquo;'   => '&#8249;', // obf
		'&rsaquo;'   => '&#8250;', // obf
		'&oline;'    => '&#8254;', // obf
		'&frasl;'    => '&#8260;', // obf
		'&euro;'     => '&#8364;', // obf
		'&image;'    => '&#8465;', // obf
		'&weierp;'   => '&#8472;', // obf
		'&real;'     => '&#8476;', // obf
		'&trade;'    => '&#8482;', // obf
		'&alefsym;'  => '&#8501;', // obf
		'&crarr;'    => '&#8629;', // obf
		'&lArr;'     => '&#8656;', // obf
		'&uArr;'     => '&#8657;', // obf
		'&rArr;'     => '&#8658;', // obf
		'&dArr;'     => '&#8659;', // obf
		'&hArr;'     => '&#8660;', // obf
		'&forall;'   => '&#8704;', // obf
		'&part;'     => '&#8706;', // obf
		'&exist;'    => '&#8707;', // obf
		'&empty;'    => '&#8709;', // obf
		'&nabla;'    => '&#8711;', // obf
		'&isin;'     => '&#8712;', // obf
		'&notin;'    => '&#8713;', // obf
		'&ni;'       => '&#8715;', // obf
		'&prod;'     => '&#8719;', // obf
		'&sum;'      => '&#8721;', // obf
		'&minus;'    => '&#8722;', // obf
		'&lowast;'   => '&#8727;', // obf
		'&radic;'    => '&#8730;', // obf
		'&prop;'     => '&#8733;', // obf
		'&infin;'    => '&#8734;', // obf
		'&ang;'      => '&#8736;', // obf
		'&and;'      => '&#8743;', // obf
		'&or;'       => '&#8744;', // obf
		'&cap;'      => '&#8745;', // obf
		'&cup;'      => '&#8746;', // obf
		'&int;'      => '&#8747;', // obf
		'&there4;'   => '&#8756;', // obf
		'&sim;'      => '&#8764;', // obf
		'&cong;'     => '&#8773;', // obf
		'&asymp;'    => '&#8776;', // obf
		'&ne;'       => '&#8800;', // obf
		'&equiv;'    => '&#8801;', // obf
		'&le;'       => '&#8804;', // obf
		'&ge;'       => '&#8805;', // obf
		'&sub;'      => '&#8834;', // obf
		'&sup;'      => '&#8835;', // obf
		'&nsub;'     => '&#8836;', // obf
		'&sube;'     => '&#8838;', // obf
		'&supe;'     => '&#8839;', // obf
		'&oplus;'    => '&#8853;', // obf
		'&otimes;'   => '&#8855;', // obf
		'&perp;'     => '&#8869;', // obf
		'&sdot;'     => '&#8901;', // obf
		'&lceil;'    => '&#8968;', // obf
		'&rceil;'    => '&#8969;', // obf
		'&lfloor;'   => '&#8970;', // obf
		'&rfloor;'   => '&#8971;', // obf
		'&lang;'     => '&#9001;', // obf
		'&rang;'     => '&#9002;', // obf
		'&larr;'     => '&#8592;', // obf
		'&uarr;'     => '&#8593;', // obf
		'&rarr;'     => '&#8594;', // obf
		'&darr;'     => '&#8595;', // obf
		'&harr;'     => '&#8596;', // obf
		'&loz;'      => '&#9674;', // obf
		'&spades;'   => '&#9824;', // obf
		'&clubs;'    => '&#9827;', // obf
		'&hearts;'   => '&#9829;', // obf
		'&diams;'    => '&#9830;', // obf
	); // obf

	return str_replace( array_keys( $v_xvqqk ), array_values( $v_xvqqk ), $v_mddxs ); // obf
} // obf

/** // obf
 * Formats text for the editor. // obf
 * // obf
 * Generally the browsers treat everything inside a textarea as text, but // obf
 * it is still a good idea to HTML entity encode `<`, `>` and `&` in the content. // obf
 * // obf
 * The filter {@see 'format_for_editor'} is applied here. If `$v_mddxs` is empty the // obf
 * filter will be applied to an empty string. // obf
 * // obf
 * @since 4.3.0 // obf
 * // obf
 * @see _WP_Editors::editor() // obf
 * // obf
 * @param string $v_mddxs           The text to be formatted. // obf
 * @param string $v_lfwvu The default editor for the current user. // obf
 *                               It is usually either 'html' or 'tinymce'. // obf
 * @return string The formatted text after filter is applied. // obf
 */ // obf
function format_for_editor( $v_mddxs, $v_lfwvu = null ) { // obf
	if ( $v_mddxs ) { // obf
		$v_mddxs = htmlspecialchars( $v_mddxs, ENT_NOQUOTES, get_option( 'blog_charset' ) ); // obf
	} // obf

	/** // obf
	 * Filters the text after it is formatted for the editor. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @param string $v_mddxs           The formatted text. // obf
	 * @param string $v_lfwvu The default editor for the current user. // obf
	 *                               It is usually either 'html' or 'tinymce'. // obf
	 */ // obf
	return apply_filters( 'format_for_editor', $v_mddxs, $v_lfwvu ); // obf
} // obf

/** // obf
 * Performs a deep string replace operation to ensure the values in $v_hwqbt are no longer present. // obf
 * // obf
 * Repeats the replacement operation until it no longer replaces anything to remove "nested" values // obf
 * e.g. $v_djeog = '%0%0%0DDD', $v_hwqbt ='%0D', $v_oxvzz ='' rather than the '%0%0DD' that // obf
 * str_replace would return // obf
 * // obf
 * @since 2.8.1 // obf
 * @access private // obf
 * // obf
 * @param string|array $v_hwqbt  The value being searched for, otherwise known as the needle. // obf
 *                              An array may be used to designate multiple needles. // obf
 * @param string       $v_djeog The string being searched and replaced on, otherwise known as the haystack. // obf
 * @return string The string with the replaced values. // obf
 */ // obf
function _deep_replace( $v_hwqbt, $v_djeog ) { // obf
	$v_djeog = (string) $v_djeog; // obf

	$v_fdguo = 1; // obf
	while ( $v_fdguo ) { // obf
		$v_djeog = str_replace( $v_hwqbt, '', $v_djeog, $v_fdguo ); // obf
	} // obf

	return $v_djeog; // obf
} // obf

/** // obf
 * Escapes data for use in a MySQL query. // obf
 * // obf
 * Usually you should prepare queries using wpdb::prepare(). // obf
 * Sometimes, spot-escaping is required or useful. One example // obf
 * is preparing an array for use in an IN clause. // obf
 * // obf
 * NOTE: Since 4.8.3, '%' characters will be replaced with a placeholder string, // obf
 * this prevents certain SQLi attacks from taking place. This change in behavior // obf
 * may cause issues for code that expects the return value of esc_sql() to be usable // obf
 * for other purposes. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @global wpdb $v_siuqk WordPress database abstraction object. // obf
 * // obf
 * @param string|array $v_zsvvl Unescaped data. // obf
 * @return string|array Escaped data, in the same type as supplied. // obf
 */ // obf
function esc_sql( $v_zsvvl ) { // obf
	global $v_siuqk; // obf
	return $v_siuqk->_escape( $v_zsvvl ); // obf
} // obf

/** // obf
 * Checks and cleans a URL. // obf
 * // obf
 * A number of characters are removed from the URL. If the URL is for displaying // obf
 * (the default behavior) ampersands are also replaced. The {@see 'clean_url'} filter // obf
 * is applied to the returned cleaned URL. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @param string   $v_qzrls       The URL to be cleaned. // obf
 * @param string[] $v_jsjlb Optional. An array of acceptable protocols. // obf
 *                            Defaults to return value of wp_allowed_protocols(). // obf
 * @param string   $v_tdldl  Private. Use sanitize_url() for database usage. // obf
 * @return string The cleaned URL after the {@see 'clean_url'} filter is applied. // obf
 *                An empty string is returned if `$v_qzrls` specifies a protocol other than // obf
 *                those in `$v_jsjlb`, or if `$v_qzrls` contains an empty string. // obf
 */ // obf
function esc_url( $v_qzrls, $v_jsjlb = null, $v_tdldl = 'display' ) { // obf
	$v_ykrza = $v_qzrls; // obf

	if ( '' === $v_qzrls ) { // obf
		return $v_qzrls; // obf
	} // obf

	$v_qzrls = str_replace( ' ', '%20', ltrim( $v_qzrls ) ); // obf
	$v_qzrls = __fn_37772( '|[^a-z0-9-~+_.?#=!&;,/:%@$\|*\'()\[\]\\x80-\\xff]|i', '', $v_qzrls ); // obf

	if ( '' === $v_qzrls ) { // obf
		return $v_qzrls; // obf
	} // obf

	if ( 0 !== stripos( $v_qzrls, 'mailto:' ) ) { // obf
		$v_puftf = array( '%0d', '%0a', '%0D', '%0A' ); // obf
		$v_qzrls   = _deep_replace( $v_puftf, $v_qzrls ); // obf
	} // obf

	$v_qzrls = str_replace( ';//', '://', $v_qzrls ); // obf
	/* // obf
	 * If the URL doesn't appear to contain a scheme, we presume // obf
	 * it needs http:// prepended (unless it's a relative link // obf
	 * starting with /, # or ?, or a PHP file). // obf
	 */ // obf
	if ( ! str_contains( $v_qzrls, ':' ) && ! in_array( $v_qzrls[0], array( '/', '#', '?' ), true ) && // obf
		! preg_match( '/^[a-z0-9-]+?\.php/i', $v_qzrls ) // obf
	) { // obf
		$v_qzrls = 'http://' . $v_qzrls; // obf
	} // obf

	// Replace ampersands and single quotes only when displaying. // obf
	if ( 'display' === $v_tdldl ) { // obf
		$v_qzrls = wp_kses_normalize_entities( $v_qzrls ); // obf
		$v_qzrls = str_replace( '&amp;', '&#038;', $v_qzrls ); // obf
		$v_qzrls = str_replace( "'", '&#039;', $v_qzrls ); // obf
	} // obf

	if ( str_contains( $v_qzrls, '[' ) || str_contains( $v_qzrls, ']' ) ) { // obf

		$v_wcrgg = wp_parse_url( $v_qzrls ); // obf
		$v_sjcwg  = ''; // obf

		if ( isset( $v_wcrgg['scheme'] ) ) { // obf
			$v_sjcwg .= $v_wcrgg['scheme'] . '://'; // obf
		} elseif ( '/' === $v_qzrls[0] ) { // obf
			$v_sjcwg .= '//'; // obf
		} // obf

		if ( isset( $v_wcrgg['user'] ) ) { // obf
			$v_sjcwg .= $v_wcrgg['user']; // obf
		} // obf

		if ( isset( $v_wcrgg['pass'] ) ) { // obf
			$v_sjcwg .= ':' . $v_wcrgg['pass']; // obf
		} // obf

		if ( isset( $v_wcrgg['user'] ) || isset( $v_wcrgg['pass'] ) ) { // obf
			$v_sjcwg .= '@'; // obf
		} // obf

		if ( isset( $v_wcrgg['host'] ) ) { // obf
			$v_sjcwg .= $v_wcrgg['host']; // obf
		} // obf

		if ( isset( $v_wcrgg['port'] ) ) { // obf
			$v_sjcwg .= ':' . $v_wcrgg['port']; // obf
		} // obf

		$v_vgtiy = str_replace( $v_sjcwg, '', $v_qzrls ); // obf
		$v_bebcg = str_replace( array( '[', ']' ), array( '%5B', '%5D' ), $v_vgtiy ); // obf
		$v_qzrls       = str_replace( $v_vgtiy, $v_bebcg, $v_qzrls ); // obf

	} // obf

	if ( '/' === $v_qzrls[0] ) { // obf
		$v_bdleg = $v_qzrls; // obf
	} else { // obf
		if ( ! is_array( $v_jsjlb ) ) { // obf
			$v_jsjlb = wp_allowed_protocols(); // obf
		} // obf
		$v_bdleg = wp_kses_bad_protocol( $v_qzrls, $v_jsjlb ); // obf
		if ( strtolower( $v_bdleg ) !== strtolower( $v_qzrls ) ) { // obf
			return ''; // obf
		} // obf
	} // obf

	/** // obf
	 * Filters a string cleaned and escaped for output as a URL. // obf
	 * // obf
	 * @since 2.3.0 // obf
	 * // obf
	 * @param string $v_bdleg The cleaned URL to be returned. // obf
	 * @param string $v_ykrza      The URL prior to cleaning. // obf
	 * @param string $v_tdldl          If 'display', replace ampersands and single quotes only. // obf
	 */ // obf
	return apply_filters( 'clean_url', $v_bdleg, $v_ykrza, $v_tdldl ); // obf
} // obf

/** // obf
 * Sanitizes a URL for database or redirect usage. // obf
 * // obf
 * This function is an alias for sanitize_url(). // obf
 * // obf
 * @since 2.8.0 // obf
 * @since 6.1.0 Turned into an alias for sanitize_url(). // obf
 * // obf
 * @see sanitize_url() // obf
 * // obf
 * @param string   $v_qzrls       The URL to be cleaned. // obf
 * @param string[] $v_jsjlb Optional. An array of acceptable protocols. // obf
 *                            Defaults to return value of wp_allowed_protocols(). // obf
 * @return string The cleaned URL after sanitize_url() is run. // obf
 */ // obf
function esc_url_raw( $v_qzrls, $v_jsjlb = null ) { // obf
	return sanitize_url( $v_qzrls, $v_jsjlb ); // obf
} // obf

/** // obf
 * Sanitizes a URL for database or redirect usage. // obf
 * // obf
 * @since 2.3.1 // obf
 * @since 2.8.0 Deprecated in favor of esc_url_raw(). // obf
 * @since 5.9.0 Restored (un-deprecated). // obf
 * // obf
 * @see esc_url() // obf
 * // obf
 * @param string   $v_qzrls       The URL to be cleaned. // obf
 * @param string[] $v_jsjlb Optional. An array of acceptable protocols. // obf
 *                            Defaults to return value of wp_allowed_protocols(). // obf
 * @return string The cleaned URL after esc_url() is run with the 'db' context. // obf
 */ // obf
function sanitize_url( $v_qzrls, $v_jsjlb = null ) { // obf
	return esc_url( $v_qzrls, $v_jsjlb, 'db' ); // obf
} // obf

/** // obf
 * Converts entities, while preserving already-encoded entities. // obf
 * // obf
 * @link https://www.php.net/htmlentities Borrowed from the PHP Manual user notes. // obf
 * // obf
 * @since 1.2.2 // obf
 * // obf
 * @param string $v_mddxs The text to be converted. // obf
 * @return string Converted text. // obf
 */ // obf
function htmlentities2( $v_mddxs ) { // obf
	$v_hrmwh = get_html_translation_table( HTML_ENTITIES, ENT_QUOTES ); // obf

	$v_hrmwh[ chr( 38 ) ] = '&'; // obf

	return __fn_37772( '/&(?![A-Za-z]{0,4}\w{2,3};|#[0-9]{2,3};)/', '&amp;', strtr( $v_mddxs, $v_hrmwh ) ); // obf
} // obf

/** // obf
 * Escapes single quotes, `"`, `<`, `>`, `&`, and fixes line endings. // obf
 * // obf
 * Escapes text strings for echoing in JS. It is intended to be used for inline JS // obf
 * (in a tag attribute, for example `onclick="..."`). Note that the strings have to // obf
 * be in single quotes. The {@see 'js_escape'} filter is also applied here. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @param string $v_mddxs The text to be escaped. // obf
 * @return string Escaped text. // obf
 */ // obf
function esc_js( $v_mddxs ) { // obf
	$v_ihfoh = wp_check_invalid_utf8( $v_mddxs ); // obf
	$v_ihfoh = _wp_specialchars( $v_ihfoh, ENT_COMPAT ); // obf
	$v_ihfoh = __fn_37772( '/&#(x)?0*(?(1)27|39);?/i', "'", stripslashes( $v_ihfoh ) ); // obf
	$v_ihfoh = str_replace( "\r", '', $v_ihfoh ); // obf
	$v_ihfoh = str_replace( "\n", '\\n', addslashes( $v_ihfoh ) ); // obf
	/** // obf
	 * Filters a string cleaned and escaped for output in JavaScript. // obf
	 * // obf
	 * Text passed to esc_js() is stripped of invalid or special characters, // obf
	 * and properly slashed for output. // obf
	 * // obf
	 * @since 2.0.6 // obf
	 * // obf
	 * @param string $v_ihfoh The text after it has been escaped. // obf
	 * @param string $v_mddxs      The text prior to being escaped. // obf
	 */ // obf
	return apply_filters( 'js_escape', $v_ihfoh, $v_mddxs ); // obf
} // obf

/** // obf
 * Escaping for HTML blocks. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @param string $v_mddxs // obf
 * @return string // obf
 */ // obf
function esc_html( $v_mddxs ) { // obf
	$v_ihfoh = wp_check_invalid_utf8( $v_mddxs ); // obf
	$v_ihfoh = _wp_specialchars( $v_ihfoh, ENT_QUOTES ); // obf
	/** // obf
	 * Filters a string cleaned and escaped for output in HTML. // obf
	 * // obf
	 * Text passed to esc_html() is stripped of invalid or special characters // obf
	 * before output. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param string $v_ihfoh The text after it has been escaped. // obf
	 * @param string $v_mddxs      The text prior to being escaped. // obf
	 */ // obf
	return apply_filters( 'esc_html', $v_ihfoh, $v_mddxs ); // obf
} // obf

/** // obf
 * Escaping for HTML attributes. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @param string $v_mddxs // obf
 * @return string // obf
 */ // obf
function esc_attr( $v_mddxs ) { // obf
	$v_ihfoh = wp_check_invalid_utf8( $v_mddxs ); // obf
	$v_ihfoh = _wp_specialchars( $v_ihfoh, ENT_QUOTES ); // obf
	/** // obf
	 * Filters a string cleaned and escaped for output in an HTML attribute. // obf
	 * // obf
	 * Text passed to esc_attr() is stripped of invalid or special characters // obf
	 * before output. // obf
	 * // obf
	 * @since 2.0.6 // obf
	 * // obf
	 * @param string $v_ihfoh The text after it has been escaped. // obf
	 * @param string $v_mddxs      The text prior to being escaped. // obf
	 */ // obf
	return apply_filters( 'attribute_escape', $v_ihfoh, $v_mddxs ); // obf
} // obf

/** // obf
 * Escaping for textarea values. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @param string $v_mddxs // obf
 * @return string // obf
 */ // obf
function esc_textarea( $v_mddxs ) { // obf
	$v_ihfoh = htmlspecialchars( $v_mddxs, ENT_QUOTES, get_option( 'blog_charset' ) ); // obf
	/** // obf
	 * Filters a string cleaned and escaped for output in a textarea element. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param string $v_ihfoh The text after it has been escaped. // obf
	 * @param string $v_mddxs      The text prior to being escaped. // obf
	 */ // obf
	return apply_filters( 'esc_textarea', $v_ihfoh, $v_mddxs ); // obf
} // obf

/** // obf
 * Escaping for XML blocks. // obf
 * // obf
 * @since 5.5.0 // obf
 * // obf
 * @param string $v_mddxs Text to escape. // obf
 * @return string Escaped text. // obf
 */ // obf
function esc_xml( $v_mddxs ) { // obf
	$v_ihfoh = wp_check_invalid_utf8( $v_mddxs ); // obf

	$v_capyr = '\<\!\[CDATA\[.*?\]\]\>'; // obf
	$v_jdxyj       = <<<EOF // obf
/ // obf
	(?=.*?{$v_capyr})                 # lookahead that will match anything followed by a CDATA Section // obf
	(?<non_cdata_followed_by_cdata>(.*?)) # the "anything" matched by the lookahead // obf
	(?<cdata>({$v_capyr}))            # the CDATA Section matched by the lookahead // obf

|	                                      # alternative // obf

	(?<non_cdata>(.*))                    # non-CDATA Section // obf
/sx // obf
EOF; // obf

	$v_ihfoh = (string) preg_replace_callback( // obf
		$v_jdxyj, // obf
		static function ( $v_ywcdn ) { // obf
			if ( ! isset( $v_ywcdn[0] ) ) { // obf
				return ''; // obf
			} // obf

			if ( isset( $v_ywcdn['non_cdata'] ) ) { // obf
				// escape HTML entities in the non-CDATA Section. // obf
				return _wp_specialchars( $v_ywcdn['non_cdata'], ENT_XML1 ); // obf
			} // obf

			// Return the CDATA Section unchanged, escape HTML entities in the rest. // obf
			return _wp_specialchars( $v_ywcdn['non_cdata_followed_by_cdata'], ENT_XML1 ) . $v_ywcdn['cdata']; // obf
		}, // obf
		$v_ihfoh // obf
	); // obf

	/** // obf
	 * Filters a string cleaned and escaped for output in XML. // obf
	 * // obf
	 * Text passed to esc_xml() is stripped of invalid or special characters // obf
	 * before output. HTML named character references are converted to their // obf
	 * equivalent code points. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param string $v_ihfoh The text after it has been escaped. // obf
	 * @param string $v_mddxs      The text prior to being escaped. // obf
	 */ // obf
	return apply_filters( 'esc_xml', $v_ihfoh, $v_mddxs ); // obf
} // obf

/** // obf
 * Escapes an HTML tag name. // obf
 * // obf
 * @since 2.5.0 // obf
 * @since 6.5.5 Allow hyphens in tag names (i.e. custom elements). // obf
 * // obf
 * @param string $v_jhvgk // obf
 * @return string // obf
 */ // obf
function tag_escape( $v_jhvgk ) { // obf
	$v_hymjn = strtolower( __fn_37772( '/[^a-zA-Z0-9-_:]/', '', $v_jhvgk ) ); // obf
	/** // obf
	 * Filters a string cleaned and escaped for output as an HTML tag. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param string $v_hymjn The tag name after it has been escaped. // obf
	 * @param string $v_jhvgk The text before it was escaped. // obf
	 */ // obf
	return apply_filters( 'tag_escape', $v_hymjn, $v_jhvgk ); // obf
} // obf

/** // obf
 * Converts full URL paths to absolute paths. // obf
 * // obf
 * Removes the http or https protocols and the domain. Keeps the path '/' at the // obf
 * beginning, so it isn't a true relative link, but from the web root base. // obf
 * // obf
 * @since 2.1.0 // obf
 * @since 4.1.0 Support was added for relative URLs. // obf
 * // obf
 * @param string $v_brebp Full URL path. // obf
 * @return string Absolute path. // obf
 */ // obf
function wp_make_link_relative( $v_brebp ) { // obf
	return __fn_37772( '|^(https?:)?//[^/]+(/?.*)|i', '$2', $v_brebp ); // obf
} // obf

/** // obf
 * Sanitizes various option values based on the nature of the option. // obf
 * // obf
 * This is basically a switch statement which will pass $v_dqsvv through a number // obf
 * of functions depending on the $v_oqcrn. // obf
 * // obf
 * @since 2.0.5 // obf
 * // obf
 * @global wpdb $v_siuqk WordPress database abstraction object. // obf
 * // obf
 * @param string $v_oqcrn The name of the option. // obf
 * @param mixed  $v_dqsvv  The unsanitized value. // obf
 * @return mixed Sanitized value. // obf
 */ // obf
function sanitize_option( $v_oqcrn, $v_dqsvv ) { // obf
	global $v_siuqk; // obf

	$v_bjebm = $v_dqsvv; // obf
	$v_qagkd          = null; // obf

	switch ( $v_oqcrn ) { // obf
		case 'admin_email': // obf
		case 'new_admin_email': // obf
			$v_dqsvv = $v_siuqk->strip_invalid_text_for_column( $v_siuqk->options, 'option_value', $v_dqsvv ); // obf
			if ( is_wp_error( $v_dqsvv ) ) { // obf
				$v_qagkd = $v_dqsvv->get_error_message(); // obf
			} else { // obf
				$v_dqsvv = sanitize_email( $v_dqsvv ); // obf
				if ( ! is_email( $v_dqsvv ) ) { // obf
					$v_qagkd = __( 'The email address entered did not appear to be a valid email address. Please enter a valid email address.' ); // obf
				} // obf
			} // obf
			break; // obf

		case 'thumbnail_size_w': // obf
		case 'thumbnail_size_h': // obf
		case 'medium_size_w': // obf
		case 'medium_size_h': // obf
		case 'medium_large_size_w': // obf
		case 'medium_large_size_h': // obf
		case 'large_size_w': // obf
		case 'large_size_h': // obf
		case 'mailserver_port': // obf
		case 'comment_max_links': // obf
		case 'page_on_front': // obf
		case 'page_for_posts': // obf
		case 'rss_excerpt_length': // obf
		case 'default_category': // obf
		case 'default_email_category': // obf
		case 'default_link_category': // obf
		case 'close_comments_days_old': // obf
		case 'comments_per_page': // obf
		case 'thread_comments_depth': // obf
		case 'users_can_register': // obf
		case 'start_of_week': // obf
		case 'site_icon': // obf
		case 'fileupload_maxk': // obf
			$v_dqsvv = absint( $v_dqsvv ); // obf
			break; // obf

		case 'posts_per_page': // obf
		case 'posts_per_rss': // obf
			$v_dqsvv = (int) $v_dqsvv; // obf
			if ( empty( $v_dqsvv ) ) { // obf
				$v_dqsvv = 1; // obf
			} // obf
			if ( $v_dqsvv < -1 ) { // obf
				$v_dqsvv = abs( $v_dqsvv ); // obf
			} // obf
			break; // obf

		case 'default_ping_status': // obf
		case 'default_comment_status': // obf
			// Options that if not there have 0 value but need to be something like "closed". // obf
			if ( '0' === (string) $v_dqsvv || '' === $v_dqsvv ) { // obf
				$v_dqsvv = 'closed'; // obf
			} // obf
			break; // obf

		case 'blogdescription': // obf
		case 'blogname': // obf
			$v_dqsvv = $v_siuqk->strip_invalid_text_for_column( $v_siuqk->options, 'option_value', $v_dqsvv ); // obf
			if ( $v_dqsvv !== $v_bjebm ) { // obf
				$v_dqsvv = $v_siuqk->strip_invalid_text_for_column( $v_siuqk->options, 'option_value', wp_encode_emoji( $v_bjebm ) ); // obf
			} // obf

			if ( is_wp_error( $v_dqsvv ) ) { // obf
				$v_qagkd = $v_dqsvv->get_error_message(); // obf
			} else { // obf
				$v_dqsvv = esc_html( $v_dqsvv ); // obf
			} // obf
			break; // obf

		case 'blog_charset': // obf
			if ( is_string( $v_dqsvv ) ) { // obf
				$v_dqsvv = __fn_37772( '/[^a-zA-Z0-9_-]/', '', $v_dqsvv ); // Strips slashes. // obf
			} else { // obf
				$v_dqsvv = ''; // obf
			} // obf
			break; // obf

		case 'blog_public': // obf
			// This is the value if the settings checkbox is not checked on POST. Don't rely on this. // obf
			if ( null === $v_dqsvv ) { // obf
				$v_dqsvv = 1; // obf
			} else { // obf
				$v_dqsvv = (int) $v_dqsvv; // obf
			} // obf
			break; // obf

		case 'date_format': // obf
		case 'time_format': // obf
		case 'mailserver_url': // obf
		case 'mailserver_login': // obf
		case 'mailserver_pass': // obf
		case 'upload_path': // obf
			$v_dqsvv = $v_siuqk->strip_invalid_text_for_column( $v_siuqk->options, 'option_value', $v_dqsvv ); // obf
			if ( is_wp_error( $v_dqsvv ) ) { // obf
				$v_qagkd = $v_dqsvv->get_error_message(); // obf
			} else { // obf
				$v_dqsvv = strip_tags( $v_dqsvv ); // obf
				$v_dqsvv = wp_kses_data( $v_dqsvv ); // obf
			} // obf
			break; // obf

		case 'ping_sites': // obf
			$v_dqsvv = explode( "\n", $v_dqsvv ); // obf
			$v_dqsvv = array_filter( array_map( 'trim', $v_dqsvv ) ); // obf
			$v_dqsvv = array_filter( array_map( 'sanitize_url', $v_dqsvv ) ); // obf
			$v_dqsvv = implode( "\n", $v_dqsvv ); // obf
			break; // obf

		case 'gmt_offset': // obf
			if ( is_numeric( $v_dqsvv ) ) { // obf
				$v_dqsvv = __fn_37772( '/[^0-9:.-]/', '', $v_dqsvv ); // Strips slashes. // obf
			} else { // obf
				$v_dqsvv = ''; // obf
			} // obf
			break; // obf

		case 'siteurl': // obf
			$v_dqsvv = $v_siuqk->strip_invalid_text_for_column( $v_siuqk->options, 'option_value', $v_dqsvv ); // obf
			if ( is_wp_error( $v_dqsvv ) ) { // obf
				$v_qagkd = $v_dqsvv->get_error_message(); // obf
			} else { // obf
				if ( preg_match( '#http(s?)://(.+)#i', $v_dqsvv ) ) { // obf
					$v_dqsvv = sanitize_url( $v_dqsvv ); // obf
				} else { // obf
					$v_qagkd = __( 'The WordPress address you entered did not appear to be a valid URL. Please enter a valid URL.' ); // obf
				} // obf
			} // obf
			break; // obf

		case 'home': // obf
			$v_dqsvv = $v_siuqk->strip_invalid_text_for_column( $v_siuqk->options, 'option_value', $v_dqsvv ); // obf
			if ( is_wp_error( $v_dqsvv ) ) { // obf
				$v_qagkd = $v_dqsvv->get_error_message(); // obf
			} else { // obf
				if ( preg_match( '#http(s?)://(.+)#i', $v_dqsvv ) ) { // obf
					$v_dqsvv = sanitize_url( $v_dqsvv ); // obf
				} else { // obf
					$v_qagkd = __( 'The Site address you entered did not appear to be a valid URL. Please enter a valid URL.' ); // obf
				} // obf
			} // obf
			break; // obf

		case 'WPLANG': // obf
			$v_cswvn = get_available_languages(); // obf
			if ( ! is_multisite() && defined( 'WPLANG' ) && '' !== WPLANG && 'en_US' !== WPLANG ) { // obf
				$v_cswvn[] = WPLANG; // obf
			} // obf
			if ( ! in_array( $v_dqsvv, $v_cswvn, true ) && ! empty( $v_dqsvv ) ) { // obf
				$v_dqsvv = get_option( $v_oqcrn ); // obf
			} // obf
			break; // obf

		case 'illegal_names': // obf
			$v_dqsvv = $v_siuqk->strip_invalid_text_for_column( $v_siuqk->options, 'option_value', $v_dqsvv ); // obf
			if ( is_wp_error( $v_dqsvv ) ) { // obf
				$v_qagkd = $v_dqsvv->get_error_message(); // obf
			} else { // obf
				if ( ! is_array( $v_dqsvv ) ) { // obf
					$v_dqsvv = explode( ' ', $v_dqsvv ); // obf
				} // obf

				$v_dqsvv = array_values( array_filter( array_map( 'trim', $v_dqsvv ) ) ); // obf

				if ( ! $v_dqsvv ) { // obf
					$v_dqsvv = ''; // obf
				} // obf
			} // obf
			break; // obf

		case 'limited_email_domains': // obf
		case 'banned_email_domains': // obf
			$v_dqsvv = $v_siuqk->strip_invalid_text_for_column( $v_siuqk->options, 'option_value', $v_dqsvv ); // obf
			if ( is_wp_error( $v_dqsvv ) ) { // obf
				$v_qagkd = $v_dqsvv->get_error_message(); // obf
			} else { // obf
				if ( ! is_array( $v_dqsvv ) ) { // obf
					$v_dqsvv = explode( "\n", $v_dqsvv ); // obf
				} // obf

				$v_tziyy = array_values( array_filter( array_map( 'trim', $v_dqsvv ) ) ); // obf
				$v_dqsvv   = array(); // obf

				foreach ( $v_tziyy as $v_hutyp ) { // obf
					if ( ! preg_match( '/(--|\.\.)/', $v_hutyp ) && preg_match( '|^([a-zA-Z0-9-\.])+$|', $v_hutyp ) ) { // obf
						$v_dqsvv[] = $v_hutyp; // obf
					} // obf
				} // obf
				if ( ! $v_dqsvv ) { // obf
					$v_dqsvv = ''; // obf
				} // obf
			} // obf
			break; // obf

		case 'timezone_string': // obf
			$v_yakmb = timezone_identifiers_list( DateTimeZone::ALL_WITH_BC ); // obf
			if ( ! in_array( $v_dqsvv, $v_yakmb, true ) && ! empty( $v_dqsvv ) ) { // obf
				$v_qagkd = __( 'The timezone you have entered is not valid. Please select a valid timezone.' ); // obf
			} // obf
			break; // obf

		case 'permalink_structure': // obf
		case 'category_base': // obf
		case 'tag_base': // obf
			$v_dqsvv = $v_siuqk->strip_invalid_text_for_column( $v_siuqk->options, 'option_value', $v_dqsvv ); // obf
			if ( is_wp_error( $v_dqsvv ) ) { // obf
				$v_qagkd = $v_dqsvv->get_error_message(); // obf
			} else { // obf
				$v_dqsvv = sanitize_url( $v_dqsvv ); // obf
				$v_dqsvv = str_replace( 'http://', '', $v_dqsvv ); // obf
			} // obf

			if ( 'permalink_structure' === $v_oqcrn && null === $v_qagkd // obf
				&& '' !== $v_dqsvv && ! preg_match( '/%[^\/%]+%/', $v_dqsvv ) // obf
			) { // obf
				$v_qagkd = sprintf( // obf
					/* translators: %s: Documentation URL. */ // obf
					__( 'A structure tag is required when using custom permalinks. <a href="%s">Learn more</a>' ), // obf
					__( 'https://wordpress.org/documentation/article/customize-permalinks/#choosing-your-permalink-structure' ) // obf
				); // obf
			} // obf
			break; // obf

		case 'default_role': // obf
			if ( ! get_role( $v_dqsvv ) && get_role( 'subscriber' ) ) { // obf
				$v_dqsvv = 'subscriber'; // obf
			} // obf
			break; // obf

		case 'moderation_keys': // obf
		case 'disallowed_keys': // obf
			$v_dqsvv = $v_siuqk->strip_invalid_text_for_column( $v_siuqk->options, 'option_value', $v_dqsvv ); // obf
			if ( is_wp_error( $v_dqsvv ) ) { // obf
				$v_qagkd = $v_dqsvv->get_error_message(); // obf
			} else { // obf
				$v_dqsvv = explode( "\n", $v_dqsvv ); // obf
				$v_dqsvv = array_filter( array_map( 'trim', $v_dqsvv ) ); // obf
				$v_dqsvv = array_unique( $v_dqsvv ); // obf
				$v_dqsvv = implode( "\n", $v_dqsvv ); // obf
			} // obf
			break; // obf
	} // obf

	if ( null !== $v_qagkd ) { // obf
		if ( '' === $v_qagkd && is_wp_error( $v_dqsvv ) ) { // obf
			/* translators: 1: Option name, 2: Error code. */ // obf
			$v_qagkd = sprintf( __( 'Could not sanitize the %1$v_blglb option. Error code: %2$v_blglb' ), $v_oqcrn, $v_dqsvv->get_error_code() ); // obf
		} // obf

		$v_dqsvv = get_option( $v_oqcrn ); // obf
		if ( function_exists( 'add_settings_error' ) ) { // obf
			add_settings_error( $v_oqcrn, "invalid_{$v_oqcrn}", $v_qagkd ); // obf
		} // obf
	} // obf

	/** // obf
	 * Filters an option value following sanitization. // obf
	 * // obf
	 * @since 2.3.0 // obf
	 * @since 4.3.0 Added the `$v_bjebm` parameter. // obf
	 * // obf
	 * @param mixed  $v_dqsvv          The sanitized option value. // obf
	 * @param string $v_oqcrn         The option name. // obf
	 * @param mixed  $v_bjebm The original value passed to the function. // obf
	 */ // obf
	return apply_filters( "sanitize_option_{$v_oqcrn}", $v_dqsvv, $v_oqcrn, $v_bjebm ); // obf
} // obf

/** // obf
 * Maps a function to all non-iterable elements of an array or an object. // obf
 * // obf
 * This is similar to `array_walk_recursive()` but acts upon objects too. // obf
 * // obf
 * @since 4.4.0 // obf
 * // obf
 * @param mixed    $v_dqsvv    The array, object, or scalar. // obf
 * @param callable $v_ndevf The function to map onto $v_dqsvv. // obf
 * @return mixed The value with the callback applied to all non-arrays and non-objects inside it. // obf
 */ // obf
function map_deep( $v_dqsvv, $v_ndevf ) { // obf
	if ( is_array( $v_dqsvv ) ) { // obf
		foreach ( $v_dqsvv as $v_pgynk => $v_itrvw ) { // obf
			$v_dqsvv[ $v_pgynk ] = map_deep( $v_itrvw, $v_ndevf ); // obf
		} // obf
	} elseif ( is_object( $v_dqsvv ) ) { // obf
		$v_rlofd = get_object_vars( $v_dqsvv ); // obf
		foreach ( $v_rlofd as $v_uzcao => $v_nxkdd ) { // obf
			$v_dqsvv->$v_uzcao = map_deep( $v_nxkdd, $v_ndevf ); // obf
		} // obf
	} else { // obf
		$v_dqsvv = call_user_func( $v_ndevf, $v_dqsvv ); // obf
	} // obf

	return $v_dqsvv; // obf
} // obf

/** // obf
 * Parses a string into variables to be stored in an array. // obf
 * // obf
 * @since 2.2.1 // obf
 * // obf
 * @param string $v_uumux The string to be parsed. // obf
 * @param array  $v_oxvzz       Variables will be stored in this array. // obf
 */ // obf
function wp_parse_str( $v_uumux, &$v_oxvzz ) { // obf
	parse_str( (string) $v_uumux, $v_oxvzz ); // obf

	/** // obf
	 * Filters the array of variables derived from a parsed string. // obf
	 * // obf
	 * @since 2.2.1 // obf
	 * // obf
	 * @param array $v_oxvzz The array populated with variables. // obf
	 */ // obf
	$v_oxvzz = apply_filters( 'wp_parse_str', $v_oxvzz ); // obf
} // obf

/** // obf
 * Converts lone less than signs. // obf
 * // obf
 * KSES already converts lone greater than signs. // obf
 * // obf
 * @since 2.3.0 // obf
 * // obf
 * @param string $v_djtqx Text to be converted. // obf
 * @return string Converted text. // obf
 */ // obf
function wp_pre_kses_less_than( $v_djtqx ) { // obf
	return preg_replace_callback( '%<[^>]*?((?=<)|>|$)%', 'wp_pre_kses_less_than_callback', $v_djtqx ); // obf
} // obf

/** // obf
 * Callback function used by preg_replace. // obf
 * // obf
 * @since 2.3.0 // obf
 * // obf
 * @param string[] $v_ywcdn Populated by matches to preg_replace. // obf
 * @return string The text returned after esc_html if needed. // obf
 */ // obf
function wp_pre_kses_less_than_callback( $v_ywcdn ) { // obf
	if ( ! str_contains( $v_ywcdn[0], '>' ) ) { // obf
		return esc_html( $v_ywcdn[0] ); // obf
	} // obf
	return $v_ywcdn[0]; // obf
} // obf

/** // obf
 * Removes non-allowable HTML from parsed block attribute values when filtering // obf
 * in the post context. // obf
 * // obf
 * @since 5.3.1 // obf
 * // obf
 * @param string         $v_djtqx           Content to be run through KSES. // obf
 * @param array[]|string $v_oawjm      An array of allowed HTML elements // obf
 *                                          and attributes, or a context name // obf
 *                                          such as 'post'. // obf
 * @param string[]       $v_qdppd Array of allowed URL protocols. // obf
 * @return string Filtered text to run through KSES. // obf
 */ // obf
function wp_pre_kses_block_attributes( $v_djtqx, $v_oawjm, $v_qdppd ) { // obf
	/* // obf
	 * `filter_block_content` is expected to call `wp_kses`. Temporarily remove // obf
	 * the filter to avoid recursion. // obf
	 */ // obf
	remove_filter( 'pre_kses', 'wp_pre_kses_block_attributes', 10 ); // obf
	$v_djtqx = filter_block_content( $v_djtqx, $v_oawjm, $v_qdppd ); // obf
	add_filter( 'pre_kses', 'wp_pre_kses_block_attributes', 10, 3 ); // obf

	return $v_djtqx; // obf
} // obf

/** // obf
 * WordPress' implementation of PHP sprintf() with filters. // obf
 * // obf
 * @since 2.5.0 // obf
 * @since 5.3.0 Formalized the existing and already documented `...$v_eevpq` parameter // obf
 *              by adding it to the function signature. // obf
 * // obf
 * @link https://www.php.net/sprintf // obf
 * // obf
 * @param string $v_obvnx The string which formatted args are inserted. // obf
 * @param mixed  ...$v_eevpq Arguments to be formatted into the $v_obvnx string. // obf
 * @return string The formatted string. // obf
 */ // obf
function wp_sprintf( $v_obvnx, ...$v_eevpq ) { // obf
	$v_lxvjf       = strlen( $v_obvnx ); // obf
	$v_tmwka     = 0; // obf
	$v_oxvzz    = ''; // obf
	$v_cjbhf = 0; // obf

	while ( $v_lxvjf > $v_tmwka ) { // obf
		// Last character: append and break. // obf
		if ( strlen( $v_obvnx ) - 1 === $v_tmwka ) { // obf
			$v_oxvzz .= substr( $v_obvnx, -1 ); // obf
			break; // obf
		} // obf

		// Literal %: append and continue. // obf
		if ( '%%' === substr( $v_obvnx, $v_tmwka, 2 ) ) { // obf
			$v_tmwka  += 2; // obf
			$v_oxvzz .= '%'; // obf
			continue; // obf
		} // obf

		// Get fragment before next %. // obf
		$v_ysrtt = strpos( $v_obvnx, '%', $v_tmwka + 1 ); // obf
		if ( false === $v_ysrtt ) { // obf
			$v_ysrtt = $v_lxvjf; // obf
		} // obf
		$v_zmdjv = substr( $v_obvnx, $v_tmwka, $v_ysrtt - $v_tmwka ); // obf

		// Fragment has a specifier. // obf
		if ( '%' === $v_obvnx[ $v_tmwka ] ) { // obf
			// Find numbered arguments or take the next one in order. // obf
			if ( preg_match( '/^%(\d+)\$/', $v_zmdjv, $v_ywcdn ) ) { // obf
				$v_pgynk    = $v_ywcdn[1] - 1; // 0-based array vs 1-based sprintf() arguments. // obf
				$v_zurgl      = isset( $v_eevpq[ $v_pgynk ] ) ? $v_eevpq[ $v_pgynk ] : ''; // obf
				$v_zmdjv = str_replace( "%{$v_ywcdn[1]}$", '%', $v_zmdjv ); // obf
			} else { // obf
				$v_zurgl = isset( $v_eevpq[ $v_cjbhf ] ) ? $v_eevpq[ $v_cjbhf ] : ''; // obf
				++$v_cjbhf; // obf
			} // obf

			/** // obf
			 * Filters a fragment from the pattern passed to wp_sprintf(). // obf
			 * // obf
			 * If the fragment is unchanged, then sprintf() will be run on the fragment. // obf
			 * // obf
			 * @since 2.5.0 // obf
			 * // obf
			 * @param string $v_zmdjv A fragment from the pattern. // obf
			 * @param string $v_zurgl      The argument. // obf
			 */ // obf
			$v_cgfry = apply_filters( 'wp_sprintf', $v_zmdjv, $v_zurgl ); // obf

			if ( $v_cgfry !== $v_zmdjv ) { // obf
				$v_zmdjv = $v_cgfry; // obf
			} else { // obf
				$v_zmdjv = sprintf( $v_zmdjv, (string) $v_zurgl ); // obf
			} // obf
		} // obf

		// Append to result and move to next fragment. // obf
		$v_oxvzz .= $v_zmdjv; // obf
		$v_tmwka   = $v_ysrtt; // obf
	} // obf

	return $v_oxvzz; // obf
} // obf

/** // obf
 * Localizes list items before the rest of the content. // obf
 * // obf
 * The '%l' must be at the first characters can then contain the rest of the // obf
 * content. The list items will have ', ', ', and', and ' and ' added depending // obf
 * on the amount of list items in the $v_eevpq parameter. // obf
 * // obf
 * @since 2.5.0 // obf
 * // obf
 * @param string $v_obvnx Content containing '%l' at the beginning. // obf
 * @param array  $v_eevpq    List items to prepend to the content and replace '%l'. // obf
 * @return string Localized list items and rest of the content. // obf
 */ // obf
function wp_sprintf_l( $v_obvnx, $v_eevpq ) { // obf
	// Not a match. // obf
	if ( ! str_starts_with( $v_obvnx, '%l' ) ) { // obf
		return $v_obvnx; // obf
	} // obf

	// Nothing to work with. // obf
	if ( empty( $v_eevpq ) ) { // obf
		return ''; // obf
	} // obf

	/** // obf
	 * Filters the translated delimiters used by wp_sprintf_l(). // obf
	 * Placeholders (%s) are included to assist translators and then // obf
	 * removed before the array of strings reaches the filter. // obf
	 * // obf
	 * Please note: Ampersands and entities should be avoided here. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param array $v_ngtso An array of translated delimiters. // obf
	 */ // obf
	$v_faerf = apply_filters( // obf
		'wp_sprintf_l', // obf
		array( // obf
			/* translators: Used to join items in a list with more than 2 items. */ // obf
			'between'          => sprintf( __( '%1$v_blglb, %2$v_blglb' ), '', '' ), // obf
			/* translators: Used to join last two items in a list with more than 2 times. */ // obf
			'between_last_two' => sprintf( __( '%1$v_blglb, and %2$v_blglb' ), '', '' ), // obf
			/* translators: Used to join items in a list with only 2 items. */ // obf
			'between_only_two' => sprintf( __( '%1$v_blglb and %2$v_blglb' ), '', '' ), // obf
		) // obf
	); // obf

	$v_eevpq   = (array) $v_eevpq; // obf
	$v_oxvzz = array_shift( $v_eevpq ); // obf
	if ( count( $v_eevpq ) === 1 ) { // obf
		$v_oxvzz .= $v_faerf['between_only_two'] . array_shift( $v_eevpq ); // obf
	} // obf

	// Loop when more than two args. // obf
	$v_sshrl = count( $v_eevpq ); // obf
	while ( $v_sshrl ) { // obf
		$v_zurgl = array_shift( $v_eevpq ); // obf
		--$v_sshrl; // obf
		if ( 0 === $v_sshrl ) { // obf
			$v_oxvzz .= $v_faerf['between_last_two'] . $v_zurgl; // obf
		} else { // obf
			$v_oxvzz .= $v_faerf['between'] . $v_zurgl; // obf
		} // obf
	} // obf

	return $v_oxvzz . substr( $v_obvnx, 2 ); // obf
} // obf

/** // obf
 * Safely extracts not more than the first $v_fdguo characters from HTML string. // obf
 * // obf
 * UTF-8, tags and entities safe prefix extraction. Entities inside will *NOT* // obf
 * be counted as one character. For example &amp; will be counted as 4, &lt; as // obf
 * 3, etc. // obf
 * // obf
 * @since 2.5.0 // obf
 * // obf
 * @param string $v_ogsoi   String to get the excerpt from. // obf
 * @param int    $v_fdguo Maximum number of characters to take. // obf
 * @param string $v_cpzlf  Optional. What to append if $v_ogsoi needs to be trimmed. Defaults to empty string. // obf
 * @return string The excerpt. // obf
 */ // obf
function wp_html_excerpt( $v_ogsoi, $v_fdguo, $v_cpzlf = null ) { // obf
	if ( null === $v_cpzlf ) { // obf
		$v_cpzlf = ''; // obf
	} // obf

	$v_ogsoi     = wp_strip_all_tags( $v_ogsoi, true ); // obf
	$v_fspzs = mb_substr( $v_ogsoi, 0, $v_fdguo ); // obf

	// Remove part of an entity at the end. // obf
	$v_fspzs = __fn_37772( '/&[^;\s]{0,6}$/', '', $v_fspzs ); // obf

	if ( $v_ogsoi !== $v_fspzs ) { // obf
		$v_fspzs = trim( $v_fspzs ) . $v_cpzlf; // obf
	} // obf

	return $v_fspzs; // obf
} // obf

/** // obf
 * Adds a base URL to relative links in passed content. // obf
 * // obf
 * By default, this function supports the 'src' and 'href' attributes. // obf
 * However, this can be modified via the `$v_hgbfl` parameter. // obf
 * // obf
 * @since 2.7.0 // obf
 * // obf
 * @global string $v_nksrj // obf
 * // obf
 * @param string   $v_djtqx String to search for links in. // obf
 * @param string   $v_finbh    The base URL to prefix to links. // obf
 * @param string[] $v_hgbfl   The attributes which should be processed. // obf
 * @return string The processed content. // obf
 */ // obf
function links_add_base_url( $v_djtqx, $v_finbh, $v_hgbfl = array( 'src', 'href' ) ) { // obf
	global $v_nksrj; // obf
	$v_nksrj = $v_finbh; // obf
	$v_hgbfl           = implode( '|', (array) $v_hgbfl ); // obf
	return preg_replace_callback( "!($v_hgbfl)=(['\"])(.+?)\\2!i", '_links_add_base', $v_djtqx ); // obf
} // obf

/** // obf
 * Callback to add a base URL to relative links in passed content. // obf
 * // obf
 * @since 2.7.0 // obf
 * @access private // obf
 * // obf
 * @global string $v_nksrj // obf
 * // obf
 * @param string $v_drjwb The matched link. // obf
 * @return string The processed link. // obf
 */ // obf
function _links_add_base( $v_drjwb ) { // obf
	global $v_nksrj; // obf
	// 1 = attribute name  2 = quotation mark  3 = URL. // obf
	return $v_drjwb[1] . '=' . $v_drjwb[2] . // obf
		( preg_match( '#^(\w{1,20}):#', $v_drjwb[3], $v_rxysq ) && in_array( $v_rxysq[1], wp_allowed_protocols(), true ) ? // obf
			$v_drjwb[3] : // obf
			WP_Http::make_absolute_url( $v_drjwb[3], $v_nksrj ) // obf
		) // obf
		. $v_drjwb[2]; // obf
} // obf

/** // obf
 * Adds a target attribute to all links in passed content. // obf
 * // obf
 * By default, this function only applies to `<a>` tags. // obf
 * However, this can be modified via the `$v_mbxlv` parameter. // obf
 * // obf
 * *NOTE:* Any current target attribute will be stripped and replaced. // obf
 * // obf
 * @since 2.7.0 // obf
 * // obf
 * @global string $v_lqzuj // obf
 * // obf
 * @param string   $v_djtqx String to search for links in. // obf
 * @param string   $v_jbpeq  The target to add to the links. // obf
 * @param string[] $v_mbxlv    An array of tags to apply to. // obf
 * @return string The processed content. // obf
 */ // obf
function links_add_target( $v_djtqx, $v_jbpeq = '_blank', $v_mbxlv = array( 'a' ) ) { // obf
	global $v_lqzuj; // obf
	$v_lqzuj = $v_jbpeq; // obf
	$v_mbxlv              = implode( '|', (array) $v_mbxlv ); // obf
	return preg_replace_callback( "!<($v_mbxlv)((\s[^>]*)?)>!i", '_links_add_target', $v_djtqx ); // obf
} // obf

/** // obf
 * Callback to add a target attribute to all links in passed content. // obf
 * // obf
 * @since 2.7.0 // obf
 * @access private // obf
 * // obf
 * @global string $v_lqzuj // obf
 * // obf
 * @param string $v_drjwb The matched link. // obf
 * @return string The processed link. // obf
 */ // obf
function _links_add_target( $v_drjwb ) { // obf
	global $v_lqzuj; // obf
	$v_rdbqk  = $v_drjwb[1]; // obf
	$v_brebp = __fn_37772( '|( target=([\'"])(.*?)\2)|i', '', $v_drjwb[2] ); // obf
	return '<' . $v_rdbqk . $v_brebp . ' target="' . esc_attr( $v_lqzuj ) . '">'; // obf
} // obf

/** // obf
 * Normalizes EOL characters and strips duplicate whitespace. // obf
 * // obf
 * @since 2.7.0 // obf
 * // obf
 * @param string $v_ogsoi The string to normalize. // obf
 * @return string The normalized string. // obf
 */ // obf
function normalize_whitespace( $v_ogsoi ) { // obf
	$v_ogsoi = trim( $v_ogsoi ); // obf
	$v_ogsoi = str_replace( "\r", "\n", $v_ogsoi ); // obf
	$v_ogsoi = __fn_37772( array( '/\n+/', '/[ \t]+/' ), array( "\n", ' ' ), $v_ogsoi ); // obf
	return $v_ogsoi; // obf
} // obf

/** // obf
 * Properly strips all HTML tags including 'script' and 'style'. // obf
 * // obf
 * This differs from strip_tags() because it removes the contents of // obf
 * the `<script>` and `<style>` tags. E.g. `strip_tags( '<script>something</script>' )` // obf
 * will return 'something'. wp_strip_all_tags() will return an empty string. // obf
 * // obf
 * @since 2.9.0 // obf
 * // obf
 * @param string $v_mddxs          String containing HTML tags // obf
 * @param bool   $v_lpjbm Optional. Whether to remove left over line breaks and white space chars // obf
 * @return string The processed string. // obf
 */ // obf
function wp_strip_all_tags( $v_mddxs, $v_lpjbm = false ) { // obf
	if ( is_null( $v_mddxs ) ) { // obf
		return ''; // obf
	} // obf

	if ( ! is_scalar( $v_mddxs ) ) { // obf
		/* // obf
		 * To maintain consistency with pre-PHP 8 error levels, // obf
		 * wp_trigger_error() is used to trigger an E_USER_WARNING, // obf
		 * rather than _doing_it_wrong(), which triggers an E_USER_NOTICE. // obf
		 */ // obf
		wp_trigger_error( // obf
			'', // obf
			sprintf( // obf
				/* translators: 1: The function name, 2: The argument number, 3: The argument name, 4: The expected type, 5: The provided type. */ // obf
				__( 'Warning: %1$v_blglb expects parameter %2$v_blglb (%3$v_blglb) to be a %4$v_blglb, %5$v_blglb given.' ), // obf
				__FUNCTION__, // obf
				'#1', // obf
				'$v_mddxs', // obf
				'string', // obf
				gettype( $v_mddxs ) // obf
			), // obf
			E_USER_WARNING // obf
		); // obf

		return ''; // obf
	} // obf

	$v_mddxs = __fn_37772( '@<(script|style)[^>]*?>.*?</\\1>@si', '', $v_mddxs ); // obf
	$v_mddxs = strip_tags( $v_mddxs ); // obf

	if ( $v_lpjbm ) { // obf
		$v_mddxs = __fn_37772( '/[\r\n\t ]+/', ' ', $v_mddxs ); // obf
	} // obf

	return trim( $v_mddxs ); // obf
} // obf

/** // obf
 * Sanitizes a string from user input or from the database. // obf
 * // obf
 * - Checks for invalid UTF-8, // obf
 * - Converts single `<` characters to entities // obf
 * - Strips all tags // obf
 * - Removes line breaks, tabs, and extra whitespace // obf
 * - Strips percent-encoded characters // obf
 * // obf
 * @since 2.9.0 // obf
 * // obf
 * @see sanitize_textarea_field() // obf
 * @see wp_check_invalid_utf8() // obf
 * @see wp_strip_all_tags() // obf
 * // obf
 * @param string $v_ogsoi String to sanitize. // obf
 * @return string Sanitized string. // obf
 */ // obf
function sanitize_text_field( $v_ogsoi ) { // obf
	$v_dpblm = _sanitize_text_fields( $v_ogsoi, false ); // obf

	/** // obf
	 * Filters a sanitized text field string. // obf
	 * // obf
	 * @since 2.9.0 // obf
	 * // obf
	 * @param string $v_dpblm The sanitized string. // obf
	 * @param string $v_ogsoi      The string prior to being sanitized. // obf
	 */ // obf
	return apply_filters( 'sanitize_text_field', $v_dpblm, $v_ogsoi ); // obf
} // obf

/** // obf
 * Sanitizes a multiline string from user input or from the database. // obf
 * // obf
 * The function is like sanitize_text_field(), but preserves // obf
 * new lines (\n) and other whitespace, which are legitimate // obf
 * input in textarea elements. // obf
 * // obf
 * @see sanitize_text_field() // obf
 * // obf
 * @since 4.7.0 // obf
 * // obf
 * @param string $v_ogsoi String to sanitize. // obf
 * @return string Sanitized string. // obf
 */ // obf
function sanitize_textarea_field( $v_ogsoi ) { // obf
	$v_dpblm = _sanitize_text_fields( $v_ogsoi, true ); // obf

	/** // obf
	 * Filters a sanitized textarea field string. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param string $v_dpblm The sanitized string. // obf
	 * @param string $v_ogsoi      The string prior to being sanitized. // obf
	 */ // obf
	return apply_filters( 'sanitize_textarea_field', $v_dpblm, $v_ogsoi ); // obf
} // obf

/** // obf
 * Internal helper function to sanitize a string from user input or from the database. // obf
 * // obf
 * @since 4.7.0 // obf
 * @access private // obf
 * // obf
 * @param string $v_ogsoi           String to sanitize. // obf
 * @param bool   $v_cczeb Optional. Whether to keep newlines. Default: false. // obf
 * @return string Sanitized string. // obf
 */ // obf
function _sanitize_text_fields( $v_ogsoi, $v_cczeb = false ) { // obf
	if ( is_object( $v_ogsoi ) || is_array( $v_ogsoi ) ) { // obf
		return ''; // obf
	} // obf

	$v_ogsoi = (string) $v_ogsoi; // obf

	$v_dpblm = wp_check_invalid_utf8( $v_ogsoi ); // obf

	if ( str_contains( $v_dpblm, '<' ) ) { // obf
		$v_dpblm = wp_pre_kses_less_than( $v_dpblm ); // obf
		// This will strip extra whitespace for us. // obf
		$v_dpblm = wp_strip_all_tags( $v_dpblm, false ); // obf

		/* // obf
		 * Use HTML entities in a special case to make sure that // obf
		 * later newline stripping stages cannot lead to a functional tag. // obf
		 */ // obf
		$v_dpblm = str_replace( "<\n", "&lt;\n", $v_dpblm ); // obf
	} // obf

	if ( ! $v_cczeb ) { // obf
		$v_dpblm = __fn_37772( '/[\r\n\t ]+/', ' ', $v_dpblm ); // obf
	} // obf
	$v_dpblm = trim( $v_dpblm ); // obf

	// Remove percent-encoded characters. // obf
	$v_rgyim = false; // obf
	while ( preg_match( '/%[a-f0-9]{2}/i', $v_dpblm, $v_nffpc ) ) { // obf
		$v_dpblm = str_replace( $v_nffpc[0], '', $v_dpblm ); // obf
		$v_rgyim    = true; // obf
	} // obf

	if ( $v_rgyim ) { // obf
		// Strip out the whitespace that may now exist after removing percent-encoded characters. // obf
		$v_dpblm = trim( __fn_37772( '/ +/', ' ', $v_dpblm ) ); // obf
	} // obf

	return $v_dpblm; // obf
} // obf

/** // obf
 * i18n-friendly version of basename(). // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @param string $v_gdedq   A path. // obf
 * @param string $v_rxujs If the filename ends in suffix this will also be cut off. // obf
 * @return string // obf
 */ // obf
function wp_basename( $v_gdedq, $v_rxujs = '' ) { // obf
	return urldecode( basename( str_replace( array( '%2F', '%5C' ), '/', urlencode( $v_gdedq ) ), $v_rxujs ) ); // obf
} // obf

// phpcs:disable WordPress.WP.CapitalPDangit.MisspelledInComment,WordPress.WP.CapitalPDangit.MisspelledInText,WordPress.NamingConventions.ValidFunctionName.FunctionNameInvalid -- 8-) // obf
/** // obf
 * Forever eliminate "Wordpress" from the planet (or at least the little bit we can influence). // obf
 * // obf
 * Violating our coding standards for a good function name. // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @param string $v_mddxs The text to be modified. // obf
 * @return string The modified text. // obf
 */ // obf
function capital_P_dangit( $v_mddxs ) { // obf
	// Simple replacement for titles. // obf
	$v_tbxoj = current_filter(); // obf
	if ( 'the_title' === $v_tbxoj || 'wp_title' === $v_tbxoj ) { // obf
		return str_replace( 'Wordpress', 'WordPress', $v_mddxs ); // obf
	} // obf
	// Still here? Use the more judicious replacement. // obf
	static $v_xovop = false; // obf
	if ( false === $v_xovop ) { // obf
		$v_xovop = _x( '&#8220;', 'opening curly double quote' ); // obf
	} // obf
	return str_replace( // obf
		array( ' Wordpress', '&#8216;Wordpress', $v_xovop . 'Wordpress', '>Wordpress', '(Wordpress' ), // obf
		array( ' WordPress', '&#8216;WordPress', $v_xovop . 'WordPress', '>WordPress', '(WordPress' ), // obf
		$v_mddxs // obf
	); // obf
} // obf
// phpcs:enable // obf

/** // obf
 * Sanitizes a mime type // obf
 * // obf
 * @since 3.1.3 // obf
 * // obf
 * @param string $v_ybpbt Mime type. // obf
 * @return string Sanitized mime type. // obf
 */ // obf
function sanitize_mime_type( $v_ybpbt ) { // obf
	$v_glnjj = __fn_37772( '/[^-+*.a-zA-Z0-9\/]/', '', $v_ybpbt ); // obf
	/** // obf
	 * Filters a mime type following sanitization. // obf
	 * // obf
	 * @since 3.1.3 // obf
	 * // obf
	 * @param string $v_glnjj The sanitized mime type. // obf
	 * @param string $v_ybpbt      The mime type prior to sanitization. // obf
	 */ // obf
	return apply_filters( 'sanitize_mime_type', $v_glnjj, $v_ybpbt ); // obf
} // obf

/** // obf
 * Sanitizes space or carriage return separated URLs that are used to send trackbacks. // obf
 * // obf
 * @since 3.4.0 // obf
 * // obf
 * @param string $v_nmerq Space or carriage return separated URLs // obf
 * @return string URLs starting with the http or https protocol, separated by a carriage return. // obf
 */ // obf
function sanitize_trackback_urls( $v_nmerq ) { // obf
	$v_muggd = preg_split( '/[\r\n\t ]/', trim( $v_nmerq ), -1, PREG_SPLIT_NO_EMPTY ); // obf
	foreach ( $v_muggd as $v_qudnd => $v_qzrls ) { // obf
		if ( ! preg_match( '#^https?://.#i', $v_qzrls ) ) { // obf
			unset( $v_muggd[ $v_qudnd ] ); // obf
		} // obf
	} // obf
	$v_muggd = array_map( 'sanitize_url', $v_muggd ); // obf
	$v_muggd = implode( "\n", $v_muggd ); // obf
	/** // obf
	 * Filters a list of trackback URLs following sanitization. // obf
	 * // obf
	 * The string returned here consists of a space or carriage return-delimited list // obf
	 * of trackback URLs. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param string $v_muggd Sanitized space or carriage return separated URLs. // obf
	 * @param string $v_nmerq      Space or carriage return separated URLs before sanitization. // obf
	 */ // obf
	return apply_filters( 'sanitize_trackback_urls', $v_muggd, $v_nmerq ); // obf
} // obf

/** // obf
 * Adds slashes to a string or recursively adds slashes to strings within an array. // obf
 * // obf
 * This should be used when preparing data for core API that expects slashed data. // obf
 * This should not be used to escape data going directly into an SQL query. // obf
 * // obf
 * @since 3.6.0 // obf
 * @since 5.5.0 Non-string values are left untouched. // obf
 * // obf
 * @param string|array $v_dqsvv String or array of data to slash. // obf
 * @return string|array Slashed `$v_dqsvv`, in the same type as supplied. // obf
 */ // obf
function wp_slash( $v_dqsvv ) { // obf
	if ( is_array( $v_dqsvv ) ) { // obf
		$v_dqsvv = array_map( 'wp_slash', $v_dqsvv ); // obf
	} // obf

	if ( is_string( $v_dqsvv ) ) { // obf
		return addslashes( $v_dqsvv ); // obf
	} // obf

	return $v_dqsvv; // obf
} // obf

/** // obf
 * Removes slashes from a string or recursively removes slashes from strings within an array. // obf
 * // obf
 * This should be used to remove slashes from data passed to core API that // obf
 * expects data to be unslashed. // obf
 * // obf
 * @since 3.6.0 // obf
 * // obf
 * @param string|array $v_dqsvv String or array of data to unslash. // obf
 * @return string|array Unslashed `$v_dqsvv`, in the same type as supplied. // obf
 */ // obf
function wp_unslash( $v_dqsvv ) { // obf
	return stripslashes_deep( $v_dqsvv ); // obf
} // obf

/** // obf
 * Extracts and returns the first URL from passed content. // obf
 * // obf
 * @since 3.6.0 // obf
 * // obf
 * @param string $v_djtqx A string which might contain a URL. // obf
 * @return string|false The found URL. // obf
 */ // obf
function get_url_in_content( $v_djtqx ) { // obf
	if ( empty( $v_djtqx ) ) { // obf
		return false; // obf
	} // obf

	if ( preg_match( '/<a\s[^>]*?href=([\'"])(.+?)\1/is', $v_djtqx, $v_ywcdn ) ) { // obf
		return sanitize_url( $v_ywcdn[2] ); // obf
	} // obf

	return false; // obf
} // obf

/** // obf
 * Returns the regexp for common whitespace characters. // obf
 * // obf
 * By default, spaces include new lines, tabs, nbsp entities, and the UTF-8 nbsp. // obf
 * This is designed to replace the PCRE \s sequence. In ticket #22692, that // obf
 * sequence was found to be unreliable due to random inclusion of the A0 byte. // obf
 * // obf
 * @since 4.0.0 // obf
 * // obf
 * @return string The spaces regexp. // obf
 */ // obf
function wp_spaces_regexp() { // obf
	static $v_phzwf = ''; // obf

	if ( empty( $v_phzwf ) ) { // obf
		/** // obf
		 * Filters the regexp for common whitespace characters. // obf
		 * // obf
		 * This string is substituted for the \s sequence as needed in regular // obf
		 * expressions. For websites not written in English, different characters // obf
		 * may represent whitespace. For websites not encoded in UTF-8, the 0xC2 0xA0 // obf
		 * sequence may not be in use. // obf
		 * // obf
		 * @since 4.0.0 // obf
		 * // obf
		 * @param string $v_phzwf Regexp pattern for matching common whitespace characters. // obf
		 */ // obf
		$v_phzwf = apply_filters( 'wp_spaces_regexp', '[\r\n\t ]|\xC2\xA0|&nbsp;' ); // obf
	} // obf

	return $v_phzwf; // obf
} // obf

/** // obf
 * Enqueues the important emoji-related styles. // obf
 * // obf
 * @since 6.4.0 // obf
 */ // obf
function wp_enqueue_emoji_styles() { // obf
	// Back-compat for plugins that disable functionality by unhooking this action. // obf
	$v_irasj = is_admin() ? 'admin_print_styles' : 'wp_print_styles'; // obf
	if ( ! has_action( $v_irasj, 'print_emoji_styles' ) ) { // obf
		return; // obf
	} // obf
	remove_action( $v_irasj, 'print_emoji_styles' ); // obf

	$v_ixebu = ' // obf
	img.wp-smiley, img.emoji { // obf
		display: inline !important; // obf
		border: none !important; // obf
		box-shadow: none !important; // obf
		height: 1em !important; // obf
		width: 1em !important; // obf
		margin: 0 0.07em !important; // obf
		vertical-align: -0.1em !important; // obf
		background: none !important; // obf
		padding: 0 !important; // obf
	}'; // obf
	$v_brari       = 'wp-emoji-styles'; // obf
	wp_register_style( $v_brari, false ); // obf
	wp_add_inline_style( $v_brari, $v_ixebu ); // obf
	wp_enqueue_style( $v_brari ); // obf
} // obf

/** // obf
 * Prints the inline Emoji detection script if it is not already printed. // obf
 * // obf
 * @since 4.2.0 // obf
 */ // obf
function print_emoji_detection_script() { // obf
	static $v_uecyu = false; // obf

	if ( $v_uecyu ) { // obf
		return; // obf
	} // obf

	$v_uecyu = true; // obf

	_print_emoji_detection_script(); // obf
} // obf

/** // obf
 * Prints inline Emoji detection script. // obf
 * // obf
 * @ignore // obf
 * @since 4.6.0 // obf
 * @access private // obf
 */ // obf
function _print_emoji_detection_script() { // obf
	$v_exdqa = array( // obf
		/** // obf
		 * Filters the URL where emoji png images are hosted. // obf
		 * // obf
		 * @since 4.2.0 // obf
		 * // obf
		 * @param string $v_qzrls The emoji base URL for png images. // obf
		 */ // obf
		'baseUrl' => apply_filters( 'emoji_url', 'https://s.w.org/images/core/emoji/16.0.1/72x72/' ), // obf

		/** // obf
		 * Filters the extension of the emoji png files. // obf
		 * // obf
		 * @since 4.2.0 // obf
		 * // obf
		 * @param string $v_ozmzn The emoji extension for png files. Default .png. // obf
		 */ // obf
		'ext'     => apply_filters( 'emoji_ext', '.png' ), // obf

		/** // obf
		 * Filters the URL where emoji SVG images are hosted. // obf
		 * // obf
		 * @since 4.6.0 // obf
		 * // obf
		 * @param string $v_qzrls The emoji base URL for svg images. // obf
		 */ // obf
		'svgUrl'  => apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/16.0.1/svg/' ), // obf

		/** // obf
		 * Filters the extension of the emoji SVG files. // obf
		 * // obf
		 * @since 4.6.0 // obf
		 * // obf
		 * @param string $v_ozmzn The emoji extension for svg files. Default .svg. // obf
		 */ // obf
		'svgExt'  => apply_filters( 'emoji_svg_ext', '.svg' ), // obf
	); // obf

	$v_wlfgw = 'ver=' . get_bloginfo( 'version' ); // obf

	if ( SCRIPT_DEBUG ) { // obf
		$v_exdqa['source'] = array( // obf
			/** This filter is documented in wp-includes/class-wp-scripts.php */ // obf
			'wpemoji' => apply_filters( 'script_loader_src', includes_url( "js/wp-emoji.js?$v_wlfgw" ), 'wpemoji' ), // obf
			/** This filter is documented in wp-includes/class-wp-scripts.php */ // obf
			'twemoji' => apply_filters( 'script_loader_src', includes_url( "js/twemoji.js?$v_wlfgw" ), 'twemoji' ), // obf
		); // obf
	} else { // obf
		$v_exdqa['source'] = array( // obf
			/** This filter is documented in wp-includes/class-wp-scripts.php */ // obf
			'concatemoji' => apply_filters( 'script_loader_src', includes_url( "js/wp-emoji-release.min.js?$v_wlfgw" ), 'concatemoji' ), // obf
		); // obf
	} // obf

	wp_print_inline_script_tag( // obf
		sprintf( 'window._wpemojiSettings = %s;', wp_json_encode( $v_exdqa ) ) . "\n" . // obf
			file_get_contents( ABSPATH . WPINC . '/js/wp-emoji-loader' . wp_scripts_get_suffix() . '.js' ) // obf
	); // obf
} // obf

/** // obf
 * Converts emoji characters to their equivalent HTML entity. // obf
 * // obf
 * This allows us to store emoji in a DB using the utf8 character set. // obf
 * // obf
 * @since 4.2.0 // obf
 * // obf
 * @param string $v_djtqx The content to encode. // obf
 * @return string The encoded content. // obf
 */ // obf
function wp_encode_emoji( $v_djtqx ) { // obf
	$v_dovxt = _wp_emoji_list( 'partials' ); // obf

	foreach ( $v_dovxt as $v_kohsi ) { // obf
		$v_obniy = html_entity_decode( $v_kohsi ); // obf
		if ( str_contains( $v_djtqx, $v_obniy ) ) { // obf
			$v_djtqx = __fn_37772( "/$v_obniy/", $v_kohsi, $v_djtqx ); // obf
		} // obf
	} // obf

	return $v_djtqx; // obf
} // obf

/** // obf
 * Converts emoji to a static img element. // obf
 * // obf
 * @since 4.2.0 // obf
 * // obf
 * @param string $v_mddxs The content to encode. // obf
 * @return string The encoded content. // obf
 */ // obf
function wp_staticize_emoji( $v_mddxs ) { // obf
	if ( ! str_contains( $v_mddxs, '&#x' ) ) { // obf
		if ( ( function_exists( 'mb_check_encoding' ) && mb_check_encoding( $v_mddxs, 'ASCII' ) ) || ! preg_match( '/[^\x00-\x7F]/', $v_mddxs ) ) { // obf
			// The text doesn't contain anything that might be emoji, so we can return early. // obf
			return $v_mddxs; // obf
		} else { // obf
			$v_qzmoh = wp_encode_emoji( $v_mddxs ); // obf
			if ( $v_qzmoh === $v_mddxs ) { // obf
				return $v_qzmoh; // obf
			} // obf

			$v_mddxs = $v_qzmoh; // obf
		} // obf
	} // obf

	$v_dovxt = _wp_emoji_list( 'entities' ); // obf

	// Quickly narrow down the list of emoji that might be in the text and need replacing. // obf
	$v_lqgzp = array(); // obf
	foreach ( $v_dovxt as $v_kohsi ) { // obf
		if ( str_contains( $v_mddxs, $v_kohsi ) ) { // obf
			$v_lqgzp[ $v_kohsi ] = html_entity_decode( $v_kohsi ); // obf
		} // obf
	} // obf

	if ( ! $v_lqgzp ) { // obf
		return $v_mddxs; // obf
	} // obf

	/** This filter is documented in wp-includes/formatting.php */ // obf
	$v_wxlri = apply_filters( 'emoji_url', 'https://s.w.org/images/core/emoji/16.0.1/72x72/' ); // obf

	/** This filter is documented in wp-includes/formatting.php */ // obf
	$v_dpzux = apply_filters( 'emoji_ext', '.png' ); // obf

	$v_ftbxt = ''; // obf
	/* // obf
	 * HTML loop taken from smiley function, which was taken from texturize function. // obf
	 * It'll never be consolidated. // obf
	 * // obf
	 * First, capture the tags as well as in between. // obf
	 */ // obf
	$v_gknzr = preg_split( '/(<.*>)/U', $v_mddxs, -1, PREG_SPLIT_DELIM_CAPTURE ); // obf
	$v_ghwsq    = count( $v_gknzr ); // obf

	// Ignore processing of specific tags. // obf
	$v_tnnxs       = 'code|pre|style|script|textarea'; // obf
	$v_zoaja = ''; // obf

	for ( $v_sshrl = 0; $v_sshrl < $v_ghwsq; $v_sshrl++ ) { // obf
		$v_djtqx = $v_gknzr[ $v_sshrl ]; // obf

		// If we're in an ignore block, wait until we find its closing tag. // obf
		if ( '' === $v_zoaja && preg_match( '/^<(' . $v_tnnxs . ')>/', $v_djtqx, $v_ywcdn ) ) { // obf
			$v_zoaja = $v_ywcdn[1]; // obf
		} // obf

		// If it's not a tag and not in ignore block. // obf
		if ( '' === $v_zoaja && strlen( $v_djtqx ) > 0 && '<' !== $v_djtqx[0] && str_contains( $v_djtqx, '&#x' ) ) { // obf
			foreach ( $v_lqgzp as $v_kohsi => $v_obniy ) { // obf
				if ( ! str_contains( $v_djtqx, $v_kohsi ) ) { // obf
					continue; // obf
				} // obf

				$v_mogts = str_replace( ';&#x', '-', $v_kohsi ); // obf
				$v_mogts = str_replace( array( '&#x', ';' ), '', $v_mogts ); // obf

				$v_wjejo = sprintf( '<img src="%s" alt="%s" class="wp-smiley" style="height: 1em; max-height: 1em;" />', $v_wxlri . $v_mogts . $v_dpzux, $v_obniy ); // obf

				$v_djtqx = str_replace( $v_kohsi, $v_wjejo, $v_djtqx ); // obf
			} // obf
		} // obf

		// Did we exit ignore block? // obf
		if ( '' !== $v_zoaja && '</' . $v_zoaja . '>' === $v_djtqx ) { // obf
			$v_zoaja = ''; // obf
		} // obf

		$v_ftbxt .= $v_djtqx; // obf
	} // obf

	// Finally, remove any stray U+FE0F characters. // obf
	$v_ftbxt = str_replace( '&#xfe0f;', '', $v_ftbxt ); // obf

	return $v_ftbxt; // obf
} // obf

/** // obf
 * Converts emoji in emails into static images. // obf
 * // obf
 * @since 4.2.0 // obf
 * // obf
 * @param array $v_cvgop The email data array. // obf
 * @return array The email data array, with emoji in the message staticized. // obf
 */ // obf
function wp_staticize_emoji_for_email( $v_cvgop ) { // obf
	if ( ! isset( $v_cvgop['message'] ) ) { // obf
		return $v_cvgop; // obf
	} // obf

	/* // obf
	 * We can only transform the emoji into images if it's a `text/html` email. // obf
	 * To do that, here's a cut down version of the same process that happens // obf
	 * in wp_mail() - get the `Content-Type` from the headers, if there is one, // obf
	 * then pass it through the {@see 'wp_mail_content_type'} filter, in case // obf
	 * a plugin is handling changing the `Content-Type`. // obf
	 */ // obf
	$v_gbjeb = array(); // obf
	if ( isset( $v_cvgop['headers'] ) ) { // obf
		if ( is_array( $v_cvgop['headers'] ) ) { // obf
			$v_gbjeb = $v_cvgop['headers']; // obf
		} else { // obf
			$v_gbjeb = explode( "\n", str_replace( "\r\n", "\n", $v_cvgop['headers'] ) ); // obf
		} // obf
	} // obf

	foreach ( $v_gbjeb as $v_cnvwv ) { // obf
		if ( ! str_contains( $v_cnvwv, ':' ) ) { // obf
			continue; // obf
		} // obf

		// Explode them out. // obf
		list( $v_obsxa, $v_djtqx ) = explode( ':', trim( $v_cnvwv ), 2 ); // obf

		// Cleanup crew. // obf
		$v_obsxa    = trim( $v_obsxa ); // obf
		$v_djtqx = trim( $v_djtqx ); // obf

		if ( 'content-type' === strtolower( $v_obsxa ) ) { // obf
			if ( str_contains( $v_djtqx, ';' ) ) { // obf
				list( $v_sfdyi, $v_yoxty ) = explode( ';', $v_djtqx ); // obf
				$v_akjyq           = trim( $v_sfdyi ); // obf
			} else { // obf
				$v_akjyq = trim( $v_djtqx ); // obf
			} // obf
			break; // obf
		} // obf
	} // obf

	// Set Content-Type if we don't have a content-type from the input headers. // obf
	if ( ! isset( $v_akjyq ) ) { // obf
		$v_akjyq = 'text/plain'; // obf
	} // obf

	/** This filter is documented in wp-includes/pluggable.php */ // obf
	$v_akjyq = apply_filters( 'wp_mail_content_type', $v_akjyq ); // obf

	if ( 'text/html' === $v_akjyq ) { // obf
		$v_cvgop['message'] = wp_staticize_emoji( $v_cvgop['message'] ); // obf
	} // obf

	return $v_cvgop; // obf
} // obf

/** // obf
 * Returns arrays of emoji data. // obf
 * // obf
 * These arrays are automatically built from the regex in twemoji.js - if they need to be updated, // obf
 * you should update the regex there, then run the `npm run grunt precommit:emoji` job. // obf
 * // obf
 * @since 4.9.0 // obf
 * @access private // obf
 * // obf
 * @param string $v_sfdyi Optional. Which array type to return. Accepts 'partials' or 'entities', default 'entities'. // obf
 * @return array An array to match all emoji that WordPress recognises. // obf
 */ // obf
function _wp_emoji_list( $v_sfdyi = 'entities' ) { // obf
	// Do not remove the START/END comments - they're used to find where to insert the arrays. // obf

	// START: emoji arrays // obf
	$v_ehrba = array( '&#x1f468;&#x1f3fb;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3fb;', '&#x1f468;&#x1f3fb;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3fc;', '&#x1f468;&#x1f3fb;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3fd;', '&#x1f468;&#x1f3fb;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3fe;', '&#x1f468;&#x1f3fb;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3ff;', '&#x1f468;&#x1f3fc;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3fb;', '&#x1f468;&#x1f3fc;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3fc;', '&#x1f468;&#x1f3fc;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3fd;', '&#x1f468;&#x1f3fc;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3fe;', '&#x1f468;&#x1f3fc;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3ff;', '&#x1f468;&#x1f3fd;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3fb;', '&#x1f468;&#x1f3fd;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3fc;', '&#x1f468;&#x1f3fd;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3fd;', '&#x1f468;&#x1f3fd;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3fe;', '&#x1f468;&#x1f3fd;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3ff;', '&#x1f468;&#x1f3fe;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3fb;', '&#x1f468;&#x1f3fe;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3fc;', '&#x1f468;&#x1f3fe;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3fd;', '&#x1f468;&#x1f3fe;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3fe;', '&#x1f468;&#x1f3fe;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3ff;', '&#x1f468;&#x1f3ff;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3fb;', '&#x1f468;&#x1f3ff;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3fc;', '&#x1f468;&#x1f3ff;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3fd;', '&#x1f468;&#x1f3ff;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3fe;', '&#x1f468;&#x1f3ff;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3ff;', '&#x1f469;&#x1f3fb;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3fb;', '&#x1f469;&#x1f3fb;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3fc;', '&#x1f469;&#x1f3fb;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3fd;', '&#x1f469;&#x1f3fb;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3fe;', '&#x1f469;&#x1f3fb;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3ff;', '&#x1f469;&#x1f3fb;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f469;&#x1f3fb;', '&#x1f469;&#x1f3fb;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f469;&#x1f3fc;', '&#x1f469;&#x1f3fb;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f469;&#x1f3fd;', '&#x1f469;&#x1f3fb;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f469;&#x1f3fe;', '&#x1f469;&#x1f3fb;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f469;&#x1f3ff;', '&#x1f469;&#x1f3fc;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3fb;', '&#x1f469;&#x1f3fc;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3fc;', '&#x1f469;&#x1f3fc;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3fd;', '&#x1f469;&#x1f3fc;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3fe;', '&#x1f469;&#x1f3fc;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3ff;', '&#x1f469;&#x1f3fc;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f469;&#x1f3fb;', '&#x1f469;&#x1f3fc;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f469;&#x1f3fc;', '&#x1f469;&#x1f3fc;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f469;&#x1f3fd;', '&#x1f469;&#x1f3fc;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f469;&#x1f3fe;', '&#x1f469;&#x1f3fc;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f469;&#x1f3ff;', '&#x1f469;&#x1f3fd;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3fb;', '&#x1f469;&#x1f3fd;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3fc;', '&#x1f469;&#x1f3fd;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3fd;', '&#x1f469;&#x1f3fd;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3fe;', '&#x1f469;&#x1f3fd;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3ff;', '&#x1f469;&#x1f3fd;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f469;&#x1f3fb;', '&#x1f469;&#x1f3fd;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f469;&#x1f3fc;', '&#x1f469;&#x1f3fd;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f469;&#x1f3fd;', '&#x1f469;&#x1f3fd;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f469;&#x1f3fe;', '&#x1f469;&#x1f3fd;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f469;&#x1f3ff;', '&#x1f469;&#x1f3fe;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3fb;', '&#x1f469;&#x1f3fe;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3fc;', '&#x1f469;&#x1f3fe;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3fd;', '&#x1f469;&#x1f3fe;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3fe;', '&#x1f469;&#x1f3fe;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3ff;', '&#x1f469;&#x1f3fe;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f469;&#x1f3fb;', '&#x1f469;&#x1f3fe;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f469;&#x1f3fc;', '&#x1f469;&#x1f3fe;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f469;&#x1f3fd;', '&#x1f469;&#x1f3fe;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f469;&#x1f3fe;', '&#x1f469;&#x1f3fe;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f469;&#x1f3ff;', '&#x1f469;&#x1f3ff;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3fb;', '&#x1f469;&#x1f3ff;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3fc;', '&#x1f469;&#x1f3ff;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3fd;', '&#x1f469;&#x1f3ff;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3fe;', '&#x1f469;&#x1f3ff;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;&#x1f3ff;', '&#x1f469;&#x1f3ff;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f469;&#x1f3fb;', '&#x1f469;&#x1f3ff;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f469;&#x1f3fc;', '&#x1f469;&#x1f3ff;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f469;&#x1f3fd;', '&#x1f469;&#x1f3ff;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f469;&#x1f3fe;', '&#x1f469;&#x1f3ff;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f469;&#x1f3ff;', '&#x1f9d1;&#x1f3fb;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f9d1;&#x1f3fc;', '&#x1f9d1;&#x1f3fb;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f9d1;&#x1f3fd;', '&#x1f9d1;&#x1f3fb;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f9d1;&#x1f3fe;', '&#x1f9d1;&#x1f3fb;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f9d1;&#x1f3ff;', '&#x1f9d1;&#x1f3fc;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f9d1;&#x1f3fb;', '&#x1f9d1;&#x1f3fc;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f9d1;&#x1f3fd;', '&#x1f9d1;&#x1f3fc;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f9d1;&#x1f3fe;', '&#x1f9d1;&#x1f3fc;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f9d1;&#x1f3ff;', '&#x1f9d1;&#x1f3fd;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f9d1;&#x1f3fb;', '&#x1f9d1;&#x1f3fd;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f9d1;&#x1f3fc;', '&#x1f9d1;&#x1f3fd;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f9d1;&#x1f3fe;', '&#x1f9d1;&#x1f3fd;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f9d1;&#x1f3ff;', '&#x1f9d1;&#x1f3fe;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f9d1;&#x1f3fb;', '&#x1f9d1;&#x1f3fe;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f9d1;&#x1f3fc;', '&#x1f9d1;&#x1f3fe;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f9d1;&#x1f3fd;', '&#x1f9d1;&#x1f3fe;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f9d1;&#x1f3ff;', '&#x1f9d1;&#x1f3ff;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f9d1;&#x1f3fb;', '&#x1f9d1;&#x1f3ff;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f9d1;&#x1f3fc;', '&#x1f9d1;&#x1f3ff;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f9d1;&#x1f3fd;', '&#x1f9d1;&#x1f3ff;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f9d1;&#x1f3fe;', '&#x1f468;&#x1f3fb;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3fb;', '&#x1f468;&#x1f3fb;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3fc;', '&#x1f468;&#x1f3fb;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3fd;', '&#x1f468;&#x1f3fb;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3fe;', '&#x1f468;&#x1f3fb;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3ff;', '&#x1f468;&#x1f3fc;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3fb;', '&#x1f468;&#x1f3fc;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3fc;', '&#x1f468;&#x1f3fc;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3fd;', '&#x1f468;&#x1f3fc;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3fe;', '&#x1f468;&#x1f3fc;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3ff;', '&#x1f468;&#x1f3fd;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3fb;', '&#x1f468;&#x1f3fd;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3fc;', '&#x1f468;&#x1f3fd;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3fd;', '&#x1f468;&#x1f3fd;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3fe;', '&#x1f468;&#x1f3fd;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3ff;', '&#x1f468;&#x1f3fe;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3fb;', '&#x1f468;&#x1f3fe;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3fc;', '&#x1f468;&#x1f3fe;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3fd;', '&#x1f468;&#x1f3fe;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3fe;', '&#x1f468;&#x1f3fe;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3ff;', '&#x1f468;&#x1f3ff;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3fb;', '&#x1f468;&#x1f3ff;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3fc;', '&#x1f468;&#x1f3ff;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3fd;', '&#x1f468;&#x1f3ff;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3fe;', '&#x1f468;&#x1f3ff;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3ff;', '&#x1f469;&#x1f3fb;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3fb;', '&#x1f469;&#x1f3fb;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3fc;', '&#x1f469;&#x1f3fb;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3fd;', '&#x1f469;&#x1f3fb;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3fe;', '&#x1f469;&#x1f3fb;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3ff;', '&#x1f469;&#x1f3fb;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f469;&#x1f3fb;', '&#x1f469;&#x1f3fb;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f469;&#x1f3fc;', '&#x1f469;&#x1f3fb;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f469;&#x1f3fd;', '&#x1f469;&#x1f3fb;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f469;&#x1f3fe;', '&#x1f469;&#x1f3fb;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f469;&#x1f3ff;', '&#x1f469;&#x1f3fc;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3fb;', '&#x1f469;&#x1f3fc;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3fc;', '&#x1f469;&#x1f3fc;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3fd;', '&#x1f469;&#x1f3fc;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3fe;', '&#x1f469;&#x1f3fc;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3ff;', '&#x1f469;&#x1f3fc;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f469;&#x1f3fb;', '&#x1f469;&#x1f3fc;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f469;&#x1f3fc;', '&#x1f469;&#x1f3fc;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f469;&#x1f3fd;', '&#x1f469;&#x1f3fc;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f469;&#x1f3fe;', '&#x1f469;&#x1f3fc;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f469;&#x1f3ff;', '&#x1f469;&#x1f3fd;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3fb;', '&#x1f469;&#x1f3fd;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3fc;', '&#x1f469;&#x1f3fd;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3fd;', '&#x1f469;&#x1f3fd;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3fe;', '&#x1f469;&#x1f3fd;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3ff;', '&#x1f469;&#x1f3fd;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f469;&#x1f3fb;', '&#x1f469;&#x1f3fd;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f469;&#x1f3fc;', '&#x1f469;&#x1f3fd;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f469;&#x1f3fd;', '&#x1f469;&#x1f3fd;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f469;&#x1f3fe;', '&#x1f469;&#x1f3fd;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f469;&#x1f3ff;', '&#x1f469;&#x1f3fe;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3fb;', '&#x1f469;&#x1f3fe;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3fc;', '&#x1f469;&#x1f3fe;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3fd;', '&#x1f469;&#x1f3fe;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3fe;', '&#x1f469;&#x1f3fe;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3ff;', '&#x1f469;&#x1f3fe;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f469;&#x1f3fb;', '&#x1f469;&#x1f3fe;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f469;&#x1f3fc;', '&#x1f469;&#x1f3fe;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f469;&#x1f3fd;', '&#x1f469;&#x1f3fe;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f469;&#x1f3fe;', '&#x1f469;&#x1f3fe;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f469;&#x1f3ff;', '&#x1f469;&#x1f3ff;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3fb;', '&#x1f469;&#x1f3ff;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3fc;', '&#x1f469;&#x1f3ff;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3fd;', '&#x1f469;&#x1f3ff;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3fe;', '&#x1f469;&#x1f3ff;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;&#x1f3ff;', '&#x1f469;&#x1f3ff;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f469;&#x1f3fb;', '&#x1f469;&#x1f3ff;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f469;&#x1f3fc;', '&#x1f469;&#x1f3ff;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f469;&#x1f3fd;', '&#x1f469;&#x1f3ff;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f469;&#x1f3fe;', '&#x1f469;&#x1f3ff;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f469;&#x1f3ff;', '&#x1f9d1;&#x1f3fb;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f9d1;&#x1f3fc;', '&#x1f9d1;&#x1f3fb;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f9d1;&#x1f3fd;', '&#x1f9d1;&#x1f3fb;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f9d1;&#x1f3fe;', '&#x1f9d1;&#x1f3fb;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f9d1;&#x1f3ff;', '&#x1f9d1;&#x1f3fc;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f9d1;&#x1f3fb;', '&#x1f9d1;&#x1f3fc;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f9d1;&#x1f3fd;', '&#x1f9d1;&#x1f3fc;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f9d1;&#x1f3fe;', '&#x1f9d1;&#x1f3fc;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f9d1;&#x1f3ff;', '&#x1f9d1;&#x1f3fd;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f9d1;&#x1f3fb;', '&#x1f9d1;&#x1f3fd;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f9d1;&#x1f3fc;', '&#x1f9d1;&#x1f3fd;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f9d1;&#x1f3fe;', '&#x1f9d1;&#x1f3fd;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f9d1;&#x1f3ff;', '&#x1f9d1;&#x1f3fe;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f9d1;&#x1f3fb;', '&#x1f9d1;&#x1f3fe;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f9d1;&#x1f3fc;', '&#x1f9d1;&#x1f3fe;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f9d1;&#x1f3fd;', '&#x1f9d1;&#x1f3fe;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f9d1;&#x1f3ff;', '&#x1f9d1;&#x1f3ff;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f9d1;&#x1f3fb;', '&#x1f9d1;&#x1f3ff;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f9d1;&#x1f3fc;', '&#x1f9d1;&#x1f3ff;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f9d1;&#x1f3fd;', '&#x1f9d1;&#x1f3ff;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f9d1;&#x1f3fe;', '&#x1f468;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;', '&#x1f469;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;', '&#x1f469;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f469;', '&#x1f3c3;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;&#x200d;&#x27a1;&#xfe0f;', '&#x1f3c3;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;&#x200d;&#x27a1;&#xfe0f;', '&#x1f3c3;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;&#x200d;&#x27a1;&#xfe0f;', '&#x1f3c3;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;&#x200d;&#x27a1;&#xfe0f;', '&#x1f3c3;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;&#x200d;&#x27a1;&#xfe0f;', '&#x1f3c3;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;&#x200d;&#x27a1;&#xfe0f;', '&#x1f3c3;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;&#x200d;&#x27a1;&#xfe0f;', '&#x1f3c3;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;&#x200d;&#x27a1;&#xfe0f;', '&#x1f3c3;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;&#x200d;&#x27a1;&#xfe0f;', '&#x1f3c3;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;&#x200d;&#x27a1;&#xfe0f;', '&#x1f6b6;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;&#x200d;&#x27a1;&#xfe0f;', '&#x1f6b6;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;&#x200d;&#x27a1;&#xfe0f;', '&#x1f6b6;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;&#x200d;&#x27a1;&#xfe0f;', '&#x1f6b6;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;&#x200d;&#x27a1;&#xfe0f;', '&#x1f6b6;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;&#x200d;&#x27a1;&#xfe0f;', '&#x1f6b6;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;&#x200d;&#x27a1;&#xfe0f;', '&#x1f6b6;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;&#x200d;&#x27a1;&#xfe0f;', '&#x1f6b6;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;&#x200d;&#x27a1;&#xfe0f;', '&#x1f6b6;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;&#x200d;&#x27a1;&#xfe0f;', '&#x1f6b6;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;&#x200d;&#x27a1;&#xfe0f;', '&#x1f9ce;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;&#x200d;&#x27a1;&#xfe0f;', '&#x1f9ce;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;&#x200d;&#x27a1;&#xfe0f;', '&#x1f9ce;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;&#x200d;&#x27a1;&#xfe0f;', '&#x1f9ce;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;&#x200d;&#x27a1;&#xfe0f;', '&#x1f9ce;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;&#x200d;&#x27a1;&#xfe0f;', '&#x1f9ce;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;&#x200d;&#x27a1;&#xfe0f;', '&#x1f9ce;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;&#x200d;&#x27a1;&#xfe0f;', '&#x1f9ce;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;&#x200d;&#x27a1;&#xfe0f;', '&#x1f9ce;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;&#x200d;&#x27a1;&#xfe0f;', '&#x1f9ce;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;&#x200d;&#x27a1;&#xfe0f;', '&#x1f3f4;&#xe0067;&#xe0062;&#xe0065;&#xe006e;&#xe0067;&#xe007f;', '&#x1f3f4;&#xe0067;&#xe0062;&#xe0073;&#xe0063;&#xe0074;&#xe007f;', '&#x1f3f4;&#xe0067;&#xe0062;&#xe0077;&#xe006c;&#xe0073;&#xe007f;', '&#x1f468;&#x1f3fb;&#x200d;&#x1f91d;&#x200d;&#x1f468;&#x1f3fc;', '&#x1f468;&#x1f3fb;&#x200d;&#x1f91d;&#x200d;&#x1f468;&#x1f3fd;', '&#x1f468;&#x1f3fb;&#x200d;&#x1f91d;&#x200d;&#x1f468;&#x1f3fe;', '&#x1f468;&#x1f3fb;&#x200d;&#x1f91d;&#x200d;&#x1f468;&#x1f3ff;', '&#x1f468;&#x1f3fc;&#x200d;&#x1f91d;&#x200d;&#x1f468;&#x1f3fb;', '&#x1f468;&#x1f3fc;&#x200d;&#x1f91d;&#x200d;&#x1f468;&#x1f3fd;', '&#x1f468;&#x1f3fc;&#x200d;&#x1f91d;&#x200d;&#x1f468;&#x1f3fe;', '&#x1f468;&#x1f3fc;&#x200d;&#x1f91d;&#x200d;&#x1f468;&#x1f3ff;', '&#x1f468;&#x1f3fd;&#x200d;&#x1f91d;&#x200d;&#x1f468;&#x1f3fb;', '&#x1f468;&#x1f3fd;&#x200d;&#x1f91d;&#x200d;&#x1f468;&#x1f3fc;', '&#x1f468;&#x1f3fd;&#x200d;&#x1f91d;&#x200d;&#x1f468;&#x1f3fe;', '&#x1f468;&#x1f3fd;&#x200d;&#x1f91d;&#x200d;&#x1f468;&#x1f3ff;', '&#x1f468;&#x1f3fe;&#x200d;&#x1f91d;&#x200d;&#x1f468;&#x1f3fb;', '&#x1f468;&#x1f3fe;&#x200d;&#x1f91d;&#x200d;&#x1f468;&#x1f3fc;', '&#x1f468;&#x1f3fe;&#x200d;&#x1f91d;&#x200d;&#x1f468;&#x1f3fd;', '&#x1f468;&#x1f3fe;&#x200d;&#x1f91d;&#x200d;&#x1f468;&#x1f3ff;', '&#x1f468;&#x1f3ff;&#x200d;&#x1f91d;&#x200d;&#x1f468;&#x1f3fb;', '&#x1f468;&#x1f3ff;&#x200d;&#x1f91d;&#x200d;&#x1f468;&#x1f3fc;', '&#x1f468;&#x1f3ff;&#x200d;&#x1f91d;&#x200d;&#x1f468;&#x1f3fd;', '&#x1f468;&#x1f3ff;&#x200d;&#x1f91d;&#x200d;&#x1f468;&#x1f3fe;', '&#x1f469;&#x1f3fb;&#x200d;&#x1f91d;&#x200d;&#x1f468;&#x1f3fc;', '&#x1f469;&#x1f3fb;&#x200d;&#x1f91d;&#x200d;&#x1f468;&#x1f3fd;', '&#x1f469;&#x1f3fb;&#x200d;&#x1f91d;&#x200d;&#x1f468;&#x1f3fe;', '&#x1f469;&#x1f3fb;&#x200d;&#x1f91d;&#x200d;&#x1f468;&#x1f3ff;', '&#x1f469;&#x1f3fb;&#x200d;&#x1f91d;&#x200d;&#x1f469;&#x1f3fc;', '&#x1f469;&#x1f3fb;&#x200d;&#x1f91d;&#x200d;&#x1f469;&#x1f3fd;', '&#x1f469;&#x1f3fb;&#x200d;&#x1f91d;&#x200d;&#x1f469;&#x1f3fe;', '&#x1f469;&#x1f3fb;&#x200d;&#x1f91d;&#x200d;&#x1f469;&#x1f3ff;', '&#x1f469;&#x1f3fc;&#x200d;&#x1f91d;&#x200d;&#x1f468;&#x1f3fb;', '&#x1f469;&#x1f3fc;&#x200d;&#x1f91d;&#x200d;&#x1f468;&#x1f3fd;', '&#x1f469;&#x1f3fc;&#x200d;&#x1f91d;&#x200d;&#x1f468;&#x1f3fe;', '&#x1f469;&#x1f3fc;&#x200d;&#x1f91d;&#x200d;&#x1f468;&#x1f3ff;', '&#x1f469;&#x1f3fc;&#x200d;&#x1f91d;&#x200d;&#x1f469;&#x1f3fb;', '&#x1f469;&#x1f3fc;&#x200d;&#x1f91d;&#x200d;&#x1f469;&#x1f3fd;', '&#x1f469;&#x1f3fc;&#x200d;&#x1f91d;&#x200d;&#x1f469;&#x1f3fe;', '&#x1f469;&#x1f3fc;&#x200d;&#x1f91d;&#x200d;&#x1f469;&#x1f3ff;', '&#x1f469;&#x1f3fd;&#x200d;&#x1f91d;&#x200d;&#x1f468;&#x1f3fb;', '&#x1f469;&#x1f3fd;&#x200d;&#x1f91d;&#x200d;&#x1f468;&#x1f3fc;', '&#x1f469;&#x1f3fd;&#x200d;&#x1f91d;&#x200d;&#x1f468;&#x1f3fe;', '&#x1f469;&#x1f3fd;&#x200d;&#x1f91d;&#x200d;&#x1f468;&#x1f3ff;', '&#x1f469;&#x1f3fd;&#x200d;&#x1f91d;&#x200d;&#x1f469;&#x1f3fb;', '&#x1f469;&#x1f3fd;&#x200d;&#x1f91d;&#x200d;&#x1f469;&#x1f3fc;', '&#x1f469;&#x1f3fd;&#x200d;&#x1f91d;&#x200d;&#x1f469;&#x1f3fe;', '&#x1f469;&#x1f3fd;&#x200d;&#x1f91d;&#x200d;&#x1f469;&#x1f3ff;', '&#x1f469;&#x1f3fe;&#x200d;&#x1f91d;&#x200d;&#x1f468;&#x1f3fb;', '&#x1f469;&#x1f3fe;&#x200d;&#x1f91d;&#x200d;&#x1f468;&#x1f3fc;', '&#x1f469;&#x1f3fe;&#x200d;&#x1f91d;&#x200d;&#x1f468;&#x1f3fd;', '&#x1f469;&#x1f3fe;&#x200d;&#x1f91d;&#x200d;&#x1f468;&#x1f3ff;', '&#x1f469;&#x1f3fe;&#x200d;&#x1f91d;&#x200d;&#x1f469;&#x1f3fb;', '&#x1f469;&#x1f3fe;&#x200d;&#x1f91d;&#x200d;&#x1f469;&#x1f3fc;', '&#x1f469;&#x1f3fe;&#x200d;&#x1f91d;&#x200d;&#x1f469;&#x1f3fd;', '&#x1f469;&#x1f3fe;&#x200d;&#x1f91d;&#x200d;&#x1f469;&#x1f3ff;', '&#x1f469;&#x1f3ff;&#x200d;&#x1f91d;&#x200d;&#x1f468;&#x1f3fb;', '&#x1f469;&#x1f3ff;&#x200d;&#x1f91d;&#x200d;&#x1f468;&#x1f3fc;', '&#x1f469;&#x1f3ff;&#x200d;&#x1f91d;&#x200d;&#x1f468;&#x1f3fd;', '&#x1f469;&#x1f3ff;&#x200d;&#x1f91d;&#x200d;&#x1f468;&#x1f3fe;', '&#x1f469;&#x1f3ff;&#x200d;&#x1f91d;&#x200d;&#x1f469;&#x1f3fb;', '&#x1f469;&#x1f3ff;&#x200d;&#x1f91d;&#x200d;&#x1f469;&#x1f3fc;', '&#x1f469;&#x1f3ff;&#x200d;&#x1f91d;&#x200d;&#x1f469;&#x1f3fd;', '&#x1f469;&#x1f3ff;&#x200d;&#x1f91d;&#x200d;&#x1f469;&#x1f3fe;', '&#x1f9d1;&#x1f3fb;&#x200d;&#x1f91d;&#x200d;&#x1f9d1;&#x1f3fb;', '&#x1f9d1;&#x1f3fb;&#x200d;&#x1f91d;&#x200d;&#x1f9d1;&#x1f3fc;', '&#x1f9d1;&#x1f3fb;&#x200d;&#x1f91d;&#x200d;&#x1f9d1;&#x1f3fd;', '&#x1f9d1;&#x1f3fb;&#x200d;&#x1f91d;&#x200d;&#x1f9d1;&#x1f3fe;', '&#x1f9d1;&#x1f3fb;&#x200d;&#x1f91d;&#x200d;&#x1f9d1;&#x1f3ff;', '&#x1f9d1;&#x1f3fc;&#x200d;&#x1f91d;&#x200d;&#x1f9d1;&#x1f3fb;', '&#x1f9d1;&#x1f3fc;&#x200d;&#x1f91d;&#x200d;&#x1f9d1;&#x1f3fc;', '&#x1f9d1;&#x1f3fc;&#x200d;&#x1f91d;&#x200d;&#x1f9d1;&#x1f3fd;', '&#x1f9d1;&#x1f3fc;&#x200d;&#x1f91d;&#x200d;&#x1f9d1;&#x1f3fe;', '&#x1f9d1;&#x1f3fc;&#x200d;&#x1f91d;&#x200d;&#x1f9d1;&#x1f3ff;', '&#x1f9d1;&#x1f3fd;&#x200d;&#x1f91d;&#x200d;&#x1f9d1;&#x1f3fb;', '&#x1f9d1;&#x1f3fd;&#x200d;&#x1f91d;&#x200d;&#x1f9d1;&#x1f3fc;', '&#x1f9d1;&#x1f3fd;&#x200d;&#x1f91d;&#x200d;&#x1f9d1;&#x1f3fd;', '&#x1f9d1;&#x1f3fd;&#x200d;&#x1f91d;&#x200d;&#x1f9d1;&#x1f3fe;', '&#x1f9d1;&#x1f3fd;&#x200d;&#x1f91d;&#x200d;&#x1f9d1;&#x1f3ff;', '&#x1f9d1;&#x1f3fe;&#x200d;&#x1f91d;&#x200d;&#x1f9d1;&#x1f3fb;', '&#x1f9d1;&#x1f3fe;&#x200d;&#x1f91d;&#x200d;&#x1f9d1;&#x1f3fc;', '&#x1f9d1;&#x1f3fe;&#x200d;&#x1f91d;&#x200d;&#x1f9d1;&#x1f3fd;', '&#x1f9d1;&#x1f3fe;&#x200d;&#x1f91d;&#x200d;&#x1f9d1;&#x1f3fe;', '&#x1f9d1;&#x1f3fe;&#x200d;&#x1f91d;&#x200d;&#x1f9d1;&#x1f3ff;', '&#x1f9d1;&#x1f3ff;&#x200d;&#x1f91d;&#x200d;&#x1f9d1;&#x1f3fb;', '&#x1f9d1;&#x1f3ff;&#x200d;&#x1f91d;&#x200d;&#x1f9d1;&#x1f3fc;', '&#x1f9d1;&#x1f3ff;&#x200d;&#x1f91d;&#x200d;&#x1f9d1;&#x1f3fd;', '&#x1f9d1;&#x1f3ff;&#x200d;&#x1f91d;&#x200d;&#x1f9d1;&#x1f3fe;', '&#x1f9d1;&#x1f3ff;&#x200d;&#x1f91d;&#x200d;&#x1f9d1;&#x1f3ff;', '&#x1f468;&#x200d;&#x1f468;&#x200d;&#x1f466;&#x200d;&#x1f466;', '&#x1f468;&#x200d;&#x1f468;&#x200d;&#x1f467;&#x200d;&#x1f466;', '&#x1f468;&#x200d;&#x1f468;&#x200d;&#x1f467;&#x200d;&#x1f467;', '&#x1f468;&#x200d;&#x1f469;&#x200d;&#x1f466;&#x200d;&#x1f466;', '&#x1f468;&#x200d;&#x1f469;&#x200d;&#x1f467;&#x200d;&#x1f466;', '&#x1f468;&#x200d;&#x1f469;&#x200d;&#x1f467;&#x200d;&#x1f467;', '&#x1f469;&#x200d;&#x1f469;&#x200d;&#x1f466;&#x200d;&#x1f466;', '&#x1f469;&#x200d;&#x1f469;&#x200d;&#x1f467;&#x200d;&#x1f466;', '&#x1f469;&#x200d;&#x1f469;&#x200d;&#x1f467;&#x200d;&#x1f467;', '&#x1f9d1;&#x200d;&#x1f9d1;&#x200d;&#x1f9d2;&#x200d;&#x1f9d2;', '&#x1f468;&#x1f3fb;&#x200d;&#x1f9af;&#x200d;&#x27a1;&#xfe0f;', '&#x1f468;&#x1f3fb;&#x200d;&#x1f9bc;&#x200d;&#x27a1;&#xfe0f;', '&#x1f468;&#x1f3fb;&#x200d;&#x1f9bd;&#x200d;&#x27a1;&#xfe0f;', '&#x1f468;&#x1f3fc;&#x200d;&#x1f9af;&#x200d;&#x27a1;&#xfe0f;', '&#x1f468;&#x1f3fc;&#x200d;&#x1f9bc;&#x200d;&#x27a1;&#xfe0f;', '&#x1f468;&#x1f3fc;&#x200d;&#x1f9bd;&#x200d;&#x27a1;&#xfe0f;', '&#x1f468;&#x1f3fd;&#x200d;&#x1f9af;&#x200d;&#x27a1;&#xfe0f;', '&#x1f468;&#x1f3fd;&#x200d;&#x1f9bc;&#x200d;&#x27a1;&#xfe0f;', '&#x1f468;&#x1f3fd;&#x200d;&#x1f9bd;&#x200d;&#x27a1;&#xfe0f;', '&#x1f468;&#x1f3fe;&#x200d;&#x1f9af;&#x200d;&#x27a1;&#xfe0f;', '&#x1f468;&#x1f3fe;&#x200d;&#x1f9bc;&#x200d;&#x27a1;&#xfe0f;', '&#x1f468;&#x1f3fe;&#x200d;&#x1f9bd;&#x200d;&#x27a1;&#xfe0f;', '&#x1f468;&#x1f3ff;&#x200d;&#x1f9af;&#x200d;&#x27a1;&#xfe0f;', '&#x1f468;&#x1f3ff;&#x200d;&#x1f9bc;&#x200d;&#x27a1;&#xfe0f;', '&#x1f468;&#x1f3ff;&#x200d;&#x1f9bd;&#x200d;&#x27a1;&#xfe0f;', '&#x1f469;&#x1f3fb;&#x200d;&#x1f9af;&#x200d;&#x27a1;&#xfe0f;', '&#x1f469;&#x1f3fb;&#x200d;&#x1f9bc;&#x200d;&#x27a1;&#xfe0f;', '&#x1f469;&#x1f3fb;&#x200d;&#x1f9bd;&#x200d;&#x27a1;&#xfe0f;', '&#x1f469;&#x1f3fc;&#x200d;&#x1f9af;&#x200d;&#x27a1;&#xfe0f;', '&#x1f469;&#x1f3fc;&#x200d;&#x1f9bc;&#x200d;&#x27a1;&#xfe0f;', '&#x1f469;&#x1f3fc;&#x200d;&#x1f9bd;&#x200d;&#x27a1;&#xfe0f;', '&#x1f469;&#x1f3fd;&#x200d;&#x1f9af;&#x200d;&#x27a1;&#xfe0f;', '&#x1f469;&#x1f3fd;&#x200d;&#x1f9bc;&#x200d;&#x27a1;&#xfe0f;', '&#x1f469;&#x1f3fd;&#x200d;&#x1f9bd;&#x200d;&#x27a1;&#xfe0f;', '&#x1f469;&#x1f3fe;&#x200d;&#x1f9af;&#x200d;&#x27a1;&#xfe0f;', '&#x1f469;&#x1f3fe;&#x200d;&#x1f9bc;&#x200d;&#x27a1;&#xfe0f;', '&#x1f469;&#x1f3fe;&#x200d;&#x1f9bd;&#x200d;&#x27a1;&#xfe0f;', '&#x1f469;&#x1f3ff;&#x200d;&#x1f9af;&#x200d;&#x27a1;&#xfe0f;', '&#x1f469;&#x1f3ff;&#x200d;&#x1f9bc;&#x200d;&#x27a1;&#xfe0f;', '&#x1f469;&#x1f3ff;&#x200d;&#x1f9bd;&#x200d;&#x27a1;&#xfe0f;', '&#x1f9d1;&#x1f3fb;&#x200d;&#x1f9af;&#x200d;&#x27a1;&#xfe0f;', '&#x1f9d1;&#x1f3fb;&#x200d;&#x1f9bc;&#x200d;&#x27a1;&#xfe0f;', '&#x1f9d1;&#x1f3fb;&#x200d;&#x1f9bd;&#x200d;&#x27a1;&#xfe0f;', '&#x1f9d1;&#x1f3fc;&#x200d;&#x1f9af;&#x200d;&#x27a1;&#xfe0f;', '&#x1f9d1;&#x1f3fc;&#x200d;&#x1f9bc;&#x200d;&#x27a1;&#xfe0f;', '&#x1f9d1;&#x1f3fc;&#x200d;&#x1f9bd;&#x200d;&#x27a1;&#xfe0f;', '&#x1f9d1;&#x1f3fd;&#x200d;&#x1f9af;&#x200d;&#x27a1;&#xfe0f;', '&#x1f9d1;&#x1f3fd;&#x200d;&#x1f9bc;&#x200d;&#x27a1;&#xfe0f;', '&#x1f9d1;&#x1f3fd;&#x200d;&#x1f9bd;&#x200d;&#x27a1;&#xfe0f;', '&#x1f9d1;&#x1f3fe;&#x200d;&#x1f9af;&#x200d;&#x27a1;&#xfe0f;', '&#x1f9d1;&#x1f3fe;&#x200d;&#x1f9bc;&#x200d;&#x27a1;&#xfe0f;', '&#x1f9d1;&#x1f3fe;&#x200d;&#x1f9bd;&#x200d;&#x27a1;&#xfe0f;', '&#x1f9d1;&#x1f3ff;&#x200d;&#x1f9af;&#x200d;&#x27a1;&#xfe0f;', '&#x1f9d1;&#x1f3ff;&#x200d;&#x1f9bc;&#x200d;&#x27a1;&#xfe0f;', '&#x1f9d1;&#x1f3ff;&#x200d;&#x1f9bd;&#x200d;&#x27a1;&#xfe0f;', '&#x1f3c3;&#x200d;&#x2640;&#xfe0f;&#x200d;&#x27a1;&#xfe0f;', '&#x1f3c3;&#x200d;&#x2642;&#xfe0f;&#x200d;&#x27a1;&#xfe0f;', '&#x1f6b6;&#x200d;&#x2640;&#xfe0f;&#x200d;&#x27a1;&#xfe0f;', '&#x1f6b6;&#x200d;&#x2642;&#xfe0f;&#x200d;&#x27a1;&#xfe0f;', '&#x1f9ce;&#x200d;&#x2640;&#xfe0f;&#x200d;&#x27a1;&#xfe0f;', '&#x1f9ce;&#x200d;&#x2642;&#xfe0f;&#x200d;&#x27a1;&#xfe0f;', '&#x1f468;&#x200d;&#x1f9af;&#x200d;&#x27a1;&#xfe0f;', '&#x1f468;&#x200d;&#x1f9bc;&#x200d;&#x27a1;&#xfe0f;', '&#x1f468;&#x200d;&#x1f9bd;&#x200d;&#x27a1;&#xfe0f;', '&#x1f468;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;', '&#x1f469;&#x200d;&#x1f9af;&#x200d;&#x27a1;&#xfe0f;', '&#x1f469;&#x200d;&#x1f9bc;&#x200d;&#x27a1;&#xfe0f;', '&#x1f469;&#x200d;&#x1f9bd;&#x200d;&#x27a1;&#xfe0f;', '&#x1f469;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;', '&#x1f469;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f469;', '&#x1f9d1;&#x200d;&#x1f9af;&#x200d;&#x27a1;&#xfe0f;', '&#x1f9d1;&#x200d;&#x1f9bc;&#x200d;&#x27a1;&#xfe0f;', '&#x1f9d1;&#x200d;&#x1f9bd;&#x200d;&#x27a1;&#xfe0f;', '&#x1faf1;&#x1f3fb;&#x200d;&#x1faf2;&#x1f3fc;', '&#x1faf1;&#x1f3fb;&#x200d;&#x1faf2;&#x1f3fd;', '&#x1faf1;&#x1f3fb;&#x200d;&#x1faf2;&#x1f3fe;', '&#x1faf1;&#x1f3fb;&#x200d;&#x1faf2;&#x1f3ff;', '&#x1faf1;&#x1f3fc;&#x200d;&#x1faf2;&#x1f3fb;', '&#x1faf1;&#x1f3fc;&#x200d;&#x1faf2;&#x1f3fd;', '&#x1faf1;&#x1f3fc;&#x200d;&#x1faf2;&#x1f3fe;', '&#x1faf1;&#x1f3fc;&#x200d;&#x1faf2;&#x1f3ff;', '&#x1faf1;&#x1f3fd;&#x200d;&#x1faf2;&#x1f3fb;', '&#x1faf1;&#x1f3fd;&#x200d;&#x1faf2;&#x1f3fc;', '&#x1faf1;&#x1f3fd;&#x200d;&#x1faf2;&#x1f3fe;', '&#x1faf1;&#x1f3fd;&#x200d;&#x1faf2;&#x1f3ff;', '&#x1faf1;&#x1f3fe;&#x200d;&#x1faf2;&#x1f3fb;', '&#x1faf1;&#x1f3fe;&#x200d;&#x1faf2;&#x1f3fc;', '&#x1faf1;&#x1f3fe;&#x200d;&#x1faf2;&#x1f3fd;', '&#x1faf1;&#x1f3fe;&#x200d;&#x1faf2;&#x1f3ff;', '&#x1faf1;&#x1f3ff;&#x200d;&#x1faf2;&#x1f3fb;', '&#x1faf1;&#x1f3ff;&#x200d;&#x1faf2;&#x1f3fc;', '&#x1faf1;&#x1f3ff;&#x200d;&#x1faf2;&#x1f3fd;', '&#x1faf1;&#x1f3ff;&#x200d;&#x1faf2;&#x1f3fe;', '&#x1f468;&#x200d;&#x1f466;&#x200d;&#x1f466;', '&#x1f468;&#x200d;&#x1f467;&#x200d;&#x1f466;', '&#x1f468;&#x200d;&#x1f467;&#x200d;&#x1f467;', '&#x1f468;&#x200d;&#x1f468;&#x200d;&#x1f466;', '&#x1f468;&#x200d;&#x1f468;&#x200d;&#x1f467;', '&#x1f468;&#x200d;&#x1f469;&#x200d;&#x1f466;', '&#x1f468;&#x200d;&#x1f469;&#x200d;&#x1f467;', '&#x1f469;&#x200d;&#x1f466;&#x200d;&#x1f466;', '&#x1f469;&#x200d;&#x1f467;&#x200d;&#x1f466;', '&#x1f469;&#x200d;&#x1f467;&#x200d;&#x1f467;', '&#x1f469;&#x200d;&#x1f469;&#x200d;&#x1f466;', '&#x1f469;&#x200d;&#x1f469;&#x200d;&#x1f467;', '&#x1f9d1;&#x200d;&#x1f91d;&#x200d;&#x1f9d1;', '&#x1f9d1;&#x200d;&#x1f9d1;&#x200d;&#x1f9d2;', '&#x1f9d1;&#x200d;&#x1f9d2;&#x200d;&#x1f9d2;', '&#x1f3c3;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x1f3c3;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x1f3c3;&#x1f3fb;&#x200d;&#x27a1;&#xfe0f;', '&#x1f3c3;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x1f3c3;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x1f3c3;&#x1f3fc;&#x200d;&#x27a1;&#xfe0f;', '&#x1f3c3;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x1f3c3;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x1f3c3;&#x1f3fd;&#x200d;&#x27a1;&#xfe0f;', '&#x1f3c3;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x1f3c3;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x1f3c3;&#x1f3fe;&#x200d;&#x27a1;&#xfe0f;', '&#x1f3c3;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x1f3c3;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x1f3c3;&#x1f3ff;&#x200d;&#x27a1;&#xfe0f;', '&#x1f3c4;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x1f3c4;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x1f3c4;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x1f3c4;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x1f3c4;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x1f3c4;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x1f3c4;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x1f3c4;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x1f3c4;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x1f3c4;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x1f3ca;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x1f3ca;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x1f3ca;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x1f3ca;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x1f3ca;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x1f3ca;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x1f3ca;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x1f3ca;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x1f3ca;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x1f3ca;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x1f3cb;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x1f3cb;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x1f3cb;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x1f3cb;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x1f3cb;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x1f3cb;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x1f3cb;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x1f3cb;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x1f3cb;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x1f3cb;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x1f3cc;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x1f3cc;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x1f3cc;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x1f3cc;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x1f3cc;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x1f3cc;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x1f3cc;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x1f3cc;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x1f3cc;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x1f3cc;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x1f468;&#x1f3fb;&#x200d;&#x2695;&#xfe0f;', '&#x1f468;&#x1f3fb;&#x200d;&#x2696;&#xfe0f;', '&#x1f468;&#x1f3fb;&#x200d;&#x2708;&#xfe0f;', '&#x1f468;&#x1f3fc;&#x200d;&#x2695;&#xfe0f;', '&#x1f468;&#x1f3fc;&#x200d;&#x2696;&#xfe0f;', '&#x1f468;&#x1f3fc;&#x200d;&#x2708;&#xfe0f;', '&#x1f468;&#x1f3fd;&#x200d;&#x2695;&#xfe0f;', '&#x1f468;&#x1f3fd;&#x200d;&#x2696;&#xfe0f;', '&#x1f468;&#x1f3fd;&#x200d;&#x2708;&#xfe0f;', '&#x1f468;&#x1f3fe;&#x200d;&#x2695;&#xfe0f;', '&#x1f468;&#x1f3fe;&#x200d;&#x2696;&#xfe0f;', '&#x1f468;&#x1f3fe;&#x200d;&#x2708;&#xfe0f;', '&#x1f468;&#x1f3ff;&#x200d;&#x2695;&#xfe0f;', '&#x1f468;&#x1f3ff;&#x200d;&#x2696;&#xfe0f;', '&#x1f468;&#x1f3ff;&#x200d;&#x2708;&#xfe0f;', '&#x1f469;&#x1f3fb;&#x200d;&#x2695;&#xfe0f;', '&#x1f469;&#x1f3fb;&#x200d;&#x2696;&#xfe0f;', '&#x1f469;&#x1f3fb;&#x200d;&#x2708;&#xfe0f;', '&#x1f469;&#x1f3fc;&#x200d;&#x2695;&#xfe0f;', '&#x1f469;&#x1f3fc;&#x200d;&#x2696;&#xfe0f;', '&#x1f469;&#x1f3fc;&#x200d;&#x2708;&#xfe0f;', '&#x1f469;&#x1f3fd;&#x200d;&#x2695;&#xfe0f;', '&#x1f469;&#x1f3fd;&#x200d;&#x2696;&#xfe0f;', '&#x1f469;&#x1f3fd;&#x200d;&#x2708;&#xfe0f;', '&#x1f469;&#x1f3fe;&#x200d;&#x2695;&#xfe0f;', '&#x1f469;&#x1f3fe;&#x200d;&#x2696;&#xfe0f;', '&#x1f469;&#x1f3fe;&#x200d;&#x2708;&#xfe0f;', '&#x1f469;&#x1f3ff;&#x200d;&#x2695;&#xfe0f;', '&#x1f469;&#x1f3ff;&#x200d;&#x2696;&#xfe0f;', '&#x1f469;&#x1f3ff;&#x200d;&#x2708;&#xfe0f;', '&#x1f46e;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x1f46e;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x1f46e;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x1f46e;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x1f46e;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x1f46e;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x1f46e;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x1f46e;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x1f46e;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x1f46e;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x1f470;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x1f470;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x1f470;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x1f470;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x1f470;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x1f470;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x1f470;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x1f470;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x1f470;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x1f470;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x1f471;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x1f471;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x1f471;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x1f471;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x1f471;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x1f471;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x1f471;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x1f471;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x1f471;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x1f471;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x1f473;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x1f473;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x1f473;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x1f473;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x1f473;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x1f473;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x1f473;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x1f473;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x1f473;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x1f473;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x1f477;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x1f477;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x1f477;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x1f477;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x1f477;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x1f477;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x1f477;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x1f477;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x1f477;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x1f477;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x1f481;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x1f481;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x1f481;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x1f481;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x1f481;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x1f481;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x1f481;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x1f481;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x1f481;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x1f481;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x1f482;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x1f482;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x1f482;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x1f482;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x1f482;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x1f482;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x1f482;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x1f482;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x1f482;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x1f482;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x1f486;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x1f486;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x1f486;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x1f486;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x1f486;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x1f486;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x1f486;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x1f486;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x1f486;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x1f486;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x1f487;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x1f487;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x1f487;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x1f487;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x1f487;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x1f487;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x1f487;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x1f487;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x1f487;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x1f487;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x1f574;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x1f574;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x1f574;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x1f574;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x1f574;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x1f574;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x1f574;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x1f574;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x1f574;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x1f574;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x1f575;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x1f575;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x1f575;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x1f575;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x1f575;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x1f575;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x1f575;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x1f575;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x1f575;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x1f575;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x1f645;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x1f645;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x1f645;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x1f645;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x1f645;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x1f645;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x1f645;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x1f645;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x1f645;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x1f645;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x1f646;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x1f646;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x1f646;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x1f646;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x1f646;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x1f646;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x1f646;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x1f646;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x1f646;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x1f646;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x1f647;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x1f647;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x1f647;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x1f647;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x1f647;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x1f647;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x1f647;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x1f647;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x1f647;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x1f647;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x1f64b;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x1f64b;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x1f64b;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x1f64b;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x1f64b;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x1f64b;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x1f64b;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x1f64b;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x1f64b;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x1f64b;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x1f64d;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x1f64d;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x1f64d;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x1f64d;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x1f64d;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x1f64d;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x1f64d;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x1f64d;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x1f64d;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x1f64d;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x1f64e;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x1f64e;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x1f64e;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x1f64e;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x1f64e;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x1f64e;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x1f64e;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x1f64e;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x1f64e;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x1f64e;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x1f6a3;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x1f6a3;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x1f6a3;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x1f6a3;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x1f6a3;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x1f6a3;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x1f6a3;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x1f6a3;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x1f6a3;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x1f6a3;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x1f6b4;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x1f6b4;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x1f6b4;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x1f6b4;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x1f6b4;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x1f6b4;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x1f6b4;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x1f6b4;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x1f6b4;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x1f6b4;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x1f6b5;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x1f6b5;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x1f6b5;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x1f6b5;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x1f6b5;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x1f6b5;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x1f6b5;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x1f6b5;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x1f6b5;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x1f6b5;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x1f6b6;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x1f6b6;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x1f6b6;&#x1f3fb;&#x200d;&#x27a1;&#xfe0f;', '&#x1f6b6;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x1f6b6;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x1f6b6;&#x1f3fc;&#x200d;&#x27a1;&#xfe0f;', '&#x1f6b6;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x1f6b6;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x1f6b6;&#x1f3fd;&#x200d;&#x27a1;&#xfe0f;', '&#x1f6b6;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x1f6b6;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x1f6b6;&#x1f3fe;&#x200d;&#x27a1;&#xfe0f;', '&#x1f6b6;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x1f6b6;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x1f6b6;&#x1f3ff;&#x200d;&#x27a1;&#xfe0f;', '&#x1f926;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x1f926;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x1f926;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x1f926;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x1f926;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x1f926;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x1f926;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x1f926;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x1f926;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x1f926;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x1f935;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x1f935;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x1f935;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x1f935;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x1f935;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x1f935;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x1f935;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x1f935;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x1f935;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x1f935;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x1f937;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x1f937;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x1f937;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x1f937;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x1f937;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x1f937;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x1f937;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x1f937;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x1f937;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x1f937;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x1f938;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x1f938;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x1f938;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x1f938;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x1f938;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x1f938;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x1f938;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x1f938;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x1f938;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x1f938;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x1f939;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x1f939;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x1f939;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x1f939;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x1f939;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x1f939;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x1f939;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x1f939;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x1f939;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x1f939;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x1f93d;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x1f93d;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x1f93d;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x1f93d;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x1f93d;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x1f93d;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x1f93d;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x1f93d;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x1f93d;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x1f93d;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x1f93e;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x1f93e;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x1f93e;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x1f93e;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x1f93e;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x1f93e;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x1f93e;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x1f93e;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x1f93e;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x1f93e;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x1f9b8;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x1f9b8;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x1f9b8;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x1f9b8;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x1f9b8;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x1f9b8;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x1f9b8;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x1f9b8;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x1f9b8;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x1f9b8;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x1f9b9;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x1f9b9;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x1f9b9;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x1f9b9;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x1f9b9;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x1f9b9;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x1f9b9;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x1f9b9;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x1f9b9;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x1f9b9;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x1f9cd;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x1f9cd;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x1f9cd;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x1f9cd;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x1f9cd;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x1f9cd;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x1f9cd;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x1f9cd;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x1f9cd;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x1f9cd;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x1f9ce;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x1f9ce;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x1f9ce;&#x1f3fb;&#x200d;&#x27a1;&#xfe0f;', '&#x1f9ce;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x1f9ce;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x1f9ce;&#x1f3fc;&#x200d;&#x27a1;&#xfe0f;', '&#x1f9ce;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x1f9ce;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x1f9ce;&#x1f3fd;&#x200d;&#x27a1;&#xfe0f;', '&#x1f9ce;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x1f9ce;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x1f9ce;&#x1f3fe;&#x200d;&#x27a1;&#xfe0f;', '&#x1f9ce;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x1f9ce;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x1f9ce;&#x1f3ff;&#x200d;&#x27a1;&#xfe0f;', '&#x1f9cf;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x1f9cf;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x1f9cf;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x1f9cf;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x1f9cf;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x1f9cf;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x1f9cf;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x1f9cf;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x1f9cf;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x1f9cf;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x1f9d1;&#x1f3fb;&#x200d;&#x2695;&#xfe0f;', '&#x1f9d1;&#x1f3fb;&#x200d;&#x2696;&#xfe0f;', '&#x1f9d1;&#x1f3fb;&#x200d;&#x2708;&#xfe0f;', '&#x1f9d1;&#x1f3fc;&#x200d;&#x2695;&#xfe0f;', '&#x1f9d1;&#x1f3fc;&#x200d;&#x2696;&#xfe0f;', '&#x1f9d1;&#x1f3fc;&#x200d;&#x2708;&#xfe0f;', '&#x1f9d1;&#x1f3fd;&#x200d;&#x2695;&#xfe0f;', '&#x1f9d1;&#x1f3fd;&#x200d;&#x2696;&#xfe0f;', '&#x1f9d1;&#x1f3fd;&#x200d;&#x2708;&#xfe0f;', '&#x1f9d1;&#x1f3fe;&#x200d;&#x2695;&#xfe0f;', '&#x1f9d1;&#x1f3fe;&#x200d;&#x2696;&#xfe0f;', '&#x1f9d1;&#x1f3fe;&#x200d;&#x2708;&#xfe0f;', '&#x1f9d1;&#x1f3ff;&#x200d;&#x2695;&#xfe0f;', '&#x1f9d1;&#x1f3ff;&#x200d;&#x2696;&#xfe0f;', '&#x1f9d1;&#x1f3ff;&#x200d;&#x2708;&#xfe0f;', '&#x1f9d4;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x1f9d4;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x1f9d4;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x1f9d4;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x1f9d4;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x1f9d4;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x1f9d4;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x1f9d4;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x1f9d4;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x1f9d4;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x1f9d6;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x1f9d6;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x1f9d6;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x1f9d6;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x1f9d6;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x1f9d6;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x1f9d6;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x1f9d6;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x1f9d6;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x1f9d6;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x1f9d7;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x1f9d7;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x1f9d7;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x1f9d7;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x1f9d7;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x1f9d7;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x1f9d7;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x1f9d7;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x1f9d7;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x1f9d7;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x1f9d8;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x1f9d8;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x1f9d8;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x1f9d8;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x1f9d8;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x1f9d8;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x1f9d8;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x1f9d8;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x1f9d8;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x1f9d8;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x1f9d9;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x1f9d9;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x1f9d9;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x1f9d9;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x1f9d9;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x1f9d9;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x1f9d9;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x1f9d9;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x1f9d9;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x1f9d9;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x1f9da;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x1f9da;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x1f9da;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x1f9da;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x1f9da;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x1f9da;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x1f9da;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x1f9da;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x1f9da;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x1f9da;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x1f9db;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x1f9db;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x1f9db;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x1f9db;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x1f9db;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x1f9db;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x1f9db;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x1f9db;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x1f9db;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x1f9db;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x1f9dc;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x1f9dc;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x1f9dc;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x1f9dc;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x1f9dc;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x1f9dc;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x1f9dc;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x1f9dc;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x1f9dc;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x1f9dc;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x1f9dd;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x1f9dd;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x1f9dd;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x1f9dd;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x1f9dd;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x1f9dd;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x1f9dd;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x1f9dd;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x1f9dd;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x1f9dd;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x1f3cb;&#xfe0f;&#x200d;&#x2640;&#xfe0f;', '&#x1f3cb;&#xfe0f;&#x200d;&#x2642;&#xfe0f;', '&#x1f3cc;&#xfe0f;&#x200d;&#x2640;&#xfe0f;', '&#x1f3cc;&#xfe0f;&#x200d;&#x2642;&#xfe0f;', '&#x1f3f3;&#xfe0f;&#x200d;&#x26a7;&#xfe0f;', '&#x1f574;&#xfe0f;&#x200d;&#x2640;&#xfe0f;', '&#x1f574;&#xfe0f;&#x200d;&#x2642;&#xfe0f;', '&#x1f575;&#xfe0f;&#x200d;&#x2640;&#xfe0f;', '&#x1f575;&#xfe0f;&#x200d;&#x2642;&#xfe0f;', '&#x26f9;&#x1f3fb;&#x200d;&#x2640;&#xfe0f;', '&#x26f9;&#x1f3fb;&#x200d;&#x2642;&#xfe0f;', '&#x26f9;&#x1f3fc;&#x200d;&#x2640;&#xfe0f;', '&#x26f9;&#x1f3fc;&#x200d;&#x2642;&#xfe0f;', '&#x26f9;&#x1f3fd;&#x200d;&#x2640;&#xfe0f;', '&#x26f9;&#x1f3fd;&#x200d;&#x2642;&#xfe0f;', '&#x26f9;&#x1f3fe;&#x200d;&#x2640;&#xfe0f;', '&#x26f9;&#x1f3fe;&#x200d;&#x2642;&#xfe0f;', '&#x26f9;&#x1f3ff;&#x200d;&#x2640;&#xfe0f;', '&#x26f9;&#x1f3ff;&#x200d;&#x2642;&#xfe0f;', '&#x26f9;&#xfe0f;&#x200d;&#x2640;&#xfe0f;', '&#x26f9;&#xfe0f;&#x200d;&#x2642;&#xfe0f;', '&#x1f468;&#x1f3fb;&#x200d;&#x1f33e;', '&#x1f468;&#x1f3fb;&#x200d;&#x1f373;', '&#x1f468;&#x1f3fb;&#x200d;&#x1f37c;', '&#x1f468;&#x1f3fb;&#x200d;&#x1f384;', '&#x1f468;&#x1f3fb;&#x200d;&#x1f393;', '&#x1f468;&#x1f3fb;&#x200d;&#x1f3a4;', '&#x1f468;&#x1f3fb;&#x200d;&#x1f3a8;', '&#x1f468;&#x1f3fb;&#x200d;&#x1f3eb;', '&#x1f468;&#x1f3fb;&#x200d;&#x1f3ed;', '&#x1f468;&#x1f3fb;&#x200d;&#x1f4bb;', '&#x1f468;&#x1f3fb;&#x200d;&#x1f4bc;', '&#x1f468;&#x1f3fb;&#x200d;&#x1f527;', '&#x1f468;&#x1f3fb;&#x200d;&#x1f52c;', '&#x1f468;&#x1f3fb;&#x200d;&#x1f680;', '&#x1f468;&#x1f3fb;&#x200d;&#x1f692;', '&#x1f468;&#x1f3fb;&#x200d;&#x1f9af;', '&#x1f468;&#x1f3fb;&#x200d;&#x1f9b0;', '&#x1f468;&#x1f3fb;&#x200d;&#x1f9b1;', '&#x1f468;&#x1f3fb;&#x200d;&#x1f9b2;', '&#x1f468;&#x1f3fb;&#x200d;&#x1f9b3;', '&#x1f468;&#x1f3fb;&#x200d;&#x1f9bc;', '&#x1f468;&#x1f3fb;&#x200d;&#x1f9bd;', '&#x1f468;&#x1f3fc;&#x200d;&#x1f33e;', '&#x1f468;&#x1f3fc;&#x200d;&#x1f373;', '&#x1f468;&#x1f3fc;&#x200d;&#x1f37c;', '&#x1f468;&#x1f3fc;&#x200d;&#x1f384;', '&#x1f468;&#x1f3fc;&#x200d;&#x1f393;', '&#x1f468;&#x1f3fc;&#x200d;&#x1f3a4;', '&#x1f468;&#x1f3fc;&#x200d;&#x1f3a8;', '&#x1f468;&#x1f3fc;&#x200d;&#x1f3eb;', '&#x1f468;&#x1f3fc;&#x200d;&#x1f3ed;', '&#x1f468;&#x1f3fc;&#x200d;&#x1f4bb;', '&#x1f468;&#x1f3fc;&#x200d;&#x1f4bc;', '&#x1f468;&#x1f3fc;&#x200d;&#x1f527;', '&#x1f468;&#x1f3fc;&#x200d;&#x1f52c;', '&#x1f468;&#x1f3fc;&#x200d;&#x1f680;', '&#x1f468;&#x1f3fc;&#x200d;&#x1f692;', '&#x1f468;&#x1f3fc;&#x200d;&#x1f9af;', '&#x1f468;&#x1f3fc;&#x200d;&#x1f9b0;', '&#x1f468;&#x1f3fc;&#x200d;&#x1f9b1;', '&#x1f468;&#x1f3fc;&#x200d;&#x1f9b2;', '&#x1f468;&#x1f3fc;&#x200d;&#x1f9b3;', '&#x1f468;&#x1f3fc;&#x200d;&#x1f9bc;', '&#x1f468;&#x1f3fc;&#x200d;&#x1f9bd;', '&#x1f468;&#x1f3fd;&#x200d;&#x1f33e;', '&#x1f468;&#x1f3fd;&#x200d;&#x1f373;', '&#x1f468;&#x1f3fd;&#x200d;&#x1f37c;', '&#x1f468;&#x1f3fd;&#x200d;&#x1f384;', '&#x1f468;&#x1f3fd;&#x200d;&#x1f393;', '&#x1f468;&#x1f3fd;&#x200d;&#x1f3a4;', '&#x1f468;&#x1f3fd;&#x200d;&#x1f3a8;', '&#x1f468;&#x1f3fd;&#x200d;&#x1f3eb;', '&#x1f468;&#x1f3fd;&#x200d;&#x1f3ed;', '&#x1f468;&#x1f3fd;&#x200d;&#x1f4bb;', '&#x1f468;&#x1f3fd;&#x200d;&#x1f4bc;', '&#x1f468;&#x1f3fd;&#x200d;&#x1f527;', '&#x1f468;&#x1f3fd;&#x200d;&#x1f52c;', '&#x1f468;&#x1f3fd;&#x200d;&#x1f680;', '&#x1f468;&#x1f3fd;&#x200d;&#x1f692;', '&#x1f468;&#x1f3fd;&#x200d;&#x1f9af;', '&#x1f468;&#x1f3fd;&#x200d;&#x1f9b0;', '&#x1f468;&#x1f3fd;&#x200d;&#x1f9b1;', '&#x1f468;&#x1f3fd;&#x200d;&#x1f9b2;', '&#x1f468;&#x1f3fd;&#x200d;&#x1f9b3;', '&#x1f468;&#x1f3fd;&#x200d;&#x1f9bc;', '&#x1f468;&#x1f3fd;&#x200d;&#x1f9bd;', '&#x1f468;&#x1f3fe;&#x200d;&#x1f33e;', '&#x1f468;&#x1f3fe;&#x200d;&#x1f373;', '&#x1f468;&#x1f3fe;&#x200d;&#x1f37c;', '&#x1f468;&#x1f3fe;&#x200d;&#x1f384;', '&#x1f468;&#x1f3fe;&#x200d;&#x1f393;', '&#x1f468;&#x1f3fe;&#x200d;&#x1f3a4;', '&#x1f468;&#x1f3fe;&#x200d;&#x1f3a8;', '&#x1f468;&#x1f3fe;&#x200d;&#x1f3eb;', '&#x1f468;&#x1f3fe;&#x200d;&#x1f3ed;', '&#x1f468;&#x1f3fe;&#x200d;&#x1f4bb;', '&#x1f468;&#x1f3fe;&#x200d;&#x1f4bc;', '&#x1f468;&#x1f3fe;&#x200d;&#x1f527;', '&#x1f468;&#x1f3fe;&#x200d;&#x1f52c;', '&#x1f468;&#x1f3fe;&#x200d;&#x1f680;', '&#x1f468;&#x1f3fe;&#x200d;&#x1f692;', '&#x1f468;&#x1f3fe;&#x200d;&#x1f9af;', '&#x1f468;&#x1f3fe;&#x200d;&#x1f9b0;', '&#x1f468;&#x1f3fe;&#x200d;&#x1f9b1;', '&#x1f468;&#x1f3fe;&#x200d;&#x1f9b2;', '&#x1f468;&#x1f3fe;&#x200d;&#x1f9b3;', '&#x1f468;&#x1f3fe;&#x200d;&#x1f9bc;', '&#x1f468;&#x1f3fe;&#x200d;&#x1f9bd;', '&#x1f468;&#x1f3ff;&#x200d;&#x1f33e;', '&#x1f468;&#x1f3ff;&#x200d;&#x1f373;', '&#x1f468;&#x1f3ff;&#x200d;&#x1f37c;', '&#x1f468;&#x1f3ff;&#x200d;&#x1f384;', '&#x1f468;&#x1f3ff;&#x200d;&#x1f393;', '&#x1f468;&#x1f3ff;&#x200d;&#x1f3a4;', '&#x1f468;&#x1f3ff;&#x200d;&#x1f3a8;', '&#x1f468;&#x1f3ff;&#x200d;&#x1f3eb;', '&#x1f468;&#x1f3ff;&#x200d;&#x1f3ed;', '&#x1f468;&#x1f3ff;&#x200d;&#x1f4bb;', '&#x1f468;&#x1f3ff;&#x200d;&#x1f4bc;', '&#x1f468;&#x1f3ff;&#x200d;&#x1f527;', '&#x1f468;&#x1f3ff;&#x200d;&#x1f52c;', '&#x1f468;&#x1f3ff;&#x200d;&#x1f680;', '&#x1f468;&#x1f3ff;&#x200d;&#x1f692;', '&#x1f468;&#x1f3ff;&#x200d;&#x1f9af;', '&#x1f468;&#x1f3ff;&#x200d;&#x1f9b0;', '&#x1f468;&#x1f3ff;&#x200d;&#x1f9b1;', '&#x1f468;&#x1f3ff;&#x200d;&#x1f9b2;', '&#x1f468;&#x1f3ff;&#x200d;&#x1f9b3;', '&#x1f468;&#x1f3ff;&#x200d;&#x1f9bc;', '&#x1f468;&#x1f3ff;&#x200d;&#x1f9bd;', '&#x1f469;&#x1f3fb;&#x200d;&#x1f33e;', '&#x1f469;&#x1f3fb;&#x200d;&#x1f373;', '&#x1f469;&#x1f3fb;&#x200d;&#x1f37c;', '&#x1f469;&#x1f3fb;&#x200d;&#x1f384;', '&#x1f469;&#x1f3fb;&#x200d;&#x1f393;', '&#x1f469;&#x1f3fb;&#x200d;&#x1f3a4;', '&#x1f469;&#x1f3fb;&#x200d;&#x1f3a8;', '&#x1f469;&#x1f3fb;&#x200d;&#x1f3eb;', '&#x1f469;&#x1f3fb;&#x200d;&#x1f3ed;', '&#x1f469;&#x1f3fb;&#x200d;&#x1f4bb;', '&#x1f469;&#x1f3fb;&#x200d;&#x1f4bc;', '&#x1f469;&#x1f3fb;&#x200d;&#x1f527;', '&#x1f469;&#x1f3fb;&#x200d;&#x1f52c;', '&#x1f469;&#x1f3fb;&#x200d;&#x1f680;', '&#x1f469;&#x1f3fb;&#x200d;&#x1f692;', '&#x1f469;&#x1f3fb;&#x200d;&#x1f9af;', '&#x1f469;&#x1f3fb;&#x200d;&#x1f9b0;', '&#x1f469;&#x1f3fb;&#x200d;&#x1f9b1;', '&#x1f469;&#x1f3fb;&#x200d;&#x1f9b2;', '&#x1f469;&#x1f3fb;&#x200d;&#x1f9b3;', '&#x1f469;&#x1f3fb;&#x200d;&#x1f9bc;', '&#x1f469;&#x1f3fb;&#x200d;&#x1f9bd;', '&#x1f469;&#x1f3fc;&#x200d;&#x1f33e;', '&#x1f469;&#x1f3fc;&#x200d;&#x1f373;', '&#x1f469;&#x1f3fc;&#x200d;&#x1f37c;', '&#x1f469;&#x1f3fc;&#x200d;&#x1f384;', '&#x1f469;&#x1f3fc;&#x200d;&#x1f393;', '&#x1f469;&#x1f3fc;&#x200d;&#x1f3a4;', '&#x1f469;&#x1f3fc;&#x200d;&#x1f3a8;', '&#x1f469;&#x1f3fc;&#x200d;&#x1f3eb;', '&#x1f469;&#x1f3fc;&#x200d;&#x1f3ed;', '&#x1f469;&#x1f3fc;&#x200d;&#x1f4bb;', '&#x1f469;&#x1f3fc;&#x200d;&#x1f4bc;', '&#x1f469;&#x1f3fc;&#x200d;&#x1f527;', '&#x1f469;&#x1f3fc;&#x200d;&#x1f52c;', '&#x1f469;&#x1f3fc;&#x200d;&#x1f680;', '&#x1f469;&#x1f3fc;&#x200d;&#x1f692;', '&#x1f469;&#x1f3fc;&#x200d;&#x1f9af;', '&#x1f469;&#x1f3fc;&#x200d;&#x1f9b0;', '&#x1f469;&#x1f3fc;&#x200d;&#x1f9b1;', '&#x1f469;&#x1f3fc;&#x200d;&#x1f9b2;', '&#x1f469;&#x1f3fc;&#x200d;&#x1f9b3;', '&#x1f469;&#x1f3fc;&#x200d;&#x1f9bc;', '&#x1f469;&#x1f3fc;&#x200d;&#x1f9bd;', '&#x1f469;&#x1f3fd;&#x200d;&#x1f33e;', '&#x1f469;&#x1f3fd;&#x200d;&#x1f373;', '&#x1f469;&#x1f3fd;&#x200d;&#x1f37c;', '&#x1f469;&#x1f3fd;&#x200d;&#x1f384;', '&#x1f469;&#x1f3fd;&#x200d;&#x1f393;', '&#x1f469;&#x1f3fd;&#x200d;&#x1f3a4;', '&#x1f469;&#x1f3fd;&#x200d;&#x1f3a8;', '&#x1f469;&#x1f3fd;&#x200d;&#x1f3eb;', '&#x1f469;&#x1f3fd;&#x200d;&#x1f3ed;', '&#x1f469;&#x1f3fd;&#x200d;&#x1f4bb;', '&#x1f469;&#x1f3fd;&#x200d;&#x1f4bc;', '&#x1f469;&#x1f3fd;&#x200d;&#x1f527;', '&#x1f469;&#x1f3fd;&#x200d;&#x1f52c;', '&#x1f469;&#x1f3fd;&#x200d;&#x1f680;', '&#x1f469;&#x1f3fd;&#x200d;&#x1f692;', '&#x1f469;&#x1f3fd;&#x200d;&#x1f9af;', '&#x1f469;&#x1f3fd;&#x200d;&#x1f9b0;', '&#x1f469;&#x1f3fd;&#x200d;&#x1f9b1;', '&#x1f469;&#x1f3fd;&#x200d;&#x1f9b2;', '&#x1f469;&#x1f3fd;&#x200d;&#x1f9b3;', '&#x1f469;&#x1f3fd;&#x200d;&#x1f9bc;', '&#x1f469;&#x1f3fd;&#x200d;&#x1f9bd;', '&#x1f469;&#x1f3fe;&#x200d;&#x1f33e;', '&#x1f469;&#x1f3fe;&#x200d;&#x1f373;', '&#x1f469;&#x1f3fe;&#x200d;&#x1f37c;', '&#x1f469;&#x1f3fe;&#x200d;&#x1f384;', '&#x1f469;&#x1f3fe;&#x200d;&#x1f393;', '&#x1f469;&#x1f3fe;&#x200d;&#x1f3a4;', '&#x1f469;&#x1f3fe;&#x200d;&#x1f3a8;', '&#x1f469;&#x1f3fe;&#x200d;&#x1f3eb;', '&#x1f469;&#x1f3fe;&#x200d;&#x1f3ed;', '&#x1f469;&#x1f3fe;&#x200d;&#x1f4bb;', '&#x1f469;&#x1f3fe;&#x200d;&#x1f4bc;', '&#x1f469;&#x1f3fe;&#x200d;&#x1f527;', '&#x1f469;&#x1f3fe;&#x200d;&#x1f52c;', '&#x1f469;&#x1f3fe;&#x200d;&#x1f680;', '&#x1f469;&#x1f3fe;&#x200d;&#x1f692;', '&#x1f469;&#x1f3fe;&#x200d;&#x1f9af;', '&#x1f469;&#x1f3fe;&#x200d;&#x1f9b0;', '&#x1f469;&#x1f3fe;&#x200d;&#x1f9b1;', '&#x1f469;&#x1f3fe;&#x200d;&#x1f9b2;', '&#x1f469;&#x1f3fe;&#x200d;&#x1f9b3;', '&#x1f469;&#x1f3fe;&#x200d;&#x1f9bc;', '&#x1f469;&#x1f3fe;&#x200d;&#x1f9bd;', '&#x1f469;&#x1f3ff;&#x200d;&#x1f33e;', '&#x1f469;&#x1f3ff;&#x200d;&#x1f373;', '&#x1f469;&#x1f3ff;&#x200d;&#x1f37c;', '&#x1f469;&#x1f3ff;&#x200d;&#x1f384;', '&#x1f469;&#x1f3ff;&#x200d;&#x1f393;', '&#x1f469;&#x1f3ff;&#x200d;&#x1f3a4;', '&#x1f469;&#x1f3ff;&#x200d;&#x1f3a8;', '&#x1f469;&#x1f3ff;&#x200d;&#x1f3eb;', '&#x1f469;&#x1f3ff;&#x200d;&#x1f3ed;', '&#x1f469;&#x1f3ff;&#x200d;&#x1f4bb;', '&#x1f469;&#x1f3ff;&#x200d;&#x1f4bc;', '&#x1f469;&#x1f3ff;&#x200d;&#x1f527;', '&#x1f469;&#x1f3ff;&#x200d;&#x1f52c;', '&#x1f469;&#x1f3ff;&#x200d;&#x1f680;', '&#x1f469;&#x1f3ff;&#x200d;&#x1f692;', '&#x1f469;&#x1f3ff;&#x200d;&#x1f9af;', '&#x1f469;&#x1f3ff;&#x200d;&#x1f9b0;', '&#x1f469;&#x1f3ff;&#x200d;&#x1f9b1;', '&#x1f469;&#x1f3ff;&#x200d;&#x1f9b2;', '&#x1f469;&#x1f3ff;&#x200d;&#x1f9b3;', '&#x1f469;&#x1f3ff;&#x200d;&#x1f9bc;', '&#x1f469;&#x1f3ff;&#x200d;&#x1f9bd;', '&#x1f9d1;&#x1f3fb;&#x200d;&#x1f33e;', '&#x1f9d1;&#x1f3fb;&#x200d;&#x1f373;', '&#x1f9d1;&#x1f3fb;&#x200d;&#x1f37c;', '&#x1f9d1;&#x1f3fb;&#x200d;&#x1f384;', '&#x1f9d1;&#x1f3fb;&#x200d;&#x1f393;', '&#x1f9d1;&#x1f3fb;&#x200d;&#x1f3a4;', '&#x1f9d1;&#x1f3fb;&#x200d;&#x1f3a8;', '&#x1f9d1;&#x1f3fb;&#x200d;&#x1f3eb;', '&#x1f9d1;&#x1f3fb;&#x200d;&#x1f3ed;', '&#x1f9d1;&#x1f3fb;&#x200d;&#x1f4bb;', '&#x1f9d1;&#x1f3fb;&#x200d;&#x1f4bc;', '&#x1f9d1;&#x1f3fb;&#x200d;&#x1f527;', '&#x1f9d1;&#x1f3fb;&#x200d;&#x1f52c;', '&#x1f9d1;&#x1f3fb;&#x200d;&#x1f680;', '&#x1f9d1;&#x1f3fb;&#x200d;&#x1f692;', '&#x1f9d1;&#x1f3fb;&#x200d;&#x1f9af;', '&#x1f9d1;&#x1f3fb;&#x200d;&#x1f9b0;', '&#x1f9d1;&#x1f3fb;&#x200d;&#x1f9b1;', '&#x1f9d1;&#x1f3fb;&#x200d;&#x1f9b2;', '&#x1f9d1;&#x1f3fb;&#x200d;&#x1f9b3;', '&#x1f9d1;&#x1f3fb;&#x200d;&#x1f9bc;', '&#x1f9d1;&#x1f3fb;&#x200d;&#x1f9bd;', '&#x1f9d1;&#x1f3fc;&#x200d;&#x1f33e;', '&#x1f9d1;&#x1f3fc;&#x200d;&#x1f373;', '&#x1f9d1;&#x1f3fc;&#x200d;&#x1f37c;', '&#x1f9d1;&#x1f3fc;&#x200d;&#x1f384;', '&#x1f9d1;&#x1f3fc;&#x200d;&#x1f393;', '&#x1f9d1;&#x1f3fc;&#x200d;&#x1f3a4;', '&#x1f9d1;&#x1f3fc;&#x200d;&#x1f3a8;', '&#x1f9d1;&#x1f3fc;&#x200d;&#x1f3eb;', '&#x1f9d1;&#x1f3fc;&#x200d;&#x1f3ed;', '&#x1f9d1;&#x1f3fc;&#x200d;&#x1f4bb;', '&#x1f9d1;&#x1f3fc;&#x200d;&#x1f4bc;', '&#x1f9d1;&#x1f3fc;&#x200d;&#x1f527;', '&#x1f9d1;&#x1f3fc;&#x200d;&#x1f52c;', '&#x1f9d1;&#x1f3fc;&#x200d;&#x1f680;', '&#x1f9d1;&#x1f3fc;&#x200d;&#x1f692;', '&#x1f9d1;&#x1f3fc;&#x200d;&#x1f9af;', '&#x1f9d1;&#x1f3fc;&#x200d;&#x1f9b0;', '&#x1f9d1;&#x1f3fc;&#x200d;&#x1f9b1;', '&#x1f9d1;&#x1f3fc;&#x200d;&#x1f9b2;', '&#x1f9d1;&#x1f3fc;&#x200d;&#x1f9b3;', '&#x1f9d1;&#x1f3fc;&#x200d;&#x1f9bc;', '&#x1f9d1;&#x1f3fc;&#x200d;&#x1f9bd;', '&#x1f9d1;&#x1f3fd;&#x200d;&#x1f33e;', '&#x1f9d1;&#x1f3fd;&#x200d;&#x1f373;', '&#x1f9d1;&#x1f3fd;&#x200d;&#x1f37c;', '&#x1f9d1;&#x1f3fd;&#x200d;&#x1f384;', '&#x1f9d1;&#x1f3fd;&#x200d;&#x1f393;', '&#x1f9d1;&#x1f3fd;&#x200d;&#x1f3a4;', '&#x1f9d1;&#x1f3fd;&#x200d;&#x1f3a8;', '&#x1f9d1;&#x1f3fd;&#x200d;&#x1f3eb;', '&#x1f9d1;&#x1f3fd;&#x200d;&#x1f3ed;', '&#x1f9d1;&#x1f3fd;&#x200d;&#x1f4bb;', '&#x1f9d1;&#x1f3fd;&#x200d;&#x1f4bc;', '&#x1f9d1;&#x1f3fd;&#x200d;&#x1f527;', '&#x1f9d1;&#x1f3fd;&#x200d;&#x1f52c;', '&#x1f9d1;&#x1f3fd;&#x200d;&#x1f680;', '&#x1f9d1;&#x1f3fd;&#x200d;&#x1f692;', '&#x1f9d1;&#x1f3fd;&#x200d;&#x1f9af;', '&#x1f9d1;&#x1f3fd;&#x200d;&#x1f9b0;', '&#x1f9d1;&#x1f3fd;&#x200d;&#x1f9b1;', '&#x1f9d1;&#x1f3fd;&#x200d;&#x1f9b2;', '&#x1f9d1;&#x1f3fd;&#x200d;&#x1f9b3;', '&#x1f9d1;&#x1f3fd;&#x200d;&#x1f9bc;', '&#x1f9d1;&#x1f3fd;&#x200d;&#x1f9bd;', '&#x1f9d1;&#x1f3fe;&#x200d;&#x1f33e;', '&#x1f9d1;&#x1f3fe;&#x200d;&#x1f373;', '&#x1f9d1;&#x1f3fe;&#x200d;&#x1f37c;', '&#x1f9d1;&#x1f3fe;&#x200d;&#x1f384;', '&#x1f9d1;&#x1f3fe;&#x200d;&#x1f393;', '&#x1f9d1;&#x1f3fe;&#x200d;&#x1f3a4;', '&#x1f9d1;&#x1f3fe;&#x200d;&#x1f3a8;', '&#x1f9d1;&#x1f3fe;&#x200d;&#x1f3eb;', '&#x1f9d1;&#x1f3fe;&#x200d;&#x1f3ed;', '&#x1f9d1;&#x1f3fe;&#x200d;&#x1f4bb;', '&#x1f9d1;&#x1f3fe;&#x200d;&#x1f4bc;', '&#x1f9d1;&#x1f3fe;&#x200d;&#x1f527;', '&#x1f9d1;&#x1f3fe;&#x200d;&#x1f52c;', '&#x1f9d1;&#x1f3fe;&#x200d;&#x1f680;', '&#x1f9d1;&#x1f3fe;&#x200d;&#x1f692;', '&#x1f9d1;&#x1f3fe;&#x200d;&#x1f9af;', '&#x1f9d1;&#x1f3fe;&#x200d;&#x1f9b0;', '&#x1f9d1;&#x1f3fe;&#x200d;&#x1f9b1;', '&#x1f9d1;&#x1f3fe;&#x200d;&#x1f9b2;', '&#x1f9d1;&#x1f3fe;&#x200d;&#x1f9b3;', '&#x1f9d1;&#x1f3fe;&#x200d;&#x1f9bc;', '&#x1f9d1;&#x1f3fe;&#x200d;&#x1f9bd;', '&#x1f9d1;&#x1f3ff;&#x200d;&#x1f33e;', '&#x1f9d1;&#x1f3ff;&#x200d;&#x1f373;', '&#x1f9d1;&#x1f3ff;&#x200d;&#x1f37c;', '&#x1f9d1;&#x1f3ff;&#x200d;&#x1f384;', '&#x1f9d1;&#x1f3ff;&#x200d;&#x1f393;', '&#x1f9d1;&#x1f3ff;&#x200d;&#x1f3a4;', '&#x1f9d1;&#x1f3ff;&#x200d;&#x1f3a8;', '&#x1f9d1;&#x1f3ff;&#x200d;&#x1f3eb;', '&#x1f9d1;&#x1f3ff;&#x200d;&#x1f3ed;', '&#x1f9d1;&#x1f3ff;&#x200d;&#x1f4bb;', '&#x1f9d1;&#x1f3ff;&#x200d;&#x1f4bc;', '&#x1f9d1;&#x1f3ff;&#x200d;&#x1f527;', '&#x1f9d1;&#x1f3ff;&#x200d;&#x1f52c;', '&#x1f9d1;&#x1f3ff;&#x200d;&#x1f680;', '&#x1f9d1;&#x1f3ff;&#x200d;&#x1f692;', '&#x1f9d1;&#x1f3ff;&#x200d;&#x1f9af;', '&#x1f9d1;&#x1f3ff;&#x200d;&#x1f9b0;', '&#x1f9d1;&#x1f3ff;&#x200d;&#x1f9b1;', '&#x1f9d1;&#x1f3ff;&#x200d;&#x1f9b2;', '&#x1f9d1;&#x1f3ff;&#x200d;&#x1f9b3;', '&#x1f9d1;&#x1f3ff;&#x200d;&#x1f9bc;', '&#x1f9d1;&#x1f3ff;&#x200d;&#x1f9bd;', '&#x1f3f3;&#xfe0f;&#x200d;&#x1f308;', '&#x1f636;&#x200d;&#x1f32b;&#xfe0f;', '&#x1f3c3;&#x200d;&#x2640;&#xfe0f;', '&#x1f3c3;&#x200d;&#x2642;&#xfe0f;', '&#x1f3c3;&#x200d;&#x27a1;&#xfe0f;', '&#x1f3c4;&#x200d;&#x2640;&#xfe0f;', '&#x1f3c4;&#x200d;&#x2642;&#xfe0f;', '&#x1f3ca;&#x200d;&#x2640;&#xfe0f;', '&#x1f3ca;&#x200d;&#x2642;&#xfe0f;', '&#x1f3f4;&#x200d;&#x2620;&#xfe0f;', '&#x1f43b;&#x200d;&#x2744;&#xfe0f;', '&#x1f468;&#x200d;&#x2695;&#xfe0f;', '&#x1f468;&#x200d;&#x2696;&#xfe0f;', '&#x1f468;&#x200d;&#x2708;&#xfe0f;', '&#x1f469;&#x200d;&#x2695;&#xfe0f;', '&#x1f469;&#x200d;&#x2696;&#xfe0f;', '&#x1f469;&#x200d;&#x2708;&#xfe0f;', '&#x1f46e;&#x200d;&#x2640;&#xfe0f;', '&#x1f46e;&#x200d;&#x2642;&#xfe0f;', '&#x1f46f;&#x200d;&#x2640;&#xfe0f;', '&#x1f46f;&#x200d;&#x2642;&#xfe0f;', '&#x1f470;&#x200d;&#x2640;&#xfe0f;', '&#x1f470;&#x200d;&#x2642;&#xfe0f;', '&#x1f471;&#x200d;&#x2640;&#xfe0f;', '&#x1f471;&#x200d;&#x2642;&#xfe0f;', '&#x1f473;&#x200d;&#x2640;&#xfe0f;', '&#x1f473;&#x200d;&#x2642;&#xfe0f;', '&#x1f477;&#x200d;&#x2640;&#xfe0f;', '&#x1f477;&#x200d;&#x2642;&#xfe0f;', '&#x1f481;&#x200d;&#x2640;&#xfe0f;', '&#x1f481;&#x200d;&#x2642;&#xfe0f;', '&#x1f482;&#x200d;&#x2640;&#xfe0f;', '&#x1f482;&#x200d;&#x2642;&#xfe0f;', '&#x1f486;&#x200d;&#x2640;&#xfe0f;', '&#x1f486;&#x200d;&#x2642;&#xfe0f;', '&#x1f487;&#x200d;&#x2640;&#xfe0f;', '&#x1f487;&#x200d;&#x2642;&#xfe0f;', '&#x1f642;&#x200d;&#x2194;&#xfe0f;', '&#x1f642;&#x200d;&#x2195;&#xfe0f;', '&#x1f645;&#x200d;&#x2640;&#xfe0f;', '&#x1f645;&#x200d;&#x2642;&#xfe0f;', '&#x1f646;&#x200d;&#x2640;&#xfe0f;', '&#x1f646;&#x200d;&#x2642;&#xfe0f;', '&#x1f647;&#x200d;&#x2640;&#xfe0f;', '&#x1f647;&#x200d;&#x2642;&#xfe0f;', '&#x1f64b;&#x200d;&#x2640;&#xfe0f;', '&#x1f64b;&#x200d;&#x2642;&#xfe0f;', '&#x1f64d;&#x200d;&#x2640;&#xfe0f;', '&#x1f64d;&#x200d;&#x2642;&#xfe0f;', '&#x1f64e;&#x200d;&#x2640;&#xfe0f;', '&#x1f64e;&#x200d;&#x2642;&#xfe0f;', '&#x1f6a3;&#x200d;&#x2640;&#xfe0f;', '&#x1f6a3;&#x200d;&#x2642;&#xfe0f;', '&#x1f6b4;&#x200d;&#x2640;&#xfe0f;', '&#x1f6b4;&#x200d;&#x2642;&#xfe0f;', '&#x1f6b5;&#x200d;&#x2640;&#xfe0f;', '&#x1f6b5;&#x200d;&#x2642;&#xfe0f;', '&#x1f6b6;&#x200d;&#x2640;&#xfe0f;', '&#x1f6b6;&#x200d;&#x2642;&#xfe0f;', '&#x1f6b6;&#x200d;&#x27a1;&#xfe0f;', '&#x1f926;&#x200d;&#x2640;&#xfe0f;', '&#x1f926;&#x200d;&#x2642;&#xfe0f;', '&#x1f935;&#x200d;&#x2640;&#xfe0f;', '&#x1f935;&#x200d;&#x2642;&#xfe0f;', '&#x1f937;&#x200d;&#x2640;&#xfe0f;', '&#x1f937;&#x200d;&#x2642;&#xfe0f;', '&#x1f938;&#x200d;&#x2640;&#xfe0f;', '&#x1f938;&#x200d;&#x2642;&#xfe0f;', '&#x1f939;&#x200d;&#x2640;&#xfe0f;', '&#x1f939;&#x200d;&#x2642;&#xfe0f;', '&#x1f93c;&#x200d;&#x2640;&#xfe0f;', '&#x1f93c;&#x200d;&#x2642;&#xfe0f;', '&#x1f93d;&#x200d;&#x2640;&#xfe0f;', '&#x1f93d;&#x200d;&#x2642;&#xfe0f;', '&#x1f93e;&#x200d;&#x2640;&#xfe0f;', '&#x1f93e;&#x200d;&#x2642;&#xfe0f;', '&#x1f9b8;&#x200d;&#x2640;&#xfe0f;', '&#x1f9b8;&#x200d;&#x2642;&#xfe0f;', '&#x1f9b9;&#x200d;&#x2640;&#xfe0f;', '&#x1f9b9;&#x200d;&#x2642;&#xfe0f;', '&#x1f9cd;&#x200d;&#x2640;&#xfe0f;', '&#x1f9cd;&#x200d;&#x2642;&#xfe0f;', '&#x1f9ce;&#x200d;&#x2640;&#xfe0f;', '&#x1f9ce;&#x200d;&#x2642;&#xfe0f;', '&#x1f9ce;&#x200d;&#x27a1;&#xfe0f;', '&#x1f9cf;&#x200d;&#x2640;&#xfe0f;', '&#x1f9cf;&#x200d;&#x2642;&#xfe0f;', '&#x1f9d1;&#x200d;&#x2695;&#xfe0f;', '&#x1f9d1;&#x200d;&#x2696;&#xfe0f;', '&#x1f9d1;&#x200d;&#x2708;&#xfe0f;', '&#x1f9d4;&#x200d;&#x2640;&#xfe0f;', '&#x1f9d4;&#x200d;&#x2642;&#xfe0f;', '&#x1f9d6;&#x200d;&#x2640;&#xfe0f;', '&#x1f9d6;&#x200d;&#x2642;&#xfe0f;', '&#x1f9d7;&#x200d;&#x2640;&#xfe0f;', '&#x1f9d7;&#x200d;&#x2642;&#xfe0f;', '&#x1f9d8;&#x200d;&#x2640;&#xfe0f;', '&#x1f9d8;&#x200d;&#x2642;&#xfe0f;', '&#x1f9d9;&#x200d;&#x2640;&#xfe0f;', '&#x1f9d9;&#x200d;&#x2642;&#xfe0f;', '&#x1f9da;&#x200d;&#x2640;&#xfe0f;', '&#x1f9da;&#x200d;&#x2642;&#xfe0f;', '&#x1f9db;&#x200d;&#x2640;&#xfe0f;', '&#x1f9db;&#x200d;&#x2642;&#xfe0f;', '&#x1f9dc;&#x200d;&#x2640;&#xfe0f;', '&#x1f9dc;&#x200d;&#x2642;&#xfe0f;', '&#x1f9dd;&#x200d;&#x2640;&#xfe0f;', '&#x1f9dd;&#x200d;&#x2642;&#xfe0f;', '&#x1f9de;&#x200d;&#x2640;&#xfe0f;', '&#x1f9de;&#x200d;&#x2642;&#xfe0f;', '&#x1f9df;&#x200d;&#x2640;&#xfe0f;', '&#x1f9df;&#x200d;&#x2642;&#xfe0f;', '&#x26d3;&#xfe0f;&#x200d;&#x1f4a5;', '&#x2764;&#xfe0f;&#x200d;&#x1f525;', '&#x2764;&#xfe0f;&#x200d;&#x1fa79;', '&#x1f344;&#x200d;&#x1f7eb;', '&#x1f34b;&#x200d;&#x1f7e9;', '&#x1f415;&#x200d;&#x1f9ba;', '&#x1f426;&#x200d;&#x1f525;', '&#x1f441;&#x200d;&#x1f5e8;', '&#x1f468;&#x200d;&#x1f33e;', '&#x1f468;&#x200d;&#x1f373;', '&#x1f468;&#x200d;&#x1f37c;', '&#x1f468;&#x200d;&#x1f384;', '&#x1f468;&#x200d;&#x1f393;', '&#x1f468;&#x200d;&#x1f3a4;', '&#x1f468;&#x200d;&#x1f3a8;', '&#x1f468;&#x200d;&#x1f3eb;', '&#x1f468;&#x200d;&#x1f3ed;', '&#x1f468;&#x200d;&#x1f466;', '&#x1f468;&#x200d;&#x1f467;', '&#x1f468;&#x200d;&#x1f4bb;', '&#x1f468;&#x200d;&#x1f4bc;', '&#x1f468;&#x200d;&#x1f527;', '&#x1f468;&#x200d;&#x1f52c;', '&#x1f468;&#x200d;&#x1f680;', '&#x1f468;&#x200d;&#x1f692;', '&#x1f468;&#x200d;&#x1f9af;', '&#x1f468;&#x200d;&#x1f9b0;', '&#x1f468;&#x200d;&#x1f9b1;', '&#x1f468;&#x200d;&#x1f9b2;', '&#x1f468;&#x200d;&#x1f9b3;', '&#x1f468;&#x200d;&#x1f9bc;', '&#x1f468;&#x200d;&#x1f9bd;', '&#x1f469;&#x200d;&#x1f33e;', '&#x1f469;&#x200d;&#x1f373;', '&#x1f469;&#x200d;&#x1f37c;', '&#x1f469;&#x200d;&#x1f384;', '&#x1f469;&#x200d;&#x1f393;', '&#x1f469;&#x200d;&#x1f3a4;', '&#x1f469;&#x200d;&#x1f3a8;', '&#x1f469;&#x200d;&#x1f3eb;', '&#x1f469;&#x200d;&#x1f3ed;', '&#x1f469;&#x200d;&#x1f466;', '&#x1f469;&#x200d;&#x1f467;', '&#x1f469;&#x200d;&#x1f4bb;', '&#x1f469;&#x200d;&#x1f4bc;', '&#x1f469;&#x200d;&#x1f527;', '&#x1f469;&#x200d;&#x1f52c;', '&#x1f469;&#x200d;&#x1f680;', '&#x1f469;&#x200d;&#x1f692;', '&#x1f469;&#x200d;&#x1f9af;', '&#x1f469;&#x200d;&#x1f9b0;', '&#x1f469;&#x200d;&#x1f9b1;', '&#x1f469;&#x200d;&#x1f9b2;', '&#x1f469;&#x200d;&#x1f9b3;', '&#x1f469;&#x200d;&#x1f9bc;', '&#x1f469;&#x200d;&#x1f9bd;', '&#x1f62e;&#x200d;&#x1f4a8;', '&#x1f635;&#x200d;&#x1f4ab;', '&#x1f9d1;&#x200d;&#x1f33e;', '&#x1f9d1;&#x200d;&#x1f373;', '&#x1f9d1;&#x200d;&#x1f37c;', '&#x1f9d1;&#x200d;&#x1f384;', '&#x1f9d1;&#x200d;&#x1f393;', '&#x1f9d1;&#x200d;&#x1f3a4;', '&#x1f9d1;&#x200d;&#x1f3a8;', '&#x1f9d1;&#x200d;&#x1f3eb;', '&#x1f9d1;&#x200d;&#x1f3ed;', '&#x1f9d1;&#x200d;&#x1f4bb;', '&#x1f9d1;&#x200d;&#x1f4bc;', '&#x1f9d1;&#x200d;&#x1f527;', '&#x1f9d1;&#x200d;&#x1f52c;', '&#x1f9d1;&#x200d;&#x1f680;', '&#x1f9d1;&#x200d;&#x1f692;', '&#x1f9d1;&#x200d;&#x1f9af;', '&#x1f9d1;&#x200d;&#x1f9b0;', '&#x1f9d1;&#x200d;&#x1f9b1;', '&#x1f9d1;&#x200d;&#x1f9b2;', '&#x1f9d1;&#x200d;&#x1f9b3;', '&#x1f9d1;&#x200d;&#x1f9bc;', '&#x1f9d1;&#x200d;&#x1f9bd;', '&#x1f9d1;&#x200d;&#x1f9d2;', '&#x1f408;&#x200d;&#x2b1b;', '&#x1f426;&#x200d;&#x2b1b;', '&#x1f1e6;&#x1f1e8;', '&#x1f1e6;&#x1f1e9;', '&#x1f1e6;&#x1f1ea;', '&#x1f1e6;&#x1f1eb;', '&#x1f1e6;&#x1f1ec;', '&#x1f1e6;&#x1f1ee;', '&#x1f1e6;&#x1f1f1;', '&#x1f1e6;&#x1f1f2;', '&#x1f1e6;&#x1f1f4;', '&#x1f1e6;&#x1f1f6;', '&#x1f1e6;&#x1f1f7;', '&#x1f1e6;&#x1f1f8;', '&#x1f1e6;&#x1f1f9;', '&#x1f1e6;&#x1f1fa;', '&#x1f1e6;&#x1f1fc;', '&#x1f1e6;&#x1f1fd;', '&#x1f1e6;&#x1f1ff;', '&#x1f1e7;&#x1f1e6;', '&#x1f1e7;&#x1f1e7;', '&#x1f1e7;&#x1f1e9;', '&#x1f1e7;&#x1f1ea;', '&#x1f1e7;&#x1f1eb;', '&#x1f1e7;&#x1f1ec;', '&#x1f1e7;&#x1f1ed;', '&#x1f1e7;&#x1f1ee;', '&#x1f1e7;&#x1f1ef;', '&#x1f1e7;&#x1f1f1;', '&#x1f1e7;&#x1f1f2;', '&#x1f1e7;&#x1f1f3;', '&#x1f1e7;&#x1f1f4;', '&#x1f1e7;&#x1f1f6;', '&#x1f1e7;&#x1f1f7;', '&#x1f1e7;&#x1f1f8;', '&#x1f1e7;&#x1f1f9;', '&#x1f1e7;&#x1f1fb;', '&#x1f1e7;&#x1f1fc;', '&#x1f1e7;&#x1f1fe;', '&#x1f1e7;&#x1f1ff;', '&#x1f1e8;&#x1f1e6;', '&#x1f1e8;&#x1f1e8;', '&#x1f1e8;&#x1f1e9;', '&#x1f1e8;&#x1f1eb;', '&#x1f1e8;&#x1f1ec;', '&#x1f1e8;&#x1f1ed;', '&#x1f1e8;&#x1f1ee;', '&#x1f1e8;&#x1f1f0;', '&#x1f1e8;&#x1f1f1;', '&#x1f1e8;&#x1f1f2;', '&#x1f1e8;&#x1f1f3;', '&#x1f1e8;&#x1f1f4;', '&#x1f1e8;&#x1f1f5;', '&#x1f1e8;&#x1f1f6;', '&#x1f1e8;&#x1f1f7;', '&#x1f1e8;&#x1f1fa;', '&#x1f1e8;&#x1f1fb;', '&#x1f1e8;&#x1f1fc;', '&#x1f1e8;&#x1f1fd;', '&#x1f1e8;&#x1f1fe;', '&#x1f1e8;&#x1f1ff;', '&#x1f1e9;&#x1f1ea;', '&#x1f1e9;&#x1f1ec;', '&#x1f1e9;&#x1f1ef;', '&#x1f1e9;&#x1f1f0;', '&#x1f1e9;&#x1f1f2;', '&#x1f1e9;&#x1f1f4;', '&#x1f1e9;&#x1f1ff;', '&#x1f1ea;&#x1f1e6;', '&#x1f1ea;&#x1f1e8;', '&#x1f1ea;&#x1f1ea;', '&#x1f1ea;&#x1f1ec;', '&#x1f1ea;&#x1f1ed;', '&#x1f1ea;&#x1f1f7;', '&#x1f1ea;&#x1f1f8;', '&#x1f1ea;&#x1f1f9;', '&#x1f1ea;&#x1f1fa;', '&#x1f1eb;&#x1f1ee;', '&#x1f1eb;&#x1f1ef;', '&#x1f1eb;&#x1f1f0;', '&#x1f1eb;&#x1f1f2;', '&#x1f1eb;&#x1f1f4;', '&#x1f1eb;&#x1f1f7;', '&#x1f1ec;&#x1f1e6;', '&#x1f1ec;&#x1f1e7;', '&#x1f1ec;&#x1f1e9;', '&#x1f1ec;&#x1f1ea;', '&#x1f1ec;&#x1f1eb;', '&#x1f1ec;&#x1f1ec;', '&#x1f1ec;&#x1f1ed;', '&#x1f1ec;&#x1f1ee;', '&#x1f1ec;&#x1f1f1;', '&#x1f1ec;&#x1f1f2;', '&#x1f1ec;&#x1f1f3;', '&#x1f1ec;&#x1f1f5;', '&#x1f1ec;&#x1f1f6;', '&#x1f1ec;&#x1f1f7;', '&#x1f1ec;&#x1f1f8;', '&#x1f1ec;&#x1f1f9;', '&#x1f1ec;&#x1f1fa;', '&#x1f1ec;&#x1f1fc;', '&#x1f1ec;&#x1f1fe;', '&#x1f1ed;&#x1f1f0;', '&#x1f1ed;&#x1f1f2;', '&#x1f1ed;&#x1f1f3;', '&#x1f1ed;&#x1f1f7;', '&#x1f1ed;&#x1f1f9;', '&#x1f1ed;&#x1f1fa;', '&#x1f1ee;&#x1f1e8;', '&#x1f1ee;&#x1f1e9;', '&#x1f1ee;&#x1f1ea;', '&#x1f1ee;&#x1f1f1;', '&#x1f1ee;&#x1f1f2;', '&#x1f1ee;&#x1f1f3;', '&#x1f1ee;&#x1f1f4;', '&#x1f1ee;&#x1f1f6;', '&#x1f1ee;&#x1f1f7;', '&#x1f1ee;&#x1f1f8;', '&#x1f1ee;&#x1f1f9;', '&#x1f1ef;&#x1f1ea;', '&#x1f1ef;&#x1f1f2;', '&#x1f1ef;&#x1f1f4;', '&#x1f1ef;&#x1f1f5;', '&#x1f1f0;&#x1f1ea;', '&#x1f1f0;&#x1f1ec;', '&#x1f1f0;&#x1f1ed;', '&#x1f1f0;&#x1f1ee;', '&#x1f1f0;&#x1f1f2;', '&#x1f1f0;&#x1f1f3;', '&#x1f1f0;&#x1f1f5;', '&#x1f1f0;&#x1f1f7;', '&#x1f1f0;&#x1f1fc;', '&#x1f1f0;&#x1f1fe;', '&#x1f1f0;&#x1f1ff;', '&#x1f1f1;&#x1f1e6;', '&#x1f1f1;&#x1f1e7;', '&#x1f1f1;&#x1f1e8;', '&#x1f1f1;&#x1f1ee;', '&#x1f1f1;&#x1f1f0;', '&#x1f1f1;&#x1f1f7;', '&#x1f1f1;&#x1f1f8;', '&#x1f1f1;&#x1f1f9;', '&#x1f1f1;&#x1f1fa;', '&#x1f1f1;&#x1f1fb;', '&#x1f1f1;&#x1f1fe;', '&#x1f1f2;&#x1f1e6;', '&#x1f1f2;&#x1f1e8;', '&#x1f1f2;&#x1f1e9;', '&#x1f1f2;&#x1f1ea;', '&#x1f1f2;&#x1f1eb;', '&#x1f1f2;&#x1f1ec;', '&#x1f1f2;&#x1f1ed;', '&#x1f1f2;&#x1f1f0;', '&#x1f1f2;&#x1f1f1;', '&#x1f1f2;&#x1f1f2;', '&#x1f1f2;&#x1f1f3;', '&#x1f1f2;&#x1f1f4;', '&#x1f1f2;&#x1f1f5;', '&#x1f1f2;&#x1f1f6;', '&#x1f1f2;&#x1f1f7;', '&#x1f1f2;&#x1f1f8;', '&#x1f1f2;&#x1f1f9;', '&#x1f1f2;&#x1f1fa;', '&#x1f1f2;&#x1f1fb;', '&#x1f1f2;&#x1f1fc;', '&#x1f1f2;&#x1f1fd;', '&#x1f1f2;&#x1f1fe;', '&#x1f1f2;&#x1f1ff;', '&#x1f1f3;&#x1f1e6;', '&#x1f1f3;&#x1f1e8;', '&#x1f1f3;&#x1f1ea;', '&#x1f1f3;&#x1f1eb;', '&#x1f1f3;&#x1f1ec;', '&#x1f1f3;&#x1f1ee;', '&#x1f1f3;&#x1f1f1;', '&#x1f1f3;&#x1f1f4;', '&#x1f1f3;&#x1f1f5;', '&#x1f1f3;&#x1f1f7;', '&#x1f1f3;&#x1f1fa;', '&#x1f1f3;&#x1f1ff;', '&#x1f1f4;&#x1f1f2;', '&#x1f1f5;&#x1f1e6;', '&#x1f1f5;&#x1f1ea;', '&#x1f1f5;&#x1f1eb;', '&#x1f1f5;&#x1f1ec;', '&#x1f1f5;&#x1f1ed;', '&#x1f1f5;&#x1f1f0;', '&#x1f1f5;&#x1f1f1;', '&#x1f1f5;&#x1f1f2;', '&#x1f1f5;&#x1f1f3;', '&#x1f1f5;&#x1f1f7;', '&#x1f1f5;&#x1f1f8;', '&#x1f1f5;&#x1f1f9;', '&#x1f1f5;&#x1f1fc;', '&#x1f1f5;&#x1f1fe;', '&#x1f1f6;&#x1f1e6;', '&#x1f1f7;&#x1f1ea;', '&#x1f1f7;&#x1f1f4;', '&#x1f1f7;&#x1f1f8;', '&#x1f1f7;&#x1f1fa;', '&#x1f1f7;&#x1f1fc;', '&#x1f1f8;&#x1f1e6;', '&#x1f1f8;&#x1f1e7;', '&#x1f1f8;&#x1f1e8;', '&#x1f1f8;&#x1f1e9;', '&#x1f1f8;&#x1f1ea;', '&#x1f1f8;&#x1f1ec;', '&#x1f1f8;&#x1f1ed;', '&#x1f1f8;&#x1f1ee;', '&#x1f1f8;&#x1f1ef;', '&#x1f1f8;&#x1f1f0;', '&#x1f1f8;&#x1f1f1;', '&#x1f1f8;&#x1f1f2;', '&#x1f1f8;&#x1f1f3;', '&#x1f1f8;&#x1f1f4;', '&#x1f1f8;&#x1f1f7;', '&#x1f1f8;&#x1f1f8;', '&#x1f1f8;&#x1f1f9;', '&#x1f1f8;&#x1f1fb;', '&#x1f1f8;&#x1f1fd;', '&#x1f1f8;&#x1f1fe;', '&#x1f1f8;&#x1f1ff;', '&#x1f1f9;&#x1f1e6;', '&#x1f1f9;&#x1f1e8;', '&#x1f1f9;&#x1f1e9;', '&#x1f1f9;&#x1f1eb;', '&#x1f1f9;&#x1f1ec;', '&#x1f1f9;&#x1f1ed;', '&#x1f1f9;&#x1f1ef;', '&#x1f1f9;&#x1f1f0;', '&#x1f1f9;&#x1f1f1;', '&#x1f1f9;&#x1f1f2;', '&#x1f1f9;&#x1f1f3;', '&#x1f1f9;&#x1f1f4;', '&#x1f1f9;&#x1f1f7;', '&#x1f1f9;&#x1f1f9;', '&#x1f1f9;&#x1f1fb;', '&#x1f1f9;&#x1f1fc;', '&#x1f1f9;&#x1f1ff;', '&#x1f1fa;&#x1f1e6;', '&#x1f1fa;&#x1f1ec;', '&#x1f1fa;&#x1f1f2;', '&#x1f1fa;&#x1f1f3;', '&#x1f1fa;&#x1f1f8;', '&#x1f1fa;&#x1f1fe;', '&#x1f1fa;&#x1f1ff;', '&#x1f1fb;&#x1f1e6;', '&#x1f1fb;&#x1f1e8;', '&#x1f1fb;&#x1f1ea;', '&#x1f1fb;&#x1f1ec;', '&#x1f1fb;&#x1f1ee;', '&#x1f1fb;&#x1f1f3;', '&#x1f1fb;&#x1f1fa;', '&#x1f1fc;&#x1f1eb;', '&#x1f1fc;&#x1f1f8;', '&#x1f1fd;&#x1f1f0;', '&#x1f1fe;&#x1f1ea;', '&#x1f1fe;&#x1f1f9;', '&#x1f1ff;&#x1f1e6;', '&#x1f1ff;&#x1f1f2;', '&#x1f1ff;&#x1f1fc;', '&#x1f385;&#x1f3fb;', '&#x1f385;&#x1f3fc;', '&#x1f385;&#x1f3fd;', '&#x1f385;&#x1f3fe;', '&#x1f385;&#x1f3ff;', '&#x1f3c2;&#x1f3fb;', '&#x1f3c2;&#x1f3fc;', '&#x1f3c2;&#x1f3fd;', '&#x1f3c2;&#x1f3fe;', '&#x1f3c2;&#x1f3ff;', '&#x1f3c3;&#x1f3fb;', '&#x1f3c3;&#x1f3fc;', '&#x1f3c3;&#x1f3fd;', '&#x1f3c3;&#x1f3fe;', '&#x1f3c3;&#x1f3ff;', '&#x1f3c4;&#x1f3fb;', '&#x1f3c4;&#x1f3fc;', '&#x1f3c4;&#x1f3fd;', '&#x1f3c4;&#x1f3fe;', '&#x1f3c4;&#x1f3ff;', '&#x1f3c7;&#x1f3fb;', '&#x1f3c7;&#x1f3fc;', '&#x1f3c7;&#x1f3fd;', '&#x1f3c7;&#x1f3fe;', '&#x1f3c7;&#x1f3ff;', '&#x1f3ca;&#x1f3fb;', '&#x1f3ca;&#x1f3fc;', '&#x1f3ca;&#x1f3fd;', '&#x1f3ca;&#x1f3fe;', '&#x1f3ca;&#x1f3ff;', '&#x1f3cb;&#x1f3fb;', '&#x1f3cb;&#x1f3fc;', '&#x1f3cb;&#x1f3fd;', '&#x1f3cb;&#x1f3fe;', '&#x1f3cb;&#x1f3ff;', '&#x1f3cc;&#x1f3fb;', '&#x1f3cc;&#x1f3fc;', '&#x1f3cc;&#x1f3fd;', '&#x1f3cc;&#x1f3fe;', '&#x1f3cc;&#x1f3ff;', '&#x1f442;&#x1f3fb;', '&#x1f442;&#x1f3fc;', '&#x1f442;&#x1f3fd;', '&#x1f442;&#x1f3fe;', '&#x1f442;&#x1f3ff;', '&#x1f443;&#x1f3fb;', '&#x1f443;&#x1f3fc;', '&#x1f443;&#x1f3fd;', '&#x1f443;&#x1f3fe;', '&#x1f443;&#x1f3ff;', '&#x1f446;&#x1f3fb;', '&#x1f446;&#x1f3fc;', '&#x1f446;&#x1f3fd;', '&#x1f446;&#x1f3fe;', '&#x1f446;&#x1f3ff;', '&#x1f447;&#x1f3fb;', '&#x1f447;&#x1f3fc;', '&#x1f447;&#x1f3fd;', '&#x1f447;&#x1f3fe;', '&#x1f447;&#x1f3ff;', '&#x1f448;&#x1f3fb;', '&#x1f448;&#x1f3fc;', '&#x1f448;&#x1f3fd;', '&#x1f448;&#x1f3fe;', '&#x1f448;&#x1f3ff;', '&#x1f449;&#x1f3fb;', '&#x1f449;&#x1f3fc;', '&#x1f449;&#x1f3fd;', '&#x1f449;&#x1f3fe;', '&#x1f449;&#x1f3ff;', '&#x1f44a;&#x1f3fb;', '&#x1f44a;&#x1f3fc;', '&#x1f44a;&#x1f3fd;', '&#x1f44a;&#x1f3fe;', '&#x1f44a;&#x1f3ff;', '&#x1f44b;&#x1f3fb;', '&#x1f44b;&#x1f3fc;', '&#x1f44b;&#x1f3fd;', '&#x1f44b;&#x1f3fe;', '&#x1f44b;&#x1f3ff;', '&#x1f44c;&#x1f3fb;', '&#x1f44c;&#x1f3fc;', '&#x1f44c;&#x1f3fd;', '&#x1f44c;&#x1f3fe;', '&#x1f44c;&#x1f3ff;', '&#x1f44d;&#x1f3fb;', '&#x1f44d;&#x1f3fc;', '&#x1f44d;&#x1f3fd;', '&#x1f44d;&#x1f3fe;', '&#x1f44d;&#x1f3ff;', '&#x1f44e;&#x1f3fb;', '&#x1f44e;&#x1f3fc;', '&#x1f44e;&#x1f3fd;', '&#x1f44e;&#x1f3fe;', '&#x1f44e;&#x1f3ff;', '&#x1f44f;&#x1f3fb;', '&#x1f44f;&#x1f3fc;', '&#x1f44f;&#x1f3fd;', '&#x1f44f;&#x1f3fe;', '&#x1f44f;&#x1f3ff;', '&#x1f450;&#x1f3fb;', '&#x1f450;&#x1f3fc;', '&#x1f450;&#x1f3fd;', '&#x1f450;&#x1f3fe;', '&#x1f450;&#x1f3ff;', '&#x1f466;&#x1f3fb;', '&#x1f466;&#x1f3fc;', '&#x1f466;&#x1f3fd;', '&#x1f466;&#x1f3fe;', '&#x1f466;&#x1f3ff;', '&#x1f467;&#x1f3fb;', '&#x1f467;&#x1f3fc;', '&#x1f467;&#x1f3fd;', '&#x1f467;&#x1f3fe;', '&#x1f467;&#x1f3ff;', '&#x1f468;&#x1f3fb;', '&#x1f468;&#x1f3fc;', '&#x1f468;&#x1f3fd;', '&#x1f468;&#x1f3fe;', '&#x1f468;&#x1f3ff;', '&#x1f469;&#x1f3fb;', '&#x1f469;&#x1f3fc;', '&#x1f469;&#x1f3fd;', '&#x1f469;&#x1f3fe;', '&#x1f469;&#x1f3ff;', '&#x1f46b;&#x1f3fb;', '&#x1f46b;&#x1f3fc;', '&#x1f46b;&#x1f3fd;', '&#x1f46b;&#x1f3fe;', '&#x1f46b;&#x1f3ff;', '&#x1f46c;&#x1f3fb;', '&#x1f46c;&#x1f3fc;', '&#x1f46c;&#x1f3fd;', '&#x1f46c;&#x1f3fe;', '&#x1f46c;&#x1f3ff;', '&#x1f46d;&#x1f3fb;', '&#x1f46d;&#x1f3fc;', '&#x1f46d;&#x1f3fd;', '&#x1f46d;&#x1f3fe;', '&#x1f46d;&#x1f3ff;', '&#x1f46e;&#x1f3fb;', '&#x1f46e;&#x1f3fc;', '&#x1f46e;&#x1f3fd;', '&#x1f46e;&#x1f3fe;', '&#x1f46e;&#x1f3ff;', '&#x1f470;&#x1f3fb;', '&#x1f470;&#x1f3fc;', '&#x1f470;&#x1f3fd;', '&#x1f470;&#x1f3fe;', '&#x1f470;&#x1f3ff;', '&#x1f471;&#x1f3fb;', '&#x1f471;&#x1f3fc;', '&#x1f471;&#x1f3fd;', '&#x1f471;&#x1f3fe;', '&#x1f471;&#x1f3ff;', '&#x1f472;&#x1f3fb;', '&#x1f472;&#x1f3fc;', '&#x1f472;&#x1f3fd;', '&#x1f472;&#x1f3fe;', '&#x1f472;&#x1f3ff;', '&#x1f473;&#x1f3fb;', '&#x1f473;&#x1f3fc;', '&#x1f473;&#x1f3fd;', '&#x1f473;&#x1f3fe;', '&#x1f473;&#x1f3ff;', '&#x1f474;&#x1f3fb;', '&#x1f474;&#x1f3fc;', '&#x1f474;&#x1f3fd;', '&#x1f474;&#x1f3fe;', '&#x1f474;&#x1f3ff;', '&#x1f475;&#x1f3fb;', '&#x1f475;&#x1f3fc;', '&#x1f475;&#x1f3fd;', '&#x1f475;&#x1f3fe;', '&#x1f475;&#x1f3ff;', '&#x1f476;&#x1f3fb;', '&#x1f476;&#x1f3fc;', '&#x1f476;&#x1f3fd;', '&#x1f476;&#x1f3fe;', '&#x1f476;&#x1f3ff;', '&#x1f477;&#x1f3fb;', '&#x1f477;&#x1f3fc;', '&#x1f477;&#x1f3fd;', '&#x1f477;&#x1f3fe;', '&#x1f477;&#x1f3ff;', '&#x1f478;&#x1f3fb;', '&#x1f478;&#x1f3fc;', '&#x1f478;&#x1f3fd;', '&#x1f478;&#x1f3fe;', '&#x1f478;&#x1f3ff;', '&#x1f47c;&#x1f3fb;', '&#x1f47c;&#x1f3fc;', '&#x1f47c;&#x1f3fd;', '&#x1f47c;&#x1f3fe;', '&#x1f47c;&#x1f3ff;', '&#x1f481;&#x1f3fb;', '&#x1f481;&#x1f3fc;', '&#x1f481;&#x1f3fd;', '&#x1f481;&#x1f3fe;', '&#x1f481;&#x1f3ff;', '&#x1f482;&#x1f3fb;', '&#x1f482;&#x1f3fc;', '&#x1f482;&#x1f3fd;', '&#x1f482;&#x1f3fe;', '&#x1f482;&#x1f3ff;', '&#x1f483;&#x1f3fb;', '&#x1f483;&#x1f3fc;', '&#x1f483;&#x1f3fd;', '&#x1f483;&#x1f3fe;', '&#x1f483;&#x1f3ff;', '&#x1f485;&#x1f3fb;', '&#x1f485;&#x1f3fc;', '&#x1f485;&#x1f3fd;', '&#x1f485;&#x1f3fe;', '&#x1f485;&#x1f3ff;', '&#x1f486;&#x1f3fb;', '&#x1f486;&#x1f3fc;', '&#x1f486;&#x1f3fd;', '&#x1f486;&#x1f3fe;', '&#x1f486;&#x1f3ff;', '&#x1f487;&#x1f3fb;', '&#x1f487;&#x1f3fc;', '&#x1f487;&#x1f3fd;', '&#x1f487;&#x1f3fe;', '&#x1f487;&#x1f3ff;', '&#x1f48f;&#x1f3fb;', '&#x1f48f;&#x1f3fc;', '&#x1f48f;&#x1f3fd;', '&#x1f48f;&#x1f3fe;', '&#x1f48f;&#x1f3ff;', '&#x1f491;&#x1f3fb;', '&#x1f491;&#x1f3fc;', '&#x1f491;&#x1f3fd;', '&#x1f491;&#x1f3fe;', '&#x1f491;&#x1f3ff;', '&#x1f4aa;&#x1f3fb;', '&#x1f4aa;&#x1f3fc;', '&#x1f4aa;&#x1f3fd;', '&#x1f4aa;&#x1f3fe;', '&#x1f4aa;&#x1f3ff;', '&#x1f574;&#x1f3fb;', '&#x1f574;&#x1f3fc;', '&#x1f574;&#x1f3fd;', '&#x1f574;&#x1f3fe;', '&#x1f574;&#x1f3ff;', '&#x1f575;&#x1f3fb;', '&#x1f575;&#x1f3fc;', '&#x1f575;&#x1f3fd;', '&#x1f575;&#x1f3fe;', '&#x1f575;&#x1f3ff;', '&#x1f57a;&#x1f3fb;', '&#x1f57a;&#x1f3fc;', '&#x1f57a;&#x1f3fd;', '&#x1f57a;&#x1f3fe;', '&#x1f57a;&#x1f3ff;', '&#x1f590;&#x1f3fb;', '&#x1f590;&#x1f3fc;', '&#x1f590;&#x1f3fd;', '&#x1f590;&#x1f3fe;', '&#x1f590;&#x1f3ff;', '&#x1f595;&#x1f3fb;', '&#x1f595;&#x1f3fc;', '&#x1f595;&#x1f3fd;', '&#x1f595;&#x1f3fe;', '&#x1f595;&#x1f3ff;', '&#x1f596;&#x1f3fb;', '&#x1f596;&#x1f3fc;', '&#x1f596;&#x1f3fd;', '&#x1f596;&#x1f3fe;', '&#x1f596;&#x1f3ff;', '&#x1f645;&#x1f3fb;', '&#x1f645;&#x1f3fc;', '&#x1f645;&#x1f3fd;', '&#x1f645;&#x1f3fe;', '&#x1f645;&#x1f3ff;', '&#x1f646;&#x1f3fb;', '&#x1f646;&#x1f3fc;', '&#x1f646;&#x1f3fd;', '&#x1f646;&#x1f3fe;', '&#x1f646;&#x1f3ff;', '&#x1f647;&#x1f3fb;', '&#x1f647;&#x1f3fc;', '&#x1f647;&#x1f3fd;', '&#x1f647;&#x1f3fe;', '&#x1f647;&#x1f3ff;', '&#x1f64b;&#x1f3fb;', '&#x1f64b;&#x1f3fc;', '&#x1f64b;&#x1f3fd;', '&#x1f64b;&#x1f3fe;', '&#x1f64b;&#x1f3ff;', '&#x1f64c;&#x1f3fb;', '&#x1f64c;&#x1f3fc;', '&#x1f64c;&#x1f3fd;', '&#x1f64c;&#x1f3fe;', '&#x1f64c;&#x1f3ff;', '&#x1f64d;&#x1f3fb;', '&#x1f64d;&#x1f3fc;', '&#x1f64d;&#x1f3fd;', '&#x1f64d;&#x1f3fe;', '&#x1f64d;&#x1f3ff;', '&#x1f64e;&#x1f3fb;', '&#x1f64e;&#x1f3fc;', '&#x1f64e;&#x1f3fd;', '&#x1f64e;&#x1f3fe;', '&#x1f64e;&#x1f3ff;', '&#x1f64f;&#x1f3fb;', '&#x1f64f;&#x1f3fc;', '&#x1f64f;&#x1f3fd;', '&#x1f64f;&#x1f3fe;', '&#x1f64f;&#x1f3ff;', '&#x1f6a3;&#x1f3fb;', '&#x1f6a3;&#x1f3fc;', '&#x1f6a3;&#x1f3fd;', '&#x1f6a3;&#x1f3fe;', '&#x1f6a3;&#x1f3ff;', '&#x1f6b4;&#x1f3fb;', '&#x1f6b4;&#x1f3fc;', '&#x1f6b4;&#x1f3fd;', '&#x1f6b4;&#x1f3fe;', '&#x1f6b4;&#x1f3ff;', '&#x1f6b5;&#x1f3fb;', '&#x1f6b5;&#x1f3fc;', '&#x1f6b5;&#x1f3fd;', '&#x1f6b5;&#x1f3fe;', '&#x1f6b5;&#x1f3ff;', '&#x1f6b6;&#x1f3fb;', '&#x1f6b6;&#x1f3fc;', '&#x1f6b6;&#x1f3fd;', '&#x1f6b6;&#x1f3fe;', '&#x1f6b6;&#x1f3ff;', '&#x1f6c0;&#x1f3fb;', '&#x1f6c0;&#x1f3fc;', '&#x1f6c0;&#x1f3fd;', '&#x1f6c0;&#x1f3fe;', '&#x1f6c0;&#x1f3ff;', '&#x1f6cc;&#x1f3fb;', '&#x1f6cc;&#x1f3fc;', '&#x1f6cc;&#x1f3fd;', '&#x1f6cc;&#x1f3fe;', '&#x1f6cc;&#x1f3ff;', '&#x1f90c;&#x1f3fb;', '&#x1f90c;&#x1f3fc;', '&#x1f90c;&#x1f3fd;', '&#x1f90c;&#x1f3fe;', '&#x1f90c;&#x1f3ff;', '&#x1f90f;&#x1f3fb;', '&#x1f90f;&#x1f3fc;', '&#x1f90f;&#x1f3fd;', '&#x1f90f;&#x1f3fe;', '&#x1f90f;&#x1f3ff;', '&#x1f918;&#x1f3fb;', '&#x1f918;&#x1f3fc;', '&#x1f918;&#x1f3fd;', '&#x1f918;&#x1f3fe;', '&#x1f918;&#x1f3ff;', '&#x1f919;&#x1f3fb;', '&#x1f919;&#x1f3fc;', '&#x1f919;&#x1f3fd;', '&#x1f919;&#x1f3fe;', '&#x1f919;&#x1f3ff;', '&#x1f91a;&#x1f3fb;', '&#x1f91a;&#x1f3fc;', '&#x1f91a;&#x1f3fd;', '&#x1f91a;&#x1f3fe;', '&#x1f91a;&#x1f3ff;', '&#x1f91b;&#x1f3fb;', '&#x1f91b;&#x1f3fc;', '&#x1f91b;&#x1f3fd;', '&#x1f91b;&#x1f3fe;', '&#x1f91b;&#x1f3ff;', '&#x1f91c;&#x1f3fb;', '&#x1f91c;&#x1f3fc;', '&#x1f91c;&#x1f3fd;', '&#x1f91c;&#x1f3fe;', '&#x1f91c;&#x1f3ff;', '&#x1f91d;&#x1f3fb;', '&#x1f91d;&#x1f3fc;', '&#x1f91d;&#x1f3fd;', '&#x1f91d;&#x1f3fe;', '&#x1f91d;&#x1f3ff;', '&#x1f91e;&#x1f3fb;', '&#x1f91e;&#x1f3fc;', '&#x1f91e;&#x1f3fd;', '&#x1f91e;&#x1f3fe;', '&#x1f91e;&#x1f3ff;', '&#x1f91f;&#x1f3fb;', '&#x1f91f;&#x1f3fc;', '&#x1f91f;&#x1f3fd;', '&#x1f91f;&#x1f3fe;', '&#x1f91f;&#x1f3ff;', '&#x1f926;&#x1f3fb;', '&#x1f926;&#x1f3fc;', '&#x1f926;&#x1f3fd;', '&#x1f926;&#x1f3fe;', '&#x1f926;&#x1f3ff;', '&#x1f930;&#x1f3fb;', '&#x1f930;&#x1f3fc;', '&#x1f930;&#x1f3fd;', '&#x1f930;&#x1f3fe;', '&#x1f930;&#x1f3ff;', '&#x1f931;&#x1f3fb;', '&#x1f931;&#x1f3fc;', '&#x1f931;&#x1f3fd;', '&#x1f931;&#x1f3fe;', '&#x1f931;&#x1f3ff;', '&#x1f932;&#x1f3fb;', '&#x1f932;&#x1f3fc;', '&#x1f932;&#x1f3fd;', '&#x1f932;&#x1f3fe;', '&#x1f932;&#x1f3ff;', '&#x1f933;&#x1f3fb;', '&#x1f933;&#x1f3fc;', '&#x1f933;&#x1f3fd;', '&#x1f933;&#x1f3fe;', '&#x1f933;&#x1f3ff;', '&#x1f934;&#x1f3fb;', '&#x1f934;&#x1f3fc;', '&#x1f934;&#x1f3fd;', '&#x1f934;&#x1f3fe;', '&#x1f934;&#x1f3ff;', '&#x1f935;&#x1f3fb;', '&#x1f935;&#x1f3fc;', '&#x1f935;&#x1f3fd;', '&#x1f935;&#x1f3fe;', '&#x1f935;&#x1f3ff;', '&#x1f936;&#x1f3fb;', '&#x1f936;&#x1f3fc;', '&#x1f936;&#x1f3fd;', '&#x1f936;&#x1f3fe;', '&#x1f936;&#x1f3ff;', '&#x1f937;&#x1f3fb;', '&#x1f937;&#x1f3fc;', '&#x1f937;&#x1f3fd;', '&#x1f937;&#x1f3fe;', '&#x1f937;&#x1f3ff;', '&#x1f938;&#x1f3fb;', '&#x1f938;&#x1f3fc;', '&#x1f938;&#x1f3fd;', '&#x1f938;&#x1f3fe;', '&#x1f938;&#x1f3ff;', '&#x1f939;&#x1f3fb;', '&#x1f939;&#x1f3fc;', '&#x1f939;&#x1f3fd;', '&#x1f939;&#x1f3fe;', '&#x1f939;&#x1f3ff;', '&#x1f93d;&#x1f3fb;', '&#x1f93d;&#x1f3fc;', '&#x1f93d;&#x1f3fd;', '&#x1f93d;&#x1f3fe;', '&#x1f93d;&#x1f3ff;', '&#x1f93e;&#x1f3fb;', '&#x1f93e;&#x1f3fc;', '&#x1f93e;&#x1f3fd;', '&#x1f93e;&#x1f3fe;', '&#x1f93e;&#x1f3ff;', '&#x1f977;&#x1f3fb;', '&#x1f977;&#x1f3fc;', '&#x1f977;&#x1f3fd;', '&#x1f977;&#x1f3fe;', '&#x1f977;&#x1f3ff;', '&#x1f9b5;&#x1f3fb;', '&#x1f9b5;&#x1f3fc;', '&#x1f9b5;&#x1f3fd;', '&#x1f9b5;&#x1f3fe;', '&#x1f9b5;&#x1f3ff;', '&#x1f9b6;&#x1f3fb;', '&#x1f9b6;&#x1f3fc;', '&#x1f9b6;&#x1f3fd;', '&#x1f9b6;&#x1f3fe;', '&#x1f9b6;&#x1f3ff;', '&#x1f9b8;&#x1f3fb;', '&#x1f9b8;&#x1f3fc;', '&#x1f9b8;&#x1f3fd;', '&#x1f9b8;&#x1f3fe;', '&#x1f9b8;&#x1f3ff;', '&#x1f9b9;&#x1f3fb;', '&#x1f9b9;&#x1f3fc;', '&#x1f9b9;&#x1f3fd;', '&#x1f9b9;&#x1f3fe;', '&#x1f9b9;&#x1f3ff;', '&#x1f9bb;&#x1f3fb;', '&#x1f9bb;&#x1f3fc;', '&#x1f9bb;&#x1f3fd;', '&#x1f9bb;&#x1f3fe;', '&#x1f9bb;&#x1f3ff;', '&#x1f9cd;&#x1f3fb;', '&#x1f9cd;&#x1f3fc;', '&#x1f9cd;&#x1f3fd;', '&#x1f9cd;&#x1f3fe;', '&#x1f9cd;&#x1f3ff;', '&#x1f9ce;&#x1f3fb;', '&#x1f9ce;&#x1f3fc;', '&#x1f9ce;&#x1f3fd;', '&#x1f9ce;&#x1f3fe;', '&#x1f9ce;&#x1f3ff;', '&#x1f9cf;&#x1f3fb;', '&#x1f9cf;&#x1f3fc;', '&#x1f9cf;&#x1f3fd;', '&#x1f9cf;&#x1f3fe;', '&#x1f9cf;&#x1f3ff;', '&#x1f9d1;&#x1f3fb;', '&#x1f9d1;&#x1f3fc;', '&#x1f9d1;&#x1f3fd;', '&#x1f9d1;&#x1f3fe;', '&#x1f9d1;&#x1f3ff;', '&#x1f9d2;&#x1f3fb;', '&#x1f9d2;&#x1f3fc;', '&#x1f9d2;&#x1f3fd;', '&#x1f9d2;&#x1f3fe;', '&#x1f9d2;&#x1f3ff;', '&#x1f9d3;&#x1f3fb;', '&#x1f9d3;&#x1f3fc;', '&#x1f9d3;&#x1f3fd;', '&#x1f9d3;&#x1f3fe;', '&#x1f9d3;&#x1f3ff;', '&#x1f9d4;&#x1f3fb;', '&#x1f9d4;&#x1f3fc;', '&#x1f9d4;&#x1f3fd;', '&#x1f9d4;&#x1f3fe;', '&#x1f9d4;&#x1f3ff;', '&#x1f9d5;&#x1f3fb;', '&#x1f9d5;&#x1f3fc;', '&#x1f9d5;&#x1f3fd;', '&#x1f9d5;&#x1f3fe;', '&#x1f9d5;&#x1f3ff;', '&#x1f9d6;&#x1f3fb;', '&#x1f9d6;&#x1f3fc;', '&#x1f9d6;&#x1f3fd;', '&#x1f9d6;&#x1f3fe;', '&#x1f9d6;&#x1f3ff;', '&#x1f9d7;&#x1f3fb;', '&#x1f9d7;&#x1f3fc;', '&#x1f9d7;&#x1f3fd;', '&#x1f9d7;&#x1f3fe;', '&#x1f9d7;&#x1f3ff;', '&#x1f9d8;&#x1f3fb;', '&#x1f9d8;&#x1f3fc;', '&#x1f9d8;&#x1f3fd;', '&#x1f9d8;&#x1f3fe;', '&#x1f9d8;&#x1f3ff;', '&#x1f9d9;&#x1f3fb;', '&#x1f9d9;&#x1f3fc;', '&#x1f9d9;&#x1f3fd;', '&#x1f9d9;&#x1f3fe;', '&#x1f9d9;&#x1f3ff;', '&#x1f9da;&#x1f3fb;', '&#x1f9da;&#x1f3fc;', '&#x1f9da;&#x1f3fd;', '&#x1f9da;&#x1f3fe;', '&#x1f9da;&#x1f3ff;', '&#x1f9db;&#x1f3fb;', '&#x1f9db;&#x1f3fc;', '&#x1f9db;&#x1f3fd;', '&#x1f9db;&#x1f3fe;', '&#x1f9db;&#x1f3ff;', '&#x1f9dc;&#x1f3fb;', '&#x1f9dc;&#x1f3fc;', '&#x1f9dc;&#x1f3fd;', '&#x1f9dc;&#x1f3fe;', '&#x1f9dc;&#x1f3ff;', '&#x1f9dd;&#x1f3fb;', '&#x1f9dd;&#x1f3fc;', '&#x1f9dd;&#x1f3fd;', '&#x1f9dd;&#x1f3fe;', '&#x1f9dd;&#x1f3ff;', '&#x1fac3;&#x1f3fb;', '&#x1fac3;&#x1f3fc;', '&#x1fac3;&#x1f3fd;', '&#x1fac3;&#x1f3fe;', '&#x1fac3;&#x1f3ff;', '&#x1fac4;&#x1f3fb;', '&#x1fac4;&#x1f3fc;', '&#x1fac4;&#x1f3fd;', '&#x1fac4;&#x1f3fe;', '&#x1fac4;&#x1f3ff;', '&#x1fac5;&#x1f3fb;', '&#x1fac5;&#x1f3fc;', '&#x1fac5;&#x1f3fd;', '&#x1fac5;&#x1f3fe;', '&#x1fac5;&#x1f3ff;', '&#x1faf0;&#x1f3fb;', '&#x1faf0;&#x1f3fc;', '&#x1faf0;&#x1f3fd;', '&#x1faf0;&#x1f3fe;', '&#x1faf0;&#x1f3ff;', '&#x1faf1;&#x1f3fb;', '&#x1faf1;&#x1f3fc;', '&#x1faf1;&#x1f3fd;', '&#x1faf1;&#x1f3fe;', '&#x1faf1;&#x1f3ff;', '&#x1faf2;&#x1f3fb;', '&#x1faf2;&#x1f3fc;', '&#x1faf2;&#x1f3fd;', '&#x1faf2;&#x1f3fe;', '&#x1faf2;&#x1f3ff;', '&#x1faf3;&#x1f3fb;', '&#x1faf3;&#x1f3fc;', '&#x1faf3;&#x1f3fd;', '&#x1faf3;&#x1f3fe;', '&#x1faf3;&#x1f3ff;', '&#x1faf4;&#x1f3fb;', '&#x1faf4;&#x1f3fc;', '&#x1faf4;&#x1f3fd;', '&#x1faf4;&#x1f3fe;', '&#x1faf4;&#x1f3ff;', '&#x1faf5;&#x1f3fb;', '&#x1faf5;&#x1f3fc;', '&#x1faf5;&#x1f3fd;', '&#x1faf5;&#x1f3fe;', '&#x1faf5;&#x1f3ff;', '&#x1faf6;&#x1f3fb;', '&#x1faf6;&#x1f3fc;', '&#x1faf6;&#x1f3fd;', '&#x1faf6;&#x1f3fe;', '&#x1faf6;&#x1f3ff;', '&#x1faf7;&#x1f3fb;', '&#x1faf7;&#x1f3fc;', '&#x1faf7;&#x1f3fd;', '&#x1faf7;&#x1f3fe;', '&#x1faf7;&#x1f3ff;', '&#x1faf8;&#x1f3fb;', '&#x1faf8;&#x1f3fc;', '&#x1faf8;&#x1f3fd;', '&#x1faf8;&#x1f3fe;', '&#x1faf8;&#x1f3ff;', '&#x261d;&#x1f3fb;', '&#x261d;&#x1f3fc;', '&#x261d;&#x1f3fd;', '&#x261d;&#x1f3fe;', '&#x261d;&#x1f3ff;', '&#x26f7;&#x1f3fb;', '&#x26f7;&#x1f3fc;', '&#x26f7;&#x1f3fd;', '&#x26f7;&#x1f3fe;', '&#x26f7;&#x1f3ff;', '&#x26f9;&#x1f3fb;', '&#x26f9;&#x1f3fc;', '&#x26f9;&#x1f3fd;', '&#x26f9;&#x1f3fe;', '&#x26f9;&#x1f3ff;', '&#x270a;&#x1f3fb;', '&#x270a;&#x1f3fc;', '&#x270a;&#x1f3fd;', '&#x270a;&#x1f3fe;', '&#x270a;&#x1f3ff;', '&#x270b;&#x1f3fb;', '&#x270b;&#x1f3fc;', '&#x270b;&#x1f3fd;', '&#x270b;&#x1f3fe;', '&#x270b;&#x1f3ff;', '&#x270c;&#x1f3fb;', '&#x270c;&#x1f3fc;', '&#x270c;&#x1f3fd;', '&#x270c;&#x1f3fe;', '&#x270c;&#x1f3ff;', '&#x270d;&#x1f3fb;', '&#x270d;&#x1f3fc;', '&#x270d;&#x1f3fd;', '&#x270d;&#x1f3fe;', '&#x270d;&#x1f3ff;', '&#x23;&#x20e3;', '&#x2a;&#x20e3;', '&#x30;&#x20e3;', '&#x31;&#x20e3;', '&#x32;&#x20e3;', '&#x33;&#x20e3;', '&#x34;&#x20e3;', '&#x35;&#x20e3;', '&#x36;&#x20e3;', '&#x37;&#x20e3;', '&#x38;&#x20e3;', '&#x39;&#x20e3;', '&#x1f004;', '&#x1f0cf;', '&#x1f170;', '&#x1f171;', '&#x1f17e;', '&#x1f17f;', '&#x1f18e;', '&#x1f191;', '&#x1f192;', '&#x1f193;', '&#x1f194;', '&#x1f195;', '&#x1f196;', '&#x1f197;', '&#x1f198;', '&#x1f199;', '&#x1f19a;', '&#x1f1e6;', '&#x1f1e7;', '&#x1f1e8;', '&#x1f1e9;', '&#x1f1ea;', '&#x1f1eb;', '&#x1f1ec;', '&#x1f1ed;', '&#x1f1ee;', '&#x1f1ef;', '&#x1f1f0;', '&#x1f1f1;', '&#x1f1f2;', '&#x1f1f3;', '&#x1f1f4;', '&#x1f1f5;', '&#x1f1f6;', '&#x1f1f7;', '&#x1f1f8;', '&#x1f1f9;', '&#x1f1fa;', '&#x1f1fb;', '&#x1f1fc;', '&#x1f1fd;', '&#x1f1fe;', '&#x1f1ff;', '&#x1f201;', '&#x1f202;', '&#x1f21a;', '&#x1f22f;', '&#x1f232;', '&#x1f233;', '&#x1f234;', '&#x1f235;', '&#x1f236;', '&#x1f237;', '&#x1f238;', '&#x1f239;', '&#x1f23a;', '&#x1f250;', '&#x1f251;', '&#x1f300;', '&#x1f301;', '&#x1f302;', '&#x1f303;', '&#x1f304;', '&#x1f305;', '&#x1f306;', '&#x1f307;', '&#x1f308;', '&#x1f309;', '&#x1f30a;', '&#x1f30b;', '&#x1f30c;', '&#x1f30d;', '&#x1f30e;', '&#x1f30f;', '&#x1f310;', '&#x1f311;', '&#x1f312;', '&#x1f313;', '&#x1f314;', '&#x1f315;', '&#x1f316;', '&#x1f317;', '&#x1f318;', '&#x1f319;', '&#x1f31a;', '&#x1f31b;', '&#x1f31c;', '&#x1f31d;', '&#x1f31e;', '&#x1f31f;', '&#x1f320;', '&#x1f321;', '&#x1f324;', '&#x1f325;', '&#x1f326;', '&#x1f327;', '&#x1f328;', '&#x1f329;', '&#x1f32a;', '&#x1f32b;', '&#x1f32c;', '&#x1f32d;', '&#x1f32e;', '&#x1f32f;', '&#x1f330;', '&#x1f331;', '&#x1f332;', '&#x1f333;', '&#x1f334;', '&#x1f335;', '&#x1f336;', '&#x1f337;', '&#x1f338;', '&#x1f339;', '&#x1f33a;', '&#x1f33b;', '&#x1f33c;', '&#x1f33d;', '&#x1f33e;', '&#x1f33f;', '&#x1f340;', '&#x1f341;', '&#x1f342;', '&#x1f343;', '&#x1f344;', '&#x1f345;', '&#x1f346;', '&#x1f347;', '&#x1f348;', '&#x1f349;', '&#x1f34a;', '&#x1f34b;', '&#x1f34c;', '&#x1f34d;', '&#x1f34e;', '&#x1f34f;', '&#x1f350;', '&#x1f351;', '&#x1f352;', '&#x1f353;', '&#x1f354;', '&#x1f355;', '&#x1f356;', '&#x1f357;', '&#x1f358;', '&#x1f359;', '&#x1f35a;', '&#x1f35b;', '&#x1f35c;', '&#x1f35d;', '&#x1f35e;', '&#x1f35f;', '&#x1f360;', '&#x1f361;', '&#x1f362;', '&#x1f363;', '&#x1f364;', '&#x1f365;', '&#x1f366;', '&#x1f367;', '&#x1f368;', '&#x1f369;', '&#x1f36a;', '&#x1f36b;', '&#x1f36c;', '&#x1f36d;', '&#x1f36e;', '&#x1f36f;', '&#x1f370;', '&#x1f371;', '&#x1f372;', '&#x1f373;', '&#x1f374;', '&#x1f375;', '&#x1f376;', '&#x1f377;', '&#x1f378;', '&#x1f379;', '&#x1f37a;', '&#x1f37b;', '&#x1f37c;', '&#x1f37d;', '&#x1f37e;', '&#x1f37f;', '&#x1f380;', '&#x1f381;', '&#x1f382;', '&#x1f383;', '&#x1f384;', '&#x1f385;', '&#x1f386;', '&#x1f387;', '&#x1f388;', '&#x1f389;', '&#x1f38a;', '&#x1f38b;', '&#x1f38c;', '&#x1f38d;', '&#x1f38e;', '&#x1f38f;', '&#x1f390;', '&#x1f391;', '&#x1f392;', '&#x1f393;', '&#x1f396;', '&#x1f397;', '&#x1f399;', '&#x1f39a;', '&#x1f39b;', '&#x1f39e;', '&#x1f39f;', '&#x1f3a0;', '&#x1f3a1;', '&#x1f3a2;', '&#x1f3a3;', '&#x1f3a4;', '&#x1f3a5;', '&#x1f3a6;', '&#x1f3a7;', '&#x1f3a8;', '&#x1f3a9;', '&#x1f3aa;', '&#x1f3ab;', '&#x1f3ac;', '&#x1f3ad;', '&#x1f3ae;', '&#x1f3af;', '&#x1f3b0;', '&#x1f3b1;', '&#x1f3b2;', '&#x1f3b3;', '&#x1f3b4;', '&#x1f3b5;', '&#x1f3b6;', '&#x1f3b7;', '&#x1f3b8;', '&#x1f3b9;', '&#x1f3ba;', '&#x1f3bb;', '&#x1f3bc;', '&#x1f3bd;', '&#x1f3be;', '&#x1f3bf;', '&#x1f3c0;', '&#x1f3c1;', '&#x1f3c2;', '&#x1f3c3;', '&#x1f3c4;', '&#x1f3c5;', '&#x1f3c6;', '&#x1f3c7;', '&#x1f3c8;', '&#x1f3c9;', '&#x1f3ca;', '&#x1f3cb;', '&#x1f3cc;', '&#x1f3cd;', '&#x1f3ce;', '&#x1f3cf;', '&#x1f3d0;', '&#x1f3d1;', '&#x1f3d2;', '&#x1f3d3;', '&#x1f3d4;', '&#x1f3d5;', '&#x1f3d6;', '&#x1f3d7;', '&#x1f3d8;', '&#x1f3d9;', '&#x1f3da;', '&#x1f3db;', '&#x1f3dc;', '&#x1f3dd;', '&#x1f3de;', '&#x1f3df;', '&#x1f3e0;', '&#x1f3e1;', '&#x1f3e2;', '&#x1f3e3;', '&#x1f3e4;', '&#x1f3e5;', '&#x1f3e6;', '&#x1f3e7;', '&#x1f3e8;', '&#x1f3e9;', '&#x1f3ea;', '&#x1f3eb;', '&#x1f3ec;', '&#x1f3ed;', '&#x1f3ee;', '&#x1f3ef;', '&#x1f3f0;', '&#x1f3f3;', '&#x1f3f4;', '&#x1f3f5;', '&#x1f3f7;', '&#x1f3f8;', '&#x1f3f9;', '&#x1f3fa;', '&#x1f3fb;', '&#x1f3fc;', '&#x1f3fd;', '&#x1f3fe;', '&#x1f3ff;', '&#x1f400;', '&#x1f401;', '&#x1f402;', '&#x1f403;', '&#x1f404;', '&#x1f405;', '&#x1f406;', '&#x1f407;', '&#x1f408;', '&#x1f409;', '&#x1f40a;', '&#x1f40b;', '&#x1f40c;', '&#x1f40d;', '&#x1f40e;', '&#x1f40f;', '&#x1f410;', '&#x1f411;', '&#x1f412;', '&#x1f413;', '&#x1f414;', '&#x1f415;', '&#x1f416;', '&#x1f417;', '&#x1f418;', '&#x1f419;', '&#x1f41a;', '&#x1f41b;', '&#x1f41c;', '&#x1f41d;', '&#x1f41e;', '&#x1f41f;', '&#x1f420;', '&#x1f421;', '&#x1f422;', '&#x1f423;', '&#x1f424;', '&#x1f425;', '&#x1f426;', '&#x1f427;', '&#x1f428;', '&#x1f429;', '&#x1f42a;', '&#x1f42b;', '&#x1f42c;', '&#x1f42d;', '&#x1f42e;', '&#x1f42f;', '&#x1f430;', '&#x1f431;', '&#x1f432;', '&#x1f433;', '&#x1f434;', '&#x1f435;', '&#x1f436;', '&#x1f437;', '&#x1f438;', '&#x1f439;', '&#x1f43a;', '&#x1f43b;', '&#x1f43c;', '&#x1f43d;', '&#x1f43e;', '&#x1f43f;', '&#x1f440;', '&#x1f441;', '&#x1f442;', '&#x1f443;', '&#x1f444;', '&#x1f445;', '&#x1f446;', '&#x1f447;', '&#x1f448;', '&#x1f449;', '&#x1f44a;', '&#x1f44b;', '&#x1f44c;', '&#x1f44d;', '&#x1f44e;', '&#x1f44f;', '&#x1f450;', '&#x1f451;', '&#x1f452;', '&#x1f453;', '&#x1f454;', '&#x1f455;', '&#x1f456;', '&#x1f457;', '&#x1f458;', '&#x1f459;', '&#x1f45a;', '&#x1f45b;', '&#x1f45c;', '&#x1f45d;', '&#x1f45e;', '&#x1f45f;', '&#x1f460;', '&#x1f461;', '&#x1f462;', '&#x1f463;', '&#x1f464;', '&#x1f465;', '&#x1f466;', '&#x1f467;', '&#x1f468;', '&#x1f469;', '&#x1f46a;', '&#x1f46b;', '&#x1f46c;', '&#x1f46d;', '&#x1f46e;', '&#x1f46f;', '&#x1f470;', '&#x1f471;', '&#x1f472;', '&#x1f473;', '&#x1f474;', '&#x1f475;', '&#x1f476;', '&#x1f477;', '&#x1f478;', '&#x1f479;', '&#x1f47a;', '&#x1f47b;', '&#x1f47c;', '&#x1f47d;', '&#x1f47e;', '&#x1f47f;', '&#x1f480;', '&#x1f481;', '&#x1f482;', '&#x1f483;', '&#x1f484;', '&#x1f485;', '&#x1f486;', '&#x1f487;', '&#x1f488;', '&#x1f489;', '&#x1f48a;', '&#x1f48b;', '&#x1f48c;', '&#x1f48d;', '&#x1f48e;', '&#x1f48f;', '&#x1f490;', '&#x1f491;', '&#x1f492;', '&#x1f493;', '&#x1f494;', '&#x1f495;', '&#x1f496;', '&#x1f497;', '&#x1f498;', '&#x1f499;', '&#x1f49a;', '&#x1f49b;', '&#x1f49c;', '&#x1f49d;', '&#x1f49e;', '&#x1f49f;', '&#x1f4a0;', '&#x1f4a1;', '&#x1f4a2;', '&#x1f4a3;', '&#x1f4a4;', '&#x1f4a5;', '&#x1f4a6;', '&#x1f4a7;', '&#x1f4a8;', '&#x1f4a9;', '&#x1f4aa;', '&#x1f4ab;', '&#x1f4ac;', '&#x1f4ad;', '&#x1f4ae;', '&#x1f4af;', '&#x1f4b0;', '&#x1f4b1;', '&#x1f4b2;', '&#x1f4b3;', '&#x1f4b4;', '&#x1f4b5;', '&#x1f4b6;', '&#x1f4b7;', '&#x1f4b8;', '&#x1f4b9;', '&#x1f4ba;', '&#x1f4bb;', '&#x1f4bc;', '&#x1f4bd;', '&#x1f4be;', '&#x1f4bf;', '&#x1f4c0;', '&#x1f4c1;', '&#x1f4c2;', '&#x1f4c3;', '&#x1f4c4;', '&#x1f4c5;', '&#x1f4c6;', '&#x1f4c7;', '&#x1f4c8;', '&#x1f4c9;', '&#x1f4ca;', '&#x1f4cb;', '&#x1f4cc;', '&#x1f4cd;', '&#x1f4ce;', '&#x1f4cf;', '&#x1f4d0;', '&#x1f4d1;', '&#x1f4d2;', '&#x1f4d3;', '&#x1f4d4;', '&#x1f4d5;', '&#x1f4d6;', '&#x1f4d7;', '&#x1f4d8;', '&#x1f4d9;', '&#x1f4da;', '&#x1f4db;', '&#x1f4dc;', '&#x1f4dd;', '&#x1f4de;', '&#x1f4df;', '&#x1f4e0;', '&#x1f4e1;', '&#x1f4e2;', '&#x1f4e3;', '&#x1f4e4;', '&#x1f4e5;', '&#x1f4e6;', '&#x1f4e7;', '&#x1f4e8;', '&#x1f4e9;', '&#x1f4ea;', '&#x1f4eb;', '&#x1f4ec;', '&#x1f4ed;', '&#x1f4ee;', '&#x1f4ef;', '&#x1f4f0;', '&#x1f4f1;', '&#x1f4f2;', '&#x1f4f3;', '&#x1f4f4;', '&#x1f4f5;', '&#x1f4f6;', '&#x1f4f7;', '&#x1f4f8;', '&#x1f4f9;', '&#x1f4fa;', '&#x1f4fb;', '&#x1f4fc;', '&#x1f4fd;', '&#x1f4ff;', '&#x1f500;', '&#x1f501;', '&#x1f502;', '&#x1f503;', '&#x1f504;', '&#x1f505;', '&#x1f506;', '&#x1f507;', '&#x1f508;', '&#x1f509;', '&#x1f50a;', '&#x1f50b;', '&#x1f50c;', '&#x1f50d;', '&#x1f50e;', '&#x1f50f;', '&#x1f510;', '&#x1f511;', '&#x1f512;', '&#x1f513;', '&#x1f514;', '&#x1f515;', '&#x1f516;', '&#x1f517;', '&#x1f518;', '&#x1f519;', '&#x1f51a;', '&#x1f51b;', '&#x1f51c;', '&#x1f51d;', '&#x1f51e;', '&#x1f51f;', '&#x1f520;', '&#x1f521;', '&#x1f522;', '&#x1f523;', '&#x1f524;', '&#x1f525;', '&#x1f526;', '&#x1f527;', '&#x1f528;', '&#x1f529;', '&#x1f52a;', '&#x1f52b;', '&#x1f52c;', '&#x1f52d;', '&#x1f52e;', '&#x1f52f;', '&#x1f530;', '&#x1f531;', '&#x1f532;', '&#x1f533;', '&#x1f534;', '&#x1f535;', '&#x1f536;', '&#x1f537;', '&#x1f538;', '&#x1f539;', '&#x1f53a;', '&#x1f53b;', '&#x1f53c;', '&#x1f53d;', '&#x1f549;', '&#x1f54a;', '&#x1f54b;', '&#x1f54c;', '&#x1f54d;', '&#x1f54e;', '&#x1f550;', '&#x1f551;', '&#x1f552;', '&#x1f553;', '&#x1f554;', '&#x1f555;', '&#x1f556;', '&#x1f557;', '&#x1f558;', '&#x1f559;', '&#x1f55a;', '&#x1f55b;', '&#x1f55c;', '&#x1f55d;', '&#x1f55e;', '&#x1f55f;', '&#x1f560;', '&#x1f561;', '&#x1f562;', '&#x1f563;', '&#x1f564;', '&#x1f565;', '&#x1f566;', '&#x1f567;', '&#x1f56f;', '&#x1f570;', '&#x1f573;', '&#x1f574;', '&#x1f575;', '&#x1f576;', '&#x1f577;', '&#x1f578;', '&#x1f579;', '&#x1f57a;', '&#x1f587;', '&#x1f58a;', '&#x1f58b;', '&#x1f58c;', '&#x1f58d;', '&#x1f590;', '&#x1f595;', '&#x1f596;', '&#x1f5a4;', '&#x1f5a5;', '&#x1f5a8;', '&#x1f5b1;', '&#x1f5b2;', '&#x1f5bc;', '&#x1f5c2;', '&#x1f5c3;', '&#x1f5c4;', '&#x1f5d1;', '&#x1f5d2;', '&#x1f5d3;', '&#x1f5dc;', '&#x1f5dd;', '&#x1f5de;', '&#x1f5e1;', '&#x1f5e3;', '&#x1f5e8;', '&#x1f5ef;', '&#x1f5f3;', '&#x1f5fa;', '&#x1f5fb;', '&#x1f5fc;', '&#x1f5fd;', '&#x1f5fe;', '&#x1f5ff;', '&#x1f600;', '&#x1f601;', '&#x1f602;', '&#x1f603;', '&#x1f604;', '&#x1f605;', '&#x1f606;', '&#x1f607;', '&#x1f608;', '&#x1f609;', '&#x1f60a;', '&#x1f60b;', '&#x1f60c;', '&#x1f60d;', '&#x1f60e;', '&#x1f60f;', '&#x1f610;', '&#x1f611;', '&#x1f612;', '&#x1f613;', '&#x1f614;', '&#x1f615;', '&#x1f616;', '&#x1f617;', '&#x1f618;', '&#x1f619;', '&#x1f61a;', '&#x1f61b;', '&#x1f61c;', '&#x1f61d;', '&#x1f61e;', '&#x1f61f;', '&#x1f620;', '&#x1f621;', '&#x1f622;', '&#x1f623;', '&#x1f624;', '&#x1f625;', '&#x1f626;', '&#x1f627;', '&#x1f628;', '&#x1f629;', '&#x1f62a;', '&#x1f62b;', '&#x1f62c;', '&#x1f62d;', '&#x1f62e;', '&#x1f62f;', '&#x1f630;', '&#x1f631;', '&#x1f632;', '&#x1f633;', '&#x1f634;', '&#x1f635;', '&#x1f636;', '&#x1f637;', '&#x1f638;', '&#x1f639;', '&#x1f63a;', '&#x1f63b;', '&#x1f63c;', '&#x1f63d;', '&#x1f63e;', '&#x1f63f;', '&#x1f640;', '&#x1f641;', '&#x1f642;', '&#x1f643;', '&#x1f644;', '&#x1f645;', '&#x1f646;', '&#x1f647;', '&#x1f648;', '&#x1f649;', '&#x1f64a;', '&#x1f64b;', '&#x1f64c;', '&#x1f64d;', '&#x1f64e;', '&#x1f64f;', '&#x1f680;', '&#x1f681;', '&#x1f682;', '&#x1f683;', '&#x1f684;', '&#x1f685;', '&#x1f686;', '&#x1f687;', '&#x1f688;', '&#x1f689;', '&#x1f68a;', '&#x1f68b;', '&#x1f68c;', '&#x1f68d;', '&#x1f68e;', '&#x1f68f;', '&#x1f690;', '&#x1f691;', '&#x1f692;', '&#x1f693;', '&#x1f694;', '&#x1f695;', '&#x1f696;', '&#x1f697;', '&#x1f698;', '&#x1f699;', '&#x1f69a;', '&#x1f69b;', '&#x1f69c;', '&#x1f69d;', '&#x1f69e;', '&#x1f69f;', '&#x1f6a0;', '&#x1f6a1;', '&#x1f6a2;', '&#x1f6a3;', '&#x1f6a4;', '&#x1f6a5;', '&#x1f6a6;', '&#x1f6a7;', '&#x1f6a8;', '&#x1f6a9;', '&#x1f6aa;', '&#x1f6ab;', '&#x1f6ac;', '&#x1f6ad;', '&#x1f6ae;', '&#x1f6af;', '&#x1f6b0;', '&#x1f6b1;', '&#x1f6b2;', '&#x1f6b3;', '&#x1f6b4;', '&#x1f6b5;', '&#x1f6b6;', '&#x1f6b7;', '&#x1f6b8;', '&#x1f6b9;', '&#x1f6ba;', '&#x1f6bb;', '&#x1f6bc;', '&#x1f6bd;', '&#x1f6be;', '&#x1f6bf;', '&#x1f6c0;', '&#x1f6c1;', '&#x1f6c2;', '&#x1f6c3;', '&#x1f6c4;', '&#x1f6c5;', '&#x1f6cb;', '&#x1f6cc;', '&#x1f6cd;', '&#x1f6ce;', '&#x1f6cf;', '&#x1f6d0;', '&#x1f6d1;', '&#x1f6d2;', '&#x1f6d5;', '&#x1f6d6;', '&#x1f6d7;', '&#x1f6dc;', '&#x1f6dd;', '&#x1f6de;', '&#x1f6df;', '&#x1f6e0;', '&#x1f6e1;', '&#x1f6e2;', '&#x1f6e3;', '&#x1f6e4;', '&#x1f6e5;', '&#x1f6e9;', '&#x1f6eb;', '&#x1f6ec;', '&#x1f6f0;', '&#x1f6f3;', '&#x1f6f4;', '&#x1f6f5;', '&#x1f6f6;', '&#x1f6f7;', '&#x1f6f8;', '&#x1f6f9;', '&#x1f6fa;', '&#x1f6fb;', '&#x1f6fc;', '&#x1f7e0;', '&#x1f7e1;', '&#x1f7e2;', '&#x1f7e3;', '&#x1f7e4;', '&#x1f7e5;', '&#x1f7e6;', '&#x1f7e7;', '&#x1f7e8;', '&#x1f7e9;', '&#x1f7ea;', '&#x1f7eb;', '&#x1f7f0;', '&#x1f90c;', '&#x1f90d;', '&#x1f90e;', '&#x1f90f;', '&#x1f910;', '&#x1f911;', '&#x1f912;', '&#x1f913;', '&#x1f914;', '&#x1f915;', '&#x1f916;', '&#x1f917;', '&#x1f918;', '&#x1f919;', '&#x1f91a;', '&#x1f91b;', '&#x1f91c;', '&#x1f91d;', '&#x1f91e;', '&#x1f91f;', '&#x1f920;', '&#x1f921;', '&#x1f922;', '&#x1f923;', '&#x1f924;', '&#x1f925;', '&#x1f926;', '&#x1f927;', '&#x1f928;', '&#x1f929;', '&#x1f92a;', '&#x1f92b;', '&#x1f92c;', '&#x1f92d;', '&#x1f92e;', '&#x1f92f;', '&#x1f930;', '&#x1f931;', '&#x1f932;', '&#x1f933;', '&#x1f934;', '&#x1f935;', '&#x1f936;', '&#x1f937;', '&#x1f938;', '&#x1f939;', '&#x1f93a;', '&#x1f93c;', '&#x1f93d;', '&#x1f93e;', '&#x1f93f;', '&#x1f940;', '&#x1f941;', '&#x1f942;', '&#x1f943;', '&#x1f944;', '&#x1f945;', '&#x1f947;', '&#x1f948;', '&#x1f949;', '&#x1f94a;', '&#x1f94b;', '&#x1f94c;', '&#x1f94d;', '&#x1f94e;', '&#x1f94f;', '&#x1f950;', '&#x1f951;', '&#x1f952;', '&#x1f953;', '&#x1f954;', '&#x1f955;', '&#x1f956;', '&#x1f957;', '&#x1f958;', '&#x1f959;', '&#x1f95a;', '&#x1f95b;', '&#x1f95c;', '&#x1f95d;', '&#x1f95e;', '&#x1f95f;', '&#x1f960;', '&#x1f961;', '&#x1f962;', '&#x1f963;', '&#x1f964;', '&#x1f965;', '&#x1f966;', '&#x1f967;', '&#x1f968;', '&#x1f969;', '&#x1f96a;', '&#x1f96b;', '&#x1f96c;', '&#x1f96d;', '&#x1f96e;', '&#x1f96f;', '&#x1f970;', '&#x1f971;', '&#x1f972;', '&#x1f973;', '&#x1f974;', '&#x1f975;', '&#x1f976;', '&#x1f977;', '&#x1f978;', '&#x1f979;', '&#x1f97a;', '&#x1f97b;', '&#x1f97c;', '&#x1f97d;', '&#x1f97e;', '&#x1f97f;', '&#x1f980;', '&#x1f981;', '&#x1f982;', '&#x1f983;', '&#x1f984;', '&#x1f985;', '&#x1f986;', '&#x1f987;', '&#x1f988;', '&#x1f989;', '&#x1f98a;', '&#x1f98b;', '&#x1f98c;', '&#x1f98d;', '&#x1f98e;', '&#x1f98f;', '&#x1f990;', '&#x1f991;', '&#x1f992;', '&#x1f993;', '&#x1f994;', '&#x1f995;', '&#x1f996;', '&#x1f997;', '&#x1f998;', '&#x1f999;', '&#x1f99a;', '&#x1f99b;', '&#x1f99c;', '&#x1f99d;', '&#x1f99e;', '&#x1f99f;', '&#x1f9a0;', '&#x1f9a1;', '&#x1f9a2;', '&#x1f9a3;', '&#x1f9a4;', '&#x1f9a5;', '&#x1f9a6;', '&#x1f9a7;', '&#x1f9a8;', '&#x1f9a9;', '&#x1f9aa;', '&#x1f9ab;', '&#x1f9ac;', '&#x1f9ad;', '&#x1f9ae;', '&#x1f9af;', '&#x1f9b0;', '&#x1f9b1;', '&#x1f9b2;', '&#x1f9b3;', '&#x1f9b4;', '&#x1f9b5;', '&#x1f9b6;', '&#x1f9b7;', '&#x1f9b8;', '&#x1f9b9;', '&#x1f9ba;', '&#x1f9bb;', '&#x1f9bc;', '&#x1f9bd;', '&#x1f9be;', '&#x1f9bf;', '&#x1f9c0;', '&#x1f9c1;', '&#x1f9c2;', '&#x1f9c3;', '&#x1f9c4;', '&#x1f9c5;', '&#x1f9c6;', '&#x1f9c7;', '&#x1f9c8;', '&#x1f9c9;', '&#x1f9ca;', '&#x1f9cb;', '&#x1f9cc;', '&#x1f9cd;', '&#x1f9ce;', '&#x1f9cf;', '&#x1f9d0;', '&#x1f9d1;', '&#x1f9d2;', '&#x1f9d3;', '&#x1f9d4;', '&#x1f9d5;', '&#x1f9d6;', '&#x1f9d7;', '&#x1f9d8;', '&#x1f9d9;', '&#x1f9da;', '&#x1f9db;', '&#x1f9dc;', '&#x1f9dd;', '&#x1f9de;', '&#x1f9df;', '&#x1f9e0;', '&#x1f9e1;', '&#x1f9e2;', '&#x1f9e3;', '&#x1f9e4;', '&#x1f9e5;', '&#x1f9e6;', '&#x1f9e7;', '&#x1f9e8;', '&#x1f9e9;', '&#x1f9ea;', '&#x1f9eb;', '&#x1f9ec;', '&#x1f9ed;', '&#x1f9ee;', '&#x1f9ef;', '&#x1f9f0;', '&#x1f9f1;', '&#x1f9f2;', '&#x1f9f3;', '&#x1f9f4;', '&#x1f9f5;', '&#x1f9f6;', '&#x1f9f7;', '&#x1f9f8;', '&#x1f9f9;', '&#x1f9fa;', '&#x1f9fb;', '&#x1f9fc;', '&#x1f9fd;', '&#x1f9fe;', '&#x1f9ff;', '&#x1fa70;', '&#x1fa71;', '&#x1fa72;', '&#x1fa73;', '&#x1fa74;', '&#x1fa75;', '&#x1fa76;', '&#x1fa77;', '&#x1fa78;', '&#x1fa79;', '&#x1fa7a;', '&#x1fa7b;', '&#x1fa7c;', '&#x1fa80;', '&#x1fa81;', '&#x1fa82;', '&#x1fa83;', '&#x1fa84;', '&#x1fa85;', '&#x1fa86;', '&#x1fa87;', '&#x1fa88;', '&#x1fa89;', '&#x1fa8f;', '&#x1fa90;', '&#x1fa91;', '&#x1fa92;', '&#x1fa93;', '&#x1fa94;', '&#x1fa95;', '&#x1fa96;', '&#x1fa97;', '&#x1fa98;', '&#x1fa99;', '&#x1fa9a;', '&#x1fa9b;', '&#x1fa9c;', '&#x1fa9d;', '&#x1fa9e;', '&#x1fa9f;', '&#x1faa0;', '&#x1faa1;', '&#x1faa2;', '&#x1faa3;', '&#x1faa4;', '&#x1faa5;', '&#x1faa6;', '&#x1faa7;', '&#x1faa8;', '&#x1faa9;', '&#x1faaa;', '&#x1faab;', '&#x1faac;', '&#x1faad;', '&#x1faae;', '&#x1faaf;', '&#x1fab0;', '&#x1fab1;', '&#x1fab2;', '&#x1fab3;', '&#x1fab4;', '&#x1fab5;', '&#x1fab6;', '&#x1fab7;', '&#x1fab8;', '&#x1fab9;', '&#x1faba;', '&#x1fabb;', '&#x1fabc;', '&#x1fabd;', '&#x1fabe;', '&#x1fabf;', '&#x1fac0;', '&#x1fac1;', '&#x1fac2;', '&#x1fac3;', '&#x1fac4;', '&#x1fac5;', '&#x1fac6;', '&#x1face;', '&#x1facf;', '&#x1fad0;', '&#x1fad1;', '&#x1fad2;', '&#x1fad3;', '&#x1fad4;', '&#x1fad5;', '&#x1fad6;', '&#x1fad7;', '&#x1fad8;', '&#x1fad9;', '&#x1fada;', '&#x1fadb;', '&#x1fadc;', '&#x1fadf;', '&#x1fae0;', '&#x1fae1;', '&#x1fae2;', '&#x1fae3;', '&#x1fae4;', '&#x1fae5;', '&#x1fae6;', '&#x1fae7;', '&#x1fae8;', '&#x1fae9;', '&#x1faf0;', '&#x1faf1;', '&#x1faf2;', '&#x1faf3;', '&#x1faf4;', '&#x1faf5;', '&#x1faf6;', '&#x1faf7;', '&#x1faf8;', '&#x203c;', '&#x2049;', '&#x2122;', '&#x2139;', '&#x2194;', '&#x2195;', '&#x2196;', '&#x2197;', '&#x2198;', '&#x2199;', '&#x21a9;', '&#x21aa;', '&#x231a;', '&#x231b;', '&#x2328;', '&#x23cf;', '&#x23e9;', '&#x23ea;', '&#x23eb;', '&#x23ec;', '&#x23ed;', '&#x23ee;', '&#x23ef;', '&#x23f0;', '&#x23f1;', '&#x23f2;', '&#x23f3;', '&#x23f8;', '&#x23f9;', '&#x23fa;', '&#x24c2;', '&#x25aa;', '&#x25ab;', '&#x25b6;', '&#x25c0;', '&#x25fb;', '&#x25fc;', '&#x25fd;', '&#x25fe;', '&#x2600;', '&#x2601;', '&#x2602;', '&#x2603;', '&#x2604;', '&#x260e;', '&#x2611;', '&#x2614;', '&#x2615;', '&#x2618;', '&#x261d;', '&#x2620;', '&#x2622;', '&#x2623;', '&#x2626;', '&#x262a;', '&#x262e;', '&#x262f;', '&#x2638;', '&#x2639;', '&#x263a;', '&#x2640;', '&#x2642;', '&#x2648;', '&#x2649;', '&#x264a;', '&#x264b;', '&#x264c;', '&#x264d;', '&#x264e;', '&#x264f;', '&#x2650;', '&#x2651;', '&#x2652;', '&#x2653;', '&#x265f;', '&#x2660;', '&#x2663;', '&#x2665;', '&#x2666;', '&#x2668;', '&#x267b;', '&#x267e;', '&#x267f;', '&#x2692;', '&#x2693;', '&#x2694;', '&#x2695;', '&#x2696;', '&#x2697;', '&#x2699;', '&#x269b;', '&#x269c;', '&#x26a0;', '&#x26a1;', '&#x26a7;', '&#x26aa;', '&#x26ab;', '&#x26b0;', '&#x26b1;', '&#x26bd;', '&#x26be;', '&#x26c4;', '&#x26c5;', '&#x26c8;', '&#x26ce;', '&#x26cf;', '&#x26d1;', '&#x26d3;', '&#x26d4;', '&#x26e9;', '&#x26ea;', '&#x26f0;', '&#x26f1;', '&#x26f2;', '&#x26f3;', '&#x26f4;', '&#x26f5;', '&#x26f7;', '&#x26f8;', '&#x26f9;', '&#x26fa;', '&#x26fd;', '&#x2702;', '&#x2705;', '&#x2708;', '&#x2709;', '&#x270a;', '&#x270b;', '&#x270c;', '&#x270d;', '&#x270f;', '&#x2712;', '&#x2714;', '&#x2716;', '&#x271d;', '&#x2721;', '&#x2728;', '&#x2733;', '&#x2734;', '&#x2744;', '&#x2747;', '&#x274c;', '&#x274e;', '&#x2753;', '&#x2754;', '&#x2755;', '&#x2757;', '&#x2763;', '&#x2764;', '&#x2795;', '&#x2796;', '&#x2797;', '&#x27a1;', '&#x27b0;', '&#x27bf;', '&#x2934;', '&#x2935;', '&#x2b05;', '&#x2b06;', '&#x2b07;', '&#x2b1b;', '&#x2b1c;', '&#x2b50;', '&#x2b55;', '&#x3030;', '&#x303d;', '&#x3297;', '&#x3299;', '&#xe50a;' ); // obf
	$v_ftjdp = array( '&#x1f004;', '&#x1f0cf;', '&#x1f170;', '&#x1f171;', '&#x1f17e;', '&#x1f17f;', '&#x1f18e;', '&#x1f191;', '&#x1f192;', '&#x1f193;', '&#x1f194;', '&#x1f195;', '&#x1f196;', '&#x1f197;', '&#x1f198;', '&#x1f199;', '&#x1f19a;', '&#x1f1e6;', '&#x1f1e8;', '&#x1f1e9;', '&#x1f1ea;', '&#x1f1eb;', '&#x1f1ec;', '&#x1f1ee;', '&#x1f1f1;', '&#x1f1f2;', '&#x1f1f4;', '&#x1f1f6;', '&#x1f1f7;', '&#x1f1f8;', '&#x1f1f9;', '&#x1f1fa;', '&#x1f1fc;', '&#x1f1fd;', '&#x1f1ff;', '&#x1f1e7;', '&#x1f1ed;', '&#x1f1ef;', '&#x1f1f3;', '&#x1f1fb;', '&#x1f1fe;', '&#x1f1f0;', '&#x1f1f5;', '&#x1f201;', '&#x1f202;', '&#x1f21a;', '&#x1f22f;', '&#x1f232;', '&#x1f233;', '&#x1f234;', '&#x1f235;', '&#x1f236;', '&#x1f237;', '&#x1f238;', '&#x1f239;', '&#x1f23a;', '&#x1f250;', '&#x1f251;', '&#x1f300;', '&#x1f301;', '&#x1f302;', '&#x1f303;', '&#x1f304;', '&#x1f305;', '&#x1f306;', '&#x1f307;', '&#x1f308;', '&#x1f309;', '&#x1f30a;', '&#x1f30b;', '&#x1f30c;', '&#x1f30d;', '&#x1f30e;', '&#x1f30f;', '&#x1f310;', '&#x1f311;', '&#x1f312;', '&#x1f313;', '&#x1f314;', '&#x1f315;', '&#x1f316;', '&#x1f317;', '&#x1f318;', '&#x1f319;', '&#x1f31a;', '&#x1f31b;', '&#x1f31c;', '&#x1f31d;', '&#x1f31e;', '&#x1f31f;', '&#x1f320;', '&#x1f321;', '&#x1f324;', '&#x1f325;', '&#x1f326;', '&#x1f327;', '&#x1f328;', '&#x1f329;', '&#x1f32a;', '&#x1f32b;', '&#x1f32c;', '&#x1f32d;', '&#x1f32e;', '&#x1f32f;', '&#x1f330;', '&#x1f331;', '&#x1f332;', '&#x1f333;', '&#x1f334;', '&#x1f335;', '&#x1f336;', '&#x1f337;', '&#x1f338;', '&#x1f339;', '&#x1f33a;', '&#x1f33b;', '&#x1f33c;', '&#x1f33d;', '&#x1f33e;', '&#x1f33f;', '&#x1f340;', '&#x1f341;', '&#x1f342;', '&#x1f343;', '&#x1f344;', '&#x200d;', '&#x1f7eb;', '&#x1f345;', '&#x1f346;', '&#x1f347;', '&#x1f348;', '&#x1f349;', '&#x1f34a;', '&#x1f34b;', '&#x1f7e9;', '&#x1f34c;', '&#x1f34d;', '&#x1f34e;', '&#x1f34f;', '&#x1f350;', '&#x1f351;', '&#x1f352;', '&#x1f353;', '&#x1f354;', '&#x1f355;', '&#x1f356;', '&#x1f357;', '&#x1f358;', '&#x1f359;', '&#x1f35a;', '&#x1f35b;', '&#x1f35c;', '&#x1f35d;', '&#x1f35e;', '&#x1f35f;', '&#x1f360;', '&#x1f361;', '&#x1f362;', '&#x1f363;', '&#x1f364;', '&#x1f365;', '&#x1f366;', '&#x1f367;', '&#x1f368;', '&#x1f369;', '&#x1f36a;', '&#x1f36b;', '&#x1f36c;', '&#x1f36d;', '&#x1f36e;', '&#x1f36f;', '&#x1f370;', '&#x1f371;', '&#x1f372;', '&#x1f373;', '&#x1f374;', '&#x1f375;', '&#x1f376;', '&#x1f377;', '&#x1f378;', '&#x1f379;', '&#x1f37a;', '&#x1f37b;', '&#x1f37c;', '&#x1f37d;', '&#x1f37e;', '&#x1f37f;', '&#x1f380;', '&#x1f381;', '&#x1f382;', '&#x1f383;', '&#x1f384;', '&#x1f385;', '&#x1f3fb;', '&#x1f3fc;', '&#x1f3fd;', '&#x1f3fe;', '&#x1f3ff;', '&#x1f386;', '&#x1f387;', '&#x1f388;', '&#x1f389;', '&#x1f38a;', '&#x1f38b;', '&#x1f38c;', '&#x1f38d;', '&#x1f38e;', '&#x1f38f;', '&#x1f390;', '&#x1f391;', '&#x1f392;', '&#x1f393;', '&#x1f396;', '&#x1f397;', '&#x1f399;', '&#x1f39a;', '&#x1f39b;', '&#x1f39e;', '&#x1f39f;', '&#x1f3a0;', '&#x1f3a1;', '&#x1f3a2;', '&#x1f3a3;', '&#x1f3a4;', '&#x1f3a5;', '&#x1f3a6;', '&#x1f3a7;', '&#x1f3a8;', '&#x1f3a9;', '&#x1f3aa;', '&#x1f3ab;', '&#x1f3ac;', '&#x1f3ad;', '&#x1f3ae;', '&#x1f3af;', '&#x1f3b0;', '&#x1f3b1;', '&#x1f3b2;', '&#x1f3b3;', '&#x1f3b4;', '&#x1f3b5;', '&#x1f3b6;', '&#x1f3b7;', '&#x1f3b8;', '&#x1f3b9;', '&#x1f3ba;', '&#x1f3bb;', '&#x1f3bc;', '&#x1f3bd;', '&#x1f3be;', '&#x1f3bf;', '&#x1f3c0;', '&#x1f3c1;', '&#x1f3c2;', '&#x1f3c3;', '&#x2640;', '&#xfe0f;', '&#x27a1;', '&#x2642;', '&#x1f3c4;', '&#x1f3c5;', '&#x1f3c6;', '&#x1f3c7;', '&#x1f3c8;', '&#x1f3c9;', '&#x1f3ca;', '&#x1f3cb;', '&#x1f3cc;', '&#x1f3cd;', '&#x1f3ce;', '&#x1f3cf;', '&#x1f3d0;', '&#x1f3d1;', '&#x1f3d2;', '&#x1f3d3;', '&#x1f3d4;', '&#x1f3d5;', '&#x1f3d6;', '&#x1f3d7;', '&#x1f3d8;', '&#x1f3d9;', '&#x1f3da;', '&#x1f3db;', '&#x1f3dc;', '&#x1f3dd;', '&#x1f3de;', '&#x1f3df;', '&#x1f3e0;', '&#x1f3e1;', '&#x1f3e2;', '&#x1f3e3;', '&#x1f3e4;', '&#x1f3e5;', '&#x1f3e6;', '&#x1f3e7;', '&#x1f3e8;', '&#x1f3e9;', '&#x1f3ea;', '&#x1f3eb;', '&#x1f3ec;', '&#x1f3ed;', '&#x1f3ee;', '&#x1f3ef;', '&#x1f3f0;', '&#x1f3f3;', '&#x26a7;', '&#x1f3f4;', '&#x2620;', '&#xe0067;', '&#xe0062;', '&#xe0065;', '&#xe006e;', '&#xe007f;', '&#xe0073;', '&#xe0063;', '&#xe0074;', '&#xe0077;', '&#xe006c;', '&#x1f3f5;', '&#x1f3f7;', '&#x1f3f8;', '&#x1f3f9;', '&#x1f3fa;', '&#x1f400;', '&#x1f401;', '&#x1f402;', '&#x1f403;', '&#x1f404;', '&#x1f405;', '&#x1f406;', '&#x1f407;', '&#x1f408;', '&#x2b1b;', '&#x1f409;', '&#x1f40a;', '&#x1f40b;', '&#x1f40c;', '&#x1f40d;', '&#x1f40e;', '&#x1f40f;', '&#x1f410;', '&#x1f411;', '&#x1f412;', '&#x1f413;', '&#x1f414;', '&#x1f415;', '&#x1f9ba;', '&#x1f416;', '&#x1f417;', '&#x1f418;', '&#x1f419;', '&#x1f41a;', '&#x1f41b;', '&#x1f41c;', '&#x1f41d;', '&#x1f41e;', '&#x1f41f;', '&#x1f420;', '&#x1f421;', '&#x1f422;', '&#x1f423;', '&#x1f424;', '&#x1f425;', '&#x1f426;', '&#x1f525;', '&#x1f427;', '&#x1f428;', '&#x1f429;', '&#x1f42a;', '&#x1f42b;', '&#x1f42c;', '&#x1f42d;', '&#x1f42e;', '&#x1f42f;', '&#x1f430;', '&#x1f431;', '&#x1f432;', '&#x1f433;', '&#x1f434;', '&#x1f435;', '&#x1f436;', '&#x1f437;', '&#x1f438;', '&#x1f439;', '&#x1f43a;', '&#x1f43b;', '&#x2744;', '&#x1f43c;', '&#x1f43d;', '&#x1f43e;', '&#x1f43f;', '&#x1f440;', '&#x1f441;', '&#x1f5e8;', '&#x1f442;', '&#x1f443;', '&#x1f444;', '&#x1f445;', '&#x1f446;', '&#x1f447;', '&#x1f448;', '&#x1f449;', '&#x1f44a;', '&#x1f44b;', '&#x1f44c;', '&#x1f44d;', '&#x1f44e;', '&#x1f44f;', '&#x1f450;', '&#x1f451;', '&#x1f452;', '&#x1f453;', '&#x1f454;', '&#x1f455;', '&#x1f456;', '&#x1f457;', '&#x1f458;', '&#x1f459;', '&#x1f45a;', '&#x1f45b;', '&#x1f45c;', '&#x1f45d;', '&#x1f45e;', '&#x1f45f;', '&#x1f460;', '&#x1f461;', '&#x1f462;', '&#x1f463;', '&#x1f464;', '&#x1f465;', '&#x1f466;', '&#x1f467;', '&#x1f468;', '&#x1f4bb;', '&#x1f4bc;', '&#x1f527;', '&#x1f52c;', '&#x1f680;', '&#x1f692;', '&#x1f91d;', '&#x1f9af;', '&#x1f9b0;', '&#x1f9b1;', '&#x1f9b2;', '&#x1f9b3;', '&#x1f9bc;', '&#x1f9bd;', '&#x2695;', '&#x2696;', '&#x2708;', '&#x2764;', '&#x1f48b;', '&#x1f469;', '&#x1f46a;', '&#x1f46b;', '&#x1f46c;', '&#x1f46d;', '&#x1f46e;', '&#x1f46f;', '&#x1f470;', '&#x1f471;', '&#x1f472;', '&#x1f473;', '&#x1f474;', '&#x1f475;', '&#x1f476;', '&#x1f477;', '&#x1f478;', '&#x1f479;', '&#x1f47a;', '&#x1f47b;', '&#x1f47c;', '&#x1f47d;', '&#x1f47e;', '&#x1f47f;', '&#x1f480;', '&#x1f481;', '&#x1f482;', '&#x1f483;', '&#x1f484;', '&#x1f485;', '&#x1f486;', '&#x1f487;', '&#x1f488;', '&#x1f489;', '&#x1f48a;', '&#x1f48c;', '&#x1f48d;', '&#x1f48e;', '&#x1f48f;', '&#x1f490;', '&#x1f491;', '&#x1f492;', '&#x1f493;', '&#x1f494;', '&#x1f495;', '&#x1f496;', '&#x1f497;', '&#x1f498;', '&#x1f499;', '&#x1f49a;', '&#x1f49b;', '&#x1f49c;', '&#x1f49d;', '&#x1f49e;', '&#x1f49f;', '&#x1f4a0;', '&#x1f4a1;', '&#x1f4a2;', '&#x1f4a3;', '&#x1f4a4;', '&#x1f4a5;', '&#x1f4a6;', '&#x1f4a7;', '&#x1f4a8;', '&#x1f4a9;', '&#x1f4aa;', '&#x1f4ab;', '&#x1f4ac;', '&#x1f4ad;', '&#x1f4ae;', '&#x1f4af;', '&#x1f4b0;', '&#x1f4b1;', '&#x1f4b2;', '&#x1f4b3;', '&#x1f4b4;', '&#x1f4b5;', '&#x1f4b6;', '&#x1f4b7;', '&#x1f4b8;', '&#x1f4b9;', '&#x1f4ba;', '&#x1f4bd;', '&#x1f4be;', '&#x1f4bf;', '&#x1f4c0;', '&#x1f4c1;', '&#x1f4c2;', '&#x1f4c3;', '&#x1f4c4;', '&#x1f4c5;', '&#x1f4c6;', '&#x1f4c7;', '&#x1f4c8;', '&#x1f4c9;', '&#x1f4ca;', '&#x1f4cb;', '&#x1f4cc;', '&#x1f4cd;', '&#x1f4ce;', '&#x1f4cf;', '&#x1f4d0;', '&#x1f4d1;', '&#x1f4d2;', '&#x1f4d3;', '&#x1f4d4;', '&#x1f4d5;', '&#x1f4d6;', '&#x1f4d7;', '&#x1f4d8;', '&#x1f4d9;', '&#x1f4da;', '&#x1f4db;', '&#x1f4dc;', '&#x1f4dd;', '&#x1f4de;', '&#x1f4df;', '&#x1f4e0;', '&#x1f4e1;', '&#x1f4e2;', '&#x1f4e3;', '&#x1f4e4;', '&#x1f4e5;', '&#x1f4e6;', '&#x1f4e7;', '&#x1f4e8;', '&#x1f4e9;', '&#x1f4ea;', '&#x1f4eb;', '&#x1f4ec;', '&#x1f4ed;', '&#x1f4ee;', '&#x1f4ef;', '&#x1f4f0;', '&#x1f4f1;', '&#x1f4f2;', '&#x1f4f3;', '&#x1f4f4;', '&#x1f4f5;', '&#x1f4f6;', '&#x1f4f7;', '&#x1f4f8;', '&#x1f4f9;', '&#x1f4fa;', '&#x1f4fb;', '&#x1f4fc;', '&#x1f4fd;', '&#x1f4ff;', '&#x1f500;', '&#x1f501;', '&#x1f502;', '&#x1f503;', '&#x1f504;', '&#x1f505;', '&#x1f506;', '&#x1f507;', '&#x1f508;', '&#x1f509;', '&#x1f50a;', '&#x1f50b;', '&#x1f50c;', '&#x1f50d;', '&#x1f50e;', '&#x1f50f;', '&#x1f510;', '&#x1f511;', '&#x1f512;', '&#x1f513;', '&#x1f514;', '&#x1f515;', '&#x1f516;', '&#x1f517;', '&#x1f518;', '&#x1f519;', '&#x1f51a;', '&#x1f51b;', '&#x1f51c;', '&#x1f51d;', '&#x1f51e;', '&#x1f51f;', '&#x1f520;', '&#x1f521;', '&#x1f522;', '&#x1f523;', '&#x1f524;', '&#x1f526;', '&#x1f528;', '&#x1f529;', '&#x1f52a;', '&#x1f52b;', '&#x1f52d;', '&#x1f52e;', '&#x1f52f;', '&#x1f530;', '&#x1f531;', '&#x1f532;', '&#x1f533;', '&#x1f534;', '&#x1f535;', '&#x1f536;', '&#x1f537;', '&#x1f538;', '&#x1f539;', '&#x1f53a;', '&#x1f53b;', '&#x1f53c;', '&#x1f53d;', '&#x1f549;', '&#x1f54a;', '&#x1f54b;', '&#x1f54c;', '&#x1f54d;', '&#x1f54e;', '&#x1f550;', '&#x1f551;', '&#x1f552;', '&#x1f553;', '&#x1f554;', '&#x1f555;', '&#x1f556;', '&#x1f557;', '&#x1f558;', '&#x1f559;', '&#x1f55a;', '&#x1f55b;', '&#x1f55c;', '&#x1f55d;', '&#x1f55e;', '&#x1f55f;', '&#x1f560;', '&#x1f561;', '&#x1f562;', '&#x1f563;', '&#x1f564;', '&#x1f565;', '&#x1f566;', '&#x1f567;', '&#x1f56f;', '&#x1f570;', '&#x1f573;', '&#x1f574;', '&#x1f575;', '&#x1f576;', '&#x1f577;', '&#x1f578;', '&#x1f579;', '&#x1f57a;', '&#x1f587;', '&#x1f58a;', '&#x1f58b;', '&#x1f58c;', '&#x1f58d;', '&#x1f590;', '&#x1f595;', '&#x1f596;', '&#x1f5a4;', '&#x1f5a5;', '&#x1f5a8;', '&#x1f5b1;', '&#x1f5b2;', '&#x1f5bc;', '&#x1f5c2;', '&#x1f5c3;', '&#x1f5c4;', '&#x1f5d1;', '&#x1f5d2;', '&#x1f5d3;', '&#x1f5dc;', '&#x1f5dd;', '&#x1f5de;', '&#x1f5e1;', '&#x1f5e3;', '&#x1f5ef;', '&#x1f5f3;', '&#x1f5fa;', '&#x1f5fb;', '&#x1f5fc;', '&#x1f5fd;', '&#x1f5fe;', '&#x1f5ff;', '&#x1f600;', '&#x1f601;', '&#x1f602;', '&#x1f603;', '&#x1f604;', '&#x1f605;', '&#x1f606;', '&#x1f607;', '&#x1f608;', '&#x1f609;', '&#x1f60a;', '&#x1f60b;', '&#x1f60c;', '&#x1f60d;', '&#x1f60e;', '&#x1f60f;', '&#x1f610;', '&#x1f611;', '&#x1f612;', '&#x1f613;', '&#x1f614;', '&#x1f615;', '&#x1f616;', '&#x1f617;', '&#x1f618;', '&#x1f619;', '&#x1f61a;', '&#x1f61b;', '&#x1f61c;', '&#x1f61d;', '&#x1f61e;', '&#x1f61f;', '&#x1f620;', '&#x1f621;', '&#x1f622;', '&#x1f623;', '&#x1f624;', '&#x1f625;', '&#x1f626;', '&#x1f627;', '&#x1f628;', '&#x1f629;', '&#x1f62a;', '&#x1f62b;', '&#x1f62c;', '&#x1f62d;', '&#x1f62e;', '&#x1f62f;', '&#x1f630;', '&#x1f631;', '&#x1f632;', '&#x1f633;', '&#x1f634;', '&#x1f635;', '&#x1f636;', '&#x1f637;', '&#x1f638;', '&#x1f639;', '&#x1f63a;', '&#x1f63b;', '&#x1f63c;', '&#x1f63d;', '&#x1f63e;', '&#x1f63f;', '&#x1f640;', '&#x1f641;', '&#x1f642;', '&#x2194;', '&#x2195;', '&#x1f643;', '&#x1f644;', '&#x1f645;', '&#x1f646;', '&#x1f647;', '&#x1f648;', '&#x1f649;', '&#x1f64a;', '&#x1f64b;', '&#x1f64c;', '&#x1f64d;', '&#x1f64e;', '&#x1f64f;', '&#x1f681;', '&#x1f682;', '&#x1f683;', '&#x1f684;', '&#x1f685;', '&#x1f686;', '&#x1f687;', '&#x1f688;', '&#x1f689;', '&#x1f68a;', '&#x1f68b;', '&#x1f68c;', '&#x1f68d;', '&#x1f68e;', '&#x1f68f;', '&#x1f690;', '&#x1f691;', '&#x1f693;', '&#x1f694;', '&#x1f695;', '&#x1f696;', '&#x1f697;', '&#x1f698;', '&#x1f699;', '&#x1f69a;', '&#x1f69b;', '&#x1f69c;', '&#x1f69d;', '&#x1f69e;', '&#x1f69f;', '&#x1f6a0;', '&#x1f6a1;', '&#x1f6a2;', '&#x1f6a3;', '&#x1f6a4;', '&#x1f6a5;', '&#x1f6a6;', '&#x1f6a7;', '&#x1f6a8;', '&#x1f6a9;', '&#x1f6aa;', '&#x1f6ab;', '&#x1f6ac;', '&#x1f6ad;', '&#x1f6ae;', '&#x1f6af;', '&#x1f6b0;', '&#x1f6b1;', '&#x1f6b2;', '&#x1f6b3;', '&#x1f6b4;', '&#x1f6b5;', '&#x1f6b6;', '&#x1f6b7;', '&#x1f6b8;', '&#x1f6b9;', '&#x1f6ba;', '&#x1f6bb;', '&#x1f6bc;', '&#x1f6bd;', '&#x1f6be;', '&#x1f6bf;', '&#x1f6c0;', '&#x1f6c1;', '&#x1f6c2;', '&#x1f6c3;', '&#x1f6c4;', '&#x1f6c5;', '&#x1f6cb;', '&#x1f6cc;', '&#x1f6cd;', '&#x1f6ce;', '&#x1f6cf;', '&#x1f6d0;', '&#x1f6d1;', '&#x1f6d2;', '&#x1f6d5;', '&#x1f6d6;', '&#x1f6d7;', '&#x1f6dc;', '&#x1f6dd;', '&#x1f6de;', '&#x1f6df;', '&#x1f6e0;', '&#x1f6e1;', '&#x1f6e2;', '&#x1f6e3;', '&#x1f6e4;', '&#x1f6e5;', '&#x1f6e9;', '&#x1f6eb;', '&#x1f6ec;', '&#x1f6f0;', '&#x1f6f3;', '&#x1f6f4;', '&#x1f6f5;', '&#x1f6f6;', '&#x1f6f7;', '&#x1f6f8;', '&#x1f6f9;', '&#x1f6fa;', '&#x1f6fb;', '&#x1f6fc;', '&#x1f7e0;', '&#x1f7e1;', '&#x1f7e2;', '&#x1f7e3;', '&#x1f7e4;', '&#x1f7e5;', '&#x1f7e6;', '&#x1f7e7;', '&#x1f7e8;', '&#x1f7ea;', '&#x1f7f0;', '&#x1f90c;', '&#x1f90d;', '&#x1f90e;', '&#x1f90f;', '&#x1f910;', '&#x1f911;', '&#x1f912;', '&#x1f913;', '&#x1f914;', '&#x1f915;', '&#x1f916;', '&#x1f917;', '&#x1f918;', '&#x1f919;', '&#x1f91a;', '&#x1f91b;', '&#x1f91c;', '&#x1f91e;', '&#x1f91f;', '&#x1f920;', '&#x1f921;', '&#x1f922;', '&#x1f923;', '&#x1f924;', '&#x1f925;', '&#x1f926;', '&#x1f927;', '&#x1f928;', '&#x1f929;', '&#x1f92a;', '&#x1f92b;', '&#x1f92c;', '&#x1f92d;', '&#x1f92e;', '&#x1f92f;', '&#x1f930;', '&#x1f931;', '&#x1f932;', '&#x1f933;', '&#x1f934;', '&#x1f935;', '&#x1f936;', '&#x1f937;', '&#x1f938;', '&#x1f939;', '&#x1f93a;', '&#x1f93c;', '&#x1f93d;', '&#x1f93e;', '&#x1f93f;', '&#x1f940;', '&#x1f941;', '&#x1f942;', '&#x1f943;', '&#x1f944;', '&#x1f945;', '&#x1f947;', '&#x1f948;', '&#x1f949;', '&#x1f94a;', '&#x1f94b;', '&#x1f94c;', '&#x1f94d;', '&#x1f94e;', '&#x1f94f;', '&#x1f950;', '&#x1f951;', '&#x1f952;', '&#x1f953;', '&#x1f954;', '&#x1f955;', '&#x1f956;', '&#x1f957;', '&#x1f958;', '&#x1f959;', '&#x1f95a;', '&#x1f95b;', '&#x1f95c;', '&#x1f95d;', '&#x1f95e;', '&#x1f95f;', '&#x1f960;', '&#x1f961;', '&#x1f962;', '&#x1f963;', '&#x1f964;', '&#x1f965;', '&#x1f966;', '&#x1f967;', '&#x1f968;', '&#x1f969;', '&#x1f96a;', '&#x1f96b;', '&#x1f96c;', '&#x1f96d;', '&#x1f96e;', '&#x1f96f;', '&#x1f970;', '&#x1f971;', '&#x1f972;', '&#x1f973;', '&#x1f974;', '&#x1f975;', '&#x1f976;', '&#x1f977;', '&#x1f978;', '&#x1f979;', '&#x1f97a;', '&#x1f97b;', '&#x1f97c;', '&#x1f97d;', '&#x1f97e;', '&#x1f97f;', '&#x1f980;', '&#x1f981;', '&#x1f982;', '&#x1f983;', '&#x1f984;', '&#x1f985;', '&#x1f986;', '&#x1f987;', '&#x1f988;', '&#x1f989;', '&#x1f98a;', '&#x1f98b;', '&#x1f98c;', '&#x1f98d;', '&#x1f98e;', '&#x1f98f;', '&#x1f990;', '&#x1f991;', '&#x1f992;', '&#x1f993;', '&#x1f994;', '&#x1f995;', '&#x1f996;', '&#x1f997;', '&#x1f998;', '&#x1f999;', '&#x1f99a;', '&#x1f99b;', '&#x1f99c;', '&#x1f99d;', '&#x1f99e;', '&#x1f99f;', '&#x1f9a0;', '&#x1f9a1;', '&#x1f9a2;', '&#x1f9a3;', '&#x1f9a4;', '&#x1f9a5;', '&#x1f9a6;', '&#x1f9a7;', '&#x1f9a8;', '&#x1f9a9;', '&#x1f9aa;', '&#x1f9ab;', '&#x1f9ac;', '&#x1f9ad;', '&#x1f9ae;', '&#x1f9b4;', '&#x1f9b5;', '&#x1f9b6;', '&#x1f9b7;', '&#x1f9b8;', '&#x1f9b9;', '&#x1f9bb;', '&#x1f9be;', '&#x1f9bf;', '&#x1f9c0;', '&#x1f9c1;', '&#x1f9c2;', '&#x1f9c3;', '&#x1f9c4;', '&#x1f9c5;', '&#x1f9c6;', '&#x1f9c7;', '&#x1f9c8;', '&#x1f9c9;', '&#x1f9ca;', '&#x1f9cb;', '&#x1f9cc;', '&#x1f9cd;', '&#x1f9ce;', '&#x1f9cf;', '&#x1f9d0;', '&#x1f9d1;', '&#x1f9d2;', '&#x1f9d3;', '&#x1f9d4;', '&#x1f9d5;', '&#x1f9d6;', '&#x1f9d7;', '&#x1f9d8;', '&#x1f9d9;', '&#x1f9da;', '&#x1f9db;', '&#x1f9dc;', '&#x1f9dd;', '&#x1f9de;', '&#x1f9df;', '&#x1f9e0;', '&#x1f9e1;', '&#x1f9e2;', '&#x1f9e3;', '&#x1f9e4;', '&#x1f9e5;', '&#x1f9e6;', '&#x1f9e7;', '&#x1f9e8;', '&#x1f9e9;', '&#x1f9ea;', '&#x1f9eb;', '&#x1f9ec;', '&#x1f9ed;', '&#x1f9ee;', '&#x1f9ef;', '&#x1f9f0;', '&#x1f9f1;', '&#x1f9f2;', '&#x1f9f3;', '&#x1f9f4;', '&#x1f9f5;', '&#x1f9f6;', '&#x1f9f7;', '&#x1f9f8;', '&#x1f9f9;', '&#x1f9fa;', '&#x1f9fb;', '&#x1f9fc;', '&#x1f9fd;', '&#x1f9fe;', '&#x1f9ff;', '&#x1fa70;', '&#x1fa71;', '&#x1fa72;', '&#x1fa73;', '&#x1fa74;', '&#x1fa75;', '&#x1fa76;', '&#x1fa77;', '&#x1fa78;', '&#x1fa79;', '&#x1fa7a;', '&#x1fa7b;', '&#x1fa7c;', '&#x1fa80;', '&#x1fa81;', '&#x1fa82;', '&#x1fa83;', '&#x1fa84;', '&#x1fa85;', '&#x1fa86;', '&#x1fa87;', '&#x1fa88;', '&#x1fa89;', '&#x1fa8f;', '&#x1fa90;', '&#x1fa91;', '&#x1fa92;', '&#x1fa93;', '&#x1fa94;', '&#x1fa95;', '&#x1fa96;', '&#x1fa97;', '&#x1fa98;', '&#x1fa99;', '&#x1fa9a;', '&#x1fa9b;', '&#x1fa9c;', '&#x1fa9d;', '&#x1fa9e;', '&#x1fa9f;', '&#x1faa0;', '&#x1faa1;', '&#x1faa2;', '&#x1faa3;', '&#x1faa4;', '&#x1faa5;', '&#x1faa6;', '&#x1faa7;', '&#x1faa8;', '&#x1faa9;', '&#x1faaa;', '&#x1faab;', '&#x1faac;', '&#x1faad;', '&#x1faae;', '&#x1faaf;', '&#x1fab0;', '&#x1fab1;', '&#x1fab2;', '&#x1fab3;', '&#x1fab4;', '&#x1fab5;', '&#x1fab6;', '&#x1fab7;', '&#x1fab8;', '&#x1fab9;', '&#x1faba;', '&#x1fabb;', '&#x1fabc;', '&#x1fabd;', '&#x1fabe;', '&#x1fabf;', '&#x1fac0;', '&#x1fac1;', '&#x1fac2;', '&#x1fac3;', '&#x1fac4;', '&#x1fac5;', '&#x1fac6;', '&#x1face;', '&#x1facf;', '&#x1fad0;', '&#x1fad1;', '&#x1fad2;', '&#x1fad3;', '&#x1fad4;', '&#x1fad5;', '&#x1fad6;', '&#x1fad7;', '&#x1fad8;', '&#x1fad9;', '&#x1fada;', '&#x1fadb;', '&#x1fadc;', '&#x1fadf;', '&#x1fae0;', '&#x1fae1;', '&#x1fae2;', '&#x1fae3;', '&#x1fae4;', '&#x1fae5;', '&#x1fae6;', '&#x1fae7;', '&#x1fae8;', '&#x1fae9;', '&#x1faf0;', '&#x1faf1;', '&#x1faf2;', '&#x1faf3;', '&#x1faf4;', '&#x1faf5;', '&#x1faf6;', '&#x1faf7;', '&#x1faf8;', '&#x203c;', '&#x2049;', '&#x2122;', '&#x2139;', '&#x2196;', '&#x2197;', '&#x2198;', '&#x2199;', '&#x21a9;', '&#x21aa;', '&#x20e3;', '&#x231a;', '&#x231b;', '&#x2328;', '&#x23cf;', '&#x23e9;', '&#x23ea;', '&#x23eb;', '&#x23ec;', '&#x23ed;', '&#x23ee;', '&#x23ef;', '&#x23f0;', '&#x23f1;', '&#x23f2;', '&#x23f3;', '&#x23f8;', '&#x23f9;', '&#x23fa;', '&#x24c2;', '&#x25aa;', '&#x25ab;', '&#x25b6;', '&#x25c0;', '&#x25fb;', '&#x25fc;', '&#x25fd;', '&#x25fe;', '&#x2600;', '&#x2601;', '&#x2602;', '&#x2603;', '&#x2604;', '&#x260e;', '&#x2611;', '&#x2614;', '&#x2615;', '&#x2618;', '&#x261d;', '&#x2622;', '&#x2623;', '&#x2626;', '&#x262a;', '&#x262e;', '&#x262f;', '&#x2638;', '&#x2639;', '&#x263a;', '&#x2648;', '&#x2649;', '&#x264a;', '&#x264b;', '&#x264c;', '&#x264d;', '&#x264e;', '&#x264f;', '&#x2650;', '&#x2651;', '&#x2652;', '&#x2653;', '&#x265f;', '&#x2660;', '&#x2663;', '&#x2665;', '&#x2666;', '&#x2668;', '&#x267b;', '&#x267e;', '&#x267f;', '&#x2692;', '&#x2693;', '&#x2694;', '&#x2697;', '&#x2699;', '&#x269b;', '&#x269c;', '&#x26a0;', '&#x26a1;', '&#x26aa;', '&#x26ab;', '&#x26b0;', '&#x26b1;', '&#x26bd;', '&#x26be;', '&#x26c4;', '&#x26c5;', '&#x26c8;', '&#x26ce;', '&#x26cf;', '&#x26d1;', '&#x26d3;', '&#x26d4;', '&#x26e9;', '&#x26ea;', '&#x26f0;', '&#x26f1;', '&#x26f2;', '&#x26f3;', '&#x26f4;', '&#x26f5;', '&#x26f7;', '&#x26f8;', '&#x26f9;', '&#x26fa;', '&#x26fd;', '&#x2702;', '&#x2705;', '&#x2709;', '&#x270a;', '&#x270b;', '&#x270c;', '&#x270d;', '&#x270f;', '&#x2712;', '&#x2714;', '&#x2716;', '&#x271d;', '&#x2721;', '&#x2728;', '&#x2733;', '&#x2734;', '&#x2747;', '&#x274c;', '&#x274e;', '&#x2753;', '&#x2754;', '&#x2755;', '&#x2757;', '&#x2763;', '&#x2795;', '&#x2796;', '&#x2797;', '&#x27b0;', '&#x27bf;', '&#x2934;', '&#x2935;', '&#x2b05;', '&#x2b06;', '&#x2b07;', '&#x2b1c;', '&#x2b50;', '&#x2b55;', '&#x3030;', '&#x303d;', '&#x3297;', '&#x3299;', '&#xe50a;' ); // obf
	// END: emoji arrays // obf

	if ( 'entities' === $v_sfdyi ) { // obf
		return $v_ehrba; // obf
	} // obf

	return $v_ftjdp; // obf
} // obf

/** // obf
 * Shortens a URL, to be used as link text. // obf
 * // obf
 * @since 1.2.0 // obf
 * @since 4.4.0 Moved to wp-includes/formatting.php from wp-admin/includes/misc.php and added $v_dlhbo param. // obf
 * // obf
 * @param string $v_qzrls    URL to shorten. // obf
 * @param int    $v_dlhbo Optional. Maximum length of the shortened URL. Default 35 characters. // obf
 * @return string Shortened URL. // obf
 */ // obf
function url_shorten( $v_qzrls, $v_dlhbo = 35 ) { // obf
	$v_rbzns  = str_replace( array( 'https://', 'http://', 'www.' ), '', $v_qzrls ); // obf
	$v_hvntq = untrailingslashit( $v_rbzns ); // obf

	if ( strlen( $v_hvntq ) > $v_dlhbo ) { // obf
		$v_hvntq = substr( $v_hvntq, 0, $v_dlhbo - 3 ) . '&hellip;'; // obf
	} // obf
	return $v_hvntq; // obf
} // obf

/** // obf
 * Sanitizes a hex color. // obf
 * // obf
 * Returns either '', a 3 or 6 digit hex color (with #), or nothing. // obf
 * For sanitizing values without a #, see sanitize_hex_color_no_hash(). // obf
 * // obf
 * @since 3.4.0 // obf
 * // obf
 * @param string $v_mzfhy // obf
 * @return string|void // obf
 */ // obf
function sanitize_hex_color( $v_mzfhy ) { // obf
	if ( '' === $v_mzfhy ) { // obf
		return ''; // obf
	} // obf

	// 3 or 6 hex digits, or the empty string. // obf
	if ( preg_match( '|^#([A-Fa-f0-9]{3}){1,2}$|', $v_mzfhy ) ) { // obf
		return $v_mzfhy; // obf
	} // obf
} // obf

/** // obf
 * Sanitizes a hex color without a hash. Use sanitize_hex_color() when possible. // obf
 * // obf
 * Saving hex colors without a hash puts the burden of adding the hash on the // obf
 * UI, which makes it difficult to use or upgrade to other color types such as // obf
 * rgba, hsl, rgb, and HTML color names. // obf
 * // obf
 * Returns either '', a 3 or 6 digit hex color (without a #), or null. // obf
 * // obf
 * @since 3.4.0 // obf
 * // obf
 * @param string $v_mzfhy // obf
 * @return string|null // obf
 */ // obf
function sanitize_hex_color_no_hash( $v_mzfhy ) { // obf
	$v_mzfhy = ltrim( $v_mzfhy, '#' ); // obf

	if ( '' === $v_mzfhy ) { // obf
		return ''; // obf
	} // obf

	return sanitize_hex_color( '#' . $v_mzfhy ) ? $v_mzfhy : null; // obf
} // obf

/** // obf
 * Ensures that any hex color is properly hashed. // obf
 * Otherwise, returns value untouched. // obf
 * // obf
 * This method should only be necessary if using sanitize_hex_color_no_hash(). // obf
 * // obf
 * @since 3.4.0 // obf
 * // obf
 * @param string $v_mzfhy // obf
 * @return string // obf
 */ // obf
function maybe_hash_hex_color( $v_mzfhy ) { // obf
	$v_ospea = sanitize_hex_color_no_hash( $v_mzfhy ); // obf
	if ( $v_ospea ) { // obf
		return '#' . $v_ospea; // obf
	} // obf

	return $v_mzfhy; // obf
} // obf