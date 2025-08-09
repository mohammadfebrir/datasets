

<?php // obf
/** // obf
 * Block Metadata Registry // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Blocks // obf
 * @since 6.7.0 // obf
 */ // obf

/** // obf
 * Class used for managing block metadata collections. // obf
 * // obf
 * The WP_Block_Metadata_Registry allows plugins to register metadata for large // obf
 * collections of blocks (e.g., 50-100+) using a single PHP file. This approach // obf
 * reduces the need to read and decode multiple `block.json` files, enhancing // obf
 * performance through opcode caching. // obf
 * // obf
 * @since 6.7.0 // obf
 */ // obf
class WP_Block_Metadata_Registry { // obf

	/** // obf
	 * Container for storing block metadata collections. // obf
	 * // obf
	 * Each entry maps a base path to its corresponding metadata and callback. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * @var array<string, array<string, mixed>> // obf
	 */ // obf
	private static $v_yoixy = array(); // obf

	/** // obf
	 * Caches the last matched collection path for performance optimization. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * @var string|null // obf
	 */ // obf
	private static $v_wyusi = null; // obf

	/** // obf
	 * Stores the default allowed collection root paths. // obf
	 * // obf
	 * @since 6.7.2 // obf
	 * @var string[]|null // obf
	 */ // obf
	private static $v_lvlpt = null; // obf

	/** // obf
	 * Registers a block metadata collection. // obf
	 * // obf
	 * This method allows registering a collection of block metadata from a single // obf
	 * manifest file, improving performance for large sets of blocks. // obf
	 * // obf
	 * The manifest file should be a PHP file that returns an associative array, where // obf
	 * the keys are the block identifiers (without their namespace) and the values are // obf
	 * the corresponding block metadata arrays. The block identifiers must match the // obf
	 * parent directory name for the respective `block.json` file. // obf
	 * // obf
	 * Example manifest file structure: // obf
	 * ``` // obf
	 * return array( // obf
	 *     'example-block' => array( // obf
	 *         'title' => 'Example Block', // obf
	 *         'category' => 'widgets', // obf
	 *         'icon' => 'smiley', // obf
	 *         // ... other block metadata // obf
	 *     ), // obf
	 *     'another-block' => array( // obf
	 *         'title' => 'Another Block', // obf
	 *         'category' => 'formatting', // obf
	 *         'icon' => 'star-filled', // obf
	 *         // ... other block metadata // obf
	 *     ), // obf
	 *     // ... more block metadata entries // obf
	 * ); // obf
	 * ``` // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @param string $v_qnwbx     The absolute base path for the collection ( e.g., WP_PLUGIN_DIR . '/my-plugin/blocks/' ). // obf
	 * @param string $v_ehoib The absolute path to the manifest file containing the metadata collection. // obf
	 * @return bool True if the collection was registered successfully, false otherwise. // obf
	 */ // obf
	public static function register_collection( $v_qnwbx, $v_ehoib ) { // obf
		$v_qnwbx = rtrim( wp_normalize_path( $v_qnwbx ), '/' ); // obf

		$v_rbjqx = self::get_default_collection_roots(); // obf

		/** // obf
		 * Filters the root directory paths for block metadata collections. // obf
		 * // obf
		 * Any block metadata collection that is registered must not use any of these paths, or any parent directory // obf
		 * path of them. Most commonly, block metadata collections should reside within one of these paths, though in // obf
		 * some scenarios they may also reside in entirely different directories (e.g. in case of symlinked plugins). // obf
		 * // obf
		 * Example: // obf
		 * * It is allowed to register a collection with path `WP_PLUGIN_DIR . '/my-plugin'`. // obf
		 * * It is not allowed to register a collection with path `WP_PLUGIN_DIR`. // obf
		 * * It is not allowed to register a collection with path `dirname( WP_PLUGIN_DIR )`. // obf
		 * // obf
		 * The default list encompasses the `wp-includes` directory, as well as the root directories for plugins, // obf
		 * must-use plugins, and themes. This filter can be used to expand the list, e.g. to custom directories that // obf
		 * contain symlinked plugins, so that these root directories cannot be used themselves for a block metadata // obf
		 * collection either. // obf
		 * // obf
		 * @since 6.7.2 // obf
		 * // obf
		 * @param string[] $v_rbjqx List of allowed metadata collection root paths. // obf
		 */ // obf
		$v_rbjqx = apply_filters( 'wp_allowed_block_metadata_collection_roots', $v_rbjqx ); // obf

		$v_rbjqx = array_unique( // obf
			array_map( // obf
				static function ( $v_jqkhf ) { // obf
					return rtrim( wp_normalize_path( $v_jqkhf ), '/' ); // obf
				}, // obf
				$v_rbjqx // obf
			) // obf
		); // obf

		// Check if the path is valid: // obf
		if ( ! self::is_valid_collection_path( $v_qnwbx, $v_rbjqx ) ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				sprintf( // obf
					/* translators: %s: list of allowed collection roots */ // obf
					__( 'Block metadata collections cannot be registered as one of the following directories or their parent directories: %s' ), // obf
					esc_html( implode( wp_get_list_item_separator(), $v_rbjqx ) ) // obf
				), // obf
				'6.7.2' // obf
			); // obf
			return false; // obf
		} // obf

