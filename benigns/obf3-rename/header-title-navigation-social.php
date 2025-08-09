

<?php // obf
/** // obf
 * Title, navigation, and social links header block pattern // obf
 */ // obf
return array( // obf
	'title'      => __( 'Title, navigation, and social links header', 'twentytwentytwo' ), // obf
	'categories' => array( 'header' ), // obf
	'blockTypes' => array( 'core/template-part/header' ), // obf
	'content'    => '<!-- wp:group {"align":"full","layout":{"inherit":true}} --> // obf
					<div class="wp-block-group alignfull"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"var(--wp--custom--spacing--large, 8rem)","top":"var(--wp--custom--spacing--small, 1.25rem)"}}},"layout":{"type":"flex","justifyContent":"space-between"}} --> // obf
					<div class="wp-block-group alignwide" style="padding-top:var(--wp--custom--spacing--small, 1.25rem);padding-bottom:var(--wp--custom--spacing--large, 8rem)"><!-- wp:site-title {"style":{"typography":{"fontStyle":"italic","fontWeight":"400"}}} /--> // obf

					<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} --> // obf
					<!-- wp:page-list {"isNavigationChild":true,"showSubmenuIcon":true,"openSubmenusOnClick":false} /--> // obf

					<!-- wp:social-links {"iconColor":"foreground","iconColorValue":"var(--wp--preset--color--foreground)","className":"is-style-logos-only"} --> // obf
					<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"instagram"} /--> // obf

					<!-- wp:social-link {"url":"#","service":"twitter"} /--></ul> // obf
					<!-- /wp:social-links --> // obf
					<!-- /wp:navigation --></div> // obf
					<!-- /wp:group --></div> // obf
					<!-- /wp:group -->', // obf
); // obf