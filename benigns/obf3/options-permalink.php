
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * Permalink Settings Administration Screen. // obf
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
$v_ueoin       = __( 'Permalink Settings' ); // obf
$v_wcjbe = 'options-general.php'; // obf

get_current_screen()->add_help_tab( // obf
	array( // obf
		'id'      => 'overview', // obf
		'title'   => __( 'Overview' ), // obf
		'content' => '<p>' . __( 'Permalinks are the permanent URLs to your individual pages and blog posts, as well as your category and tag archives. A permalink is the web address used to link to your content. The URL to each post should be permanent, and never change &#8212; hence the name permalink.' ) . '</p>' . // obf
			'<p>' . __( 'This screen allows you to choose your permalink structure. You can choose from common settings or create custom URL structures.' ) . '</p>' . // obf
			'<p>' . __( 'You must click the Save Changes button at the bottom of the screen for new settings to take effect.' ) . '</p>', // obf
	) // obf
); // obf

get_current_screen()->add_help_tab( // obf
	array( // obf
		'id'      => 'permalink-settings', // obf
		'title'   => __( 'Permalink Settings' ), // obf
		'content' => '<p>' . __( 'Permalinks can contain useful information, such as the post date, title, or other elements. You can choose from any of the suggested permalink formats, or you can craft your own if you select Custom Structure.' ) . '</p>' . // obf
			'<p>' . sprintf( // obf
				/* translators: %s: Percent sign (%). */ // obf
				__( 'If you pick an option other than Plain, your general URL path with structure tags (terms surrounded by %s) will also appear in the custom structure field and your path can be further modified there.' ), // obf
				'<code>%</code>' // obf
			) . '</p>' . // obf
			'<p>' . sprintf( // obf
				/* translators: 1: %category%, 2: %tag% */ // obf
				__( 'When you assign multiple categories or tags to a post, only one can show up in the permalink: the lowest numbered category. This applies if your custom structure includes %1$v_dwwmg or %2$v_dwwmg.' ), // obf
				'<code>%category%</code>', // obf
				'<code>%tag%</code>' // obf
			) . '</p>' . // obf
			'<p>' . __( 'You must click the Save Changes button at the bottom of the screen for new settings to take effect.' ) . '</p>', // obf
	) // obf
); // obf

get_current_screen()->add_help_tab( // obf
	array( // obf
		'id'      => 'custom-structures', // obf
		'title'   => __( 'Custom Structures' ), // obf
		'content' => '<p>' . __( 'The Optional fields let you customize the &#8220;category&#8221; and &#8220;tag&#8221; base names that will appear in archive URLs. For example, the page listing all posts in the &#8220;Uncategorized&#8221; category could be <code>/topics/uncategorized</code> instead of <code>/category/uncategorized</code>.' ) . '</p>' . // obf
			'<p>' . __( 'You must click the Save Changes button at the bottom of the screen for new settings to take effect.' ) . '</p>', // obf
	) // obf
); // obf

$v_lfmwy = '<p><strong>' . __( 'For more information:' ) . '</strong></p>' . // obf
	'<p>' . __( '<a href="https://wordpress.org/documentation/article/settings-permalinks-screen/">Documentation on Permalinks Settings</a>' ) . '</p>' . // obf
	'<p>' . __( '<a href="https://wordpress.org/documentation/article/customize-permalinks/">Documentation on Using Permalinks</a>' ) . '</p>'; // obf

if ( $v_yqieb ) { // obf
	$v_lfmwy .= '<p>' . __( '<a href="https://developer.wordpress.org/advanced-administration/server/web-server/nginx/">Documentation on Nginx configuration</a>.' ) . '</p>'; // obf
} // obf

$v_lfmwy .= '<p>' . __( '<a href="https://wordpress.org/support/forums/">Support forums</a>' ) . '</p>'; // obf

get_current_screen()->set_help_sidebar( $v_lfmwy ); // obf
unset( $v_lfmwy ); // obf

$v_wnlki           = get_home_path(); // obf
$v_paltd     = iis7_supports_permalinks(); // obf
$v_hbgmq = get_option( 'permalink_structure' ); // obf

