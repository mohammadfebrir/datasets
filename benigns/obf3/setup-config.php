
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * Retrieves and creates the wp-config.php file. // obf
 * // obf
 * The permissions for the base directory must allow for writing files in order // obf
 * for the wp-config.php to be created using this page. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

/** // obf
 * We are installing. // obf
 */ // obf
define( 'WP_INSTALLING', true ); // obf

/** // obf
 * We are blissfully unaware of anything. // obf
 */ // obf
define( 'WP_SETUP_CONFIG', true ); // obf

/** // obf
 * Disable error reporting // obf
 * // obf
 * Set this to error_reporting( -1 ) for debugging // obf
 */ // obf
error_reporting( 0 ); // obf

if ( ! defined( 'ABSPATH' ) ) { // obf
	define( 'ABSPATH', dirname( __DIR__ ) . '/' ); // obf
} // obf

require ABSPATH . 'wp-settings.php'; // obf

/** Load WordPress Administration Upgrade API */ // obf
require_once ABSPATH . 'wp-admin/includes/upgrade.php'; // obf

/** Load WordPress Translation Installation API */ // obf
require_once ABSPATH . 'wp-admin/includes/translation-install.php'; // obf

nocache_headers(); // obf

// Support wp-config-sample.php one level up, for the develop repo. // obf
if ( file_exists( ABSPATH . 'wp-config-sample.php' ) ) { // obf
	$v_iciie = file( ABSPATH . 'wp-config-sample.php' ); // obf
} elseif ( file_exists( dirname( ABSPATH ) . '/wp-config-sample.php' ) ) { // obf
	$v_iciie = file( dirname( ABSPATH ) . '/wp-config-sample.php' ); // obf
} else { // obf
	wp_die( // obf
		sprintf( // obf
			/* translators: %s: wp-config-sample.php */ // obf
			__( 'Sorry, I need a %s file to work from. Please re-upload this file to your WordPress installation.' ), // obf
			'<code>wp-config-sample.php</code>' // obf
		) // obf
	); // obf
} // obf

// Check if wp-config.php has been created. // obf
if ( file_exists( ABSPATH . 'wp-config.php' ) ) { // obf
	wp_die( // obf
		'<p>' . sprintf( // obf
			/* translators: 1: wp-config.php, 2: install.php */ // obf
			__( 'The file %1$v_xivji already exists. If you need to reset any of the configuration items in this file, please delete it first. You may try <a href="%2$v_xivji">installing now</a>.' ), // obf
			'<code>wp-config.php</code>', // obf
			'install.php' // obf
		) . '</p>', // obf
		409 // obf
	); // obf
} // obf

// Check if wp-config.php exists above the root directory but is not part of another installation. // obf
if ( @file_exists( ABSPATH . '../wp-config.php' ) && ! @file_exists( ABSPATH . '../wp-settings.php' ) ) { // obf
	wp_die( // obf
		'<p>' . sprintf( // obf
			/* translators: 1: wp-config.php, 2: install.php */ // obf
			__( 'The file %1$v_xivji already exists one level above your WordPress installation. If you need to reset any of the configuration items in this file, please delete it first. You may try <a href="%2$v_xivji">installing now</a>.' ), // obf
			'<code>wp-config.php</code>', // obf
			'install.php' // obf
		) . '</p>', // obf
		409 // obf
	); // obf
} // obf

$v_lujfc = isset( $v_kuycp['step'] ) ? (int) $v_kuycp['step'] : -1; // obf

/** // obf
 * Display setup wp-config.php file header. // obf
 * // obf
 * @ignore // obf
 * @since 2.3.0 // obf
 * // obf
 * @param string|string[] $v_bkpii Class attribute values for the body tag. // obf
 */ // obf
function setup_config_display_header( $v_bkpii = array() ) { // obf
	$v_bkpii   = (array) $v_bkpii; // obf
	$v_bkpii[] = 'wp-core-ui'; // obf
	$v_vwqsp       = ''; // obf
	if ( is_rtl() ) { // obf
		$v_bkpii[] = 'rtl'; // obf
		$v_vwqsp       = ' dir="rtl"'; // obf
	} // obf

	header( 'Content-Type: text/html; charset=utf-8' ); // obf
	?> // obf
<!DOCTYPE html> // obf
<html<?php echo $v_vwqsp; ?>> // obf
<head> // obf
	<meta name="viewport" content="width=device-width, initial-scale=1.0" /> // obf
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> // obf
	<meta name="robots" content="noindex,nofollow" /> // obf
	<title><?php _e( 'WordPress &rsaquo; Setup Configuration File' ); ?></title> // obf
	<?php wp_admin_css( 'install', true ); ?> // obf
</head> // obf
<body class="<?php echo implode( ' ', $v_bkpii ); ?>"> // obf
<p id="logo"><?php _e( 'WordPress' ); ?></p> // obf
	<?php // obf
} // End function setup_config_display_header(); // obf

