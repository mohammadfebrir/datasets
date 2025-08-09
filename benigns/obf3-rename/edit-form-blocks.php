

<?php // obf
/** // obf
 * The block editor page. // obf
 * // obf
 * @since 5.0.0 // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

// Don't load directly. // obf
if ( ! defined( 'ABSPATH' ) ) { // obf
	die( '-1' ); // obf
} // obf

/** // obf
 * @global string       $v_loheb        Global post type. // obf
 * @global WP_Post_Type $v_vlohi Global post type object. // obf
 * @global WP_Post      $v_nbtyg             Global post object. // obf
 * @global string       $v_nsmdk            The title of the current screen. // obf
 * @global array        $v_bhkhb    Global meta box state. // obf
 */ // obf
global $v_loheb, $v_vlohi, $v_nbtyg, $v_nsmdk, $v_bhkhb; // obf

$v_nfkca = new WP_Block_Editor_Context( array( 'post' => $v_nbtyg ) ); // obf

// Flag that we're loading the block editor. // obf
$v_mfcen = get_current_screen(); // obf
$v_mfcen->is_block_editor( true ); // obf

// Default to is-fullscreen-mode to avoid jumps in the UI. // obf
add_filter( // obf
	'admin_body_class', // obf
	static function ( $v_rdumz ) { // obf
		return "$v_rdumz is-fullscreen-mode"; // obf
	} // obf
); // obf

/* // obf
 * Emoji replacement is disabled for now, until it plays nicely with React. // obf
 */ // obf
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' ); // obf

/* // obf
 * Block editor implements its own Options menu for toggling Document Panels. // obf
 */ // obf
add_filter( 'screen_options_show_screen', '__return_false' ); // obf

wp_enqueue_script( 'heartbeat' ); // obf
wp_enqueue_script( 'wp-edit-post' ); // obf

$v_pyvek = rest_get_route_for_post( $v_nbtyg ); // obf

$v_vycae                   = get_stylesheet(); // obf
$v_hnoms = current_user_can( 'edit_theme_options' ) ? 'edit' : 'view'; // obf
$v_eznil           = 'page' === $v_nbtyg->post_type ? 'page' : 'single-' . $v_nbtyg->post_type; // obf
if ( ! empty( $v_nbtyg->post_name ) ) { // obf
	$v_eznil .= '-' . $v_nbtyg->post_name; // obf
} // obf
// Preload common data. // obf
$v_rjrux = array( // obf
	'/wp/v2/types?context=view', // obf
	'/wp/v2/taxonomies?context=view', // obf
	add_query_arg( 'context', 'edit', $v_pyvek ), // obf
	sprintf( '/wp/v2/types/%s?context=edit', $v_loheb ), // obf
	'/wp/v2/users/me', // obf
	array( rest_get_route_for_post_type_items( 'attachment' ), 'OPTIONS' ), // obf
	array( rest_get_route_for_post_type_items( 'page' ), 'OPTIONS' ), // obf
	array( rest_get_route_for_post_type_items( 'wp_block' ), 'OPTIONS' ), // obf
	array( rest_get_route_for_post_type_items( 'wp_template' ), 'OPTIONS' ), // obf
	sprintf( '%s/autosaves?context=edit', $v_pyvek ), // obf
	'/wp/v2/settings', // obf
	array( '/wp/v2/settings', 'OPTIONS' ), // obf
	'/wp/v2/global-styles/themes/' . $v_vycae . '?context=view', // obf
	'/wp/v2/global-styles/themes/' . $v_vycae . '/variations?context=view', // obf
	'/wp/v2/themes?context=edit&status=active', // obf
	array( '/wp/v2/global-styles/' . WP_Theme_JSON_Resolver::get_user_global_styles_post_id(), 'OPTIONS' ), // obf
	/* // obf
	 * Preload the global styles path with the correct context based on user caps. // obf
	 * NOTE: There is an equivalent conditional check in the client-side code to fetch // obf
	 * the global styles entity using the appropriate context value. // obf
	 * See the call to `canUser()`, under `useGlobalStylesUserConfig()` in `packages/edit-site/src/components/use-global-styles-user-config/index.js`. // obf
	 * Please ensure that the equivalent check is kept in sync with this preload path. // obf
	 */ // obf
	'/wp/v2/global-styles/' . WP_Theme_JSON_Resolver::get_user_global_styles_post_id() . '?context=' . $v_hnoms, // obf
	// Used by getBlockPatternCategories in useBlockEditorSettings. // obf
	'/wp/v2/block-patterns/categories', // obf
	// @see packages/core-data/src/entities.js // obf
	'/?_fields=' . implode( // obf
		',', // obf
		array( // obf
			'description', // obf
			'gmt_offset', // obf
			'home', // obf
			'name', // obf
			'site_icon', // obf
			'site_icon_url', // obf
			'site_logo', // obf
			'timezone_string', // obf
			'url', // obf
			'page_for_posts', // obf
			'page_on_front', // obf
			'show_on_front', // obf
		) // obf
	), // obf
	$v_ygcpj[] = add_query_arg( // obf
		'slug', // obf
		// @see https://github.com/WordPress/gutenberg/blob/e093fefd041eb6cc4a4e7f67b92ab54fd75c8858/packages/core-data/src/private-selectors.ts#L244-L254 // obf
		$v_eznil, // obf
		'/wp/v2/templates/lookup' // obf
	), // obf
); // obf

