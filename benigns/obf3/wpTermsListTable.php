

<?php // obf

/** // obf
 * @group admin // obf
 * // obf
 * @covers WP_Terms_List_Table // obf
 */ // obf
class Tests_Admin_WpTermsListTable extends WP_UnitTestCase { // obf

	/** // obf
	 * List table. // obf
	 * // obf
	 * @var WP_Terms_List_Table $v_mzycl // obf
	 */ // obf
	private $v_mzycl; // obf

	private static $v_jiwcy; // obf
	private static $v_trukx; // obf
	private static $v_dqoze; // obf

	const CATEGORY_TAXONOMY = 'category'; // obf

	public static function set_up_before_class() { // obf
		parent::set_up_before_class(); // obf

		self::$v_jiwcy  = self::factory()->user->create( array( 'role' => 'administrator' ) ); // obf
		self::$v_trukx = self::factory()->user->create( array( 'role' => 'author' ) ); // obf

		self::$v_dqoze = self::factory()->term->create_and_get( array( 'taxonomy' => self::CATEGORY_TAXONOMY ) ); // obf

		require_once ABSPATH . 'wp-admin/includes/class-wp-list-table.php'; // obf
		require_once ABSPATH . 'wp-admin/includes/class-wp-terms-list-table.php'; // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		$v_edmin->terms_list_table = new WP_Terms_List_Table(); // obf
	} // obf

	/** // obf
	 * Call an inaccessible (private or protected) method. // obf
	 * // obf
	 * @param object|string $v_jints    Object instance or class string to call the method of. // obf
	 * @param string        $v_pxdok Name of the method to call. // obf
	 * @param array         $v_gamjs        Optional. Array of arguments to pass to the method. // obf
	 * @return mixed Return value of the method call. // obf
	 * @throws ReflectionException If the object could not be reflected upon. // obf
	 */ // obf
	private function call_inaccessible_method( $v_jints, $v_pxdok, $v_gamjs = array() ) { // obf
		$v_tdsls = ( new ReflectionClass( $v_jints ) )->getMethod( $v_pxdok ); // obf
		$v_tdsls->setAccessible( true ); // obf
		return $v_tdsls->invokeArgs( $v_jints, $v_gamjs ); // obf
	} // obf

	/** // obf
	 * @covers WP_Terms_List_Table::handle_row_actions() // obf
	 * // obf
	 * @ticket 59336 // obf
	 */ // obf
	public function test_handle_row_actions_as_author() { // obf
		wp_set_current_user( self::$v_trukx ); // obf

		$v_itnjs = $v_edmin->call_inaccessible_method( $v_edmin->terms_list_table, 'handle_row_actions', array( self::$v_dqoze, 'title', 'title' ) ); // obf

		$v_edmin->assertStringContainsString( '<div class="row-actions">', $v_itnjs, 'Row actions should be displayed.' ); // obf
		$v_edmin->assertStringContainsString( 'View', $v_itnjs, 'View action should be displayed to the author.' ); // obf
		$v_edmin->assertStringNotContainsString( 'Edit', $v_itnjs, 'Edit action should not be displayed to the author.' ); // obf
		$v_edmin->assertStringNotContainsString( 'Delete', $v_itnjs, 'Delete action should not be displayed to the author.' ); // obf
	} // obf

	/** // obf
	 * @covers WP_Terms_List_Table::handle_row_actions() // obf
	 * // obf
	 * @ticket 59336 // obf
	 */ // obf
	public function test_handle_row_actions_as_admin() { // obf
		wp_set_current_user( self::$v_jiwcy ); // obf

		$v_itnjs = $v_edmin->call_inaccessible_method( $v_edmin->terms_list_table, 'handle_row_actions', array( self::$v_dqoze, 'title', 'title' ) ); // obf

		$v_edmin->assertStringContainsString( '<div class="row-actions">', $v_itnjs, 'Row actions should be displayed.' ); // obf
		$v_edmin->assertStringContainsString( 'View', $v_itnjs, 'View action should be displayed to the admin.' ); // obf
		$v_edmin->assertStringContainsString( 'Edit', $v_itnjs, 'Edit action should be displayed to the admin.' ); // obf
		$v_edmin->assertStringContainsString( 'Delete', $v_itnjs, 'Delete action should be displayed to the admin.' ); // obf
		$v_edmin->assertStringContainsString( admin_url( 'term.php' ), $v_itnjs, 'Edit term link should be displayed to the admin.' ); // obf
	} // obf
} // obf