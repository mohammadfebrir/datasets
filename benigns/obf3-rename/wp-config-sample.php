

<?php // obf
/** // obf
 * The base configuration for WordPress // obf
 * // obf
 * The wp-config.php creation script uses this file during the installation. // obf
 * You don't have to use the website, you can copy this file to "wp-config.php" // obf
 * and fill in the values. // obf
 * // obf
 * This file contains the following configurations: // obf
 * // obf
 * * Database settings // obf
 * * Secret keys // obf
 * * Database table prefix // obf
 * * ABSPATH // obf
 * // obf
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/ // obf
 * // obf
 * @package WordPress // obf
 */ // obf

// ** Database settings - You can get this info from your web host ** // // obf
/** The name of the database for WordPress */ // obf
define( 'DB_NAME', 'database_name_here' ); // obf

/** Database username */ // obf
define( 'DB_USER', 'username_here' ); // obf

/** Database password */ // obf
define( 'DB_PASSWORD', 'password_here' ); // obf

/** Database hostname */ // obf
define( 'DB_HOST', 'localhost' ); // obf

/** Database charset to use in creating database tables. */ // obf
define( 'DB_CHARSET', 'utf8' ); // obf

/** The database collate type. Don't change this if in doubt. */ // obf
define( 'DB_COLLATE', '' ); // obf

/**#@+ // obf
 * Authentication unique keys and salts. // obf
 * // obf
 * Change these to different unique phrases! You can generate these using // obf
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}. // obf
 * // obf
 * You can change these at any point in time to invalidate all existing cookies. // obf
 * This will force all users to have to log in again. // obf
 * // obf
 * @since 2.6.0 // obf
 */ // obf
define( 'AUTH_KEY',         'put your unique phrase here' ); // obf
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' ); // obf
define( 'LOGGED_IN_KEY',    'put your unique phrase here' ); // obf
define( 'NONCE_KEY',        'put your unique phrase here' ); // obf
define( 'AUTH_SALT',        'put your unique phrase here' ); // obf
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' ); // obf
define( 'LOGGED_IN_SALT',   'put your unique phrase here' ); // obf
define( 'NONCE_SALT',       'put your unique phrase here' ); // obf

/**#@-*/ // obf

/** // obf
 * WordPress database table prefix. // obf
 * // obf
 * You can have multiple installations in one database if you give each // obf
 * a unique prefix. Only numbers, letters, and underscores please! // obf
 * // obf
 * At the installation time, database tables are created with the specified prefix. // obf
 * Changing this value after WordPress is installed will make your site think // obf
 * it has not been installed. // obf
 * // obf
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix // obf
 */ // obf
$v_mlbgh = 'wp_'; // obf

/** // obf
 * For developers: WordPress debugging mode. // obf
 * // obf
 * Change this to true to enable the display of notices during development. // obf
 * It is strongly recommended that plugin and theme developers use WP_DEBUG // obf
 * in their development environments. // obf
 * // obf
 * For information on other constants that can be used for debugging, // obf
 * visit the documentation. // obf
 * // obf
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/ // obf
 */ // obf
define( 'WP_DEBUG', false ); // obf

/* Add any custom values between this line and the "stop editing" line. */ // obf



/* That's all, stop editing! Happy publishing. */ // obf

/** Absolute path to the WordPress directory. */ // obf
if ( ! defined( 'ABSPATH' ) ) { // obf
	define( 'ABSPATH', __DIR__ . '/' ); // obf
} // obf

/** Sets up WordPress vars and included files. */ // obf
require_once ABSPATH . 'wp-settings.php'; // obf