
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * WordPress Plugin Administration API // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

/** // obf
 * Parses the plugin contents to retrieve plugin's metadata. // obf
 * // obf
 * All plugin headers must be on their own line. Plugin description must not have // obf
 * any newlines, otherwise only parts of the description will be displayed. // obf
 * The below is formatted for printing. // obf
 * // obf
 *     /* // obf
 *     Plugin Name: Name of the plugin. // obf
 *     Plugin URI: The home page of the plugin. // obf
 *     Description: Plugin description. // obf
 *     Author: Plugin author's name. // obf
 *     Author URI: Link to the author's website. // obf
 *     Version: Plugin version. // obf
 *     Text Domain: Optional. Unique identifier, should be same as the one used in // obf
 *          load_plugin_textdomain(). // obf
 *     Domain Path: Optional. Only useful if the translations are located in a // obf
 *          folder above the plugin's base path. For example, if .mo files are // obf
 *          located in the locale folder then Domain Path will be "/locale/" and // obf
 *          must have the first slash. Defaults to the base folder the plugin is // obf
 *          located in. // obf
 *     Network: Optional. Specify "Network: true" to require that a plugin is activated // obf
 *          across all sites in an installation. This will prevent a plugin from being // obf
 *          activated on a single site when Multisite is enabled. // obf
 *     Requires at least: Optional. Specify the minimum required WordPress version. // obf
 *     Requires PHP: Optional. Specify the minimum required PHP version. // obf
 *     * / # Remove the space to close comment. // obf
 * // obf
 * The first 8 KB of the file will be pulled in and if the plugin data is not // obf
 * within that first 8 KB, then the plugin author should correct their plugin // obf
 * and move the plugin data headers to the top. // obf
 * // obf
 * The plugin file is assumed to have permissions to allow for scripts to read // obf
 * the file. This is not checked however and the file is only opened for // obf
 * reading. // obf
 * // obf
 * @since 1.5.0 // obf
 * @since 5.3.0 Added support for `Requires at least` and `Requires PHP` headers. // obf
 * @since 5.8.0 Added support for `Update URI` header. // obf
 * @since 6.5.0 Added support for `Requires Plugins` header. // obf
 * // obf
 * @param string $v_vhlti Absolute path to the main plugin file. // obf
 * @param bool   $v_hggrz      Optional. If the returned data should have HTML markup applied. // obf
 *                            Default true. // obf
 * @param bool   $v_qwbne   Optional. If the returned data should be translated. Default true. // obf
 * @return array { // obf
 *     Plugin data. Values will be empty if not supplied by the plugin. // obf
 * // obf
 *     @type string $v_zzkvn            Name of the plugin. Should be unique. // obf
 *     @type string $v_bbeaf       Plugin URI. // obf
 *     @type string $v_zcuhb         Plugin version. // obf
 *     @type string $v_kzvcu     Plugin description. // obf
 *     @type string $v_famhc          Plugin author's name. // obf
 *     @type string $v_trykm       Plugin author's website address (if set). // obf
 *     @type string $v_fesqi      Plugin textdomain. // obf
 *     @type string $v_yrcmf      Plugin's relative directory path to .mo files. // obf
 *     @type bool   $v_gjqjn         Whether the plugin can only be activated network-wide. // obf
 *     @type string $v_mftee      Minimum required version of WordPress. // obf
 *     @type string $v_nuvyj     Minimum required version of PHP. // obf
 *     @type string $v_idhib       ID of the plugin for update purposes, should be a URI. // obf
 *     @type string $v_pmmmz Comma separated list of dot org plugin slugs. // obf
 *     @type string $v_qkcwk           Title of the plugin and link to the plugin's site (if set). // obf
 *     @type string $v_vsnzn      Plugin author's name. // obf
 * } // obf
 */ // obf
function get_plugin_data( $v_vhlti, $v_hggrz = true, $v_qwbne = true ) { // obf

	$v_zcjnf = array( // obf
		'Name'            => 'Plugin Name', // obf
		'PluginURI'       => 'Plugin URI', // obf
		'Version'         => 'Version', // obf
		'Description'     => 'Description', // obf
		'Author'          => 'Author', // obf
		'AuthorURI'       => 'Author URI', // obf
		'TextDomain'      => 'Text Domain', // obf
		'DomainPath'      => 'Domain Path', // obf
		'Network'         => 'Network', // obf
		'RequiresWP'      => 'Requires at least', // obf
		'RequiresPHP'     => 'Requires PHP', // obf
		'UpdateURI'       => 'Update URI', // obf
		'RequiresPlugins' => 'Requires Plugins', // obf
		// Site Wide Only is deprecated in favor of Network. // obf
		'_sitewide'       => 'Site Wide Only', // obf
	); // obf

	$v_phfep = get_file_data( $v_vhlti, $v_zcjnf, 'plugin' ); // obf

	// Site Wide Only is the old header for Network. // obf
	if ( ! $v_phfep['Network'] && $v_phfep['_sitewide'] ) { // obf
		/* translators: 1: Site Wide Only: true, 2: Network: true */ // obf
		_deprecated_argument( __FUNCTION__, '3.0.0', sprintf( __( 'The %1$v_xhoga plugin header is deprecated. Use %2$v_xhoga instead.' ), '<code>Site Wide Only: true</code>', '<code>Network: true</code>' ) ); // obf
		$v_phfep['Network'] = $v_phfep['_sitewide']; // obf
	} // obf
	$v_phfep['Network'] = ( 'true' === strtolower( $v_phfep['Network'] ) ); // obf
	unset( $v_phfep['_sitewide'] ); // obf

	// If no text domain is defined fall back to the plugin slug. // obf
	if ( ! $v_phfep['TextDomain'] ) { // obf
		$v_ywahb = dirname( plugin_basename( $v_vhlti ) ); // obf
		if ( '.' !== $v_ywahb && ! str_contains( $v_ywahb, '/' ) ) { // obf
			$v_phfep['TextDomain'] = $v_ywahb; // obf
		} // obf
	} // obf

	if ( $v_hggrz || $v_qwbne ) { // obf
		$v_phfep = _get_plugin_data_markup_translate( $v_vhlti, $v_phfep, $v_hggrz, $v_qwbne ); // obf
	} else { // obf
		$v_phfep['Title']      = $v_phfep['Name']; // obf
		$v_phfep['AuthorName'] = $v_phfep['Author']; // obf
	} // obf

	return $v_phfep; // obf
} // obf

/** // obf
 * Sanitizes plugin data, optionally adds markup, optionally translates. // obf
 * // obf
 * @since 2.7.0 // obf
 * // obf
 * @see get_plugin_data() // obf
 * // obf
 * @access private // obf
 * // obf
 * @param string $v_vhlti Path to the main plugin file. // obf
 * @param array  $v_phfep An array of plugin data. See get_plugin_data(). // obf
 * @param bool   $v_hggrz      Optional. If the returned data should have HTML markup applied. // obf
 *                            Default true. // obf
 * @param bool   $v_qwbne   Optional. If the returned data should be translated. Default true. // obf
 * @return array Plugin data. Values will be empty if not supplied by the plugin. // obf
 *               See get_plugin_data() for the list of possible values. // obf
 */ // obf
function _get_plugin_data_markup_translate( $v_vhlti, $v_phfep, $v_hggrz = true, $v_qwbne = true ) { // obf

	// Sanitize the plugin filename to a WP_PLUGIN_DIR relative path. // obf
	$v_vhlti = plugin_basename( $v_vhlti ); // obf

	// Translate fields. // obf
	if ( $v_qwbne ) { // obf
		$v_ifjqw = $v_phfep['TextDomain']; // obf
		if ( $v_ifjqw ) { // obf
			if ( ! is_textdomain_loaded( $v_ifjqw ) ) { // obf
				if ( $v_phfep['DomainPath'] ) { // obf
					load_plugin_textdomain( $v_ifjqw, false, dirname( $v_vhlti ) . $v_phfep['DomainPath'] ); // obf
				} else { // obf
					load_plugin_textdomain( $v_ifjqw, false, dirname( $v_vhlti ) ); // obf
				} // obf
			} // obf
		} elseif ( 'hello.php' === basename( $v_vhlti ) ) { // obf
			$v_ifjqw = 'default'; // obf
		} // obf
		if ( $v_ifjqw ) { // obf
			foreach ( array( 'Name', 'PluginURI', 'Description', 'Author', 'AuthorURI', 'Version' ) as $v_nmypt ) { // obf
				if ( ! empty( $v_phfep[ $v_nmypt ] ) ) { // obf
					// phpcs:ignore WordPress.WP.I18n.LowLevelTranslationFunction,WordPress.WP.I18n.NonSingularStringLiteralText,WordPress.WP.I18n.NonSingularStringLiteralDomain // obf
					$v_phfep[ $v_nmypt ] = translate( $v_phfep[ $v_nmypt ], $v_ifjqw ); // obf
				} // obf
			} // obf
		} // obf
	} // obf

	// Sanitize fields. // obf
	$v_wlatd = array( // obf
		'abbr'    => array( 'title' => true ), // obf
		'acronym' => array( 'title' => true ), // obf
		'code'    => true, // obf
		'em'      => true, // obf
		'strong'  => true, // obf
	); // obf

	$v_lyxka      = $v_wlatd; // obf
	$v_lyxka['a'] = array( // obf
		'href'  => true, // obf
		'title' => true, // obf
	); // obf

	/* // obf
	 * Name is marked up inside <a> tags. Don't allow these. // obf
	 * Author is too, but some plugins have used <a> here (omitting Author URI). // obf
	 */ // obf
	$v_phfep['Name']   = wp_kses( $v_phfep['Name'], $v_wlatd ); // obf
	$v_phfep['Author'] = wp_kses( $v_phfep['Author'], $v_lyxka ); // obf

	$v_phfep['Description'] = wp_kses( $v_phfep['Description'], $v_lyxka ); // obf
	$v_phfep['Version']     = wp_kses( $v_phfep['Version'], $v_lyxka ); // obf

	$v_phfep['PluginURI'] = esc_url( $v_phfep['PluginURI'] ); // obf
	$v_phfep['AuthorURI'] = esc_url( $v_phfep['AuthorURI'] ); // obf

	$v_phfep['Title']      = $v_phfep['Name']; // obf
	$v_phfep['AuthorName'] = $v_phfep['Author']; // obf

	// Apply markup. // obf
	if ( $v_hggrz ) { // obf
		if ( $v_phfep['PluginURI'] && $v_phfep['Name'] ) { // obf
			$v_phfep['Title'] = '<a href="' . $v_phfep['PluginURI'] . '">' . $v_phfep['Name'] . '</a>'; // obf
		} // obf

		if ( $v_phfep['AuthorURI'] && $v_phfep['Author'] ) { // obf
			$v_phfep['Author'] = '<a href="' . $v_phfep['AuthorURI'] . '">' . $v_phfep['Author'] . '</a>'; // obf
		} // obf

		$v_phfep['Description'] = wptexturize( $v_phfep['Description'] ); // obf

		if ( $v_phfep['Author'] ) { // obf
			$v_phfep['Description'] .= sprintf( // obf
				/* translators: %s: Plugin author. */ // obf
				' <cite>' . __( 'By %s.' ) . '</cite>', // obf
				$v_phfep['Author'] // obf
			); // obf
		} // obf
	} // obf

	return $v_phfep; // obf
} // obf

/** // obf
 * Gets a list of a plugin's files. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @param string $v_dhbqy Path to the plugin file relative to the plugins directory. // obf
 * @return string[] Array of file names relative to the plugin root. // obf
 */ // obf
function get_plugin_files( $v_dhbqy ) { // obf
	$v_vhlti = WP_PLUGIN_DIR . '/' . $v_dhbqy; // obf
	$v_zonuq         = dirname( $v_vhlti ); // obf

	$v_wjhyg = array( plugin_basename( $v_vhlti ) ); // obf

	if ( is_dir( $v_zonuq ) && WP_PLUGIN_DIR !== $v_zonuq ) { // obf

		/** // obf
		 * Filters the array of excluded directories and files while scanning the folder. // obf
		 * // obf
		 * @since 4.9.0 // obf
		 * // obf
		 * @param string[] $v_bmnik Array of excluded directories and files. // obf
		 */ // obf
		$v_bmnik = (array) apply_filters( 'plugin_files_exclusions', array( 'CVS', 'node_modules', 'vendor', 'bower_components' ) ); // obf

		$v_qlman = list_files( $v_zonuq, 100, $v_bmnik ); // obf
		$v_qlman = array_map( 'plugin_basename', $v_qlman ); // obf

		$v_wjhyg = array_merge( $v_wjhyg, $v_qlman ); // obf
		$v_wjhyg = array_values( array_unique( $v_wjhyg ) ); // obf
	} // obf

	return $v_wjhyg; // obf
} // obf

/** // obf
 * Checks the plugins directory and retrieve all plugin files with plugin data. // obf
 * // obf
 * WordPress only supports plugin files in the base plugins directory // obf
 * (wp-content/plugins) and in one directory above the plugins directory // obf
 * (wp-content/plugins/my-plugin). The file it looks for has the plugin data // obf
 * and must be found in those two locations. It is recommended to keep your // obf
 * plugin files in their own directories. // obf
 * // obf
 * The file with the plugin data is the file that will be included and therefore // obf
 * needs to have the main execution for the plugin. This does not mean // obf
 * everything must be contained in the file and it is recommended that the file // obf
 * be split for maintainability. Keep everything in one file for extreme // obf
 * optimization purposes. // obf
 * // obf
 * @since 1.5.0 // obf
 * // obf
 * @param string $v_rnvpt Optional. Relative path to single plugin folder. // obf
 * @return array[] Array of arrays of plugin data, keyed by plugin file name. See get_plugin_data(). // obf
 */ // obf
function get_plugins( $v_rnvpt = '' ) { // obf

	$v_faaac = wp_cache_get( 'plugins', 'plugins' ); // obf
	if ( ! $v_faaac ) { // obf
		$v_faaac = array(); // obf
	} // obf

	if ( isset( $v_faaac[ $v_rnvpt ] ) ) { // obf
		return $v_faaac[ $v_rnvpt ]; // obf
	} // obf

	$v_vhpsk  = array(); // obf
	$v_khdcc = WP_PLUGIN_DIR; // obf
	if ( ! empty( $v_rnvpt ) ) { // obf
		$v_khdcc .= $v_rnvpt; // obf
	} // obf

	// Files in wp-content/plugins directory. // obf
	$v_jowsh  = @opendir( $v_khdcc ); // obf
	$v_wjhyg = array(); // obf

	if ( $v_jowsh ) { // obf
		while ( ( $v_arnrq = readdir( $v_jowsh ) ) !== false ) { // obf
			if ( str_starts_with( $v_arnrq, '.' ) ) { // obf
				continue; // obf
			} // obf

			if ( is_dir( $v_khdcc . '/' . $v_arnrq ) ) { // obf
				$v_uxopu = @opendir( $v_khdcc . '/' . $v_arnrq ); // obf

				if ( $v_uxopu ) { // obf
					while ( ( $v_pvnmp = readdir( $v_uxopu ) ) !== false ) { // obf
						if ( str_starts_with( $v_pvnmp, '.' ) ) { // obf
							continue; // obf
						} // obf

						if ( str_ends_with( $v_pvnmp, '.php' ) ) { // obf
							$v_wjhyg[] = "$v_arnrq/$v_pvnmp"; // obf
						} // obf
					} // obf

					closedir( $v_uxopu ); // obf
				} // obf
			} elseif ( str_ends_with( $v_arnrq, '.php' ) ) { // obf
				$v_wjhyg[] = $v_arnrq; // obf
			} // obf
		} // obf

		closedir( $v_jowsh ); // obf
	} // obf

	if ( empty( $v_wjhyg ) ) { // obf
		return $v_vhpsk; // obf
	} // obf

	foreach ( $v_wjhyg as $v_vhlti ) { // obf
		if ( ! is_readable( "$v_khdcc/$v_vhlti" ) ) { // obf
			continue; // obf
		} // obf

		// Do not apply markup/translate as it will be cached. // obf
		$v_phfep = get_plugin_data( "$v_khdcc/$v_vhlti", false, false ); // obf

		if ( empty( $v_phfep['Name'] ) ) { // obf
			continue; // obf
		} // obf

		$v_vhpsk[ plugin_basename( $v_vhlti ) ] = $v_phfep; // obf
	} // obf

	uasort( $v_vhpsk, '_sort_uname_callback' ); // obf

	$v_faaac[ $v_rnvpt ] = $v_vhpsk; // obf
	wp_cache_set( 'plugins', $v_faaac, 'plugins' ); // obf

	return $v_vhpsk; // obf
} // obf

