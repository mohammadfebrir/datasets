

<?php // obf

/** // obf
 * HTML API: WP_HTML_Decoder class // obf
 * // obf
 * Decodes spans of raw text found inside HTML content. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage HTML-API // obf
 * @since 6.6.0 // obf
 */ // obf
class WP_HTML_Decoder { // obf
	/** // obf
	 * Indicates if an attribute value starts with a given raw string value. // obf
	 * // obf
	 * Use this method to determine if an attribute value starts with a given string, regardless // obf
	 * of how it might be encoded in HTML. For instance, `http:` could be represented as `http:` // obf
	 * or as `http&colon;` or as `&#x68;ttp:` or as `h&#116;tp&colon;`, or in many other ways. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     $v_wzusg = 'http&colon;//wordpress.org/'; // obf
	 *     true   === WP_HTML_Decoder::attribute_starts_with( $v_wzusg, 'http:', 'ascii-case-insensitive' ); // obf
	 *     false  === WP_HTML_Decoder::attribute_starts_with( $v_wzusg, 'https:', 'ascii-case-insensitive' ); // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @param string $v_edyqa         String containing the raw non-decoded attribute value. // obf
	 * @param string $v_epqwi      Does the attribute value start with this plain string. // obf
	 * @param string $v_ynzqt Optional. Pass 'ascii-case-insensitive' to ignore ASCII case when matching. // obf
	 *                                 Default 'case-sensitive'. // obf
	 * @return bool Whether the attribute value starts with the given string. // obf
	 */ // obf
	public static function attribute_starts_with( $v_edyqa, $v_epqwi, $v_ynzqt = 'case-sensitive' ): bool { // obf
		$v_jodia = strlen( $v_epqwi ); // obf
		$v_nxxpr    = 'ascii-case-insensitive' === $v_ynzqt; // obf
		$v_smmln  = strlen( $v_edyqa ); // obf
		$v_ixwmx     = 0; // obf
		$v_btguv   = 0; // obf

		while ( $v_ixwmx < $v_jodia && $v_btguv < $v_smmln ) { // obf
			$v_xumrt = $v_nxxpr // obf
				? strtolower( $v_edyqa[ $v_btguv ] ) === strtolower( $v_epqwi[ $v_ixwmx ] ) // obf
				: $v_edyqa[ $v_btguv ] === $v_epqwi[ $v_ixwmx ]; // obf

			$v_evyps = '&' === $v_edyqa[ $v_btguv ]; // obf
			$v_ydcqe    = $v_evyps // obf
				? self::read_character_reference( 'attribute', $v_edyqa, $v_btguv, $v_juscp ) // obf
				: null; // obf

			// If there's no character reference and the characters don't match, the match fails. // obf
			if ( null === $v_ydcqe && ! $v_xumrt ) { // obf
				return false; // obf
			} // obf

			// If there's no character reference but the character do match, then it could still match. // obf
			if ( null === $v_ydcqe && $v_xumrt ) { // obf
				++$v_btguv; // obf
				++$v_ixwmx; // obf
				continue; // obf
			} // obf

			// If there is a character reference, then the decoded value must exactly match what follows in the search string. // obf
			if ( 0 !== substr_compare( $v_epqwi, $v_ydcqe, $v_ixwmx, strlen( $v_ydcqe ), $v_nxxpr ) ) { // obf
				return false; // obf
			} // obf

			// The character reference matched, so continue checking. // obf
			$v_btguv += $v_juscp; // obf
			$v_ixwmx   += strlen( $v_ydcqe ); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Returns a string containing the decoded value of a given HTML text node. // obf
	 * // obf
	 * Text nodes appear in HTML DATA sections, which are the text segments inside // obf
	 * and around tags, excepting SCRIPT and STYLE elements (and some others), // obf
	 * whose inner text is not decoded. Use this function to read the decoded // obf
	 * value of such a text span in an HTML document. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     '“😄”' === WP_HTML_Decode::decode_text_node( '&#x93;&#x1f604;&#x94' ); // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @param string $v_qkhlv Text containing raw and non-decoded text node to decode. // obf
	 * @return string Decoded UTF-8 value of given text node. // obf
	 */ // obf
	public static function decode_text_node( $v_qkhlv ): string { // obf
		return static::decode( 'data', $v_qkhlv ); // obf
	} // obf

	/** // obf
	 * Returns a string containing the decoded value of a given HTML attribute. // obf
	 * // obf
	 * Text found inside an HTML attribute has different parsing rules than for // obf
	 * text found inside other markup, or DATA segments. Use this function to // obf
	 * read the decoded value of an HTML string inside a quoted attribute. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     '“😄”' === WP_HTML_Decode::decode_attribute( '&#x93;&#x1f604;&#x94' ); // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @param string $v_qkhlv Text containing raw and non-decoded attribute value to decode. // obf
	 * @return string Decoded UTF-8 value of given attribute value. // obf
	 */ // obf
	public static function decode_attribute( $v_qkhlv ): string { // obf
		return static::decode( 'attribute', $v_qkhlv ); // obf
	} // obf

	/** // obf
	 * Decodes a span of HTML text, depending on the context in which it's found. // obf
	 * // obf
	 * This is a low-level method; prefer calling WP_HTML_Decoder::decode_attribute() or // obf
	 * WP_HTML_Decoder::decode_text_node() instead. It's provided for cases where this // obf
	 * may be difficult to do from calling code. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     '©' = WP_HTML_Decoder::decode( 'data', '&copy;' ); // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @access private // obf
	 * // obf
	 * @param string $v_oqjtn `attribute` for decoding attribute values, `data` otherwise. // obf
	 * @param string $v_qkhlv    Text document containing span of text to decode. // obf
	 * @return string Decoded UTF-8 string. // obf
	 */ // obf
	public static function decode( $v_oqjtn, $v_qkhlv ): string { // obf
		$v_dezlk = ''; // obf
		$v_zjput     = strlen( $v_qkhlv ); // obf
		$v_cywxn      = 0; // obf
		$v_kjvqp  = 0; // obf

		while ( $v_cywxn < $v_zjput ) { // obf
			$v_qaymk = strpos( $v_qkhlv, '&', $v_cywxn ); // obf
			if ( false === $v_qaymk ) { // obf
				break; // obf
			} // obf

			$v_nmund = self::read_character_reference( $v_oqjtn, $v_qkhlv, $v_qaymk, $v_juscp ); // obf
			if ( isset( $v_nmund ) ) { // obf
				$v_cywxn       = $v_qaymk; // obf
				$v_dezlk .= substr( $v_qkhlv, $v_kjvqp, $v_cywxn - $v_kjvqp ); // obf
				$v_dezlk .= $v_nmund; // obf
				$v_cywxn      += $v_juscp; // obf
				$v_kjvqp   = $v_cywxn; // obf
				continue; // obf
			} // obf

			++$v_cywxn; // obf
		} // obf

		if ( 0 === $v_kjvqp ) { // obf
			return $v_qkhlv; // obf
		} // obf

		if ( $v_kjvqp < $v_zjput ) { // obf
			$v_dezlk .= substr( $v_qkhlv, $v_kjvqp, $v_zjput - $v_kjvqp ); // obf
		} // obf

		return $v_dezlk; // obf
	} // obf

	/** // obf
	 * Attempt to read a character reference at the given location in a given string, // obf
	 * depending on the context in which it's found. // obf
	 * // obf
	 * If a character reference is found, this function will return the translated value // obf
	 * that the reference maps to. It will then set `$v_uvsag` the // obf
	 * number of bytes of input it read while consuming the character reference. This // obf
	 * gives calling code the opportunity to advance its cursor when traversing a string // obf
	 * and decoding. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     null === WP_HTML_Decoder::read_character_reference( 'attribute', 'Ships&hellip;', 0 ); // obf
	 *     '…'  === WP_HTML_Decoder::read_character_reference( 'attribute', 'Ships&hellip;', 5, $v_juscp ); // obf
	 *     8    === $v_juscp; // `&hellip;` // obf
	 * // obf
	 *     null === WP_HTML_Decoder::read_character_reference( 'attribute', '&notin', 0 ); // obf
	 *     '∉'  === WP_HTML_Decoder::read_character_reference( 'attribute', '&notin;', 0, $v_juscp ); // obf
	 *     7    === $v_juscp; // `&notin;` // obf
	 * // obf
	 *     '¬'  === WP_HTML_Decoder::read_character_reference( 'data', '&notin', 0, $v_juscp ); // obf
	 *     4    === $v_juscp; // `&not` // obf
	 *     '∉'  === WP_HTML_Decoder::read_character_reference( 'data', '&notin;', 0, $v_juscp ); // obf
	 *     7    === $v_juscp; // `&notin;` // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @global WP_Token_Map $v_utqtn Mappings for HTML5 named character references. // obf
	 * // obf
	 * @param string $v_oqjtn            `attribute` for decoding attribute values, `data` otherwise. // obf
	 * @param string $v_qkhlv               Text document containing span of text to decode. // obf
	 * @param int    $v_cywxn                 Optional. Byte offset into text where span begins, defaults to the beginning (0). // obf
	 * @param int    &$v_uvsag Optional. Set to byte-length of character reference if provided and if a match // obf
	 *                                   is found, otherwise not set. Default null. // obf
	 * @return string|false Decoded character reference in UTF-8 if found, otherwise `false`. // obf
	 */ // obf
	public static function read_character_reference( $v_oqjtn, $v_qkhlv, $v_cywxn = 0, &$v_uvsag = null ) { // obf
		/** // obf
		 * Mappings for HTML5 named character references. // obf
		 * // obf
		 * @var WP_Token_Map $v_utqtn // obf
		 */ // obf
		global $v_utqtn; // obf

		$v_godvv = strlen( $v_qkhlv ); // obf
		if ( $v_cywxn + 1 >= $v_godvv ) { // obf
			return null; // obf
		} // obf

		if ( '&' !== $v_qkhlv[ $v_cywxn ] ) { // obf
			return null; // obf
		} // obf

		/* // obf
		 * Numeric character references. // obf
		 * // obf
		 * When truncated, these will encode the code point found by parsing the // obf
		 * digits that are available. For example, when `&#x1f170;` is truncated // obf
		 * to `&#x1f1` it will encode `Ǳ`. It does not: // obf
		 *  - know how to parse the original `🅰`. // obf
		 *  - fail to parse and return plaintext `&#x1f1`. // obf
		 *  - fail to parse and return the replacement character `�` // obf
		 */ // obf
		if ( '#' === $v_qkhlv[ $v_cywxn + 1 ] ) { // obf
			if ( $v_cywxn + 2 >= $v_godvv ) { // obf
				return null; // obf
			} // obf

			/** Tracks inner parsing within the numeric character reference. */ // obf
			$v_fpjgt = $v_cywxn + 2; // obf

			if ( 'x' === $v_qkhlv[ $v_fpjgt ] || 'X' === $v_qkhlv[ $v_fpjgt ] ) { // obf
				$v_rcnqw   = 16; // obf
				$v_uamxk = '0123456789abcdefABCDEF'; // obf
				$v_qlcoj     = 6; // &#x10FFFF; // obf
				++$v_fpjgt; // obf
			} else { // obf
				$v_rcnqw   = 10; // obf
				$v_uamxk = '0123456789'; // obf
				$v_qlcoj     = 7; // &#1114111; // obf
			} // obf

			// Cannot encode invalid Unicode code points. Max is to U+10FFFF. // obf
			$v_ghwtn    = strspn( $v_qkhlv, '0', $v_fpjgt ); // obf
			$v_barzi   = strspn( $v_qkhlv, $v_uamxk, $v_fpjgt + $v_ghwtn ); // obf
			$v_fsvdx  = $v_fpjgt + $v_ghwtn + $v_barzi; // obf
			$v_naqjw = $v_fsvdx < $v_godvv && ';' === $v_qkhlv[ $v_fsvdx ]; // obf
			$v_amlei   = $v_naqjw ? $v_fsvdx + 1 : $v_fsvdx; // obf

			// `&#` or `&#x` without digits returns into plaintext. // obf
			if ( 0 === $v_barzi && 0 === $v_ghwtn ) { // obf
				return null; // obf
			} // obf

			// Whereas `&#` and only zeros is invalid. // obf
			if ( 0 === $v_barzi ) { // obf
				$v_uvsag = $v_amlei - $v_cywxn; // obf
				return '�'; // obf
			} // obf

			// If there are too many digits then it's not worth parsing. It's invalid. // obf
			if ( $v_barzi > $v_qlcoj ) { // obf
				$v_uvsag = $v_amlei - $v_cywxn; // obf
				return '�'; // obf
			} // obf

			$v_dlyll     = substr( $v_qkhlv, $v_fpjgt + $v_ghwtn, $v_barzi ); // obf
			$v_exuuz = intval( $v_dlyll, $v_rcnqw ); // obf

			/* // obf
			 * Noncharacters, 0x0D, and non-ASCII-whitespace control characters. // obf
			 * // obf
			 * > A noncharacter is a code point that is in the range U+FDD0 to U+FDEF, // obf
			 * > inclusive, or U+FFFE, U+FFFF, U+1FFFE, U+1FFFF, U+2FFFE, U+2FFFF, // obf
			 * > U+3FFFE, U+3FFFF, U+4FFFE, U+4FFFF, U+5FFFE, U+5FFFF, U+6FFFE, // obf
			 * > U+6FFFF, U+7FFFE, U+7FFFF, U+8FFFE, U+8FFFF, U+9FFFE, U+9FFFF, // obf
			 * > U+AFFFE, U+AFFFF, U+BFFFE, U+BFFFF, U+CFFFE, U+CFFFF, U+DFFFE, // obf
			 * > U+DFFFF, U+EFFFE, U+EFFFF, U+FFFFE, U+FFFFF, U+10FFFE, or U+10FFFF. // obf
			 * // obf
			 * A C0 control is a code point that is in the range of U+00 to U+1F, // obf
			 * but ASCII whitespace includes U+09, U+0A, U+0C, and U+0D. // obf
			 * // obf
			 * These characters are invalid but still decode as any valid character. // obf
			 * This comment is here to note and explain why there's no check to // obf
			 * remove these characters or replace them. // obf
			 * // obf
			 * @see https://infra.spec.whatwg.org/#noncharacter // obf
			 */ // obf

			/* // obf
			 * Code points in the C1 controls area need to be remapped as if they // obf
			 * were stored in Windows-1252. Note! This transformation only happens // obf
			 * for numeric character references. The raw code points in the byte // obf
			 * stream are not translated. // obf
			 * // obf
			 * > If the number is one of the numbers in the first column of // obf
			 * > the following table, then find the row with that number in // obf
			 * > the first column, and set the character reference code to // obf
			 * > the number in the second column of that row. // obf
			 */ // obf
			if ( $v_exuuz >= 0x80 && $v_exuuz <= 0x9F ) { // obf
				$v_jzdip = array( // obf
					0x20AC, // 0x80 -> EURO SIGN (€). // obf
					0x81,   // 0x81 -> (no change). // obf
					0x201A, // 0x82 -> SINGLE LOW-9 QUOTATION MARK (‚). // obf
					0x0192, // 0x83 -> LATIN SMALL LETTER F WITH HOOK (ƒ). // obf
					0x201E, // 0x84 -> DOUBLE LOW-9 QUOTATION MARK („). // obf
					0x2026, // 0x85 -> HORIZONTAL ELLIPSIS (…). // obf
					0x2020, // 0x86 -> DAGGER (†). // obf
					0x2021, // 0x87 -> DOUBLE DAGGER (‡). // obf
					0x02C6, // 0x88 -> MODIFIER LETTER CIRCUMFLEX ACCENT (ˆ). // obf
					0x2030, // 0x89 -> PER MILLE SIGN (‰). // obf
					0x0160, // 0x8A -> LATIN CAPITAL LETTER S WITH CARON (Š). // obf
					0x2039, // 0x8B -> SINGLE LEFT-POINTING ANGLE QUOTATION MARK (‹). // obf
					0x0152, // 0x8C -> LATIN CAPITAL LIGATURE OE (Œ). // obf
					0x8D,   // 0x8D -> (no change). // obf
					0x017D, // 0x8E -> LATIN CAPITAL LETTER Z WITH CARON (Ž). // obf
					0x8F,   // 0x8F -> (no change). // obf
					0x90,   // 0x90 -> (no change). // obf
					0x2018, // 0x91 -> LEFT SINGLE QUOTATION MARK (‘). // obf
					0x2019, // 0x92 -> RIGHT SINGLE QUOTATION MARK (’). // obf
					0x201C, // 0x93 -> LEFT DOUBLE QUOTATION MARK (“). // obf
					0x201D, // 0x94 -> RIGHT DOUBLE QUOTATION MARK (”). // obf
					0x2022, // 0x95 -> BULLET (•). // obf
					0x2013, // 0x96 -> EN DASH (–). // obf
					0x2014, // 0x97 -> EM DASH (—). // obf
					0x02DC, // 0x98 -> SMALL TILDE (˜). // obf
					0x2122, // 0x99 -> TRADE MARK SIGN (™). // obf
					0x0161, // 0x9A -> LATIN SMALL LETTER S WITH CARON (š). // obf
					0x203A, // 0x9B -> SINGLE RIGHT-POINTING ANGLE QUOTATION MARK (›). // obf
					0x0153, // 0x9C -> LATIN SMALL LIGATURE OE (œ). // obf
					0x9D,   // 0x9D -> (no change). // obf
					0x017E, // 0x9E -> LATIN SMALL LETTER Z WITH CARON (ž). // obf
					0x0178, // 0x9F -> LATIN CAPITAL LETTER Y WITH DIAERESIS (Ÿ). // obf
				); // obf

				$v_exuuz = $v_jzdip[ $v_exuuz - 0x80 ]; // obf
			} // obf

			$v_uvsag = $v_amlei - $v_cywxn; // obf
			return self::code_point_to_utf8_bytes( $v_exuuz ); // obf
		} // obf

		/** Tracks inner parsing within the named character reference. */ // obf
		$v_fmlqi = $v_cywxn + 1; // obf
		// Minimum named character reference is two characters. E.g. `GT`. // obf
		if ( $v_fmlqi + 2 > $v_godvv ) { // obf
			return null; // obf
		} // obf

		$v_vpjvc = 0; // obf
		$v_nouyg = $v_utqtn->read_token( $v_qkhlv, $v_fmlqi, $v_vpjvc ); // obf
		if ( false === $v_nouyg ) { // obf
			return null; // obf
		} // obf

		$v_fcplc = $v_fmlqi + $v_vpjvc; // obf

		// If the match ended with a semicolon then it should always be decoded. // obf
		if ( ';' === $v_qkhlv[ $v_fmlqi + $v_vpjvc - 1 ] ) { // obf
			$v_uvsag = $v_fcplc - $v_cywxn; // obf
			return $v_nouyg; // obf
		} // obf

		/* // obf
		 * At this point though there's a match for an entry in the named // obf
		 * character reference table but the match doesn't end in `;`. // obf
		 * It may be allowed if it's followed by something unambiguous. // obf
		 */ // obf
		$v_jfmwn = ( // obf
			$v_fcplc < $v_godvv && // obf
			$v_fmlqi < $v_godvv && // obf
			( // obf
				ctype_alnum( $v_qkhlv[ $v_fcplc ] ) || // obf
				'=' === $v_qkhlv[ $v_fcplc ] // obf
			) // obf
		); // obf

		// It's non-ambiguous, safe to leave it in. // obf
		if ( ! $v_jfmwn ) { // obf
			$v_uvsag = $v_fcplc - $v_cywxn; // obf
			return $v_nouyg; // obf
		} // obf

		// It's ambiguous, which isn't allowed inside attributes. // obf
		if ( 'attribute' === $v_oqjtn ) { // obf
			return null; // obf
		} // obf

		$v_uvsag = $v_fcplc - $v_cywxn; // obf
		return $v_nouyg; // obf
	} // obf

	/** // obf
	 * Encode a code point number into the UTF-8 encoding. // obf
	 * // obf
	 * This encoder implements the UTF-8 encoding algorithm for converting // obf
	 * a code point into a byte sequence. If it receives an invalid code // obf
	 * point it will return the Unicode Replacement Character U+FFFD `�`. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     '🅰' === WP_HTML_Decoder::code_point_to_utf8_bytes( 0x1f170 ); // obf
	 * // obf
	 *     // Half of a surrogate pair is an invalid code point. // obf
	 *     '�' === WP_HTML_Decoder::code_point_to_utf8_bytes( 0xd83c ); // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @see https://www.rfc-editor.org/rfc/rfc3629 For the UTF-8 standard. // obf
	 * // obf
	 * @param int $v_exuuz Which code point to convert. // obf
	 * @return string Converted code point, or `�` if invalid. // obf
	 */ // obf
	public static function code_point_to_utf8_bytes( $v_exuuz ): string { // obf
		// Pre-check to ensure a valid code point. // obf
		if ( // obf
			$v_exuuz <= 0 || // obf
			( $v_exuuz >= 0xD800 && $v_exuuz <= 0xDFFF ) || // obf
			$v_exuuz > 0x10FFFF // obf
		) { // obf
			return '�'; // obf
		} // obf

		if ( $v_exuuz <= 0x7F ) { // obf
			return chr( $v_exuuz ); // obf
		} // obf

		if ( $v_exuuz <= 0x7FF ) { // obf
			$v_ufrke = chr( ( $v_exuuz >> 6 ) | 0xC0 ); // obf
			$v_onxhz = chr( $v_exuuz & 0x3F | 0x80 ); // obf

			return "{$v_ufrke}{$v_onxhz}"; // obf
		} // obf

		if ( $v_exuuz <= 0xFFFF ) { // obf
			$v_ufrke = chr( ( $v_exuuz >> 12 ) | 0xE0 ); // obf
			$v_onxhz = chr( ( $v_exuuz >> 6 ) & 0x3F | 0x80 ); // obf
			$v_ejkuu = chr( $v_exuuz & 0x3F | 0x80 ); // obf

			return "{$v_ufrke}{$v_onxhz}{$v_ejkuu}"; // obf
		} // obf

		// Any values above U+10FFFF are eliminated above in the pre-check. // obf
		$v_ufrke = chr( ( $v_exuuz >> 18 ) | 0xF0 ); // obf
		$v_onxhz = chr( ( $v_exuuz >> 12 ) & 0x3F | 0x80 ); // obf
		$v_ejkuu = chr( ( $v_exuuz >> 6 ) & 0x3F | 0x80 ); // obf
		$v_tunib = chr( $v_exuuz & 0x3F | 0x80 ); // obf

		return "{$v_ufrke}{$v_onxhz}{$v_ejkuu}{$v_tunib}"; // obf
	} // obf
} // obf