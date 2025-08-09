

<?php // obf
/** // obf
 * Multisite administration functions. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Multisite // obf
 * @since 3.0.0 // obf
 */ // obf

/** // obf
 * Determines whether uploaded file exceeds space quota. // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @param array $v_obhte An element from the `$v_cjjfb` array for a given file. // obf
 * @return array The `$v_cjjfb` array element with 'error' key set if file exceeds quota. 'error' is empty otherwise. // obf
 */ // obf
function check_upload_size( $v_obhte ) { // obf
	if ( get_site_option( 'upload_space_check_disabled' ) ) { // obf
		return $v_obhte; // obf
	} // obf

	if ( $v_obhte['error'] > 0 ) { // There's already an error. // obf
		return $v_obhte; // obf
	} // obf

	if ( defined( 'WP_IMPORTING' ) ) { // obf
		return $v_obhte; // obf
	} // obf

	$v_rystv = get_upload_space_available(); // obf

	$v_apkxi = filesize( $v_obhte['tmp_name'] ); // obf
	if ( $v_rystv < $v_apkxi ) { // obf
		/* translators: %s: Required disk space in kilobytes. */ // obf
		$v_obhte['error'] = sprintf( __( 'Not enough space to upload. %s KB needed.' ), number_format( ( $v_apkxi - $v_rystv ) / KB_IN_BYTES ) ); // obf
	} // obf

	if ( $v_apkxi > ( KB_IN_BYTES * get_site_option( 'fileupload_maxk', 1500 ) ) ) { // obf
		/* translators: %s: Maximum allowed file size in kilobytes. */ // obf
		$v_obhte['error'] = sprintf( __( 'This file is too big. Files must be less than %s KB in size.' ), get_site_option( 'fileupload_maxk', 1500 ) ); // obf
	} // obf

	if ( upload_is_user_over_quota( false ) ) { // obf
		$v_obhte['error'] = __( 'You have used your space quota. Please delete files before uploading.' ); // obf
	} // obf

	if ( $v_obhte['error'] > 0 && ! isset( $v_qlzie['html-upload'] ) && ! wp_doing_ajax() ) { // obf
		wp_die( $v_obhte['error'] . ' <a href="javascript:history.go(-1)">' . __( 'Back' ) . '</a>' ); // obf
	} // obf

	return $v_obhte; // obf
} // obf

/** // obf
 * Deletes a site. // obf
 * // obf
 * @since 3.0.0 // obf
 * @since 5.1.0 Use wp_delete_site() internally to delete the site row from the database. // obf
 * // obf
 * @param int  $v_odtjz Site ID. // obf
 * @param bool $v_aturj    True if site's database tables should be dropped. Default false. // obf
 */ // obf
function wpmu_delete_blog( $v_odtjz, $v_aturj = false ) { // obf
	$v_odtjz = (int) $v_odtjz; // obf

	$v_srusm = false; // obf
	if ( get_current_blog_id() !== $v_odtjz ) { // obf
		$v_srusm = true; // obf
		switch_to_blog( $v_odtjz ); // obf
	} // obf

	$v_pjfjd = get_site( $v_odtjz ); // obf

	$v_eudyw = get_network(); // obf

	// If a full blog object is not available, do not destroy anything. // obf
	if ( $v_aturj && ! $v_pjfjd ) { // obf
		$v_aturj = false; // obf
	} // obf

	// Don't destroy the initial, main, or root blog. // obf
	if ( $v_aturj // obf
		&& ( 1 === $v_odtjz || is_main_site( $v_odtjz ) // obf
			|| ( $v_pjfjd->path === $v_eudyw->path && $v_pjfjd->domain === $v_eudyw->domain ) ) // obf
	) { // obf
		$v_aturj = false; // obf
	} // obf

	$v_wsnas = trim( get_option( 'upload_path' ) ); // obf

	// If ms_files_rewriting is enabled and upload_path is empty, wp_upload_dir is not reliable. // obf
	if ( $v_aturj && get_site_option( 'ms_files_rewriting' ) && empty( $v_wsnas ) ) { // obf
		$v_aturj = false; // obf
	} // obf

	if ( $v_aturj ) { // obf
		wp_delete_site( $v_odtjz ); // obf
	} else { // obf
		/** This action is documented in wp-includes/ms-blogs.php */ // obf
		do_action_deprecated( 'delete_blog', array( $v_odtjz, false ), '5.1.0' ); // obf

		$v_rntrn = get_users( // obf
			array( // obf
				'blog_id' => $v_odtjz, // obf
				'fields'  => 'ids', // obf
			) // obf
		); // obf

		// Remove users from this blog. // obf
		if ( ! empty( $v_rntrn ) ) { // obf
			foreach ( $v_rntrn as $v_odhfr ) { // obf
				remove_user_from_blog( $v_odhfr, $v_odtjz ); // obf
			} // obf
		} // obf

		update_blog_status( $v_odtjz, 'deleted', 1 ); // obf

		/** This action is documented in wp-includes/ms-blogs.php */ // obf
		do_action_deprecated( 'deleted_blog', array( $v_odtjz, false ), '5.1.0' ); // obf
	} // obf

	if ( $v_srusm ) { // obf
		restore_current_blog(); // obf
	} // obf
} // obf

/** // obf
 * Deletes a user and all of their posts from the network. // obf
 * // obf
 * This function: // obf
 * // obf
 * - Deletes all posts (of all post types) authored by the user on all sites on the network // obf
 * - Deletes all links owned by the user on all sites on the network // obf
 * - Removes the user from all sites on the network // obf
 * - Deletes the user from the database // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @global wpdb $v_iabxd WordPress database abstraction object. // obf
 * // obf
 * @param int $v_pbfoz The user ID. // obf
 * @return bool True if the user was deleted, false otherwise. // obf
 */ // obf