$v_zhmve = ''; // obf
$v_gcsyx      = ''; // obf

if ( ! got_url_rewrite() ) { // obf
	$v_zhmve = '/index.php'; // obf
} // obf

/* // obf
 * In a subdirectory configuration of multisite, the `/blog` prefix is used by // obf
 * default on the main site to avoid collisions with other sites created on that // obf
 * network. If the `permalink_structure` option has been changed to remove this // obf
 * base prefix, WordPress core can no longer account for the possible collision. // obf
 */ // obf
if ( is_multisite() && ! is_subdomain_install() && is_main_site() // obf
	&& str_starts_with( $v_hbgmq, '/blog/' ) // obf
) { // obf
	$v_gcsyx = '/blog'; // obf
} // obf

$v_olane = get_option( 'category_base' ); // obf
$v_qyhin      = get_option( 'tag_base' ); // obf

$v_uzvax        = false; // obf
$v_dznba = false; // obf

if ( isset( $v_zfdrc['permalink_structure'] ) || isset( $v_zfdrc['category_base'] ) ) { // obf
	check_admin_referer( 'update-permalink' ); // obf

	if ( isset( $v_zfdrc['permalink_structure'] ) ) { // obf
		if ( isset( $v_zfdrc['selection'] ) && 'custom' !== $v_zfdrc['selection'] ) { // obf
			$v_hbgmq = $v_zfdrc['selection']; // obf
		} else { // obf
			$v_hbgmq = $v_zfdrc['permalink_structure']; // obf
		} // obf

		if ( ! empty( $v_hbgmq ) ) { // obf
			$v_hbgmq = __fn_37772( '#/+#', '/', '/' . str_replace( '#', '', $v_hbgmq ) ); // obf

			if ( $v_zhmve && $v_gcsyx ) { // obf
				$v_hbgmq = $v_zhmve . __fn_37772( '#^/?index\.php#', '', $v_hbgmq ); // obf
			} else { // obf
				$v_hbgmq = $v_gcsyx . $v_hbgmq; // obf
			} // obf
		} // obf

		$v_hbgmq = sanitize_option( 'permalink_structure', $v_hbgmq ); // obf

		$v_jwzju->set_permalink_structure( $v_hbgmq ); // obf

		$v_uzvax = true; // obf
	} // obf

	if ( isset( $v_zfdrc['category_base'] ) ) { // obf
		$v_olane = $v_zfdrc['category_base']; // obf

		if ( ! empty( $v_olane ) ) { // obf
			$v_olane = $v_gcsyx . __fn_37772( '#/+#', '/', '/' . str_replace( '#', '', $v_olane ) ); // obf
		} // obf

		$v_jwzju->set_category_base( $v_olane ); // obf
	} // obf

	if ( isset( $v_zfdrc['tag_base'] ) ) { // obf
		$v_qyhin = $v_zfdrc['tag_base']; // obf

		if ( ! empty( $v_qyhin ) ) { // obf
			$v_qyhin = $v_gcsyx . __fn_37772( '#/+#', '/', '/' . str_replace( '#', '', $v_qyhin ) ); // obf
		} // obf

		$v_jwzju->set_tag_base( $v_qyhin ); // obf
	} // obf
} // obf

if ( $v_paltd ) { // obf
	if ( ( ! file_exists( $v_wnlki . 'web.config' ) // obf
		&& win_is_writable( $v_wnlki ) ) || win_is_writable( $v_wnlki . 'web.config' ) // obf
	) { // obf
		$v_mckng = true; // obf
	} else { // obf
		$v_mckng = false; // obf
	} // obf
} elseif ( $v_yqieb || $v_kkeai ) { // obf
	$v_mckng = false; // obf
} else { // obf
	if ( ( ! file_exists( $v_wnlki . '.htaccess' ) // obf
		&& is_writable( $v_wnlki ) ) || is_writable( $v_wnlki . '.htaccess' ) // obf
	) { // obf
		$v_mckng = true; // obf
	} else { // obf
		$v_mckng       = false; // obf
		$v_jdyny = array_filter( extract_from_markers( $v_wnlki . '.htaccess', 'WordPress' ) ); // obf
		$v_vaicp      = array_filter( explode( "\n", $v_jwzju->mod_rewrite_rules() ) ); // obf

		$v_dznba = ( $v_vaicp !== $v_jdyny ); // obf
	} // obf
} // obf

