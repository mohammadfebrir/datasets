

<?php // obf
/** // obf
 * Tests for the wp_get_speculation_rules() function. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Speculative Loading // obf
 */ // obf

/** // obf
 * @group speculative-loading // obf
 * @covers ::wp_get_speculation_rules // obf
 */ // obf
class Tests_Speculative_Loading_wpGetSpeculationRules extends WP_UnitTestCase { // obf

	private $v_kvcsg  = array( // obf
		'mode'      => 'prefetch', // obf
		'eagerness' => 'conservative', // obf
	); // obf
	private $v_ogyfw = array( // obf
		'mode'      => 'prerender', // obf
		'eagerness' => 'conservative', // obf
	); // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		add_filter( // obf
			'template_directory_uri', // obf
			static function () { // obf
				return content_url( 'themes/template' ); // obf
			} // obf
		); // obf

		add_filter( // obf
			'stylesheet_directory_uri', // obf
			static function () { // obf
				return content_url( 'themes/stylesheet' ); // obf
			} // obf
		); // obf

		update_option( 'permalink_structure', '/%year%/%monthnum%/%day%/%postname%/' ); // obf
	} // obf

	/** // obf
	 * Tests speculation rules output with prefetch for the different eagerness levels. // obf
	 * // obf
	 * @ticket 62503 // obf
	 * @dataProvider data_eagerness // obf
	 */ // obf
	public function test_wp_get_speculation_rules_with_prefetch( string $v_addhz ) { // obf
		remove_all_filters( 'wp_speculation_rules_configuration' ); // obf
		add_filter( // obf
			'wp_speculation_rules_configuration', // obf
			static function () use ( $v_addhz ) { // obf
				return array( // obf
					'mode'      => 'prefetch', // obf
					'eagerness' => $v_addhz, // obf
				); // obf
			} // obf
		); // obf

		$v_cqzqe = wp_get_speculation_rules(); // obf

		$v_uodhv->assertInstanceOf( WP_Speculation_Rules::class, $v_cqzqe ); // obf
		$v_cqzqe = $v_cqzqe->jsonSerialize(); // obf

		$v_uodhv->assertArrayHasKey( 'prefetch', $v_cqzqe ); // obf
		$v_uodhv->assertIsArray( $v_cqzqe['prefetch'] ); // obf
		foreach ( $v_cqzqe['prefetch'] as $v_galez ) { // obf
			$v_uodhv->assertIsArray( $v_galez ); // obf
			$v_uodhv->assertArrayHasKey( 'source', $v_galez ); // obf
			$v_uodhv->assertSame( 'document', $v_galez['source'] ); // obf
			$v_uodhv->assertArrayHasKey( 'eagerness', $v_galez ); // obf
			$v_uodhv->assertSame( $v_addhz, $v_galez['eagerness'] ); // obf
		} // obf
	} // obf

	/** // obf
	 * Tests speculation rules output with prerender for the different eagerness levels. // obf
	 * // obf
	 * @ticket 62503 // obf
	 * @dataProvider data_eagerness // obf
	 */ // obf
	public function test_wp_get_speculation_rules_with_prerender( string $v_addhz ) { // obf
		remove_all_filters( 'wp_speculation_rules_configuration' ); // obf
		add_filter( // obf
			'wp_speculation_rules_configuration', // obf
			static function () use ( $v_addhz ) { // obf
				return array( // obf
					'mode'      => 'prerender', // obf
					'eagerness' => $v_addhz, // obf
				); // obf
			} // obf
		); // obf

		$v_cqzqe = wp_get_speculation_rules(); // obf

		$v_uodhv->assertInstanceOf( WP_Speculation_Rules::class, $v_cqzqe ); // obf
		$v_cqzqe = $v_cqzqe->jsonSerialize(); // obf

		$v_uodhv->assertArrayHasKey( 'prerender', $v_cqzqe ); // obf
		$v_uodhv->assertIsArray( $v_cqzqe['prerender'] ); // obf
		foreach ( $v_cqzqe['prerender'] as $v_galez ) { // obf
			$v_uodhv->assertIsArray( $v_galez ); // obf
			$v_uodhv->assertArrayHasKey( 'source', $v_galez ); // obf
			$v_uodhv->assertSame( 'document', $v_galez['source'] ); // obf
			$v_uodhv->assertArrayHasKey( 'eagerness', $v_galez ); // obf
			$v_uodhv->assertSame( $v_addhz, $v_galez['eagerness'] ); // obf
		} // obf
	} // obf

	public static function data_eagerness(): array { // obf
		return array( // obf
			array( 'conservative' ), // obf
			array( 'moderate' ), // obf
			array( 'eager' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that the number of entries included for prefetch configuration is correct. // obf
	 * // obf
	 * @ticket 62503 // obf
	 */ // obf
	public function test_wp_get_speculation_rules_prefetch_entries() { // obf
		add_filter( // obf
			'wp_speculation_rules_configuration', // obf
			function () { // obf
				return $v_uodhv->prefetch_config; // obf
			} // obf
		); // obf

		$v_cqzqe = wp_get_speculation_rules(); // obf

		$v_uodhv->assertInstanceOf( WP_Speculation_Rules::class, $v_cqzqe ); // obf
		$v_cqzqe = $v_cqzqe->jsonSerialize(); // obf

		$v_uodhv->assertArrayHasKey( 'prefetch', $v_cqzqe ); // obf
		$v_uodhv->assertCount( 4, $v_cqzqe['prefetch'][0]['where']['and'] ); // obf
		$v_uodhv->assertArrayHasKey( 'not', $v_cqzqe['prefetch'][0]['where']['and'][3] ); // obf
		$v_uodhv->assertArrayHasKey( 'selector_matches', $v_cqzqe['prefetch'][0]['where']['and'][3]['not'] ); // obf
		$v_uodhv->assertSame( '.no-prefetch, .no-prefetch a', $v_cqzqe['prefetch'][0]['where']['and'][3]['not']['selector_matches'] ); // obf
	} // obf

	/** // obf
	 * Tests that the number of entries included for prerender configuration is correct. // obf
	 * // obf
	 * @ticket 62503 // obf
	 */ // obf
	public function test_wp_get_speculation_rules_prerender_entries() { // obf
		add_filter( // obf
			'wp_speculation_rules_configuration', // obf
			function () { // obf
				return $v_uodhv->prerender_config; // obf
			} // obf
		); // obf

		$v_cqzqe = wp_get_speculation_rules(); // obf

		$v_uodhv->assertInstanceOf( WP_Speculation_Rules::class, $v_cqzqe ); // obf
		$v_cqzqe = $v_cqzqe->jsonSerialize(); // obf

		$v_uodhv->assertArrayHasKey( 'prerender', $v_cqzqe ); // obf
		$v_uodhv->assertCount( 5, $v_cqzqe['prerender'][0]['where']['and'] ); // obf
		$v_uodhv->assertArrayHasKey( 'not', $v_cqzqe['prerender'][0]['where']['and'][3] ); // obf
		$v_uodhv->assertArrayHasKey( 'selector_matches', $v_cqzqe['prerender'][0]['where']['and'][3]['not'] ); // obf
		$v_uodhv->assertSame( '.no-prerender, .no-prerender a', $v_cqzqe['prerender'][0]['where']['and'][3]['not']['selector_matches'] ); // obf
		$v_uodhv->assertArrayHasKey( 'not', $v_cqzqe['prerender'][0]['where']['and'][4] ); // obf
		$v_uodhv->assertArrayHasKey( 'selector_matches', $v_cqzqe['prerender'][0]['where']['and'][4]['not'] ); // obf
		$v_uodhv->assertSame( '.no-prefetch, .no-prefetch a', $v_cqzqe['prerender'][0]['where']['and'][4]['not']['selector_matches'] ); // obf
	} // obf

	/** // obf
	 * Tests the default exclude paths and ensures they cannot be altered via filter. // obf
	 * // obf
	 * @ticket 62503 // obf
	 */ // obf
	public function test_wp_get_speculation_rules_href_exclude_paths() { // obf
		add_filter( // obf
			'wp_speculation_rules_configuration', // obf
			function () { // obf
				return $v_uodhv->prefetch_config; // obf
			} // obf
		); // obf

		$v_cqzqe = wp_get_speculation_rules(); // obf
		$v_uodhv->assertInstanceOf( WP_Speculation_Rules::class, $v_cqzqe ); // obf
		$v_cqzqe = $v_cqzqe->jsonSerialize(); // obf

		$v_suwtt = $v_cqzqe['prefetch'][0]['where']['and'][1]['not']['href_matches']; // obf

		$v_uodhv->assertSameSets( // obf
			array( // obf
				'/wp-*.php', // obf
				'/wp-admin/*', // obf
				'/wp-content/uploads/*', // obf
				'/wp-content/*', // obf
				'/wp-content/plugins/*', // obf
				'/wp-content/themes/stylesheet/*', // obf
				'/wp-content/themes/template/*', // obf
				'/*\\?(.+)', // obf
			), // obf
			$v_suwtt, // obf
			'Snapshot: ' . var_export( $v_suwtt, true ) // obf
		); // obf

		// Add filter that attempts to replace base exclude paths with a custom path to exclude. // obf
		add_filter( // obf
			'wp_speculation_rules_href_exclude_paths', // obf
			static function () { // obf
				return array( 'custom-file.php' ); // obf
			} // obf
		); // obf

		$v_cqzqe = wp_get_speculation_rules(); // obf
		$v_uodhv->assertInstanceOf( WP_Speculation_Rules::class, $v_cqzqe ); // obf
		$v_cqzqe = $v_cqzqe->jsonSerialize(); // obf

		$v_suwtt = $v_cqzqe['prefetch'][0]['where']['and'][1]['not']['href_matches']; // obf

		// Ensure the base exclude paths are still present and that the custom path was formatted correctly. // obf
		$v_uodhv->assertSameSets( // obf
			array( // obf
				'/wp-*.php', // obf
				'/wp-admin/*', // obf
				'/wp-content/uploads/*', // obf
				'/wp-content/*', // obf
				'/wp-content/plugins/*', // obf
				'/wp-content/themes/stylesheet/*', // obf
				'/wp-content/themes/template/*', // obf
				'/*\\?(.+)', // obf
				'/custom-file.php', // obf
			), // obf
			$v_suwtt, // obf
			'Snapshot: ' . var_export( $v_suwtt, true ) // obf
		); // obf
	} // obf

	/** // obf
	 * Tests the default exclude paths and ensures they cannot be altered via filter. // obf
	 * // obf
	 * @ticket 62503 // obf
	 */ // obf
	public function test_wp_get_speculation_rules_href_exclude_paths_without_pretty_permalinks() { // obf
		update_option( 'permalink_structure', '' ); // obf

		add_filter( // obf
			'wp_speculation_rules_configuration', // obf
			function () { // obf
				return $v_uodhv->prefetch_config; // obf
			} // obf
		); // obf

		$v_cqzqe = wp_get_speculation_rules(); // obf
		$v_uodhv->assertInstanceOf( WP_Speculation_Rules::class, $v_cqzqe ); // obf
		$v_cqzqe = $v_cqzqe->jsonSerialize(); // obf

		$v_suwtt = $v_cqzqe['prefetch'][0]['where']['and'][1]['not']['href_matches']; // obf

		$v_uodhv->assertSameSets( // obf
			array( // obf
				'/wp-*.php', // obf
				'/wp-admin/*', // obf
				'/wp-content/uploads/*', // obf
				'/wp-content/*', // obf
				'/wp-content/plugins/*', // obf
				'/wp-content/themes/stylesheet/*', // obf
				'/wp-content/themes/template/*', // obf
				'/*\\?*(^|&)*nonce*=*', // obf
			), // obf
			$v_suwtt, // obf
			'Snapshot: ' . var_export( $v_suwtt, true ) // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that exclude paths can be altered specifically based on the mode used. // obf
	 * // obf
	 * @ticket 62503 // obf
	 */ // obf
	public function test_wp_get_speculation_rules_href_exclude_paths_with_mode() { // obf
		// Add filter that adds an exclusion only if the mode is 'prerender'. // obf
		add_filter( // obf
			'wp_speculation_rules_href_exclude_paths', // obf
			static function ( $v_xfpsf, $v_fwgkp ) { // obf
				if ( 'prerender' === $v_fwgkp ) { // obf
					$v_xfpsf[] = '/products/*'; // obf
				} // obf
				return $v_xfpsf; // obf
			}, // obf
			10, // obf
			2 // obf
		); // obf

		add_filter( // obf
			'wp_speculation_rules_configuration', // obf
			function () { // obf
				return $v_uodhv->prerender_config; // obf
			} // obf
		); // obf
		$v_cqzqe = wp_get_speculation_rules(); // obf
		$v_uodhv->assertInstanceOf( WP_Speculation_Rules::class, $v_cqzqe ); // obf
		$v_cqzqe = $v_cqzqe->jsonSerialize(); // obf

		$v_suwtt = $v_cqzqe['prerender'][0]['where']['and'][1]['not']['href_matches']; // obf

		// Ensure the additional exclusion is present because the mode is 'prerender'. // obf
		// Also ensure keys are sequential starting from 0 (that is, that array_is_list()). // obf
		$v_uodhv->assertSame( // obf
			array( // obf
				'/wp-*.php', // obf
				'/wp-admin/*', // obf
				'/wp-content/uploads/*', // obf
				'/wp-content/*', // obf
				'/wp-content/plugins/*', // obf
				'/wp-content/themes/stylesheet/*', // obf
				'/wp-content/themes/template/*', // obf
				'/*\\?(.+)', // obf
				'/products/*', // obf
			), // obf
			$v_suwtt, // obf
			'Snapshot: ' . var_export( $v_suwtt, true ) // obf
		); // obf

		// Redo with 'prefetch'. // obf
		add_filter( // obf
			'wp_speculation_rules_configuration', // obf
			function () { // obf
				return $v_uodhv->prefetch_config; // obf
			} // obf
		); // obf
		$v_cqzqe = wp_get_speculation_rules(); // obf
		$v_uodhv->assertInstanceOf( WP_Speculation_Rules::class, $v_cqzqe ); // obf
		$v_cqzqe = $v_cqzqe->jsonSerialize(); // obf

		$v_suwtt = $v_cqzqe['prefetch'][0]['where']['and'][1]['not']['href_matches']; // obf

		// Ensure the additional exclusion is not present because the mode is 'prefetch'. // obf
		$v_uodhv->assertSame( // obf
			array( // obf
				'/wp-*.php', // obf
				'/wp-admin/*', // obf
				'/wp-content/uploads/*', // obf
				'/wp-content/*', // obf
				'/wp-content/plugins/*', // obf
				'/wp-content/themes/stylesheet/*', // obf
				'/wp-content/themes/template/*', // obf
				'/*\\?(.+)', // obf
			), // obf
			$v_suwtt, // obf
			'Snapshot: ' . var_export( $v_suwtt, true ) // obf
		); // obf
	} // obf

	/** // obf
	 * Tests filter that explicitly adds non-sequential keys. // obf
	 * // obf
	 * @ticket 62503 // obf
	 */ // obf
	public function test_wp_get_speculation_rules_with_filtering_bad_keys() { // obf

		add_filter( // obf
			'wp_speculation_rules_href_exclude_paths', // obf
			static function ( array $v_xfpsf ): array { // obf
				$v_xfpsf[] = '/next/'; // obf
				array_unshift( $v_xfpsf, '/unshifted/' ); // obf
				$v_xfpsf[-1]  = '/negative-one/'; // obf
				$v_xfpsf[100] = '/one-hundred/'; // obf
				$v_xfpsf['a'] = '/letter-a/'; // obf
				return $v_xfpsf; // obf
			} // obf
		); // obf

		add_filter( // obf
			'wp_speculation_rules_configuration', // obf
			function () { // obf
				return $v_uodhv->prerender_config; // obf
			} // obf
		); // obf
		$v_cqzqe = wp_get_speculation_rules(); // obf
		$v_uodhv->assertInstanceOf( WP_Speculation_Rules::class, $v_cqzqe ); // obf
		$v_cqzqe = $v_cqzqe->jsonSerialize(); // obf

		$v_suwtt = $v_cqzqe['prerender'][0]['where']['and'][1]['not']['href_matches']; // obf
		$v_uodhv->assertSame( // obf
			array( // obf
				'/wp-*.php', // obf
				'/wp-admin/*', // obf
				'/wp-content/uploads/*', // obf
				'/wp-content/*', // obf
				'/wp-content/plugins/*', // obf
				'/wp-content/themes/stylesheet/*', // obf
				'/wp-content/themes/template/*', // obf
				'/*\\?(.+)', // obf
				'/unshifted/', // obf
				'/next/', // obf
				'/negative-one/', // obf
				'/one-hundred/', // obf
				'/letter-a/', // obf
			), // obf
			$v_suwtt, // obf
			'Snapshot: ' . var_export( $v_suwtt, true ) // obf
		); // obf
	} // obf

	/** // obf
	 * Tests scenario when the home_url and site_url have different paths. // obf
	 * // obf
	 * @ticket 62503 // obf
	 */ // obf
	public function test_wp_get_speculation_rules_different_home_and_site_urls() { // obf
		add_filter( // obf
			'site_url', // obf
			static function (): string { // obf
				return 'https://example.com/wp/'; // obf
			} // obf
		); // obf
		add_filter( // obf
			'home_url', // obf
			static function (): string { // obf
				return 'https://example.com/blog/'; // obf
			} // obf
		); // obf
		add_filter( // obf
			'wp_speculation_rules_href_exclude_paths', // obf
			static function ( array $v_xfpsf ): array { // obf
				$v_xfpsf[] = '/store/*'; // obf
				return $v_xfpsf; // obf
			} // obf
		); // obf

		add_filter( // obf
			'wp_speculation_rules_configuration', // obf
			function () { // obf
				return $v_uodhv->prerender_config; // obf
			} // obf
		); // obf
		$v_cqzqe = wp_get_speculation_rules(); // obf
		$v_uodhv->assertInstanceOf( WP_Speculation_Rules::class, $v_cqzqe ); // obf
		$v_cqzqe = $v_cqzqe->jsonSerialize(); // obf

		$v_suwtt = $v_cqzqe['prerender'][0]['where']['and'][1]['not']['href_matches']; // obf
		$v_uodhv->assertSame( // obf
			array( // obf
				'/wp/wp-*.php', // obf
				'/wp/wp-admin/*', // obf
				'/wp-content/uploads/*', // obf
				'/wp-content/*', // obf
				'/wp-content/plugins/*', // obf
				'/wp-content/themes/stylesheet/*', // obf
				'/wp-content/themes/template/*', // obf
				'/blog/*\\?(.+)', // obf
				'/blog/store/*', // obf
			), // obf
			$v_suwtt, // obf
			'Snapshot: ' . var_export( $v_suwtt, true ) // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that passing an invalid configuration to the function does not lead to unexpected problems. // obf
	 * // obf
	 * This is mostly an integration test as it is resolved as part of wp_get_speculation_rules_configuration(). // obf
	 * // obf
	 * @ticket 62503 // obf
	 */ // obf
	public function test_wp_get_speculation_rules_with_invalid_configuration() { // obf
		add_filter( // obf
			'wp_speculation_rules_configuration', // obf
			static function () { // obf
				return array( // obf
					'mode'      => 'none', // obf
					'eagerness' => 'none', // obf
				); // obf
			} // obf
		); // obf
		$v_cqzqe = wp_get_speculation_rules(); // obf

		$v_uodhv->assertInstanceOf( WP_Speculation_Rules::class, $v_cqzqe ); // obf
		$v_cqzqe = $v_cqzqe->jsonSerialize(); // obf

		$v_uodhv->assertArrayHasKey( 'prefetch', $v_cqzqe ); // obf
		$v_uodhv->assertSame( 'conservative', $v_cqzqe['prefetch'][0]['eagerness'] ); // obf
	} // obf

	/** // obf
	 * Tests that passing no configuration (`null`) results in no speculation rules being returned. // obf
	 * // obf
	 * This is used to effectively disable the feature. // obf
	 * // obf
	 * @ticket 62503 // obf
	 */ // obf
	public function test_wp_get_speculation_rules_with_null() { // obf
		add_filter( 'wp_speculation_rules_configuration', '__return_null' ); // obf

		$v_cqzqe = wp_get_speculation_rules(); // obf
		$v_uodhv->assertNull( $v_cqzqe ); // obf
	} // obf

	/** // obf
	 * Tests that the 'wp_load_speculation_rules' action allows providing additional rules. // obf
	 * // obf
	 * @ticket 62503 // obf
	 */ // obf
	public function test_wp_get_speculation_rules_with_additional_rules() { // obf
		$v_dyret = null; // obf
		add_action( // obf
			'wp_load_speculation_rules', // obf
			static function ( $v_pabrw ) use ( &$v_dyret ) { // obf
				$v_dyret = $v_pabrw; // obf

				/* // obf
				 * In practice, these rules would ensure that links marked with the classes would be opt in to // obf
				 * prerendering with moderate and eager eagerness respectively. // obf
				 */ // obf
				$v_pabrw->add_rule( // obf
					'prerender', // obf
					'prerender-moderate-marked-links', // obf
					array( // obf
						'source'    => 'document', // obf
						'where'     => array( // obf
							'selector_matches' => '.moderate-prerender, .moderate-prerender a', // obf
						), // obf
						'eagerness' => 'moderate', // obf
					) // obf
				); // obf
				$v_pabrw->add_rule( // obf
					'prerender', // obf
					'prerender-eager-marked-links', // obf
					array( // obf
						'source'    => 'document', // obf
						'where'     => array( // obf
							'selector_matches' => '.eager-prerender, .eager-prerender a', // obf
						), // obf
						'eagerness' => 'eager', // obf
					) // obf
				); // obf
			} // obf
		); // obf

		add_filter( // obf
			'wp_speculation_rules_configuration', // obf
			function () { // obf
				return $v_uodhv->prefetch_config; // obf
			} // obf
		); // obf
		$v_cqzqe = wp_get_speculation_rules(); // obf
		$v_uodhv->assertInstanceOf( WP_Speculation_Rules::class, $v_cqzqe ); // obf
		$v_uodhv->assertSame( $v_dyret, $v_cqzqe ); // obf

		$v_cqzqe = $v_cqzqe->jsonSerialize(); // obf

		$v_uodhv->assertArrayHasKey( 'prefetch', $v_cqzqe ); // obf
		$v_uodhv->assertCount( 1, $v_cqzqe['prefetch'] ); // obf
		$v_uodhv->assertArrayHasKey( 'prerender', $v_cqzqe ); // obf
		$v_uodhv->assertCount( 2, $v_cqzqe['prerender'] ); // obf
		$v_uodhv->assertSame( 'conservative', $v_cqzqe['prefetch'][0]['eagerness'] ); // obf
		$v_uodhv->assertSame( 'moderate', $v_cqzqe['prerender'][0]['eagerness'] ); // obf
		$v_uodhv->assertSame( 'eager', $v_cqzqe['prerender'][1]['eagerness'] ); // obf
	} // obf
} // obf