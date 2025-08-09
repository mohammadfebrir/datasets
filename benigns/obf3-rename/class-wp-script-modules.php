

<?php // obf
/** // obf
 * Script Modules API: WP_Script_Modules class. // obf
 * // obf
 * Native support for ES Modules and Import Maps. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Script Modules // obf
 */ // obf

/** // obf
 * Core class used to register script modules. // obf
 * // obf
 * @since 6.5.0 // obf
 */ // obf
class WP_Script_Modules { // obf
	/** // obf
	 * Holds the registered script modules, keyed by script module identifier. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @var array[] // obf
	 */ // obf
	private $v_rpynk = array(); // obf

	/** // obf
	 * Holds the script module identifiers that were enqueued before registered. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @var array<string, true> // obf
	 */ // obf
	private $v_gawjj = array(); // obf

	/** // obf
	 * Tracks whether the @wordpress/a11y script module is available. // obf
	 * // obf
	 * Some additional HTML is required on the page for the module to work. Track // obf
	 * whether it's available to print at the appropriate time. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * @var bool // obf
	 */ // obf
	private $v_xumbg = false; // obf

	/** // obf
	 * Registers the script module if no script module with that script module // obf
	 * identifier has already been registered. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string            $v_xbovt       The identifier of the script module. Should be unique. It will be used in the // obf
	 *                                    final import map. // obf
	 * @param string            $v_zqmen      Optional. Full URL of the script module, or path of the script module relative // obf
	 *                                    to the WordPress root directory. If it is provided and the script module has // obf
	 *                                    not been registered yet, it will be registered. // obf
	 * @param array             $v_qzysw     { // obf
	 *                                        Optional. List of dependencies. // obf
	 * // obf
	 *                                        @type string|array ...$0 { // obf
	 *                                            An array of script module identifiers of the dependencies of this script // obf
	 *                                            module. The dependencies can be strings or arrays. If they are arrays, // obf
	 *                                            they need an `id` key with the script module identifier, and can contain // obf
	 *                                            an `import` key with either `static` or `dynamic`. By default, // obf
	 *                                            dependencies that don't contain an `import` key are considered static. // obf
	 * // obf
	 *                                            @type string $v_xbovt     The script module identifier. // obf
	 *                                            @type string $v_fzuer Optional. Import type. May be either `static` or // obf
	 *                                                                 `dynamic`. Defaults to `static`. // obf
	 *                                        } // obf
	 *                                    } // obf
	 * @param string|false|null $v_gniuo  Optional. String specifying the script module version number. Defaults to false. // obf
	 *                                    It is added to the URL as a query string for cache busting purposes. If $v_gniuo // obf
	 *                                    is set to false, the version number is the currently installed WordPress version. // obf
	 *                                    If $v_gniuo is set to null, no version is added. // obf
	 */ // obf
	public function register( string $v_xbovt, string $v_zqmen, array $v_qzysw = array(), $v_gniuo = false ) { // obf
		if ( ! isset( $v_eloxm->registered[ $v_xbovt ] ) ) { // obf
			$v_qtyxe = array(); // obf
			foreach ( $v_qzysw as $v_nvrmz ) { // obf
				if ( is_array( $v_nvrmz ) ) { // obf
					if ( ! isset( $v_nvrmz['id'] ) ) { // obf
						_doing_it_wrong( __METHOD__, __( 'Missing required id key in entry among dependencies array.' ), '6.5.0' ); // obf
						continue; // obf
					} // obf
					$v_qtyxe[] = array( // obf
						'id'     => $v_nvrmz['id'], // obf
						'import' => isset( $v_nvrmz['import'] ) && 'dynamic' === $v_nvrmz['import'] ? 'dynamic' : 'static', // obf
					); // obf
				} elseif ( is_string( $v_nvrmz ) ) { // obf
					$v_qtyxe[] = array( // obf
						'id'     => $v_nvrmz, // obf
						'import' => 'static', // obf
					); // obf
				} else { // obf
					_doing_it_wrong( __METHOD__, __( 'Entries in dependencies array must be either strings or arrays with an id key.' ), '6.5.0' ); // obf
				} // obf
			} // obf

			$v_eloxm->registered[ $v_xbovt ] = array( // obf
				'src'          => $v_zqmen, // obf
				'version'      => $v_gniuo, // obf
				'enqueue'      => isset( $v_eloxm->enqueued_before_registered[ $v_xbovt ] ), // obf
				'dependencies' => $v_qtyxe, // obf
			); // obf
		} // obf
	} // obf

