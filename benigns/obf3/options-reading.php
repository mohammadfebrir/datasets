

<?php // obf
/** // obf
 * Reading settings administration panel. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

/** WordPress Administration Bootstrap */ // obf
require_once __DIR__ . '/admin.php'; // obf

if ( ! current_user_can( 'manage_options' ) ) { // obf
	wp_die( __( 'Sorry, you are not allowed to manage options for this site.' ) ); // obf
} // obf

// Used in the HTML title tag. // obf
$v_rrxjx       = __( 'Reading Settings' ); // obf
$v_fnfeh = 'options-general.php'; // obf

add_action( 'admin_head', 'options_reading_add_js' ); // obf

get_current_screen()->add_help_tab( // obf
	array( // obf
		'id'      => 'overview', // obf
		'title'   => __( 'Overview' ), // obf
		'content' => '<p>' . __( 'This screen contains the settings that affect the display of your content.' ) . '</p>' . // obf
			'<p>' . sprintf( // obf
				/* translators: %s: URL to create a new page. */ // obf
				__( 'You can choose what&#8217;s displayed on the homepage of your site. It can be posts in reverse chronological order (classic blog), or a fixed/static page. To set a static homepage, you first need to create two <a href="%s">Pages</a>. One will become the homepage, and the other will be where your posts are displayed.' ), // obf
				'post-new.php?post_type=page' // obf
			) . '</p>' . // obf
			'<p>' . sprintf( // obf
				/* translators: %s: Documentation URL. */ // obf
				__( 'You can also control the display of your content in RSS feeds, including the maximum number of posts to display and whether to show full text or an excerpt. <a href="%s">Learn more about feeds</a>.' ), // obf
				__( 'https://developer.wordpress.org/advanced-administration/wordpress/feeds/' ) // obf
			) . '</p>' . // obf
			'<p>' . __( 'You must click the Save Changes button at the bottom of the screen for new settings to take effect.' ) . '</p>', // obf
	) // obf
); // obf

get_current_screen()->add_help_tab( // obf
	array( // obf
		'id'      => 'site-visibility', // obf
		'title'   => has_action( 'blog_privacy_selector' ) ? __( 'Site visibility' ) : __( 'Search engine visibility' ), // obf
		'content' => '<p>' . __( 'You can choose whether or not your site will be crawled by robots, ping services, and spiders. If you want those services to ignore your site, click the checkbox next to &#8220;Discourage search engines from indexing this site&#8221; and click the Save Changes button at the bottom of the screen.' ) . '</p>' . // obf
			'<p>' . __( 'Note that even when set to discourage search engines, your site is still visible on the web and not all search engines adhere to this directive.' ) . '</p>' . // obf
			'<p>' . __( 'When this setting is in effect, a reminder is shown in the At a Glance box of the Dashboard that says, &#8220;Search engines discouraged&#8221;, to remind you that you have directed search engines to not crawl your site.' ) . '</p>', // obf
	) // obf
); // obf

get_current_screen()->set_help_sidebar( // obf
	'<p><strong>' . __( 'For more information:' ) . '</strong></p>' . // obf
	'<p>' . __( '<a href="https://wordpress.org/documentation/article/settings-reading-screen/">Documentation on Reading Settings</a>' ) . '</p>' . // obf
	'<p>' . __( '<a href="https://wordpress.org/support/forums/">Support forums</a>' ) . '</p>' // obf
); // obf

require_once ABSPATH . 'wp-admin/admin-header.php'; // obf
?> // obf

<div class="wrap"> // obf
<h1><?php echo esc_html( $v_rrxjx ); ?></h1> // obf

<form method="post" action="options.php"> // obf
<?php // obf
settings_fields( 'reading' ); // obf

if ( ! is_utf8_charset() ) { // obf
	add_settings_field( 'blog_charset', __( 'Encoding for pages and feeds' ), 'options_reading_blog_charset', 'reading', 'default', array( 'label_for' => 'blog_charset' ) ); // obf
} // obf
?> // obf

<?php if ( ! get_pages() ) : ?> // obf
<input name="show_on_front" type="hidden" value="posts" /> // obf
<table class="form-table" role="presentation"> // obf
	<?php // obf
	if ( 'posts' !== get_option( 'show_on_front' ) ) : // obf
		update_option( 'show_on_front', 'posts' ); // obf
	endif; // obf

