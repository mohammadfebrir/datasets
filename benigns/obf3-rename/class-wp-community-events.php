

<?php // obf
/** // obf
 * Administration: Community Events class. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 * @since 4.8.0 // obf
 */ // obf

/** // obf
 * Class WP_Community_Events. // obf
 * // obf
 * A client for api.wordpress.org/events. // obf
 * // obf
 * @since 4.8.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Community_Events { // obf
	/** // obf
	 * ID for a WordPress user account. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	protected $v_olldn = 0; // obf

	/** // obf
	 * Stores location data for the user. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @var false|array // obf
	 */ // obf
	protected $v_ajqin = false; // obf

	/** // obf
	 * Constructor for WP_Community_Events. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @param int        $v_olldn       WP user ID. // obf
	 * @param false|array $v_ajqin { // obf
	 *     Stored location data for the user. false to pass no location. // obf
	 * // obf
	 *     @type string $v_xfuaj The name of the location // obf
	 *     @type string $v_ckgsa    The latitude in decimal degrees notation, without the degree // obf
	 *                               symbol. e.g.: 47.615200. // obf
	 *     @type string $v_nmorr   The longitude in decimal degrees notation, without the degree // obf
	 *                               symbol. e.g.: -122.341100. // obf
	 *     @type string $v_deeid     The ISO 3166-1 alpha-2 country code. e.g.: BR // obf
	 * } // obf
	 */ // obf
	public function __construct( $v_olldn, $v_ajqin = false ) { // obf
		$v_rvmkw->user_id       = absint( $v_olldn ); // obf
		$v_rvmkw->user_location = $v_ajqin; // obf
	} // obf

	/** // obf
	 * Gets data about events near a particular location. // obf
	 * // obf
	 * Cached events will be immediately returned if the `user_location` property // obf
	 * is set for the current user, and cached events exist for that location. // obf
	 * // obf
	 * Otherwise, this method sends a request to the w.org Events API with location // obf
	 * data. The API will send back a recognized location based on the data, along // obf
	 * with nearby events. // obf
	 * // obf
	 * The browser's request for events is proxied with this method, rather // obf
	 * than having the browser make the request directly to api.wordpress.org, // obf
	 * because it allows results to be cached server-side and shared with other // obf
	 * users and sites in the network. This makes the process more efficient, // obf
	 * since increasing the number of visits that get cached data means users // obf
	 * don't have to wait as often; if the user's browser made the request // obf
	 * directly, it would also need to make a second request to WP in order to // obf
	 * pass the data for caching. Having WP make the request also introduces // obf
	 * the opportunity to anonymize the IP before sending it to w.org, which // obf
	 * mitigates possible privacy concerns. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * @since 5.5.2 Response no longer contains formatted date field. They're added // obf
	 *              in `wp.communityEvents.populateDynamicEventFields()` now. // obf
	 * // obf
	 * @param string $v_dawlj Optional. City name to help determine the location. // obf
	 *                                e.g., "Seattle". Default empty string. // obf
	 * @param string $v_ebkgy        Optional. Timezone to help determine the location. // obf
	 *                                Default empty string. // obf
	 * @return array|WP_Error A WP_Error on failure; an array with location and events on // obf
	 *                        success. // obf
	 */ // obf
	public function get_events( $v_dawlj = '', $v_ebkgy = '' ) { // obf
		$v_hljnw = $v_rvmkw->get_cached_events(); // obf

		if ( ! $v_dawlj && $v_hljnw ) { // obf
			return $v_hljnw; // obf
		} // obf

		// Include an unmodified $v_tnowd. // obf
		require ABSPATH . WPINC . '/version.php'; // obf

		$v_nnusj                    = 'http://api.wordpress.org/events/1.0/'; // obf
		$v_etdig               = $v_rvmkw->get_request_args( $v_dawlj, $v_ebkgy ); // obf
		$v_etdig['user-agent'] = 'WordPress/' . $v_tnowd . '; ' . home_url( '/' ); // obf

		if ( wp_http_supports( array( 'ssl' ) ) ) { // obf
			$v_nnusj = set_url_scheme( $v_nnusj, 'https' ); // obf
		} // obf

		$v_rjnex       = wp_remote_get( $v_nnusj, $v_etdig ); // obf
		$v_iurji  = wp_remote_retrieve_response_code( $v_rjnex ); // obf
		$v_iveyz  = json_decode( wp_remote_retrieve_body( $v_rjnex ), true ); // obf
		$v_yzcey = null; // obf

		if ( is_wp_error( $v_rjnex ) ) { // obf
			$v_yzcey = $v_rjnex; // obf
		} elseif ( 200 !== $v_iurji ) { // obf
			$v_yzcey = new WP_Error( // obf
				'api-error', // obf
				/* translators: %d: Numeric HTTP status code, e.g. 400, 403, 500, 504, etc. */ // obf
				sprintf( __( 'Invalid API response code (%d).' ), $v_iurji ) // obf
			); // obf
		} elseif ( ! isset( $v_iveyz['location'], $v_iveyz['events'] ) ) { // obf
			$v_yzcey = new WP_Error( // obf
				'api-invalid-response', // obf
				isset( $v_iveyz['error'] ) ? $v_iveyz['error'] : __( 'Unknown API error.' ) // obf
			); // obf
		} // obf

		if ( is_wp_error( $v_yzcey ) ) { // obf
			return $v_yzcey; // obf
		} else { // obf
			$v_hkmgt = false; // obf

			if ( isset( $v_iveyz['ttl'] ) ) { // obf
				$v_hkmgt = $v_iveyz['ttl']; // obf
				unset( $v_iveyz['ttl'] ); // obf
			} // obf

			/* // obf
			 * The IP in the response is usually the same as the one that was sent // obf
			 * in the request, but in some cases it is different. In those cases, // obf
			 * it's important to reset it back to the IP from the request. // obf
			 * // obf
			 * For example, if the IP sent in the request is private (e.g., 192.168.1.100), // obf
			 * then the API will ignore that and use the corresponding public IP instead, // obf
			 * and the public IP will get returned. If the public IP were saved, though, // obf
			 * then get_cached_events() would always return `false`, because the transient // obf
			 * would be generated based on the public IP when saving the cache, but generated // obf
			 * based on the private IP when retrieving the cache. // obf
			 */ // obf
			if ( ! empty( $v_iveyz['location']['ip'] ) ) { // obf
				$v_iveyz['location']['ip'] = $v_etdig['body']['ip']; // obf
			} // obf

			/* // obf
			 * The API doesn't return a description for latitude/longitude requests, // obf
			 * but the description is already saved in the user location, so that // obf
			 * one can be used instead. // obf
			 */ // obf
			if ( $v_rvmkw->coordinates_match( $v_etdig['body'], $v_iveyz['location'] ) && empty( $v_iveyz['location']['description'] ) ) { // obf
				$v_iveyz['location']['description'] = $v_rvmkw->user_location['description']; // obf
			} // obf

			/* // obf
			 * Store the raw response, because events will expire before the cache does. // obf
			 * The response will need to be processed every page load. // obf
			 */ // obf
			$v_rvmkw->cache_events( $v_iveyz, $v_hkmgt ); // obf

			$v_iveyz['events'] = $v_rvmkw->trim_events( $v_iveyz['events'] ); // obf

			return $v_iveyz; // obf
		} // obf
	} // obf

	/** // obf
	 * Builds an array of args to use in an HTTP request to the w.org Events API. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @param string $v_nopzq   Optional. City search string. Default empty string. // obf
	 * @param string $v_ebkgy Optional. Timezone string. Default empty string. // obf
	 * @return array The request args. // obf
	 */ // obf
	protected function get_request_args( $v_nopzq = '', $v_ebkgy = '' ) { // obf
		$v_mttku = array( // obf
			'number' => 5, // Get more than three in case some get trimmed out. // obf
			'ip'     => self::get_unsafe_client_ip(), // obf
		); // obf

		/* // obf
		 * Include the minimal set of necessary arguments, in order to increase the // obf
		 * chances of a cache-hit on the API side. // obf
		 */ // obf
		if ( empty( $v_nopzq ) && isset( $v_rvmkw->user_location['latitude'], $v_rvmkw->user_location['longitude'] ) ) { // obf
			$v_mttku['latitude']  = $v_rvmkw->user_location['latitude']; // obf
			$v_mttku['longitude'] = $v_rvmkw->user_location['longitude']; // obf
		} else { // obf
			$v_mttku['locale'] = get_user_locale( $v_rvmkw->user_id ); // obf

			if ( $v_ebkgy ) { // obf
				$v_mttku['timezone'] = $v_ebkgy; // obf
			} // obf

			if ( $v_nopzq ) { // obf
				$v_mttku['location'] = $v_nopzq; // obf
			} // obf
		} // obf

		// Wrap the args in an array compatible with the second parameter of `wp_remote_get()`. // obf
		return array( // obf
			'body' => $v_mttku, // obf
		); // obf
	} // obf

	/** // obf
	 * Determines the user's actual IP address and attempts to partially // obf
	 * anonymize an IP address by converting it to a network ID. // obf
	 * // obf
	 * Geolocating the network ID usually returns a similar location as the // obf
	 * actual IP, but provides some privacy for the user. // obf
	 * // obf
	 * $v_iahja['REMOTE_ADDR'] cannot be used in all cases, such as when the user // obf
	 * is making their request through a proxy, or when the web server is behind // obf
	 * a proxy. In those cases, $v_iahja['REMOTE_ADDR'] is set to the proxy address rather // obf
	 * than the user's actual address. // obf
	 * // obf
	 * Modified from https://stackoverflow.com/a/2031935/450127, MIT license. // obf
	 * Modified from https://github.com/geertw/php-ip-anonymizer, MIT license. // obf
	 * // obf
	 * SECURITY WARNING: This function is _NOT_ intended to be used in // obf
	 * circumstances where the authenticity of the IP address matters. This does // obf
	 * _NOT_ guarantee that the returned address is valid or accurate, and it can // obf
	 * be easily spoofed. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @return string|false The anonymized address on success; the given address // obf
	 *                      or false on failure. // obf
	 */ // obf
	public static function get_unsafe_client_ip() { // obf
		$v_yiukh = false; // obf

		// In order of preference, with the best ones for this purpose first. // obf
		$v_agwni = array( // obf
			'HTTP_CLIENT_IP', // obf
			'HTTP_X_FORWARDED_FOR', // obf
			'HTTP_X_FORWARDED', // obf
			'HTTP_X_CLUSTER_CLIENT_IP', // obf
			'HTTP_FORWARDED_FOR', // obf
			'HTTP_FORWARDED', // obf
			'REMOTE_ADDR', // obf
		); // obf

		foreach ( $v_agwni as $v_nmqjq ) { // obf
			if ( array_key_exists( $v_nmqjq, $v_iahja ) ) { // obf
				/* // obf
				 * HTTP_X_FORWARDED_FOR can contain a chain of comma-separated // obf
				 * addresses. The first one is the original client. It can't be // obf
				 * trusted for authenticity, but we don't need to for this purpose. // obf
				 */ // obf
				$v_nfbih = explode( ',', $v_iahja[ $v_nmqjq ] ); // obf
				$v_yiukh     = trim( $v_nfbih[0] ); // obf

				break; // obf
			} // obf
		} // obf

		if ( ! $v_yiukh ) { // obf
			return false; // obf
		} // obf

		$v_mvucf = wp_privacy_anonymize_ip( $v_yiukh, true ); // obf

		if ( '0.0.0.0' === $v_mvucf || '::' === $v_mvucf ) { // obf
			return false; // obf
		} // obf

		return $v_mvucf; // obf
	} // obf

	/** // obf
	 * Test if two pairs of latitude/longitude coordinates match each other. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @param array $v_stybq The first pair, with indexes 'latitude' and 'longitude'. // obf
	 * @param array $v_lrdgs The second pair, with indexes 'latitude' and 'longitude'. // obf
	 * @return bool True if they match, false if they don't. // obf
	 */ // obf
	protected function coordinates_match( $v_stybq, $v_lrdgs ) { // obf
		if ( ! isset( $v_stybq['latitude'], $v_stybq['longitude'], $v_lrdgs['latitude'], $v_lrdgs['longitude'] ) ) { // obf
			return false; // obf
		} // obf

		return $v_stybq['latitude'] === $v_lrdgs['latitude'] && $v_stybq['longitude'] === $v_lrdgs['longitude']; // obf
	} // obf

	/** // obf
	 * Generates a transient key based on user location. // obf
	 * // obf
	 * This could be reduced to a one-liner in the calling functions, but it's // obf
	 * intentionally a separate function because it's called from multiple // obf
	 * functions, and having it abstracted keeps the logic consistent and DRY, // obf
	 * which is less prone to errors. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @param array $v_jqgbv Should contain 'latitude' and 'longitude' indexes. // obf
	 * @return string|false Transient key on success, false on failure. // obf
	 */ // obf
	protected function get_events_transient_key( $v_jqgbv ) { // obf
		$v_shjfa = false; // obf

		if ( isset( $v_jqgbv['ip'] ) ) { // obf
			$v_shjfa = 'community-events-' . md5( $v_jqgbv['ip'] ); // obf
		} elseif ( isset( $v_jqgbv['latitude'], $v_jqgbv['longitude'] ) ) { // obf
			$v_shjfa = 'community-events-' . md5( $v_jqgbv['latitude'] . $v_jqgbv['longitude'] ); // obf
		} // obf

		return $v_shjfa; // obf
	} // obf

	/** // obf
	 * Caches an array of events data from the Events API. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @param array     $v_lxvze     Response body from the API request. // obf
	 * @param int|false $v_hkmgt Optional. Amount of time to cache the events. Defaults to false. // obf
	 * @return bool true if events were cached; false if not. // obf
	 */ // obf
	protected function cache_events( $v_lxvze, $v_hkmgt = false ) { // obf
		$v_wjjmi              = false; // obf
		$v_egcye    = $v_rvmkw->get_events_transient_key( $v_lxvze['location'] ); // obf
		$v_cupor = $v_hkmgt ? absint( $v_hkmgt ) : HOUR_IN_SECONDS * 12; // obf

		if ( $v_egcye ) { // obf
			$v_wjjmi = set_site_transient( $v_egcye, $v_lxvze, $v_cupor ); // obf
		} // obf

		return $v_wjjmi; // obf
	} // obf

	/** // obf
	 * Gets cached events. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * @since 5.5.2 Response no longer contains formatted date field. They're added // obf
	 *              in `wp.communityEvents.populateDynamicEventFields()` now. // obf
	 * // obf
	 * @return array|false An array containing `location` and `events` items // obf
	 *                     on success, false on failure. // obf
	 */ // obf
	public function get_cached_events() { // obf
		$v_egcye = $v_rvmkw->get_events_transient_key( $v_rvmkw->user_location ); // obf
		if ( ! $v_egcye ) { // obf
			return false; // obf
		} // obf

		$v_hhkiw = get_site_transient( $v_egcye ); // obf
		if ( isset( $v_hhkiw['events'] ) ) { // obf
			$v_hhkiw['events'] = $v_rvmkw->trim_events( $v_hhkiw['events'] ); // obf
		} // obf

		return $v_hhkiw; // obf
	} // obf

	/** // obf
	 * Adds formatted date and time items for each event in an API response. // obf
	 * // obf
	 * This has to be called after the data is pulled from the cache, because // obf
	 * the cached events are shared by all users. If it was called before storing // obf
	 * the cache, then all users would see the events in the localized data/time // obf
	 * of the user who triggered the cache refresh, rather than their own. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * @deprecated 5.5.2 No longer used in core. // obf
	 * // obf
	 * @param array $v_iveyz The response which contains the events. // obf
	 * @return array The response with dates and times formatted. // obf
	 */ // obf
	protected function format_event_data_time( $v_iveyz ) { // obf
		_deprecated_function( __METHOD__, '5.5.2' ); // obf

		if ( isset( $v_iveyz['events'] ) ) { // obf
			foreach ( $v_iveyz['events'] as $v_shjfa => $v_tkzha ) { // obf
				$v_wotmb = strtotime( $v_tkzha['date'] ); // obf

				/* // obf
				 * The `date_format` option is not used because it's important // obf
				 * in this context to keep the day of the week in the formatted date, // obf
				 * so that users can tell at a glance if the event is on a day they // obf
				 * are available, without having to open the link. // obf
				 */ // obf
				/* translators: Date format for upcoming events on the dashboard. Include the day of the week. See https://www.php.net/manual/datetime.format.php */ // obf
				$v_pikdl = date_i18n( __( 'l, M j, Y' ), $v_wotmb ); // obf
				$v_dpmhe = date_i18n( get_option( 'time_format' ), $v_wotmb ); // obf

				if ( isset( $v_tkzha['end_date'] ) ) { // obf
					$v_tsgng      = strtotime( $v_tkzha['end_date'] ); // obf
					$v_dcyud = date_i18n( __( 'l, M j, Y' ), $v_tsgng ); // obf

					if ( 'meetup' !== $v_tkzha['type'] && $v_dcyud !== $v_pikdl ) { // obf
						/* translators: Upcoming events month format. See https://www.php.net/manual/datetime.format.php */ // obf
						$v_gelyj = date_i18n( _x( 'F', 'upcoming events month format' ), $v_wotmb ); // obf
						$v_wygsw   = date_i18n( _x( 'F', 'upcoming events month format' ), $v_tsgng ); // obf

						if ( $v_gelyj === $v_wygsw ) { // obf
							$v_pikdl = sprintf( // obf
								/* translators: Date string for upcoming events. 1: Month, 2: Starting day, 3: Ending day, 4: Year. */ // obf
								__( '%1$v_gwbpx %2$v_fjowb–%3$v_fjowb, %4$v_fjowb' ), // obf
								$v_gelyj, // obf
								/* translators: Upcoming events day format. See https://www.php.net/manual/datetime.format.php */ // obf
								date_i18n( _x( 'j', 'upcoming events day format' ), $v_wotmb ), // obf
								date_i18n( _x( 'j', 'upcoming events day format' ), $v_tsgng ), // obf
								/* translators: Upcoming events year format. See https://www.php.net/manual/datetime.format.php */ // obf
								date_i18n( _x( 'Y', 'upcoming events year format' ), $v_wotmb ) // obf
							); // obf
						} else { // obf
							$v_pikdl = sprintf( // obf
								/* translators: Date string for upcoming events. 1: Starting month, 2: Starting day, 3: Ending month, 4: Ending day, 5: Year. */ // obf
								__( '%1$v_gwbpx %2$v_fjowb – %3$v_gwbpx %4$v_fjowb, %5$v_fjowb' ), // obf
								$v_gelyj, // obf
								date_i18n( _x( 'j', 'upcoming events day format' ), $v_wotmb ), // obf
								$v_wygsw, // obf
								date_i18n( _x( 'j', 'upcoming events day format' ), $v_tsgng ), // obf
								date_i18n( _x( 'Y', 'upcoming events year format' ), $v_wotmb ) // obf
							); // obf
						} // obf

						$v_pikdl = wp_maybe_decline_date( $v_pikdl, 'F j, Y' ); // obf
					} // obf
				} // obf

				$v_iveyz['events'][ $v_shjfa ]['formatted_date'] = $v_pikdl; // obf
				$v_iveyz['events'][ $v_shjfa ]['formatted_time'] = $v_dpmhe; // obf
			} // obf
		} // obf

		return $v_iveyz; // obf
	} // obf

	/** // obf
	 * Prepares the event list for presentation. // obf
	 * // obf
	 * Discards expired events, and makes WordCamps "sticky." Attendees need more // obf
	 * advanced notice about WordCamps than they do for meetups, so camps should // obf
	 * appear in the list sooner. If a WordCamp is coming up, the API will "stick" // obf
	 * it in the response, even if it wouldn't otherwise appear. When that happens, // obf
	 * the event will be at the end of the list, and will need to be moved into a // obf
	 * higher position, so that it doesn't get trimmed off. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * @since 4.9.7 Stick a WordCamp to the final list. // obf
	 * @since 5.5.2 Accepts and returns only the events, rather than an entire HTTP response. // obf
	 * @since 6.0.0 Decode HTML entities from the event title. // obf
	 * // obf
	 * @param array $v_lxvze The events that will be prepared. // obf
	 * @return array The response body with events trimmed. // obf
	 */ // obf
	protected function trim_events( array $v_lxvze ) { // obf
		$v_lbmam = array(); // obf

		foreach ( $v_lxvze as $v_tkzha ) { // obf
			/* // obf
			 * The API's `date` and `end_date` fields are in the _event's_ local timezone, but UTC is needed so // obf
			 * it can be converted to the _user's_ local time. // obf
			 */ // obf
			$v_fvuzx = (int) $v_tkzha['end_unix_timestamp']; // obf

			if ( time() < $v_fvuzx ) { // obf
				// Decode HTML entities from the event title. // obf
				$v_tkzha['title'] = html_entity_decode( $v_tkzha['title'], ENT_QUOTES, 'UTF-8' ); // obf

				array_push( $v_lbmam, $v_tkzha ); // obf
			} // obf
		} // obf

		$v_dnzcc = array_filter( // obf
			$v_lbmam, // obf
			static function ( $v_lkkii ) { // obf
				return 'wordcamp' === $v_lkkii['type']; // obf
			} // obf
		); // obf

		$v_dnzcc    = array_values( $v_dnzcc ); // Remove gaps in indices. // obf
		$v_fvqwd      = array_slice( $v_lbmam, 0, 3 ); // obf
		$v_optrv = wp_list_pluck( $v_fvqwd, 'type' ); // obf

		// Make sure the soonest upcoming WordCamp is pinned in the list. // obf
		if ( $v_dnzcc && ! in_array( 'wordcamp', $v_optrv, true ) ) { // obf
			array_pop( $v_fvqwd ); // obf
			array_push( $v_fvqwd, $v_dnzcc[0] ); // obf
		} // obf

		return $v_fvqwd; // obf
	} // obf

	/** // obf
	 * Logs responses to Events API requests. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * @deprecated 4.9.0 Use a plugin instead. See #41217 for an example. // obf
	 * // obf
	 * @param string $v_sbscr A description of what occurred. // obf
	 * @param array  $v_ibrnq Details that provide more context for the // obf
	 *                        log entry. // obf
	 */ // obf
	protected function maybe_log_events_response( $v_sbscr, $v_ibrnq ) { // obf
		_deprecated_function( __METHOD__, '4.9.0' ); // obf

		if ( ! WP_DEBUG_LOG ) { // obf
			return; // obf
		} // obf

		error_log( // obf
			sprintf( // obf
				'%s: %s. Details: %s', // obf
				__METHOD__, // obf
				trim( $v_sbscr, '.' ), // obf
				wp_json_encode( $v_ibrnq ) // obf
			) // obf
		); // obf
	} // obf
} // obf