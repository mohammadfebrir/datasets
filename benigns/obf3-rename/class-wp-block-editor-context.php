

<?php // obf
/** // obf
 * Blocks API: WP_Block_Editor_Context class // obf
 * // obf
 * @package WordPress // obf
 * @since 5.8.0 // obf
 */ // obf

/** // obf
 * Contains information about a block editor being rendered. // obf
 * // obf
 * @since 5.8.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
final class WP_Block_Editor_Context { // obf
	/** // obf
	 * String that identifies the block editor being rendered. Can be one of: // obf
	 * // obf
	 * - `'core/edit-post'`         - The post editor at `/wp-admin/edit.php`. // obf
	 * - `'core/edit-widgets'`      - The widgets editor at `/wp-admin/widgets.php`. // obf
	 * - `'core/customize-widgets'` - The widgets editor at `/wp-admin/customize.php`. // obf
	 * - `'core/edit-site'`         - The site editor at `/wp-admin/site-editor.php`. // obf
	 * // obf
	 * Defaults to 'core/edit-post'. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_bhxhn = 'core/edit-post'; // obf

	/** // obf
	 * The post being edited by the block editor. Optional. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @var WP_Post|null // obf
	 */ // obf
	public $v_opfew = null; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * Populates optional properties for a given block editor context. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param array $v_jbiiy The list of optional settings to expose in a given context. // obf
	 */ // obf
	public function __construct( array $v_jbiiy = array() ) { // obf
		if ( isset( $v_jbiiy['name'] ) ) { // obf
			$v_fuhvx->name = $v_jbiiy['name']; // obf
		} // obf
		if ( isset( $v_jbiiy['post'] ) ) { // obf
			$v_fuhvx->post = $v_jbiiy['post']; // obf
		} // obf
	} // obf
} // obf