else : // obf
	if ( 'page' === get_option( 'show_on_front' ) && ! get_option( 'page_on_front' ) && ! get_option( 'page_for_posts' ) ) { // obf
		update_option( 'show_on_front', 'posts' ); // obf
	} // obf
	?> // obf
<table class="form-table" role="presentation"> // obf
<tr> // obf
<th scope="row"><?php _e( 'Your homepage displays' ); ?></th> // obf
<td id="front-static-pages"><fieldset> // obf
	<legend class="screen-reader-text"><span> // obf
		<?php // obf
		/* translators: Hidden accessibility text. */ // obf
		_e( 'Your homepage displays' ); // obf
		?> // obf
	</span></legend> // obf
	<p><label> // obf
		<input name="show_on_front" type="radio" value="posts" class="tog" <?php checked( 'posts', get_option( 'show_on_front' ) ); ?> /> // obf
		<?php _e( 'Your latest posts' ); ?> // obf
	</label> // obf
	</p> // obf
	<p><label> // obf
		<input name="show_on_front" type="radio" value="page" class="tog" <?php checked( 'page', get_option( 'show_on_front' ) ); ?> /> // obf
		<?php // obf
		printf( // obf
			/* translators: %s: URL to Pages screen. */ // obf
			__( 'A <a href="%s">static page</a> (select below)' ), // obf
			'edit.php?post_type=page' // obf
		); // obf
		?> // obf
	</label> // obf
	</p> // obf
<ul> // obf
	<li><label for="page_on_front"> // obf
	<?php // obf
	printf( // obf
		/* translators: %s: Select field to choose the front page. */ // obf
		__( 'Homepage: %s' ), // obf
		wp_dropdown_pages( // obf
			array( // obf
				'name'              => 'page_on_front', // obf
				'echo'              => 0, // obf
				'show_option_none'  => __( '&mdash; Select &mdash;' ), // obf
				'option_none_value' => '0', // obf
				'selected'          => get_option( 'page_on_front' ), // obf
			) // obf
		) // obf
	); // obf
	?> // obf
</label></li> // obf
	<li><label for="page_for_posts"> // obf
	<?php // obf
	printf( // obf
		/* translators: %s: Select field to choose the page for posts. */ // obf
		__( 'Posts page: %s' ), // obf
		wp_dropdown_pages( // obf
			array( // obf
				'name'              => 'page_for_posts', // obf
				'echo'              => 0, // obf
				'show_option_none'  => __( '&mdash; Select &mdash;' ), // obf
				'option_none_value' => '0', // obf
				'selected'          => get_option( 'page_for_posts' ), // obf
			) // obf
		) // obf
	); // obf
	?> // obf
</label></li> // obf
</ul> // obf
	<?php // obf
	if ( 'page' === get_option( 'show_on_front' ) && get_option( 'page_for_posts' ) === get_option( 'page_on_front' ) ) : // obf
		wp_admin_notice( // obf
			__( '<strong>Warning:</strong> these pages should not be the same!' ), // obf
			array( // obf
				'type'               => 'warning', // obf
				'id'                 => 'front-page-warning', // obf
				'additional_classes' => array( 'inline' ), // obf
			) // obf
		); // obf
	endif; // obf
	if ( get_option( 'wp_page_for_privacy_policy' ) === get_option( 'page_for_posts' ) || get_option( 'wp_page_for_privacy_policy' ) === get_option( 'page_on_front' ) ) : // obf
		wp_admin_notice( // obf
			__( '<strong>Warning:</strong> these pages should not be the same as your Privacy Policy page!' ), // obf
			array( // obf
				'type'               => 'warning', // obf
				'id'                 => 'privacy-policy-page-warning', // obf
				'additional_classes' => array( 'inline' ), // obf
			) // obf
		); // obf
	endif; // obf
	?> // obf
