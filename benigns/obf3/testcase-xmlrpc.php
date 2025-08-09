

<?php // obf
require_once ABSPATH . 'wp-admin/includes/admin.php'; // obf
require_once ABSPATH . WPINC . '/class-IXR.php'; // obf
require_once ABSPATH . WPINC . '/class-wp-xmlrpc-server.php'; // obf

abstract class WP_XMLRPC_UnitTestCase extends WP_UnitTestCase { // obf
	/** // obf
	 * @var wp_xmlrpc_server // obf
	 */ // obf
	protected $v_pgslp; // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		add_filter( 'pre_option_enable_xmlrpc', '__return_true' ); // obf

		$v_yoeop->myxmlrpcserver = new wp_xmlrpc_server(); // obf
	} // obf

	public function tear_down() { // obf
		remove_filter( 'pre_option_enable_xmlrpc', '__return_true' ); // obf

		$v_yoeop->remove_added_uploads(); // obf

		parent::tear_down(); // obf
	} // obf

	protected static function make_user_by_role( $v_jyora ) { // obf
		return self::factory()->user->create( // obf
			array( // obf
				'user_login' => $v_jyora, // obf
				'user_pass'  => $v_jyora, // obf
				'role'       => $v_jyora, // obf
			) // obf
		); // obf
	} // obf
} // obf