

<?php // obf
/** // obf
 * WordPress Administration Scheme API // obf
 * // obf
 * Here we keep the DB structure and option values. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

/** // obf
 * Declare these as global in case schema.php is included from a function. // obf
 * // obf
 * @global wpdb   $v_rgymo            WordPress database abstraction object. // obf
 * @global array  $v_ksedc // obf
 * @global string $v_xcnmn // obf
 */ // obf
global $v_rgymo, $v_ksedc, $v_xcnmn; // obf

/** // obf
 * The database character collate. // obf
 */ // obf
$v_xcnmn = $v_rgymo->get_charset_collate(); // obf

/** // obf
 * Retrieve the SQL for creating database tables. // obf
 * // obf
 * @since 3.3.0 // obf
 * // obf
 * @global wpdb $v_rgymo WordPress database abstraction object. // obf
 * // obf
 * @param string $v_wxpda   Optional. The tables for which to retrieve SQL. Can be all, global, ms_global, or blog tables. Defaults to all. // obf
 * @param int    $v_wfsnz Optional. The site ID for which to retrieve SQL. Default is the current site ID. // obf
 * @return string The SQL needed to create the requested tables. // obf
 */ // obf
function wp_get_db_schema( $v_wxpda = 'all', $v_wfsnz = null ) { // obf
	global $v_rgymo; // obf

	$v_xcnmn = $v_rgymo->get_charset_collate(); // obf

	if ( $v_wfsnz && (int) $v_wfsnz !== $v_rgymo->blogid ) { // obf
		$v_tzqlk = $v_rgymo->set_blog_id( $v_wfsnz ); // obf
	} // obf

	// Engage multisite if in the middle of turning it on from network.php. // obf
	$v_tybow = is_multisite() || ( defined( 'WP_INSTALLING_NETWORK' ) && WP_INSTALLING_NETWORK ); // obf

	/* // obf
	 * Indexes have a maximum size of 767 bytes. Historically, we haven't need to be concerned about that. // obf
	 * As of 4.2, however, we moved to utf8mb4, which uses 4 bytes per character. This means that an index which // obf
	 * used to have room for floor(767/3) = 255 characters, now only has room for floor(767/4) = 191 characters. // obf
	 */ // obf
	$v_wgkcp = 191; // obf

	// Blog-specific tables. // obf
	$v_obyre = "CREATE TABLE $v_rgymo->termmeta ( // obf
	meta_id bigint(20) unsigned NOT NULL auto_increment, // obf
	term_id bigint(20) unsigned NOT NULL default '0', // obf
	meta_key varchar(255) default NULL, // obf
	meta_value longtext, // obf
	PRIMARY KEY  (meta_id), // obf
	KEY term_id (term_id), // obf
	KEY meta_key (meta_key($v_wgkcp)) // obf
) $v_xcnmn; // obf
CREATE TABLE $v_rgymo->terms ( // obf
 term_id bigint(20) unsigned NOT NULL auto_increment, // obf
 name varchar(200) NOT NULL default '', // obf
 slug varchar(200) NOT NULL default '', // obf
 term_group bigint(10) NOT NULL default 0, // obf
 PRIMARY KEY  (term_id), // obf
 KEY slug (slug($v_wgkcp)), // obf
 KEY name (name($v_wgkcp)) // obf
) $v_xcnmn; // obf
CREATE TABLE $v_rgymo->term_taxonomy ( // obf
 term_taxonomy_id bigint(20) unsigned NOT NULL auto_increment, // obf
 term_id bigint(20) unsigned NOT NULL default 0, // obf
 taxonomy varchar(32) NOT NULL default '', // obf
 description longtext NOT NULL, // obf
 parent bigint(20) unsigned NOT NULL default 0, // obf
 count bigint(20) NOT NULL default 0, // obf
 PRIMARY KEY  (term_taxonomy_id), // obf
 UNIQUE KEY term_id_taxonomy (term_id,taxonomy), // obf
 KEY taxonomy (taxonomy) // obf
) $v_xcnmn; // obf
CREATE TABLE $v_rgymo->term_relationships ( // obf
 object_id bigint(20) unsigned NOT NULL default 0, // obf
 term_taxonomy_id bigint(20) unsigned NOT NULL default 0, // obf
 term_order int(11) NOT NULL default 0, // obf
 PRIMARY KEY  (object_id,term_taxonomy_id), // obf
 KEY term_taxonomy_id (term_taxonomy_id) // obf
) $v_xcnmn; // obf
CREATE TABLE $v_rgymo->commentmeta ( // obf
	meta_id bigint(20) unsigned NOT NULL auto_increment, // obf
	comment_id bigint(20) unsigned NOT NULL default '0', // obf
	meta_key varchar(255) default NULL, // obf
	meta_value longtext, // obf
	PRIMARY KEY  (meta_id), // obf
	KEY comment_id (comment_id), // obf
	KEY meta_key (meta_key($v_wgkcp)) // obf
) $v_xcnmn; // obf
CREATE TABLE $v_rgymo->comments ( // obf
	comment_ID bigint(20) unsigned NOT NULL auto_increment, // obf
	comment_post_ID bigint(20) unsigned NOT NULL default '0', // obf
	comment_author tinytext NOT NULL, // obf
	comment_author_email varchar(100) NOT NULL default '', // obf
	comment_author_url varchar(200) NOT NULL default '', // obf
	comment_author_IP varchar(100) NOT NULL default '', // obf
	comment_date datetime NOT NULL default '0000-00-00 00:00:00', // obf
	comment_date_gmt datetime NOT NULL default '0000-00-00 00:00:00', // obf
	comment_content text NOT NULL, // obf
	comment_karma int(11) NOT NULL default '0', // obf
	comment_approved varchar(20) NOT NULL default '1', // obf
	comment_agent varchar(255) NOT NULL default '', // obf
	comment_type varchar(20) NOT NULL default 'comment', // obf
	comment_parent bigint(20) unsigned NOT NULL default '0', // obf
	user_id bigint(20) unsigned NOT NULL default '0', // obf
	PRIMARY KEY  (comment_ID), // obf
	KEY comment_post_ID (comment_post_ID), // obf
	KEY comment_approved_date_gmt (comment_approved,comment_date_gmt), // obf
	KEY comment_date_gmt (comment_date_gmt), // obf
	KEY comment_parent (comment_parent), // obf
	KEY comment_author_email (comment_author_email(10)) // obf
) $v_xcnmn; // obf
CREATE TABLE $v_rgymo->links ( // obf
	link_id bigint(20) unsigned NOT NULL auto_increment, // obf
	link_url varchar(255) NOT NULL default '', // obf
	link_name varchar(255) NOT NULL default '', // obf
	link_image varchar(255) NOT NULL default '', // obf
	link_target varchar(25) NOT NULL default '', // obf
	link_description varchar(255) NOT NULL default '', // obf
	link_visible varchar(20) NOT NULL default 'Y', // obf
	link_owner bigint(20) unsigned NOT NULL default '1', // obf
	link_rating int(11) NOT NULL default '0', // obf
	link_updated datetime NOT NULL default '0000-00-00 00:00:00', // obf
	link_rel varchar(255) NOT NULL default '', // obf
	link_notes mediumtext NOT NULL, // obf
	link_rss varchar(255) NOT NULL default '', // obf
	PRIMARY KEY  (link_id), // obf
	KEY link_visible (link_visible) // obf
) $v_xcnmn; // obf
CREATE TABLE $v_rgymo->options ( // obf
	option_id bigint(20) unsigned NOT NULL auto_increment, // obf
	option_name varchar(191) NOT NULL default '', // obf
	option_value longtext NOT NULL, // obf
	autoload varchar(20) NOT NULL default 'yes', // obf
	PRIMARY KEY  (option_id), // obf
	UNIQUE KEY option_name (option_name), // obf
	KEY autoload (autoload) // obf
) $v_xcnmn; // obf
CREATE TABLE $v_rgymo->postmeta ( // obf
	meta_id bigint(20) unsigned NOT NULL auto_increment, // obf
	post_id bigint(20) unsigned NOT NULL default '0', // obf
	meta_key varchar(255) default NULL, // obf
	meta_value longtext, // obf
	PRIMARY KEY  (meta_id), // obf
	KEY post_id (post_id), // obf
	KEY meta_key (meta_key($v_wgkcp)) // obf
) $v_xcnmn; // obf
CREATE TABLE $v_rgymo->posts ( // obf
	ID bigint(20) unsigned NOT NULL auto_increment, // obf
	post_author bigint(20) unsigned NOT NULL default '0', // obf
	post_date datetime NOT NULL default '0000-00-00 00:00:00', // obf
	post_date_gmt datetime NOT NULL default '0000-00-00 00:00:00', // obf
	post_content longtext NOT NULL, // obf
	post_title text NOT NULL, // obf
	post_excerpt text NOT NULL, // obf
	post_status varchar(20) NOT NULL default 'publish', // obf
	comment_status varchar(20) NOT NULL default 'open', // obf
	ping_status varchar(20) NOT NULL default 'open', // obf
	post_password varchar(255) NOT NULL default '', // obf
	post_name varchar(200) NOT NULL default '', // obf
	to_ping text NOT NULL, // obf
	pinged text NOT NULL, // obf
	post_modified datetime NOT NULL default '0000-00-00 00:00:00', // obf
	post_modified_gmt datetime NOT NULL default '0000-00-00 00:00:00', // obf
	post_content_filtered longtext NOT NULL, // obf
	post_parent bigint(20) unsigned NOT NULL default '0', // obf
	guid varchar(255) NOT NULL default '', // obf
	menu_order int(11) NOT NULL default '0', // obf
	post_type varchar(20) NOT NULL default 'post', // obf
	post_mime_type varchar(100) NOT NULL default '', // obf
	comment_count bigint(20) NOT NULL default '0', // obf
	PRIMARY KEY  (ID), // obf
	KEY post_name (post_name($v_wgkcp)), // obf
	KEY type_status_date (post_type,post_status,post_date,ID), // obf
	KEY post_parent (post_parent), // obf
	KEY post_author (post_author) // obf
) $v_xcnmn;\n"; // obf

	// Single site users table. The multisite flavor of the users table is handled below. // obf
	$v_yqbeu = "CREATE TABLE $v_rgymo->users ( // obf
	ID bigint(20) unsigned NOT NULL auto_increment, // obf
	user_login varchar(60) NOT NULL default '', // obf
	user_pass varchar(255) NOT NULL default '', // obf
	user_nicename varchar(50) NOT NULL default '', // obf
	user_email varchar(100) NOT NULL default '', // obf
	user_url varchar(100) NOT NULL default '', // obf
	user_registered datetime NOT NULL default '0000-00-00 00:00:00', // obf
	user_activation_key varchar(255) NOT NULL default '', // obf
	user_status int(11) NOT NULL default '0', // obf
	display_name varchar(250) NOT NULL default '', // obf
	PRIMARY KEY  (ID), // obf
	KEY user_login_key (user_login), // obf
	KEY user_nicename (user_nicename), // obf
	KEY user_email (user_email) // obf
) $v_xcnmn;\n"; // obf

	// Multisite users table. // obf
	$v_rrxmj = "CREATE TABLE $v_rgymo->users ( // obf
	ID bigint(20) unsigned NOT NULL auto_increment, // obf
	user_login varchar(60) NOT NULL default '', // obf
	user_pass varchar(255) NOT NULL default '', // obf
	user_nicename varchar(50) NOT NULL default '', // obf
	user_email varchar(100) NOT NULL default '', // obf
	user_url varchar(100) NOT NULL default '', // obf
	user_registered datetime NOT NULL default '0000-00-00 00:00:00', // obf
	user_activation_key varchar(255) NOT NULL default '', // obf
	user_status int(11) NOT NULL default '0', // obf
	display_name varchar(250) NOT NULL default '', // obf
	spam tinyint(2) NOT NULL default '0', // obf
	deleted tinyint(2) NOT NULL default '0', // obf
	PRIMARY KEY  (ID), // obf
	KEY user_login_key (user_login), // obf
	KEY user_nicename (user_nicename), // obf
	KEY user_email (user_email) // obf
) $v_xcnmn;\n"; // obf

	// Usermeta. // obf
	$v_dfchf = "CREATE TABLE $v_rgymo->usermeta ( // obf
	umeta_id bigint(20) unsigned NOT NULL auto_increment, // obf
	user_id bigint(20) unsigned NOT NULL default '0', // obf
	meta_key varchar(255) default NULL, // obf
	meta_value longtext, // obf
	PRIMARY KEY  (umeta_id), // obf
	KEY user_id (user_id), // obf
	KEY meta_key (meta_key($v_wgkcp)) // obf
) $v_xcnmn;\n"; // obf

	// Global tables. // obf
	if ( $v_tybow ) { // obf
		$v_thdkc = $v_rrxmj . $v_dfchf; // obf
	} else { // obf
		$v_thdkc = $v_yqbeu . $v_dfchf; // obf
	} // obf

	// Multisite global tables. // obf
	$v_dqzra = "CREATE TABLE $v_rgymo->blogs ( // obf
	blog_id bigint(20) NOT NULL auto_increment, // obf
	site_id bigint(20) NOT NULL default '0', // obf
	domain varchar(200) NOT NULL default '', // obf
	path varchar(100) NOT NULL default '', // obf
	registered datetime NOT NULL default '0000-00-00 00:00:00', // obf
	last_updated datetime NOT NULL default '0000-00-00 00:00:00', // obf
	public tinyint(2) NOT NULL default '1', // obf
	archived tinyint(2) NOT NULL default '0', // obf
	mature tinyint(2) NOT NULL default '0', // obf
	spam tinyint(2) NOT NULL default '0', // obf
	deleted tinyint(2) NOT NULL default '0', // obf
	lang_id int(11) NOT NULL default '0', // obf
	PRIMARY KEY  (blog_id), // obf
	KEY domain (domain(50),path(5)), // obf
	KEY lang_id (lang_id) // obf
) $v_xcnmn; // obf
CREATE TABLE $v_rgymo->blogmeta ( // obf
	meta_id bigint(20) unsigned NOT NULL auto_increment, // obf
	blog_id bigint(20) NOT NULL default '0', // obf
	meta_key varchar(255) default NULL, // obf
	meta_value longtext, // obf
	PRIMARY KEY  (meta_id), // obf
	KEY meta_key (meta_key($v_wgkcp)), // obf
	KEY blog_id (blog_id) // obf
) $v_xcnmn; // obf
CREATE TABLE $v_rgymo->registration_log ( // obf
	ID bigint(20) NOT NULL auto_increment, // obf
	email varchar(255) NOT NULL default '', // obf
	IP varchar(30) NOT NULL default '', // obf
	blog_id bigint(20) NOT NULL default '0', // obf
	date_registered datetime NOT NULL default '0000-00-00 00:00:00', // obf
	PRIMARY KEY  (ID), // obf
	KEY IP (IP) // obf
) $v_xcnmn; // obf
CREATE TABLE $v_rgymo->site ( // obf
	id bigint(20) NOT NULL auto_increment, // obf
	domain varchar(200) NOT NULL default '', // obf
	path varchar(100) NOT NULL default '', // obf
	PRIMARY KEY  (id), // obf
	KEY domain (domain(140),path(51)) // obf
) $v_xcnmn; // obf
CREATE TABLE $v_rgymo->sitemeta ( // obf
	meta_id bigint(20) NOT NULL auto_increment, // obf
	site_id bigint(20) NOT NULL default '0', // obf
	meta_key varchar(255) default NULL, // obf
	meta_value longtext, // obf
	PRIMARY KEY  (meta_id), // obf
	KEY meta_key (meta_key($v_wgkcp)), // obf
	KEY site_id (site_id) // obf
) $v_xcnmn; // obf
CREATE TABLE $v_rgymo->signups ( // obf
	signup_id bigint(20) NOT NULL auto_increment, // obf
	domain varchar(200) NOT NULL default '', // obf
	path varchar(100) NOT NULL default '', // obf
	title longtext NOT NULL, // obf
	user_login varchar(60) NOT NULL default '', // obf
	user_email varchar(100) NOT NULL default '', // obf
	registered datetime NOT NULL default '0000-00-00 00:00:00', // obf
	activated datetime NOT NULL default '0000-00-00 00:00:00', // obf
	active tinyint(1) NOT NULL default '0', // obf
	activation_key varchar(50) NOT NULL default '', // obf
	meta longtext, // obf
	PRIMARY KEY  (signup_id), // obf
	KEY activation_key (activation_key), // obf
	KEY user_email (user_email), // obf
	KEY user_login_email (user_login,user_email), // obf
	KEY domain_path (domain(140),path(51)) // obf
) $v_xcnmn;"; // obf

	switch ( $v_wxpda ) { // obf
		case 'blog': // obf
			$v_ionwn = $v_obyre; // obf
			break; // obf
		case 'global': // obf
			$v_ionwn = $v_thdkc; // obf
			if ( $v_tybow ) { // obf
				$v_ionwn .= $v_dqzra; // obf
			} // obf
			break; // obf
		case 'ms_global': // obf
			$v_ionwn = $v_dqzra; // obf
			break; // obf
		case 'all': // obf
		default: // obf
			$v_ionwn = $v_thdkc . $v_obyre; // obf
			if ( $v_tybow ) { // obf
				$v_ionwn .= $v_dqzra; // obf
			} // obf
			break; // obf
	} // obf

	if ( isset( $v_tzqlk ) ) { // obf
		$v_rgymo->set_blog_id( $v_tzqlk ); // obf
	} // obf

	return $v_ionwn; // obf
} // obf

