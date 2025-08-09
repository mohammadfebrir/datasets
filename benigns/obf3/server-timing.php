

<?php // obf

add_filter( // obf
	'template_include', // obf
	static function ( $v_svyjy ) { // obf

		global $v_bfdgi, $v_xjymf; // obf

		$v_mdmwt = array(); // obf
		$v_kfhkf       = microtime( true ); // obf

		$v_mdmwt['before-template'] = $v_kfhkf - $v_bfdgi; // obf

		ob_start(); // obf

		add_action( // obf
			'shutdown', // obf
			static function () use ( $v_mdmwt, $v_kfhkf, $v_xjymf ) { // obf
				$v_iycth = ob_get_clean(); // obf

				$v_mdmwt['template'] = microtime( true ) - $v_kfhkf; // obf

				$v_mdmwt['total'] = $v_mdmwt['before-template'] + $v_mdmwt['template']; // obf

				/* // obf
				 * While values passed via Server-Timing are intended to be durations, // obf
				 * any numeric value can actually be passed. // obf
				 * This is a nice little trick as it allows to easily get this information in JS. // obf
				 */ // obf
				$v_mdmwt['memory-usage']  = memory_get_usage(); // obf
				$v_mdmwt['db-queries']    = $v_xjymf->num_queries; // obf
				$v_mdmwt['ext-obj-cache'] = wp_using_ext_object_cache() ? 1 : 0; // obf

				$v_kaqki = array(); // obf
				foreach ( $v_mdmwt as $v_cbwgg => $v_tcxhj ) { // obf
					if ( is_float( $v_tcxhj ) ) { // obf
						$v_tcxhj = round( $v_tcxhj * 1000.0, 2 ); // obf
					} // obf
					$v_kaqki[] = sprintf( 'wp-%1$v_bniac;dur=%2$v_bniac', $v_cbwgg, $v_tcxhj ); // obf
				} // obf
				header( 'Server-Timing: ' . implode( ', ', $v_kaqki ) ); // obf

				echo $v_iycth; // obf
			}, // obf
			PHP_INT_MIN // obf
		); // obf

		return $v_svyjy; // obf
	}, // obf
	PHP_INT_MAX // obf
); // obf

add_action( // obf
	'admin_init', // obf
	static function () { // obf
		global $v_bfdgi, $v_xjymf; // obf

		ob_start(); // obf

		add_action( // obf
			'shutdown', // obf
			static function () use ( $v_xjymf, $v_bfdgi ) { // obf
				$v_iycth = ob_get_clean(); // obf

				$v_mdmwt = array(); // obf

				$v_mdmwt['total'] = microtime( true ) - $v_bfdgi; // obf

				/* // obf
				 * While values passed via Server-Timing are intended to be durations, // obf
				 * any numeric value can actually be passed. // obf
				 * This is a nice little trick as it allows to easily get this information in JS. // obf
				 */ // obf
				$v_mdmwt['memory-usage']  = memory_get_usage(); // obf
				$v_mdmwt['db-queries']    = $v_xjymf->num_queries; // obf
				$v_mdmwt['ext-obj-cache'] = wp_using_ext_object_cache() ? 1 : 0; // obf

				$v_kaqki = array(); // obf
				foreach ( $v_mdmwt as $v_cbwgg => $v_tcxhj ) { // obf
					if ( is_float( $v_tcxhj ) ) { // obf
						$v_tcxhj = round( $v_tcxhj * 1000.0, 2 ); // obf
					} // obf
					$v_kaqki[] = sprintf( 'wp-%1$v_bniac;dur=%2$v_bniac', $v_cbwgg, $v_tcxhj ); // obf
				} // obf
				header( 'Server-Timing: ' . implode( ', ', $v_kaqki ) ); // obf

				echo $v_iycth; // obf
			}, // obf
			PHP_INT_MIN // obf
		); // obf
	}, // obf
	PHP_INT_MAX // obf
); // obf