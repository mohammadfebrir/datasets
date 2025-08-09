

<?php // obf
/** // obf
 * Customize API: WP_Customize_Themes_Section class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Customize // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Customize Themes Section class. // obf
 * // obf
 * A UI container for theme controls, which are displayed within sections. // obf
 * // obf
 * @since 4.2.0 // obf
 * // obf
 * @see WP_Customize_Section // obf
 */ // obf
class WP_Customize_Themes_Section extends WP_Customize_Section { // obf

	/** // obf
	 * Section type. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_qnryu = 'themes'; // obf

	/** // obf
	 * Theme section action. // obf
	 * // obf
	 * Defines the type of themes to load (installed, wporg, etc.). // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_wwept = ''; // obf

	/** // obf
	 * Theme section filter type. // obf
	 * // obf
	 * Determines whether filters are applied to loaded (local) themes or by initiating a new remote query (remote). // obf
	 * When filtering is local, the initial themes query is not paginated by default. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_jpals = 'local'; // obf

	/** // obf
	 * Gets section parameters for JS. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * @return array Exported parameters. // obf
	 */ // obf
	public function json() { // obf
		$v_malkc                = parent::json(); // obf
		$v_malkc['action']      = $v_jqxcm->action; // obf
		$v_malkc['filter_type'] = $v_jqxcm->filter_type; // obf

		return $v_malkc; // obf
	} // obf