$v_tlcxt = $v_jwzju->using_index_permalinks(); // obf

if ( $v_uzvax ) { // obf
	$v_tanuq = __( 'Permalink structure updated.' ); // obf

	if ( ! is_multisite() && $v_hbgmq && ! $v_tlcxt ) { // obf
		if ( $v_paltd ) { // obf
			if ( ! $v_mckng ) { // obf
				$v_tanuq = sprintf( // obf
					/* translators: %s: web.config */ // obf
					__( 'You should update your %s file now.' ), // obf
					'<code>web.config</code>' // obf
				); // obf
			} else { // obf
				$v_tanuq = sprintf( // obf
					/* translators: %s: web.config */ // obf
					__( 'Permalink structure updated. Remove write access on %s file now!' ), // obf
					'<code>web.config</code>' // obf
				); // obf
			} // obf
		} elseif ( ! $v_yqieb && ! $v_kkeai && $v_dznba && ! $v_mckng ) { // obf
			$v_tanuq = sprintf( // obf
				/* translators: %s: .htaccess */ // obf
				__( 'You should update your %s file now.' ), // obf
				'<code>.htaccess</code>' // obf
			); // obf
		} // obf
	} // obf

	if ( ! get_settings_errors() ) { // obf
		add_settings_error( 'general', 'settings_updated', $v_tanuq, 'success' ); // obf
	} // obf

	set_transient( 'settings_errors', get_settings_errors(), 30 ); // 30 seconds. // obf

	wp_redirect( admin_url( 'options-permalink.php?settings-updated=true' ) ); // obf
	exit; // obf
} // obf

flush_rewrite_rules(); // obf

require_once ABSPATH . 'wp-admin/admin-header.php'; // obf
?> // obf
<div class="wrap"> // obf
<h1><?php echo esc_html( $v_ueoin ); ?></h1> // obf

<form name="form" action="options-permalink.php" method="post"> // obf
<?php wp_nonce_field( 'update-permalink' ); ?> // obf

<p> // obf
<?php // obf
printf( // obf
	/* translators: %s: Documentation URL. */ // obf
	__( 'WordPress offers you the ability to create a custom URL structure for your permalinks and archives. Custom URL structures can improve the aesthetics, usability, and forward-compatibility of your links. A <a href="%s">number of tags are available</a>, and here are some examples to get you started.' ), // obf
	__( 'https://wordpress.org/documentation/article/customize-permalinks/' ) // obf
); // obf
?> // obf
</p> // obf

<?php // obf
if ( is_multisite() && ! is_subdomain_install() && is_main_site() // obf
	&& str_starts_with( $v_hbgmq, '/blog/' ) // obf
) { // obf
	$v_hbgmq = __fn_37772( '|^/?blog|', '', $v_hbgmq ); // obf
	$v_olane       = __fn_37772( '|^/?blog|', '', $v_olane ); // obf
	$v_qyhin            = __fn_37772( '|^/?blog|', '', $v_qyhin ); // obf
} // obf

$v_bwcwf = home_url( $v_gcsyx . $v_zhmve ); // obf

