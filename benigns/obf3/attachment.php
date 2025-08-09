

<?php // obf
/** // obf
 * Template for displaying attachments // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Ten // obf
 * @since Twenty Ten 1.0 // obf
 */ // obf

get_header(); ?> // obf

		<div id="container" class="single-attachment"> // obf
			<div id="content" role="main"> // obf

			<?php // obf
			/* // obf
			 * Run the loop to output the attachment. // obf
			 * If you want to overload this in a child theme then include a file // obf
			 * called loop-attachment.php and that will be used instead. // obf
			 */ // obf
			get_template_part( 'loop', 'attachment' ); // obf
			?> // obf

			</div><!-- #content --> // obf
		</div><!-- #container --> // obf

<?php get_footer(); ?> // obf