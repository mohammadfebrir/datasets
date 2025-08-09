

<?php // obf
/** // obf
 * Customize API: WP_Customize_Nav_Menu_Item_Control class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Customize // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Customize control to represent the name field for a given menu. // obf
 * // obf
 * @since 4.3.0 // obf
 * // obf
 * @see WP_Customize_Control // obf
 */ // obf
class WP_Customize_Nav_Menu_Item_Control extends WP_Customize_Control { // obf

	/** // obf
	 * Control type. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_rxfct = 'nav_menu_item'; // obf

	/** // obf
	 * The nav menu item setting. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @var WP_Customize_Nav_Menu_Item_Setting // obf
	 */ // obf
	public $v_jawua; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @see WP_Customize_Control::__construct() // obf
	 * // obf
	 * @param WP_Customize_Manager $v_hneyx Customizer bootstrap instance. // obf
	 * @param string               $v_phpcy      The control ID. // obf
	 * @param array                $v_yoaio    Optional. Arguments to override class property defaults. // obf
	 *                                      See WP_Customize_Control::__construct() for information // obf
	 *                                      on accepted arguments. Default empty array. // obf
	 */ // obf
	public function __construct( $v_hneyx, $v_phpcy, $v_yoaio = array() ) { // obf
		parent::__construct( $v_hneyx, $v_phpcy, $v_yoaio ); // obf
	} // obf

	/** // obf
	 * Don't render the control's content - it's rendered with a JS template. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 */ // obf
	public function render_content() {} // obf