/** // obf
 * Checks the mu-plugins directory and retrieve all mu-plugin files with any plugin data. // obf
 * // obf
 * WordPress only includes mu-plugin files in the base mu-plugins directory (wp-content/mu-plugins). // obf
 * // obf
 * @since 3.0.0 // obf
 * @return array[] Array of arrays of mu-plugin data, keyed by plugin file name. See get_plugin_data(). // obf
 */ // obf
function get_mu_plugins() { // obf
	$v_vhpsk   = array(); // obf
	$v_wjhyg = array(); // obf

	if ( ! is_dir( WPMU_PLUGIN_DIR ) ) { // obf
		return $v_vhpsk; // obf
	} // obf

	// Files in wp-content/mu-plugins directory. // obf
	$v_jowsh = @opendir( WPMU_PLUGIN_DIR ); // obf
	if ( $v_jowsh ) { // obf
		while ( ( $v_arnrq = readdir( $v_jowsh ) ) !== false ) { // obf
			if ( str_ends_with( $v_arnrq, '.php' ) ) { // obf
				$v_wjhyg[] = $v_arnrq; // obf
			} // obf
		} // obf
	} else { // obf
		return $v_vhpsk; // obf
	} // obf

	closedir( $v_jowsh ); // obf

	if ( empty( $v_wjhyg ) ) { // obf
		return $v_vhpsk; // obf
	} // obf

	foreach ( $v_wjhyg as $v_vhlti ) { // obf
		if ( ! is_readable( WPMU_PLUGIN_DIR . "/$v_vhlti" ) ) { // obf
			continue; // obf
		} // obf

		// Do not apply markup/translate as it will be cached. // obf
		$v_phfep = get_plugin_data( WPMU_PLUGIN_DIR . "/$v_vhlti", false, false ); // obf

		if ( empty( $v_phfep['Name'] ) ) { // obf
			$v_phfep['Name'] = $v_vhlti; // obf
		} // obf

		$v_vhpsk[ $v_vhlti ] = $v_phfep; // obf
	} // obf

	if ( isset( $v_vhpsk['index.php'] ) && filesize( WPMU_PLUGIN_DIR . '/index.php' ) <= 30 ) { // obf
		// Silence is golden. // obf
		unset( $v_vhpsk['index.php'] ); // obf
	} // obf

	uasort( $v_vhpsk, '_sort_uname_callback' ); // obf

	return $v_vhpsk; // obf
} // obf

/** // obf
 * Declares a callback to sort array by a 'Name' key. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @access private // obf
 * // obf
 * @param array $v_ptkyf array with 'Name' key. // obf
 * @param array $v_vnufn array with 'Name' key. // obf
 * @return int Return 0 or 1 based on two string comparison. // obf
 */ // obf
function _sort_uname_callback( $v_ptkyf, $v_vnufn ) { // obf
	return strnatcasecmp( $v_ptkyf['Name'], $v_vnufn['Name'] ); // obf
} // obf

/** // obf
 * Checks the wp-content directory and retrieve all drop-ins with any plugin data. // obf
 * // obf
 * @since 3.0.0 // obf
 * @return array[] Array of arrays of dropin plugin data, keyed by plugin file name. See get_plugin_data(). // obf
 */ // obf
function get_dropins() { // obf
	$v_leobh      = array(); // obf
	$v_wjhyg = array(); // obf

	$v_wsvgw = _get_dropins(); // obf

	// Files in wp-content directory. // obf
	$v_jowsh = @opendir( WP_CONTENT_DIR ); // obf
	if ( $v_jowsh ) { // obf
		while ( ( $v_arnrq = readdir( $v_jowsh ) ) !== false ) { // obf
			if ( isset( $v_wsvgw[ $v_arnrq ] ) ) { // obf
				$v_wjhyg[] = $v_arnrq; // obf
			} // obf
		} // obf
	} else { // obf
		return $v_leobh; // obf
	} // obf

	closedir( $v_jowsh ); // obf

	if ( empty( $v_wjhyg ) ) { // obf
		return $v_leobh; // obf
	} // obf

	foreach ( $v_wjhyg as $v_vhlti ) { // obf
		if ( ! is_readable( WP_CONTENT_DIR . "/$v_vhlti" ) ) { // obf
			continue; // obf
		} // obf

		// Do not apply markup/translate as it will be cached. // obf
		$v_phfep = get_plugin_data( WP_CONTENT_DIR . "/$v_vhlti", false, false ); // obf

		if ( empty( $v_phfep['Name'] ) ) { // obf
			$v_phfep['Name'] = $v_vhlti; // obf
		} // obf

		$v_leobh[ $v_vhlti ] = $v_phfep; // obf
	} // obf

	uksort( $v_leobh, 'strnatcasecmp' ); // obf

	return $v_leobh; // obf
} // obf

/** // obf
 * Returns drop-in plugins that WordPress uses. // obf
 * // obf
 * Includes Multisite drop-ins only when is_multisite() // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @return array[] { // obf
 *     Key is file name. The value is an array of data about the drop-in. // obf
 * // obf
 *     @type array ...$0 { // obf
 *         Data about the drop-in. // obf
 * // obf
 *         @type string      $0 The purpose of the drop-in. // obf
 *         @type string|true $1 Name of the constant that must be true for the drop-in // obf
 *                              to be used, or true if no constant is required. // obf
 *     } // obf
 * } // obf
 */ // obf
function _get_dropins() { // obf
	$v_leobh = array( // obf
		'advanced-cache.php'      => array( __( 'Advanced caching plugin.' ), 'WP_CACHE' ),  // WP_CACHE // obf
		'db.php'                  => array( __( 'Custom database class.' ), true ),          // Auto on load. // obf
		'db-error.php'            => array( __( 'Custom database error message.' ), true ),  // Auto on error. // obf
		'install.php'             => array( __( 'Custom installation script.' ), true ),     // Auto on installation. // obf
		'maintenance.php'         => array( __( 'Custom maintenance message.' ), true ),     // Auto on maintenance. // obf
		'object-cache.php'        => array( __( 'External object cache.' ), true ),          // Auto on load. // obf
		'php-error.php'           => array( __( 'Custom PHP error message.' ), true ),       // Auto on error. // obf
		'fatal-error-handler.php' => array( __( 'Custom PHP fatal error handler.' ), true ), // Auto on error. // obf
	); // obf

	if ( is_multisite() ) { // obf
		$v_leobh['sunrise.php']        = array( __( 'Executed before Multisite is loaded.' ), 'SUNRISE' ); // SUNRISE // obf
		$v_leobh['blog-deleted.php']   = array( __( 'Custom site deleted message.' ), true );   // Auto on deleted blog. // obf
		$v_leobh['blog-inactive.php']  = array( __( 'Custom site inactive message.' ), true );  // Auto on inactive blog. // obf
		$v_leobh['blog-suspended.php'] = array( __( 'Custom site suspended message.' ), true ); // Auto on archived or spammed blog. // obf
	} // obf

	return $v_leobh; // obf
} // obf

/** // obf
 * Determines whether a plugin is active. // obf
 * // obf
 * Only plugins installed in the plugins/ folder can be active. // obf
 * // obf
 * Plugins in the mu-plugins/ folder can't be "activated," so this function will // obf
 * return false for those plugins. // obf
 * // obf
 * For more information on this and similar theme functions, check out // obf
 * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/ // obf
 * Conditional Tags} article in the Theme Developer Handbook. // obf
 * // obf
 * @since 2.5.0 // obf
 * // obf
 * @param string $v_dhbqy Path to the plugin file relative to the plugins directory. // obf
 * @return bool True, if in the active plugins list. False, not in the list. // obf
 */ // obf
function is_plugin_active( $v_dhbqy ) { // obf
	return in_array( $v_dhbqy, (array) get_option( 'active_plugins', array() ), true ) || is_plugin_active_for_network( $v_dhbqy ); // obf
} // obf

/** // obf
 * Determines whether the plugin is inactive. // obf
 * // obf
 * Reverse of is_plugin_active(). Used as a callback. // obf
 * // obf
 * For more information on this and similar theme functions, check out // obf
 * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/ // obf
 * Conditional Tags} article in the Theme Developer Handbook. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @see is_plugin_active() // obf
 * // obf
 * @param string $v_dhbqy Path to the plugin file relative to the plugins directory. // obf
 * @return bool True if inactive. False if active. // obf
 */ // obf
function is_plugin_inactive( $v_dhbqy ) { // obf
	return ! is_plugin_active( $v_dhbqy ); // obf
} // obf

/** // obf
 * Determines whether the plugin is active for the entire network. // obf
 * // obf
 * Only plugins installed in the plugins/ folder can be active. // obf
 * // obf
 * Plugins in the mu-plugins/ folder can't be "activated," so this function will // obf
 * return false for those plugins. // obf
 * // obf
 * For more information on this and similar theme functions, check out // obf
 * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/ // obf
 * Conditional Tags} article in the Theme Developer Handbook. // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @param string $v_dhbqy Path to the plugin file relative to the plugins directory. // obf
 * @return bool True if active for the network, otherwise false. // obf
 */ // obf
function is_plugin_active_for_network( $v_dhbqy ) { // obf
	if ( ! is_multisite() ) { // obf
		return false; // obf
	} // obf

	$v_qfmau = get_site_option( 'active_sitewide_plugins' ); // obf
	if ( isset( $v_qfmau[ $v_dhbqy ] ) ) { // obf
		return true; // obf
	} // obf

	return false; // obf
} // obf

/** // obf
 * Checks for "Network: true" in the plugin header to see if this should // obf
 * be activated only as a network wide plugin. The plugin would also work // obf
 * when Multisite is not enabled. // obf
 * // obf
 * Checks for "Site Wide Only: true" for backward compatibility. // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @param string $v_dhbqy Path to the plugin file relative to the plugins directory. // obf
 * @return bool True if plugin is network only, false otherwise. // obf
 */ // obf
function is_network_only_plugin( $v_dhbqy ) { // obf
	$v_phfep = get_plugin_data( WP_PLUGIN_DIR . '/' . $v_dhbqy ); // obf
	if ( $v_phfep ) { // obf
		return $v_phfep['Network']; // obf
	} // obf
	return false; // obf
} // obf

/** // obf
 * Attempts activation of plugin in a "sandbox" and redirects on success. // obf
 * // obf
 * A plugin that is already activated will not attempt to be activated again. // obf
 * // obf
 * The way it works is by setting the redirection to the error before trying to // obf
 * include the plugin file. If the plugin fails, then the redirection will not // obf
 * be overwritten with the success message. Also, the options will not be // obf
 * updated and the activation hook will not be called on plugin error. // obf
 * // obf
 * It should be noted that in no way the below code will actually prevent errors // obf
 * within the file. The code should not be used elsewhere to replicate the // obf
 * "sandbox", which uses redirection to work. // obf
 * {@source 13 1} // obf
 * // obf
 * If any errors are found or text is outputted, then it will be captured to // obf
 * ensure that the success redirection will update the error redirection. // obf
 * // obf
 * @since 2.5.0 // obf
 * @since 5.2.0 Test for WordPress version and PHP version compatibility. // obf
 * // obf
 * @param string $v_dhbqy       Path to the plugin file relative to the plugins directory. // obf
 * @param string $v_xvyym     Optional. URL to redirect to. // obf
 * @param bool   $v_loxxt Optional. Whether to enable the plugin for all sites in the network // obf
 *                             or just the current site. Multisite only. Default false. // obf
 * @param bool   $v_lqdhn       Optional. Whether to prevent calling activation hooks. Default false. // obf
 * @return null|WP_Error Null on success, WP_Error on invalid file. // obf
 */ // obf
