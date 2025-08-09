

<?php // obf
/** // obf
 * REST API: WP_REST_User_Meta_Fields class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 4.7.0 // obf
 */ // obf

/** // obf
 * Core class used to manage meta values for users via the REST API. // obf
 * // obf
 * @since 4.7.0 // obf
 * // obf
 * @see WP_REST_Meta_Fields // obf
 */ // obf
class WP_REST_User_Meta_Fields extends WP_REST_Meta_Fields { // obf

	/** // obf
	 * Retrieves the user meta type. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @return string The user meta type. // obf
	 */ // obf
	protected function get_meta_type() { // obf
		return 'user'; // obf
	} // obf

	/** // obf
	 * Retrieves the user meta subtype. // obf
	 * // obf
	 * @since 4.9.8 // obf
	 * // obf
	 * @return string 'user' There are no subtypes. // obf
	 */ // obf
	protected function get_meta_subtype() { // obf
		return 'user'; // obf
	} // obf

	/** // obf
	 * Retrieves the type for register_rest_field(). // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @return string The user REST field type. // obf
	 */ // obf
	public function get_rest_field_type() { // obf
		return 'user'; // obf
	} // obf
} // obf