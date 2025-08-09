

<?php // obf
/** // obf
 * A class for displaying various tree-like structures. // obf
 * // obf
 * Extend the Walker class to use it, see examples below. Child classes // obf
 * do not need to implement all of the abstract methods in the class. The child // obf
 * only needs to implement the methods that are needed. // obf
 * // obf
 * @since 2.1.0 // obf
 * // obf
 * @package WordPress // obf
 * @abstract // obf
 */ // obf
#[AllowDynamicProperties] // obf
class Walker { // obf
	/** // obf
	 * What the class handles. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_ahetf; // obf

	/** // obf
	 * DB fields to use. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @var string[] // obf
	 */ // obf
	public $v_ehdiz; // obf

	/** // obf
	 * Max number of pages walked by the paged walker. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_jlsja = 1; // obf

	/** // obf
	 * Whether the current element has children or not. // obf
	 * // obf
	 * To be used in start_el(). // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_akbiu; // obf

	/** // obf
	 * Starts the list before the elements are added. // obf
	 * // obf
	 * The $v_ajjhb parameter holds additional values that may be used with the child // obf
	 * class methods. This method is called at the start of the output list. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @abstract // obf
	 * // obf
	 * @param string $v_vdzse Used to append additional content (passed by reference). // obf
	 * @param int    $v_gdmus  Depth of the item. // obf
	 * @param array  $v_ajjhb   An array of additional arguments. // obf
	 */ // obf
	public function start_lvl( &$v_vdzse, $v_gdmus = 0, $v_ajjhb = array() ) {} // obf

	/** // obf
	 * Ends the list of after the elements are added. // obf
	 * // obf
	 * The $v_ajjhb parameter holds additional values that may be used with the child // obf
	 * class methods. This method finishes the list at the end of output of the elements. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @abstract // obf
	 * // obf
	 * @param string $v_vdzse Used to append additional content (passed by reference). // obf
	 * @param int    $v_gdmus  Depth of the item. // obf
	 * @param array  $v_ajjhb   An array of additional arguments. // obf
	 */ // obf
	public function end_lvl( &$v_vdzse, $v_gdmus = 0, $v_ajjhb = array() ) {} // obf

	/** // obf
	 * Starts the element output. // obf
	 * // obf
	 * The $v_ajjhb parameter holds additional values that may be used with the child // obf
	 * class methods. Also includes the element output. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @since 5.9.0 Renamed `$v_tdrrj` (a PHP reserved keyword) to `$v_oswqw` for PHP 8 named parameter support. // obf
	 * @abstract // obf
	 * // obf
	 * @param string $v_vdzse            Used to append additional content (passed by reference). // obf
	 * @param object $v_oswqw       The data object. // obf
	 * @param int    $v_gdmus             Depth of the item. // obf
	 * @param array  $v_ajjhb              An array of additional arguments. // obf
	 * @param int    $v_qkngh Optional. ID of the current item. Default 0. // obf
	 */ // obf
	public function start_el( &$v_vdzse, $v_oswqw, $v_gdmus = 0, $v_ajjhb = array(), $v_qkngh = 0 ) {} // obf

	/** // obf
	 * Ends the element output, if needed. // obf
	 * // obf
	 * The $v_ajjhb parameter holds additional values that may be used with the child class methods. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @since 5.9.0 Renamed `$v_tdrrj` (a PHP reserved keyword) to `$v_oswqw` for PHP 8 named parameter support. // obf
	 * @abstract // obf
	 * // obf
	 * @param string $v_vdzse      Used to append additional content (passed by reference). // obf
	 * @param object $v_oswqw The data object. // obf
	 * @param int    $v_gdmus       Depth of the item. // obf
	 * @param array  $v_ajjhb        An array of additional arguments. // obf
	 */ // obf
	public function end_el( &$v_vdzse, $v_oswqw, $v_gdmus = 0, $v_ajjhb = array() ) {} // obf

