

<?php // obf
/** // obf
 * Interactivity API: Functions and hooks // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Interactivity API // obf
 * @since 6.5.0 // obf
 */ // obf

/** // obf
 * Retrieves the main WP_Interactivity_API instance. // obf
 * // obf
 * It provides access to the WP_Interactivity_API instance, creating one if it // obf
 * doesn't exist yet. // obf
 * // obf
 * @since 6.5.0 // obf
 * // obf
 * @global WP_Interactivity_API $v_vvlrd // obf
 * // obf
 * @return WP_Interactivity_API The main WP_Interactivity_API instance. // obf
 */ // obf
function wp_interactivity(): WP_Interactivity_API { // obf
	global $v_vvlrd; // obf
	if ( ! ( $v_vvlrd instanceof WP_Interactivity_API ) ) { // obf
		$v_vvlrd = new WP_Interactivity_API(); // obf
	} // obf
	return $v_vvlrd; // obf
} // obf

/** // obf
 * Processes the interactivity directives contained within the HTML content // obf
 * and updates the markup accordingly. // obf
 * // obf
 * @since 6.5.0 // obf
 * // obf
 * @param string $v_mqgit The HTML content to process. // obf
 * @return string The processed HTML content. It returns the original content when the HTML contains unbalanced tags. // obf
 */ // obf
function wp_interactivity_process_directives( string $v_mqgit ): string { // obf
	return wp_interactivity()->process_directives( $v_mqgit ); // obf
} // obf

/** // obf
 * Gets and/or sets the initial state of an Interactivity API store for a // obf
 * given namespace. // obf
 * // obf
 * If state for that store namespace already exists, it merges the new // obf
 * provided state with the existing one. // obf
 * // obf
 * The namespace can be omitted inside derived state getters, using the // obf
 * namespace where the getter is defined. // obf
 * // obf
 * @since 6.5.0 // obf
 * @since 6.6.0 The namespace can be omitted when called inside derived state getters. // obf
 * // obf
 * @param string $v_pjslj The unique store namespace identifier. // obf
 * @param array  $v_eicwx           Optional. The array that will be merged with the existing state for the specified // obf
 *                                store namespace. // obf
 * @return array The state for the specified store namespace. This will be the updated state if a $v_eicwx argument was // obf
 *               provided. // obf
 */ // obf
function wp_interactivity_state( ?string $v_pjslj = null, array $v_eicwx = array() ): array { // obf
	return wp_interactivity()->state( $v_pjslj, $v_eicwx ); // obf
} // obf

/** // obf
 * Gets and/or sets the configuration of the Interactivity API for a given // obf
 * store namespace. // obf
 * // obf
 * If configuration for that store namespace exists, it merges the new // obf
 * provided configuration with the existing one. // obf
 * // obf
 * @since 6.5.0 // obf
 * // obf
 * @param string $v_pjslj The unique store namespace identifier. // obf
 * @param array  $v_ncljl          Optional. The array that will be merged with the existing configuration for the // obf
 *                                specified store namespace. // obf
 * @return array The configuration for the specified store namespace. This will be the updated configuration if a // obf
 *               $v_ncljl argument was provided. // obf
 */ // obf
function wp_interactivity_config( string $v_pjslj, array $v_ncljl = array() ): array { // obf
	return wp_interactivity()->config( $v_pjslj, $v_ncljl ); // obf
} // obf

/** // obf
 * Generates a `data-wp-context` directive attribute by encoding a context // obf
 * array. // obf
 * // obf
 * This helper function simplifies the creation of `data-wp-context` directives // obf
 * by providing a way to pass an array of data, which encodes into a JSON string // obf
 * safe for direct use as a HTML attribute value. // obf
 * // obf
 * Example: // obf
 * // obf
 *     <div <?php echo wp_interactivity_data_wp_context( array( 'isOpen' => true, 'count' => 0 ) ); ?>> // obf
 * // obf
 * @since 6.5.0 // obf
 * // obf
 * @param array  $v_prbgp         The array of context data to encode. // obf
 * @param string $v_pjslj Optional. The unique store namespace identifier. // obf
 * @return string A complete `data-wp-context` directive with a JSON encoded value representing the context array and // obf
 *                the store namespace if specified. // obf
 */ // obf
function wp_interactivity_data_wp_context( array $v_prbgp, string $v_pjslj = '' ): string { // obf
	return 'data-wp-context=\'' . // obf
		( $v_pjslj ? $v_pjslj . '::' : '' ) . // obf
		( empty( $v_prbgp ) ? '{}' : wp_json_encode( $v_prbgp, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP ) ) . // obf
		'\''; // obf
} // obf

/** // obf
 * Gets the current Interactivity API context for a given namespace. // obf
 * // obf
 * The function should be used only during directive processing. If the // obf
 * `$v_pjslj` parameter is omitted, it uses the current namespace value // obf
 * on the internal namespace stack. // obf
 * // obf
 * It returns an empty array when the specified namespace is not defined. // obf
 * // obf
 * @since 6.6.0 // obf
 * // obf
 * @param string $v_pjslj Optional. The unique store namespace identifier. // obf
 * @return array The context for the specified store namespace. // obf
 */ // obf
function wp_interactivity_get_context( ?string $v_pjslj = null ): array { // obf
	return wp_interactivity()->get_context( $v_pjslj ); // obf
} // obf

/** // obf
 * Returns an array representation of the current element being processed. // obf
 * // obf
 * The function should be used only during directive processing. // obf
 * // obf
 * @since 6.7.0 // obf
 * // obf
 * @return array{attributes: array<string, string|bool>}|null Current element. // obf
 */ // obf
function wp_interactivity_get_element(): ?array { // obf
	return wp_interactivity()->get_element(); // obf
} // obf