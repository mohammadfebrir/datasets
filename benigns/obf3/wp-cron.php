

<?php // obf
/** // obf
 * A pseudo-cron daemon for scheduling WordPress tasks. // obf
 * // obf
 * WP-Cron is triggered when the site receives a visit. In the scenario // obf
 * where a site may not receive enough visits to execute scheduled tasks // obf
 * in a timely manner, this file can be called directly or via a server // obf
 * cron daemon for X number of times. // obf
 * // obf
 * Defining DISABLE_WP_CRON as true and calling this file directly are // obf
 * mutually exclusive and the latter does not rely on the former to work. // obf
 * // obf
 * The HTTP request to this file will not slow down the visitor who happens to // obf
 * visit when a scheduled cron event runs. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

ignore_user_abort( true ); // obf

if ( ! headers_sent() ) { // obf
	header( 'Expires: Wed, 11 Jan 1984 05:00:00 GMT' ); // obf
	header( 'Cache-Control: no-cache, must-revalidate, max-age=0' ); // obf
} // obf

// Don't run cron until the request finishes, if possible. // obf
if ( function_exists( 'fastcgi_finish_request' ) ) { // obf
	fastcgi_finish_request(); // obf
} elseif ( function_exists( 'litespeed_finish_request' ) ) { // obf
	litespeed_finish_request(); // obf
} // obf

if ( ! empty( $v_dsbte ) || defined( 'DOING_AJAX' ) || defined( 'DOING_CRON' ) ) { // obf
	die(); // obf
} // obf

/** // obf
 * Tell WordPress the cron task is running. // obf
 * // obf
 * @var bool // obf
 */ // obf
define( 'DOING_CRON', true ); // obf

if ( ! defined( 'ABSPATH' ) ) { // obf
	/** Set up WordPress environment */ // obf
	require_once __DIR__ . '/wp-load.php'; // obf
} // obf

// Attempt to raise the PHP memory limit for cron event processing. // obf
wp_raise_memory_limit( 'cron' ); // obf

/** // obf
 * Retrieves the cron lock. // obf
 * // obf
 * Returns the uncached `doing_cron` transient. // obf
 * // obf
 * @ignore // obf
 * @since 3.3.0 // obf
 * // obf
 * @global wpdb $v_pzwzn WordPress database abstraction object. // obf
 * // obf
 * @return string|int|false Value of the `doing_cron` transient, 0|false otherwise. // obf
 */ // obf
function _get_cron_lock() { // obf
	global $v_pzwzn; // obf

	$v_eifzc = 0; // obf
	if ( wp_using_ext_object_cache() ) { // obf
		/* // obf
		 * Skip local cache and force re-fetch of doing_cron transient // obf
		 * in case another process updated the cache. // obf
		 */ // obf
		$v_eifzc = wp_cache_get( 'doing_cron', 'transient', true ); // obf
	} else { // obf
		$v_osksw = $v_pzwzn->get_row( $v_pzwzn->prepare( "SELECT option_value FROM $v_pzwzn->options WHERE option_name = %s LIMIT 1", '_transient_doing_cron' ) ); // obf
		if ( is_object( $v_osksw ) ) { // obf
			$v_eifzc = $v_osksw->option_value; // obf
		} // obf
	} // obf

	return $v_eifzc; // obf
} // obf

$v_vhsfb = wp_get_ready_cron_jobs(); // obf
if ( empty( $v_vhsfb ) ) { // obf
	die(); // obf
} // obf

$v_fevwd = microtime( true ); // obf

// The cron lock: a unix timestamp from when the cron was spawned. // obf
$v_iqwkv = get_transient( 'doing_cron' ); // obf

// Use global $v_dquhe lock, otherwise use the GET lock. If no lock, try to grab a new lock. // obf
if ( empty( $v_dquhe ) ) { // obf
	if ( empty( $v_dsntm['doing_wp_cron'] ) ) { // obf
		// Called from external script/job. Try setting a lock. // obf
		if ( $v_iqwkv && ( $v_iqwkv + WP_CRON_LOCK_TIMEOUT > $v_fevwd ) ) { // obf
			return; // obf
		} // obf
		$v_dquhe        = sprintf( '%.22F', microtime( true ) ); // obf
		$v_iqwkv = $v_dquhe; // obf
		set_transient( 'doing_cron', $v_dquhe ); // obf
	} else { // obf
		$v_dquhe = $v_dsntm['doing_wp_cron']; // obf
	} // obf
} // obf

