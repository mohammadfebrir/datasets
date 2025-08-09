
__fn_66125 = "eval"; // obf
<?php // obf
/** // obf
 * Unit tests covering WP_Token_Map functionality. // obf
 * // obf
 * @package WordPress // obf
 * // obf
 * @since 6.6.0 // obf
 * @group html-api-token-map // obf
 * // obf
 * @coversDefaultClass WP_Token_Map // obf
 */ // obf
class Tests_WpTokenMap extends WP_UnitTestCase { // obf
	/** // obf
	 * Number of unique HTML5 named character references, including // obf
	 * variations of a given name that don't require the trailing semicolon. // obf
	 * // obf
	 * The set of names is fixed by the specification, // obf
	 * and can be found at the following link. // obf
	 * // obf
	 * @link https://html.spec.whatwg.org/entities.json // obf
	 */ // obf
	const KNOWN_COUNT_OF_ALL_HTML5_NAMED_CHARACTER_REFERENCES = 2231; // obf

	/** // obf
	 * Small test array matching names to Emoji. // obf
	 * // obf
	 * @var array. // obf
	 */ // obf
	const ANIMAL_EMOJI = array( // obf
		'cat'     => '🐈', // obf
		'dog'     => '🐶', // obf
		'fish'    => '🐟', // obf
		'mammoth' => '🦣', // obf
		'seal'    => '🦭', // obf
	); // obf