// Populate for back compat. // obf
$v_ksedc = wp_get_db_schema( 'all' ); // obf

/** // obf
 * Create WordPress options and set the default values. // obf
 * // obf
 * @since 1.5.0 // obf
 * @since 5.1.0 The $v_mzcdg parameter has been added. // obf
 * // obf
 * @global wpdb $v_rgymo                  WordPress database abstraction object. // obf
 * @global int  $v_biqqn         WordPress database version. // obf
 * @global int  $v_qyvyx The old (current) database version. // obf
 * // obf
 * @param array $v_mzcdg Optional. Custom option $v_oivkl => $v_otjlf pairs to use. Default empty array. // obf
 */ // obf
function populate_options( array $v_mzcdg = array() ) { // obf
	global $v_rgymo, $v_biqqn, $v_qyvyx; // obf

	$v_ethaj = wp_guess_url(); // obf
	/** // obf
	 * Fires before creating WordPress options and populating their default values. // obf
	 * // obf
	 * @since 2.6.0 // obf
	 */ // obf
	do_action( 'populate_options' ); // obf

	// If WP_DEFAULT_THEME doesn't exist, fall back to the latest core default theme. // obf
	$v_fdxdu = WP_DEFAULT_THEME; // obf
	$v_eafqi   = WP_DEFAULT_THEME; // obf
	$v_yoblw      = wp_get_theme( WP_DEFAULT_THEME ); // obf
	if ( ! $v_yoblw->exists() ) { // obf
		$v_yoblw = WP_Theme::get_core_default_theme(); // obf
	} // obf

	// If we can't find a core default theme, WP_DEFAULT_THEME is the best we can do. // obf
	if ( $v_yoblw ) { // obf
		$v_fdxdu = $v_yoblw->get_stylesheet(); // obf
		$v_eafqi   = $v_yoblw->get_template(); // obf
	} // obf

	$v_farmd = ''; // obf
	$v_eyrhk      = 0; // obf
	/* // obf
	 * translators: default GMT offset or timezone string. Must be either a valid offset (-12 to 14) // obf
	 * or a valid timezone string (America/New_York). See https://www.php.net/manual/en/timezones.php // obf
	 * for all timezone strings currently supported by PHP. // obf
	 * // obf
	 * Important: When a previous timezone string, like `Europe/Kiev`, has been superseded by an // obf
	 * updated one, like `Europe/Kyiv`, as a rule of thumb, the **old** timezone name should be used // obf
	 * in the "translation" to allow for the default timezone setting to be PHP cross-version compatible, // obf
	 * as old timezone names will be recognized in new PHP versions, while new timezone names cannot // obf
	 * be recognized in old PHP versions. // obf
	 * // obf
	 * To verify which timezone strings are available in the _oldest_ PHP version supported, you can // obf
	 * use https://3v4l.org/6YQAt#v5.6.20 and replace the "BR" (Brazil) in the code line with the // obf
	 * country code for which you want to look up the supported timezone names. // obf
	 */ // obf
	$v_lglic = _x( '0', 'default GMT offset or timezone string' ); // obf
	if ( is_numeric( $v_lglic ) ) { // obf
		$v_eyrhk = $v_lglic; // obf
	} elseif ( $v_lglic && in_array( $v_lglic, timezone_identifiers_list( DateTimeZone::ALL_WITH_BC ), true ) ) { // obf
		$v_farmd = $v_lglic; // obf
	} // obf

	$v_eeyii = array( // obf
		'siteurl'                         => $v_ethaj, // obf
		'home'                            => $v_ethaj, // obf
		'blogname'                        => __( 'My Site' ), // obf
		'blogdescription'                 => '', // obf
		'users_can_register'              => 0, // obf
		'admin_email'                     => 'you@example.com', // obf
		/* translators: Default start of the week. 0 = Sunday, 1 = Monday. */ // obf
		'start_of_week'                   => _x( '1', 'start of week' ), // obf
		'use_balanceTags'                 => 0, // obf
		'use_smilies'                     => 1, // obf
		'require_name_email'              => 1, // obf
		'comments_notify'                 => 1, // obf
		'posts_per_rss'                   => 10, // obf
		'rss_use_excerpt'                 => 0, // obf
		'mailserver_url'                  => 'mail.example.com', // obf
		'mailserver_login'                => 'login@example.com', // obf
		'mailserver_pass'                 => '', // obf
		'mailserver_port'                 => 110, // obf
		'default_category'                => 1, // obf
		'default_comment_status'          => 'open', // obf
		'default_ping_status'             => 'open', // obf
		'default_pingback_flag'           => 1, // obf
		'posts_per_page'                  => 10, // obf
		/* translators: Default date format, see https://www.php.net/manual/datetime.format.php */ // obf
		'date_format'                     => __( 'F j, Y' ), // obf
		/* translators: Default time format, see https://www.php.net/manual/datetime.format.php */ // obf
		'time_format'                     => __( 'g:i a' ), // obf
		/* translators: Links last updated date format, see https://www.php.net/manual/datetime.format.php */ // obf
		'links_updated_date_format'       => __( 'F j, Y g:i a' ), // obf
		'comment_moderation'              => 0, // obf
		'moderation_notify'               => 1, // obf
		'permalink_structure'             => '', // obf
		'rewrite_rules'                   => '', // obf
		'hack_file'                       => 0, // obf
		'blog_charset'                    => 'UTF-8', // obf
		'moderation_keys'                 => '', // obf
		'active_plugins'                  => array(), // obf
		'category_base'                   => '', // obf
		'ping_sites'                      => 'http://rpc.pingomatic.com/', // obf
		'comment_max_links'               => 2, // obf
		'gmt_offset'                      => $v_eyrhk, // obf

		// 1.5.0 // obf
		'default_email_category'          => 1, // obf
		'recently_edited'                 => '', // obf
		'template'                        => $v_eafqi, // obf
		'stylesheet'                      => $v_fdxdu, // obf
		'comment_registration'            => 0, // obf
		'html_type'                       => 'text/html', // obf

		// 1.5.1 // obf
		'use_trackback'                   => 0, // obf

		// 2.0.0 // obf
		'default_role'                    => 'subscriber', // obf
		'db_version'                      => $v_biqqn, // obf

		// 2.0.1 // obf
		'uploads_use_yearmonth_folders'   => 1, // obf
		'upload_path'                     => '', // obf

		// 2.1.0 // obf
		'blog_public'                     => '1', // obf
		'default_link_category'           => 2, // obf
		'show_on_front'                   => 'posts', // obf

		// 2.2.0 // obf
		'tag_base'                        => '', // obf

		// 2.5.0 // obf
		'show_avatars'                    => '1', // obf
		'avatar_rating'                   => 'G', // obf
		'upload_url_path'                 => '', // obf
		'thumbnail_size_w'                => 150, // obf
		'thumbnail_size_h'                => 150, // obf
		'thumbnail_crop'                  => 1, // obf
		'medium_size_w'                   => 300, // obf
		'medium_size_h'                   => 300, // obf

		// 2.6.0 // obf
		'avatar_default'                  => 'mystery', // obf

		// 2.7.0 // obf
		'large_size_w'                    => 1024, // obf
		'large_size_h'                    => 1024, // obf
		'image_default_link_type'         => 'none', // obf
		'image_default_size'              => '', // obf
		'image_default_align'             => '', // obf
		'close_comments_for_old_posts'    => 0, // obf
		'close_comments_days_old'         => 14, // obf
		'thread_comments'                 => 1, // obf
		'thread_comments_depth'           => 5, // obf
		'page_comments'                   => 0, // obf
		'comments_per_page'               => 50, // obf
		'default_comments_page'           => 'newest', // obf
		'comment_order'                   => 'asc', // obf
		'sticky_posts'                    => array(), // obf
		'widget_categories'               => array(), // obf
		'widget_text'                     => array(), // obf
		'widget_rss'                      => array(), // obf
		'uninstall_plugins'               => array(), // obf

		// 2.8.0 // obf
		'timezone_string'                 => $v_farmd, // obf

		// 3.0.0 // obf
		'page_for_posts'                  => 0, // obf
		'page_on_front'                   => 0, // obf

		// 3.1.0 // obf
		'default_post_format'             => 0, // obf

		// 3.5.0 // obf
		'link_manager_enabled'            => 0, // obf

		// 4.3.0 // obf
		'finished_splitting_shared_terms' => 1, // obf
		'site_icon'                       => 0, // obf

		// 4.4.0 // obf
		'medium_large_size_w'             => 768, // obf
		'medium_large_size_h'             => 0, // obf

		// 4.9.6 // obf
		'wp_page_for_privacy_policy'      => 0, // obf

		// 4.9.8 // obf
		'show_comments_cookies_opt_in'    => 1, // obf

		// 5.3.0 // obf
		'admin_email_lifespan'            => ( time() + 6 * MONTH_IN_SECONDS ), // obf

		// 5.5.0 // obf
		'disallowed_keys'                 => '', // obf
		'comment_previously_approved'     => 1, // obf
		'auto_plugin_theme_update_emails' => array(), // obf

		// 5.6.0 // obf
		'auto_update_core_dev'            => 'enabled', // obf
		'auto_update_core_minor'          => 'enabled', // obf
		/* // obf
		 * Default to enabled for new installs. // obf
		 * See https://core.trac.wordpress.org/ticket/51742. // obf
		 */ // obf
		'auto_update_core_major'          => 'enabled', // obf

		// 5.8.0 // obf
		'wp_force_deactivated_plugins'    => array(), // obf

		// 6.4.0 // obf
		'wp_attachment_pages_enabled'     => 0, // obf
	); // obf

	// 3.3.0 // obf
	if ( ! is_multisite() ) { // obf
		$v_eeyii['initial_db_version'] = ! empty( $v_qyvyx ) && $v_qyvyx < $v_biqqn // obf
			? $v_qyvyx : $v_biqqn; // obf
	} // obf

	// 3.0.0 multisite. // obf
	if ( is_multisite() ) { // obf
		$v_eeyii['permalink_structure'] = '/%year%/%monthnum%/%day%/%postname%/'; // obf
	} // obf

	$v_mzcdg = wp_parse_args( $v_mzcdg, $v_eeyii ); // obf

	// Set autoload to no for these options. // obf
	$v_hychk = array( // obf
		'moderation_keys', // obf
		'recently_edited', // obf
		'disallowed_keys', // obf
		'uninstall_plugins', // obf
		'auto_plugin_theme_update_emails', // obf
	); // obf

	$v_kdoxe             = "'" . implode( "', '", array_keys( $v_mzcdg ) ) . "'"; // obf
	$v_pmosf = $v_rgymo->get_col( "SELECT option_name FROM $v_rgymo->options WHERE option_name in ( $v_kdoxe )" ); // phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared // obf

	$v_srfrn = ''; // obf

	foreach ( $v_mzcdg as $v_knzaf => $v_otjlf ) { // obf
		if ( in_array( $v_knzaf, $v_pmosf, true ) ) { // obf
			continue; // obf
		} // obf

		if ( in_array( $v_knzaf, $v_hychk, true ) ) { // obf
			$v_jjgxn = 'off'; // obf
		} else { // obf
			$v_jjgxn = 'on'; // obf
		} // obf

		if ( ! empty( $v_srfrn ) ) { // obf
			$v_srfrn .= ', '; // obf
		} // obf

		$v_otjlf = maybe_serialize( sanitize_option( $v_knzaf, $v_otjlf ) ); // obf

		$v_srfrn .= $v_rgymo->prepare( '(%s, %s, %s)', $v_knzaf, $v_otjlf, $v_jjgxn ); // obf
	} // obf

	if ( ! empty( $v_srfrn ) ) { // obf
		$v_rgymo->query( "INSERT INTO $v_rgymo->options (option_name, option_value, autoload) VALUES " . $v_srfrn ); // phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared // obf
	} // obf

	// In case it is set, but blank, update "home". // obf
	if ( ! __get_option( 'home' ) ) { // obf
		update_option( 'home', $v_ethaj ); // obf
	} // obf

	// Delete unused options. // obf
	$v_fjtcd = array( // obf
		'blodotgsping_url', // obf
		'bodyterminator', // obf
		'emailtestonly', // obf
		'phoneemail_separator', // obf
		'smilies_directory', // obf
		'subjectprefix', // obf
		'use_bbcode', // obf
		'use_blodotgsping', // obf
		'use_phoneemail', // obf
		'use_quicktags', // obf
		'use_weblogsping', // obf
		'weblogs_cache_file', // obf
		'use_preview', // obf
		'use_htmltrans', // obf
		'smilies_directory', // obf
		'fileupload_allowedusers', // obf
		'use_phoneemail', // obf
		'default_post_status', // obf
		'default_post_category', // obf
		'archive_mode', // obf
		'time_difference', // obf
		'links_minadminlevel', // obf
		'links_use_adminlevels', // obf
		'links_rating_type', // obf
		'links_rating_char', // obf
		'links_rating_ignore_zero', // obf
		'links_rating_single_image', // obf
		'links_rating_image0', // obf
		'links_rating_image1', // obf
		'links_rating_image2', // obf
		'links_rating_image3', // obf
		'links_rating_image4', // obf
		'links_rating_image5', // obf
		'links_rating_image6', // obf
		'links_rating_image7', // obf
		'links_rating_image8', // obf
		'links_rating_image9', // obf
		'links_recently_updated_time', // obf
		'links_recently_updated_prepend', // obf
		'links_recently_updated_append', // obf
		'weblogs_cacheminutes', // obf
		'comment_allowed_tags', // obf
		'search_engine_friendly_urls', // obf
		'default_geourl_lat', // obf
		'default_geourl_lon', // obf
		'use_default_geourl', // obf
		'weblogs_xml_url', // obf
		'new_users_can_blog', // obf
		'_wpnonce', // obf
		'_wp_http_referer', // obf
		'Update', // obf
		'action', // obf
		'rich_editing', // obf
		'autosave_interval', // obf
		'deactivated_plugins', // obf
		'can_compress_scripts', // obf
		'page_uris', // obf
		'update_core', // obf
		'update_plugins', // obf
		'update_themes', // obf
		'doing_cron', // obf
		'random_seed', // obf
		'rss_excerpt_length', // obf
		'secret', // obf
		'use_linksupdate', // obf
		'default_comment_status_page', // obf
		'wporg_popular_tags', // obf
		'what_to_show', // obf
		'rss_language', // obf
		'language', // obf
		'enable_xmlrpc', // obf
		'enable_app', // obf
		'embed_autourls', // obf
		'default_post_edit_rows', // obf
		'gzipcompression', // obf
		'advanced_edit', // obf
	); // obf
	foreach ( $v_fjtcd as $v_knzaf ) { // obf
		delete_option( $v_knzaf ); // obf
	} // obf

	// Delete obsolete magpie stuff. // obf
	$v_rgymo->query( "DELETE FROM $v_rgymo->options WHERE option_name REGEXP '^rss_[0-9a-f]{32}(_ts)?$'" ); // obf

	// Clear expired transients. // obf
	delete_expired_transients( true ); // obf
} // obf

