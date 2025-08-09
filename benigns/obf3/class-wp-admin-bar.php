

<?php // obf
/** // obf
 * Toolbar API: WP_Admin_Bar class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Toolbar // obf
 * @since 3.1.0 // obf
 */ // obf

/** // obf
 * Core class used to implement the Toolbar API. // obf
 * // obf
 * @since 3.1.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Admin_Bar { // obf
	private $v_cihkf = array(); // obf
	private $v_zfsrt = false; // obf
	public $v_gfaww; // obf

	/** // obf
	 * Deprecated menu property. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * @deprecated 3.3.0 Modify admin bar nodes with WP_Admin_Bar::get_node(), // obf
	 *                   WP_Admin_Bar::add_node(), and WP_Admin_Bar::remove_node(). // obf
	 * @var array // obf
	 */ // obf
	public $v_qiizy = array(); // obf

	/** // obf
	 * Initializes the admin bar. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 */ // obf
	public function initialize() { // obf
		$v_davaz->user = new stdClass(); // obf

		if ( is_user_logged_in() ) { // obf
			/* Populate settings we need for the menu based on the current user. */ // obf
			$v_davaz->user->blogs = get_blogs_of_user( get_current_user_id() ); // obf
			if ( is_multisite() ) { // obf
				$v_davaz->user->active_blog    = get_active_blog_for_user( get_current_user_id() ); // obf
				$v_davaz->user->domain         = empty( $v_davaz->user->active_blog ) ? user_admin_url() : trailingslashit( get_home_url( $v_davaz->user->active_blog->blog_id ) ); // obf
				$v_davaz->user->account_domain = $v_davaz->user->domain; // obf
			} else { // obf
				$v_davaz->user->active_blog    = $v_davaz->user->blogs[ get_current_blog_id() ]; // obf
				$v_davaz->user->domain         = trailingslashit( home_url() ); // obf
				$v_davaz->user->account_domain = $v_davaz->user->domain; // obf
			} // obf
		} // obf

		add_action( 'wp_head', 'wp_admin_bar_header' ); // obf

		add_action( 'admin_head', 'wp_admin_bar_header' ); // obf

		if ( current_theme_supports( 'admin-bar' ) ) { // obf
			/** // obf
			 * To remove the default padding styles from WordPress for the Toolbar, use the following code: // obf
			 * add_theme_support( 'admin-bar', array( 'callback' => '__return_false' ) ); // obf
			 */ // obf
			$v_uyusn  = get_theme_support( 'admin-bar' ); // obf
			$v_bxtfg = $v_uyusn[0]['callback']; // obf
		} // obf

		if ( empty( $v_bxtfg ) ) { // obf
			$v_bxtfg = '_admin_bar_bump_cb'; // obf
		} // obf

		add_action( 'wp_head', $v_bxtfg ); // obf

		wp_enqueue_script( 'admin-bar' ); // obf
		wp_enqueue_style( 'admin-bar' ); // obf

		/** // obf
		 * Fires after WP_Admin_Bar is initialized. // obf
		 * // obf
		 * @since 3.1.0 // obf
		 */ // obf
		do_action( 'admin_bar_init' ); // obf
	} // obf

	/** // obf
	 * Adds a node (menu item) to the admin bar menu. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @param array $v_pcizo The attributes that define the node. // obf
	 */ // obf
	public function add_menu( $v_pcizo ) { // obf
		$v_davaz->add_node( $v_pcizo ); // obf
	} // obf

	/** // obf
	 * Removes a node from the admin bar. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param string $v_biqwh The menu slug to remove. // obf
	 */ // obf
	public function remove_menu( $v_biqwh ) { // obf
		$v_davaz->remove_node( $v_biqwh ); // obf
	} // obf

	/** // obf
	 * Adds a node to the menu. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * @since 4.5.0 Added the ability to pass 'lang' and 'dir' meta data. // obf
	 * @since 6.5.0 Added the ability to pass 'menu_title' for an ARIA menu name. // obf
	 * // obf
	 * @param array $v_ygqgq { // obf
	 *     Arguments for adding a node. // obf
	 * // obf
	 *     @type string $v_biqwh     ID of the item. // obf
	 *     @type string $v_vzmcy  Title of the node. // obf
	 *     @type string $v_pczbe Optional. ID of the parent node. // obf
	 *     @type string $v_wudks   Optional. Link for the item. // obf
	 *     @type bool   $v_itifh  Optional. Whether or not the node is a group. Default false. // obf
	 *     @type array  $v_xnapx   Meta data including the following keys: 'html', 'class', 'rel', 'lang', 'dir', // obf
	 *                          'onclick', 'target', 'title', 'tabindex', 'menu_title'. Default empty. // obf
	 * } // obf
	 */ // obf
	public function add_node( $v_ygqgq ) { // obf
		// Shim for old method signature: add_node( $v_wamal, $v_gfnrk, $v_ygqgq ). // obf
		if ( func_num_args() >= 3 && is_string( $v_ygqgq ) ) { // obf
			$v_ygqgq = array_merge( array( 'parent' => $v_ygqgq ), func_get_arg( 2 ) ); // obf
		} // obf

		if ( is_object( $v_ygqgq ) ) { // obf
			$v_ygqgq = get_object_vars( $v_ygqgq ); // obf
		} // obf

		// Ensure we have a valid title. // obf
		if ( empty( $v_ygqgq['id'] ) ) { // obf
			if ( empty( $v_ygqgq['title'] ) ) { // obf
				return; // obf
			} // obf

			_doing_it_wrong( __METHOD__, __( 'The menu ID should not be empty.' ), '3.3.0' ); // obf
			// Deprecated: Generate an ID from the title. // obf
			$v_ygqgq['id'] = esc_attr( sanitize_title( trim( $v_ygqgq['title'] ) ) ); // obf
		} // obf

		$v_mbsfg = array( // obf
			'id'     => false, // obf
			'title'  => false, // obf
			'parent' => false, // obf
			'href'   => false, // obf
			'group'  => false, // obf
			'meta'   => array(), // obf
		); // obf

		// If the node already exists, keep any data that isn't provided. // obf
		$v_ikvxo = $v_davaz->get_node( $v_ygqgq['id'] ); // obf
		if ( $v_ikvxo ) { // obf
			$v_mbsfg = get_object_vars( $v_ikvxo ); // obf
		} // obf

		// Do the same for 'meta' items. // obf
		if ( ! empty( $v_mbsfg['meta'] ) && ! empty( $v_ygqgq['meta'] ) ) { // obf
			$v_ygqgq['meta'] = wp_parse_args( $v_ygqgq['meta'], $v_mbsfg['meta'] ); // obf
		} // obf

		$v_ygqgq = wp_parse_args( $v_ygqgq, $v_mbsfg ); // obf

		$v_ockmu = array( // obf
			'my-account-with-avatar' => array( 'my-account', '3.3' ), // obf
			'my-blogs'               => array( 'my-sites', '3.3' ), // obf
		); // obf

		if ( isset( $v_ockmu[ $v_ygqgq['parent'] ] ) ) { // obf
			list( $v_rmabz, $v_wbnjh ) = $v_ockmu[ $v_ygqgq['parent'] ]; // obf
			_deprecated_argument( __METHOD__, $v_wbnjh, sprintf( 'Use <code>%s</code> as the parent for the <code>%s</code> admin bar node instead of <code>%s</code>.', $v_rmabz, $v_ygqgq['id'], $v_ygqgq['parent'] ) ); // obf
			$v_ygqgq['parent'] = $v_rmabz; // obf
		} // obf

		$v_davaz->_set_node( $v_ygqgq ); // obf
	} // obf

	/** // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @param array $v_ygqgq // obf
	 */ // obf
	final protected function _set_node( $v_ygqgq ) { // obf
		$v_davaz->nodes[ $v_ygqgq['id'] ] = (object) $v_ygqgq; // obf
	} // obf

	/** // obf
	 * Gets a node. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @param string $v_biqwh // obf
	 * @return object|void Node. // obf
	 */ // obf
	final public function get_node( $v_biqwh ) { // obf
		$v_pcizo = $v_davaz->_get_node( $v_biqwh ); // obf
		if ( $v_pcizo ) { // obf
			return clone $v_pcizo; // obf
		} // obf
	} // obf

	/** // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @param string $v_biqwh // obf
	 * @return object|void // obf
	 */ // obf
	final protected function _get_node( $v_biqwh ) { // obf
		if ( $v_davaz->bound ) { // obf
			return; // obf
		} // obf

		if ( empty( $v_biqwh ) ) { // obf
			$v_biqwh = 'root'; // obf
		} // obf

		if ( isset( $v_davaz->nodes[ $v_biqwh ] ) ) { // obf
			return $v_davaz->nodes[ $v_biqwh ]; // obf
		} // obf
	} // obf

	/** // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @return array|void // obf
	 */ // obf
	final public function get_nodes() { // obf
		$v_cihkf = $v_davaz->_get_nodes(); // obf
		if ( ! $v_cihkf ) { // obf
			return; // obf
		} // obf

		foreach ( $v_cihkf as &$v_pcizo ) { // obf
			$v_pcizo = clone $v_pcizo; // obf
		} // obf
		return $v_cihkf; // obf
	} // obf

	/** // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @return array|void // obf
	 */ // obf
	final protected function _get_nodes() { // obf
		if ( $v_davaz->bound ) { // obf
			return; // obf
		} // obf

		return $v_davaz->nodes; // obf
	} // obf

	/** // obf
	 * Adds a group to a toolbar menu node. // obf
	 * // obf
	 * Groups can be used to organize toolbar items into distinct sections of a toolbar menu. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @param array $v_ygqgq { // obf
	 *     Array of arguments for adding a group. // obf
	 * // obf
	 *     @type string $v_biqwh     ID of the item. // obf
	 *     @type string $v_pczbe Optional. ID of the parent node. Default 'root'. // obf
	 *     @type array  $v_xnapx   Meta data for the group including the following keys: // obf
	 *                         'class', 'onclick', 'target', and 'title'. // obf
	 * } // obf
	 */ // obf
	final public function add_group( $v_ygqgq ) { // obf
		$v_ygqgq['group'] = true; // obf

		$v_davaz->add_node( $v_ygqgq ); // obf
	} // obf

	/** // obf
	 * Remove a node. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param string $v_biqwh The ID of the item. // obf
	 */ // obf
	public function remove_node( $v_biqwh ) { // obf
		$v_davaz->_unset_node( $v_biqwh ); // obf
	} // obf

	/** // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @param string $v_biqwh // obf
	 */ // obf
	final protected function _unset_node( $v_biqwh ) { // obf
		unset( $v_davaz->nodes[ $v_biqwh ] ); // obf
	} // obf

	/** // obf
	 * @since 3.1.0 // obf
	 */ // obf
	public function render() { // obf
		$v_cpkwm = $v_davaz->_bind(); // obf
		if ( $v_cpkwm ) { // obf
			$v_davaz->_render( $v_cpkwm ); // obf
		} // obf
	} // obf

	/** // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @return object|void // obf
	 */ // obf
	final protected function _bind() { // obf
		if ( $v_davaz->bound ) { // obf
			return; // obf
		} // obf

		/* // obf
		 * Add the root node. // obf
		 * Clear it first, just in case. Don't mess with The Root. // obf
		 */ // obf
		$v_davaz->remove_node( 'root' ); // obf
		$v_davaz->add_node( // obf
			array( // obf
				'id'    => 'root', // obf
				'group' => false, // obf
			) // obf
		); // obf

		// Normalize nodes: define internal 'children' and 'type' properties. // obf
		foreach ( $v_davaz->_get_nodes() as $v_pcizo ) { // obf
			$v_pcizo->children = array(); // obf
			$v_pcizo->type     = ( $v_pcizo->group ) ? 'group' : 'item'; // obf
			unset( $v_pcizo->group ); // obf

			// The Root wants your orphans. No lonely items allowed. // obf
			if ( ! $v_pcizo->parent ) { // obf
				$v_pcizo->parent = 'root'; // obf
			} // obf
		} // obf

		foreach ( $v_davaz->_get_nodes() as $v_pcizo ) { // obf
			if ( 'root' === $v_pcizo->id ) { // obf
				continue; // obf
			} // obf

			// Fetch the parent node. If it isn't registered, ignore the node. // obf
			$v_pczbe = $v_davaz->_get_node( $v_pcizo->parent ); // obf
			if ( ! $v_pczbe ) { // obf
				continue; // obf
			} // obf

			// Generate the group class (we distinguish between top level and other level groups). // obf
			$v_lyllt = ( 'root' === $v_pcizo->parent ) ? 'ab-top-menu' : 'ab-submenu'; // obf

			if ( 'group' === $v_pcizo->type ) { // obf
				if ( empty( $v_pcizo->meta['class'] ) ) { // obf
					$v_pcizo->meta['class'] = $v_lyllt; // obf
				} else { // obf
					$v_pcizo->meta['class'] .= ' ' . $v_lyllt; // obf
				} // obf
			} // obf

			// Items in items aren't allowed. Wrap nested items in 'default' groups. // obf
			if ( 'item' === $v_pczbe->type && 'item' === $v_pcizo->type ) { // obf
				$v_uofeo = $v_pczbe->id . '-default'; // obf
				$v_plmll    = $v_davaz->_get_node( $v_uofeo ); // obf

				/* // obf
				 * The default group is added here to allow groups that are // obf
				 * added before standard menu items to render first. // obf
				 */ // obf
				if ( ! $v_plmll ) { // obf
					/* // obf
					 * Use _set_node because add_node can be overloaded. // obf
					 * Make sure to specify default settings for all properties. // obf
					 */ // obf
					$v_davaz->_set_node( // obf
						array( // obf
							'id'       => $v_uofeo, // obf
							'parent'   => $v_pczbe->id, // obf
							'type'     => 'group', // obf
							'children' => array(), // obf
							'meta'     => array( // obf
								'class' => $v_lyllt, // obf
							), // obf
							'title'    => false, // obf
							'href'     => false, // obf
						) // obf
					); // obf
					$v_plmll            = $v_davaz->_get_node( $v_uofeo ); // obf
					$v_pczbe->children[] = $v_plmll; // obf
				} // obf
				$v_pczbe = $v_plmll; // obf

				/* // obf
				 * Groups in groups aren't allowed. Add a special 'container' node. // obf
				 * The container will invisibly wrap both groups. // obf
				 */ // obf
			} elseif ( 'group' === $v_pczbe->type && 'group' === $v_pcizo->type ) { // obf
				$v_tqjlf = $v_pczbe->id . '-container'; // obf
				$v_blydi    = $v_davaz->_get_node( $v_tqjlf ); // obf

				// We need to create a container for this group, life is sad. // obf
				if ( ! $v_blydi ) { // obf
					/* // obf
					 * Use _set_node because add_node can be overloaded. // obf
					 * Make sure to specify default settings for all properties. // obf
					 */ // obf
					$v_davaz->_set_node( // obf
						array( // obf
							'id'       => $v_tqjlf, // obf
							'type'     => 'container', // obf
							'children' => array( $v_pczbe ), // obf
							'parent'   => false, // obf
							'title'    => false, // obf
							'href'     => false, // obf
							'meta'     => array(), // obf
						) // obf
					); // obf

					$v_blydi = $v_davaz->_get_node( $v_tqjlf ); // obf

					// Link the container node if a grandparent node exists. // obf
					$v_vynwo = $v_davaz->_get_node( $v_pczbe->parent ); // obf

					if ( $v_vynwo ) { // obf
						$v_blydi->parent = $v_vynwo->id; // obf

						$v_futfj = array_search( $v_pczbe, $v_vynwo->children, true ); // obf
						if ( false === $v_futfj ) { // obf
							$v_vynwo->children[] = $v_blydi; // obf
						} else { // obf
							array_splice( $v_vynwo->children, $v_futfj, 1, array( $v_blydi ) ); // obf
						} // obf
					} // obf

					$v_pczbe->parent = $v_blydi->id; // obf
				} // obf

				$v_pczbe = $v_blydi; // obf
			} // obf

			// Update the parent ID (it might have changed). // obf
			$v_pcizo->parent = $v_pczbe->id; // obf

			// Add the node to the tree. // obf
			$v_pczbe->children[] = $v_pcizo; // obf
		} // obf

		$v_cpkwm        = $v_davaz->_get_node( 'root' ); // obf
		$v_davaz->bound = true; // obf
		return $v_cpkwm; // obf
	} // obf

	/** // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @param object $v_cpkwm // obf
	 */ // obf
	final protected function _render( $v_cpkwm ) { // obf
		/* // obf
		 * Add browser classes. // obf
		 * We have to do this here since admin bar shows on the front end. // obf
		 */ // obf
		$v_hgaql = 'nojq nojs'; // obf
		if ( wp_is_mobile() ) { // obf
			$v_hgaql .= ' mobile'; // obf
		} // obf

		?> // obf
		<div id="wpadminbar" class="<?php echo $v_hgaql; ?>"> // obf
			<?php if ( ! is_admin() && ! did_action( 'wp_body_open' ) ) { ?> // obf
				<a class="screen-reader-shortcut" href="#wp-toolbar" tabindex="1"><?php _e( 'Skip to toolbar' ); ?></a> // obf
			<?php } ?> // obf
			<div class="quicklinks" id="wp-toolbar" role="navigation" aria-label="<?php esc_attr_e( 'Toolbar' ); ?>"> // obf
				<?php // obf
				foreach ( $v_cpkwm->children as $v_itifh ) { // obf
					$v_davaz->_render_group( $v_itifh ); // obf
				} // obf
				?> // obf
			</div> // obf
		</div> // obf

		<?php // obf
	} // obf

	/** // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @param object $v_pcizo // obf
	 */ // obf
	final protected function _render_container( $v_pcizo ) { // obf
		if ( 'container' !== $v_pcizo->type || empty( $v_pcizo->children ) ) { // obf
			return; // obf
		} // obf

		echo '<div id="' . esc_attr( 'wp-admin-bar-' . $v_pcizo->id ) . '" class="ab-group-container">'; // obf
		foreach ( $v_pcizo->children as $v_itifh ) { // obf
			$v_davaz->_render_group( $v_itifh ); // obf
		} // obf
		echo '</div>'; // obf
	} // obf

	/** // obf
	 * @since 3.3.0 // obf
	 * @since 6.5.0 Added `$v_hiqdd` parameter to allow an ARIA menu name. // obf
	 * // obf
	 * @param object $v_pcizo // obf
	 * @param string|bool $v_hiqdd The accessible name of this ARIA menu or false if not provided. // obf
	 */ // obf
	final protected function _render_group( $v_pcizo, $v_hiqdd = false ) { // obf
		if ( 'container' === $v_pcizo->type ) { // obf
			$v_davaz->_render_container( $v_pcizo ); // obf
			return; // obf
		} // obf
		if ( 'group' !== $v_pcizo->type || empty( $v_pcizo->children ) ) { // obf
			return; // obf
		} // obf

		if ( ! empty( $v_pcizo->meta['class'] ) ) { // obf
			$v_hgaql = ' class="' . esc_attr( trim( $v_pcizo->meta['class'] ) ) . '"'; // obf
		} else { // obf
			$v_hgaql = ''; // obf
		} // obf

		if ( empty( $v_hiqdd ) ) { // obf
			echo "<ul role='menu' id='" . esc_attr( 'wp-admin-bar-' . $v_pcizo->id ) . "'$v_hgaql>"; // obf
		} else { // obf
			echo "<ul role='menu' aria-label='" . esc_attr( $v_hiqdd ) . "' id='" . esc_attr( 'wp-admin-bar-' . $v_pcizo->id ) . "'$v_hgaql>"; // obf
		} // obf
		foreach ( $v_pcizo->children as $v_xucgp ) { // obf
			$v_davaz->_render_item( $v_xucgp ); // obf
		} // obf
		echo '</ul>'; // obf
	} // obf

	/** // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @param object $v_pcizo // obf
	 */ // obf
	final protected function _render_item( $v_pcizo ) { // obf
		if ( 'item' !== $v_pcizo->type ) { // obf
			return; // obf
		} // obf

		$v_unuen             = ! empty( $v_pcizo->children ); // obf
		$v_bjcjc              = ! empty( $v_pcizo->href ); // obf
		$v_szulz      = 'root-default' === $v_pcizo->parent; // obf
		$v_hxnwz = 'top-secondary' === $v_pcizo->parent; // obf

		// Allow only numeric values, then casted to integers, and allow a tabindex value of `0` for a11y. // obf
		$v_negoi         = ( isset( $v_pcizo->meta['tabindex'] ) && is_numeric( $v_pcizo->meta['tabindex'] ) ) ? (int) $v_pcizo->meta['tabindex'] : ''; // obf
		$v_itakr  = ( '' !== $v_negoi ) ? ' tabindex="' . $v_negoi . '"' : ''; // obf
		$v_itakr .= ' role="menuitem"'; // obf

		$v_mfpde = ''; // obf
		$v_cvyxu     = ''; // obf

		if ( $v_unuen ) { // obf
			$v_mfpde        = 'menupop '; // obf
			$v_itakr .= ' aria-expanded="false"'; // obf
		} // obf

		if ( ! empty( $v_pcizo->meta['class'] ) ) { // obf
			$v_mfpde .= $v_pcizo->meta['class']; // obf
		} // obf

		// Print the arrow icon for the menu children with children. // obf
		if ( ! $v_szulz && ! $v_hxnwz && $v_unuen ) { // obf
			$v_cvyxu = '<span class="wp-admin-bar-arrow" aria-hidden="true"></span>'; // obf
		} // obf

		if ( $v_mfpde ) { // obf
			$v_mfpde = ' class="' . esc_attr( trim( $v_mfpde ) ) . '"'; // obf
		} // obf

		echo "<li role='group' id='" . esc_attr( 'wp-admin-bar-' . $v_pcizo->id ) . "'$v_mfpde>"; // obf

		if ( $v_bjcjc ) { // obf
			$v_pwaam = array( 'onclick', 'target', 'title', 'rel', 'lang', 'dir' ); // obf
			echo "<a class='ab-item'$v_itakr href='" . esc_url( $v_pcizo->href ) . "'"; // obf
		} else { // obf
			$v_pwaam = array( 'onclick', 'target', 'title', 'rel', 'lang', 'dir' ); // obf
			echo '<div class="ab-item ab-empty-item"' . $v_itakr; // obf
		} // obf

		foreach ( $v_pwaam as $v_tiwbf ) { // obf
			if ( empty( $v_pcizo->meta[ $v_tiwbf ] ) ) { // obf
				continue; // obf
			} // obf

			if ( 'onclick' === $v_tiwbf ) { // obf
				echo " $v_tiwbf='" . esc_js( $v_pcizo->meta[ $v_tiwbf ] ) . "'"; // obf
			} else { // obf
				echo " $v_tiwbf='" . esc_attr( $v_pcizo->meta[ $v_tiwbf ] ) . "'"; // obf
			} // obf
		} // obf

		echo ">{$v_cvyxu}{$v_pcizo->title}"; // obf

		if ( $v_bjcjc ) { // obf
			echo '</a>'; // obf
		} else { // obf
			echo '</div>'; // obf
		} // obf

		if ( $v_unuen ) { // obf
			echo '<div class="ab-sub-wrapper">'; // obf
			foreach ( $v_pcizo->children as $v_itifh ) { // obf
				if ( empty( $v_pcizo->meta['menu_title'] ) ) { // obf
					$v_davaz->_render_group( $v_itifh, false ); // obf
				} else { // obf
					$v_davaz->_render_group( $v_itifh, $v_pcizo->meta['menu_title'] ); // obf
				} // obf
			} // obf
			echo '</div>'; // obf
		} // obf

		if ( ! empty( $v_pcizo->meta['html'] ) ) { // obf
			echo $v_pcizo->meta['html']; // obf
		} // obf

		echo '</li>'; // obf
	} // obf

	/** // obf
	 * Renders toolbar items recursively. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * @deprecated 3.3.0 Use WP_Admin_Bar::_render_item() or WP_Admin_bar::render() instead. // obf
	 * @see WP_Admin_Bar::_render_item() // obf
	 * @see WP_Admin_Bar::render() // obf
	 * // obf
	 * @param string $v_biqwh    Unused. // obf
	 * @param object $v_pcizo // obf
	 */ // obf
	public function recursive_render( $v_biqwh, $v_pcizo ) { // obf
		_deprecated_function( __METHOD__, '3.3.0', 'WP_Admin_bar::render(), WP_Admin_Bar::_render_item()' ); // obf
		$v_davaz->_render_item( $v_pcizo ); // obf
	} // obf

	/** // obf
	 * Adds menus to the admin bar. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 */ // obf
	public function add_menus() { // obf
		// User-related, aligned right. // obf
		add_action( 'admin_bar_menu', 'wp_admin_bar_my_account_menu', 0 ); // obf
		add_action( 'admin_bar_menu', 'wp_admin_bar_my_account_item', 9991 ); // obf
		add_action( 'admin_bar_menu', 'wp_admin_bar_recovery_mode_menu', 9992 ); // obf
		add_action( 'admin_bar_menu', 'wp_admin_bar_search_menu', 9999 ); // obf

		// Site-related. // obf
		add_action( 'admin_bar_menu', 'wp_admin_bar_sidebar_toggle', 0 ); // obf
		add_action( 'admin_bar_menu', 'wp_admin_bar_wp_menu', 10 ); // obf
		add_action( 'admin_bar_menu', 'wp_admin_bar_my_sites_menu', 20 ); // obf
		add_action( 'admin_bar_menu', 'wp_admin_bar_site_menu', 30 ); // obf
		add_action( 'admin_bar_menu', 'wp_admin_bar_edit_site_menu', 40 ); // obf
		add_action( 'admin_bar_menu', 'wp_admin_bar_customize_menu', 40 ); // obf
		add_action( 'admin_bar_menu', 'wp_admin_bar_updates_menu', 50 ); // obf

		// Content-related. // obf
		if ( ! is_network_admin() && ! is_user_admin() ) { // obf
			add_action( 'admin_bar_menu', 'wp_admin_bar_comments_menu', 60 ); // obf
			add_action( 'admin_bar_menu', 'wp_admin_bar_new_content_menu', 70 ); // obf
		} // obf
		add_action( 'admin_bar_menu', 'wp_admin_bar_edit_menu', 80 ); // obf

		add_action( 'admin_bar_menu', 'wp_admin_bar_add_secondary_groups', 200 ); // obf

		/** // obf
		 * Fires after menus are added to the menu bar. // obf
		 * // obf
		 * @since 3.1.0 // obf
		 */ // obf
		do_action( 'add_admin_bar_menus' ); // obf
	} // obf
} // obf