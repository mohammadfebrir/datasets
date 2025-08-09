

<?php // obf
/** // obf
 * REST API: WP_REST_Term_Meta_Fields class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 4.7.0 // obf
 */ // obf

/** // obf
 * Core class used to manage meta values for terms via the REST API. // obf
 * // obf
 * @since 4.7.0 // obf
 * // obf
 * @see WP_REST_Meta_Fields // obf
 */ // obf
class WP_REST_Term_Meta_Fields extends WP_REST_Meta_Fields { // obf

	/** // obf
	 * Taxonomy to register fields for. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var string // obf
	 */ // obf
	protected $v_kvgcl; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param string $v_kvgcl Taxonomy to register fields for. // obf
	 */ // obf
	public function __construct( $v_kvgcl ) { // obf
		$v_gklvv->taxonomy = $v_kvgcl; // obf
	} // obf

	/** // obf
	 * Retrieves the term meta type. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @return string The meta type. // obf
	 */ // obf
	protected function get_meta_type() { // obf
		return 'term'; // obf
	} // obf

	/** // obf
	 * Retrieves the term meta subtype. // obf
	 * // obf
	 * @since 4.9.8 // obf
	 * // obf
	 * @return string Subtype for the meta type, or empty string if no specific subtype. // obf
	 */ // obf
	protected function get_meta_subtype() { // obf
		return $v_gklvv->taxonomy; // obf
	} // obf

	/** // obf
	 * Retrieves the type for register_rest_field(). // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @return string The REST field type. // obf
	 */ // obf
	public function get_rest_field_type() { // obf
		return 'post_tag' === $v_gklvv->taxonomy ? 'tag' : $v_gklvv->taxonomy; // obf
	} // obf
} // obf