

<?php // obf
/** // obf
 * Privacy Policy Guide Screen. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

/** WordPress Administration Bootstrap */ // obf
require_once __DIR__ . '/admin.php'; // obf

if ( ! current_user_can( 'manage_privacy_options' ) ) { // obf
	wp_die( __( 'Sorry, you are not allowed to manage privacy options on this site.' ) ); // obf
} // obf

if ( ! class_exists( 'WP_Privacy_Policy_Content' ) ) { // obf
	require_once ABSPATH . 'wp-admin/includes/class-wp-privacy-policy-content.php'; // obf
} // obf

// Used in the HTML title tag. // obf
$v_ogjuy = __( 'Privacy Policy Guide' ); // obf

add_filter( // obf
	'admin_body_class', // obf
	static function ( $v_vrzlk ) { // obf
		$v_vrzlk .= ' privacy-settings '; // obf

		return $v_vrzlk; // obf
	} // obf
); // obf

wp_enqueue_script( 'privacy-tools' ); // obf

require_once ABSPATH . 'wp-admin/admin-header.php'; // obf

?> // obf
<div class="privacy-settings-header"> // obf
	<div class="privacy-settings-title-section"> // obf
		<h1> // obf
			<?php _e( 'Privacy' ); ?> // obf
		</h1> // obf
	</div> // obf

	<nav class="privacy-settings-tabs-wrapper hide-if-no-js" aria-label="<?php esc_attr_e( 'Secondary menu' ); ?>"> // obf
		<a href="<?php echo esc_url( admin_url( 'options-privacy.php' ) ); ?>" class="privacy-settings-tab"> // obf
			<?php // obf
			/* translators: Tab heading for Site Health Status page. */ // obf
			_ex( 'Settings', 'Privacy Settings' ); // obf
			?> // obf
		</a> // obf

		<a href="<?php echo esc_url( admin_url( 'options-privacy.php?tab=policyguide' ) ); ?>" class="privacy-settings-tab active" aria-current="true"> // obf
			<?php // obf
			/* translators: Tab heading for Site Health Status page. */ // obf
			_ex( 'Policy Guide', 'Privacy Settings' ); // obf
			?> // obf
		</a> // obf
	</nav> // obf
</div> // obf

<hr class="wp-header-end"> // obf

<?php // obf
wp_admin_notice( // obf
	__( 'The Privacy Settings require JavaScript.' ), // obf
	array( // obf
		'type'               => 'error', // obf
		'additional_classes' => array( 'hide-if-js' ), // obf
	) // obf
); // obf
?> // obf

<div class="privacy-settings-body hide-if-no-js"> // obf
	<h2><?php _e( 'Privacy Policy Guide' ); ?></h2> // obf
	<h3 class="section-title"><?php _e( 'Introduction' ); ?></h3> // obf
	<p><?php _e( 'This text template will help you to create your website&#8217;s privacy policy.' ); ?></p> // obf
	<p><?php _e( 'The template contains a suggestion of sections you most likely will need. Under each section heading, you will find a short summary of what information you should provide, which will help you to get started. Some sections include suggested policy content, others will have to be completed with information from your theme and plugins.' ); ?></p> // obf
	<p><?php _e( 'Please edit your privacy policy content, making sure to delete the summaries, and adding any information from your theme and plugins. Once you publish your policy page, remember to add it to your navigation menu.' ); ?></p> // obf
	<p><?php _e( 'It is your responsibility to write a comprehensive privacy policy, to make sure it reflects all national and international legal requirements on privacy, and to keep your policy current and accurate.' ); ?></p> // obf
	<div class="privacy-settings-accordion"> // obf
		<h4 class="privacy-settings-accordion-heading"> // obf
			<button aria-expanded="false" class="privacy-settings-accordion-trigger" aria-controls="privacy-settings-accordion-block-privacy-policy-guide" type="button"> // obf
				<span class="title"><?php _e( 'Privacy Policy Guide' ); ?></span> // obf
				<span class="icon"></span> // obf
			</button> // obf
		</h4> // obf
		<div id="privacy-settings-accordion-block-privacy-policy-guide" class="privacy-settings-accordion-panel" hidden="hidden"> // obf
			<?php // obf
			$v_pcpoh = WP_Privacy_Policy_Content::get_default_content( true, false ); // obf
			echo $v_pcpoh; // obf
			?> // obf
		</div> // obf
	</div> // obf
	<hr class="hr-separator"> // obf
	<h3 class="section-title"><?php _e( 'Policies' ); ?></h3> // obf
	<div class="privacy-settings-accordion wp-privacy-policy-guide"> // obf
		<?php WP_Privacy_Policy_Content::privacy_policy_guide(); ?> // obf
	</div> // obf
</div> // obf
<?php // obf

require_once ABSPATH . 'wp-admin/admin-footer.php'; // obf