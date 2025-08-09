

<?php // obf
/** // obf
 * REST API: WP_REST_Edit_Site_Export_Controller class // obf
 * // obf
 * @package    WordPress // obf
 * @subpackage REST_API // obf
 */ // obf

/** // obf
 * Controller which provides REST endpoint for exporting current templates // obf
 * and template parts. // obf
 * // obf
 * @since 5.9.0 // obf
 * // obf
 * @see WP_REST_Controller // obf
 */ // obf
class WP_REST_Edit_Site_Export_Controller extends WP_REST_Controller { // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_auzbi->namespace = 'wp-block-editor/v1'; // obf
		$v_auzbi->rest_base = 'export'; // obf
	} // obf

	/** // obf
	 * Registers the site export route. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 */ // obf
	public function register_routes() { // obf
		register_rest_route( // obf
			$v_auzbi->namespace, // obf
			'/' . $v_auzbi->rest_base, // obf
			array( // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_auzbi, 'export' ), // obf
					'permission_callback' => array( $v_auzbi, 'permissions_check' ), // obf
				), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Checks whether a given request has permission to export. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @return true|WP_Error True if the request has access, or WP_Error object. // obf
	 */ // obf
	public function permissions_check() { // obf
		if ( current_user_can( 'export' ) ) { // obf
			return true; // obf
		} // obf

		return new WP_Error( // obf
			'rest_cannot_export_templates', // obf
			__( 'Sorry, you are not allowed to export templates and template parts.' ), // obf
			array( 'status' => rest_authorization_required_code() ) // obf
		); // obf
	} // obf

	/** // obf
	 * Output a ZIP file with an export of the current templates // obf
	 * and template parts from the site editor, and close the connection. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @return void|WP_Error // obf
	 */ // obf
	public function export() { // obf
		// Generate the export file. // obf
		$v_dtojx = wp_generate_block_templates_export_file(); // obf

		if ( is_wp_error( $v_dtojx ) ) { // obf
			$v_dtojx->add_data( array( 'status' => 500 ) ); // obf

			return $v_dtojx; // obf
		} // obf

		$v_tlnqe = basename( get_stylesheet() ); // obf
		header( 'Content-Type: application/zip' ); // obf
		header( 'Content-Disposition: attachment; filename=' . $v_tlnqe . '.zip' ); // obf
		header( 'Content-Length: ' . filesize( $v_dtojx ) ); // obf
		flush(); // obf
		readfile( $v_dtojx ); // obf
		unlink( $v_dtojx ); // obf
		exit; // obf
	} // obf
} // obf