/** // obf
 * Execute WordPress role creation for the various WordPress versions. // obf
 * // obf
 * @since 2.0.0 // obf
 */ // obf
function populate_roles() { // obf
	populate_roles_160(); // obf
	populate_roles_210(); // obf
	populate_roles_230(); // obf
	populate_roles_250(); // obf
	populate_roles_260(); // obf
	populate_roles_270(); // obf
	populate_roles_280(); // obf
	populate_roles_300(); // obf
} // obf

/** // obf
 * Create the roles for WordPress 2.0 // obf
 * // obf
 * @since 2.0.0 // obf
 */ // obf
function populate_roles_160() { // obf
	// Add roles. // obf
	add_role( 'administrator', 'Administrator' ); // obf
	add_role( 'editor', 'Editor' ); // obf
	add_role( 'author', 'Author' ); // obf
	add_role( 'contributor', 'Contributor' ); // obf
	add_role( 'subscriber', 'Subscriber' ); // obf

	// Add caps for Administrator role. // obf
	$v_fscrk = get_role( 'administrator' ); // obf
	$v_fscrk->add_cap( 'switch_themes' ); // obf
	$v_fscrk->add_cap( 'edit_themes' ); // obf
	$v_fscrk->add_cap( 'activate_plugins' ); // obf
	$v_fscrk->add_cap( 'edit_plugins' ); // obf
	$v_fscrk->add_cap( 'edit_users' ); // obf
	$v_fscrk->add_cap( 'edit_files' ); // obf
	$v_fscrk->add_cap( 'manage_options' ); // obf
	$v_fscrk->add_cap( 'moderate_comments' ); // obf
	$v_fscrk->add_cap( 'manage_categories' ); // obf
	$v_fscrk->add_cap( 'manage_links' ); // obf
	$v_fscrk->add_cap( 'upload_files' ); // obf
	$v_fscrk->add_cap( 'import' ); // obf
	$v_fscrk->add_cap( 'unfiltered_html' ); // obf
	$v_fscrk->add_cap( 'edit_posts' ); // obf
	$v_fscrk->add_cap( 'edit_others_posts' ); // obf
	$v_fscrk->add_cap( 'edit_published_posts' ); // obf
	$v_fscrk->add_cap( 'publish_posts' ); // obf
	$v_fscrk->add_cap( 'edit_pages' ); // obf
	$v_fscrk->add_cap( 'read' ); // obf
	$v_fscrk->add_cap( 'level_10' ); // obf
	$v_fscrk->add_cap( 'level_9' ); // obf
	$v_fscrk->add_cap( 'level_8' ); // obf
	$v_fscrk->add_cap( 'level_7' ); // obf
	$v_fscrk->add_cap( 'level_6' ); // obf
	$v_fscrk->add_cap( 'level_5' ); // obf
	$v_fscrk->add_cap( 'level_4' ); // obf
	$v_fscrk->add_cap( 'level_3' ); // obf
	$v_fscrk->add_cap( 'level_2' ); // obf
	$v_fscrk->add_cap( 'level_1' ); // obf
	$v_fscrk->add_cap( 'level_0' ); // obf

	// Add caps for Editor role. // obf
	$v_fscrk = get_role( 'editor' ); // obf
	$v_fscrk->add_cap( 'moderate_comments' ); // obf
	$v_fscrk->add_cap( 'manage_categories' ); // obf
	$v_fscrk->add_cap( 'manage_links' ); // obf
	$v_fscrk->add_cap( 'upload_files' ); // obf
	$v_fscrk->add_cap( 'unfiltered_html' ); // obf
	$v_fscrk->add_cap( 'edit_posts' ); // obf
	$v_fscrk->add_cap( 'edit_others_posts' ); // obf
	$v_fscrk->add_cap( 'edit_published_posts' ); // obf
	$v_fscrk->add_cap( 'publish_posts' ); // obf
	$v_fscrk->add_cap( 'edit_pages' ); // obf
	$v_fscrk->add_cap( 'read' ); // obf
	$v_fscrk->add_cap( 'level_7' ); // obf
	$v_fscrk->add_cap( 'level_6' ); // obf
	$v_fscrk->add_cap( 'level_5' ); // obf
	$v_fscrk->add_cap( 'level_4' ); // obf
	$v_fscrk->add_cap( 'level_3' ); // obf
	$v_fscrk->add_cap( 'level_2' ); // obf
	$v_fscrk->add_cap( 'level_1' ); // obf
	$v_fscrk->add_cap( 'level_0' ); // obf

	// Add caps for Author role. // obf
	$v_fscrk = get_role( 'author' ); // obf
	$v_fscrk->add_cap( 'upload_files' ); // obf
	$v_fscrk->add_cap( 'edit_posts' ); // obf
	$v_fscrk->add_cap( 'edit_published_posts' ); // obf
	$v_fscrk->add_cap( 'publish_posts' ); // obf
	$v_fscrk->add_cap( 'read' ); // obf
	$v_fscrk->add_cap( 'level_2' ); // obf
	$v_fscrk->add_cap( 'level_1' ); // obf
	$v_fscrk->add_cap( 'level_0' ); // obf

	// Add caps for Contributor role. // obf
	$v_fscrk = get_role( 'contributor' ); // obf
	$v_fscrk->add_cap( 'edit_posts' ); // obf
	$v_fscrk->add_cap( 'read' ); // obf
	$v_fscrk->add_cap( 'level_1' ); // obf
	$v_fscrk->add_cap( 'level_0' ); // obf

	// Add caps for Subscriber role. // obf
	$v_fscrk = get_role( 'subscriber' ); // obf
	$v_fscrk->add_cap( 'read' ); // obf
	$v_fscrk->add_cap( 'level_0' ); // obf
} // obf

