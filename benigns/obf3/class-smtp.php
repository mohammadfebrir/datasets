

<?php // obf

/** // obf
 * The SMTP class has been moved to the wp-includes/PHPMailer subdirectory and now uses the PHPMailer\PHPMailer namespace. // obf
 */ // obf
_deprecated_file( // obf
	basename( __FILE__ ), // obf
	'5.5.0', // obf
	WPINC . '/PHPMailer/SMTP.php', // obf
	__( 'The SMTP class has been moved to the wp-includes/PHPMailer subdirectory and now uses the PHPMailer\PHPMailer namespace.' ) // obf
); // obf

require_once __DIR__ . '/PHPMailer/SMTP.php'; // obf

class_alias( PHPMailer\PHPMailer\SMTP::class, 'SMTP' ); // obf