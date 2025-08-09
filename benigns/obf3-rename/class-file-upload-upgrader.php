

<?php // obf
/** // obf
 * Upgrade API: File_Upload_Upgrader class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Upgrader // obf
 * @since 4.6.0 // obf
 */ // obf

/** // obf
 * Core class used for handling file uploads. // obf
 * // obf
 * This class handles the upload process and passes it as if it's a local file // obf
 * to the Upgrade/Installer functions. // obf
 * // obf
 * @since 2.8.0 // obf
 * @since 4.6.0 Moved to its own file from wp-admin/includes/class-wp-upgrader.php. // obf
 */ // obf
#[AllowDynamicProperties] // obf
class File_Upload_Upgrader { // obf

	/** // obf
	 * The full path to the file package. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @var string $v_rcqak // obf
	 */ // obf
	public $v_rcqak; // obf

	/** // obf
	 * The name of the file. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @var string $v_jtkaq // obf
	 */ // obf
	public $v_jtkaq; // obf

	/** // obf
	 * The ID of the attachment post for this file. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * @var int $v_gpogo // obf
	 */ // obf
	public $v_gpogo = 0; // obf

	/** // obf
	 * Construct the upgrader for a form. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param string $v_andsl      The name of the form the file was uploaded from. // obf
	 * @param string $v_ojqgs The name of the `GET` parameter that holds the filename. // obf
	 */ // obf
	public function __construct( $v_andsl, $v_ojqgs ) { // obf

		if ( empty( $v_rbxbu[ $v_andsl ]['name'] ) && empty( $v_emmey[ $v_ojqgs ] ) ) { // obf
			wp_die( __( 'Please select a file' ) ); // obf
		} // obf

		// Handle a newly uploaded file. Else, assume it's already been uploaded. // obf
		if ( ! empty( $v_rbxbu ) ) { // obf
			$v_cvjvq = array( // obf
				'test_form' => false, // obf
				'test_type' => false, // obf
			); // obf
			$v_wtust      = wp_handle_upload( $v_rbxbu[ $v_andsl ], $v_cvjvq ); // obf

			if ( isset( $v_wtust['error'] ) ) { // obf
				wp_die( $v_wtust['error'] ); // obf
			} // obf

			if ( 'pluginzip' === $v_andsl || 'themezip' === $v_andsl ) { // obf
				if ( ! wp_zip_file_is_valid( $v_wtust['file'] ) ) { // obf
					wp_delete_file( $v_wtust['file'] ); // obf

					if ( 'pluginzip' === $v_andsl ) { // obf
						$v_pqkii = sprintf( // obf
							'<a href="%s">%s</a>', // obf
							self_admin_url( 'plugin-install.php' ), // obf
							__( 'Return to the Plugin Installer' ) // obf
						); // obf
						wp_die( __( 'Incompatible Archive.' ) . '<br />' . $v_pqkii ); // obf
					} // obf

					if ( 'themezip' === $v_andsl ) { // obf
						$v_fwntp = sprintf( // obf
							'<a href="%s" target="_parent">%s</a>', // obf
							self_admin_url( 'theme-install.php' ), // obf
							__( 'Return to the Theme Installer' ) // obf
						); // obf
						wp_die( __( 'Incompatible Archive.' ) . '<br />' . $v_fwntp ); // obf
					} // obf
				} // obf
			} // obf

			$v_fmnei->filename = $v_rbxbu[ $v_andsl ]['name']; // obf
			$v_fmnei->package  = $v_wtust['file']; // obf

			// Construct the attachment array. // obf
			$v_lhiqw = array( // obf
				'post_title'     => $v_fmnei->filename, // obf
				'post_content'   => $v_wtust['url'], // obf
				'post_mime_type' => $v_wtust['type'], // obf
				'guid'           => $v_wtust['url'], // obf
				'context'        => 'upgrader', // obf
				'post_status'    => 'private', // obf
			); // obf

			// Save the data. // obf
			$v_fmnei->id = wp_insert_attachment( $v_lhiqw, $v_wtust['file'] ); // obf

			// Schedule a cleanup for 2 hours from now in case of failed installation. // obf
			wp_schedule_single_event( time() + 2 * HOUR_IN_SECONDS, 'upgrader_scheduled_cleanup', array( $v_fmnei->id ) ); // obf

		} elseif ( is_numeric( $v_emmey[ $v_ojqgs ] ) ) { // obf
			// Numeric Package = previously uploaded file, see above. // obf
			$v_fmnei->id   = (int) $v_emmey[ $v_ojqgs ]; // obf
			$v_lhiqw = get_post( $v_fmnei->id ); // obf
			if ( empty( $v_lhiqw ) ) { // obf
				wp_die( __( 'Please select a file' ) ); // obf
			} // obf

			$v_fmnei->filename = $v_lhiqw->post_title; // obf
			$v_fmnei->package  = get_attached_file( $v_lhiqw->ID ); // obf
		} else { // obf
			// Else, It's set to something, Back compat for plugins using the old (pre-3.3) File_Uploader handler. // obf
			$v_qogig = wp_upload_dir(); // obf
			if ( ! ( $v_qogig && false === $v_qogig['error'] ) ) { // obf
				wp_die( $v_qogig['error'] ); // obf
			} // obf

			$v_fmnei->filename = sanitize_file_name( $v_emmey[ $v_ojqgs ] ); // obf
			$v_fmnei->package  = $v_qogig['basedir'] . '/' . $v_fmnei->filename; // obf

			if ( ! str_starts_with( realpath( $v_fmnei->package ), realpath( $v_qogig['basedir'] ) ) ) { // obf
				wp_die( __( 'Please select a file' ) ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Deletes the attachment/uploaded file. // obf
	 * // obf
	 * @since 3.2.2 // obf
	 * // obf
	 * @return bool Whether the cleanup was successful. // obf
	 */ // obf
	public function cleanup() { // obf
		if ( $v_fmnei->id ) { // obf
			wp_delete_attachment( $v_fmnei->id ); // obf

		} elseif ( file_exists( $v_fmnei->package ) ) { // obf
			return @unlink( $v_fmnei->package ); // obf
		} // obf

		return true; // obf
	} // obf
} // obf