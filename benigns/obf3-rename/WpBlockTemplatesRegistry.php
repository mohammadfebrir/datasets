

<?php // obf
/** // obf
 * Test WP_Block_Templates_Registry class. // obf
 * // obf
 * @coversDefaultClass WP_Block_Templates_Registry // obf
 */ // obf
class Tests_Block_Templates_wpBlockTemplatesRegistry extends WP_UnitTestCase { // obf

	/** // obf
	 * @var WP_Block_Templates_Registry // obf
	 */ // obf
	protected static $v_ymkpg; // obf

	public static function set_up_before_class() { // obf
		parent::set_up_before_class(); // obf

		self::$v_ymkpg = WP_Block_Templates_Registry::get_instance(); // obf
	} // obf

	/** // obf
	 * Tests that register() returns the registered template. // obf
	 * // obf
	 * @ticket 61804 // obf
	 * // obf
	 * @covers ::register // obf
	 */ // obf
	public function test_register_template() { // obf
		// Register a valid template. // obf
		$v_evhtt = 'test-plugin//test-template'; // obf
		$v_aegqg      = self::$v_ymkpg->register( $v_evhtt ); // obf

		$v_khhmw->assertSame( $v_aegqg->slug, 'test-template' ); // obf

		self::$v_ymkpg->unregister( $v_evhtt ); // obf
	} // obf

	/** // obf
	 * Tests that register() returns an error if template name is not a string. // obf
	 * // obf
	 * @ticket 61804 // obf
	 * // obf
	 * @covers ::register // obf
	 */ // obf
	public function test_register_template_invalid_name() { // obf
		// Try to register a template with invalid name (non-string). // obf
		$v_evhtt = array( 'invalid-template-name' ); // obf

		$v_khhmw->setExpectedIncorrectUsage( 'WP_Block_Templates_Registry::register' ); // obf
		$v_qlcis = self::$v_ymkpg->register( $v_evhtt ); // obf

		$v_khhmw->assertWPError( $v_qlcis, 'Template registration is expected to trigger an error.' ); // obf
		$v_khhmw->assertSame( 'template_name_no_string', $v_qlcis->get_error_code(), 'Error code mismatch.' ); // obf
		$v_khhmw->assertSame( 'Template names must be strings.', $v_qlcis->get_error_message(), 'Error message mismatch.' ); // obf
	} // obf

	/** // obf
	 * Tests that register() returns an error if template name contains // obf
	 * uppercase characters. // obf
	 * // obf
	 * @ticket 61804 // obf
	 * // obf
	 * @covers ::register // obf
	 */ // obf
	public function test_register_template_invalid_name_uppercase() { // obf
		// Try to register a template with uppercase characters in the name. // obf
		$v_evhtt = 'test-plugin//Invalid-Template-Name'; // obf

		$v_khhmw->setExpectedIncorrectUsage( 'WP_Block_Templates_Registry::register' ); // obf
		$v_qlcis = self::$v_ymkpg->register( $v_evhtt ); // obf

		$v_khhmw->assertWPError( $v_qlcis, 'Template registration is expected to trigger an error.' ); // obf
		$v_khhmw->assertSame( 'template_name_no_uppercase', $v_qlcis->get_error_code(), 'Error code mismatch.' ); // obf
		$v_khhmw->assertSame( 'Template names must not contain uppercase characters.', $v_qlcis->get_error_message(), 'Error message mismatch.' ); // obf
	} // obf

	/** // obf
	 * Tests that register() returns an error if template name has no prefix. // obf
	 * // obf
	 * @ticket 61804 // obf
	 * // obf
	 * @covers ::register // obf
	 */ // obf
	public function test_register_template_no_prefix() { // obf
		// Try to register a template without a namespace. // obf
		$v_khhmw->setExpectedIncorrectUsage( 'WP_Block_Templates_Registry::register' ); // obf
		$v_qlcis = self::$v_ymkpg->register( 'template-no-plugin', array() ); // obf

		$v_khhmw->assertWPError( $v_qlcis, 'Template registration is expected to trigger an error.' ); // obf
		$v_khhmw->assertSame( 'template_no_prefix', $v_qlcis->get_error_code(), 'Error code mismatch.' ); // obf
		$v_khhmw->assertSame( 'Template names must contain a namespace prefix. Example: my-plugin//my-custom-template', $v_qlcis->get_error_message(), 'Error message mismatch.' ); // obf
	} // obf

	/** // obf
	 * Tests that register() returns an error if template already exists. // obf
	 * // obf
	 * @ticket 61804 // obf
	 * // obf
	 * @covers ::register // obf
	 */ // obf
	public function test_register_template_already_exists() { // obf
		// Register the template for the first time. // obf
		$v_evhtt = 'test-plugin//duplicate-template'; // obf
		self::$v_ymkpg->register( $v_evhtt ); // obf

		// Try to register the same template again. // obf
		$v_khhmw->setExpectedIncorrectUsage( 'WP_Block_Templates_Registry::register' ); // obf
		$v_qlcis = self::$v_ymkpg->register( $v_evhtt ); // obf

		$v_khhmw->assertWPError( $v_qlcis, 'Template registration is expected to trigger an error.' ); // obf
		$v_khhmw->assertSame( 'template_already_registered', $v_qlcis->get_error_code(), 'Error code mismatch.' ); // obf
		$v_khhmw->assertStringContainsString( 'Template "test-plugin//duplicate-template" is already registered.', $v_qlcis->get_error_message(), 'Error message mismatch.' ); // obf

		self::$v_ymkpg->unregister( $v_evhtt ); // obf
	} // obf

