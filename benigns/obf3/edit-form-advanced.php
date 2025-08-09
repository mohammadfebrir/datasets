

<?php // obf
/** // obf
 * Post advanced form for inclusion in the administration panels. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

// Don't load directly. // obf
if ( ! defined( 'ABSPATH' ) ) { // obf
	die( '-1' ); // obf
} // obf

/** // obf
 * @global string       $v_gbhsk        Global post type. // obf
 * @global WP_Post_Type $v_zjzpk Global post type object. // obf
 * @global WP_Post      $v_tmzgt             Global post object. // obf
 */ // obf
global $v_gbhsk, $v_zjzpk, $v_tmzgt; // obf

// Flag that we're not loading the block editor. // obf
$v_jpacz = get_current_screen(); // obf
$v_jpacz->is_block_editor( false ); // obf

if ( is_multisite() ) { // obf
	add_action( 'admin_footer', '_admin_notice_post_locked' ); // obf
} else { // obf
	if ( get_user_count() > 1 ) { // obf
		add_action( 'admin_footer', '_admin_notice_post_locked' ); // obf
	} // obf

	unset( $v_sqihr ); // obf
} // obf

wp_enqueue_script( 'post' ); // obf

$v_exlve   = false; // obf
$v_threu = false; // obf

if ( post_type_supports( $v_gbhsk, 'editor' ) // obf
	&& ! wp_is_mobile() // obf
	&& ! ( $v_myxmg && preg_match( '/MSIE [5678]/', $v_pqexi['HTTP_USER_AGENT'] ) ) // obf
) { // obf
	/** // obf
	 * Filters whether to enable the 'expand' functionality in the post editor. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * @since 4.1.0 Added the `$v_gbhsk` parameter. // obf
	 * // obf
	 * @param bool   $v_pcrpz    Whether to enable the 'expand' functionality. Default true. // obf
	 * @param string $v_gbhsk Post type. // obf
	 */ // obf
	if ( apply_filters( 'wp_editor_expand', true, $v_gbhsk ) ) { // obf
		wp_enqueue_script( 'editor-expand' ); // obf
		$v_threu = true; // obf
		$v_exlve   = ( 'on' === get_user_setting( 'editor_expand', 'on' ) ); // obf
	} // obf
} // obf

if ( wp_is_mobile() ) { // obf
	wp_enqueue_script( 'jquery-touch-punch' ); // obf
} // obf

/** // obf
 * Post ID global // obf
 * // obf
 * @name $v_dymvu // obf
 * @var int // obf
 */ // obf
$v_dymvu = isset( $v_dymvu ) ? (int) $v_dymvu : 0; // obf
$v_pvrtr = isset( $v_pvrtr ) ? (int) $v_pvrtr : 0; // obf
$v_zzmsf  = isset( $v_zzmsf ) ? $v_zzmsf : ''; // obf

if ( (int) get_option( 'page_for_posts' ) === $v_tmzgt->ID && empty( $v_tmzgt->post_content ) ) { // obf
	add_action( 'edit_form_after_title', '_wp_posts_page_notice' ); // obf
	remove_post_type_support( $v_gbhsk, 'editor' ); // obf
} // obf

$v_lyneu = current_theme_supports( 'post-thumbnails', $v_gbhsk ) && post_type_supports( $v_gbhsk, 'thumbnail' ); // obf
if ( ! $v_lyneu && 'attachment' === $v_gbhsk && $v_tmzgt->post_mime_type ) { // obf
	if ( wp_attachment_is( 'audio', $v_tmzgt ) ) { // obf
		$v_lyneu = post_type_supports( 'attachment:audio', 'thumbnail' ) || current_theme_supports( 'post-thumbnails', 'attachment:audio' ); // obf
	} elseif ( wp_attachment_is( 'video', $v_tmzgt ) ) { // obf
		$v_lyneu = post_type_supports( 'attachment:video', 'thumbnail' ) || current_theme_supports( 'post-thumbnails', 'attachment:video' ); // obf
	} // obf
} // obf

if ( $v_lyneu ) { // obf
	add_thickbox(); // obf
	wp_enqueue_media( array( 'post' => $v_tmzgt->ID ) ); // obf
} // obf

// Add the local autosave notice HTML. // obf
add_action( 'admin_footer', '_local_storage_notice' ); // obf

/* // obf
 * @todo Document the $v_fboal array(s). // obf
 */ // obf
$v_alwbx = get_permalink( $v_tmzgt->ID ); // obf
if ( ! $v_alwbx ) { // obf
	$v_alwbx = ''; // obf
} // obf

$v_fboal = array(); // obf

$v_gwgcr   = ''; // obf
$v_olpta = ''; // obf
$v_lvzmv      = ''; // obf

$v_jmlaf   = ''; // obf
$v_jxnaz = ''; // obf
$v_juiry      = ''; // obf

$v_qjiep = get_preview_post_link( $v_tmzgt ); // obf

$v_kodnl = is_post_type_viewable( $v_zjzpk ); // obf

