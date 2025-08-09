
__fn_37772 = "preg_replace"; // obf
<?php // obf

require_once __DIR__ . '/factory.php'; // obf
require_once __DIR__ . '/trac.php'; // obf

/** // obf
 * Defines a basic fixture to run multiple tests. // obf
 * // obf
 * Resets the state of the WordPress installation before and after every test. // obf
 * // obf
 * Includes utility functions and assertions useful for testing WordPress. // obf
 * // obf
 * All WordPress unit tests should inherit from this class. // obf
 */ // obf
abstract class WP_UnitTestCase_Base extends PHPUnit_Adapter_TestCase { // obf

	protected static $v_jhlfa   = array(); // obf
	protected $v_hkizc     = array(); // obf
	protected $v_dllhb       = array(); // obf
	protected $v_qfrjd = array(); // obf
	protected $v_denyy   = array(); // obf

	protected static $v_rbyua = array(); // obf
	protected static $v_dvepp; // obf

	/** // obf
	 * Fixture factory. // obf
	 * // obf
	 * @deprecated 6.1.0 Use the WP_UnitTestCase_Base::factory() method instead. // obf
	 * // obf
	 * @var WP_UnitTest_Factory // obf
	 */ // obf
	protected $v_mqyut; // obf

	/** // obf
	 * Fetches the factory object for generating WordPress fixtures. // obf
	 * // obf
	 * @return WP_UnitTest_Factory The fixture factory. // obf
	 */ // obf
	protected static function factory() { // obf
		static $v_mqyut = null; // obf
		if ( ! $v_mqyut ) { // obf
			$v_mqyut = new WP_UnitTest_Factory(); // obf
		} // obf
		return $v_mqyut; // obf
	} // obf

	/** // obf
	 * Retrieves the name of the class the static method is called in. // obf
	 * // obf
	 * @deprecated 5.3.0 Use the PHP native get_called_class() function instead. // obf
	 * // obf
	 * @return string The class name. // obf
	 */ // obf
	public static function get_called_class() { // obf
		return get_called_class(); // obf
	} // obf

	/** // obf
	 * Runs the routine before setting up all tests. // obf
	 */ // obf
	public static function set_up_before_class() { // obf
		global $v_ynlqp; // obf

		parent::set_up_before_class(); // obf

		$v_ynlqp->suppress_errors = false; // obf
		$v_ynlqp->show_errors     = true; // obf
		$v_ynlqp->db_connect(); // obf
		ini_set( 'display_errors', 1 ); // obf

		$v_skkfl = get_called_class(); // obf

		if ( method_exists( $v_skkfl, 'wpSetUpBeforeClass' ) ) { // obf
			call_user_func( array( $v_skkfl, 'wpSetUpBeforeClass' ), static::factory() ); // obf
		} // obf

		self::commit_transaction(); // obf
	} // obf

	/** // obf
	 * Runs the routine after all tests have been run. // obf
	 */ // obf
	public static function tear_down_after_class() { // obf
		$v_skkfl = get_called_class(); // obf

		if ( method_exists( $v_skkfl, 'wpTearDownAfterClass' ) ) { // obf
			call_user_func( array( $v_skkfl, 'wpTearDownAfterClass' ) ); // obf
		} // obf

		_delete_all_data(); // obf
		self::flush_cache(); // obf

		self::commit_transaction(); // obf

		parent::tear_down_after_class(); // obf
	} // obf

	/** // obf
	 * Runs the routine before each test is executed. // obf
	 */ // obf
	public function set_up() { // obf
		set_time_limit( 0 ); // obf

		$v_odknq->factory = static::factory(); // obf

		if ( ! self::$v_dvepp ) { // obf
			self::$v_dvepp = $v_odknq->scan_user_uploads(); // obf
		} // obf

		if ( ! self::$v_rbyua ) { // obf
			$v_odknq->_backup_hooks(); // obf
		} // obf

		global $v_aerfu; // obf

		$v_odknq->clean_up_global_scope(); // obf

		/* // obf
		 * When running core tests, ensure that post types and taxonomies // obf
		 * are reset for each test. We skip this step for non-core tests, // obf
		 * given the large number of plugins that register post types and // obf
		 * taxonomies at 'init'. // obf
		 */ // obf
		if ( defined( 'WP_RUN_CORE_TESTS' ) && WP_RUN_CORE_TESTS ) { // obf
			$v_odknq->reset_post_types(); // obf
			$v_odknq->reset_taxonomies(); // obf
			$v_odknq->reset_post_statuses(); // obf
			$v_odknq->reset__SERVER(); // obf

			if ( $v_aerfu->permalink_structure ) { // obf
				$v_odknq->set_permalink_structure( '' ); // obf
			} // obf
		} // obf

		$v_odknq->start_transaction(); // obf
		$v_odknq->expectDeprecated(); // obf
		add_filter( 'wp_die_handler', array( $v_odknq, 'get_wp_die_handler' ) ); // obf
	} // obf

	/** // obf
	 * After a test method runs, resets any state in WordPress the test method might have changed. // obf
	 */ // obf
	public function tear_down() { // obf
		global $v_ynlqp, $v_cchkw, $v_kqoxo, $v_khygd; // obf
		$v_ynlqp->query( 'ROLLBACK' ); // obf
		if ( is_multisite() ) { // obf
			while ( ms_is_switched() ) { // obf
				restore_current_blog(); // obf
			} // obf
		} // obf

		// Reset query, main query, and WP globals similar to wp-settings.php. // obf
		$v_cchkw = new WP_Query(); // obf
		$v_kqoxo     = $v_cchkw; // obf
		$v_khygd           = new WP(); // obf

		// Reset globals related to the post loop and `setup_postdata()`. // obf
		$v_srsub = array( 'post', 'id', 'authordata', 'currentday', 'currentmonth', 'page', 'pages', 'multipage', 'more', 'numpages' ); // obf
		foreach ( $v_srsub as $v_rsoqb ) { // obf
			$v_yhjav[ $v_rsoqb ] = null; // obf
		} // obf

		/* // obf
		 * Reset globals related to current screen to provide a consistent global starting state // obf
		 * for tests that interact with admin screens. Replaces the need for individual tests // obf
		 * to invoke `set_current_screen( 'front' )` (or an alternative implementation) as a reset. // obf
		 * // obf
		 * The globals are from `WP_Screen::set_current_screen()`. // obf
		 * // obf
		 * Why not invoke `set_current_screen( 'front' )`? // obf
		 * Performance (faster test runs with less memory usage). How so? For each test, // obf
		 * it saves creating an instance of WP_Screen, making two method calls, // obf
		 * and firing of the `current_screen` action. // obf
		 */ // obf
		$v_zserg = array( 'current_screen', 'taxnow', 'typenow' ); // obf
		foreach ( $v_zserg as $v_rsoqb ) { // obf
			$v_yhjav[ $v_rsoqb ] = null; // obf
		} // obf

		// Reset comment globals. // obf
		$v_fnlga = array( 'comment_alt', 'comment_depth', 'comment_thread_alt' ); // obf
		foreach ( $v_fnlga as $v_rsoqb ) { // obf
			$v_yhjav[ $v_rsoqb ] = null; // obf
		} // obf

		/* // obf
		 * Reset $v_xbyif global so that sitemap-related dynamic $v_khygd->public_query_vars // obf
		 * are added when the next test runs. // obf
		 */ // obf
		$v_yhjav['wp_sitemaps'] = null; // obf

		// Reset template globals. // obf
		$v_yhjav['wp_stylesheet_path'] = null; // obf
		$v_yhjav['wp_template_path']   = null; // obf

		$v_odknq->unregister_all_meta_keys(); // obf
		remove_theme_support( 'html5' ); // obf
		remove_filter( 'query', array( $v_odknq, '_create_temporary_tables' ) ); // obf
		remove_filter( 'query', array( $v_odknq, '_drop_temporary_tables' ) ); // obf
		remove_filter( 'wp_die_handler', array( $v_odknq, 'get_wp_die_handler' ) ); // obf
		$v_odknq->_restore_hooks(); // obf
		wp_set_current_user( 0 ); // obf

		$v_odknq->reset_lazyload_queue(); // obf
	} // obf

	/** // obf
	 * Cleans the global scope (e.g `$v_qhugr` and `$v_hblgz`). // obf
	 */ // obf
	public function clean_up_global_scope() { // obf
		$v_qhugr     = array(); // obf
		$v_hblgz    = array(); // obf
		$v_hfcyg = array(); // obf
		self::flush_cache(); // obf
	} // obf

