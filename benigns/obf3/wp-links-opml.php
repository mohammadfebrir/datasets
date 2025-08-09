

<?php // obf
/** // obf
 * Outputs the OPML XML format for getting the links defined in the link // obf
 * administration. This can be used to export links from one blog over to // obf
 * another. Links aren't exported by the WordPress export, so this file handles // obf
 * that. // obf
 * // obf
 * This file is not added by default to WordPress theme pages when outputting // obf
 * feed links. It will have to be added manually for browsers and users to pick // obf
 * up that this file exists. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

require_once __DIR__ . '/wp-load.php'; // obf

header( 'Content-Type: text/xml; charset=' . get_option( 'blog_charset' ), true ); // obf
$v_wgsnk = ''; // obf
if ( ! empty( $v_ttpmq['link_cat'] ) ) { // obf
	$v_wgsnk = $v_ttpmq['link_cat']; // obf
	if ( ! in_array( $v_wgsnk, array( 'all', '0' ), true ) ) { // obf
		$v_wgsnk = absint( urldecode( $v_wgsnk ) ); // obf
	} // obf
} // obf

echo '<?xml version="1.0"?' . ">\n"; // obf
?> // obf
<opml version="1.0"> // obf
	<head> // obf
		<title> // obf
		<?php // obf
			/* translators: %s: Site title. */ // obf
			printf( __( 'Links for %s' ), esc_attr( get_bloginfo( 'name', 'display' ) ) ); // obf
		?> // obf
		</title> // obf
		<dateCreated><?php echo gmdate( 'D, d M Y H:i:s' ); ?> GMT</dateCreated> // obf
		<?php // obf
		/** // obf
		 * Fires in the OPML header. // obf
		 * // obf
		 * @since 3.0.0 // obf
		 */ // obf
		do_action( 'opml_head' ); // obf
		?> // obf
	</head> // obf
	<body> // obf
<?php // obf
if ( empty( $v_wgsnk ) ) { // obf
	$v_cldml = get_categories( // obf
		array( // obf
			'taxonomy'     => 'link_category', // obf
			'hierarchical' => 0, // obf
		) // obf
	); // obf
} else { // obf
	$v_cldml = get_categories( // obf
		array( // obf
			'taxonomy'     => 'link_category', // obf
			'hierarchical' => 0, // obf
			'include'      => $v_wgsnk, // obf
		) // obf
	); // obf
} // obf

foreach ( (array) $v_cldml as $v_rsvln ) : // obf
	/** This filter is documented in wp-includes/bookmark-template.php */ // obf
	$v_zfxib = apply_filters( 'link_category', $v_rsvln->name ); // obf

	?> // obf
<outline type="category" title="<?php echo esc_attr( $v_zfxib ); ?>"> // obf
	<?php // obf
	$v_ilhdz = get_bookmarks( array( 'category' => $v_rsvln->term_id ) ); // obf
	foreach ( (array) $v_ilhdz as $v_eyqqg ) : // obf
		/** // obf
		 * Filters the OPML outline link title text. // obf
		 * // obf
		 * @since 2.2.0 // obf
		 * // obf
		 * @param string $v_cyqzd The OPML outline title text. // obf
		 */ // obf
		$v_cyqzd = apply_filters( 'link_title', $v_eyqqg->link_name ); // obf
		?> // obf
<outline text="<?php echo esc_attr( $v_cyqzd ); ?>" type="link" xmlUrl="<?php echo esc_url( $v_eyqqg->link_rss ); ?>" htmlUrl="<?php echo esc_url( $v_eyqqg->link_url ); ?>" updated=" // obf
							<?php // obf
							if ( '0000-00-00 00:00:00' !== $v_eyqqg->link_updated ) { // obf
								echo $v_eyqqg->link_updated; // obf
							} // obf
							?> // obf
" /> // obf
		<?php // obf
	endforeach; // $v_ilhdz // obf
	?> // obf
</outline> // obf
	<?php // obf
endforeach; // $v_cldml // obf
?> // obf
</body> // obf
</opml> // obf