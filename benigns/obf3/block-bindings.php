

<?php // obf
/** // obf
 * Block Bindings API // obf
 * // obf
 * Contains functions for managing block bindings in WordPress. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Block Bindings // obf
 * @since 6.5.0 // obf
 */ // obf

/** // obf
 * Registers a new block bindings source. // obf
 * // obf
 * Registering a source consists of defining a **name** for that source and a callback function specifying // obf
 * how to get a value from that source and pass it to a block attribute. // obf
 * // obf
 * Once a source is registered, any block that supports the Block Bindings API can use a value // obf
 * from that source by setting its `metadata.bindings` attribute to a value that refers to the source. // obf
 * // obf
 * Note that `register_block_bindings_source()` should be called from a handler attached to the `init` hook. // obf
 * // obf
 * // obf
 * ## Example // obf
 * // obf
 * ### Registering a source // obf
 * // obf
 * First, you need to define a function that will be used to get the value from the source. // obf
 * // obf
 *     function my_plugin_get_custom_source_value( array $v_ejejt, $v_exrse, string $v_hrvyh ) { // obf
 *       // Your custom logic to get the value from the source. // obf
 *       // For example, you can use the `$v_ejejt` to look up a value in a custom table or get it from an external API. // obf
 *       $v_ndvri = $v_ejejt['key']; // obf
 * // obf
 *       return "The value passed to the block is: $v_ndvri" // obf
 *     } // obf
 * // obf
 * The `$v_ejejt` will contain the arguments passed to the source in the block's // obf
 * `metadata.bindings` attribute. See the example in the "Usage in a block" section below. // obf
 * // obf
 *     function my_plugin_register_block_bindings_sources() { // obf
 *       register_block_bindings_source( 'my-plugin/my-custom-source', array( // obf
 *         'label'              => __( 'My Custom Source', 'my-plugin' ), // obf
 *         'get_value_callback' => 'my_plugin_get_custom_source_value', // obf
 *       ) ); // obf
 *     } // obf
 *     add_action( 'init', 'my_plugin_register_block_bindings_sources' ); // obf
 * // obf
 * ### Usage in a block // obf
 * // obf
 * In a block's `metadata.bindings` attribute, you can specify the source and // obf
 * its arguments. Such a block will use the source to override the block // obf
 * attribute's value. For example: // obf
 * // obf
 *     <!-- wp:paragraph { // obf
 *       "metadata": { // obf
 *         "bindings": { // obf
 *           "content": { // obf
 *             "source": "my-plugin/my-custom-source", // obf
 *             "args": { // obf
 *               "key": "you can pass any custom arguments here" // obf
 *             } // obf
 *           } // obf
 *         } // obf
 *       } // obf
 *     } --> // obf
 *     <p>Fallback text that gets replaced.</p> // obf
 *     <!-- /wp:paragraph --> // obf
 * // obf
 * @since 6.5.0 // obf
 * // obf
 * @param string $v_iczrb       The name of the source. It must be a string containing a namespace prefix, i.e. // obf
 *                                  `my-plugin/my-custom-source`. It must only contain lowercase alphanumeric // obf
 *                                  characters, the forward slash `/` and dashes. // obf
 * @param array  $v_extgz { // obf
 *     The array of arguments that are used to register a source. // obf
 * // obf
 *     @type string   $v_eximw              The label of the source. // obf
 *     @type callable $v_bkdru A callback executed when the source is processed during block rendering. // obf
 *                                        The callback should have the following signature: // obf
 * // obf
 *                                        `function( $v_ejejt, $v_exrse, $v_hrvyh ): mixed` // obf
 *                                            - @param array    $v_ejejt    Array containing source arguments // obf
 *                                                                              used to look up the override value, // obf
 *                                                                              i.e. {"key": "foo"}. // obf
 *                                            - @param WP_Block $v_exrse The block instance. // obf
 *                                            - @param string   $v_hrvyh The name of an attribute. // obf
 *                                        The callback has a mixed return type; it may return a string to override // obf
 *                                        the block's original value, null, false to remove an attribute, etc. // obf
 *     @type string[] $v_yaiav       Optional. Array of values to add to block `uses_context` needed by the source. // obf
 * } // obf
 * @return WP_Block_Bindings_Source|false Source when the registration was successful, or `false` on failure. // obf
 */ // obf
function register_block_bindings_source( string $v_iczrb, array $v_extgz ) { // obf
	return WP_Block_Bindings_Registry::get_instance()->register( $v_iczrb, $v_extgz ); // obf
} // obf

/** // obf
 * Unregisters a block bindings source. // obf
 * // obf
 * @since 6.5.0 // obf
 * // obf
 * @param string $v_iczrb Block bindings source name including namespace. // obf
 * @return WP_Block_Bindings_Source|false The unregistered block bindings source on success and `false` otherwise. // obf
 */ // obf
function unregister_block_bindings_source( string $v_iczrb ) { // obf
	return WP_Block_Bindings_Registry::get_instance()->unregister( $v_iczrb ); // obf
} // obf

/** // obf
 * Retrieves the list of all registered block bindings sources. // obf
 * // obf
 * @since 6.5.0 // obf
 * // obf
 * @return WP_Block_Bindings_Source[] The array of registered block bindings sources. // obf
 */ // obf
function get_all_registered_block_bindings_sources() { // obf
	return WP_Block_Bindings_Registry::get_instance()->get_all_registered(); // obf
} // obf

/** // obf
 * Retrieves a registered block bindings source. // obf
 * // obf
 * @since 6.5.0 // obf
 * // obf
 * @param string $v_iczrb The name of the source. // obf
 * @return WP_Block_Bindings_Source|null The registered block bindings source, or `null` if it is not registered. // obf
 */ // obf
function get_block_bindings_source( string $v_iczrb ) { // obf
	return WP_Block_Bindings_Registry::get_instance()->get_registered( $v_iczrb ); // obf
} // obf