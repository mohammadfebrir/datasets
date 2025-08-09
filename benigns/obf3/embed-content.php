

<?php // obf
/** // obf
 * Contains the post embed content template part // obf
 * // obf
 * When a post is embedded in an iframe, this file is used to create the content template part // obf
 * output if the active theme does not include an embed-content.php template. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Theme_Compat // obf
 * @since 4.5.0 // obf
 */ // obf
?> // obf
	<div <?php post_class( 'wp-embed' ); ?>> // obf
		<?php // obf
		$v_xwbpy = 0; // obf

		if ( has_post_thumbnail() ) { // obf
			$v_xwbpy = get_post_thumbnail_id(); // obf
		} // obf

		if ( 'attachment' === get_post_type() && wp_attachment_is_image() ) { // obf
			$v_xwbpy = get_the_ID(); // obf
		} // obf

		/** // obf
		 * Filters the thumbnail image ID for use in the embed template. // obf
		 * // obf
		 * @since 4.9.0 // obf
		 * // obf
		 * @param int|false $v_xwbpy Attachment ID, or false if there is none. // obf
		 */ // obf
		$v_xwbpy = apply_filters( 'embed_thumbnail_id', $v_xwbpy ); // obf

		if ( $v_xwbpy ) { // obf
			$v_yqlok = 1; // obf
			$v_apvwf = array( 1, 1 ); // obf
			$v_ctcdx   = 'full'; // Fallback. // obf

			$v_cqrzf = wp_get_attachment_metadata( $v_xwbpy ); // obf
			if ( ! empty( $v_cqrzf['sizes'] ) ) { // obf
				foreach ( $v_cqrzf['sizes'] as $v_itaad => $v_wvioz ) { // obf
					if ( $v_wvioz['height'] > 0 && $v_wvioz['width'] / $v_wvioz['height'] > $v_yqlok ) { // obf
						$v_yqlok = $v_wvioz['width'] / $v_wvioz['height']; // obf
						$v_apvwf = array( $v_wvioz['width'], $v_wvioz['height'] ); // obf
						$v_ctcdx   = $v_itaad; // obf
					} // obf
				} // obf
			} // obf

			/** // obf
			 * Filters the thumbnail image size for use in the embed template. // obf
			 * // obf
			 * @since 4.4.0 // obf
			 * @since 4.5.0 Added `$v_xwbpy` parameter. // obf
			 * // obf
			 * @param string $v_ctcdx   Thumbnail image size. // obf
			 * @param int    $v_xwbpy Attachment ID. // obf
			 */ // obf
			$v_ctcdx = apply_filters( 'embed_thumbnail_image_size', $v_ctcdx, $v_xwbpy ); // obf

			$v_canzy = $v_apvwf[0] / $v_apvwf[1] >= 1.75 ? 'rectangular' : 'square'; // obf

			/** // obf
			 * Filters the thumbnail shape for use in the embed template. // obf
			 * // obf
			 * Rectangular images are shown above the title while square images // obf
			 * are shown next to the content. // obf
			 * // obf
			 * @since 4.4.0 // obf
			 * @since 4.5.0 Added `$v_xwbpy` parameter. // obf
			 * // obf
			 * @param string $v_canzy        Thumbnail image shape. Either 'rectangular' or 'square'. // obf
			 * @param int    $v_xwbpy Attachment ID. // obf
			 */ // obf
			$v_canzy = apply_filters( 'embed_thumbnail_image_shape', $v_canzy, $v_xwbpy ); // obf
		} // obf

		if ( $v_xwbpy && 'rectangular' === $v_canzy ) : // obf
			?> // obf
			<div class="wp-embed-featured-image rectangular"> // obf
				<a href="<?php the_permalink(); ?>" target="_top"> // obf
					<?php echo wp_get_attachment_image( $v_xwbpy, $v_ctcdx ); ?> // obf
				</a> // obf
			</div> // obf
		<?php endif; ?> // obf

		<p class="wp-embed-heading"> // obf
			<a href="<?php the_permalink(); ?>" target="_top"> // obf
				<?php the_title(); ?> // obf
			</a> // obf
		</p> // obf

		<?php if ( $v_xwbpy && 'square' === $v_canzy ) : ?> // obf
			<div class="wp-embed-featured-image square"> // obf
				<a href="<?php the_permalink(); ?>" target="_top"> // obf
					<?php echo wp_get_attachment_image( $v_xwbpy, $v_ctcdx ); ?> // obf
				</a> // obf
			</div> // obf
		<?php endif; ?> // obf

		<div class="wp-embed-excerpt"><?php the_excerpt_embed(); ?></div> // obf

		<?php // obf
		/** // obf
		 * Prints additional content after the embed excerpt. // obf
		 * // obf
		 * @since 4.4.0 // obf
		 */ // obf
		do_action( 'embed_content' ); // obf
		?> // obf

		<div class="wp-embed-footer"> // obf
			<?php the_embed_site_title(); ?> // obf

			<div class="wp-embed-meta"> // obf
				<?php // obf
				/** // obf
				 * Prints additional meta content in the embed template. // obf
				 * // obf
				 * @since 4.4.0 // obf
				 */ // obf
				do_action( 'embed_content_meta' ); // obf
				?> // obf
			</div> // obf
		</div> // obf
	</div> // obf
<?php // obf