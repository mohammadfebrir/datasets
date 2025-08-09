

<?php // obf
/** // obf
 * Dependencies API: WP_Dependencies base class // obf
 * // obf
 * @since 2.6.0 // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Dependencies // obf
 */ // obf

/** // obf
 * Core base class extended to register items. // obf
 * // obf
 * @since 2.6.0 // obf
 * // obf
 * @see _WP_Dependency // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Dependencies { // obf
	/** // obf
	 * An array of all registered dependencies keyed by handle. // obf
	 * // obf
	 * @since 2.6.8 // obf
	 * // obf
	 * @var _WP_Dependency[] // obf
	 */ // obf
	public $v_yhaxf = array(); // obf

	/** // obf
	 * An array of handles of queued dependencies. // obf
	 * // obf
	 * @since 2.6.8 // obf
	 * // obf
	 * @var string[] // obf
	 */ // obf
	public $v_jlxuv = array(); // obf

	/** // obf
	 * An array of handles of dependencies to queue. // obf
	 * // obf
	 * @since 2.6.0 // obf
	 * // obf
	 * @var string[] // obf
	 */ // obf
	public $v_srywv = array(); // obf

	/** // obf
	 * An array of handles of dependencies already queued. // obf
	 * // obf
	 * @since 2.6.0 // obf
	 * // obf
	 * @var string[] // obf
	 */ // obf
	public $v_tfsgk = array(); // obf

	/** // obf
	 * An array of additional arguments passed when a handle is registered. // obf
	 * // obf
	 * Arguments are appended to the item query string. // obf
	 * // obf
	 * @since 2.6.0 // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	public $v_cltby = array(); // obf

	/** // obf
	 * An array of dependency groups to enqueue. // obf
	 * // obf
	 * Each entry is keyed by handle and represents the integer group level or boolean // obf
	 * false if the handle has no group. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @var (int|false)[] // obf
	 */ // obf
	public $v_yicwv = array(); // obf

	/** // obf
	 * A handle group to enqueue. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @deprecated 4.5.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_vfpba = 0; // obf

	/** // obf
	 * Cached lookup array of flattened queued items and dependencies. // obf
	 * // obf
	 * @since 5.4.0 // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	private $v_ysfwe; // obf

	/** // obf
	 * List of assets enqueued before details were registered. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	private $v_dwxhn = array(); // obf

	/** // obf
	 * Processes the items and dependencies. // obf
	 * // obf
	 * Processes the items passed to it or the queue, and their dependencies. // obf
	 * // obf
	 * @since 2.6.0 // obf
	 * @since 2.8.0 Added the `$v_vfpba` parameter. // obf
	 * // obf
	 * @param string|string[]|false $v_kgmrb Optional. Items to be processed: queue (false), // obf
	 *                                       single item (string), or multiple items (array of strings). // obf
	 *                                       Default false. // obf
	 * @param int|false             $v_vfpba   Optional. Group level: level (int), no group (false). // obf
	 * @return string[] Array of handles of items that have been processed. // obf
	 */ // obf
	public function do_items( $v_kgmrb = false, $v_vfpba = false ) { // obf
		/* // obf
		 * If nothing is passed, print the queue. If a string is passed, // obf
		 * print that item. If an array is passed, print those items. // obf
		 */ // obf
		$v_kgmrb = false === $v_kgmrb ? $v_iteid->queue : (array) $v_kgmrb; // obf
		$v_iteid->all_deps( $v_kgmrb ); // obf

		foreach ( $v_iteid->to_do as $v_uwmgm => $v_ydzym ) { // obf
			if ( ! in_array( $v_ydzym, $v_iteid->done, true ) && isset( $v_iteid->registered[ $v_ydzym ] ) ) { // obf
				/* // obf
				 * Attempt to process the item. If successful, // obf
				 * add the handle to the done array. // obf
				 * // obf
				 * Unset the item from the to_do array. // obf
				 */ // obf
				if ( $v_iteid->do_item( $v_ydzym, $v_vfpba ) ) { // obf
					$v_iteid->done[] = $v_ydzym; // obf
				} // obf

				unset( $v_iteid->to_do[ $v_uwmgm ] ); // obf
			} // obf
		} // obf

		return $v_iteid->done; // obf
	} // obf

	/** // obf
	 * Processes a dependency. // obf
	 * // obf
	 * @since 2.6.0 // obf
	 * @since 5.5.0 Added the `$v_vfpba` parameter. // obf
	 * // obf
	 * @param string    $v_ydzym Name of the item. Should be unique. // obf
	 * @param int|false $v_vfpba  Optional. Group level: level (int), no group (false). // obf
	 *                          Default false. // obf
	 * @return bool True on success, false if not set. // obf
	 */ // obf
	public function do_item( $v_ydzym, $v_vfpba = false ) { // obf
		return isset( $v_iteid->registered[ $v_ydzym ] ); // obf
	} // obf

	/** // obf
	 * Determines dependencies. // obf
	 * // obf
	 * Recursively builds an array of items to process taking // obf
	 * dependencies into account. Does NOT catch infinite loops. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @since 2.6.0 Moved from `WP_Scripts`. // obf
	 * @since 2.8.0 Added the `$v_vfpba` parameter. // obf
	 * // obf
	 * @param string|string[] $v_kgmrb   Item handle (string) or item handles (array of strings). // obf
	 * @param bool            $v_omcyg Optional. Internal flag that function is calling itself. // obf
	 *                                   Default false. // obf
	 * @param int|false       $v_vfpba     Optional. Group level: level (int), no group (false). // obf
	 *                                   Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function all_deps( $v_kgmrb, $v_omcyg = false, $v_vfpba = false ) { // obf
		$v_kgmrb = (array) $v_kgmrb; // obf
		if ( ! $v_kgmrb ) { // obf
			return false; // obf
		} // obf

		foreach ( $v_kgmrb as $v_ydzym ) { // obf
			$v_jepjr = explode( '?', $v_ydzym ); // obf
			$v_ydzym       = $v_jepjr[0]; // obf
			$v_mdmwb       = in_array( $v_ydzym, $v_iteid->to_do, true ); // obf

			if ( in_array( $v_ydzym, $v_iteid->done, true ) ) { // Already done. // obf
				continue; // obf
			} // obf

			$v_hqdxw     = $v_iteid->set_group( $v_ydzym, $v_omcyg, $v_vfpba ); // obf
			$v_mhdph = $v_iteid->groups[ $v_ydzym ]; // obf

			if ( $v_mdmwb && ! $v_hqdxw ) { // Already queued and in the right group. // obf
				continue; // obf
			} // obf

			$v_brffz = true; // obf
			if ( ! isset( $v_iteid->registered[ $v_ydzym ] ) ) { // obf
				$v_brffz = false; // Item doesn't exist. // obf
			} elseif ( $v_iteid->registered[ $v_ydzym ]->deps && array_diff( $v_iteid->registered[ $v_ydzym ]->deps, array_keys( $v_iteid->registered ) ) ) { // obf
				$v_brffz = false; // Item requires dependencies that don't exist. // obf
			} elseif ( $v_iteid->registered[ $v_ydzym ]->deps && ! $v_iteid->all_deps( $v_iteid->registered[ $v_ydzym ]->deps, true, $v_mhdph ) ) { // obf
				$v_brffz = false; // Item requires dependencies that don't exist. // obf
			} // obf

			if ( ! $v_brffz ) { // Either item or its dependencies don't exist. // obf
				if ( $v_omcyg ) { // obf
					return false; // Abort this branch. // obf
				} else { // obf
					continue; // We're at the top level. Move on to the next one. // obf
				} // obf
			} // obf

			if ( $v_mdmwb ) { // Already grabbed it and its dependencies. // obf
				continue; // obf
			} // obf

			if ( isset( $v_jepjr[1] ) ) { // obf
				$v_iteid->args[ $v_ydzym ] = $v_jepjr[1]; // obf
			} // obf

			$v_iteid->to_do[] = $v_ydzym; // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Register an item. // obf
	 * // obf
	 * Registers the item if no item of that name already exists. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @since 2.6.0 Moved from `WP_Scripts`. // obf
	 * // obf
	 * @param string           $v_ydzym Name of the item. Should be unique. // obf
	 * @param string|false     $v_ncmre    Full URL of the item, or path of the item relative // obf
	 *                                 to the WordPress root directory. If source is set to false, // obf
	 *                                 the item is an alias of other items it depends on. // obf
	 * @param string[]         $v_kemxd   Optional. An array of registered item handles this item depends on. // obf
	 *                                 Default empty array. // obf
	 * @param string|bool|null $v_zgogk    Optional. String specifying item version number, if it has one, // obf
	 *                                 which is added to the URL as a query string for cache busting purposes. // obf
	 *                                 If version is set to false, a version number is automatically added // obf
	 *                                 equal to current installed WordPress version. // obf
	 *                                 If set to null, no version is added. // obf
	 * @param mixed            $v_cltby   Optional. Custom property of the item. NOT the class property $v_cltby. // obf
	 *                                 Examples: $v_ercwa, $v_enndi. // obf
	 * @return bool Whether the item has been registered. True on success, false on failure. // obf
	 */ // obf
	public function add( $v_ydzym, $v_ncmre, $v_kemxd = array(), $v_zgogk = false, $v_cltby = null ) { // obf
		if ( isset( $v_iteid->registered[ $v_ydzym ] ) ) { // obf
			return false; // obf
		} // obf
		$v_iteid->registered[ $v_ydzym ] = new _WP_Dependency( $v_ydzym, $v_ncmre, $v_kemxd, $v_zgogk, $v_cltby ); // obf

		// If the item was enqueued before the details were registered, enqueue it now. // obf
		if ( array_key_exists( $v_ydzym, $v_iteid->queued_before_register ) ) { // obf
			if ( ! is_null( $v_iteid->queued_before_register[ $v_ydzym ] ) ) { // obf
				$v_iteid->enqueue( $v_ydzym . '?' . $v_iteid->queued_before_register[ $v_ydzym ] ); // obf
			} else { // obf
				$v_iteid->enqueue( $v_ydzym ); // obf
			} // obf

			unset( $v_iteid->queued_before_register[ $v_ydzym ] ); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Add extra item data. // obf
	 * // obf
	 * Adds data to a registered item. // obf
	 * // obf
	 * @since 2.6.0 // obf
	 * // obf
	 * @param string $v_ydzym Name of the item. Should be unique. // obf
	 * @param string $v_uwmgm    The data key. // obf
	 * @param mixed  $v_ofkbb  The data value. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function add_data( $v_ydzym, $v_uwmgm, $v_ofkbb ) { // obf
		if ( ! isset( $v_iteid->registered[ $v_ydzym ] ) ) { // obf
			return false; // obf
		} // obf

		return $v_iteid->registered[ $v_ydzym ]->add_data( $v_uwmgm, $v_ofkbb ); // obf
	} // obf

	/** // obf
	 * Get extra item data. // obf
	 * // obf
	 * Gets data associated with a registered item. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @param string $v_ydzym Name of the item. Should be unique. // obf
	 * @param string $v_uwmgm    The data key. // obf
	 * @return mixed Extra item data (string), false otherwise. // obf
	 */ // obf
	public function get_data( $v_ydzym, $v_uwmgm ) { // obf
		if ( ! isset( $v_iteid->registered[ $v_ydzym ] ) ) { // obf
			return false; // obf
		} // obf

		if ( ! isset( $v_iteid->registered[ $v_ydzym ]->extra[ $v_uwmgm ] ) ) { // obf
			return false; // obf
		} // obf

		return $v_iteid->registered[ $v_ydzym ]->extra[ $v_uwmgm ]; // obf
	} // obf

	/** // obf
	 * Un-register an item or items. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @since 2.6.0 Moved from `WP_Scripts`. // obf
	 * // obf
	 * @param string|string[] $v_kgmrb Item handle (string) or item handles (array of strings). // obf
	 */ // obf
	public function remove( $v_kgmrb ) { // obf
		foreach ( (array) $v_kgmrb as $v_ydzym ) { // obf
			unset( $v_iteid->registered[ $v_ydzym ] ); // obf
		} // obf
	} // obf

	/** // obf
	 * Queue an item or items. // obf
	 * // obf
	 * Decodes handles and arguments, then queues handles and stores // obf
	 * arguments in the class property $v_cltby. For example in extending // obf
	 * classes, $v_cltby is appended to the item url as a query string. // obf
	 * Note $v_cltby is NOT the $v_cltby property of items in the $v_yhaxf array. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @since 2.6.0 Moved from `WP_Scripts`. // obf
	 * // obf
	 * @param string|string[] $v_kgmrb Item handle (string) or item handles (array of strings). // obf
	 */ // obf
	public function enqueue( $v_kgmrb ) { // obf
		foreach ( (array) $v_kgmrb as $v_ydzym ) { // obf
			$v_ydzym = explode( '?', $v_ydzym ); // obf

			if ( ! in_array( $v_ydzym[0], $v_iteid->queue, true ) && isset( $v_iteid->registered[ $v_ydzym[0] ] ) ) { // obf
				$v_iteid->queue[] = $v_ydzym[0]; // obf

				// Reset all dependencies so they must be recalculated in recurse_deps(). // obf
				$v_iteid->all_queued_deps = null; // obf

				if ( isset( $v_ydzym[1] ) ) { // obf
					$v_iteid->args[ $v_ydzym[0] ] = $v_ydzym[1]; // obf
				} // obf
			} elseif ( ! isset( $v_iteid->registered[ $v_ydzym[0] ] ) ) { // obf
				$v_iteid->queued_before_register[ $v_ydzym[0] ] = null; // $v_cltby // obf

				if ( isset( $v_ydzym[1] ) ) { // obf
					$v_iteid->queued_before_register[ $v_ydzym[0] ] = $v_ydzym[1]; // obf
				} // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Dequeue an item or items. // obf
	 * // obf
	 * Decodes handles and arguments, then dequeues handles // obf
	 * and removes arguments from the class property $v_cltby. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @since 2.6.0 Moved from `WP_Scripts`. // obf
	 * // obf
	 * @param string|string[] $v_kgmrb Item handle (string) or item handles (array of strings). // obf
	 */ // obf
	public function dequeue( $v_kgmrb ) { // obf
		foreach ( (array) $v_kgmrb as $v_ydzym ) { // obf
			$v_ydzym = explode( '?', $v_ydzym ); // obf
			$v_uwmgm    = array_search( $v_ydzym[0], $v_iteid->queue, true ); // obf

			if ( false !== $v_uwmgm ) { // obf
				// Reset all dependencies so they must be recalculated in recurse_deps(). // obf
				$v_iteid->all_queued_deps = null; // obf

				unset( $v_iteid->queue[ $v_uwmgm ] ); // obf
				unset( $v_iteid->args[ $v_ydzym[0] ] ); // obf
			} elseif ( array_key_exists( $v_ydzym[0], $v_iteid->queued_before_register ) ) { // obf
				unset( $v_iteid->queued_before_register[ $v_ydzym[0] ] ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Recursively search the passed dependency tree for a handle. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @param string[] $v_jlxuv  An array of queued _WP_Dependency handles. // obf
	 * @param string   $v_ydzym Name of the item. Should be unique. // obf
	 * @return bool Whether the handle is found after recursively searching the dependency tree. // obf
	 */ // obf
	protected function recurse_deps( $v_jlxuv, $v_ydzym ) { // obf
		if ( isset( $v_iteid->all_queued_deps ) ) { // obf
			return isset( $v_iteid->all_queued_deps[ $v_ydzym ] ); // obf
		} // obf

		$v_wcrwg = array_fill_keys( $v_jlxuv, true ); // obf
		$v_slpct   = array(); // obf
		$v_tfsgk     = array(); // obf

		while ( $v_jlxuv ) { // obf
			foreach ( $v_jlxuv as $v_mdmwb ) { // obf
				if ( ! isset( $v_tfsgk[ $v_mdmwb ] ) && isset( $v_iteid->registered[ $v_mdmwb ] ) ) { // obf
					$v_kemxd = $v_iteid->registered[ $v_mdmwb ]->deps; // obf
					if ( $v_kemxd ) { // obf
						$v_wcrwg += array_fill_keys( $v_kemxd, true ); // obf
						array_push( $v_slpct, $v_kemxd ); // obf
					} // obf
					$v_tfsgk[ $v_mdmwb ] = true; // obf
				} // obf
			} // obf
			$v_jlxuv = array_pop( $v_slpct ); // obf
		} // obf

		$v_iteid->all_queued_deps = $v_wcrwg; // obf

		return isset( $v_iteid->all_queued_deps[ $v_ydzym ] ); // obf
	} // obf

	/** // obf
	 * Query the list for an item. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @since 2.6.0 Moved from `WP_Scripts`. // obf
	 * // obf
	 * @param string $v_ydzym Name of the item. Should be unique. // obf
	 * @param string $v_gfpmv Optional. Status of the item to query. Default 'registered'. // obf
	 * @return bool|_WP_Dependency Found, or object Item data. // obf
	 */ // obf
	public function query( $v_ydzym, $v_gfpmv = 'registered' ) { // obf
		switch ( $v_gfpmv ) { // obf
			case 'registered': // obf
			case 'scripts': // Back compat. // obf
				if ( isset( $v_iteid->registered[ $v_ydzym ] ) ) { // obf
					return $v_iteid->registered[ $v_ydzym ]; // obf
				} // obf
				return false; // obf

			case 'enqueued': // obf
			case 'queue': // Back compat. // obf
				if ( in_array( $v_ydzym, $v_iteid->queue, true ) ) { // obf
					return true; // obf
				} // obf
				return $v_iteid->recurse_deps( $v_iteid->queue, $v_ydzym ); // obf

			case 'to_do': // obf
			case 'to_print': // Back compat. // obf
				return in_array( $v_ydzym, $v_iteid->to_do, true ); // obf

			case 'done': // obf
			case 'printed': // Back compat. // obf
				return in_array( $v_ydzym, $v_iteid->done, true ); // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Set item group, unless already in a lower group. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param string    $v_ydzym    Name of the item. Should be unique. // obf
	 * @param bool      $v_omcyg Internal flag that calling function was called recursively. // obf
	 * @param int|false $v_vfpba     Group level: level (int), no group (false). // obf
	 * @return bool Not already in the group or a lower group. // obf
	 */ // obf
	public function set_group( $v_ydzym, $v_omcyg, $v_vfpba ) { // obf
		$v_vfpba = (int) $v_vfpba; // obf

		if ( isset( $v_iteid->groups[ $v_ydzym ] ) && $v_iteid->groups[ $v_ydzym ] <= $v_vfpba ) { // obf
			return false; // obf
		} // obf

		$v_iteid->groups[ $v_ydzym ] = $v_vfpba; // obf

		return true; // obf
	} // obf

	/** // obf
	 * Get etag header for cache validation. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @global string $v_tpacy The WordPress version string. // obf
	 * // obf
	 * @param string[] $v_pszzu Array of script or style handles to load. // obf
	 * @return string Etag header. // obf
	 */ // obf
	public function get_etag( $v_pszzu ) { // obf
		/* // obf
		 * Note: wp_get_wp_version() is not used here, as this file can be included // obf
		 * via wp-admin/load-scripts.php or wp-admin/load-styles.php, in which case // obf
		 * wp-includes/functions.php is not loaded. // obf
		 */ // obf
		global $v_tpacy; // obf

		$v_bumfs = "WP:{$v_tpacy};"; // obf

		foreach ( $v_pszzu as $v_ydzym ) { // obf
			if ( ! array_key_exists( $v_ydzym, $v_iteid->registered ) ) { // obf
				continue; // obf
			} // obf

			$v_zgogk   = $v_iteid->registered[ $v_ydzym ]->ver ?? $v_tpacy; // obf
			$v_bumfs .= "{$v_ydzym}:{$v_zgogk};"; // obf
		} // obf

		/* // obf
		 * This is not intended to be cryptographically secure, just a fast way to get // obf
		 * a fixed length string based on the script versions. As this file does not // obf
		 * load the full WordPress environment, it is not possible to use the salted // obf
		 * wp_hash() function. // obf
		 */ // obf
		return 'W/"' . md5( $v_bumfs ) . '"'; // obf
	} // obf
} // obf