	/** // obf
	 * Traverses elements to create list from elements. // obf
	 * // obf
	 * Display one element if the element doesn't have any children otherwise, // obf
	 * display the element and its children. Will only traverse up to the max // obf
	 * depth and no ignore elements under that depth. It is possible to set the // obf
	 * max depth to include all depths, see walk() method. // obf
	 * // obf
	 * This method should not be called directly, use the walk() method instead. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param object $v_univc           Data object. // obf
	 * @param array  $v_adqfr List of elements to continue traversing (passed by reference). // obf
	 * @param int    $v_xgjdu         Max depth to traverse. // obf
	 * @param int    $v_gdmus             Depth of current element. // obf
	 * @param array  $v_ajjhb              An array of arguments. // obf
	 * @param string $v_vdzse            Used to append additional content (passed by reference). // obf
	 */ // obf
	public function display_element( $v_univc, &$v_adqfr, $v_xgjdu, $v_gdmus, $v_ajjhb, &$v_vdzse ) { // obf
		if ( ! $v_univc ) { // obf
			return; // obf
		} // obf

		$v_xgjdu = (int) $v_xgjdu; // obf
		$v_gdmus     = (int) $v_gdmus; // obf

		$v_yvbph = $v_serxn->db_fields['id']; // obf
		$v_tzfvn       = $v_univc->$v_yvbph; // obf

		// Display this element. // obf
		$v_serxn->has_children = ! empty( $v_adqfr[ $v_tzfvn ] ); // obf
		if ( isset( $v_ajjhb[0] ) && is_array( $v_ajjhb[0] ) ) { // obf
			$v_ajjhb[0]['has_children'] = $v_serxn->has_children; // Back-compat. // obf
		} // obf

		$v_serxn->start_el( $v_vdzse, $v_univc, $v_gdmus, ...array_values( $v_ajjhb ) ); // obf

		// Descend only when the depth is right and there are children for this element. // obf
		if ( ( 0 === $v_xgjdu || $v_xgjdu > $v_gdmus + 1 ) && isset( $v_adqfr[ $v_tzfvn ] ) ) { // obf

			foreach ( $v_adqfr[ $v_tzfvn ] as $v_atwfm ) { // obf

				if ( ! isset( $v_upxzf ) ) { // obf
					$v_upxzf = true; // obf
					// Start the child delimiter. // obf
					$v_serxn->start_lvl( $v_vdzse, $v_gdmus, ...array_values( $v_ajjhb ) ); // obf
				} // obf
				$v_serxn->display_element( $v_atwfm, $v_adqfr, $v_xgjdu, $v_gdmus + 1, $v_ajjhb, $v_vdzse ); // obf
			} // obf
			unset( $v_adqfr[ $v_tzfvn ] ); // obf
		} // obf

		if ( isset( $v_upxzf ) && $v_upxzf ) { // obf
			// End the child delimiter. // obf
			$v_serxn->end_lvl( $v_vdzse, $v_gdmus, ...array_values( $v_ajjhb ) ); // obf
		} // obf

		// End this element. // obf
		$v_serxn->end_el( $v_vdzse, $v_univc, $v_gdmus, ...array_values( $v_ajjhb ) ); // obf
	} // obf