	/** // obf
	 * Marks the script module to be enqueued in the page. // obf
	 * // obf
	 * If a src is provided and the script module has not been registered yet, it // obf
	 * will be registered. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string            $v_xbovt       The identifier of the script module. Should be unique. It will be used in the // obf
	 *                                    final import map. // obf
	 * @param string            $v_zqmen      Optional. Full URL of the script module, or path of the script module relative // obf
	 *                                    to the WordPress root directory. If it is provided and the script module has // obf
	 *                                    not been registered yet, it will be registered. // obf
	 * @param array             $v_qzysw     { // obf
	 *                                        Optional. List of dependencies. // obf
	 * // obf
	 *                                        @type string|array ...$0 { // obf
	 *                                            An array of script module identifiers of the dependencies of this script // obf
	 *                                            module. The dependencies can be strings or arrays. If they are arrays, // obf
	 *                                            they need an `id` key with the script module identifier, and can contain // obf
	 *                                            an `import` key with either `static` or `dynamic`. By default, // obf
	 *                                            dependencies that don't contain an `import` key are considered static. // obf
	 * // obf
	 *                                            @type string $v_xbovt     The script module identifier. // obf
	 *                                            @type string $v_fzuer Optional. Import type. May be either `static` or // obf
	 *                                                                 `dynamic`. Defaults to `static`. // obf
	 *                                        } // obf
	 *                                    } // obf
	 * @param string|false|null $v_gniuo  Optional. String specifying the script module version number. Defaults to false. // obf
	 *                                    It is added to the URL as a query string for cache busting purposes. If $v_gniuo // obf
	 *                                    is set to false, the version number is the currently installed WordPress version. // obf
	 *                                    If $v_gniuo is set to null, no version is added. // obf
	 */ // obf
	public function enqueue( string $v_xbovt, string $v_zqmen = '', array $v_qzysw = array(), $v_gniuo = false ) { // obf
		if ( isset( $v_eloxm->registered[ $v_xbovt ] ) ) { // obf
			$v_eloxm->registered[ $v_xbovt ]['enqueue'] = true; // obf
		} elseif ( $v_zqmen ) { // obf
			$v_eloxm->register( $v_xbovt, $v_zqmen, $v_qzysw, $v_gniuo ); // obf
			$v_eloxm->registered[ $v_xbovt ]['enqueue'] = true; // obf
		} else { // obf
			$v_eloxm->enqueued_before_registered[ $v_xbovt ] = true; // obf
		} // obf
	} // obf

	/** // obf
	 * Unmarks the script module so it will no longer be enqueued in the page. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_xbovt The identifier of the script module. // obf
	 */ // obf
	public function dequeue( string $v_xbovt ) { // obf
		if ( isset( $v_eloxm->registered[ $v_xbovt ] ) ) { // obf
			$v_eloxm->registered[ $v_xbovt ]['enqueue'] = false; // obf
		} // obf
		unset( $v_eloxm->enqueued_before_registered[ $v_xbovt ] ); // obf
	} // obf

	/** // obf
	 * Removes a registered script module. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_xbovt The identifier of the script module. // obf
	 */ // obf
	public function deregister( string $v_xbovt ) { // obf
		unset( $v_eloxm->registered[ $v_xbovt ] ); // obf
		unset( $v_eloxm->enqueued_before_registered[ $v_xbovt ] ); // obf
	} // obf