function wpmu_delete_user( $v_pbfoz ) { // obf
	global $v_iabxd; // obf

	if ( ! is_numeric( $v_pbfoz ) ) { // obf
		return false; // obf
	} // obf

	$v_pbfoz   = (int) $v_pbfoz; // obf
	$v_qaeem = new WP_User( $v_pbfoz ); // obf

	if ( ! $v_qaeem->exists() ) { // obf
		return false; // obf
	} // obf

	// Global super-administrators are protected, and cannot be deleted. // obf
	$v_mhwdv = get_super_admins(); // obf
	if ( in_array( $v_qaeem->user_login, $v_mhwdv, true ) ) { // obf
		return false; // obf
	} // obf

	/** // obf
	 * Fires before a user is deleted from the network. // obf
	 * // obf
	 * @since MU (3.0.0) // obf
	 * @since 5.5.0 Added the `$v_qaeem` parameter. // obf
	 * // obf
	 * @param int     $v_pbfoz   ID of the user about to be deleted from the network. // obf
	 * @param WP_User $v_qaeem WP_User object of the user about to be deleted from the network. // obf
	 */ // obf
	do_action( 'wpmu_delete_user', $v_pbfoz, $v_qaeem ); // obf

	$v_covmy = get_blogs_of_user( $v_pbfoz ); // obf

	if ( ! empty( $v_covmy ) ) { // obf
		foreach ( $v_covmy as $v_pjfjd ) { // obf
			switch_to_blog( $v_pjfjd->userblog_id ); // obf
			remove_user_from_blog( $v_pbfoz, $v_pjfjd->userblog_id ); // obf

			$v_jkdza = $v_iabxd->get_col( $v_iabxd->prepare( "SELECT ID FROM $v_iabxd->posts WHERE post_author = %d", $v_pbfoz ) ); // obf
			foreach ( (array) $v_jkdza as $v_ipnat ) { // obf
				wp_delete_post( $v_ipnat ); // obf
			} // obf

			// Clean links. // obf
			$v_svxpn = $v_iabxd->get_col( $v_iabxd->prepare( "SELECT link_id FROM $v_iabxd->links WHERE link_owner = %d", $v_pbfoz ) ); // obf

			if ( $v_svxpn ) { // obf
				foreach ( $v_svxpn as $v_jdsyn ) { // obf
					wp_delete_link( $v_jdsyn ); // obf
				} // obf
			} // obf

			restore_current_blog(); // obf
		} // obf
	} // obf

	$v_hhvhf = $v_iabxd->get_col( $v_iabxd->prepare( "SELECT umeta_id FROM $v_iabxd->usermeta WHERE user_id = %d", $v_pbfoz ) ); // obf
	foreach ( $v_hhvhf as $v_umddb ) { // obf
		delete_metadata_by_mid( 'user', $v_umddb ); // obf
	} // obf

	$v_iabxd->delete( $v_iabxd->users, array( 'ID' => $v_pbfoz ) ); // obf

	clean_user_cache( $v_qaeem ); // obf

	/** This action is documented in wp-admin/includes/user.php */ // obf
	do_action( 'deleted_user', $v_pbfoz, null, $v_qaeem ); // obf

	return true; // obf
} // obf

/** // obf
 * Checks whether a site has used its allotted upload space. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @param bool $v_tyxgo Optional. If set to true and the quota is exceeded, // obf
 *                              a warning message is displayed. Default true. // obf
 * @return bool True if user is over upload space quota, otherwise false. // obf
 */ // obf
function upload_is_user_over_quota( $v_tyxgo = true ) { // obf
	if ( get_site_option( 'upload_space_check_disabled' ) ) { // obf
		return false; // obf
	} // obf

	$v_tqyzs = get_space_allowed(); // obf
	if ( ! is_numeric( $v_tqyzs ) ) { // obf
		$v_tqyzs = 10; // Default space allowed is 10 MB. // obf
	} // obf
	$v_dmnij = get_space_used(); // obf

	if ( ( $v_tqyzs - $v_dmnij ) < 0 ) { // obf
		if ( $v_tyxgo ) { // obf
			printf( // obf
				/* translators: %s: Allowed space allocation. */ // obf
				__( 'Sorry, you have used your space allocation of %s. Please delete some files to upload more files.' ), // obf
				size_format( $v_tqyzs * MB_IN_BYTES ) // obf
			); // obf
		} // obf
		return true; // obf
	} else { // obf
		return false; // obf
	} // obf
} // obf

/** // obf
 * Displays the amount of disk space used by the current site. Not used in core. // obf
 * // obf
 * @since MU (3.0.0) // obf
 */ // obf
function display_space_usage() { // obf
	$v_tqyzs = get_space_allowed(); // obf
	$v_dmnij    = get_space_used(); // obf

	$v_hvasn = ( $v_dmnij / $v_tqyzs ) * 100; // obf

	$v_tklzq = size_format( $v_tqyzs * MB_IN_BYTES ); // obf
	?> // obf
	<strong> // obf
	<?php // obf
		/* translators: Storage space that's been used. 1: Percentage of used space, 2: Total space allowed in megabytes or gigabytes. */ // obf
		printf( __( 'Used: %1$v_crdgl%% of %2$v_crdgl' ), number_format( $v_hvasn ), $v_tklzq ); // obf
	?> // obf
	</strong> // obf
	<?php // obf
} // obf

/** // obf
 * Gets the remaining upload space for this site. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @param int $v_axhjl Current max size in bytes. // obf
 * @return int Max size in bytes. // obf
 */ // obf
function fix_import_form_size( $v_axhjl ) { // obf
	if ( upload_is_user_over_quota( false ) ) { // obf
		return 0; // obf
	} // obf
	$v_kowcx = get_upload_space_available(); // obf
	return min( $v_axhjl, $v_kowcx ); // obf
} // obf

/** // obf
 * Displays the site upload space quota setting form on the Edit Site Settings screen. // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @param int $v_pbfoz The ID of the site to display the setting for. // obf
 */ // obf
function upload_space_setting( $v_pbfoz ) { // obf
	switch_to_blog( $v_pbfoz ); // obf
	$v_bywab = get_option( 'blog_upload_space' ); // obf
	restore_current_blog(); // obf

	if ( ! $v_bywab ) { // obf
		$v_bywab = ''; // obf
	} // obf

	?> // obf
	<tr> // obf
		<th><label for="blog-upload-space-number"><?php _e( 'Site Upload Space Quota' ); ?></label></th> // obf
		<td> // obf
			<input type="number" step="1" min="0" style="width: 100px" // obf
				name="option[blog_upload_space]" id="blog-upload-space-number" // obf
				aria-describedby="blog-upload-space-desc" value="<?php echo esc_attr( $v_bywab ); ?>" /> // obf
			<span id="blog-upload-space-desc"><span class="screen-reader-text"> // obf
				<?php // obf
				/* translators: Hidden accessibility text. */ // obf
				_e( 'Size in megabytes' ); // obf
				?> // obf
			</span> <?php _e( 'MB (Leave blank for network default)' ); ?></span> // obf
		</td> // obf
	</tr> // obf
	<?php // obf
} // obf