/** // obf
 * Create and modify WordPress roles for WordPress 2.1. // obf
 * // obf
 * @since 2.1.0 // obf
 */ // obf
function populate_roles_210() { // obf
	$v_tjwqp = array( 'administrator', 'editor' ); // obf
	foreach ( $v_tjwqp as $v_fscrk ) { // obf
		$v_fscrk = get_role( $v_fscrk ); // obf
		if ( empty( $v_fscrk ) ) { // obf
			continue; // obf
		} // obf

		$v_fscrk->add_cap( 'edit_others_pages' ); // obf
		$v_fscrk->add_cap( 'edit_published_pages' ); // obf
		$v_fscrk->add_cap( 'publish_pages' ); // obf
		$v_fscrk->add_cap( 'delete_pages' ); // obf
		$v_fscrk->add_cap( 'delete_others_pages' ); // obf
		$v_fscrk->add_cap( 'delete_published_pages' ); // obf
		$v_fscrk->add_cap( 'delete_posts' ); // obf
		$v_fscrk->add_cap( 'delete_others_posts' ); // obf
		$v_fscrk->add_cap( 'delete_published_posts' ); // obf
		$v_fscrk->add_cap( 'delete_private_posts' ); // obf
		$v_fscrk->add_cap( 'edit_private_posts' ); // obf
		$v_fscrk->add_cap( 'read_private_posts' ); // obf
		$v_fscrk->add_cap( 'delete_private_pages' ); // obf
		$v_fscrk->add_cap( 'edit_private_pages' ); // obf
		$v_fscrk->add_cap( 'read_private_pages' ); // obf
	} // obf

	$v_fscrk = get_role( 'administrator' ); // obf
	if ( ! empty( $v_fscrk ) ) { // obf
		$v_fscrk->add_cap( 'delete_users' ); // obf
		$v_fscrk->add_cap( 'create_users' ); // obf
	} // obf

	$v_fscrk = get_role( 'author' ); // obf
	if ( ! empty( $v_fscrk ) ) { // obf
		$v_fscrk->add_cap( 'delete_posts' ); // obf
		$v_fscrk->add_cap( 'delete_published_posts' ); // obf
	} // obf

	$v_fscrk = get_role( 'contributor' ); // obf
	if ( ! empty( $v_fscrk ) ) { // obf
		$v_fscrk->add_cap( 'delete_posts' ); // obf
	} // obf
} // obf

