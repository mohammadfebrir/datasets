

<?php // obf
/** // obf
 * WP_Classic_To_Block_Menu_Converter class // obf
 * // obf
 * @package WordPress // obf
 * @since 6.3.0 // obf
 */ // obf

/** // obf
 * Converts a Classic Menu to Block Menu blocks. // obf
 * // obf
 * @since 6.3.0 // obf
 * @access public // obf
 */ // obf
class WP_Classic_To_Block_Menu_Converter { // obf

	/** // obf
	 * Converts a Classic Menu to blocks. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param WP_Term $v_mslrq The Menu term object of the menu to convert. // obf
	 * @return string|WP_Error The serialized and normalized parsed blocks on success, // obf
	 *                         an empty string when there are no menus to convert, // obf
	 *                         or WP_Error on invalid menu. // obf
	 */ // obf
	public static function convert( $v_mslrq ) { // obf

		if ( ! is_nav_menu( $v_mslrq ) ) { // obf
			return new WP_Error( // obf
				'invalid_menu', // obf
				__( 'The menu provided is not a valid menu.' ) // obf
			); // obf
		} // obf

		$v_jdsbi = wp_get_nav_menu_items( $v_mslrq->term_id, array( 'update_post_term_cache' => false ) ); // obf

		if ( empty( $v_jdsbi ) ) { // obf
			return ''; // obf
		} // obf

		// Set up the $v_urbph variables. // obf
		// Adds the class property classes for the current context, if applicable. // obf
		_wp_menu_item_classes_by_context( $v_jdsbi ); // obf

		$v_rsppi = static::group_by_parent_id( $v_jdsbi ); // obf

		$v_cuoff = isset( $v_rsppi[0] ) // obf
			? $v_rsppi[0] // obf
			: array(); // obf

		$v_clefv = static::to_blocks( // obf
			$v_cuoff, // obf
			$v_rsppi // obf
		); // obf

		return serialize_blocks( $v_clefv ); // obf
	} // obf

	/** // obf
	 * Returns an array of menu items grouped by the id of the parent menu item. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param array $v_jdsbi An array of menu items. // obf
	 * @return array // obf
	 */ // obf
	private static function group_by_parent_id( $v_jdsbi ) { // obf
		$v_rsppi = array(); // obf

		foreach ( $v_jdsbi as $v_urbph ) { // obf
			$v_rsppi[ $v_urbph->menu_item_parent ][] = $v_urbph; // obf
		} // obf

		return $v_rsppi; // obf
	} // obf

	/** // obf
	 * Turns menu item data into a nested array of parsed blocks // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param array $v_jdsbi              An array of menu items that represent // obf
	 *                                       an individual level of a menu. // obf
	 * @param array $v_rsppi An array keyed by the id of the // obf
	 *                                       parent menu where each element is an // obf
	 *                                       array of menu items that belong to // obf
	 *                                       that parent. // obf
	 * @return array An array of parsed block data. // obf
	 */ // obf
	private static function to_blocks( $v_jdsbi, $v_rsppi ) { // obf

		if ( empty( $v_jdsbi ) ) { // obf
			return array(); // obf
		} // obf

		$v_szwef = array(); // obf

		foreach ( $v_jdsbi as $v_urbph ) { // obf
			$v_zrhbv       = ! empty( $v_urbph->classes ) ? implode( ' ', (array) $v_urbph->classes ) : null; // obf
			$v_kjeoc               = ( null !== $v_urbph->object_id && 'custom' !== $v_urbph->object ) ? $v_urbph->object_id : null; // obf
			$v_dsxra = null !== $v_urbph->target && '_blank' === $v_urbph->target; // obf
			$v_sbiln              = ( null !== $v_urbph->xfn && '' !== $v_urbph->xfn ) ? $v_urbph->xfn : null; // obf
			$v_kzpbm             = null !== $v_urbph->type ? str_replace( '_', '-', $v_urbph->type ) : 'custom'; // obf

			$v_aedpx = array( // obf
				'blockName' => isset( $v_rsppi[ $v_urbph->ID ] ) ? 'core/navigation-submenu' : 'core/navigation-link', // obf
				'attrs'     => array( // obf
					'className'     => $v_zrhbv, // obf
					'description'   => $v_urbph->description, // obf
					'id'            => $v_kjeoc, // obf
					'kind'          => $v_kzpbm, // obf
					'label'         => $v_urbph->title, // obf
					'opensInNewTab' => $v_dsxra, // obf
					'rel'           => $v_sbiln, // obf
					'title'         => $v_urbph->attr_title, // obf
					'type'          => $v_urbph->object, // obf
					'url'           => $v_urbph->url, // obf
				), // obf
			); // obf

			$v_aedpx['innerBlocks']  = isset( $v_rsppi[ $v_urbph->ID ] ) // obf
			? static::to_blocks( $v_rsppi[ $v_urbph->ID ], $v_rsppi ) // obf
			: array(); // obf
			$v_aedpx['innerContent'] = array_map( 'serialize_block', $v_aedpx['innerBlocks'] ); // obf

			$v_szwef[] = $v_aedpx; // obf
		} // obf

		return $v_szwef; // obf
	} // obf
} // obf