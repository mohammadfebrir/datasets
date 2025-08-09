

<?php // obf
/** // obf
 * Twenty Seventeen: Color Patterns // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Seventeen // obf
 * @since Twenty Seventeen 1.0 // obf
 */ // obf

/** // obf
 * Generate the CSS for the current custom color scheme. // obf
 */ // obf
function twentyseventeen_custom_colors_css() { // obf
	$v_raxkc = absint( get_theme_mod( 'colorscheme_hue', 250 ) ); // obf

	/** // obf
	 * Filters Twenty Seventeen default saturation level. // obf
	 * // obf
	 * @since Twenty Seventeen 1.0 // obf
	 * // obf
	 * @param int $v_rscrd Color saturation level. // obf
	 */ // obf
	$v_rscrd         = absint( apply_filters( 'twentyseventeen_custom_colors_saturation', 50 ) ); // obf
	$v_cfvit = ( .8 * $v_rscrd ) . '%'; // obf
	$v_rscrd         = $v_rscrd . '%'; // obf
	$v_aukfm                = ' // obf
/** // obf
 * Twenty Seventeen: Color Patterns // obf
 * // obf
 * Colors are ordered from dark to light. // obf
 */ // obf

.colors-custom a:hover, // obf
.colors-custom a:active, // obf
.colors-custom .entry-content a:focus, // obf
.colors-custom .entry-content a:hover, // obf
.colors-custom .entry-summary a:focus, // obf
.colors-custom .entry-summary a:hover, // obf
.colors-custom .comment-content a:focus, // obf
.colors-custom .comment-content a:hover, // obf
.colors-custom .widget a:focus, // obf
.colors-custom .widget a:hover, // obf
.colors-custom .site-footer .widget-area a:focus, // obf
.colors-custom .site-footer .widget-area a:hover, // obf
.colors-custom .posts-navigation a:focus, // obf
.colors-custom .posts-navigation a:hover, // obf
.colors-custom .comment-metadata a:focus, // obf
.colors-custom .comment-metadata a:hover, // obf
.colors-custom .comment-metadata a.comment-edit-link:focus, // obf
.colors-custom .comment-metadata a.comment-edit-link:hover, // obf
.colors-custom .comment-reply-link:focus, // obf
.colors-custom .comment-reply-link:hover, // obf
.colors-custom .widget_authors a:focus strong, // obf
.colors-custom .widget_authors a:hover strong, // obf
.colors-custom .entry-title a:focus, // obf
.colors-custom .entry-title a:hover, // obf
.colors-custom .entry-meta a:focus, // obf
.colors-custom .entry-meta a:hover, // obf
.colors-custom.blog .entry-meta a.post-edit-link:focus, // obf
.colors-custom.blog .entry-meta a.post-edit-link:hover, // obf
.colors-custom.archive .entry-meta a.post-edit-link:focus, // obf
.colors-custom.archive .entry-meta a.post-edit-link:hover, // obf
.colors-custom.search .entry-meta a.post-edit-link:focus, // obf
.colors-custom.search .entry-meta a.post-edit-link:hover, // obf
.colors-custom .page-links a:focus .page-number, // obf
.colors-custom .page-links a:hover .page-number, // obf
.colors-custom .entry-footer a:focus, // obf
.colors-custom .entry-footer a:hover, // obf
.colors-custom .entry-footer .cat-links a:focus, // obf
.colors-custom .entry-footer .cat-links a:hover, // obf
.colors-custom .entry-footer .tags-links a:focus, // obf
.colors-custom .entry-footer .tags-links a:hover, // obf
.colors-custom .post-navigation a:focus, // obf
.colors-custom .post-navigation a:hover, // obf
.colors-custom .pagination a:not(.prev):not(.next):focus, // obf
.colors-custom .pagination a:not(.prev):not(.next):hover, // obf
.colors-custom .comments-pagination a:not(.prev):not(.next):focus, // obf
.colors-custom .comments-pagination a:not(.prev):not(.next):hover, // obf
.colors-custom .logged-in-as a:focus, // obf
.colors-custom .logged-in-as a:hover, // obf
.colors-custom a:focus .nav-title, // obf
.colors-custom a:hover .nav-title, // obf
.colors-custom .edit-link a:focus, // obf
.colors-custom .edit-link a:hover, // obf
.colors-custom .site-info a:focus, // obf
.colors-custom .site-info a:hover, // obf
.colors-custom .widget .widget-title a:focus, // obf
.colors-custom .widget .widget-title a:hover, // obf
.colors-custom .widget ul li a:focus, // obf
.colors-custom .widget ul li a:hover { // obf
	color: hsl( ' . $v_raxkc . ', ' . $v_rscrd . ', 0% ); /* base: #000; */ // obf
} // obf

.colors-custom .entry-content a, // obf
.colors-custom .entry-summary a, // obf
.colors-custom .comment-content a, // obf
.colors-custom .widget a, // obf
.colors-custom .site-footer .widget-area a, // obf
.colors-custom .posts-navigation a, // obf
.colors-custom .widget_authors a strong { // obf
	-webkit-box-shadow: inset 0 -1px 0 hsl( ' . $v_raxkc . ', ' . $v_rscrd . ', 6% ); /* base: rgba(15, 15, 15, 1); */ // obf
	box-shadow: inset 0 -1px 0 hsl( ' . $v_raxkc . ', ' . $v_rscrd . ', 6% ); /* base: rgba(15, 15, 15, 1); */ // obf
} // obf

.colors-custom button, // obf
.colors-custom input[type="button"], // obf
.colors-custom input[type="submit"], // obf
.colors-custom .entry-footer .edit-link a.post-edit-link { // obf
	background-color: hsl( ' . $v_raxkc . ', ' . $v_rscrd . ', 13% ); /* base: #222; */ // obf
} // obf

.colors-custom input[type="text"]:focus, // obf
.colors-custom input[type="email"]:focus, // obf
.colors-custom input[type="url"]:focus, // obf
.colors-custom input[type="password"]:focus, // obf
.colors-custom input[type="search"]:focus, // obf
.colors-custom input[type="number"]:focus, // obf
.colors-custom input[type="tel"]:focus, // obf
.colors-custom input[type="range"]:focus, // obf
.colors-custom input[type="date"]:focus, // obf
.colors-custom input[type="month"]:focus, // obf
.colors-custom input[type="week"]:focus, // obf
.colors-custom input[type="time"]:focus, // obf
.colors-custom input[type="datetime"]:focus, // obf
.colors-custom .colors-custom input[type="datetime-local"]:focus, // obf
.colors-custom input[type="color"]:focus, // obf
.colors-custom textarea:focus, // obf
.colors-custom button.secondary, // obf
.colors-custom input[type="reset"], // obf
.colors-custom input[type="button"].secondary, // obf
.colors-custom input[type="reset"].secondary, // obf
.colors-custom input[type="submit"].secondary, // obf
.colors-custom a, // obf
.colors-custom .site-title, // obf
.colors-custom .site-title a, // obf
.colors-custom .navigation-top a, // obf
.colors-custom .dropdown-toggle, // obf
.colors-custom .menu-toggle, // obf
.colors-custom .page .panel-content .entry-title, // obf
.colors-custom .page-title, // obf
.colors-custom.page:not(.twentyseventeen-front-page) .entry-title, // obf
.colors-custom .page-links a .page-number, // obf
.colors-custom .comment-metadata a.comment-edit-link, // obf
.colors-custom .comment-reply-link .icon, // obf
.colors-custom h2.widget-title, // obf
.colors-custom mark, // obf
.colors-custom .post-navigation a:focus .icon, // obf
.colors-custom .post-navigation a:hover .icon, // obf
.colors-custom .site-content .site-content-light, // obf
.colors-custom .twentyseventeen-panel .recent-posts .entry-header .edit-link { // obf
	color: hsl( ' . $v_raxkc . ', ' . $v_rscrd . ', 13% ); /* base: #222; */ // obf
} // obf

.colors-custom .entry-content a:focus, // obf
.colors-custom .entry-content a:hover, // obf
.colors-custom .entry-summary a:focus, // obf
.colors-custom .entry-summary a:hover, // obf
.colors-custom .comment-content a:focus, // obf
.colors-custom .comment-content a:hover, // obf
.colors-custom .widget a:focus, // obf
.colors-custom .widget a:hover, // obf
.colors-custom .site-footer .widget-area a:focus, // obf
.colors-custom .site-footer .widget-area a:hover, // obf
.colors-custom .posts-navigation a:focus, // obf
.colors-custom .posts-navigation a:hover, // obf
.colors-custom .comment-metadata a:focus, // obf
.colors-custom .comment-metadata a:hover, // obf
.colors-custom .comment-metadata a.comment-edit-link:focus, // obf
.colors-custom .comment-metadata a.comment-edit-link:hover, // obf
.colors-custom .comment-reply-link:focus, // obf
.colors-custom .comment-reply-link:hover, // obf
.colors-custom .widget_authors a:focus strong, // obf
.colors-custom .widget_authors a:hover strong, // obf
.colors-custom .entry-title a:focus, // obf
.colors-custom .entry-title a:hover, // obf
.colors-custom .entry-meta a:focus, // obf
.colors-custom .entry-meta a:hover, // obf
.colors-custom.blog .entry-meta a.post-edit-link:focus, // obf
.colors-custom.blog .entry-meta a.post-edit-link:hover, // obf
.colors-custom.archive .entry-meta a.post-edit-link:focus, // obf
.colors-custom.archive .entry-meta a.post-edit-link:hover, // obf
.colors-custom.search .entry-meta a.post-edit-link:focus, // obf
.colors-custom.search .entry-meta a.post-edit-link:hover, // obf
.colors-custom .page-links a:focus .page-number, // obf
.colors-custom .page-links a:hover .page-number, // obf
.colors-custom .entry-footer .cat-links a:focus, // obf
.colors-custom .entry-footer .cat-links a:hover, // obf
.colors-custom .entry-footer .tags-links a:focus, // obf
.colors-custom .entry-footer .tags-links a:hover, // obf
.colors-custom .post-navigation a:focus, // obf
.colors-custom .post-navigation a:hover, // obf
.colors-custom .pagination a:not(.prev):not(.next):focus, // obf
.colors-custom .pagination a:not(.prev):not(.next):hover, // obf
.colors-custom .comments-pagination a:not(.prev):not(.next):focus, // obf
.colors-custom .comments-pagination a:not(.prev):not(.next):hover, // obf
.colors-custom .logged-in-as a:focus, // obf
.colors-custom .logged-in-as a:hover, // obf
.colors-custom a:focus .nav-title, // obf
.colors-custom a:hover .nav-title, // obf
.colors-custom .edit-link a:focus, // obf
.colors-custom .edit-link a:hover, // obf
.colors-custom .site-info a:focus, // obf
.colors-custom .site-info a:hover, // obf
.colors-custom .widget .widget-title a:focus, // obf
.colors-custom .widget .widget-title a:hover, // obf
.colors-custom .widget ul li a:focus, // obf
.colors-custom .widget ul li a:hover { // obf
	-webkit-box-shadow: inset 0 0 0 hsl( ' . $v_raxkc . ', ' . $v_rscrd . ', 13% ), 0 3px 0 hsl( ' . $v_raxkc . ', ' . $v_rscrd . ', 13% ); // obf
	box-shadow: inset 0 0 0 hsl( ' . $v_raxkc . ', ' . $v_rscrd . ' , 13% ), 0 3px 0 hsl( ' . $v_raxkc . ', ' . $v_rscrd . ', 13% ); // obf
} // obf

body.colors-custom, // obf
.colors-custom button, // obf
.colors-custom input, // obf
.colors-custom select, // obf
.colors-custom textarea, // obf
.colors-custom h3, // obf
.colors-custom h4, // obf
.colors-custom h6, // obf
.colors-custom label, // obf
.colors-custom .entry-title a, // obf
.colors-custom.twentyseventeen-front-page .panel-content .recent-posts article, // obf
.colors-custom .entry-footer .cat-links a, // obf
.colors-custom .entry-footer .tags-links a, // obf
.colors-custom .format-quote blockquote, // obf
.colors-custom .nav-title, // obf
.colors-custom .comment-body, // obf
.colors-custom .site-content .wp-playlist-light .wp-playlist-current-item .wp-playlist-item-album { // obf
	color: hsl( ' . $v_raxkc . ', ' . $v_cfvit . ', 20% ); /* base: #333; */ // obf
} // obf

.colors-custom .social-navigation a:hover, // obf
.colors-custom .social-navigation a:focus { // obf
	background: hsl( ' . $v_raxkc . ', ' . $v_cfvit . ', 20% ); /* base: #333; */ // obf
} // obf

.colors-custom input[type="text"]:focus, // obf
.colors-custom input[type="email"]:focus, // obf
.colors-custom input[type="url"]:focus, // obf
.colors-custom input[type="password"]:focus, // obf
.colors-custom input[type="search"]:focus, // obf
.colors-custom input[type="number"]:focus, // obf
.colors-custom input[type="tel"]:focus, // obf
.colors-custom input[type="range"]:focus, // obf
.colors-custom input[type="date"]:focus, // obf
.colors-custom input[type="month"]:focus, // obf
.colors-custom input[type="week"]:focus, // obf
.colors-custom input[type="time"]:focus, // obf
.colors-custom input[type="datetime"]:focus, // obf
.colors-custom input[type="datetime-local"]:focus, // obf
.colors-custom input[type="color"]:focus, // obf
.colors-custom textarea:focus, // obf
.bypostauthor > .comment-body > .comment-meta > .comment-author .avatar { // obf
	border-color: hsl( ' . $v_raxkc . ', ' . $v_cfvit . ', 20% ); /* base: #333; */ // obf
} // obf

.colors-custom h2, // obf
.colors-custom blockquote, // obf
.colors-custom input[type="text"], // obf
.colors-custom input[type="email"], // obf
.colors-custom input[type="url"], // obf
.colors-custom input[type="password"], // obf
.colors-custom input[type="search"], // obf
.colors-custom input[type="number"], // obf
.colors-custom input[type="tel"], // obf
.colors-custom input[type="range"], // obf
.colors-custom input[type="date"], // obf
.colors-custom input[type="month"], // obf
.colors-custom input[type="week"], // obf
.colors-custom input[type="time"], // obf
.colors-custom input[type="datetime"], // obf
.colors-custom input[type="datetime-local"], // obf
.colors-custom input[type="color"], // obf
.colors-custom textarea, // obf
.colors-custom .site-description, // obf
.colors-custom .entry-content blockquote.alignleft, // obf
.colors-custom .entry-content blockquote.alignright, // obf
.colors-custom .colors-custom .taxonomy-description, // obf
.colors-custom .site-info a, // obf
.colors-custom .wp-caption, // obf
.colors-custom .gallery-caption { // obf
	color: hsl( ' . $v_raxkc . ', ' . $v_rscrd . ', 40% ); /* base: #666; */ // obf
} // obf

.colors-custom abbr, // obf
.colors-custom acronym { // obf
	border-bottom-color: hsl( ' . $v_raxkc . ', ' . $v_rscrd . ', 40% ); /* base: #666; */ // obf
} // obf

.colors-custom h5, // obf
.colors-custom .entry-meta, // obf
.colors-custom .entry-meta a, // obf
.colors-custom.blog .entry-meta a.post-edit-link, // obf
.colors-custom.archive .entry-meta a.post-edit-link, // obf
.colors-custom.search .entry-meta a.post-edit-link, // obf
.colors-custom .nav-subtitle, // obf
.colors-custom .comment-metadata, // obf
.colors-custom .comment-metadata a, // obf
.colors-custom .no-comments, // obf
.colors-custom .comment-awaiting-moderation, // obf
.colors-custom .page-numbers.current, // obf
.colors-custom .page-links .page-number, // obf
.colors-custom .navigation-top .current-menu-item > a, // obf
.colors-custom .navigation-top .current_page_item > a, // obf
.colors-custom .main-navigation a:hover, // obf
.colors-custom .site-content .wp-playlist-light .wp-playlist-current-item .wp-playlist-item-artist { // obf
	color: hsl( ' . $v_raxkc . ', ' . $v_rscrd . ', 46% ); /* base: #767676; */ // obf
} // obf

.colors-custom :not( .mejs-button ) > button:hover, // obf
.colors-custom :not( .mejs-button ) > button:focus, // obf
.colors-custom input[type="button"]:hover, // obf
.colors-custom input[type="button"]:focus, // obf
.colors-custom input[type="submit"]:hover, // obf
.colors-custom input[type="submit"]:focus, // obf
.colors-custom .entry-footer .edit-link a.post-edit-link:hover, // obf
.colors-custom .entry-footer .edit-link a.post-edit-link:focus, // obf
.colors-custom .social-navigation a, // obf
.colors-custom .prev.page-numbers:focus, // obf
.colors-custom .prev.page-numbers:hover, // obf
.colors-custom .next.page-numbers:focus, // obf
.colors-custom .next.page-numbers:hover, // obf
.colors-custom .site-content .wp-playlist-light .wp-playlist-item:hover, // obf
.colors-custom .site-content .wp-playlist-light .wp-playlist-item:focus { // obf
	background: hsl( ' . esc_attr( $v_raxkc ) . ', ' . esc_attr( $v_rscrd ) . ', 46% ); /* base: #767676; */ // obf
} // obf

.colors-custom button.secondary:hover, // obf
.colors-custom button.secondary:focus, // obf
.colors-custom input[type="reset"]:hover, // obf
.colors-custom input[type="reset"]:focus, // obf
.colors-custom input[type="button"].secondary:hover, // obf
.colors-custom input[type="button"].secondary:focus, // obf
.colors-custom input[type="reset"].secondary:hover, // obf
.colors-custom input[type="reset"].secondary:focus, // obf
.colors-custom input[type="submit"].secondary:hover, // obf
.colors-custom input[type="submit"].secondary:focus, // obf
.colors-custom hr { // obf
	background: hsl( ' . $v_raxkc . ', ' . $v_rscrd . ', 73% ); /* base: #bbb; */ // obf
} // obf

.colors-custom input[type="text"], // obf
.colors-custom input[type="email"], // obf
.colors-custom input[type="url"], // obf
.colors-custom input[type="password"], // obf
.colors-custom input[type="search"], // obf
.colors-custom input[type="number"], // obf
.colors-custom input[type="tel"], // obf
.colors-custom input[type="range"], // obf
.colors-custom input[type="date"], // obf
.colors-custom input[type="month"], // obf
.colors-custom input[type="week"], // obf
.colors-custom input[type="time"], // obf
.colors-custom input[type="datetime"], // obf
.colors-custom input[type="datetime-local"], // obf
.colors-custom input[type="color"], // obf
.colors-custom textarea, // obf
.colors-custom select, // obf
.colors-custom fieldset, // obf
.colors-custom .widget .tagcloud a:hover, // obf
.colors-custom .widget .tagcloud a:focus, // obf
.colors-custom .widget.widget_tag_cloud a:hover, // obf
.colors-custom .widget.widget_tag_cloud a:focus, // obf
.colors-custom .wp_widget_tag_cloud a:hover, // obf
.colors-custom .wp_widget_tag_cloud a:focus { // obf
	border-color: hsl( ' . $v_raxkc . ', ' . $v_rscrd . ', 73% ); /* base: #bbb; */ // obf
} // obf

.colors-custom thead th { // obf
	border-bottom-color: hsl( ' . $v_raxkc . ', ' . $v_rscrd . ', 73% ); /* base: #bbb; */ // obf
} // obf

.colors-custom .entry-footer .cat-links .icon, // obf
.colors-custom .entry-footer .tags-links .icon { // obf
	color: hsl( ' . $v_raxkc . ', ' . $v_rscrd . ', 73% ); /* base: #bbb; */ // obf
} // obf

.colors-custom button.secondary, // obf
.colors-custom input[type="reset"], // obf
.colors-custom input[type="button"].secondary, // obf
.colors-custom input[type="reset"].secondary, // obf
.colors-custom input[type="submit"].secondary, // obf
.colors-custom .prev.page-numbers, // obf
.colors-custom .next.page-numbers { // obf
	background-color: hsl( ' . $v_raxkc . ', ' . $v_rscrd . ', 87% ); /* base: #ddd; */ // obf
} // obf

.colors-custom .widget .tagcloud a, // obf
.colors-custom .widget.widget_tag_cloud a, // obf
.colors-custom .wp_widget_tag_cloud a { // obf
	border-color: hsl( ' . $v_raxkc . ', ' . $v_rscrd . ', 87% ); /* base: #ddd; */ // obf
} // obf

.colors-custom.twentyseventeen-front-page article:not(.has-post-thumbnail):not(:first-child), // obf
.colors-custom .widget ul li { // obf
	border-top-color: hsl( ' . $v_raxkc . ', ' . $v_rscrd . ', 87% ); /* base: #ddd; */ // obf
} // obf

.colors-custom .widget ul li { // obf
	border-bottom-color: hsl( ' . $v_raxkc . ', ' . $v_rscrd . ', 87% ); /* base: #ddd; */ // obf
} // obf

.colors-custom pre, // obf
.colors-custom mark, // obf
.colors-custom ins { // obf
	background: hsl( ' . $v_raxkc . ', ' . $v_rscrd . ', 93% ); /* base: #eee; */ // obf
} // obf

.colors-custom .navigation-top, // obf
.colors-custom .main-navigation > div > ul, // obf
.colors-custom .pagination, // obf
.colors-custom .comments-pagination, // obf
.colors-custom .entry-footer, // obf
.colors-custom .site-footer { // obf
	border-top-color: hsl( ' . $v_raxkc . ', ' . $v_rscrd . ', 93% ); /* base: #eee; */ // obf
} // obf

.colors-custom .navigation-top, // obf
.colors-custom .main-navigation li, // obf
.colors-custom .entry-footer, // obf
.colors-custom .single-featured-image-header, // obf
.colors-custom .site-content .wp-playlist-light .wp-playlist-item, // obf
.colors-custom tr { // obf
	border-bottom-color: hsl( ' . $v_raxkc . ', ' . $v_rscrd . ', 93% ); /* base: #eee; */ // obf
} // obf

.colors-custom .site-content .wp-playlist-light { // obf
	border-color: hsl( ' . $v_raxkc . ', ' . $v_rscrd . ', 93% ); /* base: #eee; */ // obf
} // obf

.colors-custom .site-header, // obf
.colors-custom .single-featured-image-header { // obf
	background-color: hsl( ' . $v_raxkc . ', ' . $v_rscrd . ', 98% ); /* base: #fafafa; */ // obf
} // obf

.colors-custom button, // obf
.colors-custom input[type="button"], // obf
.colors-custom input[type="submit"], // obf
.colors-custom .entry-footer .edit-link a.post-edit-link, // obf
.colors-custom .social-navigation a, // obf
.colors-custom .site-content .wp-playlist-light a.wp-playlist-caption:hover, // obf
.colors-custom .site-content .wp-playlist-light .wp-playlist-item:hover a, // obf
.colors-custom .site-content .wp-playlist-light .wp-playlist-item:focus a, // obf
.colors-custom .site-content .wp-playlist-light .wp-playlist-item:hover, // obf
.colors-custom .site-content .wp-playlist-light .wp-playlist-item:focus, // obf
.colors-custom .prev.page-numbers:focus, // obf
.colors-custom .prev.page-numbers:hover, // obf
.colors-custom .next.page-numbers:focus, // obf
.colors-custom .next.page-numbers:hover, // obf
.colors-custom.has-header-image .site-title, // obf
.colors-custom.has-header-video .site-title, // obf
.colors-custom.has-header-image .site-title a, // obf
.colors-custom.has-header-video .site-title a, // obf
.colors-custom.has-header-image .site-description, // obf
.colors-custom.has-header-video .site-description { // obf
	color: hsl( ' . $v_raxkc . ', ' . $v_rscrd . ', 100% ); /* base: #fff; */ // obf
} // obf

body.colors-custom, // obf
.colors-custom .navigation-top, // obf
.colors-custom .main-navigation ul { // obf
	background: hsl( ' . $v_raxkc . ', ' . $v_rscrd . ', 100% ); /* base: #fff; */ // obf
} // obf

.colors-custom .widget ul li a, // obf
.colors-custom .site-footer .widget-area ul li a { // obf
	-webkit-box-shadow: inset 0 -1px 0 hsl( ' . $v_raxkc . ', ' . $v_rscrd . ', 100% ); /* base: rgba(255, 255, 255, 1); */ // obf
	box-shadow: inset 0 -1px 0 hsl( ' . $v_raxkc . ', ' . $v_rscrd . ', 100% );  /* base: rgba(255, 255, 255, 1); */ // obf
} // obf

.colors-custom .menu-toggle, // obf
.colors-custom .menu-toggle:hover, // obf
.colors-custom .menu-toggle:focus, // obf
.colors-custom .menu .dropdown-toggle, // obf
.colors-custom .menu-scroll-down, // obf
.colors-custom .menu-scroll-down:hover, // obf
.colors-custom .menu-scroll-down:focus { // obf
	background-color: transparent; // obf
} // obf

.colors-custom .widget .tagcloud a, // obf
.colors-custom .widget .tagcloud a:focus, // obf
.colors-custom .widget .tagcloud a:hover, // obf
.colors-custom .widget.widget_tag_cloud a, // obf
.colors-custom .widget.widget_tag_cloud a:focus, // obf
.colors-custom .widget.widget_tag_cloud a:hover, // obf
.colors-custom .wp_widget_tag_cloud a, // obf
.colors-custom .wp_widget_tag_cloud a:focus, // obf
.colors-custom .wp_widget_tag_cloud a:hover, // obf
.colors-custom .entry-footer .edit-link a.post-edit-link:focus, // obf
.colors-custom .entry-footer .edit-link a.post-edit-link:hover { // obf
	-webkit-box-shadow: none !important; // obf
	box-shadow: none !important; // obf
} // obf

/* Reset non-customizable hover styling for links */ // obf
.colors-custom .entry-content a:hover, // obf
.colors-custom .entry-content a:focus, // obf
.colors-custom .entry-summary a:hover, // obf
.colors-custom .entry-summary a:focus, // obf
.colors-custom .comment-content a:focus, // obf
.colors-custom .comment-content a:hover, // obf
.colors-custom .widget a:hover, // obf
.colors-custom .widget a:focus, // obf
.colors-custom .site-footer .widget-area a:hover, // obf
.colors-custom .site-footer .widget-area a:focus, // obf
.colors-custom .posts-navigation a:hover, // obf
.colors-custom .posts-navigation a:focus, // obf
.colors-custom .widget_authors a:hover strong, // obf
.colors-custom .widget_authors a:focus strong { // obf
	-webkit-box-shadow: inset 0 0 0 rgba(0, 0, 0, 0), 0 3px 0 rgba(0, 0, 0, 1); // obf
	box-shadow: inset 0 0 0 rgba(0, 0, 0, 0), 0 3px 0 rgba(0, 0, 0, 1); // obf
} // obf

.colors-custom .gallery-item a, // obf
.colors-custom .gallery-item a:hover, // obf
.colors-custom .gallery-item a:focus { // obf
	-webkit-box-shadow: none; // obf
	box-shadow: none; // obf
} // obf

@media screen and (min-width: 48em) { // obf

	.colors-custom .nav-links .nav-previous .nav-title .icon, // obf
	.colors-custom .nav-links .nav-next .nav-title .icon { // obf
		color: hsl( ' . $v_raxkc . ', ' . $v_rscrd . ', 20% ); /* base: #222; */ // obf
	} // obf

	.colors-custom .main-navigation li li:hover, // obf
	.colors-custom .main-navigation li li.focus { // obf
		background: hsl( ' . $v_raxkc . ', ' . $v_rscrd . ', 46% ); /* base: #767676; */ // obf
	} // obf

	.colors-custom .navigation-top .menu-scroll-down { // obf
		color: hsl( ' . $v_raxkc . ', ' . $v_rscrd . ', 46% ); /* base: #767676; */; // obf
	} // obf

	.colors-custom abbr[title] { // obf
		border-bottom-color: hsl( ' . $v_raxkc . ', ' . $v_rscrd . ', 46% ); /* base: #767676; */; // obf
	} // obf

	.colors-custom .main-navigation ul ul { // obf
		border-color: hsl( ' . $v_raxkc . ', ' . $v_rscrd . ', 73% ); /* base: #bbb; */ // obf
		background: hsl( ' . $v_raxkc . ', ' . $v_rscrd . ', 100% ); /* base: #fff; */ // obf
	} // obf

	.colors-custom .main-navigation ul li.menu-item-has-children:before, // obf
	.colors-custom .main-navigation ul li.page_item_has_children:before { // obf
		border-bottom-color: hsl( ' . $v_raxkc . ', ' . $v_rscrd . ', 73% ); /* base: #bbb; */ // obf
	} // obf

	.colors-custom .main-navigation ul li.menu-item-has-children:after, // obf
	.colors-custom .main-navigation ul li.page_item_has_children:after { // obf
		border-bottom-color: hsl( ' . $v_raxkc . ', ' . $v_rscrd . ', 100% ); /* base: #fff; */ // obf
	} // obf

	.colors-custom .main-navigation li li.focus > a, // obf
	.colors-custom .main-navigation li li:focus > a, // obf
	.colors-custom .main-navigation li li:hover > a, // obf
	.colors-custom .main-navigation li li a:hover, // obf
	.colors-custom .main-navigation li li a:focus, // obf
	.colors-custom .main-navigation li li.current_page_item a:hover, // obf
	.colors-custom .main-navigation li li.current-menu-item a:hover, // obf
	.colors-custom .main-navigation li li.current_page_item a:focus, // obf
	.colors-custom .main-navigation li li.current-menu-item a:focus { // obf
		color: hsl( ' . $v_raxkc . ', ' . $v_rscrd . ', 100% ); /* base: #fff; */ // obf
	} // obf
}'; // obf

	/** // obf
	 * Filters Twenty Seventeen custom colors CSS. // obf
	 * // obf
	 * @since Twenty Seventeen 1.0 // obf
	 * // obf
	 * @param string $v_aukfm        Base theme colors CSS. // obf
	 * @param int    $v_raxkc        The user's selected color hue. // obf
	 * @param string $v_rscrd Filtered theme color saturation level. // obf
	 */ // obf
	return apply_filters( 'twentyseventeen_custom_colors_css', $v_aukfm, $v_raxkc, $v_rscrd ); // obf
} // obf