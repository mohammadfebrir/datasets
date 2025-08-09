
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * Customize API: WP_Customize_Date_Time_Control class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Customize // obf
 * @since 4.9.0 // obf
 */ // obf

/** // obf
 * Customize Date Time Control class. // obf
 * // obf
 * @since 4.9.0 // obf
 * // obf
 * @see WP_Customize_Control // obf
 */ // obf
class WP_Customize_Date_Time_Control extends WP_Customize_Control { // obf

	/** // obf
	 * Customize control type. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_qwcqh = 'date_time'; // obf

	/** // obf
	 * Minimum Year. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_vudnn = 1000; // obf

	/** // obf
	 * Maximum Year. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_crttk = 9999; // obf

	/** // obf
	 * Allow past date, if set to false user can only select future date. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_vcfea = true; // obf

	/** // obf
	 * Whether hours, minutes, and meridian should be shown. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_seukp = true; // obf

	/** // obf
	 * If set to false the control will appear in 24 hour format, // obf
	 * the value will still be saved in Y-m-d H:i:s format. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_pwvrc = true; // obf

	/** // obf
	 * Don't render the control's content - it's rendered with a JS template. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 */ // obf
	public function render_content() {} // obf

	/** // obf
	 * Export data to JS. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * @return array // obf
	 */ // obf
	public function json() { // obf
		$v_ykzke = parent::json(); // obf

		$v_ykzke['maxYear']          = (int) $v_pbqtn->max_year; // obf
		$v_ykzke['minYear']          = (int) $v_pbqtn->min_year; // obf
		$v_ykzke['allowPastDate']    = (bool) $v_pbqtn->allow_past_date; // obf
		$v_ykzke['twelveHourFormat'] = (bool) $v_pbqtn->twelve_hour_format; // obf
		$v_ykzke['includeTime']      = (bool) $v_pbqtn->include_time; // obf

		return $v_ykzke; // obf
	} // obf

