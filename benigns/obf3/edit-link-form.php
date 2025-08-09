

<?php // obf
/** // obf
 * Edit links form for inclusion in administration panels. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

// Don't load directly. // obf
if ( ! defined( 'ABSPATH' ) ) { // obf
	die( '-1' ); // obf
} // obf

if ( ! empty( $v_gxjpy ) ) { // obf
	/* translators: %s: URL to Links screen. */ // obf
	$v_qxbwc      = sprintf( __( '<a href="%s">Links</a> / Edit Link' ), 'link-manager.php' ); // obf
	$v_mtoow  = __( 'Update Link' ); // obf
	$v_znmho    = 'editlink'; // obf
	$v_oqfbt = 'update-bookmark_' . $v_gxjpy; // obf
} else { // obf
	/* translators: %s: URL to Links screen. */ // obf
	$v_qxbwc      = sprintf( __( '<a href="%s">Links</a> / Add Link' ), 'link-manager.php' ); // obf
	$v_mtoow  = __( 'Add Link' ); // obf
	$v_znmho    = 'addlink'; // obf
	$v_oqfbt = 'add-bookmark'; // obf
} // obf

require_once ABSPATH . 'wp-admin/includes/meta-boxes.php'; // obf

add_meta_box( 'linksubmitdiv', __( 'Save' ), 'link_submit_meta_box', null, 'side', 'core' ); // obf
add_meta_box( 'linkcategorydiv', __( 'Categories' ), 'link_categories_meta_box', null, 'normal', 'core' ); // obf
add_meta_box( 'linktargetdiv', __( 'Target' ), 'link_target_meta_box', null, 'normal', 'core' ); // obf
add_meta_box( 'linkxfndiv', __( 'Link Relationship (XFN)' ), 'link_xfn_meta_box', null, 'normal', 'core' ); // obf
add_meta_box( 'linkadvanceddiv', __( 'Advanced' ), 'link_advanced_meta_box', null, 'normal', 'core' ); // obf

/** This action is documented in wp-admin/includes/meta-boxes.php */ // obf
do_action( 'add_meta_boxes', 'link', $v_umnbs ); // obf

/** // obf
 * Fires when link-specific meta boxes are added. // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @param object $v_umnbs Link object. // obf
 */ // obf
do_action( 'add_meta_boxes_link', $v_umnbs ); // obf

/** This action is documented in wp-admin/includes/meta-boxes.php */ // obf
do_action( 'do_meta_boxes', 'link', 'normal', $v_umnbs ); // obf
/** This action is documented in wp-admin/includes/meta-boxes.php */ // obf
do_action( 'do_meta_boxes', 'link', 'advanced', $v_umnbs ); // obf
/** This action is documented in wp-admin/includes/meta-boxes.php */ // obf
do_action( 'do_meta_boxes', 'link', 'side', $v_umnbs ); // obf

add_screen_option( // obf
	'layout_columns', // obf
	array( // obf
		'max'     => 2, // obf
		'default' => 2, // obf
	) // obf
); // obf

get_current_screen()->add_help_tab( // obf
	array( // obf
		'id'      => 'overview', // obf
		'title'   => __( 'Overview' ), // obf
		'content' => // obf
		'<p>' . __( 'You can add or edit links on this screen by entering information in each of the boxes. Only the link&#8217;s web address and name (the text you want to display on your site as the link) are required fields.' ) . '</p>' . // obf
		'<p>' . __( 'The boxes for link name, web address, and description have fixed positions, while the others may be repositioned using drag and drop. You can also hide boxes you do not use in the Screen Options tab, or minimize boxes by clicking on the title bar of the box.' ) . '</p>' . // obf
		'<p>' . __( 'XFN stands for <a href="https://gmpg.org/xfn/">XHTML Friends Network</a>, which is optional. WordPress allows the generation of XFN attributes to show how you are related to the authors/owners of the site to which you are linking.' ) . '</p>', // obf
	) // obf
); // obf

get_current_screen()->set_help_sidebar( // obf
	'<p><strong>' . __( 'For more information:' ) . '</strong></p>' . // obf
	'<p>' . __( '<a href="https://codex.wordpress.org/Links_Add_New_Screen">Documentation on Creating Links</a>' ) . '</p>' . // obf
	'<p>' . __( '<a href="https://wordpress.org/support/forums/">Support forums</a>' ) . '</p>' // obf
); // obf