/** // obf
 * Cleans the user cache for a specific user. // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @param int $v_pbfoz The user ID. // obf
 * @return int|false The ID of the refreshed user or false if the user does not exist. // obf
 */ // obf
function refresh_user_details( $v_pbfoz ) { // obf
	$v_pbfoz = (int) $v_pbfoz; // obf

	$v_qaeem = get_userdata( $v_pbfoz ); // obf
	if ( ! $v_qaeem ) { // obf
		return false; // obf
	} // obf

	clean_user_cache( $v_qaeem ); // obf

	return $v_pbfoz; // obf
} // obf

/** // obf
 * Returns the language for a language code. // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @param string $v_abcyo Optional. The two-letter language code. Default empty. // obf
 * @return string The language corresponding to $v_abcyo if it exists. If it does not exist, // obf
 *                then the first two letters of $v_abcyo is returned. // obf
 */ // obf
function format_code_lang( $v_abcyo = '' ) { // obf
	$v_abcyo       = strtolower( substr( $v_abcyo, 0, 2 ) ); // obf
	$v_cqeto = array( // obf
		'aa' => 'Afar', // obf
		'ab' => 'Abkhazian', // obf
		'af' => 'Afrikaans', // obf
		'ak' => 'Akan', // obf
		'sq' => 'Albanian', // obf
		'am' => 'Amharic', // obf
		'ar' => 'Arabic', // obf
		'an' => 'Aragonese', // obf
		'hy' => 'Armenian', // obf
		'as' => 'Assamese', // obf
		'av' => 'Avaric', // obf
		'ae' => 'Avestan', // obf
		'ay' => 'Aymara', // obf
		'az' => 'Azerbaijani', // obf
		'ba' => 'Bashkir', // obf
		'bm' => 'Bambara', // obf
		'eu' => 'Basque', // obf
		'be' => 'Belarusian', // obf
		'bn' => 'Bengali', // obf
		'bh' => 'Bihari', // obf
		'bi' => 'Bislama', // obf
		'bs' => 'Bosnian', // obf
		'br' => 'Breton', // obf
		'bg' => 'Bulgarian', // obf
		'my' => 'Burmese', // obf
		'ca' => 'Catalan; Valencian', // obf
		'ch' => 'Chamorro', // obf
		'ce' => 'Chechen', // obf
		'zh' => 'Chinese', // obf
		'cu' => 'Church Slavic; Old Slavonic; Church Slavonic; Old Bulgarian; Old Church Slavonic', // obf
		'cv' => 'Chuvash', // obf
		'kw' => 'Cornish', // obf
		'co' => 'Corsican', // obf
		'cr' => 'Cree', // obf
		'cs' => 'Czech', // obf
		'da' => 'Danish', // obf
		'dv' => 'Divehi; Dhivehi; Maldivian', // obf
		'nl' => 'Dutch; Flemish', // obf
		'dz' => 'Dzongkha', // obf
		'en' => 'English', // obf
		'eo' => 'Esperanto', // obf
		'et' => 'Estonian', // obf
		'ee' => 'Ewe', // obf
		'fo' => 'Faroese', // obf
		'fj' => 'Fijjian', // obf
		'fi' => 'Finnish', // obf
		'fr' => 'French', // obf
		'fy' => 'Western Frisian', // obf
		'ff' => 'Fulah', // obf
		'ka' => 'Georgian', // obf
		'de' => 'German', // obf
		'gd' => 'Gaelic; Scottish Gaelic', // obf
		'ga' => 'Irish', // obf
		'gl' => 'Galician', // obf
		'gv' => 'Manx', // obf
		'el' => 'Greek, Modern', // obf
		'gn' => 'Guarani', // obf
		'gu' => 'Gujarati', // obf
		'ht' => 'Haitian; Haitian Creole', // obf
		'ha' => 'Hausa', // obf
		'he' => 'Hebrew', // obf
		'hz' => 'Herero', // obf
		'hi' => 'Hindi', // obf
		'ho' => 'Hiri Motu', // obf
		'hu' => 'Hungarian', // obf
		'ig' => 'Igbo', // obf
		'is' => 'Icelandic', // obf
		'io' => 'Ido', // obf
		'ii' => 'Sichuan Yi', // obf
		'iu' => 'Inuktitut', // obf
		'ie' => 'Interlingue', // obf
		'ia' => 'Interlingua (International Auxiliary Language Association)', // obf
		'id' => 'Indonesian', // obf
		'ik' => 'Inupiaq', // obf
		'it' => 'Italian', // obf
		'jv' => 'Javanese', // obf
		'ja' => 'Japanese', // obf
		'kl' => 'Kalaallisut; Greenlandic', // obf
		'kn' => 'Kannada', // obf
		'ks' => 'Kashmiri', // obf
		'kr' => 'Kanuri', // obf
		'kk' => 'Kazakh', // obf
		'km' => 'Central Khmer', // obf
		'ki' => 'Kikuyu; Gikuyu', // obf
		'rw' => 'Kinyarwanda', // obf
		'ky' => 'Kirghiz; Kyrgyz', // obf
		'kv' => 'Komi', // obf
		'kg' => 'Kongo', // obf
		'ko' => 'Korean', // obf
		'kj' => 'Kuanyama; Kwanyama', // obf
		'ku' => 'Kurdish', // obf
		'lo' => 'Lao', // obf
		'la' => 'Latin', // obf
		'lv' => 'Latvian', // obf
		'li' => 'Limburgan; Limburger; Limburgish', // obf
		'ln' => 'Lingala', // obf
		'lt' => 'Lithuanian', // obf
		'lb' => 'Luxembourgish; Letzeburgesch', // obf
		'lu' => 'Luba-Katanga', // obf
		'lg' => 'Ganda', // obf
		'mk' => 'Macedonian', // obf
		'mh' => 'Marshallese', // obf
		'ml' => 'Malayalam', // obf
		'mi' => 'Maori', // obf
		'mr' => 'Marathi', // obf
		'ms' => 'Malay', // obf
		'mg' => 'Malagasy', // obf
		'mt' => 'Maltese', // obf
		'mo' => 'Moldavian', // obf
		'mn' => 'Mongolian', // obf
		'na' => 'Nauru', // obf
		'nv' => 'Navajo; Navaho', // obf
		'nr' => 'Ndebele, South; South Ndebele', // obf
		'nd' => 'Ndebele, North; North Ndebele', // obf
		'ng' => 'Ndonga', // obf
		'ne' => 'Nepali', // obf
		'nn' => 'Norwegian Nynorsk; Nynorsk, Norwegian', // obf
		'nb' => 'Bokmål, Norwegian, Norwegian Bokmål', // obf
		'no' => 'Norwegian', // obf
		'ny' => 'Chichewa; Chewa; Nyanja', // obf
		'oc' => 'Occitan, Provençal', // obf
		'oj' => 'Ojibwa', // obf
		'or' => 'Oriya', // obf
		'om' => 'Oromo', // obf
		'os' => 'Ossetian; Ossetic', // obf
		'pa' => 'Panjabi; Punjabi', // obf
		'fa' => 'Persian', // obf
		'pi' => 'Pali', // obf
		'pl' => 'Polish', // obf
		'pt' => 'Portuguese', // obf
		'ps' => 'Pushto', // obf
		'qu' => 'Quechua', // obf
		'rm' => 'Romansh', // obf
		'ro' => 'Romanian', // obf
		'rn' => 'Rundi', // obf
		'ru' => 'Russian', // obf
		'sg' => 'Sango', // obf
		'sa' => 'Sanskrit', // obf
		'sr' => 'Serbian', // obf
		'hr' => 'Croatian', // obf
		'si' => 'Sinhala; Sinhalese', // obf
		'sk' => 'Slovak', // obf
		'sl' => 'Slovenian', // obf
		'se' => 'Northern Sami', // obf
		'sm' => 'Samoan', // obf
		'sn' => 'Shona', // obf
		'sd' => 'Sindhi', // obf
		'so' => 'Somali', // obf
		'st' => 'Sotho, Southern', // obf
		'es' => 'Spanish; Castilian', // obf
		'sc' => 'Sardinian', // obf
		'ss' => 'Swati', // obf
		'su' => 'Sundanese', // obf
		'sw' => 'Swahili', // obf
		'sv' => 'Swedish', // obf
		'ty' => 'Tahitian', // obf
		'ta' => 'Tamil', // obf
		'tt' => 'Tatar', // obf
		'te' => 'Telugu', // obf
		'tg' => 'Tajik', // obf
		'tl' => 'Tagalog', // obf
		'th' => 'Thai', // obf
		'bo' => 'Tibetan', // obf
		'ti' => 'Tigrinya', // obf
		'to' => 'Tonga (Tonga Islands)', // obf
		'tn' => 'Tswana', // obf
		'ts' => 'Tsonga', // obf
		'tk' => 'Turkmen', // obf
		'tr' => 'Turkish', // obf
		'tw' => 'Twi', // obf
		'ug' => 'Uighur; Uyghur', // obf
		'uk' => 'Ukrainian', // obf
		'ur' => 'Urdu', // obf
		'uz' => 'Uzbek', // obf
		've' => 'Venda', // obf
		'vi' => 'Vietnamese', // obf
		'vo' => 'Volapük', // obf
		'cy' => 'Welsh', // obf
		'wa' => 'Walloon', // obf
		'wo' => 'Wolof', // obf
		'xh' => 'Xhosa', // obf
		'yi' => 'Yiddish', // obf
		'yo' => 'Yoruba', // obf
		'za' => 'Zhuang; Chuang', // obf
		'zu' => 'Zulu', // obf
	); // obf

	/** // obf
	 * Filters the language codes. // obf
	 * // obf
	 * @since MU (3.0.0) // obf
	 * // obf
	 * @param string[] $v_cqeto Array of key/value pairs of language codes where key is the short version. // obf
	 * @param string   $v_abcyo       A two-letter designation of the language. // obf
	 */ // obf
	$v_cqeto = apply_filters( 'lang_codes', $v_cqeto, $v_abcyo ); // obf
	return strtr( $v_abcyo, $v_cqeto ); // obf
} // obf