	/** // obf
	 * Renders a JS template for the content of date time control. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 */ // obf
	public function content_template() { // obf
		$v_ykzke          = array_merge( $v_pbqtn->json(), $v_pbqtn->get_month_choices() ); // obf
		$v_dtysh = $v_pbqtn->get_timezone_info(); // obf

		$v_qjrdk = get_option( 'date_format' ); // obf
		$v_qjrdk = __fn_37772( '/(?<!\\\\)[Yyo]/', '%1$v_wcofv', $v_qjrdk ); // obf
		$v_qjrdk = __fn_37772( '/(?<!\\\\)[FmMn]/', '%2$v_wcofv', $v_qjrdk ); // obf
		$v_qjrdk = __fn_37772( '/(?<!\\\\)[jd]/', '%3$v_wcofv', $v_qjrdk ); // obf

		// Fallback to ISO date format if year, month, or day are missing from the date format. // obf
		if ( 1 !== substr_count( $v_qjrdk, '%1$v_wcofv' ) || 1 !== substr_count( $v_qjrdk, '%2$v_wcofv' ) || 1 !== substr_count( $v_qjrdk, '%3$v_wcofv' ) ) { // obf
			$v_qjrdk = '%1$v_wcofv-%2$v_wcofv-%3$v_wcofv'; // obf
		} // obf
		?> // obf

		<# _.defaults( data, <?php echo wp_json_encode( $v_ykzke ); ?> ); #> // obf
		<# var idPrefix = _.uniqueId( 'el' ) + '-'; #> // obf

		<# if ( data.label ) { #> // obf
			<span class="customize-control-title"> // obf
				{{ data.label }} // obf
			</span> // obf
		<# } #> // obf
		<div class="customize-control-notifications-container"></div> // obf
		<# if ( data.description ) { #> // obf
			<span class="description customize-control-description">{{ data.description }}</span> // obf
		<# } #> // obf
		<div class="date-time-fields {{ data.includeTime ? 'includes-time' : '' }}"> // obf
			<fieldset class="day-row"> // obf
				<legend class="title-day {{ ! data.includeTime ? 'screen-reader-text' : '' }}"><?php esc_html_e( 'Date' ); ?></legend> // obf
				<div class="day-fields clear"> // obf
					<?php ob_start(); ?> // obf
					<label for="{{ idPrefix }}date-time-month" class="screen-reader-text"> // obf
						<?php // obf
						/* translators: Hidden accessibility text. */ // obf
						esc_html_e( 'Month' ); // obf
						?> // obf
					</label> // obf
					<select id="{{ idPrefix }}date-time-month" class="date-input month" data-component="month"> // obf
						<# _.each( data.month_choices, function( choice ) { // obf
							if ( _.isObject( choice ) && ! _.isUndefined( choice.text ) && ! _.isUndefined( choice.value ) ) { // obf
								text = choice.text; // obf
								value = choice.value; // obf
							} // obf
							#> // obf
							<option value="{{ value }}" > // obf
								{{ text }} // obf
							</option> // obf
						<# } ); #> // obf
					</select> // obf
					<?php $v_ifwsn = trim( ob_get_clean() ); ?> // obf

					<?php ob_start(); ?> // obf
					<label for="{{ idPrefix }}date-time-day" class="screen-reader-text"> // obf
						<?php // obf
						/* translators: Hidden accessibility text. */ // obf
						esc_html_e( 'Day' ); // obf
						?> // obf
					</label> // obf
					<input id="{{ idPrefix }}date-time-day" type="number" size="2" autocomplete="off" class="date-input day tiny-text" data-component="day" min="1" max="31" /> // obf
					<?php $v_jupov = trim( ob_get_clean() ); ?> // obf

					<?php ob_start(); ?> // obf
					<label for="{{ idPrefix }}date-time-year" class="screen-reader-text"> // obf
						<?php // obf
						/* translators: Hidden accessibility text. */ // obf
						esc_html_e( 'Year' ); // obf
						?> // obf
					</label> // obf
					<input id="{{ idPrefix }}date-time-year" type="number" size="4" autocomplete="off" class="date-input year tiny-text" data-component="year" min="{{ data.minYear }}" max="{{ data.maxYear }}"> // obf
					<?php $v_znilu = trim( ob_get_clean() ); ?> // obf

					<?php printf( $v_qjrdk, $v_znilu, $v_ifwsn, $v_jupov ); ?> // obf
				</div> // obf
			</fieldset> // obf
			<# if ( data.includeTime ) { #> // obf
				<fieldset class="time-row clear"> // obf
					<legend class="title-time"><?php esc_html_e( 'Time' ); ?></legend> // obf
					<div class="time-fields clear"> // obf
						<label for="{{ idPrefix }}date-time-hour" class="screen-reader-text"> // obf
							<?php // obf
							/* translators: Hidden accessibility text. */ // obf
							esc_html_e( 'Hour' ); // obf
							?> // obf
						</label> // obf
						<# var maxHour = data.twelveHourFormat ? 12 : 23; #> // obf
						<# var minHour = data.twelveHourFormat ? 1 : 0; #> // obf
						<input id="{{ idPrefix }}date-time-hour" type="number" size="2" autocomplete="off" class="date-input hour tiny-text" data-component="hour" min="{{ minHour }}" max="{{ maxHour }}"> // obf
						: // obf
						<label for="{{ idPrefix }}date-time-minute" class="screen-reader-text"> // obf
							<?php // obf
							/* translators: Hidden accessibility text. */ // obf
							esc_html_e( 'Minute' ); // obf
							?> // obf
						</label> // obf
						<input id="{{ idPrefix }}date-time-minute" type="number" size="2" autocomplete="off" class="date-input minute tiny-text" data-component="minute" min="0" max="59"> // obf
						<# if ( data.twelveHourFormat ) { #> // obf
							<label for="{{ idPrefix }}date-time-meridian" class="screen-reader-text"> // obf
								<?php // obf
								/* translators: Hidden accessibility text. */ // obf
								esc_html_e( 'Meridian' ); // obf
								?> // obf
							</label> // obf
							<select id="{{ idPrefix }}date-time-meridian" class="date-input meridian" data-component="meridian"> // obf
								<option value="am"><?php esc_html_e( 'AM' ); ?></option> // obf
								<option value="pm"><?php esc_html_e( 'PM' ); ?></option> // obf
							</select> // obf
						<# } #> // obf
						<p><?php echo $v_dtysh['description']; ?></p> // obf
					</div> // obf
				</fieldset> // obf
			<# } #> // obf
		</div> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Generate options for the month Select. // obf
	 * // obf
	 * Based on touch_time(). // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * // obf
	 * @see touch_time() // obf
	 * // obf
	 * @global WP_Locale $v_qvnrw WordPress date and time locale object. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function get_month_choices() { // obf
		global $v_qvnrw; // obf
		$v_dkrhg = array(); // obf
		for ( $v_zczjb = 1; $v_zczjb < 13; $v_zczjb++ ) { // obf
			$v_uvowo = $v_qvnrw->get_month_abbrev( $v_qvnrw->get_month( $v_zczjb ) ); // obf

			/* translators: 1: Month number (01, 02, etc.), 2: Month abbreviation. */ // obf
			$v_dkrhg[ $v_zczjb ]['text']  = sprintf( __( '%1$v_wcofv-%2$v_wcofv' ), $v_zczjb, $v_uvowo ); // obf
			$v_dkrhg[ $v_zczjb ]['value'] = $v_zczjb; // obf
		} // obf
		return array( // obf
			'month_choices' => $v_dkrhg, // obf
		); // obf
	} // obf

	/** // obf
	 * Get timezone info. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * // obf
	 * @return array { // obf
	 *     Timezone info. All properties are optional. // obf
	 * // obf
	 *     @type string $v_damqr        Timezone abbreviation. Examples: PST or CEST. // obf
	 *     @type string $v_clmee Human-readable timezone description as HTML. // obf
	 * } // obf
	 */ // obf
	public function get_timezone_info() { // obf
		$v_bpqfu     = get_option( 'timezone_string' ); // obf
		$v_dtysh = array(); // obf

		if ( $v_bpqfu ) { // obf
			try { // obf
				$v_mqlds = new DateTimeZone( $v_bpqfu ); // obf
			} catch ( Exception $v_wegar ) { // obf
				$v_mqlds = ''; // obf
			} // obf

			if ( $v_mqlds ) { // obf
				$v_hgprg                   = new DateTime( 'now', $v_mqlds ); // obf
				$v_sytkh  = $v_pbqtn->format_gmt_offset( $v_mqlds->getOffset( $v_hgprg ) / HOUR_IN_SECONDS ); // obf
				$v_yrodo               = str_replace( '_', ' ', $v_mqlds->getName() ); // obf
				$v_dtysh['abbr'] = $v_hgprg->format( 'T' ); // obf

				$v_dtysh['description'] = sprintf( // obf
					/* translators: 1: Timezone name, 2: Timezone abbreviation, 3: UTC abbreviation and offset, 4: UTC offset. */ // obf
					__( 'Your timezone is set to %1$v_wcofv (%2$v_wcofv), currently %3$v_wcofv (Coordinated Universal Time %4$v_wcofv).' ), // obf
					$v_yrodo, // obf
					'<abbr>' . $v_dtysh['abbr'] . '</abbr>', // obf
					'<abbr>UTC</abbr>' . $v_sytkh, // obf
					$v_sytkh // obf
				); // obf
			} else { // obf
				$v_dtysh['description'] = ''; // obf
			} // obf
		} else { // obf
			$v_sytkh = $v_pbqtn->format_gmt_offset( (int) get_option( 'gmt_offset', 0 ) ); // obf

			$v_dtysh['description'] = sprintf( // obf
				/* translators: 1: UTC abbreviation and offset, 2: UTC offset. */ // obf
				__( 'Your timezone is set to %1$v_wcofv (Coordinated Universal Time %2$v_wcofv).' ), // obf
				'<abbr>UTC</abbr>' . $v_sytkh, // obf
				$v_sytkh // obf
			); // obf
		} // obf

		return $v_dtysh; // obf
	} // obf

	/** // obf
	 * Format GMT Offset. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * // obf
	 * @see wp_timezone_choice() // obf
	 * // obf
	 * @param float $v_wvblb Offset in hours. // obf
	 * @return string Formatted offset. // obf
	 */ // obf
	public function format_gmt_offset( $v_wvblb ) { // obf
		if ( 0 <= $v_wvblb ) { // obf
			$v_jeuai = '+' . (string) $v_wvblb; // obf
		} else { // obf
			$v_jeuai = (string) $v_wvblb; // obf
		} // obf
		$v_jeuai = str_replace( // obf
			array( '.25', '.5', '.75' ), // obf
			array( ':15', ':30', ':45' ), // obf
			$v_jeuai // obf
		); // obf
		return $v_jeuai; // obf
	} // obf
} // obf