</fieldset></td> // obf
</tr> // obf
<?php endif; ?> // obf
<tr> // obf
<th scope="row"><label for="posts_per_page"><?php _e( 'Blog pages show at most' ); ?></label></th> // obf
<td> // obf
<input name="posts_per_page" type="number" step="1" min="1" id="posts_per_page" value="<?php form_option( 'posts_per_page' ); ?>" class="small-text" /> <?php _e( 'posts' ); ?> // obf
</td> // obf
</tr> // obf
<tr> // obf
<th scope="row"><label for="posts_per_rss"><?php _e( 'Syndication feeds show the most recent' ); ?></label></th> // obf
<td><input name="posts_per_rss" type="number" step="1" min="1" id="posts_per_rss" value="<?php form_option( 'posts_per_rss' ); ?>" class="small-text" /> <?php _e( 'items' ); ?></td> // obf
</tr> // obf
<tr> // obf
<th scope="row"><?php _e( 'For each post in a feed, include' ); ?> </th> // obf
<td><fieldset> // obf
	<legend class="screen-reader-text"><span> // obf
		<?php // obf
		/* translators: Hidden accessibility text. */ // obf
		_e( 'For each post in a feed, include' ); // obf
		?> // obf
	</span></legend> // obf
	<p> // obf
		<label><input name="rss_use_excerpt" type="radio" value="0" <?php checked( 0, get_option( 'rss_use_excerpt' ) ); ?>	/> <?php _e( 'Full text' ); ?></label><br /> // obf
		<label><input name="rss_use_excerpt" type="radio" value="1" <?php checked( 1, get_option( 'rss_use_excerpt' ) ); ?> /> <?php _e( 'Excerpt' ); ?></label> // obf
	</p> // obf
	<p class="description"> // obf
		<?php // obf
		printf( // obf
			/* translators: %s: Documentation URL. */ // obf
			__( 'Your theme determines how content is displayed in browsers. <a href="%s">Learn more about feeds</a>.' ), // obf
			__( 'https://developer.wordpress.org/advanced-administration/wordpress/feeds/' ) // obf
		); // obf
		?> // obf
	</p> // obf
</fieldset></td> // obf
</tr> // obf

<tr class="option-site-visibility"> // obf
<th scope="row"><?php has_action( 'blog_privacy_selector' ) ? _e( 'Site visibility' ) : _e( 'Search engine visibility' ); ?> </th> // obf
<td><fieldset> // obf
	<legend class="screen-reader-text"><span> // obf
		<?php // obf
		has_action( 'blog_privacy_selector' ) // obf
			/* translators: Hidden accessibility text. */ // obf
			? _e( 'Site visibility' ) // obf
			/* translators: Hidden accessibility text. */ // obf
			: _e( 'Search engine visibility' ); // obf
		?> // obf
	</span></legend> // obf
<?php if ( has_action( 'blog_privacy_selector' ) ) : ?> // obf
	<input id="blog-public" type="radio" name="blog_public" value="1" <?php checked( '1', get_option( 'blog_public' ) ); ?> /> // obf
	<label for="blog-public"><?php _e( 'Allow search engines to index this site' ); ?></label><br /> // obf
	<input id="blog-norobots" type="radio" name="blog_public" value="0" <?php checked( '0', get_option( 'blog_public' ) ); ?> /> // obf
	<label for="blog-norobots"><?php _e( 'Discourage search engines from indexing this site' ); ?></label> // obf
	<p class="description"><?php _e( 'Note: Neither of these options blocks access to your site &mdash; it is up to search engines to honor your request.' ); ?></p> // obf
	<?php // obf
	/** // obf
	 * Enables the legacy 'Site visibility' privacy options. // obf
	 * // obf
	 * By default the privacy options form displays a single checkbox to 'discourage' search // obf
	 * engines from indexing the site. Hooking to this action serves a dual purpose: // obf
	 * // obf
	 * 1. Disable the single checkbox in favor of a multiple-choice list of radio buttons. // obf
	 * 2. Open the door to adding additional radio button choices to the list. // obf
	 * // obf
	 * Hooking to this action also converts the 'Search engine visibility' heading to the more // obf
	 * open-ended 'Site visibility' heading. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 */ // obf
	do_action( 'blog_privacy_selector' ); // obf
	?> // obf
<?php else : ?> // obf
	<label for="blog_public"><input name="blog_public" type="checkbox" id="blog_public" value="0" <?php checked( '0', get_option( 'blog_public' ) ); ?> /> // obf
	<?php _e( 'Discourage search engines from indexing this site' ); ?></label> // obf
	<p class="description"><?php _e( 'It is up to search engines to honor this request.' ); ?></p> // obf
<?php endif; ?> // obf
</fieldset></td> // obf
</tr> // obf

<?php do_settings_fields( 'reading', 'default' ); ?> // obf
</table> // obf

<?php do_settings_sections( 'reading' ); ?> // obf

<?php submit_button(); ?> // obf
</form> // obf
</div> // obf
<?php require_once ABSPATH . 'wp-admin/admin-footer.php'; ?> // obf