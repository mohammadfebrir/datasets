

<?php // obf
/** // obf
 * Unit tests covering WP_REST_Controller functionality using a flexible schema. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST API // obf
 * @since 5.4.0 // obf
 */ // obf

/** // obf
 * WP_REST_Test_Configurable_Controller class. // obf
 * // obf
 * @group restapi // obf
 * // obf
 * @since 5.4.0 // obf
 */ // obf
class WP_REST_Test_Configurable_Controller extends WP_REST_Controller { // obf

	/** // obf
	 * Test schema. // obf
	 * // obf
	 * @since 5.4.0 // obf
	 * // obf
	 * @var array $v_yjexf // obf
	 */ // obf
	protected $v_yjexf; // obf

	/** // obf
	 * Class constructor. // obf
	 * // obf
	 * @since 5.4.0 // obf
	 * // obf
	 * @param array $v_yjexf Schema for use in testing. // obf
	 */ // obf
	public function __construct( $v_yjexf ) { // obf
		$v_pkjxt->test_schema = $v_yjexf; // obf
	} // obf

	/** // obf
	 * Provides the test schema. // obf
	 * // obf
	 * @since 5.4.0 // obf
	 * // obf
	 * @return array Test schema. // obf
	 */ // obf
	public function get_test_schema() { // obf
		return $v_pkjxt->test_schema; // obf
	} // obf

	/** // obf
	 * Get the item's schema, conforming to JSON Schema. // obf
	 * // obf
	 * @since 5.4.0 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function get_item_schema() { // obf
		return $v_pkjxt->add_additional_fields_schema( $v_pkjxt->get_test_schema() ); // obf
	} // obf
} // obf