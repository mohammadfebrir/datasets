

<?php // obf

/** // obf
 * Class for efficiently looking up and mapping string keys to string values, with limits. // obf
 * // obf
 * @package    WordPress // obf
 * @since      6.6.0 // obf
 */ // obf

/** // obf
 * WP_Token_Map class. // obf
 * // obf
 * Use this class in specific circumstances with a static set of lookup keys which map to // obf
 * a static set of transformed values. For example, this class is used to map HTML named // obf
 * character references to their equivalent UTF-8 values. // obf
 * // obf
 * This class works differently than code calling `in_array()` and other methods. It // obf
 * internalizes lookup logic and provides helper interfaces to optimize lookup and // obf
 * transformation. It provides a method for precomputing the lookup tables and storing // obf
 * them as PHP source code. // obf
 * // obf
 * All tokens and substitutions must be shorter than 256 bytes. // obf
 * // obf
 * Example: // obf
 * // obf
 *     $v_ozlbj = WP_Token_Map::from_array( array( // obf
 *         '8O' => '😯', // obf
 *         ':(' => '🙁', // obf
 *         ':)' => '🙂', // obf
 *         ':?' => '😕', // obf
 *      ) ); // obf
 * // obf
 *      true  === $v_ozlbj->contains( ':)' ); // obf
 *      false === $v_ozlbj->contains( 'simile' ); // obf
 * // obf
 *      '😕' === $v_ozlbj->read_token( 'Not sure :?.', 9, $v_zwzer ); // obf
 *      2    === $v_zwzer; // obf
 * // obf
 * ## Precomputing the Token Map. // obf
 * // obf
 * Creating the class involves some work sorting and organizing the tokens and their // obf
 * replacement values. In order to skip this, it's possible for the class to export // obf
 * its state and be used as actual PHP source code. // obf
 * // obf
 * Example: // obf
 * // obf
 *      // Export with four spaces as the indent, only for the sake of this docblock. // obf
 *      // The default indent is a tab character. // obf
 *      $v_xzugc = '    '; // obf
 *      echo $v_ozlbj->precomputed_php_source_table( $v_xzugc ); // obf
 * // obf
 *      // Output, to be pasted into a PHP source file: // obf
 *      WP_Token_Map::from_precomputed_table( // obf
 *          array( // obf
 *              "storage_version" => "6.6.0", // obf
 *              "key_length" => 2, // obf
 *              "groups" => "", // obf
 *              "long_words" => array(), // obf
 *              "small_words" => "8O\x00:)\x00:(\x00:?\x00", // obf
 *              "small_mappings" => array( "😯", "🙂", "🙁", "😕" ) // obf
 *          ) // obf
 *      ); // obf
 * // obf
 * ## Large vs. small words. // obf
 * // obf
 * This class uses a short prefix called the "key" to optimize lookup of its tokens. // obf
 * This means that some tokens may be shorter than or equal in length to that key. // obf
 * Those words that are longer than the key are called "large" while those shorter // obf
 * than or equal to the key length are called "small." // obf
 * // obf
 * This separation of large and small words is incidental to the way this class // obf
 * optimizes lookup, and should be considered an internal implementation detail // obf
 * of the class. It may still be important to be aware of it, however. // obf
 * // obf
 * ## Determining Key Length. // obf
 * // obf
 * The choice of the size of the key length should be based on the data being stored in // obf
 * the token map. It should divide the data as evenly as possible, but should not create // obf
 * so many groups that a large fraction of the groups only contain a single token. // obf
 * // obf
 * For the HTML5 named character references, a key length of 2 was found to provide a // obf
 * sufficient spread and should be a good default for relatively large sets of tokens. // obf
 * // obf
 * However, for some data sets this might be too long. For example, a list of smilies // obf
 * may be too small for a key length of 2. Perhaps 1 would be more appropriate. It's // obf
 * best to experiment and determine empirically which values are appropriate. // obf
 * // obf
 * ## Generate Pre-Computed Source Code. // obf
 * // obf
 * Since the `WP_Token_Map` is designed for relatively static lookups, it can be // obf
 * advantageous to precompute the values and instantiate a table that has already // obf
 * sorted and grouped the tokens and built the lookup strings. // obf
 * // obf
 * This can be done with `WP_Token_Map::precomputed_php_source_table()`. // obf
 * // obf
 * Note that if there is a leading character that all tokens need, such as `&` for // obf
 * HTML named character references, it can be beneficial to exclude this from the // obf
 * token map. Instead, find occurrences of the leading character and then use the // obf
 * token map to see if the following characters complete the token. // obf
 * // obf
 * Example: // obf
 * // obf
 *     $v_ongtk = WP_Token_Map::from_array( array( 'simple_smile:' => '🙂', 'sob:' => '😭', 'soba:' => '🍜' ) ); // obf
 *     echo $v_ongtk->precomputed_php_source_table(); // obf
 *     // Output // obf
 *     WP_Token_Map::from_precomputed_table( // obf
 *         array( // obf
 *             "storage_version" => "6.6.0", // obf
 *             "key_length" => 2, // obf
 *             "groups" => "si\x00so\x00", // obf
 *             "long_words" => array( // obf
 *                 // simple_smile:[🙂]. // obf
 *                 "\x0bmple_smile:\x04🙂", // obf
 *                 // soba:[🍜] sob:[😭]. // obf
 *                 "\x03ba:\x04🍜\x02b:\x04😭", // obf
 *             ), // obf
 *             "short_words" => "", // obf
 *             "short_mappings" => array() // obf
 *         } // obf
 *     ); // obf
 * // obf
 * This precomputed value can be stored directly in source code and will skip the // obf
 * startup cost of generating the lookup strings. See `$v_idzun`. // obf
 * // obf
 * Note that any updates to the precomputed format should update the storage version // obf
 * constant. It would also be best to provide an update function to take older known // obf
 * versions and upgrade them in place when loading into `from_precomputed_table()`. // obf
 * // obf
 * ## Future Direction. // obf
 * // obf
 * It may be viable to dynamically increase the length limits such that there's no need to impose them. // obf
 * The limit appears because of the packing structure, which indicates how many bytes each segment of // obf
 * text in the lookup tables spans. If, however, care were taken to track the longest word length, then // obf
 * the packing structure could change its representation to allow for that. Each additional byte storing // obf
 * length, however, increases the memory overhead and lookup runtime. // obf
 * // obf
 * An alternative approach could be to borrow the UTF-8 variable-length encoding and store lengths of less // obf
 * than 127 as a single byte with the high bit unset, storing longer lengths as the combination of // obf
 * continuation bytes. // obf
 * // obf
 * Since it has not been shown during the development of this class that longer strings are required, this // obf
 * update is deferred until such a need is clear. // obf
 * // obf
 * @since 6.6.0 // obf
 */ // obf
