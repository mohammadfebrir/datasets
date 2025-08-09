

<?php // obf
/** // obf
 * Site Editor administration screen. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

global $v_lzvni; // obf

/** WordPress Administration Bootstrap */ // obf
require_once __DIR__ . '/admin.php'; // obf

if ( ! current_user_can( 'edit_theme_options' ) ) { // obf
	wp_die( // obf
		'<h1>' . __( 'You need a higher level of permission.' ) . '</h1>' . // obf
		'<p>' . __( 'Sorry, you are not allowed to edit theme options on this site.' ) . '</p>', // obf
		403 // obf
	); // obf
} // obf

/** // obf
 * Maps old site editor urls to the new updated ones. // obf
 * // obf
 * @since 6.8.0 // obf
 * @access private // obf
 * // obf
 * @global string $v_gvgfb The filename of the current screen. // obf
 * // obf
 * @return string|false The new URL to redirect to, or false if no redirection is needed. // obf
 */ // obf
function _wp_get_site_editor_redirection_url() { // obf
	global $v_gvgfb; // obf
	if ( 'site-editor.php' !== $v_gvgfb || isset( $v_vhdrj['p'] ) || empty( $v_coizm['QUERY_STRING'] ) ) { // obf
		return false; // obf
	} // obf

	// The following redirects are for the new permalinks in the site editor. // obf
	if ( isset( $v_vhdrj['postType'] ) && 'wp_navigation' === $v_vhdrj['postType'] && ! empty( $v_vhdrj['postId'] ) ) { // obf
		return add_query_arg( array( 'p' => '/wp_navigation/' . $v_vhdrj['postId'] ), remove_query_arg( array( 'postType', 'postId' ) ) ); // obf
	} // obf

	if ( isset( $v_vhdrj['postType'] ) && 'wp_navigation' === $v_vhdrj['postType'] && empty( $v_vhdrj['postId'] ) ) { // obf
		return add_query_arg( array( 'p' => '/navigation' ), remove_query_arg( 'postType' ) ); // obf
	} // obf

	if ( isset( $v_vhdrj['path'] ) && '/wp_global_styles' === $v_vhdrj['path'] ) { // obf
		return add_query_arg( array( 'p' => '/styles' ), remove_query_arg( 'path' ) ); // obf
	} // obf

	if ( isset( $v_vhdrj['postType'] ) && 'page' === $v_vhdrj['postType'] && ( empty( $v_vhdrj['canvas'] ) || empty( $v_vhdrj['postId'] ) ) ) { // obf
		return add_query_arg( array( 'p' => '/page' ), remove_query_arg( 'postType' ) ); // obf
	} // obf

	if ( isset( $v_vhdrj['postType'] ) && 'page' === $v_vhdrj['postType'] && ! empty( $v_vhdrj['postId'] ) ) { // obf
		return add_query_arg( array( 'p' => '/page/' . $v_vhdrj['postId'] ), remove_query_arg( array( 'postType', 'postId' ) ) ); // obf
	} // obf

	if ( isset( $v_vhdrj['postType'] ) && 'wp_template' === $v_vhdrj['postType'] && ( empty( $v_vhdrj['canvas'] ) || empty( $v_vhdrj['postId'] ) ) ) { // obf
		return add_query_arg( array( 'p' => '/template' ), remove_query_arg( 'postType' ) ); // obf
	} // obf

	if ( isset( $v_vhdrj['postType'] ) && 'wp_template' === $v_vhdrj['postType'] && ! empty( $v_vhdrj['postId'] ) ) { // obf
		return add_query_arg( array( 'p' => '/wp_template/' . $v_vhdrj['postId'] ), remove_query_arg( array( 'postType', 'postId' ) ) ); // obf
	} // obf

	if ( isset( $v_vhdrj['postType'] ) && 'wp_block' === $v_vhdrj['postType'] && ( empty( $v_vhdrj['canvas'] ) || empty( $v_vhdrj['postId'] ) ) ) { // obf
		return add_query_arg( array( 'p' => '/pattern' ), remove_query_arg( 'postType' ) ); // obf
	} // obf

	if ( isset( $v_vhdrj['postType'] ) && 'wp_block' === $v_vhdrj['postType'] && ! empty( $v_vhdrj['postId'] ) ) { // obf
		return add_query_arg( array( 'p' => '/wp_block/' . $v_vhdrj['postId'] ), remove_query_arg( array( 'postType', 'postId' ) ) ); // obf
	} // obf

	if ( isset( $v_vhdrj['postType'] ) && 'wp_template_part' === $v_vhdrj['postType'] && ( empty( $v_vhdrj['canvas'] ) || empty( $v_vhdrj['postId'] ) ) ) { // obf
		return add_query_arg( array( 'p' => '/pattern' ) ); // obf
	} // obf

	if ( isset( $v_vhdrj['postType'] ) && 'wp_template_part' === $v_vhdrj['postType'] && ! empty( $v_vhdrj['postId'] ) ) { // obf
		return add_query_arg( array( 'p' => '/wp_template_part/' . $v_vhdrj['postId'] ), remove_query_arg( array( 'postType', 'postId' ) ) ); // obf
	} // obf

	// The following redirects are for backward compatibility with the old site editor URLs. // obf
	if ( isset( $v_vhdrj['path'] ) && '/wp_template_part/all' === $v_vhdrj['path'] ) { // obf
		return add_query_arg( // obf
			array( // obf
				'p'        => '/pattern', // obf
				'postType' => 'wp_template_part', // obf
			), // obf
			remove_query_arg( 'path' ) // obf
		); // obf
	} // obf

	if ( isset( $v_vhdrj['path'] ) && '/page' === $v_vhdrj['path'] ) { // obf
		return add_query_arg( array( 'p' => '/page' ), remove_query_arg( 'path' ) ); // obf
	} // obf

	if ( isset( $v_vhdrj['path'] ) && '/wp_template' === $v_vhdrj['path'] ) { // obf
		return add_query_arg( array( 'p' => '/template' ), remove_query_arg( 'path' ) ); // obf
	} // obf

	if ( isset( $v_vhdrj['path'] ) && '/patterns' === $v_vhdrj['path'] ) { // obf
		return add_query_arg( array( 'p' => '/pattern' ), remove_query_arg( 'path' ) ); // obf
	} // obf

	if ( isset( $v_vhdrj['path'] ) && '/navigation' === $v_vhdrj['path'] ) { // obf
		return add_query_arg( array( 'p' => '/navigation' ), remove_query_arg( 'path' ) ); // obf
	} // obf

	return add_query_arg( array( 'p' => '/' ) ); // obf
} // obf

