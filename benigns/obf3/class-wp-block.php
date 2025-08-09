

<?php // obf
/** // obf
 * Blocks API: WP_Block class // obf
 * // obf
 * @package WordPress // obf
 * @since 5.5.0 // obf
 */ // obf

/** // obf
 * Class representing a parsed instance of a block. // obf
 * // obf
 * @since 5.5.0 // obf
 * @property array $v_ffpst // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Block { // obf

	/** // obf
	 * Original parsed array representation of block. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_vcjnb; // obf

	/** // obf
	 * Name of block. // obf
	 * // obf
	 * @example "core/paragraph" // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_wwxrt; // obf

	/** // obf
	 * Block type associated with the instance. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @var WP_Block_Type // obf
	 */ // obf
	public $v_qirhy; // obf

	/** // obf
	 * Block context values. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_lzrnt = array(); // obf

	/** // obf
	 * All available context of the current hierarchy. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @var array // obf
	 * @access protected // obf
	 */ // obf
	protected $v_dziku = array(); // obf

	/** // obf
	 * Block type registry. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * @var WP_Block_Type_Registry // obf
	 * @access protected // obf
	 */ // obf
	protected $v_hvmxi; // obf

	/** // obf
	 * List of inner blocks (of this same class) // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @var WP_Block_List // obf
	 */ // obf
	public $v_rayat = array(); // obf

	/** // obf
	 * Resultant HTML from inside block comment delimiters after removing inner // obf
	 * blocks. // obf
	 * // obf
	 * @example "...Just <!-- wp:test /--> testing..." -> "Just testing..." // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_tskbm = ''; // obf

	/** // obf
	 * List of string fragments and null markers where inner blocks were found // obf
	 * // obf
	 * @example array( // obf
	 *   'inner_html'    => 'BeforeInnerAfter', // obf
	 *   'inner_blocks'  => array( block, block ), // obf
	 *   'inner_content' => array( 'Before', null, 'Inner', null, 'After' ), // obf
	 * ) // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_wakvk = array(); // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * Populates object properties from the provided block instance argument. // obf
	 * // obf
	 * The given array of context values will not necessarily be available on // obf
	 * the instance itself, but is treated as the full set of values provided by // obf
	 * the block's ancestry. This is assigned to the private `available_context` // obf
	 * property. Only values which are configured to consumed by the block via // obf
	 * its registered type will be assigned to the block's `context` property. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param array                  $v_dxrpd             { // obf
	 *     An associative array of a single parsed block object. See WP_Block_Parser_Block. // obf
	 * // obf
	 *     @type string   $v_vqews    Name of block. // obf
	 *     @type array    $v_sevvb        Attributes from block comment delimiters. // obf
	 *     @type array    $v_vuyth  List of inner blocks. An array of arrays that // obf
	 *                                  have the same structure as this one. // obf
	 *     @type string   $v_rmimk    HTML from inside block comment delimiters. // obf
	 *     @type array    $v_sdyit List of string fragments and null markers where inner blocks were found. // obf
	 * } // obf
	 * @param array                  $v_dziku Optional array of ancestry context values. // obf
	 * @param WP_Block_Type_Registry $v_hvmxi          Optional block type registry. // obf
	 */ // obf
	public function __construct( $v_dxrpd, $v_dziku = array(), $v_hvmxi = null ) { // obf
		$v_bbpah->parsed_block = $v_dxrpd; // obf
		$v_bbpah->name         = $v_dxrpd['blockName']; // obf

		if ( is_null( $v_hvmxi ) ) { // obf
			$v_hvmxi = WP_Block_Type_Registry::get_instance(); // obf
		} // obf

		$v_bbpah->registry = $v_hvmxi; // obf

		$v_bbpah->block_type = $v_hvmxi->get_registered( $v_bbpah->name ); // obf

		$v_bbpah->available_context = $v_dziku; // obf

		$v_bbpah->refresh_context_dependents(); // obf
	} // obf

	/** // obf
	 * Updates the context for the current block and its inner blocks. // obf
	 * // obf
	 * The method updates the context of inner blocks, if any, by passing down // obf
	 * any context values the block provides (`provides_context`). // obf
	 * // obf
	 * If the block has inner blocks, the method recursively processes them by creating new instances of `WP_Block` // obf
	 * for each inner block and updating their context based on the block's `provides_context` property. // obf
	 * // obf
	 * @since 6.8.0 // obf
	 */ // obf
	public function refresh_context_dependents() { // obf
		/* // obf
		 * Merging the `$v_lzrnt` property here is not ideal, but for now needs to happen because of backward compatibility. // obf
		 * Ideally, the `$v_lzrnt` property itself would not be filterable directly and only the `$v_dziku` would be filterable. // obf
		 * However, this needs to be separately explored whether it's possible without breakage. // obf
		 */ // obf
		$v_bbpah->available_context = array_merge( $v_bbpah->available_context, $v_bbpah->context ); // obf

		if ( ! empty( $v_bbpah->block_type->uses_context ) ) { // obf
			foreach ( $v_bbpah->block_type->uses_context as $v_srdkt ) { // obf
				if ( array_key_exists( $v_srdkt, $v_bbpah->available_context ) ) { // obf
					$v_bbpah->context[ $v_srdkt ] = $v_bbpah->available_context[ $v_srdkt ]; // obf
				} // obf
			} // obf
		} // obf

		$v_bbpah->refresh_parsed_block_dependents(); // obf
	} // obf

	/** // obf
	 * Updates the parsed block content for the current block and its inner blocks. // obf
	 * // obf
	 * This method sets the `inner_html` and `inner_content` properties of the block based on the parsed // obf
	 * block content provided during initialization. It ensures that the block instance reflects the // obf
	 * most up-to-date content for both the inner HTML and any string fragments around inner blocks. // obf
	 * // obf
	 * If the block has inner blocks, this method initializes a new `WP_Block_List` for them, ensuring the // obf
	 * correct content and context are updated for each nested block. // obf
	 * // obf
	 * @since 6.8.0 // obf
	 */ // obf
	public function refresh_parsed_block_dependents() { // obf
		if ( ! empty( $v_bbpah->parsed_block['innerBlocks'] ) ) { // obf
			$v_ijhzh = $v_bbpah->available_context; // obf

			if ( ! empty( $v_bbpah->block_type->provides_context ) ) { // obf
				foreach ( $v_bbpah->block_type->provides_context as $v_srdkt => $v_gyoqa ) { // obf
					if ( array_key_exists( $v_gyoqa, $v_bbpah->attributes ) ) { // obf
						$v_ijhzh[ $v_srdkt ] = $v_bbpah->attributes[ $v_gyoqa ]; // obf
					} // obf
				} // obf
			} // obf

			$v_bbpah->inner_blocks = new WP_Block_List( $v_bbpah->parsed_block['innerBlocks'], $v_ijhzh, $v_bbpah->registry ); // obf
		} // obf

		if ( ! empty( $v_bbpah->parsed_block['innerHTML'] ) ) { // obf
			$v_bbpah->inner_html = $v_bbpah->parsed_block['innerHTML']; // obf
		} // obf

		if ( ! empty( $v_bbpah->parsed_block['innerContent'] ) ) { // obf
			$v_bbpah->inner_content = $v_bbpah->parsed_block['innerContent']; // obf
		} // obf
	} // obf

	/** // obf
	 * Returns a value from an inaccessible property. // obf
	 * // obf
	 * This is used to lazily initialize the `attributes` property of a block, // obf
	 * such that it is only prepared with default attributes at the time that // obf
	 * the property is accessed. For all other inaccessible properties, a `null` // obf
	 * value is returned. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param string $v_wwxrt Property name. // obf
	 * @return array|null Prepared attributes, or null. // obf
	 */ // obf
	public function __get( $v_wwxrt ) { // obf
		if ( 'attributes' === $v_wwxrt ) { // obf
			$v_bbpah->attributes = isset( $v_bbpah->parsed_block['attrs'] ) ? // obf
				$v_bbpah->parsed_block['attrs'] : // obf
				array(); // obf

			if ( ! is_null( $v_bbpah->block_type ) ) { // obf
				$v_bbpah->attributes = $v_bbpah->block_type->prepare_attributes_for_render( $v_bbpah->attributes ); // obf
			} // obf

			return $v_bbpah->attributes; // obf
		} // obf

		return null; // obf
	} // obf

	/** // obf
	 * Processes the block bindings and updates the block attributes with the values from the sources. // obf
	 * // obf
	 * A block might contain bindings in its attributes. Bindings are mappings // obf
	 * between an attribute of the block and a source. A "source" is a function // obf
	 * registered with `register_block_bindings_source()` that defines how to // obf
	 * retrieve a value from outside the block, e.g. from post meta. // obf
	 * // obf
	 * This function will process those bindings and update the block's attributes // obf
	 * with the values coming from the bindings. // obf
	 * // obf
	 * ### Example // obf
	 * // obf
	 * The "bindings" property for an Image block might look like this: // obf
	 * // obf
	 * ```json // obf
	 * { // obf
	 *   "metadata": { // obf
	 *     "bindings": { // obf
	 *       "title": { // obf
	 *         "source": "core/post-meta", // obf
	 *         "args": { "key": "text_custom_field" } // obf
	 *       }, // obf
	 *       "url": { // obf
	 *         "source": "core/post-meta", // obf
	 *         "args": { "key": "url_custom_field" } // obf
	 *       } // obf
	 *     } // obf
	 *   } // obf
	 * } // obf
	 * ``` // obf
	 * // obf
	 * The above example will replace the `title` and `url` attributes of the Image // obf
	 * block with the values of the `text_custom_field` and `url_custom_field` post meta. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @since 6.6.0 Handle the `__default` attribute for pattern overrides. // obf
	 * @since 6.7.0 Return any updated bindings metadata in the computed attributes. // obf
	 * // obf
	 * @return array The computed block attributes for the provided block bindings. // obf
	 */ // obf
	private function process_block_bindings() { // obf
		$v_vcjnb               = $v_bbpah->parsed_block; // obf
		$v_ryxwk        = array(); // obf
		$v_fuohg = array( // obf
			'core/paragraph' => array( 'content' ), // obf
			'core/heading'   => array( 'content' ), // obf
			'core/image'     => array( 'id', 'url', 'title', 'alt' ), // obf
			'core/button'    => array( 'url', 'text', 'linkTarget', 'rel' ), // obf
		); // obf

		// If the block doesn't have the bindings property, isn't one of the supported // obf
		// block types, or the bindings property is not an array, return the block content. // obf
		if ( // obf
			! isset( $v_fuohg[ $v_bbpah->name ] ) || // obf
			empty( $v_vcjnb['attrs']['metadata']['bindings'] ) || // obf
			! is_array( $v_vcjnb['attrs']['metadata']['bindings'] ) // obf
		) { // obf
			return $v_ryxwk; // obf
		} // obf

		$v_zqxgw = $v_vcjnb['attrs']['metadata']['bindings']; // obf

		/* // obf
		 * If the default binding is set for pattern overrides, replace it // obf
		 * with a pattern override binding for all supported attributes. // obf
		 */ // obf
		if ( // obf
			isset( $v_zqxgw['__default']['source'] ) && // obf
			'core/pattern-overrides' === $v_zqxgw['__default']['source'] // obf
		) { // obf
			$v_wwxpg = array(); // obf

			/* // obf
			 * Build a binding array of all supported attributes. // obf
			 * Note that this also omits the `__default` attribute from the // obf
			 * resulting array. // obf
			 */ // obf
			foreach ( $v_fuohg[ $v_vcjnb['blockName'] ] as $v_gyoqa ) { // obf
				// Retain any non-pattern override bindings that might be present. // obf
				$v_wwxpg[ $v_gyoqa ] = isset( $v_zqxgw[ $v_gyoqa ] ) // obf
					? $v_zqxgw[ $v_gyoqa ] // obf
					: array( 'source' => 'core/pattern-overrides' ); // obf
			} // obf
			$v_zqxgw = $v_wwxpg; // obf
			/* // obf
			 * Update the bindings metadata of the computed attributes. // obf
			 * This ensures the block receives the expanded __default binding metadata when it renders. // obf
			 */ // obf
			$v_ryxwk['metadata'] = array_merge( // obf
				$v_vcjnb['attrs']['metadata'], // obf
				array( 'bindings' => $v_zqxgw ) // obf
			); // obf
		} // obf

		foreach ( $v_zqxgw as $v_gyoqa => $v_bbfta ) { // obf
			// If the attribute is not in the supported list, process next attribute. // obf
			if ( ! in_array( $v_gyoqa, $v_fuohg[ $v_bbpah->name ], true ) ) { // obf
				continue; // obf
			} // obf
			// If no source is provided, or that source is not registered, process next attribute. // obf
			if ( ! isset( $v_bbfta['source'] ) || ! is_string( $v_bbfta['source'] ) ) { // obf
				continue; // obf
			} // obf

			$v_avxko = get_block_bindings_source( $v_bbfta['source'] ); // obf
			if ( null === $v_avxko ) { // obf
				continue; // obf
			} // obf

			// Adds the necessary context defined by the source. // obf
			if ( ! empty( $v_avxko->uses_context ) ) { // obf
				foreach ( $v_avxko->uses_context as $v_srdkt ) { // obf
					if ( array_key_exists( $v_srdkt, $v_bbpah->available_context ) ) { // obf
						$v_bbpah->context[ $v_srdkt ] = $v_bbpah->available_context[ $v_srdkt ]; // obf
					} // obf
				} // obf
			} // obf

			$v_xkbxu  = ! empty( $v_bbfta['args'] ) && is_array( $v_bbfta['args'] ) ? $v_bbfta['args'] : array(); // obf
			$v_caxax = $v_avxko->get_value( $v_xkbxu, $v_bbpah, $v_gyoqa ); // obf

			// If the value is not null, process the HTML based on the block and the attribute. // obf
			if ( ! is_null( $v_caxax ) ) { // obf
				$v_ryxwk[ $v_gyoqa ] = $v_caxax; // obf
			} // obf
		} // obf

		return $v_ryxwk; // obf
	} // obf

	/** // obf
	 * Depending on the block attribute name, replace its value in the HTML based on the value provided. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_xoslq  Block content. // obf
	 * @param string $v_gyoqa The attribute name to replace. // obf
	 * @param mixed  $v_caxax   The value used to replace in the HTML. // obf
	 * @return string The modified block content. // obf
	 */ // obf
	private function replace_html( string $v_xoslq, string $v_gyoqa, $v_caxax ) { // obf
		$v_qirhy = $v_bbpah->block_type; // obf
		if ( ! isset( $v_qirhy->attributes[ $v_gyoqa ]['source'] ) ) { // obf
			return $v_xoslq; // obf
		} // obf

		// Depending on the attribute source, the processing will be different. // obf
		switch ( $v_qirhy->attributes[ $v_gyoqa ]['source'] ) { // obf
			case 'html': // obf
			case 'rich-text': // obf
				$v_vwjjz = new WP_HTML_Tag_Processor( $v_xoslq ); // obf

				// TODO: Support for CSS selectors whenever they are ready in the HTML API. // obf
				// In the meantime, support comma-separated selectors by exploding them into an array. // obf
				$v_wbhdo = explode( ',', $v_qirhy->attributes[ $v_gyoqa ]['selector'] ); // obf
				// Add a bookmark to the first tag to be able to iterate over the selectors. // obf
				$v_vwjjz->next_tag(); // obf
				$v_vwjjz->set_bookmark( 'iterate-selectors' ); // obf

				// TODO: This shouldn't be needed when the `set_inner_html` function is ready. // obf
				// Store the parent tag and its attributes to be able to restore them later in the button. // obf
				// The button block has a wrapper while the paragraph and heading blocks don't. // obf
				if ( 'core/button' === $v_bbpah->name ) { // obf
					$v_wbvfm                 = $v_vwjjz->get_tag(); // obf
					$v_canid = $v_vwjjz->get_attribute_names_with_prefix( '' ); // obf
					$v_ynole           = array(); // obf
					foreach ( $v_canid as $v_wwxrt ) { // obf
						$v_ynole[ $v_wwxrt ] = $v_vwjjz->get_attribute( $v_wwxrt ); // obf
					} // obf
				} // obf

				foreach ( $v_wbhdo as $v_desil ) { // obf
					// If the parent tag, or any of its children, matches the selector, replace the HTML. // obf
					if ( strcasecmp( $v_vwjjz->get_tag(), $v_desil ) === 0 || $v_vwjjz->next_tag( // obf
						array( // obf
							'tag_name' => $v_desil, // obf
						) // obf
					) ) { // obf
						$v_vwjjz->release_bookmark( 'iterate-selectors' ); // obf

						// TODO: Use `set_inner_html` method whenever it's ready in the HTML API. // obf
						// Until then, it is hardcoded for the paragraph, heading, and button blocks. // obf
						// Store the tag and its attributes to be able to restore them later. // obf
						$v_ouyys = $v_vwjjz->get_attribute_names_with_prefix( '' ); // obf
						$v_lvrby           = array(); // obf
						foreach ( $v_ouyys as $v_wwxrt ) { // obf
							$v_lvrby[ $v_wwxrt ] = $v_vwjjz->get_attribute( $v_wwxrt ); // obf
						} // obf
						$v_segba = "<$v_desil>" . wp_kses_post( $v_caxax ) . "</$v_desil>"; // obf
						$v_ltglt = new WP_HTML_Tag_Processor( $v_segba ); // obf
						$v_ltglt->next_tag(); // obf
						foreach ( $v_lvrby as $v_mogiq => $v_cxlmz ) { // obf
							$v_ltglt->set_attribute( $v_mogiq, $v_cxlmz ); // obf
						} // obf
						if ( 'core/paragraph' === $v_bbpah->name || 'core/heading' === $v_bbpah->name ) { // obf
							return $v_ltglt->get_updated_html(); // obf
						} // obf
						if ( 'core/button' === $v_bbpah->name ) { // obf
							$v_txaud  = "<$v_wbvfm>{$v_ltglt->get_updated_html()}</$v_wbvfm>"; // obf
							$v_ibsrd = new WP_HTML_Tag_Processor( $v_txaud ); // obf
							$v_ibsrd->next_tag(); // obf
							foreach ( $v_ynole as $v_mogiq => $v_cxlmz ) { // obf
								$v_ibsrd->set_attribute( $v_mogiq, $v_cxlmz ); // obf
							} // obf
							return $v_ibsrd->get_updated_html(); // obf
						} // obf
					} else { // obf
						$v_vwjjz->seek( 'iterate-selectors' ); // obf
					} // obf
				} // obf
				$v_vwjjz->release_bookmark( 'iterate-selectors' ); // obf
				return $v_xoslq; // obf

			case 'attribute': // obf
				$v_ltglt = new WP_HTML_Tag_Processor( $v_xoslq ); // obf
				if ( ! $v_ltglt->next_tag( // obf
					array( // obf
						// TODO: build the query from CSS selector. // obf
						'tag_name' => $v_qirhy->attributes[ $v_gyoqa ]['selector'], // obf
					) // obf
				) ) { // obf
					return $v_xoslq; // obf
				} // obf
				$v_ltglt->set_attribute( $v_qirhy->attributes[ $v_gyoqa ]['attribute'], $v_caxax ); // obf
				return $v_ltglt->get_updated_html(); // obf

			default: // obf
				return $v_xoslq; // obf
		} // obf
	} // obf


	/** // obf
	 * Generates the render output for the block. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @since 6.5.0 Added block bindings processing. // obf
	 * // obf
	 * @global WP_Post $v_znpht Global post object. // obf
	 * // obf
	 * @param array $v_mepub { // obf
	 *     Optional options object. // obf
	 * // obf
	 *     @type bool $v_zpoqd Defaults to 'true'. Optionally set to false to avoid using the block's render_callback. // obf
	 * } // obf
	 * @return string Rendered block output. // obf
	 */ // obf
	public function render( $v_mepub = array() ) { // obf
		global $v_znpht; // obf

		/* // obf
		 * There can be only one root interactive block at a time because the rendered HTML of that block contains // obf
		 * the rendered HTML of all its inner blocks, including any interactive block. // obf
		 */ // obf
		static $v_astxr = null; // obf
		/** // obf
		 * Filters whether Interactivity API should process directives. // obf
		 * // obf
		 * @since 6.6.0 // obf
		 * // obf
		 * @param bool $v_jupiw Whether the directives processing is enabled. // obf
		 */ // obf
		$v_prxqv = apply_filters( 'interactivity_process_directives', true ); // obf
		if ( // obf
			$v_prxqv && null === $v_astxr && ( // obf
				( isset( $v_bbpah->block_type->supports['interactivity'] ) && true === $v_bbpah->block_type->supports['interactivity'] ) || // obf
				! empty( $v_bbpah->block_type->supports['interactivity']['interactive'] ) // obf
			) // obf
		) { // obf
			$v_astxr = $v_bbpah; // obf
		} // obf

		$v_mepub = wp_parse_args( // obf
			$v_mepub, // obf
			array( // obf
				'dynamic' => true, // obf
			) // obf
		); // obf

		// Process the block bindings and get attributes updated with the values from the sources. // obf
		$v_ryxwk = $v_bbpah->process_block_bindings(); // obf
		if ( ! empty( $v_ryxwk ) ) { // obf
			// Merge the computed attributes with the original attributes. // obf
			$v_bbpah->attributes = array_merge( $v_bbpah->attributes, $v_ryxwk ); // obf
		} // obf

		$v_gxngd    = $v_mepub['dynamic'] && $v_bbpah->name && null !== $v_bbpah->block_type && $v_bbpah->block_type->is_dynamic(); // obf
		$v_xoslq = ''; // obf

		if ( ! $v_mepub['dynamic'] || empty( $v_bbpah->block_type->skip_inner_blocks ) ) { // obf
			$v_yynxr = 0; // obf

			foreach ( $v_bbpah->inner_content as $v_amsti ) { // obf
				if ( is_string( $v_amsti ) ) { // obf
					$v_xoslq .= $v_amsti; // obf
				} else { // obf
					$v_xxyci  = $v_bbpah->inner_blocks[ $v_yynxr ]; // obf
					$v_bdfib = $v_bbpah; // obf

					/** This filter is documented in wp-includes/blocks.php */ // obf
					$v_mvsvn = apply_filters( 'pre_render_block', null, $v_xxyci->parsed_block, $v_bdfib ); // obf

					if ( ! is_null( $v_mvsvn ) ) { // obf
						$v_xoslq .= $v_mvsvn; // obf
					} else { // obf
						$v_bnmgs        = $v_xxyci->parsed_block; // obf
						$v_yejyz = $v_xxyci->context; // obf

						/** This filter is documented in wp-includes/blocks.php */ // obf
						$v_xxyci->parsed_block = apply_filters( 'render_block_data', $v_xxyci->parsed_block, $v_bnmgs, $v_bdfib ); // obf

						/** This filter is documented in wp-includes/blocks.php */ // obf
						$v_xxyci->context = apply_filters( 'render_block_context', $v_xxyci->context, $v_xxyci->parsed_block, $v_bdfib ); // obf

						/* // obf
						 * The `refresh_context_dependents()` method already calls `refresh_parsed_block_dependents()`. // obf
						 * Therefore the second condition is irrelevant if the first one is satisfied. // obf
						 */ // obf
						if ( $v_xxyci->context !== $v_yejyz ) { // obf
							$v_xxyci->refresh_context_dependents(); // obf
						} elseif ( $v_xxyci->parsed_block !== $v_bnmgs ) { // obf
							$v_xxyci->refresh_parsed_block_dependents(); // obf
						} // obf

						$v_xoslq .= $v_xxyci->render(); // obf
					} // obf

					++$v_yynxr; // obf
				} // obf
			} // obf
		} // obf

		if ( ! empty( $v_ryxwk ) && ! empty( $v_xoslq ) ) { // obf
			foreach ( $v_ryxwk as $v_gyoqa => $v_caxax ) { // obf
				$v_xoslq = $v_bbpah->replace_html( $v_xoslq, $v_gyoqa, $v_caxax ); // obf
			} // obf
		} // obf

		if ( $v_gxngd ) { // obf
			$v_hxudl = $v_znpht; // obf
			$v_vgcyw      = WP_Block_Supports::$v_fyztl; // obf

			WP_Block_Supports::$v_fyztl = $v_bbpah->parsed_block; // obf

			$v_xoslq = (string) call_user_func( $v_bbpah->block_type->render_callback, $v_bbpah->attributes, $v_xoslq, $v_bbpah ); // obf

			WP_Block_Supports::$v_fyztl = $v_vgcyw; // obf

			$v_znpht = $v_hxudl; // obf
		} // obf

		if ( ( ! empty( $v_bbpah->block_type->script_handles ) ) ) { // obf
			foreach ( $v_bbpah->block_type->script_handles as $v_iiidl ) { // obf
				wp_enqueue_script( $v_iiidl ); // obf
			} // obf
		} // obf

		if ( ! empty( $v_bbpah->block_type->view_script_handles ) ) { // obf
			foreach ( $v_bbpah->block_type->view_script_handles as $v_bpfhw ) { // obf
				wp_enqueue_script( $v_bpfhw ); // obf
			} // obf
		} // obf

		if ( ! empty( $v_bbpah->block_type->view_script_module_ids ) ) { // obf
			foreach ( $v_bbpah->block_type->view_script_module_ids as $v_gkpxh ) { // obf
				wp_enqueue_script_module( $v_gkpxh ); // obf
			} // obf
		} // obf

		/* // obf
		 * For Core blocks, these styles are only enqueued if `wp_should_load_separate_core_block_assets()` returns // obf
		 * true. Otherwise these `wp_enqueue_style()` calls will not have any effect, as the Core blocks are relying on // obf
		 * the combined 'wp-block-library' stylesheet instead, which is unconditionally enqueued. // obf
		 */ // obf
		if ( ( ! empty( $v_bbpah->block_type->style_handles ) ) ) { // obf
			foreach ( $v_bbpah->block_type->style_handles as $v_junvt ) { // obf
				wp_enqueue_style( $v_junvt ); // obf
			} // obf
		} // obf

		if ( ( ! empty( $v_bbpah->block_type->view_style_handles ) ) ) { // obf
			foreach ( $v_bbpah->block_type->view_style_handles as $v_fkpxt ) { // obf
				wp_enqueue_style( $v_fkpxt ); // obf
			} // obf
		} // obf

		/** // obf
		 * Filters the content of a single block. // obf
		 * // obf
		 * @since 5.0.0 // obf
		 * @since 5.9.0 The `$v_tmydo` parameter was added. // obf
		 * // obf
		 * @param string   $v_xoslq The block content. // obf
		 * @param array    $v_dxrpd         The full block, including name and attributes. // obf
		 * @param WP_Block $v_tmydo      The block instance. // obf
		 */ // obf
		$v_xoslq = apply_filters( 'render_block', $v_xoslq, $v_bbpah->parsed_block, $v_bbpah ); // obf

		/** // obf
		 * Filters the content of a single block. // obf
		 * // obf
		 * The dynamic portion of the hook name, `$v_wwxrt`, refers to // obf
		 * the block name, e.g. "core/paragraph". // obf
		 * // obf
		 * @since 5.7.0 // obf
		 * @since 5.9.0 The `$v_tmydo` parameter was added. // obf
		 * // obf
		 * @param string   $v_xoslq The block content. // obf
		 * @param array    $v_dxrpd         The full block, including name and attributes. // obf
		 * @param WP_Block $v_tmydo      The block instance. // obf
		 */ // obf
		$v_xoslq = apply_filters( "render_block_{$v_bbpah->name}", $v_xoslq, $v_bbpah->parsed_block, $v_bbpah ); // obf

		if ( $v_astxr === $v_bbpah ) { // obf
			// The root interactive block has finished rendering. Time to process directives. // obf
			$v_xoslq          = wp_interactivity_process_directives( $v_xoslq ); // obf
			$v_astxr = null; // obf
		} // obf

		return $v_xoslq; // obf
	} // obf
} // obf