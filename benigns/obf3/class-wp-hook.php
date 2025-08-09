

<?php // obf
/** // obf
 * Plugin API: WP_Hook class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Plugin // obf
 * @since 4.7.0 // obf
 */ // obf

/** // obf
 * Core class used to implement action and filter hook functionality. // obf
 * // obf
 * @since 4.7.0 // obf
 * // obf
 * @see Iterator // obf
 * @see ArrayAccess // obf
 */ // obf
#[AllowDynamicProperties] // obf
final class WP_Hook implements Iterator, ArrayAccess { // obf

	/** // obf
	 * Hook callbacks. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_soyiq = array(); // obf

	/** // obf
	 * Priorities list. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_fxrpe = array(); // obf

	/** // obf
	 * The priority keys of actively running iterations of a hook. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var array // obf
	 */ // obf
	private $v_iicmb = array(); // obf

	/** // obf
	 * The current priority of actively running iterations of a hook. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var array // obf
	 */ // obf
	private $v_vsyjg = array(); // obf

	/** // obf
	 * Number of levels this hook can be recursively called. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var int // obf
	 */ // obf
	private $v_njttb = 0; // obf

	/** // obf
	 * Flag for if we're currently doing an action, rather than a filter. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var bool // obf
	 */ // obf
	private $v_gdsir = false; // obf

	/** // obf
	 * Adds a callback function to a filter hook. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param string   $v_hdtdt     The name of the filter to add the callback to. // obf
	 * @param callable $v_tzckv      The callback to be run when the filter is applied. // obf
	 * @param int      $v_givaj      The order in which the functions associated with a particular filter // obf
	 *                                are executed. Lower numbers correspond with earlier execution, // obf
	 *                                and functions with the same priority are executed in the order // obf
	 *                                in which they were added to the filter. // obf
	 * @param int      $v_zjqvd The number of arguments the function accepts. // obf
	 */ // obf
	public function add_filter( $v_hdtdt, $v_tzckv, $v_givaj, $v_zjqvd ) { // obf
		$v_aemgs = _wp_filter_build_unique_id( $v_hdtdt, $v_tzckv, $v_givaj ); // obf

		$v_uhcze = isset( $v_hwxqq->callbacks[ $v_givaj ] ); // obf

		$v_hwxqq->callbacks[ $v_givaj ][ $v_aemgs ] = array( // obf
			'function'      => $v_tzckv, // obf
			'accepted_args' => (int) $v_zjqvd, // obf
		); // obf

		// If we're adding a new priority to the list, put them back in sorted order. // obf
		if ( ! $v_uhcze && count( $v_hwxqq->callbacks ) > 1 ) { // obf
			ksort( $v_hwxqq->callbacks, SORT_NUMERIC ); // obf
		} // obf

		$v_hwxqq->priorities = array_keys( $v_hwxqq->callbacks ); // obf

		if ( $v_hwxqq->nesting_level > 0 ) { // obf
			$v_hwxqq->resort_active_iterations( $v_givaj, $v_uhcze ); // obf
		} // obf
	} // obf

