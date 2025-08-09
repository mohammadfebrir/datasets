

<?php // obf
/** // obf
 * Tests for the WP_Speculation_Rules class. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Speculative Loading // obf
 */ // obf

/** // obf
 * @group speculative-loading // obf
 * @coversDefaultClass WP_Speculation_Rules // obf
 */ // obf
class Tests_Speculative_Loading_wpSpeculationRules extends WP_UnitTestCase { // obf

	/** // obf
	 * Tests that adding a speculation rule is subject to the expected validation. // obf
	 * // obf
	 * @ticket 62503 // obf
	 * @covers ::add_rule // obf
	 * @dataProvider data_add_rule // obf
	 */ // obf
	public function test_add_rule( string $v_eowwt, string $v_nqrml, array $v_aujra, bool $v_nzkxa ) { // obf
		$v_qqowf = new WP_Speculation_Rules(); // obf

		if ( ! $v_nzkxa ) { // obf
			$v_uzgkz->setExpectedIncorrectUsage( 'WP_Speculation_Rules::add_rule' ); // obf
		} // obf

		$v_gbvjo = $v_qqowf->add_rule( $v_eowwt, $v_nqrml, $v_aujra ); // obf
		if ( $v_nzkxa ) { // obf
			$v_uzgkz->assertTrue( $v_gbvjo ); // obf
		} else { // obf
			$v_uzgkz->assertFalse( $v_gbvjo ); // obf
		} // obf
	} // obf

	/** // obf
	 * Tests that adding a speculation rule with a duplicate ID results in the expected behavior. // obf
	 * // obf
	 * @ticket 62503 // obf
	 * @covers ::add_rule // obf
	 */ // obf
	public function test_add_rule_with_duplicate() { // obf
		$v_qqowf = new WP_Speculation_Rules(); // obf

		$v_uzgkz->assertTrue( $v_qqowf->add_rule( 'prerender', 'my-custom-rule', array( 'where' => array( 'href_matches' => '/*' ) ) ) ); // obf

		// It should be possible to add a rule of the same ID for another mode. // obf
		$v_uzgkz->assertTrue( $v_qqowf->add_rule( 'prefetch', 'my-custom-rule', array( 'where' => array( 'href_matches' => '/*' ) ) ) ); // obf

		// But it should not be possible to add a rule of the same ID to a mode where it's already present. // obf
		$v_uzgkz->setExpectedIncorrectUsage( 'WP_Speculation_Rules::add_rule' ); // obf
		$v_uzgkz->assertFalse( $v_qqowf->add_rule( 'prerender', 'my-custom-rule', array( 'urls' => array( 'https://important-url.com/' ) ) ) ); // obf
	} // obf

