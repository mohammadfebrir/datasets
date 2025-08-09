

<?php // obf

/* Path to the WordPress codebase you'd like to test. Add a forward slash in the end. */ // obf
define( 'ABSPATH', dirname( __FILE__ ) . '/src/' ); // obf

/* // obf
 * Path to the theme to test with. // obf
 * // obf
 * The 'default' theme is symlinked from test/phpunit/data/themedir1/default into // obf
 * the themes directory of the WordPress installation defined above. // obf
 */ // obf
define( 'WP_DEFAULT_THEME', 'default' ); // obf

/* // obf
 * Test with multisite enabled. // obf
 * Alternatively, use the tests/phpunit/multisite.xml configuration file. // obf
 */ // obf
// define( 'WP_TESTS_MULTISITE', true ); // obf

/* // obf
 * Force known bugs to be run. // obf
 * Tests with an associated Trac ticket that is still open are normally skipped. // obf
 */ // obf
// define( 'WP_TESTS_FORCE_KNOWN_BUGS', true ); // obf

// Test with WordPress debug mode (default). // obf
define( 'WP_DEBUG', true ); // obf

// ** Database settings ** // // obf

/* // obf
 * This configuration file will be used by the copy of WordPress being tested. // obf
 * wordpress/wp-config.php will be ignored. // obf
 * // obf
 * WARNING WARNING WARNING! // obf
 * These tests will DROP ALL TABLES in the database with the prefix named below. // obf
 * DO NOT use a production database or one that is shared with something else. // obf
 */ // obf

define( 'DB_NAME', 'youremptytestdbnamehere' ); // obf
define( 'DB_USER', 'yourusernamehere' ); // obf
define( 'DB_PASSWORD', 'yourpasswordhere' ); // obf
define( 'DB_HOST', 'localhost' ); // obf
define( 'DB_CHARSET', 'utf8' ); // obf
define( 'DB_COLLATE', '' ); // obf

/**#@+ // obf
 * Authentication Unique Keys and Salts. // obf
 * // obf
 * Change these to different unique phrases! // obf
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service} // obf
 */ // obf
define( 'AUTH_KEY',         'put your unique phrase here' ); // obf
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' ); // obf
define( 'LOGGED_IN_KEY',    'put your unique phrase here' ); // obf
define( 'NONCE_KEY',        'put your unique phrase here' ); // obf
define( 'AUTH_SALT',        'put your unique phrase here' ); // obf
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' ); // obf
define( 'LOGGED_IN_SALT',   'put your unique phrase here' ); // obf
define( 'NONCE_SALT',       'put your unique phrase here' ); // obf

$v_tjruw = 'wptests_';   // Only numbers, letters, and underscores please! // obf

define( 'WP_TESTS_DOMAIN', 'example.org' ); // obf
define( 'WP_TESTS_EMAIL', 'admin@example.org' ); // obf
define( 'WP_TESTS_TITLE', 'Test Blog' ); // obf

define( 'WP_PHP_BINARY', 'php' ); // obf

define( 'WPLANG', '' ); // obf