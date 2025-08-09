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
 */
class Tests_Formatting_Slashit extends WP_UnitTestCase {

	/**
	 * @covers ::backslashit
	 */
	public function test_backslashes_middle_numbers() {
		$this->assertSame( "\\a-!9\\a943\\b\\c", backslashit( 'a-!9a943bc' ) );
	}

	/**
	 * @covers ::backslashit
	 */
	public function test_backslashes_alphas() {
		$this->assertSame( "\\a943\\b\\c", backslashit( 'a943bc' ) );
	}

	/**
	 * @covers ::backslashit
	 */
	public function test_double_backslashes_leading_numbers() {
		$this->assertSame( '\\\\95', backslashit( '95' ) );
	}

	/**
	 * @covers ::untrailingslashit
	 */
	public function test_removes_trailing_slashes() {
		$this->assertSame( 'a', untrailingslashit( 'a/' ) );
		$this->assertSame( 'a', untrailingslashit( 'a////' ) );
	}

	/**
	 * @ticket 22267
	 *
	 * @covers ::untrailingslashit
	 */
	public function test_removes_trailing_backslashes() {
		$this->assertSame( 'a', untrailingslashit( 'a\\' ) );
		$this->assertSame( 'a', untrailingslashit( 'a\\\\\\\\' ) );
	}

	/**
	 * @ticket 22267
	 *
	 * @covers ::untrailingslashit
	 */
	public function test_removes_trailing_mixed_slashes() {
		$this->assertSame( 'a', untrailingslashit( 'a/\\' ) );
		$this->assertSame( 'a', untrailingslashit( 'a\\/\\///\\\\//' ) );
	}

	/**
	 * @covers ::trailingslashit
	 */
	public function test_adds_trailing_slash() {
		$this->assertSame( 'a/', trailingslashit( 'a' ) );
	}

	/**
	 * @covers ::trailingslashit
	 */
	public function test_does_not_add_trailing_slash_if_one_exists() {
		$this->assertSame( 'a/', trailingslashit( 'a/' ) );
	}

	/**
	 * @ticket 22267
	 *
	 * @covers ::trailingslashit
	 */
	public function test_converts_trailing_backslash_to_slash_if_one_exists() {
		$this->assertSame( 'a/', trailingslashit( 'a\\' ) );
	}
}
