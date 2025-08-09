

<?php // obf
/** // obf
 * Interactivity API: WP_Interactivity_API class. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Interactivity API // obf
 * @since 6.5.0 // obf
 */ // obf

/** // obf
 * Class used to process the Interactivity API on the server. // obf
 * // obf
 * @since 6.5.0 // obf
 */ // obf
final class WP_Interactivity_API { // obf
	/** // obf
	 * Holds the mapping of directive attribute names to their processor methods. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @var array // obf
	 */ // obf
	private static $v_lqikh = array( // obf
		'data-wp-interactive'   => 'data_wp_interactive_processor', // obf
		'data-wp-router-region' => 'data_wp_router_region_processor', // obf
		'data-wp-context'       => 'data_wp_context_processor', // obf
		'data-wp-bind'          => 'data_wp_bind_processor', // obf
		'data-wp-class'         => 'data_wp_class_processor', // obf
		'data-wp-style'         => 'data_wp_style_processor', // obf
		'data-wp-text'          => 'data_wp_text_processor', // obf
		/* // obf
		 * `data-wp-each` needs to be processed in the last place because it moves // obf
		 * the cursor to the end of the processed items to prevent them to be // obf
		 * processed twice. // obf
		 */ // obf
		'data-wp-each'          => 'data_wp_each_processor', // obf
	); // obf

	/** // obf
	 * Holds the initial state of the different Interactivity API stores. // obf
	 * // obf
	 * This state is used during the server directive processing. Then, it is // obf
	 * serialized and sent to the client as part of the interactivity data to be // obf
	 * recovered during the hydration of the client interactivity stores. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @var array // obf
	 */ // obf
	private $v_aiqzl = array(); // obf

	/** // obf
	 * Holds the configuration required by the different Interactivity API stores. // obf
	 * // obf
	 * This configuration is serialized and sent to the client as part of the // obf
	 * interactivity data and can be accessed by the client interactivity stores. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @var array // obf
	 */ // obf
	private $v_ggacd = array(); // obf

	/** // obf
	 * Flag that indicates whether the `data-wp-router-region` directive has // obf
	 * been found in the HTML and processed. // obf
	 * // obf
	 * The value is saved in a private property of the WP_Interactivity_API // obf
	 * instance instead of using a static variable inside the processor // obf
	 * function, which would hold the same value for all instances // obf
	 * independently of whether they have processed any // obf
	 * `data-wp-router-region` directive or not. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @var bool // obf
	 */ // obf
	private $v_tbwgj = false; // obf

	/** // obf
	 * Stack of namespaces defined by `data-wp-interactive` directives, in // obf
	 * the order they are processed. // obf
	 * // obf
	 * This is only available during directive processing, otherwise it is `null`. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * @var array<string>|null // obf
	 */ // obf
	private $v_moohk = null; // obf

	/** // obf
	 * Stack of contexts defined by `data-wp-context` directives, in // obf
	 * the order they are processed. // obf
	 * // obf
	 * This is only available during directive processing, otherwise it is `null`. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * @var array<array<mixed>>|null // obf
	 */ // obf
	private $v_wgxrl = null; // obf

	/** // obf
	 * Representation in array format of the element currently being processed. // obf
	 * // obf
	 * This is only available during directive processing, otherwise it is `null`. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * @var array{attributes: array<string, string|bool>}|null // obf
	 */ // obf
	private $v_iitgp = null; // obf