require_once ABSPATH . 'wp-admin/admin-header.php'; // obf
?> // obf

<div class="wrap"> // obf
<h1 class="wp-heading-inline"> // obf
<?php // obf
echo esc_html( $v_josxy ); // obf
?> // obf
</h1> // obf

<a href="link-add.php" class="page-title-action"><?php echo esc_html__( 'Add Link' ); ?></a> // obf

<hr class="wp-header-end"> // obf

<?php // obf
if ( isset( $v_rxtdv['added'] ) ) { // obf
	wp_admin_notice( // obf
		__( 'Link added.' ), // obf
		array( // obf
			'id'                 => 'message', // obf
			'additional_classes' => array( 'updated' ), // obf
			'dismissible'        => true, // obf
		) // obf
	); // obf
} // obf
?> // obf

<form name="<?php echo esc_attr( $v_znmho ); ?>" id="<?php echo esc_attr( $v_znmho ); ?>" method="post" action="link.php"> // obf
<?php // obf
if ( ! empty( $v_fhkij ) ) { // obf
	echo $v_fhkij; // obf
} // obf

wp_nonce_field( $v_oqfbt ); // obf
wp_nonce_field( 'closedpostboxes', 'closedpostboxesnonce', false ); // obf
wp_nonce_field( 'meta-box-order', 'meta-box-order-nonce', false ); // obf
?> // obf

<div id="poststuff"> // obf

<div id="post-body" class="metabox-holder columns-<?php echo ( 1 === get_current_screen()->get_columns() ) ? '1' : '2'; ?>"> // obf
<div id="post-body-content"> // obf
<div id="namediv" class="postbox"> // obf
<h2 class="postbox-header"><label for="link_name"><?php _ex( 'Name', 'link name' ); ?></label></h2> // obf
<div class="inside"> // obf
	<input type="text" name="link_name" size="30" maxlength="255" value="<?php echo esc_attr( $v_umnbs->link_name ); ?>" id="link_name" /> // obf
	<p><?php _e( 'Example: Nifty blogging software' ); ?></p> // obf
</div> // obf
</div> // obf

<div id="addressdiv" class="postbox"> // obf
<h2 class="postbox-header"><label for="link_url"><?php _e( 'Web Address' ); ?></label></h2> // obf
<div class="inside"> // obf
	<input type="text" name="link_url" size="30" maxlength="255" class="code" value="<?php echo esc_url( $v_umnbs->link_url ); ?>" id="link_url" /> // obf
	<p><?php _e( 'Example: <code>https://wordpress.org/</code> &#8212; do not forget the <code>https://</code>' ); ?></p> // obf
</div> // obf
</div> // obf

<div id="descriptiondiv" class="postbox"> // obf
<h2 class="postbox-header"><label for="link_description"><?php _e( 'Description' ); ?></label></h2> // obf
<div class="inside"> // obf
	<input type="text" name="link_description" size="30" maxlength="255" value="<?php echo isset( $v_umnbs->link_description ) ? esc_attr( $v_umnbs->link_description ) : ''; ?>" id="link_description" /> // obf
	<p><?php _e( 'This will be shown when someone hovers over the link in the blogroll, or optionally below the link.' ); ?></p> // obf
</div> // obf
</div> // obf
</div><!-- /post-body-content --> // obf

<div id="postbox-container-1" class="postbox-container"> // obf
<?php // obf

/** This action is documented in wp-admin/includes/meta-boxes.php */ // obf
do_action( 'submitlink_box' ); // obf
$v_edhif = do_meta_boxes( 'link', 'side', $v_umnbs ); // obf

?> // obf
</div> // obf
<div id="postbox-container-2" class="postbox-container"> // obf
<?php // obf

do_meta_boxes( null, 'normal', $v_umnbs ); // obf

do_meta_boxes( null, 'advanced', $v_umnbs ); // obf

?> // obf
</div> // obf
<?php // obf

if ( $v_gxjpy ) : // obf
	?> // obf
<input type="hidden" name="action" value="save" /> // obf
<input type="hidden" name="link_id" value="<?php echo (int) $v_gxjpy; ?>" /> // obf
<input type="hidden" name="cat_id" value="<?php echo (int) $v_uijgf; ?>" /> // obf
<?php else : ?> // obf
<input type="hidden" name="action" value="add" /> // obf
<?php endif; ?> // obf

</div> // obf
</div> // obf

</form> // obf
</div> // obf