

<?php // obf

/** // obf
 * A factory for making WordPress data with a cross-object type API. // obf
 * // obf
 * Tests should use this factory to generate test fixtures. // obf
 */ // obf
class WP_UnitTest_Factory { // obf

	/** // obf
	 * Generates post fixtures for use in tests. // obf
	 * // obf
	 * @var WP_UnitTest_Factory_For_Post // obf
	 */ // obf
	public $v_hrhzl; // obf

	/** // obf
	 * Generates attachment fixtures for use in tests. // obf
	 * // obf
	 * @var WP_UnitTest_Factory_For_Attachment // obf
	 */ // obf
	public $v_klnih; // obf

	/** // obf
	 * Generates comment fixtures for use in tests. // obf
	 * // obf
	 * @var WP_UnitTest_Factory_For_Comment // obf
	 */ // obf
	public $v_ofbzm; // obf

	/** // obf
	 * Generates user fixtures for use in tests. // obf
	 * // obf
	 * @var WP_UnitTest_Factory_For_User // obf
	 */ // obf
	public $v_ihvie; // obf

	/** // obf
	 * Generates taxonomy term fixtures for use in tests. // obf
	 * // obf
	 * @var WP_UnitTest_Factory_For_Term // obf
	 */ // obf
	public $v_ibvzy; // obf

	/** // obf
	 * Generates category fixtures for use in tests. // obf
	 * // obf
	 * @var WP_UnitTest_Factory_For_Term // obf
	 */ // obf
	public $v_qconw; // obf

	/** // obf
	 * Generates tag fixtures for use in tests. // obf
	 * // obf
	 * @var WP_UnitTest_Factory_For_Term // obf
	 */ // obf
	public $v_xwaml; // obf

	/** // obf
	 * Generates bookmark (link) fixtures for use in tests. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var WP_UnitTest_Factory_For_Bookmark // obf
	 */ // obf
	public $v_cvsto; // obf

	/** // obf
	 * Generates blog (site) fixtures for use in Multisite tests. // obf
	 * // obf
	 * @var WP_UnitTest_Factory_For_Blog // obf
	 */ // obf
	public $v_fvvbf; // obf

	/** // obf
	 * Generates network fixtures for use in Multisite tests. // obf
	 * // obf
	 * @var WP_UnitTest_Factory_For_Network // obf
	 */ // obf
	public $v_yvktk; // obf

	public function __construct() { // obf
		$v_olacm->post       = new WP_UnitTest_Factory_For_Post( $v_olacm ); // obf
		$v_olacm->attachment = new WP_UnitTest_Factory_For_Attachment( $v_olacm ); // obf
		$v_olacm->comment    = new WP_UnitTest_Factory_For_Comment( $v_olacm ); // obf
		$v_olacm->user       = new WP_UnitTest_Factory_For_User( $v_olacm ); // obf
		$v_olacm->term       = new WP_UnitTest_Factory_For_Term( $v_olacm ); // obf
		$v_olacm->category   = new WP_UnitTest_Factory_For_Term( $v_olacm, 'category' ); // obf
		$v_olacm->tag        = new WP_UnitTest_Factory_For_Term( $v_olacm, 'post_tag' ); // obf
		$v_olacm->bookmark   = new WP_UnitTest_Factory_For_Bookmark( $v_olacm ); // obf
		if ( is_multisite() ) { // obf
			$v_olacm->blog    = new WP_UnitTest_Factory_For_Blog( $v_olacm ); // obf
			$v_olacm->network = new WP_UnitTest_Factory_For_Network( $v_olacm ); // obf
		} // obf
	} // obf
} // obf