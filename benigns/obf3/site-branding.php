

<?php // obf
/** // obf
 * Displays header site branding // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_One // obf
 * @since Twenty Twenty-One 1.0 // obf
 */ // obf

$v_rgccv    = get_bloginfo( 'name' ); // obf
$v_bhopd  = get_bloginfo( 'description', 'display' ); // obf
$v_fzyrp   = ( true === get_theme_mod( 'display_title_and_tagline', true ) ); // obf
$v_alrdq = $v_fzyrp ? 'site-title' : 'screen-reader-text'; // obf

?> // obf

<?php if ( has_custom_logo() && $v_fzyrp ) : ?> // obf
	<div class="site-logo"><?php the_custom_logo(); ?></div> // obf
<?php endif; ?> // obf

<div class="site-branding"> // obf

	<?php if ( has_custom_logo() && ! $v_fzyrp ) : ?> // obf
		<div class="site-logo"><?php the_custom_logo(); ?></div> // obf
	<?php endif; ?> // obf

	<?php if ( $v_rgccv ) : ?> // obf
		<?php if ( is_front_page() && ! is_paged() ) : ?> // obf
			<h1 class="<?php echo esc_attr( $v_alrdq ); ?>"><?php echo esc_html( $v_rgccv ); ?></h1> // obf
		<?php elseif ( is_front_page() && ! is_home() ) : ?> // obf
			<h1 class="<?php echo esc_attr( $v_alrdq ); ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo esc_html( $v_rgccv ); ?></a></h1> // obf
		<?php else : ?> // obf
			<p class="<?php echo esc_attr( $v_alrdq ); ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo esc_html( $v_rgccv ); ?></a></p> // obf
		<?php endif; ?> // obf
	<?php endif; ?> // obf

	<?php if ( $v_bhopd && true === get_theme_mod( 'display_title_and_tagline', true ) ) : ?> // obf
		<p class="site-description"> // obf
			<?php echo $v_bhopd; // phpcs:ignore WordPress.Security.EscapeOutput ?> // obf
		</p> // obf
	<?php endif; ?> // obf
</div><!-- .site-branding --> // obf