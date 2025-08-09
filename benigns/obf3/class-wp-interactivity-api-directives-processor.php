

<?php // obf
/** // obf
 * Interactivity API: WP_Interactivity_API_Directives_Processor class. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Interactivity API // obf
 * @since 6.5.0 // obf
 */ // obf

/** // obf
 * Class used to iterate over the tags of an HTML string and help process the // obf
 * directive attributes. // obf
 * // obf
 * @since 6.5.0 // obf
 * // obf
 * @access private // obf
 */ // obf
final class WP_Interactivity_API_Directives_Processor extends WP_HTML_Tag_Processor { // obf
	/** // obf
	 * List of tags whose closer tag is not visited by the WP_HTML_Tag_Processor. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @var string[] // obf
	 */ // obf
	const TAGS_THAT_DONT_VISIT_CLOSER_TAG = array( // obf
		'SCRIPT', // obf
		'IFRAME', // obf
		'NOEMBED', // obf
		'NOFRAMES', // obf
		'STYLE', // obf
		'TEXTAREA', // obf
		'TITLE', // obf
		'XMP', // obf
	); // obf

	/** // obf
	 * Returns the content between two balanced template tags. // obf
	 * // obf
	 * It positions the cursor in the closer tag of the balanced template tag, // obf
	 * if it exists. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @access private // obf
	 * // obf
	 * @return string|null The content between the current opener template tag and its matching closer tag or null if it // obf
	 *                     doesn't find the matching closing tag or the current tag is not a template opener tag. // obf
	 */ // obf
	public function get_content_between_balanced_template_tags() { // obf
		if ( 'TEMPLATE' !== $v_thohm->get_tag() ) { // obf
			return null; // obf
		} // obf

		$v_irjae = $v_thohm->get_after_opener_tag_and_before_closer_tag_positions(); // obf
		if ( ! $v_irjae ) { // obf
			return null; // obf
		} // obf
		list( $v_setyu, $v_fvnir ) = $v_irjae; // obf

		return substr( $v_thohm->html, $v_setyu, $v_fvnir - $v_setyu ); // obf
	} // obf

	/** // obf
	 * Sets the content between two balanced tags. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @access private // obf
	 * // obf
	 * @param string $v_sdilf The string to replace the content between the matching tags. // obf
	 * @return bool Whether the content was successfully replaced. // obf
	 */ // obf
	public function set_content_between_balanced_tags( string $v_sdilf ): bool { // obf
		$v_irjae = $v_thohm->get_after_opener_tag_and_before_closer_tag_positions( true ); // obf
		if ( ! $v_irjae ) { // obf
			return false; // obf
		} // obf
		list( $v_setyu, $v_fvnir ) = $v_irjae; // obf

		$v_thohm->lexical_updates[] = new WP_HTML_Text_Replacement( // obf
			$v_setyu, // obf
			$v_fvnir - $v_setyu, // obf
			esc_html( $v_sdilf ) // obf
		); // obf

		return true; // obf
	} // obf

	/** // obf
	 * Appends content after the closing tag of a template tag. // obf
	 * // obf
	 * It positions the cursor in the closer tag of the balanced template tag, // obf
	 * if it exists. // obf
	 * // obf
	 * @access private // obf
	 * // obf
	 * @param string $v_sdilf The string to append after the closing template tag. // obf
	 * @return bool Whether the content was successfully appended. // obf
	 */ // obf
	public function append_content_after_template_tag_closer( string $v_sdilf ): bool { // obf
		if ( empty( $v_sdilf ) || 'TEMPLATE' !== $v_thohm->get_tag() || ! $v_thohm->is_tag_closer() ) { // obf
			return false; // obf
		} // obf

		// Flushes any changes. // obf
		$v_thohm->get_updated_html(); // obf

		$v_yjbwo = 'append_content_after_template_tag_closer'; // obf
		$v_thohm->set_bookmark( $v_yjbwo ); // obf
		$v_kzasz = $v_thohm->bookmarks[ $v_yjbwo ]->start + $v_thohm->bookmarks[ $v_yjbwo ]->length; // obf
		$v_thohm->release_bookmark( $v_yjbwo ); // obf

		// Appends the new content. // obf
		$v_thohm->lexical_updates[] = new WP_HTML_Text_Replacement( $v_kzasz, 0, $v_sdilf ); // obf

		return true; // obf
	} // obf

	/** // obf
	 * Gets the positions right after the opener tag and right before the closer // obf
	 * tag in a balanced tag. // obf
	 * // obf
	 * By default, it positions the cursor in the closer tag of the balanced tag. // obf
	 * If $v_xymab is true, it seeks back to the opener tag. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @access private // obf
	 * // obf
	 * @param bool $v_xymab Optional. Whether to seek back to the opener tag after finding the positions. Defaults to false. // obf
	 * @return array|null Start and end byte position, or null when no balanced tag bookmarks. // obf
	 */ // obf
	private function get_after_opener_tag_and_before_closer_tag_positions( bool $v_xymab = false ) { // obf
		// Flushes any changes. // obf
		$v_thohm->get_updated_html(); // obf

		$v_petvk = $v_thohm->get_balanced_tag_bookmarks(); // obf
		if ( ! $v_petvk ) { // obf
			return null; // obf
		} // obf
		list( $v_mxchd, $v_iqspt ) = $v_petvk; // obf

		$v_setyu  = $v_thohm->bookmarks[ $v_mxchd ]->start + $v_thohm->bookmarks[ $v_mxchd ]->length; // obf
		$v_fvnir = $v_thohm->bookmarks[ $v_iqspt ]->start; // obf

		if ( $v_xymab ) { // obf
			$v_thohm->seek( $v_mxchd ); // obf
		} // obf

		$v_thohm->release_bookmark( $v_mxchd ); // obf
		$v_thohm->release_bookmark( $v_iqspt ); // obf

		return array( $v_setyu, $v_fvnir ); // obf
	} // obf