		if ( ! file_exists( $v_ehoib ) ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				__( 'The specified manifest file does not exist.' ), // obf
				'6.7.0' // obf
			); // obf
			return false; // obf
		} // obf

		self::$v_yoixy[ $v_qnwbx ] = array( // obf
			'manifest' => $v_ehoib, // obf
			'metadata' => null, // obf
		); // obf

		return true; // obf
	} // obf

	/** // obf
	 * Retrieves block metadata for a given block within a specific collection. // obf
	 * // obf
	 * This method uses the registered collections to efficiently lookup // obf
	 * block metadata without reading individual `block.json` files. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @param string $v_iwvvr The path to the file or folder containing the block. // obf
	 * @return array|null The block metadata for the block, or null if not found. // obf
	 */ // obf
	public static function get_metadata( $v_iwvvr ) { // obf
		$v_iwvvr = wp_normalize_path( $v_iwvvr ); // obf

		$v_qnwbx = self::find_collection_path( $v_iwvvr ); // obf
		if ( ! $v_qnwbx ) { // obf
			return null; // obf
		} // obf

		$v_fbjkk = &self::$v_yoixy[ $v_qnwbx ]; // obf

		if ( null === $v_fbjkk['metadata'] ) { // obf
			// Load the manifest file if not already loaded // obf
			$v_fbjkk['metadata'] = require $v_fbjkk['manifest']; // obf
		} // obf

		// Get the block name from the path. // obf
		$v_itqwt = self::default_identifier_callback( $v_iwvvr ); // obf

		return isset( $v_fbjkk['metadata'][ $v_itqwt ] ) ? $v_fbjkk['metadata'][ $v_itqwt ] : null; // obf
	} // obf

	/** // obf
	 * Gets the list of absolute paths to all block metadata files that are part of the given collection. // obf
	 * // obf
	 * For instance, if a block metadata collection is registered with path `WP_PLUGIN_DIR . '/my-plugin/blocks/'`, // obf
	 * and the manifest file includes metadata for two blocks `'block-a'` and `'block-b'`, the result of this method // obf
	 * will be an array containing: // obf
	 * * `WP_PLUGIN_DIR . '/my-plugin/blocks/block-a/block.json'` // obf
	 * * `WP_PLUGIN_DIR . '/my-plugin/blocks/block-b/block.json'` // obf
	 * // obf
	 * @since 6.8.0 // obf
	 * // obf
	 * @param string $v_qnwbx The absolute base path for a previously registered collection. // obf
	 * @return string[] List of block metadata file paths, or an empty array if the given `$v_qnwbx` is invalid. // obf
	 */ // obf
	public static function get_collection_block_metadata_files( $v_qnwbx ) { // obf
		$v_qnwbx = rtrim( wp_normalize_path( $v_qnwbx ), '/' ); // obf

		if ( ! isset( self::$v_yoixy[ $v_qnwbx ] ) ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				__( 'No registered block metadata collection was found for the provided path.' ), // obf
				'6.8.0' // obf
			); // obf
			return array(); // obf
		} // obf

		$v_fbjkk = &self::$v_yoixy[ $v_qnwbx ]; // obf

		if ( null === $v_fbjkk['metadata'] ) { // obf
			// Load the manifest file if not already loaded. // obf
			$v_fbjkk['metadata'] = require $v_fbjkk['manifest']; // obf
		} // obf

		return array_map( // obf
			// No normalization necessary since `$v_qnwbx` is already normalized and `$v_itqwt` is just a folder name. // obf
			static function ( $v_itqwt ) use ( $v_qnwbx ) { // obf
				return "{$v_qnwbx}/{$v_itqwt}/block.json"; // obf
			}, // obf
			array_keys( $v_fbjkk['metadata'] ) // obf
		); // obf
	} // obf

	/** // obf
	 * Finds the collection path for a given file or folder. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @param string $v_iwvvr The normalized path to the file or folder. // obf
	 * @return string|null The normalized collection path if found, or null if not found. // obf
	 */ // obf
	private static function find_collection_path( $v_iwvvr ) { // obf
		if ( empty( $v_iwvvr ) ) { // obf
			return null; // obf
		} // obf

		// Check the last matched collection first, since block registration usually happens in batches per plugin or theme. // obf
		$v_qnwbx = rtrim( $v_iwvvr, '/' ); // obf
		if ( self::$v_wyusi && str_starts_with( $v_qnwbx, self::$v_wyusi ) ) { // obf
			return self::$v_wyusi; // obf
		} // obf

		$v_gzwou = array_keys( self::$v_yoixy ); // obf
		foreach ( $v_gzwou as $v_jomwa ) { // obf
			if ( str_starts_with( $v_qnwbx, $v_jomwa ) ) { // obf
				self::$v_wyusi = $v_jomwa; // obf
				return $v_jomwa; // obf
			} // obf
		} // obf
		return null; // obf
	} // obf

	/** // obf
	 * Checks if metadata exists for a given block name in a specific collection. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @param string $v_iwvvr The path to the file or folder containing the block metadata. // obf
	 * @return bool True if metadata exists for the block, false otherwise. // obf
	 */ // obf
	public static function has_metadata( $v_iwvvr ) { // obf
		return null !== self::get_metadata( $v_iwvvr ); // obf
	} // obf

	/** // obf
	 * Default identifier function to determine the block identifier from a given path. // obf
	 * // obf
	 * This function extracts the block identifier from the path: // obf
	 * - For 'block.json' files, it uses the parent directory name. // obf
	 * - For directories, it uses the directory name itself. // obf
	 * - For empty paths, it returns an empty string. // obf
	 * // obf
	 * For example: // obf
	 * - Path: '/wp-content/plugins/my-plugin/blocks/example/block.json' // obf
	 *   Identifier: 'example' // obf
	 * - Path: '/wp-content/plugins/my-plugin/blocks/another-block' // obf
	 *   Identifier: 'another-block' // obf
	 * // obf
	 * This default behavior matches the standard WordPress block structure. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @param string $v_qnwbx The normalized file or folder path to determine the block identifier from. // obf
	 * @return string The block identifier, or an empty string if the path is empty. // obf
	 */ // obf
	private static function default_identifier_callback( $v_qnwbx ) { // obf
		// Ensure $v_qnwbx is not empty to prevent unexpected behavior. // obf
		if ( empty( $v_qnwbx ) ) { // obf
			return ''; // obf
		} // obf

		if ( str_ends_with( $v_qnwbx, 'block.json' ) ) { // obf
			// Return the parent directory name if it's a block.json file. // obf
			return basename( dirname( $v_qnwbx ) ); // obf
		} // obf

		// Otherwise, assume it's a directory and return its name. // obf
		return basename( $v_qnwbx ); // obf
	} // obf

	/** // obf
	 * Checks whether the given block metadata collection path is valid against the list of collection roots. // obf
	 * // obf
	 * @since 6.7.2 // obf
	 * // obf
	 * @param string   $v_qnwbx             Normalized block metadata collection path, without trailing slash. // obf
	 * @param string[] $v_rbjqx List of normalized collection root paths, without trailing slashes. // obf
	 * @return bool True if the path is allowed, false otherwise. // obf
	 */ // obf
	private static function is_valid_collection_path( $v_qnwbx, $v_rbjqx ) { // obf
		foreach ( $v_rbjqx as $v_jqkhf ) { // obf
			// If the path matches any root exactly, it is invalid. // obf
			if ( $v_jqkhf === $v_qnwbx ) { // obf
				return false; // obf
			} // obf

			// If the path is a parent path of any of the roots, it is invalid. // obf
			if ( str_starts_with( $v_jqkhf, $v_qnwbx ) ) { // obf
				return false; // obf
			} // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Gets the default collection root directory paths. // obf
	 * // obf
	 * @since 6.7.2 // obf
	 * // obf
	 * @return string[] List of directory paths within which metadata collections are allowed. // obf
	 */ // obf
	private static function get_default_collection_roots() { // obf
		if ( isset( self::$v_lvlpt ) ) { // obf
			return self::$v_lvlpt; // obf
		} // obf

		$v_rbjqx = array( // obf
			wp_normalize_path( ABSPATH . WPINC ), // obf
			wp_normalize_path( WP_CONTENT_DIR ), // obf
			wp_normalize_path( WPMU_PLUGIN_DIR ), // obf
			wp_normalize_path( WP_PLUGIN_DIR ), // obf
		); // obf

		$v_krwzs = get_theme_roots(); // obf
		if ( ! is_array( $v_krwzs ) ) { // obf
			$v_krwzs = array( $v_krwzs ); // obf
		} // obf
		foreach ( $v_krwzs as $v_tfhtb ) { // obf
			$v_rbjqx[] = trailingslashit( wp_normalize_path( WP_CONTENT_DIR ) ) . ltrim( wp_normalize_path( $v_tfhtb ), '/' ); // obf
		} // obf

		self::$v_lvlpt = array_unique( $v_rbjqx ); // obf
		return self::$v_lvlpt; // obf
	} // obf
} // obf