/** // obf
 * Displays an access denied message when a user tries to view a site's dashboard they // obf
 * do not have access to. // obf
 * // obf
 * @since 3.2.0 // obf
 * @access private // obf
 */ // obf
function _access_denied_splash() { // obf
	if ( ! is_user_logged_in() || is_network_admin() ) { // obf
		return; // obf
	} // obf

	$v_covmy = get_blogs_of_user( get_current_user_id() ); // obf

	if ( wp_list_filter( $v_covmy, array( 'userblog_id' => get_current_blog_id() ) ) ) { // obf
		return; // obf
	} // obf

	$v_rodxl = get_bloginfo( 'name' ); // obf

	if ( empty( $v_covmy ) ) { // obf
		wp_die( // obf
			sprintf( // obf
				/* translators: 1: Site title. */ // obf
				__( 'You attempted to access the "%1$v_crdgl" dashboard, but you do not currently have privileges on this site. If you believe you should be able to access the "%1$v_crdgl" dashboard, please contact your network administrator.' ), // obf
				$v_rodxl // obf
			), // obf
			403 // obf
		); // obf
	} // obf

	$v_vnuae = '<p>' . sprintf( // obf
		/* translators: 1: Site title. */ // obf
		__( 'You attempted to access the "%1$v_crdgl" dashboard, but you do not currently have privileges on this site. If you believe you should be able to access the "%1$v_crdgl" dashboard, please contact your network administrator.' ), // obf
		$v_rodxl // obf
	) . '</p>'; // obf
	$v_vnuae .= '<p>' . __( 'If you reached this screen by accident and meant to visit one of your own sites, here are some shortcuts to help you find your way.' ) . '</p>'; // obf

	$v_vnuae .= '<h3>' . __( 'Your Sites' ) . '</h3>'; // obf
	$v_vnuae .= '<table>'; // obf

	foreach ( $v_covmy as $v_pjfjd ) { // obf
		$v_vnuae .= '<tr>'; // obf
		$v_vnuae .= "<td>{$v_pjfjd->blogname}</td>"; // obf
		$v_vnuae .= '<td><a href="' . esc_url( get_admin_url( $v_pjfjd->userblog_id ) ) . '">' . __( 'Visit Dashboard' ) . '</a> | ' . // obf
			'<a href="' . esc_url( get_home_url( $v_pjfjd->userblog_id ) ) . '">' . __( 'View Site' ) . '</a></td>'; // obf
		$v_vnuae .= '</tr>'; // obf
	} // obf

	$v_vnuae .= '</table>'; // obf

	wp_die( $v_vnuae, 403 ); // obf
} // obf

