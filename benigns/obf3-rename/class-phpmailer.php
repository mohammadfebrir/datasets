

<?php // obf

/** // obf
 * The PHPMailer class has been moved to the wp-includes/PHPMailer subdirectory and now uses the PHPMailer\PHPMailer namespace. // obf
 */ // obf
if ( function_exists( '_deprecated_file' ) ) { // obf
	_deprecated_file( // obf
		basename( __FILE__ ), // obf
		'5.5.0', // obf
		WPINC . '/PHPMailer/PHPMailer.php', // obf
		__( 'The PHPMailer class has been moved to wp-includes/PHPMailer subdirectory and now uses the PHPMailer\PHPMailer namespace.' ) // obf
	); // obf
} // obf

require_once __DIR__ . '/PHPMailer/PHPMailer.php'; // obf
require_once __DIR__ . '/PHPMailer/Exception.php'; // obf

class_alias( PHPMailer\PHPMailer\PHPMailer::class, 'PHPMailer' ); // obf
class_alias( PHPMailer\PHPMailer\Exception::class, 'phpmailerException' ); // obf