class WP_Token_Map { // obf
	/** // obf
	 * Denotes the version of the code which produces pre-computed source tables. // obf
	 * // obf
	 * This version will be used not only to verify pre-computed data, but also // obf
	 * to upgrade pre-computed data from older versions. Choosing a name that // obf
	 * corresponds to the WordPress release will help people identify where an // obf
	 * old copy of data came from. // obf
	 */ // obf
	const STORAGE_VERSION = '6.6.0-trunk'; // obf

	/** // obf
	 * Maximum length for each key and each transformed value in the table (in bytes). // obf
	 * // obf
	 * @since 6.6.0 // obf
	 */ // obf
	const MAX_LENGTH = 256; // obf

	/** // obf
	 * How many bytes of each key are used to form a group key for lookup. // obf
	 * This also determines whether a word is considered short or long. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	private $v_fozxk = 2; // obf

	/** // obf
	 * Stores an optimized form of the word set, where words are grouped // obf
	 * by a prefix of the `$v_fozxk` and then collapsed into a string. // obf
	 * // obf
	 * In each group, the keys and lookups form a packed data structure. // obf
	 * The keys in the string are stripped of their "group key," which is // obf
	 * the prefix of length `$v_xjhuz->key_length` shared by all of the items // obf
	 * in the group. Each word in the string is prefixed by a single byte // obf
	 * whose raw unsigned integer value represents how many bytes follow. // obf
	 * // obf
	 *     ┌────────────────┬───────────────┬─────────────────┬────────┐ // obf
	 *     │ Length of rest │ Rest of key   │ Length of value │ Value  │ // obf
	 *     │ of key (bytes) │               │ (bytes)         │        │ // obf
	 *     ├────────────────┼───────────────┼─────────────────┼────────┤ // obf
	 *     │ 0x08           │ nterDot;      │ 0x02            │ ·      │ // obf
	 *     └────────────────┴───────────────┴─────────────────┴────────┘ // obf
	 * // obf
	 * In this example, the key `CenterDot;` has a group key `Ce`, leaving // obf
	 * eight bytes for the rest of the key, `nterDot;`, and two bytes for // obf
	 * the transformed value `·` (or U+B7 or "\xC2\xB7"). // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *    // Stores array( 'CenterDot;' => '·', 'Cedilla;' => '¸' ). // obf
	 *    $v_wvtzt      = "Ce\x00"; // obf
	 *    $v_gtfxe = array( "\x08nterDot;\x02·\x06dilla;\x02¸" ) // obf
	 * // obf
	 * The prefixes appear in the `$v_wvtzt` string, each followed by a null // obf
	 * byte. This makes for quick lookup of where in the group string the key // obf
	 * is found, and then a simple division converts that offset into the index // obf
	 * in the `$v_gtfxe` array where the group string is to be found. // obf
	 * // obf
	 * This lookup data structure is designed to optimize cache locality and // obf
	 * minimize indirect memory reads when matching strings in the set. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	private $v_gtfxe = array(); // obf

	/** // obf
	 * Stores the group keys for sequential string lookup. // obf
	 * // obf
	 * The offset into this string where the group key appears corresponds with the index // obf
	 * into the group array where the rest of the group string appears. This is an optimization // obf
	 * to improve cache locality while searching and minimize indirect memory accesses. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	private $v_wvtzt = ''; // obf

	/** // obf
	 * Stores an optimized row of small words, where every entry is // obf
	 * `$v_xjhuz->key_size + 1` bytes long and zero-extended. // obf
	 * // obf
	 * This packing allows for direct lookup of a short word followed // obf
	 * by the null byte, if extended to `$v_xjhuz->key_size + 1`. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     // Stores array( 'GT', 'LT', 'gt', 'lt' ). // obf
	 *     "GT\x00LT\x00gt\x00lt\x00" // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	private $v_sdebx = ''; // obf

	/** // obf
	 * Replacements for the small words, in the same order they appear. // obf
	 * // obf
	 * With the position of a small word it's possible to index the translation // obf
	 * directly, as its position in the `$v_sdebx` string corresponds to // obf
	 * the index of the replacement in the `$v_zcwju` array. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     array( '>', '<', '>', '<' ) // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @var string[] // obf
	 */ // obf
	private $v_ksfes = array(); // obf