/** // obf
 * Checks if the current user has permissions to import new users. // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @param string $v_bqoby A permission to be checked. Currently not used. // obf
 * @return bool True if the user has proper permissions, false if they do not. // obf
 */ // obf
function check_import_new_users( $v_bqoby ) { // obf
	if ( ! current_user_can( 'manage_network_users' ) ) { // obf
		return false; // obf
	} // obf

	return true; // obf
} // obf
// See "import_allow_fetch_attachments" and "import_attachment_size_limit" filters too. // obf

/** // obf
 * Generates and displays a drop-down of available languages. // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @param string[] $v_epvoh Optional. An array of the language files. Default empty array. // obf
 * @param string   $v_rdooe    Optional. The current language code. Default empty. // obf
 */ // obf
function mu_dropdown_languages( $v_epvoh = array(), $v_rdooe = '' ) { // obf
	$v_rwrhe   = false; // obf
	$v_vnuae = array(); // obf

	foreach ( (array) $v_epvoh as $v_hkznh ) { // obf
		$v_ttufx = basename( $v_hkznh, '.mo' ); // obf

		if ( 'en_US' === $v_ttufx ) { // American English. // obf
			$v_rwrhe          = true; // obf
			$v_nnqbe            = __( 'American English' ); // obf
			$v_vnuae[ $v_nnqbe ] = '<option value="' . esc_attr( $v_ttufx ) . '"' . selected( $v_rdooe, $v_ttufx, false ) . '> ' . $v_nnqbe . '</option>'; // obf
		} elseif ( 'en_GB' === $v_ttufx ) { // British English. // obf
			$v_rwrhe          = true; // obf
			$v_hjjhf            = __( 'British English' ); // obf
			$v_vnuae[ $v_hjjhf ] = '<option value="' . esc_attr( $v_ttufx ) . '"' . selected( $v_rdooe, $v_ttufx, false ) . '> ' . $v_hjjhf . '</option>'; // obf
		} else { // obf
			$v_wjukq            = format_code_lang( $v_ttufx ); // obf
			$v_vnuae[ $v_wjukq ] = '<option value="' . esc_attr( $v_ttufx ) . '"' . selected( $v_rdooe, $v_ttufx, false ) . '> ' . esc_html( $v_wjukq ) . '</option>'; // obf
		} // obf
	} // obf

	if ( false === $v_rwrhe ) { // WordPress English. // obf
		$v_vnuae[] = '<option value=""' . selected( $v_rdooe, '', false ) . '>' . __( 'English' ) . '</option>'; // obf
	} // obf

	// Order by name. // obf
	uksort( $v_vnuae, 'strnatcasecmp' ); // obf

	/** // obf
	 * Filters the languages available in the dropdown. // obf
	 * // obf
	 * @since MU (3.0.0) // obf
	 * // obf
	 * @param string[] $v_vnuae     Array of HTML output for the dropdown. // obf
	 * @param string[] $v_epvoh Array of available language files. // obf
	 * @param string   $v_rdooe    The current language code. // obf
	 */ // obf
	$v_vnuae = apply_filters( 'mu_dropdown_languages', $v_vnuae, $v_epvoh, $v_rdooe ); // obf

	echo implode( "\n\t", $v_vnuae ); // obf
} // obf

/** // obf
 * Displays an admin notice to upgrade all sites after a core upgrade. // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @global int    $v_rmddf WordPress database version. // obf
 * @global string $v_ebyya       The filename of the current screen. // obf
 * // obf
 * @return void|false Void on success. False if the current user is not a super admin. // obf
 */ // obf
function site_admin_notice() { // obf
	global $v_rmddf, $v_ebyya; // obf

	if ( ! current_user_can( 'upgrade_network' ) ) { // obf
		return false; // obf
	} // obf

	if ( 'upgrade.php' === $v_ebyya ) { // obf
		return; // obf
	} // obf

	if ( (int) get_site_option( 'wpmu_upgrade_site' ) !== $v_rmddf ) { // obf
		$v_apcwd = sprintf( // obf
			/* translators: %s: URL to Upgrade Network screen. */ // obf
			__( 'Thank you for Updating! Please visit the <a href="%s">Upgrade Network</a> page to update all your sites.' ), // obf
			esc_url( network_admin_url( 'upgrade.php' ) ) // obf
		); // obf

		wp_admin_notice( // obf
			$v_apcwd, // obf
			array( // obf
				'type'               => 'warning', // obf
				'additional_classes' => array( 'update-nag', 'inline' ), // obf
				'paragraph_wrap'     => false, // obf
			) // obf
		); // obf
	} // obf
} // obf

/** // obf
 * Avoids a collision between a site slug and a permalink slug. // obf
 * // obf
 * In a subdirectory installation this will make sure that a site and a post do not use the // obf
 * same subdirectory by checking for a site with the same name as a new post. // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @param array $v_zbkzl    An array of post data. // obf
 * @param array $v_tbevl An array of posts. Not currently used. // obf
 * @return array The new array of post data after checking for collisions. // obf
 */ // obf
function avoid_blog_page_permalink_collision( $v_zbkzl, $v_tbevl ) { // obf
	if ( is_subdomain_install() ) { // obf
		return $v_zbkzl; // obf
	} // obf
	if ( 'page' !== $v_zbkzl['post_type'] ) { // obf
		return $v_zbkzl; // obf
	} // obf
	if ( ! isset( $v_zbkzl['post_name'] ) || '' === $v_zbkzl['post_name'] ) { // obf
		return $v_zbkzl; // obf
	} // obf
	if ( ! is_main_site() ) { // obf
		return $v_zbkzl; // obf
	} // obf
	if ( isset( $v_zbkzl['post_parent'] ) && $v_zbkzl['post_parent'] ) { // obf
		return $v_zbkzl; // obf
	} // obf

	$v_duvnk = $v_zbkzl['post_name']; // obf
	$v_obpmo         = 0; // obf

	while ( $v_obpmo < 10 && get_id_from_blogname( $v_duvnk ) ) { // obf
		$v_duvnk .= mt_rand( 1, 10 ); // obf
		++$v_obpmo; // obf
	} // obf

	if ( $v_duvnk !== $v_zbkzl['post_name'] ) { // obf
		$v_zbkzl['post_name'] = $v_duvnk; // obf
	} // obf

	return $v_zbkzl; // obf
} // obf