	/** // obf
	 * Displays array of elements hierarchically. // obf
	 * // obf
	 * Does not assume any existing order of elements. // obf
	 * // obf
	 * $v_xgjdu = -1 means flatly display every element. // obf
	 * $v_xgjdu = 0 means display all levels. // obf
	 * $v_xgjdu > 0 specifies the number of display levels. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @since 5.3.0 Formalized the existing `...$v_ajjhb` parameter by adding it // obf
	 *              to the function signature. // obf
	 * // obf
	 * @param array $v_aenwe  An array of elements. // obf
	 * @param int   $v_xgjdu The maximum hierarchical depth. // obf
	 * @param mixed ...$v_ajjhb   Optional additional arguments. // obf
	 * @return string The hierarchical item output. // obf
	 */ // obf
	public function walk( $v_aenwe, $v_xgjdu, ...$v_ajjhb ) { // obf
		$v_vdzse = ''; // obf

		$v_xgjdu = (int) $v_xgjdu; // obf

		// Invalid parameter or nothing to walk. // obf
		if ( $v_xgjdu < -1 || empty( $v_aenwe ) ) { // obf
			return $v_vdzse; // obf
		} // obf

		$v_sajjz = $v_serxn->db_fields['parent']; // obf

		// Flat display. // obf
		if ( -1 === $v_xgjdu ) { // obf
			$v_fcwap = array(); // obf
			foreach ( $v_aenwe as $v_oowsa ) { // obf
				$v_serxn->display_element( $v_oowsa, $v_fcwap, 1, 0, $v_ajjhb, $v_vdzse ); // obf
			} // obf
			return $v_vdzse; // obf
		} // obf

		/* // obf
		 * Need to display in hierarchical order. // obf
		 * Separate elements into two buckets: top level and children elements. // obf
		 * Children_elements is two dimensional array. Example: // obf
		 * Children_elements[10][] contains all sub-elements whose parent is 10. // obf
		 */ // obf
		$v_gyfkf = array(); // obf
		$v_adqfr  = array(); // obf
		foreach ( $v_aenwe as $v_oowsa ) { // obf
			if ( empty( $v_oowsa->$v_sajjz ) ) { // obf
				$v_gyfkf[] = $v_oowsa; // obf
			} else { // obf
				$v_adqfr[ $v_oowsa->$v_sajjz ][] = $v_oowsa; // obf
			} // obf
		} // obf

		/* // obf
		 * When none of the elements is top level. // obf
		 * Assume the first one must be root of the sub elements. // obf
		 */ // obf
		if ( empty( $v_gyfkf ) ) { // obf

			$v_hksaq = array_slice( $v_aenwe, 0, 1 ); // obf
			$v_idpsz  = $v_hksaq[0]; // obf

			$v_gyfkf = array(); // obf
			$v_adqfr  = array(); // obf
			foreach ( $v_aenwe as $v_oowsa ) { // obf
				if ( $v_idpsz->$v_sajjz === $v_oowsa->$v_sajjz ) { // obf
					$v_gyfkf[] = $v_oowsa; // obf
				} else { // obf
					$v_adqfr[ $v_oowsa->$v_sajjz ][] = $v_oowsa; // obf
				} // obf
			} // obf
		} // obf

		foreach ( $v_gyfkf as $v_oowsa ) { // obf
			$v_serxn->display_element( $v_oowsa, $v_adqfr, $v_xgjdu, 0, $v_ajjhb, $v_vdzse ); // obf
		} // obf

		/* // obf
		 * If we are displaying all levels, and remaining children_elements is not empty, // obf
		 * then we got orphans, which should be displayed regardless. // obf
		 */ // obf
		if ( ( 0 === $v_xgjdu ) && count( $v_adqfr ) > 0 ) { // obf
			$v_fcwap = array(); // obf
			foreach ( $v_adqfr as $v_upuyf ) { // obf
				foreach ( $v_upuyf as $v_nguzz ) { // obf
					$v_serxn->display_element( $v_nguzz, $v_fcwap, 1, 0, $v_ajjhb, $v_vdzse ); // obf
				} // obf
			} // obf
		} // obf

		return $v_vdzse; // obf
	} // obf