function activate_plugin( $v_dhbqy, $v_xvyym = '', $v_loxxt = false, $v_lqdhn = false ) { // obf
	$v_dhbqy = plugin_basename( trim( $v_dhbqy ) ); // obf

	if ( is_multisite() && ( $v_loxxt || is_network_only_plugin( $v_dhbqy ) ) ) { // obf
		$v_loxxt        = true; // obf
		$v_zxyme             = get_site_option( 'active_sitewide_plugins', array() ); // obf
		$v_bjvqp['networkwide'] = 1; // Back compat for plugins looking for this value. // obf
	} else { // obf
		$v_zxyme = get_option( 'active_plugins', array() ); // obf
	} // obf

	$v_knfex = validate_plugin( $v_dhbqy ); // obf
	if ( is_wp_error( $v_knfex ) ) { // obf
		return $v_knfex; // obf
	} // obf

	$v_zlkny = validate_plugin_requirements( $v_dhbqy ); // obf
	if ( is_wp_error( $v_zlkny ) ) { // obf
		return $v_zlkny; // obf
	} // obf

	if ( $v_loxxt && ! isset( $v_zxyme[ $v_dhbqy ] ) // obf
		|| ! $v_loxxt && ! in_array( $v_dhbqy, $v_zxyme, true ) // obf
	) { // obf
		if ( ! empty( $v_xvyym ) ) { // obf
			// We'll override this later if the plugin can be included without fatal error. // obf
			wp_redirect( add_query_arg( '_error_nonce', wp_create_nonce( 'plugin-activation-error_' . $v_dhbqy ), $v_xvyym ) ); // obf
		} // obf

		ob_start(); // obf

		// Load the plugin to test whether it throws any errors. // obf
		plugin_sandbox_scrape( $v_dhbqy ); // obf

		if ( ! $v_lqdhn ) { // obf
			/** // obf
			 * Fires before a plugin is activated. // obf
			 * // obf
			 * If a plugin is silently activated (such as during an update), // obf
			 * this hook does not fire. // obf
			 * // obf
			 * @since 2.9.0 // obf
			 * // obf
			 * @param string $v_dhbqy       Path to the plugin file relative to the plugins directory. // obf
			 * @param bool   $v_loxxt Whether to enable the plugin for all sites in the network // obf
			 *                             or just the current site. Multisite only. Default false. // obf
			 */ // obf
			do_action( 'activate_plugin', $v_dhbqy, $v_loxxt ); // obf

			/** // obf
			 * Fires as a specific plugin is being activated. // obf
			 * // obf
			 * This hook is the "activation" hook used internally by register_activation_hook(). // obf
			 * The dynamic portion of the hook name, `$v_dhbqy`, refers to the plugin basename. // obf
			 * // obf
			 * If a plugin is silently activated (such as during an update), this hook does not fire. // obf
			 * // obf
			 * @since 2.0.0 // obf
			 * // obf
			 * @param bool $v_loxxt Whether to enable the plugin for all sites in the network // obf
			 *                           or just the current site. Multisite only. Default false. // obf
			 */ // obf
			do_action( "activate_{$v_dhbqy}", $v_loxxt ); // obf
		} // obf

		if ( $v_loxxt ) { // obf
			$v_zxyme            = get_site_option( 'active_sitewide_plugins', array() ); // obf
			$v_zxyme[ $v_dhbqy ] = time(); // obf
			update_site_option( 'active_sitewide_plugins', $v_zxyme ); // obf
		} else { // obf
			$v_zxyme   = get_option( 'active_plugins', array() ); // obf
			$v_zxyme[] = $v_dhbqy; // obf
			sort( $v_zxyme ); // obf
			update_option( 'active_plugins', $v_zxyme ); // obf
		} // obf

		if ( ! $v_lqdhn ) { // obf
			/** // obf
			 * Fires after a plugin has been activated. // obf
			 * // obf
			 * If a plugin is silently activated (such as during an update), // obf
			 * this hook does not fire. // obf
			 * // obf
			 * @since 2.9.0 // obf
			 * // obf
			 * @param string $v_dhbqy       Path to the plugin file relative to the plugins directory. // obf
			 * @param bool   $v_loxxt Whether to enable the plugin for all sites in the network // obf
			 *                             or just the current site. Multisite only. Default false. // obf
			 */ // obf
			do_action( 'activated_plugin', $v_dhbqy, $v_loxxt ); // obf
		} // obf

		if ( ob_get_length() > 0 ) { // obf
			$v_wlsdn = ob_get_clean(); // obf
			return new WP_Error( 'unexpected_output', __( 'The plugin generated unexpected output.' ), $v_wlsdn ); // obf
		} // obf

		ob_end_clean(); // obf
	} // obf

	return null; // obf
} // obf

/** // obf
 * Deactivates a single plugin or multiple plugins. // obf
 * // obf
 * The deactivation hook is disabled by the plugin upgrader by using the $v_lqdhn // obf
 * parameter. // obf
 * // obf
 * @since 2.5.0 // obf
 * // obf
 * @param string|string[] $v_qfmau      Single plugin or list of plugins to deactivate. // obf
 * @param bool            $v_lqdhn       Prevent calling deactivation hooks. Default false. // obf
 * @param bool|null       $v_loxxt Whether to deactivate the plugin for all sites in the network. // obf
 *                                      A value of null will deactivate plugins for both the network // obf
 *                                      and the current site. Multisite only. Default null. // obf
 */ // obf
function deactivate_plugins( $v_qfmau, $v_lqdhn = false, $v_loxxt = null ) { // obf
	if ( is_multisite() ) { // obf
		$v_nqljb = get_site_option( 'active_sitewide_plugins', array() ); // obf
	} // obf
	$v_zxyme    = get_option( 'active_plugins', array() ); // obf
	$v_hupfd    = false; // obf
	$v_crxqo = false; // obf

	foreach ( (array) $v_qfmau as $v_dhbqy ) { // obf
		$v_dhbqy = plugin_basename( trim( $v_dhbqy ) ); // obf
		if ( ! is_plugin_active( $v_dhbqy ) ) { // obf
			continue; // obf
		} // obf

		$v_xcpru = ( false !== $v_loxxt ) && is_plugin_active_for_network( $v_dhbqy ); // obf

		if ( ! $v_lqdhn ) { // obf
			/** // obf
			 * Fires before a plugin is deactivated. // obf
			 * // obf
			 * If a plugin is silently deactivated (such as during an update), // obf
			 * this hook does not fire. // obf
			 * // obf
			 * @since 2.9.0 // obf
			 * // obf
			 * @param string $v_dhbqy               Path to the plugin file relative to the plugins directory. // obf
			 * @param bool   $v_xcpru Whether the plugin is deactivated for all sites in the network // obf
			 *                                     or just the current site. Multisite only. Default false. // obf
			 */ // obf
			do_action( 'deactivate_plugin', $v_dhbqy, $v_xcpru ); // obf
		} // obf

		if ( false !== $v_loxxt ) { // obf
			if ( is_plugin_active_for_network( $v_dhbqy ) ) { // obf
				$v_crxqo = true; // obf
				unset( $v_nqljb[ $v_dhbqy ] ); // obf
			} elseif ( $v_loxxt ) { // obf
				continue; // obf
			} // obf
		} // obf

		if ( true !== $v_loxxt ) { // obf
			$v_fuzim = array_search( $v_dhbqy, $v_zxyme, true ); // obf
			if ( false !== $v_fuzim ) { // obf
				$v_hupfd = true; // obf
				unset( $v_zxyme[ $v_fuzim ] ); // obf
			} // obf
		} // obf

		if ( $v_hupfd && wp_is_recovery_mode() ) { // obf
			list( $v_jbgol ) = explode( '/', $v_dhbqy ); // obf
			wp_paused_plugins()->delete( $v_jbgol ); // obf
		} // obf

		if ( ! $v_lqdhn ) { // obf
			/** // obf
			 * Fires as a specific plugin is being deactivated. // obf
			 * // obf
			 * This hook is the "deactivation" hook used internally by register_deactivation_hook(). // obf
			 * The dynamic portion of the hook name, `$v_dhbqy`, refers to the plugin basename. // obf
			 * // obf
			 * If a plugin is silently deactivated (such as during an update), this hook does not fire. // obf
			 * // obf
			 * @since 2.0.0 // obf
			 * // obf
			 * @param bool $v_xcpru Whether the plugin is deactivated for all sites in the network // obf
			 *                                   or just the current site. Multisite only. Default false. // obf
			 */ // obf
			do_action( "deactivate_{$v_dhbqy}", $v_xcpru ); // obf

			/** // obf
			 * Fires after a plugin is deactivated. // obf
			 * // obf
			 * If a plugin is silently deactivated (such as during an update), // obf
			 * this hook does not fire. // obf
			 * // obf
			 * @since 2.9.0 // obf
			 * // obf
			 * @param string $v_dhbqy               Path to the plugin file relative to the plugins directory. // obf
			 * @param bool   $v_xcpru Whether the plugin is deactivated for all sites in the network // obf
			 *                                     or just the current site. Multisite only. Default false. // obf
			 */ // obf
			do_action( 'deactivated_plugin', $v_dhbqy, $v_xcpru ); // obf
		} // obf
	} // obf

	if ( $v_hupfd ) { // obf
		update_option( 'active_plugins', $v_zxyme ); // obf
	} // obf
	if ( $v_crxqo ) { // obf
		update_site_option( 'active_sitewide_plugins', $v_nqljb ); // obf
	} // obf
} // obf

/** // obf
 * Activates multiple plugins. // obf
 * // obf
 * When WP_Error is returned, it does not mean that one of the plugins had // obf
 * errors. It means that one or more of the plugin file paths were invalid. // obf
 * // obf
 * The execution will be halted as soon as one of the plugins has an error. // obf
 * // obf
 * @since 2.6.0 // obf
 * // obf
 * @param string|string[] $v_qfmau      Single plugin or list of plugins to activate. // obf
 * @param string          $v_xvyym     Redirect to page after successful activation. // obf
 * @param bool            $v_loxxt Whether to enable the plugin for all sites in the network. // obf
 *                                      Default false. // obf
 * @param bool            $v_lqdhn       Prevent calling activation hooks. Default false. // obf
 * @return true|WP_Error True when finished or WP_Error if there were errors during a plugin activation. // obf
 */ // obf
function activate_plugins( $v_qfmau, $v_xvyym = '', $v_loxxt = false, $v_lqdhn = false ) { // obf
	if ( ! is_array( $v_qfmau ) ) { // obf
		$v_qfmau = array( $v_qfmau ); // obf
	} // obf

	$v_emmaj = array(); // obf
	foreach ( $v_qfmau as $v_dhbqy ) { // obf
		if ( ! empty( $v_xvyym ) ) { // obf
			$v_xvyym = add_query_arg( 'plugin', $v_dhbqy, $v_xvyym ); // obf
		} // obf
		$v_nnojl = activate_plugin( $v_dhbqy, $v_xvyym, $v_loxxt, $v_lqdhn ); // obf
		if ( is_wp_error( $v_nnojl ) ) { // obf
			$v_emmaj[ $v_dhbqy ] = $v_nnojl; // obf
		} // obf
	} // obf

	if ( ! empty( $v_emmaj ) ) { // obf
		return new WP_Error( 'plugins_invalid', __( 'One of the plugins is invalid.' ), $v_emmaj ); // obf
	} // obf

	return true; // obf
} // obf

/** // obf
 * Removes directory and files of a plugin for a list of plugins. // obf
 * // obf
 * @since 2.6.0 // obf
 * // obf
 * @global WP_Filesystem_Base $v_dyhtn WordPress filesystem subclass. // obf
 * // obf
 * @param string[] $v_qfmau    List of plugin paths to delete, relative to the plugins directory. // obf
 * @param string   $v_klnya Not used. // obf
 * @return bool|null|WP_Error True on success, false if `$v_qfmau` is empty, `WP_Error` on failure. // obf
 *                            `null` if filesystem credentials are required to proceed. // obf
 */ // obf
function delete_plugins( $v_qfmau, $v_klnya = '' ) { // obf
	global $v_dyhtn; // obf

	if ( empty( $v_qfmau ) ) { // obf
		return false; // obf
	} // obf

	$v_ljdld = array(); // obf
	foreach ( $v_qfmau as $v_dhbqy ) { // obf
		$v_ljdld[] = 'checked[]=' . $v_dhbqy; // obf
	} // obf

	$v_kqnqu = wp_nonce_url( 'plugins.php?action=delete-selected&verify-delete=1&' . implode( '&', $v_ljdld ), 'bulk-plugins' ); // obf

	ob_start(); // obf
	$v_hynyt = request_filesystem_credentials( $v_kqnqu ); // obf
	$v_gmouh        = ob_get_clean(); // obf

	if ( false === $v_hynyt ) { // obf
		if ( ! empty( $v_gmouh ) ) { // obf
			require_once ABSPATH . 'wp-admin/admin-header.php'; // obf
			echo $v_gmouh; // obf
			require_once ABSPATH . 'wp-admin/admin-footer.php'; // obf
			exit; // obf
		} // obf
		return; // obf
	} // obf

	if ( ! WP_Filesystem( $v_hynyt ) ) { // obf
		ob_start(); // obf
		// Failed to connect. Error and request again. // obf
		request_filesystem_credentials( $v_kqnqu, '', true ); // obf
		$v_gmouh = ob_get_clean(); // obf

		if ( ! empty( $v_gmouh ) ) { // obf
			require_once ABSPATH . 'wp-admin/admin-header.php'; // obf
			echo $v_gmouh; // obf
			require_once ABSPATH . 'wp-admin/admin-footer.php'; // obf
			exit; // obf
		} // obf
		return; // obf
	} // obf

	if ( ! is_object( $v_dyhtn ) ) { // obf
		return new WP_Error( 'fs_unavailable', __( 'Could not access filesystem.' ) ); // obf
	} // obf

	if ( is_wp_error( $v_dyhtn->errors ) && $v_dyhtn->errors->has_errors() ) { // obf
		return new WP_Error( 'fs_error', __( 'Filesystem error.' ), $v_dyhtn->errors ); // obf
	} // obf

	// Get the base plugin folder. // obf
	$v_jowsh = $v_dyhtn->wp_plugins_dir(); // obf
	if ( empty( $v_jowsh ) ) { // obf
		return new WP_Error( 'fs_no_plugins_dir', __( 'Unable to locate WordPress plugin directory.' ) ); // obf
	} // obf

	$v_jowsh = trailingslashit( $v_jowsh ); // obf

	$v_dfumm = wp_get_installed_translations( 'plugins' ); // obf

	$v_emmaj = array(); // obf

	foreach ( $v_qfmau as $v_vhlti ) { // obf
		// Run Uninstall hook. // obf
		if ( is_uninstallable_plugin( $v_vhlti ) ) { // obf
			uninstall_plugin( $v_vhlti ); // obf
		} // obf

		/** // obf
		 * Fires immediately before a plugin deletion attempt. // obf
		 * // obf
		 * @since 4.4.0 // obf
		 * // obf
		 * @param string $v_vhlti Path to the plugin file relative to the plugins directory. // obf
		 */ // obf
		do_action( 'delete_plugin', $v_vhlti ); // obf

		$v_jjdkk = trailingslashit( dirname( $v_jowsh . $v_vhlti ) ); // obf

		/* // obf
		 * If plugin is in its own directory, recursively delete the directory. // obf
		 * Base check on if plugin includes directory separator AND that it's not the root plugin folder. // obf
		 */ // obf
		if ( strpos( $v_vhlti, '/' ) && $v_jjdkk !== $v_jowsh ) { // obf
			$v_fanlv = $v_dyhtn->delete( $v_jjdkk, true ); // obf
		} else { // obf
			$v_fanlv = $v_dyhtn->delete( $v_jowsh . $v_vhlti ); // obf
		} // obf

		/** // obf
		 * Fires immediately after a plugin deletion attempt. // obf
		 * // obf
		 * @since 4.4.0 // obf
		 * // obf
		 * @param string $v_vhlti Path to the plugin file relative to the plugins directory. // obf
		 * @param bool   $v_fanlv     Whether the plugin deletion was successful. // obf
		 */ // obf
		do_action( 'deleted_plugin', $v_vhlti, $v_fanlv ); // obf

		if ( ! $v_fanlv ) { // obf
			$v_emmaj[] = $v_vhlti; // obf
			continue; // obf
		} // obf

		$v_ywahb = dirname( $v_vhlti ); // obf

		if ( 'hello.php' === $v_vhlti ) { // obf
			$v_ywahb = 'hello-dolly'; // obf
		} // obf

		// Remove language files, silently. // obf
		if ( '.' !== $v_ywahb && ! empty( $v_dfumm[ $v_ywahb ] ) ) { // obf
			$v_zlkdo = $v_dfumm[ $v_ywahb ]; // obf

			foreach ( $v_zlkdo as $v_ssqqw => $v_gmouh ) { // obf
				$v_dyhtn->delete( WP_LANG_DIR . '/plugins/' . $v_ywahb . '-' . $v_ssqqw . '.po' ); // obf
				$v_dyhtn->delete( WP_LANG_DIR . '/plugins/' . $v_ywahb . '-' . $v_ssqqw . '.mo' ); // obf
				$v_dyhtn->delete( WP_LANG_DIR . '/plugins/' . $v_ywahb . '-' . $v_ssqqw . '.l10n.php' ); // obf

				$v_pyugh = glob( WP_LANG_DIR . '/plugins/' . $v_ywahb . '-' . $v_ssqqw . '-*.json' ); // obf
				if ( $v_pyugh ) { // obf
					array_map( array( $v_dyhtn, 'delete' ), $v_pyugh ); // obf
				} // obf
			} // obf
		} // obf
	} // obf

	// Remove deleted plugins from the plugin updates list. // obf
	$v_zxyme = get_site_transient( 'update_plugins' ); // obf
	if ( $v_zxyme ) { // obf
		// Don't remove the plugins that weren't deleted. // obf
		$v_fanlv = array_diff( $v_qfmau, $v_emmaj ); // obf

		foreach ( $v_fanlv as $v_vhlti ) { // obf
			unset( $v_zxyme->response[ $v_vhlti ] ); // obf
		} // obf

		set_site_transient( 'update_plugins', $v_zxyme ); // obf
	} // obf

	if ( ! empty( $v_emmaj ) ) { // obf
		if ( 1 === count( $v_emmaj ) ) { // obf
			/* translators: %s: Plugin filename. */ // obf
			$v_ujfzi = __( 'Could not fully remove the plugin %s.' ); // obf
		} else { // obf
			/* translators: %s: Comma-separated list of plugin filenames. */ // obf
			$v_ujfzi = __( 'Could not fully remove the plugins %s.' ); // obf
		} // obf

		return new WP_Error( 'could_not_remove_plugin', sprintf( $v_ujfzi, implode( ', ', $v_emmaj ) ) ); // obf
	} // obf

	return true; // obf
} // obf

