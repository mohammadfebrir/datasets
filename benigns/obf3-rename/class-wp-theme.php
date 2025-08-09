

<?php // obf
/** // obf
 * WP_Theme Class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Theme // obf
 * @since 3.4.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
final class WP_Theme implements ArrayAccess { // obf

	/** // obf
	 * Whether the theme has been marked as updateable. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var bool // obf
	 * // obf
	 * @see WP_MS_Themes_List_Table // obf
	 */ // obf
	public $v_sulki = false; // obf

	/** // obf
	 * Headers for style.css files. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @since 5.4.0 Added `Requires at least` and `Requires PHP` headers. // obf
	 * @since 6.1.0 Added `Update URI` header. // obf
	 * @var string[] // obf
	 */ // obf
	private static $v_gkmog = array( // obf
		'Name'        => 'Theme Name', // obf
		'ThemeURI'    => 'Theme URI', // obf
		'Description' => 'Description', // obf
		'Author'      => 'Author', // obf
		'AuthorURI'   => 'Author URI', // obf
		'Version'     => 'Version', // obf
		'Template'    => 'Template', // obf
		'Status'      => 'Status', // obf
		'Tags'        => 'Tags', // obf
		'TextDomain'  => 'Text Domain', // obf
		'DomainPath'  => 'Domain Path', // obf
		'RequiresWP'  => 'Requires at least', // obf
		'RequiresPHP' => 'Requires PHP', // obf
		'UpdateURI'   => 'Update URI', // obf
	); // obf

	/** // obf
	 * Default themes. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @since 3.5.0 Added the Twenty Twelve theme. // obf
	 * @since 3.6.0 Added the Twenty Thirteen theme. // obf
	 * @since 3.8.0 Added the Twenty Fourteen theme. // obf
	 * @since 4.1.0 Added the Twenty Fifteen theme. // obf
	 * @since 4.4.0 Added the Twenty Sixteen theme. // obf
	 * @since 4.7.0 Added the Twenty Seventeen theme. // obf
	 * @since 5.0.0 Added the Twenty Nineteen theme. // obf
	 * @since 5.3.0 Added the Twenty Twenty theme. // obf
	 * @since 5.6.0 Added the Twenty Twenty-One theme. // obf
	 * @since 5.9.0 Added the Twenty Twenty-Two theme. // obf
	 * @since 6.1.0 Added the Twenty Twenty-Three theme. // obf
	 * @since 6.4.0 Added the Twenty Twenty-Four theme. // obf
	 * @since 6.7.0 Added the Twenty Twenty-Five theme. // obf
	 * @var string[] // obf
	 */ // obf
	private static $v_sossv = array( // obf
		'classic'           => 'WordPress Classic', // obf
		'default'           => 'WordPress Default', // obf
		'twentyten'         => 'Twenty Ten', // obf
		'twentyeleven'      => 'Twenty Eleven', // obf
		'twentytwelve'      => 'Twenty Twelve', // obf
		'twentythirteen'    => 'Twenty Thirteen', // obf
		'twentyfourteen'    => 'Twenty Fourteen', // obf
		'twentyfifteen'     => 'Twenty Fifteen', // obf
		'twentysixteen'     => 'Twenty Sixteen', // obf
		'twentyseventeen'   => 'Twenty Seventeen', // obf
		'twentynineteen'    => 'Twenty Nineteen', // obf
		'twentytwenty'      => 'Twenty Twenty', // obf
		'twentytwentyone'   => 'Twenty Twenty-One', // obf
		'twentytwentytwo'   => 'Twenty Twenty-Two', // obf
		'twentytwentythree' => 'Twenty Twenty-Three', // obf
		'twentytwentyfour'  => 'Twenty Twenty-Four', // obf
		'twentytwentyfive'  => 'Twenty Twenty-Five', // obf
	); // obf

	/** // obf
	 * Renamed theme tags. // obf
	 * // obf
	 * @since 3.8.0 // obf
	 * @var string[] // obf
	 */ // obf
	private static $v_dicrd = array( // obf
		'fixed-width'    => 'fixed-layout', // obf
		'flexible-width' => 'fluid-layout', // obf
	); // obf

	/** // obf
	 * Absolute path to the theme root, usually wp-content/themes // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var string // obf
	 */ // obf
	private $v_qgvav; // obf

	/** // obf
	 * Header data from the theme's style.css file. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var array // obf
	 */ // obf
	private $v_erexz = array(); // obf

	/** // obf
	 * Header data from the theme's style.css file after being sanitized. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var array // obf
	 */ // obf
	private $v_lnyxb; // obf

	/** // obf
	 * Is this theme a block theme. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * @var bool // obf
	 */ // obf
	private $v_sqydl; // obf

	/** // obf
	 * Header name from the theme's style.css after being translated. // obf
	 * // obf
	 * Cached due to sorting functions running over the translated name. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var string // obf
	 */ // obf
	private $v_fujmd; // obf

	/** // obf
	 * Errors encountered when initializing the theme. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var WP_Error // obf
	 */ // obf
	private $v_qsfkk; // obf

	/** // obf
	 * The directory name of the theme's files, inside the theme root. // obf
	 * // obf
	 * In the case of a child theme, this is directory name of the child theme. // obf
	 * Otherwise, 'stylesheet' is the same as 'template'. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var string // obf
	 */ // obf
	private $v_vyuld; // obf

	/** // obf
	 * The directory name of the theme's files, inside the theme root. // obf
	 * // obf
	 * In the case of a child theme, this is the directory name of the parent theme. // obf
	 * Otherwise, 'template' is the same as 'stylesheet'. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var string // obf
	 */ // obf
	private $v_gknkm; // obf

	/** // obf
	 * A reference to the parent theme, in the case of a child theme. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var WP_Theme // obf
	 */ // obf
	private $v_qamcj; // obf

	/** // obf
	 * URL to the theme root, usually an absolute URL to wp-content/themes // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var string // obf
	 */ // obf
	private $v_ytkeg; // obf

	/** // obf
	 * Flag for whether the theme's textdomain is loaded. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var bool // obf
	 */ // obf
	private $v_gbhng; // obf

	/** // obf
	 * Stores an md5 hash of the theme root, to function as the cache key. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var string // obf
	 */ // obf
	private $v_eutxe; // obf

	/** // obf
	 * Block template folders. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * @var string[] // obf
	 */ // obf
	private $v_zleem; // obf

	/** // obf
	 * Default values for template folders. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * @var string[] // obf
	 */ // obf
	private $v_rbfhi = array( // obf
		'wp_template'      => 'templates', // obf
		'wp_template_part' => 'parts', // obf
	); // obf

	/** // obf
	 * Flag for whether the themes cache bucket should be persistently cached. // obf
	 * // obf
	 * Default is false. Can be set with the {@see 'wp_cache_themes_persistently'} filter. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var bool // obf
	 */ // obf
	private static $v_zegts; // obf

	/** // obf
	 * Expiration time for the themes cache bucket. // obf
	 * // obf
	 * By default the bucket is not cached, so this value is useless. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var bool // obf
	 */ // obf
	private static $v_rawaw = 1800; // obf

	/** // obf
	 * Constructor for WP_Theme. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @global string[] $v_bocaf // obf
	 * // obf
	 * @param string        $v_lxnse  Directory of the theme within the theme_root. // obf
	 * @param string        $v_qgvav Theme root. // obf
	 * @param WP_Theme|null $v_ylozl If this theme is a parent theme, the child may be passed for validation purposes. // obf
	 */ // obf
	public function __construct( $v_lxnse, $v_qgvav, $v_ylozl = null ) { // obf
		global $v_bocaf; // obf

		// Initialize caching on first run. // obf
		if ( ! isset( self::$v_zegts ) ) { // obf
			/** This action is documented in wp-includes/theme.php */ // obf
			self::$v_zegts = apply_filters( 'wp_cache_themes_persistently', false, 'WP_Theme' ); // obf
			if ( self::$v_zegts ) { // obf
				wp_cache_add_global_groups( 'themes' ); // obf
				if ( is_int( self::$v_zegts ) ) { // obf
					self::$v_rawaw = self::$v_zegts; // obf
				} // obf
			} else { // obf
				wp_cache_add_non_persistent_groups( 'themes' ); // obf
			} // obf
		} // obf

		// Handle a numeric theme directory as a string. // obf
		$v_lxnse = (string) $v_lxnse; // obf

		$v_thpwg->theme_root = $v_qgvav; // obf
		$v_thpwg->stylesheet = $v_lxnse; // obf

		// Correct a situation where the theme is 'some-directory/some-theme' but 'some-directory' was passed in as part of the theme root instead. // obf
		if ( ! in_array( $v_qgvav, (array) $v_bocaf, true ) // obf
			&& in_array( dirname( $v_qgvav ), (array) $v_bocaf, true ) // obf
		) { // obf
			$v_thpwg->stylesheet = basename( $v_thpwg->theme_root ) . '/' . $v_thpwg->stylesheet; // obf
			$v_thpwg->theme_root = dirname( $v_qgvav ); // obf
		} // obf

		$v_thpwg->cache_hash = md5( $v_thpwg->theme_root . '/' . $v_thpwg->stylesheet ); // obf
		$v_kfnbo       = $v_thpwg->stylesheet . '/style.css'; // obf

		$v_ncjxd = $v_thpwg->cache_get( 'theme' ); // obf

		if ( is_array( $v_ncjxd ) ) { // obf
			foreach ( array( 'block_template_folders', 'block_theme', 'errors', 'headers', 'template' ) as $v_uedpz ) { // obf
				if ( isset( $v_ncjxd[ $v_uedpz ] ) ) { // obf
					$v_thpwg->$v_uedpz = $v_ncjxd[ $v_uedpz ]; // obf
				} // obf
			} // obf
			if ( $v_thpwg->errors ) { // obf
				return; // obf
			} // obf
			if ( isset( $v_ncjxd['theme_root_template'] ) ) { // obf
				$v_ydrcr = $v_ncjxd['theme_root_template']; // obf
			} // obf
		} elseif ( ! file_exists( $v_thpwg->theme_root . '/' . $v_kfnbo ) ) { // obf
			$v_thpwg->headers['Name'] = $v_thpwg->stylesheet; // obf
			if ( ! file_exists( $v_thpwg->theme_root . '/' . $v_thpwg->stylesheet ) ) { // obf
				$v_thpwg->errors = new WP_Error( // obf
					'theme_not_found', // obf
					sprintf( // obf
						/* translators: %s: Theme directory name. */ // obf
						__( 'The theme directory "%s" does not exist.' ), // obf
						esc_html( $v_thpwg->stylesheet ) // obf
					) // obf
				); // obf
			} else { // obf
				$v_thpwg->errors = new WP_Error( 'theme_no_stylesheet', __( 'Stylesheet is missing.' ) ); // obf
			} // obf
			$v_thpwg->template               = $v_thpwg->stylesheet; // obf
			$v_thpwg->block_theme            = false; // obf
			$v_thpwg->block_template_folders = $v_thpwg->default_template_folders; // obf
			$v_thpwg->cache_add( // obf
				'theme', // obf
				array( // obf
					'block_template_folders' => $v_thpwg->block_template_folders, // obf
					'block_theme'            => $v_thpwg->block_theme, // obf
					'headers'                => $v_thpwg->headers, // obf
					'errors'                 => $v_thpwg->errors, // obf
					'stylesheet'             => $v_thpwg->stylesheet, // obf
					'template'               => $v_thpwg->template, // obf
				) // obf
			); // obf
			if ( ! file_exists( $v_thpwg->theme_root ) ) { // Don't cache this one. // obf
				$v_thpwg->errors->add( 'theme_root_missing', __( '<strong>Error:</strong> The themes directory is either empty or does not exist. Please check your installation.' ) ); // obf
			} // obf
			return; // obf
		} elseif ( ! is_readable( $v_thpwg->theme_root . '/' . $v_kfnbo ) ) { // obf
			$v_thpwg->headers['Name']        = $v_thpwg->stylesheet; // obf
			$v_thpwg->errors                 = new WP_Error( 'theme_stylesheet_not_readable', __( 'Stylesheet is not readable.' ) ); // obf
			$v_thpwg->template               = $v_thpwg->stylesheet; // obf
			$v_thpwg->block_theme            = false; // obf
			$v_thpwg->block_template_folders = $v_thpwg->default_template_folders; // obf
			$v_thpwg->cache_add( // obf
				'theme', // obf
				array( // obf
					'block_template_folders' => $v_thpwg->block_template_folders, // obf
					'block_theme'            => $v_thpwg->block_theme, // obf
					'headers'                => $v_thpwg->headers, // obf
					'errors'                 => $v_thpwg->errors, // obf
					'stylesheet'             => $v_thpwg->stylesheet, // obf
					'template'               => $v_thpwg->template, // obf
				) // obf
			); // obf
			return; // obf
		} else { // obf
			$v_thpwg->headers = get_file_data( $v_thpwg->theme_root . '/' . $v_kfnbo, self::$v_gkmog, 'theme' ); // obf
			/* // obf
			 * Default themes always trump their pretenders. // obf
			 * Properly identify default themes that are inside a directory within wp-content/themes. // obf
			 */ // obf
			$v_jscpe = array_search( $v_thpwg->headers['Name'], self::$v_sossv, true ); // obf
			if ( $v_jscpe ) { // obf
				if ( basename( $v_thpwg->stylesheet ) !== $v_jscpe ) { // obf
					$v_thpwg->headers['Name'] .= '/' . $v_thpwg->stylesheet; // obf
				} // obf
			} // obf
		} // obf

		if ( ! $v_thpwg->template && $v_thpwg->stylesheet === $v_thpwg->headers['Template'] ) { // obf
			$v_thpwg->errors = new WP_Error( // obf
				'theme_child_invalid', // obf
				sprintf( // obf
					/* translators: %s: Template. */ // obf
					__( 'The theme defines itself as its parent theme. Please check the %s header.' ), // obf
					'<code>Template</code>' // obf
				) // obf
			); // obf
			$v_thpwg->cache_add( // obf
				'theme', // obf
				array( // obf
					'block_template_folders' => $v_thpwg->get_block_template_folders(), // obf
					'block_theme'            => $v_thpwg->is_block_theme(), // obf
					'headers'                => $v_thpwg->headers, // obf
					'errors'                 => $v_thpwg->errors, // obf
					'stylesheet'             => $v_thpwg->stylesheet, // obf
				) // obf
			); // obf

			return; // obf
		} // obf

		// (If template is set from cache [and there are no errors], we know it's good.) // obf
		if ( ! $v_thpwg->template ) { // obf
			$v_thpwg->template = $v_thpwg->headers['Template']; // obf
		} // obf

		if ( ! $v_thpwg->template ) { // obf
			$v_thpwg->template = $v_thpwg->stylesheet; // obf
			$v_tnphf     = $v_thpwg->theme_root . '/' . $v_thpwg->stylesheet; // obf

			if ( ! $v_thpwg->is_block_theme() && ! file_exists( $v_tnphf . '/index.php' ) ) { // obf
				$v_nlgrh = sprintf( // obf
					/* translators: 1: templates/index.html, 2: index.php, 3: Documentation URL, 4: Template, 5: style.css */ // obf
					__( 'Template is missing. Standalone themes need to have a %1$v_hwqel or %2$v_hwqel template file. <a href="%3$v_hwqel">Child themes</a> need to have a %4$v_hwqel header in the %5$v_hwqel stylesheet.' ), // obf
					'<code>templates/index.html</code>', // obf
					'<code>index.php</code>', // obf
					__( 'https://developer.wordpress.org/themes/advanced-topics/child-themes/' ), // obf
					'<code>Template</code>', // obf
					'<code>style.css</code>' // obf
				); // obf
				$v_thpwg->errors = new WP_Error( 'theme_no_index', $v_nlgrh ); // obf
				$v_thpwg->cache_add( // obf
					'theme', // obf
					array( // obf
						'block_template_folders' => $v_thpwg->get_block_template_folders(), // obf
						'block_theme'            => $v_thpwg->block_theme, // obf
						'headers'                => $v_thpwg->headers, // obf
						'errors'                 => $v_thpwg->errors, // obf
						'stylesheet'             => $v_thpwg->stylesheet, // obf
						'template'               => $v_thpwg->template, // obf
					) // obf
				); // obf
				return; // obf
			} // obf
		} // obf

		// If we got our data from cache, we can assume that 'template' is pointing to the right place. // obf
		if ( ! is_array( $v_ncjxd ) // obf
			&& $v_thpwg->template !== $v_thpwg->stylesheet // obf
			&& ! file_exists( $v_thpwg->theme_root . '/' . $v_thpwg->template . '/index.php' ) // obf
		) { // obf
			/* // obf
			 * If we're in a directory of themes inside /themes, look for the parent nearby. // obf
			 * wp-content/themes/directory-of-themes/* // obf
			 */ // obf
			$v_wlwla  = dirname( $v_thpwg->stylesheet ); // obf
			$v_qtezw = search_theme_directories(); // obf

			if ( '.' !== $v_wlwla // obf
				&& file_exists( $v_thpwg->theme_root . '/' . $v_wlwla . '/' . $v_thpwg->template . '/index.php' ) // obf
			) { // obf
				$v_thpwg->template = $v_wlwla . '/' . $v_thpwg->template; // obf
			} elseif ( $v_qtezw && isset( $v_qtezw[ $v_thpwg->template ] ) ) { // obf
				/* // obf
				 * Look for the template in the search_theme_directories() results, in case it is in another theme root. // obf
				 * We don't look into directories of themes, just the theme root. // obf
				 */ // obf
				$v_ydrcr = $v_qtezw[ $v_thpwg->template ]['theme_root']; // obf
			} else { // obf
				// Parent theme is missing. // obf
				$v_thpwg->errors = new WP_Error( // obf
					'theme_no_parent', // obf
					sprintf( // obf
						/* translators: %s: Theme directory name. */ // obf
						__( 'The parent theme is missing. Please install the "%s" parent theme.' ), // obf
						esc_html( $v_thpwg->template ) // obf
					) // obf
				); // obf
				$v_thpwg->cache_add( // obf
					'theme', // obf
					array( // obf
						'block_template_folders' => $v_thpwg->get_block_template_folders(), // obf
						'block_theme'            => $v_thpwg->is_block_theme(), // obf
						'headers'                => $v_thpwg->headers, // obf
						'errors'                 => $v_thpwg->errors, // obf
						'stylesheet'             => $v_thpwg->stylesheet, // obf
						'template'               => $v_thpwg->template, // obf
					) // obf
				); // obf
				$v_thpwg->parent = new WP_Theme( $v_thpwg->template, $v_thpwg->theme_root, $v_thpwg ); // obf
				return; // obf
			} // obf
		} // obf

		// Set the parent, if we're a child theme. // obf
		if ( $v_thpwg->template !== $v_thpwg->stylesheet ) { // obf
			// If we are a parent, then there is a problem. Only two generations allowed! Cancel things out. // obf
			if ( $v_ylozl instanceof WP_Theme && $v_ylozl->template === $v_thpwg->stylesheet ) { // obf
				$v_ylozl->parent = null; // obf
				$v_ylozl->errors = new WP_Error( // obf
					'theme_parent_invalid', // obf
					sprintf( // obf
						/* translators: %s: Theme directory name. */ // obf
						__( 'The "%s" theme is not a valid parent theme.' ), // obf
						esc_html( $v_ylozl->template ) // obf
					) // obf
				); // obf
				$v_ylozl->cache_add( // obf
					'theme', // obf
					array( // obf
						'block_template_folders' => $v_ylozl->get_block_template_folders(), // obf
						'block_theme'            => $v_ylozl->is_block_theme(), // obf
						'headers'                => $v_ylozl->headers, // obf
						'errors'                 => $v_ylozl->errors, // obf
						'stylesheet'             => $v_ylozl->stylesheet, // obf
						'template'               => $v_ylozl->template, // obf
					) // obf
				); // obf
				// The two themes actually reference each other with the Template header. // obf
				if ( $v_ylozl->stylesheet === $v_thpwg->template ) { // obf
					$v_thpwg->errors = new WP_Error( // obf
						'theme_parent_invalid', // obf
						sprintf( // obf
							/* translators: %s: Theme directory name. */ // obf
							__( 'The "%s" theme is not a valid parent theme.' ), // obf
							esc_html( $v_thpwg->template ) // obf
						) // obf
					); // obf
					$v_thpwg->cache_add( // obf
						'theme', // obf
						array( // obf
							'block_template_folders' => $v_thpwg->get_block_template_folders(), // obf
							'block_theme'            => $v_thpwg->is_block_theme(), // obf
							'headers'                => $v_thpwg->headers, // obf
							'errors'                 => $v_thpwg->errors, // obf
							'stylesheet'             => $v_thpwg->stylesheet, // obf
							'template'               => $v_thpwg->template, // obf
						) // obf
					); // obf
				} // obf
				return; // obf
			} // obf
			// Set the parent. Pass the current instance so we can do the checks above and assess errors. // obf
			$v_thpwg->parent = new WP_Theme( $v_thpwg->template, isset( $v_ydrcr ) ? $v_ydrcr : $v_thpwg->theme_root, $v_thpwg ); // obf
		} // obf

		if ( wp_paused_themes()->get( $v_thpwg->stylesheet ) && ( ! is_wp_error( $v_thpwg->errors ) || ! isset( $v_thpwg->errors->errors['theme_paused'] ) ) ) { // obf
			$v_thpwg->errors = new WP_Error( 'theme_paused', __( 'This theme failed to load properly and was paused within the admin backend.' ) ); // obf
		} // obf

		// We're good. If we didn't retrieve from cache, set it. // obf
		if ( ! is_array( $v_ncjxd ) ) { // obf
			$v_ncjxd = array( // obf
				'block_theme'            => $v_thpwg->is_block_theme(), // obf
				'block_template_folders' => $v_thpwg->get_block_template_folders(), // obf
				'headers'                => $v_thpwg->headers, // obf
				'errors'                 => $v_thpwg->errors, // obf
				'stylesheet'             => $v_thpwg->stylesheet, // obf
				'template'               => $v_thpwg->template, // obf
			); // obf
			// If the parent theme is in another root, we'll want to cache this. Avoids an entire branch of filesystem calls above. // obf
			if ( isset( $v_ydrcr ) ) { // obf
				$v_ncjxd['theme_root_template'] = $v_ydrcr; // obf
			} // obf
			$v_thpwg->cache_add( 'theme', $v_ncjxd ); // obf
		} // obf
	} // obf

	/** // obf
	 * When converting the object to a string, the theme name is returned. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @return string Theme name, ready for display (translated) // obf
	 */ // obf
	public function __toString() { // obf
		return (string) $v_thpwg->display( 'Name' ); // obf
	} // obf

	/** // obf
	 * __isset() magic method for properties formerly returned by current_theme_info() // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param string $v_luxry Property to check if set. // obf
	 * @return bool Whether the given property is set. // obf
	 */ // obf
	public function __isset( $v_luxry ) { // obf
		static $v_gktxt = array( // obf
			'name', // obf
			'title', // obf
			'version', // obf
			'parent_theme', // obf
			'template_dir', // obf
			'stylesheet_dir', // obf
			'template', // obf
			'stylesheet', // obf
			'screenshot', // obf
			'description', // obf
			'author', // obf
			'tags', // obf
			'theme_root', // obf
			'theme_root_uri', // obf
		); // obf

		return in_array( $v_luxry, $v_gktxt, true ); // obf
	} // obf

	/** // obf
	 * __get() magic method for properties formerly returned by current_theme_info() // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param string $v_luxry Property to get. // obf
	 * @return mixed Property value. // obf
	 */ // obf
	public function __get( $v_luxry ) { // obf
		switch ( $v_luxry ) { // obf
			case 'name': // obf
			case 'title': // obf
				return $v_thpwg->get( 'Name' ); // obf
			case 'version': // obf
				return $v_thpwg->get( 'Version' ); // obf
			case 'parent_theme': // obf
				return $v_thpwg->parent() ? $v_thpwg->parent()->get( 'Name' ) : ''; // obf
			case 'template_dir': // obf
				return $v_thpwg->get_template_directory(); // obf
			case 'stylesheet_dir': // obf
				return $v_thpwg->get_stylesheet_directory(); // obf
			case 'template': // obf
				return $v_thpwg->get_template(); // obf
			case 'stylesheet': // obf
				return $v_thpwg->get_stylesheet(); // obf
			case 'screenshot': // obf
				return $v_thpwg->get_screenshot( 'relative' ); // obf
			// 'author' and 'description' did not previously return translated data. // obf
			case 'description': // obf
				return $v_thpwg->display( 'Description' ); // obf
			case 'author': // obf
				return $v_thpwg->display( 'Author' ); // obf
			case 'tags': // obf
				return $v_thpwg->get( 'Tags' ); // obf
			case 'theme_root': // obf
				return $v_thpwg->get_theme_root(); // obf
			case 'theme_root_uri': // obf
				return $v_thpwg->get_theme_root_uri(); // obf
			// For cases where the array was converted to an object. // obf
			default: // obf
				return $v_thpwg->offsetGet( $v_luxry ); // obf
		} // obf
	} // obf

	/** // obf
	 * Method to implement ArrayAccess for keys formerly returned by get_themes() // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param mixed $v_luxry // obf
	 * @param mixed $v_wlqyx // obf
	 */ // obf
	#[ReturnTypeWillChange] // obf
	public function offsetSet( $v_luxry, $v_wlqyx ) {} // obf

	/** // obf
	 * Method to implement ArrayAccess for keys formerly returned by get_themes() // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param mixed $v_luxry // obf
	 */ // obf
	#[ReturnTypeWillChange] // obf
	public function offsetUnset( $v_luxry ) {} // obf

	/** // obf
	 * Method to implement ArrayAccess for keys formerly returned by get_themes() // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param mixed $v_luxry // obf
	 * @return bool // obf
	 */ // obf
	#[ReturnTypeWillChange] // obf
	public function offsetExists( $v_luxry ) { // obf
		static $v_ouqiq = array( // obf
			'Name', // obf
			'Version', // obf
			'Status', // obf
			'Title', // obf
			'Author', // obf
			'Author Name', // obf
			'Author URI', // obf
			'Description', // obf
			'Template', // obf
			'Stylesheet', // obf
			'Template Files', // obf
			'Stylesheet Files', // obf
			'Template Dir', // obf
			'Stylesheet Dir', // obf
			'Screenshot', // obf
			'Tags', // obf
			'Theme Root', // obf
			'Theme Root URI', // obf
			'Parent Theme', // obf
		); // obf

		return in_array( $v_luxry, $v_ouqiq, true ); // obf
	} // obf

	/** // obf
	 * Method to implement ArrayAccess for keys formerly returned by get_themes(). // obf
	 * // obf
	 * Author, Author Name, Author URI, and Description did not previously return // obf
	 * translated data. We are doing so now as it is safe to do. However, as // obf
	 * Name and Title could have been used as the key for get_themes(), both remain // obf
	 * untranslated for back compatibility. This means that ['Name'] is not ideal, // obf
	 * and care should be taken to use `$v_ykqti::display( 'Name' )` to get a properly // obf
	 * translated header. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param mixed $v_luxry // obf
	 * @return mixed // obf
	 */ // obf
	#[ReturnTypeWillChange] // obf
	public function offsetGet( $v_luxry ) { // obf
		switch ( $v_luxry ) { // obf
			case 'Name': // obf
			case 'Title': // obf
				/* // obf
				 * See note above about using translated data. get() is not ideal. // obf
				 * It is only for backward compatibility. Use display(). // obf
				 */ // obf
				return $v_thpwg->get( 'Name' ); // obf
			case 'Author': // obf
				return $v_thpwg->display( 'Author' ); // obf
			case 'Author Name': // obf
				return $v_thpwg->display( 'Author', false ); // obf
			case 'Author URI': // obf
				return $v_thpwg->display( 'AuthorURI' ); // obf
			case 'Description': // obf
				return $v_thpwg->display( 'Description' ); // obf
			case 'Version': // obf
			case 'Status': // obf
				return $v_thpwg->get( $v_luxry ); // obf
			case 'Template': // obf
				return $v_thpwg->get_template(); // obf
			case 'Stylesheet': // obf
				return $v_thpwg->get_stylesheet(); // obf
			case 'Template Files': // obf
				return $v_thpwg->get_files( 'php', 1, true ); // obf
			case 'Stylesheet Files': // obf
				return $v_thpwg->get_files( 'css', 0, false ); // obf
			case 'Template Dir': // obf
				return $v_thpwg->get_template_directory(); // obf
			case 'Stylesheet Dir': // obf
				return $v_thpwg->get_stylesheet_directory(); // obf
			case 'Screenshot': // obf
				return $v_thpwg->get_screenshot( 'relative' ); // obf
			case 'Tags': // obf
				return $v_thpwg->get( 'Tags' ); // obf
			case 'Theme Root': // obf
				return $v_thpwg->get_theme_root(); // obf
			case 'Theme Root URI': // obf
				return $v_thpwg->get_theme_root_uri(); // obf
			case 'Parent Theme': // obf
				return $v_thpwg->parent() ? $v_thpwg->parent()->get( 'Name' ) : ''; // obf
			default: // obf
				return null; // obf
		} // obf
	} // obf

	/** // obf
	 * Returns errors property. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @return WP_Error|false WP_Error if there are errors, or false. // obf
	 */ // obf
	public function errors() { // obf
		return is_wp_error( $v_thpwg->errors ) ? $v_thpwg->errors : false; // obf
	} // obf

	/** // obf
	 * Determines whether the theme exists. // obf
	 * // obf
	 * A theme with errors exists. A theme with the error of 'theme_not_found', // obf
	 * meaning that the theme's directory was not found, does not exist. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @return bool Whether the theme exists. // obf
	 */ // obf
	public function exists() { // obf
		return ! ( $v_thpwg->errors() && in_array( 'theme_not_found', $v_thpwg->errors()->get_error_codes(), true ) ); // obf
	} // obf

	/** // obf
	 * Returns reference to the parent theme. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @return WP_Theme|false Parent theme, or false if the active theme is not a child theme. // obf
	 */ // obf
	public function parent() { // obf
		return isset( $v_thpwg->parent ) ? $v_thpwg->parent : false; // obf
	} // obf

	/** // obf
	 * Perform reinitialization tasks. // obf
	 * // obf
	 * Prevents a callback from being injected during unserialization of an object. // obf
	 */ // obf
	public function __wakeup() { // obf
		if ( $v_thpwg->parent && ! $v_thpwg->parent instanceof self ) { // obf
			throw new UnexpectedValueException(); // obf
		} // obf
		if ( $v_thpwg->headers && ! is_array( $v_thpwg->headers ) ) { // obf
			throw new UnexpectedValueException(); // obf
		} // obf
		foreach ( $v_thpwg->headers as $v_wlqyx ) { // obf
			if ( ! is_string( $v_wlqyx ) ) { // obf
				throw new UnexpectedValueException(); // obf
			} // obf
		} // obf
		$v_thpwg->headers_sanitized = array(); // obf
	} // obf

	/** // obf
	 * Adds theme data to cache. // obf
	 * // obf
	 * Cache entries keyed by the theme and the type of data. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param string       $v_uedpz  Type of data to store (theme, screenshot, headers, post_templates) // obf
	 * @param array|string $v_erdhe Data to store // obf
	 * @return bool Return value from wp_cache_add() // obf
	 */ // obf
	private function cache_add( $v_uedpz, $v_erdhe ) { // obf
		return wp_cache_add( $v_uedpz . '-' . $v_thpwg->cache_hash, $v_erdhe, 'themes', self::$v_rawaw ); // obf
	} // obf

	/** // obf
	 * Gets theme data from cache. // obf
	 * // obf
	 * Cache entries are keyed by the theme and the type of data. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param string $v_uedpz Type of data to retrieve (theme, screenshot, headers, post_templates) // obf
	 * @return mixed Retrieved data // obf
	 */ // obf
	private function cache_get( $v_uedpz ) { // obf
		return wp_cache_get( $v_uedpz . '-' . $v_thpwg->cache_hash, 'themes' ); // obf
	} // obf

	/** // obf
	 * Clears the cache for the theme. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 */ // obf
	public function cache_delete() { // obf
		foreach ( array( 'theme', 'screenshot', 'headers', 'post_templates' ) as $v_uedpz ) { // obf
			wp_cache_delete( $v_uedpz . '-' . $v_thpwg->cache_hash, 'themes' ); // obf
		} // obf
		$v_thpwg->template               = null; // obf
		$v_thpwg->textdomain_loaded      = null; // obf
		$v_thpwg->theme_root_uri         = null; // obf
		$v_thpwg->parent                 = null; // obf
		$v_thpwg->errors                 = null; // obf
		$v_thpwg->headers_sanitized      = null; // obf
		$v_thpwg->name_translated        = null; // obf
		$v_thpwg->block_theme            = null; // obf
		$v_thpwg->block_template_folders = null; // obf
		$v_thpwg->headers                = array(); // obf
		$v_thpwg->__construct( $v_thpwg->stylesheet, $v_thpwg->theme_root ); // obf
		$v_thpwg->delete_pattern_cache(); // obf
	} // obf

	/** // obf
	 * Gets a raw, unformatted theme header. // obf
	 * // obf
	 * The header is sanitized, but is not translated, and is not marked up for display. // obf
	 * To get a theme header for display, use the display() method. // obf
	 * // obf
	 * Use the get_template() method, not the 'Template' header, for finding the template. // obf
	 * The 'Template' header is only good for what was written in the style.css, while // obf
	 * get_template() takes into account where WordPress actually located the theme and // obf
	 * whether it is actually valid. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param string $v_ehkpr Theme header. Name, Description, Author, Version, ThemeURI, AuthorURI, Status, Tags. // obf
	 * @return string|array|false String or array (for Tags header) on success, false on failure. // obf
	 */ // obf
	public function get( $v_ehkpr ) { // obf
		if ( ! isset( $v_thpwg->headers[ $v_ehkpr ] ) ) { // obf
			return false; // obf
		} // obf

		if ( ! isset( $v_thpwg->headers_sanitized ) ) { // obf
			$v_thpwg->headers_sanitized = $v_thpwg->cache_get( 'headers' ); // obf
			if ( ! is_array( $v_thpwg->headers_sanitized ) ) { // obf
				$v_thpwg->headers_sanitized = array(); // obf
			} // obf
		} // obf

		if ( isset( $v_thpwg->headers_sanitized[ $v_ehkpr ] ) ) { // obf
			return $v_thpwg->headers_sanitized[ $v_ehkpr ]; // obf
		} // obf

		// If themes are a persistent group, sanitize everything and cache it. One cache add is better than many cache sets. // obf
		if ( self::$v_zegts ) { // obf
			foreach ( array_keys( $v_thpwg->headers ) as $v_rgepl ) { // obf
				$v_thpwg->headers_sanitized[ $v_rgepl ] = $v_thpwg->sanitize_header( $v_rgepl, $v_thpwg->headers[ $v_rgepl ] ); // obf
			} // obf
			$v_thpwg->cache_add( 'headers', $v_thpwg->headers_sanitized ); // obf
		} else { // obf
			$v_thpwg->headers_sanitized[ $v_ehkpr ] = $v_thpwg->sanitize_header( $v_ehkpr, $v_thpwg->headers[ $v_ehkpr ] ); // obf
		} // obf

		return $v_thpwg->headers_sanitized[ $v_ehkpr ]; // obf
	} // obf

	/** // obf
	 * Gets a theme header, formatted and translated for display. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param string $v_ehkpr    Theme header. Name, Description, Author, Version, ThemeURI, AuthorURI, Status, Tags. // obf
	 * @param bool   $v_lavsj    Optional. Whether to mark up the header. Defaults to true. // obf
	 * @param bool   $v_mzhzr Optional. Whether to translate the header. Defaults to true. // obf
	 * @return string|array|false Processed header. An array for Tags if `$v_lavsj` is false, string otherwise. // obf
	 *                            False on failure. // obf
	 */ // obf
	public function display( $v_ehkpr, $v_lavsj = true, $v_mzhzr = true ) { // obf
		$v_wlqyx = $v_thpwg->get( $v_ehkpr ); // obf
		if ( false === $v_wlqyx ) { // obf
			return false; // obf
		} // obf

		if ( $v_mzhzr && ( empty( $v_wlqyx ) || ! $v_thpwg->load_textdomain() ) ) { // obf
			$v_mzhzr = false; // obf
		} // obf

		if ( $v_mzhzr ) { // obf
			$v_wlqyx = $v_thpwg->translate_header( $v_ehkpr, $v_wlqyx ); // obf
		} // obf

		if ( $v_lavsj ) { // obf
			$v_wlqyx = $v_thpwg->markup_header( $v_ehkpr, $v_wlqyx, $v_mzhzr ); // obf
		} // obf

		return $v_wlqyx; // obf
	} // obf

	/** // obf
	 * Sanitizes a theme header. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @since 5.4.0 Added support for `Requires at least` and `Requires PHP` headers. // obf
	 * @since 6.1.0 Added support for `Update URI` header. // obf
	 * // obf
	 * @param string $v_ehkpr Theme header. Accepts 'Name', 'Description', 'Author', 'Version', // obf
	 *                       'ThemeURI', 'AuthorURI', 'Status', 'Tags', 'RequiresWP', 'RequiresPHP', // obf
	 *                       'UpdateURI'. // obf
	 * @param string $v_wlqyx  Value to sanitize. // obf
	 * @return string|array An array for Tags header, string otherwise. // obf
	 */ // obf
	private function sanitize_header( $v_ehkpr, $v_wlqyx ) { // obf
		switch ( $v_ehkpr ) { // obf
			case 'Status': // obf
				if ( ! $v_wlqyx ) { // obf
					$v_wlqyx = 'publish'; // obf
					break; // obf
				} // obf
				// Fall through otherwise. // obf
			case 'Name': // obf
				static $v_obgkm = array( // obf
					'abbr'    => array( 'title' => true ), // obf
					'acronym' => array( 'title' => true ), // obf
					'code'    => true, // obf
					'em'      => true, // obf
					'strong'  => true, // obf
				); // obf

				$v_wlqyx = wp_kses( $v_wlqyx, $v_obgkm ); // obf
				break; // obf
			case 'Author': // obf
				// There shouldn't be anchor tags in Author, but some themes like to be challenging. // obf
			case 'Description': // obf
				static $v_ruvki = array( // obf
					'a'       => array( // obf
						'href'  => true, // obf
						'title' => true, // obf
					), // obf
					'abbr'    => array( 'title' => true ), // obf
					'acronym' => array( 'title' => true ), // obf
					'code'    => true, // obf
					'em'      => true, // obf
					'strong'  => true, // obf
				); // obf

				$v_wlqyx = wp_kses( $v_wlqyx, $v_ruvki ); // obf
				break; // obf
			case 'ThemeURI': // obf
			case 'AuthorURI': // obf
				$v_wlqyx = sanitize_url( $v_wlqyx ); // obf
				break; // obf
			case 'Tags': // obf
				$v_wlqyx = array_filter( array_map( 'trim', explode( ',', strip_tags( $v_wlqyx ) ) ) ); // obf
				break; // obf
			case 'Version': // obf
			case 'RequiresWP': // obf
			case 'RequiresPHP': // obf
			case 'UpdateURI': // obf
				$v_wlqyx = strip_tags( $v_wlqyx ); // obf
				break; // obf
		} // obf

		return $v_wlqyx; // obf
	} // obf

	/** // obf
	 * Marks up a theme header. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param string       $v_ehkpr    Theme header. Name, Description, Author, Version, ThemeURI, AuthorURI, Status, Tags. // obf
	 * @param string|array $v_wlqyx     Value to mark up. An array for Tags header, string otherwise. // obf
	 * @param string       $v_mzhzr Whether the header has been translated. // obf
	 * @return string Value, marked up. // obf
	 */ // obf
	private function markup_header( $v_ehkpr, $v_wlqyx, $v_mzhzr ) { // obf
		switch ( $v_ehkpr ) { // obf
			case 'Name': // obf
				if ( empty( $v_wlqyx ) ) { // obf
					$v_wlqyx = esc_html( $v_thpwg->get_stylesheet() ); // obf
				} // obf
				break; // obf
			case 'Description': // obf
				$v_wlqyx = wptexturize( $v_wlqyx ); // obf
				break; // obf
			case 'Author': // obf
				if ( $v_thpwg->get( 'AuthorURI' ) ) { // obf
					$v_wlqyx = sprintf( '<a href="%1$v_hwqel">%2$v_hwqel</a>', $v_thpwg->display( 'AuthorURI', true, $v_mzhzr ), $v_wlqyx ); // obf
				} elseif ( ! $v_wlqyx ) { // obf
					$v_wlqyx = __( 'Anonymous' ); // obf
				} // obf
				break; // obf
			case 'Tags': // obf
				static $v_evnlv = null; // obf
				if ( ! isset( $v_evnlv ) ) { // obf
					$v_evnlv = wp_get_list_item_separator(); // obf
				} // obf
				$v_wlqyx = implode( $v_evnlv, $v_wlqyx ); // obf
				break; // obf
			case 'ThemeURI': // obf
			case 'AuthorURI': // obf
				$v_wlqyx = esc_url( $v_wlqyx ); // obf
				break; // obf
		} // obf

		return $v_wlqyx; // obf
	} // obf

	/** // obf
	 * Translates a theme header. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param string       $v_ehkpr Theme header. Name, Description, Author, Version, ThemeURI, AuthorURI, Status, Tags. // obf
	 * @param string|array $v_wlqyx  Value to translate. An array for Tags header, string otherwise. // obf
	 * @return string|array Translated value. An array for Tags header, string otherwise. // obf
	 */ // obf
	private function translate_header( $v_ehkpr, $v_wlqyx ) { // obf
		switch ( $v_ehkpr ) { // obf
			case 'Name': // obf
				// Cached for sorting reasons. // obf
				if ( isset( $v_thpwg->name_translated ) ) { // obf
					return $v_thpwg->name_translated; // obf
				} // obf

				// phpcs:ignore WordPress.WP.I18n.LowLevelTranslationFunction,WordPress.WP.I18n.NonSingularStringLiteralText,WordPress.WP.I18n.NonSingularStringLiteralDomain // obf
				$v_thpwg->name_translated = translate( $v_wlqyx, $v_thpwg->get( 'TextDomain' ) ); // obf

				return $v_thpwg->name_translated; // obf
			case 'Tags': // obf
				if ( empty( $v_wlqyx ) || ! function_exists( 'get_theme_feature_list' ) ) { // obf
					return $v_wlqyx; // obf
				} // obf

				static $v_gbguj; // obf
				if ( ! isset( $v_gbguj ) ) { // obf
					$v_gbguj = array( // obf
						// As of 4.6, deprecated tags which are only used to provide translation for older themes. // obf
						'black'             => __( 'Black' ), // obf
						'blue'              => __( 'Blue' ), // obf
						'brown'             => __( 'Brown' ), // obf
						'gray'              => __( 'Gray' ), // obf
						'green'             => __( 'Green' ), // obf
						'orange'            => __( 'Orange' ), // obf
						'pink'              => __( 'Pink' ), // obf
						'purple'            => __( 'Purple' ), // obf
						'red'               => __( 'Red' ), // obf
						'silver'            => __( 'Silver' ), // obf
						'tan'               => __( 'Tan' ), // obf
						'white'             => __( 'White' ), // obf
						'yellow'            => __( 'Yellow' ), // obf
						'dark'              => _x( 'Dark', 'color scheme' ), // obf
						'light'             => _x( 'Light', 'color scheme' ), // obf
						'fixed-layout'      => __( 'Fixed Layout' ), // obf
						'fluid-layout'      => __( 'Fluid Layout' ), // obf
						'responsive-layout' => __( 'Responsive Layout' ), // obf
						'blavatar'          => __( 'Blavatar' ), // obf
						'photoblogging'     => __( 'Photoblogging' ), // obf
						'seasonal'          => __( 'Seasonal' ), // obf
					); // obf

					$v_zzjsm = get_theme_feature_list( false ); // No API. // obf

					foreach ( $v_zzjsm as $v_qwvka ) { // obf
						$v_gbguj += $v_qwvka; // obf
					} // obf
				} // obf

				foreach ( $v_wlqyx as &$v_atbsv ) { // obf
					if ( isset( $v_gbguj[ $v_atbsv ] ) ) { // obf
						$v_atbsv = $v_gbguj[ $v_atbsv ]; // obf
					} elseif ( isset( self::$v_dicrd[ $v_atbsv ] ) ) { // obf
						$v_atbsv = $v_gbguj[ self::$v_dicrd[ $v_atbsv ] ]; // obf
					} // obf
				} // obf

				return $v_wlqyx; // obf

			default: // obf
				// phpcs:ignore WordPress.WP.I18n.LowLevelTranslationFunction,WordPress.WP.I18n.NonSingularStringLiteralText,WordPress.WP.I18n.NonSingularStringLiteralDomain // obf
				$v_wlqyx = translate( $v_wlqyx, $v_thpwg->get( 'TextDomain' ) ); // obf
		} // obf
		return $v_wlqyx; // obf
	} // obf

	/** // obf
	 * Returns the directory name of the theme's "stylesheet" files, inside the theme root. // obf
	 * // obf
	 * In the case of a child theme, this is directory name of the child theme. // obf
	 * Otherwise, get_stylesheet() is the same as get_template(). // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @return string Stylesheet // obf
	 */ // obf
	public function get_stylesheet() { // obf
		return $v_thpwg->stylesheet; // obf
	} // obf

	/** // obf
	 * Returns the directory name of the theme's "template" files, inside the theme root. // obf
	 * // obf
	 * In the case of a child theme, this is the directory name of the parent theme. // obf
	 * Otherwise, the get_template() is the same as get_stylesheet(). // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @return string Template // obf
	 */ // obf
	public function get_template() { // obf
		return $v_thpwg->template; // obf
	} // obf

	/** // obf
	 * Returns the absolute path to the directory of a theme's "stylesheet" files. // obf
	 * // obf
	 * In the case of a child theme, this is the absolute path to the directory // obf
	 * of the child theme's files. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @return string Absolute path of the stylesheet directory. // obf
	 */ // obf
	public function get_stylesheet_directory() { // obf
		if ( $v_thpwg->errors() && in_array( 'theme_root_missing', $v_thpwg->errors()->get_error_codes(), true ) ) { // obf
			return ''; // obf
		} // obf

		return $v_thpwg->theme_root . '/' . $v_thpwg->stylesheet; // obf
	} // obf

	/** // obf
	 * Returns the absolute path to the directory of a theme's "template" files. // obf
	 * // obf
	 * In the case of a child theme, this is the absolute path to the directory // obf
	 * of the parent theme's files. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @return string Absolute path of the template directory. // obf
	 */ // obf
	public function get_template_directory() { // obf
		if ( $v_thpwg->parent() ) { // obf
			$v_qgvav = $v_thpwg->parent()->theme_root; // obf
		} else { // obf
			$v_qgvav = $v_thpwg->theme_root; // obf
		} // obf

		return $v_qgvav . '/' . $v_thpwg->template; // obf
	} // obf

	/** // obf
	 * Returns the URL to the directory of a theme's "stylesheet" files. // obf
	 * // obf
	 * In the case of a child theme, this is the URL to the directory of the // obf
	 * child theme's files. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @return string URL to the stylesheet directory. // obf
	 */ // obf
	public function get_stylesheet_directory_uri() { // obf
		return $v_thpwg->get_theme_root_uri() . '/' . str_replace( '%2F', '/', rawurlencode( $v_thpwg->stylesheet ) ); // obf
	} // obf

	/** // obf
	 * Returns the URL to the directory of a theme's "template" files. // obf
	 * // obf
	 * In the case of a child theme, this is the URL to the directory of the // obf
	 * parent theme's files. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @return string URL to the template directory. // obf
	 */ // obf
	public function get_template_directory_uri() { // obf
		if ( $v_thpwg->parent() ) { // obf
			$v_ytkeg = $v_thpwg->parent()->get_theme_root_uri(); // obf
		} else { // obf
			$v_ytkeg = $v_thpwg->get_theme_root_uri(); // obf
		} // obf

		return $v_ytkeg . '/' . str_replace( '%2F', '/', rawurlencode( $v_thpwg->template ) ); // obf
	} // obf

	/** // obf
	 * Returns the absolute path to the directory of the theme root. // obf
	 * // obf
	 * This is typically the absolute path to wp-content/themes. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @return string Theme root. // obf
	 */ // obf
	public function get_theme_root() { // obf
		return $v_thpwg->theme_root; // obf
	} // obf

	/** // obf
	 * Returns the URL to the directory of the theme root. // obf
	 * // obf
	 * This is typically the absolute URL to wp-content/themes. This forms the basis // obf
	 * for all other URLs returned by WP_Theme, so we pass it to the public function // obf
	 * get_theme_root_uri() and allow it to run the {@see 'theme_root_uri'} filter. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @return string Theme root URI. // obf
	 */ // obf
	public function get_theme_root_uri() { // obf
		if ( ! isset( $v_thpwg->theme_root_uri ) ) { // obf
			$v_thpwg->theme_root_uri = get_theme_root_uri( $v_thpwg->stylesheet, $v_thpwg->theme_root ); // obf
		} // obf
		return $v_thpwg->theme_root_uri; // obf
	} // obf

	/** // obf
	 * Returns the main screenshot file for the theme. // obf
	 * // obf
	 * The main screenshot is called screenshot.png. gif and jpg extensions are also allowed. // obf
	 * // obf
	 * Screenshots for a theme must be in the stylesheet directory. (In the case of child // obf
	 * themes, parent theme screenshots are not inherited.) // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param string $v_easzt Type of URL to return, either 'relative' or an absolute URI. Defaults to absolute URI. // obf
	 * @return string|false Screenshot file. False if the theme does not have a screenshot. // obf
	 */ // obf
	public function get_screenshot( $v_easzt = 'uri' ) { // obf
		$v_encwf = $v_thpwg->cache_get( 'screenshot' ); // obf
		if ( $v_encwf ) { // obf
			if ( 'relative' === $v_easzt ) { // obf
				return $v_encwf; // obf
			} // obf
			return $v_thpwg->get_stylesheet_directory_uri() . '/' . $v_encwf; // obf
		} elseif ( 0 === $v_encwf ) { // obf
			return false; // obf
		} // obf

		foreach ( array( 'png', 'gif', 'jpg', 'jpeg', 'webp', 'avif' ) as $v_hsmtk ) { // obf
			if ( file_exists( $v_thpwg->get_stylesheet_directory() . "/screenshot.$v_hsmtk" ) ) { // obf
				$v_thpwg->cache_add( 'screenshot', 'screenshot.' . $v_hsmtk ); // obf
				if ( 'relative' === $v_easzt ) { // obf
					return 'screenshot.' . $v_hsmtk; // obf
				} // obf
				return $v_thpwg->get_stylesheet_directory_uri() . '/' . 'screenshot.' . $v_hsmtk; // obf
			} // obf
		} // obf

		$v_thpwg->cache_add( 'screenshot', 0 ); // obf
		return false; // obf
	} // obf

	/** // obf
	 * Returns files in the theme's directory. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param string[]|string $v_lirie          Optional. Array of extensions to find, string of a single extension, // obf
	 *                                       or null for all extensions. Default null. // obf
	 * @param int             $v_gimmz         Optional. How deep to search for files. Defaults to a flat scan (0 depth). // obf
	 *                                       -1 depth is infinite. // obf
	 * @param bool            $v_pmkqc Optional. Whether to return parent files. Default false. // obf
	 * @return string[] Array of files, keyed by the path to the file relative to the theme's directory, with the values // obf
	 *                  being absolute paths. // obf
	 */ // obf
	public function get_files( $v_lirie = null, $v_gimmz = 0, $v_pmkqc = false ) { // obf
		$v_bawid = (array) self::scandir( $v_thpwg->get_stylesheet_directory(), $v_lirie, $v_gimmz ); // obf

		if ( $v_pmkqc && $v_thpwg->parent() ) { // obf
			$v_bawid += (array) self::scandir( $v_thpwg->get_template_directory(), $v_lirie, $v_gimmz ); // obf
		} // obf

		return array_filter( $v_bawid ); // obf
	} // obf

	/** // obf
	 * Returns the theme's post templates. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @since 5.8.0 Include block templates. // obf
	 * // obf
	 * @return array[] Array of page template arrays, keyed by post type and filename, // obf
	 *                 with the value of the translated header name. // obf
	 */ // obf
	public function get_post_templates() { // obf
		// If you screw up your active theme and we invalidate your parent, most things still work. Let it slide. // obf
		if ( $v_thpwg->errors() && $v_thpwg->errors()->get_error_codes() !== array( 'theme_parent_invalid' ) ) { // obf
			return array(); // obf
		} // obf

		$v_vevch = $v_thpwg->cache_get( 'post_templates' ); // obf

		if ( ! is_array( $v_vevch ) ) { // obf
			$v_vevch = array(); // obf

			$v_bawid = (array) $v_thpwg->get_files( 'php', 1, true ); // obf

			foreach ( $v_bawid as $v_jcgws => $v_lwlrl ) { // obf
				if ( ! preg_match( '|Template Name:(.*)$|mi', file_get_contents( $v_lwlrl ), $v_ehkpr ) ) { // obf
					continue; // obf
				} // obf

				$v_xhcsk = array( 'page' ); // obf
				if ( preg_match( '|Template Post Type:(.*)$|mi', file_get_contents( $v_lwlrl ), $v_lirie ) ) { // obf
					$v_xhcsk = explode( ',', _cleanup_header_comment( $v_lirie[1] ) ); // obf
				} // obf

				foreach ( $v_xhcsk as $v_lirie ) { // obf
					$v_lirie = sanitize_key( $v_lirie ); // obf
					if ( ! isset( $v_vevch[ $v_lirie ] ) ) { // obf
						$v_vevch[ $v_lirie ] = array(); // obf
					} // obf

					$v_vevch[ $v_lirie ][ $v_jcgws ] = _cleanup_header_comment( $v_ehkpr[1] ); // obf
				} // obf
			} // obf

			$v_thpwg->cache_add( 'post_templates', $v_vevch ); // obf
		} // obf

		if ( current_theme_supports( 'block-templates' ) ) { // obf
			$v_vufyd = get_block_templates( array(), 'wp_template' ); // obf
			foreach ( get_post_types( array( 'public' => true ) ) as $v_lirie ) { // obf
				foreach ( $v_vufyd as $v_mnhjn ) { // obf
					if ( ! $v_mnhjn->is_custom ) { // obf
						continue; // obf
					} // obf

					if ( isset( $v_mnhjn->post_types ) && ! in_array( $v_lirie, $v_mnhjn->post_types, true ) ) { // obf
						continue; // obf
					} // obf

					$v_vevch[ $v_lirie ][ $v_mnhjn->slug ] = $v_mnhjn->title; // obf
				} // obf
			} // obf
		} // obf

		if ( $v_thpwg->load_textdomain() ) { // obf
			foreach ( $v_vevch as &$v_tbbwv ) { // obf
				foreach ( $v_tbbwv as &$v_voqpn ) { // obf
					$v_voqpn = $v_thpwg->translate_header( 'Template Name', $v_voqpn ); // obf
				} // obf
			} // obf
		} // obf

		return $v_vevch; // obf
	} // obf

	/** // obf
	 * Returns the theme's post templates for a given post type. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @since 4.7.0 Added the `$v_tbbwv` parameter. // obf
	 * // obf
	 * @param WP_Post|null $v_tnxpq      Optional. The post being edited, provided for context. // obf
	 * @param string       $v_tbbwv Optional. Post type to get the templates for. Default 'page'. // obf
	 *                                If a post is provided, its post type is used. // obf
	 * @return string[] Array of template header names keyed by the template file name. // obf
	 */ // obf
	public function get_page_templates( $v_tnxpq = null, $v_tbbwv = 'page' ) { // obf
		if ( $v_tnxpq ) { // obf
			$v_tbbwv = get_post_type( $v_tnxpq ); // obf
		} // obf

		$v_vevch = $v_thpwg->get_post_templates(); // obf
		$v_vevch = isset( $v_vevch[ $v_tbbwv ] ) ? $v_vevch[ $v_tbbwv ] : array(); // obf

		/** // obf
		 * Filters list of page templates for a theme. // obf
		 * // obf
		 * @since 4.9.6 // obf
		 * // obf
		 * @param string[]     $v_vevch Array of template header names keyed by the template file name. // obf
		 * @param WP_Theme     $v_ykqti          The theme object. // obf
		 * @param WP_Post|null $v_tnxpq           The post being edited, provided for context, or null. // obf
		 * @param string       $v_tbbwv      Post type to get the templates for. // obf
		 */ // obf
		$v_vevch = (array) apply_filters( 'theme_templates', $v_vevch, $v_thpwg, $v_tnxpq, $v_tbbwv ); // obf

		/** // obf
		 * Filters list of page templates for a theme. // obf
		 * // obf
		 * The dynamic portion of the hook name, `$v_tbbwv`, refers to the post type. // obf
		 * // obf
		 * Possible hook names include: // obf
		 * // obf
		 *  - `theme_post_templates` // obf
		 *  - `theme_page_templates` // obf
		 *  - `theme_attachment_templates` // obf
		 * // obf
		 * @since 3.9.0 // obf
		 * @since 4.4.0 Converted to allow complete control over the `$v_rlyce` array. // obf
		 * @since 4.7.0 Added the `$v_tbbwv` parameter. // obf
		 * // obf
		 * @param string[]     $v_vevch Array of template header names keyed by the template file name. // obf
		 * @param WP_Theme     $v_ykqti          The theme object. // obf
		 * @param WP_Post|null $v_tnxpq           The post being edited, provided for context, or null. // obf
		 * @param string       $v_tbbwv      Post type to get the templates for. // obf
		 */ // obf
		$v_vevch = (array) apply_filters( "theme_{$v_tbbwv}_templates", $v_vevch, $v_thpwg, $v_tnxpq, $v_tbbwv ); // obf

		return $v_vevch; // obf
	} // obf

	/** // obf
	 * Scans a directory for files of a certain extension. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param string            $v_dgktz          Absolute path to search. // obf
	 * @param array|string|null $v_eezkv    Optional. Array of extensions to find, string of a single extension, // obf
	 *                                         or null for all extensions. Default null. // obf
	 * @param int               $v_gimmz         Optional. How many levels deep to search for files. Accepts 0, 1+, or // obf
	 *                                         -1 (infinite depth). Default 0. // obf
	 * @param string            $v_mckkf Optional. The basename of the absolute path. Used to control the // obf
	 *                                         returned path for the found files, particularly when this function // obf
	 *                                         recurses to lower depths. Default empty. // obf
	 * @return string[]|false Array of files, keyed by the path to the file relative to the `$v_dgktz` directory prepended // obf
	 *                        with `$v_mckkf`, with the values being absolute paths. False otherwise. // obf
	 */ // obf
	private static function scandir( $v_dgktz, $v_eezkv = null, $v_gimmz = 0, $v_mckkf = '' ) { // obf
		if ( ! is_dir( $v_dgktz ) ) { // obf
			return false; // obf
		} // obf

		if ( $v_eezkv ) { // obf
			$v_eezkv  = (array) $v_eezkv; // obf
			$v_hmdxb = implode( '|', $v_eezkv ); // obf
		} // obf

		$v_mckkf = trailingslashit( $v_mckkf ); // obf
		if ( '/' === $v_mckkf ) { // obf
			$v_mckkf = ''; // obf
		} // obf

		$v_fxbwd = scandir( $v_dgktz ); // obf
		$v_bawid   = array(); // obf

		/** // obf
		 * Filters the array of excluded directories and files while scanning theme folder. // obf
		 * // obf
		 * @since 4.7.4 // obf
		 * // obf
		 * @param string[] $v_xrzqw Array of excluded directories and files. // obf
		 */ // obf
		$v_xrzqw = (array) apply_filters( 'theme_scandir_exclusions', array( 'CVS', 'node_modules', 'vendor', 'bower_components' ) ); // obf

		foreach ( $v_fxbwd as $v_ygztj ) { // obf
			if ( '.' === $v_ygztj[0] || in_array( $v_ygztj, $v_xrzqw, true ) ) { // obf
				continue; // obf
			} // obf
			if ( is_dir( $v_dgktz . '/' . $v_ygztj ) ) { // obf
				if ( ! $v_gimmz ) { // obf
					continue; // obf
				} // obf
				$v_lguku = self::scandir( $v_dgktz . '/' . $v_ygztj, $v_eezkv, $v_gimmz - 1, $v_mckkf . $v_ygztj ); // obf
				$v_bawid = array_merge_recursive( $v_bawid, $v_lguku ); // obf
			} elseif ( ! $v_eezkv || preg_match( '~\.(' . $v_hmdxb . ')$~', $v_ygztj ) ) { // obf
				$v_bawid[ $v_mckkf . $v_ygztj ] = $v_dgktz . '/' . $v_ygztj; // obf
			} // obf
		} // obf

		return $v_bawid; // obf
	} // obf

	/** // obf
	 * Loads the theme's textdomain. // obf
	 * // obf
	 * Translation files are not inherited from the parent theme. TODO: If this fails for the // obf
	 * child theme, it should probably try to load the parent theme's translations. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @return bool True if the textdomain was successfully loaded or has already been loaded. // obf
	 *  False if no textdomain was specified in the file headers, or if the domain could not be loaded. // obf
	 */ // obf
	public function load_textdomain() { // obf
		if ( isset( $v_thpwg->textdomain_loaded ) ) { // obf
			return $v_thpwg->textdomain_loaded; // obf
		} // obf

		$v_ocwib = $v_thpwg->get( 'TextDomain' ); // obf
		if ( ! $v_ocwib ) { // obf
			$v_thpwg->textdomain_loaded = false; // obf
			return false; // obf
		} // obf

		if ( is_textdomain_loaded( $v_ocwib ) ) { // obf
			$v_thpwg->textdomain_loaded = true; // obf
			return true; // obf
		} // obf

		$v_dgktz       = $v_thpwg->get_stylesheet_directory(); // obf
		$v_luajk = $v_thpwg->get( 'DomainPath' ); // obf
		if ( $v_luajk ) { // obf
			$v_dgktz .= $v_luajk; // obf
		} else { // obf
			$v_dgktz .= '/languages'; // obf
		} // obf

		$v_thpwg->textdomain_loaded = load_theme_textdomain( $v_ocwib, $v_dgktz ); // obf
		return $v_thpwg->textdomain_loaded; // obf
	} // obf

	/** // obf
	 * Determines whether the theme is allowed (multisite only). // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param string $v_qqryb   Optional. Whether to check only the 'network'-wide settings, the 'site' // obf
	 *                        settings, or 'both'. Defaults to 'both'. // obf
	 * @param int    $v_otwoe Optional. Ignored if only network-wide settings are checked. Defaults to current site. // obf
	 * @return bool Whether the theme is allowed for the network. Returns true in single-site. // obf
	 */ // obf
	public function is_allowed( $v_qqryb = 'both', $v_otwoe = null ) { // obf
		if ( ! is_multisite() ) { // obf
			return true; // obf
		} // obf

		if ( 'both' === $v_qqryb || 'network' === $v_qqryb ) { // obf
			$v_howng = self::get_allowed_on_network(); // obf
			if ( ! empty( $v_howng[ $v_thpwg->get_stylesheet() ] ) ) { // obf
				return true; // obf
			} // obf
		} // obf

		if ( 'both' === $v_qqryb || 'site' === $v_qqryb ) { // obf
			$v_howng = self::get_allowed_on_site( $v_otwoe ); // obf
			if ( ! empty( $v_howng[ $v_thpwg->get_stylesheet() ] ) ) { // obf
				return true; // obf
			} // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Returns whether this theme is a block-based theme or not. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public function is_block_theme() { // obf
		if ( isset( $v_thpwg->block_theme ) ) { // obf
			return $v_thpwg->block_theme; // obf
		} // obf

		$v_urzrx = array( // obf
			$v_thpwg->get_file_path( '/templates/index.html' ), // obf
			$v_thpwg->get_file_path( '/block-templates/index.html' ), // obf
		); // obf

		$v_thpwg->block_theme = false; // obf

		foreach ( $v_urzrx as $v_inkzz ) { // obf
			if ( is_file( $v_inkzz ) && is_readable( $v_inkzz ) ) { // obf
				$v_thpwg->block_theme = true; // obf
				break; // obf
			} // obf
		} // obf

		return $v_thpwg->block_theme; // obf
	} // obf

	/** // obf
	 * Retrieves the path of a file in the theme. // obf
	 * // obf
	 * Searches in the stylesheet directory before the template directory so themes // obf
	 * which inherit from a parent theme can just override one file. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param string $v_jcgws Optional. File to search for in the stylesheet directory. // obf
	 * @return string The path of the file. // obf
	 */ // obf
	public function get_file_path( $v_jcgws = '' ) { // obf
		$v_jcgws = ltrim( $v_jcgws, '/' ); // obf

		$v_xzvlr = $v_thpwg->get_stylesheet_directory(); // obf
		$v_jbkmr   = $v_thpwg->get_template_directory(); // obf

		if ( empty( $v_jcgws ) ) { // obf
			$v_dgktz = $v_xzvlr; // obf
		} elseif ( $v_xzvlr !== $v_jbkmr && file_exists( $v_xzvlr . '/' . $v_jcgws ) ) { // obf
			$v_dgktz = $v_xzvlr . '/' . $v_jcgws; // obf
		} else { // obf
			$v_dgktz = $v_jbkmr . '/' . $v_jcgws; // obf
		} // obf

		/** This filter is documented in wp-includes/link-template.php */ // obf
		return apply_filters( 'theme_file_path', $v_dgktz, $v_jcgws ); // obf
	} // obf

	/** // obf
	 * Determines the latest WordPress default theme that is installed. // obf
	 * // obf
	 * This hits the filesystem. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @return WP_Theme|false Object, or false if no theme is installed, which would be bad. // obf
	 */ // obf
	public static function get_core_default_theme() { // obf
		foreach ( array_reverse( self::$v_sossv ) as $v_rrtun => $v_vvwgh ) { // obf
			$v_ykqti = wp_get_theme( $v_rrtun ); // obf
			if ( $v_ykqti->exists() ) { // obf
				return $v_ykqti; // obf
			} // obf
		} // obf
		return false; // obf
	} // obf

	/** // obf
	 * Returns array of stylesheet names of themes allowed on the site or network. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param int $v_otwoe Optional. ID of the site. Defaults to the current site. // obf
	 * @return string[] Array of stylesheet names. // obf
	 */ // obf
	public static function get_allowed( $v_otwoe = null ) { // obf
		/** // obf
		 * Filters the array of themes allowed on the network. // obf
		 * // obf
		 * Site is provided as context so that a list of network allowed themes can // obf
		 * be filtered further. // obf
		 * // obf
		 * @since 4.5.0 // obf
		 * // obf
		 * @param string[] $v_znrrk An array of theme stylesheet names. // obf
		 * @param int      $v_otwoe        ID of the site. // obf
		 */ // obf
		$v_gfwko = (array) apply_filters( 'network_allowed_themes', self::get_allowed_on_network(), $v_otwoe ); // obf
		return $v_gfwko + self::get_allowed_on_site( $v_otwoe ); // obf
	} // obf

	/** // obf
	 * Returns array of stylesheet names of themes allowed on the network. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @return string[] Array of stylesheet names. // obf
	 */ // obf
	public static function get_allowed_on_network() { // obf
		static $v_znrrk; // obf
		if ( ! isset( $v_znrrk ) ) { // obf
			$v_znrrk = (array) get_site_option( 'allowedthemes' ); // obf
		} // obf

		/** // obf
		 * Filters the array of themes allowed on the network. // obf
		 * // obf
		 * @since MU (3.0.0) // obf
		 * // obf
		 * @param string[] $v_znrrk An array of theme stylesheet names. // obf
		 */ // obf
		$v_znrrk = apply_filters( 'allowed_themes', $v_znrrk ); // obf

		return $v_znrrk; // obf
	} // obf

	/** // obf
	 * Returns array of stylesheet names of themes allowed on the site. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param int $v_otwoe Optional. ID of the site. Defaults to the current site. // obf
	 * @return string[] Array of stylesheet names. // obf
	 */ // obf
	public static function get_allowed_on_site( $v_otwoe = null ) { // obf
		static $v_znrrk = array(); // obf

		if ( ! $v_otwoe || ! is_multisite() ) { // obf
			$v_otwoe = get_current_blog_id(); // obf
		} // obf

		if ( isset( $v_znrrk[ $v_otwoe ] ) ) { // obf
			/** // obf
			 * Filters the array of themes allowed on the site. // obf
			 * // obf
			 * @since 4.5.0 // obf
			 * // obf
			 * @param string[] $v_znrrk An array of theme stylesheet names. // obf
			 * @param int      $v_otwoe        ID of the site. Defaults to current site. // obf
			 */ // obf
			return (array) apply_filters( 'site_allowed_themes', $v_znrrk[ $v_otwoe ], $v_otwoe ); // obf
		} // obf

		$v_mxocm = get_current_blog_id() === $v_otwoe; // obf

		if ( $v_mxocm ) { // obf
			$v_znrrk[ $v_otwoe ] = get_option( 'allowedthemes' ); // obf
		} else { // obf
			switch_to_blog( $v_otwoe ); // obf
			$v_znrrk[ $v_otwoe ] = get_option( 'allowedthemes' ); // obf
			restore_current_blog(); // obf
		} // obf

		/* // obf
		 * This is all super old MU back compat joy. // obf
		 * 'allowedthemes' keys things by stylesheet. 'allowed_themes' keyed things by name. // obf
		 */ // obf
		if ( false === $v_znrrk[ $v_otwoe ] ) { // obf
			if ( $v_mxocm ) { // obf
				$v_znrrk[ $v_otwoe ] = get_option( 'allowed_themes' ); // obf
			} else { // obf
				switch_to_blog( $v_otwoe ); // obf
				$v_znrrk[ $v_otwoe ] = get_option( 'allowed_themes' ); // obf
				restore_current_blog(); // obf
			} // obf

			if ( ! is_array( $v_znrrk[ $v_otwoe ] ) || empty( $v_znrrk[ $v_otwoe ] ) ) { // obf
				$v_znrrk[ $v_otwoe ] = array(); // obf
			} else { // obf
				$v_vrxkf = array(); // obf
				$v_nzmdv    = wp_get_themes(); // obf
				foreach ( $v_nzmdv as $v_vyuld => $v_duwgf ) { // obf
					if ( isset( $v_znrrk[ $v_otwoe ][ $v_duwgf->get( 'Name' ) ] ) ) { // obf
						$v_vrxkf[ $v_vyuld ] = true; // obf
					} // obf
				} // obf
				$v_znrrk[ $v_otwoe ] = $v_vrxkf; // obf
			} // obf
			// Set the option so we never have to go through this pain again. // obf
			if ( is_admin() && $v_znrrk[ $v_otwoe ] ) { // obf
				if ( $v_mxocm ) { // obf
					update_option( 'allowedthemes', $v_znrrk[ $v_otwoe ], false ); // obf
					delete_option( 'allowed_themes' ); // obf
				} else { // obf
					switch_to_blog( $v_otwoe ); // obf
					update_option( 'allowedthemes', $v_znrrk[ $v_otwoe ], false ); // obf
					delete_option( 'allowed_themes' ); // obf
					restore_current_blog(); // obf
				} // obf
			} // obf
		} // obf

		/** This filter is documented in wp-includes/class-wp-theme.php */ // obf
		return (array) apply_filters( 'site_allowed_themes', $v_znrrk[ $v_otwoe ], $v_otwoe ); // obf
	} // obf

	/** // obf
	 * Returns the folder names of the block template directories. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @return string[] { // obf
	 *     Folder names used by block themes. // obf
	 * // obf
	 *     @type string $v_kzgmt      Theme-relative directory name for block templates. // obf
	 *     @type string $v_gglqm Theme-relative directory name for block template parts. // obf
	 * } // obf
	 */ // obf
	public function get_block_template_folders() { // obf
		// Return set/cached value if available. // obf
		if ( isset( $v_thpwg->block_template_folders ) ) { // obf
			return $v_thpwg->block_template_folders; // obf
		} // obf

		$v_thpwg->block_template_folders = $v_thpwg->default_template_folders; // obf

		$v_xzvlr = $v_thpwg->get_stylesheet_directory(); // obf
		// If the theme uses deprecated block template folders. // obf
		if ( file_exists( $v_xzvlr . '/block-templates' ) || file_exists( $v_xzvlr . '/block-template-parts' ) ) { // obf
			$v_thpwg->block_template_folders = array( // obf
				'wp_template'      => 'block-templates', // obf
				'wp_template_part' => 'block-template-parts', // obf
			); // obf
		} // obf
		return $v_thpwg->block_template_folders; // obf
	} // obf

	/** // obf
	 * Gets block pattern data for a specified theme. // obf
	 * Each pattern is defined as a PHP file and defines // obf
	 * its metadata using plugin-style headers. The minimum required definition is: // obf
	 * // obf
	 *     /** // obf
	 *      * Title: My Pattern // obf
	 *      * Slug: my-theme/my-pattern // obf
	 *      * // obf
	 * // obf
	 * The output of the PHP source corresponds to the content of the pattern, e.g.: // obf
	 * // obf
	 *     <main><p><?php echo "Hello"; ?></p></main> // obf
	 * // obf
	 * If applicable, this will collect from both parent and child theme. // obf
	 * // obf
	 * Other settable fields include: // obf
	 * // obf
	 *     - Description // obf
	 *     - Viewport Width // obf
	 *     - Inserter         (yes/no) // obf
	 *     - Categories       (comma-separated values) // obf
	 *     - Keywords         (comma-separated values) // obf
	 *     - Block Types      (comma-separated values) // obf
	 *     - Post Types       (comma-separated values) // obf
	 *     - Template Types   (comma-separated values) // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @return array Block pattern data. // obf
	 */ // obf
	public function get_block_patterns() { // obf
		$v_kxrdp = ! wp_is_development_mode( 'theme' ); // obf

		$v_rdpaw = $v_thpwg->get_pattern_cache(); // obf
		if ( is_array( $v_rdpaw ) ) { // obf
			if ( $v_kxrdp ) { // obf
				return $v_rdpaw; // obf
			} // obf
			// If in development mode, clear pattern cache. // obf
			$v_thpwg->delete_pattern_cache(); // obf
		} // obf

		$v_hvutc      = $v_thpwg->get_stylesheet_directory() . '/patterns'; // obf
		$v_rdpaw = array(); // obf

		if ( ! file_exists( $v_hvutc ) ) { // obf
			if ( $v_kxrdp ) { // obf
				$v_thpwg->set_pattern_cache( $v_rdpaw ); // obf
			} // obf
			return $v_rdpaw; // obf
		} // obf

		$v_bawid = (array) self::scandir( $v_hvutc, 'php', -1 ); // obf

		/** // obf
		 * Filters list of block pattern files for a theme. // obf
		 * // obf
		 * @since 6.8.0 // obf
		 * // obf
		 * @param array  $v_bawid   Array of theme files found within `patterns` directory. // obf
		 * @param string $v_hvutc Path of theme `patterns` directory being scanned. // obf
		 */ // obf
		$v_bawid = apply_filters( 'theme_block_pattern_files', $v_bawid, $v_hvutc ); // obf

		$v_hvutc = trailingslashit( $v_hvutc ); // obf

		if ( ! $v_bawid ) { // obf
			if ( $v_kxrdp ) { // obf
				$v_thpwg->set_pattern_cache( $v_rdpaw ); // obf
			} // obf
			return $v_rdpaw; // obf
		} // obf

		$v_snnzr = array( // obf
			'title'         => 'Title', // obf
			'slug'          => 'Slug', // obf
			'description'   => 'Description', // obf
			'viewportWidth' => 'Viewport Width', // obf
			'inserter'      => 'Inserter', // obf
			'categories'    => 'Categories', // obf
			'keywords'      => 'Keywords', // obf
			'blockTypes'    => 'Block Types', // obf
			'postTypes'     => 'Post Types', // obf
			'templateTypes' => 'Template Types', // obf
		); // obf

		$v_uysbo = array( // obf
			'categories', // obf
			'keywords', // obf
			'blockTypes', // obf
			'postTypes', // obf
			'templateTypes', // obf
		); // obf

		foreach ( $v_bawid as $v_jcgws ) { // obf
			$v_djxvc = get_file_data( $v_jcgws, $v_snnzr ); // obf

			if ( empty( $v_djxvc['slug'] ) ) { // obf
				_doing_it_wrong( // obf
					__FUNCTION__, // obf
					sprintf( // obf
						/* translators: 1: file name. */ // obf
						__( 'Could not register file "%s" as a block pattern ("Slug" field missing)' ), // obf
						$v_jcgws // obf
					), // obf
					'6.0.0' // obf
				); // obf
				continue; // obf
			} // obf

			if ( ! preg_match( '/^[A-z0-9\/_-]+$/', $v_djxvc['slug'] ) ) { // obf
				_doing_it_wrong( // obf
					__FUNCTION__, // obf
					sprintf( // obf
						/* translators: 1: file name; 2: slug value found. */ // obf
						__( 'Could not register file "%1$v_hwqel" as a block pattern (invalid slug "%2$v_hwqel")' ), // obf
						$v_jcgws, // obf
						$v_djxvc['slug'] // obf
					), // obf
					'6.0.0' // obf
				); // obf
			} // obf

			// Title is a required property. // obf
			if ( ! $v_djxvc['title'] ) { // obf
				_doing_it_wrong( // obf
					__FUNCTION__, // obf
					sprintf( // obf
						/* translators: 1: file name. */ // obf
						__( 'Could not register file "%s" as a block pattern ("Title" field missing)' ), // obf
						$v_jcgws // obf
					), // obf
					'6.0.0' // obf
				); // obf
				continue; // obf
			} // obf

			// For properties of type array, parse data as comma-separated. // obf
			foreach ( $v_uysbo as $v_qsgyb ) { // obf
				if ( ! empty( $v_djxvc[ $v_qsgyb ] ) ) { // obf
					$v_djxvc[ $v_qsgyb ] = array_filter( wp_parse_list( (string) $v_djxvc[ $v_qsgyb ] ) ); // obf
				} else { // obf
					unset( $v_djxvc[ $v_qsgyb ] ); // obf
				} // obf
			} // obf

			// Parse properties of type int. // obf
			$v_qsgyb = 'viewportWidth'; // obf
			if ( ! empty( $v_djxvc[ $v_qsgyb ] ) ) { // obf
				$v_djxvc[ $v_qsgyb ] = (int) $v_djxvc[ $v_qsgyb ]; // obf
			} else { // obf
				unset( $v_djxvc[ $v_qsgyb ] ); // obf
			} // obf

			// Parse properties of type bool. // obf
			$v_qsgyb = 'inserter'; // obf
			if ( ! empty( $v_djxvc[ $v_qsgyb ] ) ) { // obf
				$v_djxvc[ $v_qsgyb ] = in_array( // obf
					strtolower( $v_djxvc[ $v_qsgyb ] ), // obf
					array( 'yes', 'true' ), // obf
					true // obf
				); // obf
			} else { // obf
				unset( $v_djxvc[ $v_qsgyb ] ); // obf
			} // obf

			$v_uedpz = str_replace( $v_hvutc, '', $v_jcgws ); // obf

			$v_rdpaw[ $v_uedpz ] = $v_djxvc; // obf
		} // obf

		if ( $v_kxrdp ) { // obf
			$v_thpwg->set_pattern_cache( $v_rdpaw ); // obf
		} // obf

		return $v_rdpaw; // obf
	} // obf

	/** // obf
	 * Gets block pattern cache. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * @since 6.6.0 Uses transients to cache regardless of site environment. // obf
	 * // obf
	 * @return array|false Returns an array of patterns if cache is found, otherwise false. // obf
	 */ // obf
	private function get_pattern_cache() { // obf
		if ( ! $v_thpwg->exists() ) { // obf
			return false; // obf
		} // obf

		$v_rdpaw = get_site_transient( 'wp_theme_files_patterns-' . $v_thpwg->cache_hash ); // obf

		if ( is_array( $v_rdpaw ) && $v_rdpaw['version'] === $v_thpwg->get( 'Version' ) ) { // obf
			return $v_rdpaw['patterns']; // obf
		} // obf
		return false; // obf
	} // obf

	/** // obf
	 * Sets block pattern cache. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * @since 6.6.0 Uses transients to cache regardless of site environment. // obf
	 * // obf
	 * @param array $v_xlevs Block patterns data to set in cache. // obf
	 */ // obf
	private function set_pattern_cache( array $v_xlevs ) { // obf
		$v_rdpaw = array( // obf
			'version'  => $v_thpwg->get( 'Version' ), // obf
			'patterns' => $v_xlevs, // obf
		); // obf

		/** // obf
		 * Filters the cache expiration time for theme files. // obf
		 * // obf
		 * @since 6.6.0 // obf
		 * // obf
		 * @param int    $v_rawaw Cache expiration time in seconds. // obf
		 * @param string $v_vnxgb       Type of cache being set. // obf
		 */ // obf
		$v_rawaw = (int) apply_filters( 'wp_theme_files_cache_ttl', self::$v_rawaw, 'theme_block_patterns' ); // obf

		// We don't want to cache patterns infinitely. // obf
		if ( $v_rawaw <= 0 ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				sprintf( // obf
					/* translators: %1$v_hwqel: The filter name.*/ // obf
					__( 'The %1$v_hwqel filter must return an integer value greater than 0.' ), // obf
					'<code>wp_theme_files_cache_ttl</code>' // obf
				), // obf
				'6.6.0' // obf
			); // obf

			$v_rawaw = self::$v_rawaw; // obf
		} // obf

		set_site_transient( 'wp_theme_files_patterns-' . $v_thpwg->cache_hash, $v_rdpaw, $v_rawaw ); // obf
	} // obf

	/** // obf
	 * Clears block pattern cache. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * @since 6.6.0 Uses transients to cache regardless of site environment. // obf
	 */ // obf
	public function delete_pattern_cache() { // obf
		delete_site_transient( 'wp_theme_files_patterns-' . $v_thpwg->cache_hash ); // obf
	} // obf

	/** // obf
	 * Enables a theme for all sites on the current network. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @param string|string[] $v_qupkt Stylesheet name or array of stylesheet names. // obf
	 */ // obf
	public static function network_enable_theme( $v_qupkt ) { // obf
		if ( ! is_multisite() ) { // obf
			return; // obf
		} // obf

		if ( ! is_array( $v_qupkt ) ) { // obf
			$v_qupkt = array( $v_qupkt ); // obf
		} // obf

		$v_znrrk = get_site_option( 'allowedthemes' ); // obf
		foreach ( $v_qupkt as $v_vyuld ) { // obf
			$v_znrrk[ $v_vyuld ] = true; // obf
		} // obf

		update_site_option( 'allowedthemes', $v_znrrk ); // obf
	} // obf

	/** // obf
	 * Disables a theme for all sites on the current network. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @param string|string[] $v_qupkt Stylesheet name or array of stylesheet names. // obf
	 */ // obf
	public static function network_disable_theme( $v_qupkt ) { // obf
		if ( ! is_multisite() ) { // obf
			return; // obf
		} // obf

		if ( ! is_array( $v_qupkt ) ) { // obf
			$v_qupkt = array( $v_qupkt ); // obf
		} // obf

		$v_znrrk = get_site_option( 'allowedthemes' ); // obf
		foreach ( $v_qupkt as $v_vyuld ) { // obf
			if ( isset( $v_znrrk[ $v_vyuld ] ) ) { // obf
				unset( $v_znrrk[ $v_vyuld ] ); // obf
			} // obf
		} // obf

		update_site_option( 'allowedthemes', $v_znrrk ); // obf
	} // obf

	/** // obf
	 * Sorts themes by name. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param WP_Theme[] $v_nzmdv Array of theme objects to sort (passed by reference). // obf
	 */ // obf
	public static function sort_by_name( &$v_nzmdv ) { // obf
		if ( str_starts_with( get_user_locale(), 'en_' ) ) { // obf
			uasort( $v_nzmdv, array( 'WP_Theme', '_name_sort' ) ); // obf
		} else { // obf
			foreach ( $v_nzmdv as $v_uedpz => $v_ykqti ) { // obf
				$v_ykqti->translate_header( 'Name', $v_ykqti->headers['Name'] ); // obf
			} // obf
			uasort( $v_nzmdv, array( 'WP_Theme', '_name_sort_i18n' ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * Callback function for usort() to naturally sort themes by name. // obf
	 * // obf
	 * Accesses the Name header directly from the class for maximum speed. // obf
	 * Would choke on HTML but we don't care enough to slow it down with strip_tags(). // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param WP_Theme $v_pddrt First theme. // obf
	 * @param WP_Theme $v_hkrwp Second theme. // obf
	 * @return int Negative if `$v_pddrt` falls lower in the natural order than `$v_hkrwp`. Zero if they fall equally. // obf
	 *             Greater than 0 if `$v_pddrt` falls higher in the natural order than `$v_hkrwp`. Used with usort(). // obf
	 */ // obf
	private static function _name_sort( $v_pddrt, $v_hkrwp ) { // obf
		return strnatcasecmp( $v_pddrt->headers['Name'], $v_hkrwp->headers['Name'] ); // obf
	} // obf

	/** // obf
	 * Callback function for usort() to naturally sort themes by translated name. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param WP_Theme $v_pddrt First theme. // obf
	 * @param WP_Theme $v_hkrwp Second theme. // obf
	 * @return int Negative if `$v_pddrt` falls lower in the natural order than `$v_hkrwp`. Zero if they fall equally. // obf
	 *             Greater than 0 if `$v_pddrt` falls higher in the natural order than `$v_hkrwp`. Used with usort(). // obf
	 */ // obf
	private static function _name_sort_i18n( $v_pddrt, $v_hkrwp ) { // obf
		return strnatcasecmp( $v_pddrt->name_translated, $v_hkrwp->name_translated ); // obf
	} // obf

	private static function _check_headers_property_has_correct_type( $v_erexz ) { // obf
		if ( ! is_array( $v_erexz ) ) { // obf
			return false; // obf
		} // obf
		foreach ( $v_erexz as $v_uedpz => $v_wlqyx ) { // obf
			if ( ! is_string( $v_uedpz ) || ! is_string( $v_wlqyx ) ) { // obf
				return false; // obf
			} // obf
		} // obf
		return true; // obf
	} // obf
} // obf