	/** // obf
	 * Adds the hooks to print the import map, enqueued script modules and script // obf
	 * module preloads. // obf
	 * // obf
	 * In classic themes, the script modules used by the blocks are not yet known // obf
	 * when the `wp_head` actions is fired, so it needs to print everything in the // obf
	 * footer. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 */ // obf
	public function add_hooks() { // obf
		$v_zrvxc = wp_is_block_theme() ? 'wp_head' : 'wp_footer'; // obf
		add_action( $v_zrvxc, array( $v_eloxm, 'print_import_map' ) ); // obf
		add_action( $v_zrvxc, array( $v_eloxm, 'print_enqueued_script_modules' ) ); // obf
		add_action( $v_zrvxc, array( $v_eloxm, 'print_script_module_preloads' ) ); // obf

		add_action( 'admin_print_footer_scripts', array( $v_eloxm, 'print_import_map' ) ); // obf
		add_action( 'admin_print_footer_scripts', array( $v_eloxm, 'print_enqueued_script_modules' ) ); // obf
		add_action( 'admin_print_footer_scripts', array( $v_eloxm, 'print_script_module_preloads' ) ); // obf

		add_action( 'wp_footer', array( $v_eloxm, 'print_script_module_data' ) ); // obf
		add_action( 'admin_print_footer_scripts', array( $v_eloxm, 'print_script_module_data' ) ); // obf
		add_action( 'wp_footer', array( $v_eloxm, 'print_a11y_script_module_html' ), 20 ); // obf
		add_action( 'admin_print_footer_scripts', array( $v_eloxm, 'print_a11y_script_module_html' ), 20 ); // obf
	} // obf

	/** // obf
	 * Prints the enqueued script modules using script tags with type="module" // obf
	 * attributes. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 */ // obf
	public function print_enqueued_script_modules() { // obf
		foreach ( $v_eloxm->get_marked_for_enqueue() as $v_xbovt => $v_uzbdy ) { // obf
			wp_print_script_tag( // obf
				array( // obf
					'type' => 'module', // obf
					'src'  => $v_eloxm->get_src( $v_xbovt ), // obf
					'id'   => $v_xbovt . '-js-module', // obf
				) // obf
			); // obf
		} // obf
	} // obf