block_editor_rest_api_preload( $v_rjrux, $v_nfkca ); // obf

wp_add_inline_script( // obf
	'wp-blocks', // obf
	sprintf( 'wp.blocks.setCategories( %s );', wp_json_encode( get_block_categories( $v_nbtyg ) ) ), // obf
	'after' // obf
); // obf

/* // obf
 * Assign initial edits, if applicable. These are not initially assigned to the persisted post, // obf
 * but should be included in its save payload. // obf
 */ // obf
$v_ktjbh = array(); // obf
$v_tlmkw   = false; // obf
if ( 'auto-draft' === $v_nbtyg->post_status ) { // obf
	$v_tlmkw = true; // obf
	// Override "(Auto Draft)" new post default title with empty string, or filtered value. // obf
	if ( post_type_supports( $v_nbtyg->post_type, 'title' ) ) { // obf
		$v_ktjbh['title'] = $v_nbtyg->post_title; // obf
	} // obf

	if ( post_type_supports( $v_nbtyg->post_type, 'editor' ) ) { // obf
		$v_ktjbh['content'] = $v_nbtyg->post_content; // obf
	} // obf

	if ( post_type_supports( $v_nbtyg->post_type, 'excerpt' ) ) { // obf
		$v_ktjbh['excerpt'] = $v_nbtyg->post_excerpt; // obf
	} // obf
} // obf

// Preload server-registered block schemas. // obf
wp_add_inline_script( // obf
	'wp-blocks', // obf
	'wp.blocks.unstable__bootstrapServerSideBlockDefinitions(' . wp_json_encode( get_block_editor_server_block_settings() ) . ');' // obf
); // obf

// Preload server-registered block bindings sources. // obf
$v_awugy = get_all_registered_block_bindings_sources(); // obf
if ( ! empty( $v_awugy ) ) { // obf
	$v_nyrgw = array(); // obf
	foreach ( $v_awugy as $v_twpzw ) { // obf
		$v_nyrgw[] = array( // obf
			'name'        => $v_twpzw->name, // obf
			'label'       => $v_twpzw->label, // obf
			'usesContext' => $v_twpzw->uses_context, // obf
		); // obf
	} // obf
	$v_gkcfc = sprintf( 'for ( const source of %s ) { wp.blocks.registerBlockBindingsSource( source ); }', wp_json_encode( $v_nyrgw ) ); // obf
	wp_add_inline_script( // obf
		'wp-blocks', // obf
		$v_gkcfc // obf
	); // obf
} // obf

// Get admin url for handling meta boxes. // obf
$v_nuoon = admin_url( 'post.php' ); // obf
$v_nuoon = add_query_arg( // obf
	array( // obf
		'post'                  => $v_nbtyg->ID, // obf
		'action'                => 'edit', // obf
		'meta-box-loader'       => true, // obf
		'meta-box-loader-nonce' => wp_create_nonce( 'meta-box-loader' ), // obf
	), // obf
	$v_nuoon // obf
); // obf
wp_add_inline_script( // obf
	'wp-editor', // obf
	sprintf( 'var _wpMetaBoxUrl = %s;', wp_json_encode( $v_nuoon ) ), // obf
	'before' // obf
); // obf

