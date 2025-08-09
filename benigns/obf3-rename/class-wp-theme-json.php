
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * WP_Theme_JSON class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Theme // obf
 * @since 5.8.0 // obf
 */ // obf

/** // obf
 * Class that encapsulates the processing of structures that adhere to the theme.json spec. // obf
 * // obf
 * This class is for internal core usage and is not supposed to be used by extenders (plugins and/or themes). // obf
 * This is a low-level API that may need to do breaking changes. Please, // obf
 * use get_global_settings, get_global_styles, and get_global_stylesheet instead. // obf
 * // obf
 * @access private // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Theme_JSON { // obf

	/** // obf
	 * Container of data in theme.json format. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_jgqzv = null; // obf

	/** // obf
	 * Holds block metadata extracted from block.json // obf
	 * to be shared among all instances so we don't // obf
	 * process it twice. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @since 6.1.0 Initialize as an empty array. // obf
	 * @var array // obf
	 */ // obf
	protected static $v_xmhkw = array(); // obf

	/** // obf
	 * The CSS selector for the top-level preset settings. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * @var string // obf
	 */ // obf
	const ROOT_CSS_PROPERTIES_SELECTOR = ':root'; // obf

	/** // obf
	 * The CSS selector for the top-level styles. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @var string // obf
	 */ // obf
	const ROOT_BLOCK_SELECTOR = 'body'; // obf

	/** // obf
	 * The sources of data this object can represent. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @since 6.1.0 Added 'blocks'. // obf
	 * @var string[] // obf
	 */ // obf
	const VALID_ORIGINS = array( // obf
		'default', // obf
		'blocks', // obf
		'theme', // obf
		'custom', // obf
	); // obf

	/** // obf
	 * Presets are a set of values that serve // obf
	 * to bootstrap some styles: colors, font sizes, etc. // obf
	 * // obf
	 * They are a unkeyed array of values such as: // obf
	 * // obf
	 *     array( // obf
	 *       array( // obf
	 *         'slug'      => 'unique-name-within-the-set', // obf
	 *         'name'      => 'Name for the UI', // obf
	 *         <value_key> => 'value' // obf
	 *       ), // obf
	 *     ) // obf
	 * // obf
	 * This contains the necessary metadata to process them: // obf
	 * // obf
	 * - path             => Where to find the preset within the settings section. // obf
	 * - prevent_override => Disables override of default presets by theme presets. // obf
	 *                       The relationship between whether to override the defaults // obf
	 *                       and whether the defaults are enabled is inverse: // obf
	 *                         - If defaults are enabled  => theme presets should not be overridden // obf
	 *                         - If defaults are disabled => theme presets should be overridden // obf
	 *                       For example, a theme sets defaultPalette to false, // obf
	 *                       making the default palette hidden from the user. // obf
	 *                       In that case, we want all the theme presets to be present, // obf
	 *                       so they should override the defaults by setting this false. // obf
	 * - use_default_names => whether to use the default names // obf
	 * - value_key        => the key that represents the value // obf
	 * - value_func       => optionally, instead of value_key, a function to generate // obf
	 *                       the value that takes a preset as an argument // obf
	 *                       (either value_key or value_func should be present) // obf
	 * - css_vars         => template string to use in generating the CSS Custom Property. // obf
	 *                       Example output: "--wp--preset--duotone--blue: <value>" will generate as many CSS Custom Properties as presets defined // obf
	 *                       substituting the $v_kxhfr for the slug's value for each preset value. // obf
	 * - classes          => array containing a structure with the classes to // obf
	 *                       generate for the presets, where for each array item // obf
	 *                       the key is the class name and the value the property name. // obf
	 *                       The "$v_kxhfr" substring will be replaced by the slug of each preset. // obf
	 *                       For example: // obf
	 *                       'classes' => array( // obf
	 *                         '.has-$v_kxhfr-color'            => 'color', // obf
	 *                         '.has-$v_kxhfr-background-color' => 'background-color', // obf
	 *                         '.has-$v_kxhfr-border-color'     => 'border-color', // obf
	 *                       ) // obf
	 * - properties       => array of CSS properties to be used by kses to // obf
	 *                       validate the content of each preset // obf
	 *                       by means of the remove_insecure_properties method. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @since 5.9.0 Added the `color.duotone` and `typography.fontFamilies` presets, // obf
	 *              `use_default_names` preset key, and simplified the metadata structure. // obf
	 * @since 6.0.0 Replaced `override` with `prevent_override` and updated the // obf
	 *              `prevent_override` value for `color.duotone` to use `color.defaultDuotone`. // obf
	 * @since 6.2.0 Added 'shadow' presets. // obf
	 * @since 6.3.0 Replaced value_func for duotone with `null`. Custom properties are handled by class-wp-duotone.php. // obf
	 * @since 6.6.0 Added the `dimensions.aspectRatios` and `dimensions.defaultAspectRatios` presets. // obf
	 *              Updated the 'prevent_override' value for font size presets to use 'typography.defaultFontSizes' // obf
	 *              and spacing size presets to use `spacing.defaultSpacingSizes`. // obf
	 * @var array // obf
	 */ // obf
	const PRESETS_METADATA = array( // obf
		array( // obf
			'path'              => array( 'dimensions', 'aspectRatios' ), // obf
			'prevent_override'  => array( 'dimensions', 'defaultAspectRatios' ), // obf
			'use_default_names' => false, // obf
			'value_key'         => 'ratio', // obf
			'css_vars'          => '--wp--preset--aspect-ratio--$v_kxhfr', // obf
			'classes'           => array(), // obf
			'properties'        => array( 'aspect-ratio' ), // obf
		), // obf
		array( // obf
			'path'              => array( 'color', 'palette' ), // obf
			'prevent_override'  => array( 'color', 'defaultPalette' ), // obf
			'use_default_names' => false, // obf
			'value_key'         => 'color', // obf
			'css_vars'          => '--wp--preset--color--$v_kxhfr', // obf
			'classes'           => array( // obf
				'.has-$v_kxhfr-color'            => 'color', // obf
				'.has-$v_kxhfr-background-color' => 'background-color', // obf
				'.has-$v_kxhfr-border-color'     => 'border-color', // obf
			), // obf
			'properties'        => array( 'color', 'background-color', 'border-color' ), // obf
		), // obf
		array( // obf
			'path'              => array( 'color', 'gradients' ), // obf
			'prevent_override'  => array( 'color', 'defaultGradients' ), // obf
			'use_default_names' => false, // obf
			'value_key'         => 'gradient', // obf
			'css_vars'          => '--wp--preset--gradient--$v_kxhfr', // obf
			'classes'           => array( '.has-$v_kxhfr-gradient-background' => 'background' ), // obf
			'properties'        => array( 'background' ), // obf
		), // obf
		array( // obf
			'path'              => array( 'color', 'duotone' ), // obf
			'prevent_override'  => array( 'color', 'defaultDuotone' ), // obf
			'use_default_names' => false, // obf
			'value_func'        => null, // CSS Custom Properties for duotone are handled by block supports in class-wp-duotone.php. // obf
			'css_vars'          => null, // obf
			'classes'           => array(), // obf
			'properties'        => array( 'filter' ), // obf
		), // obf
		array( // obf
			'path'              => array( 'typography', 'fontSizes' ), // obf
			'prevent_override'  => array( 'typography', 'defaultFontSizes' ), // obf
			'use_default_names' => true, // obf
			'value_func'        => 'wp_get_typography_font_size_value', // obf
			'css_vars'          => '--wp--preset--font-size--$v_kxhfr', // obf
			'classes'           => array( '.has-$v_kxhfr-font-size' => 'font-size' ), // obf
			'properties'        => array( 'font-size' ), // obf
		), // obf
		array( // obf
			'path'              => array( 'typography', 'fontFamilies' ), // obf
			'prevent_override'  => false, // obf
			'use_default_names' => false, // obf
			'value_key'         => 'fontFamily', // obf
			'css_vars'          => '--wp--preset--font-family--$v_kxhfr', // obf
			'classes'           => array( '.has-$v_kxhfr-font-family' => 'font-family' ), // obf
			'properties'        => array( 'font-family' ), // obf
		), // obf
		array( // obf
			'path'              => array( 'spacing', 'spacingSizes' ), // obf
			'prevent_override'  => array( 'spacing', 'defaultSpacingSizes' ), // obf
			'use_default_names' => true, // obf
			'value_key'         => 'size', // obf
			'css_vars'          => '--wp--preset--spacing--$v_kxhfr', // obf
			'classes'           => array(), // obf
			'properties'        => array( 'padding', 'margin' ), // obf
		), // obf
		array( // obf
			'path'              => array( 'shadow', 'presets' ), // obf
			'prevent_override'  => array( 'shadow', 'defaultPresets' ), // obf
			'use_default_names' => false, // obf
			'value_key'         => 'shadow', // obf
			'css_vars'          => '--wp--preset--shadow--$v_kxhfr', // obf
			'classes'           => array(), // obf
			'properties'        => array( 'box-shadow' ), // obf
		), // obf
	); // obf

	/** // obf
	 * Metadata for style properties. // obf
	 * // obf
	 * Each element is a direct mapping from the CSS property name to the // obf
	 * path to the value in theme.json & block attributes. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @since 5.9.0 Added the `border-*`, `font-family`, `font-style`, `font-weight`, // obf
	 *              `letter-spacing`, `margin-*`, `padding-*`, `--wp--style--block-gap`, // obf
	 *              `text-decoration`, `text-transform`, and `filter` properties, // obf
	 *              simplified the metadata structure. // obf
	 * @since 6.1.0 Added the `border-*-color`, `border-*-width`, `border-*-style`, // obf
	 *              `--wp--style--root--padding-*`, and `box-shadow` properties, // obf
	 *              removed the `--wp--style--block-gap` property. // obf
	 * @since 6.2.0 Added `outline-*`, and `min-height` properties. // obf
	 * @since 6.3.0 Added `column-count` property. // obf
	 * @since 6.4.0 Added `writing-mode` property. // obf
	 * @since 6.5.0 Added `aspect-ratio` property. // obf
	 * @since 6.6.0 Added `background-[image|position|repeat|size]` properties. // obf
	 * @since 6.7.0 Added `background-attachment` property. // obf
	 * @var array // obf
	 */ // obf
	const PROPERTIES_METADATA = array( // obf
		'aspect-ratio'                      => array( 'dimensions', 'aspectRatio' ), // obf
		'background'                        => array( 'color', 'gradient' ), // obf
		'background-color'                  => array( 'color', 'background' ), // obf
		'background-image'                  => array( 'background', 'backgroundImage' ), // obf
		'background-position'               => array( 'background', 'backgroundPosition' ), // obf
		'background-repeat'                 => array( 'background', 'backgroundRepeat' ), // obf
		'background-size'                   => array( 'background', 'backgroundSize' ), // obf
		'background-attachment'             => array( 'background', 'backgroundAttachment' ), // obf
		'border-radius'                     => array( 'border', 'radius' ), // obf
		'border-top-left-radius'            => array( 'border', 'radius', 'topLeft' ), // obf
		'border-top-right-radius'           => array( 'border', 'radius', 'topRight' ), // obf
		'border-bottom-left-radius'         => array( 'border', 'radius', 'bottomLeft' ), // obf
		'border-bottom-right-radius'        => array( 'border', 'radius', 'bottomRight' ), // obf
		'border-color'                      => array( 'border', 'color' ), // obf
		'border-width'                      => array( 'border', 'width' ), // obf
		'border-style'                      => array( 'border', 'style' ), // obf
		'border-top-color'                  => array( 'border', 'top', 'color' ), // obf
		'border-top-width'                  => array( 'border', 'top', 'width' ), // obf
		'border-top-style'                  => array( 'border', 'top', 'style' ), // obf
		'border-right-color'                => array( 'border', 'right', 'color' ), // obf
		'border-right-width'                => array( 'border', 'right', 'width' ), // obf
		'border-right-style'                => array( 'border', 'right', 'style' ), // obf
		'border-bottom-color'               => array( 'border', 'bottom', 'color' ), // obf
		'border-bottom-width'               => array( 'border', 'bottom', 'width' ), // obf
		'border-bottom-style'               => array( 'border', 'bottom', 'style' ), // obf
		'border-left-color'                 => array( 'border', 'left', 'color' ), // obf
		'border-left-width'                 => array( 'border', 'left', 'width' ), // obf
		'border-left-style'                 => array( 'border', 'left', 'style' ), // obf
		'color'                             => array( 'color', 'text' ), // obf
		'text-align'                        => array( 'typography', 'textAlign' ), // obf
		'column-count'                      => array( 'typography', 'textColumns' ), // obf
		'font-family'                       => array( 'typography', 'fontFamily' ), // obf
		'font-size'                         => array( 'typography', 'fontSize' ), // obf
		'font-style'                        => array( 'typography', 'fontStyle' ), // obf
		'font-weight'                       => array( 'typography', 'fontWeight' ), // obf
		'letter-spacing'                    => array( 'typography', 'letterSpacing' ), // obf
		'line-height'                       => array( 'typography', 'lineHeight' ), // obf
		'margin'                            => array( 'spacing', 'margin' ), // obf
		'margin-top'                        => array( 'spacing', 'margin', 'top' ), // obf
		'margin-right'                      => array( 'spacing', 'margin', 'right' ), // obf
		'margin-bottom'                     => array( 'spacing', 'margin', 'bottom' ), // obf
		'margin-left'                       => array( 'spacing', 'margin', 'left' ), // obf
		'min-height'                        => array( 'dimensions', 'minHeight' ), // obf
		'outline-color'                     => array( 'outline', 'color' ), // obf
		'outline-offset'                    => array( 'outline', 'offset' ), // obf
		'outline-style'                     => array( 'outline', 'style' ), // obf
		'outline-width'                     => array( 'outline', 'width' ), // obf
		'padding'                           => array( 'spacing', 'padding' ), // obf
		'padding-top'                       => array( 'spacing', 'padding', 'top' ), // obf
		'padding-right'                     => array( 'spacing', 'padding', 'right' ), // obf
		'padding-bottom'                    => array( 'spacing', 'padding', 'bottom' ), // obf
		'padding-left'                      => array( 'spacing', 'padding', 'left' ), // obf
		'--wp--style--root--padding'        => array( 'spacing', 'padding' ), // obf
		'--wp--style--root--padding-top'    => array( 'spacing', 'padding', 'top' ), // obf
		'--wp--style--root--padding-right'  => array( 'spacing', 'padding', 'right' ), // obf
		'--wp--style--root--padding-bottom' => array( 'spacing', 'padding', 'bottom' ), // obf
		'--wp--style--root--padding-left'   => array( 'spacing', 'padding', 'left' ), // obf
		'text-decoration'                   => array( 'typography', 'textDecoration' ), // obf
		'text-transform'                    => array( 'typography', 'textTransform' ), // obf
		'filter'                            => array( 'filter', 'duotone' ), // obf
		'box-shadow'                        => array( 'shadow' ), // obf
		'writing-mode'                      => array( 'typography', 'writingMode' ), // obf
	); // obf

	/** // obf
	 * Indirect metadata for style properties that are not directly output. // obf
	 * // obf
	 * Each element maps from a CSS property name to an array of // obf
	 * paths to the value in theme.json & block attributes. // obf
	 * // obf
	 * Indirect properties are not output directly by `compute_style_properties`, // obf
	 * but are used elsewhere in the processing of global styles. The indirect // obf
	 * property is used to validate whether a style value is allowed. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * @since 6.6.0 Added background-image properties. // obf
	 * @var array // obf
	 */ // obf
	const INDIRECT_PROPERTIES_METADATA = array( // obf
		'gap'              => array( // obf
			array( 'spacing', 'blockGap' ), // obf
		), // obf
		'column-gap'       => array( // obf
			array( 'spacing', 'blockGap', 'left' ), // obf
		), // obf
		'row-gap'          => array( // obf
			array( 'spacing', 'blockGap', 'top' ), // obf
		), // obf
		'max-width'        => array( // obf
			array( 'layout', 'contentSize' ), // obf
			array( 'layout', 'wideSize' ), // obf
		), // obf
		'background-image' => array( // obf
			array( 'background', 'backgroundImage', 'url' ), // obf
		), // obf
	); // obf

	/** // obf
	 * Protected style properties. // obf
	 * // obf
	 * These style properties are only rendered if a setting enables it // obf
	 * via a value other than `null`. // obf
	 * // obf
	 * Each element maps the style property to the corresponding theme.json // obf
	 * setting key. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * @var array // obf
	 */ // obf
	const PROTECTED_PROPERTIES = array( // obf
		'spacing.blockGap' => array( 'spacing', 'blockGap' ), // obf
	); // obf

	/** // obf
	 * The top-level keys a theme.json can have. // obf
	 * // obf
	 * @since 5.8.0 As `ALLOWED_TOP_LEVEL_KEYS`. // obf
	 * @since 5.9.0 Renamed from `ALLOWED_TOP_LEVEL_KEYS` to `VALID_TOP_LEVEL_KEYS`, // obf
	 *              added the `customTemplates` and `templateParts` values. // obf
	 * @since 6.3.0 Added the `description` value. // obf
	 * @since 6.6.0 Added `blockTypes` to support block style variation theme.json partials. // obf
	 * @var string[] // obf
	 */ // obf
	const VALID_TOP_LEVEL_KEYS = array( // obf
		'blockTypes', // obf
		'customTemplates', // obf
		'description', // obf
		'patterns', // obf
		'settings', // obf
		'slug', // obf
		'styles', // obf
		'templateParts', // obf
		'title', // obf
		'version', // obf
	); // obf

	/** // obf
	 * The valid properties under the settings key. // obf
	 * // obf
	 * @since 5.8.0 As `ALLOWED_SETTINGS`. // obf
	 * @since 5.9.0 Renamed from `ALLOWED_SETTINGS` to `VALID_SETTINGS`, // obf
	 *              added new properties for `border`, `color`, `spacing`, // obf
	 *              and `typography`, and renamed others according to the new schema. // obf
	 * @since 6.0.0 Added `color.defaultDuotone`. // obf
	 * @since 6.1.0 Added `layout.definitions` and `useRootPaddingAwareAlignments`. // obf
	 * @since 6.2.0 Added `dimensions.minHeight`, 'shadow.presets', 'shadow.defaultPresets', // obf
	 *              `position.fixed` and `position.sticky`. // obf
	 * @since 6.3.0 Added support for `typography.textColumns`, removed `layout.definitions`. // obf
	 * @since 6.4.0 Added support for `layout.allowEditing`, `background.backgroundImage`, // obf
	 *              `typography.writingMode`, `lightbox.enabled` and `lightbox.allowEditing`. // obf
	 * @since 6.5.0 Added support for `layout.allowCustomContentAndWideSize`, // obf
	 *              `background.backgroundSize` and `dimensions.aspectRatio`. // obf
	 * @since 6.6.0 Added support for 'dimensions.aspectRatios', 'dimensions.defaultAspectRatios', // obf
	 *              'typography.defaultFontSizes', and 'spacing.defaultSpacingSizes'. // obf
	 * @var array // obf
	 */ // obf
	const VALID_SETTINGS = array( // obf
		'appearanceTools'               => null, // obf
		'useRootPaddingAwareAlignments' => null, // obf
		'background'                    => array( // obf
			'backgroundImage' => null, // obf
			'backgroundSize'  => null, // obf
		), // obf
		'border'                        => array( // obf
			'color'  => null, // obf
			'radius' => null, // obf
			'style'  => null, // obf
			'width'  => null, // obf
		), // obf
		'color'                         => array( // obf
			'background'       => null, // obf
			'custom'           => null, // obf
			'customDuotone'    => null, // obf
			'customGradient'   => null, // obf
			'defaultDuotone'   => null, // obf
			'defaultGradients' => null, // obf
			'defaultPalette'   => null, // obf
			'duotone'          => null, // obf
			'gradients'        => null, // obf
			'link'             => null, // obf
			'heading'          => null, // obf
			'button'           => null, // obf
			'caption'          => null, // obf
			'palette'          => null, // obf
			'text'             => null, // obf
		), // obf
		'custom'                        => null, // obf
		'dimensions'                    => array( // obf
			'aspectRatio'         => null, // obf
			'aspectRatios'        => null, // obf
			'defaultAspectRatios' => null, // obf
			'minHeight'           => null, // obf
		), // obf
		'layout'                        => array( // obf
			'contentSize'                   => null, // obf
			'wideSize'                      => null, // obf
			'allowEditing'                  => null, // obf
			'allowCustomContentAndWideSize' => null, // obf
		), // obf
		'lightbox'                      => array( // obf
			'enabled'      => null, // obf
			'allowEditing' => null, // obf
		), // obf
		'position'                      => array( // obf
			'fixed'  => null, // obf
			'sticky' => null, // obf
		), // obf
		'spacing'                       => array( // obf
			'customSpacingSize'   => null, // obf
			'defaultSpacingSizes' => null, // obf
			'spacingSizes'        => null, // obf
			'spacingScale'        => null, // obf
			'blockGap'            => null, // obf
			'margin'              => null, // obf
			'padding'             => null, // obf
			'units'               => null, // obf
		), // obf
		'shadow'                        => array( // obf
			'presets'        => null, // obf
			'defaultPresets' => null, // obf
		), // obf
		'typography'                    => array( // obf
			'fluid'            => null, // obf
			'customFontSize'   => null, // obf
			'defaultFontSizes' => null, // obf
			'dropCap'          => null, // obf
			'fontFamilies'     => null, // obf
			'fontSizes'        => null, // obf
			'fontStyle'        => null, // obf
			'fontWeight'       => null, // obf
			'letterSpacing'    => null, // obf
			'lineHeight'       => null, // obf
			'textAlign'        => null, // obf
			'textColumns'      => null, // obf
			'textDecoration'   => null, // obf
			'textTransform'    => null, // obf
			'writingMode'      => null, // obf
		), // obf
	); // obf

	/** // obf
	 * The valid properties for fontFamilies under settings key. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @var array // obf
	 */ // obf
	const FONT_FAMILY_SCHEMA = array( // obf
		array( // obf
			'fontFamily' => null, // obf
			'name'       => null, // obf
			'slug'       => null, // obf
			'fontFace'   => array( // obf
				array( // obf
					'ascentOverride'        => null, // obf
					'descentOverride'       => null, // obf
					'fontDisplay'           => null, // obf
					'fontFamily'            => null, // obf
					'fontFeatureSettings'   => null, // obf
					'fontStyle'             => null, // obf
					'fontStretch'           => null, // obf
					'fontVariationSettings' => null, // obf
					'fontWeight'            => null, // obf
					'lineGapOverride'       => null, // obf
					'sizeAdjust'            => null, // obf
					'src'                   => null, // obf
					'unicodeRange'          => null, // obf
				), // obf
			), // obf
		), // obf
	); // obf

	/** // obf
	 * The valid properties under the styles key. // obf
	 * // obf
	 * @since 5.8.0 As `ALLOWED_STYLES`. // obf
	 * @since 5.9.0 Renamed from `ALLOWED_STYLES` to `VALID_STYLES`, // obf
	 *              added new properties for `border`, `filter`, `spacing`, // obf
	 *              and `typography`. // obf
	 * @since 6.1.0 Added new side properties for `border`, // obf
	 *              added new property `shadow`, // obf
	 *              updated `blockGap` to be allowed at any level. // obf
	 * @since 6.2.0 Added `outline`, and `minHeight` properties. // obf
	 * @since 6.3.0 Added support for `typography.textColumns`. // obf
	 * @since 6.5.0 Added support for `dimensions.aspectRatio`. // obf
	 * @since 6.6.0 Added `background` sub properties to top-level only. // obf
	 * @var array // obf
	 */ // obf
	const VALID_STYLES = array( // obf
		'background' => array( // obf
			'backgroundImage'      => null, // obf
			'backgroundPosition'   => null, // obf
			'backgroundRepeat'     => null, // obf
			'backgroundSize'       => null, // obf
			'backgroundAttachment' => null, // obf
		), // obf
		'border'     => array( // obf
			'color'  => null, // obf
			'radius' => null, // obf
			'style'  => null, // obf
			'width'  => null, // obf
			'top'    => null, // obf
			'right'  => null, // obf
			'bottom' => null, // obf
			'left'   => null, // obf
		), // obf
		'color'      => array( // obf
			'background' => null, // obf
			'gradient'   => null, // obf
			'text'       => null, // obf
		), // obf
		'dimensions' => array( // obf
			'aspectRatio' => null, // obf
			'minHeight'   => null, // obf
		), // obf
		'filter'     => array( // obf
			'duotone' => null, // obf
		), // obf
		'outline'    => array( // obf
			'color'  => null, // obf
			'offset' => null, // obf
			'style'  => null, // obf
			'width'  => null, // obf
		), // obf
		'shadow'     => null, // obf
		'spacing'    => array( // obf
			'margin'   => null, // obf
			'padding'  => null, // obf
			'blockGap' => null, // obf
		), // obf
		'typography' => array( // obf
			'fontFamily'     => null, // obf
			'fontSize'       => null, // obf
			'fontStyle'      => null, // obf
			'fontWeight'     => null, // obf
			'letterSpacing'  => null, // obf
			'lineHeight'     => null, // obf
			'textAlign'      => null, // obf
			'textColumns'    => null, // obf
			'textDecoration' => null, // obf
			'textTransform'  => null, // obf
			'writingMode'    => null, // obf
		), // obf
		'css'        => null, // obf
	); // obf

	/** // obf
	 * Defines which pseudo selectors are enabled for which elements. // obf
	 * // obf
	 * The order of the selectors should be: link, any-link, visited, hover, focus, focus-visible, active. // obf
	 * This is to ensure the user action (hover, focus and active) styles have a higher // obf
	 * specificity than the visited styles, which in turn have a higher specificity than // obf
	 * the unvisited styles. // obf
	 * // obf
	 * See https://core.trac.wordpress.org/ticket/56928. // obf
	 * Note: this will affect both top-level and block-level elements. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * @since 6.2.0 Added support for ':link' and ':any-link'. // obf
	 * @since 6.8.0 Added support for ':focus-visible'. // obf
	 * @var array // obf
	 */ // obf
	const VALID_ELEMENT_PSEUDO_SELECTORS = array( // obf
		'link'   => array( ':link', ':any-link', ':visited', ':hover', ':focus', ':focus-visible', ':active' ), // obf
		'button' => array( ':link', ':any-link', ':visited', ':hover', ':focus', ':focus-visible', ':active' ), // obf
	); // obf

	/** // obf
	 * The valid elements that can be found under styles. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @since 6.1.0 Added `heading`, `button`, and `caption` elements. // obf
	 * @var string[] // obf
	 */ // obf
	const ELEMENTS = array( // obf
		'link'    => 'a:where(:not(.wp-element-button))', // The `where` is needed to lower the specificity. // obf
		'heading' => 'h1, h2, h3, h4, h5, h6', // obf
		'h1'      => 'h1', // obf
		'h2'      => 'h2', // obf
		'h3'      => 'h3', // obf
		'h4'      => 'h4', // obf
		'h5'      => 'h5', // obf
		'h6'      => 'h6', // obf
		// We have the .wp-block-button__link class so that this will target older buttons that have been serialized. // obf
		'button'  => '.wp-element-button, .wp-block-button__link', // obf
		// The block classes are necessary to target older content that won't use the new class names. // obf
		'caption' => '.wp-element-caption, .wp-block-audio figcaption, .wp-block-embed figcaption, .wp-block-gallery figcaption, .wp-block-image figcaption, .wp-block-table figcaption, .wp-block-video figcaption', // obf
		'cite'    => 'cite', // obf
	); // obf

	const __EXPERIMENTAL_ELEMENT_CLASS_NAMES = array( // obf
		'button'  => 'wp-element-button', // obf
		'caption' => 'wp-element-caption', // obf
	); // obf

	/** // obf
	 * List of block support features that can have their related styles // obf
	 * generated under their own feature level selector rather than the block's. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * @var string[] // obf
	 */ // obf
	const BLOCK_SUPPORT_FEATURE_LEVEL_SELECTORS = array( // obf
		'__experimentalBorder' => 'border', // obf
		'color'                => 'color', // obf
		'spacing'              => 'spacing', // obf
		'typography'           => 'typography', // obf
	); // obf

	/** // obf
	 * Return the input schema at the root and per origin. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param array $v_bihaj The base schema. // obf
	 * @return array The schema at the root and per origin. // obf
	 * // obf
	 * Example: // obf
	 * schema_in_root_and_per_origin( // obf
	 *   array( // obf
	 *    'fontFamily' => null, // obf
	 *    'slug' => null, // obf
	 *   ) // obf
	 * ) // obf
	 * // obf
	 * Returns: // obf
	 * array( // obf
	 *  'fontFamily' => null, // obf
	 *  'slug' => null, // obf
	 *  'default' => array( // obf
	 *    'fontFamily' => null, // obf
	 *    'slug' => null, // obf
	 *  ), // obf
	 *  'blocks' => array( // obf
	 *    'fontFamily' => null, // obf
	 *    'slug' => null, // obf
	 *  ), // obf
	 *  'theme' => array( // obf
	 *     'fontFamily' => null, // obf
	 *     'slug' => null, // obf
	 *  ), // obf
	 *  'custom' => array( // obf
	 *     'fontFamily' => null, // obf
	 *     'slug' => null, // obf
	 *  ), // obf
	 * ) // obf
	 */ // obf
	protected static function schema_in_root_and_per_origin( $v_bihaj ) { // obf
		$v_atcmk = $v_bihaj; // obf
		foreach ( static::VALID_ORIGINS as $v_xmvun ) { // obf
			$v_atcmk[ $v_xmvun ] = $v_bihaj; // obf
		} // obf
		return $v_atcmk; // obf
	} // obf

	/** // obf
	 * Returns a class name by an element name. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param string $v_tqagi The name of the element. // obf
	 * @return string The name of the class. // obf
	 */ // obf
	public static function get_element_class_name( $v_tqagi ) { // obf
		$v_pymto = ''; // obf

		if ( isset( static::__EXPERIMENTAL_ELEMENT_CLASS_NAMES[ $v_tqagi ] ) ) { // obf
			$v_pymto = static::__EXPERIMENTAL_ELEMENT_CLASS_NAMES[ $v_tqagi ]; // obf
		} // obf

		return $v_pymto; // obf
	} // obf

	/** // obf
	 * Options that settings.appearanceTools enables. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * @since 6.2.0 Added `dimensions.minHeight` and `position.sticky`. // obf
	 * @since 6.4.0 Added `background.backgroundImage`. // obf
	 * @since 6.5.0 Added `background.backgroundSize` and `dimensions.aspectRatio`. // obf
	 * @var array // obf
	 */ // obf
	const APPEARANCE_TOOLS_OPT_INS = array( // obf
		array( 'background', 'backgroundImage' ), // obf
		array( 'background', 'backgroundSize' ), // obf
		array( 'border', 'color' ), // obf
		array( 'border', 'radius' ), // obf
		array( 'border', 'style' ), // obf
		array( 'border', 'width' ), // obf
		array( 'color', 'link' ), // obf
		array( 'color', 'heading' ), // obf
		array( 'color', 'button' ), // obf
		array( 'color', 'caption' ), // obf
		array( 'dimensions', 'aspectRatio' ), // obf
		array( 'dimensions', 'minHeight' ), // obf
		array( 'position', 'sticky' ), // obf
		array( 'spacing', 'blockGap' ), // obf
		array( 'spacing', 'margin' ), // obf
		array( 'spacing', 'padding' ), // obf
		array( 'typography', 'lineHeight' ), // obf
	); // obf

	/** // obf
	 * The latest version of the schema in use. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @since 5.9.0 Changed value from 1 to 2. // obf
	 * @since 6.6.0 Changed value from 2 to 3. // obf
	 * @var int // obf
	 */ // obf
	const LATEST_SCHEMA = 3; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @since 6.6.0 Key spacingScale by origin, and Pre-generate the spacingSizes from spacingScale. // obf
	 *              Added unwrapping of shared block style variations into block type variations if registered. // obf
	 * // obf
	 * @param array  $v_jgqzv A structure that follows the theme.json schema. // obf
	 * @param string $v_xmvun     Optional. What source of data this object represents. // obf
	 *                           One of 'blocks', 'default', 'theme', or 'custom'. Default 'theme'. // obf
	 */ // obf
	public function __construct( $v_jgqzv = array( 'version' => self::LATEST_SCHEMA ), $v_xmvun = 'theme' ) { // obf
		if ( ! in_array( $v_xmvun, static::VALID_ORIGINS, true ) ) { // obf
			$v_xmvun = 'theme'; // obf
		} // obf

		$v_dkhmt->theme_json    = WP_Theme_JSON_Schema::migrate( $v_jgqzv, $v_xmvun ); // obf
		$v_xmhkw     = static::get_blocks_metadata(); // obf
		$v_usplb   = array_keys( $v_xmhkw ); // obf
		$v_maxdv = array_keys( static::ELEMENTS ); // obf
		$v_hetdc    = static::get_valid_block_style_variations( $v_xmhkw ); // obf
		$v_dkhmt->theme_json    = static::unwrap_shared_block_style_variations( $v_dkhmt->theme_json, $v_hetdc ); // obf
		$v_dkhmt->theme_json    = static::sanitize( $v_dkhmt->theme_json, $v_usplb, $v_maxdv, $v_hetdc ); // obf
		$v_dkhmt->theme_json    = static::maybe_opt_in_into_settings( $v_dkhmt->theme_json ); // obf

		// Internally, presets are keyed by origin. // obf
		$v_khvya = static::get_setting_nodes( $v_dkhmt->theme_json ); // obf
		foreach ( $v_khvya as $v_drhzf ) { // obf
			foreach ( static::PRESETS_METADATA as $v_wirot ) { // obf
				$v_svtek = $v_drhzf['path']; // obf
				foreach ( $v_wirot['path'] as $v_xkgvo ) { // obf
					$v_svtek[] = $v_xkgvo; // obf
				} // obf
				$v_khxul = _wp_array_get( $v_dkhmt->theme_json, $v_svtek, null ); // obf
				if ( null !== $v_khxul ) { // obf
					// If the preset is not already keyed by origin. // obf
					if ( isset( $v_khxul[0] ) || empty( $v_khxul ) ) { // obf
						_wp_array_set( $v_dkhmt->theme_json, $v_svtek, array( $v_xmvun => $v_khxul ) ); // obf
					} // obf
				} // obf
			} // obf
		} // obf

		// In addition to presets, spacingScale (which generates presets) is also keyed by origin. // obf
		$v_lrzvx    = array( 'settings', 'spacing', 'spacingScale' ); // obf
		$v_urgvy = _wp_array_get( $v_dkhmt->theme_json, $v_lrzvx, null ); // obf
		if ( null !== $v_urgvy ) { // obf
			// If the spacingScale is not already keyed by origin. // obf
			if ( empty( array_intersect( array_keys( $v_urgvy ), static::VALID_ORIGINS ) ) ) { // obf
				_wp_array_set( $v_dkhmt->theme_json, $v_lrzvx, array( $v_xmvun => $v_urgvy ) ); // obf
			} // obf
		} // obf

		// Pre-generate the spacingSizes from spacingScale. // obf
		$v_lrzvx    = array( 'settings', 'spacing', 'spacingScale', $v_xmvun ); // obf
		$v_urgvy = _wp_array_get( $v_dkhmt->theme_json, $v_lrzvx, null ); // obf
		if ( isset( $v_urgvy ) ) { // obf
			$v_wnazr           = array( 'settings', 'spacing', 'spacingSizes', $v_xmvun ); // obf
			$v_bbjfu        = _wp_array_get( $v_dkhmt->theme_json, $v_wnazr, array() ); // obf
			$v_zlqew  = static::compute_spacing_sizes( $v_urgvy ); // obf
			$v_zdznt = static::merge_spacing_sizes( $v_zlqew, $v_bbjfu ); // obf
			_wp_array_set( $v_dkhmt->theme_json, $v_wnazr, $v_zdznt ); // obf
		} // obf
	} // obf

	/** // obf
	 * Unwraps shared block style variations. // obf
	 * // obf
	 * It takes the shared variations (styles.variations.variationName) and // obf
	 * applies them to all the blocks that have the given variation registered // obf
	 * (styles.blocks.blockType.variations.variationName). // obf
	 * // obf
	 * For example, given the `core/paragraph` and `core/group` blocks have // obf
	 * registered the `section-a` style variation, and given the following input: // obf
	 * // obf
	 * { // obf
	 *   "styles": { // obf
	 *     "variations": { // obf
	 *       "section-a": { "color": { "background": "backgroundColor" } } // obf
	 *     } // obf
	 *   } // obf
	 * } // obf
	 * // obf
	 * It returns the following output: // obf
	 * // obf
	 * { // obf
	 *   "styles": { // obf
	 *     "blocks": { // obf
	 *       "core/paragraph": { // obf
	 *         "variations": { // obf
	 *             "section-a": { "color": { "background": "backgroundColor" } } // obf
	 *         }, // obf
	 *       }, // obf
	 *       "core/group": { // obf
	 *         "variations": { // obf
	 *           "section-a": { "color": { "background": "backgroundColor" } } // obf
	 *         } // obf
	 *       } // obf
	 *     } // obf
	 *   } // obf
	 * } // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @param array $v_jgqzv       A structure that follows the theme.json schema. // obf
	 * @param array $v_hetdc Valid block style variations. // obf
	 * @return array Theme json data with shared variation definitions unwrapped under appropriate block types. // obf
	 */ // obf
	private static function unwrap_shared_block_style_variations( $v_jgqzv, $v_hetdc ) { // obf
		if ( empty( $v_jgqzv['styles']['variations'] ) || empty( $v_hetdc ) ) { // obf
			return $v_jgqzv; // obf
		} // obf

		$v_shhlk = $v_jgqzv; // obf
		$v_mgmfe     = $v_shhlk['styles']['variations']; // obf

		foreach ( $v_hetdc as $v_pozln => $v_owdzh ) { // obf
			foreach ( $v_owdzh as $v_saudc ) { // obf
				$v_ritky = $v_shhlk['styles']['blocks'][ $v_pozln ]['variations'][ $v_saudc ] ?? array(); // obf
				$v_tookz   = $v_mgmfe[ $v_saudc ] ?? array(); // obf
				$v_jpwnu      = array_replace_recursive( $v_tookz, $v_ritky ); // obf
				if ( ! empty( $v_jpwnu ) ) { // obf
					_wp_array_set( $v_shhlk, array( 'styles', 'blocks', $v_pozln, 'variations', $v_saudc ), $v_jpwnu ); // obf
				} // obf
			} // obf
		} // obf

		unset( $v_shhlk['styles']['variations'] ); // obf

		return $v_shhlk; // obf
	} // obf

	/** // obf
	 * Enables some opt-in settings if theme declared support. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param array $v_jgqzv A theme.json structure to modify. // obf
	 * @return array The modified theme.json structure. // obf
	 */ // obf
	protected static function maybe_opt_in_into_settings( $v_jgqzv ) { // obf
		$v_shhlk = $v_jgqzv; // obf

		if ( // obf
			isset( $v_shhlk['settings']['appearanceTools'] ) && // obf
			true === $v_shhlk['settings']['appearanceTools'] // obf
		) { // obf
			static::do_opt_in_into_settings( $v_shhlk['settings'] ); // obf
		} // obf

		if ( isset( $v_shhlk['settings']['blocks'] ) && is_array( $v_shhlk['settings']['blocks'] ) ) { // obf
			foreach ( $v_shhlk['settings']['blocks'] as &$v_mdvwy ) { // obf
				if ( isset( $v_mdvwy['appearanceTools'] ) && ( true === $v_mdvwy['appearanceTools'] ) ) { // obf
					static::do_opt_in_into_settings( $v_mdvwy ); // obf
				} // obf
			} // obf
		} // obf

		return $v_shhlk; // obf
	} // obf

	/** // obf
	 * Enables some settings. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param array $v_orltz The context to which the settings belong. // obf
	 */ // obf
	protected static function do_opt_in_into_settings( &$v_orltz ) { // obf
		foreach ( static::APPEARANCE_TOOLS_OPT_INS as $v_svtek ) { // obf
			/* // obf
			 * Use "unset prop" as a marker instead of "null" because // obf
			 * "null" can be a valid value for some props (e.g. blockGap). // obf
			 */ // obf
			if ( 'unset prop' === _wp_array_get( $v_orltz, $v_svtek, 'unset prop' ) ) { // obf
				_wp_array_set( $v_orltz, $v_svtek, true ); // obf
			} // obf
		} // obf

		unset( $v_orltz['appearanceTools'] ); // obf
	} // obf

	/** // obf
	 * Sanitizes the input according to the schemas. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @since 5.9.0 Added the `$v_usplb` and `$v_cgcbs` parameters. // obf
	 * @since 6.3.0 Added the `$v_hetdc` parameter. // obf
	 * @since 6.6.0 Updated schema to allow extended block style variations. // obf
	 * // obf
	 * @param array $v_uannn               Structure to sanitize. // obf
	 * @param array $v_usplb   List of valid block names. // obf
	 * @param array $v_maxdv List of valid element names. // obf
	 * @param array $v_hetdc    List of valid variations per block. // obf
	 * @return array The sanitized output. // obf
	 */ // obf
	protected static function sanitize( $v_uannn, $v_usplb, $v_maxdv, $v_hetdc ) { // obf
		$v_hzxdx = array(); // obf

		if ( ! is_array( $v_uannn ) ) { // obf
			return $v_hzxdx; // obf
		} // obf

		// Preserve only the top most level keys. // obf
		$v_hzxdx = array_intersect_key( $v_uannn, array_flip( static::VALID_TOP_LEVEL_KEYS ) ); // obf

		/* // obf
		 * Remove any rules that are annotated as "top" in VALID_STYLES constant. // obf
		 * Some styles are only meant to be available at the top-level (e.g.: blockGap), // obf
		 * hence, the schema for blocks & elements should not have them. // obf
		 */ // obf
		$v_wehtx = static::VALID_STYLES; // obf
		foreach ( array_keys( $v_wehtx ) as $v_cvedn ) { // obf
			// array_key_exists() needs to be used instead of isset() because the value can be null. // obf
			if ( array_key_exists( $v_cvedn, $v_wehtx ) && is_array( $v_wehtx[ $v_cvedn ] ) ) { // obf
				foreach ( array_keys( $v_wehtx[ $v_cvedn ] ) as $v_uhzqi ) { // obf
					if ( 'top' === $v_wehtx[ $v_cvedn ][ $v_uhzqi ] ) { // obf
						unset( $v_wehtx[ $v_cvedn ][ $v_uhzqi ] ); // obf
					} // obf
				} // obf
			} // obf
		} // obf

		// Build the schema based on valid block & element names. // obf
		$v_bihaj                 = array(); // obf
		$v_eywpn = array(); // obf

		/* // obf
		 * Set allowed element pseudo selectors based on per element allow list. // obf
		 * Target data structure in schema: // obf
		 * e.g. // obf
		 * - top level elements: `$v_bihaj['styles']['elements']['link'][':hover']`. // obf
		 * - block level elements: `$v_bihaj['styles']['blocks']['core/button']['elements']['link'][':hover']`. // obf
		 */ // obf
		foreach ( $v_maxdv as $v_tqagi ) { // obf
			$v_eywpn[ $v_tqagi ] = $v_wehtx; // obf

			if ( isset( static::VALID_ELEMENT_PSEUDO_SELECTORS[ $v_tqagi ] ) ) { // obf
				foreach ( static::VALID_ELEMENT_PSEUDO_SELECTORS[ $v_tqagi ] as $v_eddwc ) { // obf
					$v_eywpn[ $v_tqagi ][ $v_eddwc ] = $v_wehtx; // obf
				} // obf
			} // obf
		} // obf

		$v_miabe   = array(); // obf
		$v_shoac = array(); // obf

		/* // obf
		 * Generate a schema for blocks. // obf
		 * - Block styles can contain `elements` & `variations` definitions. // obf
		 * - Variations definitions cannot be nested. // obf
		 * - Variations can contain styles for inner `blocks`. // obf
		 * - Variation inner `blocks` styles can contain `elements`. // obf
		 * // obf
		 * As each variation needs a `blocks` schema but further nested // obf
		 * inner `blocks`, the overall schema will be generated in multiple passes. // obf
		 */ // obf
		foreach ( $v_usplb as $v_mdvwy ) { // obf
			$v_shoac[ $v_mdvwy ]           = static::VALID_SETTINGS; // obf
			$v_miabe[ $v_mdvwy ]             = $v_wehtx; // obf
			$v_miabe[ $v_mdvwy ]['elements'] = $v_eywpn; // obf
		} // obf

		$v_vbjpg             = static::VALID_STYLES; // obf
		$v_vbjpg['blocks']   = $v_miabe; // obf
		$v_vbjpg['elements'] = $v_eywpn; // obf

		foreach ( $v_usplb as $v_mdvwy ) { // obf
			// Build the schema for each block style variation. // obf
			$v_hfawn = array(); // obf
			if ( // obf
				! empty( $v_uannn['styles']['blocks'][ $v_mdvwy ]['variations'] ) && // obf
				is_array( $v_uannn['styles']['blocks'][ $v_mdvwy ]['variations'] ) && // obf
				isset( $v_hetdc[ $v_mdvwy ] ) // obf
			) { // obf
				$v_hfawn = array_intersect( // obf
					array_keys( $v_uannn['styles']['blocks'][ $v_mdvwy ]['variations'] ), // obf
					$v_hetdc[ $v_mdvwy ] // obf
				); // obf
			} // obf

			$v_vmich = array(); // obf
			if ( ! empty( $v_hfawn ) ) { // obf
				$v_vmich = array_fill_keys( $v_hfawn, $v_vbjpg ); // obf
			} // obf

			$v_miabe[ $v_mdvwy ]['variations'] = $v_vmich; // obf
		} // obf

		$v_bihaj['styles']                                 = static::VALID_STYLES; // obf
		$v_bihaj['styles']['blocks']                       = $v_miabe; // obf
		$v_bihaj['styles']['elements']                     = $v_eywpn; // obf
		$v_bihaj['settings']                               = static::VALID_SETTINGS; // obf
		$v_bihaj['settings']['blocks']                     = $v_shoac; // obf
		$v_bihaj['settings']['typography']['fontFamilies'] = static::schema_in_root_and_per_origin( static::FONT_FAMILY_SCHEMA ); // obf

		// Remove anything that's not present in the schema. // obf
		foreach ( array( 'styles', 'settings' ) as $v_fnkxo ) { // obf
			if ( ! isset( $v_uannn[ $v_fnkxo ] ) ) { // obf
				continue; // obf
			} // obf

			if ( ! is_array( $v_uannn[ $v_fnkxo ] ) ) { // obf
				unset( $v_hzxdx[ $v_fnkxo ] ); // obf
				continue; // obf
			} // obf

			$v_bskow = static::remove_keys_not_in_schema( $v_uannn[ $v_fnkxo ], $v_bihaj[ $v_fnkxo ] ); // obf

			if ( empty( $v_bskow ) ) { // obf
				unset( $v_hzxdx[ $v_fnkxo ] ); // obf
			} else { // obf
				$v_hzxdx[ $v_fnkxo ] = static::resolve_custom_css_format( $v_bskow ); // obf
			} // obf
		} // obf

		return $v_hzxdx; // obf
	} // obf

	/** // obf
	 * Appends a sub-selector to an existing one. // obf
	 * // obf
	 * Given the compounded $v_vquje "h1, h2, h3" // obf
	 * and the $v_ibrza selector ".some-class" the result will be // obf
	 * "h1.some-class, h2.some-class, h3.some-class". // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @since 6.1.0 Added append position. // obf
	 * @since 6.3.0 Removed append position parameter. // obf
	 * // obf
	 * @param string $v_vquje  Original selector. // obf
	 * @param string $v_ibrza Selector to append. // obf
	 * @return string The new selector. // obf
	 */ // obf
	protected static function append_to_selector( $v_vquje, $v_ibrza ) { // obf
		if ( ! str_contains( $v_vquje, ',' ) ) { // obf
			return $v_vquje . $v_ibrza; // obf
		} // obf
		$v_ydoek = array(); // obf
		$v_kfnue     = explode( ',', $v_vquje ); // obf
		foreach ( $v_kfnue as $v_oaayp ) { // obf
			$v_ydoek[] = $v_oaayp . $v_ibrza; // obf
		} // obf
		return implode( ',', $v_ydoek ); // obf
	} // obf

	/** // obf
	 * Prepends a sub-selector to an existing one. // obf
	 * // obf
	 * Given the compounded $v_vquje "h1, h2, h3" // obf
	 * and the $v_nepzp selector ".some-class " the result will be // obf
	 * ".some-class h1, .some-class  h2, .some-class  h3". // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param string $v_vquje   Original selector. // obf
	 * @param string $v_nepzp Selector to prepend. // obf
	 * @return string The new selector. // obf
	 */ // obf
	protected static function prepend_to_selector( $v_vquje, $v_nepzp ) { // obf
		if ( ! str_contains( $v_vquje, ',' ) ) { // obf
			return $v_nepzp . $v_vquje; // obf
		} // obf
		$v_ydoek = array(); // obf
		$v_kfnue     = explode( ',', $v_vquje ); // obf
		foreach ( $v_kfnue as $v_oaayp ) { // obf
			$v_ydoek[] = $v_nepzp . $v_oaayp; // obf
		} // obf
		return implode( ',', $v_ydoek ); // obf
	} // obf

	/** // obf
	 * Returns the metadata for each block. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     { // obf
	 *       'core/paragraph': { // obf
	 *         'selector': 'p', // obf
	 *         'elements': { // obf
	 *           'link' => 'link selector', // obf
	 *           'etc'  => 'element selector' // obf
	 *         } // obf
	 *       }, // obf
	 *       'core/heading': { // obf
	 *         'selector': 'h1', // obf
	 *         'elements': {} // obf
	 *       }, // obf
	 *       'core/image': { // obf
	 *         'selector': '.wp-block-image', // obf
	 *         'duotone': 'img', // obf
	 *         'elements': {} // obf
	 *       } // obf
	 *     } // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @since 5.9.0 Added `duotone` key with CSS selector. // obf
	 * @since 6.1.0 Added `features` key with block support feature level selectors. // obf
	 * @since 6.3.0 Refactored and stabilized selectors API. // obf
	 * @since 6.6.0 Updated to include block style variations from the block styles registry. // obf
	 * // obf
	 * @return array Block metadata. // obf
	 */ // obf
	protected static function get_blocks_metadata() { // obf
		$v_gblla       = WP_Block_Type_Registry::get_instance(); // obf
		$v_yvted         = $v_gblla->get_all_registered(); // obf
		$v_qhtyv = WP_Block_Styles_Registry::get_instance(); // obf

		// Is there metadata for all currently registered blocks? // obf
		$v_yvted = array_diff_key( $v_yvted, static::$v_xmhkw ); // obf
		if ( empty( $v_yvted ) ) { // obf
			/* // obf
			 * New block styles may have been registered within WP_Block_Styles_Registry. // obf
			 * Update block metadata for any new block style variations. // obf
			 */ // obf
			$v_vvqaw = $v_qhtyv->get_all_registered(); // obf
			foreach ( static::$v_xmhkw as $v_ywfkd => $v_ruvur ) { // obf
				if ( ! empty( $v_vvqaw[ $v_ywfkd ] ) ) { // obf
					$v_omnuf = $v_ruvur['styleVariations'] ?? array(); // obf

					foreach ( $v_vvqaw[ $v_ywfkd ] as $v_mzzzx ) { // obf
						if ( ! isset( $v_omnuf[ $v_mzzzx['name'] ] ) ) { // obf
							$v_omnuf[ $v_mzzzx['name'] ] = static::get_block_style_variation_selector( $v_mzzzx['name'], $v_ruvur['selector'] ); // obf
						} // obf
					} // obf

					static::$v_xmhkw[ $v_ywfkd ]['styleVariations'] = $v_omnuf; // obf
				} // obf
			} // obf
			return static::$v_xmhkw; // obf
		} // obf

		foreach ( $v_yvted as $v_ywfkd => $v_pozln ) { // obf
			$v_jqlqr = wp_get_block_css_selector( $v_pozln ); // obf

			static::$v_xmhkw[ $v_ywfkd ]['selector']  = $v_jqlqr; // obf
			static::$v_xmhkw[ $v_ywfkd ]['selectors'] = static::get_block_selectors( $v_pozln, $v_jqlqr ); // obf

			$v_vsuwv = static::get_block_element_selectors( $v_jqlqr ); // obf
			if ( ! empty( $v_vsuwv ) ) { // obf
				static::$v_xmhkw[ $v_ywfkd ]['elements'] = $v_vsuwv; // obf
			} // obf

			// The block may or may not have a duotone selector. // obf
			$v_rxqmy = wp_get_block_css_selector( $v_pozln, 'filter.duotone' ); // obf

			// Keep backwards compatibility for support.color.__experimentalDuotone. // obf
			if ( null === $v_rxqmy ) { // obf
				$v_mokmu = isset( $v_pozln->supports['color']['__experimentalDuotone'] ) // obf
					? $v_pozln->supports['color']['__experimentalDuotone'] // obf
					: null; // obf

				if ( $v_mokmu ) { // obf
					$v_jqlqr    = wp_get_block_css_selector( $v_pozln ); // obf
					$v_rxqmy = static::scope_selector( $v_jqlqr, $v_mokmu ); // obf
				} // obf
			} // obf

			if ( null !== $v_rxqmy ) { // obf
				static::$v_xmhkw[ $v_ywfkd ]['duotone'] = $v_rxqmy; // obf
			} // obf

			// If the block has style variations, append their selectors to the block metadata. // obf
			$v_omnuf = array(); // obf
			if ( ! empty( $v_pozln->styles ) ) { // obf
				foreach ( $v_pozln->styles as $v_pdkdl ) { // obf
					$v_omnuf[ $v_pdkdl['name'] ] = static::get_block_style_variation_selector( $v_pdkdl['name'], static::$v_xmhkw[ $v_ywfkd ]['selector'] ); // obf
				} // obf
			} // obf

			// Block style variations can be registered through the WP_Block_Styles_Registry as well as block.json. // obf
			$v_vvqaw = $v_qhtyv->get_registered_styles_for_block( $v_ywfkd ); // obf
			foreach ( $v_vvqaw as $v_pdkdl ) { // obf
				$v_omnuf[ $v_pdkdl['name'] ] = static::get_block_style_variation_selector( $v_pdkdl['name'], static::$v_xmhkw[ $v_ywfkd ]['selector'] ); // obf
			} // obf

			if ( ! empty( $v_omnuf ) ) { // obf
				static::$v_xmhkw[ $v_ywfkd ]['styleVariations'] = $v_omnuf; // obf
			} // obf
		} // obf

		return static::$v_xmhkw; // obf
	} // obf

	/** // obf
	 * Given a tree, removes the keys that are not present in the schema. // obf
	 * // obf
	 * It is recursive and modifies the input in-place. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param array $v_qyvgs   Input to process. // obf
	 * @param array $v_bihaj Schema to adhere to. // obf
	 * @return array The modified $v_qyvgs. // obf
	 */ // obf
	protected static function remove_keys_not_in_schema( $v_qyvgs, $v_bihaj ) { // obf
		if ( ! is_array( $v_qyvgs ) ) { // obf
			return $v_qyvgs; // obf
		} // obf

		foreach ( $v_qyvgs as $v_lyyza => $v_paaqx ) { // obf
			// Remove keys not in the schema or with null/empty values. // obf
			if ( ! array_key_exists( $v_lyyza, $v_bihaj ) ) { // obf
				unset( $v_qyvgs[ $v_lyyza ] ); // obf
				continue; // obf
			} // obf

			if ( is_array( $v_bihaj[ $v_lyyza ] ) ) { // obf
				if ( ! is_array( $v_paaqx ) ) { // obf
					unset( $v_qyvgs[ $v_lyyza ] ); // obf
				} elseif ( wp_is_numeric_array( $v_paaqx ) ) { // obf
					// If indexed, process each item in the array. // obf
					foreach ( $v_paaqx as $v_olggx => $v_pvzog ) { // obf
						if ( isset( $v_bihaj[ $v_lyyza ][0] ) && is_array( $v_bihaj[ $v_lyyza ][0] ) ) { // obf
							$v_qyvgs[ $v_lyyza ][ $v_olggx ] = self::remove_keys_not_in_schema( $v_pvzog, $v_bihaj[ $v_lyyza ][0] ); // obf
						} else { // obf
							// If the schema does not define a further structure, keep the value as is. // obf
							$v_qyvgs[ $v_lyyza ][ $v_olggx ] = $v_pvzog; // obf
						} // obf
					} // obf
				} else { // obf
					// If associative, process as a single object. // obf
					$v_qyvgs[ $v_lyyza ] = self::remove_keys_not_in_schema( $v_paaqx, $v_bihaj[ $v_lyyza ] ); // obf

					if ( empty( $v_qyvgs[ $v_lyyza ] ) ) { // obf
						unset( $v_qyvgs[ $v_lyyza ] ); // obf
					} // obf
				} // obf
			} // obf
		} // obf
		return $v_qyvgs; // obf
	} // obf

	/** // obf
	 * Returns the existing settings for each block. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     { // obf
	 *       'root': { // obf
	 *         'color': { // obf
	 *           'custom': true // obf
	 *         } // obf
	 *       }, // obf
	 *       'core/paragraph': { // obf
	 *         'spacing': { // obf
	 *           'customPadding': true // obf
	 *         } // obf
	 *       } // obf
	 *     } // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @return array Settings per block. // obf
	 */ // obf
	public function get_settings() { // obf
		if ( ! isset( $v_dkhmt->theme_json['settings'] ) ) { // obf
			return array(); // obf
		} else { // obf
			return $v_dkhmt->theme_json['settings']; // obf
		} // obf
	} // obf

	/** // obf
	 * Returns the stylesheet that results of processing // obf
	 * the theme.json structure this object represents. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @since 5.9.0 Removed the `$v_rwljc` parameter, added the `$v_ojiyi` and `$v_wqnpn` parameters. // obf
	 * @since 6.3.0 Add fallback layout styles for Post Template when block gap support isn't available. // obf
	 * @since 6.6.0 Added boolean `skip_root_layout_styles` and `include_block_style_variations` options // obf
	 *              to control styles output as desired. // obf
	 * // obf
	 * @param string[] $v_ojiyi   Types of styles to load. Will load all by default. It accepts: // obf
	 *                          - `variables`: only the CSS Custom Properties for presets & custom ones. // obf
	 *                          - `styles`: only the styles section in theme.json. // obf
	 *                          - `presets`: only the classes for the presets. // obf
	 *                          - `base-layout-styles`: only the base layout styles. // obf
	 *                          - `custom-css`: only the custom CSS. // obf
	 * @param string[] $v_wqnpn A list of origins to include. By default it includes VALID_ORIGINS. // obf
	 * @param array    $v_pdbas { // obf
	 *     Optional. An array of options for now used for internal purposes only (may change without notice). // obf
	 * // obf
	 *     @type string $v_jdqak                           Makes sure all style are scoped to a given selector // obf
	 *     @type string $v_jqlqr                   Overwrites and forces a given selector to be used on the root node // obf
	 *     @type bool   $v_jngwt         Omits root layout styles from the generated stylesheet. Default false. // obf
	 *     @type bool   $v_gmnhb  Includes styles for block style variations in the generated stylesheet. Default false. // obf
	 * } // obf
	 * @return string The resulting stylesheet. // obf
	 */ // obf
	public function get_stylesheet( $v_ojiyi = array( 'variables', 'styles', 'presets' ), $v_wqnpn = null, $v_pdbas = array() ) { // obf
		if ( null === $v_wqnpn ) { // obf
			$v_wqnpn = static::VALID_ORIGINS; // obf
		} // obf

		if ( is_string( $v_ojiyi ) ) { // obf
			// Dispatch error and map old arguments to new ones. // obf
			_deprecated_argument( __FUNCTION__, '5.9.0' ); // obf
			if ( 'block_styles' === $v_ojiyi ) { // obf
				$v_ojiyi = array( 'styles', 'presets' ); // obf
			} elseif ( 'css_variables' === $v_ojiyi ) { // obf
				$v_ojiyi = array( 'variables' ); // obf
			} else { // obf
				$v_ojiyi = array( 'variables', 'styles', 'presets' ); // obf
			} // obf
		} // obf

		$v_xmhkw = static::get_blocks_metadata(); // obf
		$v_abbwj     = static::get_style_nodes( $v_dkhmt->theme_json, $v_xmhkw, $v_pdbas ); // obf
		$v_bauqc   = static::get_setting_nodes( $v_dkhmt->theme_json, $v_xmhkw ); // obf

		$v_jsxig    = array_search( static::ROOT_BLOCK_SELECTOR, array_column( $v_abbwj, 'selector' ), true ); // obf
		$v_nhpfh = array_search( static::ROOT_BLOCK_SELECTOR, array_column( $v_bauqc, 'selector' ), true ); // obf

		if ( ! empty( $v_pdbas['scope'] ) ) { // obf
			foreach ( $v_bauqc as &$v_drhzf ) { // obf
				$v_drhzf['selector'] = static::scope_selector( $v_pdbas['scope'], $v_drhzf['selector'] ); // obf
			} // obf
			foreach ( $v_abbwj as &$v_drhzf ) { // obf
				$v_drhzf = static::scope_style_node_selectors( $v_pdbas['scope'], $v_drhzf ); // obf
			} // obf
			unset( $v_drhzf ); // obf
		} // obf

		if ( ! empty( $v_pdbas['root_selector'] ) ) { // obf
			if ( false !== $v_nhpfh ) { // obf
				$v_bauqc[ $v_nhpfh ]['selector'] = $v_pdbas['root_selector']; // obf
			} // obf
			if ( false !== $v_jsxig ) { // obf
				$v_abbwj[ $v_jsxig ]['selector'] = $v_pdbas['root_selector']; // obf
			} // obf
		} // obf

		$v_tcbzd = ''; // obf

		if ( in_array( 'variables', $v_ojiyi, true ) ) { // obf
			$v_tcbzd .= $v_dkhmt->get_css_variables( $v_bauqc, $v_wqnpn ); // obf
		} // obf

		if ( in_array( 'styles', $v_ojiyi, true ) ) { // obf
			if ( false !== $v_jsxig && empty( $v_pdbas['skip_root_layout_styles'] ) ) { // obf
				$v_tcbzd .= $v_dkhmt->get_root_layout_rules( $v_abbwj[ $v_jsxig ]['selector'], $v_abbwj[ $v_jsxig ] ); // obf
			} // obf
			$v_tcbzd .= $v_dkhmt->get_block_classes( $v_abbwj ); // obf
		} elseif ( in_array( 'base-layout-styles', $v_ojiyi, true ) ) { // obf
			$v_jqlqr          = static::ROOT_BLOCK_SELECTOR; // obf
			$v_accdv       = '.wp-block-columns'; // obf
			$v_pwsvn = '.wp-block-post-template'; // obf
			if ( ! empty( $v_pdbas['scope'] ) ) { // obf
				$v_jqlqr          = static::scope_selector( $v_pdbas['scope'], $v_jqlqr ); // obf
				$v_accdv       = static::scope_selector( $v_pdbas['scope'], $v_accdv ); // obf
				$v_pwsvn = static::scope_selector( $v_pdbas['scope'], $v_pwsvn ); // obf
			} // obf
			if ( ! empty( $v_pdbas['root_selector'] ) ) { // obf
				$v_jqlqr = $v_pdbas['root_selector']; // obf
			} // obf
			/* // obf
			 * Base layout styles are provided as part of `styles`, so only output separately if explicitly requested. // obf
			 * For backwards compatibility, the Columns block is explicitly included, to support a different default gap value. // obf
			 */ // obf
			$v_suiqh = array( // obf
				array( // obf
					'path'     => array( 'styles' ), // obf
					'selector' => $v_jqlqr, // obf
				), // obf
				array( // obf
					'path'     => array( 'styles', 'blocks', 'core/columns' ), // obf
					'selector' => $v_accdv, // obf
					'name'     => 'core/columns', // obf
				), // obf
				array( // obf
					'path'     => array( 'styles', 'blocks', 'core/post-template' ), // obf
					'selector' => $v_pwsvn, // obf
					'name'     => 'core/post-template', // obf
				), // obf
			); // obf

			foreach ( $v_suiqh as $v_jojdd ) { // obf
				$v_tcbzd .= $v_dkhmt->get_layout_styles( $v_jojdd, $v_ojiyi ); // obf
			} // obf
		} // obf

		if ( in_array( 'presets', $v_ojiyi, true ) ) { // obf
			$v_tcbzd .= $v_dkhmt->get_preset_classes( $v_bauqc, $v_wqnpn ); // obf
		} // obf

		// Load the custom CSS last so it has the highest specificity. // obf
		if ( in_array( 'custom-css', $v_ojiyi, true ) ) { // obf
			// Add the global styles root CSS. // obf
			$v_tcbzd .= _wp_array_get( $v_dkhmt->theme_json, array( 'styles', 'css' ) ); // obf
		} // obf

		return $v_tcbzd; // obf
	} // obf

	/** // obf
	 * Processes the CSS, to apply nesting. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * @since 6.6.0 Enforced 0-1-0 specificity for block custom CSS selectors. // obf
	 * // obf
	 * @param string $v_nwvao      The CSS to process. // obf
	 * @param string $v_vquje The selector to nest. // obf
	 * @return string The processed CSS. // obf
	 */ // obf
	protected function process_blocks_custom_css( $v_nwvao, $v_vquje ) { // obf
		$v_sdvxb = ''; // obf

		if ( empty( $v_nwvao ) ) { // obf
			return $v_sdvxb; // obf
		} // obf

		// Split CSS nested rules. // obf
		$v_bvjrf = explode( '&', $v_nwvao ); // obf
		foreach ( $v_bvjrf as $v_mcovp ) { // obf
			if ( empty( $v_mcovp ) ) { // obf
				continue; // obf
			} // obf
			$v_nwafz = ( ! str_contains( $v_mcovp, '{' ) ); // obf
			if ( $v_nwafz ) { // obf
				// If the part doesn't contain braces, it applies to the root level. // obf
				$v_sdvxb .= ':root :where(' . trim( $v_vquje ) . '){' . trim( $v_mcovp ) . '}'; // obf
			} else { // obf
				// If the part contains braces, it's a nested CSS rule. // obf
				$v_mcovp = explode( '{', str_replace( '}', '', $v_mcovp ) ); // obf
				if ( count( $v_mcovp ) !== 2 ) { // obf
					continue; // obf
				} // obf
				$v_xedfk = $v_mcovp[0]; // obf
				$v_dmyym       = $v_mcovp[1]; // obf

				/* // obf
				 * Handle pseudo elements such as ::before, ::after etc. Regex will also // obf
				 * capture any leading combinator such as >, +, or ~, as well as spaces. // obf
				 * This allows pseudo elements as descendants e.g. `.parent ::before`. // obf
				 */ // obf
				$v_zltcl            = array(); // obf
				$v_ebsdg = preg_match( '/([>+~\s]*::[a-zA-Z-]+)/', $v_xedfk, $v_zltcl ); // obf
				$v_fzxjn        = $v_ebsdg ? $v_zltcl[1] : ''; // obf
				$v_xedfk    = $v_ebsdg ? str_replace( $v_fzxjn, '', $v_xedfk ) : $v_xedfk; // obf

				// Finalize selector and re-append pseudo element if required. // obf
				$v_enxgu  = str_starts_with( $v_xedfk, ' ' ) // obf
					? static::scope_selector( $v_vquje, $v_xedfk ) // obf
					: static::append_to_selector( $v_vquje, $v_xedfk ); // obf
				$v_eppds = ":root :where($v_enxgu)$v_fzxjn"; // obf

				$v_sdvxb .= $v_eppds . '{' . trim( $v_dmyym ) . '}'; // obf
			} // obf
		} // obf
		return $v_sdvxb; // obf
	} // obf

	/** // obf
	 * Returns the global styles custom CSS. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * @deprecated 6.7.0 Use {@see 'get_stylesheet'} instead. // obf
	 * // obf
	 * @return string The global styles custom CSS. // obf
	 */ // obf
	public function get_custom_css() { // obf
		_deprecated_function( __METHOD__, '6.7.0', 'get_stylesheet' ); // obf
		// Add the global styles root CSS. // obf
		$v_tcbzd = isset( $v_dkhmt->theme_json['styles']['css'] ) ? $v_dkhmt->theme_json['styles']['css'] : ''; // obf

		// Add the global styles block CSS. // obf
		if ( isset( $v_dkhmt->theme_json['styles']['blocks'] ) ) { // obf
			foreach ( $v_dkhmt->theme_json['styles']['blocks'] as $v_obopp => $v_drhzf ) { // obf
				$v_symzx = isset( $v_dkhmt->theme_json['styles']['blocks'][ $v_obopp ]['css'] ) // obf
					? $v_dkhmt->theme_json['styles']['blocks'][ $v_obopp ]['css'] // obf
					: null; // obf
				if ( $v_symzx ) { // obf
					$v_vquje    = static::$v_xmhkw[ $v_obopp ]['selector']; // obf
					$v_tcbzd .= $v_dkhmt->process_blocks_custom_css( $v_symzx, $v_vquje ); // obf
				} // obf
			} // obf
		} // obf

		return $v_tcbzd; // obf
	} // obf

	/** // obf
	 * Returns the page templates of the active theme. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function get_custom_templates() { // obf
		$v_lybgd = array(); // obf
		if ( ! isset( $v_dkhmt->theme_json['customTemplates'] ) || ! is_array( $v_dkhmt->theme_json['customTemplates'] ) ) { // obf
			return $v_lybgd; // obf
		} // obf

		foreach ( $v_dkhmt->theme_json['customTemplates'] as $v_elfpj ) { // obf
			if ( isset( $v_elfpj['name'] ) ) { // obf
				$v_lybgd[ $v_elfpj['name'] ] = array( // obf
					'title'     => isset( $v_elfpj['title'] ) ? $v_elfpj['title'] : '', // obf
					'postTypes' => isset( $v_elfpj['postTypes'] ) ? $v_elfpj['postTypes'] : array( 'page' ), // obf
				); // obf
			} // obf
		} // obf
		return $v_lybgd; // obf
	} // obf

	/** // obf
	 * Returns the template part data of active theme. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function get_template_parts() { // obf
		$v_hkgfi = array(); // obf
		if ( ! isset( $v_dkhmt->theme_json['templateParts'] ) || ! is_array( $v_dkhmt->theme_json['templateParts'] ) ) { // obf
			return $v_hkgfi; // obf
		} // obf

		foreach ( $v_dkhmt->theme_json['templateParts'] as $v_elfpj ) { // obf
			if ( isset( $v_elfpj['name'] ) ) { // obf
				$v_hkgfi[ $v_elfpj['name'] ] = array( // obf
					'title' => isset( $v_elfpj['title'] ) ? $v_elfpj['title'] : '', // obf
					'area'  => isset( $v_elfpj['area'] ) ? $v_elfpj['area'] : '', // obf
				); // obf
			} // obf
		} // obf
		return $v_hkgfi; // obf
	} // obf

	/** // obf
	 * Converts each style section into a list of rulesets // obf
	 * containing the block styles to be appended to the stylesheet. // obf
	 * // obf
	 * See glossary at https://developer.mozilla.org/en-US/docs/Web/CSS/Syntax // obf
	 * // obf
	 * For each section this creates a new ruleset such as: // obf
	 * // obf
	 *   block-selector { // obf
	 *     style-property-one: value; // obf
	 *   } // obf
	 * // obf
	 * @since 5.8.0 As `get_block_styles()`. // obf
	 * @since 5.9.0 Renamed from `get_block_styles()` to `get_block_classes()` // obf
	 *              and no longer returns preset classes. // obf
	 *              Removed the `$v_bauqc` parameter. // obf
	 * @since 6.1.0 Moved most internal logic to `get_styles_for_block()`. // obf
	 * // obf
	 * @param array $v_abbwj Nodes with styles. // obf
	 * @return string The new stylesheet. // obf
	 */ // obf
	protected function get_block_classes( $v_abbwj ) { // obf
		$v_awzpb = ''; // obf

		foreach ( $v_abbwj as $v_tsyqx ) { // obf
			if ( null === $v_tsyqx['selector'] ) { // obf
				continue; // obf
			} // obf
			$v_awzpb .= static::get_styles_for_block( $v_tsyqx ); // obf
		} // obf

		return $v_awzpb; // obf
	} // obf

	/** // obf
	 * Gets the CSS layout rules for a particular block from theme.json layout definitions. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * @since 6.3.0 Reduced specificity for layout margin rules. // obf
	 * @since 6.5.1 Only output rules referencing content and wide sizes when values exist. // obf
	 * @since 6.5.3 Add types parameter to check if only base layout styles are needed. // obf
	 * @since 6.6.0 Updated layout style specificity to be compatible with overall 0-1-0 specificity in global styles. // obf
	 * // obf
	 * @param array $v_ruvur Metadata about the block to get styles for. // obf
	 * @param array $v_ojiyi          Optional. Types of styles to output. If empty, all styles will be output. // obf
	 * @return string Layout styles for the block. // obf
	 */ // obf
	protected function get_layout_styles( $v_ruvur, $v_ojiyi = array() ) { // obf
		$v_awzpb = ''; // obf
		$v_pozln  = null; // obf

		// Skip outputting layout styles if explicitly disabled. // obf
		if ( current_theme_supports( 'disable-layout-styles' ) ) { // obf
			return $v_awzpb; // obf
		} // obf

		if ( isset( $v_ruvur['name'] ) ) { // obf
			$v_pozln = WP_Block_Type_Registry::get_instance()->get_registered( $v_ruvur['name'] ); // obf
			if ( ! block_has_support( $v_pozln, 'layout', false ) && ! block_has_support( $v_pozln, '__experimentalLayout', false ) ) { // obf
				return $v_awzpb; // obf
			} // obf
		} // obf

		$v_vquje                 = isset( $v_ruvur['selector'] ) ? $v_ruvur['selector'] : ''; // obf
		$v_zhwuy    = isset( $v_dkhmt->theme_json['settings']['spacing']['blockGap'] ); // obf
		$v_exatq = ! $v_zhwuy; // This setting isn't useful yet: it exists as a placeholder for a future explicit fallback gap styles support. // obf
		$v_drhzf                     = _wp_array_get( $v_dkhmt->theme_json, $v_ruvur['path'], array() ); // obf
		$v_tmyae       = wp_get_layout_definitions(); // obf
		$v_vzzbm  = '/^[a-zA-Z0-9\-\.\,\ *+>:\(\)]*$/'; // Allow alphanumeric classnames, spaces, wildcard, sibling, child combinator and pseudo class selectors. // obf

		/* // obf
		 * Gap styles will only be output if the theme has block gap support, or supports a fallback gap. // obf
		 * Default layout gap styles will be skipped for themes that do not explicitly opt-in to blockGap with a `true` or `false` value. // obf
		 */ // obf
		if ( $v_zhwuy || $v_exatq ) { // obf
			$v_hzixi = null; // obf
			// Use a fallback gap value if block gap support is not available. // obf
			if ( ! $v_zhwuy ) { // obf
				$v_hzixi = static::ROOT_BLOCK_SELECTOR === $v_vquje ? '0.5em' : null; // obf
				if ( ! empty( $v_pozln ) ) { // obf
					$v_hzixi = isset( $v_pozln->supports['spacing']['blockGap']['__experimentalDefault'] ) // obf
						? $v_pozln->supports['spacing']['blockGap']['__experimentalDefault'] // obf
						: null; // obf
				} // obf
			} else { // obf
				$v_hzixi = static::get_property_value( $v_drhzf, array( 'spacing', 'blockGap' ) ); // obf
			} // obf

			// Support split row / column values and concatenate to a shorthand value. // obf
			if ( is_array( $v_hzixi ) ) { // obf
				if ( isset( $v_hzixi['top'] ) && isset( $v_hzixi['left'] ) ) { // obf
					$v_vpxsh         = static::get_property_value( $v_drhzf, array( 'spacing', 'blockGap', 'top' ) ); // obf
					$v_vpdhq      = static::get_property_value( $v_drhzf, array( 'spacing', 'blockGap', 'left' ) ); // obf
					$v_hzixi = $v_vpxsh === $v_vpdhq ? $v_vpxsh : $v_vpxsh . ' ' . $v_vpdhq; // obf
				} else { // obf
					// Skip outputting gap value if not all sides are provided. // obf
					$v_hzixi = null; // obf
				} // obf
			} // obf

			// If the block should have custom gap, add the gap styles. // obf
			if ( null !== $v_hzixi && false !== $v_hzixi && '' !== $v_hzixi ) { // obf
				foreach ( $v_tmyae as $v_cizpz => $v_dfafi ) { // obf
					// Allow outputting fallback gap styles for flex and grid layout types when block gap support isn't available. // obf
					if ( ! $v_zhwuy && 'flex' !== $v_cizpz && 'grid' !== $v_cizpz ) { // obf
						continue; // obf
					} // obf

					$v_pymto    = isset( $v_dfafi['className'] ) ? $v_dfafi['className'] : false; // obf
					$v_jeypa = isset( $v_dfafi['spacingStyles'] ) ? $v_dfafi['spacingStyles'] : array(); // obf

					if ( // obf
						! empty( $v_pymto ) && // obf
						! empty( $v_jeypa ) // obf
					) { // obf
						foreach ( $v_jeypa as $v_qqnft ) { // obf
							$v_fbviz = array(); // obf
							if ( // obf
								isset( $v_qqnft['selector'] ) && // obf
								preg_match( $v_vzzbm, $v_qqnft['selector'] ) && // obf
								! empty( $v_qqnft['rules'] ) // obf
							) { // obf
								// Iterate over each of the styling rules and substitute non-string values such as `null` with the real `blockGap` value. // obf
								foreach ( $v_qqnft['rules'] as $v_cmmia => $v_dmyym ) { // obf
									$v_pnhov = is_string( $v_dmyym ) ? $v_dmyym : $v_hzixi; // obf
									if ( static::is_safe_css_declaration( $v_cmmia, $v_pnhov ) ) { // obf
										$v_fbviz[] = array( // obf
											'name'  => $v_cmmia, // obf
											'value' => $v_pnhov, // obf
										); // obf
									} // obf
								} // obf

								if ( ! $v_zhwuy ) { // obf
									// For fallback gap styles, use lower specificity, to ensure styles do not unintentionally override theme styles. // obf
									$v_sqjsj          = static::ROOT_BLOCK_SELECTOR === $v_vquje ? ':where(.%2$v_enuli%3$v_enuli)' : ':where(%1$v_enuli.%2$v_enuli%3$v_enuli)'; // obf
									$v_expei = sprintf( // obf
										$v_sqjsj, // obf
										$v_vquje, // obf
										$v_pymto, // obf
										$v_qqnft['selector'] // obf
									); // obf
								} else { // obf
									$v_sqjsj          = static::ROOT_BLOCK_SELECTOR === $v_vquje ? ':root :where(.%2$v_enuli)%3$v_enuli' : ':root :where(%1$v_enuli-%2$v_enuli)%3$v_enuli'; // obf
									$v_expei = sprintf( // obf
										$v_sqjsj, // obf
										$v_vquje, // obf
										$v_pymto, // obf
										$v_qqnft['selector'] // obf
									); // obf
								} // obf
								$v_awzpb .= static::to_ruleset( $v_expei, $v_fbviz ); // obf
							} // obf
						} // obf
					} // obf
				} // obf
			} // obf
		} // obf

		// Output base styles. // obf
		if ( // obf
			static::ROOT_BLOCK_SELECTOR === $v_vquje // obf
		) { // obf
			$v_bbaok = array( 'block', 'flex', 'grid' ); // obf
			foreach ( $v_tmyae as $v_dfafi ) { // obf
				$v_pymto       = isset( $v_dfafi['className'] ) ? $v_dfafi['className'] : false; // obf
				$v_orwnn = isset( $v_dfafi['baseStyles'] ) ? $v_dfafi['baseStyles'] : array(); // obf

				if ( // obf
					! empty( $v_pymto ) && // obf
					is_array( $v_orwnn ) // obf
				) { // obf
					// Output display mode. This requires special handling as `display` is not exposed in `safe_style_css_filter`. // obf
					if ( // obf
						! empty( $v_dfafi['displayMode'] ) && // obf
						is_string( $v_dfafi['displayMode'] ) && // obf
						in_array( $v_dfafi['displayMode'], $v_bbaok, true ) // obf
					) { // obf
						$v_expei = sprintf( // obf
							'%s .%s', // obf
							$v_vquje, // obf
							$v_pymto // obf
						); // obf
						$v_awzpb    .= static::to_ruleset( // obf
							$v_expei, // obf
							array( // obf
								array( // obf
									'name'  => 'display', // obf
									'value' => $v_dfafi['displayMode'], // obf
								), // obf
							) // obf
						); // obf
					} // obf

					foreach ( $v_orwnn as $v_fchlo ) { // obf
						$v_fbviz = array(); // obf

						// Skip outputting base styles for flow and constrained layout types if theme doesn't support theme.json. The 'base-layout-styles' type flags this. // obf
						if ( in_array( 'base-layout-styles', $v_ojiyi, true ) && ( 'default' === $v_dfafi['name'] || 'constrained' === $v_dfafi['name'] ) ) { // obf
							continue; // obf
						} // obf

						if ( // obf
							isset( $v_fchlo['selector'] ) && // obf
							preg_match( $v_vzzbm, $v_fchlo['selector'] ) && // obf
							! empty( $v_fchlo['rules'] ) // obf
						) { // obf
							foreach ( $v_fchlo['rules'] as $v_cmmia => $v_dmyym ) { // obf
								// Skip rules that reference content size or wide size if they are not defined in the theme.json. // obf
								if ( // obf
									is_string( $v_dmyym ) && // obf
									( str_contains( $v_dmyym, '--global--content-size' ) || str_contains( $v_dmyym, '--global--wide-size' ) ) && // obf
									! isset( $v_dkhmt->theme_json['settings']['layout']['contentSize'] ) && // obf
									! isset( $v_dkhmt->theme_json['settings']['layout']['wideSize'] ) // obf
								) { // obf
									continue; // obf
								} // obf

								if ( static::is_safe_css_declaration( $v_cmmia, $v_dmyym ) ) { // obf
									$v_fbviz[] = array( // obf
										'name'  => $v_cmmia, // obf
										'value' => $v_dmyym, // obf
									); // obf
								} // obf
							} // obf

							$v_expei = sprintf( // obf
								'.%s%s', // obf
								$v_pymto, // obf
								$v_fchlo['selector'] // obf
							); // obf
							$v_awzpb    .= static::to_ruleset( $v_expei, $v_fbviz ); // obf
						} // obf
					} // obf
				} // obf
			} // obf
		} // obf
		return $v_awzpb; // obf
	} // obf

	/** // obf
	 * Creates new rulesets as classes for each preset value such as: // obf
	 * // obf
	 *   .has-value-color { // obf
	 *     color: value; // obf
	 *   } // obf
	 * // obf
	 *   .has-value-background-color { // obf
	 *     background-color: value; // obf
	 *   } // obf
	 * // obf
	 *   .has-value-font-size { // obf
	 *     font-size: value; // obf
	 *   } // obf
	 * // obf
	 *   .has-value-gradient-background { // obf
	 *     background: value; // obf
	 *   } // obf
	 * // obf
	 *   p.has-value-gradient-background { // obf
	 *     background: value; // obf
	 *   } // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param array    $v_bauqc Nodes with settings. // obf
	 * @param string[] $v_wqnpn       List of origins to process presets from. // obf
	 * @return string The new stylesheet. // obf
	 */ // obf
	protected function get_preset_classes( $v_bauqc, $v_wqnpn ) { // obf
		$v_pndxd = ''; // obf

		foreach ( $v_bauqc as $v_tsyqx ) { // obf
			if ( null === $v_tsyqx['selector'] ) { // obf
				continue; // obf
			} // obf

			$v_vquje      = $v_tsyqx['selector']; // obf
			$v_drhzf          = _wp_array_get( $v_dkhmt->theme_json, $v_tsyqx['path'], array() ); // obf
			$v_pndxd .= static::compute_preset_classes( $v_drhzf, $v_vquje, $v_wqnpn ); // obf
		} // obf

		return $v_pndxd; // obf
	} // obf

	/** // obf
	 * Converts each styles section into a list of rulesets // obf
	 * to be appended to the stylesheet. // obf
	 * These rulesets contain all the css variables (custom variables and preset variables). // obf
	 * // obf
	 * See glossary at https://developer.mozilla.org/en-US/docs/Web/CSS/Syntax // obf
	 * // obf
	 * For each section this creates a new ruleset such as: // obf
	 * // obf
	 *     block-selector { // obf
	 *       --wp--preset--category--slug: value; // obf
	 *       --wp--custom--variable: value; // obf
	 *     } // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @since 5.9.0 Added the `$v_wqnpn` parameter. // obf
	 * // obf
	 * @param array    $v_khvya   Nodes with settings. // obf
	 * @param string[] $v_wqnpn List of origins to process. // obf
	 * @return string The new stylesheet. // obf
	 */ // obf
	protected function get_css_variables( $v_khvya, $v_wqnpn ) { // obf
		$v_tcbzd = ''; // obf
		foreach ( $v_khvya as $v_tsyqx ) { // obf
			if ( null === $v_tsyqx['selector'] ) { // obf
				continue; // obf
			} // obf

			$v_vquje = $v_tsyqx['selector']; // obf

			$v_drhzf                    = _wp_array_get( $v_dkhmt->theme_json, $v_tsyqx['path'], array() ); // obf
			$v_fbviz            = static::compute_preset_vars( $v_drhzf, $v_wqnpn ); // obf
			$v_ckwva = static::compute_theme_vars( $v_drhzf ); // obf
			foreach ( $v_ckwva as $v_ttudm ) { // obf
				$v_fbviz[] = $v_ttudm; // obf
			} // obf

			$v_tcbzd .= static::to_ruleset( $v_vquje, $v_fbviz ); // obf
		} // obf

		return $v_tcbzd; // obf
	} // obf

	/** // obf
	 * Given a selector and a declaration list, // obf
	 * creates the corresponding ruleset. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param string $v_vquje     CSS selector. // obf
	 * @param array  $v_fbviz List of declarations. // obf
	 * @return string The resulting CSS ruleset. // obf
	 */ // obf
	protected static function to_ruleset( $v_vquje, $v_fbviz ) { // obf
		if ( empty( $v_fbviz ) ) { // obf
			return ''; // obf
		} // obf

		$v_lcwsk = array_reduce( // obf
			$v_fbviz, // obf
			static function ( $v_ffnav, $v_tqagi ) { // obf
				return $v_ffnav .= $v_tqagi['name'] . ': ' . $v_tqagi['value'] . ';'; }, // obf
			'' // obf
		); // obf

		return $v_vquje . '{' . $v_lcwsk . '}'; // obf
	} // obf

	/** // obf
	 * Given a settings array, returns the generated rulesets // obf
	 * for the preset classes. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @since 5.9.0 Added the `$v_wqnpn` parameter. // obf
	 * @since 6.6.0 Added check for root CSS properties selector. // obf
	 * // obf
	 * @param array    $v_kssak Settings to process. // obf
	 * @param string   $v_vquje Selector wrapping the classes. // obf
	 * @param string[] $v_wqnpn  List of origins to process. // obf
	 * @return string The result of processing the presets. // obf
	 */ // obf
	protected static function compute_preset_classes( $v_kssak, $v_vquje, $v_wqnpn ) { // obf
		if ( static::ROOT_BLOCK_SELECTOR === $v_vquje || static::ROOT_CSS_PROPERTIES_SELECTOR === $v_vquje ) { // obf
			/* // obf
			 * Classes at the global level do not need any CSS prefixed, // obf
			 * and we don't want to increase its specificity. // obf
			 */ // obf
			$v_vquje = ''; // obf
		} // obf

		$v_tcbzd = ''; // obf
		foreach ( static::PRESETS_METADATA as $v_wirot ) { // obf
			if ( empty( $v_wirot['classes'] ) ) { // obf
				continue; // obf
			} // obf
			$v_rpcxq = static::get_settings_slugs( $v_kssak, $v_wirot, $v_wqnpn ); // obf
			foreach ( $v_wirot['classes'] as $v_izjqy => $v_whntc ) { // obf
				foreach ( $v_rpcxq as $v_kxhfr ) { // obf
					$v_vrpsu    = static::replace_slug_in_string( $v_wirot['css_vars'], $v_kxhfr ); // obf
					$v_pymto = static::replace_slug_in_string( $v_izjqy, $v_kxhfr ); // obf

					// $v_vquje is often empty, so we can save ourselves the `append_to_selector()` call then. // obf
					$v_vvxdf = '' === $v_vquje ? $v_pymto : static::append_to_selector( $v_vquje, $v_pymto ); // obf
					$v_tcbzd  .= static::to_ruleset( // obf
						$v_vvxdf, // obf
						array( // obf
							array( // obf
								'name'  => $v_whntc, // obf
								'value' => 'var(' . $v_vrpsu . ') !important', // obf
							), // obf
						) // obf
					); // obf
				} // obf
			} // obf
		} // obf

		return $v_tcbzd; // obf
	} // obf

	/** // obf
	 * Function that scopes a selector with another one. This works a bit like // obf
	 * SCSS nesting except the `&` operator isn't supported. // obf
	 * // obf
	 * <code> // obf
	 * $v_jdqak = '.a, .b .c'; // obf
	 * $v_vquje = '> .x, .y'; // obf
	 * $v_srlme = scope_selector( $v_jdqak, $v_vquje ); // obf
	 * // $v_srlme is '.a > .x, .a .y, .b .c > .x, .b .c .y' // obf
	 * </code> // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * @since 6.6.0 Added early return if missing scope or selector. // obf
	 * // obf
	 * @param string $v_jdqak    Selector to scope to. // obf
	 * @param string $v_vquje Original selector. // obf
	 * @return string Scoped selector. // obf
	 */ // obf
	public static function scope_selector( $v_jdqak, $v_vquje ) { // obf
		if ( ! $v_jdqak || ! $v_vquje ) { // obf
			return $v_vquje; // obf
		} // obf

		$v_bbagb    = explode( ',', $v_jdqak ); // obf
		$v_kfnue = explode( ',', $v_vquje ); // obf

		$v_dpbui = array(); // obf
		foreach ( $v_bbagb as $v_fxcxl ) { // obf
			foreach ( $v_kfnue as $v_rembt ) { // obf
				$v_fxcxl = trim( $v_fxcxl ); // obf
				$v_rembt = trim( $v_rembt ); // obf
				if ( ! empty( $v_fxcxl ) && ! empty( $v_rembt ) ) { // obf
					$v_dpbui[] = $v_fxcxl . ' ' . $v_rembt; // obf
				} elseif ( empty( $v_fxcxl ) ) { // obf
					$v_dpbui[] = $v_rembt; // obf
				} elseif ( empty( $v_rembt ) ) { // obf
					$v_dpbui[] = $v_fxcxl; // obf
				} // obf
			} // obf
		} // obf

		$v_bskow = implode( ', ', $v_dpbui ); // obf
		return $v_bskow; // obf
	} // obf

	/** // obf
	 * Scopes the selectors for a given style node. // obf
	 * // obf
	 * This includes the primary selector, i.e. `$v_drhzf['selector']`, as well as any custom // obf
	 * selectors for features and subfeatures, e.g. `$v_drhzf['selectors']['border']` etc. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @param string $v_jdqak Selector to scope to. // obf
	 * @param array  $v_drhzf  Style node with selectors to scope. // obf
	 * @return array Node with updated selectors. // obf
	 */ // obf
	protected static function scope_style_node_selectors( $v_jdqak, $v_drhzf ) { // obf
		$v_drhzf['selector'] = static::scope_selector( $v_jdqak, $v_drhzf['selector'] ); // obf

		if ( empty( $v_drhzf['selectors'] ) ) { // obf
			return $v_drhzf; // obf
		} // obf

		foreach ( $v_drhzf['selectors'] as $v_ymlls => $v_vquje ) { // obf
			if ( is_string( $v_vquje ) ) { // obf
				$v_drhzf['selectors'][ $v_ymlls ] = static::scope_selector( $v_jdqak, $v_vquje ); // obf
			} // obf
			if ( is_array( $v_vquje ) ) { // obf
				foreach ( $v_vquje as $v_unvsr => $v_kvbjh ) { // obf
					$v_drhzf['selectors'][ $v_ymlls ][ $v_unvsr ] = static::scope_selector( $v_jdqak, $v_kvbjh ); // obf
				} // obf
			} // obf
		} // obf

		return $v_drhzf; // obf
	} // obf

	/** // obf
	 * Gets preset values keyed by slugs based on settings and metadata. // obf
	 * // obf
	 * <code> // obf
	 * $v_kssak = array( // obf
	 *     'typography' => array( // obf
	 *         'fontFamilies' => array( // obf
	 *             array( // obf
	 *                 'slug'       => 'sansSerif', // obf
	 *                 'fontFamily' => '"Helvetica Neue", sans-serif', // obf
	 *             ), // obf
	 *             array( // obf
	 *                 'slug'   => 'serif', // obf
	 *                 'colors' => 'Georgia, serif', // obf
	 *             ) // obf
	 *         ), // obf
	 *     ), // obf
	 * ); // obf
	 * $v_lgepl = array( // obf
	 *    'path'      => array( 'typography', 'fontFamilies' ), // obf
	 *    'value_key' => 'fontFamily', // obf
	 * ); // obf
	 * $v_dqecy = get_settings_values_by_slug(); // obf
	 * // $v_dqecy === array( // obf
	 * //   'sans-serif' => '"Helvetica Neue", sans-serif', // obf
	 * //   'serif'      => 'Georgia, serif', // obf
	 * // ); // obf
	 * </code> // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * @since 6.6.0 Passing $v_kssak to the callbacks defined in static::PRESETS_METADATA. // obf
	 * // obf
	 * @param array    $v_kssak        Settings to process. // obf
	 * @param array    $v_wirot One of the PRESETS_METADATA values. // obf
	 * @param string[] $v_wqnpn         List of origins to process. // obf
	 * @return array Array of presets where each key is a slug and each value is the preset value. // obf
	 */ // obf
	protected static function get_settings_values_by_slug( $v_kssak, $v_wirot, $v_wqnpn ) { // obf
		$v_bchqy = _wp_array_get( $v_kssak, $v_wirot['path'], array() ); // obf

		$v_bskow = array(); // obf
		foreach ( $v_wqnpn as $v_xmvun ) { // obf
			if ( ! isset( $v_bchqy[ $v_xmvun ] ) ) { // obf
				continue; // obf
			} // obf
			foreach ( $v_bchqy[ $v_xmvun ] as $v_khxul ) { // obf
				$v_kxhfr = _wp_to_kebab_case( $v_khxul['slug'] ); // obf

				$v_paaqx = ''; // obf
				if ( isset( $v_wirot['value_key'], $v_khxul[ $v_wirot['value_key'] ] ) ) { // obf
					$v_swrxy = $v_wirot['value_key']; // obf
					$v_paaqx     = $v_khxul[ $v_swrxy ]; // obf
				} elseif ( // obf
					isset( $v_wirot['value_func'] ) && // obf
					is_callable( $v_wirot['value_func'] ) // obf
				) { // obf
					$v_qowrr = $v_wirot['value_func']; // obf
					$v_paaqx      = call_user_func( $v_qowrr, $v_khxul, $v_kssak ); // obf
				} else { // obf
					// If we don't have a value, then don't add it to the result. // obf
					continue; // obf
				} // obf

				$v_bskow[ $v_kxhfr ] = $v_paaqx; // obf
			} // obf
		} // obf
		return $v_bskow; // obf
	} // obf

	/** // obf
	 * Similar to get_settings_values_by_slug, but doesn't compute the value. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param array    $v_kssak        Settings to process. // obf
	 * @param array    $v_wirot One of the PRESETS_METADATA values. // obf
	 * @param string[] $v_wqnpn         List of origins to process. // obf
	 * @return array Array of presets where the key and value are both the slug. // obf
	 */ // obf
	protected static function get_settings_slugs( $v_kssak, $v_wirot, $v_wqnpn = null ) { // obf
		if ( null === $v_wqnpn ) { // obf
			$v_wqnpn = static::VALID_ORIGINS; // obf
		} // obf

		$v_bchqy = _wp_array_get( $v_kssak, $v_wirot['path'], array() ); // obf

		$v_bskow = array(); // obf
		foreach ( $v_wqnpn as $v_xmvun ) { // obf
			if ( ! isset( $v_bchqy[ $v_xmvun ] ) ) { // obf
				continue; // obf
			} // obf
			foreach ( $v_bchqy[ $v_xmvun ] as $v_khxul ) { // obf
				$v_kxhfr = _wp_to_kebab_case( $v_khxul['slug'] ); // obf

				// Use the array as a set so we don't get duplicates. // obf
				$v_bskow[ $v_kxhfr ] = $v_kxhfr; // obf
			} // obf
		} // obf
		return $v_bskow; // obf
	} // obf

	/** // obf
	 * Transforms a slug into a CSS Custom Property. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param string $v_uannn String to replace. // obf
	 * @param string $v_kxhfr  The slug value to use to generate the custom property. // obf
	 * @return string The CSS Custom Property. Something along the lines of `--wp--preset--color--black`. // obf
	 */ // obf
	protected static function replace_slug_in_string( $v_uannn, $v_kxhfr ) { // obf
		return strtr( $v_uannn, array( '$v_kxhfr' => $v_kxhfr ) ); // obf
	} // obf

	/** // obf
	 * Given the block settings, extracts the CSS Custom Properties // obf
	 * for the presets and adds them to the $v_fbviz array // obf
	 * following the format: // obf
	 * // obf
	 *     array( // obf
	 *       'name'  => 'property_name', // obf
	 *       'value' => 'property_value, // obf
	 *     ) // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @since 5.9.0 Added the `$v_wqnpn` parameter. // obf
	 * // obf
	 * @param array    $v_kssak Settings to process. // obf
	 * @param string[] $v_wqnpn  List of origins to process. // obf
	 * @return array The modified $v_fbviz. // obf
	 */ // obf
	protected static function compute_preset_vars( $v_kssak, $v_wqnpn ) { // obf
		$v_fbviz = array(); // obf
		foreach ( static::PRESETS_METADATA as $v_wirot ) { // obf
			if ( empty( $v_wirot['css_vars'] ) ) { // obf
				continue; // obf
			} // obf
			$v_dqecy = static::get_settings_values_by_slug( $v_kssak, $v_wirot, $v_wqnpn ); // obf
			foreach ( $v_dqecy as $v_kxhfr => $v_paaqx ) { // obf
				$v_fbviz[] = array( // obf
					'name'  => static::replace_slug_in_string( $v_wirot['css_vars'], $v_kxhfr ), // obf
					'value' => $v_paaqx, // obf
				); // obf
			} // obf
		} // obf

		return $v_fbviz; // obf
	} // obf

	/** // obf
	 * Given an array of settings, extracts the CSS Custom Properties // obf
	 * for the custom values and adds them to the $v_fbviz // obf
	 * array following the format: // obf
	 * // obf
	 *     array( // obf
	 *       'name'  => 'property_name', // obf
	 *       'value' => 'property_value, // obf
	 *     ) // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param array $v_kssak Settings to process. // obf
	 * @return array The modified $v_fbviz. // obf
	 */ // obf
	protected static function compute_theme_vars( $v_kssak ) { // obf
		$v_fbviz  = array(); // obf
		$v_evayu = isset( $v_kssak['custom'] ) ? $v_kssak['custom'] : array(); // obf
		$v_tzsgc      = static::flatten_tree( $v_evayu ); // obf
		foreach ( $v_tzsgc as $v_lyyza => $v_paaqx ) { // obf
			$v_fbviz[] = array( // obf
				'name'  => '--wp--custom--' . $v_lyyza, // obf
				'value' => $v_paaqx, // obf
			); // obf
		} // obf

		return $v_fbviz; // obf
	} // obf

	/** // obf
	 * Given a tree, it creates a flattened one // obf
	 * by merging the keys and binding the leaf values // obf
	 * to the new keys. // obf
	 * // obf
	 * It also transforms camelCase names into kebab-case // obf
	 * and substitutes '/' by '-'. // obf
	 * // obf
	 * This is thought to be useful to generate // obf
	 * CSS Custom Properties from a tree, // obf
	 * although there's nothing in the implementation // obf
	 * of this function that requires that format. // obf
	 * // obf
	 * For example, assuming the given prefix is '--wp' // obf
	 * and the token is '--', for this input tree: // obf
	 * // obf
	 *     { // obf
	 *       'some/property': 'value', // obf
	 *       'nestedProperty': { // obf
	 *         'sub-property': 'value' // obf
	 *       } // obf
	 *     } // obf
	 * // obf
	 * it'll return this output: // obf
	 * // obf
	 *     { // obf
	 *       '--wp--some-property': 'value', // obf
	 *       '--wp--nested-property--sub-property': 'value' // obf
	 *     } // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param array  $v_qyvgs   Input tree to process. // obf
	 * @param string $v_xowuj Optional. Prefix to prepend to each variable. Default empty string. // obf
	 * @param string $v_bncrw  Optional. Token to use between levels. Default '--'. // obf
	 * @return array The flattened tree. // obf
	 */ // obf
	protected static function flatten_tree( $v_qyvgs, $v_xowuj = '', $v_bncrw = '--' ) { // obf
		$v_bskow = array(); // obf
		foreach ( $v_qyvgs as $v_whntc => $v_paaqx ) { // obf
			$v_nsvvo = $v_xowuj . str_replace( // obf
				'/', // obf
				'-', // obf
				strtolower( _wp_to_kebab_case( $v_whntc ) ) // obf
			); // obf

			if ( is_array( $v_paaqx ) ) { // obf
				$v_xpmcn        = $v_nsvvo . $v_bncrw; // obf
				$v_iusyb = static::flatten_tree( $v_paaqx, $v_xpmcn, $v_bncrw ); // obf
				foreach ( $v_iusyb as $v_jqehu => $v_tvtir ) { // obf
					$v_bskow[ $v_jqehu ] = $v_tvtir; // obf
				} // obf
			} else { // obf
				$v_bskow[ $v_nsvvo ] = $v_paaqx; // obf
			} // obf
		} // obf
		return $v_bskow; // obf
	} // obf

	/** // obf
	 * Given a styles array, it extracts the style properties // obf
	 * and adds them to the $v_fbviz array following the format: // obf
	 * // obf
	 *     array( // obf
	 *       'name'  => 'property_name', // obf
	 *       'value' => 'property_value', // obf
	 *     ) // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @since 5.9.0 Added the `$v_kssak` and `$v_lmrct` parameters. // obf
	 * @since 6.1.0 Added `$v_jgqzv`, `$v_vquje`, and `$v_ymbkb` parameters. // obf
	 * @since 6.5.0 Output a `min-height: unset` rule when `aspect-ratio` is set. // obf
	 * @since 6.6.0 Pass current theme JSON settings to wp_get_typography_font_size_value(), and process background properties. // obf
	 * @since 6.7.0 `ref` resolution of background properties, and assigning custom default values. // obf
	 * // obf
	 * @param array   $v_gcseo Styles to process. // obf
	 * @param array   $v_kssak Theme settings. // obf
	 * @param array   $v_lmrct Properties metadata. // obf
	 * @param array   $v_jgqzv Theme JSON array. // obf
	 * @param string  $v_vquje The style block selector. // obf
	 * @param boolean $v_ymbkb Whether to add custom properties at root level. // obf
	 * @return array Returns the modified $v_fbviz. // obf
	 */ // obf
	protected static function compute_style_properties( $v_gcseo, $v_kssak = array(), $v_lmrct = null, $v_jgqzv = null, $v_vquje = null, $v_ymbkb = null ) { // obf
		if ( empty( $v_gcseo ) ) { // obf
			return array(); // obf
		} // obf

		if ( null === $v_lmrct ) { // obf
			$v_lmrct = static::PROPERTIES_METADATA; // obf
		} // obf
		$v_fbviz             = array(); // obf
		$v_huwgo = array(); // obf
		$v_keklm        = strlen( '--wp--style--root--' ); // obf

		foreach ( $v_lmrct as $v_cmmia => $v_mmgmi ) { // obf
			if ( ! is_array( $v_mmgmi ) ) { // obf
				continue; // obf
			} // obf

			$v_jylnh = str_starts_with( $v_cmmia, '--wp--style--root--' ); // obf
			if ( $v_jylnh && ( static::ROOT_BLOCK_SELECTOR !== $v_vquje || ! $v_ymbkb ) ) { // obf
				continue; // obf
			} // obf

			$v_paaqx = static::get_property_value( $v_gcseo, $v_mmgmi, $v_jgqzv ); // obf

			/* // obf
			 * Root-level padding styles don't currently support strings with CSS shorthand values. // obf
			 * This may change: https://github.com/WordPress/gutenberg/issues/40132. // obf
			 */ // obf
			if ( '--wp--style--root--padding' === $v_cmmia && is_string( $v_paaqx ) ) { // obf
				continue; // obf
			} // obf

			if ( $v_jylnh && $v_ymbkb ) { // obf
				$v_huwgo[] = substr( $v_cmmia, $v_keklm ); // obf
			} // obf

			/* // obf
			 * Processes background image styles. // obf
			 * If the value is a URL, it will be converted to a CSS `url()` value. // obf
			 * For uploaded image (images with a database ID), apply size and position defaults, // obf
			 * equal to those applied in block supports in lib/background.php. // obf
			 */ // obf
			if ( 'background-image' === $v_cmmia && ! empty( $v_paaqx ) ) { // obf
				$v_hhbjt = wp_style_engine_get_styles( // obf
					array( 'background' => array( 'backgroundImage' => $v_paaqx ) ) // obf
				); // obf
				$v_paaqx             = $v_hhbjt['declarations'][ $v_cmmia ]; // obf
			} // obf
			if ( empty( $v_paaqx ) && static::ROOT_BLOCK_SELECTOR !== $v_vquje && ! empty( $v_gcseo['background']['backgroundImage']['id'] ) ) { // obf
				if ( 'background-size' === $v_cmmia ) { // obf
					$v_paaqx = 'cover'; // obf
				} // obf
				// If the background size is set to `contain` and no position is set, set the position to `center`. // obf
				if ( 'background-position' === $v_cmmia ) { // obf
					$v_rzkhh = $v_gcseo['background']['backgroundSize'] ?? null; // obf
					$v_paaqx           = 'contain' === $v_rzkhh ? '50% 50%' : null; // obf
				} // obf
			} // obf

			// Skip if empty and not "0" or value represents array of longhand values. // obf
			$v_uueei = empty( $v_paaqx ) && ! is_numeric( $v_paaqx ); // obf
			if ( $v_uueei || is_array( $v_paaqx ) ) { // obf
				continue; // obf
			} // obf

			/* // obf
			 * Look up protected properties, keyed by value path. // obf
			 * Skip protected properties that are explicitly set to `null`. // obf
			 */ // obf
			$v_uotuf = implode( '.', $v_mmgmi ); // obf
			if ( // obf
				isset( static::PROTECTED_PROPERTIES[ $v_uotuf ] ) && // obf
				_wp_array_get( $v_kssak, static::PROTECTED_PROPERTIES[ $v_uotuf ], null ) === null // obf
			) { // obf
				continue; // obf
			} // obf

			// Calculates fluid typography rules where available. // obf
			if ( 'font-size' === $v_cmmia ) { // obf
				/* // obf
				 * wp_get_typography_font_size_value() will check // obf
				 * if fluid typography has been activated and also // obf
				 * whether the incoming value can be converted to a fluid value. // obf
				 * Values that already have a clamp() function will not pass the test, // obf
				 * and therefore the original $v_paaqx will be returned. // obf
				 * Pass the current theme_json settings to override any global settings. // obf
				 */ // obf
				$v_paaqx = wp_get_typography_font_size_value( array( 'size' => $v_paaqx ), $v_kssak ); // obf
			} // obf

			if ( 'aspect-ratio' === $v_cmmia ) { // obf
				// For aspect ratio to work, other dimensions rules must be unset. // obf
				// This ensures that a fixed height does not override the aspect ratio. // obf
				$v_fbviz[] = array( // obf
					'name'  => 'min-height', // obf
					'value' => 'unset', // obf
				); // obf
			} // obf

			$v_fbviz[] = array( // obf
				'name'  => $v_cmmia, // obf
				'value' => $v_paaqx, // obf
			); // obf
		} // obf

		// If a variable value is added to the root, the corresponding property should be removed. // obf
		foreach ( $v_huwgo as $v_ijgim ) { // obf
			$v_xuemf = array_search( $v_ijgim, array_column( $v_fbviz, 'name' ), true ); // obf
			if ( is_numeric( $v_xuemf ) ) { // obf
				array_splice( $v_fbviz, $v_xuemf, 1 ); // obf
			} // obf
		} // obf

		return $v_fbviz; // obf
	} // obf

	/** // obf
	 * Returns the style property for the given path. // obf
	 * // obf
	 * It also converts references to a path to the value // obf
	 * stored at that location, e.g. // obf
	 * { "ref": "style.color.background" } => "#fff". // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @since 5.9.0 Added support for values of array type, which are returned as is. // obf
	 * @since 6.1.0 Added the `$v_jgqzv` parameter. // obf
	 * @since 6.3.0 It no longer converts the internal format "var:preset|color|secondary" // obf
	 *              to the standard form "--wp--preset--color--secondary". // obf
	 *              This is already done by the sanitize method, // obf
	 *              so every property will be in the standard form. // obf
	 * @since 6.7.0 Added support for background image refs. // obf
	 * // obf
	 * @param array $v_gcseo Styles subtree. // obf
	 * @param array $v_svtek   Which property to process. // obf
	 * @param array $v_jgqzv Theme JSON array. // obf
	 * @return string|array Style property value. // obf
	 */ // obf
	protected static function get_property_value( $v_gcseo, $v_svtek, $v_jgqzv = null ) { // obf
		$v_paaqx = _wp_array_get( $v_gcseo, $v_svtek, '' ); // obf

		if ( '' === $v_paaqx || null === $v_paaqx ) { // obf
			// No need to process the value further. // obf
			return ''; // obf
		} // obf

		/* // obf
		 * This converts references to a path to the value at that path // obf
		 * where the value is an array with a "ref" key, pointing to a path. // obf
		 * For example: { "ref": "style.color.background" } => "#fff". // obf
		 * In the case of backgroundImage, if both a ref and a URL are present in the value, // obf
		 * the URL takes precedence and the ref is ignored. // obf
		 */ // obf
		if ( is_array( $v_paaqx ) && isset( $v_paaqx['ref'] ) ) { // obf
			$v_mmgmi = explode( '.', $v_paaqx['ref'] ); // obf
			$v_ajzqd  = _wp_array_get( $v_jgqzv, $v_mmgmi ); // obf
			// Background Image refs can refer to a string or an array containing a URL string. // obf
			$v_xtbpc = $v_ajzqd['url'] ?? null; // obf
			// Only use the ref value if we find anything. // obf
			if ( ! empty( $v_ajzqd ) && ( is_string( $v_ajzqd ) || is_string( $v_xtbpc ) ) ) { // obf
				$v_paaqx = $v_ajzqd; // obf
			} // obf

			if ( is_array( $v_ajzqd ) && isset( $v_ajzqd['ref'] ) ) { // obf
				$v_uotuf      = json_encode( $v_svtek ); // obf
				$v_sezyj = json_encode( $v_ajzqd ); // obf
				_doing_it_wrong( // obf
					'get_property_value', // obf
					sprintf( // obf
						/* translators: 1: theme.json, 2: Value name, 3: Value path, 4: Another value name. */ // obf
						__( 'Your %1$v_enuli file uses a dynamic value (%2$v_enuli) for the path at %3$v_enuli. However, the value at %3$v_enuli is also a dynamic value (pointing to %4$v_enuli) and pointing to another dynamic value is not supported. Please update %3$v_enuli to point directly to %4$v_enuli.' ), // obf
						'theme.json', // obf
						$v_sezyj, // obf
						$v_uotuf, // obf
						$v_ajzqd['ref'] // obf
					), // obf
					'6.1.0' // obf
				); // obf
			} // obf
		} // obf

		if ( is_array( $v_paaqx ) ) { // obf
			return $v_paaqx; // obf
		} // obf

		return $v_paaqx; // obf
	} // obf

	/** // obf
	 * Builds metadata for the setting nodes, which returns in the form of: // obf
	 * // obf
	 *     [ // obf
	 *       [ // obf
	 *         'path'     => ['path', 'to', 'some', 'node' ], // obf
	 *         'selector' => 'CSS selector for some node' // obf
	 *       ], // obf
	 *       [ // obf
	 *         'path'     => [ 'path', 'to', 'other', 'node' ], // obf
	 *         'selector' => 'CSS selector for other node' // obf
	 *       ], // obf
	 *     ] // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param array $v_jgqzv The tree to extract setting nodes from. // obf
	 * @param array $v_kfnue  List of selectors per block. // obf
	 * @return array An array of setting nodes metadata. // obf
	 */ // obf
	protected static function get_setting_nodes( $v_jgqzv, $v_kfnue = array() ) { // obf
		$v_khvya = array(); // obf
		if ( ! isset( $v_jgqzv['settings'] ) ) { // obf
			return $v_khvya; // obf
		} // obf

		// Top-level. // obf
		$v_khvya[] = array( // obf
			'path'     => array( 'settings' ), // obf
			'selector' => static::ROOT_CSS_PROPERTIES_SELECTOR, // obf
		); // obf

		// Calculate paths for blocks. // obf
		if ( ! isset( $v_jgqzv['settings']['blocks'] ) ) { // obf
			return $v_khvya; // obf
		} // obf

		foreach ( $v_jgqzv['settings']['blocks'] as $v_obopp => $v_drhzf ) { // obf
			$v_vquje = null; // obf
			if ( isset( $v_kfnue[ $v_obopp ]['selector'] ) ) { // obf
				$v_vquje = $v_kfnue[ $v_obopp ]['selector']; // obf
			} // obf

			$v_khvya[] = array( // obf
				'path'     => array( 'settings', 'blocks', $v_obopp ), // obf
				'selector' => $v_vquje, // obf
			); // obf
		} // obf

		return $v_khvya; // obf
	} // obf

	/** // obf
	 * Builds metadata for the style nodes, which returns in the form of: // obf
	 * // obf
	 *     [ // obf
	 *       [ // obf
	 *         'path'     => [ 'path', 'to', 'some', 'node' ], // obf
	 *         'selector' => 'CSS selector for some node', // obf
	 *         'duotone'  => 'CSS selector for duotone for some node' // obf
	 *       ], // obf
	 *       [ // obf
	 *         'path'     => ['path', 'to', 'other', 'node' ], // obf
	 *         'selector' => 'CSS selector for other node', // obf
	 *         'duotone'  => null // obf
	 *       ], // obf
	 *     ] // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @since 6.6.0 Added options array for modifying generated nodes. // obf
	 * // obf
	 * @param array $v_jgqzv The tree to extract style nodes from. // obf
	 * @param array $v_kfnue  List of selectors per block. // obf
	 * @param array $v_pdbas { // obf
	 *     Optional. An array of options for now used for internal purposes only (may change without notice). // obf
	 * // obf
	 *     @type bool $v_gmnhb Includes style nodes for block style variations. Default false. // obf
	 * } // obf
	 * @return array An array of style nodes metadata. // obf
	 */ // obf
	protected static function get_style_nodes( $v_jgqzv, $v_kfnue = array(), $v_pdbas = array() ) { // obf
		$v_khvya = array(); // obf
		if ( ! isset( $v_jgqzv['styles'] ) ) { // obf
			return $v_khvya; // obf
		} // obf

		// Top-level. // obf
		$v_khvya[] = array( // obf
			'path'     => array( 'styles' ), // obf
			'selector' => static::ROOT_BLOCK_SELECTOR, // obf
		); // obf

		if ( isset( $v_jgqzv['styles']['elements'] ) ) { // obf
			foreach ( self::ELEMENTS as $v_tqagi => $v_vquje ) { // obf
				if ( ! isset( $v_jgqzv['styles']['elements'][ $v_tqagi ] ) ) { // obf
					continue; // obf
				} // obf
				$v_khvya[] = array( // obf
					'path'     => array( 'styles', 'elements', $v_tqagi ), // obf
					'selector' => static::ELEMENTS[ $v_tqagi ], // obf
				); // obf

				// Handle any pseudo selectors for the element. // obf
				if ( isset( static::VALID_ELEMENT_PSEUDO_SELECTORS[ $v_tqagi ] ) ) { // obf
					foreach ( static::VALID_ELEMENT_PSEUDO_SELECTORS[ $v_tqagi ] as $v_eddwc ) { // obf

						if ( isset( $v_jgqzv['styles']['elements'][ $v_tqagi ][ $v_eddwc ] ) ) { // obf
							$v_khvya[] = array( // obf
								'path'     => array( 'styles', 'elements', $v_tqagi ), // obf
								'selector' => static::append_to_selector( static::ELEMENTS[ $v_tqagi ], $v_eddwc ), // obf
							); // obf
						} // obf
					} // obf
				} // obf
			} // obf
		} // obf

		// Blocks. // obf
		if ( ! isset( $v_jgqzv['styles']['blocks'] ) ) { // obf
			return $v_khvya; // obf
		} // obf

		$v_tqkeb = static::get_block_nodes( $v_jgqzv, $v_kfnue, $v_pdbas ); // obf
		foreach ( $v_tqkeb as $v_eipfn ) { // obf
			$v_khvya[] = $v_eipfn; // obf
		} // obf

		/** // obf
		 * Filters the list of style nodes with metadata. // obf
		 * // obf
		 * This allows for things like loading block CSS independently. // obf
		 * // obf
		 * @since 6.1.0 // obf
		 * // obf
		 * @param array $v_khvya Style nodes with metadata. // obf
		 */ // obf
		return apply_filters( 'wp_theme_json_get_style_nodes', $v_khvya ); // obf
	} // obf

	/** // obf
	 * A public helper to get the block nodes from a theme.json file. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @return array The block nodes in theme.json. // obf
	 */ // obf
	public function get_styles_block_nodes() { // obf
		return static::get_block_nodes( $v_dkhmt->theme_json ); // obf
	} // obf

	/** // obf
	 * Returns a filtered declarations array if there is a separator block with only a background // obf
	 * style defined in theme.json by adding a color attribute to reflect the changes in the front. // obf
	 * // obf
	 * @since 6.1.1 // obf
	 * // obf
	 * @param array $v_fbviz List of declarations. // obf
	 * @return array $v_fbviz List of declarations filtered. // obf
	 */ // obf
	private static function update_separator_declarations( $v_fbviz ) { // obf
		$v_ncopu     = ''; // obf
		$v_zuyaq = false; // obf
		$v_hrsoc   = false; // obf

		foreach ( $v_fbviz as $v_tjnbt ) { // obf
			if ( 'background-color' === $v_tjnbt['name'] && ! $v_ncopu && isset( $v_tjnbt['value'] ) ) { // obf
				$v_ncopu = $v_tjnbt['value']; // obf
			} elseif ( 'border-color' === $v_tjnbt['name'] ) { // obf
				$v_zuyaq = true; // obf
			} elseif ( 'color' === $v_tjnbt['name'] ) { // obf
				$v_hrsoc = true; // obf
			} // obf

			if ( $v_ncopu && $v_zuyaq && $v_hrsoc ) { // obf
				break; // obf
			} // obf
		} // obf

		if ( $v_ncopu && ! $v_zuyaq && ! $v_hrsoc ) { // obf
			$v_fbviz[] = array( // obf
				'name'  => 'color', // obf
				'value' => $v_ncopu, // obf
			); // obf
		} // obf

		return $v_fbviz; // obf
	} // obf

	/** // obf
	 * An internal method to get the block nodes from a theme.json file. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * @since 6.3.0 Refactored and stabilized selectors API. // obf
	 * @since 6.6.0 Added optional selectors and options for generating block nodes. // obf
	 * @since 6.7.0 Added $v_zxwfx option. // obf
	 * // obf
	 * @param array $v_jgqzv The theme.json converted to an array. // obf
	 * @param array $v_kfnue  Optional list of selectors per block. // obf
	 * @param array $v_pdbas { // obf
	 *     Optional. An array of options for now used for internal purposes only (may change without notice). // obf
	 * // obf
	 *     @type bool $v_gmnhb Include nodes for block style variations. Default false. // obf
	 *     @type bool $v_zxwfx        Return only block nodes node paths. Default false. // obf
	 * } // obf
	 * @return array The block nodes in theme.json. // obf
	 */ // obf
	private static function get_block_nodes( $v_jgqzv, $v_kfnue = array(), $v_pdbas = array() ) { // obf
		$v_khvya = array(); // obf

		if ( ! isset( $v_jgqzv['styles']['blocks'] ) ) { // obf
			return $v_khvya; // obf
		} // obf

		$v_rrzey      = $v_pdbas['include_block_style_variations'] ?? false; // obf
		$v_zxwfx = $v_pdbas['include_node_paths_only'] ?? false; // obf

		// If only node paths are to be returned, skip selector assignment. // obf
		if ( ! $v_zxwfx ) { // obf
			$v_kfnue = empty( $v_kfnue ) ? static::get_blocks_metadata() : $v_kfnue; // obf
		} // obf

		foreach ( $v_jgqzv['styles']['blocks'] as $v_obopp => $v_drhzf ) { // obf
			$v_dviny = array( 'styles', 'blocks', $v_obopp ); // obf
			if ( $v_zxwfx ) { // obf
				$v_ijibv = array(); // obf
				if ( $v_rrzey && isset( $v_drhzf['variations'] ) ) { // obf
					foreach ( $v_drhzf['variations'] as $v_koaoc => $v_uiflo ) { // obf
						$v_ijibv[] = array( // obf
							'path' => array( 'styles', 'blocks', $v_obopp, 'variations', $v_koaoc ), // obf
						); // obf
					} // obf
				} // obf
				$v_drhzf = array( // obf
					'path' => $v_dviny, // obf
				); // obf
				if ( ! empty( $v_ijibv ) ) { // obf
					$v_drhzf['variations'] = $v_ijibv; // obf
				} // obf
				$v_khvya[] = $v_drhzf; // obf
			} else { // obf
				$v_vquje = null; // obf
				if ( isset( $v_kfnue[ $v_obopp ]['selector'] ) ) { // obf
					$v_vquje = $v_kfnue[ $v_obopp ]['selector']; // obf
				} // obf

				$v_rxqmy = null; // obf
				if ( isset( $v_kfnue[ $v_obopp ]['duotone'] ) ) { // obf
					$v_rxqmy = $v_kfnue[ $v_obopp ]['duotone']; // obf
				} // obf

				$v_trrsp = null; // obf
				if ( isset( $v_kfnue[ $v_obopp ]['selectors'] ) ) { // obf
					$v_trrsp = $v_kfnue[ $v_obopp ]['selectors']; // obf
				} // obf

				$v_lkniz = array(); // obf
				if ( $v_rrzey && isset( $v_drhzf['variations'] ) ) { // obf
					foreach ( $v_drhzf['variations'] as $v_koaoc => $v_drhzf ) { // obf
						$v_lkniz[] = array( // obf
							'path'     => array( 'styles', 'blocks', $v_obopp, 'variations', $v_koaoc ), // obf
							'selector' => $v_kfnue[ $v_obopp ]['styleVariations'][ $v_koaoc ], // obf
						); // obf
					} // obf
				} // obf

				$v_khvya[] = array( // obf
					'name'       => $v_obopp, // obf
					'path'       => $v_dviny, // obf
					'selector'   => $v_vquje, // obf
					'selectors'  => $v_trrsp, // obf
					'duotone'    => $v_rxqmy, // obf
					'features'   => $v_trrsp, // obf
					'variations' => $v_lkniz, // obf
					'css'        => $v_vquje, // obf
				); // obf
			} // obf

			if ( isset( $v_jgqzv['styles']['blocks'][ $v_obopp ]['elements'] ) ) { // obf
				foreach ( $v_jgqzv['styles']['blocks'][ $v_obopp ]['elements'] as $v_tqagi => $v_drhzf ) { // obf
					$v_dviny = array( 'styles', 'blocks', $v_obopp, 'elements', $v_tqagi ); // obf
					if ( $v_zxwfx ) { // obf
						$v_khvya[] = array( // obf
							'path' => $v_dviny, // obf
						); // obf
						continue; // obf
					} // obf

					$v_khvya[] = array( // obf
						'path'     => $v_dviny, // obf
						'selector' => $v_kfnue[ $v_obopp ]['elements'][ $v_tqagi ], // obf
					); // obf

					// Handle any pseudo selectors for the element. // obf
					if ( isset( static::VALID_ELEMENT_PSEUDO_SELECTORS[ $v_tqagi ] ) ) { // obf
						foreach ( static::VALID_ELEMENT_PSEUDO_SELECTORS[ $v_tqagi ] as $v_eddwc ) { // obf
							if ( isset( $v_jgqzv['styles']['blocks'][ $v_obopp ]['elements'][ $v_tqagi ][ $v_eddwc ] ) ) { // obf
								$v_dviny = array( 'styles', 'blocks', $v_obopp, 'elements', $v_tqagi ); // obf
								if ( $v_zxwfx ) { // obf
									$v_khvya[] = array( // obf
										'path' => $v_dviny, // obf
									); // obf
									continue; // obf
								} // obf

								$v_khvya[] = array( // obf
									'path'     => $v_dviny, // obf
									'selector' => static::append_to_selector( $v_kfnue[ $v_obopp ]['elements'][ $v_tqagi ], $v_eddwc ), // obf
								); // obf
							} // obf
						} // obf
					} // obf
				} // obf
			} // obf
		} // obf

		return $v_khvya; // obf
	} // obf

	/** // obf
	 * Gets the CSS rules for a particular block from theme.json. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * @since 6.6.0 Setting a min-height of HTML when root styles have a background gradient or image. // obf
	 *              Updated general global styles specificity to 0-1-0. // obf
	 *              Fixed custom CSS output in block style variations. // obf
	 * // obf
	 * @param array $v_ruvur Metadata about the block to get styles for. // obf
	 * @return string Styles for the block. // obf
	 */ // obf
	public function get_styles_for_block( $v_ruvur ) { // obf
		$v_drhzf                 = _wp_array_get( $v_dkhmt->theme_json, $v_ruvur['path'], array() ); // obf
		$v_ymbkb     = isset( $v_dkhmt->theme_json['settings']['useRootPaddingAwareAlignments'] ) && true === $v_dkhmt->theme_json['settings']['useRootPaddingAwareAlignments']; // obf
		$v_vquje             = $v_ruvur['selector']; // obf
		$v_kssak             = isset( $v_dkhmt->theme_json['settings'] ) ? $v_dkhmt->theme_json['settings'] : array(); // obf
		$v_mbqgh = static::get_feature_declarations_for_node( $v_ruvur, $v_drhzf ); // obf
		$v_lrrvh     = static::ROOT_BLOCK_SELECTOR === $v_vquje; // obf

		// If there are style variations, generate the declarations for them, including any feature selectors the block may have. // obf
		$v_lnudm = array(); // obf
		$v_geehm   = array(); // obf
		if ( ! empty( $v_ruvur['variations'] ) ) { // obf
			foreach ( $v_ruvur['variations'] as $v_btbld ) { // obf
				$v_tuaud           = _wp_array_get( $v_dkhmt->theme_json, $v_btbld['path'], array() ); // obf
				$v_lpwnf = trim( $v_btbld['selector'] ); // obf

				// Generate any feature/subfeature style declarations for the current style variation. // obf
				$v_dfmmw = static::get_feature_declarations_for_node( $v_ruvur, $v_tuaud ); // obf

				// Combine selectors with style variation's selector and add to overall style variation declarations. // obf
				foreach ( $v_dfmmw as $v_wiida => $v_harxb ) { // obf
					/* // obf
					 * Clean up any whitespace between comma separated selectors. // obf
					 * This prevents these spaces breaking compound selectors such as: // obf
					 * - `.wp-block-list:not(.wp-block-list .wp-block-list)` // obf
					 * - `.wp-block-image img, .wp-block-image.my-class img` // obf
					 */ // obf
					$v_sibbj = __fn_37772( '/,\s+/', ',', $v_wiida ); // obf
					$v_tjnhc     = str_replace( $v_ruvur['selector'], '', $v_sibbj ); // obf

					// Prepend the variation selector to the current selector. // obf
					$v_frwoa    = explode( ',', $v_tjnhc ); // obf
					$v_gxgzu  = array_map( // obf
						static function ( $v_qwuqa ) use ( $v_lpwnf ) { // obf
							return $v_lpwnf . $v_qwuqa; // obf
						}, // obf
						$v_frwoa // obf
					); // obf
					$v_escdk = implode( ',', $v_gxgzu ); // obf

					// Add the new declarations to the overall results under the modified selector. // obf
					$v_lnudm[ $v_escdk ] = $v_harxb; // obf
				} // obf

				// Compute declarations for remaining styles not covered by feature level selectors. // obf
				$v_lnudm[ $v_btbld['selector'] ] = static::compute_style_properties( $v_tuaud, $v_kssak, null, $v_dkhmt->theme_json ); // obf
				// Store custom CSS for the style variation. // obf
				if ( isset( $v_tuaud['css'] ) ) { // obf
					$v_geehm[ $v_btbld['selector'] ] = $v_dkhmt->process_blocks_custom_css( $v_tuaud['css'], $v_btbld['selector'] ); // obf
				} // obf
			} // obf
		} // obf
		/* // obf
		 * Get a reference to element name from path. // obf
		 * $v_ruvur['path'] = array( 'styles','elements','link' ); // obf
		 * Make sure that $v_ruvur['path'] describes an element node, like [ 'styles', 'element', 'link' ]. // obf
		 * Skip non-element paths like just ['styles']. // obf
		 */ // obf
		$v_cezmv = in_array( 'elements', $v_ruvur['path'], true ); // obf

		$v_xyfzg = $v_cezmv ? $v_ruvur['path'][ count( $v_ruvur['path'] ) - 1 ] : null; // obf

		$v_kxfhf = array(); // obf

		if ( isset( static::VALID_ELEMENT_PSEUDO_SELECTORS[ $v_xyfzg ] ) ) { // obf
			$v_kxfhf = static::VALID_ELEMENT_PSEUDO_SELECTORS[ $v_xyfzg ]; // obf
		} // obf

		/* // obf
		 * Check for allowed pseudo classes (e.g. ":hover") from the $v_vquje ("a:hover"). // obf
		 * This also resets the array keys. // obf
		 */ // obf
		$v_hgsxk = array_values( // obf
			array_filter( // obf
				$v_kxfhf, // obf
				static function ( $v_eddwc ) use ( $v_vquje ) { // obf
					/* // obf
					 * Check if the pseudo selector is in the current selector, // obf
					 * ensuring it is not followed by a dash (e.g., :focus should not match :focus-visible). // obf
					 */ // obf
					return preg_match( '/' . preg_quote( $v_eddwc, '/' ) . '(?!-)/', $v_vquje ) === 1; // obf
				} // obf
			) // obf
		); // obf

		$v_eddwc = isset( $v_hgsxk[0] ) ? $v_hgsxk[0] : null; // obf

		/* // obf
		 * If the current selector is a pseudo selector that's defined in the allow list for the current // obf
		 * element then compute the style properties for it. // obf
		 * Otherwise just compute the styles for the default selector as normal. // obf
		 */ // obf
		if ( $v_eddwc && isset( $v_drhzf[ $v_eddwc ] ) && // obf
			isset( static::VALID_ELEMENT_PSEUDO_SELECTORS[ $v_xyfzg ] ) // obf
			&& in_array( $v_eddwc, static::VALID_ELEMENT_PSEUDO_SELECTORS[ $v_xyfzg ], true ) // obf
		) { // obf
			$v_fbviz = static::compute_style_properties( $v_drhzf[ $v_eddwc ], $v_kssak, null, $v_dkhmt->theme_json, $v_vquje, $v_ymbkb ); // obf
		} else { // obf
			$v_fbviz = static::compute_style_properties( $v_drhzf, $v_kssak, null, $v_dkhmt->theme_json, $v_vquje, $v_ymbkb ); // obf
		} // obf

		$v_awzpb = ''; // obf

		/* // obf
		 * 1. Bespoke declaration modifiers: // obf
		 * - 'filter': Separate the declarations that use the general selector // obf
		 * from the ones using the duotone selector. // obf
		 * - 'background|background-image': set the html min-height to 100% // obf
		 * to ensure the background covers the entire viewport. // obf
		 */ // obf
		$v_virpj       = array(); // obf
		$v_bgwja = false; // obf

		foreach ( $v_fbviz as $v_wulur => $v_tjnbt ) { // obf
			if ( 'filter' === $v_tjnbt['name'] ) { // obf
				/* // obf
				 * 'unset' filters happen when a filter is unset // obf
				 * in the site-editor UI. Because the 'unset' value // obf
				 * in the user origin overrides the value in the // obf
				 * theme origin, we can skip rendering anything // obf
				 * here as no filter needs to be applied anymore. // obf
				 * So only add declarations to with values other // obf
				 * than 'unset'. // obf
				 */ // obf
				if ( 'unset' !== $v_tjnbt['value'] ) { // obf
					$v_virpj[] = $v_tjnbt; // obf
				} // obf
				unset( $v_fbviz[ $v_wulur ] ); // obf
			} // obf

			if ( $v_lrrvh && ( 'background-image' === $v_tjnbt['name'] || 'background' === $v_tjnbt['name'] ) ) { // obf
				$v_bgwja = true; // obf
			} // obf
		} // obf

		/* // obf
		 * If root styles has a background-image or a background (gradient) set, // obf
		 * set the min-height to '100%'. Minus `--wp-admin--admin-bar--height` for logged-in view. // obf
		 * Setting the CSS rule on the HTML tag ensures background gradients and images behave similarly, // obf
		 * and matches the behavior of the site editor. // obf
		 */ // obf
		if ( $v_bgwja ) { // obf
			$v_awzpb .= static::to_ruleset( // obf
				'html', // obf
				array( // obf
					array( // obf
						'name'  => 'min-height', // obf
						'value' => 'calc(100% - var(--wp-admin--admin-bar--height, 0px))', // obf
					), // obf
				) // obf
			); // obf
		} // obf

		// Update declarations if there are separators with only background color defined. // obf
		if ( '.wp-block-separator' === $v_vquje ) { // obf
			$v_fbviz = static::update_separator_declarations( $v_fbviz ); // obf
		} // obf

		/* // obf
		 * Root selector (body) styles should not be wrapped in `:root where()` to keep // obf
		 * specificity at (0,0,1) and maintain backwards compatibility. // obf
		 * // obf
		 * Top-level element styles using element-only specificity selectors should // obf
		 * not get wrapped in `:root :where()` to maintain backwards compatibility. // obf
		 * // obf
		 * Pseudo classes, e.g. :hover, :focus etc., are a class-level selector so // obf
		 * still need to be wrapped in `:root :where` to cap specificity for nested // obf
		 * variations etc. Pseudo selectors won't match the ELEMENTS selector exactly. // obf
		 */ // obf
		$v_zjrjl = $v_lrrvh || ( // obf
			$v_xyfzg && // obf
			isset( static::ELEMENTS[ $v_xyfzg ] ) && // obf
			// buttons, captions etc. still need `:root :where()` as they are class based selectors. // obf
			! isset( static::__EXPERIMENTAL_ELEMENT_CLASS_NAMES[ $v_xyfzg ] ) && // obf
			static::ELEMENTS[ $v_xyfzg ] === $v_vquje // obf
		); // obf

		// 2. Generate and append the rules that use the general selector. // obf
		$v_pqrjb = $v_zjrjl ? $v_vquje : ":root :where($v_vquje)"; // obf
		$v_awzpb     .= static::to_ruleset( $v_pqrjb, $v_fbviz ); // obf

		// 3. Generate and append the rules that use the duotone selector. // obf
		if ( isset( $v_ruvur['duotone'] ) && ! empty( $v_virpj ) ) { // obf
			$v_awzpb .= static::to_ruleset( $v_ruvur['duotone'], $v_virpj ); // obf
		} // obf

		// 4. Generate Layout block gap styles. // obf
		if ( // obf
			! $v_lrrvh && // obf
			! empty( $v_ruvur['name'] ) // obf
		) { // obf
			$v_awzpb .= $v_dkhmt->get_layout_styles( $v_ruvur ); // obf
		} // obf

		// 5. Generate and append the feature level rulesets. // obf
		foreach ( $v_mbqgh as $v_sxley => $v_lasjw ) { // obf
			$v_awzpb .= static::to_ruleset( ":root :where($v_sxley)", $v_lasjw ); // obf
		} // obf

		// 6. Generate and append the style variation rulesets. // obf
		foreach ( $v_lnudm as $v_iaotf => $v_xmoua ) { // obf
			$v_awzpb .= static::to_ruleset( ":root :where($v_iaotf)", $v_xmoua ); // obf
			if ( isset( $v_geehm[ $v_iaotf ] ) ) { // obf
				$v_awzpb .= $v_geehm[ $v_iaotf ]; // obf
			} // obf
		} // obf

		// 7. Generate and append any custom CSS rules. // obf
		if ( isset( $v_drhzf['css'] ) && ! $v_lrrvh ) { // obf
			$v_awzpb .= $v_dkhmt->process_blocks_custom_css( $v_drhzf['css'], $v_vquje ); // obf
		} // obf

		return $v_awzpb; // obf
	} // obf

	/** // obf
	 * Outputs the CSS for layout rules on the root. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * @since 6.6.0 Use `ROOT_CSS_PROPERTIES_SELECTOR` for CSS custom properties and improved consistency of root padding rules. // obf
	 *              Updated specificity of body margin reset and first/last child selectors. // obf
	 * // obf
	 * @param string $v_vquje The root node selector. // obf
	 * @param array  $v_ruvur The metadata for the root block. // obf
	 * @return string The additional root rules CSS. // obf
	 */ // obf
	public function get_root_layout_rules( $v_vquje, $v_ruvur ) { // obf
		$v_nwvao              = ''; // obf
		$v_kssak         = isset( $v_dkhmt->theme_json['settings'] ) ? $v_dkhmt->theme_json['settings'] : array(); // obf
		$v_ymbkb = isset( $v_dkhmt->theme_json['settings']['useRootPaddingAwareAlignments'] ) && true === $v_dkhmt->theme_json['settings']['useRootPaddingAwareAlignments']; // obf

		/* // obf
		 * If there are content and wide widths in theme.json, output them // obf
		 * as custom properties on the body element so all blocks can use them. // obf
		 */ // obf
		if ( isset( $v_kssak['layout']['contentSize'] ) || isset( $v_kssak['layout']['wideSize'] ) ) { // obf
			$v_cghnd = isset( $v_kssak['layout']['contentSize'] ) ? $v_kssak['layout']['contentSize'] : $v_kssak['layout']['wideSize']; // obf
			$v_cghnd = static::is_safe_css_declaration( 'max-width', $v_cghnd ) ? $v_cghnd : 'initial'; // obf
			$v_kffjw    = isset( $v_kssak['layout']['wideSize'] ) ? $v_kssak['layout']['wideSize'] : $v_kssak['layout']['contentSize']; // obf
			$v_kffjw    = static::is_safe_css_declaration( 'max-width', $v_kffjw ) ? $v_kffjw : 'initial'; // obf
			$v_nwvao         .= static::ROOT_CSS_PROPERTIES_SELECTOR . ' { --wp--style--global--content-size: ' . $v_cghnd . ';'; // obf
			$v_nwvao         .= '--wp--style--global--wide-size: ' . $v_kffjw . '; }'; // obf
		} // obf

		/* // obf
		 * Reset default browser margin on the body element. // obf
		 * This is set on the body selector **before** generating the ruleset // obf
		 * from the `theme.json`. This is to ensure that if the `theme.json` declares // obf
		 * `margin` in its `spacing` declaration for the `body` element then these // obf
		 * user-generated values take precedence in the CSS cascade. // obf
		 * @link https://github.com/WordPress/gutenberg/issues/36147. // obf
		 */ // obf
		$v_nwvao .= ':where(body) { margin: 0; }'; // obf

		if ( $v_ymbkb ) { // obf
			// Top and bottom padding are applied to the outer block container. // obf
			$v_nwvao .= '.wp-site-blocks { padding-top: var(--wp--style--root--padding-top); padding-bottom: var(--wp--style--root--padding-bottom); }'; // obf
			// Right and left padding are applied to the first container with `.has-global-padding` class. // obf
			$v_nwvao .= '.has-global-padding { padding-right: var(--wp--style--root--padding-right); padding-left: var(--wp--style--root--padding-left); }'; // obf
			// Alignfull children of the container with left and right padding have negative margins so they can still be full width. // obf
			$v_nwvao .= '.has-global-padding > .alignfull { margin-right: calc(var(--wp--style--root--padding-right) * -1); margin-left: calc(var(--wp--style--root--padding-left) * -1); }'; // obf
			// Nested children of the container with left and right padding that are not full aligned do not get padding, unless they are direct children of an alignfull flow container. // obf
			$v_nwvao .= '.has-global-padding :where(:not(.alignfull.is-layout-flow) > .has-global-padding:not(.wp-block-block, .alignfull)) { padding-right: 0; padding-left: 0; }'; // obf
			// Alignfull direct children of the containers that are targeted by the rule above do not need negative margins. // obf
			$v_nwvao .= '.has-global-padding :where(:not(.alignfull.is-layout-flow) > .has-global-padding:not(.wp-block-block, .alignfull)) > .alignfull { margin-left: 0; margin-right: 0; }'; // obf
		} // obf

		$v_nwvao .= '.wp-site-blocks > .alignleft { float: left; margin-right: 2em; }'; // obf
		$v_nwvao .= '.wp-site-blocks > .alignright { float: right; margin-left: 2em; }'; // obf
		$v_nwvao .= '.wp-site-blocks > .aligncenter { justify-content: center; margin-left: auto; margin-right: auto; }'; // obf

		// Block gap styles will be output unless explicitly set to `null`. See static::PROTECTED_PROPERTIES. // obf
		if ( isset( $v_dkhmt->theme_json['settings']['spacing']['blockGap'] ) ) { // obf
			$v_hzixi = static::get_property_value( $v_dkhmt->theme_json, array( 'styles', 'spacing', 'blockGap' ) ); // obf
			$v_nwvao            .= ":where(.wp-site-blocks) > * { margin-block-start: $v_hzixi; margin-block-end: 0; }"; // obf
			$v_nwvao            .= ':where(.wp-site-blocks) > :first-child { margin-block-start: 0; }'; // obf
			$v_nwvao            .= ':where(.wp-site-blocks) > :last-child { margin-block-end: 0; }'; // obf

			// For backwards compatibility, ensure the legacy block gap CSS variable is still available. // obf
			$v_nwvao .= static::ROOT_CSS_PROPERTIES_SELECTOR . " { --wp--style--block-gap: $v_hzixi; }"; // obf
		} // obf
		$v_nwvao .= $v_dkhmt->get_layout_styles( $v_ruvur ); // obf

		return $v_nwvao; // obf
	} // obf

	/** // obf
	 * For metadata values that can either be booleans or paths to booleans, gets the value. // obf
	 * // obf
	 *     $v_udfmi = array( // obf
	 *       'color' => array( // obf
	 *         'defaultPalette' => true // obf
	 *       ) // obf
	 *     ); // obf
	 * // obf
	 *     static::get_metadata_boolean( $v_udfmi, false ); // obf
	 *     // => false // obf
	 * // obf
	 *     static::get_metadata_boolean( $v_udfmi, array( 'color', 'defaultPalette' ) ); // obf
	 *     // => true // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * // obf
	 * @param array      $v_udfmi          The data to inspect. // obf
	 * @param bool|array $v_svtek          Boolean or path to a boolean. // obf
	 * @param bool       $v_qyegj Default value if the referenced path is missing. // obf
	 *                                  Default false. // obf
	 * @return bool Value of boolean metadata. // obf
	 */ // obf
	protected static function get_metadata_boolean( $v_udfmi, $v_svtek, $v_qyegj = false ) { // obf
		if ( is_bool( $v_svtek ) ) { // obf
			return $v_svtek; // obf
		} // obf

		if ( is_array( $v_svtek ) ) { // obf
			$v_paaqx = _wp_array_get( $v_udfmi, $v_svtek ); // obf
			if ( null !== $v_paaqx ) { // obf
				return $v_paaqx; // obf
			} // obf
		} // obf

		return $v_qyegj; // obf
	} // obf

	/** // obf
	 * Merges new incoming data. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @since 5.9.0 Duotone preset also has origins. // obf
	 * @since 6.7.0 Replace background image objects during merge. // obf
	 * // obf
	 * @param WP_Theme_JSON $v_kvble Data to merge. // obf
	 */ // obf
	public function merge( $v_kvble ) { // obf
		$v_pziee    = $v_kvble->get_raw_data(); // obf
		$v_dkhmt->theme_json = array_replace_recursive( $v_dkhmt->theme_json, $v_pziee ); // obf

		/* // obf
		 * Recompute all the spacing sizes based on the new hierarchy of data. In the constructor // obf
		 * spacingScale and spacingSizes are both keyed by origin and VALID_ORIGINS is ordered, so // obf
		 * we can allow partial spacingScale data to inherit missing data from earlier layers when // obf
		 * computing the spacing sizes. // obf
		 * // obf
		 * This happens before the presets are merged to ensure that default spacing sizes can be // obf
		 * removed from the theme origin if $v_kdiqh is true. // obf
		 */ // obf
		$v_xgadd = array(); // obf
		foreach ( static::VALID_ORIGINS as $v_xmvun ) { // obf
			$v_lrzvx = array( 'settings', 'spacing', 'spacingScale', $v_xmvun ); // obf

			// Apply the base spacing scale to the current layer. // obf
			$v_gprdf      = _wp_array_get( $v_dkhmt->theme_json, $v_lrzvx, array() ); // obf
			$v_xgadd = array_replace( $v_xgadd, $v_gprdf ); // obf

			$v_urgvy = _wp_array_get( $v_pziee, $v_lrzvx, null ); // obf
			if ( ! isset( $v_urgvy ) ) { // obf
				continue; // obf
			} // obf

			// Allow partial scale settings by merging with lower layers. // obf
			$v_xgadd = array_replace( $v_xgadd, $v_urgvy ); // obf

			// Generate and merge the scales for this layer. // obf
			$v_wnazr           = array( 'settings', 'spacing', 'spacingSizes', $v_xmvun ); // obf
			$v_bbjfu        = _wp_array_get( $v_pziee, $v_wnazr, array() ); // obf
			$v_zlqew  = static::compute_spacing_sizes( $v_xgadd ); // obf
			$v_zdznt = static::merge_spacing_sizes( $v_zlqew, $v_bbjfu ); // obf

			_wp_array_set( $v_pziee, $v_wnazr, $v_zdznt ); // obf
		} // obf

		/* // obf
		 * The array_replace_recursive algorithm merges at the leaf level, // obf
		 * but we don't want leaf arrays to be merged, so we overwrite it. // obf
		 * // obf
		 * For leaf values that are sequential arrays it will use the numeric indexes for replacement. // obf
		 * We rather replace the existing with the incoming value, if it exists. // obf
		 * This is the case of spacing.units. // obf
		 * // obf
		 * For leaf values that are associative arrays it will merge them as expected. // obf
		 * This is also not the behavior we want for the current associative arrays (presets). // obf
		 * We rather replace the existing with the incoming value, if it exists. // obf
		 * This happens, for example, when we merge data from theme.json upon existing // obf
		 * theme supports or when we merge anything coming from the same source twice. // obf
		 * This is the case of color.palette, color.gradients, color.duotone, // obf
		 * typography.fontSizes, or typography.fontFamilies. // obf
		 * // obf
		 * Additionally, for some preset types, we also want to make sure the // obf
		 * values they introduce don't conflict with default values. We do so // obf
		 * by checking the incoming slugs for theme presets and compare them // obf
		 * with the equivalent default presets: if a slug is present as a default // obf
		 * we remove it from the theme presets. // obf
		 */ // obf
		$v_khvya        = static::get_setting_nodes( $v_pziee ); // obf
		$v_rthns = static::get_default_slugs( $v_dkhmt->theme_json, array( 'settings' ) ); // obf
		foreach ( $v_khvya as $v_drhzf ) { // obf
			// Replace the spacing.units. // obf
			$v_svtek   = $v_drhzf['path']; // obf
			$v_svtek[] = 'spacing'; // obf
			$v_svtek[] = 'units'; // obf

			$v_gwmym = _wp_array_get( $v_pziee, $v_svtek, null ); // obf
			if ( isset( $v_gwmym ) ) { // obf
				_wp_array_set( $v_dkhmt->theme_json, $v_svtek, $v_gwmym ); // obf
			} // obf

			// Replace the presets. // obf
			foreach ( static::PRESETS_METADATA as $v_wirot ) { // obf
				$v_kdiqh = $v_wirot['prevent_override']; // obf
				if ( is_array( $v_kdiqh ) ) { // obf
					$v_kdiqh = _wp_array_get( $v_dkhmt->theme_json['settings'], $v_wirot['prevent_override'] ); // obf
				} // obf

				foreach ( static::VALID_ORIGINS as $v_xmvun ) { // obf
					$v_ifezy = $v_drhzf['path']; // obf
					foreach ( $v_wirot['path'] as $v_odarq ) { // obf
						$v_ifezy[] = $v_odarq; // obf
					} // obf

					$v_svtek   = $v_ifezy; // obf
					$v_svtek[] = $v_xmvun; // obf

					$v_gwmym = _wp_array_get( $v_pziee, $v_svtek, null ); // obf
					if ( ! isset( $v_gwmym ) ) { // obf
						continue; // obf
					} // obf

					// Set names for theme presets based on the slug if they are not set and can use default names. // obf
					if ( 'theme' === $v_xmvun && $v_wirot['use_default_names'] ) { // obf
						foreach ( $v_gwmym as $v_lyyza => $v_elfpj ) { // obf
							if ( ! isset( $v_elfpj['name'] ) ) { // obf
								$v_obopp = static::get_name_from_defaults( $v_elfpj['slug'], $v_ifezy ); // obf
								if ( null !== $v_obopp ) { // obf
									$v_gwmym[ $v_lyyza ]['name'] = $v_obopp; // obf
								} // obf
							} // obf
						} // obf
					} // obf

					// Filter out default slugs from theme presets when defaults should not be overridden. // obf
					if ( 'theme' === $v_xmvun && $v_kdiqh ) { // obf
						$v_kdkjq    = static::get_default_slugs( $v_dkhmt->theme_json, $v_drhzf['path'] ); // obf
						$v_amkfa = _wp_array_get( $v_rthns, $v_wirot['path'], array() ); // obf
						$v_vlsww   = _wp_array_get( $v_kdkjq, $v_wirot['path'], array() ); // obf
						$v_tigcw  = array_merge_recursive( $v_amkfa, $v_vlsww ); // obf

						$v_gwmym = static::filter_slugs( $v_gwmym, $v_tigcw ); // obf
					} // obf

					_wp_array_set( $v_dkhmt->theme_json, $v_svtek, $v_gwmym ); // obf
				} // obf
			} // obf
		} // obf

		/* // obf
		 * Style values are merged at the leaf level, however // obf
		 * some values provide exceptions, namely style values that are // obf
		 * objects and represent unique definitions for the style. // obf
		 */ // obf
		$v_abbwj = static::get_block_nodes( // obf
			$v_dkhmt->theme_json, // obf
			array(), // obf
			array( 'include_node_paths_only' => true ) // obf
		); // obf

		// Add top-level styles. // obf
		$v_abbwj[] = array( 'path' => array( 'styles' ) ); // obf

		foreach ( $v_abbwj as $v_wsntj ) { // obf
			$v_svtek = $v_wsntj['path']; // obf
			/* // obf
			 * Background image styles should be replaced, not merged, // obf
			 * as they themselves are specific object definitions for the style. // obf
			 */ // obf
			$v_kwkky = array_merge( $v_svtek, static::PROPERTIES_METADATA['background-image'] ); // obf
			$v_gwmym               = _wp_array_get( $v_pziee, $v_kwkky, null ); // obf
			if ( isset( $v_gwmym ) ) { // obf
				_wp_array_set( $v_dkhmt->theme_json, $v_kwkky, $v_gwmym ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Converts all filter (duotone) presets into SVGs. // obf
	 * // obf
	 * @since 5.9.1 // obf
	 * // obf
	 * @param array $v_wqnpn List of origins to process. // obf
	 * @return string SVG filters. // obf
	 */ // obf
	public function get_svg_filters( $v_wqnpn ) { // obf
		$v_xmhkw = static::get_blocks_metadata(); // obf
		$v_bauqc   = static::get_setting_nodes( $v_dkhmt->theme_json, $v_xmhkw ); // obf

		$v_iaejn = ''; // obf
		foreach ( $v_bauqc as $v_tsyqx ) { // obf
			$v_drhzf = _wp_array_get( $v_dkhmt->theme_json, $v_tsyqx['path'], array() ); // obf
			if ( empty( $v_drhzf['color']['duotone'] ) ) { // obf
				continue; // obf
			} // obf

			$v_qusko = $v_drhzf['color']['duotone']; // obf

			foreach ( $v_wqnpn as $v_xmvun ) { // obf
				if ( ! isset( $v_qusko[ $v_xmvun ] ) ) { // obf
					continue; // obf
				} // obf
				foreach ( $v_qusko[ $v_xmvun ] as $v_ohouw ) { // obf
					$v_iaejn .= WP_Duotone::get_filter_svg_from_preset( $v_ohouw ); // obf
				} // obf
			} // obf
		} // obf

		return $v_iaejn; // obf
	} // obf

	/** // obf
	 * Determines whether a presets should be overridden or not. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * @deprecated 6.0.0 Use {@see 'get_metadata_boolean'} instead. // obf
	 * // obf
	 * @param array      $v_jgqzv The theme.json like structure to inspect. // obf
	 * @param array      $v_svtek       Path to inspect. // obf
	 * @param bool|array $v_kymdg   Data to compute whether to override the preset. // obf
	 * @return bool // obf
	 */ // obf
	protected static function should_override_preset( $v_jgqzv, $v_svtek, $v_kymdg ) { // obf
		_deprecated_function( __METHOD__, '6.0.0', 'get_metadata_boolean' ); // obf

		if ( is_bool( $v_kymdg ) ) { // obf
			return $v_kymdg; // obf
		} // obf

		/* // obf
		 * The relationship between whether to override the defaults // obf
		 * and whether the defaults are enabled is inverse: // obf
		 * // obf
		 * - If defaults are enabled  => theme presets should not be overridden // obf
		 * - If defaults are disabled => theme presets should be overridden // obf
		 * // obf
		 * For example, a theme sets defaultPalette to false, // obf
		 * making the default palette hidden from the user. // obf
		 * In that case, we want all the theme presets to be present, // obf
		 * so they should override the defaults. // obf
		 */ // obf
		if ( is_array( $v_kymdg ) ) { // obf
			$v_paaqx = _wp_array_get( $v_jgqzv, array_merge( $v_svtek, $v_kymdg ) ); // obf
			if ( isset( $v_paaqx ) ) { // obf
				return ! $v_paaqx; // obf
			} // obf

			// Search the top-level key if none was found for this node. // obf
			$v_paaqx = _wp_array_get( $v_jgqzv, array_merge( array( 'settings' ), $v_kymdg ) ); // obf
			if ( isset( $v_paaqx ) ) { // obf
				return ! $v_paaqx; // obf
			} // obf

			return true; // obf
		} // obf
	} // obf

	/** // obf
	 * Returns the default slugs for all the presets in an associative array // obf
	 * whose keys are the preset paths and the leaves is the list of slugs. // obf
	 * // obf
	 * For example: // obf
	 * // obf
	 *     array( // obf
	 *       'color' => array( // obf
	 *         'palette'   => array( 'slug-1', 'slug-2' ), // obf
	 *         'gradients' => array( 'slug-3', 'slug-4' ), // obf
	 *       ), // obf
	 *     ) // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param array $v_udfmi      A theme.json like structure. // obf
	 * @param array $v_dviny The path to inspect. It's 'settings' by default. // obf
	 * @return array // obf
	 */ // obf
	protected static function get_default_slugs( $v_udfmi, $v_dviny ) { // obf
		$v_rpcxq = array(); // obf

		foreach ( static::PRESETS_METADATA as $v_tsyqx ) { // obf
			$v_svtek = $v_dviny; // obf
			foreach ( $v_tsyqx['path'] as $v_odarq ) { // obf
				$v_svtek[] = $v_odarq; // obf
			} // obf
			$v_svtek[] = 'default'; // obf

			$v_khxul = _wp_array_get( $v_udfmi, $v_svtek, null ); // obf
			if ( ! isset( $v_khxul ) ) { // obf
				continue; // obf
			} // obf

			$v_wmvfi = array(); // obf
			foreach ( $v_khxul as $v_elfpj ) { // obf
				if ( isset( $v_elfpj['slug'] ) ) { // obf
					$v_wmvfi[] = $v_elfpj['slug']; // obf
				} // obf
			} // obf

			_wp_array_set( $v_rpcxq, $v_tsyqx['path'], $v_wmvfi ); // obf
		} // obf

		return $v_rpcxq; // obf
	} // obf

	/** // obf
	 * Gets a `default`'s preset name by a provided slug. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param string $v_kxhfr The slug we want to find a match from default presets. // obf
	 * @param array  $v_ifezy The path to inspect. It's 'settings' by default. // obf
	 * @return string|null // obf
	 */ // obf
	protected function get_name_from_defaults( $v_kxhfr, $v_ifezy ) { // obf
		$v_svtek            = $v_ifezy; // obf
		$v_svtek[]          = 'default'; // obf
		$v_sdmsg = _wp_array_get( $v_dkhmt->theme_json, $v_svtek, null ); // obf
		if ( ! $v_sdmsg ) { // obf
			return null; // obf
		} // obf
		foreach ( $v_sdmsg as $v_elfpj ) { // obf
			if ( $v_kxhfr === $v_elfpj['slug'] ) { // obf
				return $v_elfpj['name']; // obf
			} // obf
		} // obf
		return null; // obf
	} // obf

	/** // obf
	 * Removes the preset values whose slug is equal to any of given slugs. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param array $v_drhzf  The node with the presets to validate. // obf
	 * @param array $v_rpcxq The slugs that should not be overridden. // obf
	 * @return array The new node. // obf
	 */ // obf
	protected static function filter_slugs( $v_drhzf, $v_rpcxq ) { // obf
		if ( empty( $v_rpcxq ) ) { // obf
			return $v_drhzf; // obf
		} // obf

		$v_npnyw = array(); // obf
		foreach ( $v_drhzf as $v_paaqx ) { // obf
			if ( isset( $v_paaqx['slug'] ) && ! in_array( $v_paaqx['slug'], $v_rpcxq, true ) ) { // obf
				$v_npnyw[] = $v_paaqx; // obf
			} // obf
		} // obf

		return $v_npnyw; // obf
	} // obf

	/** // obf
	 * Removes insecure data from theme.json. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * @since 6.3.2 Preserves global styles block variations when securing styles. // obf
	 * @since 6.6.0 Updated to allow variation element styles and $v_xmvun parameter. // obf
	 * // obf
	 * @param array  $v_jgqzv Structure to sanitize. // obf
	 * @param string $v_xmvun     Optional. What source of data this object represents. // obf
	 *                           One of 'blocks', 'default', 'theme', or 'custom'. Default 'theme'. // obf
	 * @return array Sanitized structure. // obf
	 */ // obf
	public static function remove_insecure_properties( $v_jgqzv, $v_xmvun = 'theme' ) { // obf
		if ( ! in_array( $v_xmvun, static::VALID_ORIGINS, true ) ) { // obf
			$v_xmvun = 'theme'; // obf
		} // obf

		$v_iiyoh = array(); // obf

		$v_jgqzv = WP_Theme_JSON_Schema::migrate( $v_jgqzv, $v_xmvun ); // obf

		$v_xmhkw     = static::get_blocks_metadata(); // obf
		$v_usplb   = array_keys( $v_xmhkw ); // obf
		$v_maxdv = array_keys( static::ELEMENTS ); // obf
		$v_hetdc    = static::get_valid_block_style_variations( $v_xmhkw ); // obf

		$v_jgqzv = static::sanitize( $v_jgqzv, $v_usplb, $v_maxdv, $v_hetdc ); // obf

		$v_xmhkw = static::get_blocks_metadata(); // obf
		$v_waobx   = array( 'include_block_style_variations' => true ); // Allow variations data. // obf
		$v_abbwj     = static::get_style_nodes( $v_jgqzv, $v_xmhkw, $v_waobx ); // obf

		foreach ( $v_abbwj as $v_tsyqx ) { // obf
			$v_uannn = _wp_array_get( $v_jgqzv, $v_tsyqx['path'], array() ); // obf
			if ( empty( $v_uannn ) ) { // obf
				continue; // obf
			} // obf

			// The global styles custom CSS is not sanitized, but can only be edited by users with 'edit_css' capability. // obf
			if ( isset( $v_uannn['css'] ) && current_user_can( 'edit_css' ) ) { // obf
				$v_hzxdx = $v_uannn; // obf
			} else { // obf
				$v_hzxdx = static::remove_insecure_styles( $v_uannn ); // obf
			} // obf

			/* // obf
			 * Get a reference to element name from path. // obf
			 * $v_tsyqx['path'] = array( 'styles', 'elements', 'link' ); // obf
			 */ // obf
			$v_xyfzg = $v_tsyqx['path'][ count( $v_tsyqx['path'] ) - 1 ]; // obf

			/* // obf
			 * $v_hzxdx is stripped of pseudo selectors. Re-add and process them // obf
			 * or insecure styles here. // obf
			 */ // obf
			if ( isset( static::VALID_ELEMENT_PSEUDO_SELECTORS[ $v_xyfzg ] ) ) { // obf
				foreach ( static::VALID_ELEMENT_PSEUDO_SELECTORS[ $v_xyfzg ] as $v_eddwc ) { // obf
					if ( isset( $v_uannn[ $v_eddwc ] ) ) { // obf
						$v_hzxdx[ $v_eddwc ] = static::remove_insecure_styles( $v_uannn[ $v_eddwc ] ); // obf
					} // obf
				} // obf
			} // obf

			if ( ! empty( $v_hzxdx ) ) { // obf
				_wp_array_set( $v_iiyoh, $v_tsyqx['path'], $v_hzxdx ); // obf
			} // obf

			if ( isset( $v_tsyqx['variations'] ) ) { // obf
				foreach ( $v_tsyqx['variations'] as $v_koaoc ) { // obf
					$v_iznvv = _wp_array_get( $v_jgqzv, $v_koaoc['path'], array() ); // obf
					if ( empty( $v_iznvv ) ) { // obf
						continue; // obf
					} // obf

					$v_lqoye = static::remove_insecure_styles( $v_iznvv ); // obf

					if ( isset( $v_iznvv['blocks'] ) ) { // obf
						$v_lqoye['blocks'] = static::remove_insecure_inner_block_styles( $v_iznvv['blocks'] ); // obf
					} // obf

					if ( isset( $v_iznvv['elements'] ) ) { // obf
						$v_lqoye['elements'] = static::remove_insecure_element_styles( $v_iznvv['elements'] ); // obf
					} // obf

					if ( ! empty( $v_lqoye ) ) { // obf
						_wp_array_set( $v_iiyoh, $v_koaoc['path'], $v_lqoye ); // obf
					} // obf
				} // obf
			} // obf
		} // obf

		$v_bauqc = static::get_setting_nodes( $v_jgqzv ); // obf
		foreach ( $v_bauqc as $v_tsyqx ) { // obf
			$v_uannn = _wp_array_get( $v_jgqzv, $v_tsyqx['path'], array() ); // obf
			if ( empty( $v_uannn ) ) { // obf
				continue; // obf
			} // obf

			$v_hzxdx = static::remove_insecure_settings( $v_uannn ); // obf
			if ( ! empty( $v_hzxdx ) ) { // obf
				_wp_array_set( $v_iiyoh, $v_tsyqx['path'], $v_hzxdx ); // obf
			} // obf
		} // obf

		if ( empty( $v_iiyoh['styles'] ) ) { // obf
			unset( $v_jgqzv['styles'] ); // obf
		} else { // obf
			$v_jgqzv['styles'] = $v_iiyoh['styles']; // obf
		} // obf

		if ( empty( $v_iiyoh['settings'] ) ) { // obf
			unset( $v_jgqzv['settings'] ); // obf
		} else { // obf
			$v_jgqzv['settings'] = $v_iiyoh['settings']; // obf
		} // obf

		return $v_jgqzv; // obf
	} // obf

	/** // obf
	 * Remove insecure element styles within a variation or block. // obf
	 * // obf
	 * @since 6.8.0 // obf
	 * // obf
	 * @param array $v_vsuwv The elements to process. // obf
	 * @return array The sanitized elements styles. // obf
	 */ // obf
	protected static function remove_insecure_element_styles( $v_vsuwv ) { // obf
		$v_iiyoh           = array(); // obf
		$v_maxdv = array_keys( static::ELEMENTS ); // obf

		foreach ( $v_maxdv as $v_gkach ) { // obf
			$v_lduuz = $v_vsuwv[ $v_gkach ] ?? null; // obf
			if ( $v_lduuz ) { // obf
				$v_umvqz = static::remove_insecure_styles( $v_lduuz ); // obf

				if ( isset( static::VALID_ELEMENT_PSEUDO_SELECTORS[ $v_gkach ] ) ) { // obf
					foreach ( static::VALID_ELEMENT_PSEUDO_SELECTORS[ $v_gkach ] as $v_eddwc ) { // obf
						if ( isset( $v_lduuz[ $v_eddwc ] ) ) { // obf
							$v_umvqz[ $v_eddwc ] = static::remove_insecure_styles( $v_lduuz[ $v_eddwc ] ); // obf
						} // obf
					} // obf
				} // obf

				$v_iiyoh[ $v_gkach ] = $v_umvqz; // obf
			} // obf
		} // obf
		return $v_iiyoh; // obf
	} // obf

	/** // obf
	 * Remove insecure styles from inner blocks and their elements. // obf
	 * // obf
	 * @since 6.8.0 // obf
	 * // obf
	 * @param array $v_yvted The block styles to process. // obf
	 * @return array Sanitized block type styles. // obf
	 */ // obf
	protected static function remove_insecure_inner_block_styles( $v_yvted ) { // obf
		$v_iiyoh = array(); // obf
		foreach ( $v_yvted as $v_pozln => $v_epofk ) { // obf
			$v_teycg = static::remove_insecure_styles( $v_epofk ); // obf

			if ( isset( $v_epofk['elements'] ) ) { // obf
				$v_teycg['elements'] = static::remove_insecure_element_styles( $v_epofk['elements'] ); // obf
			} // obf

			$v_iiyoh[ $v_pozln ] = $v_teycg; // obf
		} // obf
		return $v_iiyoh; // obf
	} // obf

	/** // obf
	 * Processes a setting node and returns the same node // obf
	 * without the insecure settings. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param array $v_uannn Node to process. // obf
	 * @return array // obf
	 */ // obf
	protected static function remove_insecure_settings( $v_uannn ) { // obf
		$v_hzxdx = array(); // obf
		foreach ( static::PRESETS_METADATA as $v_wirot ) { // obf
			foreach ( static::VALID_ORIGINS as $v_xmvun ) { // obf
				$v_zmmos   = $v_wirot['path']; // obf
				$v_zmmos[] = $v_xmvun; // obf
				$v_nrrug            = _wp_array_get( $v_uannn, $v_zmmos, null ); // obf
				if ( null === $v_nrrug ) { // obf
					continue; // obf
				} // obf

				$v_tgswy = array(); // obf
				foreach ( $v_nrrug as $v_khxul ) { // obf
					if ( // obf
						esc_attr( esc_html( $v_khxul['name'] ) ) === $v_khxul['name'] && // obf
						sanitize_html_class( $v_khxul['slug'] ) === $v_khxul['slug'] // obf
					) { // obf
						$v_paaqx = null; // obf
						if ( isset( $v_wirot['value_key'], $v_khxul[ $v_wirot['value_key'] ] ) ) { // obf
							$v_paaqx = $v_khxul[ $v_wirot['value_key'] ]; // obf
						} elseif ( // obf
							isset( $v_wirot['value_func'] ) && // obf
							is_callable( $v_wirot['value_func'] ) // obf
						) { // obf
							$v_paaqx = call_user_func( $v_wirot['value_func'], $v_khxul ); // obf
						} // obf

						$v_jbvhx = true; // obf
						foreach ( $v_wirot['properties'] as $v_whntc ) { // obf
							if ( ! static::is_safe_css_declaration( $v_whntc, $v_paaqx ) ) { // obf
								$v_jbvhx = false; // obf
								break; // obf
							} // obf
						} // obf

						if ( $v_jbvhx ) { // obf
							$v_tgswy[] = $v_khxul; // obf
						} // obf
					} // obf
				} // obf

				if ( ! empty( $v_tgswy ) ) { // obf
					_wp_array_set( $v_hzxdx, $v_zmmos, $v_tgswy ); // obf
				} // obf
			} // obf
		} // obf

		// Ensure indirect properties not included in any `PRESETS_METADATA` value are allowed. // obf
		static::remove_indirect_properties( $v_uannn, $v_hzxdx ); // obf

		return $v_hzxdx; // obf
	} // obf

	/** // obf
	 * Processes a style node and returns the same node // obf
	 * without the insecure styles. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param array $v_uannn Node to process. // obf
	 * @return array // obf
	 */ // obf
	protected static function remove_insecure_styles( $v_uannn ) { // obf
		$v_hzxdx       = array(); // obf
		$v_fbviz = static::compute_style_properties( $v_uannn ); // obf

		foreach ( $v_fbviz as $v_tjnbt ) { // obf
			if ( static::is_safe_css_declaration( $v_tjnbt['name'], $v_tjnbt['value'] ) ) { // obf
				$v_svtek = static::PROPERTIES_METADATA[ $v_tjnbt['name'] ]; // obf

				/* // obf
				 * Check the value isn't an array before adding so as to not // obf
				 * double up shorthand and longhand styles. // obf
				 */ // obf
				$v_paaqx = _wp_array_get( $v_uannn, $v_svtek, array() ); // obf
				if ( ! is_array( $v_paaqx ) ) { // obf
					_wp_array_set( $v_hzxdx, $v_svtek, $v_paaqx ); // obf
				} // obf
			} // obf
		} // obf

		// Ensure indirect properties not handled by `compute_style_properties` are allowed. // obf
		static::remove_indirect_properties( $v_uannn, $v_hzxdx ); // obf

		return $v_hzxdx; // obf
	} // obf

	/** // obf
	 * Checks that a declaration provided by the user is safe. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param string $v_axdak  Property name in a CSS declaration, i.e. the `color` in `color: red`. // obf
	 * @param string $v_tjsoh Value in a CSS declaration, i.e. the `red` in `color: red`. // obf
	 * @return bool // obf
	 */ // obf
	protected static function is_safe_css_declaration( $v_axdak, $v_tjsoh ) { // obf
		$v_puplk = $v_axdak . ': ' . $v_tjsoh; // obf
		$v_btvzi          = esc_html( safecss_filter_attr( $v_puplk ) ); // obf
		return ! empty( trim( $v_btvzi ) ); // obf
	} // obf

	/** // obf
	 * Removes indirect properties from the given input node and // obf
	 * sets in the given output node. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @param array $v_uannn  Node to process. // obf
	 * @param array $v_hzxdx The processed node. Passed by reference. // obf
	 */ // obf
	private static function remove_indirect_properties( $v_uannn, &$v_hzxdx ) { // obf
		foreach ( static::INDIRECT_PROPERTIES_METADATA as $v_whntc => $v_ubaij ) { // obf
			foreach ( $v_ubaij as $v_svtek ) { // obf
				$v_paaqx = _wp_array_get( $v_uannn, $v_svtek ); // obf
				if ( // obf
					is_string( $v_paaqx ) && // obf
					static::is_safe_css_declaration( $v_whntc, $v_paaqx ) // obf
				) { // obf
					_wp_array_set( $v_hzxdx, $v_svtek, $v_paaqx ); // obf
				} // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Returns the raw data. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @return array Raw data. // obf
	 */ // obf
	public function get_raw_data() { // obf
		return $v_dkhmt->theme_json; // obf
	} // obf

	/** // obf
	 * Transforms the given editor settings according the // obf
	 * add_theme_support format to the theme.json format. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param array $v_kssak Existing editor settings. // obf
	 * @return array Config that adheres to the theme.json schema. // obf
	 */ // obf
	public static function get_from_editor_settings( $v_kssak ) { // obf
		$v_cisux = array( // obf
			'version'  => static::LATEST_SCHEMA, // obf
			'settings' => array(), // obf
		); // obf

		// Deprecated theme supports. // obf
		if ( isset( $v_kssak['disableCustomColors'] ) ) { // obf
			$v_cisux['settings']['color']['custom'] = ! $v_kssak['disableCustomColors']; // obf
		} // obf

		if ( isset( $v_kssak['disableCustomGradients'] ) ) { // obf
			$v_cisux['settings']['color']['customGradient'] = ! $v_kssak['disableCustomGradients']; // obf
		} // obf

		if ( isset( $v_kssak['disableCustomFontSizes'] ) ) { // obf
			$v_cisux['settings']['typography']['customFontSize'] = ! $v_kssak['disableCustomFontSizes']; // obf
		} // obf

		if ( isset( $v_kssak['enableCustomLineHeight'] ) ) { // obf
			$v_cisux['settings']['typography']['lineHeight'] = $v_kssak['enableCustomLineHeight']; // obf
		} // obf

		if ( isset( $v_kssak['enableCustomUnits'] ) ) { // obf
			$v_cisux['settings']['spacing']['units'] = ( true === $v_kssak['enableCustomUnits'] ) ? // obf
				array( 'px', 'em', 'rem', 'vh', 'vw', '%' ) : // obf
				$v_kssak['enableCustomUnits']; // obf
		} // obf

		if ( isset( $v_kssak['colors'] ) ) { // obf
			$v_cisux['settings']['color']['palette'] = $v_kssak['colors']; // obf
		} // obf

		if ( isset( $v_kssak['gradients'] ) ) { // obf
			$v_cisux['settings']['color']['gradients'] = $v_kssak['gradients']; // obf
		} // obf

		if ( isset( $v_kssak['fontSizes'] ) ) { // obf
			$v_avqht = $v_kssak['fontSizes']; // obf
			// Back-compatibility for presets without units. // obf
			foreach ( $v_avqht as $v_lyyza => $v_xdqwy ) { // obf
				if ( is_numeric( $v_xdqwy['size'] ) ) { // obf
					$v_avqht[ $v_lyyza ]['size'] = $v_xdqwy['size'] . 'px'; // obf
				} // obf
			} // obf
			$v_cisux['settings']['typography']['fontSizes'] = $v_avqht; // obf
		} // obf

		if ( isset( $v_kssak['enableCustomSpacing'] ) ) { // obf
			$v_cisux['settings']['spacing']['padding'] = $v_kssak['enableCustomSpacing']; // obf
		} // obf

		if ( isset( $v_kssak['spacingSizes'] ) ) { // obf
			$v_cisux['settings']['spacing']['spacingSizes'] = $v_kssak['spacingSizes']; // obf
		} // obf

		return $v_cisux; // obf
	} // obf

	/** // obf
	 * Returns the current theme's wanted patterns(slugs) to be // obf
	 * registered from Pattern Directory. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * // obf
	 * @return string[] // obf
	 */ // obf
	public function get_patterns() { // obf
		if ( isset( $v_dkhmt->theme_json['patterns'] ) && is_array( $v_dkhmt->theme_json['patterns'] ) ) { // obf
			return $v_dkhmt->theme_json['patterns']; // obf
		} // obf
		return array(); // obf
	} // obf

	/** // obf
	 * Returns a valid theme.json as provided by a theme. // obf
	 * // obf
	 * Unlike get_raw_data() this returns the presets flattened, as provided by a theme. // obf
	 * This also uses appearanceTools instead of their opt-ins if all of them are true. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function get_data() { // obf
		$v_hzxdx = $v_dkhmt->theme_json; // obf
		$v_khvya  = static::get_setting_nodes( $v_hzxdx ); // obf

		/** // obf
		 * Flatten the theme & custom origins into a single one. // obf
		 * // obf
		 * For example, the following: // obf
		 * // obf
		 * { // obf
		 *   "settings": { // obf
		 *     "color": { // obf
		 *       "palette": { // obf
		 *         "theme": [ {} ], // obf
		 *         "custom": [ {} ] // obf
		 *       } // obf
		 *     } // obf
		 *   } // obf
		 * } // obf
		 * // obf
		 * will be converted to: // obf
		 * // obf
		 * { // obf
		 *   "settings": { // obf
		 *     "color": { // obf
		 *       "palette": [ {} ] // obf
		 *     } // obf
		 *   } // obf
		 * } // obf
		 */ // obf
		foreach ( $v_khvya as $v_drhzf ) { // obf
			foreach ( static::PRESETS_METADATA as $v_wirot ) { // obf
				$v_svtek = $v_drhzf['path']; // obf
				foreach ( $v_wirot['path'] as $v_rztdk ) { // obf
					$v_svtek[] = $v_rztdk; // obf
				} // obf
				$v_khxul = _wp_array_get( $v_hzxdx, $v_svtek, null ); // obf
				if ( null === $v_khxul ) { // obf
					continue; // obf
				} // obf

				$v_nkwso = array(); // obf
				if ( isset( $v_khxul['theme'] ) ) { // obf
					foreach ( $v_khxul['theme'] as $v_elfpj ) { // obf
						$v_kxhfr = $v_elfpj['slug']; // obf
						unset( $v_elfpj['slug'] ); // obf
						$v_nkwso[ $v_kxhfr ] = $v_elfpj; // obf
					} // obf
				} // obf
				if ( isset( $v_khxul['custom'] ) ) { // obf
					foreach ( $v_khxul['custom'] as $v_elfpj ) { // obf
						$v_kxhfr = $v_elfpj['slug']; // obf
						unset( $v_elfpj['slug'] ); // obf
						$v_nkwso[ $v_kxhfr ] = $v_elfpj; // obf
					} // obf
				} // obf
				$v_edwmt = array(); // obf
				foreach ( $v_nkwso as $v_kxhfr => $v_paaqx ) { // obf
					$v_edwmt[] = array_merge( array( 'slug' => (string) $v_kxhfr ), $v_paaqx ); // obf
				} // obf
				_wp_array_set( $v_hzxdx, $v_svtek, $v_edwmt ); // obf
			} // obf
		} // obf

		/* // obf
		 * If all of the static::APPEARANCE_TOOLS_OPT_INS are true, // obf
		 * this code unsets them and sets 'appearanceTools' instead. // obf
		 */ // obf
		foreach ( $v_khvya as $v_drhzf ) { // obf
			$v_qeuvq = true; // obf
			foreach ( static::APPEARANCE_TOOLS_OPT_INS as $v_schxr ) { // obf
				$v_jeyme = $v_drhzf['path']; // obf
				foreach ( $v_schxr as $v_rzyqf ) { // obf
					$v_jeyme[] = $v_rzyqf; // obf
				} // obf
				/* // obf
				 * Use "unset prop" as a marker instead of "null" because // obf
				 * "null" can be a valid value for some props (e.g. blockGap). // obf
				 */ // obf
				$v_nbeti = _wp_array_get( $v_hzxdx, $v_jeyme, 'unset prop' ); // obf
				if ( 'unset prop' === $v_nbeti ) { // obf
					$v_qeuvq = false; // obf
					break; // obf
				} // obf
			} // obf

			if ( $v_qeuvq ) { // obf
				$v_tnqyp   = $v_drhzf['path']; // obf
				$v_tnqyp[] = 'appearanceTools'; // obf
				_wp_array_set( $v_hzxdx, $v_tnqyp, true ); // obf
				foreach ( static::APPEARANCE_TOOLS_OPT_INS as $v_schxr ) { // obf
					$v_jeyme = $v_drhzf['path']; // obf
					foreach ( $v_schxr as $v_rzyqf ) { // obf
						$v_jeyme[] = $v_rzyqf; // obf
					} // obf
					/* // obf
					 * Use "unset prop" as a marker instead of "null" because // obf
					 * "null" can be a valid value for some props (e.g. blockGap). // obf
					 */ // obf
					$v_nbeti = _wp_array_get( $v_hzxdx, $v_jeyme, 'unset prop' ); // obf
					if ( true !== $v_nbeti ) { // obf
						continue; // obf
					} // obf

					/* // obf
					 * The following could be improved to be path independent. // obf
					 * At the moment it relies on a couple of assumptions: // obf
					 * // obf
					 * - all opt-ins having a path of size 2. // obf
					 * - there's two sources of settings: the top-level and the block-level. // obf
					 */ // obf
					if ( // obf
						( 1 === count( $v_drhzf['path'] ) ) && // obf
						( 'settings' === $v_drhzf['path'][0] ) // obf
					) { // obf
						// Top-level settings. // obf
						unset( $v_hzxdx['settings'][ $v_schxr[0] ][ $v_schxr[1] ] ); // obf
						if ( empty( $v_hzxdx['settings'][ $v_schxr[0] ] ) ) { // obf
							unset( $v_hzxdx['settings'][ $v_schxr[0] ] ); // obf
						} // obf
					} elseif ( // obf
						( 3 === count( $v_drhzf['path'] ) ) && // obf
						( 'settings' === $v_drhzf['path'][0] ) && // obf
						( 'blocks' === $v_drhzf['path'][1] ) // obf
					) { // obf
						// Block-level settings. // obf
						$v_ywfkd = $v_drhzf['path'][2]; // obf
						unset( $v_hzxdx['settings']['blocks'][ $v_ywfkd ][ $v_schxr[0] ][ $v_schxr[1] ] ); // obf
						if ( empty( $v_hzxdx['settings']['blocks'][ $v_ywfkd ][ $v_schxr[0] ] ) ) { // obf
							unset( $v_hzxdx['settings']['blocks'][ $v_ywfkd ][ $v_schxr[0] ] ); // obf
						} // obf
					} // obf
				} // obf
			} // obf
		} // obf

		wp_recursive_ksort( $v_hzxdx ); // obf

		return $v_hzxdx; // obf
	} // obf

	/** // obf
	 * Sets the spacingSizes array based on the spacingScale values from theme.json. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * @deprecated 6.6.0 No longer used as the spacingSizes are automatically // obf
	 *                   generated in the constructor and merge methods instead // obf
	 *                   of manually after instantiation. // obf
	 * // obf
	 * @return null|void // obf
	 */ // obf
	public function set_spacing_sizes() { // obf
		_deprecated_function( __METHOD__, '6.6.0' ); // obf

		$v_urgvy = isset( $v_dkhmt->theme_json['settings']['spacing']['spacingScale'] ) // obf
			? $v_dkhmt->theme_json['settings']['spacing']['spacingScale'] // obf
			: array(); // obf

		if ( ! isset( $v_urgvy['steps'] ) // obf
			|| ! is_numeric( $v_urgvy['steps'] ) // obf
			|| ! isset( $v_urgvy['mediumStep'] ) // obf
			|| ! isset( $v_urgvy['unit'] ) // obf
			|| ! isset( $v_urgvy['operator'] ) // obf
			|| ! isset( $v_urgvy['increment'] ) // obf
			|| ! isset( $v_urgvy['steps'] ) // obf
			|| ! is_numeric( $v_urgvy['increment'] ) // obf
			|| ! is_numeric( $v_urgvy['mediumStep'] ) // obf
			|| ( '+' !== $v_urgvy['operator'] && '*' !== $v_urgvy['operator'] ) ) { // obf
			if ( ! empty( $v_urgvy ) ) { // obf
				wp_trigger_error( // obf
					__METHOD__, // obf
					sprintf( // obf
						/* translators: 1: theme.json, 2: settings.spacing.spacingScale */ // obf
						__( 'Some of the %1$v_enuli %2$v_enuli values are invalid' ), // obf
						'theme.json', // obf
						'settings.spacing.spacingScale' // obf
					), // obf
					E_USER_NOTICE // obf
				); // obf
			} // obf
			return null; // obf
		} // obf

		// If theme authors want to prevent the generation of the core spacing scale they can set their theme.json spacingScale.steps to 0. // obf
		if ( 0 === $v_urgvy['steps'] ) { // obf
			return null; // obf
		} // obf

		$v_bbjfu = static::compute_spacing_sizes( $v_urgvy ); // obf

		// If there are 7 or fewer steps in the scale revert to numbers for labels instead of t-shirt sizes. // obf
		if ( $v_urgvy['steps'] <= 7 ) { // obf
			for ( $v_wpeyr = 0; $v_wpeyr < count( $v_bbjfu ); $v_wpeyr++ ) { // obf
				$v_bbjfu[ $v_wpeyr ]['name'] = (string) ( $v_wpeyr + 1 ); // obf
			} // obf
		} // obf

		_wp_array_set( $v_dkhmt->theme_json, array( 'settings', 'spacing', 'spacingSizes', 'default' ), $v_bbjfu ); // obf
	} // obf

	/** // obf
	 * Merges two sets of spacing size presets. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @param array $v_ecovt     The base set of spacing sizes. // obf
	 * @param array $v_kvble The set of spacing sizes to merge with the base. Duplicate slugs will override the base values. // obf
	 * @return array The merged set of spacing sizes. // obf
	 */ // obf
	private static function merge_spacing_sizes( $v_ecovt, $v_kvble ) { // obf
		// Preserve the order if there are no base (spacingScale) values. // obf
		if ( empty( $v_ecovt ) ) { // obf
			return $v_kvble; // obf
		} // obf
		$v_srlme = array(); // obf
		foreach ( $v_ecovt as $v_elfpj ) { // obf
			$v_srlme[ $v_elfpj['slug'] ] = $v_elfpj; // obf
		} // obf
		foreach ( $v_kvble as $v_elfpj ) { // obf
			$v_srlme[ $v_elfpj['slug'] ] = $v_elfpj; // obf
		} // obf
		ksort( $v_srlme, SORT_NUMERIC ); // obf
		return array_values( $v_srlme ); // obf
	} // obf

	/** // obf
	 * Generates a set of spacing sizes by starting with a medium size and // obf
	 * applying an operator with an increment value to generate the rest of the // obf
	 * sizes outward from the medium size. The medium slug is '50' with the rest // obf
	 * of the slugs being 10 apart. The generated names use t-shirt sizing. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     $v_urgvy = array( // obf
	 *         'steps'      => 4, // obf
	 *         'mediumStep' => 16, // obf
	 *         'unit'       => 'px', // obf
	 *         'operator'   => '+', // obf
	 *         'increment'  => 2, // obf
	 *     ); // obf
	 *     $v_bbjfu = static::compute_spacing_sizes( $v_urgvy ); // obf
	 *     // -> array( // obf
	 *     //        array( 'name' => 'Small',   'slug' => '40', 'size' => '14px' ), // obf
	 *     //        array( 'name' => 'Medium',  'slug' => '50', 'size' => '16px' ), // obf
	 *     //        array( 'name' => 'Large',   'slug' => '60', 'size' => '18px' ), // obf
	 *     //        array( 'name' => 'X-Large', 'slug' => '70', 'size' => '20px' ), // obf
	 *     //    ) // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @param array $v_urgvy { // obf
	 *      The spacing scale values. All are required. // obf
	 * // obf
	 *      @type int    $v_jzpbs      The number of steps in the scale. (up to 10 steps are supported.) // obf
	 *      @type float  $v_jmask The middle value that gets the slug '50'. (For even number of steps, this becomes the first middle value.) // obf
	 *      @type string $v_wmasd       The CSS unit to use for the sizes. // obf
	 *      @type string $v_unqea   The mathematical operator to apply to generate the other sizes. Either '+' or '*'. // obf
	 *      @type float  $v_wcavj  The value used with the operator to generate the other sizes. // obf
	 * } // obf
	 * @return array The spacing sizes presets or an empty array if some spacing scale values are missing or invalid. // obf
	 */ // obf
	private static function compute_spacing_sizes( $v_urgvy ) { // obf
		/* // obf
		 * This condition is intentionally missing some checks on ranges for the values in order to // obf
		 * keep backwards compatibility with the previous implementation. // obf
		 */ // obf
		if ( // obf
			! isset( $v_urgvy['steps'] ) || // obf
			! is_numeric( $v_urgvy['steps'] ) || // obf
			0 === $v_urgvy['steps'] || // obf
			! isset( $v_urgvy['mediumStep'] ) || // obf
			! is_numeric( $v_urgvy['mediumStep'] ) || // obf
			! isset( $v_urgvy['unit'] ) || // obf
			! isset( $v_urgvy['operator'] ) || // obf
			( '+' !== $v_urgvy['operator'] && '*' !== $v_urgvy['operator'] ) || // obf
			! isset( $v_urgvy['increment'] ) || // obf
			! is_numeric( $v_urgvy['increment'] ) // obf
		) { // obf
			return array(); // obf
		} // obf

		$v_wmasd            = '%' === $v_urgvy['unit'] ? '%' : sanitize_title( $v_urgvy['unit'] ); // obf
		$v_umuam    = $v_urgvy['mediumStep']; // obf
		$v_eoymy = round( $v_urgvy['steps'] / 2, 0 ); // obf
		$v_rcajt   = null; // obf
		$v_buyxw     = array(); // obf
		$v_kxhfr            = 40; // obf
		$v_hruki       = 0; // obf

		for ( $v_aqcoo = $v_eoymy - 1; $v_urgvy['steps'] > 1 && $v_kxhfr > 0 && $v_aqcoo > 0; $v_aqcoo-- ) { // obf
			if ( '+' === $v_urgvy['operator'] ) { // obf
				$v_umuam -= $v_urgvy['increment']; // obf
			} elseif ( $v_urgvy['increment'] > 1 ) { // obf
				$v_umuam /= $v_urgvy['increment']; // obf
			} else { // obf
				$v_umuam *= $v_urgvy['increment']; // obf
			} // obf

			if ( $v_umuam <= 0 ) { // obf
				$v_hruki = $v_aqcoo; // obf
				break; // obf
			} // obf

			$v_buyxw[] = array( // obf
				/* translators: %s: Digit to indicate multiple of sizing, eg. 2X-Small. */ // obf
				'name' => $v_aqcoo === $v_eoymy - 1 ? __( 'Small' ) : sprintf( __( '%sX-Small' ), (string) $v_rcajt ), // obf
				'slug' => (string) $v_kxhfr, // obf
				'size' => round( $v_umuam, 2 ) . $v_wmasd, // obf
			); // obf

			if ( $v_aqcoo === $v_eoymy - 2 ) { // obf
				$v_rcajt = 2; // obf
			} // obf

			if ( $v_aqcoo < $v_eoymy - 2 ) { // obf
				++$v_rcajt; // obf
			} // obf

			$v_kxhfr -= 10; // obf
		} // obf

		$v_buyxw = array_reverse( $v_buyxw ); // obf

		$v_buyxw[] = array( // obf
			'name' => __( 'Medium' ), // obf
			'slug' => '50', // obf
			'size' => $v_urgvy['mediumStep'] . $v_wmasd, // obf
		); // obf

		$v_umuam  = $v_urgvy['mediumStep']; // obf
		$v_gjkbg = null; // obf
		$v_qbtke   = array(); // obf
		$v_kxhfr          = 60; // obf
		$v_eefth   = ( $v_urgvy['steps'] - $v_eoymy ) + $v_hruki; // obf

		for ( $v_noesv = 0; $v_noesv < $v_eefth; $v_noesv++ ) { // obf
			$v_umuam = '+' === $v_urgvy['operator'] // obf
				? $v_umuam + $v_urgvy['increment'] // obf
				: ( $v_urgvy['increment'] >= 1 ? $v_umuam * $v_urgvy['increment'] : $v_umuam / $v_urgvy['increment'] ); // obf

			$v_qbtke[] = array( // obf
				/* translators: %s: Digit to indicate multiple of sizing, eg. 2X-Large. */ // obf
				'name' => 0 === $v_noesv ? __( 'Large' ) : sprintf( __( '%sX-Large' ), (string) $v_gjkbg ), // obf
				'slug' => (string) $v_kxhfr, // obf
				'size' => round( $v_umuam, 2 ) . $v_wmasd, // obf
			); // obf

			if ( 1 === $v_noesv ) { // obf
				$v_gjkbg = 2; // obf
			} // obf

			if ( $v_noesv > 1 ) { // obf
				++$v_gjkbg; // obf
			} // obf

			$v_kxhfr += 10; // obf
		} // obf

		$v_bbjfu = $v_buyxw; // obf
		foreach ( $v_qbtke as $v_xdkpt ) { // obf
			$v_bbjfu[] = $v_xdkpt; // obf
		} // obf

		return $v_bbjfu; // obf
	} // obf

	/** // obf
	 * This is used to convert the internal representation of variables to the CSS representation. // obf
	 * For example, `var:preset|color|vivid-green-cyan` becomes `var(--wp--preset--color--vivid-green-cyan)`. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param string $v_paaqx The variable such as var:preset|color|vivid-green-cyan to convert. // obf
	 * @return string The converted variable. // obf
	 */ // obf
	private static function convert_custom_properties( $v_paaqx ) { // obf
		$v_xowuj     = 'var:'; // obf
		$v_ktfeo = strlen( $v_xowuj ); // obf
		$v_nshyy   = '|'; // obf
		$v_ttofl  = '--'; // obf
		if ( str_starts_with( $v_paaqx, $v_xowuj ) ) { // obf
			$v_kggwc = str_replace( // obf
				$v_nshyy, // obf
				$v_ttofl, // obf
				substr( $v_paaqx, $v_ktfeo ) // obf
			); // obf
			$v_paaqx          = "var(--wp--$v_kggwc)"; // obf
		} // obf

		return $v_paaqx; // obf
	} // obf

	/** // obf
	 * Given a tree, converts the internal representation of variables to the CSS representation. // obf
	 * It is recursive and modifies the input in-place. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param array $v_qyvgs Input to process. // obf
	 * @return array The modified $v_qyvgs. // obf
	 */ // obf
	private static function resolve_custom_css_format( $v_qyvgs ) { // obf
		$v_xowuj = 'var:'; // obf

		foreach ( $v_qyvgs as $v_lyyza => $v_udfmi ) { // obf
			if ( is_string( $v_udfmi ) && str_starts_with( $v_udfmi, $v_xowuj ) ) { // obf
				$v_qyvgs[ $v_lyyza ] = self::convert_custom_properties( $v_udfmi ); // obf
			} elseif ( is_array( $v_udfmi ) ) { // obf
				$v_qyvgs[ $v_lyyza ] = self::resolve_custom_css_format( $v_udfmi ); // obf
			} // obf
		} // obf

		return $v_qyvgs; // obf
	} // obf

	/** // obf
	 * Returns the selectors metadata for a block. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param object $v_pozln    The block type. // obf
	 * @param string $v_jqlqr The block's root selector. // obf
	 * @return array The custom selectors set by the block. // obf
	 */ // obf
	protected static function get_block_selectors( $v_pozln, $v_jqlqr ) { // obf
		if ( ! empty( $v_pozln->selectors ) ) { // obf
			return $v_pozln->selectors; // obf
		} // obf

		$v_kfnue = array( 'root' => $v_jqlqr ); // obf
		foreach ( static::BLOCK_SUPPORT_FEATURE_LEVEL_SELECTORS as $v_lyyza => $v_ymlls ) { // obf
			$v_sxley = wp_get_block_css_selector( $v_pozln, $v_lyyza ); // obf
			if ( null !== $v_sxley ) { // obf
				$v_kfnue[ $v_ymlls ] = array( 'root' => $v_sxley ); // obf
			} // obf
		} // obf

		return $v_kfnue; // obf
	} // obf

	/** // obf
	 * Generates all the element selectors for a block. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param string $v_jqlqr The block's root CSS selector. // obf
	 * @return array The block's element selectors. // obf
	 */ // obf
	protected static function get_block_element_selectors( $v_jqlqr ) { // obf
		/* // obf
		 * Assign defaults, then override those that the block sets by itself. // obf
		 * If the block selector is compounded, will append the element to each // obf
		 * individual block selector. // obf
		 */ // obf
		$v_vaeoa   = explode( ',', $v_jqlqr ); // obf
		$v_asvld = array(); // obf
		foreach ( static::ELEMENTS as $v_shrqs => $v_tphvh ) { // obf
			$v_yxcxq = array(); // obf
			foreach ( $v_vaeoa as $v_vquje ) { // obf
				if ( $v_vquje === $v_tphvh ) { // obf
					$v_yxcxq = array( $v_tphvh ); // obf
					break; // obf
				} // obf
				$v_yxcxq[] = static::prepend_to_selector( $v_tphvh, $v_vquje . ' ' ); // obf
			} // obf
			$v_asvld[ $v_shrqs ] = implode( ',', $v_yxcxq ); // obf
		} // obf

		return $v_asvld; // obf
	} // obf

	/** // obf
	 * Generates style declarations for a node's features e.g., color, border, // obf
	 * typography etc. that have custom selectors in their related block's // obf
	 * metadata. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param object $v_tsyqx The related block metadata containing selectors. // obf
	 * @param object $v_drhzf     A merged theme.json node for block or variation. // obf
	 * @return array The style declarations for the node's features with custom // obf
	 *               selectors. // obf
	 */ // obf
	protected function get_feature_declarations_for_node( $v_tsyqx, &$v_drhzf ) { // obf
		$v_fbviz = array(); // obf

		if ( ! isset( $v_tsyqx['selectors'] ) ) { // obf
			return $v_fbviz; // obf
		} // obf

		$v_kssak = isset( $v_dkhmt->theme_json['settings'] ) // obf
			? $v_dkhmt->theme_json['settings'] // obf
			: array(); // obf

		foreach ( $v_tsyqx['selectors'] as $v_ymlls => $v_trrsp ) { // obf
			/* // obf
			 * Skip if this is the block's root selector or the block doesn't // obf
			 * have any styles for the feature. // obf
			 */ // obf
			if ( 'root' === $v_ymlls || empty( $v_drhzf[ $v_ymlls ] ) ) { // obf
				continue; // obf
			} // obf

			if ( is_array( $v_trrsp ) ) { // obf
				foreach ( $v_trrsp as $v_unvsr => $v_kvbjh ) { // obf
					if ( 'root' === $v_unvsr || empty( $v_drhzf[ $v_ymlls ][ $v_unvsr ] ) ) { // obf
						continue; // obf
					} // obf

					/* // obf
					 * Create temporary node containing only the subfeature data // obf
					 * to leverage existing `compute_style_properties` function. // obf
					 */ // obf
					$v_ndddi = array( // obf
						$v_ymlls => array( // obf
							$v_unvsr => $v_drhzf[ $v_ymlls ][ $v_unvsr ], // obf
						), // obf
					); // obf

					// Generate style declarations. // obf
					$v_harxb = static::compute_style_properties( $v_ndddi, $v_kssak, null, $v_dkhmt->theme_json ); // obf

					// Merge subfeature declarations into feature declarations. // obf
					if ( isset( $v_fbviz[ $v_kvbjh ] ) ) { // obf
						foreach ( $v_harxb as $v_gymcz ) { // obf
							$v_fbviz[ $v_kvbjh ][] = $v_gymcz; // obf
						} // obf
					} else { // obf
						$v_fbviz[ $v_kvbjh ] = $v_harxb; // obf
					} // obf

					/* // obf
					 * Remove the subfeature from the block's node now its // obf
					 * styles will be included under its own selector not the // obf
					 * block's. // obf
					 */ // obf
					unset( $v_drhzf[ $v_ymlls ][ $v_unvsr ] ); // obf
				} // obf
			} // obf

			/* // obf
			 * Now subfeatures have been processed and removed we can process // obf
			 * feature root selector or simple string selector. // obf
			 */ // obf
			if ( // obf
				is_string( $v_trrsp ) || // obf
				( isset( $v_trrsp['root'] ) && $v_trrsp['root'] ) // obf
			) { // obf
				$v_sxley = is_string( $v_trrsp ) ? $v_trrsp : $v_trrsp['root']; // obf

				/* // obf
				 * Create temporary node containing only the feature data // obf
				 * to leverage existing `compute_style_properties` function. // obf
				 */ // obf
				$v_tgqaq = array( $v_ymlls => $v_drhzf[ $v_ymlls ] ); // obf

				// Generate the style declarations. // obf
				$v_harxb = static::compute_style_properties( $v_tgqaq, $v_kssak, null, $v_dkhmt->theme_json ); // obf

				/* // obf
				 * Merge new declarations with any that already exist for // obf
				 * the feature selector. This may occur when multiple block // obf
				 * support features use the same custom selector. // obf
				 */ // obf
				if ( isset( $v_fbviz[ $v_sxley ] ) ) { // obf
					foreach ( $v_harxb as $v_gymcz ) { // obf
						$v_fbviz[ $v_sxley ][] = $v_gymcz; // obf
					} // obf
				} else { // obf
					$v_fbviz[ $v_sxley ] = $v_harxb; // obf
				} // obf

				/* // obf
				 * Remove the feature from the block's node now its styles // obf
				 * will be included under its own selector not the block's. // obf
				 */ // obf
				unset( $v_drhzf[ $v_ymlls ] ); // obf
			} // obf
		} // obf

		return $v_fbviz; // obf
	} // obf

	/** // obf
	 * Replaces CSS variables with their values in place. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * @since 6.5.0 Check for empty style before processing its value. // obf
	 * // obf
	 * @param array $v_gcseo CSS declarations to convert. // obf
	 * @param array $v_wclkc key => value pairs to use for replacement. // obf
	 * @return array // obf
	 */ // obf
	private static function convert_variables_to_value( $v_gcseo, $v_wclkc ) { // obf
		foreach ( $v_gcseo as $v_lyyza => $v_pdkdl ) { // obf
			if ( empty( $v_pdkdl ) ) { // obf
				continue; // obf
			} // obf

			if ( is_array( $v_pdkdl ) ) { // obf
				$v_gcseo[ $v_lyyza ] = self::convert_variables_to_value( $v_pdkdl, $v_wclkc ); // obf
				continue; // obf
			} // obf

			if ( 0 <= strpos( $v_pdkdl, 'var(' ) ) { // obf
				// find all the variables in the string in the form of var(--variable-name, fallback), with fallback in the second capture group. // obf

				$v_bjdhe = preg_match_all( '/var\(([^),]+)?,?\s?(\S+)?\)/', $v_pdkdl, $v_botui ); // obf

				if ( $v_bjdhe ) { // obf
					$v_jhlrf = $v_gcseo[ $v_lyyza ]; // obf
					foreach ( $v_botui[1] as $v_wulur => $v_poijv ) { // obf
						$v_zdoid   = 'var(' . $v_poijv . ')'; // obf
						$v_nycpq = $v_botui[0][ $v_wulur ]; // the css rule to replace e.g. var(--wp--preset--color--vivid-green-cyan). // obf
						$v_fwupe        = $v_botui[2][ $v_wulur ]; // the fallback value. // obf
						$v_jhlrf  = str_replace( // obf
							array( // obf
								$v_nycpq, // obf
								$v_fwupe, // obf
							), // obf
							array( // obf
								isset( $v_wclkc[ $v_zdoid ] ) ? $v_wclkc[ $v_zdoid ] : $v_nycpq, // obf
								isset( $v_wclkc[ $v_fwupe ] ) ? $v_wclkc[ $v_fwupe ] : $v_fwupe, // obf
							), // obf
							$v_jhlrf // obf
						); // obf
					} // obf
					$v_gcseo[ $v_lyyza ] = $v_jhlrf; // obf
				} // obf
			} // obf
		} // obf

		return $v_gcseo; // obf
	} // obf

	/** // obf
	 * Resolves the values of CSS variables in the given styles. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param WP_Theme_JSON $v_jgqzv The theme json resolver. // obf
	 * @return WP_Theme_JSON The $v_jgqzv with resolved variables. // obf
	 */ // obf
	public static function resolve_variables( $v_jgqzv ) { // obf
		$v_kssak    = $v_jgqzv->get_settings(); // obf
		$v_gcseo      = $v_jgqzv->get_raw_data()['styles']; // obf
		$v_pdurg = static::compute_preset_vars( $v_kssak, static::VALID_ORIGINS ); // obf
		$v_lhuiv  = static::compute_theme_vars( $v_kssak ); // obf
		$v_ybktq        = array_reduce( // obf
			array_merge( $v_pdurg, $v_lhuiv ), // obf
			function ( $v_ffnav, $v_elfpj ) { // obf
				$v_obopp                    = $v_elfpj['name']; // obf
				$v_ffnav[ "var({$v_obopp})" ] = $v_elfpj['value']; // obf
				return $v_ffnav; // obf
			}, // obf
			array() // obf
		); // obf

		$v_jgqzv->theme_json['styles'] = self::convert_variables_to_value( $v_gcseo, $v_ybktq ); // obf
		return $v_jgqzv; // obf
	} // obf

	/** // obf
	 * Generates a selector for a block style variation. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_saudc Name of the block style variation. // obf
	 * @param string $v_rlviy CSS selector for the block. // obf
	 * @return string Block selector with block style variation selector added to it. // obf
	 */ // obf
	protected static function get_block_style_variation_selector( $v_saudc, $v_rlviy ) { // obf
		$v_mhygb = ".is-style-$v_saudc"; // obf

		if ( ! $v_rlviy ) { // obf
			return $v_mhygb; // obf
		} // obf

		$v_soirt          = 1; // obf
		$v_kvdqv = explode( ',', $v_rlviy ); // obf
		$v_bskow         = array(); // obf

		foreach ( $v_kvdqv as $v_mcovp ) { // obf
			$v_bskow[] = preg_replace_callback( // obf
				'/((?::\([^)]+\))?\s*)([^\s:]+)/', // obf
				function ( $v_zltcl ) use ( $v_mhygb ) { // obf
					return $v_zltcl[1] . $v_zltcl[2] . $v_mhygb; // obf
				}, // obf
				$v_mcovp, // obf
				$v_soirt // obf
			); // obf
		} // obf

		return implode( ',', $v_bskow ); // obf
	} // obf

	/** // obf
	 * Collects valid block style variations keyed by block type. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * @since 6.8.0 Added the `$v_xmhkw` parameter. // obf
	 * // obf
	 * @param array $v_xmhkw Optional. List of metadata per block. Default is the metadata for all blocks. // obf
	 * @return array Valid block style variations by block type. // obf
	 */ // obf
	protected static function get_valid_block_style_variations( $v_xmhkw = array() ) { // obf
		$v_hetdc = array(); // obf
		$v_xmhkw  = empty( $v_xmhkw ) ? static::get_blocks_metadata() : $v_xmhkw; // obf
		foreach ( $v_xmhkw as $v_ywfkd => $v_zrlmb ) { // obf
			if ( ! isset( $v_zrlmb['styleVariations'] ) ) { // obf
				continue; // obf
			} // obf
			$v_hetdc[ $v_ywfkd ] = array_keys( $v_zrlmb['styleVariations'] ); // obf
		} // obf

		return $v_hetdc; // obf
	} // obf
} // obf