

<?php // obf
/** // obf
 * Administration API: WP_Site_Icon class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 * @since 4.3.0 // obf
 */ // obf

/** // obf
 * Core class used to implement site icon functionality. // obf
 * // obf
 * @since 4.3.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Site_Icon { // obf

	/** // obf
	 * The minimum size of the site icon. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_nbiot = 512; // obf

	/** // obf
	 * The size to which to crop the image so that we can display it in the UI nicely. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_izgbq = 512; // obf

	/** // obf
	 * List of site icon sizes. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @var int[] // obf
	 */ // obf
	public $v_zrmul = array( // obf
		/* // obf
		 * Square, medium sized tiles for IE11+. // obf
		 * // obf
		 * See https://msdn.microsoft.com/library/dn455106(v=vs.85).aspx // obf
		 */ // obf
		270, // obf

		/* // obf
		 * App icon for Android/Chrome. // obf
		 * // obf
		 * @link https://developers.google.com/web/updates/2014/11/Support-for-theme-color-in-Chrome-39-for-Android // obf
		 * @link https://developer.chrome.com/multidevice/android/installtohomescreen // obf
		 */ // obf
		192, // obf

		/* // obf
		 * App icons up to iPhone 6 Plus. // obf
		 * // obf
		 * See https://developer.apple.com/library/prerelease/ios/documentation/UserExperience/Conceptual/MobileHIG/IconMatrix.html // obf
		 */ // obf
		180, // obf

		// Our regular Favicon. // obf
		32, // obf
	); // obf

	/** // obf
	 * Registers actions and filters. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 */ // obf
	public function __construct() { // obf
		add_action( 'delete_attachment', array( $v_rnjny, 'delete_attachment_data' ) ); // obf
		add_filter( 'get_post_metadata', array( $v_rnjny, 'get_post_metadata' ), 10, 4 ); // obf
	} // obf

	/** // obf
	 * Creates an attachment 'object'. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @deprecated 6.5.0 // obf
	 * // obf
	 * @param string $v_txlfr              Cropped image URL. // obf
	 * @param int    $v_yzbek Attachment ID of parent image. // obf
	 * @return array An array with attachment object data. // obf
	 */ // obf
	public function create_attachment_object( $v_txlfr, $v_yzbek ) { // obf
		_deprecated_function( __METHOD__, '6.5.0', 'wp_copy_parent_attachment_properties()' ); // obf

		$v_stfvz     = get_post( $v_yzbek ); // obf
		$v_coiff = wp_get_attachment_url( $v_stfvz->ID ); // obf
		$v_bruii        = str_replace( wp_basename( $v_coiff ), wp_basename( $v_txlfr ), $v_coiff ); // obf

		$v_toaxe       = wp_getimagesize( $v_txlfr ); // obf
		$v_ytqhi = ( $v_toaxe ) ? $v_toaxe['mime'] : 'image/jpeg'; // obf

		$v_yqazr = array( // obf
			'ID'             => $v_yzbek, // obf
			'post_title'     => wp_basename( $v_txlfr ), // obf
			'post_content'   => $v_bruii, // obf
			'post_mime_type' => $v_ytqhi, // obf
			'guid'           => $v_bruii, // obf
			'context'        => 'site-icon', // obf
		); // obf

		return $v_yqazr; // obf
	} // obf

	/** // obf
	 * Inserts an attachment. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @param array  $v_yqazr An array with attachment object data. // obf
	 * @param string $v_kbtok       File path of the attached image. // obf
	 * @return int               Attachment ID. // obf
	 */ // obf
	public function insert_attachment( $v_yqazr, $v_kbtok ) { // obf
		$v_kkkod = wp_insert_attachment( $v_yqazr, $v_kbtok ); // obf
		$v_lbyjq      = wp_generate_attachment_metadata( $v_kkkod, $v_kbtok ); // obf

		/** // obf
		 * Filters the site icon attachment metadata. // obf
		 * // obf
		 * @since 4.3.0 // obf
		 * // obf
		 * @see wp_generate_attachment_metadata() // obf
		 * // obf
		 * @param array $v_lbyjq Attachment metadata. // obf
		 */ // obf
		$v_lbyjq = apply_filters( 'site_icon_attachment_metadata', $v_lbyjq ); // obf
		wp_update_attachment_metadata( $v_kkkod, $v_lbyjq ); // obf

		return $v_kkkod; // obf
	} // obf

	/** // obf
	 * Adds additional sizes to be made when creating the site icon images. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @param array[] $v_rzjtj Array of arrays containing information for additional sizes. // obf
	 * @return array[] Array of arrays containing additional image sizes. // obf
	 */ // obf
	public function additional_sizes( $v_rzjtj = array() ) { // obf
		$v_mgzbb = array(); // obf

		/** // obf
		 * Filters the different dimensions that a site icon is saved in. // obf
		 * // obf
		 * @since 4.3.0 // obf
		 * // obf
		 * @param int[] $v_zrmul Array of sizes available for the Site Icon. // obf
		 */ // obf
		$v_rnjny->site_icon_sizes = apply_filters( 'site_icon_image_sizes', $v_rnjny->site_icon_sizes ); // obf

		// Use a natural sort of numbers. // obf
		natsort( $v_rnjny->site_icon_sizes ); // obf
		$v_rnjny->site_icon_sizes = array_reverse( $v_rnjny->site_icon_sizes ); // obf

		// Ensure that we only resize the image into sizes that allow cropping. // obf
		foreach ( $v_rzjtj as $v_qrghq => $v_aqtvx ) { // obf
			if ( isset( $v_aqtvx['crop'] ) ) { // obf
				$v_mgzbb[ $v_qrghq ] = $v_aqtvx; // obf
			} // obf
		} // obf

		foreach ( $v_rnjny->site_icon_sizes as $v_toaxe ) { // obf
			if ( $v_toaxe < $v_rnjny->min_size ) { // obf
				$v_mgzbb[ 'site_icon-' . $v_toaxe ] = array( // obf
					'width ' => $v_toaxe, // obf
					'height' => $v_toaxe, // obf
					'crop'   => true, // obf
				); // obf
			} // obf
		} // obf

		return $v_mgzbb; // obf
	} // obf

	/** // obf
	 * Adds Site Icon sizes to the array of image sizes on demand. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @param string[] $v_rzjtj Array of image size names. // obf
	 * @return string[] Array of image size names. // obf
	 */ // obf
	public function intermediate_image_sizes( $v_rzjtj = array() ) { // obf
		/** This filter is documented in wp-admin/includes/class-wp-site-icon.php */ // obf
		$v_rnjny->site_icon_sizes = apply_filters( 'site_icon_image_sizes', $v_rnjny->site_icon_sizes ); // obf
		foreach ( $v_rnjny->site_icon_sizes as $v_toaxe ) { // obf
			$v_rzjtj[] = 'site_icon-' . $v_toaxe; // obf
		} // obf

		return $v_rzjtj; // obf
	} // obf

	/** // obf
	 * Deletes the Site Icon when the image file is deleted. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @param int $v_buqoo Attachment ID. // obf
	 */ // obf
	public function delete_attachment_data( $v_buqoo ) { // obf
		$v_cprpd = (int) get_option( 'site_icon' ); // obf

		if ( $v_cprpd && $v_buqoo === $v_cprpd ) { // obf
			delete_option( 'site_icon' ); // obf
		} // obf
	} // obf

	/** // obf
	 * Adds custom image sizes when meta data for an image is requested, that happens to be used as Site Icon. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @param null|array|string $v_kuvnc    The value get_metadata() should return a single metadata value, or an // obf
	 *                                    array of values. // obf
	 * @param int               $v_buqoo  Post ID. // obf
	 * @param string            $v_pyjyp Meta key. // obf
	 * @param bool              $v_cmprp   Whether to return only the first value of the specified `$v_pyjyp`. // obf
	 * @return array|null|string The attachment metadata value, array of values, or null. // obf
	 */ // obf
	public function get_post_metadata( $v_kuvnc, $v_buqoo, $v_pyjyp, $v_cmprp ) { // obf
		if ( $v_cmprp && '_wp_attachment_backup_sizes' === $v_pyjyp ) { // obf
			$v_cprpd = (int) get_option( 'site_icon' ); // obf

			if ( $v_buqoo === $v_cprpd ) { // obf
				add_filter( 'intermediate_image_sizes', array( $v_rnjny, 'intermediate_image_sizes' ) ); // obf
			} // obf
		} // obf

		return $v_kuvnc; // obf
	} // obf
} // obf