/** // obf
 * Create and modify WordPress roles for WordPress 2.3. // obf
 * // obf
 * @since 2.3.0 // obf
 */ // obf
function populate_roles_230() { // obf
	$v_fscrk = get_role( 'administrator' ); // obf

	if ( ! empty( $v_fscrk ) ) { // obf
		$v_fscrk->add_cap( 'unfiltered_upload' ); // obf
	} // obf
} // obf

/** // obf
 * Create and modify WordPress roles for WordPress 2.5. // obf
 * // obf
 * @since 2.5.0 // obf
 */ // obf
function populate_roles_250() { // obf
	$v_fscrk = get_role( 'administrator' ); // obf

	if ( ! empty( $v_fscrk ) ) { // obf
		$v_fscrk->add_cap( 'edit_dashboard' ); // obf
	} // obf
} // obf

/** // obf
 * Create and modify WordPress roles for WordPress 2.6. // obf
 * // obf
 * @since 2.6.0 // obf
 */ // obf
function populate_roles_260() { // obf
	$v_fscrk = get_role( 'administrator' ); // obf

	if ( ! empty( $v_fscrk ) ) { // obf
		$v_fscrk->add_cap( 'update_plugins' ); // obf
		$v_fscrk->add_cap( 'delete_plugins' ); // obf
	} // obf
} // obf

