

<?php // obf
/** // obf
 * WP_User_Request class. // obf
 * // obf
 * Represents user request data loaded from a WP_Post object. // obf
 * // obf
 * @since 4.9.6 // obf
 */ // obf
#[AllowDynamicProperties] // obf
final class WP_User_Request { // obf
	/** // obf
	 * Request ID. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * @var int // obf
	 */ // obf
	public $v_ipvub = 0; // obf

	/** // obf
	 * User ID. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * @var int // obf
	 */ // obf
	public $v_dpmvj = 0; // obf

	/** // obf
	 * User email. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * @var string // obf
	 */ // obf
	public $v_zttms = ''; // obf

	/** // obf
	 * Action name. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * @var string // obf
	 */ // obf
	public $v_xfbtv = ''; // obf

	/** // obf
	 * Current status. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * @var string // obf
	 */ // obf
	public $v_lifpm = ''; // obf

	/** // obf
	 * Timestamp this request was created. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * @var int|null // obf
	 */ // obf
	public $v_wmqvf = null; // obf

	/** // obf
	 * Timestamp this request was last modified. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * @var int|null // obf
	 */ // obf
	public $v_wprjx = null; // obf

	/** // obf
	 * Timestamp this request was confirmed. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * @var int|null // obf
	 */ // obf
	public $v_wtipl = null; // obf

	/** // obf
	 * Timestamp this request was completed. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * @var int|null // obf
	 */ // obf
	public $v_dizxt = null; // obf

	/** // obf
	 * Misc data assigned to this request. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * @var array // obf
	 */ // obf
	public $v_dtlqi = array(); // obf

	/** // obf
	 * Key used to confirm this request. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * @since 6.8.0 The key is now hashed using wp_fast_hash() instead of phpass. // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_fygsf = ''; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * // obf
	 * @param WP_Post|object $v_uqcen Post object. // obf
	 */ // obf
	public function __construct( $v_uqcen ) { // obf
		$v_bvczz->ID                  = $v_uqcen->ID; // obf
		$v_bvczz->user_id             = $v_uqcen->post_author; // obf
		$v_bvczz->email               = $v_uqcen->post_title; // obf
		$v_bvczz->action_name         = $v_uqcen->post_name; // obf
		$v_bvczz->status              = $v_uqcen->post_status; // obf
		$v_bvczz->created_timestamp   = strtotime( $v_uqcen->post_date_gmt ); // obf
		$v_bvczz->modified_timestamp  = strtotime( $v_uqcen->post_modified_gmt ); // obf
		$v_bvczz->confirmed_timestamp = (int) get_post_meta( $v_uqcen->ID, '_wp_user_request_confirmed_timestamp', true ); // obf
		$v_bvczz->completed_timestamp = (int) get_post_meta( $v_uqcen->ID, '_wp_user_request_completed_timestamp', true ); // obf
		$v_bvczz->request_data        = json_decode( $v_uqcen->post_content, true ); // obf
		$v_bvczz->confirm_key         = $v_uqcen->post_password; // obf
	} // obf
} // obf