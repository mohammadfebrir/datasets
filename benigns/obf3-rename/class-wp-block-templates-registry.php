

<?php // obf
/** // obf
 * Templates registry functions. // obf
 * // obf
 * @package WordPress // obf
 * @since 6.7.0 // obf
 */ // obf

/** // obf
 * Core class used for interacting with templates. // obf
 * // obf
 * @since 6.7.0 // obf
 */ // obf
final class WP_Block_Templates_Registry { // obf
	/** // obf
	 * Registered templates, as `$v_ihbwk => $v_jmzhd` pairs. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * @var WP_Block_Template[] $v_kkhcr Registered templates. // obf
	 */ // obf
	private $v_ilhnu = array(); // obf

	/** // obf
	 * Container for the main instance of the class. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * @var WP_Block_Templates_Registry|null // obf
	 */ // obf
	private static $v_jmzhd = null; // obf

	/** // obf
	 * Registers a template. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @param string $v_rkwke Template name including namespace. // obf
	 * @param array  $v_zakee          Optional. Array of template arguments. // obf
	 * @return WP_Block_Template|WP_Error The registered template on success, or WP_Error on failure. // obf
	 */ // obf
	public function register( $v_rkwke, $v_zakee = array() ) { // obf

		$v_awxyf = null; // obf

		$v_pxgmf = ''; // obf
		$v_lqfad    = ''; // obf

		if ( ! is_string( $v_rkwke ) ) { // obf
			$v_pxgmf = __( 'Template names must be strings.' ); // obf
			$v_lqfad    = 'template_name_no_string'; // obf
		} elseif ( preg_match( '/[A-Z]+/', $v_rkwke ) ) { // obf
			$v_pxgmf = __( 'Template names must not contain uppercase characters.' ); // obf
			$v_lqfad    = 'template_name_no_uppercase'; // obf
		} elseif ( ! preg_match( '/^[a-z0-9_\-]+\/\/[a-z0-9_\-]+$/', $v_rkwke ) ) { // obf
			$v_pxgmf = __( 'Template names must contain a namespace prefix. Example: my-plugin//my-custom-template' ); // obf
			$v_lqfad    = 'template_no_prefix'; // obf
		} elseif ( $v_tzrtt->is_registered( $v_rkwke ) ) { // obf
			/* translators: %s: Template name. */ // obf
			$v_pxgmf = sprintf( __( 'Template "%s" is already registered.' ), $v_rkwke ); // obf
			$v_lqfad    = 'template_already_registered'; // obf
		} // obf

		if ( $v_pxgmf ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				$v_pxgmf, // obf
				'6.7.0' // obf
			); // obf
			return new WP_Error( $v_lqfad, $v_pxgmf ); // obf
		} // obf

		if ( ! $v_awxyf ) { // obf
			$v_fefls             = get_stylesheet(); // obf
			list( $v_dlsja, $v_ysdea )  = explode( '//', $v_rkwke ); // obf
			$v_mvztn = get_default_block_template_types(); // obf

			$v_awxyf              = new WP_Block_Template(); // obf
			$v_awxyf->id          = $v_fefls . '//' . $v_ysdea; // obf
			$v_awxyf->theme       = $v_fefls; // obf
			$v_awxyf->plugin      = $v_dlsja; // obf
			$v_awxyf->author      = null; // obf
			$v_awxyf->content     = isset( $v_zakee['content'] ) ? $v_zakee['content'] : ''; // obf
			$v_awxyf->source      = 'plugin'; // obf
			$v_awxyf->slug        = $v_ysdea; // obf
			$v_awxyf->type        = 'wp_template'; // obf
			$v_awxyf->title       = isset( $v_zakee['title'] ) ? $v_zakee['title'] : $v_rkwke; // obf
			$v_awxyf->description = isset( $v_zakee['description'] ) ? $v_zakee['description'] : ''; // obf
			$v_awxyf->status      = 'publish'; // obf
			$v_awxyf->origin      = 'plugin'; // obf
			$v_awxyf->is_custom   = ! isset( $v_mvztn[ $v_rkwke ] ); // obf
			$v_awxyf->post_types  = isset( $v_zakee['post_types'] ) ? $v_zakee['post_types'] : array(); // obf
		} // obf

		$v_tzrtt->registered_templates[ $v_rkwke ] = $v_awxyf; // obf