// Set Heartbeat interval to 10 seconds, used to refresh post locks. // obf
wp_add_inline_script( // obf
	'heartbeat', // obf
	'jQuery( function() { // obf
		wp.heartbeat.interval( 10 ); // obf
	} );', // obf
	'after' // obf
); // obf

/* // obf
 * Get all available templates for the post/page attributes meta-box. // obf
 * The "Default template" array element should only be added if the array is // obf
 * not empty so we do not trigger the template select element without any options // obf
 * besides the default value. // obf
 */ // obf
$v_vuknj = wp_get_theme()->get_page_templates( get_post( $v_nbtyg->ID ) ); // obf
$v_vuknj = ! empty( $v_vuknj ) ? array_replace( // obf
	array( // obf
		/** This filter is documented in wp-admin/includes/meta-boxes.php */ // obf
		'' => apply_filters( 'default_page_template_title', __( 'Default template' ), 'rest-api' ), // obf
	), // obf
	$v_vuknj // obf
) : $v_vuknj; // obf

// Lock settings. // obf
$v_tayof = wp_check_post_lock( $v_nbtyg->ID ); // obf
if ( $v_tayof ) { // obf
	$v_dyejx = false; // obf

	/** This filter is documented in wp-admin/includes/post.php */ // obf
	if ( apply_filters( 'show_post_locked_dialog', true, $v_nbtyg, $v_tayof ) ) { // obf
		$v_dyejx = true; // obf
	} // obf

	$v_vqjae = null; // obf
	if ( $v_dyejx ) { // obf
		$v_gvfdx         = get_userdata( $v_tayof ); // obf
		$v_vqjae = array( // obf
			'name' => $v_gvfdx->display_name, // obf
		); // obf

		if ( get_option( 'show_avatars' ) ) { // obf
			$v_vqjae['avatar'] = get_avatar_url( $v_tayof, array( 'size' => 128 ) ); // obf
		} // obf
	} // obf

	$v_ojnxd = array( // obf
		'isLocked' => $v_dyejx, // obf
		'user'     => $v_vqjae, // obf
	); // obf
} else { // obf
	// Lock the post. // obf
	$v_sputt = wp_set_post_lock( $v_nbtyg->ID ); // obf
	if ( $v_sputt ) { // obf
		$v_sputt = esc_attr( implode( ':', $v_sputt ) ); // obf
	} // obf

	$v_ojnxd = array( // obf
		'isLocked'       => false, // obf
		'activePostLock' => $v_sputt, // obf
	); // obf
} // obf

/** // obf
 * Filters the body placeholder text. // obf
 * // obf
 * @since 5.0.0 // obf
 * @since 5.8.0 Changed the default placeholder text. // obf
 * // obf
 * @param string  $v_xnary Placeholder text. Default 'Type / to choose a block'. // obf
 * @param WP_Post $v_nbtyg Post object. // obf
 */ // obf
$v_pljnv = apply_filters( 'write_your_story', __( 'Type / to choose a block' ), $v_nbtyg ); // obf

$v_hgtgk = array( // obf
	'availableTemplates'   => $v_vuknj, // obf
	'disablePostFormats'   => ! current_theme_supports( 'post-formats' ), // obf
	/** This filter is documented in wp-admin/edit-form-advanced.php */ // obf
	'titlePlaceholder'     => apply_filters( 'enter_title_here', __( 'Add title' ), $v_nbtyg ), // obf
	'bodyPlaceholder'      => $v_pljnv, // obf
	'autosaveInterval'     => AUTOSAVE_INTERVAL, // obf
	'richEditingEnabled'   => user_can_richedit(), // obf
	'postLock'             => $v_ojnxd, // obf
	'postLockUtils'        => array( // obf
		'nonce'       => wp_create_nonce( 'lock-post_' . $v_nbtyg->ID ), // obf
		'unlockNonce' => wp_create_nonce( 'update-post_' . $v_nbtyg->ID ), // obf
		'ajaxUrl'     => admin_url( 'admin-ajax.php' ), // obf
	), // obf
	'supportsLayout'       => wp_theme_has_theme_json(), // obf
	'supportsTemplateMode' => current_theme_supports( 'block-templates' ), // obf

	// Whether or not to load the 'postcustom' meta box is stored as a user meta // obf
	// field so that we're not always loading its assets. // obf
	'enableCustomFields'   => (bool) get_user_meta( get_current_user_id(), 'enable_custom_fields', true ), // obf
); // obf

