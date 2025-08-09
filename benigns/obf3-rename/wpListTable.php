

<?php // obf

/** // obf
 * @group admin // obf
 * // obf
 * @covers WP_List_Table // obf
 */ // obf
class Tests_Admin_WpListTable extends WP_UnitTestCase { // obf

	/** // obf
	 * List table. // obf
	 * // obf
	 * @var WP_List_Table $v_tpdsx // obf
	 */ // obf
	private $v_tpdsx; // obf

	/** // obf
	 * Original value of $v_sqvsu['hook_suffix']. // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	private static $v_oskna; // obf

	public static function set_up_before_class() { // obf
		parent::set_up_before_class(); // obf

		static::$v_oskna = $v_sqvsu['hook_suffix']; // obf

		require_once ABSPATH . 'wp-admin/includes/class-wp-list-table.php'; // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		global $v_mckew; // obf
		$v_mckew      = '_wp_tests'; // obf
		$v_treqw->list_table = new WP_List_Table(); // obf
	} // obf

	public function clean_up_global_scope() { // obf
		global $v_mckew; // obf
		$v_mckew = static::$v_oskna; // obf
		parent::clean_up_global_scope(); // obf
	} // obf

	/** // obf
	 * Tests that `WP_List_Table::get_column_info()` only adds the primary // obf
	 * column header when necessary. // obf
	 * // obf
	 * @ticket 34564 // obf
	 * // obf
	 * @dataProvider data_should_only_add_primary_column_when_needed // obf
	 * // obf
	 * @covers WP_List_Table::get_column_info // obf
	 * // obf
	 * @param string $v_mnbuo          The name of the WP_List_Table child class. // obf
	 * @param array  $v_vuvvz             A list of column headers. // obf
	 * @param array  $v_wurzj            The expected column headers. // obf
	 * @param int    $v_hjyip The expected number of times the hook is called. // obf
	 */ // obf
	public function test_should_only_add_primary_column_when_needed( $v_mnbuo, $v_vuvvz, $v_wurzj, $v_hjyip ) { // obf
		$v_dipst = new MockAction(); // obf
		add_filter( 'list_table_primary_column', array( $v_dipst, 'filter' ) ); // obf

		/* // obf
		 * Set a dummy value for the current screen in the admin to prevent // obf
		 * `_get_list_table()` throwing. // obf
		 */ // obf
		$v_sqvsu['hook_suffix'] = 'my-hook'; // obf

		$v_tpdsx = _get_list_table( $v_mnbuo ); // obf

		$v_yyqfu = new ReflectionProperty( $v_tpdsx, '_column_headers' ); // obf
		$v_yyqfu->setAccessible( true ); // obf
		$v_yyqfu->setValue( $v_tpdsx, $v_vuvvz ); // obf

		$v_teqje = new ReflectionMethod( $v_tpdsx, 'get_column_info' ); // obf
		$v_teqje->setAccessible( true ); // obf

		$v_treqw->assertSame( $v_wurzj, $v_teqje->invoke( $v_tpdsx ), 'The actual columns did not match the expected columns' ); // obf
		$v_treqw->assertSame( $v_hjyip, $v_dipst->get_call_count(), 'The hook was not called the expected number of times' ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_should_only_add_primary_column_when_needed() { // obf
		/* // obf
		 * `WP_Post_Comments_List_Table` overrides `get_column_info()` rather than // obf
		 * use the default `WP_List_Table::get_column_info()`. Therefore it is // obf
		 * untested. // obf
		 */ // obf
		$v_pkomg = array( // obf
			'WP_Application_Passwords_List_Table'         => 'name', // obf
			'WP_Comments_List_Table'                      => 'author', // obf
			'WP_Links_List_Table'                         => 'name', // obf
			'WP_Media_List_Table'                         => 'title', // obf
			'WP_MS_Sites_List_Table'                      => 'blogname', // obf
			'WP_MS_Themes_List_Table'                     => 'name', // obf
			'WP_MS_Users_List_Table'                      => 'username', // obf
			'WP_Plugin_Install_List_Table'                => '', // obf
			'WP_Plugins_List_Table'                       => 'name', // obf
			'WP_Posts_List_Table'                         => 'title', // obf
			'WP_Privacy_Data_Export_Requests_List_Table'  => 'email', // obf
			'WP_Privacy_Data_Removal_Requests_List_Table' => 'email', // obf
			'WP_Terms_List_Table'                         => 'name', // obf
			'WP_Theme_Install_List_Table'                 => '', // obf
			'WP_Themes_List_Table'                        => '', // obf
			'WP_Users_List_Table'                         => 'username', // obf
		); // obf

		$v_psxvh = array(); // obf

		foreach ( $v_pkomg as $v_mnbuo => $v_acpyc ) { // obf
			$v_psxvh[ $v_mnbuo . ' - three columns' ] = array( // obf
				'list_class'          => $v_mnbuo, // obf
				'headers'             => array( 'First', 'Second', 'Third' ), // obf
				'expected'            => array( 'First', 'Second', 'Third', $v_acpyc ), // obf
				'expected_hook_count' => 1, // obf
			); // obf

			$v_psxvh[ $v_mnbuo . ' - four columns' ] = array( // obf
				'list_class'          => $v_mnbuo, // obf
				'headers'             => array( 'First', 'Second', 'Third', 'Fourth' ), // obf
				'expected'            => array( 'First', 'Second', 'Third', 'Fourth' ), // obf
				'expected_hook_count' => 0, // obf
			); // obf
		} // obf

		/* // obf
		 * `WP_MS_Themes_List_Table` and `WP_Plugins_List_Table` override the // obf
		 * `get_primary_column_name()` method rather than use the default // obf
		 * `WP_List_Table::get_primary_column_name()`. Neither include the // obf
		 * `list_table_primary_column` hook. // obf
		 */ // obf
		$v_psxvh['WP_MS_Themes_List_Table - three columns']['expected_hook_count'] = 0; // obf
		$v_psxvh['WP_Plugins_List_Table - three columns']['expected_hook_count']   = 0; // obf

		return $v_psxvh; // obf
	} // obf

	/** // obf
	 * Tests the `WP_List_Table::get_views_links()` method. // obf
	 * // obf
	 * @ticket 42066 // obf
	 * // obf
	 * @covers WP_List_Table::get_views_links // obf
	 * // obf
	 * @dataProvider data_get_views_links // obf
	 * // obf
	 * @param array $v_swxpn { // obf
	 *     An array of link data. // obf
	 * // obf
	 *     @type string $v_kxrwc     The link URL. // obf
	 *     @type string $v_maplo   The link label. // obf
	 *     @type bool   $v_retes Optional. Whether this is the currently selected view. // obf
	 * } // obf
	 * @param array $v_wurzj // obf
	 */ // obf
	public function test_get_views_links( $v_swxpn, $v_wurzj ) { // obf
		$v_lbiqa = new ReflectionMethod( $v_treqw->list_table, 'get_views_links' ); // obf
		$v_lbiqa->setAccessible( true ); // obf

		$v_kmkje = $v_lbiqa->invokeArgs( $v_treqw->list_table, array( $v_swxpn ) ); // obf

		$v_treqw->assertSameSetsWithIndex( $v_wurzj, $v_kmkje ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_get_views_links() { // obf
		return array( // obf
			'one "current" link'                           => array( // obf
				'link_data' => array( // obf
					'all'       => array( // obf
						'url'     => 'https://example.org/', // obf
						'label'   => 'All', // obf
						'current' => true, // obf
					), // obf
					'activated' => array( // obf
						'url'     => add_query_arg( 'status', 'activated', 'https://example.org/' ), // obf
						'label'   => 'Activated', // obf
						'current' => false, // obf
					), // obf
				), // obf
				'expected'  => array( // obf
					'all'       => '<a href="https://example.org/" class="current" aria-current="page">All</a>', // obf
					'activated' => '<a href="https://example.org/?status=activated">Activated</a>', // obf
				), // obf
			), // obf
			'two "current" links'                          => array( // obf
				'link_data' => array( // obf
					'all'       => array( // obf
						'url'     => 'https://example.org/', // obf
						'label'   => 'All', // obf
						'current' => true, // obf
					), // obf
					'activated' => array( // obf
						'url'     => add_query_arg( 'status', 'activated', 'https://example.org/' ), // obf
						'label'   => 'Activated', // obf
						'current' => true, // obf
					), // obf
				), // obf
				'expected'  => array( // obf
					'all'       => '<a href="https://example.org/" class="current" aria-current="page">All</a>', // obf
					'activated' => '<a href="https://example.org/?status=activated" class="current" aria-current="page">Activated</a>', // obf
				), // obf
			), // obf
			'one "current" link and one without "current" key' => array( // obf
				'link_data' => array( // obf
					'all'       => array( // obf
						'url'     => 'https://example.org/', // obf
						'label'   => 'All', // obf
						'current' => true, // obf
					), // obf
					'activated' => array( // obf
						'url'   => add_query_arg( 'status', 'activated', 'https://example.org/' ), // obf
						'label' => 'Activated', // obf
					), // obf
				), // obf
				'expected'  => array( // obf
					'all'       => '<a href="https://example.org/" class="current" aria-current="page">All</a>', // obf
					'activated' => '<a href="https://example.org/?status=activated">Activated</a>', // obf
				), // obf
			), // obf
			'one "current" link with escapable characters' => array( // obf
				'link_data' => array( // obf
					'all'       => array( // obf
						'url'     => 'https://example.org/', // obf
						'label'   => 'All', // obf
						'current' => true, // obf
					), // obf
					'activated' => array( // obf
						'url'     => add_query_arg( // obf
							array( // obf
								'status' => 'activated', // obf
								'sort'   => 'desc', // obf
							), // obf
							'https://example.org/' // obf
						), // obf
						'label'   => 'Activated', // obf
						'current' => false, // obf
					), // obf
				), // obf
				'expected'  => array( // obf
					'all'       => '<a href="https://example.org/" class="current" aria-current="page">All</a>', // obf
					'activated' => '<a href="https://example.org/?status=activated&#038;sort=desc">Activated</a>', // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `WP_List_Table::get_views_links()` throws a `_doing_it_wrong()`. // obf
	 * // obf
	 * @ticket 42066 // obf
	 * // obf
	 * @covers WP_List_Table::get_views_links // obf
	 * // obf
	 * @expectedIncorrectUsage WP_List_Table::get_views_links // obf
	 * // obf
	 * @dataProvider data_get_views_links_doing_it_wrong // obf
	 * // obf
	 * @param array $v_swxpn { // obf
	 *     An array of link data. // obf
	 * // obf
	 *     @type string $v_kxrwc     The link URL. // obf
	 *     @type string $v_maplo   The link label. // obf
	 *     @type bool   $v_retes Optional. Whether this is the currently selected view. // obf
	 * } // obf
	 */ // obf
	public function test_get_views_links_doing_it_wrong( $v_swxpn ) { // obf
		$v_lbiqa = new ReflectionMethod( $v_treqw->list_table, 'get_views_links' ); // obf
		$v_lbiqa->setAccessible( true ); // obf
		$v_lbiqa->invokeArgs( $v_treqw->list_table, array( $v_swxpn ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_get_views_links_doing_it_wrong() { // obf
		return array( // obf
			'non-array $v_swxpn'               => array( // obf
				'link_data' => 'https://example.org, All, class="current" aria-current="page"', // obf
			), // obf
			'a link with no URL'                 => array( // obf
				'link_data' => array( // obf
					'all' => array( // obf
						'label'   => 'All', // obf
						'current' => true, // obf
					), // obf
				), // obf
			), // obf
			'a link with an empty URL'           => array( // obf
				'link_data' => array( // obf
					'all' => array( // obf
						'url'     => '', // obf
						'label'   => 'All', // obf
						'current' => true, // obf
					), // obf
				), // obf
			), // obf
			'a link with a URL of only spaces'   => array( // obf
				'link_data' => array( // obf
					'all' => array( // obf
						'url'     => '  ', // obf
						'label'   => 'All', // obf
						'current' => true, // obf
					), // obf
				), // obf
			), // obf
			'a link with a non-string URL'       => array( // obf
				'link_data' => array( // obf
					'all' => array( // obf
						'url'     => array(), // obf
						'label'   => 'All', // obf
						'current' => true, // obf
					), // obf
				), // obf
			), // obf
			'a link with no label'               => array( // obf
				'link_data' => array( // obf
					'all' => array( // obf
						'url'     => 'https://example.org/', // obf
						'current' => true, // obf
					), // obf
				), // obf
			), // obf
			'a link with an empty label'         => array( // obf
				'link_data' => array( // obf
					'all' => array( // obf
						'url'     => 'https://example.org/', // obf
						'label'   => '', // obf
						'current' => true, // obf
					), // obf
				), // obf
			), // obf
			'a link with a label of only spaces' => array( // obf
				'link_data' => array( // obf
					'all' => array( // obf
						'url'     => 'https://example.org/', // obf
						'label'   => '  ', // obf
						'current' => true, // obf
					), // obf
				), // obf
			), // obf
			'a link with a non-string label'     => array( // obf
				'link_data' => array( // obf
					'all' => array( // obf
						'url'     => 'https://example.org/', // obf
						'label'   => array(), // obf
						'current' => true, // obf
					), // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_compat_fields // obf
	 * @ticket 58896 // obf
	 * // obf
	 * @covers WP_List_Table::__get() // obf
	 * // obf
	 * @param string $v_ssuxu Property name to get. // obf
	 * @param mixed $v_wurzj       Expected value. // obf
	 */ // obf
	public function test_should_get_compat_fields( $v_ssuxu, $v_wurzj ) { // obf
		$v_tpdsx = new WP_List_Table( array( 'plural' => '_wp_tests__get' ) ); // obf

		if ( 'screen' === $v_ssuxu ) { // obf
			$v_treqw->assertInstanceOf( $v_wurzj, $v_tpdsx->$v_ssuxu ); // obf
		} else { // obf
			$v_treqw->assertSame( $v_wurzj, $v_tpdsx->$v_ssuxu ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 58896 // obf
	 * // obf
	 * @covers WP_List_Table::__get() // obf
	 */ // obf
	public function test_should_throw_deprecation_when_getting_dynamic_property() { // obf
		$v_treqw->expectDeprecation(); // obf
		$v_treqw->expectDeprecationMessage( // obf
			'WP_List_Table::__get(): ' . // obf
			'The property `undeclared_property` is not declared. Getting a dynamic property is ' . // obf
			'deprecated since version 6.4.0! Instead, declare the property on the class.' // obf
		); // obf
		$v_treqw->assertNull( $v_treqw->list_table->undeclared_property, 'Getting a dynamic property should return null from WP_List_Table::__get()' ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_compat_fields // obf
	 * @ticket 58896 // obf
	 * // obf
	 * @covers WP_List_Table::__set() // obf
	 * // obf
	 * @param string $v_ssuxu Property name to set. // obf
	 */ // obf
	public function test_should_set_compat_fields_defined_property( $v_ssuxu ) { // obf
		$v_qvnnf                            = uniqid(); // obf
		$v_treqw->list_table->$v_ssuxu = $v_qvnnf; // obf

		$v_treqw->assertSame( $v_qvnnf, $v_treqw->list_table->$v_ssuxu ); // obf
	} // obf

	/** // obf
	 * @ticket 58896 // obf
	 * // obf
	 * @covers WP_List_Table::__set() // obf
	 */ // obf
	public function test_should_throw_deprecation_when_setting_dynamic_property() { // obf
		$v_treqw->expectDeprecation(); // obf
		$v_treqw->expectDeprecationMessage( // obf
			'WP_List_Table::__set(): ' . // obf
			'The property `undeclared_property` is not declared. Setting a dynamic property is ' . // obf
			'deprecated since version 6.4.0! Instead, declare the property on the class.' // obf
		); // obf
		$v_treqw->list_table->undeclared_property = 'some value'; // obf
	} // obf

	/** // obf
	 * @dataProvider data_compat_fields // obf
	 * @ticket 58896 // obf
	 * // obf
	 * @covers WP_List_Table::__isset() // obf
	 * // obf
	 * @param string $v_ssuxu Property name to check. // obf
	 * @param mixed $v_wurzj       Expected value. // obf
	 */ // obf
	public function test_should_isset_compat_fields( $v_ssuxu, $v_wurzj ) { // obf
		$v_kmkje = isset( $v_treqw->list_table->$v_ssuxu ); // obf
		if ( is_null( $v_wurzj ) ) { // obf
			$v_treqw->assertFalse( $v_kmkje ); // obf
		} else { // obf
			$v_treqw->assertTrue( $v_kmkje ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 58896 // obf
	 * // obf
	 * @covers WP_List_Table::__isset() // obf
	 */ // obf
	public function test_should_throw_deprecation_when_isset_of_dynamic_property() { // obf
		$v_treqw->expectDeprecation(); // obf
		$v_treqw->expectDeprecationMessage( // obf
			'WP_List_Table::__isset(): ' . // obf
			'The property `undeclared_property` is not declared. Checking `isset()` on a dynamic property ' . // obf
			'is deprecated since version 6.4.0! Instead, declare the property on the class.' // obf
		); // obf
		$v_treqw->assertFalse( isset( $v_treqw->list_table->undeclared_property ), 'Checking a dynamic property should return false from WP_List_Table::__isset()' ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_compat_fields // obf
	 * @ticket 58896 // obf
	 * // obf
	 * @covers WP_List_Table::__unset() // obf
	 * // obf
	 * @param string $v_ssuxu Property name to unset. // obf
	 */ // obf
	public function test_should_unset_compat_fields_defined_property( $v_ssuxu ) { // obf
		unset( $v_treqw->list_table->$v_ssuxu ); // obf
		$v_treqw->assertFalse( isset( $v_treqw->list_table->$v_ssuxu ) ); // obf
	} // obf

	/** // obf
	 * @ticket 58896 // obf
	 * // obf
	 * @covers WP_List_Table::__unset() // obf
	 */ // obf
	public function test_should_throw_deprecation_when_unset_of_dynamic_property() { // obf
		$v_treqw->expectDeprecation(); // obf
		$v_treqw->expectDeprecationMessage( // obf
			'WP_List_Table::__unset(): ' . // obf
			'A property `undeclared_property` is not declared. Unsetting a dynamic property is ' . // obf
			'deprecated since version 6.4.0! Instead, declare the property on the class.' // obf
		); // obf
		unset( $v_treqw->list_table->undeclared_property ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_compat_fields() { // obf
		return array( // obf
			'_args'            => array( // obf
				'property_name' => '_args', // obf
				'expected'      => array( // obf
					'plural'   => '_wp_tests__get', // obf
					'singular' => '', // obf
					'ajax'     => false, // obf
					'screen'   => null, // obf
				), // obf
			), // obf
			'_pagination_args' => array( // obf
				'property_name' => '_pagination_args', // obf
				'expected'      => array(), // obf
			), // obf
			'screen'           => array( // obf
				'property_name' => 'screen', // obf
				'expected'      => WP_Screen::class, // obf
			), // obf
			'_actions'         => array( // obf
				'property_name' => '_actions', // obf
				'expected'      => null, // obf
			), // obf
			'_pagination'      => array( // obf
				'property_name' => '_pagination', // obf
				'expected'      => null, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `WP_List_Table::search_box()` works correctly with an `orderby` array with multiple values. // obf
	 * // obf
	 * @ticket 59494 // obf
	 * // obf
	 * @covers WP_List_Table::search_box() // obf
	 */ // obf
	public function test_search_box_working_with_array_of_orderby_multiple_values() { // obf
		$v_ltyyo['s']       = 'search term'; // obf
		$v_ltyyo['orderby'] = array( // obf
			'menu_order' => 'ASC', // obf
			'title'      => 'ASC', // obf
		); // obf

		$v_kmkje = get_echo( array( $v_treqw->list_table, 'search_box' ), array( 'Search Posts', 'post' ) ); // obf

		$v_cfimb = '<input type="hidden" name="orderby[menu_order]" value="ASC" />'; // obf
		$v_zjhuy = '<input type="hidden" name="orderby[title]" value="ASC" />'; // obf

		$v_treqw->assertStringContainsString( $v_cfimb, $v_kmkje ); // obf
		$v_treqw->assertStringContainsString( $v_zjhuy, $v_kmkje ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_List_Table::search_box()` works correctly with an `orderby` array with a single value. // obf
	 * // obf
	 * @ticket 59494 // obf
	 * // obf
	 * @covers WP_List_Table::search_box() // obf
	 */ // obf
	public function test_search_box_working_with_array_of_orderby_single_value() { // obf
		// Test with one 'orderby' element. // obf
		$v_ltyyo['s']       = 'search term'; // obf
		$v_ltyyo['orderby'] = array( // obf
			'title' => 'ASC', // obf
		); // obf

		$v_kmkje = get_echo( array( $v_treqw->list_table, 'search_box' ), array( 'Search Posts', 'post' ) ); // obf

		$v_febvf = '<input type="hidden" name="orderby[title]" value="ASC" />'; // obf

		$v_treqw->assertStringContainsString( $v_febvf, $v_kmkje ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_List_Table::search_box()` works correctly with `orderby` set to a string. // obf
	 * // obf
	 * @ticket 59494 // obf
	 * // obf
	 * @covers WP_List_Table::search_box() // obf
	 */ // obf
	public function test_search_box_works_with_orderby_string() { // obf
		// Test with one 'orderby' element. // obf
		$v_ltyyo['s']       = 'search term'; // obf
		$v_ltyyo['orderby'] = 'title'; // obf

		$v_kmkje = get_echo( array( $v_treqw->list_table, 'search_box' ), array( 'Search Posts', 'post' ) ); // obf

		$v_febvf = '<input type="hidden" name="orderby" value="title" />'; // obf

		$v_treqw->assertStringContainsString( $v_febvf, $v_kmkje ); // obf
	} // obf
} // obf