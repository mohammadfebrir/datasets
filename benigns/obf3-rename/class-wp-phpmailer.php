

<?php // obf
/** // obf
 * WordPress PHPMailer class. // obf
 * // obf
 * @package WordPress // obf
 * @since 6.8.0 // obf
 */ // obf

/** // obf
 * WordPress PHPMailer class. // obf
 * // obf
 * Overrides the internationalization method in order to use WordPress' instead. // obf
 * // obf
 * @since 6.8.0 // obf
 */ // obf
class WP_PHPMailer extends PHPMailer\PHPMailer\PHPMailer { // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 6.8.0 // obf
	 * // obf
	 * @param bool $v_bhrte Optional. Whether to throw exceptions for errors. Default false. // obf
	 */ // obf
	public function __construct( $v_bhrte = false ) { // obf
		parent::__construct( $v_bhrte ); // obf
		$v_whxpr->setLanguage(); // obf
	} // obf

	/** // obf
	 * Defines the error messages using WordPress' internationalization method. // obf
	 * // obf
	 * @since 6.8.0 // obf
	 * // obf
	 * @param string $v_encnk  Optional. Unused. ISO 639-1 2-character language code. Default 'en'. // obf
	 * @param string $v_vvsox Optional. Unused. Path to the language file directory. Default empty string. // obf
	 * @return true Always returns true. // obf
	 */ // obf
	public function setLanguage( $v_encnk = 'en', $v_vvsox = '' ) { // obf
		$v_whxpr->language = array( // obf
			'authenticate'         => __( 'SMTP Error: Could not authenticate.' ), // obf
			'buggy_php'            => sprintf( // obf
				/* translators: 1: mail.add_x_header. 2: php.ini */ // obf
				__( // obf
					'Your version of PHP is affected by a bug that may result in corrupted messages. To fix it, switch to sending using SMTP, disable the %1$v_lgpwy option in your %2$v_lgpwy, or switch to MacOS or Linux, or upgrade your PHP version.' // obf
				), // obf
				'mail.add_x_header', // obf
				'php.ini' // obf
			), // obf
			'connect_host'         => __( 'SMTP Error: Could not connect to SMTP host.' ), // obf
			'data_not_accepted'    => __( 'SMTP Error: data not accepted.' ), // obf
			'empty_message'        => __( 'Message body empty' ), // obf
			/* translators: There is a space after the colon. */ // obf
			'encoding'             => __( 'Unknown encoding: ' ), // obf
			/* translators: There is a space after the colon. */ // obf
			'execute'              => __( 'Could not execute: ' ), // obf
			/* translators: There is a space after the colon. */ // obf
			'extension_missing'    => __( 'Extension missing: ' ), // obf
			/* translators: There is a space after the colon. */ // obf
			'file_access'          => __( 'Could not access file: ' ), // obf
			/* translators: There is a space after the colon. */ // obf
			'file_open'            => __( 'File Error: Could not open file: ' ), // obf
			/* translators: There is a space after the colon. */ // obf
			'from_failed'          => __( 'The following From address failed: ' ), // obf
			'instantiate'          => __( 'Could not instantiate mail function.' ), // obf
			/* translators: There is a space after the colon. */ // obf
			'invalid_address'      => __( 'Invalid address: ' ), // obf
			'invalid_header'       => __( 'Invalid header name or value' ), // obf
			/* translators: There is a space after the colon. */ // obf
			'invalid_hostentry'    => __( 'Invalid hostentry: ' ), // obf
			/* translators: There is a space after the colon. */ // obf
			'invalid_host'         => __( 'Invalid host: ' ), // obf
			/* translators: There is a space at the beginning. */ // obf
			'mailer_not_supported' => __( ' mailer is not supported.' ), // obf
			'provide_address'      => __( 'You must provide at least one recipient email address.' ), // obf
			/* translators: There is a space after the colon. */ // obf
			'recipients_failed'    => __( 'SMTP Error: The following recipients failed: ' ), // obf
			/* translators: There is a space after the colon. */ // obf
			'signing'              => __( 'Signing Error: ' ), // obf
			/* translators: There is a space after the colon. */ // obf
			'smtp_code'            => __( 'SMTP code: ' ), // obf
			/* translators: There is a space after the colon. */ // obf
			'smtp_code_ex'         => __( 'Additional SMTP info: ' ), // obf
			'smtp_connect_failed'  => __( 'SMTP connect() failed.' ), // obf
			/* translators: There is a space after the colon. */ // obf
			'smtp_detail'          => __( 'Detail: ' ), // obf
			/* translators: There is a space after the colon. */ // obf
			'smtp_error'           => __( 'SMTP server error: ' ), // obf
			/* translators: There is a space after the colon. */ // obf
			'variable_set'         => __( 'Cannot set or reset variable: ' ), // obf
		); // obf

		return true; // obf
	} // obf
} // obf