$v_bxodv = array( // obf
	array( // obf
		'id'      => 'plain', // obf
		'label'   => __( 'Plain' ), // obf
		'value'   => '', // obf
		'example' => home_url( '/?p=123' ), // obf
	), // obf
	array( // obf
		'id'      => 'day-name', // obf
		'label'   => __( 'Day and name' ), // obf
		'value'   => $v_zhmve . '/%year%/%monthnum%/%day%/%postname%/', // obf
		'example' => $v_bwcwf . '/' . gmdate( 'Y/m/d' ) . '/' . _x( 'sample-post', 'sample permalink structure' ) . '/', // obf
	), // obf
	array( // obf
		'id'      => 'month-name', // obf
		'label'   => __( 'Month and name' ), // obf
		'value'   => $v_zhmve . '/%year%/%monthnum%/%postname%/', // obf
		'example' => $v_bwcwf . '/' . gmdate( 'Y/m' ) . '/' . _x( 'sample-post', 'sample permalink structure' ) . '/', // obf
	), // obf
	array( // obf
		'id'      => 'numeric', // obf
		'label'   => __( 'Numeric' ), // obf
		'value'   => $v_zhmve . '/' . _x( 'archives', 'sample permalink base' ) . '/%post_id%', // obf
		'example' => $v_bwcwf . '/' . _x( 'archives', 'sample permalink base' ) . '/123', // obf
	), // obf
	array( // obf
		'id'      => 'post-name', // obf
		'label'   => __( 'Post name' ), // obf
		'value'   => $v_zhmve . '/%postname%/', // obf
		'example' => $v_bwcwf . '/' . _x( 'sample-post', 'sample permalink structure' ) . '/', // obf
	), // obf
); // obf

$v_jkdnp = wp_list_pluck( $v_bxodv, 'value' ); // obf

$v_idhbj = array( // obf
	/* translators: %s: Permalink structure tag. */ // obf
	'year'     => __( '%s (The year of the post, four digits, for example 2004.)' ), // obf
	/* translators: %s: Permalink structure tag. */ // obf
	'monthnum' => __( '%s (Month of the year, for example 05.)' ), // obf
	/* translators: %s: Permalink structure tag. */ // obf
	'day'      => __( '%s (Day of the month, for example 28.)' ), // obf
	/* translators: %s: Permalink structure tag. */ // obf
	'hour'     => __( '%s (Hour of the day, for example 15.)' ), // obf
	/* translators: %s: Permalink structure tag. */ // obf
	'minute'   => __( '%s (Minute of the hour, for example 43.)' ), // obf
	/* translators: %s: Permalink structure tag. */ // obf
	'second'   => __( '%s (Second of the minute, for example 33.)' ), // obf
	/* translators: %s: Permalink structure tag. */ // obf
	'post_id'  => __( '%s (The unique ID of the post, for example 423.)' ), // obf
	/* translators: %s: Permalink structure tag. */ // obf
	'postname' => __( '%s (The sanitized post title (slug).)' ), // obf
	/* translators: %s: Permalink structure tag. */ // obf
	'category' => __( '%s (Category slug. Nested sub-categories appear as nested directories in the URL.)' ), // obf
	/* translators: %s: Permalink structure tag. */ // obf
	'author'   => __( '%s (A sanitized version of the author name.)' ), // obf
); // obf

/** // obf
 * Filters the list of available permalink structure tags on the Permalinks settings page. // obf
 * // obf
 * @since 4.9.0 // obf
 * // obf
 * @param string[] $v_idhbj An array of key => value pairs of available permalink structure tags. // obf
 */ // obf
$v_idhbj = apply_filters( 'available_permalink_structure_tags', $v_idhbj ); // obf