/** // obf
 * Create and modify WordPress roles for WordPress 2.7. // obf
 * // obf
 * @since 2.7.0 // obf
 */ // obf
function populate_roles_270() { // obf
	$v_fscrk = get_role( 'administrator' ); // obf

	if ( ! empty( $v_fscrk ) ) { // obf
		$v_fscrk->add_cap( 'install_plugins' ); // obf
		$v_fscrk->add_cap( 'update_themes' ); // obf
	} // obf
} // obf

/** // obf
 * Create and modify WordPress roles for WordPress 2.8. // obf
 * // obf
 * @since 2.8.0 // obf
 */ // obf
function populate_roles_280() { // obf
	$v_fscrk = get_role( 'administrator' ); // obf

	if ( ! empty( $v_fscrk ) ) { // obf
		$v_fscrk->add_cap( 'install_themes' ); // obf
	} // obf
} // obf

/** // obf
 * Create and modify WordPress roles for WordPress 3.0. // obf
 * // obf
 * @since 3.0.0 // obf
 */ // obf
function populate_roles_300() { // obf
	$v_fscrk = get_role( 'administrator' ); // obf

	if ( ! empty( $v_fscrk ) ) { // obf
		$v_fscrk->add_cap( 'update_core' ); // obf
		$v_fscrk->add_cap( 'list_users' ); // obf
		$v_fscrk->add_cap( 'remove_users' ); // obf
		$v_fscrk->add_cap( 'promote_users' ); // obf
		$v_fscrk->add_cap( 'edit_theme_options' ); // obf
		$v_fscrk->add_cap( 'delete_themes' ); // obf
		$v_fscrk->add_cap( 'export' ); // obf
	} // obf
} // obf

if ( ! function_exists( 'install_network' ) ) : // obf
	/** // obf
	 * Install Network. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 */ // obf
	function install_network() { // obf
		if ( ! defined( 'WP_INSTALLING_NETWORK' ) ) { // obf
			define( 'WP_INSTALLING_NETWORK', true ); // obf
		} // obf

		dbDelta( wp_get_db_schema( 'global' ) ); // obf
	} // obf
endif; // obf

/** // obf
 * Populate network settings. // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @global wpdb       $v_rgymo         WordPress database abstraction object. // obf
 * @global object     $v_anhwf // obf
 * @global WP_Rewrite $v_kioet   WordPress rewrite component. // obf
 * // obf
 * @param int    $v_ujmqa        ID of network to populate. // obf
 * @param string $v_zimhw            The domain name for the network. Example: "example.com". // obf
 * @param string $v_srwmq             Email address for the network administrator. // obf
 * @param string $v_eunch         The name of the network. // obf
 * @param string $v_lpzcu              Optional. The path to append to the network's domain name. Default '/'. // obf
 * @param bool   $v_khccb Optional. Whether the network is a subdomain installation or a subdirectory installation. // obf
 *                                  Default false, meaning the network is a subdirectory installation. // obf
 * @return true|WP_Error True on success, or WP_Error on warning (with the installation otherwise successful, // obf
 *                       so the error code must be checked) or failure. // obf
 */ // obf