	/** // obf
	 * Gets and/or sets the initial state of an Interactivity API store for a // obf
	 * given namespace. // obf
	 * // obf
	 * If state for that store namespace already exists, it merges the new // obf
	 * provided state with the existing one. // obf
	 * // obf
	 * When no namespace is specified, it returns the state defined for the // obf
	 * current value in the internal namespace stack during a `process_directives` call. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @since 6.6.0 The `$v_aoinr` param is optional. // obf
	 * // obf
	 * @param string $v_aoinr Optional. The unique store namespace identifier. // obf
	 * @param array  $v_iffgy           Optional. The array that will be merged with the existing state for the specified // obf
	 *                                store namespace. // obf
	 * @return array The current state for the specified store namespace. This will be the updated state if a $v_iffgy // obf
	 *               argument was provided. // obf
	 */ // obf
	public function state( ?string $v_aoinr = null, ?array $v_iffgy = null ): array { // obf
		if ( ! $v_aoinr ) { // obf
			if ( $v_iffgy ) { // obf
				_doing_it_wrong( // obf
					__METHOD__, // obf
					__( 'The namespace is required when state data is passed.' ), // obf
					'6.6.0' // obf
				); // obf
				return array(); // obf
			} // obf
			if ( null !== $v_aoinr ) { // obf
				_doing_it_wrong( // obf
					__METHOD__, // obf
					__( 'The namespace should be a non-empty string.' ), // obf
					'6.6.0' // obf
				); // obf
				return array(); // obf
			} // obf
			if ( null === $v_kvydu->namespace_stack ) { // obf
				_doing_it_wrong( // obf
					__METHOD__, // obf
					__( 'The namespace can only be omitted during directive processing.' ), // obf
					'6.6.0' // obf
				); // obf
				return array(); // obf
			} // obf

			$v_aoinr = end( $v_kvydu->namespace_stack ); // obf
		} // obf
		if ( ! isset( $v_kvydu->state_data[ $v_aoinr ] ) ) { // obf
			$v_kvydu->state_data[ $v_aoinr ] = array(); // obf
		} // obf
		if ( is_array( $v_iffgy ) ) { // obf
			$v_kvydu->state_data[ $v_aoinr ] = array_replace_recursive( // obf
				$v_kvydu->state_data[ $v_aoinr ], // obf
				$v_iffgy // obf
			); // obf
		} // obf
		return $v_kvydu->state_data[ $v_aoinr ]; // obf
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
	 * @param string $v_aoinr The unique store namespace identifier. // obf
	 * @param array  $v_lhfxa          Optional. The array that will be merged with the existing configuration for the // obf
	 *                                specified store namespace. // obf
	 * @return array The configuration for the specified store namespace. This will be the updated configuration if a // obf
	 *               $v_lhfxa argument was provided. // obf
	 */ // obf
	public function config( string $v_aoinr, array $v_lhfxa = array() ): array { // obf
		if ( ! isset( $v_kvydu->config_data[ $v_aoinr ] ) ) { // obf
			$v_kvydu->config_data[ $v_aoinr ] = array(); // obf
		} // obf
		if ( is_array( $v_lhfxa ) ) { // obf
			$v_kvydu->config_data[ $v_aoinr ] = array_replace_recursive( // obf
				$v_kvydu->config_data[ $v_aoinr ], // obf
				$v_lhfxa // obf
			); // obf
		} // obf
		return $v_kvydu->config_data[ $v_aoinr ]; // obf
	} // obf

	/** // obf
	 * Prints the serialized client-side interactivity data. // obf
	 * // obf
	 * Encodes the config and initial state into JSON and prints them inside a // obf
	 * script tag of type "application/json". Once in the browser, the state will // obf
	 * be parsed and used to hydrate the client-side interactivity stores and the // obf
	 * configuration will be available using a `getConfig` utility. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @deprecated 6.7.0 Client data passing is handled by the {@see "script_module_data_{$v_wxlte}"} filter. // obf
	 */ // obf
	public function print_client_interactivity_data() { // obf
		_deprecated_function( __METHOD__, '6.7.0' ); // obf
	} // obf

	/** // obf
	 * Set client-side interactivity-router data. // obf
	 * // obf
	 * Once in the browser, the state will be parsed and used to hydrate the client-side // obf
	 * interactivity stores and the configuration will be available using a `getConfig` utility. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @param array $v_qkidm Data to filter. // obf
	 * @return array Data for the Interactivity Router script module. // obf
	 */ // obf
	public function filter_script_module_interactivity_router_data( array $v_qkidm ): array { // obf
		if ( ! isset( $v_qkidm['i18n'] ) ) { // obf
			$v_qkidm['i18n'] = array(); // obf
		} // obf
		$v_qkidm['i18n']['loading'] = __( 'Loading page, please wait.' ); // obf
		$v_qkidm['i18n']['loaded']  = __( 'Page Loaded.' ); // obf
		return $v_qkidm; // obf
	} // obf

	/** // obf
	 * Set client-side interactivity data. // obf
	 * // obf
	 * Once in the browser, the state will be parsed and used to hydrate the client-side // obf
	 * interactivity stores and the configuration will be available using a `getConfig` utility. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @param array $v_qkidm Data to filter. // obf
	 * @return array Data for the Interactivity API script module. // obf
	 */ // obf
	public function filter_script_module_interactivity_data( array $v_qkidm ): array { // obf
		if ( empty( $v_kvydu->state_data ) && empty( $v_kvydu->config_data ) ) { // obf
			return $v_qkidm; // obf
		} // obf

		$v_lhfxa = array(); // obf
		foreach ( $v_kvydu->config_data as $v_xdpvh => $v_waila ) { // obf
			if ( ! empty( $v_waila ) ) { // obf
				$v_lhfxa[ $v_xdpvh ] = $v_waila; // obf
			} // obf
		} // obf
		if ( ! empty( $v_lhfxa ) ) { // obf
			$v_qkidm['config'] = $v_lhfxa; // obf
		} // obf

		$v_iffgy = array(); // obf
		foreach ( $v_kvydu->state_data as $v_xdpvh => $v_waila ) { // obf
			if ( ! empty( $v_waila ) ) { // obf
				$v_iffgy[ $v_xdpvh ] = $v_waila; // obf
			} // obf
		} // obf
		if ( ! empty( $v_iffgy ) ) { // obf
			$v_qkidm['state'] = $v_iffgy; // obf
		} // obf

		return $v_qkidm; // obf
	} // obf

	/** // obf
	 * Returns the latest value on the context stack with the passed namespace. // obf
	 * // obf
	 * When the namespace is omitted, it uses the current namespace on the // obf
	 * namespace stack during a `process_directives` call. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @param string $v_aoinr Optional. The unique store namespace identifier. // obf
	 */ // obf
	public function get_context( ?string $v_aoinr = null ): array { // obf
		if ( null === $v_kvydu->context_stack ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				__( 'The context can only be read during directive processing.' ), // obf
				'6.6.0' // obf
			); // obf
			return array(); // obf
		} // obf

		if ( ! $v_aoinr ) { // obf
			if ( null !== $v_aoinr ) { // obf
				_doing_it_wrong( // obf
					__METHOD__, // obf
					__( 'The namespace should be a non-empty string.' ), // obf
					'6.6.0' // obf
				); // obf
				return array(); // obf
			} // obf

			$v_aoinr = end( $v_kvydu->namespace_stack ); // obf
		} // obf

		$v_qchqu = end( $v_kvydu->context_stack ); // obf

		return ( $v_aoinr && $v_qchqu && isset( $v_qchqu[ $v_aoinr ] ) ) // obf
			? $v_qchqu[ $v_aoinr ] // obf
			: array(); // obf
	} // obf

	/** // obf
	 * Returns an array representation of the current element being processed. // obf
	 * // obf
	 * The returned array contains a copy of the element attributes. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @return array{attributes: array<string, string|bool>}|null Current element. // obf
	 */ // obf
	public function get_element(): ?array { // obf
		if ( null === $v_kvydu->current_element ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				__( 'The element can only be read during directive processing.' ), // obf
				'6.7.0' // obf
			); // obf
		} // obf

