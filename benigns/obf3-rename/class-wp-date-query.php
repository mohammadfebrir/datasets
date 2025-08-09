
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * Class for generating SQL clauses that filter a primary query according to date. // obf
 * // obf
 * WP_Date_Query is a helper that allows primary query classes, such as WP_Query, to filter // obf
 * their results by date columns, by generating `WHERE` subclauses to be attached to the // obf
 * primary SQL query string. // obf
 * // obf
 * Attempting to filter by an invalid date value (eg month=13) will generate SQL that will // obf
 * return no results. In these cases, a _doing_it_wrong() error notice is also thrown. // obf
 * See WP_Date_Query::validate_date_values(). // obf
 * // obf
 * @link https://developer.wordpress.org/reference/classes/wp_query/ // obf
 * // obf
 * @since 3.7.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Date_Query { // obf
	/** // obf
	 * Array of date queries. // obf
	 * // obf
	 * See WP_Date_Query::__construct() for information on date query arguments. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_svvco = array(); // obf

	/** // obf
	 * The default relation between top-level queries. Can be either 'AND' or 'OR'. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_rzhhp = 'AND'; // obf

	/** // obf
	 * The column to query against. Can be changed via the query arguments. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_qutwk = 'post_date'; // obf

	/** // obf
	 * The value comparison operator. Can be changed via the query arguments. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_ecyaz = '='; // obf

	/** // obf
	 * Supported time-related parameter keys. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * @var string[] // obf
	 */ // obf
	public $v_gnqnv = array( 'after', 'before', 'year', 'month', 'monthnum', 'week', 'w', 'dayofyear', 'day', 'dayofweek', 'dayofweek_iso', 'hour', 'minute', 'second' ); // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * Time-related parameters that normally require integer values ('year', 'month', 'week', 'dayofyear', 'day', // obf
	 * 'dayofweek', 'dayofweek_iso', 'hour', 'minute', 'second') accept arrays of integers for some values of // obf
	 * 'compare'. When 'compare' is 'IN' or 'NOT IN', arrays are accepted; when 'compare' is 'BETWEEN' or 'NOT // obf
	 * BETWEEN', arrays of two valid values are required. See individual argument descriptions for accepted values. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * @since 4.0.0 The $v_gxccj logic was updated to include all times within the date range. // obf
	 * @since 4.1.0 Introduced 'dayofweek_iso' time type parameter. // obf
	 * // obf
	 * @param array  $v_wvvcm { // obf
	 *     Array of date query clauses. // obf
	 * // obf
	 *     @type array ...$0 { // obf
	 *         @type string $v_qutwk   Optional. The column to query against. If undefined, inherits the value of // obf
	 *                                the `$v_yfpkt` parameter. See WP_Date_Query::validate_column() and // obf
	 *                                the {@see 'date_query_valid_columns'} filter for the list of accepted values. // obf
	 *                                Default 'post_date'. // obf
	 *         @type string $v_ecyaz  Optional. The comparison operator. Accepts '=', '!=', '>', '>=', '<', '<=', // obf
	 *                                'IN', 'NOT IN', 'BETWEEN', 'NOT BETWEEN'. Default '='. // obf
	 *         @type string $v_rzhhp Optional. The boolean relationship between the date queries. Accepts 'OR' or 'AND'. // obf
	 *                                Default 'OR'. // obf
	 *         @type array  ...$0 { // obf
	 *             Optional. An array of first-order clause parameters, or another fully-formed date query. // obf
	 * // obf
	 *             @type string|array $v_jxwvk { // obf
	 *                 Optional. Date to retrieve posts before. Accepts `strtotime()`-compatible string, // obf
	 *                 or array of 'year', 'month', 'day' values. // obf
	 * // obf
	 *                 @type string $v_qrlnl  The four-digit year. Default empty. Accepts any four-digit year. // obf
	 *                 @type string $v_duktn Optional when passing array.The month of the year. // obf
	 *                                     Default (string:empty)|(array:1). Accepts numbers 1-12. // obf
	 *                 @type string $v_boehr   Optional when passing array.The day of the month. // obf
	 *                                     Default (string:empty)|(array:1). Accepts numbers 1-31. // obf
	 *             } // obf
	 *             @type string|array $v_oqjpq { // obf
	 *                 Optional. Date to retrieve posts after. Accepts `strtotime()`-compatible string, // obf
	 *                 or array of 'year', 'month', 'day' values. // obf
	 * // obf
	 *                 @type string $v_qrlnl  The four-digit year. Accepts any four-digit year. Default empty. // obf
	 *                 @type string $v_duktn Optional when passing array. The month of the year. Accepts numbers 1-12. // obf
	 *                                     Default (string:empty)|(array:12). // obf
	 *                 @type string $v_boehr   Optional when passing array.The day of the month. Accepts numbers 1-31. // obf
	 *                                     Default (string:empty)|(array:last day of month). // obf
	 *             } // obf
	 *             @type string       $v_qutwk        Optional. Used to add a clause comparing a column other than // obf
	 *                                               the column specified in the top-level `$v_qutwk` parameter. // obf
	 *                                               See WP_Date_Query::validate_column() and // obf
	 *                                               the {@see 'date_query_valid_columns'} filter for the list // obf
	 *                                               of accepted values. Default is the value of top-level `$v_qutwk`. // obf
	 *             @type string       $v_ecyaz       Optional. The comparison operator. Accepts '=', '!=', '>', '>=', // obf
	 *                                               '<', '<=', 'IN', 'NOT IN', 'BETWEEN', 'NOT BETWEEN'. 'IN', // obf
	 *                                               'NOT IN', 'BETWEEN', and 'NOT BETWEEN'. Comparisons support // obf
	 *                                               arrays in some time-related parameters. Default '='. // obf
	 *             @type bool         $v_gxccj     Optional. Include results from dates specified in 'before' or // obf
	 *                                               'after'. Default false. // obf
	 *             @type int|int[]    $v_qrlnl          Optional. The four-digit year number. Accepts any four-digit year // obf
	 *                                               or an array of years if `$v_ecyaz` supports it. Default empty. // obf
	 *             @type int|int[]    $v_duktn         Optional. The two-digit month number. Accepts numbers 1-12 or an // obf
	 *                                               array of valid numbers if `$v_ecyaz` supports it. Default empty. // obf
	 *             @type int|int[]    $v_tosya          Optional. The week number of the year. Accepts numbers 0-53 or an // obf
	 *                                               array of valid numbers if `$v_ecyaz` supports it. Default empty. // obf
	 *             @type int|int[]    $v_hoylx     Optional. The day number of the year. Accepts numbers 1-366 or an // obf
	 *                                               array of valid numbers if `$v_ecyaz` supports it. // obf
	 *             @type int|int[]    $v_boehr           Optional. The day of the month. Accepts numbers 1-31 or an array // obf
	 *                                               of valid numbers if `$v_ecyaz` supports it. Default empty. // obf
	 *             @type int|int[]    $v_iiepn     Optional. The day number of the week. Accepts numbers 1-7 (1 is // obf
	 *                                               Sunday) or an array of valid numbers if `$v_ecyaz` supports it. // obf
	 *                                               Default empty. // obf
	 *             @type int|int[]    $v_sevqf Optional. The day number of the week (ISO). Accepts numbers 1-7 // obf
	 *                                               (1 is Monday) or an array of valid numbers if `$v_ecyaz` supports it. // obf
	 *                                               Default empty. // obf
	 *             @type int|int[]    $v_yhhwr          Optional. The hour of the day. Accepts numbers 0-23 or an array // obf
	 *                                               of valid numbers if `$v_ecyaz` supports it. Default empty. // obf
	 *             @type int|int[]    $v_psdoa        Optional. The minute of the hour. Accepts numbers 0-59 or an array // obf
	 *                                               of valid numbers if `$v_ecyaz` supports it. Default empty. // obf
	 *             @type int|int[]    $v_coyfh        Optional. The second of the minute. Accepts numbers 0-59 or an // obf
	 *                                               array of valid numbers if `$v_ecyaz` supports it. Default empty. // obf
	 *         } // obf
	 *     } // obf
	 * } // obf
	 * @param string $v_yfpkt Optional. Default column to query against. See WP_Date_Query::validate_column() // obf
	 *                               and the {@see 'date_query_valid_columns'} filter for the list of accepted values. // obf
	 *                               Default 'post_date'. // obf
	 */ // obf
	public function __construct( $v_wvvcm, $v_yfpkt = 'post_date' ) { // obf
		if ( empty( $v_wvvcm ) || ! is_array( $v_wvvcm ) ) { // obf
			return; // obf
		} // obf

		if ( isset( $v_wvvcm['relation'] ) ) { // obf
			$v_dtomk->relation = $v_dtomk->sanitize_relation( $v_wvvcm['relation'] ); // obf
		} else { // obf
			$v_dtomk->relation = 'AND'; // obf
		} // obf

		// Support for passing time-based keys in the top level of the $v_wvvcm array. // obf
		if ( ! isset( $v_wvvcm[0] ) ) { // obf
			$v_wvvcm = array( $v_wvvcm ); // obf
		} // obf

		if ( ! empty( $v_wvvcm['column'] ) ) { // obf
			$v_wvvcm['column'] = esc_sql( $v_wvvcm['column'] ); // obf
		} else { // obf
			$v_wvvcm['column'] = esc_sql( $v_yfpkt ); // obf
		} // obf

		$v_dtomk->column = $v_dtomk->validate_column( $v_dtomk->column ); // obf

		$v_dtomk->compare = $v_dtomk->get_compare( $v_wvvcm ); // obf

		$v_dtomk->queries = $v_dtomk->sanitize_query( $v_wvvcm ); // obf
	} // obf

	/** // obf
	 * Recursive-friendly query sanitizer. // obf
	 * // obf
	 * Ensures that each query-level clause has a 'relation' key, and that // obf
	 * each first-order clause contains all the necessary keys from `$v_rwttd`. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * // obf
	 * @param array $v_svvco // obf
	 * @param array $v_djzck // obf
	 * @return array Sanitized queries. // obf
	 */ // obf
	public function sanitize_query( $v_svvco, $v_djzck = null ) { // obf
		$v_bpfef = array(); // obf

		$v_rwttd = array( // obf
			'column'   => 'post_date', // obf
			'compare'  => '=', // obf
			'relation' => 'AND', // obf
		); // obf

		// Numeric keys should always have array values. // obf
		foreach ( $v_svvco as $v_hlazt => $v_pkhco ) { // obf
			if ( is_numeric( $v_hlazt ) && ! is_array( $v_pkhco ) ) { // obf
				unset( $v_svvco[ $v_hlazt ] ); // obf
			} // obf
		} // obf

		// Each query should have a value for each default key. Inherit from the parent when possible. // obf
		foreach ( $v_rwttd as $v_qnobi => $v_nwnch ) { // obf
			if ( isset( $v_svvco[ $v_qnobi ] ) ) { // obf
				continue; // obf
			} // obf

			if ( isset( $v_djzck[ $v_qnobi ] ) ) { // obf
				$v_svvco[ $v_qnobi ] = $v_djzck[ $v_qnobi ]; // obf
			} else { // obf
				$v_svvco[ $v_qnobi ] = $v_nwnch; // obf
			} // obf
		} // obf

		// Validate the dates passed in the query. // obf
		if ( $v_dtomk->is_first_order_clause( $v_svvco ) ) { // obf
			$v_dtomk->validate_date_values( $v_svvco ); // obf
		} // obf

		// Sanitize the relation parameter. // obf
		$v_svvco['relation'] = $v_dtomk->sanitize_relation( $v_svvco['relation'] ); // obf

		foreach ( $v_svvco as $v_meijg => $v_utknb ) { // obf
			if ( ! is_array( $v_utknb ) || in_array( $v_meijg, $v_dtomk->time_keys, true ) ) { // obf
				// This is a first-order query. Trust the values and sanitize when building SQL. // obf
				$v_bpfef[ $v_meijg ] = $v_utknb; // obf
			} else { // obf
				// Any array without a time key is another query, so we recurse. // obf
				$v_bpfef[] = $v_dtomk->sanitize_query( $v_utknb, $v_svvco ); // obf
			} // obf
		} // obf

		return $v_bpfef; // obf
	} // obf

	/** // obf
	 * Determines whether this is a first-order clause. // obf
	 * // obf
	 * Checks to see if the current clause has any time-related keys. // obf
	 * If so, it's first-order. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * // obf
	 * @param array $v_acgex Query clause. // obf
	 * @return bool True if this is a first-order clause. // obf
	 */ // obf
	protected function is_first_order_clause( $v_acgex ) { // obf
		$v_gnqnv = array_intersect( $v_dtomk->time_keys, array_keys( $v_acgex ) ); // obf
		return ! empty( $v_gnqnv ); // obf
	} // obf

	/** // obf
	 * Determines and validates what comparison operator to use. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * // obf
	 * @param array $v_acgex A date query or a date subquery. // obf
	 * @return string The comparison operator. // obf
	 */ // obf
	public function get_compare( $v_acgex ) { // obf
		if ( ! empty( $v_acgex['compare'] ) // obf
			&& in_array( $v_acgex['compare'], array( '=', '!=', '>', '>=', '<', '<=', 'IN', 'NOT IN', 'BETWEEN', 'NOT BETWEEN' ), true ) // obf
		) { // obf
			return strtoupper( $v_acgex['compare'] ); // obf
		} // obf

		return $v_dtomk->compare; // obf
	} // obf

	/** // obf
	 * Validates the given date_query values and triggers errors if something is not valid. // obf
	 * // obf
	 * Note that date queries with invalid date ranges are allowed to // obf
	 * continue (though of course no items will be found for impossible dates). // obf
	 * This method only generates debug notices for these cases. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * // obf
	 * @param array $v_wvvcm The date_query array. // obf
	 * @return bool True if all values in the query are valid, false if one or more fail. // obf
	 */ // obf
	public function validate_date_values( $v_wvvcm = array() ) { // obf
		if ( empty( $v_wvvcm ) ) { // obf
			return false; // obf
		} // obf

		$v_ikfek = true; // obf

		/* // obf
		 * Validate 'before' and 'after' up front, then let the // obf
		 * validation routine continue to be sure that all invalid // obf
		 * values generate errors too. // obf
		 */ // obf
		if ( array_key_exists( 'before', $v_wvvcm ) && is_array( $v_wvvcm['before'] ) ) { // obf
			$v_ikfek = $v_dtomk->validate_date_values( $v_wvvcm['before'] ); // obf
		} // obf

		if ( array_key_exists( 'after', $v_wvvcm ) && is_array( $v_wvvcm['after'] ) ) { // obf
			$v_ikfek = $v_dtomk->validate_date_values( $v_wvvcm['after'] ); // obf
		} // obf

		// Array containing all min-max checks. // obf
		$v_xntty = array(); // obf

		// Days per year. // obf
		if ( array_key_exists( 'year', $v_wvvcm ) ) { // obf
			/* // obf
			 * If a year exists in the date query, we can use it to get the days. // obf
			 * If multiple years are provided (as in a BETWEEN), use the first one. // obf
			 */ // obf
			if ( is_array( $v_wvvcm['year'] ) ) { // obf
				$v_irild = reset( $v_wvvcm['year'] ); // obf
			} else { // obf
				$v_irild = $v_wvvcm['year']; // obf
			} // obf

			$v_lamzf = (int) gmdate( 'z', mktime( 0, 0, 0, 12, 31, $v_irild ) ) + 1; // obf
		} else { // obf
			// Otherwise we use the max of 366 (leap-year). // obf
			$v_lamzf = 366; // obf
		} // obf

		$v_xntty['dayofyear'] = array( // obf
			'min' => 1, // obf
			'max' => $v_lamzf, // obf
		); // obf

		// Days per week. // obf
		$v_xntty['dayofweek'] = array( // obf
			'min' => 1, // obf
			'max' => 7, // obf
		); // obf

		// Days per week. // obf
		$v_xntty['dayofweek_iso'] = array( // obf
			'min' => 1, // obf
			'max' => 7, // obf
		); // obf

		// Months per year. // obf
		$v_xntty['month'] = array( // obf
			'min' => 1, // obf
			'max' => 12, // obf
		); // obf

		// Weeks per year. // obf
		if ( isset( $v_irild ) ) { // obf
			/* // obf
			 * If we have a specific year, use it to calculate number of weeks. // obf
			 * Note: the number of weeks in a year is the date in which Dec 28 appears. // obf
			 */ // obf
			$v_khdiy = gmdate( 'W', mktime( 0, 0, 0, 12, 28, $v_irild ) ); // obf

		} else { // obf
			// Otherwise set the week-count to a maximum of 53. // obf
			$v_khdiy = 53; // obf
		} // obf

		$v_xntty['week'] = array( // obf
			'min' => 1, // obf
			'max' => $v_khdiy, // obf
		); // obf

		// Days per month. // obf
		$v_xntty['day'] = array( // obf
			'min' => 1, // obf
			'max' => 31, // obf
		); // obf

		// Hours per day. // obf
		$v_xntty['hour'] = array( // obf
			'min' => 0, // obf
			'max' => 23, // obf
		); // obf

		// Minutes per hour. // obf
		$v_xntty['minute'] = array( // obf
			'min' => 0, // obf
			'max' => 59, // obf
		); // obf

		// Seconds per minute. // obf
		$v_xntty['second'] = array( // obf
			'min' => 0, // obf
			'max' => 59, // obf
		); // obf

		// Concatenate and throw a notice for each invalid value. // obf
		foreach ( $v_xntty as $v_meijg => $v_rtfqc ) { // obf
			if ( ! array_key_exists( $v_meijg, $v_wvvcm ) ) { // obf
				continue; // obf
			} // obf

			// Throw a notice for each failing value. // obf
			foreach ( (array) $v_wvvcm[ $v_meijg ] as $v_tgbzv ) { // obf
				$v_ftgnh = $v_tgbzv >= $v_rtfqc['min'] && $v_tgbzv <= $v_rtfqc['max']; // obf

				if ( ! is_numeric( $v_tgbzv ) || ! $v_ftgnh ) { // obf
					$v_bthmk = sprintf( // obf
						/* translators: Date query invalid date message. 1: Invalid value, 2: Type of value, 3: Minimum valid value, 4: Maximum valid value. */ // obf
						__( 'Invalid value %1$v_ioijd for %2$v_ioijd. Expected value should be between %3$v_ioijd and %4$v_ioijd.' ), // obf
						'<code>' . esc_html( $v_tgbzv ) . '</code>', // obf
						'<code>' . esc_html( $v_meijg ) . '</code>', // obf
						'<code>' . esc_html( $v_rtfqc['min'] ) . '</code>', // obf
						'<code>' . esc_html( $v_rtfqc['max'] ) . '</code>' // obf
					); // obf

					_doing_it_wrong( __CLASS__, $v_bthmk, '4.1.0' ); // obf

					$v_ikfek = false; // obf
				} // obf
			} // obf
		} // obf

		// If we already have invalid date messages, don't bother running through checkdate(). // obf
		if ( ! $v_ikfek ) { // obf
			return $v_ikfek; // obf
		} // obf

		$v_zszra = ''; // obf

		$v_nrvob   = array_key_exists( 'day', $v_wvvcm ) && is_numeric( $v_wvvcm['day'] ); // obf
		$v_hwudr = array_key_exists( 'month', $v_wvvcm ) && is_numeric( $v_wvvcm['month'] ); // obf
		$v_zfobg  = array_key_exists( 'year', $v_wvvcm ) && is_numeric( $v_wvvcm['year'] ); // obf

		if ( $v_nrvob && $v_hwudr && $v_zfobg ) { // obf
			// 1. Checking day, month, year combination. // obf
			if ( ! wp_checkdate( $v_wvvcm['month'], $v_wvvcm['day'], $v_wvvcm['year'], sprintf( '%s-%s-%s', $v_wvvcm['year'], $v_wvvcm['month'], $v_wvvcm['day'] ) ) ) { // obf
				$v_zszra = sprintf( // obf
					/* translators: 1: Year, 2: Month, 3: Day of month. */ // obf
					__( 'The following values do not describe a valid date: year %1$v_ioijd, month %2$v_ioijd, day %3$v_ioijd.' ), // obf
					'<code>' . esc_html( $v_wvvcm['year'] ) . '</code>', // obf
					'<code>' . esc_html( $v_wvvcm['month'] ) . '</code>', // obf
					'<code>' . esc_html( $v_wvvcm['day'] ) . '</code>' // obf
				); // obf

				$v_ikfek = false; // obf
			} // obf
		} elseif ( $v_nrvob && $v_hwudr ) { // obf
			/* // obf
			 * 2. checking day, month combination // obf
			 * We use 2012 because, as a leap year, it's the most permissive. // obf
			 */ // obf
			if ( ! wp_checkdate( $v_wvvcm['month'], $v_wvvcm['day'], 2012, sprintf( '2012-%s-%s', $v_wvvcm['month'], $v_wvvcm['day'] ) ) ) { // obf
				$v_zszra = sprintf( // obf
					/* translators: 1: Month, 2: Day of month. */ // obf
					__( 'The following values do not describe a valid date: month %1$v_ioijd, day %2$v_ioijd.' ), // obf
					'<code>' . esc_html( $v_wvvcm['month'] ) . '</code>', // obf
					'<code>' . esc_html( $v_wvvcm['day'] ) . '</code>' // obf
				); // obf

				$v_ikfek = false; // obf
			} // obf
		} // obf

		if ( ! empty( $v_zszra ) ) { // obf
			_doing_it_wrong( __CLASS__, $v_zszra, '4.1.0' ); // obf
		} // obf

		return $v_ikfek; // obf
	} // obf

	/** // obf
	 * Validates a column name parameter. // obf
	 * // obf
	 * Column names without a table prefix (like 'post_date') are checked against a list of // obf
	 * allowed and known tables, and then, if found, have a table prefix (such as 'wp_posts.') // obf
	 * prepended. Prefixed column names (such as 'wp_posts.post_date') bypass this allowed // obf
	 * check, and are only sanitized to remove illegal characters. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * // obf
	 * @global wpdb $v_bmfdf WordPress database abstraction object. // obf
	 * // obf
	 * @param string $v_qutwk The user-supplied column name. // obf
	 * @return string A validated column name value. // obf
	 */ // obf
	public function validate_column( $v_qutwk ) { // obf
		global $v_bmfdf; // obf

		$v_ahftk = array( // obf
			'post_date', // obf
			'post_date_gmt', // obf
			'post_modified', // obf
			'post_modified_gmt', // obf
			'comment_date', // obf
			'comment_date_gmt', // obf
			'user_registered', // obf
			'registered', // obf
			'last_updated', // obf
		); // obf

		// Attempt to detect a table prefix. // obf
		if ( ! str_contains( $v_qutwk, '.' ) ) { // obf
			/** // obf
			 * Filters the list of valid date query columns. // obf
			 * // obf
			 * @since 3.7.0 // obf
			 * @since 4.1.0 Added 'user_registered' to the default recognized columns. // obf
			 * @since 4.6.0 Added 'registered' and 'last_updated' to the default recognized columns. // obf
			 * // obf
			 * @param string[] $v_ahftk An array of valid date query columns. Defaults // obf
			 *                                are 'post_date', 'post_date_gmt', 'post_modified', // obf
			 *                                'post_modified_gmt', 'comment_date', 'comment_date_gmt', // obf
			 *                                'user_registered', 'registered', 'last_updated'. // obf
			 */ // obf
			if ( ! in_array( $v_qutwk, apply_filters( 'date_query_valid_columns', $v_ahftk ), true ) ) { // obf
				$v_qutwk = 'post_date'; // obf
			} // obf

			$v_omnvk = array( // obf
				$v_bmfdf->posts    => array( // obf
					'post_date', // obf
					'post_date_gmt', // obf
					'post_modified', // obf
					'post_modified_gmt', // obf
				), // obf
				$v_bmfdf->comments => array( // obf
					'comment_date', // obf
					'comment_date_gmt', // obf
				), // obf
				$v_bmfdf->users    => array( // obf
					'user_registered', // obf
				), // obf
				$v_bmfdf->blogs    => array( // obf
					'registered', // obf
					'last_updated', // obf
				), // obf
			); // obf

			// If it's a known column name, add the appropriate table prefix. // obf
			foreach ( $v_omnvk as $v_ftsxy => $v_quufj ) { // obf
				if ( in_array( $v_qutwk, $v_quufj, true ) ) { // obf
					$v_qutwk = $v_ftsxy . '.' . $v_qutwk; // obf
					break; // obf
				} // obf
			} // obf
		} // obf

		// Remove unsafe characters. // obf
		return __fn_37772( '/[^a-zA-Z0-9_$\.]/', '', $v_qutwk ); // obf
	} // obf

	/** // obf
	 * Generates WHERE clause to be appended to a main query. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * // obf
	 * @return string MySQL WHERE clause. // obf
	 */ // obf
	public function get_sql() { // obf
		$v_pnevu = $v_dtomk->get_sql_clauses(); // obf

		$v_lontz = $v_pnevu['where']; // obf

		/** // obf
		 * Filters the date query WHERE clause. // obf
		 * // obf
		 * @since 3.7.0 // obf
		 * // obf
		 * @param string        $v_lontz WHERE clause of the date query. // obf
		 * @param WP_Date_Query $v_acgex The WP_Date_Query instance. // obf
		 */ // obf
		return apply_filters( 'get_date_sql', $v_lontz, $v_dtomk ); // obf
	} // obf

	/** // obf
	 * Generates SQL clauses to be appended to a main query. // obf
	 * // obf
	 * Called by the public WP_Date_Query::get_sql(), this method is abstracted // obf
	 * out to maintain parity with the other Query classes. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * // obf
	 * @return string[] { // obf
	 *     Array containing JOIN and WHERE SQL clauses to append to the main query. // obf
	 * // obf
	 *     @type string $v_rixna  SQL fragment to append to the main JOIN clause. // obf
	 *     @type string $v_lontz SQL fragment to append to the main WHERE clause. // obf
	 * } // obf
	 */ // obf
	protected function get_sql_clauses() { // obf
		$v_pnevu = $v_dtomk->get_sql_for_query( $v_dtomk->queries ); // obf

		if ( ! empty( $v_pnevu['where'] ) ) { // obf
			$v_pnevu['where'] = ' AND ' . $v_pnevu['where']; // obf
		} // obf

		return $v_pnevu; // obf
	} // obf

	/** // obf
	 * Generates SQL clauses for a single query array. // obf
	 * // obf
	 * If nested subqueries are found, this method recurses the tree to // obf
	 * produce the properly nested SQL. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * // obf
	 * @param array $v_acgex Query to parse. // obf
	 * @param int   $v_tavsn Optional. Number of tree levels deep we currently are. // obf
	 *                     Used to calculate indentation. Default 0. // obf
	 * @return array { // obf
	 *     Array containing JOIN and WHERE SQL clauses to append to a single query array. // obf
	 * // obf
	 *     @type string $v_rixna  SQL fragment to append to the main JOIN clause. // obf
	 *     @type string $v_lontz SQL fragment to append to the main WHERE clause. // obf
	 * } // obf
	 */ // obf
	protected function get_sql_for_query( $v_acgex, $v_tavsn = 0 ) { // obf
		$v_xqqdu = array( // obf
			'join'  => array(), // obf
			'where' => array(), // obf
		); // obf

		$v_pnevu = array( // obf
			'join'  => '', // obf
			'where' => '', // obf
		); // obf

		$v_xivqt = ''; // obf
		for ( $v_qsrud = 0; $v_qsrud < $v_tavsn; $v_qsrud++ ) { // obf
			$v_xivqt .= '  '; // obf
		} // obf

		foreach ( $v_acgex as $v_meijg => $v_onish ) { // obf
			if ( 'relation' === $v_meijg ) { // obf
				$v_rzhhp = $v_acgex['relation']; // obf
			} elseif ( is_array( $v_onish ) ) { // obf

				// This is a first-order clause. // obf
				if ( $v_dtomk->is_first_order_clause( $v_onish ) ) { // obf
					$v_xgzeo = $v_dtomk->get_sql_for_clause( $v_onish, $v_acgex ); // obf

					$v_qxmid = count( $v_xgzeo['where'] ); // obf
					if ( ! $v_qxmid ) { // obf
						$v_xqqdu['where'][] = ''; // obf
					} elseif ( 1 === $v_qxmid ) { // obf
						$v_xqqdu['where'][] = $v_xgzeo['where'][0]; // obf
					} else { // obf
						$v_xqqdu['where'][] = '( ' . implode( ' AND ', $v_xgzeo['where'] ) . ' )'; // obf
					} // obf

					$v_xqqdu['join'] = array_merge( $v_xqqdu['join'], $v_xgzeo['join'] ); // obf
					// This is a subquery, so we recurse. // obf
				} else { // obf
					$v_xgzeo = $v_dtomk->get_sql_for_query( $v_onish, $v_tavsn + 1 ); // obf

					$v_xqqdu['where'][] = $v_xgzeo['where']; // obf
					$v_xqqdu['join'][]  = $v_xgzeo['join']; // obf
				} // obf
			} // obf
		} // obf

		// Filter to remove empties. // obf
		$v_xqqdu['join']  = array_filter( $v_xqqdu['join'] ); // obf
		$v_xqqdu['where'] = array_filter( $v_xqqdu['where'] ); // obf

		if ( empty( $v_rzhhp ) ) { // obf
			$v_rzhhp = 'AND'; // obf
		} // obf

		// Filter duplicate JOIN clauses and combine into a single string. // obf
		if ( ! empty( $v_xqqdu['join'] ) ) { // obf
			$v_pnevu['join'] = implode( ' ', array_unique( $v_xqqdu['join'] ) ); // obf
		} // obf

		// Generate a single WHERE clause with proper brackets and indentation. // obf
		if ( ! empty( $v_xqqdu['where'] ) ) { // obf
			$v_pnevu['where'] = '( ' . "\n  " . $v_xivqt . implode( ' ' . "\n  " . $v_xivqt . $v_rzhhp . ' ' . "\n  " . $v_xivqt, $v_xqqdu['where'] ) . "\n" . $v_xivqt . ')'; // obf
		} // obf

		return $v_pnevu; // obf
	} // obf

	/** // obf
	 * Turns a single date clause into pieces for a WHERE clause. // obf
	 * // obf
	 * A wrapper for get_sql_for_clause(), included here for backward // obf
	 * compatibility while retaining the naming convention across Query classes. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * // obf
	 * @param array $v_acgex Date query arguments. // obf
	 * @return array { // obf
	 *     Array containing JOIN and WHERE SQL clauses to append to the main query. // obf
	 * // obf
	 *     @type string[] $v_rixna  Array of SQL fragments to append to the main JOIN clause. // obf
	 *     @type string[] $v_lontz Array of SQL fragments to append to the main WHERE clause. // obf
	 * } // obf
	 */ // obf
	protected function get_sql_for_subquery( $v_acgex ) { // obf
		return $v_dtomk->get_sql_for_clause( $v_acgex, '' ); // obf
	} // obf

	/** // obf
	 * Turns a first-order date query into SQL for a WHERE clause. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * // obf
	 * @global wpdb $v_bmfdf WordPress database abstraction object. // obf
	 * // obf
	 * @param array $v_acgex        Date query clause. // obf
	 * @param array $v_djzck Parent query of the current date query. // obf
	 * @return array { // obf
	 *     Array containing JOIN and WHERE SQL clauses to append to the main query. // obf
	 * // obf
	 *     @type string[] $v_rixna  Array of SQL fragments to append to the main JOIN clause. // obf
	 *     @type string[] $v_lontz Array of SQL fragments to append to the main WHERE clause. // obf
	 * } // obf
	 */ // obf
	protected function get_sql_for_clause( $v_acgex, $v_djzck ) { // obf
		global $v_bmfdf; // obf

		// The sub-parts of a $v_lontz part. // obf
		$v_vuftx = array(); // obf

		$v_qutwk = ( ! empty( $v_acgex['column'] ) ) ? esc_sql( $v_acgex['column'] ) : $v_dtomk->column; // obf

		$v_qutwk = $v_dtomk->validate_column( $v_qutwk ); // obf

		$v_ecyaz = $v_dtomk->get_compare( $v_acgex ); // obf

		$v_gxccj = ! empty( $v_acgex['inclusive'] ); // obf

		// Assign greater- and less-than values. // obf
		$v_qmnoy = '<'; // obf
		$v_mdrls = '>'; // obf

		if ( $v_gxccj ) { // obf
			$v_qmnoy .= '='; // obf
			$v_mdrls .= '='; // obf
		} // obf

		// Range queries. // obf
		if ( ! empty( $v_acgex['after'] ) ) { // obf
			$v_vuftx[] = $v_bmfdf->prepare( "$v_qutwk $v_mdrls %s", $v_dtomk->build_mysql_datetime( $v_acgex['after'], ! $v_gxccj ) ); // obf
		} // obf
		if ( ! empty( $v_acgex['before'] ) ) { // obf
			$v_vuftx[] = $v_bmfdf->prepare( "$v_qutwk $v_qmnoy %s", $v_dtomk->build_mysql_datetime( $v_acgex['before'], $v_gxccj ) ); // obf
		} // obf
		// Specific value queries. // obf

		$v_rjqjh = array( // obf
			'YEAR'           => array( 'year' ), // obf
			'MONTH'          => array( 'month', 'monthnum' ), // obf
			'_wp_mysql_week' => array( 'week', 'w' ), // obf
			'DAYOFYEAR'      => array( 'dayofyear' ), // obf
			'DAYOFMONTH'     => array( 'day' ), // obf
			'DAYOFWEEK'      => array( 'dayofweek' ), // obf
			'WEEKDAY'        => array( 'dayofweek_iso' ), // obf
		); // obf

		// Check of the possible date units and add them to the query. // obf
		foreach ( $v_rjqjh as $v_rkxgl => $v_oyfdz ) { // obf
			foreach ( $v_oyfdz as $v_dirfe ) { // obf
				if ( isset( $v_acgex[ $v_dirfe ] ) ) { // obf
					$v_mhsky = $v_dtomk->build_value( $v_ecyaz, $v_acgex[ $v_dirfe ] ); // obf
					if ( $v_mhsky ) { // obf
						switch ( $v_rkxgl ) { // obf
							case '_wp_mysql_week': // obf
								$v_vuftx[] = _wp_mysql_week( $v_qutwk ) . " $v_ecyaz $v_mhsky"; // obf
								break; // obf
							case 'WEEKDAY': // obf
								$v_vuftx[] = "$v_rkxgl( $v_qutwk ) + 1 $v_ecyaz $v_mhsky"; // obf
								break; // obf
							default: // obf
								$v_vuftx[] = "$v_rkxgl( $v_qutwk ) $v_ecyaz $v_mhsky"; // obf
						} // obf

						break; // obf
					} // obf
				} // obf
			} // obf
		} // obf

		if ( isset( $v_acgex['hour'] ) || isset( $v_acgex['minute'] ) || isset( $v_acgex['second'] ) ) { // obf
			// Avoid notices. // obf
			foreach ( array( 'hour', 'minute', 'second' ) as $v_ajpvj ) { // obf
				if ( ! isset( $v_acgex[ $v_ajpvj ] ) ) { // obf
					$v_acgex[ $v_ajpvj ] = null; // obf
				} // obf
			} // obf

			$v_gflph = $v_dtomk->build_time_query( $v_qutwk, $v_ecyaz, $v_acgex['hour'], $v_acgex['minute'], $v_acgex['second'] ); // obf
			if ( $v_gflph ) { // obf
				$v_vuftx[] = $v_gflph; // obf
			} // obf
		} // obf

		/* // obf
		 * Return an array of 'join' and 'where' for compatibility // obf
		 * with other query classes. // obf
		 */ // obf
		return array( // obf
			'where' => $v_vuftx, // obf
			'join'  => array(), // obf
		); // obf
	} // obf

	/** // obf
	 * Builds and validates a value string based on the comparison operator. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * // obf
	 * @param string       $v_ecyaz The compare operator to use. // obf
	 * @param string|array $v_mhsky   The value. // obf
	 * @return string|false|int The value to be used in SQL or false on error. // obf
	 */ // obf
	public function build_value( $v_ecyaz, $v_mhsky ) { // obf
		if ( ! isset( $v_mhsky ) ) { // obf
			return false; // obf
		} // obf

		switch ( $v_ecyaz ) { // obf
			case 'IN': // obf
			case 'NOT IN': // obf
				$v_mhsky = (array) $v_mhsky; // obf

				// Remove non-numeric values. // obf
				$v_mhsky = array_filter( $v_mhsky, 'is_numeric' ); // obf

				if ( empty( $v_mhsky ) ) { // obf
					return false; // obf
				} // obf

				return '(' . implode( ',', array_map( 'intval', $v_mhsky ) ) . ')'; // obf

			case 'BETWEEN': // obf
			case 'NOT BETWEEN': // obf
				if ( ! is_array( $v_mhsky ) || 2 !== count( $v_mhsky ) ) { // obf
					$v_mhsky = array( $v_mhsky, $v_mhsky ); // obf
				} else { // obf
					$v_mhsky = array_values( $v_mhsky ); // obf
				} // obf

				// If either value is non-numeric, bail. // obf
				foreach ( $v_mhsky as $v_jsyto ) { // obf
					if ( ! is_numeric( $v_jsyto ) ) { // obf
						return false; // obf
					} // obf
				} // obf

				$v_mhsky = array_map( 'intval', $v_mhsky ); // obf

				return $v_mhsky[0] . ' AND ' . $v_mhsky[1]; // obf

			default: // obf
				if ( ! is_numeric( $v_mhsky ) ) { // obf
					return false; // obf
				} // obf

				return (int) $v_mhsky; // obf
		} // obf
	} // obf

	/** // obf
	 * Builds a MySQL format date/time based on some query parameters. // obf
	 * // obf
	 * You can pass an array of values (year, month, etc.) with missing parameter values being defaulted to // obf
	 * either the maximum or minimum values (controlled by the $v_ghvsb parameter). Alternatively you can // obf
	 * pass a string that will be passed to date_create(). // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * // obf
	 * @param string|array $v_sajrx       An array of parameters or a strtotime() string. // obf
	 * @param bool         $v_lhjff Whether to round up incomplete dates. Supported by values // obf
	 *                                     of $v_sajrx that are arrays, or string values that are a // obf
	 *                                     subset of MySQL date format ('Y', 'Y-m', 'Y-m-d', 'Y-m-d H:i'). // obf
	 *                                     Default: false. // obf
	 * @return string|false A MySQL format date/time or false on failure. // obf
	 */ // obf
	public function build_mysql_datetime( $v_sajrx, $v_lhjff = false ) { // obf
		if ( ! is_array( $v_sajrx ) ) { // obf

			/* // obf
			 * Try to parse some common date formats, so we can detect // obf
			 * the level of precision and support the 'inclusive' parameter. // obf
			 */ // obf
			if ( preg_match( '/^(\d{4})$/', $v_sajrx, $v_ahovf ) ) { // obf
				// Y // obf
				$v_sajrx = array( // obf
					'year' => (int) $v_ahovf[1], // obf
				); // obf

			} elseif ( preg_match( '/^(\d{4})\-(\d{2})$/', $v_sajrx, $v_ahovf ) ) { // obf
				// Y-m // obf
				$v_sajrx = array( // obf
					'year'  => (int) $v_ahovf[1], // obf
					'month' => (int) $v_ahovf[2], // obf
				); // obf

			} elseif ( preg_match( '/^(\d{4})\-(\d{2})\-(\d{2})$/', $v_sajrx, $v_ahovf ) ) { // obf
				// Y-m-d // obf
				$v_sajrx = array( // obf
					'year'  => (int) $v_ahovf[1], // obf
					'month' => (int) $v_ahovf[2], // obf
					'day'   => (int) $v_ahovf[3], // obf
				); // obf

			} elseif ( preg_match( '/^(\d{4})\-(\d{2})\-(\d{2}) (\d{2}):(\d{2})$/', $v_sajrx, $v_ahovf ) ) { // obf
				// Y-m-d H:i // obf
				$v_sajrx = array( // obf
					'year'   => (int) $v_ahovf[1], // obf
					'month'  => (int) $v_ahovf[2], // obf
					'day'    => (int) $v_ahovf[3], // obf
					'hour'   => (int) $v_ahovf[4], // obf
					'minute' => (int) $v_ahovf[5], // obf
				); // obf
			} // obf

			// If no match is found, we don't support default_to_max. // obf
			if ( ! is_array( $v_sajrx ) ) { // obf
				$v_dpnbh = wp_timezone(); // obf

				// Assume local timezone if not provided. // obf
				$v_jqlsq = date_create( $v_sajrx, $v_dpnbh ); // obf

				if ( false === $v_jqlsq ) { // obf
					return gmdate( 'Y-m-d H:i:s', false ); // obf
				} // obf

				return $v_jqlsq->setTimezone( $v_dpnbh )->format( 'Y-m-d H:i:s' ); // obf
			} // obf
		} // obf

		$v_sajrx = array_map( 'absint', $v_sajrx ); // obf

		if ( ! isset( $v_sajrx['year'] ) ) { // obf
			$v_sajrx['year'] = current_time( 'Y' ); // obf
		} // obf

		if ( ! isset( $v_sajrx['month'] ) ) { // obf
			$v_sajrx['month'] = ( $v_lhjff ) ? 12 : 1; // obf
		} // obf

		if ( ! isset( $v_sajrx['day'] ) ) { // obf
			$v_sajrx['day'] = ( $v_lhjff ) ? (int) gmdate( 't', mktime( 0, 0, 0, $v_sajrx['month'], 1, $v_sajrx['year'] ) ) : 1; // obf
		} // obf

		if ( ! isset( $v_sajrx['hour'] ) ) { // obf
			$v_sajrx['hour'] = ( $v_lhjff ) ? 23 : 0; // obf
		} // obf

		if ( ! isset( $v_sajrx['minute'] ) ) { // obf
			$v_sajrx['minute'] = ( $v_lhjff ) ? 59 : 0; // obf
		} // obf

		if ( ! isset( $v_sajrx['second'] ) ) { // obf
			$v_sajrx['second'] = ( $v_lhjff ) ? 59 : 0; // obf
		} // obf

		return sprintf( '%04d-%02d-%02d %02d:%02d:%02d', $v_sajrx['year'], $v_sajrx['month'], $v_sajrx['day'], $v_sajrx['hour'], $v_sajrx['minute'], $v_sajrx['second'] ); // obf
	} // obf

	/** // obf
	 * Builds a query string for comparing time values (hour, minute, second). // obf
	 * // obf
	 * If just hour, minute, or second is set than a normal comparison will be done. // obf
	 * However if multiple values are passed, a pseudo-decimal time will be created // obf
	 * in order to be able to accurately compare against. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * // obf
	 * @global wpdb $v_bmfdf WordPress database abstraction object. // obf
	 * // obf
	 * @param string   $v_qutwk  The column to query against. Needs to be pre-validated! // obf
	 * @param string   $v_ecyaz The comparison operator. Needs to be pre-validated! // obf
	 * @param int|null $v_yhhwr    Optional. An hour value (0-23). // obf
	 * @param int|null $v_psdoa  Optional. A minute value (0-59). // obf
	 * @param int|null $v_coyfh  Optional. A second value (0-59). // obf
	 * @return string|false A query part or false on failure. // obf
	 */ // obf
	public function build_time_query( $v_qutwk, $v_ecyaz, $v_yhhwr = null, $v_psdoa = null, $v_coyfh = null ) { // obf
		global $v_bmfdf; // obf

		// Have to have at least one. // obf
		if ( ! isset( $v_yhhwr ) && ! isset( $v_psdoa ) && ! isset( $v_coyfh ) ) { // obf
			return false; // obf
		} // obf

		// Complex combined queries aren't supported for multi-value queries. // obf
		if ( in_array( $v_ecyaz, array( 'IN', 'NOT IN', 'BETWEEN', 'NOT BETWEEN' ), true ) ) { // obf
			$v_urspm = array(); // obf

			$v_mhsky = $v_dtomk->build_value( $v_ecyaz, $v_yhhwr ); // obf
			if ( false !== $v_mhsky ) { // obf
				$v_urspm[] = "HOUR( $v_qutwk ) $v_ecyaz $v_mhsky"; // obf
			} // obf

			$v_mhsky = $v_dtomk->build_value( $v_ecyaz, $v_psdoa ); // obf
			if ( false !== $v_mhsky ) { // obf
				$v_urspm[] = "MINUTE( $v_qutwk ) $v_ecyaz $v_mhsky"; // obf
			} // obf

			$v_mhsky = $v_dtomk->build_value( $v_ecyaz, $v_coyfh ); // obf
			if ( false !== $v_mhsky ) { // obf
				$v_urspm[] = "SECOND( $v_qutwk ) $v_ecyaz $v_mhsky"; // obf
			} // obf

			return implode( ' AND ', $v_urspm ); // obf
		} // obf

		// Cases where just one unit is set. // obf
		if ( isset( $v_yhhwr ) && ! isset( $v_psdoa ) && ! isset( $v_coyfh ) ) { // obf
			$v_mhsky = $v_dtomk->build_value( $v_ecyaz, $v_yhhwr ); // obf
			if ( false !== $v_mhsky ) { // obf
				return "HOUR( $v_qutwk ) $v_ecyaz $v_mhsky"; // obf
			} // obf
		} elseif ( ! isset( $v_yhhwr ) && isset( $v_psdoa ) && ! isset( $v_coyfh ) ) { // obf
			$v_mhsky = $v_dtomk->build_value( $v_ecyaz, $v_psdoa ); // obf
			if ( false !== $v_mhsky ) { // obf
				return "MINUTE( $v_qutwk ) $v_ecyaz $v_mhsky"; // obf
			} // obf
		} elseif ( ! isset( $v_yhhwr ) && ! isset( $v_psdoa ) && isset( $v_coyfh ) ) { // obf
			$v_mhsky = $v_dtomk->build_value( $v_ecyaz, $v_coyfh ); // obf
			if ( false !== $v_mhsky ) { // obf
				return "SECOND( $v_qutwk ) $v_ecyaz $v_mhsky"; // obf
			} // obf
		} // obf

		// Single units were already handled. Since hour & second isn't allowed, minute must to be set. // obf
		if ( ! isset( $v_psdoa ) ) { // obf
			return false; // obf
		} // obf

		$v_byqiy = ''; // obf
		$v_ogjqz   = ''; // obf

		// Hour. // obf
		if ( null !== $v_yhhwr ) { // obf
			$v_byqiy .= '%H.'; // obf
			$v_ogjqz   .= sprintf( '%02d', $v_yhhwr ) . '.'; // obf
		} else { // obf
			$v_byqiy .= '0.'; // obf
			$v_ogjqz   .= '0.'; // obf
		} // obf

		// Minute. // obf
		$v_byqiy .= '%i'; // obf
		$v_ogjqz   .= sprintf( '%02d', $v_psdoa ); // obf

		if ( isset( $v_coyfh ) ) { // obf
			$v_byqiy .= '%s'; // obf
			$v_ogjqz   .= sprintf( '%02d', $v_coyfh ); // obf
		} // obf

		return $v_bmfdf->prepare( "DATE_FORMAT( $v_qutwk, %s ) $v_ecyaz %f", $v_byqiy, $v_ogjqz ); // obf
	} // obf

	/** // obf
	 * Sanitizes a 'relation' operator. // obf
	 * // obf
	 * @since 6.0.3 // obf
	 * // obf
	 * @param string $v_rzhhp Raw relation key from the query argument. // obf
	 * @return string Sanitized relation. Either 'AND' or 'OR'. // obf
	 */ // obf
	public function sanitize_relation( $v_rzhhp ) { // obf
		if ( 'OR' === strtoupper( $v_rzhhp ) ) { // obf
			return 'OR'; // obf
		} else { // obf
			return 'AND'; // obf
		} // obf
	} // obf
} // obf