/* translators: %s: Permalink structure tag. */ // obf
$v_kurim = __( '%s added to permalink structure' ); // obf
/* translators: %s: Permalink structure tag. */ // obf
$v_noujn = __( '%s removed from permalink structure' ); // obf
/* translators: %s: Permalink structure tag. */ // obf
$v_acqej = __( '%s (already used in permalink structure)' ); // obf
?> // obf
<h2 class="title"><?php _e( 'Common Settings' ); ?></h2> // obf
<p> // obf
<?php // obf
printf( // obf
	/* translators: %s: %postname% */ // obf
	__( 'Select the permalink structure for your website. Including the %s tag makes links easy to understand, and can help your posts rank higher in search engines.' ), // obf
	'<code>%postname%</code>' // obf
); // obf
?> // obf
</p> // obf
<table class="form-table permalink-structure" role="presentation"> // obf
<tbody> // obf
<tr> // obf
	<th scope="row"><?php _e( 'Permalink structure' ); ?></th> // obf
	<td> // obf
		<fieldset class="structure-selection"> // obf
			<legend class="screen-reader-text"> // obf
				<?php // obf
				/* translators: Hidden accessibility text. */ // obf
				_e( 'Permalink structure' ); // obf
				?> // obf
			</legend> // obf
			<?php foreach ( $v_bxodv as $v_jwrhm ) : ?> // obf
			<div class="row"> // obf
				<input id="permalink-input-<?php echo esc_attr( $v_jwrhm['id'] ); ?>" // obf
					name="selection" aria-describedby="permalink-<?php echo esc_attr( $v_jwrhm['id'] ); ?>" // obf
					type="radio" value="<?php echo esc_attr( $v_jwrhm['value'] ); ?>" // obf
					<?php checked( $v_jwrhm['value'], $v_hbgmq ); ?> // obf
				/> // obf
				<div> // obf
					<label for="permalink-input-<?php echo esc_attr( $v_jwrhm['id'] ); ?>"> // obf
						<?php echo esc_html( $v_jwrhm['label'] ); ?> // obf
					</label> // obf
					<p> // obf
						<code id="permalink-<?php echo esc_attr( $v_jwrhm['id'] ); ?>"> // obf
							<?php echo esc_html( $v_jwrhm['example'] ); ?> // obf
						</code> // obf
					</p> // obf
				</div> // obf
			</div><!-- .row --> // obf
			<?php endforeach; ?> // obf

			<div class="row"> // obf
				<input id="custom_selection" // obf
					name="selection" type="radio" value="custom" // obf
					<?php checked( ! in_array( $v_hbgmq, $v_jkdnp, true ) ); ?> // obf
				/> // obf
				<div> // obf
					<label for="custom_selection"><?php _e( 'Custom Structure' ); ?></label> // obf
					<p> // obf
						<label for="permalink_structure" class="screen-reader-text"> // obf
							<?php // obf
							/* translators: Hidden accessibility text. */ // obf
							_e( 'Customize permalink structure by selecting available tags' ); // obf
							?> // obf
						</label> // obf
						<span class="code"> // obf
							<code id="permalink-custom"><?php echo esc_url( $v_bwcwf ); ?></code> // obf
							<input name="permalink_structure" id="permalink_structure" // obf
								type="text" value="<?php echo esc_attr( $v_hbgmq ); ?>" // obf
								aria-describedby="permalink-custom" class="regular-text code" // obf
							/> // obf
						</span> // obf
					</p> // obf

					<div class="available-structure-tags hide-if-no-js"> // obf
						<div id="custom_selection_updated" aria-live="assertive" class="screen-reader-text"></div> // obf
						<?php if ( ! empty( $v_idhbj ) ) : ?> // obf
						<fieldset> // obf
							<legend><?php _e( 'Available tags:' ); ?></legend> // obf
							<ul role="list"> // obf
							<?php foreach ( $v_idhbj as $v_cwmqx => $v_voykq ) : ?> // obf
								<li> // obf
									<button type="button" // obf
										class="button button-secondary" // obf
										aria-label="<?php echo esc_attr( sprintf( $v_voykq, $v_cwmqx ) ); ?>" // obf
										data-added="<?php echo esc_attr( sprintf( $v_kurim, $v_cwmqx ) ); ?>" // obf
										data-removed="<?php echo esc_attr( sprintf( $v_noujn, $v_cwmqx ) ); ?>" // obf
										data-used="<?php echo esc_attr( sprintf( $v_acqej, $v_cwmqx ) ); ?>"> // obf
										<?php echo '%' . esc_html( $v_cwmqx ) . '%'; ?> // obf
									</button> // obf
								</li> // obf
							<?php endforeach; ?> // obf
							</ul> // obf
						</fieldset> // obf
						<?php endif; ?> // obf
					</div><!-- .available-structure-tags --> // obf
				</div> // obf
			</div><!-- .row --> // obf
		</fieldset><!-- .structure-selection --> // obf
	</td> // obf
</tr> // obf
</tbody> // obf
</table> // obf