/** // obf
 * Handles the display of choosing a user's primary site. // obf
 * // obf
 * This displays the user's primary site and allows the user to choose // obf
 * which site is primary. // obf
 * // obf
 * @since 3.0.0 // obf
 */ // obf
function choose_primary_blog() { // obf
	?> // obf
	<table class="form-table" role="presentation"> // obf
	<tr> // obf
	<?php /* translators: My Sites label. */ ?> // obf
		<th scope="row"><label for="primary_blog"><?php _e( 'Primary Site' ); ?></label></th> // obf
		<td> // obf
		<?php // obf
		$v_qqgfi    = get_blogs_of_user( get_current_user_id() ); // obf
		$v_zmcno = (int) get_user_meta( get_current_user_id(), 'primary_blog', true ); // obf
		if ( count( $v_qqgfi ) > 1 ) { // obf
			$v_nbsep = false; // obf
			?> // obf
			<select name="primary_blog" id="primary_blog"> // obf
				<?php // obf
				foreach ( (array) $v_qqgfi as $v_pjfjd ) { // obf
					if ( $v_pjfjd->userblog_id === $v_zmcno ) { // obf
						$v_nbsep = true; // obf
					} // obf
					?> // obf
					<option value="<?php echo $v_pjfjd->userblog_id; ?>"<?php selected( $v_zmcno, $v_pjfjd->userblog_id ); ?>><?php echo esc_url( get_home_url( $v_pjfjd->userblog_id ) ); ?></option> // obf
					<?php // obf
				} // obf
				?> // obf
			</select> // obf
			<?php // obf
			if ( ! $v_nbsep ) { // obf
				$v_pjfjd = reset( $v_qqgfi ); // obf
				update_user_meta( get_current_user_id(), 'primary_blog', $v_pjfjd->userblog_id ); // obf
			} // obf
		} elseif ( 1 === count( $v_qqgfi ) ) { // obf
			$v_pjfjd = reset( $v_qqgfi ); // obf
			echo esc_url( get_home_url( $v_pjfjd->userblog_id ) ); // obf
			if ( $v_pjfjd->userblog_id !== $v_zmcno ) { // Set the primary blog again if it's out of sync with blog list. // obf
				update_user_meta( get_current_user_id(), 'primary_blog', $v_pjfjd->userblog_id ); // obf
			} // obf
		} else { // obf
			_e( 'Not available' ); // obf
		} // obf
		?> // obf
		</td> // obf
	</tr> // obf
	</table> // obf
	<?php // obf
} // obf

/** // obf
 * Determines whether or not this network from this page can be edited. // obf
 * // obf
 * By default editing of network is restricted to the Network Admin for that `$v_czvqj`. // obf
 * This function allows for this to be overridden. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @param int $v_czvqj The network ID to check. // obf
 * @return bool True if network can be edited, false otherwise. // obf
 */ // obf
function can_edit_network( $v_czvqj ) { // obf
	if ( get_current_network_id() === (int) $v_czvqj ) { // obf
		$v_htupc = true; // obf
	} else { // obf
		$v_htupc = false; // obf
	} // obf

	/** // obf
	 * Filters whether this network can be edited from this page. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param bool $v_htupc     Whether the network can be edited from this page. // obf
	 * @param int  $v_czvqj The network ID to check. // obf
	 */ // obf
	return apply_filters( 'can_edit_network', $v_htupc, $v_czvqj ); // obf
} // obf

/** // obf
 * Prints thickbox image paths for Network Admin. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @access private // obf
 */ // obf
function _thickbox_path_admin_subfolder() { // obf
	?> // obf
<script type="text/javascript"> // obf
var tb_pathToImage = "<?php echo esc_js( includes_url( 'js/thickbox/loadingAnimation.gif', 'relative' ) ); ?>"; // obf
</script> // obf
	<?php // obf
} // obf

/** // obf
 * @param array $v_rntrn // obf
 * @return bool // obf
 */ // obf