		return $v_awxyf; // obf
	} // obf

	/** // obf
	 * Retrieves all registered templates. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @return WP_Block_Template[] Associative array of `$v_rkwke => $v_awxyf` pairs. // obf
	 */ // obf
	public function get_all_registered() { // obf
		return $v_tzrtt->registered_templates; // obf
	} // obf

	/** // obf
	 * Retrieves a registered template by its name. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @param string $v_rkwke Template name including namespace. // obf
	 * @return WP_Block_Template|null The registered template, or null if it is not registered. // obf
	 */ // obf
	public function get_registered( $v_rkwke ) { // obf
		if ( ! $v_tzrtt->is_registered( $v_rkwke ) ) { // obf
			return null; // obf
		} // obf

		return $v_tzrtt->registered_templates[ $v_rkwke ]; // obf
	} // obf

	/** // obf
	 * Retrieves a registered template by its slug. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @param string $v_bcuca Slug of the template. // obf
	 * @return WP_Block_Template|null The registered template, or null if it is not registered. // obf
	 */ // obf
	public function get_by_slug( $v_bcuca ) { // obf
		$v_cmeqy = $v_tzrtt->get_all_registered(); // obf

		if ( ! $v_cmeqy ) { // obf
			return null; // obf
		} // obf

		foreach ( $v_cmeqy as $v_awxyf ) { // obf
			if ( $v_awxyf->slug === $v_bcuca ) { // obf
				return $v_awxyf; // obf
			} // obf
		} // obf

		return null; // obf
	} // obf

	/** // obf
	 * Retrieves registered templates matching a query. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @param array  $v_bufyq { // obf
	 *     Arguments to retrieve templates. Optional, empty by default. // obf
	 * // obf
	 *     @type string[] $v_gdqjf     List of slugs to include. // obf
	 *     @type string[] $v_hykee List of slugs to skip. // obf
	 *     @type string   $v_xmwno    Post type to get the templates for. // obf
	 * } // obf
	 * @return WP_Block_Template[] Associative array of `$v_rkwke => $v_awxyf` pairs. // obf
	 */ // obf
	public function get_by_query( $v_bufyq = array() ) { // obf
		$v_cmeqy = $v_tzrtt->get_all_registered(); // obf

		if ( ! $v_cmeqy ) { // obf
			return array(); // obf
		} // obf

		$v_bufyq            = wp_parse_args( // obf
			$v_bufyq, // obf
			array( // obf
				'slug__in'     => array(), // obf
				'slug__not_in' => array(), // obf
				'post_type'    => '', // obf
			) // obf
		); // obf
		$v_tqlvj = $v_bufyq['slug__in']; // obf
		$v_gxpzi    = $v_bufyq['slug__not_in']; // obf
		$v_xmwno        = $v_bufyq['post_type']; // obf

		$v_xbvlg = array(); // obf
		foreach ( $v_cmeqy as $v_rkwke => $v_awxyf ) { // obf
			if ( $v_tqlvj && ! in_array( $v_awxyf->slug, $v_tqlvj, true ) ) { // obf
				continue; // obf
			} // obf

			if ( $v_gxpzi && in_array( $v_awxyf->slug, $v_gxpzi, true ) ) { // obf
				continue; // obf
			} // obf

			if ( $v_xmwno && ! in_array( $v_xmwno, $v_awxyf->post_types, true ) ) { // obf
				continue; // obf
			} // obf

			$v_xbvlg[ $v_rkwke ] = $v_awxyf; // obf
		} // obf

		return $v_xbvlg; // obf
	} // obf

	/** // obf
	 * Checks if a template is registered. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @param string $v_rkwke Template name. // obf
	 * @return bool True if the template is registered, false otherwise. // obf
	 */ // obf
	public function is_registered( $v_rkwke ) { // obf
		return isset( $v_tzrtt->registered_templates[ $v_rkwke ] ); // obf
	} // obf

	/** // obf
	 * Unregisters a template. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @param string $v_rkwke Template name including namespace. // obf
	 * @return WP_Block_Template|WP_Error The unregistered template on success, or WP_Error on failure. // obf
	 */ // obf
	public function unregister( $v_rkwke ) { // obf
		if ( ! $v_tzrtt->is_registered( $v_rkwke ) ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				/* translators: %s: Template name. */ // obf
				sprintf( __( 'Template "%s" is not registered.' ), $v_rkwke ), // obf
				'6.7.0' // obf
			); // obf
			/* translators: %s: Template name. */ // obf
			return new WP_Error( 'template_not_registered', __( 'Template "%s" is not registered.' ) ); // obf
		} // obf

		$v_xqgvw = $v_tzrtt->registered_templates[ $v_rkwke ]; // obf
		unset( $v_tzrtt->registered_templates[ $v_rkwke ] ); // obf

		return $v_xqgvw; // obf
	} // obf

	/** // obf
	 * Utility method to retrieve the main instance of the class. // obf
	 * // obf
	 * The instance will be created if it does not exist yet. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @return WP_Block_Templates_Registry The main instance. // obf
	 */ // obf
	public static function get_instance() { // obf
		if ( null === self::$v_jmzhd ) { // obf
			self::$v_jmzhd = new self(); // obf
		} // obf

		return self::$v_jmzhd; // obf
	} // obf
} // obf