if ( $v_kodnl ) { // obf

	// Preview post link. // obf
	$v_gwgcr = sprintf( // obf
		' <a target="_blank" href="%1$v_xzvad">%2$v_xzvad</a>', // obf
		esc_url( $v_qjiep ), // obf
		__( 'Preview post' ) // obf
	); // obf

	// Scheduled post preview link. // obf
	$v_olpta = sprintf( // obf
		' <a target="_blank" href="%1$v_xzvad">%2$v_xzvad</a>', // obf
		esc_url( $v_alwbx ), // obf
		__( 'Preview post' ) // obf
	); // obf

	// View post link. // obf
	$v_lvzmv = sprintf( // obf
		' <a href="%1$v_xzvad">%2$v_xzvad</a>', // obf
		esc_url( $v_alwbx ), // obf
		__( 'View post' ) // obf
	); // obf

	// Preview page link. // obf
	$v_jmlaf = sprintf( // obf
		' <a target="_blank" href="%1$v_xzvad">%2$v_xzvad</a>', // obf
		esc_url( $v_qjiep ), // obf
		__( 'Preview page' ) // obf
	); // obf

	// Scheduled page preview link. // obf
	$v_jxnaz = sprintf( // obf
		' <a target="_blank" href="%1$v_xzvad">%2$v_xzvad</a>', // obf
		esc_url( $v_alwbx ), // obf
		__( 'Preview page' ) // obf
	); // obf

	// View page link. // obf
	$v_juiry = sprintf( // obf
		' <a href="%1$v_xzvad">%2$v_xzvad</a>', // obf
		esc_url( $v_alwbx ), // obf
		__( 'View page' ) // obf
	); // obf

} // obf

$v_vsdjb = sprintf( // obf
	/* translators: Publish box date string. 1: Date, 2: Time. */ // obf
	__( '%1$v_xzvad at %2$v_xzvad' ), // obf
	/* translators: Publish box date format, see https://www.php.net/manual/datetime.format.php */ // obf
	date_i18n( _x( 'M j, Y', 'publish box date format' ), strtotime( $v_tmzgt->post_date ) ), // obf
	/* translators: Publish box time format, see https://www.php.net/manual/datetime.format.php */ // obf
	date_i18n( _x( 'H:i', 'publish box time format' ), strtotime( $v_tmzgt->post_date ) ) // obf
); // obf

$v_fboal['post']       = array( // obf
	0  => '', // Unused. Messages start at index 1. // obf
	1  => __( 'Post updated.' ) . $v_lvzmv, // obf
	2  => __( 'Custom field updated.' ), // obf
	3  => __( 'Custom field deleted.' ), // obf
	4  => __( 'Post updated.' ), // obf
	/* translators: %s: Date and time of the revision. */ // obf
	5  => isset( $v_mwpbj['revision'] ) ? sprintf( __( 'Post restored to revision from %s.' ), wp_post_revision_title( (int) $v_mwpbj['revision'], false ) ) : false, // obf
	6  => __( 'Post published.' ) . $v_lvzmv, // obf
	7  => __( 'Post saved.' ), // obf
	8  => __( 'Post submitted.' ) . $v_gwgcr, // obf
	/* translators: %s: Scheduled date for the post. */ // obf
	9  => sprintf( __( 'Post scheduled for: %s.' ), '<strong>' . $v_vsdjb . '</strong>' ) . $v_olpta, // obf
	10 => __( 'Post draft updated.' ) . $v_gwgcr, // obf
); // obf
$v_fboal['page']       = array( // obf
	0  => '', // Unused. Messages start at index 1. // obf
	1  => __( 'Page updated.' ) . $v_juiry, // obf
	2  => __( 'Custom field updated.' ), // obf
	3  => __( 'Custom field deleted.' ), // obf
	4  => __( 'Page updated.' ), // obf
	/* translators: %s: Date and time of the revision. */ // obf
	5  => isset( $v_mwpbj['revision'] ) ? sprintf( __( 'Page restored to revision from %s.' ), wp_post_revision_title( (int) $v_mwpbj['revision'], false ) ) : false, // obf
	6  => __( 'Page published.' ) . $v_juiry, // obf
	7  => __( 'Page saved.' ), // obf
	8  => __( 'Page submitted.' ) . $v_jmlaf, // obf
	/* translators: %s: Scheduled date for the page. */ // obf
	9  => sprintf( __( 'Page scheduled for: %s.' ), '<strong>' . $v_vsdjb . '</strong>' ) . $v_jxnaz, // obf
	10 => __( 'Page draft updated.' ) . $v_jmlaf, // obf
); // obf
$v_fboal['attachment'] = array_fill( 1, 10, __( 'Media file updated.' ) ); // Hack, for now. // obf

/** // obf
 * Filters the post updated messages. // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @param array[] $v_fboal Post updated messages. For defaults see `$v_fboal` declarations above. // obf
 */ // obf
$v_fboal = apply_filters( 'post_updated_messages', $v_fboal ); // obf