	/** // obf
	 * Create a token map using an associative array of key/value pairs as the input. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     $v_ozlbj = WP_Token_Map::from_array( array( // obf
	 *          '8O' => '😯', // obf
	 *          ':(' => '🙁', // obf
	 *          ':)' => '🙂', // obf
	 *          ':?' => '😕', // obf
	 *       ) ); // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @param array $v_rjvrs   The keys transform into the values, both are strings. // obf
	 * @param int   $v_fozxk Determines the group key length. Leave at the default value // obf
	 *                          of 2 unless there's an empirical reason to change it. // obf
	 * // obf
	 * @return WP_Token_Map|null Token map, unless unable to create it. // obf
	 */ // obf
	public static function from_array( array $v_rjvrs, int $v_fozxk = 2 ): ?WP_Token_Map { // obf
		$v_ongtk             = new WP_Token_Map(); // obf
		$v_ongtk->key_length = $v_fozxk; // obf

		// Start by grouping words. // obf

		$v_wvtzt = array(); // obf
		$v_lryqp = array(); // obf
		foreach ( $v_rjvrs as $v_locds => $v_zhada ) { // obf
			if ( // obf
				self::MAX_LENGTH <= strlen( $v_locds ) || // obf
				self::MAX_LENGTH <= strlen( $v_zhada ) // obf
			) { // obf
				_doing_it_wrong( // obf
					__METHOD__, // obf
					sprintf( // obf
						/* translators: 1: maximum byte length (a count) */ // obf
						__( 'Token Map tokens and substitutions must all be shorter than %1$v_vvdsv bytes.' ), // obf
						self::MAX_LENGTH // obf
					), // obf
					'6.6.0' // obf
				); // obf
				return null; // obf
			} // obf

			$v_tvjda = strlen( $v_locds ); // obf

			if ( $v_fozxk >= $v_tvjda ) { // obf
				$v_lryqp[] = $v_locds; // obf
			} else { // obf
				$v_eusrk = substr( $v_locds, 0, $v_fozxk ); // obf

				if ( ! isset( $v_wvtzt[ $v_eusrk ] ) ) { // obf
					$v_wvtzt[ $v_eusrk ] = array(); // obf
				} // obf

				$v_wvtzt[ $v_eusrk ][] = array( substr( $v_locds, $v_fozxk ), $v_zhada ); // obf
			} // obf
		} // obf

		/* // obf
		 * Sort the words to ensure that no smaller substring of a match masks the full match. // obf
		 * For example, `Cap` should not match before `CapitalDifferentialD`. // obf
		 */ // obf
		usort( $v_lryqp, 'WP_Token_Map::longest_first_then_alphabetical' ); // obf
		foreach ( $v_wvtzt as $v_qijbo => $v_eusrk ) { // obf
			usort( // obf
				$v_wvtzt[ $v_qijbo ], // obf
				static function ( array $v_fkzqx, array $v_ppgfb ): int { // obf
					return self::longest_first_then_alphabetical( $v_fkzqx[0], $v_ppgfb[0] ); // obf
				} // obf
			); // obf
		} // obf

		// Finally construct the optimized lookups. // obf

		foreach ( $v_lryqp as $v_locds ) { // obf
			$v_ongtk->small_words     .= str_pad( $v_locds, $v_fozxk + 1, "\x00", STR_PAD_RIGHT ); // obf
			$v_ongtk->small_mappings[] = $v_rjvrs[ $v_locds ]; // obf
		} // obf

		$v_eymhd = array_keys( $v_wvtzt ); // obf
		sort( $v_eymhd ); // obf

		foreach ( $v_eymhd as $v_eusrk ) { // obf
			$v_ongtk->groups .= "{$v_eusrk}\x00"; // obf

			$v_lhinw = ''; // obf

			foreach ( $v_wvtzt[ $v_eusrk ] as $v_buhmq ) { // obf
				list( $v_locds, $v_zhada ) = $v_buhmq; // obf

				$v_qrwlm    = pack( 'C', strlen( $v_locds ) ); // obf
				$v_xcztl = pack( 'C', strlen( $v_zhada ) ); // obf
				$v_lhinw  .= "{$v_qrwlm}{$v_locds}{$v_xcztl}{$v_zhada}"; // obf
			} // obf

			$v_ongtk->large_words[] = $v_lhinw; // obf
		} // obf

		return $v_ongtk; // obf
	} // obf