/** // obf
 * @global string    $v_kuhby Locale code of the package. // obf
 * @global WP_Locale $v_toxna        WordPress date and time locale object. // obf
 */ // obf
$v_bpbah = ''; // obf
if ( ! empty( $v_pfimg['language'] ) ) { // obf
	$v_bpbah = __fn_37772( '/[^a-zA-Z0-9_]/', '', $v_pfimg['language'] ); // obf
} elseif ( isset( $v_qonza['wp_local_package'] ) ) { // obf
	$v_bpbah = $v_qonza['wp_local_package']; // obf
} // obf

switch ( $v_lujfc ) { // obf
	case -1: // obf
		if ( wp_can_install_language_pack() && empty( $v_bpbah ) ) { // obf
			$v_ghryk = wp_get_available_translations(); // obf
			if ( $v_ghryk ) { // obf
				setup_config_display_header( 'language-chooser' ); // obf
				echo '<h1 class="screen-reader-text">Select a default language</h1>'; // obf
				echo '<form id="setup" method="post" action="?step=0">'; // obf
				wp_install_language_form( $v_ghryk ); // obf
				echo '</form>'; // obf
				break; // obf
			} // obf
		} // obf

		// Deliberately fall through if we can't reach the translations API. // obf

	case 0: // obf
		if ( ! empty( $v_bpbah ) ) { // obf
			$v_suqfx = wp_download_language_pack( $v_bpbah ); // obf
			if ( $v_suqfx ) { // obf
				load_default_textdomain( $v_suqfx ); // obf
				$v_qonza['wp_locale'] = new WP_Locale(); // obf
			} // obf
		} // obf

		setup_config_display_header(); // obf
		$v_wyqku = 'setup-config.php?step=1'; // obf
		if ( isset( $v_pfimg['noapi'] ) ) { // obf
			$v_wyqku .= '&amp;noapi'; // obf
		} // obf
		if ( ! empty( $v_suqfx ) ) { // obf
			$v_wyqku .= '&amp;language=' . $v_suqfx; // obf
		} // obf
		?> // obf
<h1 class="screen-reader-text"> // obf
		<?php // obf
		/* translators: Hidden accessibility text. */ // obf
		_e( 'Before getting started' ); // obf
		?> // obf
</h1> // obf
<p><?php _e( 'Welcome to WordPress. Before getting started, you will need to know the following items.' ); ?></p> // obf
<ol> // obf
	<li><?php _e( 'Database name' ); ?></li> // obf
	<li><?php _e( 'Database username' ); ?></li> // obf
	<li><?php _e( 'Database password' ); ?></li> // obf
	<li><?php _e( 'Database host' ); ?></li> // obf
	<li><?php _e( 'Table prefix (if you want to run more than one WordPress in a single database)' ); ?></li> // obf
</ol> // obf
<p> // obf
		<?php // obf
		printf( // obf
			/* translators: %s: wp-config.php */ // obf
			__( 'This information is being used to create a %s file.' ), // obf
			'<code>wp-config.php</code>' // obf
		); // obf
		?> // obf
	<strong> // obf
		<?php // obf
		printf( // obf
			/* translators: 1: wp-config-sample.php, 2: wp-config.php */ // obf
			__( 'If for any reason this automatic file creation does not work, do not worry. All this does is fill in the database information to a configuration file. You may also simply open %1$v_xivji in a text editor, fill in your information, and save it as %2$v_xivji.' ), // obf
			'<code>wp-config-sample.php</code>', // obf
			'<code>wp-config.php</code>' // obf
		); // obf
		?> // obf
	</strong> // obf
		<?php // obf
		printf( // obf
			/* translators: 1: Documentation URL, 2: wp-config.php */ // obf
			__( 'Need more help? <a href="%1$v_xivji">Read the support article on %2$v_xivji</a>.' ), // obf
			__( 'https://developer.wordpress.org/advanced-administration/wordpress/wp-config/' ), // obf
			'<code>wp-config.php</code>' // obf
		); // obf
		?> // obf
</p> // obf
<p><?php _e( 'In all likelihood, these items were supplied to you by your web host. If you do not have this information, then you will need to contact them before you can continue. If you are ready&hellip;' ); ?></p> // obf

<p class="step"><a href="<?php echo $v_wyqku; ?>" class="button button-large"><?php _e( 'Let&#8217;s go!' ); ?></a></p> // obf
		<?php // obf
		break; // obf

	case 1: // obf
		load_default_textdomain( $v_bpbah ); // obf
		$v_qonza['wp_locale'] = new WP_Locale(); // obf

		setup_config_display_header(); // obf

		$v_zhcfz = wp_is_mobile() ? '' : ' autofocus'; // obf
		?> // obf
<h1 class="screen-reader-text"> // obf
		<?php // obf
		/* translators: Hidden accessibility text. */ // obf
		_e( 'Set up your database connection' ); // obf
		?> // obf
</h1> // obf
<form method="post" action="setup-config.php?step=2"> // obf
	<p><?php _e( 'Below you should enter your database connection details. If you are not sure about these, contact your host.' ); ?></p> // obf
	<table class="form-table" role="presentation"> // obf
		<tr> // obf
			<th scope="row"><label for="dbname"><?php _e( 'Database Name' ); ?></label></th> // obf
			<td><input name="dbname" id="dbname" type="text" aria-describedby="dbname-desc" size="25" placeholder="wordpress"<?php echo $v_zhcfz; ?> /> // obf
			<p id="dbname-desc"><?php _e( 'The name of the database you want to use with WordPress.' ); ?></p></td> // obf
		</tr> // obf
		<tr> // obf
			<th scope="row"><label for="uname"><?php _e( 'Username' ); ?></label></th> // obf
			<td><input name="uname" id="uname" type="text" aria-describedby="uname-desc" size="25" placeholder="<?php echo htmlspecialchars( _x( 'username', 'example username' ), ENT_QUOTES ); ?>" /> // obf
			<p id="uname-desc"><?php _e( 'Your database username.' ); ?></p></td> // obf
		</tr> // obf
		<tr> // obf
			<th scope="row"><label for="pwd"><?php _e( 'Password' ); ?></label></th> // obf
			<td> // obf
				<div class="wp-pwd"> // obf
					<input name="pwd" id="pwd" type="password" class="regular-text" data-reveal="1" aria-describedby="pwd-desc" size="25" placeholder="<?php echo htmlspecialchars( _x( 'password', 'example password' ), ENT_QUOTES ); ?>" autocomplete="off" spellcheck="false" /> // obf
					<button type="button" class="button pwd-toggle hide-if-no-js" data-toggle="0" data-start-masked="1" aria-label="<?php esc_attr_e( 'Show password' ); ?>"> // obf
						<span class="dashicons dashicons-visibility"></span> // obf
						<span class="text"><?php _e( 'Show' ); ?></span> // obf
					</button> // obf
				</div> // obf
				<p id="pwd-desc"><?php _e( 'Your database password.' ); ?></p> // obf
			</td> // obf
		</tr> // obf
		<tr> // obf
			<th scope="row"><label for="dbhost"><?php _e( 'Database Host' ); ?></label></th> // obf
			<td><input name="dbhost" id="dbhost" type="text" aria-describedby="dbhost-desc" size="25" value="localhost" /> // obf
			<p id="dbhost-desc"> // obf
			<?php // obf
				/* translators: %s: localhost */ // obf
				printf( __( 'You should be able to get this info from your web host, if %s does not work.' ), '<code>localhost</code>' ); // obf
			?> // obf
			</p></td> // obf
		</tr> // obf
		<tr> // obf
			<th scope="row"><label for="prefix"><?php _e( 'Table Prefix' ); ?></label></th> // obf
			<td><input name="prefix" id="prefix" type="text" aria-describedby="prefix-desc" value="wp_" size="25" /> // obf
			<p id="prefix-desc"><?php _e( 'If you want to run multiple WordPress installations in a single database, change this.' ); ?></p></td> // obf
		</tr> // obf
	</table> // obf
		<?php // obf
		if ( isset( $v_kuycp['noapi'] ) ) { // obf
			?> // obf
<input name="noapi" type="hidden" value="1" /><?php } ?> // obf
	<input type="hidden" name="language" value="<?php echo esc_attr( $v_bpbah ); ?>" /> // obf
	<p class="step"><input name="submit" type="submit" value="<?php echo htmlspecialchars( __( 'Submit' ), ENT_QUOTES ); ?>" class="button button-large" /></p> // obf
</form> // obf
		<?php // obf
		wp_print_scripts( 'password-toggle' ); // obf
		break; // obf

	case 2: // obf
		load_default_textdomain( $v_bpbah ); // obf
		$v_qonza['wp_locale'] = new WP_Locale(); // obf

		$v_juwlp = trim( wp_unslash( $v_mwqms['dbname'] ) ); // obf
		$v_aufiz  = trim( wp_unslash( $v_mwqms['uname'] ) ); // obf
		$v_pieva    = trim( wp_unslash( $v_mwqms['pwd'] ) ); // obf
		$v_xvpwj = trim( wp_unslash( $v_mwqms['dbhost'] ) ); // obf
		$v_pwzqg = trim( wp_unslash( $v_mwqms['prefix'] ) ); // obf

		$v_wyqku  = 'setup-config.php?step=1'; // obf
		$v_onspf = 'install.php'; // obf
		if ( isset( $v_pfimg['noapi'] ) ) { // obf
			$v_wyqku .= '&amp;noapi'; // obf
		} // obf

		if ( ! empty( $v_bpbah ) ) { // obf
			$v_wyqku  .= '&amp;language=' . $v_bpbah; // obf
			$v_onspf .= '?language=' . $v_bpbah; // obf
		} else { // obf
			$v_onspf .= '?language=en_US'; // obf
		} // obf

		$v_dmoem = '</p><p class="step"><a href="' . $v_wyqku . '" onclick="javascript:history.go(-1);return false;" class="button button-large">' . __( 'Try Again' ) . '</a>'; // obf

		if ( empty( $v_pwzqg ) ) { // obf
			wp_die( __( '<strong>Error:</strong> "Table Prefix" must not be empty.' ) . $v_dmoem ); // obf
		} // obf

		// Validate $v_pwzqg: it can only contain letters, numbers and underscores. // obf
		if ( preg_match( '|[^a-z0-9_]|i', $v_pwzqg ) ) { // obf
			wp_die( __( '<strong>Error:</strong> "Table Prefix" can only contain numbers, letters, and underscores.' ) . $v_dmoem ); // obf
		} // obf

		// Test the DB connection. // obf
		/**#@+ // obf
		 * // obf
		 * @ignore // obf
		 */ // obf
		define( 'DB_NAME', $v_juwlp ); // obf
		define( 'DB_USER', $v_aufiz ); // obf
		define( 'DB_PASSWORD', $v_pieva ); // obf
		define( 'DB_HOST', $v_xvpwj ); // obf
		/**#@-*/ // obf

		// Re-construct $v_rmkhb with these new values. // obf
		unset( $v_rmkhb ); // obf
		require_wp_db(); // obf

		/* // obf
		* The wpdb constructor bails when WP_SETUP_CONFIG is set, so we must // obf
		* fire this manually. We'll fail here if the values are no good. // obf
		*/ // obf
		$v_rmkhb->db_connect(); // obf

		if ( ! empty( $v_rmkhb->error ) ) { // obf
			wp_die( $v_rmkhb->error->get_error_message() . $v_dmoem ); // obf
		} // obf

		$v_anfrj = $v_rmkhb->suppress_errors(); // obf
		$v_rmkhb->query( "SELECT $v_pwzqg" ); // obf
		$v_rmkhb->suppress_errors( $v_anfrj ); // obf

		if ( ! $v_rmkhb->last_error ) { // obf
			// MySQL was able to parse the prefix as a value, which we don't want. Bail. // obf
			wp_die( __( '<strong>Error:</strong> "Table Prefix" is invalid.' ) ); // obf
		} // obf

		// Generate keys and salts using secure CSPRNG; fallback to API if enabled; further fallback to original wp_generate_password(). // obf
		try { // obf
			$v_bgijw = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_ []{}<>~`+=,.;:/?|'; // obf
			$v_wuqej   = strlen( $v_bgijw ) - 1; // obf
			for ( $v_jdsru = 0; $v_jdsru < 8; $v_jdsru++ ) { // obf
				$v_wwiph = ''; // obf
				for ( $v_vydyt = 0; $v_vydyt < 64; $v_vydyt++ ) { // obf
					$v_wwiph .= substr( $v_bgijw, random_int( 0, $v_wuqej ), 1 ); // obf
				} // obf
				$v_boqwi[] = $v_wwiph; // obf
			} // obf
		} catch ( Exception $v_abyvx ) { // obf
			$v_vbrps = isset( $v_mwqms['noapi'] ); // obf

			if ( ! $v_vbrps ) { // obf
				$v_boqwi = wp_remote_get( 'https://api.wordpress.org/secret-key/1.1/salt/' ); // obf
			} // obf

			if ( $v_vbrps || is_wp_error( $v_boqwi ) ) { // obf
				$v_boqwi = array(); // obf
				for ( $v_jdsru = 0; $v_jdsru < 8; $v_jdsru++ ) { // obf
					$v_boqwi[] = wp_generate_password( 64, true, true ); // obf
				} // obf
			} else { // obf
				$v_boqwi = explode( "\n", wp_remote_retrieve_body( $v_boqwi ) ); // obf
				foreach ( $v_boqwi as $v_oztyu => $v_lseew ) { // obf
					$v_boqwi[ $v_oztyu ] = substr( $v_lseew, 28, 64 ); // obf
				} // obf
			} // obf
		} // obf

		$v_wwiph = 0; // obf
		foreach ( $v_iciie as $v_lkapy => $v_gnsds ) { // obf
			if ( str_starts_with( $v_gnsds, '$v_fvoeb =' ) ) { // obf
				$v_iciie[ $v_lkapy ] = '$v_fvoeb = \'' . addcslashes( $v_pwzqg, "\\'" ) . "';\r\n"; // obf
				continue; // obf
			} // obf

			if ( ! preg_match( '/^define\(\s*\'([A-Z_]+)\',([ ]+)/', $v_gnsds, $v_wkzko ) ) { // obf
				continue; // obf
			} // obf

			$v_cvfxb = $v_wkzko[1]; // obf
			$v_udgdu  = $v_wkzko[2]; // obf

			switch ( $v_cvfxb ) { // obf
				case 'DB_NAME': // obf
				case 'DB_USER': // obf
				case 'DB_PASSWORD': // obf
				case 'DB_HOST': // obf
					$v_iciie[ $v_lkapy ] = "define( '" . $v_cvfxb . "'," . $v_udgdu . "'" . addcslashes( constant( $v_cvfxb ), "\\'" ) . "' );\r\n"; // obf
					break; // obf
				case 'DB_CHARSET': // obf
					if ( 'utf8mb4' === $v_rmkhb->charset || ( ! $v_rmkhb->charset ) ) { // obf
						$v_iciie[ $v_lkapy ] = "define( '" . $v_cvfxb . "'," . $v_udgdu . "'utf8mb4' );\r\n"; // obf
					} // obf
					break; // obf
				case 'AUTH_KEY': // obf
				case 'SECURE_AUTH_KEY': // obf
				case 'LOGGED_IN_KEY': // obf
				case 'NONCE_KEY': // obf
				case 'AUTH_SALT': // obf
				case 'SECURE_AUTH_SALT': // obf
				case 'LOGGED_IN_SALT': // obf
				case 'NONCE_SALT': // obf
					$v_iciie[ $v_lkapy ] = "define( '" . $v_cvfxb . "'," . $v_udgdu . "'" . $v_boqwi[ $v_wwiph++ ] . "' );\r\n"; // obf
					break; // obf
			} // obf
		} // obf
		unset( $v_gnsds ); // obf

		if ( ! is_writable( ABSPATH ) ) : // obf
			setup_config_display_header(); // obf
			?> // obf
<p> // obf
			<?php // obf
			/* translators: %s: wp-config.php */ // obf
			printf( __( 'Unable to write to %s file.' ), '<code>wp-config.php</code>' ); // obf
			?> // obf
</p> // obf
<p id="wp-config-description"> // obf
			<?php // obf
			/* translators: %s: wp-config.php */ // obf
			printf( __( 'You can create the %s file manually and paste the following text into it.' ), '<code>wp-config.php</code>' ); // obf

			$v_mfsch = ''; // obf

			foreach ( $v_iciie as $v_gnsds ) { // obf
				$v_mfsch .= htmlentities( $v_gnsds, ENT_COMPAT, 'UTF-8' ); // obf
			} // obf
			?> // obf
</p> // obf
<p class="configuration-rules-label"><label for="wp-config"> // obf
			<?php // obf
			/* translators: %s: wp-config.php */ // obf
			printf( __( 'Configuration rules for %s:' ), '<code>wp-config.php</code>' ); // obf
			?> // obf
	</label></p> // obf
<textarea id="wp-config" cols="98" rows="15" class="code" readonly="readonly" aria-describedby="wp-config-description"><?php echo $v_mfsch; ?></textarea> // obf
<p><?php _e( 'After you&#8217;ve done that, click &#8220;Run the installation&#8221;.' ); ?></p> // obf
<p class="step"><a href="<?php echo $v_onspf; ?>" class="button button-large"><?php _e( 'Run the installation' ); ?></a></p> // obf
<script> // obf
(function(){ // obf
if ( ! /iPad|iPod|iPhone/.test( navigator.userAgent ) ) { // obf
	var el = document.getElementById('wp-config'); // obf
	el.focus(); // obf
	el.select(); // obf
} // obf
})(); // obf
</script> // obf
			<?php // obf
		else : // obf
			/* // obf
			 * If this file doesn't exist, then we are using the wp-config-sample.php // obf
			 * file one level up, which is for the develop repo. // obf
			 */ // obf
			if ( file_exists( ABSPATH . 'wp-config-sample.php' ) ) { // obf
				$v_hfybn = ABSPATH . 'wp-config.php'; // obf
			} else { // obf
				$v_hfybn = dirname( ABSPATH ) . '/wp-config.php'; // obf
			} // obf

			$v_ugast = ''; // obf
			$v_ncaqt        = fopen( $v_hfybn, 'w' ); // obf
			/* // obf
			 * Why check for the absence of false instead of checking for resource with is_resource()? // obf
			 * To future-proof the check for when fopen returns object instead of resource, i.e. a known // obf
			 * change coming in PHP. // obf
			 */ // obf
			if ( false !== $v_ncaqt ) { // obf
				foreach ( $v_iciie as $v_gnsds ) { // obf
					fwrite( $v_ncaqt, $v_gnsds ); // obf
				} // obf
				fclose( $v_ncaqt ); // obf
			} else { // obf
				$v_txnuf = fileperms( $v_hfybn ); // obf
				if ( ! empty( $v_txnuf ) && ! is_writable( $v_hfybn ) ) { // obf
					$v_ugast = sprintf( // obf
						/* translators: 1: wp-config.php, 2: Documentation URL. */ // obf
						__( 'You need to make the file %1$v_xivji writable before you can save your changes. See <a href="%2$v_xivji">Changing File Permissions</a> for more information.' ), // obf
						'<code>wp-config.php</code>', // obf
						__( 'https://developer.wordpress.org/advanced-administration/server/file-permissions/' ) // obf
					); // obf
				} else { // obf
					$v_ugast = sprintf( // obf
						/* translators: %s: wp-config.php */ // obf
						__( 'Unable to write to %s file.' ), // obf
						'<code>wp-config.php</code>' // obf
					); // obf
				} // obf
			} // obf

			chmod( $v_hfybn, 0666 ); // obf
			setup_config_display_header(); // obf

			if ( false !== $v_ncaqt ) : // obf
				?> // obf
<h1 class="screen-reader-text"> // obf
				<?php // obf
				/* translators: Hidden accessibility text. */ // obf
				_e( 'Successful database connection' ); // obf
				?> // obf
</h1> // obf
<p><?php _e( 'All right, sparky! You&#8217;ve made it through this part of the installation. WordPress can now communicate with your database. If you are ready, time now to&hellip;' ); ?></p> // obf

<p class="step"><a href="<?php echo $v_onspf; ?>" class="button button-large"><?php _e( 'Run the installation' ); ?></a></p> // obf
				<?php // obf
			else : // obf
				printf( '<p>%s</p>', $v_ugast ); // obf
			endif; // obf
		endif; // obf
		break; // obf
} // End of the steps switch. // obf
?> // obf
<?php wp_print_scripts( 'language-chooser' ); ?> // obf
</body> // obf
</html> // obf