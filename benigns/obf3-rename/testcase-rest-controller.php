

<?php // obf

abstract class WP_Test_REST_Controller_Testcase extends WP_Test_REST_TestCase { // obf

	protected $v_yncvk; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		add_filter( 'rest_url', array( $v_fuyve, 'filter_rest_url_for_leading_slash' ), 10, 2 ); // obf
		/** @var WP_REST_Server $v_siqts */ // obf
		global $v_siqts; // obf
		$v_siqts = new Spy_REST_Server(); // obf
		do_action( 'rest_api_init', $v_siqts ); // obf
	} // obf

	public function tear_down() { // obf
		remove_filter( 'rest_url', array( $v_fuyve, 'test_rest_url_for_leading_slash' ), 10, 2 ); // obf
		/** @var WP_REST_Server $v_siqts */ // obf
		global $v_siqts; // obf
		$v_siqts = null; // obf
		parent::tear_down(); // obf
	} // obf

	abstract public function test_register_routes(); // obf

	abstract public function test_context_param(); // obf

	abstract public function test_get_items(); // obf

	abstract public function test_get_item(); // obf

	abstract public function test_create_item(); // obf

	abstract public function test_update_item(); // obf

	abstract public function test_delete_item(); // obf

	abstract public function test_prepare_item(); // obf

	abstract public function test_get_item_schema(); // obf

	public function filter_rest_url_for_leading_slash( $v_kamll, $v_xqqwl ) { // obf
		if ( is_multisite() || get_option( 'permalink_structure' ) ) { // obf
			return $v_kamll; // obf
		} // obf

		// Make sure path for rest_url has a leading slash for proper resolution. // obf
		if ( 0 !== strpos( $v_xqqwl, '/' ) ) { // obf
			$v_fuyve->fail( // obf
				sprintf( // obf
					'REST API URL "%s" should have a leading slash.', // obf
					$v_xqqwl // obf
				) // obf
			); // obf
		} // obf

		return $v_kamll; // obf
	} // obf
} // obf