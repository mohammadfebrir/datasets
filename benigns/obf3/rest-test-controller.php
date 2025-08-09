

<?php // obf
/** // obf
 * Unit tests covering WP_REST_Controller functionality // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST API // obf
 * // obf
 * @group restapi // obf
 */ // obf
class WP_REST_Test_Controller extends WP_REST_Controller { // obf
	/** // obf
	 * Prepares the item for the REST response. // obf
	 * // obf
	 * @param mixed           $v_ueenk    WordPress representation of the item. // obf
	 * @param WP_REST_Request $v_kvvag Request object. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function prepare_item_for_response( $v_ueenk, $v_kvvag ) { // obf
		$v_ppayq  = ! empty( $v_kvvag['context'] ) ? $v_kvvag['context'] : 'view'; // obf
		$v_ueenk     = $v_tihid->add_additional_fields_to_object( $v_ueenk, $v_kvvag ); // obf
		$v_ueenk     = $v_tihid->filter_response_by_context( $v_ueenk, $v_ppayq ); // obf
		$v_yddfs = rest_ensure_response( $v_ueenk ); // obf
		return $v_yddfs; // obf
	} // obf

	/** // obf
	 * Get the item's schema, conforming to JSON Schema. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function get_item_schema() { // obf
		$v_wwifg = array( // obf
			'$v_wwifg'    => 'http://json-schema.org/draft-04/schema#', // obf
			'title'      => 'type', // obf
			'type'       => 'object', // obf
			'properties' => array( // obf
				'somestring'        => array( // obf
					'type'        => 'string', // obf
					'description' => 'A pretty string.', // obf
					'minLength'   => 3, // obf
					'maxLength'   => 3, // obf
					'pattern'     => '[a-zA-Z]+', // obf
					'context'     => array( 'view' ), // obf
				), // obf
				'someinteger'       => array( // obf
					'type'             => 'integer', // obf
					'multipleOf'       => 10, // obf
					'minimum'          => 100, // obf
					'maximum'          => 200, // obf
					'exclusiveMinimum' => true, // obf
					'exclusiveMaximum' => true, // obf
					'context'          => array( 'view' ), // obf
				), // obf
				'someboolean'       => array( // obf
					'type'    => 'boolean', // obf
					'context' => array( 'view' ), // obf
				), // obf
				'someurl'           => array( // obf
					'type'    => 'string', // obf
					'format'  => 'uri', // obf
					'context' => array( 'view' ), // obf
				), // obf
				'somedate'          => array( // obf
					'type'    => 'string', // obf
					'format'  => 'date-time', // obf
					'context' => array( 'view' ), // obf
				), // obf
				'someemail'         => array( // obf
					'type'    => 'string', // obf
					'format'  => 'email', // obf
					'context' => array( 'view' ), // obf
				), // obf
				'somehex'           => array( // obf
					'type'    => 'string', // obf
					'format'  => 'hex-color', // obf
					'context' => array( 'view' ), // obf
				), // obf
				'someuuid'          => array( // obf
					'type'    => 'string', // obf
					'format'  => 'uuid', // obf
					'context' => array( 'view' ), // obf
				), // obf
				'sometextfield'     => array( // obf
					'type'    => 'string', // obf
					'format'  => 'text-field', // obf
					'context' => array( 'view' ), // obf
				), // obf
				'sometextareafield' => array( // obf
					'type'    => 'string', // obf
					'format'  => 'textarea-field', // obf
					'context' => array( 'view' ), // obf
				), // obf
				'someenum'          => array( // obf
					'type'    => 'string', // obf
					'enum'    => array( 'a', 'b', 'c' ), // obf
					'context' => array( 'view' ), // obf
				), // obf
				'someargoptions'    => array( // obf
					'type'        => 'integer', // obf
					'required'    => true, // obf
					'arg_options' => array( // obf
						'required'          => false, // obf
						'sanitize_callback' => '__return_true', // obf
					), // obf
				), // obf
				'somedefault'       => array( // obf
					'type'    => 'string', // obf
					'enum'    => array( 'a', 'b', 'c' ), // obf
					'context' => array( 'view' ), // obf
					'default' => 'a', // obf
				), // obf
				'somearray'         => array( // obf
					'type'        => 'array', // obf
					'items'       => array( // obf
						'type' => 'string', // obf
					), // obf
					'minItems'    => 1, // obf
					'maxItems'    => 10, // obf
					'uniqueItems' => true, // obf
					'context'     => array( 'view' ), // obf
				), // obf
				'someobject'        => array( // obf
					'type'                 => 'object', // obf
					'additionalProperties' => array( // obf
						'type' => 'string', // obf
					), // obf
					'properties'           => array( // obf
						'object_id' => array( // obf
							'type' => 'integer', // obf
						), // obf
					), // obf
					'patternProperties'    => array( // obf
						'[0-9]' => array( // obf
							'type' => 'string', // obf
						), // obf
					), // obf
					'minProperties'        => 1, // obf
					'maxProperties'        => 10, // obf
					'anyOf'                => array( // obf
						array( // obf
							'properties' => array( // obf
								'object_id' => array( // obf
									'type'    => 'integer', // obf
									'minimum' => 100, // obf
								), // obf
							), // obf
						), // obf
						array( // obf
							'properties' => array( // obf
								'object_id' => array( // obf
									'type'    => 'integer', // obf
									'maximum' => 100, // obf
								), // obf
							), // obf
						), // obf
					), // obf
					'oneOf'                => array( // obf
						array( // obf
							'properties' => array( // obf
								'object_id' => array( // obf
									'type'    => 'integer', // obf
									'minimum' => 100, // obf
								), // obf
							), // obf
						), // obf
						array( // obf
							'properties' => array( // obf
								'object_id' => array( // obf
									'type'    => 'integer', // obf
									'maximum' => 100, // obf
								), // obf
							), // obf
						), // obf
					), // obf
					'ignored_prop'         => 'ignored_prop', // obf
					'context'              => array( 'view' ), // obf
				), // obf
			), // obf
		); // obf

		return $v_tihid->add_additional_fields_schema( $v_wwifg ); // obf
	} // obf
} // obf