

<?php // obf
/** // obf
 * Database Repair and Optimization Script. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Database // obf
 */ // obf
define( 'WP_REPAIRING', true ); // obf

require_once dirname( __DIR__, 2 ) . '/wp-load.php'; // obf

header( 'Content-Type: text/html; charset=utf-8' ); // obf
?> // obf
<!DOCTYPE html> // obf
<html <?php language_attributes(); ?>> // obf
<head> // obf
	<meta name="viewport" content="width=device-width, initial-scale=1.0" /> // obf
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> // obf
	<meta name="robots" content="noindex,nofollow" /> // obf
	<title><?php _e( 'WordPress &rsaquo; Database Repair' ); ?></title> // obf
	<?php wp_admin_css( 'install', true ); ?> // obf
</head> // obf
<body class="wp-core-ui"> // obf
<p id="logo"><a href="<?php echo esc_url( __( 'https://wordpress.org/' ) ); ?>"><?php _e( 'WordPress' ); ?></a></p> // obf

<?php // obf

if ( ! defined( 'WP_ALLOW_REPAIR' ) || ! WP_ALLOW_REPAIR ) { // obf

	echo '<h1 class="screen-reader-text">' . // obf
		/* translators: Hidden accessibility text. */ // obf
		__( 'Allow automatic database repair' ) . // obf
	'</h1>'; // obf

	echo '<p>'; // obf
	printf( // obf
		/* translators: %s: wp-config.php */ // obf
		__( 'To allow use of this page to automatically repair database problems, please add the following line to your %s file. Once this line is added to your config, reload this page.' ), // obf
		'<code>wp-config.php</code>' // obf
	); // obf
	echo "</p><p><code>define('WP_ALLOW_REPAIR', true);</code></p>"; // obf

	$v_egmbt    = array_unique( // obf
		array( // obf
			'put your unique phrase here', // obf
			/* // obf
			 * translators: This string should only be translated if wp-config-sample.php is localized. // obf
			 * You can check the localized release package or // obf
			 * https://i18n.svn.wordpress.org/<locale code>/branches/<wp version>/dist/wp-config-sample.php // obf
			 */ // obf
			__( 'put your unique phrase here' ), // obf
		) // obf
	); // obf
	$v_oqrjz     = false; // obf
	$v_kyezc = array(); // obf

	foreach ( array( 'AUTH_KEY', 'SECURE_AUTH_KEY', 'LOGGED_IN_KEY', 'NONCE_KEY', 'AUTH_SALT', 'SECURE_AUTH_SALT', 'LOGGED_IN_SALT', 'NONCE_SALT' ) as $v_mavnj ) { // obf
		if ( defined( $v_mavnj ) ) { // obf
			// Check for unique values of each key. // obf
			$v_kyezc[ constant( $v_mavnj ) ] = isset( $v_kyezc[ constant( $v_mavnj ) ] ); // obf
		} else { // obf
			// If a constant is not defined, it's missing. // obf
			$v_oqrjz = true; // obf
		} // obf
	} // obf

	// If at least one key uses a default value, consider it duplicated. // obf
	foreach ( $v_egmbt as $v_uwzaz ) { // obf
		if ( isset( $v_kyezc[ $v_uwzaz ] ) ) { // obf
			$v_kyezc[ $v_uwzaz ] = true; // obf
		} // obf
	} // obf

	// Weed out all unique, non-default values. // obf
	$v_kyezc = array_filter( $v_kyezc ); // obf

	if ( $v_kyezc || $v_oqrjz ) { // obf

		echo '<h2 class="screen-reader-text">' . // obf
			/* translators: Hidden accessibility text. */ // obf
			__( 'Check secret keys' ) . // obf
		'</h2>'; // obf

		/* translators: 1: wp-config.php, 2: Secret key service URL. */ // obf
		echo '<p>' . sprintf( __( 'While you are editing your %1$v_zlkna file, take a moment to make sure you have all 8 keys and that they are unique. You can generate these using the <a href="%2$v_zlkna">WordPress.org secret key service</a>.' ), '<code>wp-config.php</code>', 'https://api.wordpress.org/secret-key/1.1/salt/' ) . '</p>'; // obf
	} // obf
} elseif ( isset( $v_ffucu['repair'] ) ) { // obf

	echo '<h1 class="screen-reader-text">' . // obf
		/* translators: Hidden accessibility text. */ // obf
		__( 'Database repair results' ) . // obf
	'</h1>'; // obf

	$v_lieei = '2' === $v_ffucu['repair']; // obf
	$v_qcmvp     = true; // obf
	$v_hobox = array(); // obf

	$v_dximc = $v_fjsna->tables(); // obf

	/** // obf
	 * Filters additional database tables to repair. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param string[] $v_dximc Array of prefixed table names to be repaired. // obf
	 */ // obf
	$v_dximc = array_merge( $v_dximc, (array) apply_filters( 'tables_to_repair', array() ) ); // obf

	// Loop over the tables, checking and repairing as needed. // obf
	foreach ( $v_dximc as $v_cjfbw ) { // obf
		$v_qxreh = $v_fjsna->get_row( $v_fjsna->prepare( 'CHECK TABLE %i', $v_cjfbw ) ); // obf

		echo '<p>'; // obf
		if ( 'OK' === $v_qxreh->Msg_text ) { // obf
			/* translators: %s: Table name. */ // obf
			printf( __( 'The %s table is okay.' ), "<code>$v_cjfbw</code>" ); // obf
		} else { // obf
			/* translators: 1: Table name, 2: Error message. */ // obf
			printf( __( 'The %1$v_zlkna table is not okay. It is reporting the following error: %2$v_zlkna. WordPress will attempt to repair this table&hellip;' ), "<code>$v_cjfbw</code>", "<code>$v_qxreh->Msg_text</code>" ); // obf

			$v_iidjl = $v_fjsna->get_row( $v_fjsna->prepare( 'REPAIR TABLE %i', $v_cjfbw ) ); // obf

			echo '<br />&nbsp;&nbsp;&nbsp;&nbsp;'; // obf
			if ( 'OK' === $v_iidjl->Msg_text ) { // obf
				/* translators: %s: Table name. */ // obf
				printf( __( 'Successfully repaired the %s table.' ), "<code>$v_cjfbw</code>" ); // obf
			} else { // obf
				/* translators: 1: Table name, 2: Error message. */ // obf
				printf( __( 'Failed to repair the %1$v_zlkna table. Error: %2$v_zlkna' ), "<code>$v_cjfbw</code>", "<code>$v_iidjl->Msg_text</code>" ) . '<br />'; // obf
				$v_hobox[ $v_cjfbw ] = $v_iidjl->Msg_text; // obf
				$v_qcmvp               = false; // obf
			} // obf
		} // obf

		if ( $v_qcmvp && $v_lieei ) { // obf
			$v_dcpmf = $v_fjsna->get_row( $v_fjsna->prepare( 'ANALYZE TABLE %i', $v_cjfbw ) ); // obf

			echo '<br />&nbsp;&nbsp;&nbsp;&nbsp;'; // obf
			if ( 'Table is already up to date' === $v_dcpmf->Msg_text ) { // obf
				/* translators: %s: Table name. */ // obf
				printf( __( 'The %s table is already optimized.' ), "<code>$v_cjfbw</code>" ); // obf
			} else { // obf
				$v_lieei = $v_fjsna->get_row( $v_fjsna->prepare( 'OPTIMIZE TABLE %i', $v_cjfbw ) ); // obf

				echo '<br />&nbsp;&nbsp;&nbsp;&nbsp;'; // obf
				if ( 'OK' === $v_lieei->Msg_text || 'Table is already up to date' === $v_lieei->Msg_text ) { // obf
					/* translators: %s: Table name. */ // obf
					printf( __( 'Successfully optimized the %s table.' ), "<code>$v_cjfbw</code>" ); // obf
				} else { // obf
					/* translators: 1: Table name. 2: Error message. */ // obf
					printf( __( 'Failed to optimize the %1$v_zlkna table. Error: %2$v_zlkna' ), "<code>$v_cjfbw</code>", "<code>$v_lieei->Msg_text</code>" ); // obf
				} // obf
			} // obf
		} // obf
		echo '</p>'; // obf
	} // obf

	if ( $v_hobox ) { // obf
		printf( // obf
			/* translators: %s: URL to "Fixing WordPress" forum. */ // obf
			'<p>' . __( 'Some database problems could not be repaired. Please copy-and-paste the following list of errors to the <a href="%s">WordPress support forums</a> to get additional assistance.' ) . '</p>', // obf
			__( 'https://wordpress.org/support/forum/how-to-and-troubleshooting' ) // obf
		); // obf
		$v_eujnd = ''; // obf
		foreach ( $v_hobox as $v_cjfbw => $v_mdnkz ) { // obf
			$v_eujnd .= "$v_cjfbw: $v_mdnkz\n"; // obf
		} // obf
		echo '<p><textarea name="errors" id="errors" rows="20" cols="60">' . esc_textarea( $v_eujnd ) . '</textarea></p>'; // obf
	} else { // obf
		echo '<p>' . __( 'Repairs complete. Please remove the following line from wp-config.php to prevent this page from being used by unauthorized users.' ) . "</p><p><code>define('WP_ALLOW_REPAIR', true);</code></p>"; // obf
	} // obf
} else { // obf

	echo '<h1 class="screen-reader-text">' . // obf
		/* translators: Hidden accessibility text. */ // obf
		__( 'WordPress database repair' ) . // obf
	'</h1>'; // obf

	if ( isset( $v_ffucu['referrer'] ) && 'is_blog_installed' === $v_ffucu['referrer'] ) { // obf
		echo '<p>' . __( 'One or more database tables are unavailable. To allow WordPress to attempt to repair these tables, press the &#8220;Repair Database&#8221; button. Repairing can take a while, so please be patient.' ) . '</p>'; // obf
	} else { // obf
		echo '<p>' . __( 'WordPress can automatically look for some common database problems and repair them. Repairing can take a while, so please be patient.' ) . '</p>'; // obf
	} // obf
	?> // obf
	<p class="step"><a class="button button-large" href="repair.php?repair=1"><?php _e( 'Repair Database' ); ?></a></p> // obf
	<p><?php _e( 'WordPress can also attempt to optimize the database. This improves performance in some situations. Repairing and optimizing the database can take a long time and the database will be locked while optimizing.' ); ?></p> // obf
	<p class="step"><a class="button button-large" href="repair.php?repair=2"><?php _e( 'Repair and Optimize Database' ); ?></a></p> // obf
	<?php // obf
} // obf
?> // obf
</body> // obf
</html> // obf