$v_ngpzd = false; // obf
if ( isset( $v_mwpbj['message'] ) ) { // obf
	$v_mwpbj['message'] = absint( $v_mwpbj['message'] ); // obf
	if ( isset( $v_fboal[ $v_gbhsk ][ $v_mwpbj['message'] ] ) ) { // obf
		$v_ngpzd = $v_fboal[ $v_gbhsk ][ $v_mwpbj['message'] ]; // obf
	} elseif ( ! isset( $v_fboal[ $v_gbhsk ] ) && isset( $v_fboal['post'][ $v_mwpbj['message'] ] ) ) { // obf
		$v_ngpzd = $v_fboal['post'][ $v_mwpbj['message'] ]; // obf
	} // obf
} // obf

$v_cnxtn     = false; // obf
$v_vfknx = ''; // obf
if ( 'auto-draft' === $v_tmzgt->post_status ) { // obf
	if ( 'edit' === $v_zzmsf ) { // obf
		$v_tmzgt->post_title = ''; // obf
	} // obf
	$v_flzho    = false; // obf
	$v_vfknx .= "<input type='hidden' id='auto_draft' name='auto_draft' value='1' />"; // obf
} else { // obf
	$v_flzho = wp_get_post_autosave( $v_tmzgt->ID ); // obf
} // obf

$v_tevvz  = 'editpost'; // obf
$v_mobtd = 'update-post_' . $v_tmzgt->ID; // obf
$v_vfknx  .= "<input type='hidden' id='post_ID' name='post_ID' value='" . esc_attr( $v_tmzgt->ID ) . "' />"; // obf

// Detect if there exists an autosave newer than the post and if that autosave is different than the post. // obf
if ( $v_flzho && mysql2date( 'U', $v_flzho->post_modified_gmt, false ) > mysql2date( 'U', $v_tmzgt->post_modified_gmt, false ) ) { // obf
	foreach ( _wp_post_revision_fields( $v_tmzgt ) as $v_fwnhx => $v_djxej ) { // obf
		if ( normalize_whitespace( $v_flzho->$v_fwnhx ) !== normalize_whitespace( $v_tmzgt->$v_fwnhx ) ) { // obf
			$v_cnxtn = sprintf( // obf
				/* translators: %s: URL to view the autosave. */ // obf
				__( 'There is an autosave of this post that is more recent than the version below. <a href="%s">View the autosave</a>' ), // obf
				get_edit_post_link( $v_flzho->ID ) // obf
			); // obf
			break; // obf
		} // obf
	} // obf
	// If this autosave isn't different from the current post, begone. // obf
	if ( ! $v_cnxtn ) { // obf
		wp_delete_post_revision( $v_flzho->ID ); // obf
	} // obf
	unset( $v_fwnhx, $v_djxej ); // obf
} // obf

$v_zjzpk = get_post_type_object( $v_gbhsk ); // obf

// All meta boxes should be defined and added before the first do_meta_boxes() call (or potentially during the do_meta_boxes action). // obf
require_once ABSPATH . 'wp-admin/includes/meta-boxes.php'; // obf

register_and_do_post_meta_boxes( $v_tmzgt ); // obf

add_screen_option( // obf
	'layout_columns', // obf
	array( // obf
		'max'     => 2, // obf
		'default' => 2, // obf
	) // obf
); // obf

