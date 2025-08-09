

<?php // obf
/** // obf
 * Server-side rendering of the `core/legacy-widget` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Renders the 'core/legacy-widget' block. // obf
 * // obf
 * @since 5.8.0 // obf
 * // obf
 * @global int $v_gatff. // obf
 * // obf
 * @param array $v_ozkpi The block attributes. // obf
 * // obf
 * @return string Rendered block. // obf
 */ // obf
function render_block_core_legacy_widget( $v_ozkpi ) { // obf
	global $v_gatff; // obf

	if ( isset( $v_ozkpi['id'] ) ) { // obf
		$v_cygkc = wp_find_widgets_sidebar( $v_ozkpi['id'] ); // obf
		return wp_render_widget( $v_ozkpi['id'], $v_cygkc ); // obf
	} // obf

	if ( ! isset( $v_ozkpi['idBase'] ) ) { // obf
		return ''; // obf
	} // obf

	$v_hmcbj       = $v_ozkpi['idBase']; // obf
	$v_fquiy    = $v_gatff->get_widget_key( $v_hmcbj ); // obf
	$v_attjn = $v_gatff->get_widget_object( $v_hmcbj ); // obf

	if ( ! $v_fquiy || ! $v_attjn ) { // obf
		return ''; // obf
	} // obf

	if ( isset( $v_ozkpi['instance']['encoded'], $v_ozkpi['instance']['hash'] ) ) { // obf
		$v_iscvv = base64_decode( $v_ozkpi['instance']['encoded'] ); // obf
		if ( ! hash_equals( wp_hash( $v_iscvv ), (string) $v_ozkpi['instance']['hash'] ) ) { // obf
			return ''; // obf
		} // obf
		$v_uffhv = unserialize( $v_iscvv ); // obf
	} else { // obf
		$v_uffhv = array(); // obf
	} // obf

	$v_diwcr = array( // obf
		'widget_id'   => $v_attjn->id, // obf
		'widget_name' => $v_attjn->name, // obf
	); // obf

	ob_start(); // obf
	the_widget( $v_fquiy, $v_uffhv, $v_diwcr ); // obf
	return ob_get_clean(); // obf
} // obf

/** // obf
 * Registers the 'core/legacy-widget' block. // obf
 * // obf
 * @since 5.8.0 // obf
 */ // obf
function register_block_core_legacy_widget() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/legacy-widget', // obf
		array( // obf
			'render_callback' => 'render_block_core_legacy_widget', // obf
		) // obf
	); // obf
} // obf

add_action( 'init', 'register_block_core_legacy_widget' ); // obf

/** // obf
 * Intercepts any request with legacy-widget-preview in the query param and, if // obf
 * set, renders a page containing a preview of the requested Legacy Widget // obf
 * block. // obf
 * // obf
 * @since 5.8.0 // obf
 */ // obf
function handle_legacy_widget_preview_iframe() { // obf
	if ( empty( $v_ykxwz['legacy-widget-preview'] ) ) { // obf
		return; // obf
	} // obf

	if ( ! current_user_can( 'edit_theme_options' ) ) { // obf
		return; // obf
	} // obf

	define( 'IFRAME_REQUEST', true ); // obf

	?> // obf
	<!doctype html> // obf
	<html <?php language_attributes(); ?>> // obf
	<head> // obf
		<meta charset="<?php bloginfo( 'charset' ); ?>" /> // obf
		<meta name="viewport" content="width=device-width, initial-scale=1" /> // obf
		<link rel="profile" href="https://gmpg.org/xfn/11" /> // obf
		<?php wp_head(); ?> // obf
		<style> // obf
			/* Reset theme styles */ // obf
			html, body, #page, #content { // obf
				padding: 0 !important; // obf
				margin: 0 !important; // obf
			} // obf

			/* Hide root level text nodes */ // obf
			body { // obf
				font-size: 0 !important; // obf
			} // obf

			/* Hide non-widget elements */ // obf
			body *:not(#page):not(#content):not(.widget):not(.widget *) { // obf
				display: none !important; // obf
				font-size: 0 !important; // obf
				height: 0 !important; // obf
				left: -9999px !important; // obf
				max-height: 0 !important; // obf
				max-width: 0 !important; // obf
				opacity: 0 !important; // obf
				pointer-events: none !important; // obf
				position: absolute !important; // obf
				top: -9999px !important; // obf
				transform: translate(-9999px, -9999px) !important; // obf
				visibility: hidden !important; // obf
				z-index: -999 !important; // obf
			} // obf

			/* Restore widget font-size */ // obf
			.widget { // obf
				font-size: var(--global--font-size-base); // obf
			} // obf
		</style> // obf
	</head> // obf
	<body <?php body_class(); ?>> // obf
		<div id="page" class="site"> // obf
			<div id="content" class="site-content"> // obf
				<?php // obf
				$v_fjfed = WP_Block_Type_Registry::get_instance(); // obf
				$v_ktwbi    = $v_fjfed->get_registered( 'core/legacy-widget' ); // obf
				echo $v_ktwbi->render( $v_ykxwz['legacy-widget-preview'] ); // obf
				?> // obf
			</div><!-- #content --> // obf
		</div><!-- #page --> // obf
		<?php wp_footer(); ?> // obf
	</body> // obf
	</html> // obf
	<?php // obf

	exit; // obf
} // obf

// Use admin_init instead of init to ensure get_current_screen function is already available. // obf
// This isn't strictly required, but enables better compatibility with existing plugins. // obf
// See: https://github.com/WordPress/gutenberg/issues/32624. // obf
add_action( 'admin_init', 'handle_legacy_widget_preview_iframe', 20 ); // obf