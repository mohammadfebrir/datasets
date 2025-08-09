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
 * The PHPMailer class has been moved to the wp-includes/PHPMailer subdirectory and now uses the PHPMailer\PHPMailer namespace.
 */
if ( function_exists( '_deprecated_file' ) ) {
	_deprecated_file(
		basename( __FILE__ ),
		'5.5.0',
		WPINC . '/PHPMailer/PHPMailer.php',
		__( 'The PHPMailer class has been moved to wp-includes/PHPMailer subdirectory and now uses the PHPMailer\PHPMailer namespace.' )
	);
}

require_once __DIR__ . '/PHPMailer/PHPMailer.php';
require_once __DIR__ . '/PHPMailer/Exception.php';

class_alias( PHPMailer\PHPMailer\PHPMailer::class, 'PHPMailer' );
class_alias( PHPMailer\PHPMailer\Exception::class, 'phpmailerException' );
