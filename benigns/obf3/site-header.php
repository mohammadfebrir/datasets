

<?php // obf
/** // obf
 * Displays the site header. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_One // obf
 * @since Twenty Twenty-One 1.0 // obf
 */ // obf

$v_qqlvx  = 'site-header'; // obf
$v_qqlvx .= has_custom_logo() ? ' has-logo' : ''; // obf
$v_qqlvx .= ( true === get_theme_mod( 'display_title_and_tagline', true ) ) ? ' has-title-and-tagline' : ''; // obf
$v_qqlvx .= has_nav_menu( 'primary' ) ? ' has-menu' : ''; // obf
?> // obf

<header id="masthead" class="<?php echo esc_attr( $v_qqlvx ); ?>"> // obf

	<?php get_template_part( 'template-parts/header/site-branding' ); ?> // obf
	<?php get_template_part( 'template-parts/header/site-nav' ); ?> // obf

</header><!-- #masthead --> // obf