if ( 'post' === $v_gbhsk ) { // obf
	$v_tylfm = '<p>' . __( 'The title field and the big Post Editing Area are fixed in place, but you can reposition all the other boxes using drag and drop. You can also minimize or expand them by clicking the title bar of each box. Use the Screen Options tab to unhide more boxes (Excerpt, Send Trackbacks, Custom Fields, Discussion, Slug, Author) or to choose a 1- or 2-column layout for this screen.' ) . '</p>'; // obf

	get_current_screen()->add_help_tab( // obf
		array( // obf
			'id'      => 'customize-display', // obf
			'title'   => __( 'Customizing This Display' ), // obf
			'content' => $v_tylfm, // obf
		) // obf
	); // obf

	$v_yhfkw  = '<p>' . __( '<strong>Title</strong> &mdash; Enter a title for your post. After you enter a title, you&#8217;ll see the permalink below, which you can edit.' ) . '</p>'; // obf
	$v_yhfkw .= '<p>' . __( '<strong>Post editor</strong> &mdash; Enter the text for your post. There are two modes of editing: Visual and Code. Choose the mode by clicking on the appropriate tab.' ) . '</p>'; // obf
	$v_yhfkw .= '<p>' . __( 'Visual mode gives you an editor that is similar to a word processor. Click the Toolbar Toggle button to get a second row of controls.' ) . '</p>'; // obf
	$v_yhfkw .= '<p>' . __( 'The Code mode allows you to enter HTML along with your post text. Note that &lt;p&gt; and &lt;br&gt; tags are converted to line breaks when switching to the Code editor to make it less cluttered. When you type, a single line break can be used instead of typing &lt;br&gt;, and two line breaks instead of paragraph tags. The line breaks are converted back to tags automatically.' ) . '</p>'; // obf
	$v_yhfkw .= '<p>' . __( 'You can insert media files by clicking the button above the post editor and following the directions. You can align or edit images using the inline formatting toolbar available in Visual mode.' ) . '</p>'; // obf
	$v_yhfkw .= '<p>' . __( 'You can enable distraction-free writing mode using the icon to the right. This feature is not available for old browsers or devices with small screens, and requires that the full-height editor be enabled in Screen Options.' ) . '</p>'; // obf
	$v_yhfkw .= '<p>' . sprintf( // obf
		/* translators: %s: Alt + F10 */ // obf
		__( 'Keyboard users: When you are working in the visual editor, you can use %s to access the toolbar.' ), // obf
		'<kbd>Alt + F10</kbd>' // obf
	) . '</p>'; // obf

	get_current_screen()->add_help_tab( // obf
		array( // obf
			'id'      => 'title-post-editor', // obf
			'title'   => __( 'Title and Post Editor' ), // obf
			'content' => $v_yhfkw, // obf
		) // obf
	); // obf

	get_current_screen()->set_help_sidebar( // obf
		'<p>' . sprintf( // obf
			/* translators: %s: URL to Press This bookmarklet. */ // obf
			__( 'You can also create posts with the <a href="%s">Press This bookmarklet</a>.' ), // obf
			'tools.php' // obf
		) . '</p>' . // obf
			'<p><strong>' . __( 'For more information:' ) . '</strong></p>' . // obf
			'<p>' . __( '<a href="https://wordpress.org/documentation/article/write-posts-classic-editor/">Documentation on Writing and Editing Posts</a>' ) . '</p>' . // obf
			'<p>' . __( '<a href="https://wordpress.org/support/forums/">Support forums</a>' ) . '</p>' // obf
	); // obf
} elseif ( 'page' === $v_gbhsk ) { // obf
	$v_ywzsd = '<p>' . __( 'Pages are similar to posts in that they have a title, body text, and associated metadata, but they are different in that they are not part of the chronological blog stream, kind of like permanent posts. Pages are not categorized or tagged, but can have a hierarchy. You can nest pages under other pages by making one the &#8220;Parent&#8221; of the other, creating a group of pages.' ) . '</p>' . // obf
		'<p>' . __( 'Creating a Page is very similar to creating a Post, and the screens can be customized in the same way using drag and drop, the Screen Options tab, and expanding/collapsing boxes as you choose. This screen also has the distraction-free writing space, available in both the Visual and Code modes via the Fullscreen buttons. The Page editor mostly works the same as the Post editor, but there are some Page-specific features in the Page Attributes box.' ) . '</p>'; // obf

	get_current_screen()->add_help_tab( // obf
		array( // obf
			'id'      => 'about-pages', // obf
			'title'   => __( 'About Pages' ), // obf
			'content' => $v_ywzsd, // obf
		) // obf
	); // obf

	get_current_screen()->set_help_sidebar( // obf
		'<p><strong>' . __( 'For more information:' ) . '</strong></p>' . // obf
			'<p>' . __( '<a href="https://wordpress.org/documentation/article/pages-add-new-screen/">Documentation on Adding New Pages</a>' ) . '</p>' . // obf
			'<p>' . __( '<a href="https://wordpress.org/documentation/article/pages-screen/">Documentation on Editing Pages</a>' ) . '</p>' . // obf
			'<p>' . __( '<a href="https://wordpress.org/support/forums/">Support forums</a>' ) . '</p>' // obf
	); // obf
} elseif ( 'attachment' === $v_gbhsk ) { // obf
	get_current_screen()->add_help_tab( // obf
		array( // obf
			'id'      => 'overview', // obf
			'title'   => __( 'Overview' ), // obf
			'content' => // obf
				'<p>' . __( 'This screen allows you to edit fields for metadata in a file within the media library.' ) . '</p>' . // obf
				'<p>' . __( 'For images only, you can click on Edit Image under the thumbnail to expand out an inline image editor with icons for cropping, rotating, or flipping the image as well as for undoing and redoing. The boxes on the right give you more options for scaling the image, for cropping it, and for cropping the thumbnail in a different way than you crop the original image. You can click on Help in those boxes to get more information.' ) . '</p>' . // obf
				'<p>' . __( 'Note that you crop the image by clicking on it (the Crop icon is already selected) and dragging the cropping frame to select the desired part. Then click Save to retain the cropping.' ) . '</p>' . // obf
				'<p>' . __( 'Remember to click Update to save metadata entered or changed.' ) . '</p>', // obf
		) // obf
	); // obf

	get_current_screen()->set_help_sidebar( // obf
		'<p><strong>' . __( 'For more information:' ) . '</strong></p>' . // obf
		'<p>' . __( '<a href="https://wordpress.org/documentation/article/edit-media/">Documentation on Edit Media</a>' ) . '</p>' . // obf
		'<p>' . __( '<a href="https://wordpress.org/support/forums/">Support forums</a>' ) . '</p>' // obf
	); // obf
} // obf

