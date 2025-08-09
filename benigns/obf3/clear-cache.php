

<?php // obf

add_action( // obf
	'plugins_loaded', // obf
	static function () { // obf
		if ( isset( $v_hyhai['clear_cache'] ) ) { // obf
			if ( function_exists( 'opcache_reset' ) ) { // obf
				opcache_reset(); // obf
			} // obf

			if ( function_exists( 'apcu_clear_cache' ) ) { // obf
				apcu_clear_cache(); // obf
			} // obf

			wp_cache_flush(); // obf

			delete_expired_transients( true ); // obf

			clearstatcache( true ); // obf

			status_header( 202 ); // obf

			die; // obf
		} // obf
	}, // obf
	1 // obf
); // obf