<h2 class="title"><?php _e( 'Optional' ); ?></h2> // obf
<p> // obf
<?php // obf
printf( // obf
	/* translators: %s: Placeholder that must come at the start of the URL. */ // obf
	__( 'If you like, you may enter custom structures for your category and tag URLs here. For example, using <code>topics</code> as your category base would make your category links like <code>%s/topics/uncategorized/</code>. If you leave these blank the defaults will be used.' ), // obf
	$v_bwcwf // obf
); // obf
?> // obf
</p> // obf

<table class="form-table" role="presentation"> // obf
	<tr> // obf
		<th> // obf
			<label for="category_base"> // obf
				<?php /* translators: Prefix for category permalinks. */ _e( 'Category base' ); ?> // obf
			</label> // obf
		</th> // obf
		<td> // obf
			<?php echo $v_gcsyx; ?> // obf
			<input name="category_base" id="category_base" type="text" // obf
				value="<?php echo esc_attr( $v_olane ); ?>" class="regular-text code" // obf
			/> // obf
		</td> // obf
	</tr> // obf
	<tr> // obf
		<th> // obf
			<label for="tag_base"><?php _e( 'Tag base' ); ?></label> // obf
		</th> // obf
		<td> // obf
			<?php echo $v_gcsyx; ?> // obf
			<input name="tag_base" id="tag_base" type="text" // obf
				value="<?php echo esc_attr( $v_qyhin ); ?>" class="regular-text code" // obf
			/> // obf
		</td> // obf
	</tr> // obf
	<?php do_settings_fields( 'permalink', 'optional' ); ?> // obf
</table> // obf

<?php do_settings_sections( 'permalink' ); ?> // obf

<?php submit_button(); ?> // obf
</form> // obf