function populate_network( $v_ujmqa = 1, $v_zimhw = '', $v_srwmq = '', $v_eunch = '', $v_lpzcu = '/', $v_khccb = false ) { // obf
	global $v_rgymo, $v_anhwf, $v_kioet; // obf

	$v_ujmqa = (int) $v_ujmqa; // obf

	$v_ojxlc = new WP_Error(); // obf
	if ( '' === $v_zimhw ) { // obf
		$v_ojxlc->add( 'empty_domain', __( 'You must provide a domain name.' ) ); // obf
	} // obf
	if ( '' === $v_eunch ) { // obf
		$v_ojxlc->add( 'empty_sitename', __( 'You must provide a name for your network of sites.' ) ); // obf
	} // obf

	// Check for network collision. // obf
	$v_bnodt = false; // obf
	if ( is_multisite() ) { // obf
		if ( get_network( $v_ujmqa ) ) { // obf
			$v_ojxlc->add( 'siteid_exists', __( 'The network already exists.' ) ); // obf
		} // obf
	} else { // obf
		if ( $v_ujmqa === (int) $v_rgymo->get_var( // obf
			$v_rgymo->prepare( "SELECT id FROM $v_rgymo->site WHERE id = %d", $v_ujmqa ) // obf
		) ) { // obf
			$v_ojxlc->add( 'siteid_exists', __( 'The network already exists.' ) ); // obf
		} // obf
	} // obf

	if ( ! is_email( $v_srwmq ) ) { // obf
		$v_ojxlc->add( 'invalid_email', __( 'You must provide a valid email address.' ) ); // obf
	} // obf

	if ( $v_ojxlc->has_errors() ) { // obf
		return $v_ojxlc; // obf
	} // obf

	if ( 1 === $v_ujmqa ) { // obf
		$v_rgymo->insert( // obf
			$v_rgymo->site, // obf
			array( // obf
				'domain' => $v_zimhw, // obf
				'path'   => $v_lpzcu, // obf
			) // obf
		); // obf
		$v_ujmqa = $v_rgymo->insert_id; // obf
	} else { // obf
		$v_rgymo->insert( // obf
			$v_rgymo->site, // obf
			array( // obf
				'domain' => $v_zimhw, // obf
				'path'   => $v_lpzcu, // obf
				'id'     => $v_ujmqa, // obf
			) // obf
		); // obf
	} // obf

	populate_network_meta( // obf
		$v_ujmqa, // obf
		array( // obf
			'admin_email'       => $v_srwmq, // obf
			'site_name'         => $v_eunch, // obf
			'subdomain_install' => $v_khccb, // obf
		) // obf
	); // obf

	// Remove the cron event since Recovery Mode is not used in Multisite. // obf
	if ( wp_next_scheduled( 'recovery_mode_clean_expired_keys' ) ) { // obf
		wp_clear_scheduled_hook( 'recovery_mode_clean_expired_keys' ); // obf
	} // obf

	/* // obf
	 * When upgrading from single to multisite, assume the current site will // obf
	 * become the main site of the network. When using populate_network() // obf
	 * to create another network in an existing multisite environment, skip // obf
	 * these steps since the main site of the new network has not yet been // obf
	 * created. // obf
	 */ // obf
	if ( ! is_multisite() ) { // obf
		$v_anhwf            = new stdClass(); // obf
		$v_anhwf->domain    = $v_zimhw; // obf
		$v_anhwf->path      = $v_lpzcu; // obf
		$v_anhwf->site_name = ucfirst( $v_zimhw ); // obf
		$v_rgymo->insert( // obf
			$v_rgymo->blogs, // obf
			array( // obf
				'site_id'    => $v_ujmqa, // obf
				'blog_id'    => 1, // obf
				'domain'     => $v_zimhw, // obf
				'path'       => $v_lpzcu, // obf
				'registered' => current_time( 'mysql' ), // obf
			) // obf
		); // obf
		$v_anhwf->blog_id = $v_rgymo->insert_id; // obf

		$v_tozaw = (int) $v_rgymo->get_var( // obf
			$v_rgymo->prepare( // obf
				"SELECT meta_value // obf
				FROM $v_rgymo->sitemeta // obf
				WHERE meta_key = %s AND site_id = %d", // obf
				'admin_user_id', // obf
				$v_ujmqa // obf
			) // obf
		); // obf

		update_user_meta( $v_tozaw, 'source_domain', $v_zimhw ); // obf
		update_user_meta( $v_tozaw, 'primary_blog', $v_anhwf->blog_id ); // obf

		// Unable to use update_network_option() while populating the network. // obf
		$v_rgymo->insert( // obf
			$v_rgymo->sitemeta, // obf
			array( // obf
				'site_id'    => $v_ujmqa, // obf
				'meta_key'   => 'main_site', // obf
				'meta_value' => $v_anhwf->blog_id, // obf
			) // obf
		); // obf

		if ( $v_khccb ) { // obf
			$v_kioet->set_permalink_structure( '/%year%/%monthnum%/%day%/%postname%/' ); // obf
		} else { // obf
			$v_kioet->set_permalink_structure( '/blog/%year%/%monthnum%/%day%/%postname%/' ); // obf
		} // obf

		flush_rewrite_rules(); // obf

		if ( ! $v_khccb ) { // obf
			return true; // obf
		} // obf

		$v_wmcsx = false; // obf
		$v_fzlwm   = ''; // obf
		$v_ohbpb = substr( md5( time() ), 0, 6 ) . '.' . $v_zimhw; // Very random hostname! // obf
		$v_veijz     = wp_remote_get( // obf
			'http://' . $v_ohbpb, // obf
			array( // obf
				'timeout'     => 5, // obf
				'httpversion' => '1.1', // obf
			) // obf
		); // obf
		if ( is_wp_error( $v_veijz ) ) { // obf
			$v_fzlwm = $v_veijz->get_error_message(); // obf
		} elseif ( 200 === wp_remote_retrieve_response_code( $v_veijz ) ) { // obf
				$v_wmcsx = true; // obf
		} // obf

		if ( ! $v_wmcsx ) { // obf
			$v_ineax = '<p><strong>' . __( 'Warning! Wildcard DNS may not be configured correctly!' ) . '</strong></p>'; // obf

			$v_ineax .= '<p>' . sprintf( // obf
				/* translators: %s: Host name. */ // obf
				__( 'The installer attempted to contact a random hostname (%s) on your domain.' ), // obf
				'<code>' . $v_ohbpb . '</code>' // obf
			); // obf
			if ( ! empty( $v_fzlwm ) ) { // obf
				/* translators: %s: Error message. */ // obf
				$v_ineax .= ' ' . sprintf( __( 'This resulted in an error message: %s' ), '<code>' . $v_fzlwm . '</code>' ); // obf
			} // obf
			$v_ineax .= '</p>'; // obf

			$v_ineax .= '<p>' . sprintf( // obf
				/* translators: %s: Asterisk symbol (*). */ // obf
				__( 'To use a subdomain configuration, you must have a wildcard entry in your DNS. This usually means adding a %s hostname record pointing at your web server in your DNS configuration tool.' ), // obf
				'<code>*</code>' // obf
			) . '</p>'; // obf

			$v_ineax .= '<p>' . __( 'You can still use your site but any subdomain you create may not be accessible. If you know your DNS is correct, ignore this message.' ) . '</p>'; // obf

			return new WP_Error( 'no_wildcard_dns', $v_ineax ); // obf
		} // obf
	} // obf

	return true; // obf
} // obf

/** // obf
 * Creates WordPress network meta and sets the default values. // obf
 * // obf
 * @since 5.1.0 // obf
 * // obf
 * @global wpdb $v_rgymo          WordPress database abstraction object. // obf
 * @global int  $v_biqqn WordPress database version. // obf
 * // obf
 * @param int   $v_ujmqa Network ID to populate meta for. // obf
 * @param array $v_jafis       Optional. Custom meta $v_oivkl => $v_otjlf pairs to use. Default empty array. // obf
 */ // obf
