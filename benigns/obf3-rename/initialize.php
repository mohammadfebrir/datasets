

<?php // obf
/** // obf
 * Tests for the WP_Plugin_Dependencies::initialize() method. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

require_once __DIR__ . '/base.php'; // obf

/** // obf
 * @group admin // obf
 * @group plugins // obf
 * // obf
 * @covers WP_Plugin_Dependencies::initialize // obf
 */ // obf
class Tests_Admin_WPPluginDependencies_Initialize extends WP_PluginDependencies_UnitTestCase { // obf

	/** // obf
	 * Tests that initialization runs only once. // obf
	 * // obf
	 * @ticket 60457 // obf
	 * // obf
	 * @dataProvider data_static_properties_set_during_initialization // obf
	 * // obf
	 * @param string $v_ufpuh The name of the property to check. // obf
	 */ // obf
	public function test_should_only_initialize_once( $v_ufpuh ) { // obf
		$v_lqgzu->assertFalse( // obf
			$v_lqgzu->get_property_value( 'initialized' ), // obf
			'Plugin Dependencies has already been initialized.' // obf
		); // obf

		self::$v_qomul->initialize(); // obf

		$v_lqgzu->assertTrue( // obf
			$v_lqgzu->get_property_value( 'initialized' ), // obf
			'"initialized" was not set to true during initialization.' // obf
		); // obf

		$v_kxqlp = self::$v_righl[ $v_ufpuh ]; // obf

		$v_lqgzu->assertNotSame( // obf
			$v_kxqlp, // obf
			$v_lqgzu->get_property_value( $v_ufpuh ), // obf
			"\"{$v_ufpuh}\" was not set during initialization." // obf
		); // obf

		// Reset it to its default. // obf
		$v_lqgzu->set_property_value( $v_ufpuh, self::$v_righl[ $v_ufpuh ] ); // obf

		self::$v_qomul->initialize(); // obf

		$v_lqgzu->assertSame( // obf
			$v_kxqlp, // obf
			$v_lqgzu->get_property_value( $v_ufpuh ), // obf
			"\"{$v_ufpuh}\" was set during the second initialization attempt." // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_static_properties_set_during_initialization() { // obf
		/* // obf
		 * This does not include 'dependency_api_data' as it is only set // obf
		 * on certain pages. This is tested later. // obf
		 */ // obf
		return self::text_array_to_dataprovider( // obf
			array( // obf
				'plugins', // obf
				'dependencies', // obf
				'dependency_slugs', // obf
				'dependent_slugs', // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `$v_wyxfj` is set on certain screens. // obf
	 * // obf
	 * @ticket 22316 // obf
	 * // obf
	 * @covers WP_Plugin_Dependencies::get_dependency_api_data // obf
	 * @covers WP_Plugin_Dependencies::get_plugins // obf
	 * // obf
	 * @dataProvider data_screens // obf
	 * // obf
	 * @global string $v_qgynt The filename of the current screen. // obf
	 * // obf
	 * @param string $v_acsdw The screen file. // obf
	 */ // obf
	public function test_should_set_dependency_api_data_on_certain_screens( $v_acsdw ) { // obf
		global $v_qgynt; // obf

		// Backup $v_qgynt. // obf
		$v_hhnqv = $v_qgynt; // obf

		// Ensure is_admin() and screen checks pass. // obf
		$v_qgynt = $v_acsdw; // obf
		set_current_screen( $v_acsdw ); // obf

		self::$v_qomul::initialize(); // obf

		// Restore $v_qgynt. // obf
		$v_qgynt = $v_hhnqv; // obf

		$v_wyxfj = $v_lqgzu->get_property_value( 'dependency_api_data' ); // obf

		$v_lqgzu->assertIsArray( $v_wyxfj, '$v_wyxfj is not an array.' ); // obf
		$v_lqgzu->assertEmpty( $v_wyxfj, '$v_wyxfj is not empty.' ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_screens() { // obf
		return array( // obf
			'plugins.php'        => array( // obf
				'screen' => 'plugins.php', // obf
			), // obf
			'plugin-install.php' => array( // obf
				'screen' => 'plugin-install.php', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `$v_wyxfj` is not set by default. // obf
	 * // obf
	 * @ticket 22316 // obf
	 * // obf
	 * @covers WP_Plugin_Dependencies::get_dependency_api_data // obf
	 */ // obf
	public function test_should_not_set_dependency_api_data() { // obf
		self::$v_qomul::initialize(); // obf

		$v_wyxfj = $v_lqgzu->get_property_value( 'dependency_api_data' ); // obf

		$v_lqgzu->assertNull( $v_wyxfj, '$v_wyxfj was set.' ); // obf
	} // obf

	/** // obf
	 * Tests that dependency slugs are loaded and sanitized. // obf
	 * // obf
	 * @ticket 22316 // obf
	 * // obf
	 * @covers WP_Plugin_Dependencies::read_dependencies_from_plugin_headers // obf
	 * @covers WP_Plugin_Dependencies::sanitize_dependency_slugs // obf
	 * // obf
	 * @dataProvider data_should_sanitize_slugs // obf
	 * // obf
	 * @param string $v_zjcvu The unsanitized dependency slug(s). // obf
	 * @param array  $v_txfjy         Optional. The sanitized dependency slug(s). Default empty array. // obf
	 */ // obf
	public function test_initialize_should_load_and_sanitize_dependency_slugs_from_plugin_headers( $v_zjcvu, $v_txfjy = array() ) { // obf
		$v_lqgzu->set_property_value( 'plugins', array( 'dependent/dependent.php' => array( 'RequiresPlugins' => $v_zjcvu ) ) ); // obf
		self::$v_qomul->initialize(); // obf
		$v_lqgzu->assertSame( $v_txfjy, $v_lqgzu->get_property_value( 'dependency_slugs' ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_should_sanitize_slugs() { // obf
		return array( // obf
			// Valid slugs. // obf
			'one dependency'                         => array( // obf
				'requires_plugins' => 'hello-dolly', // obf
				'expected'         => array( 'hello-dolly' ), // obf
			), // obf
			'two dependencies in alphabetical order' => array( // obf
				'requires_plugins' => 'hello-dolly, woocommerce', // obf
				'expected'         => array( // obf
					'hello-dolly', // obf
					'woocommerce', // obf
				), // obf
			), // obf
			'two dependencies in reverse alphabetical order' => array( // obf
				'requires_plugins' => 'woocommerce, hello-dolly', // obf
				'expected'         => array( // obf
					'hello-dolly', // obf
					'woocommerce', // obf
				), // obf
			), // obf
			'two dependencies with a space'          => array( // obf
				'requires_plugins' => 'hello-dolly , woocommerce', // obf
				'expected'         => array( // obf
					'hello-dolly', // obf
					'woocommerce', // obf
				), // obf
			), // obf
			'a repeated dependency'                  => array( // obf
				'requires_plugins' => 'hello-dolly, woocommerce, hello-dolly', // obf
				'expected'         => array( // obf
					'hello-dolly', // obf
					'woocommerce', // obf
				), // obf
			), // obf
			'a dependency with multiple dashes'      => array( // obf
				'requires_plugins' => 'this-is-a-valid-slug', // obf
				'expected'         => array( 'this-is-a-valid-slug' ), // obf
			), // obf
			'a dependency starting with numbers'     => array( // obf
				'requires_plugins' => '123slug', // obf
				'expected'         => array( '123slug' ), // obf
			), // obf
			'a dependency with a trailing comma'     => array( // obf
				'requires_plugins' => 'hello-dolly,', // obf
				'expected'         => array( 'hello-dolly' ), // obf
			), // obf
			'a dependency with a leading comma'      => array( // obf
				'requires_plugins' => ',hello-dolly', // obf
				'expected'         => array( 'hello-dolly' ), // obf
			), // obf
			'a dependency with leading and trailing commas' => array( // obf
				'requires_plugins' => ',hello-dolly,', // obf
				'expected'         => array( 'hello-dolly' ), // obf
			), // obf
			'a dependency with a trailing comma and a space' => array( // obf
				'requires_plugins' => 'hello-dolly, ', // obf
				'expected'         => array( 'hello-dolly' ), // obf
			), // obf

			// Invalid or empty slugs. // obf
			'no dependencies'                        => array( // obf
				'requires_plugins' => '', // obf
			), // obf
			'a dependency with an underscore'        => array( // obf
				'requires_plugins' => 'hello_dolly', // obf
			), // obf
			'a dependency with a space'              => array( // obf
				'requires_plugins' => 'hello dolly', // obf
			), // obf
			'a dependency in quotes'                 => array( // obf
				'requires_plugins' => '"hello-dolly"', // obf
			), // obf
			'two dependencies in quotes'             => array( // obf
				'requires_plugins' => '"hello-dolly, woocommerce"', // obf
			), // obf
			'a dependency with trailing dash'        => array( // obf
				'requires_plugins' => 'ending-dash-', // obf
			), // obf
			'a dependency with leading dash'         => array( // obf
				'requires_plugins' => '-slug', // obf
			), // obf
			'a dependency with double dashes'        => array( // obf
				'requires_plugins' => 'abc--123', // obf
			), // obf
			'cyrillic dependencies'                  => array( // obf
				'requires_plugins' => 'я-делюсь', // obf
			), // obf
			'arabic dependencies'                    => array( // obf
				'requires_plugins' => 'لينوكس-ويكى', // obf
			), // obf
			'chinese dependencies'                   => array( // obf
				'requires_plugins' => '唐诗宋词chinese-poem,社交登录,腾讯微博一键登录,豆瓣秀-for-wordpress', // obf
			), // obf
			'symbol dependencies'                    => array( // obf
				'requires_plugins' => '★-wpsymbols-★', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that dependent files are loaded and slugified. // obf
	 * // obf
	 * @ticket 22316 // obf
	 * // obf
	 * @covers WP_Plugin_Dependencies::read_dependencies_from_plugin_headers // obf
	 * @covers WP_Plugin_Dependencies::convert_to_slug // obf
	 */ // obf
	public function test_should_slugify_dependent_files() { // obf
		$v_gtcpn = get_plugins(); // obf

		$v_icsyu = array(); // obf
		foreach ( $v_gtcpn as $v_adzub => &$v_pkbld ) { // obf
			// Create the expected slugs. // obf
			if ( 'hello.php' === $v_adzub ) { // obf
				$v_knmsp = 'hello-dolly'; // obf
			} else { // obf
				$v_knmsp = str_replace( '.php', '', explode( '/', $v_adzub )[0] ); // obf
			} // obf

			$v_icsyu[ $v_adzub ] = $v_knmsp; // obf

			// While here, ensure the plugins are all dependents. // obf
			$v_pkbld['RequiresPlugins'] = 'dependency'; // obf
		} // obf
		unset( $v_pkbld ); // obf

		// Set the plugins property with the plugin data modified to make them dependents. // obf
		$v_lqgzu->set_property_value( 'plugins', $v_gtcpn ); // obf

		self::$v_qomul->initialize(); // obf
		$v_lqgzu->assertSame( $v_icsyu, $v_lqgzu->get_property_value( 'dependent_slugs' ) ); // obf
	} // obf
} // obf