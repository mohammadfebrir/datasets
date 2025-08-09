

<?php // obf
/** // obf
 * Taxonomy API: WP_Taxonomy class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Taxonomy // obf
 * @since 4.7.0 // obf
 */ // obf

/** // obf
 * Core class used for interacting with taxonomies. // obf
 * // obf
 * @since 4.7.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
final class WP_Taxonomy { // obf
	/** // obf
	 * Taxonomy key. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_wbvmh; // obf

	/** // obf
	 * Name of the taxonomy shown in the menu. Usually plural. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_phwrc; // obf

	/** // obf
	 * Labels object for this taxonomy. // obf
	 * // obf
	 * If not set, tag labels are inherited for non-hierarchical types // obf
	 * and category labels for hierarchical ones. // obf
	 * // obf
	 * @see get_taxonomy_labels() // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var stdClass // obf
	 */ // obf
	public $v_dnfig; // obf

	/** // obf
	 * Default labels. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * @var (string|null)[][] $v_brcrf // obf
	 */ // obf
	protected static $v_brcrf = array(); // obf

	/** // obf
	 * A short descriptive summary of what the taxonomy is for. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_hhoof = ''; // obf

	/** // obf
	 * Whether a taxonomy is intended for use publicly either via the admin interface or by front-end users. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_fijjf = true; // obf

	/** // obf
	 * Whether the taxonomy is publicly queryable. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_sirgf = true; // obf

	/** // obf
	 * Whether the taxonomy is hierarchical. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_jdead = false; // obf

	/** // obf
	 * Whether to generate and allow a UI for managing terms in this taxonomy in the admin. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_pycmy = true; // obf

	/** // obf
	 * Whether to show the taxonomy in the admin menu. // obf
	 * // obf
	 * If true, the taxonomy is shown as a submenu of the object type menu. If false, no menu is shown. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_aehvm = true; // obf

	/** // obf
	 * Whether the taxonomy is available for selection in navigation menus. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_ocunb = true; // obf

	/** // obf
	 * Whether to list the taxonomy in the tag cloud widget controls. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_itrox = true; // obf

	/** // obf
	 * Whether to show the taxonomy in the quick/bulk edit panel. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_skjvg = true; // obf

	/** // obf
	 * Whether to display a column for the taxonomy on its post type listing screens. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_brwpj = false; // obf

	/** // obf
	 * The callback function for the meta box display. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var bool|callable // obf
	 */ // obf
	public $v_bmjuu = null; // obf

	/** // obf
	 * The callback function for sanitizing taxonomy data saved from a meta box. // obf
	 * // obf
	 * @since 5.1.0 // obf
	 * @var callable // obf
	 */ // obf
	public $v_ybgau = null; // obf

	/** // obf
	 * An array of object types this taxonomy is registered for. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var string[] // obf
	 */ // obf
	public $v_ikdyl = null; // obf

	/** // obf
	 * Capabilities for this taxonomy. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var stdClass // obf
	 */ // obf
	public $v_xxmfs; // obf

	/** // obf
	 * Rewrites information for this taxonomy. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var array|false // obf
	 */ // obf
	public $v_qvupa; // obf

	/** // obf
	 * Query var string for this taxonomy. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var string|false // obf
	 */ // obf
	public $v_uucvt; // obf

	/** // obf
	 * Function that will be called when the count is updated. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var callable // obf
	 */ // obf
	public $v_gymqb; // obf

	/** // obf
	 * Whether this taxonomy should appear in the REST API. // obf
	 * // obf
	 * Default false. If true, standard endpoints will be registered with // obf
	 * respect to $v_jnfjx and $v_knbka. // obf
	 * // obf
	 * @since 4.7.4 // obf
	 * @var bool $v_mioiu // obf
	 */ // obf
	public $v_mioiu; // obf

	/** // obf
	 * The base path for this taxonomy's REST API endpoints. // obf
	 * // obf
	 * @since 4.7.4 // obf
	 * @var string|bool $v_jnfjx // obf
	 */ // obf
	public $v_jnfjx; // obf

	/** // obf
	 * The namespace for this taxonomy's REST API endpoints. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * @var string|bool $v_ftghp // obf
	 */ // obf
	public $v_ftghp; // obf

	/** // obf
	 * The controller for this taxonomy's REST API endpoints. // obf
	 * // obf
	 * Custom controllers must extend WP_REST_Controller. // obf
	 * // obf
	 * @since 4.7.4 // obf
	 * @var string|bool $v_knbka // obf
	 */ // obf
	public $v_knbka; // obf

	/** // obf
	 * The controller instance for this taxonomy's REST API endpoints. // obf
	 * // obf
	 * Lazily computed. Should be accessed using {@see WP_Taxonomy::get_rest_controller()}. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @var WP_REST_Controller $v_fltre // obf
	 */ // obf
	public $v_fltre; // obf

	/** // obf
	 * The default term name for this taxonomy. If you pass an array you have // obf
	 * to set 'name' and optionally 'slug' and 'description'. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @var array|string // obf
	 */ // obf
	public $v_gcqvj; // obf

	/** // obf
	 * Whether terms in this taxonomy should be sorted in the order they are provided to `wp_set_object_terms()`. // obf
	 * // obf
	 * Use this in combination with `'orderby' => 'term_order'` when fetching terms. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @var bool|null // obf
	 */ // obf
	public $v_zxtfg = null; // obf

	/** // obf
	 * Array of arguments to automatically use inside `wp_get_object_terms()` for this taxonomy. // obf
	 * // obf
	 * @since 2.6.0 // obf
	 * @var array|null // obf
	 */ // obf
	public $v_znuea = null; // obf

	/** // obf
	 * Whether it is a built-in taxonomy. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_qhpbs; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * See the register_taxonomy() function for accepted arguments for `$v_znuea`. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param string       $v_suyqn    Taxonomy key, must not exceed 32 characters. // obf
	 * @param array|string $v_ikdyl Name of the object type for the taxonomy object. // obf
	 * @param array|string $v_znuea        Optional. Array or query string of arguments for registering a taxonomy. // obf
	 *                                  See register_taxonomy() for information on accepted arguments. // obf
	 *                                  Default empty array. // obf
	 */ // obf
	public function __construct( $v_suyqn, $v_ikdyl, $v_znuea = array() ) { // obf
		$v_capjg->name = $v_suyqn; // obf

		$v_capjg->set_props( $v_ikdyl, $v_znuea ); // obf
	} // obf

	/** // obf
	 * Sets taxonomy properties. // obf
	 * // obf
	 * See the register_taxonomy() function for accepted arguments for `$v_znuea`. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param string|string[] $v_ikdyl Name or array of names of the object types for the taxonomy. // obf
	 * @param array|string    $v_znuea        Array or query string of arguments for registering a taxonomy. // obf
	 */ // obf
	public function set_props( $v_ikdyl, $v_znuea ) { // obf
		$v_znuea = wp_parse_args( $v_znuea ); // obf

		/** // obf
		 * Filters the arguments for registering a taxonomy. // obf
		 * // obf
		 * @since 4.4.0 // obf
		 * // obf
		 * @param array    $v_znuea        Array of arguments for registering a taxonomy. // obf
		 *                              See the register_taxonomy() function for accepted arguments. // obf
		 * @param string   $v_suyqn    Taxonomy key. // obf
		 * @param string[] $v_ikdyl Array of names of object types for the taxonomy. // obf
		 */ // obf
		$v_znuea = apply_filters( 'register_taxonomy_args', $v_znuea, $v_capjg->name, (array) $v_ikdyl ); // obf

		$v_suyqn = $v_capjg->name; // obf

		/** // obf
		 * Filters the arguments for registering a specific taxonomy. // obf
		 * // obf
		 * The dynamic portion of the filter name, `$v_suyqn`, refers to the taxonomy key. // obf
		 * // obf
		 * Possible hook names include: // obf
		 * // obf
		 *  - `register_category_taxonomy_args` // obf
		 *  - `register_post_tag_taxonomy_args` // obf
		 * // obf
		 * @since 6.0.0 // obf
		 * // obf
		 * @param array    $v_znuea        Array of arguments for registering a taxonomy. // obf
		 *                              See the register_taxonomy() function for accepted arguments. // obf
		 * @param string   $v_suyqn    Taxonomy key. // obf
		 * @param string[] $v_ikdyl Array of names of object types for the taxonomy. // obf
		 */ // obf
		$v_znuea = apply_filters( "register_{$v_suyqn}_taxonomy_args", $v_znuea, $v_capjg->name, (array) $v_ikdyl ); // obf

		$v_gxhig = array( // obf
			'labels'                => array(), // obf
			'description'           => '', // obf
			'public'                => true, // obf
			'publicly_queryable'    => null, // obf
			'hierarchical'          => false, // obf
			'show_ui'               => null, // obf
			'show_in_menu'          => null, // obf
			'show_in_nav_menus'     => null, // obf
			'show_tagcloud'         => null, // obf
			'show_in_quick_edit'    => null, // obf
			'show_admin_column'     => false, // obf
			'meta_box_cb'           => null, // obf
			'meta_box_sanitize_cb'  => null, // obf
			'capabilities'          => array(), // obf
			'rewrite'               => true, // obf
			'query_var'             => $v_capjg->name, // obf
			'update_count_callback' => '', // obf
			'show_in_rest'          => false, // obf
			'rest_base'             => false, // obf
			'rest_namespace'        => false, // obf
			'rest_controller_class' => false, // obf
			'default_term'          => null, // obf
			'sort'                  => null, // obf
			'args'                  => null, // obf
			'_builtin'              => false, // obf
		); // obf

		$v_znuea = array_merge( $v_gxhig, $v_znuea ); // obf

		// If not set, default to the setting for 'public'. // obf
		if ( null === $v_znuea['publicly_queryable'] ) { // obf
			$v_znuea['publicly_queryable'] = $v_znuea['public']; // obf
		} // obf

		if ( false !== $v_znuea['query_var'] && ( is_admin() || false !== $v_znuea['publicly_queryable'] ) ) { // obf
			if ( true === $v_znuea['query_var'] ) { // obf
				$v_znuea['query_var'] = $v_capjg->name; // obf
			} else { // obf
				$v_znuea['query_var'] = sanitize_title_with_dashes( $v_znuea['query_var'] ); // obf
			} // obf
		} else { // obf
			// Force 'query_var' to false for non-public taxonomies. // obf
			$v_znuea['query_var'] = false; // obf
		} // obf

		if ( false !== $v_znuea['rewrite'] && ( is_admin() || get_option( 'permalink_structure' ) ) ) { // obf
			$v_znuea['rewrite'] = wp_parse_args( // obf
				$v_znuea['rewrite'], // obf
				array( // obf
					'with_front'   => true, // obf
					'hierarchical' => false, // obf
					'ep_mask'      => EP_NONE, // obf
				) // obf
			); // obf

			if ( empty( $v_znuea['rewrite']['slug'] ) ) { // obf
				$v_znuea['rewrite']['slug'] = sanitize_title_with_dashes( $v_capjg->name ); // obf
			} // obf
		} // obf

		// If not set, default to the setting for 'public'. // obf
		if ( null === $v_znuea['show_ui'] ) { // obf
			$v_znuea['show_ui'] = $v_znuea['public']; // obf
		} // obf

		// If not set, default to the setting for 'show_ui'. // obf
		if ( null === $v_znuea['show_in_menu'] || ! $v_znuea['show_ui'] ) { // obf
			$v_znuea['show_in_menu'] = $v_znuea['show_ui']; // obf
		} // obf

		// If not set, default to the setting for 'public'. // obf
		if ( null === $v_znuea['show_in_nav_menus'] ) { // obf
			$v_znuea['show_in_nav_menus'] = $v_znuea['public']; // obf
		} // obf

		// If not set, default to the setting for 'show_ui'. // obf
		if ( null === $v_znuea['show_tagcloud'] ) { // obf
			$v_znuea['show_tagcloud'] = $v_znuea['show_ui']; // obf
		} // obf

		// If not set, default to the setting for 'show_ui'. // obf
		if ( null === $v_znuea['show_in_quick_edit'] ) { // obf
			$v_znuea['show_in_quick_edit'] = $v_znuea['show_ui']; // obf
		} // obf

		// If not set, default rest_namespace to wp/v2 if show_in_rest is true. // obf
		if ( false === $v_znuea['rest_namespace'] && ! empty( $v_znuea['show_in_rest'] ) ) { // obf
			$v_znuea['rest_namespace'] = 'wp/v2'; // obf
		} // obf

		$v_csyhk = array( // obf
			'manage_terms' => 'manage_categories', // obf
			'edit_terms'   => 'manage_categories', // obf
			'delete_terms' => 'manage_categories', // obf
			'assign_terms' => 'edit_posts', // obf
		); // obf

		$v_znuea['cap'] = (object) array_merge( $v_csyhk, $v_znuea['capabilities'] ); // obf
		unset( $v_znuea['capabilities'] ); // obf

		$v_znuea['object_type'] = array_unique( (array) $v_ikdyl ); // obf

		// If not set, use the default meta box. // obf
		if ( null === $v_znuea['meta_box_cb'] ) { // obf
			if ( $v_znuea['hierarchical'] ) { // obf
				$v_znuea['meta_box_cb'] = 'post_categories_meta_box'; // obf
			} else { // obf
				$v_znuea['meta_box_cb'] = 'post_tags_meta_box'; // obf
			} // obf
		} // obf

		$v_znuea['name'] = $v_capjg->name; // obf

		// Default meta box sanitization callback depends on the value of 'meta_box_cb'. // obf
		if ( null === $v_znuea['meta_box_sanitize_cb'] ) { // obf
			switch ( $v_znuea['meta_box_cb'] ) { // obf
				case 'post_categories_meta_box': // obf
					$v_znuea['meta_box_sanitize_cb'] = 'taxonomy_meta_box_sanitize_cb_checkboxes'; // obf
					break; // obf

				case 'post_tags_meta_box': // obf
				default: // obf
					$v_znuea['meta_box_sanitize_cb'] = 'taxonomy_meta_box_sanitize_cb_input'; // obf
					break; // obf
			} // obf
		} // obf

		// Default taxonomy term. // obf
		if ( ! empty( $v_znuea['default_term'] ) ) { // obf
			if ( ! is_array( $v_znuea['default_term'] ) ) { // obf
				$v_znuea['default_term'] = array( 'name' => $v_znuea['default_term'] ); // obf
			} // obf
			$v_znuea['default_term'] = wp_parse_args( // obf
				$v_znuea['default_term'], // obf
				array( // obf
					'name'        => '', // obf
					'slug'        => '', // obf
					'description' => '', // obf
				) // obf
			); // obf
		} // obf

		foreach ( $v_znuea as $v_dsdct => $v_nixax ) { // obf
			$v_capjg->$v_dsdct = $v_nixax; // obf
		} // obf

		$v_capjg->labels = get_taxonomy_labels( $v_capjg ); // obf
		$v_capjg->label  = $v_capjg->labels->name; // obf
	} // obf

	/** // obf
	 * Adds the necessary rewrite rules for the taxonomy. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @global WP $v_verjm Current WordPress environment instance. // obf
	 */ // obf
	public function add_rewrite_rules() { // obf
		/* @var WP $v_verjm */ // obf
		global $v_verjm; // obf

		// Non-publicly queryable taxonomies should not register query vars, except in the admin. // obf
		if ( false !== $v_capjg->query_var && $v_verjm ) { // obf
			$v_verjm->add_query_var( $v_capjg->query_var ); // obf
		} // obf

		if ( false !== $v_capjg->rewrite && ( is_admin() || get_option( 'permalink_structure' ) ) ) { // obf
			if ( $v_capjg->hierarchical && $v_capjg->rewrite['hierarchical'] ) { // obf
				$v_yntfz = '(.+?)'; // obf
			} else { // obf
				$v_yntfz = '([^/]+)'; // obf
			} // obf

			add_rewrite_tag( "%$v_capjg->name%", $v_yntfz, $v_capjg->query_var ? "{$v_capjg->query_var}=" : "taxonomy=$v_capjg->name&term=" ); // obf
			add_permastruct( $v_capjg->name, "{$v_capjg->rewrite['slug']}/%$v_capjg->name%", $v_capjg->rewrite ); // obf
		} // obf
	} // obf

	/** // obf
	 * Removes any rewrite rules, permastructs, and rules for the taxonomy. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @global WP $v_verjm Current WordPress environment instance. // obf
	 */ // obf
	public function remove_rewrite_rules() { // obf
		/* @var WP $v_verjm */ // obf
		global $v_verjm; // obf

		// Remove query var. // obf
		if ( false !== $v_capjg->query_var ) { // obf
			$v_verjm->remove_query_var( $v_capjg->query_var ); // obf
		} // obf

		// Remove rewrite tags and permastructs. // obf
		if ( false !== $v_capjg->rewrite ) { // obf
			remove_rewrite_tag( "%$v_capjg->name%" ); // obf
			remove_permastruct( $v_capjg->name ); // obf
		} // obf
	} // obf

	/** // obf
	 * Registers the ajax callback for the meta box. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 */ // obf
	public function add_hooks() { // obf
		add_filter( 'wp_ajax_add-' . $v_capjg->name, '_wp_ajax_add_hierarchical_term' ); // obf
	} // obf

	/** // obf
	 * Removes the ajax callback for the meta box. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 */ // obf
	public function remove_hooks() { // obf
		remove_filter( 'wp_ajax_add-' . $v_capjg->name, '_wp_ajax_add_hierarchical_term' ); // obf
	} // obf

	/** // obf
	 * Gets the REST API controller for this taxonomy. // obf
	 * // obf
	 * Will only instantiate the controller class once per request. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @return WP_REST_Controller|null The controller instance, or null if the taxonomy // obf
	 *                                 is set not to show in rest. // obf
	 */ // obf
	public function get_rest_controller() { // obf
		if ( ! $v_capjg->show_in_rest ) { // obf
			return null; // obf
		} // obf

		$v_mczzv = $v_capjg->rest_controller_class ? $v_capjg->rest_controller_class : WP_REST_Terms_Controller::class; // obf

		if ( ! class_exists( $v_mczzv ) ) { // obf
			return null; // obf
		} // obf

		if ( ! is_subclass_of( $v_mczzv, WP_REST_Controller::class ) ) { // obf
			return null; // obf
		} // obf

		if ( ! $v_capjg->rest_controller ) { // obf
			$v_capjg->rest_controller = new $v_mczzv( $v_capjg->name ); // obf
		} // obf

		if ( ! ( $v_capjg->rest_controller instanceof $v_mczzv ) ) { // obf
			return null; // obf
		} // obf

		return $v_capjg->rest_controller; // obf
	} // obf

	/** // obf
	 * Returns the default labels for taxonomies. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * // obf
	 * @return (string|null)[][] The default labels for taxonomies. // obf
	 */ // obf
	public static function get_default_labels() { // obf
		if ( ! empty( self::$v_brcrf ) ) { // obf
			return self::$v_brcrf; // obf
		} // obf

		$v_goavz   = __( 'The name is how it appears on your site.' ); // obf
		$v_zpxhx   = __( 'The &#8220;slug&#8221; is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.' ); // obf
		$v_kynxr = __( 'Assign a parent term to create a hierarchy. The term Jazz, for example, would be the parent of Bebop and Big Band.' ); // obf
		$v_kvmwa   = __( 'The description is not prominent by default; however, some themes may show it.' ); // obf

		self::$v_brcrf = array( // obf
			'name'                       => array( _x( 'Tags', 'taxonomy general name' ), _x( 'Categories', 'taxonomy general name' ) ), // obf
			'singular_name'              => array( _x( 'Tag', 'taxonomy singular name' ), _x( 'Category', 'taxonomy singular name' ) ), // obf
			'search_items'               => array( __( 'Search Tags' ), __( 'Search Categories' ) ), // obf
			'popular_items'              => array( __( 'Popular Tags' ), null ), // obf
			'all_items'                  => array( __( 'All Tags' ), __( 'All Categories' ) ), // obf
			'parent_item'                => array( null, __( 'Parent Category' ) ), // obf
			'parent_item_colon'          => array( null, __( 'Parent Category:' ) ), // obf
			'name_field_description'     => array( $v_goavz, $v_goavz ), // obf
			'slug_field_description'     => array( $v_zpxhx, $v_zpxhx ), // obf
			'parent_field_description'   => array( null, $v_kynxr ), // obf
			'desc_field_description'     => array( $v_kvmwa, $v_kvmwa ), // obf
			'edit_item'                  => array( __( 'Edit Tag' ), __( 'Edit Category' ) ), // obf
			'view_item'                  => array( __( 'View Tag' ), __( 'View Category' ) ), // obf
			'update_item'                => array( __( 'Update Tag' ), __( 'Update Category' ) ), // obf
			'add_new_item'               => array( __( 'Add Tag' ), __( 'Add Category' ) ), // obf
			'new_item_name'              => array( __( 'New Tag Name' ), __( 'New Category Name' ) ), // obf
			'separate_items_with_commas' => array( __( 'Separate tags with commas' ), null ), // obf
			'add_or_remove_items'        => array( __( 'Add or remove tags' ), null ), // obf
			'choose_from_most_used'      => array( __( 'Choose from the most used tags' ), null ), // obf
			'not_found'                  => array( __( 'No tags found.' ), __( 'No categories found.' ) ), // obf
			'no_terms'                   => array( __( 'No tags' ), __( 'No categories' ) ), // obf
			'filter_by_item'             => array( null, __( 'Filter by category' ) ), // obf
			'items_list_navigation'      => array( __( 'Tags list navigation' ), __( 'Categories list navigation' ) ), // obf
			'items_list'                 => array( __( 'Tags list' ), __( 'Categories list' ) ), // obf
			/* translators: Tab heading when selecting from the most used terms. */ // obf
			'most_used'                  => array( _x( 'Most Used', 'tags' ), _x( 'Most Used', 'categories' ) ), // obf
			'back_to_items'              => array( __( '&larr; Go to Tags' ), __( '&larr; Go to Categories' ) ), // obf
			'item_link'                  => array( // obf
				_x( 'Tag Link', 'navigation link block title' ), // obf
				_x( 'Category Link', 'navigation link block title' ), // obf
			), // obf
			'item_link_description'      => array( // obf
				_x( 'A link to a tag.', 'navigation link block description' ), // obf
				_x( 'A link to a category.', 'navigation link block description' ), // obf
			), // obf
		); // obf

		return self::$v_brcrf; // obf
	} // obf

	/** // obf
	 * Resets the cache for the default labels. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 */ // obf
	public static function reset_default_labels() { // obf
		self::$v_brcrf = array(); // obf
	} // obf
} // obf