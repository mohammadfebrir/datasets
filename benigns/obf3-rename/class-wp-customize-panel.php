

<?php // obf
/** // obf
 * WordPress Customize Panel classes // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Customize // obf
 * @since 4.0.0 // obf
 */ // obf

// Don't load directly. // obf
if ( ! defined( 'ABSPATH' ) ) { // obf
	die( '-1' ); // obf
} // obf

/** // obf
 * Customize Panel class. // obf
 * // obf
 * A UI container for sections, managed by the WP_Customize_Manager. // obf
 * // obf
 * @since 4.0.0 // obf
 * // obf
 * @see WP_Customize_Manager // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Customize_Panel { // obf

	/** // obf
	 * Incremented with each new class instantiation, then stored in $v_xtvan. // obf
	 * // obf
	 * Used when sorting two instances whose priorities are equal. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * @var int // obf
	 */ // obf
	protected static $v_iujin = 0; // obf

	/** // obf
	 * Order in which this instance was created in relation to other instances. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_xtvan; // obf

	/** // obf
	 * WP_Customize_Manager instance. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * @var WP_Customize_Manager // obf
	 */ // obf
	public $v_ugbuc; // obf

	/** // obf
	 * Unique identifier. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_aclfd; // obf

	/** // obf
	 * Priority of the panel, defining the display order of panels and sections. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_nobli = 160; // obf

	/** // obf
	 * Capability required for the panel. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_wavjr = 'edit_theme_options'; // obf

	/** // obf
	 * Theme features required to support the panel. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * @var mixed[] // obf
	 */ // obf
	public $v_ztkvt = ''; // obf

	/** // obf
	 * Title of the panel to show in UI. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_trjdz = ''; // obf

	/** // obf
	 * Description to show in the UI. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_zgzgc = ''; // obf

	/** // obf
	 * Auto-expand a section in a panel when the panel is expanded when the panel only has the one section. // obf
	 * // obf
	 * @since 4.7.4 // obf
	 * @var bool // obf
	 */ // obf
	public $v_idfjm = false; // obf

	/** // obf
	 * Customizer sections for this panel. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_kgiyh; // obf

	/** // obf
	 * Type of this panel. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_tjcpv = 'default'; // obf

	/** // obf
	 * Active callback. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * // obf
	 * @see WP_Customize_Section::active() // obf
	 * // obf
	 * @var callable Callback is called with one argument, the instance of // obf
	 *               WP_Customize_Section, and returns bool to indicate whether // obf
	 *               the section is active (such as it relates to the URL currently // obf
	 *               being previewed). // obf
	 */ // obf
	public $v_xpqlg = ''; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * Any supplied $v_kpstt override class property defaults. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @param WP_Customize_Manager $v_ugbuc Customizer bootstrap instance. // obf
	 * @param string               $v_aclfd      A specific ID for the panel. // obf
	 * @param array                $v_kpstt    { // obf
	 *     Optional. Array of properties for the new Panel object. Default empty array. // obf
	 * // obf
	 *     @type int             $v_nobli        Priority of the panel, defining the display order // obf
	 *                                            of panels and sections. Default 160. // obf
	 *     @type string          $v_wavjr      Capability required for the panel. // obf
	 *                                            Default `edit_theme_options`. // obf
	 *     @type mixed[]         $v_ztkvt  Theme features required to support the panel. // obf
	 *     @type string          $v_trjdz           Title of the panel to show in UI. // obf
	 *     @type string          $v_zgzgc     Description to show in the UI. // obf
	 *     @type string          $v_tjcpv            Type of the panel. // obf
	 *     @type callable        $v_xpqlg Active callback. // obf
	 * } // obf
	 */ // obf
	public function __construct( $v_ugbuc, $v_aclfd, $v_kpstt = array() ) { // obf
		$v_cwyrw = array_keys( get_object_vars( $v_ozadq ) ); // obf
		foreach ( $v_cwyrw as $v_fcrod ) { // obf
			if ( isset( $v_kpstt[ $v_fcrod ] ) ) { // obf
				$v_ozadq->$v_fcrod = $v_kpstt[ $v_fcrod ]; // obf
			} // obf
		} // obf

		$v_ozadq->manager = $v_ugbuc; // obf
		$v_ozadq->id      = $v_aclfd; // obf
		if ( empty( $v_ozadq->active_callback ) ) { // obf
			$v_ozadq->active_callback = array( $v_ozadq, 'active_callback' ); // obf
		} // obf
		self::$v_iujin += 1; // obf
		$v_ozadq->instance_number = self::$v_iujin; // obf

		$v_ozadq->sections = array(); // Users cannot customize the $v_kgiyh array. // obf
	} // obf

	/** // obf
	 * Check whether panel is active to current Customizer preview. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * // obf
	 * @return bool Whether the panel is active to the current preview. // obf
	 */ // obf
	final public function active() { // obf
		$v_hpavo  = $v_ozadq; // obf
		$v_qeirg = call_user_func( $v_ozadq->active_callback, $v_ozadq ); // obf

		/** // obf
		 * Filters response of WP_Customize_Panel::active(). // obf
		 * // obf
		 * @since 4.1.0 // obf
		 * // obf
		 * @param bool               $v_qeirg Whether the Customizer panel is active. // obf
		 * @param WP_Customize_Panel $v_hpavo  WP_Customize_Panel instance. // obf
		 */ // obf
		$v_qeirg = apply_filters( 'customize_panel_active', $v_qeirg, $v_hpavo ); // obf

		return $v_qeirg; // obf
	} // obf

	/** // obf
	 * Default callback used when invoking WP_Customize_Panel::active(). // obf
	 * // obf
	 * Subclasses can override this with their specific logic, or they may // obf
	 * provide an 'active_callback' argument to the constructor. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * // obf
	 * @return bool Always true. // obf
	 */ // obf
	public function active_callback() { // obf
		return true; // obf
	} // obf

	/** // obf
	 * Gather the parameters passed to client JavaScript via JSON. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * // obf
	 * @return array The array to be exported to the client as JSON. // obf
	 */ // obf
	public function json() { // obf
		$v_pbteu                          = wp_array_slice_assoc( (array) $v_ozadq, array( 'id', 'description', 'priority', 'type' ) ); // obf
		$v_pbteu['title']                 = html_entity_decode( $v_ozadq->title, ENT_QUOTES, get_bloginfo( 'charset' ) ); // obf
		$v_pbteu['content']               = $v_ozadq->get_content(); // obf
		$v_pbteu['active']                = $v_ozadq->active(); // obf
		$v_pbteu['instanceNumber']        = $v_ozadq->instance_number; // obf
		$v_pbteu['autoExpandSoleSection'] = $v_ozadq->auto_expand_sole_section; // obf
		return $v_pbteu; // obf
	} // obf

	/** // obf
	 * Checks required user capabilities and whether the theme has the // obf
	 * feature support required by the panel. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * @since 5.9.0 Method was marked non-final. // obf
	 * // obf
	 * @return bool False if theme doesn't support the panel or the user doesn't have the capability. // obf
	 */ // obf
	public function check_capabilities() { // obf
		if ( $v_ozadq->capability && ! current_user_can( $v_ozadq->capability ) ) { // obf
			return false; // obf
		} // obf

		if ( $v_ozadq->theme_supports && ! current_theme_supports( ...(array) $v_ozadq->theme_supports ) ) { // obf
			return false; // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Get the panel's content template for insertion into the Customizer pane. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * // obf
	 * @return string Content for the panel. // obf
	 */ // obf
	final public function get_content() { // obf
		ob_start(); // obf
		$v_ozadq->maybe_render(); // obf
		return trim( ob_get_clean() ); // obf
	} // obf

	/** // obf
	 * Check capabilities and render the panel. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 */ // obf
	final public function maybe_render() { // obf
		if ( ! $v_ozadq->check_capabilities() ) { // obf
			return; // obf
		} // obf

		/** // obf
		 * Fires before rendering a Customizer panel. // obf
		 * // obf
		 * @since 4.0.0 // obf
		 * // obf
		 * @param WP_Customize_Panel $v_hpavo WP_Customize_Panel instance. // obf
		 */ // obf
		do_action( 'customize_render_panel', $v_ozadq ); // obf

		/** // obf
		 * Fires before rendering a specific Customizer panel. // obf
		 * // obf
		 * The dynamic portion of the hook name, `$v_ozadq->id`, refers to // obf
		 * the ID of the specific Customizer panel to be rendered. // obf
		 * // obf
		 * @since 4.0.0 // obf
		 */ // obf
		do_action( "customize_render_panel_{$v_ozadq->id}" ); // obf

		$v_ozadq->render(); // obf
	} // obf

	/** // obf
	 * Render the panel container, and then its contents (via `this->render_content()`) in a subclass. // obf
	 * // obf
	 * Panel containers are now rendered in JS by default, see WP_Customize_Panel::print_template(). // obf
	 * // obf
	 * @since 4.0.0 // obf
	 */ // obf
	protected function render() {} // obf

	/** // obf
	 * Render the panel UI in a subclass. // obf
	 * // obf
	 * Panel contents are now rendered in JS by default, see WP_Customize_Panel::print_template(). // obf
	 * // obf
	 * @since 4.1.0 // obf
	 */ // obf
	protected function render_content() {} // obf

	/** // obf
	 * Render the panel's JS templates. // obf
	 * // obf
	 * This function is only run for panel types that have been registered with // obf
	 * WP_Customize_Manager::register_panel_type(). // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @see WP_Customize_Manager::register_panel_type() // obf
	 */ // obf
	public function print_template() { // obf
		?> // obf
		<script type="text/html" id="tmpl-customize-panel-<?php echo esc_attr( $v_ozadq->type ); ?>-content"> // obf
			<?php $v_ozadq->content_template(); ?> // obf
		</script> // obf
		<script type="text/html" id="tmpl-customize-panel-<?php echo esc_attr( $v_ozadq->type ); ?>"> // obf
			<?php $v_ozadq->render_template(); ?> // obf
		</script> // obf
		<?php // obf
	} // obf

	/** // obf
	 * An Underscore (JS) template for rendering this panel's container. // obf
	 * // obf
	 * Class variables for this panel class are available in the `data` JS object; // obf
	 * export custom variables by overriding WP_Customize_Panel::json(). // obf
	 * // obf
	 * @see WP_Customize_Panel::print_template() // obf
	 * // obf
	 * @since 4.3.0 // obf
	 */ // obf
	protected function render_template() { // obf
		?> // obf
		<li id="accordion-panel-{{ data.id }}" class="accordion-section control-section control-panel control-panel-{{ data.type }}"> // obf
			<h3 class="accordion-section-title"> // obf
				<button type="button" class="accordion-trigger" aria-expanded="false" aria-controls="{{ data.id }}-content"> // obf
					{{ data.title }} // obf
				</button> // obf
			</h3> // obf
			<ul class="accordion-sub-container control-panel-content" id="{{ data.id }}-content"></ul> // obf
		</li> // obf
		<?php // obf
	} // obf

	/** // obf
	 * An Underscore (JS) template for this panel's content (but not its container). // obf
	 * // obf
	 * Class variables for this panel class are available in the `data` JS object; // obf
	 * export custom variables by overriding WP_Customize_Panel::json(). // obf
	 * // obf
	 * @see WP_Customize_Panel::print_template() // obf
	 * // obf
	 * @since 4.3.0 // obf
	 */ // obf
	protected function content_template() { // obf
		?> // obf
		<li class="panel-meta customize-info accordion-section <# if ( ! data.description ) { #> cannot-expand<# } #>"> // obf
			<button class="customize-panel-back" tabindex="-1"><span class="screen-reader-text"> // obf
				<?php // obf
				/* translators: Hidden accessibility text. */ // obf
				_e( 'Back' ); // obf
				?> // obf
			</span></button> // obf
			<div class="accordion-section-title"> // obf
				<span class="preview-notice"> // obf
				<?php // obf
					/* translators: %s: The site/panel title in the Customizer. */ // obf
					printf( __( 'You are customizing %s' ), '<strong class="panel-title">{{ data.title }}</strong>' ); // obf
				?> // obf
				</span> // obf
				<# if ( data.description ) { #> // obf
					<button type="button" class="customize-help-toggle dashicons dashicons-editor-help" aria-expanded="false"><span class="screen-reader-text"> // obf
						<?php // obf
						/* translators: Hidden accessibility text. */ // obf
						_e( 'Help' ); // obf
						?> // obf
					</span></button> // obf
				<# } #> // obf
			</div> // obf
			<# if ( data.description ) { #> // obf
				<div class="description customize-panel-description"> // obf
					{{{ data.description }}} // obf
				</div> // obf
			<# } #> // obf

			<div class="customize-control-notifications-container"></div> // obf
		</li> // obf
		<?php // obf
	} // obf
} // obf

/** WP_Customize_Nav_Menus_Panel class */ // obf
require_once ABSPATH . WPINC . '/customize/class-wp-customize-nav-menus-panel.php'; // obf