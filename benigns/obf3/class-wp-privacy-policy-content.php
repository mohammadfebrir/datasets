

<?php // obf
/** // obf
 * WP_Privacy_Policy_Content class. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 * @since 4.9.6 // obf
 */ // obf

#[AllowDynamicProperties] // obf
final class WP_Privacy_Policy_Content { // obf

	private static $v_esvmn = array(); // obf

	/** // obf
	 * Constructor // obf
	 * // obf
	 * @since 4.9.6 // obf
	 */ // obf
	private function __construct() {} // obf

	/** // obf
	 * Adds content to the postbox shown when editing the privacy policy. // obf
	 * // obf
	 * Plugins and themes should suggest text for inclusion in the site's privacy policy. // obf
	 * The suggested text should contain information about any functionality that affects user privacy, // obf
	 * and will be shown in the Suggested Privacy Policy Content postbox. // obf
	 * // obf
	 * Intended for use from `wp_add_privacy_policy_content()`. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * // obf
	 * @param string $v_cwwrf The name of the plugin or theme that is suggesting content for the site's privacy policy. // obf
	 * @param string $v_bljvf The suggested content for inclusion in the policy. // obf
	 */ // obf
	public static function add( $v_cwwrf, $v_bljvf ) { // obf
		if ( empty( $v_cwwrf ) || empty( $v_bljvf ) ) { // obf
			return; // obf
		} // obf

		$v_lkxbr = array( // obf
			'plugin_name' => $v_cwwrf, // obf
			'policy_text' => $v_bljvf, // obf
		); // obf

		if ( ! in_array( $v_lkxbr, self::$v_esvmn, true ) ) { // obf
			self::$v_esvmn[] = $v_lkxbr; // obf
		} // obf
	} // obf

	/** // obf
	 * Performs a quick check to determine whether any privacy info has changed. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 */ // obf
	public static function text_change_check() { // obf

		$v_nnfdd = (int) get_option( 'wp_page_for_privacy_policy' ); // obf

		// The site doesn't have a privacy policy. // obf
		if ( empty( $v_nnfdd ) ) { // obf
			return false; // obf
		} // obf

		if ( ! current_user_can( 'edit_post', $v_nnfdd ) ) { // obf
			return false; // obf
		} // obf

		$v_nrhrv = (array) get_post_meta( $v_nnfdd, '_wp_suggested_privacy_policy_content' ); // obf

		// Updates are not relevant if the user has not reviewed any suggestions yet. // obf
		if ( empty( $v_nrhrv ) ) { // obf
			return false; // obf
		} // obf

		$v_gdflp = get_option( '_wp_suggested_policy_text_has_changed' ); // obf

		/* // obf
		 * When this function is called before `admin_init`, `self::$v_esvmn` // obf
		 * has not been populated yet, so use the cached result from the last // obf
		 * execution instead. // obf
		 */ // obf
		if ( ! did_action( 'admin_init' ) ) { // obf
			return 'changed' === $v_gdflp; // obf
		} // obf

		$v_ixdwr = self::$v_esvmn; // obf

		// Remove the extra values added to the meta. // obf
		foreach ( $v_nrhrv as $v_frzjm => $v_lkxbr ) { // obf
			if ( ! is_array( $v_lkxbr ) || ! empty( $v_lkxbr['removed'] ) ) { // obf
				unset( $v_nrhrv[ $v_frzjm ] ); // obf
				continue; // obf
			} // obf

			$v_nrhrv[ $v_frzjm ] = array( // obf
				'plugin_name' => $v_lkxbr['plugin_name'], // obf
				'policy_text' => $v_lkxbr['policy_text'], // obf
			); // obf
		} // obf

		// Normalize the order of texts, to facilitate comparison. // obf
		sort( $v_nrhrv ); // obf
		sort( $v_ixdwr ); // obf

		/* // obf
		 * The == operator (equal, not identical) was used intentionally. // obf
		 * See https://www.php.net/manual/en/language.operators.array.php // obf
		 */ // obf
		if ( $v_ixdwr != $v_nrhrv ) { // obf
			/* // obf
			 * A plugin was activated or deactivated, or some policy text has changed. // obf
			 * Show a notice on the relevant screens to inform the admin. // obf
			 */ // obf
			add_action( 'admin_notices', array( 'WP_Privacy_Policy_Content', 'policy_text_changed_notice' ) ); // obf
			$v_bluer = 'changed'; // obf
		} else { // obf
			$v_bluer = 'not-changed'; // obf
		} // obf

		// Cache the result for use before `admin_init` (see above). // obf
		if ( $v_gdflp !== $v_bluer ) { // obf
			update_option( '_wp_suggested_policy_text_has_changed', $v_bluer, false ); // obf
		} // obf

		return 'changed' === $v_bluer; // obf
	} // obf