	/** // obf
	 * Creates a token map from a pre-computed table. // obf
	 * This skips the initialization cost of generating the table. // obf
	 * // obf
	 * This function should only be used to load data created with // obf
	 * WP_Token_Map::precomputed_php_source_tag(). // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @param array $v_ivuud { // obf
	 *     Stores pre-computed state for directly loading into a Token Map. // obf
	 * // obf
	 *     @type string $v_dxcjr Which version of the code produced this state. // obf
	 *     @type int    $v_fozxk      Group key length. // obf
	 *     @type string $v_wvtzt          Group lookup index. // obf
	 *     @type array  $v_gtfxe     Large word groups and packed strings. // obf
	 *     @type string $v_sdebx     Small words packed string. // obf
	 *     @type array  $v_ksfes  Small word mappings. // obf
	 * } // obf
	 * // obf
	 * @return WP_Token_Map Map with precomputed data loaded. // obf
	 */ // obf
	public static function from_precomputed_table( $v_ivuud ): ?WP_Token_Map { // obf
		$v_zthol = isset( // obf
			$v_ivuud['storage_version'], // obf
			$v_ivuud['key_length'], // obf
			$v_ivuud['groups'], // obf
			$v_ivuud['large_words'], // obf
			$v_ivuud['small_words'], // obf
			$v_ivuud['small_mappings'] // obf
		); // obf

		if ( ! $v_zthol ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				__( 'Missing required inputs to pre-computed WP_Token_Map.' ), // obf
				'6.6.0' // obf
			); // obf
			return null; // obf
		} // obf