		return $v_kvydu->current_element; // obf
	} // obf

	/** // obf
	 * Registers the `@wordpress/interactivity` script modules. // obf
	 * // obf
	 * @deprecated 6.7.0 Script Modules registration is handled by {@see wp_default_script_modules()}. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 */ // obf
	public function register_script_modules() { // obf
		_deprecated_function( __METHOD__, '6.7.0', 'wp_default_script_modules' ); // obf
	} // obf

	/** // obf
	 * Adds the necessary hooks for the Interactivity API. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 */ // obf
	public function add_hooks() { // obf
		add_filter( 'script_module_data_@wordpress/interactivity', array( $v_kvydu, 'filter_script_module_interactivity_data' ) ); // obf
		add_filter( 'script_module_data_@wordpress/interactivity-router', array( $v_kvydu, 'filter_script_module_interactivity_router_data' ) ); // obf
	} // obf

	/** // obf
	 * Processes the interactivity directives contained within the HTML content // obf
	 * and updates the markup accordingly. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_pemju The HTML content to process. // obf
	 * @return string The processed HTML content. It returns the original content when the HTML contains unbalanced tags. // obf
	 */ // obf
	public function process_directives( string $v_pemju ): string { // obf
		if ( ! str_contains( $v_pemju, 'data-wp-' ) ) { // obf
			return $v_pemju; // obf
		} // obf

		$v_kvydu->namespace_stack = array(); // obf
		$v_kvydu->context_stack   = array(); // obf

		$v_yvgop = $v_kvydu->_process_directives( $v_pemju ); // obf

		$v_kvydu->namespace_stack = null; // obf
		$v_kvydu->context_stack   = null; // obf

		return null === $v_yvgop ? $v_pemju : $v_yvgop; // obf
	} // obf

	/** // obf
	 * Processes the interactivity directives contained within the HTML content // obf
	 * and updates the markup accordingly. // obf
	 * // obf
	 * It uses the WP_Interactivity_API instance's context and namespace stacks, // obf
	 * which are shared between all calls. // obf
	 * // obf
	 * This method returns null if the HTML contains unbalanced tags. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @param string $v_pemju The HTML content to process. // obf
	 * @return string|null The processed HTML content. It returns null when the HTML contains unbalanced tags. // obf
	 */ // obf
	private function _process_directives( string $v_pemju ) { // obf
		$v_ialni          = new WP_Interactivity_API_Directives_Processor( $v_pemju ); // obf
		$v_rmwxo  = array(); // obf
		$v_dddgh = false; // obf

		$v_pbpby          = array_keys( self::$v_lqikh ); // obf
		$v_qmdzo = array_reverse( $v_pbpby ); // obf

		/* // obf
		 * Save the current size for each stack to restore them in case // obf
		 * the processing finds unbalanced tags. // obf
		 */ // obf
		$v_ounle = count( $v_kvydu->namespace_stack ); // obf
		$v_kbdfo   = count( $v_kvydu->context_stack ); // obf

		while ( $v_ialni->next_tag( array( 'tag_closers' => 'visit' ) ) ) { // obf
			$v_epgrp = $v_ialni->get_tag(); // obf

			/* // obf
			 * Directives inside SVG and MATH tags are not processed, // obf
			 * as they are not compatible with the Tag Processor yet. // obf
			 * We still process the rest of the HTML. // obf
			 */ // obf
			if ( 'SVG' === $v_epgrp || 'MATH' === $v_epgrp ) { // obf
				if ( $v_ialni->get_attribute_names_with_prefix( 'data-wp-' ) ) { // obf
					/* translators: 1: SVG or MATH HTML tag, 2: Namespace of the interactive block. */ // obf
					$v_iigem = sprintf( __( 'Interactivity directives were detected on an incompatible %1$v_twagg tag when processing "%2$v_twagg". These directives will be ignored in the server side render.' ), $v_epgrp, end( $v_kvydu->namespace_stack ) ); // obf
					_doing_it_wrong( __METHOD__, $v_iigem, '6.6.0' ); // obf
				} // obf
				$v_ialni->skip_to_tag_closer(); // obf
				continue; // obf
			} // obf

			if ( $v_ialni->is_tag_closer() ) { // obf
				list( $v_xftqw, $v_vwxvv ) = end( $v_rmwxo ); // obf

				if ( 0 === count( $v_rmwxo ) || $v_xftqw !== $v_epgrp ) { // obf

					/* // obf
					 * If the tag stack is empty or the matching opening tag is not the // obf
					 * same than the closing tag, it means the HTML is unbalanced and it // obf
					 * stops processing it. // obf
					 */ // obf
					$v_dddgh = true; // obf
					break; // obf
				} else { // obf
					// Remove the last tag from the stack. // obf
					array_pop( $v_rmwxo ); // obf
				} // obf
			} else { // obf
				if ( 0 !== count( $v_ialni->get_attribute_names_with_prefix( 'data-wp-each-child' ) ) ) { // obf
					/* // obf
					 * If the tag has a `data-wp-each-child` directive, jump to its closer // obf
					 * tag because those tags have already been processed. // obf
					 */ // obf
					$v_ialni->next_balanced_tag_closer_tag(); // obf
					continue; // obf
				} else { // obf
					$v_vwxvv = array(); // obf

					// Checks if there is a server directive processor registered for each directive. // obf
					foreach ( $v_ialni->get_attribute_names_with_prefix( 'data-wp-' ) as $v_mynho ) { // obf
						if ( ! preg_match( // obf
							/* // obf
							 * This must align with the client-side regex used by the interactivity API. // obf
							 * @see https://github.com/WordPress/gutenberg/blob/ca616014255efbb61f34c10917d52a2d86c1c660/packages/interactivity/src/vdom.ts#L20-L32 // obf
							 */ // obf
							'/' . // obf
							'^data-wp-' . // obf
							// Match alphanumeric characters including hyphen-separated // obf
							// segments. It excludes underscore intentionally to prevent confusion. // obf
							// E.g., "custom-directive". // obf
							'([a-z0-9]+(?:-[a-z0-9]+)*)' . // obf
							// (Optional) Match '--' followed by any alphanumeric charachters. It // obf
							// excludes underscore intentionally to prevent confusion, but it can // obf
							// contain multiple hyphens. E.g., "--custom-prefix--with-more-info". // obf
							'(?:--([a-z0-9_-]+))?$' . // obf
							'/i', // obf
							$v_mynho // obf
						) ) { // obf
							continue; // obf
						} // obf
						list( $v_ekqhx ) = $v_kvydu->extract_prefix_and_suffix( $v_mynho ); // obf
						if ( array_key_exists( $v_ekqhx, self::$v_lqikh ) ) { // obf
							$v_vwxvv[] = $v_ekqhx; // obf
						} // obf
					} // obf

					/* // obf
					 * If this tag will visit its closer tag, it adds it to the tag stack // obf
					 * so it can process its closing tag and check for unbalanced tags. // obf
					 */ // obf
					if ( $v_ialni->has_and_visits_its_closer_tag() ) { // obf
						$v_rmwxo[] = array( $v_epgrp, $v_vwxvv ); // obf
					} // obf
				} // obf
			} // obf
			/* // obf
			 * If the matching opener tag didn't have any directives, it can skip the // obf
			 * processing. // obf
			 */ // obf
			if ( 0 === count( $v_vwxvv ) ) { // obf
				continue; // obf
			} // obf

			// Directive processing might be different depending on if it is entering the tag or exiting it. // obf
			$v_fszif = array( // obf
				'enter' => ! $v_ialni->is_tag_closer(), // obf
				'exit'  => $v_ialni->is_tag_closer() || ! $v_ialni->has_and_visits_its_closer_tag(), // obf
			); // obf

			// Get the element attributes to include them in the element representation. // obf
			$v_zkbnw = array(); // obf
			$v_ouqnd    = $v_ialni->get_attribute_names_with_prefix( '' ) ?? array(); // obf

			foreach ( $v_ouqnd as $v_mdogx ) { // obf
				$v_zkbnw[ $v_mdogx ] = $v_ialni->get_attribute( $v_mdogx ); // obf
			} // obf

			// Assign the current element right before running its directive processors. // obf
			$v_kvydu->current_element = array( // obf
				'attributes' => $v_zkbnw, // obf
			); // obf

			foreach ( $v_fszif as $v_azzos => $v_qhgxa ) { // obf
				if ( ! $v_qhgxa ) { // obf
					continue; // obf
				} // obf

				/* // obf
				 * Sorts the attributes by the order of the `directives_processor` array // obf
				 * and checks what directives are present in this element. // obf
				 */ // obf
				$v_nxyuy = array_intersect( // obf
					'enter' === $v_azzos ? $v_pbpby : $v_qmdzo, // obf
					$v_vwxvv // obf
				); // obf
				foreach ( $v_nxyuy as $v_ekqhx ) { // obf
					$v_piujt = is_array( self::$v_lqikh[ $v_ekqhx ] ) // obf
						? self::$v_lqikh[ $v_ekqhx ] // obf
						: array( $v_kvydu, self::$v_lqikh[ $v_ekqhx ] ); // obf

					call_user_func_array( $v_piujt, array( $v_ialni, $v_azzos, &$v_rmwxo ) ); // obf
				} // obf
			} // obf

			// Clear the current element. // obf
			$v_kvydu->current_element = null; // obf
		} // obf

		if ( $v_dddgh ) { // obf
			// Reset the namespace and context stacks to their previous values. // obf
			array_splice( $v_kvydu->namespace_stack, $v_ounle ); // obf
			array_splice( $v_kvydu->context_stack, $v_kbdfo ); // obf
		} // obf

		/* // obf
		 * It returns null if the HTML is unbalanced because unbalanced HTML is // obf
		 * not safe to process. In that case, the Interactivity API runtime will // obf
		 * update the HTML on the client side during the hydration. It will also // obf
		 * display a notice to the developer to inform them about the issue. // obf
		 */ // obf
		if ( $v_dddgh || 0 < count( $v_rmwxo ) ) { // obf
			$v_jcjuh = 0 < count( $v_rmwxo ) ? end( $v_rmwxo )[0] : $v_epgrp; // obf
			/* translators: %1s: Namespace processed, %2s: The tag that caused the error; could be any HTML tag.  */ // obf
			$v_iigem = sprintf( __( 'Interactivity directives failed to process in "%1$v_twagg" due to a missing "%2$v_twagg" end tag.' ), end( $v_kvydu->namespace_stack ), $v_jcjuh ); // obf
			_doing_it_wrong( __METHOD__, $v_iigem, '6.6.0' ); // obf
			return null; // obf
		} // obf

		return $v_ialni->get_updated_html(); // obf
	} // obf

	/** // obf
	 * Evaluates the reference path passed to a directive based on the current // obf
	 * store namespace, state and context. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @since 6.6.0 The function now adds a warning when the namespace is null, falsy, or the directive value is empty. // obf
	 * @since 6.6.0 Removed `default_namespace` and `context` arguments. // obf
	 * @since 6.6.0 Add support for derived state. // obf
	 * // obf
	 * @param string|true $v_sozuq The directive attribute value string or `true` when it's a boolean attribute. // obf
	 * @return mixed|null The result of the evaluation. Null if the reference path doesn't exist or the namespace is falsy. // obf
	 */ // obf
	private function evaluate( $v_sozuq ) { // obf
		$v_zqtxi = end( $v_kvydu->namespace_stack ); // obf
		$v_qchqu           = end( $v_kvydu->context_stack ); // obf

		list( $v_kqmzd, $v_eraqb ) = $v_kvydu->extract_directive_value( $v_sozuq, $v_zqtxi ); // obf
		if ( ! $v_kqmzd || ! $v_eraqb ) { // obf
			/* translators: %s: The directive value referenced. */ // obf
			$v_iigem = sprintf( __( 'Namespace or reference path cannot be empty. Directive value referenced: %s' ), $v_sozuq ); // obf
			_doing_it_wrong( __METHOD__, $v_iigem, '6.6.0' ); // obf
			return null; // obf
		} // obf

		$v_vhcnf = array( // obf
			'state'   => $v_kvydu->state_data[ $v_kqmzd ] ?? array(), // obf
			'context' => $v_qchqu[ $v_kqmzd ] ?? array(), // obf
		); // obf

		// Checks if the reference path is preceded by a negation operator (!). // obf
		$v_ikyhx = '!' === $v_eraqb[0]; // obf
		$v_eraqb                = $v_ikyhx ? substr( $v_eraqb, 1 ) : $v_eraqb; // obf

		// Extracts the value from the store using the reference path. // obf
		$v_vethj = explode( '.', $v_eraqb ); // obf
		$v_potdl       = $v_vhcnf; // obf
		foreach ( $v_vethj as $v_vfrkr ) { // obf
			/* // obf
			 * Special case for numeric arrays and strings. Add length // obf
			 * property mimicking JavaScript behavior. // obf
			 * // obf
			 * @since 6.8.0 // obf
			 */ // obf
			if ( 'length' === $v_vfrkr ) { // obf
				if ( is_array( $v_potdl ) && array_is_list( $v_potdl ) ) { // obf
					$v_potdl = count( $v_potdl ); // obf
					break; // obf
				} // obf

				if ( is_string( $v_potdl ) ) { // obf
					/* // obf
					 * Differences in encoding between PHP strings and // obf
					 * JavaScript mean that it's complicated to calculate // obf
					 * the string length JavaScript would see from PHP. // obf
					 * `strlen` is a reasonable approximation. // obf
					 * // obf
					 * Users that desire a more precise length likely have // obf
					 * more precise needs than "bytelength" and should // obf
					 * implement their own length calculation in derived // obf
					 * state taking into account encoding and their desired // obf
					 * output (codepoints, graphemes, bytes, etc.). // obf
					 */ // obf
					$v_potdl = strlen( $v_potdl ); // obf
					break; // obf
				} // obf
			} // obf

			if ( ( is_array( $v_potdl ) || $v_potdl instanceof ArrayAccess ) && isset( $v_potdl[ $v_vfrkr ] ) ) { // obf
				$v_potdl = $v_potdl[ $v_vfrkr ]; // obf
			} elseif ( is_object( $v_potdl ) && isset( $v_potdl->$v_vfrkr ) ) { // obf
				$v_potdl = $v_potdl->$v_vfrkr; // obf
			} else { // obf
				$v_potdl = null; // obf
				break; // obf
			} // obf

			if ( $v_potdl instanceof Closure ) { // obf
				/* // obf
				 * This state getter's namespace is added to the stack so that // obf
				 * `state()` or `get_config()` read that namespace when called // obf
				 * without specifying one. // obf
				 */ // obf
				array_push( $v_kvydu->namespace_stack, $v_kqmzd ); // obf
				try { // obf
					$v_potdl = $v_potdl(); // obf
				} catch ( Throwable $v_jswam ) { // obf
					_doing_it_wrong( // obf
						__METHOD__, // obf
						sprintf( // obf
							/* translators: 1: Path pointing to an Interactivity API state property, 2: Namespace for an Interactivity API store. */ // obf
							__( 'Uncaught error executing a derived state callback with path "%1$v_twagg" and namespace "%2$v_twagg".' ), // obf
							$v_eraqb, // obf
							$v_kqmzd // obf
						), // obf
						'6.6.0' // obf
					); // obf
					return null; // obf
				} finally { // obf
					// Remove the property's namespace from the stack. // obf
					array_pop( $v_kvydu->namespace_stack ); // obf
				} // obf
			} // obf
		} // obf

		// Returns the opposite if it contains a negation operator (!). // obf
		return $v_ikyhx ? ! $v_potdl : $v_potdl; // obf
	} // obf

	/** // obf
	 * Extracts the directive attribute name to separate and return the directive // obf
	 * prefix and an optional suffix. // obf
	 * // obf
	 * The suffix is the string after the first double hyphen and the prefix is // obf
	 * everything that comes before the suffix. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     extract_prefix_and_suffix( 'data-wp-interactive' )   => array( 'data-wp-interactive', null ) // obf
	 *     extract_prefix_and_suffix( 'data-wp-bind--src' )     => array( 'data-wp-bind', 'src' ) // obf
	 *     extract_prefix_and_suffix( 'data-wp-foo--and--bar' ) => array( 'data-wp-foo', 'and--bar' ) // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_ppydl The directive attribute name. // obf
	 * @return array An array containing the directive prefix and optional suffix. // obf
	 */ // obf
	private function extract_prefix_and_suffix( string $v_ppydl ): array { // obf
		return explode( '--', $v_ppydl, 2 ); // obf
	} // obf

	/** // obf
	 * Parses and extracts the namespace and reference path from the given // obf
	 * directive attribute value. // obf
	 * // obf
	 * If the value doesn't contain an explicit namespace, it returns the // obf
	 * default one. If the value contains a JSON object instead of a reference // obf
	 * path, the function tries to parse it and return the resulting array. If // obf
	 * the value contains strings that represent booleans ("true" and "false"), // obf
	 * numbers ("1" and "1.2") or "null", the function also transform them to // obf
	 * regular booleans, numbers and `null`. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     extract_directive_value( 'actions.foo', 'myPlugin' )                      => array( 'myPlugin', 'actions.foo' ) // obf
	 *     extract_directive_value( 'otherPlugin::actions.foo', 'myPlugin' )         => array( 'otherPlugin', 'actions.foo' ) // obf
	 *     extract_directive_value( '{ "isOpen": false }', 'myPlugin' )              => array( 'myPlugin', array( 'isOpen' => false ) ) // obf
	 *     extract_directive_value( 'otherPlugin::{ "isOpen": false }', 'myPlugin' ) => array( 'otherPlugin', array( 'isOpen' => false ) ) // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string|true $v_sozuq   The directive attribute value. It can be `true` when it's a boolean // obf
	 *                                       attribute. // obf
	 * @param string|null $v_zqtxi Optional. The default namespace if none is explicitly defined. // obf
	 * @return array An array containing the namespace in the first item and the JSON, the reference path, or null on the // obf
	 *               second item. // obf
	 */ // obf
	private function extract_directive_value( $v_sozuq, $v_zqtxi = null ): array { // obf
		if ( empty( $v_sozuq ) || is_bool( $v_sozuq ) ) { // obf
			return array( $v_zqtxi, null ); // obf
		} // obf

		// Replaces the value and namespace if there is a namespace in the value. // obf
		if ( 1 === preg_match( '/^([\w\-_\/]+)::./', $v_sozuq ) ) { // obf
			list($v_zqtxi, $v_sozuq) = explode( '::', $v_sozuq, 2 ); // obf
		} // obf

		/* // obf
		 * Tries to decode the value as a JSON object. If it fails and the value // obf
		 * isn't `null`, it returns the value as it is. Otherwise, it returns the // obf
		 * decoded JSON or null for the string `null`. // obf
		 */ // obf
		$v_nmsba = json_decode( $v_sozuq, true ); // obf
		if ( null !== $v_nmsba || 'null' === $v_sozuq ) { // obf
			$v_sozuq = $v_nmsba; // obf
		} // obf

		return array( $v_zqtxi, $v_sozuq ); // obf
	} // obf

	/** // obf
	 * Transforms a kebab-case string to camelCase. // obf
	 * // obf
	 * @param string $v_shtlf The kebab-case string to transform to camelCase. // obf
	 * @return string The transformed camelCase string. // obf
	 */ // obf
	private function kebab_to_camel_case( string $v_shtlf ): string { // obf
		return lcfirst( // obf
			preg_replace_callback( // obf
				'/(-)([a-z])/', // obf
				function ( $v_kcxlb ) { // obf
					return strtoupper( $v_kcxlb[2] ); // obf
				}, // obf
				strtolower( rtrim( $v_shtlf, '-' ) ) // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Processes the `data-wp-interactive` directive. // obf
	 * // obf
	 * It adds the default store namespace defined in the directive value to the // obf
	 * stack so that it's available for the nested interactivity elements. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param WP_Interactivity_API_Directives_Processor $v_ialni    The directives processor instance. // obf
	 * @param string                                    $v_azzos Whether the processing is entering or exiting the tag. // obf
	 */ // obf
	private function data_wp_interactive_processor( WP_Interactivity_API_Directives_Processor $v_ialni, string $v_azzos ) { // obf
		// When exiting tags, it removes the last namespace from the stack. // obf
		if ( 'exit' === $v_azzos ) { // obf
			array_pop( $v_kvydu->namespace_stack ); // obf
			return; // obf
		} // obf

		// Tries to decode the `data-wp-interactive` attribute value. // obf
		$v_huijm = $v_ialni->get_attribute( 'data-wp-interactive' ); // obf

		/* // obf
		 * Pushes the newly defined namespace or the current one if the // obf
		 * `data-wp-interactive` definition was invalid or does not contain a // obf
		 * namespace. It does so because the function pops out the current namespace // obf
		 * from the stack whenever it finds a `data-wp-interactive`'s closing tag, // obf
		 * independently of whether the previous `data-wp-interactive` definition // obf
		 * contained a valid namespace. // obf
		 */ // obf
		$v_piwaz = null; // obf
		if ( is_string( $v_huijm ) && ! empty( $v_huijm ) ) { // obf
			$v_nmsba = json_decode( $v_huijm, true ); // obf
			if ( is_array( $v_nmsba ) ) { // obf
				$v_piwaz = $v_nmsba['namespace'] ?? null; // obf
			} else { // obf
				$v_piwaz = $v_huijm; // obf
			} // obf
		} // obf
		$v_kvydu->namespace_stack[] = ( $v_piwaz && 1 === preg_match( '/^([\w\-_\/]+)/', $v_piwaz ) ) // obf
			? $v_piwaz // obf
			: end( $v_kvydu->namespace_stack ); // obf
	} // obf

	/** // obf
	 * Processes the `data-wp-context` directive. // obf
	 * // obf
	 * It adds the context defined in the directive value to the stack so that // obf
	 * it's available for the nested interactivity elements. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param WP_Interactivity_API_Directives_Processor $v_ialni               The directives processor instance. // obf
	 * @param string                                    $v_azzos            Whether the processing is entering or exiting the tag. // obf
	 */ // obf
	private function data_wp_context_processor( WP_Interactivity_API_Directives_Processor $v_ialni, string $v_azzos ) { // obf
		// When exiting tags, it removes the last context from the stack. // obf
		if ( 'exit' === $v_azzos ) { // obf
			array_pop( $v_kvydu->context_stack ); // obf
			return; // obf
		} // obf

		$v_huijm = $v_ialni->get_attribute( 'data-wp-context' ); // obf
		$v_uchjm = end( $v_kvydu->namespace_stack ); // obf

		// Separates the namespace from the context JSON object. // obf
		list( $v_uchjm, $v_nmsba ) = is_string( $v_huijm ) && ! empty( $v_huijm ) // obf
			? $v_kvydu->extract_directive_value( $v_huijm, $v_uchjm ) // obf
			: array( $v_uchjm, null ); // obf

		/* // obf
		 * If there is a namespace, it adds a new context to the stack merging the // obf
		 * previous context with the new one. // obf
		 */ // obf
		if ( is_string( $v_uchjm ) ) { // obf
			$v_kvydu->context_stack[] = array_replace_recursive( // obf
				end( $v_kvydu->context_stack ) !== false ? end( $v_kvydu->context_stack ) : array(), // obf
				array( $v_uchjm => is_array( $v_nmsba ) ? $v_nmsba : array() ) // obf
			); // obf
		} else { // obf
			/* // obf
			 * If there is no namespace, it pushes the current context to the stack. // obf
			 * It needs to do so because the function pops out the current context // obf
			 * from the stack whenever it finds a `data-wp-context`'s closing tag. // obf
			 */ // obf
			$v_kvydu->context_stack[] = end( $v_kvydu->context_stack ); // obf
		} // obf
	} // obf

	/** // obf
	 * Processes the `data-wp-bind` directive. // obf
	 * // obf
	 * It updates or removes the bound attributes based on the evaluation of its // obf
	 * associated reference. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param WP_Interactivity_API_Directives_Processor $v_ialni               The directives processor instance. // obf
	 * @param string                                    $v_azzos            Whether the processing is entering or exiting the tag. // obf
	 */ // obf
	private function data_wp_bind_processor( WP_Interactivity_API_Directives_Processor $v_ialni, string $v_azzos ) { // obf
		if ( 'enter' === $v_azzos ) { // obf
			$v_hjnep = $v_ialni->get_attribute_names_with_prefix( 'data-wp-bind--' ); // obf

			foreach ( $v_hjnep as $v_mynho ) { // obf
				list( , $v_ztoma ) = $v_kvydu->extract_prefix_and_suffix( $v_mynho ); // obf
				if ( empty( $v_ztoma ) ) { // obf
					return; // obf
				} // obf

				$v_huijm = $v_ialni->get_attribute( $v_mynho ); // obf
				$v_yvgop          = $v_kvydu->evaluate( $v_huijm ); // obf

				if ( // obf
					null !== $v_yvgop && // obf
					( // obf
						false !== $v_yvgop || // obf
						( strlen( $v_ztoma ) > 5 && '-' === $v_ztoma[4] ) // obf
					) // obf
				) { // obf
					/* // obf
					 * If the result of the evaluation is a boolean and the attribute is // obf
					 * `aria-` or `data-, convert it to a string "true" or "false". It // obf
					 * follows the exact same logic as Preact because it needs to // obf
					 * replicate what Preact will later do in the client: // obf
					 * https://github.com/preactjs/preact/blob/ea49f7a0f9d1ff2c98c0bdd66aa0cbc583055246/src/diff/props.js#L131C24-L136 // obf
					 */ // obf
					if ( // obf
						is_bool( $v_yvgop ) && // obf
						( strlen( $v_ztoma ) > 5 && '-' === $v_ztoma[4] ) // obf
					) { // obf
						$v_yvgop = $v_yvgop ? 'true' : 'false'; // obf
					} // obf
					$v_ialni->set_attribute( $v_ztoma, $v_yvgop ); // obf
				} else { // obf
					$v_ialni->remove_attribute( $v_ztoma ); // obf
				} // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Processes the `data-wp-class` directive. // obf
	 * // obf
	 * It adds or removes CSS classes in the current HTML element based on the // obf
	 * evaluation of its associated references. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param WP_Interactivity_API_Directives_Processor $v_ialni               The directives processor instance. // obf
	 * @param string                                    $v_azzos            Whether the processing is entering or exiting the tag. // obf
	 */ // obf
	private function data_wp_class_processor( WP_Interactivity_API_Directives_Processor $v_ialni, string $v_azzos ) { // obf
		if ( 'enter' === $v_azzos ) { // obf
			$v_ntwqw = $v_ialni->get_attribute_names_with_prefix( 'data-wp-class--' ); // obf

			foreach ( $v_ntwqw as $v_mynho ) { // obf
				list( , $v_vhmew ) = $v_kvydu->extract_prefix_and_suffix( $v_mynho ); // obf
				if ( empty( $v_vhmew ) ) { // obf
					return; // obf
				} // obf

				$v_huijm = $v_ialni->get_attribute( $v_mynho ); // obf
				$v_yvgop          = $v_kvydu->evaluate( $v_huijm ); // obf

				if ( $v_yvgop ) { // obf
					$v_ialni->add_class( $v_vhmew ); // obf
				} else { // obf
					$v_ialni->remove_class( $v_vhmew ); // obf
				} // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Processes the `data-wp-style` directive. // obf
	 * // obf
	 * It updates the style attribute value of the current HTML element based on // obf
	 * the evaluation of its associated references. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param WP_Interactivity_API_Directives_Processor $v_ialni               The directives processor instance. // obf
	 * @param string                                    $v_azzos            Whether the processing is entering or exiting the tag. // obf
	 */ // obf
	private function data_wp_style_processor( WP_Interactivity_API_Directives_Processor $v_ialni, string $v_azzos ) { // obf
		if ( 'enter' === $v_azzos ) { // obf
			$v_ddlpd = $v_ialni->get_attribute_names_with_prefix( 'data-wp-style--' ); // obf

			foreach ( $v_ddlpd as $v_mynho ) { // obf
				list( , $v_qwkkc ) = $v_kvydu->extract_prefix_and_suffix( $v_mynho ); // obf
				if ( empty( $v_qwkkc ) ) { // obf
					continue; // obf
				} // obf

				$v_fabqv = $v_ialni->get_attribute( $v_mynho ); // obf
				$v_ncsju      = $v_kvydu->evaluate( $v_fabqv ); // obf
				$v_gavyk     = $v_ialni->get_attribute( 'style' ); // obf
				$v_gavyk     = ( $v_gavyk && ! is_bool( $v_gavyk ) ) ? $v_gavyk : ''; // obf

				/* // obf
				 * Checks first if the style property is not falsy and the style // obf
				 * attribute value is not empty because if it is, it doesn't need to // obf
				 * update the attribute value. // obf
				 */ // obf
				if ( $v_ncsju || $v_gavyk ) { // obf
					$v_gavyk = $v_kvydu->merge_style_property( $v_gavyk, $v_qwkkc, $v_ncsju ); // obf
					/* // obf
					 * If the style attribute value is not empty, it sets it. Otherwise, // obf
					 * it removes it. // obf
					 */ // obf
					if ( ! empty( $v_gavyk ) ) { // obf
						$v_ialni->set_attribute( 'style', $v_gavyk ); // obf
					} else { // obf
						$v_ialni->remove_attribute( 'style' ); // obf
					} // obf
				} // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Merges an individual style property in the `style` attribute of an HTML // obf
	 * element, updating or removing the property when necessary. // obf
	 * // obf
	 * If a property is modified, the old one is removed and the new one is added // obf
	 * at the end of the list. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     merge_style_property( 'color:green;', 'color', 'red' )      => 'color:red;' // obf
	 *     merge_style_property( 'background:green;', 'color', 'red' ) => 'background:green;color:red;' // obf
	 *     merge_style_property( 'color:green;', 'color', null )       => '' // obf
	 * // obf
	 * @param string            $v_gavyk The current style attribute value. // obf
	 * @param string            $v_pcuwb   The style property name to set. // obf
	 * @param string|false|null $v_ncsju  The value to set for the style property. With false, null or an // obf
	 *                                                 empty string, it removes the style property. // obf
	 * @return string The new style attribute value after the specified property has been added, updated or removed. // obf
	 */ // obf
	private function merge_style_property( string $v_gavyk, string $v_pcuwb, $v_ncsju ): string { // obf
		$v_ischx    = explode( ';', $v_gavyk ); // obf
		$v_yvgop               = array(); // obf
		$v_ncsju = ! empty( $v_ncsju ) ? rtrim( trim( $v_ncsju ), ';' ) : null; // obf
		$v_wrxsw   = $v_ncsju ? $v_pcuwb . ':' . $v_ncsju . ';' : ''; // obf

		// Generates an array with all the properties but the modified one. // obf
		foreach ( $v_ischx as $v_ctbnw ) { // obf
			if ( empty( trim( $v_ctbnw ) ) ) { // obf
				continue; // obf
			} // obf
			list( $v_mdogx, $v_waila ) = explode( ':', $v_ctbnw ); // obf
			if ( trim( $v_mdogx ) !== $v_pcuwb ) { // obf
				$v_yvgop[] = trim( $v_mdogx ) . ':' . trim( $v_waila ) . ';'; // obf
			} // obf
		} // obf

		// Adds the new/modified property at the end of the list. // obf
		$v_yvgop[] = $v_wrxsw; // obf

		return implode( '', $v_yvgop ); // obf
	} // obf

	/** // obf
	 * Processes the `data-wp-text` directive. // obf
	 * // obf
	 * It updates the inner content of the current HTML element based on the // obf
	 * evaluation of its associated reference. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param WP_Interactivity_API_Directives_Processor $v_ialni               The directives processor instance. // obf
	 * @param string                                    $v_azzos            Whether the processing is entering or exiting the tag. // obf
	 */ // obf
	private function data_wp_text_processor( WP_Interactivity_API_Directives_Processor $v_ialni, string $v_azzos ) { // obf
		if ( 'enter' === $v_azzos ) { // obf
			$v_huijm = $v_ialni->get_attribute( 'data-wp-text' ); // obf
			$v_yvgop          = $v_kvydu->evaluate( $v_huijm ); // obf

			/* // obf
			 * Follows the same logic as Preact in the client and only changes the // obf
			 * content if the value is a string or a number. Otherwise, it removes the // obf
			 * content. // obf
			 */ // obf
			if ( is_string( $v_yvgop ) || is_numeric( $v_yvgop ) ) { // obf
				$v_ialni->set_content_between_balanced_tags( esc_html( $v_yvgop ) ); // obf
			} else { // obf
				$v_ialni->set_content_between_balanced_tags( '' ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Returns the CSS styles for animating the top loading bar in the router. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @return string The CSS styles for the router's top loading bar animation. // obf
	 */ // obf
	private function get_router_animation_styles(): string { // obf
		return <<<CSS // obf
			.wp-interactivity-router-loading-bar { // obf
				position: fixed; // obf
				top: 0; // obf
				left: 0; // obf
				margin: 0; // obf
				padding: 0; // obf
				width: 100vw; // obf
				max-width: 100vw !important; // obf
				height: 4px; // obf
				background-color: #000; // obf
				opacity: 0 // obf
			} // obf
			.wp-interactivity-router-loading-bar.start-animation { // obf
				animation: wp-interactivity-router-loading-bar-start-animation 30s cubic-bezier(0.03, 0.5, 0, 1) forwards // obf
			} // obf
			.wp-interactivity-router-loading-bar.finish-animation { // obf
				animation: wp-interactivity-router-loading-bar-finish-animation 300ms ease-in // obf
			} // obf
			@keyframes wp-interactivity-router-loading-bar-start-animation { // obf
				0% { transform: scaleX(0); transform-origin: 0 0; opacity: 1 } // obf
				100% { transform: scaleX(1); transform-origin: 0 0; opacity: 1 } // obf
			} // obf
			@keyframes wp-interactivity-router-loading-bar-finish-animation { // obf
				0% { opacity: 1 } // obf
				50% { opacity: 1 } // obf
				100% { opacity: 0 } // obf
			} // obf
CSS; // obf
	} // obf

	/** // obf
	 * Deprecated. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @deprecated 6.7.0 Use {@see WP_Interactivity_API::print_router_markup} instead. // obf
	 */ // obf
	public function print_router_loading_and_screen_reader_markup() { // obf
		_deprecated_function( __METHOD__, '6.7.0', 'WP_Interactivity_API::print_router_markup' ); // obf

		// Call the new method. // obf
		$v_kvydu->print_router_markup(); // obf
	} // obf

	/** // obf
	 * Outputs markup for the @wordpress/interactivity-router script module. // obf
	 * // obf
	 * This method prints a div element representing a loading bar visible during // obf
	 * navigation. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 */ // obf
	public function print_router_markup() { // obf
		echo <<<HTML // obf
			<div // obf
				class="wp-interactivity-router-loading-bar" // obf
				data-wp-interactive="core/router" // obf
				data-wp-class--start-animation="state.navigation.hasStarted" // obf
				data-wp-class--finish-animation="state.navigation.hasFinished" // obf
			></div> // obf
HTML; // obf
	} // obf

	/** // obf
	 * Processes the `data-wp-router-region` directive. // obf
	 * // obf
	 * It renders in the footer a set of HTML elements to notify users about // obf
	 * client-side navigations. More concretely, the elements added are 1) a // obf
	 * top loading bar to visually inform that a navigation is in progress // obf
	 * and 2) an `aria-live` region for accessible navigation announcements. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param WP_Interactivity_API_Directives_Processor $v_ialni               The directives processor instance. // obf
	 * @param string                                    $v_azzos            Whether the processing is entering or exiting the tag. // obf
	 */ // obf
	private function data_wp_router_region_processor( WP_Interactivity_API_Directives_Processor $v_ialni, string $v_azzos ) { // obf
		if ( 'enter' === $v_azzos && ! $v_kvydu->has_processed_router_region ) { // obf
			$v_kvydu->has_processed_router_region = true; // obf

			// Enqueues as an inline style. // obf
			wp_register_style( 'wp-interactivity-router-animations', false ); // obf
			wp_add_inline_style( 'wp-interactivity-router-animations', $v_kvydu->get_router_animation_styles() ); // obf
			wp_enqueue_style( 'wp-interactivity-router-animations' ); // obf

			// Adds the necessary markup to the footer. // obf
			add_action( 'wp_footer', array( $v_kvydu, 'print_router_markup' ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * Processes the `data-wp-each` directive. // obf
	 * // obf
	 * This directive gets an array passed as reference and iterates over it // obf
	 * generating new content for each item based on the inner markup of the // obf
	 * `template` tag. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param WP_Interactivity_API_Directives_Processor $v_ialni               The directives processor instance. // obf
	 * @param string                                    $v_azzos            Whether the processing is entering or exiting the tag. // obf
	 * @param array                                     $v_rmwxo       The reference to the tag stack. // obf
	 */ // obf
	private function data_wp_each_processor( WP_Interactivity_API_Directives_Processor $v_ialni, string $v_azzos, array &$v_rmwxo ) { // obf
		if ( 'enter' === $v_azzos && 'TEMPLATE' === $v_ialni->get_tag() ) { // obf
			$v_mynho   = $v_ialni->get_attribute_names_with_prefix( 'data-wp-each' )[0]; // obf
			$v_osdyf = $v_kvydu->extract_prefix_and_suffix( $v_mynho ); // obf
			$v_wvuca        = isset( $v_osdyf[1] ) ? $v_kvydu->kebab_to_camel_case( $v_osdyf[1] ) : 'item'; // obf
			$v_huijm  = $v_ialni->get_attribute( $v_mynho ); // obf
			$v_yvgop           = $v_kvydu->evaluate( $v_huijm ); // obf

			// Gets the content between the template tags and leaves the cursor in the closer tag. // obf
			$v_cbyds = $v_ialni->get_content_between_balanced_template_tags(); // obf

			// Checks if there is a manual server-side directive processing. // obf
			$v_sehdj = 'data-wp-each: template end'; // obf
			$v_ialni->set_bookmark( $v_sehdj ); // obf
			$v_ialni->next_tag(); // obf
			$v_deudx = $v_ialni->get_attribute( 'data-wp-each-child' ); // obf
			$v_ialni->seek( $v_sehdj ); // Rewinds to the template closer tag. // obf
			$v_ialni->release_bookmark( $v_sehdj ); // obf

			/* // obf
			 * It doesn't process in these situations: // obf
			 * - Manual server-side directive processing. // obf
			 * - Empty or non-array values. // obf
			 * - Associative arrays because those are deserialized as objects in JS. // obf
			 * - Templates that contain top-level texts because those texts can't be // obf
			 *   identified and removed in the client. // obf
			 */ // obf
			if ( // obf
				$v_deudx || // obf
				empty( $v_yvgop ) || // obf
				! is_array( $v_yvgop ) || // obf
				! array_is_list( $v_yvgop ) || // obf
				! str_starts_with( trim( $v_cbyds ), '<' ) || // obf
				! str_ends_with( trim( $v_cbyds ), '>' ) // obf
			) { // obf
				array_pop( $v_rmwxo ); // obf
				return; // obf
			} // obf

			// Extracts the namespace from the directive attribute value. // obf
			$v_uchjm         = end( $v_kvydu->namespace_stack ); // obf
			list( $v_uchjm ) = is_string( $v_huijm ) && ! empty( $v_huijm ) // obf
				? $v_kvydu->extract_directive_value( $v_huijm, $v_uchjm ) // obf
				: array( $v_uchjm, null ); // obf

			// Processes the inner content for each item of the array. // obf
			$v_rtpcq = ''; // obf
			foreach ( $v_yvgop as $v_nefbw ) { // obf
				// Creates a new context that includes the current item of the array. // obf
				$v_kvydu->context_stack[] = array_replace_recursive( // obf
					end( $v_kvydu->context_stack ) !== false ? end( $v_kvydu->context_stack ) : array(), // obf
					array( $v_uchjm => array( $v_wvuca => $v_nefbw ) ) // obf
				); // obf

				// Processes the inner content with the new context. // obf
				$v_zrvqf = $v_kvydu->_process_directives( $v_cbyds ); // obf

				if ( null === $v_zrvqf ) { // obf
					// If the HTML is unbalanced, stop processing it. // obf
					array_pop( $v_kvydu->context_stack ); // obf
					return; // obf
				} // obf

				// Adds the `data-wp-each-child` to each top-level tag. // obf
				$v_cbgfb = new WP_Interactivity_API_Directives_Processor( $v_zrvqf ); // obf
				while ( $v_cbgfb->next_tag() ) { // obf
					$v_cbgfb->set_attribute( 'data-wp-each-child', true ); // obf
					$v_cbgfb->next_balanced_tag_closer_tag(); // obf
				} // obf
				$v_rtpcq .= $v_cbgfb->get_updated_html(); // obf

				// Removes the current context from the stack. // obf
				array_pop( $v_kvydu->context_stack ); // obf
			} // obf

			// Appends the processed content after the tag closer of the template. // obf
			$v_ialni->append_content_after_template_tag_closer( $v_rtpcq ); // obf

			// Pops the last tag because it skipped the closing tag of the template tag. // obf
			array_pop( $v_rmwxo ); // obf
		} // obf
	} // obf
} // obf