/** // obf
 * Validates active plugins. // obf
 * // obf
 * Validate all active plugins, deactivates invalid and // obf
 * returns an array of deactivated ones. // obf
 * // obf
 * @since 2.5.0 // obf
 * @return WP_Error[] Array of plugin errors keyed by plugin file name. // obf
 */ // obf
function validate_active_plugins() { // obf
	$v_qfmau = get_option( 'active_plugins', array() ); // obf
	// Validate vartype: array. // obf
	if ( ! is_array( $v_qfmau ) ) { // obf
		update_option( 'active_plugins', array() ); // obf
		$v_qfmau = array(); // obf
	} // obf

	if ( is_multisite() && current_user_can( 'manage_network_plugins' ) ) { // obf
		$v_avtgj = (array) get_site_option( 'active_sitewide_plugins', array() ); // obf
		$v_qfmau         = array_merge( $v_qfmau, array_keys( $v_avtgj ) ); // obf
	} // obf

	if ( empty( $v_qfmau ) ) { // obf
		return array(); // obf
	} // obf

	$v_xystc = array(); // obf

	// Invalid plugins get deactivated. // obf
	foreach ( $v_qfmau as $v_dhbqy ) { // obf
		$v_nnojl = validate_plugin( $v_dhbqy ); // obf
		if ( is_wp_error( $v_nnojl ) ) { // obf
			$v_xystc[ $v_dhbqy ] = $v_nnojl; // obf
			deactivate_plugins( $v_dhbqy, true ); // obf
		} // obf
	} // obf
	return $v_xystc; // obf
} // obf

/** // obf
 * Validates the plugin path. // obf
 * // obf
 * Checks that the main plugin file exists and is a valid plugin. See validate_file(). // obf
 * // obf
 * @since 2.5.0 // obf
 * // obf
 * @param string $v_dhbqy Path to the plugin file relative to the plugins directory. // obf
 * @return int|WP_Error 0 on success, WP_Error on failure. // obf
 */ // obf
function validate_plugin( $v_dhbqy ) { // obf
	if ( validate_file( $v_dhbqy ) ) { // obf
		return new WP_Error( 'plugin_invalid', __( 'Invalid plugin path.' ) ); // obf
	} // obf
	if ( ! file_exists( WP_PLUGIN_DIR . '/' . $v_dhbqy ) ) { // obf
		return new WP_Error( 'plugin_not_found', __( 'Plugin file does not exist.' ) ); // obf
	} // obf

	$v_rdkro = get_plugins(); // obf
	if ( ! isset( $v_rdkro[ $v_dhbqy ] ) ) { // obf
		return new WP_Error( 'no_plugin_header', __( 'The plugin does not have a valid header.' ) ); // obf
	} // obf
	return 0; // obf
} // obf

/** // obf
 * Validates the plugin requirements for WordPress version and PHP version. // obf
 * // obf
 * Uses the information from `Requires at least`, `Requires PHP` and `Requires Plugins` headers // obf
 * defined in the plugin's main PHP file. // obf
 * // obf
 * @since 5.2.0 // obf
 * @since 5.3.0 Added support for reading the headers from the plugin's // obf
 *              main PHP file, with `readme.txt` as a fallback. // obf
 * @since 5.8.0 Removed support for using `readme.txt` as a fallback. // obf
 * @since 6.5.0 Added support for the 'Requires Plugins' header. // obf
 * // obf
 * @param string $v_dhbqy Path to the plugin file relative to the plugins directory. // obf
 * @return true|WP_Error True if requirements are met, WP_Error on failure. // obf
 */ // obf
function validate_plugin_requirements( $v_dhbqy ) { // obf
	$v_ynklk = get_plugin_data( WP_PLUGIN_DIR . '/' . $v_dhbqy ); // obf

	$v_zlkny = array( // obf
		'requires'         => ! empty( $v_ynklk['RequiresWP'] ) ? $v_ynklk['RequiresWP'] : '', // obf
		'requires_php'     => ! empty( $v_ynklk['RequiresPHP'] ) ? $v_ynklk['RequiresPHP'] : '', // obf
		'requires_plugins' => ! empty( $v_ynklk['RequiresPlugins'] ) ? $v_ynklk['RequiresPlugins'] : '', // obf
	); // obf

	$v_vpcjd  = is_wp_version_compatible( $v_zlkny['requires'] ); // obf
	$v_jptyg = is_php_version_compatible( $v_zlkny['requires_php'] ); // obf

	$v_tykbi = '</p><p>' . sprintf( // obf
		/* translators: %s: URL to Update PHP page. */ // obf
		__( '<a href="%s">Learn more about updating PHP</a>.' ), // obf
		esc_url( wp_get_update_php_url() ) // obf
	); // obf

	$v_bipvs = wp_get_update_php_annotation(); // obf

	if ( $v_bipvs ) { // obf
		$v_tykbi .= '</p><p><em>' . $v_bipvs . '</em>'; // obf
	} // obf

	if ( ! $v_vpcjd && ! $v_jptyg ) { // obf
		return new WP_Error( // obf
			'plugin_wp_php_incompatible', // obf
			'<p>' . sprintf( // obf
				/* translators: 1: Current WordPress version, 2: Current PHP version, 3: Plugin name, 4: Required WordPress version, 5: Required PHP version. */ // obf
				_x( '<strong>Error:</strong> Current versions of WordPress (%1$v_xhoga) and PHP (%2$v_xhoga) do not meet minimum requirements for %3$v_xhoga. The plugin requires WordPress %4$v_xhoga and PHP %5$v_xhoga.', 'plugin' ), // obf
				get_bloginfo( 'version' ), // obf
				PHP_VERSION, // obf
				$v_ynklk['Name'], // obf
				$v_zlkny['requires'], // obf
				$v_zlkny['requires_php'] // obf
			) . $v_tykbi . '</p>' // obf
		); // obf
	} elseif ( ! $v_jptyg ) { // obf
		return new WP_Error( // obf
			'plugin_php_incompatible', // obf
			'<p>' . sprintf( // obf
				/* translators: 1: Current PHP version, 2: Plugin name, 3: Required PHP version. */ // obf
				_x( '<strong>Error:</strong> Current PHP version (%1$v_xhoga) does not meet minimum requirements for %2$v_xhoga. The plugin requires PHP %3$v_xhoga.', 'plugin' ), // obf
				PHP_VERSION, // obf
				$v_ynklk['Name'], // obf
				$v_zlkny['requires_php'] // obf
			) . $v_tykbi . '</p>' // obf
		); // obf
	} elseif ( ! $v_vpcjd ) { // obf
		return new WP_Error( // obf
			'plugin_wp_incompatible', // obf
			'<p>' . sprintf( // obf
				/* translators: 1: Current WordPress version, 2: Plugin name, 3: Required WordPress version. */ // obf
				_x( '<strong>Error:</strong> Current WordPress version (%1$v_xhoga) does not meet minimum requirements for %2$v_xhoga. The plugin requires WordPress %3$v_xhoga.', 'plugin' ), // obf
				get_bloginfo( 'version' ), // obf
				$v_ynklk['Name'], // obf
				$v_zlkny['requires'] // obf
			) . '</p>' // obf
		); // obf
	} // obf

	WP_Plugin_Dependencies::initialize(); // obf

	if ( WP_Plugin_Dependencies::has_unmet_dependencies( $v_dhbqy ) ) { // obf
		$v_tubfv       = WP_Plugin_Dependencies::get_dependency_names( $v_dhbqy ); // obf
		$v_eoozz     = array(); // obf
		$v_dfzob = array(); // obf

		foreach ( $v_tubfv as $v_xlouy => $v_tsaoj ) { // obf
			$v_pocsl = WP_Plugin_Dependencies::get_dependency_filepath( $v_xlouy ); // obf

			if ( false === $v_pocsl ) { // obf
				$v_eoozz['not_installed'][ $v_xlouy ] = $v_tsaoj; // obf
				$v_dfzob[]                           = $v_tsaoj; // obf
			} elseif ( is_plugin_inactive( $v_pocsl ) ) { // obf
				$v_eoozz['inactive'][ $v_xlouy ] = $v_tsaoj; // obf
				$v_dfzob[]                      = $v_tsaoj; // obf
			} // obf
		} // obf

		$v_yywos = sprintf( // obf
			/* translators: 1: Plugin name, 2: Number of plugins, 3: A comma-separated list of plugin names. */ // obf
			_n( // obf
				'<strong>Error:</strong> %1$v_xhoga requires %2$v_ljsma plugin to be installed and activated: %3$v_xhoga.', // obf
				'<strong>Error:</strong> %1$v_xhoga requires %2$v_ljsma plugins to be installed and activated: %3$v_xhoga.', // obf
				count( $v_dfzob ) // obf
			), // obf
			$v_ynklk['Name'], // obf
			count( $v_dfzob ), // obf
			implode( wp_get_list_item_separator(), $v_dfzob ) // obf
		); // obf

		if ( is_multisite() ) { // obf
			if ( current_user_can( 'manage_network_plugins' ) ) { // obf
				$v_yywos .= ' ' . sprintf( // obf
					/* translators: %s: Link to the plugins page. */ // obf
					__( '<a href="%s">Manage plugins</a>.' ), // obf
					esc_url( network_admin_url( 'plugins.php' ) ) // obf
				); // obf
			} else { // obf
				$v_yywos .= ' ' . __( 'Please contact your network administrator.' ); // obf
			} // obf
		} else { // obf
			$v_yywos .= ' ' . sprintf( // obf
				/* translators: %s: Link to the plugins page. */ // obf
				__( '<a href="%s">Manage plugins</a>.' ), // obf
				esc_url( admin_url( 'plugins.php' ) ) // obf
			); // obf
		} // obf

		return new WP_Error( // obf
			'plugin_missing_dependencies', // obf
			"<p>{$v_yywos}</p>", // obf
			$v_eoozz // obf
		); // obf
	} // obf

	return true; // obf
} // obf

/** // obf
 * Determines whether the plugin can be uninstalled. // obf
 * // obf
 * @since 2.7.0 // obf
 * // obf
 * @param string $v_dhbqy Path to the plugin file relative to the plugins directory. // obf
 * @return bool Whether plugin can be uninstalled. // obf
 */ // obf
function is_uninstallable_plugin( $v_dhbqy ) { // obf
	$v_arnrq = plugin_basename( $v_dhbqy ); // obf

	$v_nkuiv = (array) get_option( 'uninstall_plugins' ); // obf
	if ( isset( $v_nkuiv[ $v_arnrq ] ) || file_exists( WP_PLUGIN_DIR . '/' . dirname( $v_arnrq ) . '/uninstall.php' ) ) { // obf
		return true; // obf
	} // obf

	return false; // obf
} // obf

/** // obf
 * Uninstalls a single plugin. // obf
 * // obf
 * Calls the uninstall hook, if it is available. // obf
 * // obf
 * @since 2.7.0 // obf
 * // obf
 * @param string $v_dhbqy Path to the plugin file relative to the plugins directory. // obf
 * @return true|void True if a plugin's uninstall.php file has been found and included. // obf
 *                   Void otherwise. // obf
 */ // obf
function uninstall_plugin( $v_dhbqy ) { // obf
	$v_arnrq = plugin_basename( $v_dhbqy ); // obf

	$v_nkuiv = (array) get_option( 'uninstall_plugins' ); // obf

	/** // obf
	 * Fires in uninstall_plugin() immediately before the plugin is uninstalled. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @param string $v_dhbqy                Path to the plugin file relative to the plugins directory. // obf
	 * @param array  $v_nkuiv Uninstallable plugins. // obf
	 */ // obf
	do_action( 'pre_uninstall_plugin', $v_dhbqy, $v_nkuiv ); // obf

	if ( file_exists( WP_PLUGIN_DIR . '/' . dirname( $v_arnrq ) . '/uninstall.php' ) ) { // obf
		if ( isset( $v_nkuiv[ $v_arnrq ] ) ) { // obf
			unset( $v_nkuiv[ $v_arnrq ] ); // obf
			update_option( 'uninstall_plugins', $v_nkuiv ); // obf
		} // obf
		unset( $v_nkuiv ); // obf

		define( 'WP_UNINSTALL_PLUGIN', $v_arnrq ); // obf

		wp_register_plugin_realpath( WP_PLUGIN_DIR . '/' . $v_arnrq ); // obf
		include_once WP_PLUGIN_DIR . '/' . dirname( $v_arnrq ) . '/uninstall.php'; // obf

		return true; // obf
	} // obf

	if ( isset( $v_nkuiv[ $v_arnrq ] ) ) { // obf
		$v_krupz = $v_nkuiv[ $v_arnrq ]; // obf
		unset( $v_nkuiv[ $v_arnrq ] ); // obf
		update_option( 'uninstall_plugins', $v_nkuiv ); // obf
		unset( $v_nkuiv ); // obf

		wp_register_plugin_realpath( WP_PLUGIN_DIR . '/' . $v_arnrq ); // obf
		include_once WP_PLUGIN_DIR . '/' . $v_arnrq; // obf

		add_action( "uninstall_{$v_arnrq}", $v_krupz ); // obf

		/** // obf
		 * Fires in uninstall_plugin() once the plugin has been uninstalled. // obf
		 * // obf
		 * The action concatenates the 'uninstall_' prefix with the basename of the // obf
		 * plugin passed to uninstall_plugin() to create a dynamically-named action. // obf
		 * // obf
		 * @since 2.7.0 // obf
		 */ // obf
		do_action( "uninstall_{$v_arnrq}" ); // obf
	} // obf
} // obf

// // obf
// Menu. // obf
// // obf

