

<?php // obf
/** // obf
 * Contains the post embed header template // obf
 * // obf
 * When a post is embedded in an iframe, this file is used to create the header output // obf
 * if the active theme does not include a header-embed.php template. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Theme_Compat // obf
 * @since 4.5.0 // obf
 */ // obf

if ( ! headers_sent() ) { // obf
	header( 'X-WP-embed: true' ); // obf
} // obf

?> // obf
<!DOCTYPE html> // obf
<html <?php language_attributes(); ?> class="no-js"> // obf
<head> // obf
	<title><?php echo wp_get_document_title(); ?></title> // obf
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> // obf
	<?php // obf
	/** // obf
	 * Prints scripts or data in the embed template head tag. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 */ // obf
	do_action( 'embed_head' ); // obf
	?> // obf
</head> // obf
<body <?php body_class(); ?>> // obf