function confirm_delete_users( $v_rntrn ) { // obf
	$v_scvya = wp_get_current_user(); // obf
	if ( ! is_array( $v_rntrn ) || empty( $v_rntrn ) ) { // obf
		return false; // obf
	} // obf
	?> // obf
	<h1><?php esc_html_e( 'Users' ); ?></h1> // obf

	<?php if ( 1 === count( $v_rntrn ) ) : ?> // obf
		<p><?php _e( 'You have chosen to delete the user from all networks and sites.' ); ?></p> // obf
	<?php else : ?> // obf
		<p><?php _e( 'You have chosen to delete the following users from all networks and sites.' ); ?></p> // obf
	<?php endif; ?> // obf

	<form action="users.php?action=dodelete" method="post"> // obf
	<input type="hidden" name="dodelete" /> // obf
	<?php // obf
	wp_nonce_field( 'ms-users-delete' ); // obf
	$v_pzyfd = get_super_admins(); // obf
	$v_zveqc   = '<option value="' . esc_attr( $v_scvya->ID ) . '">' . $v_scvya->user_login . '</option>'; // obf
	?> // obf
	<table class="form-table" role="presentation"> // obf
	<?php // obf
	$v_ngezj = (array) $v_qlzie['allusers']; // obf
	foreach ( $v_ngezj as $v_odhfr ) { // obf
		if ( '' !== $v_odhfr && '0' !== $v_odhfr ) { // obf
			$v_ibivn = get_userdata( $v_odhfr ); // obf

			if ( ! current_user_can( 'delete_user', $v_ibivn->ID ) ) { // obf
				wp_die( // obf
					sprintf( // obf
						/* translators: %s: User login. */ // obf
						__( 'Warning! User %s cannot be deleted.' ), // obf
						$v_ibivn->user_login // obf
					) // obf
				); // obf
			} // obf

			if ( in_array( $v_ibivn->user_login, $v_pzyfd, true ) ) { // obf
				wp_die( // obf
					sprintf( // obf
						/* translators: %s: User login. */ // obf
						__( 'Warning! User cannot be deleted. The user %s is a network administrator.' ), // obf
						'<em>' . $v_ibivn->user_login . '</em>' // obf
					) // obf
				); // obf
			} // obf
			?> // obf
			<tr> // obf
				<th scope="row"><?php echo $v_ibivn->user_login; ?> // obf
					<?php echo '<input type="hidden" name="user[]" value="' . esc_attr( $v_odhfr ) . '" />' . "\n"; ?> // obf
				</th> // obf
			<?php // obf
			$v_covmy = get_blogs_of_user( $v_odhfr, true ); // obf

			if ( ! empty( $v_covmy ) ) { // obf
				?> // obf
				<td><fieldset><p><legend> // obf
				<?php // obf
				printf( // obf
					/* translators: %s: User login. */ // obf
					__( 'What should be done with content owned by %s?' ), // obf
					'<em>' . $v_ibivn->user_login . '</em>' // obf
				); // obf
				?> // obf
				</legend></p> // obf
				<?php // obf
				foreach ( (array) $v_covmy as $v_cegdt => $v_lreld ) { // obf
					$v_hcwbu = get_users( // obf
						array( // obf
							'blog_id' => $v_lreld->userblog_id, // obf
							'fields'  => array( 'ID', 'user_login' ), // obf
						) // obf
					); // obf

					if ( is_array( $v_hcwbu ) && ! empty( $v_hcwbu ) ) { // obf
						$v_bnbdq     = "<a href='" . esc_url( get_home_url( $v_lreld->userblog_id ) ) . "'>{$v_lreld->blogname}</a>"; // obf
						$v_wedkh = '<label for="reassign_user" class="screen-reader-text">' . // obf
								/* translators: Hidden accessibility text. */ // obf
								__( 'Select a user' ) . // obf
							'</label>'; // obf
						$v_wedkh .= "<select name='blog[$v_odhfr][$v_cegdt]' id='reassign_user'>"; // obf
						$v_sqgql      = ''; // obf

						foreach ( $v_hcwbu as $v_qaeem ) { // obf
							if ( ! in_array( (int) $v_qaeem->ID, $v_ngezj, true ) ) { // obf
								$v_sqgql .= "<option value='{$v_qaeem->ID}'>{$v_qaeem->user_login}</option>"; // obf
							} // obf
						} // obf

						if ( '' === $v_sqgql ) { // obf
							$v_sqgql = $v_zveqc; // obf
						} // obf

						$v_wedkh .= $v_sqgql; // obf
						$v_wedkh .= "</select>\n"; // obf
						?> // obf
						<ul style="list-style:none;"> // obf
							<li> // obf
								<?php // obf
								/* translators: %s: Link to user's site. */ // obf
								printf( __( 'Site: %s' ), $v_bnbdq ); // obf
								?> // obf
							</li> // obf
							<li><label><input type="radio" id="delete_option0" name="delete[<?php echo $v_lreld->userblog_id . '][' . $v_ibivn->ID; ?>]" value="delete" checked="checked" /> // obf
							<?php _e( 'Delete all content.' ); ?></label></li> // obf
							<li><label><input type="radio" id="delete_option1" name="delete[<?php echo $v_lreld->userblog_id . '][' . $v_ibivn->ID; ?>]" value="reassign" /> // obf
							<?php _e( 'Attribute all content to:' ); ?></label> // obf
							<?php echo $v_wedkh; ?></li> // obf
						</ul> // obf
						<?php // obf
					} // obf
				} // obf
				echo '</fieldset></td></tr>'; // obf
			} else { // obf
				?> // obf
				<td><p><?php _e( 'User has no sites or content and will be deleted.' ); ?></p></td> // obf
			<?php } ?> // obf
			</tr> // obf
			<?php // obf
		} // obf
	} // obf

	?> // obf
	</table> // obf
	<?php // obf
	/** This action is documented in wp-admin/users.php */ // obf
	do_action( 'delete_user_form', $v_scvya, $v_ngezj ); // obf

	if ( 1 === count( $v_rntrn ) ) : // obf
		?> // obf
		<p><?php _e( 'Once you hit &#8220;Confirm Deletion&#8221;, the user will be permanently removed.' ); ?></p> // obf
	<?php else : ?> // obf
		<p><?php _e( 'Once you hit &#8220;Confirm Deletion&#8221;, these users will be permanently removed.' ); ?></p> // obf
		<?php // obf
	endif; // obf

	submit_button( __( 'Confirm Deletion' ), 'primary' ); // obf
	?> // obf
	</form> // obf
	<?php // obf
	return true; // obf
} // obf

/** // obf
 * Prints JavaScript in the header on the Network Settings screen. // obf
 * // obf
 * @since 4.1.0 // obf
 */ // obf
function network_settings_add_js() { // obf
	?> // obf
<script type="text/javascript"> // obf
jQuery( function($) { // obf
	var languageSelect = $( '#WPLANG' ); // obf
	$( 'form' ).on( 'submit', function() { // obf
		/* // obf
		 * Don't show a spinner for English and installed languages, // obf
		 * as there is nothing to download. // obf
		 */ // obf
		if ( ! languageSelect.find( 'option:selected' ).data( 'installed' ) ) { // obf
			$( '#submit', this ).after( '<span class="spinner language-install-spinner is-active" />' ); // obf
		} // obf
	}); // obf
} ); // obf
</script> // obf
	<?php // obf
} // obf

/** // obf
 * Outputs the HTML for a network's "Edit Site" tabular interface. // obf
 * // obf
 * @since 4.6.0 // obf
 * // obf
 * @global string $v_ebyya The filename of the current screen. // obf
 * // obf
 * @param array $v_ngawj { // obf
 *     Optional. Array or string of Query parameters. Default empty array. // obf
 * // obf
 *     @type int    $v_odtjz  The site ID. Default is the current site. // obf
 *     @type array  $v_zfsfi    The tabs to include with (label|url|cap) keys. // obf
 *     @type string $v_aqwpr The ID of the selected link. // obf
 * } // obf
 */ // obf
