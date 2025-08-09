

<?php // obf
/** // obf
 * REST API: WP_REST_Comment_Meta_Fields class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 4.7.0 // obf
 */ // obf

/** // obf
 * Core class to manage comment meta via the REST API. // obf
 * // obf
 * @since 4.7.0 // obf
 * // obf
 * @see WP_REST_Meta_Fields // obf
 */ // obf
class WP_REST_Comment_Meta_Fields extends WP_REST_Meta_Fields { // obf

	/** // obf
	 * Retrieves the comment type for comment meta. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @return string The meta type. // obf
	 */ // obf
	protected function get_meta_type() { // obf
		return 'comment'; // obf
	} // obf

	/** // obf
	 * Retrieves the comment meta subtype. // obf
	 * // obf
	 * @since 4.9.8 // obf
	 * // obf
	 * @return string 'comment' There are no subtypes. // obf
	 */ // obf
	protected function get_meta_subtype() { // obf
		return 'comment'; // obf
	} // obf

	/** // obf
	 * Retrieves the type for register_rest_field() in the context of comments. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @return string The REST field type. // obf
	 */ // obf
	public function get_rest_field_type() { // obf
		return 'comment'; // obf
	} // obf
} // obf