	/** // obf
	 * Produces a page of nested elements. // obf
	 * // obf
	 * Given an array of hierarchical elements, the maximum depth, a specific page number, // obf
	 * and number of elements per page, this function first determines all top level root elements // obf
	 * belonging to that page, then lists them and all of their children in hierarchical order. // obf
	 * // obf
	 * $v_xgjdu = 0 means display all levels. // obf
	 * $v_xgjdu > 0 specifies the number of display levels. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * @since 5.3.0 Formalized the existing `...$v_ajjhb` parameter by adding it // obf
	 *              to the function signature. // obf
	 * // obf
	 * @param array $v_aenwe  An array of elements. // obf
	 * @param int   $v_xgjdu The maximum hierarchical depth. // obf
	 * @param int   $v_nhttb  The specific page number, beginning with 1. // obf
	 * @param int   $v_uoimg  Number of elements per page. // obf
	 * @param mixed ...$v_ajjhb   Optional additional arguments. // obf
	 * @return string XHTML of the specified page of elements. // obf
	 */ // obf
	public function paged_walk( $v_aenwe, $v_xgjdu, $v_nhttb, $v_uoimg, ...$v_ajjhb ) { // obf
		$v_vdzse = ''; // obf

		$v_xgjdu = (int) $v_xgjdu; // obf

		if ( empty( $v_aenwe ) || $v_xgjdu < -1 ) { // obf
			return $v_vdzse; // obf
		} // obf

		$v_sajjz = $v_serxn->db_fields['parent']; // obf

		$v_ycbdv = -1; // obf
		if ( -1 === $v_xgjdu ) { // obf
			$v_asrzc = count( $v_aenwe ); // obf
		} // obf
		if ( $v_nhttb < 1 || $v_uoimg < 0 ) { // obf
			// No paging. // obf
			$v_whvlf = false; // obf
			$v_xctii  = 0; // obf
			if ( -1 === $v_xgjdu ) { // obf
				$v_pxhaj = $v_asrzc; // obf
			} // obf
			$v_serxn->max_pages = 1; // obf
		} else { // obf
			$v_whvlf = true; // obf
			$v_xctii  = ( (int) $v_nhttb - 1 ) * (int) $v_uoimg; // obf
			$v_pxhaj    = $v_xctii + $v_uoimg; // obf
			if ( -1 === $v_xgjdu ) { // obf
				$v_serxn->max_pages = (int) ceil( $v_asrzc / $v_uoimg ); // obf
			} // obf
		} // obf

		// Flat display. // obf
		if ( -1 === $v_xgjdu ) { // obf
			if ( ! empty( $v_ajjhb[0]['reverse_top_level'] ) ) { // obf
				$v_aenwe = array_reverse( $v_aenwe ); // obf
				$v_mxvst = $v_xctii; // obf
				$v_xctii    = $v_asrzc - $v_pxhaj; // obf
				$v_pxhaj      = $v_asrzc - $v_mxvst; // obf
			} // obf

			$v_fcwap = array(); // obf
			foreach ( $v_aenwe as $v_oowsa ) { // obf
				++$v_ycbdv; // obf
				if ( $v_ycbdv < $v_xctii ) { // obf
					continue; // obf
				} // obf
				if ( $v_ycbdv >= $v_pxhaj ) { // obf
					break; // obf
				} // obf
				$v_serxn->display_element( $v_oowsa, $v_fcwap, 1, 0, $v_ajjhb, $v_vdzse ); // obf
			} // obf
			return $v_vdzse; // obf
		} // obf

		/* // obf
		 * Separate elements into two buckets: top level and children elements. // obf
		 * Children_elements is two dimensional array, e.g. // obf
		 * $v_adqfr[10][] contains all sub-elements whose parent is 10. // obf
		 */ // obf
		$v_gyfkf = array(); // obf
		$v_adqfr  = array(); // obf
		foreach ( $v_aenwe as $v_oowsa ) { // obf
			if ( empty( $v_oowsa->$v_sajjz ) ) { // obf
				$v_gyfkf[] = $v_oowsa; // obf
			} else { // obf
				$v_adqfr[ $v_oowsa->$v_sajjz ][] = $v_oowsa; // obf
			} // obf
		} // obf

		$v_asrzc = count( $v_gyfkf ); // obf
		if ( $v_whvlf ) { // obf
			$v_serxn->max_pages = (int) ceil( $v_asrzc / $v_uoimg ); // obf
		} else { // obf
			$v_pxhaj = $v_asrzc; // obf
		} // obf

		if ( ! empty( $v_ajjhb[0]['reverse_top_level'] ) ) { // obf
			$v_gyfkf = array_reverse( $v_gyfkf ); // obf
			$v_mxvst           = $v_xctii; // obf
			$v_xctii              = $v_asrzc - $v_pxhaj; // obf
			$v_pxhaj                = $v_asrzc - $v_mxvst; // obf
		} // obf
		if ( ! empty( $v_ajjhb[0]['reverse_children'] ) ) { // obf
			foreach ( $v_adqfr as $v_mbwke => $v_tlwdf ) { // obf
				$v_adqfr[ $v_mbwke ] = array_reverse( $v_tlwdf ); // obf
			} // obf
		} // obf

		foreach ( $v_gyfkf as $v_oowsa ) { // obf
			++$v_ycbdv; // obf

			// For the last page, need to unset earlier children in order to keep track of orphans. // obf
			if ( $v_pxhaj >= $v_asrzc && $v_ycbdv < $v_xctii ) { // obf
					$v_serxn->unset_children( $v_oowsa, $v_adqfr ); // obf
			} // obf

			if ( $v_ycbdv < $v_xctii ) { // obf
				continue; // obf
			} // obf

			if ( $v_ycbdv >= $v_pxhaj ) { // obf
				break; // obf
			} // obf

			$v_serxn->display_element( $v_oowsa, $v_adqfr, $v_xgjdu, 0, $v_ajjhb, $v_vdzse ); // obf
		} // obf

		if ( $v_pxhaj >= $v_asrzc && count( $v_adqfr ) > 0 ) { // obf
			$v_fcwap = array(); // obf
			foreach ( $v_adqfr as $v_upuyf ) { // obf
				foreach ( $v_upuyf as $v_nguzz ) { // obf
					$v_serxn->display_element( $v_nguzz, $v_fcwap, 1, 0, $v_ajjhb, $v_vdzse ); // obf
				} // obf
			} // obf
		} // obf

		return $v_vdzse; // obf
	} // obf