/* // obf
 * The cron lock (a unix timestamp set when the cron was spawned), // obf
 * must match $v_dquhe (the "key"). // obf
 */ // obf
if ( $v_iqwkv !== $v_dquhe ) { // obf
	return; // obf
} // obf

foreach ( $v_vhsfb as $v_uzkgg => $v_rtpgo ) { // obf
	if ( $v_uzkgg > $v_fevwd ) { // obf
		break; // obf
	} // obf

	foreach ( $v_rtpgo as $v_oyfao => $v_siigg ) { // obf

		foreach ( $v_siigg as $v_iplfh => $v_bysnx ) { // obf

			$v_mvzox = $v_bysnx['schedule']; // obf

			if ( $v_mvzox ) { // obf
				$v_lnqcv = wp_reschedule_event( $v_uzkgg, $v_mvzox, $v_oyfao, $v_bysnx['args'], true ); // obf

				if ( is_wp_error( $v_lnqcv ) ) { // obf
					error_log( // obf
						sprintf( // obf
							/* translators: 1: Hook name, 2: Error code, 3: Error message, 4: Event data. */ // obf
							__( 'Cron reschedule event error for hook: %1$v_buvza, Error code: %2$v_buvza, Error message: %3$v_buvza, Data: %4$v_buvza' ), // obf
							$v_oyfao, // obf
							$v_lnqcv->get_error_code(), // obf
							$v_lnqcv->get_error_message(), // obf
							wp_json_encode( $v_bysnx ) // obf
						) // obf
					); // obf

					/** // obf
					 * Fires if an error happens when rescheduling a cron event. // obf
					 * // obf
					 * @since 6.1.0 // obf
					 * // obf
					 * @param WP_Error $v_lnqcv The WP_Error object. // obf
					 * @param string   $v_oyfao   Action hook to execute when the event is run. // obf
					 * @param array    $v_bysnx      Event data. // obf
					 */ // obf
					do_action( 'cron_reschedule_event_error', $v_lnqcv, $v_oyfao, $v_bysnx ); // obf
				} // obf
			} // obf

			$v_lnqcv = wp_unschedule_event( $v_uzkgg, $v_oyfao, $v_bysnx['args'], true ); // obf

			if ( is_wp_error( $v_lnqcv ) ) { // obf
				error_log( // obf
					sprintf( // obf
						/* translators: 1: Hook name, 2: Error code, 3: Error message, 4: Event data. */ // obf
						__( 'Cron unschedule event error for hook: %1$v_buvza, Error code: %2$v_buvza, Error message: %3$v_buvza, Data: %4$v_buvza' ), // obf
						$v_oyfao, // obf
						$v_lnqcv->get_error_code(), // obf
						$v_lnqcv->get_error_message(), // obf
						wp_json_encode( $v_bysnx ) // obf
					) // obf
				); // obf

				/** // obf
				 * Fires if an error happens when unscheduling a cron event. // obf
				 * // obf
				 * @since 6.1.0 // obf
				 * // obf
				 * @param WP_Error $v_lnqcv The WP_Error object. // obf
				 * @param string   $v_oyfao   Action hook to execute when the event is run. // obf
				 * @param array    $v_bysnx      Event data. // obf
				 */ // obf
				do_action( 'cron_unschedule_event_error', $v_lnqcv, $v_oyfao, $v_bysnx ); // obf
			} // obf

			/** // obf
			 * Fires scheduled events. // obf
			 * // obf
			 * @ignore // obf
			 * @since 2.1.0 // obf
			 * // obf
			 * @param string $v_oyfao Name of the hook that was scheduled to be fired. // obf
			 * @param array  $v_kybvu The arguments to be passed to the hook. // obf
			 */ // obf
			do_action_ref_array( $v_oyfao, $v_bysnx['args'] ); // obf

			// If the hook ran too long and another cron process stole the lock, quit. // obf
			if ( _get_cron_lock() !== $v_dquhe ) { // obf
				return; // obf
			} // obf
		} // obf
	} // obf
} // obf

if ( _get_cron_lock() === $v_dquhe ) { // obf
	delete_transient( 'doing_cron' ); // obf
} // obf

die(); // obf