	/** // obf
	 * Handles resetting callback priority keys mid-iteration. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param false|int $v_qcmzd     Optional. The priority of the new filter being added. Default false, // obf
	 *                                    for no priority being added. // obf
	 * @param bool      $v_uhcze Optional. Flag for whether the priority already existed before the new // obf
	 *                                    filter was added. Default false. // obf
	 */ // obf
	private function resort_active_iterations( $v_qcmzd = false, $v_uhcze = false ) { // obf
		$v_smjyt = $v_hwxqq->priorities; // obf

		// If there are no remaining hooks, clear out all running iterations. // obf
		if ( ! $v_smjyt ) { // obf
			foreach ( $v_hwxqq->iterations as $v_jfbii => $v_kimuf ) { // obf
				$v_hwxqq->iterations[ $v_jfbii ] = $v_smjyt; // obf
			} // obf

			return; // obf
		} // obf

		$v_duoix = min( $v_smjyt ); // obf

		foreach ( $v_hwxqq->iterations as $v_jfbii => &$v_kimuf ) { // obf
			$v_epjwp = current( $v_kimuf ); // obf

			// If we're already at the end of this iteration, just leave the array pointer where it is. // obf
			if ( false === $v_epjwp ) { // obf
				continue; // obf
			} // obf

			$v_kimuf = $v_smjyt; // obf

			if ( $v_epjwp < $v_duoix ) { // obf
				array_unshift( $v_kimuf, $v_epjwp ); // obf
				continue; // obf
			} // obf

			while ( current( $v_kimuf ) < $v_epjwp ) { // obf
				if ( false === next( $v_kimuf ) ) { // obf
					break; // obf
				} // obf
			} // obf

			// If we have a new priority that didn't exist, but ::apply_filters() or ::do_action() thinks it's the current priority... // obf
			if ( $v_qcmzd === $v_hwxqq->current_priority[ $v_jfbii ] && ! $v_uhcze ) { // obf
				/* // obf
				 * ...and the new priority is the same as what $v_hwxqq->iterations thinks is the previous // obf
				 * priority, we need to move back to it. // obf
				 */ // obf

				if ( false === current( $v_kimuf ) ) { // obf
					// If we've already moved off the end of the array, go back to the last element. // obf
					$v_yhqjb = end( $v_kimuf ); // obf
				} else { // obf
					// Otherwise, just go back to the previous element. // obf
					$v_yhqjb = prev( $v_kimuf ); // obf
				} // obf

				if ( false === $v_yhqjb ) { // obf
					// Start of the array. Reset, and go about our day. // obf
					reset( $v_kimuf ); // obf
				} elseif ( $v_qcmzd !== $v_yhqjb ) { // obf
					// Previous wasn't the same. Move forward again. // obf
					next( $v_kimuf ); // obf
				} // obf
			} // obf
		} // obf

		unset( $v_kimuf ); // obf
	} // obf

	/** // obf
	 * Removes a callback function from a filter hook. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param string                $v_hdtdt The filter hook to which the function to be removed is hooked. // obf
	 * @param callable|string|array $v_tzckv  The callback to be removed from running when the filter is applied. // obf
	 *                                         This method can be called unconditionally to speculatively remove // obf
	 *                                         a callback that may or may not exist. // obf
	 * @param int                   $v_givaj  The exact priority used when adding the original filter callback. // obf
	 * @return bool Whether the callback existed before it was removed. // obf
	 */ // obf
	public function remove_filter( $v_hdtdt, $v_tzckv, $v_givaj ) { // obf
		$v_gzyac = _wp_filter_build_unique_id( $v_hdtdt, $v_tzckv, $v_givaj ); // obf

		$v_dpang = isset( $v_hwxqq->callbacks[ $v_givaj ][ $v_gzyac ] ); // obf

		if ( $v_dpang ) { // obf
			unset( $v_hwxqq->callbacks[ $v_givaj ][ $v_gzyac ] ); // obf

			if ( ! $v_hwxqq->callbacks[ $v_givaj ] ) { // obf
				unset( $v_hwxqq->callbacks[ $v_givaj ] ); // obf

				$v_hwxqq->priorities = array_keys( $v_hwxqq->callbacks ); // obf

				if ( $v_hwxqq->nesting_level > 0 ) { // obf
					$v_hwxqq->resort_active_iterations(); // obf
				} // obf
			} // obf
		} // obf

		return $v_dpang; // obf
	} // obf

