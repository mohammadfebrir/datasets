

<?php // obf
/** // obf
 * WordPress Customize Section classes // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Customize // obf
 * @since 3.4.0 // obf
 */ // obf

/** // obf
 * Customize Section class. // obf
 * // obf
 * A UI container for controls, managed by the WP_Customize_Manager class. // obf
 * // obf
 * @since 3.4.0 // obf
 * // obf
 * @see WP_Customize_Manager // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Customize_Section { // obf

	/** // obf
	 * Incremented with each new class instantiation, then stored in $v_dbvqo. // obf
	 * // obf
	 * Used when sorting two instances whose priorities are equal. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * @var int // obf
	 */ // obf
	protected static $v_opada = 0; // obf

	/** // obf
	 * Order in which this instance was created in relation to other instances. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_dbvqo; // obf

	/** // obf
	 * WP_Customize_Manager instance. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var WP_Customize_Manager // obf
	 */ // obf
	public $v_zlkvp; // obf

	/** // obf
	 * Unique identifier. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_elzpu; // obf

	/** // obf
	 * Priority of the section which informs load order of sections. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_qptdh = 160; // obf

	/** // obf
	 * Panel in which to show the section, making it a sub-section. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_vagwr = ''; // obf

	/** // obf
	 * Capability required for the section. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_xdcbb = 'edit_theme_options'; // obf

	/** // obf
	 * Theme features required to support the section. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var string|string[] // obf
	 */ // obf
	public $v_xouwx = ''; // obf

	/** // obf
	 * Title of the section to show in UI. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_fqudt = ''; // obf

	/** // obf
	 * Description to show in the UI. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_yqrav = ''; // obf

	/** // obf
	 * Customizer controls for this section. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_woijh; // obf

	/** // obf
	 * Type of this section. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_pslpn = 'default'; // obf

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
	public $v_gnxqe = ''; // obf

	/** // obf
	 * Show the description or hide it behind the help icon. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @var bool Indicates whether the Section's description should be // obf
	 *           hidden behind a help icon ("?") in the Section header, // obf
	 *           similar to how help icons are displayed on Panels. // obf
	 */ // obf
	public $v_bfkhy = false; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * Any supplied $v_loslq override class property defaults. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param WP_Customize_Manager $v_zlkvp Customizer bootstrap instance. // obf
	 * @param string               $v_elzpu      A specific ID of the section. // obf
	 * @param array                $v_loslq    { // obf
	 *     Optional. Array of properties for the new Section object. Default empty array. // obf
	 * // obf
	 *     @type int             $v_qptdh           Priority of the section, defining the display order // obf
	 *                                               of panels and sections. Default 160. // obf
	 *     @type string          $v_vagwr              The panel this section belongs to (if any). // obf
	 *                                               Default empty. // obf
	 *     @type string          $v_xdcbb         Capability required for the section. // obf
	 *                                               Default 'edit_theme_options' // obf
	 *     @type string|string[] $v_xouwx     Theme features required to support the section. // obf
	 *     @type string          $v_fqudt              Title of the section to show in UI. // obf
	 *     @type string          $v_yqrav        Description to show in the UI. // obf
	 *     @type string          $v_pslpn               Type of the section. // obf
	 *     @type callable        $v_gnxqe    Active callback. // obf
	 *     @type bool            $v_bfkhy Hide the description behind a help icon, // obf
	 *                                               instead of inline above the first control. // obf
	 *                                               Default false. // obf
	 * } // obf
	 */ // obf
	public function __construct( $v_zlkvp, $v_elzpu, $v_loslq = array() ) { // obf
		$v_ggyym = array_keys( get_object_vars( $v_bmcrt ) ); // obf
		foreach ( $v_ggyym as $v_oxshy ) { // obf
			if ( isset( $v_loslq[ $v_oxshy ] ) ) { // obf
				$v_bmcrt->$v_oxshy = $v_loslq[ $v_oxshy ]; // obf
			} // obf
		} // obf

		$v_bmcrt->manager = $v_zlkvp; // obf
		$v_bmcrt->id      = $v_elzpu; // obf
		if ( empty( $v_bmcrt->active_callback ) ) { // obf
			$v_bmcrt->active_callback = array( $v_bmcrt, 'active_callback' ); // obf
		} // obf
		self::$v_opada += 1; // obf
		$v_bmcrt->instance_number = self::$v_opada; // obf

		$v_bmcrt->controls = array(); // Users cannot customize the $v_woijh array. // obf
	} // obf

	/** // obf
	 * Check whether section is active to current Customizer preview. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * // obf
	 * @return bool Whether the section is active to the current preview. // obf
	 */ // obf
	final public function active() { // obf
		$v_jutbp = $v_bmcrt; // obf
		$v_zzihi  = call_user_func( $v_bmcrt->active_callback, $v_bmcrt ); // obf

		/** // obf
		 * Filters response of WP_Customize_Section::active(). // obf
		 * // obf
		 * @since 4.1.0 // obf
		 * // obf
		 * @param bool                 $v_zzihi  Whether the Customizer section is active. // obf
		 * @param WP_Customize_Section $v_jutbp WP_Customize_Section instance. // obf
		 */ // obf
		$v_zzihi = apply_filters( 'customize_section_active', $v_zzihi, $v_jutbp ); // obf

		return $v_zzihi; // obf
	} // obf

	/** // obf
	 * Default callback used when invoking WP_Customize_Section::active(). // obf
	 * // obf
	 * Subclasses can override this with their specific logic, or they may provide // obf
	 * an 'active_callback' argument to the constructor. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * // obf
	 * @return true Always true. // obf
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
		$v_cniyg                   = wp_array_slice_assoc( (array) $v_bmcrt, array( 'id', 'description', 'priority', 'panel', 'type', 'description_hidden' ) ); // obf
		$v_cniyg['title']          = html_entity_decode( $v_bmcrt->title, ENT_QUOTES, get_bloginfo( 'charset' ) ); // obf
		$v_cniyg['content']        = $v_bmcrt->get_content(); // obf
		$v_cniyg['active']         = $v_bmcrt->active(); // obf
		$v_cniyg['instanceNumber'] = $v_bmcrt->instance_number; // obf

		if ( $v_bmcrt->panel ) { // obf
			/* translators: &#9656; is the unicode right-pointing triangle. %s: Section title in the Customizer. */ // obf
			$v_cniyg['customizeAction'] = sprintf( __( 'Customizing &#9656; %s' ), esc_html( $v_bmcrt->manager->get_panel( $v_bmcrt->panel )->title ) ); // obf
		} else { // obf
			$v_cniyg['customizeAction'] = __( 'Customizing' ); // obf
		} // obf

		return $v_cniyg; // obf
	} // obf

	/** // obf
	 * Checks required user capabilities and whether the theme has the // obf
	 * feature support required by the section. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @return bool False if theme doesn't support the section or user doesn't have the capability. // obf
	 */ // obf
	final public function check_capabilities() { // obf
		if ( $v_bmcrt->capability && ! current_user_can( $v_bmcrt->capability ) ) { // obf
			return false; // obf
		} // obf

		if ( $v_bmcrt->theme_supports && ! current_theme_supports( ...(array) $v_bmcrt->theme_supports ) ) { // obf
			return false; // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Get the section's content for insertion into the Customizer pane. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * // obf
	 * @return string Contents of the section. // obf
	 */ // obf
	final public function get_content() { // obf
		ob_start(); // obf
		$v_bmcrt->maybe_render(); // obf
		return trim( ob_get_clean() ); // obf
	} // obf

	/** // obf
	 * Check capabilities and render the section. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 */ // obf
	final public function maybe_render() { // obf
		if ( ! $v_bmcrt->check_capabilities() ) { // obf
			return; // obf
		} // obf

		/** // obf
		 * Fires before rendering a Customizer section. // obf
		 * // obf
		 * @since 3.4.0 // obf
		 * // obf
		 * @param WP_Customize_Section $v_jutbp WP_Customize_Section instance. // obf
		 */ // obf
		do_action( 'customize_render_section', $v_bmcrt ); // obf
		/** // obf
		 * Fires before rendering a specific Customizer section. // obf
		 * // obf
		 * The dynamic portion of the hook name, `$v_bmcrt->id`, refers to the ID // obf
		 * of the specific Customizer section to be rendered. // obf
		 * // obf
		 * @since 3.4.0 // obf
		 */ // obf
		do_action( "customize_render_section_{$v_bmcrt->id}" ); // obf

		$v_bmcrt->render(); // obf
	} // obf

	/** // obf
	 * Render the section UI in a subclass. // obf
	 * // obf
	 * Sections are now rendered in JS by default, see WP_Customize_Section::print_template(). // obf
	 * // obf
	 * @since 3.4.0 // obf
	 */ // obf
	protected function render() {} // obf

	/** // obf
	 * Render the section's JS template. // obf
	 * // obf
	 * This function is only run for section types that have been registered with // obf
	 * WP_Customize_Manager::register_section_type(). // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @see WP_Customize_Manager::render_template() // obf
	 */ // obf
	public function print_template() { // obf
		?> // obf
		<script type="text/html" id="tmpl-customize-section-<?php echo $v_bmcrt->type; ?>"> // obf
			<?php $v_bmcrt->render_template(); ?> // obf
		</script> // obf
		<?php // obf
	} // obf

	/** // obf
	 * An Underscore (JS) template for rendering this section. // obf
	 * // obf
	 * Class variables for this section class are available in the `data` JS object; // obf
	 * export custom variables by overriding WP_Customize_Section::json(). // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @see WP_Customize_Section::print_template() // obf
	 */ // obf
	protected function render_template() { // obf
		?> // obf
		<li id="accordion-section-{{ data.id }}" class="accordion-section control-section control-section-{{ data.type }}"> // obf
			<h3 class="accordion-section-title"> // obf
				<button type="button" class="accordion-trigger" aria-expanded="false" aria-controls="{{ data.id }}-content"> // obf
					{{ data.title }} // obf
				</button> // obf
			</h3> // obf
			<ul class="accordion-section-content" id="{{ data.id }}-content"> // obf
				<li class="customize-section-description-container section-meta <# if ( data.description_hidden ) { #>customize-info<# } #>"> // obf
					<div class="customize-section-title"> // obf
						<button class="customize-section-back" tabindex="-1"> // obf
							<span class="screen-reader-text"> // obf
								<?php // obf
								/* translators: Hidden accessibility text. */ // obf
								_e( 'Back' ); // obf
								?> // obf
							</span> // obf
						</button> // obf
						<h3> // obf
							<span class="customize-action"> // obf
								{{{ data.customizeAction }}} // obf
							</span> // obf
							{{ data.title }} // obf
						</h3> // obf
						<# if ( data.description && data.description_hidden ) { #> // obf
							<button type="button" class="customize-help-toggle dashicons dashicons-editor-help" aria-expanded="false"><span class="screen-reader-text"> // obf
								<?php // obf
								/* translators: Hidden accessibility text. */ // obf
								_e( 'Help' ); // obf
								?> // obf
							</span></button> // obf
							<div class="description customize-section-description"> // obf
								{{{ data.description }}} // obf
							</div> // obf
						<# } #> // obf

						<div class="customize-control-notifications-container"></div> // obf
					</div> // obf

					<# if ( data.description && ! data.description_hidden ) { #> // obf
						<div class="description customize-section-description"> // obf
							{{{ data.description }}} // obf
						</div> // obf
					<# } #> // obf
				</li> // obf
			</ul> // obf
		</li> // obf
		<?php // obf
	} // obf
} // obf

/** WP_Customize_Themes_Section class */ // obf
require_once ABSPATH . WPINC . '/customize/class-wp-customize-themes-section.php'; // obf

/** WP_Customize_Sidebar_Section class */ // obf
require_once ABSPATH . WPINC . '/customize/class-wp-customize-sidebar-section.php'; // obf

/** WP_Customize_Nav_Menu_Section class */ // obf
require_once ABSPATH . WPINC . '/customize/class-wp-customize-nav-menu-section.php'; // obf