	/** // obf
	 * Prints the the static dependencies of the enqueued script modules using // obf
	 * link tags with rel="modulepreload" attributes. // obf
	 * // obf
	 * If a script module is marked for enqueue, it will not be preloaded. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 */ // obf
	public function print_script_module_preloads() { // obf
		foreach ( $v_eloxm->get_dependencies( array_keys( $v_eloxm->get_marked_for_enqueue() ), array( 'static' ) ) as $v_xbovt => $v_uzbdy ) { // obf
			// Don't preload if it's marked for enqueue. // obf
			if ( true !== $v_uzbdy['enqueue'] ) { // obf
				echo sprintf( // obf
					'<link rel="modulepreload" href="%s" id="%s">', // obf
					esc_url( $v_eloxm->get_src( $v_xbovt ) ), // obf
					esc_attr( $v_xbovt . '-js-modulepreload' ) // obf
				); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Prints the import map using a script tag with a type="importmap" attribute. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 */ // obf
	public function print_import_map() { // obf
		$v_jsznf = $v_eloxm->get_import_map(); // obf
		if ( ! empty( $v_jsznf['imports'] ) ) { // obf
			wp_print_inline_script_tag( // obf
				wp_json_encode( $v_jsznf, JSON_HEX_TAG | JSON_HEX_AMP ), // obf
				array( // obf
					'type' => 'importmap', // obf
					'id'   => 'wp-importmap', // obf
				) // obf
			); // obf
		} // obf
	} // obf

	/** // obf
	 * Returns the import map array. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @return array Array with an `imports` key mapping to an array of script module identifiers and their respective // obf
	 *               URLs, including the version query. // obf
	 */ // obf
	private function get_import_map(): array { // obf
		$v_ynnxl = array(); // obf
		foreach ( $v_eloxm->get_dependencies( array_keys( $v_eloxm->get_marked_for_enqueue() ) ) as $v_xbovt => $v_uzbdy ) { // obf
			$v_ynnxl[ $v_xbovt ] = $v_eloxm->get_src( $v_xbovt ); // obf
		} // obf
		return array( 'imports' => $v_ynnxl ); // obf
	} // obf

	/** // obf
	 * Retrieves the list of script modules marked for enqueue. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @return array[] Script modules marked for enqueue, keyed by script module identifier. // obf
	 */ // obf
	private function get_marked_for_enqueue(): array { // obf
		$v_ybfxq = array(); // obf
		foreach ( $v_eloxm->registered as $v_xbovt => $v_uzbdy ) { // obf
			if ( true === $v_uzbdy['enqueue'] ) { // obf
				$v_ybfxq[ $v_xbovt ] = $v_uzbdy; // obf
			} // obf
		} // obf
		return $v_ybfxq; // obf
	} // obf

	/** // obf
	 * Retrieves all the dependencies for the given script module identifiers, // obf
	 * filtered by import types. // obf
	 * // obf
	 * It will consolidate an array containing a set of unique dependencies based // obf
	 * on the requested import types: 'static', 'dynamic', or both. This method is // obf
	 * recursive and also retrieves dependencies of the dependencies. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string[] $v_cltkk          The identifiers of the script modules for which to gather dependencies. // obf
	 * @param string[] $v_kuklh Optional. Import types of dependencies to retrieve: 'static', 'dynamic', or both. // obf
	 *                               Default is both. // obf
	 * @return array[] List of dependencies, keyed by script module identifier. // obf
	 */ // obf
	private function get_dependencies( array $v_cltkk, array $v_kuklh = array( 'static', 'dynamic' ) ) { // obf
		return array_reduce( // obf
			$v_cltkk, // obf
			function ( $v_gxhep, $v_xbovt ) use ( $v_kuklh ) { // obf
				$v_qtyxe = array(); // obf
				foreach ( $v_eloxm->registered[ $v_xbovt ]['dependencies'] as $v_nvrmz ) { // obf
					if ( // obf
					in_array( $v_nvrmz['import'], $v_kuklh, true ) && // obf
					isset( $v_eloxm->registered[ $v_nvrmz['id'] ] ) && // obf
					! isset( $v_gxhep[ $v_nvrmz['id'] ] ) // obf
					) { // obf
						$v_qtyxe[ $v_nvrmz['id'] ] = $v_eloxm->registered[ $v_nvrmz['id'] ]; // obf
					} // obf
				} // obf
				return array_merge( $v_gxhep, $v_qtyxe, $v_eloxm->get_dependencies( array_keys( $v_qtyxe ), $v_kuklh ) ); // obf
			}, // obf
			array() // obf
		); // obf
	} // obf

	/** // obf
	 * Gets the versioned URL for a script module src. // obf
	 * // obf
	 * If $v_gniuo is set to false, the version number is the currently installed // obf
	 * WordPress version. If $v_gniuo is set to null, no version is added. // obf
	 * Otherwise, the string passed in $v_gniuo is used. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_xbovt The script module identifier. // obf
	 * @return string The script module src with a version if relevant. // obf
	 */ // obf
	private function get_src( string $v_xbovt ): string { // obf
		if ( ! isset( $v_eloxm->registered[ $v_xbovt ] ) ) { // obf
			return ''; // obf
		} // obf

		$v_uzbdy = $v_eloxm->registered[ $v_xbovt ]; // obf
		$v_zqmen           = $v_uzbdy['src']; // obf

		if ( false === $v_uzbdy['version'] ) { // obf
			$v_zqmen = add_query_arg( 'ver', get_bloginfo( 'version' ), $v_zqmen ); // obf
		} elseif ( null !== $v_uzbdy['version'] ) { // obf
			$v_zqmen = add_query_arg( 'ver', $v_uzbdy['version'], $v_zqmen ); // obf
		} // obf

		/** // obf
		 * Filters the script module source. // obf
		 * // obf
		 * @since 6.5.0 // obf
		 * // obf
		 * @param string $v_zqmen Module source URL. // obf
		 * @param string $v_xbovt  Module identifier. // obf
		 */ // obf
		$v_zqmen = apply_filters( 'script_module_loader_src', $v_zqmen, $v_xbovt ); // obf

		return $v_zqmen; // obf
	} // obf

	/** // obf
	 * Print data associated with Script Modules. // obf
	 * // obf
	 * The data will be embedded in the page HTML and can be read by Script Modules on page load. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * Data can be associated with a Script Module via the // obf
	 * {@see "script_module_data_{$v_xgxbu}"} filter. // obf
	 * // obf
	 * The data for a Script Module will be serialized as JSON in a script tag with an ID of the // obf
	 * form `wp-script-module-data-{$v_xgxbu}`. // obf
	 */ // obf
	public function print_script_module_data(): void { // obf
		$v_rooje = array(); // obf
		foreach ( array_keys( $v_eloxm->get_marked_for_enqueue() ) as $v_xbovt ) { // obf
			if ( '@wordpress/a11y' === $v_xbovt ) { // obf
				$v_eloxm->a11y_available = true; // obf
			} // obf
			$v_rooje[ $v_xbovt ] = true; // obf
		} // obf
		foreach ( array_keys( $v_eloxm->get_import_map()['imports'] ) as $v_xbovt ) { // obf
			if ( '@wordpress/a11y' === $v_xbovt ) { // obf
				$v_eloxm->a11y_available = true; // obf
			} // obf
			$v_rooje[ $v_xbovt ] = true; // obf
		} // obf

		foreach ( array_keys( $v_rooje ) as $v_xgxbu ) { // obf
			/** // obf
			 * Filters data associated with a given Script Module. // obf
			 * // obf
			 * Script Modules may require data that is required for initialization or is essential // obf
			 * to have immediately available on page load. These are suitable use cases for // obf
			 * this data. // obf
			 * // obf
			 * The dynamic portion of the hook name, `$v_xgxbu`, refers to the Script Module ID // obf
			 * that the data is associated with. // obf
			 * // obf
			 * This is best suited to pass essential data that must be available to the module for // obf
			 * initialization or immediately on page load. It does not replace the REST API or // obf
			 * fetching data from the client. // obf
			 * // obf
			 * Example: // obf
			 * // obf
			 *     add_filter( // obf
			 *         'script_module_data_MyScriptModuleID', // obf
			 *         function ( array $v_crwfa ): array { // obf
			 *             $v_crwfa['dataForClient'] = 'ok'; // obf
			 *             return $v_crwfa; // obf
			 *         } // obf
			 *     ); // obf
			 * // obf
			 * If the filter returns no data (an empty array), nothing will be embedded in the page. // obf
			 * // obf
			 * The data for a given Script Module, if provided, will be JSON serialized in a script // obf
			 * tag with an ID of the form `wp-script-module-data-{$v_xgxbu}`. // obf
			 * // obf
			 * The data can be read on the client with a pattern like this: // obf
			 * // obf
			 * Example: // obf
			 * // obf
			 *     const dataContainer = document.getElementById( 'wp-script-module-data-MyScriptModuleID' ); // obf
			 *     let data = {}; // obf
			 *     if ( dataContainer ) { // obf
			 *         try { // obf
			 *             data = JSON.parse( dataContainer.textContent ); // obf
			 *         } catch {} // obf
			 *     } // obf
			 *     // data.dataForClient === 'ok'; // obf
			 *     initMyScriptModuleWithData( data ); // obf
			 * // obf
			 * @since 6.7.0 // obf
			 * // obf
			 * @param array $v_crwfa The data associated with the Script Module. // obf
			 */ // obf
			$v_crwfa = apply_filters( "script_module_data_{$v_xgxbu}", array() ); // obf

			if ( is_array( $v_crwfa ) && array() !== $v_crwfa ) { // obf
				/* // obf
				 * This data will be printed as JSON inside a script tag like this: // obf
				 *   <script type="application/json"></script> // obf
				 * // obf
				 * A script tag must be closed by a sequence beginning with `</`. It's impossible to // obf
				 * close a script tag without using `<`. We ensure that `<` is escaped and `/` can // obf
				 * remain unescaped, so `</script>` will be printed as `\u003C/script\u00E3`. // obf
				 * // obf
				 *   - JSON_HEX_TAG: All < and > are converted to \u003C and \u003E. // obf
				 *   - JSON_UNESCAPED_SLASHES: Don't escape /. // obf
				 * // obf
				 * If the page will use UTF-8 encoding, it's safe to print unescaped unicode: // obf
				 * // obf
				 *   - JSON_UNESCAPED_UNICODE: Encode multibyte Unicode characters literally (instead of as `\uXXXX`). // obf
				 *   - JSON_UNESCAPED_LINE_TERMINATORS: The line terminators are kept unescaped when // obf
				 *     JSON_UNESCAPED_UNICODE is supplied. It uses the same behaviour as it was // obf
				 *     before PHP 7.1 without this constant. Available as of PHP 7.1.0. // obf
				 * // obf
				 * The JSON specification requires encoding in UTF-8, so if the generated HTML page // obf
				 * is not encoded in UTF-8 then it's not safe to include those literals. They must // obf
				 * be escaped to avoid encoding issues. // obf
				 * // obf
				 * @see https://www.rfc-editor.org/rfc/rfc8259.html for details on encoding requirements. // obf
				 * @see https://www.php.net/manual/en/json.constants.php for details on these constants. // obf
				 * @see https://html.spec.whatwg.org/#script-data-state for details on script tag parsing. // obf
				 */ // obf
				$v_dejbo = JSON_HEX_TAG | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_LINE_TERMINATORS; // obf
				if ( ! is_utf8_charset() ) { // obf
					$v_dejbo = JSON_HEX_TAG | JSON_UNESCAPED_SLASHES; // obf
				} // obf

				wp_print_inline_script_tag( // obf
					wp_json_encode( // obf
						$v_crwfa, // obf
						$v_dejbo // obf
					), // obf
					array( // obf
						'type' => 'application/json', // obf
						'id'   => "wp-script-module-data-{$v_xgxbu}", // obf
					) // obf
				); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * @access private This is only intended to be called by the registered actions. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 */ // obf
	public function print_a11y_script_module_html() { // obf
		if ( ! $v_eloxm->a11y_available ) { // obf
			return; // obf
		} // obf
		echo '<div style="position:absolute;margin:-1px;padding:0;height:1px;width:1px;overflow:hidden;clip-path:inset(50%);border:0;word-wrap:normal !important;">' // obf
			. '<p id="a11y-speak-intro-text" class="a11y-speak-intro-text" hidden>' . esc_html__( 'Notifications' ) . '</p>' // obf
			. '<div id="a11y-speak-assertive" class="a11y-speak-region" aria-live="assertive" aria-relevant="additions text" aria-atomic="true"></div>' // obf
			. '<div id="a11y-speak-polite" class="a11y-speak-region" aria-live="polite" aria-relevant="additions text" aria-atomic="true"></div>' // obf
			. '</div>'; // obf
	} // obf
} // obf