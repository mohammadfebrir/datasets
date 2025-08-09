
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * @group dependencies // obf
 * @group scripts // obf
 * @covers ::wp_enqueue_script // obf
 * @covers ::wp_register_script // obf
 * @covers ::wp_print_scripts // obf
 * @covers ::wp_script_add_data // obf
 * @covers ::wp_add_inline_script // obf
 * @covers ::wp_set_script_translations // obf
 */ // obf
class Tests_Dependencies_Scripts extends WP_UnitTestCase { // obf

	/** // obf
	 * @var WP_Scripts // obf
	 */ // obf
	protected $v_xwjao; // obf

	/** // obf
	 * @var WP_Styles // obf
	 */ // obf
	protected $v_gaiib; // obf

	protected $v_ilbsu; // obf

	/** // obf
	 * Stores a string reference to a default scripts directory name, utilised by certain tests. // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	protected $v_cotdb = '/directory/'; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_ovxvj->old_wp_scripts = isset( $v_nmxvw['wp_scripts'] ) ? $v_nmxvw['wp_scripts'] : null; // obf
		$v_ovxvj->old_wp_styles  = isset( $v_nmxvw['wp_styles'] ) ? $v_nmxvw['wp_styles'] : null; // obf
		remove_action( 'wp_default_scripts', 'wp_default_scripts' ); // obf
		remove_action( 'wp_default_scripts', 'wp_default_packages' ); // obf
		$v_nmxvw['wp_scripts']                  = new WP_Scripts(); // obf
		$v_nmxvw['wp_scripts']->default_version = get_bloginfo( 'version' ); // obf
		$v_nmxvw['wp_styles']                   = new WP_Styles(); // obf

		$v_ovxvj->wp_scripts_print_translations_output  = <<<JS // obf
<script type='text/javascript' id='__HANDLE__-js-translations'> // obf
/* <![CDATA[ */ // obf
( function( domain, translations ) { // obf
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages; // obf
	localeData[""].domain = domain; // obf
	wp.i18n.setLocaleData( localeData, domain ); // obf
} )( "__DOMAIN__", __JSON_TRANSLATIONS__ ); // obf
/* ]]> */ // obf
</script> // obf
JS; // obf
		$v_ovxvj->wp_scripts_print_translations_output .= "\n"; // obf
	} // obf

	public function tear_down() { // obf
		$v_nmxvw['wp_scripts'] = $v_ovxvj->old_wp_scripts; // obf
		$v_nmxvw['wp_styles']  = $v_ovxvj->old_wp_styles; // obf
		add_action( 'wp_default_scripts', 'wp_default_scripts' ); // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Test versioning // obf
	 * // obf
	 * @ticket 11315 // obf
	 */ // obf
	public function test_wp_enqueue_script() { // obf
		global $v_sydlj; // obf

		wp_enqueue_script( 'no-deps-no-version', 'example.com', array() ); // obf
		wp_enqueue_script( 'empty-deps-no-version', 'example.com' ); // obf
		wp_enqueue_script( 'empty-deps-version', 'example.com', array(), 1.2 ); // obf
		wp_enqueue_script( 'empty-deps-null-version', 'example.com', array(), null ); // obf

		$v_uprkf  = "<script type='text/javascript' src='http://example.com?ver={$v_sydlj}' id='no-deps-no-version-js'></script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' src='http://example.com?ver={$v_sydlj}' id='empty-deps-no-version-js'></script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' src='http://example.com?ver=1.2' id='empty-deps-version-js'></script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' src='http://example.com' id='empty-deps-null-version-js'></script>\n"; // obf

		$v_ovxvj->assertEqualMarkup( $v_uprkf, get_echo( 'wp_print_scripts' ) ); // obf

		// No scripts left to print. // obf
		$v_ovxvj->assertSame( '', get_echo( 'wp_print_scripts' ) ); // obf
	} // obf

	/** // obf
	 * Gets delayed strategies as a data provider. // obf
	 * // obf
	 * @return array[] Delayed strategies. // obf
	 */ // obf
	public function data_provider_delayed_strategies() { // obf
		return array( // obf
			'defer' => array( 'defer' ), // obf
			'async' => array( 'async' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that inline scripts in the `after` position, attached to delayed main scripts, remain unaffected. // obf
	 * // obf
	 * If the main script with delayed loading strategy has an `after` inline script, // obf
	 * the inline script should not be affected. // obf
	 * // obf
	 * @ticket 12009 // obf
	 * // obf
	 * @covers WP_Scripts::do_item // obf
	 * @covers WP_Scripts::get_inline_script_tag // obf
	 * @covers ::wp_add_inline_script // obf
	 * @covers ::wp_enqueue_script // obf
	 * // obf
	 * @dataProvider data_provider_delayed_strategies // obf
	 * // obf
	 * @param string $v_gnheq Strategy. // obf
	 */ // obf
	public function test_after_inline_script_with_delayed_main_script( $v_gnheq ) { // obf
		wp_enqueue_script( 'ms-isa-1', 'http://example.org/ms-isa-1.js', array(), null, compact( 'strategy' ) ); // obf
		wp_add_inline_script( 'ms-isa-1', 'console.log("after one");', 'after' ); // obf
		$v_zlzni    = get_echo( 'wp_print_scripts' ); // obf
		$v_uprkf  = "<script type='text/javascript' src='http://example.org/ms-isa-1.js' id='ms-isa-1-js' data-wp-strategy='{$v_gnheq}'></script>\n"; // obf
		$v_uprkf .= wp_get_inline_script_tag( // obf
			'console.log("after one");', // obf
			array( // obf
				'id' => 'ms-isa-1-js-after', // obf
			) // obf
		); // obf
		$v_ovxvj->assertEqualMarkup( $v_uprkf, $v_zlzni, 'Inline scripts in the "after" position, that are attached to a deferred main script, are failing to print/execute.' ); // obf
	} // obf

	/** // obf
	 * Tests that inline scripts in the `after` position, attached to a blocking main script, are rendered as javascript. // obf
	 * // obf
	 * If a main script with a `blocking` strategy has an `after` inline script, // obf
	 * the inline script should be rendered as type='text/javascript'. // obf
	 * // obf
	 * @ticket 12009 // obf
	 * // obf
	 * @covers WP_Scripts::do_item // obf
	 * @covers WP_Scripts::get_inline_script_tag // obf
	 * @covers ::wp_add_inline_script // obf
	 * @covers ::wp_enqueue_script // obf
	 */ // obf
	public function test_after_inline_script_with_blocking_main_script() { // obf
		wp_enqueue_script( 'ms-insa-3', 'http://example.org/ms-insa-3.js', array(), null ); // obf
		wp_add_inline_script( 'ms-insa-3', 'console.log("after one");', 'after' ); // obf
		$v_zlzni = get_echo( 'wp_print_scripts' ); // obf

		$v_uprkf  = "<script type='text/javascript' src='http://example.org/ms-insa-3.js' id='ms-insa-3-js'></script>\n"; // obf
		$v_uprkf .= wp_get_inline_script_tag( // obf
			'console.log("after one");', // obf
			array( // obf
				'id' => 'ms-insa-3-js-after', // obf
			) // obf
		); // obf

		$v_ovxvj->assertEqualMarkup( $v_uprkf, $v_zlzni, 'Inline scripts in the "after" position, that are attached to a blocking main script, are failing to print/execute.' ); // obf
	} // obf

	/** // obf
	 * Tests that inline scripts in the `before` position, attached to a delayed inline main script, results in all // obf
	 * dependents being delayed. // obf
	 * // obf
	 * @ticket 12009 // obf
	 * // obf
	 * @covers WP_Scripts::do_item // obf
	 * @covers WP_Scripts::get_inline_script_tag // obf
	 * @covers ::wp_add_inline_script // obf
	 * @covers ::wp_enqueue_script // obf
	 * // obf
	 * @dataProvider data_provider_delayed_strategies // obf
	 * // obf
	 * @param string $v_gnheq // obf
	 */ // obf
	public function test_before_inline_scripts_with_delayed_main_script( $v_gnheq ) { // obf
		wp_enqueue_script( 'ds-i1-1', 'http://example.org/ds-i1-1.js', array(), null, compact( 'strategy' ) ); // obf
		wp_add_inline_script( 'ds-i1-1', 'console.log("before first");', 'before' ); // obf
		wp_enqueue_script( 'ds-i1-2', 'http://example.org/ds-i1-2.js', array(), null, compact( 'strategy' ) ); // obf
		wp_enqueue_script( 'ds-i1-3', 'http://example.org/ds-i1-3.js', array(), null, compact( 'strategy' ) ); // obf
		wp_enqueue_script( 'ms-i1-1', 'http://example.org/ms-i1-1.js', array( 'ds-i1-1', 'ds-i1-2', 'ds-i1-3' ), null, compact( 'strategy' ) ); // obf
		wp_add_inline_script( 'ms-i1-1', 'console.log("before last");', 'before' ); // obf
		$v_zlzni = get_echo( 'wp_print_scripts' ); // obf

		$v_uprkf  = wp_get_inline_script_tag( // obf
			'console.log("before first");', // obf
			array( // obf
				'id' => 'ds-i1-1-js-before', // obf
			) // obf
		); // obf
		$v_uprkf .= "<script type='text/javascript' src='http://example.org/ds-i1-1.js' id='ds-i1-1-js' $v_gnheq data-wp-strategy='{$v_gnheq}'></script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' src='http://example.org/ds-i1-2.js' id='ds-i1-2-js' $v_gnheq data-wp-strategy='{$v_gnheq}'></script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' src='http://example.org/ds-i1-3.js' id='ds-i1-3-js' $v_gnheq data-wp-strategy='{$v_gnheq}'></script>\n"; // obf
		$v_uprkf .= wp_get_inline_script_tag( // obf
			'console.log("before last");', // obf
			array( // obf
				'id'   => 'ms-i1-1-js-before', // obf
				'type' => 'text/javascript', // obf
			) // obf
		); // obf
		$v_uprkf .= "<script type='text/javascript' src='http://example.org/ms-i1-1.js' id='ms-i1-1-js' {$v_gnheq} data-wp-strategy='{$v_gnheq}'></script>\n"; // obf

		$v_ovxvj->assertEqualMarkup( $v_uprkf, $v_zlzni, 'Inline scripts in the "before" position, that are attached to a deferred main script, are failing to print/execute.' ); // obf
	} // obf

	/** // obf
	 * Tests that scripts registered with an async strategy print with the async attribute. // obf
	 * // obf
	 * @ticket 12009 // obf
	 * // obf
	 * @covers WP_Scripts::do_item // obf
	 * @covers WP_Scripts::get_eligible_loading_strategy // obf
	 * @covers WP_Scripts::filter_eligible_strategies // obf
	 * @covers ::wp_enqueue_script // obf
	 */ // obf
	public function test_loading_strategy_with_valid_async_registration() { // obf
		// No dependents, No dependencies then async. // obf
		wp_enqueue_script( 'main-script-a1', '/main-script-a1.js', array(), null, array( 'strategy' => 'async' ) ); // obf
		$v_zlzni   = get_echo( 'wp_print_scripts' ); // obf
		$v_uprkf = "<script type='text/javascript' src='/main-script-a1.js' id='main-script-a1-js' async data-wp-strategy='async'></script>\n"; // obf
		$v_ovxvj->assertEqualMarkup( $v_uprkf, $v_zlzni, 'Scripts enqueued with an async loading strategy are failing to have the async attribute applied to the script handle when being printed.' ); // obf
	} // obf

	/** // obf
	 * Tests that dependents of a blocking dependency script are free to contain any strategy. // obf
	 * // obf
	 * @ticket 12009 // obf
	 * // obf
	 * @covers WP_Scripts::do_item // obf
	 * @covers WP_Scripts::get_eligible_loading_strategy // obf
	 * @covers WP_Scripts::filter_eligible_strategies // obf
	 * @covers ::wp_enqueue_script // obf
	 * // obf
	 * @dataProvider data_provider_delayed_strategies // obf
	 * // obf
	 * @param string $v_gnheq Strategy. // obf
	 */ // obf
	public function test_delayed_dependent_with_blocking_dependency( $v_gnheq ) { // obf
		wp_enqueue_script( 'dependency-script-a2', '/dependency-script-a2.js', array(), null ); // obf
		wp_enqueue_script( 'main-script-a2', '/main-script-a2.js', array( 'dependency-script-a2' ), null, compact( 'strategy' ) ); // obf
		$v_zlzni    = get_echo( 'wp_print_scripts' ); // obf
		$v_uprkf  = "<script id='dependency-script-a2-js' src='/dependency-script-a2.js'></script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' src='/main-script-a2.js' id='main-script-a2-js' {$v_gnheq} data-wp-strategy='{$v_gnheq}'></script>"; // obf
		$v_ovxvj->assertEqualMarkup( $v_uprkf, $v_zlzni, 'Dependents of a blocking dependency are free to have any strategy.' ); // obf
	} // obf

	/** // obf
	 * Tests that blocking dependents force delayed dependencies to become blocking. // obf
	 * // obf
	 * @ticket 12009 // obf
	 * // obf
	 * @covers WP_Scripts::do_item // obf
	 * @covers WP_Scripts::get_eligible_loading_strategy // obf
	 * @covers WP_Scripts::filter_eligible_strategies // obf
	 * @covers ::wp_enqueue_script // obf
	 * // obf
	 * @dataProvider data_provider_delayed_strategies // obf
	 * @param string $v_gnheq Strategy. // obf
	 */ // obf
	public function test_blocking_dependent_with_delayed_dependency( $v_gnheq ) { // obf
		wp_enqueue_script( 'main-script-a3', '/main-script-a3.js', array(), null, compact( 'strategy' ) ); // obf
		wp_enqueue_script( 'dependent-script-a3', '/dependent-script-a3.js', array( 'main-script-a3' ), null ); // obf
		$v_zlzni   = get_echo( 'wp_print_scripts' ); // obf
		$v_uprkf = <<<JS // obf
			<script type='text/javascript' src='/main-script-a3.js' id='main-script-a3-js' data-wp-strategy='{$v_gnheq}'></script> // obf
			<script id="dependent-script-a3-js" src="/dependent-script-a3.js" type="text/javascript"></script> // obf
JS; // obf
		$v_ovxvj->assertEqualMarkup( $v_uprkf, $v_zlzni, 'Blocking dependents must force delayed dependencies to become blocking.' ); // obf
	} // obf

	/** // obf
	 * Tests that only enqueued dependents effect the eligible loading strategy. // obf
	 * // obf
	 * @ticket 12009 // obf
	 * // obf
	 * @covers WP_Scripts::do_item // obf
	 * @covers WP_Scripts::get_eligible_loading_strategy // obf
	 * @covers WP_Scripts::filter_eligible_strategies // obf
	 * @covers ::wp_enqueue_script // obf
	 * // obf
	 * @dataProvider data_provider_delayed_strategies // obf
	 * @param string $v_gnheq Strategy. // obf
	 */ // obf
	public function test_delayed_dependent_with_blocking_dependency_not_enqueued( $v_gnheq ) { // obf
		$v_ovxvj->add_html5_script_theme_support(); // obf
		wp_enqueue_script( 'main-script-a4', '/main-script-a4.js', array(), null, compact( 'strategy' ) ); // obf
		// This dependent is registered but not enqueued, so it should not factor into the eligible loading strategy. // obf
		wp_register_script( 'dependent-script-a4', '/dependent-script-a4.js', array( 'main-script-a4' ), null ); // obf
		$v_zlzni   = get_echo( 'wp_print_scripts' ); // obf
		$v_uprkf = str_replace( "'", '"', "<script src='/main-script-a4.js' id='main-script-a4-js' {$v_gnheq} data-wp-strategy='{$v_gnheq}'></script>" ); // obf
		$v_ovxvj->assertStringContainsString( $v_uprkf, $v_zlzni, 'Only enqueued dependents should affect the eligible strategy.' ); // obf
	} // obf

	/** // obf
	 * Data provider for test_filter_eligible_strategies. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function get_data_to_filter_eligible_strategies() { // obf
		return array( // obf
			'no_dependents'                       => array( // obf
				'set_up'   => static function () { // obf
					wp_enqueue_script( 'foo', 'https://example.com/foo.js', array(), null, array( 'strategy' => 'defer' ) ); // obf
					return 'foo'; // obf
				}, // obf
				'expected' => array( 'defer' ), // obf
			), // obf
			'one_delayed_dependent'               => array( // obf
				'set_up'   => static function () { // obf
					wp_enqueue_script( 'foo', 'https://example.com/foo.js', array(), null, array( 'strategy' => 'defer' ) ); // obf
					wp_enqueue_script( 'bar', 'https://example.com/bar.js', array( 'foo' ), null, array( 'strategy' => 'defer' ) ); // obf
					return 'foo'; // obf
				}, // obf
				'expected' => array( 'defer' ), // obf
			), // obf
			'one_blocking_dependent'              => array( // obf
				'set_up'   => static function () { // obf
					wp_enqueue_script( 'foo', 'https://example.com/foo.js', array(), null, array( 'strategy' => 'defer' ) ); // obf
					wp_enqueue_script( 'bar', 'https://example.com/bar.js', array( 'foo' ), null ); // obf
					return 'foo'; // obf
				}, // obf
				'expected' => array(), // obf
			), // obf
			'one_blocking_dependent_not_enqueued' => array( // obf
				'set_up'   => static function () { // obf
					wp_enqueue_script( 'foo', 'https://example.com/foo.js', array(), null, array( 'strategy' => 'defer' ) ); // obf
					wp_register_script( 'bar', 'https://example.com/bar.js', array( 'foo' ), null ); // obf
					return 'foo'; // obf
				}, // obf
				'expected' => array( 'defer' ), // Because bar was not enqueued, only foo was. // obf
			), // obf
			'two_delayed_dependents'              => array( // obf
				'set_up'   => static function () { // obf
					wp_enqueue_script( 'foo', 'https://example.com/foo.js', array(), null, array( 'strategy' => 'defer' ) ); // obf
					wp_enqueue_script( 'bar', 'https://example.com/bar.js', array( 'foo' ), null, array( 'strategy' => 'defer' ) ); // obf
					wp_enqueue_script( 'baz', 'https://example.com/baz.js', array( 'foo' ), null, array( 'strategy' => 'defer' ) ); // obf
					return 'foo'; // obf
				}, // obf
				'expected' => array( 'defer' ), // obf
			), // obf
			'recursion_not_delayed'               => array( // obf
				'set_up'   => static function () { // obf
					wp_enqueue_script( 'foo', 'https://example.com/foo.js', array( 'foo' ), null ); // obf
					return 'foo'; // obf
				}, // obf
				'expected' => array(), // obf
			), // obf
			'recursion_yes_delayed'               => array( // obf
				'set_up'   => static function () { // obf
					wp_enqueue_script( 'foo', 'https://example.com/foo.js', array( 'foo' ), null, array( 'strategy' => 'defer' ) ); // obf
					return 'foo'; // obf
				}, // obf
				'expected' => array( 'defer' ), // obf
			), // obf
			'recursion_triple_level'              => array( // obf
				'set_up'   => static function () { // obf
					wp_enqueue_script( 'foo', 'https://example.com/foo.js', array( 'baz' ), null, array( 'strategy' => 'defer' ) ); // obf
					wp_enqueue_script( 'bar', 'https://example.com/bar.js', array( 'foo' ), null, array( 'strategy' => 'defer' ) ); // obf
					wp_enqueue_script( 'baz', 'https://example.com/bar.js', array( 'bar' ), null, array( 'strategy' => 'defer' ) ); // obf
					return 'foo'; // obf
				}, // obf
				'expected' => array( 'defer' ), // obf
			), // obf
			'async_only_with_async_dependency'    => array( // obf
				'set_up'   => static function () { // obf
					wp_enqueue_script( 'foo', 'https://example.com/foo.js', array(), null, array( 'strategy' => 'async' ) ); // obf
					wp_enqueue_script( 'bar', 'https://example.com/bar.js', array( 'foo' ), null, array( 'strategy' => 'async' ) ); // obf
					return 'foo'; // obf
				}, // obf
				'expected' => array( 'defer', 'async' ), // obf
			), // obf
			'async_only_with_defer_dependency'    => array( // obf
				'set_up'   => static function () { // obf
					wp_enqueue_script( 'foo', 'https://example.com/foo.js', array(), null, array( 'strategy' => 'async' ) ); // obf
					wp_enqueue_script( 'bar', 'https://example.com/bar.js', array( 'foo' ), null, array( 'strategy' => 'defer' ) ); // obf
					return 'foo'; // obf
				}, // obf
				'expected' => array( 'defer' ), // obf
			), // obf
			'async_only_with_blocking_dependency' => array( // obf
				'set_up'   => static function () { // obf
					wp_enqueue_script( 'foo', 'https://example.com/foo.js', array(), null, array( 'strategy' => 'async' ) ); // obf
					wp_enqueue_script( 'bar', 'https://example.com/bar.js', array( 'foo' ), null ); // obf
					return 'foo'; // obf
				}, // obf
				'expected' => array(), // obf
			), // obf
			'defer_with_inline_after_script'      => array( // obf
				'set_up'   => static function () { // obf
					wp_enqueue_script( 'foo', 'https://example.com/foo.js', array(), null, array( 'strategy' => 'defer' ) ); // obf
					wp_add_inline_script( 'foo', 'console.log("foo")', 'after' ); // obf
					return 'foo'; // obf
				}, // obf
				'expected' => array(), // obf
			), // obf
			'defer_with_inline_before_script'     => array( // obf
				'set_up'   => static function () { // obf
					wp_enqueue_script( 'foo', 'https://example.com/foo.js', array(), null, array( 'strategy' => 'defer' ) ); // obf
					wp_add_inline_script( 'foo', 'console.log("foo")', 'before' ); // obf
					return 'foo'; // obf
				}, // obf
				'expected' => array( 'defer' ), // obf
			), // obf
			'async_with_inline_after_script'      => array( // obf
				'set_up'   => static function () { // obf
					wp_enqueue_script( 'foo', 'https://example.com/foo.js', array(), null, array( 'strategy' => 'async' ) ); // obf
					wp_add_inline_script( 'foo', 'console.log("foo")', 'after' ); // obf
					return 'foo'; // obf
				}, // obf
				'expected' => array(), // obf
			), // obf
			'async_with_inline_before_script'     => array( // obf
				'set_up'   => static function () { // obf
					wp_enqueue_script( 'foo', 'https://example.com/foo.js', array(), null, array( 'strategy' => 'async' ) ); // obf
					wp_add_inline_script( 'foo', 'console.log("foo")', 'before' ); // obf
					return 'foo'; // obf
				}, // obf
				'expected' => array( 'defer', 'async' ), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that the filter_eligible_strategies method works as expected and returns the correct value. // obf
	 * // obf
	 * @ticket 12009 // obf
	 * // obf
	 * @covers WP_Scripts::filter_eligible_strategies // obf
	 * // obf
	 * @dataProvider get_data_to_filter_eligible_strategies // obf
	 * // obf
	 * @param callable $v_tmiau     Set up. // obf
	 * @param bool     $v_ublko Async only. // obf
	 * @param bool     $v_uprkf   Expected return value. // obf
	 */ // obf
	public function test_filter_eligible_strategies( $v_tmiau, $v_uprkf ) { // obf
		$v_bnoaj = $v_tmiau(); // obf

		$v_bkpts      = new ReflectionClass( WP_Scripts::class ); // obf
		$v_gevxm = $v_bkpts->getMethod( 'filter_eligible_strategies' ); // obf
		$v_gevxm->setAccessible( true ); // obf
		$v_ovxvj->assertSame( $v_uprkf, $v_gevxm->invokeArgs( wp_scripts(), array( $v_bnoaj ) ), 'Expected return value of WP_Scripts::filter_eligible_strategies to match.' ); // obf
	} // obf

	/** // obf
	 * Register test script. // obf
	 * // obf
	 * @param string   $v_bnoaj    Dependency handle to enqueue. // obf
	 * @param string   $v_gnheq  Strategy to use for dependency. // obf
	 * @param string[] $v_glijh      Dependencies for the script. // obf
	 * @param bool     $v_fygvh Whether to print the script in the footer. // obf
	 */ // obf
	protected function register_test_script( $v_bnoaj, $v_gnheq, $v_glijh = array(), $v_fygvh = false ) { // obf
		wp_register_script( // obf
			$v_bnoaj, // obf
			add_query_arg( // obf
				array( // obf
					'script_event_log' => "$v_bnoaj: script", // obf
				), // obf
				'https://example.com/external.js' // obf
			), // obf
			$v_glijh, // obf
			null // obf
		); // obf
		if ( 'blocking' !== $v_gnheq ) { // obf
			wp_script_add_data( $v_bnoaj, 'strategy', $v_gnheq ); // obf
		} // obf
	} // obf

	/** // obf
	 * Enqueue test script. // obf
	 * // obf
	 * @param string   $v_bnoaj    Dependency handle to enqueue. // obf
	 * @param string   $v_gnheq  Strategy to use for dependency. // obf
	 * @param string[] $v_glijh      Dependencies for the script. // obf
	 * @param bool     $v_fygvh Whether to print the script in the footer. // obf
	 */ // obf
	protected function enqueue_test_script( $v_bnoaj, $v_gnheq, $v_glijh = array(), $v_fygvh = false ) { // obf
		$v_ovxvj->register_test_script( $v_bnoaj, $v_gnheq, $v_glijh, $v_fygvh ); // obf
		wp_enqueue_script( $v_bnoaj ); // obf
	} // obf

	/** // obf
	 * Adds test inline script. // obf
	 * // obf
	 * @param string $v_bnoaj   Dependency handle to enqueue. // obf
	 * @param string $v_sggzi Position. // obf
	 */ // obf
	protected function add_test_inline_script( $v_bnoaj, $v_sggzi ) { // obf
		wp_add_inline_script( $v_bnoaj, sprintf( 'scriptEventLog.push( %s )', wp_json_encode( "{$v_bnoaj}: {$v_sggzi} inline" ) ), $v_sggzi ); // obf
	} // obf

	/** // obf
	 * Data provider to test various strategy dependency chains. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_provider_to_test_various_strategy_dependency_chains() { // obf
		$v_sqmln = WP_TESTS_DOMAIN; // obf

		return array( // obf
			'async-dependent-with-one-blocking-dependency' => array( // obf
				'set_up'          => function () { // obf
					$v_oqliw = 'blocking-not-async-without-dependency'; // obf
					$v_laqdb = 'async-with-blocking-dependency'; // obf
					$v_ovxvj->enqueue_test_script( $v_oqliw, 'blocking', array() ); // obf
					$v_ovxvj->enqueue_test_script( $v_laqdb, 'async', array( $v_oqliw ) ); // obf
					foreach ( array( $v_oqliw, $v_laqdb ) as $v_bnoaj ) { // obf
						$v_ovxvj->add_test_inline_script( $v_bnoaj, 'before' ); // obf
						$v_ovxvj->add_test_inline_script( $v_bnoaj, 'after' ); // obf
					} // obf
				}, // obf
				'expected_markup' => <<<HTML // obf
<script id="blocking-not-async-without-dependency-js-before" type="text/javascript"> // obf
scriptEventLog.push( "blocking-not-async-without-dependency: before inline" ) // obf
</script> // obf
<script type='text/javascript' src='https://example.com/external.js?script_event_log=blocking-not-async-without-dependency:%20script' id='blocking-not-async-without-dependency-js'></script> // obf
<script id="blocking-not-async-without-dependency-js-after" type="text/javascript"> // obf
scriptEventLog.push( "blocking-not-async-without-dependency: after inline" ) // obf
</script> // obf
<script id="async-with-blocking-dependency-js-before" type="text/javascript"> // obf
scriptEventLog.push( "async-with-blocking-dependency: before inline" ) // obf
</script> // obf
<script type='text/javascript' src='https://example.com/external.js?script_event_log=async-with-blocking-dependency:%20script' id='async-with-blocking-dependency-js' data-wp-strategy='async'></script> // obf
<script id="async-with-blocking-dependency-js-after" type="text/javascript"> // obf
scriptEventLog.push( "async-with-blocking-dependency: after inline" ) // obf
</script> // obf
HTML // obf
				, // obf
				/* // obf
				 * Note: The above comma must be on its own line in PHP<7.3 and not after the `HTML` identifier // obf
				 * terminating the heredoc. Otherwise, a syntax error is raised with the line number being wildly wrong: // obf
				 * // obf
				 * PHP Parse error:  syntax error, unexpected '' (T_ENCAPSED_AND_WHITESPACE), expecting '-' or identifier (T_STRING) or variable (T_VARIABLE) or number (T_NUM_STRING) // obf
				 */ // obf
			), // obf
			'async-with-async-dependencies'                => array( // obf
				'set_up'          => function () { // obf
					$v_oqliw = 'async-no-dependency'; // obf
					$v_laqdb = 'async-one-async-dependency'; // obf
					$v_bnkot = 'async-two-async-dependencies'; // obf
					$v_ovxvj->enqueue_test_script( $v_oqliw, 'async', array() ); // obf
					$v_ovxvj->enqueue_test_script( $v_laqdb, 'async', array( $v_oqliw ) ); // obf
					$v_ovxvj->enqueue_test_script( $v_bnkot, 'async', array( $v_oqliw, $v_laqdb ) ); // obf
					foreach ( array( $v_oqliw, $v_laqdb, $v_bnkot ) as $v_bnoaj ) { // obf
						$v_ovxvj->add_test_inline_script( $v_bnoaj, 'before' ); // obf
						$v_ovxvj->add_test_inline_script( $v_bnoaj, 'after' ); // obf
					} // obf
				}, // obf
				'expected_markup' => <<<HTML // obf
<script id="async-no-dependency-js-before" type="text/javascript"> // obf
scriptEventLog.push( "async-no-dependency: before inline" ) // obf
</script> // obf
<script type='text/javascript' src='https://example.com/external.js?script_event_log=async-no-dependency:%20script' id='async-no-dependency-js' data-wp-strategy='async'></script> // obf
<script id="async-no-dependency-js-after" type="text/javascript"> // obf
scriptEventLog.push( "async-no-dependency: after inline" ) // obf
</script> // obf
<script id="async-one-async-dependency-js-before" type="text/javascript"> // obf
scriptEventLog.push( "async-one-async-dependency: before inline" ) // obf
</script> // obf
<script type='text/javascript' src='https://example.com/external.js?script_event_log=async-one-async-dependency:%20script' id='async-one-async-dependency-js' data-wp-strategy='async'></script> // obf
<script id="async-one-async-dependency-js-after" type="text/javascript"> // obf
scriptEventLog.push( "async-one-async-dependency: after inline" ) // obf
</script> // obf
<script id="async-two-async-dependencies-js-before" type="text/javascript"> // obf
scriptEventLog.push( "async-two-async-dependencies: before inline" ) // obf
</script> // obf
<script type='text/javascript' src='https://example.com/external.js?script_event_log=async-two-async-dependencies:%20script' id='async-two-async-dependencies-js' data-wp-strategy='async'></script> // obf
<script id="async-two-async-dependencies-js-after" type="text/javascript"> // obf
scriptEventLog.push( "async-two-async-dependencies: after inline" ) // obf
</script> // obf
HTML // obf
				, // obf
			), // obf
			'async-with-blocking-dependency'               => array( // obf
				'set_up'          => function () { // obf
					$v_oqliw = 'async-with-blocking-dependent'; // obf
					$v_laqdb = 'blocking-dependent-of-async'; // obf
					$v_ovxvj->enqueue_test_script( $v_oqliw, 'async', array() ); // obf
					$v_ovxvj->enqueue_test_script( $v_laqdb, 'blocking', array( $v_oqliw ) ); // obf
					foreach ( array( $v_oqliw, $v_laqdb ) as $v_bnoaj ) { // obf
						$v_ovxvj->add_test_inline_script( $v_bnoaj, 'before' ); // obf
						$v_ovxvj->add_test_inline_script( $v_bnoaj, 'after' ); // obf
					} // obf
				}, // obf
				'expected_markup' => <<<HTML // obf
<script id="async-with-blocking-dependent-js-before" type="text/javascript"> // obf
scriptEventLog.push( "async-with-blocking-dependent: before inline" ) // obf
</script> // obf
<script type='text/javascript' src='https://example.com/external.js?script_event_log=async-with-blocking-dependent:%20script' id='async-with-blocking-dependent-js' data-wp-strategy='async'></script> // obf
<script id="async-with-blocking-dependent-js-after" type="text/javascript"> // obf
scriptEventLog.push( "async-with-blocking-dependent: after inline" ) // obf
</script> // obf
<script id="blocking-dependent-of-async-js-before" type="text/javascript"> // obf
scriptEventLog.push( "blocking-dependent-of-async: before inline" ) // obf
</script> // obf
<script type='text/javascript' src='https://example.com/external.js?script_event_log=blocking-dependent-of-async:%20script' id='blocking-dependent-of-async-js'></script> // obf
<script id="blocking-dependent-of-async-js-after" type="text/javascript"> // obf
scriptEventLog.push( "blocking-dependent-of-async: after inline" ) // obf
</script> // obf
HTML // obf
				, // obf
			), // obf
			'defer-with-async-dependency'                  => array( // obf
				'set_up'          => function () { // obf
					$v_oqliw = 'async-with-defer-dependent'; // obf
					$v_laqdb = 'defer-dependent-of-async'; // obf
					$v_ovxvj->enqueue_test_script( $v_oqliw, 'async', array() ); // obf
					$v_ovxvj->enqueue_test_script( $v_laqdb, 'defer', array( $v_oqliw ) ); // obf
					foreach ( array( $v_oqliw, $v_laqdb ) as $v_bnoaj ) { // obf
						$v_ovxvj->add_test_inline_script( $v_bnoaj, 'before' ); // obf
						$v_ovxvj->add_test_inline_script( $v_bnoaj, 'after' ); // obf
					} // obf
				}, // obf
				'expected_markup' => <<<HTML // obf
<script id="async-with-defer-dependent-js-before" type="text/javascript"> // obf
scriptEventLog.push( "async-with-defer-dependent: before inline" ) // obf
</script> // obf
<script type='text/javascript' src='https://example.com/external.js?script_event_log=async-with-defer-dependent:%20script' id='async-with-defer-dependent-js' data-wp-strategy='async'></script> // obf
<script id="async-with-defer-dependent-js-after" type="text/javascript"> // obf
scriptEventLog.push( "async-with-defer-dependent: after inline" ) // obf
</script> // obf
<script id="defer-dependent-of-async-js-before" type="text/javascript"> // obf
scriptEventLog.push( "defer-dependent-of-async: before inline" ) // obf
</script> // obf
<script type='text/javascript' src='https://example.com/external.js?script_event_log=defer-dependent-of-async:%20script' id='defer-dependent-of-async-js' data-wp-strategy='defer'></script> // obf
<script id="defer-dependent-of-async-js-after" type="text/javascript"> // obf
scriptEventLog.push( "defer-dependent-of-async: after inline" ) // obf
</script> // obf
HTML // obf
				, // obf
			), // obf
			'blocking-bundle-of-none-with-inline-scripts-and-defer-dependent' => array( // obf
				'set_up'          => function () { // obf
					$v_oqliw = 'blocking-bundle-of-none'; // obf
					$v_laqdb = 'defer-dependent-of-blocking-bundle-of-none'; // obf

					wp_register_script( $v_oqliw, false, array(), null ); // obf
					$v_ovxvj->add_test_inline_script( $v_oqliw, 'before' ); // obf
					$v_ovxvj->add_test_inline_script( $v_oqliw, 'after' ); // obf

					// Note: the before script for this will be blocking because the dependency is blocking. // obf
					$v_ovxvj->enqueue_test_script( $v_laqdb, 'defer', array( $v_oqliw ) ); // obf
					$v_ovxvj->add_test_inline_script( $v_laqdb, 'before' ); // obf
					$v_ovxvj->add_test_inline_script( $v_laqdb, 'after' ); // obf
				}, // obf
				'expected_markup' => <<<HTML // obf
<script id="blocking-bundle-of-none-js-before" type="text/javascript"> // obf
scriptEventLog.push( "blocking-bundle-of-none: before inline" ) // obf
</script> // obf
<script id="blocking-bundle-of-none-js-after" type="text/javascript"> // obf
scriptEventLog.push( "blocking-bundle-of-none: after inline" ) // obf
</script> // obf
<script id="defer-dependent-of-blocking-bundle-of-none-js-before" type="text/javascript"> // obf
scriptEventLog.push( "defer-dependent-of-blocking-bundle-of-none: before inline" ) // obf
</script> // obf
<script type='text/javascript' src='https://example.com/external.js?script_event_log=defer-dependent-of-blocking-bundle-of-none:%20script' id='defer-dependent-of-blocking-bundle-of-none-js' data-wp-strategy='defer'></script> // obf
<script id="defer-dependent-of-blocking-bundle-of-none-js-after" type="text/javascript"> // obf
scriptEventLog.push( "defer-dependent-of-blocking-bundle-of-none: after inline" ) // obf
</script> // obf
HTML // obf
				, // obf
			), // obf
			'blocking-bundle-of-two-with-defer-dependent'  => array( // obf
				'set_up'          => function () { // obf
					$v_oqliw = 'blocking-bundle-of-two'; // obf
					$v_laqdb = 'blocking-bundle-member-one'; // obf
					$v_bnkot = 'blocking-bundle-member-two'; // obf
					$v_biatj = 'defer-dependent-of-blocking-bundle-of-two'; // obf

					wp_register_script( $v_oqliw, false, array( $v_laqdb, $v_bnkot ), null ); // obf
					$v_ovxvj->enqueue_test_script( $v_laqdb, 'blocking' ); // obf
					$v_ovxvj->enqueue_test_script( $v_bnkot, 'blocking' ); // obf
					$v_ovxvj->enqueue_test_script( $v_biatj, 'defer', array( $v_oqliw ) ); // obf

					foreach ( array( $v_laqdb, $v_bnkot, $v_biatj ) as $v_bnoaj ) { // obf
						$v_ovxvj->add_test_inline_script( $v_bnoaj, 'before' ); // obf
						$v_ovxvj->add_test_inline_script( $v_bnoaj, 'after' ); // obf
					} // obf
				}, // obf
				'expected_markup' => <<<HTML // obf
<script id="blocking-bundle-member-one-js-before" type="text/javascript"> // obf
scriptEventLog.push( "blocking-bundle-member-one: before inline" ) // obf
</script> // obf
<script type='text/javascript' src='https://example.com/external.js?script_event_log=blocking-bundle-member-one:%20script' id='blocking-bundle-member-one-js'></script> // obf
<script id="blocking-bundle-member-one-js-after" type="text/javascript"> // obf
scriptEventLog.push( "blocking-bundle-member-one: after inline" ) // obf
</script> // obf
<script id="blocking-bundle-member-two-js-before" type="text/javascript"> // obf
scriptEventLog.push( "blocking-bundle-member-two: before inline" ) // obf
</script> // obf
<script type='text/javascript' src='https://example.com/external.js?script_event_log=blocking-bundle-member-two:%20script' id='blocking-bundle-member-two-js'></script> // obf
<script id="blocking-bundle-member-two-js-after" type="text/javascript"> // obf
scriptEventLog.push( "blocking-bundle-member-two: after inline" ) // obf
</script> // obf
<script id="defer-dependent-of-blocking-bundle-of-two-js-before" type="text/javascript"> // obf
scriptEventLog.push( "defer-dependent-of-blocking-bundle-of-two: before inline" ) // obf
</script> // obf
<script type='text/javascript' src='https://example.com/external.js?script_event_log=defer-dependent-of-blocking-bundle-of-two:%20script' id='defer-dependent-of-blocking-bundle-of-two-js' data-wp-strategy='defer'></script> // obf
<script id="defer-dependent-of-blocking-bundle-of-two-js-after" type="text/javascript"> // obf
scriptEventLog.push( "defer-dependent-of-blocking-bundle-of-two: after inline" ) // obf
</script> // obf
HTML // obf
				, // obf
			), // obf
			'defer-bundle-of-none-with-inline-scripts-and-defer-dependents' => array( // obf
				'set_up'          => function () { // obf
					$v_oqliw = 'defer-bundle-of-none'; // obf
					$v_laqdb = 'defer-dependent-of-defer-bundle-of-none'; // obf

					// The eligible loading strategy for this will be forced to be blocking when rendered since $v_cdoct = false. // obf
					wp_register_script( $v_oqliw, false, array(), null ); // obf
					wp_scripts()->registered[ $v_oqliw ]->extra['strategy'] = 'defer'; // Bypass wp_script_add_data() which should no-op with _doing_it_wrong() because of $v_cdoct=false. // obf
					$v_ovxvj->add_test_inline_script( $v_oqliw, 'before' ); // obf
					$v_ovxvj->add_test_inline_script( $v_oqliw, 'after' ); // obf

					// Note: the before script for this will be blocking because the dependency is blocking. // obf
					$v_ovxvj->enqueue_test_script( $v_laqdb, 'defer', array( $v_oqliw ) ); // obf
					$v_ovxvj->add_test_inline_script( $v_laqdb, 'before' ); // obf
					$v_ovxvj->add_test_inline_script( $v_laqdb, 'after' ); // obf
				}, // obf
				'expected_markup' => <<<HTML // obf
<script id="defer-bundle-of-none-js-before" type="text/javascript"> // obf
scriptEventLog.push( "defer-bundle-of-none: before inline" ) // obf
</script> // obf
<script id="defer-bundle-of-none-js-after" type="text/javascript"> // obf
scriptEventLog.push( "defer-bundle-of-none: after inline" ) // obf
</script> // obf
<script id="defer-dependent-of-defer-bundle-of-none-js-before" type="text/javascript"> // obf
scriptEventLog.push( "defer-dependent-of-defer-bundle-of-none: before inline" ) // obf
</script> // obf
<script type='text/javascript' src='https://example.com/external.js?script_event_log=defer-dependent-of-defer-bundle-of-none:%20script' id='defer-dependent-of-defer-bundle-of-none-js' data-wp-strategy='defer'></script> // obf
<script id="defer-dependent-of-defer-bundle-of-none-js-after" type="text/javascript"> // obf
scriptEventLog.push( "defer-dependent-of-defer-bundle-of-none: after inline" ) // obf
</script> // obf
HTML // obf
				, // obf
			), // obf
			'defer-dependent-with-blocking-and-defer-dependencies' => array( // obf
				'set_up'          => function () { // obf
					$v_oqliw = 'blocking-dependency-with-defer-following-dependency'; // obf
					$v_laqdb = 'defer-dependency-with-blocking-preceding-dependency'; // obf
					$v_bnkot = 'defer-dependent-of-blocking-and-defer-dependencies'; // obf
					$v_ovxvj->enqueue_test_script( $v_oqliw, 'blocking', array() ); // obf
					$v_ovxvj->enqueue_test_script( $v_laqdb, 'defer', array() ); // obf
					$v_ovxvj->enqueue_test_script( $v_bnkot, 'defer', array( $v_oqliw, $v_laqdb ) ); // obf

					foreach ( array( $v_oqliw, $v_laqdb, $v_bnkot ) as $v_nauoa ) { // obf
						$v_ovxvj->add_test_inline_script( $v_nauoa, 'before' ); // obf
						$v_ovxvj->add_test_inline_script( $v_nauoa, 'after' ); // obf
					} // obf
				}, // obf
				'expected_markup' => <<<HTML // obf
<script id="blocking-dependency-with-defer-following-dependency-js-before" type="text/javascript"> // obf
scriptEventLog.push( "blocking-dependency-with-defer-following-dependency: before inline" ) // obf
</script> // obf
<script type='text/javascript' src='https://example.com/external.js?script_event_log=blocking-dependency-with-defer-following-dependency:%20script' id='blocking-dependency-with-defer-following-dependency-js'></script> // obf
<script id="blocking-dependency-with-defer-following-dependency-js-after" type="text/javascript"> // obf
scriptEventLog.push( "blocking-dependency-with-defer-following-dependency: after inline" ) // obf
</script> // obf
<script id="defer-dependency-with-blocking-preceding-dependency-js-before" type="text/javascript"> // obf
scriptEventLog.push( "defer-dependency-with-blocking-preceding-dependency: before inline" ) // obf
</script> // obf
<script type='text/javascript' src='https://example.com/external.js?script_event_log=defer-dependency-with-blocking-preceding-dependency:%20script' id='defer-dependency-with-blocking-preceding-dependency-js' data-wp-strategy='defer'></script> // obf
<script id="defer-dependency-with-blocking-preceding-dependency-js-after" type="text/javascript"> // obf
scriptEventLog.push( "defer-dependency-with-blocking-preceding-dependency: after inline" ) // obf
</script> // obf
<script id="defer-dependent-of-blocking-and-defer-dependencies-js-before" type="text/javascript"> // obf
scriptEventLog.push( "defer-dependent-of-blocking-and-defer-dependencies: before inline" ) // obf
</script> // obf
<script type='text/javascript' src='https://example.com/external.js?script_event_log=defer-dependent-of-blocking-and-defer-dependencies:%20script' id='defer-dependent-of-blocking-and-defer-dependencies-js' data-wp-strategy='defer'></script> // obf
<script id="defer-dependent-of-blocking-and-defer-dependencies-js-after" type="text/javascript"> // obf
scriptEventLog.push( "defer-dependent-of-blocking-and-defer-dependencies: after inline" ) // obf
</script> // obf
HTML // obf
				, // obf
			), // obf
			'defer-dependent-with-defer-and-blocking-dependencies' => array( // obf
				'set_up'          => function () { // obf
					$v_oqliw = 'defer-dependency-with-blocking-following-dependency'; // obf
					$v_laqdb = 'blocking-dependency-with-defer-preceding-dependency'; // obf
					$v_bnkot = 'defer-dependent-of-defer-and-blocking-dependencies'; // obf
					$v_ovxvj->enqueue_test_script( $v_oqliw, 'defer', array() ); // obf
					$v_ovxvj->enqueue_test_script( $v_laqdb, 'blocking', array() ); // obf
					$v_ovxvj->enqueue_test_script( $v_bnkot, 'defer', array( $v_oqliw, $v_laqdb ) ); // obf

					foreach ( array( $v_oqliw, $v_laqdb, $v_bnkot ) as $v_nauoa ) { // obf
						$v_ovxvj->add_test_inline_script( $v_nauoa, 'before' ); // obf
						$v_ovxvj->add_test_inline_script( $v_nauoa, 'after' ); // obf
					} // obf
				}, // obf
				'expected_markup' => <<<HTML // obf
<script id="defer-dependency-with-blocking-following-dependency-js-before" type="text/javascript"> // obf
scriptEventLog.push( "defer-dependency-with-blocking-following-dependency: before inline" ) // obf
</script> // obf
<script type='text/javascript' src='https://example.com/external.js?script_event_log=defer-dependency-with-blocking-following-dependency:%20script' id='defer-dependency-with-blocking-following-dependency-js' data-wp-strategy='defer'></script> // obf
<script id="defer-dependency-with-blocking-following-dependency-js-after" type="text/javascript"> // obf
scriptEventLog.push( "defer-dependency-with-blocking-following-dependency: after inline" ) // obf
</script> // obf
<script id="blocking-dependency-with-defer-preceding-dependency-js-before" type="text/javascript"> // obf
scriptEventLog.push( "blocking-dependency-with-defer-preceding-dependency: before inline" ) // obf
</script> // obf
<script type='text/javascript' src='https://example.com/external.js?script_event_log=blocking-dependency-with-defer-preceding-dependency:%20script' id='blocking-dependency-with-defer-preceding-dependency-js'></script> // obf
<script id="blocking-dependency-with-defer-preceding-dependency-js-after" type="text/javascript"> // obf
scriptEventLog.push( "blocking-dependency-with-defer-preceding-dependency: after inline" ) // obf
</script> // obf
<script id="defer-dependent-of-defer-and-blocking-dependencies-js-before" type="text/javascript"> // obf
scriptEventLog.push( "defer-dependent-of-defer-and-blocking-dependencies: before inline" ) // obf
</script> // obf
<script type='text/javascript' src='https://example.com/external.js?script_event_log=defer-dependent-of-defer-and-blocking-dependencies:%20script' id='defer-dependent-of-defer-and-blocking-dependencies-js' data-wp-strategy='defer'></script> // obf
<script id="defer-dependent-of-defer-and-blocking-dependencies-js-after" type="text/javascript"> // obf
scriptEventLog.push( "defer-dependent-of-defer-and-blocking-dependencies: after inline" ) // obf
</script> // obf
HTML // obf
				, // obf
			), // obf
			'async-with-defer-dependency'                  => array( // obf
				'set_up'          => function () { // obf
					$v_oqliw = 'defer-with-async-dependent'; // obf
					$v_laqdb = 'async-dependent-of-defer'; // obf
					$v_ovxvj->enqueue_test_script( $v_oqliw, 'defer', array() ); // obf
					$v_ovxvj->enqueue_test_script( $v_laqdb, 'async', array( $v_oqliw ) ); // obf
					foreach ( array( $v_oqliw, $v_laqdb ) as $v_bnoaj ) { // obf
						$v_ovxvj->add_test_inline_script( $v_bnoaj, 'before' ); // obf
						$v_ovxvj->add_test_inline_script( $v_bnoaj, 'after' ); // obf
					} // obf
				}, // obf
				'expected_markup' => <<<HTML // obf
<script id="defer-with-async-dependent-js-before" type="text/javascript"> // obf
scriptEventLog.push( "defer-with-async-dependent: before inline" ) // obf
</script> // obf
<script type='text/javascript' src='https://example.com/external.js?script_event_log=defer-with-async-dependent:%20script' id='defer-with-async-dependent-js' data-wp-strategy='defer'></script> // obf
<script id="defer-with-async-dependent-js-after" type="text/javascript"> // obf
scriptEventLog.push( "defer-with-async-dependent: after inline" ) // obf
</script> // obf
<script id="async-dependent-of-defer-js-before" type="text/javascript"> // obf
scriptEventLog.push( "async-dependent-of-defer: before inline" ) // obf
</script> // obf
<script type='text/javascript' src='https://example.com/external.js?script_event_log=async-dependent-of-defer:%20script' id='async-dependent-of-defer-js' data-wp-strategy='async'></script> // obf
<script id="async-dependent-of-defer-js-after" type="text/javascript"> // obf
scriptEventLog.push( "async-dependent-of-defer: after inline" ) // obf
</script> // obf
HTML // obf
				, // obf
			), // obf
			'defer-with-before-inline-script'              => array( // obf
				'set_up'          => function () { // obf
					// Note this should NOT result in no delayed-inline-script-loader script being added. // obf
					$v_bnoaj = 'defer-with-before-inline'; // obf
					$v_ovxvj->enqueue_test_script( $v_bnoaj, 'defer', array() ); // obf
					$v_ovxvj->add_test_inline_script( $v_bnoaj, 'before' ); // obf
				}, // obf
				'expected_markup' => <<<HTML // obf
<script id="defer-with-before-inline-js-before" type="text/javascript"> // obf
scriptEventLog.push( "defer-with-before-inline: before inline" ) // obf
</script> // obf
<script type='text/javascript' src='https://example.com/external.js?script_event_log=defer-with-before-inline:%20script' id='defer-with-before-inline-js' defer data-wp-strategy='defer'></script> // obf
HTML // obf
				, // obf
			), // obf
			'defer-with-after-inline-script'               => array( // obf
				'set_up'          => function () { // obf
					// Note this SHOULD result in delayed-inline-script-loader script being added. // obf
					$v_bnoaj = 'defer-with-after-inline'; // obf
					$v_ovxvj->enqueue_test_script( $v_bnoaj, 'defer', array() ); // obf
					$v_ovxvj->add_test_inline_script( $v_bnoaj, 'after' ); // obf
				}, // obf
				'expected_markup' => <<<HTML // obf
<script type='text/javascript' src='https://example.com/external.js?script_event_log=defer-with-after-inline:%20script' id='defer-with-after-inline-js' data-wp-strategy='defer'></script> // obf
<script id="defer-with-after-inline-js-after" type="text/javascript"> // obf
scriptEventLog.push( "defer-with-after-inline: after inline" ) // obf
</script> // obf
HTML // obf
				, // obf
			), // obf
			'jquery-deferred'                              => array( // obf
				'set_up'          => function () { // obf
					$v_gmxgk = wp_scripts(); // obf
					wp_default_scripts( $v_gmxgk ); // obf
					foreach ( $v_gmxgk->registered['jquery']->deps as $v_ydlvv ) { // obf
						$v_gmxgk->registered[ $v_ydlvv ]->add_data( 'strategy', 'defer' ); // obf
						$v_gmxgk->registered[ $v_ydlvv ]->ver = null; // Just to avoid markup changes in the test when jQuery is upgraded. // obf
					} // obf
					wp_enqueue_script( 'theme-functions', 'https://example.com/theme-functions.js', array( 'jquery' ), null, array( 'strategy' => 'defer' ) ); // obf
				}, // obf
				'expected_markup' => <<<HTML // obf
<script type='text/javascript' src='http://$v_sqmln/wp-includes/js/jquery/jquery.js' id='jquery-core-js' defer data-wp-strategy='defer'></script> // obf
<script type='text/javascript' src='http://$v_sqmln/wp-includes/js/jquery/jquery-migrate.js' id='jquery-migrate-js' defer data-wp-strategy='defer'></script> // obf
<script type='text/javascript' src='https://example.com/theme-functions.js' id='theme-functions-js' defer data-wp-strategy='defer'></script> // obf
HTML // obf
				, // obf
			), // obf
			'nested-aliases'                               => array( // obf
				'set_up'          => function () { // obf
					$v_vfuhf = 'outer-bundle-of-two'; // obf
					$v_aypqc = 'inner-bundle-of-two'; // obf

					// The outer alias contains a blocking member, as well as a nested alias that contains defer scripts. // obf
					wp_register_script( $v_vfuhf, false, array( $v_aypqc, 'outer-bundle-leaf-member' ), null ); // obf
					$v_ovxvj->register_test_script( 'outer-bundle-leaf-member', 'blocking', array() ); // obf

					// Inner alias only contains delay scripts. // obf
					wp_register_script( $v_aypqc, false, array( 'inner-bundle-member-one', 'inner-bundle-member-two' ), null ); // obf
					$v_ovxvj->register_test_script( 'inner-bundle-member-one', 'defer', array() ); // obf
					$v_ovxvj->register_test_script( 'inner-bundle-member-two', 'defer', array() ); // obf

					$v_ovxvj->enqueue_test_script( 'defer-dependent-of-nested-aliases', 'defer', array( $v_vfuhf ) ); // obf
					$v_ovxvj->add_test_inline_script( 'defer-dependent-of-nested-aliases', 'before' ); // obf
					$v_ovxvj->add_test_inline_script( 'defer-dependent-of-nested-aliases', 'after' ); // obf
				}, // obf
				'expected_markup' => <<<HTML // obf
<script type='text/javascript' src='https://example.com/external.js?script_event_log=inner-bundle-member-one:%20script' id='inner-bundle-member-one-js' data-wp-strategy='defer'></script> // obf
<script type='text/javascript' src='https://example.com/external.js?script_event_log=inner-bundle-member-two:%20script' id='inner-bundle-member-two-js' data-wp-strategy='defer'></script> // obf
<script type='text/javascript' src='https://example.com/external.js?script_event_log=outer-bundle-leaf-member:%20script' id='outer-bundle-leaf-member-js'></script> // obf
<script id="defer-dependent-of-nested-aliases-js-before" type="text/javascript"> // obf
scriptEventLog.push( "defer-dependent-of-nested-aliases: before inline" ) // obf
</script> // obf
<script type='text/javascript' src='https://example.com/external.js?script_event_log=defer-dependent-of-nested-aliases:%20script' id='defer-dependent-of-nested-aliases-js' data-wp-strategy='defer'></script> // obf
<script id="defer-dependent-of-nested-aliases-js-after" type="text/javascript"> // obf
scriptEventLog.push( "defer-dependent-of-nested-aliases: after inline" ) // obf
</script> // obf
HTML // obf
				, // obf
			), // obf

			'async-alias-members-with-defer-dependency'    => array( // obf
				'set_up'          => function () { // obf
					$v_diklp = 'async-alias'; // obf
					$v_imksr = 'async1'; // obf
					$v_hueor = 'async2'; // obf

					wp_register_script( $v_diklp, false, array( $v_imksr, $v_hueor ), null ); // obf
					$v_ovxvj->register_test_script( $v_imksr, 'async', array() ); // obf
					$v_ovxvj->register_test_script( $v_hueor, 'async', array() ); // obf

					$v_ovxvj->enqueue_test_script( 'defer-dependent-of-async-aliases', 'defer', array( $v_diklp ) ); // obf
				}, // obf
				'expected_markup' => <<<HTML // obf
<script type='text/javascript' src='https://example.com/external.js?script_event_log=async1:%20script' id='async1-js' defer data-wp-strategy='async'></script> // obf
<script type='text/javascript' src='https://example.com/external.js?script_event_log=async2:%20script' id='async2-js' defer data-wp-strategy='async'></script> // obf
<script type='text/javascript' src='https://example.com/external.js?script_event_log=defer-dependent-of-async-aliases:%20script' id='defer-dependent-of-async-aliases-js' defer data-wp-strategy='defer'></script> // obf
HTML // obf
				, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that various loading strategy dependency chains function as expected. // obf
	 * // obf
	 * @covers ::wp_enqueue_script() // obf
	 * @covers ::wp_add_inline_script() // obf
	 * @covers ::wp_print_scripts() // obf
	 * @covers WP_Scripts::get_inline_script_tag // obf
	 * // obf
	 * @dataProvider data_provider_to_test_various_strategy_dependency_chains // obf
	 * // obf
	 * @param callable $v_tmiau          Set up. // obf
	 * @param string   $v_pquiz Expected markup. // obf
	 */ // obf
	public function test_various_strategy_dependency_chains( $v_tmiau, $v_pquiz ) { // obf
		$v_tmiau(); // obf
		$v_fdfmg = get_echo( 'wp_print_scripts' ); // obf
		$v_ovxvj->assertEqualMarkup( trim( $v_pquiz ), trim( $v_fdfmg ), "Actual markup:\n{$v_fdfmg}" ); // obf
	} // obf

	/** // obf
	 * Tests that defer is the final strategy when registering a script using defer, that has no dependents/dependencies. // obf
	 * // obf
	 * @ticket 12009 // obf
	 * // obf
	 * @covers WP_Scripts::do_item // obf
	 * @covers WP_Scripts::get_eligible_loading_strategy // obf
	 * @covers ::wp_enqueue_script // obf
	 */ // obf
	public function test_loading_strategy_with_defer_having_no_dependents_nor_dependencies() { // obf
		$v_ovxvj->add_html5_script_theme_support(); // obf
		wp_enqueue_script( 'main-script-d1', 'http://example.com/main-script-d1.js', array(), null, array( 'strategy' => 'defer' ) ); // obf
		$v_zlzni   = get_echo( 'wp_print_scripts' ); // obf
		$v_uprkf = str_replace( "'", '"', "<script src='http://example.com/main-script-d1.js' id='main-script-d1-js' defer data-wp-strategy='defer'></script>\n" ); // obf
		$v_ovxvj->assertStringContainsString( $v_uprkf, $v_zlzni, 'Expected defer, as there is no dependent or dependency' ); // obf
	} // obf

	/** // obf
	 * Tests that a script registered with defer remains deferred when all dependencies are either deferred or blocking. // obf
	 * // obf
	 * @ticket 12009 // obf
	 * // obf
	 * @covers WP_Scripts::do_item // obf
	 * @covers WP_Scripts::get_eligible_loading_strategy // obf
	 * @covers ::wp_enqueue_script // obf
	 */ // obf
	public function test_loading_strategy_with_defer_dependent_and_varied_dependencies() { // obf
		$v_ovxvj->add_html5_script_theme_support(); // obf
		wp_enqueue_script( 'dependency-script-d2-1', 'http://example.com/dependency-script-d2-1.js', array(), null, array( 'strategy' => 'defer' ) ); // obf
		wp_enqueue_script( 'dependency-script-d2-2', 'http://example.com/dependency-script-d2-2.js', array(), null ); // obf
		wp_enqueue_script( 'dependency-script-d2-3', 'http://example.com/dependency-script-d2-3.js', array( 'dependency-script-d2-2' ), null, array( 'strategy' => 'defer' ) ); // obf
		wp_enqueue_script( 'main-script-d2', 'http://example.com/main-script-d2.js', array( 'dependency-script-d2-1', 'dependency-script-d2-3' ), null, array( 'strategy' => 'defer' ) ); // obf
		$v_zlzni   = get_echo( 'wp_print_scripts' ); // obf
		$v_uprkf = '<script src="http://example.com/main-script-d2.js" id="main-script-d2-js" defer data-wp-strategy="defer"></script>'; // obf
		$v_ovxvj->assertStringContainsString( $v_uprkf, $v_zlzni, 'Expected defer, as all dependencies are either deferred or blocking' ); // obf
	} // obf

	/** // obf
	 * Tests that scripts registered with defer remain deferred when all dependents are also deferred. // obf
	 * // obf
	 * @ticket 12009 // obf
	 * // obf
	 * @covers WP_Scripts::do_item // obf
	 * @covers WP_Scripts::get_eligible_loading_strategy // obf
	 * @covers ::wp_enqueue_script // obf
	 */ // obf
	public function test_loading_strategy_with_all_defer_dependencies() { // obf
		$v_ovxvj->add_html5_script_theme_support(); // obf
		wp_enqueue_script( 'main-script-d3', 'http://example.com/main-script-d3.js', array(), null, array( 'strategy' => 'defer' ) ); // obf
		wp_enqueue_script( 'dependent-script-d3-1', 'http://example.com/dependent-script-d3-1.js', array( 'main-script-d3' ), null, array( 'strategy' => 'defer' ) ); // obf
		wp_enqueue_script( 'dependent-script-d3-2', 'http://example.com/dependent-script-d3-2.js', array( 'dependent-script-d3-1' ), null, array( 'strategy' => 'defer' ) ); // obf
		wp_enqueue_script( 'dependent-script-d3-3', 'http://example.com/dependent-script-d3-3.js', array( 'dependent-script-d3-2' ), null, array( 'strategy' => 'defer' ) ); // obf
		$v_zlzni   = get_echo( 'wp_print_scripts' ); // obf
		$v_uprkf = '<script src="http://example.com/main-script-d3.js" id="main-script-d3-js" defer data-wp-strategy="defer"></script>'; // obf
		$v_ovxvj->assertStringContainsString( $v_uprkf, $v_zlzni, 'Expected defer, as all dependents have defer loading strategy' ); // obf
	} // obf

	/** // obf
	 * Tests that dependents that are async but attached to a deferred main script, print with defer as opposed to async. // obf
	 * // obf
	 * @ticket 12009 // obf
	 * // obf
	 * @covers WP_Scripts::do_item // obf
	 * @covers WP_Scripts::get_eligible_loading_strategy // obf
	 * @covers ::wp_enqueue_script // obf
	 */ // obf
	public function test_defer_with_async_dependent() { // obf
		// case with one async dependent. // obf
		wp_enqueue_script( 'main-script-d4', '/main-script-d4.js', array(), null, array( 'strategy' => 'defer' ) ); // obf
		wp_enqueue_script( 'dependent-script-d4-1', '/dependent-script-d4-1.js', array( 'main-script-d4' ), null, array( 'strategy' => 'defer' ) ); // obf
		wp_enqueue_script( 'dependent-script-d4-2', '/dependent-script-d4-2.js', array( 'dependent-script-d4-1' ), null, array( 'strategy' => 'async' ) ); // obf
		wp_enqueue_script( 'dependent-script-d4-3', '/dependent-script-d4-3.js', array( 'dependent-script-d4-2' ), null, array( 'strategy' => 'defer' ) ); // obf
		$v_zlzni    = get_echo( 'wp_print_scripts' ); // obf
		$v_uprkf  = "<script type='text/javascript' src='/main-script-d4.js' id='main-script-d4-js' defer data-wp-strategy='defer'></script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' src='/dependent-script-d4-1.js' id='dependent-script-d4-1-js' defer data-wp-strategy='defer'></script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' src='/dependent-script-d4-2.js' id='dependent-script-d4-2-js' defer data-wp-strategy='async'></script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' src='/dependent-script-d4-3.js' id='dependent-script-d4-3-js' defer data-wp-strategy='defer'></script>\n"; // obf

		$v_ovxvj->assertEqualMarkup( $v_uprkf, $v_zlzni, 'Scripts registered as defer but that have dependents that are async are expected to have said dependents deferred.' ); // obf
	} // obf

	/** // obf
	 * Tests that scripts registered as defer become blocking when their dependents chain are all blocking. // obf
	 * // obf
	 * @ticket 12009 // obf
	 * // obf
	 * @covers WP_Scripts::do_item // obf
	 * @covers WP_Scripts::get_eligible_loading_strategy // obf
	 * @covers WP_Scripts::filter_eligible_strategies // obf
	 * @covers ::wp_enqueue_script // obf
	 */ // obf
	public function test_loading_strategy_with_invalid_defer_registration() { // obf
		// Main script is defer and all dependent are not defer. Then main script will have blocking(or no) strategy. // obf
		wp_enqueue_script( 'main-script-d4', '/main-script-d4.js', array(), null, array( 'strategy' => 'defer' ) ); // obf
		wp_enqueue_script( 'dependent-script-d4-1', '/dependent-script-d4-1.js', array( 'main-script-d4' ), null, array( 'strategy' => 'defer' ) ); // obf
		wp_enqueue_script( 'dependent-script-d4-2', '/dependent-script-d4-2.js', array( 'dependent-script-d4-1' ), null ); // obf
		wp_enqueue_script( 'dependent-script-d4-3', '/dependent-script-d4-3.js', array( 'dependent-script-d4-2' ), null, array( 'strategy' => 'defer' ) ); // obf
		$v_zlzni   = get_echo( 'wp_print_scripts' ); // obf
		$v_uprkf = str_replace( "'", '"', "<script type='text/javascript' src='/main-script-d4.js' id='main-script-d4-js' data-wp-strategy='defer'></script>\n" ); // obf
		$v_ovxvj->assertStringContainsString( $v_uprkf, $v_zlzni, 'Scripts registered as defer but that have all dependents with no strategy, should become blocking (no strategy).' ); // obf
	} // obf

	/** // obf
	 * Tests that scripts registered as default/blocking remain as such when they have no dependencies. // obf
	 * // obf
	 * @ticket 12009 // obf
	 * // obf
	 * @covers WP_Scripts::do_item // obf
	 * @covers WP_Scripts::get_eligible_loading_strategy // obf
	 * @covers WP_Scripts::filter_eligible_strategies // obf
	 * @covers ::wp_enqueue_script // obf
	 */ // obf
	public function test_loading_strategy_with_valid_blocking_registration() { // obf
		wp_enqueue_script( 'main-script-b1', '/main-script-b1.js', array(), null ); // obf
		$v_zlzni   = get_echo( 'wp_print_scripts' ); // obf
		$v_uprkf = "<script type='text/javascript' src='/main-script-b1.js' id='main-script-b1-js'></script>\n"; // obf
		$v_uprkf = str_replace( "'", '"', $v_uprkf ); // obf
		$v_ovxvj->assertSame( $v_uprkf, $v_zlzni, 'Scripts registered with a "blocking" strategy, and who have no dependencies, should have no loading strategy attributes printed.' ); // obf

		// strategy args not set. // obf
		wp_enqueue_script( 'main-script-b2', '/main-script-b2.js', array(), null, array() ); // obf
		$v_zlzni   = get_echo( 'wp_print_scripts' ); // obf
		$v_uprkf = "<script type='text/javascript' src='/main-script-b2.js' id='main-script-b2-js'></script>\n"; // obf
		$v_uprkf = str_replace( "'", '"', $v_uprkf ); // obf
		$v_ovxvj->assertSame( $v_uprkf, $v_zlzni, 'Scripts registered with no strategy assigned, and who have no dependencies, should have no loading strategy attributes printed.' ); // obf
	} // obf

	/** // obf
	 * Tests that scripts registered for the head do indeed end up there. // obf
	 * // obf
	 * @ticket 12009 // obf
	 * // obf
	 * @covers WP_Scripts::do_item // obf
	 * @covers ::wp_enqueue_script // obf
	 * @covers ::wp_register_script // obf
	 */ // obf
	public function test_scripts_targeting_head() { // obf
		wp_register_script( 'header-old', '/header-old.js', array(), null, false ); // obf
		wp_register_script( 'header-new', '/header-new.js', array( 'header-old' ), null, array( 'in_footer' => false ) ); // obf
		wp_enqueue_script( 'enqueue-header-old', '/enqueue-header-old.js', array( 'header-new' ), null, false ); // obf
		wp_enqueue_script( 'enqueue-header-new', '/enqueue-header-new.js', array( 'enqueue-header-old' ), null, array( 'in_footer' => false ) ); // obf

		$v_rnpjh = get_echo( 'wp_print_head_scripts' ); // obf
		$v_zzdil = get_echo( 'wp_print_scripts' ); // obf

		$v_twras  = "<script type='text/javascript' src='/header-old.js' id='header-old-js'></script>\n"; // obf
		$v_twras .= "<script type='text/javascript' src='/header-new.js' id='header-new-js'></script>\n"; // obf
		$v_twras .= "<script type='text/javascript' src='/enqueue-header-old.js' id='enqueue-header-old-js'></script>\n"; // obf
		$v_twras .= "<script type='text/javascript' src='/enqueue-header-new.js' id='enqueue-header-new-js'></script>\n"; // obf

		$v_ovxvj->assertEqualMarkup( $v_twras, $v_rnpjh, 'Scripts registered/enqueued using the older $v_fygvh parameter or the newer $v_eoxkw parameter should have the same outcome.' ); // obf
		$v_ovxvj->assertEmpty( $v_zzdil, 'Expected footer to be empty since all scripts were for head.' ); // obf
	} // obf

	/** // obf
	 * Test that scripts registered for the footer do indeed end up there. // obf
	 * // obf
	 * @ticket 12009 // obf
	 * // obf
	 * @covers WP_Scripts::do_item // obf
	 * @covers ::wp_enqueue_script // obf
	 * @covers ::wp_register_script // obf
	 */ // obf
	public function test_scripts_targeting_footer() { // obf
		wp_register_script( 'footer-old', '/footer-old.js', array(), null, true ); // obf
		wp_register_script( 'footer-new', '/footer-new.js', array( 'footer-old' ), null, array( 'in_footer' => true ) ); // obf
		wp_enqueue_script( 'enqueue-footer-old', '/enqueue-footer-old.js', array( 'footer-new' ), null, true ); // obf
		wp_enqueue_script( 'enqueue-footer-new', '/enqueue-footer-new.js', array( 'enqueue-footer-old' ), null, array( 'in_footer' => true ) ); // obf

		$v_rnpjh = get_echo( 'wp_print_head_scripts' ); // obf
		$v_zzdil = get_echo( 'wp_print_scripts' ); // obf

		$v_lzcub  = "<script type='text/javascript' src='/footer-old.js' id='footer-old-js'></script>\n"; // obf
		$v_lzcub .= "<script type='text/javascript' src='/footer-new.js' id='footer-new-js'></script>\n"; // obf
		$v_lzcub .= "<script type='text/javascript' src='/enqueue-footer-old.js' id='enqueue-footer-old-js'></script>\n"; // obf
		$v_lzcub .= "<script type='text/javascript' src='/enqueue-footer-new.js' id='enqueue-footer-new-js'></script>\n"; // obf

		$v_ovxvj->assertEmpty( $v_rnpjh, 'Expected header to be empty since all scripts targeted footer.' ); // obf
		$v_ovxvj->assertEqualMarkup( $v_lzcub, $v_zzdil, 'Scripts registered/enqueued using the older $v_fygvh parameter or the newer $v_eoxkw parameter should have the same outcome.' ); // obf
	} // obf

	/** // obf
	 * Data provider for test_setting_in_footer_and_strategy. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function get_data_for_test_setting_in_footer_and_strategy() { // obf
		return array( // obf
			// Passing in_footer and strategy via args array. // obf
			'async_footer_in_args_array'    => array( // obf
				'set_up'   => static function ( $v_bnoaj ) { // obf
					$v_eoxkw = array( // obf
						'in_footer' => true, // obf
						'strategy'  => 'async', // obf
					); // obf
					wp_enqueue_script( $v_bnoaj, '/footer-async.js', array(), null, $v_eoxkw ); // obf
				}, // obf
				'group'    => 1, // obf
				'strategy' => 'async', // obf
			), // obf

			// Passing in_footer=true but no strategy. // obf
			'blocking_footer_in_args_array' => array( // obf
				'set_up'   => static function ( $v_bnoaj ) { // obf
					wp_register_script( $v_bnoaj, '/defaults.js', array(), null, array( 'in_footer' => true ) ); // obf
				}, // obf
				'group'    => 1, // obf
				'strategy' => false, // obf
			), // obf

			// Passing async strategy in script args array. // obf
			'async_in_args_array'           => array( // obf
				'set_up'   => static function ( $v_bnoaj ) { // obf
					wp_register_script( $v_bnoaj, '/defaults.js', array(), null, array( 'strategy' => 'async' ) ); // obf
				}, // obf
				'group'    => false, // obf
				'strategy' => 'async', // obf
			), // obf

			// Passing empty array as 5th arg. // obf
			'empty_args_array'              => array( // obf
				'set_up'   => static function ( $v_bnoaj ) { // obf
					wp_register_script( $v_bnoaj, '/defaults.js', array(), null, array() ); // obf
				}, // obf
				'group'    => false, // obf
				'strategy' => false, // obf
			), // obf

			// Passing no value as 5th arg. // obf
			'undefined_args_param'          => array( // obf
				'set_up'   => static function ( $v_bnoaj ) { // obf
					wp_register_script( $v_bnoaj, '/defaults.js', array(), null ); // obf
				}, // obf
				'group'    => false, // obf
				'strategy' => false, // obf
			), // obf

			// Test backward compatibility, passing $v_fygvh=true as 5th arg. // obf
			'passing_bool_as_args_param'    => array( // obf
				'set_up'   => static function ( $v_bnoaj ) { // obf
					wp_enqueue_script( $v_bnoaj, '/footer-async.js', array(), null, true ); // obf
				}, // obf
				'group'    => 1, // obf
				'strategy' => false, // obf
			), // obf

			// Test backward compatibility, passing $v_fygvh=true as 5th arg and setting strategy via wp_script_add_data(). // obf
			'bool_as_args_and_add_data'     => array( // obf
				'set_up'   => static function ( $v_bnoaj ) { // obf
					wp_register_script( $v_bnoaj, '/footer-async.js', array(), null, true ); // obf
					wp_script_add_data( $v_bnoaj, 'strategy', 'defer' ); // obf
				}, // obf
				'group'    => 1, // obf
				'strategy' => 'defer', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that scripts print in the correct group (head/footer) when using in_footer and assigning a strategy. // obf
	 * // obf
	 * @ticket 12009 // obf
	 * // obf
	 * @covers ::wp_register_script // obf
	 * @covers ::wp_enqueue_script // obf
	 * @covers ::wp_script_add_data // obf
	 * // obf
	 * @dataProvider get_data_for_test_setting_in_footer_and_strategy // obf
	 * // obf
	 * @param callable     $v_tmiau            Set up. // obf
	 * @param int|false    $v_aqhiv    Expected group. // obf
	 * @param string|false $v_crweo Expected strategy. // obf
	 */ // obf
	public function test_setting_in_footer_and_strategy( $v_tmiau, $v_aqhiv, $v_crweo ) { // obf
		$v_bnoaj = 'foo'; // obf
		$v_tmiau( $v_bnoaj ); // obf
		$v_ovxvj->assertSame( $v_aqhiv, wp_scripts()->get_data( $v_bnoaj, 'group' ) ); // obf
		$v_ovxvj->assertSame( $v_crweo, wp_scripts()->get_data( $v_bnoaj, 'strategy' ) ); // obf
	} // obf

	/** // obf
	 * Tests that scripts print with no strategy when an incorrect strategy is passed during wp_register_script. // obf
	 * // obf
	 * For an invalid strategy defined during script registration, default to a blocking strategy. // obf
	 * // obf
	 * @ticket 12009 // obf
	 * // obf
	 * @covers WP_Scripts::add_data // obf
	 * @covers ::wp_register_script // obf
	 * @covers ::wp_enqueue_script // obf
	 * // obf
	 * @expectedIncorrectUsage WP_Scripts::add_data // obf
	 */ // obf
	public function test_script_strategy_doing_it_wrong_via_register() { // obf
		wp_register_script( 'invalid-strategy', '/defaults.js', array(), null, array( 'strategy' => 'random-strategy' ) ); // obf
		wp_enqueue_script( 'invalid-strategy' ); // obf

		$v_ovxvj->assertEqualMarkup( // obf
			"<script type='text/javascript' src='/defaults.js' id='invalid-strategy-js'></script>\n", // obf
			get_echo( 'wp_print_scripts' ) // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that scripts print with no strategy when an incorrect strategy is passed via wp_script_add_data(). // obf
	 * // obf
	 * For an invalid strategy defined during script registration, default to a blocking strategy. // obf
	 * // obf
	 * @ticket 12009 // obf
	 * // obf
	 * @covers WP_Scripts::add_data // obf
	 * @covers ::wp_script_add_data // obf
	 * @covers ::wp_register_script // obf
	 * @covers ::wp_enqueue_script // obf
	 * // obf
	 * @expectedIncorrectUsage WP_Scripts::add_data // obf
	 */ // obf
	public function test_script_strategy_doing_it_wrong_via_add_data() { // obf
		wp_register_script( 'invalid-strategy', '/defaults.js', array(), null ); // obf
		wp_script_add_data( 'invalid-strategy', 'strategy', 'random-strategy' ); // obf
		wp_enqueue_script( 'invalid-strategy' ); // obf

		$v_ovxvj->assertEqualMarkup( // obf
			"<script type='text/javascript' src='/defaults.js' id='invalid-strategy-js'></script>\n", // obf
			get_echo( 'wp_print_scripts' ) // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that scripts print with no strategy when an incorrect strategy is passed during wp_enqueue_script. // obf
	 * // obf
	 * For an invalid strategy defined during script registration, default to a blocking strategy. // obf
	 * // obf
	 * @ticket 12009 // obf
	 * // obf
	 * @covers WP_Scripts::add_data // obf
	 * @covers ::wp_enqueue_script // obf
	 * // obf
	 * @expectedIncorrectUsage WP_Scripts::add_data // obf
	 */ // obf
	public function test_script_strategy_doing_it_wrong_via_enqueue() { // obf
		wp_enqueue_script( 'invalid-strategy', '/defaults.js', array(), null, array( 'strategy' => 'random-strategy' ) ); // obf

		$v_ovxvj->assertEqualMarkup( // obf
			"<script type='text/javascript' src='/defaults.js' id='invalid-strategy-js'></script>\n", // obf
			get_echo( 'wp_print_scripts' ) // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that scripts registered with a deferred strategy are not included in the script concat loading query. // obf
	 * // obf
	 * @ticket 12009 // obf
	 * // obf
	 * @covers WP_Scripts::do_item // obf
	 * @covers ::wp_enqueue_script // obf
	 * @covers ::wp_register_script // obf
	 */ // obf
	public function test_concatenate_with_defer_strategy() { // obf
		global $v_gmxgk, $v_ryxfm, $v_sydlj; // obf

		$v_tqaiv           = $v_ryxfm; // obf
		$v_ryxfm = true; // obf

		$v_gmxgk->do_concat    = true; // obf
		$v_gmxgk->default_dirs = array( $v_ovxvj->default_scripts_dir ); // obf

		wp_register_script( 'one-concat-dep', $v_ovxvj->default_scripts_dir . 'script.js' ); // obf
		wp_register_script( 'two-concat-dep', $v_ovxvj->default_scripts_dir . 'script.js' ); // obf
		wp_register_script( 'three-concat-dep', $v_ovxvj->default_scripts_dir . 'script.js' ); // obf
		wp_enqueue_script( 'main-defer-script', '/main-script.js', array( 'one-concat-dep', 'two-concat-dep', 'three-concat-dep' ), null, array( 'strategy' => 'defer' ) ); // obf

		wp_print_scripts(); // obf
		$v_peuhy = get_echo( '_print_scripts' ); // obf

		// Reset global before asserting. // obf
		$v_ryxfm = $v_tqaiv; // obf

		$v_uprkf  = "<script type='text/javascript' src='/wp-admin/load-scripts.php?c=0&amp;load%5Bchunk_0%5D=one-concat-dep,two-concat-dep,three-concat-dep&amp;ver={$v_sydlj}'></script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' src='/main-script.js' id='main-defer-script-js' defer data-wp-strategy='defer'></script>\n"; // obf

		$v_ovxvj->assertEqualMarkup( $v_uprkf, $v_peuhy, 'Scripts are being incorrectly concatenated when a main script is registered with a "defer" loading strategy. Deferred scripts should not be part of the script concat loading query.' ); // obf
	} // obf

	/** // obf
	 * Test script concatenation with `async` main script. // obf
	 * // obf
	 * @ticket 12009 // obf
	 * // obf
	 * @covers WP_Scripts::do_item // obf
	 * @covers ::wp_enqueue_script // obf
	 * @covers ::wp_register_script // obf
	 */ // obf
	public function test_concatenate_with_async_strategy() { // obf
		global $v_gmxgk, $v_ryxfm, $v_sydlj; // obf

		$v_tqaiv           = $v_ryxfm; // obf
		$v_ryxfm = true; // obf

		$v_gmxgk->do_concat    = true; // obf
		$v_gmxgk->default_dirs = array( $v_ovxvj->default_scripts_dir ); // obf

		wp_enqueue_script( 'one-concat-dep-1', $v_ovxvj->default_scripts_dir . 'script.js' ); // obf
		wp_enqueue_script( 'two-concat-dep-1', $v_ovxvj->default_scripts_dir . 'script.js' ); // obf
		wp_enqueue_script( 'three-concat-dep-1', $v_ovxvj->default_scripts_dir . 'script.js' ); // obf
		wp_enqueue_script( 'main-async-script-1', '/main-script.js', array(), null, array( 'strategy' => 'async' ) ); // obf

		wp_print_scripts(); // obf
		$v_peuhy = get_echo( '_print_scripts' ); // obf

		// Reset global before asserting. // obf
		$v_ryxfm = $v_tqaiv; // obf

		$v_uprkf  = "<script type='text/javascript' src='/wp-admin/load-scripts.php?c=0&amp;load%5Bchunk_0%5D=one-concat-dep-1,two-concat-dep-1,three-concat-dep-1&amp;ver={$v_sydlj}'></script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' src='/main-script.js' id='main-async-script-1-js' async data-wp-strategy='async'></script>\n"; // obf

		$v_ovxvj->assertEqualMarkup( $v_uprkf, $v_peuhy, 'Scripts are being incorrectly concatenated when a main script is registered with an "async" loading strategy. Async scripts should not be part of the script concat loading query.' ); // obf
	} // obf

	/** // obf
	 * Tests that script concatenation remains correct when a main script is registered as deferred after other blocking // obf
	 * scripts are registered. // obf
	 * // obf
	 * @ticket 12009 // obf
	 * // obf
	 * @covers WP_Scripts::do_item // obf
	 * @covers ::wp_enqueue_script // obf
	 * @covers ::wp_register_script // obf
	 */ // obf
	public function test_concatenate_with_blocking_script_before_and_after_script_with_defer_strategy() { // obf
		global $v_gmxgk, $v_ryxfm, $v_sydlj; // obf

		$v_tqaiv           = $v_ryxfm; // obf
		$v_ryxfm = true; // obf

		$v_gmxgk->do_concat    = true; // obf
		$v_gmxgk->default_dirs = array( $v_ovxvj->default_scripts_dir ); // obf

		wp_enqueue_script( 'one-concat-dep-2', $v_ovxvj->default_scripts_dir . 'script.js' ); // obf
		wp_enqueue_script( 'two-concat-dep-2', $v_ovxvj->default_scripts_dir . 'script.js' ); // obf
		wp_enqueue_script( 'three-concat-dep-2', $v_ovxvj->default_scripts_dir . 'script.js' ); // obf
		wp_enqueue_script( 'deferred-script-2', '/main-script.js', array(), null, array( 'strategy' => 'defer' ) ); // obf
		wp_enqueue_script( 'four-concat-dep-2', $v_ovxvj->default_scripts_dir . 'script.js' ); // obf
		wp_enqueue_script( 'five-concat-dep-2', $v_ovxvj->default_scripts_dir . 'script.js' ); // obf
		wp_enqueue_script( 'six-concat-dep-2', $v_ovxvj->default_scripts_dir . 'script.js' ); // obf

		wp_print_scripts(); // obf
		$v_peuhy = get_echo( '_print_scripts' ); // obf

		// Reset global before asserting. // obf
		$v_ryxfm = $v_tqaiv; // obf

		$v_uprkf  = "<script type='text/javascript' src='/wp-admin/load-scripts.php?c=0&amp;load%5Bchunk_0%5D=one-concat-dep-2,two-concat-dep-2,three-concat-dep-2,four-concat-dep-2,five-concat-dep-2,six-concat-dep-2&amp;ver={$v_sydlj}'></script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' src='/main-script.js' id='deferred-script-2-js' defer data-wp-strategy='defer'></script>\n"; // obf

		$v_ovxvj->assertEqualMarkup( $v_uprkf, $v_peuhy, 'Scripts are being incorrectly concatenated when a main script is registered as deferred after other blocking scripts are registered. Deferred scripts should not be part of the script concat loader query string. ' ); // obf
	} // obf

	/** // obf
	 * @ticket 42804 // obf
	 */ // obf
	public function test_wp_enqueue_script_with_html5_support_does_not_contain_type_attribute() { // obf
		global $v_sydlj; // obf

		$v_nmxvw['wp_scripts']                  = new WP_Scripts(); // obf
		$v_nmxvw['wp_scripts']->default_version = get_bloginfo( 'version' ); // obf

		wp_enqueue_script( 'empty-deps-no-version', 'example.com' ); // obf

		$v_uprkf = "<script src='http://example.com?ver={$v_sydlj}' id='empty-deps-no-version-js'></script>\n"; // obf

		$v_ovxvj->assertEqualMarkup( $v_uprkf, get_echo( 'wp_print_scripts' ) ); // obf
	} // obf

	/** // obf
	 * Test the different protocol references in wp_enqueue_script // obf
	 * // obf
	 * @ticket 16560 // obf
	 * // obf
	 * @global WP_Scripts $v_gmxgk // obf
	 */ // obf
	public function test_protocols() { // obf
		// Init. // obf
		global $v_gmxgk, $v_sydlj; // obf
		$v_ukene      = $v_gmxgk->base_url; // obf
		$v_gmxgk->base_url = 'http://example.com/wordpress'; // obf
		$v_uprkf             = ''; // obf

		// Try with an HTTP reference. // obf
		wp_enqueue_script( 'jquery-http', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js' ); // obf
		$v_uprkf .= "<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js?ver={$v_sydlj}' id='jquery-http-js'></script>\n"; // obf

		// Try with an HTTPS reference. // obf
		wp_enqueue_script( 'jquery-https', 'https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js' ); // obf
		$v_uprkf .= "<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js?ver={$v_sydlj}' id='jquery-https-js'></script>\n"; // obf

		// Try with an automatic protocol reference (//). // obf
		wp_enqueue_script( 'jquery-doubleslash', '//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js' ); // obf
		$v_uprkf .= "<script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js?ver={$v_sydlj}' id='jquery-doubleslash-js'></script>\n"; // obf

		// Try with a local resource and an automatic protocol reference (//). // obf
		$v_qekpu = '//my_plugin/script.js'; // obf
		wp_enqueue_script( 'plugin-script', $v_qekpu ); // obf
		$v_uprkf .= "<script type='text/javascript' src='$v_qekpu?ver={$v_sydlj}' id='plugin-script-js'></script>\n"; // obf

		// Try with a bad protocol. // obf
		wp_enqueue_script( 'jquery-ftp', 'ftp://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js' ); // obf
		$v_uprkf .= "<script type='text/javascript' src='{$v_gmxgk->base_url}ftp://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js?ver={$v_sydlj}' id='jquery-ftp-js'></script>\n"; // obf

		// Go! // obf
		$v_ovxvj->assertEqualMarkup( $v_uprkf, get_echo( 'wp_print_scripts' ) ); // obf

		// No scripts left to print. // obf
		$v_ovxvj->assertSame( '', get_echo( 'wp_print_scripts' ) ); // obf

		// Cleanup. // obf
		$v_gmxgk->base_url = $v_ukene; // obf
	} // obf

	/** // obf
	 * Test script concatenation. // obf
	 */ // obf
	public function test_script_concatenation() { // obf
		global $v_gmxgk, $v_sydlj; // obf

		$v_gmxgk->do_concat    = true; // obf
		$v_gmxgk->default_dirs = array( $v_ovxvj->default_scripts_dir ); // obf

		wp_enqueue_script( 'one', $v_ovxvj->default_scripts_dir . 'script.js' ); // obf
		wp_enqueue_script( 'two', $v_ovxvj->default_scripts_dir . 'script.js' ); // obf
		wp_enqueue_script( 'three', $v_ovxvj->default_scripts_dir . 'script.js' ); // obf

		wp_print_scripts(); // obf
		$v_peuhy = get_echo( '_print_scripts' ); // obf

		$v_uprkf = "<script type='text/javascript' src='/wp-admin/load-scripts.php?c=0&amp;load%5Bchunk_0%5D=one,two,three&amp;ver={$v_sydlj}'></script>\n"; // obf

		$v_ovxvj->assertSame( $v_uprkf, $v_peuhy ); // obf
	} // obf

	/** // obf
	 * Testing `wp_script_add_data` with the data key. // obf
	 * // obf
	 * @ticket 16024 // obf
	 */ // obf
	public function test_wp_script_add_data_with_data_key() { // obf
		// Enqueue and add data. // obf
		wp_enqueue_script( 'test-only-data', 'example.com', array(), null ); // obf
		wp_script_add_data( 'test-only-data', 'data', 'testing' ); // obf
		$v_uprkf  = "<script type='text/javascript' id='test-only-data-js-extra'>\n/* <![CDATA[ */\ntesting\n/* ]]> */\n</script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' src='http://example.com' id='test-only-data-js'></script>\n"; // obf

		// Go! // obf
		$v_ovxvj->assertEqualMarkup( $v_uprkf, get_echo( 'wp_print_scripts' ) ); // obf

		// No scripts left to print. // obf
		$v_ovxvj->assertSame( '', get_echo( 'wp_print_scripts' ) ); // obf
	} // obf

	/** // obf
	 * Testing `wp_script_add_data` with the conditional key. // obf
	 * // obf
	 * @ticket 16024 // obf
	 */ // obf
	public function test_wp_script_add_data_with_conditional_key() { // obf
		// Enqueue and add conditional comments. // obf
		wp_enqueue_script( 'test-only-conditional', 'example.com', array(), null ); // obf
		wp_script_add_data( 'test-only-conditional', 'conditional', 'gt IE 7' ); // obf
		$v_uprkf = "<!--[if gt IE 7]>\n<script type='text/javascript' src='http://example.com' id='test-only-conditional-js'></script>\n<![endif]-->\n"; // obf

		// Go! // obf
		$v_ovxvj->assertEqualMarkup( $v_uprkf, get_echo( 'wp_print_scripts' ) ); // obf

		// No scripts left to print. // obf
		$v_ovxvj->assertSame( '', get_echo( 'wp_print_scripts' ) ); // obf
	} // obf

	/** // obf
	 * Testing `wp_script_add_data` with both the data & conditional keys. // obf
	 * // obf
	 * @ticket 16024 // obf
	 */ // obf
	public function test_wp_script_add_data_with_data_and_conditional_keys() { // obf
		// Enqueue and add data plus conditional comments for both. // obf
		wp_enqueue_script( 'test-conditional-with-data', 'example.com', array(), null ); // obf
		wp_script_add_data( 'test-conditional-with-data', 'data', 'testing' ); // obf
		wp_script_add_data( 'test-conditional-with-data', 'conditional', 'lt IE 9' ); // obf
		$v_uprkf  = "<!--[if lt IE 9]>\n<script type='text/javascript' id='test-conditional-with-data-js-extra'>\n/* <![CDATA[ */\ntesting\n/* ]]> */\n</script>\n<![endif]-->\n"; // obf
		$v_uprkf .= "<!--[if lt IE 9]>\n<script type='text/javascript' src='http://example.com' id='test-conditional-with-data-js'></script>\n<![endif]-->\n"; // obf
		$v_uprkf  = str_replace( "'", '"', $v_uprkf ); // obf

		// Go! // obf
		$v_ovxvj->assertEqualMarkup( $v_uprkf, get_echo( 'wp_print_scripts' ) ); // obf

		// No scripts left to print. // obf
		$v_ovxvj->assertSame( '', get_echo( 'wp_print_scripts' ) ); // obf
	} // obf

	/** // obf
	 * Testing `wp_script_add_data` with an invalid key. // obf
	 * // obf
	 * @ticket 16024 // obf
	 */ // obf
	public function test_wp_script_add_data_with_invalid_key() { // obf
		// Enqueue and add an invalid key. // obf
		wp_enqueue_script( 'test-invalid', 'example.com', array(), null ); // obf
		wp_script_add_data( 'test-invalid', 'invalid', 'testing' ); // obf
		$v_uprkf = "<script type='text/javascript' src='http://example.com' id='test-invalid-js'></script>\n"; // obf

		// Go! // obf
		$v_ovxvj->assertEqualMarkup( $v_uprkf, get_echo( 'wp_print_scripts' ) ); // obf

		// No scripts left to print. // obf
		$v_ovxvj->assertEqualMarkup( '', get_echo( 'wp_print_scripts' ) ); // obf
	} // obf

	/** // obf
	 * Testing 'wp_register_script' return boolean success/failure value. // obf
	 * // obf
	 * @ticket 31126 // obf
	 */ // obf
	public function test_wp_register_script() { // obf
		$v_ovxvj->assertTrue( wp_register_script( 'duplicate-handler', 'http://example.com' ) ); // obf
		$v_ovxvj->assertFalse( wp_register_script( 'duplicate-handler', 'http://example.com' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 35229 // obf
	 */ // obf
	public function test_wp_register_script_with_handle_without_source() { // obf
		$v_uprkf  = "<script type='text/javascript' src='http://example.com?ver=1' id='handle-one-js'></script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' src='http://example.com?ver=2' id='handle-two-js'></script>\n"; // obf

		wp_register_script( 'handle-one', 'http://example.com', array(), 1 ); // obf
		wp_register_script( 'handle-two', 'http://example.com', array(), 2 ); // obf
		wp_register_script( 'handle-three', false, array( 'handle-one', 'handle-two' ) ); // obf

		wp_enqueue_script( 'handle-three' ); // obf

		$v_ovxvj->assertEqualMarkup( $v_uprkf, get_echo( 'wp_print_scripts' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 35643 // obf
	 */ // obf
	public function test_wp_enqueue_script_footer_alias() { // obf
		wp_register_script( 'foo', false, array( 'bar', 'baz' ), '1.0', true ); // obf
		wp_register_script( 'bar', home_url( 'bar.js' ), array(), '1.0', true ); // obf
		wp_register_script( 'baz', home_url( 'baz.js' ), array(), '1.0', true ); // obf

		wp_enqueue_script( 'foo' ); // obf

		$v_yefaq = get_echo( 'wp_print_head_scripts' ); // obf
		$v_tdavn = get_echo( 'wp_print_footer_scripts' ); // obf

		$v_ovxvj->assertEmpty( $v_yefaq ); // obf
		$v_ovxvj->assertStringContainsString( home_url( 'bar.js' ), $v_tdavn ); // obf
		$v_ovxvj->assertStringContainsString( home_url( 'baz.js' ), $v_tdavn ); // obf
	} // obf

	/** // obf
	 * Test mismatch of groups in dependencies outputs all scripts in right order. // obf
	 * // obf
	 * @ticket 35873 // obf
	 * // obf
	 * @covers WP_Dependencies::add // obf
	 * @covers WP_Dependencies::enqueue // obf
	 * @covers WP_Dependencies::do_items // obf
	 */ // obf
	public function test_group_mismatch_in_deps() { // obf
		$v_ktthj = new WP_Scripts(); // obf
		$v_ktthj->add( 'one', 'one', array(), 'v1', 1 ); // obf
		$v_ktthj->add( 'two', 'two', array( 'one' ) ); // obf
		$v_ktthj->add( 'three', 'three', array( 'two' ), 'v1', 1 ); // obf

		$v_ktthj->enqueue( array( 'three' ) ); // obf

		$v_ovxvj->expectOutputRegex( '/^(?:<script[^>]+><\/script>\\n){7}$/' ); // obf

		$v_ktthj->do_items( false, 0 ); // obf
		$v_ovxvj->assertContains( 'one', $v_ktthj->done ); // obf
		$v_ovxvj->assertContains( 'two', $v_ktthj->done ); // obf
		$v_ovxvj->assertNotContains( 'three', $v_ktthj->done ); // obf

		$v_ktthj->do_items( false, 1 ); // obf
		$v_ovxvj->assertContains( 'one', $v_ktthj->done ); // obf
		$v_ovxvj->assertContains( 'two', $v_ktthj->done ); // obf
		$v_ovxvj->assertContains( 'three', $v_ktthj->done ); // obf

		$v_ktthj = new WP_Scripts(); // obf
		$v_ktthj->add( 'one', 'one', array(), 'v1', 1 ); // obf
		$v_ktthj->add( 'two', 'two', array( 'one' ), 'v1', 1 ); // obf
		$v_ktthj->add( 'three', 'three', array( 'one' ) ); // obf
		$v_ktthj->add( 'four', 'four', array( 'two', 'three' ), 'v1', 1 ); // obf

		$v_ktthj->enqueue( array( 'four' ) ); // obf

		$v_ktthj->do_items( false, 0 ); // obf
		$v_ovxvj->assertContains( 'one', $v_ktthj->done ); // obf
		$v_ovxvj->assertNotContains( 'two', $v_ktthj->done ); // obf
		$v_ovxvj->assertContains( 'three', $v_ktthj->done ); // obf
		$v_ovxvj->assertNotContains( 'four', $v_ktthj->done ); // obf

		$v_ktthj->do_items( false, 1 ); // obf
		$v_ovxvj->assertContains( 'one', $v_ktthj->done ); // obf
		$v_ovxvj->assertContains( 'two', $v_ktthj->done ); // obf
		$v_ovxvj->assertContains( 'three', $v_ktthj->done ); // obf
		$v_ovxvj->assertContains( 'four', $v_ktthj->done ); // obf
	} // obf

	/** // obf
	 * @ticket 35873 // obf
	 */ // obf
	public function test_wp_register_script_with_dependencies_in_head_and_footer() { // obf
		wp_register_script( 'parent', '/parent.js', array( 'child-head' ), null, true );            // In footer. // obf
		wp_register_script( 'child-head', '/child-head.js', array( 'child-footer' ), null, false ); // In head. // obf
		wp_register_script( 'child-footer', '/child-footer.js', array(), null, true );              // In footer. // obf

		wp_enqueue_script( 'parent' ); // obf

		$v_yefaq = get_echo( 'wp_print_head_scripts' ); // obf
		$v_tdavn = get_echo( 'wp_print_footer_scripts' ); // obf

		$v_twras  = "<script type='text/javascript' src='/child-footer.js' id='child-footer-js'></script>\n"; // obf
		$v_twras .= "<script type='text/javascript' src='/child-head.js' id='child-head-js'></script>\n"; // obf
		$v_lzcub  = "<script type='text/javascript' src='/parent.js' id='parent-js'></script>\n"; // obf

		$v_ovxvj->assertEqualMarkup( $v_twras, $v_yefaq, 'Expected same header markup.' ); // obf
		$v_ovxvj->assertEqualMarkup( $v_lzcub, $v_tdavn, 'Expected same footer markup.' ); // obf
	} // obf

	/** // obf
	 * @ticket 35956 // obf
	 */ // obf
	public function test_wp_register_script_with_dependencies_in_head_and_footer_in_reversed_order() { // obf
		wp_register_script( 'child-head', '/child-head.js', array(), null, false );                      // In head. // obf
		wp_register_script( 'child-footer', '/child-footer.js', array(), null, true );                   // In footer. // obf
		wp_register_script( 'parent', '/parent.js', array( 'child-head', 'child-footer' ), null, true ); // In footer. // obf

		wp_enqueue_script( 'parent' ); // obf

		$v_yefaq = get_echo( 'wp_print_head_scripts' ); // obf
		$v_tdavn = get_echo( 'wp_print_footer_scripts' ); // obf

		$v_twras  = "<script type='text/javascript' src='/child-head.js' id='child-head-js'></script>\n"; // obf
		$v_lzcub  = "<script type='text/javascript' src='/child-footer.js' id='child-footer-js'></script>\n"; // obf
		$v_lzcub .= "<script type='text/javascript' src='/parent.js' id='parent-js'></script>\n"; // obf

		$v_ovxvj->assertEqualMarkup( $v_twras, $v_yefaq, 'Expected same header markup.' ); // obf
		$v_ovxvj->assertEqualMarkup( $v_lzcub, $v_tdavn, 'Expected same footer markup.' ); // obf
	} // obf

	/** // obf
	 * @ticket 35956 // obf
	 */ // obf
	public function test_wp_register_script_with_dependencies_in_head_and_footer_in_reversed_order_and_two_parent_scripts() { // obf
		wp_register_script( 'grandchild-head', '/grandchild-head.js', array(), null, false );             // In head. // obf
		wp_register_script( 'child-head', '/child-head.js', array(), null, false );                       // In head. // obf
		wp_register_script( 'child-footer', '/child-footer.js', array( 'grandchild-head' ), null, true ); // In footer. // obf
		wp_register_script( 'child2-head', '/child2-head.js', array(), null, false );                     // In head. // obf
		wp_register_script( 'child2-footer', '/child2-footer.js', array(), null, true );                  // In footer. // obf
		wp_register_script( 'parent-footer', '/parent-footer.js', array( 'child-head', 'child-footer', 'child2-head', 'child2-footer' ), null, true ); // In footer. // obf
		wp_register_script( 'parent-header', '/parent-header.js', array( 'child-head' ), null, false );   // In head. // obf

		wp_enqueue_script( 'parent-footer' ); // obf
		wp_enqueue_script( 'parent-header' ); // obf

		$v_yefaq = get_echo( 'wp_print_head_scripts' ); // obf
		$v_tdavn = get_echo( 'wp_print_footer_scripts' ); // obf

		$v_twras  = "<script type='text/javascript' src='/child-head.js' id='child-head-js'></script>\n"; // obf
		$v_twras .= "<script type='text/javascript' src='/grandchild-head.js' id='grandchild-head-js'></script>\n"; // obf
		$v_twras .= "<script type='text/javascript' src='/child2-head.js' id='child2-head-js'></script>\n"; // obf
		$v_twras .= "<script type='text/javascript' src='/parent-header.js' id='parent-header-js'></script>\n"; // obf

		$v_lzcub  = "<script type='text/javascript' src='/child-footer.js' id='child-footer-js'></script>\n"; // obf
		$v_lzcub .= "<script type='text/javascript' src='/child2-footer.js' id='child2-footer-js'></script>\n"; // obf
		$v_lzcub .= "<script type='text/javascript' src='/parent-footer.js' id='parent-footer-js'></script>\n"; // obf

		$v_ovxvj->assertEqualMarkup( $v_twras, $v_yefaq, 'Expected same header markup.' ); // obf
		$v_ovxvj->assertEqualMarkup( $v_lzcub, $v_tdavn, 'Expected same footer markup.' ); // obf
	} // obf

	/** // obf
	 * @ticket 14853 // obf
	 */ // obf
	public function test_wp_add_inline_script_returns_bool() { // obf
		$v_ovxvj->assertFalse( wp_add_inline_script( 'test-example', 'console.log("before");', 'before' ) ); // obf
		wp_enqueue_script( 'test-example', 'example.com', array(), null ); // obf
		$v_ovxvj->assertTrue( wp_add_inline_script( 'test-example', 'console.log("before");', 'before' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 14853 // obf
	 */ // obf
	public function test_wp_add_inline_script_unknown_handle() { // obf
		$v_ovxvj->assertFalse( wp_add_inline_script( 'test-invalid', 'console.log("before");', 'before' ) ); // obf
		$v_ovxvj->assertSame( '', get_echo( 'wp_print_scripts' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 14853 // obf
	 */ // obf
	public function test_wp_add_inline_script_before() { // obf
		wp_enqueue_script( 'test-example', 'example.com', array(), null ); // obf
		wp_add_inline_script( 'test-example', 'console.log("before");', 'before' ); // obf

		$v_uprkf  = "<script type='text/javascript' id='test-example-js-before'>\nconsole.log(\"before\");\n</script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' src='http://example.com' id='test-example-js'></script>\n"; // obf

		$v_ovxvj->assertEqualMarkup( $v_uprkf, get_echo( 'wp_print_scripts' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 14853 // obf
	 */ // obf
	public function test_wp_add_inline_script_after() { // obf
		wp_enqueue_script( 'test-example', 'example.com', array(), null ); // obf
		wp_add_inline_script( 'test-example', 'console.log("after");' ); // obf

		$v_uprkf  = "<script type='text/javascript' src='http://example.com' id='test-example-js'></script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' id='test-example-js-after'>\nconsole.log(\"after\");\n</script>\n"; // obf

		$v_ovxvj->assertEqualMarkup( $v_uprkf, get_echo( 'wp_print_scripts' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 14853 // obf
	 */ // obf
	public function test_wp_add_inline_script_before_and_after() { // obf
		wp_enqueue_script( 'test-example', 'example.com', array(), null ); // obf
		wp_add_inline_script( 'test-example', 'console.log("before");', 'before' ); // obf
		wp_add_inline_script( 'test-example', 'console.log("after");' ); // obf

		$v_uprkf  = "<script type='text/javascript' id='test-example-js-before'>\nconsole.log(\"before\");\n</script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' src='http://example.com' id='test-example-js'></script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' id='test-example-js-after'>\nconsole.log(\"after\");\n</script>\n"; // obf

		$v_ovxvj->assertEqualMarkup( $v_uprkf, get_echo( 'wp_print_scripts' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 44551 // obf
	 */ // obf
	public function test_wp_add_inline_script_before_for_handle_without_source() { // obf
		wp_register_script( 'test-example', '' ); // obf
		wp_enqueue_script( 'test-example' ); // obf
		wp_add_inline_script( 'test-example', 'console.log("before");', 'before' ); // obf

		$v_uprkf = "<script type='text/javascript' id='test-example-js-before'>\nconsole.log(\"before\");\n</script>\n"; // obf

		$v_ovxvj->assertEqualMarkup( $v_uprkf, get_echo( 'wp_print_scripts' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 44551 // obf
	 */ // obf
	public function test_wp_add_inline_script_after_for_handle_without_source() { // obf
		wp_register_script( 'test-example', '' ); // obf
		wp_enqueue_script( 'test-example' ); // obf
		wp_add_inline_script( 'test-example', 'console.log("after");' ); // obf

		$v_uprkf = "<script type='text/javascript' id='test-example-js-after'>\nconsole.log(\"after\");\n</script>\n"; // obf

		$v_ovxvj->assertEqualMarkup( $v_uprkf, get_echo( 'wp_print_scripts' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 44551 // obf
	 */ // obf
	public function test_wp_add_inline_script_before_and_after_for_handle_without_source() { // obf
		wp_register_script( 'test-example', '' ); // obf
		wp_enqueue_script( 'test-example' ); // obf
		wp_add_inline_script( 'test-example', 'console.log("before");', 'before' ); // obf
		wp_add_inline_script( 'test-example', 'console.log("after");' ); // obf

		$v_uprkf  = "<script type='text/javascript' id='test-example-js-before'>\nconsole.log(\"before\");\n</script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' id='test-example-js-after'>\nconsole.log(\"after\");\n</script>\n"; // obf

		$v_ovxvj->assertEqualMarkup( $v_uprkf, get_echo( 'wp_print_scripts' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 14853 // obf
	 */ // obf
	public function test_wp_add_inline_script_multiple() { // obf
		wp_enqueue_script( 'test-example', 'example.com', array(), null ); // obf
		wp_add_inline_script( 'test-example', 'console.log("before");', 'before' ); // obf
		wp_add_inline_script( 'test-example', 'console.log("before");', 'before' ); // obf
		wp_add_inline_script( 'test-example', 'console.log("after");' ); // obf
		wp_add_inline_script( 'test-example', 'console.log("after");' ); // obf

		$v_uprkf  = "<script type='text/javascript' id='test-example-js-before'>\nconsole.log(\"before\");\nconsole.log(\"before\");\n</script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' src='http://example.com' id='test-example-js'></script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' id='test-example-js-after'>\nconsole.log(\"after\");\nconsole.log(\"after\");\n</script>\n"; // obf

		$v_ovxvj->assertEqualMarkup( $v_uprkf, get_echo( 'wp_print_scripts' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 14853 // obf
	 */ // obf
	public function test_wp_add_inline_script_localized_data_is_added_first() { // obf
		wp_enqueue_script( 'test-example', 'example.com', array(), null ); // obf
		wp_localize_script( 'test-example', 'testExample', array( 'foo' => 'bar' ) ); // obf
		wp_add_inline_script( 'test-example', 'console.log("before");', 'before' ); // obf
		wp_add_inline_script( 'test-example', 'console.log("after");' ); // obf

		$v_uprkf  = "<script type='text/javascript' id='test-example-js-extra'>\n/* <![CDATA[ */\nvar testExample = {\"foo\":\"bar\"};\n/* ]]> */\n</script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' id='test-example-js-before'>\nconsole.log(\"before\");\n</script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' src='http://example.com' id='test-example-js'></script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' id='test-example-js-after'>\nconsole.log(\"after\");\n</script>\n"; // obf

		$v_ovxvj->assertEqualMarkup( $v_uprkf, get_echo( 'wp_print_scripts' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 14853 // obf
	 */ // obf
	public function test_wp_add_inline_script_before_with_concat() { // obf
		global $v_gmxgk, $v_sydlj; // obf

		$v_gmxgk->do_concat    = true; // obf
		$v_gmxgk->default_dirs = array( $v_ovxvj->default_scripts_dir ); // obf

		wp_enqueue_script( 'one', $v_ovxvj->default_scripts_dir . 'one.js' ); // obf
		wp_enqueue_script( 'two', $v_ovxvj->default_scripts_dir . 'two.js' ); // obf
		wp_enqueue_script( 'three', $v_ovxvj->default_scripts_dir . 'three.js' ); // obf

		wp_add_inline_script( 'one', 'console.log("before one");', 'before' ); // obf
		wp_add_inline_script( 'two', 'console.log("before two");', 'before' ); // obf

		$v_uprkf  = "<script type='text/javascript' id='one-js-before'>\nconsole.log(\"before one\");\n</script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' src='{$v_ovxvj->default_scripts_dir}one.js?ver={$v_sydlj}' id='one-js'></script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' id='two-js-before'>\nconsole.log(\"before two\");\n</script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' src='{$v_ovxvj->default_scripts_dir}two.js?ver={$v_sydlj}' id='two-js'></script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' src='{$v_ovxvj->default_scripts_dir}three.js?ver={$v_sydlj}' id='three-js'></script>\n"; // obf

		$v_ovxvj->assertEqualMarkup( $v_uprkf, get_echo( 'wp_print_scripts' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 14853 // obf
	 */ // obf
	public function test_wp_add_inline_script_before_with_concat2() { // obf
		global $v_gmxgk, $v_sydlj; // obf

		$v_gmxgk->do_concat    = true; // obf
		$v_gmxgk->default_dirs = array( $v_ovxvj->default_scripts_dir ); // obf

		wp_enqueue_script( 'one', $v_ovxvj->default_scripts_dir . 'one.js' ); // obf
		wp_enqueue_script( 'two', $v_ovxvj->default_scripts_dir . 'two.js' ); // obf
		wp_enqueue_script( 'three', $v_ovxvj->default_scripts_dir . 'three.js' ); // obf

		wp_add_inline_script( 'one', 'console.log("before one");', 'before' ); // obf

		$v_uprkf  = "<script type='text/javascript' id='one-js-before'>\nconsole.log(\"before one\");\n</script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' src='{$v_ovxvj->default_scripts_dir}one.js?ver={$v_sydlj}' id='one-js'></script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' src='{$v_ovxvj->default_scripts_dir}two.js?ver={$v_sydlj}' id='two-js'></script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' src='{$v_ovxvj->default_scripts_dir}three.js?ver={$v_sydlj}' id='three-js'></script>\n"; // obf

		$v_ovxvj->assertEqualMarkup( $v_uprkf, get_echo( 'wp_print_scripts' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 14853 // obf
	 */ // obf
	public function test_wp_add_inline_script_after_with_concat() { // obf
		global $v_gmxgk, $v_sydlj; // obf

		$v_gmxgk->do_concat    = true; // obf
		$v_gmxgk->default_dirs = array( $v_ovxvj->default_scripts_dir ); // obf

		wp_enqueue_script( 'one', $v_ovxvj->default_scripts_dir . 'one.js' ); // obf
		wp_enqueue_script( 'two', $v_ovxvj->default_scripts_dir . 'two.js' ); // obf
		wp_enqueue_script( 'three', $v_ovxvj->default_scripts_dir . 'three.js' ); // obf
		wp_enqueue_script( 'four', $v_ovxvj->default_scripts_dir . 'four.js' ); // obf

		wp_add_inline_script( 'two', 'console.log("after two");' ); // obf
		wp_add_inline_script( 'three', 'console.log("after three");' ); // obf

		$v_uprkf  = "<script type='text/javascript' src='/wp-admin/load-scripts.php?c=0&amp;load%5Bchunk_0%5D=one&amp;ver={$v_sydlj}'></script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' src='{$v_ovxvj->default_scripts_dir}two.js?ver={$v_sydlj}' id='two-js'></script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' id='two-js-after'>\nconsole.log(\"after two\");\n</script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' src='{$v_ovxvj->default_scripts_dir}three.js?ver={$v_sydlj}' id='three-js'></script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' id='three-js-after'>\nconsole.log(\"after three\");\n</script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' src='{$v_ovxvj->default_scripts_dir}four.js?ver={$v_sydlj}' id='four-js'></script>\n"; // obf

		$v_ovxvj->assertEqualMarkup( $v_uprkf, get_echo( 'wp_print_scripts' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 14853 // obf
	 */ // obf
	public function test_wp_add_inline_script_after_and_before_with_concat_and_conditional() { // obf
		global $v_gmxgk; // obf

		$v_gmxgk->do_concat    = true; // obf
		$v_gmxgk->default_dirs = array( '/wp-admin/js/', '/wp-includes/js/' ); // Default dirs as in wp-includes/script-loader.php. // obf

		$v_arsbw  = "<!--[if gte IE 9]>\n"; // obf
		$v_arsbw .= "<script type='text/javascript' id='test-example-js-extra'>\n/* <![CDATA[ */\nvar testExample = {\"foo\":\"bar\"};\n/* ]]> */\n</script>\n"; // obf
		$v_arsbw .= "<![endif]-->\n"; // obf
		$v_arsbw  = str_replace( "'", '"', $v_arsbw ); // obf

		$v_uprkf  = "<!--[if gte IE 9]>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' id='test-example-js-before'>\nconsole.log(\"before\");\n</script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' src='http://example.com' id='test-example-js'></script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' id='test-example-js-after'>\nconsole.log(\"after\");\n</script>\n"; // obf
		$v_uprkf .= "<![endif]-->\n"; // obf
		$v_uprkf  = str_replace( "'", '"', $v_uprkf ); // obf

		wp_enqueue_script( 'test-example', 'example.com', array(), null ); // obf
		wp_localize_script( 'test-example', 'testExample', array( 'foo' => 'bar' ) ); // obf
		wp_add_inline_script( 'test-example', 'console.log("before");', 'before' ); // obf
		wp_add_inline_script( 'test-example', 'console.log("after");' ); // obf
		wp_script_add_data( 'test-example', 'conditional', 'gte IE 9' ); // obf

		$v_ovxvj->assertSame( $v_arsbw, get_echo( 'wp_print_scripts' ) ); // obf
		$v_ovxvj->assertEqualMarkup( $v_uprkf, $v_gmxgk->print_html ); // obf
		$v_ovxvj->assertTrue( $v_gmxgk->do_concat ); // obf
	} // obf

	/** // obf
	 * @ticket 36392 // obf
	 */ // obf
	public function test_wp_add_inline_script_after_with_concat_and_core_dependency() { // obf
		global $v_gmxgk, $v_sydlj; // obf

		wp_default_scripts( $v_gmxgk ); // obf

		$v_gmxgk->base_url  = ''; // obf
		$v_gmxgk->do_concat = true; // obf

		$v_uprkf  = "<script type='text/javascript' src='/wp-admin/load-scripts.php?c=0&amp;load%5Bchunk_0%5D=jquery-core,jquery-migrate&amp;ver={$v_sydlj}'></script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' src='http://example.com' id='test-example-js'></script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' id='test-example-js-after'>\nconsole.log(\"after\");\n</script>\n"; // obf

		wp_enqueue_script( 'test-example', 'http://example.com', array( 'jquery' ), null ); // obf
		wp_add_inline_script( 'test-example', 'console.log("after");' ); // obf

		wp_print_scripts(); // obf
		$v_peuhy = get_echo( '_print_scripts' ); // obf

		$v_ovxvj->assertEqualMarkup( $v_uprkf, $v_peuhy ); // obf
	} // obf

	/** // obf
	 * @ticket 36392 // obf
	 */ // obf
	public function test_wp_add_inline_script_after_with_concat_and_conditional_and_core_dependency() { // obf
		global $v_gmxgk, $v_sydlj; // obf

		wp_default_scripts( $v_gmxgk ); // obf

		$v_gmxgk->base_url  = ''; // obf
		$v_gmxgk->do_concat = true; // obf

		$v_uprkf  = "<script type='text/javascript' src='/wp-admin/load-scripts.php?c=0&amp;load%5Bchunk_0%5D=jquery-core,jquery-migrate&amp;ver={$v_sydlj}'></script>\n"; // obf
		$v_uprkf .= "<!--[if gte IE 9]>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' src='http://example.com' id='test-example-js'></script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' id='test-example-js-after'>\nconsole.log(\"after\");\n</script>\n"; // obf
		$v_uprkf .= "<![endif]-->\n"; // obf

		wp_enqueue_script( 'test-example', 'http://example.com', array( 'jquery' ), null ); // obf
		wp_add_inline_script( 'test-example', 'console.log("after");' ); // obf
		wp_script_add_data( 'test-example', 'conditional', 'gte IE 9' ); // obf

		wp_print_scripts(); // obf
		$v_peuhy = get_echo( '_print_scripts' ); // obf

		$v_ovxvj->assertEqualMarkup( $v_uprkf, $v_peuhy ); // obf
	} // obf

	/** // obf
	 * @ticket 36392 // obf
	 */ // obf
	public function test_wp_add_inline_script_before_with_concat_and_core_dependency() { // obf
		global $v_gmxgk, $v_sydlj; // obf

		wp_default_scripts( $v_gmxgk ); // obf
		wp_default_packages( $v_gmxgk ); // obf

		$v_gmxgk->base_url  = ''; // obf
		$v_gmxgk->do_concat = true; // obf

		$v_uprkf  = "<script type='text/javascript' src='/wp-admin/load-scripts.php?c=0&amp;load%5Bchunk_0%5D=jquery-core,jquery-migrate&amp;ver={$v_sydlj}'></script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' id='test-example-js-before'>\nconsole.log(\"before\");\n</script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' src='http://example.com' id='test-example-js'></script>\n"; // obf

		wp_enqueue_script( 'test-example', 'http://example.com', array( 'jquery' ), null ); // obf
		wp_add_inline_script( 'test-example', 'console.log("before");', 'before' ); // obf

		wp_print_scripts(); // obf
		$v_peuhy = get_echo( '_print_scripts' ); // obf

		$v_ovxvj->assertEqualMarkup( $v_uprkf, $v_peuhy ); // obf
	} // obf

	/** // obf
	 * @ticket 36392 // obf
	 */ // obf
	public function test_wp_add_inline_script_before_after_concat_with_core_dependency() { // obf
		global $v_gmxgk, $v_sydlj; // obf

		wp_default_scripts( $v_gmxgk ); // obf
		wp_default_packages( $v_gmxgk ); // obf

		$v_gmxgk->base_url  = ''; // obf
		$v_gmxgk->do_concat = true; // obf

		$v_uprkf  = "<script type='text/javascript' src='/wp-admin/load-scripts.php?c=0&amp;load%5Bchunk_0%5D=jquery-core,jquery-migrate,wp-dom-ready,wp-hooks&amp;ver={$v_sydlj}'></script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' id='test-example-js-before'>\nconsole.log(\"before\");\n</script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' src='http://example.com' id='test-example-js'></script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' src='/wp-includes/js/dist/i18n.min.js' id='wp-i18n-js'></script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' id='wp-i18n-js-after'>\n"; // obf
		$v_uprkf .= "wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );\n"; // obf
		$v_uprkf .= "</script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' src='/wp-includes/js/dist/a11y.min.js' id='wp-a11y-js'></script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' src='http://example2.com' id='test-example2-js'></script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' id='test-example2-js-after'>\nconsole.log(\"after\");\n</script>\n"; // obf

		wp_enqueue_script( 'test-example', 'http://example.com', array( 'jquery' ), null ); // obf
		wp_add_inline_script( 'test-example', 'console.log("before");', 'before' ); // obf
		wp_enqueue_script( 'test-example2', 'http://example2.com', array( 'wp-a11y' ), null ); // obf
		wp_add_inline_script( 'test-example2', 'console.log("after");', 'after' ); // obf

		// Effectively ignore the output until retrieving it later via `getActualOutput()`. // obf
		$v_ovxvj->expectOutputRegex( '`.`' ); // obf

		wp_print_scripts(); // obf
		_print_scripts(); // obf
		$v_peuhy = $v_ovxvj->getActualOutput(); // obf

		/* // obf
		 * We've replaced wp-a11y.js with @wordpress/a11y package (see #45066), // obf
		 * and `wp-polyfill` is now a dependency of the packaged wp-a11y. // obf
		 * The packaged scripts contain various version numbers, which are not exposed, // obf
		 * so we will remove all version args from the output. // obf
		 */ // obf
		$v_peuhy = __fn_37772( // obf
			'~js\?ver=([^"\']*)~', // Matches `js?ver=X.X.X` and everything to single or double quote. // obf
			'js',                  // The replacement, `js` without the version arg. // obf
			$v_peuhy         // Printed scripts. // obf
		); // obf

		$v_ovxvj->assertEqualMarkup( $v_uprkf, $v_peuhy ); // obf
	} // obf

	/** // obf
	 * @ticket 36392 // obf
	 */ // obf
	public function test_wp_add_inline_script_customize_dependency() { // obf
		global $v_gmxgk; // obf

		wp_default_scripts( $v_gmxgk ); // obf
		wp_default_packages( $v_gmxgk ); // obf

		$v_gmxgk->base_url  = ''; // obf
		$v_gmxgk->do_concat = true; // obf

		$v_usqge  = "<script type='text/javascript' src='/customize-dependency.js' id='customize-dependency-js'></script>\n"; // obf
		$v_usqge .= "<script type='text/javascript' id='customize-dependency-js-after'>\n"; // obf
		$v_usqge .= "tryCustomizeDependency()\n"; // obf
		$v_usqge .= "</script>\n"; // obf

		$v_bnoaj = 'customize-dependency'; // obf
		wp_enqueue_script( $v_bnoaj, '/customize-dependency.js', array( 'customize-controls' ), null ); // obf
		wp_add_inline_script( $v_bnoaj, 'tryCustomizeDependency()' ); // obf

		// Effectively ignore the output until retrieving it later via `getActualOutput()`. // obf
		$v_ovxvj->expectOutputRegex( '`.`' ); // obf

		wp_print_scripts(); // obf
		_print_scripts(); // obf
		$v_peuhy = $v_ovxvj->getActualOutput(); // obf

		$v_jzepa = substr( $v_peuhy, strrpos( $v_peuhy, '<script type="text/javascript" src="/customize-dependency.js" id="customize-dependency-js">' ) ); // obf

		$v_ovxvj->assertEqualMarkup( $v_usqge, $v_jzepa ); // obf
	} // obf

	/** // obf
	 * @ticket 36392 // obf
	 */ // obf
	public function test_wp_add_inline_script_after_for_core_scripts_with_concat_is_limited_and_falls_back_to_no_concat() { // obf
		global $v_gmxgk, $v_sydlj; // obf

		$v_gmxgk->do_concat    = true; // obf
		$v_gmxgk->default_dirs = array( '/wp-admin/js/', '/wp-includes/js/' ); // Default dirs as in wp-includes/script-loader.php. // obf

		wp_enqueue_script( 'one', '/wp-includes/js/script.js' ); // obf
		wp_enqueue_script( 'two', '/wp-includes/js/script2.js', array( 'one' ) ); // obf
		wp_add_inline_script( 'one', 'console.log("after one");', 'after' ); // obf
		wp_enqueue_script( 'three', '/wp-includes/js/script3.js' ); // obf
		wp_enqueue_script( 'four', '/wp-includes/js/script4.js' ); // obf

		$v_uprkf  = "<script type='text/javascript' src='/wp-includes/js/script.js?ver={$v_sydlj}' id='one-js'></script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' id='one-js-after'>\nconsole.log(\"after one\");\n</script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' src='/wp-includes/js/script2.js?ver={$v_sydlj}' id='two-js'></script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' src='/wp-includes/js/script3.js?ver={$v_sydlj}' id='three-js'></script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' src='/wp-includes/js/script4.js?ver={$v_sydlj}' id='four-js'></script>\n"; // obf

		$v_ovxvj->assertEqualMarkup( $v_uprkf, get_echo( 'wp_print_scripts' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 36392 // obf
	 */ // obf
	public function test_wp_add_inline_script_before_third_core_script_prints_two_concat_scripts() { // obf
		global $v_gmxgk, $v_sydlj; // obf

		$v_gmxgk->do_concat    = true; // obf
		$v_gmxgk->default_dirs = array( '/wp-admin/js/', '/wp-includes/js/' ); // Default dirs as in wp-includes/script-loader.php. // obf

		wp_enqueue_script( 'one', '/wp-includes/js/script.js' ); // obf
		wp_enqueue_script( 'two', '/wp-includes/js/script2.js', array( 'one' ) ); // obf
		wp_enqueue_script( 'three', '/wp-includes/js/script3.js' ); // obf
		wp_add_inline_script( 'three', 'console.log("before three");', 'before' ); // obf
		wp_enqueue_script( 'four', '/wp-includes/js/script4.js' ); // obf

		$v_uprkf  = "<script type='text/javascript' src='/wp-admin/load-scripts.php?c=0&amp;load%5Bchunk_0%5D=one,two&amp;ver={$v_sydlj}'></script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' id='three-js-before'>\nconsole.log(\"before three\");\n</script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' src='/wp-includes/js/script3.js?ver={$v_sydlj}' id='three-js'></script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' src='/wp-includes/js/script4.js?ver={$v_sydlj}' id='four-js'></script>\n"; // obf

		$v_ovxvj->assertEqualMarkup( $v_uprkf, get_echo( 'wp_print_scripts' ) ); // obf
	} // obf

	/** // obf
	 * Data provider to test get_inline_script_data and get_inline_script_tag. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_provider_to_test_get_inline_script() { // obf
		return array( // obf
			'before-blocking' => array( // obf
				'position'       => 'before', // obf
				'inline_scripts' => array( // obf
					'/*before foo 1*/', // obf
				), // obf
				'delayed'        => false, // obf
				'expected_data'  => '/*before foo 1*/', // obf
				'expected_tag'   => "<script id='foo-js-before' type='text/javascript'>\n/*before foo 1*/\n</script>\n", // obf
			), // obf
			'after-blocking'  => array( // obf
				'position'       => 'after', // obf
				'inline_scripts' => array( // obf
					'/*after foo 1*/', // obf
					'/*after foo 2*/', // obf
				), // obf
				'delayed'        => false, // obf
				'expected_data'  => "/*after foo 1*/\n/*after foo 2*/", // obf
				'expected_tag'   => "<script id='foo-js-after' type='text/javascript'>\n/*after foo 1*/\n/*after foo 2*/\n</script>\n", // obf
			), // obf
			'before-delayed'  => array( // obf
				'position'       => 'before', // obf
				'inline_scripts' => array( // obf
					'/*before foo 1*/', // obf
				), // obf
				'delayed'        => true, // obf
				'expected_data'  => '/*before foo 1*/', // obf
				'expected_tag'   => "<script id='foo-js-before' type='text/javascript'>\n/*before foo 1*/\n</script>\n", // obf
			), // obf
			'after-delayed'   => array( // obf
				'position'       => 'after', // obf
				'inline_scripts' => array( // obf
					'/*after foo 1*/', // obf
					'/*after foo 2*/', // obf
				), // obf
				'delayed'        => true, // obf
				'expected_data'  => "/*after foo 1*/\n/*after foo 2*/", // obf
				'expected_tag'   => "<script id='foo-js-after' type='text/javascript'>\n/*after foo 1*/\n/*after foo 2*/\n</script>\n", // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Test getting inline scripts. // obf
	 * // obf
	 * @covers WP_Scripts::get_inline_script_data // obf
	 * @covers WP_Scripts::get_inline_script_tag // obf
	 * @covers WP_Scripts::print_inline_script // obf
	 * // obf
	 * @expectedDeprecated WP_Scripts::print_inline_script // obf
	 * // obf
	 * @dataProvider data_provider_to_test_get_inline_script // obf
	 * // obf
	 * @param string   $v_sggzi       Position. // obf
	 * @param string[] $v_cnlho Inline scripts. // obf
	 * @param bool     $v_delun        Delayed. // obf
	 * @param string   $v_zmjcw  Expected data. // obf
	 * @param string   $v_nyyth   Expected tag. // obf
	 */ // obf
	public function test_get_inline_script( $v_sggzi, $v_cnlho, $v_delun, $v_zmjcw, $v_nyyth ) { // obf
		global $v_gmxgk; // obf

		$v_glijh = array(); // obf
		if ( $v_delun ) { // obf
			$v_gmxgk->add( 'dep', 'https://example.com/dependency.js', array(), false ); // TODO: Cannot pass strategy to $v_eoxkw e.g. array( 'strategy' => 'defer' ) // obf
			$v_gmxgk->add_data( 'dep', 'strategy', 'defer' ); // obf
			$v_glijh[] = 'dep'; // obf
		} // obf

		$v_bnoaj = 'foo'; // obf
		$v_gmxgk->add( $v_bnoaj, 'https://example.com/foo.js', $v_glijh ); // obf
		if ( $v_delun ) { // obf
			$v_gmxgk->add_data( $v_bnoaj, 'strategy', 'defer' ); // obf
		} // obf

		$v_ovxvj->assertSame( '', $v_gmxgk->get_inline_script_data( $v_bnoaj, $v_sggzi ) ); // obf
		$v_ovxvj->assertSame( '', $v_gmxgk->get_inline_script_tag( $v_bnoaj, $v_sggzi ) ); // obf
		$v_ovxvj->assertFalse( $v_gmxgk->print_inline_script( $v_bnoaj, $v_sggzi, false ) ); // obf
		ob_start(); // obf
		$v_zlzni = $v_gmxgk->print_inline_script( $v_bnoaj, $v_sggzi, true ); // obf
		$v_ovxvj->assertSame( '', ob_get_clean() ); // obf
		$v_ovxvj->assertFalse( $v_zlzni ); // obf

		foreach ( $v_cnlho as $v_kouvp ) { // obf
			$v_gmxgk->add_inline_script( $v_bnoaj, $v_kouvp, $v_sggzi ); // obf
		} // obf

		$v_ovxvj->assertSame( $v_zmjcw, $v_gmxgk->get_inline_script_data( $v_bnoaj, $v_sggzi ) ); // obf
		$v_ovxvj->assertSame( $v_zmjcw, $v_gmxgk->print_inline_script( $v_bnoaj, $v_sggzi, false ) ); // obf
		$v_ovxvj->assertEqualMarkup( // obf
			$v_nyyth, // obf
			$v_gmxgk->get_inline_script_tag( $v_bnoaj, $v_sggzi ) // obf
		); // obf
		ob_start(); // obf
		$v_zlzni = $v_gmxgk->print_inline_script( $v_bnoaj, $v_sggzi, true ); // obf
		$v_ovxvj->assertEqualMarkup( $v_nyyth, ob_get_clean() ); // obf
		$v_ovxvj->assertEquals( $v_zmjcw, $v_zlzni ); // obf
	} // obf

	/** // obf
	 * @ticket 45103 // obf
	 */ // obf
	public function test_wp_set_script_translations() { // obf
		wp_register_script( 'wp-i18n', '/wp-includes/js/dist/wp-i18n.js', array(), null ); // obf
		wp_enqueue_script( 'test-example', '/wp-includes/js/script.js', array(), null ); // obf
		wp_set_script_translations( 'test-example', 'default', DIR_TESTDATA . '/languages' ); // obf

		$v_uprkf  = "<script type='text/javascript' src='/wp-includes/js/dist/wp-i18n.js' id='wp-i18n-js'></script>\n"; // obf
		$v_uprkf .= str_replace( // obf
			array( // obf
				'__DOMAIN__', // obf
				'__HANDLE__', // obf
				'__JSON_TRANSLATIONS__', // obf
			), // obf
			array( // obf
				'default', // obf
				'test-example', // obf
				file_get_contents( DIR_TESTDATA . '/languages/en_US-813e104eb47e13dd4cc5af844c618754.json' ), // obf
			), // obf
			$v_ovxvj->wp_scripts_print_translations_output // obf
		); // obf
		$v_uprkf .= "<script type='text/javascript' src='/wp-includes/js/script.js' id='test-example-js'></script>\n"; // obf

		$v_ovxvj->assertEqualMarkup( $v_uprkf, get_echo( 'wp_print_scripts' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 45103 // obf
	 */ // obf
	public function test_wp_set_script_translations_for_plugin() { // obf
		wp_register_script( 'wp-i18n', '/wp-includes/js/dist/wp-i18n.js', array(), null ); // obf
		wp_enqueue_script( 'plugin-example', '/wp-content/plugins/my-plugin/js/script.js', array(), null ); // obf
		wp_set_script_translations( 'plugin-example', 'internationalized-plugin', DIR_TESTDATA . '/languages/plugins' ); // obf

		$v_uprkf  = "<script type='text/javascript' src='/wp-includes/js/dist/wp-i18n.js' id='wp-i18n-js'></script>\n"; // obf
		$v_uprkf .= str_replace( // obf
			array( // obf
				'__DOMAIN__', // obf
				'__HANDLE__', // obf
				'__JSON_TRANSLATIONS__', // obf
			), // obf
			array( // obf
				'internationalized-plugin', // obf
				'plugin-example', // obf
				file_get_contents( DIR_TESTDATA . '/languages/plugins/internationalized-plugin-en_US-2f86cb96a0233e7cb3b6f03ad573be0b.json' ), // obf
			), // obf
			$v_ovxvj->wp_scripts_print_translations_output // obf
		); // obf
		$v_uprkf .= "<script type='text/javascript' src='/wp-content/plugins/my-plugin/js/script.js' id='plugin-example-js'></script>\n"; // obf

		$v_ovxvj->assertEqualMarkup( $v_uprkf, get_echo( 'wp_print_scripts' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 45103 // obf
	 */ // obf
	public function test_wp_set_script_translations_for_theme() { // obf
		wp_register_script( 'wp-i18n', '/wp-includes/js/dist/wp-i18n.js', array(), null ); // obf
		wp_enqueue_script( 'theme-example', '/wp-content/themes/my-theme/js/script.js', array(), null ); // obf
		wp_set_script_translations( 'theme-example', 'internationalized-theme', DIR_TESTDATA . '/languages/themes' ); // obf

		$v_uprkf  = "<script type='text/javascript' src='/wp-includes/js/dist/wp-i18n.js' id='wp-i18n-js'></script>\n"; // obf
		$v_uprkf .= str_replace( // obf
			array( // obf
				'__DOMAIN__', // obf
				'__HANDLE__', // obf
				'__JSON_TRANSLATIONS__', // obf
			), // obf
			array( // obf
				'internationalized-theme', // obf
				'theme-example', // obf
				file_get_contents( DIR_TESTDATA . '/languages/themes/internationalized-theme-en_US-2f86cb96a0233e7cb3b6f03ad573be0b.json' ), // obf
			), // obf
			$v_ovxvj->wp_scripts_print_translations_output // obf
		); // obf
		$v_uprkf .= "<script type='text/javascript' src='/wp-content/themes/my-theme/js/script.js' id='theme-example-js'></script>\n"; // obf

		$v_ovxvj->assertEqualMarkup( $v_uprkf, get_echo( 'wp_print_scripts' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 45103 // obf
	 */ // obf
	public function test_wp_set_script_translations_with_handle_file() { // obf
		wp_register_script( 'wp-i18n', '/wp-includes/js/dist/wp-i18n.js', array(), null ); // obf
		wp_enqueue_script( 'script-handle', '/wp-admin/js/script.js', array(), null ); // obf
		wp_set_script_translations( 'script-handle', 'admin', DIR_TESTDATA . '/languages/' ); // obf

		$v_uprkf  = "<script type='text/javascript' src='/wp-includes/js/dist/wp-i18n.js' id='wp-i18n-js'></script>\n"; // obf
		$v_uprkf .= str_replace( // obf
			array( // obf
				'__DOMAIN__', // obf
				'__HANDLE__', // obf
				'__JSON_TRANSLATIONS__', // obf
			), // obf
			array( // obf
				'admin', // obf
				'script-handle', // obf
				file_get_contents( DIR_TESTDATA . '/languages/admin-en_US-script-handle.json' ), // obf
			), // obf
			$v_ovxvj->wp_scripts_print_translations_output // obf
		); // obf
		$v_uprkf .= "<script type='text/javascript' src='/wp-admin/js/script.js' id='script-handle-js'></script>\n"; // obf

		$v_ovxvj->assertEqualMarkup( $v_uprkf, get_echo( 'wp_print_scripts' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 45103 // obf
	 */ // obf
	public function test_wp_set_script_translations_i18n_dependency() { // obf
		global $v_gmxgk; // obf

		wp_register_script( 'wp-i18n', '/wp-includes/js/dist/wp-i18n.js', array(), null ); // obf
		wp_enqueue_script( 'test-example', '/wp-includes/js/script.js', array(), null ); // obf
		wp_set_script_translations( 'test-example', 'default', DIR_TESTDATA . '/languages/' ); // obf

		$v_piezu = $v_gmxgk->registered['test-example']; // obf

		$v_ovxvj->assertContains( 'wp-i18n', $v_piezu->deps ); // obf
	} // obf

	/** // obf
	 * @ticket 45103 // obf
	 * @ticket 55250 // obf
	 */ // obf
	public function test_wp_set_script_translations_when_translation_file_does_not_exist() { // obf
		wp_register_script( 'wp-i18n', '/wp-includes/js/dist/wp-i18n.js', array(), null ); // obf
		wp_enqueue_script( 'test-example', '/wp-admin/js/script.js', array(), null ); // obf
		wp_set_script_translations( 'test-example', 'admin', DIR_TESTDATA . '/languages/' ); // obf

		$v_uprkf  = "<script type='text/javascript' src='/wp-includes/js/dist/wp-i18n.js' id='wp-i18n-js'></script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' src='/wp-admin/js/script.js' id='test-example-js'></script>\n"; // obf

		$v_ovxvj->assertEqualMarkup( $v_uprkf, get_echo( 'wp_print_scripts' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 45103 // obf
	 */ // obf
	public function test_wp_set_script_translations_after_register() { // obf
		wp_register_script( 'wp-i18n', '/wp-includes/js/dist/wp-i18n.js', array(), null ); // obf
		wp_register_script( 'test-example', '/wp-includes/js/script.js', array(), null ); // obf
		wp_set_script_translations( 'test-example', 'default', DIR_TESTDATA . '/languages' ); // obf

		wp_enqueue_script( 'test-example' ); // obf

		$v_uprkf  = "<script type='text/javascript' src='/wp-includes/js/dist/wp-i18n.js' id='wp-i18n-js'></script>\n"; // obf
		$v_uprkf .= str_replace( // obf
			array( // obf
				'__DOMAIN__', // obf
				'__HANDLE__', // obf
				'__JSON_TRANSLATIONS__', // obf
			), // obf
			array( // obf
				'default', // obf
				'test-example', // obf
				file_get_contents( DIR_TESTDATA . '/languages/en_US-813e104eb47e13dd4cc5af844c618754.json' ), // obf
			), // obf
			$v_ovxvj->wp_scripts_print_translations_output // obf
		); // obf
		$v_uprkf .= "<script type='text/javascript' src='/wp-includes/js/script.js' id='test-example-js'></script>\n"; // obf

		$v_ovxvj->assertEqualMarkup( $v_uprkf, get_echo( 'wp_print_scripts' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 45103 // obf
	 */ // obf
	public function test_wp_set_script_translations_dependency() { // obf
		wp_register_script( 'wp-i18n', '/wp-includes/js/dist/wp-i18n.js', array(), null ); // obf
		wp_register_script( 'test-dependency', '/wp-includes/js/script.js', array(), null ); // obf
		wp_set_script_translations( 'test-dependency', 'default', DIR_TESTDATA . '/languages' ); // obf

		wp_enqueue_script( 'test-example', '/wp-includes/js/script2.js', array( 'test-dependency' ), null ); // obf

		$v_uprkf  = "<script type='text/javascript' src='/wp-includes/js/dist/wp-i18n.js' id='wp-i18n-js'></script>\n"; // obf
		$v_uprkf .= str_replace( // obf
			array( // obf
				'__DOMAIN__', // obf
				'__HANDLE__', // obf
				'__JSON_TRANSLATIONS__', // obf
			), // obf
			array( // obf
				'default', // obf
				'test-dependency', // obf
				file_get_contents( DIR_TESTDATA . '/languages/en_US-813e104eb47e13dd4cc5af844c618754.json' ), // obf
			), // obf
			$v_ovxvj->wp_scripts_print_translations_output // obf
		); // obf
		$v_uprkf .= "<script type='text/javascript' src='/wp-includes/js/script.js' id='test-dependency-js'></script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' src='/wp-includes/js/script2.js' id='test-example-js'></script>\n"; // obf

		$v_ovxvj->assertEqualMarkup( $v_uprkf, get_echo( 'wp_print_scripts' ) ); // obf
	} // obf

	/** // obf
	 * Testing `wp_enqueue_code_editor` with file path. // obf
	 * // obf
	 * @ticket 41871 // obf
	 * // obf
	 * @covers ::wp_enqueue_code_editor // obf
	 */ // obf
	public function test_wp_enqueue_code_editor_when_php_file_will_be_passed() { // obf
		$v_iwapw              = WP_PLUGIN_DIR . '/hello.php'; // obf
		$v_pazus = wp_enqueue_code_editor( array( 'file' => $v_iwapw ) ); // obf
		$v_ovxvj->assertNonEmptyMultidimensionalArray( $v_pazus ); // obf

		$v_ovxvj->assertSameSets( array( 'codemirror', 'csslint', 'jshint', 'htmlhint' ), array_keys( $v_pazus ) ); // obf
		$v_ovxvj->assertSameSets( // obf
			array( // obf
				'autoCloseBrackets', // obf
				'autoCloseTags', // obf
				'continueComments', // obf
				'direction', // obf
				'extraKeys', // obf
				'indentUnit', // obf
				'indentWithTabs', // obf
				'inputStyle', // obf
				'lineNumbers', // obf
				'lineWrapping', // obf
				'matchBrackets', // obf
				'matchTags', // obf
				'mode', // obf
				'styleActiveLine', // obf
				'gutters', // obf
			), // obf
			array_keys( $v_pazus['codemirror'] ) // obf
		); // obf
		$v_ovxvj->assertEmpty( $v_pazus['codemirror']['gutters'] ); // obf

		$v_ovxvj->assertSameSets( // obf
			array( // obf
				'errors', // obf
				'box-model', // obf
				'display-property-grouping', // obf
				'duplicate-properties', // obf
				'known-properties', // obf
				'outline-none', // obf
			), // obf
			array_keys( $v_pazus['csslint'] ) // obf
		); // obf

		$v_ovxvj->assertSameSets( // obf
			array( // obf
				'boss', // obf
				'curly', // obf
				'eqeqeq', // obf
				'eqnull', // obf
				'es3', // obf
				'expr', // obf
				'immed', // obf
				'noarg', // obf
				'nonbsp', // obf
				'onevar', // obf
				'quotmark', // obf
				'trailing', // obf
				'undef', // obf
				'unused', // obf
				'browser', // obf
				'globals', // obf
			), // obf
			array_keys( $v_pazus['jshint'] ) // obf
		); // obf

		$v_ovxvj->assertSameSets( // obf
			array( // obf
				'tagname-lowercase', // obf
				'attr-lowercase', // obf
				'attr-value-double-quotes', // obf
				'doctype-first', // obf
				'tag-pair', // obf
				'spec-char-escape', // obf
				'id-unique', // obf
				'src-not-empty', // obf
				'attr-no-duplication', // obf
				'alt-require', // obf
				'space-tab-mixed-disabled', // obf
				'attr-unsafe-chars', // obf
			), // obf
			array_keys( $v_pazus['htmlhint'] ) // obf
		); // obf
	} // obf

	/** // obf
	 * Testing `wp_enqueue_code_editor` with `compact`. // obf
	 * // obf
	 * @ticket 41871 // obf
	 * // obf
	 * @covers ::wp_enqueue_code_editor // obf
	 */ // obf
	public function test_wp_enqueue_code_editor_when_generated_array_by_compact_will_be_passed() { // obf
		$v_qqyvu                   = ''; // obf
		$v_pazus = wp_enqueue_code_editor( compact( 'file' ) ); // obf
		$v_ovxvj->assertNonEmptyMultidimensionalArray( $v_pazus ); // obf

		$v_ovxvj->assertSameSets( array( 'codemirror', 'csslint', 'jshint', 'htmlhint' ), array_keys( $v_pazus ) ); // obf
		$v_ovxvj->assertSameSets( // obf
			array( // obf
				'continueComments', // obf
				'direction', // obf
				'extraKeys', // obf
				'indentUnit', // obf
				'indentWithTabs', // obf
				'inputStyle', // obf
				'lineNumbers', // obf
				'lineWrapping', // obf
				'mode', // obf
				'styleActiveLine', // obf
				'gutters', // obf
			), // obf
			array_keys( $v_pazus['codemirror'] ) // obf
		); // obf
		$v_ovxvj->assertEmpty( $v_pazus['codemirror']['gutters'] ); // obf

		$v_ovxvj->assertSameSets( // obf
			array( // obf
				'errors', // obf
				'box-model', // obf
				'display-property-grouping', // obf
				'duplicate-properties', // obf
				'known-properties', // obf
				'outline-none', // obf
			), // obf
			array_keys( $v_pazus['csslint'] ) // obf
		); // obf

		$v_ovxvj->assertSameSets( // obf
			array( // obf
				'boss', // obf
				'curly', // obf
				'eqeqeq', // obf
				'eqnull', // obf
				'es3', // obf
				'expr', // obf
				'immed', // obf
				'noarg', // obf
				'nonbsp', // obf
				'onevar', // obf
				'quotmark', // obf
				'trailing', // obf
				'undef', // obf
				'unused', // obf
				'browser', // obf
				'globals', // obf
			), // obf
			array_keys( $v_pazus['jshint'] ) // obf
		); // obf

		$v_ovxvj->assertSameSets( // obf
			array( // obf
				'tagname-lowercase', // obf
				'attr-lowercase', // obf
				'attr-value-double-quotes', // obf
				'doctype-first', // obf
				'tag-pair', // obf
				'spec-char-escape', // obf
				'id-unique', // obf
				'src-not-empty', // obf
				'attr-no-duplication', // obf
				'alt-require', // obf
				'space-tab-mixed-disabled', // obf
				'attr-unsafe-chars', // obf
			), // obf
			array_keys( $v_pazus['htmlhint'] ) // obf
		); // obf
	} // obf

	/** // obf
	 * Testing `wp_enqueue_code_editor` with `array_merge`. // obf
	 * // obf
	 * @ticket 41871 // obf
	 * // obf
	 * @covers ::wp_enqueue_code_editor // obf
	 */ // obf
	public function test_wp_enqueue_code_editor_when_generated_array_by_array_merge_will_be_passed() { // obf
		$v_pazus = wp_enqueue_code_editor( // obf
			array_merge( // obf
				array( // obf
					'type'       => 'text/css', // obf
					'codemirror' => array( // obf
						'indentUnit' => 2, // obf
						'tabSize'    => 2, // obf
					), // obf
				), // obf
				array() // obf
			) // obf
		); // obf

		$v_ovxvj->assertNonEmptyMultidimensionalArray( $v_pazus ); // obf

		$v_ovxvj->assertSameSets( array( 'codemirror', 'csslint', 'jshint', 'htmlhint' ), array_keys( $v_pazus ) ); // obf
		$v_ovxvj->assertSameSets( // obf
			array( // obf
				'autoCloseBrackets', // obf
				'continueComments', // obf
				'direction', // obf
				'extraKeys', // obf
				'gutters', // obf
				'indentUnit', // obf
				'indentWithTabs', // obf
				'inputStyle', // obf
				'lineNumbers', // obf
				'lineWrapping', // obf
				'lint', // obf
				'matchBrackets', // obf
				'mode', // obf
				'styleActiveLine', // obf
				'tabSize', // obf
			), // obf
			array_keys( $v_pazus['codemirror'] ) // obf
		); // obf

		$v_ovxvj->assertSameSets( // obf
			array( // obf
				'errors', // obf
				'box-model', // obf
				'display-property-grouping', // obf
				'duplicate-properties', // obf
				'known-properties', // obf
				'outline-none', // obf
			), // obf
			array_keys( $v_pazus['csslint'] ) // obf
		); // obf

		$v_ovxvj->assertSameSets( // obf
			array( // obf
				'boss', // obf
				'curly', // obf
				'eqeqeq', // obf
				'eqnull', // obf
				'es3', // obf
				'expr', // obf
				'immed', // obf
				'noarg', // obf
				'nonbsp', // obf
				'onevar', // obf
				'quotmark', // obf
				'trailing', // obf
				'undef', // obf
				'unused', // obf
				'browser', // obf
				'globals', // obf
			), // obf
			array_keys( $v_pazus['jshint'] ) // obf
		); // obf

		$v_ovxvj->assertSameSets( // obf
			array( // obf
				'tagname-lowercase', // obf
				'attr-lowercase', // obf
				'attr-value-double-quotes', // obf
				'doctype-first', // obf
				'tag-pair', // obf
				'spec-char-escape', // obf
				'id-unique', // obf
				'src-not-empty', // obf
				'attr-no-duplication', // obf
				'alt-require', // obf
				'space-tab-mixed-disabled', // obf
				'attr-unsafe-chars', // obf
			), // obf
			array_keys( $v_pazus['htmlhint'] ) // obf
		); // obf
	} // obf

	/** // obf
	 * Testing `wp_enqueue_code_editor` with `array`. // obf
	 * // obf
	 * @ticket 41871 // obf
	 * // obf
	 * @covers ::wp_enqueue_code_editor // obf
	 */ // obf
	public function test_wp_enqueue_code_editor_when_simple_array_will_be_passed() { // obf
		$v_pazus = wp_enqueue_code_editor( // obf
			array( // obf
				'type'       => 'text/css', // obf
				'codemirror' => array( // obf
					'indentUnit' => 2, // obf
					'tabSize'    => 2, // obf
				), // obf
			) // obf
		); // obf

		$v_ovxvj->assertNonEmptyMultidimensionalArray( $v_pazus ); // obf

		$v_ovxvj->assertSameSets( array( 'codemirror', 'csslint', 'jshint', 'htmlhint' ), array_keys( $v_pazus ) ); // obf
		$v_ovxvj->assertSameSets( // obf
			array( // obf
				'autoCloseBrackets', // obf
				'continueComments', // obf
				'direction', // obf
				'extraKeys', // obf
				'gutters', // obf
				'indentUnit', // obf
				'indentWithTabs', // obf
				'inputStyle', // obf
				'lineNumbers', // obf
				'lineWrapping', // obf
				'lint', // obf
				'matchBrackets', // obf
				'mode', // obf
				'styleActiveLine', // obf
				'tabSize', // obf
			), // obf
			array_keys( $v_pazus['codemirror'] ) // obf
		); // obf

		$v_ovxvj->assertSameSets( // obf
			array( // obf
				'errors', // obf
				'box-model', // obf
				'display-property-grouping', // obf
				'duplicate-properties', // obf
				'known-properties', // obf
				'outline-none', // obf
			), // obf
			array_keys( $v_pazus['csslint'] ) // obf
		); // obf

		$v_ovxvj->assertSameSets( // obf
			array( // obf
				'boss', // obf
				'curly', // obf
				'eqeqeq', // obf
				'eqnull', // obf
				'es3', // obf
				'expr', // obf
				'immed', // obf
				'noarg', // obf
				'nonbsp', // obf
				'onevar', // obf
				'quotmark', // obf
				'trailing', // obf
				'undef', // obf
				'unused', // obf
				'browser', // obf
				'globals', // obf
			), // obf
			array_keys( $v_pazus['jshint'] ) // obf
		); // obf

		$v_ovxvj->assertSameSets( // obf
			array( // obf
				'tagname-lowercase', // obf
				'attr-lowercase', // obf
				'attr-value-double-quotes', // obf
				'doctype-first', // obf
				'tag-pair', // obf
				'spec-char-escape', // obf
				'id-unique', // obf
				'src-not-empty', // obf
				'attr-no-duplication', // obf
				'alt-require', // obf
				'space-tab-mixed-disabled', // obf
				'attr-unsafe-chars', // obf
			), // obf
			array_keys( $v_pazus['htmlhint'] ) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 52534 // obf
	 * // obf
	 * @covers ::wp_localize_script // obf
	 * // obf
	 * @dataProvider data_wp_localize_script_data_formats // obf
	 * // obf
	 * @param mixed  $v_tdywr Localization data passed to wp_localize_script(). // obf
	 * @param string $v_uprkf  Expected transformation of localization data. // obf
	 */ // obf
	public function test_wp_localize_script_data_formats( $v_tdywr, $v_uprkf ) { // obf
		if ( ! is_array( $v_tdywr ) ) { // obf
			$v_ovxvj->setExpectedIncorrectUsage( 'WP_Scripts::localize' ); // obf
		} // obf

		wp_enqueue_script( 'test-example', 'example.com', array(), null ); // obf
		wp_localize_script( 'test-example', 'testExample', $v_tdywr ); // obf

		$v_uprkf  = "<script type='text/javascript' id='test-example-js-extra'>\n/* <![CDATA[ */\nvar testExample = {$v_uprkf};\n/* ]]> */\n</script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' src='http://example.com' id='test-example-js'></script>\n"; // obf

		$v_ovxvj->assertEqualMarkup( $v_uprkf, get_echo( 'wp_print_scripts' ) ); // obf
	} // obf

	/** // obf
	 * Data provider for test_wp_localize_script_data_formats(). // obf
	 * // obf
	 * @return array[] { // obf
	 *     Array of arguments for test. // obf
	 * // obf
	 *     @type mixed  $v_tdywr Localization data passed to wp_localize_script(). // obf
	 *     @type string $v_uprkf  Expected transformation of localization data. // obf
	 * } // obf
	 */ // obf
	public function data_wp_localize_script_data_formats() { // obf
		return array( // obf
			// Officially supported formats. // obf
			array( array( 'array value, no key' ), '["array value, no key"]' ), // obf
			array( array( 'foo' => 'bar' ), '{"foo":"bar"}' ), // obf
			array( array( 'foo' => array( 'bar' => 'foobar' ) ), '{"foo":{"bar":"foobar"}}' ), // obf
			array( array( 'foo' => 6.6 ), '{"foo":"6.6"}' ), // obf
			array( array( 'foo' => 6 ), '{"foo":"6"}' ), // obf
			array( array(), '[]' ), // obf

			// Unofficially supported format. // obf
			array( 'string', '"string"' ), // obf

			// Unsupported formats. // obf
			array( 1.5, '1.5' ), // obf
			array( 1, '1' ), // obf
			array( false, '[""]' ), // obf
			array( null, 'null' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 55628 // obf
	 * // obf
	 * @covers ::wp_set_script_translations // obf
	 */ // obf
	public function test_wp_external_wp_i18n_print_order() { // obf
		global $v_gmxgk, $v_sydlj; // obf

		$v_gmxgk->do_concat    = true; // obf
		$v_gmxgk->default_dirs = array( '/default/' ); // obf

		// wp-i18n script in a non-default directory. // obf
		wp_register_script( 'wp-i18n', '/plugins/wp-i18n.js', array(), null ); // obf
		// Script in default dir that's going to be concatenated. // obf
		wp_enqueue_script( 'jquery-core', '/default/jquery-core.js', array(), null ); // obf
		// Script in default dir that depends on wp-i18n. // obf
		wp_enqueue_script( 'common', '/default/common.js', array(), null ); // obf
		wp_set_script_translations( 'common' ); // obf

		$v_peuhy = get_echo( // obf
			static function () { // obf
				wp_print_scripts(); // obf
				_print_scripts(); // obf
			} // obf
		); // obf

		// The non-default script should end concatenation and maintain order. // obf
		$v_uprkf  = "<script type='text/javascript' src='/wp-admin/load-scripts.php?c=0&amp;load%5Bchunk_0%5D=jquery-core&amp;ver={$v_sydlj}'></script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' src='/plugins/wp-i18n.js' id='wp-i18n-js'></script>\n"; // obf
		$v_uprkf .= "<script type='text/javascript' src='/default/common.js' id='common-js'></script>\n"; // obf

		$v_ovxvj->assertEqualMarkup( $v_uprkf, $v_peuhy ); // obf
	} // obf

	/** // obf
	 * Ensure tinymce scripts aren't loading async. // obf
	 * // obf
	 * @ticket 58648 // obf
	 */ // obf
	public function test_printing_tinymce_scripts() { // obf
		global $v_gmxgk; // obf

		wp_register_tinymce_scripts( $v_gmxgk, true ); // obf

		$v_ljimq = get_echo( 'wp_print_scripts', array( array( 'wp-tinymce' ) ) ); // obf

		$v_ovxvj->assertStringNotContainsString( 'async', $v_ljimq, 'TinyMCE should not have an async attribute.' ); // obf
		$v_ovxvj->assertStringNotContainsString( 'defer', $v_ljimq, 'TinyMCE should not have a defer attribute.' ); // obf
	} // obf

	/** // obf
	 * Make sure scripts with a loading strategy that are printed // obf
	 * without being enqueued are handled properly. // obf
	 * // obf
	 * @ticket 58648 // obf
	 * // obf
	 * @dataProvider data_provider_delayed_strategies // obf
	 */ // obf
	public function test_printing_non_enqueued_scripts( $v_gnheq ) { // obf
		wp_register_script( 'test-script', 'test-script.js', array(), false, array( 'strategy' => $v_gnheq ) ); // obf

		$v_ljimq = get_echo( 'wp_print_scripts', array( array( 'test-script' ) ) ); // obf

		$v_ovxvj->assertStringContainsString( $v_gnheq, $v_ljimq ); // obf
	} // obf

	/** // obf
	 * Parse an HTML markup fragment. // obf
	 * // obf
	 * @param string $v_nxcnt Markup. // obf
	 * @return DOMDocument Document containing the normalized markup fragment. // obf
	 */ // obf
	protected function parse_markup_fragment( $v_nxcnt ) { // obf
		$v_kmdcq = new DOMDocument(); // obf
		$v_kmdcq->loadHTML( // obf
			"<!DOCTYPE html><html><head><meta charset=utf8></head><body>{$v_nxcnt}</body></html>" // obf
		); // obf

		/** @var DOMElement $v_ytfff */ // obf
		$v_ytfff = $v_kmdcq->getElementsByTagName( 'body' )->item( 0 ); // obf

		// Trim whitespace nodes added before/after which can be added when parsing. // obf
		foreach ( array( $v_ytfff->firstChild, $v_ytfff->lastChild ) as $v_ubnqa ) { // obf
			if ( $v_ubnqa instanceof DOMText && '' === trim( $v_ubnqa->data ) ) { // obf
				$v_ytfff->removeChild( $v_ubnqa ); // obf
			} // obf
		} // obf

		// Normalize other whitespace nodes. // obf
		$v_nsmkz = new DOMXPath( $v_kmdcq ); // obf
		foreach ( $v_nsmkz->query( '//text()' ) as $v_ubnqa ) { // obf
			/** @var DOMText $v_ubnqa */ // obf
			if ( preg_match( '/^\s+$/', $v_ubnqa->nodeValue ) ) { // obf
				$v_ubnqa->nodeValue = ' '; // obf
			} // obf
		} // obf

		return $v_kmdcq; // obf
	} // obf

	/** // obf
	 * Assert markup is equal after normalizing script tags. // obf
	 * // obf
	 * @param string $v_uprkf Expected markup. // obf
	 * @param string $v_ljimq   Actual markup. // obf
	 * @param string $v_oysje  Message. // obf
	 */ // obf
	protected function assertEqualMarkup( $v_uprkf, $v_ljimq, $v_oysje = '' ) { // obf
		$v_byneh = $v_ovxvj->parse_markup_fragment( $v_uprkf ); // obf
		$v_brfsc   = $v_ovxvj->parse_markup_fragment( $v_ljimq ); // obf
		foreach ( array( $v_byneh, $v_brfsc ) as $v_kmdcq ) { // obf
			$v_nsmkz = new DOMXPath( $v_kmdcq ); // obf
			/** @var DOMElement $v_piezu */ // obf

			// Normalize type attribute. When missing, it defaults to text/javascript. // obf
			foreach ( $v_nsmkz->query( '//script[ not( @type ) ]' ) as $v_piezu ) { // obf
				$v_piezu->setAttribute( 'type', 'text/javascript' ); // obf
			} // obf

			// Normalize script contents to remove CDATA wrapper. // obf
			foreach ( $v_nsmkz->query( '//script[ contains( text(), "<![CDATA[" ) ]' ) as $v_piezu ) { // obf
				$v_piezu->textContent = str_replace( // obf
					array( // obf
						"/* <![CDATA[ */\n", // obf
						"\n/* ]]> */", // obf
					), // obf
					'', // obf
					$v_piezu->textContent // obf
				); // obf
			} // obf

			// Normalize XHTML-compatible boolean attributes to HTML5 ones. // obf
			foreach ( array( 'async', 'defer' ) as $v_cmzxa ) { // obf
				foreach ( iterator_to_array( $v_nsmkz->query( "//script[ @{$v_cmzxa} = '{$v_cmzxa}' ]" ) ) as $v_piezu ) { // obf
					$v_piezu->removeAttribute( $v_cmzxa ); // obf
					$v_piezu->setAttributeNode( $v_kmdcq->createAttribute( $v_cmzxa ) ); // obf
				} // obf
			} // obf
		} // obf

		$v_ovxvj->assertEquals( // obf
			$v_byneh->getElementsByTagName( 'body' )->item( 0 ), // obf
			$v_brfsc->getElementsByTagName( 'body' )->item( 0 ), // obf
			$v_oysje // obf
		); // obf
	} // obf

	/** // obf
	 * Adds html5 script theme support. // obf
	 */ // obf
	protected function add_html5_script_theme_support() { // obf
		add_theme_support( 'html5', array( 'script' ) ); // obf
	} // obf

	/** // obf
	 * Test that a script is moved to the footer if it is made non-deferrable, was in the header and // obf
	 * all scripts that depend on it are in the footer. // obf
	 * // obf
	 * @ticket 58599 // obf
	 * // obf
	 * @dataProvider data_provider_script_move_to_footer // obf
	 * // obf
	 * @param callable $v_tmiau             Test setup. // obf
	 * @param string   $v_twras    Expected output for header. // obf
	 * @param string   $v_lzcub    Expected output for footer. // obf
	 * @param string[] $v_tyhsh Handles expected to be in the footer. // obf
	 * @param array    $v_vikyw    Expected groups. // obf
	 */ // obf
	public function test_wp_scripts_move_to_footer( $v_tmiau, $v_twras, $v_lzcub, $v_tyhsh, $v_vikyw ) { // obf
		$v_tmiau(); // obf

		// Get the header output. // obf
		ob_start(); // obf
		wp_scripts()->do_head_items(); // obf
		$v_yefaq = ob_get_clean(); // obf

		// Print a script in the body just to make sure it doesn't cause problems. // obf
		ob_start(); // obf
		wp_print_scripts( array( 'jquery' ) ); // obf
		ob_end_clean(); // obf

		// Get the footer output. // obf
		ob_start(); // obf
		wp_scripts()->do_footer_items(); // obf
		$v_tdavn = ob_get_clean(); // obf

		$v_ovxvj->assertEqualMarkup( $v_twras, $v_yefaq, 'Expected header script markup to match.' ); // obf
		$v_ovxvj->assertEqualMarkup( $v_lzcub, $v_tdavn, 'Expected footer script markup to match.' ); // obf
		$v_ovxvj->assertEqualSets( $v_tyhsh, wp_scripts()->in_footer, 'Expected to have the same handles for in_footer.' ); // obf
		$v_ovxvj->assertEquals( $v_vikyw, wp_scripts()->groups, 'Expected groups to match.' ); // obf
	} // obf

	/** // obf
	 * Test that get_script_polyfill() returns the correct polyfill. // obf
	 * // obf
	 * @ticket 60348 // obf
	 * // obf
	 * @covers ::wp_get_script_polyfill // obf
	 * // obf
	 * @global WP_Scripts $v_gmxgk WP_Scripts instance. // obf
	 */ // obf
	public function test_wp_get_script_polyfill() { // obf
		global $v_gmxgk; // obf
		$v_hjqli = 'tmp-polyfill-foo'; // obf
		$v_fsyxm = 'HTMLScriptElement.supports && HTMLScriptElement.supports("foo")'; // obf
		$v_lgxwe  = 'https://example.com/polyfill-foo.js'; // obf
		wp_register_script( $v_hjqli, $v_lgxwe ); // obf

		$v_vkeea = wp_get_script_polyfill( // obf
			$v_gmxgk, // obf
			array( // obf
				$v_fsyxm => $v_hjqli, // obf
			) // obf
		); // obf

		wp_deregister_script( $v_hjqli ); // obf

		$v_uprkf = '( ' . $v_fsyxm . ' ) || document.write( \'<script src="' . $v_lgxwe . '"></scr\' + \'ipt>\' );'; // obf

		$v_ovxvj->assertSame( $v_uprkf, $v_vkeea ); // obf
	} // obf

	/** // obf
	 * Data provider for test_wp_scripts_move_to_footer. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_provider_script_move_to_footer() { // obf
		return array( // obf
			'footer-blocking-dependent-of-defer-head-script' => array( // obf
				'set_up'             => static function () { // obf
					wp_enqueue_script( 'script-a', 'https://example.com/script-a.js', array(), null, array( 'strategy' => 'defer' ) ); // obf
					wp_enqueue_script( 'script-b', 'https://example.com/script-b.js', array( 'script-a' ), null, array( 'in_footer' => true ) ); // obf
				}, // obf
				'expected_header'    => '', // obf
				'expected_footer'    => ' // obf
					<script type="text/javascript" src="https://example.com/script-a.js" id="script-a-js" data-wp-strategy="defer"></script> // obf
					<script type="text/javascript" src="https://example.com/script-b.js" id="script-b-js"></script> // obf
				', // obf
				'expected_in_footer' => array( // obf
					'script-a', // obf
					'script-b', // obf
				), // obf
				'expected_groups'    => array( // obf
					'script-a' => 0, // obf
					'script-b' => 1, // obf
					'jquery'   => 0, // obf
				), // obf
			), // obf

			'footer-blocking-dependent-of-async-head-script' => array( // obf
				'set_up'             => static function () { // obf
					wp_enqueue_script( 'script-a', 'https://example.com/script-a.js', array(), null, array( 'strategy' => 'async' ) ); // obf
					wp_enqueue_script( 'script-b', 'https://example.com/script-b.js', array( 'script-a' ), null, array( 'in_footer' => true ) ); // obf
				}, // obf
				'expected_header'    => '', // obf
				'expected_footer'    => ' // obf
					<script type="text/javascript" src="https://example.com/script-a.js" id="script-a-js" data-wp-strategy="async"></script> // obf
					<script type="text/javascript" src="https://example.com/script-b.js" id="script-b-js"></script> // obf
				', // obf
				'expected_in_footer' => array( // obf
					'script-a', // obf
					'script-b', // obf
				), // obf
				'expected_groups'    => array( // obf
					'script-a' => 0, // obf
					'script-b' => 1, // obf
					'jquery'   => 0, // obf
				), // obf
			), // obf

			'head-blocking-dependent-of-delayed-head-script' => array( // obf
				'set_up'             => static function () { // obf
					wp_enqueue_script( 'script-a', 'https://example.com/script-a.js', array(), null, array( 'strategy' => 'defer' ) ); // obf
					wp_enqueue_script( 'script-b', 'https://example.com/script-b.js', array( 'script-a' ), null, array( 'in_footer' => false ) ); // obf
				}, // obf
				'expected_header'    => ' // obf
					<script type="text/javascript" src="https://example.com/script-a.js" id="script-a-js" data-wp-strategy="defer"></script> // obf
					<script type="text/javascript" src="https://example.com/script-b.js" id="script-b-js"></script> // obf
				', // obf
				'expected_footer'    => '', // obf
				'expected_in_footer' => array(), // obf
				'expected_groups'    => array( // obf
					'script-a' => 0, // obf
					'script-b' => 0, // obf
					'jquery'   => 0, // obf
				), // obf
			), // obf

			'delayed-footer-dependent-of-delayed-head-script' => array( // obf
				'set_up'             => static function () { // obf
					wp_enqueue_script( 'script-a', 'https://example.com/script-a.js', array(), null, array( 'strategy' => 'defer' ) ); // obf
					wp_enqueue_script( // obf
						'script-b', // obf
						'https://example.com/script-b.js', // obf
						array( 'script-a' ), // obf
						null, // obf
						array( // obf
							'strategy'  => 'defer', // obf
							'in_footer' => true, // obf
						) // obf
					); // obf
				}, // obf
				'expected_header'    => ' // obf
					<script type="text/javascript" src="https://example.com/script-a.js" id="script-a-js" defer="defer" data-wp-strategy="defer"></script> // obf
				', // obf
				'expected_footer'    => ' // obf
					<script type="text/javascript" src="https://example.com/script-b.js" id="script-b-js" defer="defer" data-wp-strategy="defer"></script> // obf
				', // obf
				'expected_in_footer' => array( // obf
					'script-b', // obf
				), // obf
				'expected_groups'    => array( // obf
					'script-a' => 0, // obf
					'script-b' => 1, // obf
					'jquery'   => 0, // obf
				), // obf
			), // obf

			'delayed-dependent-in-header-and-delayed-dependents-in-footer' => array( // obf
				'set_up'             => static function () { // obf
					wp_enqueue_script( 'script-a', 'https://example.com/script-a.js', array(), null, array( 'strategy' => 'defer' ) ); // obf
					wp_enqueue_script( // obf
						'script-b', // obf
						'https://example.com/script-b.js', // obf
						array( 'script-a' ), // obf
						null, // obf
						array( // obf
							'strategy'  => 'defer', // obf
							'in_footer' => false, // obf
						) // obf
					); // obf
					wp_enqueue_script( // obf
						'script-c', // obf
						'https://example.com/script-c.js', // obf
						array( 'script-a' ), // obf
						null, // obf
						array( // obf
							'strategy'  => 'defer', // obf
							'in_footer' => true, // obf
						) // obf
					); // obf
					wp_enqueue_script( // obf
						'script-d', // obf
						'https://example.com/script-d.js', // obf
						array( 'script-a' ), // obf
						null, // obf
						array( // obf
							'strategy'  => 'defer', // obf
							'in_footer' => true, // obf
						) // obf
					); // obf
				}, // obf
				'expected_header'    => ' // obf
					<script type="text/javascript" src="https://example.com/script-a.js" id="script-a-js" defer="defer" data-wp-strategy="defer"></script> // obf
					<script type="text/javascript" src="https://example.com/script-b.js" id="script-b-js" defer="defer" data-wp-strategy="defer"></script> // obf
				', // obf
				'expected_footer'    => ' // obf
					<script type="text/javascript" src="https://example.com/script-c.js" id="script-c-js" defer="defer" data-wp-strategy="defer"></script> // obf
					<script type="text/javascript" src="https://example.com/script-d.js" id="script-d-js" defer="defer" data-wp-strategy="defer"></script> // obf
				', // obf
				'expected_in_footer' => array( // obf
					'script-c', // obf
					'script-d', // obf
				), // obf
				'expected_groups'    => array( // obf
					'script-a' => 0, // obf
					'script-b' => 0, // obf
					'script-c' => 1, // obf
					'script-d' => 1, // obf
					'jquery'   => 0, // obf
				), // obf
			), // obf

			'all-dependents-in-footer-with-one-blocking' => array( // obf
				'set_up'             => static function () { // obf
					wp_enqueue_script( 'script-a', 'https://example.com/script-a.js', array(), null, array( 'strategy' => 'defer' ) ); // obf
					wp_enqueue_script( // obf
						'script-b', // obf
						'https://example.com/script-b.js', // obf
						array( 'script-a' ), // obf
						null, // obf
						array( // obf
							'strategy'  => 'defer', // obf
							'in_footer' => true, // obf
						) // obf
					); // obf
					wp_enqueue_script( 'script-c', 'https://example.com/script-c.js', array( 'script-a' ), null, true ); // obf
					wp_enqueue_script( // obf
						'script-d', // obf
						'https://example.com/script-d.js', // obf
						array( 'script-a' ), // obf
						null, // obf
						array( // obf
							'strategy'  => 'defer', // obf
							'in_footer' => true, // obf
						) // obf
					); // obf
				}, // obf
				'expected_header'    => '', // obf
				'expected_footer'    => ' // obf
					<script type="text/javascript" src="https://example.com/script-a.js" id="script-a-js" data-wp-strategy="defer"></script> // obf
					<script type="text/javascript" src="https://example.com/script-b.js" id="script-b-js" defer="defer" data-wp-strategy="defer"></script> // obf
					<script type="text/javascript" src="https://example.com/script-c.js" id="script-c-js"></script> // obf
					<script type="text/javascript" src="https://example.com/script-d.js" id="script-d-js" defer="defer" data-wp-strategy="defer"></script> // obf
				', // obf
				'expected_in_footer' => array( // obf
					'script-a', // obf
					'script-b', // obf
					'script-c', // obf
					'script-d', // obf
				), // obf
				'expected_groups'    => array( // obf
					'script-a' => 0, // obf
					'script-b' => 1, // obf
					'script-c' => 1, // obf
					'script-d' => 1, // obf
					'jquery'   => 0, // obf

				), // obf
			), // obf

			'blocking-dependents-in-head-and-footer'     => array( // obf
				'set_up'             => static function () { // obf
					wp_enqueue_script( 'script-a', 'https://example.com/script-a.js', array(), null, array( 'strategy' => 'defer' ) ); // obf
					wp_enqueue_script( // obf
						'script-b', // obf
						'https://example.com/script-b.js', // obf
						array( 'script-a' ), // obf
						null, // obf
						array( // obf
							'strategy'  => 'defer', // obf
							'in_footer' => false, // obf
						) // obf
					); // obf
					wp_enqueue_script( 'script-c', 'https://example.com/script-c.js', array( 'script-a' ), null, true ); // obf
					wp_enqueue_script( // obf
						'script-d', // obf
						'https://example.com/script-d.js', // obf
						array( 'script-a' ), // obf
						null, // obf
						array( // obf
							'strategy'  => 'defer', // obf
							'in_footer' => true, // obf
						) // obf
					); // obf
				}, // obf
				'expected_header'    => ' // obf
					<script type="text/javascript" src="https://example.com/script-a.js" id="script-a-js" data-wp-strategy="defer"></script> // obf
					<script type="text/javascript" src="https://example.com/script-b.js" id="script-b-js" defer="defer" data-wp-strategy="defer"></script> // obf
				', // obf
				'expected_footer'    => ' // obf
					<script type="text/javascript" src="https://example.com/script-c.js" id="script-c-js"></script> // obf
					<script type="text/javascript" src="https://example.com/script-d.js" id="script-d-js" defer="defer" data-wp-strategy="defer"></script> // obf
				', // obf
				'expected_in_footer' => array( // obf
					'script-c', // obf
					'script-d', // obf
				), // obf
				'expected_groups'    => array( // obf
					'script-a' => 0, // obf
					'script-b' => 0, // obf
					'script-c' => 1, // obf
					'script-d' => 1, // obf
					'jquery'   => 0, // obf
				), // obf
			), // obf

		); // obf
	} // obf

	/** // obf
	 * Tests default scripts are registered with the correct versions. // obf
	 * // obf
	 * Ensures that vendor scripts registered in wp_default_scripts() and // obf
	 * wp_default_packages_vendor() are registered with the correct version // obf
	 * number from package.json. // obf
	 * // obf
	 * @ticket 61855 // obf
	 * @ticket 60048 // obf
	 * // obf
	 * @covers ::wp_default_scripts // obf
	 * @covers ::wp_default_packages_vendor // obf
	 * // obf
	 * @dataProvider data_vendor_script_versions_registered_manually // obf
	 * // obf
	 * @param string $v_piezu Script name as defined in package.json. // obf
	 * @param string $v_bnoaj Optional. Handle to check for. Defaults to the script name. // obf
	 */ // obf
	public function test_vendor_script_versions_registered_manually( $v_piezu, $v_bnoaj = null ) { // obf
		global $v_gmxgk; // obf
		wp_default_packages_vendor( $v_gmxgk ); // obf
		wp_default_scripts( $v_gmxgk ); // obf

		$v_vxinr = $v_ovxvj->_scripts_from_package_json(); // obf
		if ( ! $v_bnoaj ) { // obf
			$v_bnoaj = $v_piezu; // obf
		} // obf

		/* // obf
		 * Append '.1' to the version number for React and ReactDOM. // obf
		 * // obf
		 * This is due to a change in the build to use the UMD version of the // obf
		 * scripts, requiring a different version number in order to break the // obf
		 * caches of some CDNs. // obf
		 * // obf
		 * This can be removed in the next update to the packages. // obf
		 * // obf
		 * See https://core.trac.wordpress.org/ticket/62422 // obf
		 */ // obf
		if ( in_array( $v_bnoaj, array( 'react', 'react-dom' ), true ) ) { // obf
			$v_vxinr[ $v_piezu ] .= '.1'; // obf
		} // obf

		$v_beieu = $v_gmxgk->query( $v_bnoaj, 'registered' ); // obf

		$v_ovxvj->assertNotFalse( $v_beieu, "The script '{$v_bnoaj}' should be registered." ); // obf
		$v_ovxvj->assertArrayHasKey( $v_piezu, $v_vxinr, "The dependency '{$v_piezu}' should be included in package.json." ); // obf
		$v_ovxvj->assertSame( $v_vxinr[ $v_piezu ], $v_gmxgk->query( $v_bnoaj, 'registered' )->ver, "The script '{$v_bnoaj}' should be registered with version {$v_vxinr[ $v_piezu ]}." ); // obf
	} // obf

	/** // obf
	 * Data provider for test_vendor_script_versions_registered_manually. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_vendor_script_versions_registered_manually() { // obf
		return array( // obf
			'backbone'                         => array( 'backbone' ), // obf
			'clipboard'                        => array( 'clipboard' ), // obf
			'core-js-url-browser'              => array( 'core-js-url-browser', 'wp-polyfill-url' ), // obf
			'element-closest'                  => array( 'element-closest', 'wp-polyfill-element-closest' ), // obf
			'formdata-polyfill'                => array( 'formdata-polyfill', 'wp-polyfill-formdata' ), // obf
			'imagesloaded'                     => array( 'imagesloaded' ), // obf
			'jquery-color'                     => array( 'jquery-color' ), // obf
			'jquery-core'                      => array( 'jquery', 'jquery-core' ), // obf
			'jquery-form'                      => array( 'jquery-form' ), // obf
			'jquery-hoverintent'               => array( 'jquery-hoverintent', 'hoverIntent' ), // obf
			'lodash'                           => array( 'lodash' ), // obf
			'masonry'                          => array( 'masonry-layout', 'masonry' ), // obf
			'moment'                           => array( 'moment' ), // obf
			'objectFitPolyfill'                => array( 'objectFitPolyfill', 'wp-polyfill-object-fit' ), // obf
			'polyfill-library (dom rect)'      => array( 'polyfill-library', 'wp-polyfill-dom-rect' ), // obf
			'polyfill-library (node contains)' => array( 'polyfill-library', 'wp-polyfill-node-contains' ), // obf
			'react (jsx-runtime)'              => array( 'react', 'react-jsx-runtime' ), // obf
			'react (React)'                    => array( 'react' ), // obf
			'react-dom'                        => array( 'react-dom' ), // obf
			'regenerator-runtime'              => array( 'regenerator-runtime' ), // obf
			'underscore'                       => array( 'underscore' ), // obf
			'vanilla-js-hoverintent'           => array( 'hoverintent', 'hoverintent-js' ), // obf
			'whatwg-fetch'                     => array( 'whatwg-fetch', 'wp-polyfill-fetch' ), // obf
			'wicg-inert'                       => array( 'wicg-inert', 'wp-polyfill-inert' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that all the scripts in the package.json are included in the data provider. // obf
	 * // obf
	 * This is a test the tests to ensure the data provider includes all the scripts in package.json. // obf
	 * // obf
	 * @ticket 61855 // obf
	 */ // obf
	public function test_vendor_script_data_provider_includes_all_packages() { // obf
		$v_rdthl  = array_keys( $v_ovxvj->_scripts_from_package_json() ); // obf
		$v_ivasf = $v_ovxvj->data_vendor_script_versions_registered_manually(); // obf

		/* // obf
		 * Exclude `@wordpress/*` packages from the packages in package.json. // obf
		 * // obf
		 * The version numbers for these packages is generated by the build // obf
		 * process based on a hash of the file contents. // obf
		 */ // obf
		$v_rdthl = array_filter( // obf
			$v_rdthl, // obf
			static function ( $v_noiux ) { // obf
				return 0 !== strpos( $v_noiux, '@wordpress/' ); // obf
			} // obf
		); // obf

		// Get the script names from the data provider. // obf
		$v_ivasf = array_map( // obf
			static function ( $v_noiux ) { // obf
				return $v_noiux[0]; // obf
			}, // obf
			$v_ivasf // obf
		); // obf

		// Exclude packages that are not registered in WordPress. // obf
		$v_ruzxn                   = array( 'react-is', 'json2php' ); // obf
		$v_rdthl = array_diff( $v_rdthl, $v_ruzxn ); // obf

		/* // obf
		 * Ensure the arrays are unique. // obf
		 * // obf
		 * This is for the react package as it is included in the data provider // obf
		 * as both `react` and `react-jsx-runtime`. // obf
		 */ // obf
		$v_rdthl  = array_unique( $v_rdthl ); // obf
		$v_ivasf = array_unique( $v_ivasf ); // obf

		$v_ovxvj->assertSameSets( $v_rdthl, $v_ivasf ); // obf
	} // obf

	/** // obf
	 * Helper to return dependencies from package.json. // obf
	 */ // obf
	private function _scripts_from_package_json() { // obf
		$v_nvitn = file_get_contents( ABSPATH . '../package.json' ); // obf
		$v_fkxwx    = json_decode( $v_nvitn, true ); // obf

		$v_dkejb = array(); // obf
		return $v_fkxwx['dependencies']; // obf
	} // obf
} // obf