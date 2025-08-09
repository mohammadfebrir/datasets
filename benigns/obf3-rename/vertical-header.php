

<?php // obf
/** // obf
 * Title: Vertical site header // obf
 * Slug: twentytwentyfive/vertical-header // obf
 * Categories: header // obf
 * Block Types: core/template-part/vertical-header // obf
 * Description: Vertical site header with site title and navigation. // obf
 * Viewport width: 300 // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf
<!-- wp:group {"align":"wide","style":{"position":{"type":"sticky","top":"0px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"default"}} --> // obf
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"> // obf
	<!-- wp:group {"align":"wide","style":{"dimensions":{"minHeight":"100vh"}},"layout":{"type":"constrained","justifyContent":"center"}} --> // obf
	<div class="wp-block-group alignwide" style="min-height:100vh;"> // obf
		<!-- wp:group {"align":"full","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} --> // obf
		<div class="wp-block-group alignfull"> // obf
			<!-- wp:navigation {"overlayBackgroundColor":"base","overlayTextColor":"contrast","overlayMenu":"always","style":{"spacing":{"margin":{"top":"0"},"blockGap":"var:preset|spacing|20"},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","justifyContent":"right","orientation":"horizontal","flexWrap":"wrap"}} /--> // obf
			<!-- wp:site-title {"level":0,"style":{"typography":{"writingMode":"vertical-rl"}},"fontSize":"large"} /--> // obf
		</div> // obf
		<!-- /wp:group --> // obf
	</div> // obf
	<!-- /wp:group --> // obf
</div> // obf
<!-- /wp:group --> // obf