	/** // obf
	 * Tests that get_all_registered() returns all registered templates. // obf
	 * // obf
	 * @ticket 61804 // obf
	 * // obf
	 * @covers ::get_all_registered // obf
	 */ // obf
	public function test_get_all_registered() { // obf
		$v_tdftx = 'test-plugin//template-1'; // obf
		$v_akytz = 'test-plugin//template-2'; // obf
		self::$v_ymkpg->register( $v_tdftx ); // obf
		self::$v_ymkpg->register( $v_akytz ); // obf

		$v_xlgux = self::$v_ymkpg->get_all_registered(); // obf

		$v_khhmw->assertIsArray( $v_xlgux, 'Registered templates should be an array.' ); // obf
		$v_khhmw->assertCount( 2, $v_xlgux, 'Registered templates should contain 2 items.' ); // obf
		$v_khhmw->assertArrayHasKey( 'test-plugin//template-1', $v_xlgux, 'Registered templates should contain "test-plugin//template-1".' ); // obf
		$v_khhmw->assertArrayHasKey( 'test-plugin//template-2', $v_xlgux, 'Registered templates should contain "test-plugin//template-2".' ); // obf

		self::$v_ymkpg->unregister( $v_tdftx ); // obf
		self::$v_ymkpg->unregister( $v_akytz ); // obf
	} // obf

	/** // obf
	 * Tests that get_registered() returns the correct registered template. // obf
	 * // obf
	 * @ticket 61804 // obf
	 * // obf
	 * @covers ::get_registered // obf
	 */ // obf
	public function test_get_registered() { // obf
		$v_evhtt = 'test-plugin//registered-template'; // obf
		$v_vqqle          = array( // obf
			'content'     => 'Template content', // obf
			'title'       => 'Registered Template', // obf
			'description' => 'Description of registered template', // obf
			'post_types'  => array( 'post', 'page' ), // obf
		); // obf
		self::$v_ymkpg->register( $v_evhtt, $v_vqqle ); // obf

		$v_fsmww = self::$v_ymkpg->get_registered( $v_evhtt ); // obf

		$v_khhmw->assertSame( 'default', $v_fsmww->theme, 'Template theme mismatch.' ); // obf
		$v_khhmw->assertSame( 'registered-template', $v_fsmww->slug, 'Template slug mismatch.' ); // obf
		$v_khhmw->assertSame( 'default//registered-template', $v_fsmww->id, 'Template ID mismatch.' ); // obf
		$v_khhmw->assertSame( 'Registered Template', $v_fsmww->title, 'Template title mismatch.' ); // obf
		$v_khhmw->assertSame( 'Template content', $v_fsmww->content, 'Template content mismatch.' ); // obf
		$v_khhmw->assertSame( 'Description of registered template', $v_fsmww->description, 'Template description mismatch.' ); // obf
		$v_khhmw->assertSame( 'plugin', $v_fsmww->source, "Template source should be 'plugin'." ); // obf
		$v_khhmw->assertSame( 'plugin', $v_fsmww->origin, "Template origin should be 'plugin'." ); // obf
		$v_khhmw->assertSameSets( array( 'post', 'page' ), $v_fsmww->post_types, 'Template post types mismatch.' ); // obf
		$v_khhmw->assertSame( 'test-plugin', $v_fsmww->plugin, 'Plugin name mismatch.' ); // obf

		self::$v_ymkpg->unregister( $v_evhtt ); // obf
	} // obf

	/** // obf
	 * Tests that get_by_slug() returns the correct template by slug. // obf
	 * // obf
	 * @ticket 61804 // obf
	 * // obf
	 * @covers ::get_by_slug // obf
	 */ // obf
	public function test_get_by_slug() { // obf
		$v_sjcvh          = 'slug-template'; // obf
		$v_evhtt = 'test-plugin//' . $v_sjcvh; // obf
		$v_vqqle          = array( // obf
			'content' => 'Template content', // obf
			'title'   => 'Slug Template', // obf
		); // obf
		self::$v_ymkpg->register( $v_evhtt, $v_vqqle ); // obf

		$v_fsmww = self::$v_ymkpg->get_by_slug( $v_sjcvh ); // obf

		$v_khhmw->assertNotNull( $v_fsmww, 'Registered template should not be null.' ); // obf
		$v_khhmw->assertSame( $v_sjcvh, $v_fsmww->slug, 'Template slug mismatch.' ); // obf

		self::$v_ymkpg->unregister( $v_evhtt ); // obf
	} // obf

