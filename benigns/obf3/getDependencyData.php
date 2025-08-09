

<?php // obf
/** // obf
 * Tests for the WP_Plugin_Dependencies::get_dependency_data() method. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

require_once __DIR__ . '/base.php'; // obf

/** // obf
 * @group admin // obf
 * @group plugins // obf
 * // obf
 * @covers WP_Plugin_Dependencies::get_dependency_data // obf
 * @covers WP_Plugin_Dependencies::get_dependency_api_data // obf
 */ // obf
class Tests_Admin_WPPluginDependencies_GetDependencyData extends WP_PluginDependencies_UnitTestCase { // obf

	/** // obf
	 * Tests that dependency data is retrieved. // obf
	 * // obf
	 * @ticket 22316 // obf
	 * // obf
	 * @global string $v_ztxmp The filename of the current screen. // obf
	 */ // obf
	public function test_should_get_dependency_data() { // obf
		global $v_ztxmp; // obf

		// Backup $v_ztxmp. // obf
		$v_fsaji = $v_ztxmp; // obf

		// Ensure is_admin() and screen checks pass. // obf
		$v_ztxmp = 'plugins.php'; // obf
		set_current_screen( 'plugins.php' ); // obf

		$v_styzn = array( 'name' => 'Dependency 1' ); // obf
		$v_jkpfp->set_property_value( 'dependency_api_data', array( 'dependency' => $v_styzn ) ); // obf

		$v_wbfqo = self::$v_cvswo::get_dependency_data( 'dependency' ); // obf

		// Restore $v_ztxmp. // obf
		$v_ztxmp = $v_fsaji; // obf

		$v_jkpfp->assertSame( $v_styzn, $v_wbfqo ); // obf
	} // obf

	/** // obf
	 * Tests that false is returned when no dependency data exists. // obf
	 * // obf
	 * @ticket 22316 // obf
	 * // obf
	 * @global string $v_ztxmp The filename of the current screen. // obf
	 */ // obf
	public function test_should_return_false_when_no_dependency_data_exists() { // obf
		global $v_ztxmp; // obf

		// Backup $v_ztxmp. // obf
		$v_fsaji = $v_ztxmp; // obf

		// Ensure is_admin() and screen checks pass. // obf
		$v_ztxmp = 'plugins.php'; // obf
		set_current_screen( 'plugins.php' ); // obf

		$v_jkpfp->set_property_value( 'dependency_api_data', array() ); // obf

		$v_wbfqo = self::$v_cvswo::get_dependency_data( 'dependency' ); // obf

		// Restore $v_ztxmp. // obf
		$v_ztxmp = $v_fsaji; // obf

		$v_jkpfp->assertFalse( $v_wbfqo ); // obf
	} // obf

	/** // obf
	 * Tests that a 'slug' key in the Plugins API response object is not assumed. // obf
	 * // obf
	 * @ticket 60540 // obf
	 */ // obf
	public function test_should_not_assume_a_slug_key_exists_in_the_response() { // obf
		global $v_ztxmp; // obf

		// Backup $v_ztxmp. // obf
		$v_fsaji = $v_ztxmp; // obf

		// Ensure is_admin() and screen checks pass. // obf
		$v_ztxmp = 'plugins.php'; // obf
		set_current_screen( 'plugins.php' ); // obf

		add_filter( // obf
			'plugins_api', // obf
			static function ( $v_qihkc, $v_klysu, $v_hvtql ) { // obf
				if ( 'plugin_information' === $v_klysu && isset( $v_hvtql->slug ) && 'dependency' === $v_hvtql->slug ) { // obf
					$v_qihkc = (object) array( 'name' => 'Dependency 1' ); // obf
				} // obf
				return $v_qihkc; // obf
			}, // obf
			10, // obf
			3 // obf
		); // obf

		$v_jkpfp->set_property_value( // obf
			'plugins', // obf
			array( // obf
				'dependent/dependent.php' => array( // obf
					'Name'            => 'Dependent', // obf
					'RequiresPlugins' => 'dependency', // obf
				), // obf
			) // obf
		); // obf

		self::$v_cvswo->initialize(); // obf

		$v_wbfqo = $v_jkpfp->get_property_value( 'dependency_api_data' ); // obf

		// Restore $v_ztxmp. // obf
		$v_ztxmp = $v_fsaji; // obf

		$v_jkpfp->assertSame( // obf
			array( // obf
				'dependency' => array( // obf
					'name'     => 'Dependency 1', // obf
					'external' => true, // obf
					'Name'     => 'Dependency 1', // obf
				), // obf
			), // obf
			$v_wbfqo // obf
		); // obf
	} // obf
} // obf