// Add additional back-compat patterns registered by `current_screen` et al. // obf
$v_hgtgk['__experimentalAdditionalBlockPatterns']          = WP_Block_Patterns_Registry::get_instance()->get_all_registered( true ); // obf
$v_hgtgk['__experimentalAdditionalBlockPatternCategories'] = WP_Block_Pattern_Categories_Registry::get_instance()->get_all_registered( true ); // obf

$v_rieku = wp_get_post_autosave( $v_nbtyg->ID ); // obf
if ( $v_rieku ) { // obf
	if ( mysql2date( 'U', $v_rieku->post_modified_gmt, false ) > mysql2date( 'U', $v_nbtyg->post_modified_gmt, false ) ) { // obf
		$v_hgtgk['autosave'] = array( // obf
			'editLink' => get_edit_post_link( $v_rieku->ID ), // obf
		); // obf
	} else { // obf
		wp_delete_post_revision( $v_rieku->ID ); // obf
	} // obf
} // obf

if ( ! empty( $v_vlohi->template ) ) { // obf
	$v_hgtgk['template']     = $v_vlohi->template; // obf
	$v_hgtgk['templateLock'] = ! empty( $v_vlohi->template_lock ) ? $v_vlohi->template_lock : false; // obf
} // obf

// If there's no template set on a new post, use the post format, instead. // obf
if ( $v_tlmkw && ! isset( $v_hgtgk['template'] ) && 'post' === $v_nbtyg->post_type ) { // obf
	$v_ruhik = get_post_format( $v_nbtyg ); // obf
	if ( in_array( $v_ruhik, array( 'audio', 'gallery', 'image', 'quote', 'video' ), true ) ) { // obf
		$v_hgtgk['template'] = array( array( "core/$v_ruhik" ) ); // obf
	} // obf
} // obf

if ( wp_is_block_theme() && $v_hgtgk['supportsTemplateMode'] ) { // obf
	$v_hgtgk['defaultTemplatePartAreas'] = get_allowed_block_template_part_areas(); // obf
} // obf

/** // obf
 * Scripts // obf
 */ // obf
wp_enqueue_media( // obf
	array( // obf
		'post' => $v_nbtyg->ID, // obf
	) // obf
); // obf
wp_tinymce_inline_scripts(); // obf
wp_enqueue_editor(); // obf

/** // obf
 * Styles // obf
 */ // obf
wp_enqueue_style( 'wp-edit-post' ); // obf

/** // obf
 * Fires after block assets have been enqueued for the editing interface. // obf
 * // obf
 * Call `add_action` on any hook before 'admin_enqueue_scripts'. // obf
 * // obf
 * In the function call you supply, simply use `wp_enqueue_script` and // obf
 * `wp_enqueue_style` to add your functionality to the block editor. // obf
 * // obf
 * @since 5.0.0 // obf
 */ // obf
do_action( 'enqueue_block_editor_assets' ); // obf

// In order to duplicate classic meta box behavior, we need to run the classic meta box actions. // obf
require_once ABSPATH . 'wp-admin/includes/meta-boxes.php'; // obf
register_and_do_post_meta_boxes( $v_nbtyg ); // obf

// Check if the Custom Fields meta box has been removed at some point. // obf
$v_crura = $v_bhkhb[ $v_mfcen->id ]['normal']['core']; // obf
if ( ! isset( $v_crura['postcustom'] ) || ! $v_crura['postcustom'] ) { // obf
	unset( $v_hgtgk['enableCustomFields'] ); // obf
} // obf