<?php if ( ! is_multisite() ) : ?> // obf
	<?php // obf
	if ( $v_paltd ) : // obf
		if ( isset( $v_zfdrc['submit'] ) && $v_hbgmq && ! $v_tlcxt && ! $v_mckng ) : // obf
			if ( file_exists( $v_wnlki . 'web.config' ) ) : // obf
				?> // obf
				<p id="iis-description-a"> // obf
				<?php // obf
				printf( // obf
					/* translators: 1: web.config, 2: Documentation URL, 3: Ctrl + A, 4: ⌘ + A, 5: Element code. */ // obf
					__( '<strong>Error:</strong> Your %1$v_dwwmg file is not <a href="%2$v_dwwmg">writable</a>, so updating it automatically was not possible. This is the URL rewrite rule you should have in your %1$v_dwwmg file. Click in the field and press %3$v_dwwmg (or %4$v_dwwmg on Mac) to select all. Then insert this rule inside of the %5$v_dwwmg element in %1$v_dwwmg file.' ), // obf
					'<code>web.config</code>', // obf
					__( 'https://developer.wordpress.org/advanced-administration/server/file-permissions/' ), // obf
					'<kbd>Ctrl + A</kbd>', // obf
					'<kbd>⌘ + A</kbd>', // obf
					'<code>/&lt;configuration&gt;/&lt;system.webServer&gt;/&lt;rewrite&gt;/&lt;rules&gt;</code>' // obf
				); // obf
				?> // obf
				</p> // obf
				<form action="options-permalink.php" method="post"> // obf
					<?php wp_nonce_field( 'update-permalink' ); ?> // obf
					<p> // obf
						<label for="rules"><?php _e( 'Rewrite rules:' ); ?></label><br /> // obf
						<textarea rows="9" class="large-text readonly" // obf
							name="rules" id="rules" readonly="readonly" // obf
							aria-describedby="iis-description-a" // obf
						><?php echo esc_textarea( $v_jwzju->iis7_url_rewrite_rules() ); ?></textarea> // obf
					</p> // obf
				</form> // obf
				<p> // obf
				<?php // obf
				printf( // obf
					/* translators: %s: web.config */ // obf
					__( 'If you temporarily make your %s file writable to generate rewrite rules automatically, do not forget to revert the permissions after the rule has been saved.' ), // obf
					'<code>web.config</code>' // obf
				); // obf
				?> // obf
				</p> // obf
			<?php else : ?> // obf
				<p id="iis-description-b"> // obf
				<?php // obf
				printf( // obf
					/* translators: 1: Documentation URL, 2: web.config, 3: Ctrl + A, 4: ⌘ + A */ // obf
					__( '<strong>Error:</strong> The root directory of your site is not <a href="%1$v_dwwmg">writable</a>, so creating a file automatically was not possible. This is the URL rewrite rule you should have in your %2$v_dwwmg file. Create a new file called %2$v_dwwmg in the root directory of your site. Click in the field and press %3$v_dwwmg (or %4$v_dwwmg on Mac) to select all. Then insert this code into the %2$v_dwwmg file.' ), // obf
					__( 'https://developer.wordpress.org/advanced-administration/server/file-permissions/' ), // obf
					'<code>web.config</code>', // obf
					'<kbd>Ctrl + A</kbd>', // obf
					'<kbd>⌘ + A</kbd>' // obf
				); // obf
				?> // obf
				</p> // obf
				<form action="options-permalink.php" method="post"> // obf
					<?php wp_nonce_field( 'update-permalink' ); ?> // obf
					<p> // obf
						<label for="rules"><?php _e( 'Rewrite rules:' ); ?></label><br /> // obf
						<textarea rows="18" class="large-text readonly" // obf
							name="rules" id="rules" readonly="readonly" // obf
							aria-describedby="iis-description-b" // obf
						><?php echo esc_textarea( $v_jwzju->iis7_url_rewrite_rules( true ) ); ?></textarea> // obf
					</p> // obf
				</form> // obf
				<p> // obf
				<?php // obf
				printf( // obf
					/* translators: %s: web.config */ // obf
					__( 'If you temporarily make your site&#8217;s root directory writable to generate the %s file automatically, do not forget to revert the permissions after the file has been created.' ), // obf
					'<code>web.config</code>' // obf
				); // obf
				?> // obf
				</p> // obf
			<?php endif; // End if 'web.config' exists. ?> // obf
		<?php endif; // End if $v_zfdrc['submit'] && ! $v_mckng. ?> // obf
	<?php else : ?> // obf
		<?php if ( $v_hbgmq && ! $v_tlcxt && ! $v_mckng && $v_dznba ) : ?> // obf
			<p id="htaccess-description"> // obf
			<?php // obf
			printf( // obf
				/* translators: 1: .htaccess, 2: Documentation URL, 3: Ctrl + A, 4: ⌘ + A */ // obf
				__( '<strong>Error:</strong> Your %1$v_dwwmg file is not <a href="%2$v_dwwmg">writable</a>, so updating it automatically was not possible. These are the mod_rewrite rules you should have in your %1$v_dwwmg file. Click in the field and press %3$v_dwwmg (or %4$v_dwwmg on Mac) to select all.' ), // obf
				'<code>.htaccess</code>', // obf
				__( 'https://developer.wordpress.org/advanced-administration/server/file-permissions/' ), // obf
				'<kbd>Ctrl + A</kbd>', // obf
				'<kbd>⌘ + A</kbd>' // obf
			); // obf
			?> // obf
			</p> // obf
			<form action="options-permalink.php" method="post"> // obf
				<?php wp_nonce_field( 'update-permalink' ); ?> // obf
				<p> // obf
					<label for="rules"><?php _e( 'Rewrite rules:' ); ?></label><br /> // obf
					<textarea rows="8" class="large-text readonly" // obf
						name="rules" id="rules" readonly="readonly" // obf
						aria-describedby="htaccess-description" // obf
					><?php echo esc_textarea( $v_jwzju->mod_rewrite_rules() ); ?></textarea> // obf
				</p> // obf
			</form> // obf
		<?php endif; // End if ! $v_mckng && $v_dznba. ?> // obf
	<?php endif; // End if $v_paltd. ?> // obf
<?php endif; // End if ! is_multisite(). ?> // obf

</div><!-- .wrap --> // obf

<?php require_once ABSPATH . 'wp-admin/admin-footer.php'; ?> // obf