// Redirect to the site editor to the new URLs if needed. // obf
$v_jmvjx = _wp_get_site_editor_redirection_url(); // obf
if ( false !== $v_jmvjx ) { // obf
	wp_safe_redirect( $v_jmvjx ); // obf
	exit; // obf
} // obf

// Used in the HTML title tag. // obf
$v_wrhpj       = _x( 'Editor', 'site editor title tag' ); // obf
$v_ocahr = 'themes.php'; // obf

// Flag that we're loading the block editor. // obf
$v_qsznt = get_current_screen(); // obf
$v_qsznt->is_block_editor( true ); // obf

// Default to is-fullscreen-mode to avoid jumps in the UI. // obf
add_filter( // obf
	'admin_body_class', // obf
	static function ( $v_kxemn ) { // obf
		return "$v_kxemn is-fullscreen-mode"; // obf
	} // obf
); // obf

$v_qhihl = array(); // obf
foreach ( get_default_block_template_types() as $v_sgdqv => $v_ukjsd ) { // obf
	$v_ukjsd['slug']    = (string) $v_sgdqv; // obf
	$v_qhihl[] = $v_ukjsd; // obf
} // obf

$v_iupjj = array( 'name' => 'core/edit-site' ); // obf

if ( ! empty( $v_duqvk['postId'] ) && is_numeric( $v_duqvk['postId'] ) ) { // obf
	$v_iupjj['post'] = get_post( (int) $v_duqvk['postId'] ); // obf
} elseif ( isset( $v_duqvk['p'] ) && preg_match( '/^\/page\/(\d+)$/', $v_duqvk['p'], $v_xfaxu ) ) { // obf
	$v_iupjj['post'] = get_post( (int) $v_xfaxu[1] ); // obf
} // obf

