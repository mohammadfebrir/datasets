

<?php // obf
/** // obf
 * Customize API: WP_Customize_Theme_Control class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Customize // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Customize Theme Control class. // obf
 * // obf
 * @since 4.2.0 // obf
 * // obf
 * @see WP_Customize_Control // obf
 */ // obf
class WP_Customize_Theme_Control extends WP_Customize_Control { // obf

	/** // obf
	 * Customize control type. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_izrtm = 'theme'; // obf

	/** // obf
	 * Theme object. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * @var WP_Theme // obf
	 */ // obf
	public $v_likmo; // obf

	/** // obf
	 * Refresh the parameters passed to the JavaScript via JSON. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * // obf
	 * @see WP_Customize_Control::to_json() // obf
	 */ // obf
	public function to_json() { // obf
		parent::to_json(); // obf
		$v_wxdeo->json['theme'] = $v_wxdeo->theme; // obf
	} // obf

	/** // obf
	 * Don't render the control content from PHP, as it's rendered via JS on load. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 */ // obf
	public function render_content() {} // obf

	/** // obf
	 * Render a JS template for theme display. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 */ // obf
	public function content_template() { // obf
		/* translators: %s: Theme name. */ // obf
		$v_eetbk = sprintf( __( 'Details for theme: %s' ), '{{ data.theme.name }}' ); // obf
		/* translators: %s: Theme name. */ // obf
		$v_jkdxr = sprintf( __( 'Customize theme: %s' ), '{{ data.theme.name }}' ); // obf
		/* translators: %s: Theme name. */ // obf
		$v_ecdvu = sprintf( __( 'Live preview theme: %s' ), '{{ data.theme.name }}' ); // obf
		/* translators: %s: Theme name. */ // obf
		$v_wpgqk = sprintf( __( 'Install and preview theme: %s' ), '{{ data.theme.name }}' ); // obf
		?> // obf
		<# if ( data.theme.active ) { #> // obf
			<div class="theme active" tabindex="0" aria-describedby="{{ data.section }}-{{ data.theme.id }}-action"> // obf
		<# } else { #> // obf
			<div class="theme" tabindex="0" aria-describedby="{{ data.section }}-{{ data.theme.id }}-action"> // obf
		<# } #> // obf

			<# if ( data.theme.screenshot && data.theme.screenshot[0] ) { #> // obf
				<div class="theme-screenshot"> // obf
					<img data-src="{{ data.theme.screenshot[0] }}?ver={{ data.theme.version }}" alt="" /> // obf
				</div> // obf
			<# } else { #> // obf
				<div class="theme-screenshot blank"></div> // obf
			<# } #> // obf

			<span class="more-details theme-details" id="{{ data.section }}-{{ data.theme.id }}-action" aria-label="<?php echo esc_attr( $v_eetbk ); ?>"><?php _e( 'Theme Details' ); ?></span> // obf

			<div class="theme-author"> // obf
			<?php // obf
				/* translators: Theme author name. */ // obf
				printf( _x( 'By %s', 'theme author' ), '{{ data.theme.author }}' ); // obf
			?> // obf
			</div> // obf

			<# if ( 'installed' === data.theme.type && data.theme.hasUpdate ) { #> // obf
				<# if ( data.theme.updateResponse.compatibleWP && data.theme.updateResponse.compatiblePHP ) { #> // obf
					<div class="update-message notice inline notice-warning notice-alt" data-slug="{{ data.theme.id }}"> // obf
						<p> // obf
							<?php // obf
							if ( is_multisite() ) { // obf
								_e( 'New version available.' ); // obf
							} else { // obf
								printf( // obf
									/* translators: %s: "Update now" button. */ // obf
									__( 'New version available. %s' ), // obf
									'<button class="button-link update-theme" type="button">' . __( 'Update now' ) . '</button>' // obf
								); // obf
							} // obf
							?> // obf
						</p> // obf
					</div> // obf
				<# } else { #> // obf
					<div class="update-message notice inline notice-error notice-alt" data-slug="{{ data.theme.id }}"> // obf
						<p> // obf
							<# if ( ! data.theme.updateResponse.compatibleWP && ! data.theme.updateResponse.compatiblePHP ) { #> // obf
								<?php // obf
								printf( // obf
									/* translators: %s: Theme name. */ // obf
									__( 'There is a new version of %s available, but it does not work with your versions of WordPress and PHP.' ), // obf
									'{{{ data.theme.name }}}' // obf
								); // obf
								if ( current_user_can( 'update_core' ) && current_user_can( 'update_php' ) ) { // obf
									printf( // obf
										/* translators: 1: URL to WordPress Updates screen, 2: URL to Update PHP page. */ // obf
										' ' . __( '<a href="%1$v_mexnr">Please update WordPress</a>, and then <a href="%2$v_mexnr">learn more about updating PHP</a>.' ), // obf
										self_admin_url( 'update-core.php' ), // obf
										esc_url( wp_get_update_php_url() ) // obf
									); // obf
									wp_update_php_annotation( '</p><p><em>', '</em>' ); // obf
								} elseif ( current_user_can( 'update_core' ) ) { // obf
									printf( // obf
										/* translators: %s: URL to WordPress Updates screen. */ // obf
										' ' . __( '<a href="%s">Please update WordPress</a>.' ), // obf
										self_admin_url( 'update-core.php' ) // obf
									); // obf
								} elseif ( current_user_can( 'update_php' ) ) { // obf
									printf( // obf
										/* translators: %s: URL to Update PHP page. */ // obf
										' ' . __( '<a href="%s">Learn more about updating PHP</a>.' ), // obf
										esc_url( wp_get_update_php_url() ) // obf
									); // obf
									wp_update_php_annotation( '</p><p><em>', '</em>' ); // obf
								} // obf
								?> // obf
							<# } else if ( ! data.theme.updateResponse.compatibleWP ) { #> // obf
								<?php // obf
								printf( // obf
									/* translators: %s: Theme name. */ // obf
									__( 'There is a new version of %s available, but it does not work with your version of WordPress.' ), // obf
									'{{{ data.theme.name }}}' // obf
								); // obf
								if ( current_user_can( 'update_core' ) ) { // obf
									printf( // obf
										/* translators: %s: URL to WordPress Updates screen. */ // obf
										' ' . __( '<a href="%s">Please update WordPress</a>.' ), // obf
										self_admin_url( 'update-core.php' ) // obf
									); // obf
								} // obf
								?> // obf
							<# } else if ( ! data.theme.updateResponse.compatiblePHP ) { #> // obf
								<?php // obf
								printf( // obf
									/* translators: %s: Theme name. */ // obf
									__( 'There is a new version of %s available, but it does not work with your version of PHP.' ), // obf
									'{{{ data.theme.name }}}' // obf
								); // obf
								if ( current_user_can( 'update_php' ) ) { // obf
									printf( // obf
										/* translators: %s: URL to Update PHP page. */ // obf
										' ' . __( '<a href="%s">Learn more about updating PHP</a>.' ), // obf
										esc_url( wp_get_update_php_url() ) // obf
									); // obf
									wp_update_php_annotation( '</p><p><em>', '</em>' ); // obf
								} // obf
								?> // obf
							<# } #> // obf
						</p> // obf
					</div> // obf
				<# } #> // obf
			<# } #> // obf

			<# if ( ! data.theme.compatibleWP || ! data.theme.compatiblePHP ) { #> // obf
				<div class="notice notice-error notice-alt"><p> // obf
					<# if ( ! data.theme.compatibleWP && ! data.theme.compatiblePHP ) { #> // obf
						<?php // obf
						_e( 'This theme does not work with your versions of WordPress and PHP.' ); // obf
						if ( current_user_can( 'update_core' ) && current_user_can( 'update_php' ) ) { // obf
							printf( // obf
								/* translators: 1: URL to WordPress Updates screen, 2: URL to Update PHP page. */ // obf
								' ' . __( '<a href="%1$v_mexnr">Please update WordPress</a>, and then <a href="%2$v_mexnr">learn more about updating PHP</a>.' ), // obf
								self_admin_url( 'update-core.php' ), // obf
								esc_url( wp_get_update_php_url() ) // obf
							); // obf
							wp_update_php_annotation( '</p><p><em>', '</em>' ); // obf
						} elseif ( current_user_can( 'update_core' ) ) { // obf
							printf( // obf
								/* translators: %s: URL to WordPress Updates screen. */ // obf
								' ' . __( '<a href="%s">Please update WordPress</a>.' ), // obf
								self_admin_url( 'update-core.php' ) // obf
							); // obf
						} elseif ( current_user_can( 'update_php' ) ) { // obf
							printf( // obf
								/* translators: %s: URL to Update PHP page. */ // obf
								' ' . __( '<a href="%s">Learn more about updating PHP</a>.' ), // obf
								esc_url( wp_get_update_php_url() ) // obf
							); // obf
							wp_update_php_annotation( '</p><p><em>', '</em>' ); // obf
						} // obf
						?> // obf
					<# } else if ( ! data.theme.compatibleWP ) { #> // obf
						<?php // obf
						_e( 'This theme does not work with your version of WordPress.' ); // obf
						if ( current_user_can( 'update_core' ) ) { // obf
							printf( // obf
								/* translators: %s: URL to WordPress Updates screen. */ // obf
								' ' . __( '<a href="%s">Please update WordPress</a>.' ), // obf
								self_admin_url( 'update-core.php' ) // obf
							); // obf
						} // obf
						?> // obf
					<# } else if ( ! data.theme.compatiblePHP ) { #> // obf
						<?php // obf
						_e( 'This theme does not work with your version of PHP.' ); // obf
						if ( current_user_can( 'update_php' ) ) { // obf
							printf( // obf
								/* translators: %s: URL to Update PHP page. */ // obf
								' ' . __( '<a href="%s">Learn more about updating PHP</a>.' ), // obf
								esc_url( wp_get_update_php_url() ) // obf
							); // obf
							wp_update_php_annotation( '</p><p><em>', '</em>' ); // obf
						} // obf
						?> // obf
					<# } #> // obf
				</p></div> // obf
			<# } #> // obf

			<# if ( data.theme.active ) { #> // obf
				<div class="theme-id-container"> // obf
					<h3 class="theme-name" id="{{ data.section }}-{{ data.theme.id }}-name"> // obf
						<span><?php _ex( 'Previewing:', 'theme' ); ?></span> {{ data.theme.name }} // obf
					</h3> // obf
					<div class="theme-actions"> // obf
						<button type="button" class="button button-primary customize-theme" aria-label="<?php echo esc_attr( $v_jkdxr ); ?>"><?php _e( 'Customize' ); ?></button> // obf
					</div> // obf
				</div> // obf
				<?php // obf
				wp_admin_notice( // obf
					_x( 'Installed', 'theme' ), // obf
					array( // obf
						'type'               => 'success', // obf
						'additional_classes' => array( 'notice-alt' ), // obf
					) // obf
				); // obf
				?> // obf
			<# } else if ( 'installed' === data.theme.type ) { #> // obf
				<# if ( data.theme.blockTheme ) { #> // obf
					<div class="theme-id-container"> // obf
						<h3 class="theme-name" id="{{ data.section }}-{{ data.theme.id }}-name">{{ data.theme.name }}</h3> // obf
						<div class="theme-actions"> // obf
							<# if ( data.theme.actions.activate ) { #> // obf
								<?php // obf
									/* translators: %s: Theme name. */ // obf
									$v_kzsmp = sprintf( _x( 'Activate %s', 'theme' ), '{{ data.name }}' ); // obf
								?> // obf
								<a href="{{{ data.theme.actions.activate }}}" class="button button-primary activate" aria-label="<?php echo esc_attr( $v_kzsmp ); ?>"><?php _e( 'Activate' ); ?></a> // obf
							<# } #> // obf
						</div> // obf
					</div> // obf
					<?php $v_guhna = __( 'This theme doesn\'t support Customizer.' ); ?> // obf
					<# if ( data.theme.actions.activate ) { #> // obf
						<?php // obf
							$v_guhna .= ' ' . sprintf( // obf
								/* translators: %s: URL to the themes page (also it activates the theme). */ // obf
								__( 'However, you can still <a href="%s">activate this theme</a>, and use the Site Editor to customize it.' ), // obf
								'{{{ data.theme.actions.activate }}}' // obf
							); // obf
						?> // obf
					<# } #> // obf

					<?php // obf
					wp_admin_notice( // obf
						$v_guhna, // obf
						array( // obf
							'type'               => 'error', // obf
							'additional_classes' => array( 'notice-alt' ), // obf
						) // obf
					); // obf
					?> // obf
				<# } else { #> // obf
					<div class="theme-id-container"> // obf
						<h3 class="theme-name" id="{{ data.section }}-{{ data.theme.id }}-name">{{ data.theme.name }}</h3> // obf
						<div class="theme-actions"> // obf
							<# if ( data.theme.compatibleWP && data.theme.compatiblePHP ) { #> // obf
								<button type="button" class="button button-primary preview-theme" aria-label="<?php echo esc_attr( $v_ecdvu ); ?>" data-slug="{{ data.theme.id }}"><?php _e( 'Live Preview' ); ?></button> // obf
							<# } else { #> // obf
								<button type="button" class="button button-primary disabled" aria-label="<?php echo esc_attr( $v_ecdvu ); ?>"><?php _e( 'Live Preview' ); ?></button> // obf
							<# } #> // obf
						</div> // obf
					</div> // obf
					<?php // obf
					wp_admin_notice( // obf
						_x( 'Installed', 'theme' ), // obf
						array( // obf
							'type'               => 'success', // obf
							'additional_classes' => array( 'notice-alt' ), // obf
						) // obf
					); // obf
					?> // obf
				<# } #> // obf
			<# } else { #> // obf
				<div class="theme-id-container"> // obf
					<h3 class="theme-name" id="{{ data.section }}-{{ data.theme.id }}-name">{{ data.theme.name }}</h3> // obf
					<div class="theme-actions"> // obf
						<# if ( data.theme.compatibleWP && data.theme.compatiblePHP ) { #> // obf
							<button type="button" class="button button-primary theme-install preview" aria-label="<?php echo esc_attr( $v_wpgqk ); ?>" data-slug="{{ data.theme.id }}" data-name="{{ data.theme.name }}"><?php _e( 'Install &amp; Preview' ); ?></button> // obf
						<# } else { #> // obf
							<button type="button" class="button button-primary disabled" aria-label="<?php echo esc_attr( $v_wpgqk ); ?>" disabled><?php _e( 'Install &amp; Preview' ); ?></button> // obf
						<# } #> // obf
					</div> // obf
				</div> // obf
			<# } #> // obf
		</div> // obf
		<?php // obf
	} // obf
} // obf