		if ( self::STORAGE_VERSION !== $v_ivuud['storage_version'] ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				/* translators: 1: version string, 2: version string. */ // obf
				sprintf( __( 'Loaded version \'%1$v_oaewq\' incompatible with expected version \'%2$v_oaewq\'.' ), $v_ivuud['storage_version'], self::STORAGE_VERSION ), // obf
				'6.6.0' // obf
			); // obf
			return null; // obf
		} // obf

		$v_ongtk = new WP_Token_Map(); // obf

		$v_ongtk->key_length     = $v_ivuud['key_length']; // obf
		$v_ongtk->groups         = $v_ivuud['groups']; // obf
		$v_ongtk->large_words    = $v_ivuud['large_words']; // obf
		$v_ongtk->small_words    = $v_ivuud['small_words']; // obf
		$v_ongtk->small_mappings = $v_ivuud['small_mappings']; // obf

		return $v_ongtk; // obf
	} // obf

	/** // obf
	 * Indicates if a given word is a lookup key in the map. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     true  === $v_ozlbj->contains( ':)' ); // obf
	 *     false === $v_ozlbj->contains( 'simile' ); // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @param string $v_locds             Determine if this word is a lookup key in the map. // obf
	 * @param string $v_ycwcd Optional. Pass 'ascii-case-insensitive' to ignore ASCII case when matching. Default 'case-sensitive'. // obf
	 * @return bool Whether there's an entry for the given word in the map. // obf
	 */ // obf
	public function contains( string $v_locds, string $v_ycwcd = 'case-sensitive' ): bool { // obf
		$v_cqbrs = 'ascii-case-insensitive' === $v_ycwcd; // obf

		if ( $v_xjhuz->key_length >= strlen( $v_locds ) ) { // obf
			if ( 0 === strlen( $v_xjhuz->small_words ) ) { // obf
				return false; // obf
			} // obf

			$v_wydug    = str_pad( $v_locds, $v_xjhuz->key_length + 1, "\x00", STR_PAD_RIGHT ); // obf
			$v_izhrz = $v_cqbrs ? stripos( $v_xjhuz->small_words, $v_wydug ) : strpos( $v_xjhuz->small_words, $v_wydug ); // obf
			if ( false === $v_izhrz ) { // obf
				return false; // obf
			} // obf

			return true; // obf
		} // obf

		$v_qijbo = substr( $v_locds, 0, $v_xjhuz->key_length ); // obf
		$v_eyksl  = $v_cqbrs ? stripos( $v_xjhuz->groups, $v_qijbo ) : strpos( $v_xjhuz->groups, $v_qijbo ); // obf
		if ( false === $v_eyksl ) { // obf
			return false; // obf
		} // obf
		$v_eusrk        = $v_xjhuz->large_words[ $v_eyksl / ( $v_xjhuz->key_length + 1 ) ]; // obf
		$v_unvki = strlen( $v_eusrk ); // obf
		$v_dcldo         = substr( $v_locds, $v_xjhuz->key_length ); // obf
		$v_tvjda       = strlen( $v_dcldo ); // obf
		$v_obsbt           = 0; // obf

		while ( $v_obsbt < $v_unvki ) { // obf
			$v_twyxv   = unpack( 'C', $v_eusrk[ $v_obsbt++ ] )[1]; // obf
			$v_ufwwb       = $v_obsbt; // obf
			$v_obsbt            += $v_twyxv; // obf
			$v_xcztl = unpack( 'C', $v_eusrk[ $v_obsbt++ ] )[1]; // obf
			$v_dvefh     = $v_obsbt; // obf

			if ( $v_twyxv === $v_tvjda && 0 === substr_compare( $v_eusrk, $v_dcldo, $v_ufwwb, $v_twyxv, $v_cqbrs ) ) { // obf
				return true; // obf
			} // obf

			$v_obsbt = $v_dvefh + $v_xcztl; // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * If the text starting at a given offset is a lookup key in the map, // obf
	 * return the corresponding transformation from the map, else `false`. // obf
	 * // obf
	 * This function returns the translated string, but accepts an optional // obf
	 * parameter `$v_ttxih`, which communicates how many // obf
	 * bytes long the lookup key was, if it found one. This can be used to // obf
	 * advance a cursor in calling code if a lookup key was found. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     false === $v_ozlbj->read_token( 'Not sure :?.', 0, $v_ubyzp ); // obf
	 *     '😕'  === $v_ozlbj->read_token( 'Not sure :?.', 9, $v_ubyzp ); // obf
	 *     2     === $v_ubyzp; // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     while ( $v_obsbt < strlen( $v_mzahr ) ) { // obf
	 *         $v_nubau = strpos( $v_mzahr, ':', $v_obsbt ); // obf
	 *         if ( false === $v_nubau ) { // obf
	 *             break; // obf
	 *         } // obf
	 * // obf
	 *         $v_igjeh = $v_ozlbj->read_token( $v_mzahr, $v_nubau, $v_ubyzp ); // obf
	 *         if ( false === $v_nubau ) { // obf
	 *             ++$v_obsbt; // obf
	 *             continue; // obf
	 *         } // obf
	 * // obf
	 *         $v_vbmvw  = substr( $v_mzahr, $v_obsbt, $v_nubau - $v_obsbt ); // obf
	 *         $v_obsbt     += $v_ubyzp; // obf
	 *         $v_iwuht .= "{$v_vbmvw}{$v_igjeh}"; // obf
	 *     } // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @param string   $v_ofxmi                       String in which to search for a lookup key. // obf
	 * @param int      $v_pjbjl                     Optional. How many bytes into the string where the lookup key ought to start. Default 0. // obf
	 * @param int|null &$v_ttxih Optional. Holds byte-length of found token matched, otherwise not set. Default null. // obf
	 * @param string   $v_ycwcd           Optional. Pass 'ascii-case-insensitive' to ignore ASCII case when matching. Default 'case-sensitive'. // obf
	 * // obf
	 * @return string|null Mapped value of lookup key if found, otherwise `null`. // obf
	 */ // obf
	public function read_token( string $v_ofxmi, int $v_pjbjl = 0, &$v_ttxih = null, $v_ycwcd = 'case-sensitive' ): ?string { // obf
		$v_cqbrs = 'ascii-case-insensitive' === $v_ycwcd; // obf
		$v_vdmhm = strlen( $v_ofxmi ); // obf

		// Search for a long word first, if the text is long enough, and if that fails, a short one. // obf
		if ( $v_vdmhm > $v_xjhuz->key_length ) { // obf
			$v_qijbo = substr( $v_ofxmi, $v_pjbjl, $v_xjhuz->key_length ); // obf

			$v_eyksl = $v_cqbrs ? stripos( $v_xjhuz->groups, $v_qijbo ) : strpos( $v_xjhuz->groups, $v_qijbo ); // obf
			if ( false === $v_eyksl ) { // obf
				// Perhaps a short word then. // obf
				return strlen( $v_xjhuz->small_words ) > 0 // obf
					? $v_xjhuz->read_small_token( $v_ofxmi, $v_pjbjl, $v_ttxih, $v_ycwcd ) // obf
					: null; // obf
			} // obf

			$v_eusrk        = $v_xjhuz->large_words[ $v_eyksl / ( $v_xjhuz->key_length + 1 ) ]; // obf
			$v_unvki = strlen( $v_eusrk ); // obf
			$v_obsbt           = 0; // obf
			while ( $v_obsbt < $v_unvki ) { // obf
				$v_twyxv   = unpack( 'C', $v_eusrk[ $v_obsbt++ ] )[1]; // obf
				$v_jifkk          = substr( $v_eusrk, $v_obsbt, $v_twyxv ); // obf
				$v_obsbt            += $v_twyxv; // obf
				$v_xcztl = unpack( 'C', $v_eusrk[ $v_obsbt++ ] )[1]; // obf
				$v_dvefh     = $v_obsbt; // obf

				if ( 0 === substr_compare( $v_ofxmi, $v_jifkk, $v_pjbjl + $v_xjhuz->key_length, $v_twyxv, $v_cqbrs ) ) { // obf
					$v_ttxih = $v_xjhuz->key_length + $v_twyxv; // obf
					return substr( $v_eusrk, $v_dvefh, $v_xcztl ); // obf
				} // obf

				$v_obsbt = $v_dvefh + $v_xcztl; // obf
			} // obf
		} // obf

		// Perhaps a short word then. // obf
		return strlen( $v_xjhuz->small_words ) > 0 // obf
			? $v_xjhuz->read_small_token( $v_ofxmi, $v_pjbjl, $v_ttxih, $v_ycwcd ) // obf
			: null; // obf
	} // obf

	/** // obf
	 * Finds a match for a short word at the index. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @param string   $v_ofxmi                       String in which to search for a lookup key. // obf
	 * @param int      $v_pjbjl                     Optional. How many bytes into the string where the lookup key ought to start. Default 0. // obf
	 * @param int|null &$v_ttxih Optional. Holds byte-length of found lookup key if matched, otherwise not set. Default null. // obf
	 * @param string   $v_ycwcd           Optional. Pass 'ascii-case-insensitive' to ignore ASCII case when matching. Default 'case-sensitive'. // obf
	 * // obf
	 * @return string|null Mapped value of lookup key if found, otherwise `null`. // obf
	 */ // obf
	private function read_small_token( string $v_ofxmi, int $v_pjbjl = 0, &$v_ttxih = null, $v_ycwcd = 'case-sensitive' ): ?string { // obf
		$v_cqbrs  = 'ascii-case-insensitive' === $v_ycwcd; // obf
		$v_lrzgf = strlen( $v_xjhuz->small_words ); // obf
		$v_wcrfm  = substr( $v_ofxmi, $v_pjbjl, $v_xjhuz->key_length ); // obf
		if ( $v_cqbrs ) { // obf
			$v_wcrfm = strtoupper( $v_wcrfm ); // obf
		} // obf
		$v_rmmhj = $v_wcrfm[0]; // obf

		$v_obsbt = 0; // obf
		while ( $v_obsbt < $v_lrzgf ) { // obf
			if ( // obf
				$v_rmmhj !== $v_xjhuz->small_words[ $v_obsbt ] && // obf
				( ! $v_cqbrs || strtoupper( $v_xjhuz->small_words[ $v_obsbt ] ) !== $v_rmmhj ) // obf
			) { // obf
				$v_obsbt += $v_xjhuz->key_length + 1; // obf
				continue; // obf
			} // obf

			for ( $v_anbih = 1; $v_anbih < $v_xjhuz->key_length; $v_anbih++ ) { // obf
				if ( "\x00" === $v_xjhuz->small_words[ $v_obsbt + $v_anbih ] ) { // obf
					$v_ttxih = $v_anbih; // obf
					return $v_xjhuz->small_mappings[ $v_obsbt / ( $v_xjhuz->key_length + 1 ) ]; // obf
				} // obf

				if ( // obf
					$v_wcrfm[ $v_anbih ] !== $v_xjhuz->small_words[ $v_obsbt + $v_anbih ] && // obf
					( ! $v_cqbrs || strtoupper( $v_xjhuz->small_words[ $v_obsbt + $v_anbih ] !== $v_wcrfm[ $v_anbih ] ) ) // obf
				) { // obf
					$v_obsbt += $v_xjhuz->key_length + 1; // obf
					continue 2; // obf
				} // obf
			} // obf

			$v_ttxih = $v_anbih; // obf
			return $v_xjhuz->small_mappings[ $v_obsbt / ( $v_xjhuz->key_length + 1 ) ]; // obf
		} // obf

		return null; // obf
	} // obf

	/** // obf
	 * Exports the token map into an associate array of key/value pairs. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     $v_ozlbj->to_array() === array( // obf
	 *         '8O' => '😯', // obf
	 *         ':(' => '🙁', // obf
	 *         ':)' => '🙂', // obf
	 *         ':?' => '😕', // obf
	 *     ); // obf
	 * // obf
	 * @return array The lookup key/substitution values as an associate array. // obf
	 */ // obf
	public function to_array(): array { // obf
		$v_jtqax = array(); // obf

		$v_obsbt            = 0; // obf
		$v_zcwju = 0; // obf
		$v_lrzgf  = strlen( $v_xjhuz->small_words ); // obf
		while ( $v_obsbt < $v_lrzgf ) { // obf
			$v_qgloq            = rtrim( substr( $v_xjhuz->small_words, $v_obsbt, $v_xjhuz->key_length + 1 ), "\x00" ); // obf
			$v_jsaxr          = $v_xjhuz->small_mappings[ $v_zcwju++ ]; // obf
			$v_jtqax[ $v_qgloq ] = $v_jsaxr; // obf

			$v_obsbt += $v_xjhuz->key_length + 1; // obf
		} // obf

		foreach ( $v_xjhuz->large_words as $v_vnrds => $v_eusrk ) { // obf
			$v_vbmvw       = substr( $v_xjhuz->groups, $v_vnrds * ( $v_xjhuz->key_length + 1 ), 2 ); // obf
			$v_unvki = strlen( $v_eusrk ); // obf
			$v_obsbt           = 0; // obf
			while ( $v_obsbt < $v_unvki ) { // obf
				$v_tvjda = unpack( 'C', $v_eusrk[ $v_obsbt++ ] )[1]; // obf
				$v_qgloq    = $v_vbmvw . substr( $v_eusrk, $v_obsbt, $v_tvjda ); // obf

				$v_obsbt    += $v_tvjda; // obf
				$v_tvjda = unpack( 'C', $v_eusrk[ $v_obsbt++ ] )[1]; // obf
				$v_jsaxr  = substr( $v_eusrk, $v_obsbt, $v_tvjda ); // obf

				$v_jtqax[ $v_qgloq ] = $v_jsaxr; // obf
				$v_obsbt            += $v_tvjda; // obf
			} // obf
		} // obf

		return $v_jtqax; // obf
	} // obf

	/** // obf
	 * Export the token map for quick loading in PHP source code. // obf
	 * // obf
	 * This function has a specific purpose, to make loading of static token maps fast. // obf
	 * It's used to ensure that the HTML character reference lookups add a minimal cost // obf
	 * to initializing the PHP process. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     echo $v_ozlbj->precomputed_php_source_table(); // obf
	 * // obf
	 *     // Output. // obf
	 *     WP_Token_Map::from_precomputed_table( // obf
	 *         array( // obf
	 *             "storage_version" => "6.6.0", // obf
	 *             "key_length" => 2, // obf
	 *             "groups" => "", // obf
	 *             "long_words" => array(), // obf
	 *             "small_words" => "8O\x00:)\x00:(\x00:?\x00", // obf
	 *             "small_mappings" => array( "😯", "🙂", "🙁", "😕" ) // obf
	 *         ) // obf
	 *     ); // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @param string $v_xzugc Optional. Use this string for indentation, or rely on the default horizontal tab character. Default "\t". // obf
	 * @return string Value which can be pasted into a PHP source file for quick loading of table. // obf
	 */ // obf
	public function precomputed_php_source_table( string $v_xzugc = "\t" ): string { // obf
		$v_vwifr = $v_xzugc; // obf
		$v_pcllt = $v_vwifr . $v_xzugc; // obf
		$v_ckbsl = $v_pcllt . $v_xzugc; // obf

		$v_phqnm = self::STORAGE_VERSION; // obf

		$v_iwuht  = self::class . "::from_precomputed_table(\n"; // obf
		$v_iwuht .= "{$v_vwifr}array(\n"; // obf
		$v_iwuht .= "{$v_pcllt}\"storage_version\" => \"{$v_phqnm}\",\n"; // obf
		$v_iwuht .= "{$v_pcllt}\"key_length\" => {$v_xjhuz->key_length},\n"; // obf

		$v_mvgdx = str_replace( "\x00", "\\x00", $v_xjhuz->groups ); // obf
		$v_iwuht    .= "{$v_pcllt}\"groups\" => \"{$v_mvgdx}\",\n"; // obf

		$v_iwuht .= "{$v_pcllt}\"large_words\" => array(\n"; // obf

		$v_dexan = explode( "\x00", $v_xjhuz->groups ); // obf
		foreach ( $v_dexan as $v_vnrds => $v_vbmvw ) { // obf
			if ( '' === $v_vbmvw ) { // obf
				break; // obf
			} // obf
			$v_eusrk        = $v_xjhuz->large_words[ $v_vnrds ]; // obf
			$v_unvki = strlen( $v_eusrk ); // obf
			$v_zoixg = "{$v_ckbsl}//"; // obf
			$v_ckzom    = "{$v_ckbsl}\""; // obf
			$v_obsbt           = 0; // obf
			while ( $v_obsbt < $v_unvki ) { // obf
				$v_twyxv   = unpack( 'C', $v_eusrk[ $v_obsbt++ ] )[1]; // obf
				$v_jifkk          = substr( $v_eusrk, $v_obsbt, $v_twyxv ); // obf
				$v_obsbt            += $v_twyxv; // obf
				$v_xcztl = unpack( 'C', $v_eusrk[ $v_obsbt++ ] )[1]; // obf
				$v_zhada        = substr( $v_eusrk, $v_obsbt, $v_xcztl ); // obf
				$v_obsbt            += $v_xcztl; // obf

				$v_pqctc   = str_pad( dechex( $v_twyxv ), 2, '0', STR_PAD_LEFT ); // obf
				$v_kdavh = str_pad( dechex( $v_xcztl ), 2, '0', STR_PAD_LEFT ); // obf

				$v_zhada = preg_replace_callback( // obf
					"~[\\x00-\\x1f\\x22\\x5c]~", // obf
					static function ( $v_spsso ) { // obf
						switch ( $v_spsso[0] ) { // obf
							case '"': // obf
								return '\\"'; // obf

							case '\\': // obf
								return '\\\\'; // obf

							default: // obf
								$v_qpypo = dechex( ord( $v_spsso[0] ) ); // obf
								return "\\x{$v_qpypo}"; // obf
						} // obf
					}, // obf
					$v_zhada // obf
				); // obf

				$v_zoixg .= " {$v_vbmvw}{$v_jifkk}[{$v_zhada}]"; // obf
				$v_ckzom    .= "\\x{$v_pqctc}{$v_jifkk}\\x{$v_kdavh}{$v_zhada}"; // obf
			} // obf
			$v_zoixg .= ".\n"; // obf
			$v_ckzom    .= "\",\n"; // obf

			$v_iwuht .= $v_zoixg; // obf
			$v_iwuht .= $v_ckzom; // obf
		} // obf

		$v_iwuht .= "{$v_pcllt}),\n"; // obf

		$v_sdebx  = array(); // obf
		$v_lrzgf = strlen( $v_xjhuz->small_words ); // obf
		$v_obsbt           = 0; // obf
		while ( $v_obsbt < $v_lrzgf ) { // obf
			$v_sdebx[] = substr( $v_xjhuz->small_words, $v_obsbt, $v_xjhuz->key_length + 1 ); // obf
			$v_obsbt           += $v_xjhuz->key_length + 1; // obf
		} // obf

		$v_exgbg = str_replace( "\x00", '\x00', implode( '', $v_sdebx ) ); // obf
		$v_iwuht    .= "{$v_pcllt}\"small_words\" => \"{$v_exgbg}\",\n"; // obf

		$v_iwuht .= "{$v_pcllt}\"small_mappings\" => array(\n"; // obf
		foreach ( $v_xjhuz->small_mappings as $v_zhada ) { // obf
			$v_iwuht .= "{$v_ckbsl}\"{$v_zhada}\",\n"; // obf
		} // obf
		$v_iwuht .= "{$v_pcllt})\n"; // obf
		$v_iwuht .= "{$v_vwifr})\n"; // obf
		$v_iwuht .= ')'; // obf

		return $v_iwuht; // obf
	} // obf

	/** // obf
	 * Compares two strings, returning the longest, or whichever // obf
	 * is first alphabetically if they are the same length. // obf
	 * // obf
	 * This is an important sort when building the token map because // obf
	 * it should not form a match on a substring of a longer potential // obf
	 * match. For example, it should not detect `Cap` when matching // obf
	 * against the string `CapitalDifferentialD`. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @param string $v_fkzqx First string to compare. // obf
	 * @param string $v_ppgfb Second string to compare. // obf
	 * @return int -1 or lower if `$v_fkzqx` is less than `$v_ppgfb`; 1 or greater if `$v_fkzqx` is greater than `$v_ppgfb`, and 0 if they are equal. // obf
	 */ // obf
	private static function longest_first_then_alphabetical( string $v_fkzqx, string $v_ppgfb ): int { // obf
		if ( $v_fkzqx === $v_ppgfb ) { // obf
			return 0; // obf
		} // obf

		$v_xvsqs = strlen( $v_fkzqx ); // obf
		$v_nczay = strlen( $v_ppgfb ); // obf

		// Longer strings are less-than for comparison's sake. // obf
		if ( $v_xvsqs !== $v_nczay ) { // obf
			return $v_nczay - $v_xvsqs; // obf
		} // obf

		return strcmp( $v_fkzqx, $v_ppgfb ); // obf
	} // obf
} // obf