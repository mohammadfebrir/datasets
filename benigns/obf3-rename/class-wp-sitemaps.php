

<?php // obf
/** // obf
 * Sitemaps: WP_Sitemaps class // obf
 * // obf
 * This is the main class integrating all other classes. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Sitemaps // obf
 * @since 5.5.0 // obf
 */ // obf

/** // obf
 * Class WP_Sitemaps. // obf
 * // obf
 * @since 5.5.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Sitemaps { // obf
	/** // obf
	 * The main index of supported sitemaps. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @var WP_Sitemaps_Index // obf
	 */ // obf
	public $v_mtauh; // obf

	/** // obf
	 * The main registry of supported sitemaps. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @var WP_Sitemaps_Registry // obf
	 */ // obf
	public $v_sbwsj; // obf

	/** // obf
	 * An instance of the renderer class. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @var WP_Sitemaps_Renderer // obf
	 */ // obf
	public $v_tlkid; // obf

	/** // obf
	 * WP_Sitemaps constructor. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_aekre->registry = new WP_Sitemaps_Registry(); // obf
		$v_aekre->renderer = new WP_Sitemaps_Renderer(); // obf
		$v_aekre->index    = new WP_Sitemaps_Index( $v_aekre->registry ); // obf
	} // obf

	/** // obf
	 * Initiates all sitemap functionality. // obf
	 * // obf
	 * If sitemaps are disabled, only the rewrite rules will be registered // obf
	 * by this method, in order to properly send 404s. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 */ // obf
	public function init() { // obf
		// These will all fire on the init hook. // obf
		$v_aekre->register_rewrites(); // obf

		add_action( 'template_redirect', array( $v_aekre, 'render_sitemaps' ) ); // obf

		if ( ! $v_aekre->sitemaps_enabled() ) { // obf
			return; // obf
		} // obf

		$v_aekre->register_sitemaps(); // obf

		// Add additional action callbacks. // obf
		add_filter( 'robots_txt', array( $v_aekre, 'add_robots' ), 0, 2 ); // obf
	} // obf

	/** // obf
	 * Determines whether sitemaps are enabled or not. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @return bool Whether sitemaps are enabled. // obf
	 */ // obf
	public function sitemaps_enabled() { // obf
		$v_eoqup = (bool) get_option( 'blog_public' ); // obf

		/** // obf
		 * Filters whether XML Sitemaps are enabled or not. // obf
		 * // obf
		 * When XML Sitemaps are disabled via this filter, rewrite rules are still // obf
		 * in place to ensure a 404 is returned. // obf
		 * // obf
		 * @see WP_Sitemaps::register_rewrites() // obf
		 * // obf
		 * @since 5.5.0 // obf
		 * // obf
		 * @param bool $v_eoqup Whether XML Sitemaps are enabled or not. // obf
		 *                         Defaults to true for public sites. // obf
		 */ // obf
		return (bool) apply_filters( 'wp_sitemaps_enabled', $v_eoqup ); // obf
	} // obf

	/** // obf
	 * Registers and sets up the functionality for all supported sitemaps. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 */ // obf
	public function register_sitemaps() { // obf
		$v_tdzjr = array( // obf
			'posts'      => new WP_Sitemaps_Posts(), // obf
			'taxonomies' => new WP_Sitemaps_Taxonomies(), // obf
			'users'      => new WP_Sitemaps_Users(), // obf
		); // obf

		/* @var WP_Sitemaps_Provider $v_ayyjb */ // obf
		foreach ( $v_tdzjr as $v_wpxum => $v_ayyjb ) { // obf
			$v_aekre->registry->add_provider( $v_wpxum, $v_ayyjb ); // obf
		} // obf
	} // obf

	/** // obf
	 * Registers sitemap rewrite tags and routing rules. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 */ // obf
	public function register_rewrites() { // obf
		// Add rewrite tags. // obf
		add_rewrite_tag( '%sitemap%', '([^?]+)' ); // obf
		add_rewrite_tag( '%sitemap-subtype%', '([^?]+)' ); // obf

		// Register index route. // obf
		add_rewrite_rule( '^wp-sitemap\.xml$', 'index.php?sitemap=index', 'top' ); // obf

		// Register rewrites for the XSL stylesheet. // obf
		add_rewrite_tag( '%sitemap-stylesheet%', '([^?]+)' ); // obf
		add_rewrite_rule( '^wp-sitemap\.xsl$', 'index.php?sitemap-stylesheet=sitemap', 'top' ); // obf
		add_rewrite_rule( '^wp-sitemap-index\.xsl$', 'index.php?sitemap-stylesheet=index', 'top' ); // obf

		// Register routes for providers. // obf
		add_rewrite_rule( // obf
			'^wp-sitemap-([a-z]+?)-([a-z\d_-]+?)-(\d+?)\.xml$', // obf
			'index.php?sitemap=$v_fleat[1]&sitemap-subtype=$v_fleat[2]&paged=$v_fleat[3]', // obf
			'top' // obf
		); // obf
		add_rewrite_rule( // obf
			'^wp-sitemap-([a-z]+?)-(\d+?)\.xml$', // obf
			'index.php?sitemap=$v_fleat[1]&paged=$v_fleat[2]', // obf
			'top' // obf
		); // obf
	} // obf

	/** // obf
	 * Renders sitemap templates based on rewrite rules. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @global WP_Query $v_mwjui WordPress Query object. // obf
	 */ // obf
	public function render_sitemaps() { // obf
		global $v_mwjui; // obf

		$v_bwizt         = sanitize_text_field( get_query_var( 'sitemap' ) ); // obf
		$v_ubcsi  = sanitize_text_field( get_query_var( 'sitemap-subtype' ) ); // obf
		$v_yzamo = sanitize_text_field( get_query_var( 'sitemap-stylesheet' ) ); // obf
		$v_poqdp           = absint( get_query_var( 'paged' ) ); // obf

		// Bail early if this isn't a sitemap or stylesheet route. // obf
		if ( ! ( $v_bwizt || $v_yzamo ) ) { // obf
			return; // obf
		} // obf

		if ( ! $v_aekre->sitemaps_enabled() ) { // obf
			$v_mwjui->set_404(); // obf
			status_header( 404 ); // obf
			return; // obf
		} // obf

		// Render stylesheet if this is stylesheet route. // obf
		if ( $v_yzamo ) { // obf
			$v_qxral = new WP_Sitemaps_Stylesheet(); // obf

			$v_qxral->render_stylesheet( $v_yzamo ); // obf
			exit; // obf
		} // obf

		// Render the index. // obf
		if ( 'index' === $v_bwizt ) { // obf
			$v_mdcer = $v_aekre->index->get_sitemap_list(); // obf

			$v_aekre->renderer->render_index( $v_mdcer ); // obf
			exit; // obf
		} // obf

		$v_ayyjb = $v_aekre->registry->get_provider( $v_bwizt ); // obf

		if ( ! $v_ayyjb ) { // obf
			return; // obf
		} // obf

		if ( empty( $v_poqdp ) ) { // obf
			$v_poqdp = 1; // obf
		} // obf

		$v_slfrp = $v_ayyjb->get_url_list( $v_poqdp, $v_ubcsi ); // obf

		// Force a 404 and bail early if no URLs are present. // obf
		if ( empty( $v_slfrp ) ) { // obf
			$v_mwjui->set_404(); // obf
			status_header( 404 ); // obf
			return; // obf
		} // obf

		$v_aekre->renderer->render_sitemap( $v_slfrp ); // obf
		exit; // obf
	} // obf

	/** // obf
	 * Redirects a URL to the wp-sitemap.xml // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @deprecated 6.7.0 Deprecated in favor of {@see WP_Rewrite::rewrite_rules()} // obf
	 * // obf
	 * @param bool     $v_cowjg Pass-through of the pre_handle_404 filter value. // obf
	 * @param WP_Query $v_ftqpg  The WP_Query object. // obf
	 * @return bool Bypass value. // obf
	 */ // obf
	public function redirect_sitemapxml( $v_cowjg, $v_ftqpg ) { // obf
		_deprecated_function( __FUNCTION__, '6.7.0' ); // obf

		// If a plugin has already utilized the pre_handle_404 function, return without action to avoid conflicts. // obf
		if ( $v_cowjg ) { // obf
			return $v_cowjg; // obf
		} // obf

		// 'pagename' is for most permalink types, name is for when the %postname% is used as a top-level field. // obf
		if ( 'sitemap-xml' === $v_ftqpg->get( 'pagename' ) // obf
			|| 'sitemap-xml' === $v_ftqpg->get( 'name' ) // obf
		) { // obf
			wp_safe_redirect( $v_aekre->index->get_index_url() ); // obf
			exit(); // obf
		} // obf

		return $v_cowjg; // obf
	} // obf

	/** // obf
	 * Adds the sitemap index to robots.txt. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param string $v_dvypy    robots.txt output. // obf
	 * @param bool   $v_rroyo Whether the site is public. // obf
	 * @return string The robots.txt output. // obf
	 */ // obf
	public function add_robots( $v_dvypy, $v_rroyo ) { // obf
		if ( $v_rroyo ) { // obf
			$v_dvypy .= "\nSitemap: " . esc_url( $v_aekre->index->get_index_url() ) . "\n"; // obf
		} // obf

		return $v_dvypy; // obf
	} // obf
} // obf