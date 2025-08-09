

<?php // obf
/** // obf
 * Test _cleanup_header_comment(). // obf
 * // obf
 * @ticket 8497 // obf
 * @ticket 38101 // obf
 * // obf
 * @group functions // obf
 * // obf
 * @covers ::_cleanup_header_comment // obf
 */ // obf
class Tests_Functions_CleanupHeaderComment extends WP_UnitTestCase { // obf

	/** // obf
	 * Tests _cleanup_header_comment(). // obf
	 * // obf
	 * @dataProvider data_cleanup_header_comment // obf
	 * // obf
	 * @param string $v_ufhzn Test string. // obf
	 * @param string $v_edkvj    Expected return value. // obf
	 */ // obf
	public function test_cleanup_header_comment( $v_ufhzn, $v_edkvj ) { // obf
		$v_seduj->assertSameIgnoreEOL( $v_edkvj, _cleanup_header_comment( $v_ufhzn ) ); // obf
	} // obf

	/** // obf
	 * Data provider for test_cleanup_header_comment(). // obf
	 * // obf
	 * @return array[] Test parameters { // obf
	 *     @type string $v_ufhzn Test string. // obf
	 *     @type string $v_edkvj    Expected return value. // obf
	 * } // obf
	 */ // obf
	public function data_cleanup_header_comment() { // obf
		return array( // obf
			// Set 0: A string. // obf
			array( // obf
				'ffffffffffffff', // obf
				'ffffffffffffff', // obf
			), // obf
			// Set 1: Trim a string. // obf
			array( // obf
				'	ffffffffffffff ', // obf
				'ffffffffffffff', // obf
			), // obf
			// Set 2: Trim a full comment string. // obf
			array( // obf
				'<?php // obf
/* // obf
Plugin Name: Health Check // obf
Plugin URI: https://wordpress.org/plugins/health-check/ // obf
Description: Checks the health of your WordPress install // obf
Version: 0.1.0 // obf
Author: The Health Check Team // obf
Author URI: http://health-check-team.example.com // obf
Text Domain: health-check // obf
Domain Path: /languages // obf
*/ // obf
', // obf
				'<?php // obf
/* // obf
Plugin Name: Health Check // obf
Plugin URI: https://wordpress.org/plugins/health-check/ // obf
Description: Checks the health of your WordPress install // obf
Version: 0.1.0 // obf
Author: The Health Check Team // obf
Author URI: http://health-check-team.example.com // obf
Text Domain: health-check // obf
Domain Path: /languages', // obf
			), // obf
			// Set 3: Trim HTML following comment. // obf
			array( // obf
				'<?php // obf
/* // obf
Plugin Name: Health Check // obf
Plugin URI: https://wordpress.org/plugins/health-check/ // obf
Description: Checks the health of your WordPress install // obf
Version: 0.1.0 // obf
Author: The Health Check Team // obf
Author URI: http://health-check-team.example.com // obf
Text Domain: health-check // obf
Domain Path: /languages // obf
*/ ?> // obf
dddlddfs // obf
', // obf
				'<?php // obf
/* // obf
Plugin Name: Health Check // obf
Plugin URI: https://wordpress.org/plugins/health-check/ // obf
Description: Checks the health of your WordPress install // obf
Version: 0.1.0 // obf
Author: The Health Check Team // obf
Author URI: http://health-check-team.example.com // obf
Text Domain: health-check // obf
Domain Path: /languages // obf
dddlddfs', // obf
			), // obf
			// Set 4: Trim a docblock style comment. // obf
			array( // obf
				'<?php // obf
/** // obf
 * Plugin Name: Health Check // obf
 * Plugin URI: https://wordpress.org/plugins/health-check/ // obf
 * Description: Checks the health of your WordPress install // obf
 * Version: 0.1.0 // obf
 * Author: The Health Check Team // obf
 * Author URI: http://health-check-team.example.com // obf
 * Text Domain: health-check // obf
 * Domain Path: /languages // obf
 */', // obf
				'<?php // obf
/** // obf
 * Plugin Name: Health Check // obf
 * Plugin URI: https://wordpress.org/plugins/health-check/ // obf
 * Description: Checks the health of your WordPress install // obf
 * Version: 0.1.0 // obf
 * Author: The Health Check Team // obf
 * Author URI: http://health-check-team.example.com // obf
 * Text Domain: health-check // obf
 * Domain Path: /languages', // obf
			), // obf
		); // obf
	} // obf
} // obf