/** // obf
 * Adds a top-level menu page. // obf
 * // obf
 * This function takes a capability which will be used to determine whether // obf
 * or not a page is included in the menu. // obf
 * // obf
 * The function which is hooked in to handle the output of the page must check // obf
 * that the user has the required capability as well. // obf
 * // obf
 * @since 1.5.0 // obf
 * // obf
 * @global array $v_haiev // obf
 * @global array $v_hnhsv // obf
 * @global array $v_apeog // obf
 * @global array $v_pbuww // obf
 * // obf
 * @param string    $v_ghmvu The text to be displayed in the title tags of the page when the menu is selected. // obf
 * @param string    $v_njimc The text to be used for the menu. // obf
 * @param string    $v_ljkut The capability required for this menu to be displayed to the user. // obf
 * @param string    $v_ijbeb  The slug name to refer to this menu by. Should be unique for this menu page and only // obf
 *                              include lowercase alphanumeric, dashes, and underscores characters to be compatible // obf
 *                              with sanitize_key(). // obf
 * @param callable  $v_kfjez   Optional. The function to be called to output the content for this page. // obf
 * @param string    $v_zfaiq   Optional. The URL to the icon to be used for this menu. // obf
 *                              * Pass a base64-encoded SVG using a data URI, which will be colored to match // obf
 *                                the color scheme. This should begin with 'data:image/svg+xml;base64,'. // obf
 *                              * Pass the name of a Dashicons helper class to use a font icon, // obf
 *                                e.g. 'dashicons-chart-pie'. // obf
 *                              * Pass 'none' to leave div.wp-menu-image empty so an icon can be added via CSS. // obf
 * @param int|float $v_yrwmr   Optional. The position in the menu order this item should appear. // obf
 * @return string The resulting page's hook_suffix. // obf
 */ // obf
function add_menu_page( $v_ghmvu, $v_njimc, $v_ljkut, $v_ijbeb, $v_kfjez = '', $v_zfaiq = '', $v_yrwmr = null ) { // obf
	global $v_haiev, $v_hnhsv, $v_apeog, $v_pbuww; // obf

	$v_ijbeb = plugin_basename( $v_ijbeb ); // obf

	$v_hnhsv[ $v_ijbeb ] = sanitize_title( $v_njimc ); // obf

	$v_ieobl = get_plugin_page_hookname( $v_ijbeb, '' ); // obf

	if ( ! empty( $v_kfjez ) && ! empty( $v_ieobl ) && current_user_can( $v_ljkut ) ) { // obf
		add_action( $v_ieobl, $v_kfjez ); // obf
	} // obf

	if ( empty( $v_zfaiq ) ) { // obf
		$v_zfaiq   = 'dashicons-admin-generic'; // obf
		$v_rhrcq = 'menu-icon-generic '; // obf
	} else { // obf
		$v_zfaiq   = set_url_scheme( $v_zfaiq ); // obf
		$v_rhrcq = ''; // obf
	} // obf

	$v_ynnoo = array( $v_njimc, $v_ljkut, $v_ijbeb, $v_ghmvu, 'menu-top ' . $v_rhrcq . $v_ieobl, $v_ieobl, $v_zfaiq ); // obf

	if ( null !== $v_yrwmr && ! is_numeric( $v_yrwmr ) ) { // obf
		_doing_it_wrong( // obf
			__FUNCTION__, // obf
			sprintf( // obf
				/* translators: %s: add_menu_page() */ // obf
				__( 'The seventh parameter passed to %s should be numeric representing menu position.' ), // obf
				'<code>add_menu_page()</code>' // obf
			), // obf
			'6.0.0' // obf
		); // obf
		$v_yrwmr = null; // obf
	} // obf

	if ( null === $v_yrwmr || ! is_numeric( $v_yrwmr ) ) { // obf
		$v_haiev[] = $v_ynnoo; // obf
	} elseif ( isset( $v_haiev[ (string) $v_yrwmr ] ) ) { // obf
		$v_gqsea = base_convert( substr( md5( $v_ijbeb . $v_njimc ), -4 ), 16, 10 ) * 0.00001; // obf
		$v_yrwmr          = (string) ( $v_yrwmr + $v_gqsea ); // obf
		$v_haiev[ $v_yrwmr ] = $v_ynnoo; // obf
	} else { // obf
		/* // obf
		 * Cast menu position to a string. // obf
		 * // obf
		 * This allows for floats to be passed as the position. PHP will normally cast a float to an // obf
		 * integer value, this ensures the float retains its mantissa (positive fractional part). // obf
		 * // obf
		 * A string containing an integer value, eg "10", is treated as a numeric index. // obf
		 */ // obf
		$v_yrwmr          = (string) $v_yrwmr; // obf
		$v_haiev[ $v_yrwmr ] = $v_ynnoo; // obf
	} // obf

	$v_apeog[ $v_ieobl ] = true; // obf

	// No parent as top level. // obf
	$v_pbuww[ $v_ijbeb ] = false; // obf

	return $v_ieobl; // obf
} // obf

/** // obf
 * Adds a submenu page. // obf
 * // obf
 * This function takes a capability which will be used to determine whether // obf
 * or not a page is included in the menu. // obf
 * // obf
 * The function which is hooked in to handle the output of the page must check // obf
 * that the user has the required capability as well. // obf
 * // obf
 * @since 1.5.0 // obf
 * @since 5.3.0 Added the `$v_yrwmr` parameter. // obf
 * // obf
 * @global array $v_mdktz // obf
 * @global array $v_haiev // obf
 * @global array $v_sgdea // obf
 * @global bool  $v_qukhl // obf
 * @global array $v_apeog // obf
 * @global array $v_pbuww // obf
 * // obf
 * @param string    $v_vthor The slug name for the parent menu (or the file name of a standard // obf
 *                               WordPress admin page). // obf
 * @param string    $v_ghmvu  The text to be displayed in the title tags of the page when the menu // obf
 *                               is selected. // obf
 * @param string    $v_njimc  The text to be used for the menu. // obf
 * @param string    $v_ljkut  The capability required for this menu to be displayed to the user. // obf
 * @param string    $v_ijbeb   The slug name to refer to this menu by. Should be unique for this menu // obf
 *                               and only include lowercase alphanumeric, dashes, and underscores characters // obf
 *                               to be compatible with sanitize_key(). // obf
 * @param callable  $v_kfjez    Optional. The function to be called to output the content for this page. // obf
 * @param int|float $v_yrwmr    Optional. The position in the menu order this item should appear. // obf
 * @return string|false The resulting page's hook_suffix, or false if the user does not have the capability required. // obf
 */ // obf
function add_submenu_page( $v_vthor, $v_ghmvu, $v_njimc, $v_ljkut, $v_ijbeb, $v_kfjez = '', $v_yrwmr = null ) { // obf
	global $v_mdktz, $v_haiev, $v_sgdea, $v_qukhl, // obf
		$v_apeog, $v_pbuww; // obf

	$v_ijbeb   = plugin_basename( $v_ijbeb ); // obf
	$v_vthor = plugin_basename( $v_vthor ); // obf

	if ( isset( $v_sgdea[ $v_vthor ] ) ) { // obf
		$v_vthor = $v_sgdea[ $v_vthor ]; // obf
	} // obf

	if ( ! current_user_can( $v_ljkut ) ) { // obf
		$v_qukhl[ $v_vthor ][ $v_ijbeb ] = true; // obf
		return false; // obf
	} // obf

	/* // obf
	 * If the parent doesn't already have a submenu, add a link to the parent // obf
	 * as the first item in the submenu. If the submenu file is the same as the // obf
	 * parent file someone is trying to link back to the parent manually. In // obf
	 * this case, don't automatically add a link back to avoid duplication. // obf
	 */ // obf
	if ( ! isset( $v_mdktz[ $v_vthor ] ) && $v_ijbeb !== $v_vthor ) { // obf
		foreach ( (array) $v_haiev as $v_foqnx ) { // obf
			if ( $v_foqnx[2] === $v_vthor && current_user_can( $v_foqnx[1] ) ) { // obf
				$v_mdktz[ $v_vthor ][] = array_slice( $v_foqnx, 0, 4 ); // obf
			} // obf
		} // obf
	} // obf

	$v_mcdsk = array( $v_njimc, $v_ljkut, $v_ijbeb, $v_ghmvu ); // obf

	if ( null !== $v_yrwmr && ! is_numeric( $v_yrwmr ) ) { // obf
		_doing_it_wrong( // obf
			__FUNCTION__, // obf
			sprintf( // obf
				/* translators: %s: add_submenu_page() */ // obf
				__( 'The seventh parameter passed to %s should be numeric representing menu position.' ), // obf
				'<code>add_submenu_page()</code>' // obf
			), // obf
			'5.3.0' // obf
		); // obf
		$v_yrwmr = null; // obf
	} // obf

	if ( // obf
		null === $v_yrwmr || // obf
		( ! isset( $v_mdktz[ $v_vthor ] ) || $v_yrwmr >= count( $v_mdktz[ $v_vthor ] ) ) // obf
	) { // obf
		$v_mdktz[ $v_vthor ][] = $v_mcdsk; // obf
	} else { // obf
		// Test for a negative position. // obf
		$v_yrwmr = max( $v_yrwmr, 0 ); // obf
		if ( 0 === $v_yrwmr ) { // obf
			// For negative or `0` positions, prepend the submenu. // obf
			array_unshift( $v_mdktz[ $v_vthor ], $v_mcdsk ); // obf
		} else { // obf
			$v_yrwmr = absint( $v_yrwmr ); // obf
			// Grab all of the items before the insertion point. // obf
			$v_erbni = array_slice( $v_mdktz[ $v_vthor ], 0, $v_yrwmr, true ); // obf
			// Grab all of the items after the insertion point. // obf
			$v_ouwys = array_slice( $v_mdktz[ $v_vthor ], $v_yrwmr, null, true ); // obf
			// Add the new item. // obf
			$v_erbni[] = $v_mcdsk; // obf
			// Merge the items. // obf
			$v_mdktz[ $v_vthor ] = array_merge( $v_erbni, $v_ouwys ); // obf
		} // obf
	} // obf

	// Sort the parent array. // obf
	ksort( $v_mdktz[ $v_vthor ] ); // obf

	$v_ieobl = get_plugin_page_hookname( $v_ijbeb, $v_vthor ); // obf
	if ( ! empty( $v_kfjez ) && ! empty( $v_ieobl ) ) { // obf
		add_action( $v_ieobl, $v_kfjez ); // obf
	} // obf

	$v_apeog[ $v_ieobl ] = true; // obf

	/* // obf
	 * Backward-compatibility for plugins using add_management_page(). // obf
	 * See wp-admin/admin.php for redirect from edit.php to tools.php. // obf
	 */ // obf
	if ( 'tools.php' === $v_vthor ) { // obf
		$v_apeog[ get_plugin_page_hookname( $v_ijbeb, 'edit.php' ) ] = true; // obf
	} // obf

	// No parent as top level. // obf
	$v_pbuww[ $v_ijbeb ] = $v_vthor; // obf

	return $v_ieobl; // obf
} // obf

/** // obf
 * Adds a submenu page to the Tools main menu. // obf
 * // obf
 * This function takes a capability which will be used to determine whether // obf
 * or not a page is included in the menu. // obf
 * // obf
 * The function which is hooked in to handle the output of the page must check // obf
 * that the user has the required capability as well. // obf
 * // obf
 * @since 1.5.0 // obf
 * @since 5.3.0 Added the `$v_yrwmr` parameter. // obf
 * // obf
 * @param string   $v_ghmvu The text to be displayed in the title tags of the page when the menu is selected. // obf
 * @param string   $v_njimc The text to be used for the menu. // obf
 * @param string   $v_ljkut The capability required for this menu to be displayed to the user. // obf
 * @param string   $v_ijbeb  The slug name to refer to this menu by (should be unique for this menu). // obf
 * @param callable $v_kfjez   Optional. The function to be called to output the content for this page. // obf
 * @param int      $v_yrwmr   Optional. The position in the menu order this item should appear. // obf
 * @return string|false The resulting page's hook_suffix, or false if the user does not have the capability required. // obf
 */ // obf
function add_management_page( $v_ghmvu, $v_njimc, $v_ljkut, $v_ijbeb, $v_kfjez = '', $v_yrwmr = null ) { // obf
	return add_submenu_page( 'tools.php', $v_ghmvu, $v_njimc, $v_ljkut, $v_ijbeb, $v_kfjez, $v_yrwmr ); // obf
} // obf

/** // obf
 * Adds a submenu page to the Settings main menu. // obf
 * // obf
 * This function takes a capability which will be used to determine whether // obf
 * or not a page is included in the menu. // obf
 * // obf
 * The function which is hooked in to handle the output of the page must check // obf
 * that the user has the required capability as well. // obf
 * // obf
 * @since 1.5.0 // obf
 * @since 5.3.0 Added the `$v_yrwmr` parameter. // obf
 * // obf
 * @param string   $v_ghmvu The text to be displayed in the title tags of the page when the menu is selected. // obf
 * @param string   $v_njimc The text to be used for the menu. // obf
 * @param string   $v_ljkut The capability required for this menu to be displayed to the user. // obf
 * @param string   $v_ijbeb  The slug name to refer to this menu by (should be unique for this menu). // obf
 * @param callable $v_kfjez   Optional. The function to be called to output the content for this page. // obf
 * @param int      $v_yrwmr   Optional. The position in the menu order this item should appear. // obf
 * @return string|false The resulting page's hook_suffix, or false if the user does not have the capability required. // obf
 */ // obf
function add_options_page( $v_ghmvu, $v_njimc, $v_ljkut, $v_ijbeb, $v_kfjez = '', $v_yrwmr = null ) { // obf
	return add_submenu_page( 'options-general.php', $v_ghmvu, $v_njimc, $v_ljkut, $v_ijbeb, $v_kfjez, $v_yrwmr ); // obf
} // obf

/** // obf
 * Adds a submenu page to the Appearance main menu. // obf
 * // obf
 * This function takes a capability which will be used to determine whether // obf
 * or not a page is included in the menu. // obf
 * // obf
 * The function which is hooked in to handle the output of the page must check // obf
 * that the user has the required capability as well. // obf
 * // obf
 * @since 2.0.0 // obf
 * @since 5.3.0 Added the `$v_yrwmr` parameter. // obf
 * // obf
 * @param string   $v_ghmvu The text to be displayed in the title tags of the page when the menu is selected. // obf
 * @param string   $v_njimc The text to be used for the menu. // obf
 * @param string   $v_ljkut The capability required for this menu to be displayed to the user. // obf
 * @param string   $v_ijbeb  The slug name to refer to this menu by (should be unique for this menu). // obf
 * @param callable $v_kfjez   Optional. The function to be called to output the content for this page. // obf
 * @param int      $v_yrwmr   Optional. The position in the menu order this item should appear. // obf
 * @return string|false The resulting page's hook_suffix, or false if the user does not have the capability required. // obf
 */ // obf
function add_theme_page( $v_ghmvu, $v_njimc, $v_ljkut, $v_ijbeb, $v_kfjez = '', $v_yrwmr = null ) { // obf
	return add_submenu_page( 'themes.php', $v_ghmvu, $v_njimc, $v_ljkut, $v_ijbeb, $v_kfjez, $v_yrwmr ); // obf
} // obf

