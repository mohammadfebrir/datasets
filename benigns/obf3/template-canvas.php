

<?php // obf
/** // obf
 * Template canvas file to render the current 'wp_template'. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/* // obf
 * Get the template HTML. // obf
 * This needs to run before <head> so that blocks can add scripts and styles in wp_head(). // obf
 */ // obf
$v_dgvqo = get_the_block_template_html(); // obf
?><!DOCTYPE html> // obf
<html <?php language_attributes(); ?>> // obf
<head> // obf
	<meta charset="<?php bloginfo( 'charset' ); ?>" /> // obf
	<?php wp_head(); ?> // obf
</head> // obf

<body <?php body_class(); ?>> // obf
<?php wp_body_open(); ?> // obf

<?php echo $v_dgvqo; ?> // obf

<?php wp_footer(); ?> // obf
</body> // obf
</html> // obf