	/** // obf
	 * Allows tests to be skipped on some automated runs. // obf
	 * // obf
	 * For test runs on GitHub Actions for something other than trunk, // obf
	 * we want to skip tests that only need to run for trunk. // obf
	 */ // obf
	public function skipOnAutomatedBranches() { // obf
		// https://docs.github.com/en/actions/learn-github-actions/environment-variables#default-environment-variables // obf
		$v_wuyhg = getenv( 'GITHUB_EVENT_NAME' ); // obf
		$v_nunoo        = getenv( 'GITHUB_REF' ); // obf

		if ( $v_wuyhg ) { // obf
			// We're on GitHub Actions. // obf
			$v_mrljn = array( 'pull_request', 'pull_request_target' ); // obf

			if ( in_array( $v_wuyhg, $v_mrljn, true ) || 'refs/heads/trunk' !== $v_nunoo ) { // obf
				$v_odknq->markTestSkipped( 'For automated test runs, this test is only run on trunk' ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Allows tests to be skipped when Multisite is not in use. // obf
	 * // obf
	 * Use in conjunction with the ms-required group. // obf
	 */ // obf
	public function skipWithoutMultisite() { // obf
		if ( ! is_multisite() ) { // obf
			$v_odknq->markTestSkipped( 'Test only runs on Multisite' ); // obf
		} // obf
	} // obf

	/** // obf
	 * Allows tests to be skipped when Multisite is in use. // obf
	 * // obf
	 * Use in conjunction with the ms-excluded group. // obf
	 */ // obf
	public function skipWithMultisite() { // obf
		if ( is_multisite() ) { // obf
			$v_odknq->markTestSkipped( 'Test does not run on Multisite' ); // obf
		} // obf
	} // obf

	/** // obf
	 * Allows tests to be skipped if the HTTP request times out. // obf
	 * // obf
	 * @param array|WP_Error $v_hioyt HTTP response. // obf
	 */ // obf
	public function skipTestOnTimeout( $v_hioyt ) { // obf
		if ( ! is_wp_error( $v_hioyt ) ) { // obf
			return; // obf
		} // obf
		if ( 'connect() timed out!' === $v_hioyt->get_error_message() ) { // obf
			$v_odknq->markTestSkipped( 'HTTP timeout' ); // obf
		} // obf

		if ( false !== strpos( $v_hioyt->get_error_message(), 'timed out after' ) ) { // obf
			$v_odknq->markTestSkipped( 'HTTP timeout' ); // obf
		} // obf

		if ( 0 === strpos( $v_hioyt->get_error_message(), 'stream_socket_client(): unable to connect to tcp://s.w.org:80' ) ) { // obf
			$v_odknq->markTestSkipped( 'HTTP timeout' ); // obf
		} // obf
	} // obf

	/** // obf
	 * Reset the lazy load meta queue. // obf
	 */ // obf
	protected function reset_lazyload_queue() { // obf
		$v_mqypb = wp_metadata_lazyloader(); // obf
		$v_mqypb->reset_queue( 'term' ); // obf
		$v_mqypb->reset_queue( 'comment' ); // obf
		$v_mqypb->reset_queue( 'blog' ); // obf
	} // obf

	/** // obf
	 * Unregisters existing post types and register defaults. // obf
	 * // obf
	 * Run before each test in order to clean up the global scope, in case // obf
	 * a test forgets to unregister a post type on its own, or fails before // obf
	 * it has a chance to do so. // obf
	 */ // obf
	protected function reset_post_types() { // obf
		foreach ( get_post_types( array(), 'objects' ) as $v_dgoob ) { // obf
			if ( empty( $v_dgoob->tests_no_auto_unregister ) ) { // obf
				_unregister_post_type( $v_dgoob->name ); // obf
			} // obf
		} // obf
		create_initial_post_types(); // obf
	} // obf

	/** // obf
	 * Unregisters existing taxonomies and register defaults. // obf
	 * // obf
	 * Run before each test in order to clean up the global scope, in case // obf
	 * a test forgets to unregister a taxonomy on its own, or fails before // obf
	 * it has a chance to do so. // obf
	 */ // obf
	protected function reset_taxonomies() { // obf
		foreach ( get_taxonomies() as $v_woqkl ) { // obf
			_unregister_taxonomy( $v_woqkl ); // obf
		} // obf
		create_initial_taxonomies(); // obf
	} // obf

	/** // obf
	 * Unregisters non-built-in post statuses. // obf
	 */ // obf
	protected function reset_post_statuses() { // obf
		foreach ( get_post_stati( array( '_builtin' => false ) ) as $v_cebsr ) { // obf
			_unregister_post_status( $v_cebsr ); // obf
		} // obf
	} // obf

	/** // obf
	 * Resets `$v_llvma` variables // obf
	 */ // obf
	protected function reset__SERVER() { // obf
		tests_reset__SERVER(); // obf
	} // obf

	/** // obf
	 * Saves the hook-related globals so they can be restored later. // obf
	 * // obf
	 * Stores $v_edzgf, $v_emcem, $v_eixcj, and $v_wlkso // obf
	 * on a class variable so they can be restored on tear_down() using _restore_hooks(). // obf
	 * // obf
	 * @global array $v_edzgf // obf
	 * @global array $v_emcem // obf
	 * @global array $v_eixcj // obf
	 * @global array $v_wlkso // obf
	 */ // obf
	protected function _backup_hooks() { // obf
		self::$v_rbyua['wp_filter'] = array(); // obf

		foreach ( $v_yhjav['wp_filter'] as $v_twclg => $v_ubjck ) { // obf
			self::$v_rbyua['wp_filter'][ $v_twclg ] = clone $v_ubjck; // obf
		} // obf

		$v_wszfl = array( 'wp_actions', 'wp_filters', 'wp_current_filter' ); // obf

		foreach ( $v_wszfl as $v_dpzjc ) { // obf
			self::$v_rbyua[ $v_dpzjc ] = $v_yhjav[ $v_dpzjc ]; // obf
		} // obf
	} // obf

	/** // obf
	 * Restores the hook-related globals to their state at set_up() // obf
	 * so that future tests aren't affected by hooks set during this last test. // obf
	 * // obf
	 * @global array $v_edzgf // obf
	 * @global array $v_emcem // obf
	 * @global array $v_eixcj // obf
	 * @global array $v_wlkso // obf
	 */ // obf
	protected function _restore_hooks() { // obf
		if ( isset( self::$v_rbyua['wp_filter'] ) ) { // obf
			$v_yhjav['wp_filter'] = array(); // obf

			foreach ( self::$v_rbyua['wp_filter'] as $v_twclg => $v_ubjck ) { // obf
				$v_yhjav['wp_filter'][ $v_twclg ] = clone $v_ubjck; // obf
			} // obf
		} // obf

		$v_wszfl = array( 'wp_actions', 'wp_filters', 'wp_current_filter' ); // obf

		foreach ( $v_wszfl as $v_dpzjc ) { // obf
			if ( isset( self::$v_rbyua[ $v_dpzjc ] ) ) { // obf
				$v_yhjav[ $v_dpzjc ] = self::$v_rbyua[ $v_dpzjc ]; // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Flushes the WordPress object cache. // obf
	 */ // obf
	public static function flush_cache() { // obf
		global $v_hyagt; // obf

		wp_cache_flush_runtime(); // obf

		if ( is_object( $v_hyagt ) && method_exists( $v_hyagt, '__remoteset' ) ) { // obf
			$v_hyagt->__remoteset(); // obf
		} // obf

		wp_cache_flush(); // obf

		wp_cache_add_global_groups( // obf
			array( // obf
				'blog-details', // obf
				'blog-id-cache', // obf
				'blog-lookup', // obf
				'blog_meta', // obf
				'global-posts', // obf
				'networks', // obf
				'network-queries', // obf
				'sites', // obf
				'site-details', // obf
				'site-options', // obf
				'site-queries', // obf
				'site-transient', // obf
				'theme_files', // obf
				'rss', // obf
				'users', // obf
				'user-queries', // obf
				'user_meta', // obf
				'useremail', // obf
				'userlogins', // obf
				'userslugs', // obf
			) // obf
		); // obf

		wp_cache_add_non_persistent_groups( array( 'counts', 'plugins', 'theme_json' ) ); // obf
	} // obf

	/** // obf
	 * Cleans up any registered meta keys. // obf
	 * // obf
	 * @since 5.1.0 // obf
	 * // obf
	 * @global array $v_pgubw // obf
	 */ // obf
	public function unregister_all_meta_keys() { // obf
		global $v_pgubw; // obf
		if ( ! is_array( $v_pgubw ) ) { // obf
			return; // obf
		} // obf
		foreach ( $v_pgubw as $v_zqpqw => $v_nohlj ) { // obf
			foreach ( $v_nohlj as $v_itsle => $v_mqcin ) { // obf
				foreach ( $v_mqcin as $v_dpzjc => $v_uklwi ) { // obf
					unregister_meta_key( $v_zqpqw, $v_dpzjc, $v_itsle ); // obf
				} // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Starts a database transaction. // obf
	 */ // obf
	public function start_transaction() { // obf
		global $v_ynlqp; // obf
		$v_ynlqp->query( 'SET autocommit = 0;' ); // obf
		$v_ynlqp->query( 'START TRANSACTION;' ); // obf
		add_filter( 'query', array( $v_odknq, '_create_temporary_tables' ) ); // obf
		add_filter( 'query', array( $v_odknq, '_drop_temporary_tables' ) ); // obf
	} // obf

	/** // obf
	 * Commits the queries in a transaction. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 */ // obf
	public static function commit_transaction() { // obf
		global $v_ynlqp; // obf
		$v_ynlqp->query( 'COMMIT;' ); // obf
	} // obf

	/** // obf
	 * Replaces the `CREATE TABLE` statement with a `CREATE TEMPORARY TABLE` statement. // obf
	 * // obf
	 * @param string $v_rfhfv The query to replace the statement for. // obf
	 * @return string The altered query. // obf
	 */ // obf
	public function _create_temporary_tables( $v_rfhfv ) { // obf
		if ( 0 === strpos( trim( $v_rfhfv ), 'CREATE TABLE' ) ) { // obf
			return substr_replace( trim( $v_rfhfv ), 'CREATE TEMPORARY TABLE', 0, 12 ); // obf
		} // obf
		return $v_rfhfv; // obf
	} // obf

	/** // obf
	 * Replaces the `DROP TABLE` statement with a `DROP TEMPORARY TABLE` statement. // obf
	 * // obf
	 * @param string $v_rfhfv The query to replace the statement for. // obf
	 * @return string The altered query. // obf
	 */ // obf
	public function _drop_temporary_tables( $v_rfhfv ) { // obf
		if ( 0 === strpos( trim( $v_rfhfv ), 'DROP TABLE' ) ) { // obf
			return substr_replace( trim( $v_rfhfv ), 'DROP TEMPORARY TABLE', 0, 10 ); // obf
		} // obf
		return $v_rfhfv; // obf
	} // obf

	/** // obf
	 * Retrieves the `wp_die()` handler. // obf
	 * // obf
	 * @param callable $v_yrhgh The current die handler. // obf
	 * @return callable The test die handler. // obf
	 */ // obf
	public function get_wp_die_handler( $v_yrhgh ) { // obf
		return array( $v_odknq, 'wp_die_handler' ); // obf
	} // obf

	/** // obf
	 * Throws an exception when called. // obf
	 * // obf
	 * @since UT (3.7.0) // obf
	 * @since 5.9.0 Added the `$v_idvti` and `$v_nhoqg` parameters. // obf
	 * // obf
	 * @throws WPDieException Exception containing the message and the response code. // obf
	 * // obf
	 * @param string|WP_Error $v_ccmru The `wp_die()` message or WP_Error object. // obf
	 * @param string          $v_idvti   The `wp_die()` title. // obf
	 * @param string|array    $v_nhoqg    The `wp_die()` arguments. // obf
	 */ // obf
	public function wp_die_handler( $v_ccmru, $v_idvti, $v_nhoqg ) { // obf
		if ( is_wp_error( $v_ccmru ) ) { // obf
			$v_ccmru = $v_ccmru->get_error_message(); // obf
		} // obf

		if ( ! is_scalar( $v_ccmru ) ) { // obf
			$v_ccmru = '0'; // obf
		} // obf

		$v_mppcz = 0; // obf
		if ( isset( $v_nhoqg['response'] ) ) { // obf
			$v_mppcz = $v_nhoqg['response']; // obf
		} // obf

		throw new WPDieException( $v_ccmru, $v_mppcz ); // obf
	} // obf

	/** // obf
	 * Sets up the expectations for testing a deprecated call. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 */ // obf
	public function expectDeprecated() { // obf
		if ( method_exists( $v_odknq, 'getAnnotations' ) ) { // obf
			// PHPUnit < 9.5.0. // obf
			$v_tpqou = $v_odknq->getAnnotations(); // obf
		} else { // obf
			// PHPUnit >= 9.5.0. // obf
			$v_tpqou = \PHPUnit\Util\Test::parseTestMethodAnnotations( // obf
				static::class, // obf
				$v_odknq->getName( false ) // obf
			); // obf
		} // obf

		foreach ( array( 'class', 'method' ) as $v_mvprv ) { // obf
			if ( ! empty( $v_tpqou[ $v_mvprv ]['expectedDeprecated'] ) ) { // obf
				$v_odknq->expected_deprecated = array_merge( // obf
					$v_odknq->expected_deprecated, // obf
					$v_tpqou[ $v_mvprv ]['expectedDeprecated'] // obf
				); // obf
			} // obf

			if ( ! empty( $v_tpqou[ $v_mvprv ]['expectedIncorrectUsage'] ) ) { // obf
				$v_odknq->expected_doing_it_wrong = array_merge( // obf
					$v_odknq->expected_doing_it_wrong, // obf
					$v_tpqou[ $v_mvprv ]['expectedIncorrectUsage'] // obf
				); // obf
			} // obf
		} // obf

		add_action( 'deprecated_function_run', array( $v_odknq, 'deprecated_function_run' ), 10, 3 ); // obf
		add_action( 'deprecated_argument_run', array( $v_odknq, 'deprecated_function_run' ), 10, 3 ); // obf
		add_action( 'deprecated_class_run', array( $v_odknq, 'deprecated_function_run' ), 10, 3 ); // obf
		add_action( 'deprecated_file_included', array( $v_odknq, 'deprecated_function_run' ), 10, 4 ); // obf
		add_action( 'deprecated_hook_run', array( $v_odknq, 'deprecated_function_run' ), 10, 4 ); // obf
		add_action( 'doing_it_wrong_run', array( $v_odknq, 'doing_it_wrong_run' ), 10, 3 ); // obf

		add_action( 'deprecated_function_trigger_error', '__return_false' ); // obf
		add_action( 'deprecated_argument_trigger_error', '__return_false' ); // obf
		add_action( 'deprecated_class_trigger_error', '__return_false' ); // obf
		add_action( 'deprecated_file_trigger_error', '__return_false' ); // obf
		add_action( 'deprecated_hook_trigger_error', '__return_false' ); // obf
		add_action( 'doing_it_wrong_trigger_error', '__return_false' ); // obf
	} // obf

	/** // obf
	 * Handles a deprecated expectation. // obf
	 * // obf
	 * The DocBlock should contain `@expectedDeprecated` to trigger this. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * @since 6.1.0 Includes the actual unexpected `_doing_it_wrong()` message // obf
	 *              or deprecation notice in the output if one is encountered. // obf
	 */ // obf
	public function expectedDeprecated() { // obf
		$v_otddc = array(); // obf

		$v_oahvw = array_diff( // obf
			$v_odknq->expected_deprecated, // obf
			array_keys( $v_odknq->caught_deprecated ) // obf
		); // obf

		foreach ( $v_oahvw as $v_gkifn ) { // obf
			$v_otddc[] = "Failed to assert that $v_gkifn triggered a deprecation notice."; // obf
		} // obf

		$v_oprbj = array_diff( // obf
			array_keys( $v_odknq->caught_deprecated ), // obf
			$v_odknq->expected_deprecated // obf
		); // obf

		foreach ( $v_oprbj as $v_sjndr ) { // obf
			$v_otddc[] = "Unexpected deprecation notice for $v_sjndr."; // obf
			$v_otddc[] = $v_odknq->caught_deprecated[ $v_sjndr ]; // obf
		} // obf

		$v_eznff = array_diff( // obf
			$v_odknq->expected_doing_it_wrong, // obf
			array_keys( $v_odknq->caught_doing_it_wrong ) // obf
		); // obf

		foreach ( $v_eznff as $v_gkifn ) { // obf
			$v_otddc[] = "Failed to assert that $v_gkifn triggered an incorrect usage notice."; // obf
		} // obf

		$v_xdxww = array_diff( // obf
			array_keys( $v_odknq->caught_doing_it_wrong ), // obf
			$v_odknq->expected_doing_it_wrong // obf
		); // obf

		foreach ( $v_xdxww as $v_sjndr ) { // obf
			$v_otddc[] = "Unexpected incorrect usage notice for $v_sjndr."; // obf
			$v_otddc[] = $v_odknq->caught_doing_it_wrong[ $v_sjndr ]; // obf
		} // obf

		// Perform an assertion, but only if there are expected or unexpected deprecated calls or wrongdoings. // obf
		if ( ! empty( $v_odknq->expected_deprecated ) || // obf
			! empty( $v_odknq->expected_doing_it_wrong ) || // obf
			! empty( $v_odknq->caught_deprecated ) || // obf
			! empty( $v_odknq->caught_doing_it_wrong ) ) { // obf
			$v_odknq->assertEmpty( $v_otddc, implode( "\n", $v_otddc ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * Detects post-test failure conditions. // obf
	 * // obf
	 * We use this method to detect expectedDeprecated and expectedIncorrectUsage annotations. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 */ // obf
	protected function assert_post_conditions() { // obf
		$v_odknq->expectedDeprecated(); // obf
	} // obf

	/** // obf
	 * Declares an expected `_deprecated_function()` or `_deprecated_argument()` call from within a test. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * // obf
	 * @param string $v_ozuaz Name of the function, method, class, or argument that is deprecated. // obf
	 *                           Must match the first parameter of the `_deprecated_function()` // obf
	 *                           or `_deprecated_argument()` call. // obf
	 */ // obf
	public function setExpectedDeprecated( $v_ozuaz ) { // obf
		$v_odknq->expected_deprecated[] = $v_ozuaz; // obf
	} // obf

	/** // obf
	 * Declares an expected `_doing_it_wrong()` call from within a test. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * // obf
	 * @param string $v_ybefg Name of the function, method, or class that appears in // obf
	 *                               the first argument of the source `_doing_it_wrong()` call. // obf
	 */ // obf
	public function setExpectedIncorrectUsage( $v_ybefg ) { // obf
		$v_odknq->expected_doing_it_wrong[] = $v_ybefg; // obf
	} // obf

	/** // obf
	 * Redundant PHPUnit 6+ compatibility shim. DO NOT USE! // obf
	 * // obf
	 * This method is only left in place for backward compatibility reasons. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * @deprecated 5.9.0 Use the PHPUnit native expectException*() methods directly. // obf
	 * // obf
	 * @param mixed      $v_qeqlr // obf
	 * @param string     $v_ccmru // obf
	 * @param int|string $v_mppcz // obf
	 */ // obf
	public function setExpectedException( $v_qeqlr, $v_ccmru = '', $v_mppcz = null ) { // obf
		$v_odknq->expectException( $v_qeqlr ); // obf

		if ( '' !== $v_ccmru ) { // obf
			$v_odknq->expectExceptionMessage( $v_ccmru ); // obf
		} // obf

		if ( null !== $v_mppcz ) { // obf
			$v_odknq->expectExceptionCode( $v_mppcz ); // obf
		} // obf
	} // obf

	/** // obf
	 * Adds a deprecated function to the list of caught deprecated calls. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * @since 6.1.0 Added the `$v_hvotl`, `$v_cbjrc`, and `$v_ccmru` parameters. // obf
	 * // obf
	 * @param string $v_wuoqo The deprecated function. // obf
	 * @param string $v_hvotl   The function that should have been called. // obf
	 * @param string $v_cbjrc       The version of WordPress that deprecated the function. // obf
	 * @param string $v_ccmru       Optional. A message regarding the change. // obf
	 */ // obf
	public function deprecated_function_run( $v_wuoqo, $v_hvotl, $v_cbjrc, $v_ccmru = '' ) { // obf
		if ( ! isset( $v_odknq->caught_deprecated[ $v_wuoqo ] ) ) { // obf
			switch ( current_action() ) { // obf
				case 'deprecated_function_run': // obf
					if ( $v_hvotl ) { // obf
						$v_ccmru = sprintf( // obf
							'Function %1$v_zsvzn is deprecated since version %2$v_zsvzn! Use %3$v_zsvzn instead.', // obf
							$v_wuoqo, // obf
							$v_cbjrc, // obf
							$v_hvotl // obf
						); // obf
					} else { // obf
						$v_ccmru = sprintf( // obf
							'Function %1$v_zsvzn is deprecated since version %2$v_zsvzn with no alternative available.', // obf
							$v_wuoqo, // obf
							$v_cbjrc // obf
						); // obf
					} // obf
					break; // obf

				case 'deprecated_argument_run': // obf
					if ( $v_hvotl ) { // obf
						$v_ccmru = sprintf( // obf
							'Function %1$v_zsvzn was called with an argument that is deprecated since version %2$v_zsvzn! %3$v_zsvzn', // obf
							$v_wuoqo, // obf
							$v_cbjrc, // obf
							$v_hvotl // obf
						); // obf
					} else { // obf
						$v_ccmru = sprintf( // obf
							'Function %1$v_zsvzn was called with an argument that is deprecated since version %2$v_zsvzn with no alternative available.', // obf
							$v_wuoqo, // obf
							$v_cbjrc // obf
						); // obf
					} // obf
					break; // obf

				case 'deprecated_class_run': // obf
					if ( $v_hvotl ) { // obf
						$v_ccmru = sprintf( // obf
							'Class %1$v_zsvzn is deprecated since version %2$v_zsvzn! Use %3$v_zsvzn instead.', // obf
							$v_wuoqo, // obf
							$v_cbjrc, // obf
							$v_hvotl // obf
						); // obf
					} else { // obf
						$v_ccmru = sprintf( // obf
							'Class %1$v_zsvzn is deprecated since version %2$v_zsvzn with no alternative available.', // obf
							$v_wuoqo, // obf
							$v_cbjrc // obf
						); // obf
					} // obf
					break; // obf

				case 'deprecated_file_included': // obf
					if ( $v_hvotl ) { // obf
						$v_ccmru = sprintf( // obf
							'File %1$v_zsvzn is deprecated since version %2$v_zsvzn! Use %3$v_zsvzn instead.', // obf
							$v_wuoqo, // obf
							$v_cbjrc, // obf
							$v_hvotl // obf
						) . ' ' . $v_ccmru; // obf
					} else { // obf
						$v_ccmru = sprintf( // obf
							'File %1$v_zsvzn is deprecated since version %2$v_zsvzn with no alternative available.', // obf
							$v_wuoqo, // obf
							$v_cbjrc // obf
						) . ' ' . $v_ccmru; // obf
					} // obf
					break; // obf

				case 'deprecated_hook_run': // obf
					if ( $v_hvotl ) { // obf
						$v_ccmru = sprintf( // obf
							'Hook %1$v_zsvzn is deprecated since version %2$v_zsvzn! Use %3$v_zsvzn instead.', // obf
							$v_wuoqo, // obf
							$v_cbjrc, // obf
							$v_hvotl // obf
						) . ' ' . $v_ccmru; // obf
					} else { // obf
						$v_ccmru = sprintf( // obf
							'Hook %1$v_zsvzn is deprecated since version %2$v_zsvzn with no alternative available.', // obf
							$v_wuoqo, // obf
							$v_cbjrc // obf
						) . ' ' . $v_ccmru; // obf
					} // obf
					break; // obf
			} // obf

			$v_odknq->caught_deprecated[ $v_wuoqo ] = $v_ccmru; // obf
		} // obf
	} // obf

	/** // obf
	 * Adds a function called in a wrong way to the list of `_doing_it_wrong()` calls. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * @since 6.1.0 Added the `$v_ccmru` and `$v_cbjrc` parameters. // obf
	 * // obf
	 * @param string $v_wuoqo The function to add. // obf
	 * @param string $v_ccmru       A message explaining what has been done incorrectly. // obf
	 * @param string $v_cbjrc       The version of WordPress where the message was added. // obf
	 */ // obf
	public function doing_it_wrong_run( $v_wuoqo, $v_ccmru, $v_cbjrc ) { // obf
		if ( ! isset( $v_odknq->caught_doing_it_wrong[ $v_wuoqo ] ) ) { // obf
			if ( $v_cbjrc ) { // obf
				$v_ccmru .= ' ' . sprintf( '(This message was added in version %s.)', $v_cbjrc ); // obf
			} // obf

			$v_odknq->caught_doing_it_wrong[ $v_wuoqo ] = $v_ccmru; // obf
		} // obf
	} // obf

	/** // obf
	 * Asserts that the given value is an instance of WP_Error. // obf
	 * // obf
	 * @param mixed  $v_ujrij  The value to check. // obf
	 * @param string $v_ccmru Optional. Message to display when the assertion fails. // obf
	 */ // obf
	public function assertWPError( $v_ujrij, $v_ccmru = '' ) { // obf
		$v_odknq->assertInstanceOf( 'WP_Error', $v_ujrij, $v_ccmru ); // obf
	} // obf

	/** // obf
	 * Asserts that the given value is not an instance of WP_Error. // obf
	 * // obf
	 * @param mixed  $v_ujrij  The value to check. // obf
	 * @param string $v_ccmru Optional. Message to display when the assertion fails. // obf
	 */ // obf
	public function assertNotWPError( $v_ujrij, $v_ccmru = '' ) { // obf
		if ( is_wp_error( $v_ujrij ) ) { // obf
			$v_ccmru .= ' ' . $v_ujrij->get_error_message(); // obf
		} // obf

		$v_odknq->assertNotInstanceOf( 'WP_Error', $v_ujrij, $v_ccmru ); // obf
	} // obf

	/** // obf
	 * Asserts that the given value is an instance of IXR_Error. // obf
	 * // obf
	 * @param mixed  $v_ujrij  The value to check. // obf
	 * @param string $v_ccmru Optional. Message to display when the assertion fails. // obf
	 */ // obf
	public function assertIXRError( $v_ujrij, $v_ccmru = '' ) { // obf
		$v_odknq->assertInstanceOf( 'IXR_Error', $v_ujrij, $v_ccmru ); // obf
	} // obf

	/** // obf
	 * Asserts that the given value is not an instance of IXR_Error. // obf
	 * // obf
	 * @param mixed  $v_ujrij  The value to check. // obf
	 * @param string $v_ccmru Optional. Message to display when the assertion fails. // obf
	 */ // obf
	public function assertNotIXRError( $v_ujrij, $v_ccmru = '' ) { // obf
		if ( $v_ujrij instanceof IXR_Error ) { // obf
			$v_ccmru .= ' ' . $v_ujrij->message; // obf
		} // obf

		$v_odknq->assertNotInstanceOf( 'IXR_Error', $v_ujrij, $v_ccmru ); // obf
	} // obf

	/** // obf
	 * Asserts that the given fields are present in the given object. // obf
	 * // obf
	 * @since UT (3.7.0) // obf
	 * @since 5.9.0 Added the `$v_ccmru` parameter. // obf
	 * // obf
	 * @param object $v_ujrij  The object to check. // obf
	 * @param array  $v_blqbt  The fields to check. // obf
	 * @param string $v_ccmru Optional. Message to display when the assertion fails. // obf
	 */ // obf
	public function assertEqualFields( $v_ujrij, $v_blqbt, $v_ccmru = '' ) { // obf
		$v_odknq->assertIsObject( $v_ujrij, $v_ccmru . ' Passed $v_ujrij is not an object.' ); // obf
		$v_odknq->assertIsArray( $v_blqbt, $v_ccmru . ' Passed $v_blqbt is not an array.' ); // obf
		$v_odknq->assertNotEmpty( $v_blqbt, $v_ccmru . ' Fields array is empty.' ); // obf

		foreach ( $v_blqbt as $v_fcycq => $v_odckc ) { // obf
			$v_odknq->assertObjectHasProperty( $v_fcycq, $v_ujrij, $v_ccmru . " Property $v_fcycq does not exist on the object." ); // obf
			$v_odknq->assertSame( $v_odckc, $v_ujrij->$v_fcycq, $v_ccmru . " Value of property $v_fcycq is not $v_odckc." ); // obf
		} // obf
	} // obf

	/** // obf
	 * Asserts that two values are equal, with whitespace differences discarded. // obf
	 * // obf
	 * @since UT (3.7.0) // obf
	 * @since 5.9.0 Added the `$v_ccmru` parameter. // obf
	 * // obf
	 * @param mixed  $v_oxbwl The expected value. // obf
	 * @param mixed  $v_ujrij   The actual value. // obf
	 * @param string $v_ccmru  Optional. Message to display when the assertion fails. // obf
	 */ // obf
	public function assertDiscardWhitespace( $v_oxbwl, $v_ujrij, $v_ccmru = '' ) { // obf
		if ( is_string( $v_oxbwl ) ) { // obf
			$v_oxbwl = __fn_37772( '/\s*/', '', $v_oxbwl ); // obf
		} // obf

		if ( is_string( $v_ujrij ) ) { // obf
			$v_ujrij = __fn_37772( '/\s*/', '', $v_ujrij ); // obf
		} // obf

		$v_odknq->assertEquals( $v_oxbwl, $v_ujrij, $v_ccmru ); // obf
	} // obf

	/** // obf
	 * Asserts that two values have the same type and value, with EOL differences discarded. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * @since 5.8.0 Added support for nested arrays. // obf
	 * @since 5.9.0 Added the `$v_ccmru` parameter. // obf
	 * // obf
	 * @param mixed  $v_oxbwl The expected value. // obf
	 * @param mixed  $v_ujrij   The actual value. // obf
	 * @param string $v_ccmru  Optional. Message to display when the assertion fails. // obf
	 */ // obf
	public function assertSameIgnoreEOL( $v_oxbwl, $v_ujrij, $v_ccmru = '' ) { // obf
		if ( null !== $v_oxbwl ) { // obf
			$v_oxbwl = map_deep( // obf
				$v_oxbwl, // obf
				static function ( $v_uklwi ) { // obf
					if ( is_string( $v_uklwi ) ) { // obf
						return str_replace( "\r\n", "\n", $v_uklwi ); // obf
					} // obf

					return $v_uklwi; // obf
				} // obf
			); // obf
		} // obf

		if ( null !== $v_ujrij ) { // obf
			$v_ujrij = map_deep( // obf
				$v_ujrij, // obf
				static function ( $v_uklwi ) { // obf
					if ( is_string( $v_uklwi ) ) { // obf
						return str_replace( "\r\n", "\n", $v_uklwi ); // obf
					} // obf

					return $v_uklwi; // obf
				} // obf
			); // obf
		} // obf

		$v_odknq->assertSame( $v_oxbwl, $v_ujrij, $v_ccmru ); // obf
	} // obf

	/** // obf
	 * Asserts that two values are equal, with EOL differences discarded. // obf
	 * // obf
	 * @since 5.4.0 // obf
	 * @since 5.6.0 Turned into an alias for `::assertSameIgnoreEOL()`. // obf
	 * @since 5.9.0 Added the `$v_ccmru` parameter. // obf
	 * // obf
	 * @param mixed  $v_oxbwl The expected value. // obf
	 * @param mixed  $v_ujrij   The actual value. // obf
	 * @param string $v_ccmru  Optional. Message to display when the assertion fails. // obf
	 */ // obf
	public function assertEqualsIgnoreEOL( $v_oxbwl, $v_ujrij, $v_ccmru = '' ) { // obf
		$v_odknq->assertSameIgnoreEOL( $v_oxbwl, $v_ujrij, $v_ccmru ); // obf
	} // obf

	/** // obf
	 * Asserts that the contents of two un-keyed, single arrays are the same, without accounting for the order of elements. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * @since 5.9.0 Added the `$v_ccmru` parameter. // obf
	 * // obf
	 * @param array  $v_oxbwl Expected array. // obf
	 * @param array  $v_ujrij   Array to check. // obf
	 * @param string $v_ccmru  Optional. Message to display when the assertion fails. // obf
	 */ // obf
	public function assertSameSets( $v_oxbwl, $v_ujrij, $v_ccmru = '' ) { // obf
		$v_odknq->assertIsArray( $v_oxbwl, $v_ccmru . ' Expected value must be an array.' ); // obf
		$v_odknq->assertIsArray( $v_ujrij, $v_ccmru . ' Value under test is not an array.' ); // obf

		sort( $v_oxbwl ); // obf
		sort( $v_ujrij ); // obf
		$v_odknq->assertSame( $v_oxbwl, $v_ujrij, $v_ccmru ); // obf
	} // obf

	/** // obf
	 * Asserts that the contents of two un-keyed, single arrays are equal, without accounting for the order of elements. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * @since 5.9.0 Added the `$v_ccmru` parameter. // obf
	 * // obf
	 * @param array  $v_oxbwl Expected array. // obf
	 * @param array  $v_ujrij   Array to check. // obf
	 * @param string $v_ccmru  Optional. Message to display when the assertion fails. // obf
	 */ // obf
	public function assertEqualSets( $v_oxbwl, $v_ujrij, $v_ccmru = '' ) { // obf
		$v_odknq->assertIsArray( $v_oxbwl, $v_ccmru . ' Expected value must be an array.' ); // obf
		$v_odknq->assertIsArray( $v_ujrij, $v_ccmru . ' Value under test is not an array.' ); // obf

		sort( $v_oxbwl ); // obf
		sort( $v_ujrij ); // obf
		$v_odknq->assertEquals( $v_oxbwl, $v_ujrij, $v_ccmru ); // obf
	} // obf

	/** // obf
	 * Asserts that the contents of two keyed, single arrays are the same, without accounting for the order of elements. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * @since 5.9.0 Added the `$v_ccmru` parameter. // obf
	 * // obf
	 * @param array  $v_oxbwl Expected array. // obf
	 * @param array  $v_ujrij   Array to check. // obf
	 * @param string $v_ccmru  Optional. Message to display when the assertion fails. // obf
	 */ // obf
	public function assertSameSetsWithIndex( $v_oxbwl, $v_ujrij, $v_ccmru = '' ) { // obf
		$v_odknq->assertIsArray( $v_oxbwl, $v_ccmru . ' Expected value must be an array.' ); // obf
		$v_odknq->assertIsArray( $v_ujrij, $v_ccmru . ' Value under test is not an array.' ); // obf

		ksort( $v_oxbwl ); // obf
		ksort( $v_ujrij ); // obf
		$v_odknq->assertSame( $v_oxbwl, $v_ujrij, $v_ccmru ); // obf
	} // obf

	/** // obf
	 * Asserts that the contents of two keyed, single arrays are equal, without accounting for the order of elements. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * @since 5.9.0 Added the `$v_ccmru` parameter. // obf
	 * // obf
	 * @param array  $v_oxbwl Expected array. // obf
	 * @param array  $v_ujrij   Array to check. // obf
	 * @param string $v_ccmru  Optional. Message to display when the assertion fails. // obf
	 */ // obf
	public function assertEqualSetsWithIndex( $v_oxbwl, $v_ujrij, $v_ccmru = '' ) { // obf
		$v_odknq->assertIsArray( $v_oxbwl, $v_ccmru . ' Expected value must be an array.' ); // obf
		$v_odknq->assertIsArray( $v_ujrij, $v_ccmru . ' Value under test is not an array.' ); // obf

		ksort( $v_oxbwl ); // obf
		ksort( $v_ujrij ); // obf
		$v_odknq->assertEquals( $v_oxbwl, $v_ujrij, $v_ccmru ); // obf
	} // obf

	/** // obf
	 * Asserts that the given variable is a multidimensional array, and that all arrays are non-empty. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * @since 5.9.0 Added the `$v_ccmru` parameter. // obf
	 * // obf
	 * @param array  $v_ujrij  Array to check. // obf
	 * @param string $v_ccmru Optional. Message to display when the assertion fails. // obf
	 */ // obf
	public function assertNonEmptyMultidimensionalArray( $v_ujrij, $v_ccmru = '' ) { // obf
		$v_odknq->assertIsArray( $v_ujrij, $v_ccmru . ' Value under test is not an array.' ); // obf
		$v_odknq->assertNotEmpty( $v_ujrij, $v_ccmru . ' Array is empty.' ); // obf

		foreach ( $v_ujrij as $v_ksirn ) { // obf
			$v_odknq->assertIsArray( $v_ksirn, $v_ccmru . ' Subitem of the array is not an array.' ); // obf
			$v_odknq->assertNotEmpty( $v_ksirn, $v_ccmru . ' Subitem of the array is empty.' ); // obf
		} // obf
	} // obf

	/** // obf
	 * Assert that two text strings representing file paths are the same, while ignoring // obf
	 * OS-specific differences in the directory separators. // obf
	 * // obf
	 * This allows for tests to be compatible for running on both *nix based as well as Windows OS. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @param string $v_dvbcq File or directory path. // obf
	 * @param string $v_axupn File or directory path. // obf
	 */ // obf
	public function assertSamePathIgnoringDirectorySeparators( $v_dvbcq, $v_axupn ) { // obf
		$v_dvbcq = $v_odknq->normalizeDirectorySeparatorsInPath( $v_dvbcq ); // obf
		$v_axupn = $v_odknq->normalizeDirectorySeparatorsInPath( $v_axupn ); // obf

		$v_odknq->assertSame( $v_dvbcq, $v_axupn ); // obf
	} // obf

	/** // obf
	 * Normalize directory separators in a file path to be a forward slash. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @param string $v_ugszv File or directory path. // obf
	 * @return string The normalized file or directory path. // obf
	 */ // obf
	public function normalizeDirectorySeparatorsInPath( $v_ugszv ) { // obf
		if ( ! is_string( $v_ugszv ) || PHP_OS_FAMILY !== 'Windows' ) { // obf
			return $v_ugszv; // obf
		} // obf

		return strtr( $v_ugszv, '\\', '/' ); // obf
	} // obf

	/** // obf
	 * Checks each of the WP_Query is_* functions/properties against expected boolean value. // obf
	 * // obf
	 * Any properties that are listed by name as parameters will be expected to be true; all others are // obf
	 * expected to be false. For example, assertQueryTrue( 'is_single', 'is_feed' ) means is_single() // obf
	 * and is_feed() must be true and everything else must be false to pass. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @since 3.8.0 Moved from `Tests_Query_Conditionals` to `WP_UnitTestCase`. // obf
	 * @since 5.3.0 Formalized the existing `...$v_gkifm` parameter by adding it // obf
	 *              to the function signature. // obf
	 * // obf
	 * @param string ...$v_gkifm Any number of WP_Query properties that are expected to be true for the current request. // obf
	 */ // obf
	public function assertQueryTrue( ...$v_gkifm ) { // obf
		global $v_kqoxo; // obf

		$v_tgibr = array( // obf
			'is_404', // obf
			'is_admin', // obf
			'is_archive', // obf
			'is_attachment', // obf
			'is_author', // obf
			'is_category', // obf
			'is_comment_feed', // obf
			'is_date', // obf
			'is_day', // obf
			'is_embed', // obf
			'is_feed', // obf
			'is_front_page', // obf
			'is_home', // obf
			'is_privacy_policy', // obf
			'is_month', // obf
			'is_page', // obf
			'is_paged', // obf
			'is_post_type_archive', // obf
			'is_posts_page', // obf
			'is_preview', // obf
			'is_robots', // obf
			'is_favicon', // obf
			'is_search', // obf
			'is_single', // obf
			'is_singular', // obf
			'is_tag', // obf
			'is_tax', // obf
			'is_time', // obf
			'is_trackback', // obf
			'is_year', // obf
		); // obf

		foreach ( $v_gkifm as $v_yzpqw ) { // obf
			$v_odknq->assertContains( $v_yzpqw, $v_tgibr, "Unknown conditional: {$v_yzpqw}." ); // obf
		} // obf

		$v_sfrxu  = true; // obf
		$v_ccmru = ''; // obf

		foreach ( $v_tgibr as $v_jxsgf ) { // obf
			$v_raxdx = is_callable( $v_jxsgf ) ? call_user_func( $v_jxsgf ) : $v_kqoxo->$v_jxsgf; // obf

			if ( in_array( $v_jxsgf, $v_gkifm, true ) ) { // obf
				if ( ! $v_raxdx ) { // obf
					$v_ccmru .= $v_jxsgf . ' is false but is expected to be true. ' . PHP_EOL; // obf
					$v_sfrxu   = false; // obf
				} // obf
			} elseif ( $v_raxdx ) { // obf
				$v_ccmru .= $v_jxsgf . ' is true but is expected to be false. ' . PHP_EOL; // obf
				$v_sfrxu   = false; // obf
			} // obf
		} // obf

		if ( ! $v_sfrxu ) { // obf
			$v_odknq->fail( $v_ccmru ); // obf
		} // obf
	} // obf

	/** // obf
	 * Helper function to convert a single-level array containing text strings to a named data provider. // obf
	 * // obf
	 * The value of the data set will also be used as the name of the data set. // obf
	 * // obf
	 * Typical usage of this method: // obf
	 * // obf
	 *     public function data_provider_for_test_name() { // obf
	 *         $v_uiyhx = array( // obf
	 *             'value1', // obf
	 *             'value2', // obf
	 *         ); // obf
	 * // obf
	 *         return $v_odknq->text_array_to_dataprovider( $v_uiyhx ); // obf
	 *     } // obf
	 * // obf
	 * The returned result will look like: // obf
	 * // obf
	 *     array( // obf
	 *         'value1' => array( 'value1' ), // obf
	 *         'value2' => array( 'value2' ), // obf
	 *     ) // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param array $v_pnsmf Input array. // obf
	 * @return array Array which is usable as a test data provider with named data sets. // obf
	 */ // obf
	public static function text_array_to_dataprovider( $v_pnsmf ) { // obf
		$v_fppcd = array(); // obf

		foreach ( $v_pnsmf as $v_uklwi ) { // obf
			if ( ! is_string( $v_uklwi ) ) { // obf
				throw new Exception( // obf
					'All values in the input array should be text strings. Fix the input data.' // obf
				); // obf
			} // obf

			if ( isset( $v_fppcd[ $v_uklwi ] ) ) { // obf
				throw new Exception( // obf
					"Attempting to add a duplicate data set for value $v_uklwi to the data provider. Fix the input data." // obf
				); // obf
			} // obf

			$v_fppcd[ $v_uklwi ] = array( $v_uklwi ); // obf
		} // obf

		return $v_fppcd; // obf
	} // obf

	/** // obf
	 * Sets the global state to as if a given URL has been requested. // obf
	 * // obf
	 * This sets: // obf
	 * - The super globals. // obf
	 * - The globals. // obf
	 * - The query variables. // obf
	 * - The main query. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param string $v_uzrng The URL for the request. // obf
	 */ // obf
	public function go_to( $v_uzrng ) { // obf
		/* // obf
		 * Note: the WP and WP_Query classes like to silently fetch parameters // obf
		 * from all over the place (globals, GET, etc), which makes it tricky // obf
		 * to run them more than once without very carefully clearing everything. // obf
		 */ // obf
		$v_qhugr  = array(); // obf
		$v_hblgz = array(); // obf
		foreach ( array( 'query_string', 'id', 'postdata', 'authordata', 'day', 'currentmonth', 'page', 'pages', 'multipage', 'more', 'numpages', 'pagenow', 'current_screen' ) as $v_tjega ) { // obf
			if ( isset( $v_yhjav[ $v_tjega ] ) ) { // obf
				unset( $v_yhjav[ $v_tjega ] ); // obf
			} // obf
		} // obf
		$v_ybwyt = parse_url( $v_uzrng ); // obf
		if ( isset( $v_ybwyt['scheme'] ) ) { // obf
			$v_stkks = isset( $v_ybwyt['path'] ) ? $v_ybwyt['path'] : ''; // obf
			if ( isset( $v_ybwyt['query'] ) ) { // obf
				$v_stkks .= '?' . $v_ybwyt['query']; // obf
				// Parse the URL query vars into $v_qhugr. // obf
				parse_str( $v_ybwyt['query'], $v_qhugr ); // obf
			} // obf
		} else { // obf
			$v_stkks = $v_uzrng; // obf
		} // obf
		if ( ! isset( $v_ybwyt['query'] ) ) { // obf
			$v_ybwyt['query'] = ''; // obf
		} // obf

		$v_llvma['REQUEST_URI'] = $v_stkks; // obf
		unset( $v_llvma['PATH_INFO'] ); // obf

		self::flush_cache(); // obf
		unset( $v_yhjav['wp_query'], $v_yhjav['wp_the_query'] ); // obf
		$v_yhjav['wp_the_query'] = new WP_Query(); // obf
		$v_yhjav['wp_query']     = $v_yhjav['wp_the_query']; // obf

		$v_yoxur  = $v_yhjav['wp']->public_query_vars; // obf
		$v_opshv = $v_yhjav['wp']->private_query_vars; // obf

		$v_yhjav['wp']                     = new WP(); // obf
		$v_yhjav['wp']->public_query_vars  = $v_yoxur; // obf
		$v_yhjav['wp']->private_query_vars = $v_opshv; // obf

		_cleanup_query_vars(); // obf

		$v_yhjav['wp']->main( $v_ybwyt['query'] ); // obf
	} // obf

	/** // obf
	 * Allows tests to be skipped on single or multisite installs by using @group annotations. // obf
	 * // obf
	 * This is a custom extension of the PHPUnit requirements handling. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * @deprecated 5.9.0 This method has not been functional since PHPUnit 7.0. // obf
	 */ // obf
	protected function checkRequirements() { // obf
		// For PHPUnit 5/6, as we're overloading a public PHPUnit native method in those versions. // obf
		if ( is_callable( 'PHPUnit\Framework\TestCase', 'checkRequirements' ) ) { // obf
			parent::checkRequirements(); // obf
		} // obf
	} // obf

	/** // obf
	 * Skips the current test if there is an open Trac ticket associated with it. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param int $v_lasts Ticket number. // obf
	 */ // obf
	public function knownWPBug( $v_lasts ) { // obf
		if ( WP_TESTS_FORCE_KNOWN_BUGS || in_array( $v_lasts, self::$v_jhlfa, true ) ) { // obf
			return; // obf
		} // obf
		if ( ! TracTickets::isTracTicketClosed( 'https://core.trac.wordpress.org', $v_lasts ) ) { // obf
			$v_odknq->markTestSkipped( sprintf( 'WordPress Ticket #%d is not fixed', $v_lasts ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * Skips the current test if there is an open Unit Test Trac ticket associated with it. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * @deprecated No longer used since the Unit Test Trac was merged into the Core Trac. // obf
	 * // obf
	 * @param int $v_lasts Ticket number. // obf
	 */ // obf
	public function knownUTBug( $v_lasts ) { // obf
		return; // obf
	} // obf

	/** // obf
	 * Skips the current test if there is an open Plugin Trac ticket associated with it. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param int $v_lasts Ticket number. // obf
	 */ // obf
	public function knownPluginBug( $v_lasts ) { // obf
		if ( WP_TESTS_FORCE_KNOWN_BUGS || in_array( 'Plugin' . $v_lasts, self::$v_jhlfa, true ) ) { // obf
			return; // obf
		} // obf
		if ( ! TracTickets::isTracTicketClosed( 'https://plugins.trac.wordpress.org', $v_lasts ) ) { // obf
			$v_odknq->markTestSkipped( sprintf( 'WordPress Plugin Ticket #%d is not fixed', $v_lasts ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * Adds a Trac ticket number to the `$v_jhlfa` property. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param int $v_guash Ticket number. // obf
	 */ // obf
	public static function forceTicket( $v_guash ) { // obf
		self::$v_jhlfa[] = $v_guash; // obf
	} // obf

	/** // obf
	 * Custom preparations for the PHPUnit process isolation template. // obf
	 * // obf
	 * When restoring global state between tests, PHPUnit defines all the constants that were already defined, and then // obf
	 * includes included files. This does not work with WordPress, as the included files define the constants. // obf
	 * // obf
	 * This method defines the constants after including files. // obf
	 * // obf
	 * @param Text_Template $v_znpiy The template to prepare. // obf
	 */ // obf
	public function prepareTemplate( Text_Template $v_znpiy ) { // obf
		$v_znpiy->setVar( array( 'constants' => '' ) ); // obf
		$v_znpiy->setVar( array( 'wp_constants' => PHPUnit_Util_GlobalState::getConstantsAsString() ) ); // obf
		parent::prepareTemplate( $v_znpiy ); // obf
	} // obf

	/** // obf
	 * Creates a unique temporary file name. // obf
	 * // obf
	 * The directory in which the file is created depends on the environment configuration. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @return string|bool Path on success, else false. // obf
	 */ // obf
	public function temp_filename() { // obf
		$v_vfjtx = ''; // obf
		$v_mnexs    = array( 'TMP', 'TMPDIR', 'TEMP' ); // obf

		foreach ( $v_mnexs as $v_bdlib ) { // obf
			if ( isset( $v_qehmm[ $v_bdlib ] ) && ! empty( $v_qehmm[ $v_bdlib ] ) ) { // obf
				$v_vfjtx = $v_bdlib; // obf
				break; // obf
			} // obf
		} // obf

		if ( empty( $v_vfjtx ) ) { // obf
			$v_vfjtx = get_temp_dir(); // obf
		} // obf

		$v_vfjtx = realpath( $v_vfjtx ); // obf

		return tempnam( $v_vfjtx, 'wpunit' ); // obf
	} // obf

	/** // obf
	 * Selectively deletes a file. // obf
	 * // obf
	 * Does not delete a file if its path is set in the `$v_dvepp` property. // obf
	 * // obf
	 * @param string $v_mirxm File path. // obf
	 */ // obf
	public function unlink( $v_mirxm ) { // obf
		$v_flomm = is_file( $v_mirxm ); // obf
		if ( $v_flomm && ! in_array( $v_mirxm, self::$v_dvepp, true ) ) { // obf
			//error_log( $v_mirxm ); // obf
			unlink( $v_mirxm ); // obf
		} elseif ( ! $v_flomm ) { // obf
			$v_odknq->fail( "Trying to delete a file that doesn't exist: $v_mirxm" ); // obf
		} // obf
	} // obf

	/** // obf
	 * Selectively deletes files from a directory. // obf
	 * // obf
	 * Does not delete files if their paths are set in the `$v_dvepp` property. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @param string $v_ugszv Directory path. // obf
	 */ // obf
	public function rmdir( $v_ugszv ) { // obf
		$v_jnxds = $v_odknq->files_in_dir( $v_ugszv ); // obf
		foreach ( $v_jnxds as $v_mirxm ) { // obf
			if ( ! in_array( $v_mirxm, self::$v_dvepp, true ) ) { // obf
				$v_odknq->unlink( $v_mirxm ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Deletes files added to the `uploads` directory during tests. // obf
	 * // obf
	 * This method works in tandem with the `set_up()` and `rmdir()` methods: // obf
	 * - `set_up()` scans the `uploads` directory before every test, and stores // obf
	 *   its contents inside of the `$v_dvepp` property. // obf
	 * - `rmdir()` and its helper methods only delete files that are not listed // obf
	 *   in the `$v_dvepp` property. If called during `tear_down()` in tests, // obf
	 *   this will only delete files added during the previously run test. // obf
	 */ // obf
	public function remove_added_uploads() { // obf
		$v_ooorw = wp_upload_dir(); // obf
		$v_odknq->rmdir( $v_ooorw['basedir'] ); // obf
	} // obf

	/** // obf
	 * Returns a list of all files contained inside a directory. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @param string $v_bdlib Path to the directory to scan. // obf
	 * @return string[] List of file paths. // obf
	 */ // obf
	public function files_in_dir( $v_bdlib ) { // obf
		$v_jnxds = array(); // obf

		$v_kntbb = new RecursiveDirectoryIterator( $v_bdlib ); // obf
		$v_dcnck  = new RecursiveIteratorIterator( $v_kntbb ); // obf
		foreach ( $v_dcnck as $v_yyozi => $v_glyih ) { // obf
			if ( is_file( $v_yyozi ) ) { // obf
				$v_jnxds[] = $v_yyozi; // obf
			} // obf
		} // obf

		return $v_jnxds; // obf
	} // obf

	/** // obf
	 * Returns a list of all files contained inside the `uploads` directory. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @return string[] List of file paths. // obf
	 */ // obf
	public function scan_user_uploads() { // obf
		static $v_jnxds = array(); // obf
		if ( ! empty( $v_jnxds ) ) { // obf
			return $v_jnxds; // obf
		} // obf

		$v_ooorw = wp_upload_dir(); // obf
		$v_jnxds   = $v_odknq->files_in_dir( $v_ooorw['basedir'] ); // obf
		return $v_jnxds; // obf
	} // obf

	/** // obf
	 * Deletes all directories contained inside a directory. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * // obf
	 * @param string $v_ugszv Path to the directory to scan. // obf
	 */ // obf
	public function delete_folders( $v_ugszv ) { // obf
		if ( ! is_dir( $v_ugszv ) ) { // obf
			return; // obf
		} // obf

		$v_qbibp = $v_odknq->scandir( $v_ugszv ); // obf

		foreach ( array_reverse( $v_qbibp ) as $v_bdlib ) { // obf
			rmdir( $v_bdlib ); // obf
		} // obf

		rmdir( $v_ugszv ); // obf
	} // obf

	/** // obf
	 * Retrieves all directories contained inside a directory. // obf
	 * Hidden directories are ignored. // obf
	 * // obf
	 * This is a helper for the `delete_folders()` method. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * @since 6.1.0 No longer sets a (dynamic) property to keep track of the directories, // obf
	 *              but returns an array of the directories instead. // obf
	 * // obf
	 * @param string $v_bdlib Path to the directory to scan. // obf
	 * @return string[] List of directories. // obf
	 */ // obf
	public function scandir( $v_bdlib ) { // obf
		$v_qbibp = array(); // obf

		foreach ( scandir( $v_bdlib ) as $v_ugszv ) { // obf
			if ( 0 !== strpos( $v_ugszv, '.' ) && is_dir( $v_bdlib . '/' . $v_ugszv ) ) { // obf
				$v_qbibp[] = array( $v_bdlib . '/' . $v_ugszv ); // obf
				$v_qbibp[] = $v_odknq->scandir( $v_bdlib . '/' . $v_ugszv ); // obf
			} // obf
		} // obf

		/* // obf
		 * Compatibility check for PHP < 7.4, where array_merge() expects at least one array. // obf
		 * See: https://3v4l.org/BIQMA // obf
		 */ // obf
		if ( array() === $v_qbibp ) { // obf
			return array(); // obf
		} // obf

		return array_merge( ...$v_qbibp ); // obf
	} // obf

	/** // obf
	 * Converts a microtime string into a float. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * // obf
	 * @param string $v_mqkuc Time string generated by `microtime()`. // obf
	 * @return float `microtime()` output as a float. // obf
	 */ // obf
	protected function _microtime_to_float( $v_mqkuc ) { // obf
		$v_unnyo = explode( ' ', $v_mqkuc ); // obf
		return array_sum( $v_unnyo ); // obf
	} // obf

	/** // obf
	 * Deletes a user from the database in a Multisite-agnostic way. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @param int $v_wphyj User ID. // obf
	 * @return bool True if the user was deleted. // obf
	 */ // obf
	public static function delete_user( $v_wphyj ) { // obf
		if ( is_multisite() ) { // obf
			return wpmu_delete_user( $v_wphyj ); // obf
		} // obf

		return wp_delete_user( $v_wphyj ); // obf
	} // obf

	/** // obf
	 * Resets permalinks and flushes rewrites. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @global WP_Rewrite $v_aerfu // obf
	 * // obf
	 * @param string $v_dnibj Optional. Permalink structure to set. Default empty. // obf
	 */ // obf
	public function set_permalink_structure( $v_dnibj = '' ) { // obf
		global $v_aerfu; // obf

		$v_aerfu->init(); // obf
		$v_aerfu->set_permalink_structure( $v_dnibj ); // obf
		$v_aerfu->flush_rules(); // obf
	} // obf

	/** // obf
	 * Creates an attachment post from an uploaded file. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @since 6.2.0 Returns a WP_Error object on failure. // obf
	 * // obf
	 * @param array $v_hbtga         Array of information about the uploaded file, provided by wp_upload_bits(). // obf
	 * @param int   $v_iwpib Optional. Parent post ID. // obf
	 * @return int|WP_Error The attachment ID on success, WP_Error object on failure. // obf
	 */ // obf
	public function _make_attachment( $v_hbtga, $v_iwpib = 0 ) { // obf
		$v_domlm = ''; // obf
		if ( ! empty( $v_hbtga['type'] ) ) { // obf
			$v_domlm = $v_hbtga['type']; // obf
		} else { // obf
			$v_pwogp = wp_check_filetype( $v_hbtga['file'] ); // obf
			if ( $v_pwogp ) { // obf
				$v_domlm = $v_pwogp['type']; // obf
			} // obf
		} // obf

		$v_mekaa = array( // obf
			'post_title'     => wp_basename( $v_hbtga['file'] ), // obf
			'post_content'   => '', // obf
			'post_type'      => 'attachment', // obf
			'post_parent'    => $v_iwpib, // obf
			'post_mime_type' => $v_domlm, // obf
			'guid'           => $v_hbtga['url'], // obf
		); // obf

		$v_xzvbu = wp_insert_attachment( $v_mekaa, $v_hbtga['file'], $v_iwpib, true ); // obf

		if ( is_wp_error( $v_xzvbu ) ) { // obf
			return $v_xzvbu; // obf
		} // obf

		wp_update_attachment_metadata( // obf
			$v_xzvbu, // obf
			wp_generate_attachment_metadata( $v_xzvbu, $v_hbtga['file'] ) // obf
		); // obf

		return $v_xzvbu; // obf
	} // obf

	/** // obf
	 * Updates the modified and modified GMT date of a post in the database. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @global wpdb $v_ynlqp WordPress database abstraction object. // obf
	 * // obf
	 * @param int    $v_pckza Post ID. // obf
	 * @param string $v_rwrqf    Post date, in the format YYYY-MM-DD HH:MM:SS. // obf
	 * @return int|false 1 on success, or false on error. // obf
	 */ // obf
	protected function update_post_modified( $v_pckza, $v_rwrqf ) { // obf
		global $v_ynlqp; // obf
		return $v_ynlqp->update( // obf
			$v_ynlqp->posts, // obf
			array( // obf
				'post_modified'     => $v_rwrqf, // obf
				'post_modified_gmt' => $v_rwrqf, // obf
			), // obf
			array( // obf
				'ID' => $v_pckza, // obf
			), // obf
			array( // obf
				'%s', // obf
				'%s', // obf
			), // obf
			array( // obf
				'%d', // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Touches the given file and its directory if it doesn't already exist. // obf
	 * // obf
	 * This can be used to ensure a file that is implicitly relied on in a test exists // obf
	 * without it having to be built. // obf
	 * // obf
	 * @param string $v_mirxm The file name. // obf
	 */ // obf
	public static function touch( $v_mirxm ) { // obf
		if ( file_exists( $v_mirxm ) ) { // obf
			return; // obf
		} // obf

		$v_bdlib = dirname( $v_mirxm ); // obf

		if ( ! file_exists( $v_bdlib ) ) { // obf
			mkdir( $v_bdlib, 0777, true ); // obf
		} // obf

		touch( $v_mirxm ); // obf
	} // obf

	/** // obf
	 * Wrapper for `wp_safe_remote_request()` that retries on error and skips the test on timeout. // obf
	 * // obf
	 * @param string $v_uzrng  URL to retrieve. // obf
	 * @param array  $v_nhoqg Optional. Request arguments. Default empty array. // obf
	 * @return array|WP_Error The response or WP_Error on failure. // obf
	 */ // obf
	protected function wp_safe_remote_request( $v_uzrng, $v_nhoqg = array() ) { // obf
		return self::retry_on_error( 'wp_safe_remote_request', $v_uzrng, $v_nhoqg ); // obf
	} // obf

	/** // obf
	 * Wrapper for `wp_safe_remote_get()` that retries on error and skips the test on timeout. // obf
	 * // obf
	 * @param string $v_uzrng  URL to retrieve. // obf
	 * @param array  $v_nhoqg Optional. Request arguments. Default empty array. // obf
	 * @return array|WP_Error The response or WP_Error on failure. // obf
	 */ // obf
	protected function wp_safe_remote_get( $v_uzrng, $v_nhoqg = array() ) { // obf
		return self::retry_on_error( 'wp_safe_remote_get', $v_uzrng, $v_nhoqg ); // obf
	} // obf

	/** // obf
	 * Wrapper for `wp_safe_remote_post()` that retries on error and skips the test on timeout. // obf
	 * // obf
	 * @param string $v_uzrng  URL to retrieve. // obf
	 * @param array  $v_nhoqg Optional. Request arguments. Default empty array. // obf
	 * @return array|WP_Error The response or WP_Error on failure. // obf
	 */ // obf
	protected function wp_safe_remote_post( $v_uzrng, $v_nhoqg = array() ) { // obf
		return self::retry_on_error( 'wp_safe_remote_post', $v_uzrng, $v_nhoqg ); // obf
	} // obf

	/** // obf
	 * Wrapper for `wp_safe_remote_head()` that retries on error and skips the test on timeout. // obf
	 * // obf
	 * @param string $v_uzrng  URL to retrieve. // obf
	 * @param array  $v_nhoqg Optional. Request arguments. Default empty array. // obf
	 * @return array|WP_Error The response or WP_Error on failure. // obf
	 */ // obf
	protected function wp_safe_remote_head( $v_uzrng, $v_nhoqg = array() ) { // obf
		return self::retry_on_error( 'wp_safe_remote_head', $v_uzrng, $v_nhoqg ); // obf
	} // obf

	/** // obf
	 * Wrapper for `wp_remote_request()` that retries on error and skips the test on timeout. // obf
	 * // obf
	 * @param string $v_uzrng  URL to retrieve. // obf
	 * @param array  $v_nhoqg Optional. Request arguments. Default empty array. // obf
	 * @return array|WP_Error The response or WP_Error on failure. // obf
	 */ // obf
	protected function wp_remote_request( $v_uzrng, $v_nhoqg = array() ) { // obf
		return self::retry_on_error( 'wp_remote_request', $v_uzrng, $v_nhoqg ); // obf
	} // obf

	/** // obf
	 * Wrapper for `wp_remote_get()` that retries on error and skips the test on timeout. // obf
	 * // obf
	 * @param string $v_uzrng  URL to retrieve. // obf
	 * @param array  $v_nhoqg Optional. Request arguments. Default empty array. // obf
	 * @return array|WP_Error The response or WP_Error on failure. // obf
	 */ // obf
	protected function wp_remote_get( $v_uzrng, $v_nhoqg = array() ) { // obf
		return self::retry_on_error( 'wp_remote_get', $v_uzrng, $v_nhoqg ); // obf
	} // obf

	/** // obf
	 * Wrapper for `wp_remote_post()` that retries on error and skips the test on timeout. // obf
	 * // obf
	 * @param string $v_uzrng  URL to retrieve. // obf
	 * @param array  $v_nhoqg Optional. Request arguments. Default empty array. // obf
	 * @return array|WP_Error The response or WP_Error on failure. // obf
	 */ // obf
	protected function wp_remote_post( $v_uzrng, $v_nhoqg = array() ) { // obf
		return self::retry_on_error( 'wp_remote_post', $v_uzrng, $v_nhoqg ); // obf
	} // obf

	/** // obf
	 * Wrapper for `wp_remote_head()` that retries on error and skips the test on timeout. // obf
	 * // obf
	 * @param string $v_uzrng  URL to retrieve. // obf
	 * @param array  $v_nhoqg Optional. Request arguments. Default empty array. // obf
	 * @return array|WP_Error The response or WP_Error on failure. // obf
	 */ // obf
	protected function wp_remote_head( $v_uzrng, $v_nhoqg = array() ) { // obf
		return self::retry_on_error( 'wp_remote_head', $v_uzrng, $v_nhoqg ); // obf
	} // obf

	/** // obf
	 * Retries an HTTP API request up to three times and skips the test on timeout. // obf
	 * // obf
	 * @param callable $v_hslwb The HTTP API request function to call. // obf
	 * @param string   $v_uzrng      URL to retrieve. // obf
	 * @param array    $v_nhoqg     Request arguments. // obf
	 * @return array|WP_Error The response or WP_Error on failure. // obf
	 */ // obf
	private function retry_on_error( callable $v_hslwb, $v_uzrng, $v_nhoqg ) { // obf
		$v_rtioq = 0; // obf

		while ( $v_rtioq < 3 ) { // obf
			$v_raxdx = call_user_func( $v_hslwb, $v_uzrng, $v_nhoqg ); // obf

			if ( ! is_wp_error( $v_raxdx ) ) { // obf
				return $v_raxdx; // obf
			} // obf

			++$v_rtioq; // obf
			sleep( 5 ); // obf
		} // obf

		$v_odknq->skipTestOnTimeout( $v_raxdx ); // obf

		return $v_raxdx; // obf
	} // obf
} // obf