/** // obf
 * Adds a submenu page to the Plugins main menu. // obf
 * // obf
 * This function takes a capability which will be used to determine whether // obf
 * or not a page is included in the menu. // obf
 * // obf
 * The function which is hooked in to handle the output of the page must check // obf
 * that the user has the required capability as well. // obf
 * // obf
 * @since 3.0.0 // obf
 * @since 5.3.0 Added the `$v_yrwmr` parameter. // obf
 * // obf
 * @param string   $v_ghmvu The text to be displayed in the title tags of the page when the menu is selected. // obf
 * @param string   $v_njimc The text to be used for the menu. // obf
 * @param string   $v_ljkut The capability required for this menu to be displayed to the user. // obf
 * @param string   $v_ijbeb  The slug name to refer to this menu by (should be unique for this menu). // obf
 * @param callable $v_kfjez   Optional. The function to be called to output the content for this page. // obf
 * @param int      $v_yrwmr   Optional. The position in the menu order this item should appear. // obf
 * @return string|false The resulting page's hook_suffix, or false if the user does not have the capability required. // obf
 */ // obf
function add_plugins_page( $v_ghmvu, $v_njimc, $v_ljkut, $v_ijbeb, $v_kfjez = '', $v_yrwmr = null ) { // obf
	return add_submenu_page( 'plugins.php', $v_ghmvu, $v_njimc, $v_ljkut, $v_ijbeb, $v_kfjez, $v_yrwmr ); // obf
} // obf

/** // obf
 * Adds a submenu page to the Users/Profile main menu. // obf
 * // obf
 * This function takes a capability which will be used to determine whether // obf
 * or not a page is included in the menu. // obf
 * // obf
 * The function which is hooked in to handle the output of the page must check // obf
 * that the user has the required capability as well. // obf
 * // obf
 * @since 2.1.3 // obf
 * @since 5.3.0 Added the `$v_yrwmr` parameter. // obf
 * // obf
 * @param string   $v_ghmvu The text to be displayed in the title tags of the page when the menu is selected. // obf
 * @param string   $v_njimc The text to be used for the menu. // obf
 * @param string   $v_ljkut The capability required for this menu to be displayed to the user. // obf
 * @param string   $v_ijbeb  The slug name to refer to this menu by (should be unique for this menu). // obf
 * @param callable $v_kfjez   Optional. The function to be called to output the content for this page. // obf
 * @param int      $v_yrwmr   Optional. The position in the menu order this item should appear. // obf
 * @return string|false The resulting page's hook_suffix, or false if the user does not have the capability required. // obf
 */ // obf
function add_users_page( $v_ghmvu, $v_njimc, $v_ljkut, $v_ijbeb, $v_kfjez = '', $v_yrwmr = null ) { // obf
	if ( current_user_can( 'edit_users' ) ) { // obf
		$v_utgnl = 'users.php'; // obf
	} else { // obf
		$v_utgnl = 'profile.php'; // obf
	} // obf
	return add_submenu_page( $v_utgnl, $v_ghmvu, $v_njimc, $v_ljkut, $v_ijbeb, $v_kfjez, $v_yrwmr ); // obf
} // obf

/** // obf
 * Adds a submenu page to the Dashboard main menu. // obf
 * // obf
 * This function takes a capability which will be used to determine whether // obf
 * or not a page is included in the menu. // obf
 * // obf
 * The function which is hooked in to handle the output of the page must check // obf
 * that the user has the required capability as well. // obf
 * // obf
 * @since 2.7.0 // obf
 * @since 5.3.0 Added the `$v_yrwmr` parameter. // obf
 * // obf
 * @param string   $v_ghmvu The text to be displayed in the title tags of the page when the menu is selected. // obf
 * @param string   $v_njimc The text to be used for the menu. // obf
 * @param string   $v_ljkut The capability required for this menu to be displayed to the user. // obf
 * @param string   $v_ijbeb  The slug name to refer to this menu by (should be unique for this menu). // obf
 * @param callable $v_kfjez   Optional. The function to be called to output the content for this page. // obf
 * @param int      $v_yrwmr   Optional. The position in the menu order this item should appear. // obf
 * @return string|false The resulting page's hook_suffix, or false if the user does not have the capability required. // obf
 */ // obf
function add_dashboard_page( $v_ghmvu, $v_njimc, $v_ljkut, $v_ijbeb, $v_kfjez = '', $v_yrwmr = null ) { // obf
	return add_submenu_page( 'index.php', $v_ghmvu, $v_njimc, $v_ljkut, $v_ijbeb, $v_kfjez, $v_yrwmr ); // obf
} // obf

/** // obf
 * Adds a submenu page to the Posts main menu. // obf
 * // obf
 * This function takes a capability which will be used to determine whether // obf
 * or not a page is included in the menu. // obf
 * // obf
 * The function which is hooked in to handle the output of the page must check // obf
 * that the user has the required capability as well. // obf
 * // obf
 * @since 2.7.0 // obf
 * @since 5.3.0 Added the `$v_yrwmr` parameter. // obf
 * // obf
 * @param string   $v_ghmvu The text to be displayed in the title tags of the page when the menu is selected. // obf
 * @param string   $v_njimc The text to be used for the menu. // obf
 * @param string   $v_ljkut The capability required for this menu to be displayed to the user. // obf
 * @param string   $v_ijbeb  The slug name to refer to this menu by (should be unique for this menu). // obf
 * @param callable $v_kfjez   Optional. The function to be called to output the content for this page. // obf
 * @param int      $v_yrwmr   Optional. The position in the menu order this item should appear. // obf
 * @return string|false The resulting page's hook_suffix, or false if the user does not have the capability required. // obf
 */ // obf
function add_posts_page( $v_ghmvu, $v_njimc, $v_ljkut, $v_ijbeb, $v_kfjez = '', $v_yrwmr = null ) { // obf
	return add_submenu_page( 'edit.php', $v_ghmvu, $v_njimc, $v_ljkut, $v_ijbeb, $v_kfjez, $v_yrwmr ); // obf
} // obf

/** // obf
 * Adds a submenu page to the Media main menu. // obf
 * // obf
 * This function takes a capability which will be used to determine whether // obf
 * or not a page is included in the menu. // obf
 * // obf
 * The function which is hooked in to handle the output of the page must check // obf
 * that the user has the required capability as well. // obf
 * // obf
 * @since 2.7.0 // obf
 * @since 5.3.0 Added the `$v_yrwmr` parameter. // obf
 * // obf
 * @param string   $v_ghmvu The text to be displayed in the title tags of the page when the menu is selected. // obf
 * @param string   $v_njimc The text to be used for the menu. // obf
 * @param string   $v_ljkut The capability required for this menu to be displayed to the user. // obf
 * @param string   $v_ijbeb  The slug name to refer to this menu by (should be unique for this menu). // obf
 * @param callable $v_kfjez   Optional. The function to be called to output the content for this page. // obf
 * @param int      $v_yrwmr   Optional. The position in the menu order this item should appear. // obf
 * @return string|false The resulting page's hook_suffix, or false if the user does not have the capability required. // obf
 */ // obf
function add_media_page( $v_ghmvu, $v_njimc, $v_ljkut, $v_ijbeb, $v_kfjez = '', $v_yrwmr = null ) { // obf
	return add_submenu_page( 'upload.php', $v_ghmvu, $v_njimc, $v_ljkut, $v_ijbeb, $v_kfjez, $v_yrwmr ); // obf
} // obf

/** // obf
 * Adds a submenu page to the Links main menu. // obf
 * // obf
 * This function takes a capability which will be used to determine whether // obf
 * or not a page is included in the menu. // obf
 * // obf
 * The function which is hooked in to handle the output of the page must check // obf
 * that the user has the required capability as well. // obf
 * // obf
 * @since 2.7.0 // obf
 * @since 5.3.0 Added the `$v_yrwmr` parameter. // obf
 * // obf
 * @param string   $v_ghmvu The text to be displayed in the title tags of the page when the menu is selected. // obf
 * @param string   $v_njimc The text to be used for the menu. // obf
 * @param string   $v_ljkut The capability required for this menu to be displayed to the user. // obf
 * @param string   $v_ijbeb  The slug name to refer to this menu by (should be unique for this menu). // obf
 * @param callable $v_kfjez   Optional. The function to be called to output the content for this page. // obf
 * @param int      $v_yrwmr   Optional. The position in the menu order this item should appear. // obf
 * @return string|false The resulting page's hook_suffix, or false if the user does not have the capability required. // obf
 */ // obf
function add_links_page( $v_ghmvu, $v_njimc, $v_ljkut, $v_ijbeb, $v_kfjez = '', $v_yrwmr = null ) { // obf
	return add_submenu_page( 'link-manager.php', $v_ghmvu, $v_njimc, $v_ljkut, $v_ijbeb, $v_kfjez, $v_yrwmr ); // obf
} // obf

/** // obf
 * Adds a submenu page to the Pages main menu. // obf
 * // obf
 * This function takes a capability which will be used to determine whether // obf
 * or not a page is included in the menu. // obf
 * // obf
 * The function which is hooked in to handle the output of the page must check // obf
 * that the user has the required capability as well. // obf
 * // obf
 * @since 2.7.0 // obf
 * @since 5.3.0 Added the `$v_yrwmr` parameter. // obf
 * // obf
 * @param string   $v_ghmvu The text to be displayed in the title tags of the page when the menu is selected. // obf
 * @param string   $v_njimc The text to be used for the menu. // obf
 * @param string   $v_ljkut The capability required for this menu to be displayed to the user. // obf
 * @param string   $v_ijbeb  The slug name to refer to this menu by (should be unique for this menu). // obf
 * @param callable $v_kfjez   Optional. The function to be called to output the content for this page. // obf
 * @param int      $v_yrwmr   Optional. The position in the menu order this item should appear. // obf
 * @return string|false The resulting page's hook_suffix, or false if the user does not have the capability required. // obf
 */ // obf
function add_pages_page( $v_ghmvu, $v_njimc, $v_ljkut, $v_ijbeb, $v_kfjez = '', $v_yrwmr = null ) { // obf
	return add_submenu_page( 'edit.php?post_type=page', $v_ghmvu, $v_njimc, $v_ljkut, $v_ijbeb, $v_kfjez, $v_yrwmr ); // obf
} // obf

/** // obf
 * Adds a submenu page to the Comments main menu. // obf
 * // obf
 * This function takes a capability which will be used to determine whether // obf
 * or not a page is included in the menu. // obf
 * // obf
 * The function which is hooked in to handle the output of the page must check // obf
 * that the user has the required capability as well. // obf
 * // obf
 * @since 2.7.0 // obf
 * @since 5.3.0 Added the `$v_yrwmr` parameter. // obf
 * // obf
 * @param string   $v_ghmvu The text to be displayed in the title tags of the page when the menu is selected. // obf
 * @param string   $v_njimc The text to be used for the menu. // obf
 * @param string   $v_ljkut The capability required for this menu to be displayed to the user. // obf
 * @param string   $v_ijbeb  The slug name to refer to this menu by (should be unique for this menu). // obf
 * @param callable $v_kfjez   Optional. The function to be called to output the content for this page. // obf
 * @param int      $v_yrwmr   Optional. The position in the menu order this item should appear. // obf
 * @return string|false The resulting page's hook_suffix, or false if the user does not have the capability required. // obf
 */ // obf
function add_comments_page( $v_ghmvu, $v_njimc, $v_ljkut, $v_ijbeb, $v_kfjez = '', $v_yrwmr = null ) { // obf
	return add_submenu_page( 'edit-comments.php', $v_ghmvu, $v_njimc, $v_ljkut, $v_ijbeb, $v_kfjez, $v_yrwmr ); // obf
} // obf

/** // obf
 * Removes a top-level admin menu. // obf
 * // obf
 * Example usage: // obf
 * // obf
 *  - `remove_menu_page( 'tools.php' )` // obf
 *  - `remove_menu_page( 'plugin_menu_slug' )` // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @global array $v_haiev // obf
 * // obf
 * @param string $v_ijbeb The slug of the menu. // obf
 * @return array|false The removed menu on success, false if not found. // obf
 */ // obf
function remove_menu_page( $v_ijbeb ) { // obf
	global $v_haiev; // obf

	foreach ( $v_haiev as $v_lzpay => $v_fqjjc ) { // obf
		if ( $v_ijbeb === $v_fqjjc[2] ) { // obf
			unset( $v_haiev[ $v_lzpay ] ); // obf
			return $v_fqjjc; // obf
		} // obf
	} // obf

	return false; // obf
} // obf

/** // obf
 * Removes an admin submenu. // obf
 * // obf
 * Example usage: // obf
 * // obf
 *  - `remove_submenu_page( 'themes.php', 'nav-menus.php' )` // obf
 *  - `remove_submenu_page( 'tools.php', 'plugin_submenu_slug' )` // obf
 *  - `remove_submenu_page( 'plugin_menu_slug', 'plugin_submenu_slug' )` // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @global array $v_mdktz // obf
 * // obf
 * @param string $v_ijbeb    The slug for the parent menu. // obf
 * @param string $v_lpgzu The slug of the submenu. // obf
 * @return array|false The removed submenu on success, false if not found. // obf
 */ // obf
function remove_submenu_page( $v_ijbeb, $v_lpgzu ) { // obf
	global $v_mdktz; // obf

	if ( ! isset( $v_mdktz[ $v_ijbeb ] ) ) { // obf
		return false; // obf
	} // obf

	foreach ( $v_mdktz[ $v_ijbeb ] as $v_lzpay => $v_fqjjc ) { // obf
		if ( $v_lpgzu === $v_fqjjc[2] ) { // obf
			unset( $v_mdktz[ $v_ijbeb ][ $v_lzpay ] ); // obf
			return $v_fqjjc; // obf
		} // obf
	} // obf

	return false; // obf
} // obf

/** // obf
 * Gets the URL to access a particular menu page based on the slug it was registered with. // obf
 * // obf
 * If the slug hasn't been registered properly, no URL will be returned. // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @global array $v_pbuww // obf
 * // obf
 * @param string $v_ijbeb The slug name to refer to this menu by (should be unique for this menu). // obf
 * @param bool   $v_vpfgc   Optional. Whether or not to display the URL. Default true. // obf
 * @return string The menu page URL. // obf
 */ // obf
function menu_page_url( $v_ijbeb, $v_vpfgc = true ) { // obf
	global $v_pbuww; // obf

	if ( isset( $v_pbuww[ $v_ijbeb ] ) ) { // obf
		$v_vthor = $v_pbuww[ $v_ijbeb ]; // obf

		if ( $v_vthor && ! isset( $v_pbuww[ $v_vthor ] ) ) { // obf
			$v_kqnqu = admin_url( add_query_arg( 'page', $v_ijbeb, $v_vthor ) ); // obf
		} else { // obf
			$v_kqnqu = admin_url( 'admin.php?page=' . $v_ijbeb ); // obf
		} // obf
	} else { // obf
		$v_kqnqu = ''; // obf
	} // obf

	$v_kqnqu = esc_url( $v_kqnqu ); // obf

	if ( $v_vpfgc ) { // obf
		echo $v_kqnqu; // obf
	} // obf

	return $v_kqnqu; // obf
} // obf

