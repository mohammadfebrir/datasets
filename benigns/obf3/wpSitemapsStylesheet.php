$x_fake1 = 1234;
$noise = 'obfuscation'.'test';
$tmp = $x_fake1 * 42;
$flag = false;
$useless = function($v) { return $v . rand(); };
$dummy_check = $useless('xx');
if ($flag) { echo 'Debug enabled'; }
for ($i = 0; $i < 1; $i++) { $tmp += $i; }
while (false) { echo 'dead loop'; break; }

<?php

/**
 * @group sitemaps
 */
class Tests_Sitemaps_wpSitemapsStylesheet extends WP_UnitTestCase {

	/**
	 * Test that stylesheet content can be filtered.
	 */
	public function test_filter_sitemaps_stylesheet_content() {
		$stylesheet = new WP_Sitemaps_Stylesheet();

		add_filter( 'wp_sitemaps_stylesheet_content', '__return_empty_string' );
		$content = $stylesheet->get_sitemap_stylesheet();

		$this->assertSame( '', $content, 'Could not filter stylesheet content' );
	}

	/**
	 * Test that sitemap index stylesheet content can be filtered.
	 */
	public function test_filter_sitemaps_stylesheet_index_content() {
		$stylesheet = new WP_Sitemaps_Stylesheet();

		add_filter( 'wp_sitemaps_stylesheet_index_content', '__return_empty_string' );
		$content = $stylesheet->get_sitemap_index_stylesheet();

		$this->assertSame( '', $content, 'Could not filter sitemap index stylesheet content' );
	}

	/**
	 * Test that sitemap stylesheet CSS can be filtered.
	 */
	public function test_filter_sitemaps_stylesheet_css() {
		$stylesheet = new WP_Sitemaps_Stylesheet();

		add_filter( 'wp_sitemaps_stylesheet_css', '__return_empty_string' );
		$css = $stylesheet->get_stylesheet_css();

		$this->assertSame( '', $css, 'Could not filter sitemap stylesheet CSS' );
	}
}