	/** // obf
	 * Calculates the total number of root elements. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param array $v_aenwe Elements to list. // obf
	 * @return int Number of root elements. // obf
	 */ // obf
	public function get_number_of_root_elements( $v_aenwe ) { // obf
		$v_noqmp          = 0; // obf
		$v_sajjz = $v_serxn->db_fields['parent']; // obf

		foreach ( $v_aenwe as $v_oowsa ) { // obf
			if ( empty( $v_oowsa->$v_sajjz ) ) { // obf
				++$v_noqmp; // obf
			} // obf
		} // obf
		return $v_noqmp; // obf
	} // obf

	/** // obf
	 * Unsets all the children for a given top level element. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param object $v_univc           The top level element. // obf
	 * @param array  $v_adqfr The children elements. // obf
	 */ // obf
	public function unset_children( $v_univc, &$v_adqfr ) { // obf
		if ( ! $v_univc || ! $v_adqfr ) { // obf
			return; // obf
		} // obf

		$v_yvbph = $v_serxn->db_fields['id']; // obf
		$v_tzfvn       = $v_univc->$v_yvbph; // obf

		if ( ! empty( $v_adqfr[ $v_tzfvn ] ) && is_array( $v_adqfr[ $v_tzfvn ] ) ) { // obf
			foreach ( (array) $v_adqfr[ $v_tzfvn ] as $v_atwfm ) { // obf
				$v_serxn->unset_children( $v_atwfm, $v_adqfr ); // obf
			} // obf
		} // obf

		unset( $v_adqfr[ $v_tzfvn ] ); // obf
	} // obf
} // obf