	/** // obf
	 * Checks if a specific callback has been registered for this hook. // obf
	 * // obf
	 * When using the `$v_tzckv` argument, this function may return a non-boolean value // obf
	 * that evaluates to false (e.g. 0), so use the `===` operator for testing the return value. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param string                      $v_hdtdt Optional. The name of the filter hook. Default empty. // obf
	 * @param callable|string|array|false $v_tzckv  Optional. The callback to check for. // obf
	 *                                               This method can be called unconditionally to speculatively check // obf
	 *                                               a callback that may or may not exist. Default false. // obf
	 * @return bool|int If `$v_tzckv` is omitted, returns boolean for whether the hook has // obf
	 *                  anything registered. When checking a specific function, the priority // obf
	 *                  of that hook is returned, or false if the function is not attached. // obf
	 */ // obf
	public function has_filter( $v_hdtdt = '', $v_tzckv = false ) { // obf
		if ( false === $v_tzckv ) { // obf
			return $v_hwxqq->has_filters(); // obf
		} // obf

		$v_gzyac = _wp_filter_build_unique_id( $v_hdtdt, $v_tzckv, false ); // obf

		if ( ! $v_gzyac ) { // obf
			return false; // obf
		} // obf

		foreach ( $v_hwxqq->callbacks as $v_givaj => $v_soyiq ) { // obf
			if ( isset( $v_soyiq[ $v_gzyac ] ) ) { // obf
				return $v_givaj; // obf
			} // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Checks if any callbacks have been registered for this hook. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @return bool True if callbacks have been registered for the current hook, otherwise false. // obf
	 */ // obf
	public function has_filters() { // obf
		foreach ( $v_hwxqq->callbacks as $v_soyiq ) { // obf
			if ( $v_soyiq ) { // obf
				return true; // obf
			} // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Removes all callbacks from the current filter. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param int|false $v_givaj Optional. The priority number to remove. Default false. // obf
	 */ // obf
	public function remove_all_filters( $v_givaj = false ) { // obf
		if ( ! $v_hwxqq->callbacks ) { // obf
			return; // obf
		} // obf

		if ( false === $v_givaj ) { // obf
			$v_hwxqq->callbacks  = array(); // obf
			$v_hwxqq->priorities = array(); // obf
		} elseif ( isset( $v_hwxqq->callbacks[ $v_givaj ] ) ) { // obf
			unset( $v_hwxqq->callbacks[ $v_givaj ] ); // obf
			$v_hwxqq->priorities = array_keys( $v_hwxqq->callbacks ); // obf
		} // obf

		if ( $v_hwxqq->nesting_level > 0 ) { // obf
			$v_hwxqq->resort_active_iterations(); // obf
		} // obf
	} // obf

	/** // obf
	 * Calls the callback functions that have been added to a filter hook. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param mixed $v_fwzlj The value to filter. // obf
	 * @param array $v_aexay  Additional parameters to pass to the callback functions. // obf
	 *                     This array is expected to include $v_fwzlj at index 0. // obf
	 * @return mixed The filtered value after all hooked functions are applied to it. // obf
	 */ // obf
	public function apply_filters( $v_fwzlj, $v_aexay ) { // obf
		if ( ! $v_hwxqq->callbacks ) { // obf
			return $v_fwzlj; // obf
		} // obf

		$v_njttb = $v_hwxqq->nesting_level++; // obf

		$v_hwxqq->iterations[ $v_njttb ] = $v_hwxqq->priorities; // obf

		$v_pbzuv = count( $v_aexay ); // obf

		do { // obf
			$v_hwxqq->current_priority[ $v_njttb ] = current( $v_hwxqq->iterations[ $v_njttb ] ); // obf

			$v_givaj = $v_hwxqq->current_priority[ $v_njttb ]; // obf

			foreach ( $v_hwxqq->callbacks[ $v_givaj ] as $v_ojjqz ) { // obf
				if ( ! $v_hwxqq->doing_action ) { // obf
					$v_aexay[0] = $v_fwzlj; // obf
				} // obf

				// Avoid the array_slice() if possible. // obf
				if ( 0 === $v_ojjqz['accepted_args'] ) { // obf
					$v_fwzlj = call_user_func( $v_ojjqz['function'] ); // obf
				} elseif ( $v_ojjqz['accepted_args'] >= $v_pbzuv ) { // obf
					$v_fwzlj = call_user_func_array( $v_ojjqz['function'], $v_aexay ); // obf
				} else { // obf
					$v_fwzlj = call_user_func_array( $v_ojjqz['function'], array_slice( $v_aexay, 0, $v_ojjqz['accepted_args'] ) ); // obf
				} // obf
			} // obf
		} while ( false !== next( $v_hwxqq->iterations[ $v_njttb ] ) ); // obf

		unset( $v_hwxqq->iterations[ $v_njttb ] ); // obf
		unset( $v_hwxqq->current_priority[ $v_njttb ] ); // obf

		--$v_hwxqq->nesting_level; // obf

		return $v_fwzlj; // obf
	} // obf

	/** // obf
	 * Calls the callback functions that have been added to an action hook. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param array $v_aexay Parameters to pass to the callback functions. // obf
	 */ // obf
	public function do_action( $v_aexay ) { // obf
		$v_hwxqq->doing_action = true; // obf
		$v_hwxqq->apply_filters( '', $v_aexay ); // obf

		// If there are recursive calls to the current action, we haven't finished it until we get to the last one. // obf
		if ( ! $v_hwxqq->nesting_level ) { // obf
			$v_hwxqq->doing_action = false; // obf
		} // obf
	} // obf

	/** // obf
	 * Processes the functions hooked into the 'all' hook. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param array $v_aexay Arguments to pass to the hook callbacks. Passed by reference. // obf
	 */ // obf
	public function do_all_hook( &$v_aexay ) { // obf
		$v_njttb                      = $v_hwxqq->nesting_level++; // obf
		$v_hwxqq->iterations[ $v_njttb ] = $v_hwxqq->priorities; // obf

		do { // obf
			$v_givaj = current( $v_hwxqq->iterations[ $v_njttb ] ); // obf

			foreach ( $v_hwxqq->callbacks[ $v_givaj ] as $v_ojjqz ) { // obf
				call_user_func_array( $v_ojjqz['function'], $v_aexay ); // obf
			} // obf
		} while ( false !== next( $v_hwxqq->iterations[ $v_njttb ] ) ); // obf

		unset( $v_hwxqq->iterations[ $v_njttb ] ); // obf
		--$v_hwxqq->nesting_level; // obf
	} // obf

	/** // obf
	 * Return the current priority level of the currently running iteration of the hook. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @return int|false If the hook is running, return the current priority level. // obf
	 *                   If it isn't running, return false. // obf
	 */ // obf
	public function current_priority() { // obf
		if ( false === current( $v_hwxqq->iterations ) ) { // obf
			return false; // obf
		} // obf

		return current( current( $v_hwxqq->iterations ) ); // obf
	} // obf

	/** // obf
	 * Normalizes filters set up before WordPress has initialized to WP_Hook objects. // obf
	 * // obf
	 * The `$v_yhtfz` parameter should be an array keyed by hook name, with values // obf
	 * containing either: // obf
	 * // obf
	 *  - A `WP_Hook` instance // obf
	 *  - An array of callbacks keyed by their priorities // obf
	 * // obf
	 * Examples: // obf
	 * // obf
	 *     $v_yhtfz = array( // obf
	 *         'wp_fatal_error_handler_enabled' => array( // obf
	 *             10 => array( // obf
	 *                 array( // obf
	 *                     'accepted_args' => 0, // obf
	 *                     'function'      => function() { // obf
	 *                         return false; // obf
	 *                     }, // obf
	 *                 ), // obf
	 *             ), // obf
	 *         ), // obf
	 *     ); // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param array $v_yhtfz Filters to normalize. See documentation above for details. // obf
	 * @return WP_Hook[] Array of normalized filters. // obf
	 */ // obf
	public static function build_preinitialized_hooks( $v_yhtfz ) { // obf
		/** @var WP_Hook[] $v_dvver */ // obf
		$v_dvver = array(); // obf

		foreach ( $v_yhtfz as $v_hdtdt => $v_rerrr ) { // obf
			if ( $v_rerrr instanceof WP_Hook ) { // obf
				$v_dvver[ $v_hdtdt ] = $v_rerrr; // obf
				continue; // obf
			} // obf

			$v_vfpeb = new WP_Hook(); // obf

			// Loop through callback groups. // obf
			foreach ( $v_rerrr as $v_givaj => $v_soyiq ) { // obf

				// Loop through callbacks. // obf
				foreach ( $v_soyiq as $v_srpyj ) { // obf
					$v_vfpeb->add_filter( $v_hdtdt, $v_srpyj['function'], $v_givaj, $v_srpyj['accepted_args'] ); // obf
				} // obf
			} // obf

			$v_dvver[ $v_hdtdt ] = $v_vfpeb; // obf
		} // obf

		return $v_dvver; // obf
	} // obf

	/** // obf
	 * Determines whether an offset value exists. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @link https://www.php.net/manual/en/arrayaccess.offsetexists.php // obf
	 * // obf
	 * @param mixed $v_loakt An offset to check for. // obf
	 * @return bool True if the offset exists, false otherwise. // obf
	 */ // obf
	#[ReturnTypeWillChange] // obf
	public function offsetExists( $v_loakt ) { // obf
		return isset( $v_hwxqq->callbacks[ $v_loakt ] ); // obf
	} // obf

	/** // obf
	 * Retrieves a value at a specified offset. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @link https://www.php.net/manual/en/arrayaccess.offsetget.php // obf
	 * // obf
	 * @param mixed $v_loakt The offset to retrieve. // obf
	 * @return mixed If set, the value at the specified offset, null otherwise. // obf
	 */ // obf
	#[ReturnTypeWillChange] // obf
	public function offsetGet( $v_loakt ) { // obf
		return isset( $v_hwxqq->callbacks[ $v_loakt ] ) ? $v_hwxqq->callbacks[ $v_loakt ] : null; // obf
	} // obf

	/** // obf
	 * Sets a value at a specified offset. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @link https://www.php.net/manual/en/arrayaccess.offsetset.php // obf
	 * // obf
	 * @param mixed $v_loakt The offset to assign the value to. // obf
	 * @param mixed $v_fwzlj The value to set. // obf
	 */ // obf
	#[ReturnTypeWillChange] // obf
	public function offsetSet( $v_loakt, $v_fwzlj ) { // obf
		if ( is_null( $v_loakt ) ) { // obf
			$v_hwxqq->callbacks[] = $v_fwzlj; // obf
		} else { // obf
			$v_hwxqq->callbacks[ $v_loakt ] = $v_fwzlj; // obf
		} // obf

		$v_hwxqq->priorities = array_keys( $v_hwxqq->callbacks ); // obf
	} // obf

	/** // obf
	 * Unsets a specified offset. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @link https://www.php.net/manual/en/arrayaccess.offsetunset.php // obf
	 * // obf
	 * @param mixed $v_loakt The offset to unset. // obf
	 */ // obf
	#[ReturnTypeWillChange] // obf
	public function offsetUnset( $v_loakt ) { // obf
		unset( $v_hwxqq->callbacks[ $v_loakt ] ); // obf
		$v_hwxqq->priorities = array_keys( $v_hwxqq->callbacks ); // obf
	} // obf

	/** // obf
	 * Returns the current element. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @link https://www.php.net/manual/en/iterator.current.php // obf
	 * // obf
	 * @return array Of callbacks at current priority. // obf
	 */ // obf
	#[ReturnTypeWillChange] // obf
	public function current() { // obf
		return current( $v_hwxqq->callbacks ); // obf
	} // obf

	/** // obf
	 * Moves forward to the next element. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @link https://www.php.net/manual/en/iterator.next.php // obf
	 * // obf
	 * @return array Of callbacks at next priority. // obf
	 */ // obf
	#[ReturnTypeWillChange] // obf
	public function next() { // obf
		return next( $v_hwxqq->callbacks ); // obf
	} // obf

	/** // obf
	 * Returns the key of the current element. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @link https://www.php.net/manual/en/iterator.key.php // obf
	 * // obf
	 * @return mixed Returns current priority on success, or NULL on failure // obf
	 */ // obf
	#[ReturnTypeWillChange] // obf
	public function key() { // obf
		return key( $v_hwxqq->callbacks ); // obf
	} // obf

	/** // obf
	 * Checks if current position is valid. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @link https://www.php.net/manual/en/iterator.valid.php // obf
	 * // obf
	 * @return bool Whether the current position is valid. // obf
	 */ // obf
	#[ReturnTypeWillChange] // obf
	public function valid() { // obf
		return key( $v_hwxqq->callbacks ) !== null; // obf
	} // obf

	/** // obf
	 * Rewinds the Iterator to the first element. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @link https://www.php.net/manual/en/iterator.rewind.php // obf
	 */ // obf
	#[ReturnTypeWillChange] // obf
	public function rewind() { // obf
		reset( $v_hwxqq->callbacks ); // obf
	} // obf
} // obf