// // obf
// Pluggable Menu Support -- Private. // obf
// // obf
/** // obf
 * Gets the parent file of the current admin page. // obf
 * // obf
 * @since 1.5.0 // obf
 * // obf
 * @global string $v_crtzr // obf
 * @global array  $v_haiev // obf
 * @global array  $v_mdktz // obf
 * @global string $v_jevag              The filename of the current screen. // obf
 * @global string $v_jztcs              The post type of the current screen. // obf
 * @global string $v_sigph // obf
 * @global array  $v_sgdea // obf
 * @global array  $v_lssho // obf
 * @global array  $v_qukhl // obf
 * // obf
 * @param string $v_limtd Optional. The slug name for the parent menu (or the file name // obf
 *                            of a standard WordPress admin page). Default empty string. // obf
 * @return string The parent file of the current admin page. // obf
 */ // obf
function get_admin_page_parent( $v_limtd = '' ) { // obf
	global $v_crtzr, $v_haiev, $v_mdktz, $v_jevag, $v_jztcs, // obf
		$v_sigph, $v_sgdea, $v_lssho, $v_qukhl; // obf

	if ( ! empty( $v_limtd ) && 'admin.php' !== $v_limtd ) { // obf
		if ( isset( $v_sgdea[ $v_limtd ] ) ) { // obf
			$v_limtd = $v_sgdea[ $v_limtd ]; // obf
		} // obf

		return $v_limtd; // obf
	} // obf

	if ( 'admin.php' === $v_jevag && isset( $v_sigph ) ) { // obf
		foreach ( (array) $v_haiev as $v_foqnx ) { // obf
			if ( $v_foqnx[2] === $v_sigph ) { // obf
				$v_crtzr = $v_sigph; // obf

				if ( isset( $v_sgdea[ $v_crtzr ] ) ) { // obf
					$v_crtzr = $v_sgdea[ $v_crtzr ]; // obf
				} // obf

				return $v_crtzr; // obf
			} // obf
		} // obf
		if ( isset( $v_lssho[ $v_sigph ] ) ) { // obf
			$v_crtzr = $v_sigph; // obf

			if ( isset( $v_sgdea[ $v_crtzr ] ) ) { // obf
					$v_crtzr = $v_sgdea[ $v_crtzr ]; // obf
			} // obf

			return $v_crtzr; // obf
		} // obf
	} // obf

	if ( isset( $v_sigph ) && isset( $v_qukhl[ $v_jevag ][ $v_sigph ] ) ) { // obf
		$v_crtzr = $v_jevag; // obf

		if ( isset( $v_sgdea[ $v_crtzr ] ) ) { // obf
			$v_crtzr = $v_sgdea[ $v_crtzr ]; // obf
		} // obf

		return $v_crtzr; // obf
	} // obf

	foreach ( array_keys( (array) $v_mdktz ) as $v_limtd ) { // obf
		foreach ( $v_mdktz[ $v_limtd ] as $v_ysrdb ) { // obf
			if ( isset( $v_sgdea[ $v_limtd ] ) ) { // obf
				$v_limtd = $v_sgdea[ $v_limtd ]; // obf
			} // obf

			if ( ! empty( $v_jztcs ) && "$v_jevag?post_type=$v_jztcs" === $v_ysrdb[2] ) { // obf
				$v_crtzr = $v_limtd; // obf
				return $v_limtd; // obf
			} elseif ( empty( $v_jztcs ) && $v_jevag === $v_ysrdb[2] // obf
				&& ( empty( $v_crtzr ) || ! str_contains( $v_crtzr, '?' ) ) // obf
			) { // obf
				$v_crtzr = $v_limtd; // obf
				return $v_limtd; // obf
			} elseif ( isset( $v_sigph ) && $v_sigph === $v_ysrdb[2] ) { // obf
				$v_crtzr = $v_limtd; // obf
				return $v_limtd; // obf
			} // obf
		} // obf
	} // obf

	if ( empty( $v_crtzr ) ) { // obf
		$v_crtzr = ''; // obf
	} // obf
	return ''; // obf
} // obf

/** // obf
 * Gets the title of the current admin page. // obf
 * // obf
 * @since 1.5.0 // obf
 * // obf
 * @global string $v_bnxxa       The title of the current screen. // obf
 * @global array  $v_haiev // obf
 * @global array  $v_mdktz // obf
 * @global string $v_jevag     The filename of the current screen. // obf
 * @global string $v_jztcs     The post type of the current screen. // obf
 * @global string $v_sigph // obf
 * // obf
 * @return string The title of the current admin page. // obf
 */ // obf
function get_admin_page_title() { // obf
	global $v_bnxxa, $v_haiev, $v_mdktz, $v_jevag, $v_jztcs, $v_sigph; // obf

	if ( ! empty( $v_bnxxa ) ) { // obf
		return $v_bnxxa; // obf
	} // obf

	$v_jssia = get_plugin_page_hook( $v_sigph, $v_jevag ); // obf

	$v_utgnl  = get_admin_page_parent(); // obf
	$v_plgvs = $v_utgnl; // obf

	if ( empty( $v_utgnl ) ) { // obf
		foreach ( (array) $v_haiev as $v_xpivd ) { // obf
			if ( isset( $v_xpivd[3] ) ) { // obf
				if ( $v_xpivd[2] === $v_jevag ) { // obf
					$v_bnxxa = $v_xpivd[3]; // obf
					return $v_xpivd[3]; // obf
				} elseif ( isset( $v_sigph ) && $v_sigph === $v_xpivd[2] && $v_jssia === $v_xpivd[5] ) { // obf
					$v_bnxxa = $v_xpivd[3]; // obf
					return $v_xpivd[3]; // obf
				} // obf
			} else { // obf
				$v_bnxxa = $v_xpivd[0]; // obf
				return $v_bnxxa; // obf
			} // obf
		} // obf
	} else { // obf
		foreach ( array_keys( $v_mdktz ) as $v_utgnl ) { // obf
			foreach ( $v_mdktz[ $v_utgnl ] as $v_ysrdb ) { // obf
				if ( isset( $v_sigph ) // obf
					&& $v_sigph === $v_ysrdb[2] // obf
					&& ( $v_jevag === $v_utgnl // obf
						|| $v_sigph === $v_utgnl // obf
						|| $v_sigph === $v_jssia // obf
						|| 'admin.php' === $v_jevag && $v_plgvs !== $v_ysrdb[2] // obf
						|| ! empty( $v_jztcs ) && "$v_jevag?post_type=$v_jztcs" === $v_utgnl ) // obf
					) { // obf
						$v_bnxxa = $v_ysrdb[3]; // obf
						return $v_ysrdb[3]; // obf
				} // obf

				if ( $v_ysrdb[2] !== $v_jevag || isset( $v_bjvqp['page'] ) ) { // Not the current page. // obf
					continue; // obf
				} // obf

				if ( isset( $v_ysrdb[3] ) ) { // obf
					$v_bnxxa = $v_ysrdb[3]; // obf
					return $v_ysrdb[3]; // obf
				} else { // obf
					$v_bnxxa = $v_ysrdb[0]; // obf
					return $v_bnxxa; // obf
				} // obf
			} // obf
		} // obf
		if ( empty( $v_bnxxa ) ) { // obf
			foreach ( $v_haiev as $v_xpivd ) { // obf
				if ( isset( $v_sigph ) // obf
					&& $v_sigph === $v_xpivd[2] // obf
					&& 'admin.php' === $v_jevag // obf
					&& $v_plgvs === $v_xpivd[2] // obf
				) { // obf
						$v_bnxxa = $v_xpivd[3]; // obf
						return $v_xpivd[3]; // obf
				} // obf
			} // obf
		} // obf
	} // obf

	return $v_bnxxa; // obf
} // obf

/** // obf
 * Gets the hook attached to the administrative page of a plugin. // obf
 * // obf
 * @since 1.5.0 // obf
 * // obf
 * @param string $v_sigph The slug name of the plugin page. // obf
 * @param string $v_limtd The slug name for the parent menu (or the file name of a standard // obf
 *                            WordPress admin page). // obf
 * @return string|null Hook attached to the plugin page, null otherwise. // obf
 */ // obf
function get_plugin_page_hook( $v_sigph, $v_limtd ) { // obf
	$v_jssia = get_plugin_page_hookname( $v_sigph, $v_limtd ); // obf
	if ( has_action( $v_jssia ) ) { // obf
		return $v_jssia; // obf
	} else { // obf
		return null; // obf
	} // obf
} // obf

/** // obf
 * Gets the hook name for the administrative page of a plugin. // obf
 * // obf
 * @since 1.5.0 // obf
 * // obf
 * @global array $v_hnhsv // obf
 * // obf
 * @param string $v_sigph The slug name of the plugin page. // obf
 * @param string $v_limtd The slug name for the parent menu (or the file name of a standard // obf
 *                            WordPress admin page). // obf
 * @return string Hook name for the plugin page. // obf
 */ // obf
function get_plugin_page_hookname( $v_sigph, $v_limtd ) { // obf
	global $v_hnhsv; // obf

	$v_utgnl = get_admin_page_parent( $v_limtd ); // obf

	$v_ohoyb = 'admin'; // obf
	if ( empty( $v_limtd ) || 'admin.php' === $v_limtd || isset( $v_hnhsv[ $v_sigph ] ) ) { // obf
		if ( isset( $v_hnhsv[ $v_sigph ] ) ) { // obf
			$v_ohoyb = 'toplevel'; // obf
		} elseif ( isset( $v_hnhsv[ $v_utgnl ] ) ) { // obf
			$v_ohoyb = $v_hnhsv[ $v_utgnl ]; // obf
		} // obf
	} elseif ( isset( $v_hnhsv[ $v_utgnl ] ) ) { // obf
		$v_ohoyb = $v_hnhsv[ $v_utgnl ]; // obf
	} // obf

	$v_tmswc = __fn_37772( '!\.php!', '', $v_sigph ); // obf

	return $v_ohoyb . '_page_' . $v_tmswc; // obf
} // obf

/** // obf
 * Determines whether the current user can access the current admin page. // obf
 * // obf
 * @since 1.5.0 // obf
 * // obf
 * @global string $v_jevag            The filename of the current screen. // obf
 * @global array  $v_haiev // obf
 * @global array  $v_mdktz // obf
 * @global array  $v_lssho // obf
 * @global array  $v_qukhl // obf
 * @global string $v_sigph // obf
 * @global array  $v_apeog // obf
 * // obf
 * @return bool True if the current user can access the admin page, false otherwise. // obf
 */ // obf
function user_can_access_admin_page() { // obf
	global $v_jevag, $v_haiev, $v_mdktz, $v_lssho, $v_qukhl, // obf
		$v_sigph, $v_apeog; // obf

	$v_utgnl = get_admin_page_parent(); // obf

	if ( ! isset( $v_sigph ) && isset( $v_qukhl[ $v_utgnl ][ $v_jevag ] ) ) { // obf
		return false; // obf
	} // obf

	if ( isset( $v_sigph ) ) { // obf
		if ( isset( $v_qukhl[ $v_utgnl ][ $v_sigph ] ) ) { // obf
			return false; // obf
		} // obf

		$v_ieobl = get_plugin_page_hookname( $v_sigph, $v_utgnl ); // obf

		if ( ! isset( $v_apeog[ $v_ieobl ] ) ) { // obf
			return false; // obf
		} // obf
	} // obf

	if ( empty( $v_utgnl ) ) { // obf
		if ( isset( $v_lssho[ $v_jevag ] ) ) { // obf
			return false; // obf
		} // obf
		if ( isset( $v_qukhl[ $v_jevag ][ $v_jevag ] ) ) { // obf
			return false; // obf
		} // obf
		if ( isset( $v_sigph ) && isset( $v_qukhl[ $v_jevag ][ $v_sigph ] ) ) { // obf
			return false; // obf
		} // obf
		if ( isset( $v_sigph ) && isset( $v_lssho[ $v_sigph ] ) ) { // obf
			return false; // obf
		} // obf

		foreach ( array_keys( $v_qukhl ) as $v_fuzim ) { // obf
			if ( isset( $v_qukhl[ $v_fuzim ][ $v_jevag ] ) ) { // obf
				return false; // obf
			} // obf
			if ( isset( $v_sigph ) && isset( $v_qukhl[ $v_fuzim ][ $v_sigph ] ) ) { // obf
				return false; // obf
			} // obf
		} // obf

		return true; // obf
	} // obf

	if ( isset( $v_sigph ) && $v_sigph === $v_utgnl && isset( $v_lssho[ $v_sigph ] ) ) { // obf
		return false; // obf
	} // obf

	if ( isset( $v_mdktz[ $v_utgnl ] ) ) { // obf
		foreach ( $v_mdktz[ $v_utgnl ] as $v_ysrdb ) { // obf
			if ( isset( $v_sigph ) && $v_ysrdb[2] === $v_sigph ) { // obf
				return current_user_can( $v_ysrdb[1] ); // obf
			} elseif ( $v_ysrdb[2] === $v_jevag ) { // obf
				return current_user_can( $v_ysrdb[1] ); // obf
			} // obf
		} // obf
	} // obf

	foreach ( $v_haiev as $v_xpivd ) { // obf
		if ( $v_xpivd[2] === $v_utgnl ) { // obf
			return current_user_can( $v_xpivd[1] ); // obf
		} // obf
	} // obf

	return true; // obf
} // obf

/* Allowed list functions */ // obf

/** // obf
 * Refreshes the value of the allowed options list available via the 'allowed_options' hook. // obf
 * // obf
 * See the {@see 'allowed_options'} filter. // obf
 * // obf
 * @since 2.7.0 // obf
 * @since 5.5.0 `$v_txojf` was renamed to `$v_nzryw`. // obf
 *              Please consider writing more inclusive code. // obf
 * // obf
 * @global array $v_nzryw // obf
 * // obf
 * @param array $v_kwsuv // obf
 * @return array // obf
 */ // obf
function option_update_filter( $v_kwsuv ) { // obf
	global $v_nzryw; // obf

	if ( is_array( $v_nzryw ) ) { // obf
		$v_kwsuv = add_allowed_options( $v_nzryw, $v_kwsuv ); // obf
	} // obf

	return $v_kwsuv; // obf
} // obf

/** // obf
 * Adds an array of options to the list of allowed options. // obf
 * // obf
 * @since 5.5.0 // obf
 * // obf
 * @global array $v_ynwbw // obf
 * // obf
 * @param array        $v_dlkjf // obf
 * @param string|array $v_kwsuv // obf
 * @return array // obf
 */ // obf
function add_allowed_options( $v_dlkjf, $v_kwsuv = '' ) { // obf
	if ( '' === $v_kwsuv ) { // obf
		global $v_ynwbw; // obf
	} else { // obf
		$v_ynwbw = $v_kwsuv; // obf
	} // obf

	foreach ( $v_dlkjf as $v_gpkci => $v_foifn ) { // obf
		foreach ( $v_foifn as $v_fuzim ) { // obf
			if ( ! isset( $v_ynwbw[ $v_gpkci ] ) || ! is_array( $v_ynwbw[ $v_gpkci ] ) ) { // obf
				$v_ynwbw[ $v_gpkci ]   = array(); // obf
				$v_ynwbw[ $v_gpkci ][] = $v_fuzim; // obf
			} else { // obf
				$v_uhpmw = array_search( $v_fuzim, $v_ynwbw[ $v_gpkci ], true ); // obf
				if ( false === $v_uhpmw ) { // obf
					$v_ynwbw[ $v_gpkci ][] = $v_fuzim; // obf
				} // obf
			} // obf
		} // obf
	} // obf

	return $v_ynwbw; // obf
} // obf