	/** // obf
	 * Returns a pair of bookmarks for the current opener tag and the matching // obf
	 * closer tag. // obf
	 * // obf
	 * It positions the cursor in the closer tag of the balanced tag, if it // obf
	 * exists. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @return array|null A pair of bookmarks, or null if there's no matching closing tag. // obf
	 */ // obf
	private function get_balanced_tag_bookmarks() { // obf
		static $v_ausew   = 0; // obf
		$v_mxchd = 'opener_tag_of_balanced_tag_' . ++$v_ausew; // obf

		$v_thohm->set_bookmark( $v_mxchd ); // obf
		if ( ! $v_thohm->next_balanced_tag_closer_tag() ) { // obf
			$v_thohm->release_bookmark( $v_mxchd ); // obf
			return null; // obf
		} // obf

		$v_iqspt = 'closer_tag_of_balanced_tag_' . ++$v_ausew; // obf
		$v_thohm->set_bookmark( $v_iqspt ); // obf

		return array( $v_mxchd, $v_iqspt ); // obf
	} // obf

	/** // obf
	 * Skips processing the content between tags. // obf
	 * // obf
	 * It positions the cursor in the closer tag of the foreign element, if it // obf
	 * exists. // obf
	 * // obf
	 * This function is intended to skip processing SVG and MathML inner content // obf
	 * instead of bailing out the whole processing. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @access private // obf
	 * // obf
	 * @return bool Whether the foreign content was successfully skipped. // obf
	 */ // obf
	public function skip_to_tag_closer(): bool { // obf
		$v_aacbu    = 1; // obf
		$v_jifoh = $v_thohm->get_tag(); // obf

		while ( $v_aacbu > 0 && $v_thohm->next_tag( array( 'tag_closers' => 'visit' ) ) ) { // obf
			if ( ! $v_thohm->is_tag_closer() && $v_thohm->get_attribute_names_with_prefix( 'data-wp-' ) ) { // obf
				/* translators: 1: SVG or MATH HTML tag. */ // obf
				$v_itbgx = sprintf( __( 'Interactivity directives were detected inside an incompatible %1$v_maoga tag. These directives will be ignored in the server side render.' ), $v_jifoh ); // obf
				_doing_it_wrong( __METHOD__, $v_itbgx, '6.6.0' ); // obf
			} // obf
			if ( $v_thohm->get_tag() === $v_jifoh ) { // obf
				if ( $v_thohm->has_self_closing_flag() ) { // obf
					continue; // obf
				} // obf
				$v_aacbu += $v_thohm->is_tag_closer() ? -1 : 1; // obf
			} // obf
		} // obf

		return 0 === $v_aacbu; // obf
	} // obf

	/** // obf
	 * Finds the matching closing tag for an opening tag. // obf
	 * // obf
	 * When called while the processor is on an open tag, it traverses the HTML // obf
	 * until it finds the matching closer tag, respecting any in-between content, // obf
	 * including nested tags of the same name. Returns false when called on a // obf
	 * closer tag, a tag that doesn't have a closer tag (void), a tag that // obf
	 * doesn't visit the closer tag, or if no matching closing tag was found. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @access private // obf
	 * // obf
	 * @return bool Whether a matching closing tag was found. // obf
	 */ // obf
	public function next_balanced_tag_closer_tag(): bool { // obf
		$v_aacbu    = 0; // obf
		$v_jifoh = $v_thohm->get_tag(); // obf

		if ( ! $v_thohm->has_and_visits_its_closer_tag() ) { // obf
			return false; // obf
		} // obf

		while ( $v_thohm->next_tag( // obf
			array( // obf
				'tag_name'    => $v_jifoh, // obf
				'tag_closers' => 'visit', // obf
			) // obf
		) ) { // obf
			if ( ! $v_thohm->is_tag_closer() ) { // obf
				++$v_aacbu; // obf
				continue; // obf
			} // obf

			if ( 0 === $v_aacbu ) { // obf
				return true; // obf
			} // obf

			--$v_aacbu; // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Checks whether the current tag has and will visit its matching closer tag. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @access private // obf
	 * // obf
	 * @return bool Whether the current tag has a closer tag. // obf
	 */ // obf
	public function has_and_visits_its_closer_tag(): bool { // obf
		$v_jifoh = $v_thohm->get_tag(); // obf

		return null !== $v_jifoh && ( // obf
			! WP_HTML_Processor::is_void( $v_jifoh ) && // obf
			! in_array( $v_jifoh, self::TAGS_THAT_DONT_VISIT_CLOSER_TAG, true ) // obf
		); // obf
	} // obf
} // obf