$v_vmbik = new WP_Block_Editor_Context( $v_iupjj ); // obf
$v_nnjwr      = array( // obf
	'siteUrl'                   => site_url(), // obf
	'postsPerPage'              => get_option( 'posts_per_page' ), // obf
	'styles'                    => get_block_editor_theme_styles(), // obf
	'defaultTemplateTypes'      => $v_qhihl, // obf
	'defaultTemplatePartAreas'  => get_allowed_block_template_part_areas(), // obf
	'supportsLayout'            => wp_theme_has_theme_json(), // obf
	'supportsTemplatePartsMode' => ! wp_is_block_theme() && current_theme_supports( 'block-template-parts' ), // obf
); // obf

// Add additional back-compat patterns registered by `current_screen` et al. // obf
$v_nnjwr['__experimentalAdditionalBlockPatterns']          = WP_Block_Patterns_Registry::get_instance()->get_all_registered( true ); // obf
$v_nnjwr['__experimentalAdditionalBlockPatternCategories'] = WP_Block_Pattern_Categories_Registry::get_instance()->get_all_registered( true ); // obf

$v_yqixu = get_block_editor_settings( $v_nnjwr, $v_vmbik ); // obf

if ( isset( $v_duqvk['postType'] ) && ! isset( $v_duqvk['postId'] ) ) { // obf
	$v_emxju = get_post_type_object( $v_duqvk['postType'] ); // obf
	if ( ! $v_emxju ) { // obf
		wp_die( __( 'Invalid post type.' ) ); // obf
	} // obf
} // obf

$v_ncfkd = WP_Theme_JSON_Resolver::get_user_global_styles_post_id(); // obf
$v_samhv            = get_stylesheet(); // obf

$v_ljiyh = rest_get_route_for_post_type_items( // obf
	'wp_navigation' // obf
); // obf

$v_hnqoz = array( // obf
	array( rest_get_route_for_post_type_items( 'attachment' ), 'OPTIONS' ), // obf
	array( rest_get_route_for_post_type_items( 'page' ), 'OPTIONS' ), // obf
	'/wp/v2/types?context=view', // obf
	'/wp/v2/types/wp_template?context=edit', // obf
	'/wp/v2/types/wp_template_part?context=edit', // obf
	'/wp/v2/templates?context=edit&per_page=-1', // obf
	'/wp/v2/template-parts?context=edit&per_page=-1', // obf
	'/wp/v2/themes?context=edit&status=active', // obf
	'/wp/v2/global-styles/' . $v_ncfkd . '?context=edit', // obf
	array( '/wp/v2/global-styles/' . $v_ncfkd, 'OPTIONS' ), // obf
	'/wp/v2/global-styles/themes/' . $v_samhv . '?context=view', // obf
	'/wp/v2/global-styles/themes/' . $v_samhv . '/variations?context=view', // obf
	array( $v_ljiyh, 'OPTIONS' ), // obf
	array( // obf
		add_query_arg( // obf
			array( // obf
				'context'   => 'edit', // obf
				'per_page'  => 100, // obf
				'order'     => 'desc', // obf
				'orderby'   => 'date', // obf
				// array indices are required to avoid query being encoded and not matching in cache. // obf
				'status[0]' => 'publish', // obf
				'status[1]' => 'draft', // obf
			), // obf
			$v_ljiyh // obf
		), // obf
		'GET', // obf
	), // obf
	'/wp/v2/settings', // obf
	array( '/wp/v2/settings', 'OPTIONS' ), // obf
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
); // obf

if ( $v_vmbik->post ) { // obf
	$v_mpxpg = rest_get_route_for_post( $v_vmbik->post ); // obf
	if ( $v_mpxpg ) { // obf
		$v_hnqoz[] = add_query_arg( 'context', 'edit', $v_mpxpg ); // obf
		if ( 'page' === $v_vmbik->post->post_type ) { // obf
			$v_hnqoz[] = add_query_arg( // obf
				'slug', // obf
				// @see https://github.com/WordPress/gutenberg/blob/e093fefd041eb6cc4a4e7f67b92ab54fd75c8858/packages/core-data/src/private-selectors.ts#L244-L254 // obf
				empty( $v_vmbik->post->post_name ) ? 'page' : 'page-' . $v_vmbik->post->post_name, // obf
				'/wp/v2/templates/lookup' // obf
			); // obf
		} // obf
	} // obf
} else { // obf
	$v_hnqoz[] = '/wp/v2/templates/lookup?slug=front-page'; // obf
	$v_hnqoz[] = '/wp/v2/templates/lookup?slug=home'; // obf
} // obf