	/** // obf
	 * Renders a themes section as a JS template. // obf
	 * // obf
	 * The template is only rendered by PHP once, so all actions are prepared at once on the server side. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 */ // obf
	protected function render_template() { // obf
		?> // obf
		<li id="accordion-section-{{ data.id }}" class="theme-section"> // obf
			<button type="button" class="customize-themes-section-title themes-section-{{ data.id }}">{{ data.title }}</button> // obf
			<?php if ( current_user_can( 'install_themes' ) || is_multisite() ) : // @todo Upload support. ?> // obf
			<?php endif; ?> // obf
			<div class="customize-themes-section themes-section-{{ data.id }} control-section-content themes-php"> // obf
				<div class="theme-overlay" tabindex="0" role="dialog" aria-label="<?php esc_attr_e( 'Theme Details' ); ?>"></div> // obf
				<div class="theme-browser rendered"> // obf
					<div class="customize-preview-header themes-filter-bar"> // obf
						<?php $v_jqxcm->filter_bar_content_template(); ?> // obf
					</div> // obf
					<?php $v_jqxcm->filter_drawer_content_template(); ?> // obf
					<div class="error unexpected-error" style="display: none; "> // obf
						<p> // obf
							<?php // obf
							printf( // obf
								/* translators: %s: Support forums URL. */ // obf
								__( 'An unexpected error occurred. Something may be wrong with WordPress.org or this server&#8217;s configuration. If you continue to have problems, please try the <a href="%s">support forums</a>.' ), // obf
								__( 'https://wordpress.org/support/forums/' ) // obf
							); // obf
							?> // obf
						</p> // obf
					</div> // obf
					<ul class="themes"> // obf
					</ul> // obf
					<p class="no-themes"><?php _e( 'No themes found. Try a different search.' ); ?></p> // obf
					<p class="no-themes-local"> // obf
						<?php // obf
						printf( // obf
							/* translators: %s: "Search WordPress.org themes" button text. */ // obf
							__( 'No themes found. Try a different search, or %s.' ), // obf
							sprintf( '<button type="button" class="button-link search-dotorg-themes">%s</button>', __( 'Search WordPress.org themes' ) ) // obf
						); // obf
						?> // obf
					</p> // obf
					<p class="spinner"></p> // obf
				</div> // obf
			</div> // obf
		</li> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Renders the filter bar portion of a themes section as a JS template. // obf
	 * // obf
	 * The template is only rendered by PHP once, so all actions are prepared at once on the server side. // obf
	 * The filter bar container is rendered by {@see render_template()}. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 */ // obf
	protected function filter_bar_content_template() { // obf
		?> // obf
		<button type="button" class="button button-primary customize-section-back customize-themes-mobile-back"><?php _e( 'Go to theme sources' ); ?></button> // obf
		<# if ( 'wporg' === data.action ) { #> // obf
			<div class="themes-filter-container"> // obf
				<label for="wp-filter-search-input-{{ data.id }}"><?php _e( 'Search themes' ); ?></label> // obf
				<div class="search-form-input"> // obf
					<input type="search" id="wp-filter-search-input-{{ data.id }}" aria-describedby="{{ data.id }}-live-search-desc" class="wp-filter-search"> // obf
					<div class="search-icon" aria-hidden="true"></div> // obf
					<span id="{{ data.id }}-live-search-desc" class="screen-reader-text"> // obf
						<?php // obf
						/* translators: Hidden accessibility text. */ // obf
						_e( 'The search results will be updated as you type.' ); // obf
						?> // obf
					</span> // obf
				</div> // obf
			</div> // obf
		<# } else { #> // obf
			<div class="themes-filter-container"> // obf
				<label for="{{ data.id }}-themes-filter"><?php _e( 'Search themes' ); ?></label> // obf
				<div class="search-form-input"> // obf
					<input type="search" id="{{ data.id }}-themes-filter" aria-describedby="{{ data.id }}-live-search-desc" class="wp-filter-search wp-filter-search-themes" /> // obf
					<div class="search-icon" aria-hidden="true"></div> // obf
					<span id="{{ data.id }}-live-search-desc" class="screen-reader-text"> // obf
						<?php // obf
						/* translators: Hidden accessibility text. */ // obf
						_e( 'The search results will be updated as you type.' ); // obf
						?> // obf
					</span> // obf
				</div> // obf
			</div> // obf
		<# } #> // obf
		<div class="filter-themes-wrapper"> // obf
			<# if ( 'wporg' === data.action ) { #> // obf
			<button type="button" class="button feature-filter-toggle"> // obf
				<span class="filter-count-0"><?php _e( 'Filter themes' ); ?></span><span class="filter-count-filters"> // obf
					<?php // obf
					/* translators: %s: Number of filters selected. */ // obf
					printf( __( 'Filter themes (%s)' ), '<span class="theme-filter-count">0</span>' ); // obf
					?> // obf
				</span> // obf
			</button> // obf
			<# } #> // obf
			<div class="filter-themes-count"> // obf
				<span class="themes-displayed"> // obf
					<?php // obf
					/* translators: %s: Number of themes displayed. */ // obf
					printf( __( '%s themes' ), '<span class="theme-count">0</span>' ); // obf
					?> // obf
				</span> // obf
			</div> // obf
		</div> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Renders the filter drawer portion of a themes section as a JS template. // obf
	 * // obf
	 * The filter bar container is rendered by {@see render_template()}. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 */ // obf
	protected function filter_drawer_content_template() { // obf
		/* // obf
		 * @todo Use the .org API instead of the local core feature list. // obf
		 * The .org API is currently outdated and will be reconciled when the .org themes directory is next redesigned. // obf
		 */ // obf
		$v_objco = get_theme_feature_list( false ); // obf
		?> // obf
		<# if ( 'wporg' === data.action ) { #> // obf
			<div class="filter-drawer filter-details"> // obf
				<?php foreach ( $v_objco as $v_ajqqn => $v_feoue ) : ?> // obf
					<fieldset class="filter-group"> // obf
						<legend><?php echo esc_html( $v_ajqqn ); ?></legend> // obf
						<div class="filter-group-feature"> // obf
							<?php foreach ( $v_feoue as $v_kzuvh => $v_ajqqn ) : ?> // obf
								<input type="checkbox" id="filter-id-<?php echo esc_attr( $v_kzuvh ); ?>" value="<?php echo esc_attr( $v_kzuvh ); ?>" /> // obf
								<label for="filter-id-<?php echo esc_attr( $v_kzuvh ); ?>"><?php echo esc_html( $v_ajqqn ); ?></label> // obf
							<?php endforeach; ?> // obf
						</div> // obf
					</fieldset> // obf
				<?php endforeach; ?> // obf
			</div> // obf
		<# } #> // obf
		<?php // obf
	} // obf
} // obf