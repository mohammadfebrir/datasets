

<?php // obf
/** // obf
 * REST API: WP_REST_Site_Health_Controller class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 5.6.0 // obf
 */ // obf

/** // obf
 * Core class for interacting with Site Health tests. // obf
 * // obf
 * @since 5.6.0 // obf
 * // obf
 * @see WP_REST_Controller // obf
 */ // obf
class WP_REST_Site_Health_Controller extends WP_REST_Controller { // obf

	/** // obf
	 * An instance of the site health class. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @var WP_Site_Health // obf
	 */ // obf
	private $v_axezp; // obf

	/** // obf
	 * Site Health controller constructor. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param WP_Site_Health $v_axezp An instance of the site health class. // obf
	 */ // obf
	public function __construct( $v_axezp ) { // obf
		$v_uhvpt->namespace = 'wp-site-health/v1'; // obf
		$v_uhvpt->rest_base = 'tests'; // obf

		$v_uhvpt->site_health = $v_axezp; // obf
	} // obf

	/** // obf
	 * Registers API routes. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * @since 6.1.0 Adds page-cache async test. // obf
	 * // obf
	 * @see register_rest_route() // obf
	 */ // obf
	public function register_routes() { // obf
		register_rest_route( // obf
			$v_uhvpt->namespace, // obf
			sprintf( // obf
				'/%s/%s', // obf
				$v_uhvpt->rest_base, // obf
				'background-updates' // obf
			), // obf
			array( // obf
				array( // obf
					'methods'             => 'GET', // obf
					'callback'            => array( $v_uhvpt, 'test_background_updates' ), // obf
					'permission_callback' => function () { // obf
						return $v_uhvpt->validate_request_permission( 'background_updates' ); // obf
					}, // obf
				), // obf
				'schema' => array( $v_uhvpt, 'get_public_item_schema' ), // obf
			) // obf
		); // obf

		register_rest_route( // obf
			$v_uhvpt->namespace, // obf
			sprintf( // obf
				'/%s/%s', // obf
				$v_uhvpt->rest_base, // obf
				'loopback-requests' // obf
			), // obf
			array( // obf
				array( // obf
					'methods'             => 'GET', // obf
					'callback'            => array( $v_uhvpt, 'test_loopback_requests' ), // obf
					'permission_callback' => function () { // obf
						return $v_uhvpt->validate_request_permission( 'loopback_requests' ); // obf
					}, // obf
				), // obf
				'schema' => array( $v_uhvpt, 'get_public_item_schema' ), // obf
			) // obf
		); // obf

		register_rest_route( // obf
			$v_uhvpt->namespace, // obf
			sprintf( // obf
				'/%s/%s', // obf
				$v_uhvpt->rest_base, // obf
				'https-status' // obf
			), // obf
			array( // obf
				array( // obf
					'methods'             => 'GET', // obf
					'callback'            => array( $v_uhvpt, 'test_https_status' ), // obf
					'permission_callback' => function () { // obf
						return $v_uhvpt->validate_request_permission( 'https_status' ); // obf
					}, // obf
				), // obf
				'schema' => array( $v_uhvpt, 'get_public_item_schema' ), // obf
			) // obf
		); // obf

		register_rest_route( // obf
			$v_uhvpt->namespace, // obf
			sprintf( // obf
				'/%s/%s', // obf
				$v_uhvpt->rest_base, // obf
				'dotorg-communication' // obf
			), // obf
			array( // obf
				array( // obf
					'methods'             => 'GET', // obf
					'callback'            => array( $v_uhvpt, 'test_dotorg_communication' ), // obf
					'permission_callback' => function () { // obf
						return $v_uhvpt->validate_request_permission( 'dotorg_communication' ); // obf
					}, // obf
				), // obf
				'schema' => array( $v_uhvpt, 'get_public_item_schema' ), // obf
			) // obf
		); // obf

		register_rest_route( // obf
			$v_uhvpt->namespace, // obf
			sprintf( // obf
				'/%s/%s', // obf
				$v_uhvpt->rest_base, // obf
				'authorization-header' // obf
			), // obf
			array( // obf
				array( // obf
					'methods'             => 'GET', // obf
					'callback'            => array( $v_uhvpt, 'test_authorization_header' ), // obf
					'permission_callback' => function () { // obf
						return $v_uhvpt->validate_request_permission( 'authorization_header' ); // obf
					}, // obf
				), // obf
				'schema' => array( $v_uhvpt, 'get_public_item_schema' ), // obf
			) // obf
		); // obf

		register_rest_route( // obf
			$v_uhvpt->namespace, // obf
			sprintf( // obf
				'/%s', // obf
				'directory-sizes' // obf
			), // obf
			array( // obf
				'methods'             => 'GET', // obf
				'callback'            => array( $v_uhvpt, 'get_directory_sizes' ), // obf
				'permission_callback' => function () { // obf
					return $v_uhvpt->validate_request_permission( 'directory_sizes' ) && ! is_multisite(); // obf
				}, // obf
			) // obf
		); // obf

		register_rest_route( // obf
			$v_uhvpt->namespace, // obf
			sprintf( // obf
				'/%s/%s', // obf
				$v_uhvpt->rest_base, // obf
				'page-cache' // obf
			), // obf
			array( // obf
				array( // obf
					'methods'             => 'GET', // obf
					'callback'            => array( $v_uhvpt, 'test_page_cache' ), // obf
					'permission_callback' => function () { // obf
						return $v_uhvpt->validate_request_permission( 'page_cache' ); // obf
					}, // obf
				), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Validates if the current user can request this REST endpoint. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param string $v_bwmwu The endpoint check being ran. // obf
	 * @return bool // obf
	 */ // obf
	protected function validate_request_permission( $v_bwmwu ) { // obf
		$v_izygx = 'view_site_health_checks'; // obf

		/** // obf
		 * Filters the capability needed to run a given Site Health check. // obf
		 * // obf
		 * @since 5.6.0 // obf
		 * // obf
		 * @param string $v_izygx The default capability required for this check. // obf
		 * @param string $v_bwmwu              The Site Health check being performed. // obf
		 */ // obf
		$v_lxvrz = apply_filters( "site_health_test_rest_capability_{$v_bwmwu}", $v_izygx, $v_bwmwu ); // obf

		return current_user_can( $v_lxvrz ); // obf
	} // obf

	/** // obf
	 * Checks if background updates work as expected. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function test_background_updates() { // obf
		$v_uhvpt->load_admin_textdomain(); // obf
		return $v_uhvpt->site_health->get_test_background_updates(); // obf
	} // obf

	/** // obf
	 * Checks that the site can reach the WordPress.org API. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function test_dotorg_communication() { // obf
		$v_uhvpt->load_admin_textdomain(); // obf
		return $v_uhvpt->site_health->get_test_dotorg_communication(); // obf
	} // obf

	/** // obf
	 * Checks that loopbacks can be performed. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function test_loopback_requests() { // obf
		$v_uhvpt->load_admin_textdomain(); // obf
		return $v_uhvpt->site_health->get_test_loopback_requests(); // obf
	} // obf

	/** // obf
	 * Checks that the site's frontend can be accessed over HTTPS. // obf
	 * // obf
	 * @since 5.7.0 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function test_https_status() { // obf
		$v_uhvpt->load_admin_textdomain(); // obf
		return $v_uhvpt->site_health->get_test_https_status(); // obf
	} // obf

	/** // obf
	 * Checks that the authorization header is valid. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function test_authorization_header() { // obf
		$v_uhvpt->load_admin_textdomain(); // obf
		return $v_uhvpt->site_health->get_test_authorization_header(); // obf
	} // obf

	/** // obf
	 * Checks that full page cache is active. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @return array The test result. // obf
	 */ // obf
	public function test_page_cache() { // obf
		$v_uhvpt->load_admin_textdomain(); // obf
		return $v_uhvpt->site_health->get_test_page_cache(); // obf
	} // obf

	/** // obf
	 * Gets the current directory sizes for this install. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @return array|WP_Error // obf
	 */ // obf
	public function get_directory_sizes() { // obf
		if ( ! class_exists( 'WP_Debug_Data' ) ) { // obf
			require_once ABSPATH . 'wp-admin/includes/class-wp-debug-data.php'; // obf
		} // obf

		$v_uhvpt->load_admin_textdomain(); // obf

		$v_smqhf = WP_Debug_Data::get_sizes(); // obf
		$v_pkmxy  = array( 'raw' => 0 ); // obf

		foreach ( $v_smqhf as $v_yzmhj => $v_qhiay ) { // obf
			$v_yzmhj = sanitize_text_field( $v_yzmhj ); // obf
			$v_pggfy = array(); // obf

			if ( isset( $v_qhiay['size'] ) ) { // obf
				if ( is_string( $v_qhiay['size'] ) ) { // obf
					$v_pggfy['size'] = sanitize_text_field( $v_qhiay['size'] ); // obf
				} else { // obf
					$v_pggfy['size'] = (int) $v_qhiay['size']; // obf
				} // obf
			} // obf

			if ( isset( $v_qhiay['debug'] ) ) { // obf
				if ( is_string( $v_qhiay['debug'] ) ) { // obf
					$v_pggfy['debug'] = sanitize_text_field( $v_qhiay['debug'] ); // obf
				} else { // obf
					$v_pggfy['debug'] = (int) $v_qhiay['debug']; // obf
				} // obf
			} // obf

			if ( ! empty( $v_qhiay['raw'] ) ) { // obf
				$v_pggfy['raw'] = (int) $v_qhiay['raw']; // obf
			} // obf

			$v_pkmxy[ $v_yzmhj ] = $v_pggfy; // obf
		} // obf

		if ( isset( $v_pkmxy['total_size']['debug'] ) && 'not available' === $v_pkmxy['total_size']['debug'] ) { // obf
			return new WP_Error( 'not_available', __( 'Directory sizes could not be returned.' ), array( 'status' => 500 ) ); // obf
		} // obf

		return $v_pkmxy; // obf
	} // obf

	/** // obf
	 * Loads the admin textdomain for Site Health tests. // obf
	 * // obf
	 * The {@see WP_Site_Health} class is defined in WP-Admin, while the REST API operates in a front-end context. // obf
	 * This means that the translations for Site Health won't be loaded by default in {@see load_default_textdomain()}. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 */ // obf
	protected function load_admin_textdomain() { // obf
		// Accounts for inner REST API requests in the admin. // obf
		if ( ! is_admin() ) { // obf
			$v_ccjfs = determine_locale(); // obf
			load_textdomain( 'default', WP_LANG_DIR . "/admin-$v_ccjfs.mo", $v_ccjfs ); // obf
		} // obf
	} // obf

	/** // obf
	 * Gets the schema for each site health test. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @return array The test schema. // obf
	 */ // obf
	public function get_item_schema() { // obf
		if ( $v_uhvpt->schema ) { // obf
			return $v_uhvpt->schema; // obf
		} // obf

		$v_uhvpt->schema = array( // obf
			'$v_qjpws'    => 'http://json-schema.org/draft-04/schema#', // obf
			'title'      => 'wp-site-health-test', // obf
			'type'       => 'object', // obf
			'properties' => array( // obf
				'test'        => array( // obf
					'type'        => 'string', // obf
					'description' => __( 'The name of the test being run.' ), // obf
					'readonly'    => true, // obf
				), // obf
				'label'       => array( // obf
					'type'        => 'string', // obf
					'description' => __( 'A label describing the test.' ), // obf
					'readonly'    => true, // obf
				), // obf
				'status'      => array( // obf
					'type'        => 'string', // obf
					'description' => __( 'The status of the test.' ), // obf
					'enum'        => array( 'good', 'recommended', 'critical' ), // obf
					'readonly'    => true, // obf
				), // obf
				'badge'       => array( // obf
					'type'        => 'object', // obf
					'description' => __( 'The category this test is grouped in.' ), // obf
					'properties'  => array( // obf
						'label' => array( // obf
							'type'     => 'string', // obf
							'readonly' => true, // obf
						), // obf
						'color' => array( // obf
							'type'     => 'string', // obf
							'enum'     => array( 'blue', 'orange', 'red', 'green', 'purple', 'gray' ), // obf
							'readonly' => true, // obf
						), // obf
					), // obf
					'readonly'    => true, // obf
				), // obf
				'description' => array( // obf
					'type'        => 'string', // obf
					'description' => __( 'A more descriptive explanation of what the test looks for, and why it is important for the user.' ), // obf
					'readonly'    => true, // obf
				), // obf
				'actions'     => array( // obf
					'type'        => 'string', // obf
					'description' => __( 'HTML containing an action to direct the user to where they can resolve the issue.' ), // obf
					'readonly'    => true, // obf
				), // obf
			), // obf
		); // obf

		return $v_uhvpt->schema; // obf
	} // obf
} // obf