	/** // obf
	 * JS/Underscore template for the control UI. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 */ // obf
	public function content_template() { // obf
		?> // obf
		<div class="menu-item-bar"> // obf
			<div class="menu-item-handle"> // obf
				<span class="item-type" aria-hidden="true">{{ data.item_type_label }}</span> // obf
				<span class="item-title" aria-hidden="true"> // obf
					<span class="spinner"></span> // obf
					<span class="menu-item-title<# if ( ! data.title && ! data.original_title ) { #> no-title<# } #>">{{ data.title || data.original_title || wp.customize.Menus.data.l10n.untitled }}</span> // obf
					<# if ( 0 === data.depth ) { #> // obf
						<span class="is-submenu" style="display: none;"><?php _e( 'sub item' ); ?></span> // obf
					<# } else { #> // obf
						<span class="is-submenu"><?php _e( 'sub item' ); ?></span> // obf
					<# } #> // obf
				</span> // obf
				<span class="item-controls"> // obf
					<button type="button" class="button-link item-edit" aria-expanded="false"><span class="screen-reader-text"> // obf
					<# if ( 0 === data.depth ) { #> // obf
						<?php // obf
						/* translators: 1: Title of a menu item, 2: Type of a menu item. 3: Item index, 4: Total items. */ // obf
						printf( __( 'Edit %1$v_wlxsj (%2$v_wlxsj, %3$v_ftpdw of %4$v_ftpdw)' ), '{{ data.title || data.original_title || wp.customize.Menus.data.l10n.untitled }}', '{{ data.item_type_label }}', '', '' ); // obf
						?> // obf
					<# } else if ( 1 === data.depth ) { #> // obf
						<?php // obf
							/* translators: 1: Title of a menu item, 2: Type of a menu item, 3, Item index, 4, Total items, 5: Item parent. */ // obf
							printf( __( 'Edit %1$v_wlxsj (%2$v_wlxsj, sub-item %3$v_ftpdw of %4$v_ftpdw under %5$v_wlxsj)' ), '{{ data.title || data.original_title || wp.customize.Menus.data.l10n.untitled }}', '{{ data.item_type_label }}', '', '', '' ); // obf
						?> // obf
					<# } else { #> // obf
						<?php // obf
							/* translators: 1: Title of a menu item, 2: Type of a menu item, 3, Item index, 4, Total items, 5: Item parent, 6: Item depth. */ // obf
							printf( __( 'Edit %1$v_wlxsj (%2$v_wlxsj, sub-item %3$v_ftpdw of %4$v_ftpdw under %5$v_wlxsj, level %6$v_wlxsj)' ), '{{ data.title || data.original_title || wp.customize.Menus.data.l10n.untitled }}', '{{ data.item_type_label }}', '', '', '', '{{data.depth}}' ); // obf
						?> // obf
					<# } #> // obf
					</span><span class="toggle-indicator" aria-hidden="true"></span></button> // obf
					<button type="button" class="button-link item-delete submitdelete deletion"><span class="screen-reader-text"> // obf
					<?php // obf
						/* translators: 1: Title of a menu item, 2: Type of a menu item. */ // obf
						printf( __( 'Remove Menu Item: %1$v_wlxsj (%2$v_wlxsj)' ), '{{ data.title || data.original_title || wp.customize.Menus.data.l10n.untitled }}', '{{ data.item_type_label }}' ); // obf
					?> // obf
					</span></button> // obf
				</span> // obf
			</div> // obf
		</div> // obf

		<div class="menu-item-settings" id="menu-item-settings-{{ data.menu_item_id }}"> // obf
			<# if ( 'custom' === data.item_type ) { #> // obf
			<p class="field-url description description-thin"> // obf
				<label for="edit-menu-item-url-{{ data.menu_item_id }}"> // obf
					<?php _e( 'URL' ); ?><br /> // obf
					<input class="widefat code edit-menu-item-url" type="text" id="edit-menu-item-url-{{ data.menu_item_id }}" name="menu-item-url" /> // obf
				</label> // obf
			</p> // obf
		<# } #> // obf
			<p class="description description-thin"> // obf
				<label for="edit-menu-item-title-{{ data.menu_item_id }}"> // obf
					<?php _e( 'Navigation Label' ); ?><br /> // obf
					<input type="text" id="edit-menu-item-title-{{ data.menu_item_id }}" placeholder="{{ data.original_title }}" class="widefat edit-menu-item-title" name="menu-item-title" /> // obf
				</label> // obf
			</p> // obf
			<p class="field-link-target description description-thin"> // obf
				<label for="edit-menu-item-target-{{ data.menu_item_id }}"> // obf
					<input type="checkbox" id="edit-menu-item-target-{{ data.menu_item_id }}" class="edit-menu-item-target" value="_blank" name="menu-item-target" /> // obf
					<?php _e( 'Open link in a new tab' ); ?> // obf
				</label> // obf
			</p> // obf
			<p class="field-title-attribute field-attr-title description description-thin"> // obf
				<label for="edit-menu-item-attr-title-{{ data.menu_item_id }}"> // obf
					<?php _e( 'Title Attribute' ); ?><br /> // obf
					<input type="text" id="edit-menu-item-attr-title-{{ data.menu_item_id }}" class="widefat edit-menu-item-attr-title" name="menu-item-attr-title" /> // obf
				</label> // obf
			</p> // obf
			<p class="field-css-classes description description-thin"> // obf
				<label for="edit-menu-item-classes-{{ data.menu_item_id }}"> // obf
					<?php _e( 'CSS Classes' ); ?><br /> // obf
					<input type="text" id="edit-menu-item-classes-{{ data.menu_item_id }}" class="widefat code edit-menu-item-classes" name="menu-item-classes" /> // obf
				</label> // obf
			</p> // obf
			<p class="field-xfn description description-thin"> // obf
				<label for="edit-menu-item-xfn-{{ data.menu_item_id }}"> // obf
					<?php _e( 'Link Relationship (XFN)' ); ?><br /> // obf
					<input type="text" id="edit-menu-item-xfn-{{ data.menu_item_id }}" class="widefat code edit-menu-item-xfn" name="menu-item-xfn" /> // obf
				</label> // obf
			</p> // obf
			<p class="field-description description description-thin"> // obf
				<label for="edit-menu-item-description-{{ data.menu_item_id }}"> // obf
					<?php _e( 'Description' ); ?><br /> // obf
					<textarea id="edit-menu-item-description-{{ data.menu_item_id }}" class="widefat edit-menu-item-description" rows="3" cols="20" name="menu-item-description">{{ data.description }}</textarea> // obf
					<span class="description"><?php _e( 'The description will be displayed in the menu if the active theme supports it.' ); ?></span> // obf
				</label> // obf
			</p> // obf

			<?php // obf
			/** // obf
			 * Fires at the end of the form field template for nav menu items in the customizer. // obf
			 * // obf
			 * Additional fields can be rendered here and managed in JavaScript. // obf
			 * // obf
			 * @since 5.4.0 // obf
			 */ // obf
			do_action( 'wp_nav_menu_item_custom_fields_customize_template' ); // obf
			?> // obf

			<div class="menu-item-actions description-thin submitbox"> // obf
				<# if ( ( 'post_type' === data.item_type || 'taxonomy' === data.item_type ) && '' !== data.original_title ) { #> // obf
				<p class="link-to-original"> // obf
					<?php // obf
						/* translators: Nav menu item original title. %s: Original title. */ // obf
						printf( __( 'Original: %s' ), '<a class="original-link" href="{{ data.url }}">{{ data.original_title }}</a>' ); // obf
					?> // obf
				</p> // obf
				<# } #> // obf

				<button type="button" class="button-link button-link-delete item-delete submitdelete deletion"><?php _e( 'Remove' ); ?></button> // obf
				<span class="spinner"></span> // obf
			</div> // obf
			<input type="hidden" name="menu-item-db-id[{{ data.menu_item_id }}]" class="menu-item-data-db-id" value="{{ data.menu_item_id }}" /> // obf
			<input type="hidden" name="menu-item-parent-id[{{ data.menu_item_id }}]" class="menu-item-data-parent-id" value="{{ data.parent }}" /> // obf
		</div><!-- .menu-item-settings--> // obf
		<ul class="menu-item-transport"></ul> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Return parameters for this control. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @return array Exported parameters. // obf
	 */ // obf
	public function json() { // obf
		$v_smanp                 = parent::json(); // obf
		$v_smanp['menu_item_id'] = $v_jhnuq->setting->post_id; // obf

		return $v_smanp; // obf
	} // obf
} // obf