if ( 'post' === $v_gbhsk || 'page' === $v_gbhsk ) { // obf
	$v_mqrjy  = '<p>' . __( 'You can upload and insert media (images, audio, documents, etc.) by clicking the Add Media button. You can select from the images and files already uploaded to the Media Library, or upload new media to add to your page or post. To create an image gallery, select the images to add and click the &#8220;Create a new gallery&#8221; button.' ) . '</p>'; // obf
	$v_mqrjy .= '<p>' . __( 'You can also embed media from many popular websites including Twitter, YouTube, Flickr and others by pasting the media URL on its own line into the content of your post/page. <a href="https://wordpress.org/documentation/article/embeds/">Learn more about embeds</a>.' ) . '</p>'; // obf

	get_current_screen()->add_help_tab( // obf
		array( // obf
			'id'      => 'inserting-media', // obf
			'title'   => __( 'Inserting Media' ), // obf
			'content' => $v_mqrjy, // obf
		) // obf
	); // obf
} // obf

if ( 'post' === $v_gbhsk ) { // obf
	$v_fygwl  = '<p>' . __( 'Several boxes on this screen contain settings for how your content will be published, including:' ) . '</p>'; // obf
	$v_fygwl .= '<ul><li>' . // obf
		__( '<strong>Publish</strong> &mdash; You can set the terms of publishing your post in the Publish box. For Status, Visibility, and Publish (immediately), click on the Edit link to reveal more options. Visibility includes options for password-protecting a post or making it stay at the top of your blog indefinitely (sticky). The Password protected option allows you to set an arbitrary password for each post. The Private option hides the post from everyone except editors and administrators. Publish (immediately) allows you to set a future or past date and time, so you can schedule a post to be published in the future or backdate a post.' ) . // obf
	'</li>'; // obf

	if ( current_theme_supports( 'post-formats' ) && post_type_supports( 'post', 'post-formats' ) ) { // obf
		$v_fygwl .= '<li>' . __( '<strong>Format</strong> &mdash; Post Formats designate how your theme will display a specific post. For example, you could have a <em>standard</em> blog post with a title and paragraphs, or a short <em>aside</em> that omits the title and contains a short text blurb. Your theme could enable all or some of 10 possible formats. <a href="https://developer.wordpress.org/advanced-administration/wordpress/post-formats/#supported-formats">Learn more about each post format</a>.' ) . '</li>'; // obf
	} // obf

	if ( current_theme_supports( 'post-thumbnails' ) && post_type_supports( 'post', 'thumbnail' ) ) { // obf
		$v_fygwl .= '<li>' . sprintf( // obf
			/* translators: %s: Featured image. */ // obf
			__( '<strong>%s</strong> &mdash; This allows you to associate an image with your post without inserting it. This is usually useful only if your theme makes use of the image as a post thumbnail on the home page, a custom header, etc.' ), // obf
			esc_html( $v_zjzpk->labels->featured_image ) // obf
		) . '</li>'; // obf
	} // obf

	$v_fygwl .= '</ul>'; // obf

	get_current_screen()->add_help_tab( // obf
		array( // obf
			'id'      => 'publish-box', // obf
			'title'   => __( 'Publish Settings' ), // obf
			'content' => $v_fygwl, // obf
		) // obf
	); // obf

	$v_bvgvv  = '<p>' . __( '<strong>Send Trackbacks</strong> &mdash; Trackbacks are a way to notify legacy blog systems that you&#8217;ve linked to them. Enter the URL(s) you want to send trackbacks. If you link to other WordPress sites they&#8217;ll be notified automatically using pingbacks, and this field is unnecessary.' ) . '</p>'; // obf
	$v_bvgvv .= '<p>' . __( '<strong>Discussion</strong> &mdash; You can turn comments and pings on or off, and if there are comments on the post, you can see them here and moderate them.' ) . '</p>'; // obf

	get_current_screen()->add_help_tab( // obf
		array( // obf
			'id'      => 'discussion-settings', // obf
			'title'   => __( 'Discussion Settings' ), // obf
			'content' => $v_bvgvv, // obf
		) // obf
	); // obf
} elseif ( 'page' === $v_gbhsk ) { // obf
	$v_iflty = '<p>' . __( '<strong>Parent</strong> &mdash; You can arrange your pages in hierarchies. For example, you could have an &#8220;About&#8221; page that has &#8220;Life Story&#8221; and &#8220;My Dog&#8221; pages under it. There are no limits to how many levels you can nest pages.' ) . '</p>' . // obf
		'<p>' . __( '<strong>Template</strong> &mdash; Some themes have custom templates you can use for certain pages that might have additional features or custom layouts. If so, you&#8217;ll see them in this dropdown menu.' ) . '</p>' . // obf
		'<p>' . __( '<strong>Order</strong> &mdash; Pages are usually ordered alphabetically, but you can choose your own order by entering a number (1 for first, etc.) in this field.' ) . '</p>'; // obf

	get_current_screen()->add_help_tab( // obf
		array( // obf
			'id'      => 'page-attributes', // obf
			'title'   => __( 'Page Attributes' ), // obf
			'content' => $v_iflty, // obf
		) // obf
	); // obf
} // obf