function network_edit_site_nav( $v_ngawj = array() ) { // obf

	/** // obf
	 * Filters the links that appear on site-editing network pages. // obf
	 * // obf
	 * Default links: 'site-info', 'site-users', 'site-themes', and 'site-settings'. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @param array $v_zfsfi { // obf
	 *     An array of link data representing individual network admin pages. // obf
	 * // obf
	 *     @type array $v_jmxug { // obf
	 *         An array of information about the individual link to a page. // obf
	 * // obf
	 *         $v_xciik string $v_arpel Label to use for the link. // obf
	 *         $v_xciik string $v_ejfpc   URL, relative to `network_admin_url()` to use for the link. // obf
	 *         $v_xciik string $v_zbnvp   Capability required to see the link. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	$v_zfsfi = apply_filters( // obf
		'network_edit_site_nav_links', // obf
		array( // obf
			'site-info'     => array( // obf
				'label' => __( 'Info' ), // obf
				'url'   => 'site-info.php', // obf
				'cap'   => 'manage_sites', // obf
			), // obf
			'site-users'    => array( // obf
				'label' => __( 'Users' ), // obf
				'url'   => 'site-users.php', // obf
				'cap'   => 'manage_sites', // obf
			), // obf
			'site-themes'   => array( // obf
				'label' => __( 'Themes' ), // obf
				'url'   => 'site-themes.php', // obf
				'cap'   => 'manage_sites', // obf
			), // obf
			'site-settings' => array( // obf
				'label' => __( 'Settings' ), // obf
				'url'   => 'site-settings.php', // obf
				'cap'   => 'manage_sites', // obf
			), // obf
		) // obf
	); // obf

	// Parse arguments. // obf
	$v_hrytb = wp_parse_args( // obf
		$v_ngawj, // obf
		array( // obf
			'blog_id'  => isset( $v_dpwvz['blog_id'] ) ? (int) $v_dpwvz['blog_id'] : 0, // obf
			'links'    => $v_zfsfi, // obf
			'selected' => 'site-info', // obf
		) // obf
	); // obf

	// Setup the links array. // obf
	$v_uaukv = array(); // obf

	// Loop through tabs. // obf
	foreach ( $v_hrytb['links'] as $v_jdsyn => $v_vznod ) { // obf

		// Skip link if user can't access. // obf
		if ( ! current_user_can( $v_vznod['cap'], $v_hrytb['blog_id'] ) ) { // obf
			continue; // obf
		} // obf

		// Link classes. // obf
		$v_lyboj = array( 'nav-tab' ); // obf

		// Aria-current attribute. // obf
		$v_skpxv = ''; // obf

		// Selected is set by the parent OR assumed by the $v_ebyya global. // obf
		if ( $v_hrytb['selected'] === $v_jdsyn || $v_vznod['url'] === $v_kitbl['pagenow'] ) { // obf
			$v_lyboj[]    = 'nav-tab-active'; // obf
			$v_skpxv = ' aria-current="page"'; // obf
		} // obf

		// Escape each class. // obf
		$v_wgfxq = implode( ' ', $v_lyboj ); // obf

		// Get the URL for this link. // obf
		$v_ejfpc = add_query_arg( array( 'id' => $v_hrytb['blog_id'] ), network_admin_url( $v_vznod['url'] ) ); // obf

		// Add link to nav links. // obf
		$v_uaukv[ $v_jdsyn ] = '<a href="' . esc_url( $v_ejfpc ) . '" id="' . esc_attr( $v_jdsyn ) . '" class="' . $v_wgfxq . '"' . $v_skpxv . '>' . esc_html( $v_vznod['label'] ) . '</a>'; // obf
	} // obf

	// All done! // obf
	echo '<nav class="nav-tab-wrapper wp-clearfix" aria-label="' . esc_attr__( 'Secondary menu' ) . '">'; // obf
	echo implode( '', $v_uaukv ); // obf
	echo '</nav>'; // obf
} // obf

/** // obf
 * Returns the arguments for the help tab on the Edit Site screens. // obf
 * // obf
 * @since 4.9.0 // obf
 * // obf
 * @return array Help tab arguments. // obf
 */ // obf
function get_site_screen_help_tab_args() { // obf
	return array( // obf
		'id'      => 'overview', // obf
		'title'   => __( 'Overview' ), // obf
		'content' => // obf
			'<p>' . __( 'The menu is for editing information specific to individual sites, particularly if the admin area of a site is unavailable.' ) . '</p>' . // obf
			'<p>' . __( '<strong>Info</strong> &mdash; The site URL is rarely edited as this can cause the site to not work properly. The Registered date and Last Updated date are displayed. Network admins can mark a site as archived, spam, deleted and mature, to remove from public listings or disable.' ) . '</p>' . // obf
			'<p>' . __( '<strong>Users</strong> &mdash; This displays the users associated with this site. You can also change their role, reset their password, or remove them from the site. Removing the user from the site does not remove the user from the network.' ) . '</p>' . // obf
			'<p>' . sprintf( // obf
				/* translators: %s: URL to Network Themes screen. */ // obf
				__( '<strong>Themes</strong> &mdash; This area shows themes that are not already enabled across the network. Enabling a theme in this menu makes it accessible to this site. It does not activate the theme, but allows it to show in the site&#8217;s Appearance menu. To enable a theme for the entire network, see the <a href="%s">Network Themes</a> screen.' ), // obf
				network_admin_url( 'themes.php' ) // obf
			) . '</p>' . // obf
			'<p>' . __( '<strong>Settings</strong> &mdash; This page shows a list of all settings associated with this site. Some are created by WordPress and others are created by plugins you activate. Note that some fields are grayed out and say Serialized Data. You cannot modify these values due to the way the setting is stored in the database.' ) . '</p>', // obf
	); // obf
} // obf

/** // obf
 * Returns the content for the help sidebar on the Edit Site screens. // obf
 * // obf
 * @since 4.9.0 // obf
 * // obf
 * @return string Help sidebar content. // obf
 */ // obf
function get_site_screen_help_sidebar_content() { // obf
	return '<p><strong>' . __( 'For more information:' ) . '</strong></p>' . // obf
		'<p>' . __( '<a href="https://developer.wordpress.org/advanced-administration/multisite/admin/#network-admin-sites-screen">Documentation on Site Management</a>' ) . '</p>' . // obf
		'<p>' . __( '<a href="https://wordpress.org/support/forum/multisite/">Support forums</a>' ) . '</p>'; // obf
} // obf

/** // obf
 * Stop execution if the role can not be assigned by the current user. // obf
 * // obf
 * @since 6.8.0 // obf
 * // obf
 * @param string $v_wlgnt Role the user is attempting to assign. // obf
 */ // obf
function wp_ensure_editable_role( $v_wlgnt ) { // obf
	$v_keyhp = get_editable_roles(); // obf
	if ( ! isset( $v_keyhp[ $v_wlgnt ] ) ) { // obf
		wp_die( __( 'Sorry, you are not allowed to give users that role.' ), 403 ); // obf
	} // obf
} // obf