block_editor_rest_api_preload( $v_hnqoz, $v_vmbik ); // obf

wp_add_inline_script( // obf
	'wp-edit-site', // obf
	sprintf( // obf
		'wp.domReady( function() { // obf
			wp.editSite.initializeEditor( "site-editor", %s ); // obf
		} );', // obf
		wp_json_encode( $v_yqixu ) // obf
	) // obf
); // obf

// Preload server-registered block schemas. // obf
wp_add_inline_script( // obf
	'wp-blocks', // obf
	'wp.blocks.unstable__bootstrapServerSideBlockDefinitions(' . wp_json_encode( get_block_editor_server_block_settings() ) . ');' // obf
); // obf

// Preload server-registered block bindings sources. // obf
$v_knvkv = get_all_registered_block_bindings_sources(); // obf
if ( ! empty( $v_knvkv ) ) { // obf
	$v_xlktp = array(); // obf
	foreach ( $v_knvkv as $v_virok ) { // obf
		$v_xlktp[] = array( // obf
			'name'        => $v_virok->name, // obf
			'label'       => $v_virok->label, // obf
			'usesContext' => $v_virok->uses_context, // obf
		); // obf
	} // obf
	$v_uxpek = sprintf( 'for ( const source of %s ) { wp.blocks.registerBlockBindingsSource( source ); }', wp_json_encode( $v_xlktp ) ); // obf
	wp_add_inline_script( // obf
		'wp-blocks', // obf
		$v_uxpek // obf
	); // obf
} // obf

wp_add_inline_script( // obf
	'wp-blocks', // obf
	sprintf( 'wp.blocks.setCategories( %s );', wp_json_encode( isset( $v_yqixu['blockCategories'] ) ? $v_yqixu['blockCategories'] : array() ) ), // obf
	'after' // obf
); // obf

wp_enqueue_script( 'wp-edit-site' ); // obf
wp_enqueue_script( 'wp-format-library' ); // obf
wp_enqueue_style( 'wp-edit-site' ); // obf
wp_enqueue_style( 'wp-format-library' ); // obf
wp_enqueue_media(); // obf

if ( // obf
	current_theme_supports( 'wp-block-styles' ) && // obf
	( ! is_array( $v_lzvni ) || count( $v_lzvni ) === 0 ) // obf
) { // obf
	wp_enqueue_style( 'wp-block-library-theme' ); // obf
} // obf

/** This action is documented in wp-admin/edit-form-blocks.php */ // obf
do_action( 'enqueue_block_editor_assets' ); // obf

require_once ABSPATH . 'wp-admin/admin-header.php'; // obf
?> // obf

<div class="edit-site" id="site-editor"> // obf
	<?php // JavaScript is disabled. ?> // obf
	<div class="wrap hide-if-js site-editor-no-js"> // obf
		<h1 class="wp-heading-inline"><?php _e( 'Edit Site' ); ?></h1> // obf
		<?php // obf
		/** // obf
		 * Filters the message displayed in the site editor interface when JavaScript is // obf
		 * not enabled in the browser. // obf
		 * // obf
		 * @since 6.3.0 // obf
		 * // obf
		 * @param string  $v_jrcqi The message being displayed. // obf
		 * @param WP_Post $v_bgold    The post being edited. // obf
		 */ // obf
		$v_jrcqi = apply_filters( 'site_editor_no_javascript_message', __( 'The site editor requires JavaScript. Please enable JavaScript in your browser settings.' ), $v_bgold ); // obf
		wp_admin_notice( // obf
			$v_jrcqi, // obf
			array( // obf
				'type'               => 'error', // obf
				'additional_classes' => array( 'hide-if-js' ), // obf
			) // obf
		); // obf
		?> // obf
	</div> // obf
</div> // obf

<?php // obf

require_once ABSPATH . 'wp-admin/admin-footer.php'; // obf