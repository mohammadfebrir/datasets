

<?php // obf
/** // obf
 * WP_Navigation_Fallback class // obf
 * // obf
 * Manages fallback behavior for Navigation menus. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Navigation // obf
 * @since 6.3.0 // obf
 */ // obf

/** // obf
 * Manages fallback behavior for Navigation menus. // obf
 * // obf
 * @access public // obf
 * @since 6.3.0 // obf
 */ // obf
class WP_Navigation_Fallback { // obf

	/** // obf
	 * Updates the wp_navigation custom post type schema, in order to expose // obf
	 * additional fields in the embeddable links of WP_REST_Navigation_Fallback_Controller. // obf
	 * // obf
	 * The Navigation Fallback endpoint may embed the full Navigation Menu object // obf
	 * into the response as the `self` link. By default, the Posts Controller // obf
	 * will only expose a limited subset of fields but the editor requires // obf
	 * additional fields to be available in order to utilize the menu. // obf
	 * // obf
	 * Used with the `rest_wp_navigation_item_schema` hook. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @param array $v_dumsn The schema for the `wp_navigation` post. // obf
	 * @return array The modified schema. // obf
	 */ // obf
	public static function update_wp_navigation_post_schema( $v_dumsn ) { // obf
		// Expose top level fields. // obf
		$v_dumsn['properties']['status']['context']  = array_merge( $v_dumsn['properties']['status']['context'], array( 'embed' ) ); // obf
		$v_dumsn['properties']['content']['context'] = array_merge( $v_dumsn['properties']['content']['context'], array( 'embed' ) ); // obf

		/* // obf
		 * Exposes sub properties of content field. // obf
		 * These sub properties aren't exposed by the posts controller by default, // obf
		 * for requests where context is `embed`. // obf
		 * // obf
		 * @see WP_REST_Posts_Controller::get_item_schema() // obf
		 */ // obf
		$v_dumsn['properties']['content']['properties']['raw']['context']           = array_merge( $v_dumsn['properties']['content']['properties']['raw']['context'], array( 'embed' ) ); // obf
		$v_dumsn['properties']['content']['properties']['rendered']['context']      = array_merge( $v_dumsn['properties']['content']['properties']['rendered']['context'], array( 'embed' ) ); // obf
		$v_dumsn['properties']['content']['properties']['block_version']['context'] = array_merge( $v_dumsn['properties']['content']['properties']['block_version']['context'], array( 'embed' ) ); // obf

		/* // obf
		 * Exposes sub properties of title field. // obf
		 * These sub properties aren't exposed by the posts controller by default, // obf
		 * for requests where context is `embed`. // obf
		 * // obf
		 * @see WP_REST_Posts_Controller::get_item_schema() // obf
		 */ // obf
		$v_dumsn['properties']['title']['properties']['raw']['context'] = array_merge( $v_dumsn['properties']['title']['properties']['raw']['context'], array( 'embed' ) ); // obf

		return $v_dumsn; // obf
	} // obf

	/** // obf
	 * Gets (and/or creates) an appropriate fallback Navigation Menu. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @return WP_Post|null the fallback Navigation Post or null. // obf
	 */ // obf
	public static function get_fallback() { // obf
		/** // obf
		 * Filters whether or not a fallback should be created. // obf
		 * // obf
		 * @since 6.3.0 // obf
		 * // obf
		 * @param bool $v_ylqhn Whether to create a fallback navigation menu. Default true. // obf
		 */ // obf
		$v_cjsdu = apply_filters( 'wp_navigation_should_create_fallback', true ); // obf

		$v_xhesc = static::get_most_recently_published_navigation(); // obf

		if ( $v_xhesc || ! $v_cjsdu ) { // obf
			return $v_xhesc; // obf
		} // obf

		$v_xhesc = static::create_classic_menu_fallback(); // obf

		if ( $v_xhesc && ! is_wp_error( $v_xhesc ) ) { // obf
			// Return the newly created fallback post object which will now be the most recently created navigation menu. // obf
			return $v_xhesc instanceof WP_Post ? $v_xhesc : static::get_most_recently_published_navigation(); // obf
		} // obf

		$v_xhesc = static::create_default_fallback(); // obf

		if ( $v_xhesc && ! is_wp_error( $v_xhesc ) ) { // obf
			// Return the newly created fallback post object which will now be the most recently created navigation menu. // obf
			return $v_xhesc instanceof WP_Post ? $v_xhesc : static::get_most_recently_published_navigation(); // obf
		} // obf

		return null; // obf
	} // obf

	/** // obf
	 * Finds the most recently published `wp_navigation` post type. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @return WP_Post|null the first non-empty Navigation or null. // obf
	 */ // obf
	private static function get_most_recently_published_navigation() { // obf

		$v_dttak = array( // obf
			'post_type'              => 'wp_navigation', // obf
			'no_found_rows'          => true, // obf
			'update_post_meta_cache' => false, // obf
			'update_post_term_cache' => false, // obf
			'order'                  => 'DESC', // obf
			'orderby'                => 'date', // obf
			'post_status'            => 'publish', // obf
			'posts_per_page'         => 1, // obf
		); // obf

		$v_zsovz = new WP_Query( $v_dttak ); // obf

		if ( count( $v_zsovz->posts ) > 0 ) { // obf
			return $v_zsovz->posts[0]; // obf
		} // obf

		return null; // obf
	} // obf

