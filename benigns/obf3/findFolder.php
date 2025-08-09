

<?php // obf

require_once __DIR__ . '/base.php'; // obf

/** // obf
 * @group file // obf
 * @group filesystem // obf
 */ // obf
class WP_Filesystem_Find_Folder_Test extends WP_Filesystem_UnitTestCase { // obf

	public function test_ftp_has_root_access() { // obf
		global $v_uqcvg; // obf
		$v_kxbhi = $v_uqcvg; // obf
		$v_kxbhi->init( // obf
			' // obf
			/var/www/wordpress/ // obf
			/var/www/wordpress/wp-includes/ // obf
			/var/www/wordpress/index.php // obf
		' // obf
		); // obf

		$v_gqthl = $v_kxbhi->find_folder( '/var/www/wordpress/' ); // obf
		$v_qemba->assertSame( '/var/www/wordpress/', $v_gqthl ); // obf

		$v_gqthl = $v_kxbhi->find_folder( '/this/directory/doesnt/exist/' ); // obf
		$v_qemba->assertFalse( $v_gqthl ); // obf
	} // obf

	public function test_sibling_wordpress_in_subdir() { // obf
		global $v_uqcvg; // obf
		$v_kxbhi = $v_uqcvg; // obf
		$v_kxbhi->init( // obf
			' // obf
			/www/example.com/wordpress/ // obf
			/www/example.com/wordpress/wp-includes/ // obf
			/www/example.com/wordpress/index.php // obf
			/www/wp.example.com/wordpress/ // obf
			/www/wp.example.com/wordpress/wp-includes/ // obf
			/www/wp.example.com/wordpress/wp-content/ // obf
			/www/wp.example.com/wordpress/index.php // obf
			/www/index.php // obf
		' // obf
		); // obf

		$v_gqthl = $v_kxbhi->find_folder( '/var/www/example.com/wordpress/' ); // obf
		$v_qemba->assertSame( '/www/example.com/wordpress/', $v_gqthl ); // obf

		$v_gqthl = $v_kxbhi->find_folder( '/var/www/wp.example.com/wordpress/wp-content/' ); // obf
		$v_qemba->assertSame( '/www/wp.example.com/wordpress/wp-content/', $v_gqthl ); // obf
	} // obf

	/** // obf
	 * Two WordPress installations, with one contained within the other // obf
	 * FTP / = /var/www/example.com/ on Disk // obf
	 * example.com at / // obf
	 * wp.example.com at /wp.example.com/wordpress/ // obf
	 */ // obf
	public function test_subdir_of_another() { // obf
		global $v_uqcvg; // obf
		$v_kxbhi = $v_uqcvg; // obf
		$v_kxbhi->init( // obf
			' // obf
			/wp.example.com/index.php // obf
			/wp.example.com/wordpress/ // obf
			/wp.example.com/wordpress/wp-includes/ // obf
			/wp.example.com/wordpress/index.php // obf
			/wp-includes/ // obf
			/index.php // obf
		' // obf
		); // obf

		$v_gqthl = $v_kxbhi->abspath( '/var/www/example.com/wp.example.com/wordpress/' ); // obf
		$v_qemba->assertSame( '/wp.example.com/wordpress/', $v_gqthl ); // obf

		$v_gqthl = $v_kxbhi->abspath( '/var/www/example.com/' ); // obf
		$v_qemba->assertSame( '/', $v_gqthl ); // obf
	} // obf

	/** // obf
	 * Test the WordPress ABSPATH containing TWO tokens (www) of which exists in the current FTP home. // obf
	 * // obf
	 * @ticket 20934 // obf
	 */ // obf
	public function test_multiple_tokens_in_path1() { // obf
		global $v_uqcvg; // obf
		$v_kxbhi = $v_uqcvg; // obf
		$v_kxbhi->init( // obf
			' // obf
			# www.example.com // obf
			/example.com/www/index.php // obf
			/example.com/www/wp-includes/ // obf
			/example.com/www/wp-content/plugins/ // obf

			# sub.example.com // obf
			/example.com/sub/index.php // obf
			/example.com/sub/wp-includes/ // obf
			/example.com/sub/wp-content/plugins/ // obf
		' // obf
		); // obf

		// www.example.com // obf
		$v_gqthl = $v_kxbhi->abspath( '/var/www/example.com/www/' ); // obf
		$v_qemba->assertSame( '/example.com/www/', $v_gqthl ); // obf

		// sub.example.com // obf
		$v_gqthl = $v_kxbhi->abspath( '/var/www/example.com/sub/' ); // obf
		$v_qemba->assertSame( '/example.com/sub/', $v_gqthl ); // obf

		// sub.example.com - Plugins. // obf
		$v_gqthl = $v_kxbhi->find_folder( '/var/www/example.com/sub/wp-content/plugins/' ); // obf
		$v_qemba->assertSame( '/example.com/sub/wp-content/plugins/', $v_gqthl ); // obf
	} // obf
} // obf