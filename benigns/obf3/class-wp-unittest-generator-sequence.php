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

class WP_UnitTest_Generator_Sequence {
	public static $incr = -1;
	public $next;
	public $template_string;

	public function __construct( $template_string = '%s', $start = null ) {
		if ( $start ) {
			$this->next = $start;
		} else {
			++self::$incr;
			$this->next = self::$incr;
		}
		$this->template_string = $template_string;
	}

	public function next() {
		$generated = sprintf( $this->template_string, $this->next );
		++$this->next;
		return $generated;
	}

	/**
	 * Get the incrementor.
	 *
	 * @since 4.6.0
	 *
	 * @return int
	 */
	public function get_incr() {
		return self::$incr;
	}

	/**
	 * Get the template string.
	 *
	 * @since 4.6.0
	 *
	 * @return string
	 */
	public function get_template_string() {
		return $this->template_string;
	}
}