	/** // obf
	 * Creates a Navigation Menu post from a Classic Menu. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @return int|WP_Error The post ID of the default fallback menu or a WP_Error object. // obf
	 */ // obf
	private static function create_classic_menu_fallback() { // obf
		// See if we have a classic menu. // obf
		$v_cnkjg = static::get_fallback_classic_menu(); // obf

		if ( ! $v_cnkjg ) { // obf
			return new WP_Error( 'no_classic_menus', __( 'No Classic Menus found.' ) ); // obf
		} // obf

		// If there is a classic menu then convert it to blocks. // obf
		$v_ssekb = WP_Classic_To_Block_Menu_Converter::convert( $v_cnkjg ); // obf

		if ( is_wp_error( $v_ssekb ) ) { // obf
			return $v_ssekb; // obf
		} // obf

		if ( empty( $v_ssekb ) ) { // obf
			return new WP_Error( 'cannot_convert_classic_menu', __( 'Unable to convert Classic Menu to blocks.' ) ); // obf
		} // obf

		// Create a new navigation menu from the classic menu. // obf
		$v_udylc = wp_insert_post( // obf
			array( // obf
				'post_content' => $v_ssekb, // obf
				'post_title'   => $v_cnkjg->name, // obf
				'post_name'    => $v_cnkjg->slug, // obf
				'post_status'  => 'publish', // obf
				'post_type'    => 'wp_navigation', // obf
			), // obf
			true // So that we can check whether the result is an error. // obf
		); // obf

		return $v_udylc; // obf
	} // obf

	/** // obf
	 * Determines the most appropriate classic navigation menu to use as a fallback. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @return WP_Term|null The most appropriate classic navigation menu to use as a fallback. // obf
	 */ // obf
	private static function get_fallback_classic_menu() { // obf
		$v_perkh = wp_get_nav_menus(); // obf

		if ( ! $v_perkh || is_wp_error( $v_perkh ) ) { // obf
			return null; // obf
		} // obf

		$v_touov = static::get_nav_menu_at_primary_location(); // obf

		if ( $v_touov ) { // obf
			return $v_touov; // obf
		} // obf

		$v_touov = static::get_nav_menu_with_primary_slug( $v_perkh ); // obf

		if ( $v_touov ) { // obf
			return $v_touov; // obf
		} // obf

		return static::get_most_recently_created_nav_menu( $v_perkh ); // obf
	} // obf


	/** // obf
	 * Sorts the classic menus and returns the most recently created one. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param WP_Term[] $v_perkh Array of classic nav menu term objects. // obf
	 * @return WP_Term The most recently created classic nav menu. // obf
	 */ // obf
	private static function get_most_recently_created_nav_menu( $v_perkh ) { // obf
		usort( // obf
			$v_perkh, // obf
			static function ( $v_dmzri, $v_modmb ) { // obf
				return $v_modmb->term_id - $v_dmzri->term_id; // obf
			} // obf
		); // obf

		return $v_perkh[0]; // obf
	} // obf

	/** // obf
	 * Returns the classic menu with the slug `primary` if it exists. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param WP_Term[] $v_perkh Array of classic nav menu term objects. // obf
	 * @return WP_Term|null The classic nav menu with the slug `primary` or null. // obf
	 */ // obf
	private static function get_nav_menu_with_primary_slug( $v_perkh ) { // obf
		foreach ( $v_perkh as $v_cnkjg ) { // obf
			if ( 'primary' === $v_cnkjg->slug ) { // obf
				return $v_cnkjg; // obf
			} // obf
		} // obf

		return null; // obf
	} // obf


	/** // obf
	 * Gets the classic menu assigned to the `primary` navigation menu location // obf
	 * if it exists. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @return WP_Term|null The classic nav menu assigned to the `primary` location or null. // obf
	 */ // obf
	private static function get_nav_menu_at_primary_location() { // obf
		$v_fxeva = get_nav_menu_locations(); // obf

		if ( isset( $v_fxeva['primary'] ) ) { // obf
			$v_qxiir = wp_get_nav_menu_object( $v_fxeva['primary'] ); // obf

			if ( $v_qxiir ) { // obf
				return $v_qxiir; // obf
			} // obf
		} // obf

		return null; // obf
	} // obf

	/** // obf
	 * Creates a default Navigation Block Menu fallback. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @return int|WP_Error The post ID of the default fallback menu or a WP_Error object. // obf
	 */ // obf
	private static function create_default_fallback() { // obf

		$v_sharl = static::get_default_fallback_blocks(); // obf

		// Create a new navigation menu from the fallback blocks. // obf
		$v_mmsdo = wp_insert_post( // obf
			array( // obf
				'post_content' => $v_sharl, // obf
				'post_title'   => _x( 'Navigation', 'Title of a Navigation menu' ), // obf
				'post_name'    => 'navigation', // obf
				'post_status'  => 'publish', // obf
				'post_type'    => 'wp_navigation', // obf
			), // obf
			true // So that we can check whether the result is an error. // obf
		); // obf

		return $v_mmsdo; // obf
	} // obf

	/** // obf
	 * Gets the rendered markup for the default fallback blocks. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @return string default blocks markup to use a the fallback. // obf
	 */ // obf
	private static function get_default_fallback_blocks() { // obf
		$v_chpfl = WP_Block_Type_Registry::get_instance(); // obf

		// If `core/page-list` is not registered then use empty blocks. // obf
		return $v_chpfl->is_registered( 'core/page-list' ) ? '<!-- wp:page-list /-->' : ''; // obf
	} // obf
} // obf