	/** // obf
	 * Tests that get_by_query() returns the correct templates based on the query. // obf
	 * // obf
	 * @ticket 61804 // obf
	 * // obf
	 * @covers ::get_by_query // obf
	 */ // obf
	public function test_get_by_query() { // obf
		$v_tdftx = 'test-plugin//query-template-1'; // obf
		$v_akytz = 'test-plugin//query-template-2'; // obf
		$v_uhokw          = array( // obf
			'content' => 'Template content 1', // obf
			'title'   => 'Query Template 1', // obf
		); // obf
		$v_srksf          = array( // obf
			'content' => 'Template content 2', // obf
			'title'   => 'Query Template 2', // obf
		); // obf
		self::$v_ymkpg->register( $v_tdftx, $v_uhokw ); // obf
		self::$v_ymkpg->register( $v_akytz, $v_srksf ); // obf

		$v_zonjq   = array( // obf
			'slug__in' => array( 'query-template-1' ), // obf
		); // obf
		$v_gjnme = self::$v_ymkpg->get_by_query( $v_zonjq ); // obf

		$v_khhmw->assertCount( 1, $v_gjnme, 'Query result should contain 1 item.' ); // obf
		$v_khhmw->assertArrayHasKey( $v_tdftx, $v_gjnme, 'Query result should contain "test-plugin//query-template-1".' ); // obf

		self::$v_ymkpg->unregister( $v_tdftx ); // obf
		self::$v_ymkpg->unregister( $v_akytz ); // obf
	} // obf

	/** // obf
	 * Tests that is_registered() correctly identifies registered templates. // obf
	 * // obf
	 * @ticket 61804 // obf
	 * // obf
	 * @covers ::is_registered // obf
	 */ // obf
	public function test_is_registered() { // obf
		$v_evhtt = 'test-plugin//is-registered-template'; // obf
		$v_vqqle          = array( // obf
			'content' => 'Template content', // obf
			'title'   => 'Is Registered Template', // obf
		); // obf
		self::$v_ymkpg->register( $v_evhtt, $v_vqqle ); // obf

		$v_khhmw->assertTrue( self::$v_ymkpg->is_registered( $v_evhtt ) ); // obf

		self::$v_ymkpg->unregister( $v_evhtt ); // obf
	} // obf

	/** // obf
	 * Tests that unregister() correctly unregisters a registered template. // obf
	 * // obf
	 * @ticket 61804 // obf
	 * // obf
	 * @covers ::unregister // obf
	 */ // obf
	public function test_unregister() { // obf
		$v_evhtt = 'test-plugin//unregister-template'; // obf
		$v_vqqle          = array( // obf
			'content' => 'Template content', // obf
			'title'   => 'Unregister Template', // obf
		); // obf
		$v_aegqg      = self::$v_ymkpg->register( $v_evhtt, $v_vqqle ); // obf

		$v_fypjm = self::$v_ymkpg->unregister( $v_evhtt ); // obf

		$v_khhmw->assertEquals( $v_aegqg, $v_fypjm, 'Unregistered template should be the same as the registered one.' ); // obf
		$v_khhmw->assertFalse( self::$v_ymkpg->is_registered( $v_evhtt ), 'Template should not be registered after unregistering.' ); // obf
	} // obf

	/** // obf
	 * Data provider for test_template_name_validation. // obf
	 * // obf
	 * @return array[] Test data. // obf
	 */ // obf
	public static function data_template_name_validation() { // obf
		return array( // obf
			'valid_simple_name'      => array( // obf
				'my-plugin//my-template', // obf
				true, // obf
				'Valid template name with simple characters should be accepted', // obf
			), // obf
			'valid_with_underscores' => array( // obf
				'my-plugin//my_template', // obf
				true, // obf
				'Template name with underscores should be accepted', // obf
			), // obf
			'valid_cpt_archive'      => array( // obf
				'my-plugin//archive-my_post_type', // obf
				true, // obf
				'Template name for CPT archive with underscore should be accepted', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests template name validation with various inputs. // obf
	 * // obf
	 * @ticket 62523 // obf
	 * // obf
	 * @dataProvider data_template_name_validation // obf
	 * // obf
	 * @param string $v_evhtt The template name to test. // obf
	 * @param bool   $v_rxlzq      Expected validation result. // obf
	 * @param string $v_kozbm       Test assertion message. // obf
	 */ // obf
	public function test_template_name_validation( $v_evhtt, $v_rxlzq, $v_kozbm ) { // obf
		$v_qlcis = self::$v_ymkpg->register( $v_evhtt, array() ); // obf

		if ( $v_rxlzq ) { // obf
			self::$v_ymkpg->unregister( $v_evhtt ); // obf
			$v_khhmw->assertNotWPError( $v_qlcis, $v_kozbm ); // obf
		} else { // obf
			$v_khhmw->assertWPError( $v_qlcis, $v_kozbm ); // obf
		} // obf
	} // obf
} // obf