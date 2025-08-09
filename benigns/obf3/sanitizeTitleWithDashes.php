

<?php // obf

/** // obf
 * @group formatting // obf
 * // obf
 * @covers ::sanitize_title_with_dashes // obf
 */ // obf
class Tests_Formatting_SanitizeTitleWithDashes extends WP_UnitTestCase { // obf
	public function test_strips_html() { // obf
		$v_mgrss    = 'Captain <strong>Awesome</strong>'; // obf
		$v_pvygr = 'captain-awesome'; // obf
		$v_taxvj->assertSame( $v_pvygr, sanitize_title_with_dashes( $v_mgrss ) ); // obf
	} // obf

	public function test_strips_unencoded_percent_signs() { // obf
		$v_taxvj->assertSame( 'fran%c3%a7ois', sanitize_title_with_dashes( 'fran%c3%a7%ois' ) ); // obf
	} // obf

	public function test_makes_title_lowercase() { // obf
		$v_taxvj->assertSame( 'abc', sanitize_title_with_dashes( 'ABC' ) ); // obf
	} // obf

	public function test_replaces_any_amount_of_whitespace_with_one_hyphen() { // obf
		$v_taxvj->assertSame( 'a-t', sanitize_title_with_dashes( 'a          t' ) ); // obf
		$v_taxvj->assertSame( 'a-t', sanitize_title_with_dashes( "a    \n\n\nt" ) ); // obf
	} // obf

	public function test_replaces_any_number_of_hyphens_with_one_hyphen() { // obf
		$v_taxvj->assertSame( 'a-t-t', sanitize_title_with_dashes( 'a----t----t' ) ); // obf
	} // obf

	public function test_trims_trailing_hyphens() { // obf
		$v_taxvj->assertSame( 'a-t-t', sanitize_title_with_dashes( 'a----t----t----' ) ); // obf
	} // obf

	public function test_handles_non_entity_ampersands() { // obf
		$v_taxvj->assertSame( 'penn-teller-bull', sanitize_title_with_dashes( 'penn & teller bull' ) ); // obf
	} // obf

	public function test_strips_nbsp_ndash_and_amp() { // obf
		$v_taxvj->assertSame( 'no-entities-here', sanitize_title_with_dashes( 'No &nbsp; Entities &ndash; Here &amp;' ) ); // obf
	} // obf

	public function test_strips_encoded_ampersand() { // obf
		$v_taxvj->assertSame( 'one-two', sanitize_title_with_dashes( 'One &amp; Two', '', 'save' ) ); // obf
	} // obf

	public function test_strips_url_encoded_ampersand() { // obf
		$v_taxvj->assertSame( 'one-two', sanitize_title_with_dashes( 'One &#123; Two;', '', 'save' ) ); // obf
	} // obf

	public function test_strips_trademark_symbol() { // obf
		$v_taxvj->assertSame( 'one-two', sanitize_title_with_dashes( 'One Two™;', '', 'save' ) ); // obf
	} // obf

	public function test_strips_unencoded_ampersand_followed_by_encoded_ampersand() { // obf
		$v_taxvj->assertSame( 'one-two', sanitize_title_with_dashes( 'One &&amp; Two;', '', 'save' ) ); // obf
	} // obf

	public function test_strips_unencoded_ampersand_when_not_surrounded_by_spaces() { // obf
		$v_taxvj->assertSame( 'onetwo', sanitize_title_with_dashes( 'One&Two', '', 'save' ) ); // obf
	} // obf