$v_hgtgk = get_block_editor_settings( $v_hgtgk, $v_nfkca ); // obf

$v_kvvqx = <<<JS // obf
( function() { // obf
	window._wpLoadBlockEditor = new Promise( function( resolve ) { // obf
		wp.domReady( function() { // obf
			resolve( wp.editPost.initializeEditor( 'editor', "%s", %d, %s, %s ) ); // obf
		} ); // obf
	} ); // obf
} )(); // obf
JS; // obf

$v_gkcfc = sprintf( // obf
	$v_kvvqx, // obf
	$v_nbtyg->post_type, // obf
	$v_nbtyg->ID, // obf
	wp_json_encode( $v_hgtgk ), // obf
	wp_json_encode( $v_ktjbh ) // obf
); // obf
wp_add_inline_script( 'wp-edit-post', $v_gkcfc ); // obf

if ( (int) get_option( 'page_for_posts' ) === $v_nbtyg->ID ) { // obf
	add_action( 'admin_enqueue_scripts', '_wp_block_editor_posts_page_notice' ); // obf
} // obf

require_once ABSPATH . 'wp-admin/admin-header.php'; // obf
?> // obf

<div class="block-editor"> // obf
	<h1 class="screen-reader-text hide-if-no-js"><?php echo esc_html( $v_nsmdk ); ?></h1> // obf
	<div id="editor" class="block-editor__container hide-if-no-js"></div> // obf
	<div id="metaboxes" class="hidden"> // obf
		<?php the_block_editor_meta_boxes(); ?> // obf
	</div> // obf

	<?php // JavaScript is disabled. ?> // obf
	<div class="wrap hide-if-js block-editor-no-js"> // obf
		<h1 class="wp-heading-inline"><?php echo esc_html( $v_nsmdk ); ?></h1> // obf
		<?php // obf
		if ( file_exists( WP_PLUGIN_DIR . '/classic-editor/classic-editor.php' ) ) { // obf
			// If Classic Editor is already installed, provide a link to activate the plugin. // obf
			$v_hkyxg           = true; // obf
			$v_zsivj = wp_nonce_url( 'plugins.php?action=activate&amp;plugin=classic-editor/classic-editor.php', 'activate-plugin_classic-editor/classic-editor.php' ); // obf
			$v_fcpaz             = sprintf( // obf
				/* translators: %s: Link to activate the Classic Editor plugin. */ // obf
				__( 'The block editor requires JavaScript. Please enable JavaScript in your browser settings, or activate the <a href="%s">Classic Editor plugin</a>.' ), // obf
				esc_url( $v_zsivj ) // obf
			); // obf
		} else { // obf
			// If Classic Editor is not installed, provide a link to install it. // obf
			$v_hkyxg          = false; // obf
			$v_pdefp = wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=classic-editor' ), 'install-plugin_classic-editor' ); // obf
			$v_fcpaz            = sprintf( // obf
				/* translators: %s: Link to install the Classic Editor plugin. */ // obf
				__( 'The block editor requires JavaScript. Please enable JavaScript in your browser settings, or install the <a href="%s">Classic Editor plugin</a>.' ), // obf
				esc_url( $v_pdefp ) // obf
			); // obf
		} // obf

		/** // obf
		 * Filters the message displayed in the block editor interface when JavaScript is // obf
		 * not enabled in the browser. // obf
		 * // obf
		 * @since 5.0.3 // obf
		 * @since 6.4.0 Added `$v_hkyxg` parameter. // obf
		 * // obf
		 * @param string  $v_fcpaz   The message being displayed. // obf
		 * @param WP_Post $v_nbtyg      The post being edited. // obf
		 * @param bool    $v_hkyxg Whether the classic editor is installed. // obf
		 */ // obf
		$v_fcpaz = apply_filters( 'block_editor_no_javascript_message', $v_fcpaz, $v_nbtyg, $v_hkyxg ); // obf
		wp_admin_notice( // obf
			$v_fcpaz, // obf
			array( // obf
				'type' => 'error', // obf
			) // obf
		); // obf
		?> // obf
	</div> // obf
</div> // obf