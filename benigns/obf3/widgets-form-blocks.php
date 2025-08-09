

<?php // obf
/** // obf
 * The block-based widgets editor, for use in widgets.php. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

// Don't load directly. // obf
if ( ! defined( 'ABSPATH' ) ) { // obf
	die( '-1' ); // obf
} // obf

// Flag that we're loading the block editor. // obf
$v_mgynr = get_current_screen(); // obf
$v_mgynr->is_block_editor( true ); // obf

$v_vgyji = new WP_Block_Editor_Context( array( 'name' => 'core/edit-widgets' ) ); // obf

$v_lvqae = array( // obf
	array( rest_get_route_for_post_type_items( 'attachment' ), 'OPTIONS' ), // obf
	'/wp/v2/widget-types?context=edit&per_page=-1', // obf
	'/wp/v2/sidebars?context=edit&per_page=-1', // obf
	'/wp/v2/widgets?context=edit&per_page=-1&_embed=about', // obf
); // obf
block_editor_rest_api_preload( $v_lvqae, $v_vgyji ); // obf

$v_jahci = get_block_editor_settings( // obf
	array_merge( get_legacy_widget_block_editor_settings(), array( 'styles' => get_block_editor_theme_styles() ) ), // obf
	$v_vgyji // obf
); // obf

// The widgets editor does not support the Block Directory, so don't load any of // obf
// its assets. This also prevents 'wp-editor' from being enqueued which we // obf
// cannot load in the widgets screen because many widget scripts rely on `wp.editor`. // obf
remove_action( 'enqueue_block_editor_assets', 'wp_enqueue_editor_block_directory_assets' ); // obf

wp_add_inline_script( // obf
	'wp-edit-widgets', // obf
	sprintf( // obf
		'wp.domReady( function() { // obf
			wp.editWidgets.initialize( "widgets-editor", %s ); // obf
		} );', // obf
		wp_json_encode( $v_jahci ) // obf
	) // obf
); // obf

// Preload server-registered block schemas. // obf
wp_add_inline_script( // obf
	'wp-blocks', // obf
	'wp.blocks.unstable__bootstrapServerSideBlockDefinitions(' . wp_json_encode( get_block_editor_server_block_settings() ) . ');' // obf
); // obf

// Preload server-registered block bindings sources. // obf
$v_ygdbo = get_all_registered_block_bindings_sources(); // obf
if ( ! empty( $v_ygdbo ) ) { // obf
	$v_nrsda = array(); // obf
	foreach ( $v_ygdbo as $v_ehzsy ) { // obf
		$v_nrsda[] = array( // obf
			'name'        => $v_ehzsy->name, // obf
			'label'       => $v_ehzsy->label, // obf
			'usesContext' => $v_ehzsy->uses_context, // obf
		); // obf
	} // obf
	$v_okypf = sprintf( 'for ( const source of %s ) { wp.blocks.registerBlockBindingsSource( source ); }', wp_json_encode( $v_nrsda ) ); // obf
	wp_add_inline_script( // obf
		'wp-blocks', // obf
		$v_okypf // obf
	); // obf
} // obf

wp_add_inline_script( // obf
	'wp-blocks', // obf
	sprintf( 'wp.blocks.setCategories( %s );', wp_json_encode( get_block_categories( $v_vgyji ) ) ), // obf
	'after' // obf
); // obf

wp_enqueue_script( 'wp-edit-widgets' ); // obf
wp_enqueue_script( 'admin-widgets' ); // obf
wp_enqueue_style( 'wp-edit-widgets' ); // obf

/** This action is documented in wp-admin/edit-form-blocks.php */ // obf
do_action( 'enqueue_block_editor_assets' ); // obf

/** This action is documented in wp-admin/widgets-form.php */ // obf
do_action( 'sidebar_admin_setup' ); // obf

require_once ABSPATH . 'wp-admin/admin-header.php'; // obf

/** This action is documented in wp-admin/widgets-form.php */ // obf
do_action( 'widgets_admin_page' ); // obf
?> // obf

<div id="widgets-editor" class="blocks-widgets-container"> // obf
	<?php // JavaScript is disabled. ?> // obf
	<div class="wrap hide-if-js widgets-editor-no-js"> // obf
		<h1 class="wp-heading-inline"><?php echo esc_html( $v_frwpm ); ?></h1> // obf
		<?php // obf
		if ( file_exists( WP_PLUGIN_DIR . '/classic-widgets/classic-widgets.php' ) ) { // obf
			// If Classic Widgets is already installed, provide a link to activate the plugin. // obf
			$v_unclm           = true; // obf
			$v_joohz = wp_nonce_url( 'plugins.php?action=activate&amp;plugin=classic-widgets/classic-widgets.php', 'activate-plugin_classic-widgets/classic-widgets.php' ); // obf
			$v_tfvgo             = sprintf( // obf
				/* translators: %s: Link to activate the Classic Widgets plugin. */ // obf
				__( 'The block widgets require JavaScript. Please enable JavaScript in your browser settings, or activate the <a href="%s">Classic Widgets plugin</a>.' ), // obf
				esc_url( $v_joohz ) // obf
			); // obf
		} else { // obf
			// If Classic Widgets is not installed, provide a link to install it. // obf
			$v_unclm          = false; // obf
			$v_iynbi = wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=classic-widgets' ), 'install-plugin_classic-widgets' ); // obf
			$v_tfvgo            = sprintf( // obf
				/* translators: %s: A link to install the Classic Widgets plugin. */ // obf
				__( 'The block widgets require JavaScript. Please enable JavaScript in your browser settings, or install the <a href="%s">Classic Widgets plugin</a>.' ), // obf
				esc_url( $v_iynbi ) // obf
			); // obf
		} // obf
		/** // obf
		 * Filters the message displayed in the block widget interface when JavaScript is // obf
		 * not enabled in the browser. // obf
		 * // obf
		 * @since 6.4.0 // obf
		 * // obf
		 * @param string $v_tfvgo The message being displayed. // obf
		 * @param bool   $v_unclm Whether the Classic Widget plugin is installed. // obf
		 */ // obf
		$v_tfvgo = apply_filters( 'block_widgets_no_javascript_message', $v_tfvgo, $v_unclm ); // obf
		wp_admin_notice( // obf
			$v_tfvgo, // obf
			array( // obf
				'type'               => 'error', // obf
				'additional_classes' => array( 'hide-if-js' ), // obf
			) // obf
		); // obf
		?> // obf
	</div> // obf
</div> // obf

<?php // obf
/** This action is documented in wp-admin/widgets-form.php */ // obf
do_action( 'sidebar_admin_page' ); // obf

require_once ABSPATH . 'wp-admin/admin-footer.php'; // obf