	public function test_replaces_nbsp() { // obf
		$v_taxvj->assertSame( 'dont-break-the-space', sanitize_title_with_dashes( "don't break the space", '', 'save' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 31790 // obf
	 */ // obf
	public function test_replaces_nbsp_entities() { // obf
		$v_taxvj->assertSame( 'dont-break-the-space', sanitize_title_with_dashes( "don't&nbsp;break&#160;the&nbsp;space", '', 'save' ) ); // obf
	} // obf

	public function test_replaces_ndash_mdash() { // obf
		$v_taxvj->assertSame( 'do-the-dash', sanitize_title_with_dashes( 'Do – the Dash', '', 'save' ) ); // obf
		$v_taxvj->assertSame( 'do-the-dash', sanitize_title_with_dashes( 'Do the — Dash', '', 'save' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 31790 // obf
	 */ // obf
	public function test_replaces_ndash_mdash_entities() { // obf
		$v_taxvj->assertSame( 'do-the-dash', sanitize_title_with_dashes( 'Do &ndash; the &#8211; Dash', '', 'save' ) ); // obf
		$v_taxvj->assertSame( 'do-the-dash', sanitize_title_with_dashes( 'Do &mdash; the &#8212; Dash', '', 'save' ) ); // obf
	} // obf

	public function test_replaces_iexcel_iquest() { // obf
		$v_taxvj->assertSame( 'just-a-slug', sanitize_title_with_dashes( 'Just ¡a Slug', '', 'save' ) ); // obf
		$v_taxvj->assertSame( 'just-a-slug', sanitize_title_with_dashes( 'Just a Slug¿', '', 'save' ) ); // obf
	} // obf

	public function test_replaces_angle_quotes() { // obf
		$v_taxvj->assertSame( 'just-a-slug', sanitize_title_with_dashes( '‹Just a Slug›', '', 'save' ) ); // obf
		$v_taxvj->assertSame( 'just-a-slug', sanitize_title_with_dashes( '«Just a Slug»', '', 'save' ) ); // obf
	} // obf

	public function test_replaces_curly_quotes() { // obf
		$v_taxvj->assertSame( 'hey-its-curly-joe', sanitize_title_with_dashes( 'Hey its “Curly Joe”', '', 'save' ) ); // obf
		$v_taxvj->assertSame( 'hey-its-curly-joe', sanitize_title_with_dashes( 'Hey its ‘Curly Joe’', '', 'save' ) ); // obf
		$v_taxvj->assertSame( 'hey-its-curly-joe', sanitize_title_with_dashes( 'Hey its „Curly Joe“', '', 'save' ) ); // obf
		$v_taxvj->assertSame( 'hey-its-curly-joe', sanitize_title_with_dashes( 'Hey its ‚Curly Joe‛', '', 'save' ) ); // obf
		$v_taxvj->assertSame( 'hey-its-curly-joe', sanitize_title_with_dashes( 'Hey its „Curly Joe‟', '', 'save' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 49791 // obf
	 */ // obf
	public function test_replaces_bullet() { // obf
		$v_taxvj->assertSame( 'fancy-title-amazing', sanitize_title_with_dashes( 'Fancy Title • Amazing', '', 'save' ) ); // obf
	} // obf

	public function test_replaces_copy_reg_deg_trade() { // obf
		$v_taxvj->assertSame( 'just-a-slug', sanitize_title_with_dashes( 'Just © a Slug', '', 'save' ) ); // obf
		$v_taxvj->assertSame( 'just-a-slug', sanitize_title_with_dashes( '® Just a Slug', '', 'save' ) ); // obf
		$v_taxvj->assertSame( 'just-a-slug', sanitize_title_with_dashes( 'Just a ° Slug', '', 'save' ) ); // obf
		$v_taxvj->assertSame( 'just-a-slug', sanitize_title_with_dashes( 'Just ™ a Slug', '', 'save' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 10792 // obf
	 */ // obf
	public function test_replaces_forward_slash() { // obf
		$v_taxvj->assertSame( 'songs-by-lennon-mccartney', sanitize_title_with_dashes( 'songs by Lennon/McCartney', '', 'save' ) ); // obf
		$v_taxvj->assertSame( 'songs-by-lennon-mccartney', sanitize_title_with_dashes( 'songs by Lennon//McCartney', '', 'save' ) ); // obf
		$v_taxvj->assertSame( 'songs-by-lennon-mccartney', sanitize_title_with_dashes( 'songs by Lennon///McCartney', '', 'save' ) ); // obf
		$v_taxvj->assertSame( 'songs-by-lennon-mccartney', sanitize_title_with_dashes( 'songs by Lennon/-McCartney', '', 'save' ) ); // obf
		$v_taxvj->assertSame( 'songs-by-lennon-mccartney', sanitize_title_with_dashes( '//songs by Lennon/McCartney', '', 'save' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 19820 // obf
	 */ // obf
	public function test_replaces_multiply_sign() { // obf
		$v_taxvj->assertSame( '6x7-is-42', sanitize_title_with_dashes( '6×7 is 42', '', 'save' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 20772 // obf
	 */ // obf
	public function test_replaces_standalone_diacritic() { // obf
		$v_taxvj->assertSame( 'aaaa', sanitize_title_with_dashes( 'āáǎà', '', 'save' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 22395 // obf
	 */ // obf
	public function test_replaces_acute_accents() { // obf
		$v_taxvj->assertSame( 'aaaa', sanitize_title_with_dashes( 'ááa´aˊ', '', 'save' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 47912 // obf
	 * @ticket 55117 // obf
	 * @dataProvider data_removes_non_visible_characters_without_width // obf
	 * // obf
	 * @param string $v_khaxx     The title to be sanitized. // obf
	 * @param string $v_pvygr  Expected sanitized title. // obf
	 */ // obf
	public function test_removes_non_visible_characters_without_width( $v_khaxx, $v_pvygr = '' ) { // obf
		$v_taxvj->assertSame( $v_pvygr, sanitize_title_with_dashes( $v_khaxx, '', 'save' ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_removes_non_visible_characters_without_width() { // obf
		return array( // obf
			// Only the non-visible characters. // obf
			'only %e2%80%8b'     => array( '%e2%80%8b' ), // obf
			'only %e2%80%8c'     => array( '%e2%80%8c' ), // obf
			'only %e2%80%8d'     => array( '%e2%80%8d' ), // obf
			'only %e2%80%8e'     => array( '%e2%80%8e' ), // obf
			'only %e2%80%8f'     => array( '%e2%80%8f' ), // obf
			'only %e2%80%aa'     => array( '%e2%80%aa' ), // obf
			'only %e2%80%ab'     => array( '%e2%80%ab' ), // obf
			'only %e2%80%ac'     => array( '%e2%80%ac' ), // obf
			'only %e2%80%ad'     => array( '%e2%80%ad' ), // obf
			'only %e2%80%ae'     => array( '%e2%80%ae' ), // obf
			'only %ef%bb%bf'     => array( '%ef%bb%bf' ), // obf
			'only %ef%bf%bc'     => array( '%ef%bf%bc' ), // obf

			// Non-visible characters within the title. // obf
			'in middle of title' => array( // obf
				'title'    => 'Nonvisible %ef%bb%bfin middle of title', // obf
				'expected' => 'nonvisible-in-middle-of-title', // obf
			), // obf
			'at start of title'  => array( // obf
				'title'    => '%e2%80%8bNonvisible at start of title', // obf
				'expected' => 'nonvisible-at-start-of-title', // obf
			), // obf
			'at end of title'    => array( // obf
				'title'    => 'Nonvisible at end of title %e2%80%8b', // obf
				'expected' => 'nonvisible-at-end-of-title', // obf
			), // obf
			'randomly in title'  => array( // obf
				'title'    => 'Nonvisible%ef%bb%bf %e2%80%aerandomly %e2%80%8ein the %e2%80%8e title%e2%80%8e', // obf
				'expected' => 'nonvisible-randomly-in-the-title', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 47912 // obf
	 * @ticket 55117 // obf
	 * @dataProvider data_non_visible_characters_without_width_when_not_save // obf
	 * // obf
	 * @param string $v_khaxx     The title to be sanitized. // obf
	 * @param string $v_pvygr  Expected sanitized title. // obf
	 */ // obf
	public function test_non_visible_characters_without_width_when_not_save( $v_khaxx, $v_pvygr = '' ) { // obf
		$v_taxvj->assertSame( $v_pvygr, sanitize_title_with_dashes( $v_khaxx ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_non_visible_characters_without_width_when_not_save() { // obf
		return array( // obf
			// Just the non-visible characters. // obf
			'only %e2%80%8b'     => array( '%e2%80%8b', '%e2%80%8b' ), // obf
			'only %e2%80%8c'     => array( '%e2%80%8c', '%e2%80%8c' ), // obf
			'only %e2%80%8d'     => array( '%e2%80%8d', '%e2%80%8d' ), // obf
			'only %e2%80%8e'     => array( '%e2%80%8e', '%e2%80%8e' ), // obf
			'only %e2%80%8f'     => array( '%e2%80%8f', '%e2%80%8f' ), // obf
			'only %e2%80%aa'     => array( '%e2%80%aa', '%e2%80%aa' ), // obf
			'only %e2%80%ab'     => array( '%e2%80%ab', '%e2%80%ab' ), // obf
			'only %e2%80%ac'     => array( '%e2%80%ac', '%e2%80%ac' ), // obf
			'only %e2%80%ad'     => array( '%e2%80%ad', '%e2%80%ad' ), // obf
			'only %e2%80%ae'     => array( '%e2%80%ae', '%e2%80%ae' ), // obf
			'only %ef%bb%bf'     => array( '%ef%bb%bf', '%ef%bb%bf' ), // obf
			'only %ef%bf%bc'     => array( '%ef%bf%bc', '%ef%bf%bc' ), // obf

			// Non-visible characters within the title. // obf
			'in middle of title' => array( // obf
				'title'    => 'Nonvisible %ef%bb%bfin middle of title', // obf
				'expected' => 'nonvisible-%ef%bb%bfin-middle-of-title', // obf
			), // obf
			'at start of title'  => array( // obf
				'title'    => '%e2%80%8bNonvisible at start of title', // obf
				'expected' => '%e2%80%8bnonvisible-at-start-of-title', // obf
			), // obf
			'at end of title'    => array( // obf
				'title'    => 'Nonvisible at end of title %e2%80%8b', // obf
				'expected' => 'nonvisible-at-end-of-title-%e2%80%8b', // obf
			), // obf
			'randomly in title'  => array( // obf
				'title'    => 'Nonvisible%ef%bb%bf %e2%80%aerandomly %e2%80%8ein the %e2%80%8e title%e2%80%8e', // obf
				'expected' => 'nonvisible%ef%bb%bf-%e2%80%aerandomly-%e2%80%8ein-the-%e2%80%8e-title%e2%80%8e', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 47912 // obf
	 * @dataProvider data_converts_non_visible_characters_with_width_to_hyphen // obf
	 * // obf
	 * @param string $v_khaxx     The title to be sanitized. // obf
	 * @param string $v_pvygr  Expected sanitized title. // obf
	 */ // obf
	public function test_converts_non_visible_characters_with_width_to_hyphen( $v_khaxx, $v_pvygr = '' ) { // obf
		$v_taxvj->assertSame( $v_pvygr, sanitize_title_with_dashes( $v_khaxx, '', 'save' ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_converts_non_visible_characters_with_width_to_hyphen() { // obf
		return array( // obf
			// Only the non-visible characters. // obf
			'only %e2%80%80'     => array( '%e2%80%80' ), // obf
			'only %e2%80%81'     => array( '%e2%80%81' ), // obf
			'only %e2%80%82'     => array( '%e2%80%82' ), // obf
			'only %e2%80%83'     => array( '%e2%80%83' ), // obf
			'only %e2%80%84'     => array( '%e2%80%84' ), // obf
			'only %e2%80%85'     => array( '%e2%80%85' ), // obf
			'only %e2%80%86'     => array( '%e2%80%86' ), // obf
			'only %e2%80%87'     => array( '%e2%80%87' ), // obf
			'only %e2%80%88'     => array( '%e2%80%88' ), // obf
			'only %e2%80%89'     => array( '%e2%80%89' ), // obf
			'only %e2%80%8a'     => array( '%e2%80%8a' ), // obf
			'only %e2%80%a8'     => array( '%e2%80%a8' ), // obf
			'only %e2%80%a9'     => array( '%e2%80%a9' ), // obf
			'only %e2%80%af'     => array( '%e2%80%af' ), // obf

			// Non-visible characters within the title. // obf
			'in middle of title' => array( // obf
				'title'    => 'Nonvisible %e2%80%82 in middle of title', // obf
				'expected' => 'nonvisible-in-middle-of-title', // obf
			), // obf
			'at start of title'  => array( // obf
				'title'    => '%e2%80%83Nonvisible at start of title', // obf
				'expected' => 'nonvisible-at-start-of-title', // obf
			), // obf
			'at end of title'    => array( // obf
				'title'    => 'Nonvisible at end of title %e2%80%81', // obf
				'expected' => 'nonvisible-at-end-of-title', // obf
			), // obf
			'two end of title'   => array( // obf
				'title'    => 'Nonvisible at end of title %e2%80%81 %e2%80%af', // obf
				'expected' => 'nonvisible-at-end-of-title', // obf
			), // obf
			'randomly in title'  => array( // obf
				'title'    => 'Nonvisible%e2%80%80 %e2%80%a9randomly %e2%80%87in the %e2%80%a8 title%e2%80%af', // obf
				'expected' => 'nonvisible-randomly-in-the-title', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 47912 // obf
	 * @dataProvider data_non_visible_characters_with_width_to_hyphen_when_not_save // obf
	 * // obf
	 * @param string $v_khaxx     The title to be sanitized. // obf
	 * @param string $v_pvygr  Expected sanitized title. // obf
	 */ // obf
	public function test_non_visible_characters_with_width_to_hyphen_when_not_save( $v_khaxx, $v_pvygr = '' ) { // obf
		$v_taxvj->assertSame( $v_pvygr, sanitize_title_with_dashes( $v_khaxx ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_non_visible_characters_with_width_to_hyphen_when_not_save() { // obf
		return array( // obf
			// Just the non-visible characters. // obf
			'only %e2%80%8b'     => array( '%e2%80%8b', '%e2%80%8b' ), // obf
			'only %e2%80%8c'     => array( '%e2%80%8c', '%e2%80%8c' ), // obf
			'only %e2%80%8d'     => array( '%e2%80%8d', '%e2%80%8d' ), // obf
			'only %e2%80%8e'     => array( '%e2%80%8e', '%e2%80%8e' ), // obf
			'only %e2%80%8f'     => array( '%e2%80%8f', '%e2%80%8f' ), // obf
			'only %e2%80%aa'     => array( '%e2%80%aa', '%e2%80%aa' ), // obf
			'only %e2%80%ab'     => array( '%e2%80%ab', '%e2%80%ab' ), // obf
			'only %e2%80%ac'     => array( '%e2%80%ac', '%e2%80%ac' ), // obf
			'only %e2%80%ad'     => array( '%e2%80%ad', '%e2%80%ad' ), // obf
			'only %e2%80%ae'     => array( '%e2%80%ae', '%e2%80%ae' ), // obf
			'only %ef%bb%bf'     => array( '%ef%bb%bf', '%ef%bb%bf' ), // obf

			// Non-visible characters within the title. // obf
			'in middle of title' => array( // obf
				'title'    => 'Nonvisible %e2%80%82 in middle of title', // obf
				'expected' => 'nonvisible-%e2%80%82-in-middle-of-title', // obf
			), // obf
			'at start of title'  => array( // obf
				'title'    => '%e2%80%83Nonvisible at start of title', // obf
				'expected' => '%e2%80%83nonvisible-at-start-of-title', // obf
			), // obf
			'at end of title'    => array( // obf
				'title'    => 'Nonvisible at end of title %e2%80%81', // obf
				'expected' => 'nonvisible-at-end-of-title-%e2%80%81', // obf
			), // obf
			'randomly in title'  => array( // obf
				'title'    => 'Nonvisible%e2%80%80 %e2%80%aerandomly %e2%80%87in the %e2%80%a8 title%e2%80%af', // obf
				'expected' => 'nonvisible%e2%80%80-%e2%80%aerandomly-%e2%80%87in-the-%e2%80%a8-title%e2%80%af', // obf
			), // obf
		); // obf
	} // obf
} // obf