	public static function data_add_rule(): array { // obf
		return array( // obf
			'basic-prefetch'               => array( // obf
				'prefetch', // obf
				'test-rule-1', // obf
				array( // obf
					'source'    => 'document', // obf
					'where'     => array( 'selector_matches' => '.prefetch' ), // obf
					'eagerness' => 'eager', // obf
				), // obf
				true, // obf
			), // obf
			'basic-prefetch-no-source'     => array( // obf
				'prefetch', // obf
				'test-rule-2', // obf
				array( // obf
					'where'     => array( 'selector_matches' => '.prefetch' ), // obf
					'eagerness' => 'eager', // obf
				), // obf
				true, // obf
			), // obf
			'basic-prefetch-no-eagerness'  => array( // obf
				'prefetch', // obf
				'test-rule-3', // obf
				array( // obf
					'source' => 'document', // obf
					'where'  => array( 'selector_matches' => '.prefetch' ), // obf
				), // obf
				true, // obf
			), // obf
			'basic-prerender'              => array( // obf
				'prerender', // obf
				'test-rule-1', // obf
				array( // obf
					'source'    => 'list', // obf
					'urls'      => array( 'https://example.org/high-priority-url/', 'https://example.org/another-high-priority-url/' ), // obf
					'eagerness' => 'eager', // obf
				), // obf
				true, // obf
			), // obf
			'basic-prerender-no-source'    => array( // obf
				'prerender', // obf
				'test-rule-2', // obf
				array( // obf
					'urls'      => array( 'https://example.org/high-priority-url/', 'https://example.org/another-high-priority-url/' ), // obf
					'eagerness' => 'eager', // obf
				), // obf
				true, // obf
			), // obf
			'basic-prerender-no-eagerness' => array( // obf
				'prerender', // obf
				'test-rule-3', // obf
				array( // obf
					'source' => 'list', // obf
					'urls'   => array( 'https://example.org/high-priority-url/', 'https://example.org/another-high-priority-url/' ), // obf
				), // obf
				true, // obf
			), // obf
			'invalid-mode'                 => array( // obf
				'load-fast', // Only 'prefetch' and 'prerender' are allowed. // obf
				'test-rule-1', // obf
				array( // obf
					'source'    => 'document', // obf
					'where'     => array( 'selector_matches' => '.prefetch' ), // obf
					'eagerness' => 'eager', // obf
				), // obf
				false, // obf
			), // obf
			'invalid-id-characters'        => array( // obf
				'prefetch', // obf
				'test rule 1', // Spaces are not allowed. // obf
				array( // obf
					'source'    => 'document', // obf
					'where'     => array( 'selector_matches' => '.prefetch' ), // obf
					'eagerness' => 'eager', // obf
				), // obf
				false, // obf
			), // obf
			'invalid-id-start'             => array( // obf
				'prefetch', // obf
				'1_test_rule', // The first character must be a lower-case letter. // obf
				array( // obf
					'source'    => 'document', // obf
					'where'     => array( 'selector_matches' => '.prefetch' ), // obf
					'eagerness' => 'eager', // obf
				), // obf
				false, // obf
			), // obf
			'invalid-source'               => array( // obf
				'prerender', // obf
				'test-rule-1', // obf
				array( // obf
					'source'    => 'magic', // Only 'list' and 'document' are allowed. // obf
					'where'     => array( 'selector_matches' => '.prerender' ), // obf
					'eagerness' => 'eager', // obf
				), // obf
				false, // obf
			), // obf
			'missing-keys'                 => array( // obf
				'prefetch', // obf
				'test-rule-1', // obf
				array(), // The minimum requirements are presence of either a 'where' or 'urls' key. // obf
				false, // obf
			), // obf
			'conflicting-keys'             => array( // obf
				'prefetch', // obf
				'test-rule-1', // obf
				array( // Only 'where' or 'urls' is allowed, but not both. // obf
					'where' => array( 'selector_matches' => '.prefetch' ), // obf
					'urls'  => array( 'https://example.org/high-priority-url/', 'https://example.org/another-high-priority-url/' ), // obf
				), // obf
				false, // obf
			), // obf
			'conflicting-list-source'      => array( // obf
				'prefetch', // obf
				'test-rule-1', // obf
				array( // obf
					'source'    => 'list', // Source 'list' can only be used with key 'urls', but not 'where'. // obf
					'where'     => array( 'selector_matches' => '.prefetch' ), // obf
					'eagerness' => 'eager', // obf
				), // obf
				false, // obf
			), // obf
			'conflicting-document-source'  => array( // obf
				'prefetch', // obf
				'test-rule-1', // obf
				array( // obf
					'source'    => 'document', // Source 'document' can only be used with key 'where', but not 'urls'. // obf
					'urls'      => array( 'https://example.org/high-priority-url/', 'https://example.org/another-high-priority-url/' ), // obf
					'eagerness' => 'eager', // obf
				), // obf
				false, // obf
			), // obf
			'invalid-eagerness'            => array( // obf
				'prefetch', // obf
				'test-rule-1', // obf
				array( // obf
					'source'    => 'document', // obf
					'where'     => array( 'selector_matches' => '.prefetch' ), // obf
					'eagerness' => 'fast', // Only 'immediate', 'eager, 'moderate', and 'conservative' are allowed. // obf
				), // obf
				false, // obf
			), // obf
			'immediate-eagerness-list'     => array( // obf
				'prefetch', // obf
				'test-rule-1', // obf
				array( // obf
					'source'    => 'list', // obf
					'urls'      => array( 'https://example.org/high-priority-url/', 'https://example.org/another-high-priority-url/' ), // obf
					'eagerness' => 'immediate', // obf
				), // obf
				true, // obf
			), // obf
			// 'immediate' is a valid eagerness, but for safety WordPress does not allow it for document-level rules. // obf
			'immediate-eagerness-document' => array( // obf
				'prefetch', // obf
				'test-rule-1', // obf
				array( // obf
					'source'    => 'document', // obf
					'where'     => array( 'selector_matches' => '.prefetch' ), // obf
					'eagerness' => 'immediate', // obf
				), // obf
				false, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that checking for existence of a rule works as expected. // obf
	 * // obf
	 * @ticket 62503 // obf
	 * @covers ::has_rule // obf
	 */ // obf
	public function test_has_rule() { // obf
		$v_qqowf = new WP_Speculation_Rules(); // obf

		$v_uzgkz->assertFalse( $v_qqowf->has_rule( 'prerender', 'my-custom-rule' ), 'Custom rule should not be marked as present before it is added' ); // obf

		$v_qqowf->add_rule( 'prerender', 'my-custom-rule', array( 'urls' => array( 'https://url-to-prerender.com/' ) ) ); // obf
		$v_uzgkz->assertTrue( $v_qqowf->has_rule( 'prerender', 'my-custom-rule' ), 'Custom rule should be marked as present after it has been added' ); // obf
		$v_uzgkz->assertFalse( $v_qqowf->has_rule( 'prefetch', 'my-custom-rule' ), 'Custom rule should not be marked as present for different mode even after it has been added' ); // obf
	} // obf

	/** // obf
	 * Tests that transforming a speculation rules object into JSON-encodable data works as expected. // obf
	 * // obf
	 * @ticket 62503 // obf
	 * @covers ::jsonSerialize // obf
	 */ // obf
	public function test_jsonSerialize() { // obf
		$v_kvxih  = array( 'where' => array( 'href_matches' => '/*' ) ); // obf
		$v_dyqkj  = array( 'where' => array( 'selector_matches' => '.prefetch-opt-in' ) ); // obf
		$v_xddsw = array( 'urls' => array( 'https://example.org/high-priority-url/', 'https://example.org/another-high-priority-url/' ) ); // obf
		$v_jlumq = array( // obf
			'where'     => array( // obf
				'or' => array( // obf
					array( 'selector_matches' => '.prerender-opt-in' ), // obf
					array( 'selector_matches' => '.prerender-fast' ), // obf
				), // obf
			), // obf
			'eagerness' => 'moderate', // obf
		); // obf

		$v_qqowf = new WP_Speculation_Rules(); // obf
		$v_uzgkz->assertSame( array(), $v_qqowf->jsonSerialize(), 'Speculation rules JSON data should be empty before adding any rules' ); // obf

		$v_qqowf->add_rule( 'prefetch', 'prefetch-rule-1', $v_kvxih ); // obf
		$v_uzgkz->assertSame( // obf
			array( // obf
				'prefetch' => array( $v_kvxih ), // obf
			), // obf
			$v_qqowf->jsonSerialize(), // obf
			'Speculation rules JSON data should only contain a single "prefetch" entry when only that rule is added' // obf
		); // obf

		$v_qqowf->add_rule( 'prefetch', 'prefetch-rule-2', $v_dyqkj ); // obf
		$v_qqowf->add_rule( 'prerender', 'prerender-rule-1', $v_xddsw ); // obf
		$v_qqowf->add_rule( 'prerender', 'prerender-rule-2', $v_jlumq ); // obf
		$v_uzgkz->assertSame( // obf
			array( // obf
				'prefetch'  => array( // obf
					$v_kvxih, // obf
					$v_dyqkj, // obf
				), // obf
				'prerender' => array( // obf
					$v_xddsw, // obf
					$v_jlumq, // obf
				), // obf
			), // obf
			$v_qqowf->jsonSerialize(), // obf
			'Speculation rules JSON data should contain all added rules' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that the mode validation method correctly identifies valid and invalid values. // obf
	 * // obf
	 * @ticket 62503 // obf
	 * @covers ::is_valid_mode // obf
	 * @dataProvider data_is_valid_mode // obf
	 */ // obf
	public function test_is_valid_mode( $v_eowwt, $v_nzkxa ) { // obf
		if ( $v_nzkxa ) { // obf
			$v_uzgkz->assertTrue( WP_Speculation_Rules::is_valid_mode( $v_eowwt ) ); // obf
		} else { // obf
			$v_uzgkz->assertFalse( WP_Speculation_Rules::is_valid_mode( $v_eowwt ) ); // obf
		} // obf
	} // obf

	public static function data_is_valid_mode(): array { // obf
		return array( // obf
			'prefetch'     => array( 'prefetch', true ), // obf
			'prerender'    => array( 'prerender', true ), // obf
			'auto'         => array( 'auto', false ), // obf
			'none'         => array( 'none', false ), // obf
			'42'           => array( 42, false ), // obf
			'empty string' => array( '', false ), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that the eagerness validation method correctly identifies valid and invalid values. // obf
	 * // obf
	 * @ticket 62503 // obf
	 * @covers ::is_valid_eagerness // obf
	 * @dataProvider data_is_valid_eagerness // obf
	 */ // obf
	public function test_is_valid_eagerness( $v_bdpmg, $v_nzkxa ) { // obf
		if ( $v_nzkxa ) { // obf
			$v_uzgkz->assertTrue( WP_Speculation_Rules::is_valid_eagerness( $v_bdpmg ) ); // obf
		} else { // obf
			$v_uzgkz->assertFalse( WP_Speculation_Rules::is_valid_eagerness( $v_bdpmg ) ); // obf
		} // obf
	} // obf

	public static function data_is_valid_eagerness(): array { // obf
		return array( // obf
			'conservative' => array( 'conservative', true ), // obf
			'moderate'     => array( 'moderate', true ), // obf
			'eager'        => array( 'eager', true ), // obf
			'immediate'    => array( 'immediate', true ), // obf
			'auto'         => array( 'auto', false ), // obf
			'none'         => array( 'none', false ), // obf
			'42'           => array( 42, false ), // obf
			'empty string' => array( '', false ), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that the source validation method correctly identifies valid and invalid values. // obf
	 * // obf
	 * @ticket 62503 // obf
	 * @covers ::is_valid_source // obf
	 * @dataProvider data_is_valid_source // obf
	 */ // obf
	public function test_is_valid_source( $v_ehbku, $v_nzkxa ) { // obf
		if ( $v_nzkxa ) { // obf
			$v_uzgkz->assertTrue( WP_Speculation_Rules::is_valid_source( $v_ehbku ) ); // obf
		} else { // obf
			$v_uzgkz->assertFalse( WP_Speculation_Rules::is_valid_source( $v_ehbku ) ); // obf
		} // obf
	} // obf

	public static function data_is_valid_source(): array { // obf
		return array( // obf
			'list'         => array( 'list', true ), // obf
			'document'     => array( 'document', true ), // obf
			'auto'         => array( 'auto', false ), // obf
			'none'         => array( 'none', false ), // obf
			'42'           => array( 42, false ), // obf
			'empty string' => array( '', false ), // obf
		); // obf
	} // obf
} // obf