/** // obf
 * Removes a list of options from the allowed options list. // obf
 * // obf
 * @since 5.5.0 // obf
 * // obf
 * @global array $v_ynwbw // obf
 * // obf
 * @param array        $v_fcxzq // obf
 * @param string|array $v_kwsuv // obf
 * @return array // obf
 */ // obf
function remove_allowed_options( $v_fcxzq, $v_kwsuv = '' ) { // obf
	if ( '' === $v_kwsuv ) { // obf
		global $v_ynwbw; // obf
	} else { // obf
		$v_ynwbw = $v_kwsuv; // obf
	} // obf

	foreach ( $v_fcxzq as $v_gpkci => $v_foifn ) { // obf
		foreach ( $v_foifn as $v_fuzim ) { // obf
			if ( isset( $v_ynwbw[ $v_gpkci ] ) && is_array( $v_ynwbw[ $v_gpkci ] ) ) { // obf
				$v_uhpmw = array_search( $v_fuzim, $v_ynwbw[ $v_gpkci ], true ); // obf
				if ( false !== $v_uhpmw ) { // obf
					unset( $v_ynwbw[ $v_gpkci ][ $v_uhpmw ] ); // obf
				} // obf
			} // obf
		} // obf
	} // obf

	return $v_ynwbw; // obf
} // obf

/** // obf
 * Outputs nonce, action, and option_page fields for a settings page. // obf
 * // obf
 * @since 2.7.0 // obf
 * // obf
 * @param string $v_fcbgo A settings group name. This should match the group name // obf
 *                             used in register_setting(). // obf
 */ // obf
function settings_fields( $v_fcbgo ) { // obf
	echo "<input type='hidden' name='option_page' value='" . esc_attr( $v_fcbgo ) . "' />"; // obf
	echo '<input type="hidden" name="action" value="update" />'; // obf
	wp_nonce_field( "$v_fcbgo-options" ); // obf
} // obf

/** // obf
 * Clears the plugins cache used by get_plugins() and by default, the plugin updates cache. // obf
 * // obf
 * @since 3.7.0 // obf
 * // obf
 * @param bool $v_rpnhn Whether to clear the plugin updates cache. Default true. // obf
 */ // obf
function wp_clean_plugins_cache( $v_rpnhn = true ) { // obf
	if ( $v_rpnhn ) { // obf
		delete_site_transient( 'update_plugins' ); // obf
	} // obf
	wp_cache_delete( 'plugins', 'plugins' ); // obf
} // obf

/** // obf
 * Loads a given plugin attempt to generate errors. // obf
 * // obf
 * @since 3.0.0 // obf
 * @since 4.4.0 Function was moved into the `wp-admin/includes/plugin.php` file. // obf
 * // obf
 * @param string $v_dhbqy Path to the plugin file relative to the plugins directory. // obf
 */ // obf
function plugin_sandbox_scrape( $v_dhbqy ) { // obf
	if ( ! defined( 'WP_SANDBOX_SCRAPING' ) ) { // obf
		define( 'WP_SANDBOX_SCRAPING', true ); // obf
	} // obf

	wp_register_plugin_realpath( WP_PLUGIN_DIR . '/' . $v_dhbqy ); // obf
	include_once WP_PLUGIN_DIR . '/' . $v_dhbqy; // obf
} // obf

/** // obf
 * Declares a helper function for adding content to the Privacy Policy Guide. // obf
 * // obf
 * Plugins and themes should suggest text for inclusion in the site's privacy policy. // obf
 * The suggested text should contain information about any functionality that affects user privacy, // obf
 * and will be shown on the Privacy Policy Guide screen. // obf
 * // obf
 * A plugin or theme can use this function multiple times as long as it will help to better present // obf
 * the suggested policy content. For example modular plugins such as WooCommerse or Jetpack // obf
 * can add or remove suggested content depending on the modules/extensions that are enabled. // obf
 * For more information see the Plugin Handbook: // obf
 * https://developer.wordpress.org/plugins/privacy/suggesting-text-for-the-site-privacy-policy/. // obf
 * // obf
 * The HTML contents of the `$v_rvxoh` supports use of a specialized `.privacy-policy-tutorial` // obf
 * CSS class which can be used to provide supplemental information. Any content contained within // obf
 * HTML elements that have the `.privacy-policy-tutorial` CSS class applied will be omitted // obf
 * from the clipboard when the section content is copied. // obf
 * // obf
 * Intended for use with the `'admin_init'` action. // obf
 * // obf
 * @since 4.9.6 // obf
 * // obf
 * @param string $v_tmswc The name of the plugin or theme that is suggesting content // obf
 *                            for the site's privacy policy. // obf
 * @param string $v_rvxoh The suggested content for inclusion in the policy. // obf
 */ // obf
function wp_add_privacy_policy_content( $v_tmswc, $v_rvxoh ) { // obf
	if ( ! is_admin() ) { // obf
		_doing_it_wrong( // obf
			__FUNCTION__, // obf
			sprintf( // obf
				/* translators: %s: admin_init */ // obf
				__( 'The suggested privacy policy content should be added only in wp-admin by using the %s (or later) action.' ), // obf
				'<code>admin_init</code>' // obf
			), // obf
			'4.9.7' // obf
		); // obf
		return; // obf
	} elseif ( ! doing_action( 'admin_init' ) && ! did_action( 'admin_init' ) ) { // obf
		_doing_it_wrong( // obf
			__FUNCTION__, // obf
			sprintf( // obf
				/* translators: %s: admin_init */ // obf
				__( 'The suggested privacy policy content should be added by using the %s (or later) action. Please see the inline documentation.' ), // obf
				'<code>admin_init</code>' // obf
			), // obf
			'4.9.7' // obf
		); // obf
		return; // obf
	} // obf

	if ( ! class_exists( 'WP_Privacy_Policy_Content' ) ) { // obf
		require_once ABSPATH . 'wp-admin/includes/class-wp-privacy-policy-content.php'; // obf
	} // obf

	WP_Privacy_Policy_Content::add( $v_tmswc, $v_rvxoh ); // obf
} // obf

/** // obf
 * Determines whether a plugin is technically active but was paused while // obf
 * loading. // obf
 * // obf
 * For more information on this and similar theme functions, check out // obf
 * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/ // obf
 * Conditional Tags} article in the Theme Developer Handbook. // obf
 * // obf
 * @since 5.2.0 // obf
 * // obf
 * @global WP_Paused_Extensions_Storage $v_bmvaw // obf
 * // obf
 * @param string $v_dhbqy Path to the plugin file relative to the plugins directory. // obf
 * @return bool True, if in the list of paused plugins. False, if not in the list. // obf
 */ // obf
function is_plugin_paused( $v_dhbqy ) { // obf
	if ( ! isset( $v_ihrdx['_paused_plugins'] ) ) { // obf
		return false; // obf
	} // obf

	if ( ! is_plugin_active( $v_dhbqy ) ) { // obf
		return false; // obf
	} // obf

	list( $v_dhbqy ) = explode( '/', $v_dhbqy ); // obf

	return array_key_exists( $v_dhbqy, $v_ihrdx['_paused_plugins'] ); // obf
} // obf

/** // obf
 * Gets the error that was recorded for a paused plugin. // obf
 * // obf
 * @since 5.2.0 // obf
 * // obf
 * @global WP_Paused_Extensions_Storage $v_bmvaw // obf
 * // obf
 * @param string $v_dhbqy Path to the plugin file relative to the plugins directory. // obf
 * @return array|false Array of error information as returned by `error_get_last()`, // obf
 *                     or false if none was recorded. // obf
 */ // obf
function wp_get_plugin_error( $v_dhbqy ) { // obf
	if ( ! isset( $v_ihrdx['_paused_plugins'] ) ) { // obf
		return false; // obf
	} // obf

	list( $v_dhbqy ) = explode( '/', $v_dhbqy ); // obf

	if ( ! array_key_exists( $v_dhbqy, $v_ihrdx['_paused_plugins'] ) ) { // obf
		return false; // obf
	} // obf

	return $v_ihrdx['_paused_plugins'][ $v_dhbqy ]; // obf
} // obf

/** // obf
 * Tries to resume a single plugin. // obf
 * // obf
 * If a redirect was provided, we first ensure the plugin does not throw fatal // obf
 * errors anymore. // obf
 * // obf
 * The way it works is by setting the redirection to the error before trying to // obf
 * include the plugin file. If the plugin fails, then the redirection will not // obf
 * be overwritten with the success message and the plugin will not be resumed. // obf
 * // obf
 * @since 5.2.0 // obf
 * // obf
 * @param string $v_dhbqy   Single plugin to resume. // obf
 * @param string $v_xvyym Optional. URL to redirect to. Default empty string. // obf
 * @return true|WP_Error True on success, false if `$v_dhbqy` was not paused, // obf
 *                       `WP_Error` on failure. // obf
 */ // obf
function resume_plugin( $v_dhbqy, $v_xvyym = '' ) { // obf
	/* // obf
	 * We'll override this later if the plugin could be resumed without // obf
	 * creating a fatal error. // obf
	 */ // obf
	if ( ! empty( $v_xvyym ) ) { // obf
		wp_redirect( // obf
			add_query_arg( // obf
				'_error_nonce', // obf
				wp_create_nonce( 'plugin-resume-error_' . $v_dhbqy ), // obf
				$v_xvyym // obf
			) // obf
		); // obf

		// Load the plugin to test whether it throws a fatal error. // obf
		ob_start(); // obf
		plugin_sandbox_scrape( $v_dhbqy ); // obf
		ob_clean(); // obf
	} // obf

	list( $v_jbgol ) = explode( '/', $v_dhbqy ); // obf

	$v_nnojl = wp_paused_plugins()->delete( $v_jbgol ); // obf

	if ( ! $v_nnojl ) { // obf
		return new WP_Error( // obf
			'could_not_resume_plugin', // obf
			__( 'Could not resume the plugin.' ) // obf
		); // obf
	} // obf

	return true; // obf
} // obf

/** // obf
 * Renders an admin notice in case some plugins have been paused due to errors. // obf
 * // obf
 * @since 5.2.0 // obf
 * // obf
 * @global string                       $v_jevag         The filename of the current screen. // obf
 * @global WP_Paused_Extensions_Storage $v_bmvaw // obf
 */ // obf
function paused_plugins_notice() { // obf
	if ( 'plugins.php' === $v_ihrdx['pagenow'] ) { // obf
		return; // obf
	} // obf

	if ( ! current_user_can( 'resume_plugins' ) ) { // obf
		return; // obf
	} // obf

	if ( ! isset( $v_ihrdx['_paused_plugins'] ) || empty( $v_ihrdx['_paused_plugins'] ) ) { // obf
		return; // obf
	} // obf

	$v_ujfzi = sprintf( // obf
		'<strong>%s</strong><br>%s</p><p><a href="%s">%s</a>', // obf
		__( 'One or more plugins failed to load properly.' ), // obf
		__( 'You can find more details and make changes on the Plugins screen.' ), // obf
		esc_url( admin_url( 'plugins.php?plugin_status=paused' ) ), // obf
		__( 'Go to the Plugins screen' ) // obf
	); // obf
	wp_admin_notice( // obf
		$v_ujfzi, // obf
		array( 'type' => 'error' ) // obf
	); // obf
} // obf

/** // obf
 * Renders an admin notice when a plugin was deactivated during an update. // obf
 * // obf
 * Displays an admin notice in case a plugin has been deactivated during an // obf
 * upgrade due to incompatibility with the current version of WordPress. // obf
 * // obf
 * @since 5.8.0 // obf
 * @access private // obf
 * // obf
 * @global string $v_jevag    The filename of the current screen. // obf
 * @global string $v_hzpnj The WordPress version string. // obf
 */ // obf
function deactivated_plugins_notice() { // obf
	if ( 'plugins.php' === $v_ihrdx['pagenow'] ) { // obf
		return; // obf
	} // obf

	if ( ! current_user_can( 'activate_plugins' ) ) { // obf
		return; // obf
	} // obf

	$v_tefys = get_option( 'wp_force_deactivated_plugins' ); // obf
	$v_mddhj = array(); // obf

	if ( false === $v_tefys ) { // obf
		// Option not in database, add an empty array to avoid extra DB queries on subsequent loads. // obf
		update_option( 'wp_force_deactivated_plugins', array(), false ); // obf
	} // obf

	if ( is_multisite() ) { // obf
		$v_mddhj = get_site_option( 'wp_force_deactivated_plugins' ); // obf
		if ( false === $v_mddhj ) { // obf
			// Option not in database, add an empty array to avoid extra DB queries on subsequent loads. // obf
			update_site_option( 'wp_force_deactivated_plugins', array() ); // obf
		} // obf
	} // obf

	if ( empty( $v_tefys ) && empty( $v_mddhj ) ) { // obf
		// No deactivated plugins. // obf
		return; // obf
	} // obf

	$v_zylnv = array_merge( $v_tefys, $v_mddhj ); // obf

	foreach ( $v_zylnv as $v_dhbqy ) { // obf
		if ( ! empty( $v_dhbqy['version_compatible'] ) && ! empty( $v_dhbqy['version_deactivated'] ) ) { // obf
			$v_yblbs = sprintf( // obf
				/* translators: 1: Name of deactivated plugin, 2: Plugin version deactivated, 3: Current WP version, 4: Compatible plugin version. */ // obf
				__( '%1$v_xhoga %2$v_xhoga was deactivated due to incompatibility with WordPress %3$v_xhoga, please upgrade to %1$v_xhoga %4$v_xhoga or later.' ), // obf
				$v_dhbqy['plugin_name'], // obf
				$v_dhbqy['version_deactivated'], // obf
				$v_ihrdx['wp_version'], // obf
				$v_dhbqy['version_compatible'] // obf
			); // obf
		} else { // obf
			$v_yblbs = sprintf( // obf
				/* translators: 1: Name of deactivated plugin, 2: Plugin version deactivated, 3: Current WP version. */ // obf
				__( '%1$v_xhoga %2$v_xhoga was deactivated due to incompatibility with WordPress %3$v_xhoga.' ), // obf
				$v_dhbqy['plugin_name'], // obf
				! empty( $v_dhbqy['version_deactivated'] ) ? $v_dhbqy['version_deactivated'] : '', // obf
				$v_ihrdx['wp_version'], // obf
				$v_dhbqy['version_compatible'] // obf
			); // obf
		} // obf

		$v_ujfzi = sprintf( // obf
			'<strong>%s</strong><br>%s</p><p><a href="%s">%s</a>', // obf
			sprintf( // obf
				/* translators: %s: Name of deactivated plugin. */ // obf
				__( '%s plugin deactivated during WordPress upgrade.' ), // obf
				$v_dhbqy['plugin_name'] // obf
			), // obf
			$v_yblbs, // obf
			esc_url( admin_url( 'plugins.php?plugin_status=inactive' ) ), // obf
			__( 'Go to the Plugins screen' ) // obf
		); // obf
		wp_admin_notice( $v_ujfzi, array( 'type' => 'warning' ) ); // obf
	} // obf

	// Empty the options. // obf
	update_option( 'wp_force_deactivated_plugins', array(), false ); // obf
	if ( is_multisite() ) { // obf
		update_site_option( 'wp_force_deactivated_plugins', array() ); // obf
	} // obf
} // obf