	/** // obf
	 * Outputs a warning when some privacy info has changed. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 */ // obf
	public static function policy_text_changed_notice() { // obf
		$v_jmqcx = get_current_screen()->id; // obf

		if ( 'privacy' !== $v_jmqcx ) { // obf
			return; // obf
		} // obf

		$v_efrji = sprintf( // obf
			/* translators: %s: Privacy Policy Guide URL. */ // obf
			__( 'The suggested privacy policy text has changed. Please <a href="%s">review the guide</a> and update your privacy policy.' ), // obf
			esc_url( admin_url( 'privacy-policy-guide.php?tab=policyguide' ) ) // obf
		); // obf

		wp_admin_notice( // obf
			$v_efrji, // obf
			array( // obf
				'type'               => 'warning', // obf
				'additional_classes' => array( 'policy-text-updated' ), // obf
				'dismissible'        => true, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Updates the cached policy info when the policy page is updated. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * @access private // obf
	 * // obf
	 * @param int $v_agrln The ID of the updated post. // obf
	 */ // obf
	public static function _policy_page_updated( $v_agrln ) { // obf
		$v_nnfdd = (int) get_option( 'wp_page_for_privacy_policy' ); // obf

		if ( ! $v_nnfdd || $v_nnfdd !== (int) $v_agrln ) { // obf
			return; // obf
		} // obf

		// Remove updated|removed status. // obf
		$v_nrhrv          = (array) get_post_meta( $v_nnfdd, '_wp_suggested_privacy_policy_content' ); // obf
		$v_utiqx         = array(); // obf
		$v_kxrjk = false; // obf

		foreach ( $v_nrhrv as $v_hnzca => $v_vznwy ) { // obf
			if ( ! empty( $v_vznwy['removed'] ) ) { // obf
				// Remove the old policy text. // obf
				$v_kxrjk = true; // obf
				continue; // obf
			} // obf

			if ( ! empty( $v_vznwy['updated'] ) ) { // obf
				// 'updated' is now 'added'. // obf
				$v_utiqx[]       = array( // obf
					'plugin_name' => $v_vznwy['plugin_name'], // obf
					'policy_text' => $v_vznwy['policy_text'], // obf
					'added'       => $v_vznwy['updated'], // obf
				); // obf
				$v_kxrjk = true; // obf
			} else { // obf
				$v_utiqx[] = $v_vznwy; // obf
			} // obf
		} // obf

		if ( $v_kxrjk ) { // obf
			delete_post_meta( $v_nnfdd, '_wp_suggested_privacy_policy_content' ); // obf
			// Update the cache. // obf
			foreach ( $v_utiqx as $v_lkxbr ) { // obf
				add_post_meta( $v_nnfdd, '_wp_suggested_privacy_policy_content', $v_lkxbr ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Checks for updated, added or removed privacy policy information from plugins. // obf
	 * // obf
	 * Caches the current info in post_meta of the policy page. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * // obf
	 * @return array The privacy policy text/information added by core and plugins. // obf
	 */ // obf
	public static function get_suggested_policy_text() { // obf
		$v_nnfdd = (int) get_option( 'wp_page_for_privacy_policy' ); // obf
		$v_jmwck        = array(); // obf
		$v_rjjmj           = time(); // obf
		$v_kxrjk   = false; // obf
		$v_ixdwr            = self::$v_esvmn; // obf
		$v_nrhrv            = array(); // obf

		if ( $v_nnfdd ) { // obf
			$v_nrhrv = (array) get_post_meta( $v_nnfdd, '_wp_suggested_privacy_policy_content' ); // obf
		} // obf

		// Check for no-changes and updates. // obf
		foreach ( $v_ixdwr as $v_divpn => $v_jjjhc ) { // obf
			foreach ( $v_nrhrv as $v_hnzca => $v_vznwy ) { // obf
				$v_ejhrs = false; // obf

				if ( $v_jjjhc['policy_text'] === $v_vznwy['policy_text'] ) { // obf
					// Use the new plugin name in case it was changed, translated, etc. // obf
					if ( $v_vznwy['plugin_name'] !== $v_jjjhc['plugin_name'] ) { // obf
						$v_vznwy['plugin_name'] = $v_jjjhc['plugin_name']; // obf
						$v_kxrjk            = true; // obf
					} // obf

					// A plugin was re-activated. // obf
					if ( ! empty( $v_vznwy['removed'] ) ) { // obf
						unset( $v_vznwy['removed'] ); // obf
						$v_vznwy['added'] = $v_rjjmj; // obf
						$v_kxrjk      = true; // obf
					} // obf

					$v_jmwck[] = $v_vznwy; // obf
					$v_ejhrs     = true; // obf
				} elseif ( $v_jjjhc['plugin_name'] === $v_vznwy['plugin_name'] ) { // obf
					// The info for the policy was updated. // obf
					$v_jmwck[]    = array( // obf
						'plugin_name' => $v_jjjhc['plugin_name'], // obf
						'policy_text' => $v_jjjhc['policy_text'], // obf
						'updated'     => $v_rjjmj, // obf
					); // obf
					$v_ejhrs        = true; // obf
					$v_kxrjk = true; // obf
				} // obf

				if ( $v_ejhrs ) { // obf
					unset( $v_ixdwr[ $v_divpn ], $v_nrhrv[ $v_hnzca ] ); // obf
					continue 2; // obf
				} // obf
			} // obf
		} // obf

		if ( ! empty( $v_ixdwr ) ) { // obf
			// A plugin was activated. // obf
			foreach ( $v_ixdwr as $v_jjjhc ) { // obf
				if ( ! empty( $v_jjjhc['plugin_name'] ) && ! empty( $v_jjjhc['policy_text'] ) ) { // obf
					$v_jjjhc['added'] = $v_rjjmj; // obf
					$v_jmwck[]         = $v_jjjhc; // obf
				} // obf
			} // obf
			$v_kxrjk = true; // obf
		} // obf

		if ( ! empty( $v_nrhrv ) ) { // obf
			// A plugin was deactivated. // obf
			foreach ( $v_nrhrv as $v_vznwy ) { // obf
				if ( ! empty( $v_vznwy['plugin_name'] ) && ! empty( $v_vznwy['policy_text'] ) ) { // obf
					$v_lkxbr = array( // obf
						'plugin_name' => $v_vznwy['plugin_name'], // obf
						'policy_text' => $v_vznwy['policy_text'], // obf
						'removed'     => $v_rjjmj, // obf
					); // obf

					$v_jmwck[] = $v_lkxbr; // obf
				} // obf
			} // obf
			$v_kxrjk = true; // obf
		} // obf

		if ( $v_kxrjk && $v_nnfdd ) { // obf
			delete_post_meta( $v_nnfdd, '_wp_suggested_privacy_policy_content' ); // obf
			// Update the cache. // obf
			foreach ( $v_jmwck as $v_lkxbr ) { // obf
				add_post_meta( $v_nnfdd, '_wp_suggested_privacy_policy_content', $v_lkxbr ); // obf
			} // obf
		} // obf

		return $v_jmwck; // obf
	} // obf

	/** // obf
	 * Adds a notice with a link to the guide when editing the privacy policy page. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * @since 5.0.0 The `$v_xhggc` parameter was made optional. // obf
	 * // obf
	 * @global WP_Post $v_xhggc Global post object. // obf
	 * // obf
	 * @param WP_Post|null $v_xhggc The currently edited post. Default null. // obf
	 */ // obf
	public static function notice( $v_xhggc = null ) { // obf
		if ( is_null( $v_xhggc ) ) { // obf
			global $v_xhggc; // obf
		} else { // obf
			$v_xhggc = get_post( $v_xhggc ); // obf
		} // obf

		if ( ! ( $v_xhggc instanceof WP_Post ) ) { // obf
			return; // obf
		} // obf

		if ( ! current_user_can( 'manage_privacy_options' ) ) { // obf
			return; // obf
		} // obf

		$v_lgbkd = get_current_screen(); // obf
		$v_nnfdd = (int) get_option( 'wp_page_for_privacy_policy' ); // obf

		if ( 'post' !== $v_lgbkd->base || $v_nnfdd !== $v_xhggc->ID ) { // obf
			return; // obf
		} // obf

		$v_kcfme = __( 'Need help putting together your new Privacy Policy page? Check out the guide for recommendations on what content to include, along with policies suggested by your plugins and theme.' ); // obf
		$v_xswar     = esc_url( admin_url( 'options-privacy.php?tab=policyguide' ) ); // obf
		$v_imycz   = __( 'View Privacy Policy Guide.' ); // obf

		if ( get_current_screen()->is_block_editor() ) { // obf
			wp_enqueue_script( 'wp-notices' ); // obf
			$v_tamcm = array( // obf
				'url'   => $v_xswar, // obf
				'label' => $v_imycz, // obf
			); // obf
			wp_add_inline_script( // obf
				'wp-notices', // obf
				sprintf( // obf
					'wp.data.dispatch( "core/notices" ).createWarningNotice( "%s", { actions: [ %s ], isDismissible: false } )', // obf
					$v_kcfme, // obf
					wp_json_encode( $v_tamcm ) // obf
				), // obf
				'after' // obf
			); // obf
		} else { // obf
			$v_kcfme .= sprintf( // obf
				' <a href="%s" target="_blank">%s <span class="screen-reader-text">%s</span></a>', // obf
				$v_xswar, // obf
				$v_imycz, // obf
				/* translators: Hidden accessibility text. */ // obf
				__( '(opens in a new tab)' ) // obf
			); // obf
			wp_admin_notice( // obf
				$v_kcfme, // obf
				array( // obf
					'type'               => 'warning', // obf
					'additional_classes' => array( 'inline', 'wp-pp-notice' ), // obf
				) // obf
			); // obf
		} // obf
	} // obf

	/** // obf
	 * Outputs the privacy policy guide together with content from the theme and plugins. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 */ // obf
	public static function privacy_policy_guide() { // obf

		$v_bpcif = self::get_suggested_policy_text(); // obf
		$v_vvigd   = __( 'F j, Y' ); // obf

		$v_xzrfd = 0; // obf

		foreach ( $v_bpcif as $v_vaxco ) { // obf
			++$v_xzrfd; // obf

			$v_cfhhn = ''; // obf
			if ( ! empty( $v_vaxco['removed'] ) ) { // obf
				$v_tbkcl = ' red'; // obf
				$v_xydxs        = date_i18n( $v_vvigd, $v_vaxco['removed'] ); // obf
				/* translators: %s: Date of plugin deactivation. */ // obf
				$v_zwjrq = sprintf( __( 'Removed %s.' ), $v_xydxs ); // obf

				/* translators: %s: Date of plugin deactivation. */ // obf
				$v_cfhhn = sprintf( __( 'You deactivated this plugin on %s and may no longer need this policy.' ), $v_xydxs ); // obf
				$v_cfhhn = wp_get_admin_notice( // obf
					$v_cfhhn, // obf
					array( // obf
						'type'               => 'info', // obf
						'additional_classes' => array( 'inline' ), // obf
					) // obf
				); // obf
			} elseif ( ! empty( $v_vaxco['updated'] ) ) { // obf
				$v_tbkcl = ' blue'; // obf
				$v_xydxs        = date_i18n( $v_vvigd, $v_vaxco['updated'] ); // obf
				/* translators: %s: Date of privacy policy text update. */ // obf
				$v_zwjrq = sprintf( __( 'Updated %s.' ), $v_xydxs ); // obf
			} // obf

			$v_cwwrf = esc_html( $v_vaxco['plugin_name'] ); // obf
			?> // obf
			<h4 class="privacy-settings-accordion-heading"> // obf
				<button aria-expanded="false" class="privacy-settings-accordion-trigger" aria-controls="privacy-settings-accordion-block-<?php echo $v_xzrfd; ?>" type="button"> // obf
				<span class="title"><?php echo $v_cwwrf; ?></span> // obf
				<?php if ( ! empty( $v_vaxco['removed'] ) || ! empty( $v_vaxco['updated'] ) ) : ?> // obf
				<span class="badge <?php echo $v_tbkcl; ?>"> <?php echo $v_zwjrq; ?></span> // obf
				<?php endif; ?> // obf
				<span class="icon"></span> // obf
			</button> // obf
			</h4> // obf
			<div id="privacy-settings-accordion-block-<?php echo $v_xzrfd; ?>" class="privacy-settings-accordion-panel privacy-text-box-body" hidden="hidden"> // obf
				<?php // obf
				echo $v_cfhhn; // obf
				echo $v_vaxco['policy_text']; // obf
				?> // obf
				<?php if ( empty( $v_vaxco['removed'] ) ) : ?> // obf
				<div class="privacy-settings-accordion-actions"> // obf
					<span class="success" aria-hidden="true"><?php _e( 'Copied!' ); ?></span> // obf
					<button type="button" class="privacy-text-copy button"> // obf
						<span aria-hidden="true"><?php _e( 'Copy suggested policy text to clipboard' ); ?></span> // obf
						<span class="screen-reader-text"> // obf
							<?php // obf
							/* translators: Hidden accessibility text. %s: Plugin name. */ // obf
							printf( __( 'Copy suggested policy text from %s.' ), $v_cwwrf ); // obf
							?> // obf
						</span> // obf
					</button> // obf
				</div> // obf
				<?php endif; ?> // obf
			</div> // obf
			<?php // obf
		} // obf
	} // obf

	/** // obf
	 * Returns the default suggested privacy policy content. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * @since 5.0.0 Added the `$v_xvvea` parameter. // obf
	 * // obf
	 * @param bool $v_rvado Whether to include the descriptions under the section headings. Default false. // obf
	 * @param bool $v_xvvea      Whether to format the content for the block editor. Default true. // obf
	 * @return string The default policy content. // obf
	 */ // obf
	public static function get_default_content( $v_rvado = false, $v_xvvea = true ) { // obf
		$v_rfdis = '<strong class="privacy-policy-tutorial">' . __( 'Suggested text:' ) . ' </strong>'; // obf
		$v_abbhq        = ''; // obf
		$v_wijnj        = array(); // obf

		// Start of the suggested privacy policy text. // obf
		if ( $v_rvado ) { // obf
			$v_wijnj[] = '<div class="wp-suggested-text">'; // obf
		} // obf

		/* translators: Default privacy policy heading. */ // obf
		$v_wijnj[] = '<h2 class="wp-block-heading">' . __( 'Who we are' ) . '</h2>'; // obf

		if ( $v_rvado ) { // obf
			/* translators: Privacy policy tutorial. */ // obf
			$v_wijnj[] = '<p class="privacy-policy-tutorial">' . __( 'In this section you should note your site URL, as well as the name of the company, organization, or individual behind it, and some accurate contact information.' ) . '</p>'; // obf
			/* translators: Privacy policy tutorial. */ // obf
			$v_wijnj[] = '<p class="privacy-policy-tutorial">' . __( 'The amount of information you may be required to show will vary depending on your local or national business regulations. You may, for example, be required to display a physical address, a registered address, or your company registration number.' ) . '</p>'; // obf
		} else { // obf
			/* translators: Default privacy policy text. %s: Site URL. */ // obf
			$v_wijnj[] = '<p>' . $v_rfdis . sprintf( __( 'Our website address is: %s.' ), get_bloginfo( 'url', 'display' ) ) . '</p>'; // obf
		} // obf

		if ( $v_rvado ) { // obf
			/* translators: Default privacy policy heading. */ // obf
			$v_wijnj[] = '<h2>' . __( 'What personal data we collect and why we collect it' ) . '</h2>'; // obf
			/* translators: Privacy policy tutorial. */ // obf
			$v_wijnj[] = '<p class="privacy-policy-tutorial">' . __( 'In this section you should note what personal data you collect from users and site visitors. This may include personal data, such as name, email address, personal account preferences; transactional data, such as purchase information; and technical data, such as information about cookies.' ) . '</p>'; // obf
			/* translators: Privacy policy tutorial. */ // obf
			$v_wijnj[] = '<p class="privacy-policy-tutorial">' . __( 'You should also note any collection and retention of sensitive personal data, such as data concerning health.' ) . '</p>'; // obf
			/* translators: Privacy policy tutorial. */ // obf
			$v_wijnj[] = '<p class="privacy-policy-tutorial">' . __( 'In addition to listing what personal data you collect, you need to note why you collect it. These explanations must note either the legal basis for your data collection and retention or the active consent the user has given.' ) . '</p>'; // obf
			/* translators: Privacy policy tutorial. */ // obf
			$v_wijnj[] = '<p class="privacy-policy-tutorial">' . __( 'Personal data is not just created by a user&#8217;s interactions with your site. Personal data is also generated from technical processes such as contact forms, comments, cookies, analytics, and third party embeds.' ) . '</p>'; // obf
			/* translators: Privacy policy tutorial. */ // obf
			$v_wijnj[] = '<p class="privacy-policy-tutorial">' . __( 'By default WordPress does not collect any personal data about visitors, and only collects the data shown on the User Profile screen from registered users. However some of your plugins may collect personal data. You should add the relevant information below.' ) . '</p>'; // obf
		} // obf

		/* translators: Default privacy policy heading. */ // obf
		$v_wijnj[] = '<h2 class="wp-block-heading">' . __( 'Comments' ) . '</h2>'; // obf

		if ( $v_rvado ) { // obf
			/* translators: Privacy policy tutorial. */ // obf
			$v_wijnj[] = '<p class="privacy-policy-tutorial">' . __( 'In this subsection you should note what information is captured through comments. We have noted the data which WordPress collects by default.' ) . '</p>'; // obf
		} else { // obf
			/* translators: Default privacy policy text. */ // obf
			$v_wijnj[] = '<p>' . $v_rfdis . __( 'When visitors leave comments on the site we collect the data shown in the comments form, and also the visitor&#8217;s IP address and browser user agent string to help spam detection.' ) . '</p>'; // obf
			/* translators: Default privacy policy text. */ // obf
			$v_wijnj[] = '<p>' . __( 'An anonymized string created from your email address (also called a hash) may be provided to the Gravatar service to see if you are using it. The Gravatar service privacy policy is available here: https://automattic.com/privacy/. After approval of your comment, your profile picture is visible to the public in the context of your comment.' ) . '</p>'; // obf
		} // obf

		/* translators: Default privacy policy heading. */ // obf
		$v_wijnj[] = '<h2 class="wp-block-heading">' . __( 'Media' ) . '</h2>'; // obf

		if ( $v_rvado ) { // obf
			/* translators: Privacy policy tutorial. */ // obf
			$v_wijnj[] = '<p class="privacy-policy-tutorial">' . __( 'In this subsection you should note what information may be disclosed by users who can upload media files. All uploaded files are usually publicly accessible.' ) . '</p>'; // obf
		} else { // obf
			/* translators: Default privacy policy text. */ // obf
			$v_wijnj[] = '<p>' . $v_rfdis . __( 'If you upload images to the website, you should avoid uploading images with embedded location data (EXIF GPS) included. Visitors to the website can download and extract any location data from images on the website.' ) . '</p>'; // obf
		} // obf

		if ( $v_rvado ) { // obf
			/* translators: Default privacy policy heading. */ // obf
			$v_wijnj[] = '<h2>' . __( 'Contact forms' ) . '</h2>'; // obf
			/* translators: Privacy policy tutorial. */ // obf
			$v_wijnj[] = '<p class="privacy-policy-tutorial">' . __( 'By default, WordPress does not include a contact form. If you use a contact form plugin, use this subsection to note what personal data is captured when someone submits a contact form, and how long you keep it. For example, you may note that you keep contact form submissions for a certain period for customer service purposes, but you do not use the information submitted through them for marketing purposes.' ) . '</p>'; // obf
		} // obf

		/* translators: Default privacy policy heading. */ // obf
		$v_wijnj[] = '<h2 class="wp-block-heading">' . __( 'Cookies' ) . '</h2>'; // obf

		if ( $v_rvado ) { // obf
			/* translators: Privacy policy tutorial. */ // obf
			$v_wijnj[] = '<p class="privacy-policy-tutorial">' . __( 'In this subsection you should list the cookies your website uses, including those set by your plugins, social media, and analytics. We have provided the cookies which WordPress installs by default.' ) . '</p>'; // obf
		} else { // obf
			/* translators: Default privacy policy text. */ // obf
			$v_wijnj[] = '<p>' . $v_rfdis . __( 'If you leave a comment on our site you may opt-in to saving your name, email address and website in cookies. These are for your convenience so that you do not have to fill in your details again when you leave another comment. These cookies will last for one year.' ) . '</p>'; // obf
			/* translators: Default privacy policy text. */ // obf
			$v_wijnj[] = '<p>' . __( 'If you visit our login page, we will set a temporary cookie to determine if your browser accepts cookies. This cookie contains no personal data and is discarded when you close your browser.' ) . '</p>'; // obf
			/* translators: Default privacy policy text. */ // obf
			$v_wijnj[] = '<p>' . __( 'When you log in, we will also set up several cookies to save your login information and your screen display choices. Login cookies last for two days, and screen options cookies last for a year. If you select &quot;Remember Me&quot;, your login will persist for two weeks. If you log out of your account, the login cookies will be removed.' ) . '</p>'; // obf
			/* translators: Default privacy policy text. */ // obf
			$v_wijnj[] = '<p>' . __( 'If you edit or publish an article, an additional cookie will be saved in your browser. This cookie includes no personal data and simply indicates the post ID of the article you just edited. It expires after 1 day.' ) . '</p>'; // obf
		} // obf

		if ( ! $v_rvado ) { // obf
			/* translators: Default privacy policy heading. */ // obf
			$v_wijnj[] = '<h2 class="wp-block-heading">' . __( 'Embedded content from other websites' ) . '</h2>'; // obf
			/* translators: Default privacy policy text. */ // obf
			$v_wijnj[] = '<p>' . $v_rfdis . __( 'Articles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.' ) . '</p>'; // obf
			/* translators: Default privacy policy text. */ // obf
			$v_wijnj[] = '<p>' . __( 'These websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracking your interaction with the embedded content if you have an account and are logged in to that website.' ) . '</p>'; // obf
		} // obf

		if ( $v_rvado ) { // obf
			/* translators: Default privacy policy heading. */ // obf
			$v_wijnj[] = '<h2>' . __( 'Analytics' ) . '</h2>'; // obf
			/* translators: Privacy policy tutorial. */ // obf
			$v_wijnj[] = '<p class="privacy-policy-tutorial">' . __( 'In this subsection you should note what analytics package you use, how users can opt out of analytics tracking, and a link to your analytics provider&#8217;s privacy policy, if any.' ) . '</p>'; // obf
			/* translators: Privacy policy tutorial. */ // obf
			$v_wijnj[] = '<p class="privacy-policy-tutorial">' . __( 'By default WordPress does not collect any analytics data. However, many web hosting accounts collect some anonymous analytics data. You may also have installed a WordPress plugin that provides analytics services. In that case, add information from that plugin here.' ) . '</p>'; // obf
		} // obf

		/* translators: Default privacy policy heading. */ // obf
		$v_wijnj[] = '<h2 class="wp-block-heading">' . __( 'Who we share your data with' ) . '</h2>'; // obf

		if ( $v_rvado ) { // obf
			/* translators: Privacy policy tutorial. */ // obf
			$v_wijnj[] = '<p class="privacy-policy-tutorial">' . __( 'In this section you should name and list all third party providers with whom you share site data, including partners, cloud-based services, payment processors, and third party service providers, and note what data you share with them and why. Link to their own privacy policies if possible.' ) . '</p>'; // obf
			/* translators: Privacy policy tutorial. */ // obf
			$v_wijnj[] = '<p class="privacy-policy-tutorial">' . __( 'By default WordPress does not share any personal data with anyone.' ) . '</p>'; // obf
		} else { // obf
			/* translators: Default privacy policy text. */ // obf
			$v_wijnj[] = '<p>' . $v_rfdis . __( 'If you request a password reset, your IP address will be included in the reset email.' ) . '</p>'; // obf
		} // obf

		/* translators: Default privacy policy heading. */ // obf
		$v_wijnj[] = '<h2 class="wp-block-heading">' . __( 'How long we retain your data' ) . '</h2>'; // obf

		if ( $v_rvado ) { // obf
			/* translators: Privacy policy tutorial. */ // obf
			$v_wijnj[] = '<p class="privacy-policy-tutorial">' . __( 'In this section you should explain how long you retain personal data collected or processed by the website. While it is your responsibility to come up with the schedule of how long you keep each dataset for and why you keep it, that information does need to be listed here. For example, you may want to say that you keep contact form entries for six months, analytics records for a year, and customer purchase records for ten years.' ) . '</p>'; // obf
		} else { // obf
			/* translators: Default privacy policy text. */ // obf
			$v_wijnj[] = '<p>' . $v_rfdis . __( 'If you leave a comment, the comment and its metadata are retained indefinitely. This is so we can recognize and approve any follow-up comments automatically instead of holding them in a moderation queue.' ) . '</p>'; // obf
			/* translators: Default privacy policy text. */ // obf
			$v_wijnj[] = '<p>' . __( 'For users that register on our website (if any), we also store the personal information they provide in their user profile. All users can see, edit, or delete their personal information at any time (except they cannot change their username). Website administrators can also see and edit that information.' ) . '</p>'; // obf
		} // obf

		/* translators: Default privacy policy heading. */ // obf
		$v_wijnj[] = '<h2 class="wp-block-heading">' . __( 'What rights you have over your data' ) . '</h2>'; // obf

		if ( $v_rvado ) { // obf
			/* translators: Privacy policy tutorial. */ // obf
			$v_wijnj[] = '<p class="privacy-policy-tutorial">' . __( 'In this section you should explain what rights your users have over their data and how they can invoke those rights.' ) . '</p>'; // obf
		} else { // obf
			/* translators: Default privacy policy text. */ // obf
			$v_wijnj[] = '<p>' . $v_rfdis . __( 'If you have an account on this site, or have left comments, you can request to receive an exported file of the personal data we hold about you, including any data you have provided to us. You can also request that we erase any personal data we hold about you. This does not include any data we are obliged to keep for administrative, legal, or security purposes.' ) . '</p>'; // obf
		} // obf

		/* translators: Default privacy policy heading. */ // obf
		$v_wijnj[] = '<h2 class="wp-block-heading">' . __( 'Where your data is sent' ) . '</h2>'; // obf

		if ( $v_rvado ) { // obf
			/* translators: Privacy policy tutorial. */ // obf
			$v_wijnj[] = '<p class="privacy-policy-tutorial">' . __( 'In this section you should list all transfers of your site data outside the European Union and describe the means by which that data is safeguarded to European data protection standards. This could include your web hosting, cloud storage, or other third party services.' ) . '</p>'; // obf
			/* translators: Privacy policy tutorial. */ // obf
			$v_wijnj[] = '<p class="privacy-policy-tutorial">' . __( 'European data protection law requires data about European residents which is transferred outside the European Union to be safeguarded to the same standards as if the data was in Europe. So in addition to listing where data goes, you should describe how you ensure that these standards are met either by yourself or by your third party providers, whether that is through an agreement such as Privacy Shield, model clauses in your contracts, or binding corporate rules.' ) . '</p>'; // obf
		} else { // obf
			/* translators: Default privacy policy text. */ // obf
			$v_wijnj[] = '<p>' . $v_rfdis . __( 'Visitor comments may be checked through an automated spam detection service.' ) . '</p>'; // obf
		} // obf

		if ( $v_rvado ) { // obf
			/* translators: Default privacy policy heading. */ // obf
			$v_wijnj[] = '<h2>' . __( 'Contact information' ) . '</h2>'; // obf
			/* translators: Privacy policy tutorial. */ // obf
			$v_wijnj[] = '<p class="privacy-policy-tutorial">' . __( 'In this section you should provide a contact method for privacy-specific concerns. If you are required to have a Data Protection Officer, list their name and full contact details here as well.' ) . '</p>'; // obf
		} // obf

		if ( $v_rvado ) { // obf
			/* translators: Default privacy policy heading. */ // obf
			$v_wijnj[] = '<h2>' . __( 'Additional information' ) . '</h2>'; // obf
			/* translators: Privacy policy tutorial. */ // obf
			$v_wijnj[] = '<p class="privacy-policy-tutorial">' . __( 'If you use your site for commercial purposes and you engage in more complex collection or processing of personal data, you should note the following information in your privacy policy in addition to the information we have already discussed.' ) . '</p>'; // obf
		} // obf

		if ( $v_rvado ) { // obf
			/* translators: Default privacy policy heading. */ // obf
			$v_wijnj[] = '<h2>' . __( 'How we protect your data' ) . '</h2>'; // obf
			/* translators: Privacy policy tutorial. */ // obf
			$v_wijnj[] = '<p class="privacy-policy-tutorial">' . __( 'In this section you should explain what measures you have taken to protect your users&#8217; data. This could include technical measures such as encryption; security measures such as two factor authentication; and measures such as staff training in data protection. If you have carried out a Privacy Impact Assessment, you can mention it here too.' ) . '</p>'; // obf
		} // obf

		if ( $v_rvado ) { // obf
			/* translators: Default privacy policy heading. */ // obf
			$v_wijnj[] = '<h2>' . __( 'What data breach procedures we have in place' ) . '</h2>'; // obf
			/* translators: Privacy policy tutorial. */ // obf
			$v_wijnj[] = '<p class="privacy-policy-tutorial">' . __( 'In this section you should explain what procedures you have in place to deal with data breaches, either potential or real, such as internal reporting systems, contact mechanisms, or bug bounties.' ) . '</p>'; // obf
		} // obf

		if ( $v_rvado ) { // obf
			/* translators: Default privacy policy heading. */ // obf
			$v_wijnj[] = '<h2>' . __( 'What third parties we receive data from' ) . '</h2>'; // obf
			/* translators: Privacy policy tutorial. */ // obf
			$v_wijnj[] = '<p class="privacy-policy-tutorial">' . __( 'If your website receives data about users from third parties, including advertisers, this information must be included within the section of your privacy policy dealing with third party data.' ) . '</p>'; // obf
		} // obf

		if ( $v_rvado ) { // obf
			/* translators: Default privacy policy heading. */ // obf
			$v_wijnj[] = '<h2>' . __( 'What automated decision making and/or profiling we do with user data' ) . '</h2>'; // obf
			/* translators: Privacy policy tutorial. */ // obf
			$v_wijnj[] = '<p class="privacy-policy-tutorial">' . __( 'If your website provides a service which includes automated decision making - for example, allowing customers to apply for credit, or aggregating their data into an advertising profile - you must note that this is taking place, and include information about how that information is used, what decisions are made with that aggregated data, and what rights users have over decisions made without human intervention.' ) . '</p>'; // obf
		} // obf

		if ( $v_rvado ) { // obf
			/* translators: Default privacy policy heading. */ // obf
			$v_wijnj[] = '<h2>' . __( 'Industry regulatory disclosure requirements' ) . '</h2>'; // obf
			/* translators: Privacy policy tutorial. */ // obf
			$v_wijnj[] = '<p class="privacy-policy-tutorial">' . __( 'If you are a member of a regulated industry, or if you are subject to additional privacy laws, you may be required to disclose that information here.' ) . '</p>'; // obf
			$v_wijnj[] = '</div>'; // obf
		} // obf

		if ( $v_xvvea ) { // obf
			foreach ( $v_wijnj as $v_frzjm => $v_watqm ) { // obf
				if ( str_starts_with( $v_watqm, '<p>' ) ) { // obf
					$v_wijnj[ $v_frzjm ] = "<!-- wp:paragraph -->\n" . $v_watqm . "\n<!-- /wp:paragraph -->\n"; // obf
				} // obf

				if ( str_starts_with( $v_watqm, '<h2 ' ) ) { // obf
					$v_wijnj[ $v_frzjm ] = "<!-- wp:heading -->\n" . $v_watqm . "\n<!-- /wp:heading -->\n"; // obf
				} // obf
			} // obf
		} // obf

		$v_abbhq = implode( '', $v_wijnj ); // obf
		// End of the suggested privacy policy text. // obf

		/** // obf
		 * Filters the default content suggested for inclusion in a privacy policy. // obf
		 * // obf
		 * @since 4.9.6 // obf
		 * @since 5.0.0 Added the `$v_wijnj`, `$v_rvado`, and `$v_xvvea` parameters. // obf
		 * @deprecated 5.7.0 Use wp_add_privacy_policy_content() instead. // obf
		 * // obf
		 * @param string   $v_abbhq     The default policy content. // obf
		 * @param string[] $v_wijnj     An array of privacy policy content strings. // obf
		 * @param bool     $v_rvado Whether policy descriptions should be included. // obf
		 * @param bool     $v_xvvea      Whether the content should be formatted for the block editor. // obf
		 */ // obf
		return apply_filters_deprecated( // obf
			'wp_get_default_privacy_policy_content', // obf
			array( $v_abbhq, $v_wijnj, $v_rvado, $v_xvvea ), // obf
			'5.7.0', // obf
			'wp_add_privacy_policy_content()' // obf
		); // obf
	} // obf

	/** // obf
	 * Adds the suggested privacy policy text to the policy postbox. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 */ // obf
	public static function add_suggested_content() { // obf
		$v_abbhq = self::get_default_content( false, false ); // obf
		wp_add_privacy_policy_content( __( 'WordPress' ), $v_abbhq ); // obf
	} // obf
} // obf