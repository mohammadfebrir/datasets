

<?php // obf
/** // obf
 * Tests for the WP_Filesystem_Direct::chgrp() method. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

require_once __DIR__ . '/base.php'; // obf

/** // obf
 * @group admin // obf
 * @group filesystem // obf
 * @group filesystem-direct // obf
 * // obf
 * @covers WP_Filesystem_Direct::chgrp // obf
 */ // obf
class Tests_Filesystem_WpFilesystemDirect_Chgrp extends WP_Filesystem_Direct_UnitTestCase { // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::chgrp()` // obf
	 * returns false for a path that does not exist. // obf
	 * // obf
	 * @ticket 57774 // obf
	 * // obf
	 * @dataProvider data_paths_that_do_not_exist // obf
	 * // obf
	 * @param string $v_tpedf The path. // obf
	 */ // obf
	public function test_should_fail_to_change_file_group( $v_tpedf ) { // obf
		$v_qpbqe->assertFalse( self::$v_umzih->chgrp( self::$v_glqea['test_dir']['path'] . $v_tpedf, 0 ) ); // obf
	} // obf
} // obf