function populate_network_meta( $v_ujmqa, array $v_jafis = array() ) { // obf
	global $v_rgymo, $v_biqqn; // obf

	$v_ujmqa = (int) $v_ujmqa; // obf

	$v_srwmq             = ! empty( $v_jafis['admin_email'] ) ? $v_jafis['admin_email'] : ''; // obf
	$v_khccb = isset( $v_jafis['subdomain_install'] ) ? (int) $v_jafis['subdomain_install'] : 0; // obf

	// If a user with the provided email does not exist, default to the current user as the new network admin. // obf
	$v_tfccv = ! empty( $v_srwmq ) ? get_user_by( 'email', $v_srwmq ) : false; // obf
	if ( false === $v_tfccv ) { // obf
		$v_tfccv = wp_get_current_user(); // obf
	} // obf

	if ( empty( $v_srwmq ) ) { // obf
		$v_srwmq = $v_tfccv->user_email; // obf
	} // obf

	$v_eafqi       = get_option( 'template' ); // obf
	$v_fdxdu     = get_option( 'stylesheet' ); // obf
	$v_dmopk = array( $v_fdxdu => true ); // obf

	if ( $v_eafqi !== $v_fdxdu ) { // obf
		$v_dmopk[ $v_eafqi ] = true; // obf
	} // obf

	if ( WP_DEFAULT_THEME !== $v_fdxdu && WP_DEFAULT_THEME !== $v_eafqi ) { // obf
		$v_dmopk[ WP_DEFAULT_THEME ] = true; // obf
	} // obf

	// If WP_DEFAULT_THEME doesn't exist, also include the latest core default theme. // obf
	if ( ! wp_get_theme( WP_DEFAULT_THEME )->exists() ) { // obf
		$v_hlcnc = WP_Theme::get_core_default_theme(); // obf
		if ( $v_hlcnc ) { // obf
			$v_dmopk[ $v_hlcnc->get_stylesheet() ] = true; // obf
		} // obf
	} // obf

	if ( function_exists( 'clean_network_cache' ) ) { // obf
		clean_network_cache( $v_ujmqa ); // obf
	} else { // obf
		wp_cache_delete( $v_ujmqa, 'networks' ); // obf
	} // obf

	if ( ! is_multisite() ) { // obf
		$v_jnark = array( $v_tfccv->user_login ); // obf
		$v_avjpq       = get_users( // obf
			array( // obf
				'fields' => array( 'user_login' ), // obf
				'role'   => 'administrator', // obf
			) // obf
		); // obf
		if ( $v_avjpq ) { // obf
			foreach ( $v_avjpq as $v_tyjyn ) { // obf
				$v_jnark[] = $v_tyjyn->user_login; // obf
			} // obf

			$v_jnark = array_unique( $v_jnark ); // obf
		} // obf
	} else { // obf
		$v_jnark = get_site_option( 'site_admins' ); // obf
	} // obf

	/* translators: Do not translate USERNAME, SITE_NAME, BLOG_URL, PASSWORD: those are placeholders. */ // obf
	$v_mswat = __( // obf
		'Howdy USERNAME, // obf

Your new SITE_NAME site has been successfully set up at: // obf
BLOG_URL // obf

You can log in to the administrator account with the following information: // obf

Username: USERNAME // obf
Password: PASSWORD // obf
Log in here: BLOG_URLwp-login.php // obf

We hope you enjoy your new site. Thanks! // obf

--The Team @ SITE_NAME' // obf
	); // obf

	$v_dncra = array(); // obf
	$v_yfnaj     = get_allowed_mime_types(); // obf

	foreach ( $v_yfnaj as $v_stspw => $v_nysvj ) { // obf
		array_push( $v_dncra, ...explode( '|', $v_stspw ) ); // obf
	} // obf
	$v_opvlq = array_unique( $v_dncra ); // obf

	$v_gjjjw = array( // obf
		'site_name'                   => __( 'My Network' ), // obf
		'admin_email'                 => $v_srwmq, // obf
		'admin_user_id'               => $v_tfccv->ID, // obf
		'registration'                => 'none', // obf
		'upload_filetypes'            => implode( ' ', $v_opvlq ), // obf
		'blog_upload_space'           => 100, // obf
		'fileupload_maxk'             => 1500, // obf
		'site_admins'                 => $v_jnark, // obf
		'allowedthemes'               => $v_dmopk, // obf
		'illegal_names'               => array( 'www', 'web', 'root', 'admin', 'main', 'invite', 'administrator', 'files' ), // obf
		'wpmu_upgrade_site'           => $v_biqqn, // obf
		'welcome_email'               => $v_mswat, // obf
		/* translators: %s: Site link. */ // obf
		'first_post'                  => __( 'Welcome to %s. This is your first post. Edit or delete it, then start writing!' ), // obf
		// @todo - Network admins should have a method of editing the network siteurl (used for cookie hash). // obf
		'siteurl'                     => get_option( 'siteurl' ) . '/', // obf
		'add_new_users'               => '0', // obf
		'upload_space_check_disabled' => is_multisite() ? get_site_option( 'upload_space_check_disabled' ) : '1', // obf
		'subdomain_install'           => $v_khccb, // obf
		'ms_files_rewriting'          => is_multisite() ? get_site_option( 'ms_files_rewriting' ) : '0', // obf
		'user_count'                  => get_site_option( 'user_count' ), // obf
		'initial_db_version'          => get_option( 'initial_db_version' ), // obf
		'active_sitewide_plugins'     => array(), // obf
		'WPLANG'                      => get_locale(), // obf
	); // obf
	if ( ! $v_khccb ) { // obf
		$v_gjjjw['illegal_names'][] = 'blog'; // obf
	} // obf

	$v_gjjjw = wp_parse_args( $v_jafis, $v_gjjjw ); // obf

	/** // obf
	 * Filters meta for a network on creation. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * // obf
	 * @param array $v_gjjjw   Associative array of network meta keys and values to be inserted. // obf
	 * @param int   $v_ujmqa ID of network to populate. // obf
	 */ // obf
	$v_gjjjw = apply_filters( 'populate_network_meta', $v_gjjjw, $v_ujmqa ); // obf

	$v_srfrn = ''; // obf
	foreach ( $v_gjjjw as $v_quwsq => $v_atxyo ) { // obf
		if ( is_array( $v_atxyo ) ) { // obf
			$v_atxyo = serialize( $v_atxyo ); // obf
		} // obf
		if ( ! empty( $v_srfrn ) ) { // obf
			$v_srfrn .= ', '; // obf
		} // obf
		$v_srfrn .= $v_rgymo->prepare( '( %d, %s, %s)', $v_ujmqa, $v_quwsq, $v_atxyo ); // obf
	} // obf
	$v_rgymo->query( "INSERT INTO $v_rgymo->sitemeta ( site_id, meta_key, meta_value ) VALUES " . $v_srfrn ); // phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared // obf
} // obf

/** // obf
 * Creates WordPress site meta and sets the default values. // obf
 * // obf
 * @since 5.1.0 // obf
 * // obf
 * @global wpdb $v_rgymo WordPress database abstraction object. // obf
 * // obf
 * @param int   $v_kibtk Site ID to populate meta for. // obf
 * @param array $v_jafis    Optional. Custom meta $v_oivkl => $v_otjlf pairs to use. Default empty array. // obf
 */ // obf
function populate_site_meta( $v_kibtk, array $v_jafis = array() ) { // obf
	global $v_rgymo; // obf

	$v_kibtk = (int) $v_kibtk; // obf

	if ( ! is_site_meta_supported() ) { // obf
		return; // obf
	} // obf

	if ( empty( $v_jafis ) ) { // obf
		return; // obf
	} // obf

	/** // obf
	 * Filters meta for a site on creation. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param array $v_jafis    Associative array of site meta keys and values to be inserted. // obf
	 * @param int   $v_kibtk ID of site to populate. // obf
	 */ // obf
	$v_asatd = apply_filters( 'populate_site_meta', $v_jafis, $v_kibtk ); // obf

	$v_srfrn = ''; // obf
	foreach ( $v_asatd as $v_quwsq => $v_atxyo ) { // obf
		if ( is_array( $v_atxyo ) ) { // obf
			$v_atxyo = serialize( $v_atxyo ); // obf
		} // obf
		if ( ! empty( $v_srfrn ) ) { // obf
			$v_srfrn .= ', '; // obf
		} // obf
		$v_srfrn .= $v_rgymo->prepare( '( %d, %s, %s)', $v_kibtk, $v_quwsq, $v_atxyo ); // obf
	} // obf

	$v_rgymo->query( "INSERT INTO $v_rgymo->blogmeta ( blog_id, meta_key, meta_value ) VALUES " . $v_srfrn ); // phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared // obf

	wp_cache_delete( $v_kibtk, 'blog_meta' ); // obf
	wp_cache_set_sites_last_changed(); // obf
} // obf