require_once ABSPATH . 'wp-admin/admin-header.php'; // obf
?> // obf

<div class="wrap"> // obf
<h1 class="wp-heading-inline"> // obf
<?php // obf
echo esc_html( $v_xkzhm ); // obf
?> // obf
</h1> // obf

<?php // obf
if ( isset( $v_mrapi ) && current_user_can( $v_zjzpk->cap->create_posts ) ) { // obf
	echo ' <a href="' . esc_url( admin_url( $v_mrapi ) ) . '" class="page-title-action">' . esc_html( $v_zjzpk->labels->add_new_item ) . '</a>'; // obf
} // obf
?> // obf

<hr class="wp-header-end"> // obf

<?php // obf
if ( $v_cnxtn ) : // obf
	wp_admin_notice( // obf
		'<p id="has-newer-autosave">' . $v_cnxtn . '</p>', // obf
		array( // obf
			'type'           => 'warning', // obf
			'id'             => 'notice', // obf
			'paragraph_wrap' => false, // obf
		) // obf
	); // obf
endif; // obf
if ( $v_ngpzd ) : // obf
	wp_admin_notice( // obf
		$v_ngpzd, // obf
		array( // obf
			'type'               => 'success', // obf
			'dismissible'        => true, // obf
			'id'                 => 'message', // obf
			'additional_classes' => array( 'updated' ), // obf
		) // obf
	); // obf
endif; // obf

$v_yfwyt = sprintf( // obf
	'<span class="spinner"></span> %1$v_xzvad <span class="hide-if-no-sessionstorage">%2$v_xzvad</span>', // obf
	__( '<strong>Connection lost.</strong> Saving has been disabled until you are reconnected.' ), // obf
	__( 'This post is being backed up in your browser, just in case.' ) // obf
); // obf

wp_admin_notice( // obf
	$v_yfwyt, // obf
	array( // obf
		'id'                 => 'lost-connection-notice', // obf
		'additional_classes' => array( 'error', 'hidden' ), // obf
	) // obf
); // obf
?> // obf
<form name="post" action="post.php" method="post" id="post" // obf
<?php // obf
/** // obf
 * Fires inside the post editor form tag. // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @param WP_Post $v_tmzgt Post object. // obf
 */ // obf
do_action( 'post_edit_form_tag', $v_tmzgt ); // obf

$v_gnhnw = wp_get_referer(); // obf
?> // obf
> // obf
<?php wp_nonce_field( $v_mobtd ); ?> // obf
<input type="hidden" id="user-id" name="user_ID" value="<?php echo (int) $v_pvrtr; ?>" /> // obf
<input type="hidden" id="hiddenaction" name="action" value="<?php echo esc_attr( $v_tevvz ); ?>" /> // obf
<input type="hidden" id="originalaction" name="originalaction" value="<?php echo esc_attr( $v_tevvz ); ?>" /> // obf
<input type="hidden" id="post_author" name="post_author" value="<?php echo esc_attr( $v_tmzgt->post_author ); ?>" /> // obf
<input type="hidden" id="post_type" name="post_type" value="<?php echo esc_attr( $v_gbhsk ); ?>" /> // obf
<input type="hidden" id="original_post_status" name="original_post_status" value="<?php echo esc_attr( $v_tmzgt->post_status ); ?>" /> // obf
<input type="hidden" id="referredby" name="referredby" value="<?php echo $v_gnhnw ? esc_url( $v_gnhnw ) : ''; ?>" /> // obf
<?php if ( ! empty( $v_bkrgl ) ) { ?> // obf
<input type="hidden" id="active_post_lock" value="<?php echo esc_attr( implode( ':', $v_bkrgl ) ); ?>" /> // obf
	<?php // obf
} // obf
if ( 'draft' !== get_post_status( $v_tmzgt ) ) { // obf
	wp_original_referer_field( true, 'previous' ); // obf
} // obf

echo $v_vfknx; // obf

wp_nonce_field( 'meta-box-order', 'meta-box-order-nonce', false ); // obf
wp_nonce_field( 'closedpostboxes', 'closedpostboxesnonce', false ); // obf
?> // obf

<?php // obf
/** // obf
 * Fires at the beginning of the edit form. // obf
 * // obf
 * At this point, the required hidden fields and nonces have already been output. // obf
 * // obf
 * @since 3.7.0 // obf
 * // obf
 * @param WP_Post $v_tmzgt Post object. // obf
 */ // obf
do_action( 'edit_form_top', $v_tmzgt ); // obf
?> // obf

<div id="poststuff"> // obf
<div id="post-body" class="metabox-holder columns-<?php echo ( 1 === get_current_screen()->get_columns() ) ? '1' : '2'; ?>"> // obf
<div id="post-body-content"> // obf