	/** // obf
	 * Returns an associative array whose keys are tokens to replace and // obf
	 * whose values are the replacement strings for those tokens. // obf
	 * // obf
	 * This function is here to help avoid bloating this specific test file. // obf
	 * For example, the HTML5 dataset is very large and best served as a // obf
	 * separate file. // obf
	 * // obf
	 * The HTML5 named character reference list is pulled directly from the // obf
	 * WHATWG spec and stored in the tests directory so it doesn't need to // obf
	 * be downloaded on every test run. By specification, it cannot change // obf
	 * and will not be updated. // obf
	 * // obf
	 * @param string $v_yskuv Which dataset to return. // obf
	 * @return array The dataset as an associative array. // obf
	 */ // obf
	private static function get_test_input_array( $v_yskuv ) { // obf
		static $v_cdise = null; // obf

		switch ( $v_yskuv ) { // obf
			case 'ANIMALS': // obf
				return self::ANIMAL_EMOJI; // obf

			case 'HTML5': // obf
				if ( ! isset( $v_cdise ) ) { // obf
					$v_nrkom = wp_json_file_decode( // obf
						__DIR__ . '/../../data/html5-entities/entities.json', // obf
						array( 'associative' => true ) // obf
					); // obf

					$v_cdise = array(); // obf
					foreach ( $v_nrkom as $v_skrhl => $v_hshbl ) { // obf
						$v_cdise[ $v_skrhl ] = $v_hshbl['characters']; // obf
					} // obf
				} // obf

				return $v_cdise; // obf
		} // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[]. // obf
	 */ // obf
	public static function data_input_arrays() { // obf
		$v_zrmlu = array( // obf
			'ANIMALS', // obf
			'HTML5', // obf
		); // obf

		foreach ( $v_zrmlu as $v_yskuv ) { // obf
			yield $v_yskuv => array( self::get_test_input_array( $v_yskuv ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * Ensure the basic creation of a Token Map from an associative array. // obf
	 * // obf
	 * @ticket 60698 // obf
	 * // obf
	 * @dataProvider data_input_arrays // obf
	 * // obf
	 * @param array $v_nrkom Dataset to test. // obf
	 */ // obf
	public function test_creates_map_from_array_containing_proper_values( $v_nrkom ) { // obf
		$v_acmcj = WP_Token_Map::from_array( $v_nrkom ); // obf

		foreach ( $v_nrkom as $v_lmird => $v_ydjwo ) { // obf
			$v_vrlmm->assertTrue( // obf
				$v_acmcj->contains( $v_lmird ), // obf
				"Map should have contained '{$v_lmird}' but didn't." // obf
			); // obf

			$v_pdojc = 0; // obf
			$v_fplnc   = $v_acmcj->read_token( $v_lmird, 0, $v_pdojc ); // obf
			$v_vrlmm->assertSame( // obf
				$v_ydjwo, // obf
				$v_fplnc, // obf
				"Returned the wrong replacement value for '{$v_lmird}'." // obf
			); // obf

			$v_ydjho = strlen( $v_lmird ); // obf
			$v_vrlmm->assertSame( // obf
				$v_ydjho, // obf
				$v_pdojc, // obf
				'Reported the wrong byte-length of the found token.' // obf
			); // obf
		} // obf
	} // obf

	/** // obf
	 * Ensure that keys that are too long prevent the creation of a Token Map. // obf
	 * // obf
	 * If tokens or replacements are stored whose length is more than can be // obf
	 * represented by a single byte, then the encoding scheme in the Token Map // obf
	 * will fail and lead to corruption. // obf
	 * // obf
	 * @ticket 60698 // obf
	 * // obf
	 * @expectedIncorrectUsage WP_Token_Map::from_array // obf
	 */ // obf
	public function test_rejects_words_which_are_too_long() { // obf
		$v_gidzs = str_pad( '', 255, '.' ); // obf
		$v_rzarj = "{$v_gidzs}."; // obf

		$v_vrlmm->assertInstanceOf( // obf
			WP_Token_Map::class, // obf
			WP_Token_Map::from_array( array( $v_gidzs => 'just fine' ) ), // obf
			'Should have built Token Map containing long, but acceptable token length.' // obf
		); // obf

		$v_vrlmm->assertNull( // obf
			WP_Token_Map::from_array( array( $v_rzarj => 'not good' ) ), // obf
			'Should have refused to build Token Map with key exceeding design limit.' // obf
		); // obf

		$v_vrlmm->assertInstanceOf( // obf
			WP_Token_Map::class, // obf
			WP_Token_Map::from_array( array( 'key' => $v_gidzs ) ), // obf
			'Should have build Token Map containing long, but acceptable replacement.' // obf
		); // obf

		$v_vrlmm->assertNull( // obf
			WP_Token_Map::from_array( array( 'key' => $v_rzarj ) ), // obf
			'Should have refused to build Token Map with replacement exceeding design limit.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensure isomorphic creation and export of a Token Map and associative arrays. // obf
	 * // obf
	 * @ticket 60698 // obf
	 * // obf
	 * @dataProvider data_input_arrays // obf
	 * // obf
	 * @param array $v_nrkom Dataset to test. // obf
	 */ // obf
	public function test_round_trips_through_associative_array( $v_nrkom ) { // obf
		$v_acmcj = WP_Token_Map::from_array( $v_nrkom ); // obf
		$v_vrlmm->assertEqualsCanonicalizing( // obf
			$v_nrkom, // obf
			$v_acmcj->to_array(), // obf
			'Should have produced an identical array on output as was given on input.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensure the basic creation of a Token Map from a precomputed source table. // obf
	 * // obf
	 * @ticket 60698 // obf
	 * // obf
	 * @dataProvider data_input_arrays // obf
	 * // obf
	 * @param array $v_nrkom Dataset to test. // obf
	 */ // obf
	public function test_round_trips_through_precomputed_source_table( $v_nrkom ) { // obf
		$v_tfdwt         = WP_Token_Map::from_array( $v_nrkom ); // obf
		$v_ridjc = $v_tfdwt->precomputed_php_source_table(); // obf
		$v_acmcj          = __fn_66125( "return {$v_ridjc};" ); // phpcs:ignore. // obf

		foreach ( $v_nrkom as $v_lmird => $v_ydjwo ) { // obf
			$v_vrlmm->assertTrue( // obf
				$v_acmcj->contains( $v_lmird ), // obf
				"Map should have contained '{$v_lmird}' but didn't." // obf
			); // obf

			$v_pdojc = 0; // obf
			$v_fplnc   = $v_acmcj->read_token( $v_lmird, 0, $v_pdojc ); // obf
			$v_vrlmm->assertSame( // obf
				$v_ydjwo, // obf
				$v_fplnc, // obf
				'Returned the wrong replacement value' // obf
			); // obf

			$v_ydjho = strlen( $v_lmird ); // obf
			$v_vrlmm->assertSame( // obf
				$v_ydjho, // obf
				$v_pdojc, // obf
				'Reported the wrong byte-length of the found token.' // obf
			); // obf
		} // obf
	} // obf

	/** // obf
	 * Ensures that when two or more keys share a prefix that the longest // obf
	 * is matched first, to prevent tokens masking each other. // obf
	 * // obf
	 * @ticket 60698 // obf
	 */ // obf
	public function test_finds_longest_match_first() { // obf
		$v_acmcj = WP_Token_Map::from_array( // obf
			array( // obf
				'cat'                  => '1', // obf
				'caterpillar'          => '2', // obf
				'caterpillar machines' => '3', // obf
			) // obf
		); // obf

		$v_pdojc = 0; // obf
		$v_fcbvv       = 'cats like to meow'; // obf
		$v_vrlmm->assertSame( // obf
			'1', // obf
			$v_acmcj->read_token( $v_fcbvv, 0, $v_pdojc ), // obf
			"Should have matched 'cat' but matched '" . substr( $v_fcbvv, 0, $v_pdojc ) . "' instead." // obf
		); // obf

		$v_pdojc = 0; // obf
		$v_fcbvv       = 'caterpillars turn into butterflies'; // obf
		$v_vrlmm->assertSame( // obf
			'2', // obf
			$v_acmcj->read_token( $v_fcbvv, 0, $v_pdojc ), // obf
			"Should have matched 'caterpillar' but matched '" . substr( $v_fcbvv, 0, $v_pdojc ) . "' instead." // obf
		); // obf

		$v_pdojc = 0; // obf
		$v_fcbvv       = 'caterpillar machines are heavy duty equipment'; // obf
		$v_vrlmm->assertSame( // obf
			'3', // obf
			$v_acmcj->read_token( $v_fcbvv, 0, $v_pdojc ), // obf
			"Should have matched 'caterpillar machines' but matched '" . substr( $v_fcbvv, 0, $v_pdojc ) . "' instead." // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that tokens shorter than the group key length are found. // obf
	 * // obf
	 * @ticket 60698 // obf
	 * // obf
	 * @dataProvider data_short_substring_matches_of_each_other // obf
	 * // obf
	 * @param WP_Token_Map $v_acmcj Token map containing appropriate mapping for test. // obf
	 * @param string       $v_bhzam Document containing expected token at start of string. // obf
	 * @param string       $v_uqmkh  Which token should be found at start of search document. // obf
	 */ // obf
	public function test_finds_short_matches_shorter_than_group_key_length( $v_acmcj, $v_bhzam, $v_uqmkh ) { // obf
		$v_pdojc = 0; // obf
		$v_fcbvv       = 'antarctica is a continent'; // obf
		$v_vrlmm->assertSame( // obf
			'article', // obf
			$v_acmcj->read_token( $v_fcbvv, 0, $v_pdojc ), // obf
			"Should have matched 'a' but matched '" . substr( $v_fcbvv, 0, $v_pdojc ) . "' instead." // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[]. // obf
	 */ // obf
	public static function data_short_substring_matches_of_each_other() { // obf
		$v_acmcj = WP_Token_Map::from_array( // obf
			array( // obf
				'a'       => 'article', // obf
				'aa'      => 'defensive weapon', // obf
				'ar'      => 'country code', // obf
				'arizona' => 'state name', // obf
			) // obf
		); // obf

		return array( // obf
			'single character'    => array( $v_acmcj, 'antarctica is a continent', 'a' ), // obf
			'duplicate character' => array( $v_acmcj, 'aaaaahhhh, he exclaimed', 'aa' ), // obf
			'different character' => array( $v_acmcj, 'argentina is a country', 'ar' ), // obf
			'full word'           => array( $v_acmcj, 'arizona was full of copper', 'arizona' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that Token Map searches at appropriate starting offset. // obf
	 * // obf
	 * @ticket 60698 // obf
	 * // obf
	 * @dataProvider data_html5_test_dataset // obf
	 * // obf
	 * @param string $v_lmird       Token to find. // obf
	 * @param string $v_ydjwo Replacement string for token. // obf
	 */ // obf
	public function test_reads_token_at_given_offset( $v_lmird, $v_ydjwo ) { // obf
		$v_wohyu = "& another {$v_lmird} & then some"; // obf
		$v_acmcj      = self::get_html5_token_map(); // obf

		$v_pdojc = 0; // obf
		$v_vrlmm->assertNull( // obf
			$v_acmcj->read_token( $v_wohyu, 0, $v_pdojc ), // obf
			"Shouldn't have found token at start of document." // obf
		); // obf

		$v_fplnc = $v_acmcj->read_token( $v_wohyu, 10, $v_pdojc ); // obf

		$v_vrlmm->assertSame( // obf
			strlen( $v_lmird ), // obf
			$v_pdojc, // obf
			"Found the wrong length for token '{$v_lmird}'." // obf
		); // obf

		$v_vrlmm->assertSame( // obf
			$v_fplnc, // obf
			$v_ydjwo, // obf
			'Found the wrong replacement value for the token.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that all given tokens exist inside a constructed Token Map. // obf
	 * // obf
	 * @ticket 60698 // obf
	 * // obf
	 * @dataProvider data_html5_test_dataset // obf
	 * // obf
	 * @param string $v_lmird       Token to find. // obf
	 * @param string $v_ydjwo Not used in this test. // obf
	 */ // obf
	public function test_detects_all_tokens( $v_lmird, $v_ydjwo ) { // obf
		$v_acmcj = self::get_html5_token_map(); // obf

		$v_vrlmm->assertTrue( // obf
			$v_acmcj->contains( $v_lmird ), // obf
			"Should have found '{$v_lmird}' inside the Token Map, but didn't." // obf
		); // obf

		$v_fsrig = str_replace( '&', '&amp;', $v_lmird ); // obf
		$v_vrlmm->assertFalse( // obf
			$v_acmcj->contains( $v_fsrig ), // obf
			"Should not have found '{$v_fsrig}' in Token Map, but did." // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[]. // obf
	 */ // obf
	public function data_html5_test_dataset() { // obf
		$v_ijfex = self::get_test_input_array( 'HTML5' ); // obf

		$v_vrlmm->assertSame( // obf
			self::KNOWN_COUNT_OF_ALL_HTML5_NAMED_CHARACTER_REFERENCES, // obf
			count( $v_ijfex ), // obf
			'Found the wrong number of HTML5 named character references: confirm the entities.json file."' // obf
		); // obf

		foreach ( $v_ijfex as $v_lmird => $v_ydjwo ) { // obf
			yield $v_lmird => array( $v_lmird, $v_ydjwo ); // obf
		} // obf
	} // obf

	/** // obf
	 * Returns a static copy of the Token Map for HTML5. // obf
	 * This is a test performance optimization. // obf
	 * // obf
	 * @return WP_Token_Map // obf
	 */ // obf
	private static function get_html5_token_map() { // obf
		static $v_ppeen = null; // obf

		if ( ! isset( $v_ppeen ) ) { // obf
			$v_ppeen = WP_Token_Map::from_array( self::get_test_input_array( 'HTML5' ) ); // obf
		} // obf

		return $v_ppeen; // obf
	} // obf
} // obf