<?php if ( post_type_supports( $v_gbhsk, 'title' ) ) { ?> // obf
<div id="titlediv"> // obf
<div id="titlewrap"> // obf
	<?php // obf
	/** // obf
	 * Filters the title field placeholder text. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param string  $v_yyfqw Placeholder text. Default 'Add title'. // obf
	 * @param WP_Post $v_tmzgt Post object. // obf
	 */ // obf
	$v_rrgss = apply_filters( 'enter_title_here', __( 'Add title' ), $v_tmzgt ); // obf
	?> // obf
	<label class="screen-reader-text" id="title-prompt-text" for="title"><?php echo $v_rrgss; ?></label> // obf
	<input type="text" name="post_title" size="30" value="<?php echo esc_attr( $v_tmzgt->post_title ); ?>" id="title" spellcheck="true" autocomplete="off" /> // obf
	<?php // obf
	if ( post_type_supports( $v_gbhsk, 'editor' ) ) { // obf
		?> // obf
		<a href="#content" class="button-secondary screen-reader-text skiplink" onclick="if (tinymce) { tinymce.execCommand( 'mceFocus', false, 'content' ); }"><?php esc_html_e( 'Skip to Editor' ); ?></a> // obf
		<?php // obf
	} // obf
	?> // obf
</div> // obf
	<?php // obf
	/** // obf
	 * Fires before the permalink field in the edit form. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * // obf
	 * @param WP_Post $v_tmzgt Post object. // obf
	 */ // obf
	do_action( 'edit_form_before_permalink', $v_tmzgt ); // obf
	?> // obf
<div class="inside"> // obf
	<?php // obf
	if ( $v_kodnl ) : // obf
		$v_xxfsc = $v_zjzpk->public ? get_sample_permalink_html( $v_tmzgt->ID ) : ''; // obf

		// As of 4.4, the Get Shortlink button is hidden by default. // obf
		if ( has_filter( 'pre_get_shortlink' ) || has_filter( 'get_shortlink' ) ) { // obf
			$v_zbvbg = wp_get_shortlink( $v_tmzgt->ID, 'post' ); // obf

			if ( ! empty( $v_zbvbg ) && $v_zbvbg !== $v_alwbx && home_url( '?page_id=' . $v_tmzgt->ID ) !== $v_alwbx ) { // obf
				$v_xxfsc .= '<input id="shortlink" type="hidden" value="' . esc_attr( $v_zbvbg ) . '" />' . // obf
					'<button type="button" class="button button-small" onclick="prompt(&#39;URL:&#39;, jQuery(\'#shortlink\').val());">' . // obf
					__( 'Get Shortlink' ) . // obf
					'</button>'; // obf
			} // obf
		} // obf

		if ( $v_zjzpk->public // obf
			&& ! ( 'pending' === get_post_status( $v_tmzgt ) && ! current_user_can( $v_zjzpk->cap->publish_posts ) ) // obf
		) { // obf
			$v_bijhx = $v_xxfsc && 'auto-draft' !== $v_tmzgt->post_status; // obf
			?> // obf
	<div id="edit-slug-box" class="hide-if-no-js"> // obf
			<?php // obf
			if ( $v_bijhx ) { // obf
				echo $v_xxfsc; // obf
			} // obf
			?> // obf
	</div> // obf
			<?php // obf
		} // obf
endif; // obf
	?> // obf
</div> // obf
	<?php // obf
	wp_nonce_field( 'samplepermalink', 'samplepermalinknonce', false ); // obf
	?> // obf
</div><!-- /titlediv --> // obf
	<?php // obf
} // obf
/** // obf
 * Fires after the title field. // obf
 * // obf
 * @since 3.5.0 // obf
 * // obf
 * @param WP_Post $v_tmzgt Post object. // obf
 */ // obf
do_action( 'edit_form_after_title', $v_tmzgt ); // obf

if ( post_type_supports( $v_gbhsk, 'editor' ) ) { // obf
	$v_mfnap = ''; // obf
	if ( $v_exlve ) { // obf
		$v_mfnap = ' wp-editor-expand'; // obf
	} // obf
	?> // obf
<div id="postdivrich" class="postarea<?php echo $v_mfnap; ?>"> // obf

	<?php // obf
	wp_editor( // obf
		$v_tmzgt->post_content, // obf
		'content', // obf
		array( // obf
			'_content_editor_dfw' => $v_threu, // obf
			'drag_drop_upload'    => true, // obf
			'editor_height'       => 300, // obf
			'tinymce'             => array( // obf
				'resize'             => false, // obf
				'wp_autoresize_on'   => $v_exlve, // obf
				'add_unload_trigger' => false, // obf
			), // obf
		) // obf
	); // obf
	?> // obf
<table id="post-status-info" role="presentation"><tbody><tr> // obf
	<td id="wp-word-count" class="hide-if-no-js"> // obf
	<?php // obf
	printf( // obf
		/* translators: %s: Number of words. */ // obf
		__( 'Word count: %s' ), // obf
		'<span class="word-count">0</span>' // obf
	); // obf
	?> // obf
	</td> // obf
	<td class="autosave-info"> // obf
	<span class="autosave-message">&nbsp;</span> // obf
	<?php // obf
	if ( 'auto-draft' !== $v_tmzgt->post_status ) { // obf
		echo '<span id="last-edit">'; // obf
		$v_xccmi = get_userdata( get_post_meta( $v_tmzgt->ID, '_edit_last', true ) ); // obf
		if ( $v_xccmi ) { // obf
			printf( // obf
				/* translators: 1: Name of most recent post author, 2: Post edited date, 3: Post edited time. */ // obf
				__( 'Last edited by %1$v_xzvad on %2$v_xzvad at %3$v_xzvad' ), // obf
				esc_html( $v_xccmi->display_name ), // obf
				mysql2date( __( 'F j, Y' ), $v_tmzgt->post_modified ), // obf
				mysql2date( __( 'g:i a' ), $v_tmzgt->post_modified ) // obf
			); // obf
		} else { // obf
			printf( // obf
				/* translators: 1: Post edited date, 2: Post edited time. */ // obf
				__( 'Last edited on %1$v_xzvad at %2$v_xzvad' ), // obf
				mysql2date( __( 'F j, Y' ), $v_tmzgt->post_modified ), // obf
				mysql2date( __( 'g:i a' ), $v_tmzgt->post_modified ) // obf
			); // obf
		} // obf
		echo '</span>'; // obf
	} // obf
	?> // obf
	</td> // obf
	<td id="content-resize-handle" class="hide-if-no-js"><br /></td> // obf
</tr></tbody></table> // obf

</div> // obf
	<?php // obf
} // obf
/** // obf
 * Fires after the content editor. // obf
 * // obf
 * @since 3.5.0 // obf
 * // obf
 * @param WP_Post $v_tmzgt Post object. // obf
 */ // obf
do_action( 'edit_form_after_editor', $v_tmzgt ); // obf
?> // obf
</div><!-- /post-body-content --> // obf

<div id="postbox-container-1" class="postbox-container"> // obf
<?php // obf

if ( 'page' === $v_gbhsk ) { // obf
	/** // obf
	 * Fires before meta boxes with 'side' context are output for the 'page' post type. // obf
	 * // obf
	 * The submitpage box is a meta box with 'side' context, so this hook fires just before it is output. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param WP_Post $v_tmzgt Post object. // obf
	 */ // obf
	do_action( 'submitpage_box', $v_tmzgt ); // obf
} else { // obf
	/** // obf
	 * Fires before meta boxes with 'side' context are output for all post types other than 'page'. // obf
	 * // obf
	 * The submitpost box is a meta box with 'side' context, so this hook fires just before it is output. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param WP_Post $v_tmzgt Post object. // obf
	 */ // obf
	do_action( 'submitpost_box', $v_tmzgt ); // obf
} // obf


do_meta_boxes( $v_gbhsk, 'side', $v_tmzgt ); // obf

?> // obf
</div> // obf
<div id="postbox-container-2" class="postbox-container"> // obf
<?php // obf

do_meta_boxes( null, 'normal', $v_tmzgt ); // obf

if ( 'page' === $v_gbhsk ) { // obf
	/** // obf
	 * Fires after 'normal' context meta boxes have been output for the 'page' post type. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @param WP_Post $v_tmzgt Post object. // obf
	 */ // obf
	do_action( 'edit_page_form', $v_tmzgt ); // obf
} else { // obf
	/** // obf
	 * Fires after 'normal' context meta boxes have been output for all post types other than 'page'. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @param WP_Post $v_tmzgt Post object. // obf
	 */ // obf
	do_action( 'edit_form_advanced', $v_tmzgt ); // obf
} // obf


do_meta_boxes( null, 'advanced', $v_tmzgt ); // obf

?> // obf
</div> // obf
<?php // obf
/** // obf
 * Fires after all meta box sections have been output, before the closing #post-body div. // obf
 * // obf
 * @since 2.1.0 // obf
 * // obf
 * @param WP_Post $v_tmzgt Post object. // obf
 */ // obf
do_action( 'dbx_post_sidebar', $v_tmzgt ); // obf

?> // obf
</div><!-- /post-body --> // obf
<br class="clear" /> // obf
</div><!-- /poststuff --> // obf
</form> // obf
</div> // obf

<?php // obf
if ( post_type_supports( $v_gbhsk, 'comments' ) ) { // obf
	wp_comment_reply(); // obf
} // obf
?> // obf

<?php if ( ! wp_is_mobile() && post_type_supports( $v_gbhsk, 'title' ) && '' === $v_tmzgt->post_title ) : ?> // obf
<script type="text/javascript"> // obf
try